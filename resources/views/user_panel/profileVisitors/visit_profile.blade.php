@extends('layouts.userPanel_layout')


@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="profile card p-2">
                    <div class="profile-header bg-grey p-2 " style="display: inline-flex;">
                        <h3>
                            <strong>{{ $user->first_name }} {{ $user->last_name }}</strong>
                        </h3>
                        <!--<a href="{{route('sendrequest',['id' => $user->user_id])}}" class="btn btn-primary" style="float:right;">Send Connection Request</a>-->
                    </div>
                    <div class="profile-detail mt-2">
                        <div class="row">
                        @php($image = $user->getUserImages($user->user_id))
                            <div class="col-md-4">
                                @if(isset($image->id))
                            <img src="{{asset($image->path)}}" style="width:100%;height:90%;" alt="text">

                            @else
                            <img src="" alt="text">
                            
                            @endif

                            </div>
                            <div class="col-md-8 p-2">
                                <div class="border-bottom mb-3 pb-3">
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <div class="row">
                                              
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Marital Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{ $user->material_status }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Posted by</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{ $user->profile_for }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Religion</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->religion}}/{{$user->community}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Community</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->community}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Location</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->city_live}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Mother Tongue</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->community}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>
        </div>
    </div>


@endsection
