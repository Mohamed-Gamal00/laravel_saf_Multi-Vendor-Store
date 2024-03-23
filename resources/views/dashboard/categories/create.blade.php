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
                <h5 class="card-title">craete head options</h5>
                <form action="{{ route('dashboard.categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('dashboard.categories._form')
                </form>
            </div>
        </div>
    </div> <!-- Bordered table -->
@endsection
