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
              <h4 class="mb-3">Add data siswa</h4>
              <a href="/list/siswa/scan">scan card</a>
              <form action="/siswa/add" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="name" class="form-label">Keterangan</label>
                    <input
                      class="form-control @error('name') is-invalid @enderror"
                      type="text"
                      id="nama"
                      name="name"
                      placeholder="nama siswa"
                      required="on"
                      value="{{old('name')}}"
                      autocomplete="off" />
                    @error('name')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="col-sm-6">
                    <label for="rfid" class="form-label">Nominal</label>
                    <input
                      class="form-control @error('rfid') is-invalid @enderror"
                      type="text"
                      id="rfid"
                      readonly
                      value="{{$rfid}}"
                      name="rfid"
                      placeholder="rfid siswa"
                      required="on"
                      autocomplete="off" />
                    @error('rfid')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="nisn" class="form-label">Nisn</label>
                    <input
                      type="text"
                      class="form-control @error('nisn') is-invalid @enderror"
                      id="nisn"
                      name="nisn"
                      value="{{old('nisn')}}"
                      placeholder="nisn"
                      required="on"
                      autocomplete="off" />
                    @error('nisn')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="jurusan" class="form-label">Kelas</label>
                    <div class="input-group @error('class_room_id') is-invalid @enderror">
                      <span class="input-group-text bg-primary text-white">
                        <i class='bx bx-user-plus'></i>
                      </span>
                      <select id="kelas" name="class_room_id" class="form-select">
                        @foreach ($classrooms as $classroom)
                        <option value="{{$classroom->id}}">{{$classroom->kelas}} {{$classroom->jurusan}} {{$classroom->kelas_ke}}</option>
                        @endforeach
                      </select>
                    </div>
                    @error('class_room_id')
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