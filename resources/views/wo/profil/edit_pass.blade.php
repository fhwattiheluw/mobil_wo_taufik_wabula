@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="" method="post">
    @csrf
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Edit Password</h6>

            <div class="form-floating mb-3">
                <input class="form-control" id="pass_lama" name="pass_lama" type="password" aria-label="input example">
                <label for="pass_lama">Password Lama</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="pass_1" name="password" type="password" aria-label="input example">
                <label for="pass_1">Password Baru</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="pass_2" name="password_confirmation" type="password" aria-label="input example">
                <label for="pass_2">Ulangi Password</label>
            </div>
            <div class="form-floating mb-3">
                <button type="submit" class="form-control">Ubah</button>
            </div>
        </div>
    </div>
</form>

@endsection