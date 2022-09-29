@extends('layouts.app')



@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <form action=" {{ route('admin.posts.store') }}" method="POST"  enctype="multipart/form-data" >

                @csrf
                @method('POST')
                @include('admin.posts.includes.form')

            </form>
        </div>
    </div>
</div>

@endsection
