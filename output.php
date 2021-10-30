<?php

// grafana json query:
// https://marketaylor.synology.me/?p=838
// https://grafana.com/docs/loki/latest/logql/
//   {source="stdout"}|json|my_date=~"01:40:3.*"
//   {source="stdout"}|json|my_date=~"01:40:3.*"|argv_0=~"/app.*"

/*
	
{
  "HOSTNAME": "e28600ed4c54",
  "PHP_VERSION": "8.1.0RC5",
  "PHP_INI_DIR": "/usr/local/etc/php",
  "GPG_KEYS": "528995BFEDFBA7191D46839EF9BA0ADA31CBD89E 39B641343D8C104B2B146DC3F9C39DC0B9698544 F1F692238FBC1666E5A5CCD4199F9DFEF6FFBAFD",
  "PHP_LDFLAGS": "-Wl,-O1 -pie",
  "PWD": "/",
  "HOME": "/root",
  "PHP_SHA256": "322258717bed388567bf3637fd8921aa197cde57bb74fb5c020517165e6812b8",
  "PHPIZE_DEPS": "autoconf \t\tdpkg-dev \t\tfile \t\tg++ \t\tgcc \t\tlibc-dev \t\tmake \t\tpkg-config \t\tre2c",
  "PHP_URL": "https://downloads.php.net/~patrickallaert/php-8.1.0RC5.tar.xz",
  "SHLVL": "0",
  "PHP_CFLAGS": "-fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64",
  "PATH": "/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin",
  "PHP_ASC_URL": "https://downloads.php.net/~patrickallaert/php-8.1.0RC5.tar.xz.asc",
  "PHP_CPPFLAGS": "-fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64",
  "_": "/usr/local/bin/php",
  "PHP_SELF": "/app/output.php",
  "SCRIPT_NAME": "/app/output.php",
  "SCRIPT_FILENAME": "/app/output.php",
  "PATH_TRANSLATED": "/app/output.php",
  "DOCUMENT_ROOT": "",
  "REQUEST_TIME_FLOAT": 1635601186.500434,
  "REQUEST_TIME": 1635601186,
  "argv": {
    "0": "/app/output.php"
  },
  "argc": 1,
  "my_date": "01:40:39"
}

*/



while (true) {
  //fwrite(STDOUT, "Hi All - " . date('h:i:s') . "\n");
  $_SERVER['my_date'] = date('h:i:s');
  $msgJson = json_encode($_SERVER, JSON_UNESCAPED_SLASHES|JSON_FORCE_OBJECT);
  fwrite(STDOUT, $msgJson . "\n");
  sleep(1);
}