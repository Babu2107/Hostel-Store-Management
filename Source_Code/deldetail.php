<?php
  $sql = "SELECT * FROM orders where status=2";
  $res=$conn->query($sql);
  $i=1;
  if($res->num_rows==0)
  {
    $bab='<h1><center>No items available for Delivery.</center></h1>';
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
    </tr>";
    echo $bab;while($row=$res->fetch_assoc())
  {
    $s='<tr><td>'.$i.'</td>';
    $i++;
    $row['data']=str_replace("\n",'<br>',$row['data']);
    $s.='<td>'.$row['studentid'].'</td>';
    $s.='<td>'.$row['data'].'</td>';
    $s.='<td>'.$row['productid'].'</td>';
    $s.='<td>Delivered</td>';
    $s.='</tr>';
    echo $s;
  }
  }
?>