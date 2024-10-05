@extends('tampilan')

@section('konten')
    <div class="content">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1>edit profil Pegawai</h1>
                </div>
                <div class="card-body">
                    <form action='/update/{{$pegawai->id}}' method="post">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text">Image</span>
                            <input type="file" value="{{$pegawai->image_pegawai}}"id="image_pegawai" name="image_pegawai">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Nama</span>
                            <input type="text" class="form-control" value="{{$pegawai->nama}}" id="nama" name="nama" >
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Tanggal Masuk</span>
                            <input type="date" value="{{$pegawai->tanggal_masuk}}" id="tanggal_masuk"  nama="tanggal_masuk" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Jenis Kelamin</span>
                            <select class="form-select " value="{{$pegawai->jenis_kelamin}}" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Alamat</span>
                            {{-- <input type="text" nama="" class="form-control" placeholder="Alamat"> --}}
                            <textarea name="alamat" value="{{$pegawai->alamat}}" id="alamat" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Kota</span>
                            <input type="text" value="{{$pegawai->kota}}" id="kota" nama="kota" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">No.Telp</span>
                            <input type="text" value="{{$pegawai->no_telp}}" id="no_telp" nama="no_telp" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Jabatan</span>
                            <input type="text" value="{{$pegawai->jabatan}}" id="jabatan" nama="jabatan" class="form-control" placeholder="Jabatan">
                        </div>
                        <button type="submit" class="btn btn-outline-primary float-end">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection