<x-layout>
<form action="" method="">
  @csrf
  
    <h2>Create Good Stuff</h2>

  <!-- ninja Name -->
  <label for="goodthings">Goodthings Name:</label>
  <input 
    type="text" 
    id="goodthings" 
    name="goodthings" 
    value="{{ old('goodthings') }}" 
    required
  >

  <!-- ninja Strength -->
  <label for="goodvalues">Good Values (0-100):</label>
  <input 
    type="number" 
    id="goodvalues" 
    name="goodvalues" 
    required
  >

  <!-- ninja Bio -->
  <label for="description">Biography:</label>
  <textarea
    rows="5"
    id="description" 
    name="dscription" 
    required
  ></textarea>

  <!-- select a dojo -->
  <label for="goodplace_id">Goodplace:</label>
  <select id="goodplace_id" name="goodplace_id" required>
    <option value="" disabled selected>Select a Good place</option>
    @foreach($goodplaces as $goodplace)
        <option value="{{ $goodplace->goodplace_id }}">
            {{ $goodplace->place_name }}
        </option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Create Ninja</button>

  <!-- validation errors -->
  
</form>
</x-layout>