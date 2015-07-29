<!doctype html>
<html>
  <head>
    <title>React page</title>
  </head>
  <body>

    <div id="table">
        <?php echo $view['reactjs']->renderMarkup('Table', $data); ?>
    </div>
    <div id="table2">
        <?php echo $view['reactjs']->renderMarkup('Table', $data); ?>
    </div>

    <script type="text/javascript" src="react.min.js" />
    <script type="text/javascript" src="table.js" />
    <script>
        <?php echo $view['reactjs']->renderJS('Table', $data, '#table', 'table'); ?>
        <?php echo $view['reactjs']->renderJS('Table', $data, '#page2', 'table2'); ?>
    </script>
  </body>
</html>