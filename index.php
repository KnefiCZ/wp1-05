<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>xd</title>
  </head>
  <body>
    <h1>Bezdomovec</h1>
<?php

    $vodkaPrice = 130 ;
    $homelessMoney = 25 ;
    $studentka = 17 ;
    $Boi = 40 ;
    $podnikatel = 100 ;
    $nigger = 50

 ?>

    <p> <?php echo"Bezdomovec má $homelessMoney Korun českých" ;
        ?>
    </p> <?php  $homelessMoney = $homelessMoney  +  $studentka ;
           echo"Soucítící studentka, čekající na vlak, vkládá do čepice 17 Kč. Bezdomovec má $homelessMoney Korun českých. "  ;
     ?>
    <p> <?php $homelessMoney = $homelessMoney  +  $Boi ;
           echo"Muž, který právě skončil úspěšně s přijímacím pracovním pohovorem, věnuje bezdomovci peníze v hodnotě 40 kč. Bezdomovec má $homelessMoney Korun českých." ;
     ?>
   </p>
   <p> <?php $homelessMoney = $homelessMoney + $podnikatel ;
      echo"Před vstupem do pendolina jde kolem bezdomovce bohatý podnikatel. Aby neměl těžkou peněženku zbaví se drobné bankovky v hodnotě 100 Kč. Bezdomovec má $homelessMoney Korun českých." ;
    ?>
   </p>
   <p> <?php $homelessMoney = $homelessMoney - $nigger ;
        echo"Kolem čepice bezdomovce se nenápadně prochází skupinka nepřizpůsobivých spoluobčanů a sebere mu z ní 50 Kč. Bezdomovec má $homelessMoney Korun českých. "  ;
    ?>
   </p>
   <p><?php echo "Peníze bezdomovce před návštěvou večerky: $homelessMoney . ";

    ?>
   </p>
   <?php if ($homelessMoney >= $vodkaPrice) { $homelessMoney =  $homelessMoney - $vodkaPrice ; ?>
    Bezďák má vodku a  <?php } ?>
   <?php
    echo "zbytek bezdomovo zisku po návštěvě večerky: $homelessMoney" ;
    ?>
  </body>
</html>
