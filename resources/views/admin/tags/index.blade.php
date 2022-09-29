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
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tags as $tag)
                        <tr>
                            <td scope="row">{{ $tag->id }}</td>


                            <td>{{ $tag->name }}</td>
                            <td class="">
                                <a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-sm btn-success d-inline p-2 mx-2">
                                    View
                                </a>
                                <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-sm btn-success d-inline p-2 mx-2">
                                    Edit
                                </a>

                                <form class="d-inline p-1" action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
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
