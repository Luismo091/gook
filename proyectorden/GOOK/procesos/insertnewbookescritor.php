<?php

include "conexion.php";
if (empty($_POST['idLib'])) {
    echo '<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
} else {
    $idusu = $_POST["idUsu"];
    $idLib = $_POST["idLib"];
    $sql2 = $conexion->query("SELECT * FROM escrilib  WHERE usuid=$idusu");
    if ($datos2 = $sql2->fetch_array()) {
        echo '<script type="text/javascript">
        alert("XD");
        history.back();
        </script>';
    }else{
        $sql = $conexion->query("SELECT * FROM Usuario WHERE idUsu=$idusu");
        if ($datos = $sql->fetch_array()) {
            $nom1 = $datos['nom1'];
            $nom2 = $datos['nom2'];
            $ape1 = $datos['ape1'];
            $ape2 = $datos['ape2'];
            $foto= addslashes($datos['foto']);
            $sql1 = $conexion->query("SELECT * FROM bannerdefault WHERE idbannerdefault=1");
            if ($datos1 = $sql1->fetch_array()) {
                $banner= addslashes($datos1['imagen']);
            }else{
    
            }
          $sql = $conexion->query("SELECT MAX(idAut) FROM Autor");
          if ($datos = $sql->fetch_array()) {
              $idLA = $datos['MAX(idAut)'];
              $idLA++;
          } else {
              $idLA = 1;
          }
          $sql = $conexion->query("INSERT INTO
          Autor (idAut, nomAut1, nomAut2, apeAut1, apeAut2, foto_aut,banner)
          VALUES ('$idLA','$nom1','$nom2','$ape1','$ape2','$foto','$banner');");
           if ($sql) {
             echo'<script type="text/javascript">
             alert("Autor Registrada");
             </script>';
             header("location:../escritor/listbookes.php");
            
           } else {
           
           }
        } else {
            echo "XD";
        }









        
    $sql3 = $conexion->query("SELECT MAX(idesli) FROM escrilib");
      if ($datos3 = $sql3->fetch_array()) {
          $idesli = $datos3['MAX(idesli)'];
          $idesli++;
      } else {
          $idesli = 1;
      }
      $sql4 = $conexion->query("INSERT INTO
      escrilib (idesli, libid, usuid, autid)
      VALUES ('$idesli','$idLib','$idusu','$idLA');");
       if ($sql4) {
         
        
       } else {
       
       }
    }


    

    /*
    
    $idAut = $_POST["idAut"];
    $nomaut1 = $_POST["idLib"];
    $nomaut2 = $_POST["nomaut2"];
    $apeaut1 = $_POST["apeaut1"];
    $apeaut2 = $_POST["apeaut2"];
    $bio = $_POST["bio"];
    
    $_FILES["imagenban"];

    if(isset($_FILES['imagenaut']['name'])&&isset($_FILES['imagenban']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagenaut']['tmp_name']));
        $banner= addslashes(file_get_contents($_FILES['imagenban']['tmp_name']));

   
}








    $file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo
    $validator = 1; //Variable validadora
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //Extensión de nuestro archivo
    $url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

    //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
    $url_insert = dirname(__FILE__) . ""; //Carpeta donde subiremos nuestros archivos
    $prueba = $url_insert;
    $prueba = str_replace(array("procesos"), "assets\libros/", $prueba);
    //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
    $url_target = str_replace('\\', '/', $prueba) . '' . $file;

    //Si la carpeta no existe, la creamos
    if (!file_exists($prueba)) {
        mkdir($prueba, 0777, true);
    };

    //Validamos el tamaño del archivo


    //Validamos la extensión del archivo
    if ($file_type != "pdf") {
        echo "Solo se permiten archivos PDF";
        $validator = 0;
    }

    //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
    if ($validator == 1) {
        if (move_uploaded_file($url_temp, $url_target)) {
            echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
            echo $url_target;
            echo "-------" . $file;
        } else {
            echo "Ha habido un error al cargar tu archivo.";
        }
    } else {
        echo "Error: el archivo no se ha cargado";
    }






















    $idLib = $_POST["idLib"];
    $titLib = $_POST["titLib"];
    $fecLib = $_POST["fecLib"];
    $fecPub = $_POST["fecPub"];
    $filcat = $_POST["filcat"];
    $idAut = $_POST["idAut"];
    $idEdi = $_POST["idEdi"];
    $langua = $_POST["lang"];
    $sinopsis = $_POST["sinopsis"];
    $newnamebook = $prueba . $idLib . ".pdf";
    rename($url_target, $newnamebook);



    if (isset($_FILES['imagen']['name'])) {
        $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


        $sql = $conexion->query("INSERT INTO
        Libro (idLib, titLib, fecPub, fecLib, sinopsis, imagen, estado, Categoria_idCat,lan)
        VALUES ('$idLib','$titLib','$fecPub','$fecLib','$sinopsis','$foto','1','$filcat','$langua')");
        if ($sql) {
            $idLA;
            $sql = $conexion->query("SELECT MAX(idLA) FROM LibAut");
            if ($datos = $sql->fetch_array()) {
                $idLA = $datos['MAX(idLA)'];
                $idLA++;
            } else {
                $idLA = 1;
            }
            $sql = $conexion->query("INSERT INTO
         LibAut (idLA, Libro_idLib, Autor_idAut)
         VALUES ('$idLA','$idLib','$idAut')");


            $idLE;
            $sql = $conexion->query("SELECT MAX(idLE) FROM LibEdi");
            if ($datos = $sql->fetch_array()) {
                $idLE = $datos['MAX(idLE)'];
                $idLE++;
            } else {
                $idLE = 1;
            }
            $sql = $conexion->query("INSERT INTO
         LibEdi (idLE, Libro_idLib, Editorial_idEdi)
         VALUES ('$idLE','$idLib','$idEdi')");
            echo '<script type="text/javascript">
            alert("Libro Subido");
            window.location= "../administrador/listbook.php";
            </script>';
            //header("location:../administrador/listbook.php");

        } else {
        }
    }
    */
}
