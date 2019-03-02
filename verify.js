function verify()
{
    //Check USERNAME and PASSWORD. Everything else handled implicitly on the webpage.
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    //let radio1 = document.getElementById("free").value;
    //let radio2 = document.getElementById("overnight").value;
    //let radio3 = document.getElementById("three").value;
    
    var radios = document.getElementsByName('shipping');
    var selected = false
    for (var i = 0, length = radios.length; i < length; i++)
    {
        console.log("Checking...");
        if (radios[i].checked)
        {
            // only one radio can be logically checked, don't check the rest
            console.log("One if them is checked.");
            selected = true;
            break;
        }

    }

    let bad = true;
    if (email == "")
    {
        window.alert("I need an email");
    }
    else if (!((email.indexOf("@")>-1)&&(email.indexOf(".")>-1)&&(email.indexOf("@")<email.indexOf("."))))
    {
        window.alert("That's not a real email");
    }
    else if (password == "")
    {
        window.alert("Give me your password so that I can C O N S U M E it.");
    }
    else if (!selected)
    {
        window.alert("Please select a shipping option.");
    }
    else
    {
        bad = false;
    }

    if (!bad)
    {
        let form = document.forms[0];
        form.submit();
    }
}