@extends('admin.layout.master')

@section('content')
   <div>
    <a href="{{ route('category.index')}}" class="btn btn-dark text-white"><i class="fa-solid fa-border-all"></i> All category</a>
   </div>
    <hr>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Enter Category Name</label>
                <input type="text" class="form-control my-3" name="name" placeholder="Enter Category Name">
                <button type="submit" class="btn btn-success my-2">
                    <i class="fa-solid fa-circle-plus"></i> Create
                </button>
            </div>
        </form>
    </div>
@endsection
