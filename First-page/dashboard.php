<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Dashboard</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>     <!-- bootstrap-javascript CDN Link  -->
    <link rel="stylesheet" href="bottom.css">

    <style>     /*   My CSS   */
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    /* header p, header{
        text-align: center;
        color: white;
        background-color: rgb(108, 126, 92);
        box-sizing: border-box;
        width: 100vw;
    } */

    nav{
        width: 100vw;
        background-color: rgb(65, 65, 65);
        color: rgb(255, 255, 255);
        height: 50px;
        z-index: 10;
    }
      .logo img{
        margin-top: 5px;
        width: 40px;
        cursor: pointer;
    }
    nav label{
        cursor: pointer;
        color: white;
        font-weight: bolder;
    }
    #chekbox{
        float: right;
        line-height: 50px;
        margin: 0 50px 0 0px;
        padding: 0 25px 0 25px;
        display: none;
    }
    .chek{
        display: none;
    }
    #chekbox:hover{
        background-color: #000000;
    }
    .logo{
        margin:  0px 0px 0px 50px;
       
       
        
    }
    nav ul{
        /* background-color: #18cea0; */
        float: right;
        margin: 0 20px 0 0;
        transition: 0.5s ease;
        z-index: 10;

    }
    nav ul li{
        list-style: none;
        display: inline-block;
        line-height: 50px;
        background-color: rgb(65, 65, 65);
        color: black;
        padding: 0 10px 0 10px;
        z-index: 10;
       
    }
    nav ul .Logout{
      background-color: red;
    }
    nav ul li:hover {
        background-color: #000000;
    }
    
    nav ul li a{
        text-decoration: none;
        color: rgb(255, 255, 255);
        font-weight: bold;
    }

    #chek:checked ~ ul{
        left: 0%;
    }


    
    @media (max-width : 768px){
        .chekbox-2{
            position: absolute;
            top: 0;
            right: 0;
        }
        #chekbox{
            margin: 0 0px 0 0px;
            padding: 0 25px 0 25px;
            display: block;
        }
        .logo{
            margin:  0px 0px 0px 20px;
    }
    nav ul{
        background-color: #717a71;
        color: white;
        width: 100%;
        height: 100vh;
        margin: 0 0 0 0px;
        position: fixed;
        top: 50px;
        left: -100%;
         z-index: 10;
    }
    nav ul li{
        display: block;
        background-color: #717a71;
        color: white;
        text-align: center;
         z-index: 10;
       
    }
    nav ul li a{
        color: white;
    }
    }

    @media (min-width:320px) and (max-width:375px){
        .chekbox-2{
            position: absolute;
            top: 0;
            right: 0;
        }
        nav{
    width: 100vw;
    background-color: rgb(65, 65, 65);
    color: white;
    height: 50px;
    z-index: 2;
     z-index: 10;
}
nav ul li{
    display: block;
    background-color: #717a71;
     color: black;
    text-align: center;
     z-index: 10;
   
}
    nav ul{
    background-color: #717a71;
     color: black;
    height: 100vh;
    margin: 0 0 0 0;
    position: fixed;
    top: 50px;
    left: -100%;
     z-index: 10;
}
    .logo{
    margin:  0px 0px 0px 20px;
}
    #chekbox{
        margin: 0 0px 0 0px;
        padding: 0 25px 0 25px;

    }
    }

    @media (max-width : 320px){
        .chekbox-2{
            position: absolute;
            top: 0;
            right: 0;
        }
    
    nav{
    width: 100vw;
    background-color: rgb(65, 65, 65);
    color: white;
    height: 50px;
    z-index: 10;
}
    nav ul li{
    display: block;
    background-color: #717a71;
     color: black;
    text-align: center;
    z-index: 10;
   
}
    nav ul{
        background-color: #717a71;
         color: black;
    height: 100vh;
    margin: 0 0 0 0;
    position: fixed;
    top: 50px;
    left: -100%;
    z-index: 10;
}
    .logo{
        margin:  0px 0px 0px 20px;
}
    #chekbox{
        margin: 0 0px 0 0px;
        padding: 0 25px 0 25px;

    }
}


