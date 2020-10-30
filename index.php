<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ruleta Newell</title>
    <base href="">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0">
    <link rel="stylesheet" type="text/css" href="css/dark-glass/sidebar.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="css/styledos.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/jquery.slotmachine.css" type="text/css" media="screen" />

    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
 

    <!-- JavaScript -->
    <script src="css/alertifyjs/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/alertifyjs/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="css/alertifyjs/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="css/alertifyjs/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="css/alertifyjs/css/themes/bootstrap.min.css"/>

    <!--
      RTL version
    -->
    <link rel="stylesheet" href="css/alertifyjs/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="css/alertifyjs/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="css/alertifyjs/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="css/alertifyjs/css/themes/bootstrap.rtl.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="css/dark-glass/sidebar.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script
  src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
  integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
  crossorigin="anonymous"></script></head>

<body>    
    <ul id="demo_menu2" >
            <li><button class="btn btn-default btn-sm" id="ps">PS</button></li>
            <li><button class="btn btn-default btn-sm" id="tv-s">TV-S</button></li>
            <li><button class="btn btn-default btn-sm" id="bp">BP</button></li>
            <li><button class="btn btn-default btn-sm" id="kitkat">kk</button></li>
            <li><button class="btn btn-default btn-sm" id="rg">Rg</button></li>
            <li><button class="btn btn-default btn-sm" id="ab">ABB</button></li>
            <li><button class="btn btn-default btn-sm" id="fs">FS</button></li>
            <li><button class="btn btn-default btn-sm" id="bb">bb</button></li>
            <li><button class="btn btn-default btn-sm" id="abb">abb</button></li>
            <li><button class="btn btn-default btn-sm" id="fcbs">fcbs</button></li>
            <li><button class="btn btn-default btn-sm" id="xpert">xpert</button></li>
            <li><button class="btn btn-default btn-sm" id="ht">HT</button></li>
            <li><button class="btn btn-default btn-sm" id="sm">SM</button></li>
            <li><button class="btn btn-default btn-sm" id="sxpert">SxP</button></li>
            <li><button class="btn btn-default btn-sm" id="cm">CM</button></li>
            <li><button class="btn btn-default btn-sm" id="xperpro">XP</button></li>
            <li><button class="btn btn-default btn-sm" id="primalatte">PL</button></li>
            <li><button class="btn btn-default btn-sm" id="primalatteII">PLII</button></li>
            <li><button class="btn btn-default btn-sm" id="certificado">Broun</button></li>

            <li><button class="btn btn-default btn-sm" id="Eliminar">>Eliminar</button></li>
        </ul>    

       <div id="premioimg">
       </div>


    <div id="randomize" class="">
        <div class="content container" style="text-align:center;max-width: 1250px;">

            <div class="row rownumber">
                <div class="col-xs-4">
                    <div style="float: right;">
                        <div id="machine1" class="randomizeMachine">
                            <div class="random-n">0</div>
                            <div class="random-n">1</div>
                            <div class="random-n">2</div>
                            <div class="random-n">3</div>
                            <div class="random-n">4</div>
                            <div class="random-n">5</div>
                            <div class="random-n">6</div>
                            <div class="random-n">7</div>
                            <div class="random-n">8</div>
                            <div class="random-n">9</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div >
                        <div id="machine2" class="randomizeMachine">
                            <div class="random-n">0</div>
                            <div class="random-n">1</div>
                            <div class="random-n">2</div>
                            <div class="random-n">3</div>
                            <div class="random-n">4</div>
                            <div class="random-n">5</div>
                            <div class="random-n">6</div>
                            <div class="random-n">7</div>
                            <div class="random-n">8</div>
                            <div class="random-n">9</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div>
                        <div id="machine3" class="randomizeMachine">
                            <div class="random-n">0</div>
                            <div class="random-n">1</div>
                            <div class="random-n">2</div>
                            <div class="random-n">3</div>
                            <div class="random-n">4</div>
                            <div class="random-n">5</div>
                            <div class="random-n">6</div>
                            <div class="random-n">7</div>
                            <div class="random-n">8</div>
                            <div class="random-n">9</div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
 
            <div>
                <div class="btn-group btn-group-justified btn-group-randomize" role="group">
                    <div id="ranomizeButton" type="button" class="btn btn-black btn-lg hidden"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'menu.php'?>
    <script>
        $(document).ready(function() {



            var numbersArray = getArray();
            var noParticipan = [];
            var siParticipan = [];

            getNoParticipan(function(numeros) {
              noParticipan = numeros;
              siParticipan = numbersArray.filter(num => !noParticipan.find(n => Number(n) == num));
              console.log("noParticipan", noParticipan);
              console.log("numbersArray", numbersArray);
              console.log("siParticipan", siParticipan);
            })


            var pos = 0;
            var playeable = true;


            var machine1 = $("#machine1").slotMachine({
                active: 0,
                delay: 500
            });

            var machine2 = $("#machine2").slotMachine({
                active: 0,
                delay: 500,
                direction: 'down'
            });

            var machine3 = $("#machine3").slotMachine({
                active: 0,
                delay: 500
            });

            function onComplete(active) {
                switch (this.element[0].id) {
                    case 'machine1':
                        $("#machine1Result").text("Index: " + this.active);
                        break;
                    case 'machine2':
                        $("#machine2Result").text("Index: " + this.active);
                        break;
                    case 'machine3':
                        $("#machine3Result").text("Index: " + this.active);
                        break;
                }

            }

            $("#ranomizeButton").click(function() {
                if (playeable) {
                    runRulette();
                    playeable = false;
                }

            });

            $(window).keypress(function(e) {
                if (e.keyCode === 0 || e.keyCode === 32) {
                    e.preventDefault();
                    if (playeable) {
                        runRulette();
                        playeable = false;
                    }
                }
            });


            function runRulette() {
                // var r = Random(); // same as new Random(Random.engines.nativeMath)
                if(siParticipan.length == 0) {
                    alertify
                    .alert("Ya no hay numeros participantes.", function(){
                      //alertify.message('El siguiente numero es el ganador');
                    });
                    return;
                }
                // var value = r.integer(0, numbersArray.length - 1);
                output = [];
                // random (0,1) * (max - min + 1) + min
                  var value = Math.floor(Math.random() * ((siParticipan.length - 1) - 1) + 1);
                   console.log("----------------------------")
                    console.log("valor random", value + " es " + siParticipan[value]);
                    console.log(siParticipan)
                    console.log("----------------------------")
                    sNumber = siParticipan[value].toString();
                    noParticipan.push(sNumber);
                    siParticipan = numbersArray.filter(num => !noParticipan.find(n => Number(n) == num));


                for (var i = 0, len = sNumber.length; i < len; i += 1) {
                  //aqui se agrega el numero ganador
                    output.push(+sNumber.charAt(i));
                    //alert('entra3');
                }

                if (output.length == 2) {

                    machine1.setRandomize(function() {
                        return 0;
                        alert('2');

                    });

                    machine2.setRandomize(function() {
                        return output[0];
                        alert('3');


                    });

                    machine3.setRandomize(function() {
                        return output[1];

                    });
                } else if (output.length == 1) {

                    machine1.setRandomize(function() {
                        return 0;
                    });

                    machine2.setRandomize(function() {
                        return 0;
                    });

                    machine3.setRandomize(function() {
                        return output[0];
                        alert('4');
                    });

                } else {

                    machine1.setRandomize(function() {
                        return output[0];
                        //console.log(output[0]);

                    });

                    machine2.setRandomize(function() {
                        return output[1];
                        //console.log(output[1]);

                    });

                    machine3.setRandomize(function() {
                        return output[2];
                        //console.log(output[2]);
                        alert('5');

                    });

                }

                console.log("siParticipan", siParticipan);
                console.log("noParticipan", noParticipan);
                console.log("numbersArray", numbersArray);
                //console.log(output);
                sendtodb(output,premios);
                //console.log(sendb);
                trying();
            }

            function trying() {
                machine1.shuffle(5, onComplete);

                setTimeout(function() {
                    machine2.shuffle(5, onComplete);
                }, 500);

                setTimeout(function() {
                    machine3.shuffle(5, );
                    playeable = true;
                }, 1000);
            }

            function getArray() {

                var array =[];
                //numero a rifar 109
                for(var i = 1; i <= 109; i++) {
                  array.push(i);
                }
                return array;
            }

            function getNoParticipan(callback) {
              $.ajax({
                url: 'getNumbers.php',
                dataType: 'json',
                success: function(data) {
                  noParticipan = data;
                  callback(noParticipan);
                },
                error: function(error) {
                  console.log(error);
                }
              });
            }
            
            function sendtodb(output,premios){
              //console.log(output,premios);
              win_number = "";
              $.each(output, function(index, value){
                win_number = win_number+value;
              });
               console.log(win_number);
              $.ajax({
                url: "save.php",
                data:{
                  'output': win_number,
                  'premios':premios
                }
              }).done(function(msg) {
                setTimeout(function(event){
                  console.log(msg)
                  if(msg == 'win'){
                    alertify

                    //alertify.message('Ganador');
                  }else{
                    alertify
                    .alert("ESTE NÚMERO YA FUE PREMIADO ANTERIORMENTE.", function(){
                      //alertify.message('El siguiente numero es el ganador');
                    });
                  }
                },5100);
              });
            }

        });
    </script>
<script type="text/javascript" src="js/jquery.sidebar.js"></script>
<script type="text/javascript">
        $("ul#demo_menu2").sidebar({
            position:"right",
            callback:{
                item : {
                    enter : function(){
                        $(this).find("a").animate({color:"red"}, 250);
                    },
                    leave : function(){
                        $(this).find("a").animate({color:"white"}, 250);
                    }
                }
            }
        });
</script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.slotmachine.js"></script>
    <script type="text/javascript" src="js/value.js"></script>
    <script type="text/javascript" src="js/random.min.js"></script>


</body>

</html>