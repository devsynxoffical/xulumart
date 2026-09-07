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

    {{-- First-visit signup / lead popup --}}
    <div class="xm-popup-overlay" id="xmLeadPopup" aria-hidden="true">
        <div class="xm-popup" role="dialog" aria-labelledby="xmLeadTitle">
            <button type="button" class="xm-popup-close" id="xmLeadClose" aria-label="Close">&times;</button>
            <h2 id="xmLeadTitle">Join XuLu Mart</h2>
            <p>Get exclusive offers. Share your details — or skip anytime.</p>
            <form id="xmLeadForm">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Your name *" required>
                <input type="tel" name="phone" class="form-control" placeholder="Phone number *" required>
                <input type="email" name="email" class="form-control" placeholder="Email address *" required>
                <button type="submit" class="btn-submit">Sign Up</button>
            </form>
            <p class="text-center mt-2 mb-0" style="font-size:12px;">
                <button type="button" id="xmLeadSkip" style="background:none;border:none;color:#6B7280;text-decoration:underline;cursor:pointer;">Skip for now</button>
            </p>
        </div>
    </div>
    <script>
    (function () {
        var KEY = 'xm_lead_popup_dismissed';
        var overlay = document.getElementById('xmLeadPopup');
        if (!overlay) return;
        function hide() {
            overlay.classList.remove('show');
            overlay.setAttribute('aria-hidden', 'true');
            try { localStorage.setItem(KEY, '1'); } catch (e) {}
        }
        function show() {
            overlay.classList.add('show');
            overlay.setAttribute('aria-hidden', 'false');
        }
        try {
            if (!localStorage.getItem(KEY)) {
                setTimeout(show, 1800);
            }
        } catch (e) {}
        document.getElementById('xmLeadClose').addEventListener('click', hide);
        document.getElementById('xmLeadSkip').addEventListener('click', hide);
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) hide();
        });
        document.getElementById('xmLeadForm').addEventListener('submit', function (e) {
            e.preventDefault();
            var form = e.target;
            var fd = new FormData(form);
            fetch('{{ route("popup.subscribe") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: fd
            }).then(function (r) { return r.json(); })
              .then(function (data) {
                  if (window.toastr) toastr.success(data.message || 'Thank you!');
                  hide();
              })
              .catch(function () {
                  if (window.toastr) toastr.error('Something went wrong. Please try again.');
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