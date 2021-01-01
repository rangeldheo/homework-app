@extends('app')

@section('main')
   @if (!empty($response->data))
        <div class="table-responsive rounded shadow-sm mb-4">
        <table class="table">
            <thead>
                <tr class="thead-dark">
                    <th colspan="2">Vendedor: {{ $response->data->vendedor->name }}</th>
                    <th colspan="2">E-mail: {{ $response->data->vendedor->email }}</th>
                </tr>
                <tr class="thead-light">
                    <th>Valor da venda</th>
                    <th>Comissão</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($response->data->vendedor->vendas as $venda)
                    <tr>
                        <td>{{ $venda->valor_venda }}</td>
                        <td>R${{ $venda->comissao }}</td>
                        <td>{{ $venda->on_date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <div class="alert alert-primary w-100" role="alert">
                                Nenhum resultado encontrado
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @else
        <div class="alert alert-danger w-100" role="alert">
            Não foi possível encontrar o vendedor solicitado
        </div>
   @endif
@endsection
