<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                    'user_id' => '1',
                    'post_categories_id' => '1',
                    'body' => "<div class='container'>
<div class='row'>
<div class='col'>
<p>Avec l'explosion de la pratique du foil en quelques ann&eacute;es, la plupart des marques propopsent d&eacute;sormais leur mod&egrave;le, et ceci vient s'ajouter aux foils propos&eacute;s par les fabriquants sp&eacute;cifiques.</p>
<p>La cons&eacute;quence est<span style='color: #ff0000;'><strong> un choix exceptionnellement vaste</strong></span> pour un sport qui n'a que 6 ans d'existance ... et cela devient logiquement un v&eacute;ritable casse t&ecirc;te pour celui qui d&eacute;sire investir. Bien &eacute;videmment, plus on cherche des avis pour fonder son choix, plus on est inond&eacute; de conseils contradictoires.</p>
<p>Pour autant, nos nombreux tests montrent que les mod&egrave;les sont tr&egrave;s diff&eacute;rents entre eux, et logiquement certains conviendront mieux que d'autres &agrave; votre pratique personnelle. On essaye donc ici de faire un point &agrave; un instant T avec notre point de vue.</p>
</div>
<div class='col'>
<div style='background-color: powderblue; padding: 10px; margin-bottom: 10px;'>Non, il n'y a pas 1 foil meilleur que les autres. Ce n'est pas parceque vous me voyez souvent naviguer avec du F4, Phantom et Moses que se sont les meilleurs foils, mais simplement que ce sont des r&eacute;f&eacute;rences int&eacute;ressantes qui me servent comme base de comparaison pour leurs qualit&eacute;s respectives.</div>
<div style='background-color: powderblue; padding: 10px;'>Ce n'est pas parceque vous avez fait un choix diff&eacute;rent du n&ocirc;tre que nous pensons que vous avez tort. D'abord car nous testons avec nos ressentis, et ensuite car nos choix s'appuient sur des comparaisons : quand on conseille un mod&egrave;le en notre &acirc;me et conscience, c'est qu'on le consid&egrave;re comme un meilleur choix, mais cela ne veut pas dire que ce soit le seul.</div>
</div>
</div>
<div class='row'>
<div class='col'>
<h2>Les param&egrave;tres du choix</h2>
<p>Les choses &eacute;tant pos&eacute;es, on nous interroge quotidiennement sur le choix d'un foil et, comme je r&eacute;ponds syst&eacute;matiquement, faire un choix &agrave; un instant T dans un panel si large n&eacute;cessite id&eacute;alement de prendre en compte de tous les &eacute;l&eacute;ments suivants</p>
<ul>
<li>Votre niveau technique en foil</li>
<li>Votre gabarit</li>
<li>Vos attirances (vitesse, facilit&eacute;, maniabilit&eacute;, etyc.)</li>
<li>Vos conditions de navigation principales (plan d'eau, plage de vent)</li>
<li>Votre flotteur</li>
<li>Vos voiles (mod&egrave;les et tailles)</li>
<li>Votre budget</li>
<li>Votre envie d'&eacute;volution</li>
<li>Vos contraintes de transport et de stockage</li>
</ul>
<p>En secouant le tout, on a des chances de faire un choix qui va permettre d'optimiser le plaisir que vous allez prendre sur l'eau, tout en respectant vos contraintes. Evidemment, compte tenu du nombre de param&egrave;tres, ce choix doit &ecirc;tre tr&egrave;s individualis&eacute;. Qui plus est, le conseil que nous pourrons donner &eacute;volue en fonction des nouveaux mod&egrave;les (ou nouvelles configurations) qui sortent r&eacute;guli&egrave;ment et viennent bouleverser (ou pas) la donne.</p>
<p>Pour faire ce choix, notre base de donn&eacute;e de test (<a href='https://windfoilfan.glissattitude.com'>https://windfoilfan.glissattitude.com</a>) est un outil pr&eacute;cieux mais je me suis tout de m&ecirc;me essay&eacute; &agrave; l'exercice de faire une proposition de mod&egrave;le pr&eacute;f&eacute;rentiel pour chaque case d'une matrice PROGRAMME / GABARIT. Lorsqu'il y a plusieurs choix, j'ai indiqu&eacute; en <span style='color: #800080;'><strong>VIOLET</strong></span>, le param&egrave;tre essentiel qui oriente vers le choix de ce mod&egrave;le.</p>
<h2>S&eacute;lection DEBUTANT (au 10/01/2022)</h2>
<table>
<tbody>
<tr>
<td style='width: 10%;'>&nbsp;</td>
<td style='width: 30%;'>Petit gabarit</td>
<td style='width: 30%;'>Gabarit moyen</td>
<td style='width: 30%;'>Gros gabarit</td>
</tr>
<tr>
<td>
<p>Objectif : voler avec un investissement minimum (autour de 1000eur)</p>
</td>
<td style='background-color: powderblue;' colspan='2'>
<p><span style='color: #800080;'><strong>RASSURANT</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/starboard-supercruiser-2019'>Starboard Supercruiser</a> : pour ceux qui favorisent le c&ocirc;t&eacute; ultra rassurant en acceptant une vitesse r&eacute;duite, et une &eacute;volutivit&eacute; moindre</p>
<p><span style='color: #800080;'><strong>EVOLUTIF</strong></span></p>
<p>Alpinefoil Revo : pour ceux qui favorisent l'&eacute;volutivit&eacute; (compatible avec toute la gamme d'aile Alpine), avec une glisse sup&eacute;rieure au Supercruiser</p>
</td>
<td style='background-color: powderblue;'>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/fanatic-flow-900-2019'>Fanatic Flow 1200</a> : pour ceux qui privil&eacute;gient le contr&ocirc;le et la polyvalence</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<h2>S&eacute;lection FREERIDE (au 10/01/2022)</h2>
<table>
<tbody>
<tr>
<td style='width: 10%;'>&nbsp;</td>
<td style='width: 30%;'>Petit gabarit</td>
<td style='width: 30%;'>Gabarit moyen</td>
<td style='width: 30%;'>Gros gabarit</td>
</tr>
<tr>
<td>
<p>Objectif : se balader avec une vitesse lin&eacute;aire, sans chercher la vitesse, et en paufinant ses manoeuvres</p>
</td>
<td style='background-color: powderblue;'>
<p><span style='color: #800080;'><strong>ECONOMIQUE</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/taaroa-noe-80-freeride-2018'>Taaroa Noe 80</a> : Pour ceux qui veulent accompagner un flotteur plut&ocirc;t &eacute;troit, et des voiles inf&eacute;rieures &agrave; 7.5m2</p>
</td>
<td style='background-color: powderblue;'>
<p><span style='color: #800080;'><strong>MANIABLE &amp; PLAGE D'UTILISATION (light &gt; strong wind)</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/ga-mach-1-2019'>Moses Vento 85 Freeride</a>&nbsp;Pour ceux qui privil&eacute;gient un foil vivant, peu rapide, mais qui d&eacute;colle t&ocirc;t et offre des belles sensations de glisse. Excellent &eacute;galement en mode FREEWAVE dans le vent soutenu</p>
<p><span style='color: #800080;'><strong>NAV CALEE &amp; VENT MEDIUM &agrave; FORT</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/afs-wind-85-2019'>AFS Wind 85</a> (F770 ou F1080 au dessus de 85kg) : Pour ceux qui pr&eacute;f&egrave;rent une attitude cal&eacute;e, plut&ocirc;t rapide, et acceptent un d&eacute;collage un peu plus tardif que la moyenne</p>
</td>
<td style='background-color: powderblue;'>
<p><span style='color: #800080;'><strong>PUISSANT &amp; NERVEUX</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/lokefoil-lk1-performance-2021'>Lokefoil Lk1</a>&nbsp;: Pour ceux qui aiment naviguer en finesse sur un foil vivant sans surtoiler</p>
</td>
</tr>
</tbody>
</table>
<h2>S&eacute;lection FREERACE / SLALOM (au 10/01/2022)</h2>
<table>
<tbody>
<tr>
<td style='width: 10%;'>&nbsp;</td>
<td style='width: 30%;'>Objectif perf</td>
<td style='width: 30%;'>&nbsp;</td>
<td style='width: 30%;'>Objectif accessibilit&eacute;</td>
</tr>
<tr>
<td rowspan='2'>
<p><strong>FREERACE / SLALOM</strong></p>
<p>Objectif : &eacute;volution rapide avec un mix Travers et Up&amp;Down</p>
</td>
<td style='background-color: powderblue;'>
<p><span style='color: #800080;'><strong>100% PERF</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/phantom-iris-x-proto-2-2019'>Phantom IRIS X</a>&nbsp;et R, Pour ceux qui privil&eacute;gient une navigation en finesse et aiment un foil vif mais avec une glisse incroyable. &nbsp;</p>
<p>Le R est LE FOIL le plus rapide actuellement, mais l'exploiter r&eacute;cessite un vrai &nbsp;bon niveau technique (plus vif que la moyenne)</p>
</td>
<td style='background-color: powderblue;' colspan='2'>
<p><span style='color: #800080;'><strong>TOP CONTROLE</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/taaroa-noe-97-uhm-2020'>Taaroa Noe 97 Freerace</a>&nbsp;: Pour ceux qui cherchent un maximum de contr&ocirc;le dans toutes les conditions (m&ecirc;me form&eacute;es)</p>
<p><span style='color: #800080;'><strong>RAPIDE AU TRAVERS</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/afs-wind-95-v2-2021'>AFS Wind 95</a>&nbsp;: Pour ceux qui aiment une conduite assez cal&eacute;e, o&ugrave; on peut passer de la puissance pour faire parler le GPS</p>
<p><span style='color: #800080;'><strong>FACILE &amp; EFFICACE LIGHT WIND &amp; BON CAP</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/zeeko-bullet-v1-2020'>Zeeko Bullet</a>&nbsp;ou <a href='https://windfoilfan.glissattitude.com/devices/foil/zeeko-bullet-uhm-2021'>Patrik HM</a> : Pour ceux qui veulent un foil tr&egrave;s facile d'acc&egrave;s mais efficace et extr&ecirc;mement polyvalent, que ce soit au cap ou dans le light</p>
</td>
</tr>
<tr>
<td style='background-color: powderblue;' colspan='3'>
<p><span style='color: #800080;'><strong>COMPLET</strong></span></p>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/f4-race-2021'>F4</a>&nbsp;: Pour ceux qui cherchent un ensemble contr&ocirc;le / vitesse / polyvalence quasi imbattable, mais acceptent une qualit&eacute; de fabrication des fuselages et une finition standard en retrait.</p>
<p>Il vient &eacute;galement couvrir la case 'accessibilit&eacute;' grace &agrave; son contr&ocirc;le facile, mais &agrave; condition de l'&eacute;quiper en option d'une des ailes de race (850 ou 950) car la 620 fournie en standard dans le set Slalom peut se r&eacute;v&egrave;ler trop juste dans le light pour les utilisateurs moins aguerris.</p>
</td>
</tr>
<tr>
<td>
<p><strong>RACE LOISIR</strong></p>
<p>Objectif : Up&amp;Down</p>
</td>
<td style='background-color: powderblue;' colspan='2'>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/phantom-iris-x-proto-2-2019'>Phantom&nbsp;IRIS X VMG</a> : Pour ceux qui privil&eacute;gient la sensation de glisse, et acceptant un pilotage plus technique.</p>
</td>
<td style='background-color: powderblue;'>
<p><a href='https://windfoilfan.glissattitude.com/devices/foil/alpinefoil-a1-race-2020'>Alpine A1 Race</a> : Pour ceux qui privil&eacute;gient le rapport Efficacit&eacute; / Prix ... sur des plan d'eau calmes. Impressionnant dans le tr&egrave;s light.&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>",
                    'title' => 'Notre sélection Foil 2022',
                    'description' => 'Petite sélection de nos foils référence à la date de Janvier 2022',
                    'views' => '5',
                    'status' => 'Published',
                    'created_at' => '2021-01-01 00:00:00',
                    'updated_at' => '2022-03-18 12:31:19',
                ),
            1 =>
                array (
                    'id' => 2,
                    'user_id' => '1',
                    'post_categories_id' => '1',
                    'body' => 'xxxx',
                    'title' => 'Notre sélection Foil 2020',
                    'description' => 'Petite sélection de nos foils référence à la date de Janvier 2020',
                    'views' => '5',
                    'status' => 'Published',
                    'created_at' => '2020-01-01 00:00:00',
                    'updated_at' => '2020-03-18 12:31:19',
                ),
        ));

        Post::factory()->count(50)->create();
    }
}
