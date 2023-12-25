@extends('admin.layout.master')

@section('content')
   <div>
    <a href="{{ route('color.index')}}" class="btn btn-dark text-white"><i class="fa-solid fa-border-all"></i> All Color</a>
   </div>
    <hr>
        <form action="{{ route('color.update',$color->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Enter Color Name</label>
                <input type="text" class="form-control my-3" name="name" placeholder="Enter Color Name" value="{{ $color->name }}">
                <button type="submit" class="btn btn-success my-3">
                    <i class="fa-solid fa-upload"></i> update
                </button>
            </div>
        </form>
    </div>
@endsection
