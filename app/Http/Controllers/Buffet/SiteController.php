<?php

namespace App\Http\Controllers\Buffet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\Site\ProdutoFormRequest;

class SiteController extends Controller
{
    public function index(Produto $produto){

        $produtos = $produto->all();
        return view('buffet.index', compact('produtos'));

    }

    public function form()
    {
        return view('buffet.form');
    }

    public function cadastrar(ProdutoFormRequest $request, Produto $produto)
    {
        $dados = $request->all();
        $create = $produto->create($dados);

        if($create){
            return redirect()->route('inicio');
        }else{
            return redirect()->route('novo');
        }
        
    }

    public function detalhes($id, Produto $produto)
    {
        $prod = $produto->find($id);
        return view('buffet.detalhes', compact('prod'));
    }


    public function deletar($id, Produto $produto)
    {
        $prod = $produto->find($id);
        $deletar = $prod->delete($prod);

        if($deletar){

            return redirect()->route('inicio');

        }else{

            return redirect()->route('detalhes', $id);

        }
    }
}
