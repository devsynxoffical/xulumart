<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
    function addToCart(product_id) {
      // alert(product_id);
      url = "<?php echo e(route('cart.add')); ?>";
      var product_id = product_id;
      var quantity = 1;
      if(document.getElementById('qty')) {
         quantity = document.getElementById('qty').value; 
      }
       
      
      $.ajax({
          url: url,
          type: "POST",
          data:{
              product_id:product_id,quantity:quantity, _token: '<?php echo e(csrf_token()); ?>',
          },
           
          success:function(response){
            
            $('#total_count').html(response.total_count);
            $('.cart-count').html(response.total_count);
           
            // alert(response.total_count);
            $('#mobile_total_count').html(response.total_count);
            $('#cart_sidebar_total').html(response.total_amount);
            $('#cart_sidebars').html(response.cart_sidebar);
            $('#subTotal').html(response.subTotal);
            $('.sub-total').css('display', 'none');


            $('.added_to_cart_' + product_id).addClass('added_to_cart');
            $('.added_to_cart_' + product_id).text('Added To Cart');
            
            $('.offcanvas-cart').addClass("offcanvas-open");
            toastr.options = {
              "positionClass": "toast-top-right"
            }
              toastr.success('Product Added into Cart');
          }
      });
    }

    /**
     * Buy Now: submit a real form POST (not AJAX) straight to the buy_now
     * route, which adds the item to the cart server-side (respecting stock)
     * and redirects directly to checkout - no extra steps.
     */
    function buyNow(product_id) {
      var quantity = 1;
      if (document.getElementById('qty')) {
          quantity = document.getElementById('qty').value;
      }

      var form = document.createElement('form');
      form.method = 'POST';
      form.action = "<?php echo e(route('buy.now')); ?>";

      var token = document.createElement('input');
      token.type = 'hidden';
      token.name = '_token';
      token.value = '<?php echo e(csrf_token()); ?>';
      form.appendChild(token);

      var pid = document.createElement('input');
      pid.type = 'hidden';
      pid.name = 'product_id';
      pid.value = product_id;
      form.appendChild(pid);

      var qty = document.createElement('input');
      qty.type = 'hidden';
      qty.name = 'quantity';
      qty.value = quantity;
      form.appendChild(qty);

      document.body.appendChild(form);
      form.submit();
    }

    function addToWishlist(product_id) {
      //alert(product_id);
      url = "<?php echo e(route('wishlist.add')); ?>";
      var product_id = product_id;
      $.ajax({
          url: url,
          type: "POST",
          data:{
              product_id:product_id,_token: '<?php echo e(csrf_token()); ?>',
          },
          success:function(response){
            
            
            toastr.options = {
              "positionClass": "toast-top-right"
            }
            if (response.auth == 1) {
              if(response.status == 0){
                toastr.error('Something went wrong!');
              }
              if (response.status == 1) {
                toastr.success('Product Added into Wishlist!');
              }
              if(response.status == 2){
                toastr.warning('Product already in  your wishlist!');
              }
            }
            else{
              toastr.warning('You are not logged in!');
              
            }
          }
      });
    }
</script>
<script>
        $('#payment_option').change(function () {
            $payment_option = $('#payment_option').val();
            if($payment_option == 'Cash on Delivery' ) {
                $('#cod').removeClass('hidden');
                $('#bkash').addClass('hidden');
                $('#rocket').addClass('hidden');
            }
            if($payment_option == 'Bkash' ) {
                $('#cod').addClass('hidden');
                $('#bkash').removeClass('hidden');
                $('#transaction_id').removeClass('hidden');
                $('#rocket').addClass('hidden');
            }
            if($payment_option == 'Rocket' ) {
                $('#cod').addClass('hidden');
                $('#bkash').addClass('hidden');
                $('#rocket').removeClass('hidden');
                $('#transaction_id').removeClass('hidden');
            }

        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <!-- <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script> -->
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var route = "<?php echo e(route('search')); ?>";

        
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".fancybox").fancybox({
              openEffect: "none",
              closeEffect: "none"
          });
          
          $(".zoom").hover(function(){
          
          $(this).addClass('transition');
        }, function(){
              
          $(this).removeClass('transition');
        });
      });
    </script>



    <?php echo $__env->yieldContent('scripts'); ?><?php /**PATH /Users/hassan/Downloads/xulumart/resources/views/partials/scripts.blade.php ENDPATH**/ ?>