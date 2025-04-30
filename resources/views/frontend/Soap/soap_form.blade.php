<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora SOAP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center g-4">
        <!-- Formulario -->
        <div class="col-lg-5 col-md-6 animate__animated animate__fadeInLeft">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(to right, #3a6186, #89253e);">
                    <h5 class="mb-0 text-center"><i class="bi bi-calculator-fill me-2"></i>Calculadora SOAP</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="/soap">
                        @csrf
                        <div class="mb-3">
                            <label for="num1" class="form-label text-info">Primer numero:</label>
                            <input type="number" class="form-control form-control-lg" name="num1" required>
                        </div>
                        <div class="mb-3">
                            <label for="num2" class="form-label text-info">Segundo numero:</label>
                            <input type="number" class="form-control form-control-lg" name="num2" required>
                        </div>
                        <div class="mb-4">
                            <label for="operation" class="form-label text-info">Operación</label>
                            <select class="form-select form-select-lg" name="operation" required>
                                <option value="" disabled selected>Selecciona una operación</option>
                                <option value="Add">Sumar</option>
                                <option value="Multiply">Multiplicar</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg w-100 shadow-sm">
                            <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            <i class="bi bi-play-fill me-1"></i> Calcular
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Resultado -->
        <div class="col-lg-5 col-md-6 animate__animated animate__fadeInRight">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-dark text-white rounded-top-4">
                    <h5 class="mb-0 text-center"><i class="bi bi-clipboard-check me-2"></i>Resultado</h5>
                </div>
                <div class="card-body text-center">
                    @if(session('result'))
                        <p class="display-6 text-success fw-bold">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ session('result') }}
                        </p>
                    @else
                    <p class="text-light"><i class="bi bi-hourglass-split"></i> Esperando cálculo...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #1f1c2c, #928DAB);
        background-attachment: fixed;
        background-size: cover;
        color: white;
    }

    .card {
        background-color: rgba(0, 0, 0, 0.8) !important;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.01);
    }
</style>

</body>
</html>
