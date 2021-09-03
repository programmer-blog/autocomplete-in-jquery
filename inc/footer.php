<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#search" ).autocomplete({
            source: function (request, response) {
                $.get("src/fetch_records_ajax.php", 
                {
                    data: request,
                    dataType: "json"
                })
                .done(function( data ) {
                    data = $.parseJSON(data);
                    response(data);
                });
            }
        }, {
            minLength: 1,
        });
});
</script>
</body>
</html>