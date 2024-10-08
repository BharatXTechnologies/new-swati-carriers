<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@stack('setTitle')</title>
    <link href="{{ URL::asset('img/logo/logo.png') }}" rel="icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts Roboto -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <!-- MDB -->
    <link rel="stylesheet" href="{{ URL::asset('adminAssets/css/mdb.min.css') }}" />
    <!-- PRISM -->
    <link rel="stylesheet" href="{{ URL::asset('adminAssets/css/new-prism.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('adminAssets/css/style.css') }}" />
    <!-- Custom styles -->
    <style>
        body{
            background-color: #f4f4f4;
        }
        @media (min-width: 1400px) {

            main,
            header,
            #main-navbar {
                padding-left: 240px;
            }
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            width: 100%;
            height: 50px;
            line-height: 30px; 
            margin-top: 2rem;
            box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
    <script>
        import { Modal, Ripple, initMDB } from "mdb-ui-kit";
    
        initMDB({ Modal, Ripple });
    </script>
</head>

<body>
    <!--Main Navigation-->
    <header>
        @include('backend.common.sidebar')
        @include('backend.common.header')
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 70px">
        @yield('content')
        @include('backend.common.footer')
    </main>
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/new-prism.js') }}"></script>
    <!-- MDB SNIPPET -->
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/mdbsnippet.min.js') }}"></script>
    <!-- MDB -->
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('adminAssets/js/custom.js') }} "></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>

    <!-- Custom scripts -->
    <script type="text/javascript">
        const sidenav = document.getElementById("sidenav-1");
        const instance = mdb.Sidenav.getInstance(sidenav);

        let innerWidth = null;

        const setMode = (e) => {
            // Check necessary for Android devices
            if (window.innerWidth === innerWidth) {
                return;
            }

            innerWidth = window.innerWidth;

            if (window.innerWidth < 1400) {
                instance.changeMode("over");
                instance.hide();
            } else {
                instance.changeMode("side");
                instance.show();
            }
        };

        setMode();

        window.addEventListener("resize", setMode);[]
    </script>
</body>

</html>
