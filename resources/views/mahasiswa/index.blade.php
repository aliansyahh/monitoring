 @extends('layouts/template')
 @section('title','Halaman Mahasiswa')

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

     @if (session('status'))
     <div class="col-md-6 text-center centered center">
         <div class="alert alert-success">
             {{ session('status') }}
         </div>
     </div>
     @endif

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <a href="{{url('/Mahasiswa/tambah')}}" class="btn btn-primary btn-sm">Tambah Data</a>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example2" class="table table-bordered table-hover text-center">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($mahasiswa as $mhs)
                                     <tr>
                                         <td>{{$loop->iteration}}</td>
                                         <td>{{$mhs->nama}}</td>
                                         <td><a href="{{url('/Show/')}}/{{$mhs->id}}"
                                                 class="btn btn-success btn-sm">Detail</a></td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                                 <!-- <tfoot>
                                     <tr>
                                         <th>Rendering engine</th>
                                         <th>Browser</th>
                                         <th>Platform(s)</th>
                                         <th>Engine version</th>
                                         <th>CSS grade</th>
                                     </tr>
                                 </tfoot> -->
                             </table>
                         </div>
                         <!-- /.card-body -->
                     </div>

                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @endsection