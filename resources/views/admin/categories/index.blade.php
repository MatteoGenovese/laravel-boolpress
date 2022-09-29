@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Color</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                {{-- $newCategory = new Category();
                $newCategory->name = $name;
                $newCategory->color =$faker->hexColor();
                $newCategory->save(); --}}
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td >
                                <div class="row">
                                    <div class="col-6">{{ $category->color }}</div>
                                    <div class="col-6" style="background-color: {{$category->color}}" class="p-1">
                                    </div>
                                </div>
                                </td>
                            <td>{{ $category->title }}</td>
                            <td>
                                <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-sm btn-success d-inline p-2">
                                    View
                                </a>
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-success d-inline p-2">
                                    Edit
                                </a>

                                <form class="d-inline p-1" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
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
