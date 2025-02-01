<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-sidebar>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">List siswa</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button
            class="btn btn-sm btn-outline-secondary"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample"
            aria-expanded="false"
            aria-controls="collapseExample">
            more
          </button>
          <button type="button" class="btn btn-sm btn-outline-secondary">{{$date}}</button>
        </div>
      </div>
    </div>
    <div class="collapse mb-2" id="collapseExample">
      <div class="card card-body">
        <div class="container">
          <div class="d-flex overflow-x-scroll">
            <a
              href="/list/siswa/add"
              class="btn btn-outline-secondary px-2 py-0 mx-1">Add</a>
          </div>
        </div>
      </div>
    </div>

    <div class="table-responsive small">
      @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session("success")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has("error"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session("success")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nisn</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">waktu</th>
            <th scope="col">setting</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($siswa_siswa as $siswa)
          <tr>
            <td>{{$siswa->id}}</td>
            <td>{{$siswa->nisn}}</td>
            <td>{{$siswa->name}}</td>
            <td>{{$siswa->class_room->kelas}} {{$siswa->class_room->jurusan}} {{$siswa->class_room->kelas_ke}}</td>
            <td>{{$siswa->created_at}}</td>
            <td><a href="/list/siswa/{{$siswa->nisn}}">View</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

  </x-sidebar>
</x-layout>