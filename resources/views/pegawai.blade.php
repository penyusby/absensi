@extends('tampilan')

@section('konten')
<div class="content">
<div class="container mt-5">
    <h1 class="mb-4">Data Pegawai</h1>
    <div class="row">
        <div class="col-6">
            <input type="text" class="form-control" placeholder="search">
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-outline-primary add-button">
                <a href="addpegawai">                
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V7.5H11.5a.5.5 0 0 1 0 1H8.5v3H7.5v-3H4.5a.5.5 0 0 1 0-1H7.5V4.5A.5.5 0 0 1 8 4z"/>
                </svg>
                </a>
            </button>
        </div>
    </div>
    <table class="table table-bordered mt-3 employee-table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama Karyawan</th>
                <th>Jabatan Divisi</th>
                <th>Lokasi</th>
                <th>Pengaturan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>
                    @if($p->image)
                    <img src="data:image/jpeg;base64,{{base64_encode($p->image_pegawai)}}"width="75" height="100">
                    @else
                    <img src="https://via.placeholder.com/75x100" alt="No Image">
                    @endif
                </td>
                <td>{{$p->nama}}</td>
                <td>{{$p->jabatan}}</td>
                <td>{{$p->kota}}</td>
                <td><div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/editpegawai/{{$p->id}}" method="POST" class="btn btn-warning">ubah</a>

                    <button class="btn btn-danger" type="button">Hancurkan</button>
                  </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection