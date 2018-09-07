<footer class="footer footer-four">
        <div class="primary-footer brand-bg text-center">
            <div class="container">
                <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
                	<i class="material-icons">&#xE316;</i>
                </a>
                
                <ul class="social-link tt-animate ltr mt-20">
                    <li><a href="https://www.facebook.com/visuallabghana"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/nene_matey"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCwytD1hYEcx6nSnDN1aFKZw"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://vimeo.com/visuallabgh"><i class="fa fa-vimeo"></i></a></li>
                    {{-- <li><a href="https://be.net/Visual_lab"><i class="fa fa-behance"></i></a></li> --}}
                </ul>
                
                <hr class="mt-15">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            <img src="{{asset('assets/img/logo-white.png')}}" alt="footer-logo">
                        </div>
                        <span class="copy-text">Copyright &copy; 2018 Visual Lab Media &nbsp; | &nbsp; by <a href="{{ url ('/') }}">INCE LLC</a></span>
                        <div class="footer-intro">
                            <p>we don't settle for less, you derserve more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/materialize/js/materialize.min.js')}}"></script>
    <script src="{{ asset('assets/js/menuzord.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-tabcollapse.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.min.js')}}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.inview.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{ asset('assets/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/flexSlider/jquery.flexslider-min.js')}}"></script>
    <script src="{{ asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/scriptsae52.js?v=5')}}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".materialize-slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 6000,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [700, 600, 500, 500],
            disableProgressBar: "on",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            }


        });
    });
    </script>
    
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
</body>

</html>