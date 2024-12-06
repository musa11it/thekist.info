<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        .Service1,.review{
    display: inline-flex;
    flex-direction: column;
    font-size: larger;
    padding-top: 50px;
    padding-right: 50px;
    padding-left: 50px;
    padding-bottom: 20px;
    border: 3px unset;
    border-radius: 6px;
    margin: 50px;
    cursor: pointer;
    background-color: #bbbbbb;
}
h2{
text-align: center;
}


.footer{
    background-color: #24262b;
    padding: 70px 0;
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.row{
    display: flex;
    flex-wrap: wrap;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
h4{
    color: white;
}
.footer-col h4{
    font-size: 15px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    display: block;
    color: #bbbbbb;
    transition: all 0.3s ease;
}
.footer-col li a:hover{
    color: #ffc107;
    padding-left: 8px;

}
.footer-col .social-link a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    border-radius: 50%;
    line-height: 40px;
    color: #ffffff;
    transition: all 0.3s ease;
}
.footer-col .social-link a:hover{
    color: gray;
}
@media(max-width: 767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}
@media(max-width: 574px){
    .footer-col{
        width: 100%;
    }
}
@media(max-width: 574px){
    h1{
        font-size: 25px;
        margin-right: 60px;
    }
}
@media(max-width: 500px){
    .botton{
        margin-right: 200px;
        max-height: 12px 20px;
    }
}






    </style>
</head>
<body>
<div class="services">
        <h2>Our Services</h2>
        <hr>
        <ul class="Service1">
            <li>We help people appy for <br>scholarships in Rwanda<br>
                and all over the world
            </li>
        </ul>
        <ul class="Service1">
            <li>We help people appy for<br> scholarships in Rwanda<br>
                and all over the world
            </li>
        </ul>
        <ul class="Service1">
            <li>We help people appy for <br>scholarships in Rwanda<br>
                and all over the world
            </li>
        </ul>
    </div>

    <footer class="footer">
        <div class="ontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>Useful Links</h4>
                    <lu>
                       <li><a href="#">Alu.apply </a></li>
                       <li><a href="#">UR.apply</a></li>
                       <li><a href="#">RP/IPRC.applu</a></li>
                       <li><a href="#">Kepler.apply</a></li> 
                    </lu>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <lu>
                       <li><a href="#">FAQ</a></li> 
                       <li><a href="#">How to apply</a></li>
                       <li><a href="contact.php">Contact us</a></li>
                    </lu>
                </div>
                <div class="footer-col">
                    <h4>Service we offer</h4>
                    <lu>
                       <li><a href="service.php">Online application</a></li> 
                       <li><a href="#">Updates</a></li>
                    </lu>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-link">
                     <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                     <a href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>