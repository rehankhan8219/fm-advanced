<!DOCTYPE html>
<html lang="en">
    <head><base href="../../"/>
        <title>@plot('title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body id="kt_body" class="app-blank">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>

        <div class="d-flex flex-column flex-root" id="kt_app_root">
            
            @plot('content')
        </div>
        
        <script>var hostUrl = "assets/";</script>
        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <!-- <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script> -->
        @plot('scripts')

    </body>
</html>