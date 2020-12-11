function ValidateAdmin()
{   
    if (((document.getElementById("userN").value === "admin") && (document.getElementById("Key").value === "baked")))
        {
            //console.log("yo")
            alert("Logged in!");
            return true;
        }
    else
    {
        //console.log("noo")
        alert("Invalid username or password!");
        return false;  

    }
}

//return ValidateAdmin("admin", "baked");