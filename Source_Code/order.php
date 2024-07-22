<?php
  $sql = "SELECT * FROM items";
  $res=$conn->query($sql);
  $i=1;
  while($row=$res->fetch_assoc())
  {
    $s='<tr><td>'.$i.'</td>';
    $i++;
    $s.='<td>'.$row['iname'].'</td>';
    $s.="<td><img src='".$row['itemimage']."'height='128px'width='128px'/></td>";
    $s.='<td>'.$row['icode'].'</td>';
    $s.='<td>'.$row['price'].'</td>';
    $s.='<td>'.$row['quantity'].'</td>';
    if($row['quantity']!=0)
      $s.="<td><font  color='green'>Available</font></td>";
    else
      $s.="<td><font color='red'>Unavailable</font></td>";
    $kd1="in". $row['icode'].','.$spbal.','.$row['price'].','.$row['quantity'];
    $s.="<td class='but' ><button type='button' onclick=aupdate('". $kd1."')>+</button ><input type='text' size='1'value='0' id='in". $row['icode']."'readonly/><button type='button' onclick=supdate('". $kd1."')>-</button></td>";
    $s.='</tr>';
    echo $s;
  }
  $s2='<tr><td colspan="2">BALANCE : </td><td><label id="tbal">'.$spbal.'</label></td><td colspan=4>TOTAL AMOUNT :</td><td><label id="tamt">0</label></td></tr>';
  $s3='<tr><td colspan=5> </td><td><center><button  class="button_slide slide_down"id="buy1" onclick="buy21()">BUY</button><td><center><button  class="button_slide slide_down" onclick="location.reload()">CANCEL</button></center></td><td><button type="button" class="button_slide slide_down" onclick="clear1(\'order\')">CLEAR</button></td></tr>';
  echo $s2;
  echo $s3;  
?>