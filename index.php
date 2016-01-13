<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto CRUD</title>
        <link media="all" href="css/style.css" rel="stylesheet" type="text/css"></link>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">  
                    <img src="img/logo_blanco_0.png"></img>
                </div>
                <div id="title">
                    ASIR project!
                </div>
            </div>
            <div id="content">
                <form action='index.php?accion=modavatar' method='post'>
                <div id="modavatarimg">Foto
                    <img src="img/logo_web.jpeg" width="150px" height="150px">
                </div>
                <div>
                    <input type="file" name="imgavatar" accept="image/*">
                </div>
                <div>
                    <input type="submit" name="modavasend" value="Aplicar" />
                </div>
                </form>
                <?php
                echo "hola";
                ?>
            </div>
            <div id="footer">
                <div id="subtitle">  
                    <a href="http://www.ausiasmarch.net/asir"> CFGS Administración de Sistemas Informáticos y Redes </a>
                </div>
            </div>
        </div>
    </body>
</html>
