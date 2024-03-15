$(document).ready(function() {
    $("#form").on("submit", function(event) {
        var input_url = $('#input_url').val();
        $.ajax({
            url: 'index.php',
            method: 'get',
            dataType: 'html',
            data: {"input_url": input_url},
        });
    });
});