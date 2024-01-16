<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{

    public $titulo;
    public $info;
    public $corpo;
    public $slug;

    public function __construct($title, $info, $body, $slug)
    {
        $this->titulo = $title;
        $this->info= $info;
        $this->corpo = $body;
        $this->slug = $slug;
    }



    public static function all(){
        
        $files = File::files(resource_path("posts/"));

        return array_map(function ($file){
            return $file->getContents();
        }, $files);

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