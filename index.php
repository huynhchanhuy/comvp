<?php
    // Activate session
    session_start();
    
    // Include utility files
    require_once './include/config.php';
    require_once PRESENTATION_DIR.'core.php';
    Root::init();
    
    // Load Smarty template file
    $application = new Application();
    // Display the page
    $application->createWebsite();
    // Close database connection
    DatabaseHandler::Close();