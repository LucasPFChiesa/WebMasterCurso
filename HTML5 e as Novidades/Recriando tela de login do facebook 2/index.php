<!doctype html>
<html lang="pt-br">

<head>
    <title>Login Facebook</title>
    <!--Aplicar Meta Tags-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <header>
        <div class="center">

            <div class="logo">
                <h2>facebook</h2>
            </div>

            <form class="form-login" method="post">
                <div class="form-element">
                    <p>Email ou Telefone</p>
                    <input type="email">
                </div>
                <div class="form-element">
                    <p>Senha</p>
                    <input type="email">
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                    <div class="clear"></div>
                </div>
            </form>
            <div class="clear"></div>

        </div>
    </header>

    <section class="main">
        <div class="center">

            <div class="img-pessoas">
                <img src="./img-pessoas.png">
            </div>
            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form class="create-account">
                    <div class="w50">
                        <input type="text" placeholder="nome">
                    </div>
                    <div class="w50">
                        <input type="text" placeholder="sobrenome">
                    </div>
                    <div class="w100">
                        <input type="email" placeholder="e-mail">
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="senha">
                    </div>

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="1">Junho</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <option value="2">2002</option>
                        </select>
                    </div>
                    <div class="clear"></div>

                    <div class="w100">
                        <div class="radiobox">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div>
                        <div class="radiobox">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar">
                    </div>
                </form>

            </div>
            <div class="clear"></div>
        </div>
    </section>


</body>

</html>