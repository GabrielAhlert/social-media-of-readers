<link href="./assets/styles/auth.css" rel="stylesheet">
    <main class="form-signin">
        <form method="post" action="/auth/addUser.php">
            <h1 class="h3 mb-3 fw-normal">Insira os seus dados!</h1>

            <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nome">
            <label for="floatingInput">Nome Completo</label>
            </div>
            <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
            <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Criar Conta</button>
        </form>
        <br>
        <?php
        if(isset($_GET['error']) && $_GET['error'] == true)
            print("<div class=\"alert alert-danger\" role=\"alert\">Email já cadastrado!</div>");
        if(isset($_GET['empty']) && $_GET['empty'] == true)
            print("<div class=\"alert alert-danger\" role=\"alert\">Preencha TODOS os Valores!</div>");
        ?>
    </main>