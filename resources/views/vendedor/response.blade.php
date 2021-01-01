@extends('app')
@section('main')
    @if ($response->data->vendedor)
        <div class="alert alert-success w-100" role="alert">
            O vendedor {{ $response->data->vendedor->name }} foi criado com sucesso
        </div>
    @endif
@endsection
