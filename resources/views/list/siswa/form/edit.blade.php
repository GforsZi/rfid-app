<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Edit page</h1>
  @foreach ($siswa_siswa as $siswa)
  <form action="/siswa/{{$siswa->nisn}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-floating">
      <input
        type="text"
        class="form-control"
        id="nama"
        value="{{$siswa->name}}"
        name="name"
        placeholder="nama siswa"
        required="on"
        autocomplete="off" />
      <label for="nama">Nama Siswa</label>
    </div>
    <div class="form-floating">
      <input
        type="text"
        class="form-control"
        id="nisn"
        value="{{$siswa->nisn}}"
        name="nisn"
        placeholder="nisn"
        required="on"
        autocomplete="off" />
      <label for="nisn">Nisn</label>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label"></label>
      <div class="input-group">
        <span class="input-group-text bg-primary text-white">
          <i class='bx bx-user-plus'></i>
        </span>
        <select id="jurusan" name="class_room_id" class="form-select">
          @foreach ($classrooms as $classroom)
          <option value="{{$classroom->id}}">{{$classroom->kelas}} {{$classroom->jurusan}} {{$classroom->kelas_ke}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
      Submit
    </button>
  </form>
  @endforeach
</x-layout>