
<div class="modal fade" id="DMI-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Directional Movement Index (DMI)</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="dmi_period" class="form-control col-md-10" value="14"  maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Adx Period</label>
                        <input type="number" id="dmi_adx" class="form-control col-md-10" value="14" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)" />
                    </div>
                    <div class="button-series">
                        <label class="mx-left">Wilders Smoothing</label>
                        <select id="dmi_smooth" class="form-control col-md-10">
                            <option value="true" selected>True</option>
                            <option value="false">False</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Description</b></label>
                        <label class="mx-left">Developed by Marc Chaikin, the DMI measures the momentum of the Accumulation Distribution Line using the MACD formula. This makes it an indicator of an indicator. The DMI is the difference between the 3-day EMA of the Accumulation Distribution Line and the 10-day EMA of the Accumulation Distribution Line. Like other momentum indicators, this indicator is designed to anticipate directional changes in the Accumulation Distribution Line by measuring the momentum behind the movements. A momentum change is the first step to a trend change. Anticipating trend changes in the Accumulation Distribution Line can help chartists anticipate trend changes in the underlying security. The Chaikin Oscillator generates signals with crosses above/below the zero line or with bullish/bearish divergences.&ensp;<a href="{{route('learning-dmi')}}" target="_blank" rel="noopener">Learn More</a></label>
                    </div>
                    <div class="description-series">
                        <label class="mx-left"><b class="l-size">Parameters</b></label>
                        <label class="mx-left">DMI indicator needs three parameters: two periods: period and a period for ADX, a smoothing mode for whilders</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="dmi_indicator_btn">Add</button>
                        <button class="form-control btn-danger col-md-2 btn-align-right" id="DMI-exit-modal" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
