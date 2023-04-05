@extends('layouts.templates')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
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
                <h3 class="card-title">Tabel Mahasiswa</h3>

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
                <form method="POST" action="{{ $url_form}}">
                @csrf
                {!! (isset($mhs))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Nim</label>
                    <input class="form-control @error('nim') is-invalid @enderror" value="{{isset($mhs)? $mhs->nim : old('nim') }}" name="nim" type="text" />
                    @error('nim')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" value="{{isset($mhs)? $mhs->nama : old('nama') }}" name="nama" type="text" />
                    @error('name')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input class="form-control @error('jk') is-invalid @enderror" value="{{isset($mhs)? $mhs->jk : old('jk') }}" name="jk" type="text" />
                    @error('jk')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir" type="text" />
                    @error('tempat_lahir')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{isset($mhs)? $mhs->tanggal_lahir: old('tanggal_lahir') }}" name="tanggal_lahir" type="text" />
                    @error('tanggal_lahir')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>  <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control @error('alamat') is-invalid @enderror" value="{{isset($mhs)? $mhs->alamat : old('alamat') }}" name="alamat" type="text" />
                    @error('alamat')
                        <span class="error invalid-feedback">{{ $message}} </span>
                        @enderror
              </div>
                <div class="form-group">
                    <label>HP</label>
                    <input class="form-control @error('hp') is-invalid @enderror" value="{{isset($mhs)? $mhs->hp : old('hp') }}" name="hp" type="text" />
                    @error('hp')
                        <span class="error invalid-feedback">{{ $message}} </span>
                        @enderror
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
              <!-- /.card-body -->
            {{-- <div class="card-body">
            <div class="card-footer"> --}}
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Hobi</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hobbies as $no => $h)
                            <tr class="">
                                <td>{{$no}}</td>
                                <td>{{$h->nama}}</td>
                                <td>{{$h->umur}}</td>
                                <td>{{$h->jenis_kelamin}}</td>
                                <td>{{$h->hobi}}</td>
                                <td>{{$h->kategori}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
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
