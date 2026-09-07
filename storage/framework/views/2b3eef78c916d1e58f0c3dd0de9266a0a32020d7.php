<!-- OffCanvas Search Start -->
<div id="offcanvas-search" class="offcanvas offcanvas-search">
    <div class="inner">
        <div class="offcanvas-search-form">
            <button class="offcanvas-close">×</button>
            <form action="#">
                <div class="row mb-n3">
                    <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                    <div class="col-lg-4 col-12 mb-3">
                        <select class="search-select select2-basic">
                            <option value="0">All Categories</option>
                            <!-- <option value="kids-babies">Kids &amp; Babies</option>
                            <option value="home-decor">Home Decor</option>
                            <option value="gift-ideas">Gift ideas</option>
                            <option value="kitchen">Kitchen</option>
                            <option value="toys">Toys</option>
                            <option value="kniting-sewing">Kniting &amp; Sewing</option>
                            <option value="pots">Pots</option> -->
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span>#
                Hit enter to search or ESC to close</span></p>

    </div>
</div>
<!-- OffCanvas Search End -->

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>

        
        <?php
        // Get all the wishlist items for the currently logged-in user and eager load related products
            if (auth()->check()) {
                // Get all the wishlist items for the currently logged-in user and eager load related products
                $whishLists = \App\Models\Wishlist::where('customer_id', auth()->user()->id)
                    ->with('product')
                    ->get();
            } else {
                $whishLists = collect(); // If the user is not logged in, set $whishLists to an empty collection
            }
        ?>



        <?php if(count($whishLists) > 0): ?>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <?php $__currentLoopData = $whishLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <li>
                        <?php if($wishlist->product && $wishlist->product->image): ?>
                            <a href="#" class="image">
                                <img src="<?php echo e(asset('images/product/' . $wishlist->product->image)); ?>" alt="Product Image">
                            </a>
                        <?php endif; ?>
                
                        <div class="content">
                            <a href="#" class="title"><?php echo e($wishlist->product->title ?? 'N/A'); ?></a>
                            <span class="quantity-price">1 x <span class="amount"><?php echo e($wishlist->product->price ?? 0); ?></span></span>
                
                            
                            <a href="<?php echo e(route('wishlist.remove.lara', $wishlist->id)); ?>" class="remove" id="remove_whislist_<?php echo e($wishlist->id); ?>">×</a>
                
                            
                            <?php if($wishlist->product && $wishlist->product->id): ?>
                                <a onclick="addToCart(<?php echo e($wishlist->product->id); ?>)" class="ml-auto pt-2">
                                    <span class="bg-success py-1 px-2 text-white" style="font-size: 12px">Add To Cart</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </ul>
            </div>
        <?php else: ?>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <div class="content">
                            <a href="#" class="title">No Product Found!</a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
        



        <div class="foot">
            <div class="buttons">
                
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart ">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list" id="cart_sidebars">
                <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('single.product', [$cart->id, Str::slug($cart->name)])); ?>" class="image"><img
                                src="<?php echo e(asset('images/product/' . $cart->options->image)); ?>"
                                alt="Cart product Image"></a>

                        <div class="content">
                            <a href="<?php echo e(route('single.product', [$cart->id, Str::slug($cart->name)])); ?>"
                                class="title"><?php echo e($cart->name); ?></a>
                            <span class="quantity-price"><?php echo e($cart->qty); ?> x <span
                                    class="amount"><?php echo e(env('CURRENCY')); ?><?php echo e($cart->price); ?>

                                    <?php echo e(env('UAE_CURRENCY')); ?></span></span>

                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>

        <div class="foot">
            <div class="sub-total">
                <strong>Subtotal :</strong>
                <span class="amount" id="subTotal"><?php echo e(env('CURRENCY')); ?><?php echo e(Cart::subtotal()); ?>

                    <?php echo e(env('UAE_CURRENCY')); ?></span>
            </div>
            <div class="buttons">
                <a href="<?php echo e(route('carts')); ?>" class="btn btn-dark btn-hover-primary">view cart</a>
                <a href="<?php echo e(route('checkout')); ?>" class="btn btn-outline-dark">checkout</a>
            </div>
            
        </div>



    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="offcanvas-menu">
            <ul>
                <li><a href="<?php echo e(route('index')); ?>"><span class="menu-text">Home</span></a></li>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($category->child->count() > 0): ?>
                        <li class="has-children">
                            <a href="<?php echo e(route('category.products', [$category->id, Str::slug($category->title)])); ?>"><span class="menu-text"><?php echo e($category->title); ?></span></a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $category->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('category.products', [$sub->id, Str::slug($sub->title)])); ?>"><span class="menu-text"><?php echo e($sub->title); ?></span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('category.products', [$category->id, Str::slug($category->title)])); ?>"><span class="menu-text"><?php echo e($category->title); ?></span></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('products')); ?>"><span class="menu-text">Shop</span></a></li>
                <li><a href="<?php echo e(route('flashSale')); ?>"><span class="menu-text">Flash Sale</span></a></li>
                <li class="has-children"><a href="#"><span class="menu-text">Others</span></a>
                <ul class="sub-menu">
                    <li><a href="<?php echo e(route('about')); ?>"><span class="menu-text">About us</span></a></li>
                    <li><a href="<?php echo e(route('contact')); ?>"><span class="menu-text">Contact Us</span></a></li>
                </ul>
                </li>
                <li><a href="<?php echo e(route('login')); ?>">Sign in</a></li>
                <li><a href="<?php echo e(route('register')); ?>">Sign up</a></li>
            </ul>
        </div>

        <div class="offcanvas-buttons">
            <div class="header-tools">
                <div class="header-login">
                    <a href="<?php echo e(route('register')); ?>"><i class="far fa-user"></i></a>
                </div>
                <div class="header-wishlist">
                    <a href="#"><span>3</span><i class="far fa-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="offcanvas-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<!-- OffCanvas Search End -->

<div class="offcanvas-overlay"></div><?php /**PATH /Users/hassan/Downloads/xulumart/resources/views/layouts/laramart/canvases.blade.php ENDPATH**/ ?>