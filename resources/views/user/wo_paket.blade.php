@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')

 <ul class="collection">
    <li class="collection-item avatar ">
      <i class="material-icons circle yellow accent-4">business_center</i>
      <span class="title">GOLD</span>
      <p>PAKET</p>
       <a href="#!" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle grey lighten-1">business_center</i>
      <span class="title">SILVER</span>
      <p>PAKET</p>
       <a href="#!" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle  brown lighten-1">business_center</i>
      <span class="title">BROWN</span>
      <p>PAKET</p>
       <a href="#!" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
  </ul>

    </div>
  </div>
            
@endsection

@section('js')
  <script type="text/javascript">
      $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
@endsection