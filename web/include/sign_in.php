<?php
    // Ser etter submit action
    session_start();
    // echo 'POST:',var_dump($_POST);
    if (isset($_POST['submit'])) {
        // echo var_dump($_POST);

        include_once('include/pdo_con_inc.php');
        include_once('include/class_login.php');

        // Oppretter et Login-objekt, for å få tilgang til metodene til Login
        $login = NEW Login();

        // Lagrer innput og konverterer email til lowercase
        $user = $_POST['username'];
        $pwd = $_POST['password'];

        // Sjekk for tomme felt
        if (empty($user) || empty($pwd)) {

            header("Location: index.php?error=kontakt");                      // Redirigerer til frensiden med feilkode
            exit();                                                         // Stopper resten av koden fra å kunne kjøre

        } else {

            if ($login->verify_existing_user($user) == FALSE) {

                header("Location: index.php?error=user"); // Redirigerer til frensiden med feilkode
                exit();                                                     // Stopper resten av koden fra å kunne kjøre

            } else {

                $usr = $login->fetch_user_by_username($user);

                //Sjekk om passordene samsvarer
                //$hashedPdwCheck = password_verify($pwd, $usr['passwd']);
                //Fikse hashin senere
                if ($pwd != $usr['passwd']){
                    header("Location: index.php?error=pswd");              // Redirigerer til frensiden med feilkode
                    exit();

                } elseif($pwd == $usr['passwd']) {

                    //Logger inn bruker
                    $_SESSION['u_id'] = $usr['user_numb'];
                    $_SESSION['u_name'] = $usr['user_name'];
                    // echo var_dump($_SESSION);
                    header("Location: index.php?pg=storeview");   // Redirigerer til frensiden med feilkode
                    exit();                                                 // Stopper resten av koden fra å kunne kjøre

                } else {

                    header("Location: index.php?error=fullstopp");              // Redirigerer til frensiden med feilkode
                    exit();                                                 // Stopper resten av koden fra å kunne kjøre

                }
            }
        }
    }
?>
