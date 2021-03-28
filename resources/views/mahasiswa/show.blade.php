@extends('layouts.template')
@section('title','Detail Mahasiswa')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5><strong>Nama : {{$student->nama}}</strong></h5>
                <p><strong>npm : {{$student->nrp}}</strong></p>
                <p><strong>email : {{$student->email}}</strong></p>
                <p><strong>jurusan : {{$student->jurusan}}</strong></p>
                <a href="{{url('/Mahasiswa')}}/{{$student->id}}/edit" class="btn btn-success">Edit</a>
                <form action="{{$student->id}}" method="POST" class="d-inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{url('/Mahasiswa')}}" class="card-link">Kembali</a>
            </div>
        </div>
    </section>
</div>

@endsection()