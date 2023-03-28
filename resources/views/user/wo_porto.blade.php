@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
<style type="text/css">
  .gallery {
  display: flex;
  padding: 2px;
  transition: .3s;
  
  &:hover &__image {
    filter: grayscale(1);
  }
  
  &__column {
    display: flex;
    flex-direction: column;
    width: 25%;
  }
  
  &__link {
    margin: 2px;
    overflow: hidden;
    
    &:hover {
      .gallery__image {
        filter: grayscale(0);
      }
      
      .gallery__caption {
        opacity: 1;
      }
    }
  }
  
  &__thumb {
    position: relative;
  }
  
  &__image {
    display: block;
    width: 100%;
    transition: .3s;
    
    &:hover {
      transform: scale(1.1);
    }
  }
  
  &__caption {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 25px 15px 15px;
    width: 100%;
    font-family: 'Raleway', sans-serif;
    font-size: 16px;
    color: white;
    opacity: 0;
    background: linear-gradient(0deg, rgba(0, 0, 0, .5) 0%, rgba(255, 255 ,255 , 0) 100%);
    transition: .3s;
  }
}

</style>
@endsection

@section('content')
  <h4>Portofolio kami</h4>   

  <div class="row">
    <div class="col s12">
      @for($i = 1; $i < 10; $i++)
      <img class="responsive-img z-depth-3 materialboxed" style="margin-bottom: 10px;" src="https://source.unsplash.com/_cvwXhGqG-o/300x300">
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