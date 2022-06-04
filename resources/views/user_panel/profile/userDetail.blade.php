@extends('layouts.userPanel_layout')


@section('content')

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="profile card p-2">
                    <div class="profile-header bg-grey p-2">
                        <h3>
                            <strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong>
                        </h3>
                    </div>
                    <div class="profile-detail mt-2">
                        <div class="row">
                            <div class="col-md-4">@if(isset($image->id))
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
                                                    <p class="text-light mb-0 p-1">Age / Height</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{$age}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light p-1 mb-0">Marital Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->material_status }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Posted by</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ Auth::user()->profile_for }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Religion</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{Auth::user()->religion}}/{{Auth::user()->community}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Community</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{Auth::user()->community}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Location</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{$user->city_live}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-2">Mother Tongue</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{Auth::user()->community}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--      Manage Your Profile      --}}
                                <div class="manage-profile p-3 border">
                                    <h6 class="text-blue">
                                        Manage Your Profile
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <i class="fa fa-stop text-danger font-8" aria-hidden="true"></i><a
                                                href="{{ url('userPanel/edit-profile') }}/{{ Auth::id() }}" class="font-13">&nbsp;&nbsp;&nbsp;Edit Your Profile</a>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="fa fa-stop text-danger font-8" aria-hidden="true"></i><a
                                                href="{{ url('userPanel') }}" class="font-13">&nbsp;&nbsp;&nbsp;View Profile Stats</a>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="fa fa-stop text-danger font-8" aria-hidden="true"></i><a
                                                href="#" class="font-13">&nbsp;&nbsp;&nbsp;Edit Partner Profile</a>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="fa fa-stop text-danger font-8" aria-hidden="true"></i><a
                                                href="{{ url('userPanel/add-images') }}" class="font-13">&nbsp;&nbsp;&nbsp;Add Photos</a>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="fa fa-stop text-danger font-8" aria-hidden="true"></i><a
                                                href="#" class="font-13">&nbsp;&nbsp;&nbsp;Hide / Delete Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 p-3">

                            {{--       About uer Details                         --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="border-bottom pb-1 text-blue "><strong>
                                            Personality, Family Details, Career, Partner Expectations etc.
                                        </strong></label>
                                    <p class="mb-0 w-100 p-2 font-12 color-dark">
                                        {{$user->bio}}
                                    </p>
                                </div>
                            </div>
{{--                            Basic Life Style--}}
                            <div class="col-md-12 pt-10">
                                <div class="form-group border-bottom pb-3">
                                    <label for="" class="border-bottom pb-1 text-blue" ><strong>Basics & Lifestyle</strong></label>
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Age</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $age }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Date of Birth</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{Auth::user()->dob}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Marital Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{$user->material_status}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Height</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->height }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Grew up in</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{Auth::user()->living_in}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Diet</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->diet }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Personal Values</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;Will Tell You Letter</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Sun Sign</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;Pisces</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Blood Group</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{$user->blood_group}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Health Information</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;Not Specified</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Disability</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{$user->disability}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            Religious Background--}}
                            <div class="col-md-12 mt-3">
                                <div class="form-group border-bottom pb-3">
                                    <label for="" class="border-bottom pb-1 text-blue" ><strong>Religious Background</strong></label>
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Religion</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ Auth::user()->religion }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Community</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ Auth::user()->community }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Sub community</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->sub_community }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Mother Tongue</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->sub_community }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            Fami;y Details--}}
                            <div class="col-md-12 mt-3">
                                <div class="form-group border-bottom pb-3">
                                    <label for="" class="border-bottom pb-1 text-blue"><strong>Family details</strong></label>
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Father's Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->father_status }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Mother's Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->mother_status }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Family Location</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->city_live }},{{ Auth::user()->living_in }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Native Place</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->native_place }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">No.of Siblings</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->siblings }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Family Type</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->family_type }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Family Values</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->family_values }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Family Affluence</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->family_affluence }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            Education & carer--}}
                            <div class="col-md-12 mt-3">
                                <div class="form-group border-bottom pb-3">
                                    <label for="" class="border-bottom pb-1 text-blue" ><strong>Education & Career</strong></label>
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Highest Qualification</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->high_education }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">College(s) Attended</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->college_name }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Annual Income</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->salary }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Working With</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->work_with }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Working As</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->designation }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0 p-1">Employer Name</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0 p-1">:&nbsp;{{ $user->current_company }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 p-2">
                    <div class="profile-header bg-grey p-2">
                        <h3>
                            <strong>My Contact Detail</strong>
                        </h3>
                    </div>
                    <div class="row p-3 mt-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-light mb-0">
                                            Mobile
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-light mb-0 p-1">
                                            +{{$user->country_code}}-{{$user->mobile_number}}
                                        </p>
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
