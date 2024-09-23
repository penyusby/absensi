@extends('tampilan')

@section('konten')
<div class="content">
    <div class="container mt-4">
        <h3>JAM KERJA</h3>
        <div class="d-flex justify-content-end mb-3">
          <a href="noshift">
            <button class="btn btn-outline-secondary me-2" type="button">Tanpa Shift</button>
          </a>
          <a href="">
                      <button class="btn btn-secondary" type="button">Shift</button>
          </a>
        </div>
        <div class="dropdown mb-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Filter
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Option 1</a></li>
            <li><a class="dropdown-item" href="#">Option 2</a></li>
            <li><a class="dropdown-item" href="#">Option 3</a></li>
          </ul>
        </div>
        
        <div class="mb-3">
          <label for="shift1" class="form-label">Shift1</label>
          <input type="text" class="form-control" id="shift1">
        </div>
        <div class="mb-3">
          <label for="shift2" class="form-label">Shift2</label>
          <input type="text" class="form-control" id="shift2">
        </div>
      </div>        
</div>

<!-- Button Tambah -->
<div class="position-fixed bottom-0 end-0 p-3">
<a href="addjamkerja">
  <button class="btn btn-primary btn-lg rounded-circle">
    +
</button>
  </a>
</div>
  
@endsection