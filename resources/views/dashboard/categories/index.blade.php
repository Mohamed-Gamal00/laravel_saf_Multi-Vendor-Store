@extends('layouts.dashboard_layout')

@section('title', 'Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Categories</li>

@endsection

@section('content')
    <div class="col-md-12 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Table head options</h5>
                <a href="{{ route('dashboard.categories.create') }}" class="btn text-white btn-sm btn-primary mb-5">create</a>
                <tbody>
                    @if (session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>images</th>
                                <th>ID</th>
                                <th>name</th>
                                <th>parent</th>
                                <th>created_at</th>
                                <th colspan="2">
                                    changes
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($categories->count())

                                @foreach ($categories as $category)
                                    <tr>
                                        <td><img src="{{ asset('storage/'.$category->image )}}" height="30" alt="img"></td>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->parent_id }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.categories.edit', $category->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                        </td>
                                        <td>

                                            <form action="{{ route('dashboard.categories.destroy', $category->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="7">categories not found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </div> <!-- Bordered table -->
@endsection
