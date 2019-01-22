<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Subsystems | Parikshit</title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,300,600" rel="stylesheet" type="text/css">
  

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- SCRIPT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="uploads/small.png">  

</head>
<body>

  <?php
    require_once("includes/header.php");
  ?>

  <!-- Home Page
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">

    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" href="#adcs" role="tab" data-toggle="tab">ADCS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#comms" role="tab" data-toggle="tab">COMMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#eps" role="tab" data-toggle="tab">EPS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#odhs" role="tab" data-toggle="tab">ODHS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#payload" role="tab" data-toggle="tab">PAYLOAD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#stms" role="tab" data-toggle="tab">STMS</a>
      </li>
    </ul>

    <div class="tab-content from_top">
      <div role="tabpanel" class="tab-pane fade in active tab_bg" id="adcs">

        <div class="row">
          <h1 class="text-xs-center diff_font">Attitude Determination and Control Subsystem</h1>
          <div class="col-md-4">              
              <img src="uploads/subsystempage/adcs.jpg" class="img-fluid">              
          </div>
          <div class="col-md-8">
              <p class="text-justify">Attitude Determination and Control Subsystem or ADCS is responsible for the orientation and control of the Satellite.</p>

              <ul class="list-group text-justify">
                <li class="list-group-item">
                  <ul type="square">
                    <li>It has to exercise control over the orientation of the satellite by having the required accuracy and meeting other constraints like power and computational complexity. This is necesssary to point the onboard payloads at the right direction, transmit the payload data over the ground station accurately and ensure a stable satellite.</li>
                    <li>The determination of current orientation is done with the help of sensors and algorithms and the control is done using the actuators.</li>
                    <li>The determination of attitude is done with the help of suitable hardware from which data is fed into algorithms.</li>
                    <li>The on-board orbit propagation hardware and algorithms are used to propagate the GPS data to get the real time position and velocity of the Satellite.</li>
                    <li>The Control System then accepts the inputs from the estimation algorithms regarding the error in the orientation.</li>
                    <li>The Control System commands the actuators to perform accordingly to orient the satellite in the required orientation.</li>
                    <li>The stability is maintained and if the angular rates increase the actuators act again making the satellite stable.</li>
                  </ul>
                </li>
              </ul>

          </div>
        </div>

          
      </div>


      <div role="tabpanel" class="tab-pane fade in tab_bg" id="comms">

        <div class="row">
          	<h1 class="text-xs-center diff_font">Communications and Ground Station System</h1>
          	<div class="col-md-4">              
            	<img src="uploads/subsystempage/COMMS.png" class="img-fluid">              
          	</div>
          	<div class="col-md-8">
             	<p class="text-justify">The Communications and Ground Station System, or COMMS, is responsible for the exchange of information to and fro from the satellite. There are three paths of communication that we facilitate.</p>

              	<ul class="list-group text-justify">
              		<li class="list-group-item">
              			<ul type="square">
	                		<li>The beacon downlink, which carries the name, call sign and health-monitoring data of the satellite.</li>
		                	<li>The uplink, which conveys all necessary telecommands to the satellite.</li>
	   	             		<li>The payload downlink, which sends data from the satellite, namely thermal images captured by it.</li>
	   	             	</ul>
   	             	</li>
              	</ul>
              	</li><br>
				<p class="text-justify">The subsequent communication on-board the satellite is achieved by configuring transmitter and receiver ICs via the coding of microcontrollers. This also includes the communication between the PCBs on-board the satellite. This is achieved by various protocols that help in the transfer of data across the satellite. All such communication takes place in the amateur UHF and VHF bands.</p>
				<p class="text-justify">For the purpose of establishing and maintaining communication with the satellite, we have the Parikshit Ground Station, or PAGOS, a fully functional ground station set up in MIT that establishes communication via two RF antenna, one for UHF band and the other for VHF frequency band. Besides this, the ground station is also capable of tracking and receiving the beacon of any currently operational satellite communicating in the amateur frequency bands.</p>
				<p class="text-justify">The Parikshit satellite will be identified by its call sign transmitted in every beacon packet, which can be used to track the satellite once operational. The details about each communication link is listed below:</p>
				<table class="table">
				<thead class="thead-inverse">
					<tr>
						<th>
						</th>
						<th>
							Beacon
						</th>
						<th>
							Uplink
						</th>
						<th>
							Payload
						</th>
					</tr>
				</thead>
					<tr>
						<th>
							Frequency
						</th>
						<td>
							145.89 MHz
						</td>
						<td>
							145.89 MHz
						</td>
						<td>
							437.8 MHz
						</td>
					</tr>
					<tr>
						<th>
							Data Rate
						</th>
						<td>
							12.5 bps
						</td>
						<td>
							2400 bps
						</td>
						<td>
							1200 bps
						</td>
					</tr>
					<tr>
						<th>
							Modulation Protocols
						</th>
						<td>
							OOK
						</td>
						<td>
							2-FSK
						</td>
						<td>
							2-FSK
						</td>
					</tr>
				</table>
             
          </div>
        </div>
      </div>



      <div role="tabpanel" class="tab-pane fade in tab_bg" id="eps">

        <div class="row">
          <h1 class="text-xs-center diff_font">Electrical Power Subsytem(EPS)</h1>
          <div class="col-md-4">              
              <img src="http://parikshit.org/wp-content/uploads/2013/12/eagleUp_Battery-protect-board_board_top-Copy.jpg" class="img-fluid">              
          </div>
          <div class="col-md-8">
              <p class="text-justify">The Electrical Power Subsystem is responsible for harnessing, conditioning, storing and distributing power on-board the satellite. Parts include:</p>

              <ul class="list-group text-justify">
	              <li class="list-group-item">
		              <ul type="square">
		                <li>Solar cells with 26.8% BOL efficiency</li>
		                <li>Battery management system</li>
		                <li>Bus voltage regulation</li>
		                <li>Protection against over-voltage, over-current and under-voltage faults</li>
		                <li>Protection against latch-ups</li>
		              </ul>
	              </li>
              </ul>
              <p class="text-justify">The Electrical Power Subsystem also deals with the design and soldering of the PCBs that we use for testing. All the PCBs that we use are designed and soldered in-house.</p>
          </div>
        </div>
        
          
      </div>


      <div role="tabpanel" class="tab-pane fade in tab_bg" id="odhs">

        <div class="row">
          <h1 class="text-xs-center diff_font">On Board Data Handling Subsytem(ODHS)</h1>
          <div class="col-md-4">              
              <img src="uploads/subsystempage/ODHS.jpg" class="img-fluid">              
          </div>
          <div class="col-md-8">
              <p class="text-justify">Any satellite system requires a large amount of data to be acquired and processed which is basically the work done by the On-board Data Handling Subsystem. The subsystem deals with a variety of tasks that include working with both hardware as well as software. The subsystem also works on the various algorithms that are required to effectively process and use the acquired data and also ensure that the tasks of the satellite run in an ordered manner.</p>
              Some of the important elements in the On-board Data Handling Subsystem include:

              <ul class="list-group text-justify">
                <li class="list-group-item">
                  <ul type="square">
                    <li>Dual microcontroller based hardware architecture with the two microcontrollers spread across two PCBs.</li>
                    <li>The primary microcontroller, STM32F207IG and the secondary microcontroller, MSP430F5438A.</li>
                    <li>The required Hardware for memory storage on-board the satellite.</li>
                    <li>I2C, SPI and UART is used for communication between hardware.</li>
                    <li>Micrium OS III, a Real Time Operating System (RTOS), which is implemented on both the microcontrollers.</li>
                  </ul>
                </li>
              </ul>
              <p class="text-justify">The On-board Data Handling Subsystem has the following responsibilities:</p>
              <ul class="list-group text-justify">
                <li class="list-group-item">
                  <ul type="square">
                    <li>To establish a link between the two microcontrollers and also between the microcontrollers and the other required Hardware using the appropriate protocols.</li>
                    <li>To Program the Real Time Operating System to create the tasks for the satellite and also to execute the required tasks at the appropriate time.</li>
                    <li>Monitoring the health of the satellite continuously using the Beacon.</li>
                  </ul>
                </li>
              </ul>
              <p class="text-justify">The subsystem makes sure that all parts of the satellite work together faultlessly and also ensures that the satellite is able to sustain itself throughout its lifetime without any major external inputs.</p>
          </div>
        </div>
        
          
      </div>



      <div role="tabpanel" class="tab-pane fade in tab_bg" id="payload">

        <div class="row">
          <h1 class="text-xs-center diff_font">Payload</h1>
          <div class="col-md-4">              
              <img src="uploads/subsystempage/payload.jpg" class="img-fluid">              
          </div>
          <div class="col-md-8">
              <p class="text-justify">For a satellite, payload simply means the mission of the satellite. Parikshit has two payloads:</p>

              <ul class="list-group text-justify">
                <li class="list-group-item">Thermal infrared camera, that will take thermal infrared images of the Indian subcontinent, and monitor:
                  <ul type="square"> 
                    <li>Urban Heat Island (UHI), it is a city or metropolitan area that is significantly warmer than its surrounding rural areas due to human activities.</li>
                    <li>Ocean Monitoring, variation in sea surface temperatures and cyclone monitoring.</li>
                    <li>Cloud Monitoring. The main aim here is to obtain the thermal distribution of the clouds and then differentiate them based on the distribution and help us understand about effects of cloud on climate.</li>
                  </ul>
                </li>
              </ul>
              <p class="text-justify">An Electrodynamic Tether, will be used for deorbiting the satellite after its life (expected to be 6 months). We have collaborated with an Australian company, Saber Astronautics. This is an innovative payload, as this has never been used before for deorbiting of nano-satellites. This is one of our missions we have undertaken to make sure that the atmosphere of Earth is not riddled with our space debris. For more information on the Electrodynamic Tether and the way it works, contact Parikshit.</p>
          </div>
        </div>
        
          
      </div>

      <div role="tabpanel" class="tab-pane fade in tab_bg" id="stms">

        <div class="row">
          <h1 class="text-xs-center diff_font">Structures, Thermal and Mechanics SubSystem(STMS)</h1>
          <div class="col-md-4">              
              <img src="uploads/subsystempage/stms.jpg" class="img-fluid">              
          </div>
          <div class="col-md-8">
              <p class="text-justify">The structures, thermal and mechanisms subsystem is responsible for designing, fabricating and assembling the final structure of the satellite. While doing so, the subsystem ensures that the structure can withstand all launch loads and vibrations, as well as exposure to space radiation during the life of the mission.
              The primary objectives of the subsystem are:</p>

              <ul class="list-group text-justify">
              	<li class="list-group-item">
	              	<ul type="square">
		                <li>Design the satellite keeping in mind the 2U nanosatellite constraints and ensuring  minimal wastage of available space</li>
		                <li>To provide a structure that can endure the high accelerations, loads and vibrations that manifest during launch.</li>
		                <li>To integrate all components of other subsystems, warranting smooth interfacing between them</li>
	              	</ul>
	              </li>
              </ul>
              <br>
              <p class="text-justify">The thermals division of the STM subsystem is in charge of designing the thermal layout of the satellite. This constitutes:</p>
              <ul class="list-group text-justify">
              	<li class="list-group-item">
	              	<ul type="square">
		                <li>Protecting the sensitive internal components of the satellite from harmful space radiation and environment</li>
		                <li>Placement and usage of thermal control elements – active, passive or both – to provide an optimum thermal circuit in order to limit internal temperatures and fluxes within the operating and survival ranges of each sensitive component</li>
             		</ul>
             	</li>
          </div>
        </div>
    </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <?php
    require_once("includes/footer.php");
  ?>

</body>
</html>