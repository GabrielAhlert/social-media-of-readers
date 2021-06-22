<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <link rel="stylesheet" href="/assets/styles/index.css">

        <title>Hello, world!</title>
    </head>
    <body style="padding-top: 55px;">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fas fa-home" href="/"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="container">
                        <div class="searchbox">
                            <input class="form-control me-2 " id="search-input" type="search" placeholder="Search" aria-label="Search">
                            <div>
                            </div>
                        </div>
                    </div>
                        <a href="?pag=signin" class="btn btn-outline-light btn-md btn-logged" >
                            <?php
                                if(isset($_SESSION['logged'])&& $_SESSION['logged'] == true){
                                    print(
                                        $_SESSION['name']
                                    );
                                }else{
                                    print(
                                        "Entrar"
                                    );
                                }
                                ?>
                        </a>
                </div>
                </div>
            </div>
        </nav>  
        <script>
            const users = <?php
                    include './src/db.php';
                    $stmt = $db->prepare('SELECT name,id FROM users');
                    $stmt->execute();
                    $resp = $stmt->get_result();
                    echo json_encode($resp -> fetch_all());
                ?>;
            const searchInput = document.getElementById('search-input')
            searchInput.addEventListener('keyup',function(){
                if(searchInput.value != ''){
                    const input = searchInput.value
                    const sugestions = users.filter(function(users){
                        return users[0]
                    })
                    console.log (sugestions)
                }
            })
        </script>