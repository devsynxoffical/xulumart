<style>
    .icon-bar {
      position: fixed;
      /*margin-top:50px;*/
      top: 80%;
      z-index: 1000;
    }
    a.whatsapp {
        color: #00A356 !important;
    }
    
    .icon-bar a {
      display: block;
      text-align: center;
      padding: 16px;
      color: white;
      font-size: 20px;
    }
    
    i.fab.fa-whatsapp.text-right {
        background-color: white;
        padding: 5px;
        border-radius:20%;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>

       <!-- Start of Footer -->
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
            <div class="footer-newsletter bg-primary pt-6 pb-6" style="background-color: #2A3143 !important; border-bottom: 2px solid #EE930D;">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To Our
                                        Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="{{ route('subscribe') }}" method="POST" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                @csrf
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                                    placeholder="Your E-mail Address" />
                                <button class="btn btn-dark btn-rounded" style="background-color: #EE930D !important;" type="submit">Subscribe<i
                                        class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="{{ route('index') }}" class="logo-footer">
                                    <img src="{{ asset('images/website/'.$business->logo) }}" alt="{{ env('APP_NAME') }}" width="250"
                                        height="" />
                                </a>
                                <div class="widget-body mt-2">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <!--<i class="fa fa-mobile" style="width: 15px; text-align: center; margin-right: 4px;"></i> Phone: +8801716597203 (OWNER)<br>-->
                                    <a href="tel:+8801716597203" class="widget-about-call">+8801716597203 (OWNER)</a>
                                    <a href="tel:{{ $business->phone }}" class="widget-about-call">{{ $business->phone }}</a>
                                    <p class="widget-about-desc">
                                        <a href="mailto:{{ $business->email }}" class="widget-about-call">{{ $business->email }}</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    {{--
                                     <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Product Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Shipping</a></li> -->
                                    --}}
                                    {!! $business->address !!}
                                </ul>
                                <div class="social-icons social-icons-colored mt-4">
                                        @if($business->facebook != NULL)
                                        <a href="{{ $business->facebook }}" class="social-icon social-facebook w-icon-facebook" target="_blank"></a>
                                        @endif

                                        @if($business->twitter != NULL)
                                        <a href="{{ $business->twitter }}" class="social-icon social-twitter w-icon-twitter" target="_blank"></a>
                                        @endif

                                        @if($business->instagram != NULL)
                                        <a href="{{ $business->instagram }}" class="social-icon social-instagram w-icon-instagram" target="_blank"></a>
                                        @endif

                                        @if($business->youtube != NULL)
                                        <a href="{{ $business->youtube }}" class="social-icon social-youtube w-icon-youtube" target="_blank"></a>
                                        @endif

                                        <!-- @if($business->linkedin != NULL)
                                        <a href="{{ $business->linkedin }}" class="social-icon social-pinterest w-icon-pinterest"></a>
                                        @endif -->
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Terms of Uses</h3>
                                <ul class="widget-body">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('products') }}">All Products</a></li>
                                    <li><a href="{{ route('categories') }}">Browse Category</a></li>
                                    <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Important Links</h4>
                                <ul class="widget-body">
                                    <li><a href="{{ route('term.condition') }}">Terms and Conditions</a></li>
                                    <li><a href="{{ route('user.blog') }}">Blog</a></li>
                                    {{--
                                    <li><a href="{{ route('order.track') }}">Track My Order</a></li>
                                    <li><a href="{{ route('carts') }}">View Cart</a></li>--}}
                                    <li><a href="{{ route('customer.account') }}">My Wishlist</a></li>
                                    <li><a href="{{ route('login') }}">Sign In</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">&copy; {{ date('Y') }}. Developed By <a href="https://faraitfusion.com/" target="_blank">Fara IT Fusion</a></p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="assets/images/payment.png" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div> -->
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    
    <div class="icon-bar">
        <a target="_blank" href="https://api.WhatsApp.com/send?phone=+8801600000807&amp;text=Hello! " style="padding-top: 5px;margin-top: 1.5px;" class="whatsapp"><i class="fab fa-whatsapp text-right" style="font-size: 51px;" aria-hidden="true"></i></a> 
    </div>
    
    <!-- End of Page Wrapper -->
    <div class="footer-bottom" style="background-color: #3F3D56 !important; border-bottom: 2px solid #EE930D;">
        <div class="container">
            <div class="footer-left">
                <p class="copyright">&copy; {{ date('Y') }}. Developed By <a href="https://faraitltd.com/" target="_blank" style="color: #EE930D;">FARA IT LTD.</a></p>
            </div>
            <div class="footer-right">
                <span class="payment-label mr-lg-8">We're using safe payment for</span>
                <figure class="payment">
                    <img src="{{ asset('assets/images/payment.png') }}" alt="payment" width="159" height="25" />
                </figure>
            </div>
        </div>
    </div>
    
    
    <!-- Start of Sticky Footer -->
    @include('partials.bottom-nav')

    <!-- Start of Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    @include('partials.mobile-nav')
    <!-- End of Mobile Menu -->

    <!-- Affiliate Modal -->
<div class="modal fade" id="affiliateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Affiliate Requirement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('affiliate.apply') }}" method="POST">
          @csrf
          <div class="modal-body">
            <p>
                Please, make sure you uploaded your image and a scan copy of your NID.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </div>
      </form>
    </div>
  </div>
</div>

    <!-- Root element of PhotoSwipe. Must have class pswp -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="loading-spin"></div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PhotoSwipe -->

   