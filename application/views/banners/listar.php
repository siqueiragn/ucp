<div id="page-wrapper"> 
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Banners</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right hidden-print">

                    <form action="<?php echo site_url($this->router->class . '/listar');?>" method="get" >
				    <div class="col-lg-5 col-xs-5">
					<input type="text" class="form-control input-sm" placeholder="TITULO" name="pesquisa" id="pesquisa" value="<?php echo $this->input->get('pesquisa');?>">
					</div>
					
					<div class="col-lg-3 col-xs-3 text-left">
						<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search"></i>&nbsp;</button>
                        <?php if( $this->input->get() ){ ?>

                            <a href="<?php echo site_url($this->router->class.'/listar'); ?>" class="btn btn-sm btn-default" title="Limpar busca">
                                Limpar Busca
                            </a>

                        <?php } ?>
					</div>

                    <a href="<?php echo site_url($this->router->class .'/cadastrar');?>" class="btn btn-sm btn-default"> Cadastrar</a>
                    <button type="button" class="btn btn-sm btn-default" onclick="window.print();"><i class="fa-print fa"></i> Imprimir</button>

                    </form>


					
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th class="tr-acao">Ações</th>
								<th>Código</th>
								<th>Ordem</th>
								<th>Titulo</th>
								<th>Ativo</th>
							</tr>
						</thead>
						<tbody>
                        <?php foreach ($objetos->result() as $i=>$linha) { ?>
							<tr class="<?php echo $i%2 == 0 ?  "odd gradeX" : "even  gradeC";?>">
								<td>

                                    <a href="<?php echo site_url($this->router->class.'/editar/'.$linha->ID_ECOMMERCE_SITE); ?>" class="btn btn-primary btn-xs" title="Editar">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    </a>

                                </td>
								<td><?php echo $linha->ID_ECOMMERCE_SITE;?></td>
								<td><?php echo $linha->NR_ORDEM_EXIBICAO;?></td>
								<td><?php echo $linha->TX_TITULO;?></td>
								<td><?php if ($linha->DT_EXCLUSAO == '') echo "SIM"; else echo "NÃO";?></td>
							</tr>
                        <?php } ?>
						</tbody>
					</table>
				   
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>