main{
    
    height: calc(100% - 50px - 60px);
    width: 100vw;
    background-color: #be2b2b;
    color: rgb(0, 0, 0);
    font-weight: bolder;
    z-index: 1;
}
main .container{
    
    height: calc(100vh - 50px - 60px);
    background-color: #A0D6B4;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    /* align-items: center; */
    padding-left: 30px;
}
main .username{
   display: flex;
   justify-content: center;
   align-items: center;
}
main .username1{
   color: white;
   font-weight: bolder;
   padding: 0px 10px;
}
main .container .Two,.three,.four,.five{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.Two .gift{
    color:  #FF6F61;
    padding: 0 20px 0 0;
}
 .arrow{
    padding: 0 20px 0 0;
}
.one{
    padding-right: 30px;
    font-weight: bolder;
}
.smallbig{
    color: #FF6F61;
}

 
 .depositBox .mode,.h3{
    display: flex;
    justify-content: space-around;
    align-items: center;

 }
 .depositBox .mode .btn{
    background-color: #9390b6;
    padding: 15px;
    border-radius: 10px;
    transition: all 0.15s ease;
 }
 .depositBox .mode .btn:hover{
   
    scale: 110%;
 }
 .close{
     position: absolute;
    top: 0;
    right: 0;
    color: rgb(255, 255, 255);
    background-color: #d32c2c;
    display: block;
    padding: 12px;
 }
 .one{
    padding: 10px 30px 0 0;
    z-index: 1;

 }
 .Two,.three,.four,.five{
    cursor: pointer;
    padding: 15px 10px;

 }


 .depositBox{
    visibility: hidden;
    opacity: 0;
    position: relative;
    width: 100vw;
    height: 120px;
    margin-top: -50px;
    margin-left: -30px;
    background-color: rgb(65, 65, 65);
    gap: 15px;
    flex-direction: column;
    justify-content: space-around;
    padding: 10px 5px;
    transition: all 0.5s ease;
 }
 .depositBox.active{
    visibility: visible;
    opacity: 1;
    transition: all 0.5s ease;
 }
 .WithdrawaBox .mode,.h3{
    display: flex;
    justify-content: space-around;
    align-items: center;

 }

 .WithdrawaBox .mode .btn{  
    background-color: #9390b6;
    padding: 15px;
    border-radius: 10px;
    transition: all 0.15s ease;
 }
 .WithdrawaBox .mode .btn:hover{
    scale: 110%;
 }
 .close2{
     position: absolute;
    top: 0;
    right: 0;
    color: rgb(255, 255, 255);
    background-color: #d32c2c;
    display: block;
    padding: 12px;
 }

 .WithdrawaBox{
    visibility: hidden;
    opacity: 0;
    position: relative;
    width: 100vw;
    height: 120px;
    margin-top: -90px;
    margin-left: -30px;
    background-color: rgb(65, 65, 65);
    gap: 15px;
    flex-direction: column;
    justify-content: space-around;
    padding: 10px 5px;
    transition: all 0.5s ease;
 }
 .WithdrawaBox.active2{
    visibility: visible;
    opacity: 1;
    transition: all 0.5s ease;
 }
 .telegram {
    padding: 2.5px;
    font-size: 25px;
    position: fixed;
    bottom: 100px;
    right: 20px;
    animation: updowne 1s infinite alternate; /* Add duration and alternate for smooth bounce */
}

@keyframes updowne {
    0% {
        transform: translateY(0); /* No need for (0, 2%) */
    }
    100% {
        transform: translateY(-50%); /* Moves 5% upwards for a subtle bounce */
    }
}


    </style>
</head>
<body>

<nav>
        <input type="checkbox" id="chek" class="chek">
        <label for="chek" id="chekbox" data-bs-toggle="tooltip" data-bs-placement="left" title="Sidebar"
        ><i class="fa-solid fa-bars"></i></label>
        <label class="logo"><a href="#"><img src="LOGO2.png" alt="Big-Small"></a></label>
        <ul>
             
            <li><a href="#">Home</a></li>
            <li><a href="page6.html" target="_blank">About</a></li>
            <li><a href="page1.html" target="_blank">Products</a></li>
           
            <li>
                <a href="https://wa.me/916392048719?text=Sir_I_am_User_of_Big_Small_platform_please_Solve_My_Problem!" target="_blank">Contact</a>
            </li>

            <label for="chek" id="chekbox" class="chekbox-2" data-bs-toggle="tooltip" data-bs-placement="left" title="   "><i class="fa-solid fa-xmark"></i></label>
            <li class = "Logout"><a href="logout.php">Logout</a></li>
        </ul>
    </nav> <!-- End nav -->
    <main>
        <div class="container">

        <div class="username">

        Welcome, <span class ="username1"> <b><?php echo $name ?></b> </span> !

        </div>

            <span class="telegram">
                <a href="http://t.me/VNCsuport" target="_blank" style="text-decoration: none; color: #0088cc;"><i class="fa-brands fa-telegram"></i></a>
            </span>

            <!-- for Deposit Money -->
            <!-- start display-non-Box -->
             

            <!-- End display-non-Box -->

            <div class="one"> <marquee behavior="alternate" direction="right"> <b><i> <span class="smallbig">Small-Big</span> Private Limited </i></b></marquee>    </div>
            <div class="Two">
                <div class="collect">   Collect Gift  </div>
                <div class="gift">   Upciming  </div>
            </div>
            <div class="three">    
                <div class="Refer">Referral Program </div>
                <div class="arrow"><i class="fa-solid fa-caret-down"></i></div>
            </div>
            <div class="four">    
                <div class="Deposit">Deposit Money </div>
                <div class="arrow"><i class="fa-solid fa-caret-down"></i></div>
            </div>
            <div class="five">  
                <div class="Withdrawa">  Withdrawal Money  </div>
                <div class="arrow"><i class="fa-solid fa-caret-down"></i></div>
            </div>

            <div class="depositBox">
                <h3 class="h3" style="color: white;">Deposit</h3>
               
               
               <div class="mode">
                   <div class="btn"><a href="https://wa.me/916392048719?text=Sir_I_want_to_deposit_money_through_UPI_on_this_platform._Please_tell_me_the_complete_process_of_depositing_and_helpme.!" target="_blank" style="text-decoration: none; color: rgb(255, 255, 255);">UPI</a>
                       </div>
                   <div class="btn">
                       <a href="https://wa.me/916392048719?text=Sir_I_want_to_deposit_money_through_BANK_TRANSFER_on_this_platform._Please_tell_me_the_complete_process_of_depositing_and_helpme.!" target="_blank" style="text-decoration: none; color: rgb(255, 255, 255);">BANK </a>
                   </div>
               </div>
               <span class="close"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="WithdrawaBox">
                <h3 class="h3" style="color: white;">Withdrawa</h3>
               
               
               <div class="mode">
                   <div class="btn"><a href="https://wa.me/916392048719?text=Sir_I_want_to_Withdrawa_money_through_UPI_on_this_platform._Please_tell_me_the_complete_process_of_depositing_and_helpme.!" target="_blank" style="text-decoration: none; color: rgb(255, 255, 255);">UPI</a>
                       </div>
                   <div class="btn">
                       <a href="https://wa.me/916392048719?text=Sir_I_want_to_Withdrawa_money_through_BANK_TRANSFER_on_this_platform._Please_tell_me_the_complete_process_of_depositing_and_helpme.!" target="_blank" style="text-decoration: none; color: rgb(255, 255, 255);">BANK </a>
                   </div>
               </div>
               <span class="close2"><i class="fa-solid fa-xmark"></i></span>
            </div>

        </div>
    </main> <!-- End main -->
    <footer>
        <div class="icon-container">
            <div class="icon">
                <a href="page1.html">
                    <span class="cheng1"><i class="fa-solid fa-magnifying-glass"></i></span> <br>
                    <span class="cheng11">Search</span> 
                </a> 
            </div>
            <div class="icon">
                <a href="100INR.html">
                    <span  class="cheng2"><i class="fa-solid fa-trophy"></i></span> <br>
                    <span class="cheng22">Win</span> 
                </a>
            </div>
            <div class="icon">
                <a href="dashboard.php">
                <span  class="cheng3"><i class="fa-solid fa-house-user"></i></span> <br>
                <span class="cheng33">Home</span>  
                </a>
            </div>
        </div>
    </footer>  <!-- End footer -->

    <script>
        const CLOSE = document.querySelector(".close");
        const CLOSE2 = document.querySelector(".close2");
        const DEPOSITE = document.querySelector(".depositBox");
        const WITHDRAWABOX = document.querySelector(".WithdrawaBox");
        const FOUR = document.querySelector(".four");
        const FIVE = document.querySelector(".five");


        FOUR.addEventListener("click", ()=>{
            DEPOSITE.classList.add('active')
         })
        CLOSE.addEventListener("click", ()=>{
            DEPOSITE.classList.remove("active")
        })
        
        FIVE.addEventListener("click", ()=>{
            WITHDRAWABOX.classList.add('active2')
         })
         CLOSE2.addEventListener("click", ()=>{
            WITHDRAWABOX.classList.remove("active2")
        })
        
        

/*     FOR-TOOLTIP   bootstrap-javascript CDN Link       */

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
})

    </script>
      
      
     
</body>
</html>