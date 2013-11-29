<?php
if (!isset ($_SESSION['accuser']))
{
echo "Je moet ingelogd zijn om de download pagina te bekijken.";
header("refresh:3; url=index.php?content=login");
exit();
}
?>
<div id=downloads>
<h2>Downloads</h2>
<h3>Games</h3>
<h4>Shmup</h4>
<img src='./images/shmup.png'>
<br>
<a href='./Downloads/Games/shmup.zip'>Download</a>
<br>
<br>
<h4>Documentatie</h4>
<div>
<a href='./Downloads/Docs/ShmupDocEN.pdf'>English</a>
<a href='./Downloads/Docs/ShmupDocNL.pdf'>Nederlands</a>
</div>
</div>