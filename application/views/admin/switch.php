<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>#MAZZOPS [Admin]</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; }
      .bigyes, .bigno { font-size: 3em; line-height: 2em; font-weight: bold; }
      .bigyes { color: #d52b1e; }
    </style>

  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">#MAZZOPS</a>
          <div class="nav-collapse collapse">
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Is MAZZOPS happening?</h1>
      <?php if ($mazzops) : ?>
        <p class="bigyes">FUCK YEAH!</p>
        <p><a href="<?php echo site_url('admin/toggle/off'); ?>" class="btn btn-primary">Stop MAZZOPS</a></p>
      <?php else : ?>
        <p class="bigno">NO!</p>
        <p><a href="<?php echo site_url('admin/toggle/on'); ?>" class="btn btn-primary">Start MAZZOPS</a></p>
      <?php endif; ?>
    </div> <!-- /container -->

  </body>
</html>
