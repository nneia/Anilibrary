<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>profile</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="profile-design.css">
	<? require '../construction/fonts/fonts.php'; ?>
	<? require '../construction/menu/menu.php'; ?>

	
</head>
<body id="body" >
	
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
				<h1 class="nickname">Neiaaa</h1>
				<!--<img src="../construction/icons/user-ranks/bronze.svg" alt="" class="user-rank">-->
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
			<div class="dm" id="message-btn">
				<p class="message-button" >Message</p>
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
				<div class="following-box" id="followers-btn">
					
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
						.st0,.st1,.st2,.st3{stroke:#000!important;stroke-miterlimit:10}.st0{stroke-linecap:round;stroke-linejoin:round;fill:#ddd!important;stroke-width:5}.st1,.st2,.st3{fill:#b2b2b2!important;stroke-width:1!important}.st2,.st3{stroke-linecap:round;stroke-linejoin:round}.st3{stroke-width:1!important}
					</style>
					<path class="st0" d="M63.4 124.3V10s42.7.2 47.1 31.4v82.9H63.4z"></path>
					<path class="st1" d="M74.3 73.4c-4.2 0-7.5 3.3-7.5 7.4 0 4.1 3.4 7.4 7.5 7.4 4.2 0 7.5-3.3 7.5-7.4.1-4.1-3.3-7.4-7.5-7.4zm.1 11.6C72 85 70 83.1 70 80.7s1.9-4.3 4.3-4.3 4.3 1.9 4.3 4.3c.1 2.4-1.8 4.3-4.2 4.3z"></path>
					<path class="st2" d="M110.4 45.5h-9L99 47.9l-2.5-2.4-2.9-1.5 2.8-1.4 2.6-2.5 2.5 2.5h8.9zM110.4 104.1h-9l-2.4 2.4-2.5-2.4-2.9-1.5 2.8-1.3 2.6-2.5 2.5 2.5h8.9z"></path>
					<path class="st1" d="M75 76.1h-1.3c-.6 0-1-.5-1-1v-5.2c0-.6.5-1 1-1H75c.6 0 1 .5 1 1V75c0 .6-.5 1.1-1 1.1z"></path>
					<path class="st0" d="M63.4 124.3V10s-42.7.2-47.1 31.4v82.9h47.1z"></path>
					<path class="st1" d="M52.4 73.4c4.2 0 7.5 3.3 7.5 7.4 0 4.1-3.4 7.4-7.5 7.4-4.2 0-7.5-3.3-7.5-7.4 0-4.1 3.3-7.4 7.5-7.4zM52.3 85c2.4 0 4.3-1.9 4.3-4.3s-1.9-4.3-4.3-4.3-4.3 2-4.3 4.3c0 2.4 1.9 4.3 4.3 4.3z"></path>
					<path class="st2" d="M16.3 45.5h9l2.5 2.4 2.4-2.4 2.9-1.5-2.8-1.4-2.5-2.5-2.6 2.5h-8.9zM16.3 104.1h9l2.5 2.4 2.4-2.4 2.9-1.5-2.8-1.3-2.5-2.5-2.6 2.5h-8.9z"></path>
					<path class="st1" d="M51.7 76.1H53c.6 0 1-.5 1-1v-5.2c0-.6-.5-1-1-1h-1.3c-.6 0-1 .5-1 1V75c0 .6.5 1.1 1 1.1z"></path>
					<path class="st3" d="M6 43.1c9.3 1.4 8.9-1 8.9-1l2.5-6.6s-3.7-3.7-7.6-4.5S6 43.1 6 43.1z"></path>
					<path class="st3" d="M9.9 31.8s.1-7.2 6.7-13.2c0 0 4.7 3.7 4.5 8.1s-3.7 9.5-3.7 9.5l-7.5-4.4z"></path>
					<path class="st3" d="M20.7 23.3s2.8 1.9 5.9-1.2 6.1-4.3 6.1-4.3-.1-7.4-2.1-9.1c-1.9-1.7-13.2 7.6-13.2 7.6s.3 5.1 3.3 7z"></path>
					<path class="st3" d="M32.7 16.2s-.1 1.1 3.1 0l3.2-1.1 7.1-2.5s1.3-6.6 0-9.7-14.8 4.7-14.8 4.7-.4.7-.2 1.9 1.6 6.7 1.6 6.7z"></path>
					<path class="st3" d="M46.6 10.3s.8 1.8 7.9.9 7.8-.9 7.8-.9.9-7.4.4-8.1-15.4 0-15.4 0-.6-.1-.9 1.5.2 6.6.2 6.6z"></path>
					<path class="st3" d="M62.7 3.4s-.1-2.1 2.3-1.9 10-.5 12.5 1c0 0-.6 7.5-3.1 8.4s-11.7-.7-11.7-.7V3.4z"></path>
					<path class="st3" d="M77.5 2.8s11.2.6 14.3 4.3c0 0-2.8 5.4-3.3 7-.5 1.6-4.5 0-4.5 0l-7.8-2.7s-.9-.8-.2-2.6 1.5-6 1.5-6z"></path>
					<path class="st3" d="M91.3 8s3-1.3 7.7 3l5 4.4s1 2.1-3.6 3.8l-2 1.5c-1.2.9-8.9-4.6-8.9-4.6s-.7-.2-1-2S91.3 8 91.3 8z"></path>
					<path class="st3" d="M99.1 20.2s1.1 4.3 6.4 9.7c0 0 2.6-1 4.9-1.9s3.4-.9 3.4-.9 1.5 0 .5-2.8-7.8-8.2-7.8-8.2-2.6-.1-2.7.9c-.1 1-4.7 3.2-4.7 3.2z"></path>
					<path class="st3" d="M106.5 29.9s.1 2.4 1.1 3.8c1.1 1.4 2.7 8.7 2.7 8.7s5 1.1 8 .9c3-.2-3.3-15.9-3.3-15.9s.8 0-1.3-.3c-1.9-.3-7.2 2.8-7.2 2.8z"></path>
					<path class="st3" d="M111 42.5s-1.3 2.9-.8 4c0 0 0 7.9.4 8.8s.2 1.9 1.8 2c1.6.1 6.9 0 6.9 0s1.5 0 1-4.2-1.8-9.9-1.8-9.9-2.4-1-7.5-.7z"></path>
					<path class="st3" d="M111.6 57.3s-1.1 2-.8 6.5c.3 4.5.8 5.3.8 5.3s4.1.9 6.9.7c0 0 1.2-.4 1.4-2.8s.7-8 0-8.6c-.7-.6-1.4-1-1.4-1s-4.4-.4-6.9-.1z"></path>
					<path class="st3" d="M112.8 69.3s-1.3 1.2-1.1 3.1c.2 2-.2 6.5 0 6.8s.3 1.5 1.2 2 5.4.6 6.3.5c.8-.2 1.1-1.1 1.1-3.5s.3-5.5 0-7.3c-.3-1.8-4.2-1.2-4.2-1.2l-3.3-.4zM112.8 81.7s-1.2 2.3-1.2 4 .6 8.7.6 8.7.8 2.1 2.9 1.4c0 0 2.8-.1 4.4-.6 1.6-.5 1-1.3 1-1.3s.3-8.7 0-9.8c-.3-1.1-1.5-1.9-2-1.9-.7.1-5.7-.5-5.7-.5z"></path>
					<path class="st3" d="M119.3 95.2s2.4 2.1 2.1 4.4c0 0-.1 8.8-.4 8.9-.3.1-1.3 1.7-3.2 1.5s-4.2-1.5-4.7-3-.7-6.5-.6-8.1c0 0 .6-3.5 6.8-3.7z"></path>
					<path class="st3" d="M114 109.3s-1.9 1.8-1.4 9.2c.5 7.4.7 8.1.7 8.1h8.1s3.5-2.4 1.1-7.5c0 0-.6-7.6-1.9-9-1.3-1.5-6.6-.8-6.6-.8zM5.5 56.9s-1.1 2-.8 6.5.8 5.3.8 5.3 4.1.9 6.9.7c0 0 1.2-.4 1.4-2.8.2-2.4.7-8 0-8.6-.7-.6-1.4-1-1.4-1s-4.4-.4-6.9-.1z"></path>
					<path class="st3" d="M6.7 69s-1.3 1.2-1.1 3.1-.2 6.5 0 6.8c.2.2.3 1.5 1.2 2s5.4.6 6.3.5c.8-.2 1.1-1.1 1.1-3.5s.3-5.5 0-7.3c-.3-1.8-4.2-1.2-4.2-1.2L6.7 69zM6.7 81.4s-1.2 2.3-1.2 4c0 1.6.6 8.7.6 8.7S7 96.2 9 95.4c0 0 2.8-.1 4.4-.6s1-1.3 1-1.3.3-8.7 0-9.8-1.5-1.9-2-1.9-5.7-.4-5.7-.4z"></path>
					<path class="st3" d="M13.2 94.8s2.4 2.1 2.1 4.4c0 0-.1 8.8-.4 8.9s-1.3 1.7-3.2 1.5-4.2-1.5-4.7-3c-.4-1.6-.7-6.5-.6-8.1 0 0 .6-3.5 6.8-3.7z"></path>
					<path class="st3" d="M7.9 108.9s-1.9 1.8-1.4 9.2c.5 7.4.7 8.1.7 8.1h8.1s3.5-2.4 1.1-7.5c0 0-.6-7.6-1.9-9s-6.6-.8-6.6-.8zM13.8 54.6c.3-1.3.4-7.3.4-8.7 0-1.4-1-2-1-2H7s-1.1 0-1.5 1.8-.8 5.9-.8 5.9.1 5.7 1.7 5.1l6.1.2c0 .1.5.9 1.3-2.3z"></path>
				</svg>

				<p class="achievements-header" style="margin-top: 4px">Entered this world on <span class="reg-date">16.04.2020</span></p>
			</div>
			<div class="achievents-block-2">
				<p class="lvl-header"> LVL 21</p>
				<div class="lvl-area">
					<div class="lvl-fill"><span class="lvl-current">2122</span>/<span class="lvl-cap">2631</span></div>
				</div>
			</div>
		</div>
	</div>

	<div class="description-contantainer">
		<div class="description-block-1">
			<div class="description">
				<p class="description-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam numquam deserunt praesentium necessitatibus. Soluta nisi temporibus, minima impedit modi quia, aliquid, eum eveniet tenetur cum pariatur! Nesciunt optio delectus doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam numquam deserunt praesentium necessitatibus. Soluta nisi temporibus, minima impedit modi quia, aliquid, eum eveniet tenetur cum pariatur! Nesciunt optio delectus doloremque!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam numquam deserunt praesentium necessitatibus. Soluta nisi temporibus, minima impedit modi quia, aliquid, eum eveniet tenetur cum pariatur! Nesciunt optio delectus doloremque!
				</p>
				<div class="description-images">
					<img class="desc-img" src="../construction/images/users backgrounds/condomer.png" alt="">
				</div>
			</div>
		</div>
		<div class="description-block-2">
			<div class="clubs-container">
				<p class="clubs-header">Clubs (<span class="clubs-counter">38</span>)</p>
				<div class="clubs-list">
					<div class="club-box">
					<a href="http://anilibrary/community/club-page.php"  class="preview-link"></a>
						<img class="club-cover" src="../construction/images/club covers/overlord fans.jpg">	
						<p class="club-title">Overlord FANS</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">398</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/tog-cover.gif">	
						<p class="club-title">TOG the Croco</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">2890</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/overlord fans.jpg">	
						<p class="club-title">Overlord FANS</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">398</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/tog-cover.gif">	
						<p class="club-title">TOG the Croco</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">2890</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/overlord fans.jpg">	
						<p class="club-title">Overlord FANS</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">398</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/tog-cover.gif">	
						<p class="club-title">TOG the Croco</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">2890</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/overlord fans.jpg">	
						<p class="club-title">Overlord FANS</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">398</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/tog-cover.gif">	
						<p class="club-title">TOG the Croco</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">2890</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/overlord fans.jpg">	
						<p class="club-title">Overlord FANS</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">398</p>
						</div>
					</div>
					<div class="club-box">
						<img class="club-cover" src="../construction/images/club covers/tog-cover.gif">	
						<p class="club-title">TOG the Croco</p>
						<div class="club-members">
							<svg class="members-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
									<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
									<circle cx="64" cy="57.7" r="18.9"></circle>
									<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="memeber-val">2890</p>
						</div>
					</div>
				</div>
				<p class="clubs-btn" id="clubs-btn">All Clubs</p>
			</div>
			
		</div>
	</div>
	

	<div class="stats-container">
		<p class="total-box"><span class="total-val">477</span> Anime Total</p>
		<div class="stats-bar">
			<div class="bar-1">
				<div class="bar-11"></div>
			</div>
			<div class="bar-2"></div>
			<div class="bar-3"></div>
		</div>
		<div class="lists-block">
			<p class="list"><span class="list-counter">419</span> Watched</p>
			<p class="list"><span class="list-counter">12</span> Favorites</p>
			<p class="list"><span class="list-counter">17</span> Dropped</p>
			<p class="list"><span class="list-counter">4</span> Planning to Watch</p>
		</div>
		<div class="genres-container">
			<div class="genres-block">
				<p class="genres-percent">51%</p>
				<p class="genre">Isekai</p>
			</div>
			<div class="genres-block">
				<p class="genres-percent">29%</p>
				<p class="genre">Action</p>
			</div>
			<div class="genres-block">
				<p class="genres-percent">17%</p>
				<p class="genre">Military</p>
			</div>
			<div class="genres-block">
				<p class="genres-percent">11%</p>
				<p class="genre">Shonen</p>
			</div>
			<div class="genres-block">
				<p class="genres-percent">7%</p>
				<p class="genre">Adventures</p>
			</div>
		</div>
	</div>


	<div class="recents-container">
		<p class="rec-header">Recently Watched</p>
		<div class="fav-container">
		<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/assasionationclassroom.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Assasination Classroom
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/bochi.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Bocchi the Rock!
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/brotherhood.png" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						
						<a href="../anime page/anime.php">
						Fullmetal Alchemist: Brotherhood
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						
						<a href="../anime page/anime.php">
						Legend of Arslan
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>	
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/demonslayer.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Demon Slayer
						</a>
						
					</p>
				</div>
			</div>

			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/guilty-crown.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Guilty Crown
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/monster.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Monster
						</a>
					</p>
					
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/psychopass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Psychopass
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/oawrinoseraph.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Seraphim of the End
						</a>
					</p>
				</div>
			</div>
		</div>

		
	</div>


	<div class="favorites-container">
		<p class="fav-header">Neiaaa's TOP 10 Favorite Anime</p>
		<div class="favorites-controlls">
			<div class="controlls-box">
				<div class="controlls-text">I love this</div>
				<p class="controlls-val">349</p>
			</div>
			<div class="controlls-box">
				<div class="controlls-text">Decent</div>
				<p class="controlls-val">291</p>
			</div>
			<div class="controlls-box">
				<div class="controlls-text">
					<p>I don't like this</p>
					
				</div>
				<p class="controlls-val">349</p>
			</div>
			<p class="history-btn" id="history-btn">Changes history</p>
		</div>
		<div class="fav-container">
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/naruto.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Naruto
						</a>
					</p>
					
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/overlord4.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Overlord (S4)
						</a>
					</p>
					
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Akame ga Kill
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Code Geass: Lelouch of the rebellion
						</a>
					</p>
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>	
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/gargantia.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Gargantia on the Verdous Planet
						</a>
					</p>	
				</div>
			</div>

			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Cowboy Bebop
						</a>
					</p>	
					
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Initial D
						</a>
					</p>	
					
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/mirainikki.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Future Diary
						</a>
					</p>	
				</div>
			</div>
			<div class="favorite-anime-box">
				<a class="anime-link" href="../anime page/anime.php"> </a>
				<div class="zoom-in">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>
					<img src="../construction/images/anime covers/tokyoghoul.jpg" alt="" class="anime-cover-ongoing">
					<div class="to-list-box"></div>
					<p class="to-list-button">+Add to list</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">
						<a href="../anime page/anime.php">
						Tokyo Ghoul
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="review-container">
		<p class="fav-header">Reviews</p>
		<div class="rev-controlls">
			<div class="rev-cont-box cont-selected">
				Posted by Neiaaa
			</div>
			<div class="rev-cont-box" style="padding-left: 20px; padding-right: 20px">
				<svg class="p-vote-r pu" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
					<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
					<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
				</svg>
				<p class="rev-subheader">Liked</p>
			</div>
			<div class="rev-cont-box" style="padding-left: 20px; padding-right: 20px">
				<svg class="save-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path d="M18.7 123V6h91.6v117L64.5 77.2z"></path>
				</svg>

				<p class="rev-subheader">Saved</p>
			</div>
		</div>
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
							<img src="../construction/images/anime covers/blends-cover.jpg" alt="" class="review-cover">
							<p class="review-title">Blend S Review</p>
							<p class="score good">10</p>
						</div>
						<div class="review-content">
							<div class="review-info">
								
								<div class="views-stats">
									<svg class="p-vote up-marked" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="views-counter">9923</p>
								</div>
								<div class="views-stats">
									<svg class="com-icon" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
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
							<img src="../construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="review-cover">
							<p class="review-title">The Legend of Arslan Review</p>
							<p class="score good">10</p>
						</div>
						<div class="review-content">
							<div class="review-info">
								
								<div class="views-stats">
									<svg class="p-vote up-marked" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="views-counter">9923</p>
								</div>
								<div class="views-stats">
									<svg class="com-icon" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
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
							<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="review-cover">
							<p class="review-title">Initial D Review</p>
							<p class="score good">10</p>
						</div>
						<div class="review-content">
							<div class="review-info">
								
								<div class="views-stats">
									<svg class="p-vote up-marked" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="views-counter">9923</p>
								</div>
								<div class="views-stats">
									<svg class="com-icon" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
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
							<img src="../construction/images/anime covers/gate-cover.jpg" alt="" class="review-cover">
							<p class="review-title">GATE Review</p>
							<p class="score good">10</p>
						</div>
						<div class="review-content">
							<div class="review-info">
								
								<div class="views-stats">
									<svg class="p-vote up-marked" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="views-counter">9923</p>
								</div>
								<div class="views-stats">
									<svg class="com-icon" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
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

	<div class="review-container">
				<div class="slide-controlls-left-c">
					<svg class="controll-arrow " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
					<div class="slide-shadow"></div>
				</div>
				<div class="slide-controlls-right-c">
					<svg class="controll-arrow rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
					</svg>
					<div class="slide-shadow"></div>
				</div>
				<div class="collections-block">
					<div class="collection-box">
						<a class="collection-link" href="../collections/collection-solo.php"></a>
						<div class="collection-author-box">
							<img src="../construction/images/users cover/user2.jpg" alt="" class="c-author-img">
							<p class="c-username">Baraha</p>
						</div>
						<div class="collection-background">
							<img src="../construction/images/collections images/tog.jpg" alt="" class="background-img">
							
							<div class="background-info-r">

								<div class="collection-rating-box">
									<svg class="p-vote up-marked" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="rating-counter">1298</p>
									<div class="stats-shade"></div>
								</div>
								<div class="collection-content-counter">
									<svg class="counter-icon" version="1.1" id="Ð¡Ð»Ð¾Ð¹_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve"><style>.st0{fill:#fff;stroke:#b2b2b2;stroke-miterlimit:10}</style><path class="st0" d="M46.9 4.3h68.2v102.8H46.9z"></path><path class="st0" d="M12.8 20.9H81v102.8H12.8z"></path></svg>
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
						<a class="collection-link" href="../collections/collection-solo.php"></a>
						<div class="collection-author-box">
							<img src="../construction/images/users cover/user2.jpg" alt="" class="c-author-img">
							<p class="c-username">Baraha</p>
						</div>
						<div class="collection-background">
							<img src="../construction/images/collections images/mushoku.jpg" alt="" class="background-img">
							
							<div class="background-info-r">

								<div class="collection-rating-box">
									<svg class="p-vote up-marked" version="1.1" id="Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;&nbsp;Ð&nbsp;â€¹Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;â€™Ð’Â»Ð&nbsp;&nbsp;&nbsp;Ð&nbsp;ÐŽÐ²Ð‚ÑžÐ&nbsp;&nbsp;&nbsp;Ð&nbsp;Ð†Ð²Ð‚Ñ›Ð²Ð‚â€œ_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
										<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
										<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
									</svg>
									<p class="rating-counter">1298</p>
									<div class="stats-shade"></div>
								</div>
								<div class="collection-content-counter">
									<svg class="counter-icon" version="1.1" id="Ð¡Ð»Ð¾Ð¹_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve"><style>.st0{fill:#fff;stroke:#b2b2b2;stroke-miterlimit:10}</style><path class="st0" d="M46.9 4.3h68.2v102.8H46.9z"></path><path class="st0" d="M12.8 20.9H81v102.8H12.8z"></path></svg>
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


	<div class="community-container">
		<div class="community-trending">
			<div class="com-switch com-selected">
				Wall
			</div>
			<div class="com-switch">
				<svg class="p-vote-r pu sw-icon" version="1.1" id="Р&nbsp;&nbsp;Р&nbsp;Р‹Р&nbsp;&nbsp;Р’В»Р&nbsp;&nbsp;РЎвЂўР&nbsp;&nbsp;РІвЂћвЂ“_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
					<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
					<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
				</svg>
				<p class="com-sw-text">Liked Posts</p>
			</div>
			<p class="com-switch-hint">Custom folders</p>
			<div class="com-switch">
				<img src="../construction/icons/custom-folder.svg" alt="" class="custom-folder-icon">
				Memes
			</div>
			<div class="com-switch">
				<img src="../construction/icons/custom-folder.svg" alt="" class="custom-folder-icon">
				AMVs
			</div>
			<div class="com-switch">
				<img src="../construction/icons/custom-folder.svg" alt="" class="custom-folder-icon">
				Pics
			</div>
		</div>
		<div class="community-content">
			<div class="post-btn">
				<img src="../construction/images/users cover/Condomer.jpg" alt="" class="posting-user-img">
			  <p class="p-btn-text">Post something...</p>
			</div>
			<div id="posts">
				<!--
				<div class="empty-box">
					<img src="../construction/icons/empty-illustration.svg" alt="" class="empty-img">
					<p class="empt-header">Nothing here yet</p>
				</div>
				-->
				
				<div class="post pin">
					<a href="http://anilibrary/community/post.php" class="post-link"></a>
					<div class="pin-box">
						<svg class="pin-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M103.8 24.2L88.2 8.6s-7.8 7.8-3.9 15.6L64.8 43.7c-9.8-3.2-20.6-.1-27.3 7.8L57.1 71l19.5 19.5c7.9-6.7 10.9-17.4 7.8-27.3l19.5-19.5c7.8 3.9 15.6-3.9 15.6-3.9l-15.7-15.6z" fill="none"  stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/><path fill="none"  stroke-width="10" stroke-miterlimit="10" d="M55 73l-30 30"/><path d="M13.8 113.8l17.6-6.1-11.5-11.5-6.1 17.6z"  stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/></svg>
						<p class="pin-text">Pinned post</p>
					</div>
					<div class="p-block-1">
						<img src="../construction/images/users cover/Condomer.jpg" alt="" class="u-avatar">
						<div>
							<div class="source">
								<p class="post-club-title u-title"><a href="#" class="profile-link">Neiaaa</a></p>
								<p class="post-user-tooltip u-tooltip" style="opacity: 1; display: none;">/Neiaaa</p>
								
								<span class="post-time">1 hour ago</span>

							</div>

						</div>
						<div class="actions">
							<div class="p-repost-box">
								<svg class="repost-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st0,.strep0{}.strep1{stroke-width:13!important;}
									</style>
									<path id="Path_68" class="strep0" d="M114 106V23H70"></path>
									<path id="Path_69" class="strep1" d="M66 39V7L51 22l15 17z"></path>
									<path id="Path_70" class="strep0" d="M15 25v81h44"></path>
									<path id="Path_71" class="strep1" d="M63 90v32l15-15-15-17z"></path>
								</svg>
								<p class="p-repost-value">1</p>
							</div>
							<div class="p-comments-box">
								<svg class="comment-icon-rev" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">

									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#263b42" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="" cx="38.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_50-2" class="" cx="66.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_51-2" class="" cx="94.3" cy="63.8" r="6"></circle>
								</svg>

								<p class="rev-comment-number">20</p>
							</div>
							<div class="p-vote-box">
								<svg class="p-vote post-up" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

								<p class="vote-value post-rating-value">12</p>

								<svg class="p-vote rotate post-down" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

							</div>
						</div>
					</div>
					<div class="p-block-header ">

					</div>
					<div class="p-block-2">
						<p class="p-text">Hey everyone! Thank you for using Anilibrary, hope you're enjoying it. As you've already guessed I created this website, I wanted to make it easy for people to find anime that they will like (myself included). Lorem Ipsum dolor sit amte  askmdm lore dit nar mskkk lllaldmsdlamsd a...</p>
					</div>
					<div class="p-block-3">
					</div>
					<div class="p-block-repost">
					</div>
				</div>
				<div class="post">
					<a href="http://anilibrary/community/post.php" class="post-link"></a>
					<div class="p-block-1">
						<img src="../construction/images/users cover/Condomer.jpg" alt="" class="u-avatar">
						<div>
							<div class="source">
								<p class="post-club-title u-title"><a href="#" class="profile-link">Neiaaa</a></p>
								<p class="post-user-tooltip u-tooltip" style="opacity: 1; display: none;">/Neiaaa</p>
								
								<span class="post-time">1 hour ago</span>

							</div>

						</div>
						<div class="actions">
							<div class="action-hint">
								<svg class="reposted-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st0,.strep0{}.strep1{stroke-width:13!important;}
									</style>
									<path id="Path_68" class="strep0" d="M114 106V23H70"></path>
									<path id="Path_69" class="strep1" d="M66 39V7L51 22l15 17z"></path>
									<path id="Path_70" class="strep0" d="M15 25v81h44"></path>
									<path id="Path_71" class="strep1" d="M63 90v32l15-15-15-17z"></path>
								</svg>
								<p class="action-hint-text">Reposted</p>
							</div>
						</div>
					</div>
					<div class="p-block-header">
						<p class="p-header">  </p>
					</div>
					<div class="p-block-2">
						<p class="p-text">Hey everyone! Thank you for using Anilibrary, hope you're enjoying it. As you've already guessed I created this website, I wanted to make it easy for people to find anime that they will like (myself included). Lorem Ipsum dolor sit amte  askmdm lore dit nar mskkk lllaldmsdlamsd a...</p>
					</div>
					<div class="p-block-3">
					</div>
					<div class="p-block-repost">
						<div class="repost">
							
							<div class="p-block-1">
							<a href="http://anilibrary/community/club-page.php" target="_blank" class="preview-link"></a>
								<img src="../construction/images/users cover/Condomer.jpg" alt="" class="club-avatar">
								<div>
									<div class="source">
										<a href="http://anilibrary/community/club-page.php" class="profile-link"><p class="post-club-title">Overlord FANS</p></a>
										<p class="post-user-tooltip" style="opacity: 1; display: none;">/Ainz</p>
										<p class="p-author">Posted by: </p>
										<span class="post-author-text">/Ainz</span><span class="post-time">1 hour ago</span>

									</div>
									<p class="post-flaer">Fan Arts</p>
								</div>
								<div class="actions">
									<div class="p-repost-box">
										<svg class="repost-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
											<style>
												.st0,.strep0{}.strep1{stroke-width:13!important;}
											</style>
											<path id="Path_68" class="strep0" d="M114 106V23H70"></path>
											<path id="Path_69" class="strep1" d="M66 39V7L51 22l15 17z"></path>
											<path id="Path_70" class="strep0" d="M15 25v81h44"></path>
											<path id="Path_71" class="strep1" d="M63 90v32l15-15-15-17z"></path>
										</svg>
										<p class="p-repost-value">1</p>
									</div>
									<div class="p-comments-box">
										<svg class="comment-icon-rev" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">

											<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#263b42" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path>
											<circle id="Ellipse_49-2" class="" cx="38.2" cy="63.8" r="6"></circle>
											<circle id="Ellipse_50-2" class="" cx="66.2" cy="63.8" r="6"></circle>
											<circle id="Ellipse_51-2" class="" cx="94.3" cy="63.8" r="6"></circle>
										</svg>

										<p class="rev-comment-number">20</p>
									</div>
									<div class="p-vote-box">
										<svg class="p-vote post-up" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
											<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
											<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
										</svg>

										<p class="vote-value post-rating-value">12</p>

										<svg class="p-vote rotate post-down" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
											<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
											<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
										</svg>

									</div>
								</div>
							</div>
							<div class="p-block-header">
								<p class="p-header">Title of the post reflects its inner content</p>
							</div>
							<div class="p-block-2">
								<p class="p-text">Hey everyone! Thank you for using Anilibrary, hope you're enjoying it. As you've already guessed I created this website, I wanted to make it easy for people to find anime that they will like (myself included). Lorem Ipsum dolor sit amte  askmdm lore dit nar mskkk lllaldmsdlamsd a...</p>
							</div>
							<div class="p-block-3">
								<img src="../construction/images/Community Images/overlord1.png" alt="" class="p-image">
							</div>
						</div>
					</div>

				</div>
				<div class="post">
					<a href="http://anilibrary/community/post.php" class="post-link"></a>
					<div class="p-block-1">
						<img src="../construction/images/users cover/Condomer.jpg" alt="" class="club-avatar">
						<div>
							<div class="source">
								<a href="http://anilibrary/community/club-page.php" class="profile-link"><p class="post-club-title">Overlord FANS</p></a>
								<p class="post-user-tooltip">/Ainz</p>
								<p class="p-author">Posted by: </p>
								<span class="post-author-text">/Ainz</span><span class="post-time">1 hour ago</span>

							</div>
							<p class="post-flaer">AMV</p>
						</div>
						<div class="actions">
							<div class="p-repost-box">
								<svg class="repost-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st0,.strep0{}.strep1{stroke-width:13!important;}
									</style>
									<path id="Path_68" class="strep0" d="M114 106V23H70"></path>
									<path id="Path_69" class="strep1" d="M66 39V7L51 22l15 17z"></path>
									<path id="Path_70" class="strep0" d="M15 25v81h44"></path>
									<path id="Path_71" class="strep1" d="M63 90v32l15-15-15-17z"></path>
								</svg>
								<p class="p-repost-value">1</p>
							</div>
							<div class="p-comments-box">
								<svg class="comment-icon-rev" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">

									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#263b42" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="" cx="38.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_50-2" class="" cx="66.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_51-2" class="" cx="94.3" cy="63.8" r="6"></circle>
								</svg>

								<p class="rev-comment-number">20</p>
							</div>
							<div class="p-vote-box">
								<svg class="p-vote post-up" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

								<p class="vote-value post-rating-value">12</p>

								<svg class="p-vote rotate post-down" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

							</div>
						</div>
					</div>
					<div class="p-block-header">
						<p class="p-header">Title of the post reflects its inner content</p>
					</div>
					<div class="p-block-2">
						<p class="p-text">Hey everyone! Thank you for using Anilibrary, hope you're enjoying it. As you've already guessed I created this website, I wanted to make it easy for people to find anime that they will like (myself included). Lorem Ipsum dolor sit amte  askmdm lore dit nar mskkk lllaldmsdlamsd a...</p>
					</div>
					<div class="p-block-3">
					</div>
					<div class="p-block-4">
						<div class="video-wrapper">
							<iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/aYf3hnowRKU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
						</div>					
					</div>
				</div>
				<div class="post">
					<a href="http://anilibrary/community/post.php" class="post-link"></a>
					<div class="p-block-1">
						<img src="../construction/images/users cover/Condomer.jpg" alt="" class="club-avatar">
						<div>
							<div class="source">
								<a href="http://anilibrary/community/club-page.php" class="profile-link"><p class="post-club-title">Overlord FANS</p></a>
								<p class="post-user-tooltip">/Ainz</p>
								<p class="p-author">Posted by: </p>
								<span class="post-author-text">/Ainz</span><span class="post-time">1 hour ago</span>

							</div>
							<p class="post-flaer">AMV</p>
						</div>
						<div class="actions">
							<div class="p-repost-box">
								<svg class="repost-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st0,.strep0{}.strep1{stroke-width:13!important;}
									</style>
									<path id="Path_68" class="strep0" d="M114 106V23H70"></path>
									<path id="Path_69" class="strep1" d="M66 39V7L51 22l15 17z"></path>
									<path id="Path_70" class="strep0" d="M15 25v81h44"></path>
									<path id="Path_71" class="strep1" d="M63 90v32l15-15-15-17z"></path>
								</svg>
								<p class="p-repost-value">1</p>
							</div>
							<div class="p-comments-box">
								<svg class="comment-icon-rev" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">

									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#263b42" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="" cx="38.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_50-2" class="" cx="66.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_51-2" class="" cx="94.3" cy="63.8" r="6"></circle>
								</svg>

								<p class="rev-comment-number">20</p>
							</div>
							<div class="p-vote-box">
								<svg class="p-vote post-up" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

								<p class="vote-value post-rating-value">12</p>

								<svg class="p-vote rotate post-down" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

							</div>
						</div>
					</div>
					<div class="p-block-header">
						<p class="p-header">Title of the post reflects its inner content</p>
					</div>
					<div class="p-block-2">
						<p class="p-text">Hey everyone! Thank you for using Anilibrary, hope you're enjoying it. As you've already guessed I created this website, I wanted to make it easy for people to find anime that they will like (myself included). Lorem Ipsum dolor sit amte  askmdm lore dit nar mskkk lllaldmsdlamsd a...</p>
					</div>
					<div class="p-block-3">
					</div>
					<div class="p-block-4">
						<div class="video-wrapper">
							<iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/aYf3hnowRKU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
						</div>					
					</div>
				</div>
				<div class="post">
					<a href="http://anilibrary/community/post.php" class="post-link"></a>
					<div class="p-block-1">
						<img src="../construction/images/users cover/Condomer.jpg" alt="" class="club-avatar">
						<div>
							<div class="source">
								<a href="http://anilibrary/community/club-page.php" class="profile-link"><p class="post-club-title">Overlord FANS</p></a>
								<p class="post-user-tooltip">/Ainz</p>
								<p class="p-author">Posted by: </p>
								<span class="post-author-text">/Ainz</span><span class="post-time">1 hour ago</span>

							</div>
							<p class="post-flaer">AMV</p>
						</div>
						<div class="actions">
							<div class="p-repost-box">
								<svg class="repost-icon" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<style>
										.st0,.strep0{}.strep1{stroke-width:13!important;}
									</style>
									<path id="Path_68" class="strep0" d="M114 106V23H70"></path>
									<path id="Path_69" class="strep1" d="M66 39V7L51 22l15 17z"></path>
									<path id="Path_70" class="strep0" d="M15 25v81h44"></path>
									<path id="Path_71" class="strep1" d="M63 90v32l15-15-15-17z"></path>
								</svg>
								<p class="p-repost-value">1</p>
							</div>
							<div class="p-comments-box">
								<svg class="comment-icon-rev" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">

									<path id="Path_109" d="M8 64l11 37c1 3 4 5 7 5h90c2 0 4-2 4-5 0 0 0 0 0 0V64h0V26c0-3-2-5-4-5v1H26c-3-1-6 1-7 4L8 64z" fill="none" stroke="#263b42" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"></path>
									<circle id="Ellipse_49-2" class="" cx="38.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_50-2" class="" cx="66.2" cy="63.8" r="6"></circle>
									<circle id="Ellipse_51-2" class="" cx="94.3" cy="63.8" r="6"></circle>
								</svg>

								<p class="rev-comment-number">20</p>
							</div>
							<div class="p-vote-box">
								<svg class="p-vote post-up" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

								<p class="vote-value post-rating-value">12</p>

								<svg class="p-vote rotate post-down" version="1.1" id="РЎР»РѕР№_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
									<path id="Polygon_5" d="M60 4c2-3 6-3 9-1v1l50 54a6 6 0 01-5 11H15a6 6 0 01-5-11L60 4z"></path>
									<path id="Rectangle_618" d="M39 63h51v64H39z"></path>
								</svg>

							</div>
						</div>
					</div>
					<div class="p-block-header">
						<p class="p-header">Title of the post reflects its inner content</p>
					</div>
					<div class="p-block-2">
						<p class="p-text">Hey everyone! Thank you for using Anilibrary, hope you're enjoying it. As you've already guessed I created this website, I wanted to make it easy for people to find anime that they will like (myself included). Lorem Ipsum dolor sit amte  askmdm lore dit nar mskkk lllaldmsdlamsd a...</p>
					</div>
					<div class="p-block-3">
					</div>
					<div class="p-block-4">
						<div class="video-wrapper">
							<iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/aYf3hnowRKU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<aside class="community-sidebar">
			
			<div class="sidebar-ad">
				<p class="ad-header">Advertisment</p>
			</div>
		</aside>
	</div>

	
	<div class="modal-container" id="modal-container">
		
		
		

		
	</div>
	<div id="infoModalContainer">
			
	</div>




<script id="followers-modal" type="text/x-handlebars-template">
	<div class="followers-modal">
		<div id="close-modal-members" class="close-btn">
					<svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
						<g stroke-width="25">
							<path d="M11 10l107 108"></path>
							<path d="M11 118L118 10" opacity=".9"></path>
						</g>
					</svg>
					<p class="close-text">Close</p>
		</div>
		<div class="menu-block">
			<div class="menu-box mb-selected">
				Following
				<span class="followers-count">213</span>
			</div>
			<div class="menu-box">
				Followers
				<span class="followers-count">213</span>
			</div>
		</div>
		<div class="followers-block">
			<div class="f-block-1">
				
				<input type="search" class="search-followers" placeholder="Search a user">
				<div class="followers-container">
					<div class="follower-box this-box" >
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon </p>
						<div class="follower-status online"></div>
						<p class="profile-link-m hide">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status offline"></div>
						<p class="profile-link-m">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status offline"></div>
						<p class="profile-link-m">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status offline"></div>
						<p class="profile-link-m">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status online"></div>
						<p class="profile-link-m">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status offline"></div>
						<p class="profile-link-m">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status offline"></div>
						<p class="profile-link-m">Profile</p>
					</div>
					<div class="follower-box">
						<img src="../construction/images/users cover/user2.jpg" alt="" class="follower-img">
						<p class="follower-nickname">Xenon</p>
						<div class="follower-status offline"></div>
						<p class="profile-link-m">Profile</p>
					</div>

				</div>
			</div>
			<div class="f-block-2">
				<div class="user-block">
					<img class="user-preview-img" src="../construction/images/users cover/user2.jpg">
					<div class="user-info">
						<div class="f-nickname">Neiaaa <p class="f-lvl">31</p></div>
						<div class="f-status">
							<div class="f-status-icon"></div>
							<p class="f-status-text on block">Online</p>
							<p class="f-status-text off">Last seen <span class="f-stat-time">32 min</span> ago</p>
						</div>
						<p class="profile-btn">Profile</p>
					</div>
				</div>
				<p class="f-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed labore laboriosam vel at reiciendis, dolorum sit? Praesentium quia possimus debitis a asperiores, dolore beatae assumenda labore. Laudantium, tempora quos perferendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi aliquid nobis laboriosam dolore, exercitationem omnis suscipit obcaecati earum impedit voluptatibus modi quibusdam, corrupti corporis distinctio deserunt cum quasi iste at?</p>
				<div class="f-list-stats">
					<p class="f-list-s"><span class="f-list-count">198</span> Watched</p>
					<p class="f-list-s"><span class="f-list-count">29</span> Dropped</p>
				</div>
			</div>
		</div>
	</div>
</script>
<script id="m-modal" type="text/x-handlebars-template">
	<div class="message-modal">

		<p class="message-header">Message to <span class="message-reciever">Neiaaa</span></p>
		<textarea placeholder="Write a message..." name="" id="" cols="30" rows="10" class="message-ta"></textarea>
		<div class="modal-actions">
			<p class="submit-btn">Send</p>
			<p class="cancel-btn">Cancel</p>
		</div>
	</div>
</script>
<script id="clubs-modal" type="text/x-handlebars-template">
	<div class="clubs-modal">
		<div id="close-modal-members" class="close-btn">
			<svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<g stroke-width="25">
					<path d="M11 10l107 108"></path>
					<path d="M11 118L118 10" opacity=".9"></path>
				</g>
			</svg>
			<p class="close-text">Close</p>
		</div>
		<p class="m-clubs-header">Neiaaa's clubs (<span class="clubs-counter">19</span>)</p>

		<div class="clubs-container-m">

			<div class="clubs-container-1">
				<input type="search" class="club-search" placeholder="Search a club">
				<div class="m-clubs-container">
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box this-club">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">1.9k</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
					<div class="m-club-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="m-club-icon">
						<p class="m-club-title">Overlord FANS</p>
						<div class="m-club-members">
							<svg class="m-club-member-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"/>
								<circle cx="64" cy="57.7" r="18.9"/>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"/>
							</svg>
							<p class="m-club-members-count">2399</p>
						</div>
					</div>
				</div>

			</div>
			<div class="club-display-box">
				<div class="club-display-block-1">
					<img src="../construction/images/anime backgrounds/mha.png" alt="" class="club-background">
					<div class="club-name-box">
						<img src="../construction/images/club covers/overlord fans.jpg" alt="" class="club-display-image">
						<p class="club-diplay-title">Overlord FANS</p>
					</div>
				</div>
				<div class="club-display-block-2">
					<p class="club-display-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
					<div class="club-stats">
						<div class="users-box">
							<svg class="users-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
								<path d="M43.6 68.6c-1.8-3.3-2.8-7-2.8-10.9 0-.6 0-1.1.1-1.7-1.7.4-3.5.6-5.3.6-7.6 0-14.4-3.7-18.6-9.4C7.8 56.8 1.9 69.6 1.1 83.8c1.2.4 14.6 4.8 28.7 5.3 1.5-8.6 6.7-16 13.8-20.5zM52.9 37.4c.3-1.4.5-2.9.5-4.4 0-10.1-8.2-18.4-18.4-18.4S16.7 22.9 16.7 33 25 51.4 35.1 51.4c2.5 0 4.9-.5 7.1-1.4 1.9-5.4 5.8-9.9 10.7-12.6z"></path>
								<circle cx="64" cy="57.7" r="18.9"></circle>
								<path d="M46.4 72.7s-17.1 10.2-16 36.5c0 0 29.4 10.5 67.2 0 0 0 .5-25.7-16-36.5 0 0-16 18.1-35.2 0zM84.4 68.6c1.8-3.3 2.8-7 2.8-10.9 0-.6 0-1.1-.1-1.7 1.7.4 3.5.6 5.3.6 7.6 0 14.4-3.7 18.6-9.4 9.2 9.6 15.1 22.5 15.9 36.6-1.2.4-14.6 4.8-28.7 5.3-1.4-8.6-6.6-16-13.8-20.5zM75.1 37.4c-.3-1.4-.5-2.9-.5-4.4 0-10.1 8.2-18.4 18.4-18.4s18.4 8.2 18.4 18.4-8.3 18.4-18.4 18.4c-2.5 0-4.9-.5-7.1-1.4-1.9-5.4-5.8-9.9-10.8-12.6z"></path>
							</svg>
							<p class="club-members-text"><span class="club-members-val">1.9</span>k</p>
						</div>

						<div class="online-box">
							<div class="online-icon"></div>
							<p class="club-members-text online-t"><span class="club-members-val">134</span> online</p>
						</div>
					</div>
					<a href="http://anilibrary/community/club-page.php" >
						<div class="join-box" id="join-box">
							<button class="club-join-btn inline" id="notjoined-club-btn">Visit</button>
							<button class="club-join-btn" id="joined-club-btn"> Joined ⯆</button>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</script>
<script id="lists-modal" type="text/x-handlebars-template">
	<div class="anime-statistics-container">
		<div id="close-modal-albums" class="close-btn">
			<svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<g stroke-width="25">
					<path d="M11 10l107 108"></path>
					<path d="M11 118L118 10" opacity=".9"></path>
				</g>
			</svg>
			<p class="close-text">Close</p>
		</div>
		<h2 class="total-header"><span class="total-value">477</span> Anime Total</h2>
		<div class="lists-selector" id="lists-selector">
			<p class="list-switch ">Watched</p>
			<p class="list-switch">Favorites</p>
			<p class="list-switch">Dropped</p>
			<p class="list-switch ">Planning to watch</p>
		</div>
		<p class="similarities-hint"><span class="other-u-nickname">Neiaaa</span> watched <span class="sim-counter">76%</span> of yours anime</p>


		<div class="ppl-know-box">
			<p class="c-header">Custom Lists</p>
			<div class="custom-lists-container">
				<div class="custom-lists-selector" id="custom-lists-selector">
					<p class="list-switch-c ">Trashy Isekais</p>
					<p class="list-switch-c">Romantics</p>
					<p class="list-switch-c custom-locked">Space Adventures</p>

				</div>
				<p class="custom-lists-btn">+</p>
			</div>

		</div>


		<div class="cutom-list-menu">
			<h3 class="list-header">Trashy Isekais (<span class="custom-list-counter">39</span>)</h3>
			<div class="publicity-box">
				<input type="checkbox" id="p-check" class="public-switch">
				<label for="p-check" class="p-switch-text">Public</label>
			</div>
			<div class="menu-rs">
				<p class="list-add-btn" id="list-add-btn">+ add anime to this list</p>
				<p class="list-manage-btn" id="mng-btn">Manage</p>
				<svg class="opt-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><circle cx="25.2" cy="64" r="9.7"/><circle cx="64" cy="64" r="9.7"/><circle cx="102.8" cy="64" r="9.7"/></svg>
			</div>
		</div>
		<div class="custom-list-controlls">
			<input type="search" class="list-search" placeholder="Browse this list">
			<div class="sort-box">
				<p class="sort-opt this-sort">Display Recent</p>
				<p class="sort-opt"style="margin-top: 3px;">Display Earliest</p>
			</div>
			<div class="view-style-box">
				<svg class="list-view" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve"><path id="Rectangle_719" class="profile-design.css" d="M19.5 55.5h89v22h-89v-22z"/><path id="Rectangle_720" class="" d="M19.5 23.5h89v22h-89v-22z"/><path id="Rectangle_721" class="" d="M19.5 85.5h89v19h-89v-19z"/></svg>
				<svg class="normal-view this-view" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M41.5 28.1h45v71.8h-45V28.1z"  stroke-width=".25" stroke-miterlimit="10"/></svg>
			</div>
		</div>
		<div class="custom-list-content ">


			

		</div>
	</div>
</script>
<script id="history-modal" type="text/x-handlebars-template">
	<div class="history-modal">
		<h2 class="history-header">Changes history</h2>
		<div id="close-modal-members" class="close-btn close-35">
			<svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<g stroke-width="25">
					<path d="M11 10l107 108"></path>
					<path d="M11 118L118 10" opacity=".9"></path>
				</g>
			</svg>
			<p class="close-text">Close</p>
		</div>
		<div class="history-container">
			<div class="history-box">
				<p class="history-subheader"><span class="date-1">29.08.2020</span> - <span class="date-2">Current</span></p>
				<div class="history">
					<div class="favorites-controlls">
						<div class="controlls-box ">
							<div class="controlls-text his-c">I love this</div>
							<p class="controlls-val h-val">349</p>
						</div>
						<div class="controlls-box ">
							<div class="controlls-text his-c">Decent</div>
							<p class="controlls-val h-val">291</p>
						</div>
						<div class="controlls-box ">
							<div class="controlls-text his-c" >
								<p>I don't like this</p>
							</div>
							<p class="controlls-val h-val">349</p>
						</div>
						
					</div>
					<div class="his-container">
						
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/naruto.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">Naruto</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/overlord4.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Overlord (S4)
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Akame ga Kill
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Code Geass: Lelouch of the rebellion
									</a> 
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>	
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/gargantia.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Gargantia on the Verdous Planet
									</a>
								</p>
							</div>
						</div>

						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Cowboy Bebop
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Initial D
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/mirainikki.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Future Diary
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/tokyoghoul.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Tokyo Ghoul
									</a>
								</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="history-box">
				<p class="history-subheader"><span class="date-1">21.03.2019</span> - <span class="date-2">29.08.2020</span></p>
				<div class="history">
					<div class="favorites-controlls">
						<div class="controlls-box ">
							<div class="controlls-text his-c">I love this</div>
							<p class="controlls-val h-val">288</p>
						</div>
						<div class="controlls-box ">
							<div class="controlls-text his-c">Decent</div>
							<p class="controlls-val h-val">500</p>
						</div>
						<div class="controlls-box ">
							<div class="controlls-text his-c" >
								<p>I don't like this</p>
							</div>
							<p class="controlls-val h-val">89</p>
						</div>
						
					</div>
					<div class="his-container">
						
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/naruto.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">Naruto</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/overlord4.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Overlord (S4)
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Akame ga Kill
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Code Geass: Lelouch of the rebellion
									</a> 
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>	
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/gargantia.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Gargantia on the Verdous Planet
									</a>
								</p>
							</div>
						</div>

						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/cowboy-bebop.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Cowboy Bebop
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Initial D
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/mirainikki.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Future Diary
									</a>
								</p>
							</div>
						</div>
						<div class="favorite-anime-box">
							<a class="anime-link" href="../anime page/anime.php"> </a>
							<div class="zoom-in">
								<div class="full-view-btn">
									<p class="full-view-text">P</p>
									<div class="full-view-background"></div>
								</div>
								<img src="../construction/images/anime covers/tokyoghoul.jpg" alt="" class="anime-cover-ongoing">
								<div class="to-list-box"></div>
								<p class="to-list-button">+Add to list</p>
							</div>
							<div class="anime-title-box-ongoing">
								<p class="anime-title-ongoing">
									<a href="../anime page/anime.php">
										Tokyo Ghoul
									</a>
								</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</script>
<script id="adding-anime-modal" type="text/x-handlebars-template">
	<div class="adding-anime">
		<h2 class="adding-header">+ Trashy Isekais</h2>
		<div class="search-anime-box">
			<svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<circle cx="49.7" cy="49.7" r="37.7" fill="none" stroke="#000" stroke-width="12" stroke-miterlimit="10"/>
				<path fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M76 76l41 41"/>
			</svg>
			<input type="search" class="search-anime-inp" placeholder="Anime Title">
		</div>
		
		<p class="s-result-text">Displaying all anime on the website</p>
		<div class="search-results-container">
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
			<div class="anime-box-add">

				<div class="zoom-in-add">
					<div class="full-view-btn">
						<p class="full-view-text">P</p>
						<div class="full-view-background"></div>
					</div>

					<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-add">
					<div class="to-list-box"></div>
					<p class="to-list-button-sel">Select</p>
				</div>
				<div class="anime-title-box-ongoing">
					<p class="anime-title-ongoing">Initial D: First stage</p>
				</div>
			</div>
		</div>
		<div class="selected-container">
			<p class="selected-subheader">Selected anime (<span id="selected-counter">0</span>)</p>
			<div class="selected-animes" id="selected-container">
				<div class="s-anime-box">
					<img src="../construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="s-anime-img">
					<p class="s-remove">-</p>
				</div>
				<div class="s-anime-box">
					<img src="../construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="s-anime-img">
					<p class="s-remove">-</p>
				</div>
			</div>
			<div class="modal-actions">
				<p class="submit-btn">Add</p>
				<p class="cancel-btn">Cancel</p>
			</div>
		</div>
	</div>
</script>
<script id="default-view" type="text/x-handlebars-template">
	<div class="anime-box-c " >

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/isekai-quartet.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/bleach-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/initiald-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/akamegakill-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/isekai-quartet.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/code-geass.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
	<div class="anime-box-c">

		<div class="zoom-in">
			<div class="full-view-btn">
				<p class="full-view-text">P</p>
				<div class="full-view-background"></div>
			</div>
			<div class="anime-position-b">

			</div>
			<p class="anime-p">
				39
			</p>
			<img src="../construction/images/anime covers/bleach-cover.jpg" alt="" class="anime-cover-ongoing">
			<div class="to-list-box"></div>
			<p class="to-list-button">+Add to list</p>
		</div>
		<div class="anime-title-box-ongoing">
			<p class="anime-title-ongoing">Initial D: First stage</p>
		</div>
	</div>
</script>
<script id="list-view" type="text/x-handlebars-template">
	<div class="anime-box-list-v">
		<img class="list-v-img" src="../construction/images/anime covers/initiald-cover.jpg">
		<div class="list-v-block">
			<p class="anime-title-lv">Initial D: Stage 1</p>
			<div class="info-lv">
				<p class="lv-status online">Finished</p>
				<p class="lv-episodes">EP: <span class="ep-val">12</span></p>
				<p class="lv-studio">Studio: <span class="studio-val">A-1 Pictures</span></p>
			</div>
		</div>
		<p class="to-list-button list-btn-lv">+Add to list</p>
		<p class="list-v-pos">39</p>
	</div>
	<div class="anime-box-list-v">
		<img class="list-v-img" src="../construction/images/anime covers/initiald-cover.jpg">
		<div class="list-v-block">
			<p class="anime-title-lv">Initial D: Stage 1</p>
			<div class="info-lv">
				<p class="lv-status online">Finished</p>
				<p class="lv-episodes">EP: <span class="ep-val">12</span></p>
				<p class="lv-studio">Studio: <span class="studio-val">A-1 Pictures</span></p>
			</div>
		</div>
		<p class="to-list-button list-btn-lv">+Add to list</p>
		<p class="list-v-pos">39</p>
	</div>
	<div class="anime-box-list-v">
		<img class="list-v-img" src="../construction/images/anime covers/initiald-cover.jpg">
		<div class="list-v-block">
			<p class="anime-title-lv">Initial D: Stage 1</p>
			<div class="info-lv">
				<p class="lv-status online">Finished</p>
				<p class="lv-episodes">EP: <span class="ep-val">12</span></p>
				<p class="lv-studio">Studio: <span class="studio-val">A-1 Pictures</span></p>
			</div>
		</div>
		<p class="to-list-button list-btn-lv">+Add to list</p>
		<p class="list-v-pos">39</p>
	</div>
	<div class="anime-box-list-v">
		<img class="list-v-img" src="../construction/images/anime covers/blends-cover.jpg">
		<div class="list-v-block">
			<p class="anime-title-lv">Blend S</p>
			<div class="info-lv">
				<p class="lv-status online">Finished</p>
				<p class="lv-episodes">EP: <span class="ep-val">12</span></p>
				<p class="lv-studio">Studio: <span class="studio-val">A-1 Pictures</span></p>
			</div>
		</div>
		<p class="to-list-button list-btn-lv">+Add to list</p>
		<p class="list-v-pos">39</p>
	</div>
	<div class="anime-box-list-v">
		<img class="list-v-img" src="../construction/images/anime covers/initiald-cover.jpg">
		<div class="list-v-block">
			<p class="anime-title-lv">Initial D: Stage 1</p>
			<div class="info-lv">
				<p class="lv-status online">Finished</p>
				<p class="lv-episodes">EP: <span class="ep-val">12</span></p>
				<p class="lv-studio">Studio: <span class="studio-val">A-1 Pictures</span></p>
			</div>
		</div>
		<p class="to-list-button list-btn-lv">+Add to list</p>
		<p class="list-v-pos">39</p>
	</div>
	<div class="anime-box-list-v">
		<img class="list-v-img" src="../construction/images/anime covers/blends-cover.jpg">
		<div class="list-v-block">
			<p class="anime-title-lv">Blend S</p>
			<div class="info-lv">
				<p class="lv-status online">Finished</p>
				<p class="lv-episodes">EP: <span class="ep-val">12</span></p>
				<p class="lv-studio">Studio: <span class="studio-val">A-1 Pictures</span></p>
			</div>
		</div>
		<p class="to-list-button list-btn-lv">+Add to list</p>
		<p class="list-v-pos">39</p>
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
					<img src="../construction/images/anime covers/arslan-senki-cover.jpg" alt="" class="block-image">
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
<script src="../js/profile.js"></script>

</body>
</html>