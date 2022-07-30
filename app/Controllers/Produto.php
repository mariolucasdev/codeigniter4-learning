<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produto extends BaseController
{
    /**
     * @var object $model
     */
    private object $model;

    public function __construct()
    {
        $this->model = Model(ProdutoModel::class);
    }

    public function index()
    {
        $data = array(
            "titulo" => "Listagem de Produtos",
            "produtos" => $this->model->getProdutos()
        );

        return view('produto/listagem', $data);
    }

    public function cadastrar()
    {
        $data["titulo"] = "Cadastro de Produtos";
        return view('produto/cadastrar', $data);
    }

    public function editar($id)
    {
        $data = array(
            "titulo" => "Editar de Produtos",
            "produto" => $this->model->find($id)
        );

        return view('produto/editar', $data);
    }

    public function excluir($id)
    {
        $this->model->delete($id);
        return redirect()->route('produto');
    }

    public function salvar($id = false)
    {
        $request = $this->request;
        $produto = $request->getPost();

        $id ? $this->model->update($id, $produto) : $this->model->save($produto);
        return redirect()->route('produto');
    }
}
