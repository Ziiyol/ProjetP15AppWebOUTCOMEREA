
<?php
    // On utilise argv et argc pour récuperer les informations pour se connecter aux bases de données

    if($argc != 12){
        echo "Le nombre d'informations ne correspond pas à ce qui est attendu. \n";
	echo "Rappel: le premier argument est le chemin du .env puis votre nom d'utilisateur, votre mot de passe, l'adresse d'écoute de MySQl, son port et le nom de la base de données.Faites le une fois de plus pour la deuxième base de données. Voici la ligne de commande php Arg1 Arg2 Arg3 Arg4 Arg 5 Arg6 Arg7 Arg8 Arg9 Arg10 Arg11 \n";

        return -1;
    }
    $path = $argv[1]; $userName = $argv[2]; $pwdUser = $argv[3]; $address = $argv[4];
    $port = $argv[5]; $databaseName = $argv[6];
    $userName2 = $argv[7]; $pwdUser2 = $argv[8]; $address2 = $argv[9];
    $port2 = $argv[10]; $databaseName2 = $argv[11];    
    

    $env = fopen($path,'r');
    if ($env ==NULL){
        echo "Impossible d'ouvrir le fichier .env, le chemin est erroné \n";
        return -2;
    }

    $newEnv = fopen(".env2","w");
    if ($newEnv == NULL){
        echo "Impossible de créer le fichier";
        return -3;
    }

    $string = fgets($env,1000);
    $i = 0 ;
    while($i < 27 ){
        fprintf($newEnv,'%s' ,$string);
        $i++;
        $string = fgets($env,1000);
    }
    fprintf($newEnv, "DATABASE_URL=mysql://%s:%s@%s:%s/%s\n",$userName, $pwdUser, $address, $port, $databaseName);
    fprintf($newEnv, "DATABASE_URL_CUSTOMER=mysql://%s:%s@%s:%s/%s\n",$userName2, $pwdUser2, $address2, $port2, $databaseName2);
    fprintf($newEnv, "###< doctrine/doctrine-bundle ###\n" );
    fprintf($newEnv, "\n");
    fprintf($newEnv, "###> symfony/mailer ###\n# MAILER_DSN=smtp://localhost\n###< symfony/mailer ###\n" );

    fclose($newEnv);
    fclose($env);

    unlink(".env");
    rename(".env2", ".env");		
