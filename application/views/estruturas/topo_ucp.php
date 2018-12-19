<?php $this->load->helper('url'); ?>

<head>
    <title><?php echo ucfirst($this->router->class);?></title>

    <style>

        @media print {
            a[href]:after {
                content: none !important;
            }

            .tr-acao {
                display: none !important;
            }

        }


    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url('../assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('../assets/css/custom_ucp.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('../assets/css/alertify.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('../assets/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">

    <!-- Fancybox Core CSS -->
    <link href="<?php echo site_url('../assets/css/fancybox.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url('../assets/css/sb-admin-2.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('../assets/css/estilos.less');?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo site_url('../assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
	
	<!-- MetisMenu CSS -->
    <link href="<?php echo site_url('../assets/css/metisMenu.min.css');?>" rel="stylesheet">
	
	
    <!-- jQuery -->
    <script src="<?php echo site_url('../assets/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('../assets/js/jquery.validationEngine.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('../assets/js/jquery.validationEngine-pt_BR.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('../assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('../assets/js/alertify.min.js');?>"></script>
    <script src="<?php echo site_url('../assets/js/moment.min.js');?>"></script>
    <script src="<?php echo site_url('../assets/js/pt-br.js');?>"></script>
    <script src="<?php echo site_url('../assets/js/bootstrap-datetimepicker.min.js');?>"></script>

    <!-- Fancybox Core JavaScript -->
    <script src="<?php echo site_url('../assets/js/fancybox.js');?>"></script>

    <!-- CKEditor Core JavaScript -->
    <script src="<?php echo site_url('../assets/js/ckeditor5-build-classic/ckeditor.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('../assets/js/metisMenu.min.js');?>"></script>

    <!-- Custom JavaScript -->
    <script src="<?php echo site_url('../assets/js/funcoes.js');?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo site_url('../assets/js/raphael.min.js');?>"></script>
    <script src="<?php echo site_url('../assets/js/morris.min.js');?>"></script>
 
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url('../assets/js/sb-admin-2.js');?>"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script>
        $('.datepicker').datetimepicker({useCurrent: false, format: 'DD/MM/YYYY',locale: 'pt-br',tooltips:{today: 'Ir para hoje', clear: 'Limpar', close: 'Fechar', selectMonth: 'Selecionar Mês', prevMonth: 'Mês Anterior', nextMonth: 'Próximo Mês', selectYear: 'Selecionar Ano', prevYear: 'Ano Anterior', nextYear: 'Próximo Ano', selectDecade: 'Selecionar Década', prevDecade: 'Década Anterior', nextDecade: 'Próxima Década'}});
    </script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="logo-header" style="margin-left: 20px; margin-top: 10px;">
                   <!-- <a href="<?php /*echo site_url();*/?>">
                        <img src="<?php /*echo site_url('../assets/img/favicon.png');*/?>" alt="Logo" style="float: left; " >
                    </a>-->

                    <a class="navbar-brand" href="<?php /*echo site_url();*/?>"> LSRP User Control Panel</a>
                </div>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                 
                <!-- /.dropdown -->  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <p style="color: white;"><?php echo $this->nativesession->get('username');?></p>

                    </a>

                    <ul class="dropdown-menu dropdown-user">
                       <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        </li>
                        <li class="divider"></li>-->
                        <li><a href="<?php echo site_url('ucp/logout');?>"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
				
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li class="panel-link">
                            <a href="<?php echo site_url('ucp/home');?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li class="divider">
                            JOGADOR
                        </li>
                        <li class="panel-link">
                            <a href="<?php echo site_url('characters/listar'); ?>"><i class="fa fa-group fa-fw"></i> Personagens</a>
                        </li>
                        <li class="divider">
                            ADMINISTRADOR
                        </li>
					    <li class="panel-link">

                                    <a class="panel-link" href="#"><i class="fa-newspaper-o fa"></i> Notícias <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a class="panel-link" href="<?php echo site_url('news/cadastrar'); ?>">Cadastrar</a>
                                        </li>
                                        <li>
                                            <a class="panel-link" href="<?php echo site_url('news/listar'); ?>">Listar</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
