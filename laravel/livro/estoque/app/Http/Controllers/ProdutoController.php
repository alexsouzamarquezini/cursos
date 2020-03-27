<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){

        $html = '<h1>Listagem de produtos com laravel</h1>';
        $html .= '<ul>';
        $produtos = DB::select('select * from produtos');
        foreach($produtos as $p){
            $html .= '<li>';
            $html .= "Nome:  $p->nome";
            $html .= "Descrição:  $p->descricao";
            $html .= '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
