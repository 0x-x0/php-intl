<?php
class intl_test {
  public static function main() {
    $coll = new Collator('en_US');
    $al   = $coll->getLocale(Locale::ACTUAL_LOCALE);
    echo "Actual locale: $al\n";
    
    $formatter = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    return $formatter->format(1234567);
  }
}
?>
