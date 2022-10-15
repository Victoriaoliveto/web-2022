<!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title> - Super Star</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home"> Super Star</a>
              <img src="./imagenes/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top bg-light" id="logo">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="container-fluid">
               <a class="nav-link" aria-current="page" href="tabla">Productos</a>

 </div>


       
                 {if !isset($smarty.session.USER_ID)}
         
                    <div class="nav-item">

                      <a class="nav-link" aria-current="page" href="login">Login</a>
                    </div>
                  {else} 
                    <div class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">CERRAR SESION({$smarty.session.USER_EMAIL})</a>
                    </div>
                  {/if}



                  
                </ul>
              </div>
            </div>
          </nav>
    </header>
</body>

    <main class="container">
