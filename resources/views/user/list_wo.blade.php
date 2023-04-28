@extends('user/template')

@section('content-main')
<div class="container">
	<h5 style="color: black;">Wedding organizer</h5>
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			@foreach($items as $item)
			<a href="#" class="col s4 waves-effect waves-light">
				<div class="row holign-wrapper">
		            <div class="col offset-s1 s10">
		              <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img z-depth-3"> <!-- notice the "circle" class -->
		            </div>
		            <div class="col s12 center">
		              <span class="black-text">
		                {{$item->nama}}
		              </span>
		            </div>
		          </div>
			</a>
			@endforeach
		</div>
	</div>	
</div>
@endsection