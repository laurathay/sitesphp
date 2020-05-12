<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
   // etc.
?>

<?php // ne marche pas mais bon 
body ('height: 100%, margin:O');
span('position:fixed, width:100%, text-align:center, background:#fff');
a ('display:inline-block, vertical-align:top, margin:0 30px, text-decoration:none;font:700 .95em/40px sans-serif');
a:hover ('color:#ccc');
div ('height:100%, background:#A30029 ');
div + div ('background:#235F76');
div+div+div ('background:#489660');
div+div+div+div ('background:#7A7971');
div+div+div+div+div('background:#6A771F');
?>
