<?php
  $current = NULL;  

  $calculators = array(
    'offset' => array('title' => 'Split Rim Offset Calculator'),
    'fitment' => array('title' => 'Wheel Fitment Comparison Calculator'),
    'equivalents' => array('title' => 'Equivalent Arch Clearance Calculator'),
  );

  if (array_key_exists($_GET['t'], $calculators)) {
    $current = $_GET['t'];
  } else {
    header('Location: /tools/offset', TRUE, '301');
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $calculators[$current]['title']; ?> | Wheel offset and fitment comparison tools</title>

<script type="text/javascript" src="/tools/scripts/jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/tools/scripts/jquery/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="/tools/scripts/jquery/jquery-ui-1.10.0.custom.min.js"></script>

<script type="text/javascript" src="/tools/scripts/garagelsd.js?ver=1.2.1"></script>
<script type="text/javascript" src="/tools/scripts/garagelsd.offset.js?ver=2.1.6"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37651946-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
	$j(function() {
    $j("#share-dialog").dialog({
      width: 480,
      height: 140,
      modal: true,
      autoOpen: false
    });
	});
  $j("#share-dialog").position({
   my: "center",
   at: "center",
   of: window
});
</script>

<link rel="stylesheet" type="text/css" media="all" href="/tools/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="/tools/garagelsd-style.css" />
<link rel="stylesheet" type="text/css" media="all" href="/tools/scripts/style.offset.css" />
<link rel="stylesheet" type="text/css" media="all" href="/tools/scripts/jquery/ui-lightness/jquery-ui-1.10.0.custom.min.css" />
<style type="text/css">
  #nav-<?php echo $current ?> a:link { text-decoration: underline; }
  .ui-dialog .ui-dialog-titlebar { height: 40px; }
</style>
</head>

<body>
<div id="navigation">
  <ul class="container clearfix">
<?php foreach (array_reverse($calculators) as $calc=>$config) : ?>
    <li id="nav-<?php echo $calc; ?>"><a href="/tools/<?php echo $calc; ?>"><?php echo $config['title']; ?></a></li>
<?php endforeach; ?>
  </ul>
</div>

<div id="content" class="entry-content container">
  <h1><?php echo $calculators[$current]['title']; ?></h1>
<?php require "include/$current.calculator.php"; ?>
  <div id="description">
<?php require "include/$current.description.php"; ?>
  </div>
</div>

<div id="share-dialog" title="Copy the URL to share your results">
</div>

</body>
</html>
