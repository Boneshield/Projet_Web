
<script type="text/javascript">
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#FFD9CF";
   else
      champ.style.backgroundColor = "";
}
 
function verifMdp2(champ)
{
  if(champ.value != document.getElementById('mdp').value)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
</script>


    