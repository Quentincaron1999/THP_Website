<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php")?>
</head>

<body style="background-color:#276746">
    
    <!-- Principal Navbars -->
    <?php include("components/navbar.php")?>

    <!-- Header of session -->
    <?php include("components/session_head-summer.php")?>

    <div class="columns border ">
        <div class="column is-two-thirds is-mobile is-offset-1-desktop">
            <section id="EnBref" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">En Bref</h1>
                        <img src="assets/img/banner-summer.png">
                        <p class="has-text-justified is-size-5-fullhd mt-4">
                            Au fur et à mesure des éditions du <a href="http://www.traildehauteprovence.com/#">Trail de Haute Provence</a>, l’envie est née de proposer des 
                            programmes d’entraînements combinant la préparation physique, la préparation technique, une 
                            meilleure connaissance de la nutrition pour la course et de faire découvrir les sentiers du THP.<br>
                            Au cours de ces 3 jours, nous allons vous faire découvrir le parcours de <strong><a href="http://www.traildehauteprovence.com/parcours/ultra-de-provence-150-km-7-000-m-d-6-points-itra/">l’Ultra de Provence 150 km / 7 000 m d+</a></strong>.<br>
                            Vous apprendrez également les techniques de course qui vous permettront de progresser en trail et 
                            aborderez toutes les problématiques liées à la préparation et à la performance sur un trail long, 
                            que ça soit l’entraînement, la gestion de l’effort ou la récupération.
                        </p>
                    </div>
                </div>
            </section>
            <section id="Programme" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Programme</h1>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4" >
                                    <span>Jour 1</span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item" onmouseover="this.style.background='#0F5530';">
                                        <p> • 09h30 - 10h00 Accueil et installation des participants à Forcalquier<br>
                                            • 10h00 - 20h00 1ère partie de l’Ultra de Provence (52 km / 2 400 m d+)<br>
                                            • 20h00 - 20h30 Retour au camp de base (navette organisée)<br>
                                            • 20h30 - 21h00 Douche<br>
                                            • 21h00 - 22h00 Dîner tous ensemble et discussion
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu5">
                                    <span>Jour 2</span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu5" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item" onmouseover="this.style.background='#0F5530';">
                                        <p> • 05h00 - 05h30 Petit-déjeuner / Préparation du sac de la journée<br>
                                            • 05h30 - 06h00 Retour sur l’Ultra de Provence (navette organisée) <br>
                                            • 06h00 - 19h30 2ème partie de l’Ultra de Provence (60 km / 3 600 m d+)<br>
                                            • 19h30 - 20h00 Retour au camp de base<br>
                                            • 20h00 - 21h00 Douche<br>
                                            • 21h00 - 22h00 Dîner tous ensemble et discussion
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu6">
                                    <span>Jour 3</span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu6" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item" onmouseover="this.style.background='#0F5530';">
                                        <p> • 06h00 - 06h30 Petit-déjeuner / Préparation du sac de la journée<br>
                                            • 06h30 - 07h00 Retour sur l’Ultra de Provence (navette organisée) <br>
                                            • 07h00 - 15h00 3ème partie de l’Ultra de Provence (38 km / 1 000 m d+)<br>
                                            • 15h00 - 16h00 Douche<br>
                                            • 16h00 - 18h00 Remise des diplômes aux stagiaires et bilan du stage<br>
                                            • 18h00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Fin du stage
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </section>
            <section id="Niveau" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Niveau</h1>
                        <div class="col-md-12">
                                <div class="table-responsive" style="margin-top: 47px;">
                                    <table class="table" style="background-color: #276746;">
                                        <thead>
                                            <tr>
                                                <th class="table-thp3"></th>
                                                <th class="text-center" style="color: #f7eed1;">THP 3</th>
                                                <th class="text-center" style="color: #f7eed1;">THP 4</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                                <p style="background-color: #f7eed1 ;font-size: 25px;font-weight: normal;color: #276746;margin-top: -17px;margin-bottom: -40px;">&nbsp; Les prérequis attendus pour profiter au mieux du stage</p>
                                <div class="table-responsive" style="margin-top: 47px;">
                                    <table class="table" style="background-color: #276746;">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-thp3 table-font">Préparation Physique</td>
                                                <td>Pratique régulière de la course à pied en terrains variés et autres activités d’endurance : 4 à 5 fois par semaine pendant au moins 1h15&nbsp;<br></td>
                                                <td>Pratique régulière de la course à pied en terrains variés et autres activités d’endurance : 4 à 5 fois par semaine pendant au moins 1h30&nbsp;<br></td>
                                            </tr>
                                            <tr>
                                                <td class="table-thp3 table-font">Vitesse ascensionnelle<br></td>
                                                <td>Au moins 800 m D+/h pendant 1 heure&nbsp;<br></td>
                                                <td>Au moins 950 m D+/h pendant 1 heure&nbsp;<br></td>
                                            </tr>
                                            <tr>
                                                <td class="table-thp3 table-font">Epérience en Trails</td>
                                                <td>Finisher&nbsp;sur des&nbsp;trails en montagne d'au moins 40 km et 2 000 m D+<br></td>
                                                <td>Finisher&nbsp;sur des&nbsp;trails en montagne d'au moins 60 km et 3 000 m D+<br></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p style="background-color: #f7eed1;font-size: 25px;color: #276746;margin-top: -19px;margin-bottom: -43px;">&nbsp; Mon activité pendant le stage</p>
                                <div class="table-responsive" style="margin-top: 47px;">
                                    <table class="table" style="background-color: #276746;">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-thp3 table-font">Distance moyenne par jour</td>
                                                <td class="text-center">30 à 40 km<br></td>
                                                <td class="text-center">40 à 60 km<br></td>
                                            </tr>
                                            <tr>
                                                <td class="table-thp3 table-font">Dénivelé + moyen par jour</td>
                                                <td class="text-center">1 500 à 2 500 m<br></td>
                                                <td class="text-center">2 000 à 3 500 m<br></td>
                                            </tr>
                                            <tr>
                                                <td class="table-thp3 table-font">Type de terrain</td>
                                                <td>Majorité de monotrace et de sentiers techniques (pierriers, névés...)<br></td>
                                                <td>Majorité de monotrace et de sentiers techniques (pierriers, névés...)<br></td>
                                            </tr>
                                            <tr>
                                                <td class="table-thp3 table-font">Profil</td>
                                                <td>Quelques passages aériens<br></td>
                                                <td>Quelques passages aériens<br></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section id="LeMateriel" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Le Matériel</h1>
                        <p style="margin-right: 2%;margin-left: 0%; ">Pensez à adapter cette liste en fonction de la météo et de vos besoins personnels !<br></p>
                        <div class="row">
                    <div class="col-md-12">
                        <div></div>
                        <div class="table-responsive">
                            <table class="table" style="background-color: #276746;">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="color: #f7eed1;">Obligatoire</th>
                                        <th class="text-center" style="color: #f7eed1;">Recommandé</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td  ><br>Un sac à dos de trail de 5 à 15 l<br>Une réserve en eau d’au moins 2 l<br>Une veste imperméable ou coupe-vent<br>Un haut à manches longues chaud<br>Chaussettes adaptées au trail<br>Une paire de lunettes de soleil<br>Casquette<br>Un
                                            tour de cou<br>Réserve en barres, fruits secs ... afin d’être autonome en sortie longue (de 8 à 13h30)<br>Une lampe frontale<br>Des vêtements de rechanges pour la durée du stage<br>Des chaussures de rechange<br><br></td>
                                        <td
                                              ><br>Un bonnet et des gants fins<br>Bâtons (pour s’entraîner)<br>Un peu d’argent liquide<br>Une tenue pour le soir<br>Un couteau de poche<br>Boules Quies ou bouchons d’oreilles<br>Collant ou pantalon long (pour sortie
                                            longue)<br id="Niveau">Pharmacie personnelle avec pansements double-peaux <br>Crème solaire et stick lèvres<br>Claquettes/Tongues</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                       </div>
                </div>
            </section>
            <section id="VotreCadre" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Votre Cadre</h1>
                        <p class="has-text-justified is-size-5-fullhd mt-4">
                            Vous serez hébergés en maison d’hôte au <a href="https://www.camping-forcalquier.com/camping-alpes-de-haute-provence/" target="_blank" style="font-weight: bold;">camping de Forcalquier</a><br>
                            Les déjeuners et les dîners seront concoctés par le restaurant  <a href="https://www.facebook.com/lesperluetteforcalquier/" target="_blank" style="font-weight: bold;">L'Esperluette</a>
                        </p>

                        <iframe allowfullscreen frameborder="0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDq1G7DlVkMkuf5YdPcltF4jFLdBAJBS9s&amp;q=Camping+Forcalquier%2C+Avenue+Claude+Delorme%2C+04300+Forcalquier&amp;zoom=14" width="100%" height="400"></iframe>
                        
                    </div>
                </div>
            </section>
            <section id="LesPlus" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Les + du séjour</h1>
                        <ul>
                            <li class="is-size-5-fullhd">• Situé au cœur de la Provence</li>
                            <li class="is-size-5-fullhd">• Reconnaissance de la totalité du parcours de <a target="_blank" href="http://www.traildehauteprovence.com/parcours/ultra-de-provence-150-km-7-000-m-d-6-points-itra/">l’Ultra de Provence</a></li>
                            <li class="is-size-5-fullhd">• Immersion totale pendant 3 jours</li>
                            <li class="is-size-5-fullhd">• Partages d’expériences </li>
                            <li class="is-size-5-fullhd">• Petit groupe</li>
                            <li class="is-size-5-fullhd">• 2 encadrants pour s’adapter aux différents niveaux</li>
                            <li class="is-size-5-fullhd">• Pension complète de très bonne qualité</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="Tarif" class="hero jump" style="padding-top: 6.5rem; margin-top: -6.5rem;">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Tarif</h1>
                        <h2>495 € par personne</h2>
                        <p class="has-text-justified is-size-5-fullhd mt-4">
                            Ce prix comprend la pension complète du vendredi midi au dimanche midi inclus, les navettes pour aller et venir du lieux d’hébergement aux points de départ et d’arrêt des sections de parcours journalières.
                        </p>
                        <p class="has-text-justified is-size-5-fullhd mt-4">
                            Ce prix ne comprend pas le voyage A/R pour se rendre au stage, les dépenses personnelles (bar, autre extra), les frais bancaires pour l'inscription, ni l'assurance annulation proposée au moment de l'inscription.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <div class="column">
            <?php include("components/left-display.php")?>
        </div>
    </div>
    <?php include("components/temoignage.php")?>
    <?php include("components/footer.php")?>
    <script src="assets/js/navbar-fixed-top.js"></script>


</body>
</html>