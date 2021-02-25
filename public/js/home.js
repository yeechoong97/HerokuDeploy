const arrayPercentage = {
    firstQuarter: { value: 25, name: "first-quarter-units" },
    half: { value: 50, name: "half-units" },
    thirdQuarter: { value: 75, name: "third-quarter-units" },
    full: { value: 100, name: "full-units" }
};

function toggleChat() {
    window.open('/chat', "Live Chat", "height=550,width=800");
}

//Update the font colour in the live streaming box
function highlight(divHeader, buyingPrice, sellingPrice, fontColor) {
    divHeader.style.color = fontColor;
    buyingPrice.style.color = fontColor;
    sellingPrice.style.color = fontColor;
    setTimeout(function() {
        divHeader.style.color = 'black';
        buyingPrice.style.color = 'black';
        sellingPrice.style.color = 'black';
    }, 1000);
}

//Update the order table
function updateTable(instrumentSelected, sellingPrice, buyingPrice) {
    var orderTable = document.getElementById("all_orders");
    instrumentSelected = instrumentSelected.replace("_", "/");

    //Update the order record in the table
    for (i = 1; i < orderTable.rows.length; i++) {
        let row = orderTable.rows[i]
        var ticketID = row.cells[0].innerHTML;
        var currencyPair = row.cells[2].innerHTML;
        var orderUnits = row.cells[3].innerHTML;
        var orderType = row.cells[4].innerHTML;
        var orderEntry = row.cells[6].innerHTML;
        var decimalPlacement = 1;
        var multiplyFormula = 10000;
        var totalProfit, preProfit = 0;

        //Check the input with switch case for dedicated formula
        let USDJPYSell = document.getElementById("USD_JPY_Sell").innerHTML;
        let USDJPYBuy = document.getElementById("USD_JPY_Buy").innerHTML;
        switch (currencyPair) {
            case "USD/JPY":
            case "EUR/JPY":
                let midPoint = (parseFloat(USDJPYSell) + parseFloat(USDJPYBuy)) / 2;
                preProfit = 0.01 * orderUnits / midPoint;
                multiplyFormula = 100;
                decimalPlacement = 0.01;
                break;
            default:
                preProfit = 0.0001 * orderUnits;
                break;
        }

        //Check the instrument and type
        if (instrumentSelected == currencyPair && orderType == "Long") {
            var spreadCalculated = (sellingPrice - orderEntry) * multiplyFormula;
            totalProfit = preProfit * spreadCalculated;
            var profitPercentage = totalProfit / (((buyingPrice + sellingPrice) / 2) * (orderUnits * decimalPlacement)) * 100;
            row.cells[7].innerHTML = sellingPrice;
            row.cells[8].innerHTML = totalProfit.toFixed(2);
            row.cells[9].innerHTML = spreadCalculated.toFixed(1);
            row.cells[10].innerHTML = profitPercentage.toFixed(2);
        } else if (instrumentSelected == currencyPair && orderType == "Short") {
            var spreadCalculated = (orderEntry - buyingPrice) * multiplyFormula;
            totalProfit = preProfit * spreadCalculated;
            var profitPercentage = totalProfit / (((buyingPrice + sellingPrice) / 2) * (orderUnits * decimalPlacement)) * 100;
            row.cells[7].innerHTML = buyingPrice;
            row.cells[8].innerHTML = totalProfit.toFixed(2);
            row.cells[9].innerHTML = spreadCalculated.toFixed(1);
            row.cells[10].innerHTML = profitPercentage.toFixed(2);
        }

        //Update the colour of font according to profit or loss
        if (instrumentSelected == currencyPair && totalProfit > 0) {
            row.cells[8].style.color = "#1cbd00";
            row.cells[9].style.color = "#1cbd00";
            row.cells[10].style.color = "#1cbd00";
        } else if (instrumentSelected == currencyPair && totalProfit < 0) {
            row.cells[8].style.color = "red";
            row.cells[9].style.color = "red";
            row.cells[10].style.color = "red";
        }

        var closePositionID = document.getElementById('position-ticket-id').innerHTML;
        var percentageSelected = document.getElementById('hidden_percent').value;
        if (closePositionID == ticketID && instrumentSelected == currencyPair) {
            document.getElementById('units-profit').innerHTML = (totalProfit * (percentageSelected / 100)).toFixed(2);
        }
    }
}

