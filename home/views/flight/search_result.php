<?php //echo '<pre>';print_r($flight_result_final);

$total = count($flight_result_final);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Norway</title>
        <meta name="description" content="Full view calendar component for twitter bootstrap with year, month, week, day views.">
        <meta name="keywords" content="jQuery,Bootstrap,Calendar,HTML,CSS,JavaScript,responsive,month,week,year,day">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?php print WEB_DIR ?>css/1200.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/980.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/979.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/979-768.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/767.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/480.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/bootstrap.css" rel="stylesheet"> 
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">--> 
        <link href="<?php print WEB_DIR ?>css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="<?php print WEB_DIR ?>css/custom.css" rel="stylesheet"> 
        <link href="<?php print WEB_DIR ?>css/date/kendo.common.min.css" rel="stylesheet" />
        <link href="<?php print WEB_DIR ?>css/date/kendo.default.min.css" rel="stylesheet" />
        <link href="<?php print WEB_DIR ?>css/responsive-calendar.css" rel="stylesheet">
        <link href="<?php print WEB_DIR ?>css/less/datepicker.less" rel="stylesheet">
        <link href="<?php print WEB_DIR ?>css/datepicker.css" rel="stylesheet">
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>

    <body>

        <div class="header">
            <div class="container">
                <!--<div class="header-search">-->
                <div class="row-fluid top-bottom15">
                    <div class="span4">
                        <img src="<?php print WEB_DIR ?>images/img/logo.png">
                    </div>
                    <div class="span8">
                        <div class="navbar top25">
                            <!--<div class="navbar-inner">-->
                            <div class="container">
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--<a class="brand" href="#">Project name</a>-->
                                <div class="nav-collapse collapse">
                                    <ul class="nav">
                                        <li class="active"><a href="#">FLYBILLETTER</a></li>
                                        <li><a href="#about">HOTELL</a></li>
                                        <li><a href="#contact">STOREBYFERIE</a></li>
                                        <li><a href="#contact">SOL OG BAD</a></li>
                                        <li><a href="#contact">TOPPLISTER</a></li>
                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                            <!--</div>-->
                        </div>
                    </div>
                </div>

                <!--               <div class="navbar navbar-inverse">
                      <div class="navbar-inner">
                        <div class="container">
                          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="brand head-box" href="#">Startsiden</a>
                          <div class="nav-collapse collapse">
                            <ul class="nav">
                              <li class="active"><a href="#">Home</a></li>
                              <li><a href="#about">About</a></li>
                              <li><a href="#contact">Contact</a></li>
                            </ul>
                          </div>/.nav-collapse 
                        </div>
                      </div>
                    </div>
                                     <div class="row-fluid">
                                         <div class="span12">
                                             <h3>reise</h3>
                                         </div>
                                     </div>-->
            </div>
        </div>

        <div class="container top10">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well">
                        <div class="row-fluid">
                            <div class="span6">
                                <strong>SQK SAS-FLY</strong>
                            </div>
                            <div class="span6">
                                <button class="btn" type="button">Nullstill s0k</button>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <label style="margin: 0px;"><strong>Reis Fra</strong></label>
                                <input type="text" class="search-input" placeholder="Oslo Narge -(OSL)">
                                <label style="margin: 0px;"><strong>Reis Til</strong></label>
                                <input type="text" class="search-input" placeholder="Bangkok Thailand (BKK)" style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="row-fluid top10">
                            <div class="span6">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><strong>Enkel</strong>
                                </label>                                
                            </div>
                            <div class="span6">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked><strong>Retur</strong>
                                </label>
                            </div>                                    
                        </div>

                        <div class="row-fluid">
                            <div class="span12">
                                <label style="margin: 0px;"><strong>Check In</strong></label>
                                <input type="text" class="search-input cal-img" id="dpd1" placeholder="13/03/2014">

                                <label style="margin: 0px;"><strong>Check Out</strong></label>
                                <input type="text" class="search-input cal-img" id="dpd2" placeholder="13/03/2014">
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <label style="margin: 0px;"><strong>Reisende</strong></label>
                                <select class="sele-width">
                                    <option>1 Voksen</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <select class="sele-width">
                                    <option>0 Barn 2 -11 ar</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <select class="sele-width">
                                    <option>0 Spedbarn (0 23 mnd)</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row-fluid top20 align-center">
                            <div class="span12">
                                <button class="btn btn-primary" type="button">SQK REISE!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span9">
                    <div class="row-fluid" style="padding: 0px 20px;">
                        <div class="span8">

                            <h4>FLYAVGANGER MED SAS /STARALLIANCE</h4>
                            <div class="row-fluid">
                                <div class="span12">
                                    <h5 style="margin: 0px;"><?php echo $_SESSION['fromcityval'] ?>| <?php echo $_SESSION['sd']?> Total Flight <?php echo $total;?></h5><br>
                                  <h5 style="margin: 0px;"><?php echo $_SESSION['tocityval'] ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="span4 top30">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="<?php print WEB_DIR ?>images/img/sas.png">
                                </a>
                                <div class="media-body top10">
                                    <h4 class="media-heading">Scandinavian Airlines</h4>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="well top10">
                    <?php if($flight_result_final!=''){
						$count_val = count($flight_result_final);
		for($i=0;$i<=$count_val;$i++)
		{
			$used_oneway = array();
			
			$used_oneway1 = array();
			$count_val_oneway= count($flight_result_final[$i]);
			$count_val1 = count($flight_result_final[$i]);
			for($j=0;$j<1;$j++)
			{
				if($flight_result_final[$i][$j]['Total_FareAmount']!=0){ 
				if($flight_result_final[$i][$j]['flag']=='false')
				{
					$dep_name=$this->Flight_Model->get_City_name($flight_result_final[$i]['dlocation'][$j]);
					$arr_name=$this->Flight_Model->get_City_name($flight_result_final[$i]['alocation'][$j]);
					
					$dep_name_final=$dep_name->city.", ".$dep_name->country." (".$dep_name->city_code.")";
					$arr_name_final=$arr_name->city.", ".$arr_name->country." (".$arr_name->city_code.")";
					
					$date=$flight_result_final[$i]['ddate1'][$j];
					$date1=explode(" ",$date);
					$date_2=explode("-",$date1[0]);
					$date_final_on=$date_2[0]."-".$date_2[1]."-20".$date_2[2];
					$de_date = date('F j, Y',(strtotime("+0 day", (strtotime($date_final_on)))));
						?>
                        <div class="row-fluid">

                            <div class="span12">
                                <div class="flight-home">
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="row-fluid">
                                                        <div class="span5">
                                                            <label><?php echo $flight_result_final[$i][$j]['name'].", ".$flight_result_final[$i][$j]['cicode'];  ?></label>
                                                            <input type="text" class="span12 place-color" placeholder="OSL 20:50" style="background-color: #276baa;border: 1px solid #276baa;">
                                                        </div>
                                                        <div class="span2 top300">
                                                            <img src="http://cheapfaresindia.makemytrip.com/international/img/international/airline-logos/sm<?php echo $flight_result_final[$i][$j]['cicode']; ?>.gif"; />
                                                        </div>
                                                        <div class="span5">
                                                            <!--<label>&nbsp;</label>-->
                                                            <input type="text" class="span12 top25-rep place-color" placeholder="BKK 00:25" style="background-color: #276baa;border: 1px solid #276baa;">
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span5">
                                                            <label>Hjemreise</label>
                                                            <input type="text" class="span12 place-color" placeholder="BKK 00:25" style="background-color: #958c29;border: 1px solid #958c29;">
                                                        </div>
                                                        <div class="span2 top300">
                                                           <img src="http://cheapfaresindia.makemytrip.com/international/img/international/airline-logos/sm<?php echo $flight_result_final[$i][$j]['cicode']; ?>.gif"; />
                                                        </div>
                                                        <div class="span5">
                                                            <!--<label>&nbsp;</label>-->
                                                            <input type="text" class="span12 top25-rep place-color" placeholder="OSL 20:50" style="background-color: #958c29;border: 1px solid #958c29;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="row-fluid top30">
                                                        <div class="span6">
                                                            <span style="font-size: 17px;">Departure <?php echo $de_date; ?></span>
                                                        </div>
                                                        <?php 
																				$dep_time_array_single=array();
						for($jk=0;$jk<$count_val1;$jk++)
						{ 
							
							if(in_array($flight_result_final[$i][$jk]['timeOfDeparture'],$dep_time_array_single))
							{
								$dep_dup_flag="Yes";
							}
							else
							{
								$dep_dup_flag="No";
							}
							$dep_time_array_single[]=$flight_result_final[$i][$jk]['timeOfDeparture'];

							if($dep_dup_flag=="No")
							{
							$cabin_text='';
							$cabin=$flight_result_final[$i][$jk]['cabin'];
							if($cabin=="MC")
								$cabin_text="Major Cabin";
							else if($cabin=="RC")
								$cabin_text="Recommended";
							else if($cabin=="C")
								$cabin_text="Business";
							else if($cabin=="F")
								$cabin_text="First";
							else if($cabin=="M")
								$cabin_text="Economy Standard";
							else if($cabin=="W")
								$cabin_text="Economy Premium";
														?>
                                                        <div class="span6">
                                                        <?php  echo ((substr($flight_result_final[$i][$jk]['timeOfDeparture'],0, -2)).":".(substr($flight_result_final[$i][$jk]['timeOfDeparture'],-2)));?>
                                                            0 stopp (CPH)
                                                        </div>
                                                        <?php  } } ?>
                                                    </div>
                                                    <div class="row-fluid top32">
                                                        <div class="span6">
                                                          <span><?php echo $dep_name_final; ?></span>
								<?php $seg_uniq_rand111 = sha1(rand().time().crypt(time())); ?>
                                                        </div>
                                                        <div class="span6">
                                                            1 stopp (CPH)
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid align-right">
                                                        <div class="span12">
                                                            <h5><a href="#" style="text-decoration: underline; color: #fff;">+9 ledige plasser</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="span4 align-right">
                                            <div class="row-fluid top40">
                                                <div class="span12">
                                                    <span><b style="font-size: 50px;"><?php ceil($flight_result_final[$i][$j]['Total_FareAmount']); //echo $flight_result[$i][$j]['ccode']." ".$flight_result[$i][$j]['Total_FareAmount'];?></b></span>
                                                </div>
                                            </div>
                                            <div class="row-fluid top40">
                                                <div class="span12">
                                                    <img src="<?php print WEB_DIR ?>images/img/price-btn.png">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}
						else{
							$id=((count($flight_result_final[$i][$j]['name']))-1);
				    $date_a = new DateTime( $flight_result_final[$i]['ddate1'][0]);
				    $date_b = new DateTime( $flight_result_final[$i]['adate1'][$j][$id]);
				    $interval = date_diff($date_a,$date_b);
				    $difference=$interval->format('%h H %i M');
					
					$dep_name=$this->Flight_Model->get_City_name($flight_result_final[$i][$j]['dlocation'][0]);
					$arr_name=$this->Flight_Model->get_City_name($flight_result_final[$i][$j]['alocation'][$id]);
					
					$dep_name_final=$dep_name->city.", ".$dep_name->country." (".$dep_name->city_code.")";
					$arr_name_final=$arr_name->city.", ".$arr_name->country." (".$arr_name->city_code.")";
					
					$date=$flight_result_final[$i]['ddate1'][0];
					$date1=explode(" ",$date);
					$date_2=explode("-",$date1[0]);
					$date_final_on=$date_2[0]."-".$date_2[1]."-20".$date_2[2];
					$de_date = date('F j, Y',(strtotime("+0 day", (strtotime($date_final_on)))));
					
							?>
                        <div class="row-fluid">

                            <div class="span12">
                                <div class="flight-home">
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="row-fluid">
                                                        <div class="span5">
                                                            <label><?php echo $flight_result_final[$i]['name'][$j].", ".$flight_result_final[$i]['cicode'][$j];  ?></label>
                                                            <input type="text" class="span12 place-color" placeholder="OSL 20:50" style="background-color: #276baa;border: 1px solid #276baa;">
                                                        </div>
                                                        <div class="span2 top300">
                                                            <img src="http://cheapfaresindia.makemytrip.com/international/img/international/airline-logos/sm<?php echo $flight_result_final[$i]['cicode'][$j]; ?>.gif"; />
                                                        </div>
                                                        <div class="span5">
                                                            <!--<label>&nbsp;</label>-->
                                                            <input type="text" class="span12 top25-rep place-color" placeholder="<?php echo $flight_result_final[$i]['name'][$j]?>" style="background-color: #276baa;border: 1px solid #276baa;">
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span5">
                                                            <label><?php echo $flight_result_final[$i]['name'][1].", ".$flight_result_final[$i]['cicode'][1];  ?></label>
                                                            <input type="text" class="span12 place-color" placeholder="<?php echo $flight_result_final[$i]['name'][$j]?>" style="background-color: #958c29;border: 1px solid #958c29;">
                                                        </div>
                                                        <div class="span2 top300">
                                                           <img src="http://cheapfaresindia.makemytrip.com/international/img/international/airline-logos/sm<?php echo $flight_result_final[$i]['cicode'][$j]; ?>.gif"; />
                                                        </div>
                                                        <div class="span5">
                                                            <!--<label>&nbsp;</label>-->
                                                            <input type="text" class="span12 top25-rep place-color" placeholder="OSL 20:50" style="background-color: #958c29;border: 1px solid #958c29;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="row-fluid top30">
                                                        <div class="span6">
                                                            <span style="font-size: 17px;">Departure <?php echo $de_date; ?></span>
                                                        </div>
                                                        <?php 
																				$dep_time_array_single=array();
						for($jk=0;$jk<$count_val1;$jk++)
						{ 
							
							if(in_array($flight_result_final[$i]['timeOfDeparture'][$jk],$dep_time_array_single))
							{
								$dep_dup_flag="Yes";
							}
							else
							{
								$dep_dup_flag="No";
							}
							$dep_time_array_single[]=$flight_result_final[$i]['timeOfDeparture'][$jk];

							if($dep_dup_flag=="No")
							{
							$cabin_text='';
							$cabin=$flight_result_final[$i]['cabin'][$jk];
							if($cabin=="MC")
								$cabin_text="Major Cabin";
							else if($cabin=="RC")
								$cabin_text="Recommended";
							else if($cabin=="C")
								$cabin_text="Business";
							else if($cabin=="F")
								$cabin_text="First";
							else if($cabin=="M")
								$cabin_text="Economy Standard";
							else if($cabin=="W")
								$cabin_text="Economy Premium";
														?>
                                                        <div class="span6">
                                                        <?php  echo ((substr($flight_result_final[$i]['timeOfDeparture'][$j],0, -2)).":".(substr($flight_result_final[$i]['timeOfDeparture'][$jk],-2)));?>
                                                            0 stopp (CPH)
                                                        </div>
                                                        <?php  } } ?>
                                                    </div>
                                                    <div class="row-fluid top32">
                                                        <div class="span6">
                                                          <span><?php echo $dep_name_final; ?></span>
								<?php $seg_uniq_rand111 = sha1(rand().time().crypt(time())); ?>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row-fluid align-right">
                                                        <div class="span12">
                                                            <h5><a href="#" style="text-decoration: underline; color: #fff;">+9 ledige plasser</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="span4 align-right">
                                            <div class="row-fluid top40">
                                                <div class="span12">
                                                    <span><?php echo $flight_result_final[$i]['FareAmount'] //echo $flight_result[$i][$j]['ccode']." ".$flight_result[$i][$j]['Total_FareAmount'];?></span>
                                                </div>
                                            </div>
                                            <div class="row-fluid top40">
                                                <div class="span12">
                                                    <img src="<?php print WEB_DIR ?>images/img/price-btn.png">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}}}?>
                    </div>

                    <div class="row-fluid top20">
                        <div class="span12">
                            <div class="flight-box-head">
                                <strong>Lavpriskalender</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="flight-calander">
                                <table class="table cal-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                            <th>Retur <br/>Mandag <br/>17-mar-2014</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="null-bg">
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td>5 960,-  <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,-<div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                        <tr class="null-bg1">
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-cal">Retur <br/>Mandag <br/>17-mar-2014</td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                            <td>5 960,- <div class="green-tag"></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--                       <div class="page-header">
                                
                                                <div class="pull-right form-inline">
                                                        <div class="btn-group">
                                                                <button class="btn btn-primary" data-calendar-nav="prev">&lt;&lt; Prev</button>
                                                                <button class="btn" data-calendar-nav="today">Today</button>
                                                                <button class="btn btn-primary" data-calendar-nav="next">Next &gt;&gt;</button>
                                                        </div>
                                                        <div class="btn-group">
                                                                <button class="btn btn-warning" data-calendar-view="year">Year</button>
                                                                <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                                                                <button class="btn btn-warning" data-calendar-view="week">Week</button>
                                                                <button class="btn btn-warning" data-calendar-view="day">Day</button>
                                                        </div>
                                                </div>
                                
                                                <h3>March 2013</h3>
                                        </div>
                                                        <div class="row-fluid">
                                                            <div class="span12">
                                                               <div id="calendar"></div>
                                                            </div>
                                                        </div>-->
                            </div>
                            <div class="flight-calander top20">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <p>Reisedetaljer</p>
                                        <strong>OSLO - BANGKOK TORSDAG 13. MARS 2014</strong> 
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">

                                        <div class="row-fluid top10">
                                            <div class="span12">
                                                <div class="resize-fly">
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <div class="resize-head">

                                                                <h4>OSLO - KØBENHAVN</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <table class="table resize-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Avganger :</th>
                                                                        <th>Reisetid :</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="success1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                    <tr class="error1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                    <tr class="success1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                    <tr class="error1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="span6">

                                        <div class="row-fluid top10">
                                            <div class="span12">
                                                <div class="resize-fly">
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <div class="resize-head">
                                                                <h4>KØBENHAVN - BANGKOK</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <table class="table resize-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Avganger :</th>
                                                                        <th>Reisetid :</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="success1">
                                                                        <td>22:15 - 15:20</td>
                                                                        <td>10:20</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="resize-content">
                                                                (Terminal 3) (SK973)<br/>
                                                                Flyselskap: Scandinavian Airlines<br/>
                                                                Flytype: Airbus Industrie A340-300
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid top20">
                                    <div class="span12">
                                        <p>Reisedetaljer</p>
                                        <strong>BANGKOK - OSLO TORSDAG 20. MARS 2014</strong> 
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="row-fluid top10">
                                            <div class="span12">
                                                <div class="resize-fly">
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <div class="resize-head">
                                                                <h4>KØBENHAVN - BANGKOK</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <table class="table resize-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Avganger :</th>
                                                                        <th>Reisetid :</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="success1">
                                                                        <td>22:15 - 15:20</td>
                                                                        <td>10:20</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="resize-content">
                                                                (Terminal 3) (SK973)<br/>
                                                                Flyselskap: Scandinavian Airlines<br/>
                                                                Flytype: Airbus Industrie A340-300
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="span6">
                                        <div class="row-fluid top10">
                                            <div class="span12">
                                                <div class="resize-fly">
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <div class="resize-head">

                                                                <h4>OSLO - KØBENHAVN</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <table class="table resize-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Avganger :</th>
                                                                        <th>Reisetid :</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="success1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                    <tr class="error1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                    <tr class="success1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                    <tr class="error1">
                                                                        <td>18:00 - 19:15</td>
                                                                        <td>01:15</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row-fluid top20 align-center">
                                    <div class="span12">
                                        <button class="btn btn-primary" type="button">TILBAKE TIL KALENDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>           

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>

        <!--<script src="js/bootstrap.min.js"></script>-->
        <script src="js/responsive-calendar.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".responsive-calendar").responsiveCalendar({
                    time: '2013-05',
                    events: {
                        "2013-04-30": {"number": 5, "url": "#"},
                        "2013-04-26": {"number": 1, "url": "#"},
                        "2013-05-03": {"number": 1},
                        "2013-06-12": {}}
                });
            });
        </script>

<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/underscore-min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/calendar.js"></script>
        <script type="text/javascript" src="js/app.js"></script>

        <script type="text/javascript">
            var disqus_shortname = 'bootstrapcalendar'; // required: replace example with your forum shortname
            (function() {
                var dsq = document.createElement('script');
                dsq.type = 'text/javascript';
                dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>

        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script>
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            var checkin = $('#dpd1').datepicker({
                onRender: function(date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#dpd2')[0].focus();
            }).data('datepicker');
            var checkout = $('#dpd2').datepicker({
                onRender: function(date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datepicker');
        </script>
    </body>
</html>
