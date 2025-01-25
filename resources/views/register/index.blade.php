<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Register page</h1>
  <form action="/users/register" method="post">
    @csrf
    <label for="email">Email: </label>
    @error('email')
    <div>
      {{$message}}
    </div>
    @enderror
    <input type="email" name="email" placeholder="email" autocomplete="off" id="email"><br>
    <label for="nama">Nama: </label>
    @error('name')
    <div>
      {{$message}}
    </div>
    @enderror
    <input type="text" name="name" placeholder="nama" autocomplete="off" id="nama"><br>
    <label for="password">Password: </label>
    @error('password')
    <div>
      {{$message}}
    </div>
    @enderror
    <input type="password" name="password" placeholder="password" autocomplete="off" id="password"><br>
    <label for="password">Confirm Password: </label>
    @error('confirm_password')
    <div>
      {{$message}}
    </div>
    @enderror
    <input type="password" name="confirm_password" autocomplete="off" placeholder="confirm password" id="password"><br>
    <button type="submit">Submit</button>
  </form>
</x-layout>