<?php

namespace App\Http\Controllers;

use App\Mail\ReportSend;
use App\Services\ClientApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Sale extends Controller
{
    public const endpoint = 'sales';

    /**
     * Carrega uma combobox com todos os vendedores para seleção
     *
     * @return void
     */
    public function create()
    {
        return view('vendas.create', [
            'response' => ClientApi::get(Salesman::endpoint)
        ]);
    }

    public function store(Request $request)
    {
        return view('vendas.response', [
            'response' => ClientApi::post(Sale::endpoint, $request->all())
        ]);
    }

    public function report()
    {
        return view('vendas.report', [
            'response' => ClientApi::get(Sale::endpoint)
        ]);
    }
    public function reportSend(Request $request)
    {
        Mail::send(new ReportSend($request->email));
        return view('vendas.report-send');
    }
}
