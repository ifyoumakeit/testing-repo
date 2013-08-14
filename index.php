<?php 
   $_GET["album"]=9;
   include("header.php"); 
?>

<div id="slideshow">
	<div class="row">
		<div class="large-12 columns">
			<ul data-orbit data-options="bullets:false;timer_speed: 3000; pause_on_hover: false;  resume_on_mouseout: false; animation_speed: 500,">
				<?=$large?>  
			</ul>
		</div>	
	</div>
</div>

<div id="thumbnails">
	<div class="row">
	
		<div class="large-12 columns">
			<p>At <strong class="lume">lume creative</strong> - a <b>New York</b> based boutique <b>advertising agency</b>, we identify and cultivate the potential of a brand, transforming it from a collection of ideas into powerful messages that resonate with your desired audience. Our creative team composed of <b>art directors</b>, <b>writers</b>, <b>producers</b>, <b>pr specialists</b> and <b>brand strategists</b> offer diverse experience in turning specialty <b>retail brands</b> into household names. Specializing in <b>print and digital advertising</b>, <b>direct marketing</b> and <b>video</b> we expertly manage all aspects of your marketing campaign from concept to completion.</p>
		</div>	
	</div>
</div>

<?php include("footer.php"); ?>