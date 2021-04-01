<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
       <div>Buongiorno</div>

        Con la presente volevamo avvisarla della creazione di un nuovo post da parte dell'utente : {{$post->author->name}} {{$post->author->surname}}.
    <div>Aggiunto il : {{$post->created_at}}</div>
    <div></div>
    </p>
</body>
</html>
