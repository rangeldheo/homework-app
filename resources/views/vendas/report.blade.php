@extends('app')

@section('main')
    <div class="card">
        <div class="card-header">Relatório de vendas do dia {{ date('d/m/Y') }}</div>
        <div class="card-body">
            <div class="alert alert-info w-100" role="alert">
                Total de vendas: R${{ $response->data->total_vendas }}
            </div>
        </div>
        <div class="card-footer">
            <form action="{{ route('vendas.reportSend') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" required placeholder="Informe o e-mail">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <input type="submit" class="btn btn-success btn-block" value="Enviar relatório por email" />
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
