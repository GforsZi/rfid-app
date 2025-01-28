<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Detail siswa</h1>

  <table border="1">
    <tr>
      <th>No</th>
      <th>Nisn</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Action</th>
    </tr>
    @foreach ($siswa_siswa as $siswa)
    <tr>
      <td>{{$siswa->id}}</td>
      <td>{{$siswa->nisn}}</td>
      <td>{{$siswa->name}}</td>
      <td>{{$siswa->class_room->kelas}} {{$siswa->class_room->jurusan}} {{$siswa->class_room->kelas_ke}}</td>
      <td>
        <a href="/list/siswa/{{$siswa->nisn}}/edit">Edit</a>|
        <form action="/siswa/{{$siswa->nisn}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>

      </td>
    </tr>
    @endforeach
  </table>
</x-layout>