



<div class="modal fade" id="WilliamsR-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Williams %R</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>

            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="william_period" class="form-control col-md-15" value="10" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body decrease-height">
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Description</b></label>
                        <label class="mx-left">Williams %R, or just %R, is a momentum indicator showing the current closing price in relation to the high and low of the past N days (for a given N). It was developed by trader and author Larry Williams and is used in the stock and commodities markets.&ensp;<a href="{{route('learning-william')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Parameters</b></label>
                        <label class="mx-left">There is only one parameter - the period.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="william_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="WilliamsR-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

