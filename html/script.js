const form = document.querySelector("form"),
statusTxt = document.querySelector(".button-area span");

form.onsubmit = (e)=>{
    console.log("form submitted")
    e.preventDefault();   // preventing form from submitting
    statusTxt.style.color = "#fff";
    statusTxt.style.display = "block";

     let xhr = new XMLHttpRequest();  //creating new xml object
     xhr.open("POST","upload.php", true); //sending post request to message.php file
     xhr.onload = ()=>{  //once ajax loaded
        if(xhr.readyState == 4 && xhr.status == 200){  //if ajax response status is 200 and ready status is 4 means there is no any error
            let response = xhr.response;  //storing ajax response variable
            //console.log(response);
            //if response is an error like enter valid message then we'll change status color to red else reset the form
            if(response.indexOf("Name field is empty") != -1 || response.indexOf("Sorry, Failed to send your message!") || response.indexOf("pic and remark field is required!") || response.indexOf("Not Inserted")){
                statusTxt.style.color = "#fff";
            }else{
                form.reset();
                setTimeout(()=>{
                    statusTxt.style.display = "none";
                }, 3000); //hide the statusTxt after 3 sec if the msg is sent
            }
            statusTxt.innerText = response;
        }

     }
     let formData = new FormData(form); //creating new FormData obj. This obj is used to send form data
     xhr.send(formData);  //sending form data
}


 const forms = document.querySelector("form"),
statusTxts = document.querySelector(".button-area span");

forms.onsubmit = (e)=>{
    console.log("form submitted")
    e.preventDefault();   // preventing form from submitting
    statusTxts.style.color = "#fff";
    statusTxts.style.display = "block";

     let xhrs = new XMLHttpRequest();  //creating new xml object
     xhrs.open("POST","upload1.php", true); //sending post request to message.php file
     xhrs.onload = ()=>{  //once ajax loaded
        if(xhrs.readyState == 4 && xhrs.status == 200){  //if ajax response status is 200 and ready status is 4 means there is no any error
            let response = xhrs.response;  //storing ajax response variable
            //console.log(response);
            //if response is an error like enter valid message then we'll change status color to red else reset the form
            if(response.indexOf("Name field is empty") != -1 || response.indexOf("Sorry, Failed to send your message!") || response.indexOf("pic and remark field is required!") || response.indexOf("Not Inserted")){
                statusTxts.style.color = "#fff";
            }else{
                forms.reset();
                setTimeout(()=>{
                    statusTxts.style.display = "none";
                }, 3000); //hide the statusTxt after 3 sec if the msg is sent
            }
            statusTxts.innerText = response;
        }

     }
     let formData = new FormData(forms); //creating new FormData obj. This obj is used to send form data
     xhrs.send(formData);  //sending form data
} 