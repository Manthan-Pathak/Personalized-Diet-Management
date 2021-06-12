<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from madang_h1.kenzap.com/choose-plan-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:56:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>Madang</title>

    <!-- style lists -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link rel="stylesheet" href="css/feature-carousel.css">
    <link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- montserrat font embed -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700' rel='stylesheet'
          type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /******* loader image before page load ******/
        .no-js #loader {
            display: none;
        }

        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }

        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/Preloader_4.gif) center no-repeat #fff;
        }
    </style>

    <style>
        .blue_button {
            background: none repeat scroll 0 0 #468CD2;
            border-bottom: 3px solid #3277BC;
            text-shadow: 1px 1px 0 #214D73;
            border: medium none;
            border-radius: 0.3em;
            color: #FFFFFF;
            cursor: pointer;
            font-weight: bold;
            margin: 10px 0;
            padding: 7px 14px;
        }

        .frms input[type="text"], [type="password"], [type="file"], textarea, select {
            background: none repeat scroll 0 0 #fff;
            border: 1px solid #ddd;
            border-radius: 0.35em;
            height: 35px;
            margin-bottom: 15px;
            margin-top: 5px;
            padding: 0 0.5%;
            width: 99%;
        }

        .resp_code {
            background: none repeat scroll 0 0 #FFFFFF;
            border: 1px solid #ddd;
            border-radius: 0.25em;
            color: #333;
            font: 1em/1.3em Tahoma, Geneva, sans-serif;
            margin: 5px 10px 10px 20%;
            overflow: auto;
            padding: 10px 20px;
            width: 50%;
        }

        @media only screen and (max-width: 650px) {
            .resp_code {
                margin: 5px 1px 10px !important;
                width: auto !important;
            }
        }
    </style>


</head>
<body class="choose-plan-page" style="background-color: #60ba62">


<div class="se-pre-con"></div>
<!-- loader image before page load ends -->

