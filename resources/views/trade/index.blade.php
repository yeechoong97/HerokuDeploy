@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

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
               <div class="tradingview-widget-container" style="z-index:0" >
                  <div id="tradingview_70ae7" style="z-index:1"></div>
                  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/USDJPY/?exchange=OANDA" rel="noopener" target="_blank"><span class="blue-text" id="reference">USDJPY Chart</span></a> by TradingView</div>
                 
                     <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                     <script type="text/javascript">
                     var instrument = "OANDA:EURUSD";
                     LoadCharts(instrument);

                     function changeInstrument(currency){
                        instrument = "OANDA:" + currency
                        LoadCharts(instrument);
                        appendData(currency);
                        setRemarks(currency);
                     }

                     //Change the remarks of the selected instrument
                     function setRemarks(currency){
                        var instrument_lists = ["EURUSD","AUDUSD","GBPUSD","USDJPY","EURJPY"];

                        for (i = 0;i<instrument_lists.length;i++){
                           var base = instrument_lists[i].slice(0,3);
                           var quote = instrument_lists[i].slice(3);
                           var instrument = base + "_" + quote;

                           if(currency!=instrument_lists[i]){ 
                              //If the instrument is not matched to the array item
                              document.getElementById(instrument_lists[i]+"_span").style.display = "none";
                              document.getElementById(instrument+"_header").style.backgroundColor = "whitesmoke";
                              document.getElementById(instrument+"_Buy").style.backgroundColor = "white";
                              document.getElementById(instrument+"_Sell").style.backgroundColor = "white";
                              document.getElementById(instrument+"_Pips").style.backgroundColor = "whitesmoke";
                           }
                           else{
                              // The instrument matched the array item
                              document.getElementById(currency+"_span").style.display = "inline";
                              document.getElementById(instrument+"_header").style.backgroundColor = "#fff7eb";
                              document.getElementById(instrument+"_Buy").style.backgroundColor = "#e0f0ff";
                              document.getElementById(instrument+"_Sell").style.backgroundColor = "#ffeded";
                              document.getElementById(instrument+"_Pips").style.backgroundColor = "#f5edff";
                           }
                        }
                     }

                     //Load and Change the Chart accordingly
                     function LoadCharts(currency){
                        var instrument = currency.split(":");
                        document.getElementById("reference").innerHTML = instrument[1] + " Chart"
                        new TradingView.widget({
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

                     //Append selected instrument data into button
                     function appendData(currency){
                        var base = currency.slice(0,3);
                        var quote = currency.slice(3);
                        var instrument = base + "_" + quote ;

                        var sell = document.getElementById(instrument+"_Sell").innerHTML;
                        var buy = document.getElementById(instrument+"_Buy").innerHTML;
                        var pips = document.getElementById(instrument+"_Pips").innerHTML;
                        document.getElementById("sell-action").innerHTML = sell;
                        document.getElementById("buy-action").innerHTML = buy;
                        document.getElementById("pips-action").innerHTML = pips;
                     }
                     </script>
                  </div>
               </div>
            <div class="record-container">
               <div class="table_record">
                  <table id="all_orders">
                     <thead>
                     <tr>
                        <th align="center">TicketID</th>
                        <th>Pair</th>
                        <th>Units</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Current</th>
                        <th>Profit(USD)</th>
                        <th>Profit(Pips)</th>
                        <th>Profit(%)</th>
                        <th>Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        @foreach($records as $record)
                           <tr>
                              <td>{{$record->ticketID}}</td>
                              <td>{{$record->pair}}</td>
                              <td>{{$record->units}}</td>
                              <td>{{$record->type}}</td>
                              <td>{{$record->entry_price}}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><a class="close_position"><span class="far fa-times-circle"></span></a></td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>

         <div class="mydiv" id ="mydiv">
            <div class="mydivheader" id ="mydivheader"></div>
               <div class="order_button" id ="sell">
                 <a href="#" class="sell_btn">
                     <span class="span-title-sell">SELL</span>
                     <span class="span-data" id="sell-action">123.60</span>
                  </a> 
               </div>
            <div class="order_button" id ="buy">
               <div class="order_button" id ="buy">
                  <a href="#" class="buy_btn">
                     <span class="span-title-buy">BUY</span>
                     <span class="span-data" id="buy-action">112.30</span>
                  </a> 
               </div>
            </div>
               
            <div class="order_button" id ="pips">
               <div class="order_button" id ="buy">
                  <a class="spread_btn">
                     <span class="span-title-spread">SPREAD</span>
                     <span class="span-data" id="pips-action">5.2</span>
                  </a> 
               </div>
            </div>
         </div>

         <div class = "right-container">
            <div class="account-container">
               <div class="header">
                  <h6>Account Details</h6>
               </div>
                     <div class="rTable">
                     <div class="rTableRow">
                        <div class="rTableCell_label">Currency :</div>
                        <div class="rTableCell_data">USD</div>
                     </div>
                     <div class="rTableRow">
                        <div class="rTableCell_label">Balance :</div>
                        <div class="rTableCell_data">${{$account->balance}}</div>
                     </div>
                     <div class="rTableRow">
                        <div class="rTableCell_label">Margin :</div>
                        <div class="rTableCell_data">${{$account->margin}}</div>
                     </div>
                     <div class="rTableRow">
                        <div class="rTableCell_label">Margin Used :</div>
                        <div class="rTableCell_data">{{$account->margin_used}}</div>
                     </div>
                     <div class="rTableRow">
                        <div class="rTableCell_label">Leverage :</div>
                        <div class="rTableCell_data">{{$account->leverage}}</div>
                     </div>
                  </div>
               
               <div class="temp"></div>
            </div>
            <div class="price-container">
               <div class="header">
                  <h6 style="color:white">Rates</h6>
               </div>
               
               <div class="price">
                  <div class="rates">
                     <!-- <div class="indicator" id="EUR_USD_indicator"></div> -->
                     <div class="header" id="EUR_USD_header" onclick="changeInstrument('EURUSD')" style="background-color:#fff7eb">EUR/USD <span class="fas fa-check-circle" id="EURUSD_span"></span></div>
                     <div class="rates-container">
                        <div class="sell-rates" id="EUR_USD_Sell" style="background-color:#ffeded"></div>
                        <div class="buy-rates" id="EUR_USD_Buy" style="background-color:#e0f0ff"></div>
                     </div>
                     <div class="pips" id="EUR_USD_Pips" style="background-color:#f5edff"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <!-- <div class="indicator" id="AUD_USD_indicator"></div> -->
                     <div class="header" id="AUD_USD_header" onclick="changeInstrument('AUDUSD')">AUD/USD <span class="fas fa-check-circle" id="AUDUSD_span" style="display:none"> </div>
                     <div class="rates-container">
                        <div class="sell-rates" id="AUD_USD_Sell"></div>
                        <div class="buy-rates" id="AUD_USD_Buy"></div>
                     </div>
                     <div class="pips" id="AUD_USD_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <!-- <div class="indicator" id="GBP_USD_indicator"></div> -->
                     <div class="header" id="GBP_USD_header" onclick="changeInstrument('GBPUSD')">GBP/USD <span class="fas fa-check-circle" id="GBPUSD_span" style="display:none"></div>
                     <div class="rates-container">
                        <div class="sell-rates" id="GBP_USD_Sell"></div>
                        <div class="buy-rates" id="GBP_USD_Buy"></div>
                     </div>
                     <div class="pips" id="GBP_USD_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <!-- <div class="indicator" id="USD_JPY_indicator"></div> -->
                     <div class="header" id="USD_JPY_header" onclick="changeInstrument('USDJPY')">USD/JPY<span class="fas fa-check-circle" id="USDJPY_span" style="display:none"></div>
                     <div class="rates-container">
                        <div class="sell-rates" id="USD_JPY_Sell"></div>
                        <div class="buy-rates" id="USD_JPY_Buy"></div>
                     </div>
                     <div class="pips" id="USD_JPY_Pips"></div>
                  </div>
               </div>

               <div class="price">
                  <div class="rates">
                     <!-- <div class="indicator" id="EUR_JPY_indicator"></div> -->
                     <div class="header" id="EUR_JPY_header" onclick="changeInstrument('EURJPY')">EUR/JPY <span class="fas fa-check-circle" id="EURJPY_span" style="display:none"></div>
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
                  var id = ["_Sell","_Buy","_Pips","_header"];
                     for (i=0;i<id.length;i++)
                     {
                        id[i] = currency + id[i];
                     }       
                  var sell = document.getElementById(id[0]);
                  var buy = document.getElementById(id[1]);
                  var pips = document.getElementById(id[2]);
                  var header = document.getElementById(id[3]);
                  var date_split = json.time.split("T");
                  var time_split = date_split[1].split(".");

                  var previous_sell_price = sell.innerHTML;
                  var previous_buy_price = buy.innerHTML;
                  if (previous_sell_price < json.bids[0].price && previous_buy_price < json.asks[0].price)
                  {
                     highlight(header,buy,sell,'greenyellow','#11c900');
                  }
                  else if (previous_sell_price > json.bids[0].price && previous_buy_price > json.asks[0].price)
                  {
                     highlight(header,buy,sell,'#fc3030','#fc3030');
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

                  updateTable(currency,json.bids[0].price,json.asks[0].price);

               }
            }
         }
      });

      function highlight(header,buy,sell,bgcolor,color){
         header.style.color = color ;
         buy.style.color = color;
         sell.style.color = color;
         setTimeout(function(){
            header.style.color = 'black' ;
            buy.style.color = 'black';
            sell.style.color = 'black';
         }, 1000);
         
      }

      function updateTable(currency,sell,buy){
         var table = document.getElementById("all_orders");
         var e_currency = currency.replace("_","/");
         for (i= 1;i< table.rows.length;i++) {
            let row = table.rows[i]
            for (let j in row.cells) {

               var pairs = row.cells[1].innerHTML;
               var type = row.cells[3].innerHTML;
               var units = row.cells[2].innerHTML;
               var entry = row.cells[5].innerHTML;

               if(e_currency == pairs && type=="Long")
               {
                  var pips = buy - entry;
                  row.cells[6].innerHTML = buy;
               // row.cells[7].innerHTML = "500";
               // row.cells[8].innerHTML = pips * 10000;
               // row.cells[9].innerHTML = "8";
               }
               else if(e_currency == pairs && type=="Short"){
                  row.cells[6].innerHTML = sell;
               // row.cells[7].innerHTML = "500";
               // row.cells[8].innerHTML = "700";
               // row.cells[9].innerHTML = "8";
               }

            }  
         }
      }


    </script> 


@stop