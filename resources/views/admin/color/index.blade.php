@extends('admin.layout.master')
@section('content')
<div>
    <a href="{{ route('color.create') }}" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i> Create Color</a>
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
        @foreach ($color as $c)
        <tr>
            <td>{{ $c->name }}</td>
            <td>
                <a href="{{ route('color.edit',$c->slug) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                <form action="{{ route('color.destroy',$c->slug) }}" class="d-inline" method="POST" onsubmit="return confirm('Are You Sure?')">
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
    {{ $color->links() }}
</span>
@endsection
