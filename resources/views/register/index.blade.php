<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <main class="container vh-100 align-items-center justify-content-center d-flex w-100 mx-auto">
    <form action="/users/register" method="post">
      @csrf
      <img
        class="mb-4 object-fit-cover"
        src="{{asset('resource/img/unicashlogo.png')}}"
        alt=""
        width="72"
        height="60" />
      <h1 class="h3 mb-3 fw-normal">Register form</h1>

      <div class="form-floating ">
        <input
          type="email"
          class="form-control @error('email') is-invalid @enderror"
          name="email"
          placeholder="email"
          required="on"
          autocomplete="off"
          maxlength="25"
          value="{{old('email')}}" />
        <label for="floatingInput">Email</label>
        @error('email')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating ">
        <input
          type="text"
          class="form-control @error('name') is-invalid @enderror"
          name="name"
          placeholder="username"
          required="on"
          autocomplete="off"
          maxlength="255"
          value="{{old('name')}}" />
        <label for="floatingInput">name</label>
        @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating ">
        <input
          type="password"
          class="form-control @error('password') is-invalid @enderror"
          name="password"
          placeholder="Password"
          required="on"
          autocomplete="off"
          maxlength="30" />
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating ">
        <input
          type="password"
          class="form-control @error('confirm_password') is-invalid @enderror"
          name="confirm_password"
          placeholder="Password"
          required="on"
          autocomplete="off"
          maxlength="30" />
        <label for="floatingPassword">Confirm Password</label>
        @error('confirm_password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

      <button class="btn btn-primary w-100 py-2 mt-3" type="submit">
        Sign up
      </button>
      <p class=" mb-3 text-body-secondary"> Have account? <a href="/login">Sign-in now!</a></p>
    </form>
  </main>
</x-layout>