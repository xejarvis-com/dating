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
    <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield('style')

<style>

.notification .dropdown-menu {
    position: absolute !important;
    /* z-index: 1000; */
    /* display: none; */
    /* min-width: 10rem; */
    padding: 0.5rem 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,0.15);
    border-radius: 0.25rem;
}

    /*.header__search .search-icon {*/
    /*    position: absolute;*/
    /*    left: 10px;*/
    /*    top: 5px;*/
    /*    color: #9bb7c5;*/
    /*}*/
    /*.header__search .search-field {*/
    /*    background: #e2ecf0;*/
    /*    -webkit-border-radius: 20px;*/
    /*    -moz-border-radius: 20px;*/
    /*    border-radius: 20px;*/
    /*    height: 30px;*/
    /*    width: 100%;*/
    /*    padding-left: 30px;*/
    /*    padding-right: 5px;*/
    /*    font-size: 1.3em;*/
    /*.header__notification {*/
    /*    width: 100px;*/
    /*    background: #fff;*/
    /*    height: 20px;*/
    /*    margin: 0 10px;*/
    /*    display: flex;*/
    /*    justify-content: space-around;*/
    /*}*/
    .header__notification .bell-icon {
        position: relative;
        cursor: pointer;
    }
     .bell-icon:hover {
        color: #eee;
    }
    .bell-icon .notification-number {
        font-size: 0.6em;
        border-radius: 50%;
        background-color: #00bfbe;
        border: 5px solid #00bfbe;
        color: #fff;
    }
     .bell-icon .bell-number {
        position: absolute;
        top: -50%;
        left: 90%;
    }
   .bell-icon .notification__list {
      
    }
     .bell-icon .notification__list:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        left: 50%;
        top: -20px;
        transform: translate(-50%);
    }
    .bell-icon .notification__list__name {
        background: #fff;
        color: #9bb7c5;
        padding: 10px 0;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        border-bottom: 1px solid #9bb7c5;
        transition: all 1s ease-in-out;
        font-size: 16px;
    }
     .bell-icon .notification__list .large-number {
        font-size: 0.8em;
        border-width: 5px;
    }
    .header__notification .bell-icon .list__item {
        border-bottom: 1px solid #9bb7c5;
        transition: all 1s ease-in-out;
    }
    .header__notification .bell-icon .list__item .user-image {
        width: 40px;
        height: 40px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }
    .bell-icon .list__item .messages {
        padding-left: 10px;
        color: #909da8;
    }
  .bell-icon .list__item .messages b {
        color: #727f8c;
    }
     .bell-icon .list__item--link {
        display: flex;
        padding: 10px;
        text-decoration: none;
        text-align: left;
        font-size: 0.7em;
        opacity: 0.8;
        align-items: center;
    }
     .bell-icon .list__item--link:hover {
        opacity: 1;
    }
</style>
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
<script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ url('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ url('assets/js/custom/widgets.js') }}"></script>
<script src="{{ url('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ url('assets/js/custom/intro.js') }}"></script>
<script src="{{ url('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ url('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
<script src="{{ url('assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ url('assets/js/custom/utilities/modals/users-search.js') }}"></script>
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



<script>

function loadNotification()
 {
     var route = "{{url('loadnotification')}}";
    $.get(route,function(data){

    $('.notify_counts').hide();

        if(data.notify_counts > 0)
        {
            
        $('.notify_counts').show();
        $('.notify_counts').html(data.notify_counts);
        }

    $('#notify_body').html(data.notify_body);

    }).fail(function(data) {

    messageToaster('error','Try Again.','Failed');

    });
 }
 function appearNotification()
 {

 $.get("{{url('appearnotification')}}",function(data){

 }).fail(function(data) {

 });
 
 }

 function seenNotification(event,obj,id)
 {

 event.preventDefault();

 $.get("{{url('seennotification')}}",{id:id},function(data){

 $('.notify_counts').hide();
 
 if(data.notify_counts > 0)
 {
 $('.notify_counts').show();
 $('.notify_counts').html(data.notify_counts);
 }
 $('#notify_body').html(data.notify_body);
 window.location.href = $(obj).attr('href');
 }).fail(function(data) {
 messageToaster('error','Try Again.','Failed');
 });
 }
 $(document).ready(function(){
 

 loadNotification();
 // Enable pusher logging - don't include this in production
 Pusher.logToConsole = true;
 var user_id = parseInt("{{ Auth::id() }}");
 var pusher = new Pusher("{{config('broadcasting.connections.pusher.key')}}", 
{
 cluster: "{{config('broadcasting.connections.pusher.options.cluster')}}"
 });
 var channel = pusher.subscribe('my-channel');
 channel.bind('my-event', function(data) {
 if($.inArray(user_id, data) != -1)
 {
 loadNotification();
 $('#soundtrack').get(0).play();
 }
 });

 });


    $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });


    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            // Multiple images preview with JavaScript
            var multiImgPreview = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#images').on('change', function() {
                multiImgPreview(this, 'div.preview-image');
            });
        });

        $('#multiple-image-upload-preview-ajax').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            let TotalImages = $('#images')[0].files.length; //Total Images
            let images = $('#images')[0];
            for (let i = 0; i < TotalImages; i++) {
                formData.append('images' + i, images.files[i]);
            }
            formData.append('TotalImages', TotalImages);

            $.ajax({
                type:'POST',
                url: "{{ url('upload-images-ajax')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    alert('Multiple Images has been uploaded using jQuery ajax with preview');
                    $('.preview-image').html("")
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });



</script>

@yield('script')

</body>
<!--end::Body-->
</html>
