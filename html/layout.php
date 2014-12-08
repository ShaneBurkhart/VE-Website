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
    <script type="text/javascript" src="/js/site.js"></script>
  </head>
  <body>
    <div class="page">
      <header class="container">
        <div class="logo-banner">
          <img src="/img/ve_logo.png" alt="">
        </div>
        <div id="header-nav" class="pull-right">
          <a href="/">Home</a>
          <a href="/about">About</a>
          <a href="/developer_login">Developer Login</a>
        </div>
      </header>
      <div class="content">

        <?php require($current_template); ?>

      </div>
    </div>
  </body>
</html>
