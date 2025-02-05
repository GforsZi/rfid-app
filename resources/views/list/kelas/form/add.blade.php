<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-sidebar>
    <main>
      <div class="container">
        <main>
          <br>
          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <div class="card border-primary mb-3">
                <div class="card-header">Header</div>
                <div class="card-body text-primary">
                  <h5 class="card-title">Primary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Add data kelas</h4>
              <form action="/kelas/add" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="row g-3">
                  <div class="col-sm-6">
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
                    @error('kelas')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="col-sm-6">
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
                    @error('jurusan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="kelas_ke" class="form-label">Kelas ke</label>
                    <input
                      value="{{old('kelas_ke')}}"
                      class="form-control @error('kelas_ke') is-invalid @enderror"
                      type="number"
                      class="form-control"
                      id="kelas_ke"
                      name="kelas_ke"
                      placeholder="kelas_ke"
                      autocomplete="off" />
                    @error('kelas_ke')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input
                      value="{{old('lokasi')}}"
                      class="form-control @error('lokasi') is-invalid @enderror"
                      type="text"
                      id="lokasi"
                      name="lokasi"
                      placeholder="lokasi"
                      required="on"
                      autocomplete="off" />
                    @error('lokasi')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input
                      value="{{old('angkatan')}}"
                      class="form-control @error('angkatan') is-invalid @enderror"
                      type="number"
                      id="angkatan"
                      name="angkatan"
                      placeholder="angkatan"
                      required="on"
                      autocomplete="off" />
                    @error('angkatan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>

                <hr class="my-4" />

                <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </main>
        <br />
      </div>
    </main>


  </x-sidebar>
</x-layout>