<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;

        return view('welcome', $dados);
    }

    public function exercicio2() {

        $url = 'https://i.pravatar.cc/150?img=';

        $dados['url'] = $url;

        return view('exercise', $dados);
    }

    public function index2() {
        return view('include');
    }

    public function components() {
        return view('comp');
    }

    public function layout() {
        return view('layout');
    }

    public function layout2() {
        return view('layout2');
    }
}
