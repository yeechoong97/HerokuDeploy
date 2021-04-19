var arrayCurrency;

function computeMargin() {
    let instrumentSelected = document.getElementById('margin-calculator-instrument').value;
    let leverageSelected = document.getElementById('margin-calculator-leverage').value;
    let trimLeverage = getLeverage(leverageSelected);
    let unitsEntered = document.getElementById('margin-calculator-units').value;
    let buyPrice, sellPrice = 0;
    if (instrumentSelected == "default" || leverageSelected == "default") {
        appendAlertCalculator('Please select input for both leverage and currency pair.')
        return false;
    } else if (unitsEntered == "" || unitsEntered == 0) {
        appendAlertCalculator('Please enter valid units');
        return false;
    }

    for (var index in arrayCurrency) {
        buyPrice = (arrayCurrency[index][0] == instrumentSelected) ? arrayCurrency[index][2] : buyPrice;
        sellPrice = (arrayCurrency[index][0] == instrumentSelected) ? arrayCurrency[index][1] : sellPrice;
    }
    instrumentSelected = instrumentSelected.replace("_", "/");
    let computedMargin = calculateMarginTutorial(instrumentSelected, unitsEntered, trimLeverage, buyPrice, sellPrice);
    document.getElementById('margin-calculator-results').value = `$ ${computedMargin}`;
}

//Calculate the margin for instrument
function calculateMarginTutorial(instrumentSelected, orderUnit, userLeverage, entryPrice, exitPrice) {
    var midPoint = (parseFloat(entryPrice) + parseFloat(exitPrice)) / 2;
    switch (instrumentSelected) {
        case "USD/JPY":
            midPoint = 1;
            break;
        case "EUR/JPY":
            midPoint = retrieve_EURJPY_Rate()
            console.log(midPoint)
            break;
    }
    return ((orderUnit / userLeverage * midPoint).toFixed(2));
}

function retrieve_EURJPY_Rate() {
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: '/calculator/rate',
        data: {
            _token: token,
        },
        success: function(data) {
            arrayCurrency = data.response;
            let currencyRate = 0;
            for (var index in arrayCurrency)
                currencyRate = (arrayCurrency[index][0] == "EUR/USD") ? ((parseFloat(arrayCurrency[index][1]) + parseFloat(arrayCurrency[index][2])) / 2).toFixed(5) : currencyRate;
            return currencyRate
        }
    });
}

function retrieveRate(elementSelected) {
    var instrumentSelected = document.getElementById(`${elementSelected}-calculator-instrument`).value;
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: '/calculator/rate',
        data: {
            _token: token,
        },
        success: function(data) {
            arrayCurrency = data.response;
            let currencyRate = 0;
            for (var index in arrayCurrency)
                currencyRate = (arrayCurrency[index][0] == instrumentSelected) ? ((parseFloat(arrayCurrency[index][1]) + parseFloat(arrayCurrency[index][2])) / 2).toFixed(5) : currencyRate;
            if (elementSelected == "profit") {
                document.getElementById(`${elementSelected}-calculator-entry`).value = currencyRate;
                document.getElementById('profit-calculator-exit').value = "";
            } else
                document.getElementById(`${elementSelected}-calculator-rate`).innerHTML = `Currency Rate: <b style="color:green">${currencyRate}</b>`;
        }
    });
}

