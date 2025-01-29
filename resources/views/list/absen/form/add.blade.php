<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>add absent</h1>
  <form action="/absen/add" method="post">
    @csrf
    <input type="text" name="rfid" required autocomplete="off">
    <button type="submit">Submit</button>
  </form>
</x-layout>