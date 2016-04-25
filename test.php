<?php
require_once("slugify.php");

$init = new Slugify();

echo $init->convert("éçà links")."\n\r";
echo $init->convert("ağaç işleri üretim atölyesi")."\n\r";
echo $init->convert("éïóöëï links");
