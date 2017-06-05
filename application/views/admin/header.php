<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset="utf-8">
	<title>Reactiva :: <?php echo $PageTitle; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/metisMenu.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/sb-admin-2.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/common/custom-bootstrap-margin-padding.css'); ?>">

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<?php if (isset($css_files)): ?>
		<!-- grocerycrud -->
		<?php foreach($css_files as $file): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<!-- grocerycrud -->
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

</head>
<body>
	<div id = 'wrapper'>
