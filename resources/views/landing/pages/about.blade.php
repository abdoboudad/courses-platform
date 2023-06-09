@extends('landing.index')
@section('content')

<!-- End header -->

<!-- section -->

<section class="inner_banner">
  <div class="container">
      <div class="row">
          <div class="col-12">
             <div class="full">
                 <h3>About us</h3>
             </div>
          </div>
      </div>
  </div>
</section>

<!-- end section -->

<!-- section -->
<div class="section margin-top_50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_left">
                       <h2><span>Welcome To</span> Education</h2>
                    </div>
                    <div class="full">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full">
                       <a class="hvr-radial-out button-theme" href="#">About more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                    <img src="images/img2.png" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span>Popular </span>Courses</h2>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                   <img class="img-responsive" src="images/p1.png" alt="#" /> 
                   <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="images/p2.png" alt="#" />
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="images/p3.png" alt="#" />
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- Start Footer -->
<footer class="footer-box">
    <div class="container">
    
       <div class="row">
       
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog">
                <div class="full margin-bottom_30">
                   <img src="images/footer_logo.png" alt="#" />
                 </div>
                 <div class="full white_fonts">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                 </div>
             </div>
          </div>
          
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
               <div class="footer_blog footer_menu white_fonts">
                        <h3>Quick links</h3>
                        <ul> 
                          <li><a href="#">> Join Us</a></li>
                          <li><a href="#">> Maintenance</a></li>
                          <li><a href="#">> Language Packs</a></li>
                          <li><a href="#">> LearnPress</a></li>
                          <li><a href="#">> Release Status</a></li>
                        </ul>
                     </div>
             </div>
             
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog full white_fonts">
                         <h3>Newsletter</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                         <div class="newsletter_form">
                            <form action="index.html">
                               <input type="email" placeholder="Your Email" name="#" required />
                               <button>Submit</button>
                            </form>
                         </div>
                     </div>
                </div>	 
          
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
             <div class="footer_blog full white_fonts">
                         <h3>Contact us</h3>
                         <ul class="full">
                           <li><img src="images/i5.png"><span>London 145<br>United Kingdom</span></li>
                           <li><img src="images/i6.png"><span>demo@gmail.com</span></li>
                           <li><img src="images/i7.png"><span>+12586954775</span></li>
                         </ul>
                     </div>
                </div>	 
          
       </div>
    
    </div>
</footer>

@endsection