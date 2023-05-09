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

                <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>JK</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>HP</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($mahasiswa->count() > 0)
                      @foreach($paginate as $m)
                        <tr>
                          <td>{{$m->nim }}</td>
                          <td>{{$m->nama }}</td>
                          <td>{{$m->kelas->nama_kelas }}</td>
                          <td>{{$m->jk }}</td>
                          <td>{{$m->tempat_lahir }}</td>
                          <td>{{$m->tanggal_lahir }}</td>
                          <td>{{$m->alamat }}</td>
                          <td>{{$m->hp }}</td>

                            <!-- Bikin tombol edit dan delete -->
                            <td class="d-flex">
                              <a href="{{ url('/mahasiswa/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                              <a href="{{ url('/mahasiswa/'. $m->id) }}" class="btn btn-sm btn-info mr-2">Detail</a>
                              <a href="{{ url('/nilai/'. $m->id) }}" class="btn btn-sm btn-success mr-2">Nilai</a>
                              <form method="POST" action="{{ url('/mahasiswa/'.$m->id) }}" >
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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
