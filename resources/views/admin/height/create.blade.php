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
                                <li class="breadcrumb-item"><a href="{{ url('/admin/height') }}">Height</a></li>
                                <li class="breadcrumb-item"><a href="#">Add Title For Height</a></li>
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
                                <form action="{{ url('admin/height-add-process') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                            <label for="">Ft:</label>
                                            <input type="number" class="form-control" placeholder="Height in Ft" name="feet">
                                            @error('height')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="">inches:</label>
                                            <input type="number" class="form-control" placeholder="Height in inches" name="inches">
                                            @error('height')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                    
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
