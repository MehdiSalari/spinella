<!-- <input type="hidden" id="app_url" value="{{ route('home') }}"> -->
<!-- Javascript Files
================================================== -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js') }}"></script>

<!-- RS5.0 Core JS Files -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>

<!-- RS5.0 Extensions Files -->
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
@stack('script')

<script>
    jQuery(document).ready(function () {
        // revolution slider
        jQuery("#revolution-slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            delay: 3500,
            navigation: {
                arrows: { enable: true }
            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            spinner: "off",
            gridwidth: 1140,
            gridheight: 600,
            disableProgressBar: "on"
        });
    });

    // var lang = document.getElementById("lang");
    // // on hover
    // lang.onclick = function () {
    //     lang.classList.add("active");
    // }
    // // on hover
    // lang.onmouseout = function () {
    //     lang.classList.remove("active");
    // }


    function h_center_logo2() {
        var position = jQuery(".header_center ul#mainmenu > li").length;
        var APP_URL = jQuery("#APP_URL").val();

        var i = 0;
        jQuery('.header_center ul#mainmenu > li').each(function() {
            if (i == Math.floor(position / 2) - 1) {
                jQuery(this).after('<li class="logo_pos"><a href="' + APP_URL + '"><img class="c_logo_light" src="' + logo_dir_1 + '"/><img class="c_logo_dark" src="' + logo_dir_2 + '"/></a></li>');
            }
            i++;
        });

        // settings

        jQuery('header.header_center .logo_pos img').css('margin-top', '-30px !important');

    }

    h_center_logo2();
</script>