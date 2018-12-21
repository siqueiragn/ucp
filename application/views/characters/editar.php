<div id="page-wrapper">
    <br class="clear">
			<div class="row">
                <div class="col-lg-12 form-horizontal">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <form role="form" method="POST" action="<?php echo site_url($this->router->class . '/DB?action=atz&cd='. $objeto->ID);?>" enctype="multipart/form-data">

                                    <div class="panel panel-default">
                                        <div class="panel-heading text-left">
                                            <?php echo cleanName($objeto->Username);?>
                                        </div>

                                        <div class="panel-body text-center">
                                            <div class="col-lg-6 col-xs-6">
                                            <img width="100" height="200" src="<?php echo site_url("../assets/images/skins/$objeto->Skin.png");?>" alt="">
                                            </div>

                                            <div class="col-lg-6 col-xs-6">

                                                <div class="form-group">
                                                    <label class="col-lg-2 col-xs-2 control-label" id="basic-addon1">Money $</label>
                                                    <div class="col-lg-10 col-xs-10">
                                                        <input type="text" class="form-control input-sm" value="<?php echo $objeto->Grana;?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 col-xs-2 control-label" id="basic-addon1">Bank $</label>
                                                    <div class="col-lg-10 col-xs-10">
                                                        <input type="text" class="form-control input-sm" value="<?php echo $objeto->Grana;?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 col-xs-2 control-label" id="basic-addon1">Savings $</label>
                                                    <div class="col-lg-10 col-xs-10">
                                                        <input type="text" class="form-control input-sm" value="<?php echo $objeto->Grana;?>" readonly>
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