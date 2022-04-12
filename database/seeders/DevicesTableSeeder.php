<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('devices')->delete();
        
        \DB::table('devices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Wh Comp 95',
                'slug' => 'rrd-wh-comp-95-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 88,
                'status' => 'Published',
                'body' => '<p>Le WH COMP 95 de s&eacute;rie est &eacute;quip&eacute; d\'un fuselage de 110cm, et d\'une aile de 768cm2.&nbsp;</p>
<p><img src="/storage/photos/1/2019-11/rrd-wh-comp-95-2019-IVy8XKmzoI.jpg" alt="RRD WH COMP 95" /></p>
<p><img src="/storage/photos/1/2019-11/rrd-wh-comp-95-2019-Ca3Ec9A6eE.jpg" alt="RRD WH COMP 95" /></p>
<p>Ce mod&egrave;le est &eacute;quip&eacute; d\'une platine int&eacute;gr&eacute;e de tr&egrave;s belle qualit&eacute;.</p>
<p><img src="/storage/photos/1/2019-11/rrd-wh-comp-95-2019-mkHmVXrlWt.jpg" alt="RRD WH COMP 95" /></p>',
                'year' => 2019,
                'price' => '1999.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'programme_start' => 3.0,
                'programme_end' => 6.0,
                'views' => 778,
                'last_ip' => NULL,
                'created_at' => '2019-11-05 19:57:16',
                'updated_at' => '2022-03-20 20:50:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Flow 900',
                'slug' => 'fanatic-flow-900-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 36,
                'status' => 'Published',
                'body' => '<p>Fanatic a mis un moment avant de se lancer dans le windfoil. Cette marque embl&eacute;matique du windsurf attendait probablement de voir comment le march&eacute; allait d&eacute;marrer. Devant la pression de se dernier, il &eacute;tait devenu difficile de rester &agrave; part, et la marque nous a propos&eacute; l\'an pass&eacute; un Flow H9 qui, soyons totalement honn&egrave;tes, n\'&eacute;tait clairement pas &agrave; la hauteur. Fort de cette premi&egrave;re exp&eacute;rience, Fanatic a r&eacute;agit et propose cette ann&eacute;e un foil construit de fa&ccedil;on beaucoup plus s&eacute;rieuse, en mettant en particlier l\'accent sur la rigidit&eacute;. On a donc l&agrave; enfin une bonne base de d&eacute;part.</p>
<p><img src="/storage/photos/1/2019-09/fanatic-flow-900-2019-4NuJs0blJ2.jpg" alt="Fanatic Flow 900 2019" /></p>
<p>Disponible en version 900 et 1200cm2, nous avons mis un moment &agrave; pouvoir tester ce mod&egrave;le car il n\'&eacute;tait au d&eacute;part disponible qu\'en version platine ... donc compatible avec peu de flotteurs, &agrave; l\'exception des Fanatic SingRay. Comble de malchance, notre flotteur de test avait un probl&egrave;me de positionnement des rails US et il nous a donc fallu attendre l\'arriv&eacute;e du talon DTT pour faire les tests.&nbsp;</p>
<p>Comme pour le H9 Fanatic a soign&eacute; le packaging, et le foil est livr&eacute; dans une housse qui prot&egrave;ge parfaitement chaque &eacute;l&eacute;ment. Le montage ne pose aucun probl&egrave;me et l\'ensemble respire la robustesse allemande.&nbsp;</p>',
                'year' => 2019,
                'price' => '1299.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'programme_start' => 2.0,
                'programme_end' => 4.0,
                'views' => 947,
                'last_ip' => NULL,
                'created_at' => '2019-09-15 18:57:16',
                'updated_at' => '2022-03-20 20:50:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'LK Race',
                'slug' => 'lokefoil-lk-race-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 60,
                'status' => 'Published',
            'body' => '<p>Apr&egrave;s l&rsquo;Envol, puis le LK1, lokefoil propose d&eacute;sormais un mod&egrave;le de race dans sa gamme. Ce foil est issu des d&eacute;veloppements men&eacute;s avec l&rsquo;aide de William Huppert, dans le cadre de sa participation aux diverses courses &eacute;lite foil (PWA, IFCA, France).</p>
<div class="multi-col-2">
<p>Comme Loke dispose d&eacute;j&agrave; d&rsquo;un foil assez polyvalent et plut&ocirc;t r&eacute;put&eacute;, le cahier des charges du LK Race &eacute;tait assez clair : une machine sans compromis pour naviguer en mode Up &amp; Down avec des grandes voiles (de 8 &agrave; 10m) et des planches tr&egrave;s larges. Comme on pouvait s&rsquo;en douter, le r&eacute;sultat est un foil avec un mat de plus de 1m, un fuselage immense, et une aile tr&egrave;s puissante.&nbsp;</p>
<p>Compte tenu du process de production utilis&eacute; (RTM) et des moyens de production, loke a pr&eacute;f&eacute;r&eacute; rester sur un ensemble Mat / Fuselage monobloc (non d&eacute;montable). Pour que l&rsquo;ensemble reste transportable, Loke a opt&eacute;&nbsp; pour un design original en r&eacute;alisant la jonction aile et stab sur une portion de fuselage. Cela permet d&rsquo;avoir une hydrodynamique tr&egrave;s efficace autour de la jonction aile / fuselage, mais a n&eacute;cessit&eacute; de concevoir un fuselage tr&egrave;s imposant autour de la jonction.</p>
<p>Pour finir, ajoutons que la construction fait appel a une quantit&eacute; non n&eacute;gligeable de carbone M40J pour garantir une rigidit&eacute; extr&ecirc;me. En comparaison avec les autres foils du march&eacute;, le LK Race se situe clairement dans le groupe de t&ecirc;te se ce crit&egrave;re, avec en particulier une rigidit&eacute; en torsion ph&eacute;nom&eacute;nale.</p>
<p>Le Lk Race &eacute;tant homologu&eacute; PWA, son design est stabilis&eacute; depuis Mars 2019. Seuls quelques d&eacute;tails de construction ont &eacute;volu&eacute; depuis ce moment, dans l&rsquo;objectif de le rendre plus fiable (en particulier autour de la jonction Aile / fuselage). Les moules d&eacute;finitif sont en cours de r&eacute;alisation, mais&nbsp; la commercialisation a d&eacute;j&agrave; d&eacute;but&eacute; au tarif de 2700&euro;&nbsp;(1 aile).</p>
</div>',
                'year' => 2020,
                'price' => '2700.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u39163s1-loke-foil-windfoil-lk-race-loke-foil-2020.html',
                'programme_start' => 6.0,
                'programme_end' => 10.0,
                'views' => 1724,
                'last_ip' => NULL,
                'created_at' => '2019-08-27 18:57:17',
                'updated_at' => '2022-03-20 20:50:42',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '85 Carbone Supercruiser',
                'slug' => 'starboard-supercruiser-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 100,
                'status' => 'Published',
                'body' => '<p>Le supercruiser, que nous avons test&eacute; en combinaison avec la FoilX, est construit autour des m&ecirc;mes mats que la gamme GT, mais avec un ensemble fuselage et aile totalement diff&eacute;rents. C\'est en effet le seul mdo&egrave;le de la gamme qui ne soit pas inter-compatible avec les autres composants. On ne pourra donc pas remplacer l\'aile du Supercruiser par une autre.</p>
<p>Par contre, ces sp&eacute;cificit&eacute;s permettent d\'&eacute;quiper le foil d\'une aile in&eacute;dite et&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">gigantesque de 1700cm2, relativement fine.&nbsp;</span>Il est disponible au tarif de 999&euro; (aluminium) et 1999&euro; (mat carbone).</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-M4Z0gkbUrP.jpg" alt="Supercruiser Starboard" /></p>',
                'year' => 2019,
                'price' => '999.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u39055s1-starboard-supercruiser-alu-starboard-2020.html',
                'programme_start' => 1.0,
                'programme_end' => 4.0,
                'views' => 1367,
                'last_ip' => NULL,
                'created_at' => '2019-08-24 18:57:17',
                'updated_at' => '2022-03-20 20:50:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Profoil F1 HM 1080',
                'slug' => 'select-profoil-f1-hm-1080-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 93,
                'status' => 'Hidden',
                'body' => 'Description',
                'year' => 2019,
                'price' => '1770.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 1,
                'last_ip' => NULL,
                'created_at' => '2019-08-15 18:57:17',
                'updated_at' => '2021-06-14 14:20:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mach 1',
                'slug' => 'ga-mach-1-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 42,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-07/ga-mach-1-2019-7DdPLVckcP.jpg" alt="GA mach1" /></div>
<div>
<p>Le Mach 1 est distribu&eacute; par GA Sails, mais en r&eacute;alit&eacute; con&ccedil;u et fabriqu&eacute; par MOSES. On le retourve donc dans la gamme de la marque italienne. Il s\'agit d\'un foil &agrave; grosse aile, d&eacute;di&eacute; &agrave; une pratique freeride, mais propos&eacute; uniquement en mat carbone, contrairement &agrave; la plupart de ses concurrents qui ont un mat en aluminium.</p>
<p>Commes tous les produits de la marque MOSES, bien connue en kite, la finition est plut&ocirc;t au dessus de la moyenne, avec en particulier des profils fin et des usinages tr&egrave;s pr&eacute;cis&nbsp;</p>
</div>
</div>',
                'year' => 2019,
                'price' => '1499.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u38754s1-gaastra-mach-1-gaastra-2019.html',
                'programme_start' => 0.0,
                'programme_end' => 4.0,
                'views' => 1582,
                'last_ip' => '207.46.13.71',
                'created_at' => '2019-07-03 18:57:17',
                'updated_at' => '2022-04-09 08:26:18',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'IRIS R',
                'slug' => 'phantom-iris-r-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 78,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-yJSad2arGf.jpg" alt="" /></div>
<div>
<p>Le foils IRIS R est le premier foil cr&eacute;&eacute; par Phantom, d&eacute;di&eacute; &agrave; la pratique course.&nbsp;Pour rappel, le R est le foil utilis&eacute; par Nicolas Goyard, actuellement champion du monde avec ce mod&egrave;le.&nbsp;</p>
<p>Assez superlatif dans sa conception et sa construction, le R poss&egrave;de un mat de 100cm full M40J. Le tarif est en cons&eacute;quence : le plus cher du march&eacute; &agrave; ce jour.</p>
<p>L\'ensemble des ailes disponibles avec ce mod&egrave;le sont construites dans les m&ecirc;mes mat&eacute;riaux, ce qui explique &eacute;galement le tarif au dessus du lot.&nbsp;</p>
<p>Le foil est fourni en standard avec un jeu de cals de stab, et un jeux de cale de Rake. Les ailes disponibles vont de 950 (pour naviger en 8 &agrave; 10m2) &agrave; 330 (en gros la taille habituelle d\'un stab)</p>
</div>
</div>',
                'year' => NULL,
                'price' => '3428.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u38221s1-phantom-iris-r-pwa-team-set-phantom-2020.html',
                'programme_start' => 6.0,
                'programme_end' => 10.0,
                'views' => 1563,
                'last_ip' => '::1',
                'created_at' => '2019-07-10 18:57:17',
                'updated_at' => '2022-03-23 22:35:43',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'IRIS X',
                'slug' => 'phantom-iris-x-proto-2-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 78,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-12/phantom-iris-x-proto-2-2020-dQUZkypuzS.jpg" alt="IRIS X foil" /></div>
<div>
<p>Le foil Phantom&nbsp;IRIS X est le dernier n&eacute; de la gamme Phantom, d&eacute;di&eacute; &agrave; la pratique Freerace. Il fait suite au IRIS F (pour Freeride) et IRIS R (pour Racing) sortis tous deux en 2019.</p>
<p>Le R, qui reste au catalogue, est le foil utilis&eacute; par Nicolas Goyard, actuellement champion du monde avec ce mod&egrave;le. Le F est un foil g&eacute;om&eacute;triquement identique au R (mis &agrave; part le mat l&eacute;g&egrave;rement racourci), construit avec des mat&eacute;riaux moins nobles (essentiellement du carbone T700).&nbsp;</p>
<p>La g&eacute;n&egrave;se du X vient essentiellement de la volont&eacute; d\'avoir un foil plus polyvalent que le F. Avec une rigidit&eacute; sup&eacute;rieure, ce nouveau mod&egrave;le permet de garder du contr&ocirc;le et du confort lorsque le vent monte ou que le plan d\'eau se duricis. Comme un certain nombre de foils un peu trop souples, le F devenait en effet pointu &agrave; g&eacute;rer dans ces conditions.</p>
<p>Apr&egrave;s plusieurs prototypes, et de nombreux &eacute;changes avec la marque, il &eacute;tait devenu &eacute;vident que si on voulait garder la g&eacute;om&eacute;trie originale (mat et ailes tr&egrave;s fins), mais am&eacute;liorer le contr&ocirc;le, la seule option &eacute;tait de franchir un cap en terme de mat&eacute;riaux .. donc de prix. Le X int&egrave;gre donc cette fois une proportion de carbone haut module beaucoup plus &eacute;lev&eacute;e, sans atteindre celle du R toutefois. Avec un mat 5cm plus court que le R, et une petite concession sur la rigidit&eacute; en flexion, on a d&eacute;sormais un mat aussi rigide en torsion que le R.</p>
<p>Pour le reste, on garde les g&eacute;om&eacute;tries d\'ailes, de stab et de fuselages disponibles sur le F et le R. D&eacute;sormais, tous les foils Phantom sont livr&eacute;s avec un fuselage dit EVO avec une aile plus avanc&eacute;e que sur le mod&egrave;le 2019. Plusieures configurations sont disponibles en fonction du type d\'utilisation. On vous propose ainsi le <a href="https://marseille.glissattitude.com/windfoil/u39491s1-phantom-iris-x-foil-phantom-2020.html">IRIS X VMG</a> (orient&eacute; light wind et cap), le <a href="https://marseille.glissattitude.com/windfoil/u40937s1-phantom-iris-x-slalom-phantom-2020.html">IRIS X Slalom</a> (orient&eacute; travers et vitesse), le <a href="https://marseille.glissattitude.com/windfoil/u40938s1-phantom-iris-x-sport-set-phantom-2020.html">IRIS X Sport</a> (2 ailes 800 et 550), et le <a href="https://marseille.glissattitude.com/windfoil/u40939s1-phantom-iris-x-pro-set-phantom-2020.html">IRIS X Pro Set</a> (3 ailes 950, 800 et 550).</p>
<p>Comme pour le R, chaque set est fourni avec une malette, un set de cales de stab, la visserie, et une boite de cales de Rake.</p>
</div>
</div>',
                'year' => NULL,
                'price' => '2309.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u40938s1-phantom-iris-x-sport-set-phantom-2020.html',
                'programme_start' => 4.0,
                'programme_end' => 10.0,
                'views' => 4589,
                'last_ip' => '66.249.70.42',
                'created_at' => '2020-06-05 18:57:17',
                'updated_at' => '2022-04-09 12:25:21',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'IRIS F',
                'slug' => 'phantom-iris-f-v1-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 78,
                'status' => 'Published',
                'body' => '<p>Description</p>',
                'year' => 2019,
                'price' => '1799.00',
                'link_test' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-iris-f-foil.html',
                'link_product' => NULL,
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 1180,
                'last_ip' => NULL,
                'created_at' => '2019-04-15 18:57:17',
                'updated_at' => '2022-03-20 20:52:40',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'WH Flight Alu 85 v2',
                'slug' => 'rrd-wh-flight-alu-85-v2-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 88,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-05/rrd-wh-flight-alu-85-v2-2019-QACQHL207J.jpg" alt="" /></div>
<div>
<p>le foil est la 2e &eacute;ovlution de la version aluminium RRD. Sur le papier, suite &agrave; un certain nombre de remarques, le mat devait &ecirc;tre rigidifi&eacute; (surtout en flexion) pour offrir un meilleur contr&ocirc;le en vol. Sur cette nouvelle version v2, on a effectivement un nouveau mat, dont la structure interne contient plus de contreventements. On a aussi un nouveau fuselage un peu plus court de 10 cm.</p>
<p>Ce foil est tr&egrave;s clairement orient&eacute; petit temps ... Roberto ayant du mal &agrave; envisager l\'utilisation du foil dasn un vent soutenu.</p>
<p>Les choix de conception assez originaux (en particulier le mode de connexion mat / talon) ont une influance importante sur le comportement. Ses principux point forts viennent du tarif tr&egrave;s plac&eacute; compte tenu de la qualit&eacute; de finition, et de la polyvalence d\'utilisation puisqu\'il est livr&eacute; &agrave; la fois avec un talon tuttle et un talon Power Box. Il est &eacute;galement possible d\'utiliser un flotteur en double rail US.&nbsp;</p>
</div>
</div>',
                'year' => 2019,
                'price' => '1199.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'programme_start' => 2.0,
                'programme_end' => 4.0,
                'views' => 780,
                'last_ip' => NULL,
                'created_at' => '2019-05-27 18:57:17',
                'updated_at' => '2022-03-20 20:52:40',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Amplifier V3',
                'slug' => 'zeeko-amplifier-v3-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 118,
                'status' => 'Published',
                'body' => 'Description',
                'year' => 2019,
                'price' => '929.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u32580s1-zeeko-amplifier-deep-tuttle-zeeko-2019.html',
                'programme_start' => 3.0,
                'programme_end' => 6.0,
                'views' => 1265,
                'last_ip' => NULL,
                'created_at' => '2019-05-02 18:57:17',
                'updated_at' => '2022-03-20 20:52:40',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'A1 Carbone ULW',
                'slug' => 'alpinefoil-a1-carbone-ulw-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 8,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-gXaaq16Jcd.jpg" alt="" /></div>
<div>
<p>Pour 2019, le A1 voit une &eacute;volution majeure que nous attendions avec impatience : un nouveau fuselage beaucoup plus rigide. En plus de l\'&eacute;paisseur largement augment&eacute;e (pr&egrave;s de 30% sur la section arri&egrave;re !), il est aussi plus long, avec une aile plus en avant, et un stab plus recul&eacute;.</p>
<p>On s\'attend donc</p>
<ul>
<li>&agrave; une rigidit&eacute; nettement accrue, avec pour principal objectif d\'&eacute;liminer les effets de raquette que l\'on ressentait dans le clapot, et qui limitaient le contr&ocirc;le du A1 dans les conditions un peu soutenues.</li>
<li>&agrave; une puissance plus importante</li>
<li>&agrave; des performances au pr&egrave;s en hausse</li>
</ul>
<p>Le mat reste 100% identique au mod&egrave;le 2018.</p>
<p>En ce qui concerne les ailes, le A1 sera toujours propos&eacute; en standard avec la ULW et le stab freeride que nous connaissions. Par contre, il pourra &ecirc;tre &eacute;quip&eacute; en option de l\'aile RLW (d&eacute;velopp&eacute;e pour le Kite Race) et du stab race. Ces 2 options devraient permettre de booster de fa&ccedil;on cons&eacute;quentes les performances. L\'aile RLW est un mod&egrave;le construit en carbone haut module, qui h&eacute;rite d\'un tout nouveaui profil d&eacute;velopp&eacute; &agrave; l\'origine pour les planeurs de comp&eacute;tition ultra r&eacute;cents. Elle est &eacute;quip&eacute;e de winglet pour optimiser &agrave; la fois la glisse, et limiter les pertes de protances dues au raccordement de pression sur le saumon d\'aile.</p>
<p>Et bien &eacute;videmment, on ne peux pas terminer cette pr&eacute;sentation sans signaler l\'exceptionelle qualit&eacute; de finition des foils Alpine : des v&eacute;ritables oeuvres d\'art. Les parties m&eacute;talliques (donc le fuselage pour la vesion Carbone) sont &eacute;galement trait&eacute;es avec une anodisation qui n\'a pas d\'&eacute;quivallent sur le march&eacute;.&nbsp;</p>
</div>
</div>',
                'year' => 2019,
                'price' => '1879.00',
                'link_test' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-foil-a1-2019.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u35849s1-alpinefoil-a1-carbon-alpinefoil-2019.html',
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 830,
                'last_ip' => NULL,
                'created_at' => '2019-03-04 19:57:17',
                'updated_at' => '2022-03-20 20:52:41',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'SLALOM RACE USA',
                'slug' => 'f4-race-foil-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 35,
                'status' => 'Published',
                'body' => '<p>Voici quelques &eacute;l&eacute;ement de l\'&eacute;cosyst&egrave;me F4</p>
<ul>
<li>1 mat de 97cm (&eacute;paisseur 16.3 &gt; 12.7)</li>
<li>1 fuselage de 99cm 1 fuselage de 119cm</li>
<li>1 aile de 85cm x 12cm et 13mm d\'&eacute;paisseur</li>
<li>1 aile de 90cm x 11.5 et 12.7mm d\'&eacute;paisseur</li>
<li>1 aile de 100cm x 12cm et 13mm d\'&eacute;paisseur</li>
<li>2 stab de 38 x 7,2cm pour 9,8 mm d\'&eacute;paisseur</li>
</ul>',
                'year' => 2019,
                'price' => '2400.00',
                'link_test' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-presentation-test-f-4-2019.html',
                'link_product' => NULL,
                'programme_start' => 6.0,
                'programme_end' => 10.0,
                'views' => 1599,
                'last_ip' => '88.163.167.153',
                'created_at' => '2018-12-03 19:57:17',
                'updated_at' => '2022-04-08 23:28:59',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'Sword RS',
                'slug' => 'taaroa-sword-rs-2018',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 103,
                'status' => 'Archived',
                'body' => '<p>Description</p>',
                'year' => 2018,
                'price' => '2399.00',
                'link_test' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sword-wf.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37181s1-taaroa-sword-taaroa-2019.html',
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 0,
                'last_ip' => NULL,
                'created_at' => '2018-10-01 18:57:17',
                'updated_at' => '2021-01-29 09:54:20',
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'Sword M80',
                'slug' => 'taaroa-sword-m80-2018',
                'user_id' => 3,
                'category_id' => 1,
                'brand_id' => 103,
                'status' => 'Archived',
                'body' => '<p>Description</p>',
                'year' => 2018,
                'price' => '2399.00',
                'link_test' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sword-wf.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37181s1-taaroa-sword-taaroa-2019.html',
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 0,
                'last_ip' => NULL,
                'created_at' => '2018-11-01 19:57:17',
                'updated_at' => '2021-01-29 09:54:21',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'Noe 97 Freerace UHM',
                'slug' => 'taaroa-noe-97-uhm-2020',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 103,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div><img src="/storage/photos/1/2020-01/taaroa-noe-97-freerace-uhm-2020-7A3HIj0nts.jpg" /></div>
<div>
<p>Le Noe 97 UHM (ex SWORD RS) est&nbsp;une &eacute;volution logique du NOE, avec des &eacute;l&eacute;ments communs, et surtout la possibilit&eacute; de passer de l\'un &agrave; l\'autre par des upgrades.</p>
<p>Le sword WF est donc un foil enti&egrave;rement d&eacute;montable, sur lequel on retrouve le m&ecirc;me fuselage que le Noe. Pour &ecirc;tre r&eacute;ellement pr&eacute;cis, le NOE 80 Freeride est livr&eacute; en standard avec le fuselage 75+, alors que les NOE 97 et 97 UHM sont d&eacute;sormais livr&eacute;s en standard eavec le fuselaghe 85+.</p>
<p>Le mat est un mod&egrave;le de 97cm issu du m&ecirc;me moule que celui du Noe 97. Il est ici propos&eacute; dans une construction encore plus raide, qui fait appel &agrave; du carbone haut module M40J.</p>
<p>Le stab et l\'aile sont cette fois aussi fabriqu&eacute;s en M40J. Le stab est un mod&egrave;le &agrave; Winglet, dont la fonction est de renforcer la stabilit&eacute; en lacet. Le profil a &eacute;t&eacute; choisi pour apporter une forte d&eacute;portance afin de mieux bloquer le foil en longitudinal &agrave; grande vitesse. L\'aile est un mod&egrave;le de 82cm &agrave; tr&egrave;s fort allongement (corde de 11cm). Elle opte un profil issus des foil de kite.</p>
</div>
</div>
<div class="multi-col-2">
<div>
<p>On retrouve par ailleurs les d&eacute;tails communs avec le Noe, comme :</p>
<ul>
<ul>
<li>Le redan qui fait office de mini platine pour caler le foil dans le boitier (un peu comme sur le LK1, mais en moins volumineux)</li>
<li>Les renforts en aluminium noy&eacute;s dans la structure des ailes et stab pour &eacute;viter que les vis n\'ab&icirc;ment le carbone &agrave; la longue</li>
<li>Le syst&egrave;me de r&eacute;glage de Stab sans cale</li>
<li>Les filetages dans l\'aluminium renforc&eacute;s avec des h&eacute;licoils inoxydables, pour limiter la corrosion, et les risques de filetage foir&eacute;</li>
<li>Les trous de vis de talon ovalis&eacute;s pour laisser une certaine latitude de positionnement</li>
<li>Des housses individuelles pour chaque demi stab et demi aile + 1 housse de mat permettant de prot&eacute;ger le foil mont&eacute; sur la planche</li>
</ul>
</ul>
<p>En terme de finition, on est sur du tr&egrave;s bon niveau, avec une belle am&eacute;lioration depuis les premi&egrave;res livraisons.&nbsp;</p>
</div>
<div><img src="/storage/photos/1/2020-01/taaroa-noe-97-freerace-uhm-2020-HErf8RD45q.jpg" /></div>
</div>',
                'year' => 2020,
                'price' => '2199.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37181s1-taaroa-noe-97-uhm-taaroa-2020.html',
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 3322,
                'last_ip' => NULL,
                'created_at' => '2020-01-05 19:57:17',
                'updated_at' => '2022-03-20 20:52:41',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Noe 97 Freerace UHM',
                'slug' => 'taaroa-noe-97-uhm-2019',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 103,
                'status' => 'Archived',
                'body' => '<p>Le Noe 97 UHM Freerace est le mod&egrave;le le plus gaut de gamme de la marque. Le mat est construit en carbone M40J pour un maximum de rigidit&eacute;. Il est fourni en standard avec une aile Freearce de 800.</p>
<p>Il est d&eacute;sormais aussi possible en option de l\'&eacute;quiper d\'une aile petit temps de 1050, et d\'une aile de speed de 750. Ces 2 &eacute;l&eacute;ments &eacute;largissent de fa&ccedil;on consid&eacute;rable sa plage d\'utilisation.</p>
<p>Depuis fin 2019, le fuselage fourni en standard sur ce mod&egrave;le est le 85+</p>',
                'year' => 2019,
                'price' => '2399.00',
                'link_test' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 5,
                'last_ip' => NULL,
                'created_at' => '2019-06-15 18:57:17',
                'updated_at' => '2021-06-14 14:21:22',
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'Noe 97 Freerace',
                'slug' => 'taaroa-noe-97-freerace-2018',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 103,
                'status' => 'Archived',
                'body' => '<p>Description</p>',
                'year' => 2018,
                'price' => '1789.00',
                'link_test' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sword-wf.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37960s1-taaroa-evo-97-freerace-taaroa-2019.html',
                'programme_start' => 4.0,
                'programme_end' => 7.0,
                'views' => 0,
                'last_ip' => NULL,
                'created_at' => '2018-11-01 19:57:17',
                'updated_at' => '2021-01-29 09:54:37',
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'Noe 97 Freeride',
                'slug' => 'taaroa-noe-97-freeride-2018',
                'user_id' => 1,
                'category_id' => 1,
                'brand_id' => 103,
                'status' => 'Published',
                'body' => '<div class="multi-col-2">
<div>
<p>Le NOE 97 est directeement issu du Taaroa NOE 80, avec un mat de 97cm au lieu du 80, et le fuselage de 85+ en standard</p>
<p>Il s\'associera tr&egrave;s bien avec des flotteurs d&eacute;di&eacute;s windfoil de plus de 80cm de large.</p>
<p>Fort de sa tr&egrave;s grosse exp&eacute;rience en kitefoil TAAROA propose un produit 100% dans l\'air du temps et ultra bien plac&eacute; en prix. C\'est l\'un des foils les plus rigides du march&eacute;, et cela lui garanti une accessibilit&eacute; de premier ordre. La qualit&eacute; de construction est assez exemplaire et robuste.</p>
<p>Il pourra &ecirc;tre upgrad&eacute; avec les &eacute;l&eacute;ments qui vont venir pour aller vers un mod&egrave;le de performance.</p>
<p>Configuration standard :</p>
<ul>
<li>Mat 97 T700</li>
<li>Aile et stab full carbone T700</li>
<li>Fuselage aluminium 85+</li>
<li>Visserie Inox Torx M8</li>
</ul>
</div>
<div><img class="img-fluid" src="/storage/photos/1/2018-11/taaroa-noe-97-freeride-2018-H8wWNiSSgi.jpg" alt="Taaroa Noe 80 Freeride" /></div>
<h3>Construction</h3>
<p>Pour revenir sur la construction du Noe, je pense qu\'il est important de signaler la robustesse de l\'ensemble, mais aussi les solutions mises en oeuvre pour garantir une excellente durabilit&eacute; du produit. En la mati&egrave;re, on est au dessus des standard auxquels nous sommes habitu&eacute;s en windfoil. 2 d&eacute;tails illustrent ceci parfaitement :</p>
<p>Que ce soit au niveau et sbab que de l\'aile, les vis ne s\'appuient pas directement sur le carbone au risque de l\'ab&icirc;mer &agrave; terme. Dans les 2 cas, un pi&egrave;ce de renfort en aluminium est noy&eacute;e dans la structure pour recevoir la vis sans risque d\'&eacute;crasement. Ceci permet de serrer tr&egrave;s fort sans abimer l\'aile. Remarquez au passage que les vis ne sont pas align&eacute;es pour garantir une rigidit&eacute; tr&egrave;s sup&eacute;rieure &agrave; l\'assemblage.</p>
<p><img src="/storage/photos/1/2018-11/taaroa-noe-97-freeride-2018-rZJd0F01Qg.jpg" /></p>
<p>On sais que les filetages dans l\'aluminium manquent de robustesse, surtout lorsque l\'on est dans les diam&egrave;tre 6,7 ou 8mm. Tous les filetages dans l\'aluminium son ici &eacute;quip&eacute; d\'elicoil en inox. Le risque de foirer un filetage est donc tr&egrave;s r&eacute;duit</p>
<p><img src="/storage/photos/1/2018-11/taaroa-noe-97-freeride-2018-IQN0nfqkKl.jpg" /></p>
<p>Et si on devait encore vous prouver que la Noe vole tr&egrave;s facilement avec peu de puissance de voile, Thibaut enfonce le clou avec un gr&eacute;ement gonflable qui pour le coup n\'est pas puissant du tout ;)</p>
</div>',
            'year' => 2018,
            'price' => '1689.00',
            'link_test' => NULL,
            'link_presentation' => NULL,
            'link_product' => 'https://marseille.glissattitude.com/windfoil/u36486s1-taaroa-noe-97-freeride-taaroa-2020.html',
            'programme_start' => 2.0,
            'programme_end' => 5.0,
            'views' => 779,
            'last_ip' => NULL,
            'created_at' => '2018-11-01 19:57:17',
            'updated_at' => '2022-03-20 20:52:41',
        ),
        19 => 
        array (
            'id' => 24,
            'name' => 'Noe 80 Freeride',
            'slug' => 'taaroa-noe-80-freeride-2018',
            'user_id' => 1,
            'category_id' => 1,
            'brand_id' => 103,
            'status' => 'Published',
            'body' => '<div class="multi-col-2">
<div>
<p>Le Noe est le premier windfoil de la marque Taaroa. Avec son mat de 80cm, il est id&eacute;al pour d&eacute;buter sans se faire peur, et s\'asscocie id&eacute;alement avec les flotteurs non d&eacute;di&eacute;s (slalom ou convertible), mais aussi avec les flotteurs de foil compact (Horue Tiny, Exocet Freefoil 112, Starboard Foil 100, JP Hydrofoil 120 etc.). Il est t<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">r&egrave;s lin&eacute;aire en vitesse et d&eacute;colle avec peu de vent.</span></p>
<p>Fort de sa tr&egrave;s grosse exp&eacute;rience en kitefoil TAAROA propose un produit 100% dans l\'air du temps et ultra bien plac&eacute; en prix. C\'est l\'un des foils les plus rigides du march&eacute;, et cela lui garanti une accessibilit&eacute; de premier ordre. La qualit&eacute; de construction est assez exemplaire et robuste.</p>
<p>Il pourra &ecirc;tre upgrad&eacute; avec les &eacute;l&eacute;ments qui vont venir pour aller vers un mod&egrave;le de performance.</p>
<p>Configuration standard :</p>
<ul>
<li>Mat 80cm full T700</li>
<li>Aile de 800 &agrave; grosse portance</li>
<li>Stab full carbone T700 r&eacute;glable sans cale</li>
<li>Fuselage aluminium 75+&nbsp;</li>
</ul>
</div>
<div><img class="img-fluid" src="/storage/photos/1/2018-08/taaroa-noe-80-freeride-2018-sS8zbplnzS.jpg" alt="Taaroa Noe 80 Freeride" /></div>
<h3>Construction</h3>
<p>Pour revenir sur la construction du Noe, je pense qu\'il est important de signaler la robustesse de l\'ensemble, mais aussi les solutions mises en oeuvre pour garantir une excellente durabilit&eacute; du produit. En la mati&egrave;re, on est au dessus des standard auxquels nous sommes habitu&eacute;s en windfoil. 2 d&eacute;tails illustrent ceci parfaitement :</p>
<p>Que ce soit au niveau et sbab que de l\'aile, les vis ne s\'appuient pas directement sur le carbone au risque de l\'ab&icirc;mer &agrave; terme. Dans les 2 cas, un pi&egrave;ce de renfort en aluminium est noy&eacute;e dans la structure pour recevoir la vis sans risque d\'&eacute;crasement. Ceci permet de serrer tr&egrave;s fort sans abimer l\'aile. Remarquez au passage que les vis ne sont pas align&eacute;es pour garantir une rigidit&eacute; tr&egrave;s sup&eacute;rieure &agrave; l\'assemblage.</p>
<p><img src="/storage/photos/1/2018-08/taaroa-noe-80-freeride-2018-AllHCsPYDR.jpg" /></p>
<p>On sais que les filetages dans l\'aluminium manquent de robustesse, surtout lorsque l\'on est dans les diam&egrave;tre 6,7 ou 8mm. Tous les filetages dans l\'aluminium son ici &eacute;quip&eacute; d\'elicoil en inox. Le risque de foirer un filetage est donc tr&egrave;s r&eacute;duit</p>
<p><img src="/storage/photos/1/2018-08/taaroa-noe-80-freeride-2018-3Yg2n4o4KV.jpg" /></p>
<p>Et si on devait encore vous prouver que la Noe vole tr&egrave;s facilement avec peu de puissance de voile, Thibaut enfonce le clou avec un gr&eacute;ement gonflable qui pour le coup n\'est pas puissant du tout ;)</p>
</div>',
        'year' => 2018,
        'price' => '1299.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u36239s1-taaroa-noe-80-taaroa-2020.html',
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 954,
        'last_ip' => NULL,
        'created_at' => '2018-08-01 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    20 => 
    array (
        'id' => 25,
        'name' => 'Glide Wind',
        'slug' => 'neilpryde-glide-wind-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 69,
        'status' => 'Published',
        'body' => '<p>NeilPryde a r&eacute;ellement &eacute;t&eacute; la marque qui a d&eacute;mocratis&eacute; le foil gr&acirc;ce au lancement du RS:Flight AL d&eacute;but 2017. Avec presque 2000 foils vendus, de nombreux pratiquants ont d&eacute;couvert les joies du foil gr&acirc;ce &agrave; ce mod&egrave;le. Pour 2019, NeilPryde met &agrave; jour le RS:Flight AL et propose un deuxi&egrave;me foil en aluminium nomm&eacute; "Glide".&nbsp;Si le Flight est une &eacute;volution importante de la version 2018, le Glide est lui tout nouveau. On retrouve une constitution semblable au Flight, mais avec des diff&eacute;rences notables sur les divers &eacute;l&eacute;ments.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-glide-1.jpg" alt="NeilPyde Glide 2020 wind powerbox" /></p>
<p>Commen&ccedil;ons par l\'aile qui tranche clairement avec ce que nous connaissions. Cette fois, l\'envergure est assez courte, mais le profil est ultra &eacute;pais et la corde imposante.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-glide-2.jpg" alt="NeilPyde Glide 2020 wind powerbox" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-glide-3.jpg" alt="NeilPyde Glide 2020 wind powerbox" /></p>
<p>On retrouve ainsi une forme assez r&eacute;pandue dans le monde du Supfoil et Surffoil. Cela pr&eacute;sage d\'une tr&egrave;s grosse portance &agrave; basse vitesse, et une bonne compatibilit&eacute; avec des flotteurs &eacute;troits. L\'empreinte du fuselage est \'incrust&eacute;e\' dans l\'aile tr&egrave;s &eacute;paisse, et on constate tout de suite qu\'elle est diff&eacute;rente de celle du fuselage Flight. Le Glide a donc un fuselage sp&eacute;cifique plus long, qui permet de maintenir cette aile dont la corde est ultra large. Ce fuselage est le seul &eacute;l&eacute;ments qui n\'est pas compatible avec le foil Flight.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-glide-4.jpg" alt="NeilPyde Glide 2020 wind powerbox" /></p>
<p>Le stab est &eacute;galement tout nouveau avec un di&egrave;dre tr&egrave;s marqu&eacute;, et un profil plut&ocirc;t &eacute;pais &eacute;galement</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-glide-5.jpg" alt="NeilPyde Glide 2020 wind powerbox" /></p>
<p>Pour finir cette pr&eacute;sentation, je pr&eacute;cise que le mat Glide utilise le m&ecirc;me profil que le Flight, mais il mesure 70cm contre 83cm pour le Flight 2019. Comme vous pouvez le constater sur la premi&egrave;re photo, les vis aussi sont d&eacute;sormais anodis&eacute;es, et &agrave; l\'usage, elles semblent se bloquer beaucoup moins vite que sur la version 2018.</p>
<p>Enfin, et c\'est aussi un gros progr&egrave;s, vous pouvez constater que le talon deep-tuttle n\'est d&eacute;sormais plus soud&eacute; sur le mat en aluminum. D&eacute;sormais, il est emboit&eacute; et viss&eacute; sur ce dernier. En plus de la solidit&eacute; accrue (il y a eut quelques cas de SAV sur la soudure qui pouvait s\'oxyder), il est d&eacute;sormais possible de l\'&eacute;quiper au choix d\'un talon deep-tuttle ou powerbox (en option pour le Flight, et en s&eacute;rie sur le Glide).</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-glide-6.jpg" alt="NeilPyde Glide 2020 wind powerbox" /></p>',
        'year' => 2018,
        'price' => '849.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-np-rsflight-et-glide.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37855s1-divers-affuteuse-razor-tune-2-meules-divers.html',
        'programme_start' => 0.0,
        'programme_end' => 3.0,
        'views' => 1096,
        'last_ip' => '66.249.70.42',
        'created_at' => '2018-08-24 18:57:17',
        'updated_at' => '2022-04-09 12:33:31',
    ),
    21 => 
    array (
        'id' => 26,
        'name' => 'Flight Evo',
        'slug' => 'neilpryde-flight-evo-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 69,
        'status' => 'Hidden',
        'body' => '<p>NeilPryde a r&eacute;ellement &eacute;t&eacute; la marque qui a d&eacute;mocratis&eacute; le foil gr&acirc;ce au lancement du RS:Flight AL d&eacute;but 2017. Avec presque 2000 foils vendus, de nombreux pratiquants ont d&eacute;couvert les joies du foil gr&acirc;ce &agrave; ce mod&egrave;le.&nbsp;Alors, quoi ne neuf sur cette version 2019 du best-seller dans notre petit monde du Windfoil ? Visiblement, un changement de couleur est &agrave; l\'ordre du jour, mais vous vous doutez bien que je ne me serai pas lanc&eacute; dans un test et une pr&eacute;sentation pour un passage du rose au bleu. En y regardant de plus pr&egrave;s, beaucoup de changements en r&eacute;alit&eacute;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-flight-evo-1.jpg" alt="NeilPryde Flight Evo 2019" /></p>
<p>L\'aile n\'est plus en G10 mais en composite moul&eacute;. Elle est beaucoup plus &eacute;paisse et n\'est plus plate. On y trouve d&eacute;sormais des bouts d\'aile recourb&eacute;s. Le nouveau profil promet des capacit&eacute;s de vol &agrave; plus basse vitesse que sur le mod&egrave;le 2018. C\'est clairement le principal reproche qui &eacute;tait fait au RS:Flight 2018, et nous testerons ceci sur l\'eau.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-flight-evo-2.jpg" alt="NeilPryde Flight Evo 2019" /></p>
<p>Le stab a subit la m&ecirc;me transformation, et il adopte lui aussi un profil tr&egrave;s &eacute;pais et des winglets. Du coup, la d&eacute;rive verticale disparait.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-flight-evo-3.jpg" alt="NeilPryde Flight Evo 2019" /></p>
<p>Comme vous pouvez le constater sur la premi&egrave;re photo, les vis aussi sont d&eacute;sormais anodis&eacute;es, et &agrave; l\'usage, elles semblent se bloquer beaucoup moins vite que sur la version 2018.</p>
<p>Enfin, et c\'est aussi un gros progr&egrave;s, vous pouvez constater que le talon deep-tuttle n\'est d&eacute;sormais plus soud&eacute; sur le mat en aluminum. D&eacute;sormais, il est emboit&eacute; et viss&eacute; sur ce dernier. En plus de la solidit&eacute; accrue (il y a eut quelques cas de SAV sur la soudure qui pouvait s\'oxyder), il est d&eacute;sormais possible de l\'&eacute;quiper au choix d\'un talon deep-tuttle ou powerbox (en option pour le Flight, et en s&eacute;rie sur le Glide).</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/neilpryde-2019-flight-evo-4.jpg" alt="NeilPryde Flight Evo 2019" /></p>
<p>Finissons cette petite pr&eacute;sentation par une remarque importante : la compatibilit&eacute; entre le Flight AL 2019 et le RS:Flight AL 2018. cela signifie qu\'il est possible d\'utiliser les ailes et stab 2019 sur le mod&egrave;le 2018 (et donc de profiter des nouvelles capacit&eacute;s Light Wind). C\'est aussi le cas du mat avec on option powerbox.</p>',
        'year' => 2018,
        'price' => '899.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-np-rsflight-et-glide.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37196s1-neil-pryde-rsflight-alu-evo-neil-pryde-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 2,
        'last_ip' => NULL,
        'created_at' => '2018-12-24 19:57:17',
        'updated_at' => '2021-01-29 09:51:02',
    ),
    22 => 
    array (
        'id' => 27,
        'name' => 'Ghost Wsiper 111',
        'slug' => 'slingshot-ghost-wsiper-111-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 98,
        'status' => 'Published',
        'body' => '<p>Description</p>',
        'year' => 2018,
        'price' => '2490.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sling-ghost-whisper.html',
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 6.0,
        'views' => 542,
        'last_ip' => NULL,
        'created_at' => '2018-08-01 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    23 => 
    array (
        'id' => 28,
        'name' => 'Wind 105',
        'slug' => 'afs-wind-105-r800-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 3,
        'status' => 'Published',
        'body' => '<p>L&rsquo;AFS Wind 105 fait partie de la gamme AFS depuis 2018, aux c&ocirc;t&eacute;s du Wind 85 et du Wind 105</p>
<p>Auparavent, AFS proposait un unique foil nomm&eacute; AFS2. En reprenant les m&ecirc;mes bases, on a donc d&eacute;sormais 3 foils d&eacute;di&eacute;s au windsurf (en plus des mod&egrave;les d&eacute;di&eacute;s au SUP et au surf):</p>
<ul>
<li>le Wind 85 est optimis&eacute; pour offrir une accessibilit&eacute; maximale, et un tarif ultra agressif pour un mod&egrave;le carbone. Il utilise un mat de 85cm, et une aile un peu plus large que celle de l&rsquo;AFS2</li>
<li>le Wind 95 s&rsquo;adresse aux passionn&eacute;s de foil (d&eacute;butants ou exp&eacute;riment&eacute;s) qui veulent un produit plus &eacute;volutif, en particulier vers des planches plus larges.</li>
<li>le Wind 105 est une machine de course d&eacute;di&eacute;e aux comp&eacute;titeurs, et aux planches larges. Il est livr&eacute; en standard avec l&rsquo;aile R800 : une aile tr&egrave;s plate optimis&eacute;e pour la vitesse et d&eacute;livrant une puissance cons&eacute;quente. Il est aussi disponible avec la R1000 qui lui donne des possibilit&eacute;s &eacute;tendues dans le vent plus l&eacute;ger</li>
</ul>
<p>En comparaison avec l&rsquo;AFS2, la nouvelle gamme repart sur le principe d&rsquo;un ensemble Mat / Fuselage monobloc, mais le profil de mat a &eacute;t&eacute; enti&egrave;rement revu pour plus de performance. Les 3 mod&egrave;les partagent le m&ecirc;me profil de mat, mais la construction est diff&eacute;rente sur chacun des 3 mod&egrave;les.</p>
<p>Housse T Bar en standard.&nbsp;</p>',
        'year' => 2018,
        'price' => '2199.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34767s1-afs-afs-wind-105-afs-2019.html',
        'programme_start' => 4.5,
        'programme_end' => 8.0,
        'views' => 543,
        'last_ip' => NULL,
        'created_at' => '2018-06-02 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    24 => 
    array (
        'id' => 29,
        'name' => 'A1 ALU 2018 ULW',
        'slug' => 'alpinefoil-a1-alu-2018-ulw-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 8,
        'status' => 'Published',
        'body' => '<p>Aujourd\'hui, nous avons re&ccedil;u les 2 nouveaux foils Alpine de windsurf : les A1 Aluiminum et A1 Carbone. Ce sont 2 pi&egrave;ces absolument magnifiques, produites 100% en France, que nous nous faisons un plaisir de pr&eacute;senter en d&eacute;tail.</p>
<p>Commen&ccedil;ons par quelques donn&eacute;es techniques basiques</p>
<ul>
<li>la version alu poss&egrave;de un mat de 85cm avec une corde de 15.5cm. Nous l\'avons pes&eacute; &agrave; 5kg24 dans sa totalit&eacute;</li>
</ul>
<p>Ces foils nous ont &eacute;t&eacute; livr&eacute;s par la soci&eacute;t&eacute; Alpine avec 2 ailes :</p>
<ul>
<li>une Light Wind de 84cm d\'envergure et 14cm de corde</li>
<li>une aile de vent soutenu de 64cm d\'envergure et 14,5 cm de corde</li>
</ul>',
        'year' => 2018,
        'price' => '1299.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-presentation-a1-2018-alu-et-carbone.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u35941s1-alpinefoil-a1-aluminium-alpinefoil-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 6.0,
        'views' => 628,
        'last_ip' => '88.163.167.153',
        'created_at' => '2018-05-30 18:57:17',
        'updated_at' => '2022-04-08 23:28:26',
    ),
    25 => 
    array (
        'id' => 30,
        'name' => 'LK1 850',
        'slug' => 'lokefoil-lk1-850-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 60,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2018-04/lokefoil-lk1-850-2020-s5cUhutFrZ.jpg" alt="Loke LK1 2020" /></div>
<div>
<p>Le LK1 remplace l\'Envol dans la gamme Lokefoil. Sorti en Fevrier 2018, ce foil marque une repture avec le mod&egrave;le pr&eacute;c&eacute;dent en offrant des performances largement sup&eacute;rieures. Cette fois, Lokefoil a travaill&eacute; sur la glisse et la rigidit&eacute;, avec &agrave; la fois des profils tr&egrave;s fins, et une structure prepreg carbone combiant T700 et M40J ... toujours avec un ensemble Mat / Fuselage non d&eacute;montable.&nbsp;</p>
<p>Depuis 2019, le LK1 est disponible en option avec plusieures ailes (LK600, LK850, LK1000 et d&eacute;srmais LK FReeride), et 3 stabs (Lk 280, Lk300, Lk450).</p>
<p>Pour 2020, le mat du Lk1 &eacute;volue encore avec un mod&egrave;le renforc&eacute; &agrave; la fois au niveau du fuselage et de la jonction Mat / Fuselage. Ceci permet de r&eacute;gler les petits probl&egrave;mes de fiabilit&eacute; des versions 2018 et 2019. L\'aile a &eacute;galement &eacute;t&eacute; avanc&eacute;es de 5 cm, ce qui lui apporte plus de puissance.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/lokefoil-lk1-850-2020-rW74IRqDY5.jpg" alt="" /></p>
<p>Le talon est cette fois accompagn&eacute; d\'une platine qui a le bon gout de ne pas &ecirc;tre trop large, pour ne s\'appuyer que sur les bords du boitier. Cette solution est pour nous beaucoup plus pertinente que les platines larges qui peuvent (on l\'a vu) perforer la car&egrave;ne en appuyant &agrave; un endroit insuffisamment renforc&eacute;. Le moulage de la platine est un peu grossier, mais contrairement &agrave; la plupart des marques, elle est int&eacute;gr&eacute;e &agrave; la structure du mat ... la r&eacute;alisation du moule n\'a pas d&ucirc; &ecirc;tre &eacute;vidente !</p>
</div>
</div>',
        'year' => 2020,
        'price' => '1850.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-presentation-du-loke-lk1.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34705s1-loke-foil-windfoil-lk1-loke-foil-2019.html',
        'programme_start' => 0.0,
        'programme_end' => 4.0,
        'views' => 1895,
        'last_ip' => NULL,
        'created_at' => '2018-04-25 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    26 => 
    array (
        'id' => 31,
        'name' => 'Wind 85',
        'slug' => 'afs-wind-85-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 3,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1349.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34769s1-afs-afs-wind-85-afs-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2018-04-28 18:57:17',
        'updated_at' => '2021-06-14 14:16:52',
    ),
    27 => 
    array (
        'id' => 32,
        'name' => 'Wind 85',
        'slug' => 'afs-wind-85-2019',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 3,
        'status' => 'Published',
        'body' => '<p>L&rsquo;AFS Wind85 fait partie de la gamme AFS depuis 2018, aux c&ocirc;t&eacute;s du Wind 95 et du Wind 105</p>
<p>Auparavent, AFS proposait un unique foil nomm&eacute; AFS2. En reprenant les m&ecirc;mes bases, on a donc d&eacute;sormais 3 foils d&eacute;di&eacute;s au windsurf (en plus des mod&egrave;les d&eacute;di&eacute;s au SUP et au surf):</p>
<ul>
<li>le Wind 85 est optimis&eacute; pour offrir une accessibilit&eacute; maximale, et un tarif ultra agressif pour un mod&egrave;le carbone. Il utilise un mat de 85cm, et une aile un peu plus large que celle de l&rsquo;AFS2</li>
<li>le Wind 95 s&rsquo;adresse aux passionn&eacute;s de foil (d&eacute;butants ou exp&eacute;riment&eacute;s) qui veulent un produit plus &eacute;volutif, en particulier vers des planches plus larges.</li>
<li>le Wind 105 est une machine de course d&eacute;di&eacute;e aux comp&eacute;titeurs, et aux planches larges. Il est livr&eacute; en standard avec l&rsquo;aile R800 : une aile tr&egrave;s plate optimis&eacute;e pour la vitesse et d&eacute;livrant une puissance cons&eacute;quente.</li>
</ul>
<p>En comparaison avec l&rsquo;AFS2, la nouvelle gamme repart sur le principe d&rsquo;un ensemble Mat / Fuselage monobloc, mais le profil de mat a &eacute;t&eacute; enti&egrave;rement revu pour plus de performance. Les 3 mod&egrave;les partagent le m&ecirc;me profil de mat, mais la construction est diff&eacute;rente sur chacun des 3 mod&egrave;les.</p>
<p>Le mod&egrave;le AFS 85 est le seul foil AFS dont l\'ensemble Mat / Fuselage est d&eacute;montable. Housse malette en standard.&nbsp;</p>
<p>&nbsp;</p>',
        'year' => 2019,
        'price' => '1349.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34769s1-afs-afs-wind-85-afs-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 1158,
        'last_ip' => NULL,
        'created_at' => '2019-09-15 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    28 => 
    array (
        'id' => 33,
        'name' => 'Wind 95 F700',
        'slug' => 'afs-wind-95-f700-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 3,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1349.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => NULL,
        'programme_end' => NULL,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2018-06-10 18:57:17',
        'updated_at' => '2021-08-01 08:31:48',
    ),
    29 => 
    array (
        'id' => 34,
        'name' => 'Wind 95',
        'slug' => 'afs-wind-95-f700-2019',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 3,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-12/afs-wind-95-2019-CZbUM33Tau.jpg" alt="AFS 95" /></div>
<div>
<p>L&rsquo;AFS Wind95 fait partie de la gamme AFS depuis 2018, aux c&ocirc;t&eacute;s du Wind 85 et du Wind 105</p>
<p>Auparavent, AFS proposait un unique foil nomm&eacute; AFS2. En reprenant les m&ecirc;mes bases, on a donc d&eacute;sormais 3 foils d&eacute;di&eacute;s au windsurf (en plus des mod&egrave;les d&eacute;di&eacute;s au SUP et au surf):</p>
<ul>
<li>le Wind 85 est optimis&eacute; pour offrir une accessibilit&eacute; maximale, et un tarif ultra agressif pour un mod&egrave;le carbone. Il utilise un mat de 85cm, et une aile un peu plus large que celle de l&rsquo;AFS2</li>
<li>le Wind 95 s&rsquo;adresse aux passionn&eacute;s de foil (d&eacute;butants ou exp&eacute;riment&eacute;s) qui veulent un produit plus &eacute;volutif, en particulier vers des planches plus larges. Le mat de 95cm est un profil creux 100% carbone, plus nerveux. Il est livr&eacute; en standard avec l\'aile F700, mais &eacute;galement disponible avec les ailes F800 (gabarits lourds), R750, R800 et R1000 (perf) ou F700S (vent fort). Le fuselage fait 88cm de long.</li>
<li>le Wind 105 est une machine de course d&eacute;di&eacute;e aux comp&eacute;titeurs, et aux planches larges. Il est livr&eacute; en standard avec l&rsquo;aile R800 : une aile tr&egrave;s plate optimis&eacute;e pour la vitesse et d&eacute;livrant une puissance cons&eacute;quente.</li>
</ul>
<p>En comparaison avec l&rsquo;AFS2, la nouvelle gamme repart sur le principe d&rsquo;un ensemble Mat / Fuselage monobloc, mais le profil de mat a &eacute;t&eacute; enti&egrave;rement revu pour plus de performance. Les 3 mod&egrave;les partagent le m&ecirc;me profil de mat, mais la construction est diff&eacute;rente sur chacun des 3 mod&egrave;les.</p>
<p>Housse T Bar fournie en standard.&nbsp;</p>
</div>
</div>',
        'year' => 2019,
        'price' => '1899.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34768s1-afs-afs-wind-95-afs-2020.html',
        'programme_start' => 4.0,
        'programme_end' => 8.0,
        'views' => 1971,
        'last_ip' => NULL,
        'created_at' => '2019-12-15 19:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    30 => 
    array (
        'id' => 35,
        'name' => '85 Alu GT',
        'slug' => 'starboard-gt-alu-v4-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => '<p>Description</p>',
        'year' => 2018,
        'price' => '1199.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33415s1-starboard-gt-alu-starboard-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 717,
        'last_ip' => NULL,
        'created_at' => '2018-02-12 19:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    31 => 
    array (
        'id' => 36,
        'name' => '95 Alu GT V6',
        'slug' => 'starboard-gt-alu-mat-95-v6-2019',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 100,
        'status' => 'Hidden',
        'body' => '<p>Description</p>',
        'year' => 2019,
        'price' => '1199.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33415s1-starboard-gt-alu-starboard-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2019-07-10 18:57:17',
        'updated_at' => '2022-03-10 17:22:19',
    ),
    32 => 
    array (
        'id' => 37,
        'name' => 'Flow H9',
        'slug' => 'fanatic-flow-h9-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 36,
        'status' => 'Published',
        'body' => '<p>Fanatic ne pouvait pas passer &agrave; c&ocirc;t&eacute; du foil, et sur ce coup l&agrave;, ils n\'auront pas &eacute;t&eacute; pr&eacute;curseurs, mais ils ont pris le temps d\'analyser ce march&eacute; naissant. Ils proposent un premier produit simple, bien pens&eacute; et correspondant &agrave; l\'ADN de la marque : une conception originale, une belle finition, une construction utilisant des proc&eacute;d&eacute;s innovants, et une g&eacute;om&eacute;trie qui promet une tr&egrave;s belle accessibilit&eacute;.</p>
<p>L\'objectif du H9 est bien de permettre &agrave; tous les windsurfeurs de d&eacute;couvrir le Windfoil en toute facilit&eacute; et sans se faire peur. A l\'instar de la version kite (sortie il y a 1 mois environ), on imagine que le H9 va aussi offrir beaucoup de portance &agrave; basse vitesse et un comportement doux et progressif. On se languis de monter dessus pour d&eacute;couvrir les sensations qu\'il a a nous offrir !</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-1.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p>On admire au passage la qualit&eacute; d\'usinage du talon deep tuttle et le la platine en aluminium.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-2.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-3.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-4.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-5.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>',
        'year' => 2018,
        'price' => '850.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-presentation-flow-h9.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34718s1-fanatic-ws-flow-foil-h9-combo-fanatic-2018.html',
        'programme_start' => 2.0,
        'programme_end' => 3.0,
        'views' => 686,
        'last_ip' => NULL,
        'created_at' => '2018-02-12 19:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    33 => 
    array (
        'id' => 38,
        'name' => 'Vini pro',
        'slug' => 'horue-vini-pro-2019',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 51,
        'status' => 'Hidden',
        'body' => 'Description',
        'year' => 2019,
        'price' => '1715.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => NULL,
        'programme_end' => NULL,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2019-06-01 18:57:17',
        'updated_at' => '2021-06-14 14:10:05',
    ),
    34 => 
    array (
        'id' => 39,
        'name' => 'Vini Air',
        'slug' => 'horue-vini-air-2019',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 51,
        'status' => 'Hidden',
        'body' => 'Description',
        'year' => 2019,
        'price' => '1900.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => NULL,
        'programme_end' => NULL,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2019-06-01 18:57:17',
        'updated_at' => '2020-03-13 20:26:32',
    ),
    35 => 
    array (
        'id' => 40,
        'name' => 'Vini ride',
        'slug' => 'horue-vini-ride-2019',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 51,
        'status' => 'Hidden',
        'body' => 'Description',
        'year' => 2019,
        'price' => '849.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => NULL,
        'programme_end' => NULL,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2019-06-01 18:57:17',
        'updated_at' => '2020-03-13 20:26:35',
    ),
    36 => 
    array (
        'id' => 41,
        'name' => 'Tae Proto',
        'slug' => 'horue-tae-proto-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 51,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2018,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => NULL,
        'programme_end' => NULL,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2018-11-15 19:57:17',
        'updated_at' => '2020-03-13 20:25:35',
    ),
    37 => 
    array (
        'id' => 42,
        'name' => 'H10 Evo',
        'slug' => 'horue-h10-evo-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '799.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-h10-evo-presentation.html',
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 432,
        'last_ip' => NULL,
        'created_at' => '2017-11-06 19:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    38 => 
    array (
        'id' => 43,
        'name' => 'WH Flight Alu 85',
        'slug' => 'rrd-wh-flight-alu-85-2018',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 88,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1199.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => NULL,
        'programme_end' => NULL,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2018-04-21 18:57:17',
        'updated_at' => '2021-06-14 14:16:43',
    ),
    39 => 
    array (
        'id' => 44,
        'name' => 'Envol',
        'slug' => 'lokefoil-envol-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 60,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1799.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/deballage-windfoil-envol-de-loke.html',
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 479,
        'last_ip' => NULL,
        'created_at' => '2017-10-18 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    40 => 
    array (
        'id' => 45,
        'name' => 'Perf',
        'slug' => 'lokefoil-perf-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 60,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1799.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/deballage-windfoil-envol-de-loke.html',
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2017-10-18 18:57:17',
        'updated_at' => '2020-03-13 20:30:20',
    ),
    41 => 
    array (
        'id' => 46,
        'name' => 'Easy LW HD 2017',
        'slug' => 'aeromod-easy-lw-hd-2017-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 119,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1690.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 6.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2017-08-22 18:57:17',
        'updated_at' => '2021-01-22 21:03:23',
    ),
    42 => 
    array (
        'id' => 47,
        'name' => '85 Carbon',
        'slug' => 'starboard-carbon-85-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2099.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-du-stb-slalom.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u35048s1-starboard-gts-carbon-foil-starboard-2019.html',
        'programme_start' => 4.0,
        'programme_end' => 6.0,
        'views' => 539,
        'last_ip' => '157.55.39.13',
        'created_at' => '2017-07-26 18:57:17',
        'updated_at' => '2022-04-09 04:09:39',
    ),
    43 => 
    array (
        'id' => 53,
        'name' => 'Profoil F1',
        'slug' => 'select-profoil-f1-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 93,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2290.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-du-profoil-f1.html',
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 808,
        'last_ip' => NULL,
        'created_at' => '2017-07-31 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    44 => 
    array (
        'id' => 54,
        'name' => '95 Carbon',
        'slug' => 'starboard-carbon-95-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 100,
        'status' => 'Published',
    'body' => '<p>Autour du mat carbone de 95cm, Starboard propose tout un &eacute;cosyst&egrave;me de composants qui font du Carbon Foil 95 l\'un des plus adaptables du march&eacute;. D\'une utilisaiton dans les vagues (avec le fusleage de 75), &agrave; la race avec le fuselage de 115 et les ailes de 900 et 1000, il sait tout faire, et s\'adapter &agrave; tout type de riders.</p>',
        'year' => 2017,
        'price' => '2199.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-du-stb-slalom.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u32570s1-starboard-race-carbon-foil-starboard-2019.html',
        'programme_start' => 4.0,
        'programme_end' => 10.0,
        'views' => 1059,
        'last_ip' => NULL,
        'created_at' => '2017-07-26 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    45 => 
    array (
        'id' => 56,
        'name' => 'Windfoil',
        'slug' => 'mantafoil-windfoil-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 120,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2017,
        'price' => '999.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 1.0,
        'programme_end' => 3.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2017-05-03 18:57:17',
        'updated_at' => '2020-03-13 20:27:31',
    ),
    46 => 
    array (
        'id' => 57,
        'name' => 'RS:Flight AL',
        'slug' => 'neilpryde-rsflight-al-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 69,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '799.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-bp-rsflight-al.html',
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 543,
        'last_ip' => NULL,
        'created_at' => '2017-05-03 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    47 => 
    array (
        'id' => 58,
        'name' => 'RSX',
        'slug' => 'neilpryde-rsx-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 69,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2400.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 384,
        'last_ip' => '40.77.167.51',
        'created_at' => '2017-05-10 18:57:17',
        'updated_at' => '2022-04-09 08:10:00',
    ),
    48 => 
    array (
        'id' => 59,
        'name' => 'AFS2',
        'slug' => 'afs-afs2-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 3,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1899.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2017-04-24 18:57:17',
        'updated_at' => '2021-06-14 14:16:03',
    ),
    49 => 
    array (
        'id' => 60,
        'name' => 'RS:Flight F4',
        'slug' => 'neilpryde-rsflight-f4-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 69,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2399.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-rsflight-f4-infographie.html',
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 8.0,
        'views' => 649,
        'last_ip' => '::1',
        'created_at' => '2017-04-10 18:57:17',
        'updated_at' => '2022-03-24 21:26:38',
    ),
    50 => 
    array (
        'id' => 61,
        'name' => 'Windfoil 2017',
        'slug' => 'ketos-windfoil-2017-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 121,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1950.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 3.0,
        'programme_end' => 5.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2017-04-04 18:57:17',
        'updated_at' => '2020-03-13 20:30:45',
    ),
    51 => 
    array (
        'id' => 62,
        'name' => 'Alu LW 2017',
        'slug' => 'zeeko-alu-lw-2017-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 118,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '929.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/zko-windfoil-alu-deballage-et-montage.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u32580s1-zeeko-amplifier-deep-tuttle-zeeko-2019.html',
        'programme_start' => 4.0,
        'programme_end' => 6.0,
        'views' => 409,
        'last_ip' => NULL,
        'created_at' => '2017-03-17 19:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    52 => 
    array (
        'id' => 63,
        'name' => 'Windfoil',
        'slug' => 'f4-windfoil-2016',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 35,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2016,
        'price' => '2400.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/deballage-windfoil-f-4.html',
        'link_product' => NULL,
        'programme_start' => 5.0,
        'programme_end' => 6.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2016-11-02 19:57:17',
        'updated_at' => '2021-03-07 18:06:40',
    ),
    53 => 
    array (
        'id' => 64,
        'name' => 'Windfoil',
        'slug' => 'ketos-windfoil-2016',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 121,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2016,
        'price' => '1950.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 3.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2016-10-01 18:57:17',
        'updated_at' => '2020-03-13 20:31:10',
    ),
    54 => 
    array (
        'id' => 65,
        'name' => 'Windfoil',
        'slug' => 'mako-windfoil-2016',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 122,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2016,
        'price' => '2100.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 3.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2016-10-01 18:57:17',
        'updated_at' => '2020-03-13 20:31:08',
    ),
    55 => 
    array (
        'id' => 66,
        'name' => 'Hybrid 900',
        'slug' => 'fone-hybrid-900-2016',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 41,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2016,
        'price' => '1349.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 3.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2016-08-22 18:57:17',
        'updated_at' => '2020-03-13 20:31:03',
    ),
    56 => 
    array (
        'id' => 68,
        'name' => 'Vini CR LW XLW',
        'slug' => 'horue-vini-2016',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2016,
        'price' => '1700.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-vini-2017.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u28106s1-horue-vini-pro-horue-2019.html',
        'programme_start' => 0.0,
        'programme_end' => 3.0,
        'views' => 665,
        'last_ip' => NULL,
        'created_at' => '2016-05-15 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    57 => 
    array (
        'id' => 70,
        'name' => 'Windfoil',
        'slug' => 'slingshot-windfoil-2017',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 98,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1249.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 1.0,
        'programme_end' => 2.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2017-05-02 18:57:17',
        'updated_at' => '2020-03-22 17:52:48',
    ),
    58 => 
    array (
        'id' => 71,
        'name' => 'Windfoil',
        'slug' => 'mako-windfoil-2015',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 122,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2015,
        'price' => '1500.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 3.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2015-06-15 18:57:17',
        'updated_at' => '2020-03-13 20:31:06',
    ),
    59 => 
    array (
        'id' => 72,
        'name' => 'AFS1',
        'slug' => 'ahd-afs1-2015',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 5,
        'status' => 'Archived',
        'body' => 'Description',
        'year' => 2015,
        'price' => '2099.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 0,
        'last_ip' => NULL,
        'created_at' => '2015-08-25 18:57:17',
        'updated_at' => '2020-03-13 20:31:02',
    ),
    60 => 
    array (
        'id' => 73,
        'name' => 'Airwave 6\'2',
        'slug' => 'zeeko-airwave-6-2-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 118,
        'status' => 'Published',
        'body' => '<h4>Compact Foil boards</h4>
<p>En dehors des produits test&eacute;s les jours pr&eacute;c&eacute;dents, nous avons et l\'occasion de tester plus en profondeur les 2 compact foil pr&eacute;sentes ici : la RRD Pocket Rocket en 1m80, et une board Zeeko de 1m84 en 106L. Ces deux produits extr&ecirc;mement ludiques, offre un visage compl&egrave;tement diff&eacute;rent du foil, tout en sensations et en finesse, et &agrave; l\'oppos&eacute; des produits freerace.<br />Pour tirer toute la quintessence de ses produits, nous les avons utilis&eacute; avec des toutes petites voiles. D&rsquo;ailleurs, la Zeeko supporte difficilement une taille de voile sup&eacute;rieure &agrave; 5 m, alors que la RRD, un peu plus large, tol&egrave;re id&eacute;alement jusqu&rsquo;&agrave; 6m2. L\'id&eacute;al est aussi de naviguer strapless et sans harnais, histoire d\'aller jusqu\'au bout de la sensation de libert&eacute; ! Dans les 2 cas, ce type de flotteur doit &ecirc;tre associ&eacute; &agrave; un foil plut&ocirc;t stable &agrave; tr&egrave;s stable pour prendre du plaisir. Si le foil RRD 120 ne nous a pas convaincu en utilisation race, il offre ici un tout autre visage extr&ecirc;mement int&eacute;ressant.</p>
<p><img src="/storage/photos/2019-04/58381535_10213326706511953_8754602817789886464_o.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img src="/storage/photos/2019-04/57649371_10213326704391900_9163233329250566144_o.jpg" alt="Gliss Test Session Pocket Rocket" />Photos by Christian Souchet</p>
<p>Ces 2 produits sont clairement destin&eacute;s &agrave; des pratiquants exp&eacute;riment&eacute; en foil, et leur c&ocirc;t&eacute; ultra ludique nous a permis de passer des tr&egrave;s bons moments sur l\'eau. Dans des conditions de vent tr&egrave;s irr&eacute;guli&egrave;res, nous avons pu r&eacute;ellement prendre du plaisir, probablement plus qu\'avec un &eacute;quipment de race. Je rajouterai que ce type de combi n&eacute;cessite un minimum de vent. Ce n\'est donc pas la solution pour celui qui veut naviguer &agrave; 8knt !</p>',
        'year' => 2019,
        'price' => '1589.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u39353s1-zeeko-airwave-6-2-v1-windfoil-supfoil-wingfoil-zeeko-2020.html',
        'programme_start' => NULL,
        'programme_end' => 2.0,
        'views' => 389,
        'last_ip' => NULL,
        'created_at' => '2019-05-10 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    61 => 
    array (
        'id' => 74,
        'name' => 'Wizzard 103',
        'slug' => 'slingshot-wizzard-103-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 98,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1795.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 0.0,
        'programme_end' => 2.0,
        'views' => 207,
        'last_ip' => NULL,
        'created_at' => '2018-07-07 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    62 => 
    array (
        'id' => 75,
        'name' => 'Pocket Rocket E Tech',
        'slug' => 'rrd-pocket-rocket-e-tech-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 88,
        'status' => 'Published',
        'body' => '<h4>Compact Foil boards</h4>
<p>En dehors des produits testés les jours précédents, nous avons et l\'occasion de tester plus en profondeur les 2 compact foil présentes ici : la RRD Pocket Rocket en 1m80, et une board Zeeko de 1m84 en 106L. Ces deux produits extrêmement ludiques, offre un visage complètement différent du foil, tout en sensations et en finesse, et à l\'opposé des produits freerace.<br />Pour tirer toute la quintessence de ses produits, nous les avons utilisé avec des toutes petites voiles. D’ailleurs, la Zeeko supporte difficilement une taille de voile supérieure à 5 m, alors que la RRD, un peu plus large, tolère idéalement jusqu’à 6m2. L\'idéal est aussi de naviguer strapless et sans harnais, histoire d\'aller jusqu\'au bout de la sensation de liberté ! Dans les 2 cas, ce type de flotteur doit être associé à un foil plutôt stable à très stable pour prendre du plaisir. Si le foil RRD 120 ne nous a pas convaincu en utilisation race, il offre ici un tout autre visage extrêmement intéressant.</p>
<p><img src="/storage/photos/2019-04/58381535_10213326706511953_8754602817789886464_o.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img src="/storage/photos/2019-04/57649371_10213326704391900_9163233329250566144_o.jpg" alt="Gliss Test Session Pocket Rocket" />Photos by Christian Souchet</p>
<p>Ces 2 produits sont clairement destinés à des pratiquants expérimenté en foil, et leur côté ultra ludique nous a permis de passer des très bons moments sur l\'eau. Dans des conditions de vent très irrégulières, nous avons pu réellement prendre du plaisir, probablement plus qu\'avec un équipment de race. Je rajouterai que ce type de combi nécessite un minimum de vent. Ce n\'est donc pas la solution pour celui qui veut naviguer à 8knt !</p>',
        'year' => 2018,
        'price' => '1499.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 0.0,
        'programme_end' => 3.0,
        'views' => 301,
        'last_ip' => NULL,
        'created_at' => '2018-09-25 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    63 => 
    array (
        'id' => 76,
        'name' => 'Tiny 110 Carbone',
        'slug' => 'horue-tiny-110-carbone-2016',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2016,
        'price' => '2150.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/flotteur/u28111s1-horue-tiny-carbon-horue-2019.html',
        'programme_start' => 0.0,
        'programme_end' => 3.0,
        'views' => 706,
        'last_ip' => '86.194.105.233',
        'created_at' => '2016-05-15 18:57:17',
        'updated_at' => '2022-04-09 10:44:59',
    ),
    64 => 
    array (
        'id' => 77,
        'name' => 'Freefoil 112 AST',
        'slug' => 'exocet-freefoil-112-ast-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 32,
        'status' => 'Published',
        'body' => '<p>Description</p>',
        'year' => 2019,
        'price' => '1229.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38483s1-exocet-freefoil-ast-exocet-2019.html',
        'programme_start' => 1.0,
        'programme_end' => 4.0,
        'views' => 1441,
        'last_ip' => NULL,
        'created_at' => '2019-06-21 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    65 => 
    array (
        'id' => 78,
        'name' => 'AIRIDE 81 LTD',
        'slug' => 'tabou-airide-81-ltd-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 104,
        'status' => 'Published',
        'body' => '<p>Nouvelle construction LTD 2020</p>',
        'year' => 2020,
        'price' => '1999.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38796s1-tabou-airide-ltd-tabou-2020.html',
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 1604,
        'last_ip' => NULL,
        'created_at' => '2019-04-23 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    66 => 
    array (
        'id' => 79,
        'name' => 'Eco 121',
        'slug' => 'horue-eco-121-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1499.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 0.0,
        'programme_end' => 3.0,
        'views' => 419,
        'last_ip' => NULL,
        'created_at' => '2017-08-21 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    67 => 
    array (
        'id' => 80,
        'name' => 'FreeFoil 132 Carbone',
        'slug' => 'exocet-freefoil-132-carbone-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 32,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2019,
        'price' => '1990.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38430s1-exocet-freefoil-carbone-exocet-2019.html',
        'programme_start' => 1.0,
        'programme_end' => 4.0,
        'views' => 1404,
        'last_ip' => NULL,
        'created_at' => '2019-05-06 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    68 => 
    array (
        'id' => 81,
        'name' => 'Hydrofoil 120 Fws',
        'slug' => 'jp-australia-hydrofoil-120-fws-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 56,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1949.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u31525s1-jp-australia-hydrofoil-board-pro-edition-jp-australia-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 6.0,
        'views' => 1464,
        'last_ip' => NULL,
        'created_at' => '2018-08-14 18:57:17',
        'updated_at' => '2022-03-20 20:52:41',
    ),
    69 => 
    array (
        'id' => 82,
        'name' => 'Foil 122 Flex Balsa',
        'slug' => 'starboard-foil-122-flex-balsa-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1999.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33670s1-starboard-foil-board-flex-balsa-starboard-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 1140,
        'last_ip' => NULL,
        'created_at' => '2018-03-28 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    70 => 
    array (
        'id' => 83,
        'name' => 'Airtime 125 Verre',
        'slug' => 'horue-airtime-125-verre-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1999.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u36311s1-horue-airtime-verre-carbone-horue-2019.html',
        'programme_start' => 3.0,
        'programme_end' => 6.0,
        'views' => 903,
        'last_ip' => NULL,
        'created_at' => '2018-08-17 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    71 => 
    array (
        'id' => 84,
        'name' => 'Hydrofoil 135 Pro',
        'slug' => 'jp-australia-hydrofoil-135-pro-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 56,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2299.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u31525s1-jp-australia-hydrofoil-board-pro-edition-jp-australia-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 6.0,
        'views' => 582,
        'last_ip' => NULL,
        'created_at' => '2017-04-11 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    72 => 
    array (
        'id' => 85,
        'name' => 'Slant 133',
        'slug' => 'horue-slant-133-2016',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2016,
        'price' => '1875.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 3.0,
        'programme_end' => 5.0,
        'views' => 391,
        'last_ip' => NULL,
        'created_at' => '2016-12-12 19:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    73 => 
    array (
        'id' => 86,
        'name' => 'RF 81 CARBONE',
        'slug' => 'exocet-rf-81-carbone-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 32,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '2150.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 8.0,
        'views' => 608,
        'last_ip' => NULL,
        'created_at' => '2018-03-28 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    74 => 
    array (
        'id' => 87,
        'name' => 'F1X M V1',
        'slug' => 'elix-f1x-m-v1-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 30,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2290.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u32524s1-elix-f1x-elix-2018.html',
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 458,
        'last_ip' => NULL,
        'created_at' => '2017-06-26 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    75 => 
    array (
        'id' => 88,
        'name' => 'Foil 144',
        'slug' => 'starboard-foil-144-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1999.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33670s1-starboard-foil-board-flex-balsa-starboard-2019.html',
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 838,
        'last_ip' => NULL,
        'created_at' => '2018-07-28 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    76 => 
    array (
        'id' => 89,
        'name' => 'Hydrofoil 150 FWS',
        'slug' => 'jp-australia-hydrofoil-150-fws-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 56,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2019,
        'price' => '2049.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u31526s1-jp-australia-hydrofoil-board-fws-jp-australia-2019.html',
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 445,
        'last_ip' => NULL,
        'created_at' => '2019-03-02 19:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    77 => 
    array (
        'id' => 90,
        'name' => 'AWF2',
        'slug' => 'alpinefoil-awf2-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 8,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1999.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 174,
        'last_ip' => NULL,
        'created_at' => '2018-07-15 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    78 => 
    array (
        'id' => 91,
        'name' => 'F1X L V1',
        'slug' => 'elix-f1x-l-v1-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 30,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '2790.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 8.0,
        'programme_end' => 10.0,
        'views' => 259,
        'last_ip' => NULL,
        'created_at' => '2018-11-02 19:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    79 => 
    array (
        'id' => 92,
        'name' => 'Thunderbold 75',
        'slug' => 'ahd-thunderbold-75-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 5,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2019,
        'price' => '2099.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37840s1-ahd-thunderbold-ahd-2019.html',
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 214,
        'last_ip' => NULL,
        'created_at' => '2019-04-01 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    80 => 
    array (
        'id' => 93,
        'name' => 'Thunderbold 85',
        'slug' => 'ahd-thunderbold-85-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 5,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2019,
        'price' => '2199.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37840s1-ahd-thunderbold-ahd-2019.html',
        'programme_start' => 3.0,
        'programme_end' => 5.0,
        'views' => 444,
        'last_ip' => NULL,
        'created_at' => '2019-05-01 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    81 => 
    array (
        'id' => 94,
        'name' => 'Foil 177',
        'slug' => 'starboard-foil-177-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2019,
        'price' => '3179.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 9.0,
        'programme_end' => 10.0,
        'views' => 340,
        'last_ip' => NULL,
        'created_at' => '2019-05-10 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    82 => 
    array (
        'id' => 95,
        'name' => 'H Fire Pro 91 Ltd',
        'slug' => 'rrd-h-fire-pro-91-ltd-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 88,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '2699.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 9.0,
        'programme_end' => 10.0,
        'views' => 241,
        'last_ip' => NULL,
        'created_at' => '2018-09-25 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    83 => 
    array (
        'id' => 96,
        'name' => 'RF 91 CARBONE',
        'slug' => 'exocet-rf-91-carbone-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 32,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '2450.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 8.0,
        'programme_end' => 10.0,
        'views' => 548,
        'last_ip' => NULL,
        'created_at' => '2018-03-28 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    84 => 
    array (
        'id' => 97,
        'name' => 'FireRace 120',
        'slug' => 'rrd-firerace-120-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 88,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1290.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 5.0,
        'views' => 157,
        'last_ip' => NULL,
        'created_at' => '2017-04-21 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    85 => 
    array (
        'id' => 98,
        'name' => 'RS:One Convertible',
        'slug' => 'neilpryde-rsone-convertible-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 69,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '1690.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 5.0,
        'views' => 413,
        'last_ip' => NULL,
        'created_at' => '2017-04-19 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    86 => 
    array (
        'id' => 99,
        'name' => 'RS:X Convertible',
        'slug' => 'neilpryde-rsx-convertible-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 69,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2200.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 5.0,
        'views' => 398,
        'last_ip' => NULL,
        'created_at' => '2017-04-19 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    87 => 
    array (
        'id' => 100,
        'name' => 'Rocket plus CED 123',
        'slug' => 'tabou-rocket-plus-ced-123-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 104,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1990.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 3.0,
        'programme_end' => 4.0,
        'views' => 210,
        'last_ip' => NULL,
        'created_at' => '2018-09-18 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    88 => 
    array (
        'id' => 101,
        'name' => 'Foil 147 Tecnora',
        'slug' => 'starboard-foil-147-tecnora-2017',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2017,
        'price' => '2099.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 3.0,
        'programme_end' => 4.0,
        'views' => 345,
        'last_ip' => NULL,
        'created_at' => '2017-04-23 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    89 => 
    array (
        'id' => 102,
        'name' => 'H Fire 91',
        'slug' => 'rrd-h-fire-91-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 88,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '2199.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 3.0,
        'programme_end' => 4.0,
        'views' => 184,
        'last_ip' => NULL,
        'created_at' => '2018-09-25 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    90 => 
    array (
        'id' => 103,
        'name' => 'Hi Flight',
        'slug' => 'rrd-hi-flight-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 88,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1990.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 133,
        'last_ip' => '157.55.39.13',
        'created_at' => '2018-09-25 18:57:17',
        'updated_at' => '2022-04-09 03:43:26',
    ),
    91 => 
    array (
        'id' => 104,
        'name' => 'Techno Windfoil',
        'slug' => 'bic-techno-windfoil-2019',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 14,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2019,
        'price' => '1299.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37656s1-bic-130l-techno-windfoil-130-bic-2019.html',
        'programme_start' => 3.0,
        'programme_end' => 4.0,
        'views' => 798,
        'last_ip' => NULL,
        'created_at' => '2019-06-08 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    92 => 
    array (
        'id' => 105,
        'name' => 'Gecko Foil 120',
        'slug' => 'fanatic-gecko-foil-120-2018',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 36,
        'status' => 'Published',
        'body' => 'Description',
        'year' => 2018,
        'price' => '1990.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 3.0,
        'programme_end' => 4.0,
        'views' => 238,
        'last_ip' => NULL,
        'created_at' => '2018-04-18 18:57:17',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    93 => 
    array (
        'id' => 106,
        'name' => 'FOIL X 145 STARLITE',
        'slug' => 'starboard-foil-x-145-starlite-2020',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => '<p>La Foil X 145 est une nouvelle planche pour 2020. Elle vient comp&eacute;ter la gamme Starboard Foil pour une approche Freeride pure</p>
<p>Pour 2020, la gamme est <strong>sensiblement remodel&eacute;e</strong> avec l&rsquo;arriv&eacute;e des mod&egrave;le Foil X.<br />On retrouve ainsi<br />- Foil X 145 : d&eacute;di&eacute;e au freeride, et associ&eacute;e pr&eacute;f&eacute;rentiellement au foil SuperCruiser<br />- Foil X 110 : freeride et freestyle / freemove<br />- Foil freeride 125 : freeride perf, associ&eacute;e pr&eacute;f&eacute;rentiellement aux foils GT et GTR<br />- Foil freeride 150 : freerace perf, associ&eacute;e pr&eacute;f&eacute;rentiellement aux foils GTRS et Race +<br />- Foil race 177 : race PWA, &agrave; associer au Race + ou Ultimate Race + avec voiles race entre 8 et 10M2</p>
<p>Ce qui caract&eacute;rise le shape</p>
<ul>
<li>un shape tr&egrave;s compact&nbsp;</li>
<li>un plan de pont assez plat</li>
<li>des rails tr&egrave;s parall&egrave;les</li>
<li>une largeur assez faible, mais un forte &eacute;paisseur</li>
<li>un nez large et carr&eacute;</li>
</ul>
<div>La FoilX est disponible dans 2 constructions (Starlight ...1599&euro; comme dans notre test et Flax Balsa ... 2149&euro;)</div>',
        'year' => 2020,
        'price' => '1599.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38907s1-starboard-foil-x-board-starlite-starboard-2020.html',
        'programme_start' => 2.0,
        'programme_end' => 4.0,
        'views' => 2158,
        'last_ip' => NULL,
        'created_at' => '2020-03-22 22:53:39',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    94 => 
    array (
        'id' => 107,
        'name' => 'Bullet V1',
        'slug' => 'zeeko-bullet-v1-2020',
        'user_id' => 1,
        'category_id' => 1,
        'brand_id' => 118,
        'status' => 'Published',
    'body' => '<p>La grande nouveaut&eacute; de la saison chez Zeeko est l\'arriv&eacute;e d\'un foil carbone : le Bullet (1890&euro;). Il s\'adresse &eacute;videmment &agrave; tout ceux qui veulent franchir un cap en terme de plaisir et de sensations, avec bien &eacute;videment plus de performance, plus de minis, plus de glisse, et plus de stabilit&eacute;.</p>
<p>Comme Zeeko ne pouvait pas se contenter d\'arriver avec un foil carbone \'classique\' dans un monde o&ugrave; il y avait d&eacute;j&agrave; pas mal de choix, il arrive avec une nouveaut&eacute; exclusive : le fuselage r&eacute;glable (dit DBM). Cela permet, avec un seul fusealge, de choisir entre un foil puissant qui a beaucoup de lift et de fortes capacit&eacute;s &agrave; remonter au vent (mode "race"), ou un foil glissant pour le vent soutenu (mode "slalom").</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/zeeko-bullet-2020-1.jpg" alt="Zeeko Bullet Foil fuselage r&eacute;glable" /></p>
<p>Cette tr&egrave;s belle innovation va dans le sens d\'une simplification du mat&eacute;riel, et on ne s\'en plaindra pas. Elle fait appel &agrave; un astucieux syst&egrave;me de cale de boitier, qui n\'est pas sans rappeler le syst&egrave;me de r&eacute;glage Bic Trimbox pour les ailerons.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/zeeko-bullet-2020-2.jpg" alt="Zeeko Bullet Foil fuselage r&eacute;glable" /></p>
<p>En dehors de ceci, le Bullet est propos&eacute; avec un stablilisateur r&eacute;glable, partageant le m&ecirc;me concept que Taaroa ou Horue : on avance le stab pour avoir plus de glisse et moins de puissance, on le recule pour avoir plus de plus de puissance. Cela &eacute;vite d\'avoir &agrave; jouer avec des cales (plus simple), mais pr&eacute;sente juste l\'inconv&eacute;niant de demander un peu plus d\'attention lors du montage pour avoir un r&eacute;glage &agrave; peu pr&egrave;s pr&eacute;visible.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/zeeko-bullet-2020-3.jpg" alt="Zeeko Bullet Foil fuselage r&eacute;glable" /></p>
<p>C&ocirc;t&eacute; mat, on a droit &agrave; un 102cm ultra raide, qui pourra s\'adapter sans probl&egrave;me aux grandes voiles et planches larges. Il est optimis&eacute; pour offrir un maximum d\'appui au pr&egrave;s et dans le light. L&agrave; aussi, c\'est une grosse diff&eacute;rence avec le mod&egrave;le alu.</p>
<p>Bien s&ucirc;r, ce nouceau foil carbone est compatible avec toute la gamme d\'ailes Zeeko, mais arrive surtout avec une nouvelle 950 race de 88cm d\'envergure qui pourra supporter les grandes voiles.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/zeeko-bullet-2020-4.jpg" alt="Zeeko Bullet Foil fuselage r&eacute;glable" /></p>
<p>Pour finir, j\'ajouterai que le Bullet est homologu&eacute; PWA 2020 ... au cas o&ugrave; certains d\'entre voudraient aller se confronter aux cadors de la discipline.&nbsp;</p>
<p>Comme pour l\'aluminium, le mod&egrave;le carbone sera disponible sous la marque <strong>Exocet</strong>, avec toutefois quelques&nbsp;variantes : le fuselage r&eacute;glage ne sera pas disponible, mais &agrave; la place un fuselage de 95 ou un de 115. Le mat sera un peu plus court (98cm) et plus fin ... plus orient&eacute; slalom avec moins d\'appui au pr&egrave;s.</p>',
        'year' => 2020,
        'price' => '1890.00',
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-bullet-1.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u40089s1-zeeko-bullet-v1-zeeko-2020.html',
        'programme_start' => 4.0,
        'programme_end' => 8.0,
        'views' => 3968,
        'last_ip' => '81.66.94.96',
        'created_at' => '2020-03-30 16:14:00',
        'updated_at' => '2022-04-09 01:47:14',
    ),
    95 => 
    array (
        'id' => 112,
        'name' => 'Swart',
        'slug' => 'horue-swart-2017',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 51,
        'status' => 'Published',
        'body' => '<p>La Swart est une voile sans camber disponible de 1,5 &agrave; 5,5m2 par pas de 0,5m2. Sa conception est bas&eacute;e sur 3 objectifs : une optimisation du poids, un maximum de dynamisme et une grosse puissance pour d&eacute;coller. La construction fait appel &agrave; un mat&eacute;riau tram&eacute; tr&egrave;s l&eacute;ger type Pentex qui fait penser aux voiles des voiliers de course, &agrave; des anneaux en c&eacute;ramique, du spectra etc. pour arriver &agrave; un poids jamais rencontr&eacute; jusqu\'alors.</p>
<p>La voile est con&ccedil;ue autour des mats RDM python de la marque reptile. En dehors de leur l&eacute;g&egrave;ret&eacute;, ces mats offrent une grosse dynamique tr&egrave;s coh&eacute;rente avec les objectifs de la voile.</p>
<p>Les SWART sont fabriqu&eacute;es en France, et ceci constitue une vraie exception dans notre petit monde.</p>',
        'year' => 2017,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 0.0,
        'programme_end' => 3.0,
        'views' => 428,
        'last_ip' => NULL,
        'created_at' => '2017-04-06 12:06:44',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    96 => 
    array (
        'id' => 113,
        'name' => 'Skyscape',
        'slug' => 'loft-skyscape-2017',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 58,
        'status' => 'Published',
        'body' => '<p>Jusqu&rsquo;&agrave; aujourd&rsquo;hui, nous n&rsquo;avions vu la skyscape qu&rsquo;en photo. Hormis le nombre de latte assez faible, la voile semblait assez proche d&rsquo;une switchblade.</p>
<p>En r&eacute;alit&eacute;, la voile est bien plus diff&eacute;rente que ce qu&rsquo;il n&rsquo;y paraissait. L&rsquo;outline est beaucoup plus ramass&eacute;, la bordure en bas de voile est assez imposante et adapt&eacute;e &agrave; une utilisation foil ou on couche moins la voile sur le pont (un peu comme sur la Swart RS).</p>
<p>Le Wish para&icirc;t tr&egrave;s court. Un fois gr&eacute;&eacute;e, la Skyscape offre un creux assez prononc&eacute;, et une chute beaucoup plus tendue que sur une switchblade.</p>',
        'year' => 2018,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 2.0,
        'programme_end' => 6.0,
        'views' => 447,
        'last_ip' => NULL,
        'created_at' => '2017-08-06 12:12:13',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    97 => 
    array (
        'id' => 114,
        'name' => 'Fly',
        'slug' => 'xo-sail-fly-2018',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 113,
        'status' => 'Published',
        'body' => '<p>Visuellement, la Fly ressemble beaucoup &agrave; la Xo Silver. On retrouve une voile 3 cams &agrave; fourreau semi-large, mais avec un outline l&eacute;g&egrave;rement diff&eacute;rent : plus de longueur de wishbone, une chute un peu moins large, un rond de guidant marqu&eacute; en t&ecirc;te.</p>
<p><img src="/storage/photos/1/2020-02/11aff13571be259cff16762ac38101d4.jpg" /></p>
<p>Une fois gr&eacute;&eacute;e, elle n&rsquo;a par contre plus grand chose &agrave; voir avec une freerace, et c&rsquo;est l&agrave; que l&rsquo;on comprend un peu mieux les options de conception, qui sont &agrave; l&rsquo;oppos&eacute; de ce qui conduirait &agrave; une voile de slalom.</p>
<h3>Le concept</h3>
<p>Le concept est bas&eacute; sur un objectif tr&egrave;s simple : stabiliser le vol dans toutes les conditions de vent, tout en offrant une large plage d&rsquo;utilisation. Plus simple &agrave; dire qu&rsquo;&agrave; faire !&hellip;</p>
<p>Sur une voile traditionnelle, le creux est bloqu&eacute; vers l&rsquo;avant par la tension du mast panel, et cette m&ecirc;me tension permet d&rsquo;ouvrir la chute. Ce m&eacute;canisme permet &agrave; la fois de g&eacute;rer les rafales sans se faire embarquer, mais surtout de lifter la planche dans le vent afin de lui permettre d&rsquo;acc&eacute;l&eacute;rer.</p>
<p>En foil, les rafales ont naturellement 2 effets :</p>
<ul>
<li>elles font acc&eacute;l&eacute;rer la planche et tendent &agrave; faire sortir l&rsquo;aile de l&rsquo;eau suite &agrave; une trop forte portance de l&rsquo;aile</li>
<li>elles incitent le pilote &agrave; se pencher en arri&egrave;re pour compenser l&rsquo;exc&egrave;s de pression dans la voile, ce qui conduit souvent &agrave; un exc&egrave;s de pression sous le pied arri&egrave;re et donc une augmentation de l&rsquo;incidence et de la portance.</li>
</ul>
<p>Ces 2 ph&eacute;nom&egrave;nes expliquent pourquoi il est plus compliqu&eacute; de stabiliser le vol dans les rafales que de les exploiter en windsurf.</p>
<p>Sur la Xo Fly, Patrice a dessin&eacute; la voile de fa&ccedil;on &agrave; ce qu&rsquo;elle plaque le foil dans l&rsquo;eau en cas de rafale, au contraire de faire lifter la planche &hellip; elle fonctionne donc &agrave; l&rsquo;envers d&rsquo;une voile classique : c&rsquo;est toute l&rsquo;astuce du concept. Pour avoir pass&eacute; un peu de temps autour de cette voile, je peux vous dire que parvenir &agrave; ce r&eacute;sultat est un petit tour de force car la conception est loin d&rsquo;entre simple. Cela passe par un fonctionnement tr&egrave;s diff&eacute;rent du haut de la voile. Le haut de la chute est relativement tendue, et vient s&rsquo;appuyer sur le vent. Par contre, la voile peut ouvrir en milieu de chute pour r&eacute;guler la puissance. Malgr&eacute; tout, il faut garder une voile capable de g&eacute;n&eacute;rer de l&rsquo;acc&eacute;l&eacute;ration &agrave; basse vitesse pour d&eacute;coller t&ocirc;t, sans avoir un creux qui recule dans les rafales, et avec une a&eacute;rodynamique efficace pour acc&eacute;l&eacute;rer quand on va beaucoup plus vite que le vent &hellip; ne nous le cachons pas : c&rsquo;est un casse t&ecirc;te pour un designer de voile, mais le challenge est ultra int&eacute;ressant.</p>
<p><img src="/storage/photos/1/2020-02/c1e2a709b141aef5776994c4a91266f0.jpg" /></p>',
        'year' => 2018,
        'price' => '825.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 271,
        'last_ip' => NULL,
        'created_at' => '2017-08-06 12:17:42',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    98 => 
    array (
        'id' => 115,
        'name' => 'Vega',
        'slug' => 'xo-sail-vega-2018',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 113,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/u40382.jpg" alt="Xo Sail Vega" /></div>
<div>
<p>Pour tout ceux qui veulent naviguer dans le vent, sans recourir &agrave; une voile de vague, la VEGA s\'impose ! C\'est l\'une des rares voile de winsdurf non d&eacute;di&eacute;e Foil qui nous a fait une si belle impression.</p>
<p>La Vega est une voile compacte de freeride perf sans cam. Elle offre un creux tr&egrave;s ma&icirc;tris&eacute; dans le bas de voile, qui stabilise le profil et vous permettra de ne pas souffrir dans les rafales, tout en offrant un d&eacute;part planning imm&eacute;diat.</p>
</div>
</div>',
        'year' => 2020,
        'price' => '619.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windsurf/u40382s1-xo-sail-vega-xo-sail-2020.html',
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 1232,
        'last_ip' => NULL,
        'created_at' => '2019-11-06 13:41:14',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    99 => 
    array (
        'id' => 116,
        'name' => 'Hyperglide',
        'slug' => 'severn-hyperglide-2018',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 95,
        'status' => 'Published',
        'body' => '<p>La Severn Hyperglide est la premi&egrave;re voile d&eacute;velopp&eacute;e par la marque Australienne exclusivement pour le foil ... et plus particuli&egrave;rement pour la course. Nous faisons le point sur les apports de ce type de solution en foil, suite au test de la plus petite taille de la gamme : la 8m2.</p>',
        'year' => 2018,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 8.0,
        'programme_end' => 10.0,
        'views' => 369,
        'last_ip' => NULL,
        'created_at' => '2018-06-12 12:49:45',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    100 => 
    array (
        'id' => 117,
        'name' => 'IRIS F',
        'slug' => 'phantom-iris-f-2019',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 78,
        'status' => 'Published',
        'body' => '<p>La IRIS Freerace est une voile assez originale dans la mesure o&ugrave; elle n&rsquo;est pas construite en monofilm, au m&ecirc;me titre que les voiles italiennes Avanti. Au contraire, toute la surface de la voile est constitu&eacute;e d\'une "membrane", et qui est techniquement une surface m&ecirc;lant une mati&egrave;re plastique tr&egrave;s souple, avec une trame orient&eacute;e dans la direction des efforts.</p>
<p>On voit ceci sur les renforts de certaines voiles (comme le forceline NeilPryde). Ici, toute la voile utilise ce principe.</p>
<p>En terme de conception, cette IRIS 7m est une voile de freerace &agrave; 2 cambers, et fourreau &eacute;troit en dacron. Elle est con&ccedil;ue pour &ecirc;tre gr&eacute;&eacute; sur un mat constant flex (nous avons utilis&eacute; un North pour nos tests).</p>',
        'year' => 2019,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-rig.html',
        'link_product' => NULL,
        'programme_start' => 4.0,
        'programme_end' => 7.0,
        'views' => 476,
        'last_ip' => NULL,
        'created_at' => '2018-06-21 12:54:14',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    101 => 
    array (
        'id' => 118,
        'name' => 'Flight',
        'slug' => 'starboard-flight-2019',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 100,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/flight.jpg" alt="Starboard Flight " /></div>
<div>
<p>Ce produit est propos&eacute; sous forme de gr&eacute;ement complet, ce qui est une excellente id&eacute;e pour 2 raisons</p>
<ul>
<li>la performance d\'un tel gr&eacute;ement est tr&egrave;s tr&egrave;s li&eacute;e &agrave; la performance du mat, et &agrave; l\'ad&eacute;quation mat / voile</li>
<li>La voile &eacute;tant tr&egrave;s creuse, elle n&eacute;cessite un cintre de wishbone qui ne g&ecirc;ne pas son shape</li>
</ul>
<p>Par ailleurs, cela garanti qu\'il n\'y aura pas des utilisations de la voile sur un mat inappropri&eacute;, conduisant &agrave; des d&eacute;ceptions de l\'acheteur. On rappelle que le mat est primordial pour le pumping dans le vent l&eacute;ger.</p>
</div>
</div>',
        'year' => 2019,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 1.0,
        'programme_end' => 4.0,
        'views' => 739,
        'last_ip' => NULL,
        'created_at' => '2018-07-27 13:12:56',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    102 => 
    array (
        'id' => 119,
        'name' => 'Hydra',
        'slug' => 'ezzy-hydra-2019',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 33,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/hydra-sport-2020-ezzy-sails.jpg" alt="" /></div>
<div>
<p>La Hydra est une voile tr&egrave;s originale ... ne serait ce que par son look.</p>
<p>Derri&egrave;re cet aspect &eacute;trange se cache en r&eacute;alit&eacute; un concentr&eacute; d\'id&eacute;es non conformistes : Mr Ezzy ne s\'est clairement pas content&eacute; de copier la concurrence, mais cherche au contraire &agrave; d&eacute;velopper des concepts sp&eacute;cifiques pour am&eacute;liorer l\'utilisation du gr&eacute;ement en foil.</p>
<p>Le r&eacute;sultat est aussi atypique qu\'int&eacute;ressant, et il faut avouer assez efficace en particulier dans le vent soutenu. On vous invite donc &agrave; ne pas en rester l\'impression un peu &eacute;trange que peu laisser l\'outline de la voile pour investiguer un peu plus. Vous d&eacute;couvrirez une voile l&eacute;g&egrave;re, qui permet de rel&acirc;cher la puissance quasi instantan&eacute;ment.</p>
</div>
</div>',
        'year' => 2020,
        'price' => '780.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 1.0,
        'programme_end' => 4.0,
        'views' => 664,
        'last_ip' => NULL,
        'created_at' => '2018-09-04 13:18:33',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    103 => 
    array (
        'id' => 120,
        'name' => 'IRIS X',
        'slug' => 'phantom-iris-x-2019',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 78,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/irisx.jpg" alt="" /></div>
<div>
<p>La X est le mod&egrave;le d&eacute;di&eacute; &agrave; la pratique foil free-race. Dot&eacute;e de 2 cam, et d\'un foureau medium, cette voile propose un compromis entre la voile la voile de freeride o&ugrave; la notion de performance est accessoire, et la voile de course dont la technicit&eacute; la r&eacute;serve &agrave; des experts. L\'outline est &eacute;lanc&eacute;, le creux tr&egrave;s avanc&eacute; et assez haut ... ce qui a pour objectif de stabiliser la planche en vol, et de proposer tr&egrave;s peu de main arri&egrave;re.</p>
</div>
</div>',
        'year' => 2019,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'programme_start' => 5.0,
        'programme_end' => 8.0,
        'views' => 905,
        'last_ip' => NULL,
        'created_at' => '2019-04-02 16:13:15',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    104 => 
    array (
        'id' => 121,
        'name' => 'Hyperglide 2',
        'slug' => 'severn-hyperglide-2-2019',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 95,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/hyperglide2.jpg" alt="" /></div>
<div>
<p>Voici la 2eme version de l\'Hyperglide : c\'est la voile foil racing d&eacute;di&eacute;e de la marque Severne.</p>
<p>Au programme : grand &eacute;lancement, tr&egrave;s large fourreau avec 4 cambers, du volume et peu de renfort pour optimiser le poids. La chute ouvre peu mais de fa&agrave;on tr&egrave;s progressive.</p>
<p>Ce mod&egrave;le a fait ses preuves sur toutes les comp&eacute;titions internationales o&ugrave; elle s\'impose r&eacute;guli&egrave;rement.&nbsp; Elle a &eacute;t&eacute; d&eacute;velopp&eacute;e par Gonzalo Costa Hoevel ... une r&eacute;f&eacute;rence !</p>
<p>&nbsp;</p>
</div>
</div>',
        'year' => 2019,
        'price' => '1049.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38332s1-severn-hyperglide-2-severn-2019.html',
        'programme_start' => 8.0,
        'programme_end' => 10.0,
        'views' => 690,
        'last_ip' => NULL,
        'created_at' => '2019-05-31 22:00:00',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    105 => 
    array (
        'id' => 122,
        'name' => 'F-Type',
        'slug' => 'duotone-f-type-2019',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 28,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/IMG_7759.jpg" alt="" /></div>
<div>
<p>la F-Type est la premi&egrave;re voile d&eacute;di&eacute;e foil de l\'ex voilerie North. Elle est dot&eacute;e de 4 lattes sont 2 sur soft-cam.</p>
<p>Cette marque a compris la premi&egrave;re l\'int&eacute;r&ecirc;t de mettre des cambers sur une voile de freeride, et le r&eacute;sultat est tr&egrave;s r&eacute;ussi, grace &agrave; une r&eacute;utilisation d\'un concept qui date de plus de 15 ans : les cambers sur sangle. Ceci permet &agrave; la F-Type d\'afficher douceur, l&eacute;g&egrave;ret&eacute; et facilit&eacute; d\'utilisation.&nbsp;</p>
<p>La T-Type est disponible dans 2 surfaces : 5.8 et 6.8. La premi&egrave;re &eacute;tant peu volumineuse, et la seconde plut&ocirc;t p&ecirc;chue, les 2 surfaces sont parfaitement compl&eacute;mentaires.</p>
</div>
</div>',
        'year' => 2019,
        'price' => '809.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u36492s1-duotone-f-type-duotone-2020.html',
        'programme_start' => 1.0,
        'programme_end' => 4.0,
        'views' => 707,
        'last_ip' => NULL,
        'created_at' => '2018-09-21 22:00:00',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    106 => 
    array (
        'id' => 123,
        'name' => 'Air Ride',
        'slug' => 'ga-air-ride-2020',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 42,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img src="/storage/photos/1/2020-02/IMG_0251.jpg" alt="GA Sails Air Ride 2020" /></div>
<div>
<p>La Air Ride est une voile con&ccedil;ue pour le windfoil. Le programme vis&eacute; est celui du freeride, c\'est &agrave; dire de la navigation plaisir, sans notion de performance. Ici, on cherche de la facilit&eacute; et du confort essentiellement.</p>
<p>En terme de conception, la AirRide est une voile 5 lattes &agrave; grand allongement. La surface en dessous du wish est plu&ocirc;t g&eacute;n&eacute;reuse.</p>
<p>Les 5.7 et 6.7 sont sans cam. La 7.7 a 2 cambers dans un fourreau assez &eacute;troit (comme la nouvelle V8 NeilPryde).</p>
<p>Petite indication importante : la voile n&eacute;cessite une tension assez soutenue au wish pour donner le meilleur (ne pas la laisser ultra creuse, cela ne sert &agrave; rien, et la rend instable).</p>
</div>
</div>',
        'year' => 2020,
        'price' => '699.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38991s1-gaastra-airride-gaastra-2020.html',
        'programme_start' => 1.0,
        'programme_end' => 4.0,
        'views' => 1028,
        'last_ip' => NULL,
        'created_at' => '2019-09-30 22:00:00',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    107 => 
    array (
        'id' => 124,
        'name' => 'Skyblade',
        'slug' => 'loft-skyblade-2020',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 58,
        'status' => 'Published',
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-02/skyblade2019-01.jpg" alt="" /></div>
<div>
<p>La skyblade est la voile Foil Racing de Loft. Int&eacute;gralement revue en 2020, c\'est pour la premi&egrave;re fois une voile con&ccedil;ue &agrave; partir d\'une page blanche Pour le windfoil ... et &ccedil;a se voit.</p>
<p>&nbsp;La 8m correspond &agrave; la surface de vent fort pour les coureurs. Elle es &eacute;galement disponible en 9 et 10m2.</p>
<p>Contrairement aux habitudes de Monty, nous avons cette fois une voile avec aucun monofilm tram&eacute;, et une construction plus l&eacute;g&egrave;re avce moins de renforts. En contre partie, cela promet une voile plus dynamique, ce qui est essentiel en foil puisque l\'on surtoile beaucoup moins.</p>
<p>Je pr&eacute;cise &eacute;galement que pour 2020, loft proposera &eacute;galement une Skyscape 8m2 d&eacute;di&eacute;e au foil. les programmes sont diff&eacute;rents : foil racing pour la Skyblade / foil freeride et freerace pour la Skyscape.&nbsp;</p>
</div>
</div>',
        'year' => 2020,
        'price' => '1099.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38893s1-loft-skyblade-loft-2020.html',
        'programme_start' => 7.0,
        'programme_end' => 10.0,
        'views' => 902,
        'last_ip' => NULL,
        'created_at' => '2019-08-23 22:00:00',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    108 => 
    array (
        'id' => 125,
        'name' => 'IRIS X',
        'slug' => 'phantom-iris-x-2020',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 78,
        'status' => 'Published',
        'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/phantom_iris_x_83_pro_2021.png" alt="IRIS X 83" width="500" height="500"></div>
<div class="col-9">
<p>Apr&egrave;s les foils puis les voiles, la marque Phantom continue &agrave; travailler sur l\'&eacute;volution du mat&eacute;riel de windfoil. Malgr&eacute; la petite taille de cette soci&eacute;t&eacute;, et un certain nombre d\'h&eacute;sitations sur le c&ocirc;t&eacute; commercial, ces passionn&eacute;s ne l&egrave;vent pas le pied sur le d&eacute;veloppement.</p>
<p>On passe donc aujourd\'hui aux flotteurs, et c\'est Nicolas GOYARD qui s\'est, cette fois, mis &agrave; la planche &agrave; dessin (ou plut&ocirc;t &agrave; l\'ordinateur). Cela fait un bon moment que l\'on &eacute;voquait un certain nombre de concepts avec ce passion&eacute; de d&eacute;veloppement, et ils s\'est donc finalement fait plaisir en cr&eacute;ant son propre shape afin de mettre en oeuvre ses id&eacute;es.</p>
<p>4 flotteurs sont au programme :</p>
<ul>
<li>une IRIS R 100, d&eacute;di&eacute;e au programme foil racing (ou formula foil) ... comp&eacute;tition up &amp; down</li>
<li>une IRIS R 91, d&eacute;di&eacute;e du programme Slalom / Foil format PWA</li>
<li>une IRIS X, d&eacute;di&eacute;e au programme foil FreeRace</li>
<li>une IRIS Z&nbsp;, d&eacute;di&eacute;e au programme foil freeride</li>
</ul>
</div>
</div>
</div>',
        'year' => 2020,
        'price' => NULL,
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u40559s1-phantom-iris-x-board-phantom-2021.html',
        'programme_start' => 5.0,
        'programme_end' => 8.0,
        'views' => 4512,
        'last_ip' => '88.163.167.153',
        'created_at' => '2020-06-03 17:24:58',
        'updated_at' => '2022-04-08 23:04:33',
    ),
    109 => 
    array (
        'id' => 126,
        'name' => 'FoilGlide',
        'slug' => 'severn-foilglide-2020',
        'user_id' => 1,
        'category_id' => 3,
        'brand_id' => 95,
        'status' => 'Published',
        'body' => '<p>De la m&ecirc;me fa&ccedil;on qu\'avec le flotteur d&eacute;di&eacute; au foil, la voile d&eacute;di&eacute;e r&eacute;pond aux sp&eacute;cificit&eacute;s de la navigation en foil :&nbsp;</p>
<ul>
<li>besoin de l&eacute;g&egrave;ret&eacute; pour accompagner la douceur du foil</li>
<li>besoin de puissance pour lancer le foil (d&eacute;coller)</li>
<li>capacit&eacute; &agrave; se faire oublier en vol (o&ugrave; on n\'a plus besoin de puissance)</li>
</ul>
<p>Par ailleurs, les voiles d&eacute;di&eacute;es participent &agrave; la stabilisation longitudinale du foil, ce qui est un avantage tr&egrave;s important en comparaison avec une voile traditionnelle.&nbsp;</p>
<h3>La Severn Foil Glide</h3>
<p>La foil glide est une voile de freeride foil l&eacute;g&egrave;re, dot&eacute;e de 2 cambers et 4 lattes, et qui s\'utilise sur des mats RDM. Le look g&eacute;n&eacute;ral reprend &agrave; 100% le design de la voile de course nomm&eacute;e Hyperglide 2.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2040.jpg" alt="Severn Foil Glide" /></p>
<p>L\'outline est tr&egrave;s &eacute;lanc&eacute;. Ce n\'est pas &eacute;vident sur ma photo, mais la 6m se gr&eacute;e sur un 460 (avec 5cm de rallonge).&nbsp;</p>
<p><img src="/storage/photos/1/2020-02/IMG_2041.jpg" alt="Severn Foil Glide" /></p>
<p>Le fourreau est compos&eacute; de 2 tissus type dacron. Celui situ&eacute; sur le bord d\'attaque et plut&ocirc;t &eacute;pais. L\'autre ressemble &agrave; du mylar : il est fin, l&eacute;ger et rigide.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2042.jpg" alt="Severn Foil Glide" /></p>
<p>Les cambers sont identiques &agrave; ce que l\'on retrouve sur le reste de la gamme severn. On retrouve les but&eacute;es en Inox qui prot&egrave;gent les goussets de latte.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2043.jpg" alt="Severn Foil Glide" /></p>
<p>La mast-pannel utilise le m&ecirc;me mat&eacute;riau que le fourreau. Il n\'est pas en monofilm comme dans 90% des voiles du march&eacute;. On peut donc s\'attendre &agrave; plus de tendresse, et surtout un creux tr&egrave;s avanc&eacute;. Cambers mi &agrave; part, on retrouve le concept de l\'hydra sur ce mast-pannel en dacron.&nbsp;</p>
<p><img src="/storage/photos/1/2020-02/IMG_2044.jpg" alt="Severn Foil Glide" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2045.jpg" alt="Severn Foil Glide" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2046.jpg" alt="Severn Foil Glide" /></p>
<p>Sur les autres parties de la voile, tr&egrave;s peu de renforts. Le monofilm rouge constituant le corps de la voile est plut&ocirc;t fin. Le monofilm transprent est beaucoup plus &eacute;pais .</p>
<p><img src="/storage/photos/1/2020-02/IMG_2048.jpg" alt="Severn Foil Glide" /></p>
<p>Je rebondis sur le pr&eacute;sence de cet autocollant pour rappeler que la dur&eacute;e de vie d\'une voile est li&eacute;e &agrave; l\'exposition solaire, et non pas au rincage. Ce qui fingue une voile, c\'est le soleil et le sable, pas l\'eau sal&eacute;e !</p>
<p><img src="/storage/photos/1/2020-02/IMG_2047.jpg" alt="Severn Foil Glide" /></p>
<p>La conception de cette voile est tr&egrave;s ax&eacute;e vers la l&eacute;g&egrave;ret&eacute;. Le r&eacute;sulat sur la balance est tout simplement exceptionnel ! J\'ai pes&eacute; la 6m &agrave; 3.46Kg, contre 4.45kg pour une Loft Skyscape 6,3 et 4.99kg pour une Duotone E-Type 5,8 (qui passe pour une voile l&eacute;g&egrave;re).</p>
<p>A vite tester sur l\'eau, mais le concept a l\'air int&eacute;ressant et au point ou en en est, en tout cas atypique.&nbsp;</p>
<h3>Caract&eacute;ristiques techniques</h3>
<table border="0">
<tbody>
<tr>
<td>Taille</td>
<td>Guindant</td>
<td>Wishbone</td>
<td>Mat recommand&eacute;</td>
</tr>
<tr>
<td>5.0</td>
<td>432</td>
<td>170</td>
<td>430 RDM</td>
</tr>
<tr>
<td>6.0</td>
<td>465</td>
<td>188</td>
<td>460 RDM</td>
</tr>
<tr>
<td>7.0</td>
<td>489</td>
<td>202</td>
<td>460 RDM</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>',
        'year' => 2020,
        'price' => '649.00',
        'link_test' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38896s1-severn-foilglide-severn-2020.html',
        'programme_start' => 2.0,
        'programme_end' => 5.0,
        'views' => 2190,
        'last_ip' => NULL,
        'created_at' => '2020-04-06 17:32:01',
        'updated_at' => '2022-03-20 20:52:42',
    ),
    110 => 
    array (
        'id' => 127,
        'name' => 'Hydrofoil 135 ES',
        'slug' => 'jp-australia-hydrofoil-135-2020',
        'user_id' => 1,
        'category_id' => 2,
        'brand_id' => 56,
        'status' => 'Published',
        'body' => '<p>Apr&egrave;s 3 saisons de bons et loyaux services, le mod&egrave;le phare des flotteurs windfoil JP subit un lifting cette ann&eacute;e.</p>
<p>Le premier changement concerne le look, comme le reste de la gamme JP. Un gros travail a &eacute;t&eacute; fait pour donner un aspect plus qualitatif &agrave; toute la gamme, y compris cette version ES. Du choix des couleurs, aux d&eacute;tail de finition (logos, pads, pied de mat etc), tout a &eacute;t&eacute; retravaill&eacute; et le r&eacute;sultat est plus que r&eacute;ussi.</p>
<p><img src="/storage/photos/1/2020-02/IMG_1983.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<p><img src="/storage/photos/1/2020-02/IMG_1984.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<p>le 2e changement est d\'ordre technique avec</p>
<ul>
<ul>
<li>des nouveaux rails biseaut&eacute;s pour r&eacute;duire les coups de frein lors des touchettes sur le rail</li>
</ul>
</ul>
<p><img src="/storage/photos/1/2020-02/IMG_1977.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<ul>
<li>des nouvelles formes de cut pour donner un peu plus de puissance lors du d&eacute;collage dans le light&nbsp;</li>
</ul>
<p><img src="/storage/photos/1/2020-02/IMG_1978.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<p><img src="/storage/photos/1/2020-02/IMG_1979.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<p>Nous aurions aussi aim&eacute; des inserts de strap plus avanc&eacute;s pour une meilleur compatibilit&eacute; avce certains foil, mais aucun changement de ce c&ocirc;t&eacute; : le reste de la g&eacute;om&eacute;trie reste strictement identique ... on ne change pas une &eacute;quipe qui gagne comme on dit :)</p>
<p>On vous laisse d&eacute;couvrir la b&ecirc;te en photos, en attendant de pouvoir vous la montrer en chair et en os (dispo au magasin)</p>
<p><img src="/storage/photos/1/2020-02/IMG_1985.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<p><img src="/storage/photos/1/2020-02/IMG_1981.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>
<p><img src="/storage/photos/1/2020-02/IMG_1982.jpg" alt="JP Hydrofoil 135 ES 2020 " /></p>',
    'year' => 2020,
    'price' => '1549.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u36356s1-jp-australia-hydrofoil-board-es-jp-australia-2020.html',
    'programme_start' => 2.0,
    'programme_end' => 5.0,
    'views' => 1298,
    'last_ip' => NULL,
    'created_at' => '2020-04-06 18:40:30',
    'updated_at' => '2022-03-20 20:52:42',
),
111 => 
array (
    'id' => 128,
    'name' => 'IRIS Z',
    'slug' => 'phantom-iris-z-2021',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 78,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/phantom-iris-z-2020.jpg" alt="" /></div>
<div>
<p>L\'IRIS Z est la voile de foil freeride by Phantom.</p>
<p>A l\'instar de Duotone avec sa F-Type, et de Severne avec sa FoilGlide, Phantom a &eacute;galement opt&eacute; pour un concept avec 2 petits cambers pour ce programme de voile l&eacute;g&egrave;re. Pour rappel, cela permet de stabiliser la voile et de la rendre plus agr&eacute;able, sans d&eacute;stabiliser le pilote lors des rafales.</p>
<p>La voile est disponible dans 2 tailles : 5.8 et 6.8, qui correspondent au domaine d\'utilisation du foil freeride (vent entre 10 et 25 knt).</p>
<p>La 5.8 se gr&eacute;e sur un 430, et la 6.8 sur un 460. Les 2 voiles ont &eacute;t&eacute; con&ccedil;ues pour &ecirc;tre gr&eacute;&eacute;es sur du mat SDM constant flex, mais il est possible en option de les commander avec des cam RDM.</p>
</div>
</div>',
    'year' => 2021,
    'price' => '749.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40386s1-phantom-iris-z-phantom-2020.html',
    'programme_start' => 2.0,
    'programme_end' => 4.0,
    'views' => 3335,
    'last_ip' => NULL,
    'created_at' => '2020-04-06 18:46:04',
    'updated_at' => '2022-03-20 20:52:42',
),
112 => 
array (
    'id' => 129,
    'name' => 'IRIS RF',
    'slug' => 'phantom-iris-rf-2020',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 78,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-02/iris-rf.jpg" alt="iris rf" width="800" height="993" /></div>
<div class="col-lg">
<p>Au c&ocirc;t&eacute; des gammes IRIS Z (d&eacute;di&eacute;e foil freeride) et IRIS X (foil free-race), la gamme IRIS RF propose une approche racing de la pratique foil. Au programme des performances ultimes, en vitesse &agrave; toutre les allures. C\'est la voile qui a permis &agrave; Nicolas Goyard de d&eacute;crocher le totre de champion du monde &agrave; 2 reprises.</p>
<p>Avec son design 7 lattes / 4 cam, le profil est bloqu&eacute; pour permettre profiter d\'une plage d\'utilisation maximale, tout en apportant tout ce que l\'on attend d\'une voile d&eacute;di&eacute;e au foil : une stabilisation du foil et du flotteur en vol.&nbsp;</p>
<p>Ces voiles sont con&ccedil;ues pour &ecirc;tre utilis&eacute;es sur des mats constant flex. Nos tests ont montr&eacute;s une parfaite compatibilit&eacute; avec les mats Duotone.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/iris-rf-2.jpg" alt="iris rf" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/iris-rf-3.jpg" alt="iris rf" /></p>
</div>
</div>
</div>',
    'year' => 2020,
    'price' => '948.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 7.0,
    'programme_end' => 10.0,
    'views' => 1011,
    'last_ip' => NULL,
    'created_at' => '2020-04-06 20:10:55',
    'updated_at' => '2022-03-20 20:52:42',
),
113 => 
array (
    'id' => 130,
    'name' => 'IRIS Z',
    'slug' => 'phantom-iris-z-2020',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 78,
    'status' => 'Hidden',
    'body' => '<p>Le freeride</p>',
    'year' => NULL,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 2.0,
    'programme_end' => 4.0,
    'views' => 4,
    'last_ip' => '::1',
    'created_at' => '2020-04-06 20:15:55',
    'updated_at' => '2022-03-23 22:35:32',
),
114 => 
array (
    'id' => 131,
    'name' => 'RF 71 Carbon',
    'slug' => 'exocet-rf-71-carbon-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 32,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div><img src="/storage/photos/1/2020-04/IMG_3355.jpg" alt="Exocet RF 97 2020" /></div>
<div>
<p>Avec leur shape unique et sp&eacute;cifique, Les RF sont particuli&egrave;rement accessibles et performantes dans toutes les conditions. Une gamme compl&egrave;te pour coller suivant la taille aux programmes course-racing ou slalom foil. Leur plan de pont relativement plat et la distribution du volume donnent la possibilit&eacute; de monter tous type de foils et rendra votre vol plus stable, plus confortable et plus efficace.</p>
<h3>PROGRAMME</h3>
<p>Freerace</p>
<h3>CARACTERISTIQUES</h3>
<ul>
<li>D&eacute;part au planning boost&eacute; dans les conditions light</li>
<li>Boitier de foil recul&eacute; au maximum pour un &laquo; pop &raquo; tr&egrave;s rapide sur une distance tr&egrave;s courte.</li>
<li>Forme de point in&eacute;dite pla&ccedil;ant le pied avant plus haut que le pied arri&egrave;re pour favoriser le contr&ocirc;le, donner de la puissance et une facilit&eacute; d&eacute;concertante au jibe.</li>
<li>R&eacute;partition du volume in&eacute;dite le pla&ccedil;ant en avant du pied de m&acirc;t, pour positionner le foil dans la position id&eacute;ale pour d&eacute;coller.</li>
<li>Ces nouvelles RF ne sont pas seulement plus performantes, elles sont une avanc&eacute;e majeure tant en contr&ocirc;le qu&rsquo;en facilit&eacute;.</li>
</ul>
<h3>CONSTRUCTION Carbone</h3>
<ul>
<li>Custom CNC Shape</li>
<li>Finition custom</li>
<li>160gr Biax Carbon</li>
<li>80kg/m3 PVC pont et car&egrave;ne</li>
<li>renforcement structurels sur les rails</li>
</ul>
<h3>COMPAREES AUX FREE FOIL</h3>
<p>Les Freefoil sont d&eacute;di&eacute;es au freeride. Les riders cherchant plus de contr&ocirc;le &agrave; haute vitesse ou de la puissance pour remonter au vent pr&eacute;f&egrave;reront les RF.</p>
</div>
</div>',
    'year' => 2020,
    'price' => '2290.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34454s1-exocet-rf-foil-board-carbon-exocet-2020.html',
    'programme_start' => 4.0,
    'programme_end' => 7.0,
    'views' => 6404,
    'last_ip' => '176.180.88.235',
    'created_at' => '2020-04-08 14:16:00',
    'updated_at' => '2022-04-10 15:44:45',
),
115 => 
array (
    'id' => 132,
    'name' => 'VINI PRO V2',
    'slug' => 'horue-vini-pro-v2-2020',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 51,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div><img src="/storage/photos/1/2020-04/viniv2.jpg" /></div>
<div>
<p>Le nouveau Vini V2 a &eacute;t&eacute; enti&egrave;rement retravaill&eacute; dans son design (mat beaucoup plus droit) et sa construction pour offrir plus de raideur et de contr&ocirc;le. Son process de fabrication 100% made in France permet &agrave; Horue de proposer la garantie de 3 ans*, et 5 ans sur les inserts de fuselage &nbsp;!</p>
<p>Le Vini V2 est construit en one shot et en monobloc. L&rsquo;ensemble boitier / mat / fuselage sont fabriqu&eacute;s en une seule op&eacute;ration en fibre continue et sans vernis. Il en r&eacute;sulte un &eacute;tat de surface parfait avec d&eacute;coration int&eacute;gr&eacute;e sans sur&eacute;paisseur, le tout pour une long&eacute;vit&eacute; accrue.</p>
<p>Le Vini V2 est &eacute;quip&eacute; d&rsquo;une cale de car&egrave;ne permettant d&rsquo;&eacute;viter la rotation du foil dans le boitier et r&eacute;duisant les efforts subis par la planche en navigation. L&rsquo;accastillage fourni est tr&egrave;s complet, comprenant notamment un outil de montage, des rondelles de pont carbone ainsi qu&rsquo;une boite &agrave; vis de rechange permettant d&rsquo;avoir la longueur de vis la plus adapt&eacute;e &agrave; sa planche.</p>
<ul>
<li>Longueur fuselage : 76cm</li>
<li>Inserts de fuselage en acier inoxydable usin&eacute; qualit&eacute; 316L moul&eacute; en one shot</li>
<li>Deux inserts de boitier en laiton de 14mm pour un serrage coupleux</li>
<li>Boitier moul&eacute; en one shot en monobloc avec le mat</li>
<li>Syst&egrave;me de calage carbone sur la car&egrave;ne : "Plug\'n play"</li>
</ul>
</div>
</div>',
    'year' => 2020,
    'price' => '1715.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 0.0,
    'programme_end' => 3.0,
    'views' => 2514,
    'last_ip' => NULL,
    'created_at' => '2020-04-09 07:20:17',
    'updated_at' => '2022-03-20 20:52:42',
),
116 => 
array (
    'id' => 133,
    'name' => 'FOIL FREERIDE 150',
    'slug' => 'starboard-foil-freeride-150-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 100,
    'status' => 'Hidden',
    'body' => '<p>s</p>',
    'year' => 2020,
    'price' => '2149.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38905s1-starboard-foil-board-freeride-flax-balsa-starboard-2020.html',
    'programme_start' => 6.0,
    'programme_end' => 9.0,
    'views' => 1,
    'last_ip' => NULL,
    'created_at' => '2020-04-09 07:41:53',
    'updated_at' => '2021-02-06 22:01:28',
),
117 => 
array (
    'id' => 134,
    'name' => 'FOIL FREERIDE 125',
    'slug' => 'starboard-foil-freeride-125-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 100,
    'status' => 'Hidden',
    'body' => '<p>c</p>',
    'year' => 2020,
    'price' => '2099.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38905s1-starboard-foil-board-freeride-flax-balsa-starboard-2020.html',
    'programme_start' => 4.0,
    'programme_end' => 8.0,
    'views' => 4,
    'last_ip' => NULL,
    'created_at' => '2020-04-09 07:43:47',
    'updated_at' => '2021-02-06 22:01:18',
),
118 => 
array (
    'id' => 135,
    'name' => 'AIRIDE 81 MTE',
    'slug' => 'tabou-airide-81-mte-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 104,
    'status' => 'Hidden',
    'body' => '<p>nouvelle constuction 2020, ex CED</p>',
    'year' => 2020,
    'price' => '1499.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38805s1-tabou-airide-mte-tabou-2020.html',
    'programme_start' => NULL,
    'programme_end' => NULL,
    'views' => 2,
    'last_ip' => NULL,
    'created_at' => '2020-04-09 08:02:34',
    'updated_at' => '2020-04-09 08:02:34',
),
119 => 
array (
    'id' => 136,
    'name' => 'Tiny',
    'slug' => 'horue-tiny-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 51,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3714.jpg" alt="Horue Tini 2020" /></div>
<div>
<p>Le Horue Tiny est la pocket board originale de windfoil qui a conduit le march&eacute; l&agrave; o&ugrave; nous en sommes maintenant. Avec plus de 5 ans sur le march&eacute;, il &eacute;tait temps de renouveler le mod&egrave;le avec quelques am&eacute;liorations et fonctionnalit&eacute;s suppl&eacute;mentaires, mais en gardant la m&ecirc;me philosophie.</p>
<p>V&eacute;ritable planche de poche, la toute premi&egrave;re pocket board mise sur le march&eacute;, permettant des virages courts et un r&eacute;el plaisir en vol.</p>
<p>Avec son double concave profond , et ses lignes arri&egrave;res tr&egrave;s pinc&eacute;es pour un planing pr&eacute;coce, sa construction en carbone (planche fabriqu&eacute;e en Europe), la board est tr&egrave;s l&eacute;gere et dispose de renforts sp&eacute;cifiques pour une utilisation intensive du Windfoil.</p>
<ul>
<li>Utilisation de Windfoil et de la planche &agrave; voile classique</li>
<li>Full Carbon made - Fabriqu&eacute; en UE - Tr&egrave;s solide</li>
<li>Double convave profond sur la acr&egrave;ne - Planing pr&eacute;coce</li>
<li>Deep Tuttle Box renforc&eacute;</li>
<li>Double rails US</li>
</ul>
<p>Dimensions disponibles:</p>
<ul>
<li>90l - 195x75</li>
<li>100l - 195x75</li>
<li>110l - 205x77</li>
<li>120l - 205x77</li>
<li>130l - 205x77</li>
</ul>
</div>
</div>',
    'year' => 2020,
    'price' => '2150.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 0.0,
    'programme_end' => 3.0,
    'views' => 1936,
    'last_ip' => NULL,
    'created_at' => '2020-04-17 06:49:25',
    'updated_at' => '2022-03-20 20:52:42',
),
120 => 
array (
    'id' => 138,
    'name' => 'A1 SPORT',
    'slug' => 'alpinefoil-a1-sport-2020',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 8,
    'status' => 'Published',
'body' => '<p>Pour 2020, AlpineFoil nous propose 2 nouvelles d&eacute;clinaisons de son windfoil carbone A1 : le "Sport" et le "Race". Ces 2 nouveaux mod&egrave;les sont bas&eacute;s sur un mat de 97cm, notablement optimis&eacute; pour la glisse avec avec un profil plus fin (13.9mm en t&ecirc;te contre 16mm) que sur le A1 original.</p>',
    'year' => 2020,
    'price' => '2289.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40223s1-alpinefoil-a1-sport-carbone-alpinefoil-2020.html',
    'programme_start' => 4.0,
    'programme_end' => 7.0,
    'views' => 2337,
    'last_ip' => '88.163.167.153',
    'created_at' => '2020-04-25 06:19:35',
    'updated_at' => '2022-04-08 23:27:38',
),
121 => 
array (
    'id' => 139,
    'name' => 'WARP FOIL',
    'slug' => 'duotone-warp-foil-2020',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 28,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2020-05/DT20_Sails_Warp_Foil_20.20_C24.png" alt="Duotone Warp Foil 20.20" /></div>
<div class="col-lg">
<p>La volont&eacute; de Duotone a &eacute;t&eacute; de d&eacute;velopper 2 concepts sans compromis pour cette nouvelle saison.</p>
<ul>
<li>L&rsquo;un, destin&eacute; au &nbsp;Course Racing 8.9 et 9.9 ( up &amp; down), est plut&ocirc;t inspir&eacute; des sp&eacute;cificit&eacute;s li&eacute;es aux courses type Formula ou l&rsquo;on recherche au maximum les performances au pr&egrave;s et au vent arri&egrave;re</li>
<li>L&rsquo;autre, typ&eacute; Slalom en 6.8 / 7.8 &nbsp;et 8.8, est bas&eacute; sur les formats de courses retenus par la PWA et une pratique plus orient&eacute;e vers la vitesse en foil, les acc&eacute;l&eacute;rations et le jibe.</li>
</ul>
<p>&nbsp;</p>
<h3>Concepts d&eacute;velopp&eacute;s sur le mod&egrave;le Course racing</h3>
<p>En 2020, la plupart des courses nationales de windfoil se d&eacute;rouleront sur des parcours type &laquo; Pr&egrave;s/Vent arri&egrave;re &raquo; . L\'&eacute;quipe Duotone a donc commenc&eacute; &agrave; tester la WARP_FOIL 20.19 contre les meilleures voiles de foil des marques concurrentes. Pour que la traction de la voile soit en &eacute;quilibre de pouss&eacute;e avec la faible tra&icirc;n&eacute;e de l\'hydrofoil, ils ont r&eacute;duit la largeur de la t&ecirc;te de voile et ajout&eacute; de la hauteur pour conserver la surface totale, le r&eacute;sultat donne une voile plus &eacute;lanc&eacute;e. Le twist r&eacute;duit apporte plus de stabilit&eacute; en t&ecirc;te de voile afin de s&rsquo;&eacute;quilibrer avec le vol sur l\'hydrofoil.</p>
<p>Sur l\'eau, cela se traduit par une am&eacute;lioration de la stabilit&eacute; et un excellent contr&ocirc;le de l&rsquo;ensemble, m&ecirc;me &agrave; haute vitesse. Pour assurer une performance maximale au pr&egrave;s et au vent arri&egrave;re, la pouss&eacute;e et la r&eacute;partition du profil sont tr&egrave;s similaires &agrave; ceux d\'une voile de Formula. C\'est parfaitement logique car les deux voiles sont utilis&eacute;es sur des parcours tr&egrave;s similaires. Enfin, Duotone a augment&eacute; la surface sous le wishbone pour obtenir encore plus de performance.</p>
</div>
<div class="col-lg">
<h3>Concepts d&eacute;velopp&eacute;s sur le mod&egrave;le Slalom</h3>
<p>Ces tailles sont d&eacute;velopp&eacute;es pour la nouvelle discipline de slalom foil combin&eacute; mise en place par la PWA. L\'&eacute;quipe Duotone a commenc&eacute; par tester les meilleures voiles des marques concurrentes de foil contre leur WARP 8.4. Ces tests nous ont appris deux choses d&eacute;cisives :</p>
<p>1. Les voiles de foil de course racing ne sont pas comp&eacute;titives sur les parcours de slalom, de plus, la surface importante sous le wishbone est g&ecirc;nante pour les jibes incisifs.</p>
<p>2. En utilisation windfoil, la WARP de slalom, en utilisation foil, montre une grosse acc&eacute;l&eacute;ration mais n\'est pas assez stable par rapport au besoin en foil, de plus, elle a trop de puissance dans la main arri&egrave;re.</p>
<p>Avec ces constatations, Kai a pris le concept high aspect et le rapport de twist de la WARP_FOIL 8.9 Course Racing et les a combin&eacute;s avec la r&eacute;partition des profils de la WARP slalom 8.4, Il a ensuite d&eacute;plac&eacute; le centre de pouss&eacute;e l&eacute;g&egrave;rement vers l&rsquo;avant, vers le haut et a enlev&eacute; de la surface sous le wishbone. Le r&eacute;sultat est une machine de course pour le foil slalom avec une acc&eacute;l&eacute;ration explosive sur les parcours de slalom, tout en restant tr&egrave;s stable grace &agrave; la r&eacute;duction de l&rsquo;ouverture de la chute et de la t&ecirc;te de voile plus fine.</p>
</div>
</div>
</div>
<h3>Technique</h3>
<table style="border-collapse: collapse; width: 100%; height: 132px;" border="1">
<tbody>
<tr style="height: 22px;">
<td style="width: 20%; height: 22px;">&nbsp;</td>
<td style="width: 20%; height: 22px;">Guidant</td>
<td style="width: 20%; height: 22px;">Wishbone</td>
<td style="width: 20%; height: 22px;">Poids</td>
<td style="width: 20%; height: 22px;">Mat</td>
</tr>
<tr style="height: 22px;">
<td style="width: 20%; height: 22px;">6.8 Slalom</td>
<td style="width: 20%; height: 22px;">452</td>
<td style="width: 20%; height: 22px;">212</td>
<td style="width: 20%; height: 22px;">5,5</td>
<td style="width: 20%; height: 22px;">Platinium SDM 430</td>
</tr>
<tr style="height: 22px;">
<td style="width: 20%; height: 22px;">7.8 Slalom</td>
<td style="width: 20%; height: 22px;">508</td>
<td style="width: 20%; height: 22px;">222</td>
<td style="width: 20%; height: 22px;">5,8</td>
<td style="width: 20%; height: 22px;">Platinium SDM 490</td>
</tr>
<tr style="height: 22px;">
<td style="width: 20%; height: 22px;">8.8 Slalom</td>
<td style="width: 20%; height: 22px;">550</td>
<td style="width: 20%; height: 22px;">236</td>
<td style="width: 20%; height: 22px;">6,2</td>
<td style="width: 20%; height: 22px;">Platinium SDM 520</td>
</tr>
<tr style="height: 22px;">
<td style="width: 20%; height: 22px;">8.9 Course Racing</td>
<td style="width: 20%; height: 22px;">550</td>
<td style="width: 20%; height: 22px;">236</td>
<td style="width: 20%; height: 22px;">6,2</td>
<td style="width: 20%; height: 22px;">Platinium SDM 520</td>
</tr>
<tr style="height: 22px;">
<td style="width: 20%; height: 22px;">9.9 Course Racing</td>
<td style="width: 20%; height: 22px;">580</td>
<td style="width: 20%; height: 22px;">242</td>
<td style="width: 20%; height: 22px;">6,6</td>
<td style="width: 20%; height: 22px;">Platinium SDM 550</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>',
    'year' => 2020,
    'price' => '1449.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windsurf/u40557s1-duotone-warp-foil-duotone-2020.html',
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 1832,
    'last_ip' => NULL,
    'created_at' => '2020-05-01 11:33:58',
    'updated_at' => '2022-03-20 20:52:42',
),
122 => 
array (
    'id' => 140,
    'name' => 'FALCON FOIL',
    'slug' => 'fanatic-falcon-foil-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 36,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-05/fanatic_falcon_foil_te_2020.jpg" alt="Fanatic Falcon foil 2020" /></div>
<div>
<p>Con&ccedil;ue pour naviguer en Foil en comp&eacute;tition, la Falcon Foil permet non seulement de d&eacute;coller dans des vents tr&egrave;s l&eacute;gers, mais offre &eacute;galement un maximum de contr&ocirc;le et de puissance en course.</p>
<p>L&rsquo;arri&egrave;re large et les rails parall&egrave;les offrent des appuis sur le rail tr&egrave;s &eacute;quilibr&eacute;s, ce qui est crucial pour le contr&ocirc;le lorsque le foil est lanc&eacute; &agrave; pleine vitesse, que vous cherchiez &agrave; caper ou &agrave; acc&eacute;l&eacute;rer au largue.</p>
<p>Son nouveau shape optimise les appuis pour une utilisation avec de grandes voiles de course, vous permettant d&rsquo;exploiter toute la puissance du foil pour gagner en performances. Les rails adoucis et le V prononc&eacute; du nez amortissent les atterrissages occasionnels sans vous ralentir.</p>
<h3>Les mod&egrave;les</h3>
<p>La FALCON FOIL existe dans 3 dimensions, pour 3 programmes</p>
<ul>
<li>180L en 91cm pour une utilisation polyvalente course</li>
<li>190L en 91cm d&eacute;di&eacute;e SLALOM : plus &eacute;paisse , plus courte, un nose relev&eacute; dot&eacute; de rail arrondis un V prononc&eacute; sur la car&egrave;ne et avec de nouveaux cut outs</li>
<li>200L en 100cm d&eacute;di&eacute;e Course Racing pour un maxiumum de puissance en mode Up &amp; Down</li>
</ul>
</div>
</div>',
    'year' => 2020,
    'price' => '2899.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40558s1-fanatic-falcon-foil-fanatic-2020.html',
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 715,
    'last_ip' => NULL,
    'created_at' => '2020-05-01 12:17:47',
    'updated_at' => '2022-03-20 20:52:43',
),
123 => 
array (
    'id' => 141,
    'name' => 'RF 81 CARBONE V2',
    'slug' => 'exocet-rf-81-carbone-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 32,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-1.jpg" alt="Exocet RF 81 carbone 2020" /></div>
<div>
<p>Avec leur shape unique et sp&eacute;cifique, Les RF sont particuli&egrave;rement accessibles et performantes dans toutes les conditions. Une gamme compl&egrave;te pour coller suivant la taille aux programmes course-racing ou slalom foil. Leur plan de pont relativement plat et la distribution du volume donnent la possibilit&eacute; de monter tous type de foils et rendra votre vol plus stable, plus confortable et plus efficace.</p>
<h3>PROGRAMME</h3>
<p>Freerace</p>
<h3>CARACTERISTIQUES</h3>
<ul>
<li>D&eacute;part au planning boost&eacute; dans les conditions light</li>
<li>Boitier de foil recul&eacute; au maximum pour un &laquo; pop &raquo; tr&egrave;s rapide sur une distance tr&egrave;s courte.</li>
<li>Forme de point in&eacute;dite pla&ccedil;ant le pied avant plus haut que le pied arri&egrave;re pour favoriser le contr&ocirc;le, donner de la puissance et une facilit&eacute; d&eacute;concertante au jibe.</li>
<li>R&eacute;partition du volume in&eacute;dite le pla&ccedil;ant en avant du pied de m&acirc;t, pour positionner le foil dans la position id&eacute;ale pour d&eacute;coller.</li>
<li>Ces nouvelles RF ne sont pas seulement plus performantes, elles sont une avanc&eacute;e majeure tant en contr&ocirc;le qu&rsquo;en facilit&eacute;.</li>
</ul>
<h3>CONSTRUCTION Carbone</h3>
<ul>
<li>Custom CNC Shape</li>
<li>Finition custom</li>
<li>160gr Biax Carbon</li>
<li>80kg/m3 PVC pont et car&egrave;ne</li>
<li>renforcement structurels sur les rails</li>
</ul>
<h3>COMPAREES AUX FREE FOIL</h3>
<p>Les Freefoil sont d&eacute;di&eacute;es au freeride. Les riders cherchant plus de contr&ocirc;le &agrave; haute vitesse ou de la puissance pour remonter au vent pr&eacute;f&egrave;reront les RF.</p>
</div>
</div>
<h3>Pr&eacute;sentation d&eacute;taill&eacute;e en photos</h3>
<p>Les RF 2020 tranchent totalement avec le mod&egrave;le pr&eacute;c&eacute;dent. La seule ligne conductrice, c\'est clairement le c&ocirc;t&eacute; non conservateur de ces shapes.</p>
<p>Le scoop combine une grande longueur de plat pour d&eacute;coller t&ocirc;t, un nez assez relev&eacute;, mais l\'impression d\'un flotteur hyper tendu (alors qu\'il n\'en est rien). Cette impression visuelle vient du gros volume positionn&eacute; devant le de pied de mat, et qui vient \'remplir\' la zone soulignant habituellement la banane du nez.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-2.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p>Les cuts &agrave; 2 &eacute;tages viennent \'lib&eacute;rer\' la largeur g&eacute;n&eacute;reuse sous le pied arri&egrave;re (OFO de 73.5)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-3.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p>Comme sur lees freefoil, Exocet n\'a pas l&eacute;sin&eacute; sur les couleurs vives pour cette nouvelle s&eacute;rie. Nous, on adore !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-4.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-5.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p>Pour plaire &agrave; un maximum de monde, et permettre d\'utiliser un maximum de foils, Excoet n\'a pas &eacute;t&eacute; avare en terme de position de strap. On vote pour ! On retrouve aussi les trous oblongs inaugur&eacute;s sur la Freefoil, et qui simplifient clairement le montage des vis.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-6.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p>Dans la lign&eacute;e des derni&egrave;res g&eacute;n&eacute;rations de board \'perf\', le boitier est &agrave; 3cm de l\'arri&egrave;re. Un excellent point pour les utilisateurs chevron&eacute;s qui savent faire poper la planche, car cela permet de d&eacute;coller en 2 coups de pumping bien calibr&eacute;s. Evidemment, ceci souligne que ce flotteur n\'est pas fait pour les d&eacute;butants.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-7.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-8.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-9.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p>Sur cette RF, on retrouve des rails tr&egrave;s proches de ceux de la Freefoil : l&eacute;g&egrave;rement arrondis, mais tr&egrave;s "boxy" pour que la planche ne suce pas mais au contraire rebondisse en touchant l\'eau (ce que l\'on a clairement not&eacute; sur la RF71 lors du <a href="/reviews/86">test</a>).&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-10.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-11.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-12.jpg" alt="Exocet RF 81 carbone 2020" /></p>
<p>Encore une fois, Exocet montre que Patrice et Damien ne sont pas l&agrave; pour copier des recettes existantes. Avec la Phantom IRIS X, cette nouvelle RF sera probalement un des flotteurs les plus innovants de la saison 2020. Vive le test !!!</p>',
    'year' => 2020,
    'price' => '2290.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34454s1-exocet-rf-foil-board-carbon-exocet-2020.html',
    'programme_start' => 5.0,
    'programme_end' => 8.0,
    'views' => 7805,
    'last_ip' => '::1',
    'created_at' => '2020-05-03 11:09:02',
    'updated_at' => '2022-03-21 00:13:28',
),
124 => 
array (
    'id' => 142,
    'name' => 'IQFOIL 95',
    'slug' => 'starboard-iqfoil-95-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 100,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2020-05/2020-Starboard-iQFoil-95-Carbon-Reflex-Standing.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></div>
<div class="col-lg">
<p>L\'iQ 95 est le flotteur monotype con&ccedil;u pour le programme Windfoil olympique et s&eacute;lectionn&eacute; par World Sailing pour l\'olympiade 2024 (Paris / Marseille). Il sera associ&eacute; au gr&eacute;eement Severne Hyperglide 2 (en 8m pour les filles et 9m pour les hommes), et au foil starboard Race.</p>
<p>Le flotteur est con&ccedil;u pour une utilisation race au format Up &amp; Down en grande voile, mais il sera aussi propos&eacute; avec un aileron pour couvrir les conditions de course lorsque le foil devient impraticable ... mais toujours associ&eacute; aux 8 et 9m2. Pour les jeunes comp&eacute;titeurs, un mod&egrave;le plus &eacute;troit en 85cm et plus simple en construction sera &eacute;galement propos&eacute;.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-1.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
</div>
</div>
</div>
<h3>Pr&eacute;sentation d&eacute;taill&eacute;e en photo</h3>
<p>Le scoop est assez prononc&eacute;, avec un nez bien revel&eacute; pour &eacute;viter les enfournements.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-2.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p>Les cuts &agrave; 3 &eacute;tages</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-3.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p>La forme de pont est loin d\'&ecirc;tre plate. On retrouve un certain nombre de recettes issues des autres flotteurs "spaciaux" de la marque comme la raceboard et la Formula. Cela permet aux comp&eacute;titeurs pro d\'aller cherhcer des positions de calage dasn chaque condition de navigation. Sur la photo ce dessous, on voir notemment, les cuvettes destin&eacute;es &agrave; caler le pied arri&egrave;re en mode chicken en aileron.&nbsp;</p>
<p>Bien s&ucirc;r, un tel pont "travaill&eacute;" ne simplifie pas l\'utilisation du pratiquant "du dimanche", mais la cible de la planche est bien &eacute;loign&eacute;e de ceci.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-4.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p>Le plan de pont en mode foil sous le pied arri&egrave;re offre une courbure plus progressive que les mod&egrave;les traditionnels comme la F144 ou la F150.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-5.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-6.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-7.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p>Comme sur le reste de la gamme Starboard, on retrouve des rails tr&egrave;s boxy mis tr&egrave;s vifs. C\'est la recette Starboard pour &eacute;viter une planche qui ne colle trop lors des touchettes.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-8.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-9.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/iqfoil-iq95-reflex-10.jpg" alt="Starboard IQFOIL 95 Reflex carbone" /></p>',
    'year' => 2020,
    'price' => '2898.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u39925s1-starboard-iqfoil-board-95-carbon-reflex-starboard-2020.html',
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 919,
    'last_ip' => NULL,
    'created_at' => '2020-05-03 11:43:24',
    'updated_at' => '2022-03-20 20:52:43',
),
125 => 
array (
    'id' => 143,
    'name' => 'IQFOIL 8M',
    'slug' => 'severne-iqfoil-8m-2020',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 95,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2020-05/severne-iqfoil-sail.jpg" alt="Severne IQFOIL Olympic sail" /></div>
<div class="col-lg">
<p>L\'iQFoil Sail est la voile monotype con&ccedil;ue pour le programme Windfoil olympique et s&eacute;lectionn&eacute;e par World Sailing pour l\'olympiade 2024 (Paris / Marseille). Il sera associ&eacute; au flotteur Starboard IQ95, en 8m pour les filles et 9m pour les hommes, et au foil starboard Race.</p>
<p>Cette voile est con&ccedil;ue pour une utilisation race au format Up &amp; Down avec un gros flotteur, mais elle devra aussi &ecirc;tre utilis&eacute;e en mode aileron pour couvrir les conditions de course lorsque le foil devient impraticable (vent ou mer forte).&nbsp;</p>
<p>En terme de d&eacute;veloppement, cette voile est issue du mod&egrave;le Hyperglide 2, avec quelques modifications qui ont pour objectif de lui offrir une plus grande ouverture vers le vent soutenu et la navigation en aileron. Concr&ecirc;tement, la bordure en dessous du wish a &eacute;t&eacute; r&eacute;duit, et la surface report&eacute;e vers le haut de la voile. Les lattes au dessus du wish ont toutes &eacute;t&eacute; remont&eacute;es pour un meilleur contr&ocirc;le du haut de voile dans le vent, et le rond de guindant a &eacute;t&eacute; diminu&eacute; pour favoriser l\'ouverture de la chute.&nbsp;</p>
</div>
</div>
</div>
<h3>Pr&eacute;sentation d&eacute;taill&eacute;e en photo</h3>
<p>Voici quelques photos illustrant les diff&eacute;rences entre la voile IQFoil, et le mod&egrave;le Hyperglide 2 (sur toutes les photos qui suivent, le mod&egrave;le olympique est pos&eacute;e sur le mod&egrave;le foil classique)</p>
<p>La bordure plus r&eacute;duite</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/severne-hyperglide-olympic-vs-hg2-1.jpg" alt="Severne IQFOIL Olympic Sail" /></p>
<p>La largeur au wish un poil plus importante</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/severne-hyperglide-olympic-vs-hg2-2.jpg" alt="Severne IQFOIL Olympic Sail" /></p>
<p>la tete de voile un peu plus haute</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/severne-hyperglide-olympic-vs-hg2-3.jpg" alt="Severne IQFOIL Olympic Sail" /></p>
<p>Le d&eacute;calage des lattes vers le heut, avec une fen&ecirc;tre centrale plus grande, mais des espaces entre lattes plus faibles dans le haut de la voile</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/severne-hyperglide-olympic-vs-hg2-4.jpg" alt="Severne IQFOIL Olympic Sail" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/severne-hyperglide-olympic-vs-hg2-5.jpg" alt="Severne IQFOIL Olympic Sail" /></p>
<p>Le panneau de t&ecirc;te plus petit sur le mod&egrave;le olympique</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/severne-hyperglide-olympic-vs-hg2-6.jpg" alt="Severne IQFOIL Olympic Sail" /></p>
<p>A partir de ce premier jet que nous avons en main (et qui est encore un prototype proche de la s&eacute;rie finale), il est fort &agrave; parier que, comme &ccedil;a a &eacute;t&eacute; le cas avec la voile RSX &agrave; l\'&eacute;poque, on voit rapidement arriver des versions plus renforc&eacute;es, compte tenu de l\'utilisation ultra-intensive qui va entre &ecirc;tre faite par les athl&egrave;tes olympiques. Je pr&eacute;cise que le prototype dont vous voyez ici les photos poss&egrave;de les m&ecirc;mes grammages et renforts que l\'Hyperglide 2. On est donc sur un mod&egrave;le assez l&eacute;ger (l\'un des gros points forts de l\'HG2).</p>',
    'year' => 2020,
    'price' => '930.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u39929s1-starboard-iqfoil-hyperglide-olympic-sail-starboard-2020.html',
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 1833,
    'last_ip' => NULL,
    'created_at' => '2020-05-03 12:45:33',
    'updated_at' => '2022-03-20 20:52:43',
),
126 => 
array (
    'id' => 146,
    'name' => 'Magic Carpet',
    'slug' => 'tabou-magic-carpet-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 104,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2020-06/mc.jpg" alt="Magic carpet tabou" /></div>
<div class="col-lg">
<p>Il est toujours compliquer de vouloir courrir plusieurs li&egrave;vres &agrave; la fois, et de le faire correctement. Apr&egrave;s Zeeko et sa AirWave, c\'est au tour de Tabou de s\'atteler &agrave; ce difficile exercice : proposer une planche de Windfoil freeride qui puisse aussi &ecirc;tre utilis&eacute; en Wing. Son principal argument : une accessibilit&eacute; garantie par une largeur g&eacute;n&eacute;reuse.&nbsp;</p>
<p>De par sa conception, elle s\'adressera en priorit&eacute; aux amateurs de jouet bien maniable. Avec ses multiples position de staps, elle permettra beaucoup d\'options, y compris une utilsation strapless tr&egrave;s appropri&eacute;e. On l\'associera bien entendu en priorit&eacute; avec un foil freeride comme le Mach 1 pour l\'utilisation en mode Windfoil.&nbsp;</p>
<a href="/reviews/94"><img class="img-fluid" src="/storage/photos/1/2020-06/mc2.jpg" alt="magic" /></a></div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg">
<p>Avec ce mod&egrave;le tr&egrave;s polyvalent, Tabou joue &eacute;galement clairement le jeu de l\'accessibilit&eacute; en proposant une 120L (pour rappel, la Airwave fait 106L) pour les gros gabarits ou les pratiquants moins s&ucirc;r d\'eux, et une 110L pour les adeptes de la maniabilit&eacute; et de la compacit&eacute;.</p>
<p>Passons en revue les d&eacute;tails de ce shape tr&egrave;s innovant :</p>
<p>L\'outline de la planche est tr&egrave;s compact, tout en gardant une largeur g&eacute;n&eacute;reuse pour pr&eacute;server l\'accessibilit&eacute;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6727.jpg" alt="Tabou Magic Carpet Windfoil wingfoil" /></p>
<p>Pour l\'utilisation windfoil, ou les pratiquants avanc&eacute;s en wing, de tr&egrave;s nombreux inserts de straps permettent de choisir &agrave; loisir sa configuration : un excellent point pour accompagner r&eacute;ellement la polyvalence du shape.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6729.jpg" alt="Tabou Magic Carpet Windfoil wingfoil" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6731.jpg" alt="Tabou Magic Carpet Windfoil wingfoil" /></p>
<p>Le pads int&eacute;gral offre un excellent appui y compris en strapless. Comme sur une board de surf, un kit tail permet de trouver ses appuis sans les chercher du regard en Wing.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6732.jpg" alt="Tabou Magic Carpet Windfoil wingfoil" /></p>
<p>Bien &eacute;videmment, le tapis volant propose 2 syst&egrave;me de fixation de foil : un DTT pour le windfoil, et un double rail US pour le Wing. Ceci est indispensable pour permettre un centrage correct des appuis, qui sont assez diff&eacute;rents dans les 2 disciplines. Vous remarquerez &eacute;galement une poign&eacute;e de portage tr&egrave;s ergonomique et tr&egrave;s pratique pour la mise &agrave; l\'eau du mat&eacute;riel sans risque de blessure. C\'est particuli&egrave;rement important en wing, o&ugrave; on va potentiellement se mettre &agrave; l\'eau dans les vagues, et ou il faut absolument que le matos ne vous &eacute;chappe pas des mains sous peine de coupure.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6733.jpg" alt="Tabou Magic Carpet Windfoil wingfoil" /></p>
<p>Comme on peut le voir sur cette derni&egrave;re photo, Fabien a fait un gros travail sur les formes de rails et le d&eacute;croch&eacute; arri&egrave;re pour offrir &agrave; la fois des touchettes douces, et un take off facile. Le volume g&eacute;n&eacute;reux du tail offre aussi beaucoup de s&eacute;curit&eacute; lors des manoeuvres.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6734.jpg" alt="Tabou Magic Carpet Windfoil wingfoil" /></p>
</div>
</div>
</div>',
    'year' => 2020,
    'price' => '1499.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u41093s1-tabou-magic-carpet-tabou-2020.html',
    'programme_start' => 0.0,
    'programme_end' => 3.0,
    'views' => 4671,
    'last_ip' => NULL,
    'created_at' => '2020-06-23 20:14:49',
    'updated_at' => '2022-03-20 20:52:43',
),
127 => 
array (
    'id' => 147,
    'name' => 'A1 RACE',
    'slug' => 'alpinefoil-a1-race-2020',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 8,
    'status' => 'Published',
    'body' => '<div class="multi-col-2">
<div>Pour 2020, AlpineFoil nous propose 2 nouvelles d&eacute;clinaisons de son windfoil carbone A1 : le "Sport" et le "Race". Ces 2 nouveaux mod&egrave;les sont bas&eacute;s sur un mat de 97cm, notablement optimis&eacute; pour la glisse avec avec un profil plus fin (13.9mm en t&ecirc;te contre 16mm) que sur le A1 original.</div>
<div>
<p>Sur ces 2 mod&egrave;les, l\'&eacute;chantillonnage a &eacute;t&eacute; revu par rapport au A1 avec, notemment, des quantit&eacute;s de carbone haut module (M40J et autres) bien plus importantes. Ceci a pour objectif de compenser la plus faible &eacute;paisseur, et la plus grande longueur de mat, pour conserver une raideur optimale. Les 2 mod&egrave;les sont d&eacute;sormais livr&eacute;s en standard avec l\'aile Regata 850.</p>
<p>Le mod&egrave;le Race, destin&eacute; aux experts, est g&eacute;om&eacute;triquement identique, mais profite d\'un mat beaoucoup plus raide pour plus de contr&ocirc;le dans le vent, y compris avec les planches larges et les plus grands fuselages.</p>
</div>
</div>',
    'year' => 2021,
    'price' => '2499.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40224s1-alpinefoil-a1-race-carbone-alpinefoil-2020.html',
    'programme_start' => 8.0,
    'programme_end' => 10.0,
    'views' => 3323,
    'last_ip' => '88.163.167.153',
    'created_at' => '2020-06-25 09:57:32',
    'updated_at' => '2022-04-08 23:17:57',
),
128 => 
array (
    'id' => 148,
    'name' => 'Freefoil 115 Pro Edition',
    'slug' => 'jp-australia-freefoil-115-pro-edition-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 56,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/jp-freefoil.png" alt="JP freefoil LXT" width="549" height="549"></div>
<div class="col-9">
<p>Apr&egrave;s le coup de ma&icirc;tre d\'Exocet avec ses Freefoil 112 et 135, c\'est au tour de JP de propsoer 2 flotteurs de foil freeride. Pour leur donner un nom, JP a fait dans l\'originalit&eacute; &nbsp;: Freefoil !!&nbsp;</p>
</div>
</div>
</div>',
    'year' => 2020,
    'price' => '2199.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40581s1-jp-australia-freefoil-pro-edition-jp-australia-2020.html',
    'programme_start' => 0.0,
    'programme_end' => 3.0,
    'views' => 2250,
    'last_ip' => '88.163.167.153',
    'created_at' => '2020-07-16 20:03:06',
    'updated_at' => '2022-04-08 23:00:05',
),
129 => 
array (
    'id' => 149,
    'name' => 'FOIL COMP 91 AI',
    'slug' => 'patrick-foil-comp-91-ai-2020',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 77,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2020-07/patrick-foil-comp-ai.jpg" alt="Foil Comp Airinside"></div>
<div class="col-lg-8">
<p>Patrick Diethelm propose une particularit&eacute; unique dans le monde du Windsurf avec sa gamme de flotteur en construction AirInside. Dit autremement, les flotteurs ne sont pas construits autour d\'un pain de polystyr&egrave;ne, mais d\'une structure creuse en sandwich Nid d\'Abeille. La mise au point et la fiabilisation de ce proc&eacute;d&eacute; a pris plus de 4 ans, mais la marque est d&eacute;sormais en mesure de proposer un produit fiable et extr&ecirc;mement &eacute;volu&eacute;. Son pluys : une rigidit&eacute; et des r&eacute;partitions de poids qui offre un confort et une pr&eacute;cision de conduire in&eacute;gal&eacute;es.</p>
<p>La FoilComp AI est le flotteur de foil course de la gamme Patrick construit en technologie AirInside.</p>
</div>
</div>
</div>',
    'year' => 2020,
    'price' => '3399.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 2520,
    'last_ip' => '88.163.167.153',
    'created_at' => '2020-08-01 08:25:08',
    'updated_at' => '2022-04-08 22:56:17',
),
130 => 
array (
    'id' => 150,
    'name' => 'FOIL RIDE 145',
    'slug' => 'patrick-foil-ride-145-2021',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 77,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/u41361s1.png" alt="Patrik Foilride 2021" width="512" height="512"></div>
<div class="col-9">
<p>Avec cette Foil Ride 145, Patrick signe son premier flotteur foil hors programme Race PWA ou Formula. Comme on ne se refait pas, l\'ADN du comp&eacute;titeur transpire quand m&ecirc;me nettement sur ce shape tr&egrave;s orient&eacute; performance.&nbsp;</p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '2099.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u41361s1-patrick-foil-ride-patrick-2021.html',
    'programme_start' => 5.0,
    'programme_end' => 8.0,
    'views' => 5742,
    'last_ip' => '83.197.163.54',
    'created_at' => '2020-08-14 12:24:48',
    'updated_at' => '2022-04-09 09:14:09',
),
131 => 
array (
    'id' => 152,
    'name' => 'Phantom Proto 2',
    'slug' => 'ga-phantom-proto-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 42,
    'status' => 'Hidden',
    'body' => '<p>s</p>',
    'year' => 2021,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => NULL,
    'programme_end' => NULL,
    'views' => 5,
    'last_ip' => NULL,
    'created_at' => '2020-09-15 15:28:33',
    'updated_at' => '2020-09-15 15:32:38',
),
132 => 
array (
    'id' => 153,
    'name' => 'Phantom Présérie',
    'slug' => 'ga-phantom-preserie-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 42,
    'status' => 'Hidden',
    'body' => '<p>j</p>',
    'year' => 2021,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => NULL,
    'programme_end' => NULL,
    'views' => 1,
    'last_ip' => NULL,
    'created_at' => '2020-09-15 15:30:33',
    'updated_at' => '2020-09-15 15:30:33',
),
133 => 
array (
    'id' => 154,
'name' => 'Phantom Proto 1 (marek)',
    'slug' => 'ga-phantom-proto-1-marek-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 42,
    'status' => 'Hidden',
    'body' => '<p>j</p>',
    'year' => 2021,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => NULL,
    'programme_end' => NULL,
    'views' => 3,
    'last_ip' => NULL,
    'created_at' => '2020-09-15 15:32:25',
    'updated_at' => '2020-09-15 15:33:18',
),
134 => 
array (
    'id' => 157,
    'name' => 'SLALOM FOIL 91 CARBON REFLEX',
    'slug' => 'starboard-slalom-foil-91-carbon-reflex-2021',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 100,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2020-09/SlalomFoil91-800.jpg" alt="Starboard Foil Slalom" /></div>
<div class="col-lg">
<p>Je ne trahirai pas un grand secret en vous disant que le foil fait d&eacute;sormais partie du programme PWA, non plus en tant que discipline &agrave; part, mais en tant qu\'option lorsque chaque participant consid&egrave;re que ce mode de navigation lui correspond mieux compte tenu des conditions. La cons&eacute;quence, c\'est que le foil sera d&eacute;sormais utilis&eacute; exclusivement sur des parcours de slalom, donc sur des allures travers. En perdant la n&eacute;cessit&eacute; de g&eacute;n&eacute;rer un maximum de puissance pour remonter au vent, le design des flotteurs &eacute;volue naturellement, et chaque marque va donc propose des flotteurs adapt&eacute;s.</p>
<p>La flotteurs Starboard Slalom Foil 91 est donc un mod&egrave;le d&eacute;di&eacute; au foil slalom, sur le mod&egrave;le de 91cm de large qui est le plus grosse de la gamme. Sa particularit&eacute;s, c\'est une car&egrave;ne pinc&eacute;e, alors que l\'outline c&ocirc;t&eacute; pont est pratiquement carr&eacute; &agrave; l\'arri&egrave;re. Pour cette gamme, on a &eacute;videmment une constuction Reflex Carbone ... &nbsp;la plus haut de gamme (florreur de course oblige).</p>
<p>Dispo &agrave; a vente au shop avant la fin 2020</p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '2899.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38908s1-starboard-foil-slalom-carbon-reflex-starboard-2021.html',
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 3258,
    'last_ip' => NULL,
    'created_at' => '2020-09-24 12:27:12',
    'updated_at' => '2022-03-20 20:52:43',
),
135 => 
array (
    'id' => 159,
    'name' => 'FOILRIDE 105 & 125',
    'slug' => 'patrick-foilride-105-125-2021',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 77,
    'status' => 'Published',
    'body' => '<p>Dans la s&eacute;rie mini-race, voici les FoilRide 105 et 125 ... des mod&egrave;les r&eacute;duits de la FoilRide 145 &agrave; tous les niveau. De spetits bijoux pour amateurs de foil en petite voile.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/811D3FF5-EF9B-40D5-B870-E82E1E2AB22E.jpg" alt="FoilRide 125" /></p>',
    'year' => 2021,
    'price' => '2099.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u41361s1-patrick-foil-ride-patrick-2021.html',
    'programme_start' => 2.0,
    'programme_end' => 6.0,
    'views' => 2689,
    'last_ip' => '62.195.144.105',
    'created_at' => '2020-10-15 11:35:08',
    'updated_at' => '2022-04-10 17:03:23',
),
136 => 
array (
    'id' => 160,
    'name' => 'E-FOIL CRUISING',
    'slug' => 'takuma-e-foil-cruising-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 123,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2020-09/board-trois-quart-red.png" alt="Takuma E foil cruising" width="1078" height="767" /></div>
<div class="col-lg">
<p>L&rsquo;Efoil cruising est l&rsquo;Efoil parfait pour les d&eacute;butants comme pour les experts. Ce produit a &eacute;t&eacute; pens&eacute; pour que le plus grand nombre puisse pratiquer tr&egrave;s facilement. Avec son design innovant et sa taille adapt&eacute;e &agrave; tous les gabarits, il est tr&egrave;s simple &agrave; utiliser et permet d&rsquo;acqu&eacute;rir d&egrave;s la premi&egrave;re fois de super sensations de glisse. D&eacute;butants ou experts, amateurs de glisse ou vacanciers d&rsquo;&eacute;t&eacute;, si vous avez d&eacute;j&agrave; r&ecirc;v&eacute; de voler au-dessus de l&rsquo;eau, c&rsquo;est l&rsquo;Efoil qu&rsquo;il vous faut. Le Efoil cruising est modulable : vous avez la possibilit&eacute; de changer l&rsquo;aile avant du foil. Selon les conditions et votre niveau, le changement d&rsquo;aile pourra rendre le produit plus technique et efficace. L&rsquo;aile avant de 1900cm2 &nbsp;offre une stabilit&eacute; excellente et une portance parfaitement adapt&eacute;e aux d&eacute;butants et aux gabarits les plus lourds. Ce foil a &eacute;t&eacute; con&ccedil;u pour une utilisation en eau calme. (L&rsquo;aile 1900 n&rsquo;est pas adapt&eacute;e dans les vagues, sa portance serait alors trop importante.) L&rsquo;aile avant de 1600cm2 &nbsp;est plus petite ce qui la rend plus fun et plus r&eacute;active mais aussi plus stable et facile &agrave; manier dans la houle.</p>
<p>En bref:</p>
<ul>
<li>Un produit facile d&rsquo;utilisation et accessible &agrave; tous (m&ecirc;me sans aucune exp&eacute;rience en sports nautique)</li>
<li>Un design de planche unique avec un volume et une forme adapt&eacute;s aux d&eacute;butants et aux confirm&eacute;s</li>
<li>Une planche et un foil tr&egrave;s stables</li>
<li>Une t&eacute;l&eacute;commande ultra intuitive &nbsp;&nbsp;</li>
</ul>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '6799.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 1.0,
    'programme_end' => 3.0,
    'views' => 2297,
    'last_ip' => NULL,
    'created_at' => '2020-11-11 19:26:42',
    'updated_at' => '2022-03-20 20:52:43',
),
137 => 
array (
    'id' => 161,
    'name' => 'COMPACT FOIL 83',
    'slug' => 'ahd-compact-foil-83-2021',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 5,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2020-09/ahd-compact-foil.jpg" alt="AHD Compact foil"></div>
<div class="col-lg-8">Le flotteur AHD COMPACT FOIL est d&eacute;di&eacute; &agrave; la pratique du&nbsp;Windfoil. Il permet un &eacute;ventail tr&egrave;s large de pratiques :&nbsp; Freeride, Slalom ou Race.
<p>Notre processus de fabrication est unique ! Toutes les couches de tissu, renforts et boitiers sont appliqu&eacute;s et cuits dans un moule ferm&eacute; (pont/car&egrave;ne). Cette technique garantit une reproduction parfaite du prototype valid&eacute; lors des tests et un rapport poids/flexcontrol/solidit&eacute; optimal. Les r&eacute;sines epoxy utilis&eacute;es pour la construction de nos planches de windsurf sont bio-sourc&eacute;es SR GreenPoxy.</p>
<p>La&nbsp; AHD COMPACT FOIL utilise une construction sandwich PVC/Carbon.</p>
<p>#1 | OUTLINE COMPACT EQUILIBR&Eacute;<br>Encombrement minimal en vol, regroupement des forces vers le foil. <br>#2 | R&Eacute;PARTITION HOMOG&Egrave;NE DU VOLUME <br>#3 | RAILS DROITS L&Eacute;G&Egrave;REMENT RENTRANTS <br>Rebond instantan&eacute; du flotteur au contact de l&rsquo;eau. <br>#4 | WIDE RACE DECK<br>Plan de pont &eacute;largi pour excentrer les appuis et augmenter le couple de rappel du rider. <br>#5 | RAIL DE PDM LONG<br>R&eacute;glages de positions multiples pour s&rsquo;adapter &agrave; toutes les disciplines et toutes les surfaces de voiles. <br>#6 | POSITIONS MULTIPLES DE FOOTSTRAPS <br>S&rsquo;adapte &agrave; tous les styles et gabarits de riders.</p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '1490.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 5.0,
    'programme_end' => 7.0,
    'views' => 6284,
    'last_ip' => '66.249.70.42',
    'created_at' => '2020-11-21 20:24:50',
    'updated_at' => '2022-04-09 13:46:31',
),
138 => 
array (
    'id' => 162,
    'name' => 'IRIS X MKII',
    'slug' => 'phantom-iris-x-mkii-2021',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 78,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-mk2.jpg" alt="iris x mkII"></div>
<div class="col-lg-8">
<p>Entre les gammes IRIS Z (d&eacute;di&eacute;e foil freeride) et IRIS RF (foil course), la gamme IRIS X propose une approche dite free-race qui correspond &agrave; la pratique du plus grand nombre. Au programme de la facilit&eacute; d\'acc&egrave;s mais pour autant des performances au puming, en vitesse et en puissance assez proche du mod&egrave;le de course. Cette version MKII remplace la V1 avec une refonte des surfaces (5,6,7, et 8m2), et une nette am&eacute;lioration du ratio l&eacute;g&egrave;ret&eacute; / puissance</p>
<p>Avec son design 6 lettes / 3 cam / 2 lattes carbone, le profil est suffisament tenu pour permettre profiter d\'une plage d\'utilisation aswsez large, tout en apportant tout ce que l\'on attend d\'une voile d&eacute;di&eacute;e au foil : une stabilisation du foil et du flotteur en vol.&nbsp;</p>
<p>Ces voiles sont con&ccedil;ues pour &ecirc;tre utilis&eacute;es sur des mats constant flex. Nos tests ont montr&eacute;s une parfaite compatibilit&eacute; avec les mats Duotone.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-range.jpg" alt="iris x mkII"></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-spec.jpg" alt="iris x mkII"></p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 5.0,
    'programme_end' => 8.0,
    'views' => 4068,
    'last_ip' => '88.163.167.153',
    'created_at' => '2020-12-13 11:23:37',
    'updated_at' => '2022-04-08 23:30:13',
),
139 => 
array (
    'id' => 163,
    'name' => 'IQ 95 MAST, Ailes Slalom, Fuselage 105',
    'slug' => 'starboard-nouvelles-pieces-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 100,
    'status' => 'Published',
    'body' => '<p>Fid&egrave;le &agrave; son sch&eacute;ma, pas de nouveau foil &agrave; part enti&egrave;re chez Starboard pour 2021, mais des nouvelles pi&egrave;ces qui permettent de faire &eacute;voluer les foils existants. On applaudit des 2 mains car cette solution permet d&rsquo;&eacute;viter une obsolescence de votre investissement.</p>
<p>Pour 2021, Starboard propose 3 nouveaux stabilisateurs, 2 ailes, 1 fuselage et 1 mat. Les mesures donn&eacute;es ci apr&egrave;s concerne le nouveau mat IQ 95 disponible en option &agrave; partir de Fevrier 2021.</p>',
    'year' => 2021,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 6.0,
    'programme_end' => 10.0,
    'views' => 3359,
    'last_ip' => NULL,
    'created_at' => '2020-12-17 20:17:52',
    'updated_at' => '2022-03-20 20:52:43',
),
140 => 
array (
    'id' => 164,
    'name' => 'WIND 95 V2',
    'slug' => 'afs-wind-95-v2-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 3,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2020-12/afs95.jpg" alt="AFS WIND 95" width="1000" height="1152"></div>
<div class="col-lg-8">La nouvelle version de l\'AFS 95 marque une vraie &eacute;volution de ce mod&egrave;le phare chez AFS. Au programme&nbsp;
<ul>
<li>Un nouvau mat plus fin et plus &eacute;troit en corde</li>
<li>un nouveau fuselage plus long et plus raide</li>
<li>des nouveaux inserts pour les fixations ailes et stab</li>
</ul>
<p>Le d&eacute;veloppement de cette nouvelle version a &eacute;t&eacute; boost&eacute; par la demande propre de la FFV concernant la labellisation des foils U15 / U17. L\'objectif &eacute;tait de proposer un foil &agrave; la fois performant sur des allures vari&eacute;es, facile &agrave; contr&ocirc;ler dans toutes les conditions, et robuste pour offrir un investissement p&eacute;renne aux clubs et aux jeunes coureurs.&nbsp;</p>
<p>Le mat &agrave; corde &eacute;troite doit apporter plus de glisse, il est &eacute;galement plus fin mais presque aussi raide que les versions pr&eacute;c&eacute;dentes afin de garantir un contr&ocirc;le optimal dans le vent et la mer. Le nouveau fuselage doit permettre de meilleures aptitudes au cap. La nouvelle construction et les nouveaux inserts doivent permettre d\'utiliser sans risque de casse les nouvelles ailes &agrave; grand allongement.&nbsp;</p>
<p>Pour 2022, le fuslage devient d&eacute;montable, et 2 nouvelles ailes orient&eacute;es glisse voient le jour.</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '2200.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34768s1-afs-afs-wind-95-afs-2021.html',
    'programme_start' => 5.0,
    'programme_end' => 8.0,
    'views' => 4257,
    'last_ip' => '86.215.170.49',
    'created_at' => '2020-12-18 17:43:00',
    'updated_at' => '2022-04-10 19:31:09',
),
141 => 
array (
    'id' => 168,
    'name' => 'SLALOM RACE EURO',
    'slug' => 'f4-race-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 35,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="img-fluid" src="/storage/photos/1/2021-01/race_foil_115.jpg" alt=""></div>
<div class="col-9">Pour 2021, F4 propose une nouvelle gamme avec des changements subtentiels. Ces changements sont li&eacute;s &agrave; 2 &eacute;l&eacute;ments :
<ul>
<li class="col-lg">un d&eacute;placement de la production en Asie, pour pouvoir passer &agrave; une production industrielle et permettre un d&eacute;veloppement du volume de ventes</li>
<li class="col-lg">une volont&eacute; d\'offrir &agrave; la fois plus de polyvalence multi-segment (Wing &amp; Winf) et plus de fiabilit&eacute; (fixation des ailes, jonction mat / fuselage, assise stab).</li>
</ul>
<p>Cette &eacute;volution des gammes est la face cach&eacute;e de l\'iceberg. En effet, pour accompagner un d&eacute;veloppement international, la soci&eacute;t&eacute; F4 vient d\'op&eacute;rer une grosse lev&eacute;e de fond, et met en place une vraie structure de distribution, &agrave; la fois aux USA et en Europe. Le team de d&eacute;veloppement se structure &eacute;galement autour de plusieurs pilliers du foil en France.&nbsp;</p>
<p>Tout ceci constitue un vrai tournant dans l\'histroire de cette marque qui &eacute;tait jusqu\'ici artisanale. De notre c&ocirc;t&eacute;, nous connaissions le c&ocirc;t&eacute; assez exceptionnel du design des foils F4 (notre r&eacute;f&eacute;rence de test depuis 2 ans), mais des produits &eacute;taient difficiles &agrave; vendre &agrave; cause d\'une administration commerciale inadapt&eacute;e. Cette nouvelle structure change la donne, et nous allons d&eacute;sormais int&eacute;grer la marque dans notre s&eacute;lection. On nous annonce enfin une probable relocalisation de la production en Europe &agrave; moyen terme, et c\'est aussi une excellente nouvelle.</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '3050.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 5.0,
    'programme_end' => 10.0,
    'views' => 6949,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-01-10 15:05:27',
    'updated_at' => '2022-04-08 22:39:03',
),
142 => 
array (
    'id' => 172,
    'name' => 'SLALOM FOIL 81 CARBON REFLEX',
    'slug' => 'starboard-slalom-foil-81-carbon-reflex-2021',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 100,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-01/starboard-foil-slalom.jpg" alt="Starboard Foil Slalom"></div>
<div class="col-lg-8">
<p>Je ne trahirai pas un grand secret en vous disant que le foil fait d&eacute;sormais partie du programme PWA, non plus en tant que discipline &agrave; part, mais en tant qu\'option lorsque chaque participant consid&egrave;re que ce mode de navigation lui correspond mieux compte tenu des conditions. La cons&eacute;quence, c\'est que le foil sera d&eacute;sormais utilis&eacute; exclusivement sur des parcours de slalom, donc sur des allures travers. En perdant la n&eacute;cessit&eacute; de g&eacute;n&eacute;rer un maximum de puissance pour remonter au vent, le design des flotteurs &eacute;volue naturellement, et chaque marque va donc propose des flotteurs adapt&eacute;s.</p>
<p>Le flotteur Starboard Slalom Foil 81 est donc un mod&egrave;le d&eacute;di&eacute; au foil slalom. Sa particularit&eacute;, c\'est une car&egrave;ne pinc&eacute;e, alors que l\'outline c&ocirc;t&eacute; pont est pratiquement carr&eacute; &agrave; l\'arri&egrave;re. Pour cette gamme, on a &eacute;videmment une constuction Reflex Carbone ... &nbsp;la plus haut de gamme (flotteur de course oblige).</p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '2899.00',
    'link_test' => 'https://marseille.glissattitude.com/windfoil/u38908s1-starboard-foil-slalom-carbon-reflex-starboard-2021.html',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 6.0,
    'programme_end' => 8.0,
    'views' => 2434,
    'last_ip' => '83.197.129.8',
    'created_at' => '2021-02-07 22:14:37',
    'updated_at' => '2022-04-09 08:40:13',
),
143 => 
array (
    'id' => 177,
    'name' => 'LK1 PERFORMANCE',
    'slug' => 'lokefoil-lk1-performance-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 60,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/lk1.png" alt="LK1" width="500" height="500"></div>
<div class="col-9">
<p>Le LK1 2020 a &eacute;t&eacute; con&ccedil;u pour &ecirc;tre tr&egrave;s accessible &agrave; tout niveaux mais aussi performant dans toutes les conditions.</p>
<p>Toujours fabriqu&eacute; exclusivement en France dans nos ateliers, &agrave; Saint-Malo.</p>
<p>Le jeu d&rsquo;ailes complet s&rsquo;adapte &agrave; toutes les conditions, tous les programmes (freeride, up-wind/down-wind, slalom&hellip;) et tous les gabarits.</p>
<p>Le mod&egrave;le pr&eacute;sent&eacute; ici comporte un mat UHM, et une aile performance.&nbsp;</p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '2200.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34705s1-loke-foil-windfoil-lk1-loke-foil-2019.html',
    'programme_start' => 0.0,
    'programme_end' => 4.0,
    'views' => 2589,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-03-07 20:09:52',
    'updated_at' => '2022-04-08 22:36:48',
),
144 => 
array (
    'id' => 178,
    'name' => 'HRDROFOIL SLALOM PRO',
    'slug' => 'jp-australia-hrdrofoil-slalom-pro-2021',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 56,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-02/JP_Australia-HydroFoil_SL_PRO-2021-deck.png" alt="JP Foil Slalom"></div>
<div class="col-lg-8">
<p>Pour 2020, la PWA a fusionn&eacute; le slalom et le foil en un seul et m&ecirc;me format de course. Quels que soient les vents faibles, nous allons assister &agrave; encore plus de courses et de sensations fortes &agrave; chaque &eacute;v&eacute;nement ! Fini le temps o&ugrave; les coureurs &eacute;taient assis sur la plage &agrave; cause des manches annul&eacute;es. Vent insuffisant ? Oubliez cela : La nouvelle limite de vent PWA pour le slalom sera de 5 n&oelig;uds ! Ainsi, l\'action sera garantie !</p>
<p>Pour cette nouvelle discipline de slalom, JP a d&eacute;velopp&eacute; une planche sp&eacute;cialis&eacute;e et en plus, une planche de foil de course d&eacute;di&eacute;e.</p>
<h3>Caract&eacute;ristiques g&eacute;n&eacute;rales</h3>
<ul>
<li>La cl&eacute; est la nouvelle forme du rail ! Tout d\'abord, elle pr&eacute;sente des rails nettement plus carr&eacute;s sur toute la car&egrave;ne pour une efficacit&eacute; maximale lors des touchettes.&nbsp;Ensuite, ils offrent une position parfaite, une sensation de connexion et de stabilit&eacute; &agrave; la planche : C\'est la base pour utiliser toute la puissance provenant du foil et de la voile.</li>
<li>Ses dimensions compactes permettent de r&eacute;duire l\'inertie.</li>
<li>Le profil a&eacute;rodynamique de la car&egrave;ne r&eacute;duit la tra&icirc;n&eacute;e en vol.</li>
<li>De nouveaux cuts permettent au rider d\'exploiter la glisse tout en pompant et en chargeant le foil, ce qui autorise un d&eacute;collage facile et instantan&eacute;.</li>
<li>Elle est &eacute;quip&eacute;e d\'un boirier renforc&eacute; pour g&eacute;rer toutes les charges et un cale-pied central suppl&eacute;mentaire avec une arche pour offrir une adh&eacute;rence suppl&eacute;mentaire et un placement de pied guid&eacute; pendant l\'empannage et le d&eacute;collage.</li>
<li>Cette planche est &eacute;quip&eacute;e de 6 barettes d\'insert de straps longs pour une r&eacute;glage optimal</li>
</ul>
<h3>SLALOM EN FOIL</h3>
<p>Cette nouvelle planche est bas&eacute;e sur la conception r&eacute;ussie de l\'HydroFoil 150 - et non de la 175 comme on pourrait s\'y attendre simplement parce que son but est le slalom et non la course racing.&nbsp;Par cons&eacute;quent, elle a un outline arrondi, contrairement &agrave; l\'aspect carr&eacute; de la 175 de 2019.</p>
<p>De toute &eacute;vidence, sa forme a &eacute;t&eacute; adapt&eacute;e au nouveau format de slalom et &agrave; la limite inf&eacute;rieure de vent, ainsi qu\'aux grands foils efficaces d\'aujourd\'hui. Ce sera non seulement l\'arme de choix du coureur PWA, mais aussi une planche &agrave; voile l&eacute;g&egrave;re &eacute;tonnante pour tout navigateur sportif au foil.</p>
<ul>
<li>Le volume global &eacute;lev&eacute; de 176 L - surtout &agrave; l\'arri&egrave;re - et les rails plus tranchants permettent aux coureurs de s\'envoler plus rapidement et plus facilement. Ils repoussent instantan&eacute;ment la planche sur le foil apr&egrave;s des touchdowns occasionnels au cours desquels ils ralentissent &agrave; peine.</li>
<li>Le profil et la position de la planche sont adapt&eacute;s aux vitesses de pointe plus &eacute;lev&eacute;es (maintenant qu\'il ne s\'agit plus de simples parcours up &amp; down). Par rapport &agrave; la 150, cette nouvelle planche est plus large au niveau du nez et de l\'arri&egrave;re, mais la largeur maximale est toujours de 91 cm. En cons&eacute;quence, les footstraps sont plus &agrave; l\'ext&eacute;rieur. Tout cela permet de contr&ocirc;ler la portance du foil &agrave; un rythme plus rapide.</li>
</ul>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '2899.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u42641s1-jp-australia-hydrofoil-racing-slalom-jp-australia-2021.html',
    'programme_start' => 7.0,
    'programme_end' => 9.0,
    'views' => 2346,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-03-11 12:44:25',
    'updated_at' => '2022-04-08 22:46:02',
),
145 => 
array (
    'id' => 180,
    'name' => 'FLIGHT FR',
    'slug' => 'neilpryde-flight-fr-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 69,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/foil-neilpryde-flight-fr-2021.png" alt="" width="500" height="500"></div>
<div class="col-9">
<p>Le Flight FR est la derni&egrave;re &eacute;volution de la gamme de foil de freeride accessible et performante. Il est moins intimidant que les foils en carbone et offre toujours une vitesse exceptionnelle dans une large plage de vent.</p>
<p>Compatible avec les planches de freeride haute performance et les planches de foil sp&eacute;cialis&eacute;es, le FLIGHT FR offre non seulement une grande portance, stabilit&eacute; et contr&ocirc;le, mais il est aussi plus rapide que beaucoup d\'autres foils full carbon du march&eacute;.</p>
<p>Longueur du fuselage : 90cm</p>
<p>Ailes : envergure 80cm - 815cm2 /&nbsp;&nbsp;envergure 90cm = 1000cm2</p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '1199.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u42637s1-neil-pryde-flight-fr-sans-tete-neil-pryde-2021.html',
    'programme_start' => 4.0,
    'programme_end' => 7.0,
    'views' => 2877,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-05-15 12:38:14',
    'updated_at' => '2022-04-08 22:27:55',
),
146 => 
array (
    'id' => 181,
    'name' => 'Hyperglide 4',
    'slug' => 'severne-hyperglide-4-2021',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 95,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-07/severne-hyperglide-4.png" alt="Severne Hyperglide 4" width="700" height="1024" /></div>
<div class="col-lg">
<h2><strong>SEVERNE vous pr&eacute;sente la nouvelle version de la&nbsp;HYPERGLIDE.</strong></h2>
<p>Une voile pour le foil, sans concession con&ccedil;ue pour gagner.</p>
<p>Avec plus de 4 ans d\'exp&eacute;rience dans le design de voile d&eacute;di&eacute;e &agrave; la pratique du foil, la Hyperglide 4 a &eacute;t&eacute; &nbsp;d&eacute;velopp&eacute; avec <strong>Gonzalo Costa Hoeval (</strong>ARG-3) et <strong>Matteo Iachino</strong> (I-140) pour le nouveau format de course de la PWA 2021 o&ugrave; les foils s\'affronteront contre des des planches classiques &agrave; ailerons&nbsp;sur le parcours de slalom.</p>
<p><strong>L\'HyperGlide4</strong> est con&ccedil;ue pour naviguer &agrave; pleine puissance en foil, o&ugrave; la vitesse de pointe et la pr&eacute;cision du contr&ocirc;le font la diff&eacute;rence pour gagner.</p>
<p>Avec ce&nbsp;nouveau format de course, Severne peut concevoir des voiles plus rapides, plus besoin de faire des bords de pr&egrave;s. Les profils de voile sont devenus plus plats.&nbsp; Avec&nbsp; moins de pression sur la main arri&egrave;re, il sera plus facile de contr&ocirc;ler le gr&eacute;ement.</p>
<p>&nbsp;L\'ouverture de la chute dans sa partie m&eacute;diane r&eacute;duit la tra&icirc;n&eacute;e et offre une acc&eacute;l&eacute;ration.</p>
<p>Le contr&ocirc;le maximal est obtenu gr&acirc;ce &agrave; la stabilit&eacute; - moins il y a de mouvement dans le gr&eacute;ement, plus il est facile de maintenir l\'assiette du foil.</p>
<p>Un profil de voile allong&eacute;e combin&eacute; &agrave; un wish court, minimisent la distance que le creux&nbsp;peut parcourir vers l\'arri&egrave;re et garanti un contr&ocirc;le optimal en plage haute.</p>
<p>Une tension de voile&nbsp;&eacute;lev&eacute;e et un gr&eacute;ement&nbsp;&nbsp;rigide compos&eacute; de 7 lattes tubulaires et de 4 cambers XL verrouillent tout en place, cr&eacute;ant une voile&nbsp;de course tr&egrave;s efficace.</p>
<p><br />La r&eacute;duction du poids &nbsp;sur l\'HyperGlide4 que vous courez sur le gr&eacute;ement le plus l&eacute;ger - chaque fois que vous empannez, vous savez que vous le faites avec moins d\'effort que les autres.<br /><br /></p>
</div>
</div>
</div>',
    'year' => 2021,
    'price' => '1100.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38332s1-severn-hyperglide-4-severn-2021.html',
    'programme_start' => 7.0,
    'programme_end' => 10.0,
    'views' => 1510,
    'last_ip' => NULL,
    'created_at' => '2021-06-10 13:23:12',
    'updated_at' => '2022-03-20 20:52:43',
),
147 => 
array (
    'id' => 182,
    'name' => 'A1 RACE SL',
    'slug' => 'alpinefoil-a1-race-sl-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 8,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/windfoil-a1-sport-sl-850.png" alt="" width="600" height="600"></div>
<div class="col-9">
<p>L\'alpine Race SL est un foil compos&eacute; du mat Alpine A1 Race, avec une nouveau fuselage de 105, et les ailes de la s&eacute;rie regatta</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '2499.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 5.0,
    'programme_end' => 7.0,
    'views' => 1504,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-06-14 14:07:32',
    'updated_at' => '2022-04-08 22:22:29',
),
148 => 
array (
    'id' => 183,
    'name' => 'SLALOM RACE UHM',
    'slug' => 'zeeko-bullet-uhm-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 77,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-06/bullet-windfoil-v1.jpg" alt="Patrik UHM Foil"></div>
<div class="col-lg-8">
<p>Je vous laisse vour reporter &agrave; la description du <a href="/devices/foil/zeeko-bullet-v1-2020">Zeeko Bullet</a> pour les &eacute;l&eacute;ments g&eacute;n&eacute;raux. Nous pr&eacute;sentons ici la version dite M40J de ce mod&egrave;le ... du nom du type de fibres de carbone utilis&eacute;es dans la construction du mat.&nbsp;</p>
<p>L\'utilisation du carbone dit M40J en remplacement du carbone dit T700 conf&egrave;re une rigidit&eacute; en flexion et torsion sup&eacute;rieure de l\'ordre de 25%. En terme d\'utilisation, cela modifie profond&eacute;ment le comportement ressenti du foil, pour une glisse plus pr&eacute;cise et plus fluide. L\'influance sur les performances n\'est pas directe puisque le g&eacute;om&eacute;trie est indentique. Par contre, la raideur inlue directement sur le contr&ocirc;le du foil, et par cons&eacute;quent sur la notion de confiance que le pilote va avoir. Bien &eacute;videmment, en se sentant plus en ma&icirc;trise, on pre,d plus de plaisir, et on va g&eacute;n&eacute;ralement plus vite.</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '2499.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 5.0,
    'programme_end' => 8.0,
    'views' => 1435,
    'last_ip' => '66.249.70.46',
    'created_at' => '2021-06-15 10:13:12',
    'updated_at' => '2022-04-09 06:14:42',
),
149 => 
array (
    'id' => 184,
    'name' => 'FOIL+',
    'slug' => 'patrick-foil-2021',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 77,
    'status' => 'Published',
    'body' => '<p>Description</p>',
    'year' => 2021,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 945,
    'last_ip' => NULL,
    'created_at' => '2021-06-15 10:15:19',
    'updated_at' => '2022-03-20 20:52:43',
),
150 => 
array (
    'id' => 185,
    'name' => 'FREERIDE CARBONE',
    'slug' => 'f4-freeride-carbone-2021',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 35,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/F4_windsurf_1400_carbon_tuttle_freeride_1-595x595.png" alt="" width="595" height="595"></div>
<div class="col-9">
<p>Le F4 freeride, c\'est le foil de tous les jours. Optimis&eacute; pour le windfoil, ce foil d&eacute;colle t&ocirc;t et est incroyablement stable. &nbsp;Contraitrement &agrave; de nombreux autre foils de cette cat&eacute;gorie, il est assez rapide.</p>
<p>Con&ccedil;u pour les petites voiles et planches de freeride, il est &agrave; l\'aise &agrave; toutes les allures, au pr&egrave;s comme au portant. Le foil freeride windsurf est une plateforme stable et pr&eacute;visible con&ccedil;ue pour des balades agr&eacute;ables en contr&ocirc;le. Il est parfait pour l\'apprentissage et les foilers avanc&eacute;s. Cette configuration a d\'excellentes performances sur toute la plage de vent.</p>
<p>&laquo; C\'est l\'&eacute;quilibre parfait pour un d&eacute;collage facile et une grande stabilit&eacute;. Le meilleur combo pour le foiling d&eacute;contract&eacute;.&ldquo;</p>
<p>&ndash; Fernando Martinez</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '2115.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 1.0,
    'programme_end' => 4.0,
    'views' => 2008,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-08-01 00:00:00',
    'updated_at' => '2022-04-08 22:23:01',
),
151 => 
array (
    'id' => 189,
    'name' => 'FLY V2',
    'slug' => 'xo-sail-fly-2022',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 113,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-07/xo-fly.jpg" alt="Xo Sail Fly" width="831" height="1280" /></div>
<div class="col-lg">
<h2><strong>XO SAILS vous pr&eacute;sente la nouvelle version de la&nbsp;FLY.</strong></h2>
<p>Compl&egrave;tement revue par rapport &agrave; la version 2019, la fly 2022 n\'en a clairement gard&eacute; que le nom. Cette fois, on est sur une voile de windfoil d&eacute;velopp&eacute;e &agrave; part enti&egrave;re pour cette discipline, avec l\'objectif de se situer dans la tr&egrave;s convoit&eacute;e case Freerace.</p>
<p>Un gros travail a &eacute;t&eacute; men&eacute; pour offrir une plage d\'utilisation tr&egrave;s large, et &agrave; la fois une maniabilit&eacute; redoutable avec une rotation des cambers qui est un mod&egrave;le du genre.&nbsp;</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '705.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u44815s1-xo-sail-fly-xo-sail-2022.html',
    'programme_start' => 3.0,
    'programme_end' => 7.0,
    'views' => 2005,
    'last_ip' => NULL,
    'created_at' => '2021-10-14 11:10:48',
    'updated_at' => '2022-03-20 20:52:43',
),
152 => 
array (
    'id' => 190,
    'name' => 'IRIS R MKII 85',
    'slug' => 'phantom-iris-r-85-2022',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 78,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-10/iris-r-mk2.jpg" alt="IRIS R MKII"></div>
<div class="col-lg-6">
<p>Les IRIS R mk2 (91 &amp; 85 &amp; 78) sont con&ccedil;ues pour le format PWA Slalom foil et le speed.</p>
<p>La car&egrave;ne b&eacute;n&eacute;ficie de nouveaux cut-out qui am&eacute;liorent le d&eacute;marrage.</p>
<p>L\'a&eacute;ro a encore &eacute;t&eacute; optimis&eacute; pour r&eacute;duire le fardage et augmenter la stabilit&eacute; en vol.</p>
<p>Les planches sont un peu plus &eacute;paisses et le rail de pied de mat a &eacute;t&eacute; rabaiss&eacute; ce qui permet de retransmettre plus de puissance. La 85 r&eacute;pond &agrave; la nouvelle jauge U19 pour les jeunes.</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => '3049.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 8.0,
    'programme_end' => 10.0,
    'views' => 1781,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-11-05 15:30:12',
    'updated_at' => '2022-04-08 22:45:17',
),
153 => 
array (
    'id' => 191,
    'name' => 'GOLD FOIL',
    'slug' => 'xo-sail-gold-foil-2022',
    'user_id' => 1,
    'category_id' => 3,
    'brand_id' => 113,
    'status' => 'Published',
    'body' => '<p>La voile de course foil !</p>',
    'year' => 2022,
    'price' => '815.00',
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 9.0,
    'programme_end' => 10.0,
    'views' => 877,
    'last_ip' => NULL,
    'created_at' => '2021-11-06 17:57:20',
    'updated_at' => '2022-03-20 20:52:43',
),
154 => 
array (
    'id' => 192,
    'name' => 'STINGRAY LTD 130',
    'slug' => 'fanatic-stingray-ltd-2022',
    'user_id' => 1,
    'category_id' => 2,
    'brand_id' => 36,
    'status' => 'Published',
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_E6210.jpg" alt="Fanatic Stingray 130 LTD"></div>
<div class="col-9">
<p>La nouvelle Stingray LTD est disponible en deux tailles compactes de 115 et 130 litres et, pour la premi&egrave;re fois chez Fanatic, elle comble le foss&eacute; entre le wind foil et le wing foil. Vous r&ecirc;vez de naviguer en wing dans du vent l&eacute;ger et de basculer en windsurf si les conditions s&rsquo;am&eacute;liorent ou vice-versa en fonction de vos pr&eacute;f&eacute;rences : pas de probl&egrave;me, la Stingray Foil LTD est faite pour cela !</p>
<p>Compar&eacute;e &agrave; la Stingray HRS, le shape est encore plus compact et d&eacute;jauge encore plus t&ocirc;t et sans forcer. Gr&acirc;ce &agrave; son shape optimis&eacute; pour le foil, elle offre de grandes performances en freeride dans les deux disciplines. Elle se montre tr&egrave;s s&eacute;curisante, surtout pour les d&eacute;butants gr&acirc;ce &agrave; son large pads qui couvre toute la surface du pont. Gr&acirc;ce &agrave; ses nombreuses options de montage, la Stingray Foil LTD s&rsquo;adaptable &agrave; diff&eacute;rents types de foils, diff&eacute;rentes tailles de voiles ou niveaux d&rsquo;expertise. Il n\'a jamais &eacute;t&eacute; aussi facile et pratique d\'entrer dans l&rsquo;univers du foil.</p>
</div>
</div>
</div>',
    'year' => 2022,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 2.0,
    'programme_end' => 4.0,
    'views' => 1008,
    'last_ip' => '88.163.167.153',
    'created_at' => '2021-11-09 20:58:14',
    'updated_at' => '2022-04-08 22:44:24',
),
155 => 
array (
    'id' => 196,
    'name' => '95 carbone C600',
    'slug' => 'starboard-carbone-95-c600-97-2022',
    'user_id' => 1,
    'category_id' => 1,
    'brand_id' => 100,
    'status' => 'Hidden',
    'body' => '<p>nc.</p>',
    'year' => 2022,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => NULL,
    'programme_end' => NULL,
    'views' => 215,
    'last_ip' => '::1',
    'created_at' => '2021-11-16 19:30:06',
    'updated_at' => '2022-03-20 20:52:43',
),
156 => 
array (
    'id' => 215,
    'name' => 'SLR',
    'slug' => 'neilpryde-slr-2022',
    'user_id' => 5,
    'category_id' => 1,
    'brand_id' => 69,
    'status' => 'Hidden',
    'body' => '<p>Aile 900</p>
<p>epaisseur 13,7</p>
<p>corde 12,5</p>
<p>Stab 400</p>
<p>epaisseir 7,2</p>
<p>corde 6,3</p>',
    'year' => 2022,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => NULL,
    'programme_end' => NULL,
    'views' => 11,
    'last_ip' => '::1',
    'created_at' => '2022-03-21 08:46:47',
    'updated_at' => '2022-03-24 21:58:44',
),
157 => 
array (
    'id' => 216,
    'name' => 'Z FIN SLALOM',
    'slug' => 'z-fin-slalom-2022',
    'user_id' => 5,
    'category_id' => 1,
    'brand_id' => 117,
    'status' => 'Hidden',
    'body' => '<p>Longueur fuselage 100</p>
<p>Aile Medium &gt;&nbsp;</p>
<p>&eacute;paisseur : 11,18mm</p>
<p>envergure : 700</p>
<p>corde : 10,8</p>
<p>Aile HW &gt;&nbsp;</p>
<p>&eacute;paisseur : 9,4mm</p>
<p>envergure : 59</p>
<p>corde : 9,2</p>
<p>&nbsp;</p>
<p>Stab &gt;</p>
<p>&eacute;paisseur : 8mm</p>
<p>envergure : 35</p>
<p>corde : 6,3</p>
<p>&nbsp;</p>',
    'year' => 2022,
    'price' => NULL,
    'link_test' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'programme_start' => 5.0,
    'programme_end' => 8.0,
    'views' => 7,
    'last_ip' => '88.163.167.153',
    'created_at' => '2022-03-21 08:49:15',
    'updated_at' => '2022-04-10 23:46:09',
),
));
        
        
    }
}