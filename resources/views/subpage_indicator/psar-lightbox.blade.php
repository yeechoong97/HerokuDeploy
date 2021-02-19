<div class="modal fade" id="PSAR-modal" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Parabolic SAR (PSAR)</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body add-height">
                    <div class="button-series decrease-width">
                        <label class="mx-left">Acceleration Factor Start</label>
                        <input type="number" id="psar_start" class="form-control col-md-10" value="0.02"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 ||  event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Acceleration Factor Increment</label>
                        <input type="number" id="psar_increment" class="form-control col-md-10" value="0.02"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109  || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Acceleration Factor Maximum</label>
                        <input type="number" id="psar_max" class="form-control col-md-10" value="0.2"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109  || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body decrease-height">
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Description</b></label>
                        <label class="mx-left">Parabolic SAR (SAR - stop and reverse) is a method devised by J. Welles Wilder, Jr, to find trends in market prices or securities. It may be used as a trailing stop loss based on prices tending to stay within a parabolic curve during a strong trend.&ensp;<a href="{{route('learning-psar')}}" target="_blank">Learn More</a></label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Parameters</b></label>
                        <label class="mx-left">There are three parameters a PSAR indicator has. They are the acceleration factor start, acceleration factor increment and acceleration factor maximum.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="psar_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="PSAR-exit-modal" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
