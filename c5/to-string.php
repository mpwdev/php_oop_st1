<?php

  require_once 'Paragraph.php';

  $paragraph = new Paragraph( 'I love coding' );

  echo '<br><pre>';
  print_r( $paragraph );
  echo $paragraph;
  echo '</pre><br><br>';
