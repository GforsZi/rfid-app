<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-sidebar>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">List</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <a href="" class="btn btn-sm btn-outline-secondary">Export</a>
        </div>
      </div>
    </div>
    <div class="card-group">
      <div class="card border-info mb-3">
        <div class="card-header">Siswa</div>
        <div class="card-body">
          <h5 class="card-title"><a href="/list/siswa" class="link-info">View table</a></h5>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card border-success mb-3">
        <div class="card-header">Kelas</div>
        <div class="card-body">
          <h5 class="card-title"><a href="/list/kelas" class="link-success">View table</a></h5>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card border-warning mb-3">
        <div class="card-header">Absen</div>
        <div class="card-body">
          <h5 class="card-title"><a href="/list/absen" class="link-warning">View table</a></h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </x-sidebar>
</x-layout>