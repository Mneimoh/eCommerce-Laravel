@extends('master')
@section('content')
<div class="custom-product custom-cartlist">
  <div class="">
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h4>Result for Products</h4>
        <a class="btn btn-success" href="/ordernow">Order Now</a><br/><br/>
          @foreach($products as $product)
            <div class="searched-item cartlist-divider">
              <div class="row">
                <div class="col-sm-3">
                  <a href="detail/{{$product->id}}">
                    <img src="{{$product->gallery}}" class="trending-img" alt="...">
                  </a>
                </div>
                <div class="col-sm-4">
                  <div class="">
                    <h3>{{$product->name}}</h3>
                    <h5>{{$product->description}}</h5>
                  </div>
                </div>
                <div class="col-sm-3">
                  <a href="/removecart/{{$product->cart_id}}"><button class="btn btn-warning">Remove to Cart</button></a>
                </div>
              </div>
            </div>
          @endforeach
          <a class="btn btn-success" href="/ordernow">Order Now</a><br/><br/>
      </div>
     
    </div>
  </div>
  
</div>

@endsection