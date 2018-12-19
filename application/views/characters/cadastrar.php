<div id="page-wrapper"> 
		
		<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Banners</h3>
                </div>
                <!-- /.col-lg-12 -->
		</div>
			<div class="row">
                <div class="col-lg-12 form-horizontal">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <form role="form" method="POST" action="<?php echo site_url($this->router->class . '/DB?acao=salvar');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Ordem<span>*</span></label>
                                    <div class="col-lg-1 col-xs-1">
                                        <input class="form-control input-sm mascara-numero-3 validate[required]" type="text" tabindex="1" name="ordem" id="ordem">
                                    </div>
                                    <label for="" class="col-lg-2 col-xs-2 control-label">Grau Destaque<span>*</span></label>
                                    <div class="col-lg-2 col-xs-2">
                                        <select name="grau_destaque" id="grau_destaque" class="form-control input-sm">
                                            <option value=""></option>
                                            <option value="1">PADRÃO</option>
                                            <option value="2">MEDIO</option>
                                            <option value="5">ALTO</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-1 col-xs-1 control-label">Tipo<span>*</span></label>
                                    <div class="col-lg-5 col-xs-5">
                                        <select name="tipo" id="tipo" class="form-control input-sm validate[required]" tabindex="1">
                                            <option value=""></option>
                                            <option value="BP">BANNER PADRÃO</option>
                                            <option value="BD">BANNER DESTAQUE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Imagem</label>
                                    <div class="col-lg-5 col-xs-5">
                                        <input class="form-control input-sm" type="file" name="imagem" id="imagem">
                                    </div>
                                    <label class="col-lg-1 col-xs-1 control-label">Área p/ Exibir<span>*</span></label>
                                    <div class="col-lg-5 col-xs-5">
                                        <select class="form-control input-sm validate[required]" name="area" id="area">
                                            <option value=""></option>
                                            <option value="HO">HOME</option>
                                            <option value="RS">RESUMO SITE</option>
                                            <option value="CV">CLUBE VANTAGENS</option>
                                            <option value="SP">SOBRE PRODUTOS</option>
                                            <option value="QS">QUEM SOMOS</option>
                                            <option value="CA">CENTRAL DE AJUDA</option>
                                            <option value="PP">POLÍTICA DE PRIVACIDADE</option>
                                            <option value="MS">MAPA DO SITE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Título<span>*</span></label>
                                    <div class="col-lg-11 col-xs-11">
                                        <input class="form-control input-sm validate[required]" name="titulo" id="titulo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Link </label>
                                    <div class="col-lg-11 col-xs-11">
                                        <input class="form-control input-sm " name="link" id="link">
                                        <p class="help-block">Link destino quando clicar no banner.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Texto</label>
                                    <div class="col-lg-11 col-xs-11">
                                        <textarea class="form-control input-sm maiusculo  classic-editor" id="editor" style="resize: none" name="texto"></textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-1 col-xs-offset-1 col-lg-2 col-xs-2">
                                        <button type="submit" class="btn btn-sm btn-default">Salvar</button>
                                        <button type="reset" class="btn btn-sm btn-default">Limpar</button>
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