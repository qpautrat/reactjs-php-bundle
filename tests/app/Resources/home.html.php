<!doctype html>
<html>
  <head>
    <title>React page</title>
    <!-- css and stuff -->
  </head>
  <body>

    <!-- render server content here -->
    <div id="page"><?php echo $rjs->getMarkup(); ?></div>

    <script>
    // client init/render
    // this is a straight echo of the JS because the JS resources
    // were loaded synchronously
    // You may want to load JS async and wrap the return of getJS()
    // in a function you can call later
    <?php echo $rjs->getJS('#page', "GLOB"); ?>
    </script>
  </body>
</html>