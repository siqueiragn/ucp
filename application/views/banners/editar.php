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
                            <form role="form" method="POST" action="<?php echo site_url($this->router->class . '/DB?acao=atualizar&cd='. $objeto->ID_ECOMMERCE_SITE);?>" enctype="multipart/form-data">

                                <input type="hidden" name="remover" id="remover" value="0">
                                <input type="hidden" name="exclusao" id="exclusao" value="<?php echo $objeto->DT_EXCLUSAO;?>">

                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Ordem<span>*</span></label>
                                    <div class="col-lg-1 col-xs-1">
                                        <input class="form-control input-sm mascara-numero-3 validate[required]" type="text" tabindex="1" value="<?php echo $objeto->NR_ORDEM_EXIBICAO;?>" name="ordem" id="ordem">
                                    </div>
                                    <label for="" class="col-lg-2 col-xs-2 control-label">Grau Destaque<span>*</span></label>
                                    <div class="col-lg-2 col-xs-2">
                                        <select name="grau_destaque" id="grau_destaque" class="form-control input-sm">
                                            <option value=""></option>
                                            <option value="1" <?php if ($objeto->NR_GRAU_DESTAQUE == "1") echo "selected";?> >PADRÃO</option>
                                            <option value="2" <?php if ($objeto->NR_GRAU_DESTAQUE == "2") echo "selected";?> >MEDIO</option>
                                            <option value="5" <?php if ($objeto->NR_GRAU_DESTAQUE == "5") echo "selected";?> >ALTO</option>
                                        </select>
                                    </div>
                                    <label class="col-lg-1 col-xs-1 control-label">Tipo<span>*</span></label>
                                    <div class="col-lg-5 col-xs-5">
                                        <select name="tipo" id="tipo" class="form-control input-sm validate[required]" tabindex="1">
                                            <option value=""></option>
                                            <option value="BP" <?php if ($objeto->TP_CONTEUDO == "BP") echo "selected";?> >BANNER PADRÃO</option>
                                            <option value="BD" <?php if ($objeto->TP_CONTEUDO == "BD") echo "selected";?> >BANNER DESTAQUE</option>
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
                                            <option value="HO" <?php if( $objeto->TP_AREA_SITE == "HO") echo "selected"; ?>>HOME</option>
                                            <option value="RS" <?php if( $objeto->TP_AREA_SITE == "RS") echo "selected"; ?>>RESUMO SITE</option>
                                            <option value="CV" <?php if( $objeto->TP_AREA_SITE == "CV") echo "selected"; ?>>CLUBE VANTAGENS</option>
                                            <option value="SP" <?php if( $objeto->TP_AREA_SITE == "SP") echo "selected"; ?>>SOBRE PRODUTOS</option>
                                            <option value="QS" <?php if( $objeto->TP_AREA_SITE == "QS") echo "selected"; ?>>QUEM SOMOS</option>
                                            <option value="CA" <?php if( $objeto->TP_AREA_SITE == "CA") echo "selected"; ?>>CENTRAL DE AJUDA</option>
                                            <option value="PP" <?php if( $objeto->TP_AREA_SITE == "PP") echo "selected"; ?>>POLÍTICA DE PRIVACIDADE</option>
                                            <option value="MS" <?php if( $objeto->TP_AREA_SITE == "MS") echo "selected"; ?>>MAPA DO SITE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php if( file_exists('assets/upload/'.$this->router->class.'/'.$this->router->class . '_' . $objeto->ID_ECOMMERCE_SITE.'.jpg') ){ ?>

                                     <div class="col-lg-offset-1 col-xs-offset-1 col-lg-11 col-xs-11">
                                        <a href="<?php echo base_url('assets/upload/'.$this->router->class.'/'.$this->router->class . '_' . $objeto->ID_ECOMMERCE_SITE.'.jpg'); ?>" rel="imagens" class="thumbnail col-lg-2 col-xs-2 fancybox">
                                            <img src="<?php echo base_url('assets/upload/'.$this->router->class.'/'.buscar_thumb($this->router->class . '_' . $objeto->ID_ECOMMERCE_SITE.'.jpg')); ?>" class="img-responsive">
                                        </a>
                                    </div>

                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Título<span>*</span></label>
                                    <div class="col-lg-11 col-xs-11">
                                        <input class="form-control input-sm validate[required]" name="titulo" id="titulo" value="<?php echo $objeto->TX_TITULO;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Link </label>
                                    <div class="col-lg-11 col-xs-11">
                                        <input class="form-control input-sm " name="link" id="link" value="<?php echo $objeto->TX_LINK;?>">
                                        <p class="help-block">Link destino quando clicar no banner.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Texto</label>
                                    <div class="col-lg-11 col-xs-11">
                                        <textarea class="form-control input-sm maiusculo  classic-editor" id="editor" style="resize: none" name="texto"><?php echo $objeto->TEXTO; ?></textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-1 col-xs-offset-1 col-lg-4 col-xs-4">
                                        <button type="submit" class="btn btn-sm btn-default">Salvar</button>
                                        <a href="<?php echo site_url($this->router->class . '/listar');?>" class="btn btn-sm btn-default">Voltar</a>
                                        <?php
                                        $classe = $objeto->DT_EXCLUSAO == '' ? 'btn-danger' : 'btn-primary';
                                        $texto  = $objeto->DT_EXCLUSAO == '' ? 'Inativar' : 'Ativar';
                                        ?>

                                        <button type="button" class="btn btn-sm <?php echo $classe; ?> btn-margin " title="Alterar status" onclick="return rem();" tabindex="4">
                                            <i class="fa fa-warning" aria-hidden="true"></i> <?php echo $texto; ?>
                                        </button>
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