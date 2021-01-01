@extends('app')
@section('main')
    @if ($response->data->venda)
        <div class="alert alert-success w-100" role="alert">
            O lançamento da venda para o vendedor(a) {{ $response->data->venda->vendedor->name }} foi realizada com sucesso.
            Valor: <b>{{ $response->data->venda->valor_venda }}</b>
        </div>
    @endif
@endsection
