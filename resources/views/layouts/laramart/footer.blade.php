<style>
    /* ===================== Footer (matches reference design) ===================== */
    .site-footer-newsletter{
        background:#05341A;
        padding:22px 0;
    }
    .site-footer-newsletter .nl-inner{
        display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:16px;
    }
    .site-footer-newsletter .nl-left{ display:flex; align-items:center; gap:14px; }
    .site-footer-newsletter .nl-icon{
        width:44px; height:44px; border-radius:50%; background:#ffffff1a;
        display:flex; align-items:center; justify-content:center; flex-shrink:0;
        color:#FD6000; font-size:20px;
    }
    .site-footer-newsletter .nl-left h4{ color:#fff; font-size:16px; font-weight:700; margin:0; }
    .site-footer-newsletter .nl-left p{ color:#BBBBBB; font-size:13.5px; margin:2px 0 0; }
    .site-footer-newsletter .nl-form{ display:flex; gap:0; max-width:420px; width:100%; }
    .site-footer-newsletter .nl-form input{
        border:none; border-radius:6px 0 0 6px; padding:12px 16px; flex:1; min-width:0; font-size:14px;
    }
    .site-footer-newsletter .nl-form button{
        background:#FD6000; color:#fff; border:none; border-radius:0 6px 6px 0;
        padding:0 22px; font-weight:700; letter-spacing:.4px; font-size:13px;
        text-transform:uppercase; transition:background .2s ease;
    }
    .site-footer-newsletter .nl-form button:hover{ background:#e05500; }

    .site-footer-main{ background:#F8F4F1; padding:44px 0 28px; }
    .site-footer-main .footer-brand-logo{ display:flex; align-items:center; gap:8px; font-size:22px; font-weight:800; color:#1B1B1B; }
    .site-footer-main .footer-brand-logo i{ color:#FD6000; }
    .site-footer-main .footer-brand-tagline{ color:#888; font-size:12.5px; letter-spacing:.4px; margin:0 0 10px; }
    .site-footer-main .footer-brand-desc{ color:#666; font-size:13.5px; line-height:1.6; max-width:260px; }
    .site-footer-main .footer-social{ display:flex; gap:10px; margin-top:14px; }
    .site-footer-main .footer-social a{
        width:34px; height:34px; border-radius:50%; background:#1B1B1B; color:#fff;
        display:flex; align-items:center; justify-content:center; font-size:14px;
        transition:transform .2s ease, background .2s ease;
    }
    .site-footer-main .footer-social a:hover{ background:#FD6000; transform:translateY(-3px); }

    .site-footer-main h5.footer-col-title{
        color:#1B1B1B; font-size:13.5px; font-weight:800; text-transform:uppercase;
        letter-spacing:.6px; margin-bottom:16px;
    }
    .site-footer-main .footer-link-list{ list-style:none; padding:0; margin:0; }
    .site-footer-main .footer-link-list li{ margin-bottom:10px; }
    .site-footer-main .footer-link-list a{
        color:#555; font-size:13.5px; text-decoration:none; transition:color .2s ease, padding-left .2s ease;
    }
    .site-footer-main .footer-link-list a:hover{ color:#FD6000; padding-left:3px; }

    .site-footer-main .footer-contact-list{ list-style:none; padding:0; margin:0; }
    .site-footer-main .footer-contact-list li{
        display:flex; align-items:flex-start; gap:10px; margin-bottom:14px; font-size:13.5px; color:#555;
    }
    .site-footer-main .footer-contact-list i{ color:#FD6000; margin-top:2px; width:16px; text-align:center; }

    .site-footer-bottom{ background:#05341A; padding:16px 0; }
    .site-footer-bottom p{ color:#BBBBBB; font-size:12.5px; margin:0; text-align:center; }
    .site-footer-bottom a{ color:#fff; text-decoration:underline; }

    
    .site-footer-main {
    background: #F8F4F1 !important;
    padding: 44px 0 28px;
}

/* Footer text black */
.site-footer-main h5,
.site-footer-main h5.footer-col-title {
    color: #1B1B1B !important;
}

.site-footer-main p,
.site-footer-main .footer-brand-desc,
.site-footer-main .footer-brand-tagline {
    color: #555 !important;
}

/* Footer links black */
.site-footer-main .footer-link-list a {
    color: #333 !important;
}

/* Contact information black */
.site-footer-main .footer-contact-list li,
.site-footer-main .footer-contact-list li span {
    color: #333 !important;
}

/* Icons orange */
.site-footer-main .footer-contact-list i,
.site-footer-main .footer-brand-logo i {
    color: #FD6000 !important;
}

/* Links hover */
.site-footer-main .footer-link-list a:hover {
    color: #FD6000 !important;
}
.site-footer-main .footer-social {
    display: flex !important;
    gap: 10px !important;
    margin-top: 14px;
}

.site-footer-main .footer-social a {
    width: 34px !important;
    height: 34px !important;
    border-radius: 50% !important;
    background: #1B1B1B !important;
    color: #fff !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    text-decoration: none !important;
}

.site-footer-main .footer-social a i {
    color: #fff !important;
    display: inline-block !important;
    font-size: 14px !important;
}

.site-footer-main .footer-social a:hover {
    background: #FD6000 !important;
    color: #fff !important;
}

.site-footer-main .footer-social a:hover i {
    color: #fff !important;
}
</style>

<!-- Newsletter strip -->
<div class="site-footer-newsletter">
    <div class="container">
        <div class="nl-inner">
            <div class="nl-left">
                <div class="nl-icon"><i class="far fa-envelope"></i></div>
                <div>
                    <h4>Get Exclusive Offers &amp; Updates</h4>
                    <p>Sign up now and get 10% OFF on your first order!</p>
                </div>
            </div>
            <form action="{{ route('subscribe') }}" method="post" class="nl-form mc-form widget-subscibe2">
                @csrf
                <input id="mc-email" autocomplete="off" type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <div class="mailchimp-alerts text-centre">
            <div class="mailchimp-submitting"></div>
            <div class="mailchimp-success text-success"></div>
            <div class="mailchimp-error text-danger"></div>
        </div>
    </div>
</div>

<!-- Main footer -->
<div class="site-footer-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                @if(optional($business)->footer_logo || optional($business)->logo)
                    <img src="{{ \App\Helpers\Media::url('website', $business->footer_logo ?: $business->logo) }}" alt="{{ optional($business)->name ?? 'XuLu Mart' }} logo" style="max-width:180px;">
                @else
                    <div class="footer-brand-logo"><i class="fas fa-shopping-bag"></i> {{ optional($business)->name ?? 'XuLu Mart' }}</div>
                    <p class="footer-brand-tagline">SHOP SMART. LIVE BETTER.</p>
                @endif
                <p class="footer-brand-desc mt-2">Your one-stop destination for quality products at unbeatable prices.</p>
                <div class="footer-social">
                    @if(optional($business)->facebook)
                        <a href="{{ $business->facebook }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if(optional($business)->instagram)
                        <a href="{{ $business->instagram }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if(optional($business)->twitter)
                        <a href="{{ $business->twitter }}" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if(optional($business)->tiktok)
                        <a href="{{ $business->tiktok }}" target="_blank" rel="noopener" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    @endif
                    @if(optional($business)->youtube)
                        <a href="{{ $business->youtube }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    @endif
                    @if(optional($business)->linkedin)
                        <a href="{{ $business->linkedin }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-col-title">Quick Links</h5>
                <ul class="footer-link-list">
                    <li><a href="{{ route('products') }}">New In</a></li>
                    <li><a href="{{ route('flashSale') }}">Best Sellers</a></li>
                    <li><a href="{{ route('offer.products') }}">Deals</a></li>
                    <li><a href="{{ route('order.track') }}">Track Order</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-col-title">Customer Care</h5>
                <ul class="footer-link-list">
                    <li><a href="{{ route('faqs.page') }}">FAQs</a></li>
                    <li><a href="{{ route('shipping.policy') }}">Shipping Policy</a></li>
                    <li><a href="{{ route('returns.refunds') }}">Returns &amp; Refunds</a></li>
                    <li><a href="{{ route('term.condition') }}">Terms &amp; Conditions</a></li>
                    <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-col-title">Contact Us</h5>
                <ul class="footer-contact-list">
                    @if(optional($business)->email)
                        <li><i class="far fa-envelope"></i> <span>{{ $business->email }}</span></li>
                    @endif
                    @if(optional($business)->phone)
                        <li><i class="fas fa-phone-alt"></i> <span>{{ $business->phone }}</span></li>
                    @endif
                    @if(optional($business)->address)
                        <li><i class="fas fa-map-marker-alt"></i> <span>{{ $business->address }}</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bottom bar -->
<div class="site-footer-bottom">
    <div class="container">
        <p>
            &copy; {{ date('Y') }} {{ optional($business)->name ?? 'XuhuMart' }}. All rights reserved.<br>
            You are receiving this email because you subscribed to our newsletter.
            <a href="{{ route('contact') }}">Unsubscribe</a>
        </p>
    </div>
</div>
<!-- Modal -->
<div class="quickViewModal modal fade" id="quickViewModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" data-bs-dismiss="modal">&times;</button>
            <div class="row learts-mb-n30">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-30">
                    <div class="product-images">
                        <div class="product-gallery-slider-quickview">
                            <div class="product-zoom" data-image="{{asset('frontend/assets')}}/images/product/single/1/product-zoom-1.webp">
                                <img src="{{asset('frontend/assets')}}/images/product/single/1/product-1.webp" alt="">
                            </div>
                            <div class="product-zoom" data-image="{{asset('frontend/assets')}}/images/product/single/1/product-zoom-2.webp">
                                <img src="{{asset('frontend/assets')}}/images/product/single/1/product-2.webp" alt="">
                            </div>
                            <div class="product-zoom" data-image="{{asset('frontend/assets')}}/images/product/single/1/product-zoom-3.webp">
                                <img src="{{asset('frontend/assets')}}/images/product/single/1/product-3.webp" alt="">
                            </div>
                            <div class="product-zoom" data-image="{{asset('frontend/assets')}}/images/product/single/1/product-zoom-4.webp">
                                <img src="{{asset('frontend/assets')}}/images/product/single/1/product-4.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 overflow-hidden position-relative learts-mb-30">
                    <div class="product-summery customScroll">
                        <div class="product-ratings">
                            <span class="star-rating">
                            <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                            <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                        </div>
                        <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                        <div class="product-price">£38.00 – £50.00</div>
                        <div class="product-description">
                            <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles.</p>
                        </div>
                        <div class="product-variations">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>Size</span></td>
                                        <td class="value">
                                            <div class="product-sizes">
                                                <a href="#">Large</a>
                                                <a href="#">Medium</a>
                                                <a href="#">Small</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Color</span></td>
                                        <td class="value">
                                            <div class="product-colors">
                                                <a href="#" data-bg-color="#000000"></a>
                                                <a href="#" data-bg-color="#ffffff"></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Quantity</span></td>
                                        <td class="value">
                                            <div class="product-quantity">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="text" class="input-qty" value="1">
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product-buttons">
                            <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="far fa-heart"></i></a>
                            {{-- <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i> Add to Cart</a> --}}
                            <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-brands">
                            <span class="title">Brands</span>
                            <div class="brands">
                                <a href="#"><img src="{{asset('frontend/assets')}}/images/brands/brand-3.webp" alt=""></a>
                                <a href="#"><img src="{{asset('frontend/assets')}}/images/brands/brand-8.webp" alt=""></a>
                            </div>
                        </div>
                        <div class="product-meta mb-0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>SKU</span></td>
                                        <td class="value">0404019</td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Category</span></td>
                                        <td class="value">
                                            <ul class="product-category">
                                                <li><a href="#">Kitchen</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Tags</span></td>
                                        <td class="value">
                                            <ul class="product-tags">
                                                <li><a href="#">handmade</a></li>
                                                <li><a href="#">learts</a></li>
                                                <li><a href="#">mug</a></li>
                                                <li><a href="#">product</a></li>
                                                <li><a href="#">learts</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Share on</span></td>
                                        <td class="va">
                                            <div class="product-share">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                                <a href="#"><i class="far fa-envelope"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        </div>
    </div>
</div>