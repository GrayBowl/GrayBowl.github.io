<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="animate.css"/>
		<title>Nicholas Alder || Website</title>
	</head>
	<body>
		<h1 id="header">Nicholas Alder</h1>
		<ul class="menu">
			<a href='#about'> <li class='menuA'>About</li> </a>
			<a href='#projects'> <li class='menuP'>Projects</li> </a>
			<a href='#resume'> <li class='menuR'>Resume</li> </a>
			<a href='#contact'> <li class='menuC'>Contact</li> </a>
			<a href='#social'> <li class='menuS'>Social</li> </a>
		</ul>

		<!--About Section-->
		<div class="linked"> <a name='about'></a> </div> <!--sendLinkHere-->
		<div class="linkedUnder"></div> <!--space under link div-->
		<div class="aboutS">
			<h1 class="aboutHeader">About</h1>
			<p id="aboutP">
				<img src="C:\Users\Nicholas\Documents\website_design\second_website\profile.png" id="aboutPhoto"/>
				<div class="first">S</div>ince a young age I have always had a passion for creation and designing. From playing with Lego and K-nex to simple electrical circuits, I have always enjoyed creating something from nothing. My passion for Electrical, Mechanical, and Software Engineering along side my interest in the field of business have lead me to where I am today.
				<br>
				<div class='first'>I</div> am currently in my third year at McMaster University persuing a degree in Mechatronics and Engineering Management. McMaster University has one of Canada's top ranking engineering faculties and with their available management program, it was my top choice for continuing my academic career.
				I am also currently enrolled in the Engineering Co-op program through the University. Throughout my academic career I have had experience working in a group environment, developing my teamwork and leadership skills. I enjoy both the engineering aspects as well as business technical aspects of the engineering process. Upon graduation I seek to secure a position that is both challenging and fullfilling in the field of Engineering.
			</p>
		</div>

		<!--Projects Section-->
		<div class='linked'> <a name='projects'></a> </div> <!--sendLinkHere-->
		<div class="linkedUnder"></div> <!--space under link div-->
		<div class="projectS">
			<h1 class="projectsHeader">Projects</h1>
			<div style='text-align: center'>
			<!--Electrical-->
			<div class='projectCategory'>
				<h2 class='projField'>Electrical</h2>
				<h3 class='projTitle'>Vending Machine</h3>
				<p class='projText'>
					Created a digital logic vending machine using basic electrical components. The process was filmed and documented into an
					<a href='http://www.youtube.com' target='_blank'>instructional video.</a>
				</p>
				<h3 class='projTitle'>TV Remote Decoder</h3>
				<p class='projText'>
					Created and implemented an IR Sony remote sensor circuit which receives a TV remote IR signal and outputs the corresponding number pressed in binary using LEDS.
					<br>
					<br>
				</p>
			</div>

			<!--Software-->
			<div class='projectCategory'>
				<h2 class='projField'>Software</h2>
				<h3 class='projTitle'>Online Shopping Database</h3>
				<p class='projText'>
				Worked in a group of three (3) to create an online shopping database able to keep track of inventory and individual user account activity. <br>Language:<strong>Java</strong>.
				</p>
				<h3 class='projTitle'>Recursive Tree Calculator</h3>
				<p class='projText'>
					Worked in a group of three (3) to create a calculator able to compute mathematical expressions input by the user. <br>Language: <strong>C++</strong>
				</p>

			</div>

			<!--Mechanical-->
			<div class='projectCategory'>
				<h2 class='projField'>Mechanical</h2>
				<h3 class='projTitle'>CD Drive Gear Train</h3>
				<p class='projText'>
					Given a specified rotational input speed and a specified linear output speed I worked in a group of three (3) to design and 3D print the gear train of a CD drive. I was also responsible for creating an engineering report on the CD gear train.
				</p>
				<h3 class='projTitle'>SumoBot</h3>
				<p class='projText'>
					Created, coded, and battled an autonomous robot against intramural teams.
					<br>
					<br>
				</p>
			</div>

			<!--Business-->
			<div class='projectCategory'>
				<h2 class='projField'>Business</h2>
				<h3 class='projTitle'>Marketing Reports</h3>
				<p class='projText'>
					Created marketing reports on both Molson Coors and the Canadian Breweries Industry.
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</p>
				<h3 class='projTitle'><br></h3>
				<p class='projText'>
					<br>
				</p>
			</div>
			</div>

		</div>

		<!--Resume Section-->
		<div class='linked'> <a name='resume'></a> </div> <!--sendLinkHere-->
		<div class="linkedUnder"></div> <!--space under link div-->
		<div class='resumeS'>
			<h1 class='resumeHeader'>Resume</h1>
			<div id='game'>
				<object width='1600' height='700'>
				<param name='movie' value='C:\Users\Nicholas\Documents\Flash Games\Raw\second_game_final.swf'>
				<embed src='C:\Users\Nicholas\Documents\Flash Games\Raw\second_game_final.swf' width='1600' height='700'>
				</embed>
				</object>
			</div>
			<div style='text-align:center;margin-top:10px'>
				<a id='resumeText' href='C:\Users\Nicholas\Documents\website_design\second_website\resume.pdf' target='_blank'>click here to view a PDF version of my resume</a>
			</div>
		</div>

		<!--Contact Section-->
		<div class='linked'> <a name='contact'></a> </div> <!--sendLinkHere-->
		<div class="linkedUnder"></div> <!--space under link div-->
		<div class='contactS'>
			<h1 class='contactHeader'>Contact</h1>
			<h2 style='text-align:center'><br><br>email: aldernl@mcmaster.ca</h2>
			<form action="" method="post">
			<p>
				<label for="name">Name:</label><br>
				<input type="text" name="name" id="name">
			</p>
			<p>
				<label for='email'>Email:</label><br>
				<input type="text" name="email" id="email">
			</p>
			<p>
				<label for="message">Message:</label><br>
				<textarea name="message" id='message'></textarea>
			</p>
			<p>
				<input type="submit" value="Submit">
			</p>
		</form>
		</div>

		<!--Social Section-->
		<div class='linked'> <a name='social'></a> </div> <!--sendLinkHere-->
		<div class="linkedUnder"></div> <!--space under link div-->
		<div class='socialS'>
			<h1 class='socialHeader'>Social</h1>
			<a href='https://www.facebook.com/nicholas.alder.37?ref=bookmarks' target='_blank'>
				<img src="C:\Users\Nicholas\Documents\website_design\second_website\facebook.png" class='socialPhoto'/>
			</a>
			<a href='https://twitter.com/nicholas_alder' target='_blank'>
				<img src="https://www.hrc.co.nz/index.php/download_file/view_inline/895/" class='socialPhoto'/>
			</a>
			<a href='https://ca.linkedin.com/in/nicholas-alder-898778105' target='_blank'>
				<img src="http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,f_auto,h_540,q_80,w_720/v1/155186/12e018532d913494d841f79da5dd70bf_qeasyb.png" class='socialPhoto'/>
			</a>
			<a href='https://www.youtube.com/channel/UC9crAtq7hrLEI-TP_qzo_3A' target='_blank'>
				<img src="http://seeklogo.com/images/Y/youtube-square-logo-3F9D037665-seeklogo.com.gif" class='socialPhoto'/>
			</a>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="app.js"></script>


	</body>
</html>