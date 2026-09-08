<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.laramart.head')

<body style="background-color: var(--brand-body-bg-2, #FDFDFD) !important; color: var(--brand-text-dark, #1B1B1B);">
    @php
        $business = App\Models\Setting::find(1);
    @endphp
    @include('layouts.laramart.header')

    @include('layouts.laramart.canvases')

    @yield('content')

    @include('layouts.laramart.footer')

    {{-- Split 2-Column Opt-In + Login/Signup Popup --}}
    <style>
        .xm-popup-overlay {
            position: fixed;
            inset: 0;
            background: rgba(5, 52, 26, 0.65);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 99999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 16px;
            opacity: 0;
            transition: opacity 0.25s ease;
        }
        .xm-popup-overlay.show {
            display: flex;
            opacity: 1;
        }
        .xm-split-modal {
            background: #ffffff;
            width: 100%;
            max-width: 820px;
            border-radius: 20px;
            position: relative;
            box-shadow: 0 25px 60px rgba(0,0,0,0.35);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            animation: xmModalPop 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes xmModalPop {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .xm-modal-close-btn {
            position: absolute;
            top: 14px;
            right: 16px;
            border: none;
            background: rgba(0,0,0,0.06);
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #374151;
            cursor: pointer;
            z-index: 10;
            transition: background 0.15s ease, transform 0.15s ease;
        }
        .xm-modal-close-btn:hover {
            background: #FD6000;
            color: #fff;
            transform: rotate(90deg);
        }
        .xm-modal-grid {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
        }
        .xm-modal-left {
            background: #FEF5EE;
            padding: 36px 32px;
            border-right: 1px solid #F3E6D9;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .xm-modal-right {
            background: #ffffff;
            padding: 36px 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .xm-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #FD6000;
            color: #ffffff;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            padding: 4px 12px;
            border-radius: 20px;
            width: fit-content;
            margin-bottom: 12px;
        }
        .xm-modal-title {
            font-size: 22px;
            font-weight: 800;
            color: #05341A;
            margin-bottom: 6px;
            line-height: 1.25;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .xm-modal-desc {
            font-size: 13.5px;
            color: #6B7280;
            margin-bottom: 16px;
            line-height: 1.45;
        }
        .xm-modal-form .form-group {
            margin-bottom: 10px;
        }
        .xm-modal-form .form-control {
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 13.5px;
            min-height: 42px;
            background: #ffffff;
            width: 100%;
        }
        .xm-modal-form .form-control:focus {
            border-color: #FD6000;
            outline: none;
            box-shadow: 0 0 0 3px rgba(253,96,0,0.15);
        }
        .xm-modal-submit-btn {
            background: #FD6000;
            color: #ffffff !important;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 14px;
            font-weight: 800;
            width: 100%;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 6px;
            transition: background 0.2s ease, transform 0.15s ease;
        }
        .xm-modal-submit-btn:hover {
            background: #E05500;
            transform: translateY(-1px);
        }
        .xm-auth-box {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 6px;
        }
        .xm-auth-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none !important;
            transition: all 0.2s ease;
            text-align: center;
        }
        .xm-auth-btn-signin {
            background: #05341A;
            color: #ffffff !important;
        }
        .xm-auth-btn-signin:hover {
            background: #084D27;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(5,52,26,0.25);
        }
        .xm-auth-btn-signup {
            background: #ffffff;
            color: #05341A !important;
            border: 2px solid #05341A;
        }
        .xm-auth-btn-signup:hover {
            background: #05341A;
            color: #ffffff !important;
            transform: translateY(-2px);
        }
        .xm-perks-list {
            list-style: none;
            padding: 0;
            margin: 16px 0 0;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .xm-perks-list li {
            font-size: 12.5px;
            color: #4B5563;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .xm-perks-list i {
            color: #10B981;
            font-size: 13px;
        }
        .xm-modal-footer {
            padding: 10px 24px 14px;
            background: #FAF7F4;
            border-top: 1px solid #EFEAE4;
            text-align: center;
        }
        .xm-modal-skip {
            background: none;
            border: none;
            color: #6B7280;
            font-size: 12.5px;
            cursor: pointer;
            text-decoration: underline;
            transition: color 0.15s ease;
        }
        .xm-modal-skip:hover {
            color: #FD6000;
        }
        @media (max-width: 767px) {
            .xm-modal-grid {
                grid-template-columns: 1fr;
            }
            .xm-modal-left {
                padding: 28px 20px 20px;
                border-right: none;
                border-bottom: 1px solid #F3E6D9;
            }
            .xm-modal-right {
                padding: 20px 20px 24px;
            }
        }
    </style>

    <div class="xm-popup-overlay" id="xmLeadPopup" aria-hidden="true">
        <div class="xm-split-modal" role="dialog" aria-labelledby="xmLeadTitle">
            <button type="button" class="xm-modal-close-btn" id="xmLeadClose" aria-label="Close">&times;</button>
            
            <div class="xm-modal-grid">
                {{-- LEFT SIDE: Lead Opt-In Form --}}
                <div class="xm-modal-left">
                    <span class="xm-badge-pill"><i class="fas fa-gift"></i> VIP Member Offer</span>
                    <h2 class="xm-modal-title" id="xmLeadTitle">Get Special Deals & Offers!</h2>
                    <p class="xm-modal-desc">Enter your details to receive discount coupons, wholesale catalogs & fast WhatsApp support.</p>
                    
                    <form id="xmLeadForm" class="xm-modal-form">
                        @csrf
                        <div id="xmLeadAlert" style="display:none;padding:10px;border-radius:8px;font-size:13px;font-weight:600;margin-bottom:10px;"></div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Full Name *" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone / WhatsApp Number *" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address *" required>
                        </div>
                        <button type="submit" class="xm-modal-submit-btn">
                            <i class="fas fa-paper-plane"></i> Claim VIP Discount
                        </button>
                    </form>
                    <p class="mt-2 mb-0 text-center" style="font-size:11px;color:#9CA3AF;">🔒 Your information is 100% private and secure.</p>
                </div>

                {{-- RIGHT SIDE: Quick Login & Sign Up --}}
                <div class="xm-modal-right">
                    <span class="xm-badge-pill" style="background:#05341A;"><i class="far fa-user"></i> Account Access</span>
                    <h3 class="xm-modal-title" style="font-size:20px;">Already a Member?</h3>
                    <p class="xm-modal-desc">Sign in or create an account to track shipments, access saved wishlists, and checkout in seconds.</p>
                    
                    <div class="xm-auth-box">
                        <a href="{{ route('login') }}" class="xm-auth-btn xm-auth-btn-signin">
                            <i class="fas fa-sign-in-alt"></i> Sign In to Account
                        </a>
                        <a href="{{ route('register') }}" class="xm-auth-btn xm-auth-btn-signup">
                            <i class="fas fa-user-plus"></i> Create New Account
                        </a>
                    </div>

                    <ul class="xm-perks-list">
                        <li><i class="fas fa-check-circle"></i> Instant order history & PDF invoices</li>
                        <li><i class="fas fa-check-circle"></i> Faster 1-click checkout</li>
                        <li><i class="fas fa-check-circle"></i> Exclusive wholesale rates</li>
                    </ul>
                </div>
            </div>

            <div class="xm-modal-footer">
                <button type="button" id="xmLeadSkip" class="xm-modal-skip">Skip for now &amp; continue shopping &rarr;</button>
            </div>
        </div>
    </div>

    <script>
    (function () {
        var KEY = 'xm_lead_popup_session_closed';
        var overlay = document.getElementById('xmLeadPopup');
        var alertBox = document.getElementById('xmLeadAlert');
        if (!overlay) return;

        function hide() {
            overlay.classList.remove('show');
            overlay.setAttribute('aria-hidden', 'true');
            try { sessionStorage.setItem(KEY, '1'); } catch (e) {}
        }
        function show() {
            overlay.classList.add('show');
            overlay.setAttribute('aria-hidden', 'false');
        }

        // Show on page visit after a brief smooth delay
        try {
            if (!sessionStorage.getItem(KEY)) {
                setTimeout(show, 1200);
            }
        } catch (e) {
            setTimeout(show, 1200);
        }

        document.getElementById('xmLeadClose').addEventListener('click', hide);
        document.getElementById('xmLeadSkip').addEventListener('click', hide);
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) hide();
        });

        document.getElementById('xmLeadForm').addEventListener('submit', function (e) {
            e.preventDefault();
            var form = e.target;
            var submitBtn = form.querySelector('button[type="submit"]');
            var originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            if (alertBox) alertBox.style.display = 'none';

            var fd = new FormData(form);
            fetch('{{ route("popup.subscribe") }}', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: fd
            }).then(function (r) { return r.json(); })
              .then(function (data) {
                  submitBtn.disabled = false;
                  submitBtn.innerHTML = originalBtnText;
                  if (data.success) {
                      if (alertBox) {
                          alertBox.style.display = 'block';
                          alertBox.style.background = '#D1FAE5';
                          alertBox.style.color = '#065F46';
                          alertBox.innerText = data.message || 'Thank you for joining XuLu Mart VIP!';
                      }
                      if (window.toastr) {
                          toastr.success(data.message || 'Thank you for joining XuLu Mart VIP!');
                      }
                      setTimeout(hide, 2000);
                  } else {
                      if (alertBox) {
                          alertBox.style.display = 'block';
                          alertBox.style.background = '#FEE2E2';
                          alertBox.style.color = '#991B1B';
                          alertBox.innerText = data.message || 'Please check your inputs and try again.';
                      }
                  }
              })
              .catch(function () {
                  submitBtn.disabled = false;
                  submitBtn.innerHTML = originalBtnText;
                  if (alertBox) {
                      alertBox.style.display = 'block';
                      alertBox.style.background = '#FEE2E2';
                      alertBox.style.color = '#991B1B';
                      alertBox.innerText = 'Something went wrong. Please check your details and try again.';
                  }
                  if (window.toastr) {
                      toastr.error('Something went wrong. Please check your details and try again.');
                  }
              });
        });
    })();
    </script>


    <!-- Vendors JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets') }}/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('frontend/assets') }}/js/plugins/select2.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/swiper.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/slick.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/mo.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.matchHeight-min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/photoswipe.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/ResizeSensor.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/product360.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/plugins/scrollax.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="{{ asset('frontend/assets') }}/js/vendor/vendor.min.js"></script>
        <script src="{{ asset('frontend/assets') }}/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="{{ asset('frontend/assets') }}/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>




    @php
        $setting = App\Models\Setting::find(1);
    @endphp

    <style>
        .icon-bar{position:fixed;right:16px;bottom:16px;left:auto;top:auto;z-index:1050;display:flex;flex-direction:column;gap:8px;}
        .icon-bar a.whatsapp{background:#25D366;border-radius:50%;width:56px;height:56px;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(0,0,0,.25);}
        .icon-bar a.whatsapp i{font-size:30px !important;color:#fff;padding:0;margin:0;}
        @media (max-width:576px){
            .icon-bar a.whatsapp{width:48px;height:48px;}
            .icon-bar a.whatsapp i{font-size:26px !important;}
        }
    </style>
    <div class="icon-bar">
        <a class="whatsapp" title="WhatsApp Us" target="_blank"
            href="https://api.WhatsApp.com/send?phone={{ $setting->phone }}&amp;text=Hello!"
            ><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
    </div>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var route = "{{ route('search') }}";


        $('#search').typeahead({
            source: function(query, process) {
                return $.get(route, {
                    query: query
                }, function(data) {
                    return process(data);
                });
            }
        });
    </script>


    <script>
        AOS.init({
            duration: 1200,
        })
    </script>

    <script>
        document.addEventListener("scroll", function() {
            const scrollY = window.scrollY;
            const cards = document.querySelectorAll(".zoom-card");

            cards.forEach(card => {
                const cardTop = card.offsetTop;
                const cardHeight = card.offsetHeight;

                if ((scrollY + 350) > cardTop && scrollY < (cardTop + cardHeight)) {
                    card.style.transform = "scale(1.06)";
                } else {
                    card.style.transform = "scale(1)";
                }
            });
        });
    </script>

    {{-- // <script type="text/javascript">
        //     var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        //     (function(){
        //     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        //     s1.async=true;
        //     s1.src='https://embed.tawk.to/6517b93c10c0b25724871ae8/1hbian63u';
        //     s1.charset='UTF-8';
        //     s1.setAttribute('crossorigin','*');
        //     s0.parentNode.insertBefore(s1,s0);
        //     })();
        // </script> --}}

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                $('.scroll').each(function() {
                    var productInfo = $(this).closest('.product');
                    var btnSlide = $(this).find('.btn-slide');

                    if (isScrolledIntoView(this, 0)) {
                        btnSlide.addClass('trigger-scroll');
                    } else {
                        if (!isScrolledIntoView(this, 300)) {
                            btnSlide.removeClass('trigger-scroll');
                        }
                    }
                });
            });

            // Check if element is in view on scroll
            function isScrolledIntoView(elem, downNum) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                return ((elemBottom <= docViewBottom) && (elemTop + downNum >= docViewTop));
            }
        });


        $(document).ready(function() {
            // Bind the click event to the add-to-wishlist link
            $('.add-to-wishlist').on('click', function() {
                var productId = $(this).data('product-id'); // Get product ID from data attribute

                // Send AJAX GET request
                $.ajax({
                    url: '{{ route('wishlist.add.lara', ':id') }}'.replace(':id',
                    productId), // Update the URL with the product ID
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        // Handle successful response
                        if (response.status == 1) {
                            toastr.success(response.message);
                        } else if (response.status == 0 && response.message ==
                            'Product already in wishlist') {
                            toastr.success(response.message);
                        } else if (response.status == 0 && response.message ==
                            'Login required') {
                            toastr.warning(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function() {
                        toastr.error('Error occurred while adding to wishlist.');
                    }
                });
            });
        });

        $(document).ready(function() {

            $.ajax({
                url: '{{ route('wishlist.add.count') }}',
                success: function(res) {
                    console.log(res);
                    if (res.count > 0) {
                        $('#wish_list_count').text(res.count);
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });

        });
    </script>


    @include('partials.scripts')

</body>

</html>