<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php")?>
</head>

<body>
    
    <!-- Principal Navbars -->
    <?php include("components/navbar.php")?>

    <!-- Header of session -->
    <?php include("components/session_head-spring.php")?>

    <div class="columns border ">
        <div class="column is-two-thirds is-mobile is-offset-1-desktop">
            <section id="EnBref" class="hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">En Bref</h1>
                        <img src="assets/img/banner-spring.png">
                        <p class="has-text-justified is-size-5-fullhd mt-4">
                            Au fur et à mesure des éditions du <a href="http://www.traildehauteprovence.com/#">Trail de Haute Provence</a>, l’envie est née de proposer des 
                            programmes d’entraînements combinant la préparation physique, la préparation technique, une 
                            meilleure connaissance de la nutrition pour la course et de faire découvrir les sentiers du THP.<br>
                            Vous apprendrez également les techniques de course qui vous permettront de progresser en trail et 
                            aborderez toutes les problématiques liées à la préparation et à la performance sur un trail long, 
                            que ça soit l’entraînement, la gestion de l’effort ou la récupération.
                        </p>
                    </div>
                </div>
            </section>
            <section id="Programme" class="hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Programme</h1>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>Jour 1</span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item">
                                        <p> •  13h30 - 14h00 Accueil et installation des participants<br>
                                            • 14h00 - 15h30 Présentation du stage et recueil des souhaits des participants<br>
                                            • 15h30 - 18h00 Sortie simple avec ou sans bâtons. Quelle est ma meilleuremontée ? La descente une affaire de technique (vidéos) ! <br>
                                            • 18h00 - 18h30 Douche<br>
                                            • 18h30 - 20h00 Analyse des vidéos et échanges avec Julien<br>
                                            • 20h00 - 21h00 Dîner tous ensemble et discussion<br>
                                            • 21h00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Vous et les facteurs de performance en trail vus du côté athlète<br>
                                        </p>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>Jour 2</span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item">
                                        <p>• 07h00 - 07h30 Petit-déjeuner<br>
                                            • 07h30 - 14h00 Sur les traces du THP : de 20 à 40 km (en fonction du niveau)<br>
                                            • 14h00 - 15h00 Déjeuner<br>
                                            • 15h00 - 16h30 Temps libre et récupération<br>
                                            • 16h30 - 18h00 Travail sur la vitesse, adapté à toutes et tous<br>
                                            • 18h00 - 19h00 Séance de Yoga<br>
                                            • 19h00 - 20h00 Douche et temps libre<br>
                                            • 20h00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dîner avec analyse des vidéos suivi d’un débat sur les accessoires de la performance
                                        </p>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>Jour 3</span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item">
                                        <p> • 07h00 - 08h00 Séance de Yoga<br>
                                            • 08h00 - 09h00 Petit déjeuner<br>
                                            • 09h00 - 12h00 Sortie nature : de la théorie à la pratique<br>
                                            • 12h00 - 12h30 Douche<br>
                                            • 12h30 - 13h30 Déjeuner<br>
                                            • 13h30 - 15h00 Remise des diplômes aux stagiaires et bilan du stage<br>
                                            • 15h00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fin du stage
                                        </p>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Niveau" class="hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Niveau</h1>
                        <div class="col-md-12" style="margin-top: -5%;margin-bottom: 8%;">
                        <div class="table-responsive" style="margin-top: 47px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 133px;"></th>
                                        <th class="text-center">THP 1</th>
                                        <th class="text-center" style="width: 283px;">THP 2</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <p class="text-left" style="background-color: #276746;color: #f7eed1;margin-top: -16px;margin-bottom: -43px;font-size: 23px;margin-left: 1px;">&nbsp; Les prérequis attendus pour profiter au mieux du stage</p>
                        <div class="table-responsive" style="margin-top: 47px;">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: bold;margin-top: 0px;">Préparation Physique</td>
                                        <td>Pratique régulière de la course à pied en terrains variés et autres activités d’endurance : 3 fois par semaine pendant 1h à 1h30 environ<br></td>
                                        <td>Pratique régulière de la course à pied en terrains variés et autres activités d’endurance : 3 à 4 fois par semaine pendant au moins 1h15&nbsp;<br></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">Vitesse ascensionnelle<br></td>
                                        <td>Au moins 300 m D+/h pendant 1 heure&nbsp;<br></td>
                                        <td>Au moins 600 m D+/h pendant 1 heure&nbsp;<br></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">Epérience en Trails</td>
                                        <td>-&nbsp;<br></td>
                                        <td>Finisher&nbsp;sur des&nbsp;trails&nbsp;de 20 à 40 km&nbsp;<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="background-color: #276746;color: #f7eed1;font-size: 23px;margin-top: -21px;margin-bottom: -45px;">&nbsp; Mon activité pendant le stage</p>
                        <div class="table-responsive" style="margin-top: 47px;">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                    <tr>
                                        <td style="font-weight: bold;">Distance moyenne par jour</td>
                                        <td class="text-center">15 à 20 km<br></td>
                                        <td class="text-center">20 à 25 km<br></td>
                                    </tr>
                                    <tr>
                                        <td style="letter-spacing: 0px;font-weight: bold;">Dénivelé + moyen par jour</td>
                                        <td class="text-center">1 000 à 1 500 m<br></td>
                                        <td class="text-center">1 000 à 2 000 m<br></td>
                                    </tr>
                                    <tr>
                                        <td style="letter-spacing: 0px;font-weight: bold;">Type de terrain</td>
                                        <td style="color: rgb(0,0,0);">Alternance de chemins larges et de monotrace (pierriers et sous-bois souples)<br></td>
                                        <td  id="Dates">Majorité de monotrace et de sentiers techniques (pierriers, névés...)<br></td>
                                    </tr>
                                    <tr>
                                        <td style="letter-spacing: 0px;font-weight: bold;">Profil</td>
                                        <td style="color: rgb(0,0,0);">Pas ou peu de passages délicats ou aériens<br></td>
                                        <td style="color: rgb(0,0,0);">Quelques passages aériens possibles (crêtes de Lure)<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <section id="LeMateriel" class="hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Le Materiel</h1>
                        <p style="margin-right: 2%;margin-left: 0%;color: rgb(0,0,0);">Pensez à adapter cette liste en fonction de la météo et de vos besoins personnels !<br></p>
                        <div class="row">
                    <div class="col-md-12">
                        <div></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Obligatoire</th>
                                        <th class="text-center">Recommandé<br></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="color: rgb(0,0,0);"><br>Un sac à dos de trail de 5 à 15 l<br>Une réserve en eau d’au moins 1 l<br>Une veste imperméable ou coupe-vent<br>Un haut à manches longues chaud<br>Chaussettes adaptées au trail<br>Une paire de lunettes de soleil<br>Casquette<br>Un
                                            tour de cou<br>Réserve en barres, fruits secs ... afin d’être autonome en sortie longue<br>Une lampe frontale<br>Des vêtements de rechanges pour la durée du stage<br>Des chaussures de rechange<br><br></td>
                                        <td
                                            style="color: rgb(0,0,0);" ><br>Un bonnet et des gants fins<br>Bâtons (pour s’entraîner)<br>Un peu d’argent liquide<br>Une tenue pour le soir<br>Un couteau de poche<br>Boules Quies ou bouchons d’oreilles<br>Collant ou pantalon long (pour sortie
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
            <section id="VotreCadre" class="hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Votre Cadre</h1>
                        <p class="has-text-justified is-size-5-fullhd mt-4">
                            Vous serez hébergés en maison d’hôte à <a href="http://www.gite-labeaudine.com/accueil/" target="_blank" style="font-weight: bold;">La Beaudine</a>, à Forcalquier<br>
                            Les dîners et les déjeuners seront pris sur place<br>
                            Les déjeuners seront concoctés par le restaurant <a href="https://www.facebook.com/lesperluetteforcalquier/" target="_blank" style="font-weight: bold;">L'Esperluette</a>
                            et les dîners par <a href="http://www.gite-labeaudine.com/accueil/" target="_blank" style="font-weight: bold;">La Beaudine</a>
                        </p>

                        <iframe class="mt-5" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDq1G7DlVkMkuf5YdPcltF4jFLdBAJBS9s&amp;q=Bergerie+la+Beaudine&amp;zoom=11" width="100%" height="400"></iframe>
                        
                    </div>
                </div>
            </section>
            <section id="LesPlus" class="hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Les + du séjour</h1>
                        <ul style="margin-right: 0px;margin-left: -19px;">
                            <li style="font-size: 21px;margin-right: 0px;color: rgb(0,0,0);">• Situé au cœur la Provence<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Pension complète de très bonne qualité (repas, literie)<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Immersion totale pendant 3 jours<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Partages des expériences<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Visionnages vidéos pour un meilleur apprentissage<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Petit groupe&nbsp;<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• 2 encadrants pour s’adapter aux différents niveaux<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Découvertes des tracés du Trail de Haute Provence<br></li>
                            <li style="font-size: 21px;color: rgb(0,0,0);">• Les sorties partent du gîte<br></li>
                        </ul>
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