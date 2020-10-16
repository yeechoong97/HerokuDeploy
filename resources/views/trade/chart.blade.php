@extends('layouts.default')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="http://127.0.0.1:1337/socket.io/socket.io.js"></script>
       <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

      <!-- <script>
      var token = $('meta[name="csrf-token"]').attr('content');
      //Call the controller function every 1 second

      setInterval(function(){
         var button = document.getElementById('btn');
         button.onclick();
         },1*1000);

      //Ajax Function
      function getMessage() {
         var result=[];
         var dropdown = document.getElementById("instrument");
         var instrument = dropdown.options[dropdown.selectedIndex].value;
         var G_dropdown = document.getElementById("granularity");
         var granularity = G_dropdown.options[G_dropdown.selectedIndex].value;
            $.ajax({
               type:'POST',
               url:'/home/api',
               data: {
                  _token:token,
                  ins: instrument,
                  gra: granularity,
               },
               success:function(data) {
                  var res = JSON.parse(data.response);
                  res.candles.forEach(item=>{
                  var date = item.time.split(".");
                  var myDate = new Date(item.time);
                  var timeresult = myDate.getTime();     
                  var b =  { time: timeresult/1000, open:parseFloat(item.mid.o) ,  high:parseFloat(item.mid.h) , low:parseFloat(item.mid.l) , close:parseFloat(item.mid.c)};
                  candlestickSeries.update(b);
            });
            }
         });
      }

      function setOptions() {
         var result=[];
         var dropdown = document.getElementById("instrument");
         var instrument = dropdown.options[dropdown.selectedIndex].value;
         var G_dropdown = document.getElementById("granularity");
         var granularity = G_dropdown.options[G_dropdown.selectedIndex].value;
            $.ajax({
               type:'POST',
               url:'/home/instrument',
               data: {
                  _token:token,
                  ins: instrument,
                  gra: granularity,
               },
               success:function(data) {
                  var res = JSON.parse(data.response);
                  res.candles.forEach(item=>{
                  var date = item.time.split(".");
                  var myDate = new Date(item.time);
                  var timeresult = myDate.getTime();     
                  var b =  { time: timeresult/1000, open:parseFloat(item.mid.o) ,  high:parseFloat(item.mid.h) , low:parseFloat(item.mid.l) , close:parseFloat(item.mid.c)};
                  result.push(b);
            });
            candlestickSeries.setData(result);
            }
         });
      }
      </script> -->

      <div >
         <div class = "left-container">
           
            <div class="chart-container">
               <!-- TradingView Widget BEGIN -->
               <div class="tradingview-widget-container" style="z-index:0">
            
               <div id="tradingview_70ae7" style="z-index:1"></div>
               <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/USDJPY/?exchange=OANDA" rel="noopener" target="_blank"><span class="blue-text" id="reference">USDJPY Chart</span></a> by TradingView</div>
                 
               <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
               <script type="text/javascript">
               var instrument = "OANDA:EURUSD";
               LoadCharts(instrument);

               function changeInstrument(currency)
               {
                  instrument = "OANDA:" + currency
                  appendData(currency);
                  LoadCharts(instrument);
               }

               function LoadCharts(currency){
               var clean_currency = currency.split(":");
               document.getElementById("reference").innerHTML = clean_currency[1] + " Chart"
               new TradingView.widget(
               {
                  "width": 1600,
                  "height": 650,
                  "symbol": currency,
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "light",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "save_image": false,
                  "container_id": "tradingview_70ae7"
               }
               );
               }

               function appendData(currency){
                  var base = currency.slice(0,3);
                  var quote = currency.slice(3);
                  var currency_pair = base + "_" + quote ;
                  var sell = document.getElementById(currency_pair+"_Sell").innerHTML;
                  var buy = document.getElementById(currency_pair+"_Buy").innerHTML;
                  var pips = document.getElementById(currency_pair+"_Pips").innerHTML;
                  document.getElementById("sell-action").innerHTML = sell;
                  document.getElementById("buy-action").innerHTML = buy;
                   document.getElementById("pips-action").innerHTML = pips;
               }

               </script>
               </div>
               <!-- TradingView Widget END -->
            </div>
            <div class="record-container"></div>
         </div>

         <div class="mydiv" id ="mydiv">
            <div class="mydivheader" id ="mydivheader">::</div>
               <div class="order_button" id ="sell">
                 <button class="buy_btn" type="button">
                     <span class="span-title-sell">Sell</span>
                     <span class="span-data" id="sell-action"></span>
                  </button> 
               </div>
            <div class="order_button" id ="buy">
               <div class="order_button" id ="buy">
                 <button class="buy_btn" type="button">
                     <span class="span-title-buy">Buy</span>
                     <span class="span-data" id="buy-action"></span>
                  </button> 
               </div>
            </div>
               
            <div class="order_button" id ="pips">
               <div class="order_button" id ="buy">
                 <button class="buy_btn" type="button" disabled>
                     <span class="span-title-pips">Pips</span>
                     <span class="span-data" id="pips-action"></span>
                  </button> 
               </div>
            </div>
         </div>

         <div class = "right-container">
            <div class="account-container">
               <div class="temp"></div>
            </div>
            <div class="price-container">
               <div class="header">
                  <h6>Rates</h6>
               </div>
               
               <div class="price">
                  <div class="rates">
                     <div class="indicator" id="EUR_USD_indicator"></div>
                     <div class="header" onclick="changeInstrument('EURUSD')">EUR/USD</div>
                     <div class="rates-container">
                        <div class="sell-rates" id="EUR_USD_Sell"></div>
                        <div class="buy-rates" id="EUR_USD_Buy"></div>
                     </div>
                     <div class="pips" id="EUR_USD_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <div class="indicator" id="AUD_USD_indicator"></div>
                     <div class="header" onclick="changeInstrument('AUDUSD')">AUD/USD</div>
                     <div class="rates-container">
                        <div class="sell-rates" id="AUD_USD_Sell"></div>
                        <div class="buy-rates" id="AUD_USD_Buy"></div>
                     </div>
                     <div class="pips" id="AUD_USD_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <div class="indicator" id="GBP_USD_indicator"></div>
                     <div class="header" onclick="changeInstrument('GBPUSD')">GBP/USD</div>
                     <div class="rates-container">
                        <div class="sell-rates" id="GBP_USD_Sell"></div>
                        <div class="buy-rates" id="GBP_USD_Buy"></div>
                     </div>
                     <div class="pips" id="GBP_USD_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <div class="indicator" id="USD_JPY_indicator"></div>
                     <div class="header" onclick="changeInstrument('USDJPY')">USD/JPY</div>
                     <div class="rates-container">
                        <div class="sell-rates" id="USD_JPY_Sell"></div>
                        <div class="buy-rates" id="USD_JPY_Buy"></div>
                     </div>
                     <div class="pips" id="USD_JPY_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <div class="indicator" id="EUR_JPY_indicator"></div>
                     <div class="header" onclick="changeInstrument('EURJPY')">EUR/JPY</div>
                     <div class="rates-container">
                        <div class="sell-rates" id="EUR_JPY_Sell"></div>
                        <div class="buy-rates" id="EUR_JPY_Buy"></div>
                     </div>
                     <div class="pips" id="EUR_JPY_Pips"></div>
                  </div>
               </div>

            </div>
         </div>        
      </div>

      <?php echo Form::button('',[
            'id' => 'btn',
            'onClick'=>'getMessage()',
            'display'=>'none',]); ?>
