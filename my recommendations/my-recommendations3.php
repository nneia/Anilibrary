<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My recommendations</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="my-recommendations-design.css">
	<? require '../construction/fonts/fonts.php'; ?>
	<? require '../construction/menu/menu.php'; ?>
	
	<!-- Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		



		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Task', 'Hours per Day'],
				['Isekai',     11],
				['Action',      2],
				['Shonen',  6],
				['Watch TV', 2],
				['Sleep',    7]
				]);

			var options = {
				title: 'My Daily Activities',
				pieHole: 0.6,
				backgroundColor: '#2e2e2e',
				chartArea:{left:0,top:0,width:'75%',height:'100%'},
				colors:['#FF8100','#7F2AEE', '#2AD3EE', '#2AEE73', 'red'],
				fontSize: '14',
				pieSliceBorderColor: 'none',
				pieSliceText: 'none',
				enableInteractivity: 'false',
				legend: { position: 'none',alignment: 'start', textStyle: {color: 'white', fontSize: 14, fontName: 'clearsans_semibold'}},
				pieSliceTextStyle: {color: 'white', fontName: 'clearsans_semibold', fontSize: 12}
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		}
	</script>


</head>
<body>


	<div class="best-overflow">
		<img id="image" src="../construction/images/Anime backgrounds/code-geass.jpg" alt="" class="best-cover">
		

			
			

		<div class="next-anime-container">
			<div class="ongoings-background-shade"></div>
			<div class="next-header">Best to watch next</div>
			<div class="next-block-1">
				<div class="next-anime">
					<div class="zoom-in-next">
						<a href="http://anilibrary/anime page/anime.php"><img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="next-anime-cover"></a>
						<div class="to-list-box"></div>
						<p class="to-list-button">+Add to list</p>
					</div>
				</div>
				
				<div class="next-anime-description">
					<a href="http://anilibrary/anime page/anime.php"><p class="title">Code Geass: Lelouch of the rebellion</p></a>
					
					<p class="anime-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim<br>
					 
					ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
					reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
					culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
					</p>
					<div class="next-genres">
						<p class="next-g">Mecha</p>
						<p class="next-g">Action</p>
						<p class="next-g">Action</p>
					</div>
				</div>
				<div class="anime-stats">
						<p class="stats-title">Status:<span class="title-text highlight">Finished</span></p>
						<p class="stats-title">Episodes:<span class="title-text ">35(TV)</span></p>
						<p class="stats-title">Year:<span class="title-text">2011</span></p>
						<p class="stats-title">Studio:<span class="title-text">A-1 Pictures</span></p>		
						<p class="stats-title">Author(s):<span class="title-text">Gorō Taniguchi </span> <span class="divider">|</span><span class="title-text green r0"> Ichirō Ōkouchi</span></p>
					</div>
			</div>
			<div class="next-block-2">

			<a href="../anime page/review-full.php"><div class="next-anime-review">
				<div class="rev-block-1">
					<img src="../construction/images/Users/Condomer.jpg" alt="" class="rev-user">
					<p class="rev-nickname">Condomer [<span>32</span>]</p>
					
					<div class="rev-votes">
						<svg class="rate-icon-rev" version="1.1" id="up" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="rev-votes-number"><span>1.5</span>k</p>
						<p class="overall">Overall: <span class="overall-value good">9</span></p>
					</div>
					
				</div>
				<p class="rev-title">This anime is awesome</p>
			</div></a>

			<div class="next-anime-review">
				<div class="rev-block-1">
					<img src="../construction/images/Users/Condomer.jpg" alt="" class="rev-user">
					<p class="rev-nickname">Condomer [<span>32</span>]</p>
					
					<div class="rev-votes">
						<svg class="rate-icon-rev" version="1.1" id="up" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="rev-votes-number"><span>1.5</span>k</p>
						<p class="overall">Overall: <span class="overall-value neutral">6</span></p>
					</div>
					
				</div>
				<p class="rev-title">This anime is awesome</p>
			</div>

			<div class="next-anime-review">
				<div class="rev-block-1">
					<img src="../construction/images/Users/Condomer.jpg" alt="" class="rev-user">
					<p class="rev-nickname">Condomer [<span>32</span>]</p>
					
					<div class="rev-votes">
						<svg class="rate-icon-rev" version="1.1" id="up" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="rev-votes-number"><span>1.5</span>k</p>
						<p class="overall">Overall: <span class="overall-value good">7</span></p>
					</div>
					
				</div>
				<p class="rev-title">This anime is awesome</p>
			</div>

			</div>

		</div>
	</div>

	<div class="user-statistics">
		<div class="user">
			
			<div>
				<div class="user-activity">
					<img src="../construction/images/users/Condomer.jpg" alt="" class="user-img">
					<p class="activity-header">Your statistics</p>
				</div>
				<div class="st-watched-box">
					<svg class="watched-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path d="M121 64C60 133 7 64 7 64s53-69 114 0z" fill="none" stroke="#000" stroke-width="8" stroke-miterlimit="10"/>
						<circle cx="63.8" cy="64" r="15.3" fill="none" stroke="#000" stroke-width="14" stroke-miterlimit="10"/>
					</svg>
					<p class="st-watched-title">Watched:</p>
					<p class="st-watched-data">532 anime</p>
					<p class="st-watched-hint">(More than 83% of users)</p>

				</div>
				<div class="st-fav-box">
					<svg class="fav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M64 11l13 41h43L85 77l13 40-34-25-34 25 13-40L8 52h43z"/>
					</svg>

					<p class="st-watched-title">Favorites:</p>
					<p class="st-watched-data">67 anime</p>
				</div>
			</div>
		</div>
		<div class="diagram">
		 	<div id="donutchart" class="chart"></div>
		 	<div class="legend">
		 		<p class="legend-header">Favorite genres</p>
		 		<div class="genre-fav">
		 			<div class="genre-color color-one"></div>
		 			<p>-</p>
		 			<p class="genre-name">Isekai</p>
		 		</div>
		 		<div class="genre-fav">
		 			<div class="genre-color color-two"></div>
		 			<p>-</p>
		 			<p class="genre-name">Action</p>
		 		</div>
		 		<div class="genre-fav">
		 			<div class="genre-color color-three"></div>
		 			<p>-</p>
		 			<p class="genre-name">Shonen</p>
		 		</div>
		 		<div class="genre-fav">
		 			<div class="genre-color color-four"></div>
		 			<p>-</p>
		 			<p class="genre-name">School</p>
		 		</div>
		 		<div class="genre-fav">
		 			<div class="genre-color color-five"></div>
		 			<p>-</p>
		 			<p class="genre-name">Historical</p>
		 		</div>
		 	</div>
		</div>
	</div>
	
	<div class="fav-unwatched-container">
		<p class="unwatched-header">All time favorites(unwatched)</p>
		<p class="unwatched-button">See Full List </p>
		<div class="fav-list">
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>

			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>
			<div class="fav-list-anime">
				<div class="zoom-in-fav">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="fav-l-anime-img">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				
				<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
			</div>

		</div>
	</div>

	<div class="genres-selector" id="scroll-hook">
		<div class="view-settings">

				<svg class="full-view chosen-view" id="full-view-b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path fill="#b2b2b2" d="M2 32h34v67H2z"></path>
					<path fill="#dde1e2" d="M36 32h90v67H36z"></path>
				</svg>

				<svg class="partial-view" id="clipped-view-b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path fill="#b2b2b2" d="M47 31h34v67H47z"></path>
				</svg>


				<svg class="list-view" id="list-view-b" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
					<style>
						.st0{fill:#b2b2b2}
					</style>
					<path id="Rectangle_719" class="st0" d="M28 57h73v18H28z"></path>
					<path id="Rectangle_720" class="st0" d="M28 31h73v18H28z"></path>
					<path id="Rectangle_721" class="st0" d="M28 81h73v17H28z"></path>
				</svg>


			</div>
		<div class="browse-anime-cont">
				<svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<circle cx="49.7" cy="49.7" r="37.7" fill="none" stroke="#707070" stroke-width="12" stroke-miterlimit="10"></circle>
					<path fill="none" stroke="#707070" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M76 76l41 41"></path>
				</svg>
		
		
		
				<input type="text" class="browse-anime" placeholder="Anime title">
				<p class="search-button">Search</p>
			</div>
		<p class="genre-s-header">Browse by genre:</p>
		<p class="genre-text">Isekai</p>
		<p class="genre-text">Action</p>
		<p class="genre-text">Shonen</p>
		<p class="genre-text">Isekai</p>
		<p class="genre-text">Action</p>
		<div class="genre">
			<input class="genre-search" type="text" placeholder="Genre">
			<p class="manual-select" id="genre-manual">▼</p>
			<div class="genre-selector" id="genres-open">
				<p class="genre-text-pop">Action</p>
				<p class="genre-text-pop">Isekai</p>
				<p class="genre-text-pop">Shonen</p>
			</div>
		</div>
	</div>
	


	<div class="rec-container-full" id="full-container">


		<div class="rec-menu" id="rec-menu">
			<div class="selected-box" id="about-header-box">
							<p class="rec-header selected-color selected-background" style="margin-top:40px;" id="my-rec">My recommendations</p>
							<div class="selected-bar active" id="about-div"></div>
			</div>
			<p class="rec-hint">This website has been created not so long ago, so the accuracy of recommendations might be not 100% on point at the beginning, however as the algorithm keeps getting more and more information, it will become a powerful tool for us, weebs :) </p>
			
			
			
		</div>
		
		<div class="rec-area block" id="full-view-p">
			
			<div class="rec-animes" id="rec-animes"> 
					<p class="rec-subheader-block">Most likely to enjoy</p>
					

					<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

					</div>

					<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-ong">Ongoing</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

					</div>

					<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

					</div>
			
				</div>


			<div class="rec-animes">
				<p class="rec-subheader-block">All recommendations</p>
					
				<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

				</div>
					
				<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

				</div>

				<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

				</div>

				<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

				</div>

				<div class="rec-anime-box">

						<div class="zoom-in-rec">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>


						<div class="rec-anime-desc">
							<div class="desc-1">
								<p class="rec-anime-title">Code Geass: Lelouch of the rebellion</p>
								
								<p class="rec-anime-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga minus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo non expedita at soluta, earum voluptatem fuga min quis alias a quasi quaerat voluptatum voluptates praesentium nesciunt commodi consequuntur dolore nam. </p>
								<div class="rec-anime-genres">
									<p class="rec-anime-genre">Mecha</p>
									<p class="rec-anime-genre">Action</p>
								</div>
							</div>
							<div class="desc-2">
								<div class="rec-anime-stats">
									<div class="r-stats-title">Status:<p class="r-title-text highlight-fin">Finished</p></div>
									<div class="r-stats-title">Episodes:<p class="r-title-text ">35(TV)</p></div>
									<div class="r-stats-title">Year:<p class="r-title-text">2011</p></div>
									<div class="r-stats-title">Studio:<p class="r-title-text">A-1 Pictures</p></div>		
									<div class="r-stats-title">Author(s):<p class="r-title-text">Gorō Taniguchi  |  Ichirō Ōkouchi</p></div>
								</div>
							</div>
						</div>

				</div>
					
			
			</div>
		</div>

		<div class="rec-animes-clipped" id="clipped-view-p">
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>

					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>

					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/mha.png" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">My Hero Academia (S4)</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					<div class="rec-list-anime">
						<div class="zoom-in-rec-cl">
							<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="rec-anime-img-cl">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>

						<p class="rec-l-anime-title-cl">Vinland Saga</p>
					</div>
					
		</div>

		<div class="rec-animes-list" id="list-view-p">
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>

					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>

					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
					<div class="list-anime-box">
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="list-anime-img">
						<p class="list-anime-title">Code Geass: Lelouch of the rebellion(S1)</p>
						<p class="to-list-button-l">+Add to list</p>
					</div>
				

		</div>



	</div>







	

	<script src ="../common-comands.js"></script>
	<script>
		
		
		scrollHook("1405", "106px", "56px", "rec-menu", "scroll-hook");
		modalAddToList();
		switchViewMain("full-container");
		
		toggleOnClickBlock("genre-manual", "genres-open");
	</script>
	
</body>
</html>