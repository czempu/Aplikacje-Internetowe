<?php
$lang['action_freshen'] = 'Réparer/Rafraîchir une installation CMSMS %s';
$lang['action_install'] = 'Créer une nouvelle installation CMSMS %s';
$lang['action_upgrade'] = 'Mise à jour de CMSMS à la version %s';
$lang['advanced_mode'] = 'Activer le mode avancé&nbsp;';
$lang['apptitle'] = 'Assistant Installation/Mise à jour';
$lang['assets_dir_exists'] = 'Le dossier assets existe déjà';
$lang['available_languages'] = 'Langues disponibles&nbsp;';
$lang['build_date'] = 'Date de construction&nbsp;';
$lang['changelog_uc'] = 'Changelog';
$lang['cleaning_files'] = 'Nettoyage des fichiers qui ne sont plus applicables à cette version';
$lang['config_writable'] = 'Vérification des permissions d\'écriture du fichier config';
$lang['confirm_freshen'] = 'Êtes-vous sûr(e) de vouloir rafraîchir l’installation existante de CMSMS ? A utiliser avec une extrême prudence !';
$lang['confirm_upgrade'] = 'Êtes-vous sûr(e) de vouloir entamer le processus de mise à jour ?';
$lang['curl_extension'] = 'Vérification de l\'extension cURL';
$lang['create_assets_structure'] = 'Création d\'un emplacement pour les ressources de fichiers';
$lang['database_support'] = 'Vérification de la compatibilité des pilotes de base de données';
$lang['desc_wizard_step1'] = 'Démarrage de l\'installation ou de la mise à jour';
$lang['desc_wizard_step2'] = 'Analyse du dossier d\'installation pour trouver une installation existante';
$lang['desc_wizard_step3'] = 'Vérification que tout est OK pour installer le noyau CMSMS™';
$lang['desc_wizard_step4'] = 'Pour les nouvelles installations ou pour rafraîchir l\'installation, entrez les informations de base de la configuration';
$lang['desc_wizard_step5'] = 'Pour les nouvelles installations, entrez les informations du compte Admin';
$lang['desc_wizard_step6'] = 'Pour les nouvelles installations, entrez quelques détails basiques à propos du site';
$lang['desc_wizard_step7'] = 'Extraction des fichiers';
$lang['desc_wizard_step8'] = 'Création ou mise à jour du schéma de base de données, définition des événements initiaux, autorisations, comptes d\'utilisateurs, gabarits, feuilles de style et contenus';
$lang['desc_wizard_step9'] = 'Installation et/ou mise à jour des modules selon les besoins, écriture du fichier de configuration et nettoyage';
$lang['destination_directory'] = 'Dossier d\'installation&nbsp;';
$lang['dest_writable'] = 'Autorisation en écriture dans le dossier d\'installation';
$lang['disable_functions'] = 'Vérification des fonctions désactivées';
$lang['done'] = 'Terminé';
$lang['email_accountinfo_message'] = 'Le processus d\'installation CMS Made Simple est terminé.

Cet email contient des informations sensibles et doit être stocké dans un emplacement sécurisé.

Voici les détails de votre installation :
Nom d\'utilisateur : %s
mot de passe : %s
Dossier d\'installation : %s
root URL : %s';
$lang['email_accountinfo_message_exp'] = 'Le processus d\'installation CMS Made Simple est terminé.

Cet email contient des informations sensibles et doit être stocké dans un emplacement sécurisé.

