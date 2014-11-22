
$(document).ready(function(){
    $("#promo").click(function() {
        if($("#promo").is(':checked')) {
            $('#div1').show(1000);
        } else {
            $('#div1').hide(1000);
        }
    });
    $("#btnAgregar").click(function() {
        campo = '<li><label>Email:</label><input type="text" size="20" name="email[]" /></li>';
        alert("hola-");
    });
});