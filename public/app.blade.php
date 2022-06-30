<!DOCTYPE html>
<html dir="ltr" lang="en">
 <head>
 <title>LIVE |  Steven SA Web Mockup 01</title>
@yield('title')
 @include('website.include.head')
 <style type="text/css">

#videoBG {
    position:fixed;
    z-index: -1;

/*not work if the screen ratio is below 16/9*/
    width:100%;     
    height: auto;
}
@media (min-aspect-ratio: 16/9) {
    #videoBG {
        width:100%;
        height: auto;
    }
}
@media (max-aspect-ratio: 16/9) {
    #videoBG { 
        width:auto;
        height: 100%;
    }
}
 </style>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
 </head>   

<body class="bg-dark" style="background-image: url({{asset('/website/img/background/back_video.gif')}});background-size:cover;">






 @include('website.include.header')

 @yield('content')

 @include('website.include.footer')
<!-- Footer -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
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
