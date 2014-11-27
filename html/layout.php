<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>VE Design Group</title>

    <link href="/img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="/css/site.css"></head>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
  </head>
  <body>
    <div id="container">
      <header class="container">
        <a href="/"><?php //echo $this->HTML->image('logo.png', array('id' => 'logo')) ?></a>
        <div id="header-nav" class="pull-right">
          <a href="/">Home</a>
          <a href="/contact">Contact Us</a>
          <a href="/developer/login">Developer Login</a>
        </div>
      </header>
      <div id="content">

        <?php require($current_template); ?>

      </div>
      <footer>
        <div class="container">
          <p>Created by Shane Burkhart</p>
        </div>
      </footer>
    </div>
  </body>
</html>
