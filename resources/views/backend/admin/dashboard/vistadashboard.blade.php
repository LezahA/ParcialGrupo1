@extends('backend.menus.superior')

@section('content-admin-css')
    <link href="{{ asset('css/adminlte.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/buttons_estilo.css') }}" rel="stylesheet">
     <!-- Fondo degradado -->
     <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom,rgb(141, 212, 248) 0%,#C9EBFF 50%, #C9EBFF  10%);
            min-height: 100vh;
        }
         /* encabezado */
         .card-header {
            background-color:rgb(88, 107, 138) !important; 
        }
    </style>

@stop
<div class="container my-4.1">
    <div class="card border-0 shadow-lg">
    <div class="card-header text-white text-center py-3">
            <h3 class="mb-0"><i class="fas fa-code"></i> Resolución del Examen Parcial 2</h3>
            <small>Materia: Desarrollo y Técnicas Web</small>
        </div>
        <div class="card-body p-4">
            <p class="lead text-muted mb-3">
                A continuación, se detallan los puntos resueltos conforme a los requerimientos técnicos propuestos en el examen.
            </p>
            <div class="mb-3">
                <h4 class="text-primary"><i class="fas fa-file-code"></i> 1. Lectura de XML y Conversión a JSON</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-folder"></i> Se agregó un archivo XML en la carpeta <code>storage/xml</code>. Si no existía, se creó manualmente.</li>
                    <li class="list-group-item"><i class="fas fa-random"></i> Se desarrolló una ruta en Laravel que lee y convierte el XML a JSON usando.</li>
                    <li class="list-group-item"><i class="fas fa-table"></i> El resultado se muestra en la vista, con una tabla en Bootstrap.</li>
                </ul>
            </div>

            <div>
                <h4 class="text-success"><i class="fas fa-cogs"></i> 2. Implementación de Servicio SOAP</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-globe"></i> Se utilizó un servicio SOAP gratuito para operaciones: 
                        <a href="https://www.dneonline.com/calculator.asmx?WSDL" target="_blank">http://www.dneonline.com/calculator.asmx?WSDL</a>
                    </li>
                    <li class="list-group-item"><i class="fas fa-pencil-alt"></i> Se creó un formulario donde el usuario puede ingresar dos números y elegir entre sumar o multiplicar.</li>
                    <li class="list-group-item"><i class="fas fa-check-circle"></i> La petición es procesada mediante <code>SoapClient</code> en un controlador y el resultado se muestra en una vista clara.</li>
                </ul>
            </div>

            <div class="mt-3">
                <h4 class="text-info"><i class="fas fa-users"></i> Integrantes del Equipo</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Hazel Azucena Calderón Bonilla</strong> - CB22014</li>
                    <li class="list-group-item"><strong>Douglas Isaac Barrera Magaña</strong> - BM22025</li>
                    <li class="list-group-item"><strong>Ricardo Enrique Heredia Ramos</strong> - HR21024</li>
                    <li class="list-group-item"><strong>Gabriel Omar Calderón Calderón</strong> - CC22060</li>
                    <li class="list-group-item"><strong>Fernando José Rosales Valdes</strong> - RV19012</li>
                </ul>
            </div>
        </div>
    @section('archivos-js')
    @stop
