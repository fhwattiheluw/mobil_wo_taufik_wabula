@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
<p>
  {{dd($item->all())}}
  <hr>
</p>
@endsection
