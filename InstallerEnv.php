<?php
    // On utilise argv et argc pour récuperer les informations pour se connecter aux bases de données

    if($argc != 7){
        echo "Le nombre d'informations ne correspond pas à ce qui est attendu \n";
	echo "Rappel: le premier argument est le chemin du .env puis votre nom d'utilisateur, votre mot de passe, l'adresse d'écoute de MySQl, son port et le nom de la base de données.\n";

        return -1;
    }
    $path = $argv[1]; $userName = $argv[2]; $pwdUser = $argv[3]; $address = $argv[4];
    $port = $argv[5]; $databaseName = $argv[6];
    
    

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
    fprintf($newEnv, "###< doctrine/doctrine-bundle ###\n" );
    fprintf($newEnv, "\n");
    fprintf($newEnv, "###> symfony/mailer ###\n# MAILER_DSN=smtp://localhost\n###< symfony/mailer ###\n" );

    fclose($newEnv);
    fclose($env);

    unlink(".env");
    rename(".env2", ".env");		
