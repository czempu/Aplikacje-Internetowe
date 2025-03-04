<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Marcel Smarczyk
 */
class HomeCtrl {
    
    public function action_Home() {
		        
        $variable = 123;




        App::getSmarty()->display("home.tpl");
        
    }
    
}
