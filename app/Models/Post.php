<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facade\File;

class Post{



    public static function all(){
        return File::files(resource_path("posts/"));
    }


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