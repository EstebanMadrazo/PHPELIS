<?php
    session_start();

    session_unset();

    session_destroy();

    header('Location: /PHPELIS1.1/index.php');

