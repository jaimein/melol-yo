<?php

                    #################################################################
                            #
                            ###Externalizar
                            $conexion = new mysqli("localhost", "root","12345678", "melol"); 
                            if ($conexion->connect_errno) { 
                               die( "Fallo al contenctar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
                            }
               //           ###Hasta aqui
               //             
                            if ($_POST){
                                
                                $coachId='2'; //quitar por que lo coje de las variables de sesion
                                
                                $cAvatar=$_POST['imgavatar'];
                                $querry="UPDATE `coaches` SET `cAvatar` =? WHERE `coachId` = ?";
               //                     
                                $stmt=$conexion->prepare($querry);
                                $stmt->bind_param("ss", $cAvatar, $coachId);
                                if ($stmt->execute()) {
                                    echo "Registro actualizado".$cAvatar."este";
                                } else {
                                    echo 'Error al actualizar.';
                                }
                                
                                
                                //Recordar poner esto "file_uploads = On" en /etc/php5/apache2/php.ini
                                $directoryavatar="img/avatares"; //poner en el que vaya a estar
                                $diravatar = dir($directoryavatar);
                                $target_file = $directoryavatar . basename($_FILES["fileavatar"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                // Check if image file is a actual image or fake image
                                if(isset($_POST["submit"])) {
                                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                    if($check !== false) {
                                        echo "File is an image - " . $check["mime"] . ".";
                                        $uploadOk = 1;
                                    } else {
                                        echo "File is not an image.";
                                        $uploadOk = 0;
                                    }
                                }

                            }
                            