Voici les détails de votre installation :
Nom d\'utilisateur : %s
mot de passe : %s
Dossier d\'installation : %s';
$lang['email_accountinfo_subject'] = 'Installation CMS Made Simple™ réussie';
$lang['emailaccountinfo'] = 'Envoi par mail des informations du compte';
$lang['emailaddr'] = 'Adresse email';
$lang['error_adminacct_emailaddr'] = 'L\'adresse e-mail spécifiée n\'est pas valide';
$lang['error_adminacct_emailaddrrequired'] = 'Vous avez choisi d\'envoyer les informations du compte par email, mais n\'avez pas entré une adresse email valide';
$lang['error_adminacct_password'] = 'Le mot de passe spécifié n\'est pas valide (doit comporter au moins six caractères)';
$lang['error_adminacct_repeatpw'] = 'Les mots de passe que vous avez entrés ne correspondent pas.';
$lang['error_adminacct_username'] = 'Le nom d\'utilisateur que vous avez spécifié n\'est pas valide. Essayez de nouveau';
$lang['error_admindirrenamed'] = 'Il semble que pour des raisons de sécurité <a href="http://docs.cmsmadesimple.org/general-information/securing-cmsms#renaming-admin-folder" target="_blank" class="external">vous avez renommé</a> votre dossier admin de CMSMS™. Vous devrez obligatoirement le renommer en admin et modifier la variable $config[\'admin_dir\'] du config.php avant de reprendre le processus de la mise à jour. Rechargez la page pour continuer.';
$lang['error_backupconfig'] = 'Nous ne pourrions pas correctement sauvegarder le fichier de config';
$lang['error_checksum'] = 'Le checksum du fichier extrait ne correspond pas à l\'original';
$lang['error_cmstablesexist'] = 'Il semble qu\'il existe déjà une installation de CMSMS™ sur cette base de données. Merci d\'entrer une information différente pour la base de données. Si vous souhaitez, vous pouvez utiliser un préfixe de table différent. Mais vous devriez peut-être redémarrer le processus d\'installation et activer le mode avancé.';
$lang['error_createtable'] = 'Problème de création des tables de la base de données... c\'est peut-être un problème de permissions';
$lang['error_dbconnect'] = 'Impossible de se connecter à la base de données. Veuillez vérifier les informations d\'identification que vous avez fournies';
$lang['error_dirnotvalid'] = 'Le dossier %s n\'existe pas (ou n\'est pas accessible en écriture)';
$lang['error_droptable'] = 'Problème de suppression de table de la base de données... c\'est peut-être un problème de permissions';
$lang['error_filenotwritable'] = 'Le fichier %s n\'a pas pu être écrasé (problème permissions)';
$lang['error_internal'] = 'Désolé, quelque chose a mal fonctionné... (Erreur interne) (%s)';
$lang['error_invalid_directory'] = 'Il semble que le dossier que vous avez choisi pour installer est déjà dans un dossier utilisé par le programme d\'installation lui-même';
$lang['error_invalidconfig'] = 'Erreur dans le fichier de configuration ou fichier de configuration manquant (config.php)';
$lang['error_invaliddbpassword'] = 'Le mot de passe de la base de données contient des caractères non valides qui ne peuvent pas être sauvegardés en toute sécurité.';
$lang['error_invalidkey'] = 'Variable invalide ou clef %s pour classe %s';
$lang['error_invalidparam'] = 'Paramètre invalide ou valeur de paramètre : %s';
$lang['error_invalidtimezone'] = 'Le fuseau horaire spécifié n\'est pas valide';
$lang['error_invalidqueryvar'] = 'La saisie contient des caractères non valides. Veuillez utiliser uniquement des caractères alphanumériques et l\'underscore.';
$lang['error_missingconfigvar'] = 'La clef "%s" est manquante ou invalide dans le fichier config.ini';
$lang['error_noarchive'] = 'Problème pour trouver le fichier archive... Merci de redémarrer';
$lang['error_nlsnotfound'] = 'Problème pour trouver les fichiers NLS dans l\'archive';
$lang['error_nodatabases'] = 'Aucune extension compatible base de données n\'a été trouvée';
$lang['error_nodbhost'] = 'Veuillez entrer un nom d\'hôte valide (ou adresse IP) pour la connexion de base de données';
$lang['error_nodbname'] = 'Veuillez entrer le nom d\'une base de données valide sur l\'hôte spécifié ci-dessus';
$lang['error_nodbpass'] = 'Veuillez entrer un mot de passe valide pour l\'authentification avec la base de données';
$lang['error_nodbprefix'] = 'Veuillez entrer un préfixe valide pour les tables de la base de données';
$lang['error_nodbtype'] = 'Veuillez sélectionner un type de base de données';
$lang['error_nodbuser'] = 'Veuillez entrer un nom d\'utilisateur valide pour l\'authentification avec la base de données';
$lang['error_nodestdir'] = 'Dossier d\'installation non activé';
$lang['error_nositename'] = 'SiteName (Nom du site) est un paramètre obligatoire. Merci d’entrer un nom approprié pour votre site Web.';
$lang['error_notimezone'] = 'Veuillez entrer un fuseau horaire valide pour ce serveur';
$lang['error_overwrite'] = 'Problème de permissions : écriture impossible de %s';
$lang['error_sendingmail'] = 'Erreur dans l\'envoi du mail';
$lang['error_tzlist'] = 'Un problème est survenu pour la récupération de la liste des identificateurs de fuseau horaire';
$lang['errorlevel_estrict'] = 'Test pour E_STRICT';
$lang['errorlevel_edeprecated'] = 'Test pour E_DEPRECATED';
$lang['edeprecated_enabled'] = 'E_DEPRECATED est activé dans "error_reporting" de PHP. Bien que cela n\'empêchera pas CMSMS™ de fonctionner, il peut se produire des affichages d\'avertissements sur l\'écran, en particulier des anciens modules tiers.';
$lang['estrict_enabled'] = 'E_STRICT est activé dans "error_reporting" de PHP. Bien que cela n\'empêchera pas CMSMS™ de fonctionner, il peut se produire des affichages d\'avertissements sur l\'écran, en particulier des anciens modules tiers.';
$lang['fail_assets_dir'] = 'Un dossier assets existe déjà. Cette application peut écrire dans ce dossier pour rationaliser l\'emplacement des fichiers gabarits (templates), CSS, module_custom, admin_custom, ... . Veuillez vous assurer d\'avoir une sauvegarde.';
$lang['fail_assets_msg'] = 'Un dossier assets existe déjà. Cette application peut écrire dans ce dossier pour rationaliser l\'emplacement des fichiers gabarits (templates), CSS, module_custom, admin_custom, ... . Veuillez vous assurer d\'avoir une sauvegarde.';
$lang['fail_config_writable'] = 'Le processus HTTP ne peut pas écrire dans le fichier config.php. Essayer de modifier les autorisations sur ce fichier à 777, jusqu\'à ce que le processus de mise à jour soit terminé.';
$lang['fail_curl_extension'] = 'L\'extension cURL n\'a pas été trouvée. Ce n\'est pas un problème critique mais cela peut causer des soucis avec certains modules tiers';
$lang['fail_database_support'] = 'Aucun pilote compatible avec la base de données';
$lang['fail_file_get_contents'] = 'La fonction file_get_contents n\'existe pas ou est désactivée. CMSMS™ ne peut pas continuer (le programme d\'installation échouera probablement)';
$lang['fail_file_uploads'] = 'Les fonctionnalités d\'uploads de fichiers sont désactivés, dans cet environnement. Plusieurs fonctions de CMSMS™ ne fonctionneront pas dans cet environnement.';
$lang['fail_func_json'] = 'La fonctionnalité "JSON" n\'a pas été trouvée.';
$lang['fail_func_gzopen'] = 'La fonction "gzopen" n\'a pas été trouvée.';
$lang['fail_func_md5'] = 'La fonctionnalité MD5 n\'a pas été trouvée.';
$lang['fail_func_tempnam'] = 'La fonctionnalité "tempnam" n\'existe pas. C\'est une fonction requise pour le fonctionnement de CMSMS™';
$lang['fail_func_ziparchive'] = 'La fonctionnalité ZipArchive n\'a pas été trouvée. Cela peut limiter les fonctions d\'installation.';
$lang['fail_ini_set'] = 'Il semble que nous ne pouvons pas changer les paramètres ini. Ceci pourrait causer des problèmes dans les modules tiers (ou lorsque vous activez le mode debug). C\'est une fonction requise pour la fonctionnalité de CMSMS™';
$lang['fail_intl_support'] = 'L\'extension d\'internationalisation de PHP (Intl) n’est pas disponible';
$lang['fail_magic_quotes_runtime'] = 'Il semble que les "magic quotes" sont activées dans votre configuration. Merci de les désactiver puis réessayer';
$lang['fail_max_execution_time'] = 'Votre "max execution time" de %s ne répond pas à la valeur minimale de %s. Nous vous recommandons de l\'augmenter à %s ou supérieur';
$lang['fail_memory_limit'] = 'Valeur de "memory_limit" est trop faible. Vous avez %s, mais il faut un minimum de %s et %s est recommandé';
$lang['fail_multibyte_support'] = 'Votre support Multibyte (jeux de caractères multi-octets) n\'est pas activé dans votre configuration';
$lang['fail_output_buffering'] = 'Mise en mémoire tampon de sortie (Output Buffering) n\'est pas activée.';
$lang['fail_open_basedir'] = 'L\'option "open_basedir" est activée. CMSMS™ exige qu\'elle soit désactivée';
$lang['fail_php_version'] = 'La version de PHP pour CMSMS™ est cruciale. La version minimum accepté est %s, même si nous recommandons %s ou supérieure. Vous avez %s';
$lang['fail_post_max_size'] = 'La taille %s de "post_max_size" ne répond pas cependant la valeur minimale de %s. Vous devriez porter à %s et faire en sorte qu\'il soit plus grand que "upload_max_filesize"';
$lang['fail_pwd_writable2'] = 'Le processus HTTP doit être en mesure d\'écrire dans le dossier d\'installation (ainsi que dans tous les fichiers et sous-dossiers), afin d\'installer les fichiers. Il n\'y a pas d\'autorisation en écriture pour (au moins) %s';
$lang['fail_register_globals'] = 'Veuillez désactiver "register_globals" dans votre configuration de PHP';
$lang['fail_remote_url'] = 'Nous avons rencontré des problèmes pour vous connecter à une URL distante. Vous limitez ainsi certaines des fonctionnalités de CMS Made Simple™';
$lang['fail_safe_mode'] = 'CMSMS™ ne fonctionnera pas correctement dans un environnement où le "safe_mode" est activé. "safe_mode" est déconseillé comme un mécanisme défaillant et sera supprimée dans les futures versions de PHP. (Disponible depuis PHP 4.1.0. Supprimé en PHP 5.4.0)';
$lang['fail_session_save_path_exists'] = 'La variable session.save_path est non valide ou le répertoire n\'existe pas';
$lang['fail_session_save_path_writable'] = 'Le chemin du répertoire session n\'est pas accessible en écriture';
$lang['fail_session_use_cookies'] = 'CMSMS requiert que PHP soit configuré pour stocker les clefs de session dans un cookie';
$lang['fail_tmpfile'] = 'La fonction tmpfile() du système est non fonctionnelle. Cela est nécessaire pour extraire des archives. L\'option TMPDIR (chemin du dossier temporaire) peut être fourni à l\'installateur pour spécifier un dossier accessible en écriture. Voir le fichier README qui devrait être inclus dans ce répertoire.';
$lang['fail_tmp_dirs_empty'] = 'Les dossiers temporaires CMSMS <em>(tmp / cache et tmp / templates_c)</em> existent et ne sont pas vides. Veuillez les supprimer ou les vider.';
$lang['fail_xml_functions'] = 'L\'extension XML n\'a pas été trouvée. Activer cette extension dans votre environnement PHP';
$lang['failed'] = 'A échoué';
$lang['file_get_contents'] = 'Test pour la fonction "file_get_contents"';
$lang['file_installed'] = 'Installé %s';
$lang['file_uploads'] = 'Vérification pour le support upload de fichier';
$lang['finished_custom_freshen_msg'] = 'Votre installation a été rafraîchie ! Les fichiers de base ont été mis à jour, et un nouveau fichier de configuration a été créé. Veuillez consulter votre site Web afin de vous assurer que tout fonctionne correctement.';
$lang['finished_custom_install_msg'] = 'Super ! Nous avons terminé. Veuillez consulter votre site Web et vous connecter au panneau d’administration.';
$lang['finished_custom_upgrade_msg'] = 'Super! Tout est terminé. Veuillez consulter votre panneau d’administration de CMSMS™ et votre site Web pour vous assurer que tout est correct. <br><strong>Astuce :</strong> Maintenant c’est le bon moment pour faire une sauvegarde.';
$lang['finished_freshen_msg'] = 'Votre installation a été rafraîchie ! Les fichiers de base ont été mis à jour et un nouveau fichier de configuration a été créé. Vous pouvez maintenant <a href="%s">visiter votre site Web</a> ou vous connecter au <a href="%s">panneau d’administration</a>.';
$lang['finished_install_msg'] = 'Super ! Nous avons terminé. Vous pouvez maintenant <a href="%s">visiter votre site Web</a> ou vous connecter au <a href="%s">panneau d’administration</a>.';
$lang['finished_upgrade_msg'] = 'Super ! Tout est terminé. Visitez votre <a href="%s">site Web</a> et le <a href="%s"> panneau d’administration</a> pour vérifier si tout se comporte correctement. Vous pourriez avoir également à mettre à jour certains modules tiers. <br><strong>Astuce :</strong> n’oubliez pas de faire une sauvegarde après avoir vérifié si les comportements de l’administration et du site sont corrects.';
$lang['freshen'] = 'Rafraîchir l\'installation';
$lang['func_json'] = 'Vérification pour JSON, codage et décodage des fonctionnalités';
$lang['func_md5'] = 'Vérification de la fonctionnalité MD5';
$lang['func_tempnam'] = 'Vérification de la fonction "tempnam"';
$lang['func_gzopen'] = 'Vérification de la fonction "gzopen"';
$lang['func_ziparchive'] = 'Vérification de la fonction "ZipArchive"';
$lang['gd_version'] = 'Vérification de la version GD';
$lang['goback'] = 'Retour';
$lang['info_addlanguages'] = 'Sélectionnez des langues (outre l\'anglais) pour l\'installation. <strong>Remarque :</strong> toutes les traductions ne sont pas faites. (Utiliser la touche "CTRL" pour la multi sélection)';
$lang['info_adminaccount'] = 'Merci de fournir les informations d\'identification pour le compte d\'administrateur initial. Ce compte aura accès à toutes les fonctionnalités de la console d\'administration CMSMS™';
$lang['info_advanced'] = 'Le mode avancé permet plus d\'options dans la procédure d\'installation.';
$lang['info_dbinfo'] = 'CMS Made Simple™ stocke une grande quantité de données en base de données. Une connexion de base de données est obligatoire. En outre, les informations d\'identification utilisateur que vous fournirez doivent, avoir tous les privilèges sur la base de données spécifiée pour permettre la création, suppression et modification des tables, index et vues.';
$lang['info_errorlevel_edeprecated'] = 'E_DEPRECATED est une constante PHP de rapports d\'erreur ou d\'alertes d\'exécution. Bien que sur le noyau de CMSMS™ nous n\'utilisons plus de techniques obsolètes, certains modules peuvent ne pas être conformes. Nous recommandons de désactiver ce paramètre dans la configuration de PHP.';
$lang['info_errorlevel_estrict'] = 'E_STRICT est une constante PHP qui permet d\'obtenir des suggestions pour modifier votre code, assurant ainsi une meilleure interopérabilité et compatibilité de celui-ci. Bien que le noyau CMSMS™ tente de se conformer aux règles de niveau E_STRICT certains modules peuvent ne pas être conformes. Nous recommandons de désactiver ce paramètre dans la configuration de PHP.';
$lang['info_installcontent'] = 'Par défaut, ce programme d\'installation créera une série d\'exemples de pages, de feuilles de style et de gabarits dans CMSMS™. Les exemples de contenu fournissent de nombreuses informations et conseils afin de vous aider pour créer des sites Web avec CMSMS™. Il est utile de lire ces pages exemples. Toutefois, si vous êtes déjà familier avec CMS Made simple™ la désactivation de cette option créera seulement un ensemble minimal de gabarits, de feuilles de style et de pages de contenu.';
$lang['info_open_basedir_session_save_path'] = 'open_basedir est activé dans votre configuration PHP. Nous n\'avons pas pu tester pas correctement les capacités de session. Cependant, à ce point du processus d\'installation, tout semble indiquer, que les sessions fonctionnent correctement.';
$lang['info_pwd_writable'] = 'Cette application requiert l\'autorisation en écriture pour le dossier de travail courant';
$lang['info_queryvar'] = 'La variable de requête URL est utilisée en interne par CMSMS™ pour identifier la page demandée (par défaut "page"). Dans la plupart des cas, vous ne devriez pas avoir à en avoir besoin.';
$lang['info_sitename'] = 'Le nom du site est utilisé dans les gabarits par défaut comme titre. Veuillez entrer un nom lisible pour le site Web.';
$lang['info_timezone'] = 'Les informations de fuseau horaire sont nécessaire pour l\'affichage des calculs des heures/dates. Veuillez sélectionner le fuseau horaire du serveur.';
$lang['ini_set'] = 'Test si possibilité de changer les paramètres du fichier ini';
$lang['install'] = 'Installer';
$lang['install_attachstylesheets'] = 'Attacher les feuilles de style aux thèmes';
$lang['install_backupconfig'] = 'Sauvegarde du fichier de config';
$lang['install_createassets'] = 'Création des dossiers assets';
$lang['install_created_index'] = 'Index créé %s... : %s';
$lang['install_create_tables'] = 'Création des tables de base de données';
$lang['install_createconfig'] = 'Création du nouveau fichier de configuration';
$lang['install_createcontentpages'] = 'Création des pages de contenu par défaut';
$lang['install_created_table'] = 'Table créée %s... : %s';
$lang['install_createtablesindexes'] = 'Création des tables et index';
$lang['install_createtmpdirs'] = 'Création des dossiers temporaires';
$lang['install_creating_index'] = 'Index créé %s';
$lang['install_default_collections'] = 'Installation des collections par défaut';
$lang['install_defaultcontent'] = 'Installation du contenu par défaut';
$lang['install_detectlanguages'] = 'Détection des langues installées';
$lang['install_dropping_tables'] = 'Suppression de tables';
$lang['install_dummyindexhtml'] = 'Création des fichiers vides index.html';
$lang['install_extractfiles'] = 'Extraction des fichiers de l\'archive';
$lang['install_initevents'] = 'Création des évènements';
$lang['install_initsitegroups'] = 'Création des groupes initiaux';
$lang['install_initsiteperms'] = 'Définition des permissions initiales';
$lang['install_initsiteprefs'] = 'Définition des préférences initiales du site';
$lang['install_initsiteusers'] = 'Création du compte utilisateur initial';
$lang['install_initsiteusertags'] = 'Création des balises utilisateur (UDT) initiales';
$lang['install_module'] = 'Installation du module %s';
$lang['install_modules'] = 'Installation des modules disponibles';
$lang['install_passwordsalt'] = 'Définition de la valeur aléatoire du mot de passe (salt)';
$lang['install_requireddata'] = 'Définition des données initiales requises';
$lang['install_schema'] = 'Création du schéma de base de données';
$lang['install_setschemaver'] = 'Définition de la version du schéma';
$lang['install_setsequence'] = 'Réinitialisation des séquences tables';
$lang['install_setsitename'] = 'Définition du nom du site';
$lang['install_stylesheets'] = 'Création des feuilles de style par défaut';
$lang['install_templates'] = 'Création des gabarits par défaut';
$lang['install_templatetypes'] = 'Création des types de gabarit standard';
$lang['install_update_sequences'] = 'Mise à jour des séquences des tables';
$lang['install_updatehierarchy'] = 'Mise à jour des positions hiérarchiques des pages';
$lang['install_updateseq'] = 'Séquence de mise à jour pour %s';
$lang['installer_ver'] = 'Version de l\'installateur&nbsp;';
$lang['intl_support'] = 'Vérifier les fonctions d\'internationalisation';
$lang['legend'] = 'Légende';
$lang['magic_quotes_runtime'] = 'Vérification si les "magic_quotes" sont désactivées';
$lang['max_execution_time'] = 'Vérification de PHP "max_execution_time"';
$lang['meaning'] = 'Définition';
$lang['memory_limit'] = 'Vérification de la limite de mémoire PHP (memory_limit)';
$lang['msg_clearedcache'] = 'Cache serveur vidé';
$lang['msg_configsaved'] = 'Fichier de configuration existant enregistré sous %s';
$lang['msg_upgrade_module'] = 'Mise à jour du module %s';
$lang['msg_upgrademodules'] = 'Mise à jour des modules';
$lang['msg_yourvalue'] = 'Vous avez : %s';
$lang['multibyte_support'] = 'Vérification du support Multibyte (jeux de caractères multi-octets)';
$lang['next'] = 'Suivant';
$lang['no'] = 'Non';
$lang['none'] = 'Aucun';
$lang['open_basedir'] = 'Vérification de la restriction "open_basedir"';
$lang['open_basedir_session_save_path'] = 'open_basedir est activé. Impossible de tester le chemin du répertoire session.';
$lang['output_buffering'] = 'Vérification des buffers de sortie (output buffering)';
$lang['pass_config_writable'] = 'Le processus HTTP a l\'autorisation en écriture dans le fichier config.php';
$lang['pass_database_support'] = 'Au moins un pilote de base de données compatible trouvé';
$lang['pass_func_json'] = 'Fonctionnalité JSON détectée';
$lang['pass_func_md5'] = 'Fonctionnalité MD5 détectée';
$lang['pass_func_tempnam'] = 'La fonction "tempnam" existe';
$lang['pass_intl_support'] = 'Les fonctions d\'internationalisation semblent être activées';
$lang['pass_memory_limit_nolimit'] = 'Il n\'y a pas de limite à PHP memory_limit';
$lang['pass_multibyte_support'] = 'le support Multibyte semble être activé';
$lang['pass_php_version'] = 'La version PHP configurée actuellement ne répond pas aux exigences minimales. Le minimum nécessaire est PHP %s, mais nous recommandons PHP %s ou supérieur';
$lang['pass_pwd_writable'] = 'Le processus HTTP peut écrire dans le dossier d\'installation. Ceci est nécessaire pour l\'extraction des fichiers.';
$lang['password'] = 'Mot de passe (au moins six caractères)';
$lang['ph_sitename'] = 'Entrez un nom de site Web';
$lang['php_version'] = 'Version PHP';
$lang['post_max_size'] = 'Vérification de la taille maximale de données pouvant être enregistrées dans une seule requête POST';
$lang['prompt_addlanguages'] = 'Langues supplémentaires';
$lang['prompt_createtables'] = 'Création des tables de la base de données';
$lang['prompt_dbhost'] = 'Nom d\'hôte de la base de données';
$lang['prompt_dbinfo'] = 'Information sur la base de données';
$lang['prompt_dbname'] = 'Nom de la base de données';
$lang['prompt_dbpass'] = 'Mot de passe';
$lang['prompt_dbport'] = 'Port de la base de données';
$lang['prompt_dbprefix'] = 'Préfixe de la base de données';
$lang['prompt_dbtype'] = 'Type de la base de données';
$lang['prompt_dbuser'] = 'Nom d\'utilisateur';
$lang['prompt_dir'] = 'Dossier d\'installation&nbsp;';
$lang['prompt_installcontent'] = 'Installer les exemples de contenus et les gabarits';
$lang['prompt_queryvar'] = 'Variable d\'URL';
$lang['prompt_sitename'] = 'Nom de site Web';
$lang['prompt_timezone'] = 'Fuseau horaire du serveur';
$lang['pwd_writable'] = 'Dossier accessible en écriture';
$lang['queue_for_upgrade'] = 'File d\'attente des modules %s (autres que ceux du noyau) pour mise à jour à l\'étape suivante.';
$lang['readme_uc'] = 'Lisez-moi';
$lang['register_globals'] = 'Vérification si PHP "register globals" est désactivé';
$lang['remote_url'] = 'Vérification sur les connexions HTTP sortantes';
$lang['repeatpw'] = 'Répétez le mot de passe';
$lang['reset_site_preferences'] = 'Réinitialisation de certaines préférences du site';
$lang['reset_user_settings'] = 'Réinitialisation des préférences utilisateur';
$lang['retry'] = 'Nouvel essai';
$lang['safe_mode'] = 'Vérification si PHP "safe_mode" est désactivé';
$lang['saltpasswords'] = 'Salage des mots de passe (sécurisation)';
$lang['select_language'] = 'Veuillez sélectionner votre langue préférée dans la liste ci-dessous. 
Cela affectera uniquement le processus d\'installation/mise à jour et n\'aura aucun effet sur les paramètres par défaut de CMSMS™.';
$lang['send_admin_email'] = 'Envoi des informations d\'identification par email pour la connexion d\'administration';
$lang['session_capabilities'] = 'Test des capacités de session (les sessions utilisent des cookies et le chemin du répertoire de sauvegarde des sessions doit être accessible en écriture, etc.)';
$lang['session_save_path_exists'] = 'La variable session.save_path est valide ou le répertoire existe';
$lang['session_save_path_writable'] = 'Le chemin du répertoire session est accessible en écriture';
$lang['session_use_cookies'] = 'Vérification si les sessions PHP utilisent les cookies';
$lang['sometests_failed'] = 'Nous avons effectué de nombreux tests de votre environnement Web actuel. Bien qu\'aucun problème critique n\'ait été trouvé, nous vous recommandons de corriger les éléments suivants avant de continuer.';
$lang['step1_advanced'] = 'Mode avancé';
$lang['step1_destdir'] = 'Sélectionnez le dossier';
$lang['step1_info_destdir'] = '<strong>Attention :</strong> Ce programme peut installer ou mettre à jour plusieurs installations de CMS Made Simple™. Il est important de sélectionner correctement le dossier correspondant à une nouvelle installation ou à une mise à jour.';
$lang['step1_language'] = 'Sélectionner une langue';
$lang['step1_title'] = 'Sélectionner une langue';
$lang['step2_cmsmsfound'] = 'Une installation de CMS Made Simple™ a été détectée. Il est possible de mettre à jour cette installation. Toutefois, avant de poursuivre, assurez-vous d\'avoir une sauvegarde à jour et <strong>vérifiée</strong> de tous les fichiers et de la base de données.';
$lang['step2_cmsmsfoundnoupgrade'] = 'Bien qu\'une installation de CMS Made Simple™ ait été détectée, il n\'est pas possible de mettre à jour cette version à l\'aide de cette application. La version est peut-être trop ancienne.';
$lang['step2_confirminstall'] = 'Êtes-vous sûr(e) de vouloir installer CMS Made Simple™';
$lang['step2_confirmupgrade'] = 'Êtes-vous sûr(e) de vouloir mettre à jour CMS Made Simple™';
$lang['step2_errorsamever'] = 'Le dossier sélectionné semble contenir une installation CMSMS™ de la même version que celle incluse dans ce script. Continuer va rafraîchir l\'installation existante.';
$lang['step2_errortoonew'] = 'Le dossier sélectionné semble contenir une installation CMSMS™ avec une version plus récente que celle incluse dans ce script. Impossible de poursuivre le processus.';
$lang['step2_info_freshen'] = 'Rafraîchir cette installation va remplacer tous les fichiers du noyau ainsi que les modules installés d\'office et réinitialisera la configuration. Il vous sera demandé les informations de configuration de base, cependant la base de données ne sera pas modifiée.';
$lang['step2_installdate'] = 'Date d\'installation approximative&nbsp;';
$lang['step2_install_dirnotempty2'] = 'Ce dossier contient déjà certains fichiers et/ou sous-dossiers. Bien qu\'il soit possible d\'installer CMSMS ici, cela peut par inadvertance corrompre une installation existante. Veuillez revérifier le contenu de ce dossier. A titre de référence, certains des fichiers sont répertoriés ci-dessous. Veuillez vous assurer que tout est correct.';
$lang['step2_hdr_upgradeinfo'] = 'Informations de version';
$lang['step2_info_upgradeinfo'] = 'Ci-dessous les notes de version et le changelog disponibles pour chaque version. Les boutons ci-dessous affichent des informations détaillées sur ce qui a changé dans chaque version de CMS Made Simple. Il peut y avoir d\'autres instructions ou avertissements dans chaque version qui pourraient affecter le processus de mise à jour.';
$lang['step2_minupgradever'] = 'La version minimale que cet installateur peut mettre à jour est la : %s. Vous devrez peut-être mettre à jour votre installation CMSMS™ à une version plus récente, par étapes, en utilisant une autre méthode avant de compléter ce processus de mise à jour. Veuillez-vous assurer que vous disposez d\'une sauvegarde complète et vérifiée (fichiers et base de données) avant d\'utiliser toute méthode de mise à jour.';
$lang['step2_nocmsms'] = 'Nous n\'avons pas trouvé d\'installation de CMS Made Simple™ dans ce dossier. Il semble donc que vous vouliez faire une nouvelle installation.';
$lang['step2_nofiles'] = 'Comme demandé, les fichiers CMSMS Core ne seront pas traités pendant ce processus';
$lang['step2_passed'] = 'Passé';
$lang['step2_pwd'] = 'Votre dossier de travail courant&nbsp;';
$lang['step2_schemaver'] = 'Version du schéma de base de données&nbsp;';
$lang['step2_version'] = 'Votre version&nbsp;';
$lang['step3_failed'] = 'L\'installateur a effectué de nombreux tests de votre environnement PHP et un ou plusieurs de ces tests ont échoué. Vous devez corriger ces erreurs dans votre configuration avant de continuer. Une fois que vous aurez corrigé les erreurs, cliquez sur "Nouvel essai" ci-dessous.';
$lang['step3_passed'] = 'L\'installateur a effectué de nombreux tests de votre environnement PHP et ils ont tous réussi. C\'est une excellente nouvelle. Même s\'il ne s\'agit pas de tests garantis à 100 %, vous ne devriez avoir aucune difficulté à exécuter l\'installation de base de CMSMS™.';
$lang['step9_get_help'] = 'Connectez-vous avec d’autres développeurs CMSMS et obtenez de l\'aide des façons suivantes ';
$lang['step9_get_support'] = 'Canaux d’assistance';
$lang['step9_join_community'] = 'Rejoignez notre communauté';
$lang['step9_love_cmsms'] = 'Vous appréciez CMS Made Simple ';
$lang['step9_removethis'] = '<strong>ATTENTION</strong> Pour des raisons de sécurité, il est important que vous supprimiez l\'assistant d\'installation de votre hébergement une fois que vous aurez vérifié la réussite de l\'opération.';
$lang['step9_support_us'] = 'Cliquez ici pour découvrir comment vous pouvez nous soutenir';
$lang['symbol'] = 'Symbole';
$lang['social_message'] = 'CMS Made Simple™ a été installé correctement !';
$lang['test_failed'] = 'Un test requis a échoué';
$lang['test_passed'] = 'Un test réussi <em>(les tests passés sont seul affichés dans le mode avancé)</em>';
$lang['test_warning'] = 'Un paramètre est supérieur à la valeur requise, mais inférieur à la valeur recommandée, ou... <br>Une fonction qui peut être requise pour certaines fonctionnalités facultatives n\'est pas disponible.';
$lang['th_status'] = 'Statut';
$lang['th_testname'] = 'Test&nbsp;';
$lang['th_value'] = 'Valeur';
$lang['title_error'] = 'Houston, nous avons un problème !';
$lang['title_step2'] = 'Étape 2 - Détection de l\'installation existante';
$lang['title_step3'] = 'Étape 3 - Tests';
$lang['title_step4'] = 'Étape 4 - Informations sur la configuration de base';
$lang['title_step5'] = 'Étape 5 - Informations sur le compte d\'administration';
$lang['title_step6'] = 'Étape 6 - Paramètres du Site';
$lang['title_step7'] = 'Étape 7 - Installation des fichiers';
$lang['title_step8'] = 'Étape 8 - Travail sur la base de données';
$lang['title_step9'] = 'Étape 9 - Finalisation';
$lang['title_welcome'] = 'Bienvenue';
$lang['title_forum'] = 'Forum';
$lang['title_docs'] = 'Documentation officielle';
$lang['title_api_docs'] = 'Documentation officielle sur l\'API';
$lang['to'] = 'à';
$lang['title_share'] = 'Partagez votre expérience avec vos amis.';
$lang['tmpfile'] = 'Vérification de la fonction tmpfile()';
$lang['tmp_dirs_empty'] = 'Assurez-vous que les dossiers temporaires sont vides ou n\'existent pas';
$lang['upgrade'] = 'Mise à jour';
$lang['upgrade_deleteoldevents'] = 'Suppression des anciens évènements';
$lang['upgrading_schema'] = 'Mise à jour du schéma de base de données';
$lang['upload_max_filesize'] = 'Contrôle de la taille maximale des fichiers uploadés';
$lang['username'] = 'Nom d\'utilisateur';
$lang['warn_disable_functions'] = 'Remarque : une ou plusieurs fonctions PHP sont désactivées. Cela peut avoir des répercussions négatives sur votre installation de CMSMS™, particulièrement avec les extensions tierce partie. Vérifiez régulièrement votre journal des erreurs (logs). Les fonctions désactivées sont : <br><br>%s';
$lang['warn_max_execution_time'] = 'Bien que la valeur du temps d\'exécution maximum (max_execution_time) de %s est supérieure (ou égale) à la valeur minimale de %s, nous vous recommandons de l\'augmenter à la valeur de %s ou plus';
$lang['warn_memory_limit'] = 'Votre valeur de limite de mémoire (memory_limit) est %s, ce qui est supérieur au minimum de %s. Cependant %s est recommandé.';
$lang['warn_open_basedir'] = 'open_basedir est activé dans votre configuration PHP. Bien que vous puissiez continuer, CMSMS n\'assure pas de support sur les installations faites avec les restrictions open_basedir';
$lang['warn_post_max_size'] = 'Votre valeur maximum par méthode POST (post_max_size) est de %s et dépasse la valeur minimale de %s, cependant, nous vous recommandons de la porter à %s et faire en sorte qu\'elle soit supérieure à "upload_max_filesize"';
$lang['warn_tests'] = '<strong>Remarque :</strong> réussir tous ces tests devrait assurer que les fonctions essentielles de CMSMS™ fonctionnent correctement pour la plupart des sites. Cependant, au fur et à mesure que le site se développe et reçoit de nouvelles fonctionnalités, ces valeurs minimales peuvent devenir insuffisantes. En outre, les modules tiers peuvent avoir des exigences supplémentaires pour fonctionner correctement.';
$lang['warn_upload_max_filesize'] = 'Bien que votre paramètre de %s soit suffisant, nous recommandons d’augmenter le paramètre "upload_max_filesize" dans la configuration PHP à un minimum de %s';
$lang['welcome_message'] = 'Bienvenue ! Vous voici dans le processus d\'installation automatique de CMS Made Simple™. Ce script vérifie que votre hébergement est compatible avec CMSMS™, vous permettant ainsi d\'installer ou de mettre à jour la dernière version de CMSMS™ rapidement et facilement. <br>Nous savons que vous allez l\'apprécier.';
$lang['wizard_step1'] = 'Bienvenue';
$lang['wizard_step2'] = 'Détection de l\'installation existante';
$lang['wizard_step3'] = 'Tests de compatibilité';
$lang['wizard_step4'] = 'Information de configuration';
$lang['wizard_step5'] = 'Informations sur le compte d\'administration';
$lang['wizard_step6'] = 'Paramètres du site';
$lang['wizard_step7'] = 'Fichiers';
$lang['wizard_step8'] = 'Gestion de la base de données';
$lang['wizard_step9'] = 'Finalisation';
$lang['xml_functions'] = 'Vérification des fonctionnalités XML';
$lang['yes'] = 'Oui';
?>