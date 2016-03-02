<?php
class intl_test {
  public static function main() {
    $formatter = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    return $formatter->format(1234567);
  }
}
?>
