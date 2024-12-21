@extends('adminlte::page')
@section('title','Form kategori Buku')
@section('content_header')
    <h1>Form Kategori Buku</h1>
    <br>
    <a class="btn btn-primary btn-md"
    href="{{ route('kategori.index') }}" role="button"><i class="fa fa-arrow-left"></i>Back</a>
@stop 
@section('content')
    
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form method="POST" action="{{ route('kategori.store') }}">
    @csrf 
    <div class="form-group"> 
        <label>Nama</label><input type="text" name="nama" class="form-control"/> 
    </div> 
     <button type="submit" class="btn btn-primary">Simpan</button> 
</form>
@stop 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')
    <script> console.log('HI!')</script>
@stop