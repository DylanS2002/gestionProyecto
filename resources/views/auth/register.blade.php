<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    </head>

    <body>
        <div class="loginBox"> <img class="user" src="{{asset('img/logo2.png')}}" height="100px" width="100px">
        <h3>Registro</h3>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="inputBox"> 
                <input id="uname" type="email" name="email" placeholder="Correo"> 
                <input id="uname" type="text" name="name" placeholder="Usuario"> 
                <input id="pass" type="password" name="password" placeholder="Contraseña">
                <input id="pass" type="password" name="password_confirmation" placeholder="Confirmar contraseña">  
            </div> 
            <button type="submit" class="mt-3" name="">Registrarse</button>
        </form> 
        <div class="text-center">
            <a href="{{route('login')}}">Iniciar Seción</a>
        </div>
        
    </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>