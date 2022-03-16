<?php
    #BACK-TRACK
        switch ($_SERVER["SCRIPT_NAME"]) 
        { 
            case "/DataDuck/about.php":
                $CURRENT_PAGE = "About";
                $PAGE_TITLE = "About DataDuck";
                break;

            default:
                $CURRENT_PAGE = "Home"
                $PAGE_TITLE = "Home Page";
        }
?>