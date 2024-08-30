<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicologia na Escola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container" id="cpfForm">
            <form action="signup.php" method="POST">
                <h1>Cadastro psicologo</h1>
                <span></span>
                <input type="name" name="name" placeholder="Nome completo" required />
                <input type="text" id="cpf" name="cpf">
                <input type="password" name="password" placeholder="Senha" required />
                <input type="submit" value="Enviar">
                <a href="#">Esqueceu sua senha?</a>
                <a href="#">Cadastre-se</a>
                <button onclick= "mostraralerta()" type="submit" value= "Enviar">Entrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Cadastro aluno</h1>
                
                <span></span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Senha" required />

                <a href="#">Esqueceu sua senha?</a>
                <a href="cadastro.php">Cadastre-se</a>

                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>É um aluno?</h1>
                    <br>
                    <p> Cadastre-se aqui!</p>
                    <br>
                    <button class="ghost" id="signIn">Acessar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>&nbsp; É psicologo?</h1>
                    <br>
                    <p>&nbsp; Cadastre-se aqui!
                    </p>
                    <br>
                    <button class="ghost" id="signUp">Acessar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>
