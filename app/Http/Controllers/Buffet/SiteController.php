<?php

namespace App\Http\Controllers\Buffet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;

class SiteController extends Controller
{
    public function index(Produto $produto){

        $produtos = $produto->all();
        return view('buffet.index', compact('produtos'));

    }

    public function detalhes($id, Produto $produto)
    {
        $prod = $produto->find($id);
        return $prod->nome;
    }
}
