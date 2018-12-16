<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">

                <div class="panel-body">
                    <form role="form" action="<?php echo site_url('usuarios/logar');?>" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control maiusculo" placeholder="Usuário" name="usuario" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="SENHA" name="password" type="password" value="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>