function sliderUpload(){
    const form = document.querySelector(".form"),
    statusTxt = document.querySelector(".form span");

    form.onsubmit = (e)=>{
        jQuery('#submit').html('Please wait...');
        jQuery('#submit').attr('disabled',true);
        console.log("form submitted")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();
        xhr.open("POST","upload.php",true);
        xhr.onload = ()=>{
            if(xhr.readyState ==4 && xhr.status == 200){
                let response = xhr.response;

                if(response.indexOf("Pic not uploaded") != -1){ 
                    statusTxt.style.color ="#fff";
                }else{
                    form.reset();
                    setTimeout(()=>{
                        statusTxt.style.display = "none";
                    }, 3000);
                }
                statusTxt.innerText = response;
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        jQuery.ajax({
            success:function(result){
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('.form')[0].reset();
            }
        })

    }
}


function productupload(){
    const form = document.querySelector("#tablebg1"),
    statusTxt = document.querySelector("#tablebg1 .buttonarea span");

    form.onsubmit = (e)=>{
        jQuery('#submit').html('Please wait...');
        jQuery('#submit').attr('disabled',true);
        console.log("form submittedpro")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();
        xhr.open("POST","uploa3d.php",true);
        xhr.onload = ()=>{
            if(xhr.readyState ==4 && xhr.status == 200){
                let response = xhr.response;

                if(response.indexOf("Pic not uploaded") != -1){ 
                    statusTxt.style.color ="#fff";
                }else{
                    form.reset();
                    setTimeout(()=>{
                        statusTxt.style.display = "none";
                    }, 3000);
                }
                statusTxt.innerText = response;
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        jQuery.ajax({
            success:function(result){
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('#tablebg1')[0].reset();
            }
        })

    }
}

function whoUpload(){
    const form = document.querySelector(".tablebg"),
    statusTxt = document.querySelector(".tablebg span");

    form.onsubmit = (e)=>{
        jQuery('#submit').html('Please wait...');
        jQuery('#submit').attr('disabled',true);
        console.log("form submitted")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();
        xhr.open("POST","upload1.php",true);
        xhr.onload = ()=>{
            if(xhr.readyState ==4 && xhr.status == 200){
                let response = xhr.response;

                if(response.indexOf("Pic not uploaded") != -1){ 
                    statusTxt.style.color ="#fff";
                }else{
                    form.reset();
                    setTimeout(()=>{
                        statusTxt.style.display = "none";
                    }, 3000);
                }
                statusTxt.innerText = response;
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        jQuery.ajax({
            success:function(result){
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('.tablebg')[0].reset();
            }
        })

    }
}

function newWho(){
    //checkText();
    const form = document.querySelector(".tablebg"),
    statusTxt = document.querySelector(".tablebg .button-area span");

    form.onsubmit = (e)=>{
        jQuery('#submit').html('Please wait...');
        jQuery('#submit').attr('disabled',true);
        console.log("form submitted")
        e.preventDefault();   // preventing form from submitting
        statusTxt.style.color = "#fff";
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();
        xhr.open("POST","upload2.php",true);
        xhr.onload = ()=>{
            if(xhr.readyState ==4 && xhr.status == 200){
                let response = xhr.response;

                if(response.indexOf("Pic not uploaded") != -1){ 
                    statusTxt.style.color ="#fff";
                }else{
                    form.reset();
                    setTimeout(()=>{
                        statusTxt.style.display = "none";
                    }, 3000);
                }
                statusTxt.innerText = response;
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        jQuery.ajax({
            success:function(result){
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('.tablebg')[0].reset();
            }
        })

    }
}
/*function checkText(){
    if(document.getElementById('username').value==""){
        alert('Please Enter your User Name');
        document.getElementById('username').style.borderColor = "red";
        return false;
    }
}*/

function delete1(){
    //checkText();
    const form = document.querySelector(".tablebg");
    //statusTxt = document.querySelector(".tablebg .button-area span");

    form.onsubmit = (e)=>{
        jQuery('#submit').html('Please wait...');
        jQuery('#submit').attr('disabled',true);
        console.log("form submitted")
        e.preventDefault();   // preventing form from submitting
        //statusTxt.style.color = "#fff";
        //statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();
        xhr.open("POST","delete.php",true);
        xhr.onload = ()=>{
            if(xhr.readyState ==4 && xhr.status == 200){
                let response = xhr.response;

                if(response.indexOf("Pic not uploaded") != -1){ 
                    //statusTxt.style.color ="#fff";
                }else{
                    form.reset();
                    setTimeout(()=>{
                      //  statusTxt.style.display = "none";
                    }, 3000);
                }
                //statusTxt.innerText = response;
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        jQuery.ajax({
            success:function(result){
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('.tablebg')[0].reset();
            }
        })

    }
}

