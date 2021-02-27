//sort the table accordingly
function sortTable(element) {
    var sortList = ["created_at", "units", "pair", "type", "profit", "cost"];

    for (let index in sortList) {
        if (sortList[index] == element) {
            if (document.getElementById(`span-${sortList[index]}`).classList.contains('fa-caret-up')) {
                document.getElementById(`span-${sortList[index]}`).classList.remove('fa-caret-up');
                document.getElementById(`span-${sortList[index]}`).classList.add('fa-caret-down');
                document.getElementById("hidden_order").value = "desc";
            } else {
                document.getElementById(`span-${sortList[index]}`).classList.remove('fa-caret-down');
                document.getElementById(`span-${sortList[index]}`).classList.add('fa-caret-up');
                document.getElementById("hidden_order").value = "asc";
            }
            document.getElementById("hidden_sort").value = element;
        } else {
            if (document.getElementById(`span-${sortList[index]}`).classList.contains('fa-caret-up')) {
                document.getElementById(`span-${sortList[index]}`).classList.remove('fa-caret-up');
                document.getElementById(`span-${sortList[index]}`).classList.add('fa-caret-down');
            }
        }
    }
    filterDate();
}

//Save the previous value of both date for input validation purpose;
function savePreviousDate() {
    let start = document.getElementById("start-date").value;
    let end = document.getElementById("end-date").value;
    document.getElementById('hidden_prev_start').value = start;
    document.getElementById('hidden_prev_end').value = end;

}

//Prevent the page from refreshing when paginate
$(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    page = $(this).attr('href').split('page=')[1];
    $('#hidden_page').val(page);
    $('li').removeClass('active');
    $(this).parent().addClass('active');
    filterDate();
});

//Filter the results according to the date
function filterDate() {
    var token = $('meta[name="csrf-token"]').attr('content');
    let startDate = document.getElementById('start-date').value;
    let endDate = document.getElementById('end-date').value;
    let sortValue = document.getElementById('hidden_sort').value;
    let sortOrder = document.getElementById('hidden_order').value;
    let previousStartDate = document.getElementById('hidden_prev_start').value;
    let previousEndDate = document.getElementById('hidden_prev_end').value;
    let resultPage = document.getElementById('hidden_page').value;

    switch (sortValue) {
        case "type":
        case "pair":
            sortValue = `orders.${sortValue}`;
            break;
        default:
            sortValue = `trades.${sortValue}`;
            break;
    }
    let orderObject = { 'start': startDate, 'end': endDate, 'sort': sortValue, 'order': sortOrder };

    if (startDate > endDate) {
        appendOrderAlert("Please select a valid range of date");
        document.getElementById('start-date').value = previousStartDate;
        document.getElementById('end-date').value = previousEndDate;
    } else {
        if (previousStartDate != startDate || previousEndDate != endDate) {
            resultPage = 1;
            document.getElementById('hidden_prev_start').value = startDate;
            document.getElementById('hidden_prev_end').value = endDate;
            document.getElementById('hidden_page').value = resultPage;
        }

        $.ajax({
            type: 'GET',
            url: '/order/fetch',
            data: {
                _token: token,
                data: orderObject,
                page: resultPage
            },
            success: function(data) {
                $('tbody').html('');
                $('tbody').html(data);
            },
            error: function(data) {
                console.log(JSON.stringify(data));
            }
        });
    }
}

function changeMonth() {
    document.getElementById('month-id').submit();
}

//Alert the message
function appendOrderAlert(message) {
    Swal.fire({
        title: 'Error',
        icon: 'error',
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



//Display the Help Message
function toggleOrderIntro() {
    introJs().setOptions({
        steps: [{
                title: 'Order History 📑',
                intro: 'In this section, you can view all the <b>Completed</b> order details with your account.<br/> <br/> <b>Incomplete</b> / <b>Ongoing</b> orders only can be viewed on the home page.',
            },
            {
                element: document.querySelector('#start-date-intro'),
                intro: 'You can specify the <b>Start Date</b> to filter the orders for the particular range.'
            },
            {
                element: document.querySelector('#end-date-intro'),
                intro: 'You can specify the <b>End Date</b> to filter the orders for the particular range.',
            },
            {
                element: document.querySelector('#th-pair'),
                intro: 'The instrument refers to <b>Currency Pair</b> that used for trading.',
            },
            {
                element: document.querySelector('#span-pair'),
                intro: 'You can sort the results of orders accordingly by clicking this ▼ icon. '
            },
            {
                element: document.querySelector('#th-type'),
                intro: 'The type is referring to go <b>Long</b> (<b>Buy</b>) or go <b>Short</b> (<b>Sell</b>) within the order. <a href="/learning/order/long-short" target="_blank">Learn More about Long & Short</a>'
            },
            {
                element: document.querySelector('#th-entry'),
                intro: 'The <b>Entry Price</b> of the currency pair when executing the order.'
            },
            {
                element: document.querySelector('#th-exit'),
                intro: 'The <b>Exit Price</b> of the currency pair when closing the order.',
            },
            {
                element: document.querySelector('#th-cost'),
                intro: 'The <b>Total Spread</b> (Entry Price - Exit Price) cost of the order. <a href="/learning/knowledge/spread" target="_blank">Learn More about Spread</a>'
            },
            {
                element: document.querySelector('#th-profit'),
                intro: 'The <b>Total Profit</b> or <b>Loss</b> of the order.'
            },
        ],
    }).start();
}

//Display the Help Message
function toggleSummaryIntro() {
    introJs().setOptions({
        steps: [{
                title: 'Order Summary 📑',
                intro: 'In this section, you can check your order summary for every month. Additionally, you can view the total profits and losses that occurred throughout the particular month.',
            },
            {
                element: document.querySelector('#select_month_intro'),
                intro: 'You can select which <b>Month</b> to view all the details about the order summary within the particular month.<br/><br/>The list of months is based on:<br/><b>-From the oldest order</b><br/><b>-To the latest order</b>.',
                position: 'right'
            },
            {
                element: document.querySelector('#total-profit-intro'),
                intro: 'The <b>Total Profits</b> (<b>Excluded Loss</b>) gained from all the orders within the month. ',
            },
            {
                element: document.querySelector('#total-loss-intro'),
                intro: 'The <b>Total Losses</b> (<b>Excluded Profit</b>) gained from all the orders within the month. ',
            },
            {
                element: document.querySelector('#total-order-intro'),
                intro: 'The <b>Total Number</b> of orders closed/reduced within the month.'
            },
            {
                element: document.querySelector('#summary-table'),
                intro: 'The table displays the respective profits and losses for every currency pair traded within the month.',
            },
            {
                element: document.querySelector('#order-history-intro'),
                intro: 'You can view <b>All Orders History</b> by clicking this button.',
            },
        ],
    }).start();
}