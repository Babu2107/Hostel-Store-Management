<?php
  $sql = "SELECT * FROM orders where status=1";
  $res=$conn->query($sql);
  $i=1;
  if($res->num_rows==0)
  {
    $bab='<h1><center>No Details</center></h1>';
    echo $bab;  
  }
  else
  {
    $bab="<tr>
    <td>SNO</td>
    <td>Student ID</td>
    <td>Details</td>
    <td>Bill NO</td>
    <td>Status</td>
    <td>Delivery</td>
    </tr>";
    echo $bab;
    while($row=$res->fetch_assoc())
    {
      $s='<form action="" method="post">';
      $s.='<tr><td>'.$i.'</td>';
      $i++;
      $row['data']=str_replace("\n",'<br>',$row['data']);
      $s.='<td>'.$row['studentid'].'</td>';
      $s.='<td>'.$row['data'].'</td>';
      $s.='<td>'.$row['productid'].'</td>';
      $s.='<td>Packed</td>';
      $s.="<td><input type='hidden' class='rah' id='".$row['productid']."' name='piidd' value='".$row['productid']."'>";
      $s.='<button type="submit" class="finbu">Delivery</button></td>';
      $s.='</tr></form>';
      echo $s;
    }
  }
?>