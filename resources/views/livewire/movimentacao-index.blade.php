<div>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Gestão de Estoque</h2>
            <div class="d-flex gap-2">
                <a class="btn btn-secondary" href="{{route('movimentacao.create')}}">Movimentações</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Movimentações de Produtos</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Produto</th>
                            <th>Tipo</th>
                            <th>Quantidade</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movimentacoes as $movimentacao)
                        <tr>
                             <td>{{\Carbon\Carbon::parse($movimentacao->data_movimentacao)
                            ->format('d/m/Y') }}</td>
                                                        
                            <td>{{$movimentacao->produto_id}} - {{ $movimentacao->produto->nome }}</td>
                            <td>
                                @if($movimentacao->tipo == 'entrada')

                                <span class="badge bg-primary">Entrada</span>

                                @else
                                <span class="badge bg-danger">Saída</span>

                                @endif

                            </td>
                            <td>{{$movimentacao->quantidade}}</td>
                            <td>{{$movimentacao->user_id }} - {{ $movimentacao->user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>