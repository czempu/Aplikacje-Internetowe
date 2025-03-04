<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;



class LoginCtrl {

    private $form;
    private $data;
    private $idUser;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function generateSession() {


        $this->data = App::getDB()->select(
            "app_user",
            [
                "[>]app_user_role" => ["idUser" => "idUser"],
                "[>]app_role" => ["app_user_role.idRole" => "idRole"]
            ],
            [
                "app_role.roleName",
                "app_user.idUser",
                "app_user.login"
            ],
            [
                "app_user.password" => $this->form->pass,
                "app_user.login" => $this->form->login
            ]
        );


        if(count($this->data) > 0){
                RoleUtils::addRole('user'); //jeśli ma jakiekolwiek uprawnienia może dostać się do dashbordu
                SessionUtils::store('userid', $this->data[0]["idUser"]);
                SessionUtils::store('username',$this->form->login);
                //CIASTECZKO PRZECHOWUJĄCE TOKEN SESJI UŻYTKOWNIKA
                setcookie(
                        "session_token",
                        "token_test",
                        time() + 3600,
                        "/",
                        "localhost",
                        false,
                        false
                    );
                $this->data = App::getDB()->select(
                    "app_user",
                    [
                        "[>]app_user_role" => ["idUser" => "idUser"],
                        "[>]app_role" => ["app_user_role.idRole" => "idRole"]
                    ],
                    [
                        "app_role.roleName",
                        "app_user.idUser",
                        "app_user.login"
                    ],
                    [
                        "app_user.password" => $this->form->pass,
                        "app_user.login" => $this->form->login,
                        "app_user_role.idRole" => 1
                    ]
                );
                if(count($this->data) > 0){
                    RoleUtils::addRole('admin');
                }

        }   else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }
    }




    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

            $this->form->pass=hash('sha256', $this->form->pass . 'tst');

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
        try {
            //wyciągnięcie id użytkownika
            $this->idUser = App::getDB()->select("app_user",[
                "idUser"
                ],[
                "idUser" =>  $this->form->login
                    ]
            );
        
        Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania używkownika');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

        $this->generateSession();



        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("dashboard");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('home');
    }




    
    public function validateRegister() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->repass = ParamUtils::getFromRequest('repass');
        $this->form->mail = ParamUtils::getFromRequest('mail');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login) || !isset($this->form->pass) || !isset($this->form->mail))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->form->repass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->form->mail)) {
            Utils::addErrorMessage('Nie podano maila');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
        
        
        if(!($this->is_valid_email($this->form->mail))){
            Utils::addErrorMessage('Niepoprawny maila');
        }   
        
        if($this->form->pass!=$this->form->pass){
            Utils::addErrorMessage('Passwords doesnt match');
        }  


        $this->form->pass=hash('sha256', $this->form->pass . 'tst');

        try {
        $countUsers = App::getDB()->count(
            "app_user",[
                "login" =>  $this->form->login
            ]
        );
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }



        try {
        $countMails = App::getDB()->count(
            "app_user",[
                "email" =>  $this->form->mail
            ]
        );
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        
        if($countUsers > 0){
            Utils::addErrorMessage('login zajęty');
            return false;
        }
        if($countMails > 0){
            Utils::addErrorMessage('email zajęty');
            return false;
        }


/////////////////////////////////////////////////////



        try {
                //dodanie użytkownika do bazy
                App::getDB()->insert("app_user", [
                    "login" => $this->form->login,
                    "password" => $this->form->pass,
                    "email" => $this->form->mail
                        ]
                );
            
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania używkownika');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }


        try {
            //wyciągnięcie id użytkownika
            $this->idUser = App::getDB()->select("app_user",[
                "idUser"
                ],[
                "login" =>  $this->form->login
                    ]
            );
        
        Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania używkownika');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }


        try {
            //dodanie podstawowej roli użytkownika
            App::getDB()->insert("app_user_role", [
                "idUser" => $this->idUser[0]['idUser'],
                "idRole" => 2
                    ]
            );
        
            Utils::addInfoMessage('Pomyślnie zapisano rekord');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania używkownika');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


        $this->generateSession();
        App::getRouter()->redirectTo('dashboard');
    }

    public function action_register() {
        if ($this->validateRegister()) {
            //zarejestrowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            App::getRouter()->redirectTo('dashboard');
        } else {
            //niezarejestrowany => pozostań na stronie logowania
            $this->generateViewRegister();
        }

    }


    public function is_valid_email($email) {
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        return preg_match($pattern, $email) === 1;
    }

    public function generateViewRegister() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('RegisterView.tpl');
    }



    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
