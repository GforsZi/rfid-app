<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-sidebar>


    <h1>Add new class</h1>
    <form action="/kelas/add" method="post">
      @csrf
      <div class="mb-3">
        <label for="jurusan" class="form-label">Kelas:</label>
        <div class="input-group">
          <span class="input-group-text bg-primary text-white">
            <i class='bx bx-user-plus'></i>
          </span>
          <select id="kelas" name="kelas" class="form-select">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
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
            <option value="Desain Komunikasi Visual">DKV</option>
            <option value="Pengembangan Prangkat lunak dan Gim">PPLG</option>
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
          autocomplete="off" />
        <label for="kelas_ke">Kelas_ke:</label>
      </div>
      <div class="form-floating">
        <input
          type="text"
          class="form-control"
          id="lokasi"
          name="lokasi"
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
          placeholder="angkatan"
          required="on"
          autocomplete="off" />
        <label for="angkatan">Angkatan:</label>
      </div>
      <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
        Submit
      </button>
    </form>
  </x-sidebar>
</x-layout>