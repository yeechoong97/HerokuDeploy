
<div class="modal fade" id="ROC-modal" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Rate of Change (ROC)</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="roc_period" class="form-control col-md-15" value="20" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Description</strong></label>
                        <label class="mx-left">The Rate of Change oscillator is a momentum indicator that consists of one line. The ROC measures the percentage change in the price from one trading period to the next. If the percentage change is big, the ROC line moves harshly up or down, depending on price changing direction. In other case - if the percentage change is small, the ROC line moves slowly up or down, depending on the price changing direction.&ensp;<a href="{{route('learning-roc')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Parameters</strong></label>
                        <label class="mx-left">The ROC indicator parameters can be adjusted. The default parameter is 12 periods for the time frame. Increasing the number of periods for the time frame decreases the volatility of the ROC indicator, and decreasing the number of periods for the time frame increases the volatility of the ROC indicator.</label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Function</strong></label>
                        <label class="mx-left">The ROC oscillator is used to determine is there bullish or bearish momentum behind a stock. The ROC line above the zero line shows bullish momentum, and the ROC line below the zero line shows bearish momentum.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="roc_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="ROC-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

