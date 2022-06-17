@extends('layouts.admin_layout')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/admin/status') }}">Marital Status List </a></li>
                                <li class="breadcrumb-item"><a href="#">Add Title For Marital Status</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    Add Title
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('admin/status-add-process') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Add Marital Status Title</label>
                                        <input type="text" class="form-control" name="marital_status">
                                        @error('marital_status')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-bg-gradient-x-blue-green">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
