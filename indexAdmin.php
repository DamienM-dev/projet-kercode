<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once 'Controllers/AdminController.php';
require_once 'Models/admin/AdminModel.php';
require_once 'Models/front/Manager.php';

try {
    
        
} catch (Exception $e) {
    require 'Views/front/errorView.php';
}