<!-- main wrapper of the site starts -->
<div class="wrapper">

    <!-- ============== Header starts ============== -->
    <header class="logo-only-header">
        <div class="container">
            <div class="row">

                <!-- ============== logo block starts ============== -->
                <div class="col-xs-12 col-sm-12 text-center logo-block">
                    <figure><a href="userhome.php"><img class="img-responsive" src="images/sitelogo.png"
                                                        alt="Madang Logo"/></a></figure>
                </div>
                <!-- ============== logo block ends ============== -->
            </div>
        </div>
    </header>
    <!-- ============== Header ends ============== -->

    <!-- loader image before page load starts -->
    <!--  <section class="choose-plan-block">
				   <div class="container">
					   <h5 class="text-center wow fadeInUp text-uppercase">CHECK YOUR CALORIES</h5>
				   </div>
			   </section>       -->


    <style>
        .blue_button {
            background: none repeat scroll 0 0 #60ba62;
            border-bottom: 3px solid #3277BC;
            text-shadow: 1px 1px 0 #214D73;
            border: medium none;
            border-radius: 0.3em;
            color: #FFFFFF;
            cursor: pointer;
            font-weight: bold;
            margin: 10px 0;
            padding: 7px 14px;
        }

        .frms input[type="text"], [type="password"], [type="file"], textarea, select {
            background: none repeat scroll 0 0 #fff;
            border: 1px solid #ddd;
            border-radius: 0.35em;
            height: 35px;
            margin-bottom: 15px;
            margin-top: 5px;
            padding: 0 0.5%;
            width: 99%;
        }

        .resp_code {
            background: none repeat scroll 0 0 #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 0.25em;
            color: #333;
            font: 1em/1.3em Tahoma, Geneva, sans-serif;
            margin: 5px 10px 10px 20%;
            overflow: auto;
            padding: 10px 20px;
            width: 50%;
        }

        @media only screen and (max-width: 650px) {
            .resp_code {
                margin: 5px 1px 10px !important;
                width: auto !important;
            }
        }
    </style>

    <!-- Script by hscripts.com -->
    <div class="resp_code align='center'">
        <form name="frm" onclick="return false" method="POST" class='frms noborders'>
            <table id='tab' align='center' cellspacing='0' cellpadding='0' style="width:100%; text-align: center;">
                <tr>
                    <td align=center><br><b>Calorie Calculator</b><br><br>
                        <table>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Age:&nbsp;&nbsp;</td>
                                <td><input type="text" name="age" id="age" align="left" size="3" maxlength="2"
                                           onkeypress="return cknum(event,age)"></td>
                                <td><font color="#3D366F" size="2">&nbsp;&nbsp;&nbsp;years</font></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Gender:</td>
                                <td><input type="radio" name="gen" id="gen" checked><font color="#3D366F" size="0.7">&nbsp;&nbsp;Male</font>&nbsp;&nbsp;<input
                                            type="radio" name="gen" id="gen"><font color="#3D366F" size="0.7">&nbsp;&nbsp;Female</font>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Height:</td>
                                <td><select style='width:50%;' name="foot" id="foot" onchange="hcon()">
                                        <option value="1">1'</option>
                                        <option value="2">2'</option>
                                        <option value="3">3'</option>
                                        <option value="4">4'</option>
                                        <option value="5">5'</option>
                                        <option value="6">6'</option>
                                        <option value="7">7'</option>
                                    </select>&nbsp;&nbsp;<select style='width:40%;' name="inch" id="inch"
                                                                 onchange="hcon()">
                                        <option value="1">1"</option>
                                        <option value="2">2"</option>
                                        <option value="3">3"</option>
                                        <option value="4">4"</option>
                                        <option value="5">5"</option>
                                        <option value="6">6"</option>
                                        <option value="7">7"</option>
                                        <option value="8">8"</option>
                                        <option value="9">9"</option>
                                        <option value="10">10"</option>
                                        <option value="11">11"</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Cms :</td>
                                <td><input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Weight:</td>
                                <td><input type="text" name="weight" id="weight" maxlength="3" size="3"
                                           onkeyup="isNumberKey(this.id)"></td>
                                <td><select name="wtype" id="wtype">
                                        <option value="kg">Kg</option>
                                        <option value="pounds">Pounds</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Activeness:</td>
                                <td><select style='width:100px;' name="loa" id="loa">
                                        <option value="1">Sedentary</option>
                                        <option value="2">Light Active</option>
                                        <option value="3">Moderately Active</option>
                                        <option value="4">Very Active</option>
                                        <option value="5">Extra Active</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td colspan='2' align="center"><input class='blue_button' type="submit" name="submit"
                                                                      value="Calculate The Calorie" onclick="cc()"></td>
                            </tr>
                        </table>
                        <br>
                        <table align="center" border="0" class="frms noborders">
                            <caption><b>Calorie Result</b></caption>
                            <tr>
                                <td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td>
                                <td><input type="text" name='cals' id="rc" style="font-size:13px;" size="15" readonly>
                                </td>
                                <td><select name="caltype" id="caltype" onChange="convert()">
                                        <option value="g">Grams</option>
                                        <option value="kg">Kilograms</option>
                                        <option value="pounds">Pounds</option>
                                    </select></td>
                            </tr>
                        </table>
                        <div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div>
                        <table class="frms noborders">
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Fat:</td>
                                <td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" name="fat"
                                                                                   style="font-size:13px;" size="10"
                                                                                   readonly></td>
                                <td><font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per
                                        day</font></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Protein:</td>
                                <td style="color: #3D366F; font-size:13px;"><input type="text" name="prot" id="rp"
                                                                                   style="font-size:13px;" size="10"
                                                                                   readonly></td>
                                <td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per
                                        day</font></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Carbohydrate:</td>
                                <td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" name="carb"
                                                                                   style="font-size:13px;" size="10"
                                                                                   readonly></td>
                                <td><font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per
                                        day</font></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Alcohol:</td>
                                <td style="color: #3D366F; font-size:13px;"><input type="text" id="ra"
                                                                                   style="font-size:13px;" size="10"
                                                                                   readonly></td>
                                <td><font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per
                                        day</font></td>
                            </tr>
                        </table>
                </tr>
                </td>
            </table>
        </form>
        <div align="center">
            <p>Checked the Calories? Now Let us create a suitable plan for you <a href="choose-plan-about-us.php">Click
                    Here to genrate meal plan</a></p>
            <p>Want to start later? no problem!<a href="userhome.php">Go back to home page</a></p>
        </div>
    </div>
    </tr>

</div>


<!--Script by hscripts.com-->
<!-- Free javascripts @ https://www.hscripts.com -->
<!-- Script by hscripts.com -->


<!-- ============== footer block starts ============== -->
<footer class="limited-footer">
    <div class="container">
        &copy; 2014-2016 Madang, Inc. ALL RIGHT RESERVED.
    </div>
</footer>
<!-- ============== footer block ends ============== -->


