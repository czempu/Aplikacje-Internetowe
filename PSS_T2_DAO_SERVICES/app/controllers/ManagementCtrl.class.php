<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\ManagementForm;
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
class ManagementCtrl {

    private $idUser;
    private $ActiveOrg;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new ManagementForm();
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


    public function action_Management() {
                
        $this->idUser = SessionUtils::load('userid',true);
        $this->userName = SessionUtils::load('username',true);

        $this->form->idOrg = ParamUtils::getFromGet('idOrg');
        $this->form->idPro = ParamUtils::getFromGet('idPro');
       

            $this->loadOrgs();
            $this->pros='null';
            $this->tsks='null'; 
           
                try {
                    $sqlOrganizations="-- Rekordy z idRole = 9999
SELECT o.id, o.name, uo.idRole
FROM app_user_org uo
LEFT JOIN app_org o ON o.id = uo.idOrg
WHERE uo.idUser = $this->idUser
  AND uo.idRole = 9999

UNION

-- Rekordy z idRole = NULL (nawet jeśli nie ma przypisania z 9999)
SELECT o.id, o.name, NULL AS idRole
FROM app_user_org uo
LEFT JOIN app_org o ON o.id = uo.idOrg
WHERE uo.idUser = $this->idUser
  AND uo.idRole IS NULL

UNION

-- Rekordy, gdzie nie ma przypisania w ogóle (NULL i NULL)
SELECT o.id, o.name, NULL AS idRole
FROM app_org o
WHERE o.CreatedBy != $this->idUser
  AND NOT EXISTS (
    SELECT 1
    FROM app_user_org uo
    WHERE uo.idOrg = o.id
      AND uo.idUser = $this->idUser
  );";
                    $Organizations = App::getDB()->query($sqlOrganizations)->fetchAll();
                        } catch (\PDOException $e) {
                            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu użytkowników');
                            if (App::getConf()->debug)
                                Utils::addErrorMessage($e->getMessage());
                        }
            
        App::getSmarty()->assign("value",$this->userName);
        App::getSmarty()->assign("ActiveOrg" ,$this->ActiveOrg);
        App::getSmarty()->assign("Organizations",$Organizations);
        App::getSmarty()->display("Management.tpl");
        
    }

    public function validateManagementjoin() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->organization = ParamUtils::getFromRequest('organization',true);
        if (!empty(trim($this->form->organization))) {
            return true; 
        }
            return false;
	}
    
    public function action_Managementjoin() {
                
        $this->idUser = SessionUtils::load('userid',true);
        $this->userName = SessionUtils::load('username',true);
        $this->form->idOrg = ParamUtils::getFromGet('idOrg');
        $this->form->idPro = ParamUtils::getFromGet('idPro');
       

            $this->loadOrgs();
            $this->pros='null';
            $this->tsks='null'; 
           
             if($this->validateManagementjoin()){  
        
            //dodanie użytkownika do bazy
            App::getDB()->insert("app_user_org", [
                "idUser" => $this->idUser,
                "idOrg" => $this->form->organization,
                "idRole" => 9999
                    ]
            );
        Utils::addInfoMessage('Pomyślnie zapisano rekord');
        
        App::getRouter()->redirectTo('Management');
        }
        else{
            App::getRouter()->redirectTo('Management');
        }
    }


public function chceckIsOwner(){
    $this->form->organization = ParamUtils::getFromRequest('organization',true);
    $this->idUser = SessionUtils::load('userid',true);
    $sqlCheckOwner="select count(*) as isOwner from app_org o 
    where o.CreatedBy = $this->idUser and id=".$this->form->organization;
    $isOwner = App::getDB()->query($sqlCheckOwner)->fetchAll();
    // print_r($isOwner);
    // exit();
    if($isOwner[0]['isOwner'] == 1){
        return true;
    } else{
        return false;
    }

}

public function validateManagementowner() {
    $this->form->organization = ParamUtils::getFromRequest('organization',true);
    if (!empty(trim($this->form->organization))) {
        return true; 
    }
        return false;
}

public function action_Managementowner() {
            
    $this->idUser = SessionUtils::load('userid',true);
    $this->userName = SessionUtils::load('username',true);
    $this->form->idOrg = ParamUtils::getFromGet('idOrg');
    $this->form->idPro = ParamUtils::getFromGet('idPro');
   

        $this->loadOrgs();
        $this->pros='null';
        $this->tsks='null'; 

        //if($this->chceckIsOwner()){

            if($this->validateManagementowner() && $this->chceckIsOwner()){  
                try {
                    $sqlUsers="select uo.idOrg, u.idUser, uo.idRole,u.login  from app_user_org uo 
                    left join app_user u on u.idUser = uo.idUser 
                    where uo.idRole!=9998 and uo.idOrg = ".$this->form->organization;
                    $users = App::getDB()->query($sqlUsers)->fetchAll();
                        } catch (\PDOException $e) {
                            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu użytkowników');
                            if (App::getConf()->debug)
                                Utils::addErrorMessage($e->getMessage());
                        }
                App::getSmarty()->assign("value",$this->userName);
                App::getSmarty()->assign("ActiveOrg" ,$this->ActiveOrg);
                App::getSmarty()->assign("users",$users);
        
                App::getSmarty()->display("Managementowner.tpl");
            }
          else{
             App::getRouter()->redirectTo('dashboard');
         }
        

}

    


















public function validateManagementownersave() {
    $this->form->organization = ParamUtils::getFromRequest('organization',true);
    $this->form->user = ParamUtils::getFromRequest('user',true);
    $this->form->idRole = ParamUtils::getFromRequest('idRole',true);

    if (!empty(trim($this->form->organization)) && !empty(trim($this->form->user)) && !empty(trim($this->form->idRole))) {
        return true; 
    }
        return false;
}

public function action_Managementownersave() {
            
    $this->idUser = SessionUtils::load('userid',true);
    $this->userName = SessionUtils::load('username',true);
    $this->form->idOrg = ParamUtils::getFromGet('idOrg');
    $this->form->idPro = ParamUtils::getFromGet('idPro');
   

        $this->loadOrgs();
        $this->pros='null';
        $this->tsks='null'; 
       
        if($this->validateManagementownersave() && $this->chceckIsOwner()){  
    

            try {
                App::getDB()->update("app_user_org", [
                    "idRole" => $this->form->idRole
                ], [ 
                    "idUser" => $this->form->user,
                    "idOrg" => $this->form->organization
                ]);
                    } catch (\PDOException $e) {
                        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu użytkowników');
                        if (App::getConf()->debug)
                            Utils::addErrorMessage($e->getMessage());
                    }
            
            App::getRouter()->redirectTo('Managementowner&organization='.$this->form->organization);
        }
        App::getRouter()->redirectTo('Managementowner&organization='.$this->form->organization);
}

    































}

