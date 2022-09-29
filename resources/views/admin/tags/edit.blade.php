@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <form action=" {{ route('admin.tags.update', $tag->id) }}" method="POST">

                @csrf
                @method('PUT')
                @include('includes.tagEditCreate')

            </form>
        </div>
    </div>
</div>

@endsection
