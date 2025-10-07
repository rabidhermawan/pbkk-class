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
    value="{{ old('goodvalues') }}"
    required
  >

  <!-- Description -->
  <label for="description">Description:</label>
  <textarea
    rows="5"
    id="description" 
    name="description" 
    required
  >{{ old('description') }}</textarea>

  <!-- Select a Good Place -->
  <label for="goodplace_id">Goodplace:</label>
  <select id="goodplace_id" name="goodplace_id" required>
    <option value="" disabled selected>Select a Good place</option>
    @foreach($goodplaces as $goodplace)
        <option value="{{ $goodplace->id }}"  {{ $goodplace->id == old('goodplace_id') ? 'selected' : ''}}>
            {{ $goodplace->place_name }}
        </option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Create Goodthings</button>

  <!-- validation errors -->
  @if ($errors->any())
    <ul class="px-4 py-2 bg-red-100"">
      @foreach ($errors->all() as $error)
      <li class="my-2 text-red-500">{{ $error }}</li>
      @endforeach
    </ul>
  @endif

</form>
</x-layout>