<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['availablelangs'] = 'Liste des langues disponibles';
$string['cannotcreatelangdir'] = 'Création du dossier lang impossible';
$string['cannotdownloadcomponents'] = 'Téléchargement des composants impossible';
$string['cannotdownloadzipfile'] = 'Téléchargement du fichier ZIP impossible';
$string['cannotfindcomponent'] = 'Composant introuvable';
$string['cannotsavemd5file'] = 'Enregistrement du fichier md5 impossible';
$string['cannotsavezipfile'] = 'Enregistrement du fichier ZIP impossible';
$string['cannotunzipfile'] = 'Décompression du fichier ZIP impossible';
$string['chooselanguagehead'] = 'Choisissez une langue';
$string['chooselanguagesub'] = 'Veuillez choisir la langue d\'installation. Cette langue sera utilisée comme langue par défaut du site, que vous pourrez modifier ultérieurement.';
$string['cliincorrectvalueerror'] = 'Erreur, valeur incorrecte « {$a->value} » pour le paramètre « {$a->option} »';
$string['cliincorrectvalueretry'] = 'Valeur incorrecte, veuillez essayer de nouveau';
$string['cliinstallheader'] = 'Programme d\'installation de Moodle $a en ligne de commande';
$string['clitypevalue'] = 'type valeur';
$string['clitypevaluedefault'] = 'type valeur, tapez Entrée pour utiliser la valeur par défaut ($a)';
$string['cliunknowoption'] = 'Options non reconnues :\n  \$a\n. Utilisez l\'option --help.';
$string['dataroot'] = 'Dossier de données';
$string['dirroot'] = 'Dossier Moodle';
$string['environment'] = 'Environnement';
$string['environmentrequireinstall'] = 'doit être installé et activé';
$string['environmentrequireversion'] = 'la version $a->needed est requise ; vous utilisez actuellement la version $a->current';
$string['environmentsub2'] = 'Chaque version de Moodle nécessite une version minimale de certains composants PHP et des extensions de PHP obligatoires. Une vérification complète de l\'environnement est effectuée avec chaque installation et chaque mise à jour. Veuillez contacter l\'administrateur du serveur si vous ne savez pas comment installer une nouvelle version ou activer des extensions de PHP.';
$string['errorsinenvironment'] = 'Échec de la vérification de l\'environnement !';
$string['installation'] = 'Installation';
$string['installation'] = 'Installation';
$string['language'] = 'Langue';
$string['paths'] = 'Chemins';
$string['pathserrcreatedataroot'] = 'Le dossier de données ($a->dataroot) ne peut pas être créé par l\'installeur.';
$string['pathshead'] = 'Confirmer les chemins d\'accès';
$string['pathsrodataroot'] = 'Le dossier de données n\'est pas accessible en écriture.';
$string['pathsroparentdataroot'] = 'Le dossier parent ($a->parent) n\'est pas accessible en écriture. Le dossier de données ($a->dataroot) ne peut pas être créé par l\'installeur.';
$string['pathssubadmindir'] = 'Quelques rares hébergeurs utilisent « /admin » comme URL spéciale pour l\'accès à un tableau de bord ou d\'autres fonctionnalités. Malheureusement ceci entre en conflit avec l\'emplacement standard des pages d\'administration de Moodle. Vous pouvez corriger ceci en renommant le dossier admin de votre installation Moodle et en plaçant le nouveau nom choisi dans ce champ. Par exemple, <em>moodleadmin</em>. Ceci modifiera tous les liens de l\'administration de Moodle.';
$string['pathssubdataroot'] = 'Un emplacement est nécessaire pour permettre à Moodle d\'enregistrer les fichiers déposés. Ce dossier doit être accessible en lecture et <strong>en écriture</strong> par le serveur web (dénomé « nobody » ou « apache » ou encore « www »), mais ne doit pas être accessible directement via le web. L\'installeur va tenter de le créer s\'il n\'existe pas.';
$string['pathssubdirroot'] = 'Le chemin d\'accès complet au dossier d\'installation de Moodle. Ne modifiez ceci que si vous devez utiliser des liens symboliques.';
$string['pathssubwwwroot'] = 'L\'adresse web complète par laquelle on accédera à Moodle. Il n\'est pas possible d\'accéder à Moodle depuis sur des adresses web différentes. Si votre site web possède plusieurs adresses web publiques, vous devez définir des redirections permanentes de toutes ces adresses, sauf celle qui est indiquée ici. Si voutre site est accessible depuis un intranet et internet, indiquez ici l\'adresse publique et configurez le DNS de sorte que les utilisateurs de l\'intranet puisse également utiliser l\'adresse publique.';
$string['pathsunsecuredataroot'] = 'L\'emplacement du dossier de données n\'est pas sûr';
$string['pathswrongadmindir'] = 'Le dossier d\'administration n\'existe pas';
$string['pathswrongdirroot'] = 'Emplacement incorrect du dossier de données';
$string['phpextension'] = 'Extension PHP $a';
$string['phpversion'] = 'Version de PHP';
$string['reload'] = 'Actualiser';
$string['thischarset'] = 'UTF-8';
$string['thislanguage'] = 'Français';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Vous voyez cette page, car vous avez installé Moodle correctement et lancé le logiciel <b>$a->packname $a->packversion</b> sur votre ordinateur. Félicitations !';
$string['welcomep30'] = 'Cette version du paquet <b>$a->installername</b> comprend des logiciels qui créent un environnement dans lequel <b>Moodle</b> va fonctionner, à savoir :';
$string['welcomep40'] = 'Ce paquet contient également <b>Moodle $a->moodlerelease ($a->moodleversion)</b>.';
$string['welcomep50'] = 'L\'utilisation de tous les logiciels de ce paquet est soumis à l\'acceptation de leurs licences respectives. Le paquet <b>$a->installername</b> est un <a href=\"http://www.opensource.org/docs/definition_plain.html\">logiciel libre</a>. Il est distribué sous licence <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Les pages suivantes vous aideront pas à pas à configurer et mettre en place <b>Moodle</b> sur votre ordinateur. Il vous sera possible d\'accepter les réglages par défaut ou, facultativement, de les adapter à vos propres besoins.';
$string['welcomep70'] = 'Cliquer sur le bouton « Suivant » ci-dessous pour continuer l\'installation de <b>Moodle</b>.';
$string['wwwroot'] = 'Adresse web';
?>