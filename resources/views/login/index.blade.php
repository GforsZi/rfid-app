<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Login page</h1>
  @if(session()->has("errorLogin"))
  <h5>Error: {{session("errorLogin")}}</h5>
  </div>
  @endif
  @if(session()->has("success"))
  <h5>Success: {{session("success")}}</h5>
  </div>
  @endif
  <form action="/users/login" method="post">
    @csrf
    <div class="form-floating">
      <input
        type="email"
        class="form-control"
        id="email"
        value="{{old('email')}}"
        name="email"
        placeholder="Username"
        required="on"
        autocomplete="off" />
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        placeholder="Password"
        required="on"
        autocomplete="off" />
      <label for="password">Password</label>
    </div>

    <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
      Sign in
    </button>
    <p class="mb-3 text-body-secondary">
      Don't have account? <a href="/register">Sign-up now!</a>
    </p>
  </form>
</x-layout>