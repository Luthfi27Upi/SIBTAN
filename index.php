<?php
session_start();
define('BASE_PATH', __DIR__);

require_once BASE_PATH . '/config/database.php';
require_once BASE_PATH . '/app/Models/Auth.php';
require_once BASE_PATH . '/app/Controllers/AuthController.php';
require_once BASE_PATH . '/app/Controllers/PasswordResetController.php';
require_once BASE_PATH . '/app/Controllers/UserController.php';
require_once BASE_PATH . '/app/Controllers/FormController.php';
require_once BASE_PATH . '/app/Models/User.php';
require_once BASE_PATH . '/app/Models/Form.php';

$db = Database::getInstance()->getConnection();
$authModel = new Auth($db);
$userModel = new User($db);
$formModel = new Form($db);

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$base_prefix = '/SIBTAN';
if (strpos($request_uri, $base_prefix) === 0) {
    $request_uri = substr($request_uri, strlen($base_prefix));
}

$path = rtrim($request_uri, '/');
$path = preg_replace('/:\d+/', '', $path);
$segments = explode('/', $path);
$id = isset($segments[3]) ? $segments[3] : null;

error_log("Requested Path: " . $path);

switch ($path) {
    case '/login':
        $controller = new AuthController($authModel);
        echo $controller->login();
        break;

    case '/actionlogin':
        $controller = new AuthController($authModel);
        echo $controller->actionlogin();
        break;

    case '/auth/otp':
        $controller = new AuthController($authModel);
        echo $controller->otp();
        
    case '/logout':
        $controller = new AuthController($authModel);
        $controller->logout();
        break;
        
    case '/password-reset-request':
        $controller = new PasswordResetController($authModel);
        echo $controller->requestReset();
        break;
        
    case '/password-reset':
        $controller = new PasswordResetController($authModel);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Tampil form reset password
            require BASE_PATH . '/views/auth/password-reset.php';
        } else {
            // Proses reset password
            echo $controller->resetPassword();
        }
        break;
        case '/verifyOTP':
            $controller = new AuthController($authModel);
            echo $controller->verifyOTP();
            break;
            
    case '/users':
        $controller = new UserController($userModel);
        $controller->index();
        break;

    case '/users/create':
        $controller = new UserController($userModel);
        $controller->create();
        break;

    case '/users/read/'.$id:
        $controller = new UserController($userModel);
        $controller->read($id); 
        break;

    case '/users/update/'. $id:
        $controller = new UserController($userModel);
        $controller->update($id); 
        break;

    case '/users/delete/'. $id:
        $controller = new UserController($userModel);
        $controller->delete($id); 
        break;

    case '/users/dataku':
        $controller = new FormController($formModel);
        $controller->renderCards(); 
        break;

    case '/users/actionupload':
        $controller = new FormController($formModel);
        echo $controller->create();
        break;
    case '/actionVerify':
        $controller = new FormController($formModel);
        echo $controller->renderAdminVerification();
        break;
    case '/verif':
        $controller = new FormController($formModel);
        echo $controller->verifyForm();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found - Path: " . $path;
        break;
}