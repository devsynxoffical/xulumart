<?php $__env->startSection('title', 'XuLu Mart | Online Shopping'); ?>
<?php $__env->startSection('meta_description', 'Shop quality products online at XuLu Mart. Fast delivery, great prices, and a wide range of categories.'); ?>

<?php $__env->startSection('content'); ?>
<?php
    $heroSlide = $sliders->first();
    $dealCountdown = $dealOfDay && $dealOfDay->deal_of_day_count
        ? \Carbon\Carbon::parse($dealOfDay->deal_of_day_count)->format('Y/m/d H:i:s')
        : \Carbon\Carbon::now()->addDays(1)->format('Y/m/d H:i:s');
?>


<section class="xm-hero">
    <div class="container" style="max-width:1280px;">
        <div class="xm-hero-inner">
            <div>
                <div class="xm-hero-eyebrow">Limited time only</div>
                <h1>Shop More, <span>Save More!</span></h1>
                <p class="xm-hero-sub">Discover amazing deals on your favorite products — quality handicrafts, fashion, home & more.</p>
                <div class="xm-hero-trust">
                    <span><i class="fas fa-tag"></i> Best Prices Guaranteed</span>
                    <span><i class="fas fa-lock"></i> Secure Payments</span>
                    <span><i class="fas fa-shipping-fast"></i> Fast Delivery</span>
                </div>
                <a href="<?php echo e(route('products')); ?>" class="xm-hero-cta">Explore Collection <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="xm-hero-media">
                <?php if($heroSlide): ?>
                    <a href="<?php echo e($heroSlide->link ?: route('products')); ?>">
                        <img src="<?php echo e(asset('images/slider/' . $heroSlide->image)); ?>" alt="XuLu Mart deals">
                    </a>
                <?php else: ?>
                    <img src="<?php echo e(asset('frontend/images/animation-banner-update.png')); ?>" alt="XuLu Mart">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="xm-hero-badge">UP TO<br>50% OFF</div>
</section>


<div class="xm-value-bar">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-3"><i class="fas fa-truck"></i> Free Shipping</div>
            <div class="col-6 col-md-3"><i class="fas fa-undo"></i> Easy Returns</div>
            <div class="col-6 col-md-3"><i class="fas fa-award"></i> Premium Quality</div>
            <div class="col-6 col-md-3"><i class="fas fa-headset"></i> 24/7 Support</div>
        </div>
    </div>
</div>


<?php if($sliders->count() > 1): ?>
<div class="section my-3 desktop-show">
    <div class="container">
        <div id="demoDesktop" class="carousel slide rounded" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                        <a href="<?php echo e($slider->link ?: '#'); ?>">
                            <img src="<?php echo e(asset('images/slider/' . $slider->image)); ?>" alt="Promotion" class="d-block w-100" style="max-height:320px;object-fit:cover;border-radius:12px;">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demoDesktop" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demoDesktop" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>


<section class="xm-section">
    <div class="container">
        <div class="xm-section-head justify-content-center text-center" style="display:block;">
            <h2>Shop By Category</h2>
            <p class="text-muted mb-0">Find exactly what you're looking for</p>
        </div>
        <div class="xm-cat-grid mt-4">
            <?php $__currentLoopData = $featured_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="xm-cat-card" href="<?php echo e(route('category.products', [$category->id, Str::slug($category->title)])); ?>">
                    <img src="<?php echo e(\App\Helpers\Media::url('category', $category->image, 'frontend/images/animation-banner-update.png')); ?>" alt="<?php echo e($category->title); ?>">
                    <div class="body">
                        <h3><?php echo e($category->title); ?></h3>
                        <span class="shop-link">Shop Now →</span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="xm-section xm-section-alt">
    <div class="container">
        <div class="xm-deal">
            <div>
                <div class="xm-deal-label">Deal of the Day</div>
                <h2>Grab It Before It's Gone!</h2>
                <p class="text-muted">Hurry! Limited stock available on today's featured offer.</p>
                <?php if($dealOfDay): ?>
                    <a href="<?php echo e(route('single.product', [$dealOfDay->id, Str::slug($dealOfDay->title)])); ?>" class="xm-hero-cta mt-2 d-inline-flex">Shop the Deal →</a>
                <?php else: ?>
                    <a href="<?php echo e(route('offer.products')); ?>" class="xm-hero-cta mt-2 d-inline-flex">Shop Offers →</a>
                <?php endif; ?>
            </div>
            <div>
                <?php if($dealOfDay): ?>
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-3 mb-md-0">
                            <img src="<?php echo e(asset('images/product/' . $dealOfDay->image)); ?>" alt="<?php echo e($dealOfDay->title); ?>" style="max-height:220px;object-fit:contain;">
                        </div>
                        <div class="col-md-7">
                            <h3 style="font-size:20px;margin-bottom:6px;"><?php echo e($dealOfDay->title); ?></h3>
                            <div class="xm-deal-price">
                                <?php if($dealOfDay->is_sale && $dealOfDay->discount_price > 0): ?>
                                    ৳<?php echo e($dealOfDay->discount_price); ?>

                                    <span class="old">৳<?php echo e($dealOfDay->price); ?></span>
                                <?php else: ?>
                                    ৳<?php echo e($dealOfDay->price); ?>

                                <?php endif; ?>
                            </div>
                            <?php if(!is_null($dealOfDay->qty)): ?>
                                <p class="mt-2 mb-1" style="font-size:13px;color:#05341A;font-weight:600;">Only <?php echo e($dealOfDay->qty); ?> items left!</p>
                                <div style="height:6px;background:#E8E0D8;border-radius:4px;overflow:hidden;">
                                    <div style="height:100%;width:<?php echo e(min(100, max(10, (int)$dealOfDay->qty))); ?>%;background:#FD6000;"></div>
                                </div>
                            <?php endif; ?>
                            <div class="xm-countdown countdown1" data-countdown="<?php echo e($dealCountdown); ?>">
                                <div class="box count"><strong class="amount">00</strong><span class="period">Hrs</span></div>
                                <div class="box count"><strong class="amount">00</strong><span class="period">Mins</span></div>
                                <div class="box count"><strong class="amount">00</strong><span class="period">Secs</span></div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <img src="<?php echo e(asset('frontend/images/animation-banner-update.png')); ?>" alt="Deal" style="width:100%;border-radius:12px;">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section class="xm-section">
    <div class="container">
        <div class="xm-section-head">
            <h2>New Arrivals</h2>
            <a href="<?php echo e(route('products')); ?>">View All →</a>
        </div>
        <div class="xm-product-grid">
            <?php $__currentLoopData = $newArrivalProducts->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="xm-product-card">
                    <span class="badge-new">NEW</span>
                    <a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>" class="thumb">
                        <img src="<?php echo e(asset('images/product/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>">
                    </a>
                    <div class="info">
                        <h3><a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>"><?php echo e($product->title); ?></a></h3>
                        <div class="price">
                            <?php if($product->is_sale == 1 && $product->discount_price > 0): ?>
                                ৳<?php echo e($product->discount_price); ?>

                            <?php else: ?>
                                ৳<?php echo e($product->price); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php if($flashSales->count() > 0): ?>
