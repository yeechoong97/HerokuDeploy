//Check and submit the input to server
function submitForm() {
    var amountInput = parseFloat(document.getElementById('amount_input').value);
    var statusDisplay = document.getElementById('cross').style.display;
    if (amountInput <= 0 || isNaN(amountInput) === true || statusDisplay === "inline" || amountInput == "")
        document.getElementById('error-msg').innerHTML = "*Invalid amount is entered";
    else
        document.getElementById("myForm").submit();
}

//Check the input
function validateWithdrawalInput(balance, margin) {
    var amountInput = parseFloat(document.getElementById('amount_input').value);
    var accountBalance = parseFloat(balance);
    var accountMargin = parseFloat(margin);
    if (amountInput < accountBalance && amountInput < accountMargin && amountInput !== 0 && (accountBalance - amountInput) >= 100.00 && (accountMargin - amountInput) >= 100.00) {
        document.getElementById('cross').style.display = 'none';
        document.getElementById('tick').style.display = 'inline';
    } else if (amountInput >= accountBalance || (accountBalance - amountInput) < 100.00) {
        document.getElementById('tick').style.display = 'none';
        document.getElementById('cross').style.display = 'inline';
    } else {
        document.getElementById('tick').style.display = 'none';
        document.getElementById('cross').style.display = 'inline';
    }
    document.getElementById('error-msg').innerHTML = "";
}

//Check the input entered by user
function validateDepositInput(balance) {
    var amountInput = parseFloat(document.getElementById('amount_input').value);
    var accountBalance = parseFloat(balance);
    if (amountInput <= 50000 && amountInput !== 0 && (accountBalance + amountInput) <= 100000.00) {
        document.getElementById('cross').style.display = 'none';
        document.getElementById('tick').style.display = 'inline';
    } else if (amountInput >= accountBalance || (accountBalance + amountInput) > 100000.00) {
        document.getElementById('tick').style.display = 'none';
        document.getElementById('cross').style.display = 'inline';
    } else {
        document.getElementById('tick').style.display = 'none';
        document.getElementById('cross').style.display = 'inline';
    }
    document.getElementById('error-msg').innerHTML = "";
}


//Alert the message
function appendFundAlert(title, type, message) {
    Swal.fire({
        title: title,
        icon: type,
        text: message,
        confirmButtonText: 'OK',
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
}

//Toggle the Intro JS
function toggleFundsIntro() {
    introJs().setOptions({
        steps: [{
                title: 'Funds Management 💰',
                intro: 'In this section, you can manage your virtual funds and check your account details.<br/> <br/>Hence, traders have the opportunity to manage their virtual funds without any monetary cost.',
            },
            {
                element: document.querySelector('#name-intro'),
                intro: 'The name registered in this system.'
            },
            {
                element: document.querySelector('#currency-intro'),
                intro: 'The currency type used for trading. In this system, it would be <b>US Dollar (USD)</b>. <a href="/learning/knowledge/currency" target="_blank">Learn More about Currency Pair</a>',
            },
            {
                element: document.querySelector('#balance-intro'),
                intro: 'The current <b>Available Balance</b> of your account.',
            },
            {
                element: document.querySelector('#margin-intro'),
                intro: 'The current <b>Available Margin</b> of your account. <a href="/learning/knowledge/leverage" target="_blank">Learn More about Margin</a>'
            },
            {
                element: document.querySelector('#margin-used-intro'),
                intro: 'The <b>Margin Used</b> in your account in percentage.'
            },
            {
                element: document.querySelector('#leverage-intro'),
                intro: 'The <b>Leverage</b> of your account used for trading. The default leverage of account is 30:1. <a href="/learning/knowledge/leverage" target="_blank">Learn More about Leverage</a>'
            },
            {
                element: document.querySelector('#leverage-edit-intro'),
                intro: 'You can change the leverage of your account by clicking this <b>Edit</b> button.<br/> <br/> However, the leverage only can be changed after all the ongoing orders are closed.',
            },
            {
                element: document.querySelector('#deposit-intro'),
                intro: 'You can perform funds deposit functionality by clicking this <b>Deposit</b> button.'
            },
            {
                element: document.querySelector('#withdraw-intro'),
                intro: 'You can perform funds withdrawal functionality by clicking this <b>Withdraw</b> button.'
            },
        ],
    }).start();
}