<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi primera app</title>
    <link rel="stylesheet" type="text/css" href="../css/pedidos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="cabeceraPrincipal">
        <h1>Vilonaco Food</h1>
    </header>
    <nav class="menuPrincipal">
        <a href="../">Inicio</a>
        <a href="">Empresa</a>
        <a href="contactos.php">Registro</a>
        <a href="listados.php">Listado</a>
        <a href="login.php">Login</a>
        <a href="pedidos.php">Pedidos</a>
    </nav>

    <main>
        <div class="boxCentrado">
            <h2 class="h2Home">Hacer un pedido</h2>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre del comensal</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Jhon Doe">
                </div>

                <!-- Entrada -->
                <div class="form-group">
                    <label for="nombre">Entrada 3,00$</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Coctel de camaron
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Rollos de pollo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                           Enrollado de papa con atun
                        </label>
                    </div>
                </div>

                 <!-- Plato fuerte -->
                 <div class="form-group">
                    <label for="nombre">Plato fuerte 4,00$</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Coctel de camaron
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Rollos de pollo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                           Enrollado de papa con atun
                        </label>
                    </div>
                </div>
         

                 <!-- Postre -->
                 <div class="form-group">
                    <label for="nombre">Postre 1,50$</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Coctel de camaron
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Rollos de pollo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                            value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                           Enrollado de papa con atun
                        </label>
                    </div>
                </div>
         
         
                <button type="submit" class="btn btn-primary">Hacer pedido</button>
            </form>
        </div>
    </main>
    <footer class="piePagina">
        <h6>Derechos Reservados 2022</h6>
    </footer>
</body>

</html>