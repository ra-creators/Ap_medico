<?php
    
    //let's getv all form values
    $remark = $_POST['remark'];
    $name = $_POST['name'];
    $pic = $_FILES['photo'];
    
    if(!empty($name)){

    }else{
        echo "Name field is empty";
    }
    if(!empty($remark) && !empty($pic)){ //if remark and pic fiels is not empty

        $receiver = "divyabharti1464@gmail.com";  //receiver email address
        $subject = "From $name < >";  //subject of the email. Subjectb looks like From: Divya <>
        //Concating all user values inside bosy variable
        $body = "Name : $name\n Remark : $remark\n List : $pic";
        $sender = "divyabharti30092000@gmail.com"; // serder email

        if(mail($receiver, $subject, $body, $sender)){  //mail() is a inbuild php function to send mail
            echo "Your message is sent!";
        }else{
            echo "Sorry, Failed to send your message!";
        }


    }else{
        echo "pic and remark field is required!";
    } 


    /* //for email validation

    if(filter_var($email, FILTER_VALIDATION_EMAIL)){

    } */
?>