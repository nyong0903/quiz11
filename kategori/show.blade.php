@extends('adminlte::page')
@section('title','Detail Kategori Buku')
@section('content_header')
    <h1>Detail Kategori Buku</h1>
    <br>
    <a class="btn btn-primary btn-md"href="{{ route('kategori.index') }}" role="button"><i class="fa fa-arrow-left"></i>Back</a>
@stop 
@section('content')

@foreach($ar_kategori as $kat)    
<form >
    @csrf
    <div class="form-group"> 
        <label>Nama Kategori</label><input type="text" placeholder="{{ $kat->nama }}" class="form-control" disabled/> 
    </div> 
</form>
@endforeach
@stop 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')
    <script> console.log('HI!')</script>
@stop