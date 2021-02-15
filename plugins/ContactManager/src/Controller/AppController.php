<?php

namespace ContactManager\Controller;

use App\Controller\AppController as BaseController;

//namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

public function initialize()
{
parent::initialize();
$this->loadComponent('RequestHandler', [
    'enableBeforeRedirect' => false,
]);
$this->loadComponent('Flash');
$this->loadComponent('Auth', [
'authorize'=> 'Controller',
'authenticate' => [
'Form' => [
// fields used in login form
'fields' => [
'username' => 'email',
'password' => 'password'
]
]
],
// login Url
'loginAction' => [
'controller' => 'Users',
'action' => 'login'
],
// where to be redirected after logout
'logoutRedirect' => [
'controller' => 'users',
'action' => 'login'//,
//'home'
],
// if unauthorized user go to an unallowed action he will be redirected to this url
'unauthorizedRedirect' => [
    'controller' => 'Users',
    'action' => 'login'//,
    //'home'
    ],

'authError' => 'Did you really think you are allowed to see that?',
]);
// Allow the display action so our pages controller still works and user can visit index and view actions.
//$this->Auth->allow(['index','display','view','edit','vieww']);//yeh user ko allow hy function

}

public function isAuthorized($user)
{
$this->Flash->error('You aren\'t allowed');
return false;
}

//public function beforeFilter(Event $event)
//{
//$this->Auth->allow(['index', 'view', 'display']);
//}

public function beforeRender(Event $event)
{
if (!array_key_exists('_serialize', $this->viewVars) &&
in_array($this->response->type(), ['application/json', 'application/xml'])
) {
$this->set('_serialize', true);
}
}
}

?>

