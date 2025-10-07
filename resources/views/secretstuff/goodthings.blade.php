<x-layout>
    <h1>Good things - #{{ $goodthings->id }}</h1>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Good Things: </strong> {{$goodthings->goodthings}}</p>
        <p><strong>Good Value: </strong> {{$goodthings->goodvalues}}</p>
        <p><strong>Description:</strong></p>
        <p>{{$goodthings->description}}</p>
    </div>

    {{-- Good place Information     --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Goodplace Information</h3>
        <p><strong>Goodplace name:</strong> {{ $goodthings->goodplace->place_name }}</p>
        <p><strong>Address:</strong> {{ $goodthings->goodplace->address }}</p>
        <p><strong>About the Goodplace:</strong></p>
        <p>{{ $goodthings->goodplace->description }}</p>
    </div>

    <form action="{{ route('goodthings.destroy', $goodthings->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn my-4">Delete Goodstuff</button>
    </form>   

</x-layout>
