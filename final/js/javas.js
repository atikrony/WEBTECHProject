function checkName()
{
var x=document.getElementById("name").value;
console.log(x);
if(x.length <5|| !( /^[a-zA-Z ]+$/.test(x))){
    document.getElementById("errorname").innerHTML="Please enter a valid name";
    console.log(x);
    return false;
}
else
{
    document.getElementById("errorname").innerHTML=x;
    console.log(x);
    return true;
}

}


function checkEmail()
{ 
    var x=document.getElementById("email").value;
    console.log(x);
    if(!( /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(x))){
        document.getElementById("errormail").innerHTML="Please enter a valid email";
        console.log(x);
        return false;
    }
    else
    {
        document.getElementById("errormail").innerHTML=x;
        console.log(x);
        return true;
    }

}



function checkPhone()
{
    var x=document.getElementById("phone").value;
    console.log(x);
    if(x.length != 11 || !( /^[0][1][0-9]{9}$/.test(x))){
        document.getElementById("errorphone").innerHTML="please enter a valid phone";
        console.log(x);
        return false;
    }
    else
    {
        document.getElementById("errorphone").innerHTML=x;
        console.log(x);
        return true;
    }

}

function checkUsername()
{
    var x=document.getElementById("username").value;
    console.log(x);
    if(x.length <8 || !( /^[a-z0-9_.]+$/.test(x))){
        document.getElementById("errorusername").innerHTML="please enter a valid username";
        console.log(x);
        return false;
    }
    else
    {
        document.getElementById("errorusername").innerHTML=x;
        console.log(x);
        return true;
    }

}

function checkPassword()
{
    var x=document.getElementById("password").value;
    console.log(x);
    if(!( /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(x))){
        document.getElementById("errorpass").innerHTML="please enter a valid password";
        console.log(x);
        return false;
    }
    else
    {
        document.getElementById("errorpass").innerHTML="valid password";
        console.log(x);
        return true;
    }

}

function checkGender()
{
    var x=document.getElementById("gender").value;
    document.getElementById("errogender").innerHTML=x;

    console.log(x);
}

function checkId()
{
    var x=document.getElementById("id").value;
    console.log(x);
    if(x.length <8 || !( /^[0-9]{2}-[0-9]{5}-[0-9]{1}$/.test(x))){
        document.getElementById("errorid").innerHTML="please enter a valid id";
        console.log(x);
        return false;
    }
    else
    {
        document.getElementById("errorid").innerHTML=x;
        console.log(x);
        return true;
    }

}

function validateForm()
{
if(checkName()==true)
{
    return true;
}
else
{
    return false;
}

}

