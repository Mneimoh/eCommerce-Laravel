@extends('master')
@section('content')
<div class="custom-product custom-cartlist">
  <div class="">
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h4>My Orders</h4>
          @foreach($orders as $product)
            <div class="searched-item cartlist-divider">
              <div class="row">
                <div class="col-sm-3">
                  <a href="detail/{{$product->id}}">
                    <img src="{{$product->gallery}}" class="trending-img" alt="...">
                  </a>
                </div>
                <div class="col-sm-4">
                  <div class="">
                    <h2>Name : {{$product->name}}</h2>
                    <h5>Delivery Status : {{$product->status}}</h5>
                    <h5>Address : {{$product->address}}</h5>
                    <h5>Payment Stutus : {{$product->payment_status}}</h5>
                    <h5>Payment Method : {{$product->payment_method}}</h5>
                  </div>
                </div>
                <div class="col-sm-3">
                  <a href="/removecart"><button class="btn btn-warning">Remove to Cart</button></a>
                </div>
              </div>
            </div>
          @endforeach
      </div>
     
    </div>
  </div>
  
</div>

@endsection