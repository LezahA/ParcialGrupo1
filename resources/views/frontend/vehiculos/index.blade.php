<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Vehículos</title>
    
    <!-- Bootstrap CSS (asumiendo instalación via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-dark bg-gradient text-white py-5">
        <div class="container">
            <!-- Encabezado -->
            <div class="text-center mb-4">
                <h1 class="fw-bold display-5 animate__animated animate__fadeInDown"> 🚗 Catálogo de Vehículos 2025</h1>
                <p class="lead text-secondary animate__animated animate__fadeInUp">Consulta todos los vehículos disponibles</p>
            </div>

            <!-- Tabla -->
            <div class="card bg-black bg-opacity-75 shadow-lg rounded-4">
                <div class="card-body">
                    <div class="table-responsive animate__animated animate__zoomIn ">
                        <table class="table table-hover table-striped table-dark align-middle mb-0 rounded-3">
                            <thead class="table-light">
                                <tr>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Tipo</th>
                                    <th>Motor</th>
                                    <th>Precio (USD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehiculos['Vehiculo'] as $vehiculo)
                                    <tr>
                                        <td>{{ $vehiculo['Marca'] }}</td>
                                        <td>{{ $vehiculo['Modelo'] }}</td>
                                        <td>{{ $vehiculo['Tipo'] }}</td>
                                        <td>{{ $vehiculo['Motor'] }}</td>
                                        <td>${{ number_format($vehiculo['Precio'], 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

