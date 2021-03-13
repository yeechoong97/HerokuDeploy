<div class="modal fade" id="Momentum-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Momentum</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="momentum_period" class="form-control col-md-15" value="14"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Description</b></label>
                        <label class="mx-left">The Momentum indicator is a speed of movement indicator, that is designed to identify the speed (or strength) of a price movement. The momentum indicator compares the most recent closing price to a previous closing price and may be used as a trend-following oscillator (similar to the Moving Average Convergence Divergence (MACD)).&ensp;<a href="{{route('learning-momentum')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Parameters</b></label>
                        <label class="mx-left">There is one parameter: the period.</label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Function</b></label>
                        <label class="mx-left">The Momentum indicator identifies when the price is moving upwards or downwards, and also by how much the price is moving upwards or downwards. When the momentum indicator is above zero, the price has upwards momentum, and when the momentum indicator is below zero the price has downwards momentum.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="momentum_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="Momentum-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
