@extends('layouts.templates')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengalaman Kuliah</h1>
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
                    <h3 class="card-title">Pengalaman Kuliah saya</h3>
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
                    <div class="desc">
                        <p>Selama saya kuliah dalam kurun waktu 2 tahun ini, banyak ilmu yang saya dapatkan dan saya masih
                            berusaha untuk belajar sebaik
                            dan semampu mungkin agar mendapatkan hasil terbaik.
                            
                            Semoga saya bisa menerima dengan lapang dada secepat mungkin dalam mengejar ilmu di Politeknik ini meskipun sampai 
                            sekarang saya masih menyimpan rasa yang tidak bisa dijelaskan melalui perkataan.

                            Semoga saya bisa melanjutkan jenjang perguruan tinggi saya dengan hati yang ikhlas dan tabah ^-^</p>
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
