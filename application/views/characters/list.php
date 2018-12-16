<div id="page-wrapper">
    <br class="clear">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right hidden-print">



                    <?php if ($objetos->num_rows() < 3) { ?>
                    <a href="<?php echo site_url($this->router->class .'/cadastrar');?>" class="btn btn-sm btn-default">Novo Personagem</a>
                    <?php } ?>

				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
                    <?php

                    if ($objetos->num_rows() ) {

                        switch ($objetos->num_rows()) {
                            case 1: $classTxt = "col-lg-offset-4 col-lg-4 col-xs-offset-4 col-xs-4"; break;
                            default: $classTxt = 'col-lg-4 col-xs-4';
                        }

                        foreach ($objetos->result() as $i=>$linha) { ?>

                            <div class="<?php echo $classTxt;?>">

                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        <?php echo $linha->Character;?>
                                    </div>

                                    <div class="panel-body text-center">
                                        <img width="100" height="200" src="<?php echo site_url("../assets/images/skins/$linha->Skin.png");?>" alt="">

                                        <div class="row">

                                            <a href="<?php echo site_url( $this->router->class . '/editar/' . $linha->ID);?>" class="btn btn-default btn-sm">Gerenciar</a>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        <?php }

                    } ?>
				   
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>