<?php
echo '<div id="c2carrousel">';
$cheminDossierImages="./";
$scandir = scandir($cheminDossierImages);
$images=[];
$nbr=0;
foreach($scandir as $cle => $fichier){
    $fichier=strtolower($fichier);
    if(preg_match("#\.(jpg|jpeg|png|gif|bmp)$#",$fichier)){
        $nbr++;
        $images[$nbr]=$fichier;
    }
}
if(count($images)==0){
    echo "Aucune image dans ce dossier.";
} else {
    $lienPrecedente='';
    $imageAffichee=$images[1];
    $lienSuivante=count($images>1)?'<a href="carrousel.php?image=2">Image suivante</a>':'';
    if(isset($_GET['image']) and is_int((int)$_GET['image'])){
        if(array_key_exists($_GET['image'],$images)){
            $loremienPrecedente=isset($images[$_GET['image']-1])?'<a href="carrousel.php?image='.($_GET['image']-1).'">Image précédente</a>':'';
            $imageAffichee=$images[$_GET['image']];
            $lienSuivante=isset($images[$_GET['image']+1])?'<a href="carrousel.php?image='.($_GET['image']+1).'">Image suivante</a>':'';
        }
    }
    echo '<table style="width:100%">';
        echo '<tr><th>'.count($images).' image'.(count($images)>1?'s':'').'</th></tr>';
        echo '<tr><td style="text-align:center">'.$lienPrecedente.' '.$imageAffichee.' '.$lienSuivante.'</td></tr>';
        echo '<tr><td style="text-align:center"><img src="'.$cheminDossierImages.'/'.$imageAffichee.'" alt="Image..."></td></tr>';
    echo '</table>';
}
echo '</div>';
?>
