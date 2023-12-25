@extends('admin.layout.master')

@section('content')
   <div>
    <a href="{{ route('color.index')}}" class="btn btn-dark text-white"><i class="fa-solid fa-border-all"></i> All Color</a>
   </div>
    <hr>
        <form action="{{ route('color.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Enter Color Name</label>
                <input type="text" class="form-control my-3" name="name" placeholder="Enter Color Name">
                <button type="submit" class="btn btn-success my-2">
                    <i class="fa-solid fa-circle-plus"></i> Create
                </button>
            </div>
        </form>
    </div>
@endsection
