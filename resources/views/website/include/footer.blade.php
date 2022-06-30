<footer class="page-footer">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-8 mt-md-0 mt-3 text-footer">

        <!-- Content -->
        <?php
        $setting=\App\Models\SiteSetting::find(1);
        ?>
        <center><p>{{isset($setting->footer_desc) ? $setting->footer_desc:__('content.welcome')}}</p></center>
        

      </div>
      <!-- Grid column -->
<div class="footer-copyright text-center py-3" style="margin-left:-75px;">{{isset($setting->copyright) ? $setting->copyright:__('content.welcome')}}
  </div>
      

      <div class="col-md-12">
        <div class="social">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-youtube"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div>
      </div>
      <!-- Grid column -->
   
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  
  

  
  <!-- Copyright -->

</footer>