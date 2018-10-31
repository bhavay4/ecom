document.index=1

function nslide(n)
{
 document.index=n+document.index
 change();
}
function change()
{
    if(document.index<1)
        {
            document.index=3; 
        }
    if(document.index>3)
        {
            document.index=1;
        }
    var x="f"+document.index;
  
    for(i=1;i<=3;i++)
        {
            var z="f"+i;
         document.getElementById(z).style.display = "none";
        }
    
  document.getElementById(x).style.display ="block";
}
change();