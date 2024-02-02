<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>profile</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="profile-design.css">
	<? require '../construction/fonts/fonts.php'; ?>
	<? require '../construction/menu/menu.php'; ?>

	<!-- Pie Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Effort', 'Amount given'],
          ['genre',     67],
          ['genre',     10],
          ['genre',     8],
          ['genre',     5],
          ['genre',     3],
          ['genre',     3],
          ]);

        var options = {
        	pieHole: 0.65,
        	pieSliceTextStyle: {
        		color: 'white',
        	},
        	legend: 'none',
        	backgroundColor: 'white',
        	chartArea:{left:0,top:0,width:200,height:200},
        	colors:['#FF8100','#7F2AEE', '#2AD3EE' ,'#2AD3EE', '#2AEE73', 'red'],
        	enableInteractivity: 'false',
        	fontName: 'clearsans_semibold',
        	pieSliceText: 'none',

        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
	
	<div class="background-container">
		<div class="background-wrapper">
			<img src="../construction/images/users backgrounds/condomer.png" alt="" class="background-img">
		</div>
		<div class="background-shade"></div>
	</div>
	

	<div class="overview-container">
		<img src="../construction/images/users cover/Condomer.jpg" alt="" class="user-avatar">
		<div class="overview-user">
			<div class="nickname-box">
				<h1 class="nickname">Condomer</h1>
				<img src="../construction/icons/user-ranks/bronze.svg" alt="" class="user-rank">
				<p class="lvl-wrapper"><span id="lvl">7</span></p>
			</div>
			<div class="online-status">
				<div class="status-icon online"></div>
				<p class="status block">Online</p>
				<p class="status ">Last seen <span class="value">21</span>min ago</p>
			</div>
			<div class="links">
				<p class="link">Instagram/sadas</p>
				<p class="divider">|</p>
				<p class="link">VK</p>
				<p class="divider">|</p>
				<p class="link">YouTube</p>
			</div>
			<div class="dm">
				<p class="message-button">Message</p>
			</div>
			<div class="f-container">
				<div class="follow-box " id="follow-btn">
					<svg class="check-mark" id="foll-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path d="M17 67l29 29 65.5-65.5"/>
					</svg>
					<p class="f-button block" id="unfoll">Follow</p>
					<p class="f-button " id="foll">You're following ▼</p>
					<p class="follow-val">2.3k</p>
				</div>
				<div class="following-box">
					
					<svg class="follow-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 64" xml:space="preserve">
						<g id="Group_88" transform="translate(-709.327 -442.766)">
							<path id="Line_132" class="" d="M725.1 475l85.7-.2"/>
							<path id="Line_133" class="" d="M788.6 448.9l25.9 25.9"/>
							<path id="Line_134" class="" d="M788.6 500.8l25.9-26"/>
						</g>
					</svg>
					<p class="f-button block">Following</p>
					<p class="follow-val">22</p>
				</div>
			</div>
		</div>
		<div class="overview-achievements">
			<div class="achievents-block-1">
				<svg class="gate-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
					<style>
						.st0,.st1,.st2,.st3{stroke:#000;stroke-miterlimit:10}.st0{stroke-linecap:round;stroke-linejoin:round;fill:#ddd;stroke-width:5}.st1,.st2,.st3{fill:#b2b2b2;stroke-width:1}.st2,.st3{stroke-linecap:round;stroke-linejoin:round}.st3{stroke-width:1}
					</style>
					<path class="st0" d="M63.4 124.3V10s42.7.2 47.1 31.4v82.9H63.4z"/>
					<path class="st1" d="M74.3 73.4c-4.2 0-7.5 3.3-7.5 7.4 0 4.1 3.4 7.4 7.5 7.4 4.2 0 7.5-3.3 7.5-7.4.1-4.1-3.3-7.4-7.5-7.4zm.1 11.6C72 85 70 83.1 70 80.7s1.9-4.3 4.3-4.3 4.3 1.9 4.3 4.3c.1 2.4-1.8 4.3-4.2 4.3z"/>
					<path class="st2" d="M110.4 45.5h-9L99 47.9l-2.5-2.4-2.9-1.5 2.8-1.4 2.6-2.5 2.5 2.5h8.9zM110.4 104.1h-9l-2.4 2.4-2.5-2.4-2.9-1.5 2.8-1.3 2.6-2.5 2.5 2.5h8.9z"/>
					<path class="st1" d="M75 76.1h-1.3c-.6 0-1-.5-1-1v-5.2c0-.6.5-1 1-1H75c.6 0 1 .5 1 1V75c0 .6-.5 1.1-1 1.1z"/>
					<path class="st0" d="M63.4 124.3V10s-42.7.2-47.1 31.4v82.9h47.1z"/>
					<path class="st1" d="M52.4 73.4c4.2 0 7.5 3.3 7.5 7.4 0 4.1-3.4 7.4-7.5 7.4-4.2 0-7.5-3.3-7.5-7.4 0-4.1 3.3-7.4 7.5-7.4zM52.3 85c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3-4.3 2-4.3 4.3c0 2.4 1.9 4.3 4.3 4.3z"/>
					<path class="st2" d="M16.3 45.5h9l2.5 2.4 2.4-2.4 2.9-1.5-2.8-1.4-2.5-2.5-2.6 2.5h-8.9zM16.3 104.1h9l2.5 2.4 2.4-2.4 2.9-1.5-2.8-1.3-2.5-2.5-2.6 2.5h-8.9z"/>
					<path class="st1" d="M51.7 76.1H53c.6 0 1-.5 1-1v-5.2c0-.6-.5-1-1-1h-1.3c-.6 0-1 .5-1 1V75c0 .6.5 1.1 1 1.1z"/>
					<path class="st3" d="M6 43.1c9.3 1.4 8.9-1 8.9-1l2.5-6.6s-3.7-3.7-7.6-4.5S6 43.1 6 43.1z"/>
					<path class="st3" d="M9.9 31.8s.1-7.2 6.7-13.2c0 0 4.7 3.7 4.5 8.1s-3.7 9.5-3.7 9.5l-7.5-4.4z"/>
					<path class="st3" d="M20.7 23.3s2.8 1.9 5.9-1.2 6.1-4.3 6.1-4.3-.1-7.4-2.1-9.1c-1.9-1.7-13.2 7.6-13.2 7.6s.3 5.1 3.3 7z"/>
					<path class="st3" d="M32.7 16.2s-.1 1.1 3.1 0l3.2-1.1 7.1-2.5s1.3-6.6 0-9.7-14.8 4.7-14.8 4.7-.4.7-.2 1.9 1.6 6.7 1.6 6.7z"/>
					<path class="st3" d="M46.6 10.3s.8 1.8 7.9.9 7.8-.9 7.8-.9.9-7.4.4-8.1-15.4 0-15.4 0-.6-.1-.9 1.5.2 6.6.2 6.6z"/>
					<path class="st3" d="M62.7 3.4s-.1-2.1 2.3-1.9 10-.5 12.5 1c0 0-.6 7.5-3.1 8.4s-11.7-.7-11.7-.7V3.4z"/>
					<path class="st3" d="M77.5 2.8s11.2.6 14.3 4.3c0 0-2.8 5.4-3.3 7-.5 1.6-4.5 0-4.5 0l-7.8-2.7s-.9-.8-.2-2.6 1.5-6 1.5-6z"/>
					<path class="st3" d="M91.3 8s3-1.3 7.7 3l5 4.4s1 2.1-3.6 3.8l-2 1.5c-1.2.9-8.9-4.6-8.9-4.6s-.7-.2-1-2S91.3 8 91.3 8z"/>
					<path class="st3" d="M99.1 20.2s1.1 4.3 6.4 9.7c0 0 2.6-1 4.9-1.9s3.4-.9 3.4-.9 1.5 0 .5-2.8-7.8-8.2-7.8-8.2-2.6-.1-2.7.9c-.1 1-4.7 3.2-4.7 3.2z"/>
					<path class="st3" d="M106.5 29.9s.1 2.4 1.1 3.8c1.1 1.4 2.7 8.7 2.7 8.7s5 1.1 8 .9c3-.2-3.3-15.9-3.3-15.9s.8 0-1.3-.3c-1.9-.3-7.2 2.8-7.2 2.8z"/>
					<path class="st3" d="M111 42.5s-1.3 2.9-.8 4c0 0 0 7.9.4 8.8s.2 1.9 1.8 2c1.6.1 6.9 0 6.9 0s1.5 0 1-4.2-1.8-9.9-1.8-9.9-2.4-1-7.5-.7z"/>
					<path class="st3" d="M111.6 57.3s-1.1 2-.8 6.5c.3 4.5.8 5.3.8 5.3s4.1.9 6.9.7c0 0 1.2-.4 1.4-2.8s.7-8 0-8.6c-.7-.6-1.4-1-1.4-1s-4.4-.4-6.9-.1z"/>
					<path class="st3" d="M112.8 69.3s-1.3 1.2-1.1 3.1c.2 2-.2 6.5 0 6.8s.3 1.5 1.2 2 5.4.6 6.3.5c.8-.2 1.1-1.1 1.1-3.5s.3-5.5 0-7.3c-.3-1.8-4.2-1.2-4.2-1.2l-3.3-.4zM112.8 81.7s-1.2 2.3-1.2 4 .6 8.7.6 8.7.8 2.1 2.9 1.4c0 0 2.8-.1 4.4-.6 1.6-.5 1-1.3 1-1.3s.3-8.7 0-9.8c-.3-1.1-1.5-1.9-2-1.9-.7.1-5.7-.5-5.7-.5z"/>
					<path class="st3" d="M119.3 95.2s2.4 2.1 2.1 4.4c0 0-.1 8.8-.4 8.9-.3.1-1.3 1.7-3.2 1.5s-4.2-1.5-4.7-3-.7-6.5-.6-8.1c0 0 .6-3.5 6.8-3.7z"/>
					<path class="st3" d="M114 109.3s-1.9 1.8-1.4 9.2c.5 7.4.7 8.1.7 8.1h8.1s3.5-2.4 1.1-7.5c0 0-.6-7.6-1.9-9-1.3-1.5-6.6-.8-6.6-.8zM5.5 56.9s-1.1 2-.8 6.5.8 5.3.8 5.3 4.1.9 6.9.7c0 0 1.2-.4 1.4-2.8.2-2.4.7-8 0-8.6-.7-.6-1.4-1-1.4-1s-4.4-.4-6.9-.1z"/>
					<path class="st3" d="M6.7 69s-1.3 1.2-1.1 3.1-.2 6.5 0 6.8c.2.2.3 1.5 1.2 2s5.4.6 6.3.5c.8-.2 1.1-1.1 1.1-3.5s.3-5.5 0-7.3c-.3-1.8-4.2-1.2-4.2-1.2L6.7 69zM6.7 81.4s-1.2 2.3-1.2 4c0 1.6.6 8.7.6 8.7S7 96.2 9 95.4c0 0 2.8-.1 4.4-.6s1-1.3 1-1.3.3-8.7 0-9.8-1.5-1.9-2-1.9-5.7-.4-5.7-.4z"/>
					<path class="st3" d="M13.2 94.8s2.4 2.1 2.1 4.4c0 0-.1 8.8-.4 8.9s-1.3 1.7-3.2 1.5-4.2-1.5-4.7-3c-.4-1.6-.7-6.5-.6-8.1 0 0 .6-3.5 6.8-3.7z"/>
					<path class="st3" d="M7.9 108.9s-1.9 1.8-1.4 9.2c.5 7.4.7 8.1.7 8.1h8.1s3.5-2.4 1.1-7.5c0 0-.6-7.6-1.9-9s-6.6-.8-6.6-.8zM13.8 54.6c.3-1.3.4-7.3.4-8.7 0-1.4-1-2-1-2H7s-1.1 0-1.5 1.8-.8 5.9-.8 5.9.1 5.7 1.7 5.1l6.1.2c0 .1.5.9 1.3-2.3z"/>
				</svg>

				<p class="achievements-header" style="margin-top: 4px">Entered this world on <span class="reg-date">16.04.2020</span></p>
			</div>
			<div class="achievents-block-2">
				<p class="achievements-header"> Trophies:</p>
				<div class="achievevmtns-area">
					<div class="rows">
						<div class="cell" id="r-1-c-1"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-2"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-3"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-4"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-5"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-6"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-7"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-8"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell" id="r-1-c-9"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>

					</div>
					<div class="rows">
						<div class="cell"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
						<div class="cell"><img src="../construction/icons/user-ranks/bronze.svg" alt="" class="trophy-icon"></div>
					</div>
					<div class="rows">
						<div class="cell"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-container">
		<div class="content-block-1">
			<div class="about-container">
				<p class="text-area">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam numquam deserunt praesentium necessitatibus. Soluta nisi temporibus, minima impedit modi quia, aliquid, eum eveniet tenetur cum pariatur! Nesciunt optio delectus doloremque! <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam numquam deserunt praesentium necessitatibus. Soluta nisi temporibus, minima impedit modi quia, aliquid, eum eveniet tenetur cum pariatur! Nesciunt optio delectus doloremque!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam numquam deserunt praesentium necessitatibus. Soluta nisi temporibus, minima impedit modi quia, aliquid, eum eveniet tenetur cum pariatur! Nesciunt optio delectus doloremque!
				</p>
				<div class="illustration-wrapper">
					<img src="../construction/images/Community Images/overlord1.png" alt="" class="text-area-illustration">
				</div>
			</div>
			<div class="stats-container">
				<p class="stats-header">Anime Statistics</p>
				<div class="stats-box">
					<div class="stats-left">
						<div class="stats-row">
							<p class="watched-header">Watched anime</p>
							<p class="watched-value">1189</p>
						</div>
						<div class="stats-row" style="margin-bottom: 5px">
							<img src="../construction/icons/favorite.svg" alt="" class="list-icon">
							<p class="list-header">Favorites</p>
							<p class="list-value">331</p>
						</div>
						<div class="stats-row" style="margin-bottom: 5px">
							<svg class="list-icon"  version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
								<style>
									.st0{fill:none;stroke:#000;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}
								</style>
								<path class="st0" d="M64 26v38l23 23"/>
								<circle class="st0" cx="64" cy="64" r="58"/>
							</svg>

							<p class="list-header">Planning to watch</p>
							<p class="list-value">24</p>
						</div>
						<p class="rarity"><span class="rarity-nickname">Condomer</span> is in <span class="rar-val">1</span>% category</p>
					</div>
					<div class="stats-rigth">
						<div id="donut_single" style="width: 170px; height: 120px;"></div>
						<div>
							<p class="legend-header">Favorite genres:</p>
							<div class="legend">
								
								<div class="genre-fav">
									<div class="genre-color color-one"></div>
									<p class="genre-name">Isekai <span class="genre-val">67%</span></p>
								</div>
								<div class="genre-fav">
									<div class="genre-color color-two"></div>
									<p class="genre-name">Action <span class="genre-val">20%</span></p>
								</div>
								<div class="genre-fav">
									<div class="genre-color color-three"></div>
									<p class="genre-name">Shonen <span class="genre-val">8%</span></p>
								</div>
								<div class="genre-fav">
									<div class="genre-color color-four"></div>
									<p class="genre-name">School <span class="genre-val">3%</span></p>
								</div>
								<div class="genre-fav">
									<div class="genre-color color-five"></div>
									<p class="genre-name">Historical <span class="genre-val">3%</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-block-2">
			<div class="history-block">
				<p class="history-header">Latest Anime Activity</p>
				<div class="h-anime-box">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="h-anime-cover">
					<p class="h-anime-title">Boku no Hero Academia (S4)</p>
					<p class="h-add-to-list">+add to list</p>
				</div>
				<div class="h-anime-box">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="h-anime-cover">
					<p class="h-anime-title">Boku no Hero Academia (S4)</p>
					<p class="h-add-to-list">+add to list</p>
				</div>
				<div class="h-anime-box">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="h-anime-cover">
					<p class="h-anime-title">Boku no Hero Academia (S4)</p>
					<p class="h-add-to-list">+add to list</p>
				</div>
				<div class="h-anime-box">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="h-anime-cover">
					<p class="h-anime-title">Boku no Hero Academia (S4)</p>
					<p class="h-add-to-list">+add to list</p>
				</div>
				<div class="h-anime-box">
					<img src="../construction/images/Anime covers/mha.png" alt="" class="h-anime-cover">
					<p class="h-anime-title">Boku no Hero Academia (S4)</p>
					<p class="h-add-to-list">+add to list</p>
				</div>
			</div>
			<div class="reviews-block">
				<p class="reviews-header">Reviews <span class="rev-val">(210)</span></p>
				<p class="more-reviews-button">View all reviews</p>
				<div class="review-box">
					<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="r-anime-cover">
					<div class="r-content">
						<p class="r-title">Shonen without shortcomings</p>
						<p class="r-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam delectus aperiam nulla corrupti reiciendis, dolorem, fuga sint error autem voluptatum molestiae, amet non optio, eum nesciunt maxime nostrum alias! Itaque.</p>
					</div>
					<div class="r-rating">
						<svg class="rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"/>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"/>
						</svg>

						<p class="rating-val">221</p>
					</div>
					<p class="r-grade good">10</p>
				</div>
				<div class="review-box">
					<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="r-anime-cover">
					<div class="r-content">
						<p class="r-title">Shonen without shortcomings</p>
						<p class="r-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam delectus aperiam nulla corrupti reiciendis, dolorem, fuga sint error autem voluptatum molestiae, amet non optio, eum nesciunt maxime nostrum alias! Itaque.</p>
					</div>
					<div class="r-rating">
						<svg class="rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"/>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"/>
						</svg>

						<p class="rating-val">221</p>
					</div>
					<p class="r-grade good">10</p>
				</div>
				<div class="review-box">
					<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="r-anime-cover">
					<div class="r-content">
						<p class="r-title">Shonen without shortcomings</p>
						<p class="r-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam delectus aperiam nulla corrupti reiciendis, dolorem, fuga sint error autem voluptatum molestiae, amet non optio, eum nesciunt maxime nostrum alias! Itaque.</p>
					</div>
					<div class="r-rating">
						<svg class="rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"/>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"/>
						</svg>

						<p class="rating-val">221</p>
					</div>
					<p class="r-grade good">10</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="collection-container">
		<div class="collection-block-1">
			<p class="c-header">Custom collections</p>
			<div class="c-box">
				<div class="c-box-block-1">
					<div class="cover-container">
						<div class="cover-wrapper"></div>
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="c-anime-cover">
					</div>
					<div class="cover-container">
						<div class="cover-wrapper"></div>
						<img src="../construction/images/Anime covers/mha.png" alt="" class="c-anime-cover">
					</div>
					<div class="cover-container">
						<div class="cover-wrapper"></div>
						<img src="../construction/images/Anime covers/mha.png" alt="" class="c-anime-cover">
					</div>
					<div class="cover-container">
						<div class="cover-wrapper"></div>
						<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="c-anime-cover">
					</div>
					<div class="cover-container">
						<div class="cover-wrapper"></div>
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="c-anime-cover">
					</div>
					<div class="cover-container">
						<div class="cover-wrapper"></div>
						<img src="../construction/images/Anime covers/code-geass.jpg" alt="" class="c-anime-cover">
					</div>
					<div class="c-rating-container">
						<div class="c-rating-box">
							<svg class="c-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
								<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
								<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
							</svg>
							<p class="c-rating-val">239</p>
						</div>
						<div class="c-com-box">
							<svg class="c-com-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
								<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#263b42" stroke-width="14" stroke-linecap="round" stroke-linejoin="round"/>
								<circle id="Ellipse_49-2" cx="38.2" cy="63.8" r="8"/>
								<circle id="Ellipse_50-2" cx="66.2" cy="63.8" r="8"/>
								<circle id="Ellipse_51-2" cx="94.3" cy="63.8" r="8"/>
							</svg>

							<p class="c-rating-val">239</p>
						</div>
					</div>
				</div>
				<div class="c-box-block-2">
					<p class="c-title">Space Adventures</p>
					<p class="c-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate repellat alias velit, earum quos totam praesentium tenetur neque aspernatur rem cupiditate Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate repellat alias velit, earum quos totam praesentium tenetur neque aspernatur rem cupidicommodi dolores tempora repudiandae officia est ratione possimus reiciendis!</p>
				</div>
			</div>
		</div>
		<div class="collection-block-2">
			<p class="c-2-header">Collections (35)</p>
			<p class="more-col-button">Full list</p>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>
			<div class="c-box-small">
				<p class="c-s-title">Space Adventures</p>
				<div class="c-s-stats">
					<div class="s-rating-box">
						<svg class="s-rating-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
							<path id="Polygon_5" class="" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
							<path id="Rectangle_618" class="" d="M39 63h51v64H39z"></path>
						</svg>
						<p class="c-rating-val">239</p>
					</div>
					<p class="divider">|</p>
					<p class="pub-date">1d ago</p>
				</div>
			</div>

		</div>
	</div>

	<div class="genres-selector" id="scroll-hook" style="position: sticky; top: 56px;">
		<div class="view-settings">

			<svg class="full-view " id="full-view-b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<path fill="#b2b2b2" d="M2 32h34v67H2z"></path>
				<path fill="#dde1e2" d="M36 32h90v67H36z"></path>
			</svg>

			<svg class="partial-view chosen-view" id="clipped-view-b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<path fill="#b2b2b2" d="M47 31h34v67H47z"></path>
			</svg>


			<svg class="list-view" id="list-view-b" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">

				<path id="Rectangle_719" d="M28 57h73v18H28z"></path>
				<path id="Rectangle_720" d="M28 31h73v18H28z"></path>
				<path id="Rectangle_721" d="M28 81h73v17H28z"></path>
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
		<p class="common-hint"><span style="color:#4CBB17">21%</span> in common with you</p>
		<div class="display-sort">
			<p class="sort-header">Sort By</p>
			<select name="" id="" class="sort-select">
				<option value="" class="sort-opt">Last Added</option>
				<option value="" class="sort-opt">Name</option>
				<option value="" class="sort-opt">Popular First</option>
				<option value="" class="sort-opt">Popular Last</option>
				
			</select>
		</div>
	</div>
	<div class="rec-container-full" id="full-container">


		<div class="rec-menu" id="rec-menu" style="position: sticky; top: 106px;">
			
			<div class="selected-box">
				<p class="rec-header selected-color selected-background" id="anime-l">Condomer's anime lists</p>
				<div class="selected-bar active" id="lists-div"></div>
			</div>
			<div class="rec-subheader selected-color " id="watched-list">
				<svg id="watched-icon-1" class="watched-icon selected-stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path   d="M121 64C60 133 7 64 7 64s53-69 114 0z" fill="none" stroke-width="8" stroke-miterlimit="10"></path>
					<circle  id="watched-icon-2" class="watched-icon selected-stroke" cx="63.8" cy="64" r="15.3" fill="none" stroke-width="14" stroke-miterlimit="10"></circle>
				</svg>
		
				<p class="subheader" id="watched-l">Watched anime</p>
			</div>
			<div class="rec-subheader" id="fav-list">
				<svg id="fav-icon" class="fav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path fill="none" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M64 11l13 41h43L85 77l13 40-34-25-34 25 13-40L8 52h43z"></path>
				</svg>
		
		
				<p class="subheader" id="favorite-l">Favorite anime</p>
			</div>
			<div class="rec-subheader" id="later-list">
				<svg id="later-icon" class="later-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
		
					<path id="later-icon-1" class="later-icon" d="M64 26v38l23 23"></path>
					<circle id="later-icon-2" class="later-icon" cx="64" cy="64" r="58"></circle>
				</svg>
		
		
				<p class="subheader" id="later-l">Planning to watch</p>	
			</div>
			<div class="selected-box" id="about-header-box">
				<p class="rec-header" style="margin-top:40px;" id="user-community">Community</p>
				<div class="selected-bar" id="com-div"></div>
			</div>	
		</div>
		
		<div class="rec-area" id="full-view-p">
			<p class="anime-list-header">1081 Watched anime</p>
			<div class="rec-animes" id="rec-animes"> 

				
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

		<div class="rec-animes-clipped flex" id="clipped-view-p">
			<p class="anime-list-header">1081 Watched anime</p>
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
			<p class="anime-list-header">1081 Watched anime</p>
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


	//Follow button controll
	toggleClassOnClick("follow-btn", "foll", "block");
	toggleClassOnClick("follow-btn", "unfoll", "block");
	toggleClassOnClick("follow-btn", "follow-btn", "foll-color");
	toggleClassOnClick("follow-btn", "foll-mark", "none");


	//Switch to lists

	addClassOnClick("anime-l", "anime-l", "selected-color");
	addClassOnClick("anime-l", "anime-l", "selected-background");
	addClassOnClick("anime-l", "lists-div", "active");
	addClassOnClick("anime-l", "watched-list", "selected-color");
	addClassOnClick("anime-l", "watched-icon-1", "selected-stroke");
	addClassOnClick("anime-l", "watched-icon-2", "selected-stroke");

	//watched
	addClassOnClick("watched-list", "watched-list", "selected-color");
	addClassOnClick("watched-list", "watched-icon-1", "selected-stroke");
	addClassOnClick("watched-list", "watched-icon-2", "selected-stroke");
	delClassOnClick("watched-list", "fav-list", "selected-color");
	delClassOnClick("watched-list", "fav-icon", "selected-stroke");
	delClassOnClick("watched-list", "later-list", "selected-color");
	delClassOnClick("watched-list", "later-icon-1", "selected-stroke");
	delClassOnClick("watched-list", "later-icon-2", "selected-stroke");

	addClassOnClick("watched-list", "anime-l", "selected-color");
	addClassOnClick("watched-list", "anime-l", "selected-background");
	addClassOnClick("watched-list", "lists-div", "active");
	delClassOnClick("watched-list", "user-community", "selected-color");
	delClassOnClick("watched-list", "user-community", "selected-background");
	delClassOnClick("watched-list", "com-div", "active");


	//favorites
	addClassOnClick("fav-list", "fav-list", "selected-color");
	addClassOnClick("fav-list", "fav-icon", "selected-stroke");
	delClassOnClick("fav-list", "watched-list", "selected-color");
	delClassOnClick("fav-list", "watched-icon-1", "selected-stroke");
	delClassOnClick("fav-list", "watched-icon-2", "selected-stroke");
	delClassOnClick("fav-list", "later-list", "selected-color");
	delClassOnClick("fav-list", "later-icon-1", "selected-stroke");
	delClassOnClick("fav-list", "later-icon-2", "selected-stroke");

	addClassOnClick("fav-list", "anime-l", "selected-color");
	addClassOnClick("fav-list", "anime-l", "selected-background");
	addClassOnClick("fav-list", "lists-div", "active");
	delClassOnClick("fav-list", "user-community", "selected-color");
	delClassOnClick("fav-list", "user-community", "selected-background");
	delClassOnClick("fav-list", "com-div", "active");

	//later
	addClassOnClick("later-list", "later-list", "selected-color");
	addClassOnClick("later-list", "later-icon-1", "selected-stroke");
	addClassOnClick("later-list", "later-icon-2", "selected-stroke");
	delClassOnClick("later-list", "fav-list", "selected-color");
	delClassOnClick("later-list", "fav-icon", "selected-stroke");
	delClassOnClick("later-list", "watched-icon-1", "selected-stroke");
	delClassOnClick("later-list", "watched-icon-2", "selected-stroke");
	delClassOnClick("later-list", "watched-list", "selected-color");
	delClassOnClick("later-list", "watched-icon", "selected-stroke");

	addClassOnClick("later-list", "anime-l", "selected-color");
	addClassOnClick("later-list", "anime-l", "selected-background");
	addClassOnClick("later-list", "lists-div", "active");
	delClassOnClick("later-list", "user-community", "selected-color");
	delClassOnClick("later-list", "user-community", "selected-background");
	delClassOnClick("later-list", "com-div", "active");



	delClassOnClick("anime-l", "user-community", "selected-color");
	delClassOnClick("anime-l", "user-community", "selected-background");
	delClassOnClick("anime-l", "com-div", "active");

	


	//Switch to community
	
	addClassOnClick("user-community", "user-community", "selected-color");
	addClassOnClick("user-community", "user-community", "selected-background");
	addClassOnClick("user-community", "com-div", "active");

	delClassOnClick("user-community", "anime-l", "selected-color");
	delClassOnClick("user-community", "anime-l", "selected-background");
	delClassOnClick("user-community", "lists-div", "active");

	delClassOnClick("user-community", "fav-list", "selected-color");
	delClassOnClick("user-community", "fav-icon", "selected-stroke");
	delClassOnClick("user-community", "watched-list", "selected-color");
	delClassOnClick("user-community", "watched-icon-1", "selected-stroke");
	delClassOnClick("user-community", "watched-icon-2", "selected-stroke");
	delClassOnClick("user-community", "later-list", "selected-color");
	delClassOnClick("user-community", "later-icon-1", "selected-stroke");
	delClassOnClick("user-community", "later-icon-2", "selected-stroke");



</script>



</body>
</html>