
<div class="modal fade" id="MACD-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">Moving Average Convergence/Divergence (MACD)</div>
            <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body-indicator">
            <div class="upper-body">
                <div class="button-series">
                    <label class="mx-left">Fast Period</label>
                    <input type="number" id="macd_fast" class="form-control col-md-10" value="12"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                </div>
                <div class="button-series">
                    <label class="mx-left">Slow Period</label>
                    <input type="number" id="macd_slow" class="form-control col-md-10" value="26"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                </div>
                <div class="button-series">
                    <label class="mx-left">Signal Period</label>
                    <input type="number" id="macd_signal" class="form-control col-md-10" value="9"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                </div>
            </div>
            <hr>
            <div class="lower-body">
                <div class="description-series">
                    <label class="mx-left"><strong class="l-size">Description</strong></label>
                    <label class="mx-left">The Moving Average Convergence/Divergence (MACD) is a momentum indicator that consists of two lines - an indicator line and a signal line. The indicator line displays the difference between two exponential moving averages with different smoothing factors, and the signal line displays an exponential moving average of the difference between mentioned two exponential moving averages.&ensp;<a href="{{route('learning-macd')}}" target="_blank" rel="noopener">Learn More</a></label>
                </div>
                <div class="description-series">
                    <label class="mx-left"><strong class="l-size">Parameters</strong></label>
                    <label class="mx-left">MACD parameters can be adjusted. The default parameters are 26 for the slow exponential moving average, 12 for the fast exponential moving average and 20 for the signal line. Decreasing any of the parameters decreases the volatility of the related line, and increasing them - increases the volatility of the related line.</label>
                </div>
                <div class="description-series">
                    <label class="mx-left"><strong class="l-size">Function</strong></label>
                    <label class="mx-left">The MACD is used to determine is there bullish or bearish momentum behind a stock. When the indicator line is above the signal line, the MACD shows bullish momentum, and the indicator line below the signal line in the MACD shows bearish momentum.</label>
                </div>
            </div>
            <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="macd_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="MACD-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

