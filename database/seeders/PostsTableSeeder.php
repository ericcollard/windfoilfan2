<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'post_categories_id' => 1,
                'title' => 'Notre sélection Foil 2022',
                'description' => 'Petite sélection de nos foils référence à la date de Janvier 2022',
                'body' => '<div class="container">
<div class="row">
<div class="col">
<p>Avec l\'explosion de la pratique du foil en quelques ann&eacute;es, la plupart des marques propopsent d&eacute;sormais leur mod&egrave;le, et ceci vient s\'ajouter aux foils propos&eacute;s par les fabriquants sp&eacute;cifiques.</p>
<p>La cons&eacute;quence est<span style="color: #ff0000;"><strong> un choix exceptionnellement vaste</strong></span> pour un sport qui n\'a que 6 ans d\'existance ... et cela devient logiquement un v&eacute;ritable casse t&ecirc;te pour celui qui d&eacute;sire investir. Bien &eacute;videmment, plus on cherche des avis pour fonder son choix, plus on est inond&eacute; de conseils contradictoires.</p>
<p>Pour autant, nos nombreux tests montrent que les mod&egrave;les sont tr&egrave;s diff&eacute;rents entre eux, et logiquement certains conviendront mieux que d\'autres &agrave; votre pratique personnelle. On essaye donc ici de faire un point &agrave; un instant T avec notre point de vue.</p>
</div>
<div class="col">
<div style="background-color: powderblue; padding: 10px; margin-bottom: 10px;">Non, il n\'y a pas 1 foil meilleur que les autres. Ce n\'est pas parceque vous me voyez souvent naviguer avec du F4, Phantom et Moses que se sont les meilleurs foils, mais simplement que ce sont des r&eacute;f&eacute;rences int&eacute;ressantes qui me servent comme base de comparaison pour leurs qualit&eacute;s respectives.</div>
<div style="background-color: powderblue; padding: 10px;">Ce n\'est pas parceque vous avez fait un choix diff&eacute;rent du n&ocirc;tre que nous pensons que vous avez tort. D\'abord car nous testons avec nos ressentis, et ensuite car nos choix s\'appuient sur des comparaisons : quand on conseille un mod&egrave;le en notre &acirc;me et conscience, c\'est qu\'on le consid&egrave;re comme un meilleur choix, mais cela ne veut pas dire que ce soit le seul.</div>
</div>
</div>
<div class="row">
<div class="col">
<h2>Les param&egrave;tres du choix</h2>
<p>Les choses &eacute;tant pos&eacute;es, on nous interroge quotidiennement sur le choix d\'un foil et, comme je r&eacute;ponds syst&eacute;matiquement, faire un choix &agrave; un instant T dans un panel si large n&eacute;cessite id&eacute;alement de prendre en compte de tous les &eacute;l&eacute;ments suivants</p>
<ul>
<li>Votre niveau technique en foil</li>
<li>Votre gabarit</li>
<li>Vos attirances (vitesse, facilit&eacute;, maniabilit&eacute;, etyc.)</li>
<li>Vos conditions de navigation principales (plan d\'eau, plage de vent)</li>
<li>Votre flotteur</li>
<li>Vos voiles (mod&egrave;les et tailles)</li>
<li>Votre budget</li>
<li>Votre envie d\'&eacute;volution</li>
<li>Vos contraintes de transport et de stockage</li>
</ul>
<p>En secouant le tout, on a des chances de faire un choix qui va permettre d\'optimiser le plaisir que vous allez prendre sur l\'eau, tout en respectant vos contraintes. Evidemment, compte tenu du nombre de param&egrave;tres, ce choix doit &ecirc;tre tr&egrave;s individualis&eacute;. Qui plus est, le conseil que nous pourrons donner &eacute;volue en fonction des nouveaux mod&egrave;les (ou nouvelles configurations) qui sortent r&eacute;guli&egrave;ment et viennent bouleverser (ou pas) la donne.</p>
<p>Pour faire ce choix, notre base de donn&eacute;e de test (<a href="https://windfoilfan.glissattitude.com">https://windfoilfan.glissattitude.com</a>) est un outil pr&eacute;cieux mais je me suis tout de m&ecirc;me essay&eacute; &agrave; l\'exercice de faire une proposition de mod&egrave;le pr&eacute;f&eacute;rentiel pour chaque case d\'une matrice PROGRAMME / GABARIT. Lorsqu\'il y a plusieurs choix, j\'ai indiqu&eacute; en <span style="color: #800080;"><strong>VIOLET</strong></span>, le param&egrave;tre essentiel qui oriente vers le choix de ce mod&egrave;le.</p>
<h2>S&eacute;lection DEBUTANT (au 10/01/2022)</h2>
<table>
<tbody>
<tr>
<td style="width: 10%;">&nbsp;</td>
<td style="width: 30%;">Petit gabarit</td>
<td style="width: 30%;">Gabarit moyen</td>
<td style="width: 30%;">Gros gabarit</td>
</tr>
<tr>
<td>
<p>Objectif : voler avec un investissement minimum (autour de 1000eur)</p>
</td>
<td style="background-color: powderblue;" colspan="2">
<p><span style="color: #800080;"><strong>RASSURANT</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/starboard-supercruiser-2019">Starboard Supercruiser</a> : pour ceux qui favorisent le c&ocirc;t&eacute; ultra rassurant en acceptant une vitesse r&eacute;duite, et une &eacute;volutivit&eacute; moindre</p>
<p><span style="color: #800080;"><strong>EVOLUTIF</strong></span></p>
<p>Alpinefoil Revo : pour ceux qui favorisent l\'&eacute;volutivit&eacute; (compatible avec toute la gamme d\'aile Alpine), avec une glisse sup&eacute;rieure au Supercruiser</p>
</td>
<td style="background-color: powderblue;">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/fanatic-flow-900-2019">Fanatic Flow 1200</a> : pour ceux qui privil&eacute;gient le contr&ocirc;le et la polyvalence</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<h2>S&eacute;lection FREERIDE (au 10/01/2022)</h2>
<table>
<tbody>
<tr>
<td style="width: 10%;">&nbsp;</td>
<td style="width: 30%;">Petit gabarit</td>
<td style="width: 30%;">Gabarit moyen</td>
<td style="width: 30%;">Gros gabarit</td>
</tr>
<tr>
<td>
<p>Objectif : se balader avec une vitesse lin&eacute;aire, sans chercher la vitesse, et en paufinant ses manoeuvres</p>
</td>
<td style="background-color: powderblue;">
<p><span style="color: #800080;"><strong>ECONOMIQUE</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/taaroa-noe-80-freeride-2018">Taaroa Noe 80</a> : Pour ceux qui veulent accompagner un flotteur plut&ocirc;t &eacute;troit, et des voiles inf&eacute;rieures &agrave; 7.5m2</p>
</td>
<td style="background-color: powderblue;">
<p><span style="color: #800080;"><strong>MANIABLE &amp; PLAGE D\'UTILISATION (light &gt; strong wind)</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/ga-mach-1-2019">Moses Vento 85 Freeride</a>&nbsp;Pour ceux qui privil&eacute;gient un foil vivant, peu rapide, mais qui d&eacute;colle t&ocirc;t et offre des belles sensations de glisse. Excellent &eacute;galement en mode FREEWAVE dans le vent soutenu</p>
<p><span style="color: #800080;"><strong>NAV CALEE &amp; VENT MEDIUM &agrave; FORT</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/afs-wind-85-2019">AFS Wind 85</a> (F770 ou F1080 au dessus de 85kg) : Pour ceux qui pr&eacute;f&egrave;rent une attitude cal&eacute;e, plut&ocirc;t rapide, et acceptent un d&eacute;collage un peu plus tardif que la moyenne</p>
</td>
<td style="background-color: powderblue;">
<p><span style="color: #800080;"><strong>PUISSANT &amp; NERVEUX</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/lokefoil-lk1-performance-2021">Lokefoil Lk1</a>&nbsp;: Pour ceux qui aiment naviguer en finesse sur un foil vivant sans surtoiler</p>
</td>
</tr>
</tbody>
</table>
<h2>S&eacute;lection FREERACE / SLALOM (au 10/01/2022)</h2>
<table>
<tbody>
<tr>
<td style="width: 10%;">&nbsp;</td>
<td style="width: 30%;">Objectif perf</td>
<td style="width: 30%;">&nbsp;</td>
<td style="width: 30%;">Objectif accessibilit&eacute;</td>
</tr>
<tr>
<td rowspan="2">
<p><strong>FREERACE / SLALOM</strong></p>
<p>Objectif : &eacute;volution rapide avec un mix Travers et Up&amp;Down</p>
</td>
<td style="background-color: powderblue;">
<p><span style="color: #800080;"><strong>100% PERF</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/phantom-iris-x-proto-2-2019">Phantom IRIS X</a>&nbsp;et R, Pour ceux qui privil&eacute;gient une navigation en finesse et aiment un foil vif mais avec une glisse incroyable. &nbsp;</p>
<p>Le R est LE FOIL le plus rapide actuellement, mais l\'exploiter r&eacute;cessite un vrai &nbsp;bon niveau technique (plus vif que la moyenne)</p>
</td>
<td style="background-color: powderblue;" colspan="2">
<p><span style="color: #800080;"><strong>TOP CONTROLE</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/taaroa-noe-97-uhm-2020">Taaroa Noe 97 Freerace</a>&nbsp;: Pour ceux qui cherchent un maximum de contr&ocirc;le dans toutes les conditions (m&ecirc;me form&eacute;es)</p>
<p><span style="color: #800080;"><strong>RAPIDE AU TRAVERS</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/afs-wind-95-v2-2021">AFS Wind 95</a>&nbsp;: Pour ceux qui aiment une conduite assez cal&eacute;e, o&ugrave; on peut passer de la puissance pour faire parler le GPS</p>
<p><span style="color: #800080;"><strong>FACILE &amp; EFFICACE LIGHT WIND &amp; BON CAP</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/zeeko-bullet-v1-2020">Zeeko Bullet</a>&nbsp;ou <a href="https://windfoilfan.glissattitude.com/devices/foil/zeeko-bullet-uhm-2021">Patrik HM</a> : Pour ceux qui veulent un foil tr&egrave;s facile d\'acc&egrave;s mais efficace et extr&ecirc;mement polyvalent, que ce soit au cap ou dans le light</p>
</td>
</tr>
<tr>
<td style="background-color: powderblue;" colspan="3">
<p><span style="color: #800080;"><strong>COMPLET</strong></span></p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/f4-race-2021">F4</a>&nbsp;: Pour ceux qui cherchent un ensemble contr&ocirc;le / vitesse / polyvalence quasi imbattable, mais acceptent une qualit&eacute; de fabrication des fuselages et une finition standard en retrait.</p>
<p>Il vient &eacute;galement couvrir la case \'accessibilit&eacute;\' grace &agrave; son contr&ocirc;le facile, mais &agrave; condition de l\'&eacute;quiper en option d\'une des ailes de race (850 ou 950) car la 620 fournie en standard dans le set Slalom peut se r&eacute;v&egrave;ler trop juste dans le light pour les utilisateurs moins aguerris.</p>
</td>
</tr>
<tr>
<td>
<p><strong>RACE LOISIR</strong></p>
<p>Objectif : Up&amp;Down</p>
</td>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/phantom-iris-x-proto-2-2019">Phantom&nbsp;IRIS X VMG</a> : Pour ceux qui privil&eacute;gient la sensation de glisse, et acceptant un pilotage plus technique.</p>
</td>
<td style="background-color: powderblue;">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/alpinefoil-a1-race-2020">Alpine A1 Race</a> : Pour ceux qui privil&eacute;gient le rapport Efficacit&eacute; / Prix ... sur des plan d\'eau calmes. Impressionnant dans le tr&egrave;s light.&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p><img src="/storage/photos/1/selection.jpg" alt="" /></p>
</div>
</div>
</div>',
                'status' => 'Published',
                'views' => 1249,
                'last_ip' => '::1',
                'created_at' => '2022-03-01 00:00:00',
                'updated_at' => '2022-03-23 23:12:42',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'post_categories_id' => 1,
                'title' => 'Notre sélection Foil 2018',
                'description' => 'Petite sélection de nos foils référence en 2018',
                'body' => '<p class="notice-msg"><a href="https://www.glissattitude.com/foil/index.php">VERSION OPTIMISEE POUR LES MOBILES <span class="icon mpx-apple"> </span> </a></p>

<p>Remarque importante : cette année (2018), les différents foils du marché ont évolués, et deviennent de plus en plus proche en terme de performance. Il est donc difficile de comparer raisonnablement la vitesse car les performances pures dépendent plus du pilote que du matériel (dans certaines limites tout de même). Par contre, les sensations sont très différentes et nous essayons au maximum de les faire ressortir.</p>
<h2>Liste des foils testés et compte-rendus</h2>
<p><iframe title="Liste des foils" src="https://www.glissattitude.com/foil/list.php" width="100%" height="650" frameborder="0" marginwidth="0" marginheight="0"></iframe></p>

<h2>Critères et classement des foils</h2>
<h4>Pourquoi des classements par critères ?</h4>
<p>Après avoir testé plusieurs dizaines de foils, il devient de plus en plus difficile de décrire l\'un ou l\'autre dans l\'absolu. Qui plus est, au fur et à mesure des évolutions et des nouvelles découvertes, nos références changent. Il devient donc commode (et surtout plus juste) de comparer les foils entre eux sur différents critères. Il en résulte un classement sur chaque critère, plus objectif et moins discutable qu\'un jugement global.</p>
<p>Hormis son côté plus juste, l\'essentiel intérêt de ce classement par critère, est que chacun pourra tenir compte des critères qui l\'intéresse, en en laissant tomber d\'autres.</p>
<h4>Les classements</h4>
<p><iframe title="Classements" src="https://www.glissattitude.com/foil/classement.php" width="100%" height="1000" frameborder="0" marginwidth="0" marginheight="0"></iframe></p>

<h2>Aide au choix</h2>
<p><iframe title="Foil selector" src="https://www.glissattitude.com/foil/se.php" width="100%" height="1300" frameborder="0" marginwidth="0" marginheight="0"></iframe></p>
<p><img src="/storage/photos/1/selection.jpg" alt="" /></p>
',
                'status' => 'Published',
                'views' => 62281,
                'last_ip' => NULL,
                'created_at' => '2016-04-03 21:55:41',
                'updated_at' => '2016-04-03 21:55:41',
            ),
            2 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'post_categories_id' => 2,
                'title' => 'Etre accompagné ?',
                'description' => 'Le windfoil vous intéresse ? Vous n\'osez pas acheter avant d\'avoir testé ? Voici où vous pouvez tester',
                'body' => '<p>Le windfoil vous int&eacute;resse ? Vous n\'osez pas acheter avant d\'avoir test&eacute; ? Vous voulez de l\'aide pour apprendre ? Vous voulez en avoir plus ?</p>
<h2>Essayer accompagn&eacute; ... pourquoi ?</h2>
<p>On insiste sur l\'int&eacute;r&ecirc;t de d&eacute;buter ... au moins la premi&egrave;re heure .. avec un professionnel qui vous accompagne sur l\'eau car cela permet de prendre du plaisir tr&egrave;s rapidement et de ne pas faire toutes les erreurs qui ralentissent beaucoup l\'acc&egrave;s aux premiers vols stabilis&eacute;s. Pour faire plus \'cru\', on ne veux pas pr&ecirc;ter un foil &agrave; un d&eacute;butant pour le voir gal&egrave;rer 2 heures et nous le ramener en nous distant : c\'est nul et trop dur ! ..... car ne c\'est pas vrai quand on est bien accompagn&eacute;.</p>
<p>Une fois qu\'on a pass&eacute; le cap des premiers vols, on n\'a plus besoin de moniteur, et on progresse facilement &agrave; son rythme.</p>
<h4>Niveau requis</h4>
<p>Planning dans les straps et au harnais ... nul besoin d\'&ecirc;tre champion pour se mettre au foil !</p>
<h4>Conditions m&eacute;t&eacute;o</h4>
<p>D&eacute;buter en foil facilement, c\'est avant tout une question de conditions m&eacute;t&eacute;o. Id&eacute;alement, plan d\'eau plat et vent autour de 15 knt</p>
<h4>Equipement</h4>
<p>Tous nos partenaires vous proposerons un package comprenant l\'accompagnement et la location du mat&eacute;riel (planche, foil, gr&eacute;ement, gilet, casque). Pr&eacute;sentez vous avec votre combinaison (jambes longues obligatoire) et des chaussons. Le harnais n\'est non seulement pas indispensable au d&eacute;part et m&ecirc;me souvent contre productif.</p>
<h4>Les objectifs</h4>
<p>Contr&ocirc;le du d&eacute;collage, de la stabilit&eacute;, maintien de la glisse en vol&hellip;progression.</p>
<h4>Le prix</h4>
<p>Le mat&eacute;riel &eacute;tant fourni, compter 60&euro; pour une session d\'une heure environ (vous verrez, difficile de faire plus la premi&egrave;re fois ...)</p>
<h2>O&ugrave;</h2>
<h3>La Ciotat - Neptune Club</h3>
<p>Adresse : Port St Jean, La Ciotat</p>
<p>Formule : Coaching individuel accompagn&eacute; sur l\'eau par un moniteur brevet d\'&eacute;tat et son bateau, reportable en fonction de la m&eacute;t&eacute;o. Hors saison le mardi apr&egrave;s midi, de fin Juin &agrave; d&eacute;but Sept tous les jours sur RV.</p>
<p>Mat&eacute;riel : LokeFoil LK1, Starboard</p>
<p>Renseignements et r&eacute;servations Club Neptune : Envoyer vos coordonn&eacute;es et vos dispos &agrave; Tristan / tristanpeyrotte@sfr.fr</p>
<h3>Les lecques - Soci&eacute;t&eacute; Nautique du Golf</h3>
<p>Adresse : Quai Victor G&eacute;lu, St Cyr Sur Mer</p>
<p>Formule : Coaching individuel <span class="redactor-invisible-space">accompagn&eacute; sur l\'eau par un moniteur brevet d\'&eacute;tat et son bateau, reportable en fonction de la m&eacute;t&eacute;o. De fin Juin &agrave; fin Sept tous les jours sur RV.</span></p>
<p><span class="redactor-invisible-space">Mat&eacute;riel : Tabou Airide, Magic carpet, foil Mach 1<br /></span></p>
<p><span class="redactor-invisible-space"><span class="redactor-invisible-space">Renseignements et r&eacute;servations : 04 94 26 17 55<span class="redactor-invisible-space"> / sngl@wanadoo.fr<br /></span></span></span></p>
<h3>Toulon - Yacht Club de Toulon</h3>
<p>Adresse : Plages du Mourillon, anse Tabarly</p>
<p>Formule : Coaching individuel accompagn&eacute; sur l\'eau par un BE et son bateau , sur RV, reportable en fonction de la m&eacute;t&eacute;o</p>
<p>Mat&eacute;riel : Starbaord et NeilPryde</p>
<p>Renseignements et r&eacute;servations : 04 94 46 63 18 / contact@yctoulon.fr</p>',
                'status' => 'Published',
                'views' => 5181,
                'last_ip' => NULL,
                'created_at' => '2022-01-02 01:00:38',
                'updated_at' => '2022-01-02 01:00:38',
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'post_categories_id' => 2,
                'title' => 'Après une heure de Vol',
                'description' => 'Combien faut il de temps pour appréhender le windfoil ? l\'exemple de nos athlètes',
            'body' => '<p>Ce WE, &agrave; l\'occasion d\'une journ&eacute;e test Windfoil &agrave; Serre Pon&ccedil;on, nous avons eu l\'occasion de mettre le pied &agrave; l\'&eacute;trier pour B&eacute;r&eacute;nice et Jeanne, 2 athl&egrave;tes du p&ocirc;le France de Marseille. Cela a permi de mesurer la vitesse de prise en main pour des windsurfers tr&egrave;s aguerris, mais qui n\'avaient jamais mis un pied sur une planche de windfoil (plus habitu&eacute;es &agrave; la RSX). On constate assez rapidement que les nouveaux foils comme le Horue permettent une prise en main ultra-rapide ... ceci tranche avec ce que nous avons connus ne serait-ce qu\'il y a un an.</p>
<p>On vous laisse juger le r&eacute;sultat de cette premi&egrave;re heure de pratique sur notre Foil Horue, mont&eacute; pour l\'une sur notre proto windfoil, et pour l\'autre sur une Exocet RS3.</p>
<p>&nbsp;</p>
<p><iframe src="https://www.youtube.com/embed/uO0d735po20" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
                'status' => 'Published',
                'views' => 723,
                'last_ip' => '::1',
                'created_at' => '2016-08-02 01:00:38',
                'updated_at' => '2022-03-23 23:22:39',
            ),
            4 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'post_categories_id' => 8,
                'title' => 'Spot de Serre-Ponçon',
                'description' => 'nc',
                'body' => '<h2>Le Spot de Serre-Ponçon</h2><p>A 2h de Marseille, découvrez un spot où il est pratiquemnt possible de naviguer tous les jours entre Juin et Octobre grâce à un thermique qui se lève tous les après-midi entre 10 et 20 knt. Bien sûr, à 10-12knt, le Foil est l\'outil idéal pour exploiter les conditions, avec des voiles entre 5 et 7m2.
</p><p>Le spot est situé entre Savine et Embrun (Les eaux douces). Vous pouvez y gréer sur l\'herbe.
</p><p>Pour vous restaurer, louer une planche à voile, et même louer un foil (Horue , AHD, Loke) ... rendez vous chez Titi au bus anglais (sur la gauche du Spot) ? L\'accueil y est top !<br>
</p><p><img src="/storage/photos/1/legacy/c7ab117940c0c9b25ec382fb4bc79b50.jpg"></p><p><img src="/storage/photos/1/legacy/42c96ad1ce584d78cae92615a58cc5b7.jpg"></p><p><img src="/storage/photos/1/legacy/6f7bfefdddddf248aea8296cac9caa55.jpg"></p><p><img src="/storage/photos/1/legacy/61b6a30925884e676a5fc1a309691fc0.jpg"></p><div class="grid12-4">
<img src="/storage/photos/1/legacy/6fba089682ee2ffbcb97dda3bb28284e.jpg">
</div><div class="grid12-4">
<img src="/storage/photos/1/legacy/c8004df2f0977fe199cbe52d11b81f02.jpg">
</div><div class="grid12-4">
<img src="/storage/photos/1/legacy/00c57de4001608511179255c072f1720.jpg">
</div><div class="clearer mgtop30">
</div><h2>Spot de la Ciotat</h2><p>La ciotat est un spot emblématique du windsurf aux portes de Marseille. La baie presque fermée limite la houle et sécurise la pratique. Le vent rarement très fort (hormis par Mistral) est idéal quand il souflle Ouest ou Sud-Ouest
</p><p><img src="/storage/photos/1/legacy/b778acae2e827b33b9761f4711771920.jpg"> <br>
</p><h2>Vidéos
</h2><p>pour faire mal aux yeux, une video avec des couleurs pourries
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/M8eEgloM5T4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Hervé débute
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/EazgwJWdHQA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Quelque part dans les îles
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/WTFBQWNhhuA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Benjamin
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/8sUQYXMcyw8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Bombannes
</p><iframe src="https://player.vimeo.com/video/187569628?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="">
</iframe><p>Bombanne petole
</p><iframe src="https://player.vimeo.com/video/138130488?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="">
</iframe><p>Une vidéo un peu ancienne, mais qui montre combien ça a progressé
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/_4-ic3I0bZc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Avec des bons, ça donne ça
</p><iframe src="https://player.vimeo.com/video/206656113?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="">
</iframe><p>Un peu d\'olympisme
</p><iframe src="https://player.vimeo.com/video/172410542" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="">
</iframe><p>Sans oublier les tutoriels Horue
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/0uqflGQhbYU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Tuto Jibe
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/fjVInEJdtCg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe><p>Lokefoil das le light
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/ANEPX91MOf0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen="">
</iframe>

',
                'status' => 'Published',
                'views' => 6637,
                'last_ip' => NULL,
                'created_at' => '2016-08-04 17:28:01',
                'updated_at' => '2016-08-04 17:28:01',
            ),
            5 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'post_categories_id' => 10,
                'title' => 'FAQ Windfoil',
                'description' => 'Qu’est ce que le foil ? Pourquoi le windfoil ? Une nouvelle mode ou un évolution irrémédiable ? ... abordons de nombreux sujets ',
                'body' => '<p>Nous abordons ici les idée reçue et répondons aux questions que l\'on nous pose très fréquemment au sujet du winfoil
</p><p><a href="#p1">Qu’est ce que le foil ?</a><br><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p2">Pourquoi le windfoil ?</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="p3">Une nouvelle mode ou un évolution irrémédiable ?</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p4">Pourquoi maintenant et pas avant ?</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="p5">Pourquoi c’est plus simple à petite vitesse et dans le petit temps ?</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="p6">Quel flotteur pour faire du windfoil ?</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p6a">Idée reçue : le flotteur n’a pas d’importance car il ne touche pas l’eau</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p7">Idée reçue : il faut renforcer le boitier</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p8">Quelle voile pour faire du windfoil ?</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p9">Idée reçue : C\'est trop technique, je n\'ai pas le niveau</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p10">Idée reçue : Je suis trop vieux, je n\'y arriverai jamais</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p11">Idée reçue : J\'ai pas envie de réapprendre autre chose</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p12">Idée reçue : C\'est pas l\'avenir car ça ne marche pas dans les vagues et dans le vent fort</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p13">Idée reçue : Ca n’a pas d’avenir car c’est moins performant que le slalom</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p14">Idée reçue : C\'est dangereux</a></span>
<br><a href="#p22">Idée reçue : C\'est du carbone, donc fragile. Peux on protéger ?</a><br><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p15">Idée reçue : Le windfoil c’est cher</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p16">Idée reçue : Il y a trop de modèles et on s’y perd</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p17">Idée reçue : Il faut que je teste pour voir si ça me plait</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p18">Idée reçue : Ca va évoluer tellement vite qu\'il vaut mieux attendre</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p19">Idée reçue : Il va y avoir de la concurrence et les prix vont s\'écrouler</a><br></span><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"><a href="#p20">Idée reçue : Dès que ça va être fait en chine, il y aura des copies pas cher</a></span><br>
</p><p><span style="font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></span>
</p><hr class="cutter"><p><br>
</p><h2 id="p1">Qu’est ce que le foil ?</h2><p>Pour ceux qui sont en retard d’une guerre, le foil est le nom donné à un appendice qui remplace l’aileron. En plus du plan anti-dérive vertical, on a également des plans porteurs horizontaux (en orange sur la photo ci dessous) qui génèrent non plus une force anti-dérive mais une réelle portance verticale au point de soulever la planche … qui ne touche alors plus l’eau.
</p><p><img src="/storage/photos/1/legacy/b778acae2e827b33b9761f4711771920.jpg" alt="19 oct. 2016 09:30:49">
</p><h2 id="p2">Pourquoi le windfoil ?</h2><p>Les plus vieux d’entre nous ont probablement connus la vraie « <strong><span style="color: rgb(149, 55, 52);">Planche à voile</span></strong> » avec laquelle on naviguait en « déplacement ». Ce terme est donné aux embarcations qui flottent car leur volume est plus important que leur poids. Lorsqu’elles avancent, ces embarcations déplacent un volume d’eau équivalent à leur poids. Bien évidement, c’est un mode de navigation plutôt lent. A la voile, c’est le cas de l’antique windsurfer, ou des monocoques actuels.
</p><p>Il y a une grosse 20aine d’années, le <strong><span style="color: rgb(149, 55, 52);">funboard</span></strong> a été inventé en proposant un nouveau mode de navigation : le planning. Cette fois, la planche n’est plus portée par son volume mais par une portance générée grâce à la vitesse. On a ainsi démultiplié la vitesse, et surtout les sensations grâce à une résistance à l’avancement beaucoup plus faible … la glisse … vous voyez ce dont je parle. Je suis sûr que vous êtes tous addicts de cette sensation difficile à décrire du planning.
</p><p>Le <strong><span style="color: rgb(149, 55, 52);">windfoil</span></strong> (ou windsurf à foil) est une nouvelle génération de glisse. Après la navigation en déplacement puis au planning, on passe à une navigation en vol. Les sensations de glisse font encore un bon en avant, en particulier grâce à une diminution drastique de la trainée. Et qui dit moins de trainée, dit moins de puissance vélique nécessaire, plus de légèreté etc. .. bref, une nouvelle révolution fondamentale dans le monde du windsurf.
</p><p><img src="/storage/photos/1/legacy/868f36a6ddfe3014d4f2658abb91a71f.jpg">
</p><h2 id="p3">Une nouvelle mode ou un évolution irrémédiable ?</h2><p>C’est la grande question du moment. Les conservateurs voient ceci comme une mode, et ceux qui pratiquent déjà comme l’évolution naturelle du windsurf.
</p><p>En prenant un peu de recul, on a observé le même type de réaction lors de l’arrivée du funboard : beaucoup de compétiteurs en planche open dénigraient le funboard, avant d’y passer ou d’abonner. La transition a pris des années. Par ailleurs, tous les autres support à la voile passent aussi au foil (dériveurs, catamarans sportifs, multicoques de course au large, et même monocoques).
</p><p>Au final, il y a fort parier que l’évolution vers le windfoil sera irréversible même si elle prendra du temps. Ceci, seul l\'avenir permettra de confirmer ceci.
</p><h2 id="p4">Pourquoi maintenant et pas avant ?</h2><p>Les premiers essais de planche à voile sur foil datent de plus de 30 ans, mais ces premiers essais étaient loin d’être concluants.
</p><p><img src="/storage/photos/1/legacy/b450624ea6e311596429a3b48af6915b.jpg">
</p><p>L’époque ‘moderne’ du windfoil a été lancée par AHD il y a quelques années, et perce aujourd’hui grace à une conjonction de plusieurs facteurs
</p><ul>
<li>l’allègement du matériel</li>
<li>la généralisation et la baisse des coûts des structures composites carbones</li>
<li>la baisse des coûts de l’usinage CNC permettant d’usiner des moules précis</li>
</ul><p>L’ensemble du poids du pilote et de sa monture dépassent les 100 kg. Cela veut dire que l’aile du foil doit générer une portance de plus de 100kg pour une envergure de 70cm et une corde de 12cm. Autant dire que la précision du profil et la solidité de la structure sont primordiales.
</p><h2 id="p5">Pourquoi c’est plus simple à petite vitesse et dans le petit temps ?</h2><p>Tout ceux qui passent au windfoil se rendront très vite compte que l’engin est bien plus simple à maîtriser dans peu de vent et à vitesse faible et moyenne (entre 12 et 15 knt, avec des voiles de 5,2 à 6,5). C’est d’ailleurs les conditions que l’on conseille aux débutants dans la discipline, mais pourquoi ?
</p><p>Si on analyse le fonctionnement du foil à petite vitesse, on a un équilibre stable : quand on appuie sur le pied arrière, cela occasionne une augmentation de la portance et fait monter le foil, mais en même temps, cela occasionne une augmentation de la trainée et ceci a pour effet de freiner et de refaire baisser la portance. L’équilibre est stable.
</p><p>A plus haute vitesse, l’inertie supérieure de l\'ensemble rend la baisse de vitesse beaucoup plus faible et le foil a vite tendance à sortie de l’eau si on ne corrige pas la balance de poids entre les 2 pieds. Il faut donc en permanence maintenir l’assiette longitudinale du flotteur … un peu plus compliqué lorsque l’on n’a pas l’habitude.
</p><h2 id="p6">Quel flotteur pour faire du windfoil ?</h2><p>Pour débuter le windfoil, la plupart des windsurfeurs voudront se rassurer en limitant leur investissement et en leur permettant de revenir au windsurf classique. Pour ceci, ils vont utiliser un flotteur d’occasion existant, mais quel type de flotteur de windsurf ‘classique’ permet de s’initier le plus facilement au windfoil ?
</p><p>Il y a déjà pas mal de littérature à ce sujet sur les forums ou les sites des marques de foil. Finalement, la réponse est très simple :
</p><ul>
<li><span style="color: rgb(149, 55, 52);"><strong>Outline</strong></span> : il faut idéalement un flotteur mesurant entre 75 et 85cm de large, le plus court possible, le plus léger possible, et le plus large possible à l’arrière (dont plutôt typé slalom light wind)</li>
<li><span style="color: rgb(192, 80, 77);"><strong>Boitier</strong></span> : la plupart des foils nécessitent un boitier d’aileron type deep tuttle. Idéalement, on préfèrera des boitiers traversant (qui viennent jusqu’au pont de la planche, sans ‘cheminées’ pour mettre les vis) car ils favorisent une reprise des efforts sur le pont et simplifient l\'installation du foil</li>
<li><span style="color: rgb(149, 55, 52);"><strong>Footstraps</strong></span> : La position des footstraps est très importante en windfoil ... voir primmordiale. <br>
<ul>
<li>Position latérale : La navigation en foil se fait plus ‘debout’ qu’en funboard. Il est nécessaire d’avoir les pieds bien à plat sur la planche, donc éviter les straps très excentrés des planches de slalom. Certains flotteurs de free-race offrent des positions d’inserts plus centrés, ce qui est parfait pour le windfoil. Sinon, vous pouvez demander à un shapeur de rajouter quelques inserts sur votre flotteur. </li>
<li>Position longitudinale : l’un des éléments fondamentaux en windfoil est l’équilibre longitudinal. Il faut globalement que la poussé du foil se fasse entre les 2 pieds pour permettre au pilote de contrôler le plus facilement possible l’incidence du foil. Comme le centre de poussée des différents foil du marché n’est jamais au même endroit, l’idéal est d’avoir de multiples possibilités de réglage pour trouver l’équilibre idéal. Ci dessous, vous trouverez les cas de foil poussant sur le pied arrière (on est obligé de se pencher en arrière pour rester en l\'air), ou sur le pied avant (il faut exégérément pousser sur le pied avant pour éviter de srotir de l\'eau quand la vitesse augmente)</li>
</ul></li>
</ul><p><br>
</p><ul>
</ul><p><img src="/storage/photos/1/legacy/587264727d35654572d6a3be76d22f98.jpg">
</p><h2 id="p6a">Idée reçue : le flotteur n’a pas d’importance car il ne touche pas l’eau</h2><p>Ceci est totalement faux à plusieurs titres
</p><ol>
<li>Le flotteur touche l’eau dans toutes les phases ou l’on ne vole pas, y compris avant le décollage ou lors des touchettes. Le shape a donc une influence importante, en particulier dans le vent léger ou la houle</li>
<li>Si le shape ne joue que sur certaines phase de l’utilisation, les autres éléments géométriques du flotteurs sont primordiaux car ils déterminent entièrement le comportement et l’équilibre en vol : largeur arrière, largeur au maître beau, position des footstraps (cf. ce dessus), position du pied de mat.</li>
<li>L\'inertie du flotteur a une gosse importance sur la facilité d’utilisation et le plaisir dégagé … d’où le développement de flotteurs très courts, et très légers sur l’avant.</li>
</ol><p>On peut donc tout à fait recycler un flotteur pour faire du windfoil, mais il ne faut pas prendre n\'importe quoi et encore moins penser que cela n\'a pas d\'importance.
</p><h2 id="p7">Idée reçue : il faut renforcer le boitier</h2><p>Installer un foil nécessite un boitier deep-tuttle. Si vous désirez utiliser une planche équipée en powerbox, il faudra soit revendre votre flotteur, soit faire remplacer le boitier. Si votre flotteur est par contre déjà équipé d’un deep-tuttle, aucune urgence : naviguez comme cela, et si le boitier avoue une faiblesse, il sera toujours temps de le remplacer. Si vous veniez à faire remplacer le boitier de votre flotteur, bien choisir un boitier traversant.
</p><p><img src="/storage/photos/1/legacy/1bba766e8ef864d40686402cb1e825f3.jpg"><br>
</p><p>Par contre, si votre flotteur ne permet pas de trouver en standard une position de footstraps compatibles avec le windfoil, il faudra effectivement faire poser des inserts supplémentaires, sans pour autant que cela n’handicape l’utilisation classique si vous vouliez y revenir.
</p><p>Dans le cas des foil possédant une platine sous la carène (type Zeeko), les contraintes sont moins importantes. Par contre il faudra de grosses rondelles (type loké) sur le pont, pour éviter les arrachements lors de touchettes
</p><h2 id="p8">Quelle voile pour faire du windfoil ?</h2><p>Le windfoil est très peu exigeant côté voile car il nécessite très peu de poussée. Globalement, on navigue avec 2m2 de moins qu’en funboard et des voiles de vague ou de freeride à 2 cam légères sont idéales pour pratiquer avec plaisir. Les besoins étant nouveaux, c\'est vraisemblablement un domaine ou les choses vont beaucoup évoluer. En funboard, on avait tendance à naviguer sur-toilé, alors que cette fois on est sous-toilé ... plus besoin de gréements ultra rigides !
</p><h2 id="p9">Idée reçue : C\'est trop technique, je n\'ai pas le niveau</h2><p>Le niveau requis est celui de la navigation confortable au harnais, pieds dans les footstraps. Bien sûr, les excellents funboarders apprendront souvent plus vite, mais contrairement au kitefoil qui est réellement technique, le windfoil est accessible à la plupart. Pour donner une idée, il faut 2 demi-journées à un bon navigateur pour commencer à voler sur des bords entiers. Le record observé est de 15-20mn pour des jeunes compétiteurs comme les filles du pôle France.
</p><h2 id="p10">Idée reçue : Je suis trop vieux, je n\'y arriverai jamais</h2><p>Avec 2 ans d’expérience de journées découvertes, et autre journées test, nous avons pu constater (à une exception près) que tous ceux qui s\'en sont réellement donné les moyens ont réussi à voler. Ce n’est pas une question d’âge mais d’ouverture d’esprit et d’acceptation à écouter les conseils (très dur pour certains).
</p><p>Certes comme toujours quand on apprend, il y a une phase un peu plus physique car on est assez crispé au départ. Dès cette phase derrière nous, c\'est une navigation avec beaucoup de douceur et beaucoup moins d\'effort (on arrive sans problème à naviguer des heures sans harnais !). La dépense physique est concentrée au décollage, et elle est du même ordre que pour partir au planning avec une planche standard.
</p><p>Au final, le windfoil est une activité beaucoup moins physique que le funboard. Les frottements étant très réduits, on utilise très peu de force propulsive donc des voiles qui font environ 2m2 de moins qu\'en Windsurf \'classique\'. Les chocs contre le clapot sont aussi fortement réduits.
</p><h2 id="p11">Idée reçue : J\'ai pas envie de réapprendre autre chose</h2><p>On ne peut rien pour vous :)
</p><p>
L\'apprentissage est beaucoup plus facile que le kite foil par exemple. En fonction de la dextérité des pratiquants, il faut entre 2h et 5h pour faire des vols de plus de 50m. La décontraction arrive about de 4 ou 5 sorties<br>
</p><h2 id="p12">Idée reçue : C\'est pas l\'avenir car ça ne marche pas dans les vagues et dans le vent fort</h2><p>Comme toute évolution, il faut du temps pour que les choses s’installent. En dehors du matériel qui va continuer à progresser, la technique va beaucoup évoluer. A ce jour, nous avons tous un niveau de débutant ou de débutant débrouillé. Quelques rares exceptions (Philippe Caneri, Benjamin Tillier) nous donnent une idée du potentiel de foil. Que ce soit en terme de performance que de maniabilité, le potentiel est énorme. Les premiers funboarders ont mis un moment à dompter les vagues … mais le niveau moyen des pratiquants n’a jamais arrêté de progresser pour repousser les limites du possible.
</p><p>On débute idéalement dans des vents médium (atour de 15 knt). En progressant, on appréhende de mieux en mieux les vents plus soutenus, et avec un peu d’habitude, naviguer dans 25knt ne pose aucun problème … il faut juste adapter les tailles de voile et ne pas hésiter à rapidement descendre en 4m2 voir moins. On prend même un plaisir certain à naviguer avec un mouchoir de poche dans les mains.<br>
</p><p>Naviguer dans les vagues est un sujet plus complexe et seuls quelques très bon foileurs profitent réellement de l’ultra maniabilité du foil dans ces conditions. Avec un peu de recul, combien faut il à un débutant windsurfeur avant d’aller surfer dans les vagues ??? Finalement, il n’est pas évident que ce soit beaucoup plus long en soi, mais on manque de recul pour l’affirmer.
</p><h2 id="p13">Idée reçue : Ca n’a pas d’avenir car c’est moins performant que le slalom</h2><p>Encore une fois, c’est effectivement moins rapide qu’un flotteur de slalom POUR LE MOMENT.
</p><p>Pour infos, les vitesses atteintes en foil sont de l’ordre de 17-18 knt quand on débute, et sans grand niveau, on pousse jusqu’à 22-24 ont en se mettant dans le rouge. Les extra-terrestres du foil  ont déjà dépassé les 30 knt .. et ce n’est qu’un début.
</p><p>Compte tenu du peu de frottement du foil, le windfoil peut théoriquement aller beaucoup plus vite que le funboard, mais il faut oser border … et pour l’instant on manque encore de niveau pour la plupart.
</p><p>Mais pourquoi voulez vous aller vite ?
</p><ul>
<li>pour aller plus vite que les autres ? Le tirage de bourre en foil va arriver comme en slalom. Faites confiance aux compétiteurs dans l’âme</li>
<li>pour les sensations ? A 20knt en foil, on a autant de sensations qu’à 35 en funboard</li>
<li>pour se faire mal lors des boites ? Pas de stress, je suis sûr que certains arriveront à se mettre des bonnes roustes en voulant aller vite en winfoil</li>
</ul><p>Si on parle de cap, le foil est largement devant le windsurf classique … sur des parcours type triangle, il y a donc fort à parier que le foil soit devant<br>
</p><p>Si on parle de sensations et de départ planning (car c’est aussi une performance), le windsurf classique est déjà largement battu
</p><p>Au final, c’est surtout un argument donné par ceux qui ne pratiquent pas réellement et veulent s’auto-convaincre d\'avoir raison.<br>
</p><h2 id="p14">Idée reçue : C\'est dangereux</h2><p>A ce jour, on n’observe pratiquement aucun accident en windfoil. Contrairement au kitefoil, les risques sont très limités, surtout dans la phase d’apprentissage. A l’exclusion de quelques amerrissages sur le nez de la planche, ou de quelques genous dans la voile, rien de bien méchant. Le fait d’être dans les straps, avec le wishbone dans les mains permet à priori de ne jamais tomber sur le foil. Les vitesses d’évolution étant assez faibles au début, les chutes sont assez douces … ce qui en fait un sport peu traumatique par rapport au windsurf classique.
</p><p>Au pire peut on se faire mal aux chevilles (c’est arrivé à quelques débutants), mais on fera attention d’avoir des straps peu excentrés et pas trop ouverts.
</p><p>Le seul danger peut provenir des manipulations du foil à terre, et du waterstart où le pied peut passer très près des ailes. Nous conseillons de toute façon d’éviter systématiquement le waterstart en windfoil pour éviter tout problème de ce côté.
</p><p>Par précaution, on conseillera aussi le casque et le gilet lors des premiers runs (ou si vous avez décider de battre des records de vitesse) … principe de précaution
</p><h2 id="p22">Idée reçue : C\'est du carbone, donc fragile. Peux on protéger ?</h2><p>Sur les foils de série, bien conçus, nous n\'avons dénoté aucune casse. Il faut bien évidemment éviter de taper dans un rocher ou de racler le fond, mais c\'est la même chose avec vos jolis ailerons de slalom ! En cas de rencontre brutale avec le fond, c\'est plus souvent le boitier de la planche qui risque de passer un mauvais moment ou le nez de cette dernière si vous passez par devant.
</p><p>Lors de vos débuts, nous conseillons très fortement de mettre des protections sur le nez de la planche et/ou un déviator pour éviter d\'abîmer le nez le la planche. En effet, vous allez immanquablement passer par devant une paire de fois avant d\'apprendre à être plus doux et mesuré sur les appuis.
</p><p>Nous vous conseillons aussi une housse pour protéger les foils (les bord de fuite fins sont en général fragiles) lors du transport.
</p><h2 id="p15">Idée reçue : Le windfoil c’est cher</h2><p>Oui et non : comme tout, cela peut être cher quand on veut s’équiper avec le top de ce qui se fait. Cela peut être aussi tout à fait raisonnable grâce à l’arrivée de matériel produit en série et avec des matériaux moins couteux (cf foil alu NP par exemple … et il y en aura d’autres comme le prochain Horue).
</p><p>Quand on aborde de ce sujet, la question n’est pas le tarif du foil en soit, mais le coût global relativement aux autres alternatives. Le windfoil nécessitant moins de gréements et étant bien moins exigeant de ce point de vue, ceci équilibre tout à fait le tarif de l’appendice. Sauf à vouloir faire de la compétition, exit les voiles au dessus de 7.5 m2, ou les modèles à plus de 2 cambers.
</p><p>Pour une utilisation loisir, un quiver 7m, 5m, 3,5m est parfait pour naviguer dans toutes les conditions.
</p><h2 id="p16">Idée reçue : Il y a trop de modèles et on s’y perd </h2><p>Lorsqu’il n’y avait qu’un ou 2 modèles, la plupart se plaignaient de ne pas avoir le choix. Maintenant, il y en aurait trop ???
</p><p>Ce qui est certain, c’est que
</p><ul>
<li>parmi tous les modèles vendus, assez peu offrent à la fois : un modèle réellement abouti, une disponibilité raisonnable, un SAV de qualité, la pérennité de la marque, une certaines évolutivité</li>
<li>nous sommes là pour vous aider à faire le bon choix en fonction de vos contraintes (type de pratique, environnement de navigation, niveau, budget ) et cette diversité permet justement de coller assez facilement aux spécificités de chacun.</li>
</ul><h2 id="p17">Idée reçue : Il faut que je teste pour voir si ça me plait</h2><p>C’est une remarque que nous avons dû entendre 2000 fois cet été.  Nous avons d’ailleurs mis en place des cours de découverte windfoil avec plusieurs clubs (YCT, Neptune). Il vous permettront d’avoir des premières sensations.
</p><p>Dans les faits, comme toute discipline dans laquelle on débute, les premiers instants sont plutôt ingrats même si ils peuvent être amusants. Après les premières sensations de vol qui sont très excitantes, le windfoil devient vraiment addictif lorsque l’on parvient à se décontracter en vol.  Comme on le disait un peu plus haut, cela intervient après quelques sorties. <span class="redactor-invisible-space"> </span>Nous n’avons à ce jour qu’un seul exemple de pratiquant qui a fait l’effort de passer le cap et qui a décidé de revenir au funboard classique … et nous pensons que cela est dû à un gabarit hors norme et un mauvais choix de matériel. Tous les autres rêvent windfoil, naviguent windfoil et parlent windfoil.
</p><p>Compte tenu de la sensation éprouvée en vol, on a du mal à imaginer qu’un windsurfeur puisse ne pas prendre goût au windfoil … à condition de savoir persévérer lors des premières sorties.
</p><h2 id="p18">Idée reçue : Ca va évoluer tellement vite qu\'il vaut mieux attendre</h2><p>Le windfoil en est effectivement à ses débuts, mais nous en sommes déjà grosso-modo à la 3e génération de foil. Les tâtonnements et les évolutions les plus fondamentales sont derrière nous désormais. Les premières générations ont exploré des directions un peu extrêmes, mais les choses ont beaucoup convergé avec les 2e et 3e générations. Les évolutions vont être désormais plus subtiles, mais bien sûr, on ne va pas s’arrêter là .. et tant mieux.
</p><p>D’autre part, qui dit nouvelle pratique dit aussi demande beaucoup plus forte que l’offre sur le marché de l’occasion.  La revente d’occasion ne pose aucun problème quand on choisi un modèle qui fonctionne.
</p><p>On peut toujours attendre la version suivante mais c’est une course perdue d’avance. Si on avait attendu que le funboard n’évolue plus avant de ranger sa planche à dérive, on naviguerai encore tous en planche open … et pourtant il y a eu de nombreuses évolutions majeures dans le funboard, et on en a tous profité sans forcément ramener toujours ceci au prix.
</p><p>Pour ne pas « perdre d’argent », attendre ne sert donc à rien, mais choisir un modèle qui va se revendre est fondamental. Il faut donc simplement ne pas aller chercher des produits exotiques avec lesquels vous allez gagner 200eur à l’achat pour se retrouver avec un produit invendable dans 6 mois.<br>
</p><h2 id="p19">Idée reçue : Il va y avoir de la concurrence et les prix vont s\'écrouler</h2><p>L’évolution des prix n’a aucun lien avec le nombre de marques, mais avec le cout de revient des produits. On va passer de productions artisanales ou chaque production unitaire coute cher en main d’oeuvre au regard du cout des matériaux, à des productions industrielles ou le cout de revient unitaire en production sera plus faible, mais qui nécessitera des investissements plus conséquents : développement, industrialisation pour définir des process reproductibles, suivi qualité, marketing, structure de distribution permettant d’assumer une diffusion en série sur du moyen et du long terme.
</p><p>Au final, les coûts s’équilibrent grossièrement, et on ne peut pas s’attendre à voir les prix chuter de façon significative sur des produits développés à iso qualité de matériaux et de technologie. <br>
</p><p>Par contre 2 phénomènes vont apparaîtrent
</p><ul>
<li>des nouveaux acteurs vont profiter de l’engouement pour proposer des produits moins chers en rognant sur la qualité des matériaux, la qualité des process de production, le développement (en copiant), le réseau de distribution (vente directe), et la pérennité des produits. Ce type de modèle économique à court terme est inévitable.</li>
<li>le volume va permettre d’accéder à des technologies différentes. On en a un exemple flagrant avec l’arrivée des foils aluminium produits par extrusion, moulage et soudure Tig. Ce sont des procédés inaccessibles à l’artisan, mais qui permettent de produire à des couts réduits.</li>
</ul><h2 id="p20">Idée reçue : Dès que ça va être fait en chine, il y aura des copies pas cher <br></h2><p>Comme d’habitude, l’Asie sait profiter très vite des opportunités commerciales, surtout lorsque les marchés ne sont pas structurés. Comme dans tous les domaines que nous avons connus (windsurf, SUP, kite etc.), les arnaques font la compétition avec les faux bons plans. Au final, que ce soit en europe, en chine ou au fin fond de l’Afrique, le Père Noël n’est qu’un mythe et les vrais bons produits ont des coûts similaires.
</p><p>Il y a effectivement déjà des offres très alléchantes sur ebay (foil carbone à 250€ par lot de 50) et nous encourageons ceux qui veulent jeter de l’argent par les fenêtres à y souscrire au plus vite. Nous savons que ce sont des arnaques, alors nous préférons que ce soit les autres qui fassent les cobayes :)
</p><p><br>
</p><ul>
</ul>

',
            'status' => 'Published',
            'views' => 10584,
            'last_ip' => NULL,
            'created_at' => '2017-02-27 16:31:02',
            'updated_at' => '2017-02-27 16:31:02',
        ),
        6 => 
        array (
            'id' => 12,
            'user_id' => 1,
            'post_categories_id' => 2,
            'title' => 'Je débute, acte 1',
            'description' => 'Témoignage d\'un débutant en Acte 1',
        'body' => '<p>Témoignage d\'un débutant en Acte 1</p><p>"</p><p>Salut à la petite équipe !</p><p>Enfin des nouvelles du foil. Non, je ne suis pas mort séché par une chute bestiale ou noyé ! C\'est fait ; après une première séance de "prise en mains" j\'ai envoyé une deuxième session dans des conditions intéressantes de vent autour d\'une quinzaine de noeuds et plan d\'eau très lisse.</p><p>Le vol est bien là et naturellement, je me cherche un peu. Mon cap n\'est pas complètement stable et je "pompe" un peu en hauteur avec parfois des petites touchettes du flotteur sur l\'eau ; c\'est très net à la vidéo où le son traduit parfaitement ce phénomène. Silence absolu lors des phases de vol et léger bruissement du flotteur lors des retours en douceur...</p><p>Je ne passe pas sous silence mes premières fautes avec position de rappel et crash immédiat avec rotation par l\'avant ; mais cela est presque du passé. En me décrochant du harnais ceinture (impératif ceinture) je me retrouve extra libre pour piloter en me redressant bien sur le flotteur. Le contrôle du vol une fois déclenché passe essentiellement par le dosage de la puissance dans la voile qui est minime ; c\'est même un jeu d\'enfant que de travailler ainsi. J\'ai même eu la surprise ultime dans une survente de devoir lâcher complètement la main AR et de maintenir le wish juste avec la main AV, donc très légèrement bordé avec une remarquable stabilisation du vol... Je suis bluffé et hyper séduit !!</p><p>Le feeling est effectivement bluffant même si les vitesses sont modestes. J\'enregistre des décollages dès 9 kts mais la montée pérenne s\'établit plus précisément autour de 11-12 kts pour mon poids de 73 kg et une voile de vague Loft 6.2. Le vol, quand je réussis à bien le maintenir (c\'est ma deuxième sortie) se poursuit dans une progression douce vers 14 à 15 kts.</p><p>Je tiens à vous dire que je suis à la fois admirateur de cette technologie, je vous remercie pour avoir publié des essais qui reflètent donc bien la vérité.</p><p>En effet, à condition de revoir ses vieux réflexes de planchiste (je n\'ai pas dit de vieux planchiste !), il est possible d\'entrer assez naturellement dans ce monde merveilleux... Ce jour là, un collègue "classique" tournait au planning en 8.5 de race... Eh oui, je fourre la monture complète dans mon véhicule et vole bibi !!!!! Au niveau des straps AR, j\'ai bien envie de tester leur retrait pur et simple ; je suis persuadé que c\'est une voie intéressante au moins pour progresser; j\'ai également testé dans une phase de survente de chausser le strap AR opposé (donc sous le vent) et ça a immédiatement stabilisé mon vol avec toutefois un cap de facto légèrement au-delà du vent travers vers le petit largue mais très stable... A creuser !</p><p>C\'est SUPER SUPER SUPER !!!!!!!!!!!!!!!!!!!!!!!</p><p>Suite de mes aventures dans quelques semaines.</p><p>Je vous souhaite bonne réception et bonne continuation et je retourne à l\'eau dès que la météo me sourit !!!!<br></p><p>Sportivement.</p><p>Hervé</p><p>"</p>

',
            'status' => 'Published',
            'views' => 1516,
            'last_ip' => NULL,
            'created_at' => '2017-03-03 10:15:06',
            'updated_at' => '2017-03-03 10:15:06',
        ),
        7 => 
        array (
            'id' => 13,
            'user_id' => 1,
            'post_categories_id' => 2,
            'title' => 'Je débute, acte 2',
            'description' => 'Voici la suite des aventures de Hervé sur son Windfoil',
        'body' => '<p>Voici la suite des aventures de Hervé sur son Windfoil</p><p>"</p><p>Encore merci pour les retours par mail de conseils précis ! Voyant que vous avez relayé mon témoignage sur mes premiers runs sous la forme d\'un épisode sur le blog, je tiens à faire un nouveau point au fil de ma cinquième session.</p><p>Les conditions météo instables de ce mois de mars sont délicates à exploiter, mais dans le doute j\'ai conservé tous mes éléments constants ; à savoir une voile Loft PureLip de 6.2 m² et mon aile Horue Light Wind montée sur le Tiny 110 litres. Au passage (pour rappel) je pèse 72 kg.</p><p>Je confirme des décollages progressifs et très propres aux alentours de 10 à 11 kts de vitesse de navigation, vitesse que l\'on peut obtenir dans un régime de vents faibles (autour de 10 à 12 kts de vent) avec ma 6.2 en pompant quelques coups. Les vidéos en témoignent avec grand réalisme.</p><p>Le vol peut alors être entretenu sans effort sur le gréement (harnais au rôle du coup secondaire) et le jeu consiste à moduler légèrement et en douceur l\'ouverture du gréement pour se maintenir dans la bande passante qu\'autorise la hauteur du mât. j\'ai d\'ailleurs de plus en plus tendance à laisser se produire à intervalles réguliers des petites touchettes du flotteur avec la surface de l\'eau ; cela ne pose aucun problème pour la poursuite du vol et constitue en quelque sorte un contrôle et une sécurisation du vol. Il suffit de choisir un plan d\'eau relativement calme !</p><p>C\'est ainsi qu\'à ma quatrième session, le plus long vol a passé le kilomètre avec quelques touchettes comme décrit précédemment ; quel pied !</p><p>Enfin, et c\'est un point auquel je tiens beaucoup, j\'ai fini par démonter les deux straps AR. Cela fait deux sessions que je vole sans strap à l\'arrière et c\'est vraiment super, mais pourquoi ? J\'ai noté pouvoir bien contôler un vol en ayant le pied AR calé juste devant le strap, sans avoir besoin d\'engager ce pied mais aussi avec le sentiment "désagréable" qu\'il aurait suffi de le décaler très légèrement pour que tout soit parfait... Mais le dit strap était là et m\'imposait alors de le chausser ; une sorte de contrainte de variation assez conséquente... Sans strap AR, je trouve "naturellement" la position de mon pied et j\'ai remarqué de surcroît que dans la phase où je suis dans ma progresssion, ne traçant pratiquement que des "vent travers", la position de ce fameux pied AR avait tendance à être centrale... Cela milite naturellement pour un pad AR dégagé ; il pourrait même comme en Snowboard être muni sur la partie arrière extrême d\'une rampe relevée qui donne le bon feeling et le "calage" éventuellement nécessaire...</p><p>Voilà pour mes réflexions et mes réalisations du moment ! A suivre</p><p>"</p>

',
            'status' => 'Published',
            'views' => 1653,
            'last_ip' => NULL,
            'created_at' => '2017-03-07 16:19:46',
            'updated_at' => '2017-03-07 16:19:46',
        ),
        8 => 
        array (
            'id' => 14,
            'user_id' => 1,
            'post_categories_id' => 2,
            'title' => 'Je débute, acte 3',
            'description' => 'Petite Video de notre Hervé préféré : on suit ses aventures nautico-aériennes',
            'body' => '<p>Episodes précédents :
</p><p><a href="/blog/windfoil-temoignages-2.html">Je débute en foil - Acte 1</a>
</p><p><a href="/blog/windfoil-temoignages-2.html">Je débute en foil - Acte 2</a>
</p><p><br>
</p><p>Cette fois, on a droit à une petite Video de notre Hervé préféré. Merci à lui de nous permettre de suivre ses aventures nautico-aériennes
</p><p>"
</p><p>Comme promis, voici un rush tourné lors de ma cinquième session de foil. Il s\'agit du premier vol de la journée ; pas trop mal avec une finale un peu humide ! Ce jour là, je réaliserai une trentaine de vols pour deux ou trois chutes... Le métier commence à rentrer et surtout, le plaisir est super intense ! Comme on peut l\'apercevoir sur la vidéo, j\'ai retiré les straps AR. Je n\'affirme pas que cette configuration est définitive mais je trouve pour l\'instant que cela me permet d\'être plus fin dans l\'ajustement du pied AR.
</p><p>Quant au stab, je n\'y ai pas touché depuis le début. Je ne le démonte plus du mât et il est bloqué sur la position neutre. Nous verrons par la suite mais mon expérience en deltaplane m\'a appris de ne jamais toucher à deux paramètres en même temps ! Actuellement, je suis dans la phase où je raccourcis progressivement les lignes de harnais !
</p><p>Hervé
</p><p>"<br>
</p><iframe width="1280" height="720" src="https://www.youtube.com/embed/EazgwJWdHQA" frameborder="0" allowfullscreen="">
</iframe>

',
            'status' => 'Published',
            'views' => 2530,
            'last_ip' => NULL,
            'created_at' => '2017-03-07 17:06:09',
            'updated_at' => '2017-03-07 17:06:09',
        ),
        9 => 
        array (
            'id' => 16,
            'user_id' => 1,
            'post_categories_id' => 2,
            'title' => 'Témoignages',
            'description' => 'Voici quelques témoignages de windfoileurs en herbe',
        'body' => '<p>Voici quelques témoignages de windfoileurs en herbe</p><h2>Fabrice</h2><p>"Salut Éric,</p><p>Aujourd\'hui ma première session foil, dans des conditions pas idéales pour une première: 4°C dans l\'air, 6°C dans l\'eau, de la glace sur le bord, mais la motivation a été plus forte que le froid.<br></p><p>15-18nds avec gros clapot, en 5.2 (avec ma Tabou Manta 135 FR), j\'ai réussi à voler rapidement et j\'ai pu tenir les vols sur 50-100 mètres, un pieds dans le strap avant. Donc pour une premières dans ces conditions je suis vraiment satisfait. "</p><p>et après quelques nav de plus</p><p>"En tout cas maintenant que je commence à maîtriser la navigation foil je regrette pas du tout mon achat Vini et la XLW c\'est vraiment énorme la portance dans les conditions light. Je me suis vraiment fait plaisir le WE dernier :-)</p><p>Les gars sur le spot ont vraiment hallucinés sur le fait que je naviguais en 5.2 à l\'aise, alors qu\'en 7.5/8.0 ils ont pas fait plus de 300m au planning (il leur manquait 1 ou 2 nds). Ils m\'ont clairement dis que jusqu\'à ce qu\'ils le voient, ils pensaient pas que ça pouvais faire une telle différence. "<span></span></p><h2>Hervé</h2><p>"Je profite bien de mon Foil, 4 sorties déjà et sur la dernière des vols de plus de 500m stabilisés sans touchette. Le contrôle du vol une fois déclenché passe essentiellement par le dosage de la puissance dans la voile qui est minime ; c\'est même un jeu d\'enfant que de travailler ainsi. J\'ai même eu la surprise ultime dans une survente de devoir lâcher complètemet la main AR et de maintenir le wish juste avec la main AV, donc très légèrement bordé avec une remarquable stabilisation du vol... Je suis bluffé et hyper séduit !!</p><p>Je tiens à vous dire que je suis à la fois admirateur de cette technologie, je vous remercie pour avoir publié des essais qui reflètent donc bien la vérité.</p><p>C\'est SUPER SUPER SUPER !!!!!!!!!!!!!!!!!!!!!!!"</p><h2>Etienne</h2><p>"Après 35 ans de windsurf, j\'avoue que j\'étais un peu rentré dans la routine sans vraiment m\'en rendre compte. J\'ai découvert de nouvelles sensations auxquelles je ne m\'attendais pas ! Vous le dites tous mais je  ne m\'en suis vraiment rendu compte qu\'après mes premiers vols. La sensation de glisse est juste incroyable ... même pas besoin d\'aller très vite.</p><p>Je suis chaud comme un gamin : je guette la météo."</p><h2>Yves</h2><p>"Le foil me convient bien. 4 sessions en Corse : les 3 1ères où j\'ai pu foiler assez vite mais j\'étais toujours super tendu ! Sans oser le strap arrière. Puis le déclic à la 4ème ou j\'ai raccourci les bouts de harnais ce qui m\'a fait naviguer plus debout sur la planche et mieux contrôler le flotteur. Strap ok dès ce moment là </p><p>La 5ème de retour en Bretagne où la nav était super agréable et stable. </p><p>Çà avance. Çà avance ! J\'aimerais pouvoir en faire plus mais je manque de temps. </p><p>Ici tout le monde sauf 1 ou 2 a des Loké ! On les dit plus stable et plus facile à la contre gite pour le cap. Perso je trouve le Horue facile d\'accès et je ne suis pas encore apte à juger !"</p><h2>Stéphane</h2><p>"Ca y est, j\'en suis à 2 sessions et je commence à me détendre sur le foil (un peu, ... entre 2 boites lol). La sensation est top !!!! Je ne pensais pas que ce soit aussi facile finalement. Enfin, il reste un peu de boulot quand je vous ai vu naviguer tous, mais déjà c\'est le pied total.  Merci de m\'avoir motivé, vous aviez trop raison. Allez, j\'y retourne !"</p><p><br></p>

',
            'status' => 'Published',
            'views' => 857,
            'last_ip' => NULL,
            'created_at' => '2021-12-02 01:00:38',
            'updated_at' => '2021-12-02 01:00:38',
        ),
        10 => 
        array (
            'id' => 17,
            'user_id' => 1,
            'post_categories_id' => 2,
            'title' => 'Je débute, acte 4 ',
            'description' => 'Voilà « déjà » la dixième sortie foil dans la poche !',
            'body' => '<p>On retrouve Hervé que l\'on avait laissé à ses premiers vols sans straps arrière. Entre temps, le bougre a un peu progressé et nous livre ses nouvelles sensations. Encore une fois, remercions le de livrer en direct son ressenti pour le partager avec vous tous
</p><p>"
</p><p>Voilà « déjà » la dixième sortie foil dans la poche ! C\'est presque géant et rien du tout à la fois.
</p><p>Mais il est possible de tirer un enseignement sur un élément essentiel au vol : « comment aborder la pratique au harnais ? ».
</p><h3>Progression</h3><p>Ce qui aura marqué cette première phase de progression, c\'est bien la recherche permanente du meilleur compromis entre la configuration « mains libres » (harnais décroché) et le contrôle du vol au harnais... Au tout début, il est fortement recommandé de laisser cet appendice au vestiaire. L\'équipe de GlissAttitude envoie les novices sur l\'eau « à poil». En effet, une bonne pelle est toujours moins désagréable quand on est libre ! Tout le monde connaît la sanction d\'une chute, harnais accroché...
</p><p>J\'ai toutefois opté pour l\'utilisation de ce dernier dès la première sortie (mauvais élève !) mais en prenant trois précautions de taille :
</p><ul>
<li>utiliser un harnais de type ceinture (crochet haut),</li>
<li>disposer de bouts réglables très longs</li>
<li>installer les deux attaches velcro des lignes côte à côte sur le wish à la mode « single ».</li>
</ul><p>L\'idée maîtresse étant de survivre, voyons pourquoi ces trois options sont fondamentales ! Ma réaction lors du tout premier décollage, outre l\'intense plaisir et la surprise, a été de refuser la montée de ce «foutu » mât !... Le fait d\'être libre par rapport au gréement donne toute confiance pour contrôler la puissance et ainsi être sûr de pouvoir « descendre de l\'arbre » au cas où. Relativement rassuré (je n\'ai pas dit serein), on découvre les premiers petits vols en se gardant bien de se rendre prisonnier du gréement. Mais les années passées à envoyer des runs longue distance à travers l\'estuaire de la Gironde m\'ont formaté à l\'usage du harnais et dès la première session de foil, j\'ai accroché, certes avec un pincement au cœur... On ressent instantanément une sorte de contrainte mais la configuration décrite permet de naviguer en mode « harnais automatique » ; comprenez par là que les lignes sont à peine en tension et se décrochent d\'elles-mêmes lors d\'un léger rapprochement du corps et du gréement. Cette « fonction automatique » est parfaitement illustrée par le rush vidéo présenté précédemment (acte trois). Cette astuce permet de se lancer au harnais sans pour autant être piégé. Dès que les lignes se décrochent, c\'est le soulagement et dès que la pression est retombée, on raccroche si on veut en plein vol ; c\'est comme brancher une prise, c\'est simple !
</p><p>Mais au bout du compte, le but ne consiste pas à voir les lignes se décrocher constamment pour le plaisir de les raccrocher... Au fil des sessions, je n\'ai donc cessé de les raccourcir (actuellement encore 30 cm !). Nous sommes ainsi prêts à voler en mode hybride, alliant sécurité et efficacité.
</p><p><br>
</p><h3>Mais au fait pourquoi un harnais ? </h3><p>Le foil est doux et la puissance nécessaire au vol sur une aile « Xtrem Light Wind » avec une voile de race – trois cambers 7,3 (mes dernières sessions par force 3-4) est modérée. Toutefois, quand vous abordez des vols de plus d\'un kilomètre d\'un trait sur des sessions de plus de deux heures, à moins d\'être gaulé à la Scharzenegger, il faudra bien faire passer une partie de la puissance par le harnais car les affaires prennent assez rapidement un tour physique...
</p><p>Mais attention, le véritable avantage du harnais n\'est toujours pas dévoilé et va bien au-delà d\'une simple histoire de « farniente » ; c\'est ici que tout se corse... A mains nues, le vol est une belle partie de « feeling à l\'état pur ». Les sensations sont pointues et le corps est en recherche permanente d\'équilibre ; c\'est naturellement ce qui était visé pour progresser. Mais le revers de la médaille se paye sous la forme d\'une légère instabilité en cap et en hauteur (c\'est très net sur le rush vidéo acte 3) ; du vol en quelque sorte « sur-contrôlé » où le pilote se cherche et où l\'ensemble commence à ressembler à une étrange danse... C\'est exactement le point où l\'envie de s\'accrocher reprend le dessus car le fameux « susucre » est au bout des bouts...
</p><p>Dès que les lignes de harnais entrent en tension même légère, le vol se stabilise, la trajectoire gagne en fluidité et le plaisir et les craintes grimpent !... De fait, le p\'tit peu que l\'on a perdu en liberté se retrouve en stabilité. Effectivement, les lignes de harnais viennent compléter, renforcer et donc stabiliser la liaison pilote-gréement. Mais les surventes rôdent et l\'équilibre demeure délicat comme le montre la vidéo jointe. Donc ne pas perdre de vue la nécessité de disposer de tout le gradient d\'ajustement en finesse nécessaire au contrôle du vol pour s\'éclater mais pas au sens littéral du terme !
</p><p><br>
</p><h3>En pratique</h3><p>Les lignes suffisamment longues (je suis actuellement à 30 cm) et un point d\'attache type « single » comme le pratique Criss sont la clé de cette liberté dans le pilotage ! Ce que j\'appelle le « harnais automatique » n\'est toutefois pas un but en soi ; le prix en est de facto un défaut de puissance dans le light (dans la dizaine de nœuds). Comme je le commente sur le rush, on est alors obligé de reprendre à mains nues pour maintenir le vol dans les souffles asthmatiques...
</p><p>Vive la liberté accroché car cela permet finalement de foiler au harnais sans plus trop s\'en rendre compte, c\'est à dire en « totale » confiance ! Et là, on peut affirmer que le but est atteint ou presque...
</p><p>Bons vols !
</p><p>"
</p><h3>La video</h3><iframe width="853" height="480" src="https://www.youtube.com/embed/O2z4crtdUpg" frameborder="0" allowfullscreen=""></iframe>

',
            'status' => 'Published',
            'views' => 1404,
            'last_ip' => NULL,
            'created_at' => '2017-03-30 18:37:07',
            'updated_at' => '2017-03-30 18:37:07',
        ),
        11 => 
        array (
            'id' => 18,
            'user_id' => 1,
            'post_categories_id' => 2,
            'title' => 'Je débute, acte 5 : voler sans vent !',
            'description' => 'On continue avec les aventures de notre Hervé préféré ',
        'body' => '<p>On continue avec les aventures de notre Hervé préféré :) Encore une fois, il nous envoie un compte rendu très détaillé de ses sensations pour les partager avec vous tous.</p><p>"</p><p>Ce lundi 27 mars 2017 est une véritable journée d\'été ; les cigales ne chantent pas encore certes, mais malgré l\'absence de vent, je tente ma chance depuis le spot de St. Georges de Didonne en Charente Maritime. C\'est une conche d\'un nautique de large qui jouxte celle plus connue de Royan et qui ouvre sur l\'estuaire de la Gironde.
</p><p>Donc, coup de sueur pour le départ. Devant jouer avec la marée particulièrement puissante (coefficient de 96), il me faut porter le matériel sur une bonne distance pour pouvoir prétendre à déborder un plateau rocheux qui borde la zone de start en toute sécurité.
</p><p>Le Tiny 110 litres est sympa car même dans un micro souffle asthmatique, je parviens à virer de bord sans chuter avec ma 7.3 de race. L\'importance du flotteur saute donc aux yeux ! Mais c\'est toutefois une véritable torture ; la « vitesse » scotche à 3-4 kts... Désespoir ?
</p><p>Non, comme vous le savez, je pratique depuis quelques années le grand raid en formula sur cette partie de l\'estuaire. Le salut se trouve 500 m devant moi... Au fur et à mesure que je me rapproche de la ligne de courant, je perçois de plus en plus de remous et une ondulation douce et puissante levée par le fort courant montant. A cette heure de demi marée, le courant est optimal et peut atteindre 4 à 5 kts. J\'ai déjà réalisé des mesures GPS ; c\'est d\'ailleurs légèrement supérieur aux valeurs données par le SHOM dans les documents nautiques.
</p><p>Comme on peut le voir sur la vidéo, je lance un vigoureux pumping juste à l\'entrée dans ce satané courant en annonçant de surcroît une petite risée. Et le miracle s\'opère ; car c\'est un véritable miracle ! Le vent réel doit être de l\'ordre de quelques nœuds ; le plan d\'eau est absolument lisse. On ne voit comme sur la vidéo que l\'ondulation dûe au courant et juste quelques rides bien timides liées au tout petit air...
</p><p>Et grâce à cette aile XLW de Horue, le décollage s\'effectue dans une douceur difficile à décrire. On a le sentiment d\'être porté par de douces sirènes ; j\'hallucine ou c\'est la chaleur ? Voyez la vidéo, ça vole du feu de Dieu et pratiquement sans vent !!! Je n\'ai jamais vécu une telle performance en l\'absence d\'air, en l\'absence d\'effort physique, en l\'absence de bruit ; juste le chuintement du mât qui lève derrière moi un petit jet à la mode Manneken-Pis !
</p><p>Retour sur terre ; il faut à présent piloter le cap retour car à une vitesse moyenne d\'une douzaine de nœuds, 4 ou 5 nœuds par le travers jouent un rôle essentiel et c\'est donc une main sur le wish et un œil sur le GPS que je rentre en jouant des appuis pour corriger la trajectoire ; toujours en douceur et dans le bonheur !
</p><p>"</p><iframe width="853" height="480" src="https://www.youtube.com/embed/gZCe62K3egg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>

',
        'status' => 'Published',
        'views' => 872,
        'last_ip' => NULL,
        'created_at' => '2017-04-03 12:40:49',
        'updated_at' => '2017-04-03 12:40:49',
    ),
    12 => 
    array (
        'id' => 21,
        'user_id' => 1,
        'post_categories_id' => 2,
        'title' => 'Je débute, acte 6 : pomper en 8m2',
        'description' => 'Notre cher hervé revient... et bien non, il n\'a pas fini découpé par son foil',
    'body' => '<p>Cela faisait un moment que nous n\'avions pas de nouvelle de notre cher hervé ... et bien non, il n\'a pas fini découpé par son foil, le revoilà</p><p>"</p><h2>La métamorphose du cloporte !</h2><p>Eh oui, je reviens sur les ondes (marines bien entendu) juste pour vous faire un peu rêver de vol dans l\'ultra light ! La scène se déroule le weekend du 8 mai (régate régionale de catmarans) sur St. Georges de Didonne près de Royan.</p><p>Le petit air de secteur SW souffle autour de la dizaine de noeuds ; deux planchistes se trainassent lamentablement... </p><p>C\'est l\'occasion rêvée de tester un tandem inédit, l\'aile HORUE XLW avec une voile que je n\'avais jamais sortie en foil ; une 8.0 m² de race quatre cambers (une GPS de chez Hot Sails Maui). C\'est une voile qui présente la particularité de disposer d\'un creux sous le wish particulièrement formé et d\'un twist très marqué mais surtout très progressif ; un shape 3D. Gréée sur mât RDM, elle est à priori parfaite pour le vol !...</p><p>Alors ne croyez pas que tout est gratuit ; il faut "arracher" le décollage car la position passive d\'attente de la risée risque sinon d\'être éternelle et ce pour une bonne raison, il n\'y pas de risée ! La solution réside donc dans l\'exploitation de cette caractéristique unique au foil, celle qui consiste à réagir à une sollicitation du gréement à condition que la puissance générée soit suffisante... D\'où le recours à cette fameuse 8.0 !</p><h2>Le déclenchement du décollage</h2><p>C\'est un engagement total sur quelques secondes. Le pied AV est engagé dans le strap, on est décroché du harnais et on lance la machine à la force d\'un pumping énergique tout en abattant d\'une trentaine de degrés (vous pouvez contrôler sur le compas de la vidéo). L\'abattée est fondamentale et incontournable ; c\'est elle qui permet de gagner en vitesse car la puissance est optimale grâce à l\'angle favorable par rapport au vent. Au bout de quelques secondes, le foil grogne et la vitesse passe de 4 noeuds à la dizaine ; il faut alors progressivement reculer le pied AR jusqu\'à l\'engager dans le strap quand le vitesse est suffisante (au-delà des dix noeuds). Le pumping se poursuit en baissant dans la fréquence pour s\'harmoniser avec le tempo. Le sifflement du foil devient perceptible, il est déjà possible de revenir un peu plus près du vent (resserrer son cap) et alors que la phase de pumping commence à s\'alléger, il est possible de s\'accrocher... Le décollage se produit alors que l\'on a dépassé la dizaine de noeuds ; la montée sur le foil peut alors être pilotée en douceur en ajustant l\'appui AR. Un simple basculement du buste vers l\'AV en appliquant un rappel engagé sur les lignes de harnais suffit à stabiliser cette montée. Vous êtes en vol à une quinzaine de noeuds sous le nez des collègues scotchés et médusés...</p><h2>Et oui :  "une furie de bonheur"</h2><p>On vient vous voir après la session ; pour scruter le foil et vous questionner dans tous les sens...</p><p>Je vous souhaite vraiment de découvrir cette furie de bonheur qui vous envahit quand vous décollez dans même pas dix noeuds de vent pour votre vingtcinquième session ! Ce jour là, j\'enverrai 3 heures de vol, le foil sifflant comme un malade sur une eau lisse.</p><p>C\'est ainsi que l\'on découvre que le cloporte n\'est pas un insecte, qu\'il ne pique pas et que c\'est en fait un crustacé ! Comme quoi !</p><p>Bon vent et bons vols à tous !</p><p>"</p><p><br></p><p><iframe width="1280" height="720" src="https://www.youtube.com/embed/poHekd4qqQ4?rel=0" frameborder="0" allowfullscreen=""></iframe><br></p>

',
        'status' => 'Published',
        'views' => 1637,
        'last_ip' => NULL,
        'created_at' => '2017-05-09 12:21:32',
        'updated_at' => '2017-05-09 12:21:32',
    ),
    13 => 
    array (
        'id' => 27,
        'user_id' => 1,
        'post_categories_id' => 4,
        'title' => 'Recommandations de serrage visserie',
        'description' => 'Voici nos recommandation pour réaliser des serrages sans risque',
        'body' => '<p>Lorsque vous montez votre foil, il faut &agrave; la fois serrer la visserie suffisament pour &eacute;viter de perdre une aile en route, et &agrave; la fois ne pas bourriner au risque de d&eacute;truire les filetages.&nbsp;</p>
<p>Pour les serrages M6 qui sont viss&eacute;s directement dans l\'aluminium , on vous conseille d\'adopter un couple de serrage de 6 netwton m&egrave;tres</p>
<p>Pour les serrages M6 qui sont viss&eacute;s dans l\'aluminium &eacute;quip&eacute; d\'h&eacute;licoils inox , on vous conseille d\'adopter un couple de serrage de 8 netwton m&egrave;tres</p>
<p>Pour les serrages M6 qui sont viss&eacute;s dans des inserts inox M6 , on vous conseille d\'adopter un couple de serrage de 8 netwton m&egrave;tres</p>
<p>&nbsp;</p>',
        'status' => 'Published',
        'views' => 2301,
        'last_ip' => NULL,
        'created_at' => '2017-07-28 12:58:47',
        'updated_at' => '2017-07-28 12:58:47',
    ),
    14 => 
    array (
        'id' => 31,
        'user_id' => 1,
        'post_categories_id' => 3,
        'title' => 'Visite de la société Foil&Co',
        'description' => 'Visite de la société Foil&amp;Co, l’un des acteurs français qui va compter dans le monde du Windfoil',
        'body' => '<p>Aujourd&rsquo;hui, j&rsquo;ai eu le privil&egrave;ge de visiter la soci&eacute;t&eacute; Foil&amp;Co, l&rsquo;un des acteurs fran&ccedil;ais qui va compter dans le monde du Windfoil, en compagnie de Tanguy LE BIHAN. Je vous emm&egrave;ne donc dans mes bagages jusqu\'&agrave; Brest, une fois n\'est pas coutume, d&eacute;couvrir en d&eacute;tails les sp&eacute;cifi&eacute;s de cette soci&eacute;t&eacute;.</p>
<h2>Gen&egrave;se</h2>
<p>Tanguy LE BIHAN est un nom reconnu de l&rsquo;architecture navale. Avec des dessins de bateaux tr&egrave;s connus &agrave; son actif, il n&rsquo;avait plus grand chose &agrave; prouver dans son m&eacute;tier d&rsquo;origine. Il est par contre r&eacute;guli&egrave;rement sollicit&eacute; sur des projets tr&egrave;s divers qui vont de la plasiance aux sports de glisse, en passant par la voile sportive (catamarans, moths etc.).</p>
<p>Apr&egrave;s avoir, au cours de ses diverses missions, &eacute;clus&eacute; beaucoup d&rsquo;options de sous-traitance en Asie avec tous les probl&egrave;mes aff&eacute;rants (d&eacute;lais, qualit&eacute;, d&eacute;rive dans le temps, manque de fiabilit&eacute;), Tanguy a rapidement cern&eacute; l&rsquo;int&eacute;r&ecirc;t d&rsquo;un centre de R&amp;D et de prototypage en France, au plus pr&egrave;s du march&eacute;.</p>
<p>Il a donc choisi de cr&eacute;er ce qui n&rsquo;existait nul par ailleurs dans le domaine de la voile et de la glisse : une soci&eacute;t&eacute; de R&amp;D ind&eacute;pendante &eacute;quip&eacute;e des derni&egrave;res technologies (Mod&eacute;lisation, CNC, CFD, Impression 3D, d&eacute;coupe num&eacute;rique, mapage digital, presses chauffantes), et de comp&eacute;tences de haut niveau en conception de production, capable de r&eacute;aliser de la R&amp;D, et de la production sur des pi&egrave;ces composites prepreg haut de gamme.</p>
<p><img src="/storage/photos/1/legacy/525cce0ad1407cf06ea2afcb78d81de9.jpg" /></p>
<p>Foil &amp; Co est ainsi n&eacute; il y a quelques mois avec un objectif bien pr&eacute;cis : mettre en oeuvre des vraies comp&eacute;tences en m&eacute;canique des fluides et structure composite, et leur laisser toute la libert&eacute; de s&rsquo;exprimer gr&acirc;ce &agrave; une chaine compl&egrave;te de prototypage et de production interne. L&rsquo;avantage d&eacute;cisif r&eacute;side dans la vitesse &agrave; laquelle un concept peut devenir une r&eacute;alit&eacute; parfaitement conforme et pr&ecirc;te &agrave; &ecirc;tre test&eacute;e.</p>
<p>Compte tenu des investissements importants, le projet &eacute;tait os&eacute;, mais quand on voit le chemin parcouru en quelques mois, tous les feux sont au vert pour faire de Foil&amp;Co un des grands acteurs de ce nouveau march&eacute;.</p>
<p>Bien s&ucirc;r, le windfoil n&rsquo;est que le premier projet de Foil&amp;Co, et en plus des d&eacute;veloppements en cours dans notre domaine, l&rsquo;&eacute;quipe de presque 10 personnes a d&eacute;j&agrave; plusieurs autres dossiers sur la table.</p>
<h2>Les comp&eacute;tences</h2>
<p>Foil&amp;Co met en commun des comp&eacute;tences pointues dans des domaines strat&eacute;giques : l&rsquo;architecture navale et la m&eacute;canique des fluides, la mod&eacute;lisation et la conception de structures composites, la production composite prepreg. La soci&eacute;t&eacute; s&rsquo;est par ailleurs entour&eacute;e de quelques metteurs au point de renom pour pouvoir alimenter la machine avec des retours terrains utiles et pr&eacute;cis.</p>
<h2>Les installations</h2>
<p>la soci&eacute;t&eacute; Foil&amp;Co est install&eacute;e en pleine campagne bretonne, &agrave; quelques minutes de Brest. Le b&acirc;timent assez r&eacute;cent est une ancienne usine textile compl&egrave;tement reconditionn&eacute;. Les volumes sont vastes et laissent beaucoup d&rsquo;espace pour envisager une croissance de l&rsquo;activit&eacute; sans contrainte.</p>
<p><img src="/storage/photos/1/legacy/dc2fb41b97250316104fdfb49956ee08.jpg" /></p>
<p>En dehors des bureaux administratifs, la soci&eacute;t&eacute; poss&egrave;de une grande salle de r&eacute;union tr&egrave;s bien &eacute;quip&eacute;e pour permettre une communication efficace. C&rsquo;est un premier bel outil &agrave; disposition de l&rsquo;&eacute;quipe R&amp;D, des clients ou encore des metteurs au point.</p>
<p><img src="/storage/photos/1/legacy/2c8a69e9f06515f1b7cdd72703cceb39.jpg" /></p>
<p>Le premier outil de prototypage est une imprimante 3D de taille exceptionnelle, permettant la r&eacute;alisation de pi&egrave;ces de plus de 1M dans les 3 dimensions. Avec l&rsquo;&eacute;volution ultra rapide de cette technologie et des mat&eacute;riaux utilis&eacute;s, cette machine pourrait vite devenir un incontournable dans les process de d&eacute;veloppement ultra courts.</p>
<p><img src="/storage/photos/1/legacy/98634e30720830e21f6417bf177406f3.jpg" /></p>
<p>La premi&egrave;re grande salle de l&rsquo;entreprise rassemble</p>
<ul>
<li>Une table de d&eacute;coupe num&eacute;rique pour les tissus (prepreg ou classiques) avec maintien par aspiration</li>
</ul>
<p><img src="/storage/photos/1/legacy/a0bf1f2822472dfb8ead41152df41562.jpg" /></p>
<ul>
<li>Une presse 90T &agrave; dalle chauffante de dimensions impressionnantes (2m40 x 130cm)</li>
</ul>
<p><img src="/storage/photos/1/legacy/2e0854a6387089edd9b92b730a2668d1.jpg" /></p>
<ul>
<li>Un poste de stratification composite</li>
<li>Une &eacute;tuve programmable</li>
</ul>
<p><img src="/storage/photos/1/legacy/b8f94cbb7c630c42097cbf6be0891014.jpg" /></p>
<p>L&rsquo;autre grande pi&egrave;ce rassemble</p>
<ul>
<li>le centre d&rsquo;usinage &agrave; commande num&eacute;rique, capable de travailler autant sur du carbone, que de l\'acier ou du carton :)</li>
</ul>
<p><img src="/storage/photos/1/legacy/19f04291348f462a45b4f3b5ce636f19.jpg" /></p>
<p><img src="/storage/photos/1/legacy/b61aa16c6085284fda1803c2f98a17fa.jpg" /></p>
<ul>
<li>la cabine de pon&ccedil;age et finition</li>
<li>le poste d&rsquo;emballage</li>
</ul>
<p><img src="/storage/photos/1/legacy/02aec852edd6a4e23e6de89e1b37bb8a.jpg" /></p>
<p>Une troisi&egrave;me salle, que nous n&rsquo;avons pas visit&eacute;, abrite les projets secrets de la soci&eacute;t&eacute;.</p>
<h2>Le process</h2>
<p>Les moules de prototypage (en mat&eacute;riaux &eacute;conomiques) et de production (en aluminium) sont mod&eacute;lis&eacute;s et r&eacute;alis&eacute;s sur place. Grace aux comp&eacute;tences internes, ces moules b&eacute;n&eacute;ficient d&rsquo;une conception et d&rsquo;une finition qui n&rsquo;a pas grand chose &agrave; envier aux sp&eacute;cialistes du domaine. Ceci permet un temps de cycle usinage du moule, pr&eacute;paration, production d&rsquo;un prototype 100% conforme, finition en moins de 2 jours !</p>
<p><img src="/storage/photos/1/legacy/3f9e1b92155b118751a7ee62d9c09bef.jpg" /></p>
<p><img src="/storage/photos/1/legacy/adbac090ac019425e6aba452bce08ee0.jpg" /></p>
<p>Voici un exemple de moule de prototypage usin&eacute; dans du medium. Une excellente solution pour tester des concepts &agrave; moindre co&ucirc;t, sans pour autant n&eacute;gliger l\'aspect structurel des pi&egrave;ces. La pi&egrave;ce produite partage en effet de m&ecirc;me process de production et les m&ecirc;me mat&eacute;riaux que celle de s&eacute;rie qui pourrait en d&eacute;couler.</p>
<p><img src="/storage/photos/1/legacy/ca6155401c0ace89cc46b5ade4b56cf7.jpg" /></p>
<p>Lorsque l\'on visite habituellement une entreprise de composite, il est fr&eacute;quent d\'avoir de la poussi&egrave;re de fibre et de la r&eacute;sine de partout. Avec la technologie prepreg (fibre pr&eacute;-impr&eacute;gn&eacute;e de r&eacute;sine et re&ccedil;ue congel&eacute;e), rien de tout ceci : l\'entreprise ressemble plus &agrave; un labo tr&egrave;s propre. C\'est d\'abord un gros plus pour la fiabilit&eacute; des pi&egrave;ces, mais aussi pour la sant&eacute; des employ&eacute;s en production.</p>
<p>Chez foil &amp; co, seul un petit rack contient encore quelques produits utilis&eacute;s pour la r&eacute;alisation de certains prototypage qui sont strat&eacute;s au contact.</p>
<p><img src="/storage/photos/1/legacy/4aa6d07367e8f635c0525936ef841f0c.jpg" /></p>
<p>Pour la production de s&eacute;rie, la mati&egrave;re premi&egrave;re arrive sous forme de rouleaux congel&eacute;s.</p>
<p><img src="/storage/photos/1/legacy/e1f0ff9ee1fc3afbc495fe560268b864.jpg" /></p>
<p>La production d&eacute;finitive d&rsquo;un foil 100% prepreg passe par les &eacute;tapes suivantes</p>
<ul>
<li>d&eacute;coupe des pi&egrave;ces de tissus prepreg. Ceci est r&eacute;alis&eacute; &agrave; l&rsquo;aide d&rsquo;une table de d&eacute;coupe &agrave; commande num&eacute;rique pour n&rsquo;avoir aucun al&eacute;a dans la forme et l&rsquo;orientation des fibres de chaque couche de composite. Une optimisation de mati&egrave;re est r&eacute;alis&eacute;e avec un logiciel d&rsquo;imbrication qui permet de r&eacute;duire &agrave; quelques % les pertes mati&egrave;re</li>
</ul>
<p><img src="/storage/photos/1/legacy/43c5312131b3fc4e5bce2ef9d9434e3b.jpg" /></p>
<p>pr&eacute;paration du moule (nettoyage et cirage)</p>
<ul>
<li>positionnement des nombreuses couches de prepreg (et &eacute;ventuellement de l&rsquo;&acirc;me) dans le moule &agrave; temp&eacute;rature ambiante. Une op&eacute;ration actuellement manuelle, qui doit &ecirc;tre r&eacute;alis&eacute;e tr&egrave;s pr&eacute;cis&eacute;ment pour garantir la reproductibilit&eacute; parfaite d&rsquo;un mod&egrave;le &agrave; l&rsquo;autre. Cette op&eacute;ration pourrait &ecirc;tre rapidement robotis&eacute;e pour gagner en temps de cycle et en pr&eacute;cision</li>
<li>fermeture du moule</li>
</ul>
<ul>
<li>cuisson. La presse de 90 tonnes &agrave; dalle chauffante se charge d&rsquo;assurer une parfaite coh&eacute;sion du composite, et une catalyse &agrave; coeur. Sa taille g&eacute;n&eacute;reuse permet de traiter plusieurs moules en une fois. Le contr&ocirc;le pr&eacute;cis des temp&eacute;ratures (cf le capteur de temp&eacute;rature ins&eacute;r&eacute; dans le moule sur la photo ci-dessous) et des temps de cuisson assurent une tenue m&eacute;canique et une rigidit&eacute; optimale de la pi&egrave;ce finale.</li>
</ul>
<p><img src="/storage/photos/1/legacy/bd552b584a2a5997522e6c9349261065.jpg" /></p>
<ul>
<li>d&eacute;moulage, apr&egrave;s refroidissement du moule</li>
</ul>
<p style="text-align: center;"><img src="/storage/photos/1/legacy/6ea32b9b20bf490f4a521c9dd86adf72.jpg" /></p>
<p><img src="/storage/photos/1/legacy/8b777b95063f4c8a2fed9f0ff65ee06e.jpg" /></p>
<ul>
<li>d&eacute;tourage des d&eacute;pouilles de moulage par le centre d&rsquo;usinage &agrave; commande num&eacute;rique. Cette op&eacute;ration est enti&egrave;rement automatis&eacute; pour garantir un respect parfait des tol&eacute;rances g&eacute;om&eacute;triques. La pi&egrave;ce est maintenue en place sur son gabarit par aspiration : un moyen parfait pour ne pas endommager les pi&egrave;ces, et r&eacute;duire encore le temps de finition</li>
</ul>
<p><img src="/storage/photos/1/legacy/b56646c36f9baea391e494c68a68a46b.jpg" /></p>
<ul>
<li>pon&ccedil;age et finition. Grace &agrave; des moules ultra pr&eacute;cis, et un process de stratification et de d&eacute;tourage optimis&eacute;s, la finition est une op&eacute;ration tr&egrave;s rapide.</li>
</ul>
<p><img src="/storage/photos/1/legacy/078325329ce5dd7d4ad9360d42f9aee8.jpg" /></p>
<p><img src="/storage/photos/1/legacy/f17cff0b88162d61fb8827c627dc391d.jpg" /></p>
<p>Grace &agrave; des &eacute;quipements de pointe et une automatisation pouss&eacute;e, le temps de production à été diminué de moitié depuis le début des opérations. Cette rationalisation et optimisation permettent d\'être absolument compétitifs face à la production asiatique et son coût de main d\'oeuvre très faible qui impacte sur le coût de revient des produits finis. Et ce n&rsquo;est qu&rsquo;un début (des évolutions importantes de process pourtant déjà très efficace sont à l\'étude) . Ce type de performance industrielle est la cl&eacute; d&rsquo;une soci&eacute;t&eacute; rentable en mode production fran&ccedil;aise.</p>
<h2>Projets Windfoil</h2>
<p>Comme vous l&rsquo;avez certainement d&eacute;j&agrave; tous vu sur les r&eacute;seaux sociaux, Foil&amp;Co travaille d&rsquo;arrache pied sur la conception d&rsquo;un foil d&eacute;di&eacute; &agrave; la course. Il est bas&eacute; sur un mat de 105 et un fuselage long, dans une version ultra rigide. Pour avoir test&eacute; aujourd&rsquo;hui 2 prototypes, je peux dors te d&eacute;j&agrave; vous annoncer qu&rsquo;aucun autre produit sur le march&eacute; n&rsquo;approche pour l&rsquo;instant ce niveau de rigidit&eacute;, que ce soi en flexion ou en torsion. Ce ch&acirc;ssis de course sera capable d&rsquo;embarquer toute les ailes d&eacute;j&agrave; disponibles sur le gamme AFS2, mais plusieurs ailes sp&eacute;cifiques sont &eacute;galement en cours de d&eacute;veloppement.</p>
<p><img src="/storage/photos/1/legacy/9ca3eb60404c19dd5fc5495dc0a8c94e.jpg" /></p>
<p>Comme pour le mat, certaines de ces nouvelles ailes mettent en oeuvre des solutions in&eacute;dites, que je ne d&eacute;voilerai bien s&ucirc;r pas ici. Sachez toutefois que Foil&amp;Co n\'a pas l\'intention de se contenter de copier ce qui existe. Leur expertise en prototypage rapide permet de ne pas se cantonner &agrave; des solutions &eacute;videntes, mais au contraire d\'aller explorer des pistes r&eacute;ellement innovantes. L\'&eacute;volution du windfoil passera par ce type d\'exploration ... soyons fier que cela se produise en France :)</p>
<p><img src="/storage/photos/1/legacy/e6c4a5746202bead4bf7718d2227097c.jpg" /></p>
<p>Apr&egrave;s la version freeride (AFS2) et la version course (AFS R) , c&rsquo;est une version avec un mat de 95 qui verra le jour dans les mois &agrave; venir pour compl&eacute;ter la gamme et proposer une option pour chaque niveau de pratique.</p>
<p>Pour l&rsquo;instant, tous les ensembles Mat Fuselage sont non d&eacute;montables, mais des solutions sont envisag&eacute;es si le besoin d&rsquo;avoir une version d&eacute;montable s&rsquo;en faisait sentir. Tanguy avoue que la fiabilit&eacute; dans le temps est forc&eacute;ment moins &eacute;vidente &agrave; ma&icirc;triser d&egrave;s lors que l&rsquo;on introduit une liaison d&eacute;montable &agrave; ce niveau &hellip; d&rsquo;o&ugrave; son choix actuel. De notre c&ocirc;t&eacute;, nous ne pouvons qu&rsquo;approuver un tel choix quand on voit les contraintes &eacute;normes encaiss&eacute;es par la liaison Mat / Fuselage. On consid&egrave;re qu&rsquo;il vaut mieux avec un foil non d&eacute;montable qu&rsquo;une liaison trop souple. A ce jour, les marques ma&icirc;trisant la jonction de fa&ccedil;on r&eacute;ellement acceptable se comptent sur les doigt d&rsquo;une main (et encore, il y a des doigts non utilis&eacute;s !).</p>
<h2>Distribution</h2>
<p>Depuis le d&eacute;but, AHD est un client privil&eacute;gi&eacute; de la soci&eacute;t&eacute; Foil&amp;Co et distribue le foil AFS2 depuis mai 2017.</p>
<p>Les choses &eacute;voluent et la marque AFS vient d&rsquo;&ecirc;tre cr&eacute;&eacute;e. D&eacute;sormais, les foils AFS seront distribu&eacute;s de fa&ccedil;on ind&eacute;pendante par Foil&amp;Co, et seront estempill&eacute;s avec le logo de la nouvelle marque. Cela permet &agrave; la soci&eacute;t&eacute; de travailler avec toutes les marques de flotteurs, et de rendre leurs produits compatibles avec n&rsquo;importe quelle combinaison.</p>
<p>La volont&eacute; est clairement affich&eacute;e de produire des mod&egrave;les haut de gamme et de s&rsquo;appuyer sur un petit r&eacute;seau de revendeurs impliqu&eacute;s dans le foil, et ayant la volont&eacute; d&rsquo;apporter tout le service n&eacute;cessaire (conseil, essais, mise en oeuvre, SAV) autour du produit.</p>
<h2>Le boss au micro</h2>
<p><iframe src="https://www.youtube.com/embed/3zXBm6jyrQ4?rel=0" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
'status' => 'Published',
'views' => 4429,
'last_ip' => NULL,
'created_at' => '2017-10-02 12:27:59',
'updated_at' => '2022-02-19 13:06:28',
),
15 => 
array (
'id' => 32,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Réaliser un palan d\'amure',
'description' => 'A force de naviguer aussi avec des fins techniciens, j\'ai fini par adopter leur outil magique : le palan d\'amure',
'body' => '<h2>Pourquoi ?</h2>
<p>A force de naviguer en foil, je prends gout à un truc qui nous change la vie : avoir moins de matos !</p>
<div>Pour plein de raisons (coût, encombrement, transport, prise de tête), qu\'est ce que c\'est bien de tout faire avec 1 flotteur et 2 voiles ! .. et le foil permet ça alors que c\'était difficile en windsurf classique.</div>
<div></div>
<div>Et à naviguer avec les fins techniciens du pôle France (qui sont en train de nous dépasser à 100 000 en foil), j\'ai fini par adopter leur outil magique : le palan d\'amure.</div>
<div>Avec ce petit accessoire, on module complètement la puissance de la voile, sans même être obligé de revenir au bord. Et comme on commence à se promener loin sur le plan d\'eau (grâce aux capacités de dingue du foil au près), ça devient vite l\'accessoire indispensable.</div>
<div>Ca permet aussi d\'exploiter une unique voile dans une plage beaucoup plus importante. Désormais, je n\'ai plus de trou entre la 7,8 et la 5,2 ..</div>
<h2>Comment ?</h2>
<div>Au départ, j\'ai commencé avec un double palan de RSX, mais c\'était lourd, et ça tapait contre le mat ... et comme je ne règle qu\'à l\'arrêt (lors des virements), peu d\'intérêt d\'avoir une telle usine à gaz. Grâce à Nicolas Huguet, on a fait un palan idéal pour le windfoil, qui fait moins de 160g. Il est conçu autour de 3 poulies</div>
<ul>
<li>le <a href="/windfoil/u33937s1-harken-taquet-micro-block-violon-harken.html">taquet violon micro block Harken</a></li>
<li>une <a href="/windfoil/u33938s1-harken-poulie-carbo-t2-29mm-harken.html">poulie carbo bloc Harken</a> (ultra légère, ne peux pas abîmer le mat ou la voile)</li>
<li>une <a href="/windfoil/u33931s1-selden-poulie-forte-charge-selden.html">poulie forte charge selden</a> (capable de travailler sans risque à 400kg, en gardant toujours aussi peu de friction)</li>
</ul>
<p></p>
<p><img src="/storage/photos/1/legacy/b4f7957169487d40e26ebfd65df577d5.jpg" /><img src="/storage/photos/1/legacy/6c4bc7762247230fd252a61f18d88a11.jpg" /><img src="/storage/photos/1/legacy/3b17930ec455b511af372dfbb3f4aaaf.jpg" /></p>
<p>D\'un côté, il se fixe sur le mat avec un noeud de cabestan (juste en dessous du wishbone). De l\'autre côté, on retrouve le bout de la rallonge</p>
<p><img src="/storage/photos/1/legacy/8d5a3950260946fd7e53630c0a575eb3.jpg" /></p>
<p><img src="/storage/photos/1/legacy/75dcc13d10bbfc19f2dc6e07e7049a1d.jpg" /></p>
<p>Pour fabriquer le palan vous même, il suffit de savoir réaliser une manille textile, un noeud de chaise et une épissure. Tout ceci est expliqué en détail sur le net, avec forces vidéos à l\'appui. Avec le shéma ci dessus, vous trouverez où réaliser ces différents noeuds dans le montage. Si vous commandez un <a href="/windfoil/u33941s1-harken-kit-palan-guindant-pro-harken.html">kit</a>, vous recevrez tous les élements pour le réaliser (différents bouts prédécoupés aux bonnes longueurs, et poulies). Il vous suffira donc de réaliser les noeuds pour avoir votre palan. Il faut compter entre 1h et 2h de travail pour faire ceci sans être un expert des noeuds.</p>
<div>Pour gréer, on fait comme d\'habitude avec le bout de rallonge. En étarquant, la poulie forte charge vient s\'appuyer contre la dernière poulie de la rallonge. Ensuite, on passe le palan par d\'ouverture de la protection de pied de mat (la même où on passe le tire veille), et on vient fixer le haut de palan sous le wishbone avec un joli noeud de cabestan (celui-là, je ne l\'avais plus fait depuis un bail). Après ça, on peut étarquer la voile avec 2 doigts !</div>
<h2>Se procurer les pièces</h2>
<p>En voulant fabriquer ce palan, je me suis rendu compte qu\'il est difficile de trouver tous les éléments au même endroit ... et certaines pièces sont rarement disponibles. J\'ai donc décidé de les proposer à la vente sur notre site.</p>
<p>Vous pouvez les acheter au détail (<a href="/windfoil/u33931s1-selden-poulie-forte-charge-selden.html">Poulie forte charge</a>, <a href="/harken-poulie-carbo-t2-29mm.html">Poulie carbo T2</a>, <a href="/harken-taquet-micro-block-violon.html">Taquet Harken</a>, <a href="/side-on-bout-spectra-formuline.html">Formuline</a>, <a href="/side-on-tresse-dynema-pro-pur.html">Ligne spectra</a>, <a href="/side-on-bout-polyester-4mm-350kg.html">bout polyseter</a>), ou en kit tout fait (<a href="/windfoil/u33941s1-harken-kit-palan-guindant-pro-harken.html">version pro</a>, <a href="/windfoil/u33940s1-harken-kit-palan-guindant-basic-harken.html">version eco</a>), ou encore<a href="/windfoil/u33942s1-harken-palan-guindant-pro-harken.html"> tout monté</a> (je vous fabrique le palan avec la manille textile, les épissures etc. ... prêt à l\'emploi)</p>
<p>Ah oui, un autre détail : dans l\'idéal pour que ça fonctionne bien, il faut une rallonge à 3 poulies (et non 2 seulement). Pour ceci, il existe la rallonge RSX, mais aussi la <a href="/windsurf/u35178s1-xo-sail-rallonge-u-pin-sdm-xo-sail-2019.html">rallonge Exocet U-PIN</a> qui offre un super rapport qualité prix (bloc poulie inox, bague articulée, tube épais, tout métallique, bouton affleurant pour 85€)</p>
<h2>En video</h2>
<p><iframe src="https://www.youtube.com/embed/d9A0ismLTdA?rel=0&amp;showinfo=0" width="853" height="480" frameborder="0" allowfullscreen=""></iframe></p>
',
'status' => 'Published',
'views' => 3278,
'last_ip' => NULL,
'created_at' => '2022-02-13 08:19:02',
'updated_at' => '2022-02-13 08:19:02',
),
16 => 
array (
'id' => 33,
'user_id' => 1,
'post_categories_id' => 2,
'title' => 'Je débute, acte 7',
'description' => 'Nous suivons depuis des mois notre super débutant Hervé, qui n\'est plus débutant du tout ! ',
'body' => '<p>Nous suivons depuis des mois notre super débutant Hervé, qui n\'est plus débutant du tout ! Voici son dernier message, qui montre les progrès en windfoil en moins d\'une année de pratique  :
</p><p>"
</p><p>A toute l\'équipe, bonjour !
</p><p>Comme je vous l\'avais promis, voici le "report" sur la découverte de cet ensemble d\'exception F1-F4 !
</p><p>Je vous souhaite bonne réception.
</p><p>Voici le contenu :
</p><p><b>Une association réussie ; le flotteur Elix F1 avec le foil Neilpryde RS:Flight F4 carbone !</b>
</p><p>Voilà, depuis que je m\'impatientais, c\'est fait ! Pour ceux qui n\'ont pas suivi cette affaire depuis le début, je rappelle qu\'après une progression sur combo Tiny-Viny de Horue (120 heures de vol, achetée début 2017), j\'ai attaqué sur le foil RS-Flight carbone F1 de Pryde début août de cette année.
</p><p>Les vols en F4 ont été conduits sur un flotteur Elix « compatible foil » ; il s\'agissait du R1X-XL. Ce fut un réel plaisir de découvrir ainsi le RS:Flight F4 ; un foil dont il devient superflu de faire les éloges !
</p><p>Mais la fièvre monte et finalement le miracle se produit quand je découvre le Elix F1X fin septembre...
</p><p>L\'anticyclone règne en maître et je piétine d\'impatience ; je connais le foil et je n\'ai donc aucune appréhension. Du coup, je peaufine les réglages et voilà donc les éléments de trim du flotteur F1, du foil F4 et les éléments du gréement et du pilote pour la découverte de ce tandem détonant :
</p><ul>
<li>straps en position avant max,</li>
<li>pdm à 130,</li>
<li>aile lightwind,</li>
<li>incidence zéro,</li>
<li>voile Point7 Ac-X 7,0 m² (race – no cam),</li>
<li>réglage de l\'amure comme recommandé par le constructeur (indicateur de trim sur la voile),</li>
<li>point d\'écoute globalement proche du « point zéro » (palan de réglage recommandé),</li>
<li>mât rdm recommandé pour une plus grande finesse aérodynamique en particulier aux vitesses de vol atteintes,</li>
<li>wish AL360 RTE &amp; lignes de harnais réglables Nautix Clam-Cleat ou fixes single 22\'\',</li>
<li>vent ; globalement dans la bande 10-20 kts,</li>
<li>pilote : 75 kg.</li>
</ul><p>Le rush vidéo joint rend compte de la griserie que procure ce tandem de choc ; tout n\'est que plaisir et performance dans une harmonie parfaite !
</p><p>Moyennant les réglages mentionnés, le flotteur et le foil forment un ensemble homogène au décollage progressif et doux pour offrir « naturellement » un vol tendu, stable vers une quinzaine de nœuds. Le speedo ne tarde pas alors à grimper vers la vingtaine de kts... Il suffit de descendre légèrement dans le harnais, tendre les bras et les jambes de manière à exercer un rappel conséquent et le vol se stabilise autour de la vingtaine de nœuds... Un début de légère contre-gîte fait même partie du paquet cadeau !
</p><p>Ce flotteur F1 présente une assiette très proche de l\'horizontale ; laissant libre manœuvre au pilote pour effectuer de légères corrections, sans aucune contrainte. Le vol est donc « débridé » et totalement intuitif ; compacité et petit volume sur l\'avant y sont pour beaucoup. Les fameuses touchettes » qui ne manquent pas de se produire sont très légères (merci aux cut-out) prononcés ; du coup le speedo n\'accuse rien de bien négatif.
</p><p>Voilà mes premières conclusions après cinq sessions majeures, parfois dans des vents très irréguliers mais également sur la houle en plein estuaire ; une situation littéralement jouissive avec ce tandem qui surfe de plaisir...
</p><p>En conclusion, d\'abord un grand merci à Criss, Eric et Mike qui m\'ont conseillé avec professionnalisme sur la base d\'une expérience irremplaçable et oh combien précieuse ! Donc, oui, n\'hésitez pas devant le couple F1-F4, c\'est de la bombe... Je suis dans les starting-blocs pour tester l\'aile de vitesse ; ce sera l\'occasion de reprendre contact avec vous.
</p><p>Bons vols et faites de beaux rêves !
</p><p>Hervé
</p><p><br>
</p><p>"
</p><iframe width="640" height="360" src="https://www.youtube.com/embed/vMdi5lhoK3o?rel=0" frameborder="0" allowfullscreen=""></iframe>

',
'status' => 'Published',
'views' => 2251,
'last_ip' => NULL,
'created_at' => '2017-10-18 18:05:14',
'updated_at' => '2017-10-18 18:05:14',
),
17 => 
array (
'id' => 34,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2018 - Avril - ​Inauguration de la base de vitesse AGASC',
'description' => 'Inauguration de la base de vitesse de la côte d’azur, gérée par l’AGASC à St Laurent du var. ',
'body' => '<p>Ce samedi 14 avait lieu l’inauguration de la base de vitesse de la côte d’azur. Cette dernière est gérée par l’AGASC à St Laurent du var. A la barre de tout ceci, Steve Laubaney, avec le financement des sociétés Marbre &amp; Déco (Benoit Marginac) et GlissAttitude (Eric Collard).<br></p><p><img src="/storage/photos/1/legacy/b05edea3b6ca226109e0388197ab2ed0.jpg"></p><p>Le principe de cette base de vitesse est le même qu’à Brest : après avoir payé 15€ pour la saison (paiement par paypal sur le site de la base de vitesse), vous pouvez uploader vos traces GPS (format GPX) afin que le logiciel calcul votre meilleur run sur 500M et établisse un classement par catégorie. A l’issue de la saison, une remise des prix aura lieu.</p><p>Pour qu’ils soient validés, les runs doivent être réalisé entre Monaco et le cap d’Antibes, en excluant les zones interdites (proximité immédiate de la piste de l’aéroport de Nice, Zone des 300m etc.)</p><p><img src="/storage/photos/1/legacy/9c5c87977310e1a0894d7d5a61c9130b.jpg"></p><p>Cette inauguration a été jointe à une journée porte ouverte / test windfoil que nous avons animé avec l’AGASC. Avec plus de 5 flotteurs dédiés et 10 foils , il y en avait pour tous les gouts. Les conditions de navigation étaient intéressantes mais exigentes avec entre 7 et 11 knt de vent, et 4 knt de courant latéral . Effectivement, le Var qui avait grossi avec les pluies des derniers jours déversait des flots d’eau terreuse à quelques degrés, le tout accompagné de bois et autres gros branchage.</p><p>Dans ces conditions, nous avons pu tirer notre épingle du jeu avec les foils, grâce à leur superbe aptitude au près.</p><p><img src="/storage/photos/1/legacy/76e86680f4bcd2b5f61a12bf865eaedc.jpg"></p><p>C\'était aussi l\'occasion de naviguer avec une figure du windfoil en terme de perf : Nicolas Goyard. Très impressionnant et accessible !</p><p><img src="/storage/photos/1/legacy/95440d04b180c1fe069c6e8920552b03.jpg"></p><p>Cette journée a été également l’occasion pour nous de tester quelques nouveautés sur lesquelles nous reviendrons très vite : la voile Phantom IRIS et le foil Loke LK1</p><p><img src="/storage/photos/1/legacy/d4e5596498dcd400ed7036ec899dba5f.jpg"></p><p><img src="/storage/photos/1/legacy/d5ba1b60f097434c8238742d8e36ba4e.jpg"><br></p><p>Nous avons même pu tester une nouvelle expérience : les risées version A380 ... puissant !</p><p><img src="/storage/photos/1/legacy/ab50f69a4fc2d445c7b2fbdd77bf5e01.jpg"></p><p>Avec une 15aine de pratiquants, dont certains étaient venus de Marseille, et un accueil de premier choix à l\'AGASC, la journée a été un joli moment de partage à la fois sur l’eau et sur terre. Compte tenu du potentiel du spot (très plat par vent d’est), nous avons promis de revenir …</p><p>Un grand merci au club pour l\'accueil, et à Christian pour les photos :)</p>

',
'status' => 'Published',
'views' => 722,
'last_ip' => NULL,
'created_at' => '2018-04-16 00:34:29',
'updated_at' => '2018-04-16 00:34:29',
),
18 => 
array (
'id' => 35,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2018 - Mars - ​Première manche du championnat régional à Toulon',
'description' => 'Cette première régate régionale de Windfoil avait valeur de test. ',
'body' => '<p>Cette première régate régionale de Windfoil avait valeur de test. La FFV étant en train de structurer cette nouvelle pratique, les premières régates sont très importantes pour envisager la suite.<br></p><p>Nous étions 23 sur la ligne de départ, avec une navigation en flotte. Malgré un vent capricieux (athmatique au début, puis musclé sur la fin), nous avons pu boucler 6 manches. Nous avions apporté pas mal de matériel, ce qui a permis à certains de tester en situation ;)</p><p><img src="/storage/photos/1/legacy/db7e2ddda792ee64ff14757e9e28fbd9.jpg"></p><p>On peut dire que tout cela a animé les discussions en attendant le vent</p><p><img src="/storage/photos/1/legacy/eded78c41ad8852525d847f26daf47fd.jpg"></p><p><img src="/storage/photos/1/legacy/c1e22cd048ae46cc84ff81139d5f1572.jpg"></p><p>Le YCT avait aligné toute son équipe de jeunes foileurs, grâce au 5 ou 6 packs acquis par le club</p><p><img src="/storage/photos/1/legacy/94ea91d6fbb46abe56669593441cb46d.jpg"></p><p>Le comité de course nous a proposé 3 parcours originaux, et seuls deux ont été mis en oeuvre au cours de l’après midi. Pour des non initiés comme nous, la multiplicité des parcours et la procédure de départ n\'étaient pas partis pour simplifier les choses. Heureusement, Renaud affiche à chaque fois la forme du parcours actif sur la grande ardoise du bateau comité. Cette excellente initiative a permis à tout le monde, quelque soit son niveau et son habitude, de réaliser le parcours sans erreur.</p><p><img src="/storage/photos/1/legacy/fd1b44dc9e06134fa478dceb798d3e90.jpg"></p><p>Le premier parcours, réalisé dans un vent très faible, était travers et down-wind. C’était assez adapté aux conditions très légères.</p><p>Le 2eme parcours comportait 2 bords travers, 2 remontées au vent accessibles sans matos ou compétence spécifique, et un bord down-wind. Ce 2e parcours était intéressant car ludique et accessible. En tant que pratiquant non compétiteur et peu entrainé, j’aurai juste vu des bords plus longs pour pouvoir se reposer plus longtemps entre 2 jibes (+ pumping pour re-décoller).</p><p><img src="/storage/photos/1/legacy/e0e35ac6c4da3e2379956467cfd287a4.jpg"></p><p>Dans les 2 parcours, le premier jibe se faisait autour de 2 bouées espacées de 50m dans l’axe du vent. Cette solution apportait un vrai plus en terme de sécurité car cela évitait un aglutinement à la bouée. Sur la dernière manche, courue dans une bonne 20aine de knt, on a vu les limites lors des boites au jibe … et nous aurions peut être pu écarter encore plus ces 2 bouées. </p><p><img src="/storage/photos/1/legacy/232050e821d1e5fadb54b16f92e55dc2.jpg"></p><p>Pour cette première régate, nous avions une 10aine de jeunes de moins de 21 ans, et une 10aine d’adultes, avec 5 filles. Cette mixité d’âge et de niveau au sein de la même flotte apportait une vraie convivialité. En dehors des 3 coureurs semi-pro, complètement intouchables (Nicolas Goyard, Nicolas Huguet, Mathieu Bonnot), il y a eu une relative homogénéité de niveau sur les 2 catégories d’âges. Cela donnait encore plus d’intérêt à ce moment de partage car le classement évoluait à chaque manche en fonction des gamelles ou des choix de chacun. Au sein de cette flotte, vos 2 représentants de GlissAttitude non entrainés (Bastien et moi même, respectivement 6e et 5e au général)  ont pris un vrai plaisir mais si nous avons bien subit physiquement. Ceci dit, le test était intéressant pour apporter une vision de pur amateur sur des régates régionales qui ont justement vocation a accueillir des novices.</p><p><img src="/storage/photos/1/legacy/33adf149900378c377e4c847cbcefb60.jpg"></p><p> Le plus dur a été d’enchainer les manches sans repos à terre, avec à chaque fois des attentes de l’ordre de 20 mn … ou il faut rester sur l’eau en attendant la procédure de départ. Heureusement, nous avions un super bateau-bar-à-eau avec nos 2 barmans de choc en les personnes de troll et Thaïs !</p><p>Dans la catégorie -21, on retrouvait exclusivement des jeunes compétiteurs de club (dont 7 du YCT), qui nous ont bluffé par leur résistance physique ... preuve qu\'un entrainement régulier fait ses preuves.</p><p><img src="/storage/photos/1/legacy/6893ce1a2e4040c126ef3c4a7bc916a3.jpg"></p><p>En ce qui concerne la catégorie +21, le plateau était constitué de 3 semi-pro, de quelques compétiteurs réguliers (Franck, Florent , Jerôme et Olivia) et de 5 purs amateurs. Cette mixité est la vraie force de ces régates. L\'enjeu est de la préserver en attirant toujours plus de passionnés pour qui naviguer ensemble passe avant la course au classement ... en tout cas à ce niveau régional.</p><p><img src="/storage/photos/1/legacy/6d7ecad259688ba0799f392e6c1db437.jpg"></p><p>La journée s\'est terminée par un apéro réparateur, et une remise des prix au cours de laquelle  tous les -21 ont été récompensés.</p><p><img src="/storage/photos/1/legacy/70c78013a01dd4cbfa4aa5b04cfc66ef.jpg"></p><p><img src="/storage/photos/1/legacy/1ef1d6e090184a459e3d562340c875f5.jpg"></p><p><img src="/storage/photos/1/legacy/ff4597d09ecb7d2e16d24446666bf878.jpg"></p><p>Nous ne pouvons que motiver d’autres pratiquants amateurs à venir jouer avec nous la prochaine fois (ce sera à La Ciotat le 27 mai) car l’ambiance est réellement bon-enfant malgré le côté régate … et il faut que cela reste ainsi !</p><p>Si je devais faire un bilan constructif de cette régate, je donnerai 2 ou 3 pistes d’évolutions qui me paraissent aller dans le sens de l’ouverture à tous, sans que ce soit une critique d’aucune sorte car l\'organisation était au top :</p><ul>
<li>des bords plus longs pour espacer les manoeuvres et permettre aux non spécialistes de se reposer entre 2 jibes.</li>
<li>une ligne de départ plus oblique pour mieux étaler les pratiquants et permettre à tous d’avoir du vent frais (important dans le light)</li>
<li>des retours à terre plus fréquents pour permettre de se reposer (pour les moins entrainés)</li>
<li>une remise des prix séparant les coureurs aguerris des vrais amateurs afin que personne ne soit frustré</li></ul><p>Enfin, je ne pouvais pas terminer ce petit compte rendu sans remercier le YCT pour leur accueil 3 étoiles, Renaud pour la direction de course au top, et tous les participants pour leur présence souriante.</p>

',
'status' => 'Published',
'views' => 931,
'last_ip' => NULL,
'created_at' => '2018-04-16 00:52:55',
'updated_at' => '2018-04-16 00:52:55',
),
19 => 
array (
'id' => 36,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Expulser une vis cassée dans un insert',
'description' => 'on vous montre comment réparer une vis cassée dans un insert de foil ou d\'aileron',
'body' => '<p>Aujourd\'hui, on vous montre comment réparer une vis cassée dans un insert de foil ou d\'aileron. C\'est malheureusement quelque chose qui nous est arrivé au cours de nos journées de test, à force de monter et démonter des foils pour tester diverses combinaisons. Pour éviter ceci, bien s\'assurer que vos vis sont en bon état, et qu\'il n\'y a pas de désarmement entre les perçages de la planche et les trous du talon deep tuttle.</p><p>Sur cette première photo, on voit bien la vis cassée au raz du boitier</p><p><img src="/storage/photos/1/legacy/8161f688181dd5914831a024315bbdb9.jpg"><br></p><p>Bien caler le talon sur un plan de travail plat</p><p><img src="/storage/photos/1/legacy/9ef466760de5c4d17e91fc4df428532f.jpg"></p><p>Avec un forêt bien affûté, on va percer l\'insert</p><p><img src="/storage/photos/1/legacy/35b250eefc60b4021ac3e815c898cfed.jpg"><br></p><p>Pensez à refroidir régulièrement le forêt pour ne pas le détramper</p><p><img src="/storage/photos/1/legacy/a2e0ba29ea2c97f53658983b5d9bdc09.jpg"></p><p><img src="/storage/photos/1/legacy/35498ee9b916c4c7007c1210ae467769.jpg"></p><p>On enlève régulièrement la limaille d\'inox pour ne pas bloquer le foret</p><p><img src="/storage/photos/1/legacy/56699202441fa01a91f76af49f4de0db.jpg"></p><p>A la fin, le trou va sectionner la vis et permettre de retirer le tout</p><p><img src="/storage/photos/1/legacy/b5d02f1d3f16ead3f6f59b8c5f00b464.jpg"></p><p><br></p>

',
'status' => 'Published',
'views' => 1596,
'last_ip' => NULL,
'created_at' => '2022-02-16 08:19:02',
'updated_at' => '2022-02-16 08:19:02',
),
20 => 
array (
'id' => 37,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2018 - Mai - Championnat régional manche 2',
'description' => 'Pour cette 2e étape, même objectif : que tout le monde puisse se faire plaisir quelque soit son niveau',
'body' => '<h2>Petit compte rendu de cette 2e étape du championnat régional à La Ciotat</h2><p>Pour cette 2e étape, nous avons capitalisé sur les enseignements de la première épreuve avec le même objectif : que tout le monde puisse se faire plaisir quelque soit son niveau. C\'était d\'autant plus compliqué vu les conditions météo, mais finalement très bien réussi ... on est tous quand même rentrés à la maison bien vidé :)</p><p>Le très bonne nouvelle, c\'est que nous avions presque 40 inscrits, dont une bonne moitié de très jeunes coureurs !!! Très impressionnant pour une régate régionale. C\'est le signe que le foil est en plein essor , et qu\'il motive un paquet de monde. On a rarement voir jamais autant de participants sur une ligue en funboard ... C\'est aussi la preuve que l\'esprit de ces régates conviviales correspond parfaitement à ce que recherchent les pratiquants</p><p>Le vent à joué avec nos nerfs toute la journée, et au final on a eu toutes les conditions possibles : du 0 knt, du 25 knt houle de face, du 15 knt houle de travers, du super irrégulier ... bref pas facile à gérer avec beaucoup de changement de matériel pour tout le monde. Ce qui est sûr, c\'est que tout le monde a beaucoup appris, et nombreux ont repoussé leur limites, en particulier en terme de vent fort et de navigation dans la houle.</p><p>Au final, on a pu boucler 3 manches toutes très différentes. Il n\'y a quasiment eu aucun abandon, et le comité de course a tout fait pour que cela reste convivial autant dans les échanges entre participants, que dans le format de course. Certes ce sont toujours les mêmes qui sont devant, grace à leur talent, mais ce n\'est certainement pas le matos qui a fait la différence.</p><p>Le résultat est anecdotique car ce n\'est pas l\'enjeu principal de ce type d\'épreuve. Remercions juste les top coureurs qui sont venus nous faire rêver, tout en restant toujours ultra accessible et en jouant le jeux à 1000%. Mention spéciale à Nicolas Goyard qui se paye le luxe de remporter l\'épreuve avec un wagon d\'avance à chaque manche sur du matos 100% prêté (voiles gaastra phantom par Olivia, Foil AFS par moi même, flotteur RRD en pièce détachée) ... 1/3 du plateau était équipé plus pointu que lui, comme quoi ;).</p><p>Merci à tous les organisateurs, et rendez vous à tous pour la prochaine étape le 24 Juin à Embrun. Comme ce WE, on fera une journée test / entraînement le samedi, et la régate le dimanche.</p><p><img src="/storage/photos/1/legacy/85af62c5a796eea5739c79bdf7238157.jpg"></p><p><img src="/storage/photos/1/legacy/aa44e517010d5d500d14afdb4b8686bd.jpg"></p><p><img src="/storage/photos/1/legacy/2859b02cf27bdf3b241824e0001cc49a.jpg"></p><p><img src="/storage/photos/1/legacy/a800e89c9fa67aa0da8156ae2c1328d9.jpg"></p><p><img src="/storage/photos/1/legacy/f774bbd45410c0475a691cc314de1d25.jpg"><br></p><p><br></p><p><img src="/storage/photos/1/legacy/fadb727711de6930a26241eb776f5a7f.jpg"></p><p><img src="/storage/photos/1/legacy/4926680da5c25d0f923362891195220d.jpg"></p><p><img src="/storage/photos/1/legacy/d9fa3a7f0d5391c847882f4cd8c83f68.jpg"></p><p><img src="/storage/photos/1/legacy/3ab7fa747b0b7eedd0525b08749daa05.jpg"></p><p><img src="/storage/photos/1/legacy/b67ac5d574b9426c997078460670f63d.jpg"></p><p><img src="/storage/photos/1/legacy/1aafd057918984418b1274c0190b8946.jpg"></p><p><img src="/storage/photos/1/legacy/1e7c1be9e8af3f612e81110a00bba9fd.jpg"></p><p>Avis de course</p><p>*****************</p><p>Le 27 Mai aura lieu la 2e manche du championnat régional Windfoil au Neptune Club de La Ciotat. Après la grande réussite de l\'édition de Toulon, on espère d\'aussi belle conditions pour que la fête soit là :)</p><p>Pour rappel, le principe est une régate ouverte à tous, avec un format qui permet à tout le monde de se faire plaisir. La notion de performance passe en second plan : l\'objectif est avant tout de partager un bon moment tous ensemble sur l\'eau. Volontairement, les parcours sont adaptés pour donner très peu (voir pas) d\'avantage à ceux qui voudraient venir équipé de matos de pointe ultra puissant.</p><p>Seule contrainte, liée à la sécurité : license, casque et gilet obligatoires. Possibilité de prendre une licence journalière sur place (14€ + certificat médical).</p><p>Le tarif de l\'inscription est de 10€ à régler sur place (chèque ou espèces)</p><p>La veille, on organise une après midi navigation / test / entraînement pour tous, et un apéro / pizza en fin d\'après midi. On vous attend tous à La Ciotat.</p><p>De façon pratique, on s\'organise pour que vous puissiez descendre en voiture dans le club pour décharger le matériel.</p><p><img src="/storage/photos/1/legacy/a82ec3fff8188386c097962a6cfd9eef.png"></p><p><br></p>

',
'status' => 'Published',
'views' => 1021,
'last_ip' => NULL,
'created_at' => '2018-05-18 11:26:43',
'updated_at' => '2018-05-18 11:26:43',
),
21 => 
array (
'id' => 38,
'user_id' => 1,
'post_categories_id' => 6,
'title' => 'Le calage du stab',
'description' => 'Comment le réglage du stabilisateur influe sur la puissance du foil et son complément en général',
'body' => '<p>Aujourd\'hui, on &eacute;tudie la m&eacute;canique du fonctionnement d\'un foil, et comment le r&eacute;glage du stabilisateur influe sur la puissance du foil et son compl&eacute;ment en g&eacute;n&eacute;ral</p>
<p><em><strong>IMPORTANT : si vous d&eacute;butez en foil, ne vous emb&ecirc;tez pas avec ces r&eacute;glages !! Naviguez jusqu\'&agrave; avoir suffisamment de sensations pour vous int&eacute;resser &agrave; ces subtilit&eacute;s.</strong></em></p>
<p>&nbsp;</p>
<p>Avant de parler de calage de stab, il est n&eacute;cessaire de comprendre la m&eacute;canique de base du foil.</p>
<h2>Portance d\'un profil</h2>
<p>On rappelle qu\'un profil d\'aile se d&eacute;pla&ccedil;ant dans un fluide g&eacute;n&egrave;re une d&eacute;pression sur son extrados, et cr&eacute;e une force vers le haut que l\'on appelle "portance" (l\'aile est aspir&eacute;e par la d&eacute;pression)</p>
<p><img src="/storage/photos/1/legacy/8e7b6edf53f5887802dd67e89436a59d.jpg" /></p>
<p>Plus l\'aile est cabr&eacute;e par rapport &agrave; l\'&eacute;coulement (on parle d\'incidence qui augmente), plus la portance devient forte ... jusqu\'au d&eacute;crochage. Ci dessous, le graphique montre l\'&eacute;volution de la portance (Cl = coefficient de portance) par rapport &agrave; l\'angle d\'incidence. La portance augmente aussi avec la vitesse de l\'&eacute;coulement.</p>
<p><img src="/storage/photos/1/legacy/959fce787cda9dffd7e7284755a8d389.png" /></p>
<h2>M&eacute;canique du foil</h2>
<p>Lorsque l\'on navigue avec un Windfoil conventionnel (1 aile avant et 1 stab), l\'ensemble rider, gr&eacute;ement, board est maintenu en l\'air, en &eacute;quilibre sur le foil. Si on fait une analyse simple des forces sur le plan longitudinal, on va trouver</p>
<ul>
<li>le poids, proportionnel &agrave; la masse, dirig&eacute;e vers le bas</li>
<li>la portance du foil, dirig&eacute;e vers le haut, d&eacute;pendant de la vitesse et de l\'incidence de l\'aile</li>
<li>la d&eacute;portance du stab, dirig&eacute;e vers le bas, d&eacute;pendant de la vitesse et de l\'incidence du stab</li>
<li>la pouss&eacute;e de la voile</li>
<li>les train&eacute;es a&eacute;rodynamique et hydrodynamique</li>
</ul>
<p><img src="/storage/photos/1/legacy/a306a3e8daf530fa8e028ee2366866af.jpg" /></p>
<p>Si on s\'int&eacute;resse &agrave; la composante de ces forces sur l\'axe vertical, on comprend vite que l\'&eacute;quilibre de l\'ensemble repose principalement sur l\'&eacute;quilibre du poids et de la pouss&eacute;e verticale du foil.</p>
<p>Compte tenu du point d\'application de ces 2 forces, on remarque imm&eacute;diatement que si elles &eacute;taient seules, la planche piquerait du nez. On a donc besoin d\'une 3eme force qui compense le moment de rotation induit par le poids et la portance de l\'aile. C\'est justement le premier r&ocirc;le du stab : assurer l\'&eacute;quilibre de l\'ensemble.</p>
<p><img src="/storage/photos/1/legacy/3c3ae661266a22fff39a2569bc21417c.jpg" /></p>
<p>Si on regarde le foil de plus pr&egrave;s, on constate effectivement que l\'aile principale (front wing) a un profil porteur (extrados situ&eacute; vers le haut) avec une incidence nulle ou positive, alors que le stabilisateur (rear wing) a un profil d&eacute;porteur (extrados situ&eacute; vers le bas), avec une incidence n&eacute;gative. Ce dernier ne participe donc absolument pas &agrave; la portance du foil, mais uniquement &agrave; l\'&eacute;quilibre de l\'ensemble !</p>
<p><img src="/storage/photos/1/legacy/f1d1b33bde7fbd188d63b38aca30a306.jpg" /></p>
<p>La figure ci dessus utilise des angles volontairement exag&eacute;r&eacute;s pour faciliter la compr&eacute;hension. Dans les faits, l\'angle d\'incidence de l\'aile principale est en g&eacute;n&eacute;ral nul, et celui de stab de l\'ordre de -4&deg;.</p>
<h2>Stabilit&eacute; de l\'&eacute;quilibre</h2>
<p>Un syst&egrave;me m&eacute;canique est dit "stable" si, lorsque l\'on s\'&eacute;carte de la position d\'&eacute;quilibre, le syst&egrave;me tend &agrave; revenir &agrave; sa position d\'&eacute;quilibre. Imaginons le test avec un foil conventionnel.</p>
<p><img src="/storage/photos/1/legacy/301d9729bafd72b2b3eb5ed2d31f720e.jpg" /></p>
<p>Si on pousse le stab vers la haut (figure 2) &gt; son incidence n&eacute;gative augmente &gt; sa pouss&eacute;e vers le bas augmente &gt; cela a tendance &agrave; le ramener vers sa position initiale (figure 1)</p>
<p>Si on pousse le stab vers la bas (figure 3) &gt; son incidence n&eacute;gative diminue &gt; sa pouss&eacute;e vers le bas diminue &gt; le moment induit par le poids qui s\'applique en avant de la pouss&eacute;e de l\'aile tend &agrave; faire piquer le foil, donc &agrave; faire remonter le stab vers sa position initiale (figure 1)</p>
<p>L\'&eacute;quilibre est donc bien stable ... et tant mieux car sans cela ce serait in-navigable !</p>
<h2>R&eacute;gler l\'incidence du stab</h2>
<p>Maintenant que vous avez compris comment fonctionne votre foil, voyons comment r&eacute;gler son stab.</p>
<p>Si on part du principe que l\'ensemble est con&ccedil;u pour un &eacute;quilibre stable (figure 1 ci dessous), analysons ce qui se passe si on modifie le r&eacute;glage du stab, en conservant tous les autres param&egrave;tres fixes (m&ecirc;me vitesse, m&ecirc;me incidence de l\'aile avant).</p>
<p><img src="/storage/photos/1/legacy/dc08163b89e3c094daa0623aa043b19a.jpg" /></p>
<h4>Augmenter la portance</h4>
<p>Augmentons l\'incidence n&eacute;gative du stab en relevant le bord de fuite (figure 2) : on rend le tab encore plus piqueur. Dans ce cas, la force exerc&eacute;e par le foil vers le bas va augmenter. En cons&eacute;quence, l\'&eacute;quilibre va &ecirc;tre l&eacute;g&egrave;rement perturb&eacute;, et le fuselage va se cabrer l&eacute;g&egrave;rement. Ce faisant, on va augmenter l\'incidence positive de l\'aile avant, donc sa portance.</p>
<p><strong><span style="color: #c0504d;">En rendant le stab plus piqueur, on augmente la portance du foil</span></strong>. C\'est un r&eacute;glage qui peut &ecirc;tre int&eacute;ressant dans des conditions de vent tr&egrave;s l&eacute;ger, o&ugrave; on a du mal &agrave; rester en l\'air ... ou pour am&eacute;liorer les performances au pr&egrave;s.</p>
<h4>Diminuer la portance</h4>
<p>Diminuons l\'incidence n&eacute;gative du stab en baissant le bord de fuite (ou on remontant le bord d\'attaque) : on le rend moins piqueur. Dans ce cas, la force exerc&eacute;e par le foil vers le bas va diminuer. En cons&eacute;quence, l\'&eacute;quilibre va &ecirc;tre l&eacute;g&egrave;rement perturb&eacute;, et le fuselage va piquer du nez l&eacute;g&egrave;rement. Ce faisant, on va diminuer l\'incidence de l\'aile, donc sa portance.</p>
<p><span style="color: #c0504d;"><strong>En rendant le stab moins piqueur, on diminue la portance du foil</strong></span>. C\'est un r&eacute;glage qui peut &ecirc;tre int&eacute;ressant dans des conditions de vent tr&egrave;s fort o&ugrave; on a du mal &agrave; g&eacute;rer la puissance de l\'aile avant (sur-pression sous le pied avant) ... ou pour diminuer la train&eacute;e des ailes.</p>
<h4>M&eacute;thode de r&eacute;glage</h4>
<p>Vous avez donc compris qu\'en modifiant l\'incidence du stab sur le fuselage, on rend le foil plus ou moins puissant. Suivant les foils, ce r&eacute;glage peut se faire</p>
<p>- avec une vis de r&eacute;glage comme sur le NeilPryde RS:Flight F4</p>
<p><img src="/storage/photos/1/legacy/2a4ef7d81f098b6ce4111188cb427370.png" /></p>
<p>- avec des cales de r&eacute;glage que l\'on interpose entre le stab et le fuselage, comme chez Alpinefoil</p>
<p><img src="/storage/photos/1/legacy/2fc8850de772068c02485e0657353825.jpg" /></p>
<p>- avec des rondelles, comme sur le Neilpryde RS:Flight AL</p>
<p><img src="/storage/photos/1/legacy/26e2a2bf927787e8f57bb73b7ad35f5e.png" /></p>
<p>- en d&eacute;pla&ccedil;ant le stab sur un berceau arrondi, guid&eacute; par des trous oblongs, comme chez Horue et Taaroa</p>
<p><img src="/storage/photos/1/legacy/8f16619ce5c167af958ecdc1014d8f79.jpg" /></p>
<p><strong><span style="color: #c0504d;">Attention : ne retenez pas b&ecirc;tement qu\'il faut mettre une rondelle &agrave; l\'avant pour augmenter la portance et vis versa. Cela est vrai si le stab est fix&eacute; sous le fuselage, mais c\'est le contraire si il est fix&eacute; au dessus. Il est donc beaucoup plus pertinent de comprendre comment cela fonctionne pour ne pas se tromper. Ce post est fait pour cela.</span></strong></p>
<h2>Int&eacute;r&ecirc;t du r&eacute;glage de stab</h2>
<p>Je ne rentrerai pas ici en d&eacute;tail su toutes les cons&eacute;quences du r&eacute;glage de stab. Retenez simplement que le r&eacute;glage de stab permet d\'agir sur l\'incidence de l\'aile avant et donc</p>
<ul>
<li>modifie la puissance du foil</li>
<li>modifie la train&eacute;e du foil (plus il a de portance, plus il traine de l\'eau)</li>
<li>modifie les capacit&eacute;s au cap (plus de foil est puissant, plus il remonte au vent)</li>
<li>modifie la vivacit&eacute; du foil</li>
</ul>',
'status' => 'Published',
'views' => 17474,
'last_ip' => NULL,
'created_at' => '2018-06-04 10:45:15',
'updated_at' => '2022-02-19 20:57:25',
),
22 => 
array (
'id' => 39,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2018 - Semaine affoilante Frejus',
'description' => 'Pour la première fois, la semaine affoilante a posé ses bagages dans le Sud de la France à Port Frejus.',
'body' => '<p>Pour la première fois cette année, la semaine affoilante a posé ses bagages dans le Sud de la France à Port Frejus. Nous y étions pour les 2 premiers jours de cette manifestation internationale de foil multi-support.</p><p><img src="/storage/photos/1/legacy/e0a79b2e0a56e5c359da4f1d30d5fd71.jpg"></p><p>Le concept consiste à réunir les marques et les compétiteurs autour de la passion commune du foil dans toutes ses diversités (bateaux, kite, windsurf, etc.). En dehors des stands de marques, des échanges autour du foil, et des tests de matos, la semaine affoilante est aussi l\'occasion de se mesurer au chrono sur l\'eau, sur un run de 500M à 120° du vent, avec un chronométrage officiel à base de trackers GPS.</p><p><img src="/storage/photos/1/legacy/c8eeaa5592e8f23590c9ddd9edc9f7a1.jpg"></p><p><br></p><h2>Georacing</h2><p>Cette semaine affoilante était pour nous l\'occasion de découvrir le système georacing, qui permet de suivre en temps réel en en replay les courses sur l\'eau. Le système est ultra efficace et très visuel. Il est à retenir pour l\'organisation de course car il permet de suivre précisément à terre ce qu\'il se passe sur l\'eau</p><p><img src="/storage/photos/1/legacy/9613bad6d20ad26fb151c49d6390fafc.jpg"></p><p>Il vous est d\'ailleurs possible de suivre en replay tous les run sur <a href="http://www.georacing.fr/evenements/?SEMAINE+AFFOILANTE+2018/id/101730">http://www.georacing.fr/evenements/?SEMAINE+AFFOIL...</a></p><p><img src="/storage/photos/1/legacy/503109f3bc8a4a3cb85c636ea99b0abd.jpg"></p><h2>Les exposants</h2><p>Les 2 plus beaux stands étaient sans doute ceux de Horue et AlpineFoil</p><p><img src="/storage/photos/1/legacy/305431cf232e656769b7560019612e06.jpg"></p><p><img src="/storage/photos/1/legacy/6670a784b4617536a6f3e053e1cfba33.jpg"></p><p><img src="/storage/photos/1/legacy/f54e53a3950dd2aa82e85af1f5c6c78f.jpg"></p><p><img src="/storage/photos/1/legacy/c4b9d8dad63d7c392412a314ff1e65b6.jpg"></p><p><img src="/storage/photos/1/legacy/3f28b1eac01dcb99adedfa072ae8d37b.jpg"></p><p><img src="/storage/photos/1/legacy/83fa6f9d8ab6560a810e891802191c6a.jpg"><br></p><h2>La course jour 1</h2><p>La première journée a vu s\'installer toutes les marques présentes (Alpinefoil, Storm, Horue, AFS, Ketos, France catamaran, Tarroa, Extrem foil). Après le briefing, tous les coureurs sont partis sur l\'eau pour une séance de chronos dans un vent oscillant entre 6 et 8 knt.</p><p><img src="/storage/photos/1/legacy/76b6dc8d5e5391b163ee08398cecae01.jpg"></p><p><br></p><p>Dans ces conditions marginales, les kitefoil ont littéralement écrasé les autres supports avec des vitesses incroyables de plus de 30knt pour les meilleurs (Axel Mazella en tête).</p><p>Côte windfoil, le plus dur était de décoller sur un plan d\'eau déjà très clapoteux. Nous étions tous en 7.8m2. Nous utilisions le venturi créé par la proue d\'un navire de croisière pour décoller. Il fallait ensuite pomper jusqu\'à la porte d\'entrée du run, puis tenir en l\'air sur 500M dans un run très abattu où on déventait rapidement la voile. A ce jeu là, nous avons plafonné autour des 18-19knt, ce qui correspondait à un run de 55s environ. Votre serviteur n\'ayant pas compris qu\'il fallait passer au dessus de la bouée d\'entrée du run (probablement un peu tête en l\'air lors du briefing) , j\'ai hérité d\'un magnifique temps de 7mn :)))</p><p><img src="/storage/photos/1/legacy/2354bb47d2210590c4918212589f9565.jpg"></p><p>Le vent étant assez vite tombé, on a rapidement troqué le foil contre la bière et la soupe de champagne (merci port frejus).</p><p><img src="/storage/photos/1/legacy/01fc2d92b2e2d3a11f64500c1f4f9c47.jpg"></p><h2>La course jour 2</h2><p>Cette fois, le vent étant annoncé plus fort que la veille, nous étions tous sur-motivés. Malheureusement, eole a décidé de jouer avec nos nerfs, et nous n\'avons que pu observer les kites découper le spot dans 5 à 6 knt de vent une bonne partie de la journée. </p><p>A 16h, le vent est monté à 8-9 knt secteur surd avec probablement un instant autour de 10knt sur le parcours. Tout le monde en a profité pour faire quelques runs dans un plan d\'eau déjà bien défoncé ... qu\'est ce que ce doit être avec 12-15 knt !!!!</p><p>Les kites ont assez peu améliorés les temps de la veille (1s sur 500m), et on retrouve aux 2 premières places Axel Mazella et Martin Turbin (Taaroa).</p><p><img src="/storage/photos/1/legacy/145f9949c056a5cf14ab3e46dd9b203a.jpg"></p><p>Côté windfoil, Nicolas Huguet est arrivé avec sa formula et sa 9m pour nous donner une leçon.  Dans ces conditions, et sur un bord très abattu, le gros matériel de PWA fait clairement la différence avec un run de 42 secondes contre 49" pour Benoit et 50" pour votre serviteur (nous étions tous les autres en 7.8). </p><p><img src="/storage/photos/1/legacy/4e11fcac693033e531bf1664dcde4763.jpg"></p><p>La manifestation va se prolonger encore sur 2 jours, en espérant des conditions de vent un peu plus soutenues.</p>

',
'status' => 'Published',
'views' => 360,
'last_ip' => NULL,
'created_at' => '2018-06-15 22:22:24',
'updated_at' => '2018-06-15 22:22:24',
),
23 => 
array (
'id' => 40,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2018 - Juin - Championnat régional manche 3',
'description' => 'Ce week-end du 23/24 Juin a eu lieu la 3e et dernière manche sur championnat régional de windfoil au CNA',
'body' => '<p>Ce week-end du 23/24 Juin a eu lieu la 3e et dernière manche sur championnat régional de windfoil pour la saison 2017-2018.
</p><p>Elle s\'est déroulée sur la magnifique spot d\'Embrun sur le lac de Serre-Ponçon, au sein du site du Club Nautique Alpin. La très bonne nouvelle, c\'est que le lac est à -1m sous la côte maxi ... autant dire qu\'il est plein à raz bord. Incroyable pour ceux qui l\'ont vu il y a encore 2 mois ! Et du coup, avec l\'aménagement de la grande plage du CNA, aucun risque d\'avoir les pieds dans la boue. Au contraire, ces aménagements ont permis de faire très facilement une pause entre les manches. Qui plus est, la relative petite taille du plan d\'eau permettait aux spectateurs de suivre facilement les courses, tranquillement installé à l\'ombre des arbres.
</p><p><img src="/storage/photos/1/legacy/ac815cff4320107cd0b376d0726b3793.jpg">
</p><h2>Programme
</h2><p>Samedi : navigation libre, tests, entraînement de 13h30 à 18h
</p><p>Samedi soir : soirée repas au snack du CNA (12eur entrée / plat / dessert) puis concert DJ
</p><p>Dimanche :
</p><ul>
<li>accueil et inscription entre 9h30 et 11h</li>
<li>Briefing à 12h</li>
<li>1ere manche possible à 13h30</li>
</ul><h2>Journée du Samedi</h2><p>Samedi après midi, nous avons eu droit à des conditions assez exceptionnelles grâce à une queue de Mistral ... 20knt le matin, puis une petite 15aine l\'après midi. Entre débutants, testeurs et coureurs, nous étions déjà une petite vingtaine, l\'occasion d\'échanger et de tester pas mal de choses, y compris 2 ou 3 prototypes de foils et de planche dédiées. Il faut avouer que le site est juste parfait pour ce type d\'exercice, avec beaucoup de place pour poser le matériel, et un fond qui descend rapidement  ... et évite de trainer le foils sur le fond.
</p><p>En test : Alpinefoil A1 alu et carbone, Starboard GTS et Race, Lokefoil LK1, AFS 95, AFS 105, Horue H10 Evo, Fanatic H9, RRD, NP RS:Flight AL, Zeeko windfoil, Select Profoil, Exocet RF 81, JP hydrofoil 135, Starboard Foil 122, Tiaki Race 90, Phantom IRIS F 7.0, RS: One convertible, Elix F1X M
</p><p>En plus des tests de Samedi, le magasin a permis à 8 coureurs non équipés de participer à la course avec du matériel de prêt.
</p><p>Malgré un vent qui a faibli en milieu d\'après midi, ça a aussi été l\'occasion de se faire une bonne petite remontée au vent jusqu\'au Boscodon avec Nicolas Goyard et Cyril Fourier ... toujours de bons moments que ces balades rendues possibles par les capacités du foil en terme de cap, même dans le vent un peu léger et avec seulement 7m.<br>
</p><p><img src="/storage/photos/1/legacy/88373a488cd6a84db34900138fd3116e.png">
</p><p>La journée s\'est terminé par une petite soirée très riche en échanges organisée par le CNA. Entre la nav\', les bières, le vin et l\'heure tardive, il n\'a pas été difficile de trouver le sommeil :)<br>
</p><h2>Journée du Dimanche</h2><p>Le lendemain, le CNA s\'est animé vers 10h30 avec le début des inscriptions, et l\'arrivée de tout le monde.
</p><p><img src="/storage/photos/1/legacy/3ebb36579ac573c0bfed241d7cbf806f.jpg">
</p><p>Avec 36 inscrits, la plage s\'est rapidement transformée en forêt de voiles et de foils !
</p><p><img src="/storage/photos/1/legacy/9dfc6442c31200c976109deb57b7d446.jpg">
</p><p>Sur cette régate, on retrouvait le noyau dur des passionnés de la région avec l\'équipe du Y C Toulon venue en force, les ciotadins (dont votre serviteur), la délégation des alpes maritimes (Fred, Kevin, Colin et Bertrand), la famille Madier, les jeunes de Miramas, et bien sûr Nicolas Goyard. Sur cette étape, on a eu la chance d\'avoir la compagnie d\'un grand contingent du Y C Mauguio / Carnon, venus à plus de 5, et de nouvelles têtes : Lolo, John, Julie, Claire, Michel, Remy, Philippe. Pour la plupart de ces derniers, c\'était une nouvelle expérience et ils sont loin d\'avoir démérité ! Pour certains (Michel, Julie), c\'était même l\'une de leurs premières sorties en foil ... c\'est aussi ça l\'esprit des conviviales !!!
</p><p><img src="/storage/photos/1/legacy/22a8dcec5e0df1c773c5fa95d6112deb.jpg">
</p><p>Vers 11h30, le briefing a sonné le début des courses qui se sont courues par poules : une poule - de 21 ans (13 concurrents) , et une plus de 21 ans (23 concurrents). Compte tenu de la taille du parcours, il était en effet délicat de partir à 38 à l\'attaque du premier Jibe.
</p><p><br>
</p><p>Le vent a permis de boucler 2 parcours type 1 et 1 parcours type 2. Bien entendu, le type 2 est plus intéressant en terme de régate et exploite plus les possibilités du foil, mais le contexte de ces régates étant d\'accueillir un maximum de monde de tout niveau, c\'est bien le type 1 qui est le plus accessible pour tous.
</p><p><img src="/storage/photos/1/legacy/12d32d32c33e195e4a240185f1c02818.jpg">
</p><p><img src="/storage/photos/1/legacy/b669e9b231b3eacfda3685e2e7a5885a.jpg">
</p><p>L\'ensemble des manches ont été dominées nettement par Nicolas Goyard chez les adultes et Colin De Seroux chez les jeunes.
</p><p>Je tiens à remercier tout particulièrement Nicolas Goyard, qui a tout compris de l\'intérêt de ces courses, et a joué le jeu jusqu\'au bout en navigant avec le Zeeko aluminium, et un proto de foilboard freerace tabou. Beaucoup ont particulièrement apprécié de naviguer avec un grand champion à armes égale (y compris la même taille de voile puisque Nicolas a navigué en 7m comme nous tous, et non en 8,6 comme il aurait pu le faire dans ces conditions) ... je dirai même que sa performance est d\'autant plus impressionnante ainsi (n\'en déplaise aux marques qui pensent que tout le monde est impressionné par la débauche de matériel PWA).
</p><p><img src="/storage/photos/1/legacy/de89cfb4be88f4166e129624384ac04b.jpg">
</p><p>La pluie en ensuite venue jouer les trouble-fête vers 15h, et le vent n\'est jamais vraiment remonté. On a juste eu la chance de dégréer et de tout ranger sous les averses qui se succédaient. Cela n\'a pas  entamé d\'un pouce la bonne humeur de tous.<br>
</p><h2>Le classement de l\'étape </h2><p>Chez les jeunes, le classement a été identique sur les 2 manches, et reflète assez fidèlement les niveaux technique des régatiers. La plupart officient également en T293 ou RRD 120, et sont rompus à ce type d\'exercice
</p><p><img src="/storage/photos/1/legacy/aee595f216e09bf78181cad089721e12.png">
</p><p>Chez les adultes, beaucoup moins de régatiers, et donc un peu plus de péripéties et de fluctuation dans les classements. Quand ce n\'était pas le matos qui faisait défaut (je casse un bout de harnais sur le premier bord de la 2e manche, ce qui me vaut une place de dernier à la première bouée, et une place de 10 in fine sur cette manche tout à la force des bras), c\'était quelques erreurs au jibe ou des mauvais placements au départ qui handicapaient les uns ou les autres. A ce jeux là, félicitons Bastien (GlissAttitude) qui se classe 3e de l\'étape grâce à sa régularité (5,7,3) armé de sa Starboard foil 122 et de son LK1. Sur un parcours aussi court, le décollage express de la foil 122, et des jibes assurés ont fait la différence.
</p><p><img src="/storage/photos/1/legacy/55b21e9caf991fb07c86ea80ae30ecee.png">
</p><h2>Le matériel des premiers du classement</h2><h4>Adultes</h4><p>Nicolas Goyard : Zeeko Aloy Windfoil / Proto Tabou 80 foil / GA Vapor
</p><p>Renaud Madier : AFS W95 / Proto Zeeko / Ka Koncept
</p><p>Bastien Billoneau : Loke LK1 / Starboard Foil 122 / V8
</p><p>Cyril Fourier : Proto Ketos / Elix F1X / Skyscape
</p><p>Eric Collard : Starboard GTS / Exocet RF81 / V8
</p><h4>Jeunes</h4><p>Colin de Seroux : Starboard Race / Tiny 85 / GA Phantom
</p><p>Nicolin Madier : AFS W85 / AHD Thunderbolt / Ka Koncept
</p><p><br>
</p>

',
'status' => 'Published',
'views' => 1470,
'last_ip' => NULL,
'created_at' => '2018-06-19 12:45:03',
'updated_at' => '2018-06-19 12:45:03',
),
24 => 
array (
'id' => 41,
'user_id' => 1,
'post_categories_id' => 6,
'title' => 'Réglez votre rake',
'description' => 'Le rake concerne la pente entre le plat de la carène, et le plan de référence du fuselage du foil.',
'body' => '<p>La plupart d\'entre nous vissons notre foil sous la planche sans trop se poser de question, et quand tout &agrave; &eacute;t&eacute; correctement choisi, la magie op&egrave;re. Pourtant, de nombreux r&eacute;glages peuvent modifier plus ou moins profond&eacute;ment le comportement du foil. En comprenant leur utilit&eacute; et leur influence, cela explique souvent des g&egrave;nes que l\'on ressent en navigant.</p>
<p>Aujourd\'hui, on s\'int&eacute;resse &agrave; un r&eacute;glage qui a des cons&eacute;quences assez importantes : le RAKE</p>
<h4>IMPORTANT : si vous d&eacute;butez en foil, ne vous emb&ecirc;tez pas avec ces r&eacute;glages !! Naviguez jusqu\'&agrave; avoir suffisamment de sensations pour vous int&eacute;resser &agrave; ces subtilit&eacute;s.</h4>
<h2>D&eacute;finition</h2>
<p>Si on regarde la traduction de ce mot anglais, on tombe d\'abord sur "rateau" ... pas beaucoup de points communs avec le windfoil. En y regardant de plus pr&egrave;s, Rake se traduit aussi par "pente", et l&agrave;, on touche de plus pr&egrave;s notre domaine.</p>
<p>Effectivement, le rake concerne l\'angle entre la verticale (si on consid&egrave;re que le plat de car&egrave;ne est &agrave; l\'horizontale) et le mat. Dans les faits, on donnerai l\'angle moyen entre le bord d\'attaque et le bord de fuite si ceux ci ne sont pas parall&egrave;les. <img src="/storage/photos/1/legacy/3d437ad9d78a0f599d8c59c9e5e4562e.jpg" /></p>
<h2>Influence du rake</h2>
<p>Modifier cet angle a 2 cons&eacute;quences importantes :</p>
<ul>
<li>On d&eacute;place l&eacute;g&egrave;rement la pouss&eacute;e du foil vers l\'arri&egrave;re ou l\'avant</li>
<li>On modifie l\'incidence du fuselage, donc du profil porteur de l\'aile et du stab</li>
</ul>
<p><img src="/storage/photos/1/legacy/7d413d705c6ef4d969e8036793ff3af0.jpg" /></p>
<p>Sur le dessin ci dessus, les angles sont &eacute;videmment exag&eacute;r&eacute;s, mais vous verrez plus loin que l\'on joue souvent autour de 2&deg;.</p>
<p>Concernant le d&eacute;calage de centre de pouss&eacute;e pour un mat de 1m, cela correspond quand m&ecirc;me &agrave; 3,5cm ... soit bien plus qu\'un d&eacute;calage d\'insert de strap.</p>
<p>Concernant l\'angle d\'incidence, les choses sont un peu diff&eacute;rentes : Dans la conception d\'un foil, l\'angle d\'incidence de l\'aile est en g&eacute;n&eacute;rale choisie &agrave; 0, et c\'est le braquage du stab (effet d&eacute;porteur) qui permet au foil de compenser tout le poids situ&eacute; en avant (pouss&eacute;e v&eacute;lique, poids du gr&eacute;ement et du flotteur). In fine, le foil navigue en g&eacute;n&eacute;ral avec le fuselage tr&egrave;s proche de l\'horizontale ... surtout &agrave; vitesse soutenue. Si on reprend le sh&eacute;ma suivant en partant de ce principe, voici ce que &ccedil;a donne.</p>
<p><img src="/storage/photos/1/legacy/effd5daf0fff81bb128e83567029dfd9.jpg" /></p>
<p>Modifier le rake revient donc</p>
<ul>
<li>&agrave; modifier l\'angle d\'incidence du fuselage lorsque la planche est &agrave; l\'arr&ecirc;t (sh&eacute;ma n&deg;2),&nbsp;</li>
<li>modifier le "cabrage" de la car&egrave;ne lorsque l\'on est en vol (sh&eacute;ma n&deg;3)</li>
</ul>
<h2>Quel int&eacute;r&ecirc;t ?</h2>
<p>Si on r&eacute;glait les foils avec un Rake &agrave; 0 (ce qui arrive encore un peu trop souvent sur certains mat&eacute;riels que l\'on a l\'occasion de tester), on aurait les cons&eacute;quences suivantes</p>
<ol>
<li>Lorsque l\'on veut partir au planning, on se recule sur la planche pour pomper et cela a pour cons&eacute;quence de l&eacute;g&egrave;rement enfoncer le cul de la planche dans l\'eau. Si la planche est cabr&eacute;e de 3&deg;, on a aussi cabr&eacute; l\'aile du foil de 3&deg; ... ce qui augmente de fa&ccedil;on substantielle sa train&eacute;e, mais aussi sa portance. On va donc d&eacute;coller avec moins de vitesse, mais il va falloir forcer plus pour vaincre cette train&eacute;e (plus de vent ou plus grande voile)</li>
<li>Une fois en l\'air, si on prend beaucoup de vitesse, on va devoir appuyer plus fort sur le pied avant pour donner une incidence l&eacute;g&egrave;rement n&eacute;gative &agrave; l\'aile ... ceci afin de limiter sa puissance et ne pas sortir de l\'eau. Automatiquement, on se retrouve avec une car&egrave;ne qui pique du nez. Je suis s&ucirc;r que vous l\'avez d&eacute;j&agrave; observ&eacute; sur les spots chez certains de vos coll&egrave;gues foileurs</li>
<li>Lorsque l\'on fait une touchette, plus ou moins brutale, la car&egrave;ne vient toucher l\'eau d\'un seul coup sur une grand partie de sa surface. Cela freine d\'un coup, on il faut s\'accrocher pour ne pas &ecirc;tre projet&eacute; en avant ... sans compter que l\'on s\'est arr&ecirc;t&eacute;, et qu\'il faut donc repartir sans vitesse</li>
</ol>
<p>Mettre un Rake positif permet donc</p>
<ol>
<li>De limiter la train&eacute;e du foil au d&eacute;collage</li>
<li>D\'&eacute;viter d\'avoir un flotteur qui pique du nez quand on prend de la vitesse</li>
<li>De limiter les coups de frein lors des touchettes, et am&eacute;liorer la relance au jibe si on vient &agrave; toucher</li>
</ol>
<h2>Quelle valeur utiliser</h2>
<p>Sur les foils modernes et bien con&ccedil;us, on s\'accorde &agrave; dire que l\'optimum se situe sur des valeurs autour de 1,5 &agrave; 2,5&deg;. Il est int&eacute;ressant de faire des essais pour trouver l\'angle qui correspond le mieux votre combo foil + board.</p>
<p>Nota. Dans ce post, je donne des valeurs positives pour simplifier, mais certains parleront avec des valeurs n&eacute;gatives. Pas de stress : ce n\'est qu\'une question de r&eacute;f&eacute;rentiel. Ce qui est important, c\'est que si le fuselage est &agrave; l\'horizontal , la car&egrave;ne est l&eacute;g&egrave;rement cabr&eacute;e ... c\'est &agrave; retenir.</p>
<h2>Comment &ccedil;a se mesure ?</h2>
<p>Mesurer des angles de 1 ou 2&deg; n\'est pas &eacute;vident, mais la technologie peut venir &agrave; votre secours. Voici la m&eacute;thode que nous utilisons.</p>
<p>Tout d\'abord, il est convient de rep&eacute;rer sur le fuselage du foil une zone plate qui semble align&eacute;e avec l\'intrados de l\'aile. Ce sera notre zone de mesure</p>
<p><img src="/storage/photos/1/legacy/e75573a36a94ea85075a3f1ce53cbe5e.jpg" /></p>
<p>Sur les foils comme le starboard, l\'alpine ou le zeeko, il suffit de prendre la portion inf&eacute;rieure de fuselage situ&eacute;e juste derri&egrave;re l\'aile avant</p>
<p>Sur votre smartphone, installez et lancez une application de niveau &eacute;lectronique gratuit comme "Niveau iHandy" ou encore "Bubble level"</p>
<p><img src="/storage/photos/1/legacy/812696c4deb4c82d95a2851bbaecdf0a.jpg" /></p>
<p>Une fois votre foil ins&eacute;r&eacute; dans le boitier, foil en l\'air et planche pos&eacute;e &agrave; peu pr&egrave;s &agrave; l\'horizontal sur ses straps, posez votre t&eacute;l&eacute;phone &agrave; plat contre la car&egrave;ne juste devant le boitier d\'aileron. Cliquez alors sur le bouton de remise &agrave; zero de la mesure (le rond avec la petite croix &agrave; gauche de l\'angle sur la photo ci dessus).</p>
<p>Ensuite, posez votre t&eacute;l&eacute;phone sur la zone de mesure du foil, et vous lirez automatiquement l\'angle qu\'il y a entre le plan de r&eacute;f&eacute;rence de votre fuselage et la car&egrave;ne .... tout simplement.</p>
<p>Nota : Les puristes de le m&eacute;canique des fluide feront tr&egrave;s justement remarquer que prendre le plat du fuselage (ou le plat de l\'intrados de l\'aile) comme r&eacute;f&eacute;rence de mesure est un peu rapide et pas tr&egrave;s juste. Cela ne correspond en effet &agrave; la r&eacute;elle incidence nulle du profil. Je suis d\'accord, mais c\'est beaucoup plus comode comme ceci. L\'important est de faire votre r&eacute;glage en prenant toujours le m&ecirc;me r&eacute;f&eacute;rentiel pour retrouver vos r&eacute;glages pr&eacute;f&eacute;r&eacute;es d\'une nav\' &agrave; l\'autre.</p>
<h2>Comment le r&eacute;gler</h2>
<h4>Cas d\'un foil sans platine et qui ne s\'appuie pas en fond de boitier</h4>
<p>On consid&egrave;re ici le cas d\'un talon de foil qui rentre en force et se cale sur les 2 faces lat&eacute;rales obliques du boitier (c\'est le mode de fonctionnement standard du boitier Tuttle).</p>
<p>Dans ce cas, il suffit de serrer plus ou moins la vis arri&egrave;re ou avant du talon pour incliner diff&eacute;remment le foil. Dans cette situation, il faut mesurer &agrave; chaque montage pour avoir un r&eacute;glage constant d\'une session &agrave; l\'autre.</p>
<h4>Cas d\'un foil avec platine</h4>
<p>La solution la plus courante consiste &agrave; confectionner des cales biseaut&eacute;es qui permettront de relever l\'avant (le plus souvent) ou l\'arri&egrave;re de la platine pour arriver &agrave; la valeur voulue.</p>
<p><img src="/storage/photos/1/legacy/4792dc2f2630a234f2497e8584ed9e62.jpg" /></p>
<p>Pour ceux qui ont un foil &agrave; platine, mais qui pr&eacute;f&egrave;rent supprimer l\'appui sous la car&egrave;ne (eh oui, j\'en connais !), passer au cas num&eacute;ro 3</p>
<h4>Cas de foil sans platine et qui s\'appuie en fond de boitier</h4>
<p>C\'est une situation de plus en plus courante pour 2 raisons</p>
<ul>
<li>En viellisant, les boitiers en tendance &agrave; se d&eacute;former, et il arrive r&eacute;guli&egrave;rement que l\'on passe d\'un ajustement ultra serr&eacute; &agrave; un talon qui descent trop dans le boitier (c\'est valable aussi pour les ailerons TT).</li>
<li>Depuis que Cobra a cr&eacute;&eacute; ses boitiers "Foil Ready", ils sont pass&eacute;s &agrave; un boitier moins profond, et certaines marques de foil (dont Starboard) ont cr&eacute;&eacute; des talons qui viennent s\'appuyer en fond de boitier ... ou presque.Par ailleurs, ces boitiers sont structurellement con&ccedil;us pour accepter un appui en fond de boitier.</li>
</ul>
<p>Dans cette situation, il faudra utiliser des cales &agrave; ins&eacute;rer entre le fond de boitier et le talon.</p>
<p><img title="cale de rake" src="/storage/photos/1/legacy/cales-rake.jpg" alt="cale de rake" /></p>
<p>Vous pouvez cr&eacute;er des cales en coulant de la r&eacute;sine ou en prenant une empreinte avec de la pate &agrave; modeler en fond de boitier, mais le plus simple reste l\'utilisation de cales empilables. Ces derni&egrave;res permettront de modifier facilement l\'angle de rake en fonction de l\'&eacute;paisseur ou du nombre de cales utilis&eacute;e. Elles permettent surtout d\'avoir un r&eacute;glage parfaitement reproductible d\'une session &agrave; l\'autre.</p>
<p><strong>Dans tous les cas, l\'utilisation des cales n\'est n&eacute;cessaire que sous la vis avant</strong>. La vis arri&egrave;re &eacute;tant en traction, le seul serrage de cette derni&egrave;re suffit.</p>
<p>Ceci est encore plus vrai depuis que les boitiers foilBox sont pour la plupart des boitiers rectangulaires. En effet, tr&egrave;s peu de chances que le talon de votre foil ne vienne s\'appuyer sur le fond en arri&egrave;re.</p>
<p><img src="/storage/photos/1/legacy/boitier_rectangulaire.jpg" alt="boitier foil box" /></p>
<p>Nota. Nous conseillons cette solution de calage sans r&eacute;serve sur les flotteurs d&eacute;di&eacute;s au foil, et qui sont &eacute;quip&eacute;s de boitiers renforc&eacute;s. Que ce soit du Flika ou du Cobra, nous avons &eacute;prouv&eacute; cette solution depuis des mois dans aucun probl&egrave;me structurel. Par contre, nous n\'avons pas de recul concernant l\'utilisation d\'un appui en fond de boitier sur des anciens boitiers de flotteur de slalom.</p>
<h2>Des cales toutes faites</h2>
<p>Nous proposons d&eacute;sormais, avec l\'aide de Nicolas Goyard qui les a mis au point, un <a href="/windfoil/u37872s1-divers-cales-de-reglage-rake-divers-2019.html">jeu de cales de rake fournies dans une boite</a>.</p>
<p>Le jeu contient 13 cales superposables r&eacute;parties comme suit :</p>
<ul>
<li>1 cale de 8mm</li>
<li>1 cale de 7mm</li>
<li>1 cale de 6mm</li>
<li>1 cale de 5mm</li>
<li>1 cale de 4mm</li>
<li>1 cale de 3mm</li>
<li>1 cale de 2mm</li>
<li>5 cales de 1mm</li>
</ul>
<p>Les cales sont perc&eacute;es pour laisser le passage de la vis de talon. Elle sont produites dans un mat&eacute;riau tr&egrave;s dur charg&eacute; carbone pour &eacute;viter tout &eacute;crasement ou usure.</p>
<p>Les cales sont rang&eacute;es dans une boite avec un emplacement d&eacute;di&eacute; pour chacune d\'elles ... Tout est pens&eacute; pour &eacute;viter d\'en perdre et surtout avoir un r&eacute;glage reproductible et rapide &agrave; mettre en place. Avec ce produit, on peut faireface &agrave; la plupart des situations.</p>
<p><img src="/storage/photos/1/legacy/IMG_0118.jpg" alt="R&eacute;glage du rame" /></p>
<p><img src="/storage/photos/1/legacy/IMG_0119.jpg" alt="R&eacute;glage du rame" /></p>
<h2>Consid&eacute;rations structurelles</h2>
<p>D&egrave;s que l\'on parle ou &eacute;crit au sujet du fonctionnement du boitier Tuttle, cela emm&egrave;ne &agrave; de nombreuses prises de positions concernant la qualit&eacute; de l\'assemblage.</p>
<p>Les scientifiques dans l\'&acirc;me vous expliqueront que l\'assemblage conique est le meilleur. D\'autres qu\'il devrait &ecirc;tre doublement conique pour &ecirc;tre de qualit&eacute; (cas du boitier probox). On pourrait aussi ajouter qu\'un appui en fond de boitier est une h&eacute;r&eacute;sie concernant le talon Tuttle puisque le boitier n\'est pas fait pour cela (syst&egrave;me hyperstatique ...) etc. etc.</p>
<p>Toutes ces remarques sont pertinentes, et th&eacute;oriquement justes. Dans les faits, le syst&egrave;me d\'assemblage Tuttle n\'est pas parfait, mais il est l&agrave; et on fait avec. Les solutions que nous pr&eacute;sentons ici fonctionnent parfaitement, y compris l\'appui en fond de boitier. Nous avons test&eacute; ces solutions depuis des mois et &ccedil;a marche sans risque pour la structure des planches ni du foil, donc pourquoi s\'en priver ?</p>',
'status' => 'Published',
'views' => 4424,
'last_ip' => NULL,
'created_at' => '2018-06-25 14:37:02',
'updated_at' => '2022-02-19 20:56:22',
),
25 => 
array (
'id' => 42,
'user_id' => 1,
'post_categories_id' => 1,
'title' => 'Comparatif foil aluminium 2018',
'description' => 'Petite comparaison des foils aluminium en date de Juin 2018',
'body' => '<p>En ce mois de Juin 2018, faisons le point au sujet des foils en aluminium, avec une comparaison entre les 5 foils les plus vendus sur notre territoire national, à savoir
</p><ul>
<li>le Starboard GT alu</li>
<li>le Zeeko Alloy Wind LW</li>
<li>le NeilPryde RS:Flight AL</li>
<li>le Horue H10 Evo</li>
<li>le Alpinefoil A1</li>
</ul><h2>Présentation des protagonistes</h2><h4>le Starboard GT alu (1200€)</h4><p>Directement dérivé du GT carbone, le GT alu partage avec ce dernier tous les éléments à l\'exception du mat aluminium. Le GT alu se caractérise par un comportement irréprochable grâce à l\'une des meilleures rigidités générales. Si on y ajoute une évolutivité rare, on a la recette d\'un des foils aluminium les plus attirants du marché .. mais un peu plus cher que la moyenne.
</p><h4>le Zeeko Alloy Wind LW (1000€)</h4><p>Très présent sur les spots, le Zeeko base son succès sur le trio : mat relativement long pour un alu / rigidité mat   fuselage de bon niveau / tarif placé à 1000€. Les sensations de glisse ne sont pas exceptionnelles, mais le Zeeko est efficace, robuste et rapide.
</p><h4>le NeilPryde RS:Flight AL (800€)</h4><p>Véritable best seller de sa catégorie, le RS:Flight a assommé la concurrence grâce à sa sortie précoce, un prix imbattable et des performances remarquables dans le médium et dans le vent. Quasi parfait pour débuter, le seul défaut du RS est de manquer de portance et de finesse dans le vent léger. Il y a de fortes chances pour que ceci évolue à court terme avec la V2 et l\'upgrade prévue à moyen terme.
</p><h4>le Horue H10 Evo (800€)</h4><p>Le H10 est la réponse d\'un artisan aux industriels. Un peu moins stable que les 4 autres protagonistes, et offrant une finition en retrait par rapport aux concurrents, le H10 est parfaitement adapté aux petits gabarits et à la navigation freeride (petite voile / planche étroite). A défaut d\'être beau, il offre probablement les meilleures performances de sa catégorie dans le light. C\'est aussi le plus amusant dans le cadre d\'une utilisation freeride petite voile. Un foil efficace qui se paye le luxe de bousculer NeilPryde sur son terrain avec un tarif identique à 800€.
</p><h4>le Alpinefoil A1 (1300€)</h4><p>Dernier né de notre liste, le A1 est le plus cher de cette catégorie, mais il joue la carte d\'une finition hors du commun, et d\'une promesse d\'évolutivité complète (nouveaux éléments à venir). Ce très bel objet n\'en est pas moins efficace et très bien conçu. Il fait surtout la différence avec les autres par sa glisse dans le light.
</p><h2>Décollage et portance</h2><p>Parmi les 5 foils, c\'est clairement le H10 evo qui décolle le plus rapidement, surtout si il est utilisé sur une petite planche (75 de large) et par un pratiquant tonique.
</p><p>Avec un peu plus de puissance vélique nécessaire,  on va avoir le A1, talonné par le Starboard et le Zeeko.
</p><p>Le RS:Flight AL ferme la marche, car c\'est celui qui nécessite le plus de vent ou de puissance pour s\'envoler.
</p><h2>Sensation de glisse</h2><p>Sans parler de vitesse, mais juste de sensations, c\'est le A1 qui remporte la palme avec une vraie fluidité dans la glisse proposée.
</p><p>Les 4 autres sont difficile à départager sur ce critère car ils se valent globalement ... certains étant plus agréables dans le light, et d\'autres dans le vent.
</p><h2>Stabilité latérale</h2><p>Côté stabilité latérale, ce sont les Starboard, Alpine et NeilPryde qui sont les plus seins. Le zeeko les talonne d\'assez près.
</p><p>Le H10 est nettement en retrait sans que cela ne soit génant pour autant, mais il faut faire un peu plus d\'effort pour le contrôler sur cet axe. C\'est d\'autant plus sensible si on navigue en s\'appuyant dans la voile. Par contre, dans le cadre d\'une navigation freeride, cela ne pose aucun problème.
</p><p>SI on veut utiliser la contre gîte, ce sont les Starboard et Zeeko qui y viennent le plus facilement, sans nécessiter une planche très large. Le H10 en est tout aussi capable mais il est beaucoup plus difficile de le ternir dans cette position que les 2 autres. Les RS:Flight AL puis A1 sont moins à l\'aise dans cet exercice car ils nécessitent un peu plus d\'effort ou une planche plus large pour pouvoir tenir cette position.
</p><h2>Stabilité longitudinale</h2><p>Pour se maintenir à une hauteur constante (ou à peu près), c\'est clairement le Starboard qui mène la danse parmi les 5 foils dès que le plan d\'eau devient un peu clapoteux. Si on est dans des conditions très flat et un vent faible, c\'est le A1 qui repasse devant grâce à son long fuselage. Ce dernier resterai probablement en tête sur ce critère si il avait un ensemble fuselage / stab un peu plus rigide.
</p><p>Dans toutes les conditions de vent ou de plan d\'eau, le Zeeko vient en 3e position sur ce critère et les H10 et NeilPryde ferment la marche avec un comportement plus vif et sensible, qui nécessite plus de pilotage.
</p><h2>Réaction au pumping et nervosité</h2><p>Les foils aluminium sont logiquement en retrait sur ce critère si on les compare à leurs grand-frères en carbone. On a une sensation de réponse élastique moins sensible, moins linéaire et moins rapide.
</p><p>Le Starboard, avec ses mats et fuselage ultra rigide semble inerte. C\'est aussi le cas du NeilPryde RS:Flight AL avec lequel il ne se passe pas grand chose.
</p><p>Avec le Zeeko, c\'est le mat un peu moins rigide qui donne un tout petit peu de vie.<br>
</p><p>Avec la A1, c\'est la petite souplesse de l\'aile et du fuselage qui donnent de la vie au foil lors du pumping.
</p><p>Ce comportement fait partie des points que l\'on améliore beaucoup en passant sur un mat carbone, que ce soit pour le passage dans les molles ou le plaisir général en navigation.
</p><h2>Bel objet
</h2><p>Lorsque l\'on investi dans un foil, la notion de beauté de l\'objet a une grosse influence sur l\'acheteur. En magasin, c\'est un critère que l\'on observe très nettement, donc il est difficile de ne pas en tenir compte lorsque l\'on compare ente eux les foils.
</p><p>Sur ce point, il y a assez peu de suspense avec dans l\'ordre le superbe A1, suivi du Starboard, du Zeeko, du Neilpryde puis du H10.
</p><h2>Evolutivité
</h2><p>Ce critère n\'est pas lié aux sensations bien sûr, mais il me semble très important à prendre en compte lors d\'un achat. Surtout, il est à rapporter directement au tarif car il est logique de payer plus cher un produit évolutif, dans la mesure où les évolutions vous couteront ensuite moins cher.
</p><p>Sur ce point, c\'est le starboard qui prend la tête haut la main. Que ce soit par sa conception, les options disponibles à ce jour, et ce qui arrive dans les mois prochains, ses capacités d\'évolution sont pléthoriques. Vous aurez le choix de passer à une version carbone, mais aussi de rester sur de l\'aluminium mais de l\'upgrader vers une version plus \'race\' privilégiant les performances aux allures serrées ou très abattues.
</p><p>Le A1, quant à lui, est également conçu pour offrir une évolutivité. A ce jour, les options sont assez limitées (mat carbone de même longueur, ailes développées pour le kite), mais Alpinefoil promet d\'enrichir le catalogue dès la saison prochaine.
</p><p>Pour le Zeeko, le catalogue d\'option ne comporte pour l\'instant qu\'une aile plus petite. Quant aux NeilPryde et Horue H10 Evo, ils sont conçu pour fonctionner tel quel, même si il est possible (via des cales d\'adaptation) d\'utiliser les ailes du Vini sur le H10.
</p><h2>Bilan
</h2><p>Avec ces comparaison par critères, j\'espère que vous cernez mieux le caractère de chacun de ces foils, et que vous aurez toutes des données pour faire votre choix personnel.
</p><p>De notre côté, nous ne pouvons que nous réjouir de la qualité de comportement de ces nouveaux foils en aluminium. Leur rapport service rendu / prix est clairement le gros atout de ces produits. Le choix d\'un foil carbone apportant réellement un plus nécessite en général un investissement supplémentaire d\'au moins 600€.
</p>
<p><img src="/storage/photos/1/selection.jpg" alt="" /></p>
',
'status' => 'Published',
'views' => 1042,
'last_ip' => NULL,
'created_at' => '2018-06-27 22:44:18',
'updated_at' => '2018-06-27 22:44:18',
),
26 => 
array (
'id' => 43,
'user_id' => 1,
'post_categories_id' => 5,
'title' => 'Les mesures structurelles',
'description' => 'Nous explorons les corrélations entre conception et sensations sur l\'eau',
'body' => '<div class="container">
<div class="row">
<div class="col-md-6">
<p>Depuis maintenant 3 ans, nous testons sur l\'eau des windfoil avec des r&eacute;sultats tr&egrave;s diff&eacute;rents. Il faut dire que les conceptions sont aussi tr&egrave;s vari&eacute;es ... en m&ecirc;me temps que l\'objectif des d&eacute;veloppeurs.</p>
<p>Certaines corr&eacute;lations entre conception et sensations sur l\'eau sont assez &eacute;videntes, et on voit que tous les fabricants ont int&eacute;gr&eacute; un certain nombre de grands principes pour faire &eacute;voluer leurs produits.</p>
<p>Il reste cependant encore pas mal de zones de flou, et c\'est en creusant ceci que les progr&egrave;s pourront encore se faire. Pour participer &agrave; notre niveau, nous avons d&eacute;cid&eacute; d\'investir pour mieux comprendre. En effet, nous ne voulons pas en rester &agrave; des suppositions ou des croyances.</p>
</div>
<div class="col-md-6">
<p>L\'un des &eacute;l&eacute;ments cl&eacute;s dans le fonctionnement d\'un foil de windsurf est li&eacute; au comportement structurel du foil. Ceci comprend la flexion du mat, sa torsion, la rigidit&eacute; des connexions mat / fuselage etc. Nous essayons de caract&eacute;riser le lien entre ces &eacute;l&eacute;ments et les sensations que l\'on peut &eacute;prouver sur l\'eau. L\'un des meilleurs moyens pour cela est de mesurer les caract&eacute;ristiques m&eacute;caniques des diff&eacute;rents foils, puis de les corr&eacute;ler avec les retours de test.</p>
<p>Pour ce faire, nous avons con&ccedil;u 2 bancs de mesure : l\'un permet de caract&eacute;riser la rigidit&eacute; en torsion et en flexion du mat de foil, et l\'autre de mesurer la rigidit&eacute; de la liaison mat / fuselage / aile. C\'est gr&acirc;ce &agrave; la diversit&eacute; des foils en notre possession, que nous pourrons exploiter ces r&eacute;sultats et tenter d\'en tirer des indices.</p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h2>Banc de mesure du mat de foil</h2>
<p>Le banc de mesure est un chassis m&eacute;cano-soud&eacute; tr&egrave;s rigide permettant de bloquer le foil, et de mesurer ses d&eacute;formations sous l\'effet d\'une charge m&eacute;canique. Voici une vue d\'ensemble du dispositif.</p>
<p><img src="/storage/photos/1/legacy/5fdbed226fdc81dc3858fce62f04fe07.jpg" /></p>
<p>Le bridage du foil par son talon</p>
<p><img src="/storage/photos/1/legacy/6ca5a281e85deccac0d1233703219922.jpg" /></p>
<p>Le dispositif de mesure des d&eacute;formations, &agrave; l\'aide d\'un comparateur</p>
<p><img src="/storage/photos/1/legacy/893eef149902c30dedfdb362d2df87eb.jpg" /></p>
<p><img src="/storage/photos/1/legacy/600cf4a4be8c2ba734f2f5b4118db168.jpg" /></p>
</div>
</div>
<div class="row">
<div class="col-md-6">
<p>Avec ce banc, nous avons d&eacute;but&eacute; une campagne de mesure comprenant 3 valeurs :</p>
<p>Les 2 premi&egrave;res caract&eacute;risent la rigidit&eacute; en flexion du mat (sur les 70 premiers cm &agrave; partir de son talon, puis sur toute sa longueur).</p>
<p>La 3e caract&eacute;rise la rigidit&eacute; en torsion de l\'ensemble du mat, y compris sa jonction mat / fuselage.</p>
</div>
<div class="col-md-6">
<ul>
<li>La d&eacute;formation lat&eacute;rale du mat mesur&eacute;e &agrave; 70cm du talon, lorsque celui ci est sous &agrave; une contrainte lat&eacute;rale de 10kg appliqu&eacute;e au point de mesure</li>
<li>La d&eacute;formation lat&eacute;rale du mat mesur&eacute;e &agrave; la jonction mat / fuselage, lorsque celui ci est sous &agrave; une contrainte lat&eacute;rale de 10kg appliqu&eacute;e au point de mesure</li>
<li>La d&eacute;formation en torsion mesur&eacute;e &agrave; 25cm de l\'axe de torsion, par application d\'une charge de 6,25kg &agrave; 35cm de l\'axe de torsion (lors de cette mesure, le mat est bloqu&eacute; sur son axe de flexion &agrave; l\'aide d\'un couteau d\'appui).</li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-6"><img src="/storage/photos/1/legacy/foil-rigidite-flexion.jpg" alt="rigidite en flexion" /></div>
<div class="col-md-6"><img src="/storage/photos/1/legacy/foil-rigidite-torsion.jpg" alt="rigidite en torsion" /></div>
</div>
<div class="row">
<div class="col-md-6">
<p>Les valeurs relev&eacute;es sont &agrave; la fois assez dispers&eacute;s (on a un facteur x6 entre le plus souple et le plus rigide, ce qui est &eacute;norme !!!), et r&eacute;v&eacute;latrices des options de conception retenues par les diff&eacute;rents fabricants.</p>
<p>Nous ne publierons pas ces r&eacute;sultats bruts pour &eacute;viter des interpr&eacute;tations erron&eacute;es, et sans fondement. Ce sont par ailleurs des donn&eacute;es que nous r&eacute;servons aux marques qui en tireront chacune leurs conclusions. Je pr&eacute;cise que nous avons donn&eacute; &agrave; chaque marques ses r&eacute;sultats par rapport aux autres, mais sans citer de quels autres il s\'agit afin de pr&eacute;server une certaine confidentialit&eacute;.</p>
</div>
<div class="col-md-6">
<p>A la vue de ces premiers r&eacute;sultats sur 21 foils commercialis&eacute;s sur le march&eacute;, nous pouvons d&eacute;j&agrave; affirmer que certaines valeurs sont tr&egrave;s r&eacute;v&eacute;latrices ce que que l\'on ressent, et que d\'autres vont nous am&egrave;nent &agrave; modifier certaines id&eacute;es que nous avions.</p>
<p>Quoi qu\'il en soit, ces mesures nous permettent &eacute;galement de conna&icirc;tre beaucoup plus en d&eacute;tail les produits que nous vendons, et d\'&ecirc;tre ainsi encore plus pertinents sur les conseils que nous pouvons apporter au pratiquant.</p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h2>Banc de mesure des jonctions</h2>
</div>
</div>
<div class="row">
<div class="col-md-6"><img src="/storage/photos/1/legacy/banc-mesure-jonctions.jpg" alt="Banc de mesure des rigidites de jonction" /></div>
<div class="col-md-6">
<p>Ce banc de mesure est cage permettant de brider le foil par ses ailes et son stab, et d\'appliquer une traction lat&eacute;ral sur le mat. On mesure alors la d&eacute;formations lat&eacute;rale de ce dernier au niveau du talon. La force lat&eacute;rale appliqu&eacute;e est de 6,25kg</p>
<p>Nous avons aussi effectu&eacute; des mesures avec d\'autres forces lat&eacute;rales (1kg, 5kg, 10 kg) pour v&eacute;rifier si on restait dans un comportement lin&eacute;aire (d&eacute;formation &eacute;lastique). C\'est bien le cas.</p>
<p>Pour l\'instant, ces mesures ont &eacute;t&eacute; effectu&eacute;es sur 5 foils du march&eacute;. Nous continuons les mesures au fur et &agrave; mesure des mod&egrave;les qui passent dans nos mains. Nous publierons les r&eacute;sultats quand nous aurons suffisamment de valeurs significatives.</p>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h2>Conclusions provisoires</h2>
</div>
</div>
<div class="row">
<div class="col-md-6">
<p>Au stade o&ugrave; nous en sommes, voici les premi&egrave;res conclusions que nous pouvons tirer :</p>
<ul>
<li>Tous les foils instables lat&eacute;ralement lors des tests sur l\'eau sont des foils souples en flexion et torsion.</li>
<li>Tous les foils souples en flexion et en torsion se sont av&eacute;r&eacute;s instables sur l\'eau.</li>
<li>Certains foils souples en flexion mais raides en torsion se sont av&eacute;r&eacute;s tr&egrave;s stables sur l\'eau, mais il y a des contre exemples.</li>
<li>Certains foils souples en torsion mais raides en flexion se sont av&eacute;r&eacute;s stables sur l\'eau, mais il y a des contre exemples.</li>
<li>Tous les foils raides en flexion et en torsion se sont av&eacute;r&eacute;s stables sur l\'eau.</li>
</ul>
</div>
<div class="col-md-6">
<p>De ce qui ressort, on voit que les foils combinant raideur en flexion et en torsion sont en g&eacute;n&eacute;ral stables. Par contre, si d\'un des 2 axes n\'est plus bloqu&eacute;, on arrive vite &agrave; des instabilit&eacute;s, sans que ce ne soit syst&eacute;matique.</p>
<p>On a aussi remarqu&eacute; que pour naviguer facilement &agrave; la contre g&icirc;te, il est plus ais&eacute; d\'avori un mat raide en torsion, mais relativement souple en flexion .. en particulier en partie haute</p>
</div>
</div>
</div>',
'status' => 'Published',
'views' => 2892,
'last_ip' => NULL,
'created_at' => '2018-07-10 14:13:39',
'updated_at' => '2022-02-19 13:13:42',
),
27 => 
array (
'id' => 44,
'user_id' => 1,
'post_categories_id' => 2,
'title' => 'Comment voler dans moins de 10knt ?',
'description' => 'Cela nécessite à la fois un matériel bien choisie, et une technique aboutie. Voici nos conseils',
'body' => '<p>Voler dans moins de 10 knt est le graal de tout windfoileur. Cela n&eacute;cessite &agrave; la fois un mat&eacute;riel bien choisi, et une technique aboutie. Voici nos conseils</p>
<h3>Dans l\'ordre d\'importance</h3>
<ol>
<li>Avoir un mat tr&egrave;s dynamique (100%) et parfaitement adapt&eacute; &agrave; la voile ... c\'est indispensable pour un pumping efficace</li>
<li>Trouver la taille de voile id&eacute;ale par rapport &agrave; votre gabarit et votre condition physique. Pour mes 78kg, entre 8 et 9m. Trop petit = &nbsp;pas assez d\'appui, trop gros = mouvement pas assez tonique</li>
<li>En fonction de son matos, trouver la bonne technique de pumping. En g&eacute;n&eacute;ral, avec des mats tr&egrave;s dynamique, le plus efficace passe par des petits mouvements pas tr&egrave;s amples proches de la fr&eacute;quence de raisonnance du gr&eacute;ement. Dans le cas d\'un gr&eacute;ement plus mou, on privil&eacute;giera des mouvements plus amples mais plus lents.</li>
</ol>
<h3>Technique de d&eacute;collage</h3>
<p>Dans tous les cas, on va commencer avec le gr&eacute;ement pour g&eacute;n&eacute;rer un appui a&eacute;rodynamique, puis d&egrave;s que celui ci est trouv&eacute;, on va transf&eacute;rer le pumping du haut du corps vers les pieds pour pousser sur le foil vers l\'avant et lui faire prendre de la vitesse.</p>
<p>En fonction du flotteur, on sera plus ou moins abattu ... en g&eacute;n&eacute;ral quasi travers avec un flotteur &eacute;troit. Avec un flotteur tr&egrave;s large au cul, on commence travers pour trouver l\'appui a&eacute;rodynamique, puis on abat au fur et &agrave; mesure que l\'on transfert le pumping vers les pieds. D&egrave;s que le foil d&eacute;leste la planche, on re-loffe (sans appuyer sur les talon !!!) pour r&eacute;-aumgenter l\'appui dans le voile gr&acirc;ce au vent apparent.</p>
<p>Mod&egrave;le de foil</p>
<p>On lit tout et son contraire concernant le foil qui volera le plus t&ocirc;t. Pour faire un point pr&eacute;cis, nous avons choisi de faire un test objectif avec quelques foils que nous avions sous la main, en ne modifiant que ce param&egrave;tre (m&ecirc;me flotteur, gr&eacute;ement, pilote, vent). Voici le r&eacute;sultat, du foil d&eacute;collant le plus facilement (et permettant de rester en l\'air) , &agrave; celui d&eacute;collant le plus difficilement parmi les foils test&eacute;e ce jour l&agrave;</p>
<ul>
<li>Alpinefoil Race + Aile Regatta 1100</li>
<li>LK race avec aile L</li>
<li>F4 Race 120+ avec aile 1000</li>
<li>Phantom IRIS X avec aile 950</li>
<li>Starboard 95 / 115 / 1000</li>
<li>Gaastra Mach 1</li>
<li>Taaroa Noe 97 freeride</li>
<li>Starboard SuperCruiser carbone</li>
<li>Fanatic Flow 900</li>
<li>AFS 95 avec aile S950</li>
</ul>
<div>Ce test montre que le d&eacute;collage n\'est clairement pas proportionnel &agrave; la surface de l\'aile contrairement aux id&eacute;es re&ccedil;ues. Tous les foils test&eacute;s ici sont &eacute;quip&eacute;s avec des ailes assez grosses mais le Supercruiser avec son aile de 1700cm2 ne sort pas en t&ecirc;te, loin de l&agrave;.</div>
<div>Je pr&eacute;cise que dans le vent tr&egrave;s faible du jour, une fois en l\'air, les vitesses des foils &eacute;taient tr&egrave;s diff&eacute;rentes, et cot&eacute; d&eacute;collage, il a des groupes qui se d&eacute;tachent car certains sont assez proches (l\'alpine et le loke, ensuite les F4, phantom, Starboard, puis le gaastra et le Taaroa)</div>
<div>&nbsp;</div>',
'status' => 'Published',
'views' => 1561,
'last_ip' => '::1',
'created_at' => '2021-11-02 01:00:38',
'updated_at' => '2022-03-23 23:20:36',
),
28 => 
array (
'id' => 45,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2018 - Aout - Conviviale Serre Ponçon',
'description' => 'Conditions météo un peu moins favorables qu\'à l\'habitude pour cette 2e conviviale de l\'été à Serre Ponçon (vent un peu capricieux). ',
'body' => '<p>Conditions météo un peu moins favorables qu\'à l\'habitude pour cette 2e conviviale de l\'été à Serre Ponçon (vent un peu capricieux). Malgré tout, la magie du foil a opérée et tout le monde a pu profiter de cette occasion pour se faire plaisir. Des experts aux débutants, tous on volé et on particulièrement apprécié l\'endroit. Profitez encore plus de la video en la visionnant en HD (petite coche dans les paramètres vidéo)</p><p>Encore un immense merci à Titi et <a class="profileLink" href="https://www.facebook.com/momo.lefevre?fref=mentions" data-hovercard="/ajax/hovercard/user.php?id=1523673242&amp;extragetparams=%7B%22fref%22%3A%22mentions%22%2C%22directed_target_id%22%3A1954474477924786%7D" data-hovercard-prefer-more-content-show="1">MoMo Lefevre</a> pour leur accueil exceptionnel comme d\'habitude ! Si vous montez naviguer au lac, ne ratez surtout pas la charlotte aux pêches du <a class="profileLink" href="https://www.facebook.com/Restaurant-Le-Bus-Ecole-de-voile-Serre-Pon%C3%A7on-Windsurf-129352457204/?fref=mentions" data-hovercard="/ajax/hovercard/page.php?id=129352457204&amp;extragetparams=%7B%22fref%22%3A%22mentions%22%2C%22directed_target_id%22%3A1954474477924786%7D" data-hovercard-prefer-more-content-show="1">Restaurant Le Bus &amp; Ecole de voile Serre Ponçon Windsurf</a></p><iframe width="560" height="315" src="https://www.youtube.com/embed/Q1Q5KeOtEKU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>

',
'status' => 'Published',
'views' => 240,
'last_ip' => NULL,
'created_at' => '2018-08-14 23:27:01',
'updated_at' => '2018-08-14 23:27:01',
),
29 => 
array (
'id' => 46,
'user_id' => 1,
'post_categories_id' => 8,
'title' => 'Plan d\'eau de Pierrlatte',
'description' => 'nc',
'body' => '<p><img src="/storage/photos/1/legacy/b2c349f28c0b3c46321fa32e37a8dc62.jpg"></p><p><img src="/storage/photos/1/legacy/de53f502899ae81a8aa0260850e64077.jpg"></p><p><img src="/storage/photos/1/legacy/aa36a7bb29daacd16d1197974f2b86ee.jpg"></p><p><img src="/storage/photos/1/legacy/974977ef04ca1c0d818db4d3e79b5479.jpg"></p><p><br></p>

',
'status' => 'Published',
'views' => 453,
'last_ip' => NULL,
'created_at' => '2018-08-20 23:55:41',
'updated_at' => '2018-08-20 23:55:41',
),
30 => 
array (
'id' => 47,
'user_id' => 1,
'post_categories_id' => 10,
'title' => 'Voile spécifique ? Comparaison Volt & F-Type',
'description' => 'Comparons F Type de Volt pour comprendre l\'intérêt d\'une voile dédiée au Windfoil',
'body' => '<p><img src="/storage/photos/1/legacy/IMG_7710.jpg" alt="" /></p>
<p>La question de la voile d&eacute;di&eacute;e en Foil se pose de plus en plus. Est ce r&eacute;ellement utile , et si oui en quoi ?</p>
<p>Pour r&eacute;pondre &agrave; cette question, nous avons compar&eacute; sur le m&ecirc;me mat&eacute;riel (flotteur / foil) et dans les m&ecirc;me conditions de vent un peu soutenu, une voile North VOLT , et la Duotone F-TYpe. Les 2 &eacute;taient gr&eacute;&eacute;e sur le m&ecirc;me mat RDM en 4,00m</p>
<p>L\'essai a &eacute;t&eacute; men&eacute; avec un combo Horue Airtime / Starbaord GTS, et un combo Starboard Foil 122 / Lk1</p>
<p>D&egrave;s la prise en main le gr&eacute;ement F-Type parait beaucoup plus l&eacute;ger dans les mains, et cela se confirme dans tous les secteurs de la navigation (manoeuvres, d&eacute;collage, vol, pr&egrave;s etc.).</p>
<p>Le d&eacute;collage est un peu plus rapide avec la Volt qui a plus de puissance statique. Au pumping, la F-Type reprend le devant. Une fois en vol stabilis&eacute;, la F-Type acc&eacute;l&egrave;re beaucoup plus vite, g&egrave;re mieux les surventes, permet de mieux se caler, stabilise le foil, offre une vitesse de pointe plus &eacute;lev&eacute;e. Au cap &eacute;galement, aucune mesure enter les 2 voile, notamment gr&acirc;ce &agrave; l\'appui main arri&egrave;re un peu plus marqu&eacute; sur la F-Type. Certes les 2 voiles sont ax&eacute;es freeride et donc peu rapides dans l\'absolu, mais la diff&eacute;rence entre les 2 est tout de m&ecirc;me flagrante.</p>
<p>Sur le foil le plus en glisse (qui n&eacute;cessite le moins de puissance) , les diff&eacute;rences de performances au portant sont un peu plus liss&eacute;es. Au pr&egrave;s t sur le foil n&eacute;cessitant le plus de puissance, l\'&eacute;cart est plus important.</p>
<p>Au final, en utilisation foill, la F-Type &eacute;crase litt&eacute;ralement la Volt. Que ce soit en terme de performances et que d\'agr&eacute;ment, il n\'y a pas photo !</p>',
'status' => 'Published',
'views' => 876,
'last_ip' => NULL,
'created_at' => '2018-09-04 21:21:02',
'updated_at' => '2022-02-19 22:23:54',
),
31 => 
array (
'id' => 48,
'user_id' => 1,
'post_categories_id' => 1,
'title' => 'Selection flotteur en 2018',
'description' => 'Les flotteurs windfoil : aperçu du marché en 2018',
'body' => '<p>Après avoir été considéré par certains comme une mode, le windfoil est devenu comme nous l\'avions prévu un mouvement de fond, dont on sait tous désormais qu\'il va profondément modifier la pratique du Windsurf, de façon durable. Nombreux sont ceux qui ont découvert cette nouvelle pratique et se posent la question du matériel, en particulier du flotteur.</p>
<p><img src="/storage/photos/1/legacy/7079889ae9333dae3ed195ef4d83f5e8.jpg" /></p>
<h2>Liste des foils testés et compte-rendus</h2>
<p><iframe title="Liste des foils" src="https://www.glissattitude.com/foil/list-boards.php" width="100%" height="650" frameborder="0" marginwidth="0" marginheight="0"></iframe></p>
<h2>Flotteur dédié ou polyvalent</h2>
<p>Lorsque l\'on se met au foil, le première question que l\'on se pose est celle là : puis je en faire avec mon Flotteur actuel ou dois je investir dans un flotteur dédié ?</p>
<p>Il n\'y a pas de réponse toute faite car les 2 sont possibles. A vous de faire votre choix, mais on vous donne ici toutes les pistes pour le faire en connaissance de cause.</p>
<h3>Flotteur polyvalent - Lequel ?</h3>
<p>Si vous prévoyez d\'utiliser votre flotteur actuel, il faut commencer par déterminer si il va convenir.</p>
<p>Pour la très grande majorité des foils, il est nécessaire d\'avoir un flotteur équipé d\'un boitier deep Tuttle, d\'une largeur maxi supérieure à 70cm (75 idéalement), le plus large possible sous le pied arrière et pas trop lourd. Concernant le positionnement des footstraps, il faut privilégier des positions pas trop excentrées (éviter les flotteurs de slalom, ou prévoir de faire modifier la position des inserts par un shapeur).</p>
<p>Les éléments qui précèdent conduisent directement au constat qu\'une planche \'classique\' adaptée à l\'apprentissage du foil est une Freeride ou Freerace autour de 125-135L (Rocket Wide, Speedster, Gecko Ltd, Firestorm, Firerace, Superride, Supersport etc.), équipée d\'un boitier Deep Tuttle. Vous pouvez donc soit acquérir un modèle 2018, dont la plupart sont équipés de boitiers spéciaux foil, soit faire changer le boitier de votre planche actuel (souvent power box).</p>
<p>D\'ici quelques semaines, une nouvelle possibilité s\'offre à vous avec l\'arrivée de foils équipés d\'un talon powerbox (NeilPryde et Alpine). Certes le choix est encore très limité, mais cela permet d\'utiliser votre flotteur de freeride sans modification.</p>
<p>Même si c\'est une tendance que l\'on observe par facilité, nous vous conseillons d\'éviter</p>
<ul>
<li>les purs flotteurs de slalom dont la position des straps rendent la pratique du foil complexe. Il est plus difficile pour trouver un équilibre et exploiter les straps arrière est loin d\'être évident. Si vous optez pour cette solution, je vous conseille se faire placer des inserts de straps supplémentaires pour vous permettre d\'avoir le pied plus à plat sur la planche, cela va grandement vous faciliter les choses.</li>
<li>les flotteurs très larges (type formula) car ils nécessitent une forte poussée vélique, donc incitent à utiliser des grosses voiles (c\'est une nécessité pour vaincre l\'énorme résistance à l\'avancement de ces flotteurs). Cela limite énormément l\'apprentissage de la finesse de navigation qui est une des composantes essentielles du Windfoil. Ca va aussi à l\'encontre du concept qui permet d\'utiliser des gréements légers, et un équipement compact et simple.</li>
</ul>
<h3>Flotteur dédié - Quel intérêt ?</h3>
<p>Si vous voulez pratiquer régulièrement le foil avec confort et facilité, la voie royale consiste à acquérir un flotteur dédié. Il y a désormais un choix assez vaste sur le marché pour contenter tout le monde. Par contre, il est évident que cela suppose d\'acheter un flotteur neuf car le marché de l\'occasion est quasi inexistant à ce jour. Les quelques occasions que l\'on trouve correspondent la plupart du temps à des flotteurs qui n\'ont pas plût, ou des premières générations .. désormais un peu dépassés par l\'évolution rapide dans ce domaine.</p>
<h4>En quoi un flotteur dédié diffère d\'un flotteur classique de windsurf ?</h4>
<p>Même si beaucoup d\'entre vous pensent que le flotteur est un élément annexe en foil car on est en l\'air, vous vous trompez lourdement, et ceci pour 2 raisons principales :</p>
<ul>
<li>d\'une part le pilotage du foil passe par le flotteur, et la géométrie des appuis et des poussées est essentielle pour trouver un équilibre en navigation. De ce fait, la position du boitier d\'aileron, la position latérale et longitudinale des footstraps, et la position du boitier de pied de mat jouent un rôle majeur dans la stabilisation du vol, et donc sur le confort de navigation</li>
<li>d\'autre part, voler suppose décoller dans un premier temps, atterrir à la fin, et malheureusement gérer régulièrement des touchettes (voir plus) dans la phase de vol. Sur toutes ces phases de non vol, le shape du flotteur est important.</li>
</ul>
<p>Pour ces 2 raisons principales, le shape des flotteurs dédiés au windfoil s\'éloigne de plus en plus du shape des flotteurs traditionnels car les contraintes sont différentes. Si on regarde de près, on va même remarquer qu\'il y a peu de points communs entre un flotteur de windfoil et de windsurf :</p>
<ul>
<li>Les flotteurs de windfoil sont plus compacts (moins longs et plus larges)</li>
<li>Les flotteurs de windfoil sont très larges sous le pied arrière</li>
<li>Les footstraps sont plus centrés pour avoir tout le pied posé sur la planche</li>
<li>Le plan de pont est plus plat sous les pieds</li>
<li>Les rails sont différents pour éviter les coups de freins lors des touchettes</li>
<li>La carène est travaillée pour ne pas coller lors des amerrissages plus ou moins voulus et brutaux</li>
<li>etc.</li>
</ul>
<h4>Le flotteur convertible a t il un intérêt ?</h4>
<p>Même si c\'est une tendance qui a intéressé les industriels dans un premier temps (pour des raisons essentiellement commerciales), c\'est en train de disparaître. La raison en est assez simple: avec l\'accessibilité du foil, 90% des pratiquants qui font l\'effort d\'apprendre le windfoil ne reviennent plus en arrière. Une fois que l\'on a gouté à cette glisse magique, il est hors de question de repasser à une navigation en aileron dans la plage 8-15 knt ! Comme par ailleurs les flotteurs convertibles font au moins 80cm de large, on imagine mal les utiliser dans 20knt de vent. La conséquence est que les propriétaires de flotteurs convertibles n\'ont, pour la très grande majorité, jamais même essayé leur flotteur en mode aileron.</p>
<p>Il reste malgré tout un secteur où le flotteur convertible a tout son intérêt : dans les clubs. Que ce soit pour une question de rentabilité du matériel, ou pour limiter le cout d\'investissement pour les jeunes qui pratiquent ls 2 disciplines, l\'intérêt esst évident. </p>
<h2>Les 3 types de flotteurs de foil</h2>
<p>Quand on parle de flotteurs dédiés, on peut globalement les classer en 3 catégories en fonction du type de navigation que l\'on souhaite adresser : les windfoil freeride, les windfoil freerace, les windfoil race. En voici une présentation rapide</p>
<p><strong>Flotteur wind foil freeride</strong> : l\'objectif est de naviguer avec des petites voiles légères (2m2 de moins qu\'en windsurf, essentiellement sans cam), avec une position assez debout (y compris sans harnais lorsque l\'on maîtrise, et éventuellement strapless), en privilégiant la glisse, la maniabilité et la finesse. Dans ce mode de navigation, on privilégie la légèreté et une dépense physique la plus réduite possible. La navigation se fait essentiellement au travers. Les flotteurs ne sont pas très larges (autour de 75cm) et assez pincés à l\'arrière pour faciliter l\'accélération malgré une poussée vélique faible. Les carènes sont optimisées pour apporter un maximum de douceur. Ces flotteurs s\'utilisent avec des foils à mat assez courts (entre 70 et 80cm) qui peuvent se permettre d\'être pas très raide (la navigation en position droite sollicite assez peu le mat). Les modèles dédiés : Starboard Foil 100, 111, et 122; JP Hydrofoil 120; Horue Tiny; Slingshot Wizzard; Exocet Freefoil 112 et 132; Fanatic StingRay 125 et 140</p>
<p><strong>Flotteur wind foil freerace</strong> : l\'objectif est de naviguer avec des voiles moyennes (1m2 de moins qu\'en windsurf, en général avec 2 ou 3 cam). La position est plus standard, avec une utilisation importante de la contre gîte, et un appui fort dans le harnais. On privilégie la vitesse, les performances dans le vent très léger, et le cap pour explorer le plan d\'eau. Compte tenu des forces mises en jeu, la navigation est plus physique qu\'en mode freeride. Les flotteurs sont plus larges et nécessitent plus de puissance pour les faire accélérer. Il faut donc une technique de pumping plus aboutie. Les flotteurs possèdent un maître beau très reculé, avec un forte largeur sur le dernier 1/4 arrière afin d\'offrir un bras de levier important pour contrôler le foil. Ces flotteurs s\'utilisent avec des foils à mat assez longs (autour de 95cm) présentant le plus de rigidité possible. Les modèles dédiés : Starboard Foil 144; JP Hydrofoil 135; Horue Airtime et Slant; Exocet RF 81; Tabou AirRide 81; RRD HFire V1; AHD thunderbold 85 et 75 ; Elix F1X M.</p>
<p><strong>Flotteur wind foil race PWA</strong> : développés pour courir en PWA, ces flotteurs sont optimisés pour une pratique très spécifique du foil en mode course Up&amp;Down (parcours banane remontée au vent brutale puis quasi vent arrière) dans moins de 12 knt. Les flotteurs font 91cm de large (jauge PWA) et sont conçus pour s\'associer à des voiles dont la surface est compris entre 9 et 10m2. Le développement de ces flotteurs suit un seul objectif : offrir le plus d\'appui possible pour remonter au vent avec des foils ultra puissants. Les côtés accessibilité, confort, et agrément sont mis de côté. Les outlines ressemblent à des rectangles et les rails sont très épais. Pour pouvoir mettre en branle de tels flotteurs dans des vents légers, il faut au minimum 8.5m2 (gabarits légers) mais plus souvent 9 ou 10m2. Comme tenu des bras de levier énormes de ces flotteurs, il ne peuvent s\'utiliser décemment qu\'avec des foils très rigides, très solides et longs (mats de plus de 1m). Les modèles dédiés : toutes les marques présentes en PWA en proposent une.</p>
<h2>L\'adéquation Flotteur / Foil / Gréement</h2>
<p>Si il y a bien une constante entre le windsurf et le windfoil, c\'est bien que l\'<strong>adéquation</strong> entre les différents éléments de votre équipement est plus importante que la<strong> performance individuelle</strong> de chaque élément. On le dit, et on le répète à longueur de journée, mais il est essentiel de respecter des associations pertinentes.</p>
<p>Dans la très très grande majorité des cas, les pratiquants que l\'on voit galèrer en windfoil ont un équipement mal conçu. Malheureusement, la volonté de réutiliser ce que l\'on a déjà coute que coute est souvent le meilleur moyen de se retrouver avec un équipement non adapté. Au palmarès des associations bancales que l\'on a eu l\'occasion d\'observer, on a le foil freeride monté sous une formula, avec une voile sans cam ... ou encore le foil de course monté sous une board freeride, utilisé avec une vielle voile de course bien lourde gréée sur un mat 75% et un Wishbone aluminium.</p>
<h4>Attention aux "ont dit" !</h4>
<p>Avec une présence importante sur les spots et les forums, nous avons vu, lus et entendu de tout ... du plus censé au plus loufoque. Beaucoup de pratiquants vous assurerons que leur choix est le bon choix, même lorsque ça défie les lois de la logique voir de la physique. Ils oublieront juste de vous dire qu\'il n\'ont jamais vraiment essayé sérieusement autre chose. Il est quelquefois sidérant d\'essayer le matériel de certains de nos clients croisés sur les spot :on se demande comment ils font pour naviguer ainsi tant c\'est inconfortable ... et pourtant ils nous assurent qu\'ils s\'éclatent. Quand on leur fait essayer un ensemble cohérent qui fonctionne, ils tombent des nues =:)</p>
<p>En dehors du respect du programme des différents éléments constituant votre équipement , il y aussi des adéquations à respecter entre le foil et le flotteur , ainsi qu\'entre le flotteur et la voile.</p>
<h4>Adéquation flotteur / foil</h4>
<p>Comme on l\'a vu dans la présentation des types de flotteur, il est important d\'associer des éléments de programme cohérent, en évitant par exemple d\'utiliser un foil trop souple sur une board de freerace, ou un mat de foil trop long sur une planche étroite. Il convient aussi d\'associer des modèles qui vont ensemble en terme d\'équilibre longitudinal : les foils plutôt pied arrière devront être associés à des Boards dont les footstraps auront une position assez reculée, et vis versa. Nous sommes là pour vous éviter les erreurs les plus grossières.</p>
<h4>Adéquation flotteur / voile</h4>
<p>C\'est le domaine le plus complexe à appréhender tant les idées reçues sont encrées. On le sait, le foil attire avant tout les débutants pour son côté light wind. Ils ne passent à une navigation foil tout temps qu\'après plusieurs mois ou saisons de pratique.</p>
<p>Pour de nombreux planchistes "aileron", petit temps rime avec flotteur large. Ils font donc souvent ce raccourci erroné : "pour naviguer dans le light, il suffit de prendre un flotteur le plus large possible, un foil et une petite voile ("on m\'a dit qu\'avec le foil tu mets 2m2 de moins"). Passé les premières sessions pour appréhender la bête, on les voit tous revenir en nous disant "je ne comprend pas, il me faut entre 15 et 20 knt de vent pour voler, ce n\'est pas normal" ... oui, je confirme, ce n\'est pas normal !!! Tout simplement parce qu\'un flotteur large nécessite une poussée vélique importante pour le faire accélérer. N\'oublions pas que les formula étaient utilisées avec 11.7m2, et qu\'un flotteur de 135L s\'utilise souvent avec 8,5m2. Même si le foil permet de naviguer dans peu de vent, ne croyez pas que vous arrivez à faire décoller une planche de 85cm de large avec 7m2 dans 8 knt de vent, c\'est tout simplement impossible à moins de peser 45kg.</p>
<p>Si on a compris ce qui précède, on en déduira que le choix de la taille de voile max (pour le petit temps) est très lié au choix du flotteur ... ou que le choix du flotteur doit se faire en fonction de la voile que l\'on compte utiliser. Avec le même foil, le même modèle de voile et dans les mêmes conditions, si on a besoin de 7,5m2 pour un flotteur de 80cm de large, il faudra 8,6m2 au minimum pour un flotteur de 90cm de large ... c\'est un test que nous avons fait à plusieurs reprise et qui s\'est vérifié à chaque fois.</p>
<p>Vous en déduirez aisément que</p>
<ul>
<li>Si vous voulez naviguer avec 7m2 max dans le light, choisissez un flotteur de 75cm de large</li>
<li>Si vous voulez naviguer avec 8m2 max dans le light, choisissez un flotteur de 80cm de large</li>
<li>Si vous voulez naviguer avec 9 ou 10m2 dans le light, choisissez un flotteur de 90cm de large</li>
<li>Si vous voulez naviguer avec 5m2 max dans le light, choisissez un flotteur de 70cm de large, une voile ultra légère et un pacemaker car il va falloir être (très) énergique .. mais c\'est possible ;)</li>
</ul>
<p>Bien sûr, ces valeurs sont indicatives pour un gabarit moyen possédant une très bonne technique et désirant naviguer entre 8 et 10 knt. Il est évident qu\'un gabarit de 90kg devra toiler au moins 7.8m2 pour naviguer dans ces conditions.</p>
<h2>Comparatif flotteurs freeride</h2>
<p>C\'est la catégorie la moins représentée au sein des flotteurs dédiés. Malheureusement, la plupart des marques considèrent que le pratiquant freeride n\'a qu\'à utiliser un flotteur conçu pour une navigation en aileron. Ils ignorent ainsi tous les adeptes de foil qui ne sont pas intéressés par la vitesse et le tirage de bourre, mais qui veulent aussi profiter des avantages d\'un flotteur dédié.</p>
<p>Pourtant, 3 des 5 flotteurs que nous allons évoquer représentent probablement plus de 50% des ventes de flotteurs dédiés foil à ce jour (Horue Tiny en tête).</p>
<p>Je n\'évoquerai que très rapidement la Wizzard , que nous avons eu en test dans une version extrême de 103 pour un longueur de 1m52 , et la Femto !!! Pour un gabarit moyen, ces flotteurs sont clairement pointu d\'accès et nécessitent du vent. Le pied de mat est quasiment sur le nez de la planche, et la longueur très courte ne favorise pas la glisse pour décoller ... ni d\'ailleurs pour gérer les touchette et les posés. Une fois en l\'air, c\'est un véritable jouet ultra maniable. Les straps sont tellement centrés qu\'on ne cherchera même pas à se caler sur un bord. Au contraire, on va naviguer très debout sur des bords courts pour enchainer les manoeuvres. Les spécialistes du freestyle, adeptes d\'une navigation tout en finesse trouveront certainement là un nouveau moyen d\'expression.</p>
<p>Les <a href="/blog/windfoil-test-vini.html">Horue Tiny (test)</a> , <a href="/blog/windfoil-test-flotteur-stb-foil-122.html">Starboard Foil 122 (test)</a> et <a href="/blog/windfoil-test-hydrofoil-120-2019.html">JP Hydrofoil 120 (test)</a>, Fanatic StingRay et Exocet Freefoil 112 et 132 sont des flotteurs plus standards et plus adaptés au commun des mortels.</p>
<p>La tiny est un flotteur conçu il y a déjà 3 ans. C\'est la plus pincée à l\'arrière et la plus légère. Après avoir été pendant 2 ans le seul flotteur dédié de série, elle reste d\'actualité pour une navigation 100% freeride. Très adaptée au foil Horue Vini plutôt souple, elle excelle dans la maniabilité (freestyle) et un décollage facile grâce à sa faible largeur arrière, et son poids plume. Par contre, elle supporte difficilement les grandes voiles (7m grand max, 6,5 idéalement) et les foils puissants (à éviter absolument). A noter : sa construction (usine Flika en Pologne) exemplaire avec un ratio Solidité / Poids incomparable avec les productions Cobra.</p>
<p>Plus récentes, les Starboard Foil 122, JP Hydrofoil 120 Fanatic StingRay et Exocet Freefoil  correspondent à une vision plus moderne et plus sportive du foil freeride. Pour des gabarits légers, ces 4 flotteurs peuvent être d\'ailleurs utilisés en mode freerace. il est possible d\'utiliser des voiles plus grandes (7,5 max), et surtout des foils plus raides, plus longs et un peu plus puissants (ne pas exagérer). Cela donne plus de choix dans les associations, et en général un comportement plus sain dans les vents irréguliers et le clapot . La Foil 122, grâce à sa longueur, gagne la palme du décollage le plus facile dans le light car elle offre la meilleure glisse et la meilleure accélération. La JP, quant à elle, établi une nouvelle référence en terme de douceur des touchettes à la contre gîte. La foil 122, plus longue et avec des straps assez avancés, a tendance à calmer les foils un peu nerveux et matche avec les foils plutôt pied avant ou centrés. Elle se marie parfaitement avec le Loke Lk1 et les Starboard GT, Alpine A1, AFS 85, mais aussi avec la plupart des foils alu (à l\'exception du NP). La JP, plus courte et sans inertie, va au contraire libérer les foils et s\'associer aux foils centrés ou pied arrière. Elle s\'associe parfaitement avec les Starboard GT, GT alu, NP Alu, Taroa Noe, et certainement Zeeko (pas testé). Les 2 nouvelle Excoet Freefoil 112 et 132 apportent un côté ludique encore plus prononcé, et leur excellent contrôle en font un véritable prolongement de vos jambes.</p>
<h2>Comparatif flotteurs free-race</h2>
<p>Cette catégorie offre un choix plus vaste, et commence à attirer de plus en plus de pratiquants. Elle intéresse ceux qui ont fini leur période d\'apprentissage et recherchent plus de vitesse, mais aussi certains débutants rompus à l\'utilisation des voiles à camber, et adeptes du tirage de bourre entre potes.</p>
<p>Dans ce comparatif, je n\'évoquerai pas la Starboard Foil 147 qui est avantageusement remplacée cette année par la 144, ni les AHD thunderbold et RRD HFire<span class="redactor-invisible-space"> V1que je n\'ai pas testé .</span></p>
<p>Starboard Foil 144; <a href="/blog/windfoil-test-flotteu-hydrofoil-135.html">JP Hydrofoil 135 (test)</a> ; <a href="/blog/windfoil-presentation-airtime-hru.html">Horue Airtime (test)</a> ; <a href="/blog/test-slant-windfoil-board.html">Horue Slant (test)</a>; <a href="/blog/windfoil-test-flotteur-exo-rf-81.html">Exocet RF 81 (test)</a> ; <a href="/blog/windfoil-lix-f1x-le-test.html">Elix F1X M (test)</a>; <a href="https://marseille.glissattitude.com/windfoil/u38234s1-tabou-airide-ltd-tabou-2019.html">Tabou AirRide 81</a> (<a href="https://marseille.glissattitude.com/blog/windfoil-test-ariride-81.html">test</a>)</p>
<p>Parmi ces flotteurs, l\'un d\'eux se démarque par son shape plus traditionnel. La <strong>JP Hydrofoil 135</strong> est la plus ancienne en terme de conception, et a été au départ conçu comme une planche convertible. Après 2 ans de bons et loyaux services, elle en reprend pour une saison de plus (2019) sans changement de shape. Pourtant, elle moins d\'être dépassée ! Avec un arrière plus pincé que les 5 autres, c\'est la plus "freeride" de la catégorie. C\'est donc aussi la plus accessible et on la conseille les yeux fermés aux débutant foil qui y trouveront un flotteur facile et peu physique. Bien sûr, elle est moins l\'aise quand on charge en toile ou si on lui associe des foils puissants car le bras de levier est plus court. Ses rails ont aussi une fâcheuse tendance à scotcher en cas de touchette. On regrette donc juste que quitte à changer la déco pour 2019, JP n\'en ai pas profité pour lui mettre les mêmes rails que sur les nouvelles 120 et 150. Comme toutes les JP, la 135 a des straps plutôt reculés. Si on associe ceci à une largeur moindre à l\'arrière, il faut éviter de les foils "pied avant" si on ne veut pas galérer dans le vent (Loke Envol, Starboard Race, AFS 95) .. certes ça se gère avec des cales, mais à choisir autant aller vers un foil réellement approprié.</p>
<p>La <strong>Horue Slant</strong> possède aussi un shape un peu traditionnel avec un maître beau avancé, mais cette fois le flotteur est 100% dédié windfoil (Gros V devant, rails tombés). Nous n\'avons jamais au final pu essayer une version définitive avec les straps plus centrés. On retrouve sur cette planche la qualité de fabrication Flika, et une carène très douce signée horue qui décolle tôt. Le plan de pont est assez particulier avec ses plans inclinés pour mettre les pieds ... on aime ou pas.</p>
<p>L\'<strong>Elix F1X M</strong> est plus délicate à prendre en main que la moyenne. Par sa position de straps, ses cuts et son plan de pont, elle impose des vrais changements d\'habitude qui prennent un peu de temps. Il faut donc faire l\'effort de s\'y habituer et cela peut prendre quelques nav\' pour les habitués, et une petite saison pour les débutants. Passé l\'adaptation, on décèle un très bon potentiel à condition d\'y adjoindre un foil bien né, avec un ensemble mat fuselage très raide. Tout comme la Exocet RF81, le décollage nécessite pas mal de puissance, donc soit des grandes voiles, soit une technique de pumping dynamique et vigoureuse. Dans tous les cas, c\'est un flotteur puissant assez magique dans l\'exercice du près (très serré) et des allures (très) abattues. En terme de contrôle dans le vent soutenu, elle est moins facile que les planches comme les RF81, Airtime ou Foil 144 (leur plan de pont facilite les choses). Elle s\'associe facilement avec tous les foils rigides sauf quelques cas extrêmes (Starboard Race par exemple avec lequel il faut caler le stab).</p>
<p>Avec les <strong>Starboard Foil 144</strong><strong>, Horue Airtime, Tabou AirRide 81 et Exocet RF81</strong>, on rentre dans les fiotteurs les plus récents de conception, mais aussi les plus novateurs en terme de shape. Ce sont des flotteurs compacts (courts ou avec peu de volume devant), et très larges sous le pied arrière. Le plan de pont des 3 planches est différent, mais réellement adapté au foil. Il y en a pour tous les goûts: du pont 100% plat sur l\'exocet qui offre un contrôle impressionnant dans les conditions difficiles, à un pont semi bombé plus traditionnel sur la Foil 144, en passant par une solution intermédiaire sur la Airtime. Pour ce qui est des touchettes sur le rail ou à plat, les 3 planches font quasi jeu égal à condition d\'avoir un <a href="/blog/reglages-windfoil-le-rake.html">rake bien réglé</a>. Il y a un petit avantage pour les Airtime et RF81 dans le clapot mais c\'est léger. Pour ce qui est du comportement dans le light (peu de vent, grosses toiles), les 3 planches imposent de s\'adapter à l\'arrière large avec un pumping vigoureux, plus abattu qu\'avec un flotteur traditionnel, et une position plus reculée du pilote. Ceci est encore plus marqué sur les RF et Airtime qui ont peu de volume devant. Dans ces conditions, la Airtime est clairement celle qui accélère le plus facilement, suivie par la Foil 144 (7cm de largeur en plus). La RF81 ferme la marche en demandant plus de puissance pour s\'exprimer ... un point qui peut décourager ceux qui manquent de technique au pumping. En l\'air, c\'est tout le contraire : la RF81 est la plus stable quelques soient les conditions .. que ce soit light ou mouvementé, le contrôle est surprenant de facilité. Les Foil 144, AirRide et Airtime font jeu égal : l\'une (Airtime) avec un pont plus plat qui permet de contrôler et de passer facilement de la puissance (on va plus facilement vite), l\'autre (Foil 144) avec un arrière offrant moins de contrôle, mais une largeur qui stabilise encore plus l\'assiette longitudinale du foil (on fait moins le yoyo). La AirRide est un parfait compris entre pont plat et incurvé. En terme de feeling général, la Airtime et la AriRide sont les plus légères à la fois sur la balance et en sensation. la AirTime la plus solide en construction. La Foil 144 est plus volumineuse avec ses rails épais, mais la plus facile au virement de bord car elle s\'effonce moins devant. C\'est aussi la plus adaptée aux gros gabarits te/ou aux grosse voiles (testée en voile Race 9m foil). Quant à la RF81, elle peut paraître plus pataude, mais ce qui la pénalise un peu dans le light est en même temps ce qui participe clairement à son contrôle impressionnant en l\'air.</p>
<p>Vous l\'avez compris, difficile d\'avoir une préférence car chacun de ces flotteurs a son propre caractère. Chacun choisira en fonction de ses critères et du foil auquel il souhaite l\'associer.</p>
<h3>Comparatif flotteurs race</h3>
<div>N\'ayant absolument aucune envie d\'aller me frotter à des voiles de 9m2 et plus, je serai très intéressé si quelqu\'un se dévouait pour réaliser un comparatif objectif après avoir testé tous ces flotteurs. Avis aux amateurs :)</div>
',
'status' => 'Published',
'views' => 3618,
'last_ip' => NULL,
'created_at' => '2018-10-02 00:14:00',
'updated_at' => '2018-10-02 00:14:00',
),
32 => 
array (
'id' => 49,
'user_id' => 1,
'post_categories_id' => 2,
'title' => 'Les clés pour débuter en foil',
'description' => 'Voici les clés pour un apprentissage zen et efficace du windfoil',
'body' => '<h2>SOMMAIRE</h2>
<p>Voici les cl&eacute;s pour un apprentissage zen et efficace du windfoil :</p>
<ul>
<li>Apprentissage Step by Step : de la patience&nbsp;</li>
<li>Matos - ne pas changer trop vite&nbsp;</li>
<li>Bien choisir son gr&eacute;ement : un &eacute;l&eacute;ment tr&egrave;s important&nbsp;</li>
<li>Le foil , ce n\'est pas que le light wind, et la c&eacute; des premiers vols est un vent r&eacute;gulier autour de 15 knt&nbsp;</li>
<li>D&eacute;collage vs contr&ocirc;le : ne pas se tromper de cible</li>
<li>Naviguer dans l\'ultra light - de la patience, il faut d&eacute;j&agrave; de la technique</li>
</ul>
<h2>Pr&eacute;parer ses premiers vols</h2>
<p>Pour faire vos premiers vols le plus facilement possible, l\'&eacute;l&eacute;ment le plus important est le vent : privil&eacute;gier un vent moyen r&eacute;gulier autour de 15 knt et une mer plate. Essayer de d&eacute;buter dans 20 knt ou pire 10knt, c\'est mission impossible.</p>
<p>Equipez vous d\'une voile de taille mod&eacute;r&eacute;e, la plus l&eacute;g&egrave;re possible, type Freeride 6m2. On ne d&eacute;bute surtout pas avec une 7,5 &agrave; cambers et fourreau large !</p>
<p>Faites vos premi&egrave;res sessions sans harnais, et enchainez des petites sessions de l\'ordre de 15-20 mn</p>
<p>Pendant les premi&egrave;res sessions, vous ne mettrez pas le pied dans le strap arri&egrave;re. Vous pouvez les retirer pour pouvoir positionner votre pied &agrave; loisir, cela vous aidera &agrave; trouver votre &eacute;quilibre.</p>
<p>Suivez les r&egrave;gles de s&eacute;curit&eacute; suivantes</p>
<ul>
<li>Jamais de waterstart</li>
<li>on ne lache jamais le gr&eacute;ement, m&ecirc;me si on doit finir sous &agrave; la voile, ou &agrave; genou dans celle-ci</li>
</ul>
<h2>Premi&egrave;re session</h2>
<p>Pour cette prise de contact avec le foil, votre premi&egrave;re mission va &ecirc;tre de ne pas d&eacute;coller (si si, vous avez bien lu). Faites 2 ou 3 allers-retours en essayant de faire planer la planche sans faire d&eacute;coller le foil. Pour cela, vous allez vous entrainer &agrave; faire acc&eacute;l&eacute;rer la planche jusqu\'au planning avec le pied avant dans le strap en essayant de rester le plus droit possible sur votre flotteur (d\'o&ugrave; la n&eacute;cessit&eacute; d\'avoir un peu de vent) sans vous pencher en arri&egrave;re et sans appuyer sur le pied arri&egrave;re.</p>
<p>D&egrave;s que vous allez sentir que la planche veut s\'&eacute;lever, vous mettez votre poids sur le pied avant, et vous ouvrez une peu la voile. Le flotteur se re-pose, et vous pouvez recommandez &agrave; border. Vous allez r&eacute;aliser cet exercice sur au moins 2 bords complets, jusqu\'&agrave; avoir bien ressenti la transition entre le planning et le d&eacute;but du vol.</p>
<p>L\'&eacute;tape suivante va consister &agrave; laisser le flotteur s\'&eacute;lever tr&egrave;s l&eacute;g&egrave;rement sur quelques m&egrave;tres, puis &agrave; remettre le poids sur l\'avant pour le re-poser. Graduellement, vous allez r&eacute;p&eacute;ter cette op&eacute;ration tout en allongeant petit &agrave; petit les vols. Durant toute cette phase, il va falloir surveiller 2 &eacute;l&eacute;ments : on reste parfaitement droit &agrave; l\'aplomb de la planche, et on emp&ecirc;che la planche de l\'&eacute;lever &agrave; plus de 10-15cm de l\'eau. A ce stade, exercez vous &agrave; g&eacute;rer l\'appui pied avant / pied arri&egrave;re en d&eacute;pla&ccedil;ant votre bassin vers l\'avant ou vers l\'arri&egrave;re (d\'o&ugrave; l\'int&eacute;r&ecirc;t de travailler sans harnais). Petit &agrave; petit, combinez ceci avec le d&eacute;placement de votre gr&eacute;ement.</p>
<h2>la suite</h2>
<p>Lorsque vous saurez d&eacute;clencher &agrave; loisir le vol, et g&eacute;rer des vols de plus de 200m, vous allez pouvoir descendre en taille de voile pour pouvoir &ecirc;tre plus &agrave; l\'aise dans les phases de vol. En g&eacute;n&eacute;ral, comptez entre 1 et 2m2 de moins que ce que vous aviez utilis&eacute; en Windsurf traditionnel.</p>
<p>L\'&eacute;tape suivante sera de remettre votre harnais, et d\'apprendre &agrave; g&eacute;rer le vol malgr&eacute; une position plus bloqu&eacute;e par le harnais. Pensez &agrave; d&eacute;synchroniser au maximum le haut du corps (qui g&egrave;re le gr&eacute;ement) et les jambes (qui g&egrave;rent l\'assiette du foil).</p>
<p>Une fois cette &eacute;tape maitris&eacute;e, vous pouvez r&eacute;-installer vos straps arri&egrave;re et vous habituer &agrave; la gestion du vol avec harnais et pied arri&egrave;re dans le strap.</p>
<div class="container" style="background-color: #efefef; padding: 50px 0 57px;">
<h3>L\'ESSENTIEL</h3>
<div class="row">
<div class="col-lg-4">
<h3>Patience</h3>
<p>L\'apprentissage du foil PREND DU TEMPS ! C\'est un postulat qu\'il faut int&eacute;grer d&egrave;s le d&eacute;but sous peine de d&eacute;ception.</p>
</div>
<div class="col-lg-4">
<h3>Mat&eacute;riel</h3>
<p>Que ce soit foil, flotteur ou gr&eacute;ement, chaque &eacute;l&eacute;ment est important (et pas seulement le foil). Privil&eacute;giez coh&eacute;rence &agrave; quantit&eacute;.</p>
</div>
<div class="col-lg-4">
<h3>Light Wind</h3>
<p>Ne vous focalisez pas uniquement sur le light wind. D\'abord cela demande de la technique, et vous prendrez aussi du plaisir dans le vent</p>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4">
<h4>Apprentissage : de la patience</h4>
<p>L\'apprentissage du foil PREND DU TEMPS ! C\'est un postulat qu\'il faut int&eacute;grer d&egrave;s le d&eacute;but sous peine de d&eacute;ception. Si vous avez appris le windsurf (et m&ecirc;me si c\'est loin), vous savez ce que c\'est ... donc m&ecirc;me si vous &ecirc;tes de cador du spot, rappelez vous que rien ne se fera en 5 sessions.</p>
<p>Comme tout apprentissage, l\'&eacute;volution de fait par marches, avec quelques fois des moment o&ugrave; vous aurez l\'impression de stagner. Il faut &ecirc;tre patient et ne pas br&ucirc;ler les &eacute;tapes.&nbsp;</p>
<p>On arrive tr&egrave;s vite &agrave; voler, mais aller de quelques vols &agrave; une parfaite maitrise de l\'assiette du flotteur, et une disociation entre les pieds (qui g&egrave;rent la planche et l\'incidence du foil) &nbsp;et le haut du corps (qui g&egrave;re la gr&eacute;ement et les allures) prend pas mal de temps. Ce sont les heures pass&eacute;es sur l\'eau qui feront la diff&eacute;rence !&nbsp;</p>
</div>
<div class="col-lg-4">
<p>L\'apprentissage foil met en oeuvre beaucoup de&nbsp;propriosception, les diff&eacute;rents individus sont donc tr&egrave;s in&eacute;gaux devant cet apprentissage. En moyenne, je dirai qu\'il faut</p>
<ul>
<li>2 sessions pour faire ses premiers sauts de puce</li>
<li>4 sessions pour faire des vols stabilis&eacute;s d\'une 100aine de m, reproductibles</li>
<li>6 sessions pour se d&eacute;tendre en vol</li>
<li>10 sessions pour faire des bords complets en vol</li>
<li>20 sessions pour commencer &agrave; g&eacute;rer un vent un peu soutenu</li>
<li>30 sessions pour &ecirc;tre r&eacute;ellement efficace dans le light, et boucler ses premiers jibes en l\'air</li>
<li>40 sessions pour &ecirc;tre &agrave; l\'aise dans des vents irr&eacute;guliers</li>
</ul>
</div>
<div class="col-lg-4">
<h4>Mat&eacute;riel - ne pas changer trop vite</h4>
<p>Au risque d\'en choquer certains, je rappelle que LA TECHNIQUE NE S\'ACHETE PAS. Ce n\'est pas en changeant de mat&eacute;riel toutes les 3 minutes que vous progresserez plus vite.&nbsp;</p>
<p>D\'un c&ocirc;t&eacute;, on entend partout que le mat&eacute;riel de foil est cher, et d\'un autre c&ocirc;t&eacute;, on observe beaucoup de pratiquants qui changent de foil avant m&ecirc;me d\'avoir fait le tour du pr&eacute;c&eacute;dent.&nbsp;</p>
<p>J\'avoue que &ccedil;a fait plaisir aux commer&ccedil;ants que nous sommes, mais nous ne rappelerons jamais assez que ce sont les heures pass&eacute;es sur l\'eau qui font progresser, et pas le changement syst&eacute;matique de mat&eacute;riel.&nbsp;</p>
<p>Un tr&egrave;s bon exemple : 80% des propri&eacute;taires de foil NP RS Flight AL les ont revendu avant m&ecirc;me d\'avoir boucl&eacute; 20 sessions. Pourtant, c\'est un foil qui propose des perfs loin d\'&ecirc;tre ridicules, et qui pourrait vous surprendre aux main d\'un foileur exp&eacute;riment&eacute;.</p>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4">
<h4>Bien choisir son gr&eacute;ement</h4>
<p>Quand on parle de windfoil, on entend souvent 2 commentaires correspondant &agrave; des id&eacute;es re&ccedil;ues erron&eacute;es : "en foil : le flotteur importe peu puisque l\'on est en l\'air", et "on peut utiliser n\'improte quel gr&eacute;ement". En ce qui converne le 2e point, il n\'en est rien car le gr&eacute;ement &agrave; une influance tr&egrave;s importante sur 2 points</p>
<ul>
<li>la facilit&eacute; d\'utilisation du foil</li>
<li>le plaisir pris en naviguant (ce qui est un peu l\'essentiel, non ?)</li>
</ul>
<p>... et son choix est donc loin d\'&ecirc;tre anodin.&nbsp;</p>
<p>Cela ne veux pas dire qu\'il faut y mettre tr&egrave;s cher, mais juste qu\'il faut bien le choisir. Encore plus qu\'en windsurf, la l&eacute;g&egrave;ret&eacute; et l\'effiacit&eacute; du mat sont des &eacute;lements tr&egrave;s importants .. bien plus que la perf pure de la voile. De m&ecirc;me, nul n\'est besoin d\'avoir 6 voiles pour faire du windfoil : 3 suffisent largement pour couvrir la plage de vent de 7 &agrave; 30 knt. Gardez moins de mat&eacute;riel, mais soignez les associations et ne n&eacute;gligez pas le mat.</p>
<p>En terme de surface, et &agrave; moins de peser 95kg, aucun int&eacute;r&ecirc;t de d&eacute;passer 8m2 ... privil&eacute;giez pour le light des voiles l&eacute;g&egrave;res et dynamiques &agrave; de lourdes voile de race. Il faut aussi une choisir une surface suffisament petite pour garder un pumping dynamique. Pour donner une id&eacute;e, mon &eacute;tagement de voile (gabarit de 78kg) est 7,8 - 6,7 - 5m ... et c\'est largement suffisant !</p>
</div>
<div class="col-lg-4">
<h4>Le foil : ce n\'est pas que le Light Wind</h4>
<p>La plupart des d&eacute;butants en foil sont attir&eacute;s par les performances dans le vent l&eacute;ger. 90% des pratiquants consid&egrave;rent ainsi que le foil va compl&eacute;menter le windsurf dans des conditions o&ugrave; il ne naviguent habituellement pas.</p>
<p>Dans les faits, le windfoil est simplement une autre navigation, et beaucoup se retrouvent &agrave; pratiquer par tous temps en progressant.</p>
<p>Lorsque vous investissez dans du mat&eacute;riel de windfoil, ne vous focalisez donc pas sur LE foil qui d&eacute;colera le plus t&ocirc;t. Choisissez un mod&egrave;le &eacute;volutif qui vous permettra aussi de prendre du plaisir dans des conditions plus soutenues ... pour ne pas regreter, et ne pas passer &agrave; c&ocirc;t&eacute; du plaisir que l\'on prend en foil &agrave; 20-25knt.</p>
<p>&nbsp;</p>
<h4>Naviguer dans l\'ultra light : de la patience</h4>
<p>Retenez que naviguer dans du vent tr&egrave;s l&eacute;ger en windfoil n\'est pas &agrave; la port&eacute;e du d&eacute;butant. Ce n\'est pas en changeant de foil tous les 4 matins que vous volerez plus t&ocirc;t, mais en paufinant votre technique.</p>
<p>Pour d&eacute;buter, l\'id&eacute;al est un vent autour de 15 knt. Au bout de quelques sessions, vous pourrez vous faire plaisir dans 12 knt, mais avant de voler dans 7-8 knt, pr&eacute;voyez une ou 2 saisons de pratique ! .. et pas la peine d\'acheter une aile de 6m d\'envergure, cela ne changera pas la donne ;)</p>
</div>
<div class="col-lg-4">
<h4>D&eacute;collage vs contr&ocirc;le : ne pas se tromper de cible</h4>
<p>Au cours des nombreuses discussions que nous avons au magasin ou sur les forums, nous remarquons que la plupart son omnubil&eacute;s par le d&eacute;collage du foil dans le vent tr&egrave;s l&eacute;ger. Cela a conduit certains fabriquant &agrave; proposer des ailes toujours plus grandes, ou toujours plus puissantes .. et au final, sur les plans d\'eau, on observe beaucoup de pratiquants qui se battent avec leur mat&eacute;riel pour arriver &agrave; le contr&ocirc;ler.</p>
<p>Souvent, il vaut mieux c&eacute;der un peu de terrain pour le d&eacute;collage, pour &ecirc;tre serain et prendre du plaisir en vol. Que ce soit dans les r&eacute;glages, ou dans le choix du mat&eacute;riel, ne soyez pas extr&ecirc;mes ... privil&eacute;giez le plaisir : c\'est pour cela que l\'on est tous sur l\'eau.</p>
</div>
</div>
</div>',
'status' => 'Published',
'views' => 4322,
'last_ip' => '::1',
'created_at' => '2022-02-02 01:00:38',
'updated_at' => '2022-03-23 23:23:28',
),
33 => 
array (
'id' => 50,
'user_id' => 1,
'post_categories_id' => 10,
'title' => 'Voile et Flotteur : la bonne taille',
'description' => 'En foil, le choix de la taille de la voile et de celle du flotteur sont très liées.',
'body' => '<p><img src="/storage/photos/1/legacy/c7ab117940c0c9b25ec382fb4bc79b50.jpg" alt="" /></p>
<p>En foil, le choix de la taille de la voile et de celle du flotteur sont tr&egrave;s li&eacute;es. C\'est tr&egrave;s important de bien comprendre ce point lorsque l\'on choisi son mat&eacute;riel.</p>
<p>C\'est le domaine le plus complexe &agrave; appr&eacute;hender tant les id&eacute;es re&ccedil;ues sont encr&eacute;es. On le sait : le foil attire avant tout les d&eacute;butants pour son c&ocirc;t&eacute; light wind. Ils ne passent &agrave; une navigation foil tout temps qu\'apr&egrave;s plusieurs mois ou saisons de pratique.</p>
<p>Pour de nombreux planchistes "aileron", petit temps rime avec flotteur large. Ils font donc souvent ce raccourci erron&eacute; : "pour naviguer dans le light, il suffit de prendre un flotteur le plus large possible, un foil et une petite voile ("on m\'a dit qu\'avec le foil tu mets 2m2 de moins"). Pass&eacute; les premi&egrave;res sessions pour appr&eacute;hender la b&ecirc;te, on les voit tous revenir en nous disant "je ne comprends pas, il me faut entre 15 et 20 knt de vent pour voler, ce n\'est pas normal" ... oui, je confirme, ce n\'est pas normal !!! Tout simplement parce qu\'un flotteur large n&eacute;cessite une pouss&eacute;e v&eacute;lique importante pour le faire acc&eacute;l&eacute;rer. N\'oublions pas que les formula &eacute;taient utilis&eacute;es avec 11.7m2, et qu\'un flotteur de 135L s\'utilise souvent avec 8,5m2. M&ecirc;me si le foil permet de naviguer dans peu de vent, ne croyez pas que vous arrivez &agrave; faire d&eacute;coller une planche de 85cm de large avec 7m2 dans 8 knt de vent, c\'est tout simplement impossible &agrave; moins de peser 45kg.</p>
<h3>Id&eacute;e re&ccedil;ue num&eacute;ro 1 : un flotteur large part plus vite au planning</h3>
<p>Tous ceux qui font ce raccourci ont dans la t&ecirc;te les gros flotteurs de windsurf light wind, voir les formula qui sont effectivement con&ccedil;us pour naviguer dans moins de 10 Knt. Ils ont juste oubli&eacute; petit un d&eacute;tail : en formula, on utilise une voile de 10.7m2 ... Etes vous r&eacute;ellement pr&ecirc;t &agrave; naviguer en foil avec une voile aussi grosse ?</p>
<p>Un flotteur large entraine beaucoup de frottement tant qu\'il n\'est pas parti au planning. Il a donc besoin d\'une tr&egrave;s forte pouss&eacute;e v&eacute;lique pour le faire acc&eacute;l&eacute;rer. Si vous avez un doute, faites le test : essayez de partir au planning avec une formula et une voile de 6 m2 .... vous verrez qu\'il vous faudra au moins une 15aine de knt !</p>
<h3>Id&eacute;e re&ccedil;ue num&eacute;ro 2 : une voile plus grosse permet de naviguer avec moins de vent</h3>
<p>Plus la voile est grande, plus elle va g&eacute;n&eacute;rer de puisance, mais plus elle va &ecirc;tre lourde. Comme notre objectif est de d&eacute;coller, une voile qui enfonce la planche dans l\'eau ne va pas nous aider.</p>
<p>En windfoil, on est vite g&ecirc;n&eacute; en vol si la voile est trop puissante. Par contre, il faut de la puissance pour d&eacute;coller. C\'est tout le dilemne . La solution est d\'utiliser une voile de taille raisonnable pour &ecirc;tre &agrave; l\'aise en l\'air, et de pomper pour g&eacute;n&eacute;rer de la puissance &agrave; bas r&eacute;gime. Il faut donc avec une voile suffisament l&eacute;g&egrave;re pour avoir un mouvement de pumping efficace.</p>
<p>Comme pour le flotteur, il faudra trouver le bon compromis</p>
<h3>Id&eacute;e re&ccedil;ue num&eacute;ro 3 : en foil, le flotteur importe peu</h3>
<p>Malheureusement, vous vous rendez vite compte que l\'on passe beaucoup de temps au contact avec l\'eau. Que ce soit lors du d&eacute;collage , lors des manoeuvres, ou lorsque la planche vient effleurer l\'eau, le shape flotteur a une vraie influance sur la navigation en foil.</p>
<p>Qui plus est, la position des footstraps, la position du foil, et la position du pied de mat conditionnent enti&egrave;rement l\'&eacute;quilibre du foil en l\'air. C\'est ainsi peut &ecirc;tre le plus impostant : la g&eacute;om&eacute;trie conditionnne tout l\'&eacute;quilibre en vol, et donc une grande partie du plaisir.&nbsp;</p>
<h3>Quelle est la bonne taille ?</h3>
<p>Si on a int&eacute;gr&eacute; ce qui pr&eacute;c&egrave;de, vous en d&eacute;duirez que le choix de la taille de voile max (pour le petit temps) est tr&egrave;s li&eacute; au choix du flotteur ... ou que le choix du flotteur doit se faire en fonction de la voile que l\'on compte utiliser. Avec le m&ecirc;me foil, le m&ecirc;me mod&egrave;le de voile et dans les m&ecirc;mes conditions, si on a besoin de 7,5m2 pour un flotteur de 80cm de large, il faudra 8,6m2 au minimum pour un flotteur de 90cm de large ... c\'est un test que nous avons fait &agrave; plusieurs reprise et qui s\'est v&eacute;rifi&eacute; &agrave; chaque fois.</p>
<p>Vous en d&eacute;duirez ais&eacute;ment que</p>
<ul>
<li>Si vous voulez naviguer avec 7m2 max dans le light, choisissez un flotteur de 75cm de large&nbsp;</li>
<li>Si vous voulez naviguer avec 8m2 max dans le light, choisissez un flotteur de 80cm de large&nbsp;</li>
<li>Si vous voulez naviguer avec 9 ou 10m2 dans le light, choisissez un flotteur de 90cm de large&nbsp;</li>
<li>Si vous voulez naviguer avec 5m2 max dans le light, choisissez un flotteur de 70cm de large, une voile ultra l&eacute;g&egrave;re et un pacemaker car il va falloir &ecirc;tre (tr&egrave;s) &eacute;nergique .. mais c\'est possible ;)</li>
</ul>
<p>Bien s&ucirc;r, ces valeurs sont indicatives pour un gabarit moyen poss&eacute;dant une tr&egrave;s bonne technique et d&eacute;sirant naviguer entre 8 et 10 knt. Il est &eacute;vident qu\'un gabarit de 90kg devra toiler au moins 7.8m2 pour naviguer dans ces conditions.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
'status' => 'Published',
'views' => 1544,
'last_ip' => '::1',
'created_at' => '2018-10-02 01:02:45',
'updated_at' => '2022-03-23 23:31:55',
),
34 => 
array (
'id' => 52,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Renforcer votre boitier',
'description' => 'Comment et pourquoi renforcer votre boitier ?',
'body' => '<p>On nous pose r&eacute;guli&egrave;rement des questions autour du renforcement du boitier d\'aileron pour utiliser un foil. Faisons le point sur la question.</p>
<h2>Dans le cas d\'une planche de foil d&eacute;di&eacute;e</h2>
<p>Depuis l\'arriv&eacute;e des flotteurs d&eacute;di&eacute;s au foil, les principaux fabriquants (et Cobra en t&ecirc;te), ont adapt&eacute; la m&eacute;thodologie de construction de leurs boitiers pour les rendre compatibles avec les efforts engendr&eacute;s par le foil.&nbsp;</p>
<p>En cons&eacute;quence, il n\'est pas n&eacute;cessaire de s\'aventurer dans le renforcement de votre boitier.</p>
<p>Cette remarque est &eacute;galement valable pour un certian nombre de flotteurs convertibles, qui ont &eacute;t&eacute; con&ccedil;us pour revevoir alternativement aileron ou foil.</p>
<h2>Dans le cas d\'une planche non initialement pr&eacute;vue pour le foil</h2>
<p>Si votre flotteur a &eacute;t&eacute; con&ccedil;u pour la navigation en aileron, vous pouvez malgr&eacute; tout l\'utiliser pour d&eacute;couvrir le foil. En d&eacute;butant dans cette nouvelle discipline, vous allez remplacer l\'aileron par un foil, sans quasi aucun risque pour votre flotteur. Pourquoi ? Lors de vos d&eacute;buts, vous allez naviguer tr&egrave;s droit sur votre planche, et cela n\'engendra dobnc pas d\'effort dangereux pour votre boitier.</p>
<p>Lorque vous allez progresser dans la prartique, vous allez tr&egrave;s vite ressentir l\'int&eacute;r&ecirc;t d\'un flotteur d&eacute;di&eacute;. Vous d&eacute;couvrirez une position beaucoup plus &eacute;quilibr&eacute;e et plus naturelle. Cela va beaucoup vous faciliter la t&acirc;che ... et vous vous d&eacute;b&eacute;rasserez donc assez vite de votre ancien flotteur ... probablement bien avant de risquer d\'en ab&icirc;mer le boitier.</p>
<h2>Et si je veux malgr&eacute; tout renforcer mon boitier ?</h2>
<p>La plupart des shapeurs sont capables de travailler sur le boitier de votre flotteur. Si vous les interrogez, vous verrez que la seule solution r&eacute;ellement valable techniquement consiste &agrave; remplacer le boitier d\'origine par un boitier plus solide. Le co&ucirc;t de cette op&eacute;ration est assez &eacute;lev&eacute; (entre 250 et 350eur). Par ailleurs cette op&eacute;ration est indentique qu\'elle soit r&eacute;alis&eacute;e sur un boitier cass&eacute; que sur un boitier en bon &eacute;tat.&nbsp;</p>
<p>Notre conseil est donc simple : d&eacute;butez avec votre ancien boitier .. et si vous observez des fissures, faites le remplacer. Si il ne se passe rien avat que nous ne passiez &agrave; un flotteur d&eacute;di&eacute;, vous aurez &eacute;conomis&eacute; 350eur !</p>
<p>&nbsp;</p>',
'status' => 'Published',
'views' => 765,
'last_ip' => NULL,
'created_at' => '2022-02-10 08:19:02',
'updated_at' => '2022-02-10 08:19:02',
),
35 => 
array (
'id' => 53,
'user_id' => 1,
'post_categories_id' => 6,
'title' => 'Le réglage du pied de mat',
'description' => 'Comment le réglage de pied de mat influe sur le comportement en vol',
'body' => '<p>A venir</p>',
'status' => 'Published',
'views' => 60,
'last_ip' => NULL,
'created_at' => '2018-10-02 01:07:32',
'updated_at' => '2022-02-19 20:59:11',
),
36 => 
array (
'id' => 54,
'user_id' => 1,
'post_categories_id' => 5,
'title' => 'la stabilité',
'description' => 'A venir',
'body' => '<p>Quand nous parlons de stabilité du foil, nous évoquons en réalité 3 composantes de cette stabilité :</p>
<ul>
<li>La stabilité longitudinale ... on s\'intéresse au mouvement du foil dans l\'axe longitudinal. Un foil insufisament stable sur cet axe va monter et descendre sans arrêt. On aura surtout beaucoup de difficulté à maintenir une altitude constante.</li>
<li>La stabilité latérale  ... on s\'intéresse au mouvement du foil à la gîte et à la contre gîte.</li>
<li>La stabilité en lacet... on s\'intéresse au mouvement de la planche qui ne vas pas droit, mais tend à zigzaguer.</li>
</ul>
<h2>Stabilité longitudinale</h2>
<p>Une forte stabilité longitudinale facilite les débuts, mais peut devenir gênante dasn la houle. En effet, un foil très stable rend plus difficile les corrections rapides de hauteur </p>
<h2>Stabilité latérale </h2>
<p>Imaginons une bille qui se promène sur un profil qui représente l\'angle de gîte. Si je prends l\'exemple du haut, on voit que la bille veut revenir au centre même si on l\'écarte fortement de sa position neutre. Il faut aller assez loin pour qu\'elle ne parte toute seule. C\'est un équilibre très stable jusqu\'à un angle de gîte important. Au contraire, dans le cas du bas, la bille ne restera jamais en équilibre.</p>
<p style="text-align: center;"><img src="/storage/photos/1/legacy/2094ad651bf69118009444b9a71bd639.png" /></p>
<ul>
<li>On retrouvera l\'équilibre latéral très stable sur des foils comme les Loke, AFS2, Starboard, F4, et dans une moindre mesure sur les Select, NP alu, Zeeko (ces 2 derniers se rapprochant un peu plus du H10)</li>
<li>On aura un équilibre stable au centre sur des foils comme le Vini par exemple, mais l\'équilibre devient instable lorsque l\'on s\'écarte du centre.</li>
<li>Des foils comme le XtremFoil 2017, l\'aeromod, le manta 2017 et le Ketos présente une instabilité au centre</li>
<li>Enfin, les premières générations de foil correspondait souvent à la situation du foil instable</li>
<li>Le H10, dans ces conditions de vent léger, inaugure une nouvelle situation : le neutre jusqu\'à un angle important. A la fois, on n\'est pas calé, à la fois c\'est sain car il ne part pas tout seul et on le contrôle facilement.</li>
</ul>
<p>La conséquence de cette stabilité latérale très neutre est une certaine facilité à le mettre à la contre gîte, même si la faible longueur du mat (et le vent trop faible aujourd\'hui) limite forcément les choses. En tout cas, ce comportement a l\'air parfaitement adapté aux flotteurs pas trop large, comme nous avons déjà pu le constater avec les RS:Flight AL et Zeeko</p>
<h2>Stabilité en lacet</h2>
<p>Un foil très stable en lacet donne l\'impression que tout est bien dans l\'axe. C\'est une sensation très agréable, gage d\'une glisse très pure.</p>
',
'status' => 'Published',
'views' => 2340,
'last_ip' => NULL,
'created_at' => '2018-10-02 01:09:46',
'updated_at' => '2018-10-02 01:09:46',
),
37 => 
array (
'id' => 56,
'user_id' => 1,
'post_categories_id' => 2,
'title' => 'Le surf sinusoidal',
'description' => 'Le surf, en windfoil ?',
'body' => '<p>Hervé nous présente Le surf sinusoidal :</p>
<p><strong>Le surf</strong></p>
<p></p>
<p>Le surf, en windfoil ?... Le surf en windsurf, oui ; cela sonne bien « classique » et d\'ailleurs qui n\'a pas surfé avec sa monture de vague et même en formula !...</p>
<p>Mais là, je vous propose d\'attaquer en vol des lames bien rondes et joliment pentues, mais dans du vent léger. J\'ai en mémoire une session en particulier où les planchistes « tradi », donc en aileron, ne parvenaient pas à partir au planing ; un seul d\'entre-eux osa se frotter aux magnifiques déferlantes qui entraient dans la conche de St. Georges, près de Royan. Je me tenais un peu à l\'écart des gros paquets de mousse de manière à profiter de la partie propre, sans prendre trop de risques...</p>
<p>Cette discipline est littéralement grisante ; je la pratique avec un foil bien connu, l\'Alpine A1 carbone avec son aile 900. Redoutable dans le petit temps, ce foil équipé de cette aile « magique » est une véritable arme fatale pour travailler les lames qui ressemblent à de la houle. Mais il faut vous attendre à une belle montée d\'adrénaline car toute la magie séductrice du surf en foil vient de cette glisse incroyable accompagnée d\'une belle montée de la vitesse et du stress...</p>
<p>Le mieux est d\'être déjà en vol ; tant pis mais le pumping mixte (voile puis foil) doit être mis à contribution sans rechigner ! L\'enjeu est de taille car le beau travail d\'une lame consiste dans un premier temps à stabiliser parfaitement son vol pour aller chercher la lame qui monte sur votre avant travers. La vitesse n\'est pas essentielle ; le contrôle et la stabilité sont les maîtres mots. Il est d\'ailleurs préférable de maintenir la hauteur de vol à mi-mât environ. C\'est idéalement dans le vent léger (une quinzaine de nœuds max avec une voile d\'environ 6 m²) et avec une vitesse en vol en dessous de la vingtaine de nœuds que l\'exercice prend toute sa dimension magique...</p>
<p>Au moment où la pente s\'ouvre à vous, il est quasi instinctif de se regrouper un peu en engageant le buste légèrement sur l\'avant tout en initiant une légère abattée dans le sens de la pente. La montée de la vitesse est instantanée et le gain peut être évalué à 3-4 kts... Il est alors essentiel de donner la priorité absolue au contrôle ; le danger potentiel étant de laisser sortir l\'aile de l\'eau avec le résultat explosif que chacun connaît... N\'oublions pas que nous exploitons une aile par définition à forte portance et que nous sommes confrontés à une montée assez vive de la vitesse ; le brusque montée du vent apparent pouvant alors être associée à une rafale, mais une rafale qui va vous poursuivre sur la distance d\'une descente en biais d\'une lame qui peut s\'étaler sur des centaines mètres ! C\'est encore plus beau sur la houle comme en la rencontre en demie-saison par exemple entre l\'île d\'Oléron et Ronce-les-bains au niveau du Galon d\'Or. Il est alors possible d\'envoyer des surfs dans l\'axe de la houle ; là encore, griserie ultime garantie. C\'est donc dans cette phase de surf à vitesse soutenue très souvent supérieure à la vingtaine de nœuds qu\'un point technique se révèle capital ; le trim du foil !</p>
<p></p>
<p><strong>Le trim du foil</strong></p>
<p></p>
<p>Vous l\'aurez bien compris, il ne s\'agit pas de raisonner sur la force du vent du jour, surtout si comme je le décris, ce dernier est dans l\'idéal des choses « léger », mais plutôt sur le surf en lui-même. Les vitesses atteintes qui donc tournent autour de la vingtaine de nœuds exigent sur une aile de forte portance (comme la 900 dans mon cas) de faire travailler cette dernière à une incidence réduite par rapport à ce que les conditions dicteraient. Penchez-vous donc de près sur la procédure de réglage de votre stabilisateur (cales, rondelles, vis ou plan incliné) de manière à <strong>réduire la puissance de votre foil tout en le rendant du coup plus « joueur » !</strong> Vous gagnez ainsi sur les deux tableaux pour doser votre trajectoire à loisir sur de tous petits ordres quasi imperceptibles même pour un observateur averti ; foil oblige ! <strong>Votre combo gagne en contrôle et en manœuvrabilité ; </strong>c\'est à dire pratiquement deux choses apparemment contradictoires. Le foil ainsi trimé offre un meilleur contrôle dans l\'axe de tangage ; en clair, le risque de montée intempestive avec sortie de l\'aile est réduit mais la vivacité en lacet pour enchaîner les courbes est magnifiée... Vous êtes donc en mode « race », « speed » type « downwind » ; c\'est à dire avec un foil dont l\'aile arrière dénommée « stabilisateur » ou stab est réglé « à cabrer » de manière à induire un léger couple « à piquer » pour le foil considéré dans sa globalité ; le fameux angle d\'incidence de l\'aile principale est réduit.</p>
<p>Attendez-vous naturellement à devoir vous engager encore plus énergiquement au pumping mixte ; voile &amp; foil. Dans cette configuration, le décollage est logiquement un peu plus tardif ; je constate sur l\'Alpine A1-900 pour mon gabarit de 75 kg un décollage effectif (vol stabilisé et franc) à environ 15 kts alors qu\'un trim « standard » type freeride (stab calé autour de zéro) permet de décoller propre à 11-12 kts. C\'est le prix à payer pour surfer serein !</p>
<p></p>
<p><strong>Préparation technique au surf – Le surf sinusoïdal</strong></p>
<p></p>
<p>Non, je vous passerai sous silence les séances d\'assouplissement et de yoga... Mais une solution simple et accessible à tous permet de se préparer à manœuvrer son foil en vue de travailler la lame.</p>
<p>Sur plan d\'eau « standard », commencez par tester le caractère « joueur » de votre combo trimé spécifiquement comme décrit ci-dessus en enchaînant une succession d\'inversions de courbes sans aucun temps mort avec pour objectif de réaliser une « trace de serpent » harmonieuse et régulière. C\'est amusant et vraiment facile. Une fois ce petit exercice maîtrisé, cherchez à le réaliser maintenant sur une surface « ondulée ». Il ne s\'agit pas ici de vagues ou de train de houle. Cela consiste à faire correspondre les abattées et les lofs avec l\'ondulation de surface ; chercher à être « synchro » avec le mouvement du plan d\'eau. J\'appelle cela <strong>« le surf sinusoïdal »</strong>. Détendez-vous et commencez à envisager ce que va être l\'antichambre du surf en tant que tel...</p>
<p>Tous les sites ne se prêtent pas à ce genre d\'exercice. Par chance, l\'estuaire de la Gironde au niveau de Royan et St. Georges de Didonne nous gratifie assez régulièrement d\'un petit train de houle ou de vagues sous la forme d\'une ondulation régulière généré par l\'opposition du courant à marée descendante au vent dominant de NW. La longueur d\'onde de ce système est de l\'ordre de la trentaine de mètres ; c\'est court mais les creux étant généralement inférieurs au mètre (on retrouve là les conditions souhaitables de vent déjà mentionnées, à savoir une petite brise force 4 Beaufort max), la méthode sinusoïdale peut aisément être appliquée. Mais attention, les choses se corsent car chaque abattée sur cette ondulation génère les fameuses accélérations déjà décrites. C\'est précisément sur ce point que le pilote doit se concentrer ; chaque abattée doit être finement pilotée pour ne pas laisser le foil monter et en particulier lors du lof où la combinaison de la vitesse acquise et du rapprochement du vent réel a tendance à générer une puissance additionnelle que seul le trim décrit ci-dessus permet de maîtriser... CQFD.</p>
<p>Une fois ce petit bagage en main, vous regarderez le plan d\'eau différemment. Vos yeux seront naturellement à la recherche de l\'ondulation ad\'hoc ; vagues non déferlantes ou bien  houle providentielle toujours assez rare...</p>
<p>Aiguisez donc votre foil pour la chasse au fil de la lame !...</p>
<p>Sportivement.</p>
<p>Hervé</p>
<p></p>
<p><img src="/storage/photos/1/legacy/cale_stab_noire_1.5_93_.jpg" alt="Herve en plein surf" /></p>',
'status' => 'Published',
'views' => 243,
'last_ip' => NULL,
'created_at' => '2019-01-13 19:15:53',
'updated_at' => '2019-01-13 19:15:53',
),
38 => 
array (
'id' => 61,
'user_id' => 1,
'post_categories_id' => 2,
'title' => 'Voler avec un gréement gonflable',
'description' => 'On vous prouve que c\'est possible',
'body' => '<div class="container">
<div class="row">
<div class="col"><img src="/storage/photos/1/legacy/irig.jpg" alt="" /></div>
<div class="col">
<p>Vous vous demandiez si il est possible de foiler avec une voile gonflable ? on vous prouve que si !</p>
<p>Le plus int&eacute;ressant, c\'est que l\'on illustre ici le peu de puissance n&eacute;cessaire pour faire voler un foil.</p>
</div>
</div>
<div class="row"><iframe id="ytplayer" src="https://www.youtube.com/embed/X3NONBxHGMg?autoplay=1&amp;loop=1" width="1104" height="621" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
</div>',
'status' => 'Published',
'views' => 674,
'last_ip' => NULL,
'created_at' => '2019-01-22 00:25:26',
'updated_at' => '2019-01-22 00:25:26',
),
39 => 
array (
'id' => 62,
'user_id' => 1,
'post_categories_id' => 9,
'title' => 'Foil in SantaManza',
'description' => 'nc',
'body' => '<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/a92iMXUiO00?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 254,
'last_ip' => NULL,
'created_at' => '2019-01-22 00:28:31',
'updated_at' => '2019-01-22 00:28:31',
),
40 => 
array (
'id' => 63,
'user_id' => 1,
'post_categories_id' => 9,
'title' => 'Video test RF81',
'description' => 'nc',
'body' => '<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/aNBteEUL4zE?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 87,
'last_ip' => NULL,
'created_at' => '2019-01-22 00:37:13',
'updated_at' => '2019-01-22 00:37:13',
),
41 => 
array (
'id' => 65,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Le palan d\'amure en action',
'description' => 'Vidéo expliquant le fonctionnement du palan d\'amure',
'body' => '<p><iframe src="https://www.youtube.com/embed/d9A0ismLTdA" width="1120" height="630" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
'status' => 'Published',
'views' => 532,
'last_ip' => NULL,
'created_at' => '2022-02-14 08:19:02',
'updated_at' => '2022-02-14 08:19:02',
),
42 => 
array (
'id' => 66,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2017 - Aout - conviviale Savine',
'description' => 'nc',
'body' => '<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/wPb1TQTSpxE?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 432,
'last_ip' => NULL,
'created_at' => '2019-01-22 00:41:52',
'updated_at' => '2019-01-22 00:41:52',
),
43 => 
array (
'id' => 67,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2017 - Conviviale La Ciotat',
'description' => 'nc',
'body' => '<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/XS2s1CqZfq8?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 132,
'last_ip' => NULL,
'created_at' => '2019-01-22 00:43:06',
'updated_at' => '2019-01-22 00:43:06',
),
44 => 
array (
'id' => 68,
'user_id' => 1,
'post_categories_id' => 9,
'title' => 'Vidéo test Slingshot',
'description' => 'nc',
'body' => '<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/sapOJ1xN2Gc?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 43,
'last_ip' => NULL,
'created_at' => '2019-01-22 00:44:08',
'updated_at' => '2019-01-22 00:44:08',
),
45 => 
array (
'id' => 69,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2017 - Printemps du foil',
'description' => 'nc',
'body' => '<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/uIoVgQyYIDw?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 86,
'last_ip' => NULL,
'created_at' => '2017-04-22 00:45:09',
'updated_at' => '2017-04-22 00:45:09',
),
46 => 
array (
'id' => 70,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2017 - National windfoil à Martigues',
'description' => 'nc',
'body' => '
<iframe id="ytplayer" type="text/html" width="1104" height="621"
src="https://www.youtube.com/embed/vDuLzwIsi2E?autoplay=1&loop=1"
frameborder="0" allowfullscreen></iframe>',
'status' => 'Published',
'views' => 234,
'last_ip' => NULL,
'created_at' => '2017-05-22 00:46:13',
'updated_at' => '2017-05-22 00:46:13',
),
47 => 
array (
'id' => 72,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2019 - Mars - Gliss Test Session PWA Marignane',
'description' => 'À l’occasion de la coupe du monde PWA de Marignane, nous avons organisé trois jours de tests géants en collaboration avec les magasins HotMer et Le Marin. ',
'body' => '<p>À l’occasion de la coupe du monde PWA de Marignane, nous avons organisé trois jours de tests géants en collaboration avec les magasins HotMer et Le Marin. Nous avons réuni plus de 50 flotteurs, 20 foils et 30 gréements : événement exceptionnel donc par la diversité du matériel présent.</p>
<h2>Jour un</h2>
<p>Ce premier jour a été marquée par un soleil radieux, et un vent régulièrement présent. De secteur sud-est, ce dernier a permis à la plupart d’aller sur l’eau dans des conditions idéales : vent léger à médium, plan d\'eau parfaitement plat et températures printanières. Ceux qui ont participé à cette journée ne se sont pas trompés !</p>
<p>Le vent n’était pas assez soutenu et régulier pour permettre aux planches classiques d’exploiter les conditions, mais les foils n’ont pas touché le sable et les tests se sont enchainés sans discontinuer. De nombreux débutants, quelques foileurs expérimentés, et un bon nombre de pratiquants intermédiaires ont eu l’occasion de tester l’un des 25 foils présents sur le test. Au cours de cette journée, nous avons enchaîné plus de 40 tests, ce qui est exceptionnel sur une seule journée.<br />Les coups de cœur des testeurs ont été l\'<strong>I<a href="https://marseille.glissattitude.com/windfoil/u38220s1-phantom-iris-x-phantom-2019.html">ris X 7.4</a></strong>, le <a href="https://marseille.glissattitude.com/windfoil/u37855s1-divers-affuteuse-razor-tune-2-meules-divers.html"><strong>Glide NP</strong></a> monté sur la JP Magic Ryde, le <a href="https://marseille.glissattitude.com/windfoil/u34705s1-loke-foil-windfoil-lk1-loke-foil-2019.html"><strong>Loke LK1</strong></a> sur la Fanatic Sting Ray, et le <a href="https://marseille.glissattitude.com/windfoil/u36239s1-taaroa-noe-80-taaroa-2019.html"><strong>Noe 80</strong></a> sur la JP Hydofoil 120. Les Zeeko Amplifier et AFS 85 sont aussi beaucoup sortis.</p>
<p><img src="/storage/photos/1/legacy/IMG_0030.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img src="/storage/photos/1/legacy/IMG_0046.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<h2>Jour deux</h2>
<p>Cette fois, le temps était beaucoup couvert et le vent beaucoup plus incertain, entre 3 et 12 Knt, avec de gros changements de direction, et une bascule complète à 14h. Ces conditions n’ont pas permis aux testeurs débutants d’aller sur l’eau. Seuls les plus expérimentés ont joué avec ces conditions un peu compliquées, mais on prouvé que le foil permet de se sortir de beaucoup de situations.<br />Pour ma part, ça a été l’occasion d’aller sur l\'eau et de faire quelques tests très intéressants</p>
<h4>Starboard Foil 144, Foil SB race avec aile de 1000, Voile Phantom IRIS X 7.4</h4>
<p>Au cours de ce test, j’ai cherché quelle cale de Stab permettait de retrouver un certain équilibre dans cette configuration plutôt musclée. Même si, à l’évidence, c’est une combinaison réservée au très Light Wind avec une grande voile, c’est avec une cale de 0.9mm que l’équilibre était le meilleur. Vu la puissance de cette aile, la 144 est vraiment le minimum requis pour avoir un peu de contrôle, et il n’est pas envisageable de toiler moins que 7,5m2. Cela confirme que ces configurations typées course sont réellement faites pour les planches très larges et les voiles dépassant les 8 m².</p>
<h4>Test de 2 voiles de course foil en 9 m²</h4>
<p>La loft, dont le look n’est pas très attirant, a pourtant prouvé sur l\'eau une belle efficacité. La voile est assez légère dans les bras pour une telle taille (attention, ça reste très gros très lourd), et plutôt souple dans son fonctionnement. Le Pumping nécessite un gros physique dans le light mais une fois en l’air, la voile semble relativement compacte et tout à fait gérable dans des conditions inférieures à 12 knt ... ceci à condition de rester sur des allures très serrées. Ces voiles ne sont clairement pas conçues pour faire du travers car elles deviennent alors sur-puissantes.</p>
<p>Le deuxième test s’est fait sur la Seven hyper Glide 2 en 9 m. On a cette fois une voile beaucoup plus nerveuse et raide… probablement dû au fait qu’elle était neuve. Comme sur la V1, les Severn mettent plusieurs sessions à s’attendrir un peu, et sont par conséquent très physiques lors des premières sorties. On retrouve des sensations analogues à la loft, la raideur en plus. De la même façon, c’est extrêmement physique au pumping : il vaut mieux avoir une condition physique d’athlète pour l’utiliser dans moins de 8 knt … Je dirais même que c’est absolument indispensable sous peine de voir son cardio monter à plus de 200 au bout de trois coups de pumping.</p>
<p>À l’occasion d’un comparatif entre la loft en 9 m, et la IRIS en 7.4, nous nous sommes rendus compte que le départ planning était quasi identique. Le pumping beaucoup plus facile donc beaucoup plus efficace sur l\'IRIS compensait la puissance supérieure de la 9m. <br />Cette remarque s\'entend bien sûr pour un pratiquant expert non professionnel. Il est évident qu’un athlète affûté avec préparation physique et musculaire spécifique, tirera certainement des bénéfices supérieurs des très grosses voiles. A mon niveau , l\'utilisation de ces nouvelles grosses voiles à grand allongement se traduit par une utilisation ultra physique dans le light, mais un énorme appui pour remonter au vent. <br />Une fois en l’air, la voile de course permet en effet, grâce à son appui supérieur, de passer des molles plus facilement, et surtout de remonter au vent dans des conditions ultra légères, alors que la Iris va nous obliger à rester sur du travers dans ces conditions.</p>
<h4>Tests de cohérence</h4>
<p>J’ai eu aussi l’occasion de tester la combinaison de ces grandes voile course avec des foils plus ou moins puissants. Le Starboard Race était un bon outils pour réaliser cet exercice.<br />Avec l’aile de 800, la portance du foil est insuffisante pour permettre à la 9m d\'exprimer tout son potentiel dans le léger au près. Avec l\'aile de 1000, la poussée est bien là et permet de transformer la puissance de la voile en accélération. Une fois de plus, cela confirme que, plus que la performance de chéque élément, c\'est bien la cohérence de l\'ensemble qui prime.</p>
<p>Pour finir, j’ai fait un comparatif entre une planche de foil racing en 91 et une planche free-race. La SB Foil 44 nécessite beaucoup moins de puissance pour s’arracher de l’eau, ce qui la rend accessible aux pratiquants standards. La SB foil 177, par contre, demande un énormément investissement physique dans le vent très léger. Que ce soit en 7.5 ou en 9m, je suis parti à chaque fois bien plus facilement avec la 144 que la 177 (à contrario d\'un athlète professionel). J’avais un doute quant la compatibilité de la 144 avec des très grosses voiles de course, mais cela fonctionne à condition de l’équiper d’un foil race avec une très grande aile ... et de s\'acheter un pacemaker.</p>
<p>Au final, la très bonne leçon de cette journée, est que les grosses voiles de course foil sont très peu adaptées à un pratiquant classique. C’est vraiment un produit de professionnels entrainés. En cela, c’est assez différent du matériel de slalom habituel, que tous les pratiquants de bon niveau peuvent utiliser, même si il n’en tirent pas tous les bénéfices.</p>
<p>Côté compétition, cette journée a été marquée par une réunion importantes des coureurs au sujet de la cohabitation du foil et du slalom au sein des épreuves (remplacement éventuel du slalom light wind par du foil), ainsi qu\'au sujet de la quantité de matériel impliquées dans cette pratique de très haut niveau.</p>
<h2>Jour trois</h2>
<p>Cette fois, le vent d\'Est est rentré dès le matin, léger dans un premier temps puis plus soutenu est très irrégulier dans l’après-midi. Il n’a fait que se renforcer pour finir à presque 30 knt lors des poules finales de la PWA.</p>
<p><img src="/storage/photos/1/legacy/IMG_0055.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p>Du côté des tests, ces conditions ont permis à un grand nombre de pratiquants d’aller sur l\'eau, que ce soit en foil ou en windsurf. Malgré tout, les conditions de navigation étaient assez complexes à cause de l’irrégularité du vent. Pour les débutants en foils, les choses sont devenues de plus en plus compliquées, mais les foileurs plus expérimentés ont pu continuer les essais.</p>
<h4>Compat Foil boards</h4>
<p>En dehors des produits testés les jours précédents, nous avons et l\'occasion de tester plus en profondeur les 2 compact foil présentes ici : la RRD Pocket Rocket en 1m80, et une board Zeeko de 1m84 en 106L. Ces deux produits extrêmement ludiques, offre un visage complètement différent du foil, tout en sensations et en finesse, et à l\'opposé des produits freerace.<br />Pour tirer toute la quintessence de ses produits, nous les avons utilisé avec des toutes petites voiles. D’ailleurs, la Zeeko supporte difficilement une taille de voile supérieure à 5 m, alors que la RRD, un peu plus large, tolère idéalement jusqu’à 6m2. L\'idéal est aussi de naviguer strapless et sans harnais, histoire d\'aller jusqu\'au bout de la sensation de liberté ! Dans les 2 cas, ce type de flotteur doit être associé à un foil plutôt stable à très stable pour prendre du plaisir. Si le foil RRD 120 ne nous a pas convaincu en utilisation race, il offre ici un tout autre visage extrêmement intéressant.</p>
<p><img src="/storage/photos/1/legacy/58381535_10213326706511953_8754602817789886464_o.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img src="/storage/photos/1/legacy/57649371_10213326704391900_9163233329250566144_o.jpg" alt="Gliss Test Session Pocket Rocket" />Photos by Christian Souchet</p>
<p>Ces 2 produits sont clairement destinés à des pratiquants expérimenté en foil, et leur côté ultra ludique nous a permis de passer des très bons moments sur l\'eau. Dans des conditions de vent très irrégulières, nous avons pu réellement prendre du plaisir, probablement plus qu\'avec un équipment de race. Je rajouterai que ce type de combi nécessite un minimum de vent. Ce n\'est donc pas la solution pour celui qui veut naviguer à 8knt !</p>
<h2>Bilan</h2>
<p>Au final, ces 3 jours ont été une vraie réussite au regard du nombre de personnes qui ont pu découvrir le foil ou tester des produits qu\'ils ne connaissaient pas. Pour nous également, ce fût l\'occasion de passer 3 jours à tester des combinaisons nouvelles, ainsi que le matériel des courreurs pro.<br />Côté compétition, l\'exigence un peu ridicule des conditions de course n\'ont permis de valider qu\'une manche, avec un dénouement dans les toutes dernières minutes de la dernière journée.</p>
<h2>Le matos en test</h2>
<p>Quand on vous dit que le plateau de matériel était exceptionnel, on ne vous ment pas ;)</p>
<h4>Foil Boards</h4>
<ul>
<li>JP Australia Magic Ride 112 FWS avec aileron</li>
<li>JP Australia Hydro Foil 120 FWS</li>
<li>JP Australia Freestyle Wave pro 94</li>
<li>Tabou AirRide 81 carbone x 2</li>
<li>Fanatic Sting Ray 125 x 2</li>
<li>Fanatic Gecko Foil</li>
<li>Starboard Foil 122</li>
<li>Starboard Foil 144</li>
<li>RRD Pocket Rocket 180</li>
<li>RRD Hi Flight</li>
<li>RRD H Fire Pro 91</li>
<li>AHD Thunderbold 85</li>
<li>AHD Thunderbold 75</li>
<li>Slingshot Wizzard 125</li>
<li>Slingshot Wizzard 103</li>
</ul>
<h4>Foils</h4>
<ul>
<li>Neil Pryde Flight AL</li>
<li>Neil Pryde Glide AL</li>
<li>Alpine A1 Alu + ULW</li>
<li>Alpine A1 Carbone + RLX </li>
<li>Alpine Lift wing</li>
<li>Horue H10 Evo</li>
<li>Taaroa Noe 80</li>
<li>Taaroa Noe 97 Freeride</li>
<li>Taaroa Noe 97 Freerace</li>
<li>Taaroa Sword RS</li>
<li>Starboard Team Set</li>
<li>Starboard GT alu</li>
<li>Loke Lk1 850 + 1000</li>
<li>Loke Race</li>
<li>Fanatic H9 x 2</li>
<li>Zeeko Amplifier</li>
<li>AFS Wind 85</li>
<li>AFS Wind 95</li>
<li>AFS Wind 105</li>
<li>Slingshot Ghost Whisper 101</li>
<li>Slingshot Ghost Whisper 111</li>
<li>Slingshot Hover Glide</li>
</ul>
<h4>Gréements</h4>
<ul>
<li>XoSail Fly 7,8 sur Xo SDM 100 460</li>
<li>XoSail Fly 6,6 sur platinium 430 SDM</li>
<li>Duotone F-Type 5,8 sur gold sdm</li>
<li>Duotone F-Type 6,7 sur platinium aero 430</li>
<li>Starboard Flight 6,7</li>
<li>Phantom IRIS X 5,8 sur platinium 430</li>
<li>Phantom IRIS X 7,4 sur platinium 460</li>
<li>Neil Pryde V8 7,2 sur SPX 95 460</li>
<li>Neil Pryde Combat HD 4.7 sur TPX 100 370</li>
</ul>
<p><img src="/storage/photos/1/legacy/IMG_0031.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img title="Gliss Test Session" src="YYYYYYGTS.jpg" alt="Gliss Test Session" /></p>',
'status' => 'Published',
'views' => 345,
'last_ip' => NULL,
'created_at' => '2019-03-07 17:35:16',
'updated_at' => '2019-03-07 17:35:16',
),
48 => 
array (
'id' => 73,
'user_id' => 1,
'post_categories_id' => 3,
'title' => 'Visite de l\'usine Alpine Foil',
'description' => 'Video visite de l\'usine',
'body' => '<p><img src="/storage/photos/1/legacy/alpine.jpg"></p>
<p><iframe src="https://www.youtube.com/embed/AXe7bT3haKo?autoplay=true&rel=0&vq=hd720" width="1120" height="630" frameborder="0" allowfullscreen="" loop=1 autoplay=1></iframe></p>


',
'status' => 'Published',
'views' => 1341,
'last_ip' => NULL,
'created_at' => '2019-03-28 20:52:18',
'updated_at' => '2019-03-28 20:52:18',
),
49 => 
array (
'id' => 75,
'user_id' => 1,
'post_categories_id' => 10,
'title' => 'Flotteurs AST ou Carbone ?',
'description' => 'Voici un guide pour aider à faire le bon investissement en ce qui concerne le flotteur.',
'body' => '<p>Avec l\'explosion de la pratique du foil, vous &ecirc;tes de plus en plus nombreux &agrave; vouloir gouter &agrave; cette nouvelle discipline. On ne risque pas de vous en bl&acirc;mer ... !</p>
<p>Un sujet &nbsp;revient &agrave; longueur de journ&eacute;e au shop : "comment acheter du mat&eacute;riel au tarif le plus bas possible ?". En cette p&eacute;riode o&ugrave; le pouvoir d\'achat est devenu LE graal de tout consommateur, nous faisons tous pour nous adapter. Voici un guide pour aider &agrave; faire le bon investissement en ce qui concerne le flotteur.</p>
<h2>1 - Flotteur convertible ou d&eacute;di&eacute; ?</h2>
<p>Apr&egrave;s 4 ans de pratique, et une &eacute;norme &eacute;volution des flotteurs d&eacute;di&eacute;s, nous avons d&eacute;sormais une r&eacute;ponse claire et &eacute;vidente :</p>
<ul>
<li>Si vous avez d&eacute;j&agrave; un flotteur capable d\'accepter le foil que vous convoitez, ne changez rien dans un premier temps</li>
<ul>
<li>Ne stressez pas pour le boitier : vous allez d&eacute;buter avec une attitude assez droite sur le flotteur. Tant que les efforts sont principalement verticaux, aucun riques. En progressant, votre boitier peut montrer des signes de faiblesse, mais il sera alors toujours temps de le remplacer. Pas le peine de le faire en pr&eacute;ventif car cela ne sera pas moins cher, et il est possible qu\'il ne bouge pas.</li>
<li>Au d&eacute;but, vous ne mettrez pas les pieds dans les straps arri&egrave;re, donc pas tr&egrave;s grave si ils sont trop &agrave; l\'exterieur. En progressant, vous allez certainement et comme tous, prendre gout au foil. L\'achat d\'un flotteur d&eacute;di&eacute; sera alors plus &eacute;vident.</li>
<li>Si vous voulez essentiellement faire du foil en mode balade sans toiler (5 ou 6m max), il vous faudra un peu de vent quand m&ecirc;me (une bonne 12aine de knt). Dans ce cas, vous pouvez prendre votre pied avec des foils comme le NeilPryde Glide, qui se montent m&ecirc;me sur un flotteur de freeride avec boitier powerbox !</li>
</ul>
<li>Si vous devez absoluement acheter un flotteur pour faire du foil , partez directement sur un flotteur d&eacute;di&eacute;. Quitte &agrave; faire un investissement, optimisez ce dernier avec un produit que vous n\'allez pas changer de sit&ocirc;t, et qui vous apportera un max de confort et de facilit&eacute; durant toute votre progression. Rv question n&deg;3</li>
</ul>
<h2>2 - Neuf ou occasion ?</h2>
<p>Les flotteurs d\'occasion foil sont tr&egrave;s rares. Logique puisque la demande est beaucoup plus importante que l\'offre &nbsp;: il y a &eacute;norm&eacute;ment de personnes qui cherchent, et bien peu qui ont int&eacute;r&ecirc;t &agrave; revendre leur planche.&nbsp;</p>
<p>Si vous &ecirc;tes sur le point d\'acheter de l\'occasion&nbsp;</p>
<ul>
<li>Si c\'est un flotteur non d&eacute;di&eacute; (freeride, slalom etc.), RV question n&deg;1</li>
<li>Si c\'est un flotteur d&eacute;di&eacute; foil, ne jetez votre d&eacute;volu que sur des mod&egrave;les r&eacute;cents car l\'&eacute;volution a &eacute;t&eacute; tr&egrave;s importante ces derniers temps, et sous pr&eacute;texte de faire une bonne affaire, n\'achetez pas n\'importe quoi (flotteur de course pour faire du freeride etc.)</li>
</ul>
<h2>3 - AST ou Carbone ?</h2>
<p>Si vous avez d&eacute;cid&eacute; de vous offrir un flotteur neuf, vous avez probablement fait le bon choix. Vous allez ainsi b&eacute;n&eacute;ficier de toutes les derni&egrave;res &eacute;volutions du monde du foil :</p>
<ul>
<li>des mod&egrave;les plus accessibles, et plus ludiques, gages de plus de facilit&eacute; et de plaisir</li>
<li>plus de choix et de diversit&eacute;, donc des mod&egrave;les plus adapt&eacute;s &agrave; VOTRE vision du foil (race, free-race, freeride, freestyle)</li>
<li>des rapports qualit&eacute; / prix de plus en plus hauts</li>
</ul>
<p>Reste une question r&eacute;currente : dois-je acheter un mod&egrave;le AST ou Carbone ? La plupart des fabriquants proposent en effet plusieurs versions de leurs flotteurs d&eacute;di&eacute;s, ce qui correspond &agrave; diff&eacute;rentes constructions, avec des &eacute;carts de tarifs parfois consid&eacute;rables.</p>
<p>Les 2 diff&eacute;rences principales vont se situer au niveau&nbsp;</p>
<ul>
<li>du poids du flotteur (et du centre de gravit&eacute;)</li>
<li>de la r&eacute;sistance</li>
</ul>
<h4>Le poids</h4>
<div>L\'influance du poids est moins nette que sur un flotteur de funboard. En effet, l\'essentiel du poids du flotteur est situ&eacute; en arri&egrave;re (renforts autour des straps, du boitier etc.). Un augmentation du poids &agrave; ce niveau a assez peu d\'influance. La diff&eacute;rence est minimme au d&eacute;collage, et devient perceptible au niveau de l\'inertie du flotteur en vol. Dans la phase d\'apprentissage, un flotteur ayant de l\'inertie est plut&ocirc;t plus rassurant. Pour des foileurs plus exp&eacute;riment&eacute;s, la moindre inertie devient un v&eacute;ritable atout plaisir.</div>
<h4>La r&eacute;sistance</h4>
<div>C&ocirc;t&eacute; r&eacute;sistance, c\'est bien &eacute;videmment le carbone qui r&eacute;sistera le mieux aux fortes contraintes de navigation, et ceci pour 2 raisons</div>
<div>
<ul>
<li>le sandwich PU / carbone est plus solide qu\'une couche de fibre de verre, et a une meilleur int&eacute;grit&eacute; gn&eacute;rale</li>
<li>en cas de casse, la r&eacute;paration est plus fiable sur une construction sandwich qu\'une construction&nbsp;monolytique</li>
</ul>
<div>Sur des petits chocs, au contraire, la construction AST prend le dessus gr&acirc;ce &agrave; l\'&eacute;paisseur de la strat.</div>
<h4>Mon investisement</h4>
<div>Finissons enfin sur le c&ocirc;t&eacute; "investissement" ... m&ecirc;me si je d&eacute;teste ce terme quand on parle de plaisir. On en va pas entretenir la langue de bois, nous savons tr&egrave;s bien que lorsque vous achetez un flotteur, nous pensez tous &agrave; la vente ... et cet argument passe r&eacute;guli&egrave;rement en t&ecirc;te de vos pr&eacute;occupations, parfois avant m&ecirc;me le plaisir que vous allez prendre sur l\'eau. Alors soyons direct. Sur ce volet, l\'AST est un bien meilleur investissement car la d&eacute;c&ocirc;t&eacute; sera nettement inf&eacute;rieure.&nbsp;</div>
<div>En achetant par exemple une Exocet Freefoil AST, vous allez investir environ 1200&euro;. Si vous la revendez dans les 18 mois qui viennent, il y a de fortes chances que vous puissiez en tirer au moins 850&euro; (en fonction de son &eacute;tat) ... soit une d&eacute;c&ocirc;te de 350&euro;</div>
<div>En achetant un flotteur 100% carbone avec fibre magique thermonucl&eacute;aire, votre investissement peut monter jusqu\'&agrave; 3000&euro;, et en cas de revente, il y a peu de chancs que vous puissiez en tirer plus de 1500 &agrave; 1800&euro; ... soit une d&eacute;c&ocirc;te qui peut aller jusqu\'&agrave; 1400&euro;</div>
<h4>Bilan</h4>
<p>Vous l\'avez compris, chaque type de construction a ses avantages et ses inconviennents. Voici donc notre conseil</p>
<div>Si vous avez une contrainte de budget ou de rentabilit&eacute; &gt; AST</div>
</div>
<div>Si vous voulez vous faire plaisir, ou que vous n\'avez pas de contrainte de budget &gt; Carbone</div>
<div>&nbsp;</div>
<div>Sachez qu\'en tout cas, m&ecirc;me si vous pensez qu\'un flotteur AST correspond &agrave; une construction entr&eacute;e de gamme (oui, c\'est profond&eacute;ment ancr&eacute;), il vaut toujours mieux un flotteur AST r&eacute;cent qu\'un flotteur Carbone d&eacute;pass&eacute; ... et l&agrave;, on parle &eacute;videmment de plaisir de navigation.</div>
<h2>Les mod&egrave;les AST disponibles</h2>
<div>Foil racing : Exocet RF 81, RF 91,&nbsp;JP Hydrofoil 150</div>
<div>Foil Free-Race : Tabou Airide 81 et JP Hydrofoil 135</div>
<div>Foil Freeride : Exocet Freefoil 112, 132 et&nbsp;JP Hydrofoil 120</div>
<div>&nbsp;</div>
<div><img src="/storage/photos/1/legacy/u38483s1.jpg" alt="Exocet FReefoil AST" />&nbsp;<img src="/storage/photos/1/legacy/u38235s1.jpg" alt="Tabou Airride 81 AST" /></div>',
'status' => 'Published',
'views' => 4321,
'last_ip' => NULL,
'created_at' => '2019-05-23 13:36:09',
'updated_at' => '2022-02-19 22:15:23',
),
50 => 
array (
'id' => 76,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Eviter la salade d\'inserts',
'description' => 'Comment éviter de détruire les inserts du talon Deep Tuttle de votre foil ',
'body' => '<p>Depuis la généralisation du DeepTuttle en tant que standard de fixation Foil / Flotteurs, nous avons régulièrement des remontés client concernant les inserts de talon. Plus précisément, de nombreux clients se plaignent d\'inserts neufs mal taraudés. </p>
<p>Devant un nombre conséquent de remontés, communes à toutes les marques (alors que les inserts sont tous différents), nous nous sommes interrogés sur le phénomène et avons cherché une parade.</p>
<h2>La raison</h2>
<p>Après avoir longuement analysé le problème, et vérifié les inserts fournis neufs par les fabriquants, nous sommes en mesure de vous confirmer que les inserts ne présentent pas de défaut d\'origine .. et pas plus chez AFS que RRD, TAAROA, STARBOARD ou LOKE. A la limite, cela pourrait arriver exceptionnement (bien que nous n\'en ayons pas trouvé), mais jamais sur les 2 vis du même foil.</p>
<p>Le problème que nombreux pratiquants rencontrent est le résultat du cumul de 2 choses</p>
<ul>
<li>un désaxement entre les perçages du talon de foil, et du boitier du flotteur</li>
<li>une faible tolérence des inserts en INOX</li>
</ul>
<h4>Désaxement</h4>
<p>Visiblement, parmi les affres de la description du standard Tuttle (et Deep Tuttle) , de nombreuses zones de flou persistent. Au chapitre des éléments géométriques mal définis (ou définis différemment suivant les versions et interprétations du standard) figurent</p>
<ul>
<li>les rayons des différents congés</li>
<li>les hauteurs de talon devant et derrière</li>
<li>la profondeur des perçages</li>
<li>la position des inserts en profondeur</li>
<li>la position des axes de perçage (inserts)</li>
</ul>
<div><img src="/storage/photos/1/legacy/tuttle-deep-tuttle.jpg" alt="Definition deep tuttle" /></div>
<p>C\'est précisément ce dernier point qui nous pose problème aujourd\'hui. On ne jette ni la pierre à Cobra qui produit les flotteurs, ni aux fabriquants de foil, mais force est de constater qu\'ils ont du mal à se mettre d\'accord. Pire encore, on a des écarts de géométrie flagrantes d\'un flotteur à l\'autre alors qu\'ils viennent tous du même fabriquant (Cobra en Thailande) !</p>
<p><img src="/storage/photos/1/legacy/desaxement-boitier.jpg" alt="desaxement boitier" /></p>
<p>Bref, on ne vas pas changer ceci de notre côté (même si il y a de nets progrès sur les flotteurs dernières génération), alors à nous de nous adapter pour ne plus subir ces désaxements.</p>
<h4>Tolérence des inserts</h4>
<p>Avec l\'arivée du Windfoil, la plupart des fabriquants ont pris conscience des efforts importants subis par la vis arrière du talon. Pour éviter au maximum les arrachements, nombreux ont opté pour des inserts en Inox, théoriquement plus résistants que les inserts en laiton (le laiton est un métal plus tendre). D\'autres, comme Horue, on simplement décidé de passer à du 14mm au lieu du 9 ou du 12.</p>
<p><img src="/storage/photos/1/legacy/inserts-laiton.jpg" alt="Inserts" /></p>
<p>Jusque là, pourquoi pas ... </p>
<p>En faisant ce choix, les fabriquants de foil ont oublié un petit détail : on ne vit pas dans un monde parfait ou tout est normé, et où toutes les normes sont respectées. Et il se trouve que la dureté de l\'INOX a un vilain défaut : si on visse un tout petit peu de travers dans un filetage Inox, celui ci foire immédiatement et irrémédiablement. Il est alors tès difficile de revenir en arrière, même avec un tarraud. Bilan : insert à remplacer ... lorsque la vis n\'est pas carrément bloquée dedans.</p>
<p>Avec le laiton et sa tendresse, les inserts ont le pouvoir de s\'auto-tarauder avec la vis inox. Vous l\'avez tous vécu : une vis d\'aileron sur laquelle on force un peu, et tout rentre dans l\'ordre après avoir traversé entièrement l\'insert avec la vis. Sur l\'Inox, n\'y comptez pas !</p>
<h2>Les solutions</h2>
<p>Quand on a compris d\'où venait le problème, la solution saute aux yeux : annuler le désaxement.</p>
<p>Donc</p>
<ol>
<li>Dans un premier temps, remplacer vos inserts foirés par des neufs (certains fabriquant en fournissent un en plus dans les kit de visserie) ... en espérant que vous n\'ayez pas foirés les deux en insistant lourdement !</li>
<li>Remplacez éventuellement la vis, car elle s\'abime aussi vite que l\'insert quand on vis de travers</li>
<li>Ovalisez le trou dans la planche, dans l\'axe longitudinal, à l\'aide d\'une perceuse et d\'un foret, ou mieux d\'une fraise si vous avez. Ne pas ovaliser dans l\'axe transversal pour ne pas avoir un trou énorme, et que les rondelles puissent continuer à s\'appuyer sur les côtés du trou.</li>
</ol>
<p><img src="/storage/photos/1/legacy/desaxeemnt-oblong.jpg" alt="trous oblongs" /></p>
<p>Au passage, signalons la très bonne initiative de Starboard qui livre toutes ses planches depuis plusieurs saisons avec des trous déjà ovalisés. Je ne comprends toujours pas pourquoi les autres marques n\'aient pas imposé cette solution auprès de Cobra !</p>
<h2>Bilan</h2>
<p>Voilà, une fois de plus, j\'espère que cette petute exlication vous fera gagner du temps, et vous évitera de préparer une vinaigrette à base d\'inserts. Je vous conseille donc de toujours ovaliser vos trous de vis de boitier ... cela vous permet de lmonter n\'importe quel foil sans risque.</p>


',
'status' => 'Published',
'views' => 4322,
'last_ip' => '::1',
'created_at' => '2022-02-16 08:19:02',
'updated_at' => '2022-03-23 23:46:07',
),
51 => 
array (
'id' => 77,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2019 - Juin - La Ganguise',
'description' => 'Pour la 2e édition de la conviviale Glissalafac, le plateau d\'exposant promettait d\'être fourni. ',
'body' => '<p>Pour la 2e édition de la conviviale Glissalafac, le plateau d\'exposant promettait d\'être fourni. Avec les shops Glissattitude, Chinook et Surfone, la quantité et la qualité étaient au rendez vous !</p>
<p>Pour notre part, nous avions rempli le camion avec pas moins de 7 flotteurs , 7 gréements et 10 foils !</p>
<p><img src="/storage/photos/1/legacy/guanguise1.jpg" alt="conviviale" /></p>
<p>En arrivant sur place, j\'ai eu des gros doutes sur la distance parcourure depuis Marseille ... persusadé d\'être arrivé en Bretagne (temps gris, crachin et température plus que fraiche). Heureusement, le vent bien présent a vite permis d\'aller se réchauffer sur l\'eau. Les tests se sont enchainés toute la journée, avec un vrai succès pour les Taaroa Noe (freeride et freerace), ainsi que les Airide et Foil 122 Starboard</p>
<p><img src="/storage/photos/1/legacy/IMG_0527.jpg" alt="convivale ganguise" /></p>
<p>Les apéro, repas et soirée du Ti Punch ont fini de nous réchauffer :)</p>
<p><img src="/storage/photos/1/legacy/IMG_0539.jpg" alt="convivale ganguise" /></p>
<p>Le Dimanche, place au grand soleil, avec un vent très faible. <p>
<p><img src="/storage/photos/1/legacy/IMG_0535.jpg" alt="convivale ganguise" /></p>
<p>Cette fois, chacun a pu tester ce que voulais dire light wind. Des risées très courtes et molassonnes, des changements de direction incessants ... tout ce qu\'il faut pour faire de magnifique plan d\'eau une zone bien technique de navigation. Bref, un bon entrainement au pumping toute la journée ... mais c\'est comme cela que l\'on progresse, non ? :)</p>
<p>Quelques petites infos sur ce plan d\'eau du Sud Toulousain :</p>
<ul>
<li>L\'endroit être vraiment paisible et bucolique. C\'est idéal pour une journée en famille ! </li>
<li>Pour vous rendre à la base nautique, ne comptez surtout pas sur votre GPS, à moins d\'avoir une voiture amphibie. Il faut suivre Belfou ... et ne stressez as si vous passez 20mn en pleine compagne sur des mini routes : c\'est NORMAL.</li>
<li>Pour l\'hébergement, le FAST HOTEL de port Lauragais est parfait : à 49€, difficile de faire mieux. Et si, comme moi, vous y arrivez à moitié bourré à minuit, vous aurez la surprise le matin de vous réveiller à côté d\'un vrai Port (avec péniches) que je ne soupconnais pas.
<p><img src="/storage/photos/1/legacy/IMG_0528.jpg" alt="convivale ganguise" /></p>
Entre le FAST Hotel et la base nautique, votre GPS préféré aura aussi peut être le bon gout de vous faire passer par des chemins de terre. Pas de stress, ça passe tout seul, et vous pourez comme moi pister les grives en balade matinale.
<p><img src="/storage/photos/1/legacy/IMG_0529.jpg" alt="convivale ganguise" /></p> </li>
</ul>
<p>Finissons par une petite vido, en attendant la vidéo officielle de Laurent</p>
<p><iframe src="https://www.youtube.com/embed/TyiP2NJ_c_U" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>

',
'status' => 'Published',
'views' => 234,
'last_ip' => NULL,
'created_at' => '2019-06-14 22:30:16',
'updated_at' => '2019-06-14 22:30:16',
),
52 => 
array (
'id' => 78,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2019 - Juin - Conviviale de Serre Ponçon',
'description' => 'nc',
'body' => '<p><img src="/storage/photos/1/legacy/s1.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s5.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s2.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s3.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s4.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s11.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s12.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s6.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s7.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s13.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s14.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s10.jpg" alt="conviviale savines juin 2019" /></p>
<p><img src="/storage/photos/1/legacy/s8.jpg" alt="conviviale savines juin 2019" /></p>',
'status' => 'Published',
'views' => 214,
'last_ip' => NULL,
'created_at' => '2019-07-03 12:29:21',
'updated_at' => '2019-07-03 12:29:21',
),
53 => 
array (
'id' => 79,
'user_id' => 1,
'post_categories_id' => 3,
'title' => 'Visite de l\'usine Lokefoil à St Malo',
'description' => 'nc',
'body' => '<p>Aujourd\'hui, on vous embarque avec nous pour visiter l\'atelier de fabrication de foil de la marque Lokefoil. Contrairement à nos vidéos précédentes, Loke montre un autre concept de fabrication basé sur la technologie RTM et non prepreg comme les autres que nous avons visité jusqu\'alors (AFS, Alpine). C\'est aussi une autre dimension et vision de l\'entreprise.</p>
<p>La visite est assurée par Kevin et Loin, les deux co-gérant de cette entreprise française basée à St Malo.</p>
<p><iframe src="https://www.youtube.com/embed/haKrNy4xjxQ" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>
<p></p>
<p></p>
<p><img src="/storage/photos/1/legacy/visite-loke.jpg" alt="Visite lokefoil" /></p>

',
'status' => 'Published',
'views' => 1434,
'last_ip' => NULL,
'created_at' => '2019-08-07 14:53:59',
'updated_at' => '2019-08-07 14:53:59',
),
54 => 
array (
'id' => 80,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2019 - Challenge Chapelle St Michel',
'description' => 'nc',
'body' => '<p>Petit challenge GPS pour les adeptes de la balade en Windfoil </p>
<h2>Description</h2>
<p>Spot : Lac de Serre Ponçon</p>
<p>Parcours : Les eaux douces - St Michel aller / retour</p>
<p>Départ et retour : Restaurant Le Bus (Crots)</p>
<p>Marque de parcours : faire le tour de la chapelle St Michel (ile dans la baie St Michel)</p>
<p>Particularités :</p>
<ul>
<li>Vent souvent léger et irrégulier (moins canalisé) entre Les Chappas et la Baie St Michel. Bonne lecture du plan d\'eau indispensable. Ne pas partir trop petit en voile des eaux douces (de 5 à 10knt d\'écart de vent entre Crots et St Michel)</li>
<li>Passage du pont sans aucun problème (au centre des arches si le lac est plein, partout dans le cas contraire). Attention : vent perturbé derrière les piles ... ne pas trop s\'en approcher, et s\'attendre à des sautes de vent au retour.</li>
</ul>
<p><img src="/storage/photos/1/legacy/st_michel.jpg" alt="Raid St Michel" /></p>
<h2>Liste des temps et distances</h2>
<table>
<tbody>
<tr>
<td>Date</td>
<td>Nom</td>
<td>Durée</td>
<td>Distance</td>
<td>Conditions</td>
<td>Parcours complet ?</td>
</tr>
<tr>
<td>18/08/2019</td>
<td>Eric Collard</td>
<td>1h 0mn 35s</td>
<td>26,84km</td>
<td>Oui</td>
<td>Vent thermique plein Ouest 6 - 15 knt</td>
</tr>
</tbody>
</table>
<p>Si vous tentez le coup (même si vous n\'avez pas jusqu\'au bout), envoyez moi vos traces GPS au format GPX parf email (info@glissattitude.com)</p>
<h2>La marque de parours</h2>
<p>Il faut faire le tour de la chapelle</p>
<p><img src="/storage/photos/1/legacy/chapelle-saint-michel.jpg" alt="Raid St Michel GPS" /></p>',
'status' => 'Published',
'views' => 123,
'last_ip' => NULL,
'created_at' => '2019-08-19 19:04:21',
'updated_at' => '2019-08-19 19:04:21',
),
55 => 
array (
'id' => 81,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2019 - SailGP Finale à Marseille',
'description' => 'Une fois n\'est pas coutume, on vous montre cette fois des voiliers : les F50 du circuit SailGP !',
'body' => '<p><img class="cms-img-fluid" src="/storage/photos/1/legacy/sailJP.jpg" alt="" /></p>
<p>Une fois n\'est pas coutume, on vous montre cette fois des voiliers, mais pas n\'importe lesquels puisqu\'il s\'agit de v&eacute;ritables F1 des mers : les F50 du circuit SailGP !</p>
<p><iframe src="https://www.youtube.com/embed/PfWiSezhjAM" width="1120" height="630" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
'status' => 'Published',
'views' => 97,
'last_ip' => NULL,
'created_at' => '2019-09-21 23:57:09',
'updated_at' => '2019-09-21 23:57:09',
),
56 => 
array (
'id' => 82,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2020 - Avrill - Journée initiation VIP La Ciotat',
'description' => 'nc',
'body' => '<p>Save the date ! Les 25 et 26 Avril 2020, nous organisons un WE initiation / test / démonstration VIP autour du Windfoil à La Ciotat.</p>
<h2>Où ?</h2>
<p>Au sein de la plus belle baie du monde (dixit les journalistes !!), nous aurons l\'occasion de vous faire gouter à des nouvelles sensations incroyables, grâce à ce qui va être l\'évolution de la voile dans les 20 ans à venir.</p>
<p><img src="/storage/photos/1/legacy/IMG_7710.jpg" alt="windfoil" /></p>
<p>La baie de La Ciotat, grâce à sa situation protégée, est l\'un des principaux berceaux de cette nouvelle discipline qui va remplacer la planche à voile traditionnelle dès les JO de 2024.</p>
<p><img src="/storage/photos/1/legacy/IMG_1557.jpg" /></p>
<p>Pour ce WE exceptionnel, nous vous accueillerons au sein du plus vieux club de windsurf de France, et l\'un des plus fermés : le club Neptune. En dehors d\'un cadre privilégié, vous trouverez sur place une restauration de qualité ... bref, de quoi passer un très bon WE convivial.</p>
<p></p>
<h2>Comment ?</h2>
<p>Au cours de cette journée, vous serez accompagnés à terre et sur l\'eau par </p>
<p>Gilles DEJEUFOSSE, votre GO inconditionnel </p>
<p>Eric COLLARD, président de l\'Association Française de Windfoil</p>
<p>Bien sûr, le matériel sera fourni par le magasin GlissAttitude. Il vous suffit de venir avec votre combinaison, en fonction de la météo. Harnais non nécessaire pour les intiations.</p>
<p>En fonction de la météo, on vous proposera</p>
<ul>
<li>une présentation technique du matériel, avec des explications détaillées sur la mécanique du vol en foil</li>
<li>une démonstration par des pratiquants experts</li>
<li>une intiation avec du matériel très accessible, par petits groupes grâce à notree bateau d\'assistance</li>
</ul>
<div>Même lorsque vous ne serez pas "en action", vous pourrez venir sur l\'eau pour observer de près les débats</div>
<div>... et quelque soit la météo, on pourra partager de bon moment à table à midi et le soir.</div>
<h2>Inscriptions</h2>
<p>Confirmez dors et déjà votre présence auprès de Gilles, afin que nous puissions organiser au mieux le Week End. </p>
<h2>Plan d\'accès</h2>
<p><img src="http://www.afwf.fr/wp-content/uploads/2019/05/la-ciotat-detail-1-1024x663.jpg" width="1024" height="663" /></p>',
'status' => 'Published',
'views' => 125,
'last_ip' => NULL,
'created_at' => '2020-04-09 13:16:53',
'updated_at' => '2020-04-09 13:16:53',
),
57 => 
array (
'id' => 83,
'user_id' => 1,
'post_categories_id' => 9,
'title' => 'Pêche au sabre',
'description' => 'nc',
'body' => '<p>omment se nourrir à l\'aide d\'un wind foil ... une leçon de survie par notre fidèle contributeur : Hervé</p>

<p><iframe src="https://www.youtube.com/embed/y5MWDzuD_AI" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>
<p></p>


',
'status' => 'Published',
'views' => 76,
'last_ip' => NULL,
'created_at' => '2020-03-07 16:42:57',
'updated_at' => '2020-03-07 16:42:57',
),
58 => 
array (
'id' => 84,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Tutos L\'assemblage foil / flotteur',
'description' => 'Comment monter votre foil sur le flotteur, sans risques',
'body' => '<p>Avec la définition très approximative de la norme Deep Tuttle, vous avez probablement tous fait l\'expérience du bricolage lors de montage de votre aileron ou foil tout neuf. Pourtant, réaliser un montage correct est primmordial pour ne pas risquer d\'endommager votre foil, votre flotteur, ou d\'en perdre un bout.</p>
<h2>Généralités</h2>
<p><img src="/storage/photos/1/legacy/cales-rake.jpg" alt="trous non alignés " /></p>
<p>L\'assemblage va consister à introduire 2 vis traversant le pont de la planche, et venant se visser dans les 2 inserts métalliques présents dans le talon du foil. Comme illustré sur le shéma, l\'utilisation du foil va provoquer une traction sur la vis arrière et une poussée sur la vis avant. Il faut donc faire attention à 2 points</p>
<ul>
<li>la vis arrière doit traverser intégralement l\'insert pour ne pas en arracher les filets. Cela suppose qu\'ellle soit de longueur adéquat</li>
<li>une rondelle de bonne qualité doit être utilisée sous la vis arrière ou éviter la déteriotation de l\'appiu sur le flotteur</li>
</ul>
<p>Pour introduire le foil dans le boitier, il se peut qu\'il faille forcer car le concept du boitier deep tuttle repose sur 2 faces parallèle. En fonction des tolérences de fabrication, l\'ajustement peut être très serré. Dans tous les cas, ce n\'est pas en serrant les 2 vis que l\'on doit faire rentrer le talon dans le boitier, sous peine d\'endomager les inserts. Au contraire, il faut utiliser le technique du levier : on vis alternativement un vis après l\'autre, en rattrapant à chaque fois le jeu créé par le basculement du mat en avant ou en arrière. C\'est le même principe que le serrage mat sur fuselage :</p>
<p><iframe src="https://www.youtube.com/embed/m6MWuC1nI8A" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>
<h2>Visserie</h2>
<p>Pour tous les assemblages foil / flotteur, on vous conseillle l\'utilisation de vis à tête dite CHC, que l\'on visse avec une clé allen. Cela vous garantira un serrage de qualité. Vous retrouvrez ces vis en vente sur notre site, dans la section Windfoil / Visserie et outillage.</p>
<h2>Trous désaxés</h2>
<p>Au chapitre des situations particulièrement agaçantes, on vous présente le cas trop courant où les inserts du talon ne sont pas alignés aves les trous du boitier. Concrêtement, cela ressemble à ceci</p>
<p><img src="/storage/photos/1/legacy/image2.jpg" alt="trous non alignés " /></p>
<p>Dans cette situation, 80% d\'entre vous vont forcer pour faire rentrer la vis coute que coute, quitte à sortir un peu le talon, mettre les vis, puis serrer le tout jusqu\'à ce que ça passe en force.</p>
<p>Dans le meilleur des cas, vous avez ses inserts en laiton (un métal assez tendre), et l\'insertion des vis de travers va provoquer un \'re-filetage\' de l\'insert ... avec un couinement caractéristique que l\'on connait bien, et un affaiblissement de la robustesse de votre insert.</p>
<p>Dans un cas moins "joyeux", vous avez des inserts en inox, et votre vis va définitivement abîmer le filetage. Dans le pire des cas, elle va se bloquer dedans puis casser lorsque vous allez essayer de l\'extraire en dévissant. </p>
<p>Bref, il faut à tout prix éviter ceci et il existe une solution ultra simple : ovaliser les trous du boitier à l\'aide d\'une lime "queue de rat".</p>
<p><img src="/storage/photos/1/legacy/IMG_5037.jpg" alt="trou ovalisé" /></p>
<p><img src="/storage/photos/1/legacy/IMG_5038.jpg" alt="trou ovalisé" /></p>
<p>Avec cette astuce, vous devriez pouvoir visser vos boulons à 2 doigts !</p>
<h3>Nota</h3>
<p>Dès que vous achetez un pack board + foil chez GlissAttitude, nous réalisons pour vous tous les ajustements (ponçage du talon, ovalisation des trous, mise en place de vis CHC à la bonne taille, et éventuellement réglage du rake) .. pour que ce soit plug and play de vôtre côté.</p>',
'status' => 'Published',
'views' => 3421,
'last_ip' => NULL,
'created_at' => '2022-02-17 08:19:02',
'updated_at' => '2022-02-17 08:19:02',
),
59 => 
array (
'id' => 85,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Tuto Assemblage du foil et serrages  ',
'description' => 'Commen assembler votre foil sans l\'abîmer',
'body' => '<p>L\'assemblage de votre foil est une opération à réaliser avec soin à chaque sortie pour ne pas risquer la casse, ou des sensations anormales.</p>
<h2>Montage</h2>
<p>L\'essentiel du montage consiste à assembler le mat, le fuselage, le stabilisateur et l\'aile. L\'objectif est d\'avoir in fine un assemblage robuste, rigide, et qui ne se déserre pas sur l\'eau ... sans pour autant casser la visserie à cause d\'un serrage trop puissant.</p>
<p><strong>Une règle de base à retenir : ne jamais forcer sur la visserie !</strong></p>
<p>La plupart du temps, un assemblage sans jeu suppose des ajustements plutôt serrés. Que ce soit entre le mat et le fuselage, ou entre le mat et le boitier d\'aileron, il faut souvent forcer pour garantir une navigation sans flou. Même si ça rentre un peu en force, il ne faut jamais serrer comme un mulet pour faire rentrer \'papa dans maman\'. Au contraire, on utilise la technique du levier.</p>
<p><iframe src="https://www.youtube.com/embed/m6MWuC1nI8A" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>
<h2>Visserie et outils</h2>
<p>Pour garantir des montages réguliers sans anicroche, on vous suggère d\'équiper votre foil de visserie inox à tête TORX. C\'est le type d\'empreinte la plus robuste à la longue.</p>
<p>Pour manipuler les vis Torx, munissez vous de clés de bonne qualité, comme celles-ci</p>
<a href="https://marseille.glissattitude.com/windfoil/u38521s1-gliss-attitude-cle-torx-facom-t30-gliss-attitude.html">
<img src="/storage/photos/1/legacy/u38521s1.jpg" alt="Clé torx facom T30" /></a>
<h2>Couples de serrages</h2>
<p>Si vous avez des doutes sur le serrage que vous devez appliquer, vous pouvez invesrtir dans une clé dynamométrique. Pour tout ce qui est assemblages intenes du foil (mat sur fuselage, ailes et stab), vous pouvez appliquer un serrage de l\'ordre de 5 à 8 NM.</p>
<h2>Entretien</h2>
<p>Même si il est souvent tentant de tranporter votre foil assemblé pour gagner du temps, nous conseillons tout de même de démonter et rincer votre foil à chaque utilisation. Si vous omettez cette précaution, vous ne pourrez pas en vouloir à quiconque si votre foil présente des traces de corrosion.</p>
<p>Par ailleurs, nous vous conseillons d\'enduire la visserie de graisse isolant galvanique type tef-gel tous les 3 ou 4 montages.</p>
<a href="https://marseille.glissattitude.com/windfoil/u32582s1-gliss-attitude-tef-gel-gliss-attitude.html">
<img src="/storage/photos/1/legacy/u32582.jpg" alt="Tefgel GlissAttitude" /></a>
<p></p>
<h2>Montage sur le flotteur</h2>
<p><iframe src="https://www.youtube.com/embed/yWkmnQbtOf4" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>
',
'status' => 'Published',
'views' => 3214,
'last_ip' => NULL,
'created_at' => '2022-02-18 08:19:02',
'updated_at' => '2022-02-18 08:19:02',
),
60 => 
array (
'id' => 86,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2020 - Journée test Exocet Serre Ponçon',
'description' => 'nc',
'body' => '<p><img src="/storage/photos/1/legacy/test-day-exocet-fb_copy.jpg" alt="test day exocet 2020" /></p>
<p></p>
<p><img src="/storage/photos/1/legacy/test-day-exocet.jpg" alt="test exocet GlissAttitude" /></p>',
'status' => 'Published',
'views' => 54,
'last_ip' => NULL,
'created_at' => '2020-07-03 22:56:32',
'updated_at' => '2020-07-03 22:56:32',
),
61 => 
array (
'id' => 87,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Protéger le nez d\'une planche de wind foil',
'description' => 'On ne va pas se mentir, la casse du nez du flotteur est l\'accident numéro 1 en windfoil.',
'body' => '<p>On ne va pas se mentir, la casse du nez du flotteur est l\'accident numéro 1 en windfoil. En cas de catapulte vers l\'avant (assez fréquente quand on débute), le mat a la facheuse tendance à vouloir embrasser le joli nez tout neuf de votre flotteur afin d\'y laisser une trace assez tenace ;)</p>
<p>Partant de ce constat, tout le monde y va de sa solution pour éviter de passer trop souvent par la case atelier, avec immobilisatioh du flotteur pour au moins une semaine. Après plus de 5 ans de pratique, et plus d\'une centaine de réparation de nez effectuées à l\'atelier GlissAttitude, faisons le point sur les solutions qui fonctionnent et ne fonctionnent pas.</p>
<p>Globalement, on classera les solutions dans 2 catégories</p>
<ul>
<li>celles qui essayent d\'éviter que le mat ne touche le nez</li>
<li>celles qui tentent d\'amortir la choc</li>
<li>celles qui tentent de répartir la pression d\'impact</li>
</ul>
<h3>La famille des déviateurs</h3>
<p>Cette solution qui consiste à éviter que le mat ne touche le nez est la plus attirante car elle ne dénature pas le look de la planche, et évite de mettre l\'accent sur le stress du pratiquant. Elle est assez discrête et peu onéreuse. Techniquement, il s\'agit d\'une pièce que l\'on place sur le chemin du mat à quelques cm du pied de mat. Cela ressemble soit à un champignon (Déviator) soit à une écuelle de chien.</p>
<p><img src="/storage/photos/1/legacy/deviator.jpg" alt="deviator" /> <img src="/storage/photos/1/legacy/deviateur.jpg" alt="deviateur" /> <img src="/storage/photos/1/legacy/surfbent.jpg" alt="surfbent" /></p>
<p>Malheureusement, cette soution est peu efficace. Plus précisément, elle n\'est efficace que sur des petits chocs et évitera donc les égratignures. Sur des gros chocs (ceux qui sont en mesure de casser réellement le nez), ce type de protection peut avoir 2 effets.</p>
<ul>
<li>Pour les déviateurs type champignon, ils évitent le choc dans l\'axe, mais provoquent en général des dégars décalés.</li>
<li>Pour le dispositifs plus rigides (type écuelle de chien), ils provoquent dans le meilleur des cas une rutpure du pied de mat, et dans le pire des cas un arrachement du rail de pied de mat (c\'est du vécu)</li>
</ul>
<p>En prenant un peu de recul, il est facile à comprendre que l\'inertie d\'un gréement complet de plus de 4m50 de long provoque un appui démesuré si on essaye de le stopper avec un bras de levier de 20cm ! Mettez votre main entre le rail de votre planche et votre mat lorsque le gréement est dans l\'eau et vous allez comprendre ...</p>
<h3>La famille des absorbeurs</h3>
<p>Cette fois, on parle des diveses mousses à coller sur le nez de la planche. Là, on tente de stopper le gréement en le retenant avec un bras de levier de l\'ordre de 80cm au lieu de 20cm. Evidemment, l\'impact est beaucoup moins puissant, mais il reste important.</p>
<p><img src="/storage/photos/1/legacy/mousse1.jpg" alt="mousse" /> <img src="/storage/photos/1/legacy/mousse2.jpg" alt="mousse" /></p>
<p>Cette fois encore, la protection va absorber des petits impacts, mais pas des gros chocs. le principe de l\'absorption consiste à transformer l\'énergie en chaleur. On comprend bien que ce n\'est pas quelques cm de mousse qui va absorber l\'énergie d\'un gréement de 10kg qui vient frapper le nez à 30km/h ! Nous avons vu passer de tout : de la vulgaire frite de piscine collée sur le nez, à la mousse utra technique ... rien n\'y fait, toutes ses solutions masquent la rupture, mais lorsqu\'on la décolle, on a la joie de constater une rutpure qui a gentillement eu le temps de prendre l\'eau avant de passer à la case réparation.</p>
<h3>La répartition de l\'énergie</h3>
<p>On a bien compris, le choc aura lieu tôt ou tard, et il sera d\'autant moins violent que le bras de levier sera long.</p>
<p><img src="/storage/photos/1/legacy/impact.jpg" alt="choc nez" /></p>
<p>Comme souvent en mécanique, la meilleure solution pour éviter les conséquences d\'un choc important consiste à disperser son énergie, plus qu\'à l\'absorber. Dans le cas qui nous intéresse, la dernière solution consiste donc à répartir l\'énergie du choc sur une surface la plus important possible, au lieu des quelques cm2 de l\'impact initial. Pour se faire, vous allez placer au point d\'impact une coque rigide qui va transmettre l\'énergie du choc sur l\'ensemble du nez ... en espérant que la structure globale du nez pemette de résister au choc</p>
<p>Rien de très nouveau là dedans. Pour ceux qui sont déjà allés dans les écoles de funboard ou les centres de location, vous avez certainement vu des flotteurs affublés de ces coques blanches collées sur le nez. Si ces professionels utiisent cet élément couteux (160 à 200eur pièce) depuis plus de 25ans, ce n\'est pas un hazard : c\'est simplement que c\'est la solution la plus efficace, même si elle ne garantira jamais du 100%.</p>
<p><img src="/storage/photos/1/legacy/nez.jpg" alt="protection nez" /><img src="/storage/photos/1/legacy/blast.jpg" alt="protection nez" /> </p>
<p>Le hic, c\'est que pour que cela fonctionne, il fait réunir 2 impératifs</p>
<ul>
<li>que la coque soit très rigide, donc relativement épaisse et donc lourde</li>
<li>que la coque ai exactement la forme su nez pour être en contact avec celui-ci sur l\'essentiel de sa surface. Elle ne poura donc être utilisée que pour un modèle de planche </li>
</ul>
<p>Bien évidemment, on peut réaliser ceci avec un peu d\'élégance ...</p>
<p><img src="/storage/photos/1/legacy/nez2.jpg" alt="protection nez windsurf carbone" /><img src="/storage/photos/1/legacy/nez3.jpg" alt="protection nez windsurf fibre" /></p>
<p>Il existe de nombreux <a href = "https://www.youtube.com/watch?v=kw-iTg1_PX4">tuto</a> sur le net concernant la réalisation de ces protections de nez, alors si vous êtes bricoleur, lancez vous !</p>

',
'status' => 'Published',
'views' => 4122,
'last_ip' => '::1',
'created_at' => '2022-02-20 08:19:02',
'updated_at' => '2022-03-23 23:45:56',
),
62 => 
array (
'id' => 88,
'user_id' => 1,
'post_categories_id' => 4,
'title' => 'Tuto protection nez Patrick Air Inside',
'description' => 'Comment construire une portection de nez rigide',
'body' => '<p>Notre fidèle contributeur, Hervé, vous fait cadeau aujourd\'hui d\'un très bon tuto sur la réalisation d\'une protection de nez sur mesure pour votre flotteur ... très utile pour protéger des catapultes en windfoil. Merci à lui une fois de plus !</p>
<p>Je précise que la version réalisée ici par Hervé est conçue dans un objectif très light ... ce qui est cohérent avec le fait que le monsieur a un excellent niveau de pratique et ne masacre donc pas régulièrement sa planche. Pour les débutants ou les pratiquants moins aguerris, ne lésinez pas sur la stratification et les épaisseurs : il faut que la coque soit la plus rigide et solide possible. Vous pouvez donc voir un peu plus large. Je vous conseille au minimum 4 couches de carbone ou 5 couches de fibre de verre en 200g/m2, mais vous pouvrez allez bien au delà.</p>
<h3>Préambule</h3>
<p>Je ne prétends rien réinventer ; les tutos sur une telle fabrication sont déjà nombreux...<br />Par contre, je tiens à vous inviter à jeter un coup d’œil sur cette méthode ultra simplifiée où aucune découpe de laize n\'est nécessaire, aucun patron n\'est à dessiner et là nous devons encore remercier les concepteurs de cette board car la géométrie du « nose » est quasi rectiligne. Cela permet d\'employer du simple ruban de carbone (ou de verre selon ses goûts) sans avoir de difficulté particulière pour suivre les formes avec le tissu.<br />Ce travail de stratification prend au maximum une demie heure . Il est conçu pour obtenir un produit léger ! D\'ailleurs, l\'astuce du ruban de tissu (carbone ou verre) devrait également permettre de traiter les noses « classiques » des flotteurs larges...</p>
<h3><br />Phase 1 – Le matériel</h3>
<p>Le matériel suivant sera nécessaire à la réalisation de cette pièce carbone-verre de protection :<br />au moins 5 mètres de ruban carbone 80 mm de largeur &amp; résine Epoxy lente du genre R123 (temps de travail une heure à 20°C),<br />tissus de verre,<br />film étirable type cuisine,<br />petit outillage (pinceau, mini rouleau, gants vinyle, godets, acétone, bâche de protection...).</p>
<p><img src="/storage/photos/1/legacy/outils.jpg" alt="outillage" /></p>
<h3>Phase 2 – Préparation du flotteur</h3>
<p>Cette phase est incontournable car nous allons procéder à une stratification directement sur la forme du flotteur.<br />La partie avant de ce dernier est intégralement enrobée de film étirable (type cuisine). Ne pas hésiter à commencer par deux ou trois tours bord sur bord puis à croiser en tuilant quelques passes d\'étirable dans l\'axe du flotteur de manière à parfaitement recouvrir l\'intégralité de la surface de l\'avant (pont et carène). Ce film doit empêcher toute infiltration de résine sur le flotteur lui-même, il sert à l\'issue de démoulant.<br />Disposer alors la board sur un établi et la sécuriser avec une sangle selon une pente franche à piquer pour contraindre la résine excédentaire à goutter depuis l\'extrémité avant sans possibilité de ruisseler sous la carène.</p>
<p><img src="/storage/photos/1/legacy/global.jpg" alt="outillage" /></p>
<h3>Phase 3 – La stratification</h3>
<p>Le mélange de résine est effectué conformément aux indications du fabriquant ; bien mélanger. Respecter notamment la norme de température (idéale avec la R123, environ 20°). Prévoir environ 150 ml de résine (le mélange résine + durcisseur) de manière à pouvoir correctement traiter les cinq couches de tissu.<br />Les cinq coupons de ruban carbone découpés à la longueur désirée (environ 1 mètre) sont alors disposés successivement sur la partie à protéger (cliché 2) et travaillés à chaque couche au pinceau et au petit rouleau de peintre de manière à parfaitement gorger de résine le tissu de carbone.<br />Les cinq laizes ayant été ainsi appliquées, soigner en finale au rouleau pour parfaire la disposition de l\'ensemble (temps global de travail d\'environ 20-30 minutes).<br />Laisser polymériser 24 heures.</p>
<h3>Phase 4 – Démoulage – usinage &amp; fixation</h3>
<p>Après 24 heures, démouler la pièce carbone et donnez lui le contour désiré à l\'aide d\'une disqueuse et d\'une ponceuse à bande et travailler à la cale à main pour la finition.<br />Si désiré, vous pouvez renforcer cette pièce par l\'application d\'une ou deux couches de tissu de verre sur la face interne. Laisser polymériser 24 heures.<br />Reprendre le profil du contour à la cale à poncer si nécessaire.<br />Nettoyer la zone de collage (flotteur et pièce en stratifié) avec un tampon de tissu à peine imbibé d\'alcool à brûler (soyez prudents sur le flotteur).<br />Appliquer alors une couche raisonnable de produit type Sykaflex ou Bostik pour assurer d\'une part la fixation de la pièce mais également la fonction d\'amortisseur.<br />Il ne reste plus qu\'à patienter encore 24-48 heures pour aller profiter de la bête carénée !</p>
<p><img src="/storage/photos/1/legacy/profil.jpg" alt="outillage" /></p>
<p><img src="/storage/photos/1/legacy/detail.jpg" alt="outillage" /></p>
<h3>Bilan</h3>
<p>Sans renfort de verre, notre pièce purement carbone une fois profilée pèse 145 g pour une épaisseur de 2 à 2.5 mm.<br />N\'ayez donc aucune crainte de dégrader la remarquable vivacité en vol de cette board magique qui gagne encore en caractère sur le plan esthétique grâce à cette pièce carbone.</p>
<p></p>
<p>Si vous voulez en savoir plus sur les diverses solutions de protection de nez de flotteur, c\'est par <a href = "/blog/protection-nez-windfoil.html">ici</a></p>',
'status' => 'Published',
'views' => 353,
'last_ip' => '::1',
'created_at' => '2022-02-19 08:19:02',
'updated_at' => '2022-03-23 23:46:01',
),
63 => 
array (
'id' => 89,
'user_id' => 1,
'post_categories_id' => 1,
'title' => 'Notre sélection foils 2021',
'description' => 'Petite sélection de nos foils référence en 2021',
'body' => '<div class="container">
<div class="row">
<div class="col">
<p>Avec l\'explosion de la pratique du foil en quelques années, la plupart des marques propopsent désormais leur modèle, et ceci vient s\'ajouter aux foils proposés par les fabriquants spécifiques.</p>
<p>La conséquence est<span style="color: #ff0000;"><strong> un choix exceptionnellement vaste</strong></span> pour un sport qui n\'a que 5 ans d\'existance ... et cela devient logiquement un véritable casse tête pour celui qui désire investir. Bien évidemment, plus on cherche des avis pour fonder son choix, plus on est inondé de conseils contradictoires.</p>
<p>Pour autant, nos nombreux tests montrent que les modèles sont très différents entre eux, et logiquement certains conviendront mieux que d\'autres à votre pratique personnelle. On essaye donc ici de faire un point à un instant T avec notre point de vue.</p>
</div>
<div class="col">
<div style="background-color: powderblue; padding: 10px; margin-bottom: 10px;">Non, il n\'y a pas 1 foil meilleur que les autres. Ce n\'est pas parceque vous me voyez souvent naviguer avec du F4, Phantom et Moses que se sont les meilleurs foils, mais simplement que ce sont des références intéressantes qui me servent comme base de comparaison pour leurs qualités respectives.</div>
<div style="background-color: powderblue; padding: 10px;">Ce n\'est pas parceque vous avez fait un choix différent du nôtre que nous pensons que vous avez tort. D\'abord car nous testons avec nos ressentis, et ensuite car nos choix s\'appuient sur des comparaisons : quand on conseille un modèle en notre âme et conscience, c\'est qu\'on le considère comme le meilleur choix, mais cela ne veut pas dire que ce soit le seul.</div>
</div>
</div>
</div>
<h2>Les paramètres du choix</h2>
<p>Les choses étant posées, on nous interroge quotidiennement sur le choix d\'un foil et, comme je réponds systématiquement, faire un choix à un instant T dans un panel si large nécessite idéalement de prendre en compte de tous les éléments suivants</p>
<ul>
<li>Votre niveau technique en foil</li>
<li>Votre gabarit</li>
<li>Vos attirances (vitesse, facilité, maniabilité, etyc.)</li>
<li>Vos conditions de navigation principales (plan d\'eau, plage de vent)</li>
<li>Votre flotteur</li>
<li>Vos voiles (modèles et tailles)</li>
<li>Votre budget</li>
<li>Votre envie d\'évolution</li>
<li>Vos contraintes de transport et de stockage</li>
</ul>
<p>En secouant le tout, on a des chances de faire un choix qui va permettre d\'optimiser le plaisir que vous allez prendre sur l\'eau, tout en respectant vos contraintes. Evidemment, compte tenu du nombre de paramètres, ce choix doit être très individualisé. Qui plus est, le conseil que nous pourrons donner évolue en fonction des nouveaux modèles (ou nouvelles configurations) qui sortent régulièment et viennent bouleverser (ou pas) la donne.</p>
<p>Pour faire ce choix, notre base de donnée de test (<a href="https://windfoilfan.glissattitude.com">https://windfoilfan.glissattitude.com</a>) est un outil précieux mais je me suis tout de même essayé à l\'exercice de faire une proposition de modèle préférentiel pour chaque case d\'une matrice PROGRAMME / GABARIT</p>
<h2>Sélection rapide (au 01/11/2020)</h2>
<p>En sélectionnant 2 paramètres uniquement, que sont le gabarit et le programme de navigation, voici une petite sélection. Pour adapter le résultat au cas de chacun, il faudra bien entendu prendre en compte tous les autres paramètres.</p>
<table style="border-spacing: 10px; border-collapse: separate;">
<tbody>
<tr>
<td style="width: 10%;"></td>
<td style="width: 30%;">Petit gabarit</td>
<td style="width: 30%;">Gabarit moyen</td>
<td style="width: 30%;">Gros gabarit</td>
</tr>
<tr>
<td>
<p>DEBUTANT</p>
<p>Objectif : voler avec un investissement minimum</p>
</td>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/starboard-supercruiser-2019"><strong>Starboard Supercruiser</strong></a> : pour ceux qui favorisent le côté rassurant en acceptant une vitesse réduite, et une évolutivité moindre</p>
<p><strong>Alpinefoil Revo</strong> : pour ceux qui favorisent l\'évolutivité (compatible avec toute la gamme d\'aile Alpine)</p>
</td>
<td style="background-color: powderblue;">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/fanatic-flow-900-2019"><strong>Fanatic Flow 1200</strong></a> : pour ceux qui privilégient le contrôle et la polyvalence</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/horue-vini-pro-v2-2020"><strong>Horue Vini V2</strong></a> : pour les conditions de vent très faible si on ne veut pas toiler gros, au prix d\'un contrôle plus complexe</p>
</td>
</tr>
<tr>
<td>
<p>FREERIDE</p>
<p>Objectif : balade avec une vitesse linéaire</p>
</td>
<td style="background-color: powderblue;"><a href="https://windfoilfan.glissattitude.com/devices/foil/taaroa-noe-80-freeride-2018"><strong>Taaroa Noe 80</strong></a> : Pour ceux qui veulent accompagner un flotteur plutôy étroit, et des voiles inférieures à 7.5m2</td>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/ga-mach-1-2019"><strong>Moses Vento Freeride</strong></a> (ou GA Mach 1 2020) : à choisir en mat de 85 ou 95 en fonction de la largeur du flotteur. Pour ceux qui privilégient un foil vivant, peu rapide, mais qui décolle tôt et offre des belles sensations de glisse. Excellent également en mode FREEWAVE dans le vent soutenu</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/afs-wind-85-2019"><strong>AFS Wind 85</strong></a> (F770 ou F1080 au dessus de 85kg) : Pour ceux qui préfèrent une attitude calée, plutôt rapide, et acceptent un décollage un peu plus tardif que la moyenne</p>
</td>
</tr>
<tr>
<td>
<p>SLALOM</p>
<p>Objectif : évolution (très) rapide majoritairement travers</p>
</td>
<td style="padding: 0; background-color: white;" colspan="3">
<table style="margin-bottom: 0;">
<tbody>
<tr>
<td style="background-color: powderblue;" colspan="2"><a href="https://windfoilfan.glissattitude.com/devices/foil/lokefoil-lk1-850-2018"><strong>Lokefoil Lk1</strong></a> : Pour ceux qui aiment naviguer en finesse sur un foil vivant sans surtoiler</td>
<td style="width: 33%; background-color: white;"></td>
</tr>
<tr style="width: 33%;">
<td style="width: 33%; background-color: white;"></td>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/taaroa-noe-97-uhm-2020"><strong>Taaroa Noe 97 Freerace</strong></a> : Pour ceux qui cherchent un maximum de contrôle dans toutes les conditions (même formées)</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/afs-wind-95-f700-2019"><strong>AFS Wind 95</strong></a> : Pour ceux qui aiment une conduite calée, où on peut passer de la puissance pour faire parler le GPS</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>
<p>FREERACE</p>
<p>Objectif : évolution rapide avec un mix Travers et Up&amp;Down</p>
</td>
<td style="padding: 0; background-color: white;" colspan="3">
<table style="margin-bottom: 0;">
<tbody>
<tr>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/phantom-iris-x-proto-2-2019"><strong>Phantom IRIS X</strong></a> : Pour ceux qui privilégient une navigation en finesse et aiment un foil vif mais avec une glisse incroyable</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/zeeko-bullet-v1-2020"><strong>Zeeko Bullet</strong></a> : Pour ceux qui veulent un foil sage mais efficace et extrêmement polyvalent sans changer de fuselage</p>
</td>
<td style="width: 33%; background-color: white;"></td>
</tr>
<tr style="width: 33%;">
<td style="width: 33%; background-color: white;"></td>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/starboard-carbon-95-2017"><strong>Starboard 95</strong></a> : Pour ceux qui privilégient liberté, polyvalence et efficacité, et acceptent une moindre raideur transversale (très bonne en torsion)</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/f4-race-foil-2019"><strong>F4</strong></a> : Pour ceux qui cherchent un ensemble contrôle / vitesse / polyvalence quasi imbattable, mais acceptent une qualité de fabrication des fuselages et une finition standard en retrait.</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>
<p>RACE LOISIR</p>
<p>Objectif : Up&amp;Down et Raids</p>
</td>
<td style="padding: 0; background-color: white;" colspan="3">
<table style="margin-bottom: 0;">
<tbody>
<tr>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/phantom-iris-x-proto-2-2019"><strong>Phantom IRIS X VMG</strong></a> : Pour ceux qui privilégient la sensation de glisse, et acceptant un pilotage plus technique.</p>
</td>
<td style="width: 33%; background-color: white;"></td>
</tr>
<tr style="width: 33%;">
<td style="width: 33%; background-color: white;"></td>
<td style="background-color: powderblue;" colspan="2">
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/alpinefoil-a1-race-2020"><strong>Alpine A1 Race</strong></a> : Pour ceux qui privilégient le rapport Efficacité / Prix ... impressionnant dans le très light</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/lokefoil-lk-race-2019"><strong>Lokefoil LK Race</strong></a> : Pour ceux qui veulent voler coute que coute, mais qui sauront gérer la puissance d\'un pur sang</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<p><img src="/storage/photos/1/selection.jpg" alt="" /></p>',
'status' => 'Published',
'views' => 6120,
'last_ip' => NULL,
'created_at' => '2020-10-01 22:19:52',
'updated_at' => '2020-10-01 22:19:52',
),
64 => 
array (
'id' => 90,
'user_id' => 1,
'post_categories_id' => 1,
'title' => 'Notre sélection flotteur 2021',
'description' => 'Petite sélection de nos flotteurs référence en 2021',
'body' => '<div class="container">
<div class="row">
<div class="col">
<p>Avec l\'explosion de la pratique du foil en quelques années, la plupart des marques proposent désormais leur modèle de flotteur dédié.</p>
<p>La conséquence est<span style="color: #ff0000;"><strong> un choix exceptionnellement vaste</strong></span> pour un sport qui n\'a que 5 ans d\'existance ... et cela devient logiquement un véritable casse tête pour celui qui désire investir. Bien évidemment, plus on cherche des avis pour fonder son choix, plus on est inondé de conseils contradictoires.</p>
<p>Pour autant, nos nombreux tests montrent que les modèles sont très différents entre eux, et logiquement certains conviendront mieux que d\'autres à votre pratique personnelle. On essaye donc ici de faire un point à un instant T avec notre point de vue.</p>
</div>
<div class="col">
<div style="background-color: powderblue; padding: 10px; margin-bottom: 10px;">Non, il n\'y a pas 1 flotteur meilleur que tous les autres. Ce n\'est pas parceque vous me voyez souvent naviguer avec du Phantom, JP et Starboard que se sont les meilleurs flotteurs, mais simplement que ce sont des références intéressantes qui me servent comme base de comparaison pour leurs qualités respectives.</div>
<div style="background-color: powderblue; padding: 10px;">Ce n\'est pas parceque vous avez fait un choix différent du nôtre que nous pensons que vous avez tort. D\'abord car nous testons avec nos ressentis, et ensuite car nos choix s\'appuient sur des comparaisons : quand on conseille un modèle en notre âme et conscience, c\'est qu\'on le considère comme le meilleur choix, mais cela ne veut pas dire que ce soit le seul.</div>
</div>
</div>
</div>
<h2>Les paramètres du choix</h2>
<p>Les choses étant posées, on nous interroge quotidiennement sur le choix d\'un flotteur et, comme je réponds systématiquement, faire un choix à un instant T dans un panel si large nécessite idéalement de prendre en compte de tous les éléments suivants</p>
<ul>
<li>Votre niveau technique en foil</li>
<li>Votre gabarit</li>
<li>Vos attirances (vitesse, facilité, maniabilité, etc.)</li>
<li>Vos conditions de navigation principales (plan d\'eau, plage de vent)</li>
<li>Votre foil</li>
<li>Vos voiles (modèles et tailles) ... la toile max a en particulier une  grosse influance</li>
<li>Votre budget</li>
<li>Votre envie d\'évolution</li>
</ul>
<p>En secouant le tout, on a des chances de faire un choix qui va permettre d\'optimiser le plaisir que vous allez prendre sur l\'eau, tout en respectant vos contraintes. Evidemment, compte tenu du nombre de paramètres, ce choix doit être très individualisé. Qui plus est, le conseil que nous pourrons donner évolue en fonction des nouveaux modèles (ou nouvelles configurations) qui sortent régulièment et viennent bouleverser (ou pas) la donne.</p>
<p>Pour faire ce choix, notre base de donnée de test (<a href="https://windfoilfan.glissattitude.com">https://windfoilfan.glissattitude.com</a>) est un outil précieux mais je me suis tout de même essayé à l\'exercice de faire une proposition de modèle préférentiel pour chaque case d\'une matrice PROGRAMME / GABARIT</p>
<h2>Les associations</h2>
<p>A chacun de mes articles, je rappelle l\'importance que j\'accorde à la cohérence des associations flotteur / foil / gréement. A chaque fois, j\'ai des remarques concernant des assemblages anachroniques qui fonctionnent également. Alors oui, mes recommandations concernent le cas général et ont pour objectif de vous retrouver dans une situation où les réglages seront aisés, les équilibres simples à trouver, et la plage d\'utilisation la plus large possible. </p>
<p>Il existe donc plein d\'autre solutions moins évidentes, et qui fonctionnent certainement dans des cas particuliers. Je me méfie toutefois car pour avoir testé parfois des assocations atypiques que l\'on m\'avait vendu comme parfaites, je me suis demandé comment les propriétaire faisaient pour naviguer ainsi. Ils avaient développé des habitudes incroyables pour compenser des équilibres précaires à mon gout. Quand on n\'a testé que des solutions inconfortables, on ne s\'imagine pas ce que peut être une solution bien pensée. </p>
<h2>Sélection rapide (au 18/02/2021)</h2>
<p>En sélectionnant 2 paramètres uniquement, que sont le gabarit et le programme de navigation, voici une petite sélection. Pour adapter le résultat au cas de chacun, il faudra bien entendu prendre en compte tous les autres paramètres.</p>
<p>&lt;tr &gt; &lt;td &gt;</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/starboard-carbon-95-2017"><strong>Starboard 95</strong></a> : Pour ceux qui privilégient liberté, polyvalence et efficacité, et acceptent une moindre raideur transversale (très bonne en torsion)</p>
<p><a href="https://windfoilfan.glissattitude.com/devices/foil/f4-race-foil-2019"><strong>F4</strong></a> : Pour ceux qui cherchent un ensemble contrôle / vitesse / polyvalence quasi imbattable, mais acceptent une qualité de fabrication des fuselages et une finition standard en retrait.</p>
<table style="border-spacing: 10px; border-collapse: separate;">
<tbody>
<tr>
<td style="width: 10%;"></td>
<td style="width: 30%;">Petit gabarit</td>
<td style="width: 30%;">Gabarit moyen</td>
<td style="width: 30%;">Gros gabarit</td>
</tr>
<tr>
<td>
<p>FREERIDE &amp; DEBUTANT</p>
<p>Objectif : voler avec un maximum de stabilité </p>
</td>
<td style="background-color: powderblue;">
<p>Exocet Freefoil 112</p>
</td>
<td style="background-color: powderblue;">
<p><span>JP Hydrofoil 120</span></p>
<p><span></span></p>
<p><span></span></p>
<p><span></span></p>
<p><span></span></p>
</td>
<td style="background-color: powderblue;">
<p><span>Exocet Freefoil 132</span></p>
</td>
</tr>
<tr>
<td>
<p>FREERIDE &amp; FREEMOVE</p>
<p>Objectif : de la maniabilité pour caerver </p>
</td>
<td style="background-color: powderblue;">Zeeko Airwave</td>
<td style="background-color: powderblue;">
<p><b>JP Freefoil 115</b></p>
</td>
<td style="background-color: powderblue;">
<p><b>tabou Magic Carpet</b></p>
</td>
</tr>
<tr>
<td>
<p>SLALOM</p>
</td>
<td style="background-color: powderblue;">Patrick Foil 125</td>
<td style="background-color: powderblue;">
<p><b>IRIS X 83</b></p>
</td>
<td style="background-color: powderblue;">
<p><b>Starboard FOil SL 81</b></p>
</td>
</tr>
<tr>
<td>
<p>SLALOM</p>
</td>
<td style="background-color: powderblue;">Patrick Foil 125</td>
<td style="background-color: powderblue;">
<p><b>IRIS X 83</b></p>
</td>
<td style="background-color: powderblue;">
<p><b>Starboard FOil SL 81</b></p>
</td>
</tr>
<tr>
<td>
<p>SLALOM</p>
</td>
<td style="background-color: powderblue;">Patrick Foil 125</td>
<td style="background-color: powderblue;">
<p><b>IRIS X 83</b></p>
</td>
<td style="background-color: powderblue;">
<p><b>Starboard FOil SL 81</b></p>
</td>
</tr>
</tbody>
</table>
<p><img src="/storage/photos/1/selection.jpg" alt="" /></p>',
'status' => 'Published',
'views' => 8291,
'last_ip' => '::1',
'created_at' => '2021-02-18 15:49:20',
'updated_at' => '2022-03-23 23:13:00',
),
65 => 
array (
'id' => 91,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2021 - La Foilie au Lac',
'description' => 'Le WE du 12 et 13 Juin 2021 avait lieu la première édition de LA FOILIE DU LAC.',
'body' => '<p><img src="/storage/photos/1/legacy/foilie.png" /></p>
<p><img src="/storage/photos/1/legacy/IMG_20210613_120803.jpg" /></p>
<p>Le WE du 12 et 13 Juin 2021 avait lieu la premi&egrave;re &eacute;dition de LA FOILIE DU LAC. Petit retour sur ce tr&egrave;s bel &eacute;v&egrave;nement.</p>
<p>En cette p&eacute;riode ou tous les rassemblements &eacute;taient interdit depuis des mois, cela faisait beaucoup de bien de revoir des t&ecirc;tes connues. Disons le tout de suite, entre le d&eacute;confinement et l\'explosion du Wing, cet &eacute;v&egrave;nement a attir&eacute; beaucoup de monde, &agrave; le fois chez les exposants et les clients potentiels.</p>
<p>La manifestation, organis&eacute;e de fa&ccedil;on b&eacute;n&eacute;vole (OneKite, Raids &amp; Aventures, AWR) et disons le tr&egrave;s professionnelle, se tenait &agrave; Tr&eacute;fort, juste &agrave; c&ocirc;t&eacute; du camping, et les pieds dans l\'herbe. Le stationnement &eacute;tait un peu tendu compte tenu du monde qui s\'est d&eacute;plac&eacute; pour l\'occasion, mais avec un peu de patience, tout le monde a r&eacute;ussi &agrave; se poser.</p>
<p>La manifestation &eacute;tait d&eacute;volue au FOIL sous toutes ses formes. On y a vu des Wing, des Windfoil, des Kitefoil et m&ecirc;me un cata &agrave; foil tir&eacute; par un kite.</p>
<p>Les conditions &eacute;taient id&eacute;ales avec</p>
<ul>
<li>un lac plein &agrave; raz bord (avec de l\'eau jusqu\'au cou, on avait encore les pieds dans l\'herbe !!! autant dire que les exposants &eacute;taient aux anges : peu de risque de voir un foil tanqu&eacute; dans les cailloux</li>
<li>un grand soleil (on a m&ecirc;me bien re&ccedil;u c&ocirc;t&eacute; coups de soleil)</li>
<li>un petit vent parfait entre 10 et 15knt ... quoique irr&eacute;gulier car un peu en travers de l\'axe du lac&nbsp;</li>
</ul>
<div><img src="/storage/photos/1/legacy/IMG_3268.jpeg" /></div>
<p>En terme de matos, on y a retrouv&eacute; tous les t&eacute;nors du domaine du Wing (Duotone, Fone, Takuma, AFS, Patrik, Ozone, Alpine, Slingshot, Zeeko etc.) et quelques marques inconnues.&nbsp;</p>
<p><img src="/storage/photos/1/legacy/10091357999999999embeddedImage.jpg" /></p>
<p>En Windfoil, c\'&eacute;tait beaucoup plus light, avec uniquement Lokefoil (venu direct de Bretagne !), Fanatic, Patrik, ASF, Zeeko et Alpine ... on voit bien que la mode du wing a pouss&eacute; les exposants &agrave; choisir la solution la plus simple.&nbsp;</p>
<p><img src="/storage/photos/1/legacy/IMG_20210612_132740.jpg" /></p>
<p>C&ocirc;t&eacute; public, soyons honn&egrave;te, ce rassemblement a surtout attir&eacute; des curieux qui voulaient mettre un pied sur le wingfoil, mais qui n\'avaient jamais essay&eacute;. Beaucoup &eacute;taient sur place, et ont &eacute;t&eacute; attir&eacute;s par les drapeaux et la tr&egrave;s bonne animation micro de R&eacute;gis. Par voie de cons&eacute;quence, le spectacle sur l\'eau n\'&eacute;tait pas &nbsp;incroyable, mais heureusement, les exposants eux m&ecirc;me ont &eacute;t&eacute; &agrave; l\'eau tour &agrave; tour pour montrer que &ccedil;a pouvait aussi voler (!!).</p>
<p><img src="/storage/photos/1/legacy/IMG_3267.jpeg" /></p>
<p>Le public windfoil et kitefoil &eacute;taient bien moins nombreux, mais fort logiquement un peu plus connaisseur.</p>
<p>Les choses seront certainement plus &eacute;quilibr&eacute;es dans une ou 2 saisons, quand il y aura plus de pratiquants aguerris en wingfoil. Ce qui est certain, c\'est que cette manifestation a bien montr&eacute; que l\'apparente facilit&eacute; d\'acc&egrave;s du wing fait un carton aupr&egrave;s du grand public non connaisseur. Pour beaucoup, c\'est l\'extension naturelle du paddle gonflable que l\'on apporte &agrave; la plage.</p>
<p>Pour ma part, je suis mont&eacute; de Marseille sur la journ&eacute;e de Dimanche. J\'ai mis 3h15 en passant par le col de la croix haute, et j\'avoue que les couleurs et le paysage grandiose &agrave; cette p&eacute;riode (vert de la nature et cimes enneig&eacute;es) m\'a compl&egrave;tement fait oublier la route. Sur place, j\'en ai profit&eacute; pour tester quelques mod&egrave;les qui m\'avaient &eacute;chap&eacute;s jusqu\'alors : Foil Alpine Race SL, Foil Patrick Slalom, Voile Patrik Foil+, Foil Loke Race / Slalom 2021. Vous retrouverez tr&egrave;s vite les CR de test sur <a href="https://windfoilfan.glissattitude.com">Windfoilfan</a></p>
<p>Pour finir, je soulignerai la gentillesse et l\'accueil tr&egrave;s chalereux des organisateurs (R&eacute;gis en t&ecirc;te). On reviendra l\'an prochain, promis !</p>',
'status' => 'Published',
'views' => 265,
'last_ip' => NULL,
'created_at' => '2021-06-16 18:49:57',
'updated_at' => '2021-06-16 18:49:57',
),
66 => 
array (
'id' => 92,
'user_id' => 1,
'post_categories_id' => 10,
'title' => 'Le choix d\'un 2e ou 3e foil ... parlons de sensations',
'description' => 'Dans cet article, je n’essaye surtout pas de vous dire quel modèle ou marque est meilleur ou moins bonne, mais plutôt de vous donner des pistes pour comprendre ce qui va vous plaire. Et bien entendu, on parle de vous : pas de votre voisin, votre pote',
'body' => '<p><img src="/storage/photos/1/legacy/choix_1.jpg" alt="" /></p>
<h3>Contexte</h3>
<div style="column-width: 30rem;">
<p>Le windfoil est d&eacute;sormais compl&egrave;tement install&eacute; dans le paysage de la glisse, et la premi&egrave;re PWA mixte vient de montrer qu&rsquo;il a m&ecirc;me sa place &agrave; tr&egrave;s haut niveau. Tous ceux qui pensaient que ce serait un &eacute;pi-ph&eacute;nom&egrave;ne ou une mode ravalent leur salive. <br />Au contraire, le foil a beaucoup chang&eacute; pour devenir une &eacute;volution naturelle du windsurf, et non plus une discipline &agrave; part. <br />Au d&eacute;but, on pratiquait l&rsquo;aileron ou le foil. D&eacute;sormais, de nombreux pratiquants sont en train de passer au 100% foil , mais avec la m&ecirc;me diversit&eacute; de discipline qu&rsquo;ils avaient en aileron : Race , Slalom, Freeride, Surf.&nbsp;Ceci est en particulier rendu possible par la diversification des types de mat&eacute;riels (foils, planches, voiles), et leurs &eacute;normes progr&egrave;s sur tous les axes.</p>
<p>Avec cette pratique qui devient pour certains quasi exclusive, les progr&egrave;s en navigation vont bon train, et nombreux d&rsquo;entre nous en sont &agrave; leur 2e voir 3e foil. Le choix du mod&egrave;le qui va le mieux nous convenir devient alors une vraie question. <br />Si on peut d&eacute;buter avec un peu n&rsquo;importe quoi, avouons qu\'il est judicieux de se poser la question de ses gouts si on veut &eacute;voluer. Quand on d&eacute;bute, on se sait pas trop ce que l&rsquo;on aime ou pas, on veut juste voler. Quand on sait foiler, on a logiquement des attentes plus pr&eacute;cises.</p>
<p>Dans cet article, je n&rsquo;essaye surtout pas de vous dire quel mod&egrave;le ou marque est meilleure ou moins bonne, mais plut&ocirc;t de vous donner des pistes pour comprendre ce qui va vous plaire. Et bien entendu, on parle de vous : pas de votre voisin, votre pote de navigation, ou le mec sur le forum qui vous dit que c&rsquo;est bien sans vous connaitre. Au magasin, j\'ai de nombreuses demandes avec des pratiquants perdus qui veulent changer, mais ne savent pas pourquoi. Ils nous appellent souvent pour nous demander ce que l\'on pense de tel ou tel mod&egrave;le, de telle ou telle marque ... mais ne se sont jamais pos&eacute; la question de ce qu\'ils cherchaient en terme de ressenti, et de navigation. C\'est pourtant la base, changer pour changer n\'a pas d\'int&eacute;r&ecirc;t. Cet article a donc pour objectif de <strong>vous permettre de mettre des mots sur ce que vous ressentez, et ce que vous voudriez ressentir</strong>.</p>
</div>
<div style="column-width: 30rem;">
<p>On a d&eacute;j&agrave; &eacute;crit des pages sur les perfs de tel foil, la stabilit&eacute;, le d&eacute;collage etc. Ici, on va surtout parler de sensations, de plaisir &hellip; au risque d\'enfoncer une porte ouverte, je consid&egrave;re personnellement que quand je vais naviguer, je vais avant tout me faire plaisir. Comme ce n&rsquo;est pas mon m&eacute;tier, que ma place &agrave; la bou&eacute;e de conditionne pas si je vais manger du boeuf ou des p&acirc;tes, je n&rsquo;ai pas les m&ecirc;me attentes qu&rsquo;un Nicolas Goyard ou autre Antoine Albeau (pour ne citer que les t&eacute;nors de notre sport).&nbsp;</p>
<p>Donc si vous souhaitez pulv&eacute;riser les grands champions en PWA, pas la peine de lire cet article, il n&rsquo;est pas pour vous ;) Pas plus si vous choisissez votre premier foil !</p>
<p>Le mat&eacute;riel ayant bien &eacute;volu&eacute;, et surtout la compr&eacute;hension des ph&eacute;nom&egrave;nes physiques &eacute;tant bien meilleure aujourd&rsquo;hui, la conception d&rsquo;un foil devient de plus en plus une histoire de compromis. D&egrave;s lors, le choix d&rsquo;une marque dans ses design, ou de vous en tant que consommateur va &ecirc;tre tr&egrave;s li&eacute; &agrave; l&rsquo;importance que vous apportez &agrave; chaque param&egrave;tre. &hellip;. je vous vois venir et je le dit cash : non , il n&rsquo;y a aucun produit qui soit au top partout car de nombreux param&egrave;tres sont contradictoires ! <br />Pour &ecirc;tre trivial, vous ne trouverez pas un foil qui ne va pas vite car vous avez la trouille quand &ccedil;a acc&eacute;l&egrave;re, mais qui en m&ecirc;me temps vous permettra de d&eacute;passer tous vos potes sur le plan d&rsquo;eau !! Il y a un moment ou il fait savoir ce que l&rsquo;on veut :)</p>
</div>
<h3>Glisse ou contr&ocirc;le</h3>
<div style="column-width: 30rem;">
<p>Parmi les param&egrave;tres qui sont souvent antagonistes dans les produits que nous testons, il y a la sensation de glisse et celle de la facilit&eacute; de contr&ocirc;le. Quand on creuse un peu, on se rend compte assez vite que les 2 param&egrave;tres qui rentrent le plus en compte dans cette bataille sont la finesse des profils (mat / ailes / stab / fuselage) et leur rigidit&eacute;.</p>
<p>Pour faire tr&egrave;s basique :</p>
<ul>
<li>des profils fins diminuent la train&eacute;e et donnent une sensation de glisser fort, avec peu de r&eacute;sistance&nbsp;</li>
<li>Des &eacute;l&eacute;ments &eacute;pais favorisant la rigidit&eacute; de l&rsquo;ensemble (y compris des connexions entre &eacute;l&eacute;ments), et comme le foil se d&eacute;forme moins, on ressent une meilleure ma&icirc;trise dans le pilotage</li>
</ul>
<p>Pour aller plus loin sur cette notion, je pense qu\'il est important de pr&eacute;ciser qu&rsquo;une rigidit&eacute; sup&eacute;rieure est li&eacute; &agrave; 2 param&egrave;tres : la raideur intrins&egrave;que du composite utilis&eacute;, et l\'&eacute;paisseur du profil. Pour ceux qui ont quelques notions &eacute;l&eacute;mentaires de r&eacute;sistance des mat&eacute;riaux, rappelez vous que le moment quadratique en RDM est proportionnel au cube de l\'&eacute;paisseur. Quand on multiplie par 2 l\'&eacute;paisseur, on multiplie par 8 la raideur, tous autres param&egrave;tres restant identiques. Les foils les plus raides poss&egrave;dent donc souvent des mats qui sont loins d\'&ecirc;tre les plus fins du march&eacute;.&nbsp;</p>
</div>
<div style="column-width: 30rem;">
<p>Consid&eacute;rant ceci, vous comprendrez ais&eacute;ment que plusieurs strat&eacute;gies de design s\'affrontent : un mat plus fin mais moins raide pour r&eacute;duire la train&eacute;e, ou un mat plus &eacute;pais mais plus raide pour optimiser le contr&ocirc;le. En fonction de la comp&eacute;tence du pilote, et de vos priorit&eacute;s, l\'une ou l\'autre strat&eacute;gie sera payante.</p>
<ul>
<li>Les coureurs de haut niveau, tr&egrave;s entrain&eacute;s et pour lesquels seule la performance compte, choisirons plus souvent la premi&egrave;re solution.</li>
<li>Des amateurs moins rompus &agrave; la navigation dans le rouge choisiront peut &ecirc;tre plus souvent la 2e solution. Pour autant, certains peuvent &ecirc;tre tr&egrave;s attach&eacute;s &agrave; cette sensation de glisse tr&egrave;s fine, et vont accepter un pilotage plus d&eacute;licat pour satisfaire leur envie de sensation.&nbsp;</li>
<li>Le type de plan d\'eau a &eacute;videmment &eacute;galement son importance puisque l\'on mettra probablement plus l\'accent sur la glisse en plan d\'eau interieur ou plat, et sur le contr&ocirc;le en plan d\'eau ouvert ou plus mouvement&eacute;.</li>
</ul>
<p>Cette sensation de glisse est bien entendu autant li&eacute;e &agrave; l&rsquo;&eacute;paisseur des profils qu&rsquo;a la taille des &eacute;l&eacute;ments. Il va sans dire qu&rsquo;avec une aile de plus faible surface, on diminue &eacute;galement la train&eacute;e. Donc adopter une navigation plus fine et plus technique est aussi une fa&ccedil;on d&rsquo;aller chercher de la sensation de glisse, &agrave; l&rsquo;inverse de la navigation en mode bucheron (gros en toile, gros en aile etc.).</p>
</div>
<h3>Nettet&eacute; de la glisse ou acc&eacute;l&eacute;ration sans limite</h3>
<p>Quand on parle de "sensation de glisse", on doit aussi je pense se pencher sur cette fameuse notion de glisse. Avec le temps, je me suis rendu compte qu&rsquo;il y a 2 types de sensations que l&rsquo;on peut attacher &agrave; la sensation de glisse.</p>
<ul>
<li>Il y a un type de sensation qui est li&eacute; au fait de ne pas sentir de limite dans l&rsquo;acc&eacute;l&eacute;ration. On a l&rsquo;impression que tant qu&rsquo;on ajoute de la puissance, &ccedil;a continue &agrave; acc&eacute;l&eacute;rer. Pour ceux qui ont test&eacute;, c&rsquo;est exactement ce que l&rsquo;on ressent avec les foils de la marque Phantom &hellip; qui repr&eacute;sentent pour moi le mieux ce type de signature actuellement (j\'en connais un qui en fait la d&eacute;montration assez souvent)&nbsp;</li>
<li>Il y a un autre type de sensation de glisse qui n&rsquo;est pas li&eacute;e &agrave; l&rsquo;acc&eacute;l&eacute;ration, mais &agrave; la propret&eacute; de la glisse (si on peut dire). C&rsquo;est une sensation de parfaite rectitude de la glisse, de &laquo; trancher le lard &raquo; sans aucune perturbation, sans sensation de dandinement, de nervosit&eacute; g&ecirc;nante, de vibration ou de mouvement perturbateur &hellip; une sorte d&rsquo;&eacute;vidence. C&rsquo;est quelque chose que l&rsquo;on ressent en g&eacute;n&eacute;ral le plus sur les foils tr&egrave;s raides comme le F4, le Taaora UHM ou encore derni&egrave;rement lirs du test du Patrick M40J</li>
</ul>
<p>Pour donner une image (d&eacute;sol&eacute;, je fais ce que je peux car ce n&rsquo;est pas simple &agrave; d&eacute;crire), c&rsquo;est un peu comme comparer une d&eacute;coupe de viande avec une couteau.</p>
<ul>
<li>Dans le premier cas, on d&eacute;coupe avec un couteau &agrave; dents tr&egrave;s fines : &ccedil;a va jusqu&rsquo;au bout sans s&rsquo;arr&ecirc;ter avec une force d&rsquo;appui constante, mais des petites sensations de vibration et d&rsquo;irr&eacute;gularit&eacute; dans la d&eacute;coupe</li>
<li>Dans le 2e cas, on d&eacute;coupe avec un couteau japonais ultra aiguis&eacute; : &ccedil;a tranche au d&eacute;but comme dans du beurre sans la moindre r&eacute;sistance, de fa&ccedil;on plus fluide, plus propre et plus facile que dans le premier cas. Mais c\'est comme si &agrave; un moment, il fallait appuyer beaucoup plus pour aller plus loin. Comme une sorte de limite qu\'on a du mal &agrave; repousser</li>
</ul>
<h3>Nervosit&eacute; ou douceur</h3>
<div style="column-width: 30rem;">
<p>Pour en finir avec les sensations li&eacute;es au comportement dynamique du foil , il faut &eacute;galement parler de nervosit&eacute; versus douceur.&nbsp;Ainsi, on peut clairement identifier des mod&egrave;les de foil nerveux, donc les r&eacute;actions m&eacute;caniques sont rapides et vives, et que l&rsquo;on sent vivre sous ses pieds.&nbsp;Au contraire, certains foils semblent plus inertes, sans r&eacute;ponse vive aux sollicitations m&eacute;caniques ext&eacute;rieures, voir m&ecirc;me doux.</p>
<p>Au d&eacute;part, nous pensions que c&rsquo;&eacute;tait uniquement li&eacute; &agrave; la rigidit&eacute; du mat, et on pouvait imaginer qu&rsquo;un foil nerveux &eacute;tait simplement plus souple car il se d&eacute;formait alors que l&rsquo;autre ne bougeait pas. Apr&egrave;s avoir men&eacute; un certain nombre de mesures m&eacute;caniques, nous pouvons affirmer que ce n&rsquo;est pas le cas. Des contre-exemples concrets : les produits Lokefoil qui sont ultra nerveux et pourtant tr&egrave;s raides, et au contraire le Zeeko carbone qui est souple mais pas nerveux. Pour citer d&rsquo;autres cas, on va dans la sens intuitif avec le F4 raide et peu nerveux, ou le Horue tr&egrave;s souple et tr&egrave;s nerveux.</p>
<p>Bref, pas de lien direct entre sensation de nervosit&eacute; et rigidit&eacute; du mat. Ma th&eacute;orie est donc que cette nervosit&eacute; est li&eacute;e &agrave; d&rsquo;autres param&egrave;tres m&eacute;caniques, et en particulier &agrave; la construction des mats. Celle-ci pourrait influer non pas sur la raideur, mais la r&eacute;ponse dynamique et en particulier l&rsquo;amortissement de cette r&eacute;ponse, et la fr&eacute;quence de raisonnance.</p>
<p>Il se trouve en effet que les foils les plus nerveux sont souvent des foils construits autour de mat &agrave; &acirc;me mouss&eacute;e (Loke, Alpine, Horue). Ces constructions assez l&eacute;g&egrave;res favoriseraint les fr&eacute;quences de r&eacute;ponse rapides. La th&eacute;orie basique du syst&egrave;me masse / ressort donne en effet une p&eacute;riode en racine de k (raideur) / m (masse) . Au contraire, les mats pleins (Starboard, F4, Zeeko, Phantom) ont une r&eacute;ponse plus lente, et probablement une &acirc;me capable d&rsquo;amortir plus vite les oscillations.</p>
<p>Encore un joli champ d&rsquo;investigation =;)</p>
</div>
<div style="column-width: 30rem;">
<p>Mais vous me direz, &ccedil;a donne quoi un foil nerveux ou au contraire doux ? L&agrave; encore, pas de solution id&eacute;ale mais 2 signatures diff&eacute;rentes.</p>
<ul>
<li>Un foil doux sera plus facile &agrave; piloter, et moins perturbant dans des conditions de vent un peu soutenu, voir des conditions de mer plus forte. Il demandra moins d\'attention et de r&eacute;activit&eacute; &agrave; son pilote.</li>
<li>Au contraire, un foil nerveux va favoriser un comportement ardent pour remoter au vent, un d&eacute;collage plus pr&eacute;coce (le Lokefoil LK race en est un excellent exemple en conservant le palme du foil qui d&eacute;colle le plus t&ocirc;t), et une forte capacit&eacute; d&rsquo;acc&eacute;l&eacute;ration apr&egrave;s le d&eacute;collage (ou le jibe)</li>
</ul>
<p>Reste &agrave; savoir ce que l&rsquo;on pr&eacute;f&egrave;re en fonction de ses gouts personnels, mais ce qui est s&ucirc;r, c&rsquo;est que la signature sur l&rsquo;eau est radicalement diff&eacute;rente.</p>
</div>
<h3>Portance ou vitesse</h3>
<p>Le choix entre un foil qui porte beaucoup &agrave; basse vitesse, ou au contraire qui s&rsquo;exprime &agrave; plus haute vitesse est probablement le sujet qui anime le plus les forums. Cela concerne souvent le choix le la taille et du profil de l&rsquo;aile.</p>
<p>Pour faire simple</p>
<ul>
<li>Est ce que je veux d&eacute;coller puis voler avec une vitesse faible &agrave; mod&eacute;r&eacute;e &hellip; pour ne pas se faire peur, pour rester maniable, pour jiber plus facilement etc.</li>
<li>Est ce que je veux avoir plus de vitesse en vol, mais donc &eacute;galement au d&eacute;collage, pour favoriser la performance, la stabilit&eacute; en l&rsquo;air, la rectitude de la trajectoire, le cap, l&rsquo;exploration de la zone de jeu</li>
</ul>
<p>Pour ne pas faire une redite,<a href="/blog/windfoil-taille-aile.html"> je vous oriente vers un post complet</a> que j&rsquo;avais publi&eacute; &agrave; ce sujet.</p>
<h3>Puissance ou glisse</h3>
<div style="column-width: 30rem;">
<p>Ce sujet n&rsquo;est pas si &eacute;loign&eacute;e du pr&eacute;c&eacute;dent, mais &agrave; la fois un peu plus g&eacute;n&eacute;ral et du coup int&eacute;ressant. Je l&rsquo;aborde suite &agrave; un test fait tr&egrave;s derni&egrave;rement et qui s&rsquo;est trouv&eacute; &eacute;difiant. Je passe ainsi beaucoup de temps &agrave; expliquer pourquoi la coh&eacute;rence des &eacute;l&eacute;ments entre eux est tr&egrave;s importante, mais voil&agrave; un exemple qui illustre tr&egrave;s ce propos.</p>
<p>Contexte : lac de Monteynard, vent de 8-15knt bien irr&eacute;gulier autant en force qu&rsquo;en direction (vent d&eacute;sax&eacute; ce jour l&agrave;)</p>
<p>Equipement : flotteur Phantom IRIS X 83 (160L, 83cm) , voile IRIS X MKII 7m (suite &agrave; un soucis d&rsquo;&eacute;paule, je me contraints &agrave; naviguer l&eacute;ger pour ne pas forcer sur l&rsquo;articulation en ce moment), foil F4</p>
<p>Premi&egrave;re partie de l&rsquo;apr&egrave;s midi en configuration Fuselage 100, Aile 650, stab 210 : En dehors des zone d&eacute;vent&eacute;es &agrave; moins de 8-9 knt, d&eacute;collage plut&ocirc;t pr&eacute;coce dans les ris&eacute;es avec un pumping rapide et de courte dur&eacute;e. Il s&rsquo;en suit une acc&eacute;l&eacute;ration rapide qui permet d&rsquo;atteindre la vitesse critique de vol &agrave; partir de laquelle &ccedil;a tient tout le bord (court sur ce lac). On passe sur la glisse les molles interm&eacute;diaires, quelques fois en soutenant un peu au pumping (ne en suis qu&rsquo;en 7m, l&agrave; o&ugrave; habituellement j&rsquo;aurais &eacute;t&eacute; en 9m). En gros, une fois qu&rsquo;on est en l&rsquo;air, on y reste et si on g&egrave;re les jibe de fa&ccedil;on &agrave; ne pas poser, on enchaine les bords en narguant les molles.</p>
<p>En milieu d&rsquo;apr&egrave;s midi, le vent tombe en dessous de 8 knt et m&rsquo;oblige &agrave; rentrer. Comme je ne veux pas gr&eacute;er plus gros, je change d&rsquo;avion pour une configuration Fuselage 115, Aile 945, stab 210 et c&rsquo;est reparti. Comme dans tout lac qui se respecte, le vent remonte &agrave; peu pr&egrave;s au m&ecirc;me niveau qu&rsquo;au d&eacute;part, la baisse &eacute;tait temporaire (juste rafales sont un peu moins puissantes). Cette fois, le d&eacute;collage devient laborieux. Une fois en l&rsquo;air, il faut pomper beaucoup plus longtemps pour acc&eacute;l&eacute;rer et atteindre la vitesse critique. Celle ci est d&rsquo;ailleurs plus faible, mais j&rsquo;ai du mal &agrave; acc&eacute;l&eacute;rer au del&agrave; .. je manque cruellement de puissance dans la voile &hellip; l&rsquo;impression de labourer le plan d&rsquo;eau. Dans les molles, &ccedil;a tient avec moins de vitesse mais comme la glisse et l&rsquo;allonge est moins bonne (&ccedil;a ralenti plus vite), je suis moins avantag&eacute; qu&rsquo;avec le combo Slalom. Bref, comportement pas tr&egrave;s agr&eacute;able et m&ecirc;me si &ccedil;a vole, j&rsquo;ai l&rsquo;impression de bouriner pour rien et le plaisir n&rsquo;y est pas. Ce qui est int&eacute;ressant, c&rsquo;est que connaissant parfaitement ce combo, je sais qu&rsquo;il est imp&eacute;rial en 9m avec des sensations de glisse et de ressource qui n&rsquo;ont rien &agrave; voir !</p>
</div>
<div style="column-width: 30rem;">
<p>Ce test illustre un propos &eacute;vident :</p>
<ul>
<li>ce n&rsquo;est pas parce que l&rsquo;on met un foil plus puissant que l&rsquo;on vole plus facilement ou plus t&ocirc;t. Pour exploiter un foil (ou un flotteur) plus puissant, il faut aussi plus de puissance v&eacute;lique.</li>
<li>A contrario, si on veut naviguer petit en toile, il faut de la glisse donc un foil et un flotteur qui ne descendent pas tout droit du char d&rsquo;assaut.&nbsp;</li>
</ul>
<p>Dans les m&ecirc;me conditions, j&rsquo;aurai probablement eu des performances analogue avec les 2 combos suivants</p>
<ul>
<li>Voile 9m / foil race 945-115 / Flotteur volumineux</li>
<li>Voile 7m / foil slalom 650-100 / Flotteur plus glissant</li>
</ul>
<p>La seule diff&eacute;rence aura &eacute;t&eacute;</p>
<ul>
<li>La sensation de glisse et la l&eacute;g&egrave;ret&eacute; sup&eacute;rieure du combo slalom</li>
<li>La capacit&eacute; tr&egrave;s sup&eacute;rieure du combo race dans la remont&eacute;e au vent et le passage dans les molles longues</li>
</ul>
</div>
<p>Pour conclure sur ce chapitre, il n&rsquo;y a pas une option meilleure que l&rsquo;autre (puissance ou glisse) et chacun choisira la voie qui lui parait la plus pertinente par rapport &agrave; ce qu&rsquo;il aime. Par contre, ce qu&rsquo;il faut &eacute;viter &agrave; tout prix, c&rsquo;est essayer de m&eacute;langer les genres car c&rsquo;est la meilleur garantie d&rsquo;arriver &agrave; un syst&egrave;me qui fonctionne mal. Je sais tr&egrave;s bine que nombreux se disent : oui, mais si je veux un truc entre les deux pour tout faire ??? Ce a quoi je r&eacute;pondrai : "il y en a qui ont essay&eacute;, ... mais ils ont eu des prob&egrave;mes" ... hahahaha.</p>
<h3>Plus raide n&rsquo;est pas plus technique</h3>
<div style="column-width: 30rem;">
<p>Une derni&egrave;re petite apart&eacute;, valable pour de nombreux mod&egrave;les du march&eacute;. Contrairement &agrave; une pens&eacute;e trop largement r&eacute;pandue, ce ne sont pas les foils entr&eacute;e de gamme qui sont forc&eacute;ment les plus faciles &agrave; dompter et utiliser. Je sais que &ccedil;a fait souvent grincer des dents ! Beaucoup se disent que comme ils n\'ont pas un tr&egrave;s bon niveau, cela ne sert &agrave; rien qu\'il d&eacute;pensent plus.</p>
<p>Dans le domaine du foil, une tr&egrave;s grosse partie de la facilit&eacute; d\'utilisation est li&eacute;e &agrave; 2 param&egrave;tres essentiels</p>
<ul>
<li>La facilit&eacute; de contr&ocirc;le du foil en vol : capacit&eacute; &agrave; naviguer en ligne droite, &agrave; g&eacute;rer l\'assiette du foil dans les 3 dimensions ... sachant qu\'on demande si possible une parfaite stabilit&eacute; en lacet, une bonne stabilit&eacute; lat&eacute;rale sans emp&ecirc;cher la contre-g&icirc;te, et une stabilit&eacute; longitudinale bien dos&eacute;e pour &eacute;viter de faire du rod&eacute;o, mais permettre malgr&eacute; tout au pilote de rattraper facilement ses erreurs de conduite ... savant dosage !</li>
<li>La plage d\'utilisation du foil : capacit&eacute; &agrave; voler dans le vent faible, sans devenir ing&eacute;rable dans les rafales</li>
</ul>
<p>... et malheureusement pour nos finances, ce sont souvent les foils le plus chers qui sont les mieux lotis sur ces 2 param&egrave;tres.</p>
<p>On peut bien entendu "tricher" avec des grosses ailes qui brident la vitesse du foil, et le rendent artificiellement moins r&eacute;actif, mais la technologie introduite dans les mats et fuselages les plus haut de gamme concourent &agrave; une structure m&eacute;canique rigide, et tr&egrave;s souvent, &agrave; un contr&ocirc;le plus facile et un foil plus agr&eacute;able. Si des athl&egrave;tes entrain&eacute;s sont facilement capables de compenser par leur technique et leur agilit&eacute; en pilotage, le d&eacute;butant n&rsquo;a pas cette chance. Donc sans aller chercher des mod&egrave;les exotiques et ultra sp&eacute;cialis&eacute;s (Race Up &amp; Down), et si vous avez les moyens, n&rsquo;h&eacute;sitez surtout pas &agrave; choisir un mod&egrave;le dit UHM, M40J, performance ou autre (d&eacute;nomination des versions &laquo;&nbsp;haut de gamme&nbsp;&raquo;).</p>
</div>
<h3>Bilan</h3>
<p>Comme je l&rsquo;avais annonc&eacute;, ce long post ne vas pas vous dire quel mod&egrave;le choisir, mais j&rsquo;esp&egrave;re qu&rsquo;il pourra vous permettre de r&eacute;fl&eacute;chir &agrave; vos envies, et &agrave; conforter les sensations que vous avez ressenti pour mieux exprimer votre besoin lors d&rsquo;un changement. A partir de l&agrave;, un professionnel comp&eacute;tent et honn&ecirc;te saura vous orienter vers le choix le plus pertinent pour vous.</p>',
'status' => 'Published',
'views' => 2568,
'last_ip' => '::1',
'created_at' => '2021-06-24 15:47:06',
'updated_at' => '2022-03-23 23:32:08',
),
67 => 
array (
'id' => 93,
'user_id' => 1,
'post_categories_id' => 7,
'title' => '2022 - Defi windfoil Corsica',
'description' => 'Pour fin sept 2022, on vous concocte un évènement assez exceptionnel : un DEFI WIND WINDFOIL autour de Bonifacio en Corse ! ',
'body' => '<p>Une fois n\'est pas coutume, arr&ecirc;tons de parler de matos, et passons &agrave; des exp&eacute;riences grandeur nature.</p>
<p>Pour fin sept 2022, on vous concocte un &eacute;v&egrave;nement assez exceptionnel : un DEFI WIND WINDFOIL autour de Bonifacio en Corse !&nbsp;&nbsp;</p>
<p>Ca faisait un moment que l\'id&eacute;e d\'aller jouer autour des iles Lavezzi au sud de la Corse me trottait dans la t&ecirc;te. Fin 2020, on a travaill&eacute; un peu plus le sujet avec les potes de l\'Association Fran&ccedil;aise de Windfoil et en Mars, j\'ai contact&eacute; Philippe Bru (le d&eacute;fi) pour lui proposer le projet. Banco, il a adh&eacute;r&eacute; imm&eacute;diatement, et il y a quelques semaines, on s\'est retrouv&eacute; &agrave; une 12aine pour pr&eacute;parer tout ceci in situ : test des parcours, recherche des partenaires (s&eacute;cu, encadrement, parking, assistance), rep&eacute;rage des cailloux (ceux qui font mal aux foils), vid&eacute;o promo ...&nbsp;</p>
<p>Pour ce "rep&eacute;rage", on a constitu&eacute; une &eacute;quipe mixte amateurs / pro ... et on a navigu&eacute; / mang&eacute; / bu et rigol&eacute; comme jamais. La conclusion &eacute;vidente : c\'est l\'un des plus beaux terrains de jeux pour une exp&eacute;rience in&eacute;dite en terme de navigation. Au programme : de la haute mer, de l\'engagement, de la distance, des paysages sublimes, des sensations incroyables, un vrai d&eacute;fi comme on les aime !</p>
<p>Je pr&eacute;cise que ce d&eacute;fi sera ouvert &agrave; tous, dans la limite du nombre de place qui sera fix&eacute; en concertation avec les autorit&eacute;s locales. Bien &eacute;videmment, il est n&eacute;cessaire d\'&ecirc;tre parfaitement autonome sur de la longue distance en windfoil avec remont&eacute;e et descente au vent. Les parcours peuvent faire jusqu\'&agrave; 60km.</p>
<p>Les partenaires du projet</p>
<ul>
<li><a href="https://www.nustrale-ride.com">Nustrale Ride</a></li>
<li><a href="ttps://www.bonifacio-windsurf.comezmL7qyL49ZCJoMNe">Bonifacio Windsurf</a></li>
<li><a href="http://www.rnbb.fr">R&eacute;serve naturelle des bouches de Bonifacio</a></li>
<li><a href="https://www.bonifacio.fr">Office de Tourisme de Bonifacio</a></li>
<li>GlissAttitude</li>
<li><a href="http://www.afwf.fr">Association Fran&ccedil;aise de Winfoil</a></li>
<li><a href="https://pbo.cam">Philippe Bru Organisation</a></li>
<li><a href="https://julienbru.com">Julien Bru studio</a></li>
</ul>
<p>Pour vous donner l\'eau &agrave; la bouche, voici 2 petites videos de notre semaine de pr&eacute;paration, &agrave; regarder sur Youtube</p>
<p><iframe src="https://www.youtube.com/embed/gIFyRu3inuw" width="1120" height="630" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<p><iframe src="https://www.youtube.com/embed/dmV30HyV4lM" width="1120" height="630" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<p>et les parcours sur lesquels nous avons jou&eacute;s (350km en 5 jours)</p>
<p><img src="/storage/photos/1/legacy/cwc-parcours-1500.jpg" /></p>
<p>Album photo ... parce qu\'il n\'y a pas que la navigation en Corse !!</p>
<p><img src="/storage/photos/1/legacy/i1.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i2.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i3.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i4.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i5.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i6.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i7.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i8.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i9.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i10.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i11.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i12.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i13.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i14.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i15.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i16.jpeg" /></p>
<p><img src="/storage/photos/1/legacy/i17.jpeg" /></p>',
'status' => 'Published',
'views' => 130,
'last_ip' => '::1',
'created_at' => '2021-10-11 18:49:30',
'updated_at' => '2022-03-23 23:33:20',
),
));
        
        
    }
}