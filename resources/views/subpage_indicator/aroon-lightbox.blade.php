<div class="modal fade" id="Aroon-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Aroon</div>
                <span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-body-indicator">
                <div class="upper-body">
                    <div class="button-series">
                        <label class="mx-left">Period</label>
                        <input type="number" id="aroon_period" class="form-control col-md-15" value="20" maxlength="5" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true" oninput="this.value=this.value.slice(0,this.maxLength)"/>
                    </div>
                </div>
                <hr>
                <div class="lower-body">
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Description</strong></label>
                        <label class="mx-left">Developed by Tushar Chande in 1995, Aroon is an indicator system that determines whether a stock is trending or not and how strong the trend is. 'Aroon' means 'Dawn's Early Light' in Sanskrit. Chande chose this name because the indicators are designed to reveal the beginning of a new trend.<br><br>
                        The Aroon indicators measure the number of periods since price recorded an x-day high or low. There are two separate indicators: Aroon-Up and Aroon-Down. A 25-day Aroon-Up measures the number of days since a 25-day high. A 25-day Aroon-Down measures the number of days since a 25-day low. In this sense, the Aroon indicators are quite different from typical momentum oscillators, which focus on price relative to time. Aroon is unique because it focuses on time relative to price. Chartists can use the Aroon indicators to spot emerging trends, identify consolidations, define correction periods and anticipate reversals.&ensp;<a href="{{route('learning-aroon')}}" target="_blank" rel="noopener">Learn More</a>
                        </label>
                    </div>
                    <br>
                    <div class="description-series">
                        <label class="mx-left"><strong class="l-size">Parameters</strong></label>
                        <label class="mx-left">Aroon indicator has only one parameter: the period.</label>
                    </div>
                </div>
                <hr>
                <div class="btn-body">
                    <button class="form-control btn-primary col-md-2 btn-align-right" id="aroon_indicator_btn">Add</button>
                    <button class="form-control btn-danger col-md-2 btn-align-right" id="Aroon-exit-modal"  data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
