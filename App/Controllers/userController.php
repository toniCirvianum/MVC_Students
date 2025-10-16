<?php

use App\Core\Controller;
use App\Models\User;

class userController extends Controller
{

    public function index() {
        //Carrega la vista del login
        $this->render('user/login');
        
    }

    public function register() {
        echo "estic al register";
    }

    public function showUsers() {
        $u = new User;
        $users = $u->getAll();
        print_r($users);


    }

    public function showUserById($id) {
        // echo $id[0];
        $u = new User;
        $user = $u->getById($id[0]);
        $params['user']=$user;
        $this->render('user/user',$params);

    }


}
