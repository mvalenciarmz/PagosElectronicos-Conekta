<?php
session_start();
require_once 'MyConekta.php';

$_SESSION['token'] = MyConekta::tokengenerator();
$amount = filter_input(INPUT_POST, 'amount');
$amount = (strstr($amount = $_POST['amount'], '.')) ? str_replace('.', '', $amount) : $amount.'00';
$email 	= filter_input(INPUT_POST, 'email');

MyConekta::oxxo($amount, $email);