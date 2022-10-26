<?php

/*$lacle = md5("$*ed/_");
function je_crypte_donnees_symetrique($mot,$lacle){

    $phrase = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,$lacle, $mot, MCRYPT_MODE_ECB)));

   return $phrase;

}
   $message = je_crypte_donnees_symetrique("salut tout le monde - Amoureux de la programmation:12$",$lacle);

   //echo $message;    

   function je_decrypte_donnees_symetrique($mot,$lacle){

         $motif = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,$lacle, base64_decode($mot),MCRYPT_MODE_ECB));
         return $motif ;          

   }  

   function cryptage($data, $key,  $cipher, $mode){
    return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $data, $mode, md5($key)));
}
$cle_taille = mcrypt_module_get_algo_key_size(MCRYPT_3DES);
// On calcule la taille du vecteur d'initialisation pour l'algo triple des et pour le mode NOFB
$iv_taille = mcrypt_get_iv_size(MCRYPT_3DES, MCRYPT_MODE_NOFB);
//On fabrique le vecteur d'initialisation, la constante MCRYPT_RAND permet d'initialiser un vecteur aléatoire
$iv = mcrypt_create_iv($iv_taille, MCRYPT_RAND);

$cle ="Ceci est une clé censée crypter un message, mais à mon avis elle est beaucoup trop longue";
// On retaille la clé pour qu'elle ne soit pas trop longue
$cle = substr($cle, 0, $cle_taille);

// Le message à crypter
$message = "Voici mon super message que je dois crypter";
// On le crypte
$message_crypte = mcrypt_encrypt(MCRYPT_3DES, $cle, $message, MCRYPT_MODE_NOFB, $iv);
// On le décrypte
$message_decrypte = mcrypt_decrypt(MCRYPT_3DES, $cle, $message_crypte, MCRYPT_MODE_NOFB, $iv);

echo "Message en clair : $message <br/> Message crypté : $message_crypte <br /> Message décrypté : $message_decrypte";

$methodcryptage = "aes-256-cbc";
$iv_longueur = openssl_cipher_iv_length($methodcryptage);
$isstrong = false;
$iv = openssl_random_pseudo_bytes($iv_length,$isstrong);
echo $iv . "<br>";
if(!$isstrong){
    throw new Exception("Tsy dia matanjaka ilay cryptage!");
}

$messageacacher = "œŒ&1é2\"_ç";
$pass = "ny teny miafina dia";
$enc_data = openssl_encrypt($messageacacher,$methodcryptage,$pass, true, $iv);
//--On le transforme en base64 et en url pour que l'on puisse l'intégrer dans un URL
$enc_data = urlencode(base64_encode($enc_data));

//dechiffre
*/
$Clef  = md5("$*ed/_");
function crptk_jp($mot,$clef){

    $Lclef=strlen($clef);//longueur de la clé
    $Lmot = strlen($mot); // longueur du mot à insérer

    if($Lclef < $Lmot){
       
        //Si la longueur de la clé est < à celle du mot de passe 
        //alors rallonger ou augmenter la taille de la clé.
        $clef = str_pad($clef, $Lmot,$Lclef,STR_PAD_RIGHT); 


    }

       elseif($Lclef > $Lmot){

        //Si la longueur de la clé est > à celle du mot de passe 
        //alors faites racourcir ou diminuer la taille de la clé.

          $soustraire = $Lclef - $Lmot ;
          $_clefs = substr($clef,0,$soustraire); 

       }
        // Utilisation de l'opérateur XOR.
        return $mot ^ $clef ; // fonction qui renvoie le mot crypté

} 
   echo  crptk_jp("mot deux",$clef)."crypté";
   echo  crptk_jp(crptk_jp("mot deux",$clef),$clef)."decrypté";

?>