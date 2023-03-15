function isValid(){
    let password = document.forms["myform"]["password"].value;
    let cpassword = document.forms["myform"]["coinformPassword"].value;
    if(!(password===cpassword)){
        alert("Please Check Coinform Password");
        return false;
    }
    else return true;
}
$(document).ready(function(){
$("#submit").click(function(){
    $.ajax({
        url:"../php/register.php",
        type:"POST",
        data:$('#form').serialize()
    })
    })
})