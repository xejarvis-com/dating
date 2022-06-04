<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Header top-->
    <div class="header-top d-flex align-items-stretch flex-grow-1">
        <!--begin::Container-->
        <div class="d-flex container-xxl align-items-stretch">
            <!--begin::Brand-->
            <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                <!--begin::Heaeder navs toggle-->
                <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n2 me-2" id="kt_header_navs_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
											</svg>
										</span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Heaeder navs toggle-->
                <!--begin::Logo-->
                <a href="index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="assets/media/logos/logo-demo20.svg" class="h-25px h-lg-30px" />
                </a>
                <!--end::Logo-->
                <!--begin::Tabs wrapper-->
                <div class="align-self-end overflow-auto" id="kt_brand_tabs">
                    <!--begin::Header tabs wrapper-->
                    <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                        <!--begin::Header tabs-->
                        <ul class="nav flex-nowrap text-nowrap">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_header_navs_tab_1">My Shaadi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_2">Matches</a>
                            </li>
                        </ul>
                        <!--begin::Header tabs-->
                    </div>
                    <!--end::Header tabs wrapper-->
                </div>
                <!--end::Tabs wrapper-->
            </div>
            <!--end::Brand-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-row-auto">
                <!--begin::Search-->

                <!--end::Search-->

                <!--begin::Quick links-->
                <div class="d-flex align-items-center ms-1">
                    <!--begin::Menu wrapper-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <a href="{{ url('userPanel/pricing-plans')}}" class="btn btn-info ">Upgrade to Pro</a>
                        <!--end::Svg Icon-->
                    <!--end::Menu wrapper-->
                </div>

                <!--begin::User-->
                <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                    <!--begin::User info-->
                    <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Name-->
                        <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                            <span class="text-white opacity-75 fs-8 fw-bold lh-1 mb-1">{{ Auth::user()->first_name }}</span>
                            <!--<span class="text-white fs-8 fw-bolder lh-1">UX Designer</span>-->
                        </div>
                        <!--end::Name-->
                        <!--begin::Symbol-->
                        <div class="symbol symbol-30px symbol-md-40px">
                            <img src="{{ url('public/assets/media/avatars/300-1.jpg') }}" alt="image" />
                        </div>
                        <!--end::Symbol-->
                    </div>
                    <!--end::User info-->
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ url('public/assets/media/avatars/300-1.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->first_name }}
                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                    <!--<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>-->
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
             <!--           <div class="menu-item px-5">-->
             <!--               <a href="apps/projects/list.html" class="menu-link px-5">-->
             <!--                   <span class="menu-text">My Projects</span>-->
             <!--                   <span class="menu-badge">-->
													<!--	<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>-->
													<!--</span>-->
             <!--               </a>-->
             <!--           </div>-->
                        <!--end::Menu item-->



                        <div class="separator my-2"></div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="/logout" class="menu-link px-5">Sign Out</a>
                        </div>

                    </div>
                    <!--end::User account menu-->
                </div>
                <!--end::User -->
                <!--begin::Heaeder menu toggle-->
                <!--end::Heaeder menu toggle-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header top-->
    <!--begin::Header navs-->
    <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
        <!--begin::Container-->
        <div class="d-lg-flex container-xxl w-100">
            <!--begin::Wrapper-->
            <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                <!--begin::Header tab content-->
                <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
                        <!--begin::Menu wrapper-->
                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                            <!--begin::Menu-->
                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                <a href="/userPanel">
                                    <div class="menu-item">
														<span class="menu-link py-3">
															<span class="menu-title">Dashboards</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    </div>
                                </a>
                                <a href="/userPanel/profile">
                                    <div class="menu-item">
														<span class="menu-link py-3">
															<span class="menu-title">My Profile</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    </div>
                                </a>
                                <a href="/userPanel/view-image">
                                    <div class="menu-item">
														<span class="menu-link py-3">
															<span class="menu-title">My Photos</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    </div>
                                </a>
                                <a href="/userPanel/partner-profile">
                                    <div class="menu-item ">
														<span class="menu-link py-3">
															<span class="menu-title">Partner Prefrences</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                    </div>
                                </a>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_2">
                        <!--begin::Wrapper-->
                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                            <!--begin::Menu-->
                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                <div class="menu-item">
														<span class="menu-link py-3">
															<span class="menu-title">My Matches</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                </div>
                                <div class="menu-item">
														<span class="menu-link py-3">
															<span class="menu-title">Near Me</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                </div>
                                <a href="{{ url('userPanel/userprofiles')}}">
                                    <div class="menu-item">
														<span class="menu-link py-3">
															<span class="menu-title">Profiles</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>
                                </div>
                                </a>
                                
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->

                    <!--end::Tab panel-->
                </div>
                <!--end::Header tab content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header navs-->
</div>
