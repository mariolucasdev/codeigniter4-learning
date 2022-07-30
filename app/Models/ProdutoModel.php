<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';

    protected $allowedFields = ['descricao', 'preco', 'estoque'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getProdutos($id = false)
    {
        return $id ?
            $this->where(['id' => $id])->first() : $this->findAll();
    }
}
