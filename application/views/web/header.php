<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset="utf-8">
	<title>Reactiva :: <?php echo $PageTitle; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/commons/custom-bootstrap-margin-padding.css'); ?>">
	
	<?php if ( ($this->router->method != "login") && ($this->router->method != "logout") ): ?>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/sb-admin-2.css'); ?>">
  <?php endif ?>

  	<script type="text/javascript">
        var base_url = '<?php echo base_url(); ?>';

        var js_site_url = function( urlText ){
            var urlTmp = "<?php echo site_url('" + urlText + "'); ?>";
            return urlTmp;
        }

        var js_base_url = function( urlText ){
            var urlTmp = "<?php echo base_url('" + urlText + "'); ?>";
            return urlTmp;
        }
    </script>

	
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!-- Datatables -->
	<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/jquery.datetimepicker.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/commons/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/login-style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/patient-style.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/calendar-style.css'); ?>">


</head>
<body>	
	<?php if( ($this->router->method != "login")  && ($this->router->method != "logout")){
			echo " <div id ='wrapper'>";
		} else{
			echo "<div>";} ?>