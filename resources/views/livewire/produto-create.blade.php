<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='store'>
         <div class="col-12">
            <label for="produto_id" class="form-label">Produto_id</label>
            <input type="text" class="form-control" id="nome" wire:model='produto_id'>
        </div>
        <div class="col-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" wire:model='nome'>
        </div>
        <div class="col-12">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" wire:model='descricao'>
        </div>
        <div class="col-md-12">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" wire:model='marca'>
        </div>
        <div class="col-md-12">
            <label for="categoria_id" class="form-label">Categoria_id</label>
            <input type="text" class="form-control" id="categoria_id" wire:model='categoria_id'>
        </div>
        <div class="col-md-12">
            <label for="preco_custo" class="form-label">Custo</label>
            <input type="text" class="form-control" id="preco_custo" wire:model='preco_custo'>
        </div>
        <div class="col-md-12">
            <label for="preco_venda" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco_venda" wire:model='preco_venda'>
        </div>
        <div class="col-md-12">
            <label for="quantidade" class="form-label">Qtd. Minima</label>
            <input type="text" class="form-control" id="quantidade" wire:model='quantidade'>
        </div>
        <div class="col-md-12">
            <label for="estoque_minimo" class="form-label">Estoque</label>
            <input type="text" class="form-control" id="estoque_minimo" wire:model='estoque_minimo'>
        </div>
        <div class="col-md-12">
            <label for="validade" class="form-label">Validade</label>
            <input type="text" class="form-control" id="validade" wire:model='validade'>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>