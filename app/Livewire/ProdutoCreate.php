<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{   
    public $produto_id;
    public $nome;
    public $descricao;
    public $marca;
    public $categoria_id;
    public $preco_custos;
    public $preco_venda;
    public $quantidade;
    public $estoque_minimo;
    public $validade;

    public function store(){
        Produto::create([
            'produto_id' =>$this->produto_id,
            'nome' =>$this->nome,
            'descricao' =>$this->descricao,
            'marca' =>$this->marca,
            'categoria_id' =>$this->categoria_id,
            'preco_custos' =>$this->preco_custos,
            'preco_vendas' =>$this->preco_vendas,
            'quantidade' =>$this->quantidade,
            'estoque_minimo' =>$this->estoque_minimo,
            'validade' =>$this->validade,
        ]);

        session()->flash('success', 'Produto cadastrado');
        return redirect()->route('produto.index');
    
    }
    
    public function render()
    {
        return view('livewire.produto-create');
    }
}
