<div id="page-wrapper"> 
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">Notícias</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-right hidden-print">

                    <a href="<?php echo site_url($this->router->class .'/cadastrar');?>" class="btn btn-sm btn-default"> Cadastrar</a>

				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th class="tr-acao">Ações</th>
								<th>ID</th>
								<th>Autor</th>
								<th>Ativo</th>
							</tr>
						</thead>
						<tbody>
                        <?php foreach ($objetos->result() as $i=>$linha) { ?>
							<tr class="<?php echo $i%2 == 0 ?  "odd gradeX" : "even  gradeC";?>">
								<td>

                                    <a href="<?php echo site_url($this->router->class.'/editar/'.$linha->ID); ?>" class="btn btn-primary btn-xs" title="Editar">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    </a>

                                </td>
								<td><?php echo $linha->ID;?></td>
								<td><?php echo $linha->autor;?></td>
								<td><?php echo $linha->visivel == 1 ? 'SIM' : 'NÃO';?></td>
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