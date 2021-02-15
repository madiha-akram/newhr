<?php

namespace App\Controller;

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

        //$this->loadComponent('Security');
    }
}
