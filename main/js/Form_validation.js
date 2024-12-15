var Email=document.getElementById("email")
var Url = document.getElementById("event_link")
var passwd = document.getElementById("password")
var frm1 = document.getElementsByClassName("frm1")[0]
var frm2=document.getElementsByClassName("frm2")[0]
var frm3=document.getElementsByClassName("frm3")[0]
var passwdconditions = new Array(4).fill(false)
var passwdconditionsmessages= new Array(4).fill("")
var errmail = false
var errurl = false
var errpasswd = false



if(passwd){
    passwd.addEventListener("blur", function(){
        let passwd_content = passwd.value.trim()
        if(!ispasswd(passwd_content)){
            PromptError(passwd)
        } else {
            errpasswd = true
            PromptSucces(passwd)
        }
    })
}

if(Email){ Email.addEventListener("blur", function() {
    let content_email = Email.value.trim()
    if (!isEmail(content_email)) {
        PromptError(Email, "Not a Valid email*")
    } else {
        errmail = true;
        PromptSucces(Email);
    }
})

}
if(Url){
    Url.addEventListener("blur", function() {
        let content_link = Url.value.trim()
        if (!isUrl(content_link)) {
            PromptError(Url, "Not a Valid link*");
        } else {
            errurl = true
            PromptSucces(Url);
        }
    })    
}

function PromptError(input, msg='') {
    if(input==passwd){

        //check if the ul exist
        var existingUL = document.querySelector("#errpasswd")
        if(existingUL){
            existingUL.remove()
        }
        let ul = document.createElement('ul'); 
        ul.setAttribute('id', "errpasswd"); // Set the id attribute separately

        for(let i in passwdconditions){
            let c1 = document.createElement('li')
            c1.textContent=passwdconditionsmessages[i]
            if(passwdconditions[i]==false){
             c1.style.color='red'
            } else {
                c1.style.color='green'
            }
            c1.style.fontSize = '12px'
            ul.appendChild(c1);
        }
        input.parentNode.style.setProperty('margin-bottom', '5px', 'important'); 
        ul.style.marginBottom= '10px'
        input.parentNode.insertAdjacentElement('afterend', ul);
        return
    }

    //check if the msg exist
    var existingError = document.querySelector("#errmsg")
    if (existingError) {
        existingError.remove();
    }

    let p = document.createElement('p')
    p.setAttribute('id', "errmsg")
    p.textContent=msg
    p.style.color = 'red'
    p.style.fontSize = '11px'
    if(input.parentNode.classList.contains('box')){
        input.parentNode.style.setProperty('margin-bottom', '4px', 'important'); // Apply high-priority margin to input
        p.style.marginBottom='20px'
        input.parentNode.insertAdjacentElement('afterend', p)
    } else { 
        input.parentNode.appendChild(p)
    }
    

}

function PromptSucces(input) {
    if (input == Email) {
        let p =document.querySelector("#errmsg");
        
        if (p) { // Check if the element exists
            p.textContent = "Valid email"
            p.style.color = 'green'
        }
    } else if (input == Url) {
        let p = input.parentNode.querySelector("#errmsg")

        if (p) {
            p.textContent = "Valid link"
            p.style.color = 'green'
        }
    } else if (input == passwd) {
        let ul = document.querySelector("#errpasswd")
        if (ul) {
            let items = ul.querySelectorAll('li')
            items.forEach(item => {
                item.style.color = 'green'  // Set color to green for each item
            });
        }
    }
}

document.getElementById("submit-btn").onclick=function(event) {
    event.preventDefault()
    if(frm1){
        if (errurl) {

            setTimeout(function() {
                frm1.submit();
            }, 1000); // 1-second delay before submitting
        }
    } else if(frm2){
        if (errmail && errpasswd) {
            setTimeout(function() {
                frm2.submit();
            }, 1000); // 1-second delay before submitting
        }
    } if(frm3){
        if(errmail){
            setTimeout(function() {
                frm3.submit();
            }, 1000); // 1-second delay before submitting
        }
    }
    
}

function ispasswd(password){ 
    let bool = true

    if (password.toString().length >= 6) {
        passwdconditions[0] = true
        passwdconditionsmessages[0] = "at least 6 characters."
    } else {
        passwdconditions[0] = false
        passwdconditionsmessages[0] = "at least 6 characters."
        bool = false
    }

    if (/[A-Za-z]/.test(password)) {
        passwdconditions[1] = true
        passwdconditionsmessages[1] = "at least 1 alphabetic characters."
    } else {
        passwdconditions[1] = false
        passwdconditionsmessages[1] = "at least 1 alphabetic characters."
        bool = false
    }

    if (/\d/.test(password)){  
        passwdconditions[2] = true
        passwdconditionsmessages[2] = "at least 1 numeric characters."
    } else {
        passwdconditions[2] = false
        passwdconditionsmessages[2] = "at least 1 numeric characters."
        bool = false
    }

    if (/[@\/\*\-._%£\^]/.test(password)) {
        passwdconditions[3] = true
        passwdconditionsmessages[3] = "at least 1 special characters."
    } else {
        passwdconditions[3] = false
        passwdconditionsmessages[3] = "at least 1 special characters."
        bool = false
    }
    return bool
}

function isEmail(Email) { 
    return /^([a-zA0-9_\-\.]+)@([a-zA0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(Email);   
} 

function isUrl(link) { 
    return  /^(https?:\/\/)(www\.)?([a-zA0-9_\-]+)\.[a-zA-Z]{2,5}(\.[a-zA-Z]{2,3})?$/.test(link);
} 
