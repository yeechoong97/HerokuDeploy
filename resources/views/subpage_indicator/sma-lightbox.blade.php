

<div class="modal fade" id="SMA-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Simple Moving Average (SMA)</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="sma_period" class="form-control col-md-15" value="20" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Description</b></label>
                        <label class="mx-left">A Simple Moving Average is a trending indicator that is displayed as a single line that shows the mean price during a specified period of time. For example, a 20-day SMA shows the average stock price during the last 20 trading periods (including the current period).&ensp;<a href="{{route('learning-ma')}}" target="_blank">Learn More</a></label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Parameters</b></label>
                        <label class="mx-left">SMA period parameter can be adjusted. The default parameter is 20 periods. Increasing the number of periods will decrease the volatility, and decreasing the number of periods will increase the volatility.</label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Usage</b></label>
                        <label class="mx-left">Simple Moving Averages are used by traders to detect the trend of the stock and to identify possible levels of support and resistance. If the Simple Moving Average is trending higher and the price is above it, the stock is considered to be in an uptrend, in other case - if it is trending lower and the price is below it, the stock is considered to be in a downtrend. Also, when the price is above an uptrending SMA line, the Simple Moving Average can act as a possible support level. In the same way, when the price below a downtrending SMA line - the Simple Moving Average can act as a possible resistance level.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="sma_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="SMA-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

