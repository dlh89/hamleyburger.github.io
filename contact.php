<!DOCTYPE html>

<html lang="en-GB">
    <head>
        <title>Contact Kylling</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--My own main.js is linked to at the very end of <body>-->      
             


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="styles.css" rel="stylesheet">
            

        </style>




    </head>
    <body>

        

        <div class="mynav fixed-top">

            <nav class="navbar navbar-light navbar-expand-md navbar-right">
                <a href="index.html" class="navbar-brand" id="homelink">
                    <img src="src/navimgs/Kyllogo.png" alt="Logo" id="mylogo" height="45" width="55">              
                </a>
                
                <span class="container d-inline" id="spreecontainer">
                    <img src="src/navimgs/kyllingspreelogo.gif" alt="Logo text" class="responsive" width=170px>
                </span >

    
                
                
                <button id="burgericon" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    
                    
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto mt-4 mt-md-0 mb-5 mb-md-1" id="navlist">
                        <li class="nav-item">
                            <a href="services.html" class="nav-link">Service</a>
                        </li>

                        <li class="nav-item">
                             <a href="pricing.html" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                             <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div id="bodytext">

            <!--AD BANNER-->                   
            <a href="https://meat-market.dk/produkt-kategori/poelser/" class="bannerlink" target="_blank">
                <!--this banner with id randombanner is changed randomly on load-->
                <img id="randombanner" alt="Your ad here!" class="responsive banner" width=600px height=auto>
            </a>
            
                    
                    <img src="src/photos/skulls.jpg" style="border: 20px solid green; margin-bottom: 80px; max-width: 100%;"> 
                    <h1 style="font-weight: bold">Contact</h1>
                        
                            
                    <!--SELECTION OF IMAGES-->  
                    <div id="allcatalogues">

                        
                        <form action="action_page.php" method="post">

     

                                Name: <br>
                                <input type="text" placeholder="Erizabethu" name="name"><br>
                                e-mail: <br>
                                <input type="text" placeholder="my@e-mail.com" name="email"><br>
                                Subject: <br>
                                <input type="text" placeholder="Subject" name="subject"><br>
                                Message: <br>
                                <textarea placeholder="Your message" name="message"></textarea><br>
                                <button type="submit" name="submit">Send</button>
                            
                
    
                    
                                                                 
                        </form>
                    </div>

            
                

        </div>





    <footer>
        <div class="container-fluid fixed-bottom" id="myfooter">
            site design / logo © 2019 Hamleyburger & Dog Inc.
            
        </div>
    </footer>
    
    <!--My own js-->
    <script src="main.js"></script>  
    </body>

</html>