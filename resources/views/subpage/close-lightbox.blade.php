
<div class="modal fade" id="reduce-close-modal"  tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-buy-sell" id="reduce-close-modal-content">
         <div class="modal-header">
            <div class="modal-title">Reduce/Close
               <span aria-hidden="true" class="close" aria-label="Close" id="close-modal-closebtn" data-dismiss="modal" onclick="clearCloseInput()">&times;</span>
               <span class="close " onclick="showCloseTips()">?</span>
            </div>
         </div>
         <div class="modal-body">
            <div class="upper-body">
               <div class="instrument-title" id="position-title">EUR/USD</div>
                  <div class="position-units">
                     <div class="units-label">Units Available :</div>
                     <input class="form-contro col-md-4 my-2" id="units_orders_quantity" disabled />
                  </div>
                  <div class="second-units-title">Units to Close</div>
                  <div class="close-check">
                     <input type="number" id="position-total-units" class="form-control col-md-8 position-order-units" placeholder="Enter Units" onwheel="javascript: return false" onkeyup="updateRemaining()" onclick="updateRemaining()" maxlength="7" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode==38 || event.keyCode==40 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"></input>
                     <span class="fas fa-check tick-close" id="tick-close" style="display:none"></span>    
                     <span class="fas fa-times cross-close" id="cross-close" style="display:none"></span>      
                  </div>
            </div>
            <div class="lower-body">
               <div class="units-container">
                  <div class="left-units-percentage" id="first-quarter-units" onclick="openOrderBox('T',25)">25%</div>
                  <div class="units-percentage" id="half-units" onclick="openOrderBox('T',50)">50%</div>
                  <div class="units-percentage" id="third-quarter-units" onclick="openOrderBox('T',75)">75%</div>
                  <div class="right-units-percentage" id="full-units" onclick="openOrderBox('T',100)">100%</div>
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
                        <div class="chart-error-label" id="close-error-msg"></div>
                        <div class="form-group chart-align-btn">
                           <button type="submit" id="close-button-intro" class="btn-primary form-control mx-auto col-md-5" onclick="confirmClose()">Submit</button>
                        </div>
                     </div>
            </div>
         </div>
      </div>
   </div>
</div>
