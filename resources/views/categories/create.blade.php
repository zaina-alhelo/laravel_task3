@extends('layout.app')
@section('title', 'create')
@section('container')


<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Category Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Upload Image :</label>
    <input type="file" class="form-control" id="exampleFormControlInput2" name="image">
</div>


<button type="submit" class="btn btn-success mt-3">Add Category</button>

</form>
@stop