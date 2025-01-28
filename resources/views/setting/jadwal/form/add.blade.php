<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>tambah data jadwal</h1>
  @if($data <= 0)
    <form action="/jadwal/add" method="post">
    @csrf
    <div class="form-floating">
      <input
        type="time"
        class="form-control"
        id="jam_masuk"
        name="jam_masuk"
        placeholder="jam_masuk"
        autocomplete="off" />
      <label for="jam_masuk">jam_masuk:</label>
    </div>
    <div class="form-floating">
      <input
        type="time"
        class="form-control"
        id="jam_istirahat"
        name="jam_istirahat"
        placeholder="jam_istirahat"
        required="on"
        autocomplete="off" />
      <label for="jam_istirahat">jam_istirahat:</label>
    </div>
    <div class="form-floating">
      <input
        type="time"
        class="form-control"
        id="jam_kembali"
        name="jam_kembali"
        placeholder="jam_kembali"
        required="on"
        autocomplete="off" />
      <label for="jam_kembali">jam_kembali:</label>
    </div>
    <div class="form-floating">
      <input
        type="time"
        class="form-control"
        id="jam_pulang"
        name="jam_pulang"
        placeholder="jam_pulang"
        required="on"
        autocomplete="off" />
      <label for="jam_pulang">jam_pulang:</label>
    </div>
    <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
      Submit
    </button>
    </form>
    @else
    @foreach($jadwal as $jadwal)
    <form action="/jadwal/{{$jadwal->id}}/update" method="post">
      @csrf
      @method('PUT')
      <div class="form-floating">
        <input
          type="time"
          class="form-control"
          id="jam_masuk"
          value="{{$jadwal->jam_masuk}}"
          name="jam_masuk"
          placeholder="jam_masuk"
          autocomplete="off" />
        <label for="jam_masuk">jam_masuk:</label>
      </div>
      <div class="form-floating">
        <input
          value="{{$jadwal->jam_istirahat}}"
          type="time"
          class="form-control"
          id="jam_istirahat"
          name="jam_istirahat"
          placeholder="jam_istirahat"
          required="on"
          autocomplete="off" />
        <label for="jam_istirahat">jam_istirahat:</label>
      </div>
      <div class="form-floating">
        <input
          value="{{$jadwal->jam_kembali}}"
          type="time"
          class="form-control"
          id="jam_kembali"
          name="jam_kembali"
          placeholder="jam_kembali"
          required="on"
          autocomplete="off" />
        <label for="jam_kembali">jam_kembali:</label>
      </div>
      <div class="form-floating">
        <input
          type="time"
          class="form-control"
          id="jam_pulang"
          name="jam_pulang"
          placeholder="jam_pulang"
          value="{{$jadwal->jam_pulang}}"
          required="on"
          autocomplete="off" />
        <label for="jam_pulang">jam_pulang:</label>
      </div>
      <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
        Submit
      </button>
    </form>
    @endforeach
    @endif
</x-layout>