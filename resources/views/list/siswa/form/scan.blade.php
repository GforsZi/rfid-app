<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <h1>scan your card</h1>
  <form action="/rfid/scan" method="get">
    <input type="text" name="rfid" required autocomplete="off">
    <button type="submit">Submit</button>
  </form>
</x-layout>