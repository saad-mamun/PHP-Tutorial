<?php

session_start();

$_SESSION['username'] = 'Sobuj';

echo $_SESSION['username'];