function ChangeCaptcha() {
    var chars ="0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz"; 
    
    var string_length = 6; // This is the length of the Captcha
    // ****** CAUTION ****** This just determines the string that'll be produced by the function. To make the Captcha 
    // field compatible with the updated size, you'll have to change the maxlength attribute in the HTML code

    var ChangeCaptcha = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        ChangeCaptcha += chars.substring(rnum,rnum+1);
    }
    
    document.getElementById('capt').value = ChangeCaptcha; // Final step which changes the field value to the Captcha produced
}