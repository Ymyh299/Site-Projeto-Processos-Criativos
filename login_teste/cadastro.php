<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicologia na Escola</title>
    <link rel="stylesheet" href="stylecad.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container" id="cpfForm">
            <form action="signup.php" method="POST">
                <h1>Cadastro psicologo</h1>
                <span></span>
                <input type="Email" name="email" placeholder="Insira um e-mail válido" required />
                <input type="name" name="name" placeholder="Nome completo" required />
                <input type="text" name="telefone" placeholder="Telefone" required />
                <input type="text" id="RegraValidaCPF" value="" maxlength=14 name="RegraValidaCPF" onkeydown="javascript: fMascCPF( this, mCPF );" placeholder="CPF" required>
                <input type="text" id="RegraValidaCRP" value=""  name="RegraValidaCRP" onkeydown="javascript: fMascCRP( this, mCRP );" placeholder="CRP" required>
                <input type="password" name="password" placeholder="Senha" required /> 
                <input type="passwordconfirm" name="passwordconfirm" placeholder="Confirme a senha" required /> 
                <a href="index.php">Já tem uma conta?</a>
                <button onclick="ValidaCPF();" type="submit" value= "Enviar">Entrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Cadastro aluno</h1>
                
                <span></span>
                <input type="email" name="email" placeholder="Insira um e-mail válido" required />
                <input type="name" name="name" placeholder="Nome completo" required />
                <input type="password" name="password" placeholder="Senha" required />
                <input type="passwordconfirm" name="passwordconfirm" placeholder="Confirme a senha" required /> 
                <a href="index.php">Já tem uma conta?</a>

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


    <script src="scriptphp.js"></script>
</body>
</html>
