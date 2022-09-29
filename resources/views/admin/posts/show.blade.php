@extends('layouts.app')

@php
$date = $post->post_date;
$newDate = explode(' ', $date);
@endphp

@section('content')
<div class="container">
    <div class="row">

        <div class="col-6">
            <div class="row">
                <div class="col-12"><img src="{{ $post->post_image }}" class="w-100" alt="{{ $post->title }} image"></div>
                <img src="{{ asset('storage/'.$post->post_image) }}" class="w-100">
                <div class="col-12 ">{{ $post->title }}</div>
            </div>
        </div>

        <div class="col-6">

            <div class="row">
                <div class="col-12">{{ $post->post_content }}</div>
            </div>

            <div class="row mt-4">
                <div class="col">{{ $post->user->name }}</div>
                <div class="col">{{ $newDate[0] }}</div>
                <div class="col">
                        @forelse ($tags as $tag)
                            {{ '#'.$tag->name }} <br>
                        @empty
                            {{ 'No tags..' }}
                        @endforelse
                </div>
                <div class="col d-inline">
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                        Edit
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" value="delete">
                            destroy
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
