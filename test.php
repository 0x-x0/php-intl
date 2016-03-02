<?php
  require_once("intl_test.php");
  class intlTest extends PHPUnit_Framework_TestCase {
    public function test() {
      $intl = new intl_test();
      $doc = $intl->main();
      echo $doc;
      $this->assertEquals(1,1);
    }
  }
?>
