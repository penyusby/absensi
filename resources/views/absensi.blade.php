@extends('tampilan')

@section('konten')
    <div class="content">
        <div class="container mt-5">
            <h1>ABSENSI</h1>
            <div class="d-flex justify-content-start align-items-center mb-4">
                <select class="form-select w-auto me-2" aria-label="Default select example">
                    <option selected>Hari Ini</option>
                    <option value="1">Kemarin</option>
                    <option value="2">Seminggu Terakhir</option>
                </select>
                <button class="btn btn-outline-secondary me-3">
                    Filter 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                        <path d="M1.5 1.5a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-.146.354l-4.007 4.007a.5.5 0 0 0-.147.353v4.59L7.5 13.5V6.707a.5.5 0 0 0-.147-.353L3.354 2.354A.5.5 0 0 1 3.207 2H1.5v-.5z"/>
                    </svg>
                </button>
        
                <!-- Info boxes -->
                <div class="border border-success p-2 me-3">
                    Total Masuk <br>
                    <span class="fw-bold">3</span>
                </div>
                <div class="border border-primary p-2 me-3">
                    Tepat Waktu <br>
                    <span class="fw-bold">1</span>
                </div>
                <div class="border border-danger p-2">
                    Terlambat <br>
                    <span class="fw-bold">2</span>
                </div>
                
            </div>
        
            <!-- Attendance List -->
            <div class="border p-3 mb-3">
                <strong>Jane</strong> <br>
                Shift 1 <br>
                Jumat 22 Agustus 2024 <br>
                Absen Masuk: <span class="badge bg-success">07:55</span> <br>
                Absen Keluar: <span class="badge bg-primary">16:00</span>
            </div>
        
            <div class="border p-3 mb-3">
                <strong>Regina</strong> <br>
                Shift 1 <br>
                Jumat 22 Agustus 2024 <br>
                Absen Masuk: <span class="badge bg-danger">08:34</span> <br>
                Absen Keluar: <span class="badge bg-primary">16:00</span>
            </div>
        
            <div class="border p-3 mb-3">
                <strong>Judith</strong> <br>
                Shift 1 <br>
                Jumat 22 Agustus 2024 <br>
                Absen Masuk: <span class="badge bg-danger">08:34</span> <br>
                Absen Keluar: <span class="badge bg-primary">16:00</span>
            </div>
        </div>
        <div class="col-6 text-end">
            <button class="btn btn-outline-primary add-button">
                <a href="addabsensi">                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V7.5H11.5a.5.5 0 0 1 0 1H8.5v3H7.5v-3H4.5a.5.5 0 0 1 0-1H7.5V4.5A.5.5 0 0 1 8 4z"/>
                </svg>
                </a>
            </button>
        </div>

    </div>
    
@endsection