<?php

require './vendor/autoload.php';

use CowSay\Cow;

$marguerite = new Cow('Hello, Farm!');

echo $marguerite;
 $tongue = $marguerite->setTongue('U');
 echo $marguerite;