<?php
        session_start();
         error_reporting(0);
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);

        
        
        $detid=$_REQUEST["detid"]  ;
        $uphn1 =$_REQUEST["uphn1"]  ;
        $uphn2 =$_REQUEST["uphn2"]  ;
        
        $ufname =$_REQUEST["ufname"]  ;
        $ufocc=$_REQUEST["ufocc"]  ;
        $ufphn=$_REQUEST["ufphn"]  ;
        
        $umname=$_REQUEST["umname"]  ;
        $umocc=$_REQUEST["umocc"]  ;
        $umphn=$_REQUEST["umphn"]  ;
        
        $inc=$_REQUEST["inc"]  ;
        $gen=$_REQUEST["gen"]  ;
        
        $cadr=$_REQUEST["cadr"]  ;
        $cast=$_REQUEST["cast"]  ;
        $capin=$_REQUEST["capin"]  ;
        $camob=$_REQUEST["camob"]  ;
        
        $padr=$_REQUEST["padr"]  ;
        $past=$_REQUEST["past"]  ;
        $papin=$_REQUEST["papin"]  ;
        $pamob=$_REQUEST["pamob"]  ;
        
        $rur=$_REQUEST["rur"]  ;
        $natn=$_REQUEST["natn"]  ;
        $relg=$_REQUEST["relg"]  ;
        $cat=$_REQUEST["cat"]  ;
        $phd=$_REQUEST["phd"]  ;
        $oarank=$_REQUEST["oarank"]  ;
        $oaroll=$_REQUEST["oaroll"]  ;
        $oabrn=$_REQUEST["oabrn"]  ;
        $brnc=$_REQUEST["brnc"]  ;
        $col=$_REQUEST["col"]  ;
        $sal=$_REQUEST["sal"]  ;
        $jeerc=$_REQUEST["jeerc"]  ;
        $pip=$_REQUEST["pip"]  ;
        $dobc=$_REQUEST["dobc"]  ;
        $qem=$_REQUEST["qem"]  ;
        $ic=$_REQUEST["ic"]  ;
        $cc=$_REQUEST["cc"]  ;
        $cv=$_REQUEST["cv"]  ;
        $nclc=$_REQUEST["nclc"]  ;
        $pwdc=$_REQUEST["pwdc"]  ;
        $tc=$_REQUEST["tc"]  ;
        $mc=$_REQUEST["mc"]  ;
        $ac=$_REQUEST["ac"]  ;
        $gapc=$_REQUEST["gapc"]  ;
        $pcm=$_REQUEST["pcm"]  ;
        $jdd=$_REQUEST["jdd"]  ;
        $jdt=$_REQUEST["jdt"]  ;
        $jamnt=$_REQUEST["jamnt"]  ;
        $idd=$_REQUEST["idd"]  ;
        $idt=$_REQUEST["idt"]  ;
        $iamnt=$_REQUEST["iamnt"]  ;
        $tamnt=$_REQUEST["tamnt"]  ;
        $nob1=$_REQUEST["nob1"]  ;
        $yop1=$_REQUEST["yop1"]  ;
        $tm1=$_REQUEST["tm1"]  ;
        $mo1 =$_REQUEST["mo1"]  ;
        $divs1=$_REQUEST["divs1"]  ;
        $pom1  =$_REQUEST["pom1"]  ;
        $nob2  =$_REQUEST["nob2"]  ;
        $yop2=$_REQUEST["yop2"]  ;
        $tm2=$_REQUEST["tm2"]  ;
        $mo2  =$_REQUEST["mo2"]  ;
        $divs2  =$_REQUEST["divs2"]  ;
        $pom2  =$_REQUEST["pom2"]  ;
        $con=mysqli_connect("localhost","root","","admsn");
        
        
        if(!isset($con))
        {
            die("Database Not Found");
        }
        
        
        if(isset($_REQUEST["frmnext"]))
        {
            if($detid== "")
            $detid = DetCode();
            $sql  = "insert into t_user values(";
            $sql .= "'" . $detid . "',";
            $sql .= "'" . $_SESSION['user'] ."',";
            $sql .= "'" . $uphn1 . "',";
            $sql .= "'" . $uphn2 . "',";
            $sql .= "'" . $ufname . "',";
            $sql .= "'" . $ufocc . "',";
            $sql .= "'" . $ufphn . "',";
            $sql .= "'" . $umname . "',";
            $sql .= "'" . $umocc . "',";
            $sql .= "'" . $umphn . "',";
            $sql .= "'" . $inc . "',";
            $sql .= "'" . $gen . "',";
            $sql .= "'" . $cadr . "',";
            $sql .= "'" . $cast . "',";
            $sql .= "'" . $capin . "',";
            $sql .= "'" . $camob . "',";
            $sql .= "'" . $padr . "',";
            $sql .= "'" . $past . "',";
            $sql .= "'" . $papin . "',";
            $sql .= "'" . $pamob . "',";
            $sql .= "'" . $rur . "',";
            $sql .= "'" . $natn . "',";
            $sql .= "'" . $relg . "',";
            $sql .= "'" . $cat . "',";
            $sql .= "'" . $phd . "',";
            $sql .= "'" . $oarank . "',";
            $sql .= "'" . $oaroll . "',";
            $sql .= "'" . $oabrn . "',";
            $sql .= "'" . $brnc . "',";
            $sql .= "'" . $col . "',";
            $sql .= "'" . $sal . "',";
            $sql .= "'" . $jeerc . "',";
            $sql .= "'" . $pip . "',";
            $sql .= "'" . $dobc . "',";
            $sql .= "'" . $qem . "',";
            $sql .= "'" . $ic . "',";
            $sql .= "'" . $cc . "',";
            $sql .= "'" . $cv . "',";
            $sql .= "'" . $nclc . "',";
            $sql .= "'" . $pwdc . "',";
            $sql .= "'" . $tc . "',";
            $sql .= "'" . $mc . "',";
            $sql .= "'" . $ac . "',";
            $sql .= "'" . $gapc . "',";
            $sql .= "'" . $pcm . "',";
            $sql .= "'" . $jdd . "',";
            $sql .= "'" . $jdt . "',";
            $sql .= "'" . $jamnt . "',";
            $sql .= "'" . $idd . "',";
            $sql .= "'" . $idt . "',";
            $sql .= "'" . $iamnt . "',";
            $sql .= "'" . $tamnt . "',";
            $sql .= "'" . $nob1 . "',";
            $sql .= "'" . $yop1 . "',";
            $sql .= "'" . $tm1 . "',";
            $sql .= "'" . $mo1 . "',";
            $sql .= "'" . $divs1 . "',";
            $sql .= "'" . $pom1 . "',";
            $sql .= "'" . $nob2 . "',";
            $sql .= "'" . $yop2 . "',";
            $sql .= "'" . $tm2 . "',";
            $sql .= "'" . $mo2 . "',";
            $sql .= "'" . $divs2 . "',";
            $sql .= "'" . $pom2 . "')";

       // echo $sql;
            mysqli_query($con, $sql);
            header('location:documents.php');
            echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
            
            
        }
        
        
        function DetCode()
    {
        $con = mysqli_connect("localhost", "root", "", "admsn");
        $rs  = mysqli_query($con,"select CONCAT('DE',LPAD(RIGHT(ifnull(max(s_detid),'DE00000000'),8) + 1,8,'0')) from t_user");
        return mysqli_fetch_array($rs)[0];
    }

    $q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
    $n=  mysqli_fetch_assoc($q);
    $stname= $n['s_name'];


    if (!isset($_SESSION['user']))
    {
            echo "<br><h2>You are not Logged On Please Login to Access this Page</div></h2>";
            echo "<a href=index.php><h3 align=center>Click Here to Login</h3></a>";
            exit();
    }



    ?>

    <html>
        <style>
        table, th, td {
        border:1px solid black;
        }
        </style>
        <head>

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title></title>
            
            <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
            <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
            
        

            <script type="text/javascript">
            function validate()
            {
                $('#adform input[type="text"]').each(function() {
                    if(this.required)
                    {
                        if(this.value=="")
                            $(this).addClass("inpterr");
                        else
                            $(this).addClass("inpterrc");
                    }
                
                    if($(this).attr("VT")=="NM")
                    {
                        if((!isAlpha(this.value)) && this.value!="")
                        {
                        alert("Only Aplhabets Are Allowed . . .");
                        $(this).focus();
                        }
                    }

                            if($(this).attr("VT")=="PH")
                            {
                                    if((!isPhone(this.value)) && this.value!="")
                                    {
                                            alert("Check the phone number format . . .");
                                            $(this).focus();
                                    }
                            }

                            if($(this).attr("VT")=="EML")
                            {
                                    if(!IsEmail($(this).val()) && this.value!="")
                                    {
                                            alert("Invalid Email . . . .");
                                            $(this).focus();
                                    }
                            }	

                            if($(this).attr("VT")=="PIN")
                            {
                                    if((!IsPin(this.value)) && this.value!="")
                                    {
                                            alert("Invalid Pin Code . . . .");
                                            $(this).focus();
                                    }
                            }

                });
            }
            
                    function isAlpha(x)
                    {
                        var re = new RegExp(/^[a-zA-Z\s]+$/);
                        return re.test(x);
                    }
            
            function isPhone(x)
            {
                
                var ph = new RegExp (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);  
                //if(!ph.length<10)
                return ph.test(x);
            }
                    
                    
            
            function IsEmail(x) 
            {
                var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
                return em.test(x);
            }
            
            function IsPin(x) 
            {
                var pin = new RegExp (/^\d{6}$/);
                
                return pin.test(x);
            }		
            </script>
            
            <style type="text/css">
                .inpterr
                {
                    border: 1px solid red;
                    background: #FFCECE;

                }
                
                .inpterrc
                {
                    border: 1px solid black;
                    background: white;
                }
            </style>
                
            
            
            
        </head>
        <body>
            <form id="adform" action="admsnform.php" method="post">
                <div id="dmid" class="container-fluid">  
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <font style="color:white; margin-left:520px; font-family: Verdana; width:100%; font-size:30px;">
                            <b>ADMISSION FORM</b> </font>
                        </div>
                    </div>
                    
                </div>
                
                <table class="frmtbl">
                    
                    <tr border="1" class="hdrow">
                        
                    </tr>       
                    
                    <tr>
                    <td > 
                            <input type="hidden" id="detid" name="detid"></td>
                            <td> <font style="font-family: Verdana;"><h4>Welcome, <?php echo $stname;?></h4> </font> </td>
                        
                        
                        
                    </tr>
                    
                    <tr>
                        <td> <font style="font-family: Verdana;">Student's Mobile No.</font>  </td>
                        <td colspan="3"> <input type="text" id="uphn1" name="uphn1" placeholder="Telephone" required="true" VT="PH">
                        <input type="text" id="uphn2" name="uphn2" placeholder="Mobile Number" required="true" VT="PH"></td>
                    </tr>
                    
                    <tr>
                        <td><font style="font-family: Verdana;"> Father's Name</font></td>
                        <td  colspan="3"> <input type="text" id="ufname" name="ufname" required="true" VT="NM"> </td>
                    </tr>
                    
                    <tr>
                        <td> <font style="font-family: Verdana;">Father's Occupation</font></td>
                        <td> <input type="text" id="ufocc" name="ufocc" required="true" VT="NM"> </td>
                        <td><font style="font-family: Verdana;"> Mobile No.</font></td>
                        <td> <input type="text" id="ufphn" name="ufphn" required="true" VT="PH"> </td>
                    </tr>
                    
                    <tr>
                        <td> <font style="font-family: Verdana;">Mother's Name</font> </td>
                        <td colspan="3"> <input type="text" id="umname" name="umname" required="true" VT="NM"></td>
                    </tr>
                    
                    <tr>
                        <td> <font style="font-family: Verdana;">Mother's Occupation</font></td>
                        <td> <input type="text" id="umocc" name="umocc" required="true" VT="NM"> </td>
                        <td> <font style="font-family: Verdana;">Mobile No.</font></td>
                        <td> <input type="text" id="umphn" name="umphn" required="true" VT="PH"></td>
                    </tr>
                    
                    <tr>
                        <td><font style="font-family: Verdana;"> Income of Parents </font>
                        <td  colspan="3"><input type="text" id="inc" name="inc" required="true" ></td>
                    </tr>
                    
                    <tr>
                        <td> <font style="font-family: Verdana;">Gender </font>
                        <td><input type="radio" id="gen" name="gen" value="Male"><font style="font-family: Verdana;">Male</font>
                        <input type="radio" id="gen" name="gen" value="Female"><font style="font-family: Verdana;">Female </font>
                        <input type="radio" id="gen" name="gen" value="Other"><font style="font-family: Verdana;">Other </font></td>       
                        
                    </tr>
                    
                    <tr>
                        <td><font style="font-family: Verdana;"> Correspondent Address</font>
                        <td colspan="3"><input type="text" id="cadr" name="cadr" class="ad" required="true"><br>
                            <input type="text" id="cast" name="cast" class="ad" placeholder="State" style="margin-top: 4px;" required="true"><br>
                            <input type="text" id="capin" name="capin" class="ad" placeholder="Pin" style="margin-top: 4px;" required="true"><br>
                            <input type="text" id="camob" name="camob" class="ad" placeholder="Mobile" style="margin-top: 4px;" required="true"><br>
                    </td>
                    
                    <tr>
                        <td> <font style="font-family: Verdana;">Permanent Address</font>
                        <td colspan="3"><input type="text" id="padr" name="padr" class="ad" required="true"><br>
                            <input type="text" id="past" name="past" class="ad" placeholder="State" style="margin-top: 4px;" required="true"><br>
                            <input type="text" id="papin" name="papin" class="ad" placeholder="Pin" style="margin-top: 4px;" required="true"><br>
                            <input type="text" id="pamob" name="pamob" class="ad" placeholder="Mobile" style="margin-top: 4px;" required="true"><br>
                        </td>
                    </tr>   
                
                    <tr>
                        <td colspan="4"><input type="radio" id="rur" name="rur" value="Rural"><font style="font-family: Verdana;">
                            Rural
                            <input type="radio" id="rur" name="rur" value="Urban"><font style="font-family: Verdana;">Urban</font>
                            <input type="radio" id="rur" name="rur" value="City"><font style="font-family: Verdana;">City</font></td>
                    </tr>
                    
                    <tr>
                        <td><font style="font-family: Verdana;"> Nationality</font>
                        <td><input type="text" id="natn" name="natn" required="true"></td>
                        <td><font style="font-family: Verdana;"> Religion</font>
                        <td><input type="text" id="relg" name="relg" required="true"></td>
                    </tr>    
                
                    <tr>
                        <td colspan="4"><input type="radio" id="cat" name="cat" value="SC"><font style="font-family: Verdana;">
                            SC
                            <input type="radio" id="cat" name="cat" value="ST"><font style="font-family: Verdana;">ST</font>
                            <input type="radio" id="cat" name="cat" value="OBC"><font style="font-family: Verdana;">OBC</font>
                            <input type="radio" id="cat" name="cat" value="GEN"><font style="font-family: Verdana;">GEN</font></td>
                    </tr>
                    
                    
                    <tr>
                        <td><font style="font-family: Verdana;">Physically Challenged</font></td>
                        <td><select id="phd" name="phd" required="true">
                                <option>--------------------Select--------------------</option>
                                <option>Yes</option>
                                <option>NO</option>
                                
                            </select>
                                
                        </td>
                        <td><font style="font-family: Verdana;">JEE ALL INDIA Rank</font></td>
                        <td><input type="text" id="oarank" name="oarank" required="true"></td>
                </tr>  
                
                <tr>
                        <td><font style="font-family: Verdana;">JEE Roll No.</font></td>
                        <td><input type="text" id="oaroll" name="oaroll" required="true"></td>
                        <td><font style="font-family: Verdana;">Round Of Allotment</font></td>
                        <td><input type="text" id="oabrn" name="oabrn" required="true"></td>
                </tr>  
                
                
                <tr>
                        <td><font style="font-family: Verdana;">Branch Alloted</font></td>
                        <td><select id="brnc" name="brnc">
                            <option>--------------------Select--------------------</option>
                            <option>COMPUTER SCIENCE AND ENG</option>
                            <option>ELECTRICAL AND ELECTRONICS ENG</option>
                            <option>ELECTRONICS AND COMM ENG</option>
                            <option>CIVIL ENG</option>
                            <option>MECHANICAL ENG</option>
                            <option>ELECTRONICS ENG</option>
                            </select>
                        </td>
                </tr>
                <tr>
                        <td><font style="font-family: Verdana;">Hostel Required</font></td>
                        <td><select id="col" name="col">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><font style="font-family: Verdana;">
                            <h5>
                    List of Enclosure (YES/NO)<br>
            </h5>
            </font>
                    <td>
            </tr>
                    <tr>
                        <td><font style="font-family: Verdana;">Seat Allotment Letter</font></td>
                        <td><select id="sal" name="sal">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td><font style="font-family: Verdana;">JEE Rank Card</font></td>
                        <td><select id="jeerc" name="jeerc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>

                    <tr>
                        <td><font style="font-family: Verdana;">Photo ID PROOF</font></td>
                        <td><select id="pip" name="pip">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>

                    <tr>
                        <td><font style="font-family: Verdana;">DOB certificate</font></td>
                        <td><select id="dobc" name="dobc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">Qualifying Examination Marksheet</font></td>
                        <td><select id="qem" name="qem">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">Income Certificate (EWS)</font></td>
                        <td><select id="ic" name="ic">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">Caste Certificate</font></td>
                        <td><select id="cc" name="cc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">Caste Validity</font></td>
                        <td><select id="cv" name="cv">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">NCL Certificate</font></td>
                        <td><select id="nclc" name="nclc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">PWD Certificate</font></td>
                        <td><select id="pwdc" name="pwdc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>


                    <tr>
                        <td><font style="font-family: Verdana;">TC</font></td>
                        <td><select id="tc" name="tc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>

                    <tr>
                        <td><font style="font-family: Verdana;">Migration Certificate</font></td>
                        <td><select id="mc" name="mc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><font style="font-family: Verdana;">AAdhar Card</font></td>
                        <td><select id="ac" name="ac">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><font style="font-family: Verdana;">GAP Certificate</font></td>
                        <td><select id="gapc" name="gapc">
                            <option>--------------------Select--------------------</option>
                            <option>YES</option>
                            <option>NO</option>
                            </select>
                        </td>
                        
                    </tr>                
                    
                    <tr>
                        <td><font style="font-family: Verdana;">% in PCM</font></td>
                        <td><input type="text" id="pcm" name="pcm" required="true"></td>
                    </tr>
                    <tr>
                                    <th><font style="font-family: Verdana;">
                                    <h5 >
                                    FEE PAYMENT DETAILS<br>
                                    </h5>
                                    </font>
                                    <th>
                                </tr>
                                
                            <tr>
                                <th>Sr.NO.</th>
                                <th>Detail</th>
                                <th></th>
                                <th>DD/ECS No.</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                                <tr>
                                    <td><pre>1.</pre></td>
                                    <td><pre>JoSSA 2019 Counselling</pre><td>
                                    <td><input type="text" id="jdd" name="jdd" required="true"></td>
                                    <td>
                                    <input type="date" id="jdt" name="jdt" value="2018-01-01" min="2018-01-01" max="2021-11-11">
                                    </td>
                                    <td><input type="text" id="jamnt" name="jamnt" required="true"></td>
                                </tr>
                                <tr>
                                    <td><pre>2.</pre></td>
                                    <td><pre>At Institute Reporting</pre><td>
                                    <td><input type="text" id="idd" name="idd" required="true"></td>
                                    <td><input type="date" id="idt" name="idt" value="2018-01-01" min="2018-01-01" max="2021-11-11"></td>
                                    <td><input type="text" id="iamnt" name="iamnt" required="true"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><h5>Total Amount</h5><td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="text" id="tamnt" name="tamnt" required="true"></td>
                                </tr>

                <tr>
                    <td><font style="font-family: Verdana;">Academic Qualification</font></td>
                    <td colspan="3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                        <th><font style="font-family: Verdana;font-size: small">Exam</font> <br><font style="font-family: Verdana; font-size: small">passed</font></th>
                                        <th><font style="font-family: Verdana;font-size: small">Name of</font> <br><font style="font-family: Verdana;font-size: small">Board/University</font></th>
                                        <th><font style="font-family: Verdana;font-size: small">Year of</font> <br><font style="font-family: Verdana;font-size: small"> Passing</font></th>
                                        <th><font style="font-family: Verdana;font-size: small">Total</font><br><font style="font-family: Verdana;font-size: small"> Mark</font></th>
                                        <th><font style="font-family: Verdana;font-size: small">Mark</font> <br><font style="font-family: Verdana;font-size: small">Obtained</font></th>
                                        <th><font style="font-family: Verdana;font-size: small">Division</font></th>
                                        <th><font style="font-family: Verdana;font-size: small">% of</font><br><font style="font-family: Verdana;font-size: small"> Marks</font></th>
                                </tr>   
                            </thead>
                                <tbody>
                            <tr>
                                <td><?php echo "10th"; ?></td>
                                <td><input type="text" id="nob1" name="nob1" required="true"></td>
                                <td><input type="text" id="yop1" name="yop1" class="actab" required="true"></td>
                                <td><input type="text" id="tm1" name="tm1" class="actab" required="true"></td>
                                <td><input type="text" id="mo1" name="mo1" class="actab" required="true"></td>
                                <td><input type="text" id="divs1" name="divs1" class="actab" required="true"></td>
                                <td><input type="text" id="pom1" name="pom1" class="actab" required="true"></td>
                            </tr>
                            <tr>
                                <td><?php echo "12th/Diploma"; ?> </td>
                                <td><input type="text" id="nob2" name="nob2" required="true"></td>
                                <td><input type="text" id="yop2" name="yop2" class="actab" required="true"></td>
                                <td><input type="text" id="tm2" name="tm2" class="actab" required="true"></td>
                                <td><input type="text" id="mo2" name="mo2" class="actab" required="true"></td>
                                <td><input type="text" id="divs2" name="divs2" class="actab" required="true"></td>
                                <td><input type="text" id="pom2" name="pom2" class="actab" required="true"></td>
                            </tr>

                            
                                </tbody>
                        </table>
                        
                            <tr>
                                    <td colspan="4">
                                    <center> <input type="submit" onclick="validate();" id="frmnext" name="frmnext" value="Next"></center>
                                    </td>
                            </tr>
                        </table>
                <br>
                        
                                
                <br>
                        
                    </form>
                </body>
    </html>
