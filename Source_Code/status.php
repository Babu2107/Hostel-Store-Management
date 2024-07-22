<?php
  $sql = "SELECT * FROM orders where studentid='".$_SESSION['sname']."'";
  $res=$conn->query($sql);
  $i=1;
  while($row=$res->fetch_assoc())
  {
    if($row['status']!=2)
    {
        $s='<tr><td>'.$i.'</td>';
        $i++;
        $row['data']=str_replace("\n",'<br>',$row['data']);
        $s.='<td>'.$row['data'].'</td>';
        $s.='<td>'.$row['productid'].'</td>';
        if($row['status']==1)
        {
            $s.='<td>Packed</td>';
        }
        else
        {
            $s.='<td>Ordered</td>';
        }
        $s.='</tr>';
        echo $s;
    }
  }
?>