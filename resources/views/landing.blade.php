<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand link-light" href="#page-top">RFID-app</a>
      <button class="navbar-toggler navbar-toggler-right text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link link-light" href="/login">Sign-in</a></li>
          <li class="nav-item"><a class="nav-link link-light" href="/register">Sign-up</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class=" w-100 vh-100 position-relative d-flex align-items-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url('resource/img/home.jpg'); background-position: center; background-repeat: no-repeat; background-attachment: scroll; background-size: cover; min-height: 35rem;">
    <div class="container px-4 px-lg-5 d-flex h-100 d-flex align-items-center justify-content-center">
      <div class="d-flex justify-content-center h-100 align-items-center">
        <div class="text-center">
          <h1 class="mx-auto my-0 text-uppercase" style="background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0)); letter-spacing: 0.8rem;">RFID-app</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5 fs-5" style="max-width: 20rem;">Sebuah perangkat lunak yang dirancang untuk kebutuhan absensi menggunakan RFID sensor</h2>
        </div>
      </div>
    </div>
  </header>
</x-layout>