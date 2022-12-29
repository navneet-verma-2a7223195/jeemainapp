
function validate_FormID(oSrc, args) {
    var re5digit = "^[a-zA-Z0-9]+$";
    args.IsValid = !(args.Value.search(re5digit) == -1);
}
function validate_Alphanumber(oSrc, args) {
    var re5digit = "^[a-zA-Z0-9\- ]+$";
    
    args.IsValid = !(args.Value.search(re5digit) == -1);
    
}
function validate_Number(oSrc, args) {
    var re5digit = "^[0-9]+$";
    args.IsValid = !(args.Value.search(re5digit) == -1);
}
function validateAddress(oSrc, args) {
    var re5digit = "^\s*[a-zA-Z0-9\.\,\-\:\r\n\/ ]+\s*$";
    args.IsValid = !(args.Value.search(re5digit) == -1);
}
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function validate_Mobile(oSrc, args) {
    var re5digit = /^[0-9]{10}$/;
    args.IsValid = !(args.Value.search(re5digit) == -1);
}

function validateEmail(oSrc, args) {
    var re5digit = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    args.IsValid = !(args.Value.search(re5digit) == -1);
}
function validate_Password(oSrc, args) {
    var re5digit = /^.*(?=.{6,12})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$/;
    args.IsValid = !(args.Value.search(re5digit) == -1);
}

function textboxMultilineMaxNumber(txt, maxLen) {
    try {

        var txtbox = document.getElementById(txt).value;
        if (txtbox.length > (maxLen - 1))

            return false;
    } catch (e) {
    }
}


   