<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="{{asset('/website/img/fav.png')}}">
<title>Steven - Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #EF5350;
    background-repeat: no-repeat
}

.card {
    padding: 30px 25px 35px 50px;
    border-radius: 30px;
    box-shadow: 0px 4px 8px 0px #B71C1C;
    margin-top: 50px;
    margin-bottom: 50px
}

.border-line {
    border-right: 1px solid #BDBDBD
}

.text-sm {
    font-size: 13px
}

.text-md {
    font-size: 18px
}

.image {
    width: 60px;
    height: 30px
}

::placeholder {
    color: grey;
    opacity: 1
}

:-ms-input-placeholder {
    color: grey
}

::-ms-input-placeholder {
    color: grey
}

input {
    padding: 2px 0px;
    border: none;
    border-bottom: 1px solid lightgrey;
    margin-bottom: 5px;
    margin-top: 2px;
    box-sizing: border-box;
    color: #000;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 500
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #EF5350;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.wow {
    background-color: #EF5350;
    color: #fff;
    padding: 8px 25px;
    border-radius: 50px;
    font-size: 18px;
    letter-spacing: 2px;
    border: 2px solid #fff
}

.wow:hover {
    box-shadow: 0 0 0 2px #EF5350
}

.wow:focus {
    box-shadow: 0 0 0 2px #EF5350 !important
}

.woww {
    background-color: #b10d0a;
    color: #fff;
    padding: 8px 25px;
    border-radius: 50px;
    font-size: 18px;
    letter-spacing: 2px;
    border: 2px solid #fff
}

.woww:hover {
    box-shadow: 0 0 0 2px #b10d0a
}

.woww:focus {
    box-shadow: 0 0 0 2px #b10d0a !important
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #EF5350
}

@media screen and (max-width: 575px) {
    .border-line {
        border-right: none;
        border-bottom: 1px solid #EEEEEE
    }
}

</style>

</body>
<div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
            <div class="card border-0">
                <div class="row justify-content-center">
                    <h3 class="mb-4">{{__('content.ccc')}}</h3>
                </div>
                <form action="{{route('hiringForm')}}" method="POST" id="hiringForm">
                    @csrf
                <div class="row">
                   
                    <div class="col-sm-7 border-line pb-3">
                        <br>
                        <br>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">{{__('content.noc')}}</p> 
                            <input type="text" name="name" placeholder="{{__('content.namePlaceholder')}}" size="15" required>
                            <input type="hidden" name="amount" id="amount" value="{{$user->hiring_fee}}">
                            <input type="hidden" name="player_id" id="player_id" value="{{$user->id}}">
                        </div>
                        <div class="form-group">
                           
                           <br>
                           <br>
                         
                          
                            <div id="card-element">
                            {{-- A Stripe Element will be inserted here. --}}
                            </div>

                        <!-- Used to display Element errors. -->
                        <div id="card-errors" role="alert"></div>
       
                   
       
                          
                               <!-- <p class="mb-0 ml-3">/</p> <img class="image ml-1" src="https://i.imgur.com/WIAP9Ku.jpg"> -->
                           
                        </div>
                       
                        
                    </div>
                    <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4"> <small class="text-sm text-muted">{{__('content.hp')}}</small>
                        <h5 class="mb-5">{{ucfirst($user->name)}}</h5> <small class="text-sm text-muted">{{__('content.pa')}}</small>
                        <div class="row px-3 justify-content-sm-center">
                            <h2 class=""><span class="text-md font-weight-bold mr-2">$</span><span class="text-danger">{{$user->hiring_fee}}</span></h2>
                        </div> <button type="submit" class="wow text-center mt-4">{{__('content.pay')}}</button>
                               
                                <a href="{{route('web')}}" >
                                    <button class="woww text-center mt-4">{{__('content.back')}}</button>
                                </a> 
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .StripeElement {
        background-color: white;
        padding: 8px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
<script src="https://js.stripe.com/v3/"></script>
<script>
     var stripe = Stripe('{{ env('STRIPE_KEY') }}');

    var elements = stripe.elements();

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('hiringForm'); // The id of the form that handles payment submission
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripe_token');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }

    // Handle form submission.
    var form = document.getElementById('hiringForm');
    form.addEventListener('submit', function(event) {
        console.log('sameed');
      event.preventDefault();

      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the customer that there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
      } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
      }
    });
    });
</script>
</body>
</html>
