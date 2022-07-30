<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function index()
    {
        $model = Model(ProdutoModel::class);
        $data["titulo"] = "Listagem de Produtos";
        $data["produtos"] = $model->getProdutos();
        return view('produto/listagem', $data);
    }

    public function cadastrar()
    {
        $data["titulo"] = "Cadastro de Produtos";
        return view('produto/cadastrar', $data);
    }

    public function editar($id)
    {
        $model = Model(ProdutoModel::class);
        $produto = $model->find($id);
        $data["titulo"] = "Cadastro de Produtos";
        $data["produto"] = $produto;
        return view('produto/editar', $data);
    }

    public function excluir($id)
    {
        $model = Model(ProdutoModel::class);
        $model->delete($id);
        return redirect()->route('produto');
    }

    public function salvar($id = false)
    {
        $model = Model(ProdutoModel::class);
        $request = $this->request;
        $produto = $request->getPost();

        $id ? $model->update($id, $produto) : $model->save($produto);
        return redirect()->route('produto');
    }
}
