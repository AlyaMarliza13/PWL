@extends('layouts.templates')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mahasiswa</h1>
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
                <h3 class="card-title">Detail Data Mahasiswa</h3>

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
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$m->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$m->nama}}</li>
                    <li class="list-group-item"><b>Foto: </b>{{$m->foto}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$m->kelas->nama_kelas}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$m->jk}}</li>
                    <li class="list-group-item"><b>Tempat Lahir: </b>{{$m->tempat_lahir}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$m->tanggal_lahir}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$m->alamat}}</li>
                    <li class="list-group-item"><b>No HP: </b>{{$m->hp}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@push('custom_js')
    <script>
    </script>
@endpush
