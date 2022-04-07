<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'device_id' => 1,
                'user_id' => 1,
                'title' => 'Encore du travail ...',
                'body' => '<p>Ce test intervient &agrave; la suite de l&rsquo;essai des 2 versions 2018 et 2019 en aluminium. Nous avions constat&eacute; un manque global de rigidit&eacute; sur ces derniers, et cela limitait le contr&ocirc;le dans le vent de ces mod&egrave;les. En testant le mod&egrave;le carbone, nous nous int&eacute;resserons donc &agrave; la fois au contr&ocirc;le, et la stabilit&eacute; du foil.</p>
<p>Cette fois, nous avons &agrave; notre disposition un WH COMP 95 de s&eacute;rie. Il est &eacute;quip&eacute; d\'un fuselage de 110cm, et d\'une aile de 768cm2.&nbsp;</p>
<h4>Un premier aper&ccedil;u</h4>
<div>A l\'occasion du meeting RRD qui s\'est d&eacute;roul&eacute; en Sept 2018 en Italie, nous avions eu l\'occasion de faire 2 bords avec ce mod&egrave;le carbone, qui &eacute;quipait le flotteur d&eacute;di&eacute; course PWA de la marque. Les sensations avaient &eacute;t&eacute; assez perturbantes car il &eacute;tait tr&egrave;s difficile de maintenir le vol, sauf &agrave; mettre le pied arri&egrave;re en arri&egrave;re des straps arri&egrave;res. Ce test n\'&eacute;tait pas tr&egrave;s significatif car il s\'&eacute;tait fait avec un ensemble neuf, non r&eacute;gl&eacute;, et avec un gr&eacute;ement trop petit et un foil encore &agrave; l\'&eacute;tat de pr&eacute;-s&eacute;rie. Malgr&eacute; nos demandes aupr&egrave;s de Roberto, nous n\'avions pas eu l\'occasion jusqu\'ici, de tester un mod&egrave;le d&eacute;finitif.&nbsp;</div>
<h4>Un vrai test cette fois</h4>
<p>Comme le vent est faible, nous lui associons le plus gros des 2 stab &agrave; notre disposition.</p>
<p><img src="/storage/photos/1/2019-05/rrd-wh-comp-95-2019-fXKzSuo8dy.jpg" alt="RRD WH COMP 95" /></p>
<h4>Trouver le vol</h4>
<p>Pour un premier jet, nous associons le foil RRD &agrave; notre flotteur Starboard. Le vent est plut&ocirc;t l&eacute;ger, mais avec la 8m, quelques coups de pumping permettent d\'accl&eacute;r&eacute;rer. Par contre, impossible de faire poper le flotteur : il reste coll&eacute; &agrave; l\'eau.</p>
<p>En insistant, on parvient &agrave; prendre le planning, mais sans pour autant voler. Il faut appuyer tr&egrave;s fortement sur la pied arri&egrave;re pour finalement forcer le flotteur &agrave; d&eacute;coller, mais il est quasi impossible de maintenir le vol. Ca ressemble finalement beaucoup aux sensation que nous avions eu en Italie .. et que j\'avais associ&eacute; &agrave; un probl&egrave;me de r&eacute;galge.</p>
<p>De retour au bord, nous intervertissons les flotteurs pour faire le test avec le custom tiaki, donc le r&eacute;glage de straps est ultra arri&egrave;re (il a &eacute;t&eacute; r&eacute;gl&eacute; pour naviguer avec un foil tr&egrave;s pied arri&egrave;re). Les sensations sont similaires, mais cette fois, on arrive &agrave; rester en l\'air en mulant sur le pied arri&egrave;re. C\'est clairement inconfortable, mais le vol est stable, et la glisse tr&egrave;s correcte.Visiblement, on a un gros probl&egrave;me d\'&eacute;quilibre. On retrouve les sensations que nous avions eu en Italie.</p>
<p><img src="/storage/photos/1/2019-05/rrd-wh-comp-95-2019-0urO49XuPi.jpg" alt="RRD WH COMP 95" /></p>
<p>Retour au bord pour caler le stab avec les moyens du bord. Vu l\'&eacute;quilibre, je d&eacute;cide d\'y aller franco en mettant 2 rondelles inox de 0,7mm sous la vis avant du stab. C\'est reparti et cette fois, &ccedil;a d&eacute;colle assez facilement en popant la planche, et on retrouve un &eacute;quilibre central sans forcer. Cela permet enfin d\'analyser le comportement du foil. &nbsp;</p>
<h4>Sensations</h4>
<p>Les premiers vrais m&egrave;tres de vol permettent de trouver un foil sain, qui offre un cap assez surprenant dans le light avec une aile aussi petite.</p>
<p>La glisse est agr&eacute;able et l\'&eacute;quilibre longitudinal plut&ocirc;t stable. Dans le vent l&eacute;ger, il nous manque de la puissance pour faire acc&eacute;l&eacute;rer le foil, et il faut s\'aider de la houle. Une fois bien lanc&eacute;, et m&ecirc;me face &agrave; la houle, le contr&ocirc;le est agr&eacute;able et plut&ocirc;t facile. On ne ressent pas du tout la souplesse du mod&egrave;le aluminium.</p>
<p>Sur le plan lat&eacute;ral, on a une petite instabilit&eacute; autour du neutre, mais sans cons&eacute;quences d&egrave;s que la vitesse est suffiante. Par contre, &agrave; basse vitesse (juste apr&egrave;s le d&eacute;collage ou en sortie de jibe), l\'assi&egrave;te lat&eacute;rale est plus complexe &agrave; contr&ocirc;ler, et on est surpris par des embard&eacute;es au lof &agrave; la moindre inattention.&nbsp;</p>
<p>Apr&egrave;s diverses tentatives de r&eacute;glages, on en restera &agrave; ces premiers &eacute;l&eacute;ments, en attendant un test dans des conditions plus favortables (vent plus soutenu et voile plus petite).</p>
<h4>Bilan provisoire</h4>
<p>A la suite d\'un test rapide en Italie, puis de ce test avec des flotteurs que nous connaissons, nous pouvons l&eacute;gitimement nous questionner sur le mode de d&eacute;veloppement de ce foil. &nbsp;Comment peut on mettre sur le march&eacute; un foil qui pr&eacute;sente un tel comportement ? A t il &eacute;t&eacute; r&eacute;ellement test&eacute; par des utilisateurs avertis, et dans quelles conditions ? Compte tenu de la qualit&eacute; de fabrication du foil, comment peut on faire autant d\'effort dans la r&eacute;alisation sans aller jusqu\'au bout en proposant des r&eacute;glages d\'incidence correct ?</p>
<p>Certes, nous avons trouv&eacute; une solution pour le faire voler, et le r&eacute;sultat est plut&ocirc;t satisfaisant in fine, &nbsp;mais&nbsp;</p>
<ul>
<li>Il nous a fallu utiliser un flotteur poss&eacute;dant des inserts de straps tr&egrave;s recul&eacute;s, ce qui n\'est pas la norme</li>
<li>nous avons d&ucirc; caler le stab de pr&egrave;s de 1,5mm avec les moyens du bord</li>
</ul>
<p>Je trouve que cela consitue un vrai probl&egrave;me :</p>
<ul>
<li>quid d\'un client qui ach&egrave;te &agrave; 2000&euro; en principe un produit "pr&ecirc;t &agrave; l\'emploi" , et n\'a pas forc&eacute;ment l\'habitude de ce type de r&eacute;glage ... d\'autant plus qu\'aucune cale ni explications ne sont fournies&nbsp;</li>
<li>quid de la perturbation hydrodynamique cr&eacute;&eacute; par l\'avant du stab qui d&eacute;passe du fuselage</li>
</ul>
<p>Bref, ces p&eacute;rip&eacute;ties nous donnent un gout de produit dont le d&eacute;veloppement a &eacute;t&eacute; bacl&eacute;, et dont la mise sur le march&eacute; nous parait pr&eacute;matur&eacute;e.&nbsp;</p>',
                'test_equipment' => 'Flotteur : Starboard Foil 144 & Custom Tiaki 90cm / Voile : MauiSail TR11 7,7 et proto Xo Gold Foil 8.0',
                'test_duration' => 1,
                'test_conditions' => 'Sud-Est 10-14 knt, houle 50cm',
                'test_place' => 'La Ciotat',
                'created_at' => '2019-10-27 10:00:02',
                'updated_at' => '2020-04-03 16:38:48',
            ),
            1 => 
            array (
                'id' => 2,
                'device_id' => 2,
                'user_id' => 1,
                'title' => 'Gros contrôle, et balade tranquille ... mais pas dans la finesse',
                'body' => '<p><img src="/storage/photos/1/2019-07/fanatic-flow-900-2019-ZAalD78Wwd.jpg" alt="Fanatic Flow 900 2019" /></p>
<h3>Sur l\'eau</h3>
<p>Le Flow 900 est un foil qui n&eacute;cessite peu de vitesse pour d&eacute;coller, grace &agrave; son aile &eacute;paisse et tr&egrave;s porteuse. Pour autant, il est n&eacute;cessaire d\'avoir une puissance assez cons&eacute;quente dans la voile pour atteindre un r&eacute;gime de croisi&egrave;re o&ugrave; le foil devient stable et sain. La mont&eacute;e du foil, et l\'acc&eacute;l&eacute;ration sont tr&egrave;s linaires, ce qui donne un comportement sage et rassurant.</p>
<p>Dans le vent l&eacute;ger, le d&eacute;collage est plus laborieux, et si on manque de puissance, on reste dans un mode de vol &agrave; tr&egrave;s basse vitesse avec beaucoup d&rsquo;incidence, qui tient en l&rsquo;air mais qui n&rsquo;est pas tr&egrave;s stable .. un peu &agrave; la mode d\'un semi-planning en windsurf traditionnel.&nbsp;</p>
<p>Une fois en vol stabilis&eacute;, on trouve un foil ultra facile qui impressionne par sa stabilt&eacute; lat&eacute;rale (plus que les Starboard Supercruiser ou GA Mach 1). Sur l\'axe longitudial, le foil est assez cal&eacute; et r&eacute;agit lentement, un peu comme l\'AFS 85. Naturellement, il est plut&ocirc;t pied arri&egrave;re sur les 2 stingRay (125 et 140) avec les straps mont&eacute;s en position centrale. Avec ce r&eacute;glage, il faut soutenir en permanence avec le pied arri&egrave;re pour rester en l\'air, ou proc&eacute;der &agrave; un calage du stab. Si on rel&acirc;che cette pression, on se repose rapidement, toujours en souplesse. Dans les conditions de vent un peu soutenues, c\'est un comportement tr&egrave;s rassurant , qui incite &agrave; explorer le vol quelque soient les conditions. Ceci permettra certainement &agrave; certains de comprendre que le seul int&eacute;r&ecirc;t du foil ne r&eacute;side pas dans le vent l&eacute;ger, et qu\'il est aussi possible de se faire plaisir dans plus de 20knt sans prendre aucun risque et sans avoir peur.</p>
<p>Les pratiquants un peu plus aguerris choisiront certainement un r&eacute;glage de strap plus recul&eacute; (&agrave; fond en arri&egrave;re sur les 2 sting ray), qui permet d\'avoir un foil plus &eacute;quilibr&eacute; sur les 2 pieds. Avec ce r&eacute;glage, le vol est plus agr&eacute;able, mais le foil devient alors plus r&eacute;actif sur le plan longitudinal. Il faut &ecirc;tre un plus plus vigilent dans les rafales et anticiper.&nbsp;</p>
<p>En terme de sensation, la grande rigidit&eacute; du nouveau Fanatic offre un excellent contr&ocirc;le. On ne se sent jamais en danger, et le foil acc&eacute;l&egrave;re peu m&ecirc;me dans les rafales. En contre partie, la sensation de glisse est plut&ocirc;t en retrait (moins qu\'un Starboatrd Supercruiser ou GA Mach 1) et on sent qu\'il faut toujours de la puissance dans la voile pour maintenir la vitesse et le vol.&nbsp;</p>
<p>Comme la plupart des foils en aluminium, le Flow 900 &eacute;met un sifflement bien audible, dont la fr&eacute;quence varie avec la vitesse. C\'est beaucoup moins marqu&eacute; qu\'avec la version pr&eacute;c&eacute;dente, en particulier lorsque la vitesse devient soutenue.&nbsp;</p>
<p>Pour boucler le jibe en l\'air, il faut arriver avec une bonne vitesse. Au passage des pieds (lorsque l\'on n\'est plus dans les straps) on mesure encore mieux la tr&egrave;s grosse stabilit&eacute; lat&eacute;rale car il n\'y aucun roulis. Il tol&egrave;re beaucoup les erreurs. Les 2 cl&eacute;s pour r&eacute;ussir le jibe avec le Flow, c\'est de bien rester sur l\'arri&egrave;re de la planche en permanence pour qu\'il ne repose pas, et de jiber dans les ris&eacute;es pour limiter la baisse de vitesse naturelle.&nbsp;</p>
<p>Dans les molles, le Flow 900 a peu d\'allonge et repose rapidement. Il r&eacute;agit correctement au pumping, mais on ne fera pas des miracles. Ce n\'est pas le foil id&eacute;al si vous naviguez sur des plans d\'eau avec des vents tr&egrave;s irr&eacute;guliers avec des gros trous d\'air. Par contre, c\'est un excellent choix si vous &ecirc;tes r&eacute;guli&egrave;rement confront&eacute;s &agrave; des vents un peu soutenus, ou des plans d\'eau difficiles.</p>
<p><img src="/storage/photos/1/2019-07/fanatic-flow-900-2019-5hv15zxPMo.jpg" alt="Fanatic Flow 900 2019" /></p>
<h3>Bilan</h3>
<p>Au final, le Fanatic Flow 900 constitue un &eacute;norme progr&egrave;s par rapport &agrave; la version pr&eacute;c&eacute;dente. Avec une rigidit&eacute; tr&egrave;s importante, le contr&ocirc;le est ultra facile m&ecirc;me dans le vent soutenu. Son &eacute;quilibre plut&ocirc;t pied arri&egrave;re renforce cette impression de s&eacute;curit&eacute; dans les rafales.</p>
<p>Les pratiquants agueris pourrons lui reprocher un manque de glisse, p&eacute;nalisant les sensations et la plage basse. Pour les plus novices, par contre, c\'est un foil qui permettra de d&eacute;couvrir les joies du vol en toute qui&eacute;tude, et de se rendre compe que l\'on peut aussi prendre &eacute;norm&eacute;ment de plaisir dans le vent soutenu. Il ne faut pas se laisser impressionner par la mention "Foil performance" du site Internet Fanatic : le Flow 900 cible une pratique freeride pour ceux qui cherchent avant tout la facilit&eacute; et le confort, bien avant la glisse et les performance dans le light.</p>',
                'test_equipment' => 'Flotteur : Sting Ray 2019 125L et StingRay 2020 140L / Gréement : E TYpe 6,2 et F Type 5.8',
                'test_duration' => 3,
                'test_conditions' => 'Entre 10 et 25knt',
                'test_place' => 'Lac de Serre Ponçon / La ciotat',
                'created_at' => '2019-07-26 15:16:50',
                'updated_at' => '2020-03-30 20:55:24',
            ),
            2 => 
            array (
                'id' => 3,
                'device_id' => 3,
                'user_id' => 1,
                'title' => 'Machine de light wind',
                'body' => '<div class="multi-col-2">
<p><img style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;" src="/storage/photos/1/2019-08/lokefoil-lk-race-2019-ZBHE9qAPxx.jpg" alt="Loke Race" /></p>
</div>
<h3>D&eacute;collage</h3>
<p>On ne va pas faire durer le suspens plus longtemps : le Lk Race est &agrave; ce jour le foil avec lequel nous avons d&eacute;coll&eacute; le plus t&ocirc;t en terme de force de vent. Entre sa puissance extr&ecirc;me et son caract&egrave;re tr&egrave;s nerveux , nous avons tous les ingr&eacute;dients pour faire ce de foil une arme d&rsquo;ultra light. Sur ce terrain, il se permet donc de d&eacute;tr&ocirc;ner nos r&eacute;f&eacute;rences que sont le Starboard Race + (aile millenium), Phantom R et le F4 race 2019.</p>
<p>Comme avec les autres foils de sa cat&eacute;gorie (F4 race, Phantom R, NP F4 Racing, Starboard Race), non seulement le loke race d&eacute;colle tr&egrave;s t&ocirc;t, mais il a imm&eacute;diatement une glisse tr&egrave;s impressionnante. Ainsi, m&ecirc;me dans des vents inf&eacute;rieurs &agrave; 8 knt, il ne faut que quelques dizaines de m&egrave;tres (en &eacute;tant actif &eacute;videmment) pour se retrouver &agrave; 20knt de vitesse ! Attention, avant que tout&nbsp; monde se jette sur sa CB en esp&eacute;rant voler dans 5 knt avec 6m2, je pr&eacute;cise que ces performances ne sont actuellement possibles qu&rsquo;avec des voiles &eacute;normes (9 ou 10m2), un gr&eacute;ement parfaitement r&eacute;gl&eacute; et optimis&eacute; (mat), et une technique de pumping tr&egrave;s aboutie avec ce type de mat&eacute;riel. Vous vous doutez bien que cette puissance extr&ecirc;me n&eacute;cessite des r&eacute;glages et des &eacute;quilibres parfaits pour &ecirc;tre exploitable et contr&ocirc;l&eacute;e.</p>
<h3>Stabilit&eacute;</h3>
<p>Comme tous les foils de race, le Loke ne d&eacute;roge pas &agrave; la r&egrave;gle et offre une conduite ultra stable, tr&egrave;s bloqu&eacute;e. C&rsquo;est la seule solution pour permettre de contr&ocirc;ler &agrave; la fois un flotteur encombrant et un gr&eacute;ement gigantesque. Une fois n&rsquo;est pas coutume, je ne vais donc pas d&eacute;composer le comportement sur les 3 axes. Disons que ce comportement est quasi identique aux foils cit&eacute;s ci-avant. Je vais plut&ocirc;t m&rsquo;attacher &agrave; d&eacute;crire les diff&eacute;rences de sensations ressentis.</p>
<h3>Comportement</h3>
<p>La premi&egrave;re sensation &eacute;vidente qui ressort des tests du loke, en comparaison avec ses concurrents, est&nbsp;<strong>son caract&egrave;re nerveux voir fougueux</strong>. L&rsquo;un de mes acolytes de test a eu un qualificatif assez parlant retrouve : il l&rsquo;a compar&eacute; &agrave; un &lsquo;taureau fougueux&rsquo; : de la puissance et de la nervosit&eacute; jusqu&rsquo;au bout des cornes ! Dans les faits, ceci se traduit par des r&eacute;actions vives et intenses &agrave; la moindre erreur de la part du pilote. Ainsi, si des foils comme le F4 Race ou le NP F4 Racing vont plut&ocirc;t gommer vos erreurs, ne comptez pas sur le loke pour vous faire une fleur !&nbsp; En fait, on retrouve beaucoup de points communs avec le LK1 en terme de feeling. Les yeux ferm&eacute;s, on a exactement cette m&ecirc;me sensation de rigidit&eacute; mais de nervosit&eacute;. On ressent plus que d&rsquo;autres foils les d&eacute;formations de la structure, mais on sens que ce sont des d&eacute;formations de tr&egrave;s faible amplitude (raideur tr&egrave;s importante), avec un retour au neutre extr&ecirc;mement rapide.</p>
<p>Ce comportement n&rsquo;est pas rassurant au d&eacute;part, mais compromet finalement assez peu le contr&ocirc;le. Ainsi, le Loke reste &eacute;tonnement g&eacute;rable dans des conditions de houle bien form&eacute;e .. alors que l&rsquo;on s\'attendait &agrave; se faire vite d&eacute;sar&ccedil;onner apr&egrave;s notre premier test sur le plat. Sa force : m&ecirc;me si on ressent les d&eacute;formations de la structure, celles-ci sont tellement faibles qu\'elles ne mettent pas en d&eacute;faut la conduite du foil.</p>
<p>La 2e sensation qui caract&eacute;rise le Lk Race est son&nbsp;<strong>&eacute;norme puissance verticale et lat&eacute;rale.</strong></p>
<p><em>Verticale</em>, cela veut dire que l&rsquo;aile g&eacute;n&egrave;re une portance monumentale, &agrave; m&ecirc;me de maintenir en l&rsquo;air n&rsquo;importe quel gr&eacute;ement de 9 ou 10m. Evidemment, c&rsquo;est le caract&egrave;re qui lui conf&egrave;re cette telle capacit&eacute; &agrave; voler dans l&rsquo;ultra light, mais aussi &agrave; boucler un gibe en l&rsquo;air quasi &agrave; l&rsquo;arr&ecirc;t. En contrepartie, il faut r&eacute;gler les straps assez en avant (d&rsquo;ou l&rsquo;int&eacute;r&ecirc;t de la Starboard 144) et toujours garder de la pression sur le pied de mat (appui vers le bas dans le harnais). Lors de notre test en 8m2, j&rsquo;avais cal&eacute; le stab avec la plus grosse cale n&eacute;gative, et il faut bien &ccedil;a pour ne pas sortir de l&rsquo;eau &agrave; la moindre rafale. Pour toutes ces raisons, il est hors de question d\'utiliser le Loke race si on n\'a pas un minimum de niveau technique en foil et des voiles et flotteurs adapt&eacute;s.</p>
<p><em>Puissance lat&eacute;rale</em> : le mat du loke est un v&eacute;ritable &laquo;&nbsp;mur&nbsp;&raquo;. Cela participe clairement &agrave; son d&eacute;collage tr&egrave;s pr&eacute;coce car cela rend le pumpig avec les pieds tr&egrave;s efficace. On a un appui franc et massif qui permet d\'optimiser les mouvements de pumping et le rendement de la voile. En contre partie, il est essentiel d\'associer le loke avec des flotteurs tr&egrave;s puissants, si vous ne voulez pas y laisser vos chevilles. Notre Foil 144 de 87cm de large est clairement un minimum : ce foil est avant tout con&ccedil;u pour s\'associer aux flotteurs de course jauge PWA (91cm).</p>
<h3>Dans le vent</h3>
<p>Quand on teste le Lk Race dans le light, on a du mal &agrave; s\'imaginer comment il peut &ecirc;tre g&eacute;rable dans le vent ! La r&eacute;ponse est simple : "pr&egrave;s serr&eacute;". Et oui, n\'oublions pas que ce foil est con&ccedil;u pour un format de course Up&amp;Down. Bien &eacute;videmment, cal&eacute; contre le vent en mode cap extr&ecirc;me, le contr&ocirc;le se fait sans trop de probl&egrave;me. Je l\'ai ainsi emmen&eacute; jusqu\'&agrave; presque 20knt en 9m (en serrant les fesses quand m&ecirc;me !). Idem au grand largue : le fait de faire chuter le vent apparent permet des descentes quasi vent arri&egrave;re sans se faire &eacute;clater.</p>
<p>Dans ces conditions, j\'ai par contre bien du mal imaginer utiliser le Lk Race sur des bords travers ... &agrave; moins de franchement baisser en voile, mettre le wish tout en bas, avancer les straps &agrave; fond .. et fermer les yeux ;) Le probl&egrave;me, c\'est qu\'avec une petite voile, il n\'y a plus grand chose pour &nbsp;mettre du poids sur le nez du foil .. &ccedil;a peut vite devenir sport car il ne cherche qu\'une chose : sortir de l\'eau.&nbsp;</p>
<p>Compte tenu de l\'&eacute;volution des courses au format PWA o&ugrave; le foil devient de plus en plus pr&eacute;sent, Loke a d&eacute;velopp&eacute; 2 ails plus petites (S et M) qui vont permettre d\'utiliser le LK1 dans le vent sans s\'accrocher aux branches.&nbsp;</p>
<h3>Au cap</h3>
<p>Comme c\'est l\'allure favorite de ce type de foil, nous l\'avons confront&eacute;s &agrave; ses concurrents directs sur des parcours carr&eacute;s. Avec notre niveau technique, nous avons globalement tir&eacute; partie du loke dans toutes les phases de vent l&eacute;ger, o&ugrave; sa puissance permet syst&eacute;matiquement de prendre l\'avantage sur les autres. Il a une telle aisance dans ces conditions que cela peut vite devenir &eacute;nervant pour les autres. Par contre, quand le vent prend des tours, nous avons eu plus de mal &agrave; transformer cette puissance en vitesse, et les F4 , Starboard et Phantom sont repass&eacute;s devant.&nbsp;</p>
<h3>Au (grand) largue</h3>
<p>En mode descente au vent, le loke fait encore une fois parler sa puissance et sa capacit&eacute; &agrave; tenir en l\'air avec tr&egrave;s peu de vitesse. Il permet mieux que les autres de passer les molles, tout en gardant une allure tr&egrave;s proche du vent arri&egrave;re. Ce n\'est pas toujours payant en terme de VMG, mais &ccedil;a pemet des fois de passer quand les autres vont poser.</p>
<p>Dans la houle, son tr&egrave;s grand mat permet de surfer avec une certaine aisance en touchant assez rarement.</p>
<p><img src="/storage/photos/1/2019-08/lokefoil-lk-race-2019-MK7fdua7bV.jpg" alt="Loke Race" /></p>
<h3>Bilan</h3>
<p>Si j\'ai &eacute;t&eacute; un peu long sur la description des sensations ressenties sur le Lk Race, c\'est que l\'on a clairement ici un foil qui ne laisse pas du tout indiff&eacute;rent. A condition d\'avoir un &eacute;quipement coh&eacute;rent avec le foil, il y a de quoi prendre son pied dans des conditions un peu sp&eacute;cifiques. Ce foil bouscule nos r&eacute;f&eacute;rences en d&eacute;crochant par exemple la palme du d&eacute;collage le plus pr&eacute;coce. Par contre, ce n\'est clairement pas un foil "de tous les jours" pour naviguer travers avec les potes dans un peu de vent. Homis situation un peu exceptionnelle, et si on ne fait pas de la course, il me parait compliqu&eacute; de n\'avoir que ce mod&egrave;le pour naviguer ... mais l\'arriv&eacute;es des nouvelles ailes S et M va probablement changer la donne !</p>',
            'test_equipment' => 'Loft Skyblade en 8m2,  Severn Hyperglide 2 en 9m2, Foil 144',
            'test_duration' => 7,
            'test_conditions' => 'en Bretagne , spot de l’Aber Wrach , vent de 6 à 12 knt, plan d’eau plat  / Serre Ponçon, vent de 7 à 18 knt, plan d’eau plat à clapoteux  / La Ciotat, vent de 10 à 14 knt Sud, plan d’eau avec houle 1m',
            'test_place' => 'Aber Wrach , Serre Ponçon, La Ciotat, Frejus',
            'created_at' => '2019-08-26 20:05:23',
            'updated_at' => '2020-04-03 16:34:30',
        ),
        3 => 
        array (
            'id' => 4,
            'device_id' => 4,
            'user_id' => 1,
            'title' => 'Le freeride Plug and play',
            'body' => '<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-D6iyguL581.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>D&eacute;collage</h3>
<p>On sent que l\'ensemble FoilX + Supercruiser ne n&eacute;cessite que peu de puissance pour d&eacute;coller. Pour &ecirc;tre pr&eacute;cis, l\'acc&eacute;l&eacute;ation est molle &agrave; cause de la train&eacute;e, mais la portance arrive assez tr&egrave;s vite pour arracher le flotteur de l\'eau. Sur la photo &ccedil;i dessous, je vole avec 6,7 dans moins de 10 knt, au prix tout de m&ecirc;me de quelques efforts au pumping.</p>
<p>Pour &ecirc;tre pr&eacute;cis, ce n\'est pas le combo avec lequel j\'ai d&eacute;coll&eacute; dans le moins de vent, mais c\'est certaiement l\'un de ceux qui n&eacute;cessitent le moins de puissance v&eacute;lique pour se retrouver en vol. En cela, cette solution va &ecirc;tre appr&eacute;ci&eacute;e par tous ceux qui veulent voler facilement avec des petites voiles. Associ&eacute; au Supercruiser, la Foil X est assur&eacute;ment l\'une des meilleures solutions pour les gros gabarits qui veulent voler assez t&ocirc;t sans forc&eacute;ment chausser une voile de 8,5m2.</p>
<p>Par contre, n\'imaginez pas faire ceci &agrave; moins de 10knt ... vous seriez vite d&eacute;&ccedil;us. On le verra par la suite, mais la contre partie est un ensemble tr&egrave;s tranquille qui n\'est absoluement pas fait pour allez chercher de la performance, et sur lequel il n\'est clairement pas opportun de mettre des grandes voiles.</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-kWMD0w5w6u.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>Stabilit&eacute;</h3>
<p>Une fois en l\'air, l\'ensemble Foil X + Supercruiser est rassurant et maniable.</p>
<p>On a une excellente stabilit&eacute; longitudinale pour un fuselage de 87cm.&nbsp; Comme la planche est courte avec peu d\'inertie, le contr&ocirc;le de cet axe est tr&egrave;s intuitif, &agrave; d&eacute;faut d\'&ecirc;tre bloqu&eacute; comme sur un foil de race. Avec le supercruiser, qui est assez puissant, j\'ai ressenti un vrai int&eacute;r&ecirc;t &agrave; pouvoir d&eacute;placer le pied arri&egrave;re sur la planche pour g&eacute;rer les rafales ou molles. C\'est ainsi sans les straps arri&egrave;res que j\'ai trouv&eacute; le combo le plus int&eacute;ressant .. cela permet d\'avoir toujours un &eacute;quilibre optimal.&nbsp;</p>
<p>Sur l\'axe transversal, on a un comportement sein, mais avec un peu plus de libert&eacute; proche du neutre que dans les configurations GT ou GTS. Ces petits mouvements sont bizaremment plus sensibles sur la mat alu que sur le mat carbone. C\'est une sensation que l\'on retrouve d\'ailleurs sur la plupart des foils &agrave; grosses ailes (Glide, Mach 1, etc.). Ces mouvements sont ici un peu plus sensibles avec la Foil X qu\'avec la Foil Freeride 125 (Test&eacute; &eacute;galement avec le m&ecirc;me foil). Je pense qu\'ils sont amplifi&eacute;s par l\'&eacute;paisseur assez importante de la planche. La contre g&icirc;te est tr&egrave;s facile &agrave; g&eacute;rer avec cet ensemble.</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-ZG0hQ0EAUb.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<p>Sur l\'axe lacet, le foil est tr&egrave;s libre &eacute;galement. Lorsque l\'on ma&icirc;trise la conduite, c\'est extr&ecirc;ment ludique et on se prend vite &agrave; oublier la ligne droite pour jouer avec le foil. L&agrave; aussi, la FoilX offre tr&egrave;s peu d\'inertie et permet de conduire avec facilit&eacute; nos fantaisies.&nbsp;</p>
<h3>Glisse et Vitesse</h3>
<p>C&ocirc;t&eacute; vitesse, le Supercruiser est un foil tr&egrave;s \'tranquille\'. Dit autrement : il ne va pas vite ! Quelque soient les conditions, la vitesse reste toujours mod&eacute;r&eacute;e .. pas de quoi se faire peur. Pour les adeptes du tirage de bourre, passez votre chemin. Si au contraire vous concevez le foil en mode balade tranquile, vous allez adorer. La vitesse est tr&egrave;s lin&eacute;aire (entre 15 et 18 knt) : aucun effet d\'acc&eacute;l&eacute;ration au pr&egrave;s ou au largue.</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-ZsDNSmK5HG.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<p>En terme de sensation de glisse, on n\'a pas trop l\'impression de trainer de l\'eau, mais on est bien loin des sensations de glisse de la gamme GT ... comme on dit toujours, on ne peut pas tout avoir ;) Malgr&eacute; tout, entre la FoilX est le Supercruiser, il n\'est pas la peine de toiler beaucoup .. et je dirai m&ecirc;me que c\'est avec des toiles modestes que c\'est le plus int&eacute;ressant (je dirai entre 4 et 6.5m) car cela n\'ajoute pas d\'inertie et donc n\'&ocirc;te pas le cot&eacute; tr&egrave;s joueur de l\'ensemble.&nbsp;</p>
<p>Compte tenu de la train&eacute;e assez importante de ce type de foil, l\'allonge dans les molles est tr&egrave;s limit&eacute;e : il faut en permanence de la puissace pour maintenir le vol.</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-Rg6rOpdPKW.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>Manoeuvres</h3>
<p>En ce qui concerne&nbsp; les manoeuvres, le foil Supercruiser est r&eacute;ellement une machine &agrave; Jibe en l\'air. Il permet de rester en l\'air m&ecirc;me lorsque la vitesse devient ridicule.</p>
<p><img src="/storage/photos/1/2019-08/starboard-supercruiser-2019-1em32HSX5h.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>Bilan</h3>
<p>Ce combo Foil X 145 + Supercruiser a &eacute;t&eacute; r&eacute;ellement pour nous une d&eacute;couverte.</p>
<p>C\'est assez &eacute;loign&eacute; de ce que nous testons la plupart du temps, mais j\'ai r&eacute;elleemnt pris du plaisir en mode strapless, avec des petites voiles (6.7 dans une 10 aine de knt). Entre la maniabilit&eacute;, et la douceur de conduite, c\'est un mode de navigation 100% plaisir qui donne envie de recommancer encore et encore. Ici, il n\'est pas question des grandes balades en remontant au vent, mais au contraire une navigation pleine de sensations dans un espace r&eacute;duit, en enchainant les jibes en l\'air ... objectif : 100% du temps en vol :) Cet hivers, on va profiter &eacute;galement du 2e int&eacute;r&ecirc;t de ce combo : aller jouer dans la houle.</p>
<h3>La vid&eacute;o</h3>
<p>Pour finir ce post, je vous propose une pr&eacute;sentation par Tieday YOU himself (le boss et designer de Starboard Foil), ainsi que quelques belles images faites&nbsp; cet &eacute;t&eacute; sur Serre Pon&ccedil;on (&agrave; visionner en HD pour en profiter au mieux).</p>
<p><iframe src="https://www.youtube.com/embed/TT4vtVnD4sU" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>',
            'test_equipment' => 'Flotteur FoilX 150 et Foil 125 / Voiles : Gréement Starboard Flight en 6.7',
            'test_duration' => 2,
            'test_conditions' => 'vent entre 6 et 20knt',
            'test_place' => 'Spot de Serre Ponçon',
            'created_at' => '2019-08-17 08:27:18',
            'updated_at' => '2020-03-26 22:41:56',
        ),
        4 => 
        array (
            'id' => 5,
            'device_id' => 6,
            'user_id' => 1,
            'title' => 'Ludique !',
            'body' => '<p><img src="/storage/photos/1/2019-07/ga-mach-1-2019-4IYdikqxEd.jpg" alt="GA SAILS Mach 1 Foil carbone" /></p>
<h3>D&eacute;collage&nbsp;</h3>
<p>D&egrave;s la prise en main du Mach 1, son caract&egrave;re saute aux yeux : facilit&eacute; et plaisir. Le d&eacute;collage intervient avec tr&egrave;s peu de vitesse, m&ecirc;me pour un gabarit lourd. Et au contraire des foils ax&eacute;s performance, pas besoin d&rsquo;acc&eacute;l&eacute;rer une fois en l&rsquo;air pour garder le vol:&nbsp; d&egrave;s qu&rsquo;il a d&eacute;coll&eacute;, et m&ecirc;me &agrave; basse vitesse, &ccedil;a tient sans aucune instabilit&eacute;.&nbsp;</p>
<p>En comparaison avec les autres foils freeride du march&eacute;, la particularit&eacute; du Mach1 est d&rsquo;opposer assez peu de train&eacute;e dans la phase de d&eacute;collage, au m&ecirc;me titre que le Taaroa Noe que nous avons test&eacute; il y quelques mois. En cela, il demande par exemple moins de puissance v&eacute;lique qu&rsquo;un Starboard freeride alu, ou autre NP Glide. Dans la course au foil qui d&eacute;cole le plus t&ocirc;t, c\'est un &eacute;l&eacute;ment tr&egrave;s important.</p>
<p>La facilit&eacute; de d&eacute;collage est le point cl&eacute; pour de nombreux foileurs, en particulier les d&eacute;butants qui cherchent avant tout &agrave; pratiquer dans le light malgr&eacute; une technique perfectible. M&ecirc;me si les programmes sont diff&eacute;rents, un Mach 1 n&eacute;cessitera par exemple moins de puissance v&eacute;lique qu&rsquo;un&nbsp; LK1 / 1000, un S&eacute;lect PF1 ou un Vini XLW .. consid&eacute;r&eacute;s pourtant par certains comme le "must have" pour voler dans le vent l&eacute;ger.</p>
<h3>En vol</h3>
<p>Une fois en l&rsquo;air, le Mach 1 offre une tr&egrave;s bonne stabilit&eacute; lat&eacute;rale (aucun d&eacute;part &agrave; la g&icirc;te) .. et ceci sans avoir besoin d&rsquo;une planche tr&egrave;s large, et quelque soit la force du vent. C&rsquo;est la cons&eacute;quence directe d&rsquo;un ensemble mat + fuselage assez raide. On reste un cran en dessous du Taaroa Noe sur ce crit&egrave;re, mais bien sup&eacute;rieur &agrave; de tr&egrave;s nombreux autres foils, en particulier afce &agrave; ses concurents directs que sont les Zeeko Carver et NP Glide Wind.&nbsp;</p>
<p>C&ocirc;t&eacute; stabilit&eacute; longitudinale, le Mach 1 est facile mais absolument pas bloqu&eacute; comme les foils course ou des mod&egrave;les comme les ASF et autres Alpine A1. Tant que l&rsquo;on reste &agrave; des vitesses moyennes, les r&eacute;actions sont douces et facile &agrave; g&eacute;rer. Le dosage est tr&egrave;s agr&eacute;able car il est aussi tr&egrave;s facile de corriger l&rsquo;assiette lorsque l&rsquo;on fait une erreur. Pour les pratiquants exp&eacute;riment&eacute;s, le Mach1 est ludique et homog&egrave;ne.</p>
<p><img src="/storage/photos/1/2019-07/ga-mach-1-2019-PahBg84xL5.jpg" alt="GA SAILS Mach 1 Foil carbone" /></p>
<h3>Glisse et vitesse</h3>
<p>En terme de vitesse, le Mach1 plafonne naturellement assez vite avec sa tr&egrave;s grosse aile &hellip; tout au moins avec un gabarit l&eacute;ger &agrave; moyen, et une voile pas trop puissante. La vitesse s\'auto-stabilise et ce comportement le rend tr&egrave;s rassurant et agr&eacute;able en mode balade .. m&ecirc;me dans la houle form&eacute;e. Si on essaye de le pousser au del&agrave; des 17-18 knt (en toilant plus), il devient alors tr&egrave;s puissant sous le pied avant et moins agr&eacute;able &agrave; g&eacute;rer sur le plan longitudinal (plus vif). En clair, pour un gabarit de moins de 80kg, il est fait pour se balader &agrave; petite vitesse , et c&rsquo;est un v&eacute;ritable r&eacute;gal dans ce cadre. On privil&eacute;giera des petites voiles pour rester dans ce cadre d&rsquo;une utilisation freeride, et &ccedil;a lui va a merveille. Avec une 5.4 &agrave; 5.8 dans 15 knt de vent, c&rsquo;est le kiff.&nbsp;</p>
<p>Les gros gabarits, qui vont &eacute;craser l&rsquo;aile, pourront plus facilement utiliser le Mach1 jusqu&rsquo;&agrave; 20-21 knt, en combinaison avec des voiles plus grosses. Ces derniers essentirons beaucoup moins la surpruissance de l\'aile &agrave; vitesse soutenue, et pourront certainement &eacute;tendre l\'utilisation du mach 1 dans un esprit plus perf.&nbsp;</p>
<h3>Maniabilit&eacute;</h3>
<p>C&ocirc;t&eacute; maniabilit&eacute;, on est servi : c&rsquo;est ludique, et facile dans &ecirc;tre nerveux ou difficile &agrave; conr&ocirc;ler &hellip; on se prend m&ecirc;me au jeux de carver avec une simplicit&eacute; d&eacute;concertante. Dans les molles, on peut s&rsquo;amuser &agrave; pomper sur le foil, de fa&ccedil;on tr&egrave;s efficace. Il faut dire que les moles, il les passe comme une lettre &agrave; la poste .. certes pas vite, mais tr&egrave;s efficacement. C&rsquo;est sur ce passage des molles, et le ressenti g&eacute;n&eacute;ral (plaisir) que le Mach1 creuse nettement l&rsquo;&eacute;cart avec des foils bas&eacute;s sur un mat aluminium (fanatic 2019, Zeeko amplifier, NP Flight Evo, NP Glide)</p>
<p><img src="/storage/photos/1/2019-07/ga-mach-1-2019-rJQfP378tW.jpg" alt="GA SAILS Mach 1 Foil carbone" /></p>
<p>Grace&nbsp; &agrave; sa capacit&eacute; &agrave; voler &agrave; tr&egrave;s basse vitesse sans aucune instabilit&eacute;, c&rsquo;est un foil id&eacute;al pour apprendre le gibe en l&rsquo;air. Je dois dire que m&ecirc;me si je ne suis pas un expert dans ce domaine, j&rsquo;ai rarement encha&icirc;n&eacute; autant de gibe sans touchette qu&rsquo;avec ce Mach1.</p>
<p><img src="/storage/photos/1/2019-07/ga-mach-1-2019-cJoHBPiM5Q.jpg" alt="GA SAILS Mach 1 Foil carbone" /></p>
<h3>Bilan</h3>
<p>Apr&egrave;s 3 jours de test dans des conditions vari&eacute;es (de 8 &agrave; 20 knt), des gabarits divers, et &agrave; chaque fois avec des petites voiles (de 4.7 &agrave; 6.5), non avons tous pris plus de plaisir avec le GA que nous pensions. Je dirai m&ecirc;me que c&rsquo;est un v&eacute;ritable coup de coeur.</p>
<p>Sur de tr&egrave;s nombreux points, le Mach1 se rapproche beaucoup du Noe Freeride (80 ou 97) : m&ecirc;me d&eacute;collage, m&ecirc;me c&ocirc;t&eacute; accessible, doux et ludique. Le mach1 va moins vite, est moins facile &agrave; g&eacute;rer &agrave; &agrave; vitesse soutenue pour un l&eacute;ger, mais facilite encore plus le Gibe en l&rsquo;air, et offre un passage de molles bluffant.</p>
<p>A l&rsquo;extr&ecirc;me inverse d&rsquo;un foil racing (que j&rsquo;aime aussi), on est ici avec un produit plaisir, rassurant, qui ne fait pas peur car il ne va pas vite, ludique &agrave; souhait, et ultra accessible m&ecirc;me pour un d&eacute;butant.</p>
<p>Malgr&eacute; son orientation freeride, ne pensez pas pour autant que c&rsquo;est un produit destin&eacute; aux d&eacute;butants. Apr&egrave;s 5 ans de pratique, et un niveau technique plut&ocirc;t avanc&eacute;, j\'ai adpot&eacute; ce mod&egrave;le dans mon quitter aux c&ocirc;t&eacute; d&rsquo;un foil ax&eacute; course, pour tous les jours o&ugrave; je pr&eacute;f&egrave;re me balader en d&eacute;tente et souplesse avec une petite voile, plut&ocirc;t que de mettre la poign&eacute;e dans le coin.</p>
<p>Edit. Depuis quelques mois, le Mach est est devenu mon foil de r&eacute;f&eacute;rence pour toutes les conditions o&ugrave; je ne veux pas mettre la poign&eacute;e dans le coin, et en particulier lorsqu\'il y a moyen d\'envoyer des bons surf dans la houle.&nbsp;</p>',
            'test_equipment' => 'Exocet Freefoil 112 AST , JP hydofoil 120, Freefoil 132 / voiles F-Tye 5.8, Flight 6.7',
            'test_duration' => 3,
            'test_conditions' => '8-20knt',
            'test_place' => 'nc.',
            'created_at' => '2019-07-03 00:54:13',
            'updated_at' => '2020-10-22 15:27:47',
        ),
        5 => 
        array (
            'id' => 6,
            'device_id' => 7,
            'user_id' => 1,
            'title' => 'Une arme de guerre !',
            'body' => '<h3>Test en mode Race Light Wind : comparatif F4 race, Phantom IRIS R, NP F4 racing</h3>
<p>Si j\'avais fait un compte rendu de test traditionnel sur un tel produit, &nbsp;&ccedil;a aurait &eacute;t&eacute; une redite en comparaison avec les autres foils de course actuels (ultra cal&eacute;, super glissant, tr&egrave;s puissant etc...), donc sans int&eacute;r&ecirc;t. La comparaison de sensation avec ses concurrents directs est donc la meilleure solution. Je pr&eacute;cise qu\'il manque dans cette comparaison le Loke race et le Starboard Race +, &nbsp;car je ne les avait pas encore re&ccedil;us &agrave; l\'&eacute;poque ou nous avons r&eacute;alis&eacute; ce test</p>
<p>Au passage, un grand merci &agrave; mes partenaires de test du jour (Antoine et Julien pour la comparaison F4 / NP, et Benoit pour la comparaison F4 / Phantom).</p>
<p><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-x4xYTxiU2K.jpg" alt="F4 racing foil" /></p>
<p>En entreprenant un test comparatif de ces 3 mod&egrave;les, on s&rsquo;attaque &agrave; un domaine sensible pour plusieurs raisons</p>
<ul>
<li>les diff&eacute;rences sont assez subtiles lorsque l&rsquo;on s&rsquo;adresse &agrave; un tel niveau de performance pure</li>
<li>la comparaison s&rsquo;entend dans une utilisation tr&egrave;s &eacute;troite qui correspond &agrave; un parcours banane (pr&egrave;s tr&egrave;s serr&eacute; / vent arri&egrave;re)</li>
<li>un tel comparatif int&eacute;resse beaucoup de monde car les produits de comp&eacute;tition font r&ecirc;ver &hellip; m&ecirc;me si leur utilisation s&rsquo;adresse en r&eacute;alit&eacute; &agrave; peu de pratiquants. Ce test n\'a donc absoluement pas la vocation &agrave; pousser Mr tout le monde &agrave; investir dans un tel foil. Par contre, Les 3 marques proposent ou vont proposer des d&eacute;clinaisons (par exemple F4 avec aile de 85 et fuselage de 100, ou IRIS R avec fuselage de 95) pour une utilisation free-race ... et l&agrave; &ccedil;a a un r&eacute;el int&eacute;r&ecirc;t.</li>
<li>les concepteurs et surtout propri&eacute;taires de tels produits sont souvent des passionn&eacute;s qui ont du mal &agrave; accepter que l&rsquo;on puisse donner un jugement sur leur produit (sauf &agrave; dire que c\'est le meilleur). Je dois donc m\'attendre &agrave; des remarques plus ou moins amicales en publiant ce type de test (je prends les devants car c\'est du v&eacute;cu).</li>
<li>Je n\'ai tr&egrave;s cairement pas le niveau technique des comp&eacute;titeurs pour lesquels ces foils sont con&ccedil;us</li>
</ul>
<p>Pour toutes ces raisons, je pr&eacute;cise que ce comparatif fait &eacute;tat des sensations que j&rsquo;ai ressenti avec ces 3 foils, compar&eacute;s sur un mat&eacute;riel et dans des conditions donn&eacute;es. Ce n\'est donc ni un jugement d&eacute;finitif, ni une v&eacute;rit&eacute; absolue.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-faiYGbhREC.jpg" alt="F4 racing foil" /></p>
<h4>Rigidit&eacute;</h4>
<p>Le premier point que l&rsquo;on va comparer est&nbsp; le comportement m&eacute;canique du foil, sur la base des ressentis.&nbsp;</p>
<p>Rigidit&eacute; en torsion :&nbsp; le F4 est le plus raide, suivi du NP F4 racing, puis du Phantom R</p>
<p>Rigidit&eacute; en flexion : C&rsquo;est le NP qui semble le plus raide, suivi du phantom puis du F4</p>
<p>Ceci se traduit par une moindre sensibilit&eacute; au clapot avec les F4 et NP, ainsi qu&rsquo;un contr&ocirc;le plus intuitif et facile dans les rafales. Le F4 est carr&eacute;ment impressionnant sur ce point car on sent &agrave; peine les turbulences hydrodynamiques rencontr&eacute;es (clapot, sllage de bateau etc.).&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-ROfVqsoSBN.jpg" alt="Neilpryde F4 racing foil" /></p>
<h4>Puissance</h4>
<p>En terme de puissance , c&rsquo;est le Phantom qui m&rsquo;a paru g&eacute;n&eacute;rer le plus d&rsquo;appui &hellip; et surtout l&rsquo;appui le plus avanc&eacute; sous le pied avant. Au pr&egrave;s tr&egrave;s serr&eacute;, c&rsquo;est logiquement celui qui facilite le plus la remont&eacute; au pr&egrave;s. Pour la m&ecirc;me raison, c&rsquo;est le Phantom qui m&rsquo;a paru le moins facile &agrave; g&eacute;rer dans les ris&eacute;es. Il faut plus anticiper et &ecirc;tre plus attentif pour &eacute;viter de se faire sortir . Dans ce domaine, c&rsquo;est le F4 qui m&rsquo;est apparu comme le plus facile &agrave; g&eacute;rer en moyenne.</p>
<h4>Glisse</h4>
<p>En terme de glisse, c&rsquo;est clairement le NP F4 racing qui prend a t&ecirc;te du groupe : on a vraiment la sensation d&rsquo;un couteau qui tranche le beurre sans aucune r&eacute;sistance. Le F4 prend la 2e place sur ce crit&egrave;re avec un grosse libert&eacute;. Le Phantom est celui qui semble demander le plus de puissance, et qui apparait aussi comme le plus physique &agrave; l&rsquo;usage. Lorsque faut lancer la planche dans un vent ultra light, la diff&eacute;rence de glisse se fait aussi sentir.</p>
<p><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-2HG153lLxR.jpg" alt="F4 racing foil" /></p>
<p>Pour remettre en perspective ces propos, je pr&eacute;cise que nos r&eacute;f&eacute;rences pr&eacute;c&eacute;dentes en terme de sensation de glisse (Select Profoil, Taaroa Sword) sont ici d&eacute;pass&eacute;es par les 3 mod&egrave;les.</p>
<div>
<h4>Bilan</h4>
<p>Vous l\'avez compris, les 3 foils sont ultra performants et tr&egrave;s proches dans une tr&egrave;s &eacute;troite cible d\'utilisation. Le NP emporte &agrave; mes yeux la palme de la glisse, le Phantom celle de la puissance, et le F4 celle du contr&ocirc;le et de la facillit&eacute;.&nbsp;</p>
<p>Comme cet article concernait avant tout le nouveau F4, je dirai que ce mod&egrave;le montre clairement des caract&eacute;ristiques hors normes &agrave; tous les niveaux, mais en particulier pour sa construction qui bat des records. C\'est sa facilit&eacute; d\'utilisation (attention, tout est relatif) qui surprend le plus, et qui me fait penser &agrave; un vrai int&eacute;r&ecirc;t dans sa d&eacute;clinaison free-race. Mon prochain post &agrave; son sujet concernera donc cette configuration dont j\'attends beaucoup.&nbsp;</p>
<h3>Test en mode Medium Wind</h3>
<p><img class="img-fluid" src="/storage/photos/1/2019-07/phantom-iris-r-2019-3ckIYKYuks.jpeg" alt="IRIS R foil" /></p>
<p>Quelques mois apr&egrave;s notre premier contact avec l\'IRIS R, nous attendions avec impatience de pouvoir tester l\'engin dans d\'autres conditions. Cette fois, le vent &eacute;tait plus soutenu avec une 15aine de knt, et la mer plus form&eacute;e avec environ 50cm de houle. Le configuration est, on va dire, extr&ecirc;me : voile course de 8m2, aile de 800 et stab XS, le tout mont&eacute; sur un nouveau fuselage 90 +40 (aile avanc&eacute;e de 40mm par rapport &agrave; la V1). Sans en dire plus, c\'&eacute;tait le matos de Nicolas Goyard ... avec ses propres r&eacute;glages.</p>
<p>Le test f&ucirc;t assez bref, donc je me contenterai de donner les grands traits des sensations.&nbsp;</p>
<p>Apr&egrave;s avoir navigu&eacute; quelques bords avec Nicolas, qui nous tournait autour en toute facilit&eacute;, je m\'attendais &agrave; un foil ultra cal&eacute; .. mais point du tout. Au contraire, en quelques bords, j\'ai compris &agrave; la fois pourquoi il allait si vite, et quel est le gouffe technique qui nous s&eacute;pare de lui. Avec les r&eacute;glages choisis, je me suis regtrouv&eacute; sur une v&eacute;ritable arbalette. Le foil a des acc&eacute;l&eacute;rations assez incroyables, assez flippantes &agrave; g&eacute;rer dans le houle. On retrouve un foil tr&egrave;s libre, ultra vif ... bref, tout l\'inverse d\'un foil calme et facile. Bref, on a bien un engin de course !</p>
<p>Dans le light, on peut faire illusion avec un niveau moyen, mais dans des conditions un peu muscl&eacute;es, il faut visiblement un tr&egrave;s bon niveau pour profiter de ses performances sans se faire mener par le bout du nez. En quelques minutes, on n\'a en tout cas aucun doute sur le potentiel de ce foil, pour qui sait le dompter !</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>',
            'test_equipment' => 'Flotteurs : Starboard 144 / Iris X 83 / Voiles IRIS SF 8m, HG2 9m',
            'test_duration' => 5,
            'test_conditions' => 'Vent léger sur Serre Ponçon , puis 15knt et hoyule sur La Ciotat',
            'test_place' => 'La Ciotat / Serre Ponçon',
            'created_at' => '2019-07-03 01:04:38',
            'updated_at' => '2020-03-26 22:41:56',
        ),
        6 => 
        array (
            'id' => 7,
            'device_id' => 8,
            'user_id' => 1,
            'title' => 'Ouah ... Quelle glisse !!!',
            'body' => '<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4884.jpg" alt="IRIS X Phantom" /></p>
<h3>Montage</h3>
<p>Le montage se fait sans aucun probl&egrave;me. Apr&egrave;s des mod&egrave;les prototypes plus l&acirc;ches, les ajustements sont tr&egrave;s pr&eacute;cis d&eacute;sormais, voir m&ecirc;me serr&eacute;s sur l\'accostage mat / fuselage.&nbsp;</p>
<p><img src="/storage/photos/1/2019-02/phantom-iris-x-proto-2-2020-PwoyhHMaAG.jpg" alt="Iris X Phantom" /> <img src="/storage/photos/1/2019-02/phantom-iris-x-proto-2-2020-bONI94Di4X.jpg" alt="Iris X Phantom" /></p>
<p>En terme de qualit&eacute; d\'assemblage, pr&eacute;cisons que les accostages d\'aile et de stab sont d&eacute;sormais conformes &agrave; ce que nous attendons, avec de vrais progr&egrave;s en comparaison avec les F et R livr&eacute;s l\'an pass&eacute;.&nbsp;</p>
<h3>Configuration</h3>
<p>Lors de notre test, nous avons utilis&eacute; une fuselage 90Evo ainsi que les ailes de 800 et de 550. 4 configurations existent en fonction du besoin de chacun.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/phantom-iris-x.png" alt="configurations" /></p>
<h3>D&eacute;collage</h3>
<p>L\'IRIS X fait partie des foils qui d&eacute;collent t&ocirc;t, d\'abord parce que l\'aile est plut&ocirc;t puissante malgr&eacute; sa surface r&eacute;duite, mais aussi et surtout parce que qu\'il a tr&egrave;s peu de train&eacute;e. C\'est une strat&eacute;gie tr&egrave;s diff&eacute;rente de certains foils misant sur une grosses surfaces d\'aile, mais c\'est aussi une preuve qu\'il y a plusieurs fa&ccedil;on de voler dans le light.</p>
<p>Attention toutefois, comme tous les foils qui utilisent des ailes &agrave; grand allongement (Sb pro race, loke 1000, AFS 105, Sword RS etc.), d&eacute;coller dans le tr&egrave;s light demande un peu de bagage technique car il faut g&eacute;n&eacute;rer de la vitesse, et continuer &agrave; acc&eacute;l&eacute;rer m&ecirc;me apr&egrave;s de d&eacute;collage pour atteindre une vitesse critique et ne plus retomber. Ce sont donc des foils avec lesquels on ne conseille pas de d&eacute;buter la discipline. En contre partie, ils offrent un comportement beaucoup plus sein &agrave; grande vitesse. Au moment o&ugrave; j\'&eacute;cris ces lignes, Phantom annonce un mod&egrave;le "IRIS Z" avec une aile &agrave; large corde qui devrait au contraire faciliter le vol &agrave; plus basse vitesse.</p>
<h3>Portance et r&eacute;glage du stab</h3>
<p>D&egrave;s que l\'on a atteint la vitesse critique de vol, l\'IRIS g&eacute;n&egrave;re une portance assez franche, avec pas mal d\'appui sous le pied arri&egrave;re. C&rsquo;est plut&ocirc;t assez rassurant et confortable dans le vent tr&egrave;s l&eacute;ger. Ca permet aussi aux pratiquants un peu \'bourrins\' sur le pied arri&egrave;re de se sentir &agrave; l\'aise dans le light.</p>
<p>Le foil nous a &eacute;t&eacute; fourni avec des cales de stab qui permettent de r&eacute;gler l\'incidence de ce dernier. Comme le stab est situ&eacute; sous le fuselage et non sur le dessus, le calage se fait &agrave; l\'inverse de nombreux foils : pour enlever de la puissance, il soulever l\'arri&egrave;re du stab. Sans cale, nous avons trouv&eacute; un foil l&eacute;g&egrave;rement pied avant dans le medium avec l\'aile de 800, et l&eacute;g&egrave;rement pied arri&egrave;re avec l\'aile de 550.&nbsp;</p>
<p>Sur la photo suivante, on voit nettement le petit d&eacute;crochage d&ucirc; &agrave; la cale sous la vis avant par exemple (cas o&ugrave; j\'ai rajout&eacute; de la puissance dans du tr&egrave;s light). Il va sans dire qu\'il reviendrait au m&ecirc;me de reculer les straps, mais avec cette cale amovible, il est plus rapide d\'adapter le foil aux diff&eacute;rentes conditions de vent.</p>
<p><img src="/storage/photos/1/2019-02/phantom-iris-x-proto-2-2020-tW4X5YC8uq.jpg" alt="Test Phantom IRIS X Foil" /></p>
<h3>Caract&egrave;re principal</h3>
<p>D&egrave;s les premiers m&egrave;tres en l&rsquo;air, le caract&egrave;re principal apparait imm&eacute;diatement : une sensation de glisse tr&egrave;s fine et plaisante. Il surpasse nos r&eacute;f&eacute;rences en la mati&egrave;re (Select, F4) pour prendre la t&ecirc;te sur ce crit&egrave;re. Il n\'y pas l\'ombre d\'une vibration ... tout semble parfaitement dans l\'axe avec en particulier une parfaite stabilit&eacute; sur l\'axe de lacet. Mention sp&eacute;ciale pour la configuration fuselage 90 / aile 550 qui est vraiment attachante dans un peu de vent (&agrave; partir de 14-15 knt), avec une tr&egrave;s belle allonge dans les molles ! Dans cette configuration, j\'ai r&eacute;ussi &agrave; faire 24knt dans un vent de 11-12knt .. quand on parle de glisse 😳</p>
<h3>Allures</h3>
<p>Le foil acc&eacute;l&egrave;re facilement, et atteint rapidement une vitesse moyenne tr&egrave;s honorable sans forcer. Au travers, le foil est assez stable sur les 2 axes, mais reste vif. Il r&eacute;agit tr&egrave;s vite aux changements de cap et de vent, en gardant toujours une certaine libert&eacute;. A vitesse soutenue, c\'est donc un foil qui n&eacute;cessite une bonne technique. En ceci, il se d&eacute;marque nettement d\'un AFS par exemple, sans pour autant avoir la nervosit&eacute; d\'un Loke LK1. Ce "compromis" est int&eacute;ressant pour ceux qui veulent aller vite sans toiler beaucoup.&nbsp;</p>
<p>Lorsqu&rsquo;on serre <strong>au pr&egrave;s</strong> l&rsquo;appui g&eacute;n&eacute;ral est tr&egrave;s bon. C&rsquo;est clairement l&rsquo;allure la plus agr&eacute;able comme avec beaucoup de foils car ils se cale. L\'aptitude &agrave; remonter au vent est d\'ailleurs tr&egrave;s bonne, et on s\'approche assez pr&egrave;s de ce que l\'on observe sur les mod&egrave;les de course, &agrave; la r&eacute;serve pr&egrave;s que l\'aile de 800 n\'acceptera pas une voile de 9m2.</p>
<p>Lorsque l&rsquo;on veut l&acirc;cher les chevaux, et abattre <strong>au largue</strong>, il faut rester attentif avec ce type de foil assez libre, mais l\'&eacute;norme glisse permet de le faire sans forcer. M&ecirc;me si je ne suis pas tr&egrave;s rapide, le X est l\'un des rares foils avec lesquel j\'ai d&eacute;pass&eacute; les 27 knt ... sans pour autant me mettre en danger. D\'ailleurs, c\'est clairement ce que l\'on comprend avec un tel foil : il n\'est jamais n&eacute;cessaire de forcer. On en tirera le meilleur en laissant glisser. Nul besoin non plus de surtoiler (et je pense m&ecirc;me que ce sera contre-productif).&nbsp;</p>
<p>Dans les <strong>trous d&rsquo;air</strong>, l\'Iris allonge tr&egrave;s loin, et fait toujours montre d&rsquo;une sensation de glisse assez fine qui permet de les franchir avec facilit&eacute;. Cette fois, la dynamique du mat est un atout et permet de pomper avec les pieds de fa&ccedil;on efficace, m&ecirc;me si l\'aile pr&eacute;sente un peu moins de portance que les mod&egrave;les plus extr&ecirc;mes comme la Starboard 1000, ou la Loke 1000.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2407.jpg" alt="Test Phantom IRIS X Foil" /></p>
<h3>Etude technique</h3>
<p>Compte tenu des diff&eacute;rences &eacute;videntes de comportement avec la version F, il nous parraissait tr&egrave;s int&eacute;ressant de cor&eacute;ler ceci avec des mesures structurelles. Toutes choses &eacute;gales par ailleurs, le Phantom est en effet un tr&egrave;s bon sujet pour rapprocher sensations et technique.&nbsp;</p>
<p>En comparaison avec les nos autres foils de r&eacute;f&eacute;rence, le Phantom X est plut&ocirc;t au dessus de la moyenne en ce qui concerne la <strong>rigidit&eacute; en flexion</strong> du mat. Ce n\'est pas le plus rigide (en gros 20% plus souple que le plus rigide), mais il est dans le peloton de t&ecirc;te sur ce crit&egrave;re.</p>
<p>En ce qui concerne la <strong>rigidit&eacute; en torsion</strong>, par contre, il explose les chiffres. Pour situer les choses, le X se paye le luxe d\'&ecirc;tre plus raide qu\'un LK Race ou un F4 ... !!</p>
<p>Globalement, cela situe le X dans la classe des foils plut&ocirc;t raides, aux c&ocirc;t&eacute;s des Loke LK1, Alpine A1 , AFS 85. M&ecirc;me si les mesures structurelles sont simplement un indicateur, cela va dans le m&ecirc;me sens que les diff&eacute;rences nettes de comportement observ&eacute;es entre le F et le X.&nbsp;</p>
<h3>Bilan</h3>
<p>Apr&egrave;s le test de nombreux propotypes, le X de s&eacute;rie nous a r&eacute;ellement impressionn&eacute; ! La sensation g&eacute;n&eacute;rale est avant tout celle celle d\'un foil champion de la glisse, tr&egrave;s sein et assez libre sur les axes transversaux et longitudinaux ... sans pour tant &ecirc;tre trop nerveux pour compromettre le contr&ocirc;le. Cette glisse lui conf&egrave;re un gros potentiel et je ne serai pas &eacute;tonn&eacute; que certains d&eacute;passent les 30 knt avec ce mod&egrave;le. Avec un mat un peu plus court, il se rapproche plus que jamais de son grand fr&egrave;re champion du monde (le R).</p>
<p>L\'IRIS X sera surtout adapt&eacute; &agrave; une navigation en finesse, sans surtoilage excessif. Il est r&eacute;ellement adapt&eacute; &agrave; une utilisation freerace, pour des pratiquants assez exp&eacute;riment&eacute;s, entre 10 et 25 knt ... et pour des voiles de 8 &agrave; 5m2. Notre conseil : si vous avez les moyens, &agrave; prendre absoluement avec l\'aile de&nbsp;550 .. la glisse est tout &agrave; fait &eacute;norme !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4885.jpg" alt="Test Phantom IRIS X" /></p>',
            'test_equipment' => 'Flotteurs Horue Airtime, Tabou Airide 81, Exocet RF81 /  Voile Phantom Iris X 7.4, Xo Fly 6.6, Hyperglide 8m, HG2 9m',
            'test_duration' => 6,
            'test_conditions' => '6 à 25 knt',
            'test_place' => 'La ciotat, Les Lecques, L’Almanarre',
            'created_at' => '2020-05-22 17:48:35',
            'updated_at' => '2020-06-12 18:03:50',
        ),
        7 => 
        array (
            'id' => 8,
            'device_id' => 11,
            'user_id' => 1,
            'title' => 'Windfoil - Test du Phantom IRIS F',
            'body' => '<h4>Conditions des tests</h4>
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-kcAQWIz5ah.jpg" alt="test phantom iris f" /></p>
<p>Les lecques - 6 à 8 knt - Horue Airtime - Voile Hyperglide 8m, cale de 0.6+0.8 sous le stab</p>
<p>La ciotat - 9 à 18 knt - Horue Airtime - Voile Xo Fly 6.6, cale de 0.6 sous le stab</p>
<p>La ciotat - 12 à 15 knt Sud - Tabou Airide  - Voile Phantom Iris X 7.4, cale de 0.8 sous le stab</p>
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-iqfyptKbAi.jpg" alt="test phantom iris f" /></p>
<h4>Montage</h4>
<p>Le montage se fait sans aucun problème. Les ajustement sont assez précis, même si notre modèle avait du jeu sur la jonction mat / fuselage. Un morceau de monofilm comme au bon vieux temps des boitiers tuttle en slalom et c\'est parti ! Je précise que le même jeu a été détecté sur le modèle de pré-série et le modèle de série. Avec un assemblage cylindrique, il est difficile de ne pas avoir de jeu ... c\'est d\'ailleurs pour cela que des marques comme Starboard et Alpine ont ajouté des vis latérales pour serrer le boitier.</p>
<img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-X4mhl3XB7r.jpg" alt="Iris F Phantom" />
<img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-rUqJVDbBFp.jpg" alt="Iris F Phantom" />
<p>Le foil nous a été fourni avec des cales de stab qui permettent de régler l\'incidence de ce dernier. Je disposais de 4 cales entre 0,4 et 0,8mm. En fonction des conditions, j\'ai calé entre 0,6 et 1,5mm en superposant les cales. Comme le stab est situé sous le fuselage et que le foil est en standard un peu trop pied arrière, il a fallu caler sous la vis avant du stab pour donner plus d\'incidence à l\'aile.</p>
<p>Sur la photo suivante, on voit nettement le petit décrochage dû à la cale sous la vis avant</p>
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-YclceT9bcZ.jpg" alt="Test Phantom IRIS F Foil" /></p>
<p>En terme de qualité d\'assemblage, notons aussi que les zones d\'accostage des ailes mériteraient une finition plus soignée, ne serait ce que pour avoir un parfait respect des angles d\'incidence. </p>
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-GXXhkwI6TH.jpg" alt="Iris F Phantom" /> <img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-iqQ5nkPdUa.jpg" alt="Iris F Phantom" /></p>
<h4>Caractéristiques géométriques</h4>
<ul>
<li>Longueur du mat : 96cm</li>
<li>Longueur du fuselage : 90cm</li>
<li>Poids total : 4.96 kg</li>
<li>Envergure de l\'aile : 93cm</li>
</ul>
<h4>Les tests sur l\'eau</h4>
<p>Avant d\'aller plus avant, je précise que ces tests ont été réalisés avec un prototype, puis un modèle de série. Suite au test du prototype, nous avions émis des doutes sur la rigidité en torsion du mat. Cet élément très important devait être modifié sur la série. Le test du modèle de série n\'a pas révélé d\'évolution significative sur ce point. Les mesures au banc ont d\'ailleurs confirmé une évolution minime des caractéristiques mécaniques. </p>
<h4>Décollage</h4>
<p>L\'IRIS F fait partie des foils qui décollent très tôt, d\'abord parce que l\'aile est plutôt imposante, mais aussi et surtout parce que qu\'il a peu de trainée, et qu\'il offre un appui conséquent sur le stab (fuselage long).<br />Attention toutefois, comme tous les foils qui utilisent des ailes à grand allongement (Sb pro race, loke 1000, AFS 105, Sword RS etc.), décoller dans le très light demande un peu de bagage technique car il faut générer de la vitesse, et continuer à accélérer même après de décollage pour atteindre une vitesse critique et ne plus retomber. Ce sont donc des foils avec lesquels on ne conseille pas de débuter la discipline.</p>
<h4>Portance et réglage du stab</h4>
<p>Dès que l\'on a atteint la vitesse critique de vol, l\'IRIS génère une portance assez franche, avec pas mal d\'appui sous le pied arrière. C’est plutôt assez rassurant et confortable dans le vent très léger. Ca permet aussi aux pratiquants un peu \'bourrins\' sur le pied arrière de se sentir à l\'aise dans le light. Pour que cela fonctionne dans ces conditions, il m\'a quand même fallu caler le stab autour de 1.5mm, et garder toujours de l\'appui sous le pied arrière pour ne pas replaquer. Il va sans dire qu\'il reviendrait au même de reculer les straps, mais avec cette cale amovible, il est plus rapide d\'adapter le foil aux différentes conditions de vent. Dans des conditions un peu plus soutenues, je suis revenu à 0,6mm de cale pour avoir un Foil moins fougueux donc plus contrôlable.</p>
<h4>Caractères principaux</h4>
<p>Dès les premiers mètres en l’air, deux caractères principaux apparaissent immédiatement :<br />Le premier, c’est une sensation de glisse assez fine et  plaisante … on rejoint un petit peu les sensations que l’on avait sur le Select, le sword et le F4 avec très peu de trainée dans le vent léger. <br />Deuxième perception immédiate : une certaine souplesse de l’ensemble, qui se traduit par un comportement un peu élastique sous les pieds. Cette sensation est plus marquée lorsqu\'on l\'utilise en grande voile (8m). C\'est moins sensible en petite toile (5.8m2). </p>
<h4>Allures</h4>
<p>Le foil accélère facilement, et atteint rapidement une vitesse moyenne très honorable sans forcer. Sur des<strong> allures travers</strong>, lorsque la vitesse augmente, la souplesse se traduit par un foil qui dandine un peu. Ca devient de plus en plus marqué avec la vitesse, et ce d’autant plus que le clapot se forme. C’est une sensation assez proche de qu’on avait déjà eu sur le foil alpine 2018, ou le Select avec le fuselage alu. Cette similitude de sensation n\'est pas un hazard puisque les options de conception sont proches : mat fin en tête &gt; moment inertie faible &gt; manque de rigidité en torsion. La conséquence directe est un foil qui devient délicat à piloter quand le vent monte ... en comparaison avec nos références (Starboard, Taaroa, AFS)</p>
<p>Toujours à cette allure travers, le foil devient rapidement puissant, et on sent bien qu\'avec cette grande aile, il va falloir être très attentif si on compte faire monter le compteur. Il est prévu une aile plus petite, et je pense que ce ne sera pas un luxe.</p>
<p>Lorsqu’on serre <strong>au près</strong>, le foil se cale un peu plus, et, avec la vitesse qui baisse, les choses deviennent beaucoup plus facile à contrôler. Là aussi, on ressent toujours l’élasticité mais elle est moins gênante. À cette allure, l’appui général est très bon, il est très facile de remonter au vent tout en poussant sur les jambes. C’est clairement l’allure la plus agréable avec ce modèle. L\'aptitude à remonter au vent est d\'ailleurs très bonne, et on s\'approche assez près de ce que l\'on observe sur les modèles de course.</p>
<p>Lorsque l’on veut lâcher les chevaux, et abattre <strong>au largue</strong>, cela re-devient plus technique, notamment à cause de l’élasticité dont j’ai parlé précédemment. J’avoue qu’à cette allure, je n’ai pas poussé très loin car je n’aime pas me mettre dans le rouge : entre la puissance de l’aile et le manque de contrôle, je ne me sentais pas d\'emmener la machine au delà de 23-24 knt. On sent toutefois que le potentiel est bien plus élevé avec cette géométrie, mais il faut soit aimer se faire peur, soit passer sur le modèle en M40J.</p>
<p>Dans les <strong>trous d’air</strong>, l\'Iris allonge assez loin, et surtout fait montre d’une sensation de glisse assez fine qui permet de les franchir avec facilité. Cette fois, la dynamique du mat est un atout et permet de pomper avec les pieds de façon efficace, même si l\'aile présente un peu moins de portance que les modèles plus extrêmes comme la Starboard 1000, ou la Loke 1000.</p>
<h4>Stabilité</h4>
<p>La stabilité longitudinale est plutôt très bonne, comme souvent avec les longs fuselages. Dit autrement, c’est un foil qui est facile à stabiliser et avec lequel n\'importe quel pratiquant gérera facilement l’assiette.</p>
<p>En ce qui concerne la stabilité latérale, c\'est un net cran en dessous de nos références. Le manque de rigidité du mat influe de façon substentielle sur ce paramètre. Comme avec le select, le foil est très libre sur le plan transversal (mise à la contre-gîte facile), mais il est difficile de se caler dans une position. Dans la houle, on a même eu quelques départ à la gîte involontaires. </p>
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-pDNXHJ9UmX.jpg" alt="Test Phantom IRIS F Foil" /></p>
<h4>Etude technique</h4>
<p>Compte tenu du comportement lors du test, nous voulions savoir d\'où venait cette sensation d\'élasticité qui nous génait dans le contrôle du foil. Après avoir mesuré le Phantom sous toutes les coutures, nous concluons que cela provient d\'un net manque de rigidité en torsion du mat, au regard de la taille du fuselage.</p>
<p>En comparaison avec les nos autres foils référence, le Phantom est plutôt au dessus de la moyenne en ce qui concerne la <strong>rigidité en flexion</strong> du mat. Ce n\'est pas le plus rigide (en gros 20% plus souple que le plus rigide), mais il est dans le peloton de tête sur ce critère.</p>
<p>En ce qui concerne la <strong>rigidité en torsion</strong>, par contre, il est clairement dans le peloton de queue avec entre 30% et 40% de rigidité en moins par rapport aux autres foils du marché. Ceci, combiné avec un fuselage putôt long, explique parfaitement les sensations que nous avons eu. </p>
<h4>Bilan</h4>
<p>La sensation générale est celle d\'un foil plutôt puissant, avec une très bonne glisse, plutôt optimisé pour les allures pointues (près), mais manquant de rigidité générale en comparaison avec nos modèles de référence (AFS, Taaroa, Starboard, F4 2019). Sur un programme Free-race, c\'est un point très génant. </p>
<p>Pour le développement de son foil, Phantom a fait le choix de la même géométrie que le foil de course, mais avec des matériaux moins onéreux (T700 au lieu du M40J), et un fuselage moins long. Ce choix permet d\'offrir un foil avec une bonne sensation de glisse et une bonne puissance, mais on le paye inévitablement sur le contrôle vu la finesse des profils.</p>
<p>Dans des conditions de mer et de vent faible, cela reste du niveau de la sensation, et ne pénalise pas les performances. Dans des conditions plus musclées, il faudra faire preuve de plus de cœur pour se lancer aux allures travers et abattu. C\'est là que la rigidité et le contrôle supérieur de la version en M40J fera certainement la différence. Le comparatif va être très intéressant !</p>
<p>Les PLUS</p>
<ul>
<li>Glisse</li>
<li>Allonge dans les moles</li>
<li>Perf dans le light</li>
</ul>
<div>Les MOINS</div>
<div>
<ul>
<li>Contrôle délicat</li>
<li>Interfaces mécaniques (liaison mat/fuselage et accostage des ailes)</li>
</ul>
<h4>Et après</h4>
</div>
<p>Voici les éléments qui nous paraissent nécessaire de re-travailler sur ce modème</p>
<ul>
<ul>
<ul>
<li>ajustement de la connexion entre le mat et le fuselage (jeu)
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-25GwYQW7HC.jpg" alt="test phantom iris f" /></p>
</li>
<li>fragilité du nez de fuselage (trop fin)</li>
<li>anodisation qui marque autour des vis de jonction fuselage mat dès les premiers bords
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-XXq3TmjiTY.jpg" alt="test phantom iris f" /></p>
</li>
<li>système de cale au niveau du stab à industrialiser
<p><img src="/storage/photos/1/2019-02/phantom-iris-f-v1-2019-2AF9ckraiW.jpg" alt="test phantom iris f" /></p>
</li>
<li>mise en place d\'hélicoil dans les filetages du fuselage</li>
<li>Raidissement de la rigidité en torsion du mat</li>
<li>Meilleur finition des accostages d\'ailes</li>
</ul>
</ul>
</ul>',
            'test_equipment' => 'nc.',
            'test_duration' => 3,
            'test_conditions' => 'nc.',
            'test_place' => 'nc.',
            'created_at' => '2019-02-16 18:48:35',
            'updated_at' => '2020-03-26 22:41:56',
        ),
        8 => 
        array (
            'id' => 10,
            'device_id' => 13,
            'user_id' => 1,
            'title' => 'Rock\'n Roll',
            'body' => '<p>Ce test intervient &agrave; la suite de l&rsquo;essai de la version 2018. Nous voulions donc essentiellement quantifier l&rsquo;&eacute;volution du mod&egrave;le.</p>
<p><img src="/storage/photos/1/2019-05/rrd-wh-flight-alu-85-v2-2019-DGGrvhJJJh.jpg" alt="WH Flight" /></p>
<p>Sur l&rsquo;eau, nous avons compar&eacute; les deux mod&egrave;les dans deux configurations distinctes :</p>
<ul>
<li>La premi&egrave;re mettait en &oelig;uvre la planche RRD Pocket Rocket, utilis&eacute;e en strapless avec une petite voile (mod&egrave;le RRD foil compact en 5m).</li>
<li>La deuxi&egrave;me, plus traditionnelle, mettait en &oelig;uvre un flotteur Horue Airtime 125 de 81 cm de large, et une voile Iris X en 7.4</li>
</ul>
<h3>Montage</h3>
<div>Rien de tr&egrave;s particulier concernant le montage du WH Flight. <span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">L\'utilisation de ce foil n&eacute;cessite imp&eacute;rativement un montage / d&eacute;montage complet du foil entre chaque sportie, sous peine de voir les &eacute;l&eacute;ments se souder entre eux. Compte tenu de la jonction talon / mat, cela fait un paquet de vis &agrave; mettre &agrave; chaque fois</span></div>
<h3>Configuration freeride Straples / Pocket</h3>
<p>Dans le premier cas, avec la RRD Pocket, je n&rsquo;ai pas d&eacute;cel&eacute; notablement d&rsquo;&eacute;volution entre les deux mod&egrave;les de foil. Dans les deux cas c&rsquo;est une configuration tr&egrave;s agr&eacute;able, extr&ecirc;mement ludique, avec laquelle on prend vraiment du plaisir. Le long fuselage rend l&rsquo;ensemble tr&egrave;s stable sur le plan longitudinal, et la position tr&egrave;s debout convient parfaitement &agrave; ce foil un peu souple, sans grosse diff&eacute;rence de feeling entre les deux versions.</p>
<p>Dans ce type d\'utilisation, on a vraiment un concept &agrave; part, qui foncitonne !</p>
<p><img src="/storage/photos/1/2019-05/rrd-wh-flight-alu-85-v2-2019-WedK3iGkdS.jpg" alt="RRD Foil" /></p>
<h3>Configuration freerace</h3>
<p>Dans une utilisation avec une voile plus grande, et un flotteur Freerace, il &eacute;tait int&eacute;ressant de voir si la rigidification du mat allait se sentir.</p>
<p>Dans les faits, on note effectivement une petite diff&eacute;rence, mais elle est loin d&rsquo;&ecirc;tre tr&egrave;s significative, et &agrave; mon avis plus la cons&eacute;quence du raccourcissement du fuselage, que de la rigidification du mat.</p>
<p>On retrouve en effet un comportement tr&egrave;s similaire &agrave; ce que l&rsquo;on avait not&eacute; l&rsquo;an pass&eacute; : la principale caract&eacute;ristique est une instabilit&eacute; en roulis avec une sensation d\'&eacute;lasticit&eacute;. On a la sensation d&rsquo;&ecirc;tre debout sur un lit &agrave; ressort (je pense que vous imaginez ce que cela donne).</p>
<p>Concernant les autres caract&eacute;ristiques du foil, on retrouve une tr&egrave;s bonne stabilit&eacute; longitudinale, une excellente puissance dans le vent tr&egrave;s l&eacute;ger, une tr&egrave;s bonne aptitude &agrave; remonter au vent, mais un contr&ocirc;le qui se d&eacute;grade &nbsp;tr&egrave;s vite d&egrave;s que les conditions se musclent un petit peu, ou simplement dans les rafales.&nbsp;Un point nouveau cependant (ou que je n&rsquo;avais pas not&eacute; l&rsquo;an pass&eacute;), c&rsquo;est un foil qui siffle beaucoup, un peu &agrave; la mode du 1er NeilPryde alu.</p>
<p><img src="/storage/photos/1/2019-05/rrd-wh-flight-alu-85-v2-2019-QLWZ1jsvNm.jpg" alt="RRS WH Flight 85 v2" /></p>
<h3>Mesures</h3>
<p>Pour en avoir le c&oelig;ur net, nous avons &eacute;galement pass&eacute; les deux mats (V1 et V2) sur notre banc d&rsquo;essai. &Agrave; la mesure, on retrouve des valeurs tr&egrave;s proche entre les deux mats, avec certes une petite rigidification, mais non significative.</p>
<p>En analysant le comportement m&eacute;canique du mat, on observe clairement que l&rsquo;essentiel de la flexion se produit au niveau de la jonction entre le talon et le profil (c\'est le facteur limitant). Le fait d&rsquo;avoir rigidifi&eacute; le profil, mais d&rsquo;avoir conserv&eacute; cette connexion, ne fait donc pas &eacute;voluer le probl&egrave;me g&eacute;n&eacute;ral. Cela explique donc pourquoi nous avons ressenti si peu de de diff&eacute;rence sur l&rsquo;eau.</p>
<h3>Bilan</h3>
<p>Dans sa deuxi&egrave;me version, le foil aluminium RRD n\'apporte pas un gain significatif par rapport &agrave; la V1</p>
<p>Cela reste un foil tr&egrave;s efficace dans petit temps, mais qui marque nettement le pas par rapport &agrave; la concurrence en terme de contr&ocirc;le, ou d&rsquo;utilisation dans des conditions un peu plus fortes. Dit autrement, il est performant dans le petit temps, mais pas agr&eacute;able compar&eacute; &agrave; la concurrence. Dans les conditions de vent plus soutenu, il faut avoir du coeur pour continuer &agrave; naviguer avec. En comparaison par exemple avec le Starboard mini race alu, la diff&eacute;rence est flagrante !</p>
<p>Par contre, avec l&rsquo;arriv&eacute;e de la RRD Pocket, ce foil il retrouve un int&eacute;r&ecirc;t &eacute;vident car il se marie de fa&ccedil;on parfaite avec ce flotteur, et cette fa&ccedil;on de naviguer. En mode Strapless, avec une position beaucoup plus droite et des petites voiles, les contraintes m&eacute;caniques sont beaucoup plus faibles, et le foil RRD peut alors exprimer ses capacit&eacute;s :&nbsp;De la glisse, de la stabilit&eacute; longitudinal, de la facilit&eacute; &agrave; d&eacute;coller ... bref, du fun &agrave; tous les &eacute;tages !</p>
<div style="padding: 56.25% 0 0 0; position: relative;"><iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://player.vimeo.com/video/337473278?autoplay=1&amp;loop=1&amp;byline=0&amp;portrait=0" width="320" height="240" frameborder="0" allowfullscreen=""></iframe></div>',
            'test_equipment' => 'Aitime 125 et RRD Pocket',
            'test_duration' => 2,
            'test_conditions' => 'Entre 10 et 20 knt',
            'test_place' => 'Fos S/ Mer',
            'created_at' => '2019-05-27 09:00:02',
            'updated_at' => '2020-03-26 22:41:56',
        ),
        9 => 
        array (
            'id' => 11,
            'device_id' => 15,
            'user_id' => 1,
            'title' => 'Bel objet',
            'body' => '<p>Tout fraichement r&eacute;cup&eacute;r&eacute; lors de notre visite de l\'usine Alpine en d&eacute;but de semaine, voici une pr&eacute;sentation du A1, version 2019.</p>
<h3>En image</h3>
<p>Le packaging est toujours aussi bien con&ccedil;u. Le d&eacute;ballage est toujours aussi plaisant.&nbsp;</p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-VuRuuAYtI9.jpg" alt="Alpine foil A1 2019" /></p>
<p>La nouvelle aile RLW , et le stab Race</p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-Bs2zurQilV.jpg" alt="Alpine foil A1 2019" /></p>
<p>Le nouveau fuselage plus raide et plus long</p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-6sUoT5b4WB.jpg" alt="Alpine foil A1 2019" /></p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-c3LkSBhAP4.jpg" alt="Alpine foil A1 2019" /></p>
<p>L\'ensemble est toujours aussi r&eacute;ussi esth&eacute;tiquement. La finition est r&eacute;ellement magnifique .. on aurait presque des scrupules &agrave; le mettre dans l\'eau.</p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-VW1Ny4L4MF.jpg" alt="Alpine foil A1 2019" /></p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-kcaaApcQae.jpg" alt="Alpine foil A1 2019" /></p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-O6gvujAG3N.jpg" alt="Alpine foil A1 2019" /></p>
<p>Dans notre Airtime, le talon rentre comme un charme (sans m&ecirc;me forcer), et se cale aux petits oignons ! La cale de reprise d\'effort sous la car&egrave;ne, qui est enfil&eacute;e sur le talon, permet m&ecirc;me un l&eacute;ger r&eacute;glage du rake car elle pivote l&eacute;g&egrave;rement sur le centre du talon.&nbsp;</p>
<p><img src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-JNE8dx9rUY.jpg" alt="Alpine foil A1 2019" /></p>
<h3>Premier micro-test du A1 Carbone 2019</h3>
<p>Pour ce premier contact, disons tout de suite que les conditions &eacute;taient tr&egrave;s peu favorables (6-8 knt avec capot 3/4 arri&egrave;re). C\'est donc un premier aper&ccedil;u uniquement.</p>
<p>1er test avec la RLW + Stab Race. Clairement, cette configuration &eacute;tait impossible &agrave; utiliser dans ces conditions : m&ecirc;me en se d&eacute;montant les bras au pumping, on arrive &agrave; mettre la planche au planning, mais la vitesse est encore trop juste pour se maintenir en l\'air. On arrive &agrave; d&eacute;coller avec beaucoup d\'incidence, mais elle d&eacute;croche tr&egrave;s vite pour retomber. Damien avait avou&eacute; que la plage du\'ilisation id&eacute;ale de cette aile est au dessus de 12 Knt, il a probablement raison. EN tout cas, dans moins de 8knt, c\'est compliqu&eacute; :)</p>
<p>2e test avec la ULW et stab Race, tout cal&eacute; &agrave; 0 (Stab et Aile)</p>
<p>Le d&eacute;collage reste compliqu&eacute;, en particulier &agrave; cause de la houle qui emp&ecirc;che de lancer correctement la planche dans un vent si faible. D\'un c&ocirc;t&eacute;, la houle est l&eacute;g&egrave;rement de face, ce qui facilite grandement le choses. Sur l\'autre bord, le clapot 3/4 arri&egrave;re a tendance &agrave; amoindrir la portance de l\'aile ... et on a clairement pas besoin de &ccedil;a dans ces conditions. Bref, le cardio s\'emballe &agrave; chaque bord pour lancer la machine.&nbsp;</p>
<p>Comme on l\'avait d&eacute;j&agrave; not&eacute; l\'an pass&eacute;, il faut une bonne vitesse pour lancer la ULW sans qu\'elle ne d&eacute;croche. C\'est la ran&ccedil;on d\'une aile tr&egrave;s fine en &eacute;paisseur relative. Sur ce point, elle rejoint un peu la 850 de Loke, et se diff&eacute;rentie des Sb, Taaroa, AFS et autre Phantom .. qui utilisent des profils plus charnus. Ce n\'est ni mieux ni moins bien, mais il faut juste s\'y r&eacute;-habituer lorsque l\'on passe d\'un mod&egrave;le &agrave; un autre. Bien s&ucirc;r, cette caract&eacute;ristique ne se d&eacute;celle que dans des vents tr&egrave;s marginaux. A partir de 8-9 knt de vent, on ne voit plus la diff&eacute;rence avec les autres.</p>
<p>Une fois en l\'air, on a imm&eacute;diatement un &eacute;quilibre tr&egrave;s marqu&eacute; pied avant. Il faut beaucoup de pression sur le pdm (il faut se pendre &agrave; la voile) pour garder une assiette &agrave; plat. J\'avoue que Damien m\'a donn&eacute; des cales &agrave; incidence n&eacute;gative pour le Stab, mais je voulais faire un test &agrave; 0 pour me donner un r&eacute;f&eacute;rentiel. Bon, je confirme, il faudra absoluement naviguer avec ces cales ... tout au moins avec le stab race.</p>
<p>Lors des 4 ou 5 bords que j\'ai pu tirer, j\'ai &eacute;t&eacute; tr&egrave;s attentif au ressenti concernant la rigidit&eacute; du fuselage. Dans ce vent tr&egrave;s faible, je n\'ai d&eacute;cel&eacute; aucune souplesse parasite, m&ecirc;me lors des pumping bien puissants en vol. Bien s&ucirc;r, c\'est dans des conditions plus muscl&eacute;es que l\'on aura un verdict d&eacute;finitif, mais selon toute vraissemblance, les progr&egrave;s sont tr&egrave;s nets sur ce point.</p>
<p>Apr&egrave;s ces quelques premi&egrave;res impressions, le vent est d&eacute;finitivement pass&eacute; en dessous des 5knt, signant l\'arr&ecirc;t de la session. Je me languis de retourner sur l\'eau pour peaufiner les r&eacute;glages et d&eacute;couvrir tout le potentiel de cette nouvelle version prometteuse.&nbsp;</p>
<p>SUITE au prochain &eacute;pisode :)</p>
<h3>2e test dans 8-12 knt du A1 Carbone</h3>
<p><img title="trajet fos" src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-DiJxjOCHYS.jpg" /></p>
<p>Dans des conditions plus faciles, les progr&egrave;s du A1 se confirment.&nbsp;</p>
<p>Cette fois, j\'ai cal&eacute; le stab race &agrave; -0,8 et m&ecirc;me si &ccedil;a reste pied avant, c\'est plus facile &agrave; g&eacute;rer et plus confortable. Il faudra je pense aller jusqu\'&agrave; -1,5&deg; pour &ecirc;tre &eacute;quilibr&eacute; ... on v&eacute;rifiera ceci la prochaine fois.</p>
<p>Avec la config &agrave; -0,8&deg; le A1 est assez efficace pour remonter au vent m&ecirc;me dans des conditions plut&ocirc;t l&eacute;g&egrave;res. On n\'a pas l\'appui d\'un SB race, mais &ccedil;a permet d&eacute;j&agrave; de pas mal se promener (cf la trace ci dessus), et &ccedil;a reste contr&ocirc;lable m&ecirc;me aux allures travers.</p>
<p>Cette fois, le test a consist&eacute; &agrave; partir de la plage de Fos par Sud, et de remonter en direction de la Gracieuse. Apr&egrave;s 20km de pr&egrave;s, je confirme que le A1 est r&eacute;ellement confortable &agrave; cette allure. On peut certainement faire plus rapide avec des mdo&egrave;les sp&eacute;cialis&eacute;s, mais le contr&ocirc;le offert par le nouveau fuselage rend l\'ensemble tr&egrave;s plaisant. M&ecirc;me dans le petit clapot, on ne ressent plus du tout l\'effet &eacute;lastique que l\'on avant sur le mod&egrave;le 2018.</p>
<p>Il reste &agrave; valider la chose dans un vent soutenu, mais pour l\'instant on ne peut que saluer les progr&egrave;s faits sur le mod&egrave;le 2019 ... et bien s&ucirc;r &agrave; tester l\'aile RLW ! Cette aile devrait permettre de lib&eacute;rer tout le potentiel du A1, car la ULW est une aile de tr&egrave;s grande envergure, qui traine forc&eacute;ment plus que les ailes medium dont nous avons l\'habitude.</p>
<p>&nbsp;</p>
<h3>Test de l\'aile ULW 1200</h3>
<p><img class="img-fluid" src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-Rmubono4r9.jpg" alt="" /></p>
<p>Ce WE, &agrave; l&rsquo;occasion de la journ&eacute;e test Alpinefoil &agrave; Serre Pon&ccedil;on, nous avons enfin eu l&rsquo;occasion de tester la nouvelle aile ULW 1200, qui vient compl&eacute;ter la gamme des ailes Windfoil Alpine.</p>
<p>Pour rappel, la gamme est d&eacute;sormais constitu&eacute;e de&nbsp;</p>
<ul>
<li>ULW 1200 (Ultra Light wind et / ou &nbsp;gros gabarits)</li>
<li>ULW 900 (Polyvalente)</li>
<li>RLW 700 (Glisse et vitesse au dessus de 12-14 ont de vent)</li>
</ul>
<h4>D&eacute;collage</h4>
<p>C&ocirc;t&eacute; d&eacute;part en vol, la r&eacute;ponse est oui dans 90% des cas. Dans l&rsquo;absolu, un rideur l&eacute;ger et ultra tonique ne partira pas plus t&ocirc;t mais pour tous les autres, &ccedil;a rend le d&eacute;part d\'une part plus pr&eacute;coce et surtout&nbsp;<strong>beaucoup moins physique et plus facile.</strong></p>
<p>Pour &ecirc;tre pr&eacute;cis : un rider ultra dynamique, l&eacute;ger et utilisant des petites voiles ne va pas y gagner tant que &ccedil;a car il a la capacit&eacute; &agrave; exploiter la petite diff&eacute;rence de glisse &agrave; son avantage. Par contre, pour ceux qui veulent s&rsquo;arracher un peu moins au pumping, pour ceux qui sont lourds, pour eux qui utilisent un gr&eacute;ement un peu lourd (voiles au dessus de 8m2), ou enfin ceux qui veulent sous toiler sans s\'&eacute;puiser au pumping .... tous ceux l&agrave; vont y gagner <strong>tr&egrave;s nettement</strong>.&nbsp;</p>
<p>Avec la ULW 900, il faut g&eacute;n&eacute;rer de la vitesse de d&eacute;placement pour faire accrocher l&rsquo;aile. Ceci demande soit un peu de vent, soit de la technique et du physique. Sinon, on a un ph&eacute;nom&egrave;ne (les propri&eacute;taires de 900 cherchant &agrave; naviguer dans de l\'ultra l&eacute;ger vont comprendre de quoi je parle) o&ugrave; le foil d&eacute;colle pendant le mouvement de pumping si il est ample, puis retombe une fois le mouvement termin&eacute;.&nbsp;</p>
<p>Avec la ULW 1200, on peut passer &agrave; des mouvements de pumping de plus petite amplitude, par exemple en jouant juste sur le flex de la t&ecirc;te de mat, et &agrave; chaque mouvement, on gagne de la vitesse sans perdre le b&eacute;n&eacute;fice du mouvement pr&eacute;c&eacute;dent. Du coup, m&ecirc;me avec un pumping moins efficace, on s&rsquo;&eacute;puise moins et on part plus vite.&nbsp;</p>
<p>Une fois en l&rsquo;air, on peut voler &agrave; plus basse vitesse sans retomber. Cela veut dire que si on n&rsquo;a pas la puissance (vent) ou le physique et la tonicit&eacute; pour faire acc&eacute;l&eacute;rer la planche, on peut rester en l&rsquo;air et cruiser &agrave; petite vitesse en gardant m&ecirc;me de l&rsquo;appui pour remonter au vent (ou ne pas descendre) .. et cela fonctionne m&ecirc;me avec une planche ou un gr&eacute;ement un peu lourd (test&eacute; en 9m2 pour v&eacute;rifier !)</p>
<p><img class="img-fluid" src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-UKvwaPSUdS.jpg" alt="" /></p>
<h4>Au jibe</h4>
<p>Au jibe, la 1200 porte tellement, que le jibe est encore facilit&eacute; : m&ecirc;me si on perd beaucoup de vitesse, on arrive &agrave; rester en l&rsquo;air et &agrave; relancer sans toucher. La diff&eacute;rence est tr&egrave;s significative en comparaison de la 900. Je pr&eacute;cise que cette facilit&eacute; au jibe d&eacute;pend aussi beaucoup du r&eacute;glage de l\'ensembme foil / board pour que l\'ensemble soit &eacute;quilibr&eacute; (ce n\'&eacute;tait pas le cas en standard sur nos 2 flotteurs lors du test, o&ugrave; nous &eacute;tions un peu trop pied arri&egrave;re). Il faudra donc prendre le temps de bien choisir la cale de stab, et la position des straps pour que le vol soit tr&egrave;s &eacute;quilibr&eacute;. Personnellement, je privil&eacute;gie m&ecirc;me un &eacute;quilibre l&eacute;g&egrave;rement pied avant pour pouvoir sortir le pied du stap au jibe en gardant de la hauteur.</p>
<p>Comparaison de shape entre les ULW 900 et 1200 :</p>
<p><img class="img-fluid" src="/storage/photos/1/2019-03/alpinefoil-a1-carbone-ulw-2019-4i4a6w20X7.jpg" alt="" /></p>
<h4>Tenue en vol</h4>
<p>C&ocirc;t&eacute; vol et tenue, on ne ressent pas de train&eacute;e significativement sup&eacute;rieure &agrave; la 900. C&rsquo;est ce qui nous a le plus surpris. Bien s&ucirc;r, on reste sur un programme freeride, et cette UMW 1200 assume parfaitement le fait d&rsquo;avoir une glisse inf&eacute;rieure &agrave; une aile de race (compar&eacute;e &agrave; la Starboard millenium et la Phantom R 1000), mais elle n&rsquo;est pas ridicule.&nbsp;</p>
<p>Dans les rafales (test&eacute;e jusqu&rsquo;&agrave; environ 15-16 knt en 9m), elle se tient et reste seine sans mont&eacute;e ing&eacute;rable. Dans une optique freeride - free race, elle reste ainsiparfaitement dans la course m&ecirc;me si on sort du programme light wind. Il faudra juste adapter la toile. Techniquement, elle fait donc sans aucun probl&egrave;me la jonction avec la RLW 700, destin&eacute;e aux conditions plus soutenues .. avec m&ecirc;me un tr&egrave;s confortable recouvrement.&nbsp;</p>
<h4>Comparaison</h4>
<p>Alpine n\'est pas la premi&egrave;re marque &agrave; proposer une aile &agrave; corde large et de tr&egrave;s grande surface pour optimiser le vol dans le vent l&eacute;ger. Par contre, dans le cr&eacute;neau Freeride perf, c\'est la seule marque avec loke et sa 1000 &agrave; proposer une aile qui garde une glisse tr&egrave;s proche de l\'aile du dessous (850 chez Loke et 900 chez Alpine). C&ocirc;t&eacute; alpine, on se paye m&ecirc;me le luxe d\'avoir une tenue dans le vent presque silmilaire.&nbsp;</p>
<h4>Bilan</h4>
<p>Commercialement, cette ULW 1200 va certainement devenir un pivot de la gamme, et Alpine va dors et d&eacute;j&agrave; la proposer en premi&egrave;re monte sur ses A1 alu et Carbone.</p>
<p>En terme de tarif, le <a href="https://marseille.glissattitude.com/windfoil/u38877s1-alpinefoil-a1-aluminium-dtt-ulw-1200-alpinefoil-2019.html">A1 Alu &eacute;quip&eacute; en standard avec la ULW 1200</a> sortira &agrave; 1498&euro; par exemple (contre 1299&euro; avec la 900). L\'<a href="https://marseille.glissattitude.com/windfoil/u38755s1-alpinefoil-aile-ulw-pour-a1-alpinefoil-2019.html">aile ULW 1200 seule</a> est propos&eacute;e &agrave; 639&euro;. De notre c&ocirc;t&eacute;, on conseillera le pack A1 ULW 1200 + RLW 700 pour une plage d&rsquo;utilisation maximale.</p>
<h3>Place &agrave; la torture</h3>
<p>Pass&eacute; au banc de mesure, le A1 carbone confirme des performances m&eacute;caniques au dessus de la moyenne. Il est dans le peloton de t&ecirc;te, juste derri&egrave;re quelques r&eacute;f&eacute;rences du march&eacute;. Cela confirme le bien fond&eacute; des options choisies par Damien.</p>
<h3>Bilan</h3>
<p>Avec son nouveau fuselage, le A1 2019 marque un vrai progr&egrave;s par rapport au mod&egrave;le 2018 ! Ce n\'est pas un foil qui vise &agrave; jouer les premi&egrave;res places en PWA, ni le top speed des diverses bases de vitesse, mais il propose une ratio polyvalence / accesssibilit&eacute; / performance de tr&egrave;s haut niveau. Si on y ajoute la plus belle fintiion du march&eacute;, on ne peut qu\'&ecirc;tre fier de la production fran&ccedil;aise quand elle atteint ce niveau.</p>',
    'test_equipment' => 'nc.',
    'test_duration' => 3,
    'test_conditions' => 'nc.',
    'test_place' => 'nc.',
    'created_at' => '2019-03-28 17:07:23',
    'updated_at' => '2020-04-03 16:44:10',
),
10 => 
array (
    'id' => 12,
    'device_id' => 16,
    'user_id' => 1,
    'title' => 'Ultra complet',
'body' => '<p>Le montage dans la planche a &eacute;t&eacute; un jeu d\'enfant. Le talon Deep Tuttle est rentr&eacute; sans forcer, et s\'est parfaitement cal&eacute; dans le boitier Horue. A la prochaine nav, je ferai peut &ecirc;tre quelques ajustement du rake car j\'&eacute;tais un poil piqueur. Notons juste que les per&ccedil;ages des ailes mat (derni&egrave;res version &agrave; priori) sont l&eacute;g&egrave;rement d&eacute;sax&eacute;s, ce qui fait forcer l\'insertion des vis. Ce sera un point &agrave; r&eacute;gler avant une production en s&eacute;rie.</p>
<p><img src="/storage/photos/1/2018-12/f4-race-foil-2019-vVHd6APHyA.jpg" alt="" /></p>
<h3>Premier test en mode freeride</h3>
<p>J\'esp&eacute;rais tester les perf light wind avec le fuselage de 120 et l\'aile de 1m, mais une fois le tout mont&eacute;, le vent s\'est &eacute;nerv&eacute; et nous a propos&eacute; une apr&egrave;s midi entre 12 et 20knt, avec quelques belle rafales autour de 25 knt. C\'est donc avec les ailes de 85 et de 90 que j\'ai fait mes premiers vols sur ce F4, accompagn&eacute; du fuslage de 98.</p>
<p>Je ne parlerai pas du d&eacute;collage qui ne pose aucun probl&egrave;me dans un vent de plus de 12 knt, mais subjectivement, j\'ai trouv&eacute; un foil tr&egrave;s sein, avec une tr&egrave;s belle glisse et une rigidit&eacute; d\'ensemble bien dos&eacute;e. Les sensations globales sont assez proches de celles du Sword, avec plus de stabilit&eacute; longitudinale, mais avec calage lat&eacute;ral analogue. La contre g&icirc;te passe sans probl&egrave;me et le plaisir est au rendez vous. La stabilit&eacute; en lacet est &eacute;galement parfaite : tout est parfaitement dans l\'axe et rien ne se dandine m&ecirc;me dans la clapot, un peu &agrave; la mani&egrave;re des AFS et du Taaroa.</p>
<p>Avec les 2 ailes test&eacute;es, on a un foil plut&ocirc;t puissant. Vu les conditions de vent, on aurait largement pu naviguer avec une aile plus petite, et on aurait certainement gagn&eacute; facilement en vitesse (25 knt quand m&ecirc;me sans forcer). Lors de cette premi&egrave;re nav\', je n\'ai ressenti pratiquement aucune vibration dans le foil. On a un tr&egrave;s l&eacute;ger sifflement &agrave; partir de 23-24 knt sur l\'aile brillante, mais je ne l\'ai pas retrouv&eacute; sur l\'aile mat. &nbsp;</p>
<p>Comme le Sword, c\'est un foil qui n&eacute;cessite de toujours garder de la vitesse pour s\'exprimer avec ses ailes &agrave; grand allongement, et en cela il n\'est pas adapt&eacute; &agrave; un d&eacute;butant. Par contre, son ratio Stabilit&eacute; longitudinale / glisse est un pur bonheur pour boucler des jibes sans touchette.&nbsp;</p>
<h3>Deuxi&egrave;me test en mode lightwind</h3>
<p>Cette fois, nous &eacute;tions dans les conditions qui repr&eacute;sentent r&eacute;ellement l\'utilisation commune du foil, avec un vent oscillant entre 7 et 12 knt. Malgr&eacute; les conditions glaciales (10&deg; dans l\'eau, 9&deg; dasn l\'air et pluie), j\'ai test&eacute; 3 configurations</p>
<ul>
<li>Fuselage 120 + Aile 100cm</li>
<li>Fuselage 100 +&nbsp;Aile 100cm</li>
<li>Fuselage 100 + Aile 90cm</li>
</ul>
<div>Dans les 3 cas, m&ecirc;me flotteur (Horue Airtime) et gr&eacute;ement (Hyperglide 8m2). Pour ce test, nous avions &eacute;galement un Sword pour r&eacute;aliser la comparaison.</div>
<div>&nbsp;</div>
<div>Quelque soit la configuration, j\'ai d\'abord not&eacute; que la sensation g&eacute;r&eacute;nale de rigidit&eacute; est moindre avec le gros gr&eacute;ement en 8m2. Certes le F4 reste parmi les foils les plus rigides du march&eacute;, mais cette fois, on commence &agrave; sentir quelques petits mouvement que l\'on ne ressentait pas en 7m, en particulier dans le clapot. Cette sensation est plus sensible avec l\'aile de 100 qu\'avec la 90. Cela montre</div>
<div>
<ul>
<li>que l\'utilsation de gros mat&eacute;riel (voile ou flotteur) doit &ecirc;tre pris en compte dans le choix d\'un foil</li>
<li>que l\'on peut encore faire des progr&egrave;s de ce c&ocirc;t&eacute; m&ecirc;me si, au niveau du F4, on est sur des petits mouvements qui ne g&egrave;nent absoluement pas la navigation, mais qui j\'imagine pourrait devenir plus sensibes en 10m2 pour les coureurs elite</li>
<li>que l\'utilisation d\'ailes &agrave; grand envergure introduit de grosses contraintes sur le foil ... ce dernier &agrave; donc int&eacute;r&ecirc;t &agrave; &ecirc;tre costaud</li>
</ul>
<div>Lors de ce test, j\'ai enfin eu l\'occasion de juger r&eacute;ellement des capacit&eacute;s de d&eacute;collage dans le light, vu les conditions. Quelque soit la configuration choisie, on peut dire que le F4 d&eacute;cole t&ocirc;t mais n&eacute;cessite d\'&ecirc;tre actif. Comme avec la plupart des foils ax&eacute;s perf, les ailes &agrave; grand allongement n&eacute;cessitent un pumping dynamique et une technique aboutie pour acc&eacute;der &agrave; un d&eacute;collage tr&egrave;s pr&eacute;coce. Pour le dire autrement, le potentiel est excellent, mais ce n\'est pas accessible &agrave; tout le monde : il faut "se bouger les fesses" et savoir faire. Moyennant ceci, d&eacute;coller &agrave; 7knt est tout &agrave; fait accessible avec une 8m2. Comme souvent, si on a la technique (puming bras et jambes), la taille de l\'aile influe assez peu sur le d&eacute;collage, contrairement &agrave; une id&eacute;e re&ccedil;ue. Par contre, avec l\'aile de 100, et avec le fuselage long, on a imm&eacute;diatement une fois en l\'air une puissance qui permet d\'acc&eacute;l&eacute;rer et de caper. Avec l\'aile plus petite, il faut d&eacute;ployer plus d\'&eacute;nergie pour acc&eacute;l&eacute;rer, et il est plus difficile de serrer le cap. De m&ecirc;me, lorsque l\'on attaque des grosses molles, l\'aile de 100 et le grand fuslage permettent de pousser plus loin la zone limite o&ugrave; l\'on ne tiendra plus en l\'air.</div>
<div>En contre partie, l\'aile de 100 et le grand fuselage ont une plage d\'utilisation assez courte (aux mains d\'un amateur tout au moins). C\'est un ensemble ultra puissant, et il faut donc bien ma&icirc;triser l\'appui dans le gr&eacute;ement pour pouvoir garder cette configuration au del&agrave; de 13-14knt. Au contraire, la configuration 100/90 est beaucoup plus facile d\'acc&egrave;s et intuitive dans la navigation et la gestion des &eacute;quilibres.</div>
<div>&nbsp;</div>
</div>
<div>En terme d\'&eacute;quilibre longitudinal, j\'ai &eacute;t&eacute; agr&eacute;ablement surpris par la configuration 100/120. Je m\'attendais &agrave; un &eacute;quilibre tr&egrave;s pied avant, mais au final, avec la position avanc&eacute;e des straps sur la Airtime, c\'&eacute;tait tout &agrave; fait g&eacute;rable dans ces conditions de vent. Il est &eacute;vident que ce serait un peu plus compliqu&eacute; sur un flotteur avec des straps trop en arri&egrave;re.</div>
<div>&nbsp;</div>
<div>C&ocirc;t&eacute; stabilit&eacute;, l\'utilisation du fuselage de 120 apporte sans surprise un grosse stabilit&eacute; longitudinale, mais ce n\'est pas pour cela qu\'on ira chercher cette configuration, dans la mesure o&ugrave; elle est d&eacute;j&agrave; excellente avec le 100. Sur les autres axes, on retrouve une stabilit&eacute; lat&eacute;rale offrant un tr&egrave;s bon compromis entre contr&ocirc;le et facilit&eacute; de mise &agrave; la contre g&icirc;te. En lacet, pas de changement notoire entre les 2 fuselages, &ccedil;a reste tr&egrave;s clean dans les 2 cas.</div>
<div>&nbsp;</div>
<div>Comme je l\'ai &eacute;voqu&eacute; un peu avant, le contr&ocirc;le g&eacute;n&eacute;ral (gestion du foil dans les rafales, ou le clapot) est tr&egrave;s bon pour un foil perf, en particulier avec les ailes de 85 et de 95. C\'est un peu plus technique avec l\'aile de 100.</div>
<div>&nbsp;</div>
<div>Difficile d\'&eacute;voquer les performances potentielles de ce type de foil, car je suis mal plac&eacute; pour le faire. J\'imagine que les plus rapides seront capables de flirter avec les 30knt, mais de mon c&ocirc;t&eacute;, je d&eacute;teste de mettre dans le rouge, et je me contente de rester dans ma zone de confort. Grace &agrave; la glisse naturelle des profils, j\'ai quand m&ecirc;me not&eacute; un 23knt au pr&egrave;s (avec l\'aile de 90), ce qui me parait d&eacute;j&agrave; excellent dans un vent de moins de 12 knt.</div>
<div>&nbsp;</div>
<div>En ce qui concerne le feeling g&eacute;n&eacute;ral, je ne peux pas m\'emp&ecirc;cher de souligner encore une fois la sensation de glisse, assez exceptionnelle m&ecirc;me avec l\'aile 100 ! Il rejoins sans probl&egrave;me les Select, Sword et Loke qui sont nos r&eacute;f&eacute;rences sur ce crit&egrave;re.</div>
<div>Cette sensation est je pense autant due &agrave; la finesse des profils (pour info, le mat est encore plus fin que celui du Select) qu\'&agrave; la rigidit&eacute; de l\'ensemble ... qui permet une navigation sans aucune d&eacute;formation parasite.&nbsp;</div>
<div>Si on conjugue cette sensation de glisse avec le comportement g&eacute;n&eacute;ral du foil, c\'est un v&eacute;ritable coup de coeur ... comme le Sword que nous avons test&eacute; il y a peu : ce sont des vraies machines &agrave; plaisir. D&eacute;cid&eacute;ment, le mill&eacute;sime 2019 va offrir des tr&egrave;s beaux outils pour tous les niveaux de pratique.&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>Dans les foils haut de gamme ax&eacute;s performance, on va pouvoir clairement faire son choix en fonction de sa fa&ccedil;on de naviguer et de ses priorit&eacute;s</div>
<div>
<ul>
<li>L\'AFS 95 ou 105 pour ceux qui aiment ou naviguent en puissance&nbsp;</li>
<li>Le sword et le F4&nbsp;pour ceux qui aiment ou naviguent en finesse</li>
<li>Le Starboard pour ceux qui ne savent pas =;)</li>
</ul>
<h3>Apr&egrave;s 1 an d\'utilisation</h3>
<p>1 an apr&egrave;s ces premiers essai, le F4 s\'est rapidement impos&eacute; comme l\'une de nos r&eacute;frence de test. Non pas qu\'il soit meilleur que les autres sur un crit&egrave;re ou un autre, mais au final probablement l\'un des plus polyvalent ... c\'est &agrave; dire celui qui pousse le plus haut l\'ensemble des param&egrave;tres.&nbsp;</p>
<p>Sa plus grosse force, c\'est probalement sa facilit&eacute; d\'acc&egrave;s et le contr&ocirc;le \'facile\' qu\'il offre. Face au Lk Race, et au Phantom plus nerveux, face au Starboard plus confortable, face au Sword plus raide, le F4 est toujours &agrave; l\'aise et permet d\'&ecirc;tre souvent de suivre la cadence sans se mettre dans le rouge.</p>
<p>Ce tableau serait un peu idylique si nous n\'&eacute;voquions pas les limite de ce magnifique engin. La premi&egrave;re, c\'est l\'anodisation de qualit&eacute; assez moyenne des fuselages, qui n&eacute;cessite un entretien r&eacute;gulier au WD40 si on ne veut pas le voir se piquer rapidement. La deuxi&egrave;me est la finition des ailes qui les font siffler en standard. Un gros pon&ccedil;age complet du vernis permet d\'ne venir &agrave; biout mais c\'est un travail suppl&eacute;mentaire.</p>
</div>
<h3>Bilan</h3>
<p>F4 signe encore un tr&egrave;s tr&egrave;s beau produit &agrave; la hauteur de sa r&eacute;putation.</p>
<p>Comme avec le Sword test&eacute; il y a quelques semaines, le F4 est une vraie machine &agrave; plaisir, &agrave; destination des pratiquants exp&eacute;riment&eacute;s qui veulent privil&eacute;gier une navigation en finesse. Nous nous attendions &agrave; un produit exclusif tr&egrave;s ax&eacute; course Up&amp;Down, mais F4 n\'est pas tomb&eacute; dans ce travers, et nous offre l\'un des plus beaux foils du moment, &eacute;galement utilisable en mode freerace. Il serait parfait si la finition &eacute;tait un peu plus soign&eacute;e, comme on peut le voir par exemple chez Alpine ou Starboard.</p>
<p><img src="/storage/photos/1/2018-12/f4-race-foil-2019-CCz0hhZcXR.jpg" /></p>',
'test_equipment' => 'Board : Horue Airtime 125, Voile XO Fly 6.6 sur Platinium SDM 430',
'test_duration' => 40,
'test_conditions' => 'un peu de tout',
'test_place' => 'La ciotat - Le Jaï - Serre Ponçon',
'created_at' => '2018-12-03 17:28:57',
'updated_at' => '2020-04-21 13:45:24',
),
11 => 
array (
'id' => 13,
'device_id' => 20,
'user_id' => 1,
'title' => 'Tout en contrôle !',
'body' => '<p><img src="/storage/photos/1/2018-10/taaroa-noe-97-freerace-uhm-2020-VlppE9w7QY.jpg" /></p>
<p>Pour faire des comparaisons, nous avions &eacute;galement &agrave; disposition un Starboard GTS avec fuselage de 95, et un Noe 80</p>
<p><img src="/storage/photos/1/2018-10/taaroa-noe-97-freerace-uhm-2020-4siwcV6diT.jpg" /></p>
<h3>D&eacute;collage</h3>
<p>Ce premier test ne me permettra pas d\'&eacute;voquer les capacit&eacute;s dans le light, mais le d&eacute;collage semble assez pr&eacute;coce tout de m&ecirc;me. Comme pas mal de foils ax&eacute;s perf, il faut un minium de vitesse pour atteindre la vitesse critique de d&eacute;collage ... bien plus qu\'avec le Noe Freeride. Par contre, la tr&egrave;s bonne glisse du Noe Freerace UHM&nbsp; permet d\'y arriver tr&egrave;s vite. Je me languis de voir ce que cela donne avec moins de vent.</p>
<p>Pour juger de la portance d\'un foil, on a l\'habitude d\'analyser son comportement dans les molles, ou lorsque l\'on ouvre la voile pour faire chuter la puissance v&eacute;lique. Avec le Noe Freerace, la portance et la glisse sont tellement impressionnantes que l\'allonge est &eacute;norme. C\'est d\'ailleurs la premi&egrave;re fois que je passe les airjibe aussi facilement !</p>
<p>Au d&eacute;collage, on sent imm&eacute;diatement un foil assez puissant avec une aile avant tr&egrave;s porteuse ... mais d&egrave;s les premiers m&egrave;tres, c\'est la sensation de glisse qui surprend le plus ! Nos r&eacute;f&eacute;rences sur ce crit&egrave;re, qui &eacute;taient le Slingshot Ghost Wisper, et le Select Profoil F1, Loke LK1 sont largement &eacute;gal&eacute;s.<img src="/storage/photos/1/2018-10/taaroa-noe-97-freerace-uhm-2020-0dKlvfcVpz.jpg" /></p>
<h3>Stabilit&eacute;</h3>
<p>Le stabilit&eacute; lat&eacute;rale est forte, avec un &eacute;quilibre tr&egrave;s stable (qui ram&egrave;ne au centre). On est au dessus des foils comme les NP Alu, Zeeko, Starboard Alu, Alpine A1, Lk1, Envol ... &agrave; un niveau comparable avec les AFS 95, Starboard GTS, NP F4 ... et en dessous de la r&eacute;f&eacute;rence absolue du domaine : l\'AFS 105</p>
<p>La stabilit&eacute; longitudinale est plut&ocirc;t dans la moyenne haute ... &agrave; &eacute;quivalence avec les Starboard GTS, Alpine A1 ... plus stable (voir beaucoup plus) que les Vini, Lk1, NeilPryde Alu, Zeeko, Select F1 ... et un cran en dessous des AFS et Starboard Race. Sur ce crit&egrave;re, c\'est la premi&egrave;re fois que je ressent aussi clairement l\'augmentation de la stabilit&eacute; avec la vitesse : plus on va vite, plus le foil est stable : et c\'est rassurant et tr&egrave;s agr&eacute;able. Une derni&egrave;re pr&eacute;cision importante sur ce crit&egrave;re : de plus en plus, nous testons des foils globalement tr&egrave;s stables sur cet axe, mais pr&eacute;sentant des r&eacute;actions de rebond plus ou moins marqu&eacute;es (RRD, Alpine A1 2018 etc.), li&eacute;s &agrave; des fuselages (et stab) longs mais insuffisamment rigides. Cette fois, TAAROA arrive &agrave; proposer une bonne stabilit&eacute; avec un fuselage relativement court et donc tr&egrave;s rigide, sans aucun rebond.</p>
<p>La stabilit&eacute; en lacet est excellente, avec en particulier aucune oscillation parasite. Sur ce point, il n\'y avait jusque l&agrave; qu\'avec l\'AFS 105 que nous avions ressenti une telle "propret&eacute;" dans la navigation. Ceci est la preuve d\'une tr&egrave;s grosse rigidit&eacute; en torsion, associ&eacute; &agrave; un stab tr&egrave;s efficace.</p>
<p><img src="/storage/photos/1/2018-10/taaroa-noe-97-freerace-uhm-2020-6afTh8kZR5.jpg" /></p>
<h3>Equilibre</h3>
<p>En terme d\'&eacute;quilibre longitudinal, le Noe Freerace UHM&nbsp;&eacute;tait l&eacute;g&egrave;rement pied avant sur nos 2 planches de test. En modifiant la position du stab (et donc son incidence), on a facilement modifi&eacute; ceci pour l\'adapter &agrave; notre gout. J\'ai not&eacute; qu\'au voisinage du minimum d\'incidence, le r&eacute;glage est extr&ecirc;mement sensible : avec moins de 1mm de d&eacute;placement, les diff&eacute;rences sont tr&egrave;s sensibles .. il faudra donc &ecirc;tre pr&eacute;cis, mais cela veut aussi dire que le foil pourra s\'adapter facilement aux pr&eacute;f&eacute;rences de chacun. Attention, le Noe Freerace est un foil puissant ... il sera donc indispensable de savoir utiliser ce r&eacute;glage sans lequel il pourrait vite devenir tr&egrave;s complexe dans le vent soutenu.</p>
<h3>Cap</h3>
<p>En terme de cap, le Noe Freerace n\'est pas particuli&egrave;rement impressionnant. Dans sa configuration actuelle (fuselage de 78cm ), on est sur un foil con&ccedil;u pour une utilisation standard, et non pour faire du pur Up&amp;Down comme les Starboard Race ou RRD 120. En comparaison avec le Starboard &eacute;quip&eacute; de son fuselage de 95, on avait un peu moins d\'appui, mais tout de m&ecirc;me plus que dans la configuration Starboard GTS (fuselage de 75).&nbsp;<br /><em><strong>Edit</strong></em>. Avec le nouveau fuselage 85+, on gagne notablement en appui, m&ecirc;me si cela n\'en fait pas un foil de race. On va simplement dire qu\'on la l\'appui n&eacute;cessaire pour &ecirc;tre confortable dans les replacements.</p>
<h3>Vitesse</h3>
<p>Pour finir, &eacute;voquons la vitesse, qui int&eacute;ressera sans doute les clients potentiels de ce type de foil haut de gamme. Je prends toujours avec des pincettes ce type de mesure car elle d&eacute;pend de beaucoup d\'&eacute;l&eacute;ments. Par ailleurs, le pilote est probablement l\'&eacute;l&eacute;ment le plus influant sur le r&eacute;sultat ... je compare donc mes performances personnelles, r&eacute;alis&eacute;es toujours un peu de la m&ecirc;me fa&ccedil;on : sans se mettre dans le rouge, sans prendre de risques, et avec voile &agrave; 2 cambres de surface raisonnable (pas question d\'&ecirc;tre surtoil&eacute; en mode survie, avec une voile de course). Apr&egrave;s ces pr&eacute;cisions, notons que sur un plan d\'eau parfaitement plat, j\'ai r&eacute;alis&eacute; (apr&egrave;s avoir nettoy&eacute; la trace GPX qui donnait un point &agrave; 33 knt !?!)</p>
<ul>
<li>V max 2s : 26.4Knt</li>
<li>V max 10s : 26.05Knt</li>
<li>V Max 500m : 25.02Knt</li>
</ul>
<p>Si on rapporte ceci au fait que nous &eacute;tions avec un aile de 82cm, c\'est clairement l\'un des foils les plus rapides que j\'ai essay&eacute; &agrave; ce jour ... dans le m&ecirc;me ordre d\'id&eacute;e que les F4 et AFS 105 !</p>
<h3>Contr&ocirc;le</h3>
<p>C\'est clairement sur ce crit&egrave;re que le NOE 97 Freerace UHM crise l\'&eacute;cart avec ses concurrents ! Que ce soit sur le plat, la mer form&eacute;e, le vent l&eacute;ger ou le vent fort, le Noe UHM ne se fait jamais bouger, et on reste toujours en contr&ocirc;le. Cela parait anecdotique pour ceix qui d&eacute;butent le foil et pensent qu\'ils ne naviguerons que dans le light, mais les choses sont bien diff&eacute;rentes. Vous verrez que dans les faits, on se prend vite au jeux, et on pratique le foil dans toutes les conditions ... d\'aboard parceque lorsque l\'on ma&icirc;trise et que l\'on a un foil g&eacute;rable, c\'est tellement bon qu\'on aurait tort de s\'en priver, et ensuite parcque qu\'il y a beaucoup de spot o&ugrave; le vent est irr&eacute;gulier, pouvant passer de 12 &agrave; 20knt au cours d\'une session ... et que ce serauit dommage de tout arr&ecirc;ter car le vent est mont&eacute;.&nbsp;</p>
<p>Bref, pour revenir &agrave; nos moutons, vous pouvez sortir le NOE UHM dasn tous les temps sans vous faire peur ... et pour les sp&eacute;cialistes de la vitesse, le contr&ocirc;le est vous le savez un pr&eacute;requis pour pouvoir pousser la machine.&nbsp;</p>
<p>Edit. Avec la disponibilit&eacute; de l\'aile de 1000, et du fuselage de 95, il nous paraissait int&eacute;ressant de fair un opoint sur le contr&ocirc;le lorsque le foil est soumis &agrave; des contriantes plus s&eacute;v&egrave;res. La conculsion est qu\'il passe le test avec brio (cf mon compte rendu sp&eacute;cifique &agrave; ce setup) ... et l&agrave; encore, il reste le foil o&ugrave; l\'on ressent le plus de rigidit&eacute; g&eacute;n&eacute;rale m&ecirc;me avec des gros &eacute;l&eacute;ments porteurs&nbsp;</p>
<h3>Feeling g&eacute;n&eacute;ral</h3>
<p>En terme de feeling g&eacute;n&eacute;ral (ce qui a pour moi le plus d\'importance au final), le Noe Freerace UHM&nbsp;m\'est apparu comme un genre de compromis id&eacute;al entre r&eacute;activit&eacute;, glisse et contr&ocirc;le .. au service d\'une navigation freerace. Malgr&eacute; les tr&egrave;s nombreux foils que j\'ai test&eacute; &agrave; ce jour, j\'ai vraiment pris &eacute;norm&eacute;ment de plaisir cet apr&egrave;s midi ... je n\'ai qu\'une envie : aller scruter le comportement de ce foil dans tous ces recoins. Si on devait ne retenir qu\'une sensation qui caract&eacute;rise le plus ce foil, ce serait &eacute;videmment la glisse, mais le contr&ocirc;le vient juste derri&egrave;re.</p>
<h3>Navigation dans le light</h3>
<p>A l\'issue des premiers tests men&eacute;s dans des conditions vent&eacute;es, j\'ai eu l\'occasion de re-tester le&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Noe Freerace UHM dans du light et de l\'ultra light.&nbsp;</span></p>
<p><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Dans ces conditions, la configuration aile de 800 / fuselage de 75+ avoue ses limites en dessous de 8-9 knt quand il faut toiler plus de 8m2. On garde en permanence une tr&egrave;s bonne glisse, mais le foil devient pointu car l\'aile de 800 &agrave; grand allongement tol&egrave;re mal la sous-vitesse. Au contraire des aile &agrave; grosse surface, il faut toujours maintenir un vitesse un peu &eacute;lev&eacute;e pour garder le vol. Dasn les conditions l&eacute;g&egrave;res, ceci impsoe au pilote d\'&ecirc;tre actif en permannce pour relancer ... ce qui est peut &ecirc;tre un peu fatiguant &agrave; la longue. Bref, il faut 10knt pour que la nav\' soit r&eacute;ellement agr&eacute;able et confortable avec l\'aile FreeRace.</span></p>
<p><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Pour cette raison, et parcque nous en voulons toujours plus 😉, nous avons mis la presion pendant des mois &agrave; TAAROA pour produite &agrave; la fois une aile de plus garne envergure, et un fuselage plus long -pour gagner de l\'appui. Le r&eacute;sultat est &agrave; la hauteur de nos esp&eacute;rance, mais je vous laisse lire le post d&eacute;di&eacute;.&nbsp;</span></p>
<h3>Bilan</h3>
<p>Apr&egrave;s ce premier test de 2 heures, le Noe Freerace UHM m\'a fait tr&egrave;s forte impression. Le Noe Freerace UHM&nbsp;semble d&eacute;j&agrave; &ecirc;tre l\'un des foils le plus complets et performants avec lesquels j\'ai eu l\'occasion de naviguer dans la cat&eacute;gorie FreeRace ! M&ecirc;me si TAAROA en est &agrave; son galop d\'essai sur le Windfoil, ce coup d\'essai semble d&eacute;j&agrave; &ecirc;tre un coup de ma&icirc;tre.</p>
<p><img src="/storage/photos/1/2018-10/taaroa-noe-97-freerace-uhm-2020-4iQBBDROer.jpg" /></p>',
'test_equipment' => 'Aitrime 125 et Starboard F144 / Voile F Type 5.8 et Hyperglide 8m',
'test_duration' => 2,
'test_conditions' => 'de 8 à 20 knt',
'test_place' => 'Almanarre',
'created_at' => '2018-10-01 22:38:10',
'updated_at' => '2020-03-26 22:41:57',
),
12 => 
array (
'id' => 14,
'device_id' => 23,
'user_id' => 1,
'title' => 'Plus long ... plus bon :)',
'body' => '<p>Suis au test publi&eacute; sur le Noe 80, je ne reviendrai pas sur tous les &eacute;l&eacute;ments, mais sur ce qui les diff&eacute;rencie.&nbsp;</p>
<h3>Feeling sur l\'eau</h3>
<p>En comparaison avec le 80, on gagne &eacute;videmment en aisance par le surcroit d\'amplitude disponible dans la gestion de la hauteur. Par contre, grace &agrave; une nouvelle construction encore plus haut de gamme, on ne perd rien en rigidit&eacute;, et ce sera certainement l\'un des tr&egrave;s gros points fort du Noe 97 ! Le contr&ocirc;le dans le vente soutenu est impeccable, et le foil r&eacute;pond au doigt et &agrave; l\'oeil sans aucun mouvement parasite. Le profil a &eacute;t&eacute; &eacute;galement tr&egrave;s bien choisi car la glisse est tout &agrave; fait comparable au 80</p>
<p>&nbsp;</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-97-freeride-2018-opxIJIFmgR.jpg" /></p>
<p>Avec ce nouveau mat de 97, la contre-g&icirc;te est &eacute;videmment plus accessible, mais il faudra des planches un peu plus larges qu\'avec le 80 pour en tirer tous les b&eacute;n&eacute;fices. Je dirai qu\'id&eacute;alement, un flotteur d\'au moins 85 de large est &agrave; conseiller pour ce mod&egrave;le (ou un flotteur d&eacute;di&eacute; de 80 tr&egrave;s large derri&egrave;re, comme la Airtime que nous utilisons lors des tests).</p>
<p>Pour l\'instant, le Noe 97 fait clairement partie des foils qui nous ont donn&eacute; le plus de plaisir ! C\'est pas le plus rapide, mais l\'un de ceux qui est le plus ob&eacute;issant aux ordres du pilote, sans aucune traitrise. On se prend au jeu et c\'est juste le plaisir qui monte d\'un cran.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-97-freeride-2018-0uzEEtTIFc.jpg" /></p>
<h3>Associations</h3>
<p>Le Noe sera id&eacute;alement associ&eacute; &agrave; un flotteur pas trop large typ&eacute; freeride (il fait merveille sur le Foil 122 et la JP 120, et marche tr&egrave;s bien sur la JP 135). Je l\'ai test&eacute; avec des grosses voiles &agrave; camber (qu\'il supporte sans probl&egrave;me grace &agrave; sa rigidit&eacute;), mais il s\'exprimera id&eacute;alement avec des voiles sans cam autour de 5 &agrave; 6m, ou avec 2 cam l&eacute;g&egrave;re en 7 &agrave; 7.5 m2.</p>
<p>Dans sa version Noe 97, je conseille un flotteur de 80 ou 85cm, et il s\'exprimera alors parfaitement avec des voiles jusqu\'&agrave; 8m2</p>
<h3>What next</h3>
<p>Avec le Noe, Taaroa met un pied dans le monde du windfoil en son nom. Apr&egrave;s avoir collabor&eacute; avec d\'autres marques, Martin Turbil a finalement d&eacute;cid&eacute; de diffuser ses propres produits afin de ne plus &ecirc;tre brid&eacute; dans ses id&eacute;es. Visiblement, ce premier jet lui donne parfaitement raison avec un produit super r&eacute;ussi, et nous savons que ce n\'est que le d&eacute;but ... &agrave; suivre de tr&egrave;s pr&egrave;s !</p>
<p>Je rajoute un point important : le NOE est totalement &eacute;volutif car TAAROA a pr&eacute;vu d\'utiliser des connexions communes sur tous ces produits windfoil. Il sera donc possible de faire &eacute;voluer le NOE avec les &eacute;l&eacute;ments en cours de d&eacute;veloppement (ailes perf, fuselage plus long, mat plus long etc...).</p>',
'test_equipment' => 'Horue Airtime 125 / Phantom IRIS X 5.8',
'test_duration' => 1,
'test_conditions' => 'vent de Nord / 10-20 knt ... plan d\'eau ultra plat',
'test_place' => 'La Ciotat',
'created_at' => '2018-07-05 21:04:31',
'updated_at' => '2020-03-26 22:41:57',
),
13 => 
array (
'id' => 15,
'device_id' => 24,
'user_id' => 1,
'title' => 'Sécurisant mais efficace',
'body' => '<h4>&nbsp;</h4>
<h4>Pr&eacute;sentation</h4>
<p>D&egrave;s le premier coup d\'oeil, on reconnait imm&eacute;diatement la patte Taaroa, avec une finition de haut niveau, une construction rigide et ultra robuste, et des solutions &eacute;prouv&eacute;es provenant de leur expertise dans le domaine du witefoil. D&eacute;j&agrave; sur notre prototype, la construction est magnifique ... &ccedil;a promet !</p>
<p>Le Noe est constitu&eacute; d\'un mat carbone de 80cm, d\'un fuselage alu anodis&eacute;, d\'une aile et d\'un stab en carbone ... le tout pour 1200&euro; ! La barre est haute sur le papier .. reste &agrave; voir ce que cela donne sur l\'eau.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-AFL1CviIYV.jpg" /></p>
<h4>Sur l\'eau</h4>
<h4>D&eacute;collage</h4>
<p>Notre premier test ayant eu lieu dans un vent tr&egrave;s soutenu, le d&eacute;collage n\'a jamais &eacute;t&eacute; un probl&egrave;me. Il est plut&ocirc;t progressif et facile &agrave; contr&ocirc;ler. On a jou&eacute; avec le r&eacute;glage de stab (m&ecirc;me syst&egrave;me que sur le Horue Vini) pour g&eacute;rer la portance dans le vent soutenu ... et c\'est plut&ocirc;t efficace.</p>
<p>Test&eacute; ensuite dans des conditions tr&egrave;s light puis m&eacute;dium, le Noe confirme qu\'il fait partie des foils d&eacute;collant les plus t&ocirc;t du march&eacute;. Subjectivement, on est au niveau des meilleurs dans le domaine (Vini XLW, Starboard Race, Slingshot, LK1 1200 etc.) mais avec la grande qualit&eacute; (compar&eacute; &agrave; certains autres) d\'&ecirc;tre tr&egrave;s rigide donc parfaitement stable et rassurant en l\'air.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-fvLqMrGCG4.jpg" /></p>
<p>Il n\'y a pas besoin d\'une tr&egrave;s grosse puissance de voile pour "s\'envoyer en l\'air". L\'aile a une portance importante car elle reste en l\'air m&ecirc;me &agrave; tr&eacute;s basse vitesse. Cons&eacute;quence : le passage dans les molles est excellent. Autre grande qualit&eacute;, cela se fait avec une vraie sensation de glisse : on n\'a pas l\'impression d\'avoir une grosse aile qui traine de l\'eau ... m&ecirc;me si on reste bien en de&ccedil;&agrave; des foils perfs de ce c&ocirc;t&eacute; (Starboard par exemple).</p>
<h4>Portance</h4>
<p>Le Noe est l\'un des foils les plus faciles pour s\'entrainer au air-jibe car il pardonne beaucoup, garde toujours de la portance m&ecirc;me &agrave; basse vitesse, et sa rigidit&eacute; permet de contr&ocirc;ler la courbe.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-HRNP3RBWcM.jpg" /></p>
<p>Compte tenu de la portance assez forte de l\'aile, il ne faut pas h&eacute;siter &agrave; jouer avec le r&eacute;glage de stab pour la r&eacute;guler lorsque le vent monte. Nous avons ainsi navigu&eacute; jusqu\'&agrave; plus de 25knt de vent sans se faire peur.</p>
<h4>Glisse</h4>
<p>La seule chose qu\'on peut reprocher au Noe est de manquer de finesse dans la glisse, mais compte tenu de la cible, ce n\'est pas l\'objectif et c\'est m&ecirc;me volontaire. Au contraire, on profite d\'une vitesse assez linaire avec peu d\'effet d\'acc&eacute;l&eacute;rations ... et &ccedil;a le rend tr&egrave;s rassurant mais &ccedil;a peut frustrer les pratiquants aguerris. Je vous rassure quand m&ecirc;me : d\'une part on plus de glisse que nombreux autre foils avec de grosse ailes tr&egrave;s porteuses, et on d&eacute;passe quand m&ecirc;me facilement les 20knt de vitesse sans forcer. Par ailleurs, TAAROA travaille sur d\'autres ailes plus \'perf\' qui seront compatibles avec le Noe.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-8yWWUrrHnN.jpg" /></p>
<h4>Stabilit&eacute;</h4>
<p>La stabilit&eacute; lat&eacute;rale est excellente, sans &ecirc;tre bloqu&eacute;e. On est dans le m&ecirc;me niveau que l\'alpinefoil, ou le starboard alu. Quelque soit le mode de navigation (d&eacute;bout ou pench&eacute; dans la voile), aucun d&eacute;part &agrave; la gite, et surtout aucun effort &agrave; fournir pour le garder &agrave; plat. La contre g&icirc;te est tr&egrave;s accessible, mais limit&eacute;e en angle. Par contre, elle est facile &agrave; garder. Le Noe est ainsi un bon foil pour s\'entrainer au pr&egrave;s.</p>
<p>Dans le vent soutenu et le clapot form&eacute;, on ressent des petits mouvement de lacet qui ne sont pas pour autant g&ecirc;nants. C\'est beaucoup moins sensible que sur certains foils (horue, select, et dans une moindre mesure loke), mais plus que sur un Starboard ou un AFS par exemple. Cette sensation disparait &agrave; la contre gite, ce qui laisse &agrave; penser &agrave; un effet hydrodynamique, probablement sur le stab.</p>
<p>Stabilit&eacute; longitudinale : Sur cet axe &eacute;galement, le Noe est sein avec un excellent compromis entre stabilit&eacute; et vivacit&eacute;. On est subjectivement au niveau d\'un LK1, soit bien plus stable qu\'un H10, RS:Flight AL, Vini, etc un cran en dessous d\'un AFS ou un Starboard Alu. C\'est un compromis offrant une conduite assez intuitive. Surtout, il n\'y a aucun rebond sur cet axe, contrairement par exemple au Alpinefoil qui en avait un peu.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-QeIaMytBhc.jpg" /></p>
<h4>Sensation g&eacute;n&eacute;rale</h4>
<p>De fa&ccedil;on g&eacute;n&eacute;rale, le Noe est tr&egrave;s sein et intuitif. Il est aussi tr&egrave;s rassurant car assez lin&eacute;aire en vitesse. On n\'a pas les acc&eacute;l&eacute;rations d\'un Vini, S&eacute;lect ou Lk1 mais au contraire, le Noe ne surprend pas et permet de garder le contr&ocirc;le en toute circonstance. Malgr&eacute; l\'aile tr&egrave;s porteuse, nous avons utilis&eacute; le Noe jusqu\'&agrave; plus de 25 knt en 5.4 ... quelque chose d\'impensable avec certains autres foils ... merci &agrave; la rigidit&eacute; ! Le r&eacute;glage de stab, similaire &agrave; celui du Vini, permet de moduler efficacement la puissance du foil, et donc de l\'adapter aux conditions.</p>
<p>Par son positionnement prix et sa technologie, le NOE attaque directement l\'AFS Wind 85 avec lequel il partage beaucoup de point communs (accessibilit&eacute;, rigidit&eacute;, technologie). L\'AFS est plus stable en longitudinal et sensiblement plus rapide. Le Noe est beaucoup plus facile &agrave; la contre-g&icirc;te, fait un meilleur cap naturellement, et d&eacute;colle nettement plus t&ocirc;t ... 2 alternatives tr&egrave;s pertinentes : &agrave; vous de choisir en fonction de vos objectifs :)</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-GiBlGA2OAu.png" /></p>
<p>Et si on devait encore vous prouver que la Noe vole tr&egrave;s facilement avec peu de puissance de voile, Thibaut enfonce le clou avec un gr&eacute;ement gonflable qui pour le coup n\'est pas puissant du tout ;)</p>
<p><iframe src="https://www.youtube.com/embed/X3NONBxHGMg" width="560" height="315" frameborder="0" allowfullscreen=""></iframe></p>
<h4>NOE 97</h4>
<p>Apr&egrave;s quelques semaines de patience suppl&eacute;mentaire, nous avons re&ccedil;u nos premiers mats de 97cm destin&eacute;s au Noe.</p>
<p>En comparaison avec le 80, on gagne &eacute;videmment en aisance par le surcroit d\'amplitude disponible dans la gestion de la hauteur. Par contre, grace &agrave; une nouvelle construction encore plus haut de gamme, on ne perd rien en rigidit&eacute;, et ce sera certainement l\'un des tr&egrave;s gros points fort du Noe 97 ! Le contr&ocirc;le dans le vente soutenu est impeccable, et le foil r&eacute;pond au doigt et &agrave; l\'oeil sans aucun mouvement parasite. Le profil a &eacute;t&eacute; &eacute;galement tr&egrave;s bien choisi car la glisse est tout &agrave; fait comparable au 80</p>
<p>&nbsp;</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-Oim12JoK4f.jpg" /></p>
<p>Avec ce nouveau mat de 97, la contre-g&icirc;te est &eacute;videmment plus accessible, mais il faudra des planches un peu plus larges qu\'avec le 80 pour en tirer tous les b&eacute;n&eacute;fices. Je dirai qu\'id&eacute;alement, un flotteur d\'au moins 85 de large est &agrave; conseiller pour ce mod&egrave;le (ou un flotteur d&eacute;di&eacute; de 80 tr&egrave;s large derri&egrave;re, comme la Airtime que nous utilisons lors des tests).</p>
<p>Pour l\'instant, le Noe 97 fait clairement partie des foils qui nous ont donn&eacute; le plus de plaisir ! C\'est pas le plus rapide, mais l\'un de ceux qui est le plus ob&eacute;issant aux ordres du pilote, sans aucune traitrise. On se prend au jeu et c\'est juste le plaisir qui monte d\'un cran.</p>
<p><img src="/storage/photos/1/2018-07/taaroa-noe-80-freeride-2018-tCU4JTkxRZ.jpg" /></p>
<h4>Associations</h4>
<p>Le Noe sera id&eacute;alement associ&eacute; &agrave; un flotteur pas trop large typ&eacute; freeride (il fait merveille sur le Foil 122 et la JP 120, et marche tr&egrave;s bien sur la JP 135). Je l\'ai test&eacute; avec des grosses voiles &agrave; camber (qu\'il supporte sans probl&egrave;me grace &agrave; sa rigidit&eacute;), mais il s\'exprimera id&eacute;alement avec des voiles sans cam autour de 5 &agrave; 6m, ou avec 2 cam l&eacute;g&egrave;re en 7 &agrave; 7.5 m2.</p>
<p>Dans sa version Noe 97, je conseille un flotteur de 80 ou 85cm, et il s\'exprimera alors parfaitement avec des voiles jusqu\'&agrave; 8,5m2</p>
<h4>What next</h4>
<p>Avec le Noe, Taaroa met un pied dans le monde du windfoil en son nom. Apr&egrave;s avoir collabor&eacute; avec d\'autres marques, Martin Turbil a finalement d&eacute;cid&eacute; de diffuser ses propres produits afin de ne plus &ecirc;tre brid&eacute; dans ses id&eacute;es. Visiblement, ce premier jet lui donne parfaitement raison avec un produit super r&eacute;ussi, et nous savons que ce n\'est que le d&eacute;but ... &agrave; suivre de tr&egrave;s pr&egrave;s !</p>
<p>Je rajoute un point important : le NOE est totalement &eacute;volutif car TAAROA a pr&eacute;vu d\'utiliser des connexions communes sur tous ces produits windfoil. Il sera donc possible de faire &eacute;voluer le NOE avec les &eacute;l&eacute;ments en cours de d&eacute;veloppement (ailes perf, fuselage plus long, mat plus long etc...).</p>',
'test_equipment' => 'Flotteurs Starboard Foil 122, JP Hydrofoil 135 et Exocet RF 81 / Voiles : Phantom IRIS 7m, NeilPryde V8 6.7, Severn Hyperglide 8m, NeilPryde RS:Flight 7.8, XoSail Vega 5.4',
'test_duration' => 6,
'test_conditions' => 'de 5 à 25 knt !',
'test_place' => 'La Ciotat / Serre Ponçon',
'created_at' => '2018-07-05 21:04:31',
'updated_at' => '2020-03-26 22:41:57',
),
14 => 
array (
'id' => 16,
'device_id' => 25,
'user_id' => 1,
'title' => 'Une autre façon de voler économique',
'body' => '<h3>Le RS Glide AL 2019 sur l\'eau</h3>
<p>Avec son boitier powerbox en standard, le Glide annonce imm&eacute;diatement un programme diff&eacute;rent. Pour ce test, nous l\'avons donc mont&eacute; sur une planche freeride, et sur une freewave.</p>
<p><img src="/storage/photos/1/2018-08/neilpryde-glide-wind-2018-1Z1Du7fS9b.jpg" /></p>
<p>En terme de comportement, l&agrave; aussi c\'est tr&egrave;s diff&eacute;rent du Flight. Le d&eacute;collage est moins rapide, non pas qu\'il faille plus de vitesse de d&eacute;placement, mais la train&eacute;e importante de l\'aile n&eacute;cessite plus de puissance. Comme le concept n\'est pas fait pour utiliser des grosses voiles, cette puissance n&eacute;cessaire se traduit automatiquement par une n&eacute;cessit&eacute; d\'avoir plus de vent. Le Glide n\'est donc pas un foil destin&eacute; au vent l&eacute;ger.</p>
<p>Encore plus qu\'avec le Flight, le d&eacute;collage est tr&egrave;s doux sur le Glide. On n\'a absolument pas de sensation d\'acc&eacute;l&eacute;ration quand il d&eacute;colle comme on peut l\'avoir avec d\'autres foils. C\'est assez &eacute;tonnant car la transition entre le planning et le vol est moins perceptible. On ressent beaucoup moins la glisse, mais c\'est plus la libert&eacute; du flotteur qui t&eacute;moigne que l\'on est en l\'air.</p>
<p>Une fois le vol stabilis&eacute;, on doit toujours fournir de la puissance avec le glide pour rester en l\'air. D&egrave;s que l\'on ouvre la voile, il ralentit imm&eacute;diatement et se pose. Il n\'a par exemple aucune allonge dans les moles, contrairement &agrave; certains autres foils freeride comme le Noe 80, le Mach1 ou le Zeeko Carver. En contre partie, il y a peu de risque de se faire peur avec ce foil. Dans le cadre d\'une initiation, il peut &ecirc;tre tr&egrave;s int&eacute;ressant car il conjugue un &eacute;quilibre assez pied arri&egrave;re (donc moins d&eacute;paysant pour un windsurfeur), une n&eacute;cessit&eacute; de puissance v&eacute;lique, peu d\'acc&eacute;l&eacute;ration, et un arr&ecirc;t tr&egrave;s rapide quand on veut lever le pied.</p>
<p>En terme d\'&eacute;quilibre, le Glide est tr&egrave;s pied arri&egrave;re par rapport &agrave; nos r&eacute;f&eacute;rences. Les foils NeilPryde (Flight, F4) sont globalement assez &eacute;quilibr&eacute;s vers l\'arri&egrave;re, mais l&agrave; c\'est encore plus marqu&eacute; avec la Rocket. Sur une planche lourde du nez (comme avec notre Rocket de test) il ne faut pas rel&acirc;cher un seconde la pression sous le pied arri&egrave;re pour voler. D&egrave;s que l\'on rel&acirc;che un peu, on se pose imm&eacute;diatement. C\'est pour le coup tr&egrave;s rassurant, mais peu confortable pour un pratiquant aguerri. Avec une planche l&eacute;g&egrave;re et courte comme la 3S, l\'&eacute;quilibre est plus centr&eacute;, et correspond plus &agrave; ce que va rechercher un pratiquant qui ne d&eacute;bute pas. On navigue tr&egrave;s debout et on appr&eacute;cie sa maniabilit&eacute;.</p>
<p>Avec la planche freewave justement (et une petite voile en 4,5m2), c\'est l&agrave; que l\'on d&eacute;couvre &agrave; mon avis le vrai visage du Glide, et son vrai int&eacute;r&ecirc;t ! En plus de l\'&eacute;quilibre qui est plus &eacute;vident, le Glide colle l&agrave; parfaitement au programme car il apporte en 3 dimensions ce que la board apportait partiellement en mode Windsurf : la maniabilit&eacute;, une vitesse contenue, et le c&ocirc;t&eacute; joueur. C\'est &eacute;gelement un foil int&eacute;ressant pour se frotter au surf dans la petite houle. On lui reprochera juste un poil de stabilit&eacute; pour &ecirc;tre parfaitement &agrave; l\'aise dans ces conditions (en comparaison des r&eacute;f&eacute;rebce de la cat&eacute;gorie).</p>
<p><strong>Alors, innovation ou pas ce Glide ?</strong> La r&eacute;ponse est : pas vraiment car c\'est un concept qui existe d&eacute;j&agrave; depuis un moment chez Naish notamment. Le vrai plus de NeilPryde est de proposer ceci avec une finition industrielle, et un tarif ultra raisonnable.</p>
<p><strong>Pour qui est pour quoi ? </strong>Pour moi il y a 2 cibles au Glide. La premi&egrave;re, c\'est le d&eacute;butant qui veut d&eacute;couvrir le foil en &eacute;tant s&ucirc;r de ne pas se faire peur, et en r&eacute;utilisant son flotteur de freeride, sans avoir &agrave; toucher au boitier : investissement minimal. L\'autre, c\'est l\'amateur de freewave et bump &amp; jump qui va foiler dans le vent medium et transformer un flotteur plut&ocirc;t maniable en un engin ultra maniable et joueur.</p>
<h3>Bilan</h3>
<p>Avec la fourn&eacute;e 2019 des foils NeilPryde Aluminium, aucune r&eacute;volution, mais un positionnement produit collant mieux au march&eacute;, tout en restant dans des tarifs parmi les plus bas du march&eacute;.</p>
<p>Le RS:Flight 2018 s\'est beaucoup vendu pour son prix. Comme tenu de son manque de portance naturelle dans le vent l&eacute;ger, beaucoup l\'on revendu tr&egrave;s (trop) rapidement sans en avoir exploit&eacute; toutes les possibilit&eacute;s, et surtout sans avoir mesur&eacute; les performances dont il &eacute;tait capable (vitesse). La version 2019 est bien diff&eacute;rente, et colle beaucoup plus aux besoins de ceux qui veulent d&eacute;couvrir le foil, surtout dans le vent l&eacute;ger. Au vu de son tarif, cela donne au Flight 2019 une vraie (bonne) raison d\'&ecirc;tre !</p>
<p>Avec le Glide, NeilPryde reprend un concept d&eacute;j&agrave; utilis&eacute; par d\'autres, mais le propose &agrave; un tarif ultra bas, avec un nom et avec une qualit&eacute; de fabrication irr&eacute;prochable.&nbsp; Ce Glide Wind ravira les d&eacute;butants qui n\'&eacute;taient pas rassur&eacute;s de se mettre au foil, et les amateurs de navigation dans la houle qui veulent conjuguer la pratique free-wave en mode foil</p>',
'test_equipment' => 'Le Glide a été testé sur une Rocket Wide 118, et une Tabou 3S 106 / NeilPryde V8 6.7, la Duotone F-Type 5,8 et une Duotone Super-Session 4.5',
'test_duration' => 3,
'test_conditions' => 'La Ciotat (vent médium) / Serre-Ponçon (ultra light Wind) et Pierrelatte (vent fort)',
'test_place' => 'La Ciotat (vent médium)',
'created_at' => '2018-08-24 12:33:16',
'updated_at' => '2020-10-22 15:36:18',
),
15 => 
array (
'id' => 17,
'device_id' => 26,
'user_id' => 1,
'title' => 'Windfoil - Test NeilPryde RS:Flight et Glide : 2 visions du foil',
'body' => '<p><img src="/storage/photos/1/2018-08/neilpryde-flight-evo-2018-wrEv8KOy2m.jpg" /></p>
<h3>Le Flight AL 2019 sur l\'eau</h3>
<p>Commen&ccedil;ons par le test du Flight. Pour ce dernier, je ne vais pas d&eacute;crire enti&egrave;rement le comportement du foil, mais plus les diff&eacute;rences avec le RS:Flight 2018.</p>
<p>Nos premiers tests ayant eu lieu dans des conditions de vent tr&egrave;s l&eacute;ger, ce sont les capacit&eacute;s de d&eacute;collage dans le light que nous avons jug&eacute; au d&eacute;part. Pour le coup, l\'&eacute;volution est tout &agrave; fait &eacute;tonnante ! J\'avoue qu\'en voyant le profil, je me doutais que l\'on gagnerai de ce c&ocirc;t&eacute;, mais je ne m\'attendais pas &agrave; une telle diff&eacute;rence. La version 2018 demandait une vitesse assez importante du flotteur pour d&eacute;coller. Cette fois, le d&eacute;collage se produit avec une vitesse assez faible, et l\'&eacute;paisseur du profil permet de tenir facilement en l\'air d&egrave;s cette vitesse critique atteinte. Une fois en l\'air, la plupart des foils assez performants, qui utilisent des profils fins, n&eacute;cessitent que l\'on continue &agrave; pomper pour acc&eacute;l&eacute;rer avant d\'atteindre une vitesse o&ugrave; le foil restera en l\'air et ne d&eacute;crochera plus. Cette fois, on peut tout &agrave; fait voler sur de la distance avec cette petite vitesse de d&eacute;collage. Bien s&ucirc;r, ce n\'est pas tr&egrave;s confortable car le foil est ainsi moins stable et traine beaucoup d\'eau (incidence forte), mais cela va permettre aux d&eacute;butants de trouver plus vite des sensations en vol.</p>
<p><img src="/storage/photos/1/2018-08/neilpryde-flight-evo-2018-2ay0GglsfT.jpg" /></p>
<p>Quelques remarques sur ce d&eacute;collage &agrave; faible vitesse, et au comportement dans le vent faible :</p>
<ul>
<li>d&eacute;collage &agrave; faible vitesse ne veut pas dire d&eacute;collage dans tr&egrave;s peu de vent ! C\'est une confusion assez courante, mais ces profils &eacute;pais ont plus de train&eacute;e, et m&ecirc;me si il d&eacute;collent &agrave; faible vitesse de planche, il faut souvent autant de vent pour amener la planche &agrave; cette vitesse de d&eacute;collage certes faible, que celui n&eacute;cessaire pour amener un foil plus fin &agrave; sa vitesse de d&eacute;collage .. plus &eacute;lev&eacute;e. Dans le cas du Flight, on a pourtant gagn&eacute; sur les 2 points : il d&eacute;colle &agrave; vitesse plus faible, et il y a moins besoin de vent pour le mettre en l\'air (&agrave; surface de voile &eacute;gale)</li>
</ul>
<ul>
<li>avec le Flight 2019, j\'ai r&eacute;ussi &agrave; voler en 7m2 dans un petit 8-9knt de vent. Cela suppose tout de m&ecirc;me une technique de pumping aboutie ! C\'est un net progr&egrave;s par rapport au RS:Flight AL qui me demandait au moins 10-11 knt pour voler avec la m&ecirc;me voile. Je pr&eacute;cise ceci car j\'ai entendu et lu de nombreux retours de pratiquants au sujet du RS:Flight 2018, t&eacute;moignant qu\'il leur fallait au moins 15knt pour voler .. voir plus. Il est donc &eacute;vident qu\'en achetant les ailes et stab 2019 (disponibles en option) pour les adapter sur le mod&egrave;le 2018, on ach&egrave;te une upgrade qui offre un vrai potentiel de vol avec moins de vent, mais pas une technique. Celui qui a besoin de 15 knt pour voler avec le RS:Flight AL 2018 ne volera pas du jour au lendemain dans 8knt avec les nouvelles ailes ;)</li>
</ul>
<ul>
<li>dans le vent l&eacute;ger, le Flight vole tr&egrave;s bien avec une portance solide. Par contre, sa glisse n\'est pas exceptionnelle, et dans les faits moins fine qu\'avec la version 2018. Pour les jeunes comp&eacute;titeurs dont nombreux utilisent le RS:Flight aujourd\'hui, la puissance sup&eacute;rieure offrira de meilleures possibilit&eacute;s au pr&egrave;s et dans les moles. Par contre, il y a de forte chance qu\'il soit un peu retrait c&ocirc;t&eacute; vitesse aux allures travers et abattu ... il faudra donc trouver quel est l\'optimum en fonction des conditions.</li>
</ul>
<p>Dans un peu plus de vent, le Flight AL retrouve rapidement un comportement plus fid&egrave;le &agrave; ce que l\'on connaissait. On a donc un foil toujours assez progressif, peu nerveux et peu puissant donc facile &agrave; g&eacute;rer. Les capacit&eacute;s au pr&egrave;s restent bonnes sans &ecirc;tre au niveau des meilleurs. Les stabilit&eacute;s transversales et longitudinale sont &agrave; peu pr&egrave;s du m&ecirc;me niveau que sur la version 2018. Subjectivement, c\'est sur l\'axe longitudinal que le progr&egrave;s est le plus sensible.</p>
<p>Dans des conditions plus soutenues, on constate tr&egrave;s rapidement que le Flight 2019 a moins d\'acc&eacute;l&eacute;ration que le 2018. Lors des changements d\'allure, on ressent moins les acc&eacute;l&eacute;rations : la vitesse semble beaucoup plus lin&eacute;aire et cela rend le foil plus rassurant. Dans ces conditions, la portance sup&eacute;rieure de l\'aile permet de se mettre plus facilement en s&eacute;curit&eacute; en volant &agrave; basse vitesse avec la voile assez ouverte pour ne pas avoir trop de puissance. Encore une fois, cela donne un surcro&icirc;t d\'accessibilit&eacute; au Flight.</p>
<p>Pour ce qui est des sifflements qui caract&eacute;risaient le Flight 2018 , ils sont ... toujours pr&eacute;sents en 2019. M&ecirc;me solution : il faut poncer la goutte d\'anodisation en bord de fuite, et c\'est une veille histoire. Tous ceux qui m\'ont dit que &ccedil;a ne fonctionnait pas avaient simplement ponc&eacute;s de fa&ccedil;on trop l&eacute;g&egrave;re.</p>
<p><img src="/storage/photos/1/2018-08/neilpryde-flight-evo-2018-Vd9jhL6KA4.jpg" /></p>
<p>Lorsque les conditions sont tr&egrave;s irr&eacute;guli&egrave;res, comme j\'ai eu &agrave; Pierrelatte par exemple, avec des moles ultra faibles, le Flight 2019 a aussi un avantage. Dans ces zones de d&eacute;vente, le Flight 2019 allonge nettement moins que le RS:Flight 2018 si on reste statique (on va moins loin en l\'air dans la molle). Par contre, si on pompe avec les pieds, le Flight 2019 avale litt&eacute;ralement les d&eacute;ventes et permet donc de se poser moins souvent.</p>
<h4>Bilan</h4>
<p><span class="redactor-invisible-space">Avec la fourn&eacute;e 2019 des foils NeilPryde Aluminium, aucune r&eacute;volution, mais un positionnement produit collant mieux au march&eacute;, tout en restant dans des tarifs parmi les plus bas du march&eacute;.</span></p>
<p><span class="redactor-invisible-space">Le RS:Flight 2018 s\'est beaucoup vendu pour son prix. Comme tenu de son manque de portance naturelle dans le vent l&eacute;ger, beaucoup l\'on revendu tr&egrave;s (trop) rapidement sans en avoir exploit&eacute; toutes les possibilit&eacute;s, et surtout sans avoir mesur&eacute; les performances dont il &eacute;tait capable (vitesse). La version 2019 est bien diff&eacute;rente, et colle beaucoup plus aux besoins de ceux qui veulent d&eacute;couvrir le foil, surtout dans le vent l&eacute;ger. Au vu de son tarif, cela donne au Flight 2019 une vraie (bonne) raison d\'&ecirc;tre !</span></p>',
'test_equipment' => 'le Flight a été testé sur la JP Hydrofoil 120, la Horue Airtime et la Starboard Foil 122 /  NeilPryde V8 6.7, la Duotone F-Type 5,8',
'test_duration' => 3,
'test_conditions' => 'Tout',
'test_place' => 'La Ciotat / Serre-Ponçon (ultra light Wind)',
'created_at' => '2018-08-24 12:33:16',
'updated_at' => '2020-03-30 20:11:06',
),
16 => 
array (
'id' => 18,
'device_id' => 27,
'user_id' => 1,
'title' => 'Serrez les fesses',
'body' => '<p>L\'an pass&eacute;, Slingshot proposait son premier foil aluminium avec un concept essentiellement bas&eacute; sur l\'accessibilit&eacute;. Le r&eacute;sultat &eacute;tait un foil tr&egrave;s porteur, mais destin&eacute; &agrave; une pratique freeride et manquant de stabilit&eacute; au regard de la concurrence.</p>
<p>Cette fois, Slinghot propose un foil carbone ax&eacute; perf. Le d&eacute;veloppement et la fabrication n\'ont visiblement pas &eacute;t&eacute; r&eacute;alis&eacute; en interne, ce qui est assez pertinent compte tenu des comp&eacute;tence disponibles ailleurs . La marque distribue ainsi sous son nom le windfoil de la marque italienne MOSES, sp&eacute;cialis&eacute;e dans les foils de kitesurf. On retrouve fort logiquement des &eacute;l&eacute;ments repris du kite et notamment le mat de 101 qui nous a &eacute;t&eacute; fourni pour le test.</p>
<h4>Pr&eacute;sentation statique</h4>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-1pgqYsHtNy.jpg" /></p>
<p>Nous avons &eacute;galement re&ccedil;u 2 ailes : la 639 qui est de petite surface et tr&egrave;s visiblement ax&eacute;e perf, et la 683 qui est &eacute;norme, tr&egrave;s proche des ailes d&eacute;velopp&eacute;es pour le SUP foil dans d\'autres marques. Elle promet une tr&egrave;s grosse portance.</p>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-blR4UvNOii.jpg" /></p>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-R3v7nuARqI.jpg" /></p>
<p>Le fuselage est en aluminium comme avec la plupart des foils d&eacute;montables d&eacute;sormais</p>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-fufkM7mCIl.jpg" /></p>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-gYgoHZusHh.jpg" /></p>
<p>Les accostages d\'aile et de stab sont tr&egrave;s propres, mais sp&eacute;cifiques &agrave; l\'extrados des ailes fournies.</p>
<p>La connexion mat / fuselage fait appel &agrave; un talon bi-conique au m&ecirc;me titre que le nouveau TAAROA. Avec une connexion Carbone / Alu, c\'est clairement la solution la plus pertinente ... et sur ce point, les marques de kitefoil ont du recul assur&eacute;ment.</p>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-CLLmFs22mI.jpg" /></p>
<p>Le Moses est reconnaissable &agrave; 100m par la forme tr&egrave;s particuli&egrave;re du haut de mat avec une sorte de bec qui fait office de platine.</p>
<p><img src="/storage/photos/1/2018-07/slingshot-ghost-wsiper-111-2018-6rW1JdmeH3.jpg" /></p>
<p>Pour le reste, le Ghost Whisper ne peut pas cacher son origine kite avec 2 points qui sautent aux yeux :</p>
<ul>
<li>Le talon qui est un tuttle et non un deep tuttle ... avec les risques que cela comporte quant &agrave; la tenue structurelle des boitiers de windsurf.</li>
<li>Les vis de talon qui sont en M8 et non en M6. Nous devrons remplacer les inserts de 12mm pour ne pas avoir &agrave; repercer nos flotteurs</li>
</ul>
<p>Finissons cette pr&eacute;sentation en pr&eacute;cisant que la finition de ce foil est de tr&egrave;s bon niveau, que ce soit pour les &eacute;l&eacute;ments carbone ou pour le fuselage en aluminium anodis&eacute;.</p>
<p>Pour ce qui est du c&ocirc;t&eacute; structurel, le Ghost Whisper se situe dans la moyenne quant &agrave; la rigidit&eacute; sp&eacute;cifique en flexion du mat. C\'est par contre l\'un des plus souples concernant la r&eacute;gidi&eacute; en torsion du mat.</p>
<h4>Bilan</h4>
<p>Cette ann&eacute;e, Slinghot propose un produit tr&egrave;s bien fini en s\'appuyant sur l\'expertise de Moses Kitefoil. Le Ghost Wisper reprend des solutions d&eacute;sormais habituelles, et quelques bonnes id&eacute;es venues du monde du kitesurf. Le mat de 101 promet une certaine aisance m&ecirc;me dans le calpot. On a h&acirc;te de tester ceci sur l\'eau, d&egrave;s que l\'on aura trouv&eacute; des inserts pour remplacer les M8 inutilisables sur nos boards de windsurf.</p>
<h4>Sur l\'eau</h4>
<p>Apr&egrave;s avoir remplac&eacute; les inserts M8 par des M6, nous avons install&eacute; le GW sur nos flotteurs de test habituels (JP 135 et Exo RF 81). Le test a &eacute;t&eacute; fat sur le plan d\'eau de Serre Pon&ccedil;on avec un vent &eacute;voluant entre 10 et 15 knt. A ce stade, nous n\'avons test&eacute; que la petite aile ... nous attendons d\'avoir un peu plus de temps pour &eacute;valuer l\'autre aile.</p>
<p>Malgr&eacute; la petite surface de 639, le d&eacute;collage est assez rapide et progressif. Il est &eacute;vident que cette configuration n\'est pas faite pour le tr&egrave;s light, mais la finesse de l\'ensemble est surprenante.</p>
<p>D&egrave;s que l\'on est en vol, cette finesse et cette glisse saute aux yeux de fa&ccedil;on encore plus &eacute;vidente. On retrouve des sensations que l\'on avait eu sur le S&eacute;lect par exemple .. malgr&eacute; cette fois un mat qui d&eacute;passe les 100cm ! Le travail sur l\'hydrodynamique du foil a visiblement &eacute;t&eacute; tr&egrave;s pouss&eacute;, et la finition n\'y est probablement pas pour rien.</p>
<p>C&ocirc;t&eacute; stabilit&eacute;, les choses sont un peu plus complexes. Sur le plan longitudinal, on est dans une moyenne basse avec un foil plut&ocirc;t fougueux, mais le mat de 1m offre une telle s&eacute;curit&eacute; que c\'est un point qui ne pose finalement aucun probl&egrave;me. Sur le plan lat&eacute;ral, on ne note aucun d&eacute;part &agrave; la gite, malgr&eacute; un foil plut&ocirc;t libre. Le GW est aussi facile &agrave; mettre &agrave; la contre g&icirc;te, et la longueur du mat permet de descendre tr&egrave;s bas. Il faudra juste bien veiller &agrave; associer le GW &agrave; une planche assez large (85cm para&icirc;t un minimum) pour pouvoir g&eacute;rer l\'assiette sans trop de difficult&eacute;. C&ocirc;t&eacute; lacet, le GW n\'est absolument pas cal&eacute; : il gigote en permanence .. au point de devenir peu rassurant d&egrave;s que le vent monte un peu. On a ainsi bien du mal &agrave; naviguer sereinement ... il est cependant possible qu\'un rider de haut niveau puisse le g&eacute;rer.</p>
<p>Le feeling g&eacute;n&eacute;ral avec ce GW est tr&egrave;s contrast&eacute; : d\'un c&ocirc;t&eacute;, on a l\'impression de monter un cheval fougueux qui laisse peu de r&eacute;pit au pilote, et n&eacute;cessite certainement un gros niveau et un gros coeur pour &ecirc;tre maitris&eacute;. D\'un autre c&ocirc;t&eacute;, on a une glisse, des acc&eacute;l&eacute;rations au pr&egrave;s et des angles de contre g&icirc;te hors du commun.</p>
<h4>Bilan</h4>
<p>Au final, le Ghost Whippet laisse un gout mitig&eacute; et une certaine frustration. Nous n\'avons objectivement pas niveau technique suffisant pour exploiter un tel foil en toute qui&eacute;tude, mais on sent un gros potentiel.</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2018-07-08 07:56:37',
'updated_at' => '2020-04-03 17:00:59',
),
17 => 
array (
'id' => 19,
'device_id' => 28,
'user_id' => 1,
'title' => 'La machine',
'body' => '<h4>Montage</h4>
<p>Comme avec les autres AFS (W85 et W95), le W105 a n&eacute;cessit&eacute; un pon&ccedil;age assez important pour pouvoir &ecirc;tre ins&eacute;r&eacute; dans le boitier. Cela fait partie des foils o&ugrave; il ne faudra pas n&eacute;gliger cette &eacute;tape de pr&eacute;paration car vous n\'avez aucune chance de naviguer si vous n\'avez pas anticip&eacute; cette op&eacute;ration avant d\'arriver &agrave; la plage. Dans notre cas, il a fallu enlever pas mal de mati&egrave;re sur les 2 faces lat&eacute;rales, mais aussi sur les cong&eacute;s dont le rayon &eacute;tait bien trop petit au regard de ceux du boitier. En plus de cela, sur nos 2 flotteurs de test, il a fallu ovaliser les trous des vis d\'aileron car aucune ne tombait en face des inserts du talon deep tuttle ... bref : une pr&eacute;paration &agrave; anticiper tranquillement &agrave; la maison, ou &agrave; confier &agrave; votre dealer pr&eacute;f&eacute;r&eacute; si vous voulez &eacute;viter de gal&eacute;rer.</p>
<p><img src="/storage/photos/1/2018-06/afs-wind-105-2018-M82OmOGvxA.jpg" /></p>
<h4>Sur l\'eau</h4>
<p>Une partie des sensations est assez comparable &agrave; ce que nous avons not&eacute; sur les AFS W85 et W95. Nous nous attarderons donc ici essentiellement sur les diff&eacute;rences que l\'on note sur le Wind105.</p>
<p>Au d&eacute;collage, le W105 semble notoirement plus nerveux que ses 2 petits fr&egrave;res, m&ecirc;me si cela reste en de&ccedil;a de nombreux autres foils du moment. D\'autre part, le m&egrave;tre de mat sous l\'eau n&eacute;cessite pas mal de puissance et il est donc illusoir de vouloir utiliser le W105 avec des petites voiles dans le light. C\'est un foil puissant, et il faudra logiquement l\'associer &agrave; des &eacute;l&eacute;ments coh&eacute;rents (voile puissante et flotteur large), ce qui ne pose pas de probl&egrave;me compte tenu du contr&ocirc;le qui en r&eacute;sulte, mais ces conduit &agrave; une autre fa&ccedil;on de naviguer et &agrave; d\'autres sensations. Avec une 7.8 dynamique (RS:Flight dans mon cas), le d&eacute;collage intervient d&egrave;s 9 knt de vent environ.</p>
<p>Une fois en l\'air, on retrouve les caract&eacute;ristiques propres aux AFS, mais cette fois d&eacute;multipli&eacute;es. Dans les conditions light, le 105 n\'est pas le plus &agrave; l\'aise que nous ayions connus, toutefois avec des voiles de tailles raisonnables (7.8 max lors de ce test). Il est possible qu\'avec des voiles de course de 9m, les choses soient diff&eacute;rentes.</p>
<p>La stabilit&eacute; transversale est tout simplement impressionnante, en particulier lorsque l\'on ne navigue pas sur les 15 derniers cm du mat. Quand on pousse sur les pieds, on a un v&eacute;ritable mur sur lequel on peu s\'appuyer sans limites. Toujours concernant l\'axe transversal, le 105 est plus facile &agrave; emmener &agrave; la contre gite que ses 2 petits fr&egrave;res, &agrave; condition d\'utiliser une planche bien large sous le pied arri&egrave;re. Sinon, on a vite la jambe qui fume et les chevilles qui ramassent. Pour le dire autrement, privil&eacute;giez une planche d&eacute;di&eacute;e foil avec le 105, avec au moins 75cm &agrave; 30 (la RF 81 Exocet est un minimum).</p>
<p>En longitudinal, l\'AFS 105 m\'a donn&eacute; l\'impression d\'&ecirc;tre plus r&eacute;actif que les W85 et W95, en particulier lorsque l\'on veut corriger l\'assiette. En plus de cela, avec 1m de mat, on a une marge impressionnante avant de sortir de l\'eau ou de toucher ! Typiquement, la Exo RF nous a parue bien plus adapt&eacute;e &agrave; ce foil que la JP 135. Lorsque l\'association est bien faite, on a un gros contr&ocirc;le, avec un ensemble qui demande de l\'engagement au pilote et de l\'anticipation. Ici, pas question de naviguer dilettante ou de chercher de la maniabilit&eacute;: &ccedil;a acc&eacute;l&egrave;re en permanence et il faut g&eacute;rer car ce n\'est pas le foil qui le fera &agrave; v&ocirc;tre place. Pour une navigation d&eacute;tendue, on passera plut&ocirc;t au 95 ou au 85 qui sont plus adapt&eacute;s.</p>
<p>L\'autre &eacute;l&eacute;ment marquant avec ce foil est la sensation de propret&eacute; du d&eacute;placement. Il partage ceci avec le Starboard (dans une proportion un peu plus faible sur ce dernier) et le RSX. C\'est assez difficile &agrave; expliquer, mais en gros c\'est l\'inverse d\'un foil qui se dandine. L&agrave;, tout est parfaitement dans l\'axe et rien ne bouge. Il n\'y a aucune perturbations autour de ce neutre. On a imm&eacute;diatement l\'impression que rien ne peut arriver, tant que l\'on g&egrave;re les acc&eacute;l&eacute;rations de la b&ecirc;te.</p>
<p>En terme de glisse, l\'impression n\'est pas incroyable de prime abord, mais GPS &agrave; l\'appui, &ccedil;a va vite. Apr&egrave;s quelques bords, on prend confiance, et on s\'aper&ccedil;oit vite que la glisse vient avec la hauteur de navigation. Fort logiquement, 1m de mat dans l\'eau, &ccedil;a traine un peu. Par contre, lorsque l\'on arrive &agrave; naviguer sur les 30 derniers cm, la glisse devient tr&egrave;s tr&egrave;s bonne. Il faut du coeur, et bien maitriser l\'appui sur la voile pour &eacute;viter de faire le yoyo &agrave; cette hauteur, mais m&ecirc;me &agrave; 70cm de haut, aucun dandinement lat&eacute;ral. Dans ces conditions le GPS monte tr&egrave;s vite dans les tours. D\'ailleurs, j\'ai assez facilement d&eacute;pass&eacute; les 25 knt au travers, chose que je n\'avais jamais effectu&eacute; avec l\'autres foils. On y arrive en abattant avec certains foils mais il faut souvent g&eacute;rer des situations o&ugrave; le contr&ocirc;le est un peu pr&eacute;caire. L&agrave;, on arrive &agrave; le faire avec un niveau de contr&ocirc;le inconnu jusqu\'alors. Pour celui qui accepte de se mettre dans le rouge et qui ose abattre &agrave; ces vitesses, j\'imagine que les 30 knt sont largement accessibles avec ce type d\'engin ;) ... bon, je ne veux pas tester tout de suite les boites &agrave; 28 knt &agrave; 70cm de haut, alors je m\'abstiendrai.</p>
<h4>Bilan</h4>
<p>Vous l\'avez compris, L\'AFS Wind 105 est un b&ecirc;te de course puissante et efficace. C\'est tout l\'inverse d\'un foil maniable et joueur. Au contraire, &ccedil;a acc&eacute;l&egrave;re en permanence et malgr&eacute; un contr&ocirc;le hors du commun, l\'AFS 105 demande au pilote de l\'engagement en permanence. Le r&eacute;sultat est &agrave; la hauteur avec des vitesses moyennes tr&egrave;s &eacute;lev&eacute;es, mais la n&eacute;cessit&eacute; de l\'associer avec des &eacute;l&eacute;ments coh&eacute;rents (planche tr&egrave;s large, grosse voile etc.). Un vrai parti pris avec tr&egrave;s peu de compromis, qui trouvera facilement ses adeptes !</p>',
'test_equipment' => 'Exocet RF 81 et JP Hydrofoil 135 / Gréement : RS:One Convertible 7,0',
'test_duration' => 3,
'test_conditions' => '12-20 knt Ouest',
'test_place' => 'La Ciotat',
'created_at' => '2018-06-02 06:35:28',
'updated_at' => '2020-04-03 17:01:39',
),
18 => 
array (
'id' => 20,
'device_id' => 29,
'user_id' => 1,
'title' => 'Le plus beau foil alu',
'body' => '<p>Apr&egrave;s avoir d&eacute;ball&eacute; un si bel objet, nous &eacute;tions impatient de tester le dernier petit nouveau de chez AlpineFoil.</p>
<h3>Montage et association</h3>
<p>L\'installation du A1 sur nos planches de test a &eacute;t&eacute; une formalit&eacute;. Grace au talon parfaitement calibr&eacute; du mat aluminium, &agrave; la mini platine, et aux inserts pivotants, aux larges d&eacute;gagements pour les vis, le montage est super rapide ... m&ecirc;me dans des conditions pr&eacute;caires de pr&eacute;paration. Avec le mat carbone, c\'est la m&ecirc;me chose : aucun pon&ccedil;age n&eacute;cessaire, et la mini platine carbone permet au foil d\'&ecirc;tre parfaitement cal&eacute; dans le boitier.</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-Ddj6LHiWc9.jpg" /></p>
<p>Nos tests se sont d&eacute;roul&eacute;s</p>
<ul>
<li>dans du medium, avec un plan d\'eau tr&egrave;s form&eacute;, avec l\'aile ULW</li>
<li>sur du plat, avec l\'aile LIFT et la ULW</li>
<li>sur du plat + clapot vent faible avec la ULW</li>
<li>sur du clapot vent soutenu avec la LIFT</li>
</ul>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-ZTaLSHG5k1.jpg" /></p>
<p>Nous avons utilis&eacute; une JP hydrofoil 135 et une Exocet RF 81Carbone.</p>
<p>&nbsp;</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-6hXS7kwXs8.jpg" /></p>
<p>En terme de gr&eacute;ement, j\'ai utilis&eacute; &agrave; la fois une voile &agrave; camber (NeilPryde V8 en 6.7m) et une voile sans cam (Xo Sail Vega 5.4 ... au sujet de laquelle je ferai d\'ailleurs un post sp&eacute;cifique)</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-hGlKSbMoGJ.jpg" /></p>
<h3>R&eacute;glage</h3>
<p>Le A1 est fourni avec deux jeux de cales : un pour l\'aile avant, un pour le stab. Tous les tests ont &eacute;t&eacute; r&eacute;alis&eacute;s avec la cale de 0 sur l\'aile, et avec les cales 0.7 et 0 sur le stab. Avec nos planches d&eacute;di&eacute;es, la cale de 0.7 est utilisable dans le light, mais je suis tr&egrave;s vite repass&eacute; &agrave; la 0 pour ne pas &ecirc;tre en surpuissance.</p>
<p>Les autres cales seront probablement int&eacute;ressantes sur les flotteurs plus longs et plus lourds.</p>
<h3>D&eacute;collage et &eacute;quilibre longitudinal</h3>
<p>Mont&eacute; sur notre JP 135, l\'&eacute;quilibre est bon et le d&eacute;collage tr&egrave;s pr&eacute;coce. De ce c&ocirc;t&eacute;, on s\'approche des meilleurs et c\'est assur&eacute;ment le foil aluminium qui d&eacute;cole le plus t&ocirc;t parmi tout ce que nous avons test&eacute;. Qui plus est, ce d&eacute;collage pr&eacute;coce ne se fait pas trop au d&eacute;triment de la glisse qui est subjectivement de bon niveau.</p>
<p>Sur la RF81, il faut un peu plus de puissance, mais gr&acirc;ce aux bon minis des A1, le d&eacute;collage ne pose aucun probl&egrave;me, m&ecirc;me avec ma petite 5.4. On notera que ceci est aussi d&ucirc; &agrave; la JP qui a naturelleemnt beaucoup de glisse naturelle pour une planche de 85cm. C&ocirc;t&eacute; &eacute;quilibre, on est un peu plus pied arri&egrave;re qu\'avec la JP. Dans le light, il faudra un peu plus t&ocirc;t utiliser la cale de stab de 0.7&deg; dans cette configuration.</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-ghpTs7cbL7.jpg" /></p>
<h3>Stabilit&eacute; et contr&ocirc;le</h3>
<p>C&ocirc;t&eacute; stabilit&eacute; lat&eacute;rale, le A1 offre une prestation de bon niveau. La contre g&icirc;te est accessible assez facilement : un peu moins facilement qu\'avec le Starboard Alu, mais un poil plus facilement qu\'avec le LK1, et beaucoup plus facilement qu\'avec les AFS. La stabilit&eacute; proche du neutre (planche &agrave; l\'horizontale) est plut&ocirc;t bonne ... la meilleure des foils alu, &agrave; &eacute;galit&eacute; avec le Starboard, donc l&eacute;g&egrave;rement devant le Zeeko et le NP, et tr&egrave;s largement devant le H10 Evo. Sans faute donc sur ce point, m&ecirc;me si, encore une fois, on reste en de&ccedil;a de nombreux foils carbone.</p>
<p>Sur l\'axe longitudinal, le A1 est assez facile &agrave; g&eacute;rer, mais n\'atteint pas la stabilit&eacute; d\'un Starboard race ou d\'un AFS. On a quelque chose de similaire &agrave; un LK1, un Zeeko ou un Starboard GT, donc plus stable qu\'un NP alu, S&eacute;lect Profoil, H10 ou Horue Vini. Sur ce plan longitudinal, notons que lors des actions &agrave; contrer, les r&eacute;actions sont assez nerveuses et imposent de la douceur pour le pas faire le yoyo. On ressent comme une &eacute;lasticit&eacute; (peut &ecirc;tre dans le stab) qui donne des r&eacute;actions moins faciles &agrave; g&eacute;rer qu\'avec certains autres foils.</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-MGneVxKrRl.jpg" /></p>
<h3>Cap</h3>
<p>Le A1 , en particulier avec son aile ULW est plut&ocirc;t puissant, avec des appuis francs au pr&egrave;s. Le mat en aluminium est particuli&egrave;rement rigide et cela se sent tr&egrave;s bien &agrave; cette allure. Cela lui permet d\'offrir un rapport cap / vitesse tr&egrave;s confortable m&ecirc;me dans des conditions de vent assez l&eacute;g&egrave;res. Subjectivement, je dirai que c\'est le plus efficace que j\'ai eu l\'occasion d\'essayer dans la cat&eacute;gorie foil aluminium sur ce point.</p>
<h3>Glisse</h3>
<p>Avec l\'aile ULW, et dans des conditions light, le A1 offre des sensations de glisse de bon niveau. Pour un foil en aluminium, c\'est clairement une premi&egrave;re ! Dans le vent soutenu, il faudra une aile plus petite pour juger.</p>
<p>Avec l\'aile LIFT, on d&eacute;couvre un autre visage du A1 avec un foil qui reste en vol m&ecirc;me &agrave; basse vitesse, et plafone &agrave; 20-21 knt : une fa&ccedil;on tr&egrave;s ludique de se promener sur le plan d\'eau en cas de vent fort. Bien s&ucirc;r, la glisse est bien moins efficace dans cette configuration mais on ne se fait pas peur.</p>
<p>Nous attendons avec impatience l\'aile windfoil de vent soutenu pour &eacute;valuer les possibilit&eacute; du A1 dans le vent fort.</p>
<h3>Comportement g&eacute;n&eacute;ral</h3>
<p>Dans les conditions houleuse, les 85cm de mat ultra-rigide sont appr&eacute;ciables, et c\'est un point sur lequel le A1 fait mieux que beaucoup d\'autres foils en aluminium. La s&eacute;curit&eacute; offerte par le mat long compense en partie les sensations de rebond que l\'on a sur le plan longitudinal. Si on le compare au Starboard GT Alu (l\'une des r&eacute;f&eacute;rences &eacute;videntes), on fait un peu plus le yoyo avec la A1, mais on a plus de marge. Sur les board abattus, le c&ocirc;t&eacute; tr&egrave;s sain du mat, et la glisse permettent de laisser le A1 prendre par mal de vitesse. Un ensemble fuselage / stab plus rigide permettrait sans doute de franchir encore un step dans le contr&ocirc;le en conditions muscl&eacute;es.</p>
<p>Lorsque l\'on navigue &agrave; la contre g&icirc;te, le A1 est un foil puissant et assez cal&eacute;. Lorsqu\'on le met &agrave; plat, et surtout si il y a du clapot, on ressent la souplesse de la grande aile ULW ... un peu comme avec un petit amortisseur sous les pieds. C\'est une sensation assez amusante car elle ne s\'accompagne d\'aucune perte de contr&ocirc;le. De la m&ecirc;me fa&ccedil;on, cette relative souplesse et nervosit&eacute; de l\'aile et du stab donnent au A1 une bonne efficacit&eacute; au pumping sur le mat, entre autre pour passer les moles.</p>
<p>Au del&agrave; de 20 knt, un sifflement assez strident apparait. D&egrave;s que l\'on repasse sous les 20 knt, le bruit disparait instantan&eacute;ment. En passant au mat carbone, ou a une autre aile, le sifflement est moins amplifi&eacute; mais se produit &eacute;galement &agrave; la m&ecirc;me vitesse. Ceci monte que son origine est &agrave; rechercher dans le stab qui est assez souple. Gageons donc que c\'est un point qui sera assez facile &agrave; corriger.</p>
<h3>Mats aluminium ou carbone</h3>
<p>Le A1 &eacute;tant disponible avec 2 mats de taille quasi identiques, mais utilisant 2 technologies diff&eacute;rentes, on peut se demander lequel choisir. Comme dans le cas de Starboard, le comparaison est d\'autant plus int&eacute;ressante que tous les autres &eacute;l&eacute;ments (fuselage, aile, stab) sont identiques entre les 2 versions.</p>
<p>Sur l\'eau, le mat aluminium est tellement raide, que la diff&eacute;rence de rigidit&eacute; entre les deux versions n\'est pas &eacute;norme. Le caract&egrave;re reste identique et les yeux ferm&eacute;s, on reconna&icirc;t parfaitement le A1.</p>
<p>Le mat carbone est probablement plus raide dans l\'absolu mais cela ne saute pas aux yeux. C\'est plut&ocirc;t la nervosit&eacute; de ce dernier que l\'on ressent, et on va en tirer parti au pumping sur le mat, donc dans les capacit&eacute;s au d&eacute;collage dans le vent tr&egrave;s l&eacute;ger. Subjectivement, la glisse est un peu meilleure &eacute;galement, mais j\'attends des conditions de vent plus r&eacute;guli&egrave;res pour pouvoir faire une comparaison GPS &agrave; l\'appui.</p>
<p>Le poids du mat carbone est nettement plus faible que la version alu. M&ecirc;me si cela n\'a pas d\'influence sur les perf, c\'est un &eacute;l&eacute;ments qui peut faire pencher le choix ... pour ceux qui ont un portage un peu long lors de la mise &agrave; l\'eau.</p>
<p>Un autre &eacute;l&eacute;ment est &agrave; prendre en compte : ne nous le cachons pas, nous investissons des sommes importantes dans nos joujous, et le look de ce mat carbone est juste &agrave; tomber. Entre la finition, la magnifique platine en carbone, et un talon parfaitement ajust&eacute;, c\'est autant un plaisir des yeux qu\'&agrave; l\'utilisation. Notez &eacute;galement que la version carbone est founie avec un jeu aile / stab dont la finition est plus pouss&eacute;e que sur la version aluminium.</p>
<p>A la vue de ces diff&eacute;rences, on vous laisse juger si la version carbone est faite pour vous, ou si vous pr&eacute;f&eacute;rez choisir la version alu .. d&eacute;j&agrave; tr&egrave;s r&eacute;ussie. Ce qui est sur, c\'est que le temps pass&eacute; et l\'attention port&eacute;e par Alpinefoil sur la production de la version carbone vaut largement les 580eur de delta.</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-wqi2jOCwyu.jpg" /></p>
<h3>Entretien</h3>
<p>Je reviens rapidement sur l\'anode dont est &eacute;quip&eacute; le A1. Nous avons volontairement laiss&eacute; mont&eacute; le foil plusieurs jours en le rin&ccedil;ant juste rapidement apr&egrave;s chaque navigation. L&agrave; ou n\'importe quel foils NeilPryde Alu serait irr&eacute;m&eacute;diablement soud&eacute; (nous en avons 2 qui sont ind&eacute;montables), nous n\'avons pas observ&eacute; la moindre trace de corrosion sur le A1. C\'est un point particuli&egrave;rement int&eacute;ressant pour les pratiquants un peu moins attentionn&eacute;s, ou juste plus press&eacute;s, m&ecirc;me nous conseillons tout de m&ecirc;me de la d&eacute;monter tr&egrave;s r&eacute;guli&egrave;rement.</p>
<h3>Bilan</h3>
<p>Le A1 place la barre tr&egrave;s haut dans le match des foils aluminium. Dans sa version carbone, ils est tr&egrave;s bien positionn&eacute; par son ratio finition / prix. M&ecirc;me si il est encore perfectible en terme de contr&ocirc;le, il se place d\'embl&eacute;e sur le podium en premi&egrave;re ou 2e place en fonction des crit&egrave;res retenus dans la cat&eacute;gorie aluminium. Ses prestations de haut niveau, son &eacute;volutivit&eacute;, et sa finition de toute beaut&eacute; ne peuvent que donner envie de craquer, et font rapidement oublier son prix l&eacute;g&egrave;rement sup&eacute;rieur dans cette famille, largement justifi&eacute;. Soulignons aussi encore une fois &eacute;galement que le foil Alpine est enti&egrave;rement fabriqu&eacute; en France, et que c\'est m&ecirc;me unique pour un foil en aluminium.</p>
<p><img src="/storage/photos/1/2018-05/alpinefoil-a1-alu-2018-ulw-2018-hD3AaXdigx.jpg" /></p>',
'test_equipment' => 'Exocet RF81 et JP hydrofoil 135 / RS One 7.0',
'test_duration' => 3,
'test_conditions' => 'Un peu de tout',
'test_place' => 'La Ciotat (vent médium)',
'created_at' => '2018-05-28 19:42:01',
'updated_at' => '2020-04-03 17:02:08',
),
19 => 
array (
'id' => 21,
'device_id' => 30,
'user_id' => 1,
'title' => 'Nerveux !',
'body' => '<h3>D&eacute;collage</h3>
<p>Le transport foil board est assez facile car le foil est tr&egrave;s l&eacute;ger &hellip; si ce n&rsquo;est l&rsquo;un des plus l&eacute;ger &agrave; ce jour (2.7 kg !)</p>
<p>La mise &agrave; l&rsquo;eau n&eacute;cessite un peu d&rsquo;eau avec le mat de 92cm, mais on est dans la norme actuelle.</p>
<p>D&egrave;s les premi&egrave;res ris&eacute;es, la planche part au planning et le foil d&eacute;colle imm&eacute;diatement, avec tout de suite une tr&egrave;s belle sensation de glisse. Compar&eacute; aux autres foils du march&eacute;, le LK1 fait clairement partie des foils qui d&eacute;collent tr&egrave;s t&ocirc;t, m&ecirc;me avec l&rsquo;aile de 850, qui n&rsquo;est pas la plus grosse possible.</p>
<p>En statique (sans pomper), il faut un peu d&rsquo;air quand m&ecirc;me, mais associ&eacute; avec une board qui a de la glisse (comme la SB122), le d&eacute;collage intervient vite. Si on pompe, et notamment avec les pieds, le d&eacute;collage est rapide car le foil est tr&egrave;s nerveux et r&eacute;pond tr&egrave;s bien au pumping sur le mat. On verra plus tard que cela a &eacute;galement une grosse importance dans les trous d&rsquo;air.</p>
<p><img src="/storage/photos/1/2018-04/lokefoil-lk1-850-2020-RNzqjvsA7G.jpg" /></p>
<h3>Stabilit&eacute;</h3>
<p>Une fois en l&rsquo;air, on constate une stabilit&eacute; longitudinale plut&ocirc;t bonne.</p>
<p>On est un peu en dessous des plus stables en lonitudinal (AFS, Loke Envol), dans le m&ecirc;me ordre que le Starboard GT, et au dessus de beaucoup d&rsquo;autres (s&eacute;lect, vini, NP alu, Zeeko, etc.). Le maintient d&rsquo;une altitude &agrave; peu pr&egrave;s constante est du coup assez ais&eacute;, sauf en cas de variation de vent.</p>
<p>En terme d&rsquo;&eacute;quilibre lat&eacute;ral, le foil est tr&egrave;s sein m&ecirc;me si on a un ressenti tr&egrave;s diff&eacute;rent qu\'avec les AFS et autres Starboard. A priori, le mat est rigide &agrave; la mesure, mais on ressent plus de mouvement qu\'avec les 2 autres. C\'est probablement li&eacute; au fait que le Loke a un retour apr&egrave;s d&eacute;formation plus rapide (nervosit&eacute;), que l\'on aurait pu associ&eacute; intellectuellement &agrave; de la souplesse, sans que &ccedil;a en soit r&eacute;ellement. Sur cet axe, il n&rsquo;est pas bloqu&eacute;, et laisse toute latitude pour se mettre &agrave; la contre g&icirc;te.</p>
<h3>Comportement</h3>
<p>En terme de sensations, le LK1 est tr&egrave;s diff&eacute;rent de l&rsquo;Envol. A ce titre, ce n&rsquo;est absolument pas une &eacute;volution de ce dernier mais bien un tout nouveau foil.</p>
<p>Le point le plus &eacute;vident est la glisse qui est tellement sup&eacute;rieure &agrave; celle de l&rsquo;Envol. C&rsquo;est sensible &agrave; toutes les allures, mais &ccedil;a saute aux yeux dans le light. On peut, un peu comme avec le S&eacute;lect, ressentir toutes les micro-acc&eacute;l&eacute;rations dues aux changements de direction du vent ou aux petites ris&eacute;es.</p>
<p>L&rsquo;autre &eacute;volution marquante est la nervosit&eacute; du foil : on ressent moins la raideur, car il a beaucoup de dynamique et on peut en jouer pour pomper au d&eacute;collage ou dans les molles. Sur ce point, on retrouve un peu certaines sensations que l\'on avait sur le Horue dans le vent tr&egrave;s l&eacute;ger. Pour autant, cette nervosit&eacute;, bien ma&icirc;tris&eacute;e, n&rsquo;est pas g&ecirc;nante m&ecirc;me quand le vent monte contrairement &agrave; ce que l&rsquo;on observait sur des foils comme les aeromod 2017, s&eacute;lect 2017 ou autre Vini 2017 (ces foils sont tous en train d\'&eacute;voluer vers plus de rigidit&eacute;). La force de Loke a visiblement &eacute;t&eacute; de contr&ocirc;ler parfaitement et de doser cette nervosit&eacute;. Je suppose en particulier qu\'ils ont bien veill&eacute; &agrave; ne pas avoir de torsion dans le bas du mat et le fuselage (ce qui est plus facile &agrave; r&eacute;aliser sur un foil non d&eacute;montable). Cette nervosit&eacute; ma&icirc;tris&eacute;e participe &eacute;galement &agrave; une sensation d&rsquo;extr&ecirc;me sensibilit&eacute; : avec le LK1, on ressent tout. Si on est un peu fin en navigation, on va pouvoir en profiter et en jouer.</p>
<p>Enfin, le LK1 r&egrave;gle d&eacute;finitivement l&rsquo;un des d&eacute;fauts r&eacute;currents du loke Evol : le d&eacute;rochement du profil de mat par ventilation. Cette fois, on a un bord d&rsquo;attaque fin, et on n&rsquo;a aucune fois &eacute;t&eacute; victime de ces d&eacute;crochements brutaux qui se produisaient autour des 20knt, et nous ont valut quelques belles gamelles avec l\'Envol.</p>
<h3>Dans le vent</h3>
<p>Dans des conditions de vent plus soutenu, ou de plan d&rsquo;eau plus form&eacute;, le Loke reste sain m&ecirc;me si la nervosit&eacute; du mat peut jouer quelques tours. Il faut donc &ecirc;tre un peu plus vigilant que la moyenne sur la conduite et &eacute;viter d&rsquo;&ecirc;tre brusque. Dans les conditions les plus muscl&eacute;es, on est un peu moins serein qu&rsquo;avec le Starboard ou l&rsquo;AFS. Pour ne pas se mettre en difficult&eacute; il faudra, un peu plus vite que la moyenne, passer &agrave; une aile plus petite ou / et un gr&eacute;ement de surface moindre.</p>
<h3>Histoire de taille</h3>
<p>La grande question qui anime les discussions concerne la taille des ailes. Avec la disponibilit&eacute; d&rsquo;une aile de 1200, beaucoup fantasment sur un d&eacute;collage ultra t&ocirc;t &hellip; ou tout au moins bien plus t&ocirc;t que la moyenne. Nous nous devions de faire un point pr&eacute;cis sur la question pour que personne ne se fasse de fausses id&eacute;es.</p>
<p>Apr&egrave;s plusieurs sessions de test, nous pouvons confirmer</p>
<ul>
<li>qu&rsquo;il est possible de rester en vol avec la 1200 &agrave; une vitesse inf&eacute;rieur &agrave; la 850</li>
<li>que le vol avec la 1200 est plus stable qu&rsquo;avec la 850</li>
<li>que le d&eacute;collage &lsquo;statique&rsquo; (sans pomper) intervient plus t&ocirc;t avec la 1200 qu&rsquo;avec la 850</li>
<li>que le d&eacute;collage &lsquo;dynamique&rsquo; (en pompant) est quasi identique entre la 850 et la 1200</li>
<li>que la 1200 est bien plus rock &amp; roll &agrave; g&eacute;rer dans les rafales que la 850</li>
</ul>
<p>Alors non, tout le monde ne gagnera pas 2 knt de vent avec la 1200 pour d&eacute;coller. Ce n&rsquo;est pas aussi syst&eacute;matique, et plus votre niveau progressera, moins vous y gagnerez.</p>
<p>Pour un d&eacute;butant ou un pratiquant qui ne souhaite pas se fatiguer en pompant, la 1200 apporte un plus dans le light en apportant du confort et de la facilit&eacute;. Elle autorise et favorise un vol moins rapide qui rassure. C\'est une option parfaite pour se balader &agrave; petite vitesse en mode freeride ... surtout lorsque le vent est l&eacute;ger et r&eacute;gulier. Dans les vents tr&egrave;s irr&eacute;guliers comme on en rencontre ici, il faut &ecirc;tre beaucoup plus vigilant et on a &eacute;t&eacute; quelques fois &agrave; la faute sans le vouloir.</p>
<p>Pour un pratiquant dynamique et de bon niveau, l&rsquo;apport de la 1200 est plus modeste &agrave; mon gout, car elle plus compliqu&eacute; &agrave; g&eacute;rer que la 850 dans les vents irr&eacute;guliers. Il faut aussi souligner que la glisse n&rsquo;a rien &agrave; voir entre les 2 ailes, la train&eacute;e de la 850 &eacute;tant largement plus faible.</p>
<p>Si on compare avec l&rsquo;Envol, la 850 est plus petite que l&rsquo;aile de ce dernier, mais avec un peu de niveau technique, la nervosit&eacute; du foil et sa glisse permettent de compenser tr&egrave;s largement la moindre portance pour partir plus t&ocirc;t au final. Bien s&ucirc;r, on y gagne une glisse et une allonge incomparable due &agrave; la tr&egrave;s faible train&eacute;e.</p>
<p>La petite aile, quand &agrave; elle, est clairement orient&eacute;e vent soutenu et vitesse. Pour un gabarit moyen, elle est utilisable d&egrave;s 15 knt. Nous n&rsquo;avons pas encore jou&eacute; &agrave; mesurer la vitesse obtenue, mais aux sensations, &ccedil;a glisse tr&egrave;s fort !</p>
<h3>Question d&rsquo;association</h3>
<p>Comme avec le Envol, le LK1 a un point de pouss&eacute; plut&ocirc;t assez avanc&eacute; (et c\'est encore plus le cas avec le mod&egrave;le 2020). Il se mariera donc bien avec les planches de slalom traditionnelles, mais plus difficilement avec des planches comme la JP Hydrofoil qui a &eacute;t&eacute; con&ccedil;ue pour les foils NeilPryde.</p>
<p>L&rsquo;association avec l&rsquo;exocet RF ne nous a pas du tout s&eacute;duite ... il va falloir se pencher sur la question en terme de r&eacute;glage (positions straps, cales). Par contre, l&rsquo;association avec la Elix fonctionne bien et le LK1 fait merveille sur les flotteurs starboard, donc les straps sont plut&ocirc;t avanc&eacute;s (comme la Foil 122 ou la tabou Airide 145 par exemple).</p>
<p>Vous l&rsquo;avez compris, le LK1 est un foil plut&ocirc;t fin et joueur &hellip; moins bloqu&eacute; que les AFS et Starboard. Il se mariera donc tr&egrave;s bien avec des gr&eacute;ements un peu moins puissants et encombrants. Il conviendra aussi bien plus aux pratiquants pas trop &laquo; bourrain &raquo; qui aiment avoir un foil nerveux et vif sous les pieds. Pour ceux qui pr&eacute;f&egrave;rent un foil qui gomme les sensations et offre un max de contr&ocirc;le sans rien sentie, passez votre chemin.&nbsp;</p>
<p><img src="/storage/photos/1/2018-04/lokefoil-lk1-850-2020-4rRu3lon7h.jpg" /></p>
<h3>Bilan</h3>
<p>Au final, Loke revient avec le LK1 dans la course des foils au gout du jour, dans la cat&eacute;gorie foils carbone. Au sein du trio de t&ecirc;te (en parlant d&rsquo;agr&eacute;ment et pas forc&eacute;ment de performance pure), le Loke est celui qui procure le plus de glisse et de nerf dans le light. C\'est vraiment un foil "plaisir". M&ecirc;me si parmi les 3, c&rsquo;est celui avec lequel on est le moins serein dans les conditions un peu plus muscl&eacute;es, le LK1 montre qu&rsquo;il est possible d&rsquo;apporter de la nervosit&eacute; (pas n\'importe comment) sans se mettre en d&eacute;faut dans le vent (comme on l&rsquo;a v&eacute;cu avec les foils trop souples). Par sa nervosit&eacute;, on le conseillera plus aux pratiquants capables d&rsquo;avoir un peu de finesse en navigation. Les &laquo; bourrains &raquo; qui cherchent la puissance en b&acirc;chant du gros (ils se reconna&icirc;tront) lui pr&eacute;f&egrave;reront des foils plus cal&eacute;s et puissants.</p>
<p>Comme d\'habitude, il faudra soigner les associations avec le flotteur pour garder un ensemble &eacute;quilibr&eacute; et facile &agrave; naviguer. Ici, on est sur un foil plut&ocirc;t "pied avant".</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
'test_equipment' => 'Flotteurs Exocet RF 81, Starboard Foil122, Elix F1X, tabou Airide 81',
'test_duration' => 8,
'test_conditions' => 'Un peu de tout',
'test_place' => 'La ciotat / St Laurent du var',
'created_at' => '2018-04-25 05:31:41',
'updated_at' => '2020-03-26 22:41:57',
),
20 => 
array (
'id' => 22,
'device_id' => 32,
'user_id' => 1,
'title' => 'Une valeur sûre pour débuter',
'body' => '<h4>Montage</h4>
<p><img src="/storage/photos/1/2018-04/afs-wind-85-2019-M0FqIgkazz.jpg" /></p>
<p>Contrairement &agrave; l&rsquo;AFS2, la nouvelle gamme AFS utilise une mini-platine qui permet de s&rsquo;assurer que le foil est bien positionn&eacute; dans le boitier, et surtout de la m&ecirc;me fa&ccedil;on d&rsquo;une nav&rsquo; &agrave; l&rsquo;autre. Tous les assemblages sont en vis Inox Torx T30. Le tournevis est d&rsquo;ailleurs fourni (tr&egrave;s bonne initiative). Les assemblages sont impeccables, et la finition plut&ocirc;t bonne (ponc&eacute;e sur le 95 et le 105, brillante sortie de moule sur le 85).</p>
<p>Au passage, il semblerait que la finition ponc&eacute;e offre une meilleure glisse que la finition brillante \'sortie de moule\'. Si vous avez l\'intention d\'acqu&eacute;rir un Wind 85 et avez 2 bonnes heures devant vous, on vous conseille de sortir l\'huile de coude, et de poncer l\'int&eacute;gralit&eacute; du foil au papier &agrave; l\'eau.</p>
<h4>Envol</h4>
<p>L&rsquo;AFS W85 demande un peu plus de vitesse que la moyenne de nos foils r&eacute;f&eacute;rence (LK1 et Starboard) pour d&eacute;coller. Par contre, le d&eacute;collage est plus progressif et surprendra moins les moins exp&eacute;riment&eacute;s. Si on ajoute une sensation imm&eacute;diate d&rsquo;extr&ecirc;me stabilit&eacute;, on peut dire que les AFS W95 et W85 font certainement partie des foils les plus faciles &agrave; prendre en main du march&eacute;.</p>
<p>Une fois en l&rsquo;air, l&rsquo;acc&eacute;l&eacute;ration est elle aussi progressive ... voir m&ecirc;me douce sur le 85 avec sa grosse aile. C\'est tr&egrave;s rassuranten particulier pour un d&eacute;butant.</p>
<p>Pour les adeptes de la navigation dans le tr&egrave;s light (ou les plus lourds), l\'AFS W85 peut sembler manquer de minis. Gracve &agrave; la robustesse du mat et sa rigidit&eacute;, on pourra compenser en toilant un peu plus qu\'avec d\'autres foils.&nbsp;</p>
<p>Dans tous les cas, il restera un foil sage et il ne faudra pas s&rsquo;attendre &agrave; la nervosit&eacute; ou l&rsquo;efficacit&eacute; au pumping d&rsquo;un LK1, Horue XWL ou S&eacute;lect Profoil. C&rsquo;est un choix assum&eacute; qui permet en contre partie une facilit&eacute; de navigation plus marqu&eacute;e.</p>
<p><img src="/storage/photos/1/2018-04/afs-wind-85-2019-TZNNHsW0fJ.jpg" /></p>
<h4>Stabilit&eacute;</h4>
<p>Les AFS sont des mod&egrave;les de stabilit&eacute; longitudinale. Un peu &agrave; l&rsquo;image du Loke Envol, on pourrait presque pique-niquer sur la planche tellement on a peu &agrave; se soucier de cet axe de mouvement. Bien s&ucirc;r, c&rsquo;est une image, mais l&rsquo;inertie sur cet axe tranche avec d&rsquo;autres foils, &agrave; l&rsquo;image du F4 o&ugrave; il faut en permanence corriger. Comme sur l&rsquo;AFS2, cette stabilit&eacute; devient m&ecirc;me presque perturbante lorsqu&rsquo;on associe l&rsquo;AFS avec un flotteur long ou lourd (avec de l\'inertie). Il faut alors carr&eacute;ment anticiper les corrections pour qu&rsquo;elles donnent leur effet avant que l&rsquo;on ne revienne toucher ou au contraire sortir de l&rsquo;eau.</p>
<p>Sur l&rsquo;axe lat&eacute;ral, c&rsquo;est un peu pareil : les AFS font partie des plus stables et on n&rsquo;a d&rsquo;ailleurs pratiquement pas &agrave; s&rsquo;en soucier. Ce point est capital pour les d&eacute;butants, mais permet aussi &agrave; un utilisateur plus exp&eacute;riment&eacute; de se pendre dans la voile dans aucun d&eacute;part &agrave; la gite et sans m&ecirc;me avoir eu besoin de se mettre &agrave; la contre-g&icirc;te.</p>
<p>En contre partie, nous avons eu justement du mal &agrave; mettre ces foils &agrave; la contre-g&icirc;te : ils exercent en permanence un couple qui tend &agrave; les remettre &agrave; plat, et ceci quelque soit la planche utilis&eacute;e. C&rsquo;est flagrant quand on passe par exemple du LK1 &agrave; l&rsquo;AFS ou du GTS &agrave; l&rsquo;AFS. Ce qui est une qualit&eacute; ind&eacute;niable pour la facilit&eacute; d&rsquo;utilisation du foil, limite juste la facilit&eacute; en terme de remont&eacute;e au vent et d&rsquo;acc&eacute;l&eacute;ration aux allure serr&eacute;es, en comparaison avec les autres foils cit&eacute;s.</p>
<h4>Comportement g&eacute;n&eacute;ral</h4>
<p>Dans les conditions de vent irr&eacute;guli&egrave;res, les 2 AFS nous ont paru les plus faciles &agrave; g&eacute;rer parmi les mod&egrave;les test&eacute;s. Ils acceptent tr&egrave;s facilement d&rsquo;&ecirc;tre bien toil&eacute;s &hellip; et je dirai m&ecirc;me qu&rsquo;ils en redemandent. L&agrave; o&ugrave; on naviguait avec 1 ou 2m2 de moins qu&rsquo;en windsurf classique avec les autres foils, on arrive presque &agrave; naviguer avec une surface standard avec les AFS.</p>
<p>Par contre, quand les conditions de mer devient form&eacute;es (houle), l&rsquo;inertie longitudinale peut devenir plus g&ecirc;nante et on r&eacute;agit moins vite qu&rsquo;avec les Loke LK1 et Starboard pour adapter la hauteur du flotteur aux &laquo; mouvements de terrain &raquo;. Dans ces conditions, il nous a plus fallu lever le pied. Par contre, les AFS permettent une navigation &agrave; petite vitesse dans la houle et sont insensibles aux effets de cisaillement sous l\'eau. Du coup, utiliser un AFS 85 ou 85 en mode freeride dans la houle avec une petite voile s\'av&egrave;re tr&egrave;s agr&eacute;able, et on g&egrave;re mieux qu\'avec les autres les rafales (gr&acirc;ce &agrave; la moindre nervosit&eacute; du foil). Seul le mat un peu plus court du 85 peut g&ecirc;ner dans la houle .. mais en contre partie, il s\'adapte mieux que le 95 aux flotteurs &eacute;troits (en particulier les planche non d&eacute;di&eacute;es)</p>
<p>Au Jibe, L\'AFS 85 est un jeu d\'enfant. C&rsquo;est celui qui pardonne le plus les petites erreurs de timing ou de positionnement des pieds.</p>
<p>Dans les molles, l&rsquo;ASF W85 &agrave; peu d\'allonge par manque de glisse &hellip; et si on cherche &agrave; pomper sur le mat pour compenser, ce n&rsquo;est pas le plus efficace non plus. Au final, on se re-pose avant les autres parmi nos r&eacute;f&eacute;rences.</p>
<h4>Bilan</h4>
<p>Avec l\'AFS W85, on retrouve beaucoup de similitude avec l&rsquo;AFS2 : un foil tr&egrave;s bloqu&eacute;s sur les 2 axes, et par cons&eacute;quent tr&egrave;s facile d&rsquo;utilisation. Par rapport aux autres r&eacute;f&eacute;rences du march&eacute;, on les a trouv&eacute; en retrait dans les conditions l&eacute;g&egrave;res ou au pr&egrave;s, et moins maniables. La sensation de glisse&nbsp; et l\'allonge dans les molles sont &eacute;galement en retrait. Par contre, ce sont des foils avec lesquels on se fait plaisir dans presque toutes les conditions, et qui offrent une conduite assist&eacute;e m&ecirc;me avec des voiles un peu puissantes. Dans les conditions les plus difficiles, leur sagesse fait merveille. Ce sont aussi des foils qui facilitent &eacute;norm&eacute;ment les manoeuvres. Pour les r&eacute;gatiers, c\'est un &eacute;l&eacute;ment &agrave; prendre en compte car c\'est souvent l&agrave; que se fait la diff&eacute;rence.</p>',
'test_equipment' => 'Exocet RF 81 Carbone, Starboard Foil 122',
'test_duration' => 3,
'test_conditions' => 'E Type 5.8, NP V8 6.6',
'test_place' => 'La Ciotat',
'created_at' => '2018-04-28 09:20:55',
'updated_at' => '2020-03-26 22:41:57',
),
21 => 
array (
'id' => 23,
'device_id' => 34,
'user_id' => 1,
'title' => 'Les perf facile ... en toute stabilité',
'body' => '<p><img src="/storage/photos/1/2018-04/afs-wind-95-2019-yocQbqfokw.jpg" /></p>
<p>Nous avons test&eacute; ces W85 et W95 dans de nombreuses conditions : du light plat au vent soutenu dans la houle. A chaque fois, il se sont r&eacute;v&eacute;l&eacute;s agr&eacute;ables et efficaces dans notre optique de navigation freeride ou freerace. Avec les Loke LK1 et Starboard GTS, il font partie des foils carbone les plus aboutis du moment que nous avions eu l&rsquo;occasion de tester.</p>
<h4>Montage</h4>
<p><img src="/storage/photos/1/2018-04/afs-wind-95-2019-XCmFp2GBsb.jpg" /></p>
<p>Contrairement &agrave; l&rsquo;AFS2, la nouvelle gamme AFS utilise une mini-platine qui permet de s&rsquo;assurer que le foil est bien positionn&eacute; dans le boitier, et surtout de la m&ecirc;me fa&ccedil;on d&rsquo;une nav&rsquo; &agrave; l&rsquo;autre. Tous les assemblages sont en vis Inox Torx T30. Le tournevis est d&rsquo;ailleurs fourni (tr&egrave;s bonne initiative). Les assemblages sont impeccables, et la finition plut&ocirc;t bonne (ponc&eacute;e sur le 95 et le 105, brillante sortie de moule sur le 85). Seuls les inserts de talon nous ont pos&eacute; r&eacute;guli&egrave;rement des probl&egrave;mes : leur constitution en Inox ne souffre aucune mauvaise manip. A la moindre erreur ou au moindre d&eacute;saxement lors de la mise en place des vis, les inserts foirent et ils sont tr&egrave;s difficilement ratrappables ... &agrave; moins d\'avoir une tarraud sous la main. Si on force, c\'est un blocage assur&eacute; avec queqlues fois (c\'est du v&eacute;cu) casse de la vis &agrave; l\'int&eacute;rieur du talon .... Et pour ne rien arranger, les inserts tournent dans leur logement et se d&eacute;xaent donc tout seuls. Nous esp&eacute;rons vicement qu\'AFS r&egrave;gle le probl&egrave;me car c\'est vite un calvaire.&nbsp;</p>
<p>Au passage, il semblerait que la finition ponc&eacute;e offre une meilleure glisse que la finition brillante \'sortie de moule\'. Si vous avez l\'intention d\'acqu&eacute;rir un Wind 85 et avez 2 bonnes heures devant vous, on vous conseille de sortir l\'huile de coude, et de poncer l\'int&eacute;gralit&eacute; du foil au papier &agrave; l\'eau.</p>
<h4>Envol</h4>
<p>L&rsquo;AFS W95 demande un peu plus de vitesse que la moyenne de nos foils r&eacute;f&eacute;rence (LK1 et Starboard) pour d&eacute;coller. Par contre, le d&eacute;collage est plus progressif et surprendra moins les moins exp&eacute;riment&eacute;s. Si on ajoute une sensation imm&eacute;diate d&rsquo;extr&ecirc;me stabilit&eacute;, on peut dire que les AFS font certainement partie des foils les plus faciles &agrave; prendre en main du march&eacute;.</p>
<p>Une fois en l&rsquo;air, l&rsquo;acc&eacute;l&eacute;ration est elle aussi progressive.</p>
<p>Les plus &laquo; &eacute;nerv&eacute;s &raquo; pourront reprocher un manque de fougue et de nervosit&eacute;, mais ces derniers pourront alors se tourner vers le&nbsp;Loke LK1, ou dans une moindre mesure Starboard GTS pour &ecirc;tre combl&eacute;s.</p>
<p>Pour les adeptes de la navigation dans le tr&egrave;s light (ou les plus lourds), l\'AFS W95 peut sembler manquer de minis.&nbsp; Ils pourront en partie compenser ceci en investissant dans l&rsquo;aile R1000 &eacute;galement disponible, ou la F800 pour les lourds. Dans tous les cas, ils resteront des foils sages et il ne faudra pas s&rsquo;attendre &agrave; la nervosit&eacute; ou l&rsquo;efficacit&eacute; au pumping d&rsquo;un LK1, Horue XWL ou S&eacute;lect Profoil. C&rsquo;est un choix assum&eacute; qui permet en contre partie une facilit&eacute; de navigation plus marqu&eacute;e.</p>
<p><img src="/storage/photos/1/2018-04/afs-wind-95-2019-590eq5bmbq.jpg" /></p>
<h4>Stabilit&eacute;</h4>
<p>L\'AFS W95 est un mod&egrave;les de stabilit&eacute; longitudinale. Un peu &agrave; l&rsquo;image du Loke Envol, on pourrait presque pique-niquer sur la planche tellement on a peu &agrave; se soucier de cet axe de mouvement. Bien s&ucirc;r, c&rsquo;est une image, mais l&rsquo;inertie sur cet axe tranche avec d&rsquo;autres foils, &agrave; l&rsquo;image du NeilPryde F4 o&ugrave; il faut en permanence corriger. Comme sur l&rsquo;AFS2, cette stabilit&eacute; devient m&ecirc;me presque perturbante lorsqu&rsquo;on associe l&rsquo;AFS avec un flotteur long ou lourd (avec de l\'inertie). Il faut alors carr&eacute;ment anticiper les corrections pour qu&rsquo;elles donnent leur effet avant que l&rsquo;on ne revienne toucher ou au contraire sortir de l&rsquo;eau.</p>
<p>Sur l&rsquo;axe lat&eacute;ral, c&rsquo;est un peu pareil : les AFS font partie des plus stables et on n&rsquo;a d&rsquo;ailleurs pratiquement pas &agrave; s&rsquo;en soucier. Ce point est capital pour les d&eacute;butants, mais permet aussi &agrave; un utilisateur plus exp&eacute;riment&eacute; de se pendre dans la voile dans aucun d&eacute;part &agrave; la gite et sans m&ecirc;me avoir eu besoin de se mettre &agrave; la contre-g&icirc;te.</p>
<p>En contre partie, nous avons eu justement du mal &agrave; mettre ces foils &agrave; la contre-g&icirc;te : ils exercent en permanence un couple qui tend &agrave; les remettre &agrave; plat, et ceci quelque soit la planche utilis&eacute;e. C&rsquo;est flagrant quand on passe par exemple du LK1 &agrave; l&rsquo;AFS ou du GTS &agrave; l&rsquo;AFS. Ce qui est une qualit&eacute; ind&eacute;niable pour la facilit&eacute; d&rsquo;utilisation du foil, limite juste la facilit&eacute; en terme de remont&eacute;e au vent et d&rsquo;acc&eacute;l&eacute;ration aux allure serr&eacute;es, en comparaison avec les autres foils cit&eacute;s. Notons que l\'utilisation de l\'aile R1000 lib&egrave;re un peu le foil sur l\'axe transversal.</p>
<h4>Comportement g&eacute;n&eacute;ral</h4>
<p>Dans les conditions de vent irr&eacute;guli&egrave;res, les AFS nous ont paru parmi les plus faciles &agrave; g&eacute;rer. Comme avec l&rsquo;AFS2, ce sont aussi les foils avec lesquels nous parvenons &agrave; aller les plus vite car on est tr&egrave;s serein en bordant et abattant. Ils acceptent tr&egrave;s facilement d&rsquo;&ecirc;tre bien toil&eacute;s &hellip; et je dirai m&ecirc;me qu&rsquo;ils en redemandent. L&agrave; o&ugrave; on naviguait avec 1 ou 2m2 de moins qu&rsquo;en windsurf classique avec les autres foils, on arrive presque &agrave; naviguer avec une surface standard avec les AFS.</p>
<p>Par contre, quand les conditions de mer devient form&eacute;es (houle), l&rsquo;inertie longitudinale peut devenir plus g&ecirc;nante et on r&eacute;agit moins vite qu&rsquo;avec les Loke LK1 et Starboard pour adapter la hauteur du flotteur aux &laquo; mouvements de terrain &raquo;. Dans ces conditions, il nous a plus fallu lever le pied. Par contre, les AFS permettent une navigation &agrave; petite vitesse dans la houle et sont insensibles aux effets de cisaillement sous l\'eau. Du coup, utiliser un AFS&nbsp; 95 en mode freeride dans la houle avec une petite voile s\'av&egrave;re tr&egrave;s agr&eacute;able, et on g&egrave;re mieux qu\'avec les autres les rafales (gr&acirc;ce &agrave; la moindre nervosit&eacute; du foil).</p>
<p>Au Jibe, je ne dirai pas que c&rsquo;est un jeu d&rsquo;enfant, mais presque. C&rsquo;est l\'un des foils qui pardonne le plus les petites erreurs de timing ou de positionnement des pieds.</p>
<p>Dans les molles, l&rsquo;ASF W95 &agrave; moins d&rsquo;allonge que le Straboard GTS, et nettement moins que le LK1 ou autre F4 &hellip; et si on cherche &agrave; pomper sur le mat pour compenser, ce n&rsquo;est pas le plus efficace non plus. Au final, on se re-pose avant les autres.</p>
<p><img src="/storage/photos/1/2018-04/afs-wind-95-2019-TjgKxjA1Y1.jpg" /></p>
<h4>Bilan</h4>
<p>Avec l\'AFS W95, on retrouve beaucoup de similitude avec l&rsquo;AFS2 : un foil tr&egrave;s bloqu&eacute; sur les 2 axes, et par cons&eacute;quent tr&egrave;s facile d&rsquo;utilisation, que ce soit pour faire du cruising ou du speed. Par rapport aux autres r&eacute;f&eacute;rences du march&eacute;, on l\'a trouv&eacute; en retrait dans les conditions de vent light ou au pr&egrave;s (manque de glisse et d\'allonge), et moins maniable. Les nouvelle ailes (R1000) redonnent un peu plus de glisse. Par contre, c\'est un foil avec lequel on se fait plaisir dans presque toutes les conditions, et qui va tr&egrave;s vite car il offre une conduite assist&eacute;e m&ecirc;me avec des voiles un peu puissantes. Dans les conditions les plus difficiles, sa sagesse fait merveille. C\'est aussi un foil qui facilite &eacute;norm&eacute;ment les manoeuvres. Pour les r&eacute;gatiers, c\'est un &eacute;l&eacute;ment &agrave; prendre en compte car c\'est souvent l&agrave; que se fait la diff&eacute;rence.</p>',
'test_equipment' => 'Flotteurs : Exocet RF 81 Carbone, Starboard Foil 122, Elix F1X, Duoboard / Voiles : E Type 5.8, Phantom IRIS 7m, NP V8 6.6',
'test_duration' => 3,
'test_conditions' => 'A',
'test_place' => 'La Ciotat',
'created_at' => '2018-04-28 09:20:55',
'updated_at' => '2020-03-26 22:41:57',
),
22 => 
array (
'id' => 24,
'device_id' => 35,
'user_id' => 1,
'title' => 'Efficace et évolutif',
'body' => '<p>Sorti en plein milieu de l\'hivers, le Starboard GT Alu &eacute;tait attendu plus t&ocirc;t dans la saison, mais a malheureusement subit un retard de production. Avec des retards enregistr&eacute;s pour pratiquement toutes les marques, on voit bien que rendre disponible un produit industriel bien fini prend du temps. Comme souvent, c\'est d\'ailleurs souvent l\'industrialisation qui prend plus de temps que le d&eacute;veloppement ... mais c\'est la cl&eacute; pour fournir un produit p&eacute;renne et de qualit&eacute;.</p>
<p><img src="/storage/photos/1/2018-02/starboard-gt-alu-v4-2018-7IsWGQgdKZ.jpg" /></p>
<p>A l\'inverse de certaines autres grandes marques (comme Fanatic avec son Flow H9), Starboard a choisi de sortir dans un premier ses produits haut de gamme (version Carbone) avant de les d&eacute;cliner dans un produit &eacute;conomique que nous testons aujourd\'hui.</p>
<p>Alors, certes, Starboard a choisi de ne pas suivre ses concurrents en proposant un produit loisir &agrave; moins de 900eur (comme Horue, NeilPryde, Fanatic), mais la marque au Tiki est la seule &agrave; proposer un produit r&eacute;ellement &eacute;volutif. Rappelons en effet que ce GT alu, &agrave; vis&eacute;e loisir, peut &eacute;voluer vers le GTS ... qui a trust&eacute; les podiums de PWA toute la saison ! Cet argument sera d&eacute;cisif pour ne nombreux pratiquants qui veulent p&eacute;renniser leur investissement. Et encore plus que l\'&eacute;volutivit&eacute; vers la perfromance, le concept Starboard permet aussi d\'utiliser toutes les pi&egrave;ces et options Starboard sur toute la gamme. Le GT Alu peut donc &ecirc;tre &eacute;quip&eacute; des ailes de 1100 et de 550, du fuselage de 115 etc ... des combinaisons nombreuses pour pouvoir naviguer dans toutes les conditions avec un max de confort.</p>
<p><img src="/storage/photos/1/2018-02/starboard-gt-alu-v4-2018-cMHavQrtLN.jpg" /></p>
<p>Ce concept Starboard, et la d&eacute;clinaison Alu &eacute;tait donc attendue, mais tout te monde se languissait aussi de savoir comment le petit dernier se comportait sur l\'eau</p>
<h4>Conditions de test</h4>
<p>Comme d\'habitude, et pour pouvoir comparer ce qui est comparable, nous avons test&eacute; le Starboard GT Alu sur notre sport de La Ciotat, par petit vent d\'Ouest.</p>
<p>Vent : Nord-Ouest 8 &gt; 12 knt</p>
<p>Flotteur : RS:One Convertible (130L x 80 cm)</p>
<p>Voile : Loft Skyscape 7m Mat MauiSail 460</p>
<p>Poids du foil complet : 5130g</p>
<p>Pour ce test, j&rsquo;ai mont&eacute; le foil starboard sur la JP hydrofoil 135. Comme je connais tr&egrave;s bien le comportement du GT carbone sur ce flotteur, l\'occasion &eacute;tait tr&egrave;s bonne pour mesurer l\'influence du mat alu.</p>
<p>Pour le gr&eacute;ement, et comme pour tous les tests de foil freeride, j\'ai s&eacute;lectionn&eacute; une voile tr&egrave;s l&eacute;g&egrave;re en 5 lattes : la Skyscape.</p>
<p><img src="/storage/photos/1/2018-02/starboard-gt-alu-v4-2018-y9mvWl3JXp.jpg" /></p>
<h4>Montage</h4>
<p>Le montage n&rsquo;appelle pas de commentaires particulier, si ce n&rsquo;est que j&rsquo;ai d&ucirc; ovaliser les trous du boitier de la JP car les deux axes de vis &eacute;taient d&eacute;cal&eacute;s d&rsquo;un bon 4mm.</p>
<p>A ce sujet, je pr&eacute;cise que cette situation est malheureusement assez fr&eacute;quente car on observe de nombreuses d&eacute;rive sur l\'alignement des per&ccedil;ages chez Cobra. La bonne id&eacute;e du moment vient de Starboard justement, qui livre d&eacute;sormais tous ses flotteurs avec boitier tuttle perc&eacute;s de trous oblong et non plus ronds. Je ne comprends pas encore pourquoi toutes les marques ne s\'y sont pas mises ...esp&eacute;rons donc que &ccedil;a vienne !</p>
<p>Comme pour le Fanatic Flow H9, la platine cons&eacute;quente du GT Alu se cale parfaitement contre la car&egrave;ne et assure une connexion qui donne confiance.</p>
<h4>D&eacute;collage</h4>
<p>La mise &agrave; l&rsquo;eau est un jeu d&rsquo;enfant avec un mat de 75cm &hellip; j&rsquo;avoue que vu la temp&eacute;rature de l&rsquo;eau &agrave; cette &eacute;poque, moins on se mouille mieux on se porte ;)</p>
<p>Le d&eacute;collage intervient assez vite, mais n&eacute;cessite comme avec le Fanatic Flow H9 ou le NeilPryde, que la planche ai pris un peu de vitesse (planning). Contrairement au GT Carbone, l&rsquo;effet de pumping sur le mat est tr&egrave;s peu perceptible, et le d&eacute;collage est donc un peu plus progressif avec cette version Alu. Non pas qu&rsquo;il d&eacute;colle plus tard, mais simplement moins brusquement. En terme de capacit&eacute; dans le light, je dirai subjectivement que le GT Alu se situe entre le Horue H10 (qui d&eacute;colle un poil plus t&ocirc;t) et les H9, Zeeko et NeilPryde (qui sont un poil derri&egrave;re).</p>
<h4>Vitesse de d&eacute;collage ou vent mini ?</h4>
<p>Je profite de ce sujet pour &eacute;voquer un point important concernant les capacit&eacute;s de d&eacute;collage dans le vent l&eacute;ger.</p>
<p>Les premiers balbutiements du foil (il y a 4 &agrave; 6 ans) se sont fait avec des mod&egrave;les bas&eacute; sur des grosses ailes &eacute;paisses et larges. L\'objectif &eacute;tait de g&eacute;rer une forte portance m&ecirc;me avec peu de vitesse de flotteur.</p>
<p>L\'&eacute;volution est permis d\'aller vers des ailes plus fines et moins larges afin de favoriser la glisse et les sensations. En trainant moins d\'eau, on a en effet constat&eacute; que l\'on permettait au foil de prendre plus vite de la vitesse, et d\'aller vers une meilleur stabilit&eacute; longitudinale. Une aile moins volumineuse permet aussi d\'&eacute;viter de sortir de l\'eau &agrave; tout bout de champ. On a surtout remarqu&eacute; que les grosses ailes ne permettaient pas de naviguer avec moins de vent.</p>
<p>En effet, les ailes ultra porteuses vont faire d&eacute;coller le flotteur avec tr&egrave;s peu de vitesse de d&eacute;placement, mais comme elles trainent beaucoup plus d\'eau, elles n&eacute;cessitent au moins autant de vent qu\'une aile plus fine.</p>
<p>Les fabricants ayant compris que tout le monde cherchait &agrave; planer dans tr&egrave;s peu de vent, ils recommencent &agrave; proposer des &eacute;normes ailes. Si elles peuvent avoir un int&eacute;r&ecirc;t pour l\'initiation (premiers d&eacute;collages), ne croyez pas qu\'elles vous permettront de planer avec 5 knt de vent ... c\'est une vue de l\'esprit. En revanche, le plage d\'utilisation de ailes sera plus faible.</p>
<h4>Stabilit&eacute;</h4>
<p>Une fois d&eacute;coll&eacute;, l&rsquo;acc&eacute;l&eacute;ration est aussi plus douce qu&rsquo;avec le GT Carbone &hellip; on sent beaucoup moins de finesse, mais en contre partie quelque chose de tr&egrave;s sage.</p>
<p>Comme la stabilit&eacute; longitudinale et l&rsquo;&eacute;quilibre sont tr&egrave;s bons (identiques au GT carbone), le mat qui ne fait que 75cm ne s&rsquo;av&egrave;re pas g&ecirc;nant .. et au bout de 2h de nav&rsquo;, je n&rsquo;ai pas sorti une fois l&rsquo;aile de l&rsquo;eau. J&rsquo;avoue que c&rsquo;est l&rsquo;un des points que je craignait avec ce mat court. On profite, comme avec le GT carbone, d&rsquo;une aile principale qui garde un comportement tr&egrave;s sein m&ecirc;me au raz de l&rsquo;eau &hellip; tr&egrave;s facile &agrave; rattraper.</p>
<p>L&rsquo;&eacute;quilibre longitudinal du GT alu, associ&eacute; &agrave; la JP est tr&egrave;s l&eacute;g&egrave;rement pied arri&egrave;re, mais plus &eacute;quilibr&eacute; qu&rsquo;avec le Foil NeilPryde. On est dans une situation presque id&eacute;ale car elle est rassurante m&ecirc;me quand le vent monte.</p>
<p>C&ocirc;t&eacute; stabilit&eacute; lat&eacute;rale, le GT alu rejoint le NeilPryde et le Zeeko au rang des foils ultra stables. Que ce soit en navigation droite (mode freeride), que ce soit lorsque l&rsquo;on se pend dans la voile, ou m&ecirc;me que l&rsquo;on navigue &agrave; la contre g&icirc;te, le foil est super neutre et rien ne bouge. M&ecirc;me avec une grosse 7.8, je n&rsquo;ai pas senti la moindre torsion ou flexion qui soit. Le mat et son fuselage sont des vraies poutres mega rigides !</p>
<h4>Comportement</h4>
<p>Du point de vue glisse, le GT alu est, par contre, nettement en retrait par rapport &agrave; bon nombre d&rsquo;autres mod&egrave;les. Le mat tr&egrave;s &eacute;pais et large a &eacute;videmment des cons&eacute;quences sur l&rsquo;aspect performances pures. De m&ecirc;me, les capacit&eacute;s au cap sont un peu limit&eacute;es. En contre partie, le GT Alu reste en toute circonstance tr&egrave;s rassurant &hellip; m&ecirc;me au largue, sa prise de vitesse est tr&egrave;s progressive, ce qui &eacute;vite de se faire peur.</p>
<p>Dans les molles, comme pour le Fanatic H9, l&rsquo;allonge est plut&ocirc;t faible &agrave; cause d&rsquo;une train&eacute;e plus forte que la moyenne, et on ne pourra pas, comme avec la vision carbone, compter sur le pumping sur le mat car il est totalement inefficace sur ce mod&egrave;le.</p>
<p><img src="/storage/photos/1/2018-02/starboard-gt-alu-v4-2018-uBtbAVyCnx.jpg" /></p>
<h4>En r&eacute;sum&eacute;</h4>
<p>Cette stabilit&eacute; tr&egrave;s importante sur les 2 axes, associ&eacute;e &agrave; un &eacute;quilibre quasi parfait sur la JP, et un c&ocirc;t&eacute; tr&egrave;s sage &agrave; toutes les allures font de ce GT Alu le foil aluminium le plus facile &agrave; utiliser parmi tous ceux que j&rsquo;ai eu l&rsquo;occasion de tester &agrave; ce jour. Alors oui, les performances ultimes ne sont clairement pas la cible du GT alu, mais il faut rappeler sa grande force : remplacez le mat Alu par un 95 carbone et vous avez sous les pieds un foil qui a gagn&eacute; une bonne moiti&eacute; des courses PWA cette ann&eacute;e. Si ce n&rsquo;est pas de l&rsquo;&eacute;volutivit&eacute;, &ccedil;a !</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2018-02-12 14:50:06',
'updated_at' => '2020-04-03 17:04:58',
),
23 => 
array (
'id' => 25,
'device_id' => 37,
'user_id' => 1,
'title' => 'Concert pour instrument en ré',
'body' => '<p>Sorti en plein milieu de l\'hivers, le Fanatic Flow H9 a pu pass&eacute; un peu inaper&ccedil;u pour la plupart des pratiquants. Pourtant, c\'est un mod&egrave;le que nous attendions car on ne pouvait continuer voir le windfoil pousser sans que l\'un des plus gros acteur du march&eacute; Windsurf n\'y mette le pied !</p>
<p>C\'est d&eacute;sormais fait avec le Flow H9, qui se destine clairement au loisir avec 2 points cl&eacute;s annonc&eacute;s, qui devraient &agrave; tous de go&ucirc;ter au futur du Windsurf :</p>
<ul>
<li>Un tarif tr&egrave;s agressif &agrave; 849&euro;</li>
<li>Une accessibilit&eacute; de premier ordre</li>
</ul>
<p>Les choses &eacute;tant pos&eacute;es, nous &eacute;tions impatients de v&eacute;rifier tout ceci sur l\'eau. Nous avions assez peu de doute sur le travail fourni par l\'&eacute;quipe de Craig, mais nous voulions pouvoir r&eacute;pondre aux nombreuses interrogations qui nous ont &eacute;t&eacute; soumises par les pratiquants int&eacute;ress&eacute;s.</p>
<p><img src="/storage/photos/1/2018-02/fanatic-flow-h9-2018-82ZBeDlHsw.jpg" /></p>
<p>Pour ce test, nous avons install&eacute; le H9 sur notre flotteur convertible de r&eacute;f&eacute;rence : la RS:One convertible. Ceci pr&eacute;sente 2 avantages</p>
<ul>
<li>Elle est proche des flotteurs freeride ou freerace souvent utilis&eacute;s par les pratiquants qui d&eacute;couvrent le windfoil</li>
<li>Elle a un boitier assez profond pour accueillir le talon du H9. Compte tenu de sa g&eacute;om&eacute;trie qui est plus haute qu&rsquo;un Deep Tuttle, le H9 ne peut pas se monter sur certaines planches (notamment les Horue). Fort heureusement, les flotteurs cobra &eacute;quip&eacute;s d&rsquo;un foilbox sont compatibles</li>
<li>C&rsquo;est un flotteur long et pas trop large, qui part relativement vite au planning</li>
</ul>
<p>C&ocirc;t&eacute; voile, nous avons choisi de rester sur une voile ultra l&eacute;g&egrave;re en 7m et 5 lattes, parfaite pour exploiter le programme freeride dans un vent tr&egrave;s l&eacute;ger</p>
<h3>Montage</h3>
<p>Aucun soucis pour installer le H9. Avec les talons aluminium, pas question de poncer (!!). Heureusement, les c&ocirc;tes sont tr&egrave;s pr&eacute;cis&eacute;ment cal&eacute;es sur la largeur du boitier COBRA, et la platine en car&egrave;ne assure un assemblage solide.</p>
<p>Pour une fois, les vis sont pile dans l&rsquo;axe des trous de la planche .. pas besoin de bricoler</p>
<p><img src="/storage/photos/1/2018-02/fanatic-flow-h9-2018-N5ra5vTqk7.jpg" /></p>
<h3>D&eacute;collage</h3>
<p>Le transport foil + board est assez facile car le foil est l&eacute;ger pour un mod&egrave;le m&eacute;tallique.</p>
<p>La mise &agrave; l&rsquo;eau n&eacute;cessite un peu d&rsquo;eau avec le mat de 85cm. Cela tranche avec les autres mod&egrave;les aluminium du march&eacute;.</p>
<p>D&egrave;s les premi&egrave;res ris&eacute;es, la planche part au planning sans que le foil ne d&eacute;colle. Il est n&eacute;cessaire d&rsquo;appuyer sur le pied arri&egrave;re pour d&eacute;clencher le d&eacute;collage, qui se fait tr&egrave;s progressivement et tout en douceur. On retrouve &agrave; ce niveau un comportement assez semblable au RS:Flight AL, et c&rsquo;est tr&egrave;s rassurant pour tous ceux qui ne ma&icirc;trisent pas encore compl&egrave;tement. On est bien loin des foils qui montent d&rsquo;un coup et dont il faut contr&ocirc;ler la fougue en permanence.</p>
<h3>Stabilit&eacute;</h3>
<p>Une fois en l&rsquo;air, on constate une stabilit&eacute; longitudinale plut&ocirc;t tr&egrave;s bonne. On est un peu en dessous les plus stables (AFS, Loke, starboard), mais au dessus de tous les autres. Le maintient d&rsquo;une altitude &agrave; peu pr&egrave;s constante est du coup relativement ais&eacute;, sauf en cas de variation de vent.</p>
<p>En terme d&rsquo;&eacute;quilibre longitudinal (sur la RS/One), le foil est sein sans que nous n&rsquo;ayions eu &agrave; effectuer le moindre r&eacute;glage. Il est peut &ecirc;tre m&ecirc;me plus &eacute;quilibr&eacute; sur ce flotteur que le RS:Flight AL (un peu plus pied arri&egrave;re). On voit bien que le H9 a &eacute;t&eacute; d&eacute;velopp&eacute; avec une planche freeride (Gecko) car il est parfaitement adapt&eacute; &agrave; ce type de flotteur.</p>
<p>C&ocirc;t&eacute; stabilit&eacute; lat&eacute;rale, les choses sont diff&eacute;rentes. le H9 demande de l&rsquo;attention de ce c&ocirc;t&eacute;, en comparaison avec les autres foils aluminium r&eacute;cents (starboard, NP, H10 Evo). Tant que l&rsquo;on garde une attitude assez verticale, aucun probl&egrave;me v&eacute;ritablement. Il faut par contre vraiment &eacute;viter de se pendre dans la voile pour &eacute;viter de perturber l&rsquo;&eacute;quilibre et de se retrouver avec un comportement bien moins plaisant. Pour ceci, c&rsquo;est assez simple, il suffit de ne pas surtoiler, et de garder des bouts de harnais assez courts. Sur ce point de vue, on est assez proche de ce que l&rsquo;on va trouver sur un Horue Vini par exemple.</p>
<p>Je pr&eacute;cise toutefois que, m&ecirc;me si la zone de stabilit&eacute; lat&eacute;rale est assez &eacute;troite, on ne d&eacute;tecte pas d&rsquo;instabilit&eacute; forte pr&egrave;s du neutre. Cela veut dire que tant que l&rsquo;on reste bien au dessus du foil, la sensation reste seine, contrairement &agrave; certains autres foils. Le H9 est en particulier plus facile &agrave; g&eacute;rer par exemple que le Slingshot, avec qui il partage certaines similitudes de design.</p>
<h3>Comportement</h3>
<p>Dans tous les autres secteurs de navigation, le H9 appara&icirc;t comme un foil sage. On ne ressent pas de fortes acc&eacute;l&eacute;rations au pr&egrave;s ou au largue. Le H9 est r&eacute;elleemnt con&ccedil;u pour naviguer en mode freeride.</p>
<p>Dans les moles, le H9 garde de la portance assez longtemps, mais r&eacute;agit tr&egrave;s peu au pumping sur le mat. Son allonge dans les trous d\'air est assez limit&eacute;e car il a peu de glisse.</p>
<p>Au pr&egrave;s, le H9 est &eacute;videmment en retrait compte tenu d&rsquo;une finesse faible et d&rsquo;une stabilit&eacute; lat&eacute;rale plut&ocirc;t limit&eacute;e.</p>
<p>Venons en au seul point qui m&rsquo;a g&ecirc;n&eacute; lors de ce test : le H9 rejoins le club des instruments de musique symphonique (Loke 2016, NeilPryde RS:Flight AL). On a un moment raill&eacute; le NeilPryde pour un son strident, mais le H9 fait dans la symphonie en r&eacute; avec de multiples modulations en fonction de l&rsquo;altitude du foil. Ca s&rsquo;entend de moins loin, mais le volume sonore est aussi cons&eacute;quent ! Il restera simplement &agrave; v&eacute;rifier si cela est propre &agrave; notre mod&egrave;le de test ou &agrave; l&rsquo;ensemble de la production. Sinon, reste &agrave; monter une grosse sono sur le flotteur pour couvrir le bruit :)</p>
<h3>Petit r&eacute;sum&eacute;</h3>
<p>Au final, le H9 s&rsquo;av&egrave;re un foil adapt&eacute; essentiellement aux flotteurs de freeride. C&rsquo;est un foil sage et pas nerveux, qui n&eacute;cessaite une navigation en mode freeride (gr&eacute;ement droit, avec une voile l&eacute;g&egrave;re de petite taille). Dans ce mode de navigation, il offre en particulier un d&eacute;collage tr&egrave;s doux et progressif. En navigation, le H9 ne fait preuve d\'aucune fougue, mais il manque trop &agrave; mes yeux de contr&ocirc;le et de stabilit&eacute; lat&eacute;rale pour permettre r&eacute;ellement &agrave; un pratiquant de faire des progr&egrave;s. C\'est un produit coh&eacute;rent pour une &eacute;cole qui propose des intiations ... m&ecirc;me si il y a plus complet sur le march&eacute;, y compris &agrave; des tarifs pus bas.</p>
<p><img src="/storage/photos/1/2018-02/fanatic-flow-h9-2018-JyYKEfUXUh.jpg" /></p>
<p>&nbsp;</p>',
'test_equipment' => 'Flotteur : RS:One Convertible (130L x 80 cm) / Voile : Loft Skyscape 7m + Mat MauiSail 460',
'test_duration' => 3,
'test_conditions' => 'Nord-Ouest 8 > 12 knt',
'test_place' => 'La Ciotat',
'created_at' => '2018-02-12 14:33:20',
'updated_at' => '2020-09-24 16:49:15',
),
24 => 
array (
'id' => 26,
'device_id' => 42,
'user_id' => 1,
'title' => 'Excellent rapport perf / prix',
'body' => '<p>Apr&egrave;s des longs mois d\'attente (pr&eacute;vu initialement en Mars !) et de nombreuses &eacute;volution du concept, le H10 Evo de s&eacute;rie est enfin pr&ecirc;t. Evidemment, il arrive &agrave; un moment tr&egrave;s pratique en terme de m&eacute;t&eacute;o avec au choix des conditions &agrave; 4knt ou &agrave; 35knt. Faites votre choix :)</p>
<p>Ceci dit, l\'envie &eacute;tait trop forte, et j\'ai craqu&eacute; aujourd\'hui, m&ecirc;me si les conditions n\'&eacute;taient vraiment pas g&eacute;niales. Ca ne sera donc pas un test complet mais quelques premi&egrave;res bribes de sensations.</p>
<p><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-D5fBJVptDk.jpg" /></p>
<p>Je ne reviendrai pas sur la pr&eacute;sentation du foil que nous avons fait en d&eacute;tail au shop. Pr&eacute;cisons juste que notre mod&egrave;le de test avait un d&eacute;crochement &agrave; la base du mat pour loger la cale de talon. A priori, les mod&egrave;les d&eacute;finitifs seront l&eacute;g&egrave;rement d&eacute;cal&eacute;es dans le boitier pour conserver un mat entier</p>
<p><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-z2kblPax0M.jpg" /></p>
<p>Le montage dans la tiny ne pose aucun probl&egrave;me. La talon est plut&ocirc;t fin et rentre sans probl&egrave;me dans le boitier deep tuttle. Il s\'enfonce m&ecirc;me un peu plus que la c&ocirc;te (sur l\'arri&egrave;re puisque l\'avant repose sur la cale). A priori, ce ne sera plus le cas sur les versions avec le mat d&eacute;cal&eacute; ... on devrait &ecirc;tre pile poil &agrave; ce moment l&agrave;.</p>
<p><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-ENlTwbV6ly.jpg" /></p>
<p>Allez, assez reluqu&eacute; sur le bord, &agrave; l\'eau ! Au passage, transport facile gr&acirc;ce &agrave; un poids plus que correct. Sur l\'eau, on s\'en fout, mais pour ceux qui portent sur 300m &agrave; cause des mar&eacute;es, &ccedil;a peut avoir de l\'importance.</p>
<h3>Sur l\'eau</h3>
<p>Au profit de quelques ris&eacute;es &agrave; 10knt, j\'ai r&eacute;ussi a faire une petite dizaine de vols avant que le vent te tombe compl&egrave;tement. C\'&eacute;tait suffisant pour avoir des premi&egrave;res sensations, mais cela n&eacute;cessitera un test plus approfondi.</p>
<p>Le d&eacute;collage se produit relativement t&ocirc;t, mais demande plus de vitesse qu\'avec le vini. De ce fait, il est plus progressif donc plus facile &agrave; g&eacute;rer. On retrouve sur ce point le type de comportement que l\'on a sur les 2 autres alus que sont le NP et e Zeeko, avec ici subjectivement un d&eacute;collage un peu plus pr&eacute;coce.</p>
<p>Comme avec les 2 foils que je viens de citer, le H10 n&eacute;cessite, une fois en l\'air, de continuer &agrave; pomper pour acc&eacute;l&eacute;rer et atteindre une vitesse suffisante pour qu\'il se stabilise. Si on ne fait pas cet effort, il tiendra en l\'air avec beaucoup d\'incidence, et va progressivement ralentir et retomber. C\'est quelque chose qui est plus marqu&eacute; qu\'avec le vini ou d\'autres foils plus puissants. Ce type de comportement rend les premiers vols stabilis&eacute; un peu moins intuitifs (&ccedil;a plait moins aux purs d&eacute;butants qui adorent les foils tr&egrave;s puissants), mais garanti en g&eacute;n&eacute;ral une plage d\'utilisation sup&eacute;rieure &agrave; la moyenne (ce point sera a v&eacute;rifier avec le H10 dans plus de vent).</p>
<p>&nbsp;</p>
<p><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-hhj1yrj4oW.jpg" /></p>
<p>Une fois en l\'air, le H10 apparait plut&ocirc;t stable sur l\'axe longitudinal. On est en dessous des Loke, AFS2, SB Race, mais bien au dessus des Vini, Select, NP F4, et &agrave; peu pr&egrave;s dans le m&ecirc;me ordre que les NP Alu, Zeeko, SB GT. De ce point de vue, et dans les conditions light, c\'est un foil rassurant et rapide &agrave; prendre en main.</p>
<p>Sur l\'axe lat&eacute;ral, on a par contre un foil peu cal&eacute;, mais tr&egrave;s sain. Pour la premi&egrave;re fois, on a un foil pas cal&eacute;, mais qui ne part pas en sucette ... c\'est tr&egrave;s agr&eacute;able. C\'est une sensation que je n\'avais jamais encore rencontr&eacute;e ainsi, mais que je vais essayer de d&eacute;crire.</p>
<p>Imaginons une bille qui se prom&egrave;ne sur un profil qui repr&eacute;sente l\'angle de g&icirc;te. Si je prends l\'exemple du haut, on voit que la bille veut revenir au centre m&ecirc;me si on l\'&eacute;carte fortement de sa position neutre. Il faut aller assez loin pour qu\'elle ne parte toute seule. C\'est un &eacute;quilibre tr&egrave;s stable jusqu\'&agrave; un angle de g&icirc;te important. Au contraire, dans le cas du bas, la bille ne restera jamais en &eacute;quilibre.</p>
<p style="text-align: center;"><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-oKDz6UK2NY.png" /></p>
<ul>
<li>On retrouvera l\'&eacute;quilibre lat&eacute;ral tr&egrave;s stable sur des foils comme les Loke, AFS2, Starboard, F4, et dans une moindre mesure sur les Select, NP alu, Zeeko (ces 2 derniers se rapprochant un peu plus du H10)</li>
<li>On aura un &eacute;quilibre stable au centre sur des foils comme le Vini par exemple, mais l\'&eacute;quilibre devient instable lorsque l\'on s\'&eacute;carte du centre.</li>
<li>Des foils comme le XtremFoil 2017, l\'aeromod, le manta 2017 et le Ketos pr&eacute;sente une instabilit&eacute; au centre</li>
<li>Enfin, les premi&egrave;res g&eacute;n&eacute;rations de foil correspondait souvent &agrave; la situation du foil instable</li>
<li>Le H10, dans ces conditions de vent l&eacute;ger, inaugure une nouvelle situation : le neutre jusqu\'&agrave; un angle important. A la fois, on n\'est pas cal&eacute;, &agrave; la fois c\'est sain car il ne part pas tout seul et on le contr&ocirc;le facilement.</li>
</ul>
<p>La cons&eacute;quence de cette stabilit&eacute; lat&eacute;rale tr&egrave;s neutre est une certaine facilit&eacute; &agrave; le mettre &agrave; la contre g&icirc;te, m&ecirc;me si la faible longueur du mat (et le vent trop faible aujourd\'hui) limite forc&eacute;ment les choses. En tout cas, ce comportement a l\'air parfaitement adapt&eacute; aux flotteurs pas trop large, comme nous avons d&eacute;j&agrave; pu le constater avec les RS:Flight AL et Zeeko</p>
<p>Au profit des quelques ris&eacute;es un peu plus fortes que les autres (11 knt max), j\'ai pu prendre un peu de vitesse sans constater une quelconque d&eacute;gradation de la stabilit&eacute;, ni aucune impression de torsion du foil : &ccedil;a a l\'air bien rigide ! Avec de la vitesse, le foil devient nettement plus porteur, et il est vite n&eacute;cessaire de mettre du poids sur l\'avant de la planche pour ne pas sortir de l\'eau. Il conviendra donc de voir jusqu\'&agrave; quelle plage de vent on restera serain en pilotage, mais les premi&egrave;res sensations le donnent plus facile que le Vini &agrave; ce niveau.</p>
<p>En terme de sensations de glisse, on n\'est pas du niveau des select, F4 ou AFS, mais subjectivement c\'est plut&ocirc;t sympa en regard avec la construction. Le fuselage et les assemblages un peu bruts sont &agrave; priori bien compens&eacute;s par des profils de bonne qualit&eacute;.</p>
<p><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-eDTXL6m9Xn.jpg" /></p>
<h3>Premier bilan</h3>
<p>M&ecirc;me si je m\'appuie sur un test tr&egrave;s court, les sensations sont dors et d&eacute;j&agrave; plut&ocirc;t convaincantes, et donnent envie d\'en savoir plus. En tout cas, la base a l\'air saine, et je me languis de voir ce qu\'il se passe dans un peu plus de vent (&agrave; la fois en terme de comportement que de solidit&eacute;). Si tout cela se confirme, et &agrave; moins de 700&euro;, le H10 va se faire une jolie place aux c&ocirc;t&eacute;s du RS:Flight AL dans le cr&eacute;neau des tr&egrave;s bons rapports efficacit&eacute; / prix. Par rapport &agrave; son cousin rose, Il faut juste accepter la construction \'&agrave; la serpe\' du fuselage et des assemblages, et une finition moins pouss&eacute;e ... mais c\'est une preuve qu\'on peut faire simple et efficace .. et fait en France.</p>
<p><img src="/storage/photos/1/2017-11/horue-h10-evo-2017-EIoKUSBOky.jpg" /></p>
<h3>Second test</h3>
<p>Le second test a &eacute;t&eacute; effectu&eacute; dans des conditions plus soutenues. Comme on l\'avait ressenti lors du premier test, la portance se d&eacute;place vite sur le pied avant lorsque la vitesse augmente. Je me suis permis de rajouter des cales sous le stab pour limiter cet effet. Cela permet de retarder l\'effet de lift, mais la portance devient quand m&ecirc;me trop pied avant au bout d\'un moment.</p>
<p>C\'est un effet qui se produit de fa&ccedil;on plus prononc&eacute;e qu\'avec les autres foils, et j\'analyse ceci par la souplesse du fuselage. Sa flexion doit donner de l\'incidence &agrave; l\'aile avant, ce qui a pour effet de renforcer la portance sous le pied avant.</p>
<p>Edit : Dans les versions livr&eacute;es &agrave; s&eacute;jour, la cale de stab a &eacute;t&eacute; revue pour que l\'on &eacute;vite de rajouter des rondelles comme de je l\'ai fait le jour de ce test. Nous re-testerons rapidement dans cette configuration.</p>
<p>Ce second test vient donc appuyer nos premi&egrave;res constatations : un foil tr&egrave;s sain et facile (stabilit&eacute; lat&eacute;rale), plut&ocirc;t performant dans le light pour un foil premier prix. Compte tenu de la relative souplesse du fuselage, on le conseillera toutefois &agrave; des gabarits de moins de 85kg, et plut&ocirc;t pour des flotteurs de largeur inf&eacute;rieur ou &eacute;gale &agrave; 75cm (Horue Tiny, Eco ou Freerace) qui seront utilis&eacute;s avec des voiles de tailles petites et moyennes (7m et moins).</p>
<p>&nbsp;</p>',
'test_equipment' => 'Flotteur : Tiny 110 / Gréement: Loft Skyscape 7m / mat MauiSail SRS100 / Wish E3 RTE 190',
'test_duration' => 3,
'test_conditions' => 'entre 5 et 10knt très irrégulier',
'test_place' => 'La Ciotat, LE Jai',
'created_at' => '2017-11-06 16:08:50',
'updated_at' => '2020-04-03 17:06:29',
),
25 => 
array (
'id' => 27,
'device_id' => 44,
'user_id' => 1,
'title' => 'Test Lokefoil Envol de série',
'body' => '<h4>Conditions du test</h4><p>Les conditions de test : La Ciotat, vent de N - N/O ... les connaisseurs apprécieront : vent ultra irrégulier entre 2 et 20knt. Plan d\'eau super plat par contre. Flotteur proto windfoil Tiaki et Voile E-Type North 5.8 avec mat platinium aero 430.<br></p><h4>Sur l\'eau</h4><p>Après réception des foils LOKO COMPOSITE ce matin, nous avons résisté au moins ... 2h (c\'est beaucoup) avant de nous jeter à l\'eau pour tester la bête. Suite aux excellentes impressions que nous avions eu cet été en testant le prototype, nous étions très impatient d\'en savoir plus sur le modèle de série.</p><p><img src="/storage/photos/1/2016-10/lokefoil-envol-2017-FKKSRqkJGg.jpg"><br></p><p>Malgré le vent très irrégulier, ce premier test rapide confirme nos premières impressions de l\'été : le LokeFoil est sans contest le foil le plus stable et le plus facile du marché à ce jour. On pourrait presque faire une belote en naviguant ! Je n\'avais pas foilé depuis 3 semaines, et j\'ai réussi à passer mon 2e jibe en l\'air (très fier ...)</p><p>Les minis restent moins bons qu\'avec le Horue car il nécessite un peu plus de vitesse pour déjauger. Il reste quand même sans le peloton de tête sur ce critère. Il est aussi et surtout numéro un, et sans contestation, sur la stabilité à la gite. Aucun départ à la gite ou contre gite à noter ... même pas une petite tendance. Cela dénote une conception très aboutie car c\'est le défaut de nombreux foils.</p><p><img src="/storage/photos/1/2016-10/lokefoil-envol-2017-YFBgWM1iAw.jpg"></p><p>Lorsque le vent monte, le loke sort de l\'eau assez vite car l\'aile est très porteuse. Il faut régler le flotteur en conséquence pour pouvoir continuer à rester en contrôle, ou rapidement baisser en toile. Sur notre flotteur de test, tout est prévu, et on peut facilement déplacer les straps vers l\'avant de 4 ou 5 cm pour retrouver un équilibre parfait.  </p><p>Voilà pour un premier test de l\'un de nos 2 foils préférés. On attend avec impatience nos F4 (qui partent aujourd\'hui des USA) pour les confronter à nos 2 références (Horue et Loke)... à très vite donc.</p><h4>Bilan</h4><p>Le loke foil est un foil de 3e génération conçu pour être utilisé sur un boitier deep tuttle positionné arrière (donc en restant sur le standard d\'une planche de slalom). En comparaison avec les autres fois de 3e génération, c\'est clairement le plus stable sur groupe (que ce soit longitudinalement ou latéralement) ... il permet de garder très facilement la même hauteur sur l\'eau et pardonne plus les petites erreurs de positionnement. De même, on se fait moins peur quand la vitesse augmente grâce à cette stabilité.</p><p>En contre partie, il est beaucoup moins maniable que le Viny et un peu moins performant en départ dans le très light (là ou la souplesse du Viny permet de pomper et partir très tôt). Il devient aussi un peu plus délicat quand le vent monte car il n\'est fourni qu\'avec une très grande aile (pour l\'instant) et il n\'est donc pas possible pour l\'instant de diminuer a portance dans le vent soutenu.</p><p>Au final le foil le plus facile que nous ayions eu l\'occasion de tester, mais avec une plage d\'utilisation un peu moins large que celle du Horue.</p><p><strong>Edit</strong> : suite aux journées test et découverte, le Loke est Le foil plébiscité pour son accessibilité par tous les débutants. Avec une aile plus performante qui risque d\'arriver, il peut devenir un choix absolument incontournable !</p><p><br></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2016-10-18 14:37:48',
'updated_at' => '2020-03-26 22:41:57',
),
26 => 
array (
'id' => 28,
'device_id' => 45,
'user_id' => 1,
'title' => 'windfoil - présentation de l\'aile Loke Perf',
'body' => '<p>Et hop, reçu en fin de semaine la nouvelle aile perf Loke. Test ce WE si Eole est avec nous :)</p><p>De visu, c\'est très différent de l\'aile envol ! Beaucoup plus rigide (on va échapper aux vibrations qui font de la musique), corde plus étroite, grand allongement et surtout un profil très différent. Cette fois, on n\'a presque plus de concavité sur l\'intrados de l\'aile ... la portance va être plus faible mais la trainée sera aussi certainement très réduite ! </p><p>William annonce une plage d\'utilisation à partir de 13-14 knt</p><p>Evidemment, et c\'est là le gros intérêt, cette aile perf est compatible avec le mat et stab de l\'envol ... une jolie évolution pour booster les perf de l\'envol quand le vent monte.</p><p><img src="/storage/photos/1/2017-06/lokefoil-perf-2017-m1XP9GcciH.jpg"></p><p><img src="/storage/photos/1/2017-06/lokefoil-perf-2017-LXL1DGsvNU.jpg"></p><p><img src="/storage/photos/1/2017-06/lokefoil-perf-2017-R47ZBoF4Q9.jpg"></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-06-26 21:14:26',
'updated_at' => '2020-03-26 22:41:57',
),
27 => 
array (
'id' => 29,
'device_id' => 46,
'user_id' => 1,
'title' => 'Windfoil - Aeromod Foil - Le test ',
'body' => '<p>Après des mois à entendre parler de ce foil aeromod sur les forums (dynamiques en com\' les gars !), j\'étais assez impatient de pouvoir le mettre sous une planche pour en savoir plus. A l\'occasion de notre conviviale à Serre Ponçon, Alexis Maréchal a donc eu la gentillesse de nous envoyer le sien pour le faire essayer autour de nous.
</p><p>Je précise qu\'il s\'agit du modèle avec mat "Haut module", proposé ici avec une aile Easy LW, et une Race. Dans cette configuration, il est vendu 1690eur avec l\'aile LW (aile easyrace en option : ajouter 270€).</p><h4>Présentation
</h4><p>Nous avons reçu le foil dans une housse maison multi-compartiment matelassée (option à 95€) qui protège parfaitement les différents éléments. Une petite trousse contenait toute la visserie et 2 cales destinées à mettre le bon angle sur le stab. Suivant les conseils d\'alexis, j\'ai utilisé la cale de 0.9 degrés.
</p><p>La finition est très belle autant en ce qui concerne l\'état de surface que les bords de fuite. Les saumons d\'ailes (extrémités) sont particulièrement fins (mais fragiles comme nous le verrons). Seuls les plans de joint sont perfectibles .. tout au moins au regard de ce qui se fait chez les meilleurs (Sb, NP, Select) mais c\'est nettement mieux que certains autres. A cours de ces 2 journées de test, l\'un des testeurs (au moins) a oublié de suivre les consignes quant à la profondeur de l\'eau sur le bord et est venu racler le fond caillouteux. Les extrémités de l\'aile LW n\'ont pas aimé du tout ce traitement ! On a bien perdu 2 ou 3mm de chaque côté. Il faudra donc être soigneux avec ces profils optimisés pour la glisse.
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/aeromod-easy-lw-hd-2017-2017-XpQoaBTE7n.jpg">
</p><p style="text-align: center;"><i>Une finition de qualité</i>
</p><p>Le montage est facile car tout s\'emboite sans problème. Le connexion mat / fuselage tient avec 2 vis mais c\'est à priori suffisant puisque rien n\'a bougé. De l\'avis général, on aimerai une connexion plus \'intégrée\' car la protubérance du fuselage au niveau de cette connexion a paru à beaucoup assez disgracieuse au regard du reste qui est assez fin.<br>
</p><p>L\'ensemble est très léger (2.8 kg en LW). Il est évident que le foil flotte, même si ce n\'est pas sa fonction de départ :) Le montage sur notre flotteur JP hydrofoil 135 n\'a pas posé de problème, mais je précise que c\'est la largeur maxi de flotteur préconisé par Aeromod, ce foil pas trop puissant étant conçu pour des planches entre 70 et 85 de large dans une optique freeride (navigation en glisse, flotteur à plat). On n\'a même pas eu à déplacer les straps : l\'équilibre longi était impec tel quel. Nous l\'avons également, au cours du WE, testé sur une NoveNove de slalom et la Horue Tiny avec des résultats équivalents.</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/aeromod-easy-lw-hd-2017-2017-hbh22vIXye.jpg">
</p><p style="text-align: center;"><i>L\'aeromod installé sur la JP Hydrofoil 135</i>
</p><h4>Sur l\'eau
</h4><h4>Décollage</h4><p>Le premier contact avec l\'aéromod en mode LW fait montre d\'un encombrement très faible sous la planche. Avant même le décollage, on sent qu\'il freine très peu la planche. Cela lui permet de prendre facilement de la vitesse et il en faut un peu pour que l\'aéromod décolle ... un peu comme le F4. Le décollage est plutôt progressif, et la stabilisation longitudinale est donc facile à maîtriser dans ces conditions light wind. Au fur et à mesure que nous enchaineront les bords, on verra que l\'aeromod équipé de l\'aile LW fait partie des foils qui décollent assez tôt. Non pas qu\'il décolle avec très peu de vitesse (comme un Horue XLW, Slingshot, Zeeko), mais plutôt, comme le select et le F4, qu\'il freine très peu la planche dans son accélération, et lui permet donc d\'atteindre rapidement sa vitesse critique.
</p><p>Subjectivement, en terme de capacité à décoller dans le très light, on est nettement derrière le Starboard Race (comme tous les autre foils que nous avons testé), et un poil derrière le couple Select / Horue XLW. On serait un peu devant le Horue LW et à peu près au niveau du AFS2 ou de l\'Envol, mais avec plus de dynamique sur l\'aeromod. Il réagit d\'ailleurs assez  bien au pumping sur le mat.
</p><h4>Glisse &amp; Stabilité</h4><p>Une fois lancé, l\'impression de glisse est très bonne, et c\'est que qui a été signalé par la plupart des testeurs. Ajouté à une très bonne stabilité longitudinale (en deça des loke, AFS2, starbaord, mais plus forte que F4, Vini, Select, Zeeko), c\'est ce qui a plût à tous les débutants débrouillés qui l\'ont testé avec assiduité toute une après midi. Pour la plupart habitués au Vini, ce groupe a dans l\'ensemble conclu à une accessibilité meilleure une fois en l\'air, mais un besoin de plus de vitesse pour décoller.
</p><p>Côté stabilité latérale, on retrouve exactement le comportement que nous avions eu l\'an passé sur le prototype XtremFoil 2016. Les 2 foils ont d\'ailleurs beaucoup de point communs, mais en particulier cette instabilité latérale autour du neutre. Cela veut dire que le foil ne se cale jamais vraiment .. un peu comme si on était en équilibre sur un tube cylindrique. Pourtant, on n\'a pas de vrai départ à la gîte comme avec le Mako 2016 ou le Fone, mais le foil se dandine en permanence, et cela induit également des mouvements de lacet. Du coup, la stabilité latérale est proche de celle du vini mais se ressent de façon complètement différente. Sur le Vini, on sent que le bas du foil est stable, mais que le mat est souple. Là, cela donne l\'impression que le mat est plus rigide, mais que c\'est l\'ensemble du foil, n\'arrive pas à se caler. Bon courage aux concepteurs pour en déterminer l\'origine :) .. mais à priori, Alexis a déjà des idées !
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/aeromod-easy-lw-hd-2017-2017-0dJfAF58MQ.jpg">
</p><p style="text-align: center;"><i>Renaud de retour de son test sur la NoveNove</i>
</p><h4>Contre gîte</h4><p>Grâce à un haut de mat rigide, on arrive à laisser basculer légèrement l\'aéromod à la contre gîte, mais là aussi, l\'instabilité latérale ne permet pas de caler cette position, et on revient vite à une navigation plus à plat pour pouvoir gérer, y compris au près. Les allures près et grand largue ne posent aucun problème, mais on est juste limité par notre difficulté à exploiter la largeur de la planche. Par contre, l\'angle de cap est plutôt bon pour un foil que l\'on laisse majoritairement à plat. On profite encore ici de la finesse des sections.
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/aeromod-easy-lw-hd-2017-2017-90PFrpSJYz.jpg">
</p><p style="text-align: center;"><i>Tristan au jibe après une grosse abatée</i>
</p><h4>Contrôle</h4><p>A la faveur du thermique qui a fini par s\'établir autour de 15knt, nous avons également testé l\'aeromod dans des conditions plus ventées d\'abord avec l\'aile LW, puis avec la easyrace. Avec le vent, un petit clapot est évidemment venu rendre les choses un peu plus pointues ... et là, l\'utilisation de l\'aeromod est devenu réellement moins agréable en comparaison avec la plupart des autres foils à notre disposition ce jour là. L\'instabilité latérale, qui limitait juste nos ardeurs dans le light, rend cette fois le contrôle plus complexe. Dès lors, on adopte un autre type de navigation plus debout, en glisse et avec moins d\'appui sur la voile pour rester en sécurité. Plus question de s\'appuyer réellement dans la voile dans ces conditions. Les 4 foileurs expérimentés ont partagé la même sensation ... mais il faut avouer que nous avons l\'habitude d\'utiliser des foils très stables latéralement comme les F4, Starboard, Select, Loke, AFS2, Zeeko, NP alu. La différence saute donc aux yeux quand on passe le l\'un à l\'autre à quelques minutes d\'intervalle, mais il faut signaler qu\'il y a quand même en écart de prix avec ces derniers (100eur avec le loke, 200 avec l\'AFS2 et 300 avec le starboard .. certes plus évolutif mais aussi accessible en version GT).</p><p><img src="/storage/photos/1/2017-08/aeromod-easy-lw-hd-2017-2017-aBXjoeJxB6.jpg">
</p><p style="text-align: center;"><i>Olé ! J</i><i>olie figure de style de Tristan qui tente de maîtriser la bête dans le petit clapot</i></p><h4>Conclusion
</h4><p>Le foil aeromod 2017 propose une glisse réussie et une puissance peu marquée, grâce à des sections fines et une belle finition. L\'équilibre et la stabilité longitudinale sont au rendez vous sur nos flotteurs test, mais c\'est sur la stabilité latérale qu\'il y a encore du travail de développement (en comparaison avec nos références). Le contrôle s\'en ressent nettement dès que le vent monte un peu et/ou que plan d\'eau devient clapoteux où il devient plus délicat. Cela limite l\'aeromod à une navigation en mode freeride flotteur plutôt à plat, même avec le mat haut module. Alexis ayant pas mal d\'idées pour faire évoluer le produit sur ces aspects, nous sommes impatient d\'en voir le résultat car la glisse et l\'accessibilité dans le light nous ont plût pour un produit proposé à un tarif sensiblement plus bas que nos autres références en carbone (entre 100 et 300eur).
</p><p><br>
</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-08-22 11:47:21',
'updated_at' => '2020-03-26 22:41:57',
),
28 => 
array (
'id' => 30,
'device_id' => 47,
'user_id' => 1,
'title' => 'Windfoil - Test starboard GT et flotteur Foil 147',
'body' => '<p>Conditions de vent : 10-18 knt</p><p>Spot : Martigues</p><p>Voile 6.0m2 gator (no cam)<br>
</p><p>Flotteur : Starboard Foil 147 technora</p><h4>Présentation</h4><p>Nous testons le foil dans une configuration fuselage court, aile et stab de grande taille. Dans cette configuration, nommée GT, il cible le débutant et le freerideur pour une approche intuitive de la pratique du foil.</p><p>Le tout est installé sur un flotteur spécial foil, renforcé, et conçu avec beaucoup de scoop pour limiter l’effet des touchettes ou amerrissages forcés. De nombreuses positions d\'inserts de straps permettent une grosse capacité d\'adaptation, voir même une utilisation avec aileron.</p><p><img src="/storage/photos/1/2017-04/starboard-85-carbon-2017-XtvrFscnMf.jpg"></p><h4>Sur l\'eau</h4><p>Avec cet ensemble, et malgré une voile Gator bien puissante, le départ planning est laborieux. Par rapport à toutes les planches de foil ou de slalom que nous avons utilisé, on a cette fois beaucoup de mal à prendre de la vitesse pour utiliser la portance du foil dans le light wind. On sent que la combinaison forte largeur, scoop important, poids moyen demanderai au moins un ou 2m2 de plus côté voile.</p><p>Une fois en l\'air, la portance est plutôt très bonne et le passage dans les molles de bon niveau, sans être exceptionnel. Le foil réagit au pumping mais on a vu bien mieux de ce côté. Là aussi, la planche ne doit pas aider par son inertie, et on a toujours constaté que les mats très raides n\'aidaient pas de ce côté. A contrario, ce type de design offre en général un comportement beaucoup plus sein dans le vent.</p><p>On a clairement <strong>le foil le plus rassurant que nous avions eu l’occasion d’essayer à ce jour</strong> ! La stabilité latérale est parfaite, au même titre qu’un F4, Zeeko ou NP. La stabilité longitudinale est parfaitement dosée : c’est presque aussi stable qu’un Loke, mais bien plus réactif que le AHD testé le même jour. </p><p>La combinaison entre l’équilibre du foil, la largeur de la planche, et sa stabilité permet de naviguer avec une facilité déconcertante même dans les rafales … à tel point que j’en étais à souhaiter sereinement des bonnes poussées là ou habituellement, on anticipe l’ouverture de la voile pour laisser passer la crise. La navigation au près et à la contre gîte est un jeu d’enfant grâce au grand mat ultra raide, et à la forte largeur du flotteur.</p><p>Côté glisse, on est dans la moyenne haute pour cette configuration GT, mais le starboard va vite … aucun doute la dessus, en particulier bien toilé et avec les ailes slalom : on a vu Antoine Questel à l’oeuvre  !</p><p><img src="/storage/photos/1/2017-04/starboard-85-carbon-2017-2U38SasBMh.jpg"></p><h4>Bilan</h4><p>Au final, l\'ensemble GT + Foil 147 nécessite un peu plus de vent et / ou de toile que la moyenne, avec une navigation en mode free-race. On sent qu’il est parfaitement exploitable avec la même voile que l’on utiliserait habituellement en freeride ou en slalom (là ou on sous-toile nettement avec un foil plus commun). Au même titre que le loke, c\'est un foil qui va beaucoup plaire aux débutants par son accessibilité, et aux slalomeurs, grâce à sa capacité à rester prévisible et rassurant dans des conditions de vent soutenu.</p><p>Avec ce premier contact <strong>très prometteur</strong> sur certains points, on est un peu frustré de ne pas avoir pu exploiter tout le potentiel du concept. On se languis de le re-tester avec un flotteur plus compétitif, les ailes et slalom le fuselage race … cela laisse présager des perfs de très haut niveau (je n\'ai pas de doute là dessus) et probablement de bien meilleurs minis, car c\'est bien là le challenge du foil ! </p><p>La suite très bientôt j\'espère car je n\'en resterai pas là, promis ;)</p><p><img src="/storage/photos/1/2017-04/starboard-85-carbon-2017-Yjw7rjx5QT.jpg"></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-04-24 00:34:25',
'updated_at' => '2020-03-26 22:41:57',
),
29 => 
array (
'id' => 31,
'device_id' => 53,
'user_id' => 1,
'title' => 'Windfoil - Test du Select Profoil F1',
'body' => '<h4>Conditions du test</h4>
<p></p>
<p>Test 1 : La Ciotat, Vent de Sud Ouest entre 10 et 18 knt très irrégulier, Voile V8 6.6 / Mat TPX100 430</p>
<p>Test 2 : Savine, Vent de 5 à 15 knt, Voile RS:Flight 7.8 /Mat TPX100 460</p>
<p>Flotteur Elix F1X</p>
<p>Aile 750 et Stab Pro B à La ciotat</p>
<p>Aile 850 et Stab Pro A à Savine</p>
<p><img src="/storage/photos/1/2017-07/select-profoil-f1-2017-h0QfVwC91R.jpg" /></p>
<h4>Présentation</h4>
<p>Je ne reviendrai pas sur le montage du foil qui a été présenté en détail dans <a href="/blog/windfoil-deballage-et-montage-du-select-profoil-f1.html">mon précédent post</a>. L’installation du foil sur la planche ne pose aucun problème et le calage est parfait dans forcer comme une mule .. on voit bien que Sélect et Elix ont travaillé ensemble pour définir le produit ! On verra par la suite que l\'équilibre est parfait.</p>
<h4>Décollage</h4>
<p>Comme avec tous les foils axés glisse (F4, Starboard, AFS2 ..), le décollage est assez progressif. Le foil réagit très bien au pumping sur le mat pour générer très vite de la portance. Avec les profils fins à grand allongements, il faut accélérer jusqu’à une vitesse critique (de l’ordre de 10 knt) pour que tout se stabilise. Dès lors, on peut juger du comportement du foil au regard des autres que nous connaissons.</p>
<p>En conditions limites de vent, le ProFoil F1 équipé de l’aile de 85cm fait partie des plus efficaces que nous ayons testés : sans être aussi bluffant que le Starboard Race, qui est désormais notre référence (après avoir détrôné d’une courte tête le Vini XLW), le Profoil se hisse avec facilité sur le podium, devançant les Loke, AFS2, Starboard GT, NP F4, NP Alu, Zeeko, Ketos, XtremFoil, Slingshot et autre Manta. Je précise que cette performance est autant due à la qualité du foil, la dynamique du mat, qu’à l’adéquation avec la Elix F1X. Nous avons testé le select sur la Horue SLANT et le résultat n’était pas du tout le même (aile positionnée trop en arrière vs straps sur cette configuration).</p>
<h4>De la glisse</h4>
<p>Immédiatement, à l’accélération, le premier caractère du Profoil se distingue : ce foil offre une glisse de fou. Avec le F4, il se place d’emblée sur la première marche du podium. La sensation dépasse ce que nous avions connu jusqu’ici … cette fluidité est autant indescriptible que jouissive. Il est très difficile de faire partager ce type de sensations, mais imaginez que vous passiez soudain, en voiture, d’une vieille route en mauvais état un bitume tout neuf et parfaitement réalisé … c’est un peu la sensation que vous éprouvez en passant sur le Profoil : quelques chose de fin, fluide, parfaitement silencieux. Vous n’allez pas forcément plus vite, mais quel plaisir !</p>
<p><img src="/storage/photos/1/2017-07/select-profoil-f1-2017-UZX2MP6uFd.jpg" /></p>
<h4>Stabilité et accessibilité</h4>
<p>Coté stabilité longitudinale, sélect a visiblement fait le choix de la réactivité au détriment de la stabilité extrême. On se situe de ce côté entre un Vini et un RS:Flight AL, donc bien plus stable qu’un RS:Flight F4, mais moins qu’un Loke, Starboard GT ou AFS2.</p>
<p>Côté stabilité latérale, là aussi, sélect propose un foil plutôt libre, moins calé que les F4, AFS2 et Starboard. C’est toutefois bien plus calé que les Vini, Manta, Slingshot, mako, ketos, kerfoil et autres. Visiblement, la rigidité en torsion du fuselage en carbone est beaucoup moins élevée que celle du starboard en alu (pour comparer à un foil également démontable, et construit dans des technologies comparables). En plus de l’influence sur le la stabilité latérale, cette relative souplesse se ressent en navigation avec un comportement bien moins imperturbable qu’avec les 3 foils cités précédemment, surtout dans le clapot. C’est plus vif, et on ressent plus les mouvements. Les réactions sont un peu plus complexes à gérer qu’avec d’autres. On voit clairement qu\'avoir la glisse Et la rigidité est difficile : tout est dans le compromis !</p>
<p>Au près, le profoil F1 est aussi plus compliqué de caler à la contre gîte (avec mon niveau ... car je doute pas que Benjamin le fasse les doigts dans le nez) que les 3 foils très rigide que nous avons cité ci dessus. Sur ce point, et à la lumière des nombreux tests que nous avons fait, le Starboard reste La Référence actuelle. </p>
<h4>Au près</h4>
<p><img src="/storage/photos/1/2017-07/select-profoil-f1-2017-XKT0XnK6bt.jpg" /></p>
<p>Comme nous venons de le voir, le Profoil F1 se cale moins facilement à la contre gîte que notre référence. On a donc plus de mal à travailler sur la puissance du foil en serrant le vent. Par contre, on peut jouer sur la finesse et la glisse pour atteindre une excellente vitesse à cette allure. On fera donc peut être un cap un peu moins serré, mais on pourra compenser par une excellente vitesse. Les traces GPS réalisées ce WE laisse quand même rêveur, et même si les starboard race et NP F4 permettent de plus serrer, le Profoil est juste derrière ...</p>
<p><img src="/storage/photos/1/2017-07/select-profoil-f1-2017-CAAlv3whG3.jpg" /></p>
<h4>Au largue</h4>
<p>De façon assez curieuse, le Profoil est par contre l’un des foils les plus facile à gérer au petit large. Là ou la plupart des foils passent en surpuissance, le sélect permet de continuer à mettre la poignée dans le coin bien plus longtemps sans se faire peur tant que la vitesse reste raisonnable. Cela en fait un foil très agréable à utiliser aux allures standard, mais probablement moins facile sur un parcours course Up &amp; Down pur.</p>
<p>Au grand largue (une allure assez proche du vent arrière en foil), le Profoil profite de son excellente glisse pour permettre des descentes très efficaces dans le vent léger. Dans des conditions musclées avec clapot, la relative souplesse du fuselage déssert un peu le contrôle.</p>
<p>Finalement, c\'est sur des allures travers que le Select se fait le plus chahuter, toujoures à cause de cette rigidité insuffisante.</p>
<h4>Bilan</h4>
<p>Il est temps de faire un premier bilan sur ce nouveau Sélect Profoil F1.</p>
<p>Alors que sur le papier, nous nous attendions à trouver un foil de course, concurrent des F4, SB ou AFS2, Sélect nous a concocté un foil que le qualifierai plutôt de freeride très haut de gamme, construit comme une vraie oeuvre d\'art. Un peu moins accessible que certains (loke et GT par exemple) d’un premier abord, le Profoil oppose la glisse et la finesse à la puissance, pour des prestations de très haut niveau, lorsque l’on ne cherche pas des allures extrêmes comme en course Up&amp;Down pour lesquelles il manque un peu de contrôle à notre gout. Sur des allures plus standard, le foil est tolérant … voir même facilitant, et tellement agréable dans le très léger. Il s\'approche à 2 doigts de notre référence absolue dans l\'ultra light tout en offrant une plage d\'utilisation sans commune mesure.</p>
<h4>Edit</h4>
<p>Après quelques mois d\'évolution dans le monde du foil, le Select perd un peu de sa superbe par rapport à tous les nouveaux modèles concurrents. Son plus gros point faible reste un fuselage et un bas de mat insuffisament rigides, qui compromettent le contrôle du foil dès que les conditions sortent du vent très léger.</p>
<p>Pour pallier à cet inconvénient, Select propose désormais 2 fuselages aluminium en remplacement de celui en Carbone. Disons le, cela fait faire un bon en avant au profoil, avec un contrôle sans commune mesure avec la version full carbone. Du coup, le foil devient plus agréable à toutes les allures dans le vent léger. Dans le vent medium à fort, ça reste insuffisant, surtout aux allures ouvertes (travers et largue) om on a un effet de foil qui gigotte. C\'est clairement le mat qu\'il faudrait rigidifier pour gommer cet inconvénient. </p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-07-30 23:30:27',
'updated_at' => '2020-03-26 22:41:57',
),
30 => 
array (
'id' => 32,
'device_id' => 54,
'user_id' => 1,
'title' => 'En configuration aile de 800 Race (115) et GTS (75)',
'body' => '<p><img src="/storage/photos/1/2017-07/starboard-95-carbon-2017-BJQtUOIuO0.jpg" /></p>
<h4>Carbone Foil GTS</h4>
<p>En configuration GTS, il faut environ 8 knt pour &ecirc;tre parfaitement &agrave; l\'aise. Le d&eacute;collage est assez progressif et d&egrave;s les premiers m&egrave;tres, on retrouve le c&ocirc;t&eacute; tr&egrave;s sain apport&eacute; par le mat tr&egrave;s rigide. Dans cette configuration, on a un foil &eacute;quilibr&eacute; (straps &agrave; fond devant et pied de mat &agrave; 135 sur la Elix) et r&eacute;actif. La stabilit&eacute; lat&eacute;rale est une r&eacute;f&eacute;rence, alors que la stabilit&eacute; longitudinales est interm&eacute;diaire entre un Vini et un AFS2. On est aussi un cran au dessus de la configuration SLALOM de ce c&ocirc;t&eacute;.</p>
<p>D&egrave;s notre vitesse de croisi&egrave;re atteinte, il est facile de g&eacute;rer l\'assiette et on n\'a aucune difficult&eacute; &agrave; &eacute;viter des sorties d\'eau : le foil ne g&eacute;n&egrave;re aucune surpuissance pied avant qui pourrait &ecirc;tre g&ecirc;nante. Il faut vraiment &ecirc;tre surtoil&eacute; pour que le ph&eacute;nom&egrave;ne apparaisse, mais je dirai qu\'il survient un peu plus tard qu\'avec beaucoup de foils (&agrave; l\'exception du NP Carbone).</p>
<p>Pour autant, les capacit&eacute;s de d&eacute;collage &agrave; basse vitesse restent excellentes sans sacrifier la glisse. Car c\'est l&agrave; l\'un des autres gros points forts de ce foil : il partage avec le NP carbone et l\'AFS2 une glisse de premier plan ... devant les Loke et autres Vini, et tr&egrave;s loin devant d\'autres. Cela donne une sensation de fluidit&eacute; tr&egrave;s agr&eacute;able.</p>
<p>Je ne reviendrai pas sur les capacit&eacute;s en contre g&icirc;te qui en font LA r&eacute;f&eacute;rence actuelle de ce c&ocirc;t&eacute; (on attend avec impatience la confrontation avec le Select ProFOIL F1 !). Dans cette position , les acc&eacute;l&eacute;rations sont juste un vrai kiff, d\'autant plus que le contr&ocirc;le apport&eacute; par la rigidit&eacute; Mat / Fuselage est excellent. Plus on navigue, plus on mesure l\'importance de ce param&egrave;tre ... et l\'&eacute;cart avec certains foils moins aboutis ou plus anciens quand la vitesse devient importante.</p>
<p>Au travers et au largue ... voir au vent arri&egrave;re, aucune vibration parasite, aucun mouvement g&ecirc;nant : difficile de faire plus serein ! .. pour l\'instant.</p>
<p>J\'ajoute juste que cette configuration GTS permet de jouer facilement sur la hauteur dans le gros clapot g&eacute;n&eacute;r&eacute; par les bateaux sillonnant la baie. Merci au mat de 95 : un tr&egrave;s gros plus quand on est sur un plan d\'eau un peu agit&eacute;. Pr&eacute;cisons toutefois que lors des sorties d\'eau avec un peu de vitesse, et comme avec le NP F4, le foil starboard raccroche facilement en g&eacute;n&eacute;ral sans d&eacute;crochage ... on &eacute;vite la plupart du temps la gamelle.</p>
<p><img src="/storage/photos/1/2017-07/starboard-95-carbon-2017-l1LmI5uK7n.jpg" /></p>
<h4>Carbone Foil RACE</h4>
<p>La configuration RACE (grande aile, grand fuselage, petit stab) est la derni&egrave;re que j\'ai eu l\'occasion de tester. J\'avoue qu\'elle m\'a un peu surpris (et pas en bien au d&eacute;part) car je n\'avais pas mesur&eacute; les cons&eacute;quences de ce choix.</p>
<p>Bien que cela puisse sembler curieux, cette configuration est radicalement diff&eacute;rente de la GTS. Mon premier test s\'est fait dans un vent irr&eacute;gulier entre 8 et 18 knt, et disons le tout de suite : ce n\'est pas adapt&eacute; &agrave; ce type de conditions ! Je me suis retrouv&eacute; dans les rafales avec un appui jambe avant quasi ing&eacute;rable sauf au pr&egrave;s tr&egrave;s serr&eacute; ... le bord de retour au largue a &eacute;t&eacute; ponctu&eacute; de 2 jolies sorties d\'eau et une belle boite !</p>
<p>Fort de ceci, le test suivant s\'est fait dans 6-10 knt en 7,8 et l&agrave;, les choses sont bien diff&eacute;rentes. Le d&eacute;collage est plus facile qu\'avec le GTS car on a plus vite de la puissance sous le pied arri&egrave;re au pumping. Par contre, d&egrave;s que &ccedil;a acc&eacute;l&egrave;re, &ccedil;a monte vite tr&egrave;s haut et il est difficile de redescendre ou de g&eacute;rer la hauteur. Sur la Elix, j\'ai &eacute;t&eacute; oblig&eacute; de tout mettre devant (pied de mat et strap) pour trouver un &eacute;quilibre entre 6 et 10 knt. Au del&agrave;, on se retrouve encore tr&egrave;s vite en surpuissance pied avant. Ma conclusion : l\'effet d&eacute;porteur du stab mont&eacute; sur le fuselage race est trop important avec des flotteurs d&eacute;di&eacute;s tr&egrave;s courts et tr&egrave;s l&eacute;gers devant. Fort de cette th&eacute;orie, j\'ai ins&eacute;r&eacute; 2 rondelles pour diminuer l\'incidence du stab, et &ccedil;a change la donne effectivement. Cette fois, j\'ai pu garder la configuration RACE jusqu\'&agrave; 15knt en 7.8 avec un ensemble g&eacute;rable ... et sans constater de perte dans le tr&egrave;s light. Pour les propri&eacute;taire de boards plus longues (planches de slalom, freeride ou Starboard FOIL 147), les rondelles ne seront pas utiles et pour le coup, il va &ecirc;tre parfait en standard dans les conditions tr&egrave;s light, y compris avec des grandes voiles.</p>
<p>Une fois le bon r&eacute;glage trouv&eacute;, j\'ai pu explorer les capacit&eacute;s de l\'ensemble et il ressort</p>
<ul>
<li>des minis exceptionnels (je pense objectivement avoir d&eacute;pass&eacute; ce que j\'arrivais &agrave; faire avec le Vini en XLW - ma r&eacute;f&eacute;rence) : quasi impossible de le faire se poser une fois lanc&eacute; ... sans pour autant mettre une aile &eacute;norme qui traine de l\'eau. En plus, je suis maintenant le Dieu de Michel (dixit) qui ne voulait pas croire que l\'on pourrait voler dans 6-7 knt ... hahaha : trop fier ;)</li>
<li>par rapport &agrave; la configuration GTS, on a un cap bien plus important ... je pense m&ecirc;me que j\'ai d&eacute;pass&eacute; ce que j\'&eacute;tais parvenu &agrave; faire avec le RS:Flight F4</li>
<li>un comportement tr&egrave;s sain m&ecirc;me avec des grandes voiles (7,5 &agrave; 8,5)</li>
</ul>
<p>Au final, ce foil race est atypique et attachant. Il a une plage d\'utilisation plus courte que la moyenne en standard, mais un r&eacute;glage du stab, et les options disponibles (GTS, SLALOM) permettent d\'&eacute;tendre ses possibilit&eacute;s de fa&ccedil;on quasi illimit&eacute;es. Je vais refaire des tests comparatif plus pouss&eacute;s, mais il devient &agrave; ce jour la r&eacute;f&eacute;rence sur 2 crit&egrave;res (la navigation dans l\'ultra light m&ecirc;me avec des grandes voiles, et les capacit&eacute;s de remont&eacute; au vent). Il montre surtout que la longueur de fuselage, en dehors de la stabilit&eacute; lontidudinale, a &eacute;galement une grosse influance sur l\'effet d&eacute;porteur (bras de levier oblige, c\'est assez logique) et les capacit&eacute;s dans le tr&egrave;s light.</p>
<p>Le Starboard Race dans 15 knt</p>
<p><img src="/storage/photos/1/2017-07/starboard-95-carbon-2017-BLsUCSOrJq.jpg" /></p>
<p>Ci dessous une petite trace GPS qui donne une id&eacute;es des capacit&eacute;s de remont&eacute;e au vent du Carbone Foil RACE sur 2 bords</p>
<p><img src="/storage/photos/1/2017-07/starboard-95-carbon-2017-L2tto7O1TB.png" /></p>
<h4>Le foil Starboard avec le temps</h4>
<p>Apr&egrave;s 7 semaines d\'utilisation et &agrave; peu pr&egrave;s 25 sorties, petit retour sur la fiabilit&eacute; du Starboard. Il me para&icirc;t important de faire un point car l\'utilisation de l\'aluminium et de la jonction Mat / Fuselage a fait couler beaucoup d\'encre.</p>
<p>Pour ce qui est de la corrosion : aucune trace observ&eacute;e &agrave; ce jour ... et pourtant je ne l\'ai pas rinc&eacute; &agrave; chaque fois ... loin de l&agrave; (pas bien, Eric !). Par contre, je l\'ai d&eacute;mont&eacute; &agrave; chaque fois (et des fois plusieurs fois par session pour tester les diff&eacute;rentes combianisons).</p>
<p>Pour ce qui est des ajustements, aucun jeu n\'apparait pour l\'instant dans la jonction Mat / Fuselage. Il peut sembler un peu fastidieux de mettre les 7 vis &agrave; chaque fois, mais cela assure une tr&egrave;s bonne fiabilit&eacute; de la liaison.</p>
<p>Je pr&eacute;cise par contre qu\'il est important de tr&egrave;s bien serrer toutes les vis. J\'ai eu au d&eacute;part plusieurs d&eacute;-serrages (heureusement sans aller jusqu\'&agrave; la perte) et l\'un de nos client a d&eacute;j&agrave; perdu 2 vis. Je fais plus attention d&eacute;sormais, mais avec le temps, les inserts qui traversent le fuselage bougent un peu dans leur logement, et il devient difficile d\'avoir un tr&egrave;s bon serrage car cela tourne dans le vide d\'un c&ocirc;t&eacute; quand on serre de l\'autre. Je conseille de vous &eacute;quiper de 2 cl&eacute;s torx pour bloquer un c&ocirc;t&eacute; quand on serre de l\'autre (une seule fournie).</p>
<p>J\'&eacute;tais &eacute;galement tr&egrave;s favorable &agrave; la mallette fournie pour le transport. A l\'usage, elle est tr&egrave;s pratique et prot&egrave;ge parfaitement le foil, mais les mousses internes m&eacute;riteraient d\'&ecirc;tre un peu plus rigides et mieux coll&eacute;es. A l\'usage, les mousses vieillissent un peu trop vite &agrave; mon gout. C\'est un point &agrave; am&eacute;liorer mais le principe est parfait !</p>
<p><img src="/storage/photos/1/2017-07/starboard-95-carbon-2017-yweUmdc8y9.jpg" /></p>',
'test_equipment' => 'Flotteur : Elix F1X / Voile RS:Flight 7.8, V8 6.7, RSR Evo 9 7.8, RSR Evo 9 6.4 (merci Michel pour tes voiles :) )',
'test_duration' => 3,
'test_conditions' => '8-15 knt',
'test_place' => 'St Florent et Sant\'Amanza',
'created_at' => '2017-07-26 13:35:13',
'updated_at' => '2020-03-26 22:41:57',
),
31 => 
array (
'id' => 33,
'device_id' => 54,
'user_id' => 1,
'title' => 'En mode Slalom : Aile de 550 et fusleage 75',
'body' => '<p>&nbsp;</p>
<p><img src="/storage/photos/1/2017-06/starboard-95-carbon-2017-aZb8GxnxJY.jpg" /></p>
<h4>Pr&eacute;sentation</h4>
<p>Je ne reviendrai pas ici sur le montage du foil et sa tr&egrave;s belle construction, que j\'ai abord&eacute; sur l\'article "<a href="/blog/windfoil-deballage-et-montage-du-starboard-slalom.html">d&eacute;ballage et montage</a>". Rappelons juste que le mod&egrave;le SLALOM est constitu&eacute; par la combinaison Mat 95cm, Fuselage 75cm, Aile 550, Stab 330 ... la cible est donc la navigation dans un vent moyen &agrave; soutenu (gros gabarit) ou vent faible &agrave; moyen (petit gabarit)</p>
<p>Le montage sur la planche ne pose aucun probl&egrave;me ... l\'ajustement est plut&ocirc;t serr&eacute;. Point tr&egrave;s positif : les per&ccedil;ages au dessus des inserts sont oblongs, et permettent une mise en place des vis sans forcer m&ecirc;me quand les per&ccedil;ages de la planche ne sont pas parfaitement dans l\'axe (et c\'est trop souvent le cas !).</p>
<p><img src="/storage/photos/1/2017-06/starboard-95-carbon-2017-aMwRu6XYaP.jpg" /></p>
<h4>Premi&egrave;res sensations</h4>
<p>Lorsque je me suis mis &agrave; l\'eau, tout le monde sortait en d&eacute;crivant un vent tombant. Malgr&eacute; des bonnes ris&eacute;es au large, j\'ai quand m&ecirc;me toil&eacute; 6.7 pour ne pas risquer de rester sur le carreau ... ne connaissant pas les capacit&eacute;s de d&eacute;collage de cette aile de 550. J\'avoue que j\'avais peur d\'avoir un vent trop faible pour l\'exploiter.</p>
<p>A la premi&egrave;re ris&eacute;e, je mets la planche au planning assez facilement, mais le d&eacute;collage n\'est pas automatiquement comme j\'en ai l\'habitude. En poussant sur la jambe arri&egrave;re, il vient tr&egrave;s progressivement, et la planche fini par monter franchement et bien &agrave; plat. Habitu&eacute; &agrave; naviguer avec des grandes ailes, j\'avais oubli&eacute; que, comme avec le F4, il fallait d&eacute;clencher le d&eacute;collage sur ces petites ailes.</p>
<p>D&egrave;s que je remets du poids sur la jambe avant, la mont&eacute;e stoppe et la planche acc&eacute;l&egrave;re franchement. En quelques m&egrave;tres, je m\'habitue au comportement du foil &agrave; plat en testant la r&eacute;action aux transferts de poids longitudinaux. Imm&eacute;diatement, je le classifierait dans la cat&eacute;gorie des foils relativement stables sur l\'axe longitudinal. On est subjectivement entre le Horue Vini et le Zeeko .. donc bien plus stable que le RS:Flight F4, mais bien en dessous d\'un Loke ou autre AHD.</p>
<p>Apr&egrave;s une petite 100aine de m&egrave;tre, je passe dans des ris&eacute;es plus fortes, et l\'acc&eacute;l&eacute;ration devient tr&egrave;s franche ... il a de la glisse le bougre ! Pour une prise en main, on va &eacute;viter de s\'en mettre une tout de suite, alors je lofe franchement pour contenir l\'acc&eacute;l&eacute;ration. La r&eacute;action est sans surprise et imm&eacute;diate, sans aucun effet de d&eacute;part &agrave; la g&icirc;te. En serrant un peu plus au pr&egrave;s, je me rends compte que depuis le d&eacute;but, tout semble \'parfaitement dans l\'axe\'. Derri&egrave;re cette sensation un peu difficile &agrave; d&eacute;crire, il y a surtout un foil qui semble imperturbable en lacet et en transversal ... c\'en est m&ecirc;me surprenant.</p>
<h4>Au pr&egrave;s</h4>
<p>Pour en savoir plus, je m\'appuie dans la voile et je commence &agrave; mettre le flotteur &agrave; la contre g&icirc;te. L&agrave;, &ccedil;a descend tout seul : aucune r&eacute;sistance ! J\'en suis m&ecirc;me surpris au point que j\'oublie un peu vite de rester l&eacute;ger sur le pied arri&egrave;re. La sanction est imm&eacute;diate avec un foil qui monte et manque de sortir de l\'eau. Heureusement, le mat de 95 est ultra long et j\'ai le temps de corriger avant la sanction ... ouf ! Eh oui, quand on tire sur la main arri&egrave;re, on a souvent le mauvais r&eacute;flexe d\'appuyer &eacute;galement sur le pied arri&egrave;re. Il faut en fait penser &agrave; appuyer dans le harnais pour pousser sur le pied de mat et r&eacute;&eacute;quilibrer l\'ensemble.</p>
<p>Une fois le foil bien en main, j\'arrive &agrave; le caler &agrave; la contre g&icirc;te comme jamais je ne l\'avais fait auparavant. Du coup, la vitesse au pr&egrave;s semble tr&egrave;s &eacute;lev&eacute;e ... sans pour autant ressentir le moindre flottement. Le mat a l\'air ultra raide !</p>
<p>Je jibe ... presque sans poser (!) d&eacute;cid&eacute;ment tr&egrave;s saint !</p>
<h4>Au largue</h4>
<p>C\'est reparti pour un bord abattu afin de retourner &agrave; notre point de d&eacute;part. Cette fois, l\'acc&eacute;l&eacute;ration est franche, et la pression vient progressivement sur le pied avant. Assez vite, il faut faire quelque chose pour ne pas sortir de l\'eau. Deux options : ouvrir pour ralentir (bof) ou remettre du poids devant en poussant dans le harnais. Evidemment, la 2e option est plus sympa et sans me mettre dans le rouge, je me laisse descendre doucement sur le harnais et je me fais un grand bord en savourant la surprenant stabilit&eacute; de l\'ensemble &agrave; cette vitesse.</p>
<p>Apr&egrave;s une micro pause r&eacute;glage, je repars pour faire une petite dizaine de bords aux c&ocirc;t&eacute;s de Eric Thi&eacute;m&eacute;, qui semble s\'amuser autant que moi ! C\'est un vrai plaisir de partager ces sensations addictives avec un gars qui a &eacute;t&eacute; l\'un de mes idoles pendant toute la jeunesse. A l\'issue de notre petit jeu, le GPS indique d&eacute;j&agrave; une Vmax &agrave; 22knt.</p>
<h4>De la glisse</h4>
<p>Au cours de cet apr&egrave;s midi, j\'ai enchain&eacute; les bords, tour &agrave; tour avec Eric T., Benoit M., Franck L. et Bruno Andr&eacute;. J\'ai test&eacute; toutes les allures, du pr&egrave;s ultra serr&eacute; au tr&egrave;s grand largue. N\'aimant pas me mettre dans le rouge, j\'ai navigu&eacute; en s&eacute;curit&eacute; et sans forcer. Le GPS est mont&eacute; jusqu\'a 25 knt en Vmax ... bien loin de Bruno Andr&eacute; qui a sign&eacute; cet apr&egrave;s midi plus de 26knt moyen sur 500M !!! Intouchable ! Il faut le voir partir &agrave; l\'abatt&eacute; en 7m avec casque et gilet dans les plus grosses ris&eacute;es : grosse ma&icirc;trise et gros coeur (faut border ! comme il dit ... faut il avoir les c... de la faire =;) ).</p>
<h4>Bilan</h4>
<p>Il est temps de faire un premier bilan sur ce nouveau Starboard SLALOM</p>
<p>On a clairement l&agrave; un foil tr&egrave;s tr&egrave;s int&eacute;ressant. L\'ensemble mat / fuselage ultra raide permet d\'avoir un chassis tr&egrave;s neutre qui fait merveille &agrave; haute vitesse et au pr&egrave;s. Rien ne bouge , aucune sensation de flou ! A ce jour, c\'est aussi le foil avec lequel j\'ai le mieux pu exploiter la contre g&icirc;te pour trouver des angles de remont&eacute; au vent incroyables. Il partage avec le F4 des aptitudes tout &agrave; fait exceptionnelles de ce c&ocirc;t&eacute;.</p>
<p>La glisse, qui semble subjectivement un poil en dessous de celle du F4, est compens&eacute;e par une accessibilit&eacute; bien meilleure. Naviguer &agrave; vitesse soutenue cal&eacute; dans le harnais devient enfin quelques chose de r&eacute;alisable sans risque.</p>
<p>Le d&eacute;collage, tr&egrave;s progressif, est finalement assez surprenant pour une aile de 550. Bien s&ucirc;r, on est loin des capacit&eacute;s d\'une grande aile, mais avec mes 78kg, cette aile est parfaitement utilisable de 12 &agrave; 25 knt, ce que je n\'aurai pas imagin&eacute;.</p>
<p>Au final, le combo avec la JP n\'est pas loin de la perfection. L\'ensemble est parfaitement &eacute;quilibr&eacute; et je n\'ai pas eu &agrave; retoucher la position des straps. On est tr&egrave;s l&eacute;g&egrave;rement pied avant &agrave; haute vitesse ...mais juste de quoi pouvoir s\'appuyer sur le pied de mat pour caler le gr&eacute;ement.</p>
<p>&nbsp;</p>
<p>Apr&egrave;s 2 ans de pratique et plus de 20 mod&egrave;les test&eacute;s, le Starboard SLALOM fait &agrave; ce jour partie de mes 2 foils pr&eacute;f&eacute;r&eacute;s ... tout simplement ! J\'ai pris beaucoup de plaisir aujourd\'hui, et je ne me languis que d\'une chose, tester les autres combinaisons, entre autre avec l\'aile de 800, et le fuselage de 115.</p>
<p><span style="color: #c0504d;">Point important n&deg;1 : Attention, je ne dis pas que c\'est LE meilleur foil ! C\'est l\'un de ceux que je pr&eacute;f&egrave;re par rapport &agrave; ce que JE recherche aujourd\'hui (stabilit&eacute; lat&eacute;rale, cap et acc&eacute;l&eacute;ration, contre g&icirc;te, glisse), mais cela n\'enl&egrave;ve rien &agrave; des foils diff&eacute;rents (pas moins bien, pas mieux) qui seront plus ax&eacute;s navigation &agrave; plat et dans le light ... ce que j\'appelle freeride</span>.</p>
<p><span style="color: #c0504d;">Point important n&deg;2 : </span><span style="color: #c0504d;">cet test met encore une fois en exergue l\'importance de l\'association flotteur / foil. Lors de notre pr&eacute;c&eacute;dent test du Starboard (certes, mod&egrave;le GT, mais c\'est de la m&ecirc;me trempe), nous &eacute;tions rest&eacute; sur notre faim &agrave; cause d\'une planche trop lourde. Avec une planche d&eacute;di&eacute;e plus adapt&eacute;e, le visage de l\'ensemble change compl&egrave;tement ... alors oui, un flotteur d&eacute;di&eacute; est cher, mais c\'est un investissement qui peut se faire dans un 2e temps et qui apporte tellement au r&eacute;sultat de l\'ensemble (en terme de plaisir surtout).</span></p>
<p>Et un grand merci &agrave; Bouboul et Eric pour leur accueil, sourire en plus (toujours aussi motiv&eacute;s apr&egrave;s des 10aines d\'ann&eacute;es) !</p>
<p><img src="/storage/photos/1/2017-06/starboard-95-carbon-2017-IQbxCzIkJT.jpg" /></p>',
'test_equipment' => 'Flotteur : JP Hydrofoil 135 / Gréement : Voile NeilPryde V8 6.7, Mat TPX100 430, wishbone AL360',
'test_duration' => 2,
'test_conditions' => 'Vent Est 15-20 knt',
'test_place' => 'Almanarre Funboard center',
'created_at' => '2017-06-08 23:34:16',
'updated_at' => '2020-03-26 22:41:57',
),
32 => 
array (
'id' => 34,
'device_id' => 56,
'user_id' => 1,
'title' => 'Printemps du foil 2017 - Compte rendu',
'body' => '<p>À l\'occasion du printemps du Foil , nous avons eu l\'occasion de peaufiner pas mal de tests matériels. Ce type de journée est juste parfaite pour faire des essais croisés Foil + Board, et de confronter plusieurs modèle dans les mêmes conditions, avec l’avis de plusieurs riders.</p><p>Lieu : Port St Louis</p><p>Conditions du test : </p><ul>
<li>1er jour light entre 8 et 15 knt, navigation en 7m2</li>
<li>2e jour vent très irrégulier entre 10 et 25 knt</li>
</ul><h4><img src="/storage/photos/1/2017-05/mantafoil-windfoil-2017-7WWeixSARD.jpg"><br></h4><h4>Les foils aluminium</h4><p>Commençons par une comparaison entre les 3 foils aluminium que nous avions à disposition : Neil Pryde RS:FLIGHT AL, ZEEKO ailes FR, Manta Foil. Nous aurions voulu également intégrer le H10 de chez Horue mais celui ci n’était pas encore disponible.</p><h4>Décollage</h4><p>Peu de différence notable entre les 3 foils alu dans le light. Le vent irrégulier n’a pas permis de les départager quand à leur faculté à décoller. Subjectivement, petit avantage au NP pour son décollage légèrement plus précoce et son passage dans les molles. Par contre, les Zeeko et Manta prennent l’avantage côté sensation de glisse dans le très light, sans que la différence de vitesse ne soit visible. </p><h4>Cap et vitesse</h4><p>Grâce à son mat plus large et plus rigide, le NP fait mouche au cap. Avec le Zeeko, ce sont les 2 plus faciles à mettre à la contre gîte. Le NP offre aussi une stabilité supérieure quand le vent et la vitesse deviennent plus soutenus. Le zeeko, plus réactif que le NeilPryde, prend l’avantage en vitesse dans ces conditions, tandis que le Manta souffre par l’excès de souplesse du mat. Il devient moins sécurisant avec des instabilités latérales, et de vives réactions longitudinales. </p><p>A vitesse soutenue, le Zeeko et le Manta deviennent très porteurs avec un appui jambe avant marqué. Le NeilPryde reste, quant à lui, le plus facile à gérer dans le vent. Zeeko propose un deuxième jeu d’aile pour ses conditions, alors que cette option n’est pas disponible NP (et probablement pas nécessaire).</p><h4>Equilibre</h4><p>En terme d’équilibre, les Manta et Zeeko sont plutôt pied avant, ce qui favorise l’appui sur le gréement pour remonter au vent, mais peut devenir plus délicat dans le vent. Le NeilPryde est plus pied arrière, ce qui favorise la facilité dans le vent, et l’accessibilité pour le windsurfeur habitué à se pencher en arrière. Dans tous les cas, ce caractère peut être modulé en déplaçant les straps sur la planche ou en modifiant les calages de stab.</p><h4>Synthèse</h4><p>La synthèse de ce test des foils aluminium nous donne un foil NeilPryde surprenant par sa plage d’utilisation énorme, une accessibilité de premier plan et des performances homogènes. Le Zeeko, plus vif et un peu plus technique, offre un potentiel de vitesse supérieur, grâce à 2 jeux d’ailes pour adresser la plage de vent. Le Manta, dont le mat est beaucoup plus souple, est sensitif dans le light, mais devient rapidement plus technique que les 2 autres quand le vent monte.</p><h4>Combo NeilPryde</h4><p><img src="/storage/photos/1/2017-05/mantafoil-windfoil-2017-YBbjaGuEde.jpg"></p><p>Ce printemps du foil a été l’occasion pour la première fois de tester le combo NeilPryde complet avec la JP hydrofoil 135 pro édition, le RS:Flight F4 et la voile RS:FLIGHT</p><p>Disons le tout de suite : cet ensemble très équilibré et homogène a fait l’unanimité des habitués du windfoil. Le foil est un poil plus accessible que la version F4 originale grâce à une meilleur stabilité. On garde la même glisse unique et la même qualité de rigidité extrême du mat, gage de performance au cap et dans le vent. Le flotteur offre juste ce qu’il faut de largeur pour pouvoir exploiter la puissance du foil. </p><p>Même si l’ensemble est utilisable dans le vent léger par un winfoileur de niveau moyen, seuls des pratiquants très expérimentés pourront tirer parti de ce produit exceptionnel dans le vent, notamment pour arriver à stabiliser le foil en bordant dans les risées.</p><h4>RS:Flight en 7m2</h4><h4><img src="/storage/photos/1/2017-05/mantafoil-windfoil-2017-XhhUJkoblv.jpg"></h4><p>Gréé cette sur un mat Reptile Green-Mamba 100% 430, la voile nous est apparu beaucoup moins physique et raide que lors de notre essai à la Ciotat. Je rappelle que lors du premier test, nous avions utilisé un FLX100 460. L’option du 430 est donc parfaitement justifiés pour les gabarits de moins de 85kg.</p><p>Comme toujours, NeilPryde nous offre une voile extrêmement dynamique, qui fait fureur au pumping dans le vent léger. La puissance ainsi générée dans le vent léger, ne se fait pas au détriment de la tenue dans les rafales, contrairement à la voile que j\'utilise habituellement en windfoil. </p><p>Contrairement aux voiles de slalom classique, la RS:FLIGHT a la capacité à être peu étarquée au guindant pour naviguer avec du creux et une chute plus tendue. Elle ne devient pas pour autant camion.</p><p>Avec un mat très dynamique (GM100, TPX100, SPX95), c\'est un combo parfait pour le vent léger, car même si la voile est bien plus lourde et puissante que la V8, elle reste agréable pour quelqu\'un d\'un peu entraîné.</p><p>Nuançons tout de même ce dernier point : si la RS:FLIGHT est plus souple et plus légère qu’une voile de slalom, cela reste un produit réservé à des windsurfeurs techniques et entrainés. </p><h4>Ketos windfoil 2017</h4><h4><img src="/storage/photos/1/2017-05/mantafoil-windfoil-2017-xy8CDaO7FV.jpg"></h4><p>Après un rapide aperçu il y a un mois, nous avons enfin pu passer un peu plus de temps sur le nouveau Ketos.</p><p>On confirme l’énorme progrès par rapport à la version 2016. </p><p>Les problèmes de départ à la gîte sont réglés, même s\'il reste une petite instabilité en lacet.</p><p>Le décollage est un peu laborieux par rapport à la concurrence. L’aile ayant pourtant une portance importante, on met ceci sur le compte du calage du foil vs le flotteur. </p><p>Lors des touchettes ou lorsque rail effleure l’eau au gibe, le flotteur ’suce’ et ralenti anormalement. C’est un comportement que nous n’avions pas avec les NP, Loke, Manta, Horue sur le même flotteur. Ceci accrédite notre analyse concernant le calage du mat dans le boitier. </p><p>Dans le vent, la portance de l’aile devient vite trop importante et nécessitera de descendre sur un modèle plus petit pour rester en sécurité.</p><p>Côté équilibre, le Ketos est très pied arrière. Ceci a beaucoup plût aux débutants windfoil car ils ont trouvé ce comportement rassurant et pas trop éloigné de leur habitudes en windsurf</p><h4>AHD AFS2</h4><p>Après un premier test un peu mitigé lors du national à Martigues, nous voulions en savoir plus sur l’AFS2 de AHD. En suivant les conseils de Renaud, nous avons  cette fois monté le foil sur un prototype de flotteur 100% windfoil Sun7. Le flotteur est beaucoup plus court et plus large à l’arrière.</p><p>Dans cette configuration, le foil change de visage et le côté bloqué en longitudinal s’estompe au profit de plus de vivacité. L’appui pied avant dans le vent devient également moins marqué avec l’aile de 700. </p><p>Côté équilibre, stabilité et sensation, on se rapproche beaucoup du LokeFoil. On a l’accessibilité offerte par la grosse stabilité longitudinale, le côté sein d’un mat relativement raide. La glisse est toutefois meilleure que celle du Loke Envol. Par contre, le décollage est un peu moins rapide.</p><p>Comme avec le foil breton, la grosse stabilité longitudinale simplifie énormément l’apprentissage du Jibe. </p><p>Au final un test concluant et un foil très plaisant à utiliser, offrant accessibilité et bonnes performances. Cette expérience montre, une fois de plus, que le flotteur a une vraie influence sur le comportement du foil ! Encore faut il trouver le bon mariage …</p><h4>Flotteurs TIAKI</h4><h4><img src="/storage/photos/1/2017-05/mantafoil-windfoil-2017-o3VRLpbXfR.jpg"></h4><p>Lors de ce printemps du foil, la plupart des tests ont été fait à l\'aide des flotteurs prêtés par "TIAKI Custom Shape" (en plus de la Sun7, les Horue Slant et Tiny, la Papenoo et la JP Hydrofoil). Ces flotteurs spécifiques de 110 à 130L ont prouvés leur capacité à s\'adapter à de nombreux foils grâce à leur shape étudié et aux réglages possibles.  Les utilisateurs ont appréciés leur accessibilité et leur confort (répartition de volume, glisse, touchettes, position des straps).</p><h4>Conclusions </h4><p>Au final, ces journées de test ont confirmé que</p><ul>
<li>le mariage foil / flotteur est un élément capital dans le plaisir ressenti, et dans le comportement du foil</li>
<li>les foils alu, tout récents, sont capables de détrôner bon nombre de foil carbone des années précédentes </li>
<li>un foil plutôt équilibré pied arrière est plus rassurant dans le vent, alors qu’un foil équilibré plus pied avant (raisonnablement) facilite la remonté au vent dans le light, mais demande un peu plus d’habitude . Le déplacement des straps ou du foil permet d’adapter le comportement. Un réglage de position de l’aile (RSX), du mat (Zeeko), ou des ailes gros temps offrant un centre poussée plus reculés (Horue) sont des solutions pour adapter le foil aux conditions</li>
<li>un manque de standardisation des boitiers tuttle, de la taille et de l’axe des vis, du calage des talons nécessite de bien préparer l’ajustement pour ne pas faire ça à l’arrache sur le spot.</li></ul>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-03 00:10:29',
'updated_at' => '2020-03-26 22:41:57',
),
33 => 
array (
'id' => 35,
'device_id' => 57,
'user_id' => 1,
'title' => 'Printemps du foil 2017 - Compte rendu',
'body' => '<p>À l\'occasion du printemps du Foil , nous avons eu l\'occasion de peaufiner pas mal de tests matériels. Ce type de journée est juste parfaite pour faire des essais croisés Foil + Board, et de confronter plusieurs modèle dans les mêmes conditions, avec l’avis de plusieurs riders.</p><p>Lieu : Port St Louis</p><p>Conditions du test : </p><ul>
<li>1er jour light entre 8 et 15 knt, navigation en 7m2</li>
<li>2e jour vent très irrégulier entre 10 et 25 knt</li>
</ul><h4><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-al-2017-vShOb0yIRy.jpg"><br></h4><h4>Les foils aluminium</h4><p>Commençons par une comparaison entre les 3 foils aluminium que nous avions à disposition : Neil Pryde RS:FLIGHT AL, ZEEKO ailes FR, Manta Foil. Nous aurions voulu également intégrer le H10 de chez Horue mais celui ci n’était pas encore disponible.</p><h4>Décollage</h4><p>Peu de différence notable entre les 3 foils alu dans le light. Le vent irrégulier n’a pas permis de les départager quand à leur faculté à décoller. Subjectivement, petit avantage au NP pour son décollage légèrement plus précoce et son passage dans les molles. Par contre, les Zeeko et Manta prennent l’avantage côté sensation de glisse dans le très light, sans que la différence de vitesse ne soit visible. </p><h4>Cap et vitesse</h4><p>Grâce à son mat plus large et plus rigide, le NP fait mouche au cap. Avec le Zeeko, ce sont les 2 plus faciles à mettre à la contre gîte. Le NP offre aussi une stabilité supérieure quand le vent et la vitesse deviennent plus soutenus. Le zeeko, plus réactif que le NeilPryde, prend l’avantage en vitesse dans ces conditions, tandis que le Manta souffre par l’excès de souplesse du mat. Il devient moins sécurisant avec des instabilités latérales, et de vives réactions longitudinales. </p><p>A vitesse soutenue, le Zeeko et le Manta deviennent très porteurs avec un appui jambe avant marqué. Le NeilPryde reste, quant à lui, le plus facile à gérer dans le vent. Zeeko propose un deuxième jeu d’aile pour ses conditions, alors que cette option n’est pas disponible NP (et probablement pas nécessaire).</p><h4>Equilibre</h4><p>En terme d’équilibre, les Manta et Zeeko sont plutôt pied avant, ce qui favorise l’appui sur le gréement pour remonter au vent, mais peut devenir plus délicat dans le vent. Le NeilPryde est plus pied arrière, ce qui favorise la facilité dans le vent, et l’accessibilité pour le windsurfeur habitué à se pencher en arrière. Dans tous les cas, ce caractère peut être modulé en déplaçant les straps sur la planche ou en modifiant les calages de stab.</p><h4>Synthèse</h4><p>La synthèse de ce test des foils aluminium nous donne un foil NeilPryde surprenant par sa plage d’utilisation énorme, une accessibilité de premier plan et des performances homogènes. Le Zeeko, plus vif et un peu plus technique, offre un potentiel de vitesse supérieur, grâce à 2 jeux d’ailes pour adresser la plage de vent. Le Manta, dont le mat est beaucoup plus souple, est sensitif dans le light, mais devient rapidement plus technique que les 2 autres quand le vent monte.</p><h4>Combo NeilPryde</h4><p><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-al-2017-R2LG6b2fhu.jpg"></p><p>Ce printemps du foil a été l’occasion pour la première fois de tester le combo NeilPryde complet avec la JP hydrofoil 135 pro édition, le RS:Flight F4 et la voile RS:FLIGHT</p><p>Disons le tout de suite : cet ensemble très équilibré et homogène a fait l’unanimité des habitués du windfoil. Le foil est un poil plus accessible que la version F4 originale grâce à une meilleur stabilité. On garde la même glisse unique et la même qualité de rigidité extrême du mat, gage de performance au cap et dans le vent. Le flotteur offre juste ce qu’il faut de largeur pour pouvoir exploiter la puissance du foil. </p><p>Même si l’ensemble est utilisable dans le vent léger par un winfoileur de niveau moyen, seuls des pratiquants très expérimentés pourront tirer parti de ce produit exceptionnel dans le vent, notamment pour arriver à stabiliser le foil en bordant dans les risées.</p><h4>RS:Flight en 7m2</h4><h4><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-al-2017-GnYu9NEsK7.jpg"></h4><p>Gréé cette sur un mat Reptile Green-Mamba 100% 430, la voile nous est apparu beaucoup moins physique et raide que lors de notre essai à la Ciotat. Je rappelle que lors du premier test, nous avions utilisé un FLX100 460. L’option du 430 est donc parfaitement justifiés pour les gabarits de moins de 85kg.</p><p>Comme toujours, NeilPryde nous offre une voile extrêmement dynamique, qui fait fureur au pumping dans le vent léger. La puissance ainsi générée dans le vent léger, ne se fait pas au détriment de la tenue dans les rafales, contrairement à la voile que j\'utilise habituellement en windfoil. </p><p>Contrairement aux voiles de slalom classique, la RS:FLIGHT a la capacité à être peu étarquée au guindant pour naviguer avec du creux et une chute plus tendue. Elle ne devient pas pour autant camion.</p><p>Avec un mat très dynamique (GM100, TPX100, SPX95), c\'est un combo parfait pour le vent léger, car même si la voile est bien plus lourde et puissante que la V8, elle reste agréable pour quelqu\'un d\'un peu entraîné.</p><p>Nuançons tout de même ce dernier point : si la RS:FLIGHT est plus souple et plus légère qu’une voile de slalom, cela reste un produit réservé à des windsurfeurs techniques et entrainés. </p><h4>Ketos windfoil 2017</h4><h4><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-al-2017-xHq9hNlOG3.jpg"></h4><p>Après un rapide aperçu il y a un mois, nous avons enfin pu passer un peu plus de temps sur le nouveau Ketos.</p><p>On confirme l’énorme progrès par rapport à la version 2016. </p><p>Les problèmes de départ à la gîte sont réglés, même s\'il reste une petite instabilité en lacet.</p><p>Le décollage est un peu laborieux par rapport à la concurrence. L’aile ayant pourtant une portance importante, on met ceci sur le compte du calage du foil vs le flotteur. </p><p>Lors des touchettes ou lorsque rail effleure l’eau au gibe, le flotteur ’suce’ et ralenti anormalement. C’est un comportement que nous n’avions pas avec les NP, Loke, Manta, Horue sur le même flotteur. Ceci accrédite notre analyse concernant le calage du mat dans le boitier. </p><p>Dans le vent, la portance de l’aile devient vite trop importante et nécessitera de descendre sur un modèle plus petit pour rester en sécurité.</p><p>Côté équilibre, le Ketos est très pied arrière. Ceci a beaucoup plût aux débutants windfoil car ils ont trouvé ce comportement rassurant et pas trop éloigné de leur habitudes en windsurf</p><h4>AHD AFS2</h4><p>Après un premier test un peu mitigé lors du national à Martigues, nous voulions en savoir plus sur l’AFS2 de AHD. En suivant les conseils de Renaud, nous avons  cette fois monté le foil sur un prototype de flotteur 100% windfoil Sun7. Le flotteur est beaucoup plus court et plus large à l’arrière.</p><p>Dans cette configuration, le foil change de visage et le côté bloqué en longitudinal s’estompe au profit de plus de vivacité. L’appui pied avant dans le vent devient également moins marqué avec l’aile de 700. </p><p>Côté équilibre, stabilité et sensation, on se rapproche beaucoup du LokeFoil. On a l’accessibilité offerte par la grosse stabilité longitudinale, le côté sein d’un mat relativement raide. La glisse est toutefois meilleure que celle du Loke Envol. Par contre, le décollage est un peu moins rapide.</p><p>Comme avec le foil breton, la grosse stabilité longitudinale simplifie énormément l’apprentissage du Jibe. </p><p>Au final un test concluant et un foil très plaisant à utiliser, offrant accessibilité et bonnes performances. Cette expérience montre, une fois de plus, que le flotteur a une vraie influence sur le comportement du foil ! Encore faut il trouver le bon mariage …</p><h4>Flotteurs TIAKI</h4><h4><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-al-2017-CuXCwMxyg8.jpg"></h4><p>Lors de ce printemps du foil, la plupart des tests ont été fait à l\'aide des flotteurs prêtés par "TIAKI Custom Shape" (en plus de la Sun7, les Horue Slant et Tiny, la Papenoo et la JP Hydrofoil). Ces flotteurs spécifiques de 110 à 130L ont prouvés leur capacité à s\'adapter à de nombreux foils grâce à leur shape étudié et aux réglages possibles.  Les utilisateurs ont appréciés leur accessibilité et leur confort (répartition de volume, glisse, touchettes, position des straps).</p><h4>Conclusions </h4><p>Au final, ces journées de test ont confirmé que</p><ul>
<li>le mariage foil / flotteur est un élément capital dans le plaisir ressenti, et dans le comportement du foil</li>
<li>les foils alu, tout récents, sont capables de détrôner bon nombre de foil carbone des années précédentes </li>
<li>un foil plutôt équilibré pied arrière est plus rassurant dans le vent, alors qu’un foil équilibré plus pied avant (raisonnablement) facilite la remonté au vent dans le light, mais demande un peu plus d’habitude . Le déplacement des straps ou du foil permet d’adapter le comportement. Un réglage de position de l’aile (RSX), du mat (Zeeko), ou des ailes gros temps offrant un centre poussée plus reculés (Horue) sont des solutions pour adapter le foil aux conditions</li>
<li>un manque de standardisation des boitiers tuttle, de la taille et de l’axe des vis, du calage des talons nécessite de bien préparer l’ajustement pour ne pas faire ça à l’arrache sur le spot.</li></ul>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-03 00:10:29',
'updated_at' => '2020-03-26 22:41:57',
),
34 => 
array (
'id' => 36,
'device_id' => 58,
'user_id' => 1,
'title' => 'Windfoil - Test Foil RSX:Convertible',
'body' => '<p>Tester le foil RSX a été un peu plus compliqué qu’à l’accoutumée. Ce modèle, non encore vendu, n’est pas encore tout à fait finalisé, et sera distribué directement par le groupe Satet à Brest. Il est dévolu au programme RSX convertible dans sa version Elite (au dessus du RS-One convertible).</p><p>Sa conception et sa fabrication sont 100% françaises. </p><p>Le foil RSX est un foil 100% carbone prepreg. Il est entièrement démontable et particulièrement rigide. La construction est quasi parfaite. Il reste encore quelques imperfections sur l\'état de surface (au regard des références comme le Select, le Starboard et l\'AFS.. car on est déjà au delà de tous les autres), mais l\'équipe de conception est en passe de régler ces derniers détails avant commercialisation.</p><p><img src="/storage/photos/1/2017-09/neilpryde-rsx-2017-SmnaDkOakc.jpg"></p><p>Il est fourni avec une seule aile, offrant un grand allongement (corde petite et grande envergure de 81cm). Cette aile principale peut se monter à 3 positions différentes sur le fuselage (plus ou moins reculée). Le stab, lui, n’offre pas de réglage.</p><p>Le mat fait 85cm, pour un poids total de 3kg960 sur la balance</p><p><img src="/storage/photos/1/2017-09/neilpryde-rsx-2017-AXgOWML5hu.jpg"></p><h4>Conditions du test</h4><p>Flotteur : RS:One convertible</p><p>Gréement : RS:One en 7m2</p><p>Plan d\'eau : Marseille par vent d\'ouest (1m de houle, 20 knt ... chaud), La Ciotat 8 - 25 knt</p><p><img src="/storage/photos/1/2017-09/neilpryde-rsx-2017-vVLIXdvmCP.jpg"></p><h4>Sur l\'eau</h4><h4>Décollage et light wind</h4><p>Comme avec le foil NeilPryde aluminium, le RSX fait partie des foils qui demandent un peu de vitesse pour décoller. Même avec peu de vent, on atteint très vite cette vitesse grâce à un flotteur RSX:Convertible qui traine très peu d’eau, et un foil qui a beaucoup de glisse. Comme les RS:Flight F4, RS:Flight AL, Starboard GT, le RSX n’est pas un foil qui décolle dans 6 knt, mais un petit 8 knt suffira sans problème en 7.8 si le plan d’eau est plat. Le décollage est progressif et facile à contrôler : c’est largement plus nerveux qu’avec le RS:Flight AL ou l’AFS2, mais moins qu’avec le Sélect Profoil ou un Vini.</p><p>Ces très bonnes performances dans le light se retrouvent dans l’allonge dans les molles. On est ,sur ce critère, un peu en retrait du Profoil F1 (la référence) , mais devant la plupart des autres foils.</p><h4>Equilibre et stabilité</h4><p>Coté équilibre, sur le flotteur RSX:Convertible, on est plutôt équilibré au centre, légèrement plus pied avant qu’avec le RS:Flight AL</p><p>La stabilité longitudinale est un peu plus faible qu’avec le NeilPryde aluminum, le Starboard GT, l\'envol ou l’AFS2 (la référence), mais plus qu’avec un vini, un profoil F1 ou autre F4. Dans des conditions clapoteuses, on aimerai juste avoir un mat un peu plus long pour pouvoir avoir plus de marge de manoeuvre. C’est d’ailleurs probablement la seule critique que l’on puisse faire à ce foil.</p><p>Côté stabilité latérale, le RSX fait partie des meilleurs. Malgré l’utilisation d’un flotteur convertible, moins large sous le pied arrière que nos flotteurs référence, on a vraiment un foil bloqué sur cet axe, ce qui permet d’être serein quelque soit l’état du plan d’eau. On aborde là le gros point fort du RSX : le foil ne bouge absolument pas quelque soit le clapot (voir la houle) rencontré. On sent que l’énorme rigidité des pièces et des assemblages joue un rôle prépondérant. A aucun moment les cisaillements hydrodynamiques sous la surface ne provoquent d’instabilité ou de mouvement imprévu : tout est posé, sain, facile. C\'est simple : il fait jeu égal au niveau rigidité avec le Starboard Carbon qui est notre référence actuelle sur ce critère.</p><h4>Glisse et vitesse</h4><p>Côté glisse, le RSX là aussi fait partie des meilleurs. On est un cran en dessous de notre référence sur ce critère (le profoil F1), mais le RSX fait jeu égal avec le F4 … c’est tout dire. Bien sûr, aucun bruit ni aucune vibration perceptible. </p><p>Avec une telle glisse, la vitesse est évidemment au rendez vous, surtout dans le light et le médium. Je suis mal placé pour donner une vitesse absolue, mais les développeurs ont poussé ce foil à plus de 27knt ! Le potentiel est évident. A notre niveau, atteindre 23 ou 24 knt se fait sans aucun problème.</p><h4>Dans le vent</h4><p>Dans le vent soutenu (20knt en 7m2), l’aile fini par pousser beaucoup et il devient plus compliqué de rester dans l’eau. Bien sûr, des grands techniciens comme Julien Bontemps et Damien Le Guen arrivent à bloquer l’ensemble à la contre gîte pour le pousser plus loin (j’ai vu Julien dans 30knt en 7m2 !), mais le commun des mortels n’y parviendra pas aussi aisément. Dans la configuration standard et pour un niveau moyen comme le mien, la limite haute de vent en 7m2 doit se situer autour de 18 knt environ si on veut rester \'facile\'. Au delà, il faut soit passer à une taille de voile plus petite, soit reculer l’aile. Et oui, pour rester dans le principe de la monotypie (1 flotteur, une voile), les développeurs du concept RSX ont choisi d’offrir la possibilité de modifier la position de l’aile avant sur le fuselage. En reculant l’aile, on ne diminue pas la portance de l’aile, mais on limite le côté ardent du foil qui nécessiterai de pousser fortement sur le pied avant. Cela produit le même effet que si on avançait les straps … et on peut dire que c’est très efficace (et rapide) ! </p><p><img src="/storage/photos/1/2017-09/neilpryde-rsx-2017-pefdNOnVXl.jpg"></p><p>Pour les besoins de notre test, j’ai reculé l’aile d’un cran, soit environ 4cm (sur les 2 possibles). L’effet est très marqué. Le décollage nécessite dès lors d’appuyer nettement plus sur le pied arrière. Une fois en l’air, il faut aussi avoir une attitude avec plus d’appui sur le pied arrière (un peu comment en slalom) pour rester en l’air. N’ayant pas l’habitude de cette position, j’avais du mal à contrôler les appuis et mes mouvements étaient plus brusques qu’en position standard. Par contre, cette option permet réellement d’être plus serein dans les rafales même en grande voile. </p><p>Compte tenu du comportement du foil au cran numéro 2, je n’imagine pas utiliser la 3e position sous peine d’être réellement collé à l’eau. Par contre, je verrai bien une position intermédiaire entre la position 1 et 2 pour pouvoir exploiter efficacement ce réglage ! En tout cas, l’idée est excellente si on veut garder la même taille d’aile et de voile.</p><h4>Cap et allures serrées</h4><p>Côté remontée au vent, le RSX se défend très bien … quoi qu’un peu moins facile que le F4 et le Starboard. La très belle glisse y est pour beaucoup ! Bizarrement, et malgré l’énorme rigidité, j’ai eu du mal à le mettre franchement à la contre gîte … probablement par manque de largeur sous le pied arrière sur la planche RSX. A cette allure, le plan de pont typé slalom (pied arrière à cheval sur le rail) rend le contrôle au près moins évident qu’avec les boards dédiées. C’est le prix à payer pour une polyvalence surprenante.</p><h4>Conclusion</h4><p>Au final, le foil RSX dédié au concept RSX:Convertible n\'est pas loin d’être parfait. Comme le NeilPryde RS:Flight AL, le foil a une très grosse plage d’utilisation … en particulier si on considère que l’on n\'utilise qu’une seule aile. Rigidité, stabilité latérale, allonge dans les molles, glisse, … le RSX frise la perfection. il ne lui manque qu’un mat plus long et un réglage de position d’aile intermédiaire pour faire un strike !</p><p><img src="/storage/photos/1/2017-09/neilpryde-rsx-2017-wIHSwRMKY9.jpg"></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-09-18 22:29:46',
'updated_at' => '2020-03-26 22:41:57',
),
35 => 
array (
'id' => 37,
'device_id' => 59,
'user_id' => 1,
'title' => 'Windfoil - Test AHD AFS2',
'body' => '<p>Nous avons testé le foil AFS2 à plusieurs reprises et dans plusieurs configuration</p><h4>Premier test AFS2 / Aile 800 + AHS SL 122</h4><h4>Conditions du test</h4><ul><li>Flotteur : AHD SL 122</li><li>Conditions de vent : 10-18 knt</li><li>Spot : martigues</li><li>Voile 7m2 Gun vector</li></ul><h4>Sur l\'eau</h4><p>Le décollage est relativement rapide, mais en retrait avec ce que peuvent offrir un Loke Envol ou un Horue XLW ... essentiellement par manque de dynamisme. Je m’attendais à plus considérant l’énorme surface de l’aile, mais elle est au final assez fine en épaisseur relative. Il faut dire que nous n\'étions vraiment pas aidé par la voile de 7m Gun Vector utilisée pour ce test et qui manquait particulièrement de jus, de dynamisme et d\'agréement général.</p><p><img src="/storage/photos/1/2017-04/afs-afs2-2017-37hlLFEaTt.jpg"></p><p>Dès les premiers mètres, c’est la stabilité longitudinale incroyable qui surprend : <strong>le foil est littéralement bloqué sur cet axe</strong> ! Je n\'avais jamais ressenti ceci, mais on s\'en approchait de près avec l\'Xtrem Foil qui partage un peu les mêmes sensations.
</p><p>Jusqu’à présent, j’avais du mal à comprendre pourquoi les designers n\'allongeaient pas les fuselages pour mieux stabiliser leurs foils, persuadé que plus c’était stable, mieux on se porterait. Je ne pensais pas pour autant tester un jour un foil « trop stable » . Vous allez me prendre pour un dingue mais je vais m’expliquer : avec un F4, les réactions longitudinales sont ultra vives, et il faut donc le stabiliser en permanence avec les pieds, mais il répond à la micro-seconde et à la moindre pression d’un orteil. C\'est sportif et demande un très bon niveau de maîtrise. Avec l\'AFS2, on est dans l’extrême inverse : l’altitude du foil est presque figée, … on se sent presque un peu prisonnier, et on est presque obligé d’anticiper les corrections ! … surprenant et atypique.
</p><p>Côté glisse, rien à redire, même avec cette grosse aile:  c’est très fluide même si on sent qu’on peut faire mieux. On est déjà subjectivement plus rapide qu\'avec les ailes purement axée light Wind (horue XLW par exemple). Le passage dans les molles est plutôt bon, et le foil répond au pumping dans la moyenne.
</p><p>Avec un peu plus de vent et de vitesse, la portance devient très forte, et il faut venir mettre un appui (très) soutenu pied avant pour éviter de sortir de l’eau, un peu comme avec le Loke Envol en configuration surtoilée. La vrai différence, comme on le disait auparavant, c\'est qu\'il faut mieux anticiper la correction sur l\'AHD car elle prend plus de temps à porter ses fruits.
</p><p>Au près, le foil répond parfaitement et fait un très bon cap (subjectivement au dessus de la moyenne, mais moins que les ténors). Aucun départ à la gîte, ce qui dénote d’une conception seine et un ensemble très rigide.
</p><p>Par contre, le flotteur SL2 122 manque un peu de largeur pour une navigation sereine en contre gîte. La navigation debout est plus confortable, et il paraît évident qu\'on y gagnera à utiliser un flotteur plus large à l\'arrière. Ce manque de largeur est d\'ailleurs probablement à l\'origine du manque de réactivité de l\'ensemble. Poursuivons donc les tests</p><p style="text-align: center;"><img src="/storage/photos/1/2017-04/afs-afs2-2017-L6lGtIbu9W.jpg">
</p><h4>Test AFS2 / Aile 700 + AHS SL 122</h4><h4>Conditions du test</h4><ul><li>Flotteur : AHD SL 122</li><li>Conditions de vent : 10-18 knt</li><li>Spot : martigues</li><li>Voile 7m2 Gun vector</li></ul><h4>Sur l\'eau</h4><p>En passant à la petite aile, de 700 mm2, on trouve quelque chose de plus homogène avec une portance qui vient plus progressivement, et qui est plus facile a gérer quand la vitesse augmente. A vitesse soutenue, on retrouve cet appui pied avant marqué, mais il est plus facile à gérer. Cela nécessite surtout un temps d\'adaptation.
</p><p>Subjectivement, le décollage est presque aussi rapide qu\'avec la 800. C’est par contre le passage dans les molles qui est un peu en retrait. J\'ai quand même préféré cette configuration compte tenu du temps de réaction pour corriger les excès de portance.
</p><p>Avec la petite aile, on atteint rapidement une vitesse bien plus soutenue qu’avec la 800, et un petit mouvement d’oscillation en lacet apparaît, sans doute dû à un léger manque de rigidité en torsion du mat (on a un prototype sous les pieds). Ce n\'est pas gênant en soi, mais tout à fait perceptible dans cette configuration.</p><h4>Test AFS2 / Aile 700 + Proto Sun7</h4><h4>Conditions du test</h4><ul><li>Flotteur : proto windfoil Sun7 (long 2m)</li><li>Conditions de vent : 14-20 knt</li><li>Spot : Port St Louis</li><li>Voile 5m vague</li></ul><h4>Sur l\'eau</h4><p>Avec une planche courte, l\'AFS2 change de visage et devient tout à coup plus agréable. Sur la plupart des foils, le passage à un flotteur dédié marque une amélioration, mais dans le cas de l\'AFS2, le changement est radical ! </p><p>Cette fois, on ne se sent plus prisonnier du foil et le dosage stabilité / réactivité est juste parfait. Sur le plan longitudinal, il devient désormais facile de réagir et régler son assiette. Sur l\'axe transversal, le comportement de l\'AFS2 reste fidèle à ce que nous avions eu jusqu\'alors : ultra stable ... peu être autant voir plus que le Loke Envol qui est aussi une référence dans le domaine.</p><p>Sur cet axe transversal, l\'AFS2 est tellement stable qu\'il est même difficile de le faire gîter ou contre-gîter sauf à appuyer fortement. On navigue donc naturellement assez droit sur l\'AFS2. Si on souhaite serrer le vent de près, la contre-gîte est utile, mais on reste sur des angles assez faibles avec ce foil qui tend naturellement à remettre le flotteur à plat. Selon les spécialistes, cela est très lié à la forme "aile de mouette" marquée des ailes. Ceci, ajouté à la taille modérée du mat, peut expliquer que l\'AFS2 ne soit pas le foil le plus efficace au près très serré. Dans la même catégorie, Le loke, fait mieux par exemple car il est plus facile à mettre à la contre-gîte. En contre partie, l\'envol est moins rapide.</p><p>Une autre caractéristique de l\'AFS2 lorsqu\'il est utilisé avec une planche courte, c\'est son incroyable capacité à naviguer autant à basse vitesse qu\'à vitesse soutenue avec la même stabilité. De la même façon, il accepte aussi bien des toutes petites voiles de vague, que des voiles de slalom. Cela fait de l\'AFS2 l\'un des foils très polyvalent. Pour revenir sur la vitesse, le foil AFS n\'a pas une glisse ultra fine comme un F4 ou un Select (ça se sent surtout dans le très light), mais il est tellement facile qu\'on peut le pousser assez loin sans se mettre en danger. Aux allures portantes (sa prédilection), les 25 knt sont à la portée de tous si le plan d\'eau reste plat. Nombreux sont les coureurs qui ont dépassés les 28knt aux commandes.</p><p>Si on le compare encore une fois à son principal concurrent dans le même créneau (foil freerace carbone très facile d\'accès), l\'AFS2 est plus rapide que le loke à toutes les allures, mais un peu moins efficace au près très serré. Par contre, on n\'a jamais subit avec l\'AFS2 les décrochages de mat que l\'on rencontre de temps en temps sur le loke Envol à plus de 18-20 knt.</p><h4>Test AFS2 / Aile 700 + Proto Exocet RF81</h4><h4>Conditions du test</h4><ul><li>Flotteur : proto exocet RF81</li><li>Conditions de vent : 10-20 knt</li><li>Spot : Brest Cale du pôle france</li><li>Voile 7.8 Xo Fly</li></ul><h4>Sur l\'eau</h4><p>Cette fois, le test de l\'AFS2 est effectué avec un flotteur dédié windfoil plutôt avancé.</p><p>En terme d\'équilibre et de comportement, on retrouve l\'AFS2 facile et rassurant. Au largue, le plan de pont de la RF81 ajoute encore à la facilité.</p><p>On retrouve encore une fois un foil plus à l’aise sur des allures autour du travers que sur un parcours très serrés up &amp; down. Au près en particulier, le foil est tellement calé latéralement qu’il est même difficile à mettre à la contre gîte (en comparaison avec un loke, select, F4 ou starboard), et cela influe sur le ratio cap/vitesse réalisable avec facilité. Bien sûr, les meilleurs comme Bruno ou Damien savent nous montrer que c’est tout de même possible. </p><p>La taille du mat est aussi une limite dans les capacités en terme de cap et de passage dans le clapot (en comparaison avec les mats de 95cm). Par contre, dans le cadre d’une utilisation freeride ou sur le plat, cette longueur est est tout à fait adaptée. Comme avec le Lokefoil, l’AFS2 souffre moins que d’autre de cette taille modeste car l’excellente stabilité longitudinale demande moins d’attention pour se maintenir à une hauteur à peu près constante.</p><p>En terme de contrôle, l\'AFS2 fait merveille grâce à une excellent rigidité du bloc fuselage / mat (l\'une des meilleurs du marché, juste derrière les starboard, RSX et F4, mais devant un Loke, et très loin devant un Vini, aeromod, slingshot, ketos etc.). Dans le clapot, on ressent très légèrement les mouvements du foil sous l\'eau mais cela reste facile à contrôler et rassurant. Par rapport aux tests que nous avions fait sur le proto, les oscillations en lacet ont complètement disparues.</p><h4>Bilan</h4><p>Après des tests réalisés dans des configurations et des conditions très variées, l\'AFS2 s\'avère être l\'un des 3 foils les plus faciles d\'accès du marché, aux côté du RS:Flight AL et du Loke Envol. Par rapport à ces 2 derniers, il se démarque par sa qualité de fabrication au dessus de tout soupçon, des performances plus poussées dans la plupart des conditions, et un contrôle supérieur dans les conditions les plus difficiles. Le loke garde l\'avantage du cap maxi, et le NeilPryde du rapport qualité / prix grâce à son tarif ultra bas.<br>On attend avec impatience la disponibilité du reste de la famille AFS avec les mats de 95 et de 105 (resepctivement pour des programmes perf et course)</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-04-24 00:24:38',
'updated_at' => '2020-03-26 22:41:57',
),
36 => 
array (
'id' => 38,
'device_id' => 60,
'user_id' => 1,
'title' => 'Windfoil - Test Neilpryde RS:Flight F4',
'body' => '<p>Conditions du test
</p><p>Day 1 : Printemps du foil, entre 10 et 20 knt, voile RS:Flight 7m2, flotteur JP Hydrofoil 135
</p><p>Day 2 : Outdoor Mix Festival, Embrun, entre 8 et 18 knt, voile Swart 7m, flotteur JP Hydrofoil 135
</p><h4>Présentation</h4><p>Le RS:Flight F4<span class="redactor-invisible-space"> est un foil fabriqué par NeilPryde en Asie (sous-traité très exactement), sur la base du modèle développé par F4 Fin aux USA et utilisé par Antoine Albeau depuis 2 saisons sur les courses.</span>
</p><p><span class="redactor-invisible-space">Par rapport au F4 d\'origine, NeiPryde a ajouté un astucieux système de réglage de l\'incidence du stab (fixe sur le F4), et a légèrement allongé le fuselage (quelques cm)</span>
</p><p>On vous renvoie <a href="/blog/windfoil-test-aile-f4-lw2.html">au test du F4</a> pour les principaux éléments et caractère de ce foil. Nous exposerons ici essentiellement les différence entre les deux et le fonctionnement général du combo JP Hyrdofoil 135 + RS:Flight F4.
</p><p><span class="redactor-invisible-space"><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-f4-2017-W7qJbErzlq.jpg"><span class="redactor-invisible-space"><br></span></span>
</p><h4>Sur l\'eau</h4><p>Disons le tout de suite : cet ensemble très équilibré et homogène a fait l’unanimité des habitués du windfoil. Le foil est un poil plus accessible que la version F4 originale grâce à une meilleur stabilité longitudinale. On garde la même glisse unique et la même qualité de rigidité extrême du mat, gage de performance au cap et dans le vent. Le flotteur offre juste ce qu’il faut de largeur pour pouvoir exploiter la puissance du foil.<br>
</p><p><span class="redactor-invisible-space"></span>
</p><p>Pour rentrer dans le détail, le RS:Flight F4 est un foil très stable latéralement. Cela permet d\'utiliser des grosses voiles et de naviguer à la contre-gîte pour optimiser les capacités de remonté au près.
</p><p>Il est par contre mais plutôt instable longitudinalement. Pour les pratiquants qui maîtrisent, et qui savent caler le foil en restant voile bordée, cela permet de garder néanmoins un foil ultra réactif pour réagir à la moindre sollicitation, et pour suivre le plan d\'eau lors des navigations dans la houle (chaud devant !). Bon, ce n\'est clairement pas de tout repos, mais quel plaisir ! Eh oui, car côté glisse, c\'est tout simplement exceptionnel ! D\'une part il va très vite, mais surtout la sensation "c\'est déconner comme ça glisse" .. comme me disait un jour un coureur d\'une marque concurrente (sic !).
</p><p>Le RS:Flight F4 est livré d\'origine avec 2 ailes : une 80cm et une 54cm d\'envergure.  Avec la 80, on dépasse facilement et régulièrement les 23 /24knt dans du light. Avec la 54, certains (pas moi !) flirtent régulièrement avec les 30knt. Côté cap, c\'est juste indécent. Je vous laisse regarder une petite trace up&amp;down faite à Serre Ponçon dans une petite 15aine de noeuds, lors de l\'outdoor mix festival
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-05/neilpryde-rs:flight-f4-2017-lLG9tzIgWJ.png">
</p><p>En conclusion</p><p>Le RS:Flight F4 est à ce jour toujours considéré comme le foil le plus performant du marché. C\'est l\'étalon qu\'utilise la plupart des marques pour développer leurs foils perf. A condition de gérer la faible stabilité longitudinale, c\'est l\'un des plus efficace dans une optique vitesse et remontée au vent, y compris dans le vent. Il n\'y a que dans l\'ultra light que ce foil n\'est pas devant les autres. </p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-17 20:41:19',
'updated_at' => '2020-03-26 22:41:57',
),
37 => 
array (
'id' => 39,
'device_id' => 61,
'user_id' => 1,
'title' => 'Windfoil - Test ketos 2017',
'body' => '<h4>Ketos 2017 + JP Hydrofoil 135 dans le vent léger<br></h4><p><strong></strong>Conditions de vent : 8 à 12 knt</p><p>Voile : V8 Neil Pryde 7.2 m²</p><p>Foil Ketos sur flotteur JP Hydrofoil 135 pro édition</p><p><img src="/storage/photos/1/2017-05/ketos-windfoil-2017-2017-1JFEicJyAZ.jpg"></p><p>Le décollage est correct mais demande un peu d’appui dans les risées. Il est progressif et mais le pumping avec les pieds a peu d’influence. Heureusement, on est ben aidé par la forte portance du flotteur JP car faut une certaine vitesse pour lancer l’ensemble cet avoir une portance suffisante. La forte largeur arrière de ce flotteur aide à décoller avec les pieds dans les straps, notamment grâce à un plan de pont agréable et des positions de straps bien placés.</p><p>Une fois en l\'air, le foil le Ketos offre une glisse très correcte, et une très bonne stabilité longitudinale. Il reste un léger déséquilibre nécessitant plus de pression sur le pied arrière, mais cette sensation est beaucoup moins marquée que sur le modèle 2016. Côté stabilité latérale, cela reste moyen même si là aussi, les progrès sont très importants par rapport à la version précédente. Je n\'ai pas réussi à mettre la planche à la contre-gîte : en permanence, le foil a tendance à pousser la planche à la gîte. Mais encore une fois, la largeur de la JP aide à gommer les points encore perfectibles du foil.</p><p>Dans les molles, l’allonge est moyenne et comme pour le décollage, l’ensemble répond peu au dumping des pieds, à contrario des Horue, Loke ou Zeeko dont nous allons parler après.</p><p>Au final, une très forte progression du foil ketos dans l’agrément d’utilisation, même si il reste des points a améliorer.</p><p>La planche, elle, nous a fait très bonne impression (bonne répétition de volume, bon équilibre des poids, plan de pond agréable, position des straps pertinente), à l’exception d’une glisse perfectible lors des touchettes.</p><h4>Test dans plus de vent</h4><p>Cf. notre compte rendu sur le <a href="/blog/printemps-du-foil-2017-compte-rendu.html">printemps du foil</a></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-16 14:48:05',
'updated_at' => '2020-03-26 22:41:57',
),
38 => 
array (
'id' => 40,
'device_id' => 62,
'user_id' => 1,
'title' => 'Windfoil - Test Zeeko Alu',
'body' => '<h4>Zeeko Alu sur flotteur Sun7 spécial windfoil<br></h4><p><img src="/storage/photos/1/2017-05/zeeko-alu-lw-2017-2017-ZLOOQjUpV1.jpg"></p><p>Sur ce combo, le foil n’est pas installé dans un boitier tuttle, mais sur une platine vissée sur 2 rails US Box.</p><p>L’ensemble est extrêmement lourd à terre … limite enclume (complexe même à apporter vers le bord de l’eau), mais heureusement loin d’être inintéressant sur l’eau.</p><p>A l’arrêt, la planche de 120L semble bizarrement petite. Vraisemblablement, la répartition de volume ne favorise pas la stabilité, notamment à cause d’un arrière assez pintail et d’un faible volume derrière le maître beau.</p><p>L\'antidérapant est grossier, mais pas très accrocheur. Par contre, straps et pads sont confortables</p><p>Dans le vent léger rencontré lors de notre test, décoller s’est avéré très compliqué malgré un pumping à se démettre les épaules. Heureusement, le vent a été de notre côté et à la faveur de plus fortes risées (12 - 15 Knt), il a été possible de s’extraire de l’eau.</p><p>Une fois en l’air, le Zeeko change de visage et son côté lourdeau fait place à une superbe stabilité dans les deux axes. On n’est pas loin de ce qu’offre le LokeFoil de ce côté. Par contre, gros point positif, ce foil a très peu tendance à sortir de l’eau, même quand on accélère. On est très serein dessus.</p><p>La très bonne stabilité latérale permet de mettre facilement le foil à la contre gîte pour aller chercher du cap/vitesse.</p><p>Sur ce modèle, on a une position de navigation plus reculée que la moyenne, un peu à la mode slalom. A basse vitesse, l’assiette est cabreuse, mais elle re-devient neutre quand la vitesse augmente.</p><p>Au final, même si ce foil semble hyper lourd et encombrant à l\'arrêt, il devient intéressant et plaisant pour tirer des longs avec du vent en mode slalom. Dans les molles, l’allonge est très bonne et le foil réagit bien aux pumping. On rêve d\'une version montée en Deep Tuttle pour pouvoir l\'utiliser sur une planche plus performante et plus agréable car on sent qu’il est desservi par le flotteur dédié.</p><p><strong>Edit</strong> : l\'ensemble que nous avons testé étant un prototype de développement, le fuselage et le flotteur vont être remplacé par des éléments mieux finis et plus léger. Compte tenu du potentiel, on se langis de tester les versions définitives. A priori au printemps du foil ...</p><h4>Test de la configuration de série avec une planche Sun7 légère</h4><p>A l\'occasion du printemps du foil, nous avons comparé plusieurs foils aluminium. Voici notre <a href="/blog/printemps-du-foil-2017-compte-rendu.html">compte - rendu</a>.</p><p>Au bilan, un foil qui fait partie des 2 foils alu réellement sans défauts grâce à une base mat + fuselage particulièrement rigide. Le NeilPryde propose une plage d\'utilisation un peu plus large que la Zeeko avec l\'aile XLW, mais ce dernier peut être équipé d\'une aile race plus adéquate et plus rapide à partir de 12-15knt de vent, et il reprend alors l\'avantage. Le Zeeko a aussi pour lui une glisse un peu plus développée. </p><p>Les 2 foils sont assez proche en ce qui concerne les stabilités latérlaes et longitudfinales.</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-16 14:41:00',
'updated_at' => '2020-03-26 22:41:57',
),
39 => 
array (
'id' => 41,
'device_id' => 63,
'user_id' => 1,
'title' => 'F4 windfoil - Le test',
'body' => '<p>Après 4 jours d\'attente insoutenable sans vent, on a enfin pu mettre à l\'eau le F4 ... l\'attente a été terrible ! Va t on être récompensé ??</p><h4>Montage</h4><p><img src="/storage/photos/1/2016-11/f4-windfoil-2016-emdMUBommC.jpg"></p><p>Le montage du F4 sur notre planche de windfoil de référence s\'est fait sans problème particulier. Signalons juste que le boitier deep tuttle du F4 est très ajusté. Là ou les loke, horue, mako ou autre kotos rentaient facilement, ça ressemble cette fois plus à ce que nous avons l\'habitude avec les ailerons de slalom qui rentrent au chausse-pied.</p><p>Comme d\'habitude, on ne lésine pas sur le vissage. Avec les foils, d\'une part on ne fait pas semblant de serrer, et d\'autre part on ne fait pas dans l\'économie sur les rondelles côté pont. Cela évite d\'avoir un foil qui passe à travers le boitier (n\'est ce pas John ?!?) et qui fini à 4m sous l\'eau. Au prix du bébé, mieux vaux assurer côté montage.</p><p>Avec le F4, ça respire le costaud côté talon ... c\'est même celui où l\'intégration du talon paraît la mieux réalisée et finie.</p><h4>Conditions de test</h4><p>Comme d\'habitude, le test s\'est fait sur notre custom windfoil Tiaki 115L v3 de 77cm de large. Le vent était très irrégulier autant en force qu\'en direction, allant de 4 à 17 knt environ. Le plan d\'eau était plutôt plat avec un peu de clapot. Côté voile, j\'ai opté pour ma 7m de référence (Maui Sail 7m légère 2 cam).</p><p>Le F4 a été testé en configuration standard avec son aile medium (celle vendue actuellement avec le foil)</p><p><img src="/storage/photos/1/2016-11/f4-windfoil-2016-CHvCbmWYHN.jpg"></p><h4>Premier vol</h4><p>C\'est parti dans un vent plutôt faible (une petite 10aine de knt). On pompe énergiquement et la planche prend de la vitesse. Elle a un peu de mal à s\'arracher de l\'eau. Il faut franchement appuyer sur le pied arrière pour sortir le flotteur de l\'eau, mais à chaque fois, ça retombe. </p><p>En allant un peu plus loin au large, le vent est plus soutenu. Ca commence à voler plus facilement et on perçoit immédiatement l\'un des gros points forts de ce foil : la glisse ! Problème : on est très centré sous le pied arrière et on replaque un peu trop souvent ... difficile de rester en l\'air car il faut un peu forcer et maintenir une assiège cabrée, un peu comme on avait ressenti sur le Ketos, mais en moins marqué. Par contre, ça accélère très fort dans le vent. </p><p>Retour au bord pour régler l\'équilibre de la bête</p><h4>Réglage et deuxième essai</h4><p>Une fois rentré au bord, je me rends compte que la planche est restée réglée pour le Lokefoil qui nécessite des straps très avancés (ou un boitier très reculé, ce qui revient au même). J\'ai l\'explication de ce problème d\'assiette longitudinale ... enfin on va tout de suite vérifier. Je recule donc les straps d\'au moins 5cm chacun et c\'est reparti.</p><p>Cette fois, plus besoin de forcer à cabrer : il suffit de prendre de la vitesse et ça monte tout seul. Par contre, il faut doser les appuis avant-arrière avec doigté car le F4 est très sensible sur le plan longitudinal. Vous me direz, quand on voit la taille du stab, c\'est pas étonnant. Clairement, ce foil n\'est pas du tout destiné à un débutant ! Côté transversal (départ à la gite), on est très stable et c\'est assez même assez surprenant avec une aile de si petite envergure. Jusqu\'à présent, nous n\'avions eu cette stabilité qu\'avec des ailes de grande envergure (Loke , Horue, Fone avec petite voile) et nous en avions clairement manqué sur tous les autres (Xtrem, Mako v1, 2 et 3, Kerfoil, Kotos). Bref, on a une base très saine ... ça se présente très bien</p><p>Allez, on pousse l\'essai pour savoir que qu\'il a dans le ventre ce F4.</p><h4>Light wind</h4><p>Pour l\'instant, on a un peu triché en allant chercher les risées. Maintenant que le réglage de l\'assiège longitudinale est bon, voyons un peu comment notre nouveau bébé se comporte dans le light. </p><p>Je profite donc de zones peu ventées (moins de 10 knt) pour pomper énergiquement à la fois avec la voile et les pieds. Contrairement à ce que le Horue Vini  nous a habitué, il faut cette fois insister plus longtemps et aller chercher plus de vitesse pour faire décoller la bête, mais ça fonctionne. On sent nettement que l\'aile est plus petite et le mat plus rigide. Pour aller chercher de la vitesse, on est aussi obligé d\'abattre un peu plus et il est difficile de faire partir le foil au près comme on arrive à faire avec le Horue. L\'accélération est franche mais la portance se met en place tranquillement. </p><p>Autre test : le passage dans les molles. Cette fois, on accélère dans une risée, on se cale et on voit ce qui se passe quand la risée s\'arrête. Ca tombe bien, on a le Lokefoil juste à côté et on va pouvoir comparer. Et bien clairement, le F4 redescend plus vite. On a beau pomper, rien n\'y fait, les Horue et Loke ont des meilleurs minis. On ne pourra donc pas faire jeu égal, mais avec un peu de technique, on est pas si loin. Compte  tenu de la différence importante de surface portante de l\'aile, c\'est pas si mal. Vous verrez dans la conclusion que ls choses vont évoluer sur ce point.</p><h4>Vitesse et cap</h4><p>Passons au gros point fort du F4 : la glisse. Comme on l\'a déjà évoqué, la sensation de glisse est la première chose que l\'on ressent sur le F4. A ce jour, c\'est clairement le foil qui nous a donné le plus de sensation sur ce point. Au travers et au largue, l\'impression de vitesse est évidente ... mais heureusement que l\'on profite des 1m de mat pour ne pas sortir de l\'eau car la faible stabilité longitudinale rendrait le pilotage très délicat avec un mat de 80 comme on a sur les autres foils. Au près, c\'est tout simplement impressionnant ! L\'accélération est aussi franche car c\'est le foil que l\'on a le mieux réussi à mettre à la contre gite, sans aucun décrochage (lui !). Aujourd\'hui, on étaient 2 sur l\'eau et visuellement, j\'avais réellement l\'impression de revenir fort sur le Loke quand il était devant.</p><p>Je veux en savoir plus, mais j\'ai enlevé ma montre en enfilant la combi :( Aller, aller-retour express au bord pour prendre mon ambit3 ... je veux mesurer tout ça ! C\'est donc reparti avec le GPS en marche. Je me fais donc un aller-retour dans la baie de La Ciotat. Sur le bord aller, je décide de caper en le calant sur le vent à la contre gite. Ca a l\'air d\'aller pas mal. Au jibe, je fais un stop pour regarder le résultat sur la montre : verdict 20.8 knt (10s) ! Record battu : je n\'avais jamais dépassé les 20.5 (10s) avec les autres foils même au travers car je ne suis pas du genre à me mettre dans le rouge ... là, je n\'ai pas senti la moindre sensation d\'insécurité.</p><p>Il reste à rentrer au club avec un bord un peu plus abattu. Moins facile de se caler d\'autant plus que le vent est bien monté : je suis cette fois vraiment limite avec la 7m, alors je gère en essayant de ne pas trop border pour ne pas me mettre dans le rouge. J\'arrive tout de même à laisser le foil dans l\'eau, ce qui aurait été difficile ainsi sur-toilé avec d\'autres modèles (merci le mat de 1m). Arrivé au club, un petit check sur la montre : 22.17 knt (10s) ! Cette fois, c\'est certain : le F4 est une arme. </p><p>Je suis sûr qu\'en apprenant à maîtriser la bête, on va pulvériser nos vmax habituelles en foil même si ce n\'est pas l\'essentiel pour moi. Encore une fois, et je le répète à tous ceux qui sont obnubilés par cette question : le windfoil ne vas pas vite, mais à 20 knt, on a les sensations de vitesse d\'une planche de slalom à plus de 30knt ... et pour le reste des sensations, c\'est juste indescriptible !!! Pour moi, il y a le même écart entre la planche à dérive et le fun qu\'entre le fun et le foil ... et je pèse mes mots. Toujours est il que le F4 repousse encore les limites en apportant une sensation intense de pureté dans la glisse. C\'est difficile de mettre des mots sur les sensations, mais quel kiff !</p><p><img src="/storage/photos/1/2016-11/f4-windfoil-2016-iNZJ3Nb6hd.jpg"></p><h4>Petit résumé des courses</h4><h4>Facilité d\'accès</h4><p>Le windfoil F4 est manifestement taillé pour la performance, et la facilité d\'accès n\'est pas son point fort. La stabilité est précaire avec son petit stab, et son fuselage très court. Tout est fait pour diminuer la trainée. Nous le déconseillons totalement aux débutants en foil ... même si certians compétiteurs dans l\'âme ne pourront pas faire autrement (les mêmes qui commencent le fun avec une voile de course et un flotteur de slalom).</p><h4>Décollage</h4><p>Nos tests se sont fait avec la petite aile de 56cm. La portance étant assez faible par rapport à nos foils références, il faut un peu plus de vitesse que la moyenne pour \'monter\' sur le foil. Par contre, la trainée étant faible, cette vitesse est vite atteinte sur le vent est là. Avec cette configuration, il paraît difficile de naviguer dans moins de 10knt de vent ... tout au moins avec notre configuration en 7m2.</p><p>Au pumping dans le light, on sent nettement l\'appui sur le mat très large en corde, mais sa rigidité n\'offre pas le petit plus qui permet de sortir un horue à 7knt. Nous attendons de tester avec l\'aile de 80 pour vérifier.</p><h4>Comportement à basse vitesse</h4><p>A basse vitesse, le F4 se pose plus vite que la moyenne avec la petite aile ... par contre, aucune instabilité à noter dans cette situation grâce à l\'extrême rigidité de l\'ensemble.</p><h4>Cap</h4><p>Au cap, le F4 montre tout l\'intérêt de la rigidité : il accélère plus que les autres, et permet réellement de naviguer à la contre gite. A ce jour, c\'est le foil qui nous a donnée le plus de sensations aux allures serrées.</p><h4>Vibrations</h4><p>Aucune vibration sur ce modèle. Un léger sifflement du profil, mais rien de gênant.</p><h4>Glisse<br></h4><p>Passons au gros point fort du F4 : la glisse. Comme on l\'a déjà évoqué, la sensation de glisse est la première chose que l\'on ressent sur le F4. A ce jour, c\'est clairement le foil qui nous a donné le plus de sensation sur ce point. Au travers et au largue, l\'impression de vitesse est évidente ... mais heureusement que l\'on profite des 1m de mat pour ne pas sortir de l\'eau car la faible stabilité longitudinale rendrait le pilotage très délicat avec un mat de 80 comme on a sur les autres foils. Au près, c\'est tout simplement impressionnant ! L\'accélération est aussi franche car c\'est le foil que l\'on a le mieux réussi à mettre à la contre gite, sans aucun décrochage (lui !). <br></p><p>Après quelques sorties avec le F4, on confirme le potentiel de la bête. On a tous battu nos vitesses max avec le F4, et on sait que certains l\'on poussé à plus de 30 knt.</p><h4>Taille de voile<br></h4><p>Le F4 est clairement un foil conçu pour les grandes voiles. Il est capable de supporter de la toile et donc des efforts latéraux sans fléchir et sans partir à la gite. En mode sous - toilé, aucun soucis non plus</p><h4>Aile F4 LW2</h4><p><a href="/blog/windfoil-test-aile-f4-lw2.html">Test de l\'aile light wind de F4</a></p><h4>Bilan</h4><div><div>Au final, le F4 offre encore un autre visage du foil. Au côté de nos deux autres références (Horue Vini et Lokefoil Envol), le F4 apporte la touche performance et vitesse, sans pour autant perdre en maniabilité. Attention : réservé aux pratiquants de bon niveau en foil !</div><div>P... que c\'est bon !! Philippe (Horue), il va falloir que tu te dépêches de nous sortir ton TAE car il a déjà un sérieux concurrent.</div><div>En tout cas, très grosse impression pour ce F4, confirmée par mon sparing partner lors de nos tests foils. Son résumé est simple: "une tuerie".</div></div><p><br></p><p>Merci pour ce test à : MauiSail, AL360, Tiaki, Fanatic, Club Neptune</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2016-11-02 21:32:20',
'updated_at' => '2020-03-26 22:41:57',
),
40 => 
array (
'id' => 42,
'device_id' => 64,
'user_id' => 1,
'title' => 'Test windfoil Horue / Mako / Ketos 2016',
'body' => '<p>Encore une bonne occasion hier de confronter 3 acteurs du marché du windfoil. En l\'occurrence, il s\'agissait du Vini (Horue), du DP82 (Mako) et du Ketos Windfoil (Aile Easy et Freeride2)
</p><p>Conditions du test : Port St Louis, vent entre 10 et 18 knt, beaucoup d\'algues
</p><p>Après l\'expérience très mitigée que nous avions eu avec le Ketos lors du printemps du foil, nous étions impatients de re-tester ce Ketos mis à jour. Cette fois, on a droit à un nouveau mat plus rigide (dit Haut Module), et à la nouvelle aile Freeride2, qui est plébiscitée en kite. Pour pouvoir faire une comparaison digne de ce nom, on va cette fois monter le ketos sur notre board de foil car l\'installation sur la starboard que nous avions lors de printemps du foil désservait visiblement le produit.
</p><p>Compte tenu des conditions de vent, on part en 7m au départ (10knt environ)
</p><h4>Première sortie avec le ketos</h4><p>Point positif, le mat relativement court permet de ne pas marcher sur 20km avant de monter sur le planche. On se dégage de la zone sans fond, et c\'est parti pour essayer de monter sur le foil. On pompe, la planche accélère rapidement grâce au gros appui du mat en corde large, et ... ça ne monte pas ... ou presque ! Que passa ? En regardant de plus près, on a un gros paquet d\'algues dans le foil ! Allez, une petite marche arrière pour enlever tout ça, et on recommence. Cette fois, ça monte, mais ça retombe aussitôt. Un peu déçu ... Encore plein d\'algues. Bon, ça sent le plan galère. Du coup, je remonte au ralenti pour changer de zone de navigation et on recommence. Moins d\'algues, mais il faut franchement forcer pour rester en l\'air : tout l\'appui est sur le pied arrière, on n\'est pas du tout équilibré. En plus, dès que l\'on essaye d\'accélérer et/ou de remonter au vent en faisant contre giter la planche, c\'est décrochage immédiat de l\'aile. Je fini par douter et je rentre pour changer de monture pour voir si c\'est moi, les algues, ou autre chose
</p><h4>Deuxième sortie avec le Viny</h4><p>Cette fois, il faut gérer le tirant d\'eau plus important. Par contre, dès que la profondeur est ok, le foil porte immédiatement et on retrouve l\'équilibre habituel du Horue. On passe au milieu des bancs d\'algue et on sent que ça freine, mis on reste en l\'air. Au bout d\'un moment (accumulation), on fini par se re-poser. Un peu de ménage sous la board et on recommande. Cette fois, je trouve la solution : à chaque fois que les algues s\'accumulent sur le bord d\'attaque du foil, il suffit de monter et descendre un peu vite (sans poser la planche) pour se débarrasser des intrus. Le vent monte franchement, et ça devient rock &amp; roll en 7m. Bon ok, bien compris, on va ré-essayer avec le ketos<br>
</p><h4>Troisième sortie avec le ketos</h4><p>Le vent est monté, ça va aider. J\'en profite pour reculer les straps de 8cm pour avoir une position plus équilibrée. Toujours pareil, un peu difficile de sortir de l\'eau, bizzare avec une 7m dans plus de 15 knt ! Pas bien normal. Bon, cette fois, on est un poil moins sur le pied arrière (juste un poil moins), mais il faut bien bourriner quand même pour tenir l\'assiette. Les algues n\'ayant pas abdiquées, je teste la solution trouvée avec le Horue. Cette fois, ça ne fonctionne pas, les algues restent collées. Le mat très large sotche nos petites amies. Je suis obligé de remonter sur le plan d\'eau pour changer de terrain de jeu et continuer les tests. Sans les algues, ça sort de l\'eau facilement, mais on reste bien trop sur le pied arrière. Difficile du coup de maintenir une assiette correcte bien longtemps : les touchettes plus ou moins douces sont légion. La stabilité latérale est aussi précaire avec de nombreuses embardées à la gite difficiles à récupérer. Quand on essaye de contre-giter, on retrouve des décrochages assez brutaux : il y a visiblement un phénomène de ventilation de l\'aile dans ces conditions.
</p><h4>Quatrième sortie avec le Mako sur une planche avec boitier avancé</h4><p>Le MakoFoil est désormais construit par Gasoil. Cette nouvelle version est entièrement nouvelle est très différente de la précédente : c\'est un foil qui fait clairement partie de la 3e génération. La glisse est plutôt très bonne mais il reste un peu plus technique que la moyenne des foils de sa génération quant à la stabilité (autant en stabilité latérale que longitudinale). Ce foil nécessite idéalement comme la version précédente un boitier avancé, donc soit une planche spécifique soit une planche sur lequel on a déplacé le boitier d\'aileron (d\'une 10aine de cm sur le 2015, de environ 5cm sur le 2016).
</p><p>Ce foil étant encore en développement (moules non définitifs sur les ailes en particulier), nous suivrons son évolution pour vous en dire plus. Nos tests ont été réalisés avec une aile DP77 puis un proto de DP82. Cette dernière aile est encore en cours d\'évolution pour améliorer la stabilité transversale qui reste un point à améliorer sur le Mako 2016.
</p><p><img src="/storage/photos/1/2016-10/ketos-windfoil-2016-8ECusC5vEm.jpg">
</p><p>Le vent est monté, on navigue en 5,8. L\'ensemble est équilibré et porte plus que le ketos. Comme lors de nos précédents tests avec le mako, on ressent une certaine instabilité latérale : il faut être méfiant pour bien maintenir le flotteur à plat car les embardées sont difficile à rattraper. Par contre, la stabilité longitudinale et la glisse sont bonnes. Pour voir, on essaye la contre gite pour serrer le vent et accélérer. Comme avec le Ketos, c\'est vite la sanction avec un joli décrochage. <br>
</p><h5>Petit bilan de cette après midi de test à Part st Louis</h5><p>Notre foil référence (viny) s\'est bien sorti des conditions compliquées (algues).
</p><p> Le foil Ketos demande encore du travail : le mat court à corde large pose beaucoup de difficulté en présence d\'algue. L\'aile Freeride2 a bien plus de glisse que la version easy testé ce printemps, mais son faible allongement pose des problèmes d\'instabilité latérale. Il faut aussi comprendre pourquoi le foil ne permet pas de naviguer en contre gite sans décrocher. Enfin, ce foil demande pas mal de puissance pour s\'exprimer : il ne faut pas autant sous-toiler qu\'avec les autres foils
</p><p>Le DP82, à condition d\'être installé sur un flotteur avec un boîtier un peu avancé (ou des straps plus reculés), offre un bon équilibre longitudinal et une portance plutôt bonne (comme avec le horue en aile LW, mais moins qu\'avec la XLW). Il reste par contre du travail pour régler les problèmes de stabilité latérale, et cela nécessite donc une bonne vigilance de la part du pilote (beaucoup plus qu\'avec une horue ou un lokefoil).
</p><p>...prochain test avec le Loke et le F4 (on espère que ce ne sera pas dans 6 mois car la livraison traine un peu)
</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2016-10-01 21:20:39',
'updated_at' => '2020-03-26 22:41:57',
),
41 => 
array (
'id' => 43,
'device_id' => 65,
'user_id' => 1,
'title' => 'Test windfoil Horue / Mako / Ketos 2016',
'body' => '<p>Encore une bonne occasion hier de confronter 3 acteurs du marché du windfoil. En l\'occurrence, il s\'agissait du Vini (Horue), du DP82 (Mako) et du Ketos Windfoil (Aile Easy et Freeride2)
</p><p>Conditions du test : Port St Louis, vent entre 10 et 18 knt, beaucoup d\'algues
</p><p>Après l\'expérience très mitigée que nous avions eu avec le Ketos lors du printemps du foil, nous étions impatients de re-tester ce Ketos mis à jour. Cette fois, on a droit à un nouveau mat plus rigide (dit Haut Module), et à la nouvelle aile Freeride2, qui est plébiscitée en kite. Pour pouvoir faire une comparaison digne de ce nom, on va cette fois monter le ketos sur notre board de foil car l\'installation sur la starboard que nous avions lors de printemps du foil désservait visiblement le produit.
</p><p>Compte tenu des conditions de vent, on part en 7m au départ (10knt environ)
</p><h4>Première sortie avec le ketos</h4><p>Point positif, le mat relativement court permet de ne pas marcher sur 20km avant de monter sur le planche. On se dégage de la zone sans fond, et c\'est parti pour essayer de monter sur le foil. On pompe, la planche accélère rapidement grâce au gros appui du mat en corde large, et ... ça ne monte pas ... ou presque ! Que passa ? En regardant de plus près, on a un gros paquet d\'algues dans le foil ! Allez, une petite marche arrière pour enlever tout ça, et on recommence. Cette fois, ça monte, mais ça retombe aussitôt. Un peu déçu ... Encore plein d\'algues. Bon, ça sent le plan galère. Du coup, je remonte au ralenti pour changer de zone de navigation et on recommence. Moins d\'algues, mais il faut franchement forcer pour rester en l\'air : tout l\'appui est sur le pied arrière, on n\'est pas du tout équilibré. En plus, dès que l\'on essaye d\'accélérer et/ou de remonter au vent en faisant contre giter la planche, c\'est décrochage immédiat de l\'aile. Je fini par douter et je rentre pour changer de monture pour voir si c\'est moi, les algues, ou autre chose
</p><h4>Deuxième sortie avec le Viny</h4><p>Cette fois, il faut gérer le tirant d\'eau plus important. Par contre, dès que la profondeur est ok, le foil porte immédiatement et on retrouve l\'équilibre habituel du Horue. On passe au milieu des bancs d\'algue et on sent que ça freine, mis on reste en l\'air. Au bout d\'un moment (accumulation), on fini par se re-poser. Un peu de ménage sous la board et on recommande. Cette fois, je trouve la solution : à chaque fois que les algues s\'accumulent sur le bord d\'attaque du foil, il suffit de monter et descendre un peu vite (sans poser la planche) pour se débarrasser des intrus. Le vent monte franchement, et ça devient rock &amp; roll en 7m. Bon ok, bien compris, on va ré-essayer avec le ketos<br>
</p><h4>Troisième sortie avec le ketos</h4><p>Le vent est monté, ça va aider. J\'en profite pour reculer les straps de 8cm pour avoir une position plus équilibrée. Toujours pareil, un peu difficile de sortir de l\'eau, bizzare avec une 7m dans plus de 15 knt ! Pas bien normal. Bon, cette fois, on est un poil moins sur le pied arrière (juste un poil moins), mais il faut bien bourriner quand même pour tenir l\'assiette. Les algues n\'ayant pas abdiquées, je teste la solution trouvée avec le Horue. Cette fois, ça ne fonctionne pas, les algues restent collées. Le mat très large sotche nos petites amies. Je suis obligé de remonter sur le plan d\'eau pour changer de terrain de jeu et continuer les tests. Sans les algues, ça sort de l\'eau facilement, mais on reste bien trop sur le pied arrière. Difficile du coup de maintenir une assiette correcte bien longtemps : les touchettes plus ou moins douces sont légion. La stabilité latérale est aussi précaire avec de nombreuses embardées à la gite difficiles à récupérer. Quand on essaye de contre-giter, on retrouve des décrochages assez brutaux : il y a visiblement un phénomène de ventilation de l\'aile dans ces conditions.
</p><h4>Quatrième sortie avec le Mako sur une planche avec boitier avancé</h4><p>Le MakoFoil est désormais construit par Gasoil. Cette nouvelle version est entièrement nouvelle est très différente de la précédente : c\'est un foil qui fait clairement partie de la 3e génération. La glisse est plutôt très bonne mais il reste un peu plus technique que la moyenne des foils de sa génération quant à la stabilité (autant en stabilité latérale que longitudinale). Ce foil nécessite idéalement comme la version précédente un boitier avancé, donc soit une planche spécifique soit une planche sur lequel on a déplacé le boitier d\'aileron (d\'une 10aine de cm sur le 2015, de environ 5cm sur le 2016).
</p><p>Ce foil étant encore en développement (moules non définitifs sur les ailes en particulier), nous suivrons son évolution pour vous en dire plus. Nos tests ont été réalisés avec une aile DP77 puis un proto de DP82. Cette dernière aile est encore en cours d\'évolution pour améliorer la stabilité transversale qui reste un point à améliorer sur le Mako 2016.
</p><p><img src="/storage/photos/1/2016-10/mako-windfoil-2016-VnmHOCGpi9.jpg">
</p><p>Le vent est monté, on navigue en 5,8. L\'ensemble est équilibré et porte plus que le ketos. Comme lors de nos précédents tests avec le mako, on ressent une certaine instabilité latérale : il faut être méfiant pour bien maintenir le flotteur à plat car les embardées sont difficile à rattraper. Par contre, la stabilité longitudinale et la glisse sont bonnes. Pour voir, on essaye la contre gite pour serrer le vent et accélérer. Comme avec le Ketos, c\'est vite la sanction avec un joli décrochage. <br>
</p><h5>Petit bilan de cette après midi de test à Part st Louis</h5><p>Notre foil référence (viny) s\'est bien sorti des conditions compliquées (algues).
</p><p> Le foil Ketos demande encore du travail : le mat court à corde large pose beaucoup de difficulté en présence d\'algue. L\'aile Freeride2 a bien plus de glisse que la version easy testé ce printemps, mais son faible allongement pose des problèmes d\'instabilité latérale. Il faut aussi comprendre pourquoi le foil ne permet pas de naviguer en contre gite sans décrocher. Enfin, ce foil demande pas mal de puissance pour s\'exprimer : il ne faut pas autant sous-toiler qu\'avec les autres foils
</p><p>Le DP82, à condition d\'être installé sur un flotteur avec un boîtier un peu avancé (ou des straps plus reculés), offre un bon équilibre longitudinal et une portance plutôt bonne (comme avec le horue en aile LW, mais moins qu\'avec la XLW). Il reste par contre du travail pour régler les problèmes de stabilité latérale, et cela nécessite donc une bonne vigilance de la part du pilote (beaucoup plus qu\'avec une horue ou un lokefoil).
</p><p>...prochain test avec le Loke et le F4 (on espère que ce ne sera pas dans 6 mois car la livraison traine un peu)
</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2016-10-01 21:20:39',
'updated_at' => '2020-03-26 22:41:57',
),
42 => 
array (
'id' => 44,
'device_id' => 66,
'user_id' => 1,
'title' => 'Premier test Windfoil Fone et Papenoo',
'body' => '<p><img src="/storage/photos/1/2016-08/fone-hybrid-900-2016-M4qZH0sCBw.jpg"></p><h4>Compte rendu de test
</h4><p>Préambule : je précise que les commentaires qui suivent sont des appréciations personnelles, et doivent être comprises comme étant relatives à ce que nous connaissons déjà par rapport aux tests précédents
</p><h5>Le foil Hybrid 900</h5><h4>Facilité d\'accès</h4><div>Le windfoil Fone est plutôt stable longitudinalement ... je dirai entre un horue (plus vif) et un loke (encore plus stable). Il est donc relativement facile de gérer la hauteur et il faut vraiment insister pour le faire sortir de l\'eau : on a l\'impression que même en cas d\'erreur, il fait une pause dans son ascension avant de sortir pour de bon. C\'est plutôt très rassurant pour ceux qui ne maîtrisent pas encore. La stabilité latérale est excellente : contrairement à de nombreux foil, on n\'a pas d\'effet de gite ou de contre gite, ni même de mouvements transitoires parasites de ce côté. Sur ce point encore, je le situerai à mi-chemin entre loke et horue, bien loin devant kerfoil, makofoil, etc.
</div><h4>Départ</h4><p>Le combo que nous avions sous les pieds avec la planche convertible papenoo ne permettait pas d\'avoir un départ ultra tôt. En effet, l\'ensemble nécessite un peu de vitesse et la rigidité du mat ne permet pas de monter sur un coup de pomping comme on peut le faire avec le horue par exemple.  C\'est donc un point sur lequel on peut mieux faire. Par contre, gros point positif, le départ de la montée sur le foil se fait très progressivement, ce qui permet de ne pas être surpris et de gérer facilement la suite des évènements.
</p><h4>Comportement à basse vitesse</h4><p>Lorsque la vitesse chute (jibe, remontée au vent, trou d\'air), le foil Fone conserve une bonne glisse et de l\'allonge, mais surtout un comportement très sein. Contrairement à d\'autres foils, on n\'a pas de brusque instabilités dues au décrochement. Avec le fone, on redescend tranquillement jusqu\'à amerrir.
</p><h4>Cap</h4><p>Les capacités à remonter au vent semble un peu plus limitées que la moyenne des foils, mais nous mettons ceci sur le compte de la planche et du manque des straps arrières. Cette allure nécessite en effet de se caler un peu mieux et c\'est assez compliqué avec le pied arrière qui se promène. On reste toutefois bien meilleur que n\'importe quelle planche de slalom.
</p><h4>Vibrations</h4><p>La rigidité de l\'aile et du stab permettent de ne pas percevoir de sifflement comme sur certains autres (je devrait dire beaucoup d\'autres). Par contre, on perçoit une vibration de fréquence assez basse, et nous l\'attribuons au mat en aluminium. Attention, cette vibration est assez douce et amortie : elle n\'est absolument pas gênante, et ne s\'entend pas.
</p><h4>Glisse<br></h4><p>Au niveau glisse, on est dans le milieu du peloton, avec un foil qui accélère quand même bien en abattant. <br>
</p><h4>Bilan</h4><div>Le mot qui caractérise le mieux ce foil est "Sein". Même si ses performances pures n\'en font pas un engin de compétition, c\'est assurément l\'un des foils parfait pour découvrir la discipline sans difficulté, et progresser à son rythme. Le concept modulaire de Fone permettra certainement de le faire évoluer vers la performance dans l\'avenir. Il faut aussi garder à l\'esprit que ce foil est aussi destiné au SUP et que le compromis est déjà très très réussi en wind pur.
</div><h5>Papenoo 7p11<br></h5><p>La planche est très agréable et facile d\'accès dès le départ. On est posé sur l\'eau avec beaucoup de stabilité, et même si elle n\'est pas très volumineuse, sa largeur est rassurante pour les manoeuvres.
</p><div>Le plan de pont est ultra confortable, mais attention à ne pas venir trop devant lors des virements de bord car en dehors du pads : aucun antidérapant ... c\'est donc gamelle assurée si vous envisagez un footing sur le nez.
</div><p>L\'accélération est moyenne et on sent qu\'il y a de l\'inertie .. autant qu\'avec une planche de freeride, mais bien plus que nos board dédiées full carbone.
</p><p>Une fois en l\'air, elle semble encore une fois assez imposante par rapport à nos boards dédiées et le manque de strap arrière se fait ressentir. On aurait un pilotage plus facile et fin avec. Là encore, l\'inertie est un peu pénalisante pour les sensations. Par contre, cette inertie peut être rassurante car elle calme les réactions du foil. C\'est au final une option que l\'on conseille pour les débuts.
</p><p>Lors des touchettes, la glisse reste très bonne sauf quand l\'avant touche ... si c\'est le cas, on sent une succion, et on perd très rapidement toute la vitesse. Il faut donc prendre l\'habitude de garder une assiète un peu positive pour éviter de repartir du début.
</p><h4>Conculsion
</h4><div>La planche n\'est évidemment pas à la hauteur de nos boards dédiées, mais il ne faut pas oublier que c\'est un SUP, et qu\'elle permet donc une quadruple utilisation (windfoil, windsup, sup, supfoil). En ceci, c\'est plutôt une réussite car elle offre un panel de possibilité assez large, et se comporte globalement comme une planche de freeride standard.
</div><h4>La video</h4><div class="fb-video" data-href="https://www.facebook.com/eric.collard.35/videos/10207410757770238/" data-width="800" data-show-text="false">
<blockquote cite="https://www.facebook.com/eric.collard.35/videos/10207410757770238/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/eric.collard.35/videos/10207410757770238/">winfoil</a>Premier test du foil Fone<br>Publié par <a href="https://www.facebook.com/eric.collard.35">Eric Collard</a> sur vendredi 19 août 2016
</blockquote>
</div>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2016-08-22 06:30:50',
'updated_at' => '2020-03-26 22:41:57',
),
43 => 
array (
'id' => 45,
'device_id' => 68,
'user_id' => 1,
'title' => 'Windfoil - Test Horue Vini & Tini',
'body' => '<h4>Horue Viny Foil + Custom Windfoil Tiaki V3</h4><p><img src="/storage/photos/1/2017-05/horue-vini-cr-lw-xlw-2016-qbsAdmeZXC.jpg" alt="4 août 2016 13:30:32"> </p><p>On a également testé le Horue avec le custom windfoil V3 Tiaki. Par rapport à la planche horue Tiny, on a choisi un volume de l\'ordre de 115L avec une planche plus courte et plus large, en particulier derrière. Le maître beau est également plus reculé, et les jeux d\'inserts permettent d\'utiliser à la fois un foil type Horue ou un foil type Mako. Avec ce combo, on gagne en facilité dans le light avec des minis exceptionnels et la possibilité d\'utiliser des grandes voiles dans le très light (testé jusqu\'à 7.8) et de pomper de façon très efficace. La largeur permet d\'avoir un positionnement des pieds très naturels et confortable.</p><p>Avec l\'aile XLW, ce combo est pour l\'instant notre meilleur choix pour le light, notamment grâce à la souplesse très dosée du mat Viny. Le pumping est ultra-efficace !</p><h4>Horue Viny Foil + flotteur Tiny</h4><p><img src="/storage/photos/1/2017-05/horue-vini-cr-lw-xlw-2016-NV8BHsHRl0.jpg"></p><p>Nous avons testé à la fois l\'aile super light wind avec la 120L (en 5.3m2) et l\'aile light Wind avec la 85L (en 4.7m2). Bien évidemment, la 85L nécessite un peu de technique et pas mal de tonicité au pumping pour décoller dans les petits airs (surtout avec lmes 80kg !! .. mais on y arrive).. mais quelle aisance et quelle maniabilité sur l\'eau ! Avec la 120L, le décollage est facile et la stabilité excellente dans les vents light à modérés (max 15 knt). Au delà, une aile plus petite est nécessaire pour ne pas s\'accrocher aux nuages. Au final, le combo Foil + planche dédiée nous est apparu très équilibré et le plus complet même dans des conditions de vent très changeantes. On a adopté et on proposera ce combo en vente au magasin.</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-16 12:19:31',
'updated_at' => '2020-03-26 22:41:58',
),
44 => 
array (
'id' => 46,
'device_id' => 76,
'user_id' => 1,
'title' => 'Windfoil - Test Horue Vini & Tini',
'body' => '<h4>Horue Viny Foil + Custom Windfoil Tiaki V3</h4><p><img src="/storage/photos/1/2017-05/horue-tiny-110-carbone-2016-B4S8IMcMeb.jpg" alt="4 août 2016 13:30:32"> </p><p>On a également testé le Horue avec le custom windfoil V3 Tiaki. Par rapport à la planche horue Tiny, on a choisi un volume de l\'ordre de 115L avec une planche plus courte et plus large, en particulier derrière. Le maître beau est également plus reculé, et les jeux d\'inserts permettent d\'utiliser à la fois un foil type Horue ou un foil type Mako. Avec ce combo, on gagne en facilité dans le light avec des minis exceptionnels et la possibilité d\'utiliser des grandes voiles dans le très light (testé jusqu\'à 7.8) et de pomper de façon très efficace. La largeur permet d\'avoir un positionnement des pieds très naturels et confortable.</p><p>Avec l\'aile XLW, ce combo est pour l\'instant notre meilleur choix pour le light, notamment grâce à la souplesse très dosée du mat Viny. Le pumping est ultra-efficace !</p><h4>Horue Viny Foil + flotteur Tiny</h4><p><img src="/storage/photos/1/2017-05/horue-tiny-110-carbone-2016-Ww4Ss88QBm.jpg"></p><p>Nous avons testé à la fois l\'aile super light wind avec la 120L (en 5.3m2) et l\'aile light Wind avec la 85L (en 4.7m2). Bien évidemment, la 85L nécessite un peu de technique et pas mal de tonicité au pumping pour décoller dans les petits airs (surtout avec lmes 80kg !! .. mais on y arrive).. mais quelle aisance et quelle maniabilité sur l\'eau ! Avec la 120L, le décollage est facile et la stabilité excellente dans les vents light à modérés (max 15 knt). Au delà, une aile plus petite est nécessaire pour ne pas s\'accrocher aux nuages. Au final, le combo Foil + planche dédiée nous est apparu très équilibré et le plus complet même dans des conditions de vent très changeantes. On a adopté et on proposera ce combo en vente au magasin.</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-05-16 12:19:31',
'updated_at' => '2020-03-26 22:41:58',
),
45 => 
array (
'id' => 47,
'device_id' => 77,
'user_id' => 1,
'title' => 'Gros potentiel de plaisir',
'body' => '<h4>Pr&eacute;sentation</h4>
<p>La Freefoil 112 fait 76cm de large pour 210 de longueur, et un OFO &agrave; 59cm. Elle est donc assez pinc&eacute;e, mais moins qu\'une Tiny 110 par exemple.</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-RyxN2NaRlf.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<p>Elle a un ma&icirc;tre beau situ&eacute; autour du pied de mat, et des ails plut&ocirc;t g&eacute;n&eacute;reux.&nbsp;</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-dZ23ADLPLx.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<p>Le design est tr&egrave;s armonieux, et le choix des couleurs met clairement en valeur ce mod&egrave;le. Sur l\'eau, &ccedil;a en met plein les yeux</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-A6x6HPQh2F.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<p>Les positions de footstraps sont tr&egrave;s nombreuses pour permettre une adaptation &agrave; un maximum de foils du march&eacute;.</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-AIwOCQL4RD.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<p>Les footstraps, nouveaux, sont une version all&eacute;g&eacute;e que nous n\'avions jamais eu chez Exocet</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-4SjMs3STrd.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<p>En ce qui concerne le boitier FoilBox, on salut d\'un grand Bravo Patrice qui a enfin r&eacute;ussi &agrave; obtenir, &agrave; notre demande, des trous oblongs de s&eacute;rie, comme sur les mod&egrave;les Starboard !</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-FiuJfpohyJ.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<h4>Sur l\'eau</h4>
<h4>A l&rsquo;arr&ecirc;t</h4>
<p>Les volumes sont plut&ocirc;t bien r&eacute;partis et la planche fait clairement plus de 110L vu la flottaison ! Je dirai que l\'on doit &ecirc;tre autour des 120L, mais pas plus.&nbsp;Avec 80 kg environ, on a les pieds au sec, mais &ccedil;a n&rsquo;est pas ultra stable en lat&eacute;ral car le volume est dans l\'&eacute;paisseur plus que dans la largeur. On pourra malgr&eacute; tout faire des virements de bord sans aucun probl&egrave;me. A titre de comparaison, c\'est nettement moins stable &agrave; l\'arr&ecirc;t que la Horue Airtime 125, mais plus relax quand on passe devant le pied de mat sur la Freefoil 112.</p>
<p>Compte tenu de la r&eacute;partition des volumes, on peut lancer la planche avec le pied avant dans le footstrap, sans &nbsp;faire cabrer le flotteur. C\'est un point important pour faciliter le d&eacute;collage.</p>
<h4>D&eacute;collage</h4>
<p>Dans les quelques ris&eacute;es de cette fin de journ&eacute;e, 2 ou 3 coups de pumping suffisent &agrave; faire acc&eacute;l&eacute;rer la planche et l&rsquo;arracher de l&rsquo;eau. On sent assez peu de r&eacute;sistance, et tr&egrave;s peu d&rsquo;inertie. Du coup, le d&eacute;collage est rapide et nul besoin de sur-toiler.</p>
<p>&nbsp;</p>
<h4>En vol</h4>
<p>Une fois en l&rsquo;air, on a un ensemble tr&egrave;s vif et intuitif, avec peu d&rsquo;inertie, ce qui rend la conduite ludique. On a vraiment la sensation que la planche r&eacute;pond imm&eacute;diatement aux ordres du pilote. C\'est r&eacute;ellement LE trait caract&eacute;ristique de ce flotteur ... et en cela, on est diam&eacute;tralement oppos&eacute; aux planches type Race voir Formula .. ou aux planches longues type Gecko Foil ou autre Thunderbolt 85. D\'ailleurs, nous &eacute;tions ici avec la version AST. Il me para&icirc;t tr&egrave;s probable que la version carbone n\'apporte rien :)</p>
<p>Par rapport &agrave; la <a href="/blog/windfoil-test-freefoil-132-carbone.html">Freefoil 132</a>&nbsp;(voir le test), la puissance sous le pied arri&egrave;re est nettement moindre, et l\'ad&eacute;quation avec le mat de foil de 97 cm n\'est pas id&eacute;ale.&nbsp;Ceci dit, il reste possible de naviguer avec un foil long, ce qui est plut&ocirc;t rare sur des planches d&rsquo;un tel gabarit. Bon clairement, on n\'est pas ici sur un flotteur fait pour g&eacute;n&eacute;rer de la puissance et des acc&eacute;l&eacute;rations de dingue. Amis racers ou &eacute;nerv&eacute;s du bourinage, passez votre chemin !</p>
<p>Comme d&rsquo;habitude, chez exocet, le pont plat favoris un excellent contr&ocirc;le en toute circonstance. En l&rsquo;occurrence, cela permet de jouer avec le flotteur et de le placer comme on veut, tout en corrigeant les erreurs de trajectoire ou de position ultra rapidement. La combinaison pont plat + tr&egrave;s faible inertie est assez magique, et on retrouve certains traits que l\'on avait d&eacute;j&agrave; ressenti en strapless sur la RRD Pocket Rocket et la Zeeko Airwave. De la m&ecirc;me fa&ccedil;on, la planche permet de g&eacute;rer facilement la contre g&icirc;te, et les touchettes sur le rail ne se sentent pratiquement pas.</p>
<p>Lors de ce test, j\'ai utilis&eacute; la voile que j\'avais sous la main : une Xo Fly en 6.6m2. Ce n&rsquo;est clairement pas la voile id&eacute;ale sur cette planche. Elle se mariera certainement avec beaucoup plus de bonheur avec des gr&eacute;ements ayant un wishbone plus court, et globalement plus l&eacute;gers. De m&ecirc;me, l\'ad&eacute;quation sera certainement id&eacute;ale avec des foils autour de 80 &agrave; 85cm, si possible typ&eacute;s freeride.</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-6wgZ0arSQY.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<h4>Touchettes</h4>
<p>Comme je l\'ai dit pr&eacute;c&eacute;demment, les touchettes sur le rail &agrave; la contre g&icirc;te ne se sentent presque pas. Ca rebondit moins qu\'avec la RF ou la Airtime, mais pas de ralentissement sensible : c\'est tout doux comme avec la JP Hydrofoil 120. Les touchettes sur l\'avant freinent un peu la planche : on est dans la moyenne. Sur l\'arri&egrave;re, par contre, il y a beaucoup de glisse.</p>
<p>D\'ailleurs, lors du Jibe, si on vient &agrave; toucher l&rsquo;eau, la glisse est tellement bonne que l&rsquo;on sent &agrave; peine le ralentissement. Il est parfaitement possible d&rsquo;entamer le Jibe en l&rsquo;air, et de finir en Jibe classique sans quasi aucun ralentissement : la relance se fait presque toute seule (m&ecirc;me pas besoin de pomper si on est dans une ris&eacute;e). De ce point de vue, rien &agrave; voir avec les mod&egrave;les free-race (RF 81, Airtime 125, AirRide 81, Foil 144, Hydrofoil 135 etc.) qui demandent plus de puissance &agrave; la relance.</p>
<p><img src="/storage/photos/1/2019-06/exocet-freefoil-112-ast-2019-MANNVaHdI8.jpg" alt="exocet freefoil 112 AST windfoil" /></p>
<h4>Premier Bilan</h4>
<p>Au final, malgr&eacute; des conditions de vent faibles et irr&eacute;guli&egrave;res de fin de journ&eacute;e, je me suis bien amus&eacute; avec ce nouveau flotteur, et il est &eacute;vident que l&rsquo;association id&eacute;ale sera avec des voiles entre 4 et 6,5m2, plut&ocirc;t l&eacute;g&egrave;res et avec un wish court. De m&ecirc;me, on mariera de pr&eacute;f&eacute;rence la Freefoil 112 avec des foils freeride autour de 80 &agrave; 85cm.&nbsp;La prochaine fois, je vais essayer ce flotteur avec le Taaroa No&eacute; 80, et la Xo Vega en 5.4&hellip; Je pense que ce sera un combo parfait !<br /><br />En terme de sensations g&eacute;n&eacute;rales, on retrouve un peu la compacit&eacute; et la facilit&eacute; que l&rsquo;on avait sur une une Horue Tiny 110, mais ici avec plus de volume sous le pied arri&egrave;re et nettement plus de contr&ocirc;le. Le pricipal caract&egrave;re de cette Freefoil : c\'est un prolongement de vos jambes tant la conduite est intuitive.</p>',
'test_equipment' => 'Gréement : Xo Fly 6,6 / Foil : Taaroa Sword RS',
'test_duration' => 3,
'test_conditions' => 'vent très irrégulier tombant, entre 5 et 12 knt',
'test_place' => 'La Ciotat',
'created_at' => '2019-06-07 09:39:47',
'updated_at' => '2020-04-03 16:37:58',
),
46 => 
array (
'id' => 48,
'device_id' => 78,
'user_id' => 1,
'title' => 'Pile dans la cible',
'body' => '<p><img src="/storage/photos/1/2019-04/tabou-airide-81-ltd-2019-PglV8dLC6E.jpg" alt="Tabou AirRide" /></p>
<h3>Association</h3>
<p>En terme d\'association, nous avons principalement associ&eacute; la AirRide aux foils Starboard GTS et Race, ainsi qu\'au Taaroa Sword. Pour ceux qui veulent pulv&eacute;riser les chronos, vous pouvez tester l\'association avec un Starboard carbone 95/95/550/225 ... &ccedil;a d&eacute;boule !</p>
<p>Dans tous les cas, nous avons d&eacute;couvert une planche tr&egrave;s moderne et tr&egrave;s attachante. Cette AirRide 81 est un parfait compromis qui vise la cat&eacute;gorie Free-race.</p>
<p>Elle est plus rac&eacute;e qu\'une Foil 122 Starboard, JP Hydrofoil 120 ou une Fanatic Sting Ray, mais moins encombrante qu\'une Starboard Foil 144 ou AHD Thunderbold 85.</p>
<p>Finalement, elle reprend le gabarit de la JP hydrofoil 135, avec un shape plus moderne. On a entre autre beaucoup plus d\'appui sous le pied arri&egrave;re pour g&eacute;rer les foils un peu puissants, et &agrave; la fois plus de glisse lors des touchettes. Finalement, le flotteur le plus proche auquel on pourrait comparer cette AirRide est la Horue Airtime 125.</p>
<p>En ce qui concerne la portance du flotteur, elle portera raisonnablement des voiles jusqu\'&agrave; 8m2.&nbsp;Au del&agrave;, on sort du programme.</p>
<h3>Glisse</h3>
<p>C&ocirc;t&eacute; glisse en d&eacute;collage, la Tabou est dans une bonne moyenne. Les gros cuts limitent un peu la stabilit&eacute; lors du pumping et l\'appui dans la premi&egrave;re acc&eacute;l&eacute;ration. La car&egrave;ne est toutefois assez glissante pour exploiter les foils qui n&eacute;cessitent de la vitesse pour d&eacute;coller (ailes &agrave; grand allongement). Par ailleurs, la construction LTD est plut&ocirc;t l&eacute;g&egrave;re et permet de faire poper la planche assez t&ocirc;t si le foil le permet.</p>
<p>C&ocirc;t&eacute; touchette, c\'est parfait sur l\'arri&egrave;re (merci les cuts), mais un peu moins bon sur l\'avant et les rails (surtout en comparaison avec l\'Airtime ou la RF81). Il ne faut donc pas h&eacute;siter &agrave; augmenter un peu plus de rake que d\'habitude pour le pas avoir d\'effet de frein, au jibe notamment. Une valeur autour de 2&deg; me parait pertinente.</p>
<h3>Contr&ocirc;le</h3>
<p>Pour ce qui est du plan de pont, les essais ont confirm&eacute; notre premi&egrave;re impression en statique : il est tr&egrave;s r&eacute;ussi ! Sous le pied arri&egrave;re, c\'est parfait, et j\'ai pr&eacute;f&eacute;r&eacute; la position lat&eacute;rale interm&eacute;diaire avec un strap bien serr&eacute; pour profiter d\'un maximum d\'appui sur le pont. On a un peu moins de puissance qu\'avec un pont plat, mais c\'est tr&egrave;s agr&eacute;able et moins perturbant pour pas mal de monde.</p>
<p>Sous le pied avant, j\'airai pr&eacute;f&eacute;r&eacute; des straps moins orient&eacute;s dans l\'axe de la navigation, notamment pour pouvoir chausser plus facilement avant le d&eacute;collage.</p>
<p>Enfin, merci &agrave; la grande amplitude de r&eacute;glage des straps car elle permet r&eacute;ellement de jouer avec de nombreux foils, et de trouver &agrave; chaque fois un &eacute;quilibre quasi parfait.</p>
<p>Que ce soit par sa r&eacute;partition de volume que par con poids, l\'inertie ressentie de la AirRide est assez faible. C\'est en particulier bien meilleur que le prototype test&eacute; en fin d\'ann&eacute;e 2018. Sans atteindre la r&eacute;acrtivit&eacute; de la Airtime sur ce point de vue, on est bien moins encombrant que le Sb 144 par exemple.</p>
<h3>Bilan</h3>
<p>La AirRide entre directement dans le top 3 de nos flotteurs pr&eacute;f&eacute;r&eacute;s. Dans une optique free-race compacte, elle correspond r&eacute;ellement &agrave; ce que nous cherchons pour des voiles inf&eacute;rieures &agrave; 8m2. Mention sp&eacute;ciale &agrave; un plan de pont ultra agr&eacute;able sous le pied arri&egrave;re.</p>',
'test_equipment' => 'IRIS X 7,4 et 5,8, le Xo Fly en 6,6, et la Vega en 5,4 / Foil Taaroa UHM, et Loke LK1',
'test_duration' => 3,
'test_conditions' => 'Divers',
'test_place' => 'La ciotat - Le Jaï - Serre Ponçon',
'created_at' => '2019-04-23 15:27:55',
'updated_at' => '2020-04-03 16:42:35',
),
47 => 
array (
'id' => 49,
'device_id' => 79,
'user_id' => 1,
'title' => 'Windfoil - Horue Eco 121 - Le test ',
'body' => '<p>A l’occasion de notre WE conviviale Windfoil à Serre-Ponçon, Philippe Caneri avait mis à disposition la Eco 121 première de série. Cette board a pour vocation de compléter le foil H10Evo (sortie prévue en Sept) dans un pack Board + Foil qui sera proposé autour de 2000€. Cela en fera le pack le plus accessible du marché.<br>
</p><h4>Conditions du test</h4><p>Lac de Serre Ponçon
</p><p>Vent : 15knt environ
</p><p>Flotteur : Horue Eco 121
</p><p>Foil : Vini LW
</p><p>Voile : Horue Swart 5.0
</p><p>Mat : Reptile Python 100
</p><h4>Présentation</h4><p>Avouons que la Eco 121 a de loin un outline assez proche de la Tiny. Même si le shape est différent, le lien de parenté est assez évident. Nous n’avions pas de tiny 120 pour faire une comparaison board à bord.
</p><p>En terme de construction, la Eco n’est cette fois plus une full carbone, mais un sandwich PVC / verre avec renfort carbone. Dans les mains, elle est un peu plus lourde mais cela reste très raisonnable. Décidément, Flika maîtrise les clés d’une construction solide et légère.
</p><p>En dehors de la construction, la présentation est identique avec les mêmes pads / straps … et le même système d’inserts de strap en inox. Ce système garanti une très bonne durée dans le temps en cas de vissage / dévissage réguliers, mais attention à bien travailler dans l’axe car il est très facile de foirer un insert … donc du doigté et pas de précipitation.
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/horue-eco-121-2017-dhdcebuEAG.jpg">
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/horue-eco-121-2017-QTlrR2D63f.jpg">
</p><h4>Sur l’eau</h4><p>A défaut de disponibilité du H10 Evo, nous avons testé la Eco avec le Vini.
</p><p>A l’arrêt, les 120L sont bien là, et même si c’est court devant, la largeur permet de relever le gréement au tire veille sans galèrer (je fais 78kg). L’antidérappant est excellent, un point aussi rassurant quand ça bouge un peu.
</p><p>Au pumping, la planche prend rapidement de la vitesse en offrant peu de trainée. En comparaison avec nos planches de 85cm de large, on force bien moins ici. La largeur sous le pied arrière sera malgré tout largement suffisante pour gérer un foil typé freeride (comme le Vini, et certainement le H10).
</p><p>Malgré le poids un peu plus important de la planche, et ma petite voile (5m2 dans 15knt de vent) le décollage est rapide … il faut dire que la Swart a du jus à revendre !
</p><p>Une fois en l’air, on a un équilibre plus pied arrière qu’avec la tiny. Ce sera rassurant pour les débutants car tous ont tendance à se mettre un peu trop en arrière. Pour nous qui sommes habitué à l’équilibre parfait du couple Viny / Tiny, c’est un peu moins agréable, mais absolument pas ingérable (on a vu 1000 fois pire !!!). Il faut juste garder toujours plus de pression sous le pied arrière sous peine de re-poser immédiatement. Ceci est peut être lié au poids un peu plus important de la planche, qui n’est plus entièrement compensé par l’effet déporteur du stab. Gageons que Philippe aura prévu un peu plus d’effet déporteur sur le H10Evo pour rééquilibrer tout ça.
</p><p>Même si d’apparence les planches sont quasi identiques, j’ai subjectivement préféré le plan de pont de l’Eco à celui de la tiny sous le pied arrière … peut être le placement des straps, ou peut être juste ma mémoire qui me joue un tour. Toujours est-il qu’on est parfaitement posé sur cette Eco 121.
</p><p>En terme de contrôle, le foil Viny reste fidèle à lui même monté sous l’éco : ultra maniable et joueur, souple et dynamique, mais nécessitant une conduite douce et une position relativement verticale. On gère l’équilibre et on laisse glisser. La contre gîte, le cap à outrance et la vitesse, c’est pas son truc, alors on ne l’achètera pas pour cela.
</p><p>Lors des touchettes par l’avant, et comme la tiny, l’éco s’en sort très bien avec très peu d’effet de scussion. L’arrière également glisse sans trop freiner grâce à sa largeur contenue. Par contre, compte tenu de cette largeur sous le pied arrière, l’Eco sera à privilégier avec des foils freeride pas trop puissants (Vini, H10, Slingshot, Mako, Aeromod) car on n’aura absolument pas le bras de levier nécessaire pour exploiter correctement des AFS2, Starboard, F4, Zeeko, Pryde AL ou autre Select .. un point important à avoir en tête en fonction de direction que l\'on souhaite prendre.
</p><p><img src="/storage/photos/1/2017-08/horue-eco-121-2017-Lh8fd4MPL1.jpg"></p><h4>Conclusion</h4><p>Avec cette Eco, Horue prépare un pack premier prix alléchant .. à condition que le H10 tienne ses promesses, et que vous cherchiez un foil type freeride (navigation assez droite et allure travers privilégiée). En tout cas, côté flotteur, le contrat est rempli et la différence avec la Tiny 120 est finalement assez ténue. A 2000eur l’ensemble, et compte tenu du plaisir apporté par un flotteur dédié, l’option du vieux flotteur recyclé va devenir de moins en moins intéressante.
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/horue-eco-121-2017-aKoVmhnlbX.jpg">
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-08/horue-eco-121-2017-ZZRj0VXX7V.jpg">
</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-08-21 21:40:00',
'updated_at' => '2020-03-26 22:41:58',
),
48 => 
array (
'id' => 50,
'device_id' => 80,
'user_id' => 1,
'title' => 'Un nouvelle référence accessibilité',
'body' => '<h3>Montage</h3>
<p>Aucun soucis particulier. Pour une fois, les vis de boitier sont tomb&eacute;es direct en face de celles du foil, donc pas besoin d\'ovaliser les trous ... &ccedil;a progresse chez Cobra ;)</p>
<p><img src="/storage/photos/1/2019-05/exocet-freefoil-132-carbone-2019-WFppxcYZlx.jpg" alt="Exocet Freefoil 132" /></p>
<p>Lors des manipulations pour la mise &agrave; l\'eau, on a un flotteur qui se manipule facilement, et on ne ressent pas des 9,5 kg annonc&eacute;s.</p>
<h3>A l\'eau</h3>
<p>Lorsque l\'on monte dessus, c\'est tr&egrave;s stable et &eacute;quilibr&eacute;. On a bien les 135L annonc&eacute;s (au moins), mais sans avoir l\'impression d\'&ecirc;tre sur un paquebot. Les manoeuvres sont ais&eacute;es, et on garde les pieds bien au sec.</p>
<p>Le volume a l\'arri&egrave;re est cons&eacute;quent, mais un peu moins que sur la RF. On va d&eacute;coller avec le pied dans le strap avant, mais c\'est un peu juste pour mettre &eacute;galement le pied dans le stap arri&egrave;re avant de voler. Peu importe, la phase de d&eacute;collage est assez courte, et avec le pont plat, d&eacute;placer le pied arri&egrave;re pour chausser ensuite est un jeu d\'enfant. Cette facilit&eacute; est renforc&eacute;e par le fait que le strap est peu excentr&eacute;, donc facile &agrave; trouver avec le pied.</p>
<h3>D&eacute;collage</h3>
<p>Comme sur la RF, le d&eacute;collage n&eacute;cessite de rester travers voir l&eacute;g&egrave;reemnt abatu. Comme la planche est tr&egrave;s courte, elle a tendance &agrave; vouloir lofer un peu. J\'ai dimin&eacute; cet effet en reculant le pied de mat (j\'&eacute;tais &agrave; 133 eu d&eacute;part, mais fianlement, j\'ai &eacute;t&eacute; plus &agrave; l\'aise autour de 128 ou 130). Il est important de garder la planche dans la trajectoire si on veut d&eacute;coller vite. Il faut donc &ecirc;tre plus vigilant &agrave; ceci sur ces planches courtes que sur une Starboard 122 par exemple. En contre partie, il est plus facile de faire poper la planche (la faire d&eacute;coller d\'un coup par un petit appui bref sur le pied arri&egrave;re) d&egrave;s que l\'on a un peu de vitesse.&nbsp;</p>
<p>Grosse diff&eacute;rence avec la RF, la freefoil acc&eacute;l&egrave;re tr&egrave;s facilement avant le d&eacute;collage, et pas besoin d\'une puissance de fou : 3 coups de pumping et &ccedil;a acc&eacute;l&egrave;re tout seul. On retourve un peu ce que l\'on avait sur la JP 135, en encore plus marqu&eacute; ici ... et pourtant, la planche fait un bon 86cm de large. En tout cas, cela va plaire &agrave; tous ceux qui ne veulent pas utiliser de grosses voiles.</p>
<p>Vous me direz, jusque l&agrave;, on avait d&eacute;j&agrave; &ccedil;a avec la JP, voir avec encore plus avec des planches comme les Tiny Horue ... alors qu\'est ce qu\'apporte la Freefoil&nbsp;par rapport &agrave; ces flotteurs qui sont sur le march&eacute; depuis quelques saisons d&eacute;j&agrave; ??? On y vient ;)</p>
<p><img src="/storage/photos/1/2019-05/exocet-freefoil-132-carbone-2019-9JZGqCp8Cy.jpg" alt="Exocet Freefoil 132" /></p>
<h3>Contr&ocirc;le</h3>
<p>Eh oui, le 2e effet kisscooll (comme dirait la pub), c\'est le contr&ocirc;le lat&eacute;ral qu\'apporte la Freefoil en l\'air. Et pour le coup, on retrouve des grosses similitudes avec la RF. Le pont plat offre un appui ultra facile et tr&egrave;s solide .. au point que l\'on oublie vite le c&ocirc;t&eacute; un peu pinc&eacute; de la planche sur l\'arri&egrave;re. Avec cet arri&egrave;re &agrave; la Horue, et des straps tr&egrave;s centr&eacute;s, je m\'attendais &agrave; une planche tr&egrave;s typ&eacute;e freeride , et limit&eacute;e &agrave; des mats de foils courts, mais j\'ai &eacute;t&eacute; surpris de m\'&ecirc;tre compl&egrave;tement tromp&eacute;. Comme quoi, on se fait des fois des id&eacute;es un peu trop rapidement.</p>
<p>Dans les faits, j\'ai test&eacute; la Freefoil avec un mat de 85, puis de 95 et enfin de 97 ... et bien aucun probl&egrave;me : elle g&egrave;re, cette petite Freefoil. M&ecirc;me avec le 97, aucune instabilit&eacute; lat&eacute;rale, et pas de sensation de ne pas contr&ocirc;ler le foil. Au contraire, on est serain et on se prend vite au jeu de la contre g&icirc;te ... dans une facilit&eacute; d&eacute;concertante.</p>
<p>C&ocirc;t&eacute; &eacute;quilibre longitudinal, la Freefoil est tr&egrave;s ludique comme souvent avec les planches courtes. Elle a peu d\'inertie, et reste donc toujours tr&egrave;s vivante. En alternant entre la Starboard Foil 144 , et la Freefoil 132 (m&ecirc;me largeur), on a vraiment des sensations tr&egrave;s diff&eacute;rentes : un c&ocirc;t&eacute; assez bloqu&eacute; avec la 144 (proche des sensations de race), et un c&ocirc;t&eacute; tr&egrave;s libre sur la Freefoil. Les 2 sont tr&egrave;s agr&eacute;ables, mais on a vraiment 2 visages du foil, avec pourtant des mensurations assez proches ... et dire que certains sont encore persuad&eacute;s que le flotteur n\'a pas d\'importance en foil.... ils se trompent tellement !</p>
<h3>Glisse</h3>
<p>C&ocirc;t&eacute; touchettes, la Freefoil ne fait pas aussi bien que la RF ou qu\'une Airtime (on ne peut quand m&ecirc;me pas tout avoir !). la glisse est un peu moins bonne, que ce soit sur l\'arri&egrave;re ou sur les rails. Il faut dire que la RF a mis la barre tr&egrave;s tr&egrave;s haut. L&agrave;, on est dans la bonne moyenne de ce qui se fait aujourd\'hui. En tout cas, les rails bien boxy jouent parfaitement leur r&ocirc;le : m&ecirc;me si on se loupe, cela n\'enfourne jamais.&nbsp;</p>
<h3>Feeling g&eacute;n&eacute;ral</h3>
<p>Dans les manoeuvres, enfin, la Freefoil est juste magique. Entre le peu d\'inertie de la planche, et le plan de pont tr&egrave;s plat, les jibes sont super faciles. Je en suis pas un sp&eacute;cialiste des figures de style, mais cette planche donne envie d\'aller chercher plus ... un 360 peut &ecirc;tre ?</p>
<p>Autre remarque importante : en d&eacute;ballant la planche, j\'avais trouv&eacute; les footstraps tr&egrave;s centr&eacute;s et j\'avais peur que l\'on ne puisse pas exploiter tout larri&egrave;re de la planche. En r&eacute;alit&eacute;, on a bien le talon au raz du rail si les straps ne sont pas trop l&acirc;ches. Donc l&agrave; aussi, l\'effet d\'optique est trompeur.</p>
<p>Ah oui, j\'oubliais un truc compl&egrave;tement futile, mais tellement important &agrave; mes yeux : sur l\'eau, le orange fluo du nez de la planche tranche avec les diff&eacute;rent bleus de l\'eau .. et c\'est juste Magnifique !&nbsp;</p>
<p><img src="/storage/photos/1/2019-05/exocet-freefoil-132-carbone-2019-AQDH2Qj9Ac.jpg" alt="Exocet Freefoil 132" /></p>
<h3>Bilan</h3>
<p>Au final, j\'ai &eacute;t&eacute; assez bluff&eacute; par la polyvalence de ce nouveau flotteur. Ce qui le qualifierai le plus, c\'est <strong>Plug and Mostly Play</strong> !!! J\'ai pris beaucouop de plaisir quelque soit le foil que je lui ai coll&eacute; aux fesses. A chaque fois, c\'est une navigation pleine de sensations, mais avec un contr&ocirc;le facile. Si on y ajoute un d&eacute;collage tr&egrave;s accessible avec peu de train&eacute;e, on a une vraie r&eacute;ussite.</p>
<h3>Edit</h3>
<p>Apr&egrave;s avoir test&eacute; cette 132 version carbone, nous avons pass&eacute; un peu de temps sur la 112 AST. Encore plus maniable, mais un peu plus technique dans le light, elle s\'est averr&eacute; redoutablement efficace. Avec un foil adapt&eacute; (test avec le Noe 80), c\'est &eacute;galement un pur plaisir, &agrave; condition de ne pas charger de toile (sur la 112). Cet essai a &eacute;galement permis de valider le choix d\'une construction AST : sur ce type de flotteur compact, c\'est une solution hautement recommandable car la diff&eacute;rence au d&eacute;collage et en vol est &agrave; peine perceptible. Vu le tarif, difficile d\'h&eacute;siter :)</p>
<p>Exocet Freefoil AST : <a href="/windfoil/u38483s1-exocet-freefoil-ast-exocet-2019.html"> &agrave; partir de 1229&euro; !</a></p>
<p>Exocet Freefoil Carbone : <a href="/windfoil/u38430s1-exocet-freefoil-carbone-exocet-2019.html">&agrave; partir de 1990&euro;</a></p>',
'test_equipment' => 'Voile Iris X 5,8 / Foils :  Taaroa Noe 97 Freerace et Starboard GT carbone',
'test_duration' => 3,
'test_conditions' => 'Vent 10-20 knt Ouest / Nord-Ouest - Plan d\'eau plat',
'test_place' => 'La Ciotat / Serre-Ponçon (ultra light Wind)',
'created_at' => '2019-05-06 21:15:19',
'updated_at' => '2020-04-03 16:40:49',
),
49 => 
array (
'id' => 51,
'device_id' => 81,
'user_id' => 1,
'title' => 'Evolution réussie',
'body' => '<p>A l&rsquo;occasion de notre WE convivial Windfoil &agrave; Serre-Pon&ccedil;on le 12 Aout, NeilPryde France nous avait mis &agrave; disposition une Hydrofoil 120 Pro Edition (d&eacute;j&agrave; pr&eacute;sent&eacute; sur ce blog). Cette fois, c&rsquo;&eacute;tait sur l&rsquo;eau que &ccedil;a s&rsquo;est pass&eacute;</p>
<h3>Pr&eacute;sentation</h3>
<p>Je ne reviendrai pas en d&eacute;tail sur la pr&eacute;sentation du flotteur, que vous retrouverez <a href="/blog/windfoil-presentation-jp-hydrofoil-120-2019.html">ici</a>. Compte tenu de ses mensurations, l&rsquo;hydofoil 120 a clairement une cible freeride. Il nous paraissait donc pertinent de la tester avec un foil comme le Noe et son mat de 80cm, et avec une voile de 7m l&eacute;g&egrave;re &agrave; 2 cam. Nous avons &eacute;galement test&eacute; l&rsquo;H120 avec un foil &agrave; grand mat (95) et une voile de 8m pour en appr&eacute;cier les limites.</p>
<p>Le montage de nos foils de test n&rsquo;a pos&eacute; aucun probl&egrave;me, et pour une fois nous n&rsquo;avons pas &eacute;t&eacute; oblig&eacute; d&rsquo;ovaliser les trous des vis.</p>
<h3>Sur l&rsquo;eau</h3>
<p>A l&rsquo;arr&ecirc;t, les 120L sont bien l&agrave;, et la planche est tr&egrave;s &eacute;quilibr&eacute;e. Malgr&eacute; la longueur plut&ocirc;t tr&egrave;s faible, il est parfaitement possible de faire un virement de bord sans avoir &agrave; bondir d&rsquo;un c&ocirc;t&eacute; &agrave; l&rsquo;autre. Subjectivement, je parierai qu&rsquo;elle fait plut&ocirc;t 125L compte tenu de sa flottabilit&eacute;. La largeur g&eacute;n&eacute;reuse permet de relever le gr&eacute;ement au tire veille sans gal&egrave;rer (je fais 78kg). L&rsquo;antid&eacute;rappant est excellent, un point aussi rassurant quand &ccedil;a bouge un peu.</p>
<p>Au pumping, la planche prend rapidement de la vitesse en offrant une train&eacute;e tr&egrave;s correcte pour une planche d&eacute;di&eacute;e. Je dirai que l&rsquo;on est entre la Starboard Foil 122 (notre r&eacute;f&eacute;rence dans ce domaine) et la JP Hydrofoil 135 de ce point de vue. En comparaison avec nos planches de 85cm de large, on force moins ici. La largeur sous le pied arri&egrave;re sera malgr&eacute; tout suffisante pour g&eacute;rer facilement un foil typ&eacute; freeride (comme le Noe que nous avions sous les pieds lors du test). Pour prendre de la vitesse dans le vent tr&egrave;s light, la compacit&eacute; de la planche nous incite &agrave; plus nous reculer qu&rsquo;avec l&rsquo;hydrofoil 135 ou la Foil 122, et &agrave; abattre un peu plus. D&egrave;s que l&rsquo;on sent un appui un peu plus cons&eacute;quent sur la voile, il suffit alors de lofer progressivement pour provoquer le d&eacute;collage et l&rsquo;acc&eacute;l&eacute;ration. Tout ceci se fait avec beaucoup de douceur et de progressivit&eacute; &agrave; condition d&rsquo;avoir un peu de doigt&eacute;.</p>
<p>Une fois en l&rsquo;air, on a un &eacute;quilibre tr&egrave;s semblable &agrave; celui qu&rsquo;offrait l&rsquo;Hydrofoil 135. La 120 a encore moins d&rsquo;inertie et permet de contr&ocirc;ler avec facilit&eacute; l&rsquo;assiette longitudinale. Compte tenu de sa compacit&eacute;, on aura tout int&eacute;r&ecirc;t &agrave; lui associer un foil plut&ocirc;t assez stable sur cet axe pour na pas rendre la conduite compliqu&eacute;e (AFS 85, loke Envol , Taaroa Noe, Starboard GT &hellip; id&eacute;alement). J&rsquo;ai test&eacute; l&rsquo;Hydrofoil 120 avec une 7m (Phantom IRIS) et une 8m2 (Severn Hyperglide). Le flotteur est parfaitement capable de g&eacute;rer les 2 surfaces, mais il est tr&egrave;s clairement plus &eacute;quilibr&eacute; et agr&eacute;able avec la 7m. Ceci conforte le positionnement freeride de ce nouveau flotteur, et je le conseillerai id&eacute;alement avec des voiles pas trop lourdes (2 cam max) de 7.5m2 maxi.</p>
<p>Sur l&rsquo;axe transversal, la largeur sous le pied arri&egrave;re est parfaite pour conduire avec facilit&eacute; un foil typ&eacute; freeride, avec un mat entre 75 et 85cm. Avec un mat de 95cm, on sent que l&rsquo;on manque un peu de contr&ocirc;le par rapport &agrave; nos r&eacute;f&eacute;rences (RF81, Horue AirTime, Elix F1X). Avec ces derni&egrave;res, la largeur ou le plan de pont plus plat permettent au pied arri&egrave;re d&rsquo;apporter plus de ma&icirc;trise de l&rsquo;assiette de la planche. En terme de plan de pont justement, l&rsquo;Hydrofoil 120 reprend ce que nous avions sur la 135L. Le placement du pied avant est absolument parfait. Pour le pied arri&egrave;re, on a exactement la place n&eacute;cessaire pour poser le pied sur le pont, mais j&rsquo;aurai aim&eacute; une courbe un peu moins marqu&eacute;e sous le talon pour pouvoir donner un surplus de contr&ocirc;le.</p>
<p>Lors des touchettes par l&rsquo;avant, l&rsquo;Hydrofoil s&rsquo;en sort tr&egrave;s bien avec tr&egrave;s peu d&rsquo;effet de scussion. L&rsquo;arri&egrave;re &eacute;galement glisse sans trop freiner gr&acirc;ce &agrave; sa largeur contenue. C&rsquo;est un plus pour boucler les jibes sans s&rsquo;arr&ecirc;ter lorsque l&rsquo;on n&rsquo;arrive pas (comme moi) &agrave; rester 100% en vol lors de la manoeuvre. C&rsquo;est sur les touchettes de rail &agrave; la contre-g&icirc;te que nous attendions avec impatience la JP. Pour rappel, c&rsquo;&eacute;tait le plus gros d&eacute;faut de l&rsquo;Hydrofoil 135 &agrave; notre go&ucirc;t et le nouveau shape de la 120 laissait esp&eacute;rer une nette am&eacute;lioration. Et bien, pour le coup, l&rsquo;essai est transform&eacute; en beaut&eacute;. Je pense m&ecirc;me qu&rsquo;elle remporte la palme parmi tous les flotteurs test&eacute;s &agrave; ce jour !!</p>
<p><img src="/storage/photos/1/2018-08/jp-australia-hydrofoil-120-fws-2018-d5o4qoH60E.jpg" /></p>
<h3>Association</h3>
<p>Nous avons test&eacute; la JP 120 avec 4 foils diff&eacute;rents. Comme habitudes, toutes les associations ne sont pas heureuses. Avec le GTS, et GT alu et le Taaroa, on a un ensemble plut&ocirc;t &eacute;quilibr&eacute; et tr&egrave;s agr&eacute;able. Avec le SB race et le Lk1, l\'ensemble devient plus pied avant, et n&eacute;cessite des calages de stab pour pouvoir naviguer. Sur le Lk1, la conjugaison nervosit&eacute; du foil &amp; &eacute;quilibre pied avant nous a jou&eacute; des tour d&egrave;s que le vent prenait de la force ... on va dire que l\'on &eacute;tait pas des plus serein dans cette configuration.</p>
<h3>Conclusion</h3>
<p>Avec l&rsquo;Hydrofoil 120, JP propose exactement le flotteur dont le march&eacute; avait besoin. En chipotant, j&rsquo;aurai id&eacute;alement pr&eacute;f&eacute;r&eacute; un plan de pont un peu moins vout&eacute; sous le talon arri&egrave;re, mais j&rsquo;attends de la tester dans des conditions un peu plus muscl&eacute;es pour v&eacute;rifier si cela a r&eacute;ellement un impact sur le contr&ocirc;le. En tout cas, l&rsquo;hydrofoil 120 correspond &agrave; 100% aux attentes des foileurs de moins de 80kg, qui naviguent essentiellement avec des voiles de moins de 7,5m2 et 2 cam max. Elle se paye le luxe d&rsquo;&eacute;tablir une nouvelle r&eacute;f&eacute;rence en terme de glisse sur le rail &agrave; la contre-g&icirc;te.</p>
<p>Cette nouvelle JP vient donc se positionner dans le m&ecirc;me cr&eacute;neau que la Starboard foil 122. Ces 2 flotteurs partagent ainsi la m&ecirc;me cible, avec un c&ocirc;t&eacute; un peu plus sportif pour la JP (plus compacte et un poil plus large et puissante sous le pied arri&egrave;re), et un c&ocirc;t&eacute; un peu plus facile pour la Starboard (plan de pont et longueur).</p>
<p>&nbsp;</p>',
'test_equipment' => 'Foil : Starboard GTS / Race / GT alu - Taaroa Noe 80 et 97 - LK1 / Voile : HyperGlide 8.0 et Phantom IRIS 7.0',
'test_duration' => 3,
'test_conditions' => 'Vent : 5-12knt',
'test_place' => 'Lac de Serre Ponçon',
'created_at' => '2018-08-13 23:18:56',
'updated_at' => '2020-04-03 17:00:24',
),
50 => 
array (
'id' => 52,
'device_id' => 82,
'user_id' => 1,
'title' => 'Etonnante machine à glisse',
'body' => '<p>Nous ne reviendrons pas sur la pr&eacute;sentation de ce nouveau flotteur freeride foil, mais vous pouvrer la retrouver dans notre blog. Apr&egrave;s avoir inspect&eacute; le flotteur sous tous les angles, nous avions &agrave; la fois beaucoup d&rsquo;espoirs car de nombreuses caract&eacute;ristiques s&rsquo;av&eacute;raient prometteuses. D&rsquo;autres, par contre, nous faisait plut&ocirc;t peur .. avec en t&ecirc;te la forme des rails qui nous faisaient craindre des touchettes assaisonn&eacute;es &agrave; la colle.</p>
<p>Malgr&eacute; une temp&eacute;rature frisquette, les conditions &eacute;taient parfaites pour tester enfin ce nouveau flotteur, avec un plan d&rsquo;eau plat et un vent irr&eacute;gulier de 10 &agrave; presque 20 knt.</p>
<p><img src="/storage/photos/1/2018-03/starboard-foil-122-flex-balsa-2018-B5py9ZoVUU.jpg" /></p>
<p><img src="/storage/photos/1/2018-03/starboard-foil-122-flex-balsa-2018-UHwXBaOpKp.jpg" /></p>
<p>D&egrave;s la mise &agrave; l&rsquo;eau, l&rsquo;&eacute;quilibre du flotteur surprend au regard de son volume. M&ecirc;me si la planche ne fait que 122L, elle m&rsquo;apparut plus stable que certain flotteur en faisant plus de 130. On sent que le volume est tr&egrave;s bien r&eacute;parti. De plus, la forme tr&egrave;s &lsquo;rectangulaire&rsquo; de l&rsquo;outline am&eacute;liore encore l&rsquo;&eacute;quilibre transversal.</p>
<h3>D&eacute;collage</h3>
<div>D&egrave;s les premi&egrave;re ris&eacute;e, la planche acc&eacute;l&egrave;re vite et avec tr&egrave;s peu d&rsquo;effort. Le d&eacute;part planning est presque imm&eacute;diat. D&egrave;s lors, le foil prend le relais et le d&eacute;collage est tr&egrave;s rapide.</div>
<div>On retrouve ainsi un d&eacute;collage qui ressemble &agrave; ce que l&rsquo;on avait avec la Tiny : rapide et avec peu de besoin de puissance. Une fois de plus, la combinaison d&rsquo;un car&egrave;ne tendue avec une largeur mod&eacute;r&eacute;e montre son efficacit&eacute;. Si on choisi de faire du foil avec des petites voiles, c&rsquo;est assur&eacute;ment la meilleur voie.</div>
<h3>En vol</h3>
<div>D&egrave;s les premiers m&egrave;tre en vol, 2 choses sautent aux yeux :</div>
<ul>
<li>le c&ocirc;t&eacute; intuitif en sensitif : le retour d&rsquo;information est tr&egrave;s bon, on sent ce qu&rsquo;il se passe, et la planche r&eacute;agit &agrave; la moindre sollicitation. Il n&rsquo;y a pas d&rsquo;inertie si de d&eacute;calage : on sent que l&rsquo;on fair corp avec le flotteur.</li>
<li>La plan de pont est tr&egrave;s agr&eacute;able, et les strap id&eacute;alement positionn&eacute;s : on a un excellent appui sous le pied arri&egrave;re, et la largeur de la planche permet d&rsquo;agir le pied bien &agrave; plat. Le bras de levier g&eacute;n&eacute;reux permet de g&eacute;rer sans aucun probl&egrave;me un foil de 95 comme le GTS.</li>
</ul>
<h3>Touchettes</h3>
<div>C&rsquo;est clairement le point sur lequel nous attendions la Foil 122. Nous avions peur que les touchettes soient brutales compte tenu de la forme des rails. J&rsquo;ai &eacute;t&eacute; tr&egrave;s &eacute;tonn&eacute; de constater le contraire. Nous avons pourtant jou&eacute; &agrave; op&eacute;rer des descentes brutales pour pousser le vis, mais d&eacute;cid&eacute;ment, elle pardonne beaucoup et garde en permanence de la glisse.</div>
<div>M&ecirc;me les amerrissages lors du jibe se font avec douceur.</div>
<div>Petite explication tr&egrave;s int&eacute;ressante de Tiesda concernant ces fameux rails :</div>
<blockquote>"Les rails carr&eacute;s ont &eacute;t&eacute; faits pour &eacute;viter l\'effet bouchon du flotteur lors de touchettes. En effet, le but est de ne pas charger d\'eau le pont lors de l\'impact et ainsi freiner le flotteur. <br />De fait, le V de car&egrave;ne chasse l\'eau &agrave; l\'impact, et celle ci ne remonte pas sur le pont lors d\'une touchette violente, ce qui pourrait &ecirc;tre le cas avec un flotteur aux rail plus couch&eacute;s, ou avec un rocker tendu. Le rocker adapt&eacute; permet de ne pas avoir d\'effet spatule.<br />Autre point, on peut le constater sur les flotteurs ayant un rail assez rond (exemple foil147) : au moment o&ugrave; tu remontes en vol apr&egrave;s ta touchette. Le rail droit de la foil 122 permet de remonter en vol en gardant la m&ecirc;me ligne qu\'avant l\'impact. <br /><br />Les flotteurs aux rails plus ronds prennent plus facilement la direction donn&eacute;e par l\'appui des pieds lors de l\'impact (talon souvent) et donc cela g&eacute;n&egrave;re des au-lof&eacute;s au moment o&ugrave; le pratiquant a besoin de calmer la b&ecirc;te. Gr&acirc;ce aux rails droits, les fautes d\'appui lors des touchettes sont pardonn&eacute;es et le flotteur reste dans sa ligne.<br />L\'objectif est donc d\'avoir un flotteur qui rebondi lors de la touchette, en gardant sa ligne et ainsi en limitant toute perte de vitesse."</blockquote>
<div>&nbsp;</div>
<div>&nbsp;</div>
<h3>R&eacute;glages</h3>
<p>Le montage est toujours aussi simple gr&acirc;ce aux trous oblongs starboard, et aux vis &agrave; fleur de pont ! Les autres marques, merci d\'en prendre le la graine !!!</p>
<p><img src="/storage/photos/1/2018-03/starboard-foil-122-flex-balsa-2018-o9045xZOsm.jpg" /></p>
<p>Straps arri&egrave;re</p>
<p><img src="/storage/photos/1/2018-03/starboard-foil-122-flex-balsa-2018-2NlnGkC2RL.jpg" /></p>
<p>Straps avant</p>
<p><img src="/storage/photos/1/2018-03/starboard-foil-122-flex-balsa-2018-k1pyuHUGv8.jpg" /></p>
<p>Pied de mat</p>
<p><img src="/storage/photos/1/2018-03/starboard-foil-122-flex-balsa-2018-9LzWcbG6z2.jpg" /></p>
<h3>Bilan</h3>
<div>Tr&egrave;s grosse bonne surprise que cette foil 122. Entre une prise en main ultra facile, un d&eacute;collage tr&egrave;s pr&eacute;coce, et des sensations super agr&eacute;able en l&rsquo;air, que peut on demander de plus ? Ce nouveau mod&egrave;le est exactement ce dont a besoin le march&eacute; : des produits 100% plaisir faciles et efficace (et non des engins de PWA ultra pointus, n&eacute;cessitant au moins 8.5 pour naviguer !)</div>',
'test_equipment' => 'Gréement : V8 6.7 + TPX 100 / Foil : Starboard GTS',
'test_duration' => 15,
'test_conditions' => 'vent irrégulier de 10 à presque 20 knt.',
'test_place' => 'La Ciotat',
'created_at' => '2018-03-28 06:40:53',
'updated_at' => '2020-04-03 17:04:26',
),
51 => 
array (
'id' => 53,
'device_id' => 83,
'user_id' => 1,
'title' => 'Notre référence freerace',
'body' => '<p>La Airtime a une place un peu sp&eacute;ciale parmi nos tests puisque c\'est, depuis 2 saisons, notre flotteur r&eacute;f&eacute;rence. C\'est avec ce mod&egrave;le que nous testons pratiquement tous les foils, et cela nous permet d\'effectuer des comparaisons pertinentes. Nous l\'avons choisi pour plusieurs qualit&eacute;s</p>
<ul>
<li>une bonne glisse pour un flotteur tr&egrave;s large &agrave; l\'arri&egrave;re</li>
<li>une tr&egrave;s faible inertie</li>
<li>un scoop assez tendu qui privil&eacute;gie un d&eacute;colage rapide</li>
<li>un contr&ocirc;le quasi imbattable grace &agrave; un plan de pont plat et tr&egrave;s peu &eacute;pais sous le pied arri&egrave;re</li>
<li>un rapport poids / solidit&eacute; imbattable&nbsp;</li>
<li>une tr&egrave;s belle puissanvce pour une planche de 80cm de large</li>
</ul>
<p>Ses limites : ne supporte pas plus de 8m2, non adapt&eacute;e &agrave; la prarique freeride / vague.</p>
<p><strong>Flotteur wind foil freerace</strong> : l\'objectif est de naviguer avec des voiles moyennes (1m2 de moins qu\'en windsurf, en g&eacute;n&eacute;ral avec 2 ou 3 cam). La position est plus standard, avec une utilisation importante de la contre g&icirc;te, et un appui fort dans le harnais. On privil&eacute;gie la vitesse, les performances dans le vent tr&egrave;s l&eacute;ger, et le cap pour explorer le plan d\'eau. Compte tenu des forces mises en jeu, la navigation est plus physique qu\'en mode freeride. Les flotteurs sont plus larges et n&eacute;cessitent plus de puissance pour les faire acc&eacute;l&eacute;rer. Il faut donc une technique de pumping plus aboutie. Les flotteurs poss&egrave;dent un ma&icirc;tre beau tr&egrave;s recul&eacute;, avec un forte largeur sur le dernier 1/4 arri&egrave;re afin d\'offrir un bras de levier important pour contr&ocirc;ler le foil. Ces flotteurs s\'utilisent avec des foils &agrave; mat assez longs (autour de 95cm) pr&eacute;sentant le plus de rigidit&eacute; possible. Les mod&egrave;les d&eacute;di&eacute;s : Starboard Foil 144; JP Hydrofoil 135; Horue Airtime et Slant; Exocet RF 81; Tabou AirRide 81; RRD HFire V1; AHD thunderbold 85 et 75 ; Elix F1X M.</p>
<h4>Comparatif flotteurs free-race</h4>
<p>Avec les <strong>Starboard Foil 150</strong><strong>, Horue Airtime, Tabou AirRide 81 et Exocet RF81</strong>, on rentre dans les fiotteurs les plus r&eacute;cents de conception, mais aussi les plus novateurs en terme de shape. Ce sont des flotteurs compacts (courts ou avec peu de volume devant), et tr&egrave;s larges sous le pied arri&egrave;re. Le plan de pont des 3 planches est diff&eacute;rent, mais r&eacute;ellement adapt&eacute; au foil. Il y en a pour tous les go&ucirc;ts: du pont 100% plat sur l\'exocet qui offre un contr&ocirc;le impressionnant dans les conditions difficiles, &agrave; un pont semi bomb&eacute; plus traditionnel sur la Foil 150, en passant par une solution interm&eacute;diaire sur la Airtime.</p>
<p>Pour ce qui est des touchettes sur le rail ou &agrave; plat, les 3 planches font quasi jeu &eacute;gal &agrave; condition d\'avoir un <a href="/blog/reglages-windfoil-le-rake.html">rake bien r&eacute;gl&eacute;</a>. Il y a un petit avantage pour les Airtime et RF81 dans le clapot mais c\'est l&eacute;ger.</p>
<p>Pour ce qui est du comportement dans le light (peu de vent, grosses toiles), les 3 planches imposent de s\'adapter &agrave; l\'arri&egrave;re large avec un pumping vigoureux, plus abattu qu\'avec un flotteur traditionnel, et une position plus recul&eacute;e du pilote. Ceci est encore plus marqu&eacute; sur les RF et Airtime qui ont peu de volume devant. Dans ces conditions, la Airtime est clairement celle qui acc&eacute;l&egrave;re le plus facilement, suivie par la Foil &nbsp;150 (7cm de largeur en plus). La RF81 ferme la marche en demandant plus de puissance pour s\'exprimer ... un point qui peut d&eacute;courager ceux qui manquent de technique au pumping.</p>
<p>En l\'air, c\'est tout le contraire : la RF81 est la plus stable quelques soient les conditions .. que ce soit light ou mouvement&eacute;, le contr&ocirc;le est surprenant de facilit&eacute;. Les Foil 144, AirRide et Airtime font jeu &eacute;gal : l\'une (Airtime) avec un pont plus plat qui permet de contr&ocirc;ler et de passer facilement de la puissance (on va plus facilement vite), l\'autre (Foil 144) avec un arri&egrave;re offrant moins de contr&ocirc;le, mais une largeur qui stabilise encore plus l\'assiette longitudinale du foil (on fait moins le yoyo). La AirRide est un parfait compris entre pont plat et incurv&eacute;.</p>
<p>En terme de feeling g&eacute;n&eacute;ral, la Airtime et la AriRide sont les plus l&eacute;g&egrave;res &agrave; la fois sur la balance et en sensation. la AirTime la plus solide en construction. La Foil 150 est plus volumineuse avec ses rails &eacute;pais, mais la plus facile au virement de bord car elle s\'effonce moins devant. C\'est aussi la plus adapt&eacute;e aux gros gabarits te/ou aux grosses voiles (test&eacute;e en voile Race 9m foil). Quant &agrave; la RF81, elle peut para&icirc;tre plus pataude, mais ce qui la p&eacute;nalise un peu dans le light est en m&ecirc;me temps ce qui participe clairement &agrave; son contr&ocirc;le impressionnant en l\'air.</p>',
'test_equipment' => 'Tout',
'test_duration' => 200,
'test_conditions' => 'Tout',
'test_place' => 'Très nombreux',
'created_at' => '2018-10-01 22:14:00',
'updated_at' => '2020-04-03 16:56:43',
),
52 => 
array (
'id' => 54,
'device_id' => 84,
'user_id' => 1,
'title' => 'Windfoil - Test flotteur JP Hydrofoil 135',
'body' => '<p>Cela fait un bon moment que nous voulions essayer un flotteur 100% winfoil issu d\'une production grande série. Jusqu\'alors, nous avons toujours navigué avec des prototypes ou des Horue Tiny qui sont des semi-custom. C\'était aussi et surtout l\'occasion de tester le flotteur JP avec le foil qui a servi de master au RS:FLIGHT F4 ... on est donc dans la configuration NeilPryde complète.
</p><p>Conditions du test : La ciotat / 11 &gt; 18 knt Sud Ouest / Foil F4
</p><p>Gréement : NeilPryde V8 6,7 / mat Reptile Green Mamba 430 100% /  wish AL360 E3 Carbone
</p><p>Flotteur : JP hydrofoil 135 - pesée à 9.5kg en version ES, 8.75kg en version FWS et 7.60Kg en version carbone (le tout sans straps)</p><p style="text-align: center;"><img src="/storage/photos/1/2017-04/jp-australia-hydrofoil-135-pro-2017-bz6zuGPzRG.jpg">
</p><h4>Préparation</h4><p>Le montage du foil F4 dans le boitier de la JP a nécessité pas mal d\'ajustements (ponçage du talon F4). Ceci est dû au fait que F4 travaille avec les côtes exactes du talon tutte, là où COBRA a sa propre interprétation du Tuttle (légèrement plus étroit). On n\'aura plus ce problème avec le foil RS:FLIGHT F4 car il sera taillé pour les boitiers cobra. Pour le reste, rien que du très standard. On a 2 barrettes d\'inserts de footstrap sur la planche, j\'ai choisi de les monter dans la position la plus intérieure de la planche car je n\'aime pas être sur le rail en foil.
</p><h4>Sur l\'eau</h4><p>A l\'arrêt, la stabilité est excellente, il faut dire qu\'avec 85cm de large, le contraire eu été étonnant. Pour autant, la planche est assez peu épaisse et courte .. elle ne fait pas paquebot, et on est même content d\'avoir les 135L pour les virements de bord car le nez est court.
</p><h4>Décollage</h4><p>Au pumping, la planche s\'extrait de l\'eau assez facilement même si subjectivement, les 85cm de large trainent un peu plus d\'eau que nos protos habituels en 78. Lors de notre test, il y a avait un vent de plus de 10knt, donc décoller ne posait aucun problème.
</p><p>Edit : Pour avoir testé ultérieurement la planche dans des conditions plus light, et avec plusieurs foils, on confirme que le décollage reste très bon même dans des vents faibles. On est un poil moins bon qu\'avec notre flotteur référence (custom) en 78 avec des foils type Horue Vini, mais on retrouve des performances analogues avec des foils plus raides type RS:Flight F4, Starboard GT, Select Profoil F1.
</p><p>Les straps en position centrale (si on peut dire) sont parfaitement positionnés et il est très facile de chausser dès que la vitesse augmente un peu. La position est même très naturelle .. rien à voir avec la Horue SLANT où on avait des positions très excentrées (axé perfo).
</p><h4>Vol stabilisé</h4><p>Un fois en vol, on avait l\'habitude d\'un F4 très instable sur le plan longitudinal, et curieusement bien moins cette fois. On n\'a pas pour autant un ensemble pépère mais le flotteur calme réellement l\'instabilité du foil. J\'en vois certains arriver à toute allure ....  : non, cela n\'en fait absolument pas un foil pour débuter pour autant, mais c\'est juste un peu plus agréable pour celui qui sait naviguer car cela permet de se concentrer un peu plus sur d\'autres facteurs.
</p><p>Côté sensations, c\'est très réussi : la planche parait à la fois seine, et légère au pied. On retrouve l\'un des points forts de nos protos par rapport à une planche de slalom : c\'est juste une autre dimension !! Les flotteurs très courts décuplent le plaisir que l\'on éprouve sur le foil, grâce à une inertie fortement réduite, et donc des capacités rapides d\'ajustement de l\'assiettee du flotteur. Qui plus est, le plan de pont est confortable et la position des straps très agréable sur la durée.
</p><h4>Touchettes</h4><p>Lors des inévitables touchettes, la JP freine plus que notre planche référence en 78cm, mais ça reste très raisonnable par rapport à d\'autres tests que nous avons fait. <br>
</p><p>Edit. Pour préciser les choses, disons que les touchettes à plat produisent un petit coup de frein très mesuré. Les touchettes sur le rail à la contre-gîte marquent un peu plus. Ca reste moindre qu\'avec un flotteur type slalom, mais plus marqué qu\'avec la Elix F1X qui est la nouvelle référence dans le domaine.
</p><h4>Cap et équilibre transversal
</h4><p>Si on cherche à serrer le vent, et à fortiori avec un vent un peu soutenu, on arrivait vite aux limites de notre flotteur référence. Le F4 très puissant créait un couple à la gite qui nécessitait un peu d\'attention de la part du pilote. Cette fois, le bras de levier offert par les 85cm de large et surtout la forte largeur à l\'arrière rendent l\'exercice juste beaucoup plus facile et bien plus agréable. On trouve la contre gîte plus facilement aussi ... même si c\'est un exercice où il me reste beaucoup de progrès à faire (après avoir vu Julien Bontemps naviguer, on se fait tout petit et très humble !) . En tout cas, le potentiel est bien là : ce n\'est pas un flotteur qui nous limitera sur ce point, mais bien le mec qui est dessus.
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-04/jp-australia-hydrofoil-135-pro-2017-WP6UAqfPTn.jpg">
</p><h4>Equilibre longitudinal</h4><p><span></span>Sur notre flotteur référence, l\'utilisation du F4 nécessitait un réglage de straps très arrière. Sur le proto Tabou que nous utilisons régulièrement , c\'était encore plus marqué et il manquait même un insert pour pouvoir être équilibré. Cette fois avec le flotteur JP, on est parfaitement équilibré ...et je dois dire que je n\'ai même pas eu à modifier le réglage de j\'ai fait d\'origine. C\'est assez logique puisque ces 2 produits sont conçus pour naviguer ensemble ... mais c\'est bon de le souligner car on a vu de tout dans notre domaine.
</p><p>En tout cas, le nombre de positions de strap disponible est rassurant pour garantir une adaptation sur bon nombre de foils
</p><h4>Bilan</h4><h5>Les  </h5><ul>
<li>Légèreté</li>
<li>Accessibilité</li>
<li>Stabilité longitudinale</li>
<li>Maîtrise de l\'équilibre transversal sur les foils puissants</li>
<li>plan de pont</li>
<li>réglage et positions des straps</li>
</ul><h5>Les -</h5><ul>
<li>Un peu de trainée lors des touchettes à plat (par rapport à une planche étroite) et sur le rail (par rapport à la référence Elix F1X)</li>
</ul><p><br>
</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-04-11 17:09:57',
'updated_at' => '2020-03-26 22:41:58',
),
53 => 
array (
'id' => 55,
'device_id' => 85,
'user_id' => 1,
'title' => 'Test Horue Slant Windfoil Board',
'body' => '<p>Par cette journée ensoleillée mais frisquette, notre (dure ?) mission est de tester la nouvelle board de Windfoil Horue nommée SLANT. </p><p>Conditions du test : Plage de Sausset les pins, vent de Nord 10-18 knt, température extérieure 8° à la mise à l\'eau (tu m\'étonnes qu\'on s\'est pelé), foil Viny avec Aile LW</p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-IhcydV0dvR.jpg"></p><p>La SLANT est une board designée pour le speed et les grandes voiles. Elle recevra naturellement le foil TAE lorsqu\'il va sortir au premier semestre 2017. Elle tranche avec le reste de la gamme HORUE avec une largeur très généreuse de plus de 88cm pour 130L, un arrière très large et une très faible épaisseur. Le plan de pont est très différent également avec des plans obliques sous les pieds et les straps. La carène propose un V très marqué à l\'avant pour éviter de coller lors des touchettes. Le shape est très esthétique et la construction très légère, soulignons le ! Le niveau de finition des productions Flika est de plus en plus plaisant.</p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-103xtUUQia.jpg"></p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-ifd4lJ92nV.jpg"></p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-jLeb2l5r5W.jpg"></p><p>Compte tenu des conditions de vent très irrégulières et du spot assez court, nous avons opté pour une voile de 5.8 légère sans cam (North E type). La prise en main a été assez technique sur les premiers bords car une petite voile a du mal à caler la planche, mais après quelques bords, les choses sont rentrées dans l\'ordre.</p><p>Le premier élément qui peut perturber par rapport aux autres flotteurs spéciaux windfoil que nous avons utilisés est la position très excentrée des straps. On n\'est pas très loin de ce que l\'on retrouve sur les boards de slalom traditionnelles. Dans la mesure ou le décollage en foil se fait avec une position relativement debout, on cherche les straps pendant quelques bords avant de s\'y faire, en particulier pour le strap arrière. Il faut quoi qu\'il en soit un peu plus de temps qu\'avec notre planche référence ou qu\'avec une Tiny pour trouver sa position après le décollage. </p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-xGG97r30RC.jpg"></p><p>Le décollage  est aussi un peu plus compliqué qu\'avec nos flotteurs habituels. Là ou le foil horue permet de s\'extraire quasi instantanément de l\'eau à la moindre risée, on se prend cette fois à devoir faire accélérer la planche avant de pouvoir s\'extraire de l\'eau .. et dans cette phase, il faut bien garder le flotteur à plat.</p><p>Une fois bien calé dans les straps, on peut progressivement se \'pendre à la voile\' grâce au gros couple de rappel offert par ce flotteur large. Contrairement aux autres boards de foil où on navigue très debout, on sent que la SLANT a un vrai potentiel pour transmettre de la puissance au foil que l\'on a sous les pieds. Le plan de pont est particulièrement agréable une fois bien calé sur le bord grâce à sa forme oblique. Avec notre petite voile, le flotteur reste assez instable longitudinalement et il faut être vigilent dans le vent très irrégulier. On sent qu\'un gréement plus gros aidera à  stabiliser tout ça.</p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-vz0jQXoxPl.jpg">Dans les risées, les accélérations sont très franches car la planche transmet immédiatement de la puissance au foil grâce à sa largeur. Par contre, en étant calé dans la voile (donc moins debout), la gestion de la répartition d\'appui entre les 2 pieds est plus délicate ... et je me suis fait quelques sortie de l\'eau avec le foil avant de comprendre qu\'il fallait être plus mesuré qu\'avec les autres flotteurs dans les risées.</p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-nNcOdO08E4.jpg"><br></p><p>C\'est au cap que la slant dévoile son vrai potentiel avec notre petite voile. A cette allure, la planche devient d\'un coup plus stable et accélérère fortement. Elle permet de de gérer très facilement la conte gîte si le foil est bien fait. </p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-spmhuILVSe.jpg"></p><p>Compte tenu des conditions irrégulières et froides, notre test s\'est arrêté là avec les doigts bien congelés, et les bras qui n\'avaient plus la force de pomper. On a bien senti le gros potentiel de ce flotteur et on est très impatient de la tester avec un foil à mat long (plus de 1m), des voiles plus grandes et plus d\'espace pour naviguer. Ce qui est sûr c\'est que pour la première fois, on avait sous les pieds un flotteur bien différent, technique mais qui devrait permettre d\'exploiter le potentiel des foils comme le F4 ou le TAE, avec des voiles à camber.</p><p>Suite au prochain épisode ...</p><p><img src="/storage/photos/1/2016-12/horue-slant-133-2016-jih9vHJX9e.jpg"><img src="/storage/photos/1/2016-12/horue-slant-133-2016-RV2OGMCx8F.jpg"></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2016-12-12 20:38:07',
'updated_at' => '2020-03-26 22:41:58',
),
54 => 
array (
'id' => 56,
'device_id' => 86,
'user_id' => 1,
'title' => 'Un shape novateur',
'body' => '<h3>Pr&eacute;sentation</h3>
<p>A l\'invitation de Patrice Belbeoch, que je remercie en tout premier lieu, j&rsquo;ai eu la chance de venir &agrave; Brest pour d&eacute;couvrir les 2 nouveaux flotteurs de la gamme Exocet, d&eacute;di&eacute;s au windfoil et nomm&eacute;s RF81 et RF91.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-i92js6JlEU.jpg" /></p>
<h3>G&eacute;n&egrave;se du projet</h3>
<p>Nous sommes donc en pr&eacute;sence de 2 shapes compl&egrave;tement in&eacute;dits, et con&ccedil;us et 100% pour une pratique windfoil. Pour expliquer la gen&egrave;se du projet, il faut revenir quelques mois en arri&egrave;re, o&ugrave; nous avions rencontr&eacute; Patrice en proie &agrave; quelques doutes vis &agrave; vis de cette nouvelle pratique. Son gabarit relativement atypique (plus de 100kg pour un bon 2m) lui a d&egrave;s le d&eacute;but pos&eacute; beaucoup de probl&egrave;mes pour s&rsquo;attaquer au foil. On va m&ecirc;me dire qu&rsquo;il a bien gal&eacute;r&eacute;, au point de tester des solutions &agrave; 2 foils pour trouver un semblant de stabilit&eacute;.</p>
<p>Il faut avouer qu&rsquo;une petite taille et un poids l&eacute;ger sont des &eacute;l&eacute;ments qui rendent les choses plus faciles, et permettent entre autre de s&rsquo;adapter plus facilement &agrave; un &eacute;quilibre pr&eacute;caire. Pour le coup, on &eacute;tait bien loin de cette configuration.</p>
<p>En bon Breton qu&rsquo;il est, il n&rsquo;allait pas l&acirc;cher le morceau aussi facilement, et il a tout de suite cherch&eacute; des solutions techniques pour rendre les choses beaucoup plus faciles.</p>
<p>Les premiers projets se sont faits autour d&rsquo;une S6 qui a &eacute;t&eacute; compl&egrave;tement modifi&eacute;e au fur et &agrave; mesure pour rendre la navigation acceptable. Ce flotteur, qui si&egrave;ge toujours dans sa remorque, n&rsquo;a plus grand chose &agrave; voir avec la version d&rsquo;origine. Du plan de pont &agrave; la car&egrave;ne , la customisation est all&eacute; assez loin en pr&eacute;figurant ce que nous allions retrouver sur la RF.</p>
<h4>Le prototype final</h4>
<p>Apr&egrave;s 3 prototypes, qui ont permis d&rsquo;explorer diff&eacute;rentes pistes concernant notamment les car&egrave;nes, nous avons aujourd&rsquo;hui sous les pieds un mod&egrave;le de 81cm de large , et un de 91cm de large (respectivement 135 et 160L), dans une version assez proche du master de production qui va &ecirc;tre envoy&eacute; &agrave; Cobra.</p>
<p>Les mensurations :</p>
<p>&gt; RF81 : 135 L pour 225cm. Poids: 7.2 (Carbone) et 9.5 (ASA)<br />&gt; RF91 : 160 L pour 230cm. Poids : 7.9 (Carbone)</p>
<p>La premi&egrave;re chose qui attire l&rsquo;oeil est l&rsquo;outline de la planche. Avec un ma&icirc;tre beau au niveau du strap avant, mais seulement 5cm de moins au cul, la planche ressemble plus &agrave; un bateau ou un flotteur kitefoil qu&rsquo;un windsurf classique. On avait d&eacute;j&agrave; quelque chose de semblable sur la Elix F1X mais c&rsquo;est ici encore plus marqu&eacute;.</p>
<p style="text-align: center;"><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-AyIbYwLgBu.jpg" /></p>
<p>La deuxi&egrave;me surprise vient du plan de pont pratiquement plat. Cela rejoint des id&eacute;es que nous avions &eacute;voqu&eacute; avec pas mal d&rsquo;autres marques pour am&eacute;liorer le contr&ocirc;le, mais personne n&rsquo;&eacute;tait all&eacute; aussi loin. Ca va &ecirc;tre l&rsquo;occasion de tester ce concept dans une version sans compromis. Devant le pied de mat, le pont est l&eacute;g&egrave;rement creus&eacute; pour limiter au maximum de volume donc l&rsquo;inertie embarqu&eacute;e devant.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-50DfiSjc53.jpg" /></p>
<p>Au niveau car&egrave;ne, on retrouve des cut peu profonds mais bien marqu&eacute;s sur l&rsquo;arri&egrave;re. A partir du footstrap avant, un chanfrein &agrave; presque 45 degr&eacute; sur 10cm de large court jusqu&rsquo;&agrave; l&rsquo;avant, donnant une impression de flotteur beaucoup plus &eacute;troit que la r&eacute;alit&eacute;. Entre les deux chanfreins, la car&egrave;ne a du V, mais de fa&ccedil;on moins marqu&eacute;e que sur l&rsquo;Elix par exemple.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-6K0v1RbOtS.jpg" /></p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-0r0KChYZ1R.jpg" /></p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-xLSVZboTqx.jpg" /></p>
<p>Le boitier deep tuttle &eacute;quipant les 2 prototypes est un boitier maison made in JM Guiriec, pleine hauteur. En passant en production, les planches se verront &eacute;quip&eacute;e du foilbox Cobra, et nous avons bien demand&eacute; qu&rsquo;il soit &eacute;quip&eacute; des chemin&eacute;es ovales (pour pouvoir y glisser les doigts), et de per&ccedil;ages oblongs (pour pouvoir s&rsquo;adapter aux diff&eacute;rents foils .. et pour palier au manque de r&eacute;gularit&eacute; dans le positionnement des per&ccedil;ages cobra). Ces 2 remarques devraient d&rsquo;ailleurs s&rsquo;appliquer &agrave; toutes les planches produites chez Cobra tant leur utilit&eacute; est une &eacute;vidence, en particulier dans le cas des boitiers Tuttle.</p>
<p>Terminons par un point qui me tient &agrave; coeur : enfin un flotteur de foil avec une poign&eacute;e de portage ! Cela para&icirc;t un d&eacute;tail, mais cela permet de ne pas l\'ab&icirc;mer lors des manipulations, et cela facilite tellement la mise &agrave; l\'eau</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-9MsIDJTIMX.jpg" /></p>
<h3>Sur l&rsquo;eau</h3>
<p>Le premier test s&rsquo;est fait avec la RF81.</p>
<p>Les 135L permettent une mise &agrave; l&rsquo;eau et un d&eacute;gagement facile de la zone de d&eacute;part d&eacute;-vent&eacute;e. Ce n&rsquo;est pas pour autant un paquebot, et le volume sur l&rsquo;avant est assez faible.</p>
<h3>D&eacute;collage</h3>
<p>Pour le d&eacute;collage dans un vent faible, et en 7.8, un pumping tr&egrave;s g&eacute;n&eacute;reux est n&eacute;cessaire car la largeur arri&egrave;re limite la glisse naturelle. Toute la phase de d&eacute;collage se fait avec le pied avant dans le strap. La forme de pont et la position de ce strap rend la manoeuvre excessivement facile.</p>
<p>Grace au volume g&eacute;n&eacute;reux et &agrave; l&rsquo;appui de la planche, on peut tr&egrave;s vite mettre le pied arri&egrave;re &eacute;galement en position. Le pont plat et large permet d&rsquo;ailleurs de mettre le pied arri&egrave;re &agrave; la bonne position sans m&ecirc;me &ecirc;tre dans le strap, en particulier si on ne r&egrave;gle pas ce dernier sur la position la plus excentr&eacute;e.</p>
<p>Avec les 2 foils AFS, le d&eacute;collage n&eacute;cessite un peu d&rsquo;appui sur le pied arri&egrave;re. Reculer ce dernier d&egrave;s que possible est donc &eacute;galement n&eacute;cessaire si on veut un d&eacute;collage rapide. Sinon, il faut attendre d&rsquo;avoir atteint une bonne vitesse pour que le d&eacute;collage ai lieu (c&rsquo;est la version s&eacute;curit&eacute; du d&eacute;butant)</p>
<h3>Premi&egrave;res sensations</h3>
<p>D&egrave;s que l&rsquo;on est en l&rsquo;air, on note 2 sensations atypiques :</p>
<ol>
<li>l&rsquo;appui sous le pied avant est juste magique.</li>
<li>l&rsquo;appui sous le pied arri&egrave;re est au d&eacute;but un peu perturbant en particulier pour moi qui ai l&rsquo;habitude d&rsquo;avoir le pied dans le strap.</li>
</ol>
<p>Lors de ce premier test, les straps &eacute;tant mont&eacute;s en position centr&eacute;e, j&rsquo;avais le pied pos&eacute; sur le pont, avec le strap qui effleurait &agrave; peine mes orteils. Pour la suite des test, j\'ai plac&eacute; les straps arri&egrave;re en position excentr&eacute;e, et j\'avais alors le talon &agrave; quelques cm du bord de la planche tout en &eacute;tant dans le strap. C\'est un position dans laquelle je me suis senti beaucoup plus &agrave; l\'aise.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-5JJdnnlmlX.jpg" /></p>
<h3>Exploration</h3>
<p>D&egrave;s les premiers bords, on sent que le plan de pont va rendre le contr&ocirc;le plus ais&eacute; et plus pr&eacute;cis. Dans le cas pr&eacute;sent, je red&eacute;couvre le foil AFS2 que je n&rsquo;avais essay&eacute; que sur une planche traditionnelle longue (j&rsquo;avais moyennement aim&eacute;), puis dans du vent soutenu avec une micro planche (j&rsquo;avais ador&eacute;). Cette fois, on est dans du light, avec une planche courte mais au volume g&eacute;n&eacute;reux. L&rsquo;&eacute;quilibre longitudinal est un poil pied arri&egrave;re au d&eacute;collage, puis &eacute;quilibr&eacute; d&egrave;s la vitesse de croisi&egrave;re atteinte. La stabilit&eacute; longitudinale est toujours tr&egrave;s &eacute;lev&eacute;e, mais pas bloqu&eacute;e comme avec la planche longue &hellip; on retrouve plus de libert&eacute;, avec un peu les sensations que l&rsquo;on avait eu sur le petit prototype Sun7 de Renaud Madier sur cet axe longitudinal.</p>
<p>Sur l&rsquo;axe transversal, l&rsquo;ASF2 est un foil tr&egrave;s bloqu&eacute; &hellip; l&rsquo;un des plus stables du march&eacute;, au point qu&rsquo;il en est m&ecirc;me compliqu&eacute; &agrave; mettre &agrave; la contre g&icirc;te sans pousser tr&egrave;s fort sur les pieds. Avec le flotteur exocet, il est tr&egrave;s facile de transf&eacute;rer du poids sous le pied avant, et on arrive assez facilement &agrave; un petit angle de contre g&icirc;te, qui permet d&eacute;j&agrave; de jolies perfances en terme de cap.</p>
<p>A l&rsquo;abat&eacute;e, le pont plat fait merveille que ce soit sous le pied avant ou le pied arri&egrave;re. Avec le foil AFS-R et son mat de 105, les angles atteints au tr&egrave;s grand largue sont impressionnants, et il faut dire qu&rsquo;on est beaucoup aid&eacute; par le flotteur que l&rsquo;on pilote avec pr&eacute;cision malgr&eacute; un bras de levier gigantesque sous la planche. A cette allure, descendre la houle devient rapidement un jeu prenant et surprenant. On se retrouve entre 2 vagues &agrave; des hauteurs o&ugrave; n&rsquo;importe quel foil serait d&eacute;j&agrave; en l&rsquo;air, et n&rsquo;importe quel autre flotteur presque incontr&ocirc;lable.</p>
<h3>Contr&ocirc;le</h3>
<p>Sur des allures travers, on a une position assez droite avec l&rsquo;ensemble Exo / AFS, mais une stabilit&eacute; excellente. Ceci compense l&rsquo;utilisation d&rsquo;un mat assez court (l&rsquo;AFS2 fait 85cm) qui offre moins de d&eacute;battement (surtout au regard avec les mats de 95 que j&rsquo;utilise habituellement et auxquels je me suis habitu&eacute;). Avec cette position, l&rsquo;impression de vitesse est moins marqu&eacute;e qu&rsquo;&agrave; l&rsquo;accoutum&eacute;e, mais on se balade tout de m&ecirc;me r&eacute;guli&egrave;rement &agrave; plus de 20-22 knt malgr&eacute; un clapot bien form&eacute;.</p>
<p>Lors de notre premi&egrave;re journ&eacute;e de navigation, le vent a fini par monter nettement pour friser les 20 knt. Nous n&rsquo;avions sous la main que des 7.8 et 7.1 (donc pour moi surtoil&eacute;), mais le contr&ocirc;le est jours rest&eacute; tr&egrave;s correct et la navigation agr&eacute;able malgr&eacute; un plan d&rsquo;eau qui bougeait un peu &hellip; preuve que le contr&ocirc;le apport&eacute; par le flotteur exocet est assez redoutable.</p>
<h3>Touchettes</h3>
<p>Comme on l&rsquo;a vu au d&eacute;part, le d&eacute;collage sur la RF81 est plut&ocirc;t tr&egrave;s facile &hellip; un peu comme avec la JP hydrofoil, donc nettement plus facile que sur l&rsquo;Elix F1X. Sur la JP, ce sont les touchettes qui &eacute;taient moins faciles &agrave; g&eacute;rer car elle provoquaient des ralentissements brutaux que ce soit sur le rail ou &agrave; plat. Sur l&rsquo;exocet, les touchettes sur le rail ne provoquent quasi aucun ralentissement, au m&ecirc;me niveau que l\'Elix F1X. A plat, sur l&rsquo;avant ou au milieu, &ccedil;a freine nettement plus que sur l&rsquo;Elix, mais significativement moins que sur la JP. Lors de ces touchettes, si on a le malheur d&rsquo;appuyer sur les talons, la sanction est imm&eacute;diate : arr&ecirc;t buffet :) Le pont plat, qui offre naturellement beaucoup d&rsquo;appui sous les talons, favorise malheureusement cette petite erreur. Suite &agrave; ces remarques, la version d&eacute;finitive du flotteur sera modifi&eacute;e dans la zone arri&egrave;re du plan de pont pour permettre de faire plus facilement lifter la planche en cas de touchette. Cela permettra d&rsquo;&eacute;viter plus facilement l&rsquo;erreur d&rsquo;appui, et permettra surtout une relance plus ais&eacute;e lorsque ce sera n&eacute;cessaire.</p>
<p>Lors des touchettes &agrave; plat sur l&rsquo;arri&egrave;re (talonnement d&rsquo;une vague), on &agrave; tr&egrave;s peu de ralentissement, au m&ecirc;me niveau que la JP et l&rsquo;Elix, mais on se fait un peu plus bouger qu&rsquo;avec cette derni&egrave;re (moins qu&rsquo;avec la JP toutefois).</p>
<p>Si on compare l&rsquo;Elix et l&rsquo;Exocet qui sont les 2 flotteurs les plus avanc&eacute;s &agrave; ce jour pour la pratique du foil, on a 2 caract&egrave;res assez diff&eacute;rents : l&rsquo;une favorise le d&eacute;collage, mais rend les touchettes &agrave; plat plus d&eacute;licates, l&rsquo;autre est plus pointue au d&eacute;collage, mais s&rsquo;av&egrave;re un petit bonheur lors des touchettes que l&rsquo;on sent &agrave; peine. 100 balles &agrave; celui qui arrive &agrave; marier les 2 =:))) mais on vous le dit tout de suite, y a du boulot car c&rsquo;est loin d&rsquo;&ecirc;tre &eacute;vident.</p>
<p>C&ocirc;t&eacute; agr&eacute;ment g&eacute;n&eacute;ral, la RF 81 est un flotteur qui para&icirc;t tr&egrave;s compact en l&rsquo;air. On est bien loin d&rsquo;imaginer que l&rsquo;on a 135L sous les pieds. Cette sensation de compacit&eacute; est tr&egrave;s li&eacute; au fait que tout le volume est sous les pieds. On a tr&egrave;s peu d\'effet d\'inertie, et cela va permettre de proposer une construction ASA en plus de la version carbone. Malgr&eacute; un poids plus important, il y a fort &agrave; parier que cela g&eacute;nera tr&egrave;s peu le comportement de la planche. Le prix sevrait &ecirc;tre suffisament bas pour poposer un pack Flotteur + Foil autour de 2000&euro;.</p>
<h3>La version 91</h3>
<p>Avec mon gabarit de 78kg, j&rsquo;ai trouv&eacute; la 91 plus encombrante et moins facile &agrave; g&eacute;rer, en particulier lorsqu&rsquo;il faut r&eacute;cup&eacute;rer des erreurs. Elle est clairement d&eacute;di&eacute;e &agrave; une utilisation plus en puissance gr&acirc;ce au fort couple de rappel qu&rsquo;offre la tr&egrave;s grosse largeur arri&egrave;re. Les coups de frein lors des touchettes sont plus marqu&eacute;s, mais je n&rsquo;ai pas &eacute;prouv&eacute; plus de difficult&eacute; pour d&eacute;coller. C&rsquo;est un mod&egrave;le clairement &agrave; destination des coureurs qui vont utiliser des foils puissants, ou des gros gabarits.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-81-carbone-2018-6m6vX4vJjQ.jpg" /></p>
<h3>Bilan</h3>
<p>L&rsquo;exocet foil est visuellement d&eacute;rangeante, mais il faudra s&rsquo;y habituer. Comme avec la Elix F1X, elle apporte son propre lot d&rsquo;avanc&eacute;es avec des qualit&eacute;s r&eacute;ellement adapt&eacute;es au foil. Comme souvent avec Exocet, Patrice et Jean Marie (bien aid&eacute;s par Damien Leguen .. d&eacute;butant en foil comme tout le monde le sait) ne se sont pas content&eacute; de copier les voisins. Ils osent des solutions novatrices et font mouche une fois de plus.</p>
<p>Les concepts g&eacute;n&eacute;raux sont tr&egrave;s int&eacute;ressants. Patrice va encore travailler sur les d&eacute;tails , mais nous pouvons d&eacute;j&agrave; annoncer que la version de s&eacute;rie pr&eacute;vue pour fev / mars 2018 va faire date dans notre domaine.</p>',
'test_equipment' => 'Foil : AFS2 et AFSR / Voile : Xo Sail fly 7.8 et silver 7.1',
'test_duration' => 3,
'test_conditions' => 'Vent : entre 8 et 18 knt',
'test_place' => 'Rade de brest, cale de mise à l’eau du pôle france',
'created_at' => '2017-10-02 12:38:26',
'updated_at' => '2020-04-03 17:09:22',
),
55 => 
array (
'id' => 57,
'device_id' => 87,
'user_id' => 1,
'title' => 'Windfoil - Elix F1X - Le test ',
'body' => '<h4>Condition du test</h4><p>Lac de Serre-Ponçon - Savine, puis La Ciotat</p><p>Vent : entre 10 et 18 knt, puis de 7 à 25 knt</p><p>Etat du plan d\'eau : plat avec clapot
</p><p>Voile : V8 6,7   TPX100 et Atlas 5,4, puis 7.8</p><p>Foil : Starboard SLALOM et GT, puis RACE</p><p>Flotteur : Elix F1X M - pesée à 9,03kg avec straps</p><p style="text-align: center;"><img src="/storage/photos/1/2017-06/elix-f1x-m-v1-2017-aJwEOZBFBW.jpg">
</p><h4>Présentation et préparation</h4><p>Je n\'ai pas pu résister très longtemps avant de baptiser cette nouvelle F1X ... un vrai gamin qui reçoit un nouveau jouet pour Noël ! Et encore, elle est restée sagement au shop 4J car j\'étais absent ... quelle honte ;)
</p><p>Bref, montage des straps position intérieur flotteur, et trou du milieu pour voir. Côté foil, le montage du starboard a été un peu fastidieux. Le boitier Elix est très ajusté .. Sur la JP, le foil rentrait déjà avec difficulté, mais cette fois, il a fallu poncer. Heureusement, je m\'y étais pris la veille au soir pour le faire clean petit à petit. Comme j\'aime bien les ajustements très serrés, je ne suis même pas allé jusqu\'au bout du ponçage car je sais que tout se met en place en quelques nav\'. Sur le premier montage vis serrées, il me reste encore environ 3mm de talon dehors.
</p><p>Côté vis, tout tombe parfaitement dans l\'axe ... merci au talon starboard avec des trous oblongs ... une très bonne idée au final car cela évite d\'ovaliser la planche, ou de forcer sur les vis et inserts.
</p><p>Bref, après une bonne heure d\'adaptation aux petit oignons, c\'est parti pour le test de la belle
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-06/elix-f1x-m-v1-2017-zUgMrB1pIb.jpg">
</p><h4>Sur l\'eau, premières impressions</h4><p>Le premier jet se fera dans un vent un peu soutenu, entre 15 et 18 knt, en 5,4 et avec l\'aile de 550. Je m\'attendais à un départ foudroyant, mais que neni (comme dirait l\'autre), il faut bien pomper pour lancer la bête avant  que le décollage ne se fasse. Une fois parti, je suis tout de suite trop pied avant et pas calé (cf photo ci dessous). Retour au bord immédiatement pour corriger tout ça !
</p><p style="text-align: center;"><img src="/storage/photos/1/2017-06/elix-f1x-m-v1-2017-KotXtxOwyI.jpg">
</p><p>On avance les straps sur la position avant, on creuse un peu la voile (j\'avoue que j\'avais surestimé la force du vent  ... pas l\'habitude de voir du clapot à Savine), je recule le pied de mat et c\'est reparti. Le départ planning est toujours un peu laborieux, mais je me rends compte assez vite que les répartitions de volume inhabituelles nécessitent de se mettre tout de suite complètement en arrière de a planche pour lancer la machine : rester devant n\'a aucun intérêt, voir est même contre productif. A terme, on partira direct pied dans le strap avant ! Bref, une fois en l\'air, l\'ensemble foil / flotteur est désormais bien équilibré : la position de strap est la bonne.
</p><p>Avec des foils plus pied avant comme le Loke et l\'AFS2, il faudra vérifier si l\'insert de strap le plus avancé sera suffisant.
</p><p>Quelques bords pour prendre en main la bête, et les premières choses qui surprennent, par rapport à nos repères habituels, sont
</p><ul>
<li>la technicité du décollage</li>
<li>la position très ouverte du strap avant</li>
<li>la position très excentrée du strap arrière ... au début, on cherche un peu avec le pied</li>
<li>l\'énorme stabilité latérale et la facilité de gérer la contre gîte</li>
<li>le confort du pilotage </li>
<li>le calage de la planche au près</li>
</ul><p>Assez vite, le vent baisse d\'un cran et je rentre changer de voile pour passer en 6,7. Ce sera aussi et surtout l\'occasion de voir si avec une voile un peu plus grande, on parvient encore mieux à mieux caler le foil au près.
</p><h4>On approfondit</h4><p>Pour la première fois, on a sous les pieds un flotteur 100% foil que l\'on doit apprivoiser : ce n\'est pas immédiat car on sort de nos repères habituels. Il faut dire que c\'est aussi la première fois que l\'on a un flotteur qui s\'éloigne réellement de ce qui se faisait en funboard. On peut dire que les Starboard / Fanatic sont juste adaptées (renforts), que les JP / Zeeko / Slingshot sont revues pour le foil, mais là on est conçu 100% windfoil ... je n\'imagine pas utiliser ce flotteur pour faire du slalom light wind !
</p><p>Après quelques heures passées sur l\'eau pour découvrir tous les recoins de la F1X, revenons sur les points précis
</p><h4>Décollage</h4><p>C\'est clairement le point délicat qui fera de la F1X un flotteur difficile conseiller à celui qui souhaite apprendre le foil sans trop modifier ses habitudes. La forte largeur de la planche nécessite de faire plus attention lors du décollage. En particulier, il faut veiller à ne pas appuyer sur le talon lorsque l\'on chausse le strap arrière sous peine de réduire à néant tous ses efforts de pumping. Il faut aussi s\'habituer à la position très ouverte du strap avant, qui peut paraître un peu gênante au départ dans la phase de pumping (on s\'y fait vite).<span class="redactor-invisible-space"></span>
</p><p><b>Edit</b>. Après quelques journées passées sur le Elix, le décollage ne pose plus de problème, mais suppose de revoir complètement les habitudes que nous avions. Au lieu de partir au planning et prendre de la vitesse avant de pouvoir décoller avec le foil, on décolle ici sur le foil avant même de partir au planning. C\'est un coup à prendre, et qui nécessite de se mettre directement dans le strap avant, et très vite dans le strap arrière. Il faut aussi apprendre à faire accélérer le foil déjà porteur à partir d\'une vitesse assez basse. C\'est facile avec une aile très porteuse, et un peu plus technique avec une petite aile.
</p><h4>Touchettes</h4><p>Là encore, la F1X nous change de nos habitudes.
</p><p><b>Edit</b>. Lors des premières navigations, j\'avais été un peu déçu par la moindre glisse lors des touchettes à l\'arrière à petite vitesse. Même si la glisse reste dans ces conditions un peu moins légère qu\'avec un flotteur étroit (type tiny), la F1X compense largement ce petit inconvénient par un comportement très intéressant et unique à vitesse soutenue. Dans ces conditions, là où les autres planches devenaient plus délicates en cas de touchette (coup de frein et modification brutale d\'assiette), les \'ailes\' de la F1X jouent un rôle de palpeur et permettent de rebondir sans se faire déséquilibrer. C\'est vrai à plat, et encore plus sensible à la contre gîte. Ca aide à éviter les boites à grande vitesse :)
</p><p>Avec un peu d\'habitude, les touchettes par l\'avant deviennent rares, sauf dans la houle. Je n\'ai donc pas pu jauger de la réaction de la F1X sur ce point compte tenu des conditions lors du test.
</p><p>Autre point à souligner sur la Elix, et qui fait une grosse différence avec les autres boards que nous avons testé : les touchettes de rail à la contre-gîte ne produisent quasi aucune décélération, contrairement à ce qu\'il se passait sur la JP par exemple. On voit que le travail sur les rails a été très important et particulièrement réussi.
</p><h4>Stabilité latérale, contre gîte et cap</h4><p>L\'OFO à 70 et l\'angle du strap avant ont un effet énorme sur les capacités de la planche quant à la stabilité latérale et la contre gîte. Ce qui est très compliqué sur une Tiny, accessible sur une JP devient ici un jeu d\'enfant, voir même carrément un vrai plaisir ! Si le vent (ou la portance de votre voile) est suffisant et la longueur du mat de foil adéquat, on prend des angles incroyables et on sent tout de suite que notre niveau technique est notre seule limite. Les positions que l\'on observe sur les kitefoil semblent dès lors devenir plus accessibles (bon, y a encore du travail, mais on fait un gros pas en avant). Même si pour l\'instant, je n\'arrive à tenir ce type de position que quelques secondes, les caps et ratio cap / vitesse s\'envolent. Attention toutefois : aller chercher de la contre-gîte supposent 2 incontournables ! Le premier est un mat de foil très long (mini 90cm voir 95 à 100cm) ... sinon, on risque des sorties d\'aile fréquentes. Le 2e est un ensemble Mat / Fuselage ultra raide, autant en torsion qu\'en flexion.
</p><p><b>Edit</b>. Même lorsque l\'on ne va pas chercher des angles de contre gîte importants, les sensations d\'accélération au travers ou petit près sont assez jouissives car on arrive vraiment à caler la planche sur ce type de cap avec la voile bien bordée.</p><p>Corollaire de tout ceci, les capacités au cap sont excellentes, et les grosses remontés au vent deviennent un plaisir. On découvre une autre façon d\'exploiter le plan d\'eau. Les bords travers/travers en deviendraient presque ennuyeux :)</p><p style="text-align: center;"><img src="/storage/photos/1/2017-06/elix-f1x-m-v1-2017-5l8fDhxr9W.png">
</p><h4>Allures abattues</h4><p>La forte OFO aurait pu pénaliser les possibilités à l\'abatée, mais il n\'en est rien et on retrouve une attitude proche de ce que l\'on avait avec les autres boards. <b>Edit:</b> Une fois encore, c\'est un peu perturbant au départ, mais on se prend au jeu à faire des descentes quasi vent arrière sans aucune envie de positionner le pied plus au centre de la planche. Si le vent est un peu limite, on a vite fait de déventer la voile à cette allure et ainsi manquer de puissance. Il ne faut pas hésiter dans ce cas à mettre le flotteur à la gîte (ce qui est facilité par l\'ouverture du strap avant) pour s\'appuyer sur le mat du foil et garder ainsi de la portance à plus faible vitesse.<br></p><h4>Stabilité longitudinale</h4><p>Une fois les straps réglés en fonction du foil, aucun soucis d\'équilibre ! Gros point positif : la très faible inertie de la partie avant (normal, tout le poids et le volume sont derrière! ) procure une impression de facilité et de réactivité de premier ordre ... <b>Edit:</b> un vrai plaisir à tout moment car cela permet de rattraper pas mal de cas limites, en particulier lorsque les conditions de vent deviennent difficiles.
</p><h4>Vitesse &amp; taille de voile</h4><p>Même si le flotteur n\'a aucune influence directe sur la vitesse, il y contribue. En offrant un bras de levier important sous le strap arrière, la F1X permet d\'exploiter plus facilement les foils puissants. L\'ensemble de la géométrie du flotteur (outline, position des straps, répartition de volume) permet de mieux se caler y compris avec des voiles plus grandes ... cela va donc participer directement aux performances potentielles. Je dirai même que l\'utilisation d\'un tel flotteur va favoriser l\'utilisation de voiles plus grandes car en navigant plus calé et moins debout, on se sent beaucoup plus en confiance même quand le vent monte. L\'OFO important va aussi demander un peu plus de puissance pour décoller rapidement. On restera clairement avec des voiles plus petites qu\'en slalom, mais on sent qu\'au lieu des 2m2 d\'écart que l\'on observait en freeride, on va rapidement passer à 1,5 voir 1m2 (au moins dans les vents légers et medium).
</p><p><b>Edit:</b> Non seulement le F1X permet de toiler plus qu\'une board étroite, mais elle semble mieux s\'exprimer avec une voile qui a un peu de main arrière, ou tout au moins de longueur de wishbone. Nous allons poursuivre nos tests, mais il nous a été plus difficile de caler la planche avec une voile de vague, alors qu\'on contraire, nous avons emmené nos voiles à camber bien plus loin dans le vent qu\'auparavant. <br></p><h4>Manoeuvres</h4><p>Le virement de bord passe comme d\'hab sans problème, mais il faut juste être rapide et ne pas trainer devant le pied de mat, à moins de prendre un tuba ;) (n\'est ce pas cyril)
</p><p>Le jibe a l\'air assez facile à maîtriser car le plan de pont offre beaucoup de place. Seul l\'angle du strap avant nécessite un peu d\'attention car on reste facilement coincé dedans si il est trop lâche et que l\'on a chaussé jusqu\'à la cheville. Bon, de mon côté, comme je suis une buse intersidérale, je n\'arrive toujours pas à passer le jibe en l\'air, mais je m\'en approche un peu plus chaque jour.
</p><h4>Portage</h4><p>Grâce à la faible inertie de la partie avant, on a pour la première fois une planche de foil qui permet assez facilement de mettre à l\'eau l\'ensemble sans se démonter le dos, ni laisser trainer un morceau sur les cailloux. Au lieux de prendre la planche par les straps, il suffit d\'attraper le wish dans une main et le mat du foil dans l\'autre, le cul de la planche venant alors se caler sous le bras.
</p><p>C\'est un détail tout bête, mais quand la mise à l\'eau est complexe, on a vite fait d\'abîmer nos joujoux si le portage est galère.
</p><h4>Bilan
</h4><p>Avec une prise en main un peu plus délicate que la moyenne, car elle impose des vrais changements d\'habitude, la F1X ouvre la voie de flotteurs réellement développés pour le foil avec une volonté claire d\'aller chercher de nouvelles performances. Passé l\'adaptation, on décèle un énorme potentiel dans une optique course, à condition d\'y adjoindre un foil bien né, avec un ensemble mat + fuselage raide. Si quelques modèles déjà existants devraient parfaitement matcher avec le programme (RS:Flight AL et RS:Flight F4, AFS2, Starboard GT / SLALOM / RACE, Loke ... pour ce dernier, il faudra vérifier si la position avant des straps est suffisante), il y a fort à prier que le foil SELECT développé avec cette board va s\'inscrire directement dans cette optique. Ce type de flotteur va aussi inciter à utiliser des voiles un peu plus grandes que ce que nous avions l\'habitude de faire avec des flotteurs foils typés freeride.
</p><p>La F1X semble assumer parfaitement un positionnement Slalom / Race (cap, vitesse, accélération) au détriment du côté joueur que peut offrir une Tiny (navigation debout en petite toile, légèreté) : 2 optiques diamétralement opposées, qui ont l\'avantage d\'assumer chacune leur cible. </p><p><strong>Edit</strong> : après 3 semaine d\'utilisation, j\'ai trouvé mon flotteur préféré ... un petit bijou qui se mérite, cette F1X</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-06-26 08:19:35',
'updated_at' => '2020-03-26 22:41:58',
),
56 => 
array (
'id' => 58,
'device_id' => 88,
'user_id' => 1,
'title' => 'Best seller',
'body' => '<h4>Comparatif flotteurs free-race</h4>
<p>Cette cat&eacute;gorie offre un choix plus vaste, et commence &agrave; attirer de plus en plus de pratiquants. Elle int&eacute;resse ceux qui ont fini leur p&eacute;riode d\'apprentissage et recherchent plus de vitesse, mais aussi certains d&eacute;butants rompus &agrave; l\'utilisation des voiles &agrave; camber, et adeptes du tirage de bourre entre potes.</p>
<p>Dans ce comparatif, je n\'&eacute;voquerai pas la Starboard Foil 147 qui est avantageusement remplac&eacute;e cette ann&eacute;e par la 144, ni les AHD thunderbold et RRD HFire<span class="redactor-invisible-space"> V1que je n\'ai pas test&eacute; .</span></p>
<p>Starboard Foil 144; <a href="/blog/windfoil-test-flotteu-hydrofoil-135.html">JP Hydrofoil 135 (test)</a> ; <a href="/blog/windfoil-presentation-airtime-hru.html">Horue Airtime (test)</a> ; <a href="/blog/test-slant-windfoil-board.html">Horue Slant (test)</a>; <a href="/blog/windfoil-test-flotteur-exo-rf-81.html">Exocet RF 81 (test)</a> ; <a href="/blog/windfoil-lix-f1x-le-test.html">Elix F1X M (test)</a>; <a href="https://marseille.glissattitude.com/windfoil/u38234s1-tabou-airide-ltd-tabou-2019.html">Tabou AirRide 81</a> (<a href="https://marseille.glissattitude.com/blog/windfoil-test-ariride-81.html">test</a>)</p>
<p>Parmi ces flotteurs, l\'un d\'eux se d&eacute;marque par son shape plus traditionnel. La <strong>JP Hydrofoil 135</strong> est la plus ancienne en terme de conception, et a &eacute;t&eacute; au d&eacute;part con&ccedil;u comme une planche convertible. Apr&egrave;s 2 ans de bons et loyaux services, elle en reprend pour une saison de plus (2019) sans changement de shape. Pourtant, elle moins d\'&ecirc;tre d&eacute;pass&eacute;e ! Avec un arri&egrave;re plus pinc&eacute; que les 5 autres, c\'est la plus "freeride" de la cat&eacute;gorie. C\'est donc aussi la plus accessible et on la conseille les yeux ferm&eacute;s aux d&eacute;butant foil qui y trouveront un flotteur facile et peu physique. Bien s&ucirc;r, elle est moins l\'aise quand on charge en toile ou si on lui associe des foils puissants car le bras de levier est plus court. Ses rails ont aussi une f&acirc;cheuse tendance &agrave; scotcher en cas de touchette. On regrette donc juste que quitte &agrave; changer la d&eacute;co pour 2019, JP n\'en ai pas profit&eacute; pour lui mettre les m&ecirc;mes rails que sur les nouvelles 120 et 150. Comme toutes les JP, la 135 a des straps plut&ocirc;t recul&eacute;s. Si on associe ceci &agrave; une largeur moindre &agrave; l\'arri&egrave;re, il faut &eacute;viter de les foils "pied avant" si on ne veut pas gal&eacute;rer dans le vent (Loke Envol, Starboard Race, AFS 95) .. certes &ccedil;a se g&egrave;re avec des cales, mais &agrave; choisir autant aller vers un foil r&eacute;ellement appropri&eacute;.</p>
<p>La <strong>Horue Slant</strong> poss&egrave;de aussi un shape un peu traditionnel avec un ma&icirc;tre beau avanc&eacute;, mais cette fois le flotteur est 100% d&eacute;di&eacute; windfoil (Gros V devant, rails tomb&eacute;s). Nous n\'avons jamais au final pu essayer une version d&eacute;finitive avec les straps plus centr&eacute;s. On retrouve sur cette planche la qualit&eacute; de fabrication Flika, et une car&egrave;ne tr&egrave;s douce sign&eacute;e horue qui d&eacute;colle t&ocirc;t. Le plan de pont est assez particulier avec ses plans inclin&eacute;s pour mettre les pieds ... on aime ou pas.</p>
<p>L\'<strong>Elix F1X M</strong> est plus d&eacute;licate &agrave; prendre en main que la moyenne. Par sa position de straps, ses cuts et son plan de pont, elle impose des vrais changements d\'habitude qui prennent un peu de temps. Il faut donc faire l\'effort de s\'y habituer et cela peut prendre quelques nav\' pour les habitu&eacute;s, et une petite saison pour les d&eacute;butants. Pass&eacute; l\'adaptation, on d&eacute;c&egrave;le un tr&egrave;s bon potentiel &agrave; condition d\'y adjoindre un foil bien n&eacute;, avec un ensemble mat fuselage tr&egrave;s raide. Tout comme la Exocet RF81, le d&eacute;collage n&eacute;cessite pas mal de puissance, donc soit des grandes voiles, soit une technique de pumping dynamique et vigoureuse. Dans tous les cas, c\'est un flotteur puissant assez magique dans l\'exercice du pr&egrave;s (tr&egrave;s serr&eacute;) et des allures (tr&egrave;s) abattues. En terme de contr&ocirc;le dans le vent soutenu, elle est moins facile que les planches comme les RF81, Airtime ou Foil 144 (leur plan de pont facilite les choses). Elle s\'associe facilement avec tous les foils rigides sauf quelques cas extr&ecirc;mes (Starboard Race par exemple avec lequel il faut caler le stab).</p>
<p>Avec les <strong>Starboard Foil 144</strong><strong>, Horue Airtime, Tabou AirRide 81 et Exocet RF81</strong>, on rentre dans les fiotteurs les plus r&eacute;cents de conception, mais aussi les plus novateurs en terme de shape. Ce sont des flotteurs compacts (courts ou avec peu de volume devant), et tr&egrave;s larges sous le pied arri&egrave;re. Le plan de pont des 3 planches est diff&eacute;rent, mais r&eacute;ellement adapt&eacute; au foil. Il y en a pour tous les go&ucirc;ts: du pont 100% plat sur l\'exocet qui offre un contr&ocirc;le impressionnant dans les conditions difficiles, &agrave; un pont semi bomb&eacute; plus traditionnel sur la Foil 144, en passant par une solution interm&eacute;diaire sur la Airtime. Pour ce qui est des touchettes sur le rail ou &agrave; plat, les 3 planches font quasi jeu &eacute;gal &agrave; condition d\'avoir un <a href="/blog/reglages-windfoil-le-rake.html">rake bien r&eacute;gl&eacute;</a>. Il y a un petit avantage pour les Airtime et RF81 dans le clapot mais c\'est l&eacute;ger. Pour ce qui est du comportement dans le light (peu de vent, grosses toiles), les 3 planches imposent de s\'adapter &agrave; l\'arri&egrave;re large avec un pumping vigoureux, plus abattu qu\'avec un flotteur traditionnel, et une position plus recul&eacute;e du pilote. Ceci est encore plus marqu&eacute; sur les RF et Airtime qui ont peu de volume devant. Dans ces conditions, la Airtime est clairement celle qui acc&eacute;l&egrave;re le plus facilement, suivie par la Foil 144 (7cm de largeur en plus). La RF81 ferme la marche en demandant plus de puissance pour s\'exprimer ... un point qui peut d&eacute;courager ceux qui manquent de technique au pumping. En l\'air, c\'est tout le contraire : la RF81 est la plus stable quelques soient les conditions .. que ce soit light ou mouvement&eacute;, le contr&ocirc;le est surprenant de facilit&eacute;. Les Foil 144, AirRide et Airtime font jeu &eacute;gal : l\'une (Airtime) avec un pont plus plat qui permet de contr&ocirc;ler et de passer facilement de la puissance (on va plus facilement vite), l\'autre (Foil 144) avec un arri&egrave;re offrant moins de contr&ocirc;le, mais une largeur qui stabilise encore plus l\'assiette longitudinale du foil (on fait moins le yoyo). La AirRide est un parfait compris entre pont plat et incurv&eacute;. En terme de feeling g&eacute;n&eacute;ral, la Airtime et la AriRide sont les plus l&eacute;g&egrave;res &agrave; la fois sur la balance et en sensation. la AirTime la plus solide en construction. La Foil 144 est plus volumineuse avec ses rails &eacute;pais, mais la plus facile au virement de bord car elle s\'effonce moins devant. C\'est aussi la plus adapt&eacute;e aux gros gabarits te/ou aux grosse voiles (test&eacute;e en voile Race 9m foil). Quant &agrave; la RF81, elle peut para&icirc;tre plus pataude, mais ce qui la p&eacute;nalise un peu dans le light est en m&ecirc;me temps ce qui participe clairement &agrave; son contr&ocirc;le impressionnant en l\'air.</p>
<p>Vous l\'avez compris, difficile d\'avoir une pr&eacute;f&eacute;rence car chacun de ces flotteurs a son propre caract&egrave;re. Chacun choisira en fonction de ses crit&egrave;res et du foil auquel il souhaite l\'associer.</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2018-10-01 22:14:00',
'updated_at' => '2020-04-03 16:58:18',
),
57 => 
array (
'id' => 59,
'device_id' => 96,
'user_id' => 1,
'title' => 'Novatrice mais encombrante',
'body' => '<h4>Conditions du test</h4>
<p>Rade de brest, cale de mise &agrave; l&rsquo;eau du p&ocirc;le france</p>
<p>Foil : AFS2 et AFSR</p>
<p>Voile : Xo Sail fly 7.8 et silver 7.1</p>
<p>Vent : entre 8 et 18 knt</p>
<h4>Pr&eacute;sentation</h4>
<p>A l\'invitation de Patrice Belbeoch, que je remercie en tout premier lieu, j&rsquo;ai eu la chance de venir &agrave; Brest pour d&eacute;couvrir les 2 nouveaux flotteurs de la gamme Exocet, d&eacute;di&eacute;s au windfoil et nomm&eacute;s RF81 et RF91.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-3zf3wP7V96.jpg" /></p>
<h4>G&eacute;n&egrave;se du projet</h4>
<p>Nous sommes donc en pr&eacute;sence de 2 shapes compl&egrave;tement in&eacute;dits, et con&ccedil;us et 100% pour une pratique windfoil. Pour expliquer la gen&egrave;se du projet, il faut revenir quelques mois en arri&egrave;re, o&ugrave; nous avions rencontr&eacute; Patrice en proie &agrave; quelques doutes vis &agrave; vis de cette nouvelle pratique. Son gabarit relativement atypique (plus de 100kg pour un bon 2m) lui a d&egrave;s le d&eacute;but pos&eacute; beaucoup de probl&egrave;mes pour s&rsquo;attaquer au foil. On va m&ecirc;me dire qu&rsquo;il a bien gal&eacute;r&eacute;, au point de tester des solutions &agrave; 2 foils pour trouver un semblant de stabilit&eacute;.</p>
<p>Il faut avouer qu&rsquo;une petite taille et un poids l&eacute;ger sont des &eacute;l&eacute;ments qui rendent les choses plus faciles, et permettent entre autre de s&rsquo;adapter plus facilement &agrave; un &eacute;quilibre pr&eacute;caire. Pour le coup, on &eacute;tait bien loin de cette configuration.</p>
<p>En bon Breton qu&rsquo;il est, il n&rsquo;allait pas l&acirc;cher le morceau aussi facilement, et il a tout de suite cherch&eacute; des solutions techniques pour rendre les choses beaucoup plus faciles.</p>
<p>Les premiers projets se sont faits autour d&rsquo;une S6 qui a &eacute;t&eacute; compl&egrave;tement modifi&eacute;e au fur et &agrave; mesure pour rendre la navigation acceptable. Ce flotteur, qui si&egrave;ge toujours dans sa remorque, n&rsquo;a plus grand chose &agrave; voir avec la version d&rsquo;origine. Du plan de pont &agrave; la car&egrave;ne , la customisation est all&eacute; assez loin en pr&eacute;figurant ce que nous allions retrouver sur la RF.</p>
<h4>Le prototype final</h4>
<p>Apr&egrave;s 3 prototypes, qui ont permis d&rsquo;explorer diff&eacute;rentes pistes concernant notamment les car&egrave;nes, nous avons aujourd&rsquo;hui sous les pieds un mod&egrave;le de 81cm de large , et un de 91cm de large (respectivement 135 et 160L), dans une version assez proche du master de production qui va &ecirc;tre envoy&eacute; &agrave; Cobra.</p>
<p>Les mensurations :</p>
<p>&gt; RF81 : 135 L pour 225cm. Poids: 7.2 (Carbone) et 9.5 (ASA)<br />&gt; RF91 : 160 L pour 230cm. Poids : 7.9 (Carbone)</p>
<p>La premi&egrave;re chose qui attire l&rsquo;oeil est l&rsquo;outline de la planche. Avec un ma&icirc;tre beau au niveau du strap avant, mais seulement 5cm de moins au cul, la planche ressemble plus &agrave; un bateau ou un flotteur kitefoil qu&rsquo;un windsurf classique. On avait d&eacute;j&agrave; quelque chose de semblable sur la Elix F1X mais c&rsquo;est ici encore plus marqu&eacute;.</p>
<p style="text-align: center;"><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-CnSG94k5p4.jpg" /></p>
<p>La deuxi&egrave;me surprise vient du plan de pont pratiquement plat. Cela rejoint des id&eacute;es que nous avions &eacute;voqu&eacute; avec pas mal d&rsquo;autres marques pour am&eacute;liorer le contr&ocirc;le, mais personne n&rsquo;&eacute;tait all&eacute; aussi loin. Ca va &ecirc;tre l&rsquo;occasion de tester ce concept dans une version sans compromis. Devant le pied de mat, le pont est l&eacute;g&egrave;rement creus&eacute; pour limiter au maximum de volume donc l&rsquo;inertie embarqu&eacute;e devant.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-myZP2v1ioX.jpg" /></p>
<p>Au niveau car&egrave;ne, on retrouve des cut peu profonds mais bien marqu&eacute;s sur l&rsquo;arri&egrave;re. A partir du footstrap avant, un chanfrein &agrave; presque 45 degr&eacute; sur 10cm de large court jusqu&rsquo;&agrave; l&rsquo;avant, donnant une impression de flotteur beaucoup plus &eacute;troit que la r&eacute;alit&eacute;. Entre les deux chanfreins, la car&egrave;ne a du V, mais de fa&ccedil;on moins marqu&eacute;e que sur l&rsquo;Elix par exemple.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-KbUBPLa2uf.jpg" /></p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-s8chMEZafB.jpg" /></p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-Vxut0OfLMR.jpg" /></p>
<p>Le boitier deep tuttle &eacute;quipant les 2 prototypes est un boitier maison made in JM Guiriec, pleine hauteur. En passant en production, les planches se verront &eacute;quip&eacute;e du foilbox Cobra, et nous avons bien demand&eacute; qu&rsquo;il soit &eacute;quip&eacute; des chemin&eacute;es ovales (pour pouvoir y glisser les doigts), et de per&ccedil;ages oblongs (pour pouvoir s&rsquo;adapter aux diff&eacute;rents foils .. et pour palier au manque de r&eacute;gularit&eacute; dans le positionnement des per&ccedil;ages cobra). Ces 2 remarques devraient d&rsquo;ailleurs s&rsquo;appliquer &agrave; toutes les planches produites chez Cobra tant leur utilit&eacute; est une &eacute;vidence, en particulier dans le cas des boitiers Tuttle.</p>
<p>Terminons par un point qui me tient &agrave; coeur : enfin un flotteur de foil avec une poign&eacute;e de portage ! Cela para&icirc;t un d&eacute;tail, mais cela permet de ne pas l\'ab&icirc;mer lors des manipulations, et cela facilite tellement la mise &agrave; l\'eau</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-rmaEzMnpT0.jpg" /></p>
<h4>Sur l&rsquo;eau</h4>
<p>Le premier test s&rsquo;est fait avec la RF81.</p>
<p>Les 135L permettent une mise &agrave; l&rsquo;eau et un d&eacute;gagement facile de la zone de d&eacute;part d&eacute;-vent&eacute;e. Ce n&rsquo;est pas pour autant un paquebot, et le volume sur l&rsquo;avant est assez faible.</p>
<h4>D&eacute;collage</h4>
<p>Pour le d&eacute;collage dans un vent faible, et en 7.8, un pumping g&eacute;n&eacute;reux est n&eacute;cessaire. Toute la phase de d&eacute;collage se fait avec le pied avant dans le strap. La forme de pont et la position de ce strap rend la manoeuvre excessivement facile.</p>
<p>Grace au volume g&eacute;n&eacute;reux et &agrave; l&rsquo;appui de la planche, on peut tr&egrave;s vite mettre le pied arri&egrave;re &eacute;galement en position. Le pont plat et large permet d&rsquo;ailleurs de mettre le pied arri&egrave;re &agrave; la bonne position sans m&ecirc;me &ecirc;tre dans le strap, en particulier si on ne r&egrave;gle pas ce dernier sur la position la plus excentr&eacute;e.</p>
<p>Avec les 2 foils AFS, le d&eacute;collage n&eacute;cessite un peu d&rsquo;appui sur le pied arri&egrave;re. Reculer ce dernier d&egrave;s que possible est donc &eacute;galement n&eacute;cessaire si on veut un d&eacute;collage rapide. Sinon, il faut attendre d&rsquo;avoir atteint une bonne vitesse pour que le d&eacute;collage ai lieu (c&rsquo;est la version s&eacute;curit&eacute; du d&eacute;butant)</p>
<h4>Premi&egrave;res sensations</h4>
<p>D&egrave;s que l&rsquo;on est en l&rsquo;air, on note 2 sensations atypiques :</p>
<ol>
<li>l&rsquo;appui sous le pied avant est juste magique.</li>
<li>l&rsquo;appui sous le pied arri&egrave;re est au d&eacute;but un peu perturbant en particulier pour moi qui ai l&rsquo;habitude d&rsquo;avoir le pied dans le strap.</li>
</ol>
<p>Lors de ce premier test, les straps &eacute;tant mont&eacute;s en position centr&eacute;e, j&rsquo;avais le pied pos&eacute; sur le pont, avec le strap qui effleurait &agrave; peine mes orteils. Pour la suite des test, j\'ai plac&eacute; les straps arri&egrave;re en position excentr&eacute;e, et j\'avais alors le talon &agrave; quelques cm du bord de la planche tout en &eacute;tant dans le strap. C\'est un position dans laquelle je me suis senti beaucoup plus &agrave; l\'aise.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-WMd6nlmQW7.jpg" /></p>
<h4>Exploration</h4>
<p>D&egrave;s les premiers bords, on sent que le plan de pont va rendre le contr&ocirc;le plus ais&eacute; et plus pr&eacute;cis. Dans le cas pr&eacute;sent, je red&eacute;couvre le foil AFS2 que je n&rsquo;avais essay&eacute; que sur une planche traditionnelle longue (j&rsquo;avais moyennement aim&eacute;), puis dans du vent soutenu avec une micro planche (j&rsquo;avais ador&eacute;). Cette fois, on est dans du light, avec une planche courte mais au volume g&eacute;n&eacute;reux. L&rsquo;&eacute;quilibre longitudinal est un poil pied arri&egrave;re au d&eacute;collage, puis &eacute;quilibr&eacute; d&egrave;s la vitesse de croisi&egrave;re atteinte. La stabilit&eacute; longitudinale est toujours tr&egrave;s &eacute;lev&eacute;e, mais pas bloqu&eacute;e comme avec la planche longue &hellip; on retrouve plus de libert&eacute;, avec un peu les sensations que l&rsquo;on avait eu sur le petit prototype Sun7 de Renaud Madier sur cet axe longitudinal.</p>
<p>Sur l&rsquo;axe transversal, l&rsquo;ASF2 est un foil tr&egrave;s bloqu&eacute; &hellip; l&rsquo;un des plus stables du march&eacute;, au point qu&rsquo;il en est m&ecirc;me compliqu&eacute; &agrave; mettre &agrave; la contre g&icirc;te sans pousser tr&egrave;s fort sur les pieds. Avec le flotteur exocet, il est tr&egrave;s facile de transf&eacute;rer du poids sous le pied avant, et on arrive assez facilement &agrave; un petit angle de contre g&icirc;te, qui permet d&eacute;j&agrave; de jolies perfances en terme de cap.</p>
<p>A l&rsquo;abat&eacute;e, le pont plat fait merveille que ce soit sous le pied avant ou le pied arri&egrave;re. Avec le foil AFS-R et son mat de 105, les angles atteints au tr&egrave;s grand largue sont impressionnants, et il faut dire qu&rsquo;on est beaucoup aid&eacute; par le flotteur que l&rsquo;on pilote avec pr&eacute;cision malgr&eacute; un bras de levier gigantesque sous la planche. A cette allure, descendre la houle devient rapidement un jeu prenant et surprenant. On se retrouve entre 2 vagues &agrave; des hauteurs o&ugrave; n&rsquo;importe quel foil serait d&eacute;j&agrave; en l&rsquo;air, et n&rsquo;importe quel autre flotteur presque incontr&ocirc;lable.</p>
<h4>Contr&ocirc;le</h4>
<p>Sur des allures travers, on a une position assez droite avec l&rsquo;ensemble Exo / AFS, mais une stabilit&eacute; excellente. Ceci compense l&rsquo;utilisation d&rsquo;un mat assez court (l&rsquo;AFS2 fait 85cm) qui offre moins de d&eacute;battement (surtout au regard avec les mats de 95 que j&rsquo;utilise habituellement et auxquels je me suis habitu&eacute;). Avec cette position, l&rsquo;impression de vitesse est moins marqu&eacute;e qu&rsquo;&agrave; l&rsquo;accoutum&eacute;e, mais on se balade tout de m&ecirc;me r&eacute;guli&egrave;rement &agrave; plus de 20-22 knt malgr&eacute; un clapot bien form&eacute;.</p>
<p>Lors de notre premi&egrave;re journ&eacute;e de navigation, le vent a fini par monter nettement pour friser les 20 knt. Nous n&rsquo;avions sous la main que des 7.8 et 7.1 (donc pour moi surtoil&eacute;), mais le contr&ocirc;le est jours rest&eacute; tr&egrave;s correct et la navigation agr&eacute;able malgr&eacute; un plan d&rsquo;eau qui bougeait un peu &hellip; preuve que le contr&ocirc;le apport&eacute; par le flotteur exocet est assez redoutable.</p>
<h4>Touchettes</h4>
<p>Comme on l&rsquo;a vu au d&eacute;part, le d&eacute;collage sur la RF81 est plut&ocirc;t tr&egrave;s facile &hellip; un peu comme avec la JP hydrofoil, donc nettement plus facile que sur l&rsquo;Elix F1X. Sur la JP, ce sont les touchettes qui &eacute;taient moins faciles &agrave; g&eacute;rer car elle provoquaient des ralentissements brutaux que ce soit sur le rail ou &agrave; plat. Sur l&rsquo;exocet, les touchettes sur le rail ne provoquent quasi aucun ralentissement, au m&ecirc;me niveau que l\'Elix F1X. A plat, sur l&rsquo;avant ou au milieu, &ccedil;a freine nettement plus que sur l&rsquo;Elix, mais significativement moins que sur la JP. Lors de ces touchettes, si on a le malheur d&rsquo;appuyer sur les talons, la sanction est imm&eacute;diate : arr&ecirc;t buffet :) Le pont plat, qui offre naturellement beaucoup d&rsquo;appui sous les talons, favorise malheureusement cette petite erreur. Suite &agrave; ces remarques, la version d&eacute;finitive du flotteur sera modifi&eacute;e dans la zone arri&egrave;re du plan de pont pour permettre de faire plus facilement lifter la planche en cas de touchette. Cela permettra d&rsquo;&eacute;viter plus facilement l&rsquo;erreur d&rsquo;appui, et permettra surtout une relance plus ais&eacute;e lorsque ce sera n&eacute;cessaire.</p>
<p>Lors des touchettes &agrave; plat sur l&rsquo;arri&egrave;re (talonnement d&rsquo;une vague), on &agrave; tr&egrave;s peu de ralentissement, au m&ecirc;me niveau que la JP et l&rsquo;Elix, mais on se fait un peu plus bouger qu&rsquo;avec cette derni&egrave;re (moins qu&rsquo;avec la JP toutefois).</p>
<p>Si on compare l&rsquo;Elix et l&rsquo;Exocet qui sont les 2 flotteurs les plus avanc&eacute;s &agrave; ce jour pour la pratique du foil, on a 2 caract&egrave;res assez diff&eacute;rents : l&rsquo;une favorise le d&eacute;collage, mais rend les touchettes &agrave; plat plus d&eacute;licates, l&rsquo;autre est plus pointue au d&eacute;collage, mais s&rsquo;av&egrave;re un petit bonheur lors des touchettes que l&rsquo;on sent &agrave; peine. 100 balles &agrave; celui qui arrive &agrave; marier les 2 =:))) mais on vous le dit tout de suite, y a du boulot car c&rsquo;est loin d&rsquo;&ecirc;tre &eacute;vident.</p>
<p>C&ocirc;t&eacute; agr&eacute;ment g&eacute;n&eacute;ral, la RF 81 est un flotteur qui para&icirc;t tr&egrave;s compact en l&rsquo;air. On est bien loin d&rsquo;imaginer que l&rsquo;on a 135L sous les pieds. Cette sensation de compacit&eacute; est tr&egrave;s li&eacute; au fait que tout le volume est sous les pieds. On a tr&egrave;s peu d\'effet d\'inertie, et cela va permettre de proposer une construction ASA en plus de la version carbone. Malgr&eacute; un poids plus important, il y a fort &agrave; parier que cela g&eacute;nera tr&egrave;s peu le comportement de la planche. Le prix sevrait &ecirc;tre suffisament bas pour poposer un pack Flotteur + Foil autour de 2000&euro;.</p>
<h4>La version 91</h4>
<p>Avec mon gabarit de 78kg, j&rsquo;ai trouv&eacute; la 91 plus encombrante et moins facile &agrave; g&eacute;rer, en particulier lorsqu&rsquo;il faut r&eacute;cup&eacute;rer des erreurs. Elle est clairement d&eacute;di&eacute;e &agrave; une utilisation plus en puissance gr&acirc;ce au fort couple de rappel qu&rsquo;offre la tr&egrave;s grosse largeur arri&egrave;re. Les coups de frein lors des touchettes sont plus marqu&eacute;s, mais je n&rsquo;ai pas &eacute;prouv&eacute; plus de difficult&eacute; pour d&eacute;coller. C&rsquo;est un mod&egrave;le clairement &agrave; destination des coureurs qui vont utiliser des foils puissants, ou des gros gabarits.</p>
<p><img src="/storage/photos/1/2017-10/exocet-rf-91-carbone-2018-3N0UGaVZx9.jpg" /></p>
<h4>Bilan</h4>
<p>L&rsquo;exocet foil est visuellement d&eacute;rangeante, mais il faudra s&rsquo;y habituer. Comme avec la Elix F1X, elle apporte son propre lot d&rsquo;avanc&eacute;es avec des qualit&eacute;s r&eacute;ellement adapt&eacute;es au foil. Comme souvent avec Exocet, Patrice et Jean Marie (bien aid&eacute;s par Damien Leguen .. d&eacute;butant en foil comme tout le monde le sait) ne se sont pas content&eacute; de copier les voisins. Ils osent des solutions novatrices et font mouche une fois de plus.</p>
<p>Les concepts g&eacute;n&eacute;raux sont tr&egrave;s int&eacute;ressants. Patrice va encore travailler sur les d&eacute;tails , mais nous pouvons d&eacute;j&agrave; annoncer que la version de s&eacute;rie pr&eacute;vue pour fev / mars 2018 va faire date dans notre domaine.</p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-10-02 12:38:26',
'updated_at' => '2020-04-03 17:10:04',
),
58 => 
array (
'id' => 60,
'device_id' => 98,
'user_id' => 1,
'title' => 'Test RS:X convertible, RS:One convertible et Foil NeilPryde Alu',
'body' => '<p>Spot : la Ciotat</p><p>Condition du test : vent de Sud-Ouest assez irrégulier entre 15 et 25 Knt</p><p>Matériel testé:</p><ul><li>RS:X Convertible avec gréement en 7.8 m2</li><li>RS:One Convertible avec gréement en 7.0 m2</li><li>Foil NeilPryde RS:FLIGHT AL</li></ul><p>A l’occasion de la présentation du programme RS:Convertible aux responsables du Club Neptune par Damien LEGUEN, nous avons eu l’occasion de tester ces produits destinés à proposer 2 formules monotype : une à destination des clubs (RS:One) et l’autre d’une élite (RS:X) .. et candidate au remplacement à terme de la RS:X actuelle en tant que support olympique.</p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:one-convertible-2017-bMfPx8HwVe.jpg"></p><h4>Le convertible en mode slalom</h4><h4>Contexte</h4><p>Compte tenu des conditions inattendues aujourd’hui, et malgré ce que nous avions prévu initialement, nous avons décidé de profiter du vent soutenu pour tester le concept convertible en mode Slalom. Pendant ce temps là, Damien faisait tester la RS:One en mode foil à l’équipe de Wind Magazine qui était en campagne de test pour leur prochain article sur le foil.</p><p>C’est donc parti avec la RSX:Convertible armé d’un aileron de 40 et de la voile RSX en 7,8. Je dois dire qu’après pratiquement un an sans naviguer en slalom, le retour à une voile à fourreau large en 7,8 dans 20-25knt a été assez déstabilisant pour mes petits bras. Passé le moment de ré-adaptation à une navigation un peu plus bourrin, on peut enfin parler de sensations. </p><h4>Flotteur</h4><p>Malgré le plan d’eau assez mouvementé, le flotteur est assez facile à gérer … même surprenant au final quand on sait qu’il fait 80cm de large pour 130L. Aucun cabrage, aucun mouvement parasite : la planche est légère sous les pieds mais ni collée à l’eau ni volage. Le confort et l’accessibilité me rappellent beaucoup mon ex RS4. Les shapes de Jean Marie Guirec (Exocet) ont décidément un ADN commun. Pour un flotteur conçu pour être utilisé dans toutes les conditions (principe de monotypie), le choix est très pertinent : imaginez si on avait un flotteur de slalom pointu en 80cm de marge, il aurait été ingérable par le commun des mortels dans les conditions musclées.</p><p>Côté aileron, le modèle fourni en série semble plutôt efficace. Subjectivement on manque un peu de portance et de replacement par rapport à nos ailerons habituels (ERD, Rhino), mais on la glisse est bien là. A priori, le flex en tête va être retravaillé pour apporter un peu plus de gaz. </p><h4>Gréement</h4><p>Passons à la voile : la voile RS:X convertible est identique à la future RS:Flight. Elle est issue d’un développement spécifique provenant de la RS:Racing LT1. Le rond de guidant a été diminué pour permettre de loger plus de creux et pour pouvoir plus facilement retendre la chute dans le light en limitant la tension à l’amure. Ce concept devrait permettre d’intégrer un palan de guidant afin d’offrir un réglage sur l’eau. Pour notre test, elle était gréée sur un FLX100, alors qu’elle sera proposé au final avec le SPX95. Avec notre mat de test, le gréement était plutôt très rigide et pêchu : c’est le moins que l’on puisse dire ! Il faudrait que je mesure mais mes bras ont dû s’allonger de 10cm avant que je n’arrête un peu épuisé. Cette combinaison qui convient parfaitement à Damien Leguen (un petit bébé de 100kg) sera moins au goût des petits gabarits peu entrainés (mais soyons francs, ce n\'est pas la cible de ce matériel élite). La combinaison standard avec le SPX95, qui donne un gréement trop souple au gout de Damien devrait nous convenir parfaitement !</p><p>En terme de comportement, on a une voile avec peu de main arrière mais beaucoup de traction vers l’avant et du couple à revendre. On imagine la puissance qu’elle peut générer avec une chute un peu plus tendue. Ce test sera à refaire en saison quand la condition physique sera revenue, mais dors et déjà, on peut dire qu’il sera inutile de sur-tailler la RS:Flight dans une optique foil. Pour mes 78kg, une 7m devrait être parfaite comme voile unique 10-20 knt. Je suis très curieux de la tester avec le SPX95 ou le TPX100 pour voir ce qu’elle peut donner avec un peu plus de souplesse. Ça risque d’être très très intéressant</p><h4>Le concept RS:One convertible en mode foil</h4><p>Après s’être bien allongé les bras avec la RSX:Convertible en 7.8, on passe à la RS:One en mode foil. </p><p>J’avoue que j’étais un peu inquiet à l’idée de partir sur l’eau en foil avec 20 knt et une voile à camber de 7m2. L’expérience a prouvé que d’une part j’avais tort, mais surtout que nous avions dans les mains un concentré de plaisir en boite.</p><h4>Présentation</h4><p>Avant de dévoiler mes sensations, faisons le tour du matériel avec lequel nous partons sur l’eau : le flotteur RS:One est strictement identique à la RS:X Convertible en ce qui concerne le shape (même moule, même positions d’inserts et boitiers) mais avec une construction plus simple. On est ici sur un sandwich verre / PVC avec renforts carbone, alors que la RS:X Convertible utilise un sandwich full carbone/PVC et un matériaux exclusif sur les rails. La planche fait 80cm de large pour 130L, avec un shape intelligemment conçu pour offrir à la fois un comportement idéal en foil, et des performances de haut niveau en slalom. Malgré sa largeur de 80cm, Damien a déjà dépassé les 35knt, ce qui démontre le potentiel du flotteur … même si nous ne serons pas nombreux à égaler ce type de perf. Les straps disposent de 2 rangées d’inserts respectivement à 16 et 18 de l’axe, ce qui va permettre de l’adapter à l’option de navigation (foil ou slalom), au type de foil monté dessus (RSX ou RS:one) et au niveau du pilote. Cela permet aussi de modifier l’angle des straps avant, sachant qu’une position plus proche de l’axe longi. de la planche est assez pratique en foil.</p><p>Pour revenir à nos moutons, nous avons cette fois équipé la planche du foil RS:One, qui je rappelle, est identique au foil <strong>RS:Flight AL</strong> (mis à part l’aile principale en G10 qui est un poil plus large pour la version RS:One). <strong>Ce test revêt donc une importance capitale compte tenu du potentiel commercial de ce produit, et de l’attente du marché autour de ce produit à 800€</strong>. </p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:one-convertible-2017-Y39QRrUjtP.jpg"></p><p>Le fameux foil NeilPryde en aluminium me surprend par la largeur de corde du mat. Le talon deep-tuttle est magnifiquement soudé sur la lame du foil, qui va donc jusqu’au fond du boitier. On sent que la recherche de rigidité a dicté toute la conception, et on sait à quel point c\'est capital dans le résultat. Les ailes en G10 ont fait l’objet d’un usinage soigné. Le profil assez épais promet une portance importante, et l’envergure modérée devrait limiter les risques de départ à la gîte, qui sont l’un des défauts récurrents sur les fois aluminium lorsqu’ils ne sont pas assez rigides. Le plan stabilisateur utilise comme souvent un profil symétrique pour limiter la trainée, mais une surface assez importante, promettant une bonne stabilité longitudinale. Enfin, en terme d’équilibre, le positionnement de l’aile vs les straps paraît tout à fait cohérente. Enfin, l\'assemblage de l\'ensemble avec des grosses vis titane respire la solidité.</p><p>Le gréement RS:One convertible est composé d’une voile en 7m, développée sur la base de la V8, donc avec 2 cambers et un fourreau étroit. Dans le concept de régate monotype, cette voile sera proposée en 5.6, 6.3, 7, 7.8 pour matcher avec les différentes catégories d’âges et sexe. Le mat est le nouveau SPX65 désormais fabriqué en Italie. L’ensemble est assez léger dans les bras et présage évidemment à la fois une puissance inférieure à la RSX, et une accessibilité bien meilleure.</p><p>Assez parlé, passons à l’eau … je le rappelle dans un vent oscillant entre 15 et 25 knt.</p><h4>Le test</h4><p>Je suis parti avec beaucoup de précaution, et l’appréhension de sorties de l’eau rapides dans le vent soutenu. Dans ces conditions, je pars au près et le décollage est immédiat. Je gère avec précaution le montée sur le foil en même temps qu’il accélère. Je ne fais pas beaucoup d’effort pour maintenir le foil dans l’eau ce qui est bon signe. Un peu rassuré, je repasse travers et laisse la planche accélérer franchement. Là, je commence à être surpris car le foil reste gérable et ne tente toujours pas de sortir de l’eau. A ce moment là, j’abats franchement et alors que la vitesse devient soutenue (en gros, ça file sévère), je me rends compte que le foil offre une bonne finesse. J’ai bien un foil premier prix sous les pieds ?!!!</p><p>Pour ne pas jouer les casse-coups, le premier virement sera un virement de bord …on essayera le jibe plus tard ;)</p><p>C’est reparti avec encore une fois, un décollage immédiat et une gestion aisée de la monté. C’est à ce moment là que je me rends compte : depuis le début, je ne fait quasiment aucun effort pour stabiliser le foil. Il est si facile que ça ? On continue le test et je fais le point sur le comportement de ma monture. Le foil NP aluminium est très très stable longitudinalement (moins que le loke, mais équivalent au xtrem foil et zeeko, et devant tous les autres), parfaitement stable en latéral (et là, les candidats sont déjà bien moins nombreux, le seul foil aluminium avec le zeeko que j’ai réussi à mettre en contre gîte), plutôt fin en terme de glisse (moins que le F4, mais plus que les xtrem, fone, loke, etc.) et tellement facile d\'accès (pardonne les erreurs de positionnement et les appuis hazardeux).</p><p>Le poids est plutôt élevé, et en tout cas bien loin des modèles carbone … mais il faut bien qu’il y ai une différence entre un produit à 800€ et un autre à 2000 ! Evidemment, ce n’est pas la seule différence, mais cet éléments jouera sur la maniabilité pour des pratiquants plus aguéris.</p><p>En terme de portance, on a dû attendre la fin d’après midi et moins de vent pour se rendre compte du potentiel dans le light. Là, on est a priori dans la moyenne : il n’ira pas chercher un loke ou un horue dans le très light, mais on est dans une bonne moyenne. En tout cas, un peu au même titre que le Loke, le foil alu NeilPryde m’a permis dès quelques minutes de pratiquement passer un jibe en l’air, preuve encore une fois de l’accessibilité de la bête.</p><p>Un dernier petit mot au sujet du gréement RS:One : j’ai été conquis par la légèreté et l’excellente tenue dans le vent. Naviguant régulièrement en foil avec la V8, je n\'étais pas surpris. J’avoue que si je ne m’étais pas épuisé au départ avec la 7.8, j’aurai bien navigué jusqu’à la nuit avec l’ensemble RS:One tant l’ensemble est réellement axé plaisir à tous les niveaux !</p><p><br></p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:one-convertible-2017-Ui5kDjL3ZG.jpg"></p><h4>A tout seigneur ! Test du foil RS:X</h4><p>Mais c’est pas tout, je ne pouvais pas finir la journée sans mettre les pieds sur la Rolls de nos amis bretons : le foil RS:X</p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:one-convertible-2017-SDheUwyEq6.png"></p><p>Cette fois, on a à faire à un vrai produit élite full carbone, avec une finition à la F4, un mat ultra rigide, une aile principale à grand allongement version lame de rasoir, et à mon avis un prix qui sera lui aussi élitiste compte tenu des matériaux utilisés (gamme et quantité) et de la fabrication Française (eh oui, ça a un cout, mais qui se plaindra de faire travailler nos compatriotes au détriment des chinois ?).</p><p>C’est donc reparti sur l’eau avec notre petit gréement 7m RS:One mais une formule 1 sous les pieds. Sans faire un grand discours, on a là clairement l’un des foils les plus intéressants que j’ai eu l’occasion de tester. En gros un F4 avec plus de stabilité longitudinal, et un peu moins de stabilité latérale. Quelle glisse !!!! Il va vite … très vite ! Pas sous mes pieds, certes, mais Damien m’a bien tourné autour, le bougre.</p><p>Comme pour le F4 avec l’aile LW2, le foil RS:X demande un peu de vitesse pour décoller. A ce titre, il faut un peu plus de technique que la moyenne mais une fois parti, la glisse est impressionnante, et l’allonge du même niveau. Côté stabilité, c\'est un foil nerveux, et il ne faut pas s\'endormir dessus. Il n\'a bien entendu rien à voir avec la version aluminium.</p><p>Bon, je vous vois venir .. non, il n’est pas du tout fait pour débuter. Mais pour celui qui sait foiler, il y a un vrai client !</p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:one-convertible-2017-UfSKIIT1WZ.jpg"></p><h4>Conclusion</h4><p>Bilan de cette après midi de test : on a bien fait de venir ! Un grand merci à Damien</p><p>On a découvert</p><ul>
<li>Un concept de monotypie basée sur un support convertible intelligemment conçu avec beaucoup de complémentarité entre éléments</li>
<li>Un foil NeilPryde aluminium juste bluffant, qui tient toutes ses promesses ... voir même plus !</li>
<li>Un foil RS:X qui monte sans problème sur le podium des modèles existants à ce jour, et peut être même sur la première marche … pour pratiquant averti (attention, il nous reste à tester les AHD AFS-2, TAE et autres Starboard). </li></ul>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-04-19 22:58:24',
'updated_at' => '2020-03-26 22:41:58',
),
59 => 
array (
'id' => 61,
'device_id' => 99,
'user_id' => 1,
'title' => 'Test RS:X convertible, RS:One convertible et Foil NeilPryde Alu',
'body' => '<p>Spot : la Ciotat</p><p>Condition du test : vent de Sud-Ouest assez irrégulier entre 15 et 25 Knt</p><p>Matériel testé:</p><ul><li>RS:X Convertible avec gréement en 7.8 m2</li><li>RS:One Convertible avec gréement en 7.0 m2</li><li>Foil NeilPryde RS:FLIGHT AL</li></ul><p>A l’occasion de la présentation du programme RS:Convertible aux responsables du Club Neptune par Damien LEGUEN, nous avons eu l’occasion de tester ces produits destinés à proposer 2 formules monotype : une à destination des clubs (RS:One) et l’autre d’une élite (RS:X) .. et candidate au remplacement à terme de la RS:X actuelle en tant que support olympique.</p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:x-convertible-2017-4yas4AqpfQ.jpg"></p><h4>Le convertible en mode slalom</h4><h4>Contexte</h4><p>Compte tenu des conditions inattendues aujourd’hui, et malgré ce que nous avions prévu initialement, nous avons décidé de profiter du vent soutenu pour tester le concept convertible en mode Slalom. Pendant ce temps là, Damien faisait tester la RS:One en mode foil à l’équipe de Wind Magazine qui était en campagne de test pour leur prochain article sur le foil.</p><p>C’est donc parti avec la RSX:Convertible armé d’un aileron de 40 et de la voile RSX en 7,8. Je dois dire qu’après pratiquement un an sans naviguer en slalom, le retour à une voile à fourreau large en 7,8 dans 20-25knt a été assez déstabilisant pour mes petits bras. Passé le moment de ré-adaptation à une navigation un peu plus bourrin, on peut enfin parler de sensations. </p><h4>Flotteur</h4><p>Malgré le plan d’eau assez mouvementé, le flotteur est assez facile à gérer … même surprenant au final quand on sait qu’il fait 80cm de large pour 130L. Aucun cabrage, aucun mouvement parasite : la planche est légère sous les pieds mais ni collée à l’eau ni volage. Le confort et l’accessibilité me rappellent beaucoup mon ex RS4. Les shapes de Jean Marie Guirec (Exocet) ont décidément un ADN commun. Pour un flotteur conçu pour être utilisé dans toutes les conditions (principe de monotypie), le choix est très pertinent : imaginez si on avait un flotteur de slalom pointu en 80cm de marge, il aurait été ingérable par le commun des mortels dans les conditions musclées.</p><p>Côté aileron, le modèle fourni en série semble plutôt efficace. Subjectivement on manque un peu de portance et de replacement par rapport à nos ailerons habituels (ERD, Rhino), mais on la glisse est bien là. A priori, le flex en tête va être retravaillé pour apporter un peu plus de gaz. </p><h4>Gréement</h4><p>Passons à la voile : la voile RS:X convertible est identique à la future RS:Flight. Elle est issue d’un développement spécifique provenant de la RS:Racing LT1. Le rond de guidant a été diminué pour permettre de loger plus de creux et pour pouvoir plus facilement retendre la chute dans le light en limitant la tension à l’amure. Ce concept devrait permettre d’intégrer un palan de guidant afin d’offrir un réglage sur l’eau. Pour notre test, elle était gréée sur un FLX100, alors qu’elle sera proposé au final avec le SPX95. Avec notre mat de test, le gréement était plutôt très rigide et pêchu : c’est le moins que l’on puisse dire ! Il faudrait que je mesure mais mes bras ont dû s’allonger de 10cm avant que je n’arrête un peu épuisé. Cette combinaison qui convient parfaitement à Damien Leguen (un petit bébé de 100kg) sera moins au goût des petits gabarits peu entrainés (mais soyons francs, ce n\'est pas la cible de ce matériel élite). La combinaison standard avec le SPX95, qui donne un gréement trop souple au gout de Damien devrait nous convenir parfaitement !</p><p>En terme de comportement, on a une voile avec peu de main arrière mais beaucoup de traction vers l’avant et du couple à revendre. On imagine la puissance qu’elle peut générer avec une chute un peu plus tendue. Ce test sera à refaire en saison quand la condition physique sera revenue, mais dors et déjà, on peut dire qu’il sera inutile de sur-tailler la RS:Flight dans une optique foil. Pour mes 78kg, une 7m devrait être parfaite comme voile unique 10-20 knt. Je suis très curieux de la tester avec le SPX95 ou le TPX100 pour voir ce qu’elle peut donner avec un peu plus de souplesse. Ça risque d’être très très intéressant</p><h4>Le concept RS:One convertible en mode foil</h4><p>Après s’être bien allongé les bras avec la RSX:Convertible en 7.8, on passe à la RS:One en mode foil. </p><p>J’avoue que j’étais un peu inquiet à l’idée de partir sur l’eau en foil avec 20 knt et une voile à camber de 7m2. L’expérience a prouvé que d’une part j’avais tort, mais surtout que nous avions dans les mains un concentré de plaisir en boite.</p><h4>Présentation</h4><p>Avant de dévoiler mes sensations, faisons le tour du matériel avec lequel nous partons sur l’eau : le flotteur RS:One est strictement identique à la RS:X Convertible en ce qui concerne le shape (même moule, même positions d’inserts et boitiers) mais avec une construction plus simple. On est ici sur un sandwich verre / PVC avec renforts carbone, alors que la RS:X Convertible utilise un sandwich full carbone/PVC et un matériaux exclusif sur les rails. La planche fait 80cm de large pour 130L, avec un shape intelligemment conçu pour offrir à la fois un comportement idéal en foil, et des performances de haut niveau en slalom. Malgré sa largeur de 80cm, Damien a déjà dépassé les 35knt, ce qui démontre le potentiel du flotteur … même si nous ne serons pas nombreux à égaler ce type de perf. Les straps disposent de 2 rangées d’inserts respectivement à 16 et 18 de l’axe, ce qui va permettre de l’adapter à l’option de navigation (foil ou slalom), au type de foil monté dessus (RSX ou RS:one) et au niveau du pilote. Cela permet aussi de modifier l’angle des straps avant, sachant qu’une position plus proche de l’axe longi. de la planche est assez pratique en foil.</p><p>Pour revenir à nos moutons, nous avons cette fois équipé la planche du foil RS:One, qui je rappelle, est identique au foil <strong>RS:Flight AL</strong> (mis à part l’aile principale en G10 qui est un poil plus large pour la version RS:One). <strong>Ce test revêt donc une importance capitale compte tenu du potentiel commercial de ce produit, et de l’attente du marché autour de ce produit à 800€</strong>. </p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:x-convertible-2017-PJhUeiMC0S.jpg"></p><p>Le fameux foil NeilPryde en aluminium me surprend par la largeur de corde du mat. Le talon deep-tuttle est magnifiquement soudé sur la lame du foil, qui va donc jusqu’au fond du boitier. On sent que la recherche de rigidité a dicté toute la conception, et on sait à quel point c\'est capital dans le résultat. Les ailes en G10 ont fait l’objet d’un usinage soigné. Le profil assez épais promet une portance importante, et l’envergure modérée devrait limiter les risques de départ à la gîte, qui sont l’un des défauts récurrents sur les fois aluminium lorsqu’ils ne sont pas assez rigides. Le plan stabilisateur utilise comme souvent un profil symétrique pour limiter la trainée, mais une surface assez importante, promettant une bonne stabilité longitudinale. Enfin, en terme d’équilibre, le positionnement de l’aile vs les straps paraît tout à fait cohérente. Enfin, l\'assemblage de l\'ensemble avec des grosses vis titane respire la solidité.</p><p>Le gréement RS:One convertible est composé d’une voile en 7m, développée sur la base de la V8, donc avec 2 cambers et un fourreau étroit. Dans le concept de régate monotype, cette voile sera proposée en 5.6, 6.3, 7, 7.8 pour matcher avec les différentes catégories d’âges et sexe. Le mat est le nouveau SPX65 désormais fabriqué en Italie. L’ensemble est assez léger dans les bras et présage évidemment à la fois une puissance inférieure à la RSX, et une accessibilité bien meilleure.</p><p>Assez parlé, passons à l’eau … je le rappelle dans un vent oscillant entre 15 et 25 knt.</p><h4>Le test</h4><p>Je suis parti avec beaucoup de précaution, et l’appréhension de sorties de l’eau rapides dans le vent soutenu. Dans ces conditions, je pars au près et le décollage est immédiat. Je gère avec précaution le montée sur le foil en même temps qu’il accélère. Je ne fais pas beaucoup d’effort pour maintenir le foil dans l’eau ce qui est bon signe. Un peu rassuré, je repasse travers et laisse la planche accélérer franchement. Là, je commence à être surpris car le foil reste gérable et ne tente toujours pas de sortir de l’eau. A ce moment là, j’abats franchement et alors que la vitesse devient soutenue (en gros, ça file sévère), je me rends compte que le foil offre une bonne finesse. J’ai bien un foil premier prix sous les pieds ?!!!</p><p>Pour ne pas jouer les casse-coups, le premier virement sera un virement de bord …on essayera le jibe plus tard ;)</p><p>C’est reparti avec encore une fois, un décollage immédiat et une gestion aisée de la monté. C’est à ce moment là que je me rends compte : depuis le début, je ne fait quasiment aucun effort pour stabiliser le foil. Il est si facile que ça ? On continue le test et je fais le point sur le comportement de ma monture. Le foil NP aluminium est très très stable longitudinalement (moins que le loke, mais équivalent au xtrem foil et zeeko, et devant tous les autres), parfaitement stable en latéral (et là, les candidats sont déjà bien moins nombreux, le seul foil aluminium avec le zeeko que j’ai réussi à mettre en contre gîte), plutôt fin en terme de glisse (moins que le F4, mais plus que les xtrem, fone, loke, etc.) et tellement facile d\'accès (pardonne les erreurs de positionnement et les appuis hazardeux).</p><p>Le poids est plutôt élevé, et en tout cas bien loin des modèles carbone … mais il faut bien qu’il y ai une différence entre un produit à 800€ et un autre à 2000 ! Evidemment, ce n’est pas la seule différence, mais cet éléments jouera sur la maniabilité pour des pratiquants plus aguéris.</p><p>En terme de portance, on a dû attendre la fin d’après midi et moins de vent pour se rendre compte du potentiel dans le light. Là, on est a priori dans la moyenne : il n’ira pas chercher un loke ou un horue dans le très light, mais on est dans une bonne moyenne. En tout cas, un peu au même titre que le Loke, le foil alu NeilPryde m’a permis dès quelques minutes de pratiquement passer un jibe en l’air, preuve encore une fois de l’accessibilité de la bête.</p><p>Un dernier petit mot au sujet du gréement RS:One : j’ai été conquis par la légèreté et l’excellente tenue dans le vent. Naviguant régulièrement en foil avec la V8, je n\'étais pas surpris. J’avoue que si je ne m’étais pas épuisé au départ avec la 7.8, j’aurai bien navigué jusqu’à la nuit avec l’ensemble RS:One tant l’ensemble est réellement axé plaisir à tous les niveaux !</p><p><br></p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:x-convertible-2017-AajnlKosGq.jpg"></p><h4>A tout seigneur ! Test du foil RS:X</h4><p>Mais c’est pas tout, je ne pouvais pas finir la journée sans mettre les pieds sur la Rolls de nos amis bretons : le foil RS:X</p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:x-convertible-2017-Dyr6pi3OYE.png"></p><p>Cette fois, on a à faire à un vrai produit élite full carbone, avec une finition à la F4, un mat ultra rigide, une aile principale à grand allongement version lame de rasoir, et à mon avis un prix qui sera lui aussi élitiste compte tenu des matériaux utilisés (gamme et quantité) et de la fabrication Française (eh oui, ça a un cout, mais qui se plaindra de faire travailler nos compatriotes au détriment des chinois ?).</p><p>C’est donc reparti sur l’eau avec notre petit gréement 7m RS:One mais une formule 1 sous les pieds. Sans faire un grand discours, on a là clairement l’un des foils les plus intéressants que j’ai eu l’occasion de tester. En gros un F4 avec plus de stabilité longitudinal, et un peu moins de stabilité latérale. Quelle glisse !!!! Il va vite … très vite ! Pas sous mes pieds, certes, mais Damien m’a bien tourné autour, le bougre.</p><p>Comme pour le F4 avec l’aile LW2, le foil RS:X demande un peu de vitesse pour décoller. A ce titre, il faut un peu plus de technique que la moyenne mais une fois parti, la glisse est impressionnante, et l’allonge du même niveau. Côté stabilité, c\'est un foil nerveux, et il ne faut pas s\'endormir dessus. Il n\'a bien entendu rien à voir avec la version aluminium.</p><p>Bon, je vous vois venir .. non, il n’est pas du tout fait pour débuter. Mais pour celui qui sait foiler, il y a un vrai client !</p><p><img src="/storage/photos/1/2017-04/neilpryde-rs:x-convertible-2017-5LFXy30Fgw.jpg"></p><h4>Conclusion</h4><p>Bilan de cette après midi de test : on a bien fait de venir ! Un grand merci à Damien</p><p>On a découvert</p><ul>
<li>Un concept de monotypie basée sur un support convertible intelligemment conçu avec beaucoup de complémentarité entre éléments</li>
<li>Un foil NeilPryde aluminium juste bluffant, qui tient toutes ses promesses ... voir même plus !</li>
<li>Un foil RS:X qui monte sans problème sur le podium des modèles existants à ce jour, et peut être même sur la première marche … pour pratiquant averti (attention, il nous reste à tester les AHD AFS-2, TAE et autres Starboard). </li></ul>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-04-19 22:58:24',
'updated_at' => '2020-03-26 22:41:58',
),
60 => 
array (
'id' => 62,
'device_id' => 101,
'user_id' => 1,
'title' => 'Windfoil - Test starboard GT et flotteur Foil 147',
'body' => '<p>Conditions de vent : 10-18 knt</p><p>Spot : Martigues</p><p>Voile 6.0m2 gator (no cam)<br>
</p><p>Flotteur : Starboard Foil 147 technora</p><h4>Présentation</h4><p>Nous testons le foil dans une configuration fuselage court, aile et stab de grande taille. Dans cette configuration, nommée GT, il cible le débutant et le freerideur pour une approche intuitive de la pratique du foil.</p><p>Le tout est installé sur un flotteur spécial foil, renforcé, et conçu avec beaucoup de scoop pour limiter l’effet des touchettes ou amerrissages forcés. De nombreuses positions d\'inserts de straps permettent une grosse capacité d\'adaptation, voir même une utilisation avec aileron.</p><p><img src="/storage/photos/1/2017-04/starboard-foil-147-tecnora-2017-fpVwhQlDYY.jpg"></p><h4>Sur l\'eau</h4><p>Avec cet ensemble, et malgré une voile Gator bien puissante, le départ planning est laborieux. Par rapport à toutes les planches de foil ou de slalom que nous avons utilisé, on a cette fois beaucoup de mal à prendre de la vitesse pour utiliser la portance du foil dans le light wind. On sent que la combinaison forte largeur, scoop important, poids moyen demanderai au moins un ou 2m2 de plus côté voile.</p><p>Une fois en l\'air, la portance est plutôt très bonne et le passage dans les molles de bon niveau, sans être exceptionnel. Le foil réagit au pumping mais on a vu bien mieux de ce côté. Là aussi, la planche ne doit pas aider par son inertie, et on a toujours constaté que les mats très raides n\'aidaient pas de ce côté. A contrario, ce type de design offre en général un comportement beaucoup plus sein dans le vent.</p><p>On a clairement <strong>le foil le plus rassurant que nous avions eu l’occasion d’essayer à ce jour</strong> ! La stabilité latérale est parfaite, au même titre qu’un F4, Zeeko ou NP. La stabilité longitudinale est parfaitement dosée : c’est presque aussi stable qu’un Loke, mais bien plus réactif que le AHD testé le même jour. </p><p>La combinaison entre l’équilibre du foil, la largeur de la planche, et sa stabilité permet de naviguer avec une facilité déconcertante même dans les rafales … à tel point que j’en étais à souhaiter sereinement des bonnes poussées là ou habituellement, on anticipe l’ouverture de la voile pour laisser passer la crise. La navigation au près et à la contre gîte est un jeu d’enfant grâce au grand mat ultra raide, et à la forte largeur du flotteur.</p><p>Côté glisse, on est dans la moyenne haute pour cette configuration GT, mais le starboard va vite … aucun doute la dessus, en particulier bien toilé et avec les ailes slalom : on a vu Antoine Questel à l’oeuvre  !</p><p><img src="/storage/photos/1/2017-04/starboard-foil-147-tecnora-2017-YXMtXAb0a9.jpg"></p><h4>Bilan</h4><p>Au final, l\'ensemble GT + Foil 147 nécessite un peu plus de vent et / ou de toile que la moyenne, avec une navigation en mode free-race. On sent qu’il est parfaitement exploitable avec la même voile que l’on utiliserait habituellement en freeride ou en slalom (là ou on sous-toile nettement avec un foil plus commun). Au même titre que le loke, c\'est un foil qui va beaucoup plaire aux débutants par son accessibilité, et aux slalomeurs, grâce à sa capacité à rester prévisible et rassurant dans des conditions de vent soutenu.</p><p>Avec ce premier contact <strong>très prometteur</strong> sur certains points, on est un peu frustré de ne pas avoir pu exploiter tout le potentiel du concept. On se languis de le re-tester avec un flotteur plus compétitif, les ailes et slalom le fuselage race … cela laisse présager des perfs de très haut niveau (je n\'ai pas de doute là dessus) et probablement de bien meilleurs minis, car c\'est bien là le challenge du foil ! </p><p>La suite très bientôt j\'espère car je n\'en resterai pas là, promis ;)</p><p><img src="/storage/photos/1/2017-04/starboard-foil-147-tecnora-2017-VSCrIDQ1nB.jpg"></p>',
'test_equipment' => 'nc.',
'test_duration' => 3,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2017-04-24 00:34:25',
'updated_at' => '2020-03-26 22:41:58',
),
61 => 
array (
'id' => 63,
'device_id' => 104,
'user_id' => 1,
'title' => 'La solution des écoles',
'body' => '<p>Pour r&eacute;aliser le test de l\'ensemble Windfoil bic techno, nous avons d&eacute;cid&eacute; de le mettre en situation en consid&eacute;rant sa destination finale. C\'est donc sur une journ&eacute;e d\'initiation que nous avons &eacute;valu&eacute; ce produit</p>
<p>Compte tenu de sa conception, de son tarif, et de sa robustesse, l\'ensemble de techno Windfoil est un produit id&eacute;al pour l\'initiation et les clubs ou tous ceux qui veulent garder une utilisation mixte Foil / Aileron avec un maximum d\'accessibilit&eacute;.</p>
<h4>Sur des initiations</h4>
<p>La prise en main du flotteur est rassurante par son volume, et sa similitude avec une planche de freeride. On a du volume et de la longueur. M&ecirc;me avec un gabarit de plus de 90 kg, man&oelig;uvrer &agrave; l\'arr&ecirc;t ne pose aucun probl&egrave;me.</p>
<p>De la m&ecirc;me fa&ccedil;on, se d&eacute;placer sur le plan d&rsquo;eau en dehors des zones vant&eacute;e est ais&eacute; gr&acirc;ce &agrave; la longueur et &agrave; la flottaison du flotteur.</p>
<p><img src="/storage/photos/1/2019-06/bic-techno-windfoil-2019-78bqnMu6gc.jpg" alt="Bic Techno Windfoil" /></p>
<h4>D&eacute;collage</h4>
<p>Pour les premiers pas, l\'apprenti foileur profite d\'une planche tout &agrave; fait conforme &agrave; ce que l\'on peut trouver en freeride et free race. M&ecirc;me sans toiler &eacute;norm&eacute;ment, le flotteur acc&eacute;l&egrave;re facilement et se retrouve tr&egrave;s vite au planning :&nbsp; en comparaison avec un flotteur d&eacute;di&eacute;, la diff&eacute;rence est assez nette.&nbsp;</p>
<p>La grosse force de l\'ensemble techno, <strong>c\'est qu\'il est tr&egrave;s facile d&rsquo;&eacute;voluer au planning sans d&eacute;coller</strong>. Vous me direz que c\'est g&ecirc;nant en windfoil. Pas tant que cela : &ccedil;a permet de d&eacute;couvrir le d&eacute;collage de fa&ccedil;on volontaire, et non impos&eacute;e. Cela a deux avantages :</p>
<ul>
<li>C\'est le pratiquant qui d&eacute;cidera de la mont&eacute;e du foil, et &ccedil;a rassure</li>
<li>Le d&eacute;collage est tr&egrave;s progressif, donc plus facilement contr&ocirc;lable</li>
</ul>
<p>En comparaison avec les ensembles dont nous avons l\'habitude, il faut clairement mettre un appui plus cons&eacute;quent sur le pied arri&egrave;re de cette planche si on veut d&eacute;clencher le vol. Compte tenu des habitudes du planchiste non foileur, on &eacute;vite donc avec cet ensemble, la phase des vols totalement non contr&ocirc;l&eacute;s. Sur les six personnes qui se sont succ&eacute;d&eacute;es lors de notre test, toutes ont r&eacute;ussi &agrave; <strong>contr&ocirc;ler</strong> un premier vol au cours des trois premiers bords r&eacute;alis&eacute;s. C\'est une performance &eacute;vidente qui valide totalement l\'int&eacute;r&ecirc;t de ce mod&egrave;le.</p>
<h4>En vol</h4>
<p>Une fois en l\'air, on a toujours un appui arri&egrave;re (tr&egrave;s) marqu&eacute;, mais cela ne d&eacute;rangera pas les d&eacute;butants habitu&eacute;s &agrave; cet &eacute;quilibre en Windsurf classique. Les plus aguerris ont r&eacute;ussi rapidement &agrave; mettre le pied dans le footstrap arri&egrave;re pour acc&eacute;der &agrave; un &eacute;quilibre plus confortable. La stabilit&eacute; longitudinale est renforc&eacute;e par l\'inertie importante du flotteur, qui r&eacute;agit donc lentement aux sollicitations, et &eacute;ventuellement aux erreurs du pilote</p>
<p>C&ocirc;t&eacute; stabilit&eacute; lat&eacute;rale, on retrouve la facilit&eacute; d&rsquo;acc&egrave;s de l&rsquo;AFS 85 qui reste une r&eacute;f&eacute;rence.</p>
<p>Seule la stabilit&eacute; en lacet est un peu limit&eacute;e &agrave; basse vitesse. Il faudra donc bien insister sur l&rsquo;importance de prendre de la vitesse avant de d&eacute;clencher le vol.</p>
<p>C&ocirc;t&eacute; contr&ocirc;le en vol, on est forc&eacute;ment limit&eacute; par la largeur de la planche sous le pied arri&egrave;re, et la forme de pont traditionnelle. Ceci dit, en comparaison avec une planche slalom classique, la position des footstraps, et l&rsquo;outline moins pointu repr&eacute;sentent d&eacute;j&agrave; un avantage.</p>
<p><img src="/storage/photos/1/2019-06/bic-techno-windfoil-2019-zFx6FPcYQB.jpg" alt="Bic Techno Windfoil" /></p>
<h4>Touchettes</h4>
<p>Pour ce qui est des touchettes, la techno ne marque pas beaucoup de points, mais c\'est assez logique compte-tenu de la polyvalence n&eacute;cessaire. Il est &eacute;vident que la plupart des flotteurs d&eacute;di&eacute;s offrent une meilleure glisse lors des atterrissages. Le ralentissement est nettement plus marqu&eacute; ici, mais reste g&eacute;rable gr&acirc;ce au volume et &agrave; la longueur du flotteur.</p>
<p><img src="/storage/photos/1/2019-06/bic-techno-windfoil-2019-omIBMuTeSi.jpg" alt="Bic Techno Windfoil" /></p>
<p>Je ne m&rsquo;appesantirai pas ici sur des consid&eacute;rations de performance car ce n&rsquo;est pas du tout le sujet.&nbsp;</p>
<h4>Dans la cible</h4>
<p>Pour faire un premier bilan au sujet de cet ensemble, je pr&eacute;ciserai juste que l&rsquo;ensemble des testeurs du jour on eu une progression ultra rapide, et pris imm&eacute;diatement du plaisir (la photo ci dessous ne donne pas bneaucoup de doutes), ce qui est la meilleur preuve de la r&eacute;ussite du projet. Nous validons &agrave; 100% le choix de ce mod&egrave;le pour une utilisation en d&eacute;couverte &eacute;cole.</p>
<p>Il nous reste &agrave; tester le flotteur en mode aileron, mais compte tenu du shape, peu de surprises a priori.</p>
<p><img src="/storage/photos/1/2019-06/bic-techno-windfoil-2019-fkzyNKo813.jpg" alt="Bic Techno Windfoil" /></p>
<h4>Pratique confirm&eacute;e</h4>
<p>Pour un pratiquant aguerri, et habitu&eacute; &agrave; des ensembles d&eacute;di&eacute;s modernes, le combo Techno Windfoil est &eacute;videmement peu reluisant. Le flotteur a beaucoup d\'inertie, l\'&eacute;quilibre est trop pied arri&egrave;re, le contr&ocirc;le est moyen, et les touchettes bien collantes ... on fait donc beaucoup mieux que la plupart des points.&nbsp;</p>
<p>Par contre, si on met dans la balance la polyvalence, le prix et la robustesse, ce combo est unique sur le march&eacute; ! Si on compare ce combo &agrave; l\'utilisation d\'un foil sur une planche traditionnelle (Slalom par axemple), l&agrave; encore, la techno fait beaucoup mieux. Il n\'est donc pas possible de juger seuls les crit&egrave;res techniques de performance, et la performance est justement ici d\'offrir une telle accessibilit&eacute; ! Certes, cela limite l\'int&eacute;r&ecirc;t de se combo en tant qu\'investissement personnel, mais son int&eacute;r&ecirc;t pour une &eacute;cole de voile qui d&eacute;sire proposer des sessions d\'initiation, c\'est juste parfait.</p>
<h4>Avant d\'en finir</h4>
<p>Je vais ajouter deux points importants</p>
<p>Je commencerai par le point n&eacute;gatif: comme tr&egrave;s souvent avec les mod&egrave;les de foil AFS, nous avons gal&eacute;r&eacute; une bonne 20aine de minutes pour installer les vis de talon, avec des trous d&eacute;sax&eacute;s par rapport aux inserts,&nbsp; et surtout des inserts qui tournent dans leur logement, et se mettent syst&eacute;matiquement de travers &agrave; chaque insertion de la vis. Oui, bien s&ucirc;r, on peut repercer la planche, coller les inserts, etc mais quand on ach&egrave;te un combo, c\'est inadmissible alors on le dit une fois de plus.</p>
<p>Je finirai par le point positif : les 6 personnes, qui se sont succ&eacute;d&eacute;es ce jour-l&agrave;, ont bien entendu encha&icirc;n&eacute; les figures de style entre 15 et 20 knt de vent avec des chutes toutes aussi originales les unes que les autres &hellip; et il n&rsquo;y avait aucune marque sur le flotteur &agrave; l&rsquo;issue de la journ&eacute;e. Cela t&eacute;moigne clairement de la robustesse du flotteur car tout autre mod&egrave;le aurait eu ce jour l&agrave; quelques s&eacute;quelles.&nbsp;</p>
<p><img src="/storage/photos/1/2019-06/bic-techno-windfoil-2019-pqc5aAz0rB.jpg" alt="techno" /></p>',
'test_equipment' => 'Gréement starboard flight',
'test_duration' => 3,
'test_conditions' => '10-18 knt',
'test_place' => 'La Ciotat',
'created_at' => '2019-06-13 14:35:18',
'updated_at' => '2020-11-05 06:57:20',
),
62 => 
array (
'id' => 64,
'device_id' => 20,
'user_id' => 1,
'title' => 'Aile 1050 - Coup de boost dans le light',
'body' => '<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-GdTH3vJoBt.jpg" alt="" /></p>
<p>En comparaison avec l\'aile de 800 Freeride et surtout la 800 freerace, la 1000 d&eacute;colle sans contest plus t&ocirc;t. Elle permet surtout de supporter beaucoup plus de toile.</p>
<p>Lors de ce premier test r&eacute;alis&eacute; dans un vent oscillant entre 6 et 9 knt, j\'&eacute;tais en 9m2 hyperglide 2 avec un plan d\'eau d&eacute;j&agrave; clapoteux. Tr&egrave;s clairement, ce sont des conditions, il aurait &eacute;t&eacute; difficile de d&eacute;coller avec la 800 freeride, et impossible avec la 800 freerace. Et une fois en l\'air, la 1000 permet surtout d\'y rester et de naviguer confortablement, sans &ecirc;tre sur des oeufs.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-NHveHEa3Yr.jpg" alt="" /></p>
<p>Bien entendu, on se doutait du r&eacute;sultat, et on rejoins ce que l\'on ressent avec une Starboard Mill&eacute;nium ou une Loke 1000 ... c\'est &agrave; dire une aile qui porte beaucoup sans trop sacrifier la glisse, puisque l\'on navigue autour de 17-18knt dans un vent de 7-8 knt. Il parait &eacute;vident que dans sa plage d\'utilisation standard (6-15 knt de vent), une telle aile a un potentiel de Vmax autour de 22-23knt pour un rideur standard. En terme de glisse, on est un ton en dessous d\'une grande aile de race (type F4, Starboard, Phantom), mais tr&egrave;s au dessus des gros mod&egrave;les freeride (Fanatic, Loke, Etc.)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-9dnBajxHat.jpg" alt="" /></p>
<p>Si on se penche sur les diff&eacute;rences de sensation avec la concurrence, la remarque qui saute aux yeux (ou plut&ocirc;t aux jambes), c\'est le contr&ocirc;le de l\'ensemble. Sur ces tr&egrave;s grandes ailes, on a l\'habitude de ressentir un peu plus de torsions ou d\'&eacute;lasticit&eacute; sous les pieds vu les envergures. Ici, rien ne bronche, le foil est d\'une rigidit&eacute; incroyable, et malgr&eacute; le clap&ocirc;t du jour (plus de clapot que de vent dans la rade Nord de Marseille), on ne sens absoluement rien ! Assez bluffant sur ce point de vue.</p>
<p>Dans le m&ecirc;mes conditions, je n\'ai pas pu m\'emp&ecirc;cher de comparer le Noe UHM / 1000 avec un foil d\'une autre cat&eacute;gorie : un vrai foil de Race.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-2BK7NmTYMn.jpg" alt="" /></p>
<p>En l\'occurence, j\'ai utilis&eacute; l\'un de nos foils de r&eacute;f&eacute;rence, &agrave; savoir le F4 race (aile de 1000, fuslage de 120). Dans ces conditions ultra light, le F4 d&eacute;colle plus facilement (je n\'ai pas dit plus t&ocirc;t, mais avec moins d\'&eacute;nergie d&eacute;pens&eacute;e), et surtout cape beaucoup plus d&egrave;s qu\'on est en l\'air. La diff&eacute;rence est flagrante : l&agrave; o&ugrave; je faisais du travers avec le Noe, je fais 15&deg; de cap suppl&eacute;mentaire. En contre partie, je vais un poil plus vite avec le Noe dans ces m&ecirc;mes conditions (0.2 knt) , et le fuslage court et tr&egrave;s rigide du Noe n\'a aucune &eacute;lasticit&eacute;, contrairement aux foils de race dont le porte &agrave; faux &eacute;norme de l\'aile avant introduit fatalement un certain flou dans la conduite.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-0trEmTvfre.jpg" alt="" /></p>
<h3>Fuselages prototypes</h3>
<p>La deuxi&egrave;me partie de ce test concerne les prototypes de fuselage. Le premier est un 85+ titane, et le second un 95+ aluminium.</p>
<h4>Fuselage titane</h4>
<p>Cela fait un moment que nous attendions cette pi&egrave;ce. Soyons tr&egrave;s clair, le principal et premier objectif de passer au titane est sa totale insensibilit&eacute; &agrave; la corrosion. Comme ce mat&eacute;riau est par ailleurs plus rigide que l\'aluminimum, nous voulions savoir si il avait une influance sur la navigation. Nous avons donc effectu&eacute; 2 tests en passant alternativement du fuselage aluminium au titane et vis versa. </p>
<p>&nbsp;Bien &eacute;videment, les sensations sont analogues, mais nous avons effectivement ressenti une diff&eacute;rence, qui est exactement assez fine, du m&ecirc;me ton que lorsque nous sommes pass&eacute; du mat carbone standard au mat UHM : le comportement est le m&ecirc;me, mais on a la sensation d\'une glisse plus propre et plus fluide, avec moins de perturbations. Plus les conditions sont compliqu&eacute;es (clapot), plus on ressent un c&ocirc;t&eacute; plus serain avec le titane ... sans pour autant que le changement ne soit radical.</p>
<h4>Fuselage Alulminium 95+</h4>
<p>Ce prototype est issu d\'une demande que j\'ai fait pour acompagner l\'aile de 1000. Le test a donc &eacute;t&eacute; fait dans des conditions de vents de 8 &agrave; 12knt en 9m2. Dans ces conditions, le fusleage de 95+ apporte un meilleur &eacute;quilibre, et une position plus confortable dans le light car il est plus facile de s\'appuyer sur le pied arri&egrave;re. On gagne aussi quelques degr&eacute;s au cap, sans pour autant s\'approcher des purs foils de race (compar&eacute; au F4 race avec son fuselage de 120). Le bon point : on ne perd aucun point sur le terrain de la rigidit&eacute; et du contr&ocirc;le.&nbsp;</p>
<p>Encore une fois, on est &agrave; 100% dans la philosophie du Noe 97 : un foil ultra facile, tr&egrave;s rigide avec un contr&ocirc;le impeccable, qui n\'est pas l&agrave; pour rivaliser avec un produit de course, mais qui propose ce qui se fait de mieux pour une utilisation sportive 100% plaisir.&nbsp;</p>
<h3>Conclusion</h3>
<p>Comme on pouvait s\'y attendre, la nouvelle aile 1000 Taaroa offre &agrave; la fois un d&eacute;collage tr&egrave;s pr&eacute;coce dans l\'ultra light, une capacit&eacute; &agrave; supporter des grosses voiles et une tr&egrave;s bonne glisse. L&agrave; o&ugrave; cette configuration nous surprend, c\'est sur l\'exceptionnelle rigidit&eacute; de l\'ensemble au regard de la portance offerte.</p>
<p>Le test prouve que cette option est parfaite pour ceux qui veulent naviguer dans des conditions marginales, sans chercher &agrave; faire un cap de fou ... mais aussi sans s\'emb&ecirc;ter avec la technicit&eacute; et l\'encombrement d\'un foil de race.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-8fJOJLCKDS.jpg" alt="" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/taaroa-noe-97-freerace-uhm-2020-kb4Czn1twj.jpg" alt="" /></p>
<p>&nbsp;</p>',
'test_equipment' => 'Starboard F150 + Hyperglide 2 en 9m',
'test_duration' => 2,
'test_conditions' => '6-9 knt, plan d\'eau légèrement houleux',
'test_place' => 'Marseille',
'created_at' => '2020-02-16 22:42:13',
'updated_at' => '2020-04-07 14:04:39',
),
63 => 
array (
'id' => 65,
'device_id' => 106,
'user_id' => 1,
'title' => 'Ludique en strapless',
'body' => '<h3>Mise &agrave; l\'eau</h3>
<p>D&egrave;s la prise en main, la Foil X sort de l\'ordinaire : ultra compacte, on a du mal &agrave; imaginer qu\'il a &eacute;t&eacute; possible de loger 145L dans un flotteur qui mesure 1m90 par 71cm. Pourtant, il suffit de monter dessus pour s\'en convaincre : on ne se mouille m&ecirc;me pas un orteil .. et m&ecirc;me les beaux gabarits seront au sec. C\'est super rassurant, et permet d\'envisager des retours au bord m&ecirc;me avec un vent qui est tomb&eacute;.</p>
<p>Contrairement &agrave; des gros flotteurs large, on ressent malgr&eacute; tout un peu plus de roulis.</p>
<p><img src="/storage/photos/1/2019-08/starboard-foil-x-145-starlite-2020-9w62Y0tH5y.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>D&eacute;collage</h3>
<p>Le 2e effet de ce volume important log&eacute; dans une planche aussi courte, c\'est qu\'il est assez facile de se reculer sur la planche pour chausser le strap avant ... m&ecirc;me sans planer. Cela permet de pr&eacute;parer le d&eacute;collage avec s&eacute;r&eacute;nit&eacute;. A la moindre rafale, l\'accl&eacute;ration est \'facile\'. On sent que la planche ne n&eacute;cessite que peu de puissance pour acc&eacute;l&eacute;rer car on a peu d\'effort dans les bras, mais il fauit tout de m&ecirc;me un peu plus de vent qu\'avec le matos race light wind. On retrouve un peu la sensation que l\'on avait sur des planches commes les tiny, mais ici avec un volume beaucoup plus g&eacute;n&eacute;reux. Associ&eacute;e au Supercruiser, on ne tarde pas &agrave; d&eacute;coller avec la FoilX. Sur la photo &ccedil;i dessous, je vole avec 6,7 dans moins de 10 knt, et sans m\'arracher au pumping.</p>
<p>Pour &ecirc;tre pr&eacute;cis, ce n\'est pas le combo avec lequel j\'ai d&eacute;coll&eacute; dans le moins de vent, mais c\'est certainement l\'un de ceux qui n&eacute;cessitent le moins de puissance v&eacute;lique pour se retrouver en vol lorsque les rafales sont suffisament fortes. En cela, cette solution va &ecirc;tre appr&eacute;ci&eacute;e par tous ceux qui veulent voler facilement avec des petites voiles. Associ&eacute; au Supercruiser, la Foil X est assur&eacute;ment l\'une des meilleures solutions pour les gros gabarits qui veulent voler assez t&ocirc;t sans forc&eacute;ment chausser une voile de 8,5m2. On le verra par la suite, mais la contre partie est un ensemble tr&egrave;s tranquille qui n\'est absoluement pas fait pour allez chercher de la performance, et sur lequel il n\'est clairement pas opportun de mettre des grandes voiles.</p>
<p><img src="/storage/photos/1/2019-08/starboard-foil-x-145-starlite-2020-oJ1sLYAP6n.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>Stabilit&eacute;</h3>
<p>Une fois en l\'air, l\'ensemble Foil X + Supercruiser est rassurant et maniable.</p>
<p>On a une excellente stabilit&eacute; longitudinale pour un fuselage de 87cm.&nbsp; Comme la planche est courte avec peu d\'inertie, le contr&ocirc;le de cet axe est tr&egrave;s intuitif, &agrave; d&eacute;faut d\'&ecirc;tre bloqu&eacute; comme sur un foil de race. Avec le supercruiser, qui est assez puissant, j\'ai ressenti un vrai int&eacute;r&ecirc;t &agrave; pouvoir d&eacute;placer le pied arri&egrave;re sur la planche pour g&eacute;rer les rafales ou molles. C\'est ainsi sans les straps arri&egrave;res que j\'ai trouv&eacute; le combo le plus int&eacute;ressant .. cela permet d\'avoir toujours un &eacute;quilibre optimal.&nbsp;</p>
<p>Sur l\'axe transversal, on a un comportement sein, mais avec un peu plus de libert&eacute; proche du neutre que dans les configurations GT ou GTS. Ces petits mouvements sont bizaremment plus sensibles sur la mat alu que sur le mat carbone. C\'est une sensation que l\'on retrouve d\'ailleurs sur la plupart des foils &agrave; grosses ailes (Glide, Mach 1, etc.). Ces mouvements sont ici un peu plus sensibles avec la Foil X qu\'avec la Foil Freeride 125 (Test&eacute; &eacute;galement avec le m&ecirc;me foil). Je pense qu\'ils sont amplifi&eacute;s par l\'&eacute;paisseur assez importante de la planche. La contre g&icirc;te est tr&egrave;s facile &agrave; g&eacute;rer avec cet ensemble.</p>
<p><img src="/storage/photos/1/2019-08/starboard-foil-x-145-starlite-2020-JVkCK2BHBJ.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<p>Sur l\'axe lacet, la FoilX offre tr&egrave;s peu d\'inertie et permet de conduire avec facilit&eacute; nos fantaisies.&nbsp;</p>
<h3>Et quand &ccedil;a touche</h3>
<p>Lors des touchettes, la FoilX offre tr&egrave;s peu de train&eacute;e, ce qui est logique compte tenu de sa largeur. Si on vient &agrave; planter devant, le volume cons&eacute;quent du nez permet de ne pas enfourner r&eacute;ellement, et on retrappe en g&eacute;n&eacute;ral assez facilement les d&eacute;fauts d\'&eacute;quilibres.</p>
<p><img src="/storage/photos/1/2019-08/starboard-foil-x-145-starlite-2020-VB1nt5VWnL.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>Manoeuvres</h3>
<p>Dans cet exercice, j\'ai trouv&eacute; la FoilX un peu moins facile que la 125, mais certains autres testeurs on &eacute;t&eacute; au contraire plus &agrave; l\'aise avec la 145. Comme quoi chacun a ses habitudes.</p>
<p>Si vous &ecirc;tes adeptes des manoeuvres en tout genre (jibe, 360 etc.), je vous invite vraiement &agrave; essayer la 145 en mode strapless (ou juste avec les straps avant) ... c\'est au final comme ceci que nous l\'avons tous pr&eacute;f&eacute;r&eacute;e !</p>
<p><img src="/storage/photos/1/2019-08/starboard-foil-x-145-starlite-2020-259oKbp1AA.jpg" alt="Starboard Foil X et Supercruiser" /></p>
<h3>Bilan</h3>
<p>Ce combo Foil X 145 + Supercruiser a &eacute;t&eacute; r&eacute;ellement pour nous une d&eacute;couverte.</p>
<p>C\'est assez &eacute;loign&eacute; de ce que nous testons la plupart du temps, mais j\'ai r&eacute;ellement pris du plaisir en mode strapless, avec des petites voiles (6.7 dans une 10 aine de knt). Entre la maniabilit&eacute;, et la douceur de conduite, c\'est un mode de navigation 100% plaisir qui donne envie de recommancer encore et encore. Ici, il n\'est pas question de grandes balades en remontant au vent, mais au contraire une navigation pleine de sensations dans un espace r&eacute;duit, en enchainant les jibes en l\'air ... objectif : 100% du temps en vol :)</p>
<h3>La vid&eacute;o</h3>
<p>Pour finir ce post, je vous propose une pr&eacute;sentation par Tieday YOU himself (le boss et designer de Starboard Foil), ainsi que quelques belles images faites&nbsp; cet &eacute;t&eacute; sur Serre Pon&ccedil;on (&agrave; visionner en HD pour en profiter au mieux).</p>
<p><iframe src="https://www.youtube.com/embed/TT4vtVnD4sU" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>',
'test_equipment' => 'Foil Supercruiser Alu et carbone / Gréement Flight 6.7',
'test_duration' => 1,
'test_conditions' => 'Vent entre 6 et 20knt',
'test_place' => 'Serre Ponçon',
'created_at' => '2019-08-17 08:27:18',
'updated_at' => '2020-04-07 14:06:45',
),
64 => 
array (
'id' => 67,
'device_id' => 107,
'user_id' => 1,
'title' => 'Etonnant et attachant',
'body' => '<p>Apr&egrave;s la <a href="https://marseille.glissattitude.com/blog/windfoil-deballage-bullet-1.html">pr&eacute;sentation</a> de ce nouveau foil Zeeko, et premier mod&egrave;le carbone de la marque, nous &eacute;tions impatient de le mettre &agrave; l\'eau et v&eacute;rifier les sensations que nous avions eu l\'&eacute;t&eacute; dernier lors des premiers tests de prototypes.</p>
<p>Pour cette d&eacute;couverte du Zeeko, nous avons eu droit &agrave; 2 sessions avec des conditions pas id&eacute;ales, mais un certain virus ne nous a pas donn&eacute; l\'occasion de retourner &agrave; l\'eau depuis pour en savoir plus. Lors de ces 2 sessions, nous avons eu droit pour commencer &agrave; du vent ultra irr&eacute;gulier (fort dans les rafales et rien dans les molles), puis lors de la 2e session &agrave; un vent soutenu en permanence (entre 18 et 22 knt).</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/IMG_3407.jpg" alt="Zeeko Bullet" /></p>
<h3>Envol et d&eacute;collage</h3>
<p>La mise en vol avec le zeeko m\'a paru facile et progressive dans les conditions du test (il y avait du vent ceci dit). Subjectivement, la glisse avant d&eacute;collage n\'est pas exceptionelle mais dans une bonne moyenne. Le d&eacute;collage intervient bien plus t&ocirc;t qu\'avec le mod&egrave;le aluminium de la marque, et, m&ecirc;me si je ne l\'ai pas test&eacute;, je suppose que ce foil acceptera des tailles de voiles beaucoup plus grosses gr&acirc;ce &agrave; la grosse portance de l\'aile.</p>
<p>Dans les conditions de vent plut&ocirc;t soutenues rencontr&eacute;es, il n\'y avait pas de diff&eacute;rence notable sur ce point entre les 2 configurations (race : mat recul&eacute; , slalom : mat avanc&eacute;)</p>
<h3>Comportement en vol</h3>
<p>Par contre, le choix de la configuration a beaucoup influenc&eacute; les sensations en vol stabilis&eacute;.</p>
<div class="multi-col-2">
<div>
<h4>En mode Slalom</h4>
<p>En mode slalom, on a un comportement plut&ocirc;t \'standard\' et conforme aux foils modernes et bien con&ccedil;us. La stabilit&eacute; longitudinale est plut&ocirc;t tr&egrave;s bonne, et, que ce soit en lacet ou en transversal, on est &eacute;galement dans une moyenne haute. &nbsp;Dans le vent assez soutenu, le r&eacute;glage du stab est important et tr&egrave;s sensible ... et ce d\'autant plus que l\'aile est un peu grosse pour ces conditions.&nbsp;</p>
<p>En terme de sensation de glisse, le Bullet marque un peu le pas avec sa grosse aile de 950 .. mais c\'est un peu logique. Dans ces conditions de vent soutenu, on aurait en effet aim&eacute; qu\'il se lib&egrave;re un peu plus en acc&eacute;l&eacute;rant plus naturellement. Il sera tr&egrave;s int&eacute;ressant de tester avec l\'aile de 700 qui arrive, &agrave; la fois pour am&eacute;liorer la glisse, et rendre la navigation plus seraine dans de telles conditions.&nbsp;</p>
<p>En terme de contr&ocirc;le, et hormis ce \'probl&egrave;me\' de puissanc&eacute; &eacute;lev&eacute;e d&ucirc; &agrave; cette grande aile, le Bullet est plut&ocirc;t facile et tol&eacute;rant. Il n\'est absolument pas nerveux ou fougueux comme certains autres. On ressent au contraire une certaine \'tendresse\' sous les pieds, qui le rend plut&ocirc;t sage, confortable, sans aucune r&eacute;action vive et g&eacute;nante. J\'ai retouv&eacute; ce c&ocirc;t&eacute; tr&egrave;s plug &amp; play que j\'avais ressenti lors des premiers tests de l\'an pass&eacute;. Une fois pass&eacute; les premiers moments, et en prenant confiance, on se laisse vite gagner par la tol&eacute;rence du Bullet, et on ose un engagement que l\'on aurait pas tent&eacute; sur d\'autres mod&egrave;les.&nbsp;</p>
<p>Lors des manoeuvres, le Bullet reste aussi tr&egrave;s facile, et pour le coup, la grosse portance de l\'aile favorise &eacute;videmment la r&eacute;ussiste des jibes en l\'air.&nbsp;</p>
</div>
<div>
<h4>En mode Race</h4>
<p>Dans le vent ultra irr&eacute;gulier du premier jour de test, je suis rapidement pass&eacute; en configuration "race" avec le mat recul&eacute;, et donc une aile avant tr&egrave;s avanc&eacute;e par rapport au mat.</p>
<p>Cette fois, on a un foil radicalement diff&eacute;rent ... comme quoi d&eacute;j&agrave; ce r&eacute;glage a d&eacute;j&agrave; une influance capitale !</p>
<p>Les sensations que j\'ai eu &eacute;taient in&eacute;dites et tr&egrave;s int&eacute;ressantes. Dans ce mode, le foil semble auto-stabilis&eacute; en longitudinal ... au moins autant qu\'avec certains foils de race qui ont de tr&egrave;s longs fuselages.</p>
<p>Ce qui est vraiment &eacute;tonnant, c\'est qu\'&agrave; la fois, on n\'a pas cette sensation d\'inertie de certains foils &nbsp;avec lesquels on a du mal &agrave; corriger l\'assiette, et en m&ecirc;me temps, on n\'a pratiquement aucun effort &agrave; faire pour g&eacute;rer l\'altitude. Quand on fait des erreurs d\'appui, le foil ne monte pas brusquement, et il donne m&ecirc;me l\'impression de s\'arr&ecirc;ter tout seul avant de sortir de l\'eau ... sensation assez &eacute;tonnante ... et tr&egrave;s agr&eacute;able. Bon, je pr&eacute;cise quand m&ecirc;me que j\'ai un assez bon niveau en foil. Il ne faut donc pas se dire pour autant que l\'importe quel d&eacute;butant va se promener avec le Bullet au bout de 2 sessions. Ceci dit, dans cette configuration Race, il est effectivement plus facile que d\'autres.</p>
<p>En terme de sensation, on per&ccedil;ois une certaine souplesse, mais la partie basse du foil (ce qui est dans l\'eau) semble s\'auto-g&eacute;rer sans perturber le comportement de la planche. Habituellement, lorsque le foil est souple, c\'est le flotteur qui contient les &eacute;carts g&eacute;n&eacute;r&eacute;s par le foil. L&agrave;, c\'est presque l\'inverse : on a l\'impression que le point stable est la partie sous l\'eau.&nbsp;</p>
<p>Dans les molles ou au jibe, on a un belle allonge et un appui franc ... un peu de la m&ecirc;me fa&ccedil;on qu\'avec certains foils freeride, la glisse en plus.</p>
<p>Au final, cette configuration est vraiment tr&egrave;s int&eacute;ressante dans le vent irr&eacute;gulier car m&ecirc;me si on ne va pas tr&egrave;s vite, on optimise le temps pass&eacute; en l\'air, et j\'avoue que c\'est un mod&egrave;le avec lequel je r&eacute;ussi pratiquement tous les jibe en l\'air.&nbsp;</p>
</div>
</div>
<h3>Comparaison avec les autres foils</h3>
<p>Le Bullet a vraiment 2 visages. En mode Slalom, on peut le comparer &agrave; un Taaroa No&eacute; 97 freerace, et avec un peu moins de glisse (aile de 950 contre aile de 800 pour le Noe), mais avec ce m&ecirc;me contr&ocirc;le facile et intuitif.</p>
<p>En mode race, on a une stabilit&eacute; longitudinale assez &eacute;tonnante, un peu comme avec un AFS 95, mais avec moins d\'inertie, et plus de libert&eacute; pour aller &agrave; la contre g&icirc;te.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-03/IMG_3424.jpg" alt="Zeeko Bullet" /></p>
<h3>Au banc de mesure</h3>
<p>Compte tenu de ces sensations &eacute;tonnantes, nous n\'avons pas r&eacute;sist&eacute; &agrave; l\'envie de passer le Bullet au banc de mesure pour nous &eacute;clairer. Il en ressort que</p>
<ul>
<li>la rigidit&eacute; en flexion du mat est autour de 5 (si 0 repr&eacute;sente le plus souple, et 10 le plus raide)</li>
<li>la rigidit&eacute; en torsion du mat est autour de 3.5</li>
</ul>
<p>Cela corrobore nos sensations : une relative souplesse du mat en torsion, mais pas de d&eacute;fauts en terme de contr&ocirc;le. En cela, il se d&eacute;marque des constatations habituelles o&ugrave; cette souplesse en torsion conduit &agrave; un contr&ocirc;le probl&eacute;matique. Il semblerai, sur ce mod&egrave;le, que la souplesse conduise plut&ocirc;t &agrave; un gain de confort, sans contre-partie n&eacute;gative. &nbsp;On attend avec impatience la fin du confinement pour l\'emmener dans la houle et voir si on a cette m&ecirc;me facilit&eacute;.</p>
<h3>Bilan</h3>
<p>M&ecirc;me si Mr Covid nous a eu peu coup&eacute; l\'herbe sous le pied, les premiers moments pass&eacute;s sur l\'eau avec le Bullet ouvrent l\'app&eacute;tit. Le foil est tr&egrave;s facile &agrave; prendre en main (m&ecirc;me si il n\'est pas fait pour les d&eacute;butants) et participe clairement &agrave; une impression de s&eacute;curit&eacute;. Ce n\'est pas un foil superlatif, que ce soit en terme de perf ou de glisse (tout au moins avec l\'aile de 950) mais plut&ocirc;t un foil sage et efficace pour passer un max de temps en l\'air. En terme de sensation, c\'est un gros bon en avant en comparaison du Amplifier, et la solution de r&eacute;glage de position du mat sur le fuselage est tr&egrave;s efficace : on a 2 foils en 1, sans transporter 2 fuselages.</p>',
'test_equipment' => 'Flotteur Horue Airtime 125 / Voile IRIS X 6.6 et Severne FoilGlide 5.0',
'test_duration' => 4,
'test_conditions' => '10 à 25 knt',
'test_place' => 'La Ciotat / L\'almanarre',
'created_at' => '2020-04-06 11:11:00',
'updated_at' => '2020-04-08 12:19:32',
),
65 => 
array (
'id' => 68,
'device_id' => 112,
'user_id' => 1,
'title' => 'Un jouet',
'body' => '<p>Apr&egrave;s avoir test&eacute; les premi&egrave;res voiles d&eacute;di&eacute;es au windfoil, dont les prototypes Horue Swart tr&egrave;s prometteurs, nous &eacute;tions impatients d\'avoir en main une version d&eacute;finitives.</p>
<h3>Pr&eacute;sentation</h3>
<p>La Swart est une voile sans camber disponible de 1,5 &agrave; 5,5m2 par pas de 0,5m2. Sa conception est bas&eacute;e sur 3 objectifs : une optimisation du poids, un maximum de dynamisme et une grosse puissance pour d&eacute;coller. La construction fait appel &agrave; un mat&eacute;riau tram&eacute; tr&egrave;s l&eacute;ger type Pentex qui fait penser aux voiles des voiliers de course, &agrave; des anneaux en c&eacute;ramique, du spectra etc. pour arriver &agrave; un poids jamais rencontr&eacute; jusqu\'alors.</p>
<p>La voile est con&ccedil;ue autour des mats RDM python de la marque reptile. En dehors de leur l&eacute;g&egrave;ret&eacute;, ces mats offrent une grosse dynamique tr&egrave;s coh&eacute;rente avec les objectifs de la voile.</p>
<p>Les SWART sont fabriqu&eacute;es en France, et ceci constitue une vraie exception dans notre petit monde.</p>
<h3>Sur l\'eau</h3>
<p><img src="/storage/photos/1/2020-02/c344fc44f1355cd4f302e5c8194e8500.jpg" /></p>
<p>D&egrave;s la prise en main (ne serait ce que lors de la mise &agrave; l\'eau) la sensation de l&eacute;g&egrave;ret&eacute; extr&ecirc;me est &eacute;vidente ! C\'est tout &agrave; fait &eacute;tonnant pour une voile de 5,0 m&sup2;. Elle est certainement moins lourde que bon nombre de 4 ou 4,5 !</p>
<p>Avant m&ecirc;me de partir au planning, la swart d&eacute;veloppe une puissance tr&egrave;s g&eacute;n&eacute;reuse, que je comparerai sans probl&egrave;me &agrave; une 5,5 voir certaines 6m. Cela m\'a permis de naviguer sereinement dans 15knt de vent avec mes 78kg.</p>
<p>Le pumping est extr&ecirc;mement efficace pour une voile rotative. Le prototype avait annonc&eacute; la couleur, mais cette version d&eacute;finitive est juste incroyable en association avec le python 100. En fin de mouvement de pumping, on sent nettement la chute se refermer et propulser la voile en avant. Je n\'avais jamais ressenti cet effet sur une voile rotative, et rarement avec une telle efficacit&eacute; m&ecirc;me sur une voile &agrave; camber. Je r&ecirc;ve que Teva arrive &agrave; reproduire ceci sur la SWART RS pour les grandes tailles.</p>
<p>Bref, le dynamisme de l&rsquo;ensemble permet de d&eacute;coller rapidement, si l&rsquo;on sait &ecirc;tre &eacute;nergique. Il faut dire que la l&eacute;g&egrave;ret&eacute; incroyable du gr&eacute;ement permet un pumping assez furieux sans y laisser toute son &eacute;nergie.</p>
<p>Une fois en l\'air, la navigation en mode freeride est extr&ecirc;mement agr&eacute;able gr&acirc;ce au poids plume. Bien s&ucirc;r, la compacit&eacute; de la voile ne la destine pas &agrave; &eacute;quiper des ensembles bas&eacute;s sur des foils et boards ax&eacute;s slalom. De m&ecirc;me, pas assez de taille de wish et de main arri&egrave;re pour jouer sur des bords de pr&egrave;s serr&eacute; et de largue. Par contre, elle s\'associera avec bonheur &agrave; des ensembles ax&eacute;s freeride (Viny, Tiny, Aeromod, Slingshot). Pour les afficionados des manoeuvres et autres 360, vous avez ici l\'arme ultime, comme a pu nous le prouver Philippe.</p>
<p>Dans les molles, la voile a une tr!bonne allonge, mais ne pourra pas concurrencer bien s&ucirc;r une voile &agrave; cambers. Si c\'est un peu juste, il suffit de 3 mouvements de pumping pour relancer la vitesse.</p>
<p>Dans les rafales, le profil reste stable m&ecirc;me quand on choque pour laisser passer les surventes. Le creux ne recule pas et la voile ne tire pas plus sur la main arri&egrave;re. Pourtant, la voile est vivante et absolument pas bloqu&eacute;e.</p>
<h3>Conclusion</h3>
<p>Au final, on s\'attachera moins aux performance qu\'au feeling tout &agrave; fait exceptionnel. Il est difficile de d&eacute;cortiquer toutes les sp&eacute;cificit&eacute;s de la voile, mais avec un foil joueur comme le Horue Viny, l&rsquo;ensemble fait merveille&hellip; C\'est du pur plaisir ! Il sera r&eacute;serv&eacute; aux passionn&eacute;s acceptant de s\'offrir du vrai Made In France, avec la satisfaction de ne pas financer 4 interm&eacute;diaires, les transporteurs, la douane et le reste, mais au lieu de cela le travail manuel de l\'un de nos artisans fran&ccedil;ais.</p>
<p>Bon, Teiva, maintenant que tu nous prouv&eacute; ce que tu &eacute;tais capable de faire sur une voile sans cam, on attend avec imaptience la V2 du proto de Swart RS en 7m !</p>
<p><img src="/storage/photos/1/2020-02/2675fa9bba4465a3ad014139745f744c.jpg" /></p>',
'test_equipment' => 'Flotteur Horue Eco / Foil Vini / mat Reptile Python 4m',
'test_duration' => 1,
'test_conditions' => '12-18knt',
'test_place' => 'Serre Ponçon',
'created_at' => '2017-09-06 12:08:24',
'updated_at' => '2020-04-06 19:33:22',
),
66 => 
array (
'id' => 69,
'device_id' => 113,
'user_id' => 1,
'title' => 'Innovant',
'body' => '<p>A l&rsquo;occasion de notre WE conviviale Windfoil &agrave; Serre-Pon&ccedil;on, nous avons eu la chance d&rsquo;avoir &agrave; nos c&ocirc;t&eacute; notre cher Arnaud Deschamps qui est venu &eacute;quip&eacute; de la nouvelle Loft Skyscape et de la RSX convertible. Ca a &eacute;t&eacute; l&rsquo;occasion de faire 4 ou 5 bords avec cette nouvelle voile d&eacute;velopp&eacute;e pour le foil</p>
<p><img src="/storage/photos/1/2020-02/530f5e573914c73e940ca9112a289e71.jpg" /></p>
<h3>Sur l&rsquo;eau</h3>
<p>Lors de notre test, le vent &eacute;tait assez soutenu pour la 7m, mais cela n&rsquo;a pas emp&ecirc;ch&eacute; d&rsquo;avoir une bonne id&eacute;e des possibilit&eacute;s de la voile.</p>
<p>La premi&egrave;re sensation lors de la prise en main est un m&eacute;lange de tendresse et de relative l&eacute;g&egrave;ret&eacute; (pour une voile &agrave; camber). Malgr&eacute; le mat SDM utilis&eacute;, le gr&eacute;ement reste assez souple et vivant : rien &agrave; voir avec les gr&eacute;ements typ&eacute;s slalom dont nous avons l&rsquo;habitude.</p>
<p>Au pumping, la voile se d&eacute;forme avec facilit&eacute; un peu &agrave; la mani&egrave;re d&rsquo;une voile sans cam (la t&ecirc;te de la voile travaille beaucoup), mais elle a du coffre : la puissance est bien l&agrave;, aid&eacute;e en fin de mouvement par une chute qui se retend pour tirer parti de tout le mouvement. On n&rsquo;a pas l&rsquo;effet reflex tr&egrave;s rapide et tr&egrave;s marqu&eacute; de la RS:Flight, mais quelque chose de plus doux, plus &eacute;tal&eacute;. Il faudra peut &ecirc;tre pomper un peu plus longtemps, mais l&rsquo;exercice sera assur&eacute;ment moins physique qu&rsquo;avec notre voile r&eacute;f&eacute;rence. Cette voile sera donc aussi beaucoup plus facile &agrave; appr&eacute;hender pour des pratiquants moins toniques.</p>
<p>Je n&rsquo;ai pas pu tester la voile dans le light, mais en ayant vu Arnaud (un petit 100kg) naviguer dans une grosse dizaine de noeuds en d&eacute;but d&rsquo;apr&egrave;s midi, j&rsquo;ai peu de doute sur le potentiel de la b&ecirc;te dans le light.</p>
<p>Une fois lanc&eacute;e, la Skyscape g&eacute;n&egrave;re une pouss&eacute; marqu&eacute;e mais avec une main arri&egrave;re tr&egrave;s mod&eacute;r&eacute;e. Si on compare &agrave; la V8, on a encore plus de puissance &agrave; taille &eacute;gale (la V8 faisant d&eacute;j&agrave; partie des voiles tr&egrave;s puissantes).</p>
<p>La bonne nouvelle, c&rsquo;est que cette pouss&eacute;e est assez facile &agrave; ma&icirc;triser car elle est assez basse dans la voile (probablement gr&acirc;ce &agrave; la brosse bordure). Malgr&eacute; le vent assez soutenu pour une 7m en foil, je ne me suis pas fait bouscul&eacute; et l&rsquo;ensemble restait agr&eacute;able. En passant &agrave; la RacingBlade 7,8 juste apr&egrave;s, je n&rsquo;ai pas senti une puissance beaucoup plus importante, mais la voile &eacute;tait beaucoup plus complexe &agrave; g&eacute;rer, avec des acc&eacute;l&eacute;rations beaucoup plus franches (voir trop !).</p>
<p>Au pr&egrave;s (l&rsquo;allure reine du Windfoil), la Skyscape offre une pouss&eacute;e vers l&rsquo;avant efficace, et un bon appui pour s&rsquo;appuyer sur le vent. On garde cependant suffisamment de main arri&egrave;re pour pouvoir se pendre et g&eacute;rer la contre g&icirc;te. Encore une fois, on sent une pouss&eacute;e assez basse dans la voile. Il sera tr&egrave;s int&eacute;ressant de la tester avec des palans de Wish pour voir sa r&eacute;action &agrave; la variation de volume au Wish, en particulier au pr&egrave;s.</p>
<h3>Conclusion (provisoire)</h3>
<p>Ce premier test nous a permis de d&eacute;couvrir une voile tr&egrave;s diff&eacute;rente de la Switchblade : bien plus efficace au pumping, plus l&eacute;g&egrave;re, plus dynamique, plus puissante, et avec une tr&egrave;s belle plage d\'utilisation. De m&ecirc;me, elle ne ressemble en rien &agrave; une voile de slalom comme la racing Blade : Beaucoup plus douce, moins nerveuse, et certainement moins rapide mais plus g&eacute;rable. Compte tenu du coffre de la voile, elle n&rsquo;est clairement pas faire pour naviguer surtoil&eacute;, et elle n&rsquo;aura pas l&rsquo;acc&eacute;l&eacute;ration d&rsquo;une switchblade ou d&rsquo;une racingblade dans le vent soutenu. Par contre, la voile semble parfaitement adapt&eacute;e aux conditions tr&egrave;s diff&eacute;rente du foil ou l\'on ne surtoile pas&hellip;en version freerace (ni physique et nerveuse comme une voile de course, ni molle et sans allonge comme une voile de freeride sans cam).</p>
<p>Comme le premier contact a &eacute;t&eacute; (tr&egrave;s) enthousiasmant, il nous reste</p>
<ul>
<li>&agrave; explorer plus en d&eacute;tail son comportement dans le light voir le super light,</li>
<li>analyser l&rsquo;int&eacute;r&ecirc;t d&rsquo;y adjoindre un palan de Wish &hellip; voir de guindant comme nous avons l&rsquo;intention de le faire sur la Swart RS (en effet, ces voiles avec un creux important et bas r&eacute;agissent en g&eacute;n&eacute;ral beaucoup &agrave; une petite modification de la tension de guindant).</li>
<li>La tester en 5,8 .. une surface qui pourrait &ecirc;tre magique pour tracer dans du 20 knt avec l&eacute;g&egrave;ret&eacute; mais efficacit&eacute; m&ecirc;me dans les vents irr&eacute;guliers.</li>
<li>A faire une confrontation le m&ecirc;me jour entre la Swart RS et la Skyscape ... pour avoir test&eacute; les 2 &agrave; 6 mois d\'intervalle, il y a des similitudes. J\'ai le souvenir d\'une swart encore plus l&eacute;g&egrave;re mais moins douce et avec une plage d\'utilisation plus courte ... il va &ecirc;tre tr&egrave;s int&eacute;ressant de les avoir en main le m&ecirc;me jour.</li>
</ul>',
'test_equipment' => 'Flotteur : RSX convertible / Foil : RSX /Mat : Loft TeamEdition SDM',
'test_duration' => 2,
'test_conditions' => 'Vent : 15knt environ',
'test_place' => 'Lac de Serre Ponçon',
'created_at' => '2017-09-21 12:14:06',
'updated_at' => '2020-04-06 19:33:22',
),
67 => 
array (
'id' => 70,
'device_id' => 115,
'user_id' => 1,
'title' => 'Efficace et légère',
'body' => '<h3>Contexte</h3>
<p>Dans notre petit monde du Windsurf s&eacute;vit un conservatisme assez &eacute;tonnant. Cela fait perdurer des situations assez grotesques qui sautent aux yeux de temps en temps.&nbsp;Le cas du march&eacute; du mat&eacute;riel de vent fort est symptomatique de cet &eacute;tat de fait.</p>
<p>Lorsque l&rsquo;on observe les riders qui sortent dans un vent assez soutenu (disons plus de 25 knt), et quelque soit le spot choisi, on constate que 70% tirent des bords en envoyant 2 sauts &agrave; 40cm toutes les demi-heures, et surfent ou plut&ocirc;t acc&eacute;l&egrave;rent &agrave; la descente de vague sans vraiment infl&eacute;chir leur route. Pour faire simple, ils prennent leur pied &agrave; glisser, et c&rsquo;est bien l&agrave; toute l&rsquo;essence du funboard (notez le mot fun).</p>
<p>Parmi les 30% restant, la moiti&eacute; sont vraiment des waverideurs accomplis, et les autres tentent de les imiter avec plus ou moins de bonheur.</p>
<p>Si on observe l&rsquo;offre de mat&eacute;riel d&eacute;di&eacute; &agrave; ces conditions, on pourrait l&eacute;gitimement esp&eacute;rer y trouver 70% de mod&egrave;les d&eacute;di&eacute;s au bump and jump, et quelques rares mod&egrave;les pointus d&eacute;volus &agrave; la pratique de la vague radicale.</p>
<p>Au lieu de cela, on nous propose une board pour attaquer la vague de 2m48 side, une pour la vague de 10 de p&eacute;riode, une 3e pour la vague de dalle tr&egrave;s l&eacute;g&egrave;rement side off etc. C&ocirc;t&eacute; voile, on a au moins 2 ou 3 mod&egrave;les d&eacute;di&eacute;s &agrave; la vague dans chaque marque, &agrave; choisir en fonction du style du rider et de l&rsquo;&acirc;ge du capitaine.</p>
<p>Par contre, pour les 70% de pratiquants qui veulent juste s&rsquo;amuser, on a tout au plus une freewave qui peut faire l&rsquo;affaire avec un d&eacute;part au planning un peu poussif, et une voile con&ccedil;ue pour les d&eacute;butants, qui a le bon gout d&rsquo;exister en petite taille. Fort de ce constat, beaucoup de passionn&eacute;s tirent des bords avec du mat&eacute;riel de vague qui ne correspond absolument pas &agrave; leur besoin &hellip; et beaucoup sont nostalgiques des Tiga Bump &amp; Jump est autres AHD Wave-Slalom qui correspondaient tant &agrave; leur programme.</p>
<p>C&ocirc;t&eacute; voile, tr&egrave;s difficile de trouver une voile moderne et r&eacute;ellement travaill&eacute;e en dessous de 5m qui ne soit pas une voile de vague avec un wish ultra court, et un caract&egrave;re tr&egrave;s on/off.</p>
<h3>Vega</h3>
<p>Depuis l&rsquo;an pass&eacute;, nous avions not&eacute; 2 voiles qui sortaient un du lot : la Ga Sails Cross, et la Loft Oxygen. Sans &ecirc;tre parfaites, elles avaient le m&eacute;rite d&rsquo;&ecirc;tre plus progressives et moins guidonnantes que la plupart des voiles de vague. Ces voiles efficaces et tr&egrave;s bien construites avait un gros inconv&eacute;nient : leur tarif assez elev&eacute; pour le public du pratiquant loisir.</p>
<p>Cette fois, nous avons mis la main sur une petite perle sign&eacute;e Xo Sails : la VEGA.</p>
<p><img src="/storage/photos/1/2020-02/08cec212eb18d39cbe0fff52ff7ec3e0.jpg" /></p>
<p>M&ecirc;me si il est souvent tr&egrave;s discret, Patrice nous a pondu une petite merveille : une voile sans cam qui a du creux tr&egrave;s bas, de la puissance, un contr&ocirc;le tout a fait bluffant, et une construction &agrave; faire p&acirc;lir certaines marques plus connues.</p>
<p>Avec cette VEGA, tirer des bords dans le vent fort et un plan d&rsquo;eau hach&eacute; devient juste un plaisir. Grace &agrave; son creux bas et ma&icirc;tris&eacute;, la VEGA permet de parfaitement contr&ocirc;ler le flotteur. On navigue tr&egrave;s serein sans &ecirc;tre bloqu&eacute; comme avec une voile &agrave; camber. On a une progressivit&eacute; magique dans les mains &hellip; rien &agrave; voir avec une voile de vague ou une voile rotative basique. Beaucoup moins &eacute;lastique que ces derni&egrave;re, on a aussi une sensation plus directe.</p>
<p>Pour remonter au vent, on a tout ce qu&rsquo;il faut sous la main arri&egrave;re pour s&rsquo;appuyer sur la voile.</p>
<p>.. et ne croyez pas que la VEGA a du creux parce que l&rsquo;on rel&acirc;che au wish. Comme une voile &agrave; camber, le volume de la voile est obtenu en 3D par des pinces habilement positionn&eacute;es. Cela garanti un ceux qui ne bouge pas, et une voile qui ne devient pas un sac &agrave; chaque ris&eacute;e.</p>
<p><img src="/storage/photos/1/2020-02/e08933f8ce0745767879baa4ca48fb4c.jpg" /></p>
<p><img src="/storage/photos/1/2020-02/6e77c292dace5908b7420afc33cc66e9.jpg" /></p>
<p>Cerise sur le g&acirc;teau, la VEGA est l&rsquo;une des voiles les moins cher du march&eacute;, si on exclue les voiles loisir d&eacute;butant .. et comme elle n\'est pas mill&eacute;sim&eacute;e, votre petit investissement ne sera pas d&eacute;grad&eacute; dans 4 mois ;)</p>
<p>Tr&egrave;s honn&ecirc;tement, nous avons &eacute;t&eacute; bluff&eacute;. Vous pouvez y aller les yeux ferm&eacute; : vous ne serez pas d&eacute;&ccedil;us &hellip; bien au contraire !</p>
<p>&nbsp;</p>',
'test_equipment' => 'RF81 / Voile Starboard Slalom',
'test_duration' => 10,
'test_conditions' => '15-28 knt',
'test_place' => 'Santa Manza',
'created_at' => '2018-06-06 12:44:22',
'updated_at' => '2020-04-06 19:33:22',
),
68 => 
array (
'id' => 71,
'device_id' => 116,
'user_id' => 1,
'title' => 'Machine de course .. pas si lourde',
'body' => '<p>L\'hyperglide a bien l\'ADN d\'une voile de course : elle est volumineuse et puissante. Le creux est tr&egrave;s marqu&eacute;, et donne une voile tr&egrave;s rigide. Au pumping, il faut un geste puissant pour arriver &agrave; utiliser l\'effet reflex du haut de la voile ... bien plus qu\'avec le NeilPryde RS:Flight par exemple.</p>
<p>Le passage des cambers est aussi assez difficile, en particulier lorsque la voile est neuve. Apr&egrave;s rodage, c\'est mieux mais cela reste au moins aussi compliqu&eacute; qu\'avec une voile de course.</p>
<p>Sur l\'eau, l\'hyerpglide est &agrave; la fois puissante et redoutablement efficace, en particulier au pr&egrave;s. Par rapport &agrave; la RS:Flight, l\'Hyperglide offre une meilleur tenue dans le vent, et une plus grand finesse au pr&egrave;s. Par contre, les mini sont l&eacute;g&egrave;rement en retrait.</p>
<p>Au final, l\'hyperglide est une voile de course foil d&eacute;di&eacute;e ultra performante mais aussi tr&egrave;s physique ... malgr&eacute; un poids l&eacute;g&egrave;rement inf&eacute;rieur &agrave; une voile de course, on est bien loin de l\'accessibilit&eacute; offerte par des voiles comme les V8 ou Skyscape</p>',
'test_equipment' => 'Starboard Foil 144 - Foil Starboard Race',
'test_duration' => 10,
'test_conditions' => '10-18 knt',
'test_place' => 'Serre Ponçon',
'created_at' => '2018-06-15 12:51:39',
'updated_at' => '2020-04-06 12:51:39',
),
69 => 
array (
'id' => 72,
'device_id' => 117,
'user_id' => 1,
'title' => 'Pullman',
'body' => '<p>Les premiers tests de la Phantom IRIS ont &eacute;t&eacute; fait &agrave; la fois en navigation libre &agrave; St Laurent du Var, La Ciotat , et en r&eacute;gate &agrave; Toulon.</p>
<p>D&egrave;s la prise en main, la l&eacute;g&egrave;ret&eacute; du gr&eacute;ement saute aux yeux (ou plut&ocirc;t aux bras pour &ecirc;tre pr&eacute;cis) ! Malgr&eacute; tout, la pr&eacute;sence de cambers bloque le profil, et tant mieux. Par contre, cette 7m semble assur&eacute;ment plus l&eacute;g&egrave;re que d&rsquo;autres voiles qui auraient 0.5 voir 1m2 de moins. A ce titre, elle peut faire penser &agrave; ce nous avons ressenti avec la LoftSkyscape, mais ici avec une latte et plus et un contr&ocirc;le du profil meilleur dans les rafales.</p>
<p><img src="/storage/photos/1/2020-02/9f41a9c3848d64d3fa085d93d0439d4f.jpg" /></p>
<p>En terme de feeling, on a une voile plut&ocirc;t puissante pour sa surface, avec un peu de main arri&egrave;re. Le creux est prononc&eacute; sur toute la surface (la voile est moins plate en t&ecirc;te qu&rsquo;&agrave; l&rsquo;habitude). D&rsquo;un autre c&ocirc;t&eacute;, l&rsquo;IRIS est tr&egrave;s douce vie moelleuse. Ceux qui ont connus les Loft d&rsquo;avant 2013, donc la partie haute &eacute;tait en pentex, comprendront de quoi je parle &hellip; sachant que c&rsquo;est encore plus marqu&eacute; ici. Bref .. cette IRIS est un peu la Mercedes des voiles free-race :)</p>
<p>La contre partie de ceci est une voile peu nerveuse : il ne faudra pas s&rsquo;attendre &agrave; des r&eacute;actions tr&egrave;s vives, mais c&rsquo;est au b&eacute;n&eacute;fice d&rsquo;un confort de premier plan et d\'une traction tr&egrave;s r&eacute;guli&egrave;re. Une voile &lsquo;classique&rsquo; aussi douce aurait peut de chance d&rsquo;&ecirc;tre efficace au pumping. Ici, la combinaison puissance &amp; l&eacute;g&egrave;ret&eacute; permet d&rsquo;avoir une efficacit&eacute; plut&ocirc;t tr&egrave;s bonne dans ce domaine (&agrave; condition d&rsquo;avoir un mat &agrave; la hauteur). A niveau technique et poids &eacute;quivalent, on avait le m&ecirc;me d&eacute;part planning entre une IRIS 7m et une Switchblade 7.8 lors de nos tests &agrave; St Laurent.</p>
<p>Dans le man&oelig;uvres, la l&eacute;g&egrave;ret&eacute; de la IRIS est bluffante. En plus, la rotation des cambers se fait avec peu d\'effort malgr&eacute; le creux prononc&eacute; ... du vrai velours !</p>
<p><img src="/storage/photos/1/2020-02/e63e2eba81555d902e59cef7807f67d3.jpg" /></p>
<p>La r&eacute;gate Windfoil &agrave; Toulon a &eacute;t&eacute; &eacute;galement un tr&egrave;s bon test : mon peu d&rsquo;entrainement hivernal ne m&rsquo;aurait pas permis de passer toute l&rsquo;apr&egrave;s midi sur l&rsquo;eau en r&eacute;gate avec une free-race classique. Avec l&rsquo;IRIS, j&rsquo;ai pu boucler toutes les manches de fa&ccedil;on honorable (5e place sur 25) sans renoncer et sans finir &agrave; l\'agonie, mais sans pour autant pouvoir suivre les 4 coureurs entrain&eacute;s et techniques qui &eacute;taient devant moi avec des voiles free-race voir race classiques (Franck, Mathieu Bonnot, Nicolas Huguet et Nicolas Goyard).</p>
<p>Au final, cette IRIS F &agrave; 2 cam bluffe par sa l&eacute;g&egrave;ret&eacute;, sa douceur et son confort, tout en fournissant une puissance g&eacute;n&eacute;reuse et des performances qui font partie des meilleures de la cat&eacute;gorie freeride. Cerise sur le g&acirc;teau, la long&eacute;vit&eacute; du mat&eacute;riau ne pourra qu\'&ecirc;tre plus importante que le monofilm ! Pour ceux qui veulent se faire leur propre id&eacute;e, sachez que nous en avons une en test, et que nous l\'emm&egrave;nerons sur les diff&eacute;rents &eacute;v&egrave;nements windfoil de l\'&eacute;t&eacute;.</p>
<p><img src="/storage/photos/1/2020-02/4852b4f4d0bfeb57e514a521e462894b.jpg" /></p>',
'test_equipment' => 'Elix F1X M / Loike LK1',
'test_duration' => 5,
'test_conditions' => '8-15 knt',
'test_place' => 'St Laurent du var',
'created_at' => '2018-06-21 13:03:54',
'updated_at' => '2020-04-06 19:33:22',
),
70 => 
array (
'id' => 73,
'device_id' => 118,
'user_id' => 1,
'title' => 'Freeride Plug & Play',
'body' => '<p>En statique, rien de bien particulier, en dehors d\'une voile l&eacute;g&egrave;re, et assez creuse. La chute est assez tendue sans exc&egrave;s.</p>
<p><img src="/storage/photos/1/2020-02/f2e17e36d3f1b5b762e6c5abacec3f65.jpg" /></p>
<p>Une fois en main, la sensation de l&eacute;g&egrave;ret&eacute; est &eacute;vidente pour une 6.7 m2. D&eacute;j&agrave; en statique, la voile a un gros fond de puissance. Au pumping, elle est &eacute;galement tr&egrave;s efficace avec effectivement un tr&egrave;s bon accord mat / voile. La voile a plut&ocirc;t de la pression sous la main arri&egrave;re, et c\'est tr&egrave;s utile pour s\'appuyer dessus lorsqu\'il faut d&eacute;coller dans le vent l&eacute;ger.</p>
<p>Lors de notre test, nous avons la Flight sur une Sb 122 / GT Alu et la Hyperglide 8m sur la Sb 144 / Race. La HG &eacute;tait clairement trop &eacute;tarqu&eacute;e pour les conditions, mais nous d&eacute;collions pratiquement en m&ecirc;me temps. Cela montre &agrave; l\'&eacute;vidence l\'int&eacute;r&ecirc;t du concept.</p>
<p>En l\'air, la FLIGHT est une plume dans les mains. Elle est assez tendre, et garde de la main arri&egrave;re, mais elle est tr&egrave;s facile &agrave; neutraliser dans les rafales.</p>
<h3>Bilan</h3>
<p>Au final, le gr&eacute;ement flight est typiquement un produit optimis&eacute; pour le foil freeride, et parfaitement dans la lign&eacute;e des GT alu et Foil 122. On recherche de la facilit&eacute; (utilisation, r&eacute;glage) et des excellentes performances au regard de l\'investissement physique requis ! Un vrai moment de plaisir ... m&ecirc;me si les conditions de vent ne nous ont pas permis d\'en profiter autant qu\'on aurai voulu.</p>',
'test_equipment' => 'Sb 122 + GT Alu et Supercruiser',
'test_duration' => 6,
'test_conditions' => '8-15 knt',
'test_place' => 'La Ciotat / Serre Ponçon',
'created_at' => '2018-07-27 13:14:58',
'updated_at' => '2020-04-06 19:33:22',
),
71 => 
array (
'id' => 74,
'device_id' => 119,
'user_id' => 1,
'title' => 'Etonnant',
'body' => '<h3>Montage</h3>
<p>Nous avons gr&eacute;&eacute; la Ezzy Hydra 5.5 sur le mat RDM 100% ezzy fourni par la marque. Le montage s\'effectue sans aucun soucis ni commentaire particulier. Seul le r&eacute;glage nous a laiss&eacute; perplexe car nous avions du mal &agrave; imaginer quelles tensions mettre au guindant et &agrave; l\'&eacute;coute. Les indications propos&eacute;es pr&eacute;sentant une fourchette tr&egrave;s larges, nous avons test&eacute; plusieurs combinaisons, mais au final, c\'est en mettant une tension assez faible &agrave; l\'&eacute;coute que le voile a &eacute;t&eacute; la plus int&eacute;ressante. Il ne faut pas s\'arr&ecirc;ter aux gros plis du Mast-pannel eu repos car la voile se tend parfaitement en navigation.</p>
<p><img src="/storage/photos/1/2020-02/3feab8a8280e68e488e98ad7e3c2478b.jpg" /></p>
<p>Un point important &agrave; noter : si vous voulez passer inaper&ccedil;u avec l\'Hydra, c\'est rat&eacute;. En gr&eacute;ant cette voile, c\'est un rassemblement assur&eacute; sur le spot et une pluie de de questions. Les commentaires vont bon train &agrave; chaque fois, et globalement le look fait plut&ocirc;t l\'unanimit&eacute; contre cette voile atypique.</p>
<h3>Sur l\'eau</h3>
<p>Le premier contact nous donne l\'impression d\'une voile l&eacute;g&egrave;re et compacte. Pourtant, test&eacute;es dans des conditions de vent assez soutenue, le d&eacute;part planning a &eacute;t&eacute; imm&eacute;diat sans avoir eu l\'impression d\'une pouss&eacute;e importante dans la voile.</p>
<p>Notre premier test dans un vent ultra irr&eacute;gulier , avec des rafales tr&egrave;s fortes, a prouv&eacute; que la voile avait une excellent tenue dans les maxis. Malgr&eacute; un creux tr&egrave;s peu tenu (voile non latt&eacute;e sur le Mast-panel), il ne recule pratiquement pas ... ou tout au moins ce n\'est pas sensible. Le faible volume de la voile dans les haut permet de ne pas se faire embarquer, et le creux g&eacute;n&eacute;reux que nous avions laiss&eacute; devant permet de passer assez facilement dans les molles. Dans tous les cas, on ne ressent pas la puissance car elle se contr&ocirc;le tr&egrave;s facilement. Dans les plus grosses rafales, il suffit de choquer un peu pour ne pas se faire embarquer, tout en gardant une voile qui ne guidonne pas.</p>
<p><img src="/storage/photos/1/2020-02/99b3b7789a45aa3eb50b71233d1ca331.jpg" /></p>
<p>Dans un vent r&eacute;gulier, l\'apport du shape original de l\'hydra se fait moins sentir, mais la voile reste agr&eacute;able. Dans ces conditions, et en comparaison avec des voiles de surface &eacute;quivalente, on ressent moins d\'acc&eacute;l&eacute;ration et d\'appui au pr&egrave;s. La voile manque aussi de nervosit&eacute; ... on joue la douceur avant tout. Au jibe, la maniabilit&eacute; est un pur bonheur !</p>
<p><img src="/storage/photos/1/2020-02/3fca77af250101371d9ffae1726f7991.jpg" /></p>
<p>Dans des conditions plus l&eacute;g&egrave;res, le d&eacute;part planning est moins &eacute;vident car l\'Hydra est assez peu efficace au pumping. A ce niveau, la tenue du profil et le manque de nervosit&eacute; se font nettement sentir. On en trouve pas, logiquement, l\'appui &eacute;lastique sur le haut de la voile pour permet de propulser le flotteur. Il faudra compter sur le fond de puissance statique uniquement. La surface de l\'hydra devra &ecirc;tre choisie en tenant compte de cette particularit&eacute; car elle ne doit pas &ecirc;tre utilis&eacute;e sous-toil&eacute;. Pour faire ce constat, nous l\'avons compar&eacute; avec la F-Type Duotone et la XoSail Vega qui sont plus efficaces en moyenne sur l\'ensemble de la plage d\'utilisation. Si on reste dans les voiles un peu sp&eacute;cifiques, on doit aussi la comparer aux Horue Swart qui sont tr&egrave;s dynamiques au pumping et &eacute;galement assez douces et l&eacute;g&egrave;res dans le vent. Si on compare par contre &agrave; des voiles de freeride plus basiques comme la Gaastra Pilot ou une voile de vague, il est &eacute;vident que la Hydra fait (beaucoup) mieux .... tout est une question de relativit&eacute; =;)</p>
<h3>Bilan</h3>
<p>L\'hydra n&rsquo;est pas une r&eacute;volution (si ce n\'est en terme de look), mais la voile est agr&eacute;able en navigation en mode freeride, en particulier dans les conditions fortes. Plus le vent est fort et irr&eacute;gulier, plus elle se justifie &agrave; condition de garder du creux dans la voile avec une tension peu marqu&eacute;e &agrave; l\'&eacute;coute. Dans tous les cas, elle est maniable et l&eacute;g&egrave;re. Dans des conditions moyennes ou l&eacute;g&egrave;res, l\'Hydra est un peu moins efficace que les meilleures, et manque franchement de jus au pumping .. il faudra donc veiller &agrave; ne pas sous-toiler afin de jouer avec le fond de puissance statique.</p>
<p>&nbsp;</p>',
'test_equipment' => 'Flotteurs : Horue Airtime, JP 120, Custom Tiaki Freeride / Foils : Starboard GTS, Taaroa Noe, Loke LK1',
'test_duration' => 2,
'test_conditions' => 'Mistral très irrégulier 10 - 30 knt, puis Sud-Ouest régulier autour de 15-20 knt',
'test_place' => 'La Ciotat',
'created_at' => '2018-09-04 13:20:38',
'updated_at' => '2020-04-06 19:33:22',
),
72 => 
array (
'id' => 75,
'device_id' => 120,
'user_id' => 1,
'title' => 'Pile dans la cible',
'body' => '<h3>Test IRIS X 5.8</h3>
<h4>1er test &nbsp;:&nbsp;&nbsp;Almanarre S/O&nbsp;dans un vent oscillant entre 10 et 13 knt</h4>
<p><img src="/storage/photos/1/2020-02/IMG_8781.jpg" alt="Phantom IRIS X proto 2" /></p>
<p>Mod&egrave;le en 5,8 Test&eacute; sur mat North SDM Platinium 430 avec 4 de rallonge (sur la rallonge MXT, j\'ai laiss&eacute; 3cm envion entre le palan et les poulies)</p>
<p><img src="/storage/photos/1/2020-02/IMG_9069.jpg" alt="Phantom IRIS X proto 1" /></p>
<p>J\'avais gr&eacute;&eacute; avec une tension mod&eacute;r&eacute;e au guindant. La chute reste tendue. D&egrave;s le montage, la voile semble beaucoup plus rigide que la version pr&eacute;c&eacute;dente.&nbsp;</p>
<p>A la prise en main, la voile appara&icirc;t tr&egrave;s nerveuse est relativement rigide : cela tranche avec la version pr&eacute;c&eacute;dente qui avait moins de creux, et qui semblait assez molle. Au pumping, cela se confirme car la voile est devenu tr&egrave;s nerveuse, avec un creux bien bloqu&eacute;.<br />Lors du premier test dans des conditions de vent faible (moins de 13 n&oelig;uds), il &eacute;tait surprenant de voir la puissance dynamique d&eacute;velopp&eacute;e par cette voile. M&ecirc;me si c\'&eacute;tait juste, elle m&rsquo;a permis de naviguer en m&ecirc;me temps que d&rsquo;autres foileurs qui &eacute;taient arm&eacute;s de 7m2 et 9m2 !</p>
<h4>2eme test : La ciotat dans un vent tr&egrave;s irr&eacute;gulier allant de 8 &agrave; 30 knt (!)</h4>
<p><img src="/storage/photos/1/2020-02/IMG_9075.jpg" alt="Phantom IRIS X proto 1" /></p>
<p>Premiers bords avec la chute ferm&eacute;e (r&eacute;glage &agrave; 4 de rallonge, 3cm entre palan et poulies), puis ensuite avec une chute l&eacute;g&egrave;rement ouverte (r&eacute;glage &agrave; 4 de rallonge, 1cm entre palan et poulies ... ce qui demande pas mal de poigne &agrave; l\'&eacute;tarquage)</p>
<p><img src="/storage/photos/1/2020-02/IMG_9071.jpg" alt="Phantom IRIS X proto 1" /></p>
<p>Lors de ce deuxi&egrave;me test, les conditions &eacute;taient plus coh&eacute;rentes avec la surface de cette voile (quoi que les claques &agrave; 30knt n\'&eacute;taient pas l\'id&eacute;al, .. mais bon). <br />L&agrave; encore, je retrouve la forte nervosit&eacute; de la voile, qui permet d&rsquo;avoir un pumping tr&egrave;s efficace. Il faut juste s&rsquo;habituer &agrave; moins tirer sur la main arri&egrave;re car le wish est assez court et l\'appui peu marqu&eacute;: &nbsp;il faut plus utiliser l&rsquo;effet r&eacute;flex du mat. Par contre, une fois que l&rsquo;on n&rsquo;a attrap&eacute; le coup, c&rsquo;est tr&egrave;s efficace ! A ce niveau , on retrouve un peu le feeling que l\'on peut avoir sur une V8 ou une Xo Fly avec un haut de voile ultra tonique (&agrave; condition d\'avoir le mat ad&eacute;quat) ... C\'est ainsi tr&egrave;s diff&eacute;rent du feeling que l\'on aura sur une Loft ou une Duotone.</p>
<p>Dans les rafales, la voile est surprenante car elle tire assez peu sur la main arri&egrave;re en comparaison avec d&rsquo;autres. On n\'a pas la douceur de la F&ndash;type, ni m&ecirc;me d\'une V8, mais au final on arrive &agrave; la tenir plus loin dans le vent car le creux ne bouge pas d&rsquo;un pouce. Sur ce point, elle s\'oppose totalement &agrave; la SkyScape que l\'on avait bien du mal &agrave; utiliser sur-toil&eacute;e. Et tout cela bien s&ucirc;r, en &eacute;tant tr&egrave;s loin du poids et de l\'encombrement ressenti avec une voile de slalom.</p>
<p>Si l&rsquo;on voulait vraiment &ecirc;tre pointilleux, je dirais qu&rsquo;elle m&eacute;riterait un petit peu plus de tendresse et de l&eacute;g&egrave;ret&eacute;, peut-&ecirc;tre en retirant un camber, en diminuant l&eacute;g&egrave;rement le creux de la voile, ou en travaillant sur les mat&eacute;riaux. Cela aurait aussi certainement une influance sur le passage des cam qui est plut&ocirc;t "viril". On n\'ets pas au niveau de la Skyscape ou de l\'Hyperglide, mais c\'est quand m&ecirc;me bien moins simple que sur une V8, une IRIS F ou une T Ype (du velour).</p>
<p>En tout cas, c&ocirc;t&eacute; feeling g&eacute;n&eacute;ral, on a vraiment une voile compacte, assez l&eacute;g&egrave;re dans les bras gr&acirc;ce &agrave; cette nervosit&eacute;, et pas encombrante du tout gr&acirc;ce &agrave; la main arri&egrave;re l&eacute;g&egrave;re. Il va &ecirc;tre int&eacute;ressant de voir si certte&nbsp;Par contre, j&rsquo;imagine que cette rigidit&eacute; sera parfaite sur les tailles 6.6. et 7.4 (test &agrave; venir).</p>
<p><img src="/storage/photos/1/2020-02/IMG_9072.jpg" alt="Phantom IRIS X proto 1" /></p>
<p>Lors de notre deuxi&egrave;me phase du test, avec des rafales &agrave; presque 30knt (et un passage au bord pour r&eacute;-&eacute;tarquer), il a &eacute;t&eacute; impressionnant de voir combien la voile reste stable dans ces conditions mouvement&eacute;s. On retrouve certains avantage des haut de voile &eacute;troits, comme on avait entre-apper&ccedil;u sur la Hydra. &Eacute;videmment, ce ne sont pas les conditions id&eacute;ales pour naviguer en foil et 5.8, mais cela d&eacute;montre la plage d\'utilisation exceptionnelle de la IRIS X ... d\'autant plus qu\'elle r&eacute;agit assez bien au r&eacute;glage &agrave; l\'&eacute;coute (palan de wish fortement recommand&eacute;).<br />Dans les plus fortes rafales, la puissance est l&agrave; et on se fait secouer, mais jamais la voile ne tire sur la main arri&egrave;re, ce qui permet en ouvrant un peu de laisser passer le plus gros de la rafale, et de reborder juste derri&egrave;re sans &ecirc;tre d&eacute;sar&ccedil;onn&eacute;. Les conditions Mistral &agrave; La Ciotat sont assez brutales, et ce n\'est pas de tout repos, mais je suis s&ucirc;r qu\'une voiel qui se comprte aussi bien l&agrave; sera un vrai plaisir dans des conditions plus cool !<br />Dans les molles, il faut s&rsquo;habituer &agrave; une voile qui a peu de main arri&egrave;re. Au d&eacute;but, on a tendance &agrave; sur-border, il faut donc s&rsquo;habituer &agrave; rel&acirc;cher la main arri&egrave;re pour passer sur la glisse. ... et &ccedil;a fonctionne parfaitement si on pense &agrave; se redresser (ne pas rester pendu dans la voile).</p>
<p>Au pr&egrave;s, La voile est plut&ocirc;t efficace, mais de la m&ecirc;me fa&ccedil;on, il ne faut pas trop mettre de pression dans la main arri&egrave;re et laisser la voile glisser sur le vent.</p>
<h3>Test de la IRIS X en 7,4</h3>
<p>Nous avons r&eacute;cup&eacute;r&eacute; une 7,4 de quasi s&eacute;rie, et enfin trouv&eacute; une petite heure avec 8-12 knt pour tester ce nouveau joujou.&nbsp;</p>
<p>Gr&eacute;&eacute; sur un 460 North Platinium SDM avec 32cm de rallonge (annonc&eacute; &agrave; 30, mais creux trop prononc&eacute; et chute trop ferm&eacute;e), on retrouve un profil analogue &agrave; sa petite soeur en 5,8. Le r&eacute;gage ne pose aucun probl&egrave;me, et en &eacute;tarquant &agrave; fond sur la rallonge &agrave; 32, on a juste la chute qui se d&eacute;tend un poil ... sans pour autant faire ouvrir la voile.</p>
<p>Sur l\'eau, on retrouve logiquement une voile avec plus de coffre que la 5.8, mais on reste exactement dans la m&ecirc;me philosophie. La voile n\'est pas tr&egrave;s puissante en statique (wish court), mais d&egrave;s que l\'on pompe, elle procure un appui largement suffisant pour faire poper la planche et le foil. Sur cette surface, la rigidi&eacute; d\'ensemble est bien dos&eacute;e et utile. On est plus rigide qu\'une V8 (donc beaucoup plus qu\'une Switchblade) mais moins qu\'une voile comme l\'hyperglide, RS Flight ou autre voile racing. On retrouve imm&eacute;diatement, comme sur la 5.8, peu de main arri&egrave;re. Cela impose donc de pomper en utilisant l\'effet reflex du mat ... C\'est ce qui va limiter l\'accessibilit&eacute; aux d&eacute;butants dans le tr&egrave;s l&eacute;ger, mais c\'est ce qui fait l\'int&eacute;r&ecirc;t de la voile en navigation.</p>
<p>Dans les mains, la voile semble tr&egrave;s compacte et peu encombrante. On &agrave; l\'impression d\'avoir une surface de moins. En comparaison par rapport &agrave; l\'hyperglide 8m (qui n\'a pourtant qu\'un 1/2m2 de plus), on n\'est vraiment pas dans le m&ecirc;me bateau. Pourtant, la puissance d&eacute;velopp&eacute;e en dynamique est loin d\'etre ridicule, et vu le gain en maniabilit&eacute;, je ne suis pas s&ucirc;r que la diff&eacute;rence pour s\'arracher de l\'eau soit &eacute;norme.&nbsp;</p>
<p>En vol, le fait d\'avoir tr&egrave;s peu de main arri&egrave;re a quelque chose d\'assez magique. Il est d\'ailleurs suprenant de constatre l\'efficacit&eacute; au pr&egrave;s, alors que l\'on avait justement tendance &agrave; s\'appuyer sur la main arri&egrave;re &agrave; cette allure. Ici, au contraire, il faut s\'appliquer &agrave; ne pas sur-border, et &agrave; laisser glisser la voile sur le vent. C\'est une navigation diff&eacute;rente, pas bourrin, &agrave; laquelle on prend gout tr&egrave;s vite !</p>
<p>Aux allures abattues, la voile pousse moins que les mod&egrave;les \'classiques\'. Il faut plus jouer sur l\'angle de descente pour ne pas la d&eacute;venter.</p>
<p>C&ocirc;t&eacute; rotation des cam, comme souvent avec les voiles de foil assez creuses (HyperGlide, Skyscape, RS Flight etc.), il ne faut pas s\'attendre &agrave; un miracle : il faut donner un bon coup de rein au jibe pour faire tourner la voile dans le light. Heuresuement, on ne faot pas un jibe tous les 10m !</p>
<p>En terme de public, je dirai que cette IRIS X s\'adresse &agrave; des pratiquants de niveau interm&eacute;diaire &agrave; expert en foil, et qui ont une optique que je qualifierai de "free-race". Je la d&eacute;conseille &agrave; des d&eacute;butants ou des purs freerideurs, car elle est trop raide pour cette utilisation. Je la d&eacute;conseille aussi &agrave; tous ceux qui naviguent tout en puissance car le peu de main arri&egrave;re va les g&ecirc;ner. Je la d&eacute;conseille enfin &agrave; ceux qui ne savent pas pomper "dynamique" car il faut savoir jouer avec l\'effet reflex du mat pour compenser la main arri&egrave;re l&eacute;g&egrave;re au pumping. Pour tous les autres, ce n\'est que du bonheur :)</p>
<h3>Bilan</h3>
<p>Apr&egrave;s un test approfondi de cette IRIS X, je suis r&eacute;ellement s&eacute;duit par l\'efficacit&eacute; g&eacute;n&eacute;rale du gr&eacute;ement : enfin une voile qui s\'int&eacute;resse au rendement et qui, comme la Xo Fly, sort du standard de la voile qui s\'utilise surtoil&eacute;e et ultra-&eacute;tarqu&eacute;e. Le concept de t&ecirc;te de voile &eacute;troite permet r&eacute;ellement un contr&ocirc;le sup&eacute;rieur dans les rafales. Entre la plage d\'utilisation exceptionnelle, la sensation de compacit&eacute;, la nervosit&eacute; et le plaisir g&eacute;n&eacute;ral ressenti, on est probablement dans ce qui se fait de mieux &agrave; l\'heure actuel sur ce cr&eacute;nau. Juste interm&eacute;diaire entre une voile douce comme la F-Type, et une voile raide, technique et encombrante comme peuvent l\'&ecirc;tre les vraies voiles de course, la IRIS X est un super compromis en foil pour ceux qui acceptent de naviguer avec un peu de finesse, de \'dynamique\' et de souquer pour faire passer les cam.&nbsp;</p>
<p>Mention sp&eacute;ciale pour la 5.8 qui est un vrai bijou !</p>',
'test_equipment' => 'mat North SDM Platinium 430 / Airtime 125 / Taaroa Noe UHM',
'test_duration' => 3,
'test_conditions' => '8-30 knt',
'test_place' => 'La Ciotat, Almanarre',
'created_at' => '2019-04-02 16:13:15',
'updated_at' => '2020-04-07 12:04:01',
),
73 => 
array (
'id' => 76,
'device_id' => 121,
'user_id' => 1,
'title' => 'Un efficacité redoutable',
'body' => '<p>Apr&egrave;s une saison d\'utilisation de cette voile en 9m2, voici ses principales caract&eacute;ristiques :</p>
<ul>
<li>encombrante et technique au pumping</li>
<li>pointue en r&eacute;glage</li>
<li>exigeante en mat</li>
<li>redoutable d\'efficacit&eacute; dans le tr&egrave;s light pour qui sait pomper</li>
<li>tr&egrave;s efficace au pr&egrave;s</li>
<li>excellente stabilisation du foil en vol</li>
<li>tenue &eacute;tonnante dans le vent au pr&egrave;s (jusqu\'&agrave; 18knt en 9m)</li>
<li>assez l&eacute;g&egrave;re en comparaison avec une 9m de slalom (mais attention bien plus lourde quand m&ecirc;me qu\'une freerace)</li>
</ul>
<p>Bref, un produit technique et exigent, mais qui fait partie du podium des perf avec la Flight Evo et la Phantom SF. Parmi ces 3 voiles, la Severne reste malgr&eacute; tout la plus facile d\'acc&egrave;s.</p>',
'test_equipment' => 'Foil 144 / F4 Race',
'test_duration' => 10,
'test_conditions' => '8-12 knt',
'test_place' => 'Serre Ponçon',
'created_at' => '2019-05-31 22:00:00',
'updated_at' => '2020-04-07 12:02:59',
),
74 => 
array (
'id' => 77,
'device_id' => 122,
'user_id' => 1,
'title' => '100% plaisir',
'body' => '<h3>Gr&eacute;age</h3>
<p>J\'ai tout bien fait comme ils disent : on d&eacute;tend les 2 lattes de cam pour enfiler le mat et mettre le Wish, avec une l&eacute;g&egrave;re tension en bas. On met en place les petits cam sur sangle (&ccedil;a se fait tout seul). Ensuite un bon &eacute;tarquage en bas aux c&ocirc;tes donn&eacute;es par la marque, puis on &eacute;tarque les lattes de cam pour retrouver une jolie voile avec un creux tr&egrave;s progressif. D&eacute;j&agrave; comme &ccedil;a c\'est tr&egrave;s joli. Il reste 1 pli sur chaque gousset de latte au niveau des cam, mais je n\'ai pas r&eacute;ussi &agrave; les faire dispara&icirc;tre .. l\'id&eacute;e n\'&eacute;tait pas de bouriner sur les &eacute;tarqueurs de latte, et surtout ces plis disparaissent d&egrave;s que le vent tend la voile.</p>
<p>EDIT. J\'ai trouv&eacute; comment ne pas avoir de plis sur les lattes. Il faut &eacute;tarquer les lattes avant de mettre de la tension en bas. Du coup, profil nickel sans plis !</p>
<p><img src="/storage/photos/1/2020-02/7a063b64a64df468efae85d1ae29ee8c.jpg" /></p>
<p>Le 2e effet kisscool, c\'est quand on soul&egrave;ve le gr&eacute;ement pour l\'apporter au bord de l\'eau ... mais c\'est une plume !!! T\'es s&ucirc;r qu\'il y a des cam ???</p>
<h3>Sur l\'eau</h3>
<p>D&egrave;s la prise en main, la premi&egrave;re sensation de l&eacute;g&egrave;ret&eacute; se confirme ... et d&egrave;s le premier vol, c\'est la douceur qui saute aux yeux : du velour !!! Que l\'on soit au harnais ou juste &agrave; bout de bras, quel pied :) La voile travaille en harmonie avec le mat, et on a vraiment une sensation de douceur et de ma&icirc;trise.</p>
<p>En terme de puissance, la F-Type n\'est pas d&eacute;moniaque, du m&ecirc;me type que la E-type, donc rien &agrave; voir avec une voile free-race ou une voile comme la skyscape. Par contre, elle est bien plus efficace au pumping que les voiles freeride no cam gr&acirc;ce &agrave; un creux plus stable et ce, malgr&eacute; une latte de moins. Par rapport &agrave; la E-type, notre F-type est bien &eacute;galement plus efficace au pr&egrave;s : on a de l\'appui sous la main arri&egrave;re, mais en gardant un creux bien devant .. du coup, cet appui est directement efficace.</p>
<p>Compte tenu du poids de la voile, et de la configuration 4 lattes, ma grande interrogation concernait la tenue dans les rafales ... et pour le coup, j\'ai &eacute;t&eacute; servi aujourd\'hui avec un vent qui montait &agrave; presque 30knt dans les plus grosses rafales (relev&eacute; winds-up &agrave; l\'appui). Apr&egrave;s la douceur de la voile, c\'est la 2e surprise : la tenue est carr&eacute;ment &eacute;tonnante dans les ris&eacute;es. Evidemment, il faut ouvrir, mais le creux ne recule presque pas, et le gr&eacute;ement reste donc parfaitement saint. La combinaison l&eacute;g&egrave;ret&eacute; / douceur / tenue du profil permet de g&eacute;rer sans soucis les conditions tr&egrave;s irr&eacute;guli&egrave;res.</p>
<p>Bon &eacute;videmment, je ne parle pas de la rotation des cam, car si il n\'y en avait pas, ce serait pareil ! Euh non en fait, sur la F-Type, il n\'y a m&ecirc;me pas besoin que la latte passe derri&egrave;re le mat, c\'est donc encore plus doux au changement d\'amure qu\'une voile rotative classique. Et pour la sortir de l\'eau, on a en gros l\'impression d\'avoir une voile de vague dans les mains.</p>
<p>Si on devait vraiment trouver quelques chose &agrave; redire, on pourrait vouloir une voile plus p&ecirc;chue. En rel&acirc;chant au Wish, on gagne sensiblement en puissance, mais on est de toute fa&ccedil;on limit&eacute; par le peu de latte. Et puis, elle est tellement agr&eacute;able comme &ccedil;a en mode freeride qu\'il serait dommage d\'en faire un camion =;)</p>
<h3>Comparaison F-Type E-Type</h3>
<p>La question de la voile d&eacute;di&eacute;e en Foil se pose de plus en plus. Est ce r&eacute;ellement utile , et si oui en quoi ?</p>
<p>Pour r&eacute;pondre &agrave; cette question, nous avons compar&eacute; sur le m&ecirc;me mat&eacute;riel (flotteur / foil) et dans les m&ecirc;me conditions de vent un peu soutenu, une voile North VOLT , et la Duotone F-TYpe. Les 2 &eacute;taient gr&eacute;&eacute;e sur le m&ecirc;me mat RDM en 4,00m</p>
<p>L\'essai a &eacute;t&eacute; men&eacute; avec un combo Horue Airtime / Starbaord GTS, et un combo Starboard Foil 122 / Lk1</p>
<p>D&egrave;s la prise en main le gr&eacute;ement F-Type parait beaucoup plus l&eacute;ger dans les mains, et cela se confirme dans tous les secteurs de la navigation (manoeuvres, d&eacute;collage, vol, pr&egrave;s etc.).</p>
<p>Le d&eacute;collage est un peu plus rapide avec la Volt qui a plus de puissance statique. Au pumping, la F-Type reprend le devant. Une fois en vol stabilis&eacute;, la F-Type acc&eacute;l&egrave;re beaucoup plus vite, g&egrave;re mieux les surventes, permet de mieux se caler, stabilise le foil, offre une vitesse de pointe plus &eacute;lev&eacute;e. Au cap &eacute;galement, aucune mesure enter les 2 voile, notamment gr&acirc;ce &agrave; l\'appui main arri&egrave;re un peu plus marqu&eacute; sur la F-Type. Certes les 2 voiles sont ax&eacute;es freeride et donc peu rapides dans l\'absolu, mais la diff&eacute;rence entre les 2 est tout de m&ecirc;me flagrante.</p>
<p>Sur le foil le plus en glisse (qui n&eacute;cessite le moins de puissance) , les diff&eacute;rences de performances au portant sont un peu plus liss&eacute;es. Au pr&egrave;s t sur le foil n&eacute;cessitant le plus de puissance, l\'&eacute;cart est plus important.</p>
<p>Au final, en utilisation foill, la F-Type &eacute;crase litt&eacute;ralement la Volt. Que ce soit en terme de performances et que d\'agr&eacute;ment, il n\'y a pas photo !</p>
<h3>Bilan</h3>
<p>La F-Type propose en feeling que nous n\'avions pas encore eu sur une voile de foil. Celles qui s\'en rapprochent le plus sont les voiles Swart de Horue : elles aussi tr&egrave;s l&eacute;g&egrave;res et plus compactes, mais on a ici plus de longueur de Wish et d\'appui au pr&egrave;s. Le profil est aussi un peu plus tenu lors du pumping. Au final, Duotone propose une voile qui a la maniabilit&eacute; et le poids d\'une voile sans cam tr&egrave;s l&eacute;g&egrave;re, mais avec la tenue dans le vent et la finesse d\'une voile &agrave; camber ... sans compter une douceur juste incroyable. On peut la r&eacute;sumer en 3 mots : <strong>freeride 100% plaisir</strong> !</p>
<p>Je pense que d&egrave;s que le vent d&eacute;passe 15 kntn vous allez me voir souvent avec un combo freeride 100% plaisir : JP Hydro 120 / Duotone F-Type 5,8 / Taaroa Noe 97</p>
<p><img src="/storage/photos/1/2020-02/d1f6be36c9bf499419011ca5e4ecefb3.jpg" /></p>
<p>&nbsp;</p>',
'test_equipment' => 'JP Hydrofoil 120 / Foil : NeilPryde RS:Flight AL 2019 / Duotone Platinium aéro RDM 400 , Wish AL360 E3 140',
'test_duration' => 6,
'test_conditions' => '15-25 knt',
'test_place' => 'Lac de Pierrelatte',
'created_at' => '2018-09-21 22:00:00',
'updated_at' => '2020-04-06 19:33:22',
),
75 => 
array (
'id' => 78,
'device_id' => 123,
'user_id' => 1,
'title' => 'Un développement intelligent',
'body' => '<p>Lorsque l\'on teste un mod&egrave;le de voile dans plusieurs tailles, on a l\'habitude d\'avoir des sensations tr&egrave;s diff&eacute;rentes suivant les surfaces, de par l\'encombrement mais surtout le comportement. C\'est assez logique : on se doute bien que 5 lattes pour tenir le profil d\'une voile de 8m2, ce n\'est pas pareil que 5 lattes r&eacute;parties sur la longueur de guindant d\'une 5m2 ! La plupart du temps, on a des petites surfaces l&eacute;g&egrave;res et rigides, et des grandes surfaces plus lourdes et molles. A l\'exception des voiles de slalom, comme le d&eacute;veloppement est fait sur une surface interm&eacute;diaire, c\'est en g&eacute;n&eacute;ral cette derni&egrave;re qui est la plus r&eacute;ussie.</p>
<p>Avec la AirRide \'20, GA Sail propose une nouvelle approche assez intelligente qui fonctionne : en proposant une 7.7 avec 2 cam, et une 6.7 sans cam, on retrouve pour une fois des sensations analogues sur les 2 surfaces. Pour rentrer dans le d&eacute;tail, on n\'a pas les inconv&eacute;nients habituels des grandes voiles sans cam (molesse et instabilit&eacute;), ni la lourdeur des voiles avec cam. Au contraire, on a une homog&eacute;n&eacute;it&eacute; de comportement assez bluffante sur l\'ensemble de la gamme.</p>
<h3>Justement venons y : comment se comporte cette Air Ride ?</h3>
<p>La puissance statique (sans pomper) est assez importante. C\'est un petit cran en dessous de la Flight Starboard (<a href="/blog/windfoil-test-dtb-flight.html">test&eacute;e ici</a>), mais largement au dessus de la moyenne des voiles sans cam. Elle est aid&eacute;e en cela par un creux g&eacute;n&eacute;reux dans le profil.</p>
<p><img src="/storage/photos/1/2020-02/IMG_0252.jpg" alt="GA Sails Air Ride 2020" /></p>
<p>La puissance dynamique n\'est, par contre, pas beaucoup plus importante. Comme la plupart des voiles sans cam, ce n\'est pas en s\'arrachant au pumping que l\'on va faire des miracles. On est loin des prestations que peuvent proposer de ce c&ocirc;t&eacute; les voiles freerace. La 7.7 est de ce point de vue parfaitement dans la lign&eacute;e des 5.7 et 6.7</p>
<p>En terme de poids ressenti, la AirRide est clairement l&eacute;g&egrave;re pour sa taille. Les manoeuvres sont facilit&eacute;es &eacute;galement par un wish assez court, et une rotation du profil impeccable (m&ecirc;me sur la 7.7 ... qui tourne m&ecirc;me presque mieux que ses petites soeurs).</p>
<p>En vol, la souplesse g&eacute;n&eacute;rale du gr&eacute;eement est tr&egrave;s appr&eacute;ciable et apporte beaucoup de confort. Par ailleurs, l\'outline et les r&eacute;partitions de creux remplissent parfaitement le r&ocirc;le que l\'on demande &agrave; une voile de windfoil : participer &agrave; la stabilisation longitudinale du foil. En gros, avec une voile d&eacute;di&eacute;e, on fait moins des mont&eacute;es / descentes intempestives. De la m&ecirc;me fa&ccedil;on, l\'appui main arri&egrave;re est tr&egrave;s contenu dans la plage d\'utilisation id&eacute;ale de chaque surface.</p>
<p>Les vents irr&eacute;guliers sont, peut &ecirc;tre, par contre le point faible de ces voiles sans cam ... en comparaison avec les mod&egrave;les freerace. Comme nous l\'avions constat&eacute; avec la Flight, le creux se d&eacute;place dans les rafales et procure &agrave; ces voiles une plage d\'utilisation plus faible qu\'avec des voiles rigides. Concernant la AirRide, c\'est finalement sur la 6.7 que le ph&eacute;nom&egrave;ne est le plus marqu&eacute;. Les 5.7 et 7.7 semble moins sensibles &agrave; ce ph&eacute;nom&egrave;ne.</p>
<p>Dernier terrain o&ugrave; on peut mieux faire : la vitesse au pr&egrave;s. Comme souvent avec ce type de voile, les performances sont excellentes au portant ou au travers, mais elles diminuent tr&egrave;s vite quand on serre le vent. La aussi, avantage &eacute;vident aux voile freerace.&nbsp;</p>
<p>... mais au final, les crit&egrave;res de perfomance passant au second plan compte tenu du programme, la AirRide fait tr&egrave;s bien le job !</p>
<h3>En comparaison</h3>
<p>A ce jour, la AirRide a peu de concurrence sur le terrain de la voile d&eacute;di&eacute;e foil ax&eacute;e freeride. Citons juste</p>
<ul>
<li>La Duotone F Type</li>
<li>La Starboard Flight</li>
<li>La Ezzy Hydra</li>
</ul>
<div>En terme de puissance statique, la Flight reste en t&ecirc;te, devant la AirRide puis plus loin la F-Type. L\'hydra ferme la marche. La Air Ride est cependant la premi&egrave;re voile de freeride cr&eacute;dible en grande surface, ce qui permettra aux allergiques des cam, de se faire plaisir en oubliant totalement leur pr&eacute;sence.&nbsp;</div>
<div>En terme de puissance dynamique, il y a match en t&ecirc;te entre la GA et la Starboard</div>
<div>En terme de tenue dans le vent soutenu et les rafales, c\'est l\'Hydra qui est en t&ecirc;te. la F Type (en 5,8 car tr&egrave;s diff&eacute;rente en 6,8) se d&eacute;fend tr&egrave;s bien &eacute;galement. Les GA et Starboard restent en retrait et il faut plus vite baisser en taille.</div>
<div>En terme de ratio puissance / l&eacute;g&egrave;ret&eacute;, ce sont clairement les GA et starboard qui sont en t&ecirc;te, avec un petit avantage &agrave; la Starboard.</div>
<div>&nbsp;</div>
<div>En ce qui concerne la maniabilit&eacute; et le confort, jeu &eacute;gal des 4 mod&egrave;les.</div>
<p>Si on compare cette Air Ride a une voile freerace d&eacute;di&eacute;e (Loft Skyblade, Phantom IRIS X etc.), la AirRide est tellement plus l&eacute;g&egrave;re, douce et confortable qu\'il n\'y a pas photo. La rotation du profil est &eacute;galement sans commune mesure. Par contre, la tenue dans la rafales, la puissance dynamique, et les performances au pr&egrave;s ne sont pas comparables ... au d&eacute;triment de la Air Ride. Plein de logique l&agrave; dedans, mais il me parait important de rappeler que l\'on ne peut pas avoir le beurre et l\'argent du beurre (du moins pas encore).</p>
<p>Le point o&ugrave; les Freerace Foil, et une voile comme la Air Ride font jeu &eacute;gal, c\'est sur leur capacit&eacute; &agrave; faciliter le vol en stabilisant le foil en l\'air.</p>
<p><img src="/storage/photos/1/2020-02/IMG_0249.jpg" alt="GA Sails Air Ride 2020" /></p>
<h3>En conlusion</h3>
<p>La gamme GA Air Ride propose une nouvelle alternative pertinante pour foiler avec des voiles l&eacute;g&egrave;res et confortables r&eacute;ellement adapt&eacute;es &agrave; cette nouvelle pratique (stabilisation du foil). Le faire &eacute;galement avec une voile de plus de 7.5m2 consitue une excellente surprise.</p>
<p>GA offre, pour moi, la premi&egrave;re gamme de voile o&ugrave; on retrouve le m&ecirc;me feeling quelque soit la surface choisie. C\'est en soit une vraie nouveaut&eacute;.&nbsp;</p>
<p>En terme de feeling et de performances, la Air Ride doit &ecirc;tre consid&eacute;r&eacute;e comme une voile de freeride souple. Elle c&egrave;de donc sur les terrains du cap, de la puisance dynamique, et de la stabilit&eacute; dans les rafales, mais propose une superbe homog&eacute;n&eacute;it&eacute; concernant la puissance statique, la l&eacute;g&egrave;ret&eacute;, le confort en navigation et la maniabilit&eacute; dans les manoeuvres.</p>
<p>Une nouvelle fois, on constate avec bonheur que les marques de voile s\'int&eacute;ressent au foil ... et montrent qu\'une conception sp&eacute;cifique est en mesure d\'apporter un vrai plus apr&egrave;s le foil lui m&ecirc;me et les flotteurs. Mission r&eacute;ussie :)</p>',
'test_equipment' => 'Airtime 125 / Noe 97 UHM',
'test_duration' => 6,
'test_conditions' => 'Ouest 15-20 knt pour la 6.7 /  Marignane 8-12 knt pour la 7.7 / 5.7 à La Ciotat - Ouest 15-20 knt',
'test_place' => 'La Ciotat / Le Jai',
'created_at' => '2019-09-30 22:00:00',
'updated_at' => '2020-04-06 19:33:22',
),
76 => 
array (
'id' => 79,
'device_id' => 124,
'user_id' => 1,
'title' => 'Une excellente freerace en 8m',
'body' => '<p>Je pr&eacute;cise que la taille test&eacute;e est la 8m2. Ce n&rsquo;est pas une remarque anodine car la Skyblade &eacute;tant le mod&egrave;le course foil de Loft, il eut &eacute;t&eacute; opportun de la tester en 9m2 pour la comparer &agrave; ses petites copines que sont les hyperglide 2 et RS Flight Evo. En effet, dans une optique racing, la 9m2 est un peu la voile pivot &hellip; la plus utilis&eacute;e. La 8m correspond &agrave; la surface de vent fort pour les coureurs (qui utilisent 8,9 et 10m2)</p>
<p>En testant une 8m2 dans des vents l&eacute;gers, je me place donc dans l&rsquo;optique d&rsquo;un pratiquant non comp&eacute;titeur, qui souhaite utiliser la Skyblade en mode freerace.</p>
<p>Je pr&eacute;csie &eacute;galement que pour 2020, loft proposera &eacute;galement une Skyscape 8m2 d&eacute;di&eacute;e au foil. les programmes sont diff&eacute;rents : foil racing pour la Skyblade / foil freeride et freerace pour la Skyscape.&nbsp;</p>
<h3>Gr&eacute;age</h3>
<p><img src="/storage/photos/1/2020-02/loft-skyblade2020-1.jpg" alt="Test Loft Skyblade 2020" /></p>
<p>La montage de la voile n&rsquo;appel aucun commentaire particulier. Je suis rest&eacute; sur les pr&eacute;conisations concernant la taille de mat et de rallonge, malgr&eacute; le fait que ce n&rsquo;&eacute;tait pas un mat Loft, et &ccedil;a tombait parfaitement.</p>
<p><img src="/storage/photos/1/2020-02/loft-skyblade2020-2.jpg" alt="Test Loft Skyblade 2020" /></p>
<p>Les cam s&rsquo;installent facilement sans forcer si on prend la peine de rel&acirc;cher &agrave; l&rsquo;amure. Je n&rsquo;ai pas eu &agrave; modifier les spacers, et j&rsquo;ai obtenu directement un shape tr&egrave;s joli avec plut&ocirc;t pas mal de creux naturel.</p>
<p><img src="/storage/photos/1/2020-02/loft-skyblade2020-6.jpg" alt="Test Loft Skyblade 2020" /></p>
<p>Comme souvent sur les voiles de foil, on utilisera de la tension &agrave; l&rsquo;&eacute;coute pour limiter le creux en navigation et garder un maximum de glisse sans main arri&egrave;re. On aimerai juste une poulie d&rsquo;&eacute;coute fournie en standard comme sur la plupart des voiles concurrentes (NP, Severn, etc.). Tous les tests ont &eacute;t&eacute; fait sur l&rsquo;oeillet du haut, dans la mesure o&ugrave; j&rsquo;ai pris l&rsquo;option d&rsquo;utiliser cette voile en mode free-race (et non pas dans plus de 20-25 knt comme le feront certainement les coureurs lorsqu&rsquo;ils auront recours &agrave; la 8m2)</p>
<p><img src="/storage/photos/1/2020-02/loft-skyblade2020-3.jpg" alt="Test Loft Skyblade 2020" /></p>
<h3>Sur l&rsquo;eau</h3>
<h4>Manipulations</h4>
<p>Malgr&eacute; le programme annonc&eacute;, et le creux naturel important, la Skyblade est l&eacute;g&egrave;re lors des manipulations pour une voile typ&eacute;e racing. Il faut dire que tout semble fait pour r&eacute;duire le poids de la voile : les renforts sont r&eacute;duits au strict minimum, et l&rsquo;ensemble de la voile fait appel &agrave; du monofilm non tram&eacute;. Je me demande tr&egrave;s s&eacute;rieusement comment la voile va vieillir .. en particulier le bas de la voile qui frotte facilement sur le flotteur et les straps. &nbsp;&nbsp;</p>
<p><img src="/storage/photos/1/2020-02/loft-skyblade2020-4.jpg" alt="Test Loft Skyblade 2020" /></p>
<h4>Passage des cam</h4>
<p>La premi&egrave;re chose qui surprend avant de partir au planning, c&rsquo;est la facilite de rotation des cam. Tr&egrave;s franchement, je ne pense pas avoir d&eacute;j&agrave; vu cela sur une voile de foil &agrave; camber (&agrave; l&rsquo;exception de la F Type mais pour dans un programme compl&egrave;tement diff&eacute;rent). C&rsquo;est net, sans passage en 2 temps, et sans forcer. Je pense que les critiques faites &agrave; l&rsquo;occasion de la sortie des skyscape ont port&eacute; leur fruits, et monty a trouv&eacute; une solution id&eacute;ale de ce c&ocirc;t&eacute;. Premier super bon point donc. Durant mes 2 jours complets de test, je n\'ai pas une fois d&ucirc; poiusser &agrave; la main sur un cam pour qu\'il ne passe. Autant vous dire que c\'est tr&egrave;s rare !</p>
<h4>Pumping et dynamique</h4>
<p>C&rsquo;est parti pour un premier d&eacute;part dans le light en pompant. Et l&agrave;, 2e effet kiss cool : la Skyblade est tr&egrave;s dynamique et sait parfaitement utiliser l&rsquo;effet reflex du mat avec dun excellent appui sur la chute. Une fois encore, c&rsquo;est une nouveaut&eacute; chez Loft car que ce soit avec les Blade, ou les Skyscape (et &agrave; fortiori sur les siwchblade ou oxygen), la marque nous avait plut&ocirc;t habitu&eacute;e &agrave; des voiles souples et peu nerveuses. Cela va donc peut &ecirc;tre d&eacute;sar&ccedil;onner les afficionados de Loft, mais nous, on aime ! Cette voile vient donc rejoindre les Severn ou autres NeilPryde dans ce c&ocirc;t&eacute; nerveux que j&rsquo;adore. Au moins, cela vaut le coup de mettre de l&rsquo;&eacute;nergie au pumping &hellip; et cela ne se fait pas &agrave; fond perdu&nbsp;</p>
<h4>Acc&eacute;l&eacute;ration et puissance</h4>
<p>Une fois en vol, l&rsquo;acc&eacute;l&eacute;ration est plut&ocirc;t douce compar&eacute; &agrave; ses concurrentes, et la puissance assez mod&eacute;r&eacute;e. Comme toutes les voiles typ&eacute;es foil race ou freerace, on a un effet de stabilisation du flotteur sur le plan longitudinal tr&egrave;s marqu&eacute; d&egrave;s que l&rsquo;on borde la voile. Pour tirer tout l&rsquo;int&eacute;r&ecirc;t de ce type de mod&egrave;le, il est important de bien r&eacute;gler son palan d&rsquo;&eacute;coute en laissant visuellement peu de creux (il y en a toujours assez, car il est tr&egrave;s avanc&eacute; !). Cela va permettre &agrave; la voile d&rsquo;acc&eacute;l&eacute;rer et de remonter au vent.</p>
<h4>Bordure</h4>
<p>Par rapport &agrave; ses concurrentes, la bordure basse parait beaucoup moins g&eacute;n&eacute;reuse. Au moins, il n&rsquo;y aucun risque pour que la voile se bloque dans les straps, et aucun risque de casser une latte au jibe. Par contre, on navigue moins bordure contre le pont qu&rsquo;avec l&rsquo;hyperglide 2 ou la NP par exemple.</p>
<h4>Pouss&eacute;e sur la main arri&egrave;re</h4>
<p>Toujours en comparaison des autres, la Loft a encore moins de main arri&egrave;re et un wish plut&ocirc;t court (sans d&eacute;crochement). Que ce soit par sa l&eacute;g&egrave;ret&eacute; en main, son dynamisme, et son peu de pr&eacute;sence en main arri&egrave;re, elle ressemble beaucoup &agrave; l&rsquo;IRIS X. Comme avec cette derni&egrave;re, il faudra donc faire attention &agrave; ne pas surborder la voile pour garder de la vitesse, en particulier au pr&egrave;s o&ugrave; on a tendance &agrave; vouloir s&rsquo;appuyer sur la main arri&egrave;re.</p>
<p><img src="/storage/photos/1/2020-02/loft-skyblade2020-3.jpg" alt="Test Loft Skyblade 2020" /></p>
<h4>Performances en mode Up &amp; Down</h4>
<p>Je ne pourrai pas m&rsquo;&eacute;tendre sur les perf pures, en l&rsquo;absence de comparaison avec les autres voiles de ce type que j&rsquo;ai test&eacute; en 9m2. J&rsquo;ai juste not&eacute; un appui un peu l&eacute;ger au pr&egrave;s tr&egrave;s serr&eacute;, et une puissance &lsquo;tranquille&rsquo; pour une 8m2 (en particulier si je compare par exemple &agrave; la RS Flight 7,8 premi&egrave;re g&eacute;n&eacute;ration qui tirait tr&egrave;s fort).</p>
<p>Dans les rafales (15-17 knt &hellip; soit bien en de&ccedil;&agrave; des capacit&eacute;s probables de cette voile), le creux ne bouge pas et la voile continue &agrave; rester seine et facile.&nbsp;</p>
<h4>Au jibe</h4>
<p>Au jibe, sa l&eacute;g&egrave;ret&eacute; est un vrai atout, et ceux qui m&rsquo;ont vu enchainer les airjibe cette semaine &agrave; Serre Pon&ccedil;on ont eu du mal &agrave; croire que je naviguais avec une 8m de course. Le passage des cam sans forcer et en un temps est &eacute;galement un gros atout de ce c&ocirc;t&eacute;. Comme il n\'est pas n&eacute;cessaire de border comme un bourrain en sortie de jibe, cela &eacute;vite de plaquer le flotteur sur l\'eau ... au moment o&ugrave; on a peu de vitesse.</p>
<p><img src="/storage/photos/1/2020-02/skyblade2019-01.jpg" alt="skyblade loft 2020" /></p>
<h3>Bilan</h3>
<p>Sous beaucoup d&rsquo;aspects, j&rsquo;ai &eacute;t&eacute; tr&egrave;s agr&eacute;ablement surpris et carr&eacute;ment s&eacute;duit par cette nouvelle Skyblade test&eacute;e en 8m2, sous l&rsquo;angle d&rsquo;une utilisation free-race. J&rsquo;y ai retrouv&eacute; beaucoup de points commun avec les IRIS X &hellip; avec une meilleur finition, et une meilleure tenue dans le vent (en comparaison avec l&rsquo;IRIS 7,4 puisque les petites tailles sont plut&ocirc;t magiques de ce point de vue). Depuis 2 ans, les marques (et loft en t&ecirc;te) commencent &agrave; faire de vrais efforts pour d&eacute;velopper des voiles d&eacute;di&eacute;es au foil. Quand elles sont r&eacute;ussies (j\'ai eu l\'occasion de tester aussi quelques bons rat&eacute;s cette ann&eacute;e !!), on y gagne beaucoup en confort de navigation. Essayez et vous pourriez &ecirc;tre surpris !&nbsp;</p>
<p>Il va &ecirc;tre int&eacute;ressant de tester &eacute;galement la nouvelle Skyscape 8m2 2020 pour comparer (test&eacute;e en 6,4 pour l\'instant &agrave; ce jour): &nbsp;je pense qu\'on va trouver 2 voiles tr&egrave;s diff&eacute;rentes : une voile dynamique typ&eacute;e race et freerace avec la skyblade, et une voile souple typ&eacute;e freeride avec la skyblade. Au passage, petite apparet&eacute; sur la Skyscape 2020 test&eacute;e en 6,4 sur un North Platinium 430 SDM ... passage des cam parfait, et beaucoup de l&eacute;g&egrave;ret&eacute; ressentie sur cette petite surface !</p>
<p>Monty, quand est ce que tu d&eacute;clines ce type de voile en plus petite taille, &eacute;ventuellement avec un fourreau un poil moins large, 2 ou 3 renforts de plus en bas de voile histoire de faire une saison compl&egrave;te, et avec des poulies int&eacute;gr&eacute;es &agrave; l&rsquo;&eacute;coute ?</p>',
'test_equipment' => 'Voile gréée sur un SDM 100% GA Sails ENIR (constant flex), Flotteur : Starboard Foil 150 2020, Foil : Starboard Race',
'test_duration' => 8,
'test_conditions' => 'Vent : entre 5 et 15 knt',
'test_place' => 'Spot de Serre Ponçon / Les eaux douces à Crots',
'created_at' => '2019-08-23 22:00:00',
'updated_at' => '2020-04-06 19:37:43',
),
77 => 
array (
'id' => 80,
'device_id' => 125,
'user_id' => 1,
'title' => 'Essai transformé !',
'body' => '<p>Apr&egrave;s une prise de contact avec le prototype il y a 3 mois, nous &eacute;tions impatients de tester le mod&egrave;le d&eacute;finitif de cette board phantom freerace. Le premier contact avait &eacute;t&eacute; plut&ocirc;t int&eacute;ressant, et la gen&egrave;se de la b&ecirc;te fait r&ecirc;ver : dessin&eacute;e par Nicolas Goyard, on a affaire &agrave; un connaisseur.&nbsp;</p>
<h3>D&eacute;ballage</h3>
<p>Bien que fabriqu&eacute;e comme la plupart des planches du march&eacute; chez Cobra, nous avons eu la bonne surprise de d&eacute;baller ce flotteur, accompagn&eacute; d\'une jolie housse en n&eacute;opr&egrave;ne contenant les straps, et un jeu de rondelles inox ovales (que nous vendons s&eacute;par&eacute;ment <a href="https://marseille.glissattitude.com/windfoil/u40159s1-gliss-attitude-rondelle-inox-ovale-arriere-gliss-attitude-2020.html">ici</a>). Ce n\'est pas grand chose, mais c\'est le signe que la marque se pr&eacute;occupe de l&rsquo;utilisateur.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4942.jpg" alt="Rondelle ovales" /></p>
<p>La d&eacute;co est tr&egrave;s sobre avec ce soir mat. Cela met en valeur les d&eacute;tails du shape , et on est tout de suite frapp&eacute; par les rails tr&egrave;s incisifs, et le gros V sur l&rsquo;avant de la car&egrave;ne.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4943.jpg" alt="car&egrave;ne phantom Iris x" width="1500" height="855" /></p>
<p>En terme de plan de pont, on retrouve des plats inclin&eacute;s sous les pieds , comme on l&rsquo;avait d&eacute;j&agrave; vu chez Elix, mais cette fois sans aucun concave. Les positions de straps sont vari&eacute;es, m&ecirc;me si nous verrons que l&rsquo;on aurai encore gagn&eacute; &agrave; avoir une barette de plus sous le pied avant.</p>
<h3>Prise de contact</h3>
<p>En terme de stabilit&eacute; &agrave; l\'arr&ecirc;t, rien &agrave; dire de particulier. Les 150L sont bien l&agrave; (voir un peu plus). On a vu encore plus stable avec un tel volume, mais compte tenu de la forte &eacute;paisseur de la planche, le roulis reste raisonnable pour les manoeuvres ... m&ecirc;me dans la houle, et y compris sur les virements de bord, car le volume est bien pr&eacute;sent &agrave; l\'avant</p>
<h3>D&eacute;collage</h3>
<p>C&ocirc;t&eacute; d&eacute;collage et acc&eacute;l&eacute;ration naturelle, on a d&eacute;j&agrave; vu plus de glisse sur des flotteurs plus pinc&eacute;s (Starboard 122 et 125, fanatic Sting ray 120, JP Hydrofoil 120, Horue Tiny, Exocet et JP Freefoil), mais pour une planche de 83cm de large typ&eacute;e free-race, l&rsquo;IRIS X s&rsquo;en sort tr&egrave;s bien. L&rsquo;acc&eacute;l&eacute;ration naturelle est aussi bien que la JP hydrofoil 135 et la Tabou AirRide 81, donc mieux que la Starboard F150 ou la String Ray 140.&nbsp;</p>
<p>En terme de stabilit&eacute; du flotteur pendant la phase de pumping, on est sur un bon compromis : il ne fallait pas des cuts plus longs ou plus profonds. Pour situer par rapport &agrave; la concurrence, on est plus stable (et on a plus d\'appui) sur cette phase qu\'avec une Tabou AiRide, mais on est en de&ccedil;&agrave; d\'une Starbaord F150, Horue Airtime ou JP Hydrofoil. Par contre, si le pop est un poil moins imm&eacute;diat que la nouvelle exocet RF, il est meilleur que sur tous les autres mod&egrave;les. Pour les pratiquants de bon niveau, c&rsquo;est un &eacute;l&eacute;ment essentiel car ce mode de d&eacute;collage permet d&rsquo;exploiter plus efficacement les conditions light wind ou sous-toil&eacute;es en raccourcissant la phase de pumping.</p>
<p><img class="img-fluid" style="font-family: -webkit-standard;" src="/storage/photos/1/2020-04/IMG_3093.jpg" alt="Phantom Iris X Board 2020" /></p>
<h3>En vol</h3>
<p>D&egrave;s les premiers m&egrave;tres en l\'air, ce qui marque le plus est la compacit&eacute; du flotteur. Il est tr&egrave;s difficile d\'imaginer &agrave; ce stade que l\'on est sur un flotteur qui fait plus de 150L. Certes c\'est plus encombrant que la Airtime 125, mais on est tr&egrave;s loins des sensations que l\'on a sur une Starboard F150 par exemple. On se croirai plus sur une planche de 130L, et elle a pourtant moins d&rsquo;inertie qu&rsquo;une JP hydro 135.</p>
<p>Sous les pieds, le plan de pont est tr&egrave;s consensuel : ils satisfera autant les amateurs de pont plat (comme moi), ou ceux qui pr&eacute;f&egrave;rent un arrondi. Seuls les amateurs d\'angle sous le pied (comme sur les flotteurs de slalom traditionnels) pourront &ecirc;tre d&eacute;&ccedil;us, mais on voir bien que ce type de forme (que l\'on avait sur les premi&egrave;res boards comme la JP hydrofoil 135) tend &agrave; disparaitre. La position du strap avant, &agrave; la fois avanc&eacute;e et ouverte, n&eacute;cessite un temps d&rsquo;adaptation. Le pied arri&egrave;re se pose sur un plan inclin&eacute;, qu&rsquo;il soit dans le strap ou devant. Ceci permet d&rsquo;avoir le pied parfaitement cal&eacute; m&ecirc;me lorsque l&rsquo;on est hors du strap (au pr&egrave;s dans le light ou dans les grosses abatt&eacute;es). Malgr&eacute; la compacit&eacute; de la planche, on a une sensation de puissance sous le pied arri&egrave;re lorsque l&rsquo;on est dans le strap. On ressent plus de contr&ocirc;le qu&rsquo;avec la Tabou Aride ou la Starboard F150, mais moins qu&rsquo;avec la nouvelle RF81.</p>
<p><img class="img-fluid" style="font-family: -webkit-standard;" src="/storage/photos/1/2020-04/IMG_3095.jpg" alt="Phantom Iris X Board 2020" /></p>
<p>Lors des manoeuvres, le plan de pont l&eacute;g&egrave;rement bomb&eacute; est un peu moins facile qu&rsquo;un pont plat mais on s&rsquo;y fait assez vite. Ca donne juste un peu moins d&rsquo;assurance. Seule la position tr&egrave;s excentr&eacute;e du strap avant m&rsquo;a r&eacute;ellement g&ecirc;n&eacute; pour boucler les aire-jibe , mais l&agrave; encore, ce sera certainement une question d&rsquo;adaptation.&nbsp;</p>
<h3>Stabilisation a&eacute;rodynamique</h3>
<p>Le 2eme effet surprenant nous parvient lors de la premi&egrave;re vraie acc&eacute;l&eacute;ration au lof ou au travers : le flotteur est ultra cal&eacute; ! J&rsquo;avais d&eacute;j&agrave; eu cette impression lors du test fugace du proto, mais cela se confirme sur cette version de s&eacute;rie. Que ce soit sur la plan longitudinal, qu\'en lacet, on a presque l\'impression qu\'il y a un petit fant&ocirc;me (le secret de la marque ???) invisible qui tient le nez du flotteur pendant l&rsquo;acc&eacute;l&eacute;ration. On se retrouve &agrave; des vitesses ind&eacute;centes sans forcer et surtout sans se faire peur. Nous sommes plusieurs &agrave; avoir essay&eacute; la X, et nous avons tous eu la m&ecirc;me impression. L&rsquo;un des testeurs nous a ainsi sign&eacute; une Vmax &agrave; 27knt sur son premier bord.&nbsp;</p>
<p>Ce qui est &eacute;tonnant, et contradictoire, c&rsquo;est cette sensation de planche qui semble &lsquo;petite&rsquo; &agrave; c&ocirc;t&eacute; d&rsquo;une Foil 150 par exemple, mais &agrave; la fois plus cal&eacute;e &agrave; vitesse soutenue que tous les autres flotteurs de la cat&eacute;gorie. C&rsquo;est ce qui me laisse &agrave; penser que l&rsquo;effet de stabilisation est d\'origine a&eacute;rodynamique. Cet effet &agrave; l\'air de se mettre en place en particulier en position de l&eacute;g&egrave;re contre g&icirc;te.</p>
<h3>Contr&ocirc;le et touchettes</h3>
<p>Cot&eacute; facilit&eacute; de contr&ocirc;le dans le vent soutenu, la IRIS X fait mieux que la Starboard F150, la Tabou AirRide 81, ou la JP Hydro 135, mais fait un peu poil moins bien que la RF, la Fanatic Sting 140 ou la Airtime. Ceci est essentiellement d&ucirc; &agrave; puissance sup&eacute;rieure g&eacute;n&eacute;r&eacute;e par l&rsquo;arri&egrave;re plus &eacute;pais. C&rsquo;est partiellement compens&eacute; par la stabilisation et la moindre prise au vent.&nbsp;</p>
<p>La gestion des touchettes sur le rail est juste parfaite. Elle rejoint la nouvelle RF 81 au rang des 2 meilleurs de la cat&eacute;gorie de ce point de vue. Sur les contacts plus appuy&eacute;s devant, elle freine &eacute;galement tr&egrave;s peu, mais &agrave; ce niveau, la RF 81 fait encore mieux grace &agrave; son tr&egrave;s gros volume qui rebondit plus franchement. Quant aux touchettes &agrave; plat, RAS, les cuts assez prononc&eacute;s jouent leur r&ocirc;le parfaitement.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4950.jpg" alt="combi iris x freerace " /></p>
<h3>Bilan</h3>
<p>Apr&egrave;s un rapide aper&ccedil;u il y a 3 mois, ce test plus complet confirme nos premi&egrave;res impressions concernant la planche de freerace foil IRIS X. Pour sa premi&egrave;re gamme, Phantom signe un coup de ma&icirc;tre grace &agrave; sa collaboration avec Nicolas Goyard.&nbsp;</p>
<p>Ce flotteur vient ainsi accompagner le nouvelle Exocet RF81 au rang des flotteurs de free-race foil les plus modernes du march&eacute; actuel. Ces 2 planches apportent chacune des innovations marquantes, et une combinaison tr&egrave;s r&eacute;ussies des diff&eacute;rents param&egrave;tres de shape dans cette cat&eacute;gorie. EN ce qui concerne l&rsquo;IRIS X, outre une gestion des touchettes id&eacute;ale, un plan de pont tr&egrave;s &eacute;tudi&eacute;, on d&eacute;couvre pour la premi&egrave;re fois un vrai effet de stabilisation a&eacute;rodynamique en vol rapide. Elle offre en outre une large combinaison de qualit&eacute;. Compte tenu de la jeunesse de Phantom dans le domaine, ce flotteur sera probablement distribu&eacute; en petite quantit&eacute;, mais il m&eacute;rite vraiment le d&eacute;tour.</p>',
'test_equipment' => 'Foil F4 freerace (fuselage 90, aile 800) , IRIS SF en 6 et 8m',
'test_duration' => 5,
'test_conditions' => 'Vent de Sud Est 12-15 knt / houle et clapot bien formé -puis Ouest 10-20 knt',
'test_place' => 'La ciotat',
'created_at' => '2020-06-04 17:27:15',
'updated_at' => '2020-06-04 21:54:11',
),
78 => 
array (
'id' => 82,
'device_id' => 126,
'user_id' => 1,
'title' => 'Une plume !',
'body' => '<h3>Montage</h3>
<p>Le gr&eacute;age de la voile est extr&ecirc;mement simple.</p>
<p>Le mat s&rsquo;enfile dans le fourreau comme qui rigole, de la m&ecirc;me mani&egrave;re que sur une voile de vagues, et peut-&ecirc;tre encore plus facilement gr&acirc;ce au fourreau tr&egrave;s souple et un peu plus large.&nbsp;</p>
<p><img src="/storage/photos/1/2020-02/IMG_2058.jpg" alt="Severne Foil Glide Test" /></p>
<p>Il faudra avoir un bout de rallonge en bon &eacute;tat car l\'espace entre les poulies et le renfort m&eacute;tallique est assez menu. A pr&eacute;voir si vous ne voulez pas criser sur la plage ;). Je pr&eacute;cise que pour ce test, j\'ai utilis&eacute; un mat de 430 RDM 100% avec 34cm de rallonge, &agrave; d&eacute;faut d\'avoir re&ccedil;u le mat RDM 460 Severne.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2059.jpg" alt="Severne Foil Glide Test" /></p>
<p>Les cambers peuvent faire peur &agrave; ceux qui n&rsquo;en ont jamais utilis&eacute;s, mais cette fois, on doit vraiment avouer que c&rsquo;est un peu &laquo; le camber pour les nuls &raquo; : pas besoin de forcer, ils se clipsent avec 2 doigts.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2061.jpg" alt="Severne Foil Glide Test" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2062.jpg" alt="Severne Foil Glide Test" /></p>
<p>La voile n&eacute;cessite assez peu de tension &agrave; l&rsquo;amure. Je suis rest&eacute; sur le r&eacute;glage pr&eacute;conis&eacute;. La chute ouvre l&eacute;g&egrave;rement en haut, mais la voile conserve un creux assez harmonieux, plut&ocirc;t avanc&eacute;, et tr&egrave;s g&eacute;n&eacute;reux pour une voile de freeride.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2064.jpg" alt="Severne Foil Glide Test" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2065.jpg" alt="Severne Foil Glide Test" /></p>
<p>Pour le r&eacute;glage &agrave; l&rsquo;&eacute;coute, j&rsquo;ai utilis&eacute; un palan afin de pouvoir le r&eacute;gler sur l&rsquo;eau et me rendre compte de l&rsquo;influence de ce r&eacute;glage. Nous verrons par la suite que c&rsquo;est une bonne option, car elle permet r&eacute;ellement de moduler la puissance de la voile en fonction du vent.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2067.jpg" alt="Severne Foil Glide Test" /></p>
<p>Je pr&eacute;cise que les photos ont &eacute;t&eacute; prises avant l\'&eacute;tarquage des lattes, d\'o&ugrave; quelques plis disgracieux qui ont pour la plupart disparu ensuite.</p>
<h3>Test de la 6m</h3>
<p>En transportant la voile vers l&rsquo;eau, la l&eacute;g&egrave;ret&eacute; est tr&egrave;s impressionnante. Le gr&eacute;ement est une plume. Idem au tire-veille, c&rsquo;est presque moins encombrant qu&rsquo;une voile de vagues.</p>
<p>D&egrave;s que l&rsquo;on borde, on a par contre une r&eacute;elle pouss&eacute;e, et si on l&rsquo;accompagne par quelques coups de pumping, le d&eacute;collage est plut&ocirc;t bref. D&rsquo;ailleurs, c&rsquo;est la premi&egrave;re chose qui m&rsquo;a surpris et sur laquelle je vais m&rsquo;attarder.</p>
<p>Je ne m&rsquo;attendais vraiment pas &agrave; une voile aussi efficace au pumping compte tenu de sa construction. On pourrait critiquer la construction l&eacute;g&egrave;re du haut de la voile, mais elle prouve toute son importance. Le dosage entre la souplesse et la nervosit&eacute; est extr&ecirc;mement bien pens&eacute;, et malgr&eacute; le mat RDM, on a r&eacute;ellement une efficacit&eacute; et une dynamique inattendue. On retrouve les g&egrave;nes du gr&eacute;ement Starboard Flight, d&eacute;cupl&eacute; par la pr&eacute;sence des 2 cambers. Pour une voile de 6 m&sup2;, elle fait vraiment le job et le ratio entre la puissance dynamique et le poids est tout &agrave; fait impressionnant. Apr&egrave;s la Duotone F-Type qui a trac&eacute; la voie, on se demande sinc&egrave;rement ce qui peut encore rester aux voiles sans cam !</p>
<p>Une fois qu&rsquo;elle est cal&eacute;e sur le bord, on a une voile stable, qui ne tire pas sur la main arri&egrave;re, et qui g&eacute;n&egrave;re une traction tr&egrave;s progressive est tr&egrave;s douce. Les acc&eacute;l&eacute;rations sont plut&ocirc;t contenues. La puissance est tr&egrave;s lin&eacute;aire quelque soit les allures. Contrairement &agrave; de nombreuses autres voiles, tr&egrave;s peu d&rsquo;effet d&rsquo;acc&eacute;l&eacute;ration au lof ou &agrave; l&rsquo;abat&eacute;e. Pour se faire peur avec la Foil Glide, il faut le faire expr&egrave;s ;)</p>
<p>La finesse et la p&eacute;n&eacute;tration dans le vent au pr&egrave;s ne sont clairement pas les qualit&eacute;s premi&egrave;res de cette voile. Par contre, la tenue dans les rafales est surprenante car je m&rsquo;attendais &agrave; un creux insuffisamment tenu par les 4 lattes, et il n&rsquo;en est rien. Dans des rafales autour de 20 knt, aucun souci avec cette 6 m, qui reste facile &agrave; contr&ocirc;ler. Dans les plus grosses rafales, Il suffit de retendre l&eacute;g&egrave;rement &agrave; l&rsquo;&eacute;coute (merci le palan) pour lib&eacute;rer la l&eacute;g&egrave;re pression suppl&eacute;mentaire sur la main arri&egrave;re.</p>
<p>Au Jibe, c&rsquo;est un plaisir d&rsquo;avoir une plume dans les mains. &Eacute;videmment, compte tenu de tout ce qui pr&eacute;c&egrave;de, le passage des cambers est presque imperceptible, comme avec la F-Type. On est bien loin du comportement des IRIS X et autres Skyblade de ce c&ocirc;t&eacute;.</p>
<p>Dans les molles, la FoilGlide ne g&eacute;n&egrave;re pas beaucoup de pouss&eacute;e, mais elle est tellement l&eacute;g&egrave;re qu&rsquo;il est tr&egrave;s facile de pomper pour re-donner un peu de puissance et rester en l&rsquo;air.</p>
<p>On pourra juste lui reprocher d&rsquo;avoir le grand panneau central qui vibre un peu, surtout au pr&egrave;s. A certaines allures, cela g&eacute;n&egrave;re un petit bruit de fond.</p>
<p>En terme de puissance et de plage d&rsquo;utilisation, ce n&rsquo;est pas une voile qui s&rsquo;utilisera surtoil&eacute;e car elle est assez p&ecirc;chue en l&rsquo;&eacute;tat. Dans les conditions du jour entre 14 et 20 knt, la 6m2 &eacute;tait parfaite pour mon gabarit de 78kg. Grace &agrave; son efficacit&eacute; au pumping (&agrave; condition de l&rsquo;associer avec un mat ad&eacute;quat), le Foil Glide r&eacute;ussi le pari d&rsquo;&ecirc;tre p&ecirc;chue pour le d&eacute;collage, et plut&ocirc;t peu puissante en vol : un concept parfaitement adapt&eacute; au windfoil !</p>
<h3>Test de la 7m</h3>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2774_1_.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<h3>Pr&eacute;sentation&nbsp;</h3>
<p>Je ne reviendrai pas sur la pr&eacute;sentation d&eacute;taill&eacute;e que j&rsquo;avais <a href="/blog/windfoil-foilglide-2020.html">d&eacute;j&agrave; fait pour la 6m2</a>, mais j&rsquo;&eacute;voquerai ici les sp&eacute;cificit&eacute;s de la 7m.</p>
<p>Avec la plus grande surface disponible sur ce mod&egrave;le, un mat RDM 460 est indispensable. On utilise m&ecirc;me une rallonge de presque 30cm. Pour ce test, j&rsquo;ai utilis&eacute; le mat Severne Red RDM 100%, qui est &eacute;videmment un compagnon id&eacute;al pour cette voile. Les mats RDM &eacute;tant plut&ocirc;t rares en 460, il faudra bien chercher si on ne veut pas utiliser le Severne. De m&eacute;moire , les autres options doivent se limiter &agrave; Gun et Loft.</p>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2759.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<p>En tout cas, le montage d&rsquo;une voile &agrave; camber sur un mat RDM est un jeu d&rsquo;enfant : le mat s&rsquo;enfile comme qui rigole, et la mise en&nbsp; place des cam ne n&eacute;cessite vraiment aucun effort.</p>
<p>La tension &agrave; l&rsquo;amure est plut&ocirc;t faible : pas besoin de sortir la manivelle. Avec 29cm de rallonge pr&eacute;conis&eacute;e, j&rsquo;avais mis 30, mais je n&rsquo;ai au final pas &eacute;tarqu&eacute; &agrave; fond car la voile ouvrait d&eacute;j&agrave; bien ainsi. Une valeur de 28 me parait &agrave; priori suffisante.</p>
<p>A l&rsquo;&eacute;coute, il faut aussi rester raisonnable sur la tension pour laisser du creux. Pour le test, j&rsquo;ai utilis&eacute; un wishbone de vague en 150-220 et j&rsquo;avais l&rsquo;arri&egrave;re de voile qui affleurait le wish. Il est possible de mettre plus de tension pour affiner la voile dans le vent, mais nul besoin dans les conditions du jour.</p>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2763.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<p>A la premi&egrave;re utilisation, pensez &agrave; ajuster la tension des lattes pour assurer un creux bien en avant. C&rsquo;est en particulier important sur la latte situ&eacute;e au dessus du wish car c&rsquo;est &agrave; cet endroit que le creux est le plus important, et cela semble &ecirc;tre un point cl&eacute; de l&rsquo;efficacit&eacute; de cette voile. Quelque soit la tension des lattes, la rotation des cam est tellement facile qu&rsquo;il n&rsquo;y a pas de risque &agrave; &eacute;tarquer.</p>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2761.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<p>Lors des manoeuvres, la voile est toujours incroyablement l&eacute;g&egrave;re, m&ecirc;me en 7m. J&rsquo;avoue que j&rsquo;avais oubli&eacute; de mettre un tire veille lors de ce premier test, et je n&rsquo;ai eu aucun soucis &agrave; la sortir de l&rsquo;eau &agrave; bout de bras sans cet accessoire habituellement indispensable.</p>
<p>Des les premi&egrave;res ris&eacute;es, on sent une voile qui pousse vers l&rsquo;avant. La relative souplesse de la voile permet d&rsquo;avoir beaucoup de sensations &hellip; tout au contraire d&rsquo;une voile &laquo;&nbsp;t&ocirc;le&nbsp;&raquo; avec laquelle on en sent pas grand chose.</p>
<p>Au premier pumping, j&rsquo;ai &eacute;t&eacute; surpris par la grand panneau central qui tape dans le wish. Pourtant, on ressent imm&eacute;diatement une puissance cons&eacute;quente dans le haut de la voile. Au fur et &agrave; mesure de la session, j&rsquo;ai d&ucirc; adapter ma technique de pumping : au contraire de l&rsquo;hyperglide ou l&rsquo;on doit effectuer des mouvements tr&egrave;s appuy&eacute;s pour cintrer le mat et utiliser son effet r&eacute;flexe, la m&eacute;thode optimale avec le Glide semble &ecirc;tre de commencer avec des petites mouvements rapides de faible amplitude de mani&egrave;re &agrave; garder l&rsquo;arri&egrave;re de la voile en contact avec le wish. On amplifie l&rsquo;amplitude des mouvements au fur et &agrave; mesure ou la vitesse augmente.</p>
<p>Durant toute la phase d&rsquo;acc&eacute;l&eacute;ration, la Glide se distingue assez fortement des autres voiles typ&eacute;e freeride par la pouss&eacute;e ressentie au dessus du wish. Sur la plupart des voiles de freeride, on sent que la puissance vient du bas, et de l&rsquo;arri&egrave;re de la voile. Ici, on sent peu d&rsquo;appui dans le bas de la voile et dans le wish. Le centre de pouss&eacute;e est ressenti tr&egrave;s haut et tr&egrave;s pr&egrave;s du mat &hellip; un peu comme sur la Xo Gold Foil test&eacute; il y a quelques semaines.</p>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2781.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<p>Pour la premi&egrave;re partie de ce test, j&rsquo;avais sous les pieds un combo Starboard Foil 150&nbsp; / F4 race (aile de 1000). Avec cet ensemble, et dans un vent tr&egrave;s l&eacute;ger, majoritairement inf&eacute;rieur &agrave; 10 knt, le d&eacute;collage intervient de fa&ccedil;on plut&ocirc;t assez pr&eacute;coce pour une voile de 7m, mais l&rsquo;acc&eacute;l&eacute;ration une fois en l&rsquo;air est laborieuse. En passant au combo Horue Aitrime 125 / Phantom IRIS X, le d&eacute;collage est encore plus pr&eacute;coce (acc&eacute;l&eacute;ration plus facile avant le vol), mais surtout l&rsquo;acc&eacute;l&eacute;ration est plus rapide et naturelle. On sent bien que la glisse sup&eacute;rieure d&rsquo;un flotteur moins large et d&rsquo;une aile de 800 se marie mieux &agrave; la puissance mod&eacute;r&eacute;e de la voile de freeride.</p>
<p>En vol, la FoilGlide ne renie pas ses origines : on a bien une vraie voile de foil qui stabilise parfaitement l&rsquo;assiette longitudinale. La traction est r&eacute;guli&egrave;re et la main arri&egrave;re l&eacute;g&egrave;re. La sensation de l&eacute;g&egrave;ret&eacute; en vol est tout &agrave; fait impressionnante &eacute;galement. Les yeux ferm&eacute;s, impossible d&rsquo;imaginer que l&rsquo;on a une 7m dans les mains, m&ecirc;me si la pouss&eacute;e cons&eacute;quente en est une parfaite signature. Pour le dire autrement, on a un peu l&rsquo;impression d&rsquo;avoir la puissance d&rsquo;une 7.8 avec l&rsquo;inertie d&rsquo;une 6m. C&rsquo;est assez bluffant.</p>
<p>Avec le combo F150 / F4, on a un comportement inattendu : le gr&eacute;ement est tellement l&eacute;ger qu&rsquo;il n&rsquo;arrive pas &agrave; plaquer la planche , au contraire de l&rsquo;hyperglide2. Du coup, il faut compenser en permanence en d&eacute;pla&ccedil;ant son poids vers l&rsquo;avant. Encore une fois, on voit que l&rsquo;ad&eacute;quation flotteur&nbsp; / foil de race avec une voile de frereride n&rsquo;est pas optimale.&nbsp;</p>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2765.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<p>Quand on fait un premier petit bilan, on se demande finalement qu&rsquo;apporte une voile plus lourde et puissante comme l&rsquo;hyperglide (qui fait mine de rien 2m de plus). La r&eacute;ponse est simple :&nbsp;</p>
<ul>
<li>l&rsquo;acc&eacute;l&eacute;ration au pr&egrave;s</li>
<li>l&rsquo;allonge dans les molles</li>
</ul>
<p>Effectivement, malgr&eacute; toutes ces qualit&eacute;s , la Glide ne peut pas rivaliser avec une voile d&eacute;di&eacute;e &agrave; fourreau tr&egrave;s large en terme de performance. Dans les molles, la puissance chute beaucoup plus vite avec le Glide car la voile ne g&eacute;n&egrave;re pas de puissance sur le vent vitesse comme les hyperglide, IRIS RF ou autre NP Flight Evo. Il faut donc adopter une autre strat&eacute;gie , en abattant , se redressant sur le flotteur, et laissant glisser. On peut &eacute;galement pomper en vol pour garder de la vitesse, mais c&rsquo;est moins efficace qu&rsquo;avec la grosse voile &agrave; camber.</p>
<p>Dans les quelques rafales (autour de 15knt) rencontr&eacute;es ce jour l&agrave;, la Glide 7m ne m&rsquo;a jamais parue limit&eacute;e. On sent que l&rsquo;&eacute;quilibre bouge et que le centre de pouss&eacute;e recule un peu, mais jamais la voile ne devient difficile &agrave; tenir. Sa souplesse permet de g&eacute;rer tr&egrave;s facilement cette l&eacute;g&egrave;re pression main arri&egrave;re.</p>
<p>Avec un appui un peu plus franc dans les rafales, on joue m&ecirc;me avec cette pouss&eacute;e tr&egrave;s en avant pour se pendre dans la voile et remonter au vent de fa&ccedil;on efficace.&nbsp;</p>
<p><img title="FoilGlide 7m Severne 2020" src="/storage/photos/1/2020-02/IMG_2767.jpg" alt="FoilGlide 7m Severne 2020" /></p>
<p>En alternant entre les 2 configurations F150 / F4 Race / HG2 9m et Airtime / Iris X / FoilGide 7m, on a vraiment 2 ensembles tr&egrave;s aboutis, coh&eacute;rent et &eacute;quilibr&eacute;s, mais offrant 2 approches diff&eacute;rentes du vol. Le premier est physique mais ultra performant et grisant, le 2e est ludique, l&eacute;ger et agr&eacute;able. Le plus &eacute;tonnant est que les 2 configurations exploitent les m&ecirc;mes conditions de vent .. avec pourtant 30L de volume, 200cm2 d&rsquo;aile et 2m2 d&rsquo;&eacute;cart ! &nbsp;</p>
<h3>Test de la 5m</h3>
<p>Apr&egrave;s la 6 et la 7, test de la 5m dans un vent oscillant entre 12 et 25 knt. Tr&egrave;s grosse plage d\'utilisation encore avec une voile qui reste agr&eacute;able dans un bon 25 knt, et suprenante dans 15 knt ... et le tout avec une douceur et une l&eacute;g&egrave;ret&eacute; incroyable.&nbsp;</p>
<p>Son seul point faible aussi : un peu moins de vitesse au pr&egrave;s, mais quand on voit les traces des 55km du jour, on peut se dire qu\'elle fait bien le job ;) ... surtout pour une voile de free ride.</p>
<h3>La bonne association</h3>
<p>Suite &agrave; ce test de la Glide en 7m, qui est la plus grande taille disponible sur ce mod&egrave;le, voici nos conseils d&rsquo;association&nbsp;</p>
<p>Dans la mesure o&ugrave; le programme de la voile est le light wind en mode freeride, elle conviendra id&eacute;alement &agrave; un gabarit de moins de 85kg pour exploiter sereinement la plage basse 8-12 knt</p>
<p>C&ocirc;t&eacute; flotteur, la FoilGlide a besoin de glisse, et s&rsquo;associera de pr&eacute;f&eacute;rence avec des flotteurs pas trop larges ou assez pinc&eacute;s (Airtime 125, Starboard 125, AHD Thunderbolt 75, Tiny, Exocet Freefoil, Fanatic StingRay 125, JP Hydrofoil 120)</p>
<p>C&ocirc;t&eacute; foil, on privil&eacute;giera &eacute;galement des foils typ&eacute;s freeride (Starboard Supercruiser, Taaroa Noe freeride, GA Mach 1, Fanatic Flow 900) ou freerace plut&ocirc;t glissants avec des ailes de 800 ou 850 max (Starboard GTRS+, LK1 850, Phantom IRIS X, Noe Freerace)</p>
<h3>Le jeu des comparaisons</h3>
<p>En l&eacute;g&egrave;ret&eacute; ressentie, la Glide est plus l&eacute;g&egrave;re que tout ce que nous avons test&eacute; jusque l&agrave;, &agrave; l&rsquo;exception de la Horue Swart (sans cam) et peut &ecirc;tre de la Ezzy Hydra (encore que). Elle surpasse m&ecirc;me largement la plupart des voiles sans cam que nous avons habituellement en main (E-Type, Matrix, Ryde, Vega)</p>
<p>Par rapport &agrave; la Starboard Flight, la Glide est un peu moins p&ecirc;chue en statique , mais plus en dynamique , et plus stable dans les rafales. Ca lui conf&egrave;re une plage d\'utilisation sup&eacute;rieure sans pour autant sembler plus encombrante.</p>
<p>Par rapport aux Phantom, la gilde est plus l&eacute;g&egrave;re et moins physique que les Z et X, mais ces derni&egrave;res offrent plus d&rsquo;acc&eacute;l&eacute;ration au pr&egrave;s, plus de puissance sur le vent vitesse , et plus de puissance si on sait pomper de fa&ccedil;on &eacute;nergique (en particulier pour la X)</p>
<p>Par rapport &agrave; la Duotone F-Type, la glide en 7m est plus dynamique que la F-Type 6.7 et se d&eacute;forme moins dans les rafales. Par contre , la construction de la F-Type semble plus solide, et elle reste la reine de la douceur sur la rotation des cams.</p>
<p>Par rapport &agrave; la Hydra, on retrouve quelques points communs sur la maniabilit&eacute;, le l&eacute;g&egrave;ret&eacute;, mais la Glide a bien plus de puissance dans la plage basse, et certainement moins de tenue dans les vents tr&egrave;s rafaleux.</p>
<p>.. et par rapport &agrave; toutes les voiles &rsquo;traditionnelles&rsquo; &hellip; ben justement, c&rsquo;est une voile vraiment faite pour le foil et &ccedil;a fait toute la diff&eacute;rence.&nbsp;</p>
<h3>Bilan</h3>
<p>Apr&egrave;s avoir sign&eacute; en 2019 l&rsquo;une des voiles d&eacute;di&eacute;e les plus performantes du march&eacute; Racing avec l&rsquo;Hyperglide 2, Ben Severne nous propose encore une fois une voile ultra r&eacute;ussie pour la pratique du foil en mode freeride. C&rsquo;est un vrai coup de c&oelig;ur !</p>
<p>Avec cette voile qui semble un peu &laquo;&nbsp;basique&nbsp;&raquo; au d&eacute;part (mast panel en dacron, 4 lattes), le comportement est compl&egrave;tement inattendu contenu tenu du poids et des choix techniques. La voile est agr&eacute;able &agrave; tous les niveaux, et seules ses performances pures (vitesse au pr&egrave;s et acc&eacute;l&eacute;ration) sont en retrait au regard de voiles typ&eacute;es performance (IRIS X, V8, Skyblade, Hyperglide, etc.).</p>
<p>Certes il ne faut pas s&rsquo;attendre &agrave; un produit ultra robuste dans le temps car Severne a comme toujours privil&eacute;gi&eacute; le poids, mais cette FoilGlide va offrir un max de plaisir si elle est associ&eacute;e aux bon &eacute;l&eacute;ments. Pour 80 % des pratiquants windfoil, qui ne recherchent pas la vitesse mais plut&ocirc;t le plaisir et le confort, c&rsquo;est l&rsquo;une des voiles les plus abouties du moment. Sa vitesse tr&egrave;s lin&eacute;aire sera un vrai atout rassurant, la rotation des cam est carr&eacute;ment magique au poits d\'&ecirc;tre m&ecirc;me plus agr&eacute;able qu\'une voile sans cam. Plus nous l\'utilisons dans nos tests, plus nous sommes bluff&eacute; car c ette voile, autant le light avec la magique 7m2, que dans le vent fort avec la 5m.</p>
<p>D&eacute;cid&eacute;ment, les designers font de vrais efforts sur ces voiles d&eacute;di&eacute;es, et &ccedil;a paye !</p>',
'test_equipment' => 'Flotteur et foil : Airtime avec Noe 80 et Iris F / Mat : prototype Dynafiber RDM ultralight 100% en 430 + rallonge 34cm',
'test_duration' => 3,
'test_conditions' => 'Vent : Sud Est 10 - 20 Knt',
'test_place' => 'Le Jaï / La Ciotat / L\'almanarre',
'created_at' => '2020-01-06 18:40:39',
'updated_at' => '2020-07-11 05:50:48',
),
79 => 
array (
'id' => 83,
'device_id' => 128,
'user_id' => 1,
'title' => 'Le bon compromis ?',
'body' => '<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4956.jpg" alt="Test Voile Phantom IRIS Z" /></p>
<p>Mon super combo de test du jour : JP Freefoil 115 / Fanatic Flow 900 / Phantom Iris Z 5.8 ... un &eacute;quilibre parfait et 100% plaisir dans le 10-20 knt du jour 😍</p>
<h3>Montage</h3>
<p>La voile se gr&eacute;e, comme d\'habitude chez Phantom, sur un mat 430 SDM constant curve.&nbsp;Pour nos tests, nous utilisons notre vieux North Platinium, mais nous savons d&eacute;sormais que Phantom proposera &agrave; partir de l\'an prochain ses propres mats, fabriqu&eacute;s chez Italica comme Duotone et NeilPryde.</p>
<p>Le montage ne pose aucun probl&egrave;me. Comme avec l\'IRIS X, le faible rond de guidant rend l\'&eacute;tarquage facile &agrave; la main car il y a assez peu de tension dans la voile. Sur la Z, on passe de 3 cam &agrave; 2 cam, et &agrave; un fourreau 100% dacron beaucoup plus &eacute;troit ... &agrave; vrai dire &agrave; peine plus large que celui d\'une voile sans cam.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4961.jpg" alt="" /></p>
<p>En statique, et avec 5 lattes, la voile est moins propre que la IRIS X (quelques plis), mais en la manipulant pour aller &agrave; l\'eau, la l&eacute;g&egrave;ret&eacute; dans les mains est &eacute;vidente. Sur cette version d&eacute;fintive, le profil est tr&egrave;s propre et plut&ocirc;t fin.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4963.jpg" alt="" /></p>
<p>A titre de comparaison, voici les poids mesur&eacute;s sur les voiles de ce type. On voit que la Z est un peu plus lourde que la FoilGlide, mais elle propose une construction semble-t-il un peu plus costaud (&agrave; v&eacute;rifier &agrave; l\'usage). Par contre, elle reste parmi les plus l&eacute;g&egrave;res du march&eacute;. Elle se paye m&ecirc;me le luxe d\'&ecirc;ter plus l&eacute;g&egrave;re que certaines voiles no-cam.</p>
<table border="0">
<tbody>
<tr>
<td>Mod&egrave;le</td>
<td>Marque</td>
<td>Taille</td>
<td>Poids (kg)</td>
</tr>
<tr>
<td>FoilGlide (4 lattes)</td>
<td>Severne</td>
<td>6m</td>
<td>3.66</td>
</tr>
<tr>
<td>F-Type (4 lattes)</td>
<td>Duotone</td>
<td>5.8m</td>
<td>4.01</td>
</tr>
<tr>
<td>Iris Z (5 lattes)</td>
<td>Phantom International</td>
<td>5.8m</td>
<td>4.04</td>
</tr>
<tr>
<td>Vega 2020&nbsp;(6 lattes)</td>
<td>Xo Sails</td>
<td>6.0m</td>
<td>4.10</td>
</tr>
<tr>
<td>Proto XX&nbsp;(6 lattes)</td>
<td>NP</td>
<td>6.0m</td>
<td>4.2</td>
</tr>
<tr>
<td>IRIS X&nbsp;(6 lattes)</td>
<td>Phantom International</td>
<td>5.8m</td>
<td>4.9</td>
</tr>
<tr>
<td>IRIS RF&nbsp;(7 lattes)</td>
<td>Phantom International</td>
<td>6.0m</td>
<td>5.95</td>
</tr>
</tbody>
</table>
<h3>Sur l\'eau</h3>
<p>Dans les maniulations, la voile est tr&egrave;s l&eacute;g&egrave;re dans les bras: &nbsp;un poil moins que la Severn FoilGlide, mais on en est pas tr&egrave;s loin.</p>
<p>Au pumping, elle est nettement plus tendre que la IRIS X, et moins physique sans &ecirc;tre mole pour autant. A ce niveau, on retrouve un dynamisme &eacute;quivallant &agrave; ce que l\'on a avec une loft Skyscape. De fa&ccedil;on &eacute;tonante, on retrouve une sensation semblable sur la 5,8 et la 6,8, malgr&eacute; les panneaux encore plus grands. Ce qui est certain, c\'est qu\'il est important d\'avoir un wish bien large &agrave; l\'arri&egrave;re pour ne pas avoir le panneau qui vient rebondir contre la wish durant le mouvement de pumping.</p>
<p>En vol, la IRIS Z a une glisse int&eacute;ressante pour une voile de la cat&eacute;gorie freeride. Elle semble plus rapide que la foilGlide, en particulier avec plus de glisse au pr&egrave;s, et on n\'a pas ressenti pas de vibration dans le corps de la voile malgr&eacute; les grands panneaux.&nbsp;</p>
<p>Le creux bouge un peu dans les rafales, mais &ccedil;a reste g&eacute;rable et agr&eacute;able m&ecirc;me dans un vent irr&eacute;gulier. On retrouve un peu la m&ecirc;me impression que nous avons eu avec la Severne FoilGlide ou la Duotone F-Type : les cambers permettent de faciliter la tenue dans la voile dans les rafales, et la voile assez tendre fait le reste pour apporter du confort. Comme sur les voiles sans cam, Il faudra toutefois veiller &agrave; ne pas trop surtoiler.</p>
<p>Au pr&egrave;s dans le vent soutenu, la Z est plut&ocirc;t &eacute;tonnante pour une voile de freeeride. Sa p&eacute;n&eacute;tration dans le vent est surprenante, et pour le coup, elle fait mieux sur ce point que les FoilGlide, Hydra et F-Type.</p>
<p>Dans les manoeuvres, la voile passe d&rsquo;un bord &agrave; l&rsquo;autre sans probl&egrave;mes gr&acirc;ce &agrave; sa l&eacute;g&egrave;ret&eacute;. Les cambers se font totalement oublier, &agrave; tel point que la rotation est m&ecirc;me plus douce que sur une voile no-cam. En essayant toutes ces voiles de freeride foil, on ne voit vraiment plus ce qu\'une voile no-cam pourrait avoir comme avantage.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4961.jpg" alt="" /></p>
<p>Astuce : A l\'usage, il faudra veiller &agrave; bien tendre la sangle de bas de voile., sans quoi on a une vibration du panneau inferieur que l\'on peut ressentir en naviagtion.&nbsp;</p>
<h3>Association</h3>
<p>Comme avec les autres voiles de freeride, la Z est une voile qui poss&egrave;de un fond de puissance statique plut&ocirc;t g&eacute;n&eacute;reux pour sa taille, mais la puissance dynamrique d&eacute;velopp&eacute;e au pumping reste en de&ccedil;a de celle des voiles de race. Si on veut en tirer le meilleur, il sera judicieux de l\'associer avec d\'autre &eacute;l&eacute;ments offrant de la glisse. En particulier, elle est beaucoup plus &agrave; l\'aise avec un flotteur pinc&eacute; comme la JP Freefoil ou l\'exocet Freefoil, qu\'avec des flotteurs typ&eacute;s freerace larges sous le pied arri&egrave;re.</p>
<h3>Bilan</h3>
<p>Au final, la Z est une voile attachante. Tr&egrave;s bon compromis entre l&eacute;g&egrave;ret&eacute;, douceur et performance, elle se situe logiquement &agrave; mi chemin entre l\'ultra light Severne FoiGlide, et l\'IRIS X plus sportive et performante. Une fois de plus, le choix d\'une voile de freeride &agrave; 2 cam s\'av&egrave;re payant car il permet d\'avoir une tr&egrave;s bonne tenue dans le vent, et une voile finalement encore plus facile qu\'une no-cam &agrave; l\'utilisation.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_4964.jpg" alt="" /></p>',
'test_equipment' => 'JP Freefoil 115 / Fanatric Flow 900',
'test_duration' => 2,
'test_conditions' => '10-20 knt',
'test_place' => 'la Ciotat',
'created_at' => '2020-04-06 18:49:19',
'updated_at' => '2020-06-11 19:59:15',
),
80 => 
array (
'id' => 84,
'device_id' => 129,
'user_id' => 1,
'title' => 'Pur-sang',
'body' => '<p>L\'iris RF 6m est le mod&egrave;le foil Slalom de Phantom. Avec une chute plus ouverte, 1 latte de moins, et un aspect ratio moins &eacute;lanc&eacute; que les mod&egrave;le de course racing, la RF reste une voile 100% ax&eacute;e performance au travers.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2567.jpg" alt="IRIS SF Speed Phantom" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2568.jpg" alt="IRIS SF Speed Phantom" /></p>
<p>En statique, on a une voile magnifique en terme de profil &agrave; d&eacute;faut d\'avoir un look tr&egrave;s fun. Soulignons en particulier le foureau qui n\'a pratiquement aucun plis, contrairement 90% de la concurrence (y compris dans les plus grandes marques).</p>
<p><img src="/storage/photos/1/2020-02/IMG_2561.jpg" alt="IRIS SF Speed Phantom" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2563.jpg" alt="IRIS SF Speed Phantom" /></p>
<p>La voile est plus &rsquo;t&ocirc;le&rsquo; que les X et Z, donc moins r&eacute;active au pumping, mais malgr&eacute; tout assez l&eacute;g&egrave;re pour une voile 4 cam fourreau large. Le fourreau est tr&egrave;s large, et le creux marqu&eacute; et tr&egrave;s avanc&eacute;</p>
<p><img src="/storage/photos/1/2020-02/IMG_2411.jpg" alt="IRIS Z Phantom" /></p>
<p>Elle est &eacute;galement moins maniable, mais tr&egrave;s stable et plus cal&eacute;e en vol. Elle d&eacute;gage surtout une &eacute;norme sensation de finesse et de glisse &hellip; tout &agrave; fait impressionnant en terme de sensation dans les molles, on a l&rsquo;impression de ne rien avoir dans les bras, mais &ccedil;a avance tout seul. Elle a tr&egrave;s peu de main arri&egrave;re, et n&eacute;cessite donc un pilotage en finesse pour &eacute;viter de sur-border.</p>
<p>La voile travaille tr&egrave;s bien dans le vent. Elle a une tr&egrave;s l&eacute;g&egrave;re tendance &agrave; tirer sur la main arri&egrave;re dans les rafales, mais objectivement, je n\'ai jamais &eacute;t&eacute; aussi &agrave; l\'aise en foil dans des claques &agrave; 25knt en 6m2 ! Bluffant</p>
<p>Au jibe, le passage des cam se fait en une fois mais demande un petit coup sec. Ca reste tr&egrave;s correct dans cette cat&eacute;gorie de voile, mais cela demande &eacute;videment un peu plus d\'exp&eacute;rience qu\'avec les mod&egrave;les Z et X.&nbsp;</p>
<p><img src="/storage/photos/1/2020-02/IMG_2409.jpg" alt="IRIS SF Speed Phantom" /></p>
<h3>Bilan</h3>
<p>Un petit coup de coeur pour ceux qui naviguent dans le vent soutenu sur plan d\'eau plat, et qui ma&icirc;trisent correctement les manoeuvres !</p>',
'test_equipment' => 'Airtime 125 / F4 Slalom',
'test_duration' => 5,
'test_conditions' => '15-25 knt',
'test_place' => 'La Ciotat',
'created_at' => '2020-04-06 20:13:43',
'updated_at' => '2021-02-08 17:18:36',
),
81 => 
array (
'id' => 85,
'device_id' => 130,
'user_id' => 1,
'title' => 'Trop de glisse',
'body' => '<p>Le foil IRIS Z est le mod&egrave;le freeride. Son cahier des charges est assez simple : voler facilement avec peu de vent et peu de vitesse, &ecirc;tre tr&egrave;s stable en l\'air, &ecirc;tre rassurant avec une vitesse lin&eacute;aire.</p>
<p>Le prototytpe test&eacute; est consitu&eacute; d\'un mat de X, d\'un fuselage de 90, et d\'une aile de race &agrave; corde large.</p>
<p>Nous avons trouv&eacute; une tr&egrave;s grosse glisse, un foil vif et r&eacute;actif, un d&eacute;collage tr&egrave;s pr&eacute;coce. A nos yeux, cette configuration est trop performante pour la cible vis&eacute;e, trop proche du mod&egrave;le X. Ses acc&eacute;l&eacute;rations sont trop importantes et sa vivacit&eacute; trop p&eacute;sente pour rassurer et permettre une navigation en dil&eacute;tente.</p>
<p><img src="/storage/photos/1/2020-02/IMG_2400.jpg" alt="IRIS Z Phantom" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2401.jpg" alt="IRIS Z Phantom" /></p>
<p><img src="/storage/photos/1/2020-02/IMG_2412.jpg" alt="IRIS Z Phantom" /></p>',
'test_equipment' => 'Airtime et Voile Z',
'test_duration' => 1,
'test_conditions' => '10-20 knt',
'test_place' => 'La Ciotat',
'created_at' => '2020-04-06 20:16:50',
'updated_at' => '2020-04-06 20:16:50',
),
82 => 
array (
'id' => 86,
'device_id' => 131,
'user_id' => 1,
'title' => 'La perf avec un jouet !',
'body' => '<p>Cela fait des mois que nous attendions de tester les nouvelles RF Exocet. M&ecirc;me si elle n\'a pas pl&ucirc;t &agrave; tout le monde, la premi&egrave;re version a &eacute;t&eacute; une petite r&eacute;volution en 2018 dans le monde du foil avec pour la premi&egrave;re fois un shape d&eacute;di&eacute; qui tranchait avec les planches polyvalentes. On avait en particuilier d&eacute;couvert un contr&ocirc;le en vol hors du commun, et des rails tr&egrave;s efficaces. Finalement, seule la technicit&eacute; du d&eacute;collage pouvait rebuter. Entre temps, Exocet a propos&eacute; un flotteur beaucoup plus accessible et tr&egrave;s r&eacute;ussi avec la <a href="/devices/board/exocet-freefoil-132-carbone-2019">Freefoil (112 et 132)</a>.</p>
<p>Cette ann&eacute;e, Exocet propose donc une version compl&egrave;tement revue des RF. Le ptogramme est le m&ecirc;me : freerace an 71 et 83 et race en 90 et 100. Par contre, les ingr&eacute;dients et concepts ont beaucoup &eacute;volu&eacute;s. Le shape est caract&eacute;ris&eacute; par</p>
<ul>
<li>une forte compacit&eacute; (mois de 2m de long pour la 71)</li>
<li>un tr&egrave;s gros volume sur le nez pour compenser la taille r&eacute;duite</li>
<li>un pont bomb&eacute; &agrave; l\'avant pour profiter du lift a&eacute;rodynamique, et &eacute;viter les enfournements</li>
<li>un pont assez plat &agrave; l\'arri&egrave;re (moins que sur la RF V1) pour offrir de la puissance et du contr&ocirc;le</li>
<li>un pied arri&egrave;re tr&egrave;s bas pour offrir du contr&ocirc;le et une position plus naturelle</li>
<li>un boitier tr&egrave;s recul&eacute; pour favoriser le pop</li>
</ul>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3355.jpg" alt="" />Bien &eacute;videmment, nous aurions voulu tester la 83 qui sera le coeur de gamme en terme de vente, mais le seul mod&egrave;le sortie de l\'usine est sous les pieds de Julien Quentel. Nous avons donc eu la chance, pour notre part, de pouvoir tester la 71 avant l\'arriv&eacute;e du virus confineur 😜.</p>
<h3>Premier test dans 20knt et houle form&eacute;e</h3>
<p>Premier contact : la flottaison est bien l&agrave; m&ecirc;me si le flotteur semble tr&egrave;s court. On a l&rsquo;impression visuelle que le pied de mat est sur le nez de la planche.&nbsp;Dans les conditions du jour, plut&ocirc;t muscl&eacute;es et avec beaucoup de houle, aucun souci pour d&eacute;coller bien s&ucirc;r.&nbsp;</p>
<h4>Comportement longitudinal</h4>
<p>Imm&eacute;diatement, on d&eacute;tecte un flotteur tr&egrave;s libre, avec tr&egrave;s peu d&rsquo;inertie. La suite de la navigation confirmera cette premi&egrave;re impression. Il faut bien en &ecirc;tre conscient : c\'est &agrave; double tranchant.</p>
<ul>
<li>Pour les pratiquants aguerri, cette absence d\'inertie est un vrai plus, qui permet de r&eacute;agir imm&eacute;diatement dans le clapot ou lors des sautes de vent, et de garder le contr&ocirc;le m&ecirc;me dans les conditions complexe.</li>
<li>Pour un d&eacute;butant, ou un pratiquant moins exp&eacute;riment&eacute;s, cela peut se retourner car le manque d&rsquo;inertie provoque une r&eacute;ponse beaucoup plus vive aux sollicitations, donc tol&egrave;re moins les erreurs. Le flotteur est moins cal&eacute; et tol&egrave;re moins les approximations qu&rsquo;un mod&egrave;le plus lourd.</li>
</ul>
<p>Comp tenu de la cible de la RF, c\'est donc un point tr&egrave;s positif, mais il ne faudra pas tomber dans le m&ecirc;me pi&egrave;ge qu\'avec la RF V1 : ce n\'est pas un mod&egrave;le con&ccedil;u pour d&eacute;buter ... et c\'est d\'autant plus simple que d&eacute;sormais la Freefoil vient combler ce besoin avec efficacit&eacute;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3351.jpg" alt="" /></p>
<h4>Comportement lat&eacute;ral</h4>
<p>En terme de stabilit&eacute; lat&eacute;rale, on sent bien que le flotteur ne fait \'que\' 71 cm de large. Malgr&eacute; tout, le pont plat et la relative largeur sous le pied arri&egrave;re permet de garder du contr&ocirc;le et suffisament de puissance. Comme avec la Freefoil, ce pont plat compense de fa&ccedil;on efficace la moindre largeur.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3360.jpg" alt="" /></p>
<p>De ce fait, le test effectu&eacute; aujourd&rsquo;hui avec un mat de 97 cm, prouve que la combinaison fonctionne. Dans des conditions du jour et avec la houle, on sent quand m&ecirc;me qu\'on est &agrave; la limite de ce point de vue. On sera parfait avec des mats de foil entre 85 et 95cm.</p>
<h4>Touchettes</h4>
<p>En terme de glisse lors des touchettes, je n&rsquo;ai pas &eacute;t&eacute; enthousiasm&eacute; par la glisse lors des touchette &agrave; plat sur l\'arri&egrave;re &hellip; de retour au bord, j\'ai compris d\'o&ugrave; cela venait. J&rsquo;avais un rake visiblement trop faible. Avec ce type de scoop et de forme de car&egrave;ne tr&egrave;s plate, un rake trop faible ne pardonne pas 😉. Sur ce flotteur, il faudra donc veiller &agrave; avoir un rake assez prononc&eacute; (je dirai au minimum 2 degr&eacute;s).</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3354.jpg" alt="" /></p>
<p>En revanche, sur les rails, les touchettes ne provoquent aucun coup de frein. Surtout, malgr&eacute; la compacit&eacute; et la faible longueur de la planche, les touchettes sur l&rsquo;avant se g&egrave;rent sans encombre. Le contact est assez sec, bien loin des flotteur qui pr&eacute;sente un gros V, mais du coup la planche rebondit sur le dos des vagues sans jamais s&rsquo;arr&ecirc;ter. &nbsp;Plut&ocirc;t tr&egrave;s efficace !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3353.jpg" alt="" /></p>
<h3>Manoeuvres</h3>
<p>Lors des man&oelig;uvres pos&eacute;, le volume sur le nez de la planche fait son boulot, et m&ecirc;me le virement de bord ne pose pas de probl&egrave;me. C&rsquo;est un peu plus tendu qu&rsquo;avec une planche de 150L, surtout dans les conditions de houle du jour, mais on reste relativement serein.</p>
<p>Pour le jibe, le plan de pont facilite vraiment la man&oelig;uvre en l&rsquo;air. Entre la forme, et le placement des straps, on a vraiment quelque chose de tr&egrave;s intuitif. Bien &eacute;videmment, la tr&egrave;s faible inertie de la planche permet de moduler la courbe &agrave; loisir, mais il faut un pilote dans l\'avion 😉.</p>
<h3>Deuxi&egrave;me test sur mer plate</h3>
<p><iframe src="https://www.youtube.com/embed/n4TRFALT1Oo?loop=1&amp;mute=1" width="896" height="504" frameborder="0" allowfullscreen=""></iframe></p>
<p>Pour cette 2e sessions, les conditions sont plus conformes &agrave; ce que l\'on aime en foil : vent entre 10 et 20 n&oelig;uds, et mer plate.&nbsp;Avec un plan d\'eau plus simple, c\'est aussi plus facile de cerner les caract&eacute;ristiques de la planche.</p>
<p>On retrouve imm&eacute;diatement le confort du plan de pont et de la position de navigation. On retrouve aussi la vivacit&eacute; de la planche : une sensation de&nbsp;libert&eacute; avec tr&egrave;s peu d\'inertie sur le nez, et effectivement comme on l&rsquo;avait senti la premi&egrave;re fois, en effet de stabilisation moins marqu&eacute; que la moyenne.&nbsp;En contrepartie, la RF71 r&eacute;agit tr&egrave;s vite aux sollicitations et permet de corriger facilement les erreurs ou de s&rsquo;adapter aux sautes de vent.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3356.jpg" alt="" /></p>
<h4>D&eacute;collage</h4>
<p>Cette fois, la conditions irr&eacute;guli&egrave;res permettent de tester le comportement dans les molles. Au d&eacute;collage, la planche est assez bluffante car elle a peu de train&eacute;e. La voile de 5.8 suffit largement &agrave; la propulser hors de l\'eau dans une 12aine de knt. En comparaison avec la Airtime 125 qui est mon &eacute;talon, la diff&eacute;rence est flagrante : cette derni&egrave;re n&eacute;cessite nettement plus de puissance v&eacute;lique. C\'est un gros progr&egrave;s par rapport &agrave; la RF V1, mais elle partage le m&ecirc;me mode de fonctionnement : ce sont des planches que l\'on va faire sortir de l\'eau en "popant" ... c\'est &agrave; dire avec un petit mouvement sec combin&eacute; au pumping gr&eacute;ement et foil, et pas avec une acc&eacute;l&eacute;ration pogressive et un passage par le planning. Encore une fois, c\'est donc une technique r&eacute;serv&eacute;e &agrave; des utilisateurs avertis. Sans cette technique, on pourrait &ecirc;tre d&eacute;cu, et pr&eacute;f&eacute;rer des mod&egrave;les plus traditionnels, avec une longueur de car&egrave;ne plus importante et/ou un arri&egrave;re plus pinc&eacute; et un boitier de foil plus avanc&eacute; (type Starboard Foil 122 et 125, Exocet Freefoil, Horue tiny, Fanatic Sting Ray etc.)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3357.jpg" alt="" /></p>
<h4>Autres sensations</h4>
<p>Lors de ce test o&ugrave; j\'ai altern&eacute; RF71 et Airtime 125, les diff&eacute;rences se confirment. La RF est logiquement en dessous en terme de puissance et de contr&ocirc;le, mais gagne sur le plan de la libert&eacute; et des sensations. Les touchettes sont aussi plus l&eacute;g&egrave;res quand on est sur l&rsquo;avant (et pourtant la Airtime met la barre assez haut).</p>
<p>Lors du jibe, le faible poids sur l&rsquo;avant permet d&rsquo;&eacute;viter que le flotteur ne retombe et il est tr&egrave;s facile de rester en l&rsquo;air m&ecirc;me dans des conditions assez faibles. C&rsquo;est tr&egrave;s coh&eacute;rent avec la petite voile.</p>
<p>Comme on l&rsquo;avait envisag&eacute; dans la houle, la gestion d\'un foil avec mat long ne pose pas de probl&egrave;me m&ecirc;me si on est moins serain qu\'avec la Airtime (80cm de large). Avec la RF, les acc&eacute;l&eacute;rations sont aussi plus vives, et les sensations plus pr&eacute;sentes.</p>
<h3>Bilan</h3>
<p>Au final, cette RF71 est un excellent choix pour ceux qui veulent de la performance sans utiliser une planche volumineuse et large. Le ratio performance / compacit&eacute; est carr&eacute;ment bluffant. J\'ai vraiment pris du plaisir avec ce jouet, et je me languis d\'autant plus de tester la 83 😋</p>
<p>Habituellement, lors des tests comparatifs, je trouve la Airtime 125 plus compacte plus vive que les autres, mais cette fois-ci c&rsquo;est l&rsquo;inverse&hellip; preuve que la RF apporte vraiment quelque chose de nouveau. Je finirai en pr&eacute;cisant, une nouvelle fois, que malgr&eacute; tous ces &eacute;l&eacute;ments positifs, et pense que ce&nbsp;flotteur reste r&eacute;serv&eacute;e &agrave; des pratiquants aguerri, qui ont d&eacute;j&agrave; int&eacute;gr&eacute;s un certain nombre de techniques et d\'automatismes dans le pilotage du foil .. mais pour eux, &ccedil;a va &ecirc;tre un vrai petit bonheur.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3352.jpg" alt="" /></p>',
'test_equipment' => 'Voile IRIS X 6.6 et FoilGlide 5.0 / Foil F4 Slalom',
'test_duration' => 5,
'test_conditions' => '10-20knt, plat et clapot',
'test_place' => 'La Ciotat',
'created_at' => '2020-04-08 14:42:12',
'updated_at' => '2020-04-10 11:56:13',
),
83 => 
array (
'id' => 87,
'device_id' => 132,
'user_id' => 1,
'title' => 'Cure de jeunesse',
'body' => '<p>Une fois n\'est pas cout&ucirc;me, pas de test ici mais juste une pr&eacute;sentation statique. Le virus confineur ne nous a pas laiss&eacute; encore l\'occasion d\'aller sur l\'eau tester le nouveau Vini V2.</p>
<p>Le mod&egrave;le a &eacute;volu&eacute; au niveau de l\'ensemble mat / fusleage, qui pr&eacute;sente une nouvelle go&eacute;m&eacute;trie&nbsp;</p>
<ul>
<li>mat plus droit : cette fois, la qu&ecirc;te vers l\'avant est beaucoup plus r&eacute;duite (quelques cm tout au plus)</li>
<li>mat plus &eacute;pais</li>
<li>fuselage plus &eacute;pais</li>
</ul>
<p>Par contre, aucun changement concernant les ailes et stab, ainsi que la m&ecirc;me longueur de fuselage.&nbsp;</p>
<p>A la mesure, le Vini V2 est beaucoup plus raide en torsion que la V1 (note de 5.29 sur notre &eacute;chelle qui va de 1 &agrave; 10) contre 3.15 pour le Air V1. En flexion, il reste assez souple avec une note de 1.5 / 10 contre 0.0 pour le Vini Air V1. Cette &eacute;volution devrait garantir un meilleur contr&ocirc;le dans le vent. Promis, on v&eacute;rifie tout &ccedil;a d&egrave;s que la mar&eacute;chauss&eacute;e nous lib&egrave;re 😅</p>
<p>Voici quelques photos de cette nouvelle version.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3721.jpg" alt="Horue Vivi V2" /></p>
<p>On remarque nettement le mat plus droit sur cette photo</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3725.jpg" alt="Horue Vivi V2" /></p>
<p>Le nouveau fuselage (ne pas tenir compte du double marquage Pro V2 sur ce proto)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3722.jpg" alt="Horue Vivi V2" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3723.jpg" alt="Horue Vivi V2" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3724.jpg" alt="Horue Vivi V2" /></p>',
'test_equipment' => 'na.',
'test_duration' => 0,
'test_conditions' => 'na.',
'test_place' => 'na.',
'created_at' => '2020-04-10 13:57:22',
'updated_at' => '2020-04-17 06:36:58',
),
84 => 
array (
'id' => 88,
'device_id' => 136,
'user_id' => 1,
'title' => 'L\'originale ré-inventée',
'body' => '<p>Quelques photos, en attandant le test</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3714.jpg" alt="Horue Tini 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3715.jpg" alt="Horue Tini 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3716.jpg" alt="Horue Tini 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3717.jpg" alt="Horue Tini 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3718.jpg" alt="Horue Tini 2020" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-04/IMG_3719.jpg" alt="Horue Tini 2020" /></p>',
'test_equipment' => 'nc.',
'test_duration' => 0,
'test_conditions' => 'nc.',
'test_place' => 'nc.',
'created_at' => '2020-04-17 06:55:35',
'updated_at' => '2020-04-17 06:55:35',
),
85 => 
array (
'id' => 89,
'device_id' => 81,
'user_id' => 11,
'title' => 'JP Foil 120 après 20 sorties',
'body' => '<p>Apr&egrave;s 20 sessions et 460 km, un petit CR :&nbsp;</p>
<h3>D\'abord les chiffres :</h3>
<p>Mill&eacute;sime : 2019&nbsp;</p>
<p>Date d\'acquisition : 04/12/2019 (occasion) Prix d\'achat : 990 &euro;</p>
<p>Total sessions : 20&nbsp;</p>
<p>Vent moyen : 14.82 nds&nbsp;</p>
<p>Dur&eacute;e totale : 26h55min&nbsp;</p>
<p>Distance totale : 460.6 km</p>
<p>Vitesse Max : 24.50 nds</p>
<p>Distance Max : 55.00 km</p>
<p>Vitesse moyenne sur 1h : 16.30 nds</p>
<p>Vitesse sur 10s : 24.00 nds</p>
<p>Alpha 500 : 19.10 nds &lt;/h6&gt;</p>
<h3>Ressenti global</h3>
<p>Avant ce flotteur, j\'ai eu en foil : Tiga HX-115 / RRD H-Fire / NoveNove 125. Je ne m\'en plaignais pas... Notamment la RRD qui est une tr&egrave;s bonne planche.</p>
<p>Gr&acirc;ce &agrave; la JP, j\'ai &eacute;normement progress&eacute; dans le domaine du plaisir... On se sent bien dessus ! Un feeling partag&eacute; avec une planche de FSW et un Kart : Facilit&eacute;, confort mais en m&ecirc;me temps r&eacute;activit&eacute; et nervosit&eacute; !&nbsp;</p>
<h3>Performances</h3>
<p>Niveau performance pure, je ne pense pas que ce soit son cr&eacute;neau (ni le mien), il est fort probable qu\'en repassant sur la RRD H-Fire je d&eacute;passerais mes Vmax, ma progression actuelle &eacute;tant plus li&eacute;e &agrave; moi qu\'&agrave; l\'&eacute;quipement. (Mais gr&acirc;ce &agrave; l\'&eacute;quipement tout de m&ecirc;me)</p>
<p>Cependant, on peut noter qu\'en condition 15-25 noeuds entre les bou&eacute;es, je fais jeu &eacute;gal avec les slalomeurs moyens, ce qui reste honorable et surtout : ce qui apporte un plaisir non n&eacute;gligeable !&nbsp;&nbsp;</p>
<p>Du coup, niveau performance "manoeuvre" : Wahou !&nbsp; J\'ai un taux de r&eacute;ussite aux air-jibe tr&egrave;s proche de 100% ... Les rat&eacute;s sont plus dus aux conditions m&eacute;t&eacute;os qu\'autre chose. Les touchettes lat&eacute;rales ne se font pas sentir... Et les amerissages forc&eacute;s avec l\'amplifier tr&egrave;s corrects. Avec le Bullet un peu moins mais un calage du rake va am&eacute;liorer &ccedil;a !&nbsp;</p>
<p>Lors d\'une erreur au jibe, la planche reste en vol et on rattrape l\'ensemble sans difficult&eacute; !&nbsp;</p>
<h3>R&eacute;glages</h3>
<p>Je ne suis pas un pro des r&eacute;glages...</p>
<p>Niveau straps, j\'&eacute;tais initialement sur :&nbsp;</p>
<ul>
<li>&nbsp;Straps avants Avant Int&eacute;rieur</li>
<li>&nbsp;Straps arri&egrave;res Milieu Exterieur</li>
</ul>
<p>D&eacute;sormais je suis sur :&nbsp;</p>
<ul>
<li>&nbsp;Straps avants Milieu Exterieur</li>
<li>&nbsp;Straps arri&egrave;res Milieu Exterieur</li>
</ul>
<p>PDM, au milieu en plage basse &agrave; moyenne, au 2/3 en avant en plage haute.&nbsp;</p>
<h3>Finitions</h3>
<p>On aime ou on n\'aime pas... Mais personnelement je suis assez fan de la version FWS 2019 !&nbsp;&nbsp;</p>
<p>Pont rouge vif avec d&eacute;co violete, blanche et orange fluos, car&egrave;ne jaune vif avec les veines du bois apparentes... C\'est tr&egrave;s r&eacute;ussi !&nbsp; Ma planche a un petit d&eacute;faut de peinture, des bulles au niveau du rails... Qui n\'&eacute;voluent pas. Et de la peinture est parti au niveau du boitier avec l\'appui sur car&egrave;ne du Zeeko.&nbsp;</p>
<p>Elle a pris une ou deux chutes et aucune traces... J\'ai fais une protection du nez en carbone mais c\'est plus pour les risques &agrave; terre que sur l\'eau.&nbsp;</p>',
'test_equipment' => 'JP FWS 2019 120 // Zeeko Amplifier - Aile XLW et Race / Zeeko Bullet - Aile 950 et Race 540 //  Voiles Point-7 ACX 4,7  5,8 et 7,0',
'test_duration' => 27,
'test_conditions' => 'Vent moyen 15 noeuds, testée de 10 à 30 noeuds - Eau plate',
'test_place' => 'Pierrelatte',
'created_at' => '2020-04-20 17:44:31',
'updated_at' => '2020-04-20 18:30:41',
),
86 => 
array (
'id' => 90,
'device_id' => 16,
'user_id' => 129,
'title' => 'Glisse, rigidité et puissance.',
'body' => '<p>Apres quelques ann&eacute;es de foil,&nbsp; des d&eacute;buts en Horue puis un passage de&nbsp; 2 ans sur Select pro foil (version standard puis HM) et Elix, j\'ai trouv&eacute; un super combo avec un foil F4 Race et une Starboard Foil 150, tout &ccedil;a sur les conseils avis&eacute;s de l\'ami Eric de GlissAttitude.&nbsp;</p>
<p>Ce foil c\'est de la bombe... un compromis parfait entre glisse et puisance. Tr&egrave;s evolutif gr&acirc;ce aux 3 ailes, 3 fuselages et 2 stabs. Cela permet de jouer la gagne en free-race avec une vitesse de dingue (30.91 nds en pointe en ce qui me concerne) ou de se faire plaisir en naviguant Freeride dans du clapot ou du vent plus fort.</p>
<p>Combin&eacute; &agrave; mes trois Skyskape 2019 5.8, 7.4 et 9.0 on couvre la plage 8 / 25 nds en rafale. Au dela, je gr&eacute;e mon Oxygen 4.6 et &ccedil;a alonge encore la plage d\'utilisation.&nbsp;Le foil est d\'une stabilit&eacute; hors pair et le jeu de cales fourni par GlissAttitude permet d\'affiner encore les r&eacute;glages pour une navigation sereine bien cal&eacute;.</p>
<p>Franchement, c\'est une espece d\'hybride entre le Select, roi de la glisse mais un peu souple et le Taaroa super rigide mais moins fluide. Le fuselage de 120 alli&eacute; &agrave; l\'aile de 1000 est une machine &agrave; remonter au pr&egrave;s dans le light et le fuselage de 100 avec l\'aile de 700 ou 900 sont parfait pour une navigation type freeride.</p>
<p>La finition est nickel dans une housse tres bien finie. Seul petit bemol...comme tous les fuselages alu, ils ont tendance &agrave; la corrosion anodique. Le F4 ne d&eacute;roge pas &agrave; la regle mais vieillit toutefois beaucoup mieux qu\'un select...</p>
<p>Si vous cherchez un foil stable, fluide et polyvalent &agrave; tendance freerace, le F4 est fait pour vous...il reste juste &agrave; en trouver un..."Allo Eric..."</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
'test_equipment' => 'Starboard foil 150, Loft Skyscape 9.0, 7.4 et 5.8',
'test_duration' => 40,
'test_conditions' => '8 à 25 nds',
'test_place' => 'La Ciotat',
'created_at' => '2020-04-21 18:04:30',
'updated_at' => '2020-04-22 06:21:50',
),
87 => 
array (
'id' => 91,
'device_id' => 82,
'user_id' => 66,
'title' => 'Bilan FOIL 122 flex balsa après environ 80 sessions',
'body' => '<p>Moi : pratique du Windfoil depuis 10 mois et environ 80 sessions, pratique du windsurf (vagues, slalom, formula etc...) depuis plus de 40 ans.</p>
<p>Mes r&eacute;glages : footstraps assez avanc&eacute;s et excentr&eacute;s pour les arri&egrave;res, pied de mat &agrave; 1/3 avant.</p>
<p>Bilan apres 10 mois de navigation avec cette planche.</p>
<p>Foils utilis&eacute;s: Staboard Alu mat de 95 cm et fuselage de 75cm puis Lokefoil LK1 2020 mat de 92 cm</p>
<p>Accessibilit&eacute; : planche facile , tr&egrave;s accessible &agrave; un debutant, d&eacute;part au planing rapide, 2 &agrave; 3 coups de pumping et le vol arrive tr&egrave;s vite, la planche ne colle pas &agrave; l\'eau.</p>
<p>Les touchettes sont douces et les catapultes assez rares.</p>
<p>Le jibe en vol n\'est pas tr&egrave;s simple pour moi au contraire du virement de bord qui est facile pour mon niveau de pratique .</p>
<p>Le flotteur navigue &agrave; plat et la contre gite n\'est pas son fort, le cap est assez moyen avec mon mat&eacute;riel.</p>
<p>Son point est la possibilit&eacute; de passer sur la m&ecirc;me planche des voiles de 4,5 m2 &agrave; 7.4 m2 suivant les conditions . La voile id&eacute;ale ou l\'&eacute;quilibre est le plus sympa se situe entre 5.2 et 6 m2.</p>
<p>Son GROS DEFAUT &agrave; mes yeux : son EXTREME fragilit&eacute;... Elle marque pour un oui ou pour un non : traces de wishbone (enfoncements) lors du relev&eacute; au tire veille quand le wish prends appui sur le flotteur, enfoncement ou perforation du pont avec la boucle de harnais lorsqu\'on remonte sur la planche. Quant au nez, apres quelques catapultes, je l\'ai r&eacute;par&eacute; plusieurs fois y compris pour des gamelles plut&ocirc;t soft...</p>
<p>La construction est beaucoup trop l&eacute;g&egrave;re &agrave; mes yeux. C\'est la principale raison qui va me pousser &agrave; changer de mod&egrave;le, et&nbsp;la prochaine sera plus large (87 cm), plus volumineuse (150l) mais surtout j\'esp&egrave;re plus solide.</p>
<p>En conclusion &nbsp;: c\'est une tr&egrave;s bonne planche en utilisation freeride si l\'on met de cot&eacute; une construction trop fragile.</p>',
'test_equipment' => 'voiles de vagues combat 4.5 m2 à IRIS X 7.4 M2',
'test_duration' => 100,
'test_conditions' => 'vents de 8 nds à 25 nds rafales 30 nds',
'test_place' => 'Arcachon',
'created_at' => '2020-05-10 09:20:55',
'updated_at' => '2020-05-23 12:24:26',
),
88 => 
array (
'id' => 92,
'device_id' => 141,
'user_id' => 1,
'title' => 'En plein dans le mille',
'body' => '<p>En montant sur cette RF81, le moins que l\'on puisse dire, c\'est que l\'on est en droit de se poser pas mal de question compte tenu du non conformisme du shape. Je suis toutefois parti sans appriori, car avec Exocet, on est habitu&eacute; &agrave; des solutions innovantes, et ils nous ont rarement d&eacute;&ccedil;us.</p>
<p>Comme avec la RF71, le premier contact sur l\'eau est visuellement &eacute;tonnant pour ne pas dire d&eacute;rangeant. Avec une dimension de 2m environ, c\'est court devant le pied de mat, au regard de la flottaison \'facile\'. On a bien les 160L et elle porte m&ecirc;me ma 9m sans aucun probl&egrave;me.</p>
<h3>Envol</h3>
<p>Les premiers bords se sont donc faits dans le light (grand max 8knt de vent et en 9m2, foil de race avec aile de 1000). Dans ces conditions, le d&eacute;collage demande un pumping &eacute;videmment &eacute;nergique et coordonn&eacute; avec les pieds. Moyennant ceci, le d&eacute;collage est extr&ecirc;mement prompt. On arrive &agrave; faire poper la planche en quelques m&egrave;tres. A ce niveau, le comportement de la planche est assez diff&eacute;rent de celui des grosses planches de race. Ici, on per&ccedil;ois nettement que l\'arri&egrave;re s\'enfonce l&eacute;g&egrave;rement plus dans l\'eau, en donnant naturellement de l\'incidence au foil. Du coup, on d&eacute;cole avec moins de vitesse, mais il faut continuer &agrave; pomper une fois en l\'air pour faire acc&eacute;l&eacute;rer la planche. En contre partie, la train&eacute;e de la car&egrave;ne &eacute;tant plus faible qu\'avec les mod&egrave;les tr&egrave;s large, le pumping est moins dans la puissance, mais plus dans la dynamique. Pour faire un parall&egrave;le, c\'est un peu comme un cycliste qui choisirait de tourner les jambes, l&agrave; ou un autre serait sur la plaque.&nbsp;</p>
<p>Je pr&eacute;cise que malgr&eacute; l\'arri&egrave;re assez fin (en &eacute;paisseur), et le volume tr&egrave;s g&eacute;n&eacute;reux sur l\'avant du flotteur, j\'ai tout de m&ecirc;me syst&eacute;matiquement lanc&eacute; le d&eacute;collage avec le pied avant dans le strap. Par contre, impossible &eacute;videmment de chausser le pied arri&egrave;re avant de voler.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/IMG_4141.jpg" alt="Exocet RF 81 2020" /></p>
<h3>Dans le light</h3>
<p>En vol, la premi&egrave;re sensation surprenante est la relative libert&eacute; de la planche, en comparaison avec les mod&egrave;les que l\'on a l\'habitude d\'utiliser en 9m (Starboard 150 et 144, planches de race). Pour autant, l\'ensemble reste malgr&eacute; tout &eacute;quilibr&eacute;. Lors des premiers bords, effectu&eacute;s dans un vent tr&egrave;s l&eacute;ger, j\'ai &eacute;t&eacute; oblig&eacute; plus qu\'&agrave; l\'habitude de sortir le pied du strap arri&egrave;re pour venir le positionner &agrave; mi chemin entre les 2 straps. C\'est une position que j\'affectionne dans le super light, car cela permet d\'&eacute;viter un d&eacute;hanchement et une rotation du corps. &nbsp;Sur cette RF, j\'y ai eu recours un peu plus souvent car le strap arri&egrave;re est assez rentr&eacute; et tr&egrave;s en arri&egrave;re. Nous verrons plus tard que cela a des vrais avantages par aileurs.</p>
<p>C&ocirc;t&eacute; touchettes, comme avec la RF71, on est quasi dans ce qui se fait de mieux en la mati&egrave;re. La planche rebondit litt&eacute;ralement sur son avant bien dodus, et que ce soit &agrave; plat ou sur le rail, le ralentissement est tr&egrave;s faible. De ce point de vue, la nouvelle s&eacute;rie des RF repousse donc encore nos r&eacute;f&eacute;rences. Il faut vraiment venir poser l\'arri&egrave;re de fa&ccedil;on brutale pour que le ralentissement se fasse r&eacute;&eacute;llement sentir.&nbsp;</p>
<p>Lors des manoeuvres, le plan de pont tr&egrave;s simple et assez plat fait merveille. Pas de surprise , les jibes en l\'air rentrent rapidement car la prise en pain est extr&ecirc;mement facile. Il faudra juste adapter un peu le timing du geste au fait que la planche a moins d\'inertie que la moyenne.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/IMG_4132.jpg" alt="Exocet RF 81 2020" /></p>
<h3>En mode slalom</h3>
<p>Pour la suite du test, je suis pass&eacute; en 7m2 avec un vent un peu plus soutenu entre 10 et 18knt ... et surtout un clapot beaucoup plus form&eacute;. Cette fois, on est clairement pile dans la cible de ce mod&egrave;le, et on d&eacute;couvre tout son potentiel. Le d&eacute;collage fait appel aux m&ecirc;mes techniques: un pumping efficace et la planche pope toute seule. En mode statique, par contre, c\'est un peu plus poussif que la moyenne, mais ceux qui n\'ont pas cette technique pourront s\'int&eacute;resser &agrave; l\'excellente Freefoil de la marque. Cette derni&egrave;re s\'est en effet rapidement impos&eacute;e comme l\'une des planches n&eacute;cessitant de moins de puissance v&eacute;lique pour acc&eacute;lerer, un peu &agrave; l\'image des Horue Tiny.&nbsp;</p>
<p>Dans le clapot, la compacit&eacute; de la planche et sa plus faible inertie permettent de g&eacute;rer plus facilement les dos d\'&acirc;ne. Pour autant, cette 81 est plus cal&eacute;e que la 71 ... juste ce qu\'il faut ... et un pratiquant de bon niveau pourra r&eacute;llement se mettre en pilote automatique dans certaines phases de vol. Et surtout, en mettant cette fois le pied arri&egrave;re dans le strap, on est parfaitement &eacute;quilibr&eacute; ... et quel contr&ocirc;le ! On a du mal &agrave; imaginer quand on va se faire bouger, car ce pied arri&egrave;re assez bas offre vraiment un appui confortable et tr&egrave;s rassurant. On retrouve l&agrave; l\'un des gros points fort de la premi&egrave;re RF : un contr&ocirc;le en l\'air hors du commun.&nbsp;</p>
<h3>Association</h3>
<p>En poussant les tests un peu plus loin ce WE, nous avons eu l\'occasion d\'utiliser la RF dans d\'autres associations et il ressort 2 points int&eacute;ressants</p>
<ul>
<li>Cette RF fonctionne bien mieux avec des foils plut&ocirc;t pied avant, c\'est &agrave; dire sur lesquels la pouss&eacute;e de l\'aile est tr&egrave;s en avant (F4, Starboard, Zeeko Bullet, Alpine 2019, LK1 2020 par exemple)</li>
<li>Sur ces planches tr&egrave;s compactes avec peu d\'inertie, le choix voile a une plus grosse influance sur le comportement qu\'avec d\'autres floteurs. Aisni, j\'&eacute;tais tr&egrave;s bien cal&eacute; avec les voiles d&eacute;di&eacute;es foil du test (Hypeglide 2, IRIS X). Par contre, c\'&eacute;tait beaucoup moins agr&eacute;able avec une voile de freeride \'standard\'. Encore une fois, ceci n\'est pas choquant vu la cible vis&eacute;e de pratiquants plut&ocirc;t aguerris.</li>
</ul>
<h3>Bilan</h3>
<p>Si on fait un bilan g&eacute;n&eacute;ral de cette RF, &nbsp;2020 on a clairement une planche 100% nouvelle, qui n\'a r&eacute;ellement plus rien &agrave; voir avec le premier mod&egrave;le. Elle ne partage qu\'une originalit&eacute; : encore une fois, Exocet ne s\'est pas content&eacute; d\'appliquer des recettes connues : ils ont innov&eacute; &agrave; de multiples niveaux ... et &ccedil;a fonctionne &agrave; merveille. C\'est donc une vision tr&egrave;s moderne et non conformiste de la board d&eacute;di&eacute;e ... et il y a fort &agrave; parier qu\'elle restera une des plus innovantes de la saison avec le prochaine Phantom IRIS X.</p>
<p>Sur ce mod&egrave;le, Exocet a r&eacute;ussi &agrave; marier le contr&ocirc;le exceptionnel de la RF version 1, en y ajoutant un c&ocirc;t&eacute; joueur tr&egrave;s int&eacute;ressant et un d&eacute;collage ultra efficace pour les pratiquants avertis. Cerise sur le gateau, c\'est la premi&egrave;re planche aussi compacte sur laquelle nous avons r&eacute;ussi &agrave; r&eacute;ellement exploiter une voile d&eacute;di&eacute;e de 9m2 sans &ecirc;tre tordu en navigation ... ce qui confirme sa polyvalence. Apr&egrave;s une RF V1 qui commen&ccedil;ait vraiment &agrave; accuser le coup au milieu de mod&egrave;les plus r&eacute;cent, la r&eacute;action d\'Exocet est largement &agrave; la hauteur de leur r&eacute;putation : un tr&egrave;s joli coup pile dans le mille. Comme souvent, il faudra bien entendu soigner les associations pour tirer 100% du plaisir qu\'elle est capable d\'offrir.&nbsp;</p>',
'test_equipment' => 'Foil F4, Voile Hyperglide 2 9m et IRIS X 7,4',
'test_duration' => 4,
'test_conditions' => 'Vent 8 > 18 Knt, plat puis clapot formé',
'test_place' => 'Le Jaï',
'created_at' => '2020-05-23 06:08:01',
'updated_at' => '2020-05-25 09:47:59',
),
89 => 
array (
'id' => 93,
'device_id' => 11,
'user_id' => 179,
'title' => 'Phantom Iris F V1',
'body' => '<p>J\'ai eu ce foil pendant 4 mois apr&egrave;s 2 ans de pryde alu rose puis zeeko alu, je rejoins compl&eacute;tement l\'avis d\'Eric</p>
<p>Je p&egrave;se 64Kg, navigue ou sur le bassin d\'Arcachon avec un plan d\'eau parfois compliqu&eacute;, clapot serr&eacute; et crois&eacute; li&eacute; au vent contre courant et bancs de sables, ou sur les grands lacs. Des bords de plusieurs kilom&egrave;tres, pr&egrave;s, travers, largue.</p>
<p>Ses allures confortables &eacute;taient pour moi le pr&egrave;s et le tr&egrave;s grand largue pied arri&egrave;re sorti du strap, sans &ecirc;tre au harnais. Au pr&egrave;s il s\'av&egrave;re tr&egrave;s agr&eacute;able, s&eacute;curisant mais l oscillation du mat dans la petite houle serr&eacute;e est surprenante.</p>
<p>Il vole tr&egrave;s t&ocirc;t, et cela se ressent aussi au tr&egrave;s grand largue et jibe o&ugrave; il maintient facilement le vol</p>
<p>En revanche impossible de le plaquer sereinement au travers dans le vent &eacute;tabli, il cherche l\'acc&eacute;l&eacute;ration mais je me trouvais "d&eacute;bord&eacute;", sans doute une aile trop puissante pour mon gabarit, mes choix de de mat&eacute;riel, voile freeride non sp&eacute;cifique 6 et 7 &agrave; 2 cams, voir vague 5.3, "petite planche" horue slant 115 de 2mx87cm, seulement 66cm aux straps arri&egrave;res</p>
<p>En comparaison je suis pass&eacute; sur le pryde F4 evo 2019 full carbone qui correspond beaucoup plus &agrave; mon programme, de longues ballades, grosse plage d\'utilisation, surtout le haut de la plage, bien plus rigide, excellente glisse, et z&eacute;ro prise de t&ecirc;te en r&eacute;glage / choix d\'aile, on r&egrave;gle une fois pour toute l\'incidence du stab et hop, quelque soit le vent, la voile... Beaucoup de fun &agrave; toutes les allures.</p>
<p>L\'iris F est peut &ecirc;tre plus indiqu&eacute; pour les r&eacute;gates et sans doute les gabarits plus lourd et/ou avec de grandes toiles d&eacute;did&eacute;es foil, planches tr&egrave;s larges de l\'arri&egrave;re</p>',
'test_equipment' => 'Horue Slant 115, simmer 2 XC 6 et 7, vague 5.3',
'test_duration' => 20,
'test_conditions' => 'Du plan d\'eau lisse au plan d\'eau très clapoteux, de 10 à  20 noeuds',
'test_place' => 'Arcachon',
'created_at' => '2020-05-27 08:30:14',
'updated_at' => '2020-05-27 08:30:14',
),
90 => 
array (
'id' => 94,
'device_id' => 146,
'user_id' => 1,
'title' => 'Easy',
'body' => '<p>Apr&egrave;s un rapide test en windfoil sans surprise avec le GA Mach 1, nous avons test&eacute; la b&ecirc;te en Wing .. quelle facilit&eacute; ! Pari r&eacute;ussi ... haut la main 😀</p>
<p>On retrouve un concept proche de la Zeeko Ariwave, en encore plus accessible.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_5070.jpg" alt="Magic" /></p>
<p>Thibaut en action :</p>
<p><iframe src="https://www.youtube.com/embed/oEjiLzwTGQI" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>',
'test_equipment' => 'Foil RRD',
'test_duration' => 3,
'test_conditions' => '10-15 knt',
'test_place' => 'Serre poncon',
'created_at' => '2020-06-23 20:29:33',
'updated_at' => '2020-06-23 20:38:31',
),
91 => 
array (
'id' => 95,
'device_id' => 147,
'user_id' => 1,
'title' => 'Des vraies perf Up&Down faciles !',
'body' => '<h3>Montage</h3>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_5063.jpg" alt="Alpine A1 Race" /></p>
<p>Comme d\'habitude avec Alpinefoil, la finition est tout &agrave; fait exemplaire. Le A1 race ne fait pas exception et le magnifique fuselage de 125 est une petite oeuvre d\'art de l\'industrie fran&ccedil;aise. L\'ajustement mat / fuselage est plut&ocirc;t tr&egrave;s serr&eacute; d\'origine. On ne peux que vous sugg&eacute;rer de suivre notre <a href="https://marseille.glissattitude.com/blog/windfoil-montage.html">tuto montage</a> pour &eacute;viter d\'ab&icirc;mer pr&eacute;matur&eacute;ment les inserts et la visserie.&nbsp;</p>
<p>On retrouve &eacute;galement, comme sur les foils pr&eacute;c&eacute;dents, le syst&egrave;me de cales qui pemet &agrave; la fois de r&eacute;gler les incidences, et d\'isoler le carbone et l\'aluminium. On veillera entre autre &agrave; bien utiliser une cale entre l\'aile et le fusleage, m&ecirc;me si il est cal&eacute; &agrave; 0 (r&eacute;glage que nous conseillons).</p>
<p>Pour ce premier essai, je suis parti sur la nouvelle aile regata 850, avec une cale de stab de -1.1.&nbsp;</p>
<h3>Premier contact</h3>
<p>Lors de cet essai, le vent souflait entre 15 et 18knt. J\'&eacute;tais toil&eacute; en 6m2, donc une voile plut&ocirc;t petite pour un foil de race. Comme on pouvait s\'y attendre, la petite voile ne produisait pas suffisamment d\'appui pour plaquer le foil, et les 2 premiers bords se sont fait plut&ocirc;t en position "haute" ... &agrave; la limite de sortir de l\'eau malgr&eacute; une position tr&egrave;s en avant.&nbsp;</p>
<p>Retour au bord direct pour chausser une cale de stab de -1.8, et c\'est reparti. Cette fois, l\'&eacute;quilibre longitudinal est beaucoup plus facile &agrave; g&eacute;rer, et la stabilit&eacute; lat&eacute;rale s\'am&eacute;liore nettement en volant moins haut.</p>
<h3>Revue de sensation</h3>
<p>Bien &eacute;videmment, avec 125cm de fuselage, la stabilit&eacute; longitudinale est imp&eacute;riale. Pour autant, un tel foil n&eacute;cessite une bonne technique car la pouss&eacute;e est tr&egrave;s pied avant. Lorsqu\'on est habitu&eacute; &agrave; ce type d\'&eacute;quilibre (en mettant du poids dans la voile), c\'est un r&eacute;gal en particulier aux allures pr&egrave;s serr&eacute; et grand largue. Pour les pratiquants moins exp&eacute;riment&eacute;s, qui ont tendance &agrave; s\'appuyer sur le pied arri&egrave;re, il vaudra mieux s\'orienter vers des mod&egrave;les plus standards comme le Sport ou le Revo.</p>
<p>D&egrave;s les premiers bords, et une fois le foil r&eacute;gl&eacute;, 2 &eacute;l&eacute;ments marquent une &eacute;volution majeure en comparaison avec le A1 carbone pr&eacute;c&eacute;dent</p>
<ul>
<li>la stabilit&eacute; lat&eacute;rale fait un bon en avant avec le nouveau mat haut module plus raide. Cette fois, on n\'a pratiquement plus de sensation d\'&eacute;lasticit&eacute;, et le contr&ocirc;le fait logiquement un gros progr&egrave;s. Sur ce point, le A1 Race devient comp&eacute;titif avec la pluart des meilleurs foils haut de gamme du march&eacute;. Seuls quelques mod&egrave;les de course ultimes font encore mieux.</li>
<li>la sensation de glisse est compl&egrave;tement transform&eacute;e avec les nouvelles ailes regata et le mat fin. L&agrave; &eacute;galement, on ne reconnait plus le A1 &eacute;quip&eacute; de son aile ULW900, et pour faire mieux, il va falloir aller chercher des mod&egrave;les de course purs et durs.</li>
</ul>
<h3>Allures</h3>
<p>En terme de cap, et moyennant encore une fois une technique suffisament aboutie, le A1 race excelle avec un appui franc, et m&ecirc;me surprenant de facilit&eacute; dans les conditions tr&egrave;s light.</p>
<p>Sur les descentes tr&egrave;s abatues, l&agrave; aussi, le A1 Race est assez magique car l\'&eacute;norme portance des ailes Regata permet de voler &agrave; basse vitesse, et d\'enchainer les jibe sans touchettes, m&ecirc;me lorsque le vent est tr&egrave;s l&eacute;ger. Sur la trace ci dessous, r&eacute;alis&eacute;e dans un vent moyen de l\'ordre de 9-10 knt, le A1 race m\'a permis de faire pour la premi&egrave;re fois la descente Savine &gt; Embrun sans toucher une seule fois la car&egrave;ne sur l\'eau ! ... Cela souligne la facilit&eacute; du foil.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-06/alpinerace.jpg" alt="Alpine Race " /></p>
<p>Au travers, le A1 Race est bien &eacute;videmment moins &agrave; l\'aise que son homologue sport car le fuslage de 125 est plus encombrant et plus puissant. Il ne faut donc pas h&eacute;siter &agrave; vite descendre en taille d\'aile pour continuer &agrave; l\'exploiter sur cette allure. En contre partie, le mat plus raide permet de garder du contr&ocirc;le, et j\'avoue que je serais curieux de mettre le fuselage de 100 sur le mat Race pour jouer avec au travers.</p>
<h3>Tol&eacute;rence</h3>
<p>A ce stade, je vais insister sur la tol&eacute;rance des nouvelles ailes regata 850 et 1100. Elles se d&eacute;marquent objectivement de la concurrence par un d&eacute;crochage tr&egrave;s tardif pour une telle glisse. Dit autrement, on peut presque voler aussi lentement qu\'une aile &agrave; large corde, mais avec une glisse incomparable. Si on cumule ceci avec la portance tr&egrave;s pied avant et la stabilit&eacute; longitudinale tr&egrave;s forte, le A1 race devient un champion du jibe en l\'air. Il rejoint ainsi quelques foils derni&egrave;re g&eacute;n&eacute;ration comme le Zeeko Bullet dans le club ferm&eacute; des foils o&ugrave; il faut faire une vraie erreur pour poser lors du jibe. De la m&ecirc;me fa&ccedil;on, ls ailes Regata sont assez tol&eacute;rentes dans leur plage maxi : m&ecirc;me lorsque l\'on navigue avec une aile un peu grande, il est possible de g&eacute;rer si on prend soi, d\'adapter la cale de stab.</p>
<p>Au sujet des cales, nous avons navigu&eacute; dans plusieurs conditions (medium, light) et abec diff&eacute;rents mat&eacute;riels ( voiles entre 6m et 9m, diff&eacute;rents flotteurs). A chaque fois, nous avons utilis&eacute; des cales d\'incidence n&eacute;gative (fournies par Alpinefoil) .. y compris dans le light. Donc a moins d\'utiliser un flotteur long et lourd, &nbsp;vous ne ferrez problement pas usage des cales positives.</p>
<h3>D&eacute;collage</h3>
<p>Il nous a fallu attendres des conditions plus l&eacute;g&egrave;res pour juger des capacit&eacute;s du A1 Race dans le light. Le A1 muni de la Regata 1100 et d\'une voile de 9m nous a permi de voler dans moins de 7knt ! Comme pour le AirJibe, on profite de la capacit&eacute; des ailes Regata d\'offrir de la portance &agrave; faible vitesse. C\'est donc &agrave; la fois efficace mais aussi encore une fois bien moins techniques qu\'avec certains autres foils de race.</p>
<p>A ce niveau, le A1 race se paye le luxe de faire mieux que le Starboard Race, et d\'arriver presque au niveau du Loke LK Race (notre r&eacute;f&eacute;rence absolue sur ce crit&egrave;re). La performance est d\'autant plus remarquable qu\'il ne fait sans contrepartie de technicit&eacute;.&nbsp;</p>
<h3>Bilan</h3>
<p>Ce test du ALpinefoil A1 race m\'a laiss&eacute; une impression ultra positive. D\'une part les progr&egrave;s par rapport au A1 sont impressionnants en terme de glisse et de stabilit&eacute;, et d\'autre part cette &eacute;volution permet au vaisseau amiral de Alpinefoil de venir bousculer la hi&eacute;rarchie de la cat&eacute;gorie free-race. Pour r&eacute;sumer, le A1 race est un foil id&eacute;al pour une pratique de navigation up&amp;down (exploration du plan d\'eau) avec des performances sans doute un peu en retrait par rapport aux foils de course ultimes, mais avec une tol&eacute;rence bien sup&eacute;rieure. C\'est l&agrave; toute sa force car il permettra &agrave; des amateurs &eacute;clair&eacute;s et s\'approcher de tr&egrave;s pr&egrave;s des capacit&eacute;s des mod&egrave;les des pros, tout en naviguant en mode d&eacute;tente, et en acceptant quelques erreurs du pilote. &nbsp;Il n\'en reste pas moins un foil r&eacute;serv&eacute; &agrave; des pratiquants aguerris (ne comptez pas d&eacute;buter avec ce dernier !) qui sauront g&eacute;rer et tirer partie une pouss&eacute;e "pied avant", et auront le bon gout de l\'associer avec des &eacute;l&eacute;ments coh&eacute;rents (planche d&eacute;di&eacute;e assez large autour de 85mini , grande voile &agrave; camber d&eacute;di&eacute;e etc.)</p>
<p>&nbsp;</p>
<p><iframe src="https://www.youtube.com/embed/gvu7m6lrZqQ" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>',
'test_equipment' => 'Phantom IRIS X board, Proto Tiaki',
'test_duration' => 6,
'test_conditions' => '7-20 knt',
'test_place' => 'Serre Ponçon',
'created_at' => '2020-06-26 19:56:50',
'updated_at' => '2020-07-16 06:01:15',
),
92 => 
array (
'id' => 96,
'device_id' => 148,
'user_id' => 1,
'title' => 'Un jouet',
'body' => '<p>Avec l\'exp&eacute;rience des nombreux tests de l\'Exocet Freefoil 112, et compte tenu des similitudes des 2 flotteurs, nous avons tr&egrave;s rapidement trouv&eacute; les bonnes associations avec le JP Freefoil. Les tests ont donc &eacute;t&eacute; men&eacute;s avec 4 foils</p>
<ul>
<li>Le GA Mach 1 (Moses Vento 85)</li>
<li>Le Fanatic Flow 900</li>
<li>Le Taaroa noe 80</li>
<li>NP Glide Wind S</li>
</ul>
<p>En terme de gr&eacute;ements, nous avons utilis&eacute;</p>
<ul>
<li>Phantom IRIS Z en 5.8</li>
<li>Severne FoilGlide en 5.0</li>
<li>Duotone Super Hero en 4.5&nbsp;</li>
</ul>
<p>Comme d\'habitude, on rappelle que la bonne association est la cl&eacute; d\'un combo agr&eacute;able dans une large plage d\'utilisation. Ne n&eacute;gligez donc pas cette phase. Si on prend l\'exemple de cette Freefoil 115, nous n\'avons pas d&eacute;pass&eacute; des voiles de 6m2 ... tout simplement car c\'est inutile et contre productif. Si vous n\'avez pas la technique ou le gabarit pour naviguer avec des petites voiles ... m&ecirc;me dans le light, passez &agrave; la 130 qui pourra accepter de la 6,8m2. Par contre, avec 78kg et de la technique, naviguer dans 12knt avec cette 115 et 5.8 est tout &agrave; fait possible comme on verra.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-07/IMG_6157.jpg" alt="" />&nbsp;</p>
<h3>D&eacute;collage</h3>
<p>La freefoil fait 70cm de large, et profite ainsi d\'une excellente glisse. Elle demande assez peu de puissance v&eacute;lique pour acc&eacute;l&eacute;rer, et si on l\'associe &agrave; un foil porteur &agrave; basse vitesse, elle s\'arrache de l\'eau tr&egrave;s vite jusqu\'&agrave; un gabarit de 80kg. Dans cette optique, inutile de toiler tr&egrave;s gros, mais pr&eacute;f&eacute;rer au contraire des voiles d&eacute;di&eacute;es compactes et puissantes comme la IRIS Z 5.8 de notre test, ou la Severne FoilGlide en 5 ou 6m2.</p>
<p>Avec des foils comme le GA MAch 1, le Fanatic Flow 900, le Noe 80 ou un Zeeko Carver, on peut esp&eacute;rer d&eacute;coller d&egrave;s une 12aine de knt (10knt pour les plus techniques), en 3 ou 4 coups de pumping &agrave; condition de conjuguer le travail de la voile avec celui des pieds.&nbsp;</p>
<h3>Plan de pont</h3>
<p>Le plan de pont est tr&egrave;s agr&eacute;able et permet de trouver ses marques sans regarder. Pour le jibe, ce c&ocirc;t&eacute; intuitif , associ&eacute; &agrave; la faible largeur et le c&ocirc;t&eacute; assez centr&eacute; des straps permet un passage strap a strap ultra facile.</p>
<h3>En vol</h3>
<p>Du fait de sa compacit&eacute;, la Freefoil 115 sera &agrave; classer plus dans la catr&eacute;gorie des jouets que des formule 1. Ici, point question de chercher une navigation ultra cal&eacute;e et en force. Sa capacit&eacute; &agrave; g&eacute;nerer de le puissance &agrave; le contre g&icirc;te est &eacute;videment &eacute;galement limit&eacute;e, mais ce n\'est pas ce que l\'on cherche ici. Au contraire, on privil&eacute;gie une navigation assez droite, dans la finesse et la douceur, id&eacute;alment avec un foil de freeride. Elle ob&eacute;it au doigt et &agrave; l\'oeil, mais c\'est &agrave; double tranchant : ne vous endormez pas dessus, et associez lui un foil plut&ocirc;t sage et raide comme ceux cit&eacute;s pr&eacute;c&eacute;demment.&nbsp;</p>
<p>En comparaison avec l\'Exocet dont elle semble assez inspir&eacute;e, la JP est plus joueuse. Subjectivement, elle semble moins volumineuse. Les d&eacute;butants ou moins aguerris pr&eacute;f&egrave;reront sans doute la "sagesse" suppl&eacute;mentaire de l\'Exo, alors que les pratiquants plus exp&eacute;riment&eacute;s auront probablement un net faible pour la JP. &nbsp;</p>
<h3>&nbsp;Touchettes</h3>
<p>Avec ces petits flotteurs compacts, la comportement dans les touchettes souvent semblable : la planche a plus tendance &agrave; s\'enfoncer dans l\'eau (&ccedil;a rebondit moins) du fait de son faible volume (en comparaison avec les mod&egrave;les de 150L et plus), mais la largeur assez faible limite l\'effet coup de frein. Au final, c\'est rarement un probl&egrave;me sur ce type de \'petite\' planche.</p>
<h3>Dans les molles</h3>
<p>Vous allez me dire que le flotteur influe bien moins que la voile ou le foil dans la gestion des plages basses. Et bien d&eacute;trompez vous, ce type de flotteur, asoci&eacute; avec des foils comme le GA MAch 1 ou la Fanatic Flow 900 sont des armes pour passer les molles, si vous savez pomper avec les jambes. Car c\'est l&agrave; l\'autre int&eacute;r&ecirc;t des flotteurs compacts : le peu d\'inertie permet de pomper pendant des 10aines voir 100aine de m&egrave;tres. Du coup, il est assez amusant de passer &agrave; c&ocirc;t&eacute; des copains scotch&eacute;s avec une 150L et 7.5m2, et pompant avec votre 115L en 5.8m2 😉</p>
<h3>Dans le vent</h3>
<p>Autant vous le dire, le combo FF115 + mach 1 est notre pr&eacute;f&eacute;r&eacute; dans le vent fort (25knt et plus). Dans ces conditions, il faut toiler tout petit (4m et moins), mais c\'est juste un pur bonheur, et j\'ai carr&eacute;ment pris mon pied dans les vagues &agrave; envoyer des surfs et des airjibes dans la vague. Ces conditions ne sont pas celles auquelles on pense quand on veut foiler, mais objectivement, c\'est juste top !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-07/IMG_6202.jpg" alt="" /></p>
<p>&nbsp;</p>
<h3>Association&nbsp;</h3>
<p>Comme d\'habitude, j\'insisterai une fois de plus sur l\'importances des associations pour prendre du plaisir. Avec cette JP, on trouvera son graal avec un foil de freeride et des petites voiles. On peut certainement faire autrement (et certains le feront en vous jurant que c\'est g&eacute;nial), mais en respectant cette indication, vous avez des chances d\'optimiser le plaisir et la diversit&eacute; des conditions d\'utilisation.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-07/IMG_4956.jpg" alt="JP Freefoil 115" /></p>
<p>De notre c&ocirc;t&eacute;, nous avons pr&eacute;f&eacute;r&eacute; l\'association avec le GA Mach 1 (ou Moses Vento 85), mais nous validons &eacute;galement les associations avec le NP Glide Wind S (moins stable), le Fanatic Flow 900 (moins rapide), le Noe 80 (moins amusant au surf ou &agrave; tr&egrave;s basse vitesse) et le Zeeko Carver (moins de glisse ressentie).</p>
<p>C&ocirc;t&eacute; voiles, le top sera avec une 5,8 et une 3,7 pour couvrir l\'essentiel des conditions. Pour ceux qui veulent vraiment toiler plus, vous pouvrez aller jusqu\'&agrave; 6,8/7m &agrave; condition de choisir une voile foil l&eacute;g&egrave;re est tr&egrave;s stable avec peu de main arri&egrave;re (comme les Severne FoilGlide et Phantom Iris Z)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-07/IMG_6199.jpg" alt="" /></p>
<h3>Bilan</h3>
<p>Si vous avez lu tout le CR, vous aurez compris que nous sommes litt&eacute;ralement tomb&eacute;s amoureux de cette JP Freefoil 115. Pour un pratiquant aguerri qui sait naviguer en finesse, et sous r&eacute;serve de l\'associer &agrave; des &eacute;l&eacute;ments qui pr&eacute;servent son &eacute;quilibre, les possibilit&eacute;s sont assez incroyables : de la navigation freeride sur eau plate, au surf dans les vagues, en passant par un peu de freetyle (360, backloops, etc.) , il y a de quoi prendre un sacr&eacute; plaisir !</p>
<p><iframe src="https://www.youtube.com/embed/5-SC7DdHlpQ" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>',
'test_equipment' => 'Foils GA et Fanatic , Voile Phantom IRIS Z',
'test_duration' => 20,
'test_conditions' => '10-25 knt',
'test_place' => 'La ciotat, Serre Ponçon',
'created_at' => '2020-07-16 20:08:40',
'updated_at' => '2020-10-22 15:30:59',
),
93 => 
array (
'id' => 99,
'device_id' => 14,
'user_id' => 52,
'title' => 'Un foil bien né!',
'body' => '<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Utilisation</p>
<p>Dans l\'attente de mon Lokefoil LK1 2020 en SAV, j\'ai pu tester le foil Zeeko Amplifier 2020, que j\'ai associ&eacute; &agrave; mon Isonic 117. J\'ai navigu&eacute; une bonne quinzaine d\'heures (300km parcourus) sur 7/8 sessions diff&eacute;rentes avec des conditions de 9 &agrave; 20 noeuds, de petit clapot a grosse houle. Utilisation sans cale.</p>
<p>&nbsp;</p>
<p>Sensations</p>
<p>Venant d\'un foil carbone (LK1), j\'ai &eacute;t&eacute; agr&eacute;ablement surpris par le comportement tr&egrave;s sain du Zeeko. C\'est un foil \'plug and play\': pas besoin de r&eacute;glages complexes, le foil est sain a toutes les allures et conditions de mer, c\'est &agrave; dire que l\'on a beau pousser/ tirer dessus, il ne t\'&eacute;jecte pas. La mont&eacute;e du foil est progressive, offrant une bonne stabilit&eacute; lat&eacute;rale et longitudinale. On sent le foil cal&eacute; en ligne droite , comme sur des rails. Pour le foileur averti, &ccedil;a manque un poil de nervosit&eacute; par rapport &agrave; un foil carbone (ex . LK1) mais &ccedil;a reste tr&egrave;s agr&eacute;able.</p>
<p>&nbsp;</p>
<p>Performances</p>
<p>Le Zeeko est un foil alu qui est forc&eacute;ment lourd quand on vient d\'un foil carbone et on sent "le poids du foil" quand on se met sur l\'arri&egrave;re de la planche, mais 2&egrave;me surprise pour moi, le foil part assez vite, pour partir dans les minis et offre un gros appui pour passer les molles, vraiment tr&egrave;s surpris de la puissance offerte, le foil offrant &eacute;norm&eacute;ment d\'appui &agrave; basse vitesse.</p>
<p>J\'ai trouv&eacute; le foil plus "pied arri&egrave;re" que mon lok&eacute; et j\'ai d&ucirc; reculer mon pied de mat, cad que le Zeeko n&eacute;cessite de mettre plus son poids sur l\'arri&egrave;re pour sortir le foil, par rapport &agrave; mon lok&eacute; (notoirement connu comme foil " pied avant ").</p>
<p>&nbsp;</p>
<p>Conclusion</p>
<p>Au niveau des faiblesses: attendu sur un foil alu, le relatif manque derigidit&eacute; du mat en comparaison d\'un carbone . C\'est particuli&egrave;rement sensible &agrave; haute vitesse, ou le foil a tendance &agrave; saturer en vitesse (Vmax autour de 21nds), le manque de rigidit&eacute; g&eacute;n&egrave;re plus de micro mouvements qui oblige &agrave; un r&eacute;ajustement quasi permanent des appuis si l\'on souhaite aller chercher de la VMax. Rien de r&eacute;dhibitoire pour autant, le Zeeko est vraiment bien n&eacute; et permet au foileur d&eacute;butant de progresser en toute s&eacute;curit&eacute; et au foileur plus averti de s\'&eacute;clater dans toutes les conditions sur un foil sain et polyvalent. C\'est un foil que l\'on peut donc garder qq ann&eacute;es pour progresser et ce &agrave; un prix tr&egrave;s attractif. C\'est un produit que je recommande.</p>',
'test_equipment' => 'Isonic 117 / Severne Foilglide 7.0 / Duotone FType 5.8',
'test_duration' => 15,
'test_conditions' => 'Toutes',
'test_place' => 'Concarneau',
'created_at' => '2020-08-03 05:59:14',
'updated_at' => '2020-08-03 05:59:14',
),
94 => 
array (
'id' => 100,
'device_id' => 149,
'user_id' => 1,
'title' => 'Redoutable',
'body' => '<p>Une fois n\'est pas coutume, je poste un CR qui n\'a pas &eacute;t&eacute; r&eacute;dig&eacute; par mes soins ... mais il est int&eacute;ressant et rare d\'avoir des retours de client aussi pr&eacute;cis. Je me fais donc un plaisir de partager, en attendant d\'avoir la chance de mettre les pieds sur cette planche.</p>
<p>"</p>
<p>Voil&agrave;, c\'est fait ! La Patrick est baptis&eacute;e !</p>
<p>Je viens d\'envoyer 65 km avec des travers&eacute;es d\'estuaire, du surf, des d&eacute;collages dans l\'ultra-light sur courte distance, des airjibes faciles, naturels et surtout du pr&egrave;s serr&eacute; avec une contre-g&icirc;te de ouf !</p>
<p>Mais avant tout cela, il est n&eacute;cessaire d\'ajuster le talon du m&acirc;t du LOKE RACE sur le bo&icirc;tier DTT de la board. Cela est imp&eacute;ratif car il s\'av&egrave;re apr&egrave;s mesure au pied &agrave; coulisse que l\'arri&egrave;re du bo&icirc;tier de la Patrik est moins profond dans sa partie arri&egrave;re que sur d\'autres flotteurs et ne permet pas au Loke de venir reposer sur sa platine de car&egrave;ne... Trois &agrave; quatre mm tout de m&ecirc;me...&nbsp;Donc passage &agrave; l\'&eacute;tabli, fixation du foil &agrave; la verticale et usinage &agrave; la ponceuse &agrave; bande des bons 3-4 mm sur la moiti&eacute; arri&egrave;re du talon. Du coup, le talon prend un nouveau profil ; l&eacute;g&egrave;rement fuyant vers l\'arri&egrave;re. C\'est presque plus joli mais j\'avoue que c\'est toujours &agrave; contre-c&oelig;ur que j\'effectue ce type d\'intervention.&nbsp;Cela &eacute;tant, cette modification ne pr&ecirc;te pas &agrave; cons&eacute;quence pour le montage sur des flotteurs "standard" puisque le m&acirc;t du foil vient en contact avec la car&egrave;ne sur l\'&eacute;paulement largement dimensionn&eacute; du Loke. Bravo Loke !</p>
<p>Je pr&eacute;pare une visserie perso car aucune visserie d&eacute;di&eacute;e n\'est dans la package d\'accessoires ! Il faut croire qu\'ils ont peut-&ecirc;tre voulu r&eacute;duire la facture d\'un Euro ou deux... C\'est du d&eacute;tail, mais c\'est aga&ccedil;ant au possible !</p>
<p>Bref, voil&agrave; notre combo Patrik-Loke race fin pr&ecirc;t ! Je note toutefois que ce type d\'intervention me surprend, ce n\'est ni agr&eacute;able ni tr&egrave;s logique et ce n\'est pas forc&eacute;ment &agrave; la port&eacute;e de tous m&ecirc;me si le travail en lui-m&ecirc;me n\'est gu&egrave;re sorcier &agrave; r&eacute;aliser. Mais quid d\'un non bricoleur ?... Par contre, je dois pr&eacute;ciser que l\'ajustement en &eacute;paisseur du bo&icirc;tier est diabolique ; on a m&ecirc;me int&eacute;r&ecirc;t &agrave; lubrifier l&eacute;g&egrave;rement avec de la graisse silicone pour profiter pleinement de cet embo&icirc;tement parfait.</p>
<p>Par contre, sur l\'eau, le seul mot qui me vient &agrave; l\'esprit est "majestueux" ! Et ce n\'est pas moi qui le dit, moi, je le ressens au pilotage mais Thierry, le chef moniteur du club vient me suivre avec le semi-rigide de la s&eacute;curit&eacute; du plan d\'eau pour &eacute;valuer les performances en direct.&nbsp;Son verdict en tant que moniteur exp&eacute;riment&eacute; et pilote de kitesurf, foil, planche etc... est sans appel : il d&eacute;clare tout net &ecirc;tre bluff&eacute; par la capacit&eacute; de ce flotteur &agrave; tout rendre "naturel", lisse, cool, beau... Mais c\'est bien cette fameuse capacit&eacute; remarquable au pr&egrave;s serr&eacute; qui l\'impressionne ! La polaire jointe en dit bien plus long que je ne pourrais le faire par moi m&ecirc;me !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-07/pd-comp-2.JPG" alt="" /></p>
<p>En r&eacute;sum&eacute;, malgr&eacute; l\'agacement caus&eacute; par la n&eacute;cessit&eacute; de modifier le profil du talon du Loke Race pour lui permettre de reposer parfaitement sur sa platine de car&egrave;ne, j\'avoue &ecirc;tre litt&eacute;ralement s&eacute;duit. Au-del&agrave; de tous les &eacute;l&eacute;ments cit&eacute;s, c\'est encore la l&eacute;g&egrave;ret&eacute; remarquable, voire surprenante de ce flotteur de 200 litres (!) qui lui conf&egrave;re une r&eacute;activit&eacute; particuli&egrave;rement vive aux moindres sollicitations de pilotage. Cela devient litt&eacute;ralement magique dans l\'encha&icirc;nement des surfs sur petite ondulation serr&eacute;e... On est plus man&oelig;uvrant qu\'en flotteur de vague !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-07/pd-comp-1.JPG" alt="" /></p>
<p>Enfin, la rigidit&eacute; qui demeure le facteur ma&icirc;tre dans cette construction est certainement la clef de la r&eacute;ussite. Une couche &eacute;paisse en structure de nid d\'abeille d\'au moins un cm d\'&eacute;paisseur doubl&eacute;e de deux peaux de carbone donc en structure en poutre en "H" conf&egrave;re &agrave; l\'ensemble une rigidit&eacute; qui n\'est m&ecirc;me plus comparable &agrave; une traditionnelle couche de lamin&eacute; enrobant un pain de mousse. C\'est v&eacute;ritablement un autre monde et le simple fait de naviguer avec une telle technologie dissuade &agrave; jamais de revenir &agrave; l\'exp&eacute;rience d\'une construction classique. Ce sont d\'ailleurs les propres mots de Nicolas Warembourg... Je ne suis pas comp&eacute;titeur mais passionn&eacute; de performance ; les d&eacute;collages sont possibles dans des conditions extra-light et la g&eacute;om&eacute;trie du flotteur permet une contre-g&icirc;te de ouf avec des perfs au pr&egrave;s serr&eacute; &agrave; faire p&acirc;lir tout bon foiler avec un rail au vent qui vient alors flirter avec la surface de l\'eau sans jamais mordre ! Du pur r&eacute;gal !</p>
<p>Encore merci &agrave; vous trois !</p>
<p>"</p>
<p>Merci donc &agrave; Herv&eacute; pour ce beau compte rendu. On esp&egrave;re pouvoir &agrave; notre touir monter sur ce superbe flottteur cet automne, &agrave; l\'occasion des test PD que nous allons organiser autour de Marseille.</p>
<p>J\'ajoute que je ne suis pas surpris du r&eacute;sultat du test, et il me parait important de souligner plusieurs points.</p>
<p>- le combo d\'herv&eacute; est parfaitement coh&eacute;rent avec un foil race qui correspond parfaitement &agrave; ce type de planche. De m&ecirc;me, il utilise une voile de 8m typ&eacute; foil racing, et c\'est indipsensable pour &eacute;quilibrer ce type de mat&eacute;riel. Je pr&eacute;cise enfin qu\'herv&eacute; &agrave; plus de 3 ans de pratique tr&egrave;s tr&egrave;s assidue. Il ne faut donc pas tomber dans le pi&egrave;ge qui consiste &agrave; penser que c\'est uniquement grace aux 200L que la planche d&eacute;cole t&ocirc;t : c\'est un ensemble Flotteur / Foil / Grande voile.&nbsp;</p>
<p>- le c&ocirc;t&eacute; \'naturel\' dont parle herv&eacute; vient tr&egrave;s probablement de l\'extr&ecirc;me rigidit&eacute; du boitier, d&ucirc; &agrave; la construction tr&egrave;s particuli&egrave;re de la planche. Nous avons le m&ecirc;me type de ressenti lorsque l\'on passe d\'un mat souple &agrave; un mat plus raide. On a imm&eacute;diatement la sensation que tout est pluys net, plus &eacute;vident. Trop de pratiquants imaginent que la planche a peu d\'importance en foil car elle ne touche pas l\'eau .. c\'est une erreur majeure car elle participe &agrave; 100% dans les &eacute;quilibres, le contr&ocirc;le et les sensations.</p>
<p>&nbsp;</p>',
'test_equipment' => 'Loft SkyBlade 8m et LK race L',
'test_duration' => 6,
'test_conditions' => '12 Knt',
'test_place' => 'Gironde',
'created_at' => '2020-08-07 06:41:23',
'updated_at' => '2020-08-07 07:00:49',
),
95 => 
array (
'id' => 101,
'device_id' => 150,
'user_id' => 1,
'title' => 'Belle et puissante',
'body' => '<p>Apr&egrave;s notre pr&eacute;sentation statique, nous n&rsquo;avons pas r&eacute;sist&eacute; longtemps avant d&rsquo;aller tester la b&ecirc;te sur l&rsquo;eau, pour v&eacute;rifier si son ramage correspondait &agrave; son plumage</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6503.jpg" alt="patrick foil ride 145" /></p>
<h3>Premier contact</h3>
<p>D&egrave;s le premier contact &agrave; l&rsquo;arr&ecirc;t, on confirme que les 145 sont bien l&agrave;, et probablement un peu plus. On a un volume cons&eacute;quent sous les pieds, et une grosse stabilit&eacute; &agrave; l&rsquo;arr&ecirc;t, mais &agrave; la fois un flotteur l&eacute;ger dans les mains lors des manipulations. Visuellement, le c&ocirc;t&eacute; tr&egrave;s court au regard de la largeur peut surprendre au d&eacute;part, mais le volume bien r&eacute;parti et cons&eacute;quent sur l&rsquo;avant &eacute;galement vous emp&ecirc;chera d&rsquo;enfourner, et permettra de porter sans probl&egrave;me une 9m2.</p>
<h3>Envol</h3>
<p>Notre test ayant d&eacute;but&eacute; dans des conditions plut&ocirc;t tr&egrave;s light, nous avons pu imm&eacute;diatement juger du potentiel de glisse du flotteur et de ses capacit&eacute;s en grande voile. Le Foil Ride fait clairement partie des planches plut&ocirc;t imposantes dans la cat&eacute;gorie free-race. Au m&ecirc;me titre que la Starboard Foil 150, on a un flotteur puissant qui offre un appui cons&eacute;quent sous le pied arri&egrave;re, mais n&eacute;cessite &eacute;galement une puissance v&eacute;lique importante. Ce n&rsquo;est clairement pas avec ce type de flotteur qu&rsquo;on volera en 7m dans 10 knt : il faut toiler mais &ccedil;a reste malgr&eacute; tout moins flagrand que sur une 91 ! Dans moins de 10knt, la 9m2 n&rsquo;est pas superflue pour faire acc&eacute;l&eacute;rer la Foil Ride et lui permettre de prendre son envol.</p>
<p>On est toutefois aid&eacute; dans la t&acirc;che par 2 choses</p>
<ul>
<li>la compacit&eacute; et le poids de la planche permet de la faire poper tr&egrave;s vite si vous l&rsquo;associez &agrave; un foil tr&egrave;s porteur (comme le F4 Race 1000 du test)</li>
<li>la grosse largeur et les cuts peu profonds offrent une grande stabilit&eacute; pendant la phase de pumping</li>
</ul>
<h3>En vol</h3>
<p>Une fois en l&rsquo;air, on a, comme avec la SB 150, un flotteur assez imposant avec beaucoup d&rsquo;appui sous le pied arri&egrave;re, et une attitude plut&ocirc;t cal&eacute;e sur l&rsquo;axe de lacet. Par contre, les 2 flotteurs se distinguent sur l&rsquo;axe longitudinal. Plus longue, la Starboard &nbsp;est plus cal&eacute;e sur l&rsquo;axe longitudinal. Au contraire, la Patrick r&eacute;agit plus vite, elle est plus vive, moins cal&eacute;e et plus ludique sur cet axe ce qui facilite le pumping dans les molles. Par contre, elle subit un peu plus les variations de vent et il faut &ecirc;tre plus attentif pour ne pas faire le yoyo.</p>
<p>La plan de pont est assez traditionnel avec une courbure assez marqu&eacute;e sous le talon, l&agrave; encore un peu comme sur la Starboard. Cela se distingue des ponts plus plat que l&rsquo;on retrouve chez Tabou, Phantom ou Exocet. Ce choix est vraiment une question de gout : en g&eacute;n&eacute;ral, les slalomeurs et les d&eacute;butant en foil affectionnent ces plans de pont avec lesquels ont peut s&rsquo;appuyer avec le talon, et qui ne perturbent moins les habitudes. Au contraire, certains pr&eacute;f&egrave;rent les ponts plus plats pour le contr&ocirc;le sup&eacute;rieur qu&rsquo;ils apportent, et les possibilit&eacute;s plus larges qu&rsquo;ils offrent quant au positionnement des pieds hors des straps.</p>
<p>Avec sa grosse largeur sous le pied arri&egrave;re, la foilride est royale sur les allures serr&eacute;es et abattues. Elle se rapproche un peu plus que la moyenne d&rsquo;une planche de race PWA en terme de sensation sur ces allures. En contre partie, c&rsquo;est au travers et dans le vent soutenu qu&rsquo;elle le paye un peu, surtout en terme de contr&ocirc;le quand on la compare par exemple &agrave; une Exocet RF, ou une Phantom X. En comparaison, elle n&eacute;cessite plus de vigilance dans le pilotage.</p>
<h3>Touchettes</h3>
<p>En ce qui concerne les touchettes, la Foil Ride fait plut&ocirc;t bonne impression sur l&rsquo;arri&egrave;re et sur le rail. Par contre, les touchettes sur l&rsquo;avant (notamment lorsque la voile vient plaquer le nez dans une rafale) provoquent un ralentissement plus important que la moyenne lorsque l&rsquo;on utilise une grande voile. C&rsquo;est le ran&ccedil;on de la compacit&eacute; de ce type de flotteur. Seule l&rsquo;Exocet RF sort du lot parmi les compactes gr&acirc;ce &agrave; son &eacute;norme volume avant.&nbsp;</p>
<h3>Fashion victim\'</h3>
<p>Je finirai, une fois n&rsquo;est pas coutume, par un argument compl&egrave;tement subjectif et que certains consid&eacute;reront certainement comme absurde, mais je l&rsquo;ose : la Foil Ride est tr&egrave;s r&eacute;ussie en terme de look. Sur le terrain, les avis ont &eacute;t&eacute; assez unanimes sur la question. Les plus cart&eacute;siens diront que cela ne les influence pas, mais nous mesurons au magasin tous les jours l&rsquo;influence capitale de cet &eacute;l&eacute;ment sur le choix des acheteurs. Sur ce point, la marque Patrick a longtemps &eacute;t&eacute; &agrave; la traine (et &ccedil;a reste mon avis concernant une partie de la gamme, notamment les mod&egrave;les AI), mais cette fois, bravo, le boards de foil 2021 sont vraiement magnifiques !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_6507.jpg" alt="patrick foil ride 145" /></p>
<h3>Bilan</h3>
<p>Cette Patrick Foil Ride frappe fort. Dans la cat&eacute;gorie freerace, la Foil Ride va proposer l&rsquo;un des flotteurs les plus puissants sur march&eacute; &agrave; ce jour. Elle s&rsquo;inscrit dans la m&ecirc;me trempe que la Starboard Foil 150 mais avec une proposition plus libre sur l&rsquo;axe longitudinal, un peu moins cal&eacute;. En contre partie, elle est plus l&eacute;g&egrave;re et plus ludique, et franchement tr&egrave;s r&eacute;ussi en terme de look !</p>
<h3>Comparaison</h3>
<p>A la demande de certains, voici une petite comparaison avec quelques autres flotteurs sur march&eacute;</p>
<h4>Foil Ride 145 vs Starbooard Foil 150</h4>
<p>La Patrick est beaucoup plus libre et maniable sur les axes de lacet et de tangage. La Starboard donne l\'impression d\'une planche plus encombrante. La Patrick est plus efficace sur les touchettes lat&eacute;rales (rail). Par contre, la Starboard est plus cal&eacute;e. Elle se fait moins bouger lors des rafales. Les corrections &agrave; donner pour maintenir une hauteur constante sont moins fr&eacute;quentes et moins importantes sur la Starboard. Sur les touchette par l\'avant (lorsque la voile plaque la planche sur l\'eau par exemple ), la Starboard freine moins. Dans le light au pr&egrave;s, la Patrick est plus puissante, mais &ccedil;a se joue &agrave; pas grand chose. Pour tout le reste (d&eacute;collage, jibe, plan de pont, tol&eacute;rence avec les grandes voiles etc.), les 2 flotteurs sont assez semblables.</p>
<h4>Foil Ride 145 vs JP Hydrofoil 135</h4>
<p>Cette fois, on a vraiment 2 g&eacute;n&eacute;rations de planches diff&eacute;rentes. La Patrick fait mieux sur pratiquement tous les plans, si ce n\'est sur ceui de la glisse naturelle du flotteur. En effet, la JP n&eacute;cessitera des voiles moins grosses pour acc&eacute;l&eacute;rer jusqu\'au d&eacute;collage. En naviguant avec les 2 planches, on a l\'impression d\'avoir d\'un c&ocirc;t&eacute; une planche de freeride, et de l\'autre une planche de race.</p>
<h4>Foil Ride 145 vs Exocet RF 81 V2</h4>
<p>L&agrave;, le duel est plus serr&eacute;. Sur beaucoup de points, les performances sont similaires. La compacit&eacute; des 2 flotteurs leur donne en plus un comportement assez similaire assez vif sur le plan longi (peut &ecirc;tre un peu moins marqu&eacute; sur l\'Excoet). Pour moi, ce qui les diff&eacute;renciera le plus est le c&ocirc;t&eacute; plus puissant et ardant de la Patrick, et le c&ocirc;t&eacute; plus contr&ocirc;lable et sage de l\'Exocet. Autre diff&eacute;rence sur les touchettes par l\'avant qui sont plus faciles &agrave; g&eacute;rer sur l\'Excoet. Enfin, c&ocirc;t&eacute; look, y a pas photo sur la plage, la Patrick l\'emporte haut la main.</p>
<h4>Foil Ride 145 vs Phantom IRIS X</h4>
<p>Cette fois, les diff&eacute;rences sont plus marqu&eacute;es. La Patrick avec son c&ocirc;t&eacute; tr&egrave;s libre tranche avec la Phantom qui est plus cal&eacute;e. Cela permet &agrave; la Phantom de g&eacute;n&eacute;rer des acc&eacute;l&eacute;rations plus franches et d\'apporter plus de contr&ocirc;le. Au contraire, la Patrick permettra de toiler plus. L&agrave;, on a un peu plus la comparaison d\'une planche de slalom vs une planche de race.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
'test_equipment' => 'Voiles Hyperglide 9m et Iris X 5.8',
'test_duration' => 6,
'test_conditions' => 'de 8 à 18 knt',
'test_place' => 'la Coptat - Le Jai',
'created_at' => '2020-09-24 11:52:53',
'updated_at' => '2020-10-04 17:25:04',
),
96 => 
array (
'id' => 102,
'device_id' => 157,
'user_id' => 1,
'title' => 'Impressionnant mais Sportif',
'body' => '<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7338.jpg" alt="Starboard Slalom Foil 91 Reflex carbone 2021" /></p>
<h3>Pr&eacute;sentation</h3>
<p>La foil Slalom Reflex carbone est un flotteur d&eacute;di&eacute; d&eacute;velopp&eacute; pour les &eacute;preuves foil format PWA. Le cahier des charges : parcours typ&eacute; slalom, en flotte mixte aileron / foil. Le shape se caract&eacute;rise par une car&egrave;ne d\'outline ovoide, tandis que le pont reste celui d\'un flotteur foil tr&egrave;s carr&eacute; &agrave; l\'arri&egrave;re (concept issu des d&eacute;veloppements IQFoil). La s&eacute;paration est marqu&eacute;e par un cut tr&egrave;s franc et profond. Le flotteur est tr&egrave;s volumineux, avec en particulier un arri&egrave;re &eacute;norme pour apporter un maximum de puissance. Le plan de pont &eacute;volue petit &agrave; petit chez Starboard vers une assise pied arri&egrave;re plus progressive. Au fur et &agrave; mesure, on s\'&eacute;loigne de la forme \'slalom\' pour aller en direction de quelque chose de plus plat.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7340.jpg" alt="Starboard Slalom Foil 91 Reflex carbone 2021" /></p>
<h3>Les petits plus qui font la diff&eacute;rence</h3>
<p>Comme souvent avec Starboard, ce sont dans les d&eacute;tails que se cachent le perfectionnisme des d&eacute;veloppeurs, mais ce sont ddes ptites choses qui simplifient la vie. Cette nouvelle planche ne fait pas exception</p>
<h4>Visserie 100% torx</h4>
<p>Grande nouveaut&eacute;, certains mod&egrave;mes Starboard passent en visserie 100% torx. On appluadit des 2 mains apr&egrave;s avoir demand&eacute; ceci depuis 5 ans. ca va faore un diff&eacute;ernce &eacute;norme sur les vis de d&eacute;compresssion et surtout les straps que l\'on pourra d&eacute;placer dans changer le jeu de vis tous les 3 d&eacute;montages</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0334.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h4>Strap Yulex</h4>
<p>M&ecirc;me si on aimerait que l\'empreinte carbone de nos flotteur baisse franchement avec une fabrication plus proche, ou des mat&eacute;riaux moins poluants, Starboard continue &agrave; travailler petit &agrave; petit sur des mat&eacute;rieux un peu plus respectueux. Cette fois, les straps passent en caoutchouc naturel, donc plus de p&eacute;trole de ce c&ocirc;t&eacute;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0332.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h4>Plaquettes de straps asym&eacute;trique</h4>
<p>Vous remarqurez que les plaquettes de straps ne sont pas perc&eacute;e au centre. En fonction de l\'orientation que vous choisiez, vous allez faire varier la largeur du strap&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0333.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h4>Garantie et exclusions</h4>
<p>Juste pour finir et sourire un coup : si vous esp&eacute;riez utiliser cette planche pour naviguer, &eacute;vitez car vous allez tomber &agrave; coup sur dans un cas d\'exculsion de garantie. La liste est longue comme le bras 🤣 ... et vous ne pourrez pas dire qu\'on ne vous a pas pr&eacute;venu</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0335.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h3>Envol</h3>
<p>Au premier contact, la planche est volumineuse, mais moins stable &agrave; l&rsquo;arr&ecirc;t que les planches de foil racing. Visuellement, il y a quand m&ecirc;me beaucoup de surface devant le pied de mat : le virement de board ne sera pas un soucis.</p>
<p>Avec le combo Mach3 7.8 / foil Starboard slalom avec l&rsquo;aile de 725, il faut carr&eacute;ment s&rsquo;employer au pumping pour faire acc&eacute;l&eacute;rer l&rsquo;ensemble dans les conditions du jour. La voile semble l&eacute;g&egrave;re dans les bras, mais elle g&eacute;n&egrave;re tr&egrave;s peu d\'appui en comparaison avec les voiles 100% foil dont nous avons l\'habitude d&eacute;sromais. J\'avais perdu l\'habitude de ces voiles ou une 7.8 a la plage basse d\'une voile de foil en 6.6. Heureusement,&nbsp;le flotteur et le foil offrent peu de r&eacute;sistance &agrave; l&rsquo;acc&eacute;l&eacute;ration. On est sujectivement au m&ecirc;me niveau qu\'une bonne free-race, donc de ce point de vue, il n\'y aura pas besoin forc&eacute;ment de toiler comme un bourrin.</p>
<p>L&rsquo;aile de 725 met du temps &agrave; accrocher le vol, et il faut un peu de vitesse pour commencer &agrave; se lever. On voit clairement que l\'on n\'est plus dans le programme des 800/900 et 1000. Un prochain test sera l\'occasion de faire des comparaisons plus pr&eacute;cises entre les ailes pour cerner l\'influance propre de ces nouvelles ailes qui sortiront fin janvier.</p>
<h3>Un test en mode Slalom</h3>
<p>Une fois en vol, il faut laisser un peu de temps &agrave; l\'ensemble pour acc&eacute;l&eacute;rer car on a peu de puissance &agrave; bas r&eacute;gime. Par contre, on d&eacute;tecte tout de suite une glisse assez marqu&eacute;e. Et comme je dis souvent avec le matos de slalom, "plus &ccedil;a va vite, plus &ccedil;a va vite". Avec le foil et les voiles d&eacute;di&eacute;es, on s\'est habitu&eacute; &agrave; une pouss&eacute;e lin&eacute;aire. Cette fois, on est nettement en sous-puissance &agrave; basse vitesse, et plus on acc&eacute;l&egrave;re, plus la puissance augmente, en m&ecirc;me temps que la pression dans la main arri&egrave;re, et l\'appui dans la jambe arri&egrave;re. Pour un pratiquant qui n\'est pas aussi technique en Slalom qu\'un vrai comp&eacute;titeur, il m\'a fallu mettre beaucoup plus de tension &agrave; l\'&eacute;coute que Tristant Algret pour g&eacute;rer la voile au pr&egrave;s au del&agrave; de 20knt (de vitesse) ... au final, on retrouve un peu plus des sensations que l\'on a en Slalom.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7341.jpg" alt="Starboard Slalom Foil 91 Reflex carbone 2021" /></p>
<p>En contre partie, les acc&eacute;l&eacute;rations sont tr&egrave;s nettes, et on sent beaucoup de glisse &agrave; vitesse soutenue. Subjectivement, j\'ai eu la sensation d\'aller facilement tr&egrave;s vite au pr&egrave;s, et sans aller chercher des bords abattus, la VMax est vite mont&eacute;e &agrave; presque 26knt dans un vent qui n\'a pas atteint les 15knt.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/DSCF5902.jpg" alt="Slalom foil 91" /></p>
<h3>Conduite en vol</h3>
<p>En terme de conduite du flotteur, j\'ai not&eacute; une facilit&eacute; et une bonne stabilit&eacute; sur le plan longitudinal. Comme toujours avec le mat&eacute;riel starboard, le tangage est &eacute;galement facile &agrave; g&eacute;rer avec une mise &agrave; la contre-g&icirc;te tr&egrave;s intuitive. Par contre, l\'ensemble poss&egrave;de un certain flou sur l\'axe de lacet malg&eacute; le mat IQFoil tr&egrave;s raide en torsion. Mon analyse est que le nez assez large offre une certaine inertie qui provoque ce gigotage.&nbsp;En comparaison avec les planches de freeride (Starboard FREERIDE FOIL 150), on sent une inertie sup&eacute;rieure du nez sur la Slalom, mais une plus grande libert&eacute; globale de l&rsquo;ensemble de la planche autour du foil sur les axes de tangage et de lacet.&nbsp;Les r&eacute;actions sont vives et rapides, et cela n&eacute;cessite &eacute;videmment un pilotage nettement plus actif.</p>
<p>Au jibe, la planche est &eacute;galement tr&egrave;s r&eacute;active et permet d&rsquo;engager des courbes de fa&ccedil;on agressive. Reste ensuite &agrave; boucler et cela demande &eacute;videmment de la technique, mais le comportement est quand m&ecirc;me tr&egrave;s diff&eacute;rent d&rsquo;une planche de race &agrave; ce niveau l&agrave;. Heureusement, le plan de pont plut&ocirc;t \'simple\' permet une prise en main quasi imm&eacute;diate lors du jibe, au contraire des planches comme la IQfoil qui requi&egrave;rent un temps d\'adaptation beaucoup plus long.</p>
<p>Pour en finir avec le comportement g&eacute;n&eacute;ral, signalons que cette vivacit&eacute; de comportement permet aussi des changement d\'allure quasi imm&eacute;diats. Cela va permettre de se faufiler dans la meute en course 😉.</p>
<p>L\'utilisation du foil Starboard Slalom offre &eacute;videment un tr&egrave;s bon &eacute;quilibre g&eacute;n&eacute;ral avec ce flotteur, malgr&eacute; un stance gigantesque sur cette planche r&eacute;gl&eacute;e par Tristan Algret. J\'ai eu du mal &agrave; chausser le strap arri&egrave;re qui est tr&egrave;s excentr&eacute; et tr&egrave;s haut vu l\'&eacute;paisseur de la planche (un peu l\'inverse de l\'Excoet RF V2). Il faut vraiment aller le chercher, et une fois dedans, la puissance suppl&eacute;mentaire d&eacute;cuple encore le c&ocirc;t&eacute; sportif de la planche. L\'aspect "pur sang" de la b&ecirc;te ne fait pas de doute, et je suis impressionn&eacute; de voir les top coureurs capables de border en 8,6 dans du vent soutenu avec les pieds dans les straps. Comme dit Tristant, il suffit rester face &agrave; la voile et &eacute;craser le tout .. nul doute que pour ceux qui y arrivent sans se faire balader, les acc&eacute;l&eacute;rations fulgurantes seront au rendez vous ! A mon niveau, j\'avoue que je ne me sents pas 🤣</p>
<p>Sur les allures tr&egrave;s serr&eacute;es, et malgr&eacute; cette position tr&egrave;s excentr&eacute;e du strap arri&egrave;re, on note quand m&ecirc;me une position un peu plus vrill&eacute;e que sur un flotteur foil race (pied arri&egrave;re un peu plus fuyant). Malgr&eacute; tout, le cap est au rendez vous d&egrave;s que la pression dans la voile est au rendez vous (plus compliqu&eacute; dans le light).</p>
<h3>Les touchettes&nbsp;</h3>
<p>Sur les touchettes, la planche est assez impressionnante. Pour moi, elle rejoint direct la Phantom Iris X et la RF V2 en t&ecirc;te de peloton sur les touchettes lat&eacute;rales. Sur les touchettes arri&egrave;res, elle fixe une nouvelle r&eacute;f&eacute;rence pour les planches d&eacute;di&eacute;es. C\'est tr&egrave;s rassurant lorsque l\'on navigue &agrave; vitesse soutenue ! Je me suis surpris par moment &agrave; raser l\'eau dans les ris&eacute;es sans m&ecirc;me m\'en rendre compte.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7339.jpg" alt="Starboard Slalom Foil 91 Reflex carbone 2021" /></p>
<h3>Bilan</h3>
<p>Au final, on a un ensemble carr&eacute;ment sportif, qui n&eacute;cessite du pilotage et de la technique, mais qui a un gros potentiel de vitesse. Il faut clairement un tr&egrave;s bon niveau pour r&eacute;ellement tirer partie de ce flotteur, et il s\'exprime d\'autant mieux que le vent est &eacute;tabli. Ca donne envie de tester les mod&egrave;les plus petits car ils risquent d\'&ecirc;tre tr&egrave;s int&eacute;ressants dans le vent soutenu. Il faudra aussi bien entendu faire un test avec des r&eacute;glages plus standards (stance, angle de stab), et un foil moins typ&eacute; Slalom pour cerner l\'infunace de chaque &eacute;l&eacute;ment (bord et foil).</p>
<p>En ce qui concerne le programme de la planche, elle matche bien mieux qu\'un flotteur foil racing avec la pratique standard des pratiquants loisir experts. Malgr&eacute; sa largeur de 91cm, elle fait moins imposant et n&eacute;cessite moins de puissance v&eacute;lique (dit autrement, pas besoin d\'y coller 9m2) ... et sa capacit&eacute; &agrave; g&eacute;rer des touchettes &agrave; grande vitesse sans coup de frein va beaucoup plaire aux adeptes du GPS 😉. A ce stade, je ne peux pas dire ce que donnera la comparaison avec une freerace pour un utilisateur \'standard\', mais assur&eacute;emnt, la diff&eacute;rence est flagrante avec les flotteurs &nbsp;foil racing ! Les premi&egrave;res disponibilit&eacute;s sont pr&eacute;vues pour la fin de l\'ann&eacute;e. Je sens que certains vont se faire plaisir pour No&euml;l.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/foil_slalom_main2-scaled.jpg" alt="sss" width="1500" height="739" /></p>
<p>&nbsp;</p>',
'test_equipment' => 'Mach 3 7,8 et foil starboard aile 725',
'test_duration' => 1,
'test_conditions' => '12-15 knt',
'test_place' => 'La Ciotat',
'created_at' => '2020-09-24 12:42:26',
'updated_at' => '2020-11-21 10:34:12',
),
97 => 
array (
'id' => 103,
'device_id' => 159,
'user_id' => 1,
'title' => 'Surprenant & attachant',
'body' => '<p>Quand Nicolas Warambourg m&rsquo;a propos&eacute; de tester les Foil Ride 125 et 105, j&rsquo;avoue que j&rsquo;avais quelques aprioris bas&eacute;s sur mes tests pr&eacute;c&eacute;dents. Pour &ecirc;tre franc, apr&egrave;s avoir vu les mensurations, je savais que j&rsquo;allais trouver une 125 vive et peu puissante, et une 105 ultra libre et tr&egrave;s orient&eacute;e freeride. C&rsquo;&eacute;tait donc logiquement avec des produits freeride (foil et voile) que je devais aborder ce test.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7280.jpg" alt="Patrick Board Foil Ride 105 125 145" /></p>
<p>Pourtant, les conditions du jour (plan d&rsquo;eau ultra plat, et vent tr&egrave;s irr&eacute;gulier entre 5 et 25 knt) , et le mat&eacute;riel que j&rsquo;avais sous la main (foil F4 et Starboard) m&rsquo;ont incit&eacute; &agrave; faire ce test en mode slalom avec ma Phantom IRIS RF 6.0. Je savais que j&rsquo;allais probablement &ecirc;tre un peu hors programme, mais je m&rsquo;y attendais.</p>
<h3>Warm\'up en FOIL RIDE 145</h3>
<p>Avant de rentrer dans le vif du sujet, je pars 20mn avec la FoilRide 145 que je connais bien, histoire de r&eacute;gler le mat&eacute;riel et d&rsquo;avoir une r&eacute;f&eacute;rence de comparaison. Ici, pas de surprise, je retrouve des sensations famili&egrave;res. Tous mes tests pr&eacute;c&eacute;dents ayant eu lieu en 7, 8 et 9m2, je voulais v&eacute;rifier si le comportement &eacute;tait analogue en petite voile. Je retrouve un flotteur puissant, &nbsp;et, dans les conditions plut&ocirc;t muscl&eacute;es et irr&eacute;guli&egrave;res, la 6m peine un peu &agrave; contraindre le flotteur. Ca m\'incite &agrave; une conduite pied arri&egrave;re hors du strap pour ne pas me faire surprendre dans les rafales brusques. Par contre, la stabilit&eacute; lat&eacute;rale est excellente et le comportement de l&rsquo;ensemble plut&ocirc;t rassurant. Par rapport a ce que j&rsquo;avais ressenti en grande voile, les coups de freins lors des touchettes par l&rsquo;avant sont beaucoup moins insensibles. On voit que cette fois, la petite voile appui moins sur le nez, et le volume de ce dernier joue suffisament son r&ocirc;le en &eacute;vitant un ralentissement marqu&eacute; lors des touchettes. Avec ce mod&egrave;le en 145L, le passage dans les molles profite de la puissance sous le pied arri&egrave;re.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7287.jpg" alt="Patrick Board Foil Ride 105 125 145" /></p>
<h3>FOIL RIDE 105 - d&eacute;collage</h3>
<p>Je passe ensuite directement &agrave; la 105, avec le m&ecirc;me foil, le m&ecirc;me gr&eacute;ement et les m&ecirc;mes r&eacute;glages. Comme expliqu&eacute; en introduction, j&rsquo;y vais en m&rsquo;attendant &agrave; un ensemble bancal (foil et voile de slalom) au vu des autres flotteurs de ce type test&eacute; pr&eacute;c&eacute;demment (JP Freefoil 115, Zeeko Airwave, Slingshot Wizzard 103).</p>
<p>La prise en main avant d&eacute;collage tranche avec la 145. C&rsquo;est nettement moins stable &agrave; l\'arr&ecirc;t, surtout en longitudinal: si on n&rsquo;y fait pas attention, on se retrouve vite avec le nez qui plonge, et il faut int&eacute;grer que l&rsquo;essentiel du volume est sur l&rsquo;arri&egrave;re. Pour autant, les &eacute;volutions &agrave; l&rsquo;arr&ecirc;t sont plus ais&eacute;es qu&rsquo;avec la Zeeko et la Slingshot.</p>
<p>A la premi&egrave;re ris&eacute;e, je me fait encore surprendre &agrave; faire le sous-marin &hellip; le&ccedil;on num&eacute;ro un : comme sur toutes les petites planches de windfoil, toujours rester en arri&egrave;re. Une fois ceci int&eacute;gr&eacute;, on cale le pied avant dans le strap, et la ris&eacute;e suivante exp&eacute;die le flotteur en l&rsquo;air en moins de temps qu\'il ne faut pour le dire. En comparaison avec la 145 que l&rsquo;on vient de quitter, la diff&eacute;rence est bluffante. Cela illustre une nieme fois le constat qu&rsquo;un petit flotteur n&eacute;cessite bien mois de puissance pour d&eacute;coller qu&rsquo;un gros. Toute la suite de ce test va confirmer ce d&eacute;collage ultra rapide. D&rsquo;une part il faut moins de puissance qu&rsquo;avec la 145 pour atteindre le vol, mais surtout c&rsquo;est incroyablement plus rapide : il faut environ 1/3 de la distance n&eacute;cessaire avec la 145. Vu les conditions irr&eacute;guli&egrave;res du jour avec des ris&eacute;es vigoureuses mais tr&egrave;s courtes, cela permet d&rsquo;exploiter plus facilement chaque opportunit&eacute; &hellip; &agrave; condition bien sur d&rsquo;&ecirc;tre actif et r&eacute;actif.&nbsp;</p>
<p>Des que l&rsquo;on accroche le vol, la phase d&rsquo;acc&eacute;l&eacute;ration est r&eacute;duite au strict minimum, comme sur les Zeeko et Slingshot. Dit autrement, pas besoin d&rsquo;attendre que le flotteur acc&eacute;l&egrave;re en continuant &agrave; pomper. L&agrave;, d&egrave;s qu&rsquo;on est en l&rsquo;air, &ccedil;a tient car on n&rsquo;a pas l&rsquo;inertie du nez qui a tendance &agrave; faire replaquer le foil.</p>
<h3>FOIL RIDE 105 - stabilit&eacute;</h3>
<p>C&rsquo;est &agrave; partir de l&agrave; que la FoilRide 105 d&eacute;voile son c&ocirc;t&eacute; le plus surprenant : une stabilit&eacute; longitudinale incroyable ! Lors de tous nos tests pr&eacute;c&eacute;dents, les petits flotteurs &eacute;taient plut&ocirc;t vifs sur l&rsquo;axe longitudinal (pas cal&eacute;) . Ici, l&rsquo;ensemble parait auto-stabilis&eacute;. Je n\'ai presque aucun effort &agrave; fournir pour rester &agrave; la m&ecirc;me altitude. Etonnant ! M&ecirc;me avec les ris&eacute;es, &ccedil;a reste tellement facile que je suis bluff&eacute;. Il faut vraiment que la vitesse monte dans les tours pour qu&rsquo;il faille commencer &agrave; &ecirc;tre attentif. Cette sensation assez in&eacute;dite prouve que, si on diminue les effets a&eacute;rodynamiques et inertiels du flotteur, on simplifie &eacute;norm&eacute;ment la conduite (&agrave; m&eacute;diter, et cela rejoint les sensations que l\'on a avec la IRIS X 83 et son nez neutre a&eacute;rodynamiquement).</p>
<p>Sur l&rsquo;axe transversal, j&rsquo;ai &eacute;t&eacute; presque aussi surpris. Pourtant je ne l&rsquo;ai pas g&acirc;t&eacute; avec un mat F4 de 1 m&egrave;tre, mais curieusement &ccedil;a ne bronche pas et on peut m&ecirc;me se mettre facilement la contre g&icirc;te. Certes ce n&rsquo;est pas tr&egrave;s large, mais en 6m et m&ecirc;me en chargeant bien dans la voile, je n&rsquo;ai absolument pas ressenti de g&ecirc;ne sur l&rsquo;&eacute;quilibre, ni de cot&eacute; fuyant sous le pied arri&egrave;re. Evidemment, les choses serait diff&eacute;rentes dans le light en 7m2 ou plus .. mais &agrave; condition de rester raisonnable en taille de voile, c&rsquo;est assez bluffant.</p>
<p>Apr&egrave;s cette surprise quant au comportement en stabilit&eacute;, passons aux autres aspect de ce petit bijou.&nbsp;Plus j\'enchaine les bords, plus je me rends compte que cette 105 est tr&egrave;s int&eacute;ressante au jibe. J\'avais not&eacute; cette facilit&eacute; sur la Zeeko Airwave : le fait d\'avoir une planche sans aucune inertie rend la planche tr&egrave;s intuitive et facilitante. Avec la patrick, on a un nouvel &eacute;l&eacute;ment : sa capacit&eacute; &agrave; serrer le jibe pour des manoeuvres plus incisives. Subjectivement, non seulement le d&eacute;clenchement du jibe est facilit&eacute; mais son contr&ocirc;le et la remise &agrave; plat pile au bon moment pour ne pas toucher est &eacute;galement un jeu d\'enfant. Par contre, si on se loupe est que l\'on vient toucher, attention &agrave; ne pas &ecirc;tre trop devant : &ccedil;a plonge ! ... on y vient</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7283.jpg" alt="Patrick Board Foil Ride 105 125 145" /></p>
<h3>FOIL RIDE 105 - Touchettes</h3>
<p>Passons donc aux touchettes, qui sont un &eacute;l&eacute;ment d\'importance en foil (eh oui, on ne vole pas tout le temps). Les touchettes lar&eacute;rales sont correctes, dans la moyenne. Compte tenu de la forme des rails, on pourait m&ecirc;me s\'attendre &agrave; mieux, mais il ne faut pas oublier que ces rails sont tr&egrave;s courts vu la taille du flotteur. C&ocirc;t&eacute; touchettes par l\'avant, on ne va pas mentir, on paye forc&eacute;ment le mini volume sur le nez. Les coups de frein sont copieux (un peu comme sur la 145 avec la 9m), et il faut s\'attendre &agrave; se faire &eacute;clabousser le bout du nez quand on fait une faute 😉. En gros, il faut &eacute;viter ce type de situation en restant attentif, mais on est aid&eacute; en cela par l\'exceptionnelle facilit&eacute; de pilotage longitudinal.&nbsp;</p>
<h3>FOIL RIDE 105 - Bilan</h3>
<p>Si je devais r&eacute;sumer ce test en 2 mots, je dirai Surpenant &amp; Attachant. Cette 105 est assez loin des autres petites freeride que j\'ai eu l\'occasion d\'avoir sous les pieds. On a l&agrave; r&eacute;ellement une planche de race foil en mod&egrave;le r&eacute;duit. La stabilit&eacute; sur les 3 axes est bluffante, et la seule ombre au tableau est la gestion des touchettes par l\'avant. Pour moi, la cible de ce flotteur est double : soit le rideur l&eacute;ger qui veut faire de la freerace en 6.5m2 max, soit le rider plus lourd qui veut comp&eacute;ter un gros flotteur large de light wind.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-09/IMG_7285.jpg" alt="Patrick Board Foil Ride 105 125 145" /></p>
<h3>FOIL RIDE 125</h3>
<p>Pour finir cette journ&eacute;e de test, c\'est parti cette fois pour la 125 avec le m&ecirc;me foil et la m&ecirc;me voile.</p>
<p>Je ne vais pas rentrer dans tous les d&eacute;tails car je vais r&eacute;sumer avec fid&eacute;lit&eacute; les choses en disant qu\'on est vraiment &agrave; mi-chemin entre la 105 et la 145. On a un juste milieu entre la puissance de la 145, et la facilit&eacute; et le contr&ocirc;le dans le vent de la 105. Les touchettes sont plus simples &agrave; g&eacute;rer qu\'avec la 105, et le d&eacute;collage est plus rapide qu\'avec la 145. La stabilit&eacute; longitudiale reste un mod&egrave;le du genre. Je dirai que pour quelqu\'un qui ne souhaite pas toiler plus de 7m2, c\'est probablement l\'un des flotteurs les plus int&eacute;ressants du march&eacute; &agrave; ce jour ... et clairement ma pr&eacute;f&eacute;r&eacute;e dans la gamme FoilRide !&nbsp;</p>
<p>Si on la compare aux 2 autres planches les plus modernes dans le m&ecirc;me programme :&nbsp;</p>
<ul>
<li>l\'Exocet RF71 est bien moins stable et cal&eacute;e sur le plan longitudiale, mais c\'est la plus efficace sur les touchettes</li>
<li>la Starboard Foil Freeeride 125 propose un peu moins de contr&ocirc;le et de stabilit&eacute; longitudinale que la Patrick, mais les touchettes sont aussi un peu plus fluides</li>
</ul>',
'test_equipment' => 'Foil F4 Slalom / RF 6m',
'test_duration' => 3,
'test_conditions' => '5-25 knt Ouest',
'test_place' => 'La ciotat',
'created_at' => '2020-10-15 11:50:14',
'updated_at' => '2020-10-17 21:56:01',
),
98 => 
array (
'id' => 104,
'device_id' => 160,
'user_id' => 1,
'title' => 'Jesus marchant sur l\'eau',
'body' => '<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0191.jpg" alt="Takuma E Foil Cruising" /></p>
<div class="container" style="max-width: 100%;">
<div class="row mb-3">
<div class="col-4"><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0099.jpg" alt="Takuma E Foil Cruising" /></div>
<div class="col-8">
<h3>Pr&eacute;paration&nbsp;</h3>
<p>Une fois n&rsquo;est pas coutume, je vais m&rsquo;appesantir un peu sur la pr&eacute;paration de ce mat&eacute;riel un peu atypique ici.&nbsp;Le Takuma E-foil Cruising nous a &eacute;t&eacute; livr&eacute; dans 2 housses : l&rsquo;une contient la planche, et l&rsquo;autre, rectangulaire contient le groupe de propulsion et le foil. La batterie est &agrave; part.</p>
<p>Disons le tout de suite, chaque &eacute;l&eacute;ment p&egrave;se son poids (batterie : 12kg, groupe propulseur : 11kg, planche : 22kg) et il est donc fortement conseill&eacute; de r&eacute;aliser le montage assez pr&egrave;s de la zone de mise &agrave; eau , et m&ecirc;me d&rsquo;installer la batterie au bord de l&rsquo;eau.&nbsp;Vous aurez fait le calcul : le E-foil mont&eacute; fait 45kg : il est illusoire de vouloir le promener sur 500m hors de l&rsquo;eau.</p>
</div>
</div>
<div class="row mb-3">
<div class="col-8">
<p>On commence par monter l&rsquo;ensemble de propulsion sur la planche &agrave; l&rsquo;aide des 4 vis M6 dans les 2 rails US. Vu le poids de l&rsquo;ensemble, ces petites vis semblent l&eacute;g&egrave;res, mais &agrave; l&rsquo;usage &ccedil;a tient ! Je ne saurai que conseiller de bien surveiller l&rsquo;&eacute;tat de cette visserie dans le temps. En terme de position , j&rsquo;avais commenc&eacute; par une position centrale, mais on verra que je suis vite revenu &agrave; une position plus avanc&eacute;e.</p>
<p>On assemble ensuite l&rsquo;avion du foil, qui est commun avec une partie la gamme Surf / Sup de la marque. Sur notre ensemble de test, l&rsquo;aile est une 1600cm2. Cet assemblage n&rsquo;appelle pas de commentaire particulier : les connexions sont robustes et les assemblages pr&eacute;cis. On pressent une portance plut&ocirc;t XXL vu l&rsquo;&eacute;paisseur et la surface de l&rsquo;aile. Pour le premier test, j&rsquo;ai install&eacute; la cale de 1.5 sous le stab. je suis revenu &agrave; 0.5 rapidement.</p>
</div>
<div class="col-4"><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0100.jpg" alt="Takuma E Foil Cruising" /></div>
</div>
</div>
<div class="row mb-3">
<div class="col-6"><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0103.jpg" alt="Takuma E Foil Cruising" /></div>
<div class="col-6">
<p>On peut alors retourner l&rsquo;ensemble pour r&eacute;aliser les connexions &eacute;lectriques. Compte tenu du poids de la planche, et de l&rsquo;appui de l&rsquo;aile sur le sol, je conseille de faire ceci sur une surface meuble ou d&rsquo;intercaler une housse sous l&rsquo;aile pour le pas l&rsquo;ab&icirc;mer.</p>
</div>
</div>
<div class="row mb-3">
<div class="col-8">
<p>La premi&egrave;re connexion &agrave; effectuer est celle qui relie le groupe propulseur et l&rsquo;esc (contr&ocirc;leur &eacute;lectronique). La prise de connexion en aluminium type militaire respire la qualit&eacute; et la robustesse ! Elle est munie d&rsquo;un d&eacute;trompeur, donc aucun risque de se tromper, et le tout est s&eacute;curis&eacute;e par un bague rotative qui se visse. On installe ensuite la batterie en la glissant sous la sangle de maintien et on branche cette derni&egrave;re &agrave; l&rsquo;ESC &agrave; l&rsquo;aide de la m&ecirc;me connectique. La batterie est s&eacute;curis&eacute;e en place avec une sangle que l&rsquo;on veillera &agrave; ajuster pour que rien ne bouge.&nbsp;</p>
</div>
<div class="col-4"><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0107.jpg" alt="Takuma E Foil Cruising" /></div>
<div class="row mb-3">
<div class="col-4"><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0106.jpg" alt="Takuma E Foil Cruising" /></div>
<div class="col-8">
<p>A cet instant, si les 2 gros connecteurs en aluminium sont bien enfonc&eacute;s et bien viss&eacute;s, on a un ensemble parfaitement &eacute;tanche et fiable. Eh oui, le compartiment o&ugrave; est log&eacute; toute l&rsquo;&eacute;lectronique n&rsquo;est pas &eacute;tanche : ce sont les &eacute;l&eacute;ments internes qui le sont. Au contraire, l&rsquo;eau va venir remplir partiellement ce compartiment, et va participer au refroidissement de l&rsquo;&eacute;lectronique de puissance.&nbsp;Le joint mousse qui ferme la porte du compartiment &eacute;lectronique sert en r&eacute;alit&eacute; de filtre pour &eacute;viter l&rsquo;entr&eacute;e de sable ou l&rsquo;algue.</p>
</div>
</div>
<h3>Switch on</h3>
<div class="row mb-3">
<div class="col-8">
<p>On peut alors allumer la t&eacute;l&eacute;commande, puis la planche en appuyant un moment sur le bouton &eacute;tanche en silicone. D&egrave;s que la connexion wifi est &eacute;tablie entre la t&eacute;l&eacute;commande et le contr&ocirc;leur, les diodes passent au bleu et on peut refermer la porte et mettre l&rsquo;ensemble &agrave; l&rsquo;eau. A partir de l&agrave;, ne jamais mettre les doigts vers l&rsquo;h&eacute;lice car c&rsquo;est un vrai hachoir bien aff&ucirc;t&eacute; (heureusement bien prot&eacute;g&eacute; par un car&eacute;nage XL).&nbsp;</p>
<p>La t&eacute;l&eacute;commande doit absolument &ecirc;tre attach&eacute;e au poignet &agrave; l&rsquo;aide du leach fourni. En cas de chute, ceci &eacute;vitera un risque de perte. Je pr&eacute;cise tout de m&ecirc;me que cette t&eacute;l&eacute;commande flotte (on a v&eacute;rifi&eacute;). Cela parait &eacute;vident , mais ce n&rsquo;est pourtant pas le cas chez une partie de la concurrence (incroyable, non ?).</p>
<p>Je pr&eacute;cise &eacute;galement que la t&eacute;l&eacute;commande poss&egrave;de un petit &eacute;cran qui pr&eacute;cise le qualit&eacute; de la connexion wifi entre cette derni&egrave;re et l&rsquo;ESC, ainsi que la charge de la batterie en temps r&eacute;el. C\'est tr&egrave;s utile pour ne pas stresser sur l\'eau par rapport )&agrave; l\'autonomie : on sait toujours o&ugrave; on en est.</p>
<p>Pour la mise &agrave; l&rsquo;eau, il parait indispensable d&rsquo;&ecirc;tre 2. Le poids de l&rsquo;ensemble avec batterie ne permet pas de le manipuler seul sans risque de l&rsquo;ab&icirc;mer&hellip; et compte tenu de l&rsquo;encombrement et de l&rsquo;inertie, on privil&eacute;giera une mise &agrave; l&rsquo;eau la plus calme possible (&ccedil;a doit &ecirc;tre tr&egrave;s chaud dans le shore break). Le point positif : un mat de foil assez court, qui ne n&eacute;cessite pas comme en windfoil d&rsquo;avoir 1m d&rsquo;eau.</p>
</div>
<div class="col-4">
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0106.jpg" alt="Takuma E Foil Cruising" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0200.jpg" alt="Takuma E Foil Cruising" /></p>
</div>
</div>
<h3>T&eacute;l&eacute;commande</h3>
<div class="row mb-3">
<div class="col-8">
<p>Une fois sur l&rsquo;eau, il faut comprendre le fonctionnement de la t&eacute;l&eacute;commande. Objectivement, c&rsquo;est loin d&rsquo;&ecirc;tre intuitif au d&eacute;but, et au bout de 2 sessions, &ccedil;a reste encore le point un peu g&ecirc;nant du syst&egrave;me. Pour autant, je sais que l&rsquo;on va s&rsquo;y faire, et on voit bien que la marque a privil&eacute;gi&eacute; la s&eacute;curit&eacute; sur l&rsquo;ergonomie &hellip; ou plut&ocirc;t a con&ccedil;u une ergonomie maximisant la s&eacute;curit&eacute;. Pour faire court, il faut appuyer fortement sur la g&acirc;chette pour pouvoir faire d&eacute;marrer le moteur &agrave; l&rsquo;aide du potentiom&egrave;tre, et d&egrave;s que l&rsquo;on rel&acirc;che un peu la pression, tout s&rsquo;arr&ecirc;te. Aucun risque donc de voir la planche filer &agrave; l&rsquo;anglaise !&nbsp;</p>
<p>Par contre, quand on n&rsquo;a pas l&rsquo;habitude, le concept peut sembler g&ecirc;nant</p>
<ul>
<li>si on rel&acirc;che un peu la pression sur la g&acirc;chette, &ccedil;a s&rsquo;arr&ecirc;te net .. et &ccedil;a arrive quand on commence &agrave; aller un peu vite et &agrave; se d&eacute;tendre. Il faut maintenir une telle pression, que l&rsquo;on arrive m&ecirc;me &agrave; t&eacute;taniser lors des vols un peu longs. On aurait juste aim&eacute; que &ccedil;a fonctionne avec une pression un peu moins forte, mais je comprends l&rsquo;int&eacute;r&ecirc;t en terme de s&eacute;curit&eacute; : tu te d&eacute;-concentes , &ccedil;a s\'arr&ecirc;te.</li>
<li>Quand on veut red&eacute;marrer, il faut &agrave; chaque fois ramener le potentiom&egrave;tre &agrave; 0 avant de r&eacute;-appuyer sur la g&acirc;chette. Un peu laborieux (surtout que le potentiom&egrave;tre est assez dur), mais du coup aucun risque de d&eacute;marrer &agrave; fond et de se faire surprendre.&nbsp;</li>
</ul>
</div>
<div class="col-4">
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0109.jpg" alt="Takuma E Foil Cruising" /></p>
</div>
</div>
</div>
<h3>Let\'s start now</h3>
<p>Passons au vol proprement dit.&nbsp;Pour quelqu&rsquo;un qui pratique le foil (windfoil, kitefoil ou wingfoil), l&rsquo;apprentissage dure entre 5 et 10mn avant d&rsquo;&ecirc;tre &agrave; l&rsquo;aise. C&rsquo;est donc ultra rapide ! J&rsquo;imagine que pour un novice int&eacute;gral, cela va prendre un peu plus de temps, mais je table en moyenne sur une 30aine de minutes pour appr&eacute;hender les choses.</p>
<p>Le premier &eacute;l&eacute;ment &agrave; trouver est l&rsquo;&eacute;quilibre longitudinal sur la planche. Trop en avant, le foil n&rsquo;aura pas assez d&rsquo;incidence pour d&eacute;coller. Trop en arri&egrave;re, la planche se cabre et ne parvient pas &agrave; prendre de la vitesse. Il faut donc trouver la position des pieds, et id&eacute;alement trouver un rep&egrave;re pour pouvoir les positionner &agrave; chaque fois au bon endroit. Je vous conseille de commencer par les orteils du pied avant sur la charni&egrave;re de la trape &agrave; l&rsquo;avant, et le pied arri&egrave;re au niveau des verrous de trappe (cf. zones orange ci-dessous). Vous verrez que ce donne un stance assez large, mais c&rsquo;est id&eacute;al au d&eacute;but. En effet, il faut largement d&eacute;placer son centre de gravit&eacute; entre la phase de d&eacute;collage et la phase de vol. C&rsquo;est plus simple avec les pieds tr&egrave;s &eacute;cart&eacute;s.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0202.jpg" alt="Takuma E Foil Cruising" /></p>
<p>On mettra donc quasi tout son poids sur la jambe avant pour permettre &agrave; la planche d&rsquo;acc&eacute;l&eacute;rer. Si on reste prudent sur la puissance moteur, la planche va acc&eacute;l&eacute;rer progressivement, et le vol va intervenir &eacute;galement tr&egrave;s progressivement. On pourrait reculer plus rapidement son centre de gravit&eacute; (en transf&eacute;rant du poids sur la jambe arri&egrave;re), mais je vous conseille d&rsquo;&ecirc;tre patient et de laisser la planche acc&eacute;l&eacute;rer et le foil d&eacute;coller naturellement sans le &laquo; forcer &raquo; . Comme sur tous les engins &agrave; foil, cela va permettre &agrave; l&rsquo;ensemble d&rsquo;&ecirc;tre stabilis&eacute; par la vitesse d&egrave;s que vous serez en l&rsquo;air. Si vous essayez de d&eacute;coller en mettant du poids vers l&rsquo;arri&egrave;re et en cabrant le foil, il va effectivement sortir de l&rsquo;eau plus vite (avec moins de vitesse surtout), mais le vol &agrave; basse vitesse est instable et vous risquez d&rsquo;&ecirc;tre g&ecirc;n&eacute; par un mouvement combin&eacute; de lacet et de roulis d&eacute;sgr&eacute;able.&nbsp;</p>
<p>D&egrave;s que la planche va commencer &agrave; voler en ayant pris suffisamment de vitesse, vous allez pouvoir progressivement reculer votre centre de gravit&eacute; pour prendre de la hauteur et gagner de l&rsquo;amplitude et de la glisse. Restez raisonnables quand m&ecirc;me : le mat ne fait que 50cm, et &agrave; 15knt , on arrive vite au bout :) Si vous avez la chance de faire vos premiers essais un jour sans vent, ce premier vol dans un calme absolu est assez grisant en terme de sensation.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0121.jpg" alt="Takuma E Foil Cruising" /></p>
<p>Il faut ensuite g&eacute;rer la hauteur en positionnant habilement son centre de gravit&eacute;, et vous verrez que tout le jeux est de le faire avec un peu d&rsquo;anticipation car les 40kg de notre jouet pour grands enfants conduisent &agrave; une inertie non n&eacute;gligeable et donc des r&eacute;actions un peu d&eacute;cal&eacute;es avec vos ordres.&nbsp;</p>
<p>Dans toute cette premi&egrave;re phase d&rsquo;apprentissage, je vous conseille d&rsquo;essayer de garder une direction bien rectiligne pour ne pas ajouter de la difficult&eacute; avec les virages. D&egrave;s que ceci est acquis, vous pourrez passer aux virages, et l&agrave; encore, tout est dans la gestion de l&rsquo;inertie de la planche. Que ce soit backside ou frontside, &ccedil;a passe facilement si on y va mollo. Si vous engagez le virage avec fougue, il y beaucoup de chance que &ccedil;a ne finisse le nez dans l&rsquo;eau ;)</p>
<p>Avec un peu plus d&rsquo;habitude, vous pourrez resserrer un peu plus les pieds. Ceci vous permettra d&rsquo;avoir une position plus droite et donc plus confortable pour les jambes. Vous verrez que passer une heure &agrave; g&eacute;rer votre &eacute;quilibre .. &ccedil;a chauffe les cuisses &hellip; eh oui, car le gros int&eacute;r&ecirc;t du e-foil, c&rsquo;est que l\'on a une autonomie sup&eacute;rieure &agrave; 1 heure &agrave; une 15aine de knt de vitesse moyenne. Je vous garantie que pour les jambes, &ccedil;&agrave; fait long ! Avec les pieds un peu plus serr&eacute;s, il faudra juste exag&eacute;rer le basculement du poids sur la jambe avant pour lancer le foil au d&eacute;part.</p>
<h3>Aladin ... sur son tapis volant</h3>
<p>Une fois pass&eacute; la phase de d&eacute;couverte, on prend de plus en plus de plaisir car on se focalise moins sur la technique et plus sur les sensations.</p>
<p>Malgr&eacute; une vitesse somme toute assez modeste (16-17knt max), le fait ne n\'avoir rine dans les main donne une impression de vitesse assez soutenue. C&rsquo;est encore plus flagrant si il n&rsquo;y a pas du tout de vent car on ressent le vent vitesse de face, contrairement &agrave; ce qui se passe en voile o&ugrave; on l\'a plut&ocirc;t dans le dos.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0187.jpg" alt="Takuma E Foil Cruising" /></p>
<p>De fa&ccedil;on &eacute;tonnantes et malgr&eacute; la grosse aile, on n&rsquo;a absolument pas de sensation de manque de glisse, et comme on wind foil, on ressent tout axe qui se passe sous l&rsquo;eau (petit clapot, sillage). J&rsquo;ai eu l&rsquo;occasion d&rsquo;aller me balader dans les darses du chantier de La Ciotat o&ugrave; l&rsquo;eau est compl&egrave;tement glacis, la sensation est juste incroyable de fluidit&eacute; et de douceur.</p>
<p>On se prend vraiment pour J&eacute;sus marchant sur l&rsquo;eau &hellip; ou au choix Aladin sur son tapis volant. &nbsp;On oublie d\'ailleurs compl&egrave;tement le bruit du moteur (assez discret au passage).&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/trip.jpg" alt="Takuma E Foil Cruising" /></p>
<h3>Autonomie</h3>
<p>J\'au eu l\'occasion de faire 3 sorties avec le Cruising. Lors de la prise en main, en se l\'&eacute;changeant &agrave; 2, on a eu un peu plus de 2h d\'autonomie. Sur les 2 sorties suivantes o&ugrave; je me suis pas arr&ecirc;t&eacute;, j\'ai d&eacute;pass&eacute; les 1h30 &agrave; chaque fois, avec des parcours entre 15 et 20km sans aller jusqu\'au bout de la batterie. On profite donc &agrave; 100% de la faible train&eacute;e du foil !</p>
<h3>Tarif</h3>
<p>L\'engin complet coute 6799eur complet, dont presque 2000eur de batterie (avec contr&ocirc;leur interne). Evidemment, c\'est pas cadeau, mais d\'une part c\'est plut&ocirc;t moins cher que la concurrence, et surtout la fiabilit&eacute; et la robustesse de la partie &eacute;lectronique justifie largement ce tarif. Il faut bien avoir consience qu\'on a l&agrave; un vrai engin de d&eacute;placement motoris&eacute; capable de faire 20km d\'une traite. Si on met ceci en face de n\'importe quel bateau ou autre Jet Ski, &ccedil;a reste raisonnable.&nbsp;</p>
<h3>Bilan</h3>
<p>Au final, je m&rsquo;attendais &agrave; un jouet dont on fait vite le tour, mais je me suis pris au jeu : les sensations sont vraiment prenantes, et le fait d&rsquo;&ecirc;tre oblig&eacute; de g&eacute;rer en permanence son &eacute;quilibre donne tout l&rsquo;int&eacute;r&ecirc;t &agrave; la pratique : ce n&rsquo;est pas un jet ski &eacute;lectrique ! On sent bien qu\'avec de l\'habitude, il y a moyen d\'aller jouer dans la houle, mais il va falloir ma&icirc;triser un peu plus les anticipations. Pour les moins t&eacute;m&eacute;raires, on retiendra surtout que c\'est un engin magique pour voler au dessus des flots en toute s&eacute;r&eacute;nit&eacute;, et aller d&eacute;couvrir sans forcer les plus beaux endroits de notre littoral, sans bruit, sans poluer, et sans transpirer. Pour ma 2e sortie, le petit passage dans la calanque du Mugel, et au pied du bec de l\'aigle m\'ont laiss&eacute; des images plein les yeux ... il me tarde de refaire ceci au lever ou au coucher du soeil sur un plan d\'eau glacis ... belles sensations en prespective !</p>
<p>&nbsp;</p>',
'test_equipment' => 'na.',
'test_duration' => 2,
'test_conditions' => 'mer plate',
'test_place' => 'La ciotat',
'created_at' => '2020-11-11 19:32:05',
'updated_at' => '2020-11-13 16:55:26',
),
99 => 
array (
'id' => 105,
'device_id' => 162,
'user_id' => 1,
'title' => 'Encore mieux !',
'body' => '<p>Pour ce test, je vais surtout d&eacute;crire les &eacute;volutions entre la IRIS X V1 et la IRIS X MKII, mais &eacute;galement revenir sur le positionnement de ce mod&egrave;le sur le march&eacute;.&nbsp;</p>
<h3>Positionnement</h3>
<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-1.jpg" alt="Test Phantom IRIS X MKII 2021" /></div>
<div class="col-lg">
<p>Depuis 2 saisons maintenant, la plupart des marques ont per&ccedil;ues l\'arriv&eacute;e d\'une demande concernant les voiles d&eacute;di&eacute;es au foil. La plupart du temps, cette demande vient avant tout de leurs coureurs pour qui l\'apport est une &eacute;vidence ... elles ont donc logiquement ax&eacute; leur d&eacute;veloppement sur des mod&egrave;les racing, &agrave; l\'instar de Serverne (Hyperglide 2), NeilPryde (Flight Evo II), GA (Vapor Air), Phantom (IRIS RF) , Loft (Skyblade), Duotone (Warp foil) etc.</p>
<p>Nous avons largement milit&eacute; pour que cela ne s\'arr&ecirc;te pas l&agrave;. Nous consid&eacute;rons effectivement que la cible des coureurs n\'est pas un march&eacute; prioritaire car cela concerne trop peu de monde.</p>
<p>Quelques marques ont &eacute;galement compris l\'int&eacute;r&ecirc;t de proposer un produit plus grand public. La plupart sont d&eacute;di&eacute;es au foil freeride (Hydra, Swart, foilGlide, F-type, Skyscape, IRIS Z, Raise, ou encore Air Ride, et bient&ocirc;t NeilPryde FreeFlight).</p>
<p>Il existe toutefois quelques mod&egrave;les que l\'on peut qualifier de free-race, c\'est &agrave; dire interm&eacute;diaire entre la voile de race et la voile de freeride. C\'est &agrave; cette cat&eacute;gorie qu\'appartient la IRIS X.&nbsp;La concurence est plut&ocirc;t light puisque cette cat&eacute;gorie ne comportent que 3 mod&egrave;les : Phantom IRIS X , NeilPryde V8 Flight (2021), Gun Bow ... auxquelles ont peut ajouter la Loft Skyscape qui est interm&eacute;diaire entre une pure freeride et une free-race. Il faut dire que la conception d\'une telle voile est assez complexe car il faut trouver un juste milieu entre la lourdeur et l\'encombrement d\'une voile de course, et l\'&eacute;ventuel manque de performance (plage de vent, puissance, efficacit&eacute; au pr&egrave;s) d\'une voile de freeride.&nbsp;</p>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-2.jpeg" alt="Test Phantom IRIS X MKII 2021" /></div>
<div class="col-lg">
<h3>What\'s new ?</h3>
<p>SI le positionnement de la IRIS X n\'a pas chang&eacute;, elle a &eacute;t&eacute; techniquement assez profond&eacute;ment remani&eacute;e tout en conservant ses fondamentaux. Au chapitre des nouveaut&eacute;s techniques, un nouveau rond de guidant, des nouvelles r&eacute;partions de volume, une chute ouvrant de fa&ccedil;on plus harmonieuse, 2 lattes carbone, nouvelles surfaces ... et un design un peu plus color&eacute; 😉</p>
<h3>Nouvelles surfaces</h3>
<p>L\'intention originale &eacute;tait d\'ajouter une surface autour de 8.5 pour aller au dela de la IRIS X 7.4m2. Cependant, compte tenu de l\'aspect ratio des voiles de foil, il a &eacute;t&eacute; impossible d\'aller au del&agrave; de 8m2 sans passer sur un mat de 520... r&eacute;dhibitoire pour la plupart des pratiquants loisir (la cible de l\'IRIS X n\'&eacute;tant pas le comp&eacute;titeur). C\'est la raison pour laquelle la IRIS X s\'arr&ecirc;tera &agrave; 8m, et sera d&eacute;clin&eacute;e en 7m , 6m &nbsp;et 5m ... sachant que la plupart du temps, on va choisir environ 2m2 d\'&eacute;cart entre 2 voiles cons&eacute;cutives .. donc 7 et 5 pour les petits gabarits et 6 et 8 pour les plus costauds.&nbsp;</p>
<p>Pour les m&ecirc;mes raisons (taille de mat et &eacute;tagement), la seule vraie concurente en 2021 &agrave; savoir la NeilPryde V8 Flight sera &eacute;galement produite en 6, 7, et 8m</p>
<p>Si on parle de surface, il faut bien int&eacute;grer que ces voiles d&eacute;di&eacute;es sont plut&ocirc;t puissantes. A titre de comapraison, une IRIS X 6m aura au moins la puissance d\'une voile de Slalom en 7m ..et la 8m est plus puissante que bon nombre de 9 ou 9,4 m2 de slalom ... avec un poids bien plus contenu.&nbsp;</p>
</div>
</div>
</div>
<h3>Et qu\'est ce que &ccedil;a change sur l\'eau ?</h3>
<p>Avec la permi&egrave;re version de la IRIS X, nous avions comme beaucoup &eacute;t&eacute; carr&eacute;ment conquis, et elle est rapidement devenue notre voile de r&eacute;f&eacute;rence pour les tests. A force de naviguer avec, nous sommes arriv&eacute;s &agrave; une conclusison &eacute;vidente que la 5.8 &eacute;tait la plus r&eacute;sussie de la gamme ... et nous r&ecirc;vions donc d\'avoir une grande surface offrant le m&ecirc;me agr&eacute;ement en terme de l&eacute;g&egrave;ret&eacute; et de dynamisme. C\'est donc autour de la 8m que le boulot a &eacute;t&eacute; le plus important ! Si on arrivait &agrave; avoir une 8m aussi efficace que la 5.8 v1, le reste de la gamme allait suivre.&nbsp;</p>
<div class="container">
<div class="row">
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-goyard2.jpg" alt="Test Phantom IRIS X MKII 2021" /></div>
<div class="col-lg">
<p>Apr&egrave;s plusieurs prototypes, et des inspirations provenant de la nouvelle RF de course, cette 8m a enfin vu le jour avec succ&egrave;s. Le plus difficile a &eacute;t&eacute; de trouver comment lui laisser un max d\'efficacit&eacute; au puming et de puissance sans r&eacute;duire sa plage d\'utilisation dans les rafales, et sans gr&ecirc;ver le poids en rajoutant une latte. Dans la bataille, il a fallu remplacer les 2 grandes lattes par des mod&egrave;les carbone. Cela impacte forc&eacute;ment le cout de la voile, mais sinon c\'&eacute;tait une latte de plus, et le poids qui va avec 😉</p>
<p>Au final, cette nouvelle IRIS X dite "MKII" est une vraie r&eacute;ussite. Le ratio efficacit&eacute; au pumping / poids ressenti / stabilisation du flotteur / tenue dans le vent est au del&agrave; de ce que nous esp&eacute;rions ... et tout ceci en gardant une voile tr&egrave;s accessible. En terme de ressenti, la 8m parait aussi l&eacute;g&egrave;re que la pr&eacute;c&eacute;dente 7.4 ... avec une puissance largement sup&eacute;rieure.</p>
</div>
</div>
</div>
<h3>IRIS X ou IRIS RF ?</h3>
<div class="container">
<div class="row">
<div class="col-lg">
<p>Pour ceux qui h&eacute;siteraient, la comparaison entre la IRIS X et la IRIS RF est int&eacute;ressante car la diff&eacute;rence est flagrante. &nbsp;La IRIS X, c\'est 80% des perf de la RF avec 50% de la d&eacute;pense physique 🤣. Les plus grosses diff&eacute;rences se situent dans&nbsp;</p>
<ul>
<li>la facilit&eacute;, l\'efficait&eacute; et la l&eacute;g&egrave;ret&eacute; de la X au pumping. Pour en faire autant, la RF n&eacute;cessite au choix plus de vent, ou une condition physique bien plus athl&eacute;tique</li>
<li>la plage de vent incroyable de la RF grace &agrave; une tenue dans les rafales bluffante ... au point que la RF 8m se tient aussi loin que la X 7m</li>
</ul>
<p>La RF offre &eacute;videmment plus de vitesse au pr&egrave;s, et plus de puissance brute aux allures tr&egrave;s abatues ... mais sur des allures plus travers, la X se d&eacute;fend tellement bien que c\'est avec la RISI X MKII que Nicolas Goyard a &eacute;tabli son record personnel de vitesse en foil avec une VMax &agrave; 37.75 knt (combo IRIS X Board / IRIS X MkII 5m sail)</p>
</div>
<div class="col-lg"><img class="img-fluid" src="/storage/photos/1/2021-02/iris-x-goyard.jpg" alt="Test Phantom IRIS X MKII 2021" /></div>
</div>
</div>',
'test_equipment' => 'IRIS X Board, IRIS X Foil',
'test_duration' => 15,
'test_conditions' => 'Variées',
'test_place' => 'La Ciotat / Almanarre / Fos',
'created_at' => '2020-12-13 11:24:38',
'updated_at' => '2021-02-08 17:16:21',
),
100 => 
array (
'id' => 106,
'device_id' => 163,
'user_id' => 1,
'title' => 'Options',
'body' => '<p>Fid&egrave;le &agrave; son sch&eacute;ma, pas de nouveau foil &agrave; part enti&egrave;re chez Starboard pour 2021, mais des nouvelles pi&egrave;ces qui permettent de faire &eacute;voluer les foils existants. On applaudit des 2 mains car cette solution permet d&rsquo;&eacute;viter une obsolescence de votre investissement.</p>
<p>Pour 2021, Starboard propose 3 nouveaux stabilisateurs, 2 ailes, 1 fuselage et 1 mat.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_7188.jpg" alt="Starboard parts 2021" /></p>
<h3>Mat IQ95</h3>
<p>Le nouveau mat n&rsquo;est pas &agrave; proprement parler une vraie nouveaut&eacute; puisqu&rsquo;il a d&eacute;j&agrave; &eacute;t&eacute; commercialis&eacute; cette ann&eacute;e. Il s&rsquo;agit du mat IQ95 que l&rsquo;on a d&eacute;couvert cette ann&eacute;e au sein des packs olympiques. La nouveaut&eacute; 2021, c&rsquo;est la possibilit&eacute; d&rsquo;acqu&eacute;rir ce nouveau mat en dehors d&rsquo;un pack IQFOIL.</p>
<p>L&rsquo;IQ95 a la m&ecirc;me g&eacute;om&eacute;trie que le Carbone 95 actuel, mais avec une structure beaucoup plus rigide (+25%) en torsion (et un prix largement revu &agrave; la hausse). Pour situer, ce nouveau mat se paye le luxe d&rsquo;&ecirc;tre plus raide en torsion qu&rsquo;un LKRace 2020 ou qu\'un F4 2020. Par contre, la raideur en flexion progresse peu et reste en de&ccedil;&agrave; de beaucoup d&rsquo;autres foils typ&eacute;s race. Ce parti pris permet de faire progresser le foil sans en doubler le prix, en en conservant le c&ocirc;t&eacute; confortable du foil.</p>
<p>Sur l&rsquo;eau, la diff&eacute;rence de contr&ocirc;le est tr&egrave;s importante, et remet le Starboard dans la course des meilleurs foils du moment. Pour ceux qui ont l\'habitude du mat carbone 95 standard, on retrouve exactement le m&ecirc;me comportement, mais avec une facilit&eacute; d&eacute;cupl&eacute;e. C\'est tr&egrave;s largement sensible quelques soient les conditions, mais c\'est dans le vent soutenu, ou avec les grands fuselages et ailes que c\'est le plus &eacute;vident.&nbsp;</p>
<h3>Stabilisateurs&nbsp;</h3>
<p>Pour 2021, Starboard propose 3 nouveaux stabilisateurs</p>
<ul>
<li>255 -2</li>
<li>255 -2 Thin</li>
<li>200 -2 Thin</li>
</ul>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_7177.jpg" alt="Starboard parts 2021" width="1200" height="719" /></p>
<p>Le premier est identique au 255 standard, si ce n&rsquo;est son calage &agrave; -2&deg; d&rsquo;incidence. Utiliser un 255-2 avec une cale de 0 revient &agrave; utiliser le 255 standard avec une cale le -2</p>
<p>Le 255-2 Thin est un mod&egrave;le de m&ecirc;me envergure et corde, mais avec un profil plus fin offrant moins de puissance et plus de glisse. C&rsquo;est &eacute;galement le cas du dernier : le 200-2 avec une portance encore plus faible.</p>
<p>Suite &agrave; nos diff&eacute;rents tests, il apparait que ces nouveaux stab ont tr&egrave;s peu d&rsquo;int&eacute;r&ecirc;t sur les fuselages 75, 95+ et 105+. Leur faible portance ne permet pas d&rsquo;&eacute;quilibrer correctement le foil. A la limite, le 255-2 peut &ecirc;tre utilis&eacute; sur le 95+ ou le 105+ dans le vent tr&egrave;s soutenu, et en mettant une cale de 0 voir +1&deg;</p>
<p>Par contre, ces stab trouvent leur r&eacute;el int&eacute;r&ecirc;t dans l&rsquo;utilisation du fuselage 115+. On voit donc clairement que Tiesda les a d&eacute;velopp&eacute; dasn un objectif course puisque les coureurs n\'utilisen pratiquement que le 115.</p>
<p>Les versions Thin permettent de limiter la train&eacute;e, et sont d&eacute;di&eacute;es &agrave; l&rsquo;utilisation du 115 en mode Slalom. On les associera aux ailes 720 et 650 que l&rsquo;on pr&eacute;sente ci-apr&egrave;s.&nbsp;</p>
<p>Le 255-2 sera , lui, tr&egrave;s indiqu&eacute; sur le 115+ utilis&eacute; en mode Race , avec les ailes 800, 900 et 1000. Il permet d&rsquo;utiliser pleinement les r&eacute;glages offerts par les 6 cales de stab. On &eacute;vite ainsi d&rsquo;&ecirc;tre syst&eacute;matiquement bloqu&eacute; sur la cale -2 avec le 255 Std.</p>
<h3>Fuselage 105+</h3>
<p>En plus des fuselages 95+ et 115+ sortis en 2020, un nouveau fuselage de 105+ va &ecirc;tre disponible. Nous avons eu l&rsquo;occasion de le tester en avant premi&egrave;re.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_7175.jpg" alt="Starboard parts 2021" /></p>
<p>A l&rsquo;usage, ce fuselage est un juste milieu entre le 95+ et le 115+. Tout comme ces 2 mod&egrave;les, il profite d&rsquo;une position d&rsquo;aile avanc&eacute;e, et de cale de r&eacute;glage pour le stab. On pourrait consid&eacute;rer que les options 95 et 115 sont suffisantes pour couvrir toutes les conditions de navigation, mais au final, ce 105 pourrait &ecirc;tre le fuselage quasi-unique pour une pratique freerace.</p>
<p>Nous avons tous remarqu&eacute; que les coureurs PWA utilisent essentiellement le 115, dans la mesure o&ugrave; la pratique du foil en PWA se focalise essentiellement sur le light et le m&eacute;dium.</p>
<p>Pour un pratiquant freeracer qui souhaite &eacute;galement naviguer dans du vent soutenu, tout en gardant de l&rsquo;appui dans les molles et de la puissance sous le pied, ce 105 est r&eacute;ellement int&eacute;ressant. Il sera donc d&rsquo;autant plus int&eacute;ressant que les conditions de vent seront irr&eacute;guli&egrave;res. Dans des conditions de vent soutenu stable, le 95 sera plus indiqu&eacute;, en offrant moins de train&eacute;e.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_7176.jpg" alt="Starboard parts 2021" /></p>
<h3>Ailes</h3>
<p>2 nouvelles ailes seront propos&eacute;e d&egrave;s le d&eacute;but 2021 : une 650 et une 720. Elles sont &eacute;tiquet&eacute;es &laquo; Slalom &raquo;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_7178.jpg" alt="Starboard parts 2021" /></p>
<p>A l&rsquo;usage, la navigation avec ces 2 nouvelles ailes est effectivement assez diff&eacute;rente de ce donc nous avions l&rsquo;habitude avec la 550 et la 800. Il faut donc bien comprendre que ces ailes ne viennent pas remplacer les ailes existantes , mais apporter un autre comportement.</p>
<p>En terme de comportement, on a de vrais diff&eacute;rences</p>
<ul>
<li>en vol, les ailes slalom offrent une portance plus &lsquo;douce&rsquo;. On per&ccedil;oit moins de nervosit&eacute; et de puissance (un peu comme avec une p&eacute;dale de frein un peu spongieuse).&nbsp;</li>
<li>la conduite est &eacute;galement moins directive et moins pr&eacute;cise. A contrario, les ailes sont plus tol&eacute;rantes dans les conditions tr&egrave;s difficiles</li>
<li>les ailes de slalom offrent &eacute;videmment moins d&rsquo;appuis au pr&egrave;s, et plus de glisse dans les allures travers et abattues.&nbsp;</li>
<li>il faut plus de vitesse pour accrocher le vol avec les ailes slalom : il faudra donc pomper plus longtemps si les conditions sont light, ou lors des relances</li>
<li>sans pouvoir expliquer pourquoi, la navigation avec ces ailes Slalom modifie notre position. On navigue plus en position slalom : moins droit .. peut &ecirc;tre simplement car on a moins besoin de charger l&rsquo;avant.</li>
</ul>
<p>Une fois en vol, la portance brute de la 720 est &eacute;quivalente &agrave; celle de la 800. Pourtant , il faudra nettement plus de vitesse donc plus de temps de pumping et d&rsquo;&eacute;nergie pour d&eacute;coller avec la 720. Une fois lanc&eacute;, la glisse sup&eacute;rieure permet de garder le vol assez loin.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_7183.jpg" alt="Starboard parts 2021" /></p>
<p>La 650 offre sensiblement moins de portance et il faut r&eacute;ellement un vent &eacute;tabli pour en profiter. Je dois le v&eacute;rifier, mais je pense qu&rsquo;elle a moins de portance que la 550. En r&eacute;alit&eacute;, le d&eacute;collage est plus tardif, mais la tenue en l\'air au jibe semble &eacute;quivallente. En contre partie, la glisse qu&rsquo;elle propose est r&eacute;ellement sup&eacute;rieure aux autres ailes Starboard en plage haute : un joli jouet pour faire fumer le GPS !</p>
<p>Compte tenu du d&eacute;collage plus complexe, et de la pr&eacute;cision de conduite en retrait, de leur moindre capacit&eacute; au cap, ce sont des ailes que l\'on reservera princialement &agrave; des pratiquants experts qui savent naviguer en gardant toujours de la vitesse, qui savent jiber pr&eacute;cis, et poss&egrave;dent de la tonicit&eacute; &agrave; la relance. Cela tranche avec les pi&egrave;ces pr&eacute;c&eacute;dentes qui &eacute;taient r&eacute;element acessible &agrave; tous les niveaux de pratique.&nbsp;</p>
<h3>Bilan</h3>
<p>Avec ces nouvelles pi&egrave;ces, Starboard offre encore de nouvelles options pour exploiter leur foil dans un nombre toujours plus vaste de conditions et d\'objectifs. Comme &ccedil;a commence &agrave; faire beaucoup de combinaisons possibles, on vous incide r&eacute;llement &agrave; aller chercher du conseil aupr&egrave;s des revendeurs comp&eacute;tents.</p>
<p>Pour r&eacute;sumer et faire simple, 2021 nous apporte&nbsp;</p>
<ul>
<li>un nouveau mat haute performance optionel, on&eacute;reux, et donc destin&eacute; avant tout aux experts ou &agrave; ceux qui ne sont pas &agrave; 500&euro; pr&egrave;s</li>
<li>3 nouveaux stabilisateurs, essentiellement r&eacute;serv&eacute;s au format PWA slalom en fuslage 115+</li>
<li>2 ailes d&eacute;di&eacute;es &agrave; une navigation travers, offrant plus de glisse et de vitesse, mais plus techniques en plage basse</li>
<li>1 nouveau fuselage 105+ tr&egrave;s polyvalent, id&eacute;al pour l\'utilisation free-race hors course</li>
</ul>',
'test_equipment' => 'Flotteurs Slalom foil SB, Phantom IRIS X',
'test_duration' => 4,
'test_conditions' => '8 à 25 Knt',
'test_place' => 'La Ciotat , Almanarre',
'created_at' => '2020-12-17 20:27:08',
'updated_at' => '2021-03-08 19:08:19',
),
101 => 
array (
'id' => 107,
'device_id' => 168,
'user_id' => 1,
'title' => 'Une configuration race solide !',
'body' => '<p>A ce jour, les tests r&eacute;alis&eacute;s ont eu lieu des des conditions l&eacute;g&egrave;res et tr&egrave;s irr&eacute;guli&egrave;res. C\'est donc juste un premier ressenti qui sera affin&eacute; et compl&eacute;t&eacute;</p>
<p>En terme de sensation g&eacute;n&eacute;rale, on est &eacute;videmment dans quelque chose de coh&eacute;rent avec le F4 race 2020. Pour re-situer les choses en ce qui concerne le mod&egrave;le 2020, on est sur ce qui se fait de mieux dans le domaine Race et Freerace avec</p>
<ul>
<li>une rigidit&eacute; impressionnante du mat, du fuselage et de la connexion ... ce qui en fait l\'un des 2 foils offrant le plus de contr&ocirc;le facile aux c&ocirc;t&eacute; des AFS et TAAROA UHM</li>
<li>une glisse d\'excellent niveau (un cran en dessous du Phantom qui fait r&eacute;f&eacute;rence)</li>
<li>une grosse polyvalence d\'usage offerte par les 6 ailes (560-700-800-900-900 race-1000 Race), 3 fuselages (90-100-115) et 2 stab (38 et 42)... au m&ecirc;me titre que les Starboard et Phantom (du slalom au race ... au choix du moment)</li>
</ul>
<p>En montant sur le mod&egrave;le Race 2021, les 3 &eacute;l&eacute;ments que l\'on peut souligner imm&eacute;diatement sont : une glisse accrue, une rigidit&eacute; r&eacute;ellement sup&eacute;rieure, et une puissance perturbante.</p>
<p>En ce qui concerne la glisse, que ce soit avec l\'aile de 850 ou celle de 950, on sent plus de finesse dans le vent l&eacute;ger qu\'avec le mod&egrave;le 2020 .. et ce malgr&eacute; un mat pr&eacute;-s&eacute;rie totalement hors spec en ce qui concerne son &eacute;paisseur.&nbsp;En parall&egrave;le, la portance brute semble un peu plus faible. Il faut donc naviguer un peu plus fin qu\'avec les ailes 900 et 1000 pr&eacute;c&eacute;dentes.</p>
<p>En ce qui concerne la rigidit&eacute;, on fait encore un bon en avant avec ce mod&egrave;le 2021. Cette rigidit&eacute; monstrueuse apporte une facilit&eacute; incroyable en navigation. M&ecirc;me avec le fusleage 115+ (dont l\'aile est ultra avanc&eacute;e, comme sur le Starboard 15++), et en vol &agrave; la limite de la sortie de l\'eau, on ne ressent presque aucune &eacute;lasticit&eacute;. C\'est assez bluffant en comparaison avec les autres foils que nous avons eu l\'ocasion de tester.&nbsp;</p>
<p>En ce qui concerne la puissance et l\'&eacute;quilibre longitudinal, je suis plus r&eacute;serv&eacute; dans l\'optique d\'une utilisation loisir hors comp&eacute;tition. Le mod&egrave;le qui m\'a &eacute;t&eacute; envoy&eacute; est fourni avec 2 fuslages : 115 et 115+. La position d\'implantation du mat sur ces 2 fuselages diff&egrave;re de 9cm, ce qui est &eacute;norme ! Selon F4, le 115+ est qualifi&eacute; de "Race light wind", et le 115 de "Race High Wind". Dans mon cas, j\'ai effectu&eacute; mes tests dans du 5 &agrave; 15knt ... ce que l\'on peut qualifier de "Light Wind"</p>
<p>Avec le fuselage 115+, j\'ai &eacute;t&eacute; au d&eacute;part d&eacute;sar&ccedil;onn&eacute; par une portance tr&egrave;s pied avant. M&ecirc;me avec des r&eacute;glages avanc&eacute;s, et l\'utilisation d\'une voile de course en 9m (donc assez lourde), j\'&eacute;tais oblig&eacute; de mettre beaucoup de pression sur le pied de mat pour maintenir une assiette correcte et ne pas sortir de l\'eau. Cet &eacute;quilibre fonctionne mais ce n\'est clairement pas confortable tel quel pour un amateur. La contre partie, c\'est que j\'ai r&eacute;ussi &agrave; tr&egrave;s facilement caper dans un vent qui ne devait pas d&eacute;passer les 7knt ... comme quoi le concept est avant tout efficace. J\'avais juste un peu l\'impression d\'&ecirc;tre sur des &eacute;chasses g&eacute;antes 😉 . J\'ai retrouv&eacute; certains aspects qui m\'ont rappel&eacute; le test du Starboard 115++, mais avec une rigidit&eacute; et un contr&ocirc;le incomparable.</p>
<p>Je mets toutefois 2 b&eacute;mols &agrave; ma remarque : le premier est que cette configuration est con&ccedil;ue pour faire du up&amp;down dans le light .. et sur des allures tr&egrave;s serr&eacute;es. Le choix technique est donc assez logique, et il est plus facile de charger le pied avant. Le deuxi&egrave;me est que je n\'ai pas encore re&ccedil;u les jeux de cales de stab, et il est &eacute;vident qu\'un calage ad&eacute;quat va permettre de compenser une bonne partie cette surpuissance.</p>
<p>Edit. Lors d\'un 2e test, avec un stab cal&eacute;, le 115+ devient tout &agrave; fait g&eacute;rable et bien moins extr&ecirc;me. Cela montre une fois de plus l\'imprtance des r&eacute;glages et de la bonne conaissance de son mat&eacute;riel.</p>
<p>Avec le fusleage 115, tout au contraire, on a un &eacute;quilibre un peu pied arri&egrave;re dans le vent tr&egrave;s l&eacute;ger ... mais le foil devient confortable dans le medium. Il semble donc &eacute;vident que l\'appellation Race Hight Wind colle parfaitement au programme. L&agrave; encore, il va falloir jouer avec les calage pour trouver un &eacute;quilibre id&eacute;al si on souhaite l\'utiliser dans des conditions plus l&eacute;g&egrave;res.</p>
<p>Ce premier test sans calage m\'a donn&eacute; l\'impression d\'une vraie machine de course, clairement con&ccedil;ue pour une utilisation sans compromis. C\'est &eacute;crit dessus et on ne peux pas dire que c\'est un mensonge : on a un vrai foil Up&amp;down taill&eacute; pour la performance ! Pour une utilisation plus loisir, j\'avoue qu\'un interm&eacute;diaire entre ces 2 fuselages me sembleait plus consensuel. Par acquis de conscience, j\'ai d\'ailleurs compar&eacute; ces 2 nouveaux 115 au mod&egrave;le 2020, et il s\'av&egrave;re que le mod&egrave;le 2020 unique est exactement entre les 2.</p>
<p>En tout cas, vu le potentiel de l\'engin ici test&eacute; dans une configuration un peu &eacute;litiste, je me languis de tester la version slalom ! Je vais aussi travailler sur les r&eacute;glages pour dompter plus facilement cette formule 1.&nbsp;</p>
<p>&nbsp;</p>
<p>In English</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">To date, the tests carried out have taken place under light and very irregular conditions. So it\'s just a first feeling that will be refined and completed</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">In terms of general feeling, we are obviously in something consistent with the F4 race 2020. To re-situate things with regard to the 2020 model, we are on the best in the field of Race and Freerace foils</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">impressive rigidity of the mast, the fuselage and the connection ... which makes it one of the 2 foils offering the most easy control like the AFS and TAAROA UHM</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">an excellent level of glide (a notch below the Phantom, but at the level of Loke, Select or NP F4)</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">a great versatility of use offered by the 4 wings (700-800-900-1000), 3 fuselages (90-100-115) and 2 stab (38 and 42) ... in the same way as the Starboard and Phantom ( from slalom to race ... at the choice of the moment)</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">When riding on the F4 2021 Race model, the 3 elements that can be immediately highlighted are: increased glide, truly greater rigidity, and disruptive power.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">Regarding the glide, whether with the 850 wing or the 950 wing, we feel more finesse in the light wind than with the 2020 model .. and this despite a pre-series mast totally out of spec in regarding its thickness. At the same time, the gross lift seems a little lower. It is therefore necessary to sail a little finer than with the previous 900 and 1000 wings.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">As far as rigidity is concerned, we are still making good progress with this 2021 model. Our pre-series being out of spec, it will be necessary to re-test with the production model, but as it is, this monstrous rigidity brings incredible ease in navigation. Even with the 115+ fuselage (whose wing is ultra advanced, as on the Starboard 15 ++), and in flight at the limit of the exit of the water, one feels almost no elasticity. It\'s quite impressive compared to the other foils that we had the opportunity to test.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">As far as power and longitudinal balance are concerned, I am more reserved in terms of recreational use out of competition. The model that was sent to me comes with 2 fuselages: 115 and 115+. The position of the mast on these 2 fuselages differs by 9cm, which is enormous! According to F4, the 115+ is called "Race light wind", and the 115 "Race High Wind". In my case, I carried out my tests in 5 to 15 knt ... what can be described as "Light Wind"</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">With the 115+ fuselage, I was a bit taken aback by a very front foot lift. Even with advanced settings, and the use of a 9m racing sail (therefore quite heavy), I had to put a lot of pressure on the mast foot to maintain a correct attitude and not get out of the water. This balance works but it is clearly not comfortable as is for an amateur. The good point is that I managed to go upwind very easily in a wind that should not exceed 7knt ... which shows that the concept is above all effective. I just kind of felt like I was on giant stilts <span style="font-stretch: normal; line-height: normal; font-family: \'.Apple Color Emoji UI\';">😉</span>. I found some aspects that reminded me of the Starboard 115 ++ test, but with incomparable rigidity and control.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">However, I put 2 caveats to my remark: the first is that this configuration is designed to do up &amp; down in the light. The technical choice is therefore quite logical, and it is easier to load the front foot when upwind. The second is that I have not yet received the sets of stab shims, and it is obvious that an adequate wedging will make it possible to compensate a good part for this overpower.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">With the 115 fuselage, on the contrary, we have a bit of a back foot balance in the very light wind ... but the foil becomes comfortable in the medium. It therefore seems obvious that the name Race Hight Wind fits perfectly with the program. Here again, we will have to play with the wedges to find an ideal balance if we want to use it in lighter conditions.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">This first test gave me the impression of a true racing machine, clearly designed for uncompromising use. It\'s written on it and we can\'t say it\'s a lie: we have a real Up &amp; Down foil built for performance! For a more leisure use, I admit that an intermediary between these 2 fuselages seemed to me more consensual. As a matter of fact, I compared these 2 new 115s to the 2020 model, and it turns out that the single 2020 model is exactly between the 2.</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\'; min-height: 14px;">&nbsp;</p>
<p style="margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: \'Helvetica Neue\';">In any case, given the potential of the machine tested here in a somewhat elitist configuration, I can\'t wait to test the slalom version! I will also work on the settings to more easily tame this formula 1.</p>',
'test_equipment' => 'IRIS X MKII 8M et NP EVO II 9M, IRIS X pro board et Proto Tiaki',
'test_duration' => 2,
'test_conditions' => 'entre 5 et 15 knt',
'test_place' => 'Almanarre / La ciotat',
'created_at' => '2021-01-21 16:56:48',
'updated_at' => '2021-03-07 18:29:12',
),
102 => 
array (
'id' => 108,
'device_id' => 164,
'user_id' => 1,
'title' => 'Le même ADN, mais des progrès partout',
'body' => '<p>Ce test rapide dans des conditions difficiles avait surtout pour objectif d\'avoir un premier ressenti en comparaison avec le mod&egrave;le 95 2020. Il fait suite &agrave; un premier essai rapide effectu&eacute; &agrave; l\'occasion des s&eacute;lection de mat&eacute;riel Windfoil jeune en Sept &agrave; Martigues.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1066.jpeg" alt="Test AFS 95 V2 2021" /></p>
<h3>G&eacute;n&egrave;se</h3>
<p>Pour refaire la g&eacute;n&egrave;se de ce mod&egrave;le, l\'&eacute;volution de l\'AFS 95 a &eacute;t&eacute; boost&eacute;e par la demande de la FFV de proposer un foil performant pour les r&eacute;gates U17. La r&eacute;ponse d\'AFS ne pouvait se faire qu\'autour du mod&egrave;le le plus polyvalent de leur gamme, &agrave; savoir le 95. Les &eacute;volutions apport&eacute;es concernent essentiellement 2 points : la qualit&eacute; de glisse et les capacit&eacute;s de remont&eacute;e au vent.</p>
<h3>Dans la continuit&eacute;</h3>
<p>En utilisant ce nouvel AFS 95 (que je qualifierai de V2 puisqu\'il n\'y a pas de mill&eacute;sime chez AFS), ce qui saute aux yeux en premier, c\'est que l\'on est bien sur un AFS, et que le marque a s&ucirc; conserver l\'ADN de ses produits au travers de cette &eacute;volution. Pour le dire autrement, on a un vrai AFS 95 ... en mieux 😀. Ceux qui aimaient le mod&egrave;le pr&eacute;c&eacute;dent vont adorer celui-ci, et ceux qui n\'aiment pas le feeling des foils AFS ne trouveront pas ici un produit &agrave; leur gout. On retrouve donc les principales caract&eacute;ristiques des foils de la marque bretonne &agrave; savoir :</p>
<ul>
<li>une stabilit&eacute; lat&eacute;rale solide, qui n&eacute;cessite m&ecirc;me plus d\'effort que la moyenne pour aller &agrave; la contre g&icirc;te, mais qui en contre partie apporte une forte sensation de s&eacute;curit&eacute; et permet de border ... longtemps 😉</li>
<li>une rigidit&eacute; maitris&eacute;e qui, associ&eacute;e &agrave; un fuselage de taille moyenne, apporte un des meilleurs contr&ocirc;les dans le vent fort du march&eacute;</li>
<li>un comportement doux avec des r&eacute;actions assez lentes, &agrave; l\'oppos&eacute; de certains foils vifs et nerveux . C\'est un &eacute;l&eacute;ment essentiel de la "signature AFS", et cela participe fortement &agrave; la sensation de facilit&eacute; et de s&eacute;curit&eacute;. Dans des conditions compliqu&eacute;es, l\'AFS 95 est rassurant en comparaison avec d\'autres, et bien moins fougueux.&nbsp;</li>
</ul>
<h3>Des vraies &eacute;volutions</h3>
<p>Le nouveau mod&egrave;le apporte, lui, des am&eacute;liorations sur 2 points qui font partie de ce que l\'on pourrait qualifier de point faibles des mod&egrave;les pr&eacute;c&eacute;dents, sans franchement que ce ne soit r&eacute;dibitoire car ils restent des mod&egrave;les de r&eacute;f&eacute;rence tr&egrave;s appr&eacute;ci&eacute;s de nombreux utilisateurs.</p>
<p>La premi&egrave;re chose qui fait des vrais progr&egrave;s est la sensation de glisse distill&eacute;e par le foil. M&ecirc;me si ce point n\'est pas &agrave; proprement parler un &eacute;l&eacute;ment de performance, c\'est tout de m&ecirc;me important car le plupart d\'entre nous naviguons d\'abord pour prendre du plaisir et cela passe par les sensations. Pour situer, le nouveau mod&egrave;le vient se situer en comparaison &agrave; l\'&eacute;quivallence d\'un Starboard par exemple.&nbsp;</p>
<p>En dehors de la sensations de glisse, la train&eacute;e du mat semble &eacute;galement plus faible, et on gagne dans la capacit&eacute; d\'acc&eacute;l&eacute;ration du foil. C\'est assez net dans la phase de d&eacute;collage. Dans les discussions, les foils AFS ne sont souvent pas r&eacute;put&eacute;s pour leurs aptitudes en bas de plage en comparaison avec d\'autres, mais cette fois, la combinaison r&eacute;duction de train&eacute;e + fuselage plus long permettent de franchir un cap. Certes, on ne viendra pas concurrencer sur ce terrain les mod&egrave;les de race d&eacute;di&eacute;s ou les mod&egrave;les tr&egrave;s fins et nerveux comme les Loke ou autre Phantom, mais pour un foil polyvalent &agrave; fuselage fixe, on se situe &agrave; un niveau tr&egrave;s correct ... surtout quand on tient compte de ses prossibilit&eacute;s dans le vent soutenu.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1067.jpeg" alt="Test AFS 95 V2 2021" /></p>
<p>Le fuselage, justement, a &eacute;t&eacute; allong&eacute; (devant et derri&egrave;re) et rigidifi&eacute; pour offrir plus d\'appui au pr&egrave;s et dans le vent l&eacute;ger. La diff&eacute;rence est tr&egrave;s notable, et a une cons&eacute;quence positive &eacute;galement sur la facilit&eacute; de boucler les jibes en l\'air. En l\'&eacute;tat, le choix fait pour ce 95 V2 constitue un excellent compromis. Avec un fuselage fixe, qui ne permet donc pas de choisir plus ou moins long en fonctions du terrain ou des conditions, on a ici une proposition qui offre une vraie polyvalence. Le gain en bas de plage est apr&eacute;ciable, et en haut de plage, il suffira de baisser un peu plus vite en taille d\'aile pour ne pas se retrouver avec un appui pied avant compliqu&eacute; &agrave; g&eacute;rer.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1068.jpeg" alt="Test AFS 95 V2 2021" /></p>
<p>Dernier point &agrave; signaler : malgr&eacute; l\'allongement du fuselage, le contr&ocirc;le reste au m&ecirc;me niveau gr&acirc;ce &agrave; une rigidit&eacute; en hausse. Un excellent point que l\'on doit signaler car il est tr&egrave;s important dans le plaisir d\'utilisation ... en particulier dans les conditions difficiles.</p>
<h3>Bilan</h3>
<p>Pour faire un premier bilan g&eacute;n&eacute;ral, l\'AFS 95 V2 est une vraie &eacute;volution qui pousse un peu plus loin les possibilit&eacute;s d\'un foil &agrave; fuselage fixe tout en gardant l\'ADN AFS. Ce mod&egrave;le reste &agrave; 100% dans la cible free-race, et il garde les forces de la V1 (facilit&eacute;, stabilit&eacute; lat&eacute;ale et lacet, contr&ocirc;le) et progresse dans la glisse, la plage basse et le cap. Sa puissance sup&eacute;rieure justifiera encore plus l\'acquisition d\'une 2eme aile plus petite. Cette nouvelle plateforme rajeunie sera d\'ailleurs parfaite pour acueillir les nouvelles ailes slalom de la marque, qui, elles aussi, vont dans le sens de la glisse.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1069.jpeg" alt="Test AFS 95 V2 2021" /></p>',
'test_equipment' => 'Board Phantom IRIS X, Voile IRIS X MKII 6M',
'test_duration' => 2,
'test_conditions' => 'Plat, mistral très irrégulier, 5>20knt',
'test_place' => 'La Ciotat',
'created_at' => '2021-01-29 09:59:07',
'updated_at' => '2021-02-08 15:04:28',
),
103 => 
array (
'id' => 109,
'device_id' => 161,
'user_id' => 1,
'title' => 'Moderne sur toute la ligne !',
'body' => '<p>Nous avions eu un premier aper&ccedil;u rapide des capacit&eacute;s de ce flotteur lors des tests de labellisation FFV de Martigues. A l\'&eacute;poque, c\'&eacute;tait encore un prototype, &nbsp;qui manquait de volume sur la partie avant.&nbsp;Le mod&egrave;le de s&eacute;rie &agrave; corrig&eacute; ce d&eacute;tail, et le flotteur gagne &agrave; la fois en capacit&eacute; &agrave; porter des surfaces de voile plus importantes (jusqu\'&agrave; 8m), et en r&eacute;action sur les touchettes.</p>
<p>Avec cette compact 83 de s&eacute;rie, AHD propose un flotteur de foil parfaitement dans le vent, et qui marque une &eacute;norme &eacute;volution par rapport &agrave; la s&eacute;rie Thunderbold. Si ces derniers offraient aux d&eacute;butants l\'avantage d\'un d&eacute;collage tr&egrave;s progressif, et d\'une certaine inertie qui tent &agrave; gommer les erreurs de conduite, la compact s\'adresse aux foileurs plus exp&eacute;riment&eacute;s. Exit le c&ocirc;t&eacute; poussif, lourd et encombrant, et place &agrave; un flottteur r&eacute;actif, l&eacute;ger sous les pieds avec lequel on fait corps.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1227.jpeg" alt="Test AHD Compact foil 83 2021" /></p>
<h3>Construction</h3>
<p>Il me parait important de pr&eacute;ciser dans ce test que les flotteurs ADH ont une vraie sp&eacute;cificit&eacute; dans le monde du Windsurf. Si l\'on met &agrave; part des micro marques comme FMX, Future Fly, Carbon Art, Horue, Tiaki ou Elix ... AHD est l\'une des 2 seules marques (avec Patrick Diethelm) &agrave; avoir choisi une production industrielle hors de Cobra (Thailande). Chacun aura son avis, et en parcourant les forums, on lira des avis tr&egrave;s tranch&eacute;s et totalement oppos&eacute;s.</p>
<p>Pour notre part, h&eacute;bergeant un atelier de r&eacute;paration, nous notons que les choix de construction sont clairement diff&eacute;rents et que ceci a une cons&eacute;quence sur la r&eacute;action de la structure aux chocs. On pourrait faire un dossier complet (et long) &agrave; ce sujet, mais de fa&ccedil;on tr&egrave;s g&eacute;n&eacute;rale, on constate au vu des nombreuses r&eacute;parations entreprises 3 types de comportement struturels</p>
<ul>
<li>Sur la construction type AST Cobra (monolitique verre), on a une bonne r&eacute;sistance aux petits et moyens impacts. Par contre, on a des d&eacute;formations g&eacute;n&eacute;rales &agrave; la longue, et des d&eacute;gars qui peuvent &ecirc;tre assez marqu&eacute;s et &eacute;tendus sur les gros chocs</li>
<li>Sur la construction sandwich cobra (verre ou de plus en plus rarement carbone), on a une assez forte sensibilit&eacute; aux petits impacts (&ccedil;a fissure tr&egrave;s vite). Par contre, la structure g&eacute;n&eacute;rale est r&eacute;sistante avec un tr&egrave;s bon vieillissement structurel. En cas de choc important, c\'est en g&eacute;n&eacute;ral la structure qui r&eacute;siste le mieux avec des d&eacute;gas moins &eacute;tendus que la moyenne. C\'est &eacute;galement celle qui est la plus facile a r&eacute;parer car celle comporte peu de mastic.</li>
<li>Sur la construction AHD, on se rapproche du comportement de l\'AST (faible sensibilit&eacute; aux petits chocs, d&eacute;gas assez &eacute;tendus quand &ccedil;a casse), mais sans d&eacute;formations car le sandwich permet de conserver une bonne tenue structurelle g&eacute;n&eacute;rale dans le temps.. et surtout un poids qui est beaucoup plus contenu que l\'AST, en particulier sur les derni&egrave;res g&eacute;r&eacute;n&eacute;rations (de gros progr&egrave;s ces derniers temps)</li>
</ul>
<p>Pour nous, il est donc impossible de dire qu\'une construction est fonci&egrave;rement meilleure que l\'autre car elles sont diff&eacute;rentes. Par contre, il est &eacute;vident que si on int&egrave;gre la composante tarif &agrave; l\'&eacute;quation, la construction AHD offre une proposition bien plus all&eacute;chante que l\'AST &agrave; un tarif &eacute;quivallent dans certaines marques (1500eur pour cette compact 83, soit le m&ecirc;me tarif qu\'une JP AST par exemple).</p>
<p>Si on parle de rapport qualit&eacute; prix, il me parait n&eacute;cessaire d\'&eacute;voquer aussi le c&ocirc;t&eacute; finition et d&eacute;tails. Beaucoup d\'acheteurs cat&eacute;siens veulent de rassurer en pensant faire un investissement tr&egrave;s calcul&eacute;, mais nous voyons parfaitement que le c&ocirc;t&eacute; affectif est finalement aussi important, et m&ecirc;me l\'emporte r&eacute;guli&egrave;rement. De ce point de vue, Il faut admettre que la d&eacute;co veillissante et l\'&eacute;quipment basique (antid&eacute;rappant, pads, footstraps) des AHD recoltent peu de suffrages, et tranchent avec le c&ocirc;t&eacute; tr&egrave;s moderne du shape de cette compact 83. Le foss&eacute; se tranche un peu plus depuis que des concurrents comme Fanatic, JP, Starboard ou Tabou ont encore fait un bon en avant sur ce param&egrave;tre.</p>
<h3>D&eacute;collage</h3>
<p>Comme sur les flotteurs free-race de derni&egrave;re g&eacute;n&eacute;ration (Exocet RF V2, Phantom IRIS X, Starboard 150, Patrick Foil Ride), la compact 83 a la capacit&eacute; de d&eacute;coller sur quelques m&egrave;tres en faisant popper le flotteur. Il n\'est pas n&eacute;cessaire d\'attendre l\'acc&eacute;l&eacute;ration compl&egrave;te et le planning : un petit coup de pression sur le pied arri&egrave;re au bon moment, et la planche \'bondit\' hors de l\'eau. Ceci est facilit&eacute; par la faible distance entre l\'arri&egrave;re du boitier et l\'arri&egrave;re du flotteur, ainsi que par l\'&eacute;paisseur plut&ocirc;t faible du tableau arri&egrave;re.`</p>
<p>Gr&acirc;ce a sa largeur mod&eacute;r&eacute;e, l&rsquo;acc&eacute;l&eacute;ration avant le d&eacute;collage est plut&ocirc;t ais&eacute;s sans mettre des toiles &eacute;normes. Le volume de la planche sur l&rsquo;avant permet d&rsquo;utiliser sans probl&egrave;me 8m&sup2; l&eacute;g&egrave;re, mais je pense pas qu&rsquo;une 9m&sup2; soit tr&egrave;s appropri&eacute;e et permette de gagner grand-chose dessus.&nbsp;</p>
<h3>En vol</h3>
<p>En l&rsquo;air, la planche para&icirc;t petite sous les pieds avec peu d\'inertie. A titre de comparaison, elle parait nettement moins grosse que la Starboard 150 ou que la Patrick FoilRide 145. En terme de feeling, on se rapproche plus de la IRIS X 83 ou la RF 81 V2. Comme avec ces 2 flotteurs, il y a un cot&eacute; intuitif dans la conduite, un peu comme si la planche &eacute;tait un prolongement du corps.</p>
<p>En contre partie, on a moins une impression de puissance plus limit&eacute;e sous le pied arri&egrave;re. En fonction du foil utilis&eacute; et des r&eacute;glages retenus (calage du stab), on pourrait avoir une impression de pied arri&egrave;re un peu fuyant dans le light, surtout au pr&egrave;s. C\'est assez marqu&eacute; en comparaison avec les 2 planches les plus puissantes du groupe (Starboard, Patrick), un peu moins en comparaison avec la RF ou la Phantom.&nbsp;</p>
<p>&nbsp;</p>
<h3>Contr&ocirc;le</h3>
<p>En terme de contr&ocirc;le, le plan de pont assez plat mais surtout peu &eacute;pais sous le pied arri&egrave;re apporte beaucoup de confiance et de facilit&eacute;. Ce type de flotteur offrant beaucoup de contr&ocirc;le aura tendance &agrave; assagir les r&eacute;actions des foils un peu trop souples. Perso, j\'aurai aim&eacute; une courbe encore moins marqu&eacute;e sous le talon (&agrave; l\'image de la Tabou ou de la Phantom), mais on a d&eacute;j&agrave; franchi un cap, et ces formes plus bomb&eacute;es ont &eacute;galement leurs afficionados. De le m&ecirc;me fa&ccedil;on, le pont tr&egrave;s simple facilit&eacute; la prise en main pour les manoeuvres et il n\'y a aucune g&ecirc;ne lors du jibe. L&agrave; aussi, tout est assez intuitif. L\'angle des straps avant facilite la sortie et l\'entr&eacute;e du pied lors de la manoeuvre.</p>
<h3>Equilibre longitudinal</h3>
<p>Concernant l\'&eacute;quilibre longitudinal, la compact 83 se marie facilement avec des foils &agrave; aile avanc&eacute;e. J\'ai fait le test avec le F4 race sans aucune g&ecirc;ne. C\'est assez coh&eacute;rent avec l\'&eacute;volution g&eacute;n&eacute;rale des foils, et en particulier avec derni&egrave;res g&eacute;n&eacute;rations d\'AFS &agrave; fuselage rallong&eacute;. Par extension, il faudra probalement faire attention aux foils plut&ocirc;t pied arri&egrave;re d\'ancienne g&eacute;n&eacute;ration (NP Flight et NP F4, Zeeko amplifier v1, Starboard GT, Noe en 75cm). En terme de stabilit&eacute; longitudinale, la faible inertie du flotteur permet de r&eacute;agir sans d&eacute;lais. M&ecirc;me dans des conditions mouvement&eacute;es, un pilote aguerris pourra repousser assez loin les limites. Au contraire, un d&eacute;bautant sera certainement plus &agrave; l\'aise avec une planche moins vive. Dans le vent soutenu, le faible volume de l\'avant offre peu de prise en vent, et ainsi pas de d&eacute;gradation de la stabilit&eacute;. Par contre, on a moins d\'effet de stabilisation a&eacute;rodynamique que ce que nous avons ressenti sur l\'exocet V2 et surtout la Phantom.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1228.jpeg" alt="Test AHD Compact foil 83 2021" /></p>
<h3>Touchettes</h3>
<p>C&ocirc;t&eacute; touchettes, on est sur un bon niveau dans la lign&eacute;e des mod&egrave;les de derni&egrave;re g&eacute;n&eacute;ration. Les contacts l&eacute;gers sont absorb&eacute;s sans aucune g&egrave;ne. Lors des contacts plus appuy&eacute;s, que ce soit sur le rail ou sur la car&egrave;ne, le ralentissement est plus sensible que sur la Phantom ou l\'Exocet, notamment en raison d\'un volume plus faible, mais moindre que sur la Starboard 150 ou la Patrick Diethelm. Plus la voile sera petite, moins cette diff&eacute;rence sera sensible.</p>
<h3>Bilan</h3>
<p>Cette compact 83 est objectivement une excellente surprise, et une &eacute;norme &eacute;volution apr&egrave;s la s&eacute;rie Thunderbold. Grace &agrave; ses qualit&eacute;s et sa polyvalence, elle se fait une place au sein des meilleurs mod&egrave;les freerace du moment. Dans cette cat&eacute;gorie, elle offre une option de compacit&eacute; et de r&eacute;activit&eacute; dans un volume contenu, en mettant plus l\'accent sur le contr&ocirc;le et l\'accessibilit&eacute; que sur la puissance. Avec sa production en Tunisie, elle propose un rapport solidit&eacute; / prix excellent. Le tableau serait parfait si AHD parvenait &agrave; modernier son design , et &agrave; monter en gamme concernant l\'&eacute;quipement de ses flotteurs.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1274.jpeg" alt="Test AHD Compact foil 83 2021" /></p>',
'test_equipment' => 'Foil F4 Race, IRIS X MKII 8M',
'test_duration' => 2,
'test_conditions' => 'Est plat 10-20 knt',
'test_place' => 'Almanarre',
'created_at' => '2021-02-06 20:02:50',
'updated_at' => '2021-02-08 14:40:53',
),
104 => 
array (
'id' => 110,
'device_id' => 172,
'user_id' => 1,
'title' => 'Engin de course',
'body' => '<p>La pr&eacute;paration du flotteur n\'appelle pas de commentaire particulier. Le seul point un peu g&eacute;nant concerne les puits de vis d\'ailerons. Ils sont tellement profonds qu\'il va bient&ocirc;t falloir une lampe de sp&eacute;l&eacute;o et des doigts de pianiste pour mettre en place les vis 🤣. Heureusement, la visserie 100% torx et la cl&eacute; fournie simplfient bien cette t&acirc;che. Dans les points tr&egrave;s positifs qui n\'ont rien &agrave; voir avec la navigation mais qui sont &agrave; signaler : le poids de la planche est assez bluffant et bien agr&eacute;able lors des manipulations. Les mauvaises langues diront que c\'est plus fragile, mais on n\'a rien sans rien ... et vous &ecirc;tes pr&eacute;venus : c\'est un flotteur de course et non un chart d\'assault !&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1273.jpeg" alt="test starboard foil slalom 81 2021" /></p>
<h3>D&eacute;collage</h3>
<p>En comparaison avec nos flotteurs de r&eacute;f&eacute;rence, les mod&egrave;les Foil Slalom peuvent surprendre car leur fonctionnement est quelque peu diff&eacute;rent. D\'un c&ocirc;t&eacute;, la car&egrave;ne tr&egrave;s pinc&eacute;e permet d\'avoir une acc&eacute;l&eacute;ration plus ais&eacute;e en comparaison avec un flotteur foil traditionnel de m&ecirc;me largeur. D\'un autre c&ocirc;t&eacute;, cette m&ecirc;me car&egrave;ne pinc&eacute;e offre moins d\'appui &agrave; basse vitesse. Il est ainsi plus compliqu&eacute; de faire poper la planche.&nbsp;Au final, cette forme de car&egrave;ne est plus adapt&eacute;e &agrave; l\'utilisation de voiles de surface modeste, mais n&eacute;cessite une acc&eacute;l&eacute;ration plus prolong&eacute;e ... donc au choix plus de vent, ou un pumping de plus longue dur&eacute;e.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1233.jpeg" alt="test starboard foil slalom 81 2021" /></p>
<h3>Equilibre en vol</h3>
<p>Sur ce point aussi, les flotteurs foil slalom tranchent avec ce que nous connaissons chez Starboard avec des mod&egrave;les comme les FOIL FREERIDE 125 ou 150. Il y a 2 diff&eacute;rences essentielles</p>
<ul>
<li>un positionnement des straps tr&egrave;s en avant. On avait l\'habitude de flotteurs Starbaord assez peu adapt&eacute;s aux foils pied arri&egrave;re. Cette fois, c\'est encore plus marqu&eacute; ! M&ecirc;me avec les straps en position la plus recul&eacute;e, il faudra &eacute;viter tout fuselage de taille inf&eacute;rieure &agrave; 100cm , et jouer avec les cales de stab pour &eacute;quilibrer l\'ensemble. Tout ceci est assez logique car le flotteur a &eacute;t&eacute; d&eacute;velopp&eacute; pour l\'utilisation des foils Starboard avec fuselage 115 plus, dont l\'aile est tr&egrave;s avanc&eacute;e.&nbsp;</li>
<li>une inertie sup&eacute;rieure sur l\'axe longitudinal et lacet . Avec ses 167L pour 2m20, un nez bien garni, et malgr&eacute; un poids global tr&egrave;s contenu, les Foil &nbsp;Slalom ont largement plus d\'inertie sur l\'axe longitudinal que les mod&egrave;les free-race compacts modernes. Ce n\'est ni un avantage ni un inconv&eacute;nient , mais cela modifie de fa&ccedil;on importante les sensations. Ceux qui aiment les flotteurs r&eacute;actifs et joueurs passeront leur chemin. Dans la cadre d\'une utilisation course, ce sera plut&ocirc;t un avantage&nbsp;</li>
</ul>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1229.jpeg" alt="test starboard foil slalom 81 2021" /></p>
<p>Lors de mes tests, j\'ai positionn&eacute; les straps en position centrale avec les fuselages type race (Starboard 115 +, Phantom 110 Evo, F4 115 race +), et en position arri&egrave;re sur les fuselages moyens (F4 100+, Phantom 100 Evo). Merci aux vis torx pour effectuer le changement rapidement &agrave; la visseuse 😉</p>
<h3>Plan de pont et contr&ocirc;le</h3>
<p>Le plan de peau est assez simple en arri&egrave;re du pied de mat, ce qui offre de la facilit&eacute; lors des manoeuvres. Au niveau des pads, il est tr&egrave;s agr&eacute;able sous le pied avant, mais plus discutable sous le pied arri&egrave;re avec une courbure assez marqu&eacute; en plein milieu la vo&ucirc;te plantaire. Je sais que certains vont aimer et d\'autres moins. Pour ma part, je pr&eacute;f&egrave;re des ponts plus plats &agrave; l\'image des Excocet, Phantom ou Tabou car cela facilite sensiblement le contr&ocirc;le de l\'assiette transersale du flotteur. Les afficionados du Slalom pr&eacute;f&egrave;rent en g&eacute;n&eacute;ral des formes plus vout&eacute;es car cela se rapproche un peu plus des flotteurs de slalom traditionnels. Lors de nos tests de cette Slalom Foil 81, l\'une des sessions a eu lieu dans une houle form&eacute;e, et dans ces conditions la remarque pr&eacute;c&eacute;dente est assez flagrante. Le cumul pont vout&eacute; + forte &eacute;paisseur sous le pied arri&egrave;re ne simplifiait pas le contr&ocirc;le dans ces conditions techniques.&nbsp;</p>
<p>Sur l\'axe transversal, la foil slalom a tendance &agrave; offrir une stabilit&eacute; naturelle inferieure &agrave; la moyenne. C\'est assez logique compte tenu de la forte &eacute;paisseur sous le pied arri&egrave;re. C\'est un peu comme en voiture quand on a un centre de gravit&eacute; plus haut (&ccedil;a tourne moins &agrave; plat) ... Par contre, comme la largeur sous le pied arri&egrave;re est tr&egrave;s importante, c\'est en partie compens&eacute; par la puissance suppl&eacute;mentaire, &agrave; condition d\'avoir un foil tr&egrave;s raide. C\'est un point tr&egrave;s important sur ce flotteur ! Lors de ma 2e session de test, j\'ai fait volontairement un essai avec un mod&egrave;le foil l&eacute;g&egrave;rement trop souple de torsion, et c\'est rapidement innavigagble ... un peu l\'impression d\'&ecirc;tre sur un trempoline g&eacute;ant. Retour sur le F4 2021 et on peut pousser sans aucune appr&eacute;hension.&nbsp;</p>
<p>... Vous vous posez la question si votre foil fait partie des mod&egrave;le raide en torsion ou pas ? Rendez vous sur notre <a href="/devices/foil/chart/tors_module">comparatif de mesures</a>&nbsp;. En dessous d\'une note de 5/10 ... &ccedil;a va &ecirc;tre compliqu&eacute; 😉. Vous constaterez d\'ailleurs que le nouveau mat Starboard IQ avec lequel ont &eacute;t&eacute; d&eacute;velopp&eacute;s ces nouveaux flotteurs a beaucoup progress&eacute; sur ce point (+36% de fraideur en torsion en comparaison avec le mod&egrave;le standard). Pour info, le mat proto F4 utilis&eacute; lors du test du flotteur est 90% plus raide qu\'un mat Starboard 95 standard (certes c\'est un prototype trop &eacute;pais ... mais &ccedil;a situe les choses).</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/comparatif-raideur.jpg" alt="Raideurs mats starboard" /></p>
<p>Dans des conditions de mer plate, et avec un foil raide, le controle ne pose pas de probl&egrave;me, et c\'est la puissance qui prend de dessus pour faire parler la poudre !</p>
<h3>Glisse et touchettes</h3>
<p>Comme avec tous les flotteurs un peu large (ici sur l\'avant), le <a href="https://marseille.glissattitude.com/blog/reglages-windfoil-le-rake.html">r&eacute;glage du rake</a> est &agrave; soigner (entre 2 et 3&deg;). Ceci &eacute;tant fait, la Starboard Foil Slalom r&eacute;v&egrave;le son plus gros point fort : une glisse r&eacute;ellement excellente lors des touchettes. Que ce soit &agrave; plat ou sur les rails, ce nouveau flotteur devient notre nouvelle r&eacute;f&eacute;rence sur ce crit&egrave;re capital, volant la place en t&ecirc;te aux Phantom IRIS X et Exocet RF V2. Lors des runs un peu rapides, c\'est un vrai confort car on craint beaucoup moins les coups de frein et les en-avant qui s\'en suivent en cas de flirt involontaire avec l\'&eacute;l&eacute;ment liquide.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1232.jpeg" alt="test starboard foil slalom 81 2021" /></p>
<h3>Les petits plus qui font la diff&eacute;rence</h3>
<p>Comme souvent avec Starboard, ce sont dans les d&eacute;tails que se cachent le perfectionnisme des d&eacute;veloppeurs, mais ce sont des ptites choses qui simplifient la vie. Cette nouvelle planche ne fait pas exception</p>
<h4>Visserie 100% torx</h4>
<p>Grande nouveaut&eacute;, certains mod&egrave;les Starboard 2021 passent en visserie 100% torx. On applaudit des 2 mains apr&egrave;s avoir demand&eacute; ceci depuis 5 ans. Ca va faire un diff&eacute;rence &eacute;norme sur les vis de d&eacute;compression et surtout les straps que l\'on pourra d&eacute;placer sans changer le jeu de vis tous les 3 d&eacute;montages !</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0334.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h4>Strap Yulex</h4>
<p>M&ecirc;me si on aimerait que l\'empreinte carbone de nos flotteur baisse franchement avec une fabrication plus proche, ou des mat&eacute;riaux moins poluants, Starboard continue &agrave; travailler petit &agrave; petit sur des mat&eacute;rieux un peu plus respectueux. Cette fois, les straps passent en caoutchouc naturel, donc plus de p&eacute;trole de ce c&ocirc;t&eacute;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0332.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h4>Plaquettes de straps asym&eacute;trique</h4>
<p>Vous remarqurez que les plaquettes de straps ne sont pas perc&eacute;e au centre. En fonction de l\'orientation que vous choisiez, vous allez faire varier la largeur du strap&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-11/IMG_0333.jpg" alt="Starboard Foil 91 Slalom 2021" /></p>
<h3>Bilan</h3>
<p>Le moins que l\'on puisse dire, c\'est que le test d\'un tel flotteur donne de quoi raconter car il sort de l\'ordinaire. Certains &eacute;l&eacute;ments sont ultra attirants (puissance, touchettes), d\'autres impliquants (effet de roulis sous le pied arri&egrave;re en cas de foil insuffisament rigide, con&ccedil;u pour des foil &agrave; aile avanc&eacute;e), enfin certains ne feront pas l\'unanimit&eacute; (plan de pont sous le pied arri&egrave;re, contruction ultra l&eacute;g&egrave;re). Ce qui est certain, c\'est que ces flotteurs de laisseront pas indiff&eacute;rents et annoncent clairement la couleur : designed for race ! ... et donc parfaitement compl&eacute;mentaire avec la gamme Starboard Foil Freeride (125 et 150) sans aucune intention de la remplacer.&nbsp;</p>
<p>Saluons &eacute;galement dans cette conclusion la qualit&eacute; de finition de ce produit : du design soign&eacute; dans le moindres d&eacute;tails &agrave; l\'accastillage sans fausse note, c\'est parfaitement coh&eacute;rent avec un tarif situ&eacute; clairement en plage haute (2899&euro;)</p>',
'test_equipment' => 'Foils F4 et Phantom, Voile IRIS X 8m et IRIS SF 6m',
'test_duration' => 6,
'test_conditions' => '8 > 25 knt, plat et houle',
'test_place' => 'Fos / Almanarre / La Ciotat',
'created_at' => '2021-02-07 22:18:13',
'updated_at' => '2021-02-08 14:36:45',
),
105 => 
array (
'id' => 113,
'device_id' => 3,
'user_id' => 429,
'title' => 'Une douceur de conduite incroyable',
'body' => '<p>En fait, je viens de tester enfin cette aile MS725 d&eacute;crite comme aile de "slalom-race"...&nbsp;</p>
<p>Mais cette d&eacute;couverte rev&ecirc;t un caract&egrave;re particulier en raison d\'un vent tout particuli&egrave;rement instable variant entre 10 et par moments plus de 20 kts. C\'est en soi une contrainte pour appr&eacute;cier un nouveau mat&eacute;riel mais c\'est surtout une chance unique de balayer en une seule session les deux domaines pour lesquels cette aile est justement donn&eacute;e ; &agrave; savoir son caract&egrave;re "slalom" dans les vents m&eacute;dium et "race" au del&agrave;...</p>
<p>Je rappelle tout d\'abord le combo utilis&eacute; pour ce test pour un rider de 78 kg et 1.75 m :</p>
<ul>
<li>flotteur Patrik 91 200 Litres Airinside,</li>
<li>position pdm &agrave; 116 (mesur&eacute; depuis la boulonnerie avant DTT) correspondant aux recommandations de base de Loke,</li>
<li>straps AV plein avant ; straps AR plein AV de la position la plus AR car il y a deux positions AR possibles ; en clair un stance de 54 cm,</li>
<li>voile Vapor Air Ga Sails de 7 m&sup2; trim&eacute;e "constructeur",</li>
<li>lignes de harnais &agrave; taquets coinceurs de type "race", r&eacute;gl&eacute;s la plupart du temps de cette session sur 46 cm. Cette longueur cons&eacute;quente permet d\'adopter une position de pilotage de recherche de vitesse et de contr&ocirc;le optimal de la puissance en d&eacute;verrouillant les genoux pour exercer un maximum de transfert du poids dans le harnais en descendant le bassin,</li>
<li>un stabilisateur cal&eacute; &agrave; 1&deg; &agrave; piquer pour le foil de mani&egrave;re &agrave; r&eacute;duire l\'&eacute;ventuelle tendance du foil &agrave; monter,</li>
<li>l\'angle de rake fix&eacute; par la platine de car&egrave;ne d&eacute;fini par Loke est de 1&deg; seulement ; cela peut para&icirc;tre faible mais m\'a toujours satisfait sur ce flotteur.</li>
</ul>
<p>Avant de rentrer dans les chiffres et les relev&eacute;s GPS et la polaire, je voudrais en r&eacute;sum&eacute; simplement dire que cette aile est du pur plaisir en pilotage et en performances.</p>
<p>Justement, question perfs, voici les r&eacute;sultats essentiels :</p>
<p>C\'est une aile tr&egrave;s agr&eacute;able, rapide et nerveuse qui se comporte remarquablement bien pour remonter au pr&egrave;s dans la brise avec des VMG qui passent les 10 kts et qui d&eacute;boule au largue 125&deg;/v &agrave; 21-22 kts dans une douceur de conduite incroyable ! Avec ce combo et notre pdm toujours &agrave; 116, la vitesse de d&eacute;collage mesur&eacute;e &agrave; plusieurs reprises se situe &agrave; 12-13 kts environ.</p>
<p>Je joins &agrave; cet essai la polaire fournie par le logiciel de Yann Mathet.</p>
<p>&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/aile Loke 725 sur Pat200 &amp; VPA7 par force 4-5.JPG" alt="" /></p>
<p>&nbsp;</p>
<p>Voici cette fois l\'&eacute;tude d&eacute;taill&eacute;e de cette aile &agrave; l\'issue de la deuxi&egrave;me session toujours avec le m&ecirc;me combo Patrick 200 AirInside et Vapor Air de Ga Sails en 7.0 m&sup2; et dans des conditions toujours autant "d&eacute;biles".</p>
<p>Tout d\'abord, juste le rappel des chiffres d&eacute;j&agrave; mentionn&eacute;s dans mon dernier post :&nbsp;Des VMG qui passent les 10 kts et des vitesses au largue 125&deg;/v &agrave; 21-22 kts dans une douceur de conduite incroyable ! Avec ce combo et notre pdm toujours &agrave; 116, la vitesse de d&eacute;collage mesur&eacute;e &agrave; plusieurs reprises se situe &agrave; 12-13 kts environ. Apr&egrave;s une session compl&egrave;te dans des conditions encore une fois difficiles en raison de la forte instabilit&eacute; du vent, voici le portrait que je pourrais dresser en ayant exploit&eacute; cette aile sur environ cinq heures de navigation entre 15 et 25 kts de vent :</p>
<h3>Le d&eacute;collage</h3>
<p>C\'est effectivement la premier feeling que l\'on acquiert sur une aile. En l\'occurrence, c\'est la souplesse et la progressivit&eacute; qui ressortent. On est bien loin de l\'aile "L" o&ugrave; l\'on pouvait se permettre de lever en quelques m&egrave;tres ! Cette 725 demande tout simplement de laisser partir le flotteur au planning et lui laisser atteindre suffisamment de vitesse au vent travers. Il est tr&egrave;s important d\'abattre franchement pour r&eacute;aliser cette op&eacute;ration en toute &eacute;l&eacute;gance. Le combo s\'all&egrave;ge alors en douceur et la transition vers le vol est &agrave; la limite du perceptible. Il faut bien observer car c\'est hyper doux et c\'est au bruit plus que tout que l\'on identifie le d&eacute;but de la phase de vol ! C\'est tout juste si cela ne pose pas un probl&egrave;me pour le relev&eacute; de la vitesse de d&eacute;collage ; les yeux riv&eacute;s sur le GPS...</p>
<p>Si l\'on a chauss&eacute; le strap AR en finale de phase d\'acc&eacute;l&eacute;ration au planning, un tr&egrave;s l&eacute;ger pumping sur le foil permet de lever plus franchement et de resserrer le vent dans la foul&eacute;e de mani&egrave;re instinctive.</p>
<h3>Le pr&egrave;s</h3>
<p>Une fois en vol, il est tout &agrave; fait naturel de resserrer le vent de mani&egrave;re &agrave; faire monter au plus vite le vent relatif. Si cette 725 se pr&ecirc;te parfaitement au jeu, on ne tarde pas &agrave; &ecirc;tre un peu d&eacute;sorient&eacute; au d&eacute;but par la technique de n&eacute;gociation d\'une rafale. Je rappelle que ces heures de vol ont &eacute;t&eacute; r&eacute;alis&eacute;es dans un vent particuli&egrave;rement technique, oscillant entre 10-12 kts et 20-25 kts... Le r&eacute;flexe dans une ris&eacute;e puissante est de resserrer le vent ; c\'est tr&egrave;s efficace et surtout indispensable avec une aile de grande surface. Mais en ce qui concerne notre "MS", si le le fait de "rentrer dans la rafale" est efficace, on est surpris par la baisse du r&eacute;gime de vol d&egrave;s que le vent revient &agrave; la normale. Il devient rapidement &eacute;vident qu\'il est n&eacute;cessaire d\'ouvrir son angle par rapport au vent de mani&egrave;re &agrave; conserver une hauteur de vol constante et pour &eacute;viter m&ecirc;me d\'aller jusqu\'&agrave; un pos&eacute; en glissade (touchette longue). C\'est vraiment nouveau par rapport &agrave; une aile de light-wind et une fois l\'astuce pig&eacute;e, il devient enfantin de jouer avec les surventes car l\'aile r&eacute;pond au doigt et &agrave; l\'&oelig;il, du moins au moindre appui sur le flotteur. Aile joueuse donc et sensible ; c\'est beaucoup plus vivant et tr&egrave;s agr&eacute;able ; le jeu s\'installe dans la confiance et la facilit&eacute;. Et si l\'envie vous en prend, la contre-g&icirc;te lui va parfaitement et je vous renvoie aux chiffres relatifs &agrave; la VMG. L&agrave; encore, la b&ecirc;te se pr&ecirc;te au jeu sans ren&acirc;cler ; mais il lui faut imp&eacute;rativement un minimum d\'une quinzaine de n&oelig;uds de vent pour que cet exercice soit plaisant.</p>
<h3>Le travers et le largue</h3>
<p>C\'est naturellement &agrave; ce stade que l\'on attend cette aile ! Le Loke race a souvent &eacute;t&eacute; d&eacute;crit (en version aile "L") comme fougueux et d&eacute;di&eacute; essentiellement au programme "up and down". Cette aile apporte une dimension nouvelle &agrave; ce foil en lui permettant de se pr&ecirc;ter avec maestria au vent travers comme aux descentes dans le vent... C\'est toujours sur la pointe des pieds que l\'on aborde ce domaine car les craintes sont bien l&agrave;, surtout avec des rafales au-del&agrave; de 20 kts... &nbsp;Le foil ne va-t-il pas avoir tendance &agrave; sortir de l\'eau ? Tous les vent-travers se sont r&eacute;v&eacute;l&eacute;s s&eacute;curisants ; le pied AR abandonne le strap et vient se positionner juste &agrave; c&ocirc;t&eacute; sous le vent ou tr&egrave;s l&eacute;g&egrave;rement en avant du strap. La glisse est impressionnante car la vingtaine de n&oelig;uds est quasi automatique sans aucunement avoir besoin de prendre la position de recherche de vitesse en d&eacute;verrouillant les genoux.&nbsp;</p>
<p>Encourag&eacute;s par ces performances, il est alors tr&egrave;s facile (bien que la gorge un peu serr&eacute;e au d&eacute;but) d\'abattre dans les 120&deg; par rapport au vent... C\'est alors un ravissement, mais l\'on retombe l&agrave; dans un exercice qui est d&eacute;j&agrave; acquis avec l\'aile "L". La nouveaut&eacute;, c\'est que la vitesse est nettement sup&eacute;rieure et le plus remarquable, dans un confort de pilotage qui permet des ajustements d\'appui par simples variations d\'inclinaisons du haut du corps. Le pied AR situ&eacute; aux environs de la ligne centrale du flotteur (l&eacute;g&egrave;rement au vent) n\'est pas aussi recul&eacute; qu\'avec la grande aile et il est peu fr&eacute;quent de devoir faire varier cet appui ce qui contribue encore &agrave; ce sentiment de s&eacute;curit&eacute; malgr&eacute; un vent relatif qui d&eacute;coiffe... A ce sujet, j\'ai not&eacute; un effet "pervers" mais qui va dans le bon sens ; il n\'est m&ecirc;me plus n&eacute;cessaire de creuser la voile au grand largue ou du moins pas autant qu\'avec une aile de light wind.</p>
<h3>L\'airjibe et la polaire</h3>
<p>L\'envoi d\'un jibe est l\'aboutissement logique d\'une abatt&eacute;e au largue et par cons&eacute;quent, de par les r&eacute;sultats pr&eacute;c&eacute;demment d&eacute;crits, on se sent en totale confiance pour envoyer m&ecirc;me de mani&egrave;re radicale ce type de man&oelig;uvre ! Et c\'est un v&eacute;ritable festival. Je rappelle d\'ailleurs que les airjibes passent "correctement" avec l\'aile de 560, mais il faut s\'appliquer. Par contre, la 725 engage cette man&oelig;uvre avec suffisamment de vitesse pour que l\'on r&eacute;alise sans &ecirc;tre un virtuose des aijibes particuli&egrave;rement harmonieux aux alentours de 14 kts de moyenne avec des points bas autour de 12 kts. Que du bonheur !</p>
<p>C\'est ainsi que la polaire (voir PJ) prend un configuration "grassouillette" avec des ailes &agrave; la mode "chauve souris", c\'est &agrave; dire avec les lobes de vitesses vers le grand largue et le vent arri&egrave;re particuli&egrave;rement d&eacute;velopp&eacute;s.&nbsp;</p>
<h3>Happy End</h3>
<p>En r&eacute;sum&eacute;, j\'oserais presque dire que cette aile pourrait m&ecirc;me supplanter l\'aile "L", du moins pour un rider de gabarit ne passant pas les 80 kg. Mais l&agrave;, je m\'aventure sur un domaine qui me reste &agrave; explorer et je reviendrai vers vous pour en rendre compte. Il s\'agit d\'exploiter cette aile de 725 dans des airs l&eacute;gers autour de 10-12 kts avec une 8 ou 9 m&sup2;. J\'ai h&acirc;te !... Ce serait peut-&ecirc;tre l\'occasion de replacer ce foil de race (du coup slalom-race) &agrave; sa "juste" place ; &agrave; savoir un outil de tous les jours et pas seulement un engin &eacute;litiste !</p>',
'test_equipment' => 'Patrik 91 Ai + Vapor Air 7m',
'test_duration' => 6,
'test_conditions' => 'Vent irrégulier 10-20 knt',
'test_place' => 'Gironde',
'created_at' => '2021-03-05 07:59:05',
'updated_at' => '2021-03-05 08:06:57',
),
106 => 
array (
'id' => 114,
'device_id' => 168,
'user_id' => 1,
'title' => 'Une config slalom ultra polyvalente',
'body' => '<p>Comme c&rsquo;est le cas dans plusieurs marques d&eacute;sormais, on ne parle pas ici d&rsquo;un foil mais d&rsquo;un ensemble de pi&egrave;ces qui constituent un &eacute;cosyst&egrave;me foil.&nbsp;J&rsquo;ai d&eacute;j&agrave; &eacute;voqu&eacute; le F4 race, qui n&rsquo;est en r&eacute;alit&eacute; qu&rsquo;un sous-ensemble de cet &eacute;cosyst&egrave;me F4 &hellip; avec des pi&egrave;ces orient&eacute;es vers une navigation performance up &amp; down ou light wind</p>
<p>De la m&ecirc;me fa&ccedil;on, le F4 Slalom, que nous &eacute;voquons aujourd&rsquo;hui, est un sous-ensemble de pi&egrave;ces orient&eacute; vers une navigation performance travers ou vent soutenu.&nbsp;Nous &eacute;voquerons plus tard un sous-ensemble de pi&egrave;ces orient&eacute; vers une navigation loisir.</p>
<h3>De quoi parles t on ?</h3>
<p>Ce qui change pour 2021</p>
<ul>
<li>nouvelle construction du mat pour une raideur encore sup&eacute;rieure</li>
<li>nouvelle connexion mat aile fuselage plus fiable et plus raide</li>
<li>nouvelle gamme d&rsquo;ailes Slalom&nbsp;</li>
</ul>
<p>Ce qui ne change pas</p>
<ul>
<li>connexion mat / fuselage inchang&eacute;e &hellip; donc possibilit&eacute; d&rsquo;utiliser les nouveaux fuselages et nouvelles ailes sur les anciens mats</li>
<li>d&eacute;veloppement ax&eacute; sur le contr&ocirc;le et l&rsquo;accessibilit&eacute;</li>
</ul>
<p>Les pi&egrave;ces du sous-ensemble Slalom sont</p>
<ul>
<li>une aile de 900mm (720 cm 2)</li>
<li>une aile de 800mm (640 cm 2)</li>
<li>une aile de 700mm (560 cm 2)</li>
<li>une aile de 560mm (337 cm 2)</li>
<li>un fuselage de 100cm</li>
<li>un fuselage de 90cm</li>
<li>un stab de 210 cm2</li>
<li>un stab de 170 cm2</li>
</ul>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1475.jpeg" alt="F4" /></p>
<p>Pour une utilisation hors comp&eacute;tition (free-race) , c&rsquo;est tr&egrave;s clairement l&rsquo;ensemble&nbsp;</p>
<ul>
<li>une aile de 800mm (640 cm 2)</li>
<li>un fuselage de 100cm</li>
<li>un stab de 210 cm2</li>
</ul>
<p>qui va nous int&eacute;resser, et sur lequel portera ce test.</p>
<h3>Une comparaison plus qu\'un test</h3>
<p>Une fois n&rsquo;est pas coutume, je ne proposerai pas un test complet car il y aurait de nombreuses redites avec le test des principaux foils concurrents que sont les Phantom R, Starboard IQ Slalom set , AFS 95, Loke Race et Alpine Race, Taaroa Noe UHM. Tous ces foils ayant &eacute;t&eacute; d&eacute;velopp&eacute;s dans le m&ecirc;me but, il est &eacute;vident que les principales caract&eacute;ristiques sont semblables.</p>
<p>Au contraire, sans porter de jugement dans l&rsquo;absolu je vais essayer de souligner les diff&eacute;rences antre le F4 et les autres, pour vous permettre de faire votre choix en fonction de vos priorit&eacute;s. Cela permet aussi de faire un point assez complet sur la signature de chaque foil dans cette cat&eacute;gorie que l&rsquo;on peut appeler Slalom &hellip; mais qui finalement rejoint la pratique du plus grand nombre : se tirer la bourre avec les potes, sur des allures proches du travers.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1228.jpeg" alt="F4" /></p>
<h3>Stabilit&eacute; lat&eacute;rale&nbsp;</h3>
<p>Pour rappel, on parle l&agrave; du comportement du flotteur sur l&rsquo;axe du roulis lorsqu&rsquo;il est utilis&eacute; avec ce foil. Sur ce plan, le F4 propose une des plus grosses stabilit&eacute;s des mod&egrave;les test&eacute;s &agrave; ce jour. Pour &ecirc;tre pr&eacute;cis, on a d&rsquo;une part peu de mouvement sur cet axe (amplitude) et une tr&egrave;s faible nervosit&eacute; (fr&eacute;quence).</p>
<p>Pour situer les autres foils concurrents, on a l&rsquo;AFS et le Noe UHM qui offrent le m&ecirc;me type d&rsquo;amplitude de mouvement, avec un poil plus de nervosit&eacute;. Le Loke Race et le Phantom ont peu d&rsquo;amplitude de mouvement &eacute;galement, avec une nervosit&eacute; plus prononc&eacute;e. L&rsquo;AlpineFoil Race et le Starboard IQ ont &agrave; la fois plus d&rsquo;amplitude et plus de nervosit&eacute;.</p>
<p>En terme d&rsquo;effet de rappel (r&eacute;sistance &agrave; la contre g&icirc;te), les plus libres sont le Starboard et le Phantom. Viennent ensuite les F4, Alpine et Noe. L&rsquo;AFS reste celui qui offre la plus grosse force de rappel pour ramener le foil &agrave; plat, m&ecirc;me si c&rsquo;est moins le cas avec les nouvelles ailes de slalom qu&rsquo;avec les ailes pr&eacute;c&eacute;dentes.</p>
<h3>Stabilit&eacute; longitudinale</h3>
<p>Pour rappel, on parle l&agrave; du comportement du flotteur sur l&rsquo;axe du tangage lorsqu&rsquo;il est utilis&eacute; avec ce foil. Le comportement sur cet axe est tr&egrave;s li&eacute; &agrave; la taille de stab et la longueur du fuselage. Il est &eacute;vident qu&rsquo;un long fuselage va limiter la vivacit&eacute; du foil sur cet axe, mais entrainer &agrave; la fois une capacit&eacute; de r&eacute;action et de correction plus lente dans le pilotage , ainsi qu&rsquo;une train&eacute;e sup&eacute;rieure. En fonction des conditions de navigation (force du vent, plan d&rsquo;eau), on aura donc avantage &agrave; avoir un foil plus stable ou plus r&eacute;actif.&nbsp;</p>
<p>On verra plus tard qu&rsquo;outre la longueur du fuselage, la position du mat et de l&rsquo;aile sur le fuselage a &eacute;galement une importance.</p>
<p>A ce niveau, 4 strat&eacute;gies se distinguent suivant les marques:</p>
<ul>
<li>Fuselage amovible avec plusieurs tailles disponibles (Starboard, F4, Taaroa, Phantom) &gt; on peut litt&eacute;ralement choisir le comportement d&eacute;sir&eacute;. Pour les pratiquants exigents et capables de faire ce choix, c&rsquo;est un v&eacute;ritable confort car on peut r&eacute;ellement avoir un m&ecirc;me foil avec des visages compl&egrave;tement diff&eacute;rents en fonction des conditions et de notre humeur. Pour ceux qui n&rsquo;ont pas ces capacit&eacute;s, &ccedil;a peut devenir un casse t&ecirc;te &hellip; c&rsquo;est un peu comme avoir 2 ou 5 surfaces de voiles : il faut savoir choisir la bonne 😉</li>
<li>Fuselage amovible avec une seule tailles disponible (Alpine Foil) &gt; Le transport est facilit&eacute; par la possibilit&eacute; de d&eacute;montage, mais la seule adaptation aux conditions se fera &agrave; l&rsquo;aide des cales de stab. On est plus limit&eacute; sur les possibilit&eacute;s, mais le choix est &eacute;galement plus simple (pas de prise de t&ecirc;te au bord de l\'eau).</li>
<li>Fuselage non amovible mais longueur variable (Loke Race) &gt; C&rsquo;est une nouveaut&eacute; chez Loke cette ann&eacute;e. La marque ayant un design o&ugrave; une partie du fuselage est int&eacute;gr&eacute;e &agrave; l&rsquo;aile et au stab, on aura cette ann&eacute;e des stab de longueurs diff&eacute;rentes pour adapter le comportement d&eacute;sir&eacute;. L&rsquo;inconv&eacute;nient est le tarif &eacute;lev&eacute; des pi&egrave;ces, mais cela permet &agrave; Loke de continuer &agrave; proposer un foil 100% carbone tr&egrave;s l&eacute;ger (unique &agrave;e ce poids dans cette cat&eacute;gorie den produit)&nbsp;</li>
<li>Fuselage non amovible (AFS) &gt; la marque bretone reste la seule &agrave; proposer un T Bar enti&egrave;rement fixe. Bien &eacute;videmment, cela limite beaucoup les possibilit&eacute;s de personnalisation du comportement, mais cela permet d&rsquo;une part de garder un foil 100% carbone (pas de risque de corrosion) rigide, et de simplifier le choix au bord de l&rsquo;eau (ben oui, il n&rsquo;y a pas de choix !). En contre partie, la nouvelle version du 95 propose une longueur de fuselage tr&egrave;s consensuelle, parfaite pour la plupart des navigations. Seul les aficionados sur Up&amp;Down, et de la navigation dans l&rsquo;ultra light pourront &ecirc;tre d&eacute;savantag&eacute;s.</li>
</ul>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1835.jpeg" alt="F4" /></p>
<p>Pour revenir &agrave; nos moutons, le F4 test&eacute; ici propos&eacute; avec un fuselage de 100cm, une taille qui repr&eacute;sente la norme aujourd&rsquo;hui en utilisation Slalom, et que l&rsquo;on retrouve &agrave; quelques choses pr&egrave;s sur les autres foils concurrents (m&ecirc;me sur le Loke grace au stab court), &agrave; l&rsquo;exception du Alpine et de son fuselage de 120. &nbsp;F4 proposera aussi des fuselages 90, et 115 en option pour ceux qui veulemtn aller chercher d\'autres sesnations de navigation (plus de vivacit&eacute; ou un c&ocirc;t&eacute; plus race).</p>
<h3>Stabilit&eacute; en lacet</h3>
<p>Pour rappel, on parle l&agrave; du comportement du flotteur sur l&rsquo;axe du lacet (tendance &agrave; avoir le nez du flotteur qui fait l&rsquo;essuie glace) lorsqu&rsquo;il est utilis&eacute; avec ce foil. On parle finalement assez peu de ce param&egrave;tre et il est pourtant essentiel et diff&eacute;rentiateur. En soit, un mouvement sur l&rsquo;axe de lacet pourrait para&icirc;tre insignifiant, mais il d&eacute;termine en r&eacute;alit&eacute; une partie essentielle de la sensation de contr&ocirc;le (ou pas) en coordination avec la stabilit&eacute; lat&eacute;rale. Il semblerai d&rsquo;ailleurs que les 2 (lacet et roulis) puissent &ecirc;tre induits (une instabilit&eacute; en lacet peut induire ou amplifier une instabilit&eacute; en roulis et vis versa).</p>
<p>Pour donner une image : un foil infiniment stable en lacet donne l&rsquo;impression d&rsquo;un foil qui est sur un rail, et qui &laquo; tranche l&rsquo;eau &raquo; en traversant le clap&ocirc;t avec une glisse tr&egrave;s &lsquo;nette&rsquo;. Cela donne beaucoup de confiance et de sensation de ma&icirc;trise de la situation. Au contraire, un foil tr&egrave;s instable en lacet donne l&rsquo;impression d&rsquo;une nouille qui fait du slalom involontairement et n&rsquo;avance pas droit en se tortillant (et je peux vous dire que &ccedil;a existe bel et bien, m&ecirc;me sur des foils disponibles aujourd&rsquo;hui sur le march&eacute;, mais heureusement pas dans le comparatif qui nous int&eacute;resse ici).</p>
<p>Il semble que cette stabilit&eacute; en lacet soit tr&egrave;s li&eacute;e &agrave; la fois &agrave; la rigidit&eacute; en torsion du mat, &agrave; la rigidit&eacute; du fuselage, et aux rigidit&eacute;s des jonctions mat / fuselage / aile / stab.</p>
<p>Cette fois encore, les mouvements en lacet peuvent &ecirc;tre caract&eacute;ris&eacute;s par leur amplitude (est ce que les mouvements sont grands ou pas ?), leur fr&eacute;quence et leur amortissement . En terme de fr&eacute;quence, des mouvements tr&egrave;s hautes ou tr&egrave;s basse fr&eacute;quence sont certainement impossibles &agrave; d&eacute;celer. Par contre, les mouvements parasites qui interviennent &agrave; des fr&eacute;quences proches de celles de r&eacute;action du corps humain viennent directement perturber le ressenti et les actions de pilotage.</p>
<p>Comme pour le roulis, on a des &laquo; groupes de comportement &raquo; :</p>
<ul>
<li>Les AFS, Taaroa et F4 proposent une sensation de mouvements de faible amplitude, avec peu de&nbsp;nervosit&eacute;</li>
<li>Les Phantom, et Loke proposent une sensation de mouvements de faible amplitude, avec de la nervosit&eacute;</li>
<li>Le Starboard IQ donne l&rsquo;impression de mouvements plus amples, mais peu de nervosit&eacute;</li>
<li>L&rsquo;Alpine Race donne l&rsquo;impression&nbsp;de mouvements plus amples, avec une nervosit&eacute; plut&ocirc;t &eacute;lev&eacute;e</li>
</ul>
<p>En fonction des attentes de chacun, on pr&eacute;f&egrave;rera un type de comprtement ou un autre.</p>
<h3>Sensation de Glisse</h3>
<p>Cette &laquo; Sensation de Glisse &raquo; , c&rsquo;est l&rsquo;ADN m&ecirc;me du foil &hellip; et probablement ce qui fait que nous naviguons en foil. Vous remarquerez que je ne parle pas de vitesse mais de sensation. Je me garderai bien de classifier ces foils par performance pure en vitresse car il est &eacute;vident que d&rsquo;une part ils sont tr&egrave;s proches, d&rsquo;autre part ce param&egrave;tre est tr&egrave;s li&eacute; au pilote et sa capacit&eacute; &agrave; g&eacute;rer le contr&ocirc;le et exploiter la finesse et la puissance.</p>
<p>Revenons donc &agrave; cette sensation de glisse. Pour moi, elle est certainement li&eacute;e &agrave; 2 param&egrave;tres principaux : la train&eacute;e du foil, et sa rigidit&eacute;. Avec l&rsquo;habitude, on a compris que les foils nerveux donnaient une sensation de glisse sup&eacute;rieure, &agrave; train&eacute;e &eacute;gale.</p>
<p>La encore, on va avoir des groupes de sensation</p>
<ul>
<li>Les Loke, et surtout le Phantom sont des exemples-type de foils qui offrent une sensation de glisse sup&eacute;rieure &agrave; la moyenne</li>
<li>Les F4, AFS, Taaroa, Starboard et Alpine sont plus similaires dans les sensations, avec un F4 l&eacute;g&egrave;rement en t&ecirc;te du groupe, et des AFS et Starboard l&eacute;g&egrave;rement en fin de groupe. Je pr&eacute;cise, &nbsp;concernant l&rsquo;AFS, que cette sensation de glisse en retrait &eacute;tait un des &eacute;l&eacute;ments qui lui &eacute;taient couramment reproch&eacute;s, mais qu&rsquo;avec la version 2021, il recolle nettement au groupe.</li>
</ul>
<p>Au risque de me r&eacute;p&eacute;ter, je rappelle que la sensation de glisse n\'est pas &agrave; rapprocher de la vitesse max potentielle du foil. On parle ici juste de sensation.</p>
<h3>Equilibre longitudinal</h3>
<p>On parle ici de foil qui a tendance &agrave; pousser sur le pied avant ou le pied arri&egrave;re. Cet &eacute;quilibre est modifiable en <a href="https://marseille.glissattitude.com/blog/windfoil-calage-des-stabs-en-foil.html">calant le stab</a>. La classification que je donne ici est donc valable pour un foil utilis&eacute; sans cale (ou avec une cale m&eacute;diane dans le cas de Starboard, et positon centrale chez tarroa) dans un vent medium (15 Knt)</p>
<ul>
<li>Loke, Taaroa 95 et Alpine &gt; plut&ocirc;t pied avant</li>
<li>Phantom 100 Evo, starboard 105, tarroa 85 et F4 100&gt; plut&ocirc;t neutre&nbsp;</li>
<li>Phantom 90 , Starboard 95, AFS &gt; plut&ocirc;t pied arri&egrave;re</li>
</ul>
<p>Encore une fois, l&rsquo;utilisation de cale peut modifier compl&egrave;tement ce param&egrave;tre, et ce d&rsquo;autant plus que le fuselage est long. Pour les stab &agrave; faible corde (F4, AFS, Phantom) , une cale de 0.2 mm d&rsquo;&eacute;paisseur peut d&eacute;j&agrave; modifier les choses ! C&rsquo;est donc un r&eacute;glage essentiel pour les pratiquants exp&eacute;riment&eacute;s.</p>
<h3>Qualit&eacute; de construction&nbsp;</h3>
<p>Les diff&eacute;rents foils donc nous parlons ici ont des provenances tr&egrave;s diff&eacute;rentes : de l&rsquo;artisanat (Lokefoil) &agrave; du 100% industriel grande s&eacute;rie (Starboard, Phantom, F4) en passant par de industriel en petite s&eacute;rie (Alpine , AFS).&nbsp;La perception de qualit&eacute; est donc tr&egrave;s diff&eacute;rente selon les type de finitions choisies.</p>
<p>Pour les pi&egrave;ces carbone, on a clairement 3 strat&eacute;gies&nbsp;</p>
<ul>
<li>Out of the mould (F4, Starboard, Phantom, Taaroa) : en grande s&eacute;rie, les fabricants vont limiter les op&eacute;rations de finition manuelle. Les profils sont donc &eacute;barb&eacute;s, et vernis pour cacher les pores. C&rsquo;est tr&egrave;s propre m&ecirc;me lorsqu&rsquo;il y a des petits d&eacute;fauts internes. Les tol&eacute;rances dimensionnelles sont plut&ocirc;t bonnes, mais on a r&eacute;guli&egrave;rement des profils qui sifflent en s&eacute;rie &agrave; cause de la goutte de vernis sur le bord de fuite. C&rsquo;est rare chez Starboard et Phantom, mais r&eacute;gulier chez Taaroa et F4</li>
<li>100% Hand made (AFS, Loke) : les profils sont mastiqu&eacute;s&nbsp;en sortie de moule puis ponc&eacute;s. Le carbone est apparent sans vernis. Le r&eacute;sultat est souvent superbe, mais cette finition &eacute;tant purement manuelle, nous avons observ&eacute; par moment des dissym&eacute;tries dimensionnelles sensibles. Il semblerait que la comp&eacute;tence des op&eacute;rateurs s&rsquo;am&eacute;liorant petit &agrave; petit, les d&eacute;fauts dimensionnels soient plus rares d&eacute;sormais. Nous avons toutefois eu r&eacute;cemment une s&eacute;rie d&rsquo;ailes sifflantes.&nbsp;</li>
<li>High End (Alpine) : Avec sa finition RTE, les profils Alpine sont mastiqu&eacute;s et ponc&eacute;s &agrave; plusieurs reprises avec une grosse attention au respect des tol&eacute;rances dimensionnelles. C&rsquo;est clairement la plus belle finition du march&eacute; &agrave; ce jour : on ach&egrave;te autant un foil qu\'une oeuvre d\'art 😉</li>
</ul>
<p>Pour les pi&egrave;ces aluminium et les tol&eacute;rances d&rsquo;assemblage, c&rsquo;est clairement les industriels asiatiques (Starboard, Phantom, F4) qui placent la barre la plus haute. Une fois la phase d&rsquo;industrialisation termin&eacute;e, on a une tr&egrave;s bonne r&eacute;p&eacute;tabilit&eacute; et les assemblages sont excellents d&rsquo;un mod&egrave;le &agrave; l&rsquo;autre. Tr&egrave;s peu de surprise lorsque l&rsquo;on ach&egrave;te des pi&egrave;ces en option : &ccedil;a tombe pile poil. Avec les foils construits en plus petite s&eacute;rie, il faut quelques fois jouer un peu de la lime ou de la cale &agrave; poncer pour que tout rentre sans forcer. L&agrave; aussi, les choses s\'am&eacute;liorent au fil des mois.</p>
<p>Par contre, les industriels de grande s&eacute;rie n&rsquo;arrivent pas &agrave; la cheville de Alpine foil quant &agrave; la qualit&eacute; de l&rsquo;anodisation des fuselages aluminium. Avec Starboard, Taaroa (sauf version titane), F4 et Phantom, il faut accepter une vuln&eacute;rabilit&eacute; &agrave; l&rsquo;oxydation sup&eacute;rieure, et donc une attention au rin&ccedil;age et au transport beaucoup plus importante. Cette qualit&eacute; des fuselages aluminium Alpinefoil est l\'une des raison de l\'impossibilit&eacute; d\'acheter ces fuselage &agrave; l\'unit&eacute;. En effet, leur co&ucirc;t unitaire est tel qu\'il est p&eacute;cuni&egrave;rement plus pertinent de changer de foil complet que d\'upgrader le fuselage.&nbsp;</p>
<p>Si on en revient &agrave; F4, qui est l&rsquo;objet de ce test, on est donc d&eacute;sormais au niveau de Phantom, Taaroa ou Starboard en terme de qualit&eacute; de construction. Phantom pourrait de nouveau sortir du lot cette saison avec une nouvelle construction (finesses des profils), mais ils en sont encore au stade de finalisation &agrave; ce jour.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1834.jpeg" alt="F4" /></p>
<h3>Gamme d&rsquo;aile et comportement&nbsp;</h3>
<h4>Les ailes slalom</h4>
<p>A l&rsquo;instar des nouvelles ailes AFS , Phantom et Starboard, les ailes F4 que nous testons ici sont des mod&egrave;les dit &laquo; slalom &raquo; . Concr&egrave;tement, on a affaire &agrave; des profils plus fins, des allongements plus marqu&eacute;s avec des extr&eacute;mit&eacute;s d&rsquo;ailes plus fines. Le r&eacute;sultat : des ailes qui portent moins, qui glissent plus et qui sont moins ardentes.&nbsp;</p>
<p>Sur l&rsquo;eau, cela se traduit par</p>
<ul>
<li>un d&eacute;collage qui demande plus de vitesse</li>
<li>une tol&eacute;rance plus faible &agrave; la perte de vitesse lors du jibe ou des erreurs de conduite&nbsp;</li>
<li>des acc&eacute;l&eacute;rations plus franches</li>
<li>moins d&rsquo;appui pour remonter au vent</li>
<li>une top speed plus importante</li>
<li>des effets de surpuissance moins marqu&eacute;s&nbsp;</li>
<li>une n&eacute;cessit&eacute; de naviguer &agrave; haut r&eacute;gime</li>
</ul>
<p>Vous l&rsquo;aurez compris, c&rsquo;est un peu comme les ailerons de slalom, ces ailes ont des performances absolues sup&eacute;rieures, mais elles sont aussi plus techniques &agrave; utiliser. Elles raviront ceux qui aiment (et savent) naviguer en gardant toujours de la vitesse. Pour les moins aguerris, il y a fort &agrave; parier que les ailes plus classiques (mod&egrave;les F4 2020, F4 freerace et race 2021) donnent des meilleurs r&eacute;sultats en moyenne.</p>
<p>Confirmons &eacute;galement que les capacit&eacute;s de remont&eacute;e au vent et de replacement sont sensiblement moindre, sauf &agrave; haut r&eacute;gime. Si vous aimez vous tirer la bourre avec les potes, n&rsquo;essayez pas de prendre au pr&egrave;s ceux qui sont &eacute;quip&eacute;s d&rsquo;ailes up&amp;down .. vous allez vous y casser les dents! Passez dessous et jouez la glisse 😉</p>
<h4>Les ailes F4</h4>
<p>En 3 jours de test, et de conditions assez vari&eacute;es, j&rsquo;ai eu l&rsquo;occasion de tester les mod&egrave;les 700, 800 et 900 (envergures). Pour situer les choses, je dirai que les plages d&rsquo;utilisation id&eacute;ales seront respectivement 18-25 knt, 14-20knt et 10-15knt.&nbsp;Au fur et &agrave; mesure que l&rsquo;on baisse en taille d&rsquo;aile (sans changer d&rsquo;autre param&egrave;tre), on notera un d&eacute;placement de l&rsquo;&eacute;quilibre longitudinal avec une tendance de plus en plus pied arri&egrave;re. L&agrave; encore, il faudra compenser avec un calage du stab si on d&eacute;sire garder le m&ecirc;me &eacute;quilibre.&nbsp;</p>
<h4>Comparaison</h4>
<p>Si on en revient &agrave; la comparaison avec les autres foils cit&eacute;s pr&eacute;c&eacute;demment, l&rsquo;Alpine Race se d&eacute;marque nettement avec des ailes beaucoup plus tol&eacute;rantes, qui d&eacute;collent &agrave; plus basse vitesse, et autorisent des jibes quasi &agrave; l&rsquo;arr&ecirc;t. Evidemment, les performances pures sont l&eacute;g&egrave;rement en retrait, mais assez peu derri&egrave;re. Suivant le niveau technique du rider, il est fort possible que nombreux d&rsquo;entre nous soient en moyenne plus rapide avec ces ailes plus tol&eacute;rantes .. tout au moins sur le plat. La stabilit&eacute; et le contr&ocirc;le suppl&eacute;mentaire des foils ultra raides peut leur redonner l&rsquo;avantage dans des conditions plus difficile. Reste ensuite &agrave; savoir si vos priorit&eacute;s vont vers la vitesse moyenne, la vitesse max, la facilit&eacute; au jibe, le contr&ocirc;le ou autre.&nbsp;</p>
<p>A l\'inverse, les nouvelles ailes Phantom sont les plus ambitieuses en terme de glisse avec une finesse hors du commun. Elles vont ravir les pratiquants experts, qui accepteront un pilotage un peu plus pointu pour aller chercher des sensations.</p>
<h3>Une belle session de test</h3>
<p>Pour cette 1ere session de test, 70km &agrave; l\'Almanare, dans 15-18knt de vent en 6m IRIS X MKII.&nbsp;</p>
<p>Meilleur r&eacute;glage : Fuselage 100_3 et aile 80cm (620 cm2), stab 210 cal&eacute; &agrave; 0.2mm. Rake 2.5&deg;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/f4-tsets-alma2.png" alt="session test" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/f4-tsets-alma1.png" alt="session test" /></p>
<p>Une petite video pour le fun</p>
<p><iframe src="https://www.youtube.com/embed/ZIpEutZrGm4?autoplay=1&amp;loop=1" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>
<h3>Pour qui ?</h3>
<p>Avec le F4 slalom, et plus g&eacute;n&eacute;ralement, tous ces foils plut&ocirc;t ambitieux, on peut l&eacute;gitimement se demander &agrave; qui ils s&rsquo;adressent.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-02/IMG_1857.jpeg" alt="F4" /></p>
<p>Le tarif plus &eacute;lev&eacute; que la moyenne (compter entre 2300 et 3000eur pour un foil complet) pourrait laisser supposer qu&rsquo;ils s&rsquo;adressent plut&ocirc;t aux experts et aux comp&eacute;titeurs. C&rsquo;est d&rsquo;ailleurs la remarque g&eacute;n&eacute;rale que nous avons de la part de nos clients. &nbsp;Pourtant, sous bien des aspects, leurs caract&eacute;ristiques les rend finalement aussi facile &agrave; utiliser &hellip; voir plus facile que certains mod&egrave;les moins ambitieux.</p>
<p>Cela vous parait &eacute;tonnant ? Nous non !</p>
<p>Rappelez vous que certains mod&egrave;les tr&egrave;s haut de gamme (dont ce F4 Slalom, qui m&ecirc;me la t&ecirc;te sur ce crit&egrave;re) sont bas&eacute;s sur un mat ultra raide, et que cette raideur est une des cl&eacute;s du contr&ocirc;le et de la facilit&eacute;. &nbsp;Alors oui, un foil comme ce F4 Slalom est tr&egrave;s facile &agrave; utiliser par tout foileur d&eacute;brouill&eacute; &hellip; et plus les conditions seront compliqu&eacute;es, plus il fera la diff&eacute;rence !</p>
<p>Pourtant, si on revient &agrave; la probl&eacute;matique des ailes, rappelez vous que les ailes slalom ne sont pas les plus faciles pour les moins exp&eacute;riment&eacute;s.&nbsp;F4 offre 2 r&eacute;ponses &agrave; cette probl&eacute;matique&nbsp;</p>
<ul>
<li>pour les vrais d&eacute;butants, une version dite freeride avec une grosse aile &agrave; large corde de 1500cm2</li>
<li>pour les foileurs non experts, une version dite &laquo; freerace &raquo; qui est un slalom avec une aile de 800 plus tol&eacute;rante (corde plus large et profil plus &eacute;pais)</li>
</ul>
<h3>Bilan</h3>
<p>J&rsquo;esp&egrave;re que cette comparaison tr&egrave;s d&eacute;taill&eacute;e vous permettra de mieux cerner le comportement de chaque foil , et de trouver celui qui &nbsp;conviendra le mieux &agrave; vos pr&eacute;f&eacute;rences.&nbsp;</p>
<p>Comme vous avez pu le constater, le F4 s&rsquo;inscrit parfaitement dans la ligne des foils performants modernes, avec des caract&eacute;ristiques jamais extr&ecirc;mes, mais &agrave; chaque fois dans le peloton de t&ecirc;te. Ce n&rsquo;est pas &eacute;tonnant au regard du mod&egrave;le 2020 que nous connaissions tr&egrave;s bien et qui nous servi de r&eacute;f&eacute;rence depuis 2 ans dans nos tests. Avec ce mod&egrave;le 2021, F4 passe &agrave; la dimension industrielle, &agrave; une distribution en europe, et &agrave; un mod&egrave;le fiabilis&eacute; encore plus complet (ailes slalom, ailes freeride). Il devient une option tr&egrave;s s&eacute;rieuse pour le passionn&eacute; qui cherche un foil &agrave; la fois performant et ultra polyvalent.</p>
<p>&nbsp;</p>',
'test_equipment' => 'Flotteurs IRIS X & Sb Slalom 81, voiles IRIS X 5,6,7,8',
'test_duration' => 10,
'test_conditions' => 'Diverses',
'test_place' => 'La Ciotat , Almanarre',
'created_at' => '2021-03-07 18:32:14',
'updated_at' => '2021-03-09 22:47:14',
),
107 => 
array (
'id' => 115,
'device_id' => 177,
'user_id' => 1,
'title' => 'Energique !',
'body' => '<p>Lors de ce test, nous avons essentiellement test&eacute; 2 configurations autour de ce LK1 : abec le stab de 300 et avec le stab "perf"</p>
<p>Test avec le stab LK300</p>
<p>Avec cette configuration, le d&eacute;collage intervient tr&egrave;s rapidement avec 3 coups de pumping. Contrairement au LK Race, on ne ressent pas un gros appui sur le mat, mais pour autant, la nervosit&eacute; du foil joue son r&ocirc;le et permet un d&eacute;collage ultra pr&eacute;coce.&nbsp;</p>
<p>Subjectivement, la portance de la nouvelle aile performance est nettement plus marqu&eacute;e de l\'ancienne 800. Associ&eacute; &agrave; une train&eacute;e visiblement tr&egrave;s faible, l\'ensemble fait fureur.</p>
<p>Une fois en vol, on retrouve la signature Lokefoil avec beaucoup de sensation de glisse, et une conduite tr&egrave;s vive et ardante. La nouveaut&eacute; depuis 2020, c\'est un &eacute;quilibre tr&egrave;s pied avant. Cette grosse portance donne l\'impression que l\'on ne retombera jamais, et il faudra charger avec du poids sur l\'avant pour ne pas sortir de l\'eau, ou tout simplement caler le stab pour calmer le jeux.</p>
<p>Le r&eacute;glage sans cale permettra aux gros gabarits ou &agrave; ceux qui ne veulent pas prendre de vitesse d\'&ecirc;re serain. Il aidera aussi tout ceux dont la technique est insuffisante &agrave; d&eacute;coller rapidement. Par contre, la conduite peut vite devenir plus technique lorsque l\'on prend de la vitesse.&nbsp;</p>
<p>Lors des jibes, l\'appui pied avant permet d\'avoir une tr&egrave;s bone portance qui facilite le fait de rester en l\'air. On pourrait comparer &agrave; ce que nous avions sentis sur l\'alpine race, &agrave; l\'exception pr&egrave;s avec le LK1 est plus vif et moins pardonnant. En contre partie, le LK1 a plus de glisse, plus d\'allonge et du coup une vitesse qui chute moins vite m&ecirc;me en l\'absence d\'appui de la voile.&nbsp;</p>
<p>La rigidit&eacute; du mat est sensiblement plus importante que sur la version standard. Cela donne une glisse plus propre, et une meilleure stabilit&eacute;. C\'est particuli&egrave;rement &eacute;vident sur l\'axe roulis. Sur l\'axe de lacet, le gain est moins important compte tenu de la nervosit&eacute; sur foil, en particulier lorsque l\'on charge en puissance v&eacute;lique. La conduite est beaucoup moins pr&eacute;cise et dans l\'axe que le Lk Race par exemple.&nbsp;</p>
<p>Dans cette configuration, le LK1 perf nous semble tr&egrave;s adapt&eacute; &agrave; une utilisation sur des plans d\'eau ferm&eacute;s, o&ugrave; il faut d&eacute;coller sur quelques m&egrave;tres , et profiter de sa grande maniabilit&eacute; pour exploiter le vol sur courte distance en restant en l\'air le plus possible. Sa nervosit&eacute; et sa puissance sera parfaite pour une navigation sous-toil&eacute;e, y compris pour les gros gabarits.</p>
<p>Test avec le stab Perf</p>
<p>Le changement de stab modifie de fa&ccedil;on importante le comportement du LK1 ! Cette fois, le foil est un peu plus cal&eacute;, et moins pied avant. Cela permet de naviguer un peu plus en appui dans la voile. La conduite reste nettement moins pr&eacute;cise et ax&eacute;e qu\'avec un foil freerace ou race comme le LK Race , mais on se situe &agrave; mi-chemin. Le fait de mettre plus de pression sur le foil en se pendant dans la voile fait ressortir la nervosit&eacute; structurelle du foil.</p>
<p>Dans cette configuration, on peut laisser filer un peu plus la vitesse sans avoir un transfert important de pouss&eacute;e sous le pied avant. La sensation de glisse reste excellente, et les jibe en l\'air restent faciles.</p>
<p>Cette configuration est plus adapt&eacute;e &agrave; ceux qui veulent faire des grands bords en &eacute;tant plus cal&eacute; dans la voile. Par contre, le d&eacute;collage n&eacute;c&eacute;essite plus de vitesse car on en peut plus poper aussi facilement en s\'appuyant sur le stab.&nbsp;</p>
<p>Bilan</p>
<p>Le passage de la version standard &agrave; la version "performance" du mat LK1 est largement sensible dans les sensations ressenties, avec une conduite plus propre. La diff&eacute;rence de tarif est donc largement justifi&eacute;e.&nbsp;</p>
<p>La nouvelle aile performance constitue elle aussi un progr&egrave;s &eacute;vident avec une plage d\'utilisation plus large, sans perdre un iota de glisse. &nbsp;</p>
<p>Avec le nouveau stab performance, le LK1 deviens moins accessible pour ceux qui ont du mal &agrave; d&eacute;coller ou rester en l\'air, mais on y gagne une conduite plus cal&eacute;e et plus adapt&eacute;e aux plus longs bords, bien que l\'on reste loin de la stabilit&eacute; directionelle que peut offrir un mod&egrave;le race ou slalom comme le LK race. Pour ceux qui veulent une accessibilit&eacute; encore sup&eacute;rieure, le stab LK300 apportera toute la facilit&eacute; n&eacute;cessaire.</p>
<p>L\'ADN du LK1 reste donc inchang&eacute; : un champion de la sensation de glisse offrant une grosse nervosit&eacute; tr&egrave;s appr&eacute;ciable sur les plans d\'eau courts ou il faut privil&eacute;ger un d&eacute;collage tr&egrave;s rapide et une grosse maniablit&eacute;. C\'est aussi l\'un des foils tr&egrave;s &agrave; l\'aise en navigation sous toil&eacute;e, et avec lequel on privil&eacute;giera ce type de setup.</p>',
'test_equipment' => 'Flotteur IRIS X, et voile IRIS X MKII 7m',
'test_duration' => 2,
'test_conditions' => '15 knt, mer plate',
'test_place' => 'La Ciotat',
'created_at' => '2021-03-07 20:13:23',
'updated_at' => '2021-03-08 19:19:41',
),
108 => 
array (
'id' => 116,
'device_id' => 178,
'user_id' => 1,
'title' => 'Unboxing',
'body' => '<p>Un outline compact avec de la largeur, mais une forme plus pinc&eacute;e que les foil racing. Le pont est agr&eacute;ement&eacute; d\'un pads central pour caler le pied aux allures tr&egrave;s abbatues, ou pour donner des rep&egrave;res au jibe.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1933.jpeg" alt="JP Hydrofoil Slalom pro" /></p>
<p>La cuill&egrave;re permet de r&eacute;duire le volume sur l\'avant et de baisser la hauteur du pied de mat</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1934.jpeg" alt="JP Hydrofoil Slalom pro" /></p>
<p>Le plan de pont sous le pied arri&egrave;re s\'applati d\'ann&eacute;e en ann&eacute;e 😉. On a cette fois une courbe plus progressive sous le pied pour am&eacute;liorer le contr&ocirc;le.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1935.jpeg" alt="JP Hydrofoil Slalom pro" /></p>
<p>Les cut sont assez larges, mais on garde un appui lat&eacute;ral pour &eacute;viter le roulis au pumping</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1936.jpeg" alt="JP Hydrofoil Slalom pro" /></p>
<p>Les rails sont tr&egrave;s boxy pour favoriser un rebondi lors des touchettes</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1937.jpeg" alt="JP Hydrofoil Slalom pro" /></p>
<p>Les cuts ont une hauteur unique et constante&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1938.jpeg" alt="JP Hydrofoil Slalom pro" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/IMG_1939.jpeg" alt="JP Hydrofoil Slalom pro" /></p>',
'test_equipment' => 'v',
'test_duration' => 1,
'test_conditions' => 'c',
'test_place' => 'GlissAttitude',
'created_at' => '2021-03-11 12:56:42',
'updated_at' => '2021-03-11 13:07:18',
),
109 => 
array (
'id' => 117,
'device_id' => 168,
'user_id' => 429,
'title' => 'Je suis aux anges ; c\'est pas des conneries !',
'body' => '<p>En ce qui nous concerne plus pr&eacute;cis&eacute;ment, il s\'agit de d&eacute;gager les grandes lignes sur ce foil d\'exception, le F4 mais pas isol&eacute;ment. Cela est dor&eacute;navant une rite immuable ; il est imp&eacute;ratif de tester un foil (surtout une b&ecirc;te comme le F4 slalom 800) avec un flotteur bien pr&eacute;cis et de pr&eacute;f&eacute;rence ad \'hoc.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-03/JP Pro 176 Slalom et F4 Slalom 800.jpeg" alt="JP F4" /></p>
<p>La sacro sainte harmonie "foil-flotteur" doit &ecirc;tre une obsession ! Je vous passerai donc sous silence le "mariage" F4-Patrik 200" car cela ne pr&eacute;sente gu&egrave;re d\'int&eacute;r&ecirc;t.&nbsp;Par contre c\'est l\'occasion pour nous donc de faire le point &eacute;galement sur ce magnifique flotteur ; la JP 176 Slalom Pro. Il se trouve, certes pas par hasard, que j\'ai re&ccedil;u ce flotteur pratiquement en m&ecirc;me temps que le F4... Bizarre, bizarre !</p>
<p>Eh bien le combo 176S\\F4 est une pure merveille ! Je ne vous en dirai pas des masses car je n\'ai pas eu l\'occasion de balayer un large spectre de conditions. Par contre, j\'ai eu la chance hier de v&eacute;ritablement consacrer cet ensemble dans une tra&icirc;ne dynamique de 20-25 kts (mesur&eacute; sur le spot). Tous les planchistes "aileron" &eacute;taient en moins de 6 m&sup2; et j\'ai tourn&eacute; avec la Foil Glide de Severne en 6.0 m&sup2;.</p>
<p>Il faut r&eacute;aliser que la symbiose entre ce foil et ce flotteur est litt&eacute;ralement magique ; nous avions un plan d\'eau &agrave; mar&eacute;e montante dans la brise qui nous offrait des lames de 1.50 m sous la forme d\'une houle courte qui parfois d&eacute;ferlait mais qui &eacute;tait parfaitement praticable en surf. les coll&egrave;gues se sont lanc&eacute;s dans des figures inavouables avec de belles r&eacute;ussites ; c\'est vous dire qu\'on &eacute;tait dans des conditions merveilleuses...</p>
<p>Quid de notre combo ? J\'&eacute;tais tendu et sur la d&eacute;fensive... Mais au bout de quelques dizaines de minutes, j\'ai pu litt&eacute;ralement me l&acirc;cher en envoyant sans retenue toutes les allures du pr&egrave;s au grand largue en passant par des surfs de ouf ! Ce combo ne bronche pas ; il acc&eacute;l&egrave;re en fonction des angles par rapport au vent mais sans jamais varier la hauteur de vol. C\'est vraiment bluffant ; cela donne l\'impression de ne plus avoir aucune limite dans les diff&eacute;rentes man&oelig;uvres. Je vous passe sous silence cette sensation d\'absolue rigidit&eacute;...&nbsp;</p>
<p>C\'est pire que cela ; voil&agrave; une association foil-flotteur (je vous ai dit ; l\'obsession) qui permet avec un 6 de tourner avec un vif plaisir en toute qui&eacute;tude dans une brise force 5-6 ! J\'avoue que ne m\'&eacute;tais jusqu\'&agrave; ce jour jamais autant r&eacute;gal&eacute; en foil dans de telles conditions !</p>
<p>Le point fort &agrave; retenir est que cet ensemble parfaitement trim&eacute; pour mon poids de 75 kg est imperturbable dans la brise soutenue ; voici les r&eacute;glages du flotteur et du foil :</p>
<p>FLOTTEUR&nbsp;</p>
<ul>
<li>pdm plein avant &agrave; 116 cm (par rapport boulonnerie avant du DTT),</li>
<li>straps avant et arri&egrave;re plein avant.</li>
</ul>
<p>FOIL&nbsp;</p>
<ul>
<li>montage &agrave; nu sans aucun calage,</li>
<li>aucune cale de Rake additionnelle ; Rake "natif" de 1.4&deg; (parfait pour un plan d\'eau technique).</li>
</ul>
<h3>CONCLUSION</h3>
<p>Que du bonheur en toute s&eacute;curit&eacute; ; les planchistes m\'ont tous pos&eacute; la question de confiance : "c\'&eacute;tait pas trop chaud en foil ?". Je souligne au passage qu\'Alex a sagement tourn&eacute; en planche de vague...</p>
<p>Un horizon nouveau s\'ouvre donc ; ce combo devient de facto ma "plateforme de base" et je vais le pousser vers les vents plus traditionnels typiques de la "brise de mer" autour de 15-20 kts toujours avec le F4 mais l&agrave; probablement en mettant en &oelig;uvre mes cales &agrave; cabrer le foil pour l\'assister dans ces airs "plus faibles"... Tout est relatif quand on vient de tourner dans force 5-6.</p>
<p>Encore merci de m\'avoir permis d\'atteindre cet objectif !</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/F4Herve2.jpg" alt="" /></p>',
'test_equipment' => 'JP Slalom Foil Racing 176 - FoilGlide 6m',
'test_duration' => 4,
'test_conditions' => '20-25knt',
'test_place' => 'Royan',
'created_at' => '2021-05-09 15:56:48',
'updated_at' => '2021-06-01 06:04:28',
),
110 => 
array (
'id' => 118,
'device_id' => 180,
'user_id' => 1,
'title' => 'Unboxing',
'body' => '<p>En attendant le test sur l\'eau, j\'ai le plaisir de vous faire d&eacute;couvrir en image le nouveau foil aluminium free-race NeiLPryde. Ce mod&egrave;le remplace les RS:FLIGHT&nbsp;AL puis RS:FLIGHT AL EVO, dont la conception commen&ccedil;ait franchement &agrave; dater. Pour m&eacute;moire, nos premiers tests desdit foils remontaient &agrave; 2017 ... soit en gros la pr&eacute;histoire du foil. On regrette juste que NeilPryde ait tant attendu avant de les faire &eacute;voluer. C\'est d&eacute;sormais le cas avec un mod&egrave;le qui semble parfaitement dans l\'air du temps.</p>
<p>Pour 2021, les foils NeilPryde sont d&eacute;sormais livr&eacute;s dans une vrai malette de protection souple, plut&ocirc;t compacte et facile &agrave; loger dans la voiture. C\'est parfaitement coh&eacute;rent avec le tarif actuel du FLIGHT FR, et la mont&eacute;e en gamme globale du produit.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2599.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>Exit les blocs de mousse qui se d&eacute;litent rapidement, on a cette fois des pochettes pour ch&eacute;que &eacute;l&eacute;ment. C\'est propre et garantira une bonne protection des pi&egrave;ces.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2600.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>Une fois sorti toutes les pi&egrave;ces, voici les &eacute;l&eacute;ments du puzzle (assez simple le puzzle quand m&ecirc;me). J\'en profite pour &eacute;voquer la t&ecirc;te deep tuttle qui n\'est pas fournie en standard avec le foil. Ce dernier est propos&eacute; sans t&ecirc;te, et on peut au choix lui adapter la t&ecirc;te DTT, PowerBox ou Platine pour pouvoir aller indif&eacute;remment sur tout type de flotteur ... il faudra y penser &agrave; la commande car ce n\'est pas inclus.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2601.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>L\'une des plus belles pi&egrave;ces de ce foil, c\'est ind&eacute;niablement le fuselage en aluminium anodis&eacute;. La t&ecirc;te est tr&egrave;s travaill&eacute;e pour offrir une connection &agrave; la fois tr&egrave;s hydrodynamique, et particuli&egrave;rement rigide.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2602.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>La jonction avec le mat fait aussi appel &agrave; un encastrement tr&egrave;s robuste.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2603.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>Sur l\'aile en carbone, on retrouve un forme compl&eacute;mentaire au fuselage, et il faut avouer que la qualit&eacute; des &eacute;coulements a &eacute;t&eacute; un vrai sujet de pr&eacute;occupation chez NeilPryde (design &eacute;labor&eacute; en coop&eacute;ration avec F4 Foil avant leur divorce). Pour notre part, nous avons choisi de tester l\'aile de 80cm d\'envergure (815cm2). Pour une utilisation freerace, &ccedil;a fait d&eacute;j&agrave; un beau b&eacute;b&eacute;, et cela devrait &ecirc;tre tr&egrave;s largement suffisant pour voler dans le light sans trainer trop d\'eau, mais le test nous permettra de le v&eacute;rifier. Soulignons qu\'il existe aussi une aile de 1000cm2 ... mais je pr&eacute;cise que compte tenu du programme free-race (o&ugrave; on cherche logiquement un minimum de performance et de glisse), la 1000 me parait tr&egrave;s grosse pour &ecirc;tre polyvalente.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2604.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2605.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2606.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>Une fois l\'assemblage r&eacute;alis&eacute;, rien ne r&eacute;passe, et on a r&eacute;ellement un encastrement ultra rigide. J\'ai volontairement fait la photo sans le bouchon terminal pour que l\'on puisse bien voir la visserie, mais les 2 vis avant sont couvertes par un bouchon qui referme tr&egrave;s &eacute;l&eacute;gament l\'ensemble et parfait les &eacute;coulements.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2607.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>L\'assembage du stab est plut&ocirc;t tr&egrave;s propre &eacute;galement. Il n\'y a pas de dispositif de r&eacute;glage de l\'incidence, ce qui peut para&icirc;tre d&eacute;cevant sur ce type de programme. On pourra utiliser des rondelle inox, et j\'imagine que certains afficionados de l\'impression 3D ne manqueront pas de proposer des jeux de cales adapt&eacute;es.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2609.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>L\'ensemble mont&eacute; respire la solidit&eacute;, et la qualit&eacute; de fabrication est &agrave; la hauteur de la r&eacute;putation de la marque. J\'avoue par ailleurs que le design est plut&ocirc;t r&eacute;ussi ! En terme de design, ce FLIGHT FR est clairement dans l\'air du temps avec des g&eacute;om&eacute;tries et des dimensions modernes. On saluera le travail que la jonction Aile / Fuselage qui est assez innovante.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2610.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>Petit d&eacute;tail de l\'aile qui propose un diedre assez complexe. Cela devrait permettre d\'avoir &agrave; la foi une stabilit&eacute; et une portance sans comparaison avec le RS FLIGHT qui a &eacute;t&eacute; tant d&eacute;cri&eacute; ces derniers temps (rappelons quand m&ecirc;me que ce dernier a &eacute;t&eacute; con&ccedil;u en 2016 ... l\'&acirc;ge de pierre du windfoil ... il faut donc relativiser).</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2613.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" />s</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2615.jpg" alt="NeilPryde Flight FR Foil 2021 Unboxing" /></p>
<p>Next step : le test</p>',
'test_equipment' => 'na.',
'test_duration' => 1,
'test_conditions' => 'na.',
'test_place' => 'Marseille',
'created_at' => '2021-05-15 13:40:48',
'updated_at' => '2021-05-21 06:07:49',
),
111 => 
array (
'id' => 119,
'device_id' => 180,
'user_id' => 1,
'title' => 'Dans le game',
'body' => '<h3>Montage</h3>
<p>Le montage du foil n&rsquo;appelle pas &agrave; des commentaires particuliers, mais je souligne quand m&ecirc;me la qualit&eacute; de finition des &eacute;l&eacute;ments, et de la visserie. En terme d&rsquo;installation sur la planche, comme souvent avec les talon alu (NP, Zeeko, Fanatic), il est primordial d&rsquo;ovaliser les trous du flotteur car les filetages longs ne supportent pas de d&eacute;saxement, et il n&rsquo;y a pas d&rsquo;insert que l&rsquo;on puisse tourner.&nbsp;</p>
<p>Le talon rentre sans forcer dans la planche, donc le rake se r&egrave;glera naturellement avec une cale sous l&rsquo;avant du talon. Pour mon test, j&rsquo;ai opt&eacute; pour un rake de 3&deg;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2916.jpeg" alt="NeilPryde FLIGHT FR 2021" /></p>
<h3>D&eacute;collage et glisse</h3>
<p>Pour le test du jour, le vent &eacute;tait bien pr&eacute;sent (une petite 15aine de knt), mais pour m&rsquo;assurer des capacit&eacute;s de vol et d\'envol, j&rsquo;ai volontairement toil&eacute; petit avec une 6m2 bien tir&eacute;e.</p>
<p>L&rsquo;envol est tr&egrave;s ais&eacute; et intervient assez rapidement apr&egrave;s quelques coups de pumping peu appuy&eacute;s. Certes, il faut un peu plus de vitesse qu&rsquo;avec les foils de freeride comme le Glide ou autre Vento 85 avec leurs ailes &agrave; large corde, mais pour un foil typ&eacute; freerace, l&rsquo;envol est plut&ocirc;t tr&egrave;s rapide. En comparaison, il d&eacute;colle avec moins de vitesse et d&rsquo;&eacute;nergie que nos foils de slalom (F4, Phantom, SB 800), et &eacute;videmment bien beaucoup plus vite que les foils alu premi&egrave;re g&eacute;n&eacute;ration (NP Flight AL ou Zeeko Amplifier)</p>
<p>Au contraire des foils de freeride, la prise d&rsquo;altitude est tr&egrave;s progressive et l&rsquo;appui augmente progressivement au fur et &agrave; mesure que l&rsquo;on acc&eacute;l&egrave;re. Tout ceci est tr&egrave;s fluide, jamais brusque.&nbsp;</p>
<p>D&egrave;s le premier bord, on per&ccedil;oit une glisse tr&egrave;s correcte qui permet d&rsquo;atteindre une vitesse de croisi&egrave;re tr&egrave;s honorable. Ce n&rsquo;est pas du tout au niveau des foils de course bien entendu, mais ce n&rsquo;est pas comparable non plus avec les mod&egrave;les de freeride. Je dirai m&ecirc;me que pour un foil aluminium , on est dans le haut du peloton &hellip; tout au moins utilis&eacute; avec une aile de ce type de surface. Tr&egrave;s clairement, ce premier jeu de sensations me fait dire qu&rsquo;entre les 2 ailes disponibles, la plus petite (815) &eacute;tait clairement le bon choix pour avoir un mod&egrave;le assez polyvalent et relativement performant dans toutes les conditions (&agrave; moins de peser 110kg bien entendu).&nbsp;</p>
<h3>Equilibre et stabilit&eacute;</h3>
<p>C&ocirc;t&eacute; &eacute;quilibre, on fait &eacute;galement un pas de g&eacute;ant compar&eacute; au FLIGHT EVO. Cette fois, utilis&eacute; sur un flotteur Phantom (qui est con&ccedil;u pour des foils plut&ocirc;t pied avant), l&rsquo;&eacute;quilibre est parfait sans cale dans les conditions m&eacute;dium. Je n&rsquo;ai pas ressenti la n&eacute;cessit&eacute; d&rsquo;appuyer fortement ni sur l&rsquo;arri&egrave;re , ni sur l&rsquo;avant. J&rsquo;&eacute;tais tr&egrave;s &eacute;quilibr&eacute; sans forcer. M&ecirc;me dans les ac&eacute;l&eacute;rations, pas de pouss&eacute;e anormale sous le pied avant.</p>
<p>En terme de stabilit&eacute;, on trouve enfin chez NP une stabilit&eacute; longitudinale &agrave; la hauteur de nos esp&eacute;rances. Apr&egrave;s les premi&egrave;res g&eacute;n&eacute;rations (FLIGHT AL et F4 Carbone) tr&egrave;s exigeantes , et les 2e g&eacute;n&eacute;ration sportives (F4 Evo et FLIGHT EVO) , on n\'a cette fois aucune critique &agrave; formuler : le compromis est tr&egrave;s r&eacute;ussi &hellip; assez proche du nouvel AFS 95 : suffisamment vif pour r&eacute;agir facilement lors des rafales ou des changements d&rsquo;assiette, mais suffisamment stable pour naviguer sans se pr&eacute;occuper de la gestion longitudinale &hellip;. tout au moins &agrave; des vitesses de croisi&egrave;re raisonnables.</p>
<p>C&ocirc;t&eacute; stabilit&eacute; lat&eacute;rale, aucun soucis non plus, mais NP a toujours &eacute;t&eacute; tr&egrave;s bon de ce cot&eacute; gr&acirc;ce aux connnexions tr&egrave;s rigides, donc on en attendait pas moins . La mise &agrave; la contre gite est extr&ecirc;mement facile et se contr&ocirc;le sans m&ecirc;me y penser.&nbsp;</p>
<h3>Les moins</h3>
<p>Allez, finissons par les 2 points qui me plaisent moins :</p>
<ul>
<li>la stabilit&eacute; en lacet souffre d&rsquo;un manque de rigidit&eacute; en torsion du mat, et cela se ressent par une trajectoire plus floue</li>
<li>le sifflement du mat&nbsp;</li>
</ul>
<p>Avec le fuselage allong&eacute; &agrave; 90cm, les efforts sur le foil soumettent le mat &agrave; des torsions bien plus cons&eacute;quentes qu&rsquo;avec les fuslegas courts. Comme sur la plupart des foils aluminium, on a donc une &eacute;lasticit&eacute; qui se traduit par des mouvements parasites en lacet, et par cons&eacute;quent une sensation d\'un foil qui danse un peu et de flou dans la conduite. Comme cela ne se produit que sur cet axe , on n&rsquo;est pas r&eacute;ellement perturb&eacute; dans le contr&ocirc;le du foil, mais cela impacte la sensation de nettet&eacute; du pilotage.&nbsp;</p>
<p>Je souligne qu\'&agrave; ce jour, tous les foils aluminium qui ont des fuselages un peu longs produisent le m&ecirc;me effet (certes un peu moins marqu&eacute; sur l&rsquo;Alpine foil et le Starboard toutefois), mais il est important de souligner que ce ph&eacute;nom&egrave;ne les diff&eacute;rentie nettement des foils carbone raides (F4, Phantom R, Phantom X, IQFoil, Noe 97 et 97 UHM, AFS 95, Zeeko UHM). A contrario, on retrouve les m&ecirc;me sensations sur les foils carbone souples.&nbsp;</p>
<p>Le 2e point est r&eacute;current sur de nombreux foils aluminium, et particuli&egrave;rement chez NeilPryde. Je parle l&agrave; du sifflement du mat, d&ucirc; &agrave; un perturbation hydrodynamique sur le bord de fuite du mat, et li&eacute; &agrave; la &laquo; goute &raquo; d&rsquo;anodisation. On est nombreux &agrave; avoir subit se ph&eacute;nom&egrave;ne tr&egrave;s marqu&eacute; sur le premier foil aluminium NeilPryde. Il r&eacute;appara&icirc;t ici en bien moins marqu&eacute; et moins aigu, mais il est toujours aussi d&eacute;sagr&eacute;able d\'entendre les potes de navigation vous dire qu&rsquo;ils vous entendent venir de loin. Fort heureusement, on sait parfaitement retirer ce bruit par pon&ccedil;age du bord de fuite, mais c&rsquo;est toujours g&eacute;nant de devoir faire ceci sur un foil neuf. Le point positif, c\'est que le sifflement est de fr&eacute;quence fixe, ce qui est un moindre mal (je me rappelle du H9 fanatic o&ugrave; c\'&eacute;taiot carr&eacute;ment insupportable).</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/IMG_2919.jpeg" alt="NeilPryde FLIGHT FR 2021" /></p>
<h3>Bilan</h3>
<p>Le FLIGHT FR n\'est clairement plus comparable &agrave; ces anc&egrave;tres de chez NeilPryde. On a cette fois un foil parfaitement dans le jeux des mod&egrave;les actuels, au design et &agrave; la finition particuli&egrave;rement r&eacute;ussis. Il &eacute;tait temps que cette mise &agrave; jour soit faite par ceux qui ont d&eacute;mocratis&eacute; le foil il y a quelques ann&eacute;es.</p>
<p>Le plus gros point positif, ce sont ses performances g&eacute;n&eacute;rales tr&egrave;s homog&egrave;nes et son &eacute;quillibre sans d&eacute;faut. &nbsp;On regrettera juste que NeilPryde n\'ai pas blind&eacute; un peu plus de mat en torsion, et r&eacute;gl&eacute; ce satan&eacute; probl&egrave;me de sifflement, car il viendrait alors en t&ecirc;te de peloton.&nbsp;</p>
<p>Reste le tarif (1359 avec la t&ecirc;te tuttle) , qui le place un peu cher dans la cat&eacute;gorie des foils aluminium freerace (1299 pour un Alpine A1 SL, 1129 pour un Zeeko Bullet Alu) . Ceux qui affectionnent son design et ses prestations feront sans doute l\'effort.&nbsp;</p>',
'test_equipment' => 'IRIS X 83 Board, IRIS X MKII SAIL',
'test_duration' => 1,
'test_conditions' => '15 Knt, plat',
'test_place' => 'Ile Rousse',
'created_at' => '2021-05-15 13:40:48',
'updated_at' => '2021-06-03 08:26:01',
),
112 => 
array (
'id' => 120,
'device_id' => 181,
'user_id' => 1,
'title' => 'Bolide',
'body' => '<h3>Intro</h3>
<p>Surface test&eacute;e : 8m2</p>
<p>Suite aux premiers essais de la nouvelle Hyperglide 4, j&rsquo;ai le plaisir de vous donner nos premi&egrave;res impressions sur la version 3 (qui s&rsquo;appelle 4 pour matcher avec le reste de la gamme Severne) de la voile foil race Severne. Comme il s&rsquo;agit d&rsquo;une &eacute;volution de l&rsquo;hyperglide 2, c&rsquo;est &agrave; cette derni&egrave;re que nous allons la comparer. Mon propos sera donc essentiellement &agrave; destination de ceux qui ont d&eacute;j&agrave; eu l&rsquo;occasion de naviguer avec ce mod&egrave;le.</p>
<p>Disons le tout de suite, si l&rsquo;aspect g&eacute;n&eacute;ral de la voile ne semble pas avoir &eacute;volu&eacute;, les changements r&eacute;els en navigation sont assez notoires. Pour moi, il y a plus de diff&eacute;rences entre l&rsquo;HG2 et l&rsquo;HG4 qu&rsquo;il y en a eu entre l&rsquo;HG1 et l&rsquo;HG2. Ce n&rsquo;est pas tant que les progr&egrave;s de voilerie ont &eacute;t&eacute; plus importants, mais certainement que la voile a &eacute;t&eacute; con&ccedil;ue avec un objectif diff&eacute;rent &hellip; et en faisant le bilan des &eacute;volutions, il semble assez &eacute;vident que le changement de format de la course foil en PWA n&rsquo;y soit pas &eacute;tranger.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-05/021-Severne-HyperGlide-4-Gonzalo-Matteo-DJI_0169-lr.jpg" alt="Hyperglide 4" /></p>
<h3>Les 7 diff&eacute;rences</h3>
<p>Plut&ocirc;t donc qu&rsquo;une description in-extenso des sensations que nous avons pu noter, je vais lister et expliciter les diff&eacute;rences que nous avons relev&eacute;es.</p>
<p>Plus l&eacute;g&egrave;re dans les mains : sur la balance, la voile a probablement perdu quelques grammes (notamment au niveau du fourreau), mais j&rsquo;avoue ne pas avoir v&eacute;rifi&eacute;. Ce qui est s&ucirc;r, c&rsquo;est qu&rsquo;en navigation, elle donne une impression de l&eacute;g&egrave;ret&eacute; sup&eacute;rieure dans les mains. Pourtant, l&rsquo;HG2 &eacute;tait d&eacute;j&agrave; la voile qui &eacute;tait en t&ecirc;te de sa cat&eacute;gorie sur ce crit&egrave;re, mais l&rsquo;HG4 fait encore mieux sans contestation. J&rsquo;imagine que cette sensation est li&eacute; &agrave; plusieurs param&egrave;tres que nous verrons plus loin (moins de main arri&egrave;re, plus d&rsquo;acc&eacute;l&eacute;ration, haut de voile plus fin etc.)</p>
<p><strong>Plus de facilit&eacute; au pumping</strong> : Le haut de la voile semble avoir moins d&rsquo;inertie, et jouer avec l&rsquo;effet reflex du mat est encore plus ais&eacute;. Je dirai que la voile semble plus dynamique, &agrave; l&rsquo;instar des voiles NeilPryde. L&rsquo;efficacit&eacute; du pumping par petits movements rapides gagne encore des points &hellip; peut &ecirc;tre au d&eacute;triment du pumping par grands mouvement lents. C&rsquo;est un vrai atout pour les riders dynamiques et l&eacute;gers. Votre serviteur, qui a actuellement quelques soucis d\'&eacute;paule, ne peu que louer cette &eacute;volution car le pumping est ainsi moins physique 😉</p>
<p><strong>Plus de glisse et d&rsquo;acc&eacute;l&eacute;ration, plus de p&eacute;n&eacute;tration dans le vent</strong> : c&rsquo;est peut &ecirc;tre la sensation la plus marquante. Dans les rafales, la voile tire moins dans les bras et g&eacute;n&egrave;re plus facilement de l&rsquo;acc&eacute;l&eacute;ration. On sent que l&rsquo;HG4 offre une meilleure glisse dans le vent, et probablement une meilleure top speed. C&rsquo;est tr&egrave;s sensible au pr&egrave;s o&ugrave; on a moins de traction sur la main arri&egrave;re, et o&ugrave; il est plus facile de s&rsquo;appuyer sur le lit du vent pour laisser glisser la planche. Ainsi, lorsque l\'on s\'approche de la plage haute de la voile, on reste efficace plus longtemps. Je ne dirais pas pourtant qu\'elle a une plus grande plage haute car l\'HG2 &eacute;tait assez impressionnate sur ce point, mais juste qu\'on reste plus longtemps efficace.</p>
<p><strong>Moins d&rsquo;appui au cap</strong> : c&rsquo;est la contre partie directe de la remarque pr&eacute;c&eacute;dente (on ne peux pas tout avoir). Avec moins d&rsquo;appui dans la main arri&egrave;re, il est moins ais&eacute; de profiter du surplus de puissance pour gagner des degr&eacute;s au cap. On sent qu&rsquo;avec l&rsquo;HG4, il sera plus efficace (en terme de chrono) de choisir une option vitesse que de serrer le vent &agrave; outrance. C&rsquo;est en effet &agrave; moyen et haut r&eacute;gime que la voile est la plus efficace : elle a besoin de vitesse pour s&rsquo;exprimer. En contre partie, si on sait pr&eacute;server la vitesse, elle est assur&eacute;ment capable de VMG assez &eacute;lev&eacute;e. Bien que la voile soit tr&egrave;s diff&eacute;rente, on retrouve quelques traits commun (en moins marqu&eacute;) avec la XO Gold Foil.</p>
<p><strong>Moins de calage du foil</strong> : l&rsquo;autre effet de cette voile plus libre et plus en glisse, c&rsquo;est un effet de stabilisation du foil un peu moins marqu&eacute;. C&rsquo;est essentiellement sensible sur l&rsquo;axe longitudinal. L&rsquo;HG2 avait un effet stabilisant tr&egrave;s marqu&eacute;, avec tr&egrave;s peu d&rsquo;effet de lift. Cette fois, l\'&laquo; assistance &raquo; est un peu plus faible, mais reste toutefois bien plus marqu&eacute;e que sur les voiles de slalom traditionnelles. Pour situer les choses, je dirais que l&rsquo;HG4 s&rsquo;est l&eacute;g&egrave;rement rapproch&eacute; des voiles de slalom sur ce point, en parcourant 20% de la distance qui s&eacute;parait ces 2 type de mod&egrave;les sur ce crit&egrave;re. Autrement dit : sensible mais moins d&rsquo;&ecirc;tre r&eacute;dhibitoire. On voit bien que sans changement radical de design, il y aura un compromis &agrave; trouver entre acc&eacute;l&eacute;ration &amp; vitesse et stabilisation naturelle.&nbsp;</p>
<p><strong>Passage des cam plus facile</strong> : les hyper glide ont toujours n&eacute;cessit&eacute; quelques navigations pour se d&eacute;tendre et offrir un passage des cam plus ais&eacute;. N&eacute;anmoins, ce passage de camber restait toujours &laquo; viril &raquo; surtout dans les conditions light wind. Avec l&rsquo;Hyperglide 4 m&ecirc;me neuve, la rotation des cam est beaucoup moins sportive : plus besoin de se d&eacute;mettre l&rsquo;&eacute;paule au jibe ! C&rsquo;est tout b&ecirc;te, mais quel confort !</p>
<p><strong>Plus de puissance efficace &agrave; haut r&eacute;gime</strong> : avec l\'HG4, et gr&acirc;ce &agrave; ses grosses capacit&eacute;s d\'acc&eacute;l&eacute;ration, on atteint plus vite un haut r&eacute;gime. Une fois dans cette phase d\'utlisation, on a une grosse r&eacute;serve de puissance efficace. Bien que le contr&ocirc;le soit un peu plus subtile suite au calage moins important, on sent qu\'on en a sous le pied pour envoyer les watts ... &agrave; condition d\'avoir les armes pour l\'exploiter. Cette voile permettra tr&egrave;s clairement aux meilleurs riders (ceux qui maitrisent le r&eacute;gage de leur mat&eacute;riel, et qui pilotent avec efficacit&eacute;) de faire la diff&eacute;rence avec les autres.</p>
<h3>Bilan</h3>
<p>Apr&egrave;s ce test de la 8m2, nos premi&egrave;res sensations sont celles d\'une voile assez diff&eacute;rente de la HG2. Plus l&eacute;g&egrave;re, plus en glisse, c\'est une voile qui s\'exprimera d\'autant mieux que l\'on ne bourrinera pas. Grace &agrave; sa grosse r&eacute;serve de puissance et son effiacit&eacute; jusqu\'en haut de sa plage de vent, elle permettra aux meilleurs rideurs de faire la diff&eacute;rence.&nbsp;</p>
<p>On a h&acirc;te de tester la 6 et la 7m pour voir si elles ont le m&ecirc;me type de comprtement (allo, &eacute;ole ? 🙃)</p>',
'test_equipment' => 'IRIS X 83 Board, F4 Slalom foil',
'test_duration' => 3,
'test_conditions' => '10-15knt Sud Ouest, clapot',
'test_place' => 'La Ciotat',
'created_at' => '2021-06-10 13:24:41',
'updated_at' => '2021-06-10 14:39:11',
),
113 => 
array (
'id' => 121,
'device_id' => 182,
'user_id' => 1,
'title' => 'La maturité !',
'body' => '<p>A l&rsquo;occasion de la manifestion LA FOILIE DU LAC &agrave; Monteynard, nous avons eu l&rsquo;occasion de tester l&rsquo;un des tous premiers foils Alpine Race SL 2021. M&ecirc;me si la mode est clairement au Wingfoil, nous ne l&acirc;chons rien sur le windfoil et les discussions que nous avons eu avec Damien sont &agrave; l&rsquo;origine de l&rsquo;apparition de ce nouveau mod&egrave;le, qui n&rsquo;est pas encore sur le site Alpine &agrave; l&rsquo;heure ou j&rsquo;&eacute;crits ces signes, mais qui ne devrait pas tarder &hellip; au tarif de 2499eur (m&ecirc;me tarif que le A1 Race). Dans le m&ecirc;me temps, le mod&egrave;le A1 Sport &eacute;volue en A1Sport SL en adpotant le nouveau fuselage 2021 dont je vais parler plus bas.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-06/IMG_3270.jpeg" alt="Alpinefoil A1 race SL" /></p>
<h3>Genese</h3>
<p>Pour faire court, nous savions que le l&eacute;ger effet de dandinage du mod&egrave;le A1 race &eacute;tait d&ucirc; au tr&egrave;s long fuselage qui tirait beaucoup sur le mat, et qui induisait &eacute;galement un &eacute;quilibre assez pied avant .. id&eacute;al pour le up&amp;down, mais plus technique en terme de contr&ocirc;le.</p>
<p>En passant sur un fuselage plus court, il y avait donc des chances de pouvoir arriver &agrave; un r&eacute;sultat tr&egrave;s int&eacute;ressant. Toutefois, pour aller jusqu&rsquo;au bout du concept, il &eacute;tait n&eacute;cessaire d&rsquo;avoir &eacute;galement un fuselage plus rigide que le mod&egrave;le A1 2020.</p>
<p>Ce Race SL est donc &eacute;quip&eacute; d&rsquo;un nouveau fuselage 2021 optant pour la m&ecirc;me section que le fuselage race, mais ramen&eacute; &agrave; 105cm. Sans d&eacute;voiler tous les secret de fabrication, on dira que les positions et angulation d&rsquo;ailes ont &eacute;galement &eacute;t&eacute; revues pour apporter plus de portance &agrave; bas r&eacute;gime, moins d&rsquo;effet pied avant dans les rafales, et plus de top speed.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-06/IMG_3273.jpeg" alt="Alpine A1 Race SL fuselage 2021 de 105 " /></p>
<h3>Comparaison au A1 Race&nbsp;</h3>
<p>Maintenant que les pr&eacute;sentations sont faites, passons au test. Bien &eacute;videmment, c&rsquo;est au mod&egrave;le A1 Race que nous allons le comparer.&nbsp;</p>
<p>En comparaison avec le A1 Race, ce qui ressort imm&eacute;diatement, c&rsquo;est un foil plus fun, moins pied avant et donc plus facile &agrave; prendre en main m&ecirc;me sans cales de stab.&nbsp;</p>
<p>En terme de comportement, le fuselage plus court impose moins de contraintes sur le mat. L&rsquo;&eacute;lasticit&eacute; en torsion est donc moins sensible, et la conduite plus pr&eacute;cise et plus directe. Grace &eacute;galement au fuselage plus raide, le contr&ocirc;le dans les vents irr&eacute;guliers fait des progr&egrave;s tr&egrave;s significatifs dans cette version par reapport aux versions 2020 et ant&eacute;rieures. Il va &ecirc;tre possible de pousser le foil plus loin, et logiquement d\'am&eacute;liorer les top speed.</p>
<p>Bien entendu, les capacit&eacute;s de Up&amp;Down sont en retrait compar&eacute;es au A1 Race, mais largement suffisantes pour une utilisation standard. Je me suis amus&eacute; &agrave; descendre et remonter sur le lac de Monteynard sur un gros kilom&egrave;tre sans aucun probl&egrave;me en quelques bords.&nbsp;</p>
<p>Pour le reste, on garde tout ce qui fait l&rsquo;attractivit&eacute; du A1 Race &agrave; savoir</p>
<ul>
<li>un comportement doux et rassurant</li>
<li>des r&eacute;actions tr&egrave;s progressives</li>
<li>beaucoup de tol&eacute;rance (encore plus sur la version SL). &nbsp;</li>
<li>la grosse portance &agrave; bas r&eacute;gime (aile r&eacute;gatta 850) qui permet un d&eacute;collage rapide (le test a &eacute;t&eacute; fait en 7 et 8m) et surtout une tol&eacute;rance au jibe &agrave; tout &eacute;preuve.&nbsp;</li>
</ul>
<p>Evidemment, cette grosse tol&eacute;rance et cette portance se payent en terme de sensation de glisse, d&rsquo;acc&eacute;l&eacute;ration et de top speed compar&eacute;s aux purs foils de course, mais on ne peux pas tout avoir ! Pour une navigation sur lac, o&ugrave; le vent est tr&egrave;s irr&eacute;gulier et les bords courts, le A1 Race SL est sans doute le mod&egrave;le avec lequel on volera le plus. Il permet le plus de se jouer des variations incessantes des conditions, tout en offrant des performances de haut niveau. Enfin, il offre une accessibilit&eacute; &agrave; tout &eacute;preuve gr&acirc;ce &agrave; un contr&ocirc;le accru (le meilleur de toute la gamme Alpine Foil).</p>
<h3>Haut de gamme &eacute;litiste ou bienvenu ?</h3>
<p>Petite apparet&eacute;, valable pour la gamme alpine foil, mais aussi pour bien d\'autres mod&egrave;les du march&eacute;. Contrairement &agrave; une pens&eacute;e trop largement r&eacute;pendue, ce ne sont pas les foils entr&eacute;e de gamme qui sont forc&eacute;ment les plus faciles &agrave; dompter et utiliser. Je sais que &ccedil;a fait souvent grincer des dents ! Dans le domaine du foil, une tr&egrave;s grosse partie de la facilit&eacute; d\'utilisation est li&eacute;e &agrave; 2 param&egrave;tres essentiels</p>
<ul>
<li>la facilit&eacute; de contr&ocirc;le du foil en vol : capacit&eacute; &agrave; naviguer en ligne droite, &agrave; g&eacute;rer l\'assiette du foil dans les 3 dimensions ... sachant qu\'on demande si possible une parfaite stabilit&eacute; en lacet, une bonne stabilit&eacute; lat&eacute;rale sans emp&ecirc;cher la contre-g&icirc;te, et une stabilit&eacute; longitudiale bien dos&eacute;e pour &eacute;viter de faire du rod&eacute;o, mais permettre lagr&eacute; tout au pilote de ratrapper facilement ses erreurs de conduite ... savant dosage !</li>
<li>la plage d\'utilisation du foil : capacit&eacute; &agrave; voler dans le vent faible, sans devenir ing&eacute;rable dans les rafales</li>
</ul>
<p>... et malheureusement pour nos finances, ce sont souvent les foils le plus chers qui sont les mieux lotis sur ces 2 param&egrave;tres.&nbsp;</p>
<p>On peut bien entendu "tricher" avec des grossse ailes qui brident la vitesse du foil, et le rendent artificellement moins r&eacute;actif, mais la technologie introduite dans les mats et fuselages les plus haut de gamme concourent &agrave; une structure m&eacute;canique rigide, et tr&egrave;s souvent, &agrave; un contr&ocirc;le plus facile et un foil plus agr&eacute;able. Dans la gamme Alpine, si on exclue le mod&egrave;le Race qui est d&eacute;di&eacute; &agrave; une utilisation particuli&egrave;re (Up&amp;Down), c\'est bien le Race SL qui est le foil le plus agr&eacute;able en joignant sensations de glisse et facilit&eacute; de contr&ocirc;le. Que l\'on soit expert ou d&eacute;butant, c\'est une &eacute;vidence.</p>
<h3>Bilan</h3>
<p>En 2 mots, ce foil n&rsquo;a rien d\'extr&ecirc;me, mais il coche toutes les cases. Il est diablement efficace, le plus facile d&rsquo;acc&egrave;s de la gamme Alpine et tellement polyvalent ! Bravo AlpineFoil pour cette belle r&eacute;alisation</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-06/IMG_3271.jpeg" alt="Alpinefoil A1" /></p>',
'test_equipment' => 'Board IRIS X 83, voile IRIS X 7 et Patrick Foil+ 8',
'test_duration' => 1,
'test_conditions' => '8-15 knt, plat',
'test_place' => 'Monteynard',
'created_at' => '2021-06-14 14:25:42',
'updated_at' => '2021-07-01 14:47:58',
),
114 => 
array (
'id' => 122,
'device_id' => 183,
'user_id' => 1,
'title' => 'Streight',
'body' => '<p>On ne trahira pas un grand secret en disant que ce foil sigl&eacute; Patrik Diethelm est un assemblage de pi&egrave;ces issues du catalogue Zeeko, avec quelques am&eacute;nagements de cahier des charges (pas de mini platine sur le mat par exemple). Ainsi, &agrave; l&rsquo;instar de nombreuses marques (dont Exocet, Tahe Outddor, Loft Sail &hellip;), Patrick a pr&eacute;f&eacute;r&eacute; sous-traiter la fabrication de son foil plut&ocirc;t que de cr&eacute;er un nouveau mod&egrave;le. Quand on n&rsquo;est pas un sp&eacute;cialiste du foil, c&rsquo;est une attitude tr&egrave;s pertinente, et probablement celle qui permet le mieux de proposer un produit bien con&ccedil;u sans risque. En d&rsquo;adressant &agrave; Zeeko, on a l&rsquo;assurance d&rsquo;avoir un foil facile d&rsquo;acc&egrave;s et tr&egrave;s tol&eacute;rant.&nbsp;</p>
<p>En l&rsquo;occurence, le mod&egrave;le test&eacute; est un assemblage des pi&egrave;ces suivantes :</p>
<ul>
<li>Mat 95 M40J</li>
<li>Fuselage Bullet 115</li>
<li>Aile Bullet Slalom 750</li>
<li>Stab bullet 250&nbsp;</li>
</ul>
<p>Pour moi, ce test avait 3 int&eacute;r&ecirc;ts :</p>
<ul>
<li>tester le mat Zeeko M40J que nous n&rsquo;avons jamais eu l&rsquo;occasion d&rsquo;avoir sous la main</li>
<li>valider l&rsquo;&eacute;quilibre fuselage 115 / Stab 250</li>
<li>v&eacute;rifier la plage d&rsquo;utilisation de l&rsquo;aile Slalom 740</li>
</ul>
<h3>Raideur ou finesse</h3>
<p>Quand on monte sur ce foil en venant d&rsquo;autres mod&egrave;les plus classiques, la premi&egrave;re sensation qui saute aux yeux (ou plut&ocirc;t aux pieds), c&rsquo;est la nettet&eacute; de la glisse, que l&rsquo;on ne retrouve que sur quelques foils actuellement (F4, Noe UHM &hellip;). J&rsquo;en ai d&eacute;j&agrave; parl&eacute; plusieurs fois et j&rsquo;avoue que la sensation est difficile &agrave; expliquer avec des mots. Pour tout ceux qui savent foiler, vous comprendrez de quoi je parle quand vous aurez eu l&rsquo;occasion de mettre les pieds sur l&rsquo;un de ces mod&egrave;les. Pour faire court, c&rsquo;est une sensation de parfaite rectitude de la glisse, d&rsquo;une sensation de &laquo; trancher le lard &raquo; sans aucune perturbation, sans sensation de dandinement, de nervosit&eacute; g&ecirc;nante, ou de mouvement perturbateur. Bien s&ucirc;r, cela n&rsquo;a aucun lien avec la performance du foil ou quoi que ce soit mais en terme de sensation, c&rsquo;est une sorte d&rsquo;&eacute;vidence.&nbsp;</p>
<p>Pour aller plus loin sur cette notion, je pense qu\'il est important de pr&eacute;ciser que cette rigidit&eacute; sup&eacute;rieure est li&eacute; &agrave; 2 param&egrave;tres : la raideur intrins&egrave;que du composite utilis&eacute;, et l\'&eacute;paisseur du profil. Pour ceux qui ont quelques notions &eacute;l&eacute;mentaire de r&eacute;sistance des mat&eacute;riaux, rappelez vous que le moment quadratique est proportionnel au cube de l\'&eacute;paisseur. Quand on multiplie par 2 l\'&eacute;paisseur, on multiplie par 8 la raideur tous autres param&egrave;tres restant identiques. Ces diff&eacute;rents foils tr&egrave;s raides poss&egrave;dent donc des mats qui sont loins d\'&ecirc;tre les plus fins du march&eacute;.&nbsp;</p>
<p>Consid&eacute;rant ceci, vous comprendrez ais&eacute;ment que plusieurs strat&eacute;gies s\'affrontent : un mat plus fin mais moins raide pour r&eacute;duire la train&eacute;e, ou un mat plus &eacute;pais mais plus raide pour optimiser le contr&ocirc;le. En fonction de la comp&eacute;tence du pilote, et de vos priorit&eacute;s, l\'une ou l\'autre strat&eacute;gie sera payante. Les coureurs de haut niveau, tr&egrave;s entrain&eacute;s, choisirons plus souvent la premi&egrave;re tandis que des amateurs moins rompus &agrave; la navigation dans le rouge choisirontpeut &ecirc;tre plus souvent la 2e solution. Le type de plan d\'eau a &eacute;videmment &eacute;galement son importance puisque l\'on mettra probalement plus l\'accent sur la glisse en plan d\'eau interieur ou plat, et sur le contr&ocirc;le en plan d\'eau ouvert ou plus mouvement&eacute;.</p>
<p>Pour moi, il y a une dernier param&egrave;tre que je n\'ai jamais quantifi&eacute;, mais qui agit visiblement sur la sensation de contr&ocirc;le du foil : sa nervosit&eacute; ... &agrave; savoir &agrave; la fois la rapidit&eacute; de retour apr&egrave;s d&eacute;formation, et l\'amortissement du retour &eacute;lastique. C\'est un sujet que nous aborderons un jour car il me semble important &eacute;galement.&nbsp;</p>
<h3>Le test</h3>
<p>Dans le cas du mod&egrave;le qui nous int&eacute;resse, il est &eacute;vident que cette sensation de nettet&eacute; de la glisse est tr&egrave;s li&eacute;e &agrave; la rigidit&eacute; de tous les &eacute;l&eacute;ments : le mat M40J, le fuselage en mode barre &agrave; mine, et l&rsquo;aile courte et trapue (donc elle aussi ultra rigide). Lorsque vous traversez le sillage d&rsquo;un bateau en foil, et pour un peu que vous soyez un minimum &agrave; l&rsquo;&eacute;coute de vos sensations, vous avez tous remarqu&eacute; que vous allez ressentir un genre de fr&eacute;tillement plus ou moins important. Ceci est d&ucirc; aux tourbillons cr&eacute;&eacute;s dans l&rsquo;eau par le sillage de l&rsquo;h&eacute;lice. Ces derniers perturbent l&rsquo;&eacute;coulement autour de votre foil, et plus celui-ci est souple (&eacute;l&eacute;ments et/ou liaisons entre &eacute;l&eacute;ments), plus le foil va vous retransmettre ces mouvements. Avec le foil du jour vous ne ressentez pratiquement rien &hellip; ceci est assez r&eacute;v&eacute;lateur.&nbsp;</p>
<p>Comme on peut &eacute;videmment s\'en douter, la glisse pure du Bullet M40J est en retrait si on le compare &agrave; des mod&egrave;les comme les Phantom qui font r&eacute;f&eacute;rence dans le domaine.&nbsp;</p>
<h3>Portance</h3>
<p>En terme de portance, il est clair que cette aile de 740 est assez petite. Logiquement, elle offre une belle vitesse de pointe, mais les minis sont plut&ocirc;t en retrait par rapport &agrave; la moyenne. Elle n&eacute;cessite d&rsquo;&ecirc;tre d&eacute;j&agrave; bien lanc&eacute; pour accrocher le vol et acc&eacute;l&eacute;rer. Pour &eacute;viter de ramasser les moules, sa plage d&rsquo;utilisation efficace se situe au dessus de 13-14 knt &hellip; tout au moins pour un pratiquant standard avec une voile standard (j&rsquo;imagine que les athl&egrave;tes de haut niveau, &eacute;quip&eacute;s en 9m seront capables de prouver le contraire, mais ce n&rsquo;est pas &agrave; eux que s&rsquo;adresse ce compte rendu de test)&nbsp;</p>
<p>Aujourd&rsquo;hui, il devient de plus en plus difficile de se fier aux surfaces annonc&eacute;es pour &eacute;valuer la portance des ailes. Nous avons toujours expliqu&eacute; que c&rsquo;est le profil qui compte plus que l&rsquo;envergure ou la surface, mais &ccedil;a a du mal &agrave; rentrer dans les esprits. Les tests de ce WE ont encore prouv&eacute; ceci puisque nous avons compar&eacute; la Slalom 740 Zeeko, la Regatta 850 Alpine, la Race 850 F4 et la Slalom 730 F4. Tr&egrave;s clairement, la 730 F4 est une aile de light wind (8-13knt) l&agrave; ou la 740 Zeeko s&rsquo;adresse plut&ocirc;t &agrave; une plage 13 knt et plus. De m&ecirc;me, la 850 F4 est une aile de race vent soutenu, alors que la 850 alpine excelle dans le light wind. Conclusion, ne pas regarder les fiches techniques, mais aller sur l&rsquo;eau ou demander &agrave; ceux qui ont eu l&rsquo;occasion de monter dessus.</p>
<h3>Equilibre longitudinal</h3>
<p>Dans ce test, on &eacute;tait &eacute;quip&eacute; du fuselage 115 et du stab de 250. L&rsquo;ensemble est tr&egrave;s &eacute;quilibr&eacute; est assez intuitif. Il ne faut surtout pas plus de puissance au niveau du stab car il se montre d&eacute;j&agrave; relativement puissant quand on acc&eacute;l&egrave;re avec le 115. L&rsquo;utilisation du stab standard sur cette configuration sera donc &agrave; proscrire pour garder une &eacute;quilibre longitudinal agr&eacute;able. Je pr&eacute;cise &eacute;galement que le fusleage de 115 respire la rigidit&eacute;, en ad&eacute;quation avec le reste du foil</p>
<h3>Bilan</h3>
<p>On avait soulign&eacute; le c&ocirc;t&eacute; tr&egrave;s accessible du Bullet "classique", mais avouons que la souplesse du mat nous avait laiss&eacute; sur notre faim dans le cadre d\'une utilisation tout temps (donc y compris lorsque les conditions sont vent&eacute;es et/ou houleuses). Cette version M40J offre r&eacute;ellement un visage diff&eacute;rent et r&eacute;ellement attirant. Nous allons donc investiguer plus en d&eacute;tail sur ce mod&egrave;le prometteur avec des tests plus approfondis lorsqu el\'on arrivera &agrave; en avoir un (vive les soucis de disponibilit&eacute;).&nbsp;</p>
<p>&nbsp;</p>',
'test_equipment' => 'IRIS X 83 board, IRIS X 7M MKII',
'test_duration' => 1,
'test_conditions' => '10-15Knt, plat',
'test_place' => 'Monteynard',
'created_at' => '2021-06-15 10:14:34',
'updated_at' => '2021-06-23 19:50:04',
),
115 => 
array (
'id' => 123,
'device_id' => 184,
'user_id' => 1,
'title' => 'Elitiste',
'body' => '<p><img class="img-fluid" src="/storage/photos/1/2021-06/IMG_3328.JPG" alt="Patrik Foil+" /></p>
<h3>Prise en main</h3>
<p>D&egrave;s la prise en main, la voile est lourde dans les mains et les premi&egrave;res man&oelig;uvres le confirment. C&rsquo;est une voile physique, avec beaucoup d&rsquo;inertie dans le haut. Les man&oelig;uvres n&eacute;cessitent beaucoup d&rsquo;&eacute;nergie.</p>
<h3>Passage des cambers</h3>
<p>Sur cette voile neuve, le passage des cambers &eacute;tait &eacute;galement laborieux. La partie arri&egrave;re profil tourne mais les cam et le profil avant restent &agrave; contre. Contrairement &agrave; certaines voiles ou les cambers semblent &laquo; bloqu&eacute;s &raquo;, ils tournent facilement autour du mat sur la Patrick, mais le creux de la voile demande un grand coup de rein pour passer le &laquo; point dur &raquo;. Lors des jibes en l&rsquo;air, cela peut vite devenir un calvaire pour celui qui n&rsquo;a pas la force de faire claquer la voile. Si on n&rsquo;a pas la tonicit&eacute; au bon moment, &ccedil;a se finit souvent pas un pos&eacute;. Comme souvent, c\'es un &eacute;l&eacute;ment qui &eacute;volue sur les voiles au bout de quaues navigation, mais on part ici de loin.</p>
<h3>Pumping</h3>
<p>Au pumping, la Foil+ est relativement efficace mais l&agrave; encore, n&eacute;cessite beaucoup d&rsquo;&eacute;nergie. Le haut de la voile offre une r&eacute;ponse assez lente et souple. Le pumping doit donc &ecirc;tre plus lent par exemple qu&rsquo;avec la Severne ou la NeilPryde. Elle &eacute;tait gr&eacute;&eacute;e sur le 490 lors de ce test (mat pr&eacute;conis&eacute; par la marque), mais certains coureurs la gr&eacute;ent en 530 pour gagner en nervosit&eacute;.&nbsp;</p>
<h3>Navigation</h3>
<p>Une fois lanc&eacute;e, la voile est un rail ! On passe dans les rafales sans quasi rien sentir. La p&eacute;n&eacute;tration dans l&rsquo;air est tout &agrave; fait exceptionnelle, unique en tout cas dans ce que l&rsquo;on a pu tester actuellement en voile de foil. Le corps de la voile semble ind&eacute;formable avec un creux excessivement bien bloqu&eacute;. C\'est une v&eacute;ritable plaque ! Elle offre &eacute;galement une tr&egrave;s bonne stabilisation du foil car rien ne bouge l&agrave; haut.</p>
<p>Au pr&egrave;s dans les rafales, on a des acc&eacute;l&eacute;rations tr&egrave;s franches. Par contre, c&rsquo;est une voile qui a besoin de vent et qui s&rsquo;exprime plut&ocirc;t &agrave; haut r&eacute;gime. Vous me direz que la 8m est une voile d&eacute;di&eacute; aux conditions soutenues pour les coureurs, puisqu\'ils utilisent 9 ou 10m dans le light. Encore une fois, on cerne bien la cible de la voile.&nbsp;</p>
<p>Dans les molles, elle est moins efficace que la moyenne, et sa lourdeur ne joue pas en sa faveur. En plus, comme le corps de la voile est tr&egrave;s raide, on a du mal &agrave; ressentir les choses. C&rsquo;est un peu la m&ecirc;me chose aux allures tr&egrave;s abattues &nbsp;: avec le vent-vitesse qui chute, on a plus de mal que la moyenne &agrave; sentir la puissance dans la voile, et par cons&eacute;quent &agrave; trouver l&rsquo;angle de descente optimum (celui qui permet de descendre le plus ouvert possible sans pour autant perdre le vol).</p>
<h3>Bilan</h3>
<p>Au final, la Foil+ est une voile de foil race pure et dure, clairement destin&eacute; &agrave; des athl&egrave;tes qui acceptent un gros engagement physique. Contrairement &agrave; une voile comme la HG4 test&eacute;e il y a queqlues jours, la Foil+ ne conviendra pas &agrave; des amateurs &eacute;clair&eacute;s. En contre partie, elle semble capable de d&eacute;livrer des performances assez impressionnantes, &agrave; condition d&rsquo;&ecirc;tre toujours &agrave; haut r&eacute;gime. &nbsp;Cela veut aussi dire que dans des conditions 8-15knt, c&rsquo;est bien la 9m qu&rsquo;il faudra utiliser, avec l&rsquo;engagement encore sup&eacute;rieur qui va avec.</p>',
'test_equipment' => 'IRIS X Board, Alpine race SL',
'test_duration' => 1,
'test_conditions' => '10-15knt, plat',
'test_place' => 'Monteynard',
'created_at' => '2021-06-15 10:16:06',
'updated_at' => '2021-06-21 08:00:32',
),
116 => 
array (
'id' => 124,
'device_id' => 185,
'user_id' => 1,
'title' => 'En mode décontracté',
'body' => '<p><img class="img-fluid" src="/storage/photos/1/2021-07/IMG_3490.jpg" alt="F4 Freeride " /></p>
<h3>D&eacute;collage&nbsp;</h3>
<p>Pas besoin de nombreuses minutes pour d&eacute;couvrir le caract&egrave;re du F4 freeride. Les premiers m&egrave;tres sont d&eacute;j&agrave; &eacute;difiants et nous rappelle imm&eacute;diatement un certain MOSES Vento 85. Comme avec ce dernier, le d&eacute;collage intervient avec peu de vitesse et le vol offre imm&eacute;diatement une excellente stabilit&eacute;. Si on doit comparer &agrave; notre r&eacute;f&eacute;rence actuelle (le vento donc) , je dirais qu&rsquo;il faut un poil de vitesse en plus (mais rien &agrave; voir avec les foils ax&eacute;s perf) , mais que la stabilit&eacute; est encore meilleure une fois en l&rsquo;air.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-07/IMG_0040.jpg" alt="F4 Freeride " width="1500" height="804" /></p>
<p>C&ocirc;t&eacute; train&eacute;e, le F4 fait encore mieux que notre r&eacute;f&eacute;rence de chez MOSES. Cela influe &eacute;videmment sur la puissance v&eacute;lique n&eacute;cessaire et nous verrons plus tard que cela a une autre cons&eacute;quence importante.&nbsp;</p>
<p>Cette conjonction portance &agrave; basse vitesse + train&eacute;e mod&eacute;r&eacute;e est ainsi parfaitement compatible avec l&rsquo;utilisation de petites taille de voile (sur la photo ci-dessus, 15-17knt de vent en 4.7 sur cette session). Cette possibilit&eacute; est la signature m&ecirc;me des mod&egrave;les freeride, et pour le coup, ce F4 Freeride place la barre encore plus haut.&nbsp;</p>
<h3>En vol</h3>
<p>La stabilit&eacute; du vol est clairement le gros point fort de ce F4. Sur l&rsquo;axe longitudinal, on est sur un compromis assez commun d&eacute;sormais, qui offre &agrave; la fois une conduite assez cal&eacute;e et suffisamment de r&eacute;activit&eacute; pour corriger ses erreurs ou s&rsquo;adapter au plan d&rsquo;eau facilement. Cela offre &eacute;galement la maniabilit&eacute; n&eacute;cessaire pour jouer dans les vagues. Ce compromis est similaire &agrave; celui offert par la plupart des foils freeride derni&egrave;re g&eacute;n&eacute;ration (AFS 85, Mach 1, Vento 85, Noe 80, Supercruiser etc.)</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-07/IMG_0056.jpg" alt="F4 Freeride " width="1500" height="825" /></p>
<p>Sur les axes transversaux et lacet, le F4 freeride carbone pousse le curseur l&agrave; ou aucun foil de cette cat&eacute;gorie n&rsquo;avais jamais &eacute;t&eacute;. La conduite est d&rsquo;une facilit&eacute; et d&rsquo;une nettet&eacute; incroyable. Au d&eacute;part, s&rsquo;en est presque d&eacute;routant de facilit&eacute; &hellip; mais on s&rsquo;habitue vite &agrave; ce luxe, je vous rassure. Au m&ecirc;me titre que le Taaroa Noe, la stabilit&eacute; transversale sans faille n&rsquo;entame pas du tout sa capacit&eacute; &agrave; aller &agrave; la contre g&icirc;te. On a vraiment l&rsquo;impression que ce foil est un prolongement de nos pieds tant il est intuitif.&nbsp;</p>
<p>C&ocirc;t&eacute; comportement, ce qui ressort le plus &agrave; l&rsquo;utilisation du F4 Freeride est sa douceur de r&eacute;action et la nettet&eacute; de la conduite. Tout &agrave; l&rsquo;inverse d&rsquo;un foil vif et sportif comme le LK1 ou le tr&egrave;s performant Phantom Z, le F4 joue dans la cours du moelleux et de la douceur : 2 visions tr&egrave;s diff&eacute;rentes du freeride &hellip; un peu &agrave; l&rsquo;image d&rsquo;une Mercedes compar&eacute;e &agrave; une Alfa Romeo.&nbsp;</p>
<p>Un dernier point &agrave; signaler, et qui a son importance : malgr&eacute; son mat de 95cm, je n&rsquo;ai ressenti aucune g&ecirc;ne &agrave; l&rsquo;utilisation sur une planche plut&ocirc;t &eacute;troite (JP freefoil 115). M&ecirc;me sur une Horue Tiny 120, &ccedil;a a l&rsquo;air de passer comme une lettre &agrave; la poste ! Je me rappelle avoir fait le test avec le mat MOSES 95, avec un r&eacute;sultat un peu moins agr&eacute;able. Une nouvelle preuve, si c&rsquo;&eacute;tait encore n&eacute;cessaire, qu&rsquo;un ensemble tr&egrave;s raide assaini le contr&ocirc;le et la conduite au point de permettre des associations inhabituelles.&nbsp;</p>
<h3>Glisse et vitesse</h3>
<p>Avec les ailes &agrave; cordes larges ou &agrave; profil &eacute;pais (courant sur les foils freeride), nous avons l&rsquo;habitude de foils qui plafonnent naturellement en vitesse. Cela ne veut pas dire qu&rsquo;il ne peuvent pas aller vite, mais on sent comme une sorte de bosse &agrave; franchir : Si on essaye de le pousser au del&agrave; des 17-18 knt (en toilant plus ou en abattant franchement dans les ris&eacute;es), il deviennent alors tr&egrave;s puissants sous le pied avant et moins agr&eacute;able &agrave; g&eacute;rer sur le plan longitudinal &hellip; bref, on sent qu&rsquo;il faut les bousculer. C&rsquo;est ce que nous avons ressenti assez nettement sur des foils comme les supercruiser, Vento 85, Mach 1, Noe 80 etc.</p>
<p>Cette fois, avec le F4, on a un comportement qui se rapproche plus du LK1 avec une glisse assez naturelle quand on abat. Je ne dis pas pour autant que vous allez taper du 25knt facilement, mais en terme de sensation, on sent une acc&eacute;l&eacute;ration plus naturelle, moins forc&eacute;e, et beaucoup moins de transfert de pouss&eacute;e sous la jambe avant.</p>
<h3>Maniabilit&eacute;</h3>
<p>C&ocirc;t&eacute; maniabilit&eacute;, on est servi : c&rsquo;est ludique, et facile dans &ecirc;tre nerveux ou difficile &agrave; contr&ocirc;ler &hellip; on se prend m&ecirc;me au jeux de carver avec une simplicit&eacute; d&eacute;concertante. C&rsquo;est quand m&ecirc;me un cran en dessous du MOSES Vento 85.. Sur ce domaine, le c&ocirc;t&eacute; un peu plus vif du Vento apporte une grain de folie suppl&eacute;mentaire pour carver et jouer avec les vagues. Qui plus est le mat de 85cm du foil italien permet d&rsquo;avoir un contact plus direct avec les &eacute;l&eacute;ments.</p>
<p>Dans les molles, on peut s&rsquo;amuser &agrave; pomper sur le foil, de fa&ccedil;on tr&egrave;s efficace. Il faut dire que les moles, il les passe comme une lettre &agrave; la poste .. certes pas vite, mais tr&egrave;s efficacement. C&rsquo;est sur ce passage des molles, et le ressenti g&eacute;n&eacute;ral (plaisir) que les foils freeride carbone creusent nettement l&rsquo;&eacute;cart avec des foils bas&eacute;s sur un mat aluminium (fanatic 2019, Zeeko amplifier, NP Flight Evo, NP Glide)</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-07/IMG_9995.jpg" alt="jibe" /></p>
<p>Grace &nbsp;&agrave; sa capacit&eacute; &agrave; voler &agrave; tr&egrave;s basse vitesse sans aucune instabilit&eacute;, c&rsquo;est un foil id&eacute;al pour apprendre le gibe en l&rsquo;air. Enchainer les gibe sans touchette devient un jeu d&rsquo;enfant et on se prend vite &agrave; compter : un , deux, dix, vingt &hellip; au jeux du &laquo; d&egrave;s que je touche, je rentre au bord &raquo;, j&rsquo;ai fait des heures sup&rsquo; sur l&rsquo;eau 😀</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-07/IMG_0002.jpg" alt="F4 freeride avis" /></p>
<h3>Bilan</h3>
<p>Nous avons &eacute;t&eacute; une bonne demi-douzaine &agrave; tester ce F4 freeride dans plusieurs type de conditions, et &agrave; chaque fois les retours ont &eacute;t&eacute; excellents. A une exception pr&egrave;s, c\'est l\'intuitivit&eacute; du contr&ocirc;le, la portance &agrave; tr&egrave;s basse vitesse, la douceur de conduite et la facilit&eacute; d&rsquo;acc&egrave;s qui ont surpris nos testeurs, habitu&eacute;s aux autres mod&egrave;les freeride classiques du march&eacute; (Moses, Supercruiser, Noe80, Zeeko amplifier, NeilPryde Flight). Plusieurs ont &eacute;galement not&eacute; ses acc&eacute;l&eacute;rations &eacute;tonnantes au largue dans cette cat&eacute;gorie &hellip; ce n&rsquo;est pas ce que l&rsquo;on attendait d&rsquo;un foil freeride, mais cela ajoute encore une corde &agrave; son arc m&ecirc;me si on est bien loin d&rsquo;un foil perf de ce c&ocirc;t&eacute;.</p>
<p>Personnellement, je rajouterai un point qui me parait important &nbsp;: le F4 freeride partage le m&ecirc;me mat que le F4 race et le F4 Slalom. Il sera donc possible (d&egrave;s que disponible en pi&egrave;ce d&eacute;tach&eacute;e) de monter un avion freeride sur un foil de course (et vis versa) pour changer compl&egrave;tement de pratique en fonction des conditions de navigation. Par ailleurs, l\'avion Windfoi freeride est quasi identique &agrave; l\'avion Wing freeride. Il pourra donc &ecirc;tre utilis&eacute; (nous l\'avons v&eacute;rifi&eacute; avec succ&egrave;s) sur le mat plate de wing.&nbsp;</p>
<p>Cette interop&eacute;rabilit&eacute; jusifie l\'investissement dans un foil freeride carbone qui est &agrave; ce jour le plus cher du march&eacute; ... mais ainsi &eacute;galement l\'un des plus &eacute;volutif puisqu\'il partage le m&ecirc;me mat que les mod&egrave;les de comp&eacute;tition.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-07/IMG_3492.jpg" alt="F4 polyvalence" /></p>
<p>&nbsp;</p>
<p>￼</p>',
'test_equipment' => 'JP Feefoil 115, Horue Tiny, IRIS Z 5.8, Duotone Superstar 4.7',
'test_duration' => 4,
'test_conditions' => '10-20 Knt, plat et houle',
'test_place' => 'Savine, 6 Fours',
'created_at' => '2021-08-01 08:42:29',
'updated_at' => '2021-08-05 11:14:43',
),
117 => 
array (
'id' => 125,
'device_id' => 189,
'user_id' => 1,
'title' => 'Grosse pêche',
'body' => '<h3>En statique</h3>
<p>Cette nouvelle Fly en 5.5 se monte sur un mat RDM 400, avec 30cm de rallonge. Gr&eacute;er est un jeu d\'enfant, et la mise en place des cambers sp&eacute;cifiques RDM est vraiment ais&eacute;e. En respectant les c&ocirc;tes, on a un creux g&eacute;n&eacute;reux plac&eacute; tr&egrave;s en avant, et une ouverture de chute mod&eacute;r&eacute;e.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_5641.jpeg" alt="XO SAILS FLY 2022" /></p>
<p>Les tissus utilis&eacute;s (Xply color&eacute; et monofilm tram&eacute;) inspirent confiance. On est tout &agrave; fait raccord avec le reste de la gamme Xo : un tr&egrave;s bon rapport qualit&eacute; prix gr&acirc;ce &agrave; des d&eacute;tails de finition tr&egrave;s corrects et des tarifs particuli&egrave;rement plac&eacute;s. Bien s&ucirc;r, on n\'aura pas les petits d&eacute;tails que l\'on peu trouver sur une Duotone ou une NeilPryde, mais on est entre 20 et 25% moins cher, donc rien &agrave; dire ! Elle se paye m&ecirc;me le luxe d\'&ecirc;tre encore moins ch&egrave;re que la Fly 2019 de la m&ecirc;me marque, avec un tarif qui commence &agrave; moins de 700eur sur la 4.5.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_5644.jpeg" alt="XO SAILS FLY 2022" /></p>
<h3>Premier test light wind</h3>
<p>Malheurseusement, cela fait au moins 3 semaines que je prom&egrave;ne la Fly dans la camion, mais avec 12 ou 40knt, je n\'ai pas eu l\'occasion de la tester. Cette fois, les 12 knt annonc&eacute;s se sont transform&eacute;s en 15 puis 17 ... gr&acirc;ce &agrave; la composante thermique. Le temps de changer de voile, le vent &eacute;tait d&eacute;j&agrave; en train de retomber, mais j\'ai quand m&ecirc;me r&eacute;ussi &agrave; faire 2 bords avec la Fly 5.5 .. juste le temps d\'avoir quelques premi&egrave;res sensations.</p>
<p>Dans un vent autour de 13 knt, en s\'agitant au pumping, le d&eacute;collage intervient t&ocirc;t pour une telle surface de voile ... surtout au regard du c&ocirc;t&eacute; tr&egrave;s compacte de la voile en main. Contairement &agrave; ce que l\'on aurait pu croire avec le mat RDM 4m, le gr&eacute;ement se d&eacute;forme relativement peu au pumping, et on a m&ecirc;me une certaine nervosit&eacute;. En cela, c\'est tr&egrave;s diff&eacute;rent que les voiles comme la Severne FoilGlide ou la IRIS Z. Le comportement est plus proche de la V8 Flight et de l\'IRIS X.&nbsp;</p>
<p>D&egrave;s les premiers m&egrave;tres en vol, on constate que la voile est tr&egrave;s puissante pour une 5.5 ... et pourtant on a tr&egrave;s peu de main arri&egrave;re dans ce vent assez faible. On sent que la traction se fait vraiment vers l\'avant. Lorsque l\'on serre le pr&egrave;s, la voile reste efficace et se d&eacute;marque l&agrave; aussi des voiles de freeride. Tout au plus, on a l\'arri&egrave;re du panneau au dessus du wish qui flappe un peu ... mais c\'est moins marqu&eacute; que ce que l\'on avait not&eacute; sur la FoilGlide et la V8. On ne serait pas contre une mini latte comme c\'est le cas sur les panneaux sup&eacute;rieurs.</p>
<p>Dans les quelques rafales (grand max 18knt), j\'ai ressentie une voile qui pousse mais qui reste assez tendre et stable, un peu comme la VEGA que nous avions beaucoup appr&eacute;ci&eacute;e &eacute;galement. Elle semble donner r&eacute;ellement confiance pour "rentrer dedans". Dans le m&ecirc;me temps, je n\'ai pas senti de d&eacute;placement de l\'appui vers la main arri&egrave;re. Il semblerai que le creux soit tr&egrave;s bien bloqu&eacute; devant.&nbsp;</p>
<p>Au jibe, la compacit&eacute; extr&egrave;me de la voile est carr&eacute;ment comparable aux mod&egrave;les de freeride ... un v&eacute;ritable jouet.</p>
<p>Cette navigation a &eacute;t&eacute; malheurseusement trop courte pour en dire beaucoup plus, et elle s\'est sold&eacute;e par une mega catapulte avec le foil pi&eacute;g&eacute; dans un plastique qui trainait entre 2 eaux.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_5643.jpeg" alt="XO SAILS FLY 2022" /></p>
<h3>Dans un vent plus soutenu</h3>
<p>Pour ce deuxi&egrave;me test, l&rsquo;objectif &eacute;tait de jauger le comportement dans un vent soutenu. Direction le plan d&rsquo;eau du Defi Wind Superstar &agrave; Gruissan. Les conditions du jour : petite tramontane entre 15 et 20 noeuds, avec quelques rafales un peu plus dodues.&nbsp;Dans ces conditions, et compte-tenu de la taille de la voile, j&rsquo;ai opt&eacute; pour un r&eacute;glage un peu creux &agrave; fin de passer dans les molles.&nbsp;</p>
<p>Dans les plus grosses rafales, on est bien &eacute;videmment oblig&eacute; d&rsquo;ouvrir car la voile est assez puissante, mais ce n&rsquo;est jamais parce que l&rsquo;on a trop demain arri&egrave;re, car le creux ne bouge quasiment pas. Il suffit donc d&rsquo;ouvrir un peu, et de venir s&rsquo;appuyer sur l&rsquo;avant du gr&eacute;ement pour passer la rafale sans se faire bouger. Dans ces conditions, la voile reste ultra saine, le creux assez prononc&eacute; devant et tr&egrave;s bien bloqu&eacute; permet de garder une voile fonctionnelle qui ne bouge pas, et qui surtout continue &agrave; stabiliser la planche.</p>
<p>Dans les jibes, la Fly confirme une facilit&eacute; incroyable gr&acirc;ce &agrave; la fois &agrave; une rotation des cambers nette et douce, mais aussi gr&acirc;ce au wish ultra court. Elle n\'est pas plus encombrante que ma SuperStar 4,7 de test !!! je suis certain que cette compacit&eacute; sera aussi un vrai atout dans les conditions de mer form&eacute;es.&nbsp;</p>
<p>La seule chose que l&rsquo;on pourrait lui reprocher est une vitesse et une acc&eacute;l&eacute;ration en retrait, surtout aux allures serr&eacute;es, si on la compare aux voiles plus ambitieuses. C&rsquo;est assez logique, car c&rsquo;est l&agrave; que les voiles &agrave; fourreau large font la diff&eacute;rence.</p>
<h3>Dans le carton</h3>
<p>Pour aller jusqu\'au bout du test, 3e et dernier test &agrave; La Ciotat dans un mistral dodu et irr&eacute;gulier. Cette fois, on est sur du 8-28knt ... autant dire que ce sont des condition juste abominables, mais &eacute;difiantes pour juger des limites du mat&eacute;riel. Pour le coup, j\'ai ajout&eacute; 1 cran de rallonge &agrave; 32cm, et r&eacute;duite nettement le volume avec une tension sup&eacute;rieure &agrave; l\'&eacute;coute</p>
<p>Dans ces conditions, je n\'ai pas insist&eacute; tr&egrave;s longtemps, mais j\'ai pu v&eacute;rifier que la voile restait seine et rassurante malgr&eacute; un surtoilage excessif. Ce n\'&eacute;tait pas plaisant, mais &ccedil;a restait navigable. La voile restait finalement assez stable et douce pour les conditions.</p>
<h3>Le jeux des comparaisons</h3>
<p>Comme il est toujours difficile de d&eacute;crire une produit dans l\'absolu, il est toujours tr&egrave;s instructif de le comparer aux autres. Faisons cet exercice aves les autres voiles d&eacute;di&eacute;es Freerace ou Freeride du march&eacute;, &agrave; savoir les Phantom IRIS X, NeilPryde V8 Flight, Loft Skyscape, et Serverne FoilGlide 2</p>
<p>La Fly est clairement la voile la plus stable du plateau aux sens ou c&rsquo;est celle dont le creux bouge le moins dans les rafales. Ceci est amplifi&eacute; par son wishbone tr&egrave;s court. C&rsquo;est au final celle qui tire le moins sur la main arri&egrave;re dans les rafales. Sur ce param&egrave;tre, elle est suivie par la Phantom, puis la Loft et un peu plus loin par la Severne et la V8</p>
<p>En terme de poids ressenti, elle est plus l&eacute;g&egrave;re que Iris et que la Skyscape, mais on reste en dessous de la V8 ou la FoilGlide.</p>
<p>En terme de rotation des cambers, elle fait jeu &eacute;gal avec la Severne, mais sa compacit&eacute; au wish la place devant en terme de facilit&eacute; au jibe &hellip; loin devant toutes les autres.&nbsp;</p>
<p>En terme d&rsquo;acc&eacute;l&eacute;ration et de p&eacute;n&eacute;tration dans le vent, donc aussi de vitesse maximale, la IRIS X la surclasse assez nettement, mais la Fly fait mieux que la la Skyscape, la V8 puis la FoilGlide.</p>
<p>En terme de ratio puissance / surface, seule la Severne fait mieux.</p>
<p>En terme de comprtement dans les maxi, elle fait jeu &eacute;gal avec la IRIS X, loin devant les autres. La Fly gr&acirc;ce au peu de main arri&egrave;re, et l\'IRIS&nbsp;gr&acirc;ce&nbsp;&agrave; sa p&eacute;n&eacute;tration dans le vent.</p>
<p>J&rsquo;ajouterais, car &ccedil;a me para&icirc;t important &agrave; signaler, que la construction est beaucoup plus robuste que la Severne ou la NeilPryde par exemple, avec un poids ressenti qui n\'est pas excessivement plus &eacute;lev&eacute;. Cet &eacute;l&eacute;ment sera &agrave; v&eacute;rifier sur les plus grandes surfaces o&ugrave; les V8 et FoilGlide2 excellent. &nbsp;</p>
<h3>Bilan</h3>
<p>La nouvelle Fly 5.5 est une excellente surprise. On a une voile&nbsp;l&eacute;g&egrave;re, tr&egrave;s compacte, cal&eacute;e, puissante et tendre &agrave; la fois. &nbsp;Elle offre une alternative tr&egrave;s int&eacute;ressante par rapport au march&eacute; actuel, un peu en retrait de la Phantom X en terme de performances pures, avec un programme un peu plus freeride, mais avec une plage d&rsquo;utilisation plus large que les NeilPryde, Loft et Severne.&nbsp;</p>
<p>Enfin, il faut signaler son tarif qui est plus contenu que toutes les autres. Ce sera un &eacute;l&eacute;ment &agrave; prendre en compte &eacute;galement pour certains consommateurs.</p>
<p>J\'ai hate la tester en 4.5 et en 7.5 ... histoire de voir si XO a r&eacute;ussi &agrave; offrir une coh&eacute;rence de comportement sur toute la gamme.&nbsp;</p>',
'test_equipment' => 'IRIS X 83 / Foile F4 Slalom',
'test_duration' => 1,
'test_conditions' => 'Mer plate, 15-18knt',
'test_place' => 'La Ciotat',
'created_at' => '2021-10-14 11:42:34',
'updated_at' => '2021-11-06 16:49:10',
),
118 => 
array (
'id' => 126,
'device_id' => 190,
'user_id' => 1,
'title' => 'PWA Weapon',
'body' => '<p>J\'ai eu la chance de pouvoir tester bri&egrave;vement les IRIS R MKII 85 et 78 sur le Spot de l\'Almanarre, pas longtemps apr&egrave;s leur sortie du carton.&nbsp;C&rsquo;est toujours avec beaucoup d&rsquo;excitation que l&rsquo;on teste des planches enti&egrave;rement nouvelles. Etant donn&eacute; les performances et l\'agr&eacute;ment des mod&egrave;les 2021, la barre &eacute;tait plac&eacute;e assez haut.</p>
<h3>Contexte</h3>
<p>D&egrave;s le d&eacute;but des discussions avec Nicolas, il paraissait &eacute;vident que son objectif &eacute;tait d&rsquo;avoir un flotteur parfaitement adapt&eacute; &agrave; la course dans des vents m&eacute;dium voir fort. Apr&egrave;s la r&eacute;ussite de Starboard avec sa Slalom Foil 81, les coureurs &agrave; ce niveau commencent &agrave; s&eacute;rieusement r&eacute;fl&eacute;chir &agrave; l&rsquo;int&eacute;r&ecirc;t de garder une 91 de large.</p>
<p>De mon c&ocirc;t&eacute;, cette pr&eacute;occupation rimait avec inqui&eacute;tude car l&rsquo;objectif commercial reste d&rsquo;avoir une planche accessible. On veut absolument &eacute;viter que cela ne devienne un produit 100% &eacute;lite qui perdrait totalement sa cible commerciale.&nbsp;M&ecirc;me si elle &eacute;tait d&eacute;j&agrave; r&eacute;ussie, c&rsquo;est un peu le reproche que l&rsquo;on peut faire &agrave; la Starboard Slalom Foil 91 2021, qui est clairement orient&eacute;e vers une client&egrave;le de comp&eacute;titeurs, et non plus de pratiquants loisirs.</p>
<h3>En statique</h3>
<p>En terme de mensurations, il est &eacute;vident que cette nouvelle 85 a bien pris en &eacute;paisseur si on la compare &agrave; la X83, avec des rails tr&egrave;s carr&eacute;s est tr&egrave;s &eacute;pais, et un arri&egrave;re qui ne s&rsquo;affine que gr&acirc;ce au double cut. Pour autant, elle reste moins imposante que la Starboard de ce point de vue.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/iris-r-mkii-2022-phantom-1.jpg" alt="IRIS R MKII" /></p>
<p>Comme toujours avec les planches Phantom, on est sur un concept de pont plat inclin&eacute;, avec &agrave; mon go&ucirc;t, quelque chose d&rsquo;ultra naturel et bien &eacute;loign&eacute; des planches de Slalom. &nbsp;La nouvelle 85 reprend le m&ecirc;me concept, avec un niveau de confort encore sup&eacute;rieur &agrave; la 83.&nbsp;L&rsquo;angle du biseau a &eacute;t&eacute; diminu&eacute;, et la position debout est donc encore plus naturelle. On va y gagner &agrave; la fois dans le vent l&eacute;ger en grosse voile avec un appui plus franc, et nous y reviendrons plus tard, lors du jibe.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/iris-r-mkii-2022-phantom-6.jpg" alt="IRIS R MKII" /></p>
<p>Le pont tr&egrave;s creus&eacute; au niveau du pied de mat permet de baisser nettement le centre de pouss&eacute;e du gr&eacute;ement. En contre partie, attention aux manipulations sur l&rsquo;eau car le mat va tr&egrave;s vite venir marquer le pont si il vient s&rsquo;appuyer dessus. Il va falloir oublier les s&eacute;ances de discussion sur l&rsquo;eau entre pote ou au bateau coach avec la voile qui traine dans l&rsquo;eau. Comme tout produit technique, leur utilisation requi&egrave;re une attention plus marqu&eacute;e que les produits grand public &hellip; logique, il ne faudra pas venir r&acirc;ler 😏...</p>
<h3>Premiers bords</h3>
<p>Je ne parlerai pas ici du d&eacute;collage car dans les conditions du test (entre 15 et 25 n&oelig;uds), la difficult&eacute; n&rsquo;&eacute;tait pas l&agrave;.</p>
<p>Lors des premiers bords, la puissance et la libert&eacute; de la planche surprend par rapport &agrave; la 83. Il est &eacute;vident que l&rsquo;on ne joue pas dans la m&ecirc;me cour, et que le produit est nettement mont&eacute; en technicit&eacute;.</p>
<p>Je suis parti au d&eacute;part avec un foil mal r&eacute;gl&eacute;, et la sanction a &eacute;t&eacute; imm&eacute;diate avec une conduite extr&ecirc;mement hasardeuse ... voir flippante.&nbsp;J&rsquo;ai donc pass&eacute; une partie de l&rsquo;apr&egrave;s-midi &agrave; affiner les r&eacute;glages du foil pour trouver enfin un &eacute;quilibre naturel et agr&eacute;able. Disons le tout de suite : en montant en objectifs de performance, la planche demande aussi plus de bagage technique pour le pilote, et un niveau sup&eacute;rieur en terme de finesse de r&eacute;glages. Cette fois, pas question de mettre n&rsquo;importe quel foil dessus et de le r&eacute;gler de travers. De m&ecirc;me, un foil un peu trop souple et ce sera la sanction imm&eacute;diate avec un ensemble ing&eacute;rable. On avait d&eacute;j&agrave; fait cette remaque avec la Starboard Slalom Foil qui consituait un vrai effet de loupe sur les foils trop souples.&nbsp;</p>
<p>La R85 n\'est donc pas un flotteur Plug and Play comme l\'&eacute;tait la X83, et clairement pas faite pour des d&eacute;butants. Pour moi, la cible est clairement les coureurs et les freeraceurs passionn&eacute;s qui sont &eacute;quip&eacute;s en cons&eacute;quence sur le reste du matos (voiles d&eacute;di&eacute;es &agrave; cambers, foil raide et moderne etc.). En effet, c\'est la combinaison d\'&eacute;l&eacute;ments coh&eacute;rents qui permettra d\'exploiter ce type de produit en prenant du plaisir.&nbsp;</p>
<h3>En mode gaz</h3>
<p>Passons ensuite aux choses s&eacute;rieuses une fois tous les r&eacute;glages faits. Avec les pieds dans les straps, la planche d&eacute;ploie toute sa puissance et ses acc&eacute;l&eacute;rations. Elle est nettement plus libre que la 83, plus r&eacute;active aussi, et bien plus puissante.</p>
<p>On sent qu&rsquo;elle sera capable d&rsquo;accepter des voiles plus grosses. Avec la 83, on &eacute;tait d&eacute;j&agrave; &agrave; la limite avec la 8m, alors que cette fois, il ne me parait pas impossible d\'aller jusqu\'&agrave; 9m en mode slalom.&nbsp;</p>
<p>Au niveau des Touchettes, on fait encore un grand pas en avant, avec beaucoup plus d&rsquo;allonge et moins de coups de frein, dans la m&ecirc;me lign&eacute;e que la Starboard Foil Slalom qui nous avait compl&egrave;tement bluff&eacute; fait sur la question. A aucun moment, on n\'a l\'eau qui monte sur le pont et peut venir faucher les pieds ... et malgr&eacute; les francs bords hauts, le nez est tr&egrave;s affin&eacute; pour limiter le fardage.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/iris-r-mkii-2022-phantom-3.jpg" alt="IRIS R MKII" /></p>
<p>Au fur et &agrave; mesure que l\'on s&rsquo;habitue &agrave; la planche, on comprend que la puissance naturelle de la planche ne n&eacute;cessite pas d&rsquo;en rajouter. Il faut la laisser vivre avec le foil, et elle acc&eacute;l&egrave;re naturellement sans &ecirc;tre compl&egrave;tement cal&eacute;e. C\'est assez coh&eacute;rent avec la technique de navigation de Nicolas qui est bien plus en glisse qu\'en puissance.&nbsp;On retrouve certaines sensations de la Starboard avec une conduite assez directive, mais on est cette fois moins bloqu&eacute;. La Phantom a moins d\'inertie : elle fait beaucoup moins camion mais n&eacute;cessite en contre partie un pilotage plus fin.</p>
<p>C&rsquo;est encore plus flagrant au jibe ou la nouvelle 85 est extr&ecirc;mement intuitive. Le changement de pied est d&rsquo;un confort redoutable, et on trouve tr&egrave;s facilement le strap oppos&eacute; sans rester, comme avec la 83, avec le pied bloqu&eacute; dans le strap &agrave; cause du plan inclin&eacute;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/iris-r-mkii-2022-phantom-5.jpg" alt="IRIS R MKII" /></p>
<p>Au final, la R85 demande une position de navigation diff&eacute;rente de la 83, li&eacute;e &agrave; la position plus haute du pied arri&egrave;re. On va bien plus se pendre dans la voile sur l\'avant en calant le pied dans le strap sarri&egrave;re, avec un appui minimal sur le pied avant. Il faut ensuite oser laisser vivre la planche en restant toutefois vigilent pour r&eacute;agir aux &eacute;l&eacute;ments exterieurs. On est clairement &agrave; l\'inverse de la position slalom aileron o&ugrave; on adopte une position protection en arri&egrave;re. Il faut cette fois aller chercher un centre de gravit&eacute; bas tr&egrave;s en avant, donc avec des bouts de harnais longs.</p>
<h3>Une option Light wind</h3>
<p>Bien sur, cette relative technicit&eacute; de la R85 en comparaison avec la X83 2021 s\'entend dans un vent soutenu (au del&agrave; de 15-17 knt), ce qui &eacute;tait de notre jour de test.&nbsp;</p>
<p>Je suis certain que la puissance naturelle de ces flotteurs vs leur largeur peut permettre d\'offrir des solutions tr&egrave;s int&eacute;ressantes dans le light wind pour des rideurs moins pointus. En particulier, la 85 doit exceller dans du 8-13 knt lorsqu\'il faut d&eacute;coller t&ocirc;t et avoir imm&eacute;diatement de l\'appui sous les pieds. A ce titre elle remplacera avec bonheur les 91 mal utilis&eacute;es (lorsqu\'il ne s\'agit pas de naviguer en 9m2 ou plus) en offrant un d&eacute;part bien plus pr&eacute;coce et moins de train&eacute;e. C\'est une remarque &agrave; prendre en compte puisque un nombre important de pratiquants ne font du foil que en dessous de 15knt.</p>
<p>De la m&ecirc;me fa&ccedil;on, la 78 peux certainement &ecirc;tre une bonne planche unique d\'un petit gabarit qui navigue en 7m max</p>
<h3>Et la 78</h3>
<p>Dans la foul&eacute;e, j\'ai test&eacute; la 78 de la m&ecirc;me trempe.&nbsp;On retrouve exactement la m&ecirc;me filiation, avec un c&ocirc;t&eacute; encore plus amusant. En 5 m&sup2;, c&rsquo;est clairement un combo ultra agr&eacute;able qui fait un travail merveilleux.</p>
<p>J&rsquo;avoue que j&rsquo;aurais bien pass&eacute; le reste de la journ&eacute;e dessus tellement c&rsquo;&eacute;tait agr&eacute;able. Au jibe, c&rsquo;est un jouet et les relances sont extr&ecirc;mement fluide gr&acirc;ce a la car&egrave;ne plus &eacute;troite. Les touchettes sont un jeu d&rsquo;enfant, et le plan de pont parfaitement &eacute;quilibr&eacute;.</p>
<p>Reste &agrave; voir dans les conditions houleuse ... mais sur le plat, cette planche est clairement ce que l&rsquo;on a test&eacute; de mieux &agrave; l\'heure actuelle dans le vent un peu soutenu.&nbsp;Elle combine le c&ocirc;t&eacute; compact est tr&egrave;s amusant de la Patrick 125, avec la s&eacute;curit&eacute; offerte par des touchettes tr&egrave;s fluides, et la puissance de la Starboard Foil Slalom.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/iris-r-mkii-2022-phantom-4.jpg" alt="IRIS R MKII" /></p>
<h3>Premier bilan</h3>
<p>Avec ces IRIS MKII, on change de cible en comparaison avec la X83. On monte en technicit&eacute; et en performances, et la prise en main n&eacute;cessite &agrave; la fois des associations bien faites, des r&eacute;glages optimums et du bagage technique. Ce type de flotteur demande plus d\'engagement dans le vent et va nous forcer &agrave; progresser dans notre technique de navigation ... &nbsp;on ne va pas s\'en pleindre car les capacit&eacute;s qui vont avec semblent illimit&eacute;es. On s\'&eacute;loigne &eacute;videmment de l\'accessibilit&eacute; aux pratiquants loisir ... mais ces derniers pourront malgr&eacute; tout y trouver leur int&eacute;r&ecirc;t dans une optique light wind.</p>
<p>Avec un programme clairement orient&eacute; vers la vitesse et des parcours plut&ocirc;t travers, on retrouve logiquement des points communs avec la Starboard Foil Slalom sortie en 2021 (touchettes, glisse). Pour autant, &agrave; voir tous les d&eacute;tails de conception et l\'&eacute;quilibre propos&eacute; par la Phantom, on mesure l\'&eacute;volution en une saison ... comme quoi le windfoil est encore en pleine &eacute;volution&nbsp;! Pr&eacute;cisons que ces 2 nouveaux flotteurs partent pour 2 ans sans changement, et &ccedil;a ne sera pas de trop pour en faire le tour.</p>
<p>Nous voil&agrave; donc bien avanc&eacute;, je prendrai bien une de chaque (85 et 78) 😛&nbsp;, tout en gardant ma X83 actuelle pour les sessions de nav dans les conditions difficiles o&ugrave; son c&ocirc;t&eacute; plug and play fait merveille. Bref, y a du lourd chez Phantom pour 2022, et la marque enfonce son encrage dans le monde des produits foils tr&egrave;s haut de gamme en ciblant les vrais passionn&eacute;s, amateurs de la poign&eacute;e dans le coin. Reste plus qu\'&agrave; attendre sagement la dispo pour le printemps 😀</p>
<h3>2 Versions</h3>
<p>Apr&egrave;s pas mal d\'h&eacute;sitations et de discussions, les IRIS X MKII seront propos&eacute;es dans 2 constructions. Les R adoptent une construction sandwich PVC full carbone &agrave; un peu plus de 3000eur , et les X une construction sandwich PVC verre &amp; carbone &agrave; environ 2500eur. Bien &eacute;videmment, nous ne sommes pas ravis de l\'augmentation de tarif qui est essentiellement due &agrave; l\'explosion des couts d\'acheminements . Par contre, la bonne nouvelle concerne la X qui abandonne la construction wood au profit d\'un sandwich PVA bien plus rigide sous les pieds.&nbsp;</p>
<p><strong>Important </strong>: Phantom annonce une disponibilit&eacute; sur pr&eacute;commande uniquement. De notre c&ocirc;t&eacute;, nous avons book&eacute; les n&ocirc;tres. On vous invite donc &agrave; nous contacter pour r&eacute;server les v&ocirc;tres sans trop trainer si vous d&eacute;siez les avoir en d&eacute;but de saison prochaine. La premi&egrave;re livraison interviendra en Avril / Mai, et compte tenu des incertitudes annonc&eacute;es par toutes les marques sur les approvisionnements COBRA pour 2022, soyez pr&eacute;voyants 😉.</p>',
'test_equipment' => 'Voile IRIS RF 5M, foil IRIS R',
'test_duration' => 3,
'test_conditions' => '20 knt plat',
'test_place' => 'Almanarre',
'created_at' => '2021-11-05 15:43:32',
'updated_at' => '2021-11-09 20:48:10',
),
119 => 
array (
'id' => 127,
'device_id' => 191,
'user_id' => 1,
'title' => 'Une roquette aux fesses',
'body' => '<p>Comme souvent avec les produits course, je n&rsquo;&eacute;crirai pas 2 pages pour d&eacute;crire les sensations de la navigation en matos racing, mais je ferai &nbsp;une comparaison une comparaison avec notre r&eacute;f&eacute;rence actuelle dans cette surface, qui est la Phantom RF 6 m.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6142.jpeg" alt="Xo Sails Gold Foil 2022 6.0m" /></p>
<p>La Gold appara&icirc;t imm&eacute;diatement plus lourde dans les mains , mais aussi plus puissante sans pour autant tirer sur la main arri&egrave;re.</p>
<p>C&rsquo;est vraiment le c&ocirc;t&eacute; surprenant de cette voile, le creux ne se d&eacute;place pratiquement jamais vers l&rsquo;arri&egrave;re, tout au moins dans des conditions d&eacute;centes et pourtant les acc&eacute;l&eacute;rations sont assez fulgurantes. S&rsquo;en est m&ecirc;me presque d&eacute;rangeant au d&eacute;part car avec une voile o&ugrave; on a de la main arri&egrave;re, il suffit de rel&acirc;cher pour contr&ocirc;ler l&rsquo;acc&eacute;l&eacute;ration. Quand on rentre dans la rafales avec la Gold, on a un peu la sensation que m&ecirc;me si on ouvre, elle continue &agrave; acc&eacute;l&eacute;rer &hellip; mais n&rsquo;oublions pas que c&rsquo;est une voile de course, donc cela va tr&egrave;s bien avec l&rsquo;objectif !</p>
<p>La rotation des cambers est excellente, ce qui est m&ecirc;me surprenant pour une voile de ce type. Il faut dire que le profil est assez fin au final&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6145.jpeg" alt="Profil de la Xo Sails Gold Foil 2022 6.0m" /></p>
<p>Le comportement est beaucoup moins &eacute;lastique que la version pr&eacute;c&eacute;dente, le pilotage est donc plus franc et plus direct. Les r&eacute;actions sont ainsi plus faciles &agrave; g&eacute;rer.</p>
<p>La principale chose qui me g&ecirc;ne en comparaison avec la Phantom, c&rsquo;est une tendance &agrave; faire lifter la planche dans les rafales. On peut supposer que c&rsquo;est li&eacute; &agrave; la chute qui ouvre plus, et qui est certainement li&eacute;e aux acc&eacute;l&eacute;rations ressenties. Cette tendance &agrave; lifter impose de venir se pendre de fa&ccedil;on plus vigoureuse dans le gr&eacute;ement pour compenser &hellip; et il faut m&ecirc;me l&rsquo;anticiper car si on s&rsquo;y prend trop tard, la r&eacute;action met du temps &agrave; venir et on n&rsquo;a que 95cm de mat 🤣</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6144.jpeg" alt="chute de la Xo Sails Gold Foil 2022 6.0m" /></p>
<p>Plus globalement, je constate une stabilisation longitudinale du flotteur moindre qu&rsquo;avec la Phantom RF. A titre de comparaison, la Severne Hyperglide 4 si situe un peu entre les deux.</p>
<p>Pr&eacute;cisons que la construction plut&ocirc;t solide en comparaison avec les autres voile de course (d&rsquo;o&ugrave; probablement le poids sup&eacute;rieur) avec des mat&eacute;riaux robustes et &eacute;pais, et le tarif tr&egrave;s plac&eacute; au regard de la concurrence (815eur en 6m).</p>',
'test_equipment' => 'Flotteur Phantom IRIS X , foil F4 aile 560',
'test_duration' => 1,
'test_conditions' => '20knt, plat',
'test_place' => 'Gruissan',
'created_at' => '2021-11-06 18:31:35',
'updated_at' => '2021-11-06 18:50:17',
),
120 => 
array (
'id' => 128,
'device_id' => 192,
'user_id' => 1,
'title' => 'Convertible',
'body' => '<h3>En statique</h3>
<p>En d&eacute;ballant cette nouvelle Stingray, nous &eacute;tions impatient de savoir quelle direction avait choisi Fanatic pour sa ligne foil.&nbsp;</p>
<p>D&egrave;s le premier coup d\'oeil, le positionnement saute aux yeux : un positionnement foil freeride assum&eacute;, dans la pure lign&eacute;e des mod&egrave;les Freefoil Exocet et JP. &nbsp;Comme pour ces 2 derni&egrave;res marques, Fanatic a choisi de proposer &eacute;galement une polyvalence WingFoil / Windfoil avec des positions de straps adapt&eacute;es, et un double syst&egrave;me de boitier (DTT et double rails US)</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6210.jpg" alt="Fanatic StingRay LTD 130 2022" /></p>
<p>Si Fanatic a conserv&eacute; son ancien shape sur ses mod&egrave;les HRS, la LTD offre donc &agrave; la fois un nouveau shape plus moderne, et un programme plus lisible. La plus grosse &eacute;volution concerne la compacit&eacute; du shape avec une longeur de 2m09. Avec ces 130L, 209cm de long et &nbsp;76cm de large, cette Stingray se rapproche beaucoup de la JP Freefoil 130 en terme de format. En cela, elle est bien plus &eacute;troite que l\'Exocet 132.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6208.jpg" alt="Fanatic StingRay LTD 130 2022" /></p>
<p>En terme de construction, la Stingray adopte comme la JP LXT d\'un sandwich PVC verre , ce qui la positionne entre la construction basique d\'une HRS ou AST, et une construction sandwich PVC carbone comme adopt&eacute; par Exocet par exemple. Le poids tr&egrave;s l&eacute;g&egrave;rement en dessous des 10kg peut para&icirc;tre important pour ce type de construction, mais il est difficile de faire beaucoup mieux en proposant autant d\'alternatives quant &agrave; la connexion du foil (DTT ou US) et &agrave; la position des straps (pas moins de 6 rails d\'inserts diff&eacute;rents)</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6211.jpg" alt="Fanatic StingRay LTD 130 2022" /></p>
<h3>En mode freeride</h3>
<p>En comparaison avec la StingRay HRS, cette nouvelle LTD offre une vision beaucoup moderne de la mise en vol. Grace &agrave; sa compacit&eacute;, la LTD ne n&eacute;cessite plus de passer par la phase planning : elle est d&eacute;sormais beaucoup plus facile &agrave; faire poper. Si on l\'&eacute;quipe d\'un foil freeride, le d&eacute;collage peut &ecirc;tre bien plus pr&eacute;coce qu\'avec la HRS. Ca n&eacute;cessite un peu habitude, mais cela vient tr&egrave;s rapidement.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6212.jpg" alt="Fanatic StingRay LTD 130 2022" /></p>
<p>Une fois en l\'air, la StingRay LTD offre &eacute;galement un nouveau visage, avec beaucoup moins d\'inertie que la HRS. Cela se ressent &agrave; la fois sur l\'axe longitudial et l\'axe transversal. La planche est ainsi &agrave; la fois plus amusante, et plus intuitive dans son pilotage. En terme de comportement g&eacute;n&eacute;ral, elle est tr&egrave;s proche de la JP avec le m&ecirc;me c&ocirc;t&eacute; vif et ludique. Comme sur la Freefoil 130, les gabarits de moins de 80kg seront nettement avantag&eacute;s par cette Stingray. Ces 2 mod&egrave;les sont plus maniables que l\'Exocet. Cette derni&egrave;re aura par contre pour elle un c&ocirc;t&eacute; un peu plus accessible et plus cal&eacute;, surtout pour les gros gabarits.</p>
<p>Comme pour la JP Freefoil, la StingRay LTD est annonc&eacute;e pour supporter un &eacute;ventail assez large de taille de voile. Pourtant, &nbsp;c\'est clairement avec des voiles de 6m et moins qu\'elle sera la plus facile et seine &agrave; exploiter. C\'est d\'autant plus coh&eacute;rent que ce type de flotteur n&eacute;cessite assez peu de puissance v&eacute;lique. Avec des voiles plus grandes (test&eacute;e en 7m par exemple), le contr&ocirc;le en prend vite un coup, ce qui impose &agrave; naviguer tr&egrave;s droit. Au contaire, avec des voiles de petite taille, on exploite &agrave; 100% le potentiel du flotteur et on acc&egrave;de directement au plaisir du pilotage du bout des orteils. Pour illustrer, j\'ai &eacute;galement test&eacute; la Stingray LTD avec une Superstar 4.7 dans 15-17 knt de vent : un peu technique au d&eacute;collage, mais un v&eacute;ritable r&eacute;gal ensuite !</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6213.jpg" alt="Fanatic StingRay LTD 130 2022" /></p>
<p>Le plan de pont (assez plat) est tr&egrave;s confortable dans les manoeuvres. Si on ne charge pas en voile, donc en poids sur le nez, le jibe est facilit&eacute; par un maintien en vol tr&egrave;s naturel.&nbsp;</p>
<p>La Stingray reprend des formes de rails d&eacute;sormais courantes dans le monde du freeride. Les touchettes sont ainsi plut&ocirc;t douces &agrave; condition de ne pas charger en poids sur l\'avant. Comme pour le pilotage, c\'est donc avec des voiles de petites tailles que le \'rebond\' est le plus efficace. Au contraire, les voiles un peu lourdes ont tendance &agrave; faire mordre l\'avant tr&egrave;s compact .. et engendre des bons coups de frein.</p>
<h3>Bilan</h3>
<p>Avec cette Stingray LTD 130, Fanatic propose un flotteur 100% freeride parfaitement au gout du jour. A d&eacute;faut d\'une proposition tr&egrave;s originale (la JP freefoil 130 lui ressemble comme 2 gouttes d\'eau), cette Stingray fait un zero faute sur le comportement &agrave; condition de l\'utiliser avec des voiles de taille raisonnables. Elle sera surtout adapt&eacute;e aux gabarits de moins de 80-85kg.</p>
<p>Comme elle est &eacute;galement utilisable pour d&eacute;buter la Wing, la Stingray LTD a de forte chance de s&eacute;duire tous ceux qui veulent limiter la quantit&eacute; de mat&eacute;riel tout en se r&eacute;servant un maximum d\'options.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-10/IMG_6209.jpg" alt="Fanatic StingRay LTD 130 2022" /></p>',
'test_equipment' => 'Foil Sabfoil Vento 85, Space Cam 7m',
'test_duration' => 1,
'test_conditions' => '12-15 knt, houle',
'test_place' => 'Marignane',
'created_at' => '2021-11-09 21:24:29',
'updated_at' => '2021-11-10 19:58:44',
),
121 => 
array (
'id' => 129,
'device_id' => 168,
'user_id' => 1,
'title' => 'Présentation',
'body' => '<div class="container">
<div class="row">
<div class="col-lg">
<p>A l\'occasion de la r&eacute;ception d\'un mod&egrave;le de pr&eacute;-s&eacute;rie, nous vous faisons d&eacute;couvrir le mod&egrave;le Race. Je pr&eacute;cise que malgr&eacute; cette pr&eacute;sentation, il faudra attendre encore au moins 6 semaines avant de pouvoir acqu&eacute;rir un mod&egrave;le de s&eacute;rie car ne nombreux petits d&eacute;tails d\'industrialisation sont encore &agrave; r&eacute;gler. Le premier r&eacute;sultat est cependant tr&egrave;s encourageant.&nbsp;</p>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<h3>Le mat</h3>
<p>Le mat HM97 consitue la pi&egrave;ce ma&icirc;tresse du puzzle. Depuis toujours, F4 a bien compris qu\'une grande partie se jouait l&agrave;, et nous avons toujours eu des mats d\'une qualit&eacute; assez exceptionelle. Leur force : des rigidit&eacute;s en flexion et torsion de tr&egrave;s haut niveau. Cette fois, le dernier venu explose litt&eacute;ralement toutes nos r&eacute;f&eacute;rences. La marque a fait le choix d\'un mat un peu plus &eacute;pais que la moyenne pour favoriser le contr&ocirc;le : une strat&eacute;gie qui pourrait g&ecirc;ner les meilleurs mondiaux, mais qui sera certainement payante pour les amateurs.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0943.jpeg" alt="F4 Race foll 2021" /></p>
<p>Ce mat sera commun &agrave; toutes les configurations F4, y compris le mod&egrave;le freeride. Cela veut aussi dire qu\'il sera enfin possible, avec le m&ecirc;me mat, d\'avoir &agrave; la fois un foil de race ultime, un mod&egrave;le de freerace ou de slalom mais aussi un mod&egrave;le de freewave pour aller jouer dans les vagues ... et ceci sans aucune concession sur le contr&ocirc;le gr&acirc;ce &agrave; une rigidit&eacute; au top.</p>
<p>Tout se jouera dans les tailles de fuselage et les mod&egrave;les d\'ailes.</p>
<p>Cette compatibilit&eacute; sera aussi un super atout pour celui qui veut faire &eacute;voluer un foil du freeride vers de la perf. Certes l\'investissement de d&eacute;part est l&eacute;g&egrave;rement sup&eacute;rieur (environ 2000&euro; contre 1600 &agrave; 1700 pour les meilleurs mod&egrave;les freeride carbone), mais ce sera le seul foil freeride du march&eacute; &agrave; b&eacute;n&eacute;ficier d\'un mat haut module, &eacute;volutif sans changement vers un mod&egrave;le de course.</p>
</div>
<div class="col-lg-6">
<h3>Les stabilisateurs</h3>
<p>Les stabilisateurs changent &eacute;galement compl&egrave;tement.</p>
<p>Cette fois, on quitte la s&eacute;rie des stab qui &eacute;taient partag&eacute;s avec NeilPryde pour des mod&egrave;les &agrave; plus grand allongement.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0949.jpeg" alt="F4 Race foll 2021" /></p>
<p>Le berceau assise du stab est d&eacute;sormais int&eacute;gr&eacute; au moulage, et ne sera donc plus produit en imprimante 3D.</p>
<p>Cela va permettre de faire baisser le cout des jeux de cales et d\'avoir des jonctions plus propres.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0950.jpeg" alt="F4 Race foll 2021" /></p>
</div>
<div class="col-lg-6">
<h3>Les fuselages</h3>
<p>Pas de changement sur l\'assise du stab, mais je r&eacute;itt&egrave;re mon commentaire concernant le bien fond&eacute; des filetage profonds comme c\'est le cas ici. Cela &eacute;vite en particulier des foirages trop rapides d&egrave;s que l\'on serre un peu fort. Et si un jour on doit poser des h&eacute;licoils, on n\'a pas le probl&egrave;me de l\'h&eacute;licoil qui bute au fond et qui d&eacute;passe.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0946.jpeg" alt="F4 Race foll 2021" /></p>
<p>L\'assise de l\'aile avant est compl&egrave;tement nouvelle. On a enfin un assise plane qui va donner plus de libret&eacute; quant aux profils d\'aile puisqu\'il ne sera plus n&eacute;cessaire d\'avoir un extrados constant. Elle est aussi plus large afin de favoriser la ridigit&eacute; de fixation des ailes &agrave; grande envergure.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0948.jpeg" alt="F4 Race foll 2021" /></p>
</div>
<div class="col-lg-6">
<h3>Les ailes</h3>
<p>Les ailes (ici les surfaces 945 et 850) sont &eacute;galement nouvelles. En terme d\'outline et de profil, elles sont issues du d&eacute;veloppement de la derni&egrave;re 900 de la marque, avec des bouts d\'aile encore plus fins pour favoriser la glisse.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0951.jpeg" alt="F4 Race foll 2021" /></p>
<p>Les ailes viennent d&eacute;sormais se fixer sur un fuselage plat, avec 5 vis M6 Torx. Elles int&egrave;grent un petit morceau de fuselage pour peaufiner les &eacute;coulements entre le bord de fuite et le fuselage.</p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0952.jpeg" alt="F4 Race foll 2021" /></p>
<p><img class="img-fluid" src="/storage/photos/1/2021-01/IMG_0953.jpeg" alt="F4 Race foll 2021" /></p>
<p>Ces 2 grandes surfaces seront accompagn&eacute;es d\'une s&eacute;rie d\'ailes typ&eacute;es slalom entre 337 et 720 cm2, et d\'une 800 freerace privil&eacute;giant l\'accessibilit&eacute;.</p>
</div>
</div>
<div class="row">
<div class="col-lg">
<p>Voil&agrave; pour un premier un boxing rapide du mod&egrave;le 2021. A venir toute une gamme avec des fuselages de 78 &agrave; 115, des ailes de 337cm2 &agrave; 2500cm2. Aux dires de la nouvelle structure F4, tout ceci devrait &ecirc;tre disponible autour de d&eacute;but Mars, avec un site Internet remis &agrave; jour et la possibilit&eacute; de constituer vos packages sur mesure. A tr&egrave;s vite pour un premier test sur l\'eau.</p>
</div>
</div>
</div>',
'test_equipment' => NULL,
'test_duration' => NULL,
'test_conditions' => NULL,
'test_place' => NULL,
'created_at' => '2021-01-10 20:31:29',
'updated_at' => '2022-03-13 17:42:55',
),
122 => 
array (
'id' => 130,
'device_id' => 16,
'user_id' => 1,
'title' => 'Présentation',
'body' => '<p><img src="/storage/photos/1/2018-12/f4-race-foil-2019-apBl2gZO8s.jpg" alt="" /></p>
<p>La finition des pi&egrave;ces carbone est superbe. Aucune bavure, les talons sont ponc&eacute;s pour que les ajustement se fassent sans forcer. J\'ai re&ccedil;u 2 ailes avec une finition mat magnifique, et une aile brillante. Visiblement, les 2 ailes mattes et le mat ne sont plus en prepreg, contrairement &agrave; l\'aile brillante.</p>
<p><img src="/storage/photos/1/2018-12/f4-race-foil-2019-OsvKvQRoh2.jpg" alt="" /></p>
<p>Les fuselages sont lourds mais respirent &agrave; rigidit&eacute;. Ils sont tr&egrave;s g&eacute;n&eacute;reusement dimensionn&eacute;s . Ils sont anodis&eacute;s noir mat ... mais cette anodisation parait l&eacute;g&egrave;re.</p>
<p><img src="/storage/photos/1/2018-12/f4-race-foil-2019-c38IhSDHXZ.jpg" alt="" /></p>
<p>Le berceau de l\'aile est usin&eacute; dans la masse, tandis que celui du stab passe par une cale visiblement r&eacute;alis&eacute;e en impression 3D. <img src="/storage/photos/1/2018-12/f4-race-foil-2019-YP0BlxNrQV.jpg" alt="" /></p>
<p>Cela va permettre de r&eacute;aliser &eacute;ventuellement d\'autres cales pour modifier l\'angle du stab.</p>
<p><img src="/storage/photos/1/2018-12/f4-race-foil-2019-WmuipFXhjF.jpg" alt="" /></p>
<p>L\'assemblage se fait sans probl&egrave;me, mais on regr&ecirc;te juste que F4 ai d&eacute;cid&eacute; de rester sur une visserie M5 6 pans. Grace &agrave; Starboard, nous avons pris l\'habitude d\'utilser du Torx dans ces diam&egrave;tres, beaucoup plus r&eacute;sistant dans le temps, et permettant un meilleur couple de serrage. L\'autre solution consiste &agrave; passer &agrave; du M6 comme Taaroa ... bref, apr&egrave;s un serrage o&ugrave; d&eacute;j&agrave; une t&ecirc;te de vis &agrave; montr&eacute; des signes de faiblesse, je me suis empress&eacute; de remplacer les vis fournies par du Torx.</p>
<h3>Mesures</h3>
<p>Je n\'ai pas pu m\'emp&ecirc;cher de mesurer la rigidit&eacute; en flexion et en torsion du mat pour en savoir plus sur cette nouvelle version. Disons le tout de suite, ce n\'est pas le mat le plus raide du march&eacute; en flexion, mais il est dans les 4 premiers. Par contre, avec une &eacute;paisseur moyenne de 14,5 mm, c\'est l\'un des plus fins. De fa&ccedil;on &eacute;vidente, il explose les scores sur le module de rigidit&eacute; en flexion (rigidit&eacute; rapport&eacute;e &agrave; l\'&eacute;paisseur) avec une valeur 50% plus &eacute;lev&eacute;e que le 2e, 75% plus &eacute;lev&eacute;e que le NP F4, et 3600% plus elev&eacute;e que le foil le plus souple que l\'on ait mesur&eacute; !! &nbsp;&nbsp;</p>
<p>En torsion, il prend la 2e place des mats carbone mesur&eacute;s.</p>
<p>Bien s&ucirc;r, tout ceci n\'est que tr&egrave;s th&eacute;orique, mais cela montre le soin que F4 a apport&eacute; &agrave; la construction de son foil.</p>',
'test_equipment' => NULL,
'test_duration' => NULL,
'test_conditions' => NULL,
'test_place' => NULL,
'created_at' => '2022-03-10 20:48:06',
'updated_at' => '2022-03-10 20:49:10',
),
123 => 
array (
'id' => 131,
'device_id' => 29,
'user_id' => 1,
'title' => 'Présentation',
'body' => '<p>Aujourd\'hui, nous avons re&ccedil;u les 2 nouveaux foils Alpine de windsurf : les A1 Aluiminum et A1 Carbone. Ce sont 2 pi&egrave;ces absolument magnifiques, produites 100% en France, que nous nous faisons un plaisir de pr&eacute;senter en d&eacute;tail.</p>
<p>Commen&ccedil;ons par quelques donn&eacute;es techniques basiques</p>
<ul>
<li>la version alu poss&egrave;de un mat de 85cm avec une corde de 15.5cm. Nous l\'avons pes&eacute; &agrave; 5kg24 dans sa totalit&eacute;</li>
</ul>
<p>Ces foils nous ont &eacute;t&eacute; livr&eacute;s par la soci&eacute;t&eacute; Alpine avec 2 ailes :</p>
<ul>
<li>une Light Wind de 84cm d\'envergure et 14cm de corde</li>
<li>une aile de vent soutenu de 64cm d\'envergure et 14,5 cm de corde</li>
</ul>
<p>D&egrave;s le d&eacute;ballage, la qualit&eacute; de fabrication saute aux yeux. Fid&egrave;le &agrave; son habitude, Alpine propose des produits ultra bien finis, dont toutes les pi&egrave;ces m&eacute;talliques re&ccedil;oivent une anodisation orange du plus bel effet. De ce c&ocirc;t&eacute;, Alpine a positionn&eacute; la barre tr&egrave;s haut !</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-1.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Les 2 mats font pratiquement la m&ecirc;me taille. Suite aux premiers essai de l\'an pass&eacute;, le mod&egrave;le aluminium a &eacute;t&eacute; enti&egrave;rement repens&eacute;, et le mat semble cette fois ultra rigide ... un excellent point que nous v&eacute;rifieront sur l\'eau tr&egrave;s vite.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-2.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Ils viennent s\'emboiter dans le fuselage au moyen d\'un boitier cylindrique, le tout &eacute;tant bloqu&eacute; par des vis transversales et lat&eacute;rales (comme chez Starboard). A l\'usage, nous savons d&eacute;sormais que cela assure une liaison fiable et rigide.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-3.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Le fuselage est &eacute;quip&eacute; d\'une anode qui limite la corrosion des autres pi&egrave;ces. Nous l\'avons test&eacute; : associ&eacute;e &agrave; des vis enduites de Tef Gel, cela permet de laisser le foil mont&eacute; plusieurs jours sans g&eacute;n&eacute;rer d\'oxydation visible. Nous vous incitons tout de m&ecirc;me &agrave; d&eacute;monter r&eacute;guli&egrave;rement vos foils alu.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-4.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Le talon du mat alu re&ccedil;oit une mini platine, largement suffisante &agrave; nos yeux ... qui peut &ecirc;tre &eacute;largie &agrave; l\'aide d\'une platine carbone (fournie), et peut &ecirc;tre remplac&eacute; par une version PowerBox.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-5.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Un tr&egrave;s (tr&egrave;s tr&egrave;s) bon point : comme chez Starboard, les inserts sont pivotants, et offrent un d&eacute;battement suffisant pour que l\'on puisse monter le foil sans bricolage sur les diff&eacute;rents flotteurs dont les per&ccedil;ages ne sont jamais au m&ecirc;me endroit (merci Cobra).</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-6.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>C&ocirc;t&eacute; ailes, nous avons re&ccedil;u 2 ailes en Carbone, tr&egrave;s l&eacute;g&egrave;res, et recevant une finition mate tr&egrave;s propre sans masquage ni peinture ... certainement ce qui se fait de mieux &agrave; l\'heure actuelle. Les ailes sont aussi disponibles dans d\'autres finitions plus haut de gamme pour ceux qui veulent les utiliser comme miroirs pour se raser le matin :)</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-7.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>La 84cm light wind utilise un profil plut&ocirc;t fin.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-8.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Le 64 a une forme tr&egrave;s diff&eacute;rente, avec un profil plus &eacute;pais</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-9.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>L\'ensemble est mont&eacute; sur le fuselage avec des entretoises en plastiques. Ces pi&egrave;ces servent &eacute;galement de r&eacute;glage d\'angle puisque Alpine livre le foil avec plusieurs cales &agrave; la fois pour l\'aile et pour le stab. Les cales poss&egrave;dent des petits t&eacute;tons de centrage qui sont bien pratiques &agrave; l\'usage. Le tout est assembl&eacute; avec des Torx T30, la cl&eacute; &eacute;tant fournie.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-10.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-11.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>
<p>Le stab, quant &agrave; lui, est un mod&egrave;le ultra fin, qui va certainement occasionner bine peu de train&eacute;e. Il faudra cependant en prendre soin vu sa finesse, mais c\'est aussi une tr&egrave;s jolie pi&egrave;ce.</p>
<p><img class="img-fluid" src="/storage/photos/1/2018-04/alpinefoil-a1-alu-2018-12.jpg" alt="AlpineFoil A1 Aluminium" width="900" height="621" /></p>',
'test_equipment' => NULL,
'test_duration' => NULL,
'test_conditions' => NULL,
'test_place' => NULL,
'created_at' => '2022-03-10 20:56:04',
'updated_at' => '2022-03-10 20:56:04',
),
124 => 
array (
'id' => 132,
'device_id' => 138,
'user_id' => 1,
'title' => 'Présentation',
'body' => '<p>Pour 2020, AlpineFoil nous propose 2 nouvelles d&eacute;clinaisons de son windfoil carbone A1 : le "Sport" et le "Race". Ces 2 nouveaux mod&egrave;les sont bas&eacute;s sur un mat de 97cm, notablement optimis&eacute; pour la glisse avec avec un profil plus fin (13.9mm en t&ecirc;te contre 16mm) que sur le A1 original.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-1.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>Sur ces 2 mod&egrave;les, l\'&eacute;chantillonnage a &eacute;t&eacute; revu par rapport au A1 avec, notemment, des quantit&eacute;s de carbone haut module (M40J et autres) bien plus importantes. Ceci a pour objectif de compenser la plus faible &eacute;paisseur, et la plus grande longueur de mat, pour conserver une raideur optimale.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-2.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>Le mod&egrave;le Sport est destin&eacute;s aux amateurs sportifs, qui veulent d&eacute;couvrir des sensations de glisse sup&eacute;rieures au A1. La mod&egrave;le Race, destin&eacute; aux experts, est g&eacute;om&eacute;triquement identique, mais profite d\'un mat beaoucoup plus raide pour plus de contr&ocirc;le dans le vent, y compris avec les planches larges et les plus grands fuselages.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-9.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>Sur ce nouvel A1 Sport, le fuselage a &eacute;t&eacute; &eacute;galement revu par rapport au A1 \'standard\'. La longueur totale est identique, mais l\'aile a &eacute;t&eacute; recul&eacute;e de 10mm par rapport au mod&egrave;le 2019. C\'est assez visible sur la photo ci -dessus.</p>
<p>Le fuselage a &eacute;t&eacute; &eacute;galement &eacute;paissi pour ajouter de la raideur. C\'est en particulier tr&egrave;s visible autour de la jonction mat / fuselage (cf. photo ci dessous)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-10.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>En regardant de pr&egrave;s, on remarquera aussi que la queue du Sport a &eacute;t&eacute; revue pour affiner les sorties d\'eau.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-13.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>Pour finir avec le jeux des 7 diff&eacute;rences, les plus attentifs remarqueront que l\'assise du talon a une nouvelle forme avec un &eacute;paississement plus marqu&eacute;, pour am&eacute;liorer le blocage de la platine carbone propos&eacute;e en option.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-5.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>De fa&ccedil;on tout &agrave; fait logique, la platine est &eacute;galement revue pour matcher avec ce nouveau talon:</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-7.jpg" alt="Alpinefoil A1 Sport Carbone 2020" width="1500" height="740" /></p>
<p>Vous remarquez &eacute;galement que cette derni&egrave;re est dissym&eacute;trique avec un c&ocirc;t&eacute; plus &eacute;pais que l\'autre. En fonction de son montage cela veut dire qu\'on va ajouter ou retirer 1&deg; environ d\'angle de rake. Je pr&eacute;cise qu\'il existe &eacute;galement une 2e platine en option avec un angle de 0.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-6.jpg" alt="Alpinefoil A1 Sport Carbone 2020" width="1500" height="870" /></p>
<p>Je ne pourrai pas terminer cette pr&eacute;sentation sans mettre en lumi&egrave;re l\'exceptionelle finition du A1 Sport ... dans la pure tradition AlpineFoil, et bien s&ucirc;r un point important &agrave; nos yeux : il est con&ccedil;u ET fabriqu&eacute; en France. A l\'instar des produits Lokefoil et AHD, choisir un foil AlpineFoil, c\'est &eacute;videmment soutenir nos artisans et industriels fran&ccedil;ais, qui font d\'&eacute;normes efforts pour propoer des produits ultra qualitatifs &agrave; des prix identiques aux productions asiatiques !</p>',
'test_equipment' => NULL,
'test_duration' => NULL,
'test_conditions' => NULL,
'test_place' => NULL,
'created_at' => '2022-03-10 20:57:27',
'updated_at' => '2022-03-10 20:57:27',
),
125 => 
array (
'id' => 133,
'device_id' => 147,
'user_id' => 1,
'title' => 'Présentation',
'body' => '<div class="multi-col-2">
<div><img class="img-fluid" src="/storage/photos/1/2020-06/IMG_5063.jpg" alt="Alpinefoil A1 race" /></div>
<div>
<p>Pour 2020, AlpineFoil nous propose 2 nouvelles d&eacute;clinaisons de son windfoil carbone A1 : le "Sport" et le "Race". Ces 2 nouveaux mod&egrave;les sont bas&eacute;s sur un mat de 97cm, notablement optimis&eacute; pour la glisse avec avec un profil plus fin (13.9mm en t&ecirc;te contre 16mm) que sur le A1 original.</p>
<p>Sur ces 2 mod&egrave;les, l\'&eacute;chantillonnage a &eacute;t&eacute; revu par rapport au A1 avec, notemment, des quantit&eacute;s de carbone haut module (M40J et autres) bien plus importantes. Ceci a pour objectif de compenser la plus faible &eacute;paisseur, et la plus grande longueur de mat, pour conserver une raideur optimale. Les 2 mod&egrave;les sont d&eacute;sormais livr&eacute;s en standard avec l\'aile Regata 850.</p>
<p>Le mod&egrave;le Race, destin&eacute; aux experts, est g&eacute;om&eacute;triquement identique, mais profite d\'un mat beaoucoup plus raide pour plus de contr&ocirc;le dans le vent, y compris avec les planches larges et les plus grands fuselages.</p>
<p>Sur ce nouvel A1 Race, le fuselage a &eacute;t&eacute; &eacute;galement revu par rapport au A1 \'standard\'. La longueur totale passe &agrave; 125cm, ave une aile tr&egrave;s avanc&eacute;e pour un maxiumum de puissance.&nbsp;Le fuselage a &eacute;t&eacute; &eacute;galement &eacute;paissi pour ajouter de la raideur. C\'est en particulier tr&egrave;s visible autour de la jonction mat / fuselage (cf. photo ci dessous)</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-10.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>Pour finir avec le jeux des 7 diff&eacute;rences, les plus attentifs remarqueront que l\'assise du talon a une nouvelle forme avec un &eacute;paississement plus marqu&eacute;, pour am&eacute;liorer le blocage de la platine carbone propos&eacute;e en option.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-5.jpg" alt="Alpinefoil A1 Sport Carbone 2020" /></p>
<p>De fa&ccedil;on tout &agrave; fait logique, la platine est &eacute;galement revue pour matcher avec ce nouveau talon:</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-7.jpg" alt="Alpinefoil A1 Sport Carbone 2020" width="1500" height="740" /></p>
<p>Vous remarquez &eacute;galement que cette derni&egrave;re est dissym&eacute;trique avec un c&ocirc;t&eacute; plus &eacute;pais que l\'autre. En fonction de son montage cela veut dire qu\'on va ajouter ou retirer 1&deg; environ d\'angle de rake. Je pr&eacute;cise qu\'il existe &eacute;galement une 2e platine en option avec un angle de 0.</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-05/alpine_a1_sport_carbone_2020-6.jpg" alt="Alpinefoil A1 Sport Carbone 2020" width="1500" height="870" /></p>
<p>Je ne pourrai pas terminer cette pr&eacute;sentation sans mettre en lumi&egrave;re l\'exceptionelle finition du A1 Race ... dans la pure tradition AlpineFoil, et bien s&ucirc;r un point important &agrave; nos yeux : il est con&ccedil;u ET fabriqu&eacute; en France. A l\'instar des produits Lokefoil et AHD, choisir un foil AlpineFoil, c\'est &eacute;videmment soutenir nos artisans et industriels fran&ccedil;ais, qui font d\'&eacute;normes efforts pour propoer des produits ultra qualitatifs &agrave; des prix identiques aux productions asiatiques !</p>
</div>
</div>',
'test_equipment' => NULL,
'test_duration' => NULL,
'test_conditions' => NULL,
'test_place' => NULL,
'created_at' => '2022-03-10 20:58:14',
'updated_at' => '2022-03-10 20:58:14',
),
126 => 
array (
'id' => 134,
'device_id' => 164,
'user_id' => 1,
'title' => 'Présentation',
'body' => '<p>Voici quelques photos des premiers mod&egrave;les de s&eacute;rie :</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_0617.jpg" alt="AFS wind 95 v2" /></p>
<p>Le combo avec aile S820</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_0618.jpg" alt="AFS wind 95 v2" /></p>
<p>Le nouveau fuselage &agrave; section carr&eacute;e</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_0619.jpg" alt="AFS wind 95 v2" /></p>
<p>La liaison mat / fuslelage coll&eacute; et tourillon&eacute;</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_0620.jpg" alt="AFS wind 95 v2" /></p>
<p>Les nouveaux inserts noy&eacute;s apr&egrave;s moulage</p>
<p><img class="img-fluid" src="/storage/photos/1/2020-12/IMG_0622.jpg" alt="AFS wind 95 v2" /></p>
<p>Le nouveau mat &agrave; corde &eacute;volutive</p>',
'test_equipment' => NULL,
'test_duration' => NULL,
'test_conditions' => NULL,
'test_place' => NULL,
'created_at' => '2021-01-15 21:02:20',
'updated_at' => '2021-01-15 21:02:20',
),
127 => 
array (
'id' => 135,
'device_id' => 8,
'user_id' => 1,
'title' => 'GEN2 : Le diable se cache dans les détails',
'body' => '<div class="row">
<div class="col-4">
<p><img class="img-fluid" src="/storage/photos/5/2022-03/cwc.jpg" alt="" /></p>
</div>
<div class="col-8">
<h3>Contexte</h3>
<p>Une fois n\'est pas coutume, je me suis permis de prendre du temps avant d\'&eacute;crire un compte rendu sur cet IRIS X 2022. Cela m\'a permis de l\'utiliser dans des conditions tr&egrave;s vari&eacute;es : de la pr&eacute;paration du D&eacute;fi Wind Corsica, aux sessions hivernales d\'Est &agrave; l\'Almanarre en passant par les coups de mistral bien irr&eacute;guliers &agrave; La ciotat. Il faut dire que les &eacute;volutions en windfoil sont d&eacute;sormais de plus en plus subtiles, et font l\'object d\'une recherche de compromis. Les produits les plus aboutis, exempts de d&eacute;fauts majeurs, demandent donc plus de temps pour en cerner tout le caract&egrave;re.</p>
</div>
</div>
<h3>Changement de production</h3>
<div class="row">
<div class="col-8">
<p>Sur le papier, cet IRIS X est inchang&eacute; depuis 3 saisons maintenant, et exterieurement, il faut avoir l\'oeil pour distinguer les &eacute;volutions. Mais comme souvent, le diable se cache dans les d&eacute;tails, et il peuvent faire une vraie diff&eacute;rence ! Soyons honn&egrave;tes, il s\'agit bien du m&ecirc;me mod&egrave;le : c\'est la construction qui a &eacute;volu&eacute; avec un changement d\'usine et un gros travail d\'industrialisation et de mise au point.</p>
<p>De loin, on pourrait immaginer que sous-traiter la production d\'un foil en Asie se r&eacute;sume &agrave; concevoir des moules et donner des sp&eacute;cifications de layup ... mais coyez moi, on est loin du compte. J\'ai l\'occasion de suivre le processus de mise au point de plusieurs marques, et il est assez &eacute;tonnant de voir les efforts et le temps n&eacute;cessaire &agrave; l\'aboutissement vers un produit commercialisable. Sans rentrer plus dans les d&eacute;tails, je peux vous dire qu\'on relativise tr&egrave;s vite le cout du mat&eacute;riel qui pourrait para&icirc;tre &eacute;lev&eacute; vu de l\'exterieur.</p>
<h3>G&eacute;n&eacute;ration 2</h3>
<p>Apr&egrave;s cette petite parenth&egrave;se, revenons en &agrave; notre IRIS X 2022, et rentons un peu plus dans les d&eacute;tails. Comme la g&eacute;om&eacute;trie g&eacute;n&eacute;rale des &eacute;l&eacute;ments est inchang&eacute;e, les &eacute;volutions concernent 2 points</p>
<ul>
<li>la qualit&eacute; des moulages et le respect de la g&eacute;om&eacute;trie th&eacute;orique</li>
<li>le processus et les mat&eacute;riaux utilis&eacute;s dans la structure</li>
</ul>
<p>Sur le premier point, il faut savoir que m&ecirc;me si les foils sont produits dans des moules, on est souvent surpris de voir combien les pi&egrave;ces peuvent r&eacute;guli&egrave;rement varier. Le respect de la g&eacute;om&eacute;trie th&eacute;orique reprose sur un tr&egrave;s subtil &eacute;quilibre entre la quantit&eacute; de mat&eacute;riaux ins&eacute;r&eacute;s dans le moule et les positionnements, de mani&egrave;re &agrave; ce que le moule ferme parfaitement sans risque de manque et donc de fragilisation des bords de fuite ultra fins. En ce qui concerne les foils Phantom, un &eacute;norme travail de mise au point a &eacute;t&eacute; r&eacute;alis&eacute; suite au changement d\'usine, avec une quantit&eacute; assez importante de prototypes. Le r&eacute;sultat est clairement &agrave; la hauteur de l\'effort consenti, avec les profils les plus fins et propres du march&eacute; sans aucune reprise manuelle (ailes et mat). Ici, pas de place aux al&eacute;as d\'une finition &agrave; la main : le respect de la g&eacute;om&eacute;trie nominale frise la perfection, et nous verrons que les sensations en navigation n\'y sont pas &eacute;trang&egrave;res.</p>
<p>Sur le deuxi&egrave;me point (mat&eacute;riaux et structure), les plus observateurs remarqueront que les mats de IRIS X dit GEN2 n\'ont pas le m&ecirc;me aspect que les mats premi&egrave;re g&eacute;n&eacute;ration ... et ce n\'est pas un hazard : on ne voit plus les petits carr&eacute;s caract&eacute;ristiques d\'un tissus carbone en surface. Sans d&eacute;voiler les &eacute;volutions internes majeures de cette nouvelle construction, nous verrons que Phantom a r&eacute;ussi a offrir un ratio rigidit&eacute; &nbsp;/ &eacute;paisseur des profils en tr&egrave;s nette hausse par rapport &agrave; la version pr&eacute;c&eacute;dente.</p>
</div>
<div class="col-4">
<p><img class="img-fluid" src="/storage/photos/5/2022-03/IMG_7972.jpeg" alt="" width="1200" height="707" /></p>
</div>
</div>
<h3>Et sur l\'eau, quelle diff&eacute;rence ?</h3>
<p>Bien &eacute;videmment, tous ces &eacute;l&eacute;ments n\'auraient aucun int&eacute;r&ecirc;t si on ne ressentait rien sur l\'eau ... alors qu\'est ce que &ccedil;a donne ?</p>
<p>Pour &ecirc;tre tr&egrave;s clair, l\'IRIS X GEN 2 reste un IRIS X. Les yeux ferm&eacute;s, on reconnait parfaitement la signature des foils Phantom, &agrave; savoir une glisse tr&egrave;s fine et fluide, une totale absence de bruit ou de vibration (preuve de la qualit&eacute; des &eacute;coulements hydrodynamiques) et un caract&egrave;re plut&ocirc;t vif.</p>
<h5>D&eacute;collage</h5>
<p>Dans le la pack de s&eacute;rie, livr&eacute; avec les ailes 550 et 730, je me permets de pr&eacute;ciser une fois de plus ici que la 730, est bien une aile parfaitement adapt&eacute;e au Light wind. Cette aile remplace la 800 de la g&eacute;n&eacute;ration 1, mais malgr&eacute; la surface moins &eacute;lev&eacute;e, il faut bien int&eacute;grer que c\'est une aile puissante qui compense largement sa surface l&eacute;g&egrave;rement plus faible par une glisse &eacute;norme et une vitesse g&eacute;n&eacute;ratrice de portance. Pour donner des rep&egrave;res, elle est parfaotement adapt&eacute;e &agrave; une naviguation dans 8 knt en 8m2 .. &agrave; condition d\'avoir un minimum de technique). La 550 s\'utilise dans soucis &agrave; partir de 13-14 knt en 7m.</p>
<p>Les diff&eacute;rences de sensation sont logiquement tr&egrave;s li&eacute;es aux 2 &eacute;volutions techniques du processus de construction.</p>
<h5>La glisse</h5>
<p>La glisse fait encore un pas en avant, avec des sensations carr&eacute;ment jouissives sur l\'aile de 550. On a beau avoir un assez grand stab sur cette version de s&eacute;rie (250cm2), &ccedil;a glisse tout seul, m&ecirc;me sans aller chercher des vents forts et sans se mettre dans le rouge. D\'ailleurs, c\'est en laissant vivre ce foil qu\'il est le plus efficace : il ne faut pas lui rentrer dedans mais le laisser travailler pour en tirer le meilleur.&nbsp;</p>
<h5>Le contr&ocirc;le</h5>
<p>M&ecirc;me si le Phantom reste vif, le contr&ocirc;le est encore plus facile qu\'avec la premi&egrave;re g&eacute;n&eacute;ration, gr&acirc;ce notamment &agrave; une meilleure rigidit&eacute; en torsion. La diff&eacute;rence sur le banc de banc de mesure n\'est pas &eacute;norme mais bien visible tout de m&ecirc;me .. et cela se sent sur l\'eau. Par ailleurs, pour avoir mesur&eacute; plusieurs mats, il semblerait que les &eacute;carts de production soient beaucoup mieux ma&icirc;tris&eacute;s que dans l\'ancienne production. A l\'&eacute;poque, nous avions mesur&eacute; de gros &eacute;carts de rigidit&eacute; d\'un mat &agrave; l\'autre. &nbsp;</p>
<h3>Bilan</h3>
<p>Le tour de force de Phantom est donc d\'avoir r&eacute;ussi &agrave; augmenter sensiblement la rigidit&eacute;, tout en r&eacute;duisant notablement l\'&eacute;paisseur du profil. Sur les mod&egrave;les de s&eacute;rie, on est ainsi pass&eacute; de 14.3 &agrave; 13.5mm d\'&eacute;paisseur maxi sur la base du mat !! Autant vous dire que le gain de glisse n\'est pas juste un hazard.&nbsp;</p>
<p>Le r&eacute;sultat de tout ceci, c\'est un foil encore plus agr&eacute;able &agrave; naviguer, sur lequel on est plus serain. Par rapport &agrave; la version pr&eacute;c&eacute;dente, j\'ai notablement am&eacute;lior&eacute; mes vitesses moyennes de navigation en s&eacute;curit&eacute; (plus de 2 knt), avec r&eacute;guli&egrave;rement des V10s au dessus des 28 knt au travers (je sais, c\'est pas &eacute;norme pour certains 😂, mais pour moi qui ne suis pas comp&eacute;titeur, c\'est d&eacute;j&agrave; pas mal .. et surtout, je ne me mets pas plein largue en limite de contr&ocirc;le pour le faire 🙃).&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/5/2022-03/IMG_7973.jpeg" alt="" width="1200" height="707" /></p>',
'test_equipment' => 'IRIS X MKII 85, et voiles HG4 et IRIS X MKII',
'test_duration' => 20,
'test_conditions' => 'Un peu de tout',
'test_place' => 'Almanarre',
'created_at' => '2022-03-20 08:54:37',
'updated_at' => '2022-03-22 09:21:54',
),
128 => 
array (
'id' => 136,
'device_id' => 164,
'user_id' => 1,
'title' => 'Unpacking modèle 2022',
'body' => '<p>Pour la premi&egrave;re fois, on re&ccedil;oit un AFS dans un carton qui ne fait pas 1m2 ... belle surprise, et rangement bien compact. Merci papa noel AFS 😀</p>
<p><img class="img-fluid" src="/storage/photos/1/2022-04/IMG_8090.jpg" alt="AFS 95 2022 Slalom sac de transport" /></p>
<p>Au d&eacute;ballage, on a une jolie panoplie avec 2 ailes et 2 stab ... de quoi naviguer &agrave; la fois dans le light avec l\'aile de 900cm2 (1m d\'envergure) , et dans le medium avec la 570 (72,5cm d\'envergure).</p>
<p>Les 2 stab de 200 et 240 viennent s\'accocier naturellement aux 2 ailes pour &eacute;quilibrer l\'ensemble</p>
<p>Le fuselage et le mat sont g&eacute;om&eacute;triquement identiques au mod&egrave;le 20212, mais &agrave; priori renforc&eacute;s pour accepter les contraintes de l\'assemblage d&eacute;montable mat / fuselage.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2022-04/IMG_8091.jpg" alt="AFS 95 2022 Slalom pi&egrave;ces" /></p>
<p>Comme depuis 2 ans chez AFS, les profils restent assez &eacute;pais (surtout en ce qui concerne le mat, avec une &eacute;paisseur max en queue de 15,8mm environ) pour conserver un maximum de rigidit&eacute;, mais les bords d\'attaque et bords de fuite sont tr&egrave;s fins pour garantir des &eacute;coulements tr&egrave;s fluides.&nbsp;</p>
<p><img class="img-fluid" src="/storage/photos/1/2022-04/IMG_8092.jpg" alt="AFS 95 2022 Slalom jonction" /></p>
<p>L\'assemblage mat / fuselage, qui repr&eacute;sente l\'une des 2 grosses &eacute;volutions de ce foil pour 2022 (avec les ailes), est tr&egrave;s bien con&ccedil;u, avec un emboitement conique tr&egrave;s propre. Aucun jeu m&ecirc;me avant serrage, et le serrage vient solidariser le tout de fa&ccedil;on ultra rigide. Vu l\'emboitement, il y a fort &agrave; parier qu\'il sera impossible de sentir la diff&eacute;rence avec le T bar fixe ... sauf lors du transport qui sera &eacute;videment bien plus compact. Super job !!!!</p>
<p><img class="img-fluid" src="/storage/photos/1/2022-04/IMG_8093.jpg" alt="AFS 95 2022 Slalom jonction zoom" /></p>
<p>Ce gros plan de l\'assemblage vous montre les pr&eacute;cisions d\'accostage une fois le fuselage serr&eacute;.</p>
<p><img class="img-fluid" src="/storage/photos/1/2022-04/IMG_8094.jpg" alt="AFS 95 2022 Slalom finition aile " /></p>
<p>Les 2 ailes que nous avons re&ccedil;ues sont 100% nouvelles (outline, dimensions, profils). Elles sont visiblement plus fines que les mod&egrave;les 2021, mais pourtant tr&egrave;s rigides. La finition reste identique avec le carbone &agrave; nu ponc&eacute;. On voit encore les petites traces de pon&ccedil;age et quelques pores, mais contrairement aux ailes vernies de certaines marques concurrentes, on s\'approche certainement plus pr&egrave;s du profil nominal.</p>
<p><img class="img-fluid" src="/storage/photos/1/2022-04/IMG_8096.jpg" alt="AFS 95 2022 Slalom concavit&eacute; bord de fuite " /></p>
<p>Les nouveaux profils proposent une &eacute;paisseur max assez recul&eacute;e et un concave assez marqu&eacute; avant le bord de fuite. Vivement la fin du Mistral baston &agrave; 40knt pour tester tout cela sur l\'eau !</p>
<p>Rendez vous dans quelques jours pour le retour sur les sensations, et sur les mesures techniques.&nbsp;</p>',
'test_equipment' => 'Na.',
'test_duration' => 1,
'test_conditions' => 'na.',
'test_place' => 'Glissattitude',
'created_at' => '2022-04-02 13:23:31',
'updated_at' => '2022-04-07 19:26:16',
),
));
        
        
    }
}