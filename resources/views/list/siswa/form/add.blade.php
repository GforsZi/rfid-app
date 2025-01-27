<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Add siswa</h1>
  <a href="/list/siswa/scan">scan card</a>
  <form action="/siswa/add" method="post">
    @csrf
    <div class="form-floating">
      <input
        type="text"
        class="form-control"
        id="nama"
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
        id="rfid"
        readonly
        @if(session()->has("rfid"))
      value="{{session("rfid")}}"
      @endif
      name="rfid"
      placeholder="rfid siswa"
      required="on"
      autocomplete="off" />
      <label for="rfid">code rfid Siswa</label>
    </div>
    <div class="form-floating">
      <input
        type="text"
        class="form-control"
        id="nisn"
        name="nisn"
        placeholder="nisn"
        required="on"
        autocomplete="off" />
      <label for="nisn">Nisn</label>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Kelas</label>
      <div class="input-group">
        <span class="input-group-text bg-primary text-white">
          <i class='bx bx-user-plus'></i>
        </span>
        <select id="kelas" name="classroom_id" class="form-select">
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
</x-layout>