@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                @if(\Session::has('alert-failed'))
                <div class="alert alert-failed">
                    <div>{{Session::get('alert-failed')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
                    <div class="panel-heading">Barang anda segera dikirim, Proses pembayaran terlebih dahulu</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/sendEmail') }}">
                            {{ csrf_field() }}

                            <div class=>
                                <label for="name" class="col-md-4 control-label">Nama</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama"
                                           required>

                                   </div>
                            </div>
                            </br>
                            </br>


                            <div class=>
                                <label for="email" class="col-md-4 control-label">Email kamu</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                          required>

                                   </div>
                            </div>
                            </br>
                            </br>


                            <div class= >
                                <label for="number" class="col-md-4 control-label">Nomer rekening</label>

                                <div class="col-md-6">
                                    <input id="p" type="number" class="form-control" name="password" required>
                                </div>
                                
                                </br>
                                </br>
                                </br>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Proses Pembayaran
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
