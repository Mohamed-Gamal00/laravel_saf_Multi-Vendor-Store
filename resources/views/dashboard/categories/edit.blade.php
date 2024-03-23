@extends('layouts.dashboard_layout')

@section('title', 'Edit Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">Categories</li>
    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>

@endsection

@section('content')
    <div class="col-md-12 my-4">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">craete head options</h5>
                <form action="{{ route('dashboard.categories.update',$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    @include('dashboard.categories._form',[
                        'button_lable' => 'Update'
                    ])
                </form>
            </div>
        </div>
    </div> <!-- Bordered table -->
@endsection
