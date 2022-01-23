<?php
  session_start();

   /*if(!isset($_SESSION["username"]))
  {
    header("location:indexnew.php");
  }
  
   include 'dbcon.php';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * from newwho where name = '".$username."' AND password = '".$password."'";

        $result = mysqli_query($con,$query);

        $row = mysqli_fetch_array($result);

        if($row){
            echo $username;
            
            //header("location:indexnew.php");
           
        }
        else{
            echo "<script> alert('username or password incorrect')</script>";
            die(header('location:indexnew.php'));
            
        }
    }
    

    
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical|home</title>
    <!-- pure css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <!-- navbar -->
    <?php
            include 'navbar1.php';
    ?>
    
  <!-- navbar -->
    <div class="payhead">
      <div class="container">
          <h1 class="heading-info">Shop medicine by wholesale</h1>
      </div>
    </div>
    <div class=" p-5 searchbg">
        <div class="search-for-med">
          <form method="post" action="search.php" >
            <h2>Search for Medicines by list</h2><br>
            <input id="txt" type="text" placeholder="Search" style="width:45vw;" list="med" name="search" ><br><br>
            <a><input type="submit" class="bg1-btn btnorder1" style="border:1px solid white; border-radius:5px;width:15vw;margin-left:45vw;" value="Submit" name="submit"></a>
          </form>
            <datalist id="med">
              <option value="Paracitamol"></option>
              <option value="Bandaid"></option>
              <option value="First aid"></option>
              <option value="Opera"></option>
              <option value="Safari"></option>
            </datalist>
          </div>
          <br>
          <br>
          <hr>
          <div class="cart">
            
          </div>
          <a href="payment.php" class="next-btn text-center">Next</a>
        </div>
    </div>
    <!-- Footer -->
    <?php
            include 'footer.php';
    ?>
    <script src="../js/jquery.js"></script>
    <script src="../js/myjs.js"></script>
    <script src="https://kit.fontawesome.com/9dddb02c5f.js" crossorigin="anonymous"></script>
    <script>
      const inputText = document.querySelector("#txt");
      const list = document.querySelector(".cart");
      inputText.addEventListener("keyup", (e) => {
        if (e.keyCode === 13) {
          console.log(e.target.value);
          if (inputText.value !== "") {
            const myItem = document.createElement("div");
            const itemDetail = document.createElement("div");
            const productName = document.createElement("h1");
            const price = document.createElement("div");
            const dates = document.createElement("div");
            const span = document.createElement("span");

            itemDetail.className = "detail";
            myItem.className = "item";
            productName.className = "product-name";
            price.className = "price";
            price.innerHTML = "MRP -";
            price.appendChild(span);
            span.innerHTML = "230";
            dates.className = "dates";
            dates.innerHTML = "MFD-230 and Expiry Date -2030";
            productName.innerHTML = inputText.value;
            itemDetail.appendChild(productName);
            itemDetail.appendChild(price);
            itemDetail.appendChild(dates);
            myItem.appendChild(itemDetail);
            inputText.value="";

            //counter
            const counter = document.createElement("div");
            const counterSpan = document.createElement("span");
            const addBtn = document.createElement("span");
            const count = document.createElement("span");
            const subBtn = document.createElement("span");
            counter.className = "counter";
            counter.innerHTML = "Qty ";
            addBtn.className = "add-btn";
            addBtn.innerHTML = "+";
            addBtn.addEventListener("click", () => {
              let buttonClicked = event.target;
              let input = buttonClicked.parentElement.children[1];
              let inputValue = input.innerHTML;
              let newValue = parseInt(inputValue) + 1;
              input.innerHTML = newValue;
            });
            count.className = "count";
            count.innerHTML = "0";
            subBtn.className = "sub-btn";
            subBtn.innerHTML = "-";
            subBtn.addEventListener("click", () => {
              let buttonClicked = event.target;
              let input = buttonClicked.parentElement.children[1];
              let inputValue = input.innerHTML;
              let newValue = parseInt(inputValue) - 1;
              if(newValue >= 0){
              input.innerHTML = newValue;  
            }
            else{
              input.innerHTML=="0";
            }
            });
            // <div class="delete"><i class="fas fa-trash-alt"></i></div>
            const deleteBtn = document.createElement('div');
            const dltIcon = document.createElement('i');
            deleteBtn.className = "delete";
            dltIcon.className = "fas fa-trash-alt";
            deleteBtn.appendChild(dltIcon);
            deleteBtn.addEventListener("click", ()=>{
              deleteBtn.parentElement.remove();
            })
            counter.appendChild(addBtn);
            counter.appendChild(count);
            counter.appendChild(subBtn);
            myItem.appendChild(counter);
            myItem.appendChild(deleteBtn);
            list.appendChild(myItem);
          }
        }
      });
    </script>
           
</body>
</html>