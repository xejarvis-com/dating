@if(@count($notify_list) > 0)
	@foreach($notify_list as $rows)

	@if($rows->params > 0)

		@php($notify_route = route($rows->route,['id' => encrypt($rows->params)]))
	@else
		@php($notify_route = route($rows->route))
	@endif

	<a href="{{$notify_route}}" onclick="seenNotification(event,this,'{{encrypt($rows->id)}}')" href="{{$notify_route}}" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
		<!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
	
		<!--end::Svg Icon-->
		<span class="fs-5 fw-bold text-gray-800 mb-0">{{$rows->message}}</span>
		<span class="fs-7 text-gray-400">{{$rows->created_at->diffForHumans()}}</span>
	</a>

	@endforeach
@else
<a href="#" class="navi-item" >
    <div class="navi-link mb-4" style="clear:both;">
	        <div class="navi-icon mr-2" style="float:left !important; width: 20px;">
	            <i class="flaticon-chat-1 text-success"></i>
	        </div>
	        <div class="navi-text" style="float:right !important; width:90%;">
	            <div class="font-weight-bold">No record found.</div>
	        </div>
	    </div>
</a>
@endif