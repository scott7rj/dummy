<?php
namespace app\controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use app\controller\AppController;
#use app\ldap\LdapDAO;
#use app\model\Usuario;
use Exception;

final class LoginController extends AppController {

    public function __construct() {
        parent::__construct();
    }

    public function autenticar(Request $request, Response $response, array $args) {
    	try {
            $data = $_POST['data'];
            echo $data;
            parse_str($data, $array);
    		#$model = new Usuario();
            #$model->setMatricula($array['dvLoginTxtId']);
            #$model->setPassword($array['dvLoginTxtPwd']);
            #$ldapDAO = new LdapDAO();
            #$result = $ldapDAO->autenticar($model);
            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}