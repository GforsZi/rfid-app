<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>jadwal page</h1>
  <a href="/setting/jadwal/add">tambah jadwal</a>

  <table border="1">
    <tr>
      <th>Mode</th>
      <th>Jam masuk</th>
      <th>Jam istirahat 1</th>
      <th>Jam kembali 1</th>
      <th>Jam istirahat 2</th>
      <th>Jam kembali 2</th>
      <th>Jam pulang</th>
    </tr>
    @foreach($jadwal as $jadwal)
    <tr>
      <td>{{$jadwal->mode}}</td>
      <td>{{$jadwal->jam_masuk}}</td>
      <td>{{$jadwal->jam_istirahat_1}}</td>
      <td>{{$jadwal->jam_kembali_1}}</td>
      <td>{{$jadwal->jam_istirahat_2}}</td>
      <td>{{$jadwal->jam_kembali_2}}</td>
      <td>{{$jadwal->jam_pulang}}</td>
    </tr>
    @endforeach
  </table>
</x-layout>