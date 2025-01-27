<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>List Siswa</h1>
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
      <th>Nisn</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>waktu</th>
      <th>setting</th>
    </tr>
    @foreach ($siswa_siswa as $siswa)
    <tr>
      <td>{{$siswa->id}}</td>
      <td>{{$siswa->nisn}}</td>
      <td>{{$siswa->name}}</td>
      <td>{{$siswa->classroom->kelas}} {{$siswa->classroom->jurusan}} {{$siswa->classroom->kelas_ke}}</td>
      <td>{{$siswa->created_at}}</td>
      <td><a href="/list/siswa/{{$siswa->nisn}}">View</a></td>
    </tr>
    @endforeach
  </table>
  <a href="/list/siswa/add">Tambah data siswa</a>
</x-layout>