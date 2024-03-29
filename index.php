<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anilibrary</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	<? require 'construction/fonts/fonts.php'; ?>
	<? require 'construction/menu/menu.php'; ?>
</head>
<body id="body">

		<div class="ongoings-container" id="container-ong">
			<div class="background-container" id="slider-container">
				<div class="ongoings-background-shade"></div>
				<div class="ong-background-wrapper" id="slider">
					<div class="slider-container">
						<img id="lastClone" src="construction/images/Anime backgrounds/angel-beats.jpg" alt="" class="ongoing-background">
						<img src="construction/images/Anime backgrounds/mha.png" alt="" class="ongoing-background">
						<img src="construction/images/Anime backgrounds/code-geass.jpg" alt="" class="ongoing-background">
						<img src="construction/images/Anime backgrounds/angel-beats.jpg" alt="" class="ongoing-background">
						<img id="firstClone" src="construction/images/Anime backgrounds/mha.png" alt="" class="ongoing-background">
					</div>
				</div>
				<div class="titles-ong">
					<h2 class="header-ong"><a href="http://anilibrary/ongoing%20season/ongoing-seasons.php">Ongoings</a></h2>
					<h3 class="season-ong">Winter 2020</h3>
				</div>
				<div class="ongoing-preview">
					<div class="preview-block-1">
						<div class="preview-desc-box">
							<a href="http://anilibrary/anime%20page/anime.php">
								<p class="preview-title">My Hero Academia (S3)</p>
							</a>
							<p class="preview-description">Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem sit amet</p>
						</div>
					</div>
					<div class="preview-block-2">
						<div class="rec-anime-stats">
							<div class="r-stats-title">Status:<p class="r-title-text highlight-ong" id="animeStatus">Ongoing</p></div>
							<div class="r-stats-title">Episodes:<p class="r-title-text" id="episodes">17/24(TV)</p></div>
							<div class="r-stats-title">Studio:<p class="r-title-text" id="studio">A-1 Pictures</p></div>		
							<div class="r-stats-title">Author(s):<p class="r-title-text" id="author">Goro Taniguchi, Ichiro Okouchi</p></div>
						</div>
					</div>
					<div class="slide-controll" id="prev">
						<div class="slide-arrow-left"></div>
						<svg class="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
							<path fill="none" stroke="#fff" stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
						</svg>
					</div>
					<div class="slide-controll" id="next">
						<div class="slide-arrow-right"></div>
						<svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
							<path fill="none" stroke="#fff" stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
						</svg>
					</div>
				</div>
			</div>
			
			<div class="shelf-container">
				<div class="shelf-block-1">
					<div class="shelf-ongoings" id="ong-container">
						
					</div>
					<div class="page-switch-box">
						<div class="page-number-box" id="ong1-btn">
							<p class="page-number-value current-page">1</p>
							<div class="page-underbar current-underbar"></div>
						</div>
						<div class="page-number-box" id="ong2-btn">
							<p class="page-number-value ">2</p>
							<div class="page-underbar" ></div>
						</div>
						<div class="page-number-box" id="ong3-btn">
							<p class="page-number-value ">3</p>
							<div class="page-underbar"></div>
						</div>
						<div class="page-number-box" id="ong4-btn">
							<p class="page-number-value ">4</p>
							<div class="page-underbar"></div>
						</div>
					</div>
				</div>
				<div class="shelf-block-2">
					<p class="sidebar-header">What you should be watching:</p>
					<div class="anime-position-container">
						<div class="anime-position-box">
							<p class="anime-pos-value">1</p>
							<p class="anime-pos-title">Made in Abyss </p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up post-clicked-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value score-clicked-up">3.2k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">2</p>
							<p class="anime-pos-title">Made in Abyss </p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up post-clicked-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value score-clicked-up">3k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">3</p>
							<p class="anime-pos-title"><a class="" href="anime page/anime.php">Code Geass: Lelouch of the rebellion</a> </p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">2.8k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">4</p>
							<p class="anime-pos-title"><a class="" href="anime page/anime.php">Boruto: Naruto Next Generations</a> </p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">2.5k</p>
								<svg class="p-vote rotate post-down post-clicked-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
		
						<div class="anime-position-box">
							<p class="anime-pos-value">5</p>
							<p class="anime-pos-title">Cowboy Bebop</p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">2.4k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">6</p>
							<p class="anime-pos-title"><a class="" href="anime page/anime.php">GATE: Where JSDF Fought</a></p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">2.1k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">7</p>
							
							<p class="anime-pos-title"><a class="" href="anime page/anime.php"> Kaguya-sama: Love is War (S2)</a></p>
							
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">2k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">8</p>
							<p class="anime-pos-title"><a class="" href="anime page/anime.php">Kingdom (S3)</a></p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">1.9k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">9</p>
							<p class="anime-pos-title"><a class="" href="anime page/anime.php">Haikyu!! To the Top</a></p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">1.7k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
						<div class="anime-position-box">
							<p class="anime-pos-value">10</p>
							<p class="anime-pos-title"><a class="" href="anime page/anime.php">Isekai Quartet</a></p>
							<div class="anime-pos-votes">
								<svg class="p-vote post-up" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="anime-pos-votes-value post-rating-value">1.5k</p>
								<svg class="p-vote rotate post-down" version="1.1" id="Р&nbsp;РЋР&nbsp;В»Р&nbsp;С•Р&nbsp;в„–_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
							</div>
						</div>
					</div>
					<a href="ongoing season/ongoing-seasons.php">
						<p class="more-btn">View all ongoings</p>
					</a>
					
				</div>
			</div>
		</div>
		
		<div class="banner-container">
			<p class="banner-header">Forget all the struggle trying to find next anime to watch!</p>
			<p class="banner-subheader">Tell us what you have already watched and we will provide you with Personal Anime Recommendations. </p>
			<div class="actions">
				<a href="http://anilibrary/registration/register.php"><p class="action-reg-button">Register</p></a>
				<div class="triangle">
					<div class="triangle-left"></div>
					<button class="action-log-button" id="login-menu-button">Login</button>			
				</div>
			</div>
			<img src="construction/icons/banner-illustration.svg" alt="" class="banner-img">
			
		</div>
		
		<div class="recommended-container">
			<p class="recommended-header">Made for Neiaaa</p>
			
			<div class="recomendations-container">
				<a href="http://anilibrary/my%20recommendations/my-recommendations.php" class="link-recommendations">My recommendations</a>
				<p class="recommended-subheader">Best to watch next:</p>
				<div class="recomendations-block-1" id="contianer-rec">			
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/made-in-abyss.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Made in Abyss</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Initial D: First stage</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Cowboy Bepop</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/gate-cover.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Gate: Where the JDSF fought</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Phsychopass</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/made-in-abyss.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Made in Abyss</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Initial D: First stage</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Initial D: First stage</p>
						</div>
					</div>
					<div class="anime-box-recomendation">

						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">Initial D: First stage</p>
						</div>
					</div>
				</div>
				<div class="more-rec">
					Load more 
					<svg class="arrow-more" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path fill="none"  stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
				</div>
				<p class="recommended-subheader">Action</p>
				<div class="recomendations-block-1" id="contianer-rec">			
				<div class="anime-box-recomendation">
					<a class="anime-link" href="anime page/anime.php"> </a>
					<div class="zoom-in">
						<div class="full-view-btn">
							<p class="full-view-text">P</p>
							<div class="full-view-background"></div>
						</div>
						<img src="construction/images/anime covers/demonslayer.jpg" alt="" class="anime-cover-ongoing">
						<div class="to-list-box"></div>
						<p class="to-list-button">+Add to list</p>
					</div>
					<div class="anime-title-box-ongoing">
						<p class="anime-title-ongoing">
							<a href="anime page/anime.php">Demon Slayer</a>
						</p>
					</div>
				</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/naruto.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Naruto</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/mirainikki.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Future Diary</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/jormungand.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Jormungand</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/drstone.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Dr. Stone</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/hsofthedead.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">High school of the Dead</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/assasionationclassroom.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Assasionation Classroom</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/oawrinoseraph.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Seraph of the End </a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/onmyoji.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Twin Star Exorcist </a>
					</p>
				</div>
			</div>
				</div>
				<div class="more-rec">
					Load more 
					<svg class="arrow-more" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path fill="none"  stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
				</div>
				<div class="recomendations-block-2">
					<div class="recomendations-sidebar">
						<p class="sidebar-option genre-marked" id="recOverallBtn">Overall Recommendations</p>
						<div class="sidebar-scroll">
							<p class="sidebar-subheader">Your top 5 favorite ganres:</p>
							<div class="fav-genres-container">
								<div class="fav-genre" id="genre1Btn">Action</div>
								<div class="fav-genre" id="genre2Btn">Isekai</div>
								<div class="fav-genre" id="genre3Btn">Shonen</div>
								<div class="fav-genre" id="genre4Btn">Dramma</div>
								<div class="fav-genre" id="genre5Btn">Martial Arts</div>
							</div>
							
						</div>
		
						<a href="http://anilibrary/my recommendations/my-recommendations.php"><p class="more-btn">My recommendations full</p></a>
					</div>
				</div>
			</div>
			
		</div>

		<div class="fav-wrapper">
			
			<p class="fav-header">All Time Favorites</p>

			<div class="favorites-container">
				<a href="http://anilibrary/all%20time%20favorites/all-time-favorites.php" class="link-fav">Full page</a>
				<div class="fav-container">
					
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/friren.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Frieren: Beyond Journey's End</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/brotherhood.png" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Fullmetal Alchemist: Brotherhood</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/steins.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Steins Gate</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/gintama.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Gintama (S4)</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/attack.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Attack on Titan (S3P2)</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/hunter.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Hunter x Hunter</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/monster.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Monster</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/asilentvoice.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">A Silent Voice</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/yourname.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Your Name</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/mob.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Mob Psycho 100 II</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/hajime.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Fighting Spirit</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Cowboy Bebop</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Code Geass: Lelouch of the rebellion </a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/mushoku.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Jobless Reincarnation (S2)</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/jujutsu.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Jujutsu Kaisen (S2)</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/kingdom.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Kingdom</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/clannad.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Clannad: After Story</a>
							</p>
						</div>
					</div>
					<div class="anime-box-recomendation">
						<a class="anime-link" href="anime page/anime.php"> </a>
						<div class="zoom-in">
							<div class="full-view-btn">
								<p class="full-view-text">P</p>
								<div class="full-view-background"></div>
							</div>
							<img src="construction/images/anime covers/bochi.jpg" alt="" class="anime-cover-ongoing">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-ongoing">
								<a href="anime page/anime.php">Bocchi the Rock!</a>
							</p>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		
		
		<div class="reviews-container">

			<p class="fav-header">Latest Anime Reviews</p>
			<div class="slide-controlls-left">
					<svg class="controll-arrow " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
					<div class="slide-shadow"></div>
			</div>
			<div class="slide-controlls-right ">
					<svg class="controll-arrow rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
					<div class="slide-shadow"></div>
			</div>
			<div class="reviews-block">
				<div class="review-box">
					<div class="review-box-1">
						<img src="construction/images/anime covers/blends-cover.jpg" alt="" class="review-cover">
						<p class="review-title">Blend S Review</p>
						<p class="score good">10</p>
					</div>
					<div class="review-content">
						<div class="review-info">
							
							<div class="views-stats">
								<svg class="p-vote up-marked" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="views-counter">9923</p>
							</div>
							<div class="views-stats">
								<svg class="com-icon" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st1{fill:#2e2e2e}
									</style>
									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#2e2e2e" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="st1" cx="38.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_50-2" class="st1" cx="66.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_51-2" class="st1" cx="94.3" cy="63.8" r="8"></circle>
								</svg>
								<p class="views-counter">341</p>
							</div>		
							<div class="review-author">

								<p class="author-nickname">Author: <span class="review-author-value">Barahasan</span></p>
								<p class="author-tooltip" style="display: none;">/Barahasan</p>
							</div>
						</div>
						<div class="content-text">
							<p class="review-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eaque ducimus inventore sit officia laboriosam, magni similique voluptate cum expedita eligendi molestiae magnam voluptatum dignissimos veniam quo, quos reprehenderit quidem!</p>
						</div>	
					</div>
				</div>
				<div class="review-box">
					<div class="review-box-1">
						<img src="construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="review-cover">
						<p class="review-title">The Legend of Arslan Review</p>
						<p class="score good">10</p>
					</div>
					<div class="review-content">
						<div class="review-info">
							
							<div class="views-stats">
								<svg class="p-vote up-marked" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="views-counter">9923</p>
							</div>
							<div class="views-stats">
								<svg class="com-icon" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st1{fill:#2e2e2e}
									</style>
									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#2e2e2e" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="st1" cx="38.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_50-2" class="st1" cx="66.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_51-2" class="st1" cx="94.3" cy="63.8" r="8"></circle>
								</svg>
								<p class="views-counter">341</p>
							</div>		
							<div class="review-author">

								<p class="author-nickname">Author: <span class="review-author-value">Barahasan</span></p>
								<p class="author-tooltip" style="display: none;">/Barahasan</p>
							</div>
						</div>
						<div class="content-text">
							<p class="review-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eaque ducimus inventore sit officia laboriosam, magni similique voluptate cum expedita eligendi molestiae magnam voluptatum dignissimos veniam quo, quos reprehenderit quidem!</p>
						</div>	
					</div>
				</div>
				<div class="review-box">
					<div class="review-box-1">
						<img src="construction/images/anime covers/initiald-cover.jpg" alt="" class="review-cover">
						<p class="review-title">Initial D Review</p>
						<p class="score good">10</p>
					</div>
					<div class="review-content">
						<div class="review-info">
							
							<div class="views-stats">
								<svg class="p-vote up-marked" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="views-counter">9923</p>
							</div>
							<div class="views-stats">
								<svg class="com-icon" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st1{fill:#2e2e2e}
									</style>
									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#2e2e2e" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="st1" cx="38.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_50-2" class="st1" cx="66.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_51-2" class="st1" cx="94.3" cy="63.8" r="8"></circle>
								</svg>
								<p class="views-counter">341</p>
							</div>		
							<div class="review-author">

								<p class="author-nickname">Author: <span class="review-author-value">Barahasan</span></p>
								<p class="author-tooltip" style="display: none;">/Barahasan</p>
							</div>
						</div>
						<div class="content-text">
							<p class="review-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eaque ducimus inventore sit officia laboriosam, magni similique voluptate cum expedita eligendi molestiae magnam voluptatum dignissimos veniam quo, quos reprehenderit quidem!</p>
						</div>	
					</div>
				</div>
				<div class="review-box">
					<div class="review-box-1">
						<img src="construction/images/anime covers/gate-cover.jpg" alt="" class="review-cover">
						<p class="review-title">GATE Review</p>
						<p class="score good">10</p>
					</div>
					<div class="review-content">
						<div class="review-info">
							
							<div class="views-stats">
								<svg class="p-vote up-marked" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>
								<p class="views-counter">9923</p>
							</div>
							<div class="views-stats">
								<svg class="com-icon" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st1{fill:#2e2e2e}
									</style>
									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#2e2e2e" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="st1" cx="38.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_50-2" class="st1" cx="66.2" cy="63.8" r="8"></circle>
									<circle id="Ellipse_51-2" class="st1" cx="94.3" cy="63.8" r="8"></circle>
								</svg>
								<p class="views-counter">341</p>
							</div>		
							<div class="review-author">

								<p class="author-nickname">Author: <span class="review-author-value">Barahasan</span></p>
								<p class="author-tooltip" style="display: none;">/Barahasan</p>
							</div>
						</div>
						<div class="content-text">
							<p class="review-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eaque ducimus inventore sit officia laboriosam, magni similique voluptate cum expedita eligendi molestiae magnam voluptatum dignissimos veniam quo, quos reprehenderit quidem!</p>
						</div>	
					</div>
				</div>
			</div>
		</div>

		<div class="collections-container">
			<p class="fav-header">Custom Collections</p>
			<a href="http://anilibrary/collections/collections.php" class="link-rev">More collections</a>
			<div class="collections-wrap">
				<div class="slide-controlls-left">
					<svg class="controll-arrow " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
					<div class="slide-shadow"></div>
				</div>
				<div class="slide-controlls-right ">
					<svg class="controll-arrow rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
					<div class="slide-shadow"></div>
				</div>
				<div class="collections-block">
					<div class="collection-box">
						<a class="collection-link" href="collections/collection-solo.php"></a>
						<div class="collection-author-box">
							<img src="../construction/images/users cover/user2.jpg" alt="" class="c-author-img">
							<p class="c-username">Baraha</p>
						</div>
						<div class="collection-background">
							<img src="../construction/images/collections images/tog.jpg" alt="" class="background-img">
							
							<div class="background-info-r">

								<div class="collection-rating-box">
									<svg class="p-vote up-marked" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="rating-counter">1298</p>
									<div class="stats-shade"></div>
								</div>
								<div class="collection-content-counter">
									<svg class="counter-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve"><style>.st0{fill:#fff;stroke:#b2b2b2;stroke-miterlimit:10}</style><path class="st0" d="M46.9 4.3h68.2v102.8H46.9z"></path><path class="st0" d="M12.8 20.9H81v102.8H12.8z"></path></svg>
									<p class="counter-val">17</p>
									<div class="stats-shade"></div>
								</div>
							</div>
						</div>
						<div class="f-collection-info">
							<p class="c-title">Space Adventures</p>
							<p class="c-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla libero quisquam adipisci! Nesciunt enim autem labore animi error adipisci modi sequi nulla, architecto repudiandae facere molestiae est tempore suscipit quas?</p>
						</div>
					</div>
					<div class="collection-box">
						<a class="collection-link" href="collections/collection-solo.php"></a>
						<div class="collection-author-box">
							<img src="../construction/images/users cover/user2.jpg" alt="" class="c-author-img">
							<p class="c-username">Baraha</p>
						</div>
						<div class="collection-background">
							<img src="../construction/images/collections images/mushoku.jpg" alt="" class="background-img">
							
							<div class="background-info-r">

								<div class="collection-rating-box">
									<svg class="p-vote up-marked" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="rating-counter">1298</p>
									<div class="stats-shade"></div>
								</div>
								<div class="collection-content-counter">
									<svg class="counter-icon" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve"><style>.st0{fill:#fff;stroke:#b2b2b2;stroke-miterlimit:10}</style><path class="st0" d="M46.9 4.3h68.2v102.8H46.9z"></path><path class="st0" d="M12.8 20.9H81v102.8H12.8z"></path></svg>
									<p class="counter-val">17</p>
									<div class="stats-shade"></div>
								</div>
							</div>
						</div>
						<div class="f-collection-info">
							<p class="c-title">Best of Isekais</p>
							<p class="c-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla libero quisquam adipisci! Nesciunt enim autem labore animi error adipisci modi sequi nulla, architecto repudiandae facere molestiae est tempore suscipit quas?</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="help-container">
			<p class="help-header">Help the project</p>
			<p class="add-anime-btn">Add an anime</p>
			<p class="help-hint">To speed up the process of adding anime to the website or if you can't find your favorite anime here, you can add it yourself! I appreciate any help!</p>
			<div class="help-block-full">
				<div class="help-block-2">
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">2 days</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/made-in-abyss.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Made in Abyss</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">2 days</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/made-in-abyss.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Made in Abyss</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">2 days</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/bleach-cover.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Made in Abyss</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">2 days</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/konosuba-cover.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Goddes blesses this wonderfull word</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">39 min</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Code Geass: Lelouch of the rebellion</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">39 min</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Akame ga kill</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">18 min</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Arslan Senki</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">2 days</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/bleach-cover.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Made in Abyss</p>
						</div>
					</div>
					<div class="new-anime-box">
						<p class="new-anime-add-date"><span class="add-time">2 days</span> ago</p>
						<div class="zoom-in-new">
							<img src="construction/images/anime covers/konosuba-cover.jpg" alt="" class="anime-cover-new">
							<div class="to-list-box"></div>
							<p class="to-list-button">+Add to list</p>
							<div class="justify-author">
								<div class="new-anime-author">
									<img src="construction/images/users cover/Condomer.jpg" alt="" class="added-author-img">
									<p class="added-author-nickname">Jahard</p>
								</div>
							</div>
						</div>
						<div class="anime-title-box-ongoing">
							<p class="anime-title-added">Goddes blesses this wonderfull word</p>
						</div>
					</div>
				</div>				
			</div>
		</div>
		
		<div id="infoModalContainer">
			
		</div>
		
		<? require 'construction/footer/footer.php';?>
		
		
		<!-- Ongoings -->
		<script id="ong1" type="text/x-handlebars-template">
			
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator block"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
												
								<img src="construction/images/anime covers/made-in-abyss.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Made in Abyss</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
								<a class="anime-link" href="anime page/anime.php"> </a>
								<div class="anime-preview-indicator"></div>
								<div class="zoom-in">
									<div class="full-view-btn">
										<p class="full-view-text">P</p>
										<div class="full-view-background"></div>
									</div>
									<img src="construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
								<div class="anime-title-box-ongoing">
									<p class="anime-title-ongoing">
										<a href="anime page/anime.php">Code Geass: Lelouch of the rebellion </a>
									</p>
								</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/boruto-cover.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Boruto: Naruto Next Generations</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Cowboy Bebop</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/gate-cover.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">GATE: Where JSDF Fought</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
						<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/kaguyasama.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Kaguya-sama: Love is War (S2)</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/kingdom.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Kingdom (S3)</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/voleyball.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Haikyu!! To the Top</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/isekai-quartet.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Isekai Quartet</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/dorohedoro.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Dorohedoro</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/sao2.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">Sword Art Online: Alicization - War of Underworld (S2)</a>
								</p>
							</div>
						</div>
						<div class="anime-box-ongoing">
							<a class="anime-link" href="anime page/anime.php"> </a>
							<div class="anime-preview-indicator"></div>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="construction/images/anime covers/oregairu.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="anime page/anime.php">My Teen Romantic Comedy SNAFU Climax!</a>
								</p>
							</div>
		</div>
		</script>
		<script id="ong2" type="text/x-handlebars-template">
			<div class="anime-box-ongoing">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="anime-preview-indicator block"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
		
					<img src="construction/images/anime covers/greatpretender.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Great Pretender</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/bleach-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Bleach</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/Vinland Saga.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Vinland Saga</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/boruto-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Boruto: Next Generations</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Cowboy Bebop</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/gate-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Gate: Where the JDSF fought</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Code Geass: Lelouch of Rebelion</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Cowboy Bebop</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/boruto-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Boruto: Next Generations</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/gate-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Gate: Where the JDSF fought</p>
				</div>
			</div>
			<div class="anime-box-ongoing">
				<div class="anime-preview-indicator"></div>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/boruto-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Boruto: Next Generations</p>
				</div>
			</div>
		</script>
		<script id="animeInfoFull" type="text/x-handlebars-template">
			<div class="anime-info-modal">
				<div class="avg">
		
					<p class="avg-value good">8.7</p>
					<p class="avg-text">AVG</p>
				</div>
				<div class="close-btn">
					<svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<g stroke-width="25">
							<path d="M11 10l107 108"></path>
							<path d="M11 118L118 10" opacity=".9"></path>
						</g>
					</svg>
					<p class="close-text">Close</p>
				</div>
				<p class="preview-header">Preview</p>
				<div class="info-block-full">
					<img src="construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="block-image">
					<div class="block-info">
						<p class="i-anime-title"><a href="http://anilibrary/anime%20page/anime.php">Arslan Senki</a></p>
						<div class="i-anime-information">
							<div class="i-anime-stats">
								<div class="i-stats-title">Status:<p class="i-title-text highlight-fin" id="animeStatus">Finished</p></div>
								<div class="i-stats-title">Episodes:<p class="i-title-text" id="episodes">24/24(TV)</p></div>
								<div class="i-stats-title">Year:<p class="i-title-text" id="year">2020</p></div>
								<div class="i-stats-title">Studio:<p class="i-title-text studio" id="studio"><a href="http://anilibrary/anime%20page/studio.php">A-1 Pictures</a></p></div>		
								<div class="i-stats-title">Author(s):<p class="i-title-text" id="author">Goro Taniguchi, Ichiro Okouchi</p></div>
							</div>
							<div class="box-anime-genres">
								<p class="genre">Historical</p>
								<p class="genre">Adventures</p>
							</div>
						</div>
					</div>
				</div>
				<p class="info-desc">In the prosperous kingdom of Pars lies the Royal Capital of Ecbatana, a city of splendor and wonder, ruled by the undefeated and fearsome King Andragoras. Arslan is the young and curious prince of Pars who, despite his best efforts, doesn't seem to have what it takes to be a proper king like his father.<br><br> At the age of 14, Arslan goes to his first battle and loses everything as the blood-soaked mist of war gives way to scorching flames, bringing him to face the demise of his once glorious kingdom. However, it is Arslan's destiny to be a ruler, and despite the trials that face him, he must now embark on a journey to reclaim his fallen kingdom.</p>
				<iframe class="preview-trailer" src="https://www.youtube.com/embed/AiEXHQ8I1Os" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<a href="http://anilibrary/anime%20page/anime.php"><p class="read-more-btn">More</p></a>
			</div>
		</script>

		<!-- Recommendations -->
		<script id="recOverall" type="text/x-handlebars-template">
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Akame ga Kill</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/konosuba-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Konosuba</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/tokyoghoul.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Tokyo Ghoul</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/noragami.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Noragami</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/overlord4.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Overlord (S4)</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/blackclover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Black Clover</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/fairytail.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Fairytail</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/souleater.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Soul Eater</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
		</script>
		<script id="genre1" type="text/x-handlebars-template">
			
			<div class="anime-box-recomendation">
				
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/gate-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Gate: Where the JDSF fought</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Phsychopass</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>
			<div class="anime-box-recomendation">
				<a class="anime-link" href="anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="anime page/anime.php">Made in Abyss</a>
					</p>
				</div>
			</div>

		</script>
		<script id="genre2" type="text/x-handlebars-template">
			
		</script>
		<script id="genre3" type="text/x-handlebars-template">
			
		</script>
		<script id="genre4" type="text/x-handlebars-template">
			
		</script>
		<script id="genre5" type="text/x-handlebars-template">
			
		</script>




		
		<script src="js/handlebars-v4.7.6.js"></script>
		<script src="js/index.js"></script>
		
		
		
</body>
</html>