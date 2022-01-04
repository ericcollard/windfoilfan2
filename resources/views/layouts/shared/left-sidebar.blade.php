<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('any', 'index')}}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo.png')}}" alt="" height="28">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{route('any', 'index')}}" class="logo text-center logo-dark">
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

            <li class="side-nav-title side-nav-item">Navigation</li>


            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'calendar', 'calendar'])}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">New</span>
                    <span> Tableau de bord </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Produits</li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'calendar', 'calendar'])}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Foil </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'chat', 'chat'])}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Flotteur </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'chat', 'chat'])}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Voile </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'chat', 'chat'])}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Marques </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Mesures</li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'calendar', 'calendar'])}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Flexion </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'chat', 'chat'])}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Torsion </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Avis</li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'calendar', 'calendar'])}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Nos avis </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'chat', 'chat'])}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Avis postés </span>
                </a>
            </li>
            <li class="side-nav-title side-nav-item">Sessions</li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'calendar', 'calendar'])}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Toutes les sessions </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('third', ['apps', 'chat', 'chat'])}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Sessions perso </span>
                </a>
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
