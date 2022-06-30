<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>
 <title>LIVE |  Steven SA Web Mockup 01</title>
@yield('title')
 @include('website.include.head')
 </head>   
 <body class="bg-dark" style="background-image: url({{asset('/website/img/back.jpg')}});background-size:cover;">
 <div class="container" style="background-image: url({{asset('/website/assets/img/background-home.jpg')}});background-size: cover;">
  <div class="row banner-img" >
    <span class="banner">
      <h1>Login</h1>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed<br> diam nonummy nibh euismod tincidunt ut laoreet</p>
      <a href="#tournament-details-area ptb-100 "><button class="btn btn-light">Start Now</button></a>
      
    </span>    
  </div>
</div>


</div>  
</div> 

 @include('website.include.header')
 @yield('content')

 @include('website.include.footer')
<!-- Footer -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
      toastr.success("{{ session('message') }}");
  @endif
  @if(Session::has('success'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
      toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
      toastr.warning("{{ session('warning') }}");
  @endif
</script>
@yield('scripts');
</body>

</html>
