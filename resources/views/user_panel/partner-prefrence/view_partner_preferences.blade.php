@extends('layouts.userPanel_layout')

@section('style')

<style>
.row.heading h2 {
    color: #C292FE;
    font-size: 35.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;

}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
 .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}

 .cnt-block{ 
   float:left; 
   width:100%; 

   padding:10px 10px; 
   text-align:center; 
   margin: 0 0 28px;
}
 .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   border: 1px solid #fff;
   display:inline-block;
   margin-bottom: 15px;
}
 .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
 .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
 .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
 .cnt-block h3 a:hover{
	color:#337ab7;
}
 .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
 .cnt-block .follow-us{
	margin:20px 0 0;
}
 .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
	margin:0 5px;
}
 .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
 .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

</style>
@endsection
@section('content')

    <div class="container">
    <div class="row heading heading-icon">
    
      <h2 class="text-center m-4">User Profiles</h2>
    </div>

  <div class="row">
  @foreach($users_list as $rows)
    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body p-0">
        <!--begin::Summary-->
          <!--begin::User Info-->
          <div class="d-flex flex-center flex-column py-3">
              <!--begin::Avatar-->
              <div class="symbol symbol-100px symbol-circle mb-7">
                  <img src="../../../assets/media/avatars/300-6.jpg" alt="image">
              </div>
              <!--end::Avatar-->
              <!--begin::Name-->
              <a href="{{route('visitprofiles',['profile_id' => encrypt($rows->profile_id)])}}" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{$rows->first_name}}</a>
              <!--end::Name-->
          
              <!--end::Info-->
          </div>
          <!--end::User Info-->
        <!--end::Summary-->
  
        <div class="separator"></div>
        <!--begin::Details content-->
        <div id="kt_user_view_details" class="collapse show" style="padding-left: 10px;">
            <div class="pb-5 fs-6">
                <!--begin::Details item-->
                <div class="fw-bolder mt-4">City</div>
                <div class="text-gray-600">{{$rows->city_live}}</div>

                <div class="fw-bolder mt-4">DOB</div>
                <div class="text-gray-600">{{$rows->dob}}</div>
                <!--begin::Details item-->
                <!--begin::Details item-->
                <div class="fw-bolder mt-4">Marital Status</div>
                <div class="text-gray-600">
                    <a href="#" class="text-gray-600 text-hover-primary">{{$rows->marital_status}}</a>
                </div>

            </div>
        </div>
        <!--end::Details content-->
    </div>
      </div>
    </div>
    @endforeach
  </div>  
 




  </div>

@endsection
