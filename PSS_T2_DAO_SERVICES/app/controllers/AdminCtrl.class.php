<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\AdminForm;
use core\SessionUtils;

/**
 * @author Marcel Smarczyk 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */
class AdminCtrl {

    private $idUser;
    private $ActiveOrg;
    private $userInfo;
    

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AdminForm();
    }
    


    public function loadOrgs(){
        try {
            $this->orgs = App::getDB()->select(
                "app_user_org", [
                    "[>]app_org" => ["idorg" => "id"]
                ], [
                    "app_org.id",
                    "app_org.name",
                    "app_org.description",
                    "app_user_org.idUser"
                ], [
                    "idUser" => $this->idUser
                ]
            );

                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu organizacji');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
    }


    public function action_Admin() {
                
        $this->idUser = SessionUtils::load('userid',true);
        $this->userName = SessionUtils::load('username',true);

        $this->form->idOrg = ParamUtils::getFromGet('idOrg');
        $this->form->idPro = ParamUtils::getFromGet('idPro');
       

            $this->loadOrgs();
            $this->pros='null';
            $this->tsks='null'; 
           
                try {
                    $sqlUsers="select * from app_user";
                    $users = App::getDB()->query($sqlUsers)->fetchAll();
                        } catch (\PDOException $e) {
                            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu użytkowników');
                            if (App::getConf()->debug)
                                Utils::addErrorMessage($e->getMessage());
                        }
            
        App::getSmarty()->assign("value",$this->userName);
        App::getSmarty()->assign("ActiveOrg" ,$this->ActiveOrg);
        App::getSmarty()->assign("users",$users);
        App::getSmarty()->display("Admin.tpl");
        
    }

    public function validateAdmindelete() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->idUser = ParamUtils::getFromRequest('user',true);
        if (!empty(trim($this->idUser))) {
            return true; 
        }
            return false;
	}

    public function action_Admindelete(){		
		// 1. walidacja id osoby do usuniecia
		if ( $this->validateAdmindelete() ){
			try{
                    App::getDB()->delete("app_tsk",[
                        "CreatedBy" => $this->idUser
                    ]);
                    App::getDB()->delete("app_pro",[
                        "CreatedBy" => $this->idUser
                    ]);
                    App::getDB()->delete("app_org",[
                        "CreatedBy" => $this->idUser
                    ]);
                    App::getDB()->delete("app_user_org",[
                        "idUser" => $this->idUser
                    ]);
                    App::getDB()->delete("app_user_role",[
                        "idUser" => $this->idUser
                    ]);
                    App::getDB()->delete("app_user",[
                        "idUser" => $this->idUser
                    ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu nazwy aktualnej organizacji');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
		}
        App::getRouter()->redirectTo('Admin');
	}



// nowe



    public function validateAdmininfo() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->idUser = ParamUtils::getFromRequest('user',true);
        $this->userName = SessionUtils::load('username',true);
        if (!empty(trim($this->idUser))) {
            return true; 
        }
            return false;
	}

    public function action_Admininfo(){		
		// 1. walidacja id osoby do usuniecia
		if ( $this->validateAdmininfo() ){
			try{
                $this->userInfo = App::getDB()->select(
                    "app_user", [
                        "idUser",
                        "login",
                        "email",
                        "CreatedAt",
                        "isActive"
                    ], [
                        "idUser" => $this->idUser
                    ]
                );
                //print_r($this->userInfo);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu danych użytkownika');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
		}
        App::getSmarty()->assign("value",$this->userName);
        App::getSmarty()->assign("ActiveOrg" ,$this->ActiveOrg);
        App::getSmarty()->assign("userInfo",$this->userInfo);
        App::getSmarty()->display("AdminUsersInfo.tpl");
	}







}




