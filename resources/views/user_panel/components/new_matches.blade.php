  @foreach($users_list as $rows)
  <!--begin::Item-->
  <div class="d-flex align-items-center mb-7">
    <!--begin::Avatar-->
    <div class="symbol symbol-50px me-5">
    @php($image = $images->where('user_id',$rows->user_id)->first())
    @if(isset($image->id))
        <img src="{{ asset($image->path) }}" class="img-fluid" alt="">
    @endif
    </div>
    <!--end::Avatar-->
    <!--begin::Text-->
    <div class="flex-grow-1">
        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$rows->first_name}}</a>
        <span class="text-muted d-block fw-bold">{{$rows->city_live}}</span>
    </div>
    <div class="flex-grow-1 symbol symbol-50px me-5">
        <div class="circle py-4 symbol-label">
            <i class="fa fa-check"></i>
        </div>
    </div>
    <!--end::Text-->
</div>
<!--end::Item-->

@endforeach