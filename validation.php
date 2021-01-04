 <!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
 <html>
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title>validation</title>
         <meta name="description" content="page de validation de mot de pass">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     </head>
     <body>
         <!--[if lt IE 7]>
             <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
         <![endif]-->
        <?php 
            $idMdp = array("Recruteur"=>"mdp1","Directeur"=>"mdp2","Collaborateur"=>"mdp3");

            switch($_POST['pseudo'])
            {
                case "Directeur":         
                    if($_POST['mdp']==$idMdp["Directeur"])
                    {
                        include('directeur.html');
                        break;
                    }
                    else{
                        include('accesrefuse.html');
                        break;
                    }
                case "Recruteur":         
                    if($_POST['mdp']==$idMdp["Recruteur"])
                    {
                        include('recruteur.html');
                        break;
                    }
                    else{
                        include('accesrefuse.html');
                        break;
                    }
                case "Collaborateur":         
                    if($_POST['mdp']==$idMdp["Collaborateur"])
                    {
                        include('collaborateur.html');
                        break;
                    }
                    else{
                        include('accesrefuse.html');
                        break;
                    }
         
            }
        ?> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>
 </html>