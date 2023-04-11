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
                <h3 class="card-title">Tabel Hobi Mahasiswa</h3>

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
                {!! (isset($hobbies))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" value="{{isset($hobbies)? $hobbies->nama : old('nama') }}" name="nama" type="text" />
                    @error('nama')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Umur</label>
                    <input class="form-control @error('umur') is-invalid @enderror" value="{{isset($hobbies)? $hobbies->umur : old('umur') }}" name="umur" type="text" />
                    @error('umur')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" {{isset($mhs) && $mhs->jenis_kelamin == "Laki-laki" ? "checked" : ""}}>Laki-laki</label><br>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" {{isset($mhs) && $mhs->jenis_kelamin == "Perempuan" ? "checked" : ""}}>Perempuan</label><br>
                     @error('jenis_kelamin')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Hobi</label>
                    <input class="form-control @error('hobi') is-invalid @enderror" value="{{isset($hobbies)? $hobbies->hobi : old('hobi') }}" name="hobi" type="text" />
                    @error('hobi')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input class="form-control @error('kategori') is-invalid @enderror" value="{{isset($hobbies)? $hobbies->kategori: old('kategori') }}" name="kategori" type="text" />
                    @error('kategori')
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
