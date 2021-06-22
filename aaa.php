
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
                    </ul>
                    <div class="d-flex">
                        <a href="?pag=signin" class="btn btn-outline-light btn-lg fas fa-user" >
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
        