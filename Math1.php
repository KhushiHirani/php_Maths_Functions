<!-- abs ()-->
<?php
echo abs(8);
echo abs(8.5);
echo abs(-7.9);
?>

<br/>
<!-- ceil()  -->
<?php
echo ceil(0.10); // Returns 1 
echo ceil(0.90); // Returns 1 
echo ceil(0.6); // Returns 1 
echo ceil(0.02); // Returns 1 
?>

<br/>
<!-- floor() -->
<?php
echo floor(25.4); // Returns 25
echo floor(25.04); // Returns 25
echo floor(25.99); // Returns 25 
echo floor(-11.5); // Returns 11
?>

<br/>
<!-- round() -->
<?php
echo round(13.6); // 14
echo round(13.6,0); // 14
echo round(7.89543,2); // 7.9
echo round(354.83543,-2); // 400
echo round(4.054,2); // 4.05
echo round(9.066,2); // 9.07
?>

<br/>
<!-- min() -->
<?php
echo min(4,24,3,5,11.7);
echo min(10,99,65,8,87);
?>

<?php
$arr = 
array(5,4,8,54,80,42,1,5);
echo min($arr);
?>

<br/>
<!-- max() -->
<?php
$arr=array(5,4,8,54,80,42
,1,5);
echo max($arr);
?>
<br/>
<?php
echo max(54,-54,2,5,77);
?>

<br/>
<!-- getrandmax() -->
<?php
echo(getrandmax()); 
?>
