function UsernameLengthValidate(UsrName)
{   
    if ((UsrName.length) <= 4)
        {
            alert("Invalid Username");
            return false;
        }
    else if ((UsrName.length) >= 15)
    {
        {
            alert("Invalid Username");
            return false;
        }
    }
    else
    {
        return true;
    }
}

function PasswordLengthValidate(UsrName)
{   
    if ((UsrName.length) <= 7)
        {
            alert("Invalid Password");
            return false;
        }
    else
    {
        return true;
    }
}

function ValidateLogin()
{
    let valid= true;
    valid &= UsernameLengthValidate(document.forms["LoginForm"]["username"].value);
    valid &= PasswordLengthValidate(document.forms["LoginForm"]["password"].value);
    return valid? true:false;
} 