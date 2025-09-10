<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's supposed to be secret!</title>
</head>
<body>
    <h1>You got me!</h1>
    @if($greeting == "Hello!")
        <p>If you can see this that means I am saying hello to you!</p>        
    @endif
    <!--<p> {{ $greeting }} </p> -->

    <p>List of good things!</p>
    <ul>
        @foreach($goodstuff as $stuff)
            <li>
            <a href="/secretmaybe/goodthings/{{$stuff["id"]}}">
                {{ $stuff["goodthings"]}}
            </a>
        </li>
        @endforeach
    </ul>
</body>
</html>