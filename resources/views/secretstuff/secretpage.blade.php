<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's supposed to be secret!</title>
</head>
<body>
    <h1>You got me!</h1>
    <p> {{ $greeting }} </p>

    <p>List of good things!</p>
    <ul>
        <li>
            <a href="/secretmaybe/goodthings/{{$goodstuff[0]["id"]}}">
                {{ $goodstuff[0]["goodthings"]}}
            </a>
        </li>

        <li>
            <a href="/secretmaybe/goodthings/{{$goodstuff[1]["id"]}}">
                {{ $goodstuff[1]["goodthings"]}}
            </a>
        </li>
    </ul>
</body>
</html>