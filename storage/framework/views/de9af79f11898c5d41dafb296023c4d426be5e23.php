

<?php
    $seo_business = App\Models\Setting::find(1);
    $seoTitle = $product->meta_title ?: ($product->title . ' | ' . (optional($seo_business)->name ?? 'Xulu Mart'));
    $seoDescription = $product->meta_description ?: Str::limit(strip_tags($product->short_description ?: $product->description), 155);
?>
<?php $__env->startSection('title', $seoTitle); ?>
<?php $__env->startSection('meta_description', $seoDescription); ?>

<?php $__env->startSection('content'); ?>
<style>
    @media  only screen and (max-width: 479px){
        .product-buttons .btn {
            padding: 10px 20px !important;
            letter-spacing: 0px !important;
            font-size: 16px;
        }
    }
    .pd-price-row{display:flex;align-items:center;gap:12px;margin:10px 0 16px;flex-wrap:wrap;}
    .pd-price-new{font-size:26px;font-weight:700;color:#FD6000;}
    .pd-price-old{font-size:17px;color:#999;text-decoration:line-through;}
    .pd-discount-badge{background:#05341A;color:#fff;font-size:12px;font-weight:600;padding:3px 9px;border-radius:20px;}
    .pd-stock{font-weight:600;font-size:14px;margin-bottom:14px;}
    .pd-stock.in-stock{color:#1a7d3a;}
    .pd-stock.low-stock{color:#c98a00;}
    .pd-stock.out-stock{color:#c0392b;}
    .pd-buy-now-btn{background:#FD6000 !important;border-color:#FD6000 !important;color:#fff !important;}
    .pd-buy-now-btn:hover{background:#e05500 !important;border-color:#e05500 !important;}
    .pd-tabs .nav-link{cursor:pointer;}
    .pd-gallery-thumb{cursor:pointer;border:2px solid transparent;border-radius:6px;overflow:hidden;}
    .pd-gallery-thumb.active-thumb{border-color:#FD6000;}
    .pd-gallery-thumb img{width:100%;height:80px;object-fit:cover;}
    .pd-main-image img{width:100%;border-radius:8px;object-fit:cover;max-height:520px;}

    /* Zoom icon overlay on the main image */
    .pd-zoom-btn{
        position:absolute; right:14px; bottom:14px;
        width:38px; height:38px; border-radius:8px; border:none;
        background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.18);
        display:flex; align-items:center; justify-content:center;
        font-size:15px; color:#1B1B1B; cursor:pointer;
        transition: transform .15s ease;
    }
    .pd-zoom-btn:hover{ transform: scale(1.08); color:#FD6000; }

    /* Thumbnail carousel with prev/next arrows */
    .pd-thumb-carousel{ display:flex; align-items:center; gap:8px; }
    .pd-thumb-track{
        display:flex; gap:8px; overflow-x:auto; scroll-behavior:smooth;
        flex:1; padding-bottom:4px;
    }
    .pd-thumb-track::-webkit-scrollbar{ height:4px; }
    .pd-thumb-track .pd-gallery-thumb{ flex:0 0 70px; width:70px; }
    .pd-thumb-track .pd-gallery-thumb img{ height:70px; }
    .pd-thumb-arrow{
        flex:0 0 30px; width:30px; height:30px; border-radius:50%;
        border:1px solid #ECECEC; background:#fff; color:#1B1B1B;
        display:flex; align-items:center; justify-content:center; cursor:pointer;
        transition: background .15s ease, color .15s ease;
    }
    .pd-thumb-arrow:hover{ background:#FD6000; color:#fff; border-color:#FD6000; }

    /* Share row */
    .pd-share-row{ display:flex; align-items:center; gap:10px; }
    .pd-share-label{ font-weight:600; font-size:13.5px; color:#6B7280; margin-right:2px; }
    .pd-share-row a{
        width:32px; height:32px; border-radius:50%; border:1px solid #ECECEC;
        display:flex; align-items:center; justify-content:center;
        color:#6B7280; font-size:13px; transition: all .15s ease;
    }
    .pd-share-row a:hover{ background:#FD6000; border-color:#FD6000; color:#fff; }

    /* --- Visual polish pass: shadows, hover states, active tab indicator --- */
    .pd-main-image{
        border: 1px solid #ECECEC;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0,0,0,.06);
    }
    .pd-gallery-thumb{
        transition: border-color .2s ease, transform .2s ease;
    }
    .pd-gallery-thumb:hover{
        transform: translateY(-2px);
    }
    .product-buttons .btn{
        border-radius: 8px !important;
        font-weight: 700;
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .product-buttons .btn:not(:disabled):hover{
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(0,0,0,.12);
    }
    .pd-tabs .nav-link{
        font-weight: 600;
        color: #6B7280;
        border: none;
        border-bottom: 2px solid transparent;
        padding: 10px 4px;
        margin-right: 24px;
    }
    .pd-tabs .nav-link.active{
        color: #1B1B1B;
        border-bottom-color: #FD6000;
        background: transparent;
    }
    .product-title{
        font-weight: 800;
    }
</style>

    <!-- Breadcrumbs -->
    <div class="page-title-section section xm-breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <ul class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                            <?php if($category): ?>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('category.products', [$category->id, Str::slug($category->title)])); ?>"><?php echo e($category->title); ?></a></li>
                            <?php endif; ?>
                            <li class="breadcrumb-item active"><?php echo e($product->title); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Products Section Start -->
    <div class="section section-padding border-bottom xm-product-page">
        <div class="container">
            <div class="row learts-mb-n40">

                <!-- Product Images (LEFT) Start -->
                <div class="col-lg-6 col-12" data-aos="fade-right">
                    <div class="product-images">
                        

                        <div class="pd-main-image mb-3" style="position:relative;">
                            <img id="pdMainImage" src="<?php echo e(asset('images/product/' . $gallery->first())); ?>" alt="<?php echo e($product->title); ?>">
                            <button type="button" id="pdZoomBtn" class="pd-zoom-btn" title="Zoom image"><i class="fa fa-search"></i></button>
                        </div>

                        <?php if($gallery->count() > 1): ?>
                        <div class="pd-thumb-carousel">
                            <button type="button" class="pd-thumb-arrow pd-thumb-prev"><i class="fa fa-chevron-left"></i></button>
                            <div class="pd-thumb-track" id="pdThumbRow">
                                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="pd-gallery-thumb <?php echo e($loop->first ? 'active-thumb' : ''); ?>" data-image="<?php echo e(asset('images/product/' . $g)); ?>">
                                        <img src="<?php echo e(asset('images/product/' . $g)); ?>" alt="<?php echo e($product->title); ?> thumbnail <?php echo e($loop->iteration); ?>">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button type="button" class="pd-thumb-arrow pd-thumb-next"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <?php endif; ?>

                        <!-- Share Row -->
                        <div class="pd-share-row mt-3">
                            <span class="pd-share-label">Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(url()->current())); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e(urlencode($product->title)); ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="mailto:?subject=<?php echo e(urlencode($product->title)); ?>&body=<?php echo e(urlencode(url()->current())); ?>" title="Email"><i class="fa fa-envelope"></i></a>
                            <a href="https://pinterest.com/pin/create/button/?url=<?php echo e(urlencode(url()->current())); ?>&media=<?php echo e(urlencode(asset('images/product/'.$gallery->first()))); ?>&description=<?php echo e(urlencode($product->title)); ?>" target="_blank" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(urlencode(url()->current())); ?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://wa.me/?text=<?php echo e(urlencode($product->title . ' - ' . url()->current())); ?>" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://t.me/share/url?url=<?php echo e(urlencode(url()->current())); ?>&text=<?php echo e(urlencode($product->title)); ?>" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Product Images (LEFT) End -->

                <!-- Product Summary (RIGHT) Start -->
                <div class="col-lg-6 col-12 learts-mb-40" data-aos="fade-left">
                    <div class="product-summery">

                        <h1 class="product-title"><?php echo e($product->title); ?></h1>

                        <?php if($product->short_description): ?>
                            <div class="product-description">
                                <p><?php echo $product->short_description; ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Price -->
                        <div class="pd-price-row" id="pdPriceRow">
                            <?php if($hasDiscount): ?>
                                <span class="pd-price-new" id="pdPriceNew"><?php echo e(env('CURRENCY')); ?><?php echo e($product->discount_price); ?></span>
                                <span class="pd-price-old" id="pdPriceOld"><?php echo e(env('CURRENCY')); ?><?php echo e($product->price); ?></span>
                            <?php else: ?>
                                <span class="pd-price-new" id="pdPriceNew"><?php echo e(env('CURRENCY')); ?><?php echo e($product->price); ?></span>
                                <span class="pd-price-old" id="pdPriceOld" style="display:none;"></span>
                            <?php endif; ?>
                            <?php if($discountPercent > 0): ?>
                                <span class="pd-discount-badge"><?php echo e($discountPercent); ?>% OFF</span>
                            <?php endif; ?>
                        </div>

                        <?php if($product->variation->count() > 0): ?>
                        <!-- Size / Variation Selector -->
                        <div class="pd-size-row mb-3">
                            <div class="mb-1" style="font-weight:600;font-size:13.5px;">Select Size</div>
                            <div class="pd-size-pills">
                                <?php $__currentLoopData = $product->variation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <button type="button"
                                        class="pd-size-pill <?php echo e($loop->first ? 'active' : ''); ?>"
                                        data-variation-id="<?php echo e($v->id); ?>"
                                        data-price="<?php echo e($v->price); ?>"
                                        data-qty="<?php echo e($v->qty); ?>"><?php echo e($v->variant); ?></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <input type="hidden" id="selected_variation_id" value="<?php echo e($product->variation->first()->id); ?>">
                        </div>
                        <style>
                            .pd-size-pills{ display:flex; flex-wrap:wrap; gap:8px; }
                            .pd-size-pill{
                                min-width:44px; height:44px; padding:0 14px; border-radius:50%;
                                border:1px solid #ECECEC; background:#fff; font-weight:700; font-size:13.5px;
                                transition: all .15s ease;
                            }
                            .pd-size-pill:hover{ border-color:#FD6000; }
                            .pd-size-pill.active{ background:#FD6000; border-color:#FD6000; color:#fff; }
                        </style>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var pills = document.querySelectorAll('.pd-size-pill');
                                var hiddenInput = document.getElementById('selected_variation_id');
                                var priceNew = document.getElementById('pdPriceNew');
                                var priceOld = document.getElementById('pdPriceOld');
                                var qtyInput = document.getElementById('qty');
                                var stockBox = document.getElementById('pdStockBox');

                                pills.forEach(function (pill) {
                                    pill.addEventListener('click', function () {
                                        pills.forEach(function (p) { p.classList.remove('active'); });
                                        pill.classList.add('active');
                                        hiddenInput.value = pill.getAttribute('data-variation-id');

                                        var price = pill.getAttribute('data-price');
                                        var qty = pill.getAttribute('data-qty');

                                        if (priceNew) { priceNew.textContent = '<?php echo e(env("CURRENCY")); ?>' + price; }
                                        if (priceOld) { priceOld.style.display = 'none'; }

                                        if (qtyInput) {
                                            var qtyNum = qty === '' || qty === null ? null : parseInt(qty, 10);
                                            qtyInput.setAttribute('data-max', qtyNum === null ? '' : qtyNum);
                                            qtyInput.disabled = (qtyNum !== null && qtyNum <= 0);
                                            if (qtyNum !== null && parseInt(qtyInput.value, 10) > qtyNum) {
                                                qtyInput.value = Math.max(1, qtyNum);
                                            }
                                        }

                                        if (stockBox) {
                                            var qtyNum2 = qty === '' || qty === null ? null : parseInt(qty, 10);
                                            var outOfStock = (qtyNum2 !== null && qtyNum2 <= 0);

                                            if (outOfStock) {
                                                stockBox.innerHTML = '<i class="fa fa-times-circle"></i> Out of Stock';
                                                stockBox.className = 'pd-stock out-stock';
                                            } else if (qtyNum2 !== null && qtyNum2 <= 5) {
                                                stockBox.innerHTML = '<i class="fa fa-exclamation-circle"></i> Only ' + qtyNum2 + ' left in stock - order soon';
                                                stockBox.className = 'pd-stock low-stock';
                                            } else {
                                                stockBox.innerHTML = '<i class="fa fa-check-circle"></i> In Stock';
                                                stockBox.className = 'pd-stock in-stock';
                                            }

                                            // Keep Add to Cart / Buy Now in sync with the
                                            // selected size's own stock, not just the base product.
                                            document.querySelectorAll('.product-buttons .btn').forEach(function (btn) {
                                                if (btn.classList.contains('btn-outline-hover-dark') || btn.classList.contains('pd-buy-now-btn')) {
                                                    btn.disabled = outOfStock;
                                                }
                                            });
                                        }
                                    });
                                });
                            });
                        </script>
                        <?php endif; ?>

                        <!-- Availability / Stock -->
                        <?php if(is_null($available_stock)): ?>
                            <p class="pd-stock in-stock" id="pdStockBox"><i class="fa fa-check-circle"></i> In Stock</p>
                        <?php elseif($available_stock <= 0): ?>
                            <p class="pd-stock out-stock" id="pdStockBox"><i class="fa fa-times-circle"></i> Out of Stock</p>
                        <?php elseif($available_stock <= 5): ?>
                            <p class="pd-stock low-stock" id="pdStockBox"><i class="fa fa-exclamation-circle"></i> Only <?php echo e($available_stock); ?> left in stock - order soon</p>
                        <?php else: ?>
                            <p class="pd-stock in-stock" id="pdStockBox"><i class="fa fa-check-circle"></i> In Stock</p>
                        <?php endif; ?>

                        <!-- Quantity Selector -->
                        <!-- Buy Now + Qty / Add To Cart (reference layout) -->
                        <div class="product-buttons mt-4">
                            <button type="button" class="btn xm-btn-buy-now mb-2" onclick="buyNow(<?php echo e($product->id); ?>)" <?php echo e((!is_null($available_stock) && $available_stock <= 0) ? 'disabled' : ''); ?>>
                                BUY NOW
                            </button>
                            <div class="row-actions" style="display:grid;grid-template-columns:auto 1fr;gap:10px;align-items:center;">
                                <div class="xm-qty product-quantity" style="display:inline-flex;">
                                    <span class="qty-btn minus" style="width:40px;height:44px;border:1px solid #E8E0D8;background:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;"><i class="ti-minus"></i></span>
                                    <input type="text" id="qty" class="input-qty" value="1" data-max="<?php echo e($available_stock); ?>" <?php echo e((!is_null($available_stock) && $available_stock <= 0) ? 'disabled' : ''); ?> style="width:52px;height:44px;text-align:center;border:1px solid #E8E0D8;border-left:0;border-right:0;">
                                    <span class="qty-btn plus" style="width:40px;height:44px;border:1px solid #E8E0D8;background:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;"><i class="ti-plus"></i></span>
                                </div>
                                <button type="button" class="btn xm-btn-add-cart w-100 added_to_cart_<?php echo e($product->id); ?>"
                                    onclick="addToCart(<?php echo e($product->id); ?>)" <?php echo e((!is_null($available_stock) && $available_stock <= 0) ? 'disabled' : ''); ?>>
                                    ADD TO CART
                                </button>
                            </div>
                        </div>

                        <div class="product-meta mt-3">
                            <table>
                                <tbody>
                                    <?php if($category): ?>
                                    <tr>
                                        <td class="label"><span>Category</span></td>
                                        <td class="value">
                                            <ul class="product-category">
                                                <li><a href="<?php echo e(route('category.products', [$category->id, Str::slug($category->title)])); ?>"> <?php echo e($category->title); ?> </a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if($product->code): ?>
                                    <tr>
                                        <td class="label"><span>SKU</span></td>
                                        <td class="value"><?php echo e($product->code); ?></td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- Product Summary (RIGHT) End -->

            </div>
        </div>
    </div>
    <!-- Single Products Section End -->

    <!-- Single Products Information Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">

            <ul class="nav product-info-tab-list pd-tabs">
                <li><a class="active" data-bs-toggle="tab" href="#tab-description">Product Description</a></li>
                <?php if($product->description || $product->features): ?>
                    <li><a data-bs-toggle="tab" href="#tab-additional">Additional Description</a></li>
                <?php endif; ?>
            </ul>
            <div class="tab-content product-infor-tab-content">
                <div class="tab-pane fade show active" id="tab-description">
                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <h2 class="visually-hidden" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Product Description</h2>
                            <?php if($product->short_description): ?>
                                <p><?php echo $product->short_description; ?></p>
                            <?php else: ?>
                                <p class="text-muted">No description available for this product yet.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if($product->description || $product->features): ?>
                <div class="tab-pane fade" id="tab-additional">
                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <h2 class="visually-hidden" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Additional Description</h2>
                            <?php if($product->description): ?>
                                <div class="mb-3"><?php echo $product->description; ?></div>
                            <?php endif; ?>
                            <?php if($product->features): ?>
                                <h3>Features</h3>
                                <div><?php echo $product->features; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <!-- Single Products Information Section End -->

    <!-- Recommended Products Section Start -->
    <div class="section section-padding" style="background: var(--brand-body-bg-1, #FAFAFA);" data-aos="fade-up">
        <div class="container">

            <div class="section-title2 text-center mb-4">
                <h2 class="title">You Might Also Like</h2>
                <p>More picks based on this product</p>
            </div>

            <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <?php $__currentLoopData = $similar_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col col-6">
                        <div class="border rounded bg-white m-1">
                            <div class="product mb-1">
                                <div class="scroll">
                                    <div class="product-thumb">
                                        <span class="product-badges">
                                            <?php if($sp->is_sale == 1 && $sp->discount_price > 0): ?>
                                                <span class="onsale">Sale</span>
                                            <?php endif; ?>
                                        </span>
                                        <a href="<?php echo e(route('single.product', [$sp->id, Str::slug($sp->title)])); ?>" class="image">
                                            <img class="rounded" src="<?php echo e(asset('images/product/'. $sp->image)); ?>" alt="<?php echo e($sp->title); ?>">
                                            <?php if($sp->hover_image): ?>
                                                <img class="image-hover rounded border" src="<?php echo e(asset('images/product/'. $sp->hover_image)); ?>" alt="<?php echo e($sp->title); ?>">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="<?php echo e(route('single.product', [$sp->id, Str::slug($sp->title)])); ?>"><?php echo e($sp->title); ?></a></h6>
                                        <span class="price">
                                            <?php if($sp->is_sale == 1 && $sp->discount_price > 0): ?>
                                                <span class="old"><?php echo e(env('CURRENCY')); ?><?php echo e($sp->price); ?></span>
                                                <span class="new"><?php echo e(env('CURRENCY')); ?><?php echo e($sp->discount_price); ?></span>
                                            <?php else: ?>
                                                <span class="new"><?php echo e(env('CURRENCY')); ?><?php echo e($sp->price); ?></span>
                                            <?php endif; ?>
                                        </span>
                                        <a href="<?php echo e(route('single.product', [$sp->id, Str::slug($sp->title)])); ?>" class="btn btn-order-now">
                                            Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Recommended Products Section End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Gallery: clicking a thumbnail swaps the main image.
            var mainImage = document.getElementById('pdMainImage');
            document.querySelectorAll('.pd-gallery-thumb').forEach(function (thumb) {
                thumb.addEventListener('click', function () {
                    mainImage.src = this.getAttribute('data-image');
                    document.querySelectorAll('.pd-gallery-thumb').forEach(function (t) { t.classList.remove('active-thumb'); });
                    this.classList.add('active-thumb');
                });
            });

            // Thumbnail carousel arrows: scroll the track left/right.
            var thumbTrack = document.getElementById('pdThumbRow');
            var prevBtn = document.querySelector('.pd-thumb-prev');
            var nextBtn = document.querySelector('.pd-thumb-next');
            if (thumbTrack && prevBtn && nextBtn) {
                prevBtn.addEventListener('click', function () { thumbTrack.scrollBy({ left: -160, behavior: 'smooth' }); });
                nextBtn.addEventListener('click', function () { thumbTrack.scrollBy({ left: 160, behavior: 'smooth' }); });
            }

            // Zoom button: open the current main image full-size in a new tab
            // (simple, dependency-free "zoom" - no lightbox library needed).
            var zoomBtn = document.getElementById('pdZoomBtn');
            if (zoomBtn && mainImage) {
                zoomBtn.addEventListener('click', function () {
                    window.open(mainImage.src, '_blank');
                });
            }

            // Quantity stepper: never allow exceeding available stock.
            var qtyInput = document.getElementById('qty');
            if (qtyInput) {
                var max = parseInt(qtyInput.getAttribute('data-max'), 10) || 0;
                document.querySelectorAll('.qty-btn').forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        setTimeout(function () {
                            var val = parseInt(qtyInput.value, 10) || 1;
                            if (max > 0 && val > max) {
                                qtyInput.value = max;
                            }
                        }, 0);
                    });
                });
            }
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.laramart.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hassan/Downloads/xulumart/resources/views/pages/product/details.blade.php ENDPATH**/ ?>