function showTutorial(userName) {
    introJs().setOptions({
        showProgress: true,
        steps: [{
                title: 'Welcome to ES Forex 👋',
                intro: `Hi ${userName}. Welcome to ES Forex Trading. In this system, you can learn to perform trading without any monetary cost. Besides, you can discover more information about Forex trading within this system.`,
            },
            {
                element: document.querySelector('.navbar-nav'),
                intro: 'You can navigate to respective page through this navigation bar.'
            },
            {
                element: document.querySelector('#calculator-intro'),
                intro: 'This is the <b>Calculator</b> functionality. You can perform some calculations for <b>Profit</b> / <b>Pips</b> / <b>Margin</b>.',
                position: 'left'
            },
            {
                element: document.querySelector('#chat-intro'),
                intro: 'This is the <b>Live Chat</b> functionality. You can join a room and chat with other traders by clicking this button.'
            },
            {
                element: document.querySelector('.chart-container-btn'),
                intro: 'You can perform different trading functionalities in this section.'
            },
            {
                element: document.querySelector('#chart-tips-intro'),
                intro: 'This is a <b>Help</b> button. You can view additional information by clicking it.',
                position: 'bottom'
            },
            {
                element: document.querySelector('.account-table'),
                intro: 'This section displays the summarized details of your trading account.',
                position: 'right'
            },
            {
                element: document.querySelector('#container'),
                intro: 'The visualization of selected currency pair in the chart. <b>The datetime of the chart are following the UTC (Coordinated Universal Time) format.',
            },
            {
                element: document.querySelector('.order-table'),
                intro: 'All the <b>Ongoing</b> / <b>Incomplete</b> will be previewed in this section.'
            },
            {
                element: document.querySelector('.price-container'),
                intro: 'This section displays the <b>Live Data</b> of the currency pairs.'
            },
            {
                title: 'Confirmation',
                intro: 'Do you want to view all these tutorials every time you login to the system. <br/><br/><input type="checkbox" id="tutorial-checkbox" class="float-left mx-2 show-again" onclick="changeTutorialStatus()" /><label class="my-1">Do not show again</label>'
            }
        ],
        'exitOnOverlayClick': false,
        'exitOnEsc': false,
        'showBullets': false
    }).onexit(function() {
        appendBeginnerQuestion();
    }).start();

}

function showChartTips() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#typeSelect'),
                intro: 'You can select specific drawing tool from here and plot it on the chart below for further analysis.'
            },
            {
                element: document.querySelector('#seriesSelect'),
                intro: 'You can select specific chart type from here and then visualize the data accordingly on the chart below. <a href="/learning/knowledge/chart" target="_blank">Learn More about Chart Type</a>'
            },
            {
                element: document.querySelector('#intervalSelect'),
                intro: 'You can select specific time interval for visualizing the data on the chart.'
            },
            {
                element: document.querySelector('#indicatorSelect'),
                intro: 'You can select the technical indicators from the list and add it into the chart below <br><br> Only maximum <b>Two</b> indicators can be plotted on the chart concurrently which is within and below the chart. <a href="/learning/indicator/intro" target="_blank">Learn More about Technical Indicator</a> '
            },
            {
                element: document.querySelector('.reset-btn'),
                intro: 'You can reset the chart and remove all the annotations and indicators plotted on the chart.',
            },
            {
                element: document.querySelector('#sell'),
                intro: 'You can sell the currency pair by clicking this <b>Sell</b> button. <a href="/learning/knowledge/trade" target="_blank">Learn More about How to Trade</a>'
            },
            {
                element: document.querySelector('#buy'),
                intro: 'You can buy the currency pair by clicking this <b>Buy</b> button. <a href="/learning/knowledge/trade" target="_blank">Learn More about How to Trade</a>'
            },
            {
                element: document.querySelector('.spread_order_button'),
                intro: 'You can view the spread of the selected currency pair <br/><br/> <b>Spread</b> is the difference between selling and buying price of the currency pair. <a href="/learning/knowledge/spread" target="_blank">Learn More about Spread</a>'
            },
        ]
    }).onexit(function() {
        appendBeginnerQuestion();
    }).start();
}

