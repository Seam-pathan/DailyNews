function validateLogins() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("pwd").value;
    
    // var length = radios.length;
    // for (var i = 0; i < length; i++) {
    //     if (radios[i].checked) {
    //         gender = radios[i].value;
    //         break;
    //     }
    // }

    if (username.length === 0 || password.length === 0) {
        alert('fill up all the fields');
        return false;
    }
    else{

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