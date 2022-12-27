<?php


if(isset($_FILES['idcard']) && $_FILES['idcard']['error']==0)
{
    //pour limite la taille de fichier
    if($_FILES['idcard']['size']<100000000)
    {

        // recu[eraton du chemin d/foto/img.jpg
        $pathInfo = pathinfo($_FILES['idcard']['name']);
        $extension = $pathInfo['extension'];
        $allowedExtenssions = ['pdf','jpg','jpeg','png','ppt'];
        if(in_array($extension,$allowedExtenssions))
        {
            echo $_FILES['idcard']['tmp_name'];
            move_uploaded_file($_FILES['idcard']['tmp_name'], 'uploads/'.basename($_FILES['idcard']['name']));
            echo $_FILES['idcard']['name'] ." le fichier est telecharger avec success";
           
        }

    }

}

?>