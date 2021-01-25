@extends('layouts.default')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="orders-history-container">
    <h2>Order History</h2>
        <div class="orders-history-header">Order Details</div>
            <div class="orders-history-subcontainer">
                <div class="orders-upper-container">
                    <div class="orders-date-input">
                        <div class="half-date-input">
                            <div class="date-label">Start Date :</div>
                            <input type="date" id="start-date" class="form-control col-md-6 date-input" onchange="filterDate()" onfocus="savePrevious()" onkeypress="return false" ></input>
                        </div>
                        <div class="half-date-input">
                            <div class="date-label">End Date :</div>
                            <input type="date" id="end-date" class="form-control col-md-6 date-input" onchange="filterDate()" onfocus="savePrevious()" onkeypress="return false" ></input>
                        </div>
                    </div>
                </div>
                <div class="orders-lower-container">
                    <div class="orders_table_record" id="table_all_records">
                    <table id="all_orders" class="history-table">
                        <thead>
                        <tr>
                            <th>TicketID</th>
                            <th id="th-created_at" onclick="sortTable('created_at')" >Date <span class="fas fa-caret-down" id="span-created_at"></span></th>
                            <th id="th-pair" onclick="sortTable('pair')" >Instrument <span class="fas fa-caret-down" id="span-pair"></span></th>
                            <th id="th-units" onclick="sortTable('units')" >Units <span class="fas fa-caret-down" id="span-units"></span></th>
                            <th id="th-type" onclick="sortTable('type')" >Type <span class="fas fa-caret-down" id="span-type"></span></th>
                            <th>Entry</th>
                            <th>Exit</th>
                            <th id="th-cost" onclick="sortTable('cost')" >Spread Cost <span class="fas fa-caret-down" id="span-cost"></span></th>
                            <th id="th-profit" onclick="sortTable('profit')" >Profit/Loss <span class="fas fa-caret-down" id="span-profit"></span></th>
                        </tr>
                        </thead>
                        <tbody>
                            @include('subpage.order-table')
                        </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_sort" id="hidden_sort" value="created_at" />
                    <input type="hidden" name="hidden_order" id="hidden_order" value="desc" />
                </div>
            </div>
    </div>
</div>

<script>
    var page,temp_start,temp_end;
    var start_date = "{{$start->created_at}}".split(" ");
    var now = new Date();
    var year = now.getFullYear();
    var month = ((now.getMonth()+ 1) <10)? "0"+(now.getMonth()+1):now.getMonth()+1;
    var date = (now.getDate()<10)? "0"+now.getDate():now.getDate();
    var end_date = year+"-"+month+"-"+date;

    document.getElementById('start-date').value = start_date[0];
    document.getElementById('end-date').value = end_date;
    document.getElementById('start-date').min = start_date[0];
    document.getElementById('end-date').min = start_date[0];
    document.getElementById('start-date').max = end_date;
    document.getElementById('end-date').max = end_date;
    var previous_start_date = start_date[0];
    var previous_end_date = end_date;

    function filterDate() {
    var token = $('meta[name="csrf-token"]').attr('content');
    var start = document.getElementById('start-date').value;
    var end = document.getElementById('end-date').value;
    var sort = document.getElementById('hidden_sort').value;
    var order = document.getElementById('hidden_order').value;

    switch(sort){
        case "pair":
            sort = "orders."+sort;
            break;
        case "type":
            sort = "orders."+sort;
            break;
        default:
            sort = "trades."+sort;
            break;
    }

    if(start>end)
    {
        alert("Please select a valid range of date");
        document.getElementById('start-date').value = temp_start;
        document.getElementById('end-date').value = temp_end;
    }
    else
    {
        if (previous_start_date!=start || previous_end_date !=end)
        {
            page = 1;
            previous_start_date = start;
            previous_end_date = end;
        }
    
        $.ajax({
                type:'GET',
                url:'/order/fetch',
                data: {
                    _token:token,
                    start:start,
                    end:end,
                    sort:sort,
                    order:order,
                    page:page,
                },
                success:function(data) {
                    $('tbody').html('');
                    $('tbody').html(data);
                },
                error: function(data){
                    console.log(JSON.stringify(data));
                }
            });
    }
    }

    //Save the previous value of both date for input validation purpose;
    function savePrevious(){
        temp_start  = document.getElementById("start-date").value;
        temp_end = document.getElementById("end-date").value;
    }

    //sort the table accordingly
    function sortTable(element){
        var list = ["created_at","units","pair","type","profit","cost"];

        for (var item in list)
        {
            if(list[item]==element)
            {
                if(document.getElementById("span-"+list[item]).classList.contains('fa-caret-up'))
                {
                    document.getElementById("span-"+list[item]).classList.remove('fa-caret-up');        
                    document.getElementById("span-"+list[item]).classList.add('fa-caret-down');
                    document.getElementById("hidden_order").value = "desc";
                }
                else
                {
                    document.getElementById("span-"+list[item]).classList.remove('fa-caret-down');        
                    document.getElementById("span-"+list[item]).classList.add('fa-caret-up');
                    document.getElementById("hidden_order").value = "asc";
                }
                document.getElementById("hidden_sort").value = element;
            }
            else
            {
                if(document.getElementById("span-"+list[item]).classList.contains('fa-caret-up'))
                {
                    document.getElementById("span-"+list[item]).classList.remove('fa-caret-up');        
                    document.getElementById("span-"+list[item]).classList.add('fa-caret-down');
                }
            }
        }
        filterDate();
    }

    //Prevent the page from refreshing when paginate
    $(document).on('click', '.pagination a', function(event){
    event.preventDefault();
    page = $(this).attr('href').split('page=')[1];
    $('#hidden_page').val(page);

    $('li').removeClass('active');
    $(this).parent().addClass('active');
    filterDate();
    });



</script>

@stop