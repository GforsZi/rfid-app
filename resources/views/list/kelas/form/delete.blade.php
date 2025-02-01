<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-sidebar>
    <h1>Delete data kelas</h1>
    <table border="1">
      <tr>
        <th>angkatan</th>
        <th>option</th>
      </tr>
      @foreach ($angkatan as $angkatan)
      <tr>
        <td>{{ucfirst($angkatan)}}</td>
        <td>
          <form action="/kelas/{{$angkatan}}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </x-sidebar>
</x-layout>