</div>
<!-- main wrapper of the site ends -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/Headroom.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.featureCarousel.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    var cneed;
    var fneed;
    var crneed;
    var pneed;
    var aneed;
    var fd;

    function cc() {
        var age = parseInt(document.getElementById("age").value);
        var wtype = document.getElementById("wtype").value;
        var foot = parseInt(document.getElementById("foot").value);
        var inch = parseInt(document.getElementById("inch").value);
        var cm = document.getElementById("cen").value;
        var weight = document.getElementById("weight").value;
        if (age != '' && cm != '' && weight != '') {
            if (wtype == "pounds") {
                weight = parseInt(weight);
                weight = Math.round(weight / 2.2046);
            }
            var loa = document.getElementById("loa").value;
            if (document.getElementById("gen").checked) {
                fd = (10 * weight) + (6.25 * cm) - (5 * age) + 5;
            } else {
                fd = (10 * weight) + (6.25 * cm) - (5 * age) - 161;
            }
            switch (loa) {
                case "1":
                    cneed = fd * 1.2;
                    break;
                case "2":
                    cneed = fd * 1.375
                    break;
                case "3":
                    cneed = fd * 1.53;
                    break;
                case "4":
                    cneed = fd * 1.725;
                    break;
                case "5":
                    cneed = fd * 1.9;
                    break;
            }
            cneed = Math.floor(cneed);
//cneed1=Math.floor(cneed*0.0353);
            fneed = Math.floor((cneed * 0.25) / 9);
            if (wtype == "pounds") {
                fneed = Math.floor(fneed * 0.0353);
//fneed=fneed*0.0022 ;
            }
            pneed = Math.floor((cneed * 0.25) / 4);
            if (wtype == "pounds") {
                pneed = Math.floor(pneed * 0.0353);
            }
            crneed = Math.floor((cneed * 0.25) / 4);
            if (wtype == "pounds") {
                crneed = Math.floor(crneed * 0.0353);
            }
            aneed = Math.floor((cneed * 0.25) / 7);
            if (wtype == "pounds") {
                aneed = Math.floor(aneed * 0.0353);
            }
            document.getElementById("rc").value = " " + cneed;
            document.getElementById("rf").value = " " + fneed;
            document.getElementById("rp").value = " " + pneed;
            document.getElementById("rh").value = " " + crneed;
            document.getElementById("ra").value = " " + aneed;
            document.getElementById("l1").innerHTML = "grams";
            document.getElementById("l2").innerHTML = "grams";
            document.getElementById("l3").innerHTML = "grams";
            document.getElementById("l4").innerHTML = "grams";
            var caltype = document.getElementById("caltype").value;
            if (caltype == 'g') {
                document.getElementById("l1").innerHTML = "grams";
                document.getElementById("l2").innerHTML = "grams";
                document.getElementById("l3").innerHTML = "grams";
                document.getElementById("l4").innerHTML = "grams";
            }
            if (wtype == "pounds") {
                fat1 = fneed * 0.0022;
                pro1 = pneed * 0.0022;
                car1 = crneed * 0.0022;
                alh1 = aneed * 0.0022;
                fat1 = fat1.toFixed(3);
                pro1 = pro1.toFixed(3);
                car1 = car1.toFixed(3);
                alh1 = alh1.toFixed(3);
                document.getElementById("rf").value = " " + fat1;
                document.getElementById("rp").value = " " + pro1;
                document.getElementById("rh").value = " " + car1;
                document.getElementById("ra").value = " " + alh1;
                document.getElementById("l1").innerHTML = "lbs";
                document.getElementById("l2").innerHTML = "lbs";
                document.getElementById("l3").innerHTML = "lbs";
                document.getElementById("l4").innerHTML = "lbs";
            }
            if (caltype == 'pounds') {
                fat1 = fneed * 0.0022;
                pro1 = pneed * 0.0022;
                car1 = crneed * 0.0022;
                alh1 = aneed * 0.0022;
                fat1 = fat1.toFixed(3);
                pro1 = pro1.toFixed(3);
                car1 = car1.toFixed(3);
                alh1 = alh1.toFixed(3);
                document.getElementById("rf").value = " " + fat1;
                document.getElementById("rp").value = " " + pro1;
                document.getElementById("rh").value = " " + car1;
                document.getElementById("ra").value = " " + alh1;
                document.getElementById("l1").innerHTML = "lbs";
                document.getElementById("l2").innerHTML = "lbs";
                document.getElementById("l3").innerHTML = "lbs";
                document.getElementById("l4").innerHTML = "lbs";
            }
            if (caltype == 'kg') {
                fat2 = fneed / 1000;
                pro2 = pneed / 1000;
                car2 = crneed / 1000;
                alh2 = aneed / 1000;
                fat2 = fat2.toFixed(3);
                pro2 = pro2.toFixed(3);
                car2 = car2.toFixed(3);
                alh2 = alh2.toFixed(3);
                document.getElementById("rf").value = " " + fat2;
                document.getElementById("rp").value = " " + pro2;
                document.getElementById("rh").value = " " + car2;
                document.getElementById("ra").value = " " + alh2;
                document.getElementById("l1").innerHTML = "kilogram";
                document.getElementById("l2").innerHTML = "kilogram";
                document.getElementById("l3").innerHTML = "kilogram";
                document.getElementById("l4").innerHTML = "kilogram";
            }
        } else {
            alert("Please fill your details properly!");
        }

        $.ajax({
            url: 'cal_ins.php' ,
            method: 'POST' ,
            data: {
                cals: cneed , fat:fneed , prot:pneed , carb: crneed
            } ,
            success: function (res) {
                alert(res);
            }
        })

    }

    function con(num) {
        var hc = parseInt(num.value);
        var hi = hc / 2.54;
        var hf = Math.floor(hi / 12);
        var ri = Math.round(hi % 12);
        if (hc > 40 && hc <= 210) {
            document.getElementById("foot").value = hf;
        }
        document.getElementById("inch").value = ri;
    }

    function hcon() {
        var hf = parseInt(document.getElementById("foot").value);
        var hi = parseInt(document.getElementById("inch").value);
        var hc;
        hc = Math.round((hf * 30.48) + (hi * 2.54));
        document.getElementById("cen").value = hc;
    }

    function cknum(event , num) {
        var kc;
        if (window.event) {
            kc = event.keyCode;
        } else {
            kc = event.which;
        }
        var a = num.value;
        if (kc == 48) {
            if (a == "") {
                return false;
            } else {
                return true;
            }
        }
        if (kc != 8 && kc != 0) {
            if (kc < 49 || kc > 57) {
                return false;
            }
        }
    }

    function isNumberKey(id) {
        var no = eval('"' + id + '"');
        var number = document.getElementById(no).value;
        if (!number.match(/^[0-9\.]+$/) && number != "") {
            number = number.substring(0 , number.length - 1);
            document.getElementById(id).value = number;
        }
    }

    function convert() {
        var age = parseInt(document.getElementById("age").value);
        var cm = document.getElementById("cen").value;
        var weight = document.getElementById("weight").value;
        if (age != '' && cm != '' && weight != '') {
            var caltype = document.getElementById("caltype").value;
            var fat = document.getElementById("rf").value;
            var pro = document.getElementById("rp").value;
            var car = document.getElementById("rh").value;
            var alh = document.getElementById("ra").value;
            if (caltype == 'g') {
                document.getElementById("rc").value = " " + cneed;
                document.getElementById("rf").value = " " + fneed;
                document.getElementById("rp").value = " " + pneed;
                document.getElementById("rh").value = " " + crneed;
                document.getElementById("ra").value = " " + aneed;
                document.getElementById("l1").innerHTML = "grams";
                document.getElementById("l2").innerHTML = "grams";
                document.getElementById("l3").innerHTML = "grams";
                document.getElementById("l4").innerHTML = "grams";
            }
            if (caltype == 'pounds') {
                fat1 = fneed * 0.0022;
                pro1 = pneed * 0.0022;
                car1 = crneed * 0.0022;
                alh1 = aneed * 0.0022;
                fat1 = fat1.toFixed(3);
                pro1 = pro1.toFixed(3);
                car1 = car1.toFixed(3);
                alh1 = alh1.toFixed(3);
                document.getElementById("rf").value = " " + fat1;
                document.getElementById("rp").value = " " + pro1;
                document.getElementById("rh").value = " " + car1;
                document.getElementById("ra").value = " " + alh1;
                document.getElementById("l1").innerHTML = "lbs";
                document.getElementById("l2").innerHTML = "lbs";
                document.getElementById("l3").innerHTML = "lbs";
                document.getElementById("l4").innerHTML = "lbs";
            }
            if (caltype == 'kg') {
                fat2 = fneed / 1000;
                pro2 = pneed / 1000;
                car2 = crneed / 1000;
                alh2 = aneed / 1000;
                fat2 = fat2.toFixed(3);
                pro2 = pro2.toFixed(3);
                car2 = car2.toFixed(3);
                alh2 = alh2.toFixed(3);
                document.getElementById("rf").value = " " + fat2;
                document.getElementById("rp").value = " " + pro2;
                document.getElementById("rh").value = " " + car2;
                document.getElementById("ra").value = " " + alh2;
                document.getElementById("l1").innerHTML = "kilogram";
                document.getElementById("l2").innerHTML = "kilogram";
                document.getElementById("l3").innerHTML = "kilogram";
                document.getElementById("l4").innerHTML = "kilogram";
            }
        } else {
            alert("Please fill your details properly!");
        }
    }


</script>

</body>

<!-- Mirrored from madang_h1.kenzap.com/choose-plan-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:56:50 GMT -->
</html>
