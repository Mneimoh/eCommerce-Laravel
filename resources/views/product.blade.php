@extends('master')
@section('content')
<div class="custom-product">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  	@foreach($products as $product)
    <a href="detail/{{$product['id']}}">
    	<div class="carousel-item {{$product['id']==1?'active':''}}">
      		<img src="{{$product['gallery']}}" class="slider-img d-block w-100" alt="...">
      		<div class="carousel-caption slider-text d-none d-md-block">
        		<h3>{{$product['name']}}</h3>
        		<p>{{$product['description']}}</p>
      		</div>
    	</div>
    </a>
    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-wrapper">
	<h3>Trending Products</h3>
	@foreach($products as $product)
    <a href="detail/{{$product['id']}}">
	    <div class="trending-item">
	      <img src="{{$product['gallery']}}" class="trending-img" alt="...">
	      <div class="">
	        <h3>{{$product['name']}}</h3>
	      </div>
	    </div>
    </a>
    @endforeach
</div>
</div>

@endsection