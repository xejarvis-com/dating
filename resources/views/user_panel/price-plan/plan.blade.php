@extends('layouts.userPanel_layout')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Pricing card-->
                    <div class="card" id="kt_pricing">
                        <!--begin::Card body-->
                        <div class="card-body p-lg-17">
                            <!--begin::Plans-->
                            <div class="d-flex flex-column">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <h1 class="fs-2hx fw-bolder mb-5">Choose Your Plan</h1>
                                    <div class="text-gray-400 fw-bold fs-5">If you need more info about our pricing, please check
                                        <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
                                </div>
                                <!--end::Heading-->

                                <!--end::Nav group-->
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->

                                    @foreach($plans as $plan)
                                        <div class="col-sm-4">
                                            <div class="d-flex h-100 align-items-center">
                                                <!--begin::Option-->
                                                <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                    <!--begin::Heading-->
                                                    <div class="mb-7 text-center">
                                                        <!--begin::Title-->
                                                            <h1 class="text-dark mb-5 fw-boldest">{{$plan->package_name}}</h1>
                                                        <!--end::Title-->
                                                        <!--begin::Description-->
                                                        <div class="text-gray-400 fw-bold mb-5">{{ $plan->duration }}

                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="text-center">
                                                            <span class="mb-2 text-primary">$</span>
                                                            <span class="fs-3x fw-bolder text-primary">{{ $plan->package_price }}</span>

                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Features-->
                                                    <div class="w-100 mb-10">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{$plan->messages    }}</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																		<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{$plan->view_contact}}</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																		<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{$plan->standout_profile}}</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																		<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span class="fw-bold fs-6 text-gray-400 flex-grow-1">{{ $plan->directly_contact }}</span>
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                            <span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																		<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"></rect>
																		<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"></rect>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Features-->
                                                    <!--begin::Select-->
                                                    <a href="#" class="btn btn-sm btn-primary">Select</a>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Option-->
                                            </div>
                                        </div>
                                    @endforeach

                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Plans-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Pricing card-->
                </div>
                <!--end::Post-->
            </div>
        </div>
    </div>
</div>

@endsection
