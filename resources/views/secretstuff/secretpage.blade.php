<x-layout>
    <h1>You got me!</h1>

    {{-- @if($greeting == "Hello!")
        <p>If you can see this that means I am saying hello to you!</p>        
    @endif
    <!--<p> {{ $greeting }} </p> --> --}}

    <h2>List of good things!</h2>
    <ul>
        @foreach($goodstuff as $stuff)
            <li>
                <x-card href="{{ route('goodthings.show', $stuff->id) }}" :highlight="$stuff['id'] < 2 ">
                    <div>
                        <h3>{{ $stuff->goodthings }}</h3>
                        <p>{{ $stuff->goodplace->place_name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{$goodstuff->links() }}
</x-layout>
