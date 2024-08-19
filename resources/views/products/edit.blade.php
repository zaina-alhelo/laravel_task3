@extends('layout.app')
@section('title', 'edit')

@section('container')
<form action="{{route('products.update', $product->id)}}" method="POST">

    @csrf
@method('PUT')  
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$product->product_name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->product_description}}</textarea>
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label">Product Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="price" value="{{$product->product_price}}">
    </div>
<button type="submit" class="btn btn-success mt-3">Update</button>

</form>

@stop


