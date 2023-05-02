@extends('user/template')

@section('css-main')
  <style type="text/css">
    body{
      background: url('/assets/img/bg-wedding.jpg') fixed no-repeat center;
  -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
  </style>
@endsection

@section('content-main')

  <div style="background-color: rgba(255, 255, 255, 0.5); width: 100%; margin: 0px; min-height: 700px; padding-bottom: 50px;">
    <div class="container">

    @yield('content')

    </div>
  </div>
@endsection

@section('nav_wo')
<div class="navbar-fixed" style="position:fixed;">
        <nav style="bottom: 0;" class="orange lighten-5"> <!-- navbar bottom -->
          <div class="nav-wrapper center">
            <ul id="nav-mobile" >
              <li style="min-width: 70px;">
                <a href="{{ url()->previous() }}" class="orange-text text-darken-1"><i class="material-icons" >chevron_left</i></a>
              </li>
              <li style="min-width: 70px; " class="{{ (Request::segment(3) == 'about') ? 'active' : '' }} center">
                <a href="{{route('user.wo.about',['id_wo'=>$id_wo])}}" class="orange-text text-darken-1"><i class="material-icons" >person_pin</i> </a>
              </li>
              <li>
                <a class="btn-floating btn-large  green accent-4" href="https://api.whatsapp.com/send?phone={{ $about[0]->nomor_hp }}&text=halo {{$about[0]->nama}}"><i class="large material-icons">message</i></a>
              </li>
              <li style="min-width: 70px;" class="{{ (Request::segment(3) == 'porto') ? 'active' : '' }}"><a href="{{route('user.wo.porto',['id_wo'=>$id_wo])}}" class="orange-text text-darken-1"><i class="material-icons">photo_album</i></a></li>
              <li style="min-width: 70px;" class="{{ (Request::segment(3) == 'paket') ? 'active' : '' }}"><a href="{{route('user.wo.paket',['id_wo'=>$id_wo])}}" class="orange-text text-darken-1"><i class="material-icons" style="color: #ff6d00 ;">business_center</i></a></li>
            </ul>
          </div>
        </nav>
      </div>
@endsection
