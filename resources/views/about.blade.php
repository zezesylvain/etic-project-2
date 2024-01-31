<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>
        About
    </h1>
    <h2>
        Bonjour {{ $nom  }} {{ $prenom }}
    </h2>
    <div>
        @foreach($donneesActualite AS $act)
            <div>
                <div>
                    <img src="{{ asset('storage/'. addSuffixe($act['image'])) }}" alt="{{ $act['titre'] }}">
                </div>
                <h4>
                    {{ $act['titre'] }}
                </h4>
                <p>
                    {{ $act['chapeau'] }}
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>