//Open the Lightbox
function openLightbox(lightboxType) {
    if (lightboxType == "sell") {
        document.getElementById("order-sell").style.backgroundColor = "#ffb9b9";
        document.getElementById("order-buy").style.backgroundColor = "white";
    } else {
        document.getElementById("order-buy").style.backgroundColor = "#9ecdfc";
        document.getElementById("order-sell").style.backgroundColor = "white";
    }
    document.getElementById("order-type").innerHTML = lightboxType;
    updateLive();
}

//Update the data in the lightbox
function updateLive() {
    var sellingPrice = document.getElementById('sell-action').innerHTML;
    var buyingPrice = document.getElementById('buy-action').innerHTML;
    var spreadValue = document.getElementById('pips-action').innerHTML;
    document.getElementById('order-sell-data').innerHTML = sellingPrice;
    document.getElementById('order-buy-data').innerHTML = buyingPrice;
    document.getElementById('order-spread-data').innerHTML = spreadValue;
}

//Open the Close Position Order Lightbox
function openOrderBox(ticketID, percentageSelected) {
    if (ticketID == "T") {
        ticketID = document.getElementById('position-ticket-id').innerHTML;
        document.getElementById('hidden_percent').value = percentageSelected;
    }

    var orderTable = document.getElementById("all_orders");
    for (i = 1; i < orderTable.rows.length; i++) {
        let row = orderTable.rows[i]
        var id = row.cells[0].innerHTML;
        if (id == ticketID) {
            instrumentSelected = row.cells[2].innerHTML;
            orderUnits = row.cells[3].innerHTML;
            orderEntry = row.cells[6].innerHTML;
            orderProfit = row.cells[8].innerHTML;
        }
    }
    document.getElementById('position-ticket-id').innerHTML = ticketID;
    document.getElementById('position-title').innerHTML = instrumentSelected;
    document.getElementById('units_orders_quantity').value = orderUnits;
    document.getElementById('position-total-units').value = orderUnits;
    document.getElementById('units-profit').innerHTML = orderProfit;

    for (let key in arrayPercentage) {
        if (percentageSelected == arrayPercentage[key].value) {
            document.getElementById(arrayPercentage[key].name).style.backgroundColor = "#9ecdfc";
            document.getElementById('position-total-units').value = orderUnits * (percentageSelected / 100);
            document.getElementById('units_remaining').innerHTML = orderUnits - (orderUnits * (percentageSelected / 100));
            document.getElementById('units-profit').innerHTML = (orderProfit * (percentageSelected / 100)).toFixed(2);
        } else {
            document.getElementById(arrayPercentage[key].name).style.backgroundColor = "white";
        }
    }
}

//Validate the input in the Lightbox Units
function validateUnits() {
    var unitInput = document.getElementById('order-units').value;
    var orderType = document.getElementById("order-type").innerHTML;
    var orderInstrument = document.getElementById('lightbox-title').innerHTML;
    var userLeverage = getLeverage(document.getElementById('account-leverage').innerHTML);
    var accountMargin = document.getElementById('account-margin').innerHTML;
    accountMargin = parseFloat(accountMargin.substring(1));
    var entryPrice = document.getElementById(`order-${orderType}-data`).innerHTML;
    var exitPrice = (orderType == "sell") ? document.getElementById("order-buy-data").innerHTML : document.getElementById("order-sell-data").innerHTML;
    var marginComputed = calculateMargin(orderInstrument, unitInput, userLeverage, entryPrice, exitPrice);

    if (marginComputed >= accountMargin || unitInput > 1000000 || unitInput == 0) {
        document.getElementById('tick').style.display = 'none';
        document.getElementById('cross').style.display = 'inline';
    } else {
        document.getElementById('tick').style.display = 'inline';
        document.getElementById('cross').style.display = 'none';
    }
    document.getElementById('margin-value').innerHTML = marginComputed;
    document.getElementById('order-error-msg').innerHTML = "";
    document.getElementById('close-error-msg').innerHTML = "";
}

