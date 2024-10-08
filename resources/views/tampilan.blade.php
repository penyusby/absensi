<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="projek/mystyle.css">
    <style>
      body {
        padding-top: 56px; /* Space for the navbar */
      }
      .sidebar {
        height: 100vh;
        position: fixed;
        top: 56px; /* Start below the navbar */
        left: 0;
        width: 250px;
        background-color: #f8f9fa;
        padding-top: 1rem;
      }
      .content {
        margin-left: 250px;
        padding: 1rem;
      }
      .employee-table th, .employee-table td {
            vertical-align: middle;
            text-align: center;
            color: black; /* Ubah warna teks tabel menjadi hitam (atau warna lain) */
        }

        .employee-photo {
            width: 75px; /* Lebar 3x4 dalam piksel */
            height: 100px; /* Tinggi 3x4 dalam piksel */
            object-fit: cover;
        }

        /* Warna header tabel */
        .employee-table th {
            background-color: #f0f0f0; /* Warna abu-abu ringan */
        }

        /* Warna teks di tabel (tbody) */
        .employee-table td {
            color: #343a40; /* Warna teks yang lebih gelap */
        }
        .card-body {
            background-color: #f0f0f0; /* Abu-abu ringan untuk card body */
        }
        
        .toggle-details {
            color: #0d6efd; /* Warna biru untuk teks "Detail Identitas Pegawai" */
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .toggle-details:hover {
            text-decoration: underline;
        }

        .input-group {
            margin-bottom: 15px;
        }

        /* Style untuk header */
        h1 {
            font-weight: bold;
        }

        .input-group-text {
            width: 150px;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index">
            <img src="projek/img/Screenshot 2024-04-25 110532.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            SiAbsensi
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <button id="theme-toggle" class="btn btn-secondary">Toggle Theme</button>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
      </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Sidebar</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="/" class="nav-link link-dark" aria-current="page">
            jam Kerja
          </a>
        </li>
        <li>
          <a href="pegawai" class="nav-link link-dark">
            Pegawai
          </a>
        </li>
        <li>
          <a href="absensi" class="nav-link link-dark">
            Absensi
          </a>
        </li>
        <li>
          <a href="setting" class="nav-link link-dark">
            Setting
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="projek/myjs.js"></script>
    <script src="projek/shift.js"></script>
  </body>
</html>
