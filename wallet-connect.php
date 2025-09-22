
<?php
$nosidebar = false;
$noheader = false;
$nofooter = false;
$pageTitle = "Wallet connect";

require 'layout/main.top.php';
require 'pages/slide-in-overlay/wallet-connect.php';
require 'pages/wallet-connect.php';
require 'pages/styles/wallet-connect.php';
require 'layout/main.bottom.php';
require 'pages/modals/wallet-connect.php';

?>