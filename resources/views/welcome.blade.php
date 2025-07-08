<!doctype html>
<html lang="en">
    <head>
        <title>ELITEfox-principal</title>
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
        <link rel="stylesheet" href="{{asset('assets/welcome.css')}}">
    </head>

        <body >
        <header class="" style="text-align: center;">
                <img src="img/logo2.png" style=" height:100px" alt="Mi imagen">
        <nav class="auth-links">
            @if (Route::has('login'))
                <nav>
                    @auth
                        {{-- Aquí puedes poner Dashboard o Logout --}}
                    @else
                        <a
                            type="button"
                            href="{{ route('login') }}"
                            
                        >
                            iniciar sesión
                        </a>

                        @if (Route::has('register'))
                            <a
                                type="button"
                                href="{{ route('register') }}"
                                
                            >
                                registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </nav>
        
    
</header>
<main>
    <section class="py-5 text-center container" id="cards"> 
        <img class="img" src="img/ropa img/fachada.png">
        </section> 
        <div class="album py-5 bg-body-tertiary"> 
                    <div class="container"> <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 
                        <div class="col"> 
                            <div class="card shadow-sm"> 
                                <img class="img" src="img/ropa img/deportiva.jpg">
                                <div class="card-body"> 
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    </p> 
                                    <div class="d-flex justify-content-between align-items-center"> 
                                        <div class="btn-group"> 
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                        </div> <small class="text-body-secondary">9 mins</small> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="col"> 
                            <div class="card shadow-sm"> 
                                <img class="img" src="img/ropa img/elegante.webp" style="height: 280px; width:auto">
                                    <div class="card-body"> 
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                        </p> 
                                        <div class="d-flex justify-content-between align-items-center"> 
                                            <div class="btn-group"> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                            </div> 
                                            <small class="text-body-secondary">9 mins</small> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="col"> 
                                <div class="card shadow-sm"> 
                                    <img class="img" src="img/ropa img/casual.webp">
                                    <div class="card-body"> 
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                        </p> 
                                        <div class="d-flex justify-content-between align-items-center"> 
                                            <div class="btn-group"> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                            </div> 
                                            <small class="text-body-secondary">9 mins</small> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="col"> 
                                <div class="card shadow-sm"> 
                                    <img class="img" src="img/ropa img/pijamas.jpg" style="height: 280px"> 
                                    <div class="card-body"> 
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                        </p> 
                                        <div class="d-flex justify-content-between align-items-center"> 
                                            <div class="btn-group"> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                            </div> 
                                            <small class="text-body-secondary">9 mins</small> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="col"> 
                                <div class="card shadow-sm"> 
                                    <img class="img" src="img/ropa img/verano.avif" style="height: 280px"> 
                                    <div class="card-body"> 
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                        </p> 
                                        <div class="d-flex justify-content-between align-items-center"> 
                                            <div class="btn-group"> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                            </div> 
                                            <small class="text-body-secondary">9 mins</small> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="col"> 
                                <div class="card shadow-sm"> 
                                    <img class="img" src="img/ropa img/bañador.avif"style="height: 280px"> 
                                    <div class="card-body"> 
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                        </p> 
                                        <div class="d-flex justify-content-between align-items-center"> 
                                            <div class="btn-group"> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                            </div> 
                                            <small class="text-body-secondary">9 mins</small> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="col"> 
                                <div class="card shadow-sm"> 
                                    <img class="img" src="img/ropa img/interior.jpg"style="height: 280px"> 
                                    <div class="card-body"> <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    </p> 
                                    <div class="d-flex justify-content-between align-items-center"> 
                                        <div class="btn-group"> 
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                        </div> 
                                        <small class="text-body-secondary">9 mins</small> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="col"> <div class="card shadow-sm"> 
                            <img class="img" src="img/ropa img/accesorios.jpg">
                            <div class="card-body"> 
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p> 
                                <div class="d-flex justify-content-between align-items-center"> 
                                    <div class="btn-group"> 
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                    </div> 
                                    <small class="text-body-secondary">9 mins</small> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="col"> <div class="card shadow-sm"> 
                        <img class="img" src="img/ropa img/Zapatos.webp" style="height: 280px">
                        <div class="card-body"> 
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </p> 
                            <div class="d-flex justify-content-between align-items-center"> 
                                <div class="btn-group"> 
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> 
                                </div> <small class="text-body-secondary">9 mins</small> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
    
    <section id="contact-us" style="padding: 4rem 2rem; background-color: #f8f8f8; font-family: sans-serif;">
    <div style="max-width: 800px; margin: 0 auto;">
    <h2 style="text-align: center; font-size: 2rem; color: #c1a253;">Contáctanos</h2>
    <p style="text-align: center; color: #c1a253; margin-bottom: 2rem;">
      ¿Tienes preguntas o necesitas asesoría personalizada? Estamos aquí para ayudarte.
    </p>

    <div class="container" style="background-color: rgba(0, 0, 0, 0.49)">
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
            <div style="flex: 1 1 300px;">
                <h3 style="margin-bottom: 0.5rem; color: #c1a253;">📍 Dirección</h3>
                <p style="color: #c1a253;">Calle 45 #12A-78<br>Medellín, Antioquia, Colombia</p>

                <h3 style="margin-top: 1.5rem; margin-bottom: 0.5rem; color: #c1a253;">📞 Teléfono / WhatsApp</h3>
                <p style="color: #c1a253;">+57 310 456 7890</p>

                <h3 style="margin-top: 1.5rem; margin-bottom: 0.5rem; color: #c1a253;">📧 Correo</h3>
                <p><a href="mailto:contacto@elitefox.co" style="color: #c1a253;">contacto@elitefox.co</a></p>

                <h3 style="margin-top: 1.5rem; margin-bottom: 0.5rem; color: #c1a253;">🕒 Horario</h3>
                <p style="color: #c1a253;">Lunes a Sábado: 10:00 a.m. – 7:00 p.m.<br>Domingos y festivos: Cerrado</p>
            </div>
        </div>

        <div class="mt-3 loginBox"  style="flex: 1 1 300px;">
            <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
                <input type="text" name="nombre" placeholder="Tu nombre" required style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
                <input type="email" name="correo" placeholder="Tu correo" required style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
                <textarea  name="mensaje" rows="5" placeholder="Tu mensaje" required style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    </div>
</section>
</main>
<footer style="background-color: #111; color: #fff; text-align: center; padding: 1.5rem 1rem; font-family: sans-serif;">
  <p style="margin: 0;">&copy; 2025 ELITEFOX. Todos los derechos reservados.</p>
  <p style="margin: 0.5rem 0 0; font-size: 0.9rem;">
    Diseño web por <a href="#" style="color: #c1a253; text-decoration: none;">Dylan Savedra (kitsuneDEV)</a>
  </p>
</footer>

        
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