function showAccountTips() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#currency-intro'),
                intro: 'The currency type used for trading. In this system, it would be <b>US Dollar (USD)</b>.<a href="/learning/knowledge/currency" target="_blank"> Learn More about Currency Pair</a>',
                position: 'left'
            },
            {
                element: document.querySelector('#balance-intro'),
                intro: 'The current <b>Available Balance</b> of your account. The balance of your account will only affect by <b>Profit</b> / <b>Loss</b> occurred by order.',
                position: 'left'
            },
            {
                element: document.querySelector('#margin-intro'),
                intro: 'The current <b>Available Margin</b> of your account. <br/>In Forex trading, the margin is an essential element that requires for maintaining an order. <a href="/learning/knowledge/leverage" target="_blank">Learn More about Margin</a>',
                position: 'left'
            },
            {
                element: document.querySelector('#margin-used-intro'),
                intro: 'The <b>Margin Used</b> in your account in percentage. <br/><u>For calculation:</u><br/> (Used Margin) ÷ (Available Margin+Used Margin) ✕ 100 ',
                position: 'left'
            },
            {
                element: document.querySelector('#leverage-intro'),
                intro: 'The <b>Leverage</b> of your account used for trading.<br/> In short, leverage allows you to control larger positions with a smaller amount of actual trading funds. <a href="/learning/knowledge/leverage" target="_blank">Learn More about Leverage</a>',
                position: 'left'
            }
        ]
    }).start();
}

function showRateTips() {
    var div = document.querySelector('.rate-active');
    var unselectedCurrency = "";
    var selectedCurrency = "";
    var rateArray = ["EUR_USD", "AUD_USD", "GBP_USD", "USD_JPY", "EUR_JPY"];
    for (var i in rateArray) {
        if (div.id.includes(rateArray[i])) {
            selectedCurrency = rateArray[i];
        } else if (unselectedCurrency == "") {
            unselectedCurrency = rateArray[i] + "_div";
        }
    }
    introJs().setOptions({
        steps: [{
                element: document.querySelector(`#${div.id}`),
                intro: 'This rate box with <b style="color:blue">Colour</b> represents that this currency pair is <b>Selected</b>.',
                position: 'left'
            },
            {
                element: document.querySelector(`#${unselectedCurrency}`),
                intro: 'This rate box without <b>Colour</b> represents that this currency pair is <b>not Selected.</b>',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_header`),
                intro: 'This is the <b>Name</b> of this currency pair. <a href="/learning/knowledge/currency" target="_blank">Learn More about Currency Pair</a>',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Sell`),
                intro: 'This is the <b>Selling Price</b> of this currency. <a href="/learning/knowledge/quote" target="_blank">Learn More about Quotes</a>',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Buy`),
                intro: 'This is the <b>Buying Price</b> of this currency. <a href="/learning/knowledge/quote" target="_blank">Learn More about Quotes</a>',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Pips`),
                intro: 'This is the <b>Pips</b> value of this currency. A pip is the smallest price move that an exchange rate can make based on forex market convention.',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Pips`),
                intro: 'Pips Calculation for <br/><b>● EUR/USD</b> <br/><b>● AUD/USD</b> <br/><b>● GBP/USD</b><br/><br/>Continue in the next page',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Pips`),
                intro: '<b>Cont.</b><br/><b style="color:purple">Pips</b> = (<b style="color:blue">Buy</b> - <b style="color:red">Sell</b>) ÷ <b>0.0001</b><br/><br/><b>Example</b><br/><b style="color:purple">1.4</b> = (<b style="color:blue">1.20732</b> - <b style="color:red">1.20718</b>) ÷ <b>0.0001</b>',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Pips`),
                intro: 'Pips Calculation for <br/><b>● USD/JPY</b> <br/><b>● EUR/JPY</b><br/><br/>Continue in the next page',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Pips`),
                intro: '<b>Cont.</b><br/><b style="color:purple">Pips</b> = (<b style="color:blue">Buy</b> - <b style="color:red">Sell</b>) ÷ <b>0.01</b><br/><br/><b>Example</b><br/><b style="color:purple">1.2</b> = (<b style="color:blue">127.573</b> - <b style="color:red">127.561</b>) ÷ <b>0.01</b><br/>',
                position: 'left'
            },
            {
                element: document.querySelector(`#${selectedCurrency}_Pips`),
                intro: 'If you wish to learn more details about pips, <a href="/learning/knowledge/pips" target="_blank">Click Here</a>',
                position: 'left'
            },

        ]
    }).start();
}

