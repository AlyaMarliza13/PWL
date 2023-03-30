@extends('layouts.templates')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Profil Saya</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="profil">
                    <h2>Alya Marliza Koesnanto</h2>
                    <p><strong>Umur:</strong> 20</p>
                    <p><strong>Email:</strong> alyamarlizakoesnanto03@gmail.com</p>
                    <p><strong>Alamat:</strong> Jl. Danau Bratan Timur IX / Blok i-4</p>
                    <p><strong>Telepon:</strong> +62 813-3147-5413</p>
                    <img src="{{ asset('assets/dist/img/2141720004.jpg')}}" alt="Foto Profil">
                  </div>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer">
                Footer
            </div> --}}
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection