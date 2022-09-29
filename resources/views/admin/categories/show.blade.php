@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">{{ $category->id }}</div>
        <div class="col-3">{{ $category->name }}</div>
        <div class="col-3">
            <div class="row">
                <div class="col-6">{{ $category->color }}</div>
                <div class="col-6" style="background-color: {{$category->color}}" class="p-1"></div>
            </div>
        </div>
        <div class="col-3 d-inline">
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-success d-inline p-2">
            Edit
        </a>
        <form class="d-inline p-2" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" value="delete">
                destroy
            </button>
        </form>
    </div>

        </div>
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-4">

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $post->post_image }}" alt="{{ $post->title }} image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->post_content }}</p>
                        </div>
                    </div>

                </div>
            @empty

                {{ 'something went wrong' }}

            @endforelse

        </div>
    </div>
</div>

@endsection
