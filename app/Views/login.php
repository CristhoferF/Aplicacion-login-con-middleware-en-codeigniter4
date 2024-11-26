<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- Custom CSS for additional styling -->
    <style>
        body {
            background-color: #f0f4f8;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1s ease-out;
            background-color: #ffffff;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            font-family: 'Roboto', sans-serif; /* Aplica la fuente */
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .register-link {
            display: inline-block;
        }
        .background-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }
        .background-shapes div {
            position: absolute;
            background-color: rgba(0, 123, 255, 0.2);
            border-radius: 50%;
        }
        .circle {
            width: 150px;
            height: 150px;
            top: 10%;
            left: 20%;
        }
        .square {
            width: 100px;
            height: 100px;
            top: 70%;
            left: 50%;
            transform: rotate(45deg);
        }
        .triangle {
            width: 0;
            height: 0;
            border-left: 60px solid transparent;
            border-right: 60px solid transparent;
            border-bottom: 100px solid rgba(0, 123, 255, 0.2);
            top: 30%;
            left: 70%;
        }
    </style>

    <title>Login</title>
</head>
<body>
    <div class="background-shapes">
        <div class="circle"></div>
        <div class="square"></div>
        <div class="triangle"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="text-center mb-4 card-title">Login con CodeIgniter 4</h3>
                        <form action="<?php echo base_url('/login') ?>" method="POST">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="usuario" class="form-control" placeholder="Ingresa tu usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </form>
                        <div class="text-center mt-3">
                            <span>¿No tienes una cuenta?</span>
                            <a href="/register" class="text-primary register-link">Regístrate aquí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
