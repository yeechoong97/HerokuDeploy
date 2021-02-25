<div class="modal fade" id="buy-sell-modal"  tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-buy-sell" id="buy-sell-modal-content">
         <div class="modal-header">
            <div class="modal-title">Order
               <span aria-hidden="true" class="close" aria-label="Close" id="order-modal-closebtn" data-dismiss="modal" onclick="clearInput('order-units')">&times;</span>
               <span class="close " onclick="showBuySellTips()">?</span>
            </div>
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
                     <input type="number" id="order-units" class="form-control col-md-8 units" placeholder="Enter Units" onkeyup="validateUnits()" maxlength="7" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"></input> 
                     <span class="fas fa-check tick-check" id="tick" style="display:none"></span>    
                     <span class="fas fa-times cross-check" id="cross" style="display:none"></span>      
               </div>
               <div class="px-5 text-center">
                  <span class="unit-remark"><b>*</b>Maximum Units: 1,000,000</span><br/>
                  <span class="unit-remark ">Learn Calculation about <a href="#" onclick="showSellTips()">Sell</a> and <a href="#" onclick="showBuyTips()">Buy</a></span>
               </div>
                  <div class="margin-check" id="margin-check-intro">
                     <div class="label">Margin Required: </div>
                     <div class="value" id="margin-value">0</div>
                  </div>
                     <div>
                        <span id="order-type" style="display:none"></span>
                        <div class="chart-error-label" id="order-error-msg"></div>
                        <div class="form-group chart-align-btn">
                           <button type="submit" class="btn-primary form-control mx-auto col-md-5" id="order-submit-intro" onclick="confirmOrder()">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>