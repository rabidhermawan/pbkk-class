<x-layout>
    <h1>Good things - #{{ $goodthing->id }}</h1>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Good Things: </strong> {{$goodthing->goodthings}}</p>
        <p><strong>Good Value: </strong> {{$goodthing->goodvalues}}</p>
        <p><strong>Description:</strong></p>
        <p>{{$goodthing->description}}</p>
    </div>
</x-layout>
