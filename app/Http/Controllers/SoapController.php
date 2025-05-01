<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;
class SoapController extends Controller
     
{   // Método para mostrar el formulario al usuario
    public function showForm()
    {
        return view('frontend.Soap.soap_form'); 
    }

    // Método para procesar los datos enviados desde el formulario
    public function processForm(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation'); 

    try {
        $client = new \SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
        $params = ["intA" => (int)$num1, "intB" => (int)$num2];

        if (!in_array($operation, ['Add', 'Multiply'])) {
            throw new \Exception("Operación no válida");
        }

        $response = $client->$operation($params);
        $resultKey = $operation . "Result";
        $result = $response->$resultKey;
    } catch (\Exception $e) {
        $result = "Error: " . $e->getMessage();
    }
    return redirect('/soap')->with('result', $result);
    }

}


   







