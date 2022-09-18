<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>Login | Pemrograman Web II Bilingual 2021</title>
    <style type="text/css" rel="stylesheet">

    ::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

    .center {
        margin: auto;
        width: 50%;
        padding: 10px;
    }
    body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

    h3{
        
        color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
    }

    .input{
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
        width: 250px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
    }

    #form {
		margin: 25px 30px 25px 50px;
	}
	#container {
		margin: 10px 725px 0 725px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
    button{
        width: 75px;
        margin: 20px 0 0 200px;
        height: 35px;
        
    }
    </style>
</head>
<body>
    <div id="container">
        <form id="form_login" name="form_login" method="POST" action="Welcome/login">
            <h3 class="center" align="center">Login</h3>
            <div id="form">
                <label for="username">Username :</label>
                <input class="input" type="text" id="username" name="username" placeholder="tulis username anda disini...">
                
                <label for="password">Password :</label>
                <input class="input" type="password" id="password" name="password" placeholder="tulis password anda disini...">
                
            <button type="submit" id="bt_login" name="bt_login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>