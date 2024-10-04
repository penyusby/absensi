@extends('tampilan')

@section('konten')

<div class="content">
    <h3>Settings</h3>
    <div>
        <h4 style="text-align: center;">Admin</h4>
    </div>
    <ul style="list-style: none; padding: 0;">
        <div class="d-grid gap-2">
            <button class="btn btn-outline-secondary text-start" type="button">📋 Nama Usaha Atau Toko</button>
            <button class="btn btn-outline-secondary text-start" type="button">📍 Lokasi </button>
            <button class="btn btn-outline-secondary text-start" type="button">😊 Senyum </button>
            <button class="btn btn-outline-secondary text-start" type="button">📄 Syarat Dan Ketentuan </button>
            <button class="btn btn-outline-secondary text-start" type="button">🛡️ Kebijakan Privasi </button>
            <button class="btn btn-outline-secondary text-start" type="button">🔒 Simpan Info Login </button>
            <button class="btn btn-outline-secondary text-start" type="button">⏩ Keluar </button>
    </div>
    </ul>
</div>
    
@endsection