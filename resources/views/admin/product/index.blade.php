@extends('admin.layout.admin')

@section('content')

<h3>Products</h3>



   <div class="row">
                        <form action="{{ url()->current() }}">
                            <div class="col-md-10">
                                <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan Nama Produk,ID dan Tanggal..." value="{{ request('keyword') }}">
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                    <br>

<table class="table table-bordered table-responsive table-hover order-column">
    <thead>
    <tr>
    
        <th>Nama Product</th>
        <th>Kategori</th>
        <th>Size</th>
        <th>Images</th>
        <th>Aksi</th>
        
            </tr>
        </thead>
    <tbody>
@if($product != NULL)
      @foreach($products as $produk)
                    <tr>
                        
                        <td>{{ $produk->name }}</td>
                        <td>{{ $produk->category->name }}</td>
                        <td>{{ $produk->size }}</td>
                        <td>{{ $produk->images }}</td>
                        <td>
                              <form action="{{ action('ProductsController@destroy', $produk->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ url('kontak_edit',$produk->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
        <h1>kosong</h1>
{{-- 
        @empty

        <h3>No products</h3>

    @endforelse --}}
</ul>


@endsection