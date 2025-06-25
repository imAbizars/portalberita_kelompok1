<?php
session_start();
session_unset();      
session_destroy();    

header("Location: ../../index.php?page=login&logout=1");
exit();
