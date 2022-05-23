<?php $this->extend("layout_padrao");?>

<?php $this->section("login_register");?>

<div class="container_login">
    <div class="login_img">
        <img src="/img/icon_preto.png" alt="">
    </div>
    <div class="login_form">
        <form action="">
            <div class="login_header">
                <div class="titulo_login">
                    <h1>Login</h1>
                </div>
                <div class="login_button">
                    <button><a href="/Home/register">Registrar</a></button>
                </div>
            </div>

            <div class="input_grupo">
                <div class="input_box">
                    <label for="">Digite seu email</label>
                    <input type="email" required>
                </div>
                <div class="input_box">
                    <label for="">Digite sua senha</label>
                    <input type="password" required>
                </div>
            </div>

            <div class="registrar">
                <button><a href="">Registrar</a></button>
            </div>

        </form>
    </div>
</div>

<?php $this->endSection(); ?>