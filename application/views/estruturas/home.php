
<body  ondragstart='return false' oncontextmenu='return false'>

<div class="content well well-small col-md-12 col-xs-12" style="" >
    <div class="row-fluid" style="margin: 0 auto;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="" data-slide-to="0" class="active"></li>
                <li data-target="" data-slide-to="1"></li>
                <li data-target="" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://i.imgur.com/69eQzxT.png" alt="" class="img-responsive">
                </div>
                <div class="item">
                    <img src="https://i.imgur.com/IQgfrqB.png" alt="" class="img-responsive">
                </div>
                <div class="item">
                    <img src="https://i.imgur.com/CBqlKx4.png" alt="" class="img-responsive">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row-fluid" style="padding-top: 40px;">
        <div class="col-md-12">
            <div class="col-md-9">

                <!-- PAGE CONTENT -->
                <h5>Teste</h5>

            </div>
            <div class="col-md-3">

                <h2> Entrar </h2>
                <form method="POST" action="<?php echo site_url($this->router->class . '/authme');?>">
                    <div class="input-group input-group-sm" style="margin-bottom: 20px;">
                        <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" name="user" placeholder="Usuário" aria-describedby="sizing-addon3">
                    </div>

                    <div class="input-group input-group-sm" style="margin-bottom: 20px;">
                        <span class="input-group-addon" id="sizing-addon4"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                        <input type="password" class="form-control" placeholder="Senha" name="pass" aria-describedby="sizing-addon4">
                    </div>
                   <div class="btn-group col-md-12">
                        <button class="btn btn-primary btn-block btn-login" type="submit">Entrar</button>
                        <a href="registro.php" class="btn btn-block" style="background: #eee; color: black;    box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05); margin-bottom: 15px;">Registrar</a>
                        <a href="recuperar.php" style="color: #777; text-decoration: none!important; margin-top: 10px;" >Esqueceu sua senha?</a>
                   </div>
       </form>


            </div>
        </div>

    </div>
</div>

<!--<div id="page-wrapper">

    <div class="col-lg-6 col-xs-6 col-lg-offset-3 col-xs-offset-3 text-center" style="margin-top: 15%;">

        <img src="<?php /*echo site_url('../assets/img/jo-logo.png');*/?>" alt="">

    </div>

</div>-->