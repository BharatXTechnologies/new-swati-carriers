<!-- Navbar -->
<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggler -->
        <button data-toggle="sidenav" data-target="#sidenav-1" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none"
            aria-controls="#sidenav-1" aria-haspopup="true">
            <i class="fas fa-bars fa-lg"></i>
        </button>

        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
            <input autocomplete="off" type="search" class="form-control rounded"
                placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
            <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ml-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link mr-3 mr-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Some news</a></li>
                    <li><a class="dropdown-item" href="#">Another news</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </li>

            <!-- Icon -->
            <li class="nav-item">
                <a class="nav-link mr-3 mr-lg-0" href="#">
                    <i class="fas fa-fill-drip"></i>
                </a>
            </li>
            <!-- Icon -->
            <li class="nav-item mr-3 mr-lg-0">
                <a class="nav-link" href="#">
                    <i class="fab fa-github"></i>
                </a>
            </li>

            <!-- Icon dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link mr-3 mr-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="united kingdom flag m-0"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                            <i class="fa fa-check text-success ml-2"></i></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
                    </li>
                </ul>
            </li>

            <!-- Avatar -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                    id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                        height="22" alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">My profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
