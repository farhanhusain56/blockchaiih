<!DOCTYPE html>
<head>
   <title>Index</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/style.css" />
   <style>
     .logo
     {
          height: 22px;
          margin-bottom: 11px;
          width: 218px;
          margin-left: -27px;
     }
  </style>
   <script>
      var apikey = {
          key:'4f474e90-0745-4355-9885-e4f392a2a1ee'
      }
      request('get','https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?CMC_PRO_API_KEY=' + apikey.key)
          .then((r1) => {
              //console.log(r1);
              var x1 =JSON.parse(r1.target.responseText);
             
              $('#showbtcP').prepend((x1.data[0].quote.USD.percent_change_24h).toFixed(2) + '%');
              $('#showbtc').prepend('$'+(x1.data[0].quote.USD.price).toFixed(2));
              
              $('#showethP').prepend((x1.data[1].quote.USD.percent_change_1h).toFixed(2) + '%');
              $('#showeth').prepend('$'+(x1.data[1].quote.USD.price).toFixed(2));
              
              $('#showbchP').prepend((x1.data[10].quote.USD.percent_change_1h).toFixed(2) + '%');
              $('#showbch').prepend('$'+(x1.data[10].quote.USD.price).toFixed(2));
          }).catch()
      function request(method, url) {
          return new Promise(function (resolve, reject) {
              var xhr =new XMLHttpRequest();
              xhr.open(method, url);
              xhr.onload = resolve;
              xhr.onerror = reject;
              xhr.send();
          });
      }    
   </script> 
   <script>
      request('get','https://api.wazirx.com/api/v2/tickers/btcinr')
          .then((r1) => {
              //console.log(r1);
              var x1 =JSON.parse(r1.target.responseText);
             
             
              consle.log((x1.ticker.buy)+'₹');
              
       
          }).catch()
      function request(method, url) {
          return new Promise(function (resolve, reject) {
              var xhr =new XMLHttpRequest();
              xhr.open(method, url);
              xhr.onload = resolve;
              xhr.onerror = reject;
              xhr.send();
          });
      }    
   </script> 
</head>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <body class="antialiased">
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
      <section class="top_section">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2">
                     <h5><a href="#"><img class="logo" src="/img/logo.gif"></a></h5>
                  </div>
                  <div class="col-md-4">
                     <div class="menu">
                        <ul>
                           <li><a href="#">Wallet</a></li>
                           <li><a href="#">Exchange</a></li>
                           <li><a href="#">Explorer</a></li>
                           <li>
                              <a href="#">
                                 <svg width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M19 13.5C19.5523 13.5 20 13.0523 20 12.5C20 11.9477 19.5523 11.5 19 11.5C18.4477 11.5 18 11.9477 18 12.5C18 13.0523 18.4477 13.5 19 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 13.5C12.5523 13.5 13 13.0523 13 12.5C13 11.9477 12.5523 11.5 12 11.5C11.4477 11.5 11 11.9477 11 12.5C11 13.0523 11.4477 13.5 12 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5 13.5C5.55228 13.5 6 13.0523 6 12.5C6 11.9477 5.55228 11.5 5 11.5C4.44772 11.5 4 11.9477 4 12.5C4 13.0523 4.44772 13.5 5 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="search_bar">
                        <form class="example" action="action_page.php">
                           <input type="text" placeholder="Search blocks, transactions, hash..." name="search">
                           <button type="submit">
                              <svg height="19" viewBox="0 0 18 19" width="18" class="NavSearch__SearchIcon-sc-1hplhv9-0 dsegow">
                                 <path d="m559.179993 45.9010802c0-3.4003115-2.373108-5.56108-5.564608-5.56108-3.191501 0-5.565397 2.1674824-5.565397 5.56108 0 3.3935975 2.090012 5.568921 5.565397 5.568921s5.564608-2.1686096 5.564608-5.568921zm4.820007 9c0 .7572115-.627404 1.3846154-1.384615 1.3846154-.367789 0-.72476-.1514424-.973558-.4110577l-3.710337-3.6995193c-1.265625.876202-2.780048 1.3413462-4.316105 1.3413462-4.207933 0-7.615385-3.4074519-7.615385-7.6153846s3.407452-7.6153846 7.615385-7.6153846c4.207932 0 7.615384 3.4074519 7.615384 7.6153846 0 1.5360577-.465144 3.0504807-1.341346 4.3161057l3.710337 3.7103366c.248798.2487981.40024.6057692.40024.9735577z" fill="currentColor" fill-rule="evenodd" transform="translate(-546 -38)"></path>
                              </svg>
                           </button>
                        </form>
                     </div>
                     <div class="top_bt">
                        <ul>
                           <li><a href="{{ route('logins') }}">Log In</a></li>
                           <li><a href="{{ route('signup') }}">Sign Up</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section_middle">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h3>The world’s most popular way<br>to buy, sell, and trade crypto</h3>
                     <h4>Trusted by millions since 2011 with over $800 Billion in crypto transactions.</h4>
                  </div>
                  <div class="col-md-12">
                     <div class="full button_1">
                        <a class="button_b" href="#">Get Started</a> 
                     </div>
                     <div class="full button_2">
                        <a class="button_b" href="#">Log In</a> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full four-block">
                        <div class="market_up_block one">
                           <div class="price_header">
                              <img class="logo_icon" src="img/prices-btc.svg" alt="#" />
                              <div class="price_label">
                                 <button class="buy_l">Buy</button>
                                 <button class="trade_l">Trade</button>
                              </div>
                           </div>
                           <div class="price_content">
                              <p>Bitcoin <span class="coin_name">BTC</span></p>
                           </div>
                           <div class="price_footer">
                              <p>$30,596.93 <span class="red_t">-3.65%</span></p>
                           </div>
                        </div>
                        <div class="market_up_block one">
                           <div class="price_header">
                              <img class="logo_icon" src="img/prices-eth.svg" alt="#" />
                              <div class="price_label">
                                 <button class="buy_l">Buy</button>
                                 <button class="trade_l">Trade</button>
                              </div>
                           </div>
                           <div class="price_content">
                              <p>Ethereum <span class="coin_name">ETH</span></p>
                           </div>
                           <div class="price_footer">
                              <p>$1,823.84 <span class="red_t">-6.94%</span></p>
                           </div>
                        </div>
                        <div class="market_up_block one">
                           <div class="price_header">
                              <img class="logo_icon" src="img/prices-xlm.svg" alt="#" />
                              <div class="price_label">
                                 <button class="buy_l">Buy</button>
                                 <button class="trade_l">Trade</button>
                              </div>
                           </div>
                           <div class="price_content">
                              <p>Stellar <span class="coin_name">XLM</span></p>
                           </div>
                           <div class="price_footer">
                              <p>$0.22 <span class="red_t">-7.43%</span></p>
                           </div>
                        </div>
                        <div class="market_up_block one">
                           <div class="price_header">
                              <img class="logo_icon" src="img/prices-clout.svg" alt="#" />
                              <div class="price_label">
                                 <button class="buy_n">New</button>
                                 <button class="trade_l">Trade</button>
                              </div>
                           </div>
                           <div class="price_content">
                              <p>BitClout <span class="coin_name">CLOUT</span></p>
                           </div>
                           <div class="price_footer">
                              <p>$100.16</p>
                           </div>
                        </div>
                     </div>
                     <div class="full button_right">
                        <a href="#">
                           View More Prices 
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.16797 10H15.8346" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M10 4.16797L15.8333 10.0013L10 15.8346" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
