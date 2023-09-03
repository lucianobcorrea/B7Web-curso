<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {

        $newPost = [
            'title' => 'Meu Primeiro Post',
            'content' => 'Conteudo Qualquer',
            'author' => 'Luciano'
        ];

        $post = new Post($newPost);
        $post->save();

        dd($post);
    }

    public function read(Request $request)
    {

        $post = Post::find(1);

        return $post;
    }

    public function all(Request $request)
    {

        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request)
    {

        //Atualizar mais de um post que satisfazem uma condicao
        $posts = Post::where('id', '>', 0)->update([
            'author' => 'Desconhecido'
        ]);

        //Atualizar somente um post especifico
        // $post = Post::find(1);
        // $post->title = 'Meu post atualizado';
        // $post->save();

        return $posts;
    }

    public function delete(Request $request)
    {

        //Deletar todos os registros do banco de dados
        //$post = Post::where('id', '>', 0)->delete();

        $post = Post::find(1);

        if ($post) {
            $post->delete();
        }
    }

}
