<?php

require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/app/calcCredCtrl.class.php';

//utwórz obiekt i użyj
$ctrl = new CalcCredCtrl();
$ctrl->process();
