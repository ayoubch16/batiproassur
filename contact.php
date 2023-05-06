<?php 
$c=$_POST['c'];

$message = '';
 $to      = 'ayoubchoukri16@gmail.com';
 $to2      = 'contact@batiproassur.fr';
        if($c=='1'){
            $nom=$_POST['Nom'];
            $Prenom=$_POST['Prenom'];
            $mail=$_POST['mail'];
            $Telephone=$_POST['Telephone'];
            $Services=$_POST['Services'];
            $matricule=$_POST['matricule'];
            $Commentaire=$_POST['Commentaire'];
            $subject = 'Nouvelle demande ';
            $message='  <h1 style="text-align: center;">Nouvelle demande</h1>
    <div>
        <p>Nom :</p>
        <h3>'.$nom.'</h3>

        <p>Prenom :</p>
        <h3>'.$Prenom.'</h3>

        <p>Adresse Email :</p>
        <h3>'.$mail.'</h3>

        <p>Telephone :</p>
        <h3>'.$Telephone.'</h3>

        <p>Services : </p>
        <h3>'.$Services.'</h3>
        
        <p>Siren/Siret  : </p>
        <h3>'.$matricule.'</h3>
        
        <p>Commentaire : </p>
        <h3>'.$Commentaire.'</h3>
    </div>';
   
        }else{
            $name2=$_POST['name2'];
            $email2=$_POST['email2'];
            $message2=$_POST['message2'];
            $subject = 'Nouveau message ';
            $message = ' <h1 style="text-align: center;">nouveau message</h1>
    <div>
        <p>Nom et Prenom :</p>
        <h3>'.$name2.'</h3>

        <p>Adresse Email :</p>
        <h3>'.$email2.'</h3>

        <p>Message : </p>
        <h3>'.$message2.'</h3>
    </div>';
        }
           $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     
            $headers .= 'From: contact@batiproassur.fr' . "\r\n" .
                       'Reply-To: contact@batiproassur.fr' . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();

          // echo $message;
           mail($to, $subject, $message, $headers);
           mail($to2, $subject, $message, $headers);
    ?>
    <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Batiproassur | Merci</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="border border-3 border-success"></div>
                <div class="card  bg-white shadow p-5">
                    <div class="mb-4 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                            fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                    </div>
                    <div class="text-center">
                        <h1>Merci !</h1>
                        <p>Notre équipe vous contactera dans les plus brefs délais </p>
                        <a class="btn btn-outline-success" href="index.html">Retour à la page d'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
  


