<x-layout>
<form action="{{ route('goodthings.store') }}" method="POST">
  @csrf
  
    <h2>Create Good Stuff</h2>

  <!-- Good things -->
  <label for="goodthings">Goodthings Name:</label>
  <input 
    type="text" 
    id="goodthings" 
    name="goodthings" 
    value="{{ old('goodthings') }}" 
    required
  >

  <!-- Good Values -->
  <label for="goodvalues">Good Values (0-100):</label>
  <input 
    type="number" 
    id="goodvalues" 
    name="goodvalues" 
    required
  >

  <!-- Description -->
  <label for="description">Description:</label>
  <textarea
    rows="5"
    id="description" 
    name="description" 
    required
  ></textarea>

  <!-- Select a Good Place -->
  <label for="goodplace_id">Goodplace:</label>
  <select id="goodplace_id" name="goodplace_id" required>
    <option value="" disabled selected>Select a Good place</option>
    @foreach($goodplaces as $goodplace)
        <option value="{{ $goodplace->id }}">
            {{ $goodplace->place_name }}
        </option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Create Goodthings</button>

  <!-- validation errors -->
  
</form>
</x-layout>