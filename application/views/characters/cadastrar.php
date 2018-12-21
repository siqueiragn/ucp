<div id="page-wrapper">
    <br class="clear">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-left hidden-print">
                    <h4>Aplicação</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row form-horizontal">
                            <form role="form" method="POST" action="<?php echo site_url($this->router->class . '/DB?acao=salvar');?>" enctype="multipart/form-data">

                                <div class="col-lg-8 col-xs-8">
                                    <div class="form-group">
                                        <label class="col-lg-3 col-xs-3 control-label">Nome do personagem <span>*</span></label>
                                        <div class="col-lg-8 col-xs-8">
                                            <input class="form-control input-sm" maxlength="24" required type="text" tabindex="1" name="nome" id="nome">
                                        </div>

                                    </div>
                                    <div class="form-group">

                                        <label for="" class="col-lg-3 col-xs-3 control-label">Data de Nascimento <span>*</span></label>
                                        <div class="col-lg-3 col-xs-3">
                                            <input type="text" required class="form-control input-sm mascara-data" name="data_nascimento" id="data_nascimento" tabindex="1">
                                        </div>



                                        <label class="col-lg-2 col-xs-2 control-label">Sexo<span>*</span></label>
                                        <div class="col-lg-3 col-xs-3">
                                            <select name="sexo" id="sexo" required class="form-control input-sm" tabindex="1">
                                                <option value=""></option>
                                                <option value="0">Masculino</option>
                                                <option value="1">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 col-xs-3 control-label">Origem <span>*</span></label>
                                        <div class="col-lg-8 col-xs-8">
                                            <input class="form-control input-sm" required name="origem" id="origem" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-lg-3 col-xs-3 control-label">História</label>
                                        <div class="col-lg-8 col-xs-8">
                                            <textarea name="historia" disabled id="historia" class="form-control default-textarea" tabindex="1">Outra hora tu preenche isso...</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-xs-4">

                                    <div class="panel panel-default">

                                        <div class="panel-body">

                                            <h5>Futuramente, vai ter algo pra skin aqui, mas agora deu preguiça, sabe como é, né? <br><br>Pega uma aí entre 1 e 300.</h5>
                                            <div class="form-group">
                                                <div class="col-lg-8 col-xs-8">
                                                    <input type="number" name="skin" id="skin" placeholder="" class="form-control input-sm" tabindex="1" min="1" max="300">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="col-lg-9 col-xs-9 text-center">
                                        <button type="submit" class="btn btn-sm btn-default">Salvar</button>
                                        <button type="reset" class="btn btn-sm btn-default">Limpar</button>
                                    </div>
                                </div>

                            </form>
                    </div>
                    <!-- /.row (nested) -->
            </div>
            <!-- /.row -->

</div>
        
<!-- /#wrapper -->