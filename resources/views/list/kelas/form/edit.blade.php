<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Edit kelas</h1>
  @foreach($classrooms as $classroom)
  <form action="/kelas/{{$classroom->id}}/edit" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="jurusan" class="form-label">Kelas:</label>
      <div class="input-group">
        <span class="input-group-text bg-primary text-white">
          <i class='bx bx-user-plus'></i>
        </span>
        <select id="kelas" name="kelas" class="form-select">
          @if($classroom->kelas == "10")
          <option value="10" selected>10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          @elseif($classroom->kelas == "11")
          <option value="10">10</option>
          <option value="11" selected>11</option>
          <option value="12">12</option>
          @else
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12" selected>12</option>
          @endif

        </select>
      </div>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan:</label>
      <div class="input-group">
        <span class="input-group-text bg-primary text-white">
          <i class='bx bx-user-plus'></i>
        </span>
        <select id="jurusan" name="jurusan" class="form-select">
          @if($classroom->jurusan == "Desain Komunikasi Visual")
          <option value="Desain Komunikasi Visual" selected>DKV</option>
          <option value="Pengembangan Prangkat lunak dan Gim">PPLG</option>
          @else
          <option value="Desain Komunikasi Visual">DKV</option>
          <option value="Pengembangan Prangkat lunak dan Gim" selected>PPLG</option>
          @endif
        </select>
      </div>
    </div>
    <div class="form-floating">
      <input
        type="number"
        class="form-control"
        id="kelas_ke"
        name="kelas_ke"
        placeholder="kelas_ke"
        value="{{$classroom->kelas_ke}}"
        autocomplete="off" />
      <label for="kelas_ke">Kelas_ke:</label>
    </div>
    <div class="form-floating">
      <input
        type="text"
        class="form-control"
        id="lokasi"
        name="lokasi"
        value="{{$classroom->lokasi}}"
        placeholder="lokasi"
        required="on"
        autocomplete="off" />
      <label for="lokasi">Lokasi:</label>
    </div>
    <div class="form-floating">
      <input
        type="number"
        class="form-control"
        id="angkatan"
        name="angkatan"
        value="{{$classroom->angkatan}}"
        placeholder="angkatan"
        required="on"
        autocomplete="off" />
      <label for="angkatan">Angkatan:</label>
    </div>
    <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
      Submit
    </button>
  </form>
  @endforeach
</x-layout>