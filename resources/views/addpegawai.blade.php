@extends('tampilan')

@section('konten')
    <div class="content">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Pegawai</h1>
                </div>
                <div class="card-body">
                    <form action='/addpegawai' method="POST">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text">Image</span>
                            <input type="file" id="image_pegawai" name="image_pegawai">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Nama</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Masuk</span>
                            <input type="date" id="tanggal_masuk" nama="tanggal_masuk" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Jenis Kelamin</span>
                            <select class="form-select " id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Alamat</span>
                            {{-- <input type="text" nama="" class="form-control" placeholder="Alamat"> --}}
                            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Kota</span>
                            <input type="text" id="kota" nama="kota" class="form-control" placeholder="Kota">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">No.Telp</span>
                            <input type="text" id="no_telp" nama="no_telp" class="form-control" placeholder="Nomor Telepon">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Jabatan</span>
                            <input type="text" id="jabatan" nama="jabatan" class="form-control" placeholder="Jabatan">
                        </div>
                        
                        <button type="submit" class="btn btn-outline-primary float-end">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection