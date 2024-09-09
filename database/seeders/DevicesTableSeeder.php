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
                'body' => '<p>Le WH COMP 95 de s&eacute;rie est &eacute;quip&eacute; d\'un fuselage de 110cm, et d\'une aile de 768cm2.&nbsp;</p>
<p><img src="/storage/photos/1/2019-11/rrd-wh-comp-95-2019-IVy8XKmzoI.jpg" alt="RRD WH COMP 95" /></p>
<p><img src="/storage/photos/1/2019-11/rrd-wh-comp-95-2019-Ca3Ec9A6eE.jpg" alt="RRD WH COMP 95" /></p>
<p>Ce mod&egrave;le est &eacute;quip&eacute; d\'une platine int&eacute;gr&eacute;e de tr&egrave;s belle qualit&eacute;.</p>
<p><img src="/storage/photos/1/2019-11/rrd-wh-comp-95-2019-mkHmVXrlWt.jpg" alt="RRD WH COMP 95" /></p>',
                'brand_id' => '88',
                'category_id' => '1',
                'created_at' => '2019-11-05 19:57:16',
                'id' => '1',
                'last_ip' => '135.181.3.228',
                'link_presentation' => NULL,
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'Wh Comp 95',
                'price' => '1999.00',
                'programme_end' => '6',
                'programme_start' => '3',
                'slug' => 'rrd-wh-comp-95-2019',
                'status' => 'Published',
                'updated_at' => '2024-08-25 23:23:47',
                'user_id' => '1',
                'views' => '998',
                'year' => '2019',
            ),
            1 => 
            array (
                'body' => '<p>Fanatic a mis un moment avant de se lancer dans le windfoil. Cette marque embl&eacute;matique du windsurf attendait probablement de voir comment le march&eacute; allait d&eacute;marrer. Devant la pression de se dernier, il &eacute;tait devenu difficile de rester &agrave; part, et la marque nous a propos&eacute; l\'an pass&eacute; un Flow H9 qui, soyons totalement honn&egrave;tes, n\'&eacute;tait clairement pas &agrave; la hauteur. Fort de cette premi&egrave;re exp&eacute;rience, Fanatic a r&eacute;agit et propose cette ann&eacute;e un foil construit de fa&ccedil;on beaucoup plus s&eacute;rieuse, en mettant en particlier l\'accent sur la rigidit&eacute;. On a donc l&agrave; enfin une bonne base de d&eacute;part.</p>
<p><img src="/storage/photos/1/2019-09/fanatic-flow-900-2019-4NuJs0blJ2.jpg" alt="Fanatic Flow 900 2019" /></p>
<p>Disponible en version 900 et 1200cm2, nous avons mis un moment &agrave; pouvoir tester ce mod&egrave;le car il n\'&eacute;tait au d&eacute;part disponible qu\'en version platine ... donc compatible avec peu de flotteurs, &agrave; l\'exception des Fanatic SingRay. Comble de malchance, notre flotteur de test avait un probl&egrave;me de positionnement des rails US et il nous a donc fallu attendre l\'arriv&eacute;e du talon DTT pour faire les tests.&nbsp;</p>
<p>Comme pour le H9 Fanatic a soign&eacute; le packaging, et le foil est livr&eacute; dans une housse qui prot&egrave;ge parfaitement chaque &eacute;l&eacute;ment. Le montage ne pose aucun probl&egrave;me et l\'ensemble respire la robustesse allemande.&nbsp;</p>',
                'brand_id' => '36',
                'category_id' => '1',
                'created_at' => '2019-09-15 18:57:16',
                'id' => '2',
                'last_ip' => '160.103.208.60',
                'link_presentation' => NULL,
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'Flow 900',
                'price' => '1299.00',
                'programme_end' => '4',
                'programme_start' => '2',
                'slug' => 'fanatic-flow-900-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-07 12:24:01',
                'user_id' => '1',
                'views' => '1803',
                'year' => '2019',
            ),
            2 => 
            array (
            'body' => '<p>Apr&egrave;s l&rsquo;Envol, puis le LK1, lokefoil propose d&eacute;sormais un mod&egrave;le de race dans sa gamme. Ce foil est issu des d&eacute;veloppements men&eacute;s avec l&rsquo;aide de William Huppert, dans le cadre de sa participation aux diverses courses &eacute;lite foil (PWA, IFCA, France).</p>
<div class="multi-col-2">
<p>Comme Loke dispose d&eacute;j&agrave; d&rsquo;un foil assez polyvalent et plut&ocirc;t r&eacute;put&eacute;, le cahier des charges du LK Race &eacute;tait assez clair : une machine sans compromis pour naviguer en mode Up &amp; Down avec des grandes voiles (de 8 &agrave; 10m) et des planches tr&egrave;s larges. Comme on pouvait s&rsquo;en douter, le r&eacute;sultat est un foil avec un mat de plus de 1m, un fuselage immense, et une aile tr&egrave;s puissante.&nbsp;</p>
<p>Compte tenu du process de production utilis&eacute; (RTM) et des moyens de production, loke a pr&eacute;f&eacute;r&eacute; rester sur un ensemble Mat / Fuselage monobloc (non d&eacute;montable). Pour que l&rsquo;ensemble reste transportable, Loke a opt&eacute;&nbsp; pour un design original en r&eacute;alisant la jonction aile et stab sur une portion de fuselage. Cela permet d&rsquo;avoir une hydrodynamique tr&egrave;s efficace autour de la jonction aile / fuselage, mais a n&eacute;cessit&eacute; de concevoir un fuselage tr&egrave;s imposant autour de la jonction.</p>
<p>Pour finir, ajoutons que la construction fait appel a une quantit&eacute; non n&eacute;gligeable de carbone M40J pour garantir une rigidit&eacute; extr&ecirc;me. En comparaison avec les autres foils du march&eacute;, le LK Race se situe clairement dans le groupe de t&ecirc;te se ce crit&egrave;re, avec en particulier une rigidit&eacute; en torsion ph&eacute;nom&eacute;nale.</p>
<p>Le Lk Race &eacute;tant homologu&eacute; PWA, son design est stabilis&eacute; depuis Mars 2019. Seuls quelques d&eacute;tails de construction ont &eacute;volu&eacute; depuis ce moment, dans l&rsquo;objectif de le rendre plus fiable (en particulier autour de la jonction Aile / fuselage). Les moules d&eacute;finitif sont en cours de r&eacute;alisation, mais&nbsp; la commercialisation a d&eacute;j&agrave; d&eacute;but&eacute; au tarif de 2700&euro;&nbsp;(1 aile).</p>
</div>',
                'brand_id' => '60',
                'category_id' => '1',
                'created_at' => '2019-08-27 18:57:17',
                'id' => '3',
                'last_ip' => '91.242.162.9',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u39163s1-loke-foil-windfoil-lk-race-loke-foil-2020.html',
                'link_test' => NULL,
                'name' => 'LK Race',
                'price' => '2700.00',
                'programme_end' => '10',
                'programme_start' => '6',
                'slug' => 'lokefoil-lk-race-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-05 09:14:06',
                'user_id' => '1',
                'views' => '3266',
                'year' => '2020',
            ),
            3 => 
            array (
                'body' => '<p>Le supercruiser, que nous avons test&eacute; en combinaison avec la FoilX, est construit autour des m&ecirc;mes mats que la gamme GT, mais avec un ensemble fuselage et aile totalement diff&eacute;rents. C\'est en effet le seul mdo&egrave;le de la gamme qui ne soit pas inter-compatible avec les autres composants. On ne pourra donc pas remplacer l\'aile du Supercruiser par une autre.</p>
<p>Par contre, ces sp&eacute;cificit&eacute;s permettent d\'&eacute;quiper le foil d\'une aile in&eacute;dite et&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">gigantesque de 1700cm2, relativement fine.&nbsp;</span>Il est disponible au tarif de 999&euro; (aluminium) et 1999&euro; (mat carbone).</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-M4Z0gkbUrP.jpg" alt="Supercruiser Starboard" /></p>',
                'brand_id' => '100',
                'category_id' => '1',
                'created_at' => '2019-08-24 18:57:17',
                'id' => '4',
                'last_ip' => '93.189.166.80',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u39055s1-starboard-supercruiser-alu-starboard-2020.html',
                'link_test' => NULL,
                'name' => '85 Carbone Supercruiser',
                'price' => '999.00',
                'programme_end' => '4',
                'programme_start' => '1',
                'slug' => 'starboard-supercruiser-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-05 06:15:11',
                'user_id' => '1',
                'views' => '2349',
                'year' => '2019',
            ),
            4 => 
            array (
                'body' => 'Description',
                'brand_id' => '93',
                'category_id' => '1',
                'created_at' => '2019-08-15 18:57:17',
                'id' => '5',
                'last_ip' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'Profoil F1 HM 1080',
                'price' => '1770.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'select-profoil-f1-hm-1080-2019',
                'status' => 'Hidden',
                'updated_at' => '2021-06-14 14:20:46',
                'user_id' => '1',
                'views' => '1',
                'year' => '2019',
            ),
            5 => 
            array (
                'body' => '<div class="multi-col-2">
<div><img class="cms-img-fluid" src="/storage/photos/1/2022-04/vento.jpg" alt="GA mach1" width="700" height="700"></div>
<div>
<p>Le vento 85 a &eacute;t&eacute; d&eacute;couvert dans un premier temps sous la marque Ga et l\'apellation Mach 1, mais en r&eacute;alit&eacute; con&ccedil;u et fabriqu&eacute; par SAB FOIL (ex MOSES). Il s\'agit d\'un foil &agrave; grosse aile, d&eacute;di&eacute; &agrave; une pratique freeride, mais propos&eacute; uniquement en mat carbone, contrairement &agrave; la plupart de ses concurrents qui ont un mat en aluminium.</p>
<p>Commes tous les produits de la marque SAB FOIL, bien connue en kite, la finition est plut&ocirc;t au dessus de la moyenne, avec en particulier des profils fin et des usinages tr&egrave;s pr&eacute;cis. Sses points forts : rigidit&eacute;, contr&ocirc;le et glisse &agrave; tous les &eacute;tages !&nbsp;</p>
</div>
</div>',
                'brand_id' => '102',
                'category_id' => '1',
                'created_at' => '2020-07-03 18:57:17',
                'id' => '6',
                'last_ip' => '78.58.62.57',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u38754s1-gaastra-mach-1-gaastra-2019.html',
                'link_test' => NULL,
                'name' => 'VENTO 85',
                'price' => '1599.00',
                'programme_end' => '4',
                'programme_start' => '0.2',
                'slug' => 'ga-mach-1-2019',
                'status' => 'Published',
                'updated_at' => '2024-08-28 16:20:39',
                'user_id' => '1',
                'views' => '2655',
                'year' => '2021',
            ),
            6 => 
            array (
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-yJSad2arGf.jpg" alt="" /></div>
<div>
<p>Le foils IRIS R est le premier foil cr&eacute;&eacute; par Phantom, d&eacute;di&eacute; &agrave; la pratique course.&nbsp;Pour rappel, le R est le foil utilis&eacute; par Nicolas Goyard, actuellement champion du monde avec ce mod&egrave;le.&nbsp;</p>
<p>Assez superlatif dans sa conception et sa construction, le R poss&egrave;de un mat de 100cm full M40J. Le tarif est en cons&eacute;quence : le plus cher du march&eacute; &agrave; ce jour.</p>
<p>L\'ensemble des ailes disponibles avec ce mod&egrave;le sont construites dans les m&ecirc;mes mat&eacute;riaux, ce qui explique &eacute;galement le tarif au dessus du lot.&nbsp;</p>
<p>Le foil est fourni en standard avec un jeu de cals de stab, et un jeux de cale de Rake. Les ailes disponibles vont de 950 (pour naviger en 8 &agrave; 10m2) &agrave; 330 (en gros la taille habituelle d\'un stab)</p>
</div>
</div>',
                'brand_id' => '78',
                'category_id' => '1',
                'created_at' => '2019-07-10 18:57:17',
                'id' => '7',
                'last_ip' => '109.60.41.41',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u38221s1-phantom-iris-r-pwa-team-set-phantom-2020.html',
                'link_test' => NULL,
                'name' => 'IRIS R',
                'price' => '3428.00',
                'programme_end' => '10',
                'programme_start' => '6',
                'slug' => 'phantom-iris-r-2019',
                'status' => 'Published',
                'updated_at' => '2024-08-31 20:31:54',
                'user_id' => '1',
                'views' => '2931',
                'year' => NULL,
            ),
            7 => 
            array (
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-12/phantom-iris-x-proto-2-2020-dQUZkypuzS.jpg" alt="IRIS X foil"></div>
<div>
<p>Le foil Phantom&nbsp;IRIS X est le dernier n&eacute; de la gamme Phantom, d&eacute;di&eacute; &agrave; la pratique Freerace. Il fait suite au IRIS F (pour Freeride) et IRIS R (pour Racing) sortis tous deux en 2019.</p>
<p>Le R, qui reste au catalogue, est le foil utilis&eacute; par Nicolas Goyard, actuellement champion du monde avec ce mod&egrave;le. Le F est un foil g&eacute;om&eacute;triquement identique au R (mis &agrave; part le mat l&eacute;g&egrave;rement racourci), construit avec des mat&eacute;riaux moins nobles (proportion diff&eacute;rente de carbone haut module).&nbsp;</p>
<p>La g&eacute;n&egrave;se du X vient essentiellement de la volont&eacute; d\'avoir un foil plus polyvalent que le F. Avec une rigidit&eacute; sup&eacute;rieure, ce nouveau mod&egrave;le permet de garder du contr&ocirc;le et du confort lorsque le vent monte ou que le plan d\'eau se duricis. Comme un certain nombre de foils un peu trop souples, le F devenait en effet pointu &agrave; g&eacute;rer dans ces conditions.</p>
<p>Apr&egrave;s plusieurs prototypes, et de nombreux &eacute;changes avec la marque, il &eacute;tait devenu &eacute;vident que si on voulait garder la g&eacute;om&eacute;trie originale (mat et ailes tr&egrave;s fins), mais am&eacute;liorer le contr&ocirc;le, la seule option &eacute;tait de franchir un cap en terme de mat&eacute;riaux .. donc de prix. Le X int&egrave;gre donc cette fois une proportion de carbone haut module beaucoup plus &eacute;lev&eacute;e, sans atteindre celle du R toutefois. Avec un mat 5cm plus court que le R, et une petite concession sur la rigidit&eacute; en flexion, on a d&eacute;sormais un mat aussi rigide en torsion que le R.</p>
<p>Pour le reste, on garde les g&eacute;om&eacute;tries d\'ailes, de stab et de fuselages disponibles sur le F et le R. D&eacute;sormais, tous les foils Phantom sont livr&eacute;s avec un fuselage dit EVO avec une aile plus avanc&eacute;e que sur le mod&egrave;le 2019. Plusieures configurations sont disponibles en fonction du type d\'utilisation. On vous propose ainsi le <a href="https://marseille.glissattitude.com/windfoil/u39491s1-phantom-iris-x-foil-phantom-2020.html">IRIS X VMG</a> (orient&eacute; light wind et cap), le <a href="https://marseille.glissattitude.com/windfoil/u40937s1-phantom-iris-x-slalom-phantom-2020.html">IRIS X Slalom</a> (orient&eacute; travers et vitesse), le <a href="https://marseille.glissattitude.com/windfoil/u40938s1-phantom-iris-x-sport-set-phantom-2020.html">IRIS X Sport</a> (2 ailes 730 et 550), et le <a href="https://marseille.glissattitude.com/windfoil/u40939s1-phantom-iris-x-pro-set-phantom-2020.html">IRIS X Pro Set</a> (3 ailes 930, 730 et 550).</p>
<p>Comme pour le R, chaque set est fourni avec une malette, un set de cales de stab, la visserie, et une boite de cales de Rake.</p>
<p>Envergure des ailes</p>
<ul>
<li>930 : 100cm</li>
<li>730 : 92cm</li>
<li>550 : 73cm</li>
<li>430 : 65cm</li>
</ul>
</div>
</div>',
                'brand_id' => '78',
                'category_id' => '1',
                'created_at' => '2020-06-05 18:57:17',
                'id' => '8',
                'last_ip' => '185.191.171.16',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u40938s1-phantom-iris-x-sport-set-phantom-2020.html',
                'link_test' => NULL,
                'name' => 'IRIS X',
                'price' => '2309.00',
                'programme_end' => '10',
                'programme_start' => '4',
                'slug' => 'phantom-iris-x-proto-2-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-06 19:35:22',
                'user_id' => '1',
                'views' => '9353',
                'year' => NULL,
            ),
            8 => 
            array (
                'body' => '<p>Description</p>',
                'brand_id' => '78',
                'category_id' => '1',
                'created_at' => '2019-04-15 18:57:17',
                'id' => '11',
                'last_ip' => '85.208.96.205',
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-iris-f-foil.html',
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'IRIS F',
                'price' => '1799.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'phantom-iris-f-v1-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-01 05:44:27',
                'user_id' => '1',
                'views' => '1885',
                'year' => '2019',
            ),
            9 => 
            array (
                'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2019-05/rrd-wh-flight-alu-85-v2-2019-QACQHL207J.jpg" alt="" /></div>
<div>
<p>le foil est la 2e &eacute;ovlution de la version aluminium RRD. Sur le papier, suite &agrave; un certain nombre de remarques, le mat devait &ecirc;tre rigidifi&eacute; (surtout en flexion) pour offrir un meilleur contr&ocirc;le en vol. Sur cette nouvelle version v2, on a effectivement un nouveau mat, dont la structure interne contient plus de contreventements. On a aussi un nouveau fuselage un peu plus court de 10 cm.</p>
<p>Ce foil est tr&egrave;s clairement orient&eacute; petit temps ... Roberto ayant du mal &agrave; envisager l\'utilisation du foil dasn un vent soutenu.</p>
<p>Les choix de conception assez originaux (en particulier le mode de connexion mat / talon) ont une influance importante sur le comportement. Ses principux point forts viennent du tarif tr&egrave;s plac&eacute; compte tenu de la qualit&eacute; de finition, et de la polyvalence d\'utilisation puisqu\'il est livr&eacute; &agrave; la fois avec un talon tuttle et un talon Power Box. Il est &eacute;galement possible d\'utiliser un flotteur en double rail US.&nbsp;</p>
</div>
</div>',
                'brand_id' => '88',
                'category_id' => '1',
                'created_at' => '2019-05-27 18:57:17',
                'id' => '13',
                'last_ip' => '213.49.49.154',
                'link_presentation' => NULL,
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'WH Flight Alu 85 v2',
                'price' => '1199.00',
                'programme_end' => '4',
                'programme_start' => '2',
                'slug' => 'rrd-wh-flight-alu-85-v2-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-02 13:29:15',
                'user_id' => '1',
                'views' => '1352',
                'year' => '2019',
            ),
            10 => 
            array (
                'body' => 'Description',
                'brand_id' => '118',
                'category_id' => '1',
                'created_at' => '2019-05-02 18:57:17',
                'id' => '14',
                'last_ip' => '65.108.75.167',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u32580s1-zeeko-amplifier-deep-tuttle-zeeko-2019.html',
                'link_test' => NULL,
                'name' => 'Amplifier V3',
                'price' => '929.00',
                'programme_end' => '6',
                'programme_start' => '3',
                'slug' => 'zeeko-amplifier-v3-2019',
                'status' => 'Published',
                'updated_at' => '2024-08-21 18:19:40',
                'user_id' => '1',
                'views' => '2087',
                'year' => '2019',
            ),
            11 => 
            array (
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
                'brand_id' => '8',
                'category_id' => '1',
                'created_at' => '2019-03-04 19:57:17',
                'id' => '15',
                'last_ip' => '185.191.171.14',
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-foil-a1-2019.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u35849s1-alpinefoil-a1-carbon-alpinefoil-2019.html',
                'link_test' => NULL,
                'name' => 'A1 Carbone ULW',
                'price' => '1879.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'alpinefoil-a1-carbone-ulw-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-06 21:16:21',
                'user_id' => '1',
                'views' => '1470',
                'year' => '2019',
            ),
            12 => 
            array (
                'body' => '<p>Voici quelques &eacute;l&eacute;ement de l\'&eacute;cosyst&egrave;me F4</p>
<ul>
<li>1 mat de 97cm (&eacute;paisseur 16.3 &gt; 12.7)</li>
<li>1 fuselage de 99cm 1 fuselage de 119cm</li>
<li>1 aile de 85cm x 12cm et 13mm d\'&eacute;paisseur</li>
<li>1 aile de 90cm x 11.5 et 12.7mm d\'&eacute;paisseur</li>
<li>1 aile de 100cm x 12cm et 13mm d\'&eacute;paisseur</li>
<li>2 stab de 38 x 7,2cm pour 9,8 mm d\'&eacute;paisseur</li>
</ul>',
                'brand_id' => '35',
                'category_id' => '1',
                'created_at' => '2018-12-03 19:57:17',
                'id' => '16',
                'last_ip' => '93.23.15.136',
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-presentation-test-f-4-2019.html',
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'SLALOM RACE USA',
                'price' => '2400.00',
                'programme_end' => '10',
                'programme_start' => '6',
                'slug' => 'f4-race-foil-2019',
                'status' => 'Published',
                'updated_at' => '2024-09-01 08:45:03',
                'user_id' => '1',
                'views' => '2751',
                'year' => '2019',
            ),
            13 => 
            array (
                'body' => '<p>Description</p>',
                'brand_id' => '103',
                'category_id' => '1',
                'created_at' => '2018-10-01 18:57:17',
                'id' => '18',
                'last_ip' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sword-wf.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37181s1-taaroa-sword-taaroa-2019.html',
                'link_test' => NULL,
                'name' => 'Sword RS',
                'price' => '2399.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'taaroa-sword-rs-2018',
                'status' => 'Archived',
                'updated_at' => '2021-01-29 09:54:20',
                'user_id' => '1',
                'views' => '0',
                'year' => '2018',
            ),
            14 => 
            array (
                'body' => '<p>Description</p>',
                'brand_id' => '103',
                'category_id' => '1',
                'created_at' => '2018-11-01 19:57:17',
                'id' => '19',
                'last_ip' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sword-wf.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37181s1-taaroa-sword-taaroa-2019.html',
                'link_test' => NULL,
                'name' => 'Sword M80',
                'price' => '2399.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'taaroa-sword-m80-2018',
                'status' => 'Archived',
                'updated_at' => '2021-01-29 09:54:21',
                'user_id' => '3',
                'views' => '0',
                'year' => '2018',
            ),
            15 => 
            array (
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
                'brand_id' => '103',
                'category_id' => '1',
                'created_at' => '2020-01-05 19:57:17',
                'id' => '20',
                'last_ip' => '65.33.158.24',
                'link_presentation' => NULL,
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37181s1-taaroa-noe-97-uhm-taaroa-2020.html',
                'link_test' => NULL,
                'name' => 'Noe 97 Freerace UHM',
                'price' => '2199.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'taaroa-noe-97-uhm-2020',
                'status' => 'Published',
                'updated_at' => '2024-09-08 19:17:30',
                'user_id' => '1',
                'views' => '4640',
                'year' => '2020',
            ),
            16 => 
            array (
                'body' => '<p>Le Noe 97 UHM Freerace est le mod&egrave;le le plus gaut de gamme de la marque. Le mat est construit en carbone M40J pour un maximum de rigidit&eacute;. Il est fourni en standard avec une aile Freearce de 800.</p>
<p>Il est d&eacute;sormais aussi possible en option de l\'&eacute;quiper d\'une aile petit temps de 1050, et d\'une aile de speed de 750. Ces 2 &eacute;l&eacute;ments &eacute;largissent de fa&ccedil;on consid&eacute;rable sa plage d\'utilisation.</p>
<p>Depuis fin 2019, le fuselage fourni en standard sur ce mod&egrave;le est le 85+</p>',
                'brand_id' => '103',
                'category_id' => '1',
                'created_at' => '2019-06-15 18:57:17',
                'id' => '21',
                'last_ip' => NULL,
                'link_presentation' => NULL,
                'link_product' => NULL,
                'link_test' => NULL,
                'name' => 'Noe 97 Freerace UHM',
                'price' => '2399.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'taaroa-noe-97-uhm-2019',
                'status' => 'Archived',
                'updated_at' => '2021-06-14 14:21:22',
                'user_id' => '1',
                'views' => '5',
                'year' => '2019',
            ),
            17 => 
            array (
                'body' => '<p>Description</p>',
                'brand_id' => '103',
                'category_id' => '1',
                'created_at' => '2018-11-01 19:57:17',
                'id' => '22',
                'last_ip' => NULL,
                'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sword-wf.html',
                'link_product' => 'https://marseille.glissattitude.com/windfoil/u37960s1-taaroa-evo-97-freerace-taaroa-2019.html',
                'link_test' => NULL,
                'name' => 'Noe 97 Freerace',
                'price' => '1789.00',
                'programme_end' => '7',
                'programme_start' => '4',
                'slug' => 'taaroa-noe-97-freerace-2018',
                'status' => 'Archived',
                'updated_at' => '2021-01-29 09:54:37',
                'user_id' => '1',
                'views' => '0',
                'year' => '2018',
            ),
            18 => 
            array (
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
            'brand_id' => '103',
            'category_id' => '1',
            'created_at' => '2018-11-01 19:57:17',
            'id' => '23',
            'last_ip' => '65.108.75.167',
            'link_presentation' => NULL,
            'link_product' => 'https://marseille.glissattitude.com/windfoil/u36486s1-taaroa-noe-97-freeride-taaroa-2020.html',
            'link_test' => NULL,
            'name' => 'Noe 97 Freeride',
            'price' => '1689.00',
            'programme_end' => '5',
            'programme_start' => '2',
            'slug' => 'taaroa-noe-97-freeride-2018',
            'status' => 'Published',
            'updated_at' => '2024-08-21 18:19:28',
            'user_id' => '1',
            'views' => '1407',
            'year' => '2018',
        ),
        19 => 
        array (
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
        'brand_id' => '103',
        'category_id' => '1',
        'created_at' => '2018-08-01 18:57:17',
        'id' => '24',
        'last_ip' => '185.191.171.6',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u36239s1-taaroa-noe-80-taaroa-2020.html',
        'link_test' => NULL,
        'name' => 'Noe 80 Freeride',
        'price' => '1299.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'taaroa-noe-80-freeride-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-04 05:06:30',
        'user_id' => '1',
        'views' => '1925',
        'year' => '2018',
    ),
    20 => 
    array (
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
        'brand_id' => '69',
        'category_id' => '1',
        'created_at' => '2018-08-24 18:57:17',
        'id' => '25',
        'last_ip' => '91.164.241.70',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-np-rsflight-et-glide.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37855s1-divers-affuteuse-razor-tune-2-meules-divers.html',
        'link_test' => NULL,
        'name' => 'Glide Wind',
        'price' => '849.00',
        'programme_end' => '3',
        'programme_start' => '0',
        'slug' => 'neilpryde-glide-wind-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-09 09:14:06',
        'user_id' => '1',
        'views' => '2475',
        'year' => '2018',
    ),
    21 => 
    array (
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
        'brand_id' => '69',
        'category_id' => '1',
        'created_at' => '2018-12-24 19:57:17',
        'id' => '26',
        'last_ip' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-np-rsflight-et-glide.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37196s1-neil-pryde-rsflight-alu-evo-neil-pryde-2019.html',
        'link_test' => NULL,
        'name' => 'Flight Evo',
        'price' => '899.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'neilpryde-flight-evo-2018',
        'status' => 'Hidden',
        'updated_at' => '2021-01-29 09:51:02',
        'user_id' => '1',
        'views' => '2',
        'year' => '2018',
    ),
    22 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '98',
        'category_id' => '1',
        'created_at' => '2018-08-01 18:57:17',
        'id' => '27',
        'last_ip' => '66.249.66.86',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-sling-ghost-whisper.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Ghost Wsiper 111',
        'price' => '2490.00',
        'programme_end' => '6',
        'programme_start' => '4',
        'slug' => 'slingshot-ghost-wsiper-111-2018',
        'status' => 'Published',
        'updated_at' => '2024-08-27 16:09:47',
        'user_id' => '1',
        'views' => '829',
        'year' => '2018',
    ),
    23 => 
    array (
        'body' => '<p>L&rsquo;AFS Wind 105 fait partie de la gamme AFS depuis 2018, aux c&ocirc;t&eacute;s du Wind 85 et du Wind 105</p>
<p>Auparavent, AFS proposait un unique foil nomm&eacute; AFS2. En reprenant les m&ecirc;mes bases, on a donc d&eacute;sormais 3 foils d&eacute;di&eacute;s au windsurf (en plus des mod&egrave;les d&eacute;di&eacute;s au SUP et au surf):</p>
<ul>
<li>le Wind 85 est optimis&eacute; pour offrir une accessibilit&eacute; maximale, et un tarif ultra agressif pour un mod&egrave;le carbone. Il utilise un mat de 85cm, et une aile un peu plus large que celle de l&rsquo;AFS2</li>
<li>le Wind 95 s&rsquo;adresse aux passionn&eacute;s de foil (d&eacute;butants ou exp&eacute;riment&eacute;s) qui veulent un produit plus &eacute;volutif, en particulier vers des planches plus larges.</li>
<li>le Wind 105 est une machine de course d&eacute;di&eacute;e aux comp&eacute;titeurs, et aux planches larges. Il est livr&eacute; en standard avec l&rsquo;aile R800 : une aile tr&egrave;s plate optimis&eacute;e pour la vitesse et d&eacute;livrant une puissance cons&eacute;quente. Il est aussi disponible avec la R1000 qui lui donne des possibilit&eacute;s &eacute;tendues dans le vent plus l&eacute;ger</li>
</ul>
<p>En comparaison avec l&rsquo;AFS2, la nouvelle gamme repart sur le principe d&rsquo;un ensemble Mat / Fuselage monobloc, mais le profil de mat a &eacute;t&eacute; enti&egrave;rement revu pour plus de performance. Les 3 mod&egrave;les partagent le m&ecirc;me profil de mat, mais la construction est diff&eacute;rente sur chacun des 3 mod&egrave;les.</p>
<p>Housse T Bar en standard.&nbsp;</p>',
        'brand_id' => '3',
        'category_id' => '1',
        'created_at' => '2018-06-02 18:57:17',
        'id' => '28',
        'last_ip' => '54.36.148.89',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34767s1-afs-afs-wind-105-afs-2019.html',
        'link_test' => NULL,
        'name' => 'Wind 105',
        'price' => '2199.00',
        'programme_end' => '8',
        'programme_start' => '4.5',
        'slug' => 'afs-wind-105-r800-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-07 06:41:13',
        'user_id' => '1',
        'views' => '1285',
        'year' => '2018',
    ),
    24 => 
    array (
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
        'brand_id' => '8',
        'category_id' => '1',
        'created_at' => '2018-05-30 18:57:17',
        'id' => '29',
        'last_ip' => '185.191.171.14',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-presentation-a1-2018-alu-et-carbone.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u35941s1-alpinefoil-a1-aluminium-alpinefoil-2019.html',
        'link_test' => NULL,
        'name' => 'A1 ALU 2018 ULW',
        'price' => '1299.00',
        'programme_end' => '6',
        'programme_start' => '2',
        'slug' => 'alpinefoil-a1-alu-2018-ulw-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-04 01:50:21',
        'user_id' => '1',
        'views' => '1248',
        'year' => '2018',
    ),
    25 => 
    array (
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
        'brand_id' => '60',
        'category_id' => '1',
        'created_at' => '2018-04-25 18:57:17',
        'id' => '30',
        'last_ip' => '91.242.162.9',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-presentation-du-loke-lk1.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34705s1-loke-foil-windfoil-lk1-loke-foil-2019.html',
        'link_test' => NULL,
        'name' => 'LK1 850',
        'price' => '1850.00',
        'programme_end' => '4',
        'programme_start' => '0',
        'slug' => 'lokefoil-lk1-850-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-08 09:17:17',
        'user_id' => '1',
        'views' => '3120',
        'year' => '2020',
    ),
    26 => 
    array (
        'body' => 'Description',
        'brand_id' => '3',
        'category_id' => '1',
        'created_at' => '2018-04-28 18:57:17',
        'id' => '31',
        'last_ip' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34769s1-afs-afs-wind-85-afs-2019.html',
        'link_test' => NULL,
        'name' => 'Wind 85',
        'price' => '1349.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'afs-wind-85-2018',
        'status' => 'Archived',
        'updated_at' => '2021-06-14 14:16:52',
        'user_id' => '1',
        'views' => '0',
        'year' => '2018',
    ),
    27 => 
    array (
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
        'brand_id' => '3',
        'category_id' => '1',
        'created_at' => '2019-09-15 18:57:17',
        'id' => '32',
        'last_ip' => '65.108.75.167',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34769s1-afs-afs-wind-85-afs-2019.html',
        'link_test' => NULL,
        'name' => 'Wind 85',
        'price' => '1349.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'afs-wind-85-2019',
        'status' => 'Published',
        'updated_at' => '2024-08-21 18:16:19',
        'user_id' => '1',
        'views' => '2130',
        'year' => '2019',
    ),
    28 => 
    array (
        'body' => 'Description',
        'brand_id' => '3',
        'category_id' => '1',
        'created_at' => '2018-06-10 18:57:17',
        'id' => '33',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Wind 95 F700',
        'price' => '1349.00',
        'programme_end' => NULL,
        'programme_start' => NULL,
        'slug' => 'afs-wind-95-f700-2018',
        'status' => 'Archived',
        'updated_at' => '2021-08-01 08:31:48',
        'user_id' => '1',
        'views' => '0',
        'year' => '2018',
    ),
    29 => 
    array (
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
        'brand_id' => '3',
        'category_id' => '1',
        'created_at' => '2019-12-15 19:57:17',
        'id' => '34',
        'last_ip' => '91.242.162.9',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-des-af-85-et-af-95.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34768s1-afs-afs-wind-95-afs-2020.html',
        'link_test' => NULL,
        'name' => 'Wind 95',
        'price' => '1899.00',
        'programme_end' => '8',
        'programme_start' => '4',
        'slug' => 'afs-wind-95-f700-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-06 11:01:24',
        'user_id' => '1',
        'views' => '3124',
        'year' => '2019',
    ),
    30 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '100',
        'category_id' => '1',
        'created_at' => '2018-02-12 19:57:17',
        'id' => '35',
        'last_ip' => '176.180.93.173',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33415s1-starboard-gt-alu-starboard-2019.html',
        'link_test' => NULL,
        'name' => '85 Alu GT',
        'price' => '1199.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'starboard-gt-alu-v4-2018',
        'status' => 'Published',
        'updated_at' => '2024-08-23 20:23:16',
        'user_id' => '1',
        'views' => '879',
        'year' => '2018',
    ),
    31 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '100',
        'category_id' => '1',
        'created_at' => '2019-07-10 18:57:17',
        'id' => '36',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33415s1-starboard-gt-alu-starboard-2019.html',
        'link_test' => NULL,
        'name' => '95 Alu GT V6',
        'price' => '1199.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'starboard-gt-alu-mat-95-v6-2019',
        'status' => 'Hidden',
        'updated_at' => '2022-03-10 17:22:19',
        'user_id' => '1',
        'views' => '0',
        'year' => '2019',
    ),
    32 => 
    array (
        'body' => '<p>Fanatic ne pouvait pas passer &agrave; c&ocirc;t&eacute; du foil, et sur ce coup l&agrave;, ils n\'auront pas &eacute;t&eacute; pr&eacute;curseurs, mais ils ont pris le temps d\'analyser ce march&eacute; naissant. Ils proposent un premier produit simple, bien pens&eacute; et correspondant &agrave; l\'ADN de la marque : une conception originale, une belle finition, une construction utilisant des proc&eacute;d&eacute;s innovants, et une g&eacute;om&eacute;trie qui promet une tr&egrave;s belle accessibilit&eacute;.</p>
<p>L\'objectif du H9 est bien de permettre &agrave; tous les windsurfeurs de d&eacute;couvrir le Windfoil en toute facilit&eacute; et sans se faire peur. A l\'instar de la version kite (sortie il y a 1 mois environ), on imagine que le H9 va aussi offrir beaucoup de portance &agrave; basse vitesse et un comportement doux et progressif. On se languis de monter dessus pour d&eacute;couvrir les sensations qu\'il a a nous offrir !</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-1.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p>On admire au passage la qualit&eacute; d\'usinage du talon deep tuttle et le la platine en aluminium.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-2.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-3.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-4.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2018-06/fanatic-flow-h9-5.jpg" alt="Fanatic Flow H9" width="1000" height="750" /></p>',
        'brand_id' => '36',
        'category_id' => '1',
        'created_at' => '2018-02-12 19:57:17',
        'id' => '37',
        'last_ip' => '91.242.162.9',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-presentation-flow-h9.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u34718s1-fanatic-ws-flow-foil-h9-combo-fanatic-2018.html',
        'link_test' => NULL,
        'name' => 'Flow H9',
        'price' => '850.00',
        'programme_end' => '3',
        'programme_start' => '2',
        'slug' => 'fanatic-flow-h9-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-06 10:44:47',
        'user_id' => '1',
        'views' => '1724',
        'year' => '2018',
    ),
    33 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '1',
        'created_at' => '2019-06-01 18:57:17',
        'id' => '38',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Vini pro',
        'price' => '1715.00',
        'programme_end' => NULL,
        'programme_start' => NULL,
        'slug' => 'horue-vini-pro-2019',
        'status' => 'Hidden',
        'updated_at' => '2021-06-14 14:10:05',
        'user_id' => '1',
        'views' => '0',
        'year' => '2019',
    ),
    34 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '1',
        'created_at' => '2019-06-01 18:57:17',
        'id' => '39',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Vini Air',
        'price' => '1900.00',
        'programme_end' => NULL,
        'programme_start' => NULL,
        'slug' => 'horue-vini-air-2019',
        'status' => 'Hidden',
        'updated_at' => '2020-03-13 20:26:32',
        'user_id' => '1',
        'views' => '0',
        'year' => '2019',
    ),
    35 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '51',
        'category_id' => '1',
        'created_at' => '2019-06-01 18:57:17',
        'id' => '40',
        'last_ip' => '85.169.123.149',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Vini ride',
        'price' => '849.00',
        'programme_end' => NULL,
        'programme_start' => NULL,
        'slug' => 'horue-vini-ride-2019',
        'status' => 'Archived',
        'updated_at' => '2022-08-09 09:25:40',
        'user_id' => '1',
        'views' => '2',
        'year' => '2019',
    ),
    36 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '51',
        'category_id' => '1',
        'created_at' => '2018-11-15 19:57:17',
        'id' => '41',
        'last_ip' => '85.169.123.149',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Tae Proto',
        'price' => NULL,
        'programme_end' => NULL,
        'programme_start' => NULL,
        'slug' => 'horue-tae-proto-2018',
        'status' => 'Archived',
        'updated_at' => '2023-12-17 13:12:04',
        'user_id' => '1',
        'views' => '2',
        'year' => '2018',
    ),
    37 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '1',
        'created_at' => '2017-11-06 19:57:17',
        'id' => '42',
        'last_ip' => '185.191.171.17',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-h10-evo-presentation.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'H10 Evo',
        'price' => '799.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'horue-h10-evo-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-31 09:37:22',
        'user_id' => '1',
        'views' => '916',
        'year' => '2017',
    ),
    38 => 
    array (
        'body' => 'Description',
        'brand_id' => '88',
        'category_id' => '1',
        'created_at' => '2018-04-21 18:57:17',
        'id' => '43',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'WH Flight Alu 85',
        'price' => '1199.00',
        'programme_end' => NULL,
        'programme_start' => NULL,
        'slug' => 'rrd-wh-flight-alu-85-2018',
        'status' => 'Archived',
        'updated_at' => '2021-06-14 14:16:43',
        'user_id' => '1',
        'views' => '0',
        'year' => '2018',
    ),
    39 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '60',
        'category_id' => '1',
        'created_at' => '2017-10-18 18:57:17',
        'id' => '44',
        'last_ip' => '91.242.162.9',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/deballage-windfoil-envol-de-loke.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'ENVOL AILE STD',
        'price' => '1799.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'lokefoil-envol-2017',
        'status' => 'Published',
        'updated_at' => '2024-09-06 10:57:23',
        'user_id' => '1',
        'views' => '988',
        'year' => '2017',
    ),
    40 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '60',
        'category_id' => '1',
        'created_at' => '2017-10-18 18:57:17',
        'id' => '45',
        'last_ip' => '85.169.123.149',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/deballage-windfoil-envol-de-loke.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'ENVOL AILE PERF',
        'price' => '1799.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'lokefoil-perf-2017',
        'status' => 'Archived',
        'updated_at' => '2022-04-27 17:24:03',
        'user_id' => '1',
        'views' => '3',
        'year' => '2017',
    ),
    41 => 
    array (
        'body' => 'Description',
        'brand_id' => '119',
        'category_id' => '1',
        'created_at' => '2017-08-22 18:57:17',
        'id' => '46',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Easy LW HD 2017',
        'price' => '1690.00',
        'programme_end' => '6',
        'programme_start' => '2',
        'slug' => 'aeromod-easy-lw-hd-2017-2017',
        'status' => 'Archived',
        'updated_at' => '2021-01-22 21:03:23',
        'user_id' => '1',
        'views' => '1',
        'year' => '2017',
    ),
    42 => 
    array (
        'body' => 'Description',
        'brand_id' => '100',
        'category_id' => '1',
        'created_at' => '2017-07-26 18:57:17',
        'id' => '47',
        'last_ip' => '176.138.118.20',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-du-stb-slalom.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u35048s1-starboard-gts-carbon-foil-starboard-2019.html',
        'link_test' => NULL,
        'name' => '85 Carbon',
        'price' => '2099.00',
        'programme_end' => '6',
        'programme_start' => '4',
        'slug' => 'starboard-carbon-85-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-22 10:05:42',
        'user_id' => '1',
        'views' => '872',
        'year' => '2017',
    ),
    43 => 
    array (
        'body' => 'Description',
        'brand_id' => '93',
        'category_id' => '1',
        'created_at' => '2017-07-31 18:57:17',
        'id' => '53',
        'last_ip' => '185.191.171.4',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-du-profoil-f1.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Profoil F1',
        'price' => '2290.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'select-profoil-f1-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-31 09:00:36',
        'user_id' => '1',
        'views' => '1190',
        'year' => '2017',
    ),
    44 => 
    array (
    'body' => '<p>Autour du mat carbone de 95cm, Starboard propose tout un &eacute;cosyst&egrave;me de composants qui font du Carbon Foil 95 l\'un des plus adaptables du march&eacute;. D\'une utilisaiton dans les vagues (avec le fusleage de 75), &agrave; la race avec le fuselage de 115 et les ailes de 900 et 1000, il sait tout faire, et s\'adapter &agrave; tout type de riders.</p>',
        'brand_id' => '100',
        'category_id' => '1',
        'created_at' => '2017-07-26 18:57:17',
        'id' => '54',
        'last_ip' => '157.55.39.6',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-du-stb-slalom.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u32570s1-starboard-race-carbon-foil-starboard-2019.html',
        'link_test' => NULL,
        'name' => '95 Carbon',
        'price' => '2199.00',
        'programme_end' => '10',
        'programme_start' => '4',
        'slug' => 'starboard-carbon-95-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-23 05:32:13',
        'user_id' => '1',
        'views' => '1815',
        'year' => '2017',
    ),
    45 => 
    array (
        'body' => 'Description',
        'brand_id' => '120',
        'category_id' => '1',
        'created_at' => '2017-05-03 18:57:17',
        'id' => '56',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil',
        'price' => '999.00',
        'programme_end' => '3',
        'programme_start' => '1',
        'slug' => 'mantafoil-windfoil-2017',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:27:31',
        'user_id' => '1',
        'views' => '0',
        'year' => '2017',
    ),
    46 => 
    array (
        'body' => 'Description',
        'brand_id' => '69',
        'category_id' => '1',
        'created_at' => '2017-05-03 18:57:17',
        'id' => '57',
        'last_ip' => '147.161.185.73',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-et-montage-bp-rsflight-al.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RS:Flight AL',
        'price' => '799.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'neilpryde-rsflight-al-2017',
        'status' => 'Published',
        'updated_at' => '2024-07-18 08:56:36',
        'user_id' => '1',
        'views' => '919',
        'year' => '2017',
    ),
    47 => 
    array (
        'body' => 'Description',
        'brand_id' => '69',
        'category_id' => '1',
        'created_at' => '2017-05-10 18:57:17',
        'id' => '58',
        'last_ip' => '176.185.140.71',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RSX',
        'price' => '2400.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'neilpryde-rsx-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-04 06:01:10',
        'user_id' => '1',
        'views' => '717',
        'year' => '2017',
    ),
    48 => 
    array (
        'body' => 'Description',
        'brand_id' => '3',
        'category_id' => '1',
        'created_at' => '2017-04-24 18:57:17',
        'id' => '59',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'AFS2',
        'price' => '1899.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'afs-afs2-2017',
        'status' => 'Archived',
        'updated_at' => '2021-06-14 14:16:03',
        'user_id' => '1',
        'views' => '0',
        'year' => '2017',
    ),
    49 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '69',
        'category_id' => '1',
        'created_at' => '2017-04-10 18:57:17',
        'id' => '60',
        'last_ip' => '85.169.123.149',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-rsflight-f4-infographie.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RS:Flight F4',
        'price' => '2399.00',
        'programme_end' => '8',
        'programme_start' => '4',
        'slug' => 'neilpryde-rsflight-f4-2017',
        'status' => 'Archived',
        'updated_at' => '2023-12-17 13:11:03',
        'user_id' => '1',
        'views' => '1099',
        'year' => '2017',
    ),
    50 => 
    array (
        'body' => 'Description',
        'brand_id' => '121',
        'category_id' => '1',
        'created_at' => '2017-04-04 18:57:17',
        'id' => '61',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil 2017',
        'price' => '1950.00',
        'programme_end' => '5',
        'programme_start' => '3',
        'slug' => 'ketos-windfoil-2017-2017',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:30:45',
        'user_id' => '1',
        'views' => '0',
        'year' => '2017',
    ),
    51 => 
    array (
        'body' => 'Description',
        'brand_id' => '118',
        'category_id' => '1',
        'created_at' => '2017-03-17 19:57:17',
        'id' => '62',
        'last_ip' => '85.208.96.212',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/zko-windfoil-alu-deballage-et-montage.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u32580s1-zeeko-amplifier-deep-tuttle-zeeko-2019.html',
        'link_test' => NULL,
        'name' => 'Alu LW 2017',
        'price' => '929.00',
        'programme_end' => '6',
        'programme_start' => '4',
        'slug' => 'zeeko-alu-lw-2017-2017',
        'status' => 'Published',
        'updated_at' => '2024-09-06 19:07:27',
        'user_id' => '1',
        'views' => '936',
        'year' => '2017',
    ),
    52 => 
    array (
        'body' => 'Description',
        'brand_id' => '35',
        'category_id' => '1',
        'created_at' => '2016-11-02 19:57:17',
        'id' => '63',
        'last_ip' => NULL,
        'link_presentation' => 'https://marseille.glissattitude.com/blog/deballage-windfoil-f-4.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil',
        'price' => '2400.00',
        'programme_end' => '6',
        'programme_start' => '5',
        'slug' => 'f4-windfoil-2016',
        'status' => 'Archived',
        'updated_at' => '2021-03-07 18:06:40',
        'user_id' => '1',
        'views' => '0',
        'year' => '2016',
    ),
    53 => 
    array (
        'body' => 'Description',
        'brand_id' => '121',
        'category_id' => '1',
        'created_at' => '2016-10-01 18:57:17',
        'id' => '64',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil',
        'price' => '1950.00',
        'programme_end' => '3',
        'programme_start' => '2',
        'slug' => 'ketos-windfoil-2016',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:31:10',
        'user_id' => '1',
        'views' => '0',
        'year' => '2016',
    ),
    54 => 
    array (
        'body' => 'Description',
        'brand_id' => '122',
        'category_id' => '1',
        'created_at' => '2016-10-01 18:57:17',
        'id' => '65',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil',
        'price' => '2100.00',
        'programme_end' => '3',
        'programme_start' => '2',
        'slug' => 'mako-windfoil-2016',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:31:08',
        'user_id' => '1',
        'views' => '0',
        'year' => '2016',
    ),
    55 => 
    array (
        'body' => 'Description',
        'brand_id' => '41',
        'category_id' => '1',
        'created_at' => '2016-08-22 18:57:17',
        'id' => '66',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Hybrid 900',
        'price' => '1349.00',
        'programme_end' => '3',
        'programme_start' => '2',
        'slug' => 'fone-hybrid-900-2016',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:31:03',
        'user_id' => '1',
        'views' => '0',
        'year' => '2016',
    ),
    56 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '1',
        'created_at' => '2016-05-15 18:57:17',
        'id' => '68',
        'last_ip' => '85.208.96.197',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-vini-2017.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u28106s1-horue-vini-pro-horue-2019.html',
        'link_test' => NULL,
        'name' => 'Vini CR LW XLW',
        'price' => '1700.00',
        'programme_end' => '3',
        'programme_start' => '0',
        'slug' => 'horue-vini-2016',
        'status' => 'Published',
        'updated_at' => '2024-08-26 03:50:20',
        'user_id' => '1',
        'views' => '1414',
        'year' => '2016',
    ),
    57 => 
    array (
        'body' => 'Description',
        'brand_id' => '98',
        'category_id' => '1',
        'created_at' => '2017-05-02 18:57:17',
        'id' => '70',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil',
        'price' => '1249.00',
        'programme_end' => '2',
        'programme_start' => '1',
        'slug' => 'slingshot-windfoil-2017',
        'status' => 'Archived',
        'updated_at' => '2020-03-22 17:52:48',
        'user_id' => '1',
        'views' => '0',
        'year' => '2017',
    ),
    58 => 
    array (
        'body' => 'Description',
        'brand_id' => '122',
        'category_id' => '1',
        'created_at' => '2015-06-15 18:57:17',
        'id' => '71',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Windfoil',
        'price' => '1500.00',
        'programme_end' => '3',
        'programme_start' => '2',
        'slug' => 'mako-windfoil-2015',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:31:06',
        'user_id' => '1',
        'views' => '0',
        'year' => '2015',
    ),
    59 => 
    array (
        'body' => 'Description',
        'brand_id' => '5',
        'category_id' => '1',
        'created_at' => '2015-08-25 18:57:17',
        'id' => '72',
        'last_ip' => NULL,
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'AFS1',
        'price' => '2099.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'ahd-afs1-2015',
        'status' => 'Archived',
        'updated_at' => '2020-03-13 20:31:02',
        'user_id' => '1',
        'views' => '0',
        'year' => '2015',
    ),
    60 => 
    array (
        'body' => '<h4>Compact Foil boards</h4>
<p>En dehors des produits test&eacute;s les jours pr&eacute;c&eacute;dents, nous avons et l\'occasion de tester plus en profondeur les 2 compact foil pr&eacute;sentes ici : la RRD Pocket Rocket en 1m80, et une board Zeeko de 1m84 en 106L. Ces deux produits extr&ecirc;mement ludiques, offre un visage compl&egrave;tement diff&eacute;rent du foil, tout en sensations et en finesse, et &agrave; l\'oppos&eacute; des produits freerace.<br />Pour tirer toute la quintessence de ses produits, nous les avons utilis&eacute; avec des toutes petites voiles. D&rsquo;ailleurs, la Zeeko supporte difficilement une taille de voile sup&eacute;rieure &agrave; 5 m, alors que la RRD, un peu plus large, tol&egrave;re id&eacute;alement jusqu&rsquo;&agrave; 6m2. L\'id&eacute;al est aussi de naviguer strapless et sans harnais, histoire d\'aller jusqu\'au bout de la sensation de libert&eacute; ! Dans les 2 cas, ce type de flotteur doit &ecirc;tre associ&eacute; &agrave; un foil plut&ocirc;t stable &agrave; tr&egrave;s stable pour prendre du plaisir. Si le foil RRD 120 ne nous a pas convaincu en utilisation race, il offre ici un tout autre visage extr&ecirc;mement int&eacute;ressant.</p>
<p><img src="/storage/photos/2019-04/58381535_10213326706511953_8754602817789886464_o.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img src="/storage/photos/2019-04/57649371_10213326704391900_9163233329250566144_o.jpg" alt="Gliss Test Session Pocket Rocket" />Photos by Christian Souchet</p>
<p>Ces 2 produits sont clairement destin&eacute;s &agrave; des pratiquants exp&eacute;riment&eacute; en foil, et leur c&ocirc;t&eacute; ultra ludique nous a permis de passer des tr&egrave;s bons moments sur l\'eau. Dans des conditions de vent tr&egrave;s irr&eacute;guli&egrave;res, nous avons pu r&eacute;ellement prendre du plaisir, probablement plus qu\'avec un &eacute;quipment de race. Je rajouterai que ce type de combi n&eacute;cessite un minimum de vent. Ce n\'est donc pas la solution pour celui qui veut naviguer &agrave; 8knt !</p>',
        'brand_id' => '118',
        'category_id' => '2',
        'created_at' => '2019-05-10 18:57:17',
        'id' => '73',
        'last_ip' => '185.191.171.2',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u39353s1-zeeko-airwave-6-2-v1-windfoil-supfoil-wingfoil-zeeko-2020.html',
        'link_test' => NULL,
        'name' => 'Airwave 6\'2',
        'price' => '1589.00',
        'programme_end' => '2',
        'programme_start' => NULL,
        'slug' => 'zeeko-airwave-6-2-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-06 20:00:46',
        'user_id' => '1',
        'views' => '936',
        'year' => '2019',
    ),
    61 => 
    array (
        'body' => 'Description',
        'brand_id' => '98',
        'category_id' => '2',
        'created_at' => '2018-07-07 18:57:17',
        'id' => '74',
        'last_ip' => '82.210.15.202',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Wizzard 103',
        'price' => '1795.00',
        'programme_end' => '2',
        'programme_start' => '0',
        'slug' => 'slingshot-wizzard-103-2018',
        'status' => 'Published',
        'updated_at' => '2024-03-28 16:44:43',
        'user_id' => '1',
        'views' => '410',
        'year' => '2018',
    ),
    62 => 
    array (
        'body' => '<h4>Compact Foil boards</h4>
<p>En dehors des produits testés les jours précédents, nous avons et l\'occasion de tester plus en profondeur les 2 compact foil présentes ici : la RRD Pocket Rocket en 1m80, et une board Zeeko de 1m84 en 106L. Ces deux produits extrêmement ludiques, offre un visage complètement différent du foil, tout en sensations et en finesse, et à l\'opposé des produits freerace.<br />Pour tirer toute la quintessence de ses produits, nous les avons utilisé avec des toutes petites voiles. D’ailleurs, la Zeeko supporte difficilement une taille de voile supérieure à 5 m, alors que la RRD, un peu plus large, tolère idéalement jusqu’à 6m2. L\'idéal est aussi de naviguer strapless et sans harnais, histoire d\'aller jusqu\'au bout de la sensation de liberté ! Dans les 2 cas, ce type de flotteur doit être associé à un foil plutôt stable à très stable pour prendre du plaisir. Si le foil RRD 120 ne nous a pas convaincu en utilisation race, il offre ici un tout autre visage extrêmement intéressant.</p>
<p><img src="/storage/photos/2019-04/58381535_10213326706511953_8754602817789886464_o.jpg" alt="Gliss Test Session Pocket Rocket" /></p>
<p><img src="/storage/photos/2019-04/57649371_10213326704391900_9163233329250566144_o.jpg" alt="Gliss Test Session Pocket Rocket" />Photos by Christian Souchet</p>
<p>Ces 2 produits sont clairement destinés à des pratiquants expérimenté en foil, et leur côté ultra ludique nous a permis de passer des très bons moments sur l\'eau. Dans des conditions de vent très irrégulières, nous avons pu réellement prendre du plaisir, probablement plus qu\'avec un équipment de race. Je rajouterai que ce type de combi nécessite un minimum de vent. Ce n\'est donc pas la solution pour celui qui veut naviguer à 8knt !</p>',
        'brand_id' => '88',
        'category_id' => '2',
        'created_at' => '2018-09-25 18:57:17',
        'id' => '75',
        'last_ip' => '40.77.167.33',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Pocket Rocket E Tech',
        'price' => '1499.00',
        'programme_end' => '3',
        'programme_start' => '0',
        'slug' => 'rrd-pocket-rocket-e-tech-2018',
        'status' => 'Published',
        'updated_at' => '2024-06-22 05:00:00',
        'user_id' => '1',
        'views' => '533',
        'year' => '2018',
    ),
    63 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '2',
        'created_at' => '2016-05-15 18:57:17',
        'id' => '76',
        'last_ip' => '85.208.96.212',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/flotteur/u28111s1-horue-tiny-carbon-horue-2019.html',
        'link_test' => NULL,
        'name' => 'Tiny 110 Carbone',
        'price' => '2150.00',
        'programme_end' => '3',
        'programme_start' => '0',
        'slug' => 'horue-tiny-110-carbone-2016',
        'status' => 'Published',
        'updated_at' => '2024-09-04 08:51:51',
        'user_id' => '1',
        'views' => '1354',
        'year' => '2016',
    ),
    64 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '32',
        'category_id' => '2',
        'created_at' => '2019-06-21 18:57:17',
        'id' => '77',
        'last_ip' => '54.36.149.3',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38483s1-exocet-freefoil-ast-exocet-2019.html',
        'link_test' => NULL,
        'name' => 'Freefoil 112 AST',
        'price' => '1229.00',
        'programme_end' => '4',
        'programme_start' => '1',
        'slug' => 'exocet-freefoil-112-ast-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-08 17:40:41',
        'user_id' => '1',
        'views' => '2170',
        'year' => '2019',
    ),
    65 => 
    array (
        'body' => '<p>Nouvelle construction LTD 2020</p>',
        'brand_id' => '104',
        'category_id' => '2',
        'created_at' => '2019-04-23 18:57:17',
        'id' => '78',
        'last_ip' => '37.174.142.124',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38796s1-tabou-airide-ltd-tabou-2020.html',
        'link_test' => NULL,
        'name' => 'AIRIDE 81 LTD',
        'price' => '1999.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'tabou-airide-81-ltd-2019',
        'status' => 'Published',
        'updated_at' => '2024-07-08 15:37:18',
        'user_id' => '1',
        'views' => '2121',
        'year' => '2020',
    ),
    66 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '2',
        'created_at' => '2017-08-21 18:57:17',
        'id' => '79',
        'last_ip' => '85.208.96.206',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Eco 121',
        'price' => '1499.00',
        'programme_end' => '3',
        'programme_start' => '0',
        'slug' => 'horue-eco-121-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-26 15:24:16',
        'user_id' => '1',
        'views' => '932',
        'year' => '2017',
    ),
    67 => 
    array (
        'body' => 'Description',
        'brand_id' => '32',
        'category_id' => '2',
        'created_at' => '2019-05-06 18:57:17',
        'id' => '80',
        'last_ip' => '91.242.162.9',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38430s1-exocet-freefoil-carbone-exocet-2019.html',
        'link_test' => NULL,
        'name' => 'FreeFoil 132 Carbone',
        'price' => '1990.00',
        'programme_end' => '4',
        'programme_start' => '1',
        'slug' => 'exocet-freefoil-132-carbone-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-06 10:43:51',
        'user_id' => '1',
        'views' => '2315',
        'year' => '2019',
    ),
    68 => 
    array (
        'body' => 'Description',
        'brand_id' => '56',
        'category_id' => '2',
        'created_at' => '2018-08-14 18:57:17',
        'id' => '81',
        'last_ip' => '85.208.96.201',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u31525s1-jp-australia-hydrofoil-board-pro-edition-jp-australia-2019.html',
        'link_test' => NULL,
        'name' => 'Hydrofoil 120 Fws',
        'price' => '1949.00',
        'programme_end' => '6',
        'programme_start' => '2',
        'slug' => 'jp-australia-hydrofoil-120-fws-2018',
        'status' => 'Published',
        'updated_at' => '2024-08-29 23:34:56',
        'user_id' => '1',
        'views' => '2111',
        'year' => '2018',
    ),
    69 => 
    array (
        'body' => 'Description',
        'brand_id' => '100',
        'category_id' => '2',
        'created_at' => '2018-03-28 18:57:17',
        'id' => '82',
        'last_ip' => '185.191.171.19',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33670s1-starboard-foil-board-flex-balsa-starboard-2019.html',
        'link_test' => NULL,
        'name' => 'Foil 122 Flex Balsa',
        'price' => '1999.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'starboard-foil-122-flex-balsa-2018',
        'status' => 'Published',
        'updated_at' => '2024-07-20 03:11:47',
        'user_id' => '1',
        'views' => '1661',
        'year' => '2018',
    ),
    70 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '2',
        'created_at' => '2018-08-17 18:57:17',
        'id' => '83',
        'last_ip' => '54.36.149.98',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u36311s1-horue-airtime-verre-carbone-horue-2019.html',
        'link_test' => NULL,
        'name' => 'Airtime 125 Verre',
        'price' => '1999.00',
        'programme_end' => '6',
        'programme_start' => '3',
        'slug' => 'horue-airtime-125-verre-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-06 21:44:54',
        'user_id' => '1',
        'views' => '1765',
        'year' => '2018',
    ),
    71 => 
    array (
        'body' => 'Description',
        'brand_id' => '56',
        'category_id' => '2',
        'created_at' => '2017-04-11 18:57:17',
        'id' => '84',
        'last_ip' => '65.108.75.167',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u31525s1-jp-australia-hydrofoil-board-pro-edition-jp-australia-2019.html',
        'link_test' => NULL,
        'name' => 'Hydrofoil 135 Pro',
        'price' => '2299.00',
        'programme_end' => '6',
        'programme_start' => '2',
        'slug' => 'jp-australia-hydrofoil-135-pro-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-21 18:19:07',
        'user_id' => '1',
        'views' => '1300',
        'year' => '2017',
    ),
    72 => 
    array (
        'body' => 'Description',
        'brand_id' => '51',
        'category_id' => '2',
        'created_at' => '2016-12-12 19:57:17',
        'id' => '85',
        'last_ip' => '65.108.75.167',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Slant 133',
        'price' => '1875.00',
        'programme_end' => '5',
        'programme_start' => '3',
        'slug' => 'horue-slant-133-2016',
        'status' => 'Published',
        'updated_at' => '2024-08-21 18:19:55',
        'user_id' => '1',
        'views' => '1005',
        'year' => '2016',
    ),
    73 => 
    array (
        'body' => 'Description',
        'brand_id' => '32',
        'category_id' => '2',
        'created_at' => '2018-03-28 18:57:17',
        'id' => '86',
        'last_ip' => '91.171.186.52',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RF 81 CARBONE',
        'price' => '2150.00',
        'programme_end' => '8',
        'programme_start' => '4',
        'slug' => 'exocet-rf-81-carbone-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-08 16:13:29',
        'user_id' => '1',
        'views' => '1270',
        'year' => '2018',
    ),
    74 => 
    array (
        'body' => 'Description',
        'brand_id' => '30',
        'category_id' => '2',
        'created_at' => '2017-06-26 18:57:17',
        'id' => '87',
        'last_ip' => '85.208.96.204',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u32524s1-elix-f1x-elix-2018.html',
        'link_test' => NULL,
        'name' => 'F1X M V1',
        'price' => '2290.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'elix-f1x-m-v1-2017',
        'status' => 'Published',
        'updated_at' => '2024-04-17 09:55:45',
        'user_id' => '1',
        'views' => '674',
        'year' => '2017',
    ),
    75 => 
    array (
        'body' => 'Description',
        'brand_id' => '100',
        'category_id' => '2',
        'created_at' => '2018-07-28 18:57:17',
        'id' => '88',
        'last_ip' => '72.14.201.54',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u33670s1-starboard-foil-board-flex-balsa-starboard-2019.html',
        'link_test' => NULL,
        'name' => 'Foil 144',
        'price' => '1999.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'starboard-foil-144-2018',
        'status' => 'Published',
        'updated_at' => '2024-08-30 07:44:10',
        'user_id' => '1',
        'views' => '1249',
        'year' => '2018',
    ),
    76 => 
    array (
        'body' => 'Description',
        'brand_id' => '56',
        'category_id' => '2',
        'created_at' => '2019-03-02 19:57:17',
        'id' => '89',
        'last_ip' => '65.109.159.118',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u31526s1-jp-australia-hydrofoil-board-fws-jp-australia-2019.html',
        'link_test' => NULL,
        'name' => 'Hydrofoil 150 FWS',
        'price' => '2049.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'jp-australia-hydrofoil-150-fws-2019',
        'status' => 'Published',
        'updated_at' => '2023-12-17 17:55:25',
        'user_id' => '1',
        'views' => '639',
        'year' => '2019',
    ),
    77 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '8',
        'category_id' => '2',
        'created_at' => '2018-07-15 18:57:17',
        'id' => '90',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'AWF2',
        'price' => '1999.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'alpinefoil-awf2-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:29:14',
        'user_id' => '1',
        'views' => '185',
        'year' => '2018',
    ),
    78 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '30',
        'category_id' => '2',
        'created_at' => '2018-11-02 19:57:17',
        'id' => '91',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'F1X L V1',
        'price' => '2790.00',
        'programme_end' => '10',
        'programme_start' => '8',
        'slug' => 'elix-f1x-l-v1-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:27:01',
        'user_id' => '1',
        'views' => '270',
        'year' => '2018',
    ),
    79 => 
    array (
        'body' => 'Description',
        'brand_id' => '5',
        'category_id' => '2',
        'created_at' => '2019-04-01 18:57:17',
        'id' => '92',
        'last_ip' => '85.208.96.194',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37840s1-ahd-thunderbold-ahd-2019.html',
        'link_test' => NULL,
        'name' => 'Thunderbold 75',
        'price' => '2099.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'ahd-thunderbold-75-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-03 19:05:02',
        'user_id' => '1',
        'views' => '707',
        'year' => '2019',
    ),
    80 => 
    array (
        'body' => 'Description',
        'brand_id' => '5',
        'category_id' => '2',
        'created_at' => '2019-05-01 18:57:17',
        'id' => '93',
        'last_ip' => '66.249.70.34',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37840s1-ahd-thunderbold-ahd-2019.html',
        'link_test' => NULL,
        'name' => 'Thunderbold 85',
        'price' => '2199.00',
        'programme_end' => '5',
        'programme_start' => '3',
        'slug' => 'ahd-thunderbold-85-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-07 01:11:07',
        'user_id' => '1',
        'views' => '986',
        'year' => '2019',
    ),
    81 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '100',
        'category_id' => '2',
        'created_at' => '2019-05-10 18:57:17',
        'id' => '94',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Foil 177',
        'price' => '3179.00',
        'programme_end' => '10',
        'programme_start' => '9',
        'slug' => 'starboard-foil-177-2019',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:26:29',
        'user_id' => '1',
        'views' => '348',
        'year' => '2019',
    ),
    82 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '88',
        'category_id' => '2',
        'created_at' => '2018-09-25 18:57:17',
        'id' => '95',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'H Fire Pro 91 Ltd',
        'price' => '2699.00',
        'programme_end' => '10',
        'programme_start' => '9',
        'slug' => 'rrd-h-fire-pro-91-ltd-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:28:15',
        'user_id' => '1',
        'views' => '248',
        'year' => '2018',
    ),
    83 => 
    array (
        'body' => 'Description',
        'brand_id' => '32',
        'category_id' => '2',
        'created_at' => '2018-03-28 18:57:17',
        'id' => '96',
        'last_ip' => '207.46.13.154',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RF 91 CARBONE',
        'price' => '2450.00',
        'programme_end' => '10',
        'programme_start' => '8',
        'slug' => 'exocet-rf-91-carbone-2018',
        'status' => 'Published',
        'updated_at' => '2024-08-10 10:37:31',
        'user_id' => '1',
        'views' => '829',
        'year' => '2018',
    ),
    84 => 
    array (
        'body' => 'Description',
        'brand_id' => '88',
        'category_id' => '2',
        'created_at' => '2017-04-21 18:57:17',
        'id' => '97',
        'last_ip' => '85.208.96.202',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'FireRace 120',
        'price' => '1290.00',
        'programme_end' => '5',
        'programme_start' => '4',
        'slug' => 'rrd-firerace-120-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-31 08:15:17',
        'user_id' => '1',
        'views' => '360',
        'year' => '2017',
    ),
    85 => 
    array (
        'body' => 'Description',
        'brand_id' => '69',
        'category_id' => '2',
        'created_at' => '2017-04-19 18:57:17',
        'id' => '98',
        'last_ip' => '86.198.113.162',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RS:One Convertible',
        'price' => '1690.00',
        'programme_end' => '5',
        'programme_start' => '4',
        'slug' => 'neilpryde-rsone-convertible-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-16 15:33:59',
        'user_id' => '1',
        'views' => '826',
        'year' => '2017',
    ),
    86 => 
    array (
        'body' => 'Description',
        'brand_id' => '69',
        'category_id' => '2',
        'created_at' => '2017-04-19 18:57:17',
        'id' => '99',
        'last_ip' => '66.249.66.87',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'RS:X Convertible',
        'price' => '2200.00',
        'programme_end' => '5',
        'programme_start' => '4',
        'slug' => 'neilpryde-rsx-convertible-2017',
        'status' => 'Published',
        'updated_at' => '2024-07-22 09:44:33',
        'user_id' => '1',
        'views' => '875',
        'year' => '2017',
    ),
    87 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '104',
        'category_id' => '2',
        'created_at' => '2018-09-18 18:57:17',
        'id' => '100',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Rocket plus CED 123',
        'price' => '1990.00',
        'programme_end' => '4',
        'programme_start' => '3',
        'slug' => 'tabou-rocket-plus-ced-123-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:28:41',
        'user_id' => '1',
        'views' => '220',
        'year' => '2018',
    ),
    88 => 
    array (
        'body' => 'Description',
        'brand_id' => '100',
        'category_id' => '2',
        'created_at' => '2017-04-23 18:57:17',
        'id' => '101',
        'last_ip' => '65.109.159.118',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Foil 147 Tecnora',
        'price' => '2099.00',
        'programme_end' => '4',
        'programme_start' => '3',
        'slug' => 'starboard-foil-147-tecnora-2017',
        'status' => 'Published',
        'updated_at' => '2023-12-12 19:10:25',
        'user_id' => '1',
        'views' => '412',
        'year' => '2017',
    ),
    89 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '88',
        'category_id' => '2',
        'created_at' => '2018-09-25 18:57:17',
        'id' => '102',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'H Fire 91',
        'price' => '2199.00',
        'programme_end' => '4',
        'programme_start' => '3',
        'slug' => 'rrd-h-fire-91-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:27:46',
        'user_id' => '1',
        'views' => '195',
        'year' => '2018',
    ),
    90 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '88',
        'category_id' => '2',
        'created_at' => '2018-09-25 18:57:17',
        'id' => '103',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Hi Flight',
        'price' => '1990.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'rrd-hi-flight-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:27:26',
        'user_id' => '1',
        'views' => '144',
        'year' => '2018',
    ),
    91 => 
    array (
        'body' => 'Description',
        'brand_id' => '14',
        'category_id' => '2',
        'created_at' => '2019-06-08 18:57:17',
        'id' => '104',
        'last_ip' => '207.46.13.54',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u37656s1-bic-130l-techno-windfoil-130-bic-2019.html',
        'link_test' => NULL,
        'name' => 'Techno Windfoil',
        'price' => '1299.00',
        'programme_end' => '4',
        'programme_start' => '3',
        'slug' => 'bic-techno-windfoil-2019',
        'status' => 'Published',
        'updated_at' => '2024-08-29 10:29:49',
        'user_id' => '1',
        'views' => '1129',
        'year' => '2019',
    ),
    92 => 
    array (
        'body' => '<p>Description</p>',
        'brand_id' => '36',
        'category_id' => '2',
        'created_at' => '2018-04-18 18:57:17',
        'id' => '105',
        'last_ip' => '88.163.167.153',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Gecko Foil 120',
        'price' => '1990.00',
        'programme_end' => '4',
        'programme_start' => '3',
        'slug' => 'fanatic-gecko-foil-120-2018',
        'status' => 'Archived',
        'updated_at' => '2022-04-29 23:29:38',
        'user_id' => '1',
        'views' => '248',
        'year' => '2018',
    ),
    93 => 
    array (
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
        'brand_id' => '100',
        'category_id' => '2',
        'created_at' => '2020-03-22 22:53:39',
        'id' => '106',
        'last_ip' => '185.191.171.7',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38907s1-starboard-foil-x-board-starlite-starboard-2020.html',
        'link_test' => NULL,
        'name' => 'FOIL X 145 STARLITE',
        'price' => '1599.00',
        'programme_end' => '4',
        'programme_start' => '2',
        'slug' => 'starboard-foil-x-145-starlite-2020',
        'status' => 'Published',
        'updated_at' => '2024-09-04 03:06:38',
        'user_id' => '1',
        'views' => '3369',
        'year' => '2020',
    ),
    94 => 
    array (
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
        'brand_id' => '118',
        'category_id' => '1',
        'created_at' => '2020-03-30 16:14:00',
        'id' => '107',
        'last_ip' => '83.204.35.156',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-deballage-bullet-1.html',
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u40089s1-zeeko-bullet-v1-zeeko-2020.html',
        'link_test' => NULL,
        'name' => 'Bullet V1',
        'price' => '1890.00',
        'programme_end' => '8',
        'programme_start' => '4',
        'slug' => 'zeeko-bullet-v1-2020',
        'status' => 'Published',
        'updated_at' => '2024-09-01 19:12:40',
        'user_id' => '1',
        'views' => '5328',
        'year' => '2020',
    ),
    95 => 
    array (
        'body' => '<p>La Swart est une voile sans camber disponible de 1,5 &agrave; 5,5m2 par pas de 0,5m2. Sa conception est bas&eacute;e sur 3 objectifs : une optimisation du poids, un maximum de dynamisme et une grosse puissance pour d&eacute;coller. La construction fait appel &agrave; un mat&eacute;riau tram&eacute; tr&egrave;s l&eacute;ger type Pentex qui fait penser aux voiles des voiliers de course, &agrave; des anneaux en c&eacute;ramique, du spectra etc. pour arriver &agrave; un poids jamais rencontr&eacute; jusqu\'alors.</p>
<p>La voile est con&ccedil;ue autour des mats RDM python de la marque reptile. En dehors de leur l&eacute;g&egrave;ret&eacute;, ces mats offrent une grosse dynamique tr&egrave;s coh&eacute;rente avec les objectifs de la voile.</p>
<p>Les SWART sont fabriqu&eacute;es en France, et ceci constitue une vraie exception dans notre petit monde.</p>',
        'brand_id' => '51',
        'category_id' => '3',
        'created_at' => '2017-04-06 12:06:44',
        'id' => '112',
        'last_ip' => '185.191.171.9',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Swart',
        'price' => NULL,
        'programme_end' => '3',
        'programme_start' => '0',
        'slug' => 'horue-swart-2017',
        'status' => 'Published',
        'updated_at' => '2024-08-26 01:27:24',
        'user_id' => '1',
        'views' => '977',
        'year' => '2017',
    ),
    96 => 
    array (
        'body' => '<p>Jusqu&rsquo;&agrave; aujourd&rsquo;hui, nous n&rsquo;avions vu la skyscape qu&rsquo;en photo. Hormis le nombre de latte assez faible, la voile semblait assez proche d&rsquo;une switchblade.</p>
<p>En r&eacute;alit&eacute;, la voile est bien plus diff&eacute;rente que ce qu&rsquo;il n&rsquo;y paraissait. L&rsquo;outline est beaucoup plus ramass&eacute;, la bordure en bas de voile est assez imposante et adapt&eacute;e &agrave; une utilisation foil ou on couche moins la voile sur le pont (un peu comme sur la Swart RS).</p>
<p>Le Wish para&icirc;t tr&egrave;s court. Un fois gr&eacute;&eacute;e, la Skyscape offre un creux assez prononc&eacute;, et une chute beaucoup plus tendue que sur une switchblade.</p>',
        'brand_id' => '58',
        'category_id' => '3',
        'created_at' => '2017-08-06 12:12:13',
        'id' => '113',
        'last_ip' => '216.244.66.196',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Skyscape',
        'price' => NULL,
        'programme_end' => '6',
        'programme_start' => '2',
        'slug' => 'loft-skyscape-2017',
        'status' => 'Published',
        'updated_at' => '2024-07-27 21:08:32',
        'user_id' => '1',
        'views' => '780',
        'year' => '2018',
    ),
    97 => 
    array (
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
        'brand_id' => '113',
        'category_id' => '3',
        'created_at' => '2017-08-06 12:17:42',
        'id' => '114',
        'last_ip' => '85.208.96.199',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Fly',
        'price' => '825.00',
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'xo-sail-fly-2018',
        'status' => 'Published',
        'updated_at' => '2024-09-01 04:30:13',
        'user_id' => '1',
        'views' => '1168',
        'year' => '2018',
    ),
    98 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/u40382.jpg" alt="Xo Sail Vega" /></div>
<div>
<p>Pour tout ceux qui veulent naviguer dans le vent, sans recourir &agrave; une voile de vague, la VEGA s\'impose ! C\'est l\'une des rares voile de winsdurf non d&eacute;di&eacute;e Foil qui nous a fait une si belle impression.</p>
<p>La Vega est une voile compacte de freeride perf sans cam. Elle offre un creux tr&egrave;s ma&icirc;tris&eacute; dans le bas de voile, qui stabilise le profil et vous permettra de ne pas souffrir dans les rafales, tout en offrant un d&eacute;part planning imm&eacute;diat.</p>
</div>
</div>',
        'brand_id' => '113',
        'category_id' => '3',
        'created_at' => '2019-11-06 13:41:14',
        'id' => '115',
        'last_ip' => '85.208.96.209',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windsurf/u40382s1-xo-sail-vega-xo-sail-2020.html',
        'link_test' => NULL,
        'name' => 'Vega',
        'price' => '619.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'xo-sail-vega-2018',
        'status' => 'Published',
        'updated_at' => '2024-08-26 11:52:52',
        'user_id' => '1',
        'views' => '1834',
        'year' => '2020',
    ),
    99 => 
    array (
        'body' => '<p>La Severn Hyperglide est la premi&egrave;re voile d&eacute;velopp&eacute;e par la marque Australienne exclusivement pour le foil ... et plus particuli&egrave;rement pour la course. Nous faisons le point sur les apports de ce type de solution en foil, suite au test de la plus petite taille de la gamme : la 8m2.</p>',
        'brand_id' => '95',
        'category_id' => '3',
        'created_at' => '2018-06-12 12:49:45',
        'id' => '116',
        'last_ip' => '65.109.159.118',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Hyperglide',
        'price' => NULL,
        'programme_end' => '10',
        'programme_start' => '8',
        'slug' => 'severn-hyperglide-2018',
        'status' => 'Published',
        'updated_at' => '2023-12-17 17:47:02',
        'user_id' => '1',
        'views' => '657',
        'year' => '2018',
    ),
    100 => 
    array (
        'body' => '<p>La IRIS Freerace est une voile assez originale dans la mesure o&ugrave; elle n&rsquo;est pas construite en monofilm, au m&ecirc;me titre que les voiles italiennes Avanti. Au contraire, toute la surface de la voile est constitu&eacute;e d\'une "membrane", et qui est techniquement une surface m&ecirc;lant une mati&egrave;re plastique tr&egrave;s souple, avec une trame orient&eacute;e dans la direction des efforts.</p>
<p>On voit ceci sur les renforts de certaines voiles (comme le forceline NeilPryde). Ici, toute la voile utilise ce principe.</p>
<p>En terme de conception, cette IRIS 7m est une voile de freerace &agrave; 2 cambers, et fourreau &eacute;troit en dacron. Elle est con&ccedil;ue pour &ecirc;tre gr&eacute;&eacute; sur un mat constant flex (nous avons utilis&eacute; un North pour nos tests).</p>',
        'brand_id' => '78',
        'category_id' => '3',
        'created_at' => '2018-06-21 12:54:14',
        'id' => '117',
        'last_ip' => '91.242.162.9',
        'link_presentation' => 'https://marseille.glissattitude.com/blog/windfoil-test-rig.html',
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'IRIS F',
        'price' => NULL,
        'programme_end' => '7',
        'programme_start' => '4',
        'slug' => 'phantom-iris-f-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-08 09:23:47',
        'user_id' => '1',
        'views' => '665',
        'year' => '2019',
    ),
    101 => 
    array (
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
        'brand_id' => '100',
        'category_id' => '3',
        'created_at' => '2018-07-27 13:12:56',
        'id' => '118',
        'last_ip' => '135.181.3.228',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Flight',
        'price' => NULL,
        'programme_end' => '4',
        'programme_start' => '1',
        'slug' => 'starboard-flight-2019',
        'status' => 'Published',
        'updated_at' => '2024-08-25 23:10:42',
        'user_id' => '1',
        'views' => '1213',
        'year' => '2019',
    ),
    102 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/hydra-sport-2020-ezzy-sails.jpg" alt="" /></div>
<div>
<p>La Hydra est une voile tr&egrave;s originale ... ne serait ce que par son look.</p>
<p>Derri&egrave;re cet aspect &eacute;trange se cache en r&eacute;alit&eacute; un concentr&eacute; d\'id&eacute;es non conformistes : Mr Ezzy ne s\'est clairement pas content&eacute; de copier la concurrence, mais cherche au contraire &agrave; d&eacute;velopper des concepts sp&eacute;cifiques pour am&eacute;liorer l\'utilisation du gr&eacute;ement en foil.</p>
<p>Le r&eacute;sultat est aussi atypique qu\'int&eacute;ressant, et il faut avouer assez efficace en particulier dans le vent soutenu. On vous invite donc &agrave; ne pas en rester l\'impression un peu &eacute;trange que peu laisser l\'outline de la voile pour investiguer un peu plus. Vous d&eacute;couvrirez une voile l&eacute;g&egrave;re, qui permet de rel&acirc;cher la puissance quasi instantan&eacute;ment.</p>
</div>
</div>',
        'brand_id' => '33',
        'category_id' => '3',
        'created_at' => '2018-09-04 13:18:33',
        'id' => '119',
        'last_ip' => '52.167.144.137',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'Hydra',
        'price' => '780.00',
        'programme_end' => '4',
        'programme_start' => '1',
        'slug' => 'ezzy-hydra-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-05 03:23:13',
        'user_id' => '1',
        'views' => '922',
        'year' => '2020',
    ),
    103 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/irisx.jpg" alt="" /></div>
<div>
<p>La X est le mod&egrave;le d&eacute;di&eacute; &agrave; la pratique foil free-race. Dot&eacute;e de 2 cam, et d\'un foureau medium, cette voile propose un compromis entre la voile la voile de freeride o&ugrave; la notion de performance est accessoire, et la voile de course dont la technicit&eacute; la r&eacute;serve &agrave; des experts. L\'outline est &eacute;lanc&eacute;, le creux tr&egrave;s avanc&eacute; et assez haut ... ce qui a pour objectif de stabiliser la planche en vol, et de proposer tr&egrave;s peu de main arri&egrave;re.</p>
</div>
</div>',
        'brand_id' => '78',
        'category_id' => '3',
        'created_at' => '2019-04-02 16:13:15',
        'id' => '120',
        'last_ip' => '135.181.3.228',
        'link_presentation' => NULL,
        'link_product' => NULL,
        'link_test' => NULL,
        'name' => 'IRIS X',
        'price' => NULL,
        'programme_end' => '8',
        'programme_start' => '5',
        'slug' => 'phantom-iris-x-2019',
        'status' => 'Published',
        'updated_at' => '2024-08-25 23:10:03',
        'user_id' => '1',
        'views' => '1179',
        'year' => '2019',
    ),
    104 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/hyperglide2.jpg" alt="" /></div>
<div>
<p>Voici la 2eme version de l\'Hyperglide : c\'est la voile foil racing d&eacute;di&eacute;e de la marque Severne.</p>
<p>Au programme : grand &eacute;lancement, tr&egrave;s large fourreau avec 4 cambers, du volume et peu de renfort pour optimiser le poids. La chute ouvre peu mais de fa&agrave;on tr&egrave;s progressive.</p>
<p>Ce mod&egrave;le a fait ses preuves sur toutes les comp&eacute;titions internationales o&ugrave; elle s\'impose r&eacute;guli&egrave;rement.&nbsp; Elle a &eacute;t&eacute; d&eacute;velopp&eacute;e par Gonzalo Costa Hoevel ... une r&eacute;f&eacute;rence !</p>
<p>&nbsp;</p>
</div>
</div>',
        'brand_id' => '95',
        'category_id' => '3',
        'created_at' => '2019-05-31 22:00:00',
        'id' => '121',
        'last_ip' => '66.249.66.87',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38332s1-severn-hyperglide-2-severn-2019.html',
        'link_test' => NULL,
        'name' => 'Hyperglide 2',
        'price' => '1049.00',
        'programme_end' => '10',
        'programme_start' => '8',
        'slug' => 'severn-hyperglide-2-2019',
        'status' => 'Published',
        'updated_at' => '2024-04-01 17:05:53',
        'user_id' => '1',
        'views' => '952',
        'year' => '2019',
    ),
    105 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/IMG_7759.jpg" alt="" /></div>
<div>
<p>la F-Type est la premi&egrave;re voile d&eacute;di&eacute;e foil de l\'ex voilerie North. Elle est dot&eacute;e de 4 lattes sont 2 sur soft-cam.</p>
<p>Cette marque a compris la premi&egrave;re l\'int&eacute;r&ecirc;t de mettre des cambers sur une voile de freeride, et le r&eacute;sultat est tr&egrave;s r&eacute;ussi, grace &agrave; une r&eacute;utilisation d\'un concept qui date de plus de 15 ans : les cambers sur sangle. Ceci permet &agrave; la F-Type d\'afficher douceur, l&eacute;g&egrave;ret&eacute; et facilit&eacute; d\'utilisation.&nbsp;</p>
<p>La T-Type est disponible dans 2 surfaces : 5.8 et 6.8. La premi&egrave;re &eacute;tant peu volumineuse, et la seconde plut&ocirc;t p&ecirc;chue, les 2 surfaces sont parfaitement compl&eacute;mentaires.</p>
</div>
</div>',
        'brand_id' => '28',
        'category_id' => '3',
        'created_at' => '2018-09-21 22:00:00',
        'id' => '122',
        'last_ip' => '54.36.148.71',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u36492s1-duotone-f-type-duotone-2020.html',
        'link_test' => NULL,
        'name' => 'F-Type',
        'price' => '809.00',
        'programme_end' => '4',
        'programme_start' => '1',
        'slug' => 'duotone-f-type-2019',
        'status' => 'Published',
        'updated_at' => '2024-09-06 06:01:25',
        'user_id' => '1',
        'views' => '1494',
        'year' => '2019',
    ),
    106 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img src="/storage/photos/1/2020-02/IMG_0251.jpg" alt="GA Sails Air Ride 2020" /></div>
<div>
<p>La Air Ride est une voile con&ccedil;ue pour le windfoil. Le programme vis&eacute; est celui du freeride, c\'est &agrave; dire de la navigation plaisir, sans notion de performance. Ici, on cherche de la facilit&eacute; et du confort essentiellement.</p>
<p>En terme de conception, la AirRide est une voile 5 lattes &agrave; grand allongement. La surface en dessous du wish est plu&ocirc;t g&eacute;n&eacute;reuse.</p>
<p>Les 5.7 et 6.7 sont sans cam. La 7.7 a 2 cambers dans un fourreau assez &eacute;troit (comme la nouvelle V8 NeilPryde).</p>
<p>Petite indication importante : la voile n&eacute;cessite une tension assez soutenue au wish pour donner le meilleur (ne pas la laisser ultra creuse, cela ne sert &agrave; rien, et la rend instable).</p>
</div>
</div>',
        'brand_id' => '42',
        'category_id' => '3',
        'created_at' => '2019-09-30 22:00:00',
        'id' => '123',
        'last_ip' => '54.36.148.97',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38991s1-gaastra-airride-gaastra-2020.html',
        'link_test' => NULL,
        'name' => 'Air Ride',
        'price' => '699.00',
        'programme_end' => '4',
        'programme_start' => '1',
        'slug' => 'ga-air-ride-2020',
        'status' => 'Published',
        'updated_at' => '2024-09-07 02:33:05',
        'user_id' => '1',
        'views' => '1622',
        'year' => '2020',
    ),
    107 => 
    array (
        'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-02/skyblade2019-01.jpg" alt="" /></div>
<div>
<p>La skyblade est la voile Foil Racing de Loft. Int&eacute;gralement revue en 2020, c\'est pour la premi&egrave;re fois une voile con&ccedil;ue &agrave; partir d\'une page blanche Pour le windfoil ... et &ccedil;a se voit.</p>
<p>&nbsp;La 8m correspond &agrave; la surface de vent fort pour les coureurs. Elle es &eacute;galement disponible en 9 et 10m2.</p>
<p>Contrairement aux habitudes de Monty, nous avons cette fois une voile avec aucun monofilm tram&eacute;, et une construction plus l&eacute;g&egrave;re avce moins de renforts. En contre partie, cela promet une voile plus dynamique, ce qui est essentiel en foil puisque l\'on surtoile beaucoup moins.</p>
<p>Je pr&eacute;cise &eacute;galement que pour 2020, loft proposera &eacute;galement une Skyscape 8m2 d&eacute;di&eacute;e au foil. les programmes sont diff&eacute;rents : foil racing pour la Skyblade / foil freeride et freerace pour la Skyscape.&nbsp;</p>
</div>
</div>',
        'brand_id' => '58',
        'category_id' => '3',
        'created_at' => '2019-08-23 22:00:00',
        'id' => '124',
        'last_ip' => '157.55.39.59',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38893s1-loft-skyblade-loft-2020.html',
        'link_test' => NULL,
        'name' => 'Skyblade',
        'price' => '1099.00',
        'programme_end' => '10',
        'programme_start' => '7',
        'slug' => 'loft-skyblade-2020',
        'status' => 'Published',
        'updated_at' => '2024-07-02 13:02:50',
        'user_id' => '1',
        'views' => '1221',
        'year' => '2020',
    ),
    108 => 
    array (
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
        'brand_id' => '78',
        'category_id' => '2',
        'created_at' => '2020-06-03 17:24:58',
        'id' => '125',
        'last_ip' => '207.46.13.116',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u40559s1-phantom-iris-x-board-phantom-2021.html',
        'link_test' => NULL,
        'name' => 'IRIS X',
        'price' => NULL,
        'programme_end' => '8',
        'programme_start' => '5',
        'slug' => 'phantom-iris-x-2020',
        'status' => 'Published',
        'updated_at' => '2024-07-12 19:31:40',
        'user_id' => '1',
        'views' => '5393',
        'year' => '2020',
    ),
    109 => 
    array (
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
        'brand_id' => '95',
        'category_id' => '3',
        'created_at' => '2020-04-06 17:32:01',
        'id' => '126',
        'last_ip' => '92.162.210.137',
        'link_presentation' => NULL,
        'link_product' => 'https://marseille.glissattitude.com/windfoil/u38896s1-severn-foilglide-severn-2020.html',
        'link_test' => NULL,
        'name' => 'FoilGlide',
        'price' => '649.00',
        'programme_end' => '5',
        'programme_start' => '2',
        'slug' => 'severn-foilglide-2020',
        'status' => 'Published',
        'updated_at' => '2024-08-26 08:38:45',
        'user_id' => '1',
        'views' => '3048',
        'year' => '2020',
    ),
    110 => 
    array (
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
    'brand_id' => '56',
    'category_id' => '2',
    'created_at' => '2020-04-06 18:40:30',
    'id' => '127',
    'last_ip' => '147.161.180.90',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u36356s1-jp-australia-hydrofoil-board-es-jp-australia-2020.html',
    'link_test' => NULL,
    'name' => 'Hydrofoil 135 ES',
    'price' => '1549.00',
    'programme_end' => '5',
    'programme_start' => '2',
    'slug' => 'jp-australia-hydrofoil-135-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-07 11:10:31',
    'user_id' => '1',
    'views' => '2297',
    'year' => '2020',
),
111 => 
array (
    'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-03/phantom-iris-z-2020.jpg" alt="" /></div>
<div>
<p>L\'IRIS Z est la voile de foil freeride by Phantom.</p>
<p>A l\'instar de Duotone avec sa F-Type, et de Severne avec sa FoilGlide, Phantom a &eacute;galement opt&eacute; pour un concept avec 2 petits cambers pour ce programme de voile l&eacute;g&egrave;re. Pour rappel, cela permet de stabiliser la voile et de la rendre plus agr&eacute;able, sans d&eacute;stabiliser le pilote lors des rafales.</p>
<p>La voile est disponible dans 2 tailles : 5.8 et 6.8, qui correspondent au domaine d\'utilisation du foil freeride (vent entre 10 et 25 knt).</p>
<p>La 5.8 se gr&eacute;e sur un 430, et la 6.8 sur un 460. Les 2 voiles ont &eacute;t&eacute; con&ccedil;ues pour &ecirc;tre gr&eacute;&eacute;es sur du mat SDM constant flex, mais il est possible en option de les commander avec des cam RDM.</p>
</div>
</div>',
    'brand_id' => '78',
    'category_id' => '3',
    'created_at' => '2020-04-06 18:46:04',
    'id' => '128',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40386s1-phantom-iris-z-phantom-2020.html',
    'link_test' => NULL,
    'name' => 'IRIS Z',
    'price' => '749.00',
    'programme_end' => '4',
    'programme_start' => '2',
    'slug' => 'phantom-iris-z-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-05 09:14:24',
    'user_id' => '1',
    'views' => '4013',
    'year' => '2021',
),
112 => 
array (
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
    'brand_id' => '78',
    'category_id' => '3',
    'created_at' => '2020-04-06 20:10:55',
    'id' => '129',
    'last_ip' => '135.181.3.228',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'IRIS RF',
    'price' => '948.00',
    'programme_end' => '10',
    'programme_start' => '7',
    'slug' => 'phantom-iris-rf-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-25 23:09:57',
    'user_id' => '1',
    'views' => '1497',
    'year' => '2020',
),
113 => 
array (
    'body' => '<p>Le freeride</p>',
    'brand_id' => '78',
    'category_id' => '1',
    'created_at' => '2020-04-06 20:15:55',
    'id' => '130',
    'last_ip' => '::1',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'IRIS Z',
    'price' => NULL,
    'programme_end' => '4',
    'programme_start' => '2',
    'slug' => 'phantom-iris-z-2020',
    'status' => 'Hidden',
    'updated_at' => '2022-03-23 22:35:32',
    'user_id' => '1',
    'views' => '4',
    'year' => NULL,
),
114 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2020-04/IMG_3355.jpg" alt="Exocet RF 97 2020"></div>
<div class="col-6">
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
</div>',
    'brand_id' => '32',
    'category_id' => '2',
    'created_at' => '2020-04-08 14:16:00',
    'id' => '131',
    'last_ip' => '45.119.124.212',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34454s1-exocet-rf-foil-board-carbon-exocet-2020.html',
    'link_test' => NULL,
    'name' => 'RF 71 Carbon',
    'price' => '2290.00',
    'programme_end' => '7',
    'programme_start' => '4',
    'slug' => 'exocet-rf-71-carbon-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-07 21:36:13',
    'user_id' => '1',
    'views' => '10108',
    'year' => '2020',
),
115 => 
array (
    'body' => '<div class="multi-col-2">
<div><img src="/storage/photos/1/2020-04/viniv2.jpg"></div>
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
    'brand_id' => '51',
    'category_id' => '1',
    'created_at' => '2020-04-09 07:20:17',
    'id' => '132',
    'last_ip' => '192.93.23.254',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'VINI PRO V2',
    'price' => '1715.00',
    'programme_end' => '3',
    'programme_start' => '0.1',
    'slug' => 'horue-vini-pro-v2-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-07 14:05:46',
    'user_id' => '1',
    'views' => '3474',
    'year' => '2020',
),
116 => 
array (
    'body' => '<p>s</p>',
    'brand_id' => '100',
    'category_id' => '2',
    'created_at' => '2020-04-09 07:41:53',
    'id' => '133',
    'last_ip' => '170.85.0.111',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38905s1-starboard-foil-board-freeride-flax-balsa-starboard-2020.html',
    'link_test' => NULL,
    'name' => 'FOIL FREERIDE 150',
    'price' => '2149.00',
    'programme_end' => '9',
    'programme_start' => '6',
    'slug' => 'starboard-foil-freeride-150-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-02 07:29:39',
    'user_id' => '1',
    'views' => '231',
    'year' => '2020',
),
117 => 
array (
    'body' => '<p>c</p>',
    'brand_id' => '100',
    'category_id' => '2',
    'created_at' => '2020-04-09 07:43:47',
    'id' => '134',
    'last_ip' => '216.128.29.151',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38905s1-starboard-foil-board-freeride-flax-balsa-starboard-2020.html',
    'link_test' => NULL,
    'name' => 'FOIL FREERIDE 125',
    'price' => '2099.00',
    'programme_end' => '8',
    'programme_start' => '4',
    'slug' => 'starboard-foil-freeride-125-2020',
    'status' => 'Published',
    'updated_at' => '2024-05-12 07:11:48',
    'user_id' => '1',
    'views' => '196',
    'year' => '2020',
),
118 => 
array (
    'body' => '<p>nouvelle constuction 2020, ex CED</p>',
    'brand_id' => '104',
    'category_id' => '2',
    'created_at' => '2020-04-09 08:02:34',
    'id' => '135',
    'last_ip' => NULL,
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38805s1-tabou-airide-mte-tabou-2020.html',
    'link_test' => NULL,
    'name' => 'AIRIDE 81 MTE',
    'price' => '1499.00',
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'tabou-airide-81-mte-2020',
    'status' => 'Hidden',
    'updated_at' => '2020-04-09 08:02:34',
    'user_id' => '1',
    'views' => '2',
    'year' => '2020',
),
119 => 
array (
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
    'brand_id' => '51',
    'category_id' => '2',
    'created_at' => '2020-04-17 06:49:25',
    'id' => '136',
    'last_ip' => '185.191.171.12',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'Tiny',
    'price' => '2150.00',
    'programme_end' => '3',
    'programme_start' => '0',
    'slug' => 'horue-tiny-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-01 07:45:07',
    'user_id' => '1',
    'views' => '3030',
    'year' => '2020',
),
120 => 
array (
'body' => '<p>Pour 2020, AlpineFoil nous propose 2 nouvelles d&eacute;clinaisons de son windfoil carbone A1 : le "Sport" et le "Race". Ces 2 nouveaux mod&egrave;les sont bas&eacute;s sur un mat de 97cm, notablement optimis&eacute; pour la glisse avec avec un profil plus fin (13.9mm en t&ecirc;te contre 16mm) que sur le A1 original.</p>',
    'brand_id' => '8',
    'category_id' => '1',
    'created_at' => '2020-04-25 06:19:35',
    'id' => '138',
    'last_ip' => '54.36.148.109',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40223s1-alpinefoil-a1-sport-carbone-alpinefoil-2020.html',
    'link_test' => NULL,
    'name' => 'A1 SPORT',
    'price' => '2289.00',
    'programme_end' => '7',
    'programme_start' => '4',
    'slug' => 'alpinefoil-a1-sport-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-08 06:43:19',
    'user_id' => '1',
    'views' => '3380',
    'year' => '2020',
),
121 => 
array (
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
    'brand_id' => '28',
    'category_id' => '3',
    'created_at' => '2020-05-01 11:33:58',
    'id' => '139',
    'last_ip' => '160.103.208.60',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windsurf/u40557s1-duotone-warp-foil-duotone-2020.html',
    'link_test' => NULL,
    'name' => 'WARP FOIL',
    'price' => '1449.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'duotone-warp-foil-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-18 07:02:05',
    'user_id' => '1',
    'views' => '3307',
    'year' => '2020',
),
122 => 
array (
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
    'brand_id' => '36',
    'category_id' => '2',
    'created_at' => '2020-05-01 12:17:47',
    'id' => '140',
    'last_ip' => '85.208.96.199',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40558s1-fanatic-falcon-foil-fanatic-2020.html',
    'link_test' => NULL,
    'name' => 'FALCON FOIL',
    'price' => '2899.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'fanatic-falcon-foil-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-06 20:03:59',
    'user_id' => '1',
    'views' => '1280',
    'year' => '2020',
),
123 => 
array (
    'body' => '<p><img class="img-fluid" src="/storage/photos/1/2020-05/exocet-rf81-2020-foilboard-1.jpg" alt="Exocet RF 81 carbone 2020"></p>
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
<p>Les Freefoil sont d&eacute;di&eacute;es au freeride. Les riders cherchant plus de contr&ocirc;le &agrave; haute vitesse ou de la puissance pour remonter au vent pr&eacute;f&egrave;reront les RF.</p>',
    'brand_id' => '32',
    'category_id' => '2',
    'created_at' => '2020-05-03 11:09:02',
    'id' => '141',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34454s1-exocet-rf-foil-board-carbon-exocet-2020.html',
    'link_test' => NULL,
    'name' => 'RF 81 CARBONE V2',
    'price' => '2290.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'exocet-rf-81-carbone-2020',
    'status' => 'Published',
    'updated_at' => '2024-09-08 09:15:09',
    'user_id' => '1',
    'views' => '9779',
    'year' => '2020',
),
124 => 
array (
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
    'brand_id' => '100',
    'category_id' => '2',
    'created_at' => '2020-05-03 11:43:24',
    'id' => '142',
    'last_ip' => '66.249.66.88',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u39925s1-starboard-iqfoil-board-95-carbon-reflex-starboard-2020.html',
    'link_test' => NULL,
    'name' => 'IQFOIL 95',
    'price' => '2898.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'starboard-iqfoil-95-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-14 19:41:21',
    'user_id' => '1',
    'views' => '1305',
    'year' => '2020',
),
125 => 
array (
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
    'brand_id' => '95',
    'category_id' => '3',
    'created_at' => '2020-05-03 12:45:33',
    'id' => '143',
    'last_ip' => '89.90.113.173',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u39929s1-starboard-iqfoil-hyperglide-olympic-sail-starboard-2020.html',
    'link_test' => NULL,
    'name' => 'IQFOIL 8M',
    'price' => '930.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'severne-iqfoil-8m-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-29 12:33:35',
    'user_id' => '1',
    'views' => '3152',
    'year' => '2020',
),
126 => 
array (
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
    'brand_id' => '104',
    'category_id' => '2',
    'created_at' => '2020-06-23 20:14:49',
    'id' => '146',
    'last_ip' => '66.249.66.88',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u41093s1-tabou-magic-carpet-tabou-2020.html',
    'link_test' => NULL,
    'name' => 'Magic Carpet',
    'price' => '1499.00',
    'programme_end' => '3',
    'programme_start' => '0',
    'slug' => 'tabou-magic-carpet-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-26 04:24:32',
    'user_id' => '1',
    'views' => '5860',
    'year' => '2020',
),
127 => 
array (
    'body' => '<div class="multi-col-2">
<div>Pour 2020, AlpineFoil nous propose 2 nouvelles d&eacute;clinaisons de son windfoil carbone A1 : le "Sport" et le "Race". Ces 2 nouveaux mod&egrave;les sont bas&eacute;s sur un mat de 97cm, notablement optimis&eacute; pour la glisse avec avec un profil plus fin (13.9mm en t&ecirc;te contre 16mm) que sur le A1 original.</div>
<div>
<p>Sur ces 2 mod&egrave;les, l\'&eacute;chantillonnage a &eacute;t&eacute; revu par rapport au A1 avec, notemment, des quantit&eacute;s de carbone haut module (M40J et autres) bien plus importantes. Ceci a pour objectif de compenser la plus faible &eacute;paisseur, et la plus grande longueur de mat, pour conserver une raideur optimale. Les 2 mod&egrave;les sont d&eacute;sormais livr&eacute;s en standard avec l\'aile Regata 850.</p>
<p>Le mod&egrave;le Race, destin&eacute; aux experts, est g&eacute;om&eacute;triquement identique, mais profite d\'un mat beaoucoup plus raide pour plus de contr&ocirc;le dans le vent, y compris avec les planches larges et les plus grands fuselages.</p>
</div>
</div>',
    'brand_id' => '8',
    'category_id' => '1',
    'created_at' => '2020-06-25 09:57:32',
    'id' => '147',
    'last_ip' => '65.108.75.167',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40224s1-alpinefoil-a1-race-carbone-alpinefoil-2020.html',
    'link_test' => NULL,
    'name' => 'A1 RACE',
    'price' => '2499.00',
    'programme_end' => '10',
    'programme_start' => '8',
    'slug' => 'alpinefoil-a1-race-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-21 18:16:22',
    'user_id' => '1',
    'views' => '4229',
    'year' => '2021',
),
128 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/jp-freefoil.png" alt="JP freefoil LXT" width="549" height="549"></div>
<div class="col-9">
<p>Apr&egrave;s le coup de ma&icirc;tre d\'Exocet avec ses Freefoil 112 et 135, c\'est au tour de JP de propsoer 2 flotteurs de foil freeride. Pour leur donner un nom, JP a fait dans l\'originalit&eacute; &nbsp;: Freefoil !!&nbsp;</p>
</div>
</div>
</div>',
    'brand_id' => '56',
    'category_id' => '2',
    'created_at' => '2020-07-16 20:03:06',
    'id' => '148',
    'last_ip' => '3.71.102.42',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u40581s1-jp-australia-freefoil-pro-edition-jp-australia-2020.html',
    'link_test' => NULL,
    'name' => 'Freefoil 115 Pro Edition',
    'price' => '2199.00',
    'programme_end' => '3',
    'programme_start' => '0',
    'slug' => 'jp-australia-freefoil-115-pro-edition-2020',
    'status' => 'Published',
    'updated_at' => '2024-08-23 17:43:59',
    'user_id' => '1',
    'views' => '3774',
    'year' => '2020',
),
129 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2020-07/patrick-foil-comp-ai.jpg" alt="Foil Comp Airinside"></div>
<div class="col-lg-8">
<p>Patrick Diethelm propose une particularit&eacute; unique dans le monde du Windsurf avec sa gamme de flotteur en construction AirInside. Dit autremement, les flotteurs ne sont pas construits autour d\'un pain de polystyr&egrave;ne, mais d\'une structure creuse en sandwich Nid d\'Abeille. La mise au point et la fiabilisation de ce proc&eacute;d&eacute; a pris plus de 4 ans, mais la marque est d&eacute;sormais en mesure de proposer un produit fiable et extr&ecirc;mement &eacute;volu&eacute;. Son pluys : une rigidit&eacute; et des r&eacute;partitions de poids qui offre un confort et une pr&eacute;cision de conduire in&eacute;gal&eacute;es.</p>
<p>La FoilComp AI est le flotteur de foil course de la gamme Patrick construit en technologie AirInside.</p>
</div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '2',
    'created_at' => '2020-08-01 08:25:08',
    'id' => '149',
    'last_ip' => '78.242.179.56',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FOIL COMP 91 AI',
    'price' => '3399.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'patrick-foil-comp-91-ai-2020',
    'status' => 'Published',
    'updated_at' => '2024-07-23 17:19:50',
    'user_id' => '1',
    'views' => '3061',
    'year' => '2020',
),
130 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/u41361s1.png" alt="Patrik Foilride 2021" width="512" height="512"></div>
<div class="col-9">
<p>Avec cette Foil Ride 145, Patrick signe son premier flotteur foil hors programme Race PWA ou Formula. Comme on ne se refait pas, l\'ADN du comp&eacute;titeur transpire quand m&ecirc;me nettement sur ce shape tr&egrave;s orient&eacute; performance.&nbsp;</p>
</div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '2',
    'created_at' => '2020-08-14 12:24:48',
    'id' => '150',
    'last_ip' => '2.4.9.46',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u41361s1-patrick-foil-ride-patrick-2021.html',
    'link_test' => NULL,
    'name' => 'FOIL RIDE 145',
    'price' => '2099.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'patrick-foil-ride-145-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-30 16:49:15',
    'user_id' => '1',
    'views' => '8233',
    'year' => '2021',
),
131 => 
array (
    'body' => '<p>s</p>',
    'brand_id' => '42',
    'category_id' => '1',
    'created_at' => '2020-09-15 15:28:33',
    'id' => '152',
    'last_ip' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'Phantom Proto 2',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'ga-phantom-proto-2021',
    'status' => 'Hidden',
    'updated_at' => '2020-09-15 15:32:38',
    'user_id' => '1',
    'views' => '5',
    'year' => '2021',
),
132 => 
array (
    'body' => '<p>j</p>',
    'brand_id' => '42',
    'category_id' => '1',
    'created_at' => '2020-09-15 15:30:33',
    'id' => '153',
    'last_ip' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'Phantom Présérie',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'ga-phantom-preserie-2021',
    'status' => 'Hidden',
    'updated_at' => '2020-09-15 15:30:33',
    'user_id' => '1',
    'views' => '1',
    'year' => '2021',
),
133 => 
array (
    'body' => '<p>j</p>',
    'brand_id' => '42',
    'category_id' => '1',
    'created_at' => '2020-09-15 15:32:25',
    'id' => '154',
    'last_ip' => NULL,
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
'name' => 'Phantom Proto 1 (marek)',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'ga-phantom-proto-1-marek-2021',
    'status' => 'Hidden',
    'updated_at' => '2020-09-15 15:33:18',
    'user_id' => '1',
    'views' => '3',
    'year' => '2021',
),
134 => 
array (
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
    'brand_id' => '100',
    'category_id' => '2',
    'created_at' => '2020-09-24 12:27:12',
    'id' => '157',
    'last_ip' => '85.208.96.196',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38908s1-starboard-foil-slalom-carbon-reflex-starboard-2021.html',
    'link_test' => NULL,
    'name' => 'SLALOM FOIL 91 CARBON REFLEX',
    'price' => '2899.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'starboard-slalom-foil-91-carbon-reflex-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-21 21:38:28',
    'user_id' => '1',
    'views' => '4379',
    'year' => '2021',
),
135 => 
array (
    'body' => '<p>Dans la s&eacute;rie mini-race, voici les FoilRide 105 et 125 ... des mod&egrave;les r&eacute;duits de la FoilRide 145 &agrave; tous les niveau. De spetits bijoux pour amateurs de foil en petite voile.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/811D3FF5-EF9B-40D5-B870-E82E1E2AB22E.jpg" alt="FoilRide 125" /></p>',
    'brand_id' => '77',
    'category_id' => '2',
    'created_at' => '2020-10-15 11:35:08',
    'id' => '159',
    'last_ip' => '185.251.206.74',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u41361s1-patrick-foil-ride-patrick-2021.html',
    'link_test' => NULL,
    'name' => 'FOILRIDE 105 & 125',
    'price' => '2099.00',
    'programme_end' => '6',
    'programme_start' => '2',
    'slug' => 'patrick-foilride-105-125-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-03 19:16:34',
    'user_id' => '1',
    'views' => '4716',
    'year' => '2021',
),
136 => 
array (
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
    'brand_id' => '123',
    'category_id' => '1',
    'created_at' => '2020-11-11 19:26:42',
    'id' => '160',
    'last_ip' => '135.181.3.228',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'E-FOIL CRUISING',
    'price' => '6799.00',
    'programme_end' => '3',
    'programme_start' => '1',
    'slug' => 'takuma-e-foil-cruising-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-25 23:07:17',
    'user_id' => '1',
    'views' => '3031',
    'year' => '2021',
),
137 => 
array (
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
    'brand_id' => '5',
    'category_id' => '2',
    'created_at' => '2020-11-21 20:24:50',
    'id' => '161',
    'last_ip' => '88.163.94.151',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'COMPACT FOIL 83',
    'price' => '1490.00',
    'programme_end' => '7',
    'programme_start' => '5',
    'slug' => 'ahd-compact-foil-83-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-07 08:01:03',
    'user_id' => '1',
    'views' => '9047',
    'year' => '2021',
),
138 => 
array (
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
    'brand_id' => '78',
    'category_id' => '3',
    'created_at' => '2020-12-13 11:23:37',
    'id' => '162',
    'last_ip' => '88.183.17.142',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'IRIS X MKII',
    'price' => NULL,
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'phantom-iris-x-mkii-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-31 06:52:26',
    'user_id' => '1',
    'views' => '5754',
    'year' => '2021',
),
139 => 
array (
    'body' => '<p>Fid&egrave;le &agrave; son sch&eacute;ma, pas de nouveau foil &agrave; part enti&egrave;re chez Starboard pour 2021, mais des nouvelles pi&egrave;ces qui permettent de faire &eacute;voluer les foils existants. On applaudit des 2 mains car cette solution permet d&rsquo;&eacute;viter une obsolescence de votre investissement.</p>
<p>Pour 2021, Starboard propose 3 nouveaux stabilisateurs, 2 ailes, 1 fuselage et 1 mat. Les mesures donn&eacute;es ci apr&egrave;s concerne le nouveau mat IQ 95 disponible en option &agrave; partir de Fevrier 2021.</p>',
    'brand_id' => '100',
    'category_id' => '1',
    'created_at' => '2020-12-17 20:17:52',
    'id' => '163',
    'last_ip' => '2.10.93.16',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'IQ 95 MAST, Ailes Slalom, Fuselage 105',
    'price' => NULL,
    'programme_end' => '10',
    'programme_start' => '6',
    'slug' => 'starboard-nouvelles-pieces-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-05 19:50:08',
    'user_id' => '1',
    'views' => '4787',
    'year' => '2021',
),
140 => 
array (
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
    'brand_id' => '3',
    'category_id' => '1',
    'created_at' => '2020-12-18 17:43:00',
    'id' => '164',
    'last_ip' => '54.36.149.31',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u45862s1-afs-afs-wind-95-afs-2022.html',
    'link_test' => NULL,
    'name' => 'WIND 95 V2',
    'price' => '2200.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'afs-wind-95-v2-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-07 10:02:22',
    'user_id' => '1',
    'views' => '8716',
    'year' => '2022',
),
141 => 
array (
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
</div>
<div class="container">
<div class="row">
<div class="col-6">
<p>M&eacute;mo : d&eacute;port des fuselages (avant fuselage &gt; avant du boitier de mat)</p>
<p>100STD (FR)- 342mm<br>100 Fr/slalom - 360mm<br>100+3 - 379mm<br>105+5 - 398mm<br>105-7.5 - 423mm<br>110cm std - 360mm<br>110+7 - 413mm<br>115 std - 330mm<br>115+6 - 390mm<br>115 +10 - 430mm<br>115+12 - 450mm</p>
</div>
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-08/f4-fuselages.jpg" alt="" width="1974" height="1860"></div>
</div>
</div>',
    'brand_id' => '35',
    'category_id' => '1',
    'created_at' => '2021-01-10 15:05:27',
    'id' => '168',
    'last_ip' => '185.191.171.13',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'SLALOM RACE EURO',
    'price' => '3050.00',
    'programme_end' => '10',
    'programme_start' => '5',
    'slug' => 'f4-race-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-06 08:46:06',
    'user_id' => '1',
    'views' => '12628',
    'year' => '2022',
),
142 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-01/starboard-foil-slalom.jpg" alt="Starboard Foil Slalom"></div>
<div class="col-lg-8">
<p>Je ne trahirai pas un grand secret en vous disant que le foil fait d&eacute;sormais partie du programme PWA, non plus en tant que discipline &agrave; part, mais en tant qu\'option lorsque chaque participant consid&egrave;re que ce mode de navigation lui correspond mieux compte tenu des conditions. La cons&eacute;quence, c\'est que le foil sera d&eacute;sormais utilis&eacute; exclusivement sur des parcours de slalom, donc sur des allures travers. En perdant la n&eacute;cessit&eacute; de g&eacute;n&eacute;rer un maximum de puissance pour remonter au vent, le design des flotteurs &eacute;volue naturellement, et chaque marque va donc propose des flotteurs adapt&eacute;s.</p>
<p>Le flotteur Starboard Slalom Foil 81 est donc un mod&egrave;le d&eacute;di&eacute; au foil slalom. Sa particularit&eacute;, c\'est une car&egrave;ne pinc&eacute;e, alors que l\'outline c&ocirc;t&eacute; pont est pratiquement carr&eacute; &agrave; l\'arri&egrave;re. Pour cette gamme, on a &eacute;videmment une constuction Reflex Carbone ... &nbsp;la plus haut de gamme (flotteur de course oblige).</p>
</div>
</div>
</div>',
    'brand_id' => '100',
    'category_id' => '2',
    'created_at' => '2021-02-07 22:14:37',
    'id' => '172',
    'last_ip' => '185.191.171.5',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => 'https://marseille.glissattitude.com/windfoil/u38908s1-starboard-foil-slalom-carbon-reflex-starboard-2021.html',
    'name' => 'SLALOM FOIL 81 CARBON REFLEX',
    'price' => '2899.00',
    'programme_end' => '8',
    'programme_start' => '6',
    'slug' => 'starboard-slalom-foil-81-carbon-reflex-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-04 03:08:03',
    'user_id' => '1',
    'views' => '3693',
    'year' => '2021',
),
143 => 
array (
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
    'brand_id' => '60',
    'category_id' => '1',
    'created_at' => '2021-03-07 20:09:52',
    'id' => '177',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u34705s1-loke-foil-windfoil-lk1-loke-foil-2019.html',
    'link_test' => NULL,
    'name' => 'LK1 PERFORMANCE',
    'price' => '2200.00',
    'programme_end' => '4',
    'programme_start' => '0.1',
    'slug' => 'lokefoil-lk1-performance-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-03 10:44:42',
    'user_id' => '1',
    'views' => '5723',
    'year' => '2021',
),
144 => 
array (
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
    'brand_id' => '56',
    'category_id' => '2',
    'created_at' => '2021-03-11 12:44:25',
    'id' => '178',
    'last_ip' => '77.130.249.75',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u42641s1-jp-australia-hydrofoil-racing-slalom-jp-australia-2021.html',
    'link_test' => NULL,
    'name' => 'HRDROFOIL SLALOM PRO',
    'price' => '2899.00',
    'programme_end' => '9',
    'programme_start' => '7',
    'slug' => 'jp-australia-hrdrofoil-slalom-pro-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-02 08:09:07',
    'user_id' => '1',
    'views' => '3318',
    'year' => '2021',
),
145 => 
array (
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
    'brand_id' => '69',
    'category_id' => '1',
    'created_at' => '2021-05-15 12:38:14',
    'id' => '180',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u42637s1-neil-pryde-flight-fr-sans-tete-neil-pryde-2021.html',
    'link_test' => NULL,
    'name' => 'FLIGHT FR',
    'price' => '1199.00',
    'programme_end' => '7',
    'programme_start' => '4',
    'slug' => 'neilpryde-flight-fr-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-08 09:15:19',
    'user_id' => '1',
    'views' => '4488',
    'year' => '2021',
),
146 => 
array (
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
    'brand_id' => '95',
    'category_id' => '3',
    'created_at' => '2021-06-10 13:23:12',
    'id' => '181',
    'last_ip' => '90.49.60.194',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u38332s1-severn-hyperglide-4-severn-2021.html',
    'link_test' => NULL,
    'name' => 'Hyperglide 4',
    'price' => '1100.00',
    'programme_end' => '10',
    'programme_start' => '7',
    'slug' => 'severne-hyperglide-4-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-22 22:06:45',
    'user_id' => '1',
    'views' => '3261',
    'year' => '2021',
),
147 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="http://windfoilfan.glissattitude.com/storage/photos/1/2022-04/windfoil-a1-sport-sl-850.png" alt="" width="600" height="600"></div>
<div class="col-9">
<p>L\'alpine Race SL est un foil compos&eacute; du mat Alpine A1 Race, avec une nouveau fuselage de 105, et les ailes de la s&eacute;rie regatta</p>
</div>
</div>
</div>',
    'brand_id' => '8',
    'category_id' => '1',
    'created_at' => '2021-06-14 14:07:32',
    'id' => '182',
    'last_ip' => '80.218.74.1',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'A1 RACE SL',
    'price' => '2499.00',
    'programme_end' => '7',
    'programme_start' => '5',
    'slug' => 'alpinefoil-a1-race-sl-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-27 19:25:27',
    'user_id' => '1',
    'views' => '3126',
    'year' => '2022',
),
148 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="img-fluid" src="/storage/photos/1/2021-06/bullet-windfoil-v1.jpg" alt="Patrik UHM Foil"></div>
<div class="col-lg-8">
<p>Je vous laisse vour reporter &agrave; la description du <a href="/devices/foil/zeeko-bullet-v1-2020">Zeeko Bullet</a> pour les &eacute;l&eacute;ments g&eacute;n&eacute;raux. Nous pr&eacute;sentons ici la version dite M40J de ce mod&egrave;le ... du nom du type de fibres de carbone utilis&eacute;es dans la construction du mat.&nbsp;</p>
<p>L\'utilisation du carbone dit M40J en remplacement du carbone dit T700 conf&egrave;re une rigidit&eacute; en flexion et torsion sup&eacute;rieure de l\'ordre de 25%. En terme d\'utilisation, cela modifie profond&eacute;ment le comportement ressenti du foil, pour une glisse plus pr&eacute;cise et plus fluide. L\'influance sur les performances n\'est pas directe puisque le g&eacute;om&eacute;trie est indentique. Par contre, la raideur inlue directement sur le contr&ocirc;le du foil, et par cons&eacute;quent sur la notion de confiance que le pilote va avoir. Bien &eacute;videmment, en se sentant plus en ma&icirc;trise, on pre,d plus de plaisir, et on va g&eacute;n&eacute;ralement plus vite.</p>
</div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '1',
    'created_at' => '2021-06-15 10:13:12',
    'id' => '183',
    'last_ip' => '54.36.149.40',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'SLALOM RACE UHM',
    'price' => '2499.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'zeeko-bullet-uhm-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-07 07:20:26',
    'user_id' => '1',
    'views' => '3267',
    'year' => '2022',
),
149 => 
array (
    'body' => '<p>Description</p>',
    'brand_id' => '77',
    'category_id' => '3',
    'created_at' => '2021-06-15 10:15:19',
    'id' => '184',
    'last_ip' => '65.108.75.167',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FOIL+',
    'price' => NULL,
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'patrick-foil-2021',
    'status' => 'Published',
    'updated_at' => '2024-08-21 18:15:37',
    'user_id' => '1',
    'views' => '1616',
    'year' => '2021',
),
150 => 
array (
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
    'brand_id' => '35',
    'category_id' => '1',
    'created_at' => '2021-08-01 00:00:00',
    'id' => '185',
    'last_ip' => '2.10.93.16',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FREERIDE CARBONE',
    'price' => '2115.00',
    'programme_end' => '4',
    'programme_start' => '1',
    'slug' => 'f4-freeride-carbone-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-05 20:56:49',
    'user_id' => '1',
    'views' => '3367',
    'year' => '2022',
),
151 => 
array (
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
    'brand_id' => '113',
    'category_id' => '3',
    'created_at' => '2021-10-14 11:10:48',
    'id' => '189',
    'last_ip' => '193.116.233.241',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u44815s1-xo-sail-fly-xo-sail-2022.html',
    'link_test' => NULL,
    'name' => 'FLY V2',
    'price' => '705.00',
    'programme_end' => '7',
    'programme_start' => '3',
    'slug' => 'xo-sail-fly-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-07 11:58:06',
    'user_id' => '1',
    'views' => '5576',
    'year' => '2022',
),
152 => 
array (
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
    'brand_id' => '78',
    'category_id' => '2',
    'created_at' => '2021-11-05 15:30:12',
    'id' => '190',
    'last_ip' => '90.12.154.207',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u45087s1-phantom-iris-x-mkii-board-phantom-2022.html',
    'link_test' => NULL,
    'name' => 'IRIS R MKII 85',
    'price' => '3049.00',
    'programme_end' => '9',
    'programme_start' => '7',
    'slug' => 'phantom-iris-r-85-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-05 15:42:21',
    'user_id' => '1',
    'views' => '4207',
    'year' => '2022',
),
153 => 
array (
    'body' => '<p>La voile de course foil !</p>',
    'brand_id' => '113',
    'category_id' => '3',
    'created_at' => '2021-11-06 17:57:20',
    'id' => '191',
    'last_ip' => '85.208.96.203',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'GOLD FOIL',
    'price' => '815.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'xo-sail-gold-foil-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-27 08:40:54',
    'user_id' => '1',
    'views' => '2210',
    'year' => '2022',
),
154 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_E6210.jpg" alt="Fanatic Stingray 130 LTD"></div>
<div class="col-9">
<p>La nouvelle Stingray LTD est disponible en deux tailles compactes de 115 et 130 litres et, pour la premi&egrave;re fois chez Fanatic, elle comble le foss&eacute; entre le wind foil et le wing foil. Vous r&ecirc;vez de naviguer en wing dans du vent l&eacute;ger et de basculer en windsurf si les conditions s&rsquo;am&eacute;liorent ou vice-versa en fonction de vos pr&eacute;f&eacute;rences : pas de probl&egrave;me, la Stingray Foil LTD est faite pour cela !</p>
<p>Compar&eacute;e &agrave; la Stingray HRS, le shape est encore plus compact et d&eacute;jauge encore plus t&ocirc;t et sans forcer. Gr&acirc;ce &agrave; son shape optimis&eacute; pour le foil, elle offre de grandes performances en freeride dans les deux disciplines. Elle se montre tr&egrave;s s&eacute;curisante, surtout pour les d&eacute;butants gr&acirc;ce &agrave; son large pads qui couvre toute la surface du pont. Gr&acirc;ce &agrave; ses nombreuses options de montage, la Stingray Foil LTD s&rsquo;adaptable &agrave; diff&eacute;rents types de foils, diff&eacute;rentes tailles de voiles ou niveaux d&rsquo;expertise. Il n\'a jamais &eacute;t&eacute; aussi facile et pratique d\'entrer dans l&rsquo;univers du foil.</p>
</div>
</div>
</div>',
    'brand_id' => '36',
    'category_id' => '2',
    'created_at' => '2021-11-09 20:58:14',
    'id' => '192',
    'last_ip' => '85.208.96.200',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'STINGRAY LTD 130',
    'price' => NULL,
    'programme_end' => '4',
    'programme_start' => '2',
    'slug' => 'fanatic-stingray-ltd-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-06 20:27:03',
    'user_id' => '1',
    'views' => '2490',
    'year' => '2022',
),
155 => 
array (
    'body' => '<p>nc.</p>',
    'brand_id' => '100',
    'category_id' => '1',
    'created_at' => '2021-11-16 19:30:06',
    'id' => '196',
    'last_ip' => '89.142.194.151',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => '95 carbone C600',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'starboard-carbone-95-c600-97-2022',
    'status' => 'Hidden',
    'updated_at' => '2024-09-08 17:18:13',
    'user_id' => '1',
    'views' => '616',
    'year' => '2022',
),
156 => 
array (
    'body' => '<p>Aile 900</p>
<p>epaisseur 13,7</p>
<p>corde 12,5</p>
<p>Stab 400</p>
<p>epaisseir 7,2</p>
<p>corde 6,3</p>',
    'brand_id' => '69',
    'category_id' => '1',
    'created_at' => '2022-03-21 08:46:47',
    'id' => '215',
    'last_ip' => '88.163.167.153',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'SLR',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'neilpryde-slr-2022',
    'status' => 'Hidden',
    'updated_at' => '2022-05-08 18:23:25',
    'user_id' => '5',
    'views' => '27',
    'year' => '2022',
),
157 => 
array (
    'body' => '<p>Le foil slalom de la marque Z Fin pour la saison 2022</p>',
    'brand_id' => '117',
    'category_id' => '1',
    'created_at' => '2022-03-21 08:49:15',
    'id' => '216',
    'last_ip' => '52.167.144.181',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'Z FIN SLALOM',
    'price' => NULL,
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'z-fin-slalom-2022',
    'status' => 'Hidden',
    'updated_at' => '2024-07-08 08:01:17',
    'user_id' => '5',
    'views' => '384',
    'year' => '2022',
),
158 => 
array (
    'body' => '<p>&Agrave; l&rsquo;occasion de la journ&eacute;e test &agrave; Bombannes, nous avons enfin pu essayer les deux voiles Patrik S2 et SF dans des situations strictement identiques : m&ecirc;me flotteur, m&ecirc;me foil, m&ecirc;me plan d\'eau, m&ecirc;me vent. C&rsquo;est un test int&eacute;ressant, car il permet de r&eacute;aliser</p>
<ul>
<li>La pertinence d&rsquo;avoir un gr&eacute;ement commun pour l&rsquo;aileron et le foil</li>
<li>L&rsquo;apport r&eacute;el d&rsquo;un design sp&eacute;cifique pour le foil</li>
</ul>
<h3>On commence donc par la SF</h3>
<div class="row">
<div class="col-lg-8">
<p>Au pumping, la pr&eacute;sence sous la main arri&egrave;re permet un mouvement tr&egrave;s efficace. On sent tr&egrave;s rapidement l\'appui dans le wishbone. Le gr&eacute;ement est plut&ocirc;t raide, donc demande une condition physique adapt&eacute;e pour &ecirc;tre efficace.</p>
<p>En comparaison avec les voiles d&eacute;di&eacute;es dont nous avons l&rsquo;habitude, on note imm&eacute;diatement, une fois lanc&eacute;e, une pression relativement importante dans le wishbone, et cette derni&egrave;re s\'accentue au fur et &agrave; mesure que l&rsquo;on acc&eacute;l&egrave;re.</p>
<p>Aux allures portantes, la voile d&eacute;livre une puissance tr&egrave;s g&eacute;n&eacute;reuse qui peut au choix :</p>
<ul>
<li>donner un bon coup de pied aux fesses pour aller chercher de la V Max si on sait s\'accrocher</li>
<li>g&ecirc;ner ce qui ont pris l&rsquo;habitude de voile plus neutre dans la main arri&egrave;re, et qui peuvent avoir du mal &agrave; g&eacute;rer la d&eacute;stabilisation provoqu&eacute;e par cette puissance</li>
</ul>
<p>Aux allures serr&eacute;es, l&rsquo;efficacit&eacute; est en retrait car la main arri&egrave;re devient inutile et plut&ocirc;t contre-productive. Par ailleurs, la voile manque d\'acc&eacute;l&eacute;ration en comparaison avec la S2.</p>
</div>
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/RACE_SF_v1.jpg" alt=""></div>
</div>
<p>Pour autant, m&ecirc;me dans les rafales, on sent que le creux ne recule pratiquement pas, et la voile reste donc contr&ocirc;lable. C&rsquo;est juste notre efficacit&eacute; qui est en retrait car la gestion de la puissance tr&egrave;s g&eacute;n&eacute;reuse peut poser probl&egrave;me. En comparaison avec les voiles d&eacute;di&eacute;es, la voile a &eacute;galement plus tendance &agrave; plaquer le flotteur vers le bas dans les rafales et provoquer des touchettes.</p>
<p>Au jibe , La propret&eacute; du passage des cambers surprend en comparaison avec le c&ocirc;t&eacute; plut&ocirc;t rigide et sportif de la voile. &Ccedil;a passe en une fois, sans s&rsquo;arracher l&rsquo;&eacute;paule, m&ecirc;me si il faut quand m&ecirc;me un mouvement un peu sec. Dans des conditions light, c\'est du coup plus compliqu&eacute; et il faut souvent aider le profil &agrave; passer &agrave; d&eacute;faut de ne pas avoir la tonicit&eacute; d\'un comp&eacute;titeur. En terme de maniabilit&eacute;, le poids ressenti et la rigidit&eacute; du gr&eacute;ement n\'aide pas le jibe non plus.</p>
<h3>Passons &agrave; la S2</h3>
<div class="row">
<div class="col-lg-8">
<p>Avec la m&ecirc;me surface, et les m&ecirc;mes conditions de vent, le pumping est plus technique. Cette fois, il est plus difficile d&rsquo;utiliser l&rsquo;appui dans la main arri&egrave;re pour propulser la planche, et on va essentiellement travailler avec l\'effet r&eacute;flex du mat, en s&rsquo;appuyant sur le haut de la voile qui ouvre moins.&nbsp;Pour tous ceux qui sont habitu&eacute;s aux voiles d&eacute;di&eacute;es, ce n&rsquo;est pas une d&eacute;couverte. Pour les autres, il faudra &eacute;videmment un temps d&rsquo;adaptation avant de retrouver la m&ecirc;me efficacit&eacute; qu&rsquo;avec une voile traditionnelle. En passant d\'une voile &agrave; l\'autre, la diff&eacute;rence est flagrante.</p>
<p>Comme avec la SF, on note un gr&eacute;ement plut&ocirc;t raide, avec un poids ressenti &eacute;lev&eacute; pour une 7m .. cela nous rappelle imm&eacute;diatement qu\'il s\'agit d\'une voile de course et que le choix du concepteur est all&eacute; vers des mat&eacute;riaux robustes, donc plus lourds que notre voile de r&eacute;f&eacute;rence (Hyperglide 4). Le pumping est donc physique, mais si vous en avez (du physique), l\'efficacit&eacute; est au rendez vous avec une propulsion quasi imm&eacute;diate.&nbsp;</p>
<p>Une fois en l&rsquo;air, l&rsquo;acc&eacute;l&eacute;ration est progressive sans aucun effet de d&eacute;placement du creux vers l&rsquo;arri&egrave;re, ni de pression dans la main arri&egrave;re. En comparaison, la SF propulse avec une acc&eacute;l&eacute;ration plus franche et imm&eacute;diate.</p>
</div>
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/JMC_5777.jpg" alt="" width="1000" height="1000"></div>
</div>
<p>Une fois la vitesse de croisi&egrave;re atteinte, la S2 r&eacute;v&egrave;le tout son potentiel avec une propulsion soutenue et r&eacute;guli&egrave;re. La pression dans la main arri&egrave;re reste minimale et la vitesse de croisi&egrave;re atteinte semble un peu "magique". Par rapport &agrave; la SF, la stabilit&eacute; longitudinale est bien meilleure : la voile n\'a plus tendance &agrave; plaquer la planche lorsque l\'on s\'appuie dans le wish.</p>
<p>Quand on lofe pour serrer l\'allure, la magie op&egrave;re de fa&ccedil;on encore plus &eacute;vidente. Cette fois, on a une p&eacute;n&eacute;tration dans l\'air tout &agrave; fait impressionnante. On a l\'impression d\'avoir un fil &agrave; couper le beurre en main, signe d\'une a&eacute;rodynamique exceptionnelle. On avait d&eacute;j&agrave; eu un aper&ccedil;u de cette sensation sur la S+ l\'an pass&eacute;, mais la voile avait trop d\'inconv&eacute;nients &agrave; mes yeux pour faire appr&eacute;cier cette glisse &agrave; sa juste valeur. Cette fois, la balance penche de l\'autre c&ocirc;t&eacute; et le plaisir est au rendez vous. <br><br>&Agrave; l&rsquo;amorce de l&rsquo;empannage, la rigidit&eacute; et le poids de la voile se rapellent &agrave; notre bon souvenir, et la man&oelig;uvre est relativement physique, m&ecirc;me si on a tr&egrave;s largement gagn&eacute; par rapport au mod&egrave;le Foil+ test&eacute; l\'&eacute;t&eacute; dernier. &nbsp;Le passage des cambers est plut&ocirc;t viril, mais il passe en un coup et proprement. Il ne reste jamais "bloqu&eacute; entre 2" comme sur un nombre non n&eacute;gligeable de voiles d&eacute;di&eacute;es.</p>
<h3>Bilan</h3>
<p>Cette comparaison &eacute;tait ultra int&eacute;ressante car il est rare de pouvoir &eacute;valuer les apports et inconv&eacute;nients d\'une voile d&eacute;di&eacute;e. Le fait que les 2 voiles aient &eacute;t&eacute; dev&eacute;lopp&eacute;es par la m&ecirc;me &eacute;quipe &eacute;tait un point capital pour que notre jugement porte uniquement sur la fonction et non sur le feeling propre &agrave; la marque.</p>
<p>Au global, la S2 est &eacute;videmment la voile la plus int&eacute;ressante en utilisation foil. C\'est celle qui offre les meilleurs performances moyennes et le plus grand confort de navigation. En dehors de la comparaison des 2 voiles, cette S2 m\'a litt&eacute;rement bluff&eacute;e par son c&ocirc;t&eacute; ultra p&eacute;n&eacute;trant et efficace au pr&egrave;s !</p>
<p>La SF utilis&eacute;e en foil r&eacute;v&egrave;le un visage plus contrast&eacute; : l\'agr&eacute;ement, la stabilit&eacute;, l\'&eacute;quilibre longitudinal, les performances moyenne au pr&egrave;s sont en retrait par rapport &agrave; la S2. Par contre, elle est plus facile au pumping pour les utilisateurs ne connaissant pas les voiles d&eacute;di&eacute;es, et se r&eacute;v&eacute;le int&eacute;ressante pour taper de la VMax aux allures abattues.</p>
<p>Alors SF ou S2 ? Si vous &ecirc;tes addict du foil, y a pas photo : ce serait dommage de passer &agrave; c&ocirc;t&eacute; de l\'apport subtentiel de la S2. Par contre, si vous pratiquez les 2 disciplines, et faites de la comp&eacute;tition en programme slalom (essentiellement travers), le c&ocirc;t&eacute; agr&eacute;ement et plaisir passera peut &ecirc;tre en second plan sachant que votre niveau technique compensera en partie les moins bien. Dans ce cas, la SF vous permettra de n\'avoir qu\'en jeu de voile (au moins pour les petites surfaces) tr&egrave;s efficace et p&ecirc;chue pour d&eacute;boiter quand il faut.</p>
<p>Pour le reste, le feeling des 2 voiles est coh&eacute;rent : ce sont des voiles qui ne peuvent cacher leur ADN 100% course. Ce sont des voiles tr&egrave;s abouties (gros travail de d&eacute;veloppement), diablement efficaces, mais physiques, et viriles. Bref , r&eacute;serv&eacute;es aux experts entrain&eacute;s. Pour les navigateurs occasionels qui cherchent confort et l&eacute;g&egrave;ret&eacute;, ou ceux qui h&eacute;sitent entre freerace ou course, passez votre chemin. &nbsp;</p>
<p>&nbsp;</p>',
    'brand_id' => '77',
    'category_id' => '3',
    'created_at' => '2022-04-17 21:05:50',
    'id' => '217',
    'last_ip' => '92.92.18.22',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FOIL S2 vs SF',
    'price' => NULL,
    'programme_end' => '8',
    'programme_start' => '7',
    'slug' => 'patrick-foil-s2-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-29 07:32:51',
    'user_id' => '1',
    'views' => '1898',
    'year' => '2022',
),
159 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/Foil-comp_V2_transparent.png" alt="PATRIK FOIL COMP V2" width="654" height="654"></div>
<div class="col-6">
<p>La nouvelle version du flotteur FOIL de course chez Patrick. Cette version 2022 a &eacute;t&eacute; adapt&eacute;e au nouveau format de course qui privil&eacute;gie les allures travers.</p>
<section class="av_textblock_section ">
<div class="avia_textblock  ">
<h4>Donn&eacute;es constructeur</h4>
</div>
</section>
<div class="avia-data-table-wrap avia_scrollable_table">
<table class="avia-table avia-data-table avia-table-1 avia-builder-el-24 el_after_av_textblock el_before_av_hr avia_pricing_default">
<tbody>
<tr class="">
<th class="avia-desc-col">&nbsp;</th>
<td class="avia-center-col">Length<br>[mm]</td>
<td class="avia-center-col">Width<br>[mm]</td>
<td class="avia-center-col">Volume<br>[litre]</td>
<td class="avia-center-col">Weight<br>(+/-6%)<br>[kg]</td>
<td class="avia-center-col">Strap<br>Options &amp;<br>Insert Holes</td>
<td class="avia-center-col">Strap<br>Quantity</td>
<td class="avia-center-col">Fin Box</td>
</tr>
<tr class="">
<th class="avia-desc-col">FOIL-COMP 78</th>
<td class="avia-center-col">2090</td>
<td class="avia-center-col">780</td>
<td class="avia-center-col">145</td>
<td class="avia-center-col">8,3</td>
<td class="avia-center-col">6&times;6</td>
<td class="avia-center-col">4</td>
<td class="avia-center-col">Deep Tuttle Foil Box</td>
</tr>
<tr class="">
<th class="avia-desc-col">FOIL-COMP 85</th>
<td class="avia-center-col">2090</td>
<td class="avia-center-col">850</td>
<td class="avia-center-col">165</td>
<td class="avia-center-col">8,5</td>
<td class="avia-center-col">6&times;6</td>
<td class="avia-center-col">4</td>
<td class="avia-center-col">Deep Tuttle Foil Box</td>
</tr>
<tr class="">
<th class="avia-desc-col">FOIL-COMP 91 V2</th>
<td class="avia-center-col">2120</td>
<td class="avia-center-col">907</td>
<td class="avia-center-col">195</td>
<td class="avia-center-col">8,9</td>
<td class="avia-center-col">6X6</td>
<td class="avia-center-col">4</td>
<td class="avia-center-col">Deep Tuttle Foil Box</td>
</tr>
<tr class="">
<th class="avia-desc-col">FOIL-COMP 100 V2</th>
<td class="avia-center-col">2120</td>
<td class="avia-center-col">1002</td>
<td class="avia-center-col">220</td>
<td class="avia-center-col">9,5</td>
<td class="avia-center-col">6X6</td>
<td class="avia-center-col">4</td>
<td class="avia-center-col">Deep Tuttle Foil Box</td>
</tr>
</tbody>
</table>
</div>
<div class="hr hr-custom hr-center hr-icon-no   avia-builder-el-25  el_after_av_table  avia-builder-el-last ">&nbsp;</div>
</div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '2',
    'created_at' => '2022-04-17 21:16:46',
    'id' => '218',
    'last_ip' => '185.191.171.10',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u45799s1-patrick-foil-comp-patrick-2022.html',
    'link_test' => NULL,
    'name' => 'FOIL COMP 85',
    'price' => '2999.00',
    'programme_end' => '8',
    'programme_start' => '6',
    'slug' => 'patrick-foil-comp-85-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-04 09:59:03',
    'user_id' => '1',
    'views' => '2203',
    'year' => '2022',
),
160 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-3"><img class="cms-img-fluid" src="/storage/photos/1/2022-04/I-Grande-108128-foil-wing-ga-sails-hybrid-alu-mat-85cm-hp.net.jpg" alt="" width="700" height="700"></div>
<div class="col-9">
<p>Le GA Hybrid alu, c\'est le foil de tous les jours. Optimis&eacute; pour le windfoil, ce foil d&eacute;colle t&ocirc;t et est incroyablement stable et tr&egrave;s rassurant grace &agrave; son aile de 1400 qui offre une vitesse tr&egrave;s lin&eacute;aire.</p>
<p>Con&ccedil;u pour les petites voiles et planches de freeride, il est &agrave; l\'aise &agrave; toutes les allures, au pr&egrave;s comme au portant. C\'est une plateforme stable et pr&eacute;visible con&ccedil;ue pour des balades agr&eacute;ables en contr&ocirc;le. Il est parfait pour l\'apprentissage ou l\'exp&eacute;rimentation de toutes les manoeuvres. Grace &agrave; ses capacit&eacute;s &agrave; rester en l\'air avec tyr&egrave;s peu de vitesse, il vous aidera &agrave; passer vos jibe en l\'air &agrave; chaque coup.</p>
</div>
</div>
</div>',
    'brand_id' => '42',
    'category_id' => '1',
    'created_at' => '2022-04-19 00:56:49',
    'id' => '219',
    'last_ip' => '185.191.171.16',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u46229s1-starboard-hybrid-alu-free-1500-starboard-2022.html',
    'link_test' => NULL,
    'name' => 'HYBRID ALU FREE',
    'price' => '1159.00',
    'programme_end' => '3',
    'programme_start' => '1',
    'slug' => 'ga-hybrid-alu-free-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-26 02:37:11',
    'user_id' => '1',
    'views' => '785',
    'year' => '2022',
),
161 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-04/022-Severne-Predator-render-wide-gray-background.jpg" alt="Severne Predator 2022" width="600" height="600"></div>
<div class="col-6">
<p>La Predator est un flotteur d&eacute;di&eacute;e au foil. Plus agressif que l\'Alien, il est con&ccedil;u pour carver, sauter et pivoter sur le foil.</p>
<p>Disponible en 3 tailles pour s\'adapter au gabarit du rider. La longueur tr&egrave;s courte sur toutes les tailles permet de r&eacute;duire la portance n&eacute;cessaire pour le maintenir en vol et &eacute;galement d&rsquo;augmenter la maniabilit&eacute;. La construction haut de gamme maintient le poids nettement en dessous de la norme de l\'industrie pour une performance r&eacute;elle.</p>
<p>Con&ccedil;u pour &ecirc;tre utilis&eacute;e avec les deux pieds dans les straps pendant les manoeuvres, ou avec le pied arri&egrave;re en dehors dans le baston. L&rsquo;unique strap arri&egrave;re centr&eacute; permet au rider de maintenir son poids directement au dessus du foil lorsqu\'il saute ou charge le foil, et r&eacute;duit consid&eacute;rablement l\'effet de levier et les risques de casse. La connection DTT avec le foil &eacute;t&eacute; choisi pour la fiabilit&eacute;, la coh&eacute;rence et la facilit&eacute; d\'utilisation. Les inserts et les bo&icirc;tiers superflus ont &eacute;t&eacute; &eacute;limin&eacute;s, ce qui augmente la simplicit&eacute; et r&eacute;duit le poids.</p>
<p>Associez le Predator avec un FoilFreek pour le combo ultime !</p>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '2',
    'created_at' => '2022-04-25 18:20:30',
    'id' => '220',
    'last_ip' => '194.152.11.80',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'PREDATOR 95',
    'price' => '2519.00',
    'programme_end' => '3',
    'programme_start' => NULL,
    'slug' => 'severne-predator-95-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-08 06:07:07',
    'user_id' => '1',
    'views' => '2173',
    'year' => '2022',
),
162 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-04/I-Grande-90045-foil-windsurf-severne-redwing-2022.net.jpg" alt="" width="700" height="700"></div>
<div class="col-8">
<p>Ce foil facile d\'acc&egrave;s vous donnera un maximum de plaisir en navigation, en toute s&eacute;curit&eacute;. Equip&eacute; d\'un talon deep tuttle &eacute;quip&eacute; d\'une platine de soutien, ce foil s\'adaptera sans probl&egrave;me sur toutes les planches &eacute;quip&eacute;es d\'un boitier tuttle.<br><br><u>S&eacute;curit&eacute; :</u><br>Tous les bouts d\'ailes ont des extr&eacute;mit&eacute;s arrondies et sont courb&eacute;s vers le bas, loin des pieds.<br>Les &eacute;tuis d\'ailes sont con&ccedil;us pour rester en place pendant l\'installation, ce qui minimise les accidents sur terre.<br>Le m&acirc;t de 90 cm est polyvalent, minimisant &agrave; la fois les touchettes et le d&eacute;crochage. <br><br><u>Simplicit&eacute; :</u><br>Seulement 2 types de vis diff&eacute;rents - des courtes pour les ailes, et des longues pour le m&acirc;t.<br>Un seul outil n&eacute;cessaire. La cl&eacute; allen de 5 mm a &eacute;t&eacute; choisie pour sa fiabilit&eacute; &agrave; long terme.<br>Les connexions entre le fuselage/m&acirc;t et le fuselage/l\'aile avant sont profil&eacute;es pour un embo&icirc;tement parfait et une rigidit&eacute; optimis&eacute;e de l\'ensemble.<br><br><u>Fiabilit&eacute; :</u><br>En vol, vous ne voulez pas que l\'aile avant bouge sous vos pieds. La rigidit&eacute; est la cl&eacute; pour maintenir les ailes dans une position fixe. La rigidit&eacute; vous permet de vous verrouiller et de faire du windsurf sur le foil, plut&ocirc;t que de se battre avec lui.<br>La g&eacute;om&eacute;trie du m&acirc;t maximise la rigidit&eacute;. 19mm d\'&eacute;paisseur x 145mm de largeur. Beaucoup plus rigide longitudinalement et en torsion que la plupart des m&acirc;t en carbone.<br>L\'embout du fuselage se verrouille dans le m&acirc;t.&nbsp;Le fuselage utilise des sections droites pour la stabilit&eacute; directionnelle et pour maximiser le rapport r&eacute;sistance/poids.<br><br><u>Performance :</u><br>Assez facile pour vos premiers vols, le foil RedWing est assez fun pour vous faire faire des empannages, des 360 et plus encore. La vitesse de croisi&egrave;re est fix&eacute;e &agrave; 20 noeuds pour des performances de foil freeride.<br>L\'aile avant de 1400cm/2 a assez de surface pour g&eacute;rer les man&oelig;uvres &agrave; basse vitesse tout en &eacute;tant assez rapide. Son envergure de 76 cm est adapt&eacute;e aux planches de freeride plus &eacute;troites de 65 &agrave; 85 cm.<br>Un fuselage plus long de 95cm augmente la stabilit&eacute; en tangage et permet de moins se concentrer sur le r&eacute;glage du foil.<br><br></p>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '1',
    'created_at' => '2022-04-28 14:12:54',
    'id' => '221',
    'last_ip' => '92.161.50.35',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'REDWING',
    'price' => '1098.00',
    'programme_end' => '3',
    'programme_start' => '1',
    'slug' => 'severne-redwing-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-07 07:12:25',
    'user_id' => '1',
    'views' => '1289',
    'year' => '2022',
),
163 => 
array (
'body' => '<p>Challenger Force one&nbsp;<br>En statique&nbsp;<br>Mat : 100% Challenger 460 SDM&nbsp;<br>La chute de la voile ouvre tr&egrave;s vite avant m&ecirc;me d&rsquo;atteindre la tension pr&eacute;conis&eacute;e atteinte&nbsp;<br>Avec la tension nominale appliqu&eacute;e, on a une voile plut&ocirc;t tr&egrave;s creuse au niveau du wish, et tr&egrave;s ouverte sur la chute, de fa&ccedil;on tr&egrave;s similaire &agrave; une voile de slalom. C&rsquo;est tr&egrave;s diff&eacute;rent de ce que l&rsquo;on peut observer sur les voiles concurrentes (Phantom IRIS X, Phantom IRIS RF, Severne Hyperglide 4, GA Vapor Air, Severne GoilGlide, XO Fly, NP V8 Flight et NP RS Flight Evo, &hellip;)&nbsp;<br>Au niveau outline, la voile se distingue aussi des autres mod&egrave;les d&eacute;di&eacute;s avec un longueur de wish importante pour une 7m (210 contre 190 par ex sur une HG4) , un guidant assez court (476 contre 492 sur une HG4), et une t&ecirc;te assez large.&nbsp;</p>
<p><br>Conditions du test : Almanarre , plan d&rsquo;eau plat, vent 10-18 knt. Comparaison avec IRIS X 7m, Hyperglide 4 7m et Challenger Aero+ (2 bords)&nbsp;</p>
<p><br>Au pumping&nbsp;<br>La voile se caract&eacute;rise par une souplesse assez marqu&eacute;e dans le haut du gr&eacute;ement et peu de nervosit&eacute;. Cela donne une impression de lourdeur et d&rsquo;inertie compar&eacute;e aux mod&egrave;les plus nerveux dans la m&ecirc;me taille (en particulier NP, Phantom et Severne). On retrouve par contre une sensation analogue &agrave; ce que l&rsquo;on avait ressenti sur les voiles GA Sails.&nbsp;</p>
<p><br>La longueur de wish importante et le creux permettent malgr&eacute; tout d&rsquo;avoir une certaine efficacit&eacute; pour offrir une acc&eacute;l&eacute;ration rapide. On sent que la puissance vient du bas de la voile, et non de l&rsquo;effet dynamique de la t&ecirc;te de la voile.&nbsp;</p>
<p><br>Dans la plage de vent optimale , en mode crusing&nbsp;<br>La Force One est &eacute;quilibr&eacute;e et agr&eacute;able dans sa plage de vent. Aux allures serr&eacute;es, on a une bonne p&eacute;n&eacute;tration dans le vent, et une bonne vitesse au pr&egrave;s, avec beaucoup de coffre dans le bas de la voile. On a une position assez pied arri&egrave;re, un peu comme avec les voiles de slalom. La voile a tendance &agrave; plaquer le foil, et on n&rsquo;a donc pas besoin d&rsquo;ajouter du poids devant contrairement &agrave; la plupart des autres voiles de foil.&nbsp;</p>
<p><br>Les phases d&rsquo;acc&eacute;l&eacute;ration sont fluides et efficaces gr&acirc;ce &agrave; un appui assez marqu&eacute; main arri&egrave;re, et de l&rsquo;inertie. Elle permet de g&eacute;rer facilement les refusantes car on a toujours de l&rsquo;appui dans le wish&nbsp;</p>
<p><br>En plage basse&nbsp;<br>La voile &eacute;tant plut&ocirc;t puissante, on a plut&ocirc;t une allonge sup&eacute;rieure &agrave; la moyenne pour passer les molles avec un appui cons&eacute;quent. Par contre, on sent une vraie lourdeur d&egrave;s que l&rsquo;on passe dans les molles, et il faut compenser avec un appui pied arri&egrave;re plus marqu&eacute; pour compenser la tendance &agrave; plaquer la planche vers l&rsquo;eau. C&rsquo;est encore plus sensible si on essaye de pomper pour relancer. L&rsquo;inertie devient alors assez peu agr&eacute;able.&nbsp;</p>
<p><br>Dans les manoeuvres&nbsp;<br>Dans les jibes, l&rsquo;encombrement et l&rsquo;inertie de la voile sont tr&egrave;s sensibles au regard de la concurrence, et m&ecirc;me inhabituels pour une voile free-race. Elle est ainsi m&ecirc;me plus encombrante et moins maniable qu&rsquo;une hyperglide 4 qui a pourtant un fourreau 2 fois plus large, et 4 cambers. En comparaison avec les autres freerace (V8 Flight, IRIS X), on est carr&eacute;ment dans une autre dimension.&nbsp;<br>Par contre, les cambers passent en une fois et sans forcer. A vrai dire on les oublie compl&egrave;tement dans le jibe, et la r&eacute;-acc&eacute;l&eacute;ration en sortie de jibe est tr&egrave;s intuitive.&nbsp;</p>
<p><br>En plage haute&nbsp;<br>C&rsquo;est le point le moins agr&eacute;able de cette voile : La Force One est loin d&rsquo;&ecirc;tre facile &agrave; g&eacute;rer dans les rafales. Elle devient tr&egrave;s p&ecirc;chue avec pas mal de main arri&egrave;re. Si on r&eacute;agit en lofant, c&rsquo;est assez facile &agrave; g&eacute;rer grace &agrave; sa bonne p&eacute;n&eacute;tration dans le vent, et on garde une excellente vitesse.&nbsp;<br>Si on souhaite conserver le m&ecirc;me cap ou abattre, la voile devient surpuissante et a une forte tendance &agrave; faire lifter la planche et le foil. En contre partie, cette surpuissance permet d&rsquo;avoir de fortes acc&eacute;l&eacute;rations , si on n&rsquo;a pas lev&eacute; le pied pour ne pas s&rsquo;envoler. En comparaison, l&rsquo;Aero Foil Course et tr&egrave;s nettement plus agr&eacute;able et facile &agrave; g&eacute;rer dans ces conditions (test&eacute;e sur 2 bords dans les m&ecirc;mes conditions).&nbsp;</p>
<p><br>Bilan g&eacute;n&eacute;ral&nbsp;</p>
<p><br>Le Force one est une voile p&ecirc;chue qui se d&eacute;marque de la concurrence dans la cat&eacute;gorie foil, avec une lourdeur et un encombrement m&ecirc;me bien sup&eacute;rieurs &agrave; certaines voiles de foil course ! Le contr&ocirc;le dans la plage haute est &eacute;galement plus complexe que la moyenne, mais la grosse r&eacute;serve de puissance permet des grosses acc&eacute;l&eacute;rations (genre coup de pied au cul). Bref, potentiellement tr&egrave;s rapide mais pas tr&egrave;s agr&eacute;able &agrave; naviguer au regard de la voile de course de la marque, et de la concurrence en freerace.&nbsp;</p>',
    'brand_id' => '20',
    'category_id' => '3',
    'created_at' => '2022-04-29 23:34:12',
    'id' => '222',
    'last_ip' => '185.191.171.8',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FORCE ONE',
    'price' => NULL,
    'programme_end' => '7',
    'programme_start' => '4',
    'slug' => 'challenger-force-one-2022',
    'status' => 'Hidden',
    'updated_at' => '2024-08-26 11:28:07',
    'user_id' => '1',
    'views' => '225',
    'year' => '2022',
),
164 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-05/IMG_8999.jpg" alt=""></div>
<div class="col-6">
<p>Wishbone 100% carbone monocoque custom</p>
<p>Tarif : 1690 avec palan interne, 1550 avec palan externe.&nbsp;</p>
<p>Plage de r&eacute;glage : 45cm pour toutes les tailles au dessus de 170-215</p>
<p>Pour les tailles plus petites&nbsp;</p>
<ul>
<li>150-175</li>
<li>155-185</li>
<li>160-195</li>
<li>165-205</li>
</ul>
<p>Customisation (en plus de la longueur) : 3 largeur de ceintre, 4 largeus de poign&eacute;e arri&egrave;re</p>
</div>
</div>
</div>',
    'brand_id' => '57',
    'category_id' => '3',
    'created_at' => '2022-05-08 18:28:11',
    'id' => '223',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'Race T1000 175-220 Boom',
    'price' => '1690.00',
    'programme_end' => '10',
    'programme_start' => '5',
    'slug' => 'lisa-race-t1000-175-220-boom-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-08 09:13:43',
    'user_id' => '1',
    'views' => '2652',
    'year' => '2022',
),
165 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/u46478s1.jpg" alt="tabou Air ride LTD" width="800" height="800"></div>
<div class="col-6">
<p>Nouvelle version de la AIR RIDE</p>
</div>
</div>
</div>',
    'brand_id' => '104',
    'category_id' => '2',
    'created_at' => '2022-05-24 13:24:21',
    'id' => '224',
    'last_ip' => '77.130.249.90',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'AIRRIDE LTD 87',
    'price' => '2099.00',
    'programme_end' => '9',
    'programme_start' => '6',
    'slug' => 'tabou-airride-ltd-87-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-02 04:15:13',
    'user_id' => '1',
    'views' => '1084',
    'year' => '2022',
),
166 => 
array (
    'body' => '<p>hgghj</p>',
    'brand_id' => '42',
    'category_id' => '3',
    'created_at' => '2022-05-24 14:21:49',
    'id' => '225',
    'last_ip' => '66.249.66.86',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'PHANTOM AIR 6.7',
    'price' => '1099.00',
    'programme_end' => '8',
    'programme_start' => '6',
    'slug' => 'ga-phantom-air-67-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-05 04:26:27',
    'user_id' => '1',
    'views' => '1217',
    'year' => '2022',
),
167 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-05/IMG_9384.jpeg" alt="Halo -Harness"></div>
<div class="col-6">
<p>Le Halo est le tout dernier harnais de la marque Manera (Fone). Il regroupe toutes les derni&egrave;res technologies de la marque. Il a &eacute;t&eacute; con&ccedil;u sans coutures ni collage afin de pouvoir remplacer chaque pi&egrave;ces sans difficult&eacute; ! Sa sp&eacute;cificit&eacute; est de r&eacute;duire au maximum les &eacute;l&eacute;ments "superflux" d\'un harnais standard en rempla&ccedil;ant la coque par un arc rigide arri&egrave;re qui va encaisser l\'ensemble des efforts de tractions et d\'apporter un confort in&eacute;galable !<br>&nbsp;<br>Morphologie&nbsp;<br>Ce harnais est dot&eacute; de l\'adaptative skin, une bande faite &agrave; l\'aide de mat&eacute;riaux flexible qui permet d\'envelopper l\'utilisateur et lui apporter un confort et une libert&eacute; de mouvement maximale.<br>&nbsp;<br>Sizing Parfait&nbsp;<br>Les mod&egrave;le S+ et M+ &nbsp;sont dot&eacute;s de barre d\'&eacute;cartement plus longues, id&eacute;ales pour les personnes poss&eacute;dant des hanches plus larges.<br>&nbsp;<br>Confort&nbsp;<br>Un arc rigide emp&ecirc;che le harnais de se plier ou de se d&eacute;former avec la force du vent, pr&eacute;servant ainsi les c&ocirc;tes de l\'utilisateur de toute pression inconfortable.<br>Il est construit avec un noyau robuste en acier inoxydable capable de r&eacute;sister &agrave; des pression de plus de 800kg !<br>&nbsp;<br>Pr&eacute;cision<br>Un syst&egrave;me de clipsage de la barre a &eacute;t&eacute; ajout&eacute; pour verrouiller et ainsi avoir un pilotage pr&eacute;cis sans mouvements ind&eacute;sirables !</p>
</div>
</div>
</div>',
    'brand_id' => '61',
    'category_id' => '3',
    'created_at' => '2022-05-30 10:50:58',
    'id' => '226',
    'last_ip' => '54.36.149.14',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'HALO HARNESS',
    'price' => '370.00',
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'manera-halo-harness-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-18 16:29:42',
    'user_id' => '1',
    'views' => '2168',
    'year' => '2022',
),
168 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6">
<p><img class="cms-img-fluid" src="/storage/photos/1/2022-05/u46530.jpg" alt=""></p>
</div>
<div class="col-6">
<p>L\'IRIS R mk2 est synonyme de performances et de contr&ocirc;le.</p>
<p>L\'IRIS RF &eacute;tait la r&eacute;f&eacute;rence de la voile de foil de course, voici la nouvelle Mk2.</p>
<p>L\'Iris R mk2 est une voile de course sans compromis con&ccedil;ue pour le nouveau format de foil PWA. Elle est bas&eacute;e sur les derniers d&eacute;veloppements que nous avons fait avec Nico Goyard, et dispose d&eacute;sormais de 6 lattes carbone afin d\'offrir une stabilit&eacute; encore meilleure et un poids r&eacute;duit.</p>
<p>L\'aspect ratio a &eacute;t&eacute; augment&eacute; pour une meilleure efficacit&eacute; et un meilleur contr&ocirc;le dans le vent.</p>
<p>Pour ceux qui veulent repousser les limites du foil haute performance</p>
</div>
</div>
</div>',
    'brand_id' => '78',
    'category_id' => '3',
    'created_at' => '2022-06-01 20:36:57',
    'id' => '227',
    'last_ip' => '88.171.17.15',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u46530s1-phantom-iris-r-mkii-phantom-2022.html',
    'link_test' => NULL,
    'name' => 'IRIS R MKII',
    'price' => '1019.00',
    'programme_end' => '10',
    'programme_start' => '7',
    'slug' => 'phantom-iris-r-mkii-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-31 13:04:38',
    'user_id' => '1',
    'views' => '1173',
    'year' => '2022',
),
169 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/u46607.jpg" alt="JP Hydrofoil 133 2022" width="800" height="800"></div>
<div class="col-6">
<p>Apr&egrave;s 5 ans de bons et loyaux services (sortie en 2017), la JP Hydrofoil est enfin revue en profondeur pour 2022. Il &eacute;tait temps car le mod&egrave;le d\'origine commen&ccedil;ait &agrave; &ecirc;tre s&eacute;rieusement d&eacute;pass&eacute;. Pour 2022, on a donc droit &agrave; une toute nouvelle Hydrofoil 133 en 84cm de large, qui vient compl&eacute;ter la Hydrofoil SL de 91 d&eacute;di&eacute;e &agrave; la course.</p>
<p>Le programme de cette HF133 reste identique &agrave; l\'origine : le freerace, c\'est &agrave; dire une navigation sur des grands bords avec une recherche de stabilit&eacute; en mode cruising. Elle compl&egrave;te le mod&egrave;le Freefoil destin&eacute; &agrave; une pratique plus ax&eacute;e sur la maniabilit&eacute; et la houle.&nbsp;</p>
<p>Au programme de ce nouveau shape&nbsp;</p>
<ul>
<li>un volume mieux r&eacute;parti avec plus de largeur sous le pied arri&egrave;re pour mieux matcher avec les foils actuels, mais en restant peu &eacute;pais pour ne pas avori &agrave; recourrir &agrave; des foils ultra-raides (donc chers)</li>
<li>des cut-out g&eacute;n&eacute;reux pour r&eacute;duire la r&eacute;sitance lors des touchettes et faciliter le d&eacute;collage malgr&eacute; la largeur plus importante</li>
<li>des nouveaux rails plus &eacute;pais pour offrir des touchettes lat&eacute;rales confortables</li>
<li>des inserts de straps repositionn&eacute;s pour mieux matcher avec les foils modernes</li>
</ul>
</div>
</div>
</div>',
    'brand_id' => '56',
    'category_id' => '2',
    'created_at' => '2022-06-15 15:02:06',
    'id' => '228',
    'last_ip' => '91.164.241.70',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u46607s1-jp-australia-133l-hydrofoil-lxt-jp-australia-2022.html',
    'link_test' => NULL,
    'name' => 'HYDROFOIL LXT',
    'price' => '2295.00',
    'programme_end' => '7',
    'programme_start' => '4',
    'slug' => 'jp-australia-hydrofoil-lxt-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-09 09:29:21',
    'user_id' => '1',
    'views' => '1566',
    'year' => '2022',
),
170 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/IMG_0276.png" alt="IRIS R MKII 78" width="1000" height="1213"></div>
<div class="col-lg-6">
<p>Les IRIS R mk2 (91 &amp; 85 &amp; 78) sont con&ccedil;ues pour le format PWA Slalom foil et le speed.</p>
<p>La car&egrave;ne b&eacute;n&eacute;ficie de nouveaux cut-out qui am&eacute;liorent le d&eacute;marrage.</p>
<p>L\'a&eacute;ro a encore &eacute;t&eacute; optimis&eacute; pour r&eacute;duire le fardage et augmenter la stabilit&eacute; en vol.</p>
<p>Les planches sont un peu plus &eacute;paisses et le rail de pied de mat a &eacute;t&eacute; rabaiss&eacute; ce qui permet de retransmettre plus de puissance. La 85 r&eacute;pond &agrave; la nouvelle jauge U19 pour les jeunes.</p>
</div>
</div>
</div>',
    'brand_id' => '78',
    'category_id' => '2',
    'created_at' => '2022-06-20 12:34:48',
    'id' => '229',
    'last_ip' => '85.208.96.195',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u45086s1-phantom-iris-r-mkii-board-phantom-2022.html',
    'link_test' => NULL,
    'name' => 'IRIS R MKII 78',
    'price' => '2990.00',
    'programme_end' => '9',
    'programme_start' => '6',
    'slug' => 'phantom-iris-r-mkii-78-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-06 23:40:20',
    'user_id' => '1',
    'views' => '3867',
    'year' => '2022',
),
171 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6">
<p><img class="cms-img-fluid" src="/storage/photos/1/2022-06/u46640.jpeg" alt="" width="1000" height="1000"></p>
</div>
<div class="col-6">
<p>L\'hyperglide 5 est la 2e version de la voile de course foil orient&eacute; vers le nouveau programme Slalom foil. Apr&egrave;s une Hyperglide 4 qui a ouvert la voie, cette v5 vient affiner et corriger tous les &eacute;l&eacute;ments perfectibles pour propsoer un produit ultra aboutit, toujours dans la phylosophie Severne : l&eacute;g&egrave;ret&eacute;, accessibilit&eacute; et performance pour tous.&nbsp;</p>
<p>Au programme des modifications :</p>
<ul>
<li>une ouverture de chute retravaill&eacute;e : plus prononc&eacute;e, mais plus progressive, avec moins de cassure ai dessus de la latte 5</li>
<li>un foureau plus large, mais un bord d\'attaque plus fin&nbsp;</li>
<li>un mast panel retravaill&eacute; pour plus de l&eacute;g&egrave;ret&eacute; et de dynamisme dans les mains</li>
<li>des renforts sur toutes les lattes au niveau du fourreau&nbsp;</li>
<li>un nouveau mat&eacute;riau de fourreau plus souple</li>
<li>un oeillets d\'&eacute;coute du bas enfin r&eacute;ellement utilisable</li>
</ul>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '3',
    'created_at' => '2022-06-20 14:35:34',
    'id' => '230',
    'last_ip' => '185.191.171.2',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u46640s1-severn-hyperglide-5-severn-2022.html',
    'link_test' => NULL,
    'name' => 'HYPERGLIDE 5 en 6M',
    'price' => '1149.00',
    'programme_end' => '10',
    'programme_start' => '6',
    'slug' => 'severne-hyperglide-5-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-27 09:48:46',
    'user_id' => '1',
    'views' => '812',
    'year' => '2022',
),
172 => 
array (
    'body' => '<p>Voile hybrid de Point-7 ayant pour ambition de couvrir les programmes suivant : Foil / Freewave / Freestyle / Slalom.&nbsp;</p>
<p>J\'ai cette voile depuis son lancement, cela fait d&eacute;sormais plus de 1 an que je l\'utilise r&eacute;guli&egrave;rement.&nbsp;</p>
<p>A noter : je n\'ai pas de voile 100% Foil et je manque un peu de comparaison.&nbsp;</p>
<p>Mon utilisation du foil : Slalom freerace sur un lac o&ugrave; l\'on jibe tous les 500 m&egrave;tres. Le vent est souvent rafaleu, il n\'est pas rare d\'avoir des variation entre 10 et 25 noeuds sur une m&ecirc;me session.</p>
<p><strong>Description</strong></p>
<p>Con&ccedil;u pour : Que ce soit en foil ou en aileron, le plus important est d\'aller sur l\'eau et de s\'amuser. La F1e est la voile parfaitement &eacute;quilibr&eacute;e pour avoir de bonnes performances &agrave; la fois en utilisant un foil ou un aileron.&nbsp;</p>
<table width="493">
<tbody>
<tr>
<td width="98">F1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; e-Hybrid</td>
<td width="46">&nbsp;Euros</td>
<td width="35">&nbsp;Size</td>
<td width="43">&nbsp;Luff</td>
<td width="45">&nbsp;Mast</td>
<td width="67">&nbsp;Extention</td>
<td width="92">&nbsp;Boom Trim</td>
<td width="67">&nbsp;Boom</td>
</tr>
<tr>
<td>F1 e</td>
<td>639,0</td>
<td>5,4</td>
<td>426</td>
<td>400</td>
<td>28</td>
<td>170+-2</td>
<td>172</td>
</tr>
</tbody>
</table>
<p>5 lattes, un camber (gros !)&nbsp;</p>
<p><img src="/storage/photos/11/p7f1e.JPG" alt="" width="563" height="415"></p>
<p>Voile d&eacute;velopp&eacute; pour satisfaire les pratiquants mixant foil et aileron, avec en data, foil si vent inf&eacute;rieur &agrave; 18 noeuds et aileron de 13 &agrave; 21 noeuds. En r&eacute;alit&eacute; on verra que je m\'en sers quasiment que en foil.&nbsp;</p>
<p>Concernant la 5,4 "Wave-Slalom", la voile est dessin&eacute;e pour une utilisation Bump\'n\'Jump,&nbsp; Freestyle Fin/foil, sur des planches de freestyle/freewave. En gros, l\'id&eacute;e, c\'est d\'aller vite, de faire des tricks basiques (sauts, loops), avoir une voile maniable... Tout en gagnant un peu de puissance, de stabilit&eacute; et de passages de moles gr&acirc;ce au creu impliqu&eacute; par le camber. La voile est en th&eacute;orie plus puissante que ce que sa surface laisse penser, tout en ayant une meilleure tenue en vent fort.&nbsp;</p>
<p>Les points cl&eacute;s annonc&eacute;s par Point-7 :&nbsp;</p>
<ul>
<li>Designed for foiling up to 18knots from zero.</li>
<li>Designed for fin from 13 knots to 21 knots.</li>
<li>The only big sail needed if you foil for fun.</li>
<li>Early planning and easy handling.</li>
<li>7 battens and 2 bottom cams on the 7.6 and 8.5</li>
<li>5 battens and 1 bottom cam on the 5.4 and 5.9</li>
</ul>
<p><strong>Gr&eacute;age</strong></p>
<p>Le gr&eacute;age est tr&egrave;s simple,&nbsp;</p>
<ul>
<li>On insert le mat au dessus du camber</li>
<li>On &eacute;tarque jusqu\'&agrave; ce que la poulie soit au point 10cm de la rallonge</li>
<li>On met en place le wishbone, on tire sur l\'&eacute;coute</li>
<li>On met le camber en place</li>
<li>On &eacute;tarque au rep&egrave;re Foil ou Fin</li>
</ul>
<p>A terre la voile poss&egrave;de potentiellement un creu tr&egrave;s important si on &eacute;tarque peu l\'&eacute;coute.&nbsp;</p>
<p>Les mat&eacute;riaux utilis&eacute;s sont qualitatif et inspire confiance avec un tramage int&eacute;gral et une chute en X-Ply. Le monofilm anti-UV est plut&ocirc;t joli.&nbsp;</p>
<p>l\'avant derni&egrave;res lattes en partant du haut dessine un S en statique, ce qui n\'est pas le cas en nav.&nbsp;</p>
<p>En seul point n&eacute;gatif &agrave; terre : Les stickers de rep&egrave;re de gr&eacute;age n\'ont pas tenu sur ma voile..&nbsp;</p>
<p><img src="/storage/photos/11/162069492_4089850794379886_424848249391663418_n.jpg" alt="" width="855" height="855"></p>
<p><strong>Sur l\'eau. En un mot : Attachante&nbsp;</strong></p>
<p><em><strong>Foil</strong></em></p>
<p>J\'aime &eacute;norm&eacute;ment cette voile pour son c&ocirc;t&eacute; fun, confortable, tol&eacute;rante... Je la gr&eacute;e quand je ne sais pas quoi gr&eacute;er ! (Normalement je navigue en Point-7 AC-Z 5,2/5,8/6,4)</p>
<p>Sa polyvalence vient de son double visage :&nbsp;</p>
<ul>
<li>Peu &eacute;tarqu&eacute;e (au premi&egrave;re rep&egrave;re "foil") , la voile est plus puissante que ma 5,8. Chute tendue, creu tr&egrave;s avanc&eacute;, elle tracte en douceur. Elle est moins facile &agrave; pomper qu\'une voile de vague ou de slalom, il faut plut&ocirc;t "laisser faire" et on acc&eacute;l&egrave;re en douceur. L\'utilisation d\'un palan d\'&eacute;coute est vivement conseiller pour maitriser le creu g&eacute;n&eacute;r&eacute; par un seul (gros!) camber, potentiellement tr&egrave;s important.</li>
<li>Etarqu&eacute;e au rep&egrave;re "fin", la voile est plus tol&eacute;rante que ma 5,2 de slalom !&nbsp; La chute est ouverte comme une Point-7 classique, a cela s\'ajoute l\'usage d\'un monofilm assez &eacute;lastique en t&ecirc;te. J\'utilise ce rep&egrave;re si je dois naviguer en aileron mais aussi en foil dans le vent fort et rafaleux.&nbsp;</li>
</ul>
<p>On a un curseur suppl&eacute;mentaire avec le double oeillet d\'&eacute;coute.&nbsp;</p>
<p>La voile m\'a premi&egrave;rement d&eacute;&ccedil;u car "trop douce", j\'ai pens&eacute; &agrave; la reserver &agrave; ma femme pour son &eacute;volution en windsurf, puis plus je l\'utilise et plus cette voile est pertinente sur notre plan d\'eau. Sa douceur cache son vrai potentiel car je me surprend a faire des bons scores au GPS sans m\'en rendre compte !&nbsp;</p>
<p>Son tr&egrave;s gros atout sur notre lac &eacute;tant sa tol&eacute;rance aux variations de vent et notamment aux nombreuses rafales, on ne se fait ni bousculer ni ouvrir. Les transitions (jibes ou fast-tack) sont faciles, le camber passe avec "souplesse". Ceci est du - il me semble - au monofilm utilis&eacute; en t&ecirc;te de voile. Pour ceux qui connaissent les Naish Force, cela y ressemble beaucoup (d&eacute;nomm&eacute; X-166)&nbsp;</p>
<p><em><strong>Fin</strong></em></p>
<p>Petite parenth&egrave;se sur l\'utilisation aileron, je ne suis pas fan. La voile est trop douce pour mon usage freerace/slalom, les acc&eacute;l&eacute;rations sont trop discr&egrave;tes. En Bump\'n Jump elle est s&ucirc;rement tr&egrave;s adapt&eacute;e cela dit !&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Conclusion ?</strong></p>
<p>De mon point de vue, le pari de Point-7 est r&eacute;ussi, si je ne devais garder qu\'une seule voile dans mon quiver, ce serait elle.&nbsp;</p>
<p>Je pr&eacute;f&egrave;re utiliser mes Point-7 AC-Z mais celles-ci peuvent &ecirc;tre trop restrictives quand la F1e a une plage d\'utilisation XXXL. En comparaison, la AC-Z sera mieux cal&eacute;e, plus puissante, plus percutante ... La F1e c\'est la force tranquille, la garantie de faire une session 100% en vol peu importe les variations... En prime on sort de l\'eau frais comme un gardon car elle ne g&eacute;n&egrave;re que peu de d&eacute;pense physique.&nbsp;</p>',
    'brand_id' => '80',
    'category_id' => '3',
    'created_at' => '2022-06-24 08:34:47',
    'id' => '231',
    'last_ip' => '185.191.171.11',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'F1e 5,4',
    'price' => '669.00',
    'programme_end' => '5',
    'programme_start' => '1',
    'slug' => 'point-7-f1e-54-2021',
    'status' => 'Published',
    'updated_at' => '2024-09-06 11:28:11',
    'user_id' => '11',
    'views' => '1049',
    'year' => '2021',
),
173 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-06/race_17.jpg" alt="" width="700" height="610"></div>
<div class="col-8">
<p>2022 marque un gros tournant chez LOKEFOIL, avec l\'arriv&eacute;e d\'un mod&egrave;le d&eacute;montable fuselage aluminium. La marque rejoint ainsi le standard d&eacute;velopp&eacute; par la plupart des autres marques.&nbsp;</p>
<p>Ce choix a de nombreuses cons&eacute;quences, et la premi&egrave;re est la possibilit&eacute; d\'offrir le choix de longueur de fuselage, et donc de pouvoir transformer selon les envies, les conditions, ou les objectifs un foil freeride et slalom puis en race. Toutes les ailes de la marque &eacute;tant compatibles avec les nouveaux fuselages, le choix de configuration est assez illimit&eacute;.&nbsp;</p>
<p>En ce qui concerne le windfoil (je laisse de c&ocirc;t&eacute; la Wing dans cette pr&eacute;sentation), on a d&eacute;sormais le choix&nbsp;</p>
<ul>
<li>pour les mats entre le 87cm (freeride), le 100 HM (slalom) ou le 100 UHM (slalom / race)</li>
<li>pour les ailes entre 310 (speed), 400 (slalom), 590 (slalom), 750 (slalom), 900 (light wind ou Up&amp;Down), 1100 (freeride), 1500 (freeride), 1900 (freeride)</li>
<li>pour les fuselages entre 95 (freeride), 100 (slalom) et 110 (up&amp;down)</li>
</ul>
<p>Je pr&eacute;cise de les dimensions de fuselage sont donn&eacute;es du bord d\'attaque de l\'aile au bord de fuite du stab. Le 100 fait donc en r&eacute;alit&eacute; 105cm au total.</p>
<p>Les ailes de 310 &agrave; 900 sont disponibles soit en standard soit en haut module (HM), et les mats de 100 soit en haut module (HM) soit en ultra haut module (UHM). La pr&eacute;conisation est de privil&eacute;gier le UHM pour l\'utilisation Race Up&amp;Down avec fuselage de 110 puisque le grand fuselage sollicite plus le mat en torsion.</p>
</div>
</div>
</div>',
    'brand_id' => '60',
    'category_id' => '1',
    'created_at' => '2022-06-30 12:59:17',
    'id' => '232',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'SLALOM + HM',
    'price' => '3849.00',
    'programme_end' => '9',
    'programme_start' => '5',
    'slug' => 'lokefoil-slalom-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-08 09:14:00',
    'user_id' => '1',
    'views' => '3866',
    'year' => '2022',
),
174 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-6">
<p>Dans le monde du windfoil, les bouts de harnais vario sont devenus un indipensable, surtout dans les prartiques freerace, Slalom et Race. En effet, on va se rapprocher de la voile dans le tr&egrave;s l&eacute;ger , et au contaire naviguer ultra long dans le vent soutenu pour abaisser notre centre de gravit&eacute; au maximum. A tr&egrave;s haut niveau, il n\'est pas rare de voir des bouts de plus de 50cm !</p>
<p>2 probl&egrave;mes principaux surviennent :</p>
<ul>
<li>comment avoir une telle plage de r&eacute;glage ?</li>
<li>comment &eacute;viter que des bouts si longs ne fasse le balancier au point de devenir inaccrochables ?</li>
</ul>
<p>A ce jeux, certains mod&egrave;les se sont vite impos&eacute;s sur le march&eacute; : le starboard Racing Vario avec son taquet AT Technology, le SideOn Regatta pro (Clamcleat) et le Maksior (HanressLine.com). Tous ces bouts assez hon&eacute;reux sont bas&eacute;s sur l\'utilisation d\'un taquet coinceur. En effet, les syst&egrave;mes &agrave; sangle ne permettent ni une plage de r&eacute;glage suffisante, ni une fluidit&eacute; de r&eacute;glage en navigation, ni une rigidit&eacute; int&eacute;ressante &agrave; l\'usage.</p>
<p>Cette ann&eacute;e, il faut pr&eacute;ciser que les 2 premiers &eacute;tant totalement hors stock pour la saison, nous avons cherch&eacute; une autre solution de replis et trouv&eacute; cette nouvelle p&eacute;pite de chez Patrik. Alors disons le tout de suite (comme &ccedil;a c\'est fait), on bat ici des records de tarif pour des bouts de harnais (129&euro;), mais dans cette p&eacute;riode de p&eacute;nuerie, ce mod&egrave;le va certainement combler du monde car, en plus d\'&ecirc;tre disponible, il coche &eacute;galement toutes les cases&nbsp;</p>
<ul>
<li>une plage de r&eacute;glage in&eacute;dite</li>
<li>une rigidit&eacute; absolue (plus que le Starboard ou le SideOn, bien plus que le HanressLine.com) illustr&eacute;e sur cette <a href="https://www.youtube.com/shorts/IA6p-8aD0iw">video</a>&nbsp;.. on peut comparer le Patrick r&eacute;gl&eacute; &agrave; 38 avec le Duotone r&eacute;gl&eacute; &agrave; 34 (qui bouge 2 fois plus)</li>
<li>une installation sans d&eacute;monter le wish (merci quand on a un wish avec palan int&eacute;gr&eacute;)</li>
<li>une fluidit&eacute; impeccable gr&acirc;ce &agrave; la poulie int&eacute;gr&eacute;e du Clamcleat</li>
<li>un lock / release ultra facile et intuitf&nbsp;</li>
</ul>
<p>Bref, il parait difficile de faire beaucoup mieux. Techniquement, il cumule un syst&egrave;me &agrave; sangle et guidage rigide d\'un c&ocirc;t&eacute;, et un clamcleat mont&eacute; sur sangle et guidage de l\'autre. ce double r&eacute;glage et double guidage explique &agrave; la fois son tarif et sa rigidit&eacute;. On teste d&egrave;s ce WE et on vous dit 🙂</p>
</div>
<div class="col-lg-6"><img src="/storage/photos/1/2022-06/IMG_0840.jpeg" alt=""></div>
</div>
<div class="row">
<div class="col-lg-6"><img src="/storage/photos/1/2022-06/IMG_0842.jpeg" alt=""></div>
<div class="col-lg-6"><img src="/storage/photos/1/2022-06/IMG_0843.jpeg" alt=""></div>
</div>
<div class="row">
<div class="col-lg-6"><img src="/storage/photos/1/2022-06/IMG_0844.jpeg" alt=""></div>
<div class="col-lg-6"><img src="/storage/photos/1/2022-06/IMG_0845.jpeg" alt=""></div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '3',
    'created_at' => '2022-07-21 15:13:52',
    'id' => '233',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windsurf/u46841s1-starboard-adjustable-pro-comp-28-42-starboard-2022.html',
    'link_test' => NULL,
    'name' => 'Bouts VARIO PRO COMP 28-42',
    'price' => '129.00',
    'programme_end' => '10',
    'programme_start' => '5',
    'slug' => 'patrick-bouts-vario-pro-comp-28-42-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-06 10:59:55',
    'user_id' => '1',
    'views' => '2726',
    'year' => '2022',
),
175 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-07/IMG_0867.jpeg" alt="FC 187" width="956" height="1200"></div>
<div class="col-lg-6">
<p>La FC187 PRO est la 2e version du flotteur d&eacute;di&eacute; foil de la marque Israelienne, et clairement la premi&egrave;re qui d&eacute;coule d\'un d&eacute;veloppement 100% windfoil. Que ce soit l\'outline, le plan de pont, les r&eacute;paritions de volume, la position des straps, le shape des rails, on est cette fois loin d\'une planche de slalom revisit&eacute;e.</p>
<p>Pour autant, elle conserve les principaux atouts de la marque : une construction ultra robuste, une finition nacr&eacute;e absoluement superbe, un antid&eacute;rappant qui permettrait presque de naviguer sans straps 🤣, une valve GoreTex</p>
</div>
</div>
</div>',
    'brand_id' => '39',
    'category_id' => '2',
    'created_at' => '2022-07-22 15:52:35',
    'id' => '234',
    'last_ip' => '52.167.144.145',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FLYING CAMEL 187 PRO',
    'price' => NULL,
    'programme_end' => '9',
    'programme_start' => '6',
    'slug' => 'futurefly-flying-camel-187-pro-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-06 16:49:41',
    'user_id' => '1',
    'views' => '999',
    'year' => '2022',
),
176 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-07/IMG_0867.jpeg" alt="FC 187" width="956" height="1200"></div>
<div class="col-lg-6">
<p>La FC187 PRO est la 2e version du flotteur d&eacute;di&eacute; foil de la marque Israelienne, et clairement la premi&egrave;re qui d&eacute;coule d\'un d&eacute;veloppement 100% windfoil. Que ce soit l\'outline, le plan de pont, les r&eacute;paritions de volume, la position des straps, le shape des rails, on est cette fois loin d\'une planche de slalom revisit&eacute;e.</p>
<p>Pour autant, elle conserve les principaux atouts de la marque : une construction ultra robuste, une finition nacr&eacute;e absoluement superbe, un antid&eacute;rappant qui permettrait presque de naviguer sans straps 🤣, une valve GoreTex</p>
</div>
</div>
</div>',
    'brand_id' => '39',
    'category_id' => '2',
    'created_at' => '2022-07-22 16:21:33',
    'id' => '235',
    'last_ip' => '54.36.148.254',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'FLYING CAMEL 145 PRO',
    'price' => NULL,
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'futurefly-flying-camel-145-pro-2022',
    'status' => 'Published',
    'updated_at' => '2024-09-07 09:03:26',
    'user_id' => '1',
    'views' => '1475',
    'year' => '2022',
),
177 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6">
<p><img class="cms-img-fluid" src="/storage/photos/1/2022-08/IMG_1172.jpeg" alt="" width="899" height="1200"></p>
</div>
<div class="col-6">
<p>L\'hyperglide 5 est la 2e version de la voile de course foil orient&eacute; vers le nouveau programme Slalom foil. Apr&egrave;s une Hyperglide 4 qui a ouvert la voie, cette v5 vient affiner et corriger tous les &eacute;l&eacute;ments perfectibles pour propsoer un produit ultra aboutit, toujours dans la phylosophie Severne : l&eacute;g&egrave;ret&eacute;, accessibilit&eacute; et performance pour tous.&nbsp;</p>
<p>Au programme des modifications :</p>
<ul>
<li>une ouverture de chute retravaill&eacute;e : plus prononc&eacute;e, mais plus progressive, avec moins de cassure ai dessus de la latte 5</li>
<li>un foureau plus large, mais un bord d\'attaque plus fin&nbsp;</li>
<li>un mast panel retravaill&eacute; pour plus de l&eacute;g&egrave;ret&eacute; et de dynamisme dans les mains</li>
<li>des renforts sur toutes les lattes au niveau du fourreau&nbsp;</li>
<li>un nouveau mat&eacute;riau de fourreau plus souple</li>
<li>un oeillets d\'&eacute;coute du bas enfin r&eacute;elleemnt utilisable</li>
</ul>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '3',
    'created_at' => '2022-08-03 23:41:56',
    'id' => '236',
    'last_ip' => '94.63.101.186',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => 'https://marseille.glissattitude.com/windfoil/u46640s1-severn-hyperglide-5-severn-2022.html',
    'name' => 'HYPERGLIDE 5 en 9M',
    'price' => '1369.00',
    'programme_end' => '10',
    'programme_start' => '9',
    'slug' => 'severne-hyperglide-5-en-9m-2022',
    'status' => 'Published',
    'updated_at' => '2024-08-25 06:09:14',
    'user_id' => '1',
    'views' => '1296',
    'year' => '2022',
),
178 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-08/hydro1.jpeg" alt="Severne Hydro 85" width="800" height="767"></div>
<div class="col-lg-6">
<p>La gamme de planches de course Hydro est con&ccedil;ue &agrave; l\'aide d\'une technologie inventive et d\'une mod&eacute;lisation informatique pour des performances de pointe dans toutes les disciplines de course foil.</p>
<p>Les Hydro 91, 85 et 79 sont des fus&eacute;es de slalom &agrave;, con&ccedil;ues pour des angles travers &agrave; grande vitesse, et pour porter des voiles de 5,0 &agrave; 10,0.</p>
<p>Les lignes et les formes visent &agrave; minimiser la tra&icirc;n&eacute;e hydrodynamique et &agrave; maximiser les performances a&eacute;rodynamiques.</p>
<p>Le pont creus&eacute; offre pour un contr&ocirc;le optimal des empannages, des virements de bord et de l\'&eacute;quilibre en cas d\'attaque.</p>
<p>Des cuts profondes r&eacute;duisent la tra&icirc;n&eacute;e au d&eacute;collage et minimisent les tra&icirc;n&eacute;e au toucher gr&acirc;ce &agrave; l\'ajout d\'un &eacute;tage secondaire. Le r&eacute;sultat final : une meilleure flottabilit&eacute;, et une pouss&eacute;e illimit&eacute;e dans les airs.</p>
<p>La distribution du volume est maximis&eacute;e le long des contours de la planche pour une configuration a&eacute;rodynamique &agrave; faible tra&icirc;n&eacute;e qui vous permet d\'atteindre ces vitesses de pointe sans effort et de maintenir la stabilit&eacute; &agrave; des vitesses &eacute;lev&eacute;es. Repoussez les limites plus longtemps. Les pads ergonomiques et la position confortable des pieds r&eacute;duisent la fatigue.</p>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '2',
    'created_at' => '2022-09-26 15:32:56',
    'id' => '237',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u47307s1-seventyone-percent-hydro-foil-racing-board-seventyone-percent-2023.html',
    'link_test' => NULL,
    'name' => 'HYDRO',
    'price' => '3599.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'severne-hydro-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-06 11:04:20',
    'user_id' => '1',
    'views' => '3073',
    'year' => '2023',
),
179 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4"><img class="cms-img-fluid" src="/storage/photos/1/2022-12/IMG_3497.jpeg" alt="" width="640" height="361"></div>
<div class="col-8">
<p>Apr&egrave;s 3 ans de bons et loyaux sercices du mod&egrave;le IRIS R 100, Phantom compl&egrave;te sa gamme pour 2023 avec un nouveau mat 100% d&eacute;di&eacute; au Slalom en format PWA (travers ou abattu, avec un vent minimum). Compte tenu de ces nouvelles donn&eacute;es, la marque a focalis&eacute;e son d&eacute;veloppement sur la finesse des profils (moins de 11,5mm en queue, avec une corde plus faible &eacute;galement) pour r&eacute;duire encore la train&eacute;e du foil. La taille du mat et ramen&eacute;e &agrave; 95cm, ce qui s\'av&egrave;re largement suffisant en slalom, et compte tenu de l\'utilisaitoh de flotteurs de moins en moins larges.</p>
<p>Pour compenser la perte de rigidit&eacute; in&eacute;vitable, et la perte de contr&ocirc;le qui va avec, Phantom &eacute;quipera ce mat d\'un nouveau fuselage limitant le d&eacute;port des ailes vers l\'avant, et ainsi les contraintes de torsion. Ce nouveau fuselage d&eacute;calera la position des ailes de 30mm vers l\'arri&egrave;re.</p>
<p>Ces nouveaux mats et fuselage sont 100% compatibles avec toute la gamme actuelle, mais il sera fortement d&eacute;conseill&eacute; de l\'utiliser avec le fuselage de 110. Le mat R100 reste donc absoluement d\'actualit&eacute; pour un programme polyvalent travers et up&amp;down ou raid.</p>
</div>
</div>
</div>',
    'brand_id' => '78',
    'category_id' => '1',
    'created_at' => '2022-12-02 10:05:06',
    'id' => '238',
    'last_ip' => '109.60.21.127',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'IRIS R PWA 95',
    'price' => NULL,
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'phantom-iris-r-95-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-07 14:09:25',
    'user_id' => '1',
    'views' => '2989',
    'year' => '2023',
),
180 => 
array (
    'body' => '<p>Foil de wing race</p>',
    'brand_id' => '78',
    'category_id' => '1',
    'created_at' => '2023-01-06 09:22:13',
    'id' => '239',
    'last_ip' => '54.36.148.129',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'DRIFT 95',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'phantom-drift-95-2023',
    'status' => 'Hidden',
    'updated_at' => '2023-09-02 07:24:16',
    'user_id' => '1',
    'views' => '140',
    'year' => '2023',
),
181 => 
array (
    'body' => '<p>a</p>',
    'brand_id' => '78',
    'category_id' => '1',
    'created_at' => '2023-01-06 09:26:20',
    'id' => '240',
    'last_ip' => '216.244.66.244',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'DRIFT 108',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'phantom-drift-108-2023',
    'status' => 'Hidden',
    'updated_at' => '2024-03-21 10:56:27',
    'user_id' => '1',
    'views' => '138',
    'year' => '2023',
),
182 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2023/u48111.jpg" alt="Patrik Foil Race 2023"></div>
<div class="col-lg-6">
<p>La Foil Race est la digne rempla&ccedil;ante et &eacute;volution de la Foil Ride 2021/2022, qui a &eacute;t&eacute; le best seller de la marque sur ces deux ann&eacute;es. Son programme est orient&eacute; vers la pratique &laquo; freerace &raquo; en foil. Une planche &agrave; la fois accessible et performante quand vous voulez affoler le GPS. Avec ses nombreuses positions d&rsquo;inserts de straps vous pourrez d&eacute;buter, vous alignez sur une comp&eacute;tition ou tout simplement vous baladez sur votre home spot avec efficacit&eacute;. Les grandes &eacute;volutions du shape:</p>
<ul>
<li>Une surface de nez plus petite et arrondie pour un meilleur a&eacute;rodynamisme.</li>
<li>Des cut out plus grands sur un seul &eacute;tage. Le r&eacute;sultat: des touchettes avec le minimum de tra&icirc;n&eacute;es pour conserver votre vitesse et reprendre votre vol facilement.</li>
<li>Un plan de pont au niveau des pieds inspir&eacute; de la gamme Foil comp: une surface plus plate pour obtenir un pilotage fin gr&acirc;ce &agrave; votre pied qui est &agrave; plat.</li>
<li>Un V et un double concave accentu&eacute;s sur la partie avant pour adoucir les touchettes</li>
</ul>
<p>Sp&eacute;cifications:</p>
<p>125 L/ 210/ 76</p>
<p>145 L/210/ 83</p>
<p>165 L/210/ 89</p>
</div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '2',
    'created_at' => '2023-01-20 07:48:16',
    'id' => '241',
    'last_ip' => '91.164.241.70',
    'link_presentation' => NULL,
    'link_product' => 'https://marseille.glissattitude.com/windfoil/u48111s1-patrick-foil-race-patrick-2023.html',
    'link_test' => NULL,
    'name' => 'FOIL RACE',
    'price' => '2849.00',
    'programme_end' => '9',
    'programme_start' => '5',
    'slug' => 'patrick-foil-race-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-09 09:30:21',
    'user_id' => '1',
    'views' => '3671',
    'year' => '2023',
),
183 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4"><img class="cms-img-fluid" src="/storage/photos/1/2023/FullSizeRender (2).jpeg" alt="Phantom infinite " width="1280" height="1500"></div>
<div class="col-8">
<p>Produit en &eacute;dition limit&eacute;e de 200 pi&egrave;ces pour le monde entier, l\'infinite est le nouveau fer de lance de la marque championne du monde. Avec ce foil con&ccedil;u sans compromis aucun, l\'objectif de la marque est clairement d\'assoir sa domination du march&eacute; et des courses pour les 2 saisons &agrave; venir.</p>
<p>Pour la premi&egrave;re fois, ce mod&egrave;le a &eacute;t&eacute; con&ccedil;u en tr&egrave;s grande majorit&eacute; &agrave; l\'aide d\'un logiciel d\'optimisation hydrodynamique et de pr&eacute;diction de vitesse. Avec ce travail r&eacute;alis&eacute; en collaboration avec D3 Applied Technologies et Redondo Studio (designers de la Coupe de l\'America), Phantom sort clairement les grands moyens pour faire un pas en avant, et trancher avec les mod&egrave;les actuels d&eacute;j&agrave; tr&egrave;s performants.</p>
<p>Techniquement, la conception de l\'Infinite est bas&eacute; sur</p>
<ul>
<li>un mat plus fin, plus &eacute;troit en corde</li>
<li>une composition structurelle du mat revue avec des carbones ultra haut de gamme pour compenser la plus faible &eacute;paisseur</li>
<li>des fuslages en Titane plus fins que le fusleage alu actuel, plus rigides et totalement inoxydables</li>
<li>des ailes et stab enti&egrave;rement nouveaux, que ce soit en profil, en di&egrave;dre et en outline</li>
</ul>
<p>Compte tenu de la diminution des &eacute;paisseurs &agrave; tous les niveaux, les connexions &eacute;voluent et aucun &eacute;lement de l\'infinite ne sera compatible avec le mod&egrave;le pr&eacute;c&eacute;dent.&nbsp;</p>
<p>Tarif : de 4500&euro; (2 ailes / 1 stab / 1 fusleage) &agrave; 6500&euro; (4 ailes + 2 fuselages + 2 stab)</p>
<p>Tailles des ailes : 800 / 650 / 475 / 360 - Fuselages 100-30 et 100-15</p>
</div>
</div>
</div>',
    'brand_id' => '78',
    'category_id' => '1',
    'created_at' => '2023-04-18 10:43:43',
    'id' => '242',
    'last_ip' => '91.242.162.9',
    'link_presentation' => NULL,
    'link_product' => 'https://www.glissattitude.com/shop/wf-fs-i-ltd-ultimate-phantom-infinite-ltd-ultimate-4651',
    'link_test' => NULL,
    'name' => 'INFINITE LTD',
    'price' => '4500.00',
    'programme_end' => '7',
    'programme_start' => '5',
    'slug' => 'phantom-infinite-ltd-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-08 09:14:33',
    'user_id' => '1',
    'views' => '4390',
    'year' => '2023',
),
184 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4"><img class="cms-img-fluid" src="https://windfoilfan.glissattitude.com/storage/photos/1/2023/c800.jpg" alt="C800 SLR" width="1000" height="1000"></div>
<div class="col-8">
<p>Produit en &eacute;dition limit&eacute;e de 40 pi&egrave;ces pour la France, le C800 est le nouveau fer de lance de la marque Starboard.</p>
<p>Techniquement, la conception du C800 est bas&eacute; sur</p>
<ul>
<li>un mat plus fin, plus &eacute;troit en corde</li>
<li>une composition structurelle du mat revue avec des carbones haut module pour compenser la plus faible &eacute;paisseur</li>
<li>un nouveau fuselage plus fin avec des nouvelles connnexions</li>
<li>des ailes et stab enti&egrave;rement nouveaux, que ce soit en profil, en di&egrave;dre et en outline</li>
</ul>
<p>Tailles des ailes : 750 / 560 / 460 &nbsp;- Fuselages 99 et 110, Stab 210 + 175</p>
</div>
</div>
</div>',
    'brand_id' => '100',
    'category_id' => '1',
    'created_at' => '2023-06-16 14:25:09',
    'id' => '243',
    'last_ip' => '149.56.160.221',
    'link_presentation' => NULL,
    'link_product' => 'https://www.glissattitude.com/shop/u48915-starboard-slr-team-set-evolution-mkii-c800-2023-1588#attr=7274,7272,7273',
    'link_test' => NULL,
    'name' => 'SLR TEAM SET EVOLUTION MKII C800',
    'price' => '5599.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'starboard-slr-team-set-evolution-mkii-c800-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-09 03:02:03',
    'user_id' => '1',
    'views' => '3179',
    'year' => '2023',
),
185 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6">
<p><img class="cms-img-fluid" src="/storage/photos/1/2023/IMG_7991.jpeg" alt="" width="1000" height="1157"></p>
</div>
<div class="col-6">
<p class="p2">D&eacute;j&agrave; la 5e version de la voile de course foil Severne<span class="Apple-converted-space">&nbsp; </span>(la V3 n&rsquo;ayant jamais exist&eacute;) !!! Le temps passe, mais la marque reste l&rsquo;un des tout grands leaders de ce secteur de march&eacute;. Il nous est donc impossible de laisser sous les radars cette derni&egrave;re version de l&rsquo;Hyperglide.</p>
<p class="p2">Au fur et &agrave; mesures des ann&eacute;es, l&rsquo;hyperglide &eacute;volue pour coller aux besoins des comp&eacute;titeurs windfoil &eacute;voluant en PWA. Cette version 6 ne fait pas exception.</p>
<p class="p2">Apr&egrave;s des versions 1 et 2 clairement orient&eacute;e up&amp;down (dont sont d&eacute;riv&eacute;es la voile olympique dite HGO), les version 4 et 5 se sont tourn&eacute;es vers un programme plus ax&eacute; foil Slalom &hellip; c&rsquo;est &agrave; dire en privil&eacute;giant la vitesse sur les capacit&eacute;s de remont&eacute;e eu pr&egrave;s. Nous verrons que la V6 continue dans cette voie.</p>
<p class="p1">Par ailleurs, les rideurs PWA choisissant le support foil dans des conditions de plus en plus muscl&eacute;es, un gros travail a &eacute;t&eacute; effectu&eacute; sur les petites surfaces. Au niveau amateur &eacute;galement, les ventes des petites surfaces progressent tous les ans, en m&ecirc;me temps que les pratiquants font un triple constat</p>
<ul class="ul1">
<li class="li1">L&rsquo;&eacute;volution des produits rend le foil de plus en plus efficace dans le vent soutenu<span class="Apple-converted-space">&nbsp;</span></li>
<li class="li1">L&rsquo;&eacute;volution technique des pratiquants les incitent &agrave; pratiquer le foil dans toutes les conditions et plus simplement dans le light</li>
<li class="li1">La recherche de glisse, et les nouvelles g&eacute;n&eacute;ration de foil favorisent une navigation moins surtoil&eacute;e qu&rsquo;auparavant (cf Nicolas GOYARD qui gagne le PWA de Fuerte cette ann&eacute;e en 3.7m2 dans des vents autour de 20-25 knt)</li>
</ul>
<p class="p1">Si vous suivez le d&eacute;roulement de la PWA ces derni&egrave;res ann&eacute;es, vous n&rsquo;avez pas pu &eacute;chapper au constat &eacute;vident de la sup&eacute;riorit&eacute; du foil sur l&rsquo;aileron dans 90% des conditions. Par cons&eacute;quent, l&rsquo;enjeu du d&eacute;veloppement de l&rsquo;hyperglide est capital pour la marque SEVERNE.<span class="Apple-converted-space">&nbsp; </span>Pour autant, ce d&eacute;veloppement se fait en conservant une intention d&rsquo;accessibilit&eacute;, ce qui en fait, et de loin, la voile de course foil la plus vendue sur le march&eacute;.<span class="Apple-converted-space">&nbsp;</span></p>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '3',
    'created_at' => '2023-08-03 00:36:49',
    'id' => '244',
    'last_ip' => '109.190.104.173',
    'link_presentation' => NULL,
    'link_product' => 'https://www.glissattitude.com/shop/severne-hyperglide-6-2023-4845?search=hyperglide+6&order=name+asc#attr=21758,21756,21757,21759',
    'link_test' => NULL,
    'name' => 'Hyperglide 6',
    'price' => '1299.00',
    'programme_end' => '10',
    'programme_start' => '6',
    'slug' => 'severne-hyperglide-6-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-09 06:48:10',
    'user_id' => '1',
    'views' => '1176',
    'year' => '2023',
),
186 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4">
<p><img class="cms-img-fluid" src="https://windfoilfan.glissattitude.com/storage/photos/1/2023/2023-08/655e562f-369a-4aec-85cb-0cc3bc7d9e18.jpeg" alt=""></p>
<p><img class="cms-img-fluid" src="https://windfoilfan.glissattitude.com/storage/photos/1/2023/2023-08/be6209df-1549-47c9-8287-896302538305.jpeg" alt=""></p>
<p><img class="cms-img-fluid" src="https://windfoilfan.glissattitude.com/storage/photos/1/2023/aeon-frontwing-titan.jpg" alt="Patrik AEON"></p>
</div>
<div class="col-8">
<p>Aujourd\'hui, il ne fait plus de doute que le foil est indispensable pour esp&eacute;rer figuer sur un podium de coupe du monde. Pour une marque comme Patrik, qui a ax&eacute; son d&eacute;veloppement sur la performance en course, il &eacute;tait impossible de ne pas avoir au catalogue un outil &agrave; la hauteur.</p>
<p>Pour garder une approche commerciale et industrielle rentable, la marque a choisi de d&eacute;velopper non pas un foil, mais un &eacute;cosyst&egrave;me permettant, en fonction des options, d\'aller du foil coupe du monde no-limit, &agrave; un produit plus abordable pour les clients sensibles au tarif.&nbsp;</p>
<p>L\'AEON a &eacute;t&eacute; con&ccedil;u pour un contr&ocirc;le maximal, facilitant la ma&icirc;trise du vol en 3 dimensions &agrave; la fois pour le pilote de coupe du monde et pour un pratiquant de niveau interm&eacute;diaire. Avec un syst&egrave;me de connexion standard multisports (wind, wing, sup, surf), Il permet &agrave; chaque pilote de trouver facilement sa configuration id&eacute;ale. Ses forces : rigidit&eacute; en flexion et en torsion,&nbsp;assemblage et connexions pr&eacute;cises et solides, processus de production &agrave; faible tol&eacute;rance</p>
<h3>Mats windfoil (DTT)</h3>
<ul>
<li>DIM-S&rdquo; (Dimension-Small): longueur 95cm, &eacute;paisseur &agrave; la base 11.3mm, corde &agrave; la base 103mm. Version Slalom Coupe du Monde sans compromis : le plus fin et le plus raide</li>
<li>DIM-M&rdquo; (Dimension-Medium): longueur 95cm,&eacute;paisseur &agrave; la base 12.3mm, corde &agrave; la base 113mm. Version plus &eacute;paisse avec plus de corde pour un confort de navigation sup&eacute;rieur</li>
<li>&ldquo;DIM-L&rdquo; (Dimension-Medium): longueur 100cm, &eacute;paisseur &agrave; la base 12.3mm, corde &agrave; la base 113mm. La meilleure option pour la course racing sans compromis.</li>
<li>&ldquo;DIM-XL&rdquo; (Dimension-Extra Large): longueur 100cm, &eacute;paisseur &agrave; la base 12.3mm, corde &agrave; la base 113mm. Verisions plus &eacute;paisse pour un confort de navigation sup&eacute;rieur</li>
</ul>
<h3>Ailes</h3>
<p>Deux constructions</p>
<ul>
<li>&ldquo;DNA-M&rdquo; pour rigidit&eacute; MEDIUM. Plus de puissance pour les riders lours et les vents l&eacute;gers. Tarif plus abordable.</li>
<li>&ldquo;DNA-M&rdquo; pour rigidit&eacute; HARD. Plus de contr&ocirc;le dans le vente fort, la vitesse et les jibes.</li>
</ul>
<p>Surfaces :&nbsp;375, 450, 550, 650, 750, 900.&nbsp;Les ailes AEON &eacute;tant tr&egrave;s puissantes, choisissez 50 &agrave; 80cm2 de moins compar&eacute; aux autres foils du march&eacute;&nbsp;</p>
<h3>Stabilisateurs (construction DNA-H)</h3>
<ul>
<li>Surface 160cm2, Span 380mm, Aspect Ratio 9.03</li>
<li>Surface 195cm2, Span 420mm, Aspect Ratio 9.05</li>
</ul>
<h3>Fuselages</h3>
<p>Deux constructions</p>
<ul>
<li>&ldquo;Aluminium&rdquo; : plus efficace que le carbone en terme de &nbsp;compatibilit&eacute;, rigidit&eacute; et solidit&eacute; tri-dimensionelle</li>
<li>&ldquo;Titane&rdquo;: &nbsp;plus efficace que le carbone et l\'aluminium offrant enore plus de rigidit&eacute; et permettant de r&eacute;duire la section et donc la traint&eacute;e</li>
</ul>
<p>Tailles</p>
<ul>
<li>&ldquo;100cm-V1&rdquo;: Version slalom travers / upwind.</li>
<li>&ldquo;100cm-V2&rdquo;: Version travers /downwind.</li>
<li>&ldquo;100cm-V3&rdquo;: Version downwind / Speed et vent fort.</li>
<li>&ldquo;110cm-V1&rdquo;: Course racing forte puissance</li>
<li>&ldquo;110cm-V2&rdquo;: Course racing puissance m&eacute;dium</li>
</ul>
<p>&nbsp;</p>
</div>
</div>
</div>',
    'brand_id' => '77',
    'category_id' => '1',
    'created_at' => '2023-08-21 12:57:13',
    'id' => '245',
    'last_ip' => '60.127.213.235',
    'link_presentation' => NULL,
    'link_product' => 'https://www.glissattitude.com/shop/p05230002650-patrik-aeon-foil-set-pwa-alu-450-650-5251',
    'link_test' => NULL,
    'name' => 'AEON Slalom S DNA-H',
    'price' => '4234.00',
    'programme_end' => '10',
    'programme_start' => '5',
    'slug' => 'patrick-aeon-slalom-s-dna-h-2023',
    'status' => 'Published',
    'updated_at' => '2024-09-09 09:48:27',
    'user_id' => '1',
    'views' => '3389',
    'year' => '2023',
),
187 => 
array (
    'body' => '<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8233.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8232.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8231.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8228.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8225.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8224.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8223.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8222.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8221.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8220.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8219.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8218.jpeg" alt=""></p>
<p><img src="https://windfoilfan.glissattitude.com/storage/photos/1/DIVERS/IMG_8217.jpeg" alt=""></p>',
    'brand_id' => '1',
    'category_id' => '3',
    'created_at' => '2023-09-11 14:29:25',
    'id' => '246',
    'last_ip' => '52.167.144.187',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'Photos',
    'price' => NULL,
    'programme_end' => NULL,
    'programme_start' => NULL,
    'slug' => 'ab-photos-2025',
    'status' => 'Hidden',
    'updated_at' => '2024-08-30 07:43:27',
    'user_id' => '1',
    'views' => '340',
    'year' => '2025',
),
188 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-4"><img class="cms-img-fluid" src="/storage/photos/1/2023/[WB-INFINITE-86-2024] Phantom INFINITE LT BOARD 2024 (86).jpg" alt="Infinitte LTD Board" width="1000" height="1000"></div>
<div class="col-lg-6">
<p>Flotteur produit en petite s&eacute;rie, et d&eacute;velopp&eacute; par Nicolas Goyard, avec un shape r&eacute;volutionnaire &agrave; bouchains vif.</p>
<p>La car&egrave;ne &agrave; bouchains vif permettant de diminuer la train&eacute;e a&eacute;rodynamique, de r&eacute;duire la surface mouill&eacute;e lors de touchettes et de pouvoir avoir beaucoup d\'angle &agrave; la contre gite et dans les gybes sans toucher l\'eau.</p>
<p>Le mot du d&eacute;veloppeur :&nbsp;</p>
<div>Apr&egrave;s des ann&eacute;es de recherche sur l\'ensemble du mat&eacute;riel, j\'ai cherch&eacute; un moyen de faire une vrai avanc&eacute;e technologique dans le monde du foil.&nbsp;</div>
<div>L\'objectif &eacute;tait d\'innover et d\'entrer dans une nouvelle g&eacute;n&eacute;ration de planches, tout comme en 2020 lorsque tout le monde a commenc&eacute; &agrave; adopter des formes de pont assez plates.</div>
<div>&nbsp;</div>
<div>L\'id&eacute;e d\'une forme de car&egrave;ne non plate n\'est pas de moi ; je l\'ai d&eacute;couverte sur les forums. &Agrave; partir de l&agrave;, j\'ai con&ccedil;u un premier prototype pour voir comment cela pourrait fonctionner.&nbsp;</div>
<div>L\'id&eacute;e semblait prometteuse car elle permettait de relever les rails au-dessus de l\'eau tout en les rendant plus fins, r&eacute;duisant potentiellement la tra&icirc;n&eacute;e.</div>
<div>&nbsp;</div>
<div>Cependant, j\'&eacute;tais sceptique quant &agrave; la mani&egrave;re dont la planche se comporterait lors des touchettes et, plus important encore, pour le d&eacute;part au planning et le d&eacute;collage.&nbsp;</div>
<div>Ensuite, je l\'ai essay&eacute;, et j\'&eacute;tais choqu&eacute;. La planche &eacute;tait plus stable dans les airs, plus l&eacute;g&egrave;re, les jibes &eacute;taient incroyables, et les touchettes &eacute;taient bonnes. De plus, elle d&eacute;collait mieux que n\'importe laquelle de mes planches pr&eacute;c&eacute;dentes !&nbsp;</div>
<div>Mon fr&egrave;re, qui ne me croyait pas au d&eacute;but, l\'a essay&eacute;e et confirm&eacute;e. Nous &eacute;tions sur la bonne voie ! Bien s&ucirc;r, c\'&eacute;tait un premier prototype, et je savais qu\'il pourrait &ecirc;tre bien meilleur.</div>
<div>&nbsp;</div>
<div>&Agrave; partir de l&agrave;, ce fut un long processus de recherche en 3D utilisant des outils de simulation pour trouver le juste &eacute;quilibre entre la minimisation de la tra&icirc;n&eacute;e a&eacute;rodynamique et le maintien de la stabilit&eacute; dans l\'air.&nbsp;</div>
<div>La stabilit&eacute; dans l\'air a &eacute;t&eacute; l\'&eacute;l&eacute;ment sur lequel j\'ai le plus mis l\'accent, et cela a fonctionn&eacute; encore mieux que pr&eacute;vu. Nous avons vis&eacute; cela sans sacrifier le d&eacute;part au planning, tout en am&eacute;liorant le confort lors des touchettes et en facilitant les jibes.&nbsp;</div>
<div>La planche dans son ensemble a d&eacute;sormais plus de performances qu\'auparavant, et en plus, elle est plus facile !</div>
<div>&nbsp;</div>
<div>C\'&eacute;tait un v&eacute;ritable d&eacute;fi, mais je suis tellement excit&eacute; du r&eacute;sultat !&nbsp;</div>
<div>L\' Infinite 86 m\'a m&ecirc;me permis de battre mon record de vitesse dans des conditions de vent o&ugrave; j&rsquo;aurais du utiliser une planche beaucoup plus petite.&nbsp;</div>
<div>Cela montre &agrave; quel point la tra&icirc;n&eacute;e a&eacute;rodynamique a &eacute;t&eacute; am&eacute;lior&eacute;e et &agrave; quel point il est plus facile de pousser sur le foil lorsque l\'on se sent en s&eacute;curit&eacute; pour prendre une rafale et/ou effectuer une touchette &agrave; plus de 40 n&oelig;uds.&nbsp;</div>
<div>J\'ai h&acirc;te de continuer &agrave; repousser les limites avec ces planches incroyables !</div>
<div>&nbsp;</div>
<p>Edition limit&eacute;e &agrave; 40 exemplaires maximum pour Fev 2024 : 10x 76L / 25x 86L / 5x 95L</p>
</div>
</div>
</div>',
    'brand_id' => '78',
    'category_id' => '2',
    'created_at' => '2023-10-13 17:05:19',
    'id' => '247',
    'last_ip' => '136.226.238.165',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'INFINITE LTD 86',
    'price' => '3249.00',
    'programme_end' => '8',
    'programme_start' => '5',
    'slug' => 'phantom-infinite-ltd-86-2024',
    'status' => 'Published',
    'updated_at' => '2024-09-06 06:39:35',
    'user_id' => '1',
    'views' => '3687',
    'year' => '2024',
),
189 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-lg-6">
<p>Dans le monde du windfoil, les bouts de harnais vario sont devenus un indipensable, surtout dans les pratiques freerace, Slalom et Race. En effet, on va se rapprocher de la voile dans le tr&egrave;s l&eacute;ger, et au contaire naviguer ultra long dans le vent soutenu pour abaisser notre centre de gravit&eacute; au maximum. A tr&egrave;s haut niveau, il n\'est pas rare de voir des bouts de plus de 50cm !</p>
<p>2 probl&egrave;mes principaux surviennent :</p>
<ul>
<li>comment avoir une telle plage de r&eacute;glage ?</li>
<li>comment &eacute;viter que des bouts si longs ne fasse balancier au point de devenir inaccrochables&nbsp;</li>
</ul>
<p>A ce jeux, certains mod&egrave;les se sont vite impos&eacute;s sur le march&eacute; : le starboard Racing Vario avec son taquet AT Technology, le SideOn Regatta pro (Clamcleat), le Maksior (HanressLine.com), et plus r&eacute;cemment le Patrik Vario Comp. Tous ces bouts assez hon&eacute;reux sont bas&eacute;s sur l\'utilisation d\'un taquet coinceur. En effet, les syst&egrave;mes &agrave; sangle ne permettent ni une plage de r&eacute;glage suffisante, ni une fluidit&eacute; de r&eacute;glage en navigation, ni une rigidit&eacute; int&eacute;ressante &agrave; l\'usage.</p>
<p>Dans le monde de l\'accessoire, la marque <strong>LISA</strong> se fait petit &agrave; petit une place &agrave; part. A l\'inverse de beaucoup, LISA ne se contente pas de faire &eacute;voluer des produits existants, mais repart de la fonction pour proposer de vraies innovations. On a eu l\'occasion de pr&eacute;senter son wishbone qui repr&eacute;sente l\'&eacute;tat de l\'art en la mati&egrave;re (poign&eacute;e carbone, grip thermo ultra fin, syst&egrave;me d\'&eacute;coute interne spectra), ou les poulies d\'&eacute;coute ultra pratiques. Cette fois, LISA s\'attaque au bout de harnais avec l&agrave; encore de vraies innovations.&nbsp;</p>
<p>Nous avions test&eacute; il y a 1 an les bouts mono-brin, mais j\'avoue ne pas &ecirc;tre fan de ce concept en slalom ou en foil. Je n\'avais donc pas pu juger de leur apport. Cette fois, LISA nous propose la version duo plus classique. Cet &eacute;t&eacute;, j\'ai eu la chance d\'effectuer un test longue dur&eacute;e, et d\'&eacute;changer r&eacute;guli&egrave;rement avec leur concepteur pour faire &eacute;voluer le concept dans les moindre d&eacute;tails. Aujourd\'hui, LISA lance la commercialisation d\'un mod&egrave;le d&eacute;finitif, qui repr&eacute;sente un v&eacute;ritable bon en avant dans le domaine.</p>
<p>Sur de nombreux points, on est sur un niveau de performance &eacute;quivallent aux t&eacute;nors</p>
<ul>
<li>une plage de r&eacute;glage infinie (elle ne d&eacute;pend que du bout amovible dont on l\'&eacute;quipe)</li>
<li>une installation sans d&eacute;monter le wish (merci quand on a un wish avec palan int&eacute;gr&eacute;)</li>
<li>une fluidit&eacute; impeccable</li>
<li>un lock / release ultra facile et intuitif grace au taquet coinceur</li>
</ul>
<p>LISA se diff&eacute;rentie de la concurrence avec&nbsp;</p>
<ul>
<li>une solidit&eacute; &agrave; toute &eacute;preuve, et la suppression totale des sangles qui s\'usent par frottement</li>
<li>un tarif inferieur &agrave; 100eur, au contraire des Starboard ou autre Patrik</li>
<li>une nouvelle r&eacute;f&eacute;rence en terme de rigidit&eacute; sur le wishbone : les bouts balancent encore moins qu\'avec le Patrick ou le Maksior</li>
<li>un r&eacute;glage de position sans velcros ni visserie</li>
</ul>
<p>Nous avons &eacute;t&eacute; un peu tatillon lors des tests (mes excuses &agrave; Nico que j\'ai emb&ecirc;t&eacute; jusqu\'au bout ... sans mauvais jeu de mot), mais le jeu en vallait la chandelle car on a d&eacute;sormais un bout qui, pour moi, va faire r&eacute;f&eacute;rence.</p>
<p>Sur les photos, vous d&eacute;couvrirez</p>
<ul>
<li>la version 1 puis la version 2 (en bas) du bout LISA vario</li>
<li>Le LISA vario mont&eacute;</li>
<li>Le bout LISA en sortie de jibe, id&eacute;alement positionn&eacute; pour raccorcher le harnais</li>
<li>Le bout LISA duo utilis&eacute; en version longue</li>
</ul>
<h3>Version 1 :</h3>
<p>La premi&egrave;re version du bout LISA duo a apport&eacute; deux avantages majeurs : la robutesse puisque les 2 machoires sont fabriqu&eacute;es dans une mati&egrave;re plastique souple ext&ecirc;mement r&eacute;sistante, et la rigidit&eacute; gr&acirc;ce au tube bleu coll&eacute;, qui reste parfaitement ax&eacute;</p>
<p>Ses points faibles : les deux machoires &eacute;taient ferm&eacute;es sur le wishbone &agrave; l\'aide d\'une vis assez difficile &agrave; manipuler. Personnellement, j\'&eacute;tais oblig&eacute; d\'utiliser une pince pour verrouiller le syst&egrave;me correctement. D\'autre part, avec mon harnais de kitesurf dont la boucle est optimis&eacute;e pour le maintien du chicken-loop, j\'avais du mal &agrave; me d&eacute;crocher du bout au jibe ... assez g&eacute;nant sur la quand il faut faire un jibe tous les 500m.</p>
<h3>Version 2</h3>
(celle du bas sur la premi&egrave;re photo)
<p>Cette fois, les machoires sont autoserrantes. C\'est la tension du bout de harnais qui serre la machoire sur le wish ... il fallait juste y penser. D&egrave;s lors, plus de vis &agrave; manipuler, et une facilit&eacute; de r&eacute;glage de position des bouts qui fait un bon en avant. Avec un peu d\'habitude, il devient m&ecirc;me possible de r&eacute;gler le position sur l\'eau sans se battre avec les velcros.</p>
<p>Le syst&egrave;me de guidage du bout fait d&eacute;sormais appel &agrave; un unique tube bleu (au lieu du tube doubl&eacute;) coll&eacute; dans la machoire sur une bonne longueur. On y gagne encore en rigidit&eacute;, et on n\'a plus de rotation du gros tube, qui g&eacute;nait lors du d&eacute;crochage au jibe.</p>
<h3>Version 2.1</h3>
<p>Pour &eacute;viter de d&eacute;placer l\'attache lorsqu\'elle n\'est plus sous tension, par inadvertance lors du jibe ou des manipulations, LISA vient d\'ajouter un dispositif &eacute;latique qui s&eacute;curise la position de l\'attache (celle qui a le taquet) sur le wish</p>
<h3>Test</h3>
<p>Le lisa DUO se distingue vraiment de la concurrence par l\'absence de balan, &agrave; la fois gr&acirc;ce &agrave; la rigidit&eacute; du montage, et la l&eacute;g&egrave;ret&eacute; du bout. A la sortie du jibe, le bout reste parfaitement en place pour un accrochage ais&eacute;</p>
<p>Avec la version 2, la machoire int&eacute;grant le taquet se lib&egrave;re d&egrave;s que la tension du bout diminue. Sur les premiers jibe, je me suis fait pi&egrave;ger en d&eacute;pla&ccedil;ant accidentellement la machoire avec mes mains. Une fois compris, cela ne m\'est plus arriv&eacute;, et la V2.1 solution directement ce petit soucis. Au contraire, j\'ai r&eacute;ussi &agrave; r&eacute;gler la position des bouts sur l\'eau, de fa&ccedil;on assez intuitive</p>
<p>Contrairement &agrave; la V1, et sans changer de boucle de harnais (boucle kite &eacute;largie), je n\'ai pas eu de difficult&eacute; &agrave; la d&eacute;crocher &agrave; l\'amorce du jibe.&nbsp;</p>
<p>Comme c\'&eacute;tait ma premi&egrave;re r&eacute;tiscence , je pr&eacute;cise aussi que les machoires en plastiques ne sont en aucun cas g&eacute;nantes pour les mains sur le wish. D\'une part, on met rarement les mains &agrave; cet endroit, et elles ne sont finalement pas plus contendantes qu\'une sangle + velcro. &nbsp;</p>
<p>Bon, j\'ai beau le prendre dans tous les sens, je pense que l\'on a l&agrave; d&eacute;sormais le bouit de harnais le plus abouti du march&eacute;. Il semblerait que notre cher Nico G. ait fait la m&ecirc;me conclusion 😏</p>
<h3>Commande</h3>
<p>Les LISA duo sont <a href="https://www.glissattitude.com/shop/ws434-lisa-duo-harnessline-4998#attr=22399,22395">dors et d&eacute;j&agrave; disponibles ici</a>.</p>
</div>
<div class="col-lg-6"><img class="cms-img-fluid" src="/storage/photos/1/2023-10/IMG_8307.jpeg" alt="Bout LISA Vario duo"> <img class="cms-img-fluid" src="/storage/photos/1/2023-10/IMG_6395.jpeg" alt="bouts LISA mont&eacute;s sur wishbone"> <img class="cms-img-fluid" src="/storage/photos/1/2023-10/8110d6fd-fd77-4d9b-acb5-235faaec814f.jpeg" alt="bouts LISA au jibe"> <img class="cms-img-fluid" src="/storage/photos/1/2023-10/e3372ed8-da09-4d04-87ab-f982a1b61f05.jpeg" alt="bouts LISA longs"></div>
</div>
</div>',
    'brand_id' => '57',
    'category_id' => '3',
    'created_at' => '2023-10-30 13:56:17',
    'id' => '250',
    'last_ip' => '173.252.107.4',
    'link_presentation' => NULL,
    'link_product' => 'https://www.glissattitude.com/shop/ws434-lisa-duo-harnessline-4998#attr=22399,22395',
    'link_test' => NULL,
    'name' => 'Bouts Vario DUO',
    'price' => '99.00',
    'programme_end' => '10',
    'programme_start' => '5',
    'slug' => 'lisa-bouts-vario-duo-2024',
    'status' => 'Published',
    'updated_at' => '2024-09-06 22:43:32',
    'user_id' => '1',
    'views' => '1932',
    'year' => '2024',
),
190 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-4"><img class="cms-img-fluid" src="https://windfoilfan.glissattitude.com/storage/photos/1/2024/goliath-slalom-foil.jpg" alt="" width="700" height="700"></div>
<div class="col-8">
<p>Le foil complet Goliath Speed allie vitesse et acc&eacute;l&eacute;ration en windfoil.&nbsp;<br>Il est id&eacute;al pour les riders qui veulent repousser leurs limites en slalom foil.&nbsp;<br>Il est fabriqu&eacute; en carbone par la marque fran&ccedil;aise Select.<br>Le Goliath Speed est compos&eacute; du m&acirc;t de 97 cm Goliath WD, du fuselage Vector en 97 ou 110 cm, de l\'aile avant Goliath Speed et du stabilisateur Goliath.&nbsp;<br>Il est livr&eacute; dans sa housse avec des pochettes de protections pour les ailes, des cales de Rake et de stabilisateur, l\'aileron Goliath Back Fin, un set de cl&eacute; allen, un guide pour r&eacute;gler votre foil, des vis de rechange et de la graisse pour l\'entretien.</p>
<p>Par rapport au march&eacute; actuel du windfoil, les sp&eacute;cificit&eacute; du Goliath sont&nbsp;</p>
<ul>
<li>le choix d\'un fuselage carbone (+ pas de corrosion)</li>
<li>l\'ajout d\'une d&eacute;rive de queue (stabilise le lacet et compense l\'absence de winglet)</li>
<li>l\'utilisation de carbone moins on&eacute;reux que les Phantom ou Patrick. Moyennant une concession sur la rigidit&eacute; en torsion du mat (et donc du contr&ocirc;le), cela permet de proposer un foil moins cher que la concurrence&nbsp;</li>
<li>un mat avec une corde assez large en queue, et qui reste un peu plus &eacute;pais en bas que les plus affut&eacute;s (environ 1mm de plus)</li>
<li>une gamme d\'aile tr&egrave;s large entre 460 et 1320 cm2</li>
</ul>
</div>
</div>
</div>',
    'brand_id' => '93',
    'category_id' => '1',
    'created_at' => '2024-04-06 08:39:53',
    'id' => '251',
    'last_ip' => '81.65.141.235',
    'link_presentation' => NULL,
    'link_product' => NULL,
    'link_test' => NULL,
    'name' => 'GOLIATH',
    'price' => '2350.00',
    'programme_end' => '7',
    'programme_start' => '5',
    'slug' => 'select-goliath-2024',
    'status' => 'Published',
    'updated_at' => '2024-09-09 09:09:59',
    'user_id' => '1',
    'views' => '390',
    'year' => '2024',
),
191 => 
array (
    'body' => '<div class="container">
<div class="row">
<div class="col-6">
<p><img class="cms-img-fluid" src="/storage/photos/1/2024/SeverneHYPER7.jpg" alt="" width="800" height="800"></p>
</div>
<div class="col-6">
<p>La voile &laquo; HyperGlide &raquo; devient &laquo; Hyper &raquo;. Ce changement repr&eacute;sente la progression du d&eacute;veloppement initial d\'une voile d&eacute;di&eacute;e au foil vers un mod&egrave;le d&eacute;volu &agrave; la performance ultime en PWA.</p>
<p>Les r&eacute;sultats sont &eacute;difiant. Avec l\'HyperGlide, l\'&eacute;quipe Severne a remport&eacute; les titres suivants en 2023 : champion du monde de slalom masculin PWA, vice-champion du monde masculin PWA et champion du monde de slalom f&eacute;minin PWA.</p>
<p>L&rsquo;h&eacute;ritage de l&rsquo;Hyper est clair : elle a remport&eacute; d\'innombrables titres nationaux, continentaux et mondiaux au fil des ans, et a constitu&eacute; la base du programme de course olympique actuel.</p>
<h4>Quoi de neuf ?</h4>
<p>Les profils d\'entr&eacute;e Hyper 7 sont plus plats et s\'approfondissent &agrave; mesure que vous reculez dans le profil. Cette modification de conception se traduit par plus de glisse et une sensation de glisse en vol. La configuration &agrave; faible tra&icirc;n&eacute;e est renforc&eacute;e par une zone plus ouverte juste au-dessus de la fl&egrave;che.&nbsp;</p>
<p>Dans l\'ensemble, la voile g&eacute;n&egrave;re &eacute;galement moins d\'appui vertical sur votre planche. Mais aussi plus de stabilit&eacute; en vol, donc un meilleur contr&ocirc;le et plus de vitesse. La puissance d&eacute;livr&eacute;e est neutre et intuitive, ce qui permet d\'exploiter une plage de vent plus large en restant confortable et efficace.&nbsp;</p>
<p>Le r&eacute;sultat d&eacute;livre une conduite beaucoup plus douce, mais si vous verrouillez l\'Hyper 7, elle r&eacute;agira de mani&egrave;re d&eacute;cisive pour une performance gagnante en course. Volez en premi&egrave;re classe.</p>
<p>MISE &Agrave; NIVEAU HYPER 7</p>
<ul>
<li>Profil d\'entr&eacute;e affin&eacute;</li>
<li>Nouveau mat&eacute;riau de manchon plus lisse</li>
<li>Plage de vent plus large</li>
<li>Vitesse de pointe plus &eacute;lev&eacute;e</li>
<li>Nouvelle surface 4.0</li>
</ul>
</div>
</div>
</div>',
    'brand_id' => '95',
    'category_id' => '3',
    'created_at' => '2024-05-02 21:51:30',
    'id' => '252',
    'last_ip' => '148.64.100.94',
    'link_presentation' => NULL,
    'link_product' => 'https://www.glissattitude.com/shop/severne-hyper-7-2024-7500',
    'link_test' => NULL,
    'name' => 'Hyper 7',
    'price' => '1399.00',
    'programme_end' => '9',
    'programme_start' => '5',
    'slug' => 'severne-hyper-7-2024',
    'status' => 'Published',
    'updated_at' => '2024-09-05 02:59:13',
    'user_id' => '1',
    'views' => '973',
    'year' => '2024',
),
));
        
        
    }
}