//Update the profit and margin while inputting in Lightbox
function updateRemaining() {
    var orderTable = document.getElementById("all_orders");
    var ticketID = document.getElementById('position-ticket-id').innerHTML;
    for (i = 1; i < orderTable.rows.length; i++) {
        let row = orderTable.rows[i]
        for (let j in row.cells) {
            var id = row.cells[0].innerHTML;
            if (id == ticketID)
                orderProfit = row.cells[8].innerHTML;
        }
    }
    var deductValue = document.getElementById('position-total-units').value;
    var orderUnit = document.getElementById('units_orders_quantity').value;
    document.getElementById('units_remaining').innerHTML = orderUnit - deductValue;
    var profitPercentage = 100 - ((orderUnit - deductValue) / orderUnit * 100);
    document.getElementById('hidden_percent').value = profitPercentage;
    document.getElementById('units-profit').innerHTML = (orderProfit * (profitPercentage / 100)).toFixed(2);

    for (var key in arrayPercentage) {
        document.getElementById(arrayPercentage[key].name).style.backgroundColor = (profitPercentage == arrayPercentage[key].value) ? "#9ecdfc" : "white";
    }

    if (deductValue > parseInt(orderUnit) || deductValue == 0 || deductValue == "") {
        document.getElementById('tick-close').style.display = 'none';
        document.getElementById('cross-close').style.display = 'inline';
    } else {
        document.getElementById('tick-close').style.display = 'inline';
        document.getElementById('cross-close').style.display = 'none';
    }
}

//Calculate the margin for instrument
function calculateMargin(instrumentSelected, orderUnit, userLeverage, entryPrice, exitPrice) {
    var midPoint = (parseFloat(entryPrice) + parseFloat(exitPrice)) / 2;
    switch (instrumentSelected) {
        case "USD/JPY":
            midPoint = 1;
            break;
        case "EUR/JPY":
            var EURUSDSell = document.getElementById("EUR_USD_Sell").innerHTML;
            var EURUSDBuy = document.getElementById("EUR_USD_Buy").innerHTML;
            midPoint = (parseFloat(EURUSDSell) + parseFloat(EURUSDBuy)) / 2;
            break;
    }
    return ((orderUnit / userLeverage * midPoint).toFixed(2));
}

function changeInstrument(instrumentSelected) {
    document.getElementById('instrumentSelect').value = instrumentSelected;
    removeIndicator();
    changeSeries();
    setRemarks(instrumentSelected);
    appendData(instrumentSelected);
}

//Change the remarks of the selected instrument
function setRemarks(instrumentSelected) {
    var instrumentList = {
        EURUSD: { pair: "EUR_USD", preview: "EUR/USD" },
        AUDUSD: { pair: "AUD_USD", preview: "AUD/USD" },
        GBPUSD: { pair: "GBP_USD", preview: "GBP/USD" },
        USDJPY: { pair: "USD_JPY", preview: "USD/JPY" },
        EURJPY: { pair: "EUR_JPY", preview: "EUR/JPY" },
    }

    for (var key in instrumentList) {
        if (instrumentSelected != instrumentList[key].pair) {
            document.getElementById(`${instrumentList[key].pair}_span`).style.display = "none";
            document.getElementById(`${instrumentList[key].pair}_div`).classList.remove("rate-active");
        } else {
            document.getElementById(`${instrumentList[key].pair}_span`).style.display = "inline";
            document.getElementById(`${instrumentList[key].pair}_div`).classList.add("rate-active");
            document.getElementById("lightbox-title").innerHTML = instrumentList[key].preview;
        }
    }
}

function appendData(instrumentSelected) {
    var sellingPrice = document.getElementById(`${instrumentSelected}_Sell`).innerHTML;
    var buyingPrice = document.getElementById(`${instrumentSelected}_Buy`).innerHTML;
    var spreadValue = document.getElementById(`${instrumentSelected}_Pips`).innerHTML;
    document.getElementById("sell-action").innerHTML = sellingPrice;
    document.getElementById("buy-action").innerHTML = buyingPrice;
    document.getElementById("pips-action").innerHTML = spreadValue;
}

//Refresh the table after perform an order / close a position
function reloadOrderAccount() {
    var url = '/index';
    $("#table_all_orders").load(url + " #table_all_orders", "");
    $("#account_table").load(url + " #account_table", "");
    document.getElementById("order-units").value = 0;
}

