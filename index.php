<?php
$ip = "";

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

require 'FDNS.php';

$fdns = new FDNS();
$fdns->setIp($ip);
$get_ip = $fdns->getIpByIp();


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./vendor/semantic.css">
        <script src="./vendor/js/jquery-3.3.1.min.js"></script>
        <script src="./vendor/semantic.js"></script>
        <script src="./vendor/js/particles.min.js"></script>
        <style type="text/css">
            .card,.menu {
                border-radius:0px !important
            }
        </style>
        <title><?php echo $ip; ?></title>

        <style type="text/css">

            .hidden.menu {
                display: none;
            }

            .masthead.segment {
                min-height: 200px;
                padding: 1em 0em;
            }
            .masthead .logo.item img {
                margin-right: 1em;
            }
            .masthead .ui.menu .ui.button {
                margin-left: 0.5em;
            }
            .masthead h1.ui.header {
                /*margin-top: 3em; */
                margin-bottom: 0em;
                font-size: 2em;
                font-weight: normal;
            }
            .masthead h2 {
                font-size: 1.3em;
                font-weight: normal;
            }

            .ui.vertical.stripe {
                padding: 1em 0em;
            }
            .ui.vertical.stripe h3 {
                font-size: 2em;
            }
            .ui.vertical.stripe .button + h3,
            .ui.vertical.stripe p + h3 {
                margin-top: 3em;
            }
            .ui.vertical.stripe .floated.image {
                clear: both;
            }
            .ui.vertical.stripe p {
                font-size: 1.33em;
            }

            .ui.vertical.stripe .description p {
                font-size: 1em;
            }


            .ui.vertical.stripe .horizontal.divider {
                margin: 3em 0em;
            }

            .quote.stripe.segment {
                padding: 0em;
            }
            .quote.stripe.segment .grid .column {
                padding-top: 5em;
                padding-bottom: 5em;
            }

            .footer.segment {
                padding: 5em 0em;
            }

            .secondary.pointing.menu .toc.item {
                display: none;
            }

            @media only screen and (max-width: 700px) {
                .ui.fixed.menu {
                    display: none !important;
                }
                .secondary.pointing.menu .item,
                .secondary.pointing.menu .menu {
                    display: none;
                }
                .secondary.pointing.menu .toc.item {
                    display: block;
                }
                .masthead.segment {
                    min-height: 350px;
                }
                .masthead h1.ui.header {
                    font-size: 2em;
                    margin-top: 1.5em;
                }
                .masthead h2 {
                    margin-top: 0.5em;
                    font-size: 1.5em;
                }
            }

            body, html { 
                overflow-x: hidden; 
                overflow-y: auto;
            }


        </style>

    </head>
    <body>


        <!-- Page Contents -->
        <div class="pusher">
            <div class="ui inverted vertical masthead center aligned segment" style="display: none;">

                <div class="ui container">
                    <div class="ui large secondary inverted pointing menu">
                        <!-- a class="toc item">
                          <i class="sidebar icon"></i>
                        </a>
                        <a class="active item">Home</a -->

                        <!-- div class="right item">
                          <a class="ui inverted button">Log in</a>
                          <a class="ui inverted button">Sign Up</a>
                        </div -->
                    </div>

                    <div class="ui text container">    
                        <img src="X" style="height: 70px;">
                    </div>
                </div>
            </div>

            <!-- div class="ui vertical stripe segment" style="border-bottom:none;">
              <div class="ui middle aligned stackable grid container" >
                <div class="row" >
                  <div class="sixteen wide column">
                    <h3 class="ui header">Welcome Freedom DNS site </h3>
                    <p class="center aligned">Bla Bla Bla can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                    
                  </div>
                 
                </div>
               </div>
          </div -->

            <!-- h4 class="ui horizontal header divider">
            <i class="question circle outline icon" id="text-help" style="margin-right: unset;"></i>
          </h4>
    
          <style type="text/css">
            #text-help{
                    cursor: pointer;
            }
          </style -->

            <div class="ui pointing menu container" style="    margin-top: 10em;">
                <a class="active item">
                    <i class="home icon"></i> Home
                </a>
                <a class="item">
                    Region
                </a>

                <!-- div class="right menu">
                       <a class="item curr-region">
                          Current Region : &nbsp; <b><?php echo ' <i class="globe icon"></i> ' . $get_ip['region']; ?></b>
                       </a>
                </div -->


            </div>


            <div class="ui vertical stripe segment" style="border-bottom: unset;">
                <div class="ui middle aligned stackable grid container" >
                    <div class="five column row ">
                        <div class="column">
                            <h2><i class="laptop icon"></i> <?php echo $ip; ?></h2>
                        </div>
                        <div class="right floated  column">
                            <div class="ui main-check toggle checkbox">
                                <input type="checkbox">
                                <label>FDNS site picker</label>
                            </div>
                        </div>
                    </div>

                    <div class="five column row ">
                        <div class="white column">
                            <div class="ui card">
                                <div class="ui  inverted dimmer vq-loader">
                                    <div class="ui text loader">Loading</div>
                                </div>
                                <div class="content">
                                    <div class="header">Region 1</div>
                                    <div class="meta">2 days ago</div>
                                    <div class="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui main-check-sel slider checkbox checked">
                                        <input type="radio" name="throughput" value="Region 1" id="Region_1">
                                        <label>Semira</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui card">
                                <div class="ui  inverted dimmer vq-loader">
                                    <div class="ui text loader">Loading</div>
                                </div>
                                <div class="content">
                                    <div class="header">Region 2</div>
                                    <div class="meta">2 days ago</div>
                                    <div class="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui check-sel slider checkbox">
                                        <input type="radio" name="throughput" value="Region 2" id="Region_2">
                                        <label>Aravinda</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui card">
                                <div class="ui  inverted dimmer vq-loader">
                                    <div class="ui text loader">Loading</div>
                                </div>
                                <div class="content">
                                    <div class="header">Region 3</div>
                                    <div class="meta">2 days ago</div>
                                    <div class="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui check-sel slider checkbox ">
                                        <input type="radio" name="throughput" value="Region 3" id="Region_3">
                                        <label>Sathya</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui card">
                                <div class="ui  inverted dimmer vq-loader">
                                    <div class="ui text loader">Loading</div>
                                </div>
                                <div class="content">
                                    <div class="header">Region 4</div>
                                    <div class="meta">2 days ago</div>
                                    <div class="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui check-sel slider checkbox">
                                        <input type="radio" name="throughput" value="Region 4" id="Region_4">
                                        <label>10mbps max</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui card">
                                <div class="ui  inverted dimmer vq-loader">
                                    <div class="ui text loader">Loading</div>
                                </div>
                                <div class="content">
                                    <div class="header">Region 5</div>
                                    <div class="meta">2 days ago</div>
                                    <div class="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui check-sel slider checkbox">
                                        <input type="radio" name="throughput" value="Region 5" id="Region_5">
                                        <label>20 mbps max</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- div class="row">
                      <div class="center aligned column">
                        <a class="ui huge button">Check Them Out</a>
                      </div>
                    </div -->
                </div>
            </div>



            <div class="ui inverted vertical footer segment" style="display: none;">
                <div class="ui container">
                    <div class="ui stackable inverted divided equal height stackable grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">About</h4>
                            <div class="ui inverted link list">
                                <a target="_blank" href="https://.com/about-us" class="item">About Us</a>
                                <a target="_blank" href="https://.com/contact-us" class="item">Contact Us</a>
                                <a target="_blank" href="https://.com/faq" class="item">FAQ</a>
                                <a target="_blank" href="https://.com/locations" class="item">Locations</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Services</h4>
                            <div class="ui inverted link list">
                                <a target="_blank" href="https://.com/internet/features" class="item">Features</a>
                                <a target="_blank" href="https://.com/internet/broadband-plans" class="item">Broadband Plans</a>
                                <a target="_blank" href="https://e-store..com/" class="item">E Store</a>

                            </div>
                        </div>
                        <div class="seven wide column">
                            <h4 class="ui inverted header"></h4>
                            <p>Your next generation business connectivity partner</p>
                        </div>
                    </div>
                </div>


            </div>




            <div class="ui basic modal">
                <div class="ui icon header">
                    <i class="id badge outline icon"></i>
                    FDNS is enabled.
                </div>
                <div class="content">
                    <center><p>Default Region will be selected as Region 1. please change as you wish !</p></center>
                </div>
                <div class="actions">
                    <div class="ui green ok inverted button">
                        <i class="checkmark icon"></i>
                        Ok
                    </div>
                </div>
            </div>

            <div class="ui modal agrement">
                <div class="header">FDNS help</div>
                <div class="scrolling content">
                    <p>Bla Bla Bla text here...... semira</p>
                </div>
            </div>






            <script type="text/javascript">

                $('#text-help').click(function () {
                    $('.ui.modal.agrement').modal('show');
                });



                $('.main-check').checkbox({

                    onChecked: () => {



                        $('.main-check-sel').checkbox('check');



                        $('.check-sel input').prop('disabled', false);
                        $('.main-check-sel input').prop('disabled', false);

                        $('.ui.basic.modal').modal('show');

                        change_data('main');
                        // $('.curr-region').css('text-decoration', 'unset');

                    },

                    onUnchecked: () => {

                        console.log('changed');

                        $('.main-check-sel').checkbox('uncheck');
                        $('.check-sel').checkbox('uncheck');
                        $('.check-sel input').prop('disabled', true);
                        $('.main-check-sel input').prop('disabled', true);

                        change_data('disable');
                        //$('.curr-region').css('text-decoration', 'line-through');
                    }


                });


                $('.check-sel').checkbox({

                    onChecked: () => {

                        let num = $('.check-sel').find('[name="throughput"]:checked').val();
                        console.log(num);
                        change_data('sub', num);

                    }
                });

                $('.main-check-sel').checkbox({

                    onChecked: () => {

                        let num = $('.main-check-sel').find('[name="throughput"]:checked').val();
                        console.log(num);
                        change_data('sub', num);

                    }
                });


                $('.check-sel input').prop('disabled', true);
                $('.main-check-sel input').prop('disabled', true);


                function change_data(changes, region = '') {

                    $('.vq-loader').addClass('active');

                    if (changes == 'main') {
                        $.post("change.php", {status: 'main', region: 'main'}, function (result) {

                            $('.vq-loader').removeClass('active');

                        });
                    }

                    if (changes == 'sub') {
                        $.post("change.php", {status: 'sub', region: region}, function (result) {
                            $('.vq-loader').removeClass('active');
                        });
                    }


                    if (changes == 'disable') {
                        $.post("change.php", {status: 'disable'}, function (result) {
                            $('.vq-loader').removeClass('active');
                        });
                }

                }


<?php if ($get_ip == NULL) {
    
} else if ($get_ip['status'] == 0) {
    ?>

                    $('#<?php echo str_replace(' ', '_', $get_ip['region']); ?>').attr('checked', true);
                    $('.curr-region').css('text-decoration', 'line-through');

<?php } else { ?>

                    $('.main-check input').attr('checked', true);
                    $('.check-sel input').prop('disabled', false);
                    $('.main-check-sel input').prop('disabled', false);

                    $('#<?php echo str_replace(' ', '_', $get_ip['region']); ?>').attr('checked', true);

<?php } ?>







            </script>

            <script type="text/javascript">
                /* particlesJS.load('particles-js', './vendor/js/login.json', function() {
                 console.log('callback - particles.js config loaded');
                 }); */
            </script>
    </body>
</html>