<?php
    // Activate session
    session_start();
    
    // Start output buffer
    ob_start();
    
    // Include utility files
    require_once './include/config.php';
    require_once PRESENTATION_DIR.'root.php';
    Root::init();
    
    // Load Smarty template file
    $application = new Application();
    // Display the page
    $application->createWebsite();
    // Close database connection
    DatabaseHandler::Close();
    
    // Output content from the buffer
    flush();
    ob_flush();
    ob_end_clean();
    
    