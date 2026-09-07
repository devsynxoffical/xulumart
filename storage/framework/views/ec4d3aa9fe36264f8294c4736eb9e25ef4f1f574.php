<?php $__env->startSection('title'); ?>
	<?php echo e('Checkout' . ' | '. env('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php
    $discount = 0;
    if(Session::has('coupon_discount')){
        $discount = Session::get('coupon_discount');
    }
    $subtotal = Cart::subtotal();
    $grandTotal = $subtotal - $discount;
?>

<?php $__env->startSection('content'); ?>

<!-- Start of Main Checkout -->
<main class="main checkout checkout-page-wrapper">
    <div class="container">

        <!-- Top Header & Breadcrumb Info -->
        <div class="checkout-header-bar">
            <div class="checkout-title-area">
                <h1 class="checkout-main-title">
                    <i class="fas fa-shopping-bag" style="font-size: 24px; color: var(--brand-secondary, #FD6000);"></i>
                    Checkout
                </h1>
                <div class="checkout-security-pill">
                    <i class="fas fa-shield-alt"></i> 256-Bit SSL Encrypted &amp; Secure
                </div>
            </div>

            <?php if(auth()->guard()->guest()): ?>
                <div class="checkout-login-banner">
                    <i class="fas fa-user-circle" style="font-size: 18px;"></i>
                    <span>Returning customer? <a href="<?php echo e(route('login')); ?>">Click here to Login</a> for faster checkout.</span>
                </div>
            <?php endif; ?>
        </div>

        <form class="form checkout-form" action="<?php echo e(route('order.create')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger" style="border-radius: 12px; margin-bottom: 24px;">
                    <div style="font-weight: 700; margin-bottom: 6px;">
                        <i class="fas fa-exclamation-triangle mr-1"></i> Please fix the following before placing your order:
                    </div>
                    <ul class="mb-0 pl-3">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="row">
                <!-- Left Column: Shipping & Contact Form -->
                <div class="col-lg-7 pr-lg-4">
                    
                    <!-- Card 1: Delivery Information -->
                    <div class="checkout-card">
                        <div class="checkout-card-header">
                            <div class="step-badge">1</div>
                            <h2 class="card-header-title">Delivery &amp; Customer Details</h2>
                        </div>

                        <!-- Delivery Zone Cards -->
                        <div class="checkout-form-group">
                            <label>Choose Shipping Destination</label>
                            <div class="zone-selector-grid">
                                <label class="zone-card-label active" id="zone-inside-card">
                                    <input type="radio" name="shipping_zone" value="inside" checked>
                                    <div>
                                        <span class="zone-card-title"><i class="fas fa-truck text-success mr-1"></i> Inside Bangladesh</span>
                                        <span class="zone-card-subtitle">Standard delivery across all 64 districts</span>
                                    </div>
                                </label>
                                <label class="zone-card-label" id="zone-outside-card">
                                    <input type="radio" name="shipping_zone" value="outside">
                                    <div>
                                        <span class="zone-card-title"><i class="fas fa-plane text-info mr-1"></i> Outside Bangladesh</span>
                                        <span class="zone-card-subtitle">International worldwide shipping</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Full Name & Email -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-group">
                                    <label><span class="required-star">*</span> Full Name</label>
                                    <input type="text" placeholder="Enter your full name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name', optional(Auth::user())->name)); ?>" required>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-group">
                                    <label>Email Address</label>
                                    <input type="email" placeholder="example@email.com" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email', optional(Auth::user())->email)); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Number & District -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-group">
                                    <label><span class="required-star">*</span> Mobile Number</label>
                                    <input type="tel" placeholder="01XXXXXXXXX" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone', optional(Auth::user())->phone)); ?>" required>
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6" id="district-group">
                                <div class="checkout-form-group">
                                    <label><span class="required-star">*</span> District / City</label>
                                    <select name="district_id" id="district_id" class="form-control <?php $__errorArgs = ['district_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                        <option value="">Select Your District</option>
                                        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($district->id); ?>" <?php echo e(old('district_id') == $district->id ? 'selected' : ''); ?>><?php echo e($district->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['district_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Area / Thana & Post Code -->
                        <div class="row">
                            <div class="col-md-6" id="area-group">
                                <div class="checkout-form-group">
                                    <label><span class="required-star">*</span> Area / Thana</label>
                                    <select name="area_id" id="areas" class="form-control <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value="">Select Area / Thana</option>
                                    </select>
                                    <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-group">
                                    <label>Postal / ZIP Code</label>
                                    <input type="text" placeholder="e.g. 1205" class="form-control" name="post_code" value="<?php echo e(old('post_code')); ?>">
                                </div>
                            </div>
                        </div>

                        <!-- Full Street Address -->
                        <div class="checkout-form-group">
                            <label><span class="required-star">*</span> Full Delivery Address</label>
                            <input type="text" placeholder="House/Flat number, Road name, Landmark, Area..."
                                class="form-control <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="shipping_address" value="<?php echo e(old('shipping_address', optional(Auth::user())->address)); ?>" required>
                            <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="invalid-feedback"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- City for outside Bangladesh -->
                        <div class="checkout-form-group" id="city-group">
                            <label>City / State</label>
                            <input type="text" placeholder="City or State name" class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="city" value="<?php echo e(old('city')); ?>">
                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Order notes -->
                        <div class="checkout-form-group mb-0">
                            <label for="order-notes">Order Notes (Optional)</label>
                            <textarea class="form-control" id="order-notes" name="order-notes"
                                placeholder="Special instructions for delivery, e.g. landmark or preferred delivery time..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Sticky Order Summary & Payment -->
                <div class="col-lg-5">
                    <div class="order-summary-card">
                        <div class="checkout-card-header">
                            <div class="step-badge">2</div>
                            <h2 class="card-header-title">Order Summary</h2>
                            <span class="badge badge-pill badge-light ml-auto" style="font-size: 13px; font-weight: 700; color: var(--brand-primary, #05341A); background: #E5E7EB;">
                                <?php echo e(Cart::count()); ?> <?php echo e(Cart::count() == 1 ? 'item' : 'items'); ?>

                            </span>
                        </div>

                        <!-- Cart items list -->
                        <div class="order-items-wrapper">
                            <?php $__empty_1 = true; $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="order-item-row">
                                    <?php if(!empty($cart->options->image)): ?>
                                        <img src="<?php echo e(asset('images/product/' . $cart->options->image)); ?>" alt="<?php echo e($cart->name); ?>" class="order-item-img">
                                    <?php else: ?>
                                        <div class="order-item-img d-flex align-items-center justify-content-center text-muted">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="order-item-info">
                                        <div class="order-item-title"><?php echo e($cart->name); ?></div>
                                        <div class="order-item-qty">Qty: <?php echo e($cart->qty); ?></div>
                                    </div>
                                    <div class="order-item-price">
                                        <?php echo e(env('CURRENCY')); ?><?php echo e(number_format($cart->qty * $cart->price, 2)); ?> <?php echo e(env('UAE_CURRENCY')); ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="text-center py-4 text-muted">
                                    <i class="fas fa-shopping-cart fa-2x mb-2"></i>
                                    <p class="mb-0">Your cart is empty</p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Cost Breakdown Table -->
                        <div class="totals-table-wrapper">
                            <div class="totals-row">
                                <span>Sub Total</span>
                                <span class="font-weight-bold text-dark"><?php echo e(env('CURRENCY')); ?><?php echo e(number_format((float)str_replace(',', '', $subtotal), 2)); ?> <?php echo e(env('UAE_CURRENCY')); ?></span>
                            </div>
                            <?php if($discount > 0): ?>
                                <div class="totals-row discount-row">
                                    <span><i class="fas fa-tag mr-1"></i> Coupon Discount</span>
                                    <span>-<?php echo e(env('CURRENCY')); ?><?php echo e(number_format($discount, 2)); ?> <?php echo e(env('UAE_CURRENCY')); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="totals-row">
                                <span>Shipping Fee</span>
                                <span class="text-success font-weight-bold">Calculated on checkout</span>
                            </div>
                            <div class="totals-row grand-total">
                                <span>Grand Total</span>
                                <span class="grand-total-amount"><?php echo e(env('CURRENCY')); ?><?php echo e(number_format((float)str_replace(',', '', $grandTotal), 2)); ?> <?php echo e(env('UAE_CURRENCY')); ?></span>
                            </div>
                        </div>

                        <!-- Payment Methods -->
                        <div class="payment-methods" id="payment_method">
                            <label style="font-size: 14px; font-weight: 700; color: #1F2937; margin-bottom: 10px;">
                                <span class="required-star">*</span> Select Payment Method
                            </label>

                            <label class="pm-option" data-target="cod">
                                <input type="radio" name="payment_method" value="Cash on Delivery" checked>
                                <span class="pm-label"><i class="fas fa-money-bill-wave text-success mr-1"></i> Cash On Delivery (COD)</span>
                            </label>

                            <label class="pm-option" data-target="card">
                                <input type="radio" name="payment_method" value="Card">
                                <span class="pm-label"><i class="fas fa-credit-card text-primary mr-1"></i> Debit / Credit Card</span>
                                <span class="pm-icons">
                                    <i class="fab fa-cc-visa"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                    <i class="fab fa-cc-amex"></i>
                                </span>
                            </label>

                            <label class="pm-option" data-target="bkash">
                                <input type="radio" name="payment_method" value="Bkash">
                                <span class="pm-label">bKash Payment</span>
                                <span class="pm-badge-bkash">bKash</span>
                            </label>
                            <div class="pm-details" id="bkash-details">
                                <div class="pm-details-notice">
                                    <i class="fas fa-info-circle mr-1"></i> Send payment to Personal number: <b>01XXXXXXXXX</b>, then enter your transaction details below.
                                </div>
                                <input type="text" placeholder="bKash Transaction ID (e.g. 8N7A6D5E)" name="bkash_transaction_id" class="form-control">
                                <input type="tel" placeholder="Your bKash Phone Number" name="bkash_phone" class="form-control">
                                <input type="number" placeholder="Amount Sent (BDT)" name="bkash_amount" class="form-control">
                            </div>

                            <label class="pm-option" data-target="rocket">
                                <input type="radio" name="payment_method" value="Rocket">
                                <span class="pm-label">Rocket Payment</span>
                                <span class="pm-badge-rocket">Rocket</span>
                            </label>
                            <div class="pm-details" id="rocket-details">
                                <div class="pm-details-notice">
                                    <i class="fas fa-info-circle mr-1"></i> Send payment to Personal number: <b>01XXXXXXXXX</b>, then enter your transaction details below.
                                </div>
                                <input type="text" placeholder="Rocket Transaction ID" name="rocket_transaction_id" class="form-control" id="transaction_id">
                                <input type="tel" placeholder="Your Rocket Phone Number" name="rocket_phone" class="form-control">
                                <input type="number" placeholder="Amount Sent (BDT)" name="rocket_amount" class="form-control">
                            </div>
                        </div>

                        <!-- CTA Place Order Button -->
                        <button type="submit" class="btn-place-order-custom">
                            <i class="fas fa-lock mr-1"></i> Place Order • <?php echo e(env('CURRENCY')); ?><?php echo e(number_format((float)str_replace(',', '', $grandTotal), 2)); ?> <?php echo e(env('UAE_CURRENCY')); ?>

                        </button>

                        <!-- Trust Guarantee Footer -->
                        <div class="checkout-trust-badges">
                            <div class="trust-badge-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Secure Checkout</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fas fa-truck"></i>
                                <span>Fast Delivery</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fas fa-headset"></i>
                                <span>24/7 Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<!-- End of Main -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        $('#district_id').change(function(){
            var district_id = $(this).val();
            if (district_id == ''){
                district_id = -1;
            }
            var option = "<option value=''>Select Area / Thana</option>";
            var url = "<?php echo e(url('/')); ?>";

            $.get( url + "/get-area/"+district_id, function( data ) {
                try {
                    data = JSON.parse(data);
                    data.forEach(function (element) {
                        option += "<option value='"+ element.id +"'>"+ element.name + "</option>";
                    });
                } catch(e) {}
                $('#areas').html(option);
            });
        });

        // Payment-method radio cards: highlight the selected one and reveal
        // the bKash / Rocket detail fields only when that option is chosen.
        $(document).ready(function(){
            function syncPaymentMethod(){
                $('.payment-methods .pm-option').removeClass('active');
                $('.payment-methods .pm-details').removeClass('show');

                var checked = $('.payment-methods input[name="payment_method"]:checked');
                checked.closest('.pm-option').addClass('active');

                var target = checked.closest('.pm-option').data('target');
                if (target === 'bkash') { $('#bkash-details').addClass('show'); }
                if (target === 'rocket') { $('#rocket-details').addClass('show'); }
            }

            $('.payment-methods input[name="payment_method"]').on('change', syncPaymentMethod);
            syncPaymentMethod();

            function syncZone(){
                var zone = $('input[name="shipping_zone"]:checked').val();
                var $district = $('#district_id');
                var $area = $('#areas');

                $('.zone-card-label').removeClass('active');
                if (zone === 'outside') {
                    $('#zone-outside-card').addClass('active');
                    $district.prop('required', false);
                    $('#district-group').hide();
                    $('#area-group').hide();
                    $('#city-group').show();
                } else {
                    $('#zone-inside-card').addClass('active');
                    $district.prop('required', true);
                    $('#district-group').show();
                    $('#area-group').show();
                }
            }
            $('input[name="shipping_zone"]').on('change', syncZone);
            syncZone();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.laramart.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hassan/Downloads/xulumart/resources/views/pages/checkout.blade.php ENDPATH**/ ?>