<?php
for($i=1;$i<=1000;$i++)
{
    if(primo($i))
        echo "<br/>El número ".$i." es primo";
    
}
 
function primo($num)
{
    $cont=0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            if(++$cont>1)
                return false;
        }
    }
    return true;///////////////////
}
?>

