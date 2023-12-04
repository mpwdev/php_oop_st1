<?php

  require_once 'Paragraph.php';

  $paragraph = new Paragraph( 'I love coding' );

  unset( $paragraph );

  echo '<br><pre>';
  print_r( $paragraph );
  echo $paragraph;
  echo '</pre><br><br>';
