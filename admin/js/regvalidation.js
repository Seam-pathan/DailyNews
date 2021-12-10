function validateForm() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var gender = "";
    var radios = document.getElementsByName('gender');
    var dob = document.getElementById("dob").value;
    var Religion = document.getElementById("Religion").value;
    var PresentAddress = document.getElementById("PresentAddress").value;
    var PermanentAddress = document.getElementById("PermanentAddress").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("pwd").value;
    
    var length = radios.length;
    for (var i = 0; i < length; i++) {
        if (radios[i].checked) {
            gender = radios[i].value;
            break;
        }
    }
    var regex;
    if (firstname.length === 0 || lastname.length === 0 || gender.length === 0 || dob.length === 0 || Religion.length === 0 || PresentAddress.length === 0 || PermanentAddress.length === 0 || phone.length === 0 || email.length === 0 || username.length === 0 || password.length === 0) {
        alert('fill up all the fields');
        return false;
    }
    else
    {
        // regex=/^[a-zA-Z-' ]*$/;
        if(firstname.length<4)
        {
            alert("Firstname must be four characters long");
            return false;
        }
        else if(firstname.value.length<=0)
        {
            alert("Fill up the firstname");
            return false;
        }
        if(lastname.length<3)
        {
            alert("Lastname must be three characters long");
            return false;
        }
        else if(lastname.value.length<=0)
        {
            alert("Fill up the lastname");
            return false;
        }

        if(gender.radios.length<=0)
        {
            alert("Fill up the gender");
            return false;
        }

        if(dob.value.length<=0)
        {
            alert("Fill up the date of birth");
            return false;
        }
        if(Religion.value.length<=0)
        {
            alert("Fill up the Religion");
            return false;
        }
        if(PresentAddress.value.length<=0)
        {
            alert("Fill up the Present Address");
            return false;
        }
        if(PermanentAddress.value.length<=0)
        {
            alert("Fill up the Permanent Address");
            return false;
        }
        if(phone.value.length<=0)
        {
            alert("Fill up the Permanent Address");
            return false;
        }
        // else if(!firstname.match(regex))
        // {
        //     alert("invalid name");
        //     return false;
        // }
        regex=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if(!email.match(regex))
        {
            alert("invalid email");
            return false;
        }
        else if(email.value.length<=0)
        {
            alert("Fill up the email");
            return false;
        }
        if(username.value.length<=0)
        {
            alert("Fill up the username");
            return false;
        }
        else if(password.value.length<=0)
        {
            alert("Fill up the password");
            return false;
        }
    }
    return true;
}