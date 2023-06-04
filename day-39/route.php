<?php

require_once 'vendor/autoload.php';

use App\classes\Series;
use App\classes\Student;
use App\classes\Authentication;

if (isset($_GET['page'])){
    if ($_GET['page'] =='home'){
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'series'){
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'get-series'){
        $total = new Series($_POST);
//        $totalValue = $total->getSeriesResult();
//        $totalValue = $total->getEvenOddResult();
        $totalValue = $total->getEvenOddAddSeries();
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'add-student'){
        include 'pages/add-student.php';
    }
    elseif ($_GET['page'] == 'create-student'){
        $student = new Student($_POST, $_FILES);
        $message = $student->addStudent();
        include 'pages/add-student.php';
    }
    elseif ($_GET['page'] == 'manage-student')
    {
        $student = new  Student();
        $students = $student->getAllStudents();
        include 'pages/manage-student.php';
    }
    elseif ($_GET['page'] == 'login')
    {

        include 'pages/login.php';
    }
    elseif ($_GET['page'] =='login-submit')
    {
        $authentication = new Authentication($_POST);
        $message = $authentication->login();
    }
}
