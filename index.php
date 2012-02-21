<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Dekiru :: That's what I do</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="./css/style.css"/>
	<link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="./js/jquery.masonry.min.js"></script>
	<script src="./js/jquery.nestedAccordion.js"></script>
<!-- 	<script src="http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js"></script> -->

</head>

<body>
  <header>
  </header>

  <div id="container">     
		<!-- !BOF The content proper -->
		<div class="feature accordion">
		    <h1 class="feature_name">User profile</h1>		
		    <div>
		    <h1 class="premise_name">Premise</h1>		
		    <div class="premise">

					<ul>		
				    <li><span class="inOrder">In order to</span> have compete profile</li>
				    <li><span class="asA">As a</span> user</li>		
				    <li><span class="iWantTo">I want to </span>register and add my information</li>
			    </ul>
		    </div>		    
		
        <h2 class="scenario_name">A user successfully signs in with Facebook</h2>
		    <div class="scenario">	
		        <ul>
		            <li><span class="keyword">Given</span> I am on the homepage</li>
		
		            <li><span class="keyword">When</span> I log in with my Facebook account</li>
		
		            <li><span class="keyword">Then</span> I should see the flash message "Welcome"</li>
		        </ul>
		    </div>
		
        <h2 class="scenario_name">A user fails to sign in with Facebook</h2>
		    <div class="scenario">
	
		        <ul>
		            <li><span class="keyword">Given</span> I am on the homepage</li>
		
		            <li><span class="keyword">When</span> I log in with an invalid Facebook account</li>
		
		            <li><span class="keyword">Then</span> I should see the flash message "Failed"</li>
		        </ul>
		    </div>

        <h2 class="scenario_name">A user add a religion</h2>		
		    <div class="scenario">
		        <ul>
		            <li><span class="keyword">Given</span> I am on the homepage</li>
		
		            <li><span class="keyword">And</span> I log in with my Facebook account</li>
		
		            <li><span class="keyword">And</span> I go to edit my profile</li>
		
		            <li><span class="keyword">When</span> I select "Alexism" for my religion</li>
		
		            <li><span class="keyword">And</span> I update my profile</li>
		
		            <li><span class="keyword">Then</span> I should see "Alexism"</li>
		
		            <li><span class="keyword">And</span> I should see the flash message "Profile updated"</li>
		        </ul>
		    </div>
		</div>
		</div>
		
		<?php for ($i=0; $i<10; $i++){ ?>
			<div class="feature accordion" >
		    <h1 class="feature_name">Browse Restaurants</h1>
				<div>
		    <h1 class="premise_name">Premise</h1>		
		    <div class="premise">
					<ul>		
				    <li><span class="inOrder">In order to</span> find a good restaurant</li>
				    <li><span class="asA">As a</span> user</li>		
				    <li><span class="iWantTo">I want to </span>be able to view restaurants</li>
			    </ul>
		    </div>	
		
        <h2 class="scenario_name">List Restaurants</h2>
		    <div class="scenario">
		
		        <ul>
		            <li><span class="keyword">Given</span> I have the restaurants Mr. Italian, Burbur King</li>
		
		            <li><span class="keyword">When</span> I go to the list of restaurants</li>
		
		            <li><span class="keyword">Then</span> I should see "Mr. Italian"</li>
		
		            <li><span class="keyword">And</span> I should see "Burbur King"</li>
		        </ul>
		    </div>
		
        <h2 class="scenario_name">Order by Name</h2>
		    <div class="scenario">		
		        <ul>
		            <li><span class="keyword">Given</span> I have the restaurants Yakiniku, SushiA</li>
		
		            <li><span class="keyword">When</span> I order the list by name (asc)</li>
		
		            <li><span class="keyword">Then</span> I should see "SushiA" before "Yakiniku"</li>
		        </ul>
		    </div>
		
        <h2 class="scenario_name">Order by Date Added</h2>
		    <div class="scenario">

		        <ul>
		            <li><span class="keyword">Given</span> I have restaurants added today, yesterday</li>
		
		            <li><span class="keyword">When</span> I order the list by created_at (asc)</li>
		
		            <li><span class="keyword">Then</span> I should see "yesterday" before "today"</li>
		        </ul>
		    </div>

        <h2 class="scenario_name">Order by Number of Reviews</h2>		
		    <div class="scenario">
		
		        <ul>
		            <li><span class="keyword">Given</span> I have a restaurant named SushiA with 1 reviews</li>
		
		            <li><span class="keyword">And</span> I have a restaurant named RamenB with 2 reviews</li>
		
		            <li><span class="keyword">When</span> I order the list by reviews_count (desc)</li>
		
		            <li><span class="keyword">Then</span> I should see "RamenB" before "SushiA"</li>
		        </ul>
		    </div>
		  </div>
		</div>    
					
		<?php	}; ?>	
		</div>								
		<!-- !EOF The content proper -->
		  
  
  
  
  </div>

  <footer>
  </footer>

	<script type="text/javascript">
		$(function(){
		  $('#container').masonry({
		    // options
		    itemSelector : '.feature',
		    //columnWidth : 420,
		    isAnimated: true,
		    containerStyle: {position: 'relative'}		    
		  });
		  $('#container').accordion({
		  	showSpeed: 200,
		  	hideSpeed: 400,
		    standardExpansible: true,		  	
		  	event: 'click',
		  	obj: 'div',
		  	head:'h1, h2',
		  	el: '.h',
		  	wrapper: 'div',
		  	next:'div.outer'
		  });
			$(document).bind('accordion_done', function(){
				$('#container').masonry('reload');
			});		

		});
  </script>
</body>

</html>