function getLeverage(leverageString) {
    arrayLeverage = leverageString.split(":");
    var userLeverage = parseInt(arrayLeverage[0]);
    return userLeverage;
}

function confirmOrder() {
    var saveStatus = document.getElementById('cross').style.display;
    var orderUnit = document.getElementById("order-units").value;
    if (saveStatus == "inline" || orderUnit <= 0 || orderUnit == "")
        document.getElementById('order-error-msg').innerHTML = "*Please enter valid units in the field provided";
    else {
        let orderType = document.getElementById("order-type").innerHTML;
        let entryPrice = document.getElementById(`order-${orderType}-data`).innerHTML;
        let orderInstrument = document.getElementById("lightbox-title").innerHTML;
        let marginRequired = document.getElementById('margin-value').innerHTML;
        let exitPrice = (orderType == "sell") ? document.getElementById("order-buy-data").innerHTML : document.getElementById("order-sell-data").innerHTML;
        let typeLabel = (orderType == "buy") ? "Buy" : "Sell";
        var orderPackage = { type: orderType, instrument: orderInstrument, unit: orderUnit, entry: entryPrice, exit: exitPrice, margin: marginRequired }
        Swal.fire({
            title: 'Order Confirmation',
            html: `<table class="table col-md-12 table-bordered table-striped small">
            <tbody>
                <tr>
                    <td class="font-weight-bold">Type</td>
                    <td>${typeLabel}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Currency</td>
                    <td>${orderInstrument}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Price</td>
                    <td>$ ${entryPrice}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Margin</td>
                    <td>$ ${marginRequired}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Units</td>
                    <td>${orderUnit}</td>
                </tr>
            </tbody>
        </table>`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed)
                saveOrder(orderPackage);
        });
    }
}

//Save the order into database
function saveOrder(orderPackage) {
    var USDJPYSell = document.getElementById("USD_JPY_Sell").innerHTML;
    var USDJPYBuy = document.getElementById("USD_JPY_Buy").innerHTML;
    var EURJPYSell = document.getElementById("EUR_USD_Sell").innerHTML;
    var EURJPYBuy = document.getElementById("EUR_USD_Buy").innerHTML;
    var userLeverage = getLeverage(document.getElementById("account-leverage").innerHTML);
    let orderObject = { instrument: orderPackage.instrument, unit: orderPackage.unit, type: orderPackage.type, entry: orderPackage.entry, exit: orderPackage.exit, margin: orderPackage.margin, leverage: userLeverage, USDJPYSell: USDJPYSell, USDJPYBuy: USDJPYBuy, EURJPYSell: EURJPYSell, EURJPYBuy: EURJPYBuy }
    $.ajax({
        type: 'POST',
        url: '/index/store',
        data: {
            _token: token,
            orderObject: orderObject
        },
        success: function(data) {
            clearInterval(chartStreaming);
            document.getElementById('order-modal-closebtn').click();
            appendAlert(data.message);
            reloadOrderAccount();
            chartStreaming = setInterval(streamChart, 1000);
        },
        error: function(data) {
            console.log(JSON.stringify(data));
        }
    });
}

