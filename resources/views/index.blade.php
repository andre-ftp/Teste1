<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto text-center">
        <h1 class="font-bold">Lista</h1>
        
        <?php foreach($posts as $post) ?>
            <article>
                <?= $post ?>
            </article>
        <?php endforeach ?>

        <!--
        <ul>
            <li><a href="/1">{{$nome}} -> 1</a></li>
            <li><a href="/2">{{$nome}} -> 2</a></li>
        </ul>
        -->
    
    
    </div>
</body>

</html>
