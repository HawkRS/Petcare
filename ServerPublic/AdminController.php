<?php

require_once('Controller.php');

class AdminController extends Controller{

    //private $model;

    public function __construct(){
      parent::__construct();
      //require_once('../database.php');
      //$this->model = new Contact();
    }


    public function LandingPage()
    {
      //echo 'hola';
      require_once('core/database.php');
      $page = 'landing';
      $dbh = new Database;
      $result = $dbh->connection($page);
      //var_dump($result[2]);
      return $result;
    }

    public function SmartBitesPerro()
    {
      //echo 'hola';
      require_once('core/database.php');
      $page = 'smartbitesperro';
      $dbh = new Database;
      $result = $dbh->connection($page);
      //var_dump($result[2]);
      return $result;
    }

    public function SmartBitesGato()
    {
      //echo 'hola';
      require_once('core/database.php');
      $page = 'smartbitesgato';
      $dbh = new Database;
      $result = $dbh->connection($page);
      //var_dump($result[2]);
      return $result;
    }

    public function Titan()
    {
      //echo 'hola';
      require_once('core/database.php');
      $page = 'titan';
      $dbh = new Database;
      $result = $dbh->connection($page);
      //var_dump($result);
      return $result;
    }

    public function rocko()
    {
      //echo 'hola';
      require_once('core/database.php');
      $page = 'rocko';
      $dbh = new Database;
      $result = $dbh->connection($page);
      //var_dump($result[2]);
      return $result;
    }


  }

 ?>