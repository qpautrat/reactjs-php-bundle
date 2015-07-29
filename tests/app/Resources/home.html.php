<!doctype html>
<html>
  <head>
    <title>React page</title>
  </head>
  <body>

    <div id="table">
        <?php echo $rjs->renderMarkup('Table', $data); ?>
    </div>
    <div id="table2">
        <?php echo $rjs->renderMarkup('Table', $data); ?>
    </div>

    <script type="text/javascript" src="react.min.js" />
    <script type="text/javascript" src="table.js" />
    <script>
        <?php echo $rjs->renderJS('Table', $data, '#table', 'table'); ?>
        <?php echo $rjs->renderJS('Table', $data, '#page2', 'table2'); ?>
    </script>
  </body>
</html>