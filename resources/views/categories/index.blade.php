@extends('layout.app')
@section('title', 'index')


@section('container')





@if (session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="text-center">

    <a href="{{route('categories.create')}}" class="btn btn-success">Add category</a>
</div>
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">category Name</th>

            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$category->category_name}}</td>
  


                <td><a href="{{route('categories.show', $category['id'])}}" class="btn btn-info">view</a>
                    <a href="{{route('categories.edit', $category['id'])}}" class="btn btn-primary">Edit</a>
                    <form style="display:inline;" method='POST' action={{route('categories.destroy', $category->id)}} onsubmit="return deleteconform()" >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
<script>
    function deleteConfirm() {
        return confirm("Are you sure you want to delete?");
    }

    var successMessage = document.getElementById('success-message');
      
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.transition = "opacity 1s";
            successMessage.style.opacity = 0;

            setTimeout(function() {
                successMessage.remove();
            }, 1000);
        }, 1000);
    }
</script>



@stop