function confirmClose() {
    var closeStatus = document.getElementById('cross-close').style.display;
    var deductValue = document.getElementById('position-total-units').value;
    if (closeStatus == "inline" || deductValue == "" || deductValue <= 0)
        document.getElementById('close-error-msg').innerHTML = "*Please enter valid units in the field provided";
    else {
        let ticketID = document.getElementById('position-ticket-id').innerHTML;
        let remainingUnit = document.getElementById('units_remaining').innerHTML;
        let orderInstrument = document.getElementById("position-title").innerHTML;
        let userLeverage = getLeverage(document.getElementById("account-leverage").innerHTML);
        let unitsClosed = document.getElementById('position-total-units').value;
        let orderProfit = document.getElementById('units-profit').innerHTML;
        var orderTable = document.getElementById("all_orders");

        for (i = 1; i < orderTable.rows.length; i++) {
            let row = orderTable.rows[i]
            var id = row.cells[0].innerHTML;
            if (id == ticketID) {
                entryPrice = row.cells[6].innerHTML;
                exitPrice = row.cells[7].innerHTML;
                spreadCost = row.cells[9].innerHTML;
            }
        }
        let marginComputed = calculateMargin(orderInstrument, remainingUnit, userLeverage, entryPrice, exitPrice);
        let orderObject = { ticketID: ticketID, margin: marginComputed, remaining_units: remainingUnit, entry: entryPrice, exit: exitPrice, cost: spreadCost, profit: orderProfit, leverage: userLeverage };
        Swal.fire({
            title: 'Close Confirmation',
            html: `<table class="table col-md-12 table-bordered table-striped small">
            <tbody>
                <tr>
                    <td class="font-weight-bold">Currency</td>
                    <td>${orderInstrument}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Entry</td>
                    <td>$ ${entryPrice}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Exit</td>
                    <td>$ ${exitPrice}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Units Closed</td>
                    <td>${unitsClosed}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Remaining Units</td>
                    <td>${remainingUnit}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Profit</td>
                    <td>$ ${orderProfit}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Spread</td>
                    <td> ${spreadCost}</td>
                </tr>
            </tbody>
        </table>`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirm',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed)
                closePosition(orderObject);
        });
    }
}


//Update the order in the database
function closePosition(orderObject) {
    $.ajax({
        type: 'PUT',
        url: '/index/close',
        data: {
            _token: token,
            orderObject: orderObject,
        },
        success: function(data) {
            clearInterval(chartStreaming);
            document.getElementById('close-modal-closebtn').click();
            appendAlert(data.message);
            reloadOrderAccount();
            chartStreaming = setInterval(streamChart, 1000);
        },
        error: function(data) {
            console.log(JSON.stringify(data));
        }
    });
}


function appendTempData(arrayInstrument) {
    for (var i in arrayInstrument) {
        var componentID = ["_Sell", "_Buy", "_Pips"];
        for (var j in componentID) {
            componentID[j] = arrayInstrument[i][0] + componentID[j];
        }
        var sellingPrice = document.getElementById(componentID[0]);
        var buyingPrice = document.getElementById(componentID[1]);
        var spreadValue = document.getElementById(componentID[2]);
        var instrumentSelected = "EUR_USD";
        var multiplyFormula = 10000;

        if (arrayInstrument[i][0].includes("JPY") == true)
            multiplyFormula = 100;
        spreadValue.innerHTML = ((arrayInstrument[i][2] - arrayInstrument[i][1]) * multiplyFormula).toFixed(1);
        sellingPrice.innerHTML = arrayInstrument[i][1];
        buyingPrice.innerHTML = arrayInstrument[i][2];

        if (arrayInstrument[i][0] == instrumentSelected) {
            document.getElementById("sell-action").innerHTML = arrayInstrument[i][1];
            document.getElementById("buy-action").innerHTML = arrayInstrument[i][2];
            document.getElementById("pips-action").innerHTML = ((arrayInstrument[i][2] - arrayInstrument[i][1]) * multiplyFormula).toFixed(1);
            document.getElementById("order-sell-data").innerHTML = arrayInstrument[i][1];
            document.getElementById("order-buy-data").innerHTML = arrayInstrument[i][2];
            document.getElementById("order-spread-data").innerHTML = ((arrayInstrument[i][2] - arrayInstrument[i][1]) * multiplyFormula).toFixed(1);
        }
        updateTable(arrayInstrument[i][0], parseFloat(arrayInstrument[i][1]), parseFloat(arrayInstrument[i][2]));
    }
}

function toggleLightboxIndicator(toolSelected) {
    $(`#${toolSelected}-modal`).modal();
    document.getElementById('indicatorSelect').value = "default";
}

function changeTutorialStatus() {
    var tutorialCheckbox = document.getElementById('tutorial-checkbox');
    var tutorialStatus = tutorialCheckbox.checked;
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: '/index/tutorial',
        data: {
            _token: token,
            status: tutorialStatus
        },
        success: function(data) {}
    });
}

function appendAlert(message) {
    Swal.fire({
        title: 'Success',
        text: message,
        icon: 'success',
        confirmButtonText: 'OK',
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
}

function toggleCalculatorLightbox() {
    introJs().exit();
    $('#calculator-lightbox').modal();
}

function clearInput(inputElement) {
    document.getElementById(inputElement).value = "";
}