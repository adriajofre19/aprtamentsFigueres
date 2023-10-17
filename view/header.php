<!DOCTYPE html>
<html>
<head>
    <title>header</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="navbar-brand" href="#">
                                <img src="imatges/logo.png" alt="Bootstrap" width="30" height="24">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fer una reserva</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consultar reserves</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/dades.php">Les meves dades</a>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-auto-close="outside">
                        Iniciar sessió
                    </button>
                    <form class="dropdown-menu p-4">
                        <div class="mb-3">
                            <label for="exampleDropdownFormEmail2" class="form-label">Usuari</label>
                            <input type="user" class="form-control" id="exampleDropdownFormEmail2" placeholder="Usuari">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDropdownFormPassword2" class="form-label">Contrasenya</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contrasenya">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Iniciar sessió</button>
                    </form>
                    <button type="button" class="btn btn-primary">Registrar-se</button>
                </div>

            </div>
        </nav>
</body>
</html>


