@extends('adminlte::page')
@section('title','Kategori Buku')
@section('content_header')
    <h1><i class="fa fa-bookmark" aria-hidden="true"></i>Kategori Buku</h1>
@stop 
@section('content')
    @if(session('success'))
        <div class="alert alert-info">
            {{ session('success')}}
        </div>
    @endif
    @php
        $ar_judul = ['No','Nama'];
        $no = 1;
    @endphp
    <a class="btn btn-primary btn-md"
    href="{{ route('kategori.create') }}" role="button"><i class="fa fa-plus"></i>Tambah kategori</a>
    <br/><br/>
    <table class="table table-striped">
        <thead>
            <tr>
                @foreach($ar_judul as $jdl)
                <th>{{ $jdl }}</th>
                @endforeach
            </tr>
        </thead>

        <tbody>
            @foreach($ar_kategori as $kat)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $kat->nama }}</td>
                <td>
                <form action="{{ route('kategori.destroy', $kat->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('kategori.show', $kat->id) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('kategori.edit', $kat->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <button class="btn btn-danger" onclick="return confirm('Anda Yakin Data Dihapus?')"><i class="fa fa-trash"></i></button>
                </form>
            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop 
@section('js')
    <script> console.log('HI!')</script>
@stop