<?php

namespace App\Http\Controllers;

use App\Services\ClientApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as RequestFacade;

class Salesman extends Controller
{
    public const endpoint = 'salesmen';

    public function index()
    {
        $page = RequestFacade::get('page') ? RequestFacade::get('page') : 1;
        return view('index', [
            'response' => ClientApi::get(Salesman::endpoint . "?page={$page}")
        ]);
    }

    public function create()
    {
        return view('vendedor.create');
    }

    public function store(Request $request)
    {
        return view('vendedor.response', [
            'response' => ClientApi::post(Salesman::endpoint, $request->all())
        ]);
    }

    public function show($vendedor)
    {
        return view('vendedor.show', [
            'response' => ClientApi::get(Salesman::endpoint . "/{$vendedor}")
        ]);
    }
}
