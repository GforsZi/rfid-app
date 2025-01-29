<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>View rekap absen</h1>
  <h2>Tanggal: {{$date}}</h2>
  <h2>Waktu: {{$time}}</h2>

  <a href="/list/absen/add">add</a>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nisn</th>
      <th>Tanggal</th>
      <th>Masuk</th>
      <th>istirahat 1</th>
      <th>kembali 1</th>
      <th>istirahat 2</th>
      <th>kembali 2</th>
      <th>Pulang</th>
      <th>setting</th>
    </tr>
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
  </table>
</x-layout>