@extends('admin.layout.master')

@section('content')
    <div>
        <a href="{{ route('category.create') }}" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i> Create Category</a>
    </div>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cat as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>
                    <a href="{{ route('category.edit',$c->slug) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <form action="{{ route('category.destroy',$c->slug) }}" class="d-inline" method="POST" onsubmit="return confirm('Are You Sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
   <span class="my-3">
    {{ $cat->links() }}
   </span>
@endsection
