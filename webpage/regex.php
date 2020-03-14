<!-- <?php 
$pattern="/()?quick( )?/";
$string="The quick brown fox";
$replacement="";
echo preg_replace($pattern, $replacement, $string);
?> -->


<!-- <?php 
$pattern="/[a-z]+(\d)*(\D)*(\d)*@gmail.com/";
$string="aziza.aripova954@gmail.com";
$replacement="";
echo preg_replace($pattern, $replacement, $string);
?> -->

<!-- <?php
$pattern="/\+998\-(\d){2}\-(\d){3}\-(\d){4}/";
$string="+998-97-144-4444";
$replacement="";
 echo preg_replace($pattern, $replacement, $string);
?> -->
<!-- <?php 
 $pattern="/ /";
 $string="The quick \" \" brown fox";
 $replacement="";
 echo preg_replace($pattern, $replacement, $string);
 ?> -->

<!-- <?php
$pattern="/[^\,\.\d]/";
 $string="$123,34.00A";
 $replacement="";
 echo preg_replace($pattern, $replacement, $string);
 ?>
 -->

<!-- ?php 
$pattern="/<br \/>/";
$string = nl2br("Twinkle, twinkle, little star,\n How I wonder what you are.\n Up above the world so high,\n Like a diamond in the sky.\n");
  $replacement="";

echo preg_replace($pattern, $replacement, $string);
 ?>  -->

<!-- <?php
$pattern="/\[/";
$string="The quick brown [fox].";
$chars=preg_split($pattern, $string);
 for ($i=0;$i<2;$i++) {
  $string1=$chars[1];
 } 
 echo preg_replace("/[^a-z]/", "", $string1);
 ?> -->

 
