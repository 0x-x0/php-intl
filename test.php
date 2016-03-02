<?php
  require_once("intl_test.php");
  class intlTest extends PHPUnit_Framework_TestCase {
    public function test() {
      $intl = new intl_test();
      $doc = $intl->main();
      echo $doc;
      $this->assertEquals($doc,'martes, 5 de Shawwal de 1436 AH, 23:23:10 (Hora estándar de Australia central)');
    }
  }
?>
