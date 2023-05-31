<section class="Enroll-Services">
<div class="container">
        <h1 class="Enroll-heading">Checkout</h1>
<form  role="form" method="post"  class="contactform style4 clearfix require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
 <input wire:model.defer="stripeToken" type="hidden" id="stripeToken" name="stripeToken" value="" > 
		<div class="row" >
         @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        </div>
<div class="row" >

  <div class="col-sm-6" >

    <label for="customer_name" class="d-block"> Name<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="customer_name" name="customer_name"  required="required"  wire:model="customer_name">
    @error('customer_name') <span class="error">{{ $customer_name }} </span> @enderror
    
    <label for="customer_email" class="d-block"> Email<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="customer_email" name="customer_email"  required="required"  wire:model="customer_email">
    @error('customer_email') <span class="error">{{ $customer_email }} </span> @enderror
    
     
    <label for="customer_address" class="d-block"> Address<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="customer_address" name="customer_address"  required="required" wire:model="customer_address" >
    @error('customer_address') <span class="error">{{ $customer_address }} </span> @enderror
    
    <label for="customer_city" class="d-block">Town/City<span style="color:rgba(255,0,0,1)">*</span></label>
    <input type="text" id="customer_city" name="customer_city" required="required" wire:model="customer_city" >
    @error('customer_city') <span class="error">{{ $customer_city }} </span> @enderror
    
    <label for="post_code" class="d-block">Post Code<span style="color:rgba(255,0,0,1)">*</span></label>
        <input type="text" id="post_code" name="post_code"  required="required" wire:model="post_code"  >
        @error('post_code') <span class="error">{{ $post_code }} </span> @enderror
       

</div>
  <div class="col-sm-6">
        <label for="package_id" class="d-block">Duration<span style="color:rgba(255,0,0,1)">*</span></label>
       
       <select wire:model="price_package_id" class="d-block" >
        <option value="0" selected>Choose Duration</option>
       @foreach($prices_packages as $item)
       		<option value="{{$item->id}}"> (  {{$item->duration}} Min) (  &pound;{{$item->price}} )</option>
       @endforeach
       </select>
        @error('price_package_id') <span class="error">{{ $price_package_id }} </span> @enderror

        <label for="card_number" class="d-block">Card Nnumber<span style="color:rgba(255,0,0,1)">*</span></label>
       
       <input autocomplete='off' name="card_number" id="card_number" class="card-number" wire:model="card_number" type="text" placeholder="4242 4242 4242 4242" required value="">
        @error('card_number') <span class="error">{{ $card_number }} </span> @enderror
        
        
        <label for="card_cvc" class="d-block">Card CVC<span style="color:rgba(255,0,0,1)">*</span></label>
       <input size="4" autocomplete='off' name="card_cvc" id="card_cvc" class="card-cvc" wire:model="card_cvc" type="number" placeholder="ex. 311" required>
        @error('card_cvc') <span class="error">{{ $card_cvc }} </span> @enderror
        
        
        <label for="card_expiry_month" class="d-block">Expiry Month<span style="color:rgba(255,0,0,1)">*</span></label>
        <input size="2" autocomplete='off' name="card_expiry_month" id="card_expiry_month" class="card-expiry-month"  wire:model="card_expiry_month"  type="number" placeholder="MM" required>
        @error('card_expiry_month') <span class="error">{{ $card_expiry_month }} </span> @enderror
        
        <label for="card_expiry_year" class="d-block">Expiry Year<span style="color:rgba(255,0,0,1)">*</span></label>
        <input size="4" autocomplete='off' name="card_expiry_year" id="card_expiry_year" class="card-expiry-year"  wire:model="card_expiry_year"  type="number" placeholder="YYYY" required>
        @error('card_expiry_year') <span class="error">{{ $card_expiry_year }} </span> @enderror
        
       <button type="submit"  style="margin-top:20px;" wire:target="doCheckout">Pay Now </button>
        </div>
</div>
        </form>
    </section>
<script src="{{asset('js/jquery.min.js')}}"></script>    
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');

        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
			 @this.set('stripeToken',token); 
		 	Livewire.emit('doCheckout');
        }
    }
});

</script>