function computePips() {
    let baseSelected = document.getElementById('pip-calculator-base').value;
    let instrumentSelected = document.getElementById('pip-calculator-instrument').value;
    let unitsEntered = document.getElementById('pip-calculator-units').value;
    let onePip = 0.0001;

    if (instrumentSelected == "default" || baseSelected == "default") {
        appendAlertCalculator('Please select input for both base currency and currency pair.')
        return false;
    } else if (unitsEntered == "" || unitsEntered == 0) {
        appendAlertCalculator('Please enter valid units.');
        return false;
    }
    let pipsValue = 0;
    if (baseSelected == "USD") {
        switch (instrumentSelected) {
            case "EUR_USD":
            case "AUD_USD":
            case "GBP_USD":
                pipsValue = (onePip * unitsEntered).toFixed(2);
                break;
            case "USD_JPY":
            case "EUR_JPY":
                pipsValue = (onePip / retrievePrice('USD_JPY') * unitsEntered * 100).toFixed(2);
                break;
        }
        pipsValue = `$ ${pipsValue}`;
    } else if (baseSelected == "EUR") {
        switch (instrumentSelected) {
            case "EUR_USD":
            case "AUD_USD":
            case "GBP_USD":
                pipsValue = (onePip / retrievePrice('EUR_USD') * unitsEntered).toFixed(2);
                break;
            case "USD_JPY":
            case "EUR_JPY":
                pipsValue = (onePip / retrievePrice('EUR_JPY') * unitsEntered * 100).toFixed(2);
                break;
        }
        pipsValue = `€ ${pipsValue}`;
    } else {
        switch (instrumentSelected) {
            case "EUR_USD":
            case "AUD_USD":
            case "GBP_USD":
                pipsValue = (onePip * retrievePrice('USD_JPY') * unitsEntered).toFixed(2);
                break;
            case "USD_JPY":
            case "EUR_JPY":
                pipsValue = (onePip * unitsEntered * 100).toFixed(2);;
                break;
        }
        pipsValue = `¥ ${pipsValue}`;
    }
    document.getElementById('pip-calculator-results').value = pipsValue;
}

function computeProfit() {
    let instrumentSelected = document.getElementById('profit-calculator-instrument').value;
    let unitsEntered = document.getElementById('profit-calculator-units').value;
    let entryPrice = document.getElementById('profit-calculator-entry').value;
    let exitPrice = document.getElementById('profit-calculator-exit').value;
    let orderType = document.getElementById('profit-calculator-type').value;

    if (instrumentSelected == "default" || orderType == "default") {
        appendAlertCalculator('Please select input for both order type and currency pair.')
        return false;
    } else if (unitsEntered == "" || unitsEntered == 0 || entryPrice == "" || entryPrice == 0 || exitPrice == "" || exitPrice == 0) {
        appendAlertCalculator('Please enter valid inputs.');
        return false;
    }
    let multiplyFormula = 10000;
    let preProfit = 0;
    switch (instrumentSelected) {
        case "USD_JPY":
        case "EUR_JPY":
            let midPoint = retrievePrice("USD_JPY");
            preProfit = 0.01 * unitsEntered / midPoint;
            multiplyFormula = 100;
            break;
        default:
            preProfit = 0.0001 * unitsEntered;
            break;
    }

    let spreadCalculated = Math.abs((exitPrice - entryPrice) * multiplyFormula);
    let totalProfit = (preProfit * spreadCalculated).toFixed(2);
    if (orderType == "buy")
        totalProfit = (exitPrice > entryPrice) ? `$ ${totalProfit}` : `$ -${totalProfit}`;
    else
        totalProfit = (exitPrice < entryPrice) ? `$ ${totalProfit}` : `$ -${totalProfit}`;
    document.getElementById('profit-calculator-results').value = totalProfit;
}

function retrievePrice(instrumentSelected) {
    let currencyRate = 0;
    for (var index in arrayCurrency)
        currencyRate = (arrayCurrency[index][0] == instrumentSelected) ? ((parseFloat(arrayCurrency[index][1]) + parseFloat(arrayCurrency[index][2])) / 2).toFixed(5) : currencyRate;
    return currencyRate;
}

function resetCalculator() {
    document.getElementById('margin-calculator-instrument').value = "default";
    document.getElementById('margin-calculator-rate').innerHTML = "Currency Rate: ";
    document.getElementById('margin-calculator-leverage').value = "default";
    document.getElementById('margin-calculator-units').value = "";
    document.getElementById('pip-calculator-base').value = "default";
    document.getElementById('pip-calculator-instrument').value = "default";
    document.getElementById('pip-calculator-rate').innerHTML = "Currency Rate: ";
    document.getElementById('pip-calculator-units').value = "";
    document.getElementById('profit-calculator-instrument').value = "default"
    document.getElementById('profit-calculator-units').value = "";
    document.getElementById('profit-calculator-entry').value = "";
    document.getElementById('profit-calculator-exit').value = "";
    document.getElementById('profit-calculator-type').value = "default";
    document.getElementById('margin-calculator-results').value = "";
    document.getElementById('profit-calculator-results').value = "";
    document.getElementById('pip-calculator-results').value = "";
}


function appendAlertCalculator(message) {
    Swal.fire({
        title: 'Error',
        text: message,
        icon: 'error',
        confirmButtonText: 'OK',
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
}