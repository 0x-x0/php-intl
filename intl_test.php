<?php
class intl_test {
  public static function main() {
    $DateTime = new DateTime();
    $IntlDateFormatter = new IntlDateFormatter(
      'es_ES@calendar=islamic',
      IntlDateFormatter::FULL,
      IntlDateFormatter::FULL,
      'Australia/Yancowinna',
      IntlDateFormatter::TRADITIONAL
    );
  return $IntlDateFormatter->format($DateTime);
  }
}
?>