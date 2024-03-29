<!DOCTYPE html> 
<html>

<head>
	<link rel="icon" href="ptpLogoFavicon.png">
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Multi-page template</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<style type='text/css'>
		@media (min-width:320px)  { /* smartphones, iPhone, portrait 480x320 phones */ 
			.titleFont{
				font-size:20pt;
			}
		}
		@media (min-width:481px)  { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ 
			.titleFont{
				font-size:22pt;
			}			
		}
		@media (min-width:641px)  { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ 
			.titleFont{
				font-size:36pt;
			}			
		}
		@media (min-width:961px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */ 
			.titleFont{
				font-size:36pt;
			}		
		}
		@media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ 
			.titleFont{
				font-size:36pt;
			}			
		}
		@media (min-width:1281px) { /* hi-res laptops and desktops */ 
			.titleFont{
				font-size:36pt;
			}			
		}
		#right-panel a{
			font-family:'Satisfy', cursive;
			text-decoration:none;
			font-size:20pt;
		}
	</style>
	<script type='text/javascript'>
		$( document ).on( "pagecreate", "#demo-page", function() {
				$( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
						// We check if there is no open panel on the page because otherwise
						// a swipe to close the left panel would also open the right panel (and v.v.).
						// We do this by checking the data that the framework stores on the page element (panel: open).
						if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
								if ( e.type === "swipeleft" ) {
										$( "#right-panel" ).panel( "open" );
								} else if ( e.type === "swiperight" ) {
										$( "#left-panel" ).panel( "open" );
								}
						}
				});
		});	
	</script>
</head> 


<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="home" data-url="demo-page">
  <div data-role="header" data-theme="b">
		<div style='display:table;width:100%;background:white;'>
			<div style='display:table-row;'>
				<div style='display:table-cell;'>
					<img src='ptpLogoSmall.png' style='width:100px;height:100px;' alt='' />
				</div>
				<div style='display:table-cell;text-align:center;vertical-align:middle;'>
					<span class='titleFont' style="font-family:'Satisfy', cursive;color:black"><a href="#right-panel" style='text-decoration:none; color:black;'  role="button">Packwood Trail Project</a></span>
				</div>			
			</div>
		</div>
	</div><!-- /header -->

	<div role="main" class='ui-content'>	

		<h2>Where is Packwood?</h2>

		<p>* Don't forget to take our INTEREST SURVEY.  WE NEED YOUR SUPPORT!</p>

		<p>Packwood is located 90 miles west of Yakima and 75 miles east of Centralia on Highway 12 just south of Mt. Rainier. Packwood is one of the more remote small cities in Western Washington.  Until the mid-2000's, Packwood was driven by a forest products economy with a lumber mill and a Forest Service work center.  These two employers, plus a strong seasonally recreational community, provided the economic base for the town.  Since the mill closed and the Forest Service closed the work center, the town of Packwood has struggled to find a new identity and promote and rely on its deeply rich recreational opportunities.</p>

		<h2>Purpose</h2>

		<p>Residents and lovers of Packwood have identified the need for a trail, or a system of trails that (are):
		<ul><li>Multi-use (hiker, biker, runner, hunter friendly), non-motorized
		<li>Accessible year round (below the winter snowline)
		<li>Easy to hike/ride (more/less flat)
		<li>Pavement Accessible (can drive on a paved road to trail head)
		<li>Provide an economic benefit to the Packwood community
		<li>Bring together federal, state, and local agencies with interested organizations and Packwood community
		<li>Interpret rich cultural history of Packwood (pre-Columbian to present)
		Use and/or link in to historic and currently maintained trails</ul></p>
		<h2>Need</h2>

		<p>The needs for such a trail or network of trails can be categorized in several ways:
		<ul><li>Filling a void in recreational opportunities
		<li>Economic growth
		<li>Building a stronger community
		<li>Health and fitness / quality of life
		<li>Relationships between government agencies, the community, and public organizations</ul></p>

		<p>There are more than 30 trails that are within 10 air miles of Packwood.  However, these trails are neither accessible during the winter nor for much of the shoulder seasons.  From November until April, there is a noticeable absence of outdoor experiences, trail running, hiking, and bike riding.  This is neither by design nor by necessity.  Although downtown Packwood (elevation 1060 feet) does often get snow during the winter months, it rarely stays around for more than a week.  The winter snowline usually starts at about 2000 feet.</p>


		<p>Furthermore, trails that do exist near Packwood are too steep to ride up or for many, even to walk up.  Most of the trails leave from the valley floor and climb several thousand feet within one or two miles.</p>

		<p>In the table below a 'red x' means that the local trail does NOT meet our goals.  A 'green check' means that it does.  You can see that there are no trails in our local area that meet our community's year around needs for recreational trails.</p>	
	</div><!-- main -->
	
	<div data-role="panel" id="right-panel" data-display="push" data-position="right" data-theme="b">
			<p><a href='#home'>Home</a></p>
			<p><a href='#about'>About</a></p>
			<p><a href='#news'>News</a></p>
			<p><a href='#trailConcepts'>Trail Concepts</a></p>
			<p><a href='#partnerships'>Partnerships</a></p>
			<p><a href='#support'>Support</a></p>
	</div><!-- /panel -->	
	
</div><!-- /page one -->


