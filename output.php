<?php

// grafana json query:
// https://marketaylor.synology.me/?p=838
// https://grafana.com/docs/loki/latest/logql/
//   {source="stdout"}|json|my_date=~"01:40:3.*"
//   {source="stdout"}|json|my_date=~"01:40:3.*"|argv_0=~"/app.*"

function one () {
    two();
}
function two () {
    throw new \RuntimeException('Fatal!!');
}
try {
    one();
} catch (\RuntimeException $exception) {
    $_SERVER['trace'] = $exception->getTrace();
}

//$json = str_replace("\n", '\\\\n', $json);
//$json = str_replace("'", "", $json);
//$json = str_replace("\"", '\\"', $json);
//$json = str_replace('\n', ' \n', $json);

while (true) {
  $_SERVER['currtime'] = date('h:i:s');
  $msgJson = json_encode($_SERVER, JSON_UNESCAPED_SLASHES|JSON_FORCE_OBJECT);
  $msgJson = '[2021-10-31 09:04:05]  custom_event.ERROR: ' . $msgJson . ' [] []';

  fwrite(STDOUT, $msgJson . "\n");
  sleep(1);
}