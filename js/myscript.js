/**
 * Created by joyni-pham on 11/19/2017.
 */
function createAddress() {
    $.ajax({
        url:'BitCoin.php',
        complete: function (response) {
            $('#output_address').text(response.responseText);
            console.log('success' + response.responseText);
        },
        error: function () {
            $('#output_address').text('Bummer: there was an error!');
        }
    });
    return false;
}