function showOrderTips() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#ticket-intro'),
                intro: 'This is the <b>ID</b> of the order ticket.',
            },
            {
                element: document.querySelector('#date-intro'),
                intro: 'This is the <b>Date</b> of the order placed.',
            },
            {
                element: document.querySelector('#pair-intro'),
                intro: 'This is the <b>Currency Pair</b> of the order.',
            },
            {
                element: document.querySelector('#units-intro'),
                intro: 'This is the <b>Units Placed</b> for the order.',
            },
            {
                element: document.querySelector('#type-intro'),
                intro: 'This is the <b>Type</b> of the order. <br/><u>For your information,</u><br/> <b style="color:blue">Long</b> = <b style="color:blue">Buy</b><br/><b style="color:red">Short</b> = <b style="color:red">Sell</b> <br/><a href="/learning/order/long-short" target="_blank"> Learn More about Long/Short</a>',
            },
            {
                element: document.querySelector('#margin-order-intro'),
                intro: 'This is the <b>Margin</b> required to maintain the order. <a href="/learning/knowledge/leverage" target="_blank">Learn More about Margin</a>',
            },
            {
                element: document.querySelector('#price-intro'),
                intro: 'This is the <b>Entry Price</b> of this order.',
            },
            {
                element: document.querySelector('#current-intro'),
                intro: 'This is the <b>Current Price</b> of this currency pair.',
            },
            {
                element: document.querySelector('#profit-usd-intro'),
                intro: 'This is the <b>Profit/Loss</b> in <b>USD</b> of your order. <br/>For your information, <br/><b style="color:red">Red</b> = <b style="color:red">Loss</b><br/><b style="color:green">Green</b> = <b style="color:green">Profit</b>.',
            },
            {
                element: document.querySelector('#profit-spread-intro'),
                intro: 'This is the <b>Profit/Loss</b> in <b>Spread</b> of your order. <br/>For your information, <br/><b style="color:red">Red</b> = <b style="color:red">Loss</b><br/><b style="color:green">Green</b> = <b style="color:green">Profit</b>.',
            },
            {
                element: document.querySelector('#profit-intro'),
                intro: 'This is the <b>Profit/Loss</b> in <b>Percentage</b> of your order. <br/>For your information, <br/><b style="color:red">Red</b> = <b style="color:red">Loss</b><br/><b style="color:green">Green</b> = <b style="color:green">Profit</b>. <br/><a href="#" onclick="toggleCalculatorLightbox()">Learn More in Calculating Profit</a>',
            },
            {
                element: document.querySelector('#action-intro'),
                intro: 'Each order contains a ❌ button. The primary function of this button is to allow traders to <b>Close</b> the order according to their preference.',
            },
        ]
    }).start();
}

function showBuySellTips() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#lightbox-title'),
                intro: 'This is the <b>Name</b> of the currency pair selected.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-sell'),
                intro: 'This is the <b>Selling</b> price of the currency pair.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-buy'),
                intro: 'This is the <b>Buying</b> price of the currency pair.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-spread-data'),
                intro: 'This is the <b>Pips</b> of the currency pair. <a href="/learning/knowledge/pips" target="_blank">Learn More about Pips</a>',
                position: 'right'
            },
            {
                element: document.querySelector('#order-units'),
                intro: 'You can enter the <b>Units</b> here according to your preference. However, the maximum units for an order is 1,000,000.',
                position: 'right'
            },
            {
                element: document.querySelector('#margin-check-intro'),
                intro: 'You can view the <b>Margin Required</b> for maintaining the order after you have entered the units in the above input box.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-submit-intro'),
                intro: 'You can submit your order after you entered units and checked the order.',
                position: 'right'
            },
        ]
    }).start();
}

