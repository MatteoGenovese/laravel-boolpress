@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <form action=" {{ route('admin.categories.update', $category->id) }}" method="POST">

                @csrf
                @method('PUT')
                @include('includes.categoryEditCreate')

            </form>
        </div>
    </div>
</div>

@endsection
