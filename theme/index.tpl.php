<!doctype html>
<html lang='<?=$lang?>' class='no-js'>
<head>
    <meta charset='utf-8'/>
    <title><?=get_title($title)?></title>
    <?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>?v=3'/><?php endif; ?>
    <?php if(isset($jquery_incl)):?><script src="<?=$jquery_incl?>" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script><?php endif; ?>
    <script src='<?=$modernizr?>'></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php foreach($stylesheets as $val): ?>
    <link rel='stylesheet' type='text/css' href='<?=$val?>'/>
    <?php endforeach; ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id='wrapper'>
        <div id='header' class="clearfix"><?=$header?></div>
        <?php if(isset($navbar)): ?><div id='navbar'><?=CNavigation::GenerateMenu($triton['navbar'])?></div><?php endif; ?>
        <div id='main'><?=$main?></div>
        <div id='footer'><?=$footer?></div>
    </div>

<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
<script src='<?=$val?>'></script>
<?php endforeach; endif; ?>

<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>
