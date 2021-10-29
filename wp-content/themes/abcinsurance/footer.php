<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ABC_Insurance
 */

?>


<!-- Footer Area Starts -->

<div id="footer">
    <div class="container">
      <div class="footer-sections">
        <div class="row">
          <div class="col-sm-3">
            <div class="our-service">
              <h3>Our Services</h3>
              <ul style="padding: 0; margin: 20px 0;">
                <li><a href="">Houst Insurance</a></li>
                <li><a href="">Vehicle Insurance</a></li>
                <li><a href="">Travel Insurance</a></li>
                <li><a href="">Health Insurance</a></li>
                <li><a href="">Corporate Insurance</a></li>
                
              </ul>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="quick-link">
              <h3>About Us</h3>
              <ul style="padding: 0; margin: 20px 0;">
                <li><a href="">Meet The Team</a></li>
                <li><a href="">Newsroom</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-3">

            <div class="get-in-touch">
              <h3>Policies</h3>
              <ul style="padding: 0; margin: 20px 0;">
                <li>Dummy Policies</li>
              </ul>
            </div>
          </div>

          <div class="col-sm-3">

            <div class="get-in-touch">
              <h3>Contact Us</h3>
              <ul style="padding: 0; margin: 20px 0;">
                <li>Our Location</li>
                <li>Email Us</li>
              </ul>
            </div>
          </div>


        </div>

      </div>
    </div>
    <div class="row-fluid">
      <div class="border">
      </div>
    </div>

    
    <div class="copy-right">
      <div class="container">
        <div class="row">
            <div class="col-sm">
                <p class="copyright">Copyright Disclaimer</p>
            </div>
        </div>
      </div>
    </div>


  </div>

  <!-- Footer Area Ends -->


  <!-- Main JS -->
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

  

<?php wp_footer(); ?>

</body>
</html>
