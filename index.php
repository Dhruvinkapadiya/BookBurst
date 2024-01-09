<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="main">
    
    <section id="nav">
        <nav>
           <div class="nav">
             <img src="light mode logo.png" height="50px" width="150px" id="lightlogo" alt="">
             <img src="dark more logo.png" height="50px" id="darklogo" width="150px" alt="">
             <ul id="navbar">        
               <li><a href="#home" id="homenav">Home</a></li>
               <li><a href="#about" id="aboutnav">About</a></li>
               <li><a href="#categories" id="categoriesnav">Categories</a></li>
               <li><a href="#contact" id="contactnav">Contact</a></li>
               <li><a href="login.html" id="loginnav">Login</a></li>
               <button onclick="darkmode()"><i id="dark" class="fa fa-adjust" style="font-size: 35px;"></i></button>
             </ul>
           </div>
        </nav>
        <br>
        <hr style="border:none;
                     height: 20px;
                     width: 100%;
                     height: 50px;
                     border-bottom: 1px solid #0E87CC;
                     box-shadow: 0 20px 20px 5px #0E87CC;
                     margin: -50px auto 50px; ">
       </section>
    <section class="home" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 heading">
                    <h1>Welcome To <br> <span>BOOK STORE</span></h1>
                    <p >
                        "A bookstore is a treasure chestzz for a curious mind, where every book is a key to a new world
                        waiting to be discovered."
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="books.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container-fluid">
            <div class="row">
                <h1>Services</h1>
                <div class="col-md-3 services1" id="services1">
                    <h3>Fast Delivery</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, ducimus?</p>
                </div>
                <div class="col-md-3 services1 offset-md-1" id="services2">
                    <h3>Fast Delivery</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, ducimus?</p>
                </div>
                <div class="col-md-3 services1 offset-md-1" id="services3">
                    <h3>Fast Delivery</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, ducimus?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="about.png" height="100%" alt="">
                </div>
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati
                        doloremque dolor in debitis magni tempore, perspiciatis exercitationem at est iusto saepe?
                        Recusandae pariatur quia quasi itaque adipisci tempore, qui ipsum praesentium voluptatem?
                        Voluptas consequuntur perferendis eos fugit voluptatem corrupti, quas libero harum illo eligendi
                        esse illum error doloremque. Reprehenderit sit dolorum natus optio illo eius fugit id ut culpa
                        magni rem repellat iusto voluptas porro numquam at similique, iure nisi? Iste quibusdam ducimus
                        totam quae reiciendis quod laudantium? Nemo delectus voluptates accusamus sunt nostrum maiores
                        provident consequuntur ratione deleniti rem enim, ab tempora dolore laboriosam aliquam. Est,
                        officia modi!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="categories" id="categories">
        <div class="container-fluid">
            <div class="row" style="margin-left: 5%;">
                <h1>Categories</h1>
                <div class="col-md-10  my-5" style="margin-left: 5%;">
                    <button onclick="non_fiction()" id="catbtn1">Non-Fiction</button>
                    <button onclick="edited()" id="catbtn2">Edited (Non-Fiction)</button>
                    <button onclick="reference()" id="catbtn3">Reference (Non-Fiction)</button>
                    <button onclick="fiction()" id="catbtn4">Fiction</button>
                </div>

            </div>
        </div>
        <div class="row" id="non-fiction">
            <div class="col-md-3 offset-md-1 item">
                <img src="book1.jpeg" width="150px" alt="">
                <p>The Politics of the Hunger Games <b>by Jamey Heit</b></p>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book2.jpeg" width="150px" alt="">
                <p>Clocks of New York <b>by Chris DeSantis</b></p>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book3.jpeg" width="150px" alt="">
                <p>Cool Cities <b>by Benjamin R. Barber</b></p>
                <button>Buy Now</button>
            </div>

            <div class="col-md-3 offset-md-1  item">
                <img src="book4.jpeg" width="150px" alt="">
                <p>Space and Place in the Hunger Games <b>by Deidre Anne Evans Garriott </b></p>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item" >
                <img src="book5.jpeg" width="150px" alt="">
                <p>Annual, Lunar, and Tidal Clocks <b>by Hideharu Numata</b> </p><br>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book6.jpeg" width="150px" alt="">
                <p>Verbs, Bones, and Brains: interdisciplinary perspectives on human <b>by Agustín Fuentes</b></p>
                <button>Buy Now</button>
            </div>
        </div>

        <div class="row" id="edited">
            <div class="col-md-3 offset-md-1 item">
                <img src="book7.jpeg" width="150px" alt="">
                <p>The Politics of the Hunger Games <b>by Jamey Heit</b></p>
                <button >Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book8" width="150px" alt="">
                <p>
                    The Scribe Method: The Best Way to Write and Publish Your .. <b>Tucker Max, Zach Obront · </b></p>
                <button >Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book9" width="150px" alt="">
                <p>On Writing<br> <b>Stephen>Buy Now</button>
            </div>

            <div class="col-md-3 offset-md-1  item">
                <img src="book10.jpg" width="150px" alt="">
                <p>The Video Editing Handbook: For Beginners <b>Aaron Goold</b></p><br><br>
                <button >Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book11.jpg" width="150px" alt="">
                <p>
                    THE ELEMENTS OF STYLE <b>William Strunk Jr.</b></p><br>
                <button >Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book12.jpg" width="150px" alt="">
                <p>
                    Treasure Palaces: Great Writers Visit Great Museums <b>Maggie Fergusson</b></p>
                <button >Buy Now</button>
            </div>
        </div>


        <div class="row" id="fiction">
            <div class="col-md-3 offset-md-1 item">
                <img src="book13.jpg" width="150px" alt="">
                <p> Verity - Paperback</p><br><br><br>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book14.jpg" width="150px" alt="">
                <p>All The Light We Cannot See</p>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book15.jpg" width="150px" alt="">
                <p>1984 New</p>
                <button>Buy Now</button>
            </div>

            <div class="col-md-3 offset-md-1  item">
                <img src="book16.jpg" width="150px" alt="">
                <p>Reminders of Him : Colleen Hoover</p><br><br><br>
                <butto>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book17.jpg" width="150px" alt="">
                <p> THE GIRL ON THE TRAIN </p><br>
                <butto>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book18.jpg" width="150px" alt="">
                <p>TWI>Buy Now</button>
            </div>
        </div>

        <div class="row" id="reference">
            <div class="col-md-3 offset-md-1 item">
                <img src="book19.jpg" width="150px" alt="">
                <p>Selection Type Techniques Of Testing</p>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book20.jpg" width="150px" alt="">
                <p>Encyclopedia : Amazing Questions & Answers Science
                    <b>Non-fiction · Reference</b>
                </p>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book21.jpg" width="150px" alt="">
                <p>Data Analytics: Handbook of Formulas and Techniques</p>
                <button>Buy Now</button>
            </div>

            <div class="col-md-3 offset-md-1  item">
                <img src="book22.jpg" width="150px" alt="">
                <p>Certificate Physical And Human Geography</p><br><br>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book23.jpg" width="150px" alt="">
                <p>Tables Facts And Figures <b>Reference</b></p><br>
                <button>Buy Now</button>
            </div>
            <div class="col-md-3 offset-md-1  item">
                <img src="book24.jpg" width="150px" alt="">
                <p>Arihant The Complete Reference Manual CMAT - SK Singh <b>Reference</b></p>
                <button>Buy Now</button>
            </div>
        </div>

    </section>

    <section class="contact" id="contact">
        <div class="container-fluid">
            <div class="row">
                <h1>Contact</h1>
                <div class="col-md-6">
                    <form method="POST">
                        <input type="text" style="float: left; margin-left: 25%;" placeholder="Name" name="name" required id="input1">
                        <input type="email" style="margin-left: 3%;" placeholder="E-Mail" name="email" required id="input2"><br>
                        <input type="text" placeholder="Subject" required id="input3" name="subject"><br>
                        <textarea placeholder="Massage" name="massage" id="input4" required cols="63" rows="10"
                            style="margin-left: 25%;margin-top: 3%;"></textarea>
                        <input type="submit" style="margin-left: 25%;margin-top: 3%;" name="submit" id="submit">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contactus">
                        <i class="fa fa-map-marker" style="font-size: 35px; float: left;"></i>
                        <p>Rajkot 360003</p>

                        <i class="fa fa-phone" style="font-size: 35px; float: left;"></i>
                        <p style="margin-top: 15%;">+91 5454878848</p>

                        <i class="fa fa-envelope" style="font-size: 35px; float: left;"></i>
                        <p style="margin-top: 15%;">Email : xyz@gamil.com</p>

                        <i class="fa fa-globe" style="font-size: 35px; float: left;"></i>
                        <p style="margin-top: 15%;">Website : hello.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1 style="display: flex;justify-content: center;margin-top: 5%;"><img src="light mode logo.png" height="50px" width="150px" alt="" id="lightlogo2">
                    <img src="dark more logo.png" height="50px" width="150px" style="display: none;" id="darklogo2" alt=""></h1>
                    <p style="text-align: center;margin-top: 10%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet porro odio atque officiis temporibus molestias tempore aspernatur aliquid est, amet autem officia, minus, sint earum facere! Voluptates sunt consectetur fugit, enim eos magnam deserunt voluptas neque libero blanditiis cum officia, aut odio, nesciunt possimus ipsum asperiores quae fugiat saepe. Consectetur.</p>
                </div>
                <div class="col-md-3 links">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#categories">Categories</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="Login.html">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li  class="social-media">
                            <a href=""><i class="fa fa-facebook-f" style="font-size: 35px;" id="facebook"></i></a><br>
                            <a href=""><i class="fa fa-twitter-square" style="font-size: 35px; " id="twitter"></i></a><br>
                            <a href="https://www.instagram.com/mr_kapdiya_?igsh=aXRwd2gxNXlrZ2sw"><i class="fa fa-instagram" style="font-size: 35px;" id="insta"></i></a><br>
                            <a href="www.linkedin.com/in/dhruvin-kapadiya"><i class="fa fa-linkedin" style="font-size: 35px;" id="linkdin"></i></a> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

<?php

$username = "root";
$password = "";
$host = 'localhost';
$database = 'bookburst';

$con = mysqli_connect($host , $username , $password , $database);

if($con)
    {
        ?>
        <script>alert("Submit Data");</script>
        <?php
    }

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $massage = $_POST['massage'];

    $insertquery = " INSERT INTO contact(name , email , subject , massage) VALUES ('$name' , '$email' , '$subject' , '$massage') ";

    $res = mysqli_query($con , $insertquery);

    if($res)
    {
        ?>
        <script>alert("Submit Data");</script>
        <?php
    }
}

?>

</html>
