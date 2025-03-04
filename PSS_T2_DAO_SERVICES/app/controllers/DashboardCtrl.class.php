<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\DashboardForm;
use core\SessionUtils;

/**
 * Dashboard built in Amelia *
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
class DashboardCtrl {

    private $idUser;
    private $userName;
    private $data;
    private $orgs;
    private $pros;
    private $tsks;
    private $idOrg;
    private $ActiveOrg;
    private $ActivePro;
    private $ActiveTsk;
    private $search;
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new DashboardForm();
    }
    





    public function loadOrgs(){
    //Print    $this->idUser ;
    
    $this->search = ParamUtils::getFromRequest('search',true);

    if(!empty(trim($this->search))) {
        $sqladd="where name like '%$this->search%'";
    }else{
        $sqladd="";
    }
    $sqlLoadOrgs = "

    WITH tmp AS (
        SELECT idOrg, COUNT(*) AS waitUsers
        FROM app_user_org
        WHERE idRole = 9999
        GROUP BY idOrg
    )
    select * from
    (SELECT 
        o.id, 
        o.name, 
        o.description, 
        uo.idUser AS dostep_dla_u, 
        u.login AS nzw_w, 
        o.CreatedAt,
        t.waitUsers
    FROM app_user_org uo
    LEFT JOIN app_org o ON uo.idOrg = o.id
    LEFT JOIN app_user u ON o.CreatedBy = u.idUser
    LEFT JOIN tmp t ON t.idOrg = o.id
    WHERE uo.idUser = $this->idUser AND uo.idRole != 9999 and uo.idRole != 9998
    
    UNION
    
    SELECT 
        o.id, 
        o.name, 
        o.description, 
        o.CreatedBy AS dostep_dla_u, 
        u.login AS nzw_w, 
        o.CreatedAt,
        t.waitUsers
    FROM app_org o
    LEFT JOIN app_user u ON u.idUser = o.CreatedBy
    LEFT JOIN tmp t ON t.idOrg = o.id
    WHERE o.CreatedBy = $this->idUser) z $sqladd
    ";

        try {
            $this->orgs = App::getDB()->query($sqlLoadOrgs)->fetchAll();
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu organizacji');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }


    public function loadPros(){
        try {
            $this->pros = App::getDB()->select(
                "app_pro", [
                    "app_pro.id",
                    "app_pro.name",
                    "app_pro.idOrg",
                    "app_pro.description",
                    "app_pro.isActive"
                ], [
                    "idOrg" => $this->form->idOrg
                ]
            );

                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu projektów Projetów');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
    }




    public function loadTsks(){
        $sqlLoadTsks = "
        select x.id,x.name,x.idPro, x.description, x.status, y.idOrg from app_tsk x 
        left join app_pro y on x.idPro = y.id
        where x.idPro=".$this->form->idPro;
        try {
            $this->tsks = App::getDB()->query($sqlLoadTsks)->fetchAll();
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu Zadań ');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }


    public function getOrganizationName($orgId){
        try {
            $this->ActiveOrg = App::getDB()->select(
                "app_org", [
                    "id",
                    "name"
                ], [
                    "id" => $orgId
                ]
            );
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu nazwy aktualnej organizacji');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
    }

    public function getProjectName($orgId, $proId){
        try {
            $this->ActivePro = App::getDB()->select(
                "app_pro", [
                    "id",
                    "name"
                ], [
                    "idOrg" => $orgId,
                    "id" => $proId,
                ]
            );
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd w pobieraniu nazwy aktualnej projektu organizacji');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
    }


    public function action_Dashboard() {
                
        $this->idUser = SessionUtils::load('userid',true);
        $this->userName = SessionUtils::load('username',true);
        $this->form->idOrg = ParamUtils::getFromGet('idOrg');
        $this->form->idPro = ParamUtils::getFromGet('idPro');
       

        if(isset($this->form->idOrg)){
            if(isset($this->form->idPro)){
                //print "pokaż zadania";
                $this->loadOrgs();
                $this->loadTsks();
                $this->getOrganizationName($this->form->idOrg);
                $this->getProjectName($this->form->idOrg,$this->form->idPro);
            } else{
                //print "pokaż projekty";
                $this->loadOrgs();
                $this->loadPros();
                $this->getOrganizationName($this->form->idOrg);
            }
        } else {
            //print "pokaż Organizacje";
            $this->loadOrgs();
        }
        
        // App::getMessages()->addMessage(new Message("Dashboard dooopa", Message::INFO));
        // Utils::addInfoMessage($this->userName);
        //print_r($this->orgs);



        if(RoleUtils::inRole("admin")){
            $admin = 1;
        } else {
            $admin = 0;
        } 

        App::getSmarty()->assign("admin" ,$admin);
        App::getSmarty()->assign("orgs" ,$this->orgs);
        App::getSmarty()->assign("pros" ,$this->pros);
        App::getSmarty()->assign("tsks" ,$this->tsks);
        App::getSmarty()->assign("value",$this->userName);
        App::getSmarty()->assign("ActiveOrg" ,$this->ActiveOrg);
        App::getSmarty()->assign("ActivePro",$this->ActivePro);
        App::getSmarty()->assign("ActiveTsk",$this->ActiveTsk);
        App::getSmarty()->display("Dashboard.tpl");
        
    }
    
}
