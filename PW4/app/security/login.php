<?php
require_once dirname(__FILE__).'/../../config.php';
require_once dirname(__FILE__).'/loginCtrl.class.php';


$ctrl = new loginCtrl();
$ctrl->process();
