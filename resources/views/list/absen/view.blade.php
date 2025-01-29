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
      <th>Jam istirahat 1</th>
      <th>Jam kembali 1</th>
      <th>Jam istirahat 2</th>
      <th>Jam kembali 2</th>
      <th>Pulang</th>
      <th>setting</th>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td>---</td>
    </tr>
  </table>
</x-layout>