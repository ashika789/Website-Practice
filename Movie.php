<!DOCTYPE html>
<html>
<head>
<title>Movies</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<div id="container1">
	<div id="container">
	<div id="header">
	<table id="tallign">
		<tr>
			<td class="image"><img src="logo.png" alt="Logo"></td>
			<td>Silverado Cinema</td>
		</tr>
	</table>
	</div>
	<div id="navigation">
	<a href="Home Page.php" class="myButton">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="Contact.php" class="myButton">Contact Us</a>
	<a href="Movie.php" class="myButton">All Movies</a>
	<a href="Booking.php" class="myButton">Online Bookings</a>	
	
	</div>
	<div id="content">
		<table class="imagetable">
			<tr class="fontcolor">
				<td colspan="4">Action</td>
			</tr>
			<tr>
				<td>
					<a 
    						onclick="document.getElementById('overlay1').style.display='block';document.getElementById('fade').style.display='block'"
    						href="javascript:void(0)"><img src ="./img11.jpg" class="imgBox" alt="Error">
					</a>
														
				</td>
				
			</tr>
			<tr class="fontcolor">
				<td colspan="4">Art/Foreign</td>
			</tr>
			<tr>
				<td>
					<a 
    						onclick="document.getElementById('overlay2').style.display='block';document.getElementById('fade').style.display='block'"
    						href="javascript:void(0)"><img src ="./img21.jpg" class="imgBox" alt="Error">
					</a>

				
			<tr class="fontcolor">
				<td colspan="4">Childrens</td>
			</tr>
			<tr>
				<td>
					<a 
    						onclick="document.getElementById('overlay3').style.display='block';document.getElementById('fade').style.display='block'"
    						href="javascript:void(0)"><img src ="./img31.jpg" class="imgBox" alt="Error">
					</a>

				
			<tr class="fontcolor">
				<td colspan="4">Romantic Comedy</td>
			</tr>
			<tr>
				<td>
					<a 
    						onclick="document.getElementById('overlay4').style.display='block';document.getElementById('fade').style.display='block'"
    						href="javascript:void(0)"><img src ="./img41.jpg" class="imgBox" alt="Error">
					</a>

			
		</table>
	</div>
		
 	<div id="overlay1" class="overlaystyle">
		<a 
    				onclick="document.getElementById('overlay1').style.display='none';document.getElementById('fade').style.display='none'"
    				href="javascript:void(0)" class="close">X
				 
		</a>
	<div>
		<div class="fontcolorb">
			Teenage Mutant Ninja Turtles
		</div>
		<table>
			<tr>
				<th>Rating : M</th>
				<th>Synopsis</th>
			</tr>
			<tr>
				<th><img src ="./img11.jpg" class ="imgBox" alt="Error"></th>
				<th>	
					The city needs heroes. Darkness has settled over New York City as Shredder and his evil Foot Clan have an iron grip on everything from the police to the politicians. The future is grim until four unlikely outcast brothers rise from the sewers and discover their destiny as Teenage Mutant Ninja Turtles. The Turtles must work with fearless reporter April and her wise-cracking cameraman Vern Fenwick to save the city and unravel Shredder's diabolical plan
				</th>
			</tr>	
		</table>
		<div>
			<a href="Booking.php" class="myButton">Book Now!</a>
			<ul>
				<li><span class="day">Wednesday</span>
				<span class="time"><a href="booking.php?film=AC&day=Wednesday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Thursday</span>
				<span class="time"><a href="booking.php?film=AC&day=Thursday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Friday</span>
				<span class="time"><a href="booking.php?film=AC&day=Friday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Saturday</span>
				<span class="time"><a href="booking.php?film=AC&day=Saturday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Sunday</span>
				<span class="time"><a href="booking.php?film=AC&day=Sunday&time=21.00" class="btn">9pm</a></span></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="overlay2" class="overlaystyle">
			<a 
    				onclick="document.getElementById('overlay2').style.display='none';document.getElementById('fade').style.display='none'"
    				href="javascript:void(0)" class="close">X
			</a>
	<div>
		<div class="fontcolorb">
			The Cabinet of Dr Caligari
		</div>
		<table>
			<tr>
				<th>Rating : MA</th>
				<th>Synopsis</th>
			</tr>
			<tr>
				<th><img src ="./img21.jpg" class ="imgBox" alt="Error"></th>
				<th>	
					Two men on a park bench discuss the story of Cesare, a sleep-walking circus performer under the control of the murderous Dr. Caligari. But all, of course, is not quite as it seems.
				</th>
			</tr>	
		</table>
		<div>
			<a href="Booking.php" class="myButton">Book Now!</a>
			<ul>
				<li><span class="day">Monday</span>
				<span class="time"><a href="booking.php?film=AF&day=Monday&time=18.00" class="btn">6pm</a></span></li>
				<li><span class="day">Tuesday</span>
				<span class="time"><a href="booking.php?film=AF&day=Tuesday&time=18.00" class="btn">6pm</a></span></li>
				<li><span class="day">Saturday</span>
				<span class="time"><a href="booking.php?film=AF&day=Saturday&time=15.00" class="btn">5pm</a></span></li>
				<li><span class="day">Sunday</span>
				<span class="time"><a href="booking.php?film=AF&day=Sunday&time=15.00" class="btn">5pm</a></span></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="overlay3" class="overlaystyle">
			<a 
    				onclick="document.getElementById('overlay3').style.display='none';document.getElementById('fade').style.display='none'"
    				href="javascript:void(0)" class="close">X
			</a>
	<div>
		<div class="fontcolorb">
			Planes : Fire & Rescue
		</div>
		<table>
			<tr>
				<th>Rating : G</th>
				<th>Synopsis</th>
			</tr>
			<tr>
				<th><img src ="./img31.jpg" class ="imgBox" alt="Error"></th>
				<th>	
					Planes: Fire & Rescue is a new comedy-adventure about second chances, featuring a dynamic crew of elite firefighting aircraft devoted to protecting historic Piston Peak National Park from raging wildfire. When world famous air racer Dusty (voice of Dane Cook) learns that his engine is damaged and he may never race again, he must shift gears and is launched into the world of aerial firefighting. Dusty joins forces with veteran fire and rescue helicopter Blade Ranger and his courageous team, including spirited super scooper Dipper (voice of Julie Bowen), heavy-lift helicopter Windlifter, ex-military transport Cabbie and a lively bunch of brave all-terrain vehicles known as The Smokejumpers. Together, the fearless team battles a massive wildfire and Dusty learns what it takes to become a true hero.
				</th>
			</tr>	
		</table>
		<div>
			<a href="Booking.php" class="myButton">Book Now!</a>
			l>
				<li><span class="day">Monday</span>
				<span class="time"><a href="booking.php?film=CH&day=Monday&time=13.00" class="btn">1pm</a></span></li>
				<li><span class="day">Tuesday</span>
				<span class="time"><a href="booking.php?film=CH&day=Tuesday&time=13.00" class="btn">1pm</a></span></li>
				<li><span class="day">Wednesday</span>
				<span class="time"><a href="booking.php?film=CH&day=Wednesday&time=18.00" class="btn">6pm</a></span></li>
				<li><span class="day">Thursday</span>
				<span class="time"><a href="booking.php?film=CH&day=Thursday&time=18.00" class="btn">6pm</a></span></li> 
				<li><span class="day">Friday</span>
				<span class="time"><a href="booking.php?film=CH&day=Friday&time=18.00" class="btn">6pm</a></span></li>
				<li><span class="day">Saturday</span>
				<span class="time"><a href="booking.php?film=CH&day=Saturday&time=12.00" class="btn">12pm</a></span></li>
				<li><span class="day">Sunday</span>
				<span class="time"><a href="booking.php?film=CH&day=Sunday&time=12.00" class="btn">12pm</a></span></li>
			</ul>
		</div>
	</div>
	</div>
	<div id="overlay4" class="overlaystyle">
			<a 
    				onclick="document.getElementById('overlay4').style.display='none';document.getElementById('fade').style.display='none'"
    				href="javascript:void(0)" class="close">X
			</a>
	<div>
		<div class="fontcolorb">
			Begin Again
		</div>
		<table>
			<tr>
				<th>Rating : M</th>
				<th>Synopsis</th>
			</tr>
			<tr>
				<th><img src ="./img41.jpg" class ="imgBox" alt="Error"></th>
				<th>	
					This is a soul-stirring comedy about what happens when lost souls meet and make beautiful music together. Gretta and her long-time boyfriend Dave are college sweethearts and songwriting partners who decamp for New York when he lands a deal with a major label. But the trappings of his new-found fame soon tempt Dave to stray, and a reeling, lovelorn Gretta is left on her own. Her world takes a turn for the better when Dan, a disgraced record-label exec, stumbles upon her performing on an East Village stage and is immediately captivated by her raw talent. From this chance encounter emerges an enchanting portrait of a mutually transformative collaboration, set to the soundtrack of a summer in New York City.
				</th>
			</tr>	
		</table>
		<div>
			<a href="Booking.php" class="myButton">Book Now!</a>
			<ul>
				<li><span class="day">Monday</span>
				<span class="time"><a href="booking.php?film=RC&day=Monday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Tuesday</span>
				<span class="time"><a href="booking.php?film=RC&day=Tuesday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Wednesday</span>
				<span class="time"><a href="booking.php?film=RC&day=Wednesday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Thursday</span>
				<span class="time"><a href="booking.php?film=RC&day=Thursday&time=21.00" class="btn">9pm</a></span></li> 
				<li><span class="day">Friday</span>
				<span class="time"><a href="booking.php?film=RC&day=Friday&time=21.00" class="btn">9pm</a></span></li>
				<li><span class="day">Saturday</span>
				<span class="time"><a href="booking.php?film=RC&day=Saturday&time=18.00" class="btn">6pm</a></span></li>
				<li><span class="day">Sunday</span>
				<span class="time"><a href="booking.php?film=RC&day=Sunday&time=18.00" class="btn">6pm</a></span></li>
			</ul>
		</div>
	</div>
	</div>

	<div id="fade">

	</div>				
	<div id="footer">

	</div>

	</div>
</div>
</body>
</html>


