<?php

// French Language Module for joomlaXplorer (translated by Olivier Pariseau and Alexandre PRIETO)

$GLOBALS["charset"] = "UTF-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "d/m/Y H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "Erreur(s)",
	"back"			=> "Page pr�c�dente",
	
	// root
	"home"				=> "Le r�pertoire home n'existe pas, v�rifiez vos pr�f�rences.",
	"abovehome"			=> "Le r�pertoire courant ne semble pas �tre dans home.",
	"targetabovehome"	=> "Le r�pertoire cible ne semble pas �tre dans home.",
	
	// exist
	"direxist"			=> "Ce r�pertoire est inexistant.",
	//"filedoesexist"	=> "Ce fichier existe d�j�.",
	"fileexist"			=> "Ce fichier est inexistant.",
	"itemdoesexist"		=> "Cet �l�ment existe d�j�.",
	"itemexist"			=> "Cet �l�ment est inexistant.",
	"targetexist"		=> "Le r�pertoire cible est inexistant.",
	"targetdoesexist"	=> "Cet �l�ment cible existe d�j�.",
	
	// open
	"opendir"		=> "Ouverture du r�pertoire impossible.",
	"readdir"		=> "Lecture du r�pertoire impossible.",
	
	// access
	"accessdir"			=> "Vous ne poss�dez pas les droits pour acc�der � ce r�pertoire.",
	"accessfile"		=> "Vous ne poss�dez pas les droits pour acc�der � ce fichier.",
	"accessitem"		=> "Vous ne poss�dez pas les droits pour acc�der � cet �l�ment.",
	"accessfunc"		=> "Vous ne poss�dez pas les droits pour utiliser cette fonction.",
	"accesstarget"		=> "Vous ne poss�dez pas les droits pour acc�der au repertoire cible.",
	
	// actions
	"permread"		=> "Echec de la lecture des permissions.",
	"permchange"	=> "Echec du changement des permissions.",
	"openfile"		=> "Echec ouverture du fichier.",
	"savefile"		=> "Echec de la sauvegarde du fichier.",
	"createfile"	=> "Echec de la cr�ation du fichier.",
	"createdir"		=> "Echec de la cr�ation du r�pertoire.",
	"uploadfile"	=> "Echec envoi du fichier.",
	"copyitem"		=> "Echec de la copie.",
	"moveitem"		=> "Echec du d�placement.",
	"delitem"		=> "Echec de la suppression.",
	"chpass"		=> "Echec du changement de mot de passe.",
	"deluser"		=> "Echec de la suppression Usager.",
	"adduser"		=> "Echec ajout Usager.",
	"saveuser"		=> "Echec sauvegarde Usager.",
	"searchnothing"	=> "Vous devez entrez un �l�ment � chercher.",
	
	// misc
	"miscnofunc"		=> "Fonctionalit� non disponible.",
	"miscfilesize"		=> "La taille du fichier exc�de la taille maximale autoris�e.",
	"miscfilepart"		=> "Envoi du fichier non compl�t�.",
	"miscnoname"		=> "Vous devez entrer un nom.",
	"miscselitems"		=> "Aucun �l�ment s�lectionn�.",
	"miscdelitems"		=> "Etes-vous s�r de vouloir supprimer : {0} �l�ment(s)?",
	"miscdeluser"		=> "Etes-vous s�r de vouloir supprimer l'usager {0}?",
	"miscnopassdiff"	=> "Le nouveau mot de passe est indentique au pr�c�dent.",
	"miscnopassmatch"	=> "Les mots de passe diff�rent.",
	"miscfieldmissed"	=> "Un champs requis est vide.",
	"miscnouserpass"	=> "Nom ou mot de passe invalide.",
	"miscselfremove"	=> "Vous ne pouvez pas supprimer votre compte.",
	"miscuserexist"		=> "Ce nom existe d�j�.",
	"miscnofinduser"	=> "Usager non trouv�.",
	"extract_noarchive" => "Ce fichier ne correspond pas une archive extractible.",
	"extract_unknowntype" => "Type Archive inconnue",
	
	'chmod_none_not_allowed'	=> 'La suppression de tous les droits est impossible',
	'archive_dir_notexists'		=> 'Le r�pertoire sp�cifi� pour la sauvegarde est inexistant.',
	'archive_dir_unwritable'	=> 'Le r�pertoire sp�cifi� pour la sauvegarde doit �tre en droit Ecriture.',
	'archive_creation_failed'	=> 'Echec de la cr�ation du fichier Archive'
);
$GLOBALS["messages"] = array(
	// links
	"permlink"		=> "Changer les permissions",
	"editlink"		=> "Editer",
	"downlink"		=> "T�l�charger",
	"uplink"		=> "Dossier parent",
	"homelink"		=> "Racine",
	"reloadlink"	=> "Rafra&icirc;chir",
	"copylink"		=> "Copier",
	"movelink"		=> "D�placer",
	"dellink"		=> "Supprimer",
	"comprlink"		=> "Archiver",
	"adminlink"		=> "Administration",
	"logoutlink"	=> "D�connecter",
	"uploadlink"	=> "Envoyer",
	"searchlink"	=> "Rechercher",
	"extractlink"	=> "Extraction Archive",
	'chmodlink'		=> 'Changer les droits (CHMOD) des R�pertoire/Fichiers', // new mic
	'mossysinfolink'	=> 'Informations Syst�me, Server, PHP, mySQL)', // new mic
	'logolink'		=> 'Visiter le site de eXtplorer (nouvelle fen�tre)', // new mic
	
	// list
	"nameheader"		=> "Nom",
	"sizeheader"		=> "Taille",
	"typeheader"		=> "Type",
	"modifheader"		=> "Modifi�",
	"permheader"		=> "Permissions",
	"actionheader"		=> "Actions",
	"pathheader"		=> "Chemin",
	
	// buttons
	"btncancel"		=> "Annuler",
	"btnsave"		=> "Sauver",
	"btnchange"		=> "Changer",
	"btnreset"		=> "R�initialiser",
	"btnclose"		=> "Fermer",
	"btncreate"		=> "Cr�er",
	"btnsearch"		=> "Chercher",
	"btnupload"		=> "Envoyer",
	"btncopy"		=> "Copier",
	"btnmove"		=> "D�placer",
	"btnlogin"		=> "Connecter",
	"btnlogout"		=> "D�connecter",
	"btnadd"		=> "Ajouter",
	"btnedit"		=> "Editer",
	"btnremove"		=> "Supprimer",
	
	// user messages, new in joomlaXplorer 1.3.0
	'renamelink'			=> "Renommer",
	'confirm_delete_file' 	=> 'Etes-vous s�r de vouloir supprimer le fichier %s',
	'success_delete_file'	=> 'Fichier supprim� avec succ�s.',
	'success_rename_file' 	=> 'Le r�pertoire/fichier %s a �t� renomm� %s.',
	
	
	// actions
	"actdir"			=> "R�pertoire",
	"actperms"			=> "Changer les permissions",
	"actedit"			=> "Editer le fichier",
	"actsearchresults"	=> "R�sultats de la recherche",
	"actcopyitems"		=> "Copier les �l�ments",
	"actcopyfrom"		=> "Copier de /%s � /%s ",
	"actmoveitems"		=> "D�placer les �l�ments",
	"actmovefrom"		=> "D�placer de /%s � /%s ",
	"actlogin"			=> "Connecter",
	"actloginheader"	=> "Connecter pour utiliser QuiXplorer",
	"actadmin"			=> "Administration",
	"actchpwd"			=> "Changer le mot de passe",
	"actusers"			=> "Usagers",
	"actarchive"		=> "Archiver les �l�ments",
	"actupload"			=> "Envoyer les fichiers",
	
	// misc
	"miscitems"				=> "El�ments",
	"miscfree"				=> "Disponible",
	"miscusername"			=> "Usager",
	"miscpassword"			=> "Mot de passe",
	"miscoldpass"			=> "Ancien mot de passe",
	"miscnewpass"			=> "Nouveau mot de passe",
	"miscconfpass"			=> "Confirmer le mot de passe",
	"miscconfnewpass"		=> "Confirmer le nouveau mot de passe",
	"miscchpass"			=> "Changer le mot de passe",
	"mischomedir"			=> "R�pertoire home",
	"mischomeurl"			=> "Chemin Racine",
	"miscshowhidden"		=> "Voir les �l�ments cach�s",
	"mischidepattern"		=> "Cacher pattern",
	"miscperms"				=> "Permissions",
	"miscuseritems"			=> "(nom, r�pertoire home, Voir les �l�ments cach�s, permissions, actif)",
	"miscadduser"			=> "Ajouter un usager",
	"miscedituser"			=> "Editer usager '%s'",
	"miscactive"			=> "Actif",
	"misclang"				=> "Langue",
	"miscnoresult"			=> "Aucun r�sultats.",
	"miscsubdirs"			=> "Rechercher dans les sous-r�pertoires",
	"miscpermnames"			=> array("Lecture seulement","Modifier","Changer le mot de passe","Modifier & Changer le mot de passe","Administrateur"),
	"miscyesno"			 	=> array("Oui","Non","O","N"),
	"miscchmod"				=> array("Propri�taire", "Groupe", "Publique"),
	// from here all new by mic
	'miscowner'			=> 'Propri�taire',
	'miscownerdesc'		=> '<strong>Description:</strong><br />Propri�taire (UID) /<br />Groupe (GID)<br />Droits actuels:<br /><strong> %s ( %s ) </strong>/<br /><strong> %s ( %s )</strong>',

	// sysinfo (new by mic)
	'simamsysinfo'		=> 'Informations Syst�me',
	'sisysteminfo'		=> 'Info Syst�me',
	'sibuilton'			=> 'OS',
	'sidbversion'		=> 'Version Base de Donn�es (MySQL)',
	'siphpversion'		=> 'Version PHP',
	'siphpupdate'		=> 'INFORMATION: <span style="color: red;">La version de PHP que vous utilisez n\'est <strong>plus</strong> d\'actualit�!</span><br />Afin de garantir un fonctionnement maximum de eXtplorer et addons,<br />Vous devez utiliser au minimum <strong>PHP.Version 4.3</strong>!',
	'siwebserver'		=> 'Webserver',
	'siwebsphpif'		=> 'WebServer - Interface PHP',
	'simamboversion'	=> 'Version eXtplorer',
	'siuseragent'		=> 'Version du Navigateur',
	'sirelevantsettings' => 'Param�tres PHP avanc�s',
	'sisafemode'		=> 'Mode s�curis�',
	'sibasedir'			=> 'Ouvrir r�pertoire de base',
	'sidisplayerrors'	=> 'Erreurs PHP',
	'sishortopentags'	=> 'Tags',
	'sifileuploads'		=> 'Date Envoi',
	'simagicquotes'		=> 'Magic Quotes',
	'siregglobals'		=> 'Register Globals',
	'sioutputbuf'		=> 'Buffer',
	'sisesssavepath'	=> 'Chemin de Sauvegarde Session',
	'sisessautostart'	=> 'Session Automatique',
	'sixmlenabled'		=> 'XML activ�',
	'sizlibenabled'		=> 'ZLIB activ�',
	'sidisabledfuncs'	=> 'Fonction non valid�es',
	'sieditor'			=> 'Editeur WYSIWYG',
	'siconfigfile'		=> 'Fichier de configuration',
	'siphpinfo'			=> 'PHP Info',
	'siphpinformation'	=> 'PHP Information',
	'sipermissions'		=> 'Permissions',
	'sidirperms'		=> 'Permissions R�pertoire',
	'sidirpermsmess'	=> 'Pour obtenir un fonctionnement total, assurez vous que vous poss�dez les droits en �criture sur les r�pertoires et fichiers (chmod). Vous pouvez vous connecter en FTP pour modifier ces droits',
	'sionoff'			=> array( 'On', 'Off' ),
	
	'extract_warning' => "Voulez-vous r�ellement extraire ce fichier Ici? Ce fichier remplacera le fichier si existant!",
	'extract_success' => "Extraction r�ussie",
	'extract_failure' => "Extraction �chou�e",
	
	'overwrite_files'	=> 'Remplacer les fichiers?',
	"viewlink"			=> "Aper�u",
	"actview"			=> "Aper�u des sources du fichier",
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_chmod.php file
	'recurse_subdirs'	=> 'R�cursif dans les sous-r�pertoires',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to footer.php file
	'check_version'	=> 'V�rifier si une version plus r�cente existe',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_rename.php file
	'rename_file'	=>	'Renommer le r�pertoire ou fichier...',
	'newname'		=>	'Nouveau nom',
	
	// added by Paulino Michelazzo (paulino@michelazzo.com.br) to fun_edit.php file
	'returndir'	=>	'Retourner au r�pertoire apr�s sauvegarde',
	'line'		=> 	'Ligne',
	'column'	=>	'Colonne',
	'wordwrap'	=>	'Wordwrap: (IE seulement)',
	'copyfile'	=>	'Copier le fichier avec ce nom de fichier',
	
	// Bookmarks
	'quick_jump' 			=> 'Saut rapide vers',
	'already_bookmarked' 	=> 'Ce r�pertoire existe d�j� dans le signet',
	'bookmark_was_added' 	=> 'R�pertoire ajout� � la liste des signets.',
	'not_a_bookmark' 		=> 'Ce r�pertoire ne correspond pas � un signet.',
	'bookmark_was_removed' 	=> 'Ce r�pertoire � �t� supprim� de la liste des signets.',
	'bookmarkfile_not_writable' => "Echec lors de %s dans le signet. Le fichier signet '%s' ne poss�de pas les droits Ecriture.",
	
	'lbl_add_bookmark' 		=> 'Ajouter ce r�pertoire au signet',
	'lbl_remove_bookmark' 	=> 'Supprimer ce r�pertoire de la liste des signets',
	
	'enter_alias_name' 		=> 'Veuillez entrez un alias pour ce signet',
	
	'normal_compression' 	=> 'Compression normal',
	'good_compression'		=> 'Compression �lev�e',
	'best_compression' 		=> 'Compression optimale',
	'no_compression' 		=> 'Aucune compression',
	
	'creating_archive' 		=> 'Cr�ation du Fichier Archive...',
	'processed_x_files' 	=> '%s de %s fichiers trait�s',
	
	'ftp_header' 			=> 'Authentification FTP Locale',
	'ftp_login_lbl' 		=> 'Veuillez entrez un login de connexion pour le serveur FTP',
	'ftp_login_name' 		=> "Nom d'utilisateur FTP",
	'ftp_login_pass' 		=> 'Mot de passe FTP',
	'ftp_hostname_port' 	=> 'Nom du serveur FTP et Port <br />(Le port est optionnel)',
	'ftp_login_check' 		=> 'Test connexion serveur FTP...',
	'ftp_connection_failed' => "Connexion au serveur FTP impossible. Veuillez v�rifiez que le service FTP soit activ� sur le serveur.",
	'ftp_login_failed' 		=> "Login FTP incorrect. Veuillez v�rifiez le nom et mot de passe utilisateur.",
		
	'switch_file_mode' 		=> 'Mode courant: %s. Vous pouvez passer en mode %s.',
	'symlink_target' 		=> 'Cible du lien symbolique',
	
	"permchange"			=> "Changement CHMOD r�ussi:",
	"savefile"				=> "Le fichier est sauvegard�.",
	"moveitem"				=> "D�placement r�ussi.",
	"copyitem"				=> "Copie r�ussie.",
	'archive_name' 			=> "Nom Archive",
	'archive_saveToDir' 	=> "Sauvegarder dans ce r�pertoire",
	
	'editor_simple'			=> 'Mode Editeur Simple',
	'editor_syntaxhighlight'	=> 'Coloration Syntaxique',

	'newlink'				=> 'Nouveau Fichier/Dossier',
	'show_directories' 		=> 'Voir les Dossiers',
	'actlogin_success' 		=> 'Connexion r�ussie!',
	'actlogin_failure' 		=> 'Connexion �chou�. Veuillez essayer � nouveau.',
	'directory_tree' 		=> 'Arborescense Dossier',
	'browsing_directory' 	=> 'Parcourir Dossier',
	'filter_grid' 			=> 'Filtre',
	'paging_page'			=> 'Page',
	'paging_of_X'			=> 'de {0}',
	'paging_firstpage' 		=> 'Premi�re page',
	'paging_lastpage' 		=> 'Derni�re page',
	'paging_nextpage' 		=> 'Page suivante',
	'paging_prevpage' 		=> 'Page pr�c�dente',
	
	'paging_info' 			=> 'Affiche El�ment {0} - {1} de {2}',
	'paging_noitems' 		=> 'Aucun �l�ment � afficher',
	'aboutlink' 			=> 'Au sujet de...',
	'password_warning_title' 	=> 'Important - Changer votre mot de passe!',
	'password_warning_text' 	=> 'Le compte usager pour votre acc�s (admin avec mot de passe admin) correspond au compte privil�gi� eXtplorer par defaut. Votre installation eXtplorer est sujette � intrusion et vous devez corriger cette faille de s�curit� imm�diatement!',
	'change_password_success' 	=> 'Votre mot de passe a �t� chang�!',
	'success' 				=> 'Succ�s',
	'failure' 				=> 'Echec',
	'dialog_title' 			=> 'Dialogue site',
	'upload_processing' 	=> 'Envoi...',
	'upload_completed' 		=> 'Envoi effectu�!',
	'acttransfer' 			=> 'Transfert depuis une URL',
	'transfer_processing' 	=> 'Transfert...',
	'transfer_completed' 	=> 'Transfert effectu�!',
	'max_file_size' 		=> 'Poids Maximum',
	'max_post_size' 		=> 'Limite Envoi',
	'done' 					=> 'Annuler.',
	'permissions_processing' => 'Application des Permissions...',
	'archive_created'		=> 'Le fichier Archives est cr��!',
	'save_processing' 		=> 'Sauvegarde...',
	'current_user' 			=> 'Le script courant fonctionne avec les permissions utilisateur de:',
	'your_version' 			=> 'Votre Version',
	'search_processing' 	=> 'Recherche...',
	'url_to_file' 			=> 'URL du Fichier',
	'file' 					=> 'Fichier'
);
?>
