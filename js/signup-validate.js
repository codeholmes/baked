function UsernameLengthValidate(UsrName)
{
    //const UsrName = document.forms["SignupForm"]["username"].value;
    
    if ((UsrName.length) <= 4)
        {
            alert("Username must be more than 4 characters");
            return false;
        }
    else if ((UsrName.length) >= 15)
    {
        {
            alert("Username must be less than 15 characters");
            return false;
        }
    }
    else
    {
        return true;
    }

}

function UsernameCharacterValidate(UsrName)
{
    let UsrNameReg = /[a-zA-Z0-9]$/;
    let UsrNameEnteried = UsrName.match(UsrNameReg)
    
    if (!UsrNameEnteried)
        {
            alert("Invalid username. Only alphanumeric values allowed.");
            return false;
        }
    else
    {
        return true;
    }
}

function EmailValidate(Email)
{
    let EmailReg = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
    let EmailEnteried = Email.match(EmailReg)
    
    if (!EmailEnteried)
        {
            alert("Invalid Email.");
            return false;
        }
    else
    {
        return true;
    }
}

function PasswordLengthValidate(Pwt)
{
    if (!((Pwt.length) > 8))
        {
            alert("Password must me greater than 8 characters.");
            return false;
        }
    else
    {
        return true;
    }
}

function ConfirmPasswordValidate(Pwt1, Pwt2)
{
    if (!(Pwt1 === Pwt2))
        {
            alert("Password didn't matched.");
            return false;
        }
    else
    {
        return true;
    }
}

function ValidateGodmode()
{
    var valid= true;
    valid &= UsernameLengthValidate(document.forms["SignupForm"]["username"].value);
    valid &= UsernameCharacterValidate(document.forms["SignupForm"]["username"].value);
    valid &= EmailValidate(document.forms["SignupForm"]["email"].value);
    valid &= PasswordLengthValidate(document.forms["SignupForm"]["password1"].value);
    valid &= ConfirmPasswordValidate((document.forms["SignupForm"]["password1"].value), (document.forms["SignupForm"]["password2"].value));
    return valid? true:false;
}