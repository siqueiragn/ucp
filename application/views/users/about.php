<?php if ($this->input->get('msg') == 1) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Operação realizada com sucesso!</strong>
    </div>
<?php } ?>
<div class="col-lg-10 col-xs-10 col-lg-offset-1 col-xs-offset-1">
    <br class="clear">
    <div class="row">
        <div class="col-lg-12 form-horizontal">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <form role="form" method="POST" action="<?php echo site_url($this->router->class . '/DB?action=atz&cd='. $objeto->uID);?>" enctype="multipart/form-data">

                        <div class="panel panel-default">
                            <div class="panel-heading text-left">
                                About me
                            </div>

                            <?php

                            $imagem = $objeto->imgName ? $objeto->imgName : 'default_avatar.png';

                            ?>

                            <div class="panel-body text-center">
                                <div class="row">

                                    <h5 class="text-center">Esse cartão será exibido <a href="<?php echo site_url('/staff');?>">nessa página</a> visando apresentar a equipe para quaisquer visitantes.
                                        Conte um pouco sobre você, o texto é livre, porém, seja cortês.</h5>
                                    <hr>

                                    <div class="col-lg-12 col-xs-12">
                                        <img class="img-avatar" src="<?php echo site_url("assets/images/staff/$imagem");?>" alt="">
                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-lg-12 col-xs-12">

                                        <label class="col-lg-2 col-xs-2 control-label">Imagem</label>
                                        <div class="col-lg-8 col-xs-8">
                                            <input type="file" name="imagem" class="form-control input-sm" tabindex="1">
                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-lg-12 col-xs-12">

                                        <label class="col-lg-2 col-xs-2 control-label">Sobre</label>
                                        <div class="col-lg-8 col-xs-8">
                                            <textarea name="sobre" id="sobre" maxlength="500" class="form-control default-textarea" placeholder="Me conte seus segredos..." tabindex="1"><?php echo $objeto->aboutme;?></textarea>
                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-lg-12 col-xs-12">
                                        <button class="btn btn-default" type="submit">Salvar</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

<!-- /#wrapper -->