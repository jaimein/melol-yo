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
            <!-- <div id="header">
                <div id="logo">  
                    <img src="img/logo_blanco_0.png"></img>
                </div>
                <div id="title">
                    ASIR project!
                </div> -->
            </div>
            <div id="content">
        <?php
                //Mostrar los avatares predefinidos
                $directoryavatar="img/avatares"; //poner en el que vaya a estar
                $diravatar = dir($directoryavatar);
        ?>
                <form action='sub.php' method='post' enctype="multipart/form-data">
                    <div id="modavatarimg" style="width: 200px; height: 200px; border: solid blue" >Foto
                        <img src="img/logo_web.jpeg" width="150px" height="150px">
                    </div>
                    <div style="border: solid greenyellow">
                        <input type="file" name="imagen" id="imagen">
                    </div>
                    <div style="width: 400px; height: 400px; border: red solid">
                        <?php
                                
       //                         $i=0;
      //                      while (($archivo = $diravatar->read()) !== false)
       //                         {
       //                             
       //                                 if (eregi("jpg", $archivo) || eregi("png", $archivo)){
        //                                    echo '<div id=centrado style="width:111px; border: purple solid"><img src="'.$directoryavatar."/".$archivo.'"width="100px" height="100px"><br/><input type=radio name=imgavatar value="'.$archivo.'" />'."\n"."</div>";
        //                                }
        //                        }
         //                           $diravatar->close();
        //                            
                            
                        ?> 
                    </div>
                    <div>
                        <input type="submit" name="modavasend" value="Aplicar" />
                    </div>
                    
                </form>
                
            </div>
            <!-- <div id="footer">
                <div id="subtitle">  
                    <a href="http://www.ausiasmarch.net/asir"> CFGS Administración de Sistemas Informáticos y Redes </a>
                </div>
            </div> -->
        </div>
    </body>
</html>