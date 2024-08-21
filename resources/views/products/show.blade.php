
@extends('layout.app')
@section('title', 'show')
@section('container')

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset($product->image)}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name : {{$product->product_name}}</h5>
        <p class="card-text">Description :  {{$product->product_description}}</p>
        <p class="card-text"><small class="text-body-secondary">Price : {{$product->product_price}}</small></p>
                <a href="{{route('products.index', $product['id'])}}" class="btn btn-info">back</a>

      </div>
    </div>
  </div>
</div>
@stop   