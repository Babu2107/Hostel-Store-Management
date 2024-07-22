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
    $kd=$row['iname'].','.$row['itemimage'].','.$row['icode'].','.$row['price'].','.$row['quantity'];
    $s.="<td><a href='#;' id='".$row['icode']."' onclick='itemupdate(\"".$kd."\")'>Update</a></td>";
    $s.="<td><a href='#;' id='d".$row['icode']."' onclick='itemdelete(\"".$kd."\")'>Delete</a></td>";
    $s.='</tr>';
    echo $s;
  }
?>