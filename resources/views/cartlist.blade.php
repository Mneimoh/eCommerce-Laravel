@extends('master')
@section('content')
<div class="custom-product custom-cartlist">
  <div class="row">
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h4>Result for Products</h4>
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
                  <button class="btn btn-warning">Remove to Cart</button>
                </div>
              </div>
            </div>
          @endforeach
      </div>
     
    </div>
    <div class="col-sm-2">sdjsdak</div>
  </div>
  
</div>

@endsection