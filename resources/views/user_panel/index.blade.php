@extends('layouts.userPanel_layout')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-lg-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                                <!--begin::Card-->
                                <div class="card mb-5 mb-xl-8">
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Summary-->
                                        <!--begin::User Info-->
                                        <div class="d-flex flex-center flex-column py-5">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-100px symbol-circle mb-7">
                                                @if (isset($image->id))
                                                    <img src="{{ asset($image->path) }}" class="img-fluid" alt="">
                                                @else
                                                    <img src="{{ url('public/assets/media/avatars/300-6.jpg') }}" alt="image">
                                                @endif
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ Auth::user()->first_name }}{{ Auth::user()->last_name }}</a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="mb-9">
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-primary d-inline">Plan Here</div>
                                                <!--begin::Badge-->
                                            </div>
                                            <!--end::Position-->

                                            <!--end::Info-->
                                        </div>
                                        <!--end::User Info-->
                                        <!--end::Summary-->
                                        <!--begin::Details toggle-->
                                        <div class="d-flex flex-stack fs-4 py-3">
                                            <div class="fw-bolder rotate collapsible active" data-bs-toggle="collapse"
                                                href="#kt_user_view_details" role="button" aria-expanded="true"
                                                aria-controls="kt_user_view_details">Details
                                                <span class="ms-2 rotate-180">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title=""
                                                data-bs-original-title="Edit customer details">
                                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_update_details">Edit</a>
                                            </span>
                                        </div>
                                        <!--end::Details toggle-->
                                        <div class="separator"></div>
                                        <!--begin::Details content-->
                                        <div id="kt_user_view_details" class="collapse show" style="">
                                            <div class="pb-5 fs-6">
                                                <!--begin::Details item-->
                                                <div class="fw-bolder mt-5">Account ID</div>
                                                <div class="text-gray-600">ID-45453423</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bolder mt-5">Email</div>
                                                <div class="text-gray-600">
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--end::Details content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-15">
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <div class="alert-danger alert mb-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar rounded no-thumbnail bg-danger text-white p-1">10</div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <div class="h6 mb-0">No Pending Invitations</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="alert-success alert mb-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar rounded no-thumbnail bg-success text-white p-1">10</div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <div class="h6 mb-0">Accepted Invitations</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="alert-info alert mb-0">
                                            <a href="{{ route('viewrecentvisitors', ['id' => encrypt(Auth::user()->id)]) }}">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded no-thumbnail bg-info text-white p-1">{{$visitors_count}}</div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <div class="h6 mb-0">Recent Visitors</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Layout-->

                    </div>
                    <!--end::Post-->
                </div>
                <div class="row g-5" style="margin-left: 20px;">
                    <div class="col-xl-4">
                        <!--begin::List Widget 2-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">New Matches For <You></You>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <span class="btn btn-sm btn-icon bg-primary text-white">
                                        40
                                    </span>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="{{ url('public/assets/media/avatars/300-6.jpg')}}" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Emma Smith</a>
                                        <span class="text-muted d-block fw-bold">Project Manager</span>
                                    </div>
                                    <div class="flex-grow-1 symbol symbol-50px me-5">
                                        <div class="circle py-4 symbol-label">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="{{ url('public/assets/media/avatars/300-5.jpg')}}" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Sean Bean</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="{{ url('public/assets/media/avatars/300-11.jpg')}}" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Brian Cox</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="{{ url('public/assets/media/avatars/300-9.jpg') }}" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Francis Mitcham</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="{{ url('public/assets/media/avatars/300-23.jpg')}}" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Dan Wilson</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 2-->
                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
