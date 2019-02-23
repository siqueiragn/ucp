<div class="col-lg-10 col-xs-10 col-lg-offset-1 col-xs-offset-1">
		
		<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Notícias</h3>
                </div>
                <!-- /.col-lg-12 -->
		</div>
			<div class="row">
                <div class="col-lg-12 form-horizontal">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <form role="form" method="POST" action="<?php echo site_url($this->router->class . '/DB?acao=salvar');?>" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-lg-1 col-xs-1 control-label">Texto</label>
                                    <div class="col-lg-11 col-xs-11">
                                        <textarea class="form-control input-sm maiusculo large-editor  classic-editor" id="editor" style="resize: none" name="texto"></textarea>

                                    </div>

                                </div>
                                <div class="form-group">

                                    <label for="" class="col-lg-1 col-xs-1 control-label">Publicada</label>
                                    <div class="col-lg-11 col-xs-11">
                                        <input type="checkbox" class="checkbox-medio" tabindex="1" name="visivel">
                                        &nbsp;&nbsp;A notícia será visível para os usuários caso esteja marcada essa opção.
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