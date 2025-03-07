<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Utils;
use Illuminate\Support\Facades\Config;


use function GuzzleHttp\json_decode;

class ClientApi
{
    const GET    = 'get';
    const POST   = 'post';
    const PUT    = 'put';
    const DELETE = 'delete';
    const PATCH  = 'patch';

    public static $httpClient;
    public static $host;
    public static $authorization;


    public static function init()
    {
        self::$httpClient = new Client();
        self::$host       = getenv('URL_API');
    }

    /**
     * Requisições GET | Geralmente usado para se obter os dados de um recurso
     *
     * @param [url] $endpoint :http://host/users
     * @return void
     */
    public static function get($endpoint)
    {
        return self::createRequest(self::GET, $endpoint);
    }

    /**
     * Requisições POST | geralmente usado para criar um recurso
     *
     * @param [url] $endpoint : http://host/users
     * @param [request || array] $body : ['nome'=>'João da Silva', 'senha'=>'123456']
     * @return void
     */
    public static function post($endpoint, $body)
    {
        return self::createRequest(self::POST, $endpoint, $body);
    }

    /**
     * Requisições delete | Geralmente usado para excluir um recurso
     *
     * @param [url] $endpoint : http://host/users/{id}
     * @return void
     */
    public static function delete($endpoint)
    {
        return self::createRequest(self::DELETE, $endpoint);
    }

    /**
     * Requisições PUT | Geralmente usado na atualização de um recurso
     *
     * @param [url] $endpoint : http://host/users/1
     * @param [request || array] $body : ['nome'=>'João de Oliveira', 'idade'=>'25 anos'...]
     * @return void
     */
    public static function put($endpoint, $body)
    {
        return self::createRequest(self::PUT, $endpoint, $body);
    }

    /**
     * Requisições PATCH | Geralmente utilizado para atualizar parcialmente um recurso
     * Por exemplo, somente o nome do usuário.
     * @param [url] $endpoint : http://host/users/1
     * @param [request || array] $body ['nome'=>'João Batista de Oliveira']
     * @return void
     */
    public static function patch($endpoint, $body)
    {
        return self::createRequest(self::PATCH, $endpoint, $body);
    }

    /**
     * Método responsável por criar a Request através do ClienteGuzzle e entregar
     * e receber a resposta da API
     *
     * @param [HTTP] $method
     * @param [url] $endpoint
     * @param [request || array] $body
     * @return void
     */
    private static function createRequest($method, $endpoint, $body = [])
    {
        self::init();

        try {

            $response = self::$httpClient->request(
                $method,
                self::$host . $endpoint,
                [
                    'json' => $body,
                    'headers' => [
                        'Authorization' => ''
                    ]
                ]
            );

            return Utils::jsonDecode($response->getBody()->getContents());

        } catch (ClientException $e) {

            return Utils::jsonDecode($e->getResponse()->getStatusCode());
        }
    }
}
