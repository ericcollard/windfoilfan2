<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'body' => '<p>Indique si le foil est fourni avec une housse. Voici la signification des valeurs</p>
<ul>
<li>-1 : pas de housse sp&eacute;cifique disponible</li>
<li>0 : housse comprise en standard avec le foil</li>
<li>&gt; 0 : tarif (en euros) de la housse disponible en option</li>
</ul>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr3',
                'group' => 'technical_group',
                'id' => '3',
                'name' => 'Housse',
                'slug' => 'cover',
                'unit' => '€',
            ),
            1 => 
            array (
                'body' => '<p>Longueur du mat, mesur&eacute;e par nos soins entre la base de la car&egrave;ne, et le haut du fuselage.</p>
<p>Voici notre fa&ccedil;on de mesurer un mat de foil:</p>
<p><img class="img-fluid" src="/storage/photos/5/2020-04/taille_mat.jpg" alt="Taille des mats de foil" /></p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr4',
                'group' => 'technical_group',
                'id' => '4',
                'name' => 'Mat',
                'slug' => 'mast',
                'unit' => 'cm',
            ),
            2 => 
            array (
            'body' => '<p>Poids du foil complet (visserie inclue) mesur&eacute;e par nos soins, sans les housses.</p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr5',
                'group' => 'technical_group',
                'id' => '5',
                'name' => 'Poids',
                'slug' => 'weight',
                'unit' => 'Kg',
            ),
            3 => 
            array (
                'body' => '<p>Epaisseur maximale du mat du foil, mesur&eacute;e juste en dessous du boitier d\'aileron.&nbsp;</p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr6',
                'group' => 'technical_group',
                'id' => '6',
                'name' => 'Epaisseur base',
                'slug' => 'thickt',
                'unit' => 'mm',
            ),
            4 => 
            array (
                'body' => '<p>Epaisseur du mat de foil, mesur&eacute;e en bas du foil, juste avant le cong&eacute; de liaison avec le fuselage.&nbsp;</p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr7',
                'group' => 'technical_group',
                'id' => '7',
                'name' => 'Epaisseur queue',
                'slug' => 'thickb',
                'unit' => 'mm',
            ),
            5 => 
            array (
                'body' => '<h3>Glisse</h3>
<p>Ce crit&egrave;re est purement subjectif. Il porte sur la <strong>sensation de glisse ressentie</strong>, sans lien direct avec la vitesse r&eacute;elle atteinte.</p>
<div class="row">
<div class="col-lg-6">
<p>La plupart du temps, une sensation de glisse importante est la cons&eacute;quence de profils tr&egrave;s fins, donc potentiellement plus souples. On immagine imm&eacute;diatement que c\'est une affaire de compromis, car une souplesse excessive a une influence n&eacute;gative sur le contr&ocirc;le et la stabilit&eacute;. Une structure souple pose moins de probl&egrave;me dans une utilisation light wind, mais peut vite devenir d&eacute;sagrable dans un vent plus soutenu.</p>
</div>
<div class="col-lg-6">
<p>Les foils offrant beaucoup de glisse procurent souvent des acc&eacute;l&eacute;rations assez franches lors des changements de cap. Ils sont donc plus pointus &agrave; ma&icirc;triser et donc moins adapt&eacute;s au d&eacute;butants ou aux pratiquants peu techniques. Ces dernier privil&eacute;gieront souvent des mod&egrave;les proposant une vitesse plus lin&eacute;aire.</p>
</div>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de comparaison des produits entre eux crit&egrave;re par crit&egrave;re. Il ne s\'agit ni d\'un jugement absolu, ni que quelque chose d\'immuable. A chaque nouveau test, nos r&eacute;f&eacute;rences sont susceptibles de changer, et nous r&eacute;-adaptons notre classement r&eacute;guli&egrave;rement.</p>
<hr />
<p class="mb-0">Il est &eacute;galement important de consid&eacute;rer les autres param&egrave;tres car chaque produit est un tout.</p>
</div>',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => '1',
                'decimals' => '1',
                'field' => 'attr8',
                'group' => 'usage_group',
                'id' => '8',
                'name' => 'Glisse',
                'slug' => 'glide',
                'unit' => NULL,
            ),
            6 => 
            array (
                'body' => '<h3>D&eacute;collage</h3>
<p>Ce crit&egrave;re porte sur le potentiel de d&eacute;collage dans le petit temps (vent faible) ou de tenir en l\'air dans les molles avec l\'aile la plus porteuse de la gamme compatible avec le foil consid&eacute;r&eacute;. Il d&eacute;pend essentiellement de 2 &eacute;l&eacute;ments antagonistes : la train&eacute;e du foil et la portance de l\'aile.</p>
<div class="row">
<div class="col-lg-6">
<p><strong>Attention</strong> : Contrairement aux id&eacute;es re&ccedil;ues, ce n\'est pas le foil qui aura la plus grande aile (ou la plus de surface portante) qui d&eacute;collera le plus vite, comme nous l\'avons v&eacute;rifi&eacute; des 10aines de fois. Il faut en effet bien dissocier 2 notions distinctes : la vitesse de d&eacute;collage (la vitesse de la planche au moment o&ugrave; elle d&eacute;cole), et le vent n&eacute;cessaire pour d&eacute;coller. La plupart des pratiquants cherchent &agrave; voler dans peu de vent, mais pas forc&eacute;ment &agrave; voler &agrave; basse vitesse !!!</p>
<ul>
<li>Avec les tr&egrave;s grosses ailes (grosse surface, et souvent &eacute;paisseur importante), le d&eacute;collage intervient alors que la planche &eacute;volue &agrave; tr&egrave;s basse vitesse. Par contre, compte tenu de la train&eacute;e de ces ailes, il faut une puissance assez importante dans la voile pour amener le flotteur &agrave; cette vitesse.</li>
<li>Au contraire avec les ailes plus fines, le d&eacute;collage n&eacute;cessitera une vitesse de d&eacute;placement plus importante, mais la faible train&eacute;e du foil permet au flotteur d\'acc&eacute;l&eacute;rer plus facilement jusqu\'&agrave; cette vitesse.</li>
</ul>
</div>
<div class="col-lg-6">
<p><strong>On l\'aura compris, d&eacute;coller avec peu de vent suppose avant tout un ratio glisse / portance optimal.</strong></p>
<p>Il y a par ailleurs 2 options pour naviguer avec peu de vent :</p>
<ul>
<li>Utiliser un mat&eacute;riel l&eacute;ger, avec peu de train&eacute;e, et un gr&eacute;ement l&eacute;ger et tr&egrave;s dynamique</li>
<li>Utiliser de tr&egrave;s grandes voiles, ainsi qu\'une planche et un foil (rigide et puissant) capable de les supporter.</li>
</ul>
<p><strong>Attention</strong>, la deuxi&egrave;me option suppose d\'avoir la condition physique, et la technique pour pomper avec une &eacute;norme voile ... et ce n\'est pas donn&eacute; &agrave; tout le monde !</p>
</div>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de comparaison des produits entre eux crit&egrave;re par crit&egrave;re. Il ne s\'agit ni d\'un jugement absolu, ni que quelque chose d\'immuable. A chaque nouveau test, nos r&eacute;f&eacute;rences sont susceptibles de changer, et nous r&eacute;-adaptons notre classement r&eacute;guli&egrave;rement.</p>
<hr>
<p class="mb-0">Il est &eacute;galement important de consid&eacute;rer les autres param&egrave;tres car chaque produit est un tout.</p>
</div>',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => '2',
                'decimals' => '1',
                'field' => 'attr9',
                'group' => 'usage_group',
                'id' => '9',
                'name' => 'Décollage & Minis',
                'slug' => 'lift',
                'unit' => NULL,
            ),
            7 => 
            array (
            'body' => '<p>Ce crit&egrave;re porte sur la capacit&eacute; du foil &agrave; &ecirc;tre exploit&eacute; avec des grandes voiles dans le tr&egrave;s petit temps (on parle de voiles sup&eacute;rieures &agrave; 8m2).</p>
<p>Un chiffre &eacute;lev&eacute; correspond &agrave; un foil &agrave; l\'aise avec des grandes voiles (puissance), un chiffre faible correspond &agrave; un foil plus &agrave; l\'aise avec des petites voiles (finesse).&nbsp;</p>
<p>Cet &eacute;l&eacute;ment est tr&egrave;s important dans le choix de votre foil sous peine de grosses d&eacute;ceptions, ou de comportement complexe &agrave; g&eacute;rer (navigation inconfortable, manque d\'&eacute;quilibre, r&eacute;glage difficile).</p>',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr10',
                'group' => 'usage_group',
                'id' => '10',
                'name' => 'Grandes voiles',
                'slug' => 'bigsail',
                'unit' => NULL,
            ),
            8 => 
            array (
                'body' => '<h3>Stabilit&eacute; lat&eacute;rale</h3>
<p>Ce crit&egrave;re subjectif porte sur la stabilit&eacute; lat&eacute;rale ressentie.</p>
<div class="row">
<div class="col-lg-6">
<p><img class="img-fluid" style="display: block; margin-left: auto; margin-right: auto;" src="/storage/photos/5/attributes/2094ad651bf69118009444b9a71bd639.png" alt="stabilite laterale foil" /></p>
</div>
<div class="col-lg-6">
<p>Imaginons une bille qui se prom&egrave;ne sur un profil qui repr&eacute;sente l\'angle de g&icirc;te. Les diff&eacute;rents cas pr&eacute;sent&eacute;s illustre le type de stabilit&eacute; lat&eacute;rale que l\'on retrouve sur les diff&eacute;rents foil.</p>
<p>Si je prends l\'<strong>exemple du haut</strong>, on voit que la bille \'veut\' revenir naturellement au centre m&ecirc;me si on l\'&eacute;carte fortement de sa position neutre. Il faut aller assez loin pour qu\'elle ne parte toute seule. C\'est un &eacute;quilibre tr&egrave;s stable jusqu\'&agrave; un angle de g&icirc;te important. Dans le cas du foil, on aura un foil qui se remet tout seul &agrave; plat m&ecirc;me quand on l\'&eacute;carte de sa position d\'&eacute;quilibre. Dans certains cas, on peut aller jusqu\'&agrave; un foil que l\'on n\'arrive pas &agrave; mettre &agrave; la contre g&icirc;te.</p>
<p>Au contraire, dans l\'<strong>exemple du bas</strong>, la bille ne restera jamais en &eacute;quilibre.&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Dans le cas du foil, on aura un foil qui est tr&egrave;s difficile &agrave; g&eacute;rer car il demande des ajustements actif en permanence. Cela peut &eacute;ventuellement avoir un int&eacute;r&ecirc;t dans une utilisation freestyle, mais n&eacute;cessite une grosse dext&eacute;rit&eacute;.</span></p>
<p>Pour illustrer ce param&egrave;tre tr&egrave;s important, on trouvera un <span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">&eacute;quilibre lat&eacute;ral neutre &agrave; stable </span><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">sur des foils comme les Loke race, Starboard carbone, Taaroa Noe ou autre F4. Ce sont des foils faciles &agrave; mettre &agrave; la contre-g&icirc;te, et &agrave; contr&ocirc;ler ainsi ... m&ecirc;me sans utiliser dse flotteurs larges et puissants.</span></p>
<p><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Des exemples de foils tr&egrave;s stables : celui des </span><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">AFS 2017-2019 avec ailes F700 et F800 ou du Fanatic Flow 900. On peut m&ecirc;me</span><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">&nbsp;sentir une difficult&eacute; &agrave; mettre le foil &agrave; la contre g&icirc;te tant il sont stable. Ce type de foil est particuli&egrave;rement agr&eacute;able avec les flotteurs larges et puissants, ou pour une navigation en mode freeride, car il demande tr&egrave;s peu d\'effort de correction.</span></p>
<p><span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Sur des foils comme le Vini par exemple, l\'&eacute;quilibre est assez stable au centre mais devient instable lorsque l\'on s\'&eacute;carte du centre. Il faut donc navigvuer sans trop s\'&eacute;carter de l\'horizontale.</span></p>
<p>Des foils comme le XtremFoil 2017, l\'aeromod, le manta 2017,&nbsp; le Fanatic Flow H9 pr&eacute;sentent une instabilit&eacute; marqu&eacute;e au centre. Certains, comme les IRIS F, Loke Lk1, GA Mach1&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">pr&eacute;sentent une tr&egrave;s l&eacute;g&egrave;re instabilit&eacute; au centre : ils sont d\'autant plus agr&eacute;ables qu\'on les cale au pr&egrave;s &agrave; la contre g&icirc;te.</span></p>
<p>Enfin, les premi&egrave;res g&eacute;n&eacute;rations de foil correspondait souvent &agrave; la situation du foil instable. Ce type de comportement a tendance &agrave; dispara&icirc;tre sur les mod&egrave;les r&eacute;cents.</p>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de comparaison des produits entre eux crit&egrave;re par crit&egrave;re. Il ne s\'agit ni d\'un jugement absolu, ni que quelque chose d\'immuable. A chaque nouveau test, nos r&eacute;f&eacute;rences sont susceptibles de changer, et nous r&eacute;-adaptons notre classement r&eacute;guli&egrave;rement.</p>
<hr />
<p class="mb-0">Il est &eacute;galement important de consid&eacute;rer les autres param&egrave;tres car chaque produit est un tout.</p>
</div>
</div>',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => '3',
                'decimals' => '1',
                'field' => 'attr11',
                'group' => 'usage_group',
                'id' => '11',
                'name' => 'Stabilité latérale',
                'slug' => 'lateral',
                'unit' => NULL,
            ),
            9 => 
            array (
                'body' => '<h3>Stabilit&eacute; longitudinale</h3>
<p>Ce crit&egrave;re repr&eacute;sente la stabilit&eacute; longitudinale ressentie. On s\'int&eacute;resse donc ici au mouvement du foil dans l\'axe longitudinal. Pour le dire autrement, on &eacute;value si le foil a tendance &agrave; faire le dauphin.</p>
<div class="row">
<div class="col-lg-6">
<p>Un foil insuffisament stable sur cet axe va monter et descendre sans arr&ecirc;t. On aura ainsi beaucoup de difficult&eacute; &agrave; maintenir une altitude constante.</p>
<p>Au contraire, une forte stabilit&eacute; longitudinale semble faciliter les d&eacute;buts, mais peut devenir perturbant car il est alors difficile de corriger ses erreurs : on a l\'impression que le foil est difficile &agrave; "ratrapper" lorsqu\'il est parti dans une tendance &agrave; monter ou a descendre. De m&ecirc;me, un foil tr&egrave;s stable en longitudinal peut &ecirc;tre complexe &agrave; g&eacute;rer dans la houle.</p>
</div>
<div class="col-lg-6">
<p>Comme toujours, c\'est souvent un comportement interm&eacute;diaire qui est le plus agr&eacute;able &agrave; g&eacute;rer. L\'un des param&egrave;tres influants de fa&ccedil;on importante sur ce comportement est la longueur du fuselage. Un fuselage long (&agrave; condition qu\'il soit rigide) en tendance &agrave; proposer une forte stabilit&eacute; longitudinale. Au contraire, un fuselage court offrira souvent une grande r&eacute;activit&eacute; et plus de glisse.</p>
</div>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de comparaison des produits entre eux crit&egrave;re par crit&egrave;re. Il ne s\'agit ni d\'un jugement absolu, ni que quelque chose d\'immuable. A chaque nouveau test, nos r&eacute;f&eacute;rences sont susceptibles de changer, et nous r&eacute;-adaptons notre classement r&eacute;guli&egrave;rement.</p>
<hr />
<p class="mb-0">Il est &eacute;galement important de consid&eacute;rer les autres param&egrave;tres car chaque produit est un tout.</p>
</div>',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => '4',
                'decimals' => '1',
                'field' => 'attr12',
                'group' => 'usage_group',
                'id' => '12',
                'name' => 'Stabilité longitudinale',
                'slug' => 'longitudinal',
                'unit' => NULL,
            ),
            10 => 
            array (
                'body' => '<h3>Contr&ocirc;le</h3>
<p>Ce crit&egrave;re repr&eacute;sente la facilit&eacute; de contr&ocirc;le de l\'assiette du foil en navigation. Un gros contr&ocirc;le est souvent synonyme d\'un comportement assez doux ... et en g&eacute;n&eacute;ral antagoniste avec la nervosit&eacute; (int&eacute;ressante dans le tr&egrave;s petit temps, ou dans une utilisation freestyle).&nbsp;</p>
<div class="row">
<div class="col-lg-6">
<p>Dans la notion de contr&ocirc;le, la stabilit&eacute; en lacet et en lat&eacute;rale joue un r&ocirc;le important.&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Un foil tr&egrave;s stable en lacet donne l\'impression que tout est bien dans l\'axe. C\'est une sensation tr&egrave;s agr&eacute;able, gage d\'une glisse tr&egrave;s pure, et d\'un comportement rassurant.</span></p>
</div>
<div class="col-lg-6">
<p>Tous les essais et mesures semblent indiquer que le contr&ocirc;le est tr&egrave;s li&eacute; &agrave; la rigidit&eacute; structurelle de l\'ensemble (en particulier la rigidit&eacute; en torsion du mat), et &agrave; gros facteur d\'amortissement (au contraire d\'un foil nerveux).</p>
</div>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de comparaison des produits entre eux crit&egrave;re par crit&egrave;re. Il ne s\'agit ni d\'un jugement absolu, ni que quelque chose d\'immuable. A chaque nouveau test, nos r&eacute;f&eacute;rences sont susceptibles de changer, et nous r&eacute;-adaptons notre classement r&eacute;guli&egrave;rement.</p>
<hr />
<p class="mb-0">Il est &eacute;galement important de consid&eacute;rer les autres param&egrave;tres car chaque produit est un tout.</p>
</div>',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => '5',
                'decimals' => '1',
                'field' => 'attr13',
                'group' => 'usage_group',
                'id' => '13',
                'name' => 'Contrôle',
                'slug' => 'control',
                'unit' => NULL,
            ),
            11 => 
            array (
                'body' => 'Cette colonne représente la facilité d\'utilisation dans le vent léger.',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr14',
                'group' => 'usage_group',
                'id' => '14',
                'name' => 'Facilité dans le vent faible',
                'slug' => 'lightwind',
                'unit' => '',
            ),
            12 => 
            array (
                'body' => 'Cette colonne représente la facilité d\'utilisation dans le vent fort.',
                'category_id' => '1',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr15',
                'group' => 'usage_group',
                'id' => '15',
                'name' => 'Facilité dans le vent fort',
                'slug' => 'highwind',
                'unit' => '',
            ),
            13 => 
            array (
                'body' => '<p>Pour une question de confidentialité industrielle, la visualisation des données de ce shéma est réservée aux administrateurs</p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr16',
                'group' => 'structural_group',
                'id' => '16',
                'name' => 'Déflexion latérale à 70',
                'slug' => 'def70f',
                'unit' => 'mm',
            ),
            14 => 
            array (
                'body' => '<p>Pour une question de confidentialité industrielle, la visualisation des données de ce shéma est réservée aux administrateurs</p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr17',
                'group' => 'structural_group',
                'id' => '17',
                'name' => 'Déflexion latérale en bout',
                'slug' => 'defendf',
                'unit' => 'mm',
            ),
            15 => 
            array (
                'body' => '<p>Pour une question de confidentialité industrielle, la visualisation des données de ce shéma est réservée aux administrateurs</p>',
                'category_id' => '1',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr18',
                'group' => 'structural_group',
                'id' => '18',
                'name' => 'Déflexion en torsion',
                'slug' => 'deftor',
                'unit' => 'mm',
            ),
            16 => 
            array (
                'body' => '<h3>La rigidit&eacute; en flexion</h3>
<div class="row">
<div class="col-lg-4">
<p><img class="img-fluid" src="/storage/photos/5/attributes/poutres flexion.png" alt=""></p>
</div>
<div class="col-lg-8">
<p>La rigidit&eacute; en flexion est &eacute;valu&eacute;e &agrave; partir des mesures de flexion du mat sur un banc. Le mat est soumis &agrave; un charge de 10kg positionn&eacute;e &agrave; 70cm de l\'encastrement.</p>
<p>La th&eacute;orie des poutres, utilis&eacute;e dans l\'hypoth&egrave;se des petites d&eacute;formations, nous permet d\'en d&eacute;duire un coefficient de rigidit&eacute; en flexion EIx &agrave; partir de la fl&ecirc;che mesur&eacute;e. Cette valeur ne nous int&eacute;resse pas dans sa valeur absolue, mais permet de comparer de fa&ccedil;on assez pertinante les diff&eacute;rents foils entre eux.&nbsp;La valeur de 0 correspond au foil le plus souple parmi&nbsp;les mod&egrave;les mesur&eacute;s. La valeur de 100 correspond au foil le plus raide parmi les mod&egrave;les mesur&eacute;s par nos soins.</p>
<p>Pour une question de confidentialit&eacute; industrielle, la visualisation des donn&eacute;es de ce sh&eacute;ma est r&eacute;serv&eacute;e aux administrateurs, et aux marques.</p>
<p>&nbsp;</p>
<h4>Que signifie cette mesure ?</h4>
<p>Avec l\'experience, nous avons constat&eacute; que les caract&eacute;ristiques m&eacute;caniques du mat &eacute;taient souvent finement li&eacute;es au comportement dynamique du foil. Sous l\'effet du clapot, des rafales et des autres diverses perturbations, le foil se d&eacute;forme, et le pilote ressent un certain niveau d\'&eacute;lasticit&eacute; qui peut potentiellement compromettre le contr&ocirc;le du flotteur en vol.&nbsp;</p>
<p>M&ecirc;me si il n\'y a pas de lien direct &eacute;tabli (des exceptions existent), un mat tr&egrave;s souple en flexion a souvent une influence n&eacute;gative sur la stabilit&eacute; lat&eacute;rale du foil. Compte tenu des exceptions existantes, cette mesure ne suffit pas &agrave; caract&eacute;riser un foil. Cependant, elle peut expliquer des comportements ressentis.</p>
</div>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de mesures objectives. Il ne s\'agit pas d\'un jugement, et doit rester un indicateur pouvant expliquer certains comportements.</p>
<hr>
<p class="mb-0">Il est important de consid&eacute;rer tous les param&egrave;tres pour &eacute;valuer un produit car le r&eacute;sultat final est un tout.</p>
</div>',
                'category_id' => '1',
                'chart' => 'pourcentage',
                'chart_display' => '6',
                'decimals' => '2',
                'field' => 'attr19',
                'group' => 'structural_result_group',
                'id' => '19',
            'name' => 'Coefficient de rigidité en flexion (EIx)',
                'slug' => 'flex_module',
                'unit' => 'N.m2',
            ),
            17 => 
            array (
                'body' => '<h3>Rigidit&eacute; en torsion</h3>
<div class="row">
<div class="col-lg-6">
<p><img class="img-fluid" src="/storage/photos/5/attributes/poutres torsion.png" alt="Rigidit&eacute; en torsion foil"></p>
</div>
<div class="col-lg-6">
<p>La rigidit&eacute; en torsion est &eacute;valu&eacute;e &agrave; partir des mesures du mat sur un banc. Le mat est fix&eacute; &agrave; sa base et pos&eacute; en son extr&ecirc;mit&eacute; sur un couteau afin de g&eacute;n&eacute;rer de la torsion pure. Le fuselage est soumis &agrave; un charge de 6,25kg positionn&eacute;e &agrave; 35cm de l\'axe de torsion. La mesure est r&eacute;alis&eacute;e &agrave; 25cm de l\'axe de torsion.&nbsp;</p>
<p>La th&eacute;orie des poutres, utilis&eacute;e dans l\'hypoth&egrave;se des petites d&eacute;formations, nous permet d\'en d&eacute;duire un coefficient de rigidit&eacute; en torsion GIg &agrave; partir de la d&eacute;formation mesur&eacute;e. Cette valeur ne nous int&eacute;resse pas dans sa valeur absolue, mais permet de comparer de fa&ccedil;on assez pertinante les diff&eacute;rents foils entre eux. La valeur de 0 correspond au foil le plus souple parmi&nbsp;les mod&egrave;les mesur&eacute;s. La valeur de 100 correspond au foil le plus raide parmi les mod&egrave;les mesur&eacute;s.</p>
<p><img class="img-fluid" src="/storage/photos/5/attributes/banc-mesure-structure-foil.jpg" alt="Banc de mesure"></p>
<p>Pour une question de confidentialit&eacute; industrielle, la visualisation des donn&eacute;es de ce sh&eacute;ma est r&eacute;serv&eacute;e aux administrateurs et aux marques.</p>
<h4>Que signifie cette mesure ?</h4>
<p>Avec l\'experience, nous avons constat&eacute; que les caract&eacute;ristiques m&eacute;caniques du mat &eacute;taient souvent finement li&eacute;es au comportement dynamique du foil. Sous l\'effet du clapot, des rafales et des autres diverses perturbations, le foil se d&eacute;forme, et le pilote ressent un certain niveau d\'&eacute;lasticit&eacute; qui peut potentiellement compromettre le contr&ocirc;le du flotteur en vol.&nbsp;</p>
<p>M&ecirc;me si il n\'y a pas de lien direct &eacute;tabli (des exceptions existent), un mat tr&egrave;s souple en torsion a souvent une influence n&eacute;gative sur la stabilit&eacute; en lacet du foil. Compte tenu des exceptions existantes, cette mesure ne suffit pas &agrave; caract&eacute;riser un foil. Cependant, elle peut expliquer des comportements ressentis.</p>
</div>
</div>
<div class="alert alert-warning mt-4" role="alert">
<h4 class="alert-heading">Important !</h4>
<p>Ce diagramme est &eacute;tabli sur la base de mesures objectives. Il ne s\'agit pas d\'un jugement, et doit rester un indicateur pouvant expliquer certains comportements.</p>
<hr>
<p class="mb-0">Il est important de consid&eacute;rer tous les param&egrave;tres pour &eacute;valuer un produit car le r&eacute;sultat final est un tout.</p>
</div>',
                'category_id' => '1',
                'chart' => 'pourcentage',
                'chart_display' => '7',
                'decimals' => '2',
                'field' => 'attr20',
                'group' => 'structural_result_group',
                'id' => '20',
            'name' => 'Coefficient de rigidité en torsion (GIg)',
                'slug' => 'tors_module',
                'unit' => 'N.m2/Rad',
            ),
            18 => 
            array (
                'body' => '<p>La rigidit&eacute; en flexion est &eacute;valu&eacute;e &agrave; partir des mesures de flexion du mat sur un banc. Le mat est soumis &agrave; un charge de 10kg positionn&eacute;e &agrave; 70cm de l\'encastrement.</p>
<p>La th&eacute;orie des poutres, utilis&eacute;e dans l\'hypoth&egrave;se des petites d&eacute;formations, nous permet d\'en d&eacute;duire un coefficient de rigidit&eacute; en flexion EIx &agrave; partir de la fl&ecirc;che mesur&eacute;e, puis un module d\'Young E.&nbsp;</p>
<p>Cette valeur donne une indication sur la ratio Rigidit&eacute; / Epaisseur du profil, que l\'on peut rapprocher du ratio&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;">Rigidit&eacute; / Train&eacute;e. La valeur de 0 correspond au foil le plus souple parmi nos mesures.&nbsp;</span>La valeur de 10 correspond au foil le plus raide parmi les mod&egrave;les mesur&eacute;s.</p>
<p>Pour une question de confidentialité industrielle, la visualisation des données de ce shéma est réservée aux administrateurs</p>
<p><img class="img-fluid" src="/storage/photos/5/attributes/poutres flexion.png" alt="" /></p>',
                'category_id' => '1',
                'chart' => 'pourcentage',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr21',
                'group' => 'structural_result_group',
                'id' => '21',
            'name' => 'Module d\'Young (E)',
                'slug' => 'flex_thickness_coef',
                'unit' => 'Gpa',
            ),
            19 => 
            array (
            'body' => '<p>Largeur maximale du flotteur (en cm)</p>',
                'category_id' => '2',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr3',
                'group' => 'technical_group',
                'id' => '24',
                'name' => 'Largeur',
                'slug' => 'with',
                'unit' => 'cm',
            ),
            20 => 
            array (
                'body' => 'Longueur hors tout du flotteur',
                'category_id' => '2',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '2',
                'field' => 'attr4',
                'group' => 'technical_group',
                'id' => '25',
                'name' => 'Longueur',
                'slug' => 'length',
                'unit' => 'cm',
            ),
            21 => 
            array (
                'body' => 'Volume du flotteur',
                'category_id' => '2',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '0',
                'field' => 'attr5',
                'group' => 'technical_group',
                'id' => '26',
                'name' => 'Volume',
                'slug' => 'volume',
                'unit' => 'L',
            ),
            22 => 
            array (
                'body' => '<p>Largeur du flotteur &agrave; 30cm de l\'arri&egrave;re&nbsp;</p>',
                'category_id' => '2',
                'chart' => 'valeur',
                'chart_display' => '1',
                'decimals' => '2',
                'field' => 'attr6',
                'group' => 'technical_group',
                'id' => '27',
                'name' => 'OFO',
                'slug' => 'ofo',
                'unit' => 'cm',
            ),
            23 => 
            array (
            'body' => '<p>Poids du flotteur complet (foostraps compris) mesur&eacute; par nos soins.</p>',
                'category_id' => '2',
                'chart' => 'valeur',
                'chart_display' => '2',
                'decimals' => '2',
                'field' => 'attr7',
                'group' => 'technical_group',
                'id' => '28',
                'name' => 'Poids',
                'slug' => 'weight-f',
                'unit' => 'kg',
            ),
            24 => 
            array (
            'body' => '<p>Sensation de glisse (ou du moins de moindre ralentissement) ressentie lors des touchettes sur les rails, c\'est &agrave; dire lorque le rail vient toucher l\'eau &agrave; la contre g&icirc;te.</p>',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => '3',
                'decimals' => '1',
                'field' => 'attr8',
                'group' => 'usage_group',
                'id' => '29',
                'name' => 'Touchettes rail',
                'slug' => 'touch-side',
                'unit' => NULL,
            ),
            25 => 
            array (
            'body' => '<p>Sensation de glisse (ou du moins de moindre ralentissement) ressentie lors des touchettes sur l\'arri&egrave;re du flotteur, c\'est &agrave; dire lorque le cul de la planche vient toucher l\'eau.</p>',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr9',
                'group' => 'usage_group',
                'id' => '30',
                'name' => 'Touchettes tail',
                'slug' => 'touch-tail',
                'unit' => NULL,
            ),
            26 => 
            array (
            'body' => '<p>Sensation de glisse (ou du moins de moindre ralentissement) ressentie lors des touchettes sur l\'avant, c\'est &agrave; dire lorque l\'avant du flotteur vient toucher l\'eau (en g&eacute;n&eacute;ral sur un clapot, ou suite &agrave; une erreur de pilotage).</p>',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => '5',
                'decimals' => '1',
                'field' => 'attr10',
                'group' => 'usage_group',
                'id' => '31',
                'name' => 'Touchettes avant',
                'slug' => 'touch-front',
                'unit' => NULL,
            ),
            27 => 
            array (
                'body' => '<p>Ce crit&egrave;re repr&eacute;sente la glisse naturelle du flotteur avant d&eacute;collage, c\'est &agrave; dire sa capacit&eacute; &agrave; acc&eacute;l&eacute;rer facilement avant que le foil ne prenne le relais.</p>
<p>Plus il est &eacute;lev&eacute;, moins il sera n&eacute;cessaire d\'utiliser des grandes voiles pour le faire acc&eacute;l&eacute;rer avant le d&eacute;collage.</p>
<p>En g&eacute;n&eacute;ral, une glisse &eacute;lev&eacute;e permet d\'exploiter le flotteur avec des petites surfaces de voile (sous r&eacute;serve que le volume soit coh&eacute;rent avec le gabarit du pratiquant). Cela n&eacute;cessite souvent des flotteurs assez &eacute;troits, ou tout au moins assez pinc&eacute;s sur l\'arri&egrave;re. Le Scoop (longeur de plat, courbes), et la position du boitier ont &eacute;galement de l\'influance sur ce param&egrave;tre.</p>
<p>Les planches larges et puissantes (type race et freerace) ont en g&eacute;n&eacute;ral une note plus basse sur ce crit&egrave;re que les planches freeride. Elles n&eacute;cessitent ainsi plus de puissance v&eacute;lique, et plus de technique pour d&eacute;coller. En contre partie, elles offres souvent un contr&ocirc;le et une acc&eacute;l&eacute;ration sup&eacute;rieure.</p>',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => '6',
                'decimals' => '1',
                'field' => 'attr11',
                'group' => 'usage_group',
                'id' => '32',
                'name' => 'Glisse',
                'slug' => 'glide-f',
                'unit' => NULL,
            ),
            28 => 
            array (
                'body' => 'Ce critère représente la puissance du flotteur. Plus il est élevé, plus le flotteur va accepter des foils puissants et générer de l\'acclération à la contre gîte.
Plus il est faible, plus le flotteur sera adapté aux foils de petite taille (de mat), et maniable.',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => '7',
                'decimals' => '1',
                'field' => 'attr12',
                'group' => 'usage_group',
                'id' => '33',
                'name' => 'Puissance',
                'slug' => 'power',
                'unit' => '',
            ),
            29 => 
            array (
                'body' => '<p>Ce crit&egrave;re repr&eacute;sente l\'inertie ressentie du flotteur.</p>
<p>Plus il est &eacute;lev&eacute;, plus le flotteur va &ecirc;tre bloqu&eacute;, avec une r&eacute;ponse lente au sollicitations. Plus il est faible, plus le flotteur sera maniable et offrira une r&eacute;ponse rapide aux sollicitations.</p>
<p>Les pratiquants aguerris vont en g&eacute;n&eacute;ral pr&eacute;f&eacute;rer des flotteurs ayant peu d\'inertie car ils permettent des r&eacute;actions donc des corrections d\'assi&egrave;te plus rapides. Par contre, cela n&eacute;cessite d\'&ecirc;tre plus pr&eacute;cis et actif dans le pilotage.&nbsp;</p>
<p>Au contraire, les pratiquants d&eacute;butants ou de plus faible niveau seront plus &agrave; l\'aise avec des flotteurs ayant de l\'inertie, car les r&eacute;actions seront plus sages et mesur&eacute;es.&nbsp;</p>',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr13',
                'group' => 'usage_group',
                'id' => '34',
                'name' => 'Inertie',
                'slug' => 'inertia',
                'unit' => NULL,
            ),
            30 => 
            array (
                'body' => '<p>Ce crit&egrave;re repr&eacute;sente la facilit&eacute; &agrave; contr&ocirc;ler le flotteurs dans le vent soutnue ou les conditions difficiles .</p>',
                'category_id' => '2',
                'chart' => 'note',
                'chart_display' => '8',
                'decimals' => '1',
                'field' => 'attr14',
                'group' => 'usage_group',
                'id' => '35',
                'name' => 'Contrôle',
                'slug' => 'control-f',
                'unit' => NULL,
            ),
            31 => 
            array (
                'body' => 'Surface de la voile',
                'category_id' => '3',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr3',
                'group' => 'technical_group',
                'id' => '38',
                'name' => 'Surface',
                'slug' => 'area',
                'unit' => 'm2',
            ),
            32 => 
            array (
                'body' => '',
                'category_id' => '3',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '0',
                'field' => 'attr4',
                'group' => 'technical_group',
                'id' => '39',
                'name' => 'Guindant',
                'slug' => 'height',
                'unit' => 'cm',
            ),
            33 => 
            array (
                'body' => '',
                'category_id' => '3',
                'chart' => 'valeur',
                'chart_display' => NULL,
                'decimals' => '0',
                'field' => 'attr5',
                'group' => 'technical_group',
                'id' => '40',
                'name' => 'Whisbone',
                'slug' => 'boom',
                'unit' => 'cm',
            ),
            34 => 
            array (
                'body' => '',
                'category_id' => '3',
                'chart' => 'valeur',
                'chart_display' => '1',
                'decimals' => '2',
                'field' => 'attr6',
                'group' => 'technical_group',
                'id' => '41',
                'name' => 'Poids',
                'slug' => 'weight-s',
                'unit' => 'kg',
            ),
            35 => 
            array (
                'body' => '<p>On juge ici si la voile a beaucoup de main arri&egrave;re ou pas. On entend pas "Main Arri&egrave;re" la pession de la voile &agrave; larri&egrave;re du wishbone. La tendance, en foil, est de proposer des voiles avec peu de pression &agrave; l\'arri&egrave;re afin de ne pas poussez sur le foil, et de permettre une plus grande finesse de navigation. Attention : ceci peut &ecirc;tre perturbant pour ceux qui ont l\'habitude de naviguer en puissance. La technique de pumping est en particulier plus subtile.&nbsp;</p>
<p>Un chiffre plus &eacute;lev&eacute; correspond &agrave; peu de main arri&egrave;re, un chiffre bas correspond &agrave; beaucoup de main arri&egrave;re.</p>',
                'category_id' => '3',
                'chart' => 'note',
                'chart_display' => '2',
                'decimals' => '1',
                'field' => 'attr7',
                'group' => 'usage_group',
                'id' => '42',
                'name' => 'Main arrière',
                'slug' => 'back-hand',
                'unit' => NULL,
            ),
            36 => 
            array (
                'body' => '',
                'category_id' => '3',
                'chart' => 'note',
                'chart_display' => '4',
                'decimals' => '1',
                'field' => 'attr8',
                'group' => 'usage_group',
                'id' => '43',
                'name' => 'Stabilisation foil',
                'slug' => 'stability',
                'unit' => '',
            ),
            37 => 
            array (
                'body' => '',
                'category_id' => '3',
                'chart' => 'note',
                'chart_display' => '5',
                'decimals' => '1',
                'field' => 'attr9',
                'group' => 'usage_group',
                'id' => '44',
                'name' => 'Près',
                'slug' => 'upwind',
                'unit' => '',
            ),
            38 => 
            array (
                'body' => 'Cette colonne représente la facilité d\'utilisation dans le vent léger.',
                'category_id' => '3',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr10',
                'group' => 'usage_group',
                'id' => '45',
                'name' => 'Facilité dans le vent faible',
                'slug' => 'lightwind-s',
                'unit' => '',
            ),
            39 => 
            array (
                'body' => 'Cette colonne représente la facilité d\'utilisation dans le vent fort.',
                'category_id' => '3',
                'chart' => 'note',
                'chart_display' => NULL,
                'decimals' => '1',
                'field' => 'attr11',
                'group' => 'usage_group',
                'id' => '46',
                'name' => 'Facilité dans le vent fort',
                'slug' => 'highwind-s',
                'unit' => '',
            ),
            40 => 
            array (
                'body' => 'Ce critère représente la légèreté subjective ressentie en navigation',
                'category_id' => '3',
                'chart' => 'note',
                'chart_display' => '6',
                'decimals' => '1',
                'field' => 'attr12',
                'group' => 'usage_group',
                'id' => '47',
                'name' => 'Légèreté ressentie',
                'slug' => 'lightness',
                'unit' => NULL,
            ),
        ));
        
        
    }
}