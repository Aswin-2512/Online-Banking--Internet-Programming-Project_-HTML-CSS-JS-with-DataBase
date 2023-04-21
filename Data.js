

var question
var answer

var cardNo
var exp_month
var exp_year
var cvv



function user_details()
{
    var f=document.getElementById("user_form");

    f.setAttribute('action',"user_details.php");

}

function password()
{
    var flag=0
    var f=document.getElementById("pass_form");

    const login= document.getElementById('login_password').value;
    const confrim_login= document.getElementById('confrim_login_password').value;
    const transaction= document.getElementById('transaction_password').value;
    const confrim_transaction= document.getElementById('confrim_transaction_password').value;


    if(login!=confrim_login && transaction==confrim_transaction)
    {
        window.alert("Login Password dosen't match")
    }

    if(transaction!=confrim_transaction && login==confrim_login)
    {
        window.alert("Transaction Password dosen't match")
    }

    if(login!=confrim_login && transaction!=confrim_transaction)
    {
        window.alert("Both Login and Transaction Passwords dosen't match")
    }

    if(login==transaction)
    {
        flag=1
        window.alert("Both Login and Transaction Passwords should not be the same")
    }

    if(login==confrim_login && transaction==confrim_transaction && flag==0)
    {
        f.setAttribute('action',"password.php");
    }

    
}


function atm()
{
    cardNo=document.getElementById("atm_no").value
    exp_month=document.getElementById("exp_month").value
    exp_year=document.getElementById("exp_month").value
    cvv=document.getElementById("cvv").value

    
}
function log_in()
    {
        var f=document.getElementById("credi")
        f.setAttribute('action',"Login_validate.php")
    }

function new_user()
    {
        var f=document.getElementById("credi")
        f.setAttribute('action',"New_user.html") 
    }