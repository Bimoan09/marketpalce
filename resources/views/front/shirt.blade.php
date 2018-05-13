@extends('layouts.main')

@section('title','shirt')

@section('content')

    <!-- products listing -->
    <!-- Latest SHirts -->

    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{asset("images/$product->image")}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">Rp.{{$product->price}}</span> TokoKita.com
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <p>
                            {!! $product->description !!}
                        </p>
                        <h4>
                            Size: {!! $product->size !!}
                        </h4>
                    </div>
                </div>
                <br>
               
                        <a href="{{url('/cart')}}">
                            <button class="button large">Tambah ke Keranjang</button>
                        </a>
                    </div>
                </div>


            </div>


            <div class="item-wrapper">

                <star-rating :rating="{{$product->getStarRating()}}"></star-rating>
                <br>

                @if(auth()->check())
                <a href="#" class="button" data-open="product-review-modal">tulis review</a>

               @include('admin.product.partials.review_form')
                @else
                    <a href="/login" class="button" >tulis review</a>

                @endif
            </div>

            <div class="item-wrapper">
                <ul>
                @forelse($product->reviews as $review)

                        <li>
                            {{$review->headline}}
                        </li>


                    @empty

                @endforelse
                </ul>

            </div>
        </div>
    </div>




<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://tokokita.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
@endsection

