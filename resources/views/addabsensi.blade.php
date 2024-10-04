@extends('tampilan')

@section('konten')
    <div class="content">
        <div class="container mt-5">
            <h2 class="mb-4">ABSENSI</h2>
            <form>
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                </div>
    
                <!-- Masuk -->
                <div class="mb-3">
                    <label class="form-label">Masuk</label>
                    <div class="input-group">
                        <span class="input-group-text">24 Agustus 2024</span>
                        <span class="input-group-text">07:58</span>
                    </div>
                </div>
    
                <!-- Pilih Shift -->
                <div class="mb-3 text-center">
                    <a href="#" class="btn btn-link text-primary">Pilih Shift</a>
                </div>
    
                <!-- Keluar -->
                <div class="mb-3">
                    <label class="form-label">Keluar</label>
                    <div class="input-group">
                        <span class="input-group-text">24 Agustus 2024</span>
                        <span class="input-group-text">07:58</span>
                    </div>
                </div>
    
                <!-- Tarif -->
                <div class="mb-3">
                    <label for="tarif" class="form-label">Tarif</label>
                    <input type="text" class="form-control" id="tarif" placeholder="Masukkan tarif">
                </div>
    
                <!-- Keterangan -->
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" rows="3" placeholder="Tambahkan keterangan"></textarea>
                </div>
    
                <!-- Tombol Simpan -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection