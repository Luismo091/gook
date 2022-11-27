<?php

 include "conexion.php";
 if (empty($_POST['idLib'])) {    
    echo'<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
}else{
    if ($_FILES["fileTest"]["size"]!==0 ){
        if ($_FILES["imagen"]["size"]!==0 ){
            $file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo
    $validator = 1; //Variable validadora
    $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //Extensión de nuestro archivo
    $url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 
    
    //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
    $url_insert = dirname(__FILE__) . ""; //Carpeta donde subiremos nuestros archivos
    $prueba=$url_insert;
    $prueba=str_replace(array("procesos"), "assets\libros/", $prueba);
    //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
    $url_target = str_replace('\\', '/', $prueba) . '' . $file;
    
    //Si la carpeta no existe, la creamos
    if (!file_exists($prueba)) {
        mkdir($prueba, 0777, true);
    };
    
    //Validamos el tamaño del archivo
    
    
    //Validamos la extensión del archivo
    if($file_type != "pdf") {
      echo "Solo se permiten archivos PDF";
      $validator = 0;
    }
    
    //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
    if($validator == 1){
        if (move_uploaded_file($url_temp, $url_target)) {
            //echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
            //echo $url_target;
            //echo "-------".$file;

            $idLib = $_POST["idLib"];
    $titLib = $_POST["titLib"];
    $fecPub = $_POST["fecPub"];
    $filcat = $_POST["filcat"];
    $idAut = $_POST["idAut"];
    $idEdi = $_POST["idEdi"];
    $idLE = $_POST["idLE"];
    $idLA = $_POST["idLA"];
    $sinopsis = $_POST["sinopsis"];
    $newnamebook=$prueba.$idLib.".pdf";
    rename($url_target,$newnamebook);

    if(isset($_FILES['imagen']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


    $sql = $conexion->query("UPDATE Libro SET titLib='$titLib', fecPub='$fecPub',
                             sinopsis='$sinopsis', imagen='$foto',
                             Categoria_idCat='$filcat'
                             WHERE idLib=$idLib");
          if ($sql) {
            



            echo'<script type="text/javascript">
            alert("Libro Actualizado");
            </script>';
            header("location:../escritor/listbookes.php");
           
          } else {
          
          }

        } else {
            echo "Ha habido un error al cargar tu archivo.";
        }
    }else{
        echo "Error: el archivo no se ha cargado";
    }
    
}

        }else{
            $file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo
            $validator = 1; //Variable validadora
            $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //Extensión de nuestro archivo
            $url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 
            
            //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
            $url_insert = dirname(__FILE__) . ""; //Carpeta donde subiremos nuestros archivos
            $prueba=$url_insert;
            $prueba=str_replace(array("procesos"), "assets\libros/", $prueba);
            //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
            $url_target = str_replace('\\', '/', $prueba) . '' . $file;
            
            //Si la carpeta no existe, la creamos
            if (!file_exists($prueba)) {
                mkdir($prueba, 0777, true);
            };
            
            //Validamos el tamaño del archivo
           
            
            //Validamos la extensión del archivo
            if($file_type != "pdf") {
              echo "Solo se permiten archivos PDF";
              $validator = 0;
            }
            
            //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
            if($validator == 1){
                if (move_uploaded_file($url_temp, $url_target)) {
                    //echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
                    //echo $url_target;
                    //echo "-------".$file;


                    $idLib = $_POST["idLib"];
            $titLib = $_POST["titLib"];        
            $fecPub = $_POST["fecPub"];
            $filcat = $_POST["filcat"];
            $idAut = $_POST["idAut"];
            $idEdi = $_POST["idEdi"];
            $idLE = $_POST["idLE"];
            $idLA = $_POST["idLA"];
            $sinopsis = $_POST["sinopsis"];
            $newnamebook=$prueba.$idLib.".pdf";
            rename($url_target,$newnamebook);
            $sql = $conexion->query("UPDATE Libro SET titLib='$titLib', fecPub='$fecPub',
                                     sinopsis='$sinopsis',
                                     Categoria_idCat='$filcat'
                                     WHERE idLib=$idLib");
                  if ($sql) {
                   
        
        
        
                    echo'<script type="text/javascript">
                    alert("Libro Actualizado");
                    </script>';
                    header("location:../escritor/listbookes.php");
                   
                  } else {
                  
                  }



                } else {
                    echo "Ha habido un error al cargar tu archivo.";
                }
            }else{
                echo "Error: el archivo no se ha cargado";
            }
            
        
        
        }
    }else{
        if ($_FILES["imagen"]["size"]!==0 ){
            $idLib = $_POST["idLib"];
            $titLib = $_POST["titLib"];            
            $fecPub = $_POST["fecPub"];
            $filcat = $_POST["filcat"];
            $sinopsis = $_POST["sinopsis"];
        
            if(isset($_FILES['imagen']['name'])){
                $foto= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
            $sql = $conexion->query("UPDATE Libro SET titLib='$titLib', fecPub='$fecPub',
                                     sinopsis='$sinopsis', imagen='$foto',
                                     Categoria_idCat='$filcat'
                                     WHERE idLib=$idLib");
                  if ($sql) {
               
        
        
                    echo'<script type="text/javascript">
                    alert("Libro Actualizado");
                    </script>';
                    header("location:../escritor/listbookes.php");
                   
                  } else {
                  
                  }
        }
        }else{
            $idLib = $_POST["idLib"];
            $titLib = $_POST["titLib"];        
            $fecPub = $_POST["fecPub"];
            $filcat = $_POST["filcat"];
            
            $idLE = $_POST["idLE"];
            $idLA = $_POST["idLA"];
            $sinopsis = $_POST["sinopsis"];
        
           
        
        
            $sql = $conexion->query("UPDATE Libro SET titLib='$titLib', fecPub='$fecPub',
                                     sinopsis='$sinopsis',
                                     Categoria_idCat='$filcat'
                                     WHERE idLib=$idLib");
                  if ($sql) {
        
        
        
        
                    echo'<script type="text/javascript">
                    alert("Libro Actualizado");
                    </script>';
                    header("location:../escritor/listbookes.php");
                   
                  } else {
                  
                  }
        
        }
    }





    






















    
}
?>


