@extends('layouts.master')
<h1 class="text-center pt-3">Data Mahasiswa</h1>
<!-- START FORM -->
@section('content')
<form action='{{url('mahasiswa/'.$data->nim)}}' method='post'>
@csrf
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="{{url('mahasiswa')}}" class="btn btn-secondary">Kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            {{$data->nim}}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$data->nama}}" name='nama' id="nama" autocomplete="off">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$data->jurusan}}" name='jurusan' id="jurusan" autocomplete="off">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection