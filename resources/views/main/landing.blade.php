<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.head', ["page_title" => "Accueil"])
    {!! htmlScriptTagJsApi() !!}
</head>


<body class="loading" data-layout-config='{"darkMode":false}'>

    @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('alert', 'success') }} alert-dismissible fade show mt-2" role="alert">
            <strong>{{ __(Session::get('alert', 'success')) }} !</strong> {{ Session::get('message', '') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
        <div class="container">

            <!-- logo -->
            <div  class="navbar-brand me-lg-5">
            <a href="{{ route('home') }}" class="logo logo-light" style="position: relative">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo.png')}}" alt="" height="28">
        </span>
                <span class="logo-sm">
            <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
        </span>
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- menus -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <!-- left menu -->
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link active" href="">Home</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#presentation">Présentation</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#features">Fonctionnalités</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="#pro">Pro</a>
                    </li>
                </ul>

                <!-- right menu -->


            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- START HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mt-md-4">
                        <div>
                            <span class="badge bg-danger rounded-pill">New</span>
                            <span class="text-white-50 ms-1">Pro access : gérez vos données techniques</span>
                        </div>
                        <h2 class="text-white mb-4 mt-3 hero-title">
                            La base de donnée Windfoil la plus complète au monde
                        </h2>

                        <p class="mb-4 font-16 text-white">Windfoilfan est une base de donnée collaborative
                            regroupant
                            les mesures, les caractéristiques, les compte rendu de test, les performances de
                            plus de 200 produits dédiés au windfoil.</p>

                        <a href="{{ route('login') }}" class="btn btn-success mt-2" style="margin-right: 1em">Se connecter <i class="mdi mdi-arrow-right ms-1"></i></a>
                        <a href="{{ route('register') }}" class="btn btn-info mt-2" style="margin-right: 1em">Créer un compte <i class="mdi mdi-arrow-right ms-1"></i></a>
                        <a href="{{ route('home') }}" class="btn btn-light mt-2">Juste visiter <i class="mdi mdi-arrow-right ms-1"></i></a>

                        <p class="mt-4 font-16 text-white"><em>Info. En tant que simple visiteur, les fonctionnalités et données visibles seront fortement
                                réduites. En vous connectant, vous aurez accès à l'essentiel des éléments. Créez gratuitement votre compte !</em></p>

                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="text-md-end mt-3 mt-md-0">
                        <img src="{{asset('assets/images/startup.jpg')}}" alt="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO -->

    <!-- START PRESENTATION -->
    <section id="presentation" class="py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
                        <h3>Pourquoi <span class="text-primary">WindfoilFan</span> est il <span class="text-primary">unique</span> ?</h3>
                        <p class="text-muted mt-2">Le net regorge d'informations et d'avis de tout poil.</br>
                            Alors pourqoi une application en plus des blogs, des magazines, des shops et des réseaux sociaux ?
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil  uil-database-alt text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Classement</h4>
                        <p class="text-muted mt-2 mb-0">Le matériel est classé par catégorie, par marque et par millésime. Vous pouvez accéder à la liste des
                            produits, mais aussi à des tableaux de synthèse, et des classements par critères.
                            Tous les avis sont rattachés au matériel qu'ils décrivent. La recherche est donc particulièrement aisée..
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-link-broken text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Indépendant</h4>
                        <p class="text-muted mt-2 mb-0">WindfoilFan n'est pas financé par les marques. Les avis sont libres et indépendants.
                            Chaque pratiquant peut contribuer et publier ses propres avis, à condition de respecter une charte de 'bonne conduite'.
                            Nous vous invitons d'ailleurs chaleureusement à le faire.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-users-alt text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Confiance et pertinence</h4>
                        <p class="text-muted mt-2 mb-0">Pour chaque avis publiés, on vous donne tous les outils pour pouvoir juger le
                            niveau de confiance et de pertinence que vous pouvez apporter à cet avis. En particulier, vous devriez
                            pouvoir établir si le testeur est dans un contexte équivalent au vôtre.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-sync text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Comparatif</h4>
                        <p class="text-muted mt-2 mb-0">Tous nos classements sont basés sur une comparaison des modèles entre eux.
                            Il nous parait impossible, voir pas très honnète, de juger un produit dans l'absolu.
                            Cette méthode permet de donner des classements assez fiables, et d'aller plus loin
                            qu'un avis peu utile du type "c'est bien" ou "c'est pas bien"..
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-chart-growth text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Mesures objectives</h4>
                        <p class="text-muted mt-2 mb-0">En plus des tests basés sur des sensations par nature subjectives, nous avons mis au point
                            un protocole de mesure
                            qui nous permet d'avoir des données physiques et objectives. Ces données permettent de coroborer une bonne partie
                            des conclusions que nous pouvons tirer en navigation.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="text-center p-3">
                        <div class="avatar-sm m-auto">
                            <span class="avatar-title bg-primary-lighten rounded-circle">
                                <i class="uil uil-graduation-hat text-primary font-24"></i>
                            </span>
                        </div>
                        <h4 class="mt-3">Pédagogique</h4>
                        <p class="text-muted mt-2 mb-0">En plus des données propres aux produits, nous avons regroupé une série d'articles didactiques
                            sur la pratique du windfoil. Ils abordent le matériel, son entretien, la réparation, les réglages, les techniques de navigation et bien d'autres
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END PRESENTATION -->


    <!-- START FEATURES -->
    <section id="features" class="py-5 bg-light-lighten border-top border-bottom border-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-heart-multiple-outline"></i></h1>
                        <h3>Fonctionalités que vous allez <span class="text-danger">aimer</span></h3>
                        <p class="text-muted mt-2">Woindfoilfan propose de nombreuses données, en voici une liste non exhaustive</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2 py-5 align-items-center">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/features.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-4">
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Présentations produits</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Compte-rendus de test</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Discussions</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Classements par critères</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Mesures techniques</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Calculs de vos performances</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Historique de vos navigations</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Articles didactiques</p>
                    </div>

                    <a href="/posts/5/97" class="btn btn-primary btn-rounded mt-3">En savoir plus <i class="mdi mdi-arrow-right ms-1"></i></a>

                </div>
            </div>

        </div>
    </section>
    <!-- END FEATURES -->


    <!-- START CONTACT -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Contactez <span class="text-primary">nous</span></h3>
                        <p class="text-muted mt-2">Pour nous contacter, veuillez remplir le formulaire ci-joint et nous reviendrons vers vous très vite. Pour plus
                            <br>d'information, contactez nous.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-md-4">
                    <p class="text-muted"><span class="fw-bold">Service support :</span><br> <span class="d-block mt-1">04 91 45 27 71</span></p>
                    <p class="text-muted mt-4"><span class="fw-bold">Addresse email:</span><br> <span class="d-block mt-1">info(at)glissattitude.com</span></p>
                    <p class="text-muted mt-4"><span class="fw-bold">Adresse postale:</span><br> <span class="d-block mt-1">17 Montée du Cdt Robien, 13011 MARSEILLE</span></p>
                    <p class="text-muted mt-4"><span class="fw-bold">Horaires:</span><br> <span class="d-block mt-1">10h-12h30 et 14h30-19h</span></p>
                </div>

                <div class="col-md-8">
                    <form method="POST" action="{{ route('message') }}">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label for="fullname" class="form-label">Votre Nom</label>
                                    <input class="form-control form-control-light" type="text" id="fullname" name="fullname" placeholder="Nom...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label for="emailaddress" class="form-label">Votre Email*</label>
                                    <input class="form-control form-control-light" type="email"  id="emailaddress" name="emailaddress" placeholder="Entrez votre Email..." required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <input class="form-control form-control-light" type="text" id="subject" name="subject" placeholder="Entrez le sujet...">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label for="comments" class="form-label">Message</label>
                                    <textarea id="comments" rows="4" class="form-control form-control-light" name="comments" placeholder="Ecrivez votre message ici..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                {!!  htmlFormSnippet() !!}
                            </div>
                            <div class="col-lg-6 text-end">
                                <button id="btn_submit"  type="submit" class="btn btn-primary mt-2">Envoyez votre message <i class="mdi mdi-telegram ms-1"></i> </button>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- START PRO -->
    <section id="pro" class="py-5 bg-light-lighten border-top border-bottom border-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mt-0"><i class="mdi mdi-shield-account-outline"></i></h1>
                        <h3>Pour les <span class="text-danger">pros</span></h3>
                        <p class="text-muted mt-2">Woindfoilfan propose des outils dédiés pour les marques</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2 py-5 align-items-center">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/analytics.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-4">
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Accès aux données techniques de vos foils</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Suivi des évolutions et dérives de production</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Comparaison des données techniques</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Accès aux statistiques</p>
                        <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Acc!s à la page de présentation de votre marque</p>
                    </div>

                    <a href="{{ route('pro') }}" class="btn btn-primary btn-rounded mt-3">Demander un accès pro<i class="mdi mdi-arrow-right ms-1"></i></a>

                </div>
            </div>

        </div>
    </section>
    <!-- END PRO -->

    <!-- START FOOTER -->
    <footer id="foot" class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo-dark" height="18" />
                    <p class="text-muted mt-4">Windfoilfan est une base de donnée participative <br>
                                            regroupant les mesures, les caractéristiques, les compte-rendu <br>
                                            de test, les performances de plus de 200 produits dédiés au windfoil.
                    </p>

                </div>
                <div class="col-lg-6 text-end">
                    <p class="text-muted">© 2022 Windfoilfan. Powered by Glissattitude</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- bundle -->
    @include('layouts.shared.footer-script')

</body>

</html>
