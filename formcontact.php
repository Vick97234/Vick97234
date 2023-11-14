<!--?php
// On vérifie si la fonction ini_set() a été désactivée...
$desactive = ini_get('disable_functions');if (preg_match("/ini_set/i", "$desactive") == 0) {
// Si elle n'est pas désactivée, on définit ini_set de manière à n'afficher que les erreurs...ini_set("error_reporting" , "E_ALL & ~E_NOTICE");
}
// Vérifier que le formulaire a été envoyé...if (isset($_POST['envoi'])) {

//On commence une session pour enregistrer les variables du formulaire...
session_start();
$_SESSION['champ1'] = $_POST['champ1'];$_SESSION['champ2'] = $_POST['champ2'];
$_SESSION['champ3'] = $_POST['champ3'];$_SESSION['champ4'] = $_POST['champ4'];
$_SESSION['champ5'] = $_POST['champ5'];$_SESSION['champ6'] = $_POST['champ6'];
$_SESSION['champ7'] = $_POST['champ7'];$_SESSION['zone_email1'] = $_POST['zone_email1'];
$_SESSION['liste1'] = $_POST['liste1'];
//Evaluation du bouton 1 ...switch($_POST['bouton1']) {
case "25-35 €":$_SESSION['bouton1'] = "25-35 €";
break;default:
$_SESSION['bouton1'] = "";} // Fin du switch...
//Evaluation du bouton 2 ...
switch($_POST['bouton2']) {case "35-50 €":
$_SESSION['bouton2'] = "35-50 €";break;
default:$_SESSION['bouton2'] = "";
} // Fin du switch...
//Evaluation du bouton 3 ...switch($_POST['bouton3']) {
case "50 € et plus":$_SESSION['bouton3'] = "50 € et plus";
break;default:
$_SESSION['bouton3'] = "";} // Fin du switch...
//Enregistrement des paramètres de la case 1...
$_SESSION['case1_'][0] = "";if (isset($_POST['case1_'][0])) {
$_SESSION['case1_'][0] = $_POST['case1_'][0];} // Fin du if...
//Enregistrement des paramètres de la case 2...
$_SESSION['case2_'][0] = "";if (isset($_POST['case2_'][0])) {
$_SESSION['case2_'][0] = $_POST['case2_'][0];} // Fin du if...
//Enregistrement des paramètres de la case 3...
$_SESSION['case3_'][0] = "";if (isset($_POST['case3_'][0])) {
$_SESSION['case3_'][0] = $_POST['case3_'][0];} // Fin du if...
//Enregistrement des zones de texte...
$_SESSION['zone_texte1'] = $_POST['zone_texte1'];
// Définir l\'icone apparaissant en cas d\'erreur...
// Définir sur 0 pour afficher un petit x de couleur rouge.
// Définir sur 1 pour afficher l\'image d\'une croix rouge telle que celle utilisée dans l\'assistant// Si vous utilisez l\'option 1, l\'image de la croix rouge \'icone.gif\' doit se trouver dans le répertoire \'images\',
// ce dernier devant se trouver au même niveau que votre formulaire...$flag_icone = 0;
// On vérifie si $flag_icone est défini sur 0 ou 1...
if ($flag_icone == 0) {$icone = "<b-->
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
  </head>
  <body><font verdana,="" helvetica,="" sans-serif\"="" face="\&quot;Arial," size="\&quot;3\&quot;"

      color="\&quot;#CC0000\&quot;">x&gt;/font&gt;";
      } else {
      $icone = "<img src="%5C%22images/icone.gif%5C%22%22;" dfinir="" lindicateurerreur=""

        sur="" zro...="" $flag_erreur="0;" nenvoyer="" le="" formulaire="" que=""

        sily="" a="" paserreurs...="" if="" ($flag_erreur="=" 0)="" addresse=""

        de="" rception="" du="" $email_dest="restaurantgroupe@gmail.com,victor.sainterose@orange.fr"

        ;="" $sujet="votre demande concernant votre projet" mime-version:="" 1.0=""

        \n="" .="From: restaurantgroupe&lt;restaurantgroupe@gmail.com.fr&gt;\n" $partie_entete="&lt;html&gt;\n&lt;head&gt;\n&lt;title&gt;Formulaire&lt;/title&gt;\n&lt;meta http-equiv=Content-Type content=text/html; charset=iso-8859-1&gt;\n&lt;/head&gt;\n&lt;body bgcolor=#FFFFFF&gt;\n"

        partie="" htmle-mail...="" $partie_champs_texteverdana\"="" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Votre évènement = " . $_SESSION['champ1']
      . "<br>
      \n";
      $partie_champs_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Date de votre projet = " .
        $_SESSION['champ2'] . "</font><br>
      \n";
      $partie_champs_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Nombre de personnes = " .
        $_SESSION['champ3'] . "</font><br>
      \n";
      $partie_champs_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Nom = " . $_SESSION['champ4'] . "</font><br>
      \n";
      $partie_champs_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Prénom = " . $_SESSION['champ5'] . "</font><br>
      \n";
      $partie_champs_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Tél fixe = " . $_SESSION['champ6'] . "</font><br>
      \n";
      $partie_champs_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Tél mobile = " . $_SESSION['champ7'] . "</font><br>
      \n";
      $partie_zone_email .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Votre e-mail = " .
        $_SESSION['zone_email1'] . "</font><br>
      \n";
      $partie_listes .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Votre Choix = " . $_SESSION['liste1'] . "</font><br>
      \n";
      $partie_boutons .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Tarif 1 = " . $_SESSION['bouton1'] . "</font><br>
      \n";
      $partie_boutons .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Tarif 2 = " . $_SESSION['bouton2'] . "</font><br>
      \n";
      $partie_boutons .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Tarif 3 = " . $_SESSION['bouton3'] . "</font><br>
      \n";
      $partie_cases .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Type de repas</font><br>
      \n";
      $partie_cases .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Case 1 = " . $_SESSION['case1_'][0] . "</font><br>
      \n";
      $partie_cases .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Type de repas</font><br>
      \n";
      $partie_cases .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Case 1 = " . $_SESSION['case2_'][0] . "</font><br>
      \n";
      $partie_cases .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Type de repas</font><br>
      \n";
      $partie_cases .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Case 1 = " . $_SESSION['case3_'][0] . "</font><br>
      \n";
      $partie_zone_texte .= "<font face="\&quot;Verdana\&quot;" size="\&quot;2\&quot;"

        color="\&quot;#003366\&quot;">Description détaillée = " .
        $_SESSION['zone_texte1'] . "</font><br>
      \n"; // Fin du message HTML $fin = "\n\n"; $sortie = $partie_entete .
      $partie_champs_texte . $partie_zone_email . $partie_listes .
      $partie_boutons . $partie_cases . $partie_zone_texte . $fin; // Send the
      e-mail if (@!mail($email_dest,$sujet,$sortie,$entetes)) { echo("Envoi du
      formulaire impossible"); exit(); } else { // Rediriger vers la page de
      remerciement
      header("Location:http://www.restaurantgroupe.com/merci.html"); exit(); }
      // Fin else } // Fin du if ($flag_erreur == 0) { } // Fin de if POST
      ?&gt;
      <!-- 
Assistant de création de formulaires PHP pour les nuls - Version gratuite 1.6Auteur : Frédéric Ménard (assistant@f1-fantasy.net)
Site : http://www.f1-fantasy.net/assistant -->
      <title>Formulaire</title>
      <script language="JavaScript">


function verifSelection() {


if (document.mail_form.champ4.value == "") {
alert("Veuillez compléter votre nom")
return false
} 

if (document.mail_form.champ5.value == "") {
alert("Veuillez compléter votre prénom")
return false
} 

if (document.mail_form.champ6.value == "") {
alert("Veuillez compléter votre tél fixe")
return false
} 

if (document.mail_form.champ7.value == "") {
alert("Veuillez compléter votre tél mobile")
return false
} 

if (document.mail_form.zone_email1.value == "") {
alert("Merci de compléter votre adresse mail")
return false
}

invalidChars = " /:,;'"

for (i=0; i < invalidChars.length; i++) {	// does it contain any invalid characters?
badChar = invalidChars.charAt(i)

if (document.mail_form.zone_email1.value.indexOf(badChar,0) > -1) {
alert("Votre adresse e-mail contient des caractères invalides. Veuillez vérifier.")
document.mail_form.zone_email1.focus()
return false
}
}

atPos = document.mail_form.zone_email1.value.indexOf("@",1)			// there must be one "@" symbol
if (atPos == -1) {
alert('Votre adresse e-mail ne contient pas le signe "@". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

if (document.mail_form.zone_email1.value.indexOf("@",atPos+1) != -1) {	// and only one "@" symbol
alert('Il ne doit y avoir qu\'un signe "@". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

periodPos = document.mail_form.zone_email1.value.indexOf(".",atPos)

if (periodPos == -1) {					// and at least one "." after the "@"
alert('Vous avez oublié le point "." après le signe "@". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

if (periodPos+3 > document.mail_form.zone_email1.value.length)	{		// must be at least 2 characters after the 
alert('Il doit y avoir au moins deux caractères après le signe ".". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

} // Fin de la fonction
</script>
      <form name="mail_form" method="post" action="&lt;?=$_SERVER['PHP_SELF']?&gt;"

        onsubmit="return verifSelection()">
        <div align="center">
          <p><font face="Verdana, Arial, Helvetica, sans-serif, Tahoma" size="2"><strong>Formulaire
                de contact</strong></font></p>
          <p align="left">Ce formulaire est destiné aux internautes désirant
            organiser un évenement pour un groupe dans un restaurant à
            Paris.Merci de nous renseigner un maximum de précisions de façon à
            ce que nous répondions au mieux à votre attente. Nous vous
            contactons le jour méme gratuitement et sans aucun engagement de
            votre part.Vos coordonnées restent strictement confidentielles</p>
          <p>&nbsp;</p>
        </div>
        <br>
        <table align="center" width="566" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr>
              <td height="16">
                <div align="center"> <font face="Verdana, Arial, Helvetica, sans-serif, Tahoma"

                    size="2" color="#CC0000"><strong>
<?php if ($erreur_champ1) {
	  echo(stripslashes($erreur_champ1));	  } else {
if ($erreur_champ2) {	  echo(stripslashes($erreur_champ2));
	  } else {if ($erreur_champ3) {
	  echo(stripslashes($erreur_champ3));	  } else {
if ($erreur_champ4) {	  echo(stripslashes($erreur_champ4));
	  } else {if ($erreur_champ5) {
	  echo(stripslashes($erreur_champ5));	  } else {
if ($erreur_champ6) {	  echo(stripslashes($erreur_champ6));
	  } else {if ($erreur_champ7) {
	  echo(stripslashes($erreur_champ7));	  } else {
if ($erreur_email1) {	  echo(stripslashes($erreur_email1));
	  } else {if ($erreur_liste1) {
	  echo(stripslashes($erreur_liste1));	  } else {
if ($erreur_bouton1) {	  echo(stripslashes($erreur_bouton1));
	  } else {if ($erreur_bouton2) {
	  echo(stripslashes($erreur_bouton2));	  } else {
if ($erreur_bouton3) {	  echo(stripslashes($erreur_bouton3));
	  } else {if ($erreur_case1) {
	  echo(stripslashes($erreur_case1));	  } else {
if ($erreur_case2) {	  echo(stripslashes($erreur_case2));
	  } else {if ($erreur_case3) {
	  echo(stripslashes($erreur_case3));	  } else {
if ($erreur_texte1) {	  echo(stripslashes($erreur_texte1));
	  } else {} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...} // Fin du else...
} // Fin du else...
?> </strong></font> </div>
                <br>
              </td>
            </tr>
          </tbody>
        </table>
        <p align="center"></p>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Votre évènement</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ1) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ1" value="&lt;?=stripslashes($_SESSION['champ1']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Date de votre
                    projet</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ2) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ2" value="&lt;?=stripslashes($_SESSION['champ2']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Nombre de
                    personnes</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ3) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ3" value="&lt;?=stripslashes($_SESSION['champ3']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Nom</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ4) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ4" value="&lt;?=stripslashes($_SESSION['champ4']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Prénom</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ5) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ5" value="&lt;?=stripslashes($_SESSION['champ5']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Tél fixe</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ6) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ6" value="&lt;?=stripslashes($_SESSION['champ6']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Tél mobile</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_champ7) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="champ7" value="&lt;?=stripslashes($_SESSION['champ7']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Votre e-mail</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_email1) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="zone_email1" value="&lt;?=stripslashes($_SESSION['zone_email1']);?&gt;"

                  type="text"></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Votre Choix</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_liste1) {
	  echo($icone);	  }
?> <br>
              </td>
              <td>
                <select name="liste1" style="width:146">
                  <option value="">Sélectionner...</option>
                  <option value="Dîner dansant">
<?php if ($_SESSION['liste1'] == "Dîner dansant") {
echo(" selected");}
?>&gt;Dîner dansant</option>
                  <option value="Anniversaire">
<?php if ($_SESSION['liste1'] == "Anniversaire") {
echo(" selected");}
?>&gt;Anniversaire</option>
                  <option value="Soirée de société">
<?php if ($_SESSION['liste1'] == "Soirée de société") {
echo(" selected");}
?>&gt;Soirée de société</option>
                  <option value="Enterrement de Jeune Fille ou de Garçon">
<?php if ($_SESSION['liste1'] == "Enterrement de Jeune Fille ou de Garçon") {
echo(" selected");}
?>&gt;Enterrement de Jeune Fille ou de Garçon</option>
                  <option value="Pot de départ"
<?php if ($_SESSION['liste1'] == "Pot de départ") {
echo(" selected");}
?>&gt;Pot de départ</option>
                  <option value="Dîner spectacle">
<?php if ($_SESSION['liste1'] == "Dîner spectacle") {
echo(" selected");}
?>&gt;Dîner spectacle</option>
                  <option value="Repas de famille"><?php if ($_SESSION['liste1'] == "Repas de famille") {
echo(" selected");}
?>&gt;Repas de famille</option>
                  <option value="Mariage">
<?php if ($_SESSION['liste1'] == "Mariage") {
echo(" selected");}
?>&gt;Mariage</option>
                  <option value="Divers">
<?php if ($_SESSION['liste1'] == "Divers") {
echo(" selected");}
?>&gt;Divers</option>
                </select>
              </td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Tarif 1</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_bouton1) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="bouton1" value="25-35 €" type="radio">
<?php if ($_SESSION['bouton1'] == "25-35 €") {
echo(" checked");}
?>&gt;<font face="Verdana" size="2">25-35 €</font></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Tarif 2</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_bouton2) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="bouton2" value="35-50 €" type="radio">
<?php if ($_SESSION['bouton2'] == "35-50 €") {
echo(" checked");}
?>&gt;<font face="Verdana" size="2">35-50 €</font></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Tarif 3</font></div>
              </td>
              <td align="center" width="30" valign="middle">
<?php 	  if ($erreur_bouton3) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="bouton3" value="50 € et plus" type="radio">
<?php if ($_SESSION['bouton3'] == "50 € et plus") {
echo(" checked");}
?>&gt;<font face="Verdana" size="2">50 € et plus</font></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Type de repas</font></div>
              </td>
              <td align="center" width="30" valign="middle">
                
<?php 	  if ($erreur_case1) {
	  echo($icone);	  }
?> 
                  <br>
              </td>
              <td><input name="case1_[0]" id="case1_" value="Déjeuner" type="checkbox">
<?php if ($_SESSION['case1_'][0] == "Déjeuner") {
echo(" checked");}
?>
                  &gt;<font face="Verdana" size="2">Déjeuner</font></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Type de repas</font></div>
              </td>
              <td align="center" width="30" valign="middle">
                
<?php 	  if ($erreur_case2) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="case2_[0]" id="case2_" value="Dîner" type="checkbox">
<?php if ($_SESSION['case2_'][0] == "Dîner") {
echo(" checked");}
?>
                  &gt;<font face="Verdana" size="2">Dîner</font></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140">
                <div align="right"><font face="Verdana" size="2">Type de repas</font></div>
              </td>
              <td align="center" width="30" valign="middle">
                
<?php 	  if ($erreur_case3) {
	  echo($icone);	  }
?> <br>
              </td>
              <td><input name="case3_[0]" id="case3_" value="Déjeuner et Dîner"

                  type="checkbox">
<?php if ($_SESSION['case3_'][0] == "Déjeuner et Dîner") {
echo(" checked");}
?>&gt;<font face="Verdana" size="2">Déjeuner et Dîner</font></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td width="140" valign="top">
                <div align="right"><font face="Verdana" size="2">Description
                    détaillée</font></div>
              </td>
              <td align="center" width="30" valign="top">
<?php if ($erreur_texte1) 
{
	  echo($icone);	
}

?> <br>
              </td>
              <td><textarea name="zone_texte1" cols="45" rows="10">&lt;?=stripslashes($_SESSION['zone_texte1']);?&gt;</textarea></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="566" border="0">
          <tbody>
            <tr>
              <td valign="top">
                <div align="center"> <input name="Reset" value=" Effacer " type="reset">
                  <input name="envoi" value="Envoyer" type="submit"> </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div align="center"><input name="nbre_fichiers" id="nbre_fichiers" value=""

            type="hidden"></div>
      </form>
    </font>
  </body>
</html>
