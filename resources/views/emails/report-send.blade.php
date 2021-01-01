@component('mail::message')
# Relatório de vendas do dia {{ $currentDay }}

TOTAL DE VENDAS: R${{ $relatorio->data->total_vendas }}

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
