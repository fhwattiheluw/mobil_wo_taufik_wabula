@extends('user/template')

@section('content-main')
<div class="container">
	<h5 style="color: black;">Wedding organizer</h5>
	<div class="divider"></div>
	<div class="section">
		<div class="row">
			@foreach($items as $worg)
			<a href="{{route('user.wo.about',['id_wo'=>$worg->id])}}" class="col s4 waves-effect waves-light">
				<div class="row holign-wrapper">
					<div class="col offset-s1 s10">
						<img src="{{url(Storage::url('public/img/'.$worg->foto))}}" alt="" class="circle responsive-img z-depth-3" style="width: 50px; height: 50px;"> <!-- notice the "circle" class -->
					</div>
					<div class="col s12 center">
						<span class="black-text">
							{{$worg->nama}}
						</span>
					</div>
				</div>
			</a>
			@endforeach
		</div>
	</div>
</div>
@endsection
