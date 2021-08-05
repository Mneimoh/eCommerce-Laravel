@extends('master')
@section('content')
<div class="custom-product custom-ordernow">
  <div class="">
    <div class="col-sm-10">
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Amount</th>
            <td>$ {{$total}}</td>
          </tr>
          <tr>
            <th scope="row">Tax</th>
            <td>$ 0</td>
          </tr>
          <tr>
            <th scope="row">Delivery</th>
            <td colspan="2">$ 10</td>
          </tr>
          <tr>
            <th scope="row">Total Amount</th>
            <td colspan="2">$ {{$total+10}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <textarea name="address" class="form-control" placeholder="Enter your address" > </textarea>
            <div id="emailHelp" class="form-text">We'll never share your address with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="exampleCheck1">Payment Method</label><br/><br/>
            <input type="radio" name="Payment" class="form-check-input"><span>Online Payment</span><br/><br/>
            <input type="radio" name="Payment" class="form-check-input"><span>EMI Payment</span><br/><br/>
            <input type="radio" name="Payment" class="form-check-input"><span>Payment on Delivery</span><br/><br/>
          </div>
          <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
      </div>
    </div>
  </div>
  
</div>

@endsection