//var CouponCode = document.forms["CouponForm"]["CouponCode"].value;
//var CouponCode = "DECEMBER";
//console.log(CouponCode);

function CodeInputValidate(CouponCode)
{   
    if (!(CouponCode == "DECEMBER"))
        {
            //console.log(CouponCode);
            alert("Invalid Coupon");
            return false;
        }
    else
    {
        //console.log("Valid Coupon");
        return true;
    }
}

function CouponValidate()
{
    let valid= true;
    valid &= CodeInputValidate(document.forms["CouponForm"]["CouponCode"].value);
    return valid? true:false;
}