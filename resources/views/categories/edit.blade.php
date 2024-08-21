@extends('layout.app')
@section('title', 'edit')

@section('container')
<form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">

    @csrf
@method('PUT')  
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">category Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$category->category_name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">category Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$category->category_description}}</textarea>
    </div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Upload Image :</label>
    <input type="file" class="form-control" id="exampleFormControlInput2" name="image">
</div>
<button type="submit" class="btn btn-success mt-3">Update</button>

</form>

@stop


