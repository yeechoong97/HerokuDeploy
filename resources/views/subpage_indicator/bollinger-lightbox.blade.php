<div class="modal fade" id="BBands-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Bollinger Bands (BBands)</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="bbands_period" class="form-control col-md-10" value="20" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Deviation</label>
                        <input type="number" id="bbands_deviation" class="form-control col-md-10" value="2" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Description</strong></label>
                        <label class="mx-left">Bollinger Bands are a volatility indicator that is displayed as two lines (bands): one drawn above a simple moving average of the price and one - below. These bands move closer to the moving average when price volatility is low and move farther away from the moving average when price volatility increases.&ensp;<a href="{{route('learning-bollinger')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Parameters</strong></label>
                        <label class="mx-left">Bollinger Bands parameters can be adjusted. The default parameters are: 20 periods for the simple moving average and 2 for the standard deviations (the distance between each band and the SMA). Increasing the number of periods - decreases the volatility of the SMA, and decreasing their number - increases the volatility of the SMA. Increasing the number of standard deviations moves the bands farther away from the SMA, and decreasing - moves the bands closer to the SMA. Bollinger Bands parameters are the period and the deviation.</label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Function</strong></label>
                        <label class="mx-left">Bollinger Bands are used to determine how volatile a stock is. Stocks move between levels of high and low volatility, and when the Bollinger bands grip a stock, it is a sign that the stock is consolidating and that a breakout is inevitable. When the Bollinger bands widen, it is a sign that the stock has burst out into a new trend.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="bbands_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="BBands-exit-modal"  data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>