
<div class="modal fade" id="MFI-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Money Flow Index (MFI)</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="mfi_period" class="form-control col-md-10" value="10" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body decrease-height">
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Description</strong></label>
                        <label class="mx-left">Money flow index (MFI) is an oscillator calculated over an N-day period, ranging from 0 to 100, showing money flow on up days as a percentage of the total of up and down days.&ensp;<a href="{{route('learning-mfi')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Parameters</strong></label>
                        <label class="mx-left">There is only one parameters - the period.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="mfi_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="MFI-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
