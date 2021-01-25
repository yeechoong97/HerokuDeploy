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
        
      <div>
         <div class = "left-container">
            <div class="chart-container">
               <!-- TradingView Widget BEGIN -->
               <div class="tradingview-widget-container" style="z-index:0" >
                  <div id="tradingview_70ae7" style="z-index:1"></div>
                  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/USDJPY/?exchange=OANDA" rel="noopener" target="_blank"><span class="blue-text" id="reference">USDJPY Chart</span></a> by TradingView</div>
                 
                     <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                     <script type="text/javascript">
                     LoadCharts("OANDA:EURUSD");

                     function changeInstrument(currency){
                        instrument = "OANDA:" + currency
                        LoadCharts(instrument);
                        appendData(currency);
                        setRemarks(currency);
                     }

                     //Change the remarks of the selected instrument
                     function setRemarks(currency){

                        var instrument_lists = {
                           EURUSD:{title:"EURUSD",pair:"EUR_USD",preview:"EUR/USD"},
                           AUDUSD:{title:"AUDUSD",pair:"AUD_USD",preview:"AUD/USD"},
                           GBPUSD:{title:"GBPUSD",pair:"GBP_USD",preview:"GBP/USD"},
                           USDJPY:{title:"USDJPY",pair:"USD_JPY",preview:"USD/JPY"},
                           EURJPY:{title:"EURJPY",pair:"EUR_JPY",preview:"EUR/JPY"},
                        }

                        for (var key in instrument_lists){
                           if(currency != instrument_lists[key].title){
                              document.getElementById(instrument_lists[key].title+"_span").style.display = "none";
                              document.getElementById(instrument_lists[key].pair+"_header").style.backgroundColor = "whitesmoke";
                              document.getElementById(instrument_lists[key].pair+"_Buy").style.backgroundColor = "white";
                              document.getElementById(instrument_lists[key].pair+"_Sell").style.backgroundColor = "white";
                              document.getElementById(instrument_lists[key].pair+"_Pips").style.backgroundColor = "whitesmoke";
                           }
                           else{
                              // The instrument matched the array item
                              document.getElementById(instrument_lists[key].title+"_span").style.display = "inline";
                              document.getElementById(instrument_lists[key].pair+"_header").style.backgroundColor = "#fff7eb";
                              document.getElementById(instrument_lists[key].pair+"_Buy").style.backgroundColor = "#e0f0ff";
                              document.getElementById(instrument_lists[key].pair+"_Sell").style.backgroundColor = "#ffeded";
                              document.getElementById(instrument_lists[key].pair+"_Pips").style.backgroundColor = "#f5edff";
                              document.getElementById("lightbox-title").innerHTML = instrument_lists[key].preview;
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
                        var instrument = currency.slice(0,3) + "_" + currency.slice(3);
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
               <div class="table_record" id="table_all_records">
                  <table id="all_orders">
                     <thead>
                     <tr>
                        <th align="center">TicketID</th>
                        <th>Pair</th>
                        <th>Units</th>
                        <th>Type</th>
                        <th>Margin</th>
                        <th>Price</th>
                        <th>Current</th>
                        <th>Profit(USD)</th>
                        <th>Profit(Pips)</th>
                        <th>Profit(%)</th>
                        <th>Action</th>
                     </tr>
                     </thead>
                     <tbody>
                        @foreach($account->order as $record)
                           <tr>
                              <td>{{$record->ticketID}}</td>
                              <td>{{$record->pair}}</td>
                              <td>{{$record->available_units}}</td>
                              <td>{{$record->type}}</td>
                              <td>{{$record->margin}}</td>
                              <td>{{$record->entry_price}}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><a class="close_position" onclick="openOrderBox('{{$record->ticketID}}',100)"><span class="far fa-times-circle"></span></a></td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         
         <div id="testing_case"></div>
         <!-- Lightbox for executing orders -->
         <div id ="Lightbox" class="lightbox">
               <div class="modal-content modal fade">
                  <div class="modal-header">
                     <div class="modal-title">Order</div>
                     <span aria-hidden="true" class="close" aria-label="Close" onclick="closeLightbox('Lightbox')">&times;</span>
                  </div>
                  <div class="modal-body">
                     <div class="upper-body">
                        <div class="instrument-title" id="lightbox-title">EUR/USD</div>
                           <div class="order-container">
                              <div class="order-sell" id="order-sell">
                                 <a href="#" class="order-btns" onclick="openLightbox('sell')">
                                    <span class="buy-span-title">SELL</span>
                                    <span class="buy-span-data" id="order-sell-data"></span>
                                 </a>
                              </div>
                              <div class="order-buy" id="order-buy">
                                 <a href="#" class="order-btns" onclick="openLightbox('buy')">
                                    <span class="buy-span-title">BUY</span>
                                    <span class="buy-span-data" id="order-buy-data"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="order-spread">
                              <span class="spread-span-data" id="order-spread-data"></span>
                           </div>
                           <div class="lower-title">Market</div>
                        </div>

                     <div class="lower-body">
                        <div class="unit-check">
                              <input type="number" id="order-units" class="form-control col-md-8 units" placeholder="Enter Units" onkeyup="validateUnits()" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==7 && event.keyCode!=8) return false;"></input> 
                              <span class="fas fa-check tick-check" id="tick" style="display:none"></span>    
                              <span class="fas fa-times cross-check" id="cross" style="display:none"></span>      
                        </div>
                           <span class="unit-remark"><b>*</b>Units Available: 1,000,000</span>
                           <div class="margin-check">
                              <div class="label">Margin Required: </div>
                              <div class="value" id="margin-value">0</div>
                           </div>
                              <div>
                                 <span id="order-type" style="display:none"></span>
                                 <button type="submit" class="btn submit-btn" onclick="saveOrder()">Submit</button>
                              </div>
                              
                     </div>
                  </div>
               </div>
         </div>

         <!-- Lightbox for close Position -->
         <div id ="Position_box" class="lightbox">
               <div class="modal-content modal fade">
                  <div class="modal-header">
                     <div class="modal-title">Reduce/Close</div>
                     <span aria-hidden="true" class="close" aria-label="Close" onclick="closeLightbox('Position_box')">&times;</span>
                  </div>
                  <div class="modal-body">
                     <div class="upper-body">
                        <div class="instrument-title" id="position-title">EUR/USD</div>
                           <div class="position-units">
                              <div class="units-label">Units Available :</div>
                              <div class="units-quantity" id="units_orders_quantity"></div>
                           </div>
                           <div class="second-units-title">Units to Close</div>
                           <div class="close-check">
                              <input type="number" id="position-total-units" class="form-control col-md-8 position-order-units" placeholder="Enter Units" onkeyup="updateRemaining()" onclick="updateRemaining()" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==7 && event.keyCode!=8) return false;"></input>
                              <span class="fas fa-check tick-close" id="tick-close" style="display:none"></span>    
                              <span class="fas fa-times cross-close" id="cross-close" style="display:none"></span>      
                           </div>
                     </div>

                     <div class="lower-body">
                        <div class="units-container">
                           <div class="left-units-percentage" id="first-left-units" onclick="openOrderBox('T',25)">25%</div>
                           <div class="units-percentage" id="second-left-units" onclick="openOrderBox('T',50)">50%</div>
                           <div class="units-percentage" id="third-left-units" onclick="openOrderBox('T',75)">75%</div>
                           <div class="right-units-percentage" id="fourth-left-units" onclick="openOrderBox('T',100)">100%</div>
                           <input type="hidden" id="hidden_percent" value=100></input>
                        </div>
                        <div class="detail-container">
                              <div class="title-label">Units Remaining :</div>
                              <div class="data-label" id="units_remaining"></div>
                              <div class="title-label">Profit/Loss :</div>
                              <div class="data-label" id="units-profit"></div>
                        </div>
                              <div>
                                 <span id="position-ticket-id" style="display:none"></span>
                                 <button type="submit" class="btn submit-btn" onclick="closePosition()">Submit</button>
                              </div>
                     </div>
                  </div>
               </div>
         </div>

         <div class="mydiv" id ="mydiv">
            <div class="mydivheader" id ="mydivheader"></div>
               <div class="order_button" id ="sell">
                 <a href="#" class="sell_btn" onclick="openLightbox('sell')">
                     <span class="span-title-sell">SELL</span>
                     <span class="span-data" id="sell-action"></span>
                  </a> 
               </div>
            <div class="order_button" id ="buy">
               <div class="order_button" id ="buy">
                  <a href="#" class="buy_btn" onclick="openLightbox('buy')">
                     <span class="span-title-buy">BUY</span>
                     <span class="span-data" id="buy-action"></span>
                  </a> 
               </div>
            </div>
               
            <div class="order_button" id ="pips">
               <div class="order_button" id ="buy">
                  <a class="spread_btn" onclick="testing()">
                     <span class="span-title-spread">SPREAD</span>
                     <span class="span-data" id="pips-action"></span>
                  </a> 
               </div>
            </div>
         </div>

         <div class = "right-container">
            <div class="account-container">
               <div class="header">
                  <h6>Account Details</h6>
               </div>
                  <div id="account-table">
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
                           <div class="rTableCell_data"  id="account-margin">${{$account->margin}}</div>
                        </div>
                        <div class="rTableRow">
                           <div class="rTableCell_label">Margin Used :</div>
                           <div class="rTableCell_data" id="account-margin-used">{{$account->margin_used}}</div>
                        </div>
                        <div class="rTableRow">
                           <div class="rTableCell_label">Leverage :</div>
                           <div class="rTableCell_data">{{$account->leverage}}</div>
                        </div>
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

<!----------------------- Javascript Function ------------------------------------------->

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


<!-- <script src ="http://127.0.0.1:3000/socket.io/socket.io.js"></script> --> 
   <script >
      const socket = io('mighty-headland-26950.herokuapp.com', {
            transports: ['websocket'], 
            upgrade: false
            });
     
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
                     highlight(header,buy,sell,'#11c900');
                  }
                  else if (previous_sell_price > json.bids[0].price && previous_buy_price > json.asks[0].price)
                  {
                     highlight(header,buy,sell,'#fc3030');
                  }
                  sell.innerHTML = json.bids[0].price;
                  buy.innerHTML = json.asks[0].price;

                  var selected_pair = document.getElementById("reference").innerHTML;
                  var splited = selected_pair.split(" ");
                  var currency_pair = splited[0].slice(0,3) + "_" + splited[0].slice(3);
                  var multiply = 10000;
                  
                  if (currency.includes("JPY")==true){
                     multiply = 100;
                  }
                  pips.innerHTML = ((json.asks[0].price-json.bids[0].price)*multiply).toFixed(1);
                  
                  if (currency == currency_pair)
                  {
                    document.getElementById("sell-action").innerHTML = json.bids[0].price;
                    document.getElementById("buy-action").innerHTML = json.asks[0].price;
                    document.getElementById("pips-action").innerHTML = ((json.asks[0].price-json.bids[0].price)*multiply).toFixed(1);
                    document.getElementById("order-sell-data").innerHTML = json.bids[0].price;
                    document.getElementById("order-buy-data").innerHTML = json.asks[0].price;
                    document.getElementById("order-spread-data").innerHTML = ((json.asks[0].price-json.bids[0].price)*multiply).toFixed(1);
                  }
                  updateTable(currency,json.bids[0].price,json.asks[0].price);
               }
            }
         }
      });

      //Update the font colour in the live streaming box
      function highlight(header,buy,sell,color)
      {
         header.style.color = color ;
         buy.style.color = color;
         sell.style.color = color;
         setTimeout(function(){
            header.style.color = 'black' ;
            buy.style.color = 'black';
            sell.style.color = 'black';
         }, 1000);
         
      }

      //Update the order table
      function updateTable(currency,sell,buy)
      {
         var table = document.getElementById("all_orders");
         var e_currency = currency.replace("_","/");
         buy = parseFloat(buy);
         sell = parseFloat(sell);

         //Update the order record in the table
         for (i= 1;i< table.rows.length;i++) {
            let row = table.rows[i] 
            var id = row.cells[0].innerHTML;
            var pairs = row.cells[1].innerHTML;
            var type = row.cells[3].innerHTML;
            var units = row.cells[2].innerHTML;
            var entry = row.cells[5].innerHTML;
            var decimal = 1;
            var multiply = 10000;
            var profit_usd, pre_profit = 0;
            var margin = 0;

            //Check the input with switch case for dedicated formula
            switch(pairs){
               case "USD/JPY":
                  var temp_sell = document.getElementById("USD_JPY_Sell").innerHTML;
                  var temp_buy = document.getElementById("USD_JPY_Buy").innerHTML;
                  var midpoint = (parseFloat(temp_sell) + parseFloat(temp_buy))/2;
                  pre_profit = 0.01 * units / midpoint ;
                  multiply = 100;
                  decimal = 0.01;
                  break;

               case "EUR/JPY":
                  var temp_sell = document.getElementById("USD_JPY_Sell").innerHTML;
                  var temp_buy = document.getElementById("USD_JPY_Buy").innerHTML;
                  var midpoint = (parseFloat(temp_sell) + parseFloat(temp_buy))/2;
                  pre_profit = 0.01 * units / midpoint;
                  multiply = 100;
                  decimal = 0.01;
                  break;

               default:
                  pre_profit = 0.0001 * units ;
                  break;
            }

            //Check the instrument and type
            if(e_currency == pairs && type=="Long"){
               var pips = (sell - entry) * multiply;
               profit_usd = pre_profit * pips;
               var profit_percent = profit_usd/(((buy+sell)/2)*(units*decimal))*100;
               row.cells[6].innerHTML = sell;
               row.cells[7].innerHTML = profit_usd.toFixed(2);
               row.cells[8].innerHTML = pips.toFixed(1);
               row.cells[9].innerHTML = profit_percent.toFixed(2);
            }
            else if(e_currency == pairs && type=="Short"){
               var pips = (entry - buy) * multiply;
               profit_usd = pre_profit * pips;
               var profit_percent = profit_usd/(((buy+sell)/2)*(units*decimal))*100;
               row.cells[6].innerHTML = buy;
               row.cells[7].innerHTML = profit_usd.toFixed(2);
               row.cells[8].innerHTML = pips.toFixed(1);
               row.cells[9].innerHTML = profit_percent.toFixed(2);
            }

            //Update the colour of font according to profit or loss
            if(e_currency == pairs && profit_usd>0){
               row.cells[7].style.color = "#1cbd00";
               row.cells[8].style.color = "#1cbd00";
               row.cells[9].style.color = "#1cbd00";
            }
            else if (e_currency == pairs && profit_usd<0){
               row.cells[7].style.color = "red";
               row.cells[8].style.color = "red";
               row.cells[9].style.color = "red";
            }

            var exit_id = document.getElementById('position-ticket-id').innerHTML;
            var percent = document.getElementById('hidden_percent').value;
            if (exit_id == id && e_currency == pairs){
               document.getElementById('units-profit').innerHTML = (profit_usd*(percent/100)).toFixed(2);
            }

         }  
      }

      //Open the Lightbox
      function openLightbox(type) 
      {
         document.getElementById('Lightbox').style.display = 'block';
         if (type=="sell"){
            document.getElementById("order-sell").style.backgroundColor= "#ffb9b9";
            document.getElementById("order-buy").style.backgroundColor = "white";
         }
         else{
            document.getElementById("order-buy").style.backgroundColor = "#9ecdfc";
            document.getElementById("order-sell").style.backgroundColor = "white";
         }
         document.getElementById("order-type").innerHTML = type;
         updateLive();
      }

      //Update the data in the lightbox
      function updateLive()
      {
         var sell = document.getElementById('sell-action').innerHTML;
         var buy = document.getElementById('buy-action').innerHTML;
         var pips = document.getElementById('pips-action').innerHTML;
         document.getElementById('order-sell-data').innerHTML = sell;
         document.getElementById('order-buy-data').innerHTML = buy;
         document.getElementById('order-spread-data').innerHTML = pips;
      }

      //Open the Close Position Order Lightbox
      function openOrderBox(ticketID,percentage) 
      {
         if (ticketID == "T"){
         ticketID = document.getElementById('position-ticket-id').innerHTML;
         document.getElementById('hidden_percent').value = percentage;
         }

         var instrument, units, type, entry, profit;
         var table = document.getElementById("all_orders");
         for (i= 1;i< table.rows.length;i++) {
            let row = table.rows[i]
               var id = row.cells[0].innerHTML;
               if(id == ticketID)
               {
                  instrument= row.cells[1].innerHTML;
                  units = row.cells[2].innerHTML;
                  type = row.cells[3].innerHTML;
                  entry = row.cells[5].innerHTML;
                  profit = row.cells[7].innerHTML;
               }
         }

            document.getElementById('Position_box').style.display = 'block';
            document.getElementById('position-ticket-id').innerHTML = ticketID;
            document.getElementById('position-title').innerHTML = instrument;
            document.getElementById('units_orders_quantity').innerHTML = units;
            document.getElementById('position-total-units').value = units;
            document.getElementById('units-profit').innerHTML = profit;

            var array = {
               first:{ value:25 , name: "first-left-units"},
               second:{ value:50, name: "second-left-units"},
               third:{ value:75, name:"third-left-units"},
               fourth:{ value:100,name: "fourth-left-units"}};

            for(var key in array){
               if (percentage == array[key].value){
                  document.getElementById(array[key].name).style.backgroundColor = "#9ecdfc";
                  document.getElementById('position-total-units').value = units * (percentage/100) ;
                  document.getElementById('units_remaining').innerHTML = units - (units * (percentage/100));
                  document.getElementById('units-profit').innerHTML = (profit * (percentage/100)).toFixed(2);
               }
               else{
                  document.getElementById(array[key].name).style.backgroundColor = "white";
               }
            }
      }

      //Validate the input in the Lightbox Units
      function validateUnits(){
         var units = document.getElementById('order-units').value;
         var type = document.getElementById("order-type").innerHTML;
         var instrument = document.getElementById('lightbox-title').innerHTML;
         var init_leverage = "{{$account->leverage}}";
         var leverage = init_leverage.split(":");
         leverage[0] = parseInt(leverage[0]);
         var account_margin = document.getElementById('account-margin').innerHTML;
         account_margin = parseFloat(account_margin.substring(1));
         var entry = document.getElementById("order-"+type+"-data").innerHTML;
         var exit;

         if(type=="sell"){
            exit=document.getElementById("order-buy-data").innerHTML;
         }
         else{
            exit=document.getElementById("order-sell-data").innerHTML;
         }
         var margin = calculateMargin(instrument,units,leverage[0],entry,exit);

         if (margin>=account_margin || units>1000000 || units==0)
         {
            document.getElementById('tick').style.display = 'none';
            document.getElementById('cross').style.display = 'inline';
         }
         else
         {
            document.getElementById('tick').style.display = 'inline';
            document.getElementById('cross').style.display = 'none';
         }
         document.getElementById('margin-value').innerHTML = margin;

      }

      //Update the profit and margin while inputting in Lightbox
      function updateRemaining()
      {
         var table = document.getElementById("all_orders");
         var ticketID = document.getElementById('position-ticket-id').innerHTML;
         var profit;
         for (i= 1;i< table.rows.length;i++) {
            let row = table.rows[i]
            for (let j in row.cells) {
               var id = row.cells[0].innerHTML;
               if(id == ticketID)
               {
                  profit = row.cells[7].innerHTML;
               }
            }}
         var deduct = document.getElementById('position-total-units').value;
         var units = document.getElementById('units_orders_quantity').innerHTML;
         document.getElementById('units_remaining').innerHTML = units - deduct;
         var percentage = 100 - ((units - deduct)/units*100);
         document.getElementById('hidden_percent').value = percentage;
         document.getElementById('units-profit').innerHTML = (profit * (percentage/100)).toFixed(2);

         var array = {
               first:{ value:25 , name: "first-left-units"},
               second:{ value:50, name: "second-left-units"},
               third:{ value:75, name:"third-left-units"},
               fourth:{ value:100,name: "fourth-left-units"}};

            for(var key in array){
               if (percentage == array[key].value){
                  document.getElementById(array[key].name).style.backgroundColor = "#9ecdfc";
               }
               else{
                  document.getElementById(array[key].name).style.backgroundColor = "white";
               }
            }
         
         if(deduct> parseInt(units) || deduct == 0 || deduct=="")
         {
            document.getElementById('tick-close').style.display = 'none';
            document.getElementById('cross-close').style.display = 'inline';
         }
         else
         {
            document.getElementById('tick-close').style.display = 'inline';
            document.getElementById('cross-close').style.display = 'none';
         }
      }

      //Close the lightbox
      function closeLightbox(container) 
      {
         document.getElementById(container).style.display = 'none';
         document.getElementById('tick').style.display = 'none';
         document.getElementById('cross').style.display = 'none';
         document.getElementById('tick-close').style.display = 'none';
         document.getElementById('cross-close').style.display = 'none';
         document.getElementById('order-units').value = "";
         document.getElementById('margin-value').innerHTML = 0;

      }

      //Calculate the margin for instrument
      function calculateMargin(instrument,units,leverage,entry,exit)
      {
         var midpoint = (parseFloat(entry)+parseFloat(exit))/2;
         switch(instrument){
            case "USD/JPY":
               margin = (units/leverage*1).toFixed(4);
               break;

            case "EUR/JPY":
               var temp_sell = document.getElementById("EUR_USD_Sell").innerHTML;
               var temp_buy = document.getElementById("EUR_USD_Buy").innerHTML;
               midpoint = (parseFloat(temp_sell) + parseFloat(temp_buy))/2;
               margin = (units/leverage*midpoint).toFixed(4);
               break;

            default: 
               margin = (units/leverage*midpoint).toFixed(4);
               break;
         }
         return margin;
      }

      //Save the order into database
      function saveOrder() 
      {
         var status = document.getElementById('cross').style.display;
         var units = document.getElementById("order-units").value;
         if (status=="inline" || units<=0 || units=="")
         {
            alert('Please enter valid units in the field provided.');
         }
         else
         {
            var units = document.getElementById("order-units").value;
            var token = $('meta[name="csrf-token"]').attr('content');
            var type = document.getElementById("order-type").innerHTML;
            var entry = document.getElementById("order-"+type+"-data").innerHTML;
            var instrument = document.getElementById("lightbox-title").innerHTML;
            var USDJPY_sell = document.getElementById("USD_JPY_Sell").innerHTML;
            var USDJPY_buy = document.getElementById("USD_JPY_Buy").innerHTML;
            var EURJPY_sell = document.getElementById("EUR_USD_Sell").innerHTML;
            var EURJPY_buy = document.getElementById("EUR_USD_Buy").innerHTML;
            var init_leverage = "{{$account->leverage}}";
            var leverage = init_leverage.split(":");
            leverage[0] = parseInt(leverage[0]);
            var exit;

            if(type=="sell"){
               exit=document.getElementById("order-buy-data").innerHTML;
               type="Short";
            }
            else{
               exit=document.getElementById("order-sell-data").innerHTML;
               type="Long";
            }
            var margin = calculateMargin(instrument,units,leverage[0],entry,exit);

            $.ajax({
                  type:'POST',
                  url:'/index/store',
                  data: {
                     _token:token,
                     instrument:instrument,
                     unit:units,
                     type:type,
                     entry:entry,
                     exit:exit,
                     margin:margin,
                     USDJPY_sell:USDJPY_sell,
                     USDJPY_buy:USDJPY_buy,
                     EURJPY_sell:EURJPY_sell,
                     EURJPY_buy:EURJPY_buy,
                  },
                  success:function(data) {
                     closeLightbox("Lightbox");
                     reload();
                     alert(data.message);
                  },
                  error: function(data){
                     console.log(JSON.stringify(data));
                     }
            });
         }
      }

      //Update the order in the database
      function closePosition()
      {
         var status = document.getElementById('cross-close').style.display;
         var deduct = document.getElementById('position-total-units').value;
         if (status == "inline" || deduct=="" || deduct<=0 )
         {
            alert("Please enter valid units in the field provided.");
         }
         else
         {
            var token = $('meta[name="csrf-token"]').attr('content');
            var exit, cost, profit;
            var ticketID = document.getElementById('position-ticket-id').innerHTML;
            var remaining_units = document.getElementById('units_remaining').innerHTML;
            var instrument = document.getElementById("position-title").innerHTML;
            var init_leverage = "{{$account->leverage}}";
            var leverage = init_leverage.split(":");
            leverage[0] = parseInt(leverage[0]);

            var table = document.getElementById("all_orders");
            for (i= 1;i< table.rows.length;i++) {
               let row = table.rows[i]
                  var id = row.cells[0].innerHTML;
                  if(id == ticketID)
                  {
                     entry = row.cells[5].innerHTML;
                     exit = row.cells[6].innerHTML;
                     cost = row.cells[7].innerHTML;
                     profit = row.cells[8].innerHTML;
                  }
               }
            var margin = calculateMargin(instrument,remaining_units,leverage[0],entry,exit);

            $.ajax({
                  type:'PUT',
                  url:'/index/close',
                  data: {
                     _token:token,
                     ticketID:ticketID,
                     margin:margin,
                     entry:entry,
                     exit:exit,
                     cost:cost,
                     profit:profit,
                     remaining_units:remaining_units,
                  },
                  success:function(data) {
                     closeLightbox('Position_box');
                     reload();
                     alert(data.message);
                  },
                  error: function(data){
                     console.log(JSON.stringify(data));
                     }
            });
         }
      }

      //Refresh the table after perform an order / close a position
      function reload()
      {
            var url = '/index';
            $("#table_all_records").load(url+" #table_all_records","");
            $("#account-table").load(url+" #account-table","");
            document.getElementById("order-units").value = 0;
      }

      
      function testing(){
         var token = $('meta[name="csrf-token"]').attr('content');
        
         $.ajax({
               type:'GET',
               url:'/index/testing',
               data: {
                  _token:token,
               },
               success:function(data) {
                  $("#testing_case").html(data);
                  document.getElementById('testingbox').style.display = 'block';
               },
               error: function(data){
                  console.log(JSON.stringify(data));
                  }
         });
      }

    </script> 


@stop