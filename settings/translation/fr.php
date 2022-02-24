<?php
function t($string)
{
    switch ($string) {
        case 'error 404, page not found':
            echo "Erreur 404, page non trouvée";
            break;
        case 'Log in with Phantom':
            echo "Connectez-vous avec Phantom";
            break;
        case 'Log out':
            echo "Se déconnecter";
            break;
        case 'You need to download Phantom to log in : ':
            echo "Vous avez besoin de télécharger Phantom pour vous connecter : ";
            break;
        case 'Auth with your Phantom wallet':
            echo "Connectez-vous avec votre wallet Phantom";
            break;
        case 'GitHub project - Login with Solana wallet (Phantom)':
            echo "Projet GitHub - Connextez-vous avec votre wallet Solana (Phantom)";
            break;

        default:
            echo $string;
            break;
    }
}
