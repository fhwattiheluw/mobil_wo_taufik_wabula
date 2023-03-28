@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')
  <h4>Paket kami</h4>    

    <div class="row">
    <div class="col s12 m6">
      @for($i=0; $i<10; $i++)
      <div class="card">
        <div class="card-image">
          <img class="responsive-img materialboxed" src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_606/https://balitopwedding.com/wp-content/uploads/2022/12/Hilton-2-606x727.jpg">
          <a class="btn-floating halfway-fab waves-effect pink accent-3"><i class="material-icons">bookmark_border</i></a>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
      @endfor

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