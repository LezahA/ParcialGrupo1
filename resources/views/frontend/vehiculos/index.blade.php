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
<body class="bg-light">
    <div class="container py-5">
        <!-- Título -->
        <h1 class="text-center text-dark mb-4 animate__animated animate__fadeInDown">🚗 Catálogo de Vehículos 2025</h1>
        
        <!-- Tabla Responsive -->
        <div class="table-responsive animate__animated animate__fadeInUp animate__delay-1s">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Motor</th>
                        <th scope="col">Precio (USD)</th>
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

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

