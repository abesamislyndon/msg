<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >

  <title>MeaSayHi</title>
  <meta name="description" content="An very basic example of how to use the Wookmark jQuery plug-in.">
  <meta name="author" content="Christoph Ono, Sebastian Helzle">
  <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
  <?php echo link_tag('assets/css/reset.css'); ?>
  <?php echo link_tag('assets/css/main.css'); ?>
  <?php echo link_tag('assets/css/style1.css'); ?>
   <?php echo link_tag('assets/css/font-awesome/css/font-awesome.min.css'); ?>
  <?php echo link_tag('assets/css/jquery.simplyscroll.css'); ?>
  <script src="<?php echo base_url(); ?>assets/js/jquery.simplyscroll.js"></script>

  <script type="text/javascript">
  (function($)
   {
	  $(function() {
		$(".scroll").simplyScroll({orientation:'vertical'});
	});
  })(jQuery);
  
</script>

</head>
<body>