@extends('layouts.userPanel_layout')


@section('content')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-9">
            <div class="row mb-2">
                <div class="col-12">
                    <h4>Edit Personal Profile</h4>
                </div>
            </div>
            <form action="{{ url('userPanel/edit-profile-process') }}/{{Auth::id()}}" method="POST">
                @csrf
                {{-- Basic Info--}}
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6>Basic Info</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0">Profile Created By</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="profile_for" aria-label="Default select example">
                                    @foreach($profileFor as $item)
                                    <option value="{{$item->profile_for}}" {{ $user->profile_for == $item->profile_for ? 'selected' : '' }}>{{$item->profile_for}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-8">
                                <p class="mb-0" name="gender"><strong>: {{$user->gender}}</strong></p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Date of Birth</p>
                            </div>
                            <div class="col-8">
                                <input type="date" name="dob" id="" value="{{$user->dob}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Marital status</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="material_status" aria-label="Default select example">
                                    @foreach($materialStatus as $item)
                                    <option value="{{$item->material_status}}" {{ $user->material_status == $item->material_status ? 'selected' : '' }}>{{$item->material_status}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Any Disability?</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="disability">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Blood Group</p>
                            </div>

                            <div class="col-8">
                                <select class="form-select" name="blood_group" aria-label="Default select example">
                                    <option value="0">Select option</option>
                                    @foreach(CT::getBloodGroups() as $rows)
                                    <option @if($user->blood_group == $rows) value="{{$rows}}" selected @endif>{{$rows}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- religious Bacground--}}
                <div class="card mt-4">
                    <div class="card-header border-bottom">
                        <h6>Religious Background</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0">Religion</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="religion" aria-label="Default select example">
                                    @foreach($religion as $item)
                                    <option value="{{$item->religion}}" {{ $user->religion == $item->religion ? 'selected' : '' }}>{{$item->religion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Mother Tongue</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="sub_community" aria-label="Default select example">
                                    @foreach($subCommunities as $item)
                                    <option value="{{$item->sub_community}}" {{ $user->sub_community == $item->sub_community ? 'selected' : '' }}>{{$item->sub_community}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Community</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="community" aria-label="Default select example">
                                    @foreach($community as $item)
                                    <option value="{{$item->community}}" {{ $user->community == $item->community ? 'selected' : '' }}>{{$item->community}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Sub-Community</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="sub_community" aria-label="Default select example">
                                    @foreach($subCommunities as $item)
                                    <option value="{{$item->sub_community}}" {{ $user->sub_community == $item->sub_community ? 'selected' : '' }}>{{$item->sub_community}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Family Details--}}
                <div class="card mt-4">
                    <div class="card-header border-bottom">
                        <h6>Family</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0">Father's Status</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="father_status" aria-label="Default select example">
                                    <option value="" label="Select">Select</option>
                                    @foreach(CT::getFathersstatus() as $rows)
                                    <option @if($user->profile->father_status == $rows) selected value="{{$rows}}" @else value="{{$rows}}" @endif >{{$rows}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Mother Status</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="mother_status" aria-label="Default select example">
                                    <option value="" label="Select">Select</option>
                                    @foreach(CT::getMothersstatus() as $rows)
                                    <option @if($user->profile->mother_status == $rows) selected value="{{$rows}}" @else value="{{$rows}}" @endif >{{$rows}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Family Location</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{$user->profile->family_location}}" name="family_location">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Native Place</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" value="{{$user->profile->native_place}}" name="native_place">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Siblings</p>
                            </div>
                            <div class="col-8">
                                @php($list = ['Yes','No'])
                                <select id="" class="form-control" name="siblings" onchange="getSiblingDropdown(event,this)">

                                    <option value="0">Select</option>

                                    @foreach($list as $rows)
                                    <option @if($user->profile->siblings == $rows) selected value="{{$rows}}" @else value="{{$rows}}" @endif>{{$rows}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3" id="sisters" style="display: none;">
                            <div class="col-4">
                                <p class="mb-0">Sisters</p>
                            </div>
                            <div class="col-8">
                                @php($list = ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'])
                                <select id="" class="form-control form-control-sm" name="sisters">
                                    @foreach($list as $rows)
                                    <option @if($user->profile->no_of_sisters == $rows) selected value="{{$rows}}" @else value="{{$rows}}" @endif >{{$rows}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3" id="brothers" style="display: none;">
                            <div class="col-4">
                                <p class="mb-0">Brothers</p>
                            </div>
                            <div class="col-8">
                                @php($list = ['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'])
                                <select id="" class="form-control form-control-sm" name="brothers">
                                    @foreach($list as $rows)
                                    <option @if($user->profile->no_of_brothers == $rows) selected value="{{$rows}}" @else value="{{$rows}}" @endif>{{$rows}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Family Type</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="family_type" aria-label="Default select example">
                                    <option value="" label="Select" selected="selected">Select</option>
                                    <option value="Joint" label="Homemaker">Joint</option>
                                    <option value="Nuclear" label="Employed">Nuclear</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Family Values
                                </p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="family_values" aria-label="Default select example">
                                    <option value="" label="Select" selected="selected">Select</option>
                                    <option value="Traditional" label="Traditional">Traditional</option>
                                    <option value="Moderate" label="Moderate">Moderate</option>
                                    <option value="Liberal" label="Liberal">Liberal</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Family Affluence
                                </p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="family_affluence" aria-label="Default select example">
                                    <option value="" label="Select">Select</option>
                                    <option value="Affluent" label="Affluent">Affluent</option>
                                    <option value="Upper Middle Class" label="Upper Middle Class">Upper Middle Class</option>
                                    <option value="Middle Class" label="Middle Class">Middle Class</option>
                                    <option value="Lower Middle Class" label="Lower Middle Class">Lower Middle Class</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Education & Career--}}
                <div class="card mt-4">
                    <div class="card-header border-bottom">
                        <h6>
                            Education & Career
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <p class="mb-0">Highest Qualification</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="high_education" aria-label="Default select example">
                                    @foreach($educations as $item)
                                    <option value="{{$item->education}}" {{ $user->high_education == $item->education ? 'selected' : '' }}>{{$item->education}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">College Attended</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="college_name" value="{{ $user->profile->college_name }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Working With</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="work_with" aria-label="Default select example">
                                    @foreach($works as $item)
                                    <option value="{{$item->work}}" {{ $user->work_with == $item->work ? 'selected' : '' }}>{{$item->work}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Working As</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="designation" aria-label="Default select example">
                                    @foreach($profession as $item)
                                    <option value="{{$item->profession}}" {{ $user->designation == $item->profession ? 'selected' : '' }}>{{$item->profession}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Employer Name</p>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="current_company" value="{{ $user->profile->current_company }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="mb-0">Annual Income</p>
                            </div>
                            <div class="col-8">
                                <select class="form-select" name="salary" aria-label="Default select example">
                                    @foreach($salary as $item)
                                    <option value="{{$item->salary}}" {{ $user->salary == $item->salary ? 'selected' : '' }}>{{$item->salary}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- About My self--}}
                <div class="card mt-4">
                    <div class="card-header border-bottom">
                        <h6>
                            More About Yourself, Partner and Family
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Personality, Family Details, Career, Partner Expectations etc.</label>
                                    <textarea name="bio" id="" class="form-control" cols="30" rows="5">{{ $user->profile->bio }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-center mb-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')

<script>
    function getSiblingDropdown(event, obj) {
        event.preventDefault();

        if ($(obj).val() == "Yes") {
            $('#brothers').show();
            $('#sisters').show();
        } else {
            $('#brothers').hide();
            $('#sisters').hide();
        }
    }
</script>

@endsection