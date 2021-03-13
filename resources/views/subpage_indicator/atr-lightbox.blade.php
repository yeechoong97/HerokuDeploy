<div class="modal fade" id="ATR-modal" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Average True Range (ATR)</div>
                <span aria-hidden="true" class="close" aria-label="Close"  data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number"  id="atr_period" class="form-control col-md-15" value="14" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Description</b></label>
                        <label class="mx-left">Developed by J. Welles Wilder, the Average True Range (ATR) is an indicator that measures volatility. As with most of his indicators, Wilder designed ATR with commodities and daily prices in mind. Commodities are frequently more volatile than stocks. They were are often subject to gaps and limit moves, which occur when a commodity opens up or down its maximum allowed move for the session. A volatility formula based only on the high-low range would fail to capture volatility from gap or limit moves. Wilder created Average True Range to capture this 'missing' volatility. It is important to remember that ATR does not provide an indication of price direction, just volatility. &ensp;<a href="{{route('learning-atr')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Parameters</b></label>
                        <label class="mx-left">Average True Range indicator has only one parameter: the period.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="atr_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="ATR-exit-modal"  data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>


