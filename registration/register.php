<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="register-design.css">
	<? require '../construction/fonts/fonts.php'; ?>
	<? require '../construction/menu/menu.php'; ?>
</head>
<body>
	
	
		<div class="registration-menu">
		
			<h1 class="reg-header">Registration</h1>
		
			<div class="reg-nav">
				<p class="page-select here" id="s1">Creating an account</p>
				<p class="spacers">- - - -</p>
				<p class="page-select" id="s2">Personalizing</p>
				<p class="spacers">- - - -</p>
				<p class="page-select" id="s3">Anime Lists</p>
				<p class="spacers">- - - -</p>
				<p class="page-select" id="s4">Login</p>
			</div>
		
		</div>

		<div class="overflow-container">


			<div class="reg-area" id="slide-1">

				<div class="box">
					<div class="info">
						<p>Username*</p>
						<p class="hint">You can't leave blank space</p>
					</div>
					<input type="text" class="inp">
				</div>

				<div class="box">
					<div class="info">
						<p>E-mail</p>
						<p class="hint">You can't leave blank space</p>
					</div>
					<input type="text" class="inp">
				</div>

				<div class="box">
					<div class="info">
						<p>Password</p>
						<p class="hint">8-16 symbols</p>
					</div>
					<input type="password" class="inp">
				</div>

				<div class="box">
					<div class="info">
						<p>Repeat password</p>
						<p class="hint">Password don't match</p>
					</div>
					<input type="password" class="inp">
				</div>

				<p class="next-button" id="personalized-switch">Next</p>
			</div>


			<div class="personalizing-area" id="slide-2">

				<div class="box">
					<div class="info">
						<p>Tell something about yourself<p>
					</div>
					<textarea name="description" class="user-description" id="" cols="30" rows="80" maxlength="500"></textarea>
				</div>
				

				<div class="container">
					
					<div class="avatar-box">

						<p class="box-title">Avatar</p>

						<input type="file" accept="image/*" onchange="loadFile(event)" class="av-inp">
						<img id="preview-avatar" class="preview">

						<script>
						  var loadFile = function(event) {
						    var output = document.getElementById('preview-avatar');
						    output.src = URL.createObjectURL(event.target.files[0]);
						    output.onload = function() {
						      URL.revokeObjectURL(output.src) // free memory
						    }
						  };
						</script>

					</div>

					<div class="background-box">
						
						<p class="box-title">Profile background image</p>
						<p class="hint-bg">We suggest using high resolution pictures (1920 x 1080)+</p>

						<input type="file" accept="image/*" onchange="loadFileBackground(event)" class="av-inp">
						<img id="preview-background" class="preview-background">

						<script>
						  var loadFileBackground = function(event) {
						    var output = document.getElementById('preview-background');
						    output.src = URL.createObjectURL(event.target.files[0]);
						    output.onload = function() {
						      URL.revokeObjectURL(output.src) // free memory
						    }
						  };
						</script>

					</div>

				</div>

				<div class="container">

					<div class="gender">
						<p class="box-title">Gender</p>
						<select name="" id="" class="g-select">
							<option value="">Undefined</option>
							<option value="">Male</option>
							<option value="">Female</option>
						</select>
					</div>
					
					<div class="age">
						<p class="box-title">Age</p>
						<select name="" id="" class="g-select">
							<option value="">Undefined</option>
							<option value="">Less than 10</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
							<option value="">13</option>
							<option value="">14</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
							<option value="">13</option>
							<option value="">14</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
							<option value="">13</option>
							<option value="">14</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
							<option value="">13</option>
							<option value="">14</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
							<option value="">13</option>
							<option value="">14</option>
						</select>
					</div>
					


				</div>
				<div class="explanation">
						<p class="expl-header">Why do we need that information?</p>
						<p class="expl-text">By indicating your gender and age, you are providing additional information to the algorithm.<br>It will use this data to generate more precise anime recommendations for you, and others.<br>However, It is completely optional.(This algorythm is currently offline)</p>
				</div>

				<p class="skip-button" id="skip-lists-switch">Skip this step</p>
				<p class="next-button" id="lists-switch">Next</p>
			</div>





			<div class="lists-area-full" id="slide-3">
				<div class="lists-area">
				
				
					<div class="rec-menu">
						<div class="selected-box">
							<p class="rec-header selected" id="my-rec">Tell us what you've<br>watched </p>
							<div class="selected-bar"></div>
						</div>
						
						
				
				
						<a href="http://anilibrary/index.php"><p class="finish-button" id="finish-switch">Finish Registration</p></a>
					</div>
				
				
					<div class="fav-list-container">
					<p class="hint-reg">Based on anime(s) you've watched, website will provide you with individual anime recommendations.</p>
						
						<div class="fav-list">
				
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>

							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>

							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>

							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>

							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>

							<div class="fav-list-anime">
								<div class="zoom-in-fav">
									<img src="../construction/images/Anime covers/Vinland Saga.jpg" alt="" class="fav-l-anime-img">
									<div class="to-list-box"></div>
									<p class="to-list-button">+Add to list</p>
								</div>
				
								<p class="fav-l-anime-title">Vinland Saga sadxsad s dss</p>
							</div>
							
						</div>

					</div>
				
				
					
					
				</div>
				<div class="registration-footer"></div>
			</div>
			
		</div>

	








	<script src ="../common-comands.js"></script>
	<script>


		//Slide 1
		addClassOnClick("personalized-switch", "slide-2", "top");
		addClassOnClick("s1", "slide-1", "top");
		delClassOnClick("s1", "slide-2", "top");
		delClassOnClick("s1", "slide-3", "top");

		returnToTheTop("s1");


		//Slide 2
		addClassOnClick("personalized-switch", "slide-2", "top");
		addClassOnClick("personalized-switch", "s2", "here");
		addClassOnClick("s2", "slide-2", "top");

		returnToTheTop("personalized-switch");
		returnToTheTop("s2");

		delClassOnClick("s2", "slide-1", "top");
		delClassOnClick("s2", "slide-3", "top");


		//Slide 3
		addClassOnClick("lists-switch", "slide-3", "top");
		addClassOnClick("skip-lists-switch", "slide-3", "top");
		addClassOnClick("lists-switch", "s3", "here");
		addClassOnClick("skip-lists-switch", "s3", "here");
		addClassOnClick("s3", "slide-3", "top");

		returnToTheTop("lists-switch");
		returnToTheTop("s3");
		
		delClassOnClick("s3", "slide-1", "top");
		delClassOnClick("s3", "slide-2", "top");

		//Finish
		returnToTheTop("finish-switch");
		



	</script>
</body>
</html>