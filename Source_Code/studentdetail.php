<?php
                    $sql = "SELECT * FROM password" ;
                    $res=$conn->query($sql);
                    $i=1;
                    while($row=$res->fetch_assoc())
                    {
                        $s='<tr><td>'.$i.'</td>';
                        $i++;
                        $s.='<td>'.$row['userid'].'</td>';
                        $s.='<td>'.$row['name'].'</td>';
                        $s.='<td>'.$row['hostel'].'</td>';
                        $s.='<td>'.$row['roomno'].'</td>';
                        $s.='<td>'.$row['balance'].'</td>';
                        $kd=$row['userid'].','.$row['name'].','.$row['hostel'].','.$row['roomno'].','.$row['balance'];
                        $s.="<td><a href='#;' id='".$row['userid']."'onclick='studentupdate(\"".$kd."\")'>Pay</a></td>";
                        $s.="<td><a href='#;' id='d".$row['userid']."'onclick='studentdelete(\"".$kd."\")'>Delete</a></td>";
                        $s.='</tr>';
                        echo $s;
                    }
                ?>