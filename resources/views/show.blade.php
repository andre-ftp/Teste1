<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigo</title>
    @vite('resources/css/app.css')
</head>
<body class="py-4 px-2">
    <article>
        <h1 class="text-xl font-bold">{{$nome}}: {{$post}}</h1>
        <div class="py-8"><?= $texto ?></div>
    </article>

    <a href="/">Go Back</a>
</body>
</html>