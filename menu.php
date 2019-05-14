<nav class="navbar navbar-expand-sm navbar-light bg-light">
    
    <?php /*<a class="navbar-brand" href="#">
    <img src="../images/Logo_SAE_B0.png" width="30" height="30" class="d-inline-block align-top" alt="">
     Sports Alpes Evasion - SAE
    </a>
    */ ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">ACCUEIL <span class="sr-only">(current)</span></a>
              </li>
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?choix=100" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLUB</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item btn-sm" href="index.php?choix=100">Présentation Club</a>
                    <a class="dropdown-item btn-sm" href="index.php?choix=7700">Actualités</a>
                    <a class="dropdown-item btn-sm"  href="index.php?choix=4000">Activités</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?choix=1001" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADHESION</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item btn-sm" href="index.php?choix=1001">Informations</a>
                  <a class="dropdown-item btn-sm" href="index.php?choix=1210">Inscriptions</a>
                  <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/administratif/certificat_medical.pdf" target="_blank">Certificat Médical</a>
                  <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/administratif/Autorisation%20Parentale.pdf" target="_blank">Autorisation parentales</a>
                </div>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="index.php?choix=6002">CALENDRIER</a>
              </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?choix=2100" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MON ESPACE</a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <? if(!empty($_SESSION['SAE_ID_membre']))  
                    { ?>
                        <a class="dropdown-item btn-sm" href="index.php?choix=1120&VAR_IDadherent=<?=$_SESSION['SAE_ID_membre'];?>">Mon compte</a>
                        <a class="dropdown-item btn-sm" href="deconnexion.php">Se déconnecter</a>

                    <? } 
                    else 
                    { ?>
                        <a class="dropdown-item btn-sm" href="index.php?choix=1100">ACTIVER Compte</a>
                        <a class="dropdown-item btn-sm" href="index.php?choix=1101">CONNEXION</a>

                    <? } 
                    if(!empty($_SESSION['SAE_Admin'])) 
                    {  ?>
                        
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/communs/index.php?choix=2001">Adhérents</a>
                       
                        <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/communs/index.php?choix=3823">Trésorerie</a>
                       
                        <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/communs/index.php?choix=7610">Procès Verbaux</a>
                       
                        <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/communs/index.php?choix=5000">Matériel</a>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item btn-sm" href="https://www.sportsalpesevasion.com/communs/index.php?choix=7702">Ajouter Actualité</a>

                        <a href="https://www.sportsalpesevasion.com/actualite/newsletter_hebdo.php" class="dropdown-item btn-sm" role="button" aria-pressed="true" onclick="javascript: return confirm('ENVOYER Newsletter maintenant aux Adhérents ?');">Envoyer Newletter</a>


                        <div class="dropdown-divider"></div>
                       
                        <a class="dropdown-item btn-sm" href="https://www.isere.fr/Education/pack-rentree/cheque-jeune-isere/Pages/Partenaires-Pack-loisirs.aspx">Pack'Loisir Isère</a>

                        <a class="dropdown-item btn-sm" href="https://auvergnerhonealpes.zecarte.fr/ARA/Forms/Partenaire/Default.aspx">PASS'Région</a>

                        <a class="dropdown-item btn-sm" href="http://www.ancv.com/le-coupon-sport">Coupon Sport</a>

                        <a class="dropdown-item btn-sm" href="https://compteasso.service-public.fr/portail/">Service Publique Association</a>
                    <? } ?>
                </div>
            </li>
        </ul>
    </div>


</nav>






    

    
