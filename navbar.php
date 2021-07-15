<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


  <title>Banking website</title>
  

</head>
<body>
  <nav class="navbar"> 
      <div class="navbar-container container">
        <input type="checkbox" >
        <div class="hamburger-lines">
           <span class="line line1"></span>
           <span class="line line2"></span>
           <span class="line line3"></span>
        </div>
        
        <ul class="menu-items">
          
            <li><a href="index.php">Home</a></li>
           <li><a href="transefermoney.php">customers</a></li>
           <li><a href="transactionhistory.php">History</a></li>
           <li><a href="#contact">Contact us</a></li>
         
        </ul>
         <h1 class="logo">Sparks foundation</h1>
      </div>
    </nav> 
    <style>
        *,
*::after,
*::before{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
html{
    font-size: 62.5%;  
}
body{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;  

}
/* ############### utility classes ########### */
.container{
    max-width: 1200px;
    width: 90%;
    margin: auto;
}
.btn{
    display: inline-block;
    padding: 15px;
    text-decoration: none;
    border-radius: 30px;
    cursor: pointer;
    outline: none;
    margin-top: 0.5em;
    font-weight: 400;
    width: 10vw;
    text-align: center;
   
}
.btn-primary{
    color: #fff;
    background: #0e5097;
}
.btn-primary:hover{
    background:#052350;
    transition: background 0.3s ease-in;
}

/* ########## navbar styling ############## */
.navbar input[type='checkbox'],
.navbar .hamburger-lines{
    display: none;
}
.navbar{
    box-shadow: 0px 5px 10px 0px #aaa;
    position: fixed;
    width: 100%;
    background: #fff;
    color: #000;
    /* opacity: 0.85; */
    z-index: 999;

}
.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;

}
.menu-items{
    order: 2;
    display: flex;
}
.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.8rem;
}
.logo{
    order: 1;
    font-size: 3rem;
}
.navbar a{
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}
.navbar a:hover{
    color: #411bac;
}
    </style>

    
</body>
</html>
