<?php

namespace App\Http\Controllers\Buffet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\Site\ProdutoFormRequest;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{

    /**
     * Lista todos os produtos
     */
    public function index(Produto $produto){

        $produtos = $produto->all();
        $n_imgs = 3;
        return view('buffet.index', compact('produtos', 'n_imgs'));

    }

    /**
     * Lista todos os produtos
     */
    public function tabela(Produto $produto){

        $produtos = $produto->all();
        return view('buffet.tabela', compact('produtos'));

    }

    /**
     * retorna a view do formulario de cadastro
     */
    public function form()
    {
        return view('buffet.form');
    }

    /**
     * Salva os dados de cadastro no banco
     */
    public function cadastrar(ProdutoFormRequest $request, Produto $produto)
    {
        $dados = $request->all();

        // if(!empty($produto->latest()->first())){
        //     $id = $produto->latest()->first()->id;
        // }else{
        //     $id = 0;
        // }

        // $request->file('imagem')->store("buffet/iten/".($id + 1)."/thumb", 'public');
        
        $create = $produto->create($dados);

        if($create){
            return redirect()->route('inicio');
        }else{
            return redirect()->route('novo');
        }
        
    }

    /**
     * retorna a pagina de detalhes dos produtos
     */
    public function detalhes($id, Produto $produto)
    {
        $prod = $produto->find($id);
        return view('buffet.detalhes', compact('prod'));
    }

    /**
     * retorna a pagina do formulário de edição
     */
    public function formUpdate($id, Produto $produto)
    {
        $prod = $produto->find($id);
        return view('buffet.form', compact('prod'));
    }

    /**
     * salva as atualizações no banco
     */
    public function salvar($id, Produto $produto, ProdutoFormRequest $request)
    {
        $prod = $produto->find($id);
        $dados = $request->all();
        $update = $prod->update($dados);

        if($update){

            return redirect()->route('inicio');

        }else{

            return redirect()->back();

        }

    }

    /**
     * deleta o produto do banco de dados
     */
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

    public function erroAcesso($nivel)
    {
        return view('buffet.acesso', compact('nivel'));
    }
}
