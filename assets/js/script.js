$(function() {

    $('#mapframe').css('height', $('#event-description').innerHeight()+'px');

    $('#google-maps-input, #map-button').attr('type', 'hidden');
    $('#zip-code, #street, #city').on('change paste keyup', function() {
        var zipcode = ($('#zip-code').val() == '') ? '' : $('#zip-code').val() + ', ';
        var street  = ($('#street').val() == '') ? '' : $('#street').val() + ', ';
        var newval = zipcode + street + $('#city').val();
        $('#google-maps-input').val(newval);
    });
    $('#zip-code, #street, #city').focusout(function() {
        if($(this).val() != '') {
            $('#map-button').click();
        }
    });

});

$(window).on('resize', function(){
    $('#mapframe').css('height', $('#event-description').innerHeight()+'px');    
});