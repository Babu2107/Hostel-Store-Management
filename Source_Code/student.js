a=['profile','order','history','status'];  
a1=['changepass','purchase'];
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
function changepass()
{
  document.getElementById("profile").style.display = 'none';
  document.getElementById("changepass").style.display = 'block';
}
function aupdate(s)
{
  ar=s.split(',');
  bb=document.getElementById(ar[0]);
  tamt=document.getElementById('tamt');
  if(Number(bb.value)<Number(ar[3]))
  {
    bb.value=Number(bb.value)+1;
    to=Number(tamt.textContent)+Number(ar[2]);
    tamt.innerHTML=to;
  }
  if(Number(ar[1])<Number(tamt.textContent) || Number(tamt.textContent)==0)
  {
    document.getElementById("buy1").style.display = 'none';
    tamt.style.color="red";
  }
  else
  {
    document.getElementById("buy1").style.display = 'block';
    tamt.style.color="black";  
  }
}
function supdate(s)
{
  ar=s.split(',');
  bb=document.getElementById(ar[0]);
  tamt=document.getElementById('tamt');
  if(Number(bb.value)!=0)
  {
    bb.value=Number(bb.value)-1;
    to=Number(tamt.textContent)-Number(ar[2]);
    tamt.innerHTML=to;
  }
  if(Number(ar[1])<Number(tamt.textContent) || Number(tamt.textContent)==0)
  {
  tamt.style.color="red";
  document.getElementById("buy1").style.display = 'none';
  
  }
  else
  {
    tamt.style.color="black";  
    document.getElementById("buy1").style.display = 'block'; 
  }
}
