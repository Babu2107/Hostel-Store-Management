          a=['items','students','addstudent','addnewitem','orders','delivered','delivery'];  
          a1=['studentupdate','studentdelete','updateitem','itemdelete'];
          function view(s)
          {
           for(i=0;i<a.length;i++)
              if(a[i]!=s)
              {
                document.getElementById('a'+a[i]).style.backgroundColor= ' #333';
                document.getElementById(a[i]).style.display = 'none';
              } 
              else
              {
                document.getElementById(s).style.display = 'block';
                document.getElementById('a'+s).style.backgroundColor= ' #04AA6D';
              }
              for(i=0;i<a1.length;i++)
              {
                document.getElementById(a1[i]).style.display = 'none';
              } 

          }
          function itemupdate(s)
          {
            ar=s.split(',');
            document.getElementById('iuid').value=ar[2];
            document.getElementById('iuname').value=ar[0];
            document.getElementById('iuprice').value=ar[3];
            document.getElementById('iuquan').value=ar[4];
            document.getElementById('items').style.display = 'none';
            document.getElementById('aitems').style.backgroundColor= ' #04AA6D';
            document.getElementById('updateitem').style.display = 'block';
          }
          function studentupdate(s)
          {
            ar=s.split(',');
            document.getElementById('suid').value=ar[0];
            document.getElementById('suname').value=ar[1];
            document.getElementById('suhostel').value=ar[2];
            document.getElementById('surnum').value=ar[3];
            document.getElementById('suamt').value=ar[4];
            document.getElementById('students').style.display = 'none';
            document.getElementById('astudents').style.backgroundColor= ' #04AA6D';
            document.getElementById('studentupdate').style.display = 'block';
          }
          function studentdelete(s)
          {
            ar=s.split(',');
            document.getElementById('sdid').value=ar[0];
            document.getElementById('sdname').value=ar[1];
            document.getElementById('sdhostel').value=ar[2];
            document.getElementById('sdrnum').value=ar[3];
            document.getElementById('sdamt').value=ar[4];
            document.getElementById('students').style.display = 'none';
            document.getElementById('astudents').style.backgroundColor= ' #04AA6D';
            document.getElementById('studentdelete').style.display = 'block';
          }
          function itemdelete(s)
          {
            ar=s.split(',');
            document.getElementById('idid').value=ar[2];
            document.getElementById('idname').value=ar[0];
            document.getElementById('idimg').value=ar[1];
            document.getElementById('idprice').value=ar[3];
            document.getElementById('idquan').value=ar[4];
            document.getElementById('items').style.display = 'none';
            document.getElementById('aitems').style.backgroundColor= ' #04AA6D';
            document.getElementById('itemdelete').style.display = 'block';
          }