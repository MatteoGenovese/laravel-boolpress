@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">{{ $tag->id }}</div>
        <div class="col-4">{{ $tag->name }}</div>
        <div class="col-4">

            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-sm btn-success d-inline p-2 mx-2">
                Edit
            </a>

            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" class="d-inline p-2 mx-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" value="delete">
                    destroy
                </button>
            </form>

        </div>

    </div>
</div>

@endsection
