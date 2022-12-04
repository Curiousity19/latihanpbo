<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url("https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css") }}">
</head>
<body>

<div class="container row">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark col-3" style="height: 100vh;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">Lanjut PT. 2</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="/" class="nav-link text-white" aria-current="page">
                Home
              </a>
            </li>
            <li>
              <a href="/gaji/index" class="nav-link text-white">
                Gaji
              </a>
            </li>
            <li>
              <a href="/Jabatan/index" class="nav-link text-white">
                Jabatan
              </a>
            </li>
            <li>
              <a href="/Karyawan/index" class="nav-link text-white">
                Karyawan
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                Laporan
              </a>
            </li>
          </ul>
      </div>
  
    <div class="container col-9">
      @yield('content')
    </div>

</div>

</body>
</html>