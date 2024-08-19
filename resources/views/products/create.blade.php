@extends('layout.app')
@section('title', 'create')
@section('container')


<form action="{{route('products.store')}}" method="POST">

@csrf

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
<div class="mb-3 mt-3">
    <label for="exampleFormControlInput1" class="form-label"> Product Price</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="Price"  step="0.01">
</div>

<button type="submit" class="btn btn-success mt-3">Add Product</button>

</form>
@stop