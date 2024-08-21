@extends('layout.app')
@section('title', 'create')
@section('container')


<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">

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
  <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" id="category" name="category_id">
            <option value="">Select a category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Upload Image :</label>
    <input type="file" class="form-control" id="exampleFormControlInput2" name="image">
</div>
<button type="submit" class="btn btn-success mt-3">Add Product</button>

</form>
@stop