<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts-Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto text-center">
        <h1 class="font-bold text-xl">Lista</h1>
        <br>
        <?php foreach($posts as $post) : ?>
            <article>
               <a href="/<?= $post->slug; ?>"><h1 class="font-bold"><?= $post->titulo; ?></h1></a>
                <p class="text-sm"><?= $post->info; ?></p>
            </article>
            <br>
        <?php endforeach; ?>


    
    
    </div>
</body>

</html>
