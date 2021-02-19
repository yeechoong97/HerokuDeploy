<?php
use App\Common;
?>
<div class="modal fade" id="calculator-lightbox" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Calculator<span aria-hidden="true" class="close" aria-label="Close" data-dismiss="modal">&times;</span>
                </div>
            </div>
            <div class="calculator-content">
                <ul class="nav nav-tabs  justify-content-center pb-0" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="margin-tab" data-toggle="tab" href="#margin" role="tab" aria-controls="margin" aria-selected="true" onclick="resetCalculator()">Margin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pips-tab" data-toggle="tab" href="#pips" role="tab" aria-controls="pips" aria-selected="false" onclick="resetCalculator()">Pips Value</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profit-tab" data-toggle="tab" href="#profit" role="tab" aria-controls="profit" aria-selected="false" onclick="resetCalculator()">Profit</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane tab-contents fade show active" id="margin" role="tabpanel" aria-labelledby="margin-tab">
                        <div class="calculator-left-div">
                            <label class="text-left ml-4 my-2">Account Base Currency</label>
                                <input type="text" id="margin-calculator-base" class="form-control ml-4 col-md-8" value="USD" disabled/>
                            <label class="text-left ml-4 my-2">Currency Pair</label>
                                <select class="form-control ml-4 col-md-8" id="margin-calculator-instrument" onchange="retrieveRate('margin')">
                                    <option value="default" selected disabled>Please Select</option>
                                    @foreach(Common::$instrument as $key=> $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                <span class="text-left ml-4 small" id="margin-calculator-rate">Currency Rate: </span><br/>
                            <label class="text-left ml-4 my-2">Leverage</label>
                                <select class="form-control ml-4 col-md-8" id="margin-calculator-leverage" >
                                    <option value="default" selected disabled>Please Select</option>
                                    @foreach(Common::$leverage as $key=> $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            <label class="text-left ml-4 my-2">Trade Units</label>
                                <input type="number" class="form-control ml-4 col-md-8" id="margin-calculator-units" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true"/>
                            <button class="form-control col-md-5 ml-5 my-2 btn-success" onclick="computeMargin()">Calculate</button>
                            <label class="text-left ml-4 my-2"><b>Required Margin</b></label>
                                <input type="text" class="form-control ml-4 col-md-8" id="margin-calculator-results" disabled /><br/>
                        </div>
                        <div class="calculator-right-div">
                            <label class="text-left my-2 font-weight-bold">Calculation Formula</label>
                                <p class="text-left" style="color:blue">Required Margin = Trade Size ÷ Leverage ✕ Account Currency Exchange Rate (if different from the base currency of the pair traded)</p>
                            <hr>
                            <label class="text-left font-weight-bold">Example</label>
                            <label class="text-left my-2">Trading <b style="color:blue">30,000</b> Units of EUR/USD (<b style="color:red">1.13798</b>) using <b style="color:purple">50:1</b> leverage with an account denominated in USD.</label>
                            <label class="text-left">Trade Size: <b style="color:blue">30,000</b></label>
                            <label class="text-left">Currency Exchange Rate: <b style="color:red">1.13798</b></label>
                            <label class="text-left">Leverage: <b style="color:purple">50:1</b></label>
                            <br/><br/>
                            <label class="text-left font-weight-bold">Required Margin:</label>
                                <label class="text-left font-weight-bold" style="color:green"> 30,000 ÷ 50 ✕ 1.13798 =  $628.78</label>
                        </div>
                    </div>
                    <div class="tab-pane tab-contents fade" id="pips" role="tabpanel" aria-labelledby="pips-tab">
                    <div class="calculator-left-div">
                            <label class="text-left ml-4 my-2">Account Base Currency</label>
                                <select class="form-control ml-4 col-md-8" id="pip-calculator-base">
                                    <option value="default" selected disabled>Please Select</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="JPY">JPY</option>
                                </select>
                            <label class="text-left ml-4 my-2">Currency Pair</label>
                                <select class="form-control ml-4 col-md-8" id="pip-calculator-instrument" onchange="retrieveRate('pip')">
                                    <option value="default" selected disabled>Please Select</option>
                                    @foreach(Common::$instrument as $key=> $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                <span class="text-left ml-4 small" id="pip-calculator-rate">Currency Rate: </span><br/>
                            <label class="text-left ml-4 my-2">Trade Units</label>
                                <input type="number" class="form-control ml-4 col-md-8" id="pip-calculator-units" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==190 || event.keyCode==110 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true"/>
                            <button class="form-control col-md-5 ml-5 my-2 btn-success" onclick="computePips()">Calculate</button>
                            <label class="text-left ml-4 my-2"><b>Pips Value</b></label>
                                <input type="text" class="form-control ml-4 col-md-8" id="pip-calculator-results" disabled /><br/>
                        </div>
                        <div class="calculator-right-div">
                            <label class="text-left my-2 font-weight-bold">Calculation Formula</label>
                                <p class="text-left" style="color:blue">Pip Value = (One Pip / Exchange Rate) * Units</p>
                            <hr>
                            <label class="text-left font-weight-bold">Example</label><br/>
                            <label class="text-left my-2">Account Base Currency : <b>EUR</b></label>
                            <label class="text-left">Currency Pair : <b>EUR/USD</b></label><br/>
                            <label class="text-left">One Pip : <b style="color:blue">0.0001</b></label>
                            <label class="text-left">Currency Rate: <b style="color:red">1.08962</b></label>
                            <label class="text-left">Units: <b style="color:purple">100000</b></label>
                            <br/><br/>
                            <label class="text-left font-weight-bold">Pips Value:</label>
                                <label class="text-left font-weight-bold" style="color:green"> 0.0001 ÷ 1.08962 ✕ 100000 =  €9.18</label>
                        </div>
                    </div>
                    <div class="tab-pane tab-contents fade" id="profit" role="tabpanel" aria-labelledby="profit-tab">
                        <div class="calculator-left-div">
                            <label class="text-left ml-4 my-2">Account Base Currency</label>
                                <input type="text" id="profit-calculator-base" class="form-control ml-4 col-md-8" value="USD" disabled/>
                            <label class="text-left ml-4 my-2">Currency Pair</label>
                                <select class="form-control ml-4 col-md-8" id="profit-calculator-instrument" onchange="retrieveRate('profit')">
                                    <option value="default" selected disabled>Please Select</option>
                                    @foreach(Common::$instrument as $key=> $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            <label class="text-left ml-4 my-2">Order Type</label>
                                <select class="form-control ml-4 col-md-8" id="profit-calculator-type">
                                    <option value="default" selected disabled>Please Select</option>
                                    <option value="buy">Buy</option>
                                    <option value="sell">Sell</option>
                                </select>
                            <label class="text-left ml-4 my-2">Entry Price</label>
                                <input type="number" class="form-control ml-4 col-md-8" id="profit-calculator-entry" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true"/>
                            <label class="text-left ml-4 my-2">Exit Price</label>
                                <input type="number" class="form-control ml-4 col-md-8" id="profit-calculator-exit" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==107 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true"/>
                            <label class="text-left ml-4 my-2">Trade Units</label>
                                <input type="number" class="form-control ml-4 col-md-8" id="profit-calculator-units" onkeydown="javascript: return event.keyCode == 69 || event.keyCode==109 || event.keyCode==107 || event.keyCode==110 || event.keyCode==190 || event.keyCode==187 || event.keyCode==189 || event.keyCode == 13 ? false : true"/>
                            <button class="form-control col-md-5 ml-5 my-2 btn-success" onclick="computeProfit()">Calculate</button>
                            <label class="text-left ml-4 my-2"><b>Profit Value</b></label>
                                <input type="text" class="form-control ml-4 col-md-8" id="profit-calculator-results" disabled /><br/>
                        </div>
                        <div class="calculator-right-div">
                            <label class="text-left my-2 font-weight-bold">Calculation Formula</label>
                                <p class="text-left" style="color:blue">Profit = (One Pip * Units) * Pips</p>
                            <hr>
                            <label class="text-left font-weight-bold">Example</label><br/>
                            <label class="text-left my-2">Account Base Currency : <b>USD</b></label><br/>
                            <label class="text-left">One Pip : <b>0.0001</b></label><br/>
                            <label class="text-left">Currency Pair : <b>EUR/USD</b></label><br/>
                            <label class="text-left">Type : <b>Buy</b></label><br/>
                            <label class="text-left">Entry Price : <b style="color:blue">1.12336</b></label><br/>
                            <label class="text-left">Entry Price : <b style="color:brown">1.12444</b></label><br/>
                            <label class="text-left">Pips: <b style="color:red">10.8</b> (0.00108 ✕ 10000)</label><br/>
                            <label class="text-left">Units: <b style="color:purple">100000</b></label>
                            <br/><br/>
                            <label class="text-left font-weight-bold">Pips Value:</label><br/>
                                <label class="text-left font-weight-bold" style="color:green"> (0.0001 ✕  100000) ✕ 10.8 = $108</label>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>