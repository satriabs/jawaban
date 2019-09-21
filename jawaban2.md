function isAcceptedUsername(username) {
    var Regex = /^[a-z]{5,9}$/i ;
    return Regex.test(username) ;
}
// Cara menggunakan fungsi di atas
if (isAcceptedUsername("satria")) {
    alert("Username Is Valid") ;
} else {
    alert("Username Is Invalid") ;
}
function isAcceptedPassword(password) {
    var Regex = /^[A-Z]{1}[0-9]{1}[!@#$%&*]{1}[a-z]{7}$/i ;
    return Regex.test(password) ;
}
// Cara menggunakan fungsi di atas
if (isAcceptedUsername("@Satriabs8")) {
    alert("Username Is Valid") ;
} else {
    alert("Username Is Invalid") ;
}
