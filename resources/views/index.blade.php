@extends('app')
@section('main')

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('vendedores.create') }}" class="btn btn-primary btn-block">Cadastrar novo vendedor</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive rounded shadow-sm">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Comissão</th>
                    <th>Vendas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($response->data->vendedores->data as $vendedor)
                    <tr>
                        <td>{{ $vendedor->id }}</td>
                        <td class="text-capitalize">{{ $vendedor->name }}</td>
                        <td>{{ $vendedor->email }}</td>
                        <td>R${{ $vendedor->comissao }}</td>
                        <td>
                            <a href="{{ route('vendedores.show', ['vendedor' => $vendedor->id]) }}"
                                class="btn btn-success btn-block">Ver todas as vendas</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-primary w-100" role="alert">
                                Nenhum resultado encontrado
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        @component('pagination', [
                            'collection' => $response->data->vendedores,
                            'url_pagination' => '/',
                            ])
                        @endcomponent
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection
