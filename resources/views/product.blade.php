@extends('layouts2.templates')
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
                <h3 class="card-title">Product</h3>
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
                <div class="Product">
                    <h2>Jenis-jenis Product</h2>
                    <ul> 
                        <li><a href='/products/marbel-edu-game'>https://www.educastudio.com/category/marbel-edu-games</a></li>
                        <li><a href='/products/marbel-and-friends-kids-games'>https://www.educastudio.com/category/marbel-and-friends-kids-games</a></li>
                        <li><a href='/products/riri-story-books'>https://www.educastudio.com/category/riri-story-books</a></li>
                        <li><a href='/products/kolak-kids-songs'>https://www.educastudio.com/category/kolak-kids-songs</a></li>
                        </ul>
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