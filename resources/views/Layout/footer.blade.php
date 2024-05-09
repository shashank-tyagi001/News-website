

 <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">

                @foreach ($footerItem as $item)
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget">

                        <h3 class="title">{{$item->name}}</h3>

                        @if(count($item->subfooter) > 0)

                        <ul>
                        @foreach ($item->subfooter as $subfooter)
                            <li><a href={{$subfooter->link}}>{{$subfooter->name}}</a></li>
                        @endforeach
                    </ul>
                        @endif
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                         @foreach ($footerItem as $item)
                        <h3 class="title">{{$item->name}}</h3>
                        @endforeach
                        <ul>
                            <li><a href="#">Posuere egestas</a></li>
                            <li><a href="#">Sollicitudin</a></li>
                            <li><a href="#">Luctus non</a></li>
                            <li><a href="#">Duis tincidunt</a></li>
                            <li><a href="#">Elementum</a></li>
                        </ul>
                    </div>
                </div> --}}

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Get in Touch</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>123 Terry Lane, New York, USA</p>
                            <p><i class="fa fa-envelope"></i>email@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            <div class="social">
                                @foreach ($media as $social)
                                <a href={{$social->link}}><i class="{{$social->icon}}"></i></a>
                                @endforeach
                                {{-- <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Newsletter</h3>
                        <div class="newsletter">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos
                            </p>
                            <form>
                                <input class="form-control" type="email" placeholder="Your email here">
                                <button class="btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                </div>

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <div class="col-md-6 template-by">
                    <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->





    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src={{asset('assest/js/easing.min.js')}} ></script>
    <script src={{asset('assest/js/easing.js')}} ></script>
    <script src={{asset('assest/js/slick/slick.min.js')}} ></script>
    <script src={{asset('assest/js/custom.js')}} ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Template Javascript -->
    <script src={{asset('assest/js/main.js')}} ></script>



</body>
</html>
