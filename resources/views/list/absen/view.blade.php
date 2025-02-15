<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-sidebar>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">List Absen</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">{{$date}}</button>
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
            <th scope="col">Nama</th>
            <th scope="col">Nisn</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Masuk</th>
            <th scope="col">istirahat 1</th>
            <th scope="col">kembali 1</th>
            <th scope="col">istirahat 2</th>
            <th scope="col">kembali 2</th>
            <th scope="col">Pulang</th>
            <th scope="col">setting</th>
          </tr>
        </thead>
        <tbody>

          @foreach($absents as $absent)
          <tr>
            <td>{{$absent->id}}</td>
            <td>{{$absent->siswa->name}}</td>
            <td>{{$absent->siswa->nisn}}</td>
            <td>{{$absent->tanggal}}</td>
            <td>{{$absent->masuk}}</td>
            <td>{{$absent->istirahat_1}}</td>
            <td>{{$absent->kembali_1}}</td>
            <td>{{$absent->istirahat_2}}</td>
            <td>{{$absent->kembali_2}}</td>
            <td>{{$absent->pulang}}</td>
            <td>hapus</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-sidebar>
</x-layout>