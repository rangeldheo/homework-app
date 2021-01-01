<div class="content p-2 mb-2 bg-secondary shadow-sm">
    <h1 class="text-center text-white bolder">HOMEWORK APP</h1>
</div>
<div class="content p-2 mb-2 bg-light shadow-sm">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('vendedores') }}">Listar todos os vendedores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('vendedores.create') }}">Cadastrar novo vendedor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('vendas.create') }}">Lançar nova venda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('vendas.report') }}">Relatório de vendas</a>
        </li>
    </ul>
</div>
