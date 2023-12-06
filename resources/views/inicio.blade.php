<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maquetacion</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://www.dafontfree.net/embed/cGFsYXRpbm8tcm9tYW4tcmVndWxhciZkYXRhLzI2L3AvMTM3NzEwL3BhbHRuLnR0Zg"
        rel="stylesheet" type="text/css" />
    <link href="https://www.dafontfree.net/embed/cGFsYXRpbm8tYm9sZCZkYXRhLzI2L3AvMTM3Njg3L1BBTEFUMzIudHRm"
        rel="stylesheet" type="text/css" />
    <link
        href="https://www.dafontfree.net/embed/YWNhZGVteS1lbmdyYXZlZC1sZXQtcGxhaW4mZGF0YS8xMy9hLzY0MzEzLzQ2MTUyX19fLlRURg"
        rel="stylesheet" type="text/css" />


</head>

<body>


    <div class="card" id="inicio-container">
        <nav class="navbar navbar-light " id="navbar">

            <a class="navbar-brand">
                <img src="/image/logo.JPG" width="150px" height="40px">
            </a>

            <ul class="nav justify-content-end">


                <li class="nav-item" id="nav1">
                    <a class="nav-link active" href="#" id="inicio-link"><span class="resaltado2">Inicio</span></a>
                </li>
                <li class="nav-item" id="nav1">
                    <a class="nav-link active" href="{{ route('salario_vista') }}" id="inicio-link"><span class="resaltado2">Salario</span></a>
                </li>


            </ul>
            <a class="navbar-brand" id="cabecera">
                <img src="/image/salario.png" class="logoempresa"></a>
            </a>


        </nav>

    </div>
    <div class="container">
        <div class="contenedor1">
            <div class="container">
                <div class="opciones">
                    <div class="container">
                        <div class="textocuadro">
                            <h3 class="textocuadrot">Registrate aqui para acceder</h3>

                            <div class="formulario">
                                <form method="POST" action="{{route('salario')}}">
                                    @csrf
                                    <!-- Agrega el campo CSRF para protección contra falsificación de solicitudes -->
                                    <h3 class="nombre1">Nombre</h3>
                                    <input type="text" name="name" id="name" class="nombre">
                                    <h3 class="nombre1">email</h3>
                                    <input type="text" name="email" id="email" class="correo">
                                    <h3 class="nombre1">password</h3>
                                    <input type="password" name="password" id="password" class="password">
                                    <div class="enviar">

                                        <button type="submit" id="enviar">Enviar</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pagina1">

                    <h1 id="titulo1">Saca tu salario total<br>en Brainsca</h1>
                    ¡Posiciona sitios web en los buscadores <br> mas usados del mundo!
                </div>

              
            </div>
            <div class="imagen">
                <img src="/image/imagen_grande.png">
            </div>

            

           
        </div>
    </div>
    
</body>
<script>
    const registerUrl = '{{ route('register') }}';
</script>
<script>
    const salario = '{{ route('salario_vista') }}';
</script>
<script src="{{ asset('js/register.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>