function showCloseTips() {
    document.documentElement.scrollTop = 0;
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#position-title'),
                intro: 'This is the <b>Name</b> of the currency pair for the selected order',
            },
            {
                element: document.querySelector('#units_orders_quantity'),
                intro: 'This is the <b>Available Units</b> of the selected order.',
            },
            {
                element: document.querySelector('#position-total-units'),
                intro: 'You can specify the amount of <b>Units</b> for closing the selected order. However, it should not more than the available units.',
            },
            {
                element: document.querySelector('.units-container'),
                intro: 'You can select the percentage of units to be closed by clicking the specific button.',
            },
            {
                element: document.querySelector('#units_remaining'),
                intro: 'This is the <b>Remaining Units</b> of the order after deducted the units to be closed above.',
            },
            {
                element: document.querySelector('#units-profit'),
                intro: 'This is the total <b>Profit</b> / <b>Loss</b> of your order according to the units to be closed.',
            },
            {
                element: document.querySelector('#close-button-intro'),
                intro: 'You can </b>Close</b> / <b>Reduce</b> your order after you entered units and checked the details.',
            },
        ]
    }).start();
}

function showSellTips() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: 'In this section, you can learn to calculate the profit with an example.',
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: 'The formula for calculating profit is: <br/> <b style="color:blue">Profit = (One Pip * Units) * Pips</b> <br/><br/>The formula is subject to the selected currency pair and base currency.',
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: `Let's take an example, you want to go short(<b style="color:red">Sell</b>) on <b>EUR/USD</b> currency pair. In this system, your account base currency is USD. One Pip is <b>0.0001</b>.<br/><br/><b>Type</b>: Sell<br/><b>Currency</b>: EUR/USD<br/><b>One Pip</b>: 0.0001 `,
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: 'Then, you sell it at the price of <b>1.20837</b> with <b>10,000</b> units. After one week, the price has dropped to 1.20518 and you managed to close the order with the price of <b>1.20518</b>. <br/><br/><b>Entry Price</b>: 1.20837<br/><b>Exit Price</b>: 1.20518<br/><b>Units</b>: 10,000',
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: `As the exit price is lower than the entry price and the order type is sell, thus you will gain profit from the order. Let's compile all the order information and calculate the profit of this order.`,
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: `<b>Currency</b>: EUR/USD<br/><b>Type</b>: Sell<br/><b>One Pip</b>: 0.0001<br/><b>Entry</b>: 1.20837<br/><b>Exit</b>: 1.20518<br/><b>Units</b>: 10,000<br/><br/>Firstly, we need to calculate pips value of this order.`,
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: `<b>Currency</b>: EUR/USD<br/><b>Type</b>: Sell<br/><b>One Pip</b>: 0.0001<br/><b>Entry</b>: 1.20837<br/><b>Exit</b>: 1.20518<br/><b>Units</b>: 10,000<br/><br/><b>Pips</b><br/>= (Entry - Exit) x 10000<br/>= (1.20837 - 1.20518) x 10000<br/>= 0.00319 x 10000<br/>= 31.9`,
                position: 'left',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Sell: Calculation💰",
                intro: `<b>Currency</b>: EUR/USD<br/><b>Type</b>: Sell<br/><b>One Pip</b>: 0.0001<br/><b>Entry</b>: 1.20837<br/><b>Exit</b>: 1.20518<br/><b>Units</b>: 10,000<br/><b>Pips</b>: 31.9<br/><br/> Final step, put the information into the profit formula<br/><br/><b>Profit</b><br/>= (One Pip * Units) * Pips<br/>= (0.0001 x 10,000) x 31.9<br/>= <b style="color:green">$31.90</b>`,
                position: 'left',
            },
        ]
    }).start();
}

