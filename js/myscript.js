/**
 * Created by joyni-pham on 11/19/2017.
 */
function createAddress() {
    $.ajax({
        url:'BitCoin.php',
        type:'GET',
        data:"method=createAddress",
        complete: function (response) {
            $('#output_address').text(response.responseText);
        },
        error: function () {
            $('#output_address').text('Bummer: there was an error!');
        }
    });
    return false;
}

function getBalance() {
    $.ajax({
        url:'BitCoin.php',
        type:'GET',
        data:"method=getBalance",
        complete: function (response) {
            $('#output_balance').text(response.responseText);
        },
        error: function () {
            $('#output_balance').text('Bummer: there was an error!');
        }
    });
    return false;
}

function changeCoin() {
    var coin = $('#coin').val();

    if(coin > 0) {
        $.ajax({
            url: 'BitCoin.php',
            type: 'GET',
            data: "method=changeCoin&coin=" + coin,
            complete: function (response) {
                $('#output_coin').text(response.responseText);
            },
            error: function () {
                $('#output_coin').text('Bummer: there was an error!');
            }
        });
    }
    else
    {
        alert('Something wrong');
    }
    return false;
}