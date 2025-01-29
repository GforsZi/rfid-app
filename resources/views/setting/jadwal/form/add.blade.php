<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>tambah data jadwal</h1>
  @if($data <= 0)
    <form action="/jadwal/add" method="post">
    @csrf
    <div class="form-floating">
      <input type="time" class="form-control" id="jam_masuk" required="on" name="jam_masuk" />
      <label for="jam_masuk">jam_masuk:</label>
    </div>
    <div class="form-floating">
      <input type="time" class="form-control" id="jam_istirahat_1" name="jam_istirahat_1" required="on" />
      <label for="jam_istirahat_1">jam_istirahat_1:</label>
    </div>
    <div class="form-floating">
      <input type="time" class="form-control" id="jam_kembali_1" name="jam_kembali_1" required="on" />
      <label for="jam_kembali_1">jam_kembali_1:</label>
    </div>
    <div class="form-floating">
      <input type="time" class="form-control" id="jam_istirahat_2" name="jam_istirahat_2" required="on" />
      <label for="jam_istirahat_2">jam_istirahat_2:</label>
    </div>
    <div class="form-floating">
      <input type="time" class="form-control" id="jam_kembali_2" name="jam_kembali_2" required="on" />
      <label for="jam_kembali_2">jam_kembali_2:</label>
    </div>
    <div class="form-floating">
      <input type="time" class="form-control" id="jam_pulang" name="jam_pulang" required="on" />
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
      <div class="mb-3">
        <label for="mode" class="form-label">Mode:</label>
        <div class="input-group">
          <span class="input-group-text bg-primary text-white">
            <i class='bx bx-user-plus'></i>
          </span>
          <select id="mode" name="mode" class="form-select">
            <option value="otomatis" selected>Otomatis</option>
            <option value="masuk">Masuk</option>
            <option value="istirahat_1">Istirahat_1</option>
            <option value="kembali_1">Kembali_1</option>
            <option value="istirahat_2">Istirahat_2</option>
            <option value="kembali_2">Kembali_2</option>
            <option value="pulang">Pulang</option>

          </select>
        </div>
      </div>
      <div class="form-floating">
        <input type="time" class="form-control" id="jam_masuk" value="{{$jadwal->jam_masuk}}" name="jam_masuk" required="on" />
        <label for="jam_masuk">jam_masuk:</label>
      </div>
      <div class="form-floating">
        <input value="{{$jadwal->jam_istirahat_1}}" type="time" class="form-control" id="jam_istirahat_1" name="jam_istirahat_1" required="on" />
        <label for="jam_istirahat_1">jam_istirahat_1:</label>
      </div>
      <div class="form-floating">
        <input value="{{$jadwal->jam_kembali_1}}" type="time" class="form-control" id="jam_kembali_1" name="jam_kembali_1" required="on" />
        <label for="jam_kembali_1">jam_kembali_1:</label>
      </div>
      <div class="form-floating">
        <input value="{{$jadwal->jam_istirahat_2}}" type="time" class="form-control" id="jam_istirahat_2" name="jam_istirahat_2" required="on" />
        <label for="jam_istirahat_2">jam_istirahat_2:</label>
      </div>
      <div class="form-floating">
        <input value="{{$jadwal->jam_kembali_2}}" type="time" class="form-control" id="jam_kembali_2" name="jam_kembali_2" required="on" />
        <label for="jam_kembali_2">jam_kembali_2:</label>
      </div>
      <div class="form-floating">
        <input type="time" class="form-control" id="jam_pulang" name="jam_pulang" value="{{$jadwal->jam_pulang}}" required="on" />
        <label for="jam_pulang">jam_pulang:</label>
      </div>
      <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
        Submit
      </button>
    </form>
    @endforeach
    @endif
</x-layout>