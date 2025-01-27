<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>List kelas</h1>
  <h2>Tanggal: {{$date}}</h2>
  <h2>Waktu: {{$time}}</h2>

  @if(session()->has("error"))
  <h5>Error: {{session("error")}}</h5>
  </div>
  @endif
  @if(session()->has("success"))
  <h5>Success: {{session("success")}}</h5>
  </div>
  @endif

  <table border="1">
    <tr>
      <th>No</th>
      <th>Kelas</th>
      <th>Jurusan</th>
      <th>Kelas_ke</th>
      <th>Lokasi</th>
      <th>Angkatan</th>
      <th>dibuat pada</th>
      <th>setting</th>
    </tr>
    @foreach ($classrooms as $classroom)
    <tr>
      <td>{{$classroom->id}}</td>
      <td>{{$classroom->kelas}}</td>
      <td>{{$classroom->jurusan}}</td>
      <td>{{$classroom->kelas_ke}}</td>
      <td>{{$classroom->lokasi}}</td>
      <td>{{$classroom->angkatan}}</td>
      <td>{{$classroom->created_at}}</td>
      <td><a href="/list/kelas/{{$classroom->id}}/edit">Edit</a></td>
    </tr>
    @endforeach
  </table>
  <a href="/list/kelas/add">tambah data kelas</a>
</x-layout>