<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions
Utils::addRoute('home', 'HomeCtrl');

//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('register',        'LoginCtrl');


Utils::addRoute('dashboard', 'DashboardCtrl', ['user','admin']); 

Utils::addRoute('Editorg', 'EditCtrl', ['user','admin']); 
Utils::addRoute('Editsaveorg', 'EditCtrl', ['user','admin']); 
Utils::addRoute('Editdeleteorg', 'EditCtrl', ['user','admin']); 

Utils::addRoute('Editpro', 'EditCtrl', ['user','admin']); 
Utils::addRoute('Editsavepro', 'EditCtrl', ['user','admin']); 
Utils::addRoute('Editdeletepro', 'EditCtrl', ['user','admin']); 

Utils::addRoute('Edittsk', 'EditCtrl', ['user','admin']); 
Utils::addRoute('Editsavetsk', 'EditCtrl', ['user','admin']); 
Utils::addRoute('Editdeletetsk', 'EditCtrl', ['user','admin']); 


Utils::addRoute('Admin', 'AdminCtrl', ['admin']); 
Utils::addRoute('Admindelete', 'AdminCtrl', ['admin']); 
Utils::addRoute('Admininfo', 'AdminCtrl', ['admin']); 

Utils::addRoute('Management', 'ManagementCtrl', ['user','admin']);
Utils::addRoute('Managementjoin', 'ManagementCtrl', ['user','admin']); 
Utils::addRoute('Managementowner', 'ManagementCtrl', ['user','admin']);
Utils::addRoute('Managementownersave', 'ManagementCtrl', ['user','admin']);



//Utils::addRoute('dashboard', 'DashboardCtrl', ['user','admin']); 