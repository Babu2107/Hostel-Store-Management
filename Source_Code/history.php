<?php
  $sql = "SELECT * FROM orders where status=2 AND studentid='".$_SESSION['sname']."'";
  $res=$conn->query($sql);
  $i=1;
  while($row=$res->fetch_assoc())
  {
    $s='<tr><td>'.$i.'</td>';
    $i++;
    $row['data']=str_replace("\n",'<br>',$row['data']);
    $s.='<td>'.$row['data'].'</td>';
    $s.='<td>'.$row['productid'].'</td>';
    $s.='<td>Delivered</td>';
    $s.='</tr>';
    echo $s;
  }
?>