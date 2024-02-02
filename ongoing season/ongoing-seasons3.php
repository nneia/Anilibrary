<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ongoings</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="ongoing-seasons-design.css">
	<? require '../construction/fonts/fonts.php'; ?>
	<? require '../construction/menu/menu.php'; ?>
</head>
<body>
	
	
	<div class="cover-crop">
		<img src="../construction/images/Season covers/steamp.png" alt="" class="season-cover">
	</div>

	<div class="page-menu">
		
		<div class="header-box">
			<h1 class="page-header">Ongoings</h1>
			<p class="page-subheader">Winter 2020</p>
		</div>

		<div class="filters-box">
			<div class="search-anime">
				<svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
							<circle cx="49.7" cy="49.7" r="37.7" fill="none" stroke="#000" stroke-width="12" stroke-miterlimit="10"/>
							<path fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M76 76l41 41"/>
				</svg>
				<input type="text" class="search-inp" placeholder="Anime title">
				<p class="search-button">Search</p>
			</div>
			
			<div class="genre">
				<input class="genre-search" type="text" placeholder="Select a genre">
				<p class="manual-select" id="genre-manual">˅</p>
				<div class="genre-selector" id="genres-open">
					<p class="genre-text">Action</p>
					<p class="genre-text">Isekai</p>
					<p class="genre-text">Shonen</p>
				</div>
			</div>
			
			<div class="view-settings">
			
				<svg class="full-view" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path fill="#b2b2b2" d="M2 32h34v67H2z"/>
					<path fill="#dde1e2" d="M36 32h90v67H36z"/>
				</svg>
				
				<svg class="partial-view" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path fill="#dde1e2" d="M47 31h34v67H47z"/>
				</svg>
			
				
				<svg class="list-view" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" xml:space="preserve">
					<style>
						.st0{fill:#dde1e2}
					</style>
					<path id="Rectangle_719" class="st0" d="M28 57h73v18H28z"/>
					<path id="Rectangle_720" class="st0" d="M28 31h73v18H28z"/>
					<path id="Rectangle_721" class="st0" d="M28 81h73v17H28z"/>
				</svg>
			
			
			</div>
		</div>


	</div>

	<div class="an-numb-box">
		<p class="an-numb-subheader">
			<span class="an-numb">52</span>
			Anime
		</p>
		<p class="sort-anime selected">Popular</p>
		<p class="sort-anime">Unpopular</p>
	</div>
	<div class="load-anime">
		<p class="anime-counter">1</p>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>
		<div class="anime-fav-box">
			<div class="zoom-in">
				<img src="../construction/images/Anime covers/mha.png" alt="" class="cover-ongoing-img">
				<div class="to-list-box"></div>
				<p class="to-list-button">+Add to list</p>
			</div>
			<p class="anime-ongoing-title">My Hero Academia (S4)</p>
		</div>

	</div>


	<? require '../construction/footer/footer.php';?>

	<script src ="../common-comands.js"></script>
	<script>
	toggleOnClickBlock("genre-manual", "genres-open");


	</script>
</body>
</html>