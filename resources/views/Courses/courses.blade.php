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

                <a href="{{url('courses/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Mata Kuliah</th>
                      <th>Dosen Pengampu</th>
                      <th>Jumlah SKS</th>
                      <th>Semester</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($courses->count() > 0)
                      @foreach($courses as $i => $c)
                        <tr>
                          <td>{{++$i}}</td>
                          <td>{{$c->nama_mata_kuliah}}</td>
                          <td>{{$c->dosen_pengampu}}</td>
                          <td>{{$c->jumlah_sks}}</td>
                          <td>{{$c->semester}}</td>
                          <td>
                            <!-- Bikin tombol edit dan delete -->
                            <a href="{{ url('/courses/'. $c->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                            <form method="POST" action="{{ url('/courses/'.$c->id) }}" >
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr><td colspan="9" class="text-center">Data tidak ada</td></tr>
                    @endif
                  </tbody>
                </table>
              </div>
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
                        @foreach($cobbies as $no => $c)
                            <tr class="">
                                <td>{{$no}}</td>
                                <td>{{$c->nama}}</td>
                                <td>{{$c->umur}}</td>
                                <td>{{$c->jenis_kelamin}}</td>
                                <td>{{$c->hobi}}</td>
                                <td>{{$c->kategori}}</td>
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
