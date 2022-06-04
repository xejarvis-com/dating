@extends('layouts.userPanel_layout')

@section('content')


  <div class="container-fluid">
      <div class="row mt-5">
          <div class="col-md-9">
              <div class="card">
                  <div class="card-header pt-8">
                      <h5>
                          Tell us what you are looking for in a life partner
                      </h5>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-3">
                              <p class="mb-0">
                                  Age
                              </p>
                          </div>
                          <div class="col-9">

                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <label class="form_label">
                                  <span>Height</span>

                              </label>
                          </div>
                          <div class="col-9">

                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Material Status
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="material_status[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($material as $item)
                                      <option value="{{ $item->material_status }}">{{ $item->material_status }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Religion
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="religion[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($religion as $item)
                                      <option value="{{ $item->religion }}">{{ $item->religion }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Community
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="community[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($community as $item)
                                      <option value="{{ $item->community }}">{{ $item->community }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Mother tongue
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="sub_community[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($subcommunity as $item)
                                      <option value="{{ $item->sub_community }}">{{ $item->sub_community }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

{{--                     Location details --}}
                      <div class="row p-3 mt-4">
                          <div class="col-12 bg-gray-100">
                              <p class="mb-0 p-2">
                                  Location Details
                              </p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-3">
                              <p>
                                  Country living in
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="country_living[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($country as $item)
                                      <option value="{{ $item->name }}">{{ $item->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

{{--                      Education & Profession--}}
                      <div class="row p-3 mt-4">
                          <div class="col-12 bg-gray-100">
                              <p class="mb-0 p-2">
                                  Education & Profession Details
                              </p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-3">
                              <p>
                                  Qualification
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="qualification[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($education as $item)
                                      <option selected value="Open To All">Open To All</option>
                                      <option value="{{ $item->education }}">{{ $item->education }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Working with
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="work_with[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($work as $item)
                                      <option selected value="Open To All">Open To All</option>
                                      <option value="{{ $item->work }}">{{ $item->work }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Profession area
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="profession[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($profession as $item)
                                      <option selected value="Open To All">Open To All</option>
                                      <option value="{{ $item->profession }}">{{ $item->profession }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Annual income
                              </p>
                          </div>
                          <div class="col-9">
                              <select class="form-select js-example-basic-multiple"  name="salary[]" multiple="multiple">
                                  <option>Open this select menu</option>
                                  @foreach($salary as $item)
                                      <option selected value="Open To All">Open To All</option>
                                      <option value="{{ $item->salary }}">{{ $item->salary }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

{{--                      Other Details--}}
                      <div class="row p-3 mt-4">
                          <div class="col-12 bg-gray-100">
                              <p class="mb-0 p-2">
                                  Other Details
                              </p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-3">
                              <p>
                                  Profile created by
                              </p>
                          </div>
                          <div class="col-9 d-flex">
                              <label >
                                  <input type="checkbox" name="relationship[]" id="" value="" class="" />
                                  Open to all
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="relationship[]" id="" value=""  class="" />
                                  Self
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="relationship[]" id="" value=""  class="" />
                                  Parent / Guardian
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="relationship[]" id="" value=""  class="" />
                                  Sibling / Friend / Others
                              </label>
                          </div>
                      </div>
                      <div class="row mt-4">
                          <div class="col-3">
                              <p>
                                  Diet
                              </p>
                          </div>
                          <div class="col-9 d-flex">
                              <label for="dietarray-Veg">
                                  <input type="checkbox" name="diet[]" id="" value="">
                                  Open to all
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="diet[]" id="" value="">
                                  Veg
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="diet[]" id="" value="">
                                  Non-Veg
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="diet[]" id="" value="">
                                  Jain
                              </label>
                              <label style="margin-left: 23px">
                                  <input type="checkbox" name="diet[]" id="" value="">
                                  Vegan
                              </label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection



