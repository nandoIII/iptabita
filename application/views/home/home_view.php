<style>
    .caption{
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;   
    } 
    .parallax { 
        /* The image used */
        background-image: url("public/img/paralax_1.jpg");
        position: relative;

        /* Set a specific height */
        height: 400px; 
        opacity: 0.6;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        @media only screen and (max-device-width: 1366px) {
            .parallax {
                background-attachment: scroll;
            }
            .caption{
                top: 10%;
            }
        }
    </style>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="public/img/bienvenidos.jpg" alt="New York" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Aniversario Tabita</h3>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                </div>      
            </div>

            <div class="item">
                <img src="public/img/chicago.jpg" alt="Chicago" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago - A night we won't forget.</p>
                </div>      
            </div>

            <div class="item">
                <img src="public/img/la.jpg" alt="Los Angeles" width="1200" height="700">
                <div class="carousel-caption">
                    <h3>LA</h3>
                    <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
                </div>      
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>    

    <!-- Container (The Band Section) -->
    <div id="band" class="container text-center">
        <h3>LA IGLESIA</h3>
        <p><em>¡Eres bienvenido!</em></p>
        <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p class="text-center"><strong>S&oacute;lidas Razones</strong></p>
                <a href="#demo" data-toggle="collapse">
                    <img src="public/img/razones.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo" class="collapse">
                    <p>Guitarist and Lead Vocalist</p>
                    <p>Loves long walks on the beach</p>
                    <p>Member since 1988</p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>Sanas Emociones</strong></p>
                <a href="#demo2" data-toggle="collapse">
                    <img src="public/img/emociones.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo2" class="collapse">
                    <p>Drummer</p>
                    <p>Loves drummin'</p>
                    <p>Member since 1988</p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="text-center"><strong>Buenas Obras</strong></p>
                <a href="#demo3" data-toggle="collapse">
                    <img src="public/img/buenas_obras.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                </a>
                <div id="demo3" class="collapse">
                    <p>Bass player</p>
                    <p>Loves math</p>
                    <p>Member since 2005</p>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Mirad cuan bueno y delicioso es habitar los hermanos juntos y en armonia</span>
        </div>
    </div>

    <!-- Container (TOUR Section) -->
    <div id="tour" class="bg-1">
        <div class="container">
            <h3 class="text-center">MINISTERIOS</h3>
            <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
            <ul class="list-group">
                <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
                <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
                <li class="list-group-item">November <span class="badge">3</span></li> 
            </ul>

            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="public/img/paris.jpg" alt="Paris" width="400" height="300">
                        <p><strong>Paris</strong></p>
                        <p>Friday 27 November 2015</p>
                        <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="public/img/newyork.jpg" alt="New York" width="400" height="300">
                        <p><strong>New York</strong></p>
                        <p>Saturday 28 November 2015</p>
                        <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="public/img/sanfran.jpg" alt="San Francisco" width="400" height="300">
                        <p><strong>San Francisco</strong></p>
                        <p>Sunday 29 November 2015</p>
                        <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                                <input type="number" class="form-control" id="psw" placeholder="How many?">
                            </div>
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-block">Pay 
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> Cancel
                        </button>
                        <p>Need <a href="#">help?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
        <h3 class="text-center">Contacto</h3>
        <p class="text-center"><em>We love our fans!</em></p>

        <div class="row">
            <div class="col-md-4">
                <p>Fan? Drop a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h3 class="text-center">Nuestra Semana</h3>  
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Lunes</a></li>
            <li><a data-toggle="tab" href="#menu1">Martes</a></li>
            <li><a data-toggle="tab" href="#menu2">Mi&eacute;rcoles</a></li>
            <li class="active"><a data-toggle="tab" href="#home">Jueves</a></li>
            <li><a data-toggle="tab" href="#menu1">Viernes</a></li>
            <li><a data-toggle="tab" href="#menu2">S&aacute;bado</a></li>
            <li><a data-toggle="tab" href="#menu2">Domingo</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h2>Mike Ross, Manager</h2>
                <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h2>Chandler Bing, Guitarist</h2>
                <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h2>Peter Griffin, Bass player</h2>
                <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
            </div>
        </div>
    </div>
    <!-- Add Google Maps -->
    <div id="googleMap"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapProp = {center: myCenter, zoom: 12, scrollwheel: false, draggable: false, mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({position: myCenter});
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1htoPqjsNK-zaIYR1aR63csVxHGaHUBY=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->