function showBuyTips() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: 'In this section, you can learn to calculate the profit with an example.',
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: 'The formula for calculating profit is: <br/> <b style="color:blue">Profit = (One Pip * Units) * Pips</b> <br/><br/>The formula is subject to the selected currency pair and base currency.',
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: `Let's take an example, you want to go long(<b style="color:blue">Buy</b>) on <b>AUD/USD</b> currency pair. In this system, your account base currency is USD. One Pip is <b>0.0001</b>.<br/><br/><b>Type</b>: Buy<br/><b>Currency</b>: AUD/USD<br/><b>One Pip</b>: 0.0001 `,
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: 'Then, you buy it at the price of <b>0.77627</b> with <b>20,000</b> units. After one week, the price has escalated to 0.77843 and you managed to close the order with the price of <b>0.77843</b>. <br/><br/><b>Entry Price</b>: 0.77627<br/><b>Exit Price</b>: 0.77843<br/><b>Units</b>: 20,000',
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: `As the exit price is higher than the entry price and the order type is buy, thus you will gain profit from the order. Let's compile all the order information and calculate the profit of this order.`,
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: `<b>Currency</b>: AUD/USD<br/><b>Type</b>: Buy<br/><b>One Pip</b>: 0.0001<br/><b>Entry</b>: 0.77627<br/><b>Exit</b>: 0.77843<br/><b>Units</b>: 20,000<br/><br/>Firstly, we need to calculate pips value of this order.`,
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: `<b>Currency</b>: AUD/USD<br/><b>Type</b>: Buy<br/><b>One Pip</b>: 0.0001<br/><b>Entry</b>: 0.77627<br/><b>Exit</b>: 0.77843<br/><b>Units</b>: 20,000<br/><br/><b>Pips</b><br/>= (Exit - Entry) x 10000<br/>= (0.77843 - 0.77627) x 10000<br/>= 0.00216 x 10000<br/>= 21.6`,
                position: 'right',
            },
            {
                element: document.querySelector('#buy-sell-modal-content'),
                title: "Buy: Calculation💰",
                intro: `<b>Currency</b>: AUD/USD<br/><b>Type</b>: Buy<br/><b>One Pip</b>: 0.0001<br/><b>Entry</b>: 0.77627<br/><b>Exit</b>: 0.77843<br/><b>Units</b>: 20,000<br/><b>Pips</b>: 21.6<br/><br/> Final step, put the information into the profit formula<br/><br/><b>Profit</b><br/>= (One Pip * Units) * Pips<br/>= (0.0001 x 20,000) x 21.6<br/>= <b style="color:green">$43.20</b>`,
                position: 'right',
            },
        ]
    }).start();
}

function showCalculatorTips() {
    document.getElementById('margin-tab').click();
    introJs().setOptions({
        steps: [{
                title: `Forex Calculator <i class="fas fa-calculator"></i>`,
                intro: 'In this section, you can perform some calculation on <b>Margin</b>,<b>Pips Value</b> and <b>Profit</b>.',
            },
            {
                element: document.querySelector('#margin-tab'),
                intro: 'This is the <b>Margin</b> tab. You can perform calculation for the margin required based on the inputs entered.',
            },
            {
                element: document.querySelector('#pips-tab'),
                intro: 'This is the <b>Pips Value</b> tab. You can perform calculation for the pips value of the currency pair based on the inputs entered.',
            },
            {
                element: document.querySelector('#profit-tab'),
                intro: 'This is the <b>Profit</b> tab. You can perform calculation for the profit gained based on the inputs entered.',
            },
            {
                element: document.querySelector('#calculator-left-div-intro'),
                intro: 'Left section of calculator panel contains some input fields that allows you to enter your input according to your preference.',
            },
            {
                element: document.querySelector('#calculator-right-div-intro'),
                intro: 'Right section of calculator panel contains the formula for calculation and also a simple example.',
            },
            {
                element: document.querySelector('#calculator-btn-intro'),
                intro: 'After all the inputs are entered, you can click this <b>Calculate</b> button to perform calculation. The results produced will be displayed in the label below.',
            },
        ]
    }).start();
}

