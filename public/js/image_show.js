function readURLSetBackground(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var blah_back = $('#blah_back');
            blah_back.css('background-image','url(' + e.target.result + ')' );
            blah_back.css('background-color','transparent' );
        };
        reader.readAsDataURL(input.files[0]);
    }
}
