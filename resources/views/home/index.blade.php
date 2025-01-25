<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>Home</h1>
  <a href="/profile">Profile</a>
  <a href="/list">List</a>

  @if(session()->has("success"))
  <h5>Success: {{session("success")}}</h5>
  </div>
  @endif
</x-layout>