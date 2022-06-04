<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Couple Tuple</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ url('public/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">

<!--End::Google Tag Manager (noscript) -->
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            @include('layouts.userPanel_include.header')
            <!--end::Header-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
            @yield('content')
            <!--begin::Footer-->
            @include('layouts.userPanel_include.footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/index.html";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ url('public/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ url('public/assets/js/scripts.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ url('public/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ url('public/assets/js/custom/widgets.js') }}"></script>
<script src="{{ url('public/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ url('public/assets/js/custom/intro.js') }}"></script>
<script src="{{ url('public/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ url('public/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
<script src="{{ url('public/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ url('public/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    
    
    // Image Page Script
    $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>




</body>
<!--end::Body-->
</html>
