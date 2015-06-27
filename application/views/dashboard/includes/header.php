<?php
/* header */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="Laborator.co" />

        <title>Marketfiy | Dashboard</title>

        <link rel="stylesheet" href="<?php echo site_url(); ?>neon-x/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
        <link rel="stylesheet" href="<?php echo site_url(); ?>neon-x/assets/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo site_url(); ?>neon-x/assets/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-4">
        <link rel="stylesheet" href="<?php echo site_url(); ?>neon-x/assets/css/neon.css"  id="style-resource-5">
        <link rel="stylesheet" href="<?php echo site_url(); ?>neon-x/assets/css/custom.css"  id="style-resource-6">

        <script src="<?php echo site_url(); ?>neon-x/assets/js/jquery-1.10.2.min.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- TS1387506872: Neon - Responsive Admin Template created by Laborator -->
    </head>

    <?php
    if (ENVIRONMENT == "development") {
        //$this->output->enable_profiler(ENVIRONMENT == "development");
        /* echo '<pre>';
          print_r($this->session->all_userdata());
          print_r(  $this->ion_auth->user()->row() );
          echo '</pre>'; */
    }
    ?>
    <body class="page-body page-fade">

        <div class="page-container">
            <?php $this->load->view('dashboard/includes/sidebar'); ?>