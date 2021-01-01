@extends('app')

@section('main')
    @if (!empty($response->data->vendedores))
        <form action="" method="POST">
            @csrf
            <div class="card shadow-sm">
                <div class="card-header">Lançar nova venda:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="my-select">Selecione o vendedor</label>
                                    <select id="my-select" class="custom-select" name="salesmen_id">
                                        @forelse ($response->data->vendedores as $vendedor)
                                            <option value="{{ $vendedor->id }}">{{ $vendedor->name }}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="my-input">Valor da venda</label>
                                <input id="my-input" class="form-control" type="text" name="value" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <input class="btn btn-primary btn-block" type="submit" value="Cadastrar" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <div class="alert alert-warning w-100" role="alert">
            Não há nenhum vendedor cadastrado. Para lançar uma nova venda primeiro cadastre um vendedor.
        </div>
    @endif
@endsection
