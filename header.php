<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="pass paper, Pass Paper, grade 10 papers, papers, grade 10, Agriculture paper, agri paper">
    <title>Agriculture</title>
    <link rel="stylesheet" href="style.css">


    <link href="img/logo.png" alt="logo" rel="icon">

    <!--box-icons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--remix-icons link-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!--google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
 *{
   margin: 0;
 }

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
 }

 li {
  float: left;
 }


 li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 }

 li a:hover:not(.active) {
  background-color: #111;
 }

 .active {
  background-color: #04AA6D;
 }

 .footer{
    display: block;
    grid-template-columns: repeat(auto-fit, minmax(20px, auto));
    gap: 2rem;
    background-color: #4CAF50;
    margin: 0;
}

.footer-box{
    display: block;
    flex-direction: column;
}

.footer-box h3{
    font-size: 20px;
    font-weight: 600;
}

.footer-box a{
    color: black;
    margin-bottom: 1.8rem;
    transition: all .50s ease;
    margin-bottom: 5px;
}

.footer-box a:hover{
    transform: translateX(10px);
    color: black;
    color: rgb(61, 59, 59);
    font-weight: 400;
}

.social a:hover{
    transform: translateY(-10px);
    color: rgb(61, 59, 59);
    font-weight: 200;
}

.link a{
    display: flex;
}

.email{
    opacity: 1;
}





.social{
    position: relative;
    transition: all .6s;
}

.social-icon{
    position: relative;
    bottom: 20px;
    left: 5px;
    display: inline-flex;
}

.social-icon a{
    display: inline-flex;
}

.social-icon i{
    margin-bottom: 20px;
    width: 40px;
    height: 40px;
    background: black;
    color: #45a049;
    display: inline-flex;
    border: 4px solid rgb(101, 101, 101);
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: all .6s;
}

.social-icon-1 i{
    margin-bottom: 20px;
    width: 40px;
    height: 40px;
    background: black;
    color: #45a049;
    display: inline-flex;
    border: 2px solid black;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: all .6s;
}
.social-icon-1 i:hover{
    opacity: 1;
    transform: rotate3d(0, 0, 1, 360deg) scale(1.03);
}

.social-icon-2 i{
    margin-bottom: 20px;
    width: 40px;
    height: 40px;
    background: black;
    color: #45a049;
    display: inline-flex;
    border: 2px solid #45a049;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: all .6s;
}
.social-icon-2 i:hover{
    opacity: 1;
    transform: rotate3d(0, 0, 1, 360deg) scale(1.03);
}

.social-icon-3 i{
    margin-bottom: 20px;
    width: 40px;
    height: 40px;
    background: black;
    color: #45a049;
    display: inline-flex;
    border: 2px solid #45a049;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: all .6s;
}
.social-icon-3 i:hover{
    opacity: 1;
    transform: rotate3d(0, 0, 1, 360deg) scale(1.03);
}








.copyright{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 20px 14% 20px;
}

.end-text p{
    font-size: 15px;
}

.end-img img{
    width: 100%;
    height: auto;
    cursor: pointer;
}

.copyright{
    background-color: #4CAF50;
}
.copyright-link a{
    text-decoration: none;
    color: var(--text-color);
    transition: all .50s ease;
    text-decoration: underline solid black;
}
.copyright-link a:hover{
    transform: translateX(-5px);
    color: var(--second-color);
    text-decoration: none;
}
 /* css for form */
 
 input[type=text], input[type=password], input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 }

 button {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 }

 input[type=submit]:hover {
  background-color: #45a049;
 }

 .form{
  width: 70%;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  margin-top: auto;
 }

</style>


</head>
<body>
<ul>
  <li class="nav"><a class="active" href="../../../index.php">Home</a></li>
  <li class="nav" style="margin-left:auto;margin-right:auto;"><a href="">Agriculture</a></li>
  <li style="float:right"><a href="../../../login.php">Login</a></li>
</ul>
    <div class="container" style="margin: 5px;">