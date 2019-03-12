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
    <link rel="icon" href="<?php echo site_url( '/assets/images/favicon.png');?>" type="image/gif" sizes="16x16">

    <link href="<?php echo site_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('/assets/css/custom_ucp.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('/assets/css/custom_menu.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('/assets/css/alertify.min.css');?>" rel="stylesheet">
    <link href="<?php echo site_url('/assets/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">

    <!-- Fancybox Core CSS -->
    <link href="<?php echo site_url('/assets/css/fancybox.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url('/assets/css/estilos.less');?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo site_url('/assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
	
	<!-- MetisMenu CSS -->
    <link href="<?php echo site_url('/assets/css/metisMenu.min.css');?>" rel="stylesheet">
	
	
    <!-- jQuery -->
    <script src="<?php echo site_url('/assets/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('/assets/js/jquery.validationEngine.js');?>"></script>
    <script type="text/javascript" src="<?php echo site_url('/assets/js/jquery.validationEngine-pt_BR.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('/assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('/assets/js/custom_menu.js');?>"></script>
    <script src="<?php echo site_url('/assets/js/moment.min.js');?>"></script>
    <script src="<?php echo site_url('/assets/js/pt-br.js');?>"></script>
    <script src="<?php echo site_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>

    <!-- Fancybox Core JavaScript -->
    <script src="<?php echo site_url('/assets/js/fancybox.js');?>"></script>

    <!-- CKEditor Core JavaScript -->
    <script src="<?php echo site_url('/assets/js/ckeditor5-build-classic/ckeditor.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url('/assets/js/metisMenu.min.js');?>"></script>

    <!-- Custom JavaScript -->
    <script src="<?php echo site_url('/assets/js/funcoes.js');?>"></script>

     <script>
        $('.datepicker').datetimepicker({useCurrent: false, format: 'DD/MM/YYYY',locale: 'pt-br',tooltips:{today: 'Ir para hoje', clear: 'Limpar', close: 'Fechar', selectMonth: 'Selecionar Mês', prevMonth: 'Mês Anterior', nextMonth: 'Próximo Mês', selectYear: 'Selecionar Ano', prevYear: 'Ano Anterior', nextYear: 'Próximo Ano', selectDecade: 'Selecionar Década', prevDecade: 'Década Anterior', nextDecade: 'Próxima Década'}});
    </script>

</head>

<body>

<nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
    <div class="navbar-toggler animate">
        <span class="menu-icon"></span>
    </div>
    <ul class="navbar-menu animate">
        <li>
            <a href="#" class="animate">
                <span class="desc animate"> <?php echo $this->nativesession->get('username');?> </span>
                <span class="glyphicon glyphicon-user"></span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('characters/listar');?>" class="animate">
                <span class="desc animate"> Personagens </span>
                <span class="glyphicon glyphicon-info-sign"></span>
            </a>
        </li>
        <?php if ($this->nativesession->get('admin') > 0 ) { ?>
        <li>
            <a href="<?php echo site_url('news/listar');?>" class="animate">
                <span class="desc animate"> Notícias </span>
                <span class="glyphicon glyphicon-bullhorn"></span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('/characters/aplicacoes'); ?>" class="animate">
                <span class="desc animate"> Aplicações </span>
                <span class="glyphicon glyphicon-list-alt"></span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('/users/listar'); ?>" class="animate">
                <span class="desc animate"> Usuários </span>
                <span class="glyphicon glyphicon-eye-open"></span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('/users/about'); ?>" class="animate">
                <span class="desc animate"> Cartão de Visitas </span>
                <span class="glyphicon glyphicon-picture"></span>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="<?php echo site_url('/ucp/logout');?>" class="animate">
                <span class="desc animate"> Desconectar </span>
                <span class="glyphicon glyphicon-off"></span>
            </a>
        </li>
    </ul>
</nav>
