
<div class="content well well-small col-lg-4 col-xs-4 col-lg-offset-4 col-xs-offset-4" style="margin-top: 10%;" >
    <div class="row-fluid" style="margin: 0 auto;">
        <h2> Entrar </h2>
        <form method="POST" action="<?php echo site_url($this->router->class . '/dbAuthme');?>">
            <?php if ($this->input->get('error') == 1) { ?>
                <div class="form-group">
                    <h5 style="color: red;">Usuário e senha inválidos! Verifique.</h5>
                </div>
            <?php } ?>
            <div class="input-group input-group-sm" style="margin-bottom: 20px;">
                <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" required name="user" placeholder="Usuário" aria-describedby="sizing-addon3">
            </div>

            <div class="input-group input-group-sm" style="margin-bottom: 20px;">
                <span class="input-group-addon" id="sizing-addon4"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                <input type="password" class="form-control" required placeholder="Senha" name="pass" aria-describedby="sizing-addon4">
            </div>
           <div class="btn-group col-md-12">
                <button class="btn btn-primary btn-block btn-login" type="submit">Entrar</button>
                <a href="<?php echo site_url($this->router->class . '/registrar');?>" class="btn btn-block btn-default" style="background: #eee; color: black;    box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05); margin-bottom: 15px;">Registrar</a>
                <a href="#" style="color: #777; text-decoration: none!important; margin-top: 10px;" >Esqueceu sua senha?</a>
           </div>
        </form>

    </div>
</div>