<section class="xm-section xm-section-alt">
    <div class="container">
        <div class="xm-section-head">
            <h2>Flash Sale</h2>
            <a href="<?php echo e(route('flashSale')); ?>">View All →</a>
        </div>
        <div class="products row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
            <?php $__currentLoopData = $flashSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="border rounded bg-white m-1">
                        <div class="product mb-1">
                            <div class="product-thumb">
                                <span class="product-badges"><span class="hot">Flash</span></span>
                                <a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>" class="image">
                                    <img class="rounded" src="<?php echo e(asset('images/product/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>">
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="title" style="font-size:14px;"><a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>"><?php echo e($product->title); ?></a></h3>
                                <span class="price">
                                    <?php if($product->is_sale == 1 && $product->discount_price > 0): ?>
                                        <span class="old">৳<?php echo e($product->price); ?></span>
                                        <span class="new">৳<?php echo e($product->discount_price); ?></span>
                                    <?php else: ?>
                                        <span class="new">৳<?php echo e($product->price); ?></span>
                                    <?php endif; ?>
                                </span>
                                <a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>" class="btn-order-now">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if($top_sales->count() > 0): ?>
<section class="xm-section">
    <div class="container">
        <div class="xm-section-head">
            <h2>Top Sellers</h2>
            <a href="<?php echo e(route('products')); ?>">Discover more →</a>
        </div>
        <div class="xm-product-grid">
            <?php $__currentLoopData = $top_sales->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="xm-product-card">
                    <a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>" class="thumb">
                        <img src="<?php echo e(asset('images/product/' . $product->image)); ?>" alt="<?php echo e($product->title); ?>">
                    </a>
                    <div class="info">
                        <h3><a href="<?php echo e(route('single.product', [$product->id, Str::slug($product->title)])); ?>"><?php echo e($product->title); ?></a></h3>
                        <div class="price">৳<?php echo e(($product->is_sale && $product->discount_price > 0) ? $product->discount_price : $product->price); ?></div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="xm-section xm-section-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2><?php echo e($home_about->title ?? 'About XuLu Mart'); ?></h2>
                <div class="text-muted"><?php echo $home_about->description ?? 'Quality products with trusted delivery across Bangladesh.'; ?></div>
            </div>
            <div class="col-md-6">
                <?php if(!empty($home_about->youtube_link)): ?>
                    <div class="ratio ratio-16x9" style="border-radius:12px;overflow:hidden;">
                        <iframe src="<?php echo e($home_about->youtube_link); ?>" title="About XuLu Mart" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php if(isset($faqs) && $faqs->count()): ?>
<section class="xm-section">
    <div class="container">
        <div class="text-center mb-4">
            <h2>FAQ</h2>
            <p class="text-muted">Frequently asked questions</p>
        </div>
        <div class="accordion" id="homeFaq">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accordion-item" style="border:1px solid #E8E0D8;border-radius:8px;margin-bottom:8px;overflow:hidden;">
                    <h3 class="accordion-header" id="faq-h-<?php echo e($index); ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c-<?php echo e($index); ?>">
                            <?php echo e($faq->title); ?>

                        </button>
                    </h3>
                    <div id="faq-c-<?php echo e($index); ?>" class="accordion-collapse collapse" data-bs-parent="#homeFaq">
                        <div class="accordion-body"><?php echo $faq->body; ?></div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.laramart.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hassan/Downloads/xulumart/resources/views/pages/index.blade.php ENDPATH**/ ?>