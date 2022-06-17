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
                                <li class="breadcrumb-item"><a href="{{ url('/admin/religion') }}">Religion</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Religion</a></li>
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
                                <form action="{{ url('admin/status-update') }}/{{ $materialStatus->id }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="">Profile For</label>
                                        <input type="text" class="form-control" value="{{ $materialStatus->marital_status }}" name="marital_status">
                                        @error('religion')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-bg-gradient-x-blue-green">Update</button>
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
