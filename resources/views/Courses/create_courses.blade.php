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
                <h3 class="card-title">Tabel Mata Kuliah</h3>

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
                {!! (isset($courses))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Nama Mata Kuliah</label>
                    <input class="form-control @error('nama_mata_kuliah') is-invalid @enderror" value="{{isset($courses)? $courses->nama_mata_kuliah : old('nama_mata_kuliah') }}" name="nama_mata_kuliah" type="text" />
                    @error('nama_mata_kuliah')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Dosen Pengampu</label>
                    <input class="form-control @error('dosen_pengampu') is-invalid @enderror" value="{{isset($courses)? $courses->dosen_pengampu : old('dosen_pengampu') }}" name="dosen_pengampu" type="text" />
                    @error('dosen_pengampu')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah SKS</label>
                    <input class="form-control @error('jumlah_sks') is-invalid @enderror" value="{{isset($courses)? $courses->jumlah_sks : old('jumlah_sks') }}" name="jumlah_sks" type="text" />
                    @error('jumlah_sks')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input class="form-control @error('semester') is-invalid @enderror" value="{{isset($courses)? $courses->semester: old('semester') }}" name="semester" type="text" />
                    @error('semester')
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
                            <th>nama_mata_kuliah</th>
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
                                <td>{{$h->nama_mata_kuliah}}</td>
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
