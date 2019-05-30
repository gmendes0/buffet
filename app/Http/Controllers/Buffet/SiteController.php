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
        return view('buffet.detalhes', compact('prod'));
    }

    public function deletar($id, Produto $produto, Request $request)
    {
        $prod = $produto->find($id);
        $deletar = $prod->delete($prod);

        if($deletar){

            return redirect(route('inicio'));

        }else{

            return redirect(route('detalhes', $id));

        }
    }
}
