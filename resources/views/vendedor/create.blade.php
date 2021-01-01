@extends('app')

@section('main')
    <form action="" method="POST">
        @csrf
        <div class="card shadow-sm">
            <div class="card-header">Cadastrar novo vendedor:</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="my-input">Nome</label>
                            <input id="my-input" class="form-control" type="text" name="name" required maxlength="80" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="my-input">E-mail</label>
                            <input id="my-input" class="form-control" type="email" name="email" required maxlength="80" />
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
@endsection
