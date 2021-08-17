<?php

namespace SmartCollectionScore\Client;

use \SmartCollectionScore\Client\Configuration;
use \SmartCollectionScore\Client\ObjectSerializer;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack as handlerStack;

use Signer\Manager\ApiException;
use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;



use \SmartCollectionScore\Client\Api\SMARTCOLLECTIONSCOREApi as Instance;

use \SmartCollectionScore\Client\Model\Peticion;

use \SmartCollectionScore\Client\Model\CatalogoTipoContrato;
use \SmartCollectionScore\Client\Model\CatalogoTipoCuenta;
use \SmartCollectionScore\Client\Model\CatalogoTipoFrecuencia;
use \SmartCollectionScore\Client\Model\CatalogoVentanaTiempo;
use \SmartCollectionScore\Client\Model\CatalogoFronteraDeImpago;

use \SmartCollectionScore\Client\Model\CatalogoPeriodosVencidos;


class SMARTCOLLECTIONSCOREApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new KeyHandler(null, null, $password);
        

        $events = new MiddlewareEvents($this->signer);
        $handler = handlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new Client(['handler' => $handler]);

        $config = new Configuration();
        $config->setHost('the_url');
        $this->apiInstance = new Instance($client, $config);
        $this->x_api_key = "your_api_key";
        $this->usernameCDC = "your_username";
        $this->passwordCDC = "your_password";  
        
    }

    public function testGetReporte()
    {
        try {

            $body = new Peticion();
            $catalogoTipoContrato = new CatalogoTipoContrato();
            $catalogoTipoCuenta = new CatalogoTipoCuenta();
            $catalogoTipoFrecuencia = new CatalogoTipoFrecuencia();
            $catalogoVentanaTiempo = new CatalogoVentanaTiempo();
            $catalogoFronteraDeImpago = new CatalogoFronteraDeImpago();
            $catalogoPeriodosVencidos = new CatalogoPeriodosVencidos();

            $body->setfolioOtorgante("folioOtorgante");
            $body->setnumeroCuenta("numeroCuenta");
            $body->settipoContrato($catalogoTipoContrato::TC);
            $body->settipoCuenta($catalogoTipoCuenta::R);
            $body->settipoFrecuencia($catalogoTipoFrecuencia::M);
            $body->setventanaDeTiempo($catalogoVentanaTiempo::_1_M);
            $body->setfronteraDeImpago($catalogoFronteraDeImpago::_30);
            $body->setperiodosVencidos($catalogoPeriodosVencidos::_1);
            $body->setsaldoVencido("saldoVencido");
            $body->setsaldoActual("saldoActual");

            $result = $this->apiInstance->getReporte($this->x_api_key, $this->usernameCDC, $this->passwordCDC, $body);
            print_r($result);
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling ApiTest->testGetReporte: ', $e->getMessage(), PHP_EOL;
        }        
    }
}
