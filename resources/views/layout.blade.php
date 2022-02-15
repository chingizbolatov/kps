@include('partials.head', ['title' => $page_title])

<body>

<!-- MAIN BACKGROUND -->
<div class="emorat_tm_mainbg">

    <!-- PATTERN -->
    <div class="coddythemes_pattern_overlay"></div>
    <!-- /PATTERN -->

</div>
<!-- /MAIN BACKGROUND -->

<!-- WRAPPER ALL -->
<div class="emorat_tm_wrapper_all">

    <div class="emorat_tm_wrapper">


        <div class="emorat_tm_animate_submenu"></div>


        <!-- LEFTPART -->
        <div class="emorat_tm_leftpart_wrap">

            <!-- LEFT PATTERN -->
            <div class="emorat_tm_build_pattern"></div>
            <!-- /LEFT PATTERN -->

            <!-- MENUBAR -->
        @include('partials.navbar')
        <!-- /MENUBAR -->

        </div>
        <!-- /LEFTPART -->

        <!-- RIGHTPART -->
        <div class="emorat_tm_rightpart_wrap">
            <div class="emorat_tm_rightpart">

                <!-- CONTENT -->
                <div class="emorat_tm_content_wrap">
                    <div class="emorat_tm_content">
                        <!-- TOPBAR -->
                    @include('partials.topbar')
                    <!-- /TOPBAR -->

                        <!-- HEADER -->
                    @include('partials.header')
                    <!-- /HEADER -->
                        @yield('content')
                        <!-- SHORT SERVICES -->
                    </div>
                    <!-- /CONTENT -->
                    @include('partials.footer')
                </div>
            </div>
            <!-- /RIGHTPART -->

        </div>

    </div>

</div>
<!-- / WRAPPER ALL -->



<!-- SCRIPTS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init.js"></script>
<!-- /SCRIPTS -->


</body>
</html>
