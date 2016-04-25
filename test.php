<?php

require_once __DIR__ . '/vendor/autoload.php';

use Slugify\SlugIt;

$init = new SlugIt();

echo $init->convert("éçà links")."\n\r";
echo $init->convert("ağaç işleri üretim atölyesi")."\n\r";
echo $init->convert("éïóöëï links");
