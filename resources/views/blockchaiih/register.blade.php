<!DOCTYPE html>
<head>
   <title>Sign up</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css" />
</head>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <body id="login_page_" class="antialiased">
      <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
         @if (Route::has('login'))
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                     <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                 @else
                     <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
         
                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                     @endif
                 @endauth
             </div>
         @endif
         </div> -->
      <span class="bottom_icon"><img src="http://blockchaiih.com/img/spinningIcons.gif" alt="#" /></span>
      <div class="login_section">
      <div class="header_login">
         <h5><a href="#">Logo</a></h5>
      </div>
      <div class="login_content_section signup_">
         <h3>Securely Buy, Sell, and Store Crypto.</h3>
         <h4>Get Started by Signing Up Now. </h4>
      </div>
      <div class="center_box">
         <div class="form_section_">
            <div class="form_ form_1">
               <img src="img/icon1.png" />
               <h4 class="title_form">Be Your Own Bank</h4>
               <p class="form_content">
                  <strong>Easily buy and sell</strong> Bitcoin, Ether and more.<br>
                  <strong>Securely store your</strong> crypto on mobile and desktop.<br>
                  <strong>Control your money</strong> by holding your private keys.
               </p>
               <form action="/signups" method="POST">
                  @csrf
                  <fieldset>
                     <div class="field">
                        <label>Your Email</label>
                        <input type="email" name="email" required="" />
                     </div>
                     <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" required="" />
                     </div>
                     <div class="field">
                        <label>Confirm Password</label>
                        <input type="password" name="password" required="" />
                     </div>
                     <div class="field">
                        <input type="checkbox">
                        <span>I understand that Blockchain.com never stores passwords and therefore cannot recover or reset my password. If I lose access to my wallet, I must use my <a href="">Secret Private Key Recovery Phraseto</a> access my funds.</span>
                     </div>
                     <div class="field">
                        <span>By creating an account, you agree to Blockchain’s <a href="">Terms of Service</a> & <a href="">Privacy Policy.</a></span>
                     </div>
                     <div class="field">
                        <input type="submit" value="submit" name="submit" />
                     </div>
                     <div class="field_app_logos">
                        <a href="#"><img src="img/apple-app-store-badge.svg" alt="#" /></a>
                        <a href="#"><img src="img/google-play-badge.svg" alt="#" /></a>
                     </div>
                  </fieldset>
               </form>
               <p class="already_text">Already have a wallet? <a href="">Sign In <img src="img/arrow_icon.png" alt="#" /></a></p>
            </div>
            <div class="form_ form_2">
               <img src="img/icon2.png" />
               <h4 class="title_form">The world’s most trusted crypto exchange.</h4>
               <p class="form_content">
                  <strong>Lightning-fast trades</strong> mean you get the best price.<br>
                  <strong>Many trading pairs</strong> including USD, GBP and EUR.<br>
                  <strong>Control your money</strong> by connecting your Wallet.
               </p>
               <a class="btnfrom" href="#">create an Exchange Account <img src="img/redirect_icon.png" alt="#"></a>
            </div>
         </div>
      </div>
      <style>
         .form_section_ {
         width: 968px;
         }
         .form_ {
         width: 29rem;
         padding: 2rem;
         background: rgb(255, 255, 255);
         border-radius: 0.75rem;
         box-sizing: border-box;
         float: left;
         }
         .form_1 {
         margin-right: 2.5rem;
         }
         .form_section_ {
         display: inline-block;
         margin: 0 auto;
         }
         .center_box {
         display: flex;
         justify-content: center;
         }
      </style>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>