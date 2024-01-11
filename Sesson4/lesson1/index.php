<?php

require_once 'classes/Person.php';
require_once 'classes/Adult.php';
require_once 'classes/Kid.php';

$adult = new Adult();
$adult->setLegs(2);
echo $adult->walk();

echo '<br>';
$kid = new Kid();
$kid->setLegs(2);
$kid->setArm(2);

echo $kid->crawl();
