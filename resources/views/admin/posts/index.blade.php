@extends('layouts.app')

@section('content')


<div class="container">

    <a href="{{ route('admin.posts.create') }}" class="btn btn-dark mb-2">Create new</a>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                <span style="
                                border: 8px solid {{ $post->category->color }};
                                border-radius: 5px;
                                    " class="px-2 py-1">{{ $post->category->name }}</span>
                            </td>
                            <td>
                                @forelse ($post->tags as $tag)
                                    {{ $tag->name}}
                                @empty
                                    {{ '-' }}
                                @endforelse

                            </td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-success d-inline p-2">
                                    View
                                </a>
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success d-inline p-2">
                                    Edit
                                </a>

                                <form class="d-inline p-1" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" value="delete">
                                        destroy
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty

                    @endforelse

                </tbody>
            </table>


        </div>
    </div>
</div>

@endsection
