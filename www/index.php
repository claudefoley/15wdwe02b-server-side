<?php

// Determine what page the user wants.
$requestedPage = isset($_GET['page']) ? $_GET['page'] : 'home';

// Require the page class.
require 'classes/Page.php';

