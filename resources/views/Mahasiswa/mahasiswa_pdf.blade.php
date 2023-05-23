<!DOCTYPE html>
<html>
<head>
    <title>CETAK KARTU HASIL STUDI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin: 0 1rem;
            color: #212529;
            border: 3px solid #262626;
        }
        table tr td, table tr th {
            border: 1px solid #262626;
            padding: 0.5rem;
        }
    </style>
</head>
<body>
<div class="text-center">
    <h1>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h1>
    <h3>KARTU HASIL STUDI (KHS)</h3>
</div>
<ul>
    @if($mahasiswa->count() > 0)
    @foreach($paginate as $m)
    <li><b>Nim : </b>{{ $m->nim }}</li>
    <li><b>Nama : </b>{{ $m->nama }}</li>
    <li><b>Kelas : </b>{{ $m->kelas->nama_kelas }}</li>
</ul>
<table class="table text-center">
    <thead>
    <tr>
<tr>
<th>id</th>
<th>Mata Kuliah</th>
<th>SKS</th>
<th>Semester</th>
<th>Nilai</th>

</tr>
    </thead>
    <tbody>
    @if($matkul->count() > 0)
        @foreach($matkul as $row)
            <tr>
                <td>{{$row->matakuliah->id}}</td>
                <td>{{$row->matakuliah->nama_matkul}}</td>
                <td>{{$row->matakuliah->sks}}</td>
                <td>{{$row->matakuliah->semester}}</td>
                <td>{{$row->nilai}}</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="6" class="text-center">Data tidak ada</td>
        </tr>
    @endif
    </tbody>
</table>
</body>
</html>
