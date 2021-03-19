

<div class="modal fade" id="Stochastic-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Stochastic Oscillator</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body add-height-2">
                    <div class="button-series">
                        <label class="mx-left">K-Period</label>
                        <input type="number" id="stochastic-period" class="form-control col-md-10" value="14" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Kma Period</label>
                        <input type="number" id="stochastic-kma" class="form-control col-md-10" value="3" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)" />
                    </div>
                    <div class="button-series">
                        <label class="mx-left">D-Period</label>
                        <input type="number" id="stochastic-d" class="form-control col-md-10" value="3" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Kma Type</label>
                        <select class="form-control col-md-10" id="stochastic-kma-type">
                            <option value="sma" selected>SMA</option>
                            <option value="ema">EMA</option>
                        </select>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Dma Type</label>
                        <select class="form-control col-md-10" id="stochastic-dma-type">
                            <option value="sma" selected>SMA</option>
                            <option value="ema">EMA</option>
                        </select>             
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Description</strong></label>
                        <label class="mx-left">The Slow Stochastic Oscillator is a momentum indicator that consists of two lines - %K and %D, these lines move in the range between 0 and 100. The slow stochastic shows the interrelation of the current closing price to the trading range in the past. If the current closing price is toward the top of the past trading range, %K moves higher. If the current closing price is toward the bottom of the past trading range, %K moves lower.&ensp;<a href="{{route('learning-stochastic')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Parameters</strong></label>
                        <label class="mx-left">Slow stochastic parameters can be adjusted. The default parameters are 20 periods for the time frame and 5 periods for the %D smoothing. Increasing the number of periods for the time frame decreases the volatility of the slow stochastic, and decreasing the number of periods for the time frame will increase the volatility of the slow stochastic. Also, increasing the number of periods for the %D smoothing decreases the volatility of the %D line, and decreasing the number of periods for the time frame increases the volatility of the %D line.</label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Function</strong></label>
                        <label class="mx-left">The Slow Stochastic Oscillator is used to determine whether there is bullish or bearish momentum behind a stock. %K above %D in the slow stochastic shows bullish momentum, and %K below %D - shows bearish momentum. Also, when %K is above 80, it shows the market may be overbought, and when %K is below 20 - shows the market may be oversold.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="stochastic_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="Stochastic-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