function showForumTips() {
    introJs().setOptions({
        steps: [{
                title: `Forum  <i class="fab fa-wpforms"></i>`,
                intro: 'In this section, you can create a new post for discussion purposes. In addition, you also can answer other traders who have other inquiries as well.',
            },
            {
                element: document.querySelector('#new-post-intro'),
                intro: 'You can create a new forum post by clicking this <b>New Post</b> button.',
            },
            {
                element: document.querySelector('#select-filter'),
                intro: 'You can <b>Sort</b> the forum posts according to the title, oldest posts, and latest posts.',
            },
            {
                element: document.querySelector('#search-forum-text'),
                intro: 'You can <b>Search</b> some specific forum posts by entering the keyword.',
            },
            {
                element: document.querySelector('#tag-list'),
                intro: 'This is the <b>Category</b> of the posts. You also can view your forum posts by clicking "Your Posts". ',
                scrollTo: 'tooltip'
            },
            {
                element: document.querySelector('#main-contents-forum'),
                intro: 'This is a brief description of the forum post. Each post contain the details of <br/>1. <b>Name of author</b><br/>2. <b>Title of forum post</b><br/>3. <b>Duration of post created</b><br/>4. <b>Number of comment</b>',
                scrollTo: 'tooltip'
            }
        ]
    }).start();
}

function appendBeginnerQuestion() {
    Swal.fire({
        title: 'Question',
        text: 'Do you want to learn how to execute forex order in this system ?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonColor: '#d33',
        cancelButtonText: 'No',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed)
            executeOrderIntro();
    });
}

function executeOrderIntro() {
    introJs().setOptions({
        steps: [{
                element: document.querySelector('.account-table'),
                intro: '1. You have to check your account details such as available balance, available margin, and leverage. <br/><br/>This is to prevent the process of executing forex order would not halt due to the account issue.',
                position: 'left'
            },
            {
                element: document.querySelector('.price-container'),
                intro: '2. You have to select the currency pair that you wish to trade from these five major currency pairs.',
                position: 'left'
            },
            {
                element: document.querySelector('.chart-section-container'),
                intro: '3. You have to analyze the forex market based on the currency pair you want to trade. For example, you can perform technical analysis to obtain more information regarding the currency pair.',
                position: 'right'
            },
            {
                intro: '4. After analyzing the forex market, you have to decide the position that you want to execute. ',
            },
            {
                element: document.querySelector('#sell'),
                intro: '5. If you want to go short (Sell) for the currency pair, you can click this <b>Sell</b> button. ',
            },
            {
                element: document.querySelector('#buy'),
                intro: '5. If you want to go long (Buy) for the currency pair, you can click this <b>Buy</b> button.<br/><br/>For example, you want to go long (Buy) for this currency pair. ',
            }
        ]
    }).onexit(function() {
        document.documentElement.scrollTop = 0;
        document.getElementById('buy').click();
        setTimeout(function() { buyOrderIntro() }, 500);
    }).start();
}

function buyOrderIntro() {
    introJs().setOptions({
        steps: [{
                element: document.getElementById('buy-sell-modal-content'),
                intro: '6. After you clicked the <b>Buy</b> button, you will be redirected to this small section.',
            },
            {
                element: document.querySelector('#lightbox-title'),
                intro: '7. You can see the name of the selected currency pair here.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-buy'),
                intro: '8. In this case, you want to go long (Buy) for the currency pair. Thus, this <b>Buy</b> box will be colored so that you can differentiate it easily.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-spread-data'),
                intro: '9. You also can view the spread of the currency pair here',
                position: 'right'
            },
            {
                element: document.querySelector('#order-units'),
                intro: '10. You are required to enter the units for executing the forex order on the selected currency pair.',
                position: 'right'
            },
            {
                element: document.querySelector('#margin-check-intro'),
                intro: '11. After that, you can view the margin required for maintaining the order. <br/><br/>The margin will be deducted from your account temporary and returned to you after the order is closed.',
                position: 'right'
            },
            {
                element: document.querySelector('#order-submit-intro'),
                intro: '12. Lastly, you have to click this <b>Submit</b> button to complete the trade order.',
                position: 'right'
            },
            {
                intro: `So, these are the basic steps to execute trade order in this system. If you want to learn more about this process, you may click <a href="learning/knowledge/trade" target="_blank">here</a>. Hope you enjoy trading in this ES Trading System 😄.`,
            }
        ]
    }).onexit(function() {
        document.getElementById('order-modal-closebtn').click();
    }).start();
}