@extends('wo.layout')

@section('content')

<h3>{{$title}}</h3>
<img src="{{url(Storage::url('public/img/'.$item->foto))}}" alt="Profil" width="500px"><br>
Nama : {{ $item->nama }}<br>
Email : {{$item->email}}<br>
Nomor HP : {{$item->nomor_hp}}<br>
Alamat : {{$item->alamat}}<br>

<a href="{{route('wo.profil.edit')}}">Edit</a>

@endsection