<!-- Start of second page: #two -->
<div data-role="page" id="about" data-theme="a">

  <div data-role="header" data-theme="b">
		<div style='display:table;width:100%;background:white;'>
			<div style='display:table-row;'>
				<div style='display:table-cell;'>
					<img src='ptpLogoSmall.png' style='width:100px;height:100px;' alt='' />
				</div>
				<div style='display:table-cell;text-align:center;vertical-align:middle;'>
					<span class='titleFont' style="font-family:'Satisfy', cursive;color:black"><a href="#right-panel-about" style='text-decoration:none; color:black;'  role="button">Packwood Trail Project</a></span>
				</div>			
			</div>
		</div>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>About</h2>
		<p>Governance</p>
		<p>WA State Non-Profit Corporation</p>
		<p>IRS 501c3 Tax Exempt</p>
		<p>Include number for donorsb  tax records</p>
		<p>Board of Directors</p>
		<p>Committees</p>
		<p><ul><li>Leadership<li>Finance<li>Public Media<li>Trails</ul></p>
	</div><!-- /content -->
	<div data-role="panel" id="right-panel-about" data-display="push" data-position="right" data-theme="b">
			<p><a href='#home'>Home</a></p>
			<p><a href='#about'>About</a></p>
			<p><a href='#news'>News</a></p>
			<p><a href='#trailConcepts'>Trail Concepts</a></p>
			<p><a href='#partnerships'>Partnerships</a></p>
			<p><a href='#support'>Support</a></p>
	</div><!-- /panel -->	
</div><!-- /page two -->


<!-- Start of third page: #popup -->
<div data-role="page" id="news">

  <div data-role="header" data-theme="b">
		<div style='display:table;width:100%;background:white;'>
			<div style='display:table-row;'>
				<div style='display:table-cell;'>
					<img src='ptpLogoSmall.png' style='width:100px;height:100px;' alt='' />
				</div>
				<div style='display:table-cell;text-align:center;vertical-align:middle;'>
					<span class='titleFont' style="font-family:'Satisfy', cursive;color:black"><a href="#right-panel-news" style='text-decoration:none; color:black;'  role="button">Packwood Trail Project</a></span>
				</div>				
			</div>
		</div>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>News</h2>
		<p>Milestone</p>
		<p>Media</p>
		<p><ul><li>Facebook<li>Twitter</ul></p>
	
	</div><!-- /content -->
	
	<div data-role="panel" id="right-panel-news" data-display="push" data-position="right" data-theme="b">
			<p><a href='#home'>Home</a></p>
			<p><a href='#about'>About</a></p>
			<p><a href='#news'>News</a></p>
			<p><a href='#trailConcepts'>Trail Concepts</a></p>
			<p><a href='#partnerships'>Partnerships</a></p>
			<p><a href='#support'>Support</a></p>
	</div><!-- /panel -->	
	
</div><!-- /page popup -->

<!-- Start of fourth page: #popup -->
<div data-role="page" id="trailConcepts">

  <div data-role="header" data-theme="b">
		<div style='display:table;width:100%;background:white;'>
			<div style='display:table-row;'>
				<div style='display:table-cell;'>
					<img src='ptpLogoSmall.png' style='width:100px;height:100px;' alt='' />
				</div>
				<div style='display:table-cell;text-align:center;vertical-align:middle;'>
					<span class='titleFont' style="font-family:'Satisfy', cursive;color:black"><a href="#right-panel-trails" style='text-decoration:none; color:black;'  role="button">Packwood Trail Project</a></span>
				</div>				
			</div>
		</div>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>Trail Concepts</h2>
		<p>Desired Experiences</p>
		<p>Day Use</p>
		<p>Backcountry</p>
		<p>Minimal Development, Primitive</p>
		<p>Sounds</p>
		<p>Vistas</p>
		<p>Physical Fitness</p>
		<p>Races / Competitions</p>
		<p>Defining b Multi-Useb </p>
		<p>Non-Motorized</p>
		<p>Hiker, Runner, Biker</p>
		<p>Use Isolation</p>
		<p>Trail Characteristics per User-Type</p>
		<p>Explanation: Speed, Distance, Tread Surface</p>
		<p>Hikers</p>
		<p>Wildlife Observation</p>
		<p>Scenic Experiences</p>
		<p>Natural Sounds</p>
		<p>Trail Runners</p>
		<p>Mountain Bikers</p>
		<p>Cross Country</p>
		<p>All-Mountain</p>
		<p>Downhill</p>
		<p>Scope and Scale</p>
		<p>(4) Local Development Quadrants</p>
		<p>High Valley</p>
		<p>Skyo Mountain</p>
		<p>Snyder Mountain</p>
		<p>Coal Creek</p>
		<p>References</p>
		<p>Demographic Data / Research</p>
		<p>User Conflict Research</p>
		<p>Resource Impact Research</p>
	
	</div><!-- /content -->
	<div data-role="panel" id="right-panel-trails" data-display="push" data-position="right" data-theme="b">
			<p><a href='#home'>Home</a></p>
			<p><a href='#about'>About</a></p>
			<p><a href='#news'>News</a></p>
			<p><a href='#trailConcepts'>Trail Concepts</a></p>
			<p><a href='#partnerships'>Partnerships</a></p>
			<p><a href='#support'>Support</a></p>
	</div><!-- /panel -->	
	
</div><!-- /page popup -->

</body>
</html>