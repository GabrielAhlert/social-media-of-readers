<?php
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
        unset($_SESSION['logged']);
        unset($_SESSION['nick']);
        header("Refresh:0");
    }
?>
<link href="/assets/styles/auth.css" rel="stylesheet">

    <main class="form-signin">
        <form id="signin" method="post" action="/auth/verifySignin.php">
            <h1 class="h3 mb-3 fw-normal">Insira os seus dados!</h1>

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
            <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
            <a href="/?pag=signup">Não possui conta?</a>
        </form>
        <br>
        <?php
        if(isset($_GET['error']) && $_GET['error'] == true)
            print("<div class=\"alert alert-danger\" role=\"alert\">Usuario e/ou Senha não conferem!</div>");
        if(isset($_GET['success']) && $_GET['success'] == true)
            print("<div class=\"alert alert-success\" role=\"alert\">Cadastrado com Sucesso!</div>");
        ?>
    </main>
