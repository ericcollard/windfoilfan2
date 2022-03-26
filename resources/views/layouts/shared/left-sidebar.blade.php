<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo.png')}}" alt="" height="28">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="28">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo_sm_dark.png')}}" alt="" height="28">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a href="{{ route('home') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">New</span>
                    <span> Tableau de bord </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProducts" aria-expanded="false" aria-controls="sidebarProducts" class="side-nav-link collapsed">
                    <i class="mdi mdi-airplane"></i>
                    <span> PRODUITS </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProducts" style="">
                    <ul class="side-nav-second-level">
                        @foreach($devicecategories as $category)
                            <li >
                                <a href="{{ route('device.category',$category) }}">{{ __($category->name) }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a href="{{ route('brand.index') }}">Marques</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMesures" aria-expanded="false" aria-controls="sidebarMesures" class="side-nav-link collapsed">
                    <i class="uil uil-ruler"></i>
                    <span> MESURES </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMesures" style="">
                    <ul class="side-nav-second-level">
                        @foreach($devicecategories as $category)
                            <li >
                                <a href="{{ route('technicaldata.category',$category) }}">{{ __($category->name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link collapsed">
                    <i class="uil uil-chart-bar-alt"></i>
                    <span> CLASSEMENTS </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts" style="">
                    <ul class="side-nav-second-level">

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarChartsFoil" aria-expanded="false" aria-controls="sidebarChartsFoil" class="collapsed">
                                <span> Foil </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarChartsFoil" style="">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','flex_module') }}">Coef Flexion</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','tors_module') }}">Coef Torsion</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','flex_thickness_coef') }}">Module flex</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','glide') }}">Glisse</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','lift') }}">Décollage</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','lateral') }}">Stab Latérale</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','longitudinal') }}">Stab Longi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','control') }}">Contrôle</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarChartsBoard" aria-expanded="false" aria-controls="sidebarChartsBoard" class="collapsed">
                                <span> Flotteur </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarChartsBoard" style="">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','ofo') }}">OFO</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','weight-f') }}">Poids</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','touch-side') }}">Touchettes rail</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','touch-front') }}">Touchettes avant</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','glide-f') }}">Glisse</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','power') }}">Puissance</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','inertia') }}">Inertie</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','control-f') }}">Contrôle</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarChartsSail" aria-expanded="false" aria-controls="sidebarChartsSail" class="collapsed">
                                <span> Voile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarChartsSail" style="">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','weight-s') }}">Poids</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','back-hand') }}">Main arrière</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','stability') }}">Stabilisation</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','lightness') }}">Légèreté ressent</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technicaldatas.attributeChart','upwind') }}">Perf près</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPosts" aria-expanded="false" aria-controls="sidebarPosts" class="side-nav-link collapsed">
                    <i class="mdi mdi-note-text-outline"></i>
                    <span> ARTICLES </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPosts" style="">
                    <ul class="side-nav-second-level">


                        @foreach($postcategories as $category)
                            <li >
                                <a href="{{ route('post.postCategory',$category->id) }}">{{ __($category->name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSessions" aria-expanded="false" aria-controls="sidebarSessions" class="side-nav-link collapsed">
                    <i class="mdi mdi-speedometer"></i>
                    <span> NAVIGATIONS </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSessions" style="">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="#">Toutes les sessions</a>
                        </li>
                        <li>
                            <a href="#">Session perso</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAdmin" aria-expanded="false" aria-controls="sidebarAdmin" class="side-nav-link collapsed">
                    <i class="uil uil-cog"></i>
                    <span> ADMINISTRATION </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAdmin" style="">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('user.list') }}">{{ __('Users') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('statistic.calculate') }}">{{ __('Update statistics') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('attribute.index') }}">{{ __('Attributes') }}</a>
                        </li>




                    </ul>
                </div>
            </li>

        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{asset('assets/images/help-icon.svg')}}" height="90" alt="Helper Icon Image" />
            <h5 class="mt-3">Participer</h5>
            <p class="mb-3">Postez vos propres compte-rendus et analysez vos sessions</p>
            <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Participer</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
