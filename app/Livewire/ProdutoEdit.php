<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
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

    public function mount($id)
    {
        $produto = Produto::find($id);

        if ($produto == null) {
            session()->flash('error', 'não encontrado');
            return redirect()->route('produto.index');
        }
        $this->produto_id = $produto->produto_id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->marca = $produto->marca;
        $this->categoria_id = $produto->categoria_id;
        $this->preco_custos = $produto->preco_custos;
        $this->preco_venda = $produto->preco_venda;
        $this->quantidade = $produto->quantidade;
        $this->estoque_minimo = $produto->estoque_minimo;
        $this->validade = $produto->validade;
        
    }

    public function update()
    {
        $produto = Produto::find($this->produto_id);

        if($produto == null) {
            session()->flash('error', 'Não encontrado');
            return redirect()->route('produto.index');
        }
        
        $produto->nome = $this->nome;
        $produto->descricao =$this->descricao;
        $produto->marca = $this->marca;
        $produto->categoria_id = $this->categoria_id;
        $produto->preco_custos = $this->preco_custos;
        $produto->preco_venda = $this->preco_venda;
        $produto->quantidade = $this->quantidade;
        $produto->estoque_minimo = $this->estoque_minimo;
        $produto->validade = $this->validade;

        $produto->save();

        session()->flash('success', 'Atualizado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto-edit');
    }
}
