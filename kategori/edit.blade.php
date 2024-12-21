@extends('adminlte::page')
@section('title','Edit Kategori')
@section('content_header')
    <h1>Edit Buku</h1>
    <br>
    <a class="btn btn-primary btn-md"href="{{ route('kategori.index') }}" role="button"><i class="fa fa-arrow-left"></i>Back</a>
@stop 
@section('content')

@foreach($data as $d)    
<form action="{{ route('kategori.update' ,$d->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group"> 
        <label>Nama</label><input type="text" name="nama" value="{{ $d->nama }}" class="form-control"/> 
    </div> 

    <button type="submit" class="btn btn-info">Simpan</button>
</form>
@endforeach
@stop 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')
    <script> console.log('HI!')</script>
@stop