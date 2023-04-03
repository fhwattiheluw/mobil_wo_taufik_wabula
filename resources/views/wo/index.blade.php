<!-- https://www.flaticon.com/packs/business-ethics-12 -->
@extends('wo.layout') 

@section('content')
<div class="w-100" style="height: 200px;
background: url(/assets/img/28291_840x576.jpg) no-repeat center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
"></div>

<div class="container">
  <div class="row center ">
    <div class="col">
      <div class="card" style="position:relative; top: -50px;">
        <div class="card-body">
          <div class="row align-items-start">
            <div class="col">
              <a href="{{route('wo.paket')}}" class="btn btn-outline-primary">
                <img src="/assets/icon/wedding-invitation.png" alt="">
                <br>
                Paket</a>
              </div>
              <div class="col">
                <a href="{{route('wo.portofolio')}} " class="btn btn-outline-primary">
                  <img src="/assets/icon/folders.png" alt="">
                  <br>
                  Portofolio</a>
                </div>
                <div class="col">
                  <a href="#" class="btn btn-outline-primary">
                    <img src="/assets/icon/badge.png" alt="">
                    <br>
                    Profil</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      @endsection
