<?php
  $sql = "SELECT * FROM orders where status=0";
  $res=$conn->query($sql);
  $i=1;
  if($res->num_rows==0)
  {
    $bab='<h1><center>No orders have been placed.</center></h1>';
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
    <td>Modify</td>
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
      $s.='<td>Ordered</td>';
      $s.="<td><input type='hidden' class='rah' id='".$row['productid']."' name='pidd' value='".$row['productid']."'>";
      $s.='<button type="submit" class="finbu">Packed</button></td>';
      $s.='</tr></form>';
      echo $s;
    }
  }
?>