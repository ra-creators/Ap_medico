
function med_pre(){
    const form = document.querySelector(".form1"),
    statusTxt = document.querySelector(".button-area span");

    form.onsubmit = (e)=>{
        jQuery('#submit1').html('Please wait..');
        jQuery('#submit1').attr('disabled',true);
        console.log("form submitted 1")
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
        jQuery.ajax({
            success:function(result){
                jQuery('#submit1').html('Submit');
                jQuery('#submit1').attr('disabled',false);
                jQuery('.form1')[0].reset();
            }
        })
    }
}

function health_pre(){
    const form = document.querySelector(".form2"),
    statusTxt = document.querySelector(".button-area1 span");

    form.onsubmit = (e)=>{
        console.log("form submitted")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();  //creating new xml object
        xhr.open("POST","upload1.php", true); //sending post request to message.php file
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

} 

function stayTouch(){
    const form = document.querySelector(".form3"),
    statusTxt = document.querySelector(".button_area1 span");

    form.onsubmit = (e)=>{
        console.log("form submitted3")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();  //creating new xml object
        xhr.open("POST","upload2.php", true); //sending post request to message.php file
        xhr.onload = ()=>{  //once ajax loaded
            if(xhr.readyState == 4 && xhr.status == 200){  //if ajax response status is 200 and ready status is 4 means there is no any error
                let response = xhr.response;  //storing ajax response variable
                //console.log(response);
                //if response is an error like enter valid message then we'll change status color to red else reset the form
                 if(response.indexOf("Email field is empty") != -1){
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

} 


function contactUs(){
    const form = document.querySelector(".form4"),
    statusTxt = document.querySelector(".button-area span");

    form.onsubmit = (e)=>{
        console.log("form submitted")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();  //creating new xml object
        xhr.open("POST","upload3.php", true); //sending post request to message.php file
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

} 


function orderdetails(){
    const form = document.querySelector(".order1"),
    statusTxts = document.querySelector("#statu4");

    form.onsubmit = (e)=>{
        jQuery('#submit4').html('Please wait..');
        jQuery('#submit4').attr('disabled',true);
        console.log("form submitted 4")
        e.preventDefault();   // preventing form from submitting
        statusTxts.style.color = "#000";
        statusTxts.style.display = "block";

        let xhr = new XMLHttpRequest();  //creating new xml object
        xhr.open("POST","upload4.php", true); //sending post request to message.php file
        xhr.onload = ()=>{  //once ajax loaded
            if(xhr.readyState == 4 && xhr.status == 200){  //if ajax response status is 200 and ready status is 4 means there is no any error
                let response = xhr.response;  //storing ajax response variable
                //console.log(response);
                //if response is an error like enter valid message then we'll change status color to red else reset the form
                if(response.indexOf("Name field is empty") != -1 || response.indexOf("Sorry, Failed to send your message!") || response.indexOf("pic and remark field is required!") || response.indexOf("Not Inserted")){
                    statusTxts.style.color = "#000";
                }else{
                    form.reset();
                    setTimeout(()=>{
                        statusTxts.style.display = "none";
                    }, 3000); //hide the statusTxt after 3 sec if the msg is sent
                }
                statusTxts.innerText = response;
            }

        }
        let formData = new FormData(form); //creating new FormData obj. This obj is used to send form data
        xhr.send(formData);  //sending form data
        jQuery.ajax({
            success:function(result){
                jQuery('#submit4').html('Submit');
                jQuery('#submit4').attr('disabled',false);
                jQuery('.order1')[0].reset();
            }
        })
    }
}