<?php


class UsersController{
      public function index(){
          require_once ('views/users/index.php');
      }

      public function create(){
          require_once ('views/users/create.php');
      }


}
