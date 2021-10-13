<?php
	# Prise du temps actuel au début du script
	$time_start = microtime(true);

	# Variables globales du site
	define('VIEW_PATH','views/');
    define('EMAIL','jeanluc.collinet@ipl.be');
	$date = date("j/m/Y");
	
	# Require des classes automatisé
	function loadClass($class) {
		require_once 'models/' . $class . '.class.php';
	}
	spl_autoload_register('loadClass');

	# Ecrire ici le header de toutes pages HTML
	require_once(VIEW_PATH . 'header.php');
	
	# Ecrire ici le menu du site de toutes pages HTML
	require_once(VIEW_PATH . 'menu.php');

	# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
	$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
	# Quelle action est demandée ?

require_once('controllers/SwitchController.php');

switch($action) {
		case 'genesis':
			$controller = SwitchController::getGenesisController();
            break;
		case 'books':
            $controller = SwitchController::getBookController();
			break;
		case 'contact':
            $controller = SwitchController::getContactController();
			break;	
		default: # Par défaut, le contrôleur de l'accueil est sélectionné
            $controller = SwitchController::getHomeController();
			break;
	}
	# Exécution du contrôleur correspondant à l'action demandée
	$controller->run();


ougaszd
	z
	z
	z
	
	z
	
	# Ecrire ici le footer du site de toutes pages HTML
	require_once(VIEW_PATH . 'footer.php');
	
