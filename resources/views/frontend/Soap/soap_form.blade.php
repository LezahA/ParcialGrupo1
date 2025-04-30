<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora SOAP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap desde CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons desde CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Animate desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <!-- Formulario -->
        <div class="col-lg-5 col-md-6 col-sm-12 mb-4 animate__animated animate__fadeInLeft">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="bi bi-calculator-fill mr-2"></i>Calculadora SOAP</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/soap">
                        @csrf
                        <div class="mb-3">
                            <label for="num1" class="form-label">Número 1</label>
                            <input type="number" class="form-control" name="num1" required>
                        </div>

                        <div class="mb-3">
                            <label for="num2" class="form-label">Número 2</label>
                            <input type="number" class="form-control" name="num2" required>
                        </div>

                        <div class="mb-3">
                            <label for="operation" class="form-label">Operación</label>
                            <select class="form-select" name="operation" required>
                                <option value="" disabled selected>Selecciona una operación</option>
                                <option value="Add">Sumar</option>
                                <option value="Multiply">Multiplicar</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100" id="btnCalcular">
                            <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            <span id="btnText"><i class="bi bi-play-fill"></i> Calcular</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Resultado -->
        <div class="col-lg-5 col-md-6 col-sm-12 animate__animated animate__fadeInRight">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0"><i class="bi bi-clipboard-check mr-2"></i>Resultado</h5>
                </div>
                <div class="card-body">
                    @if(session('result'))
                        <p class="h5 text-success">
                            <i class="bi bi-check-circle-fill"></i> El resultado es: <strong>{{ session('result') }}</strong>
                        </p>
                    @else
                        <p class="text-muted"><i class="bi bi-hourglass-split"></i> Esperando cálculo...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



