@extends('user/template')

@section('content')
	<h5 style="color: black;">Wedding organizer</h5>
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			@for($i = 0; $i < 20; $i++)
			<a href="#" class="col s4 waves-effect waves-light">
				<div class="row holign-wrapper">
		            <div class="col offset-s1 s10">
		              <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img z-depth-3"> <!-- notice the "circle" class -->
		            </div>
		            <div class="col s12 center">
		              <span class="black-text">
		                nama WO
		              </span>
		            </div>
		          </div>
			</a>
			@endfor
		</div>
	</div>
@endsection