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
    <div class="form-floating">
      <input
        type="text"
        class="form-control"
        id="kelas"
        name="kelas"
        value="{{$siswa->kelas}}"
        placeholder="kelas"
        required="on"
        autocomplete="off" />
      <label for="kelas">Kelas</label>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label"></label>
      <div class="input-group">
        <span class="input-group-text bg-primary text-white">
          <i class='bx bx-user-plus'></i>
        </span>
        <select id="jurusan" name="jurusan" class="form-select">
          @if($siswa->jurusan == "Desain Komunikasi Visual")
          <option value="Desain Komunikasi Visual" selected>DKV</option>
          <option value="Pengembangan Prangkat lunak dan Gim">PPLG</option>
          @else
          <option value="Desain Komunikasi Visual">DKV</option>
          <option value="Pengembangan Prangkat lunak dan Gim" selected>PPLG</option>
          @endif
        </select>
      </div>
    </div>
    <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
      Submit
    </button>
  </form>
  @endforeach
</x-layout>