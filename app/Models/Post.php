<?php


namespace App\Models;

class Post{

    public static function find($slug){

        $caminho = resource_path("posts/{$slug}.html");

        if(!file_exists($caminho)){
            throw new ModelNotFoundException();  
        }

        return cache()->remember("posts.{$slug}", now()->addSeconds(5), fn() => file_get_contents($caminho));
        
        //sem cache seria:
        //return file_get_contents($caminho);

    }

}


?>