<script>
document.getElementById("btn").style.display = "none";
dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    // if present, the header is where you move the DIV from:
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV:
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>


<script>
      var socket = io.connect('http://127.0.0.1:1337');
      var json =""
      socket.on('news', function (data)
      {
         var strLines = data.split("\n");
         for (var i in strLines) {
            if (strLines[i]!="") {
               json = JSON.parse(strLines[i]);
               if (json.type =="PRICE") {
                  var currency = json.instrument;
                  var id = ["_Sell","_Buy","_Pips","_indicator"];
                     for (i=0;i<id.length;i++)
                     {
                        id[i] = currency + id[i];
                     }       
                  var sell = document.getElementById(id[0]);
                  var buy = document.getElementById(id[1]);
                  var pips = document.getElementById(id[2]);
                  var indicator = document.getElementById(id[3]);
                  var date_split = json.time.split("T");
                  var time_split = date_split[1].split(".");
                  
                  var previous_sell_price = sell.innerHTML;
                  var previous_buy_price = buy.innerHTML;
                  if (previous_sell_price < json.bids[0].price && previous_buy_price < json.asks[0].price)
                  {
                     indicator.style.backgroundColor = 'greenyellow';
                  }
                  else if (previous_sell_price > json.bids[0].price && previous_buy_price > json.asks[0].price)
                  {
                     indicator.style.backgroundColor = '#ff6e54';
                  }
                  sell.innerHTML = json.bids[0].price;
                  buy.innerHTML = json.asks[0].price;

                  var selected_pair = document.getElementById("reference").innerHTML;
                  var splited = selected_pair.split(" ");
                  var base = splited[0].slice(0,3);
                  var quote = splited[0].slice(3);
                  var currency_pair = base + "_" + quote ;
                  
                  var multiply = 10000;
                  if (currency.includes("JPY")==true)
                  {
                     multiply = 100;
                  }
                  pips.innerHTML = ((json.asks[0].price-json.bids[0].price)*multiply).toFixed(1);
                  
                  if (currency == currency_pair)
                  {
                    document.getElementById("sell-action").innerHTML = json.bids[0].price;
                    document.getElementById("buy-action").innerHTML = json.asks[0].price;
                    document.getElementById("pips-action").innerHTML = ((json.asks[0].price-json.bids[0].price)*multiply).toFixed(1);
                  }
               }
            }
         }
      });
    </script> 


@stop