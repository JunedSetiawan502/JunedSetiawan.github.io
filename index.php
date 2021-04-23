<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Retro Game</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyleindex.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="gambar/favicon.ico" type="image/x-icon">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
</head>
<body>
	<!--navbar-->
	<nav>
	<header class="clear-head">
    <div class="logo"><a href="index.html">A<span>Game</span></a></div>
    <div class="navbar">
      <ul>
        <li class="sub-menu"><a>Game Search</a>
          <ul>
			<li><a href="genre.html">Genres</a></li>
            <li><a href="#">Released</a></li>
            <li><a href="#">Top Game</a></li>
            <li><a href="#">Category</a></li>
         </ul>
        </li>
		<li class="sub-menu"><a>Platform</a>
			<ul>
			  <li><a href="">PC</a></li>
			  <li><a href="">Mobile</a></li>
			  <li><a href="">Console</a></li>
			</ul>
		  </li>
        <li class="sub-menu"><a>Portofolio</a>
          <ul>
            <li><a href="portofolio.html">Juned Setiawan</a></li>
          </ul>
        </li>
        <li><a href="team.html">Team</a></li> 
        <li><a href="chat/chat.php">Chat</a></li>
      </ul>
    </div>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
  </header>
  </nav>
	<input type="text" name="search" placeholder="Search..">
	<!--//navbar-->

	<!--header-->
	<div class="container">
  		<img src="gambar/bg1.jpg" alt="header">
  			<div class="content-head">
    			<p class="pt1"> Selamat <span>Datang</span></p>
    			 <p> Berbagai Informasi dan Tempat Download Game</p>
  			</div>
	</div>

	<!--//header-->
	<!--contact us-->
  <div class="sd-kontak">
    <div class="toggle"></div>
    <h2>Contact Us or Request</h2>
    <div class="scroll">
    <form name="webgame-contact-form">
      <input type="text" name="nama" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" autocomplete="" required="">
      <textarea placeholder="Message here.." required="" name="pesan"></textarea>
      <input type="submit" name="" value="Send" onclick="alert('Terima Kasih! Pesan Sudah Terkirim.')">
    </form>
    </div>
  </div>
  <!--//contact us-->
		<!--post-slider-->
		<div class="post-slider">
			<h1 class="slider-tittle">Trending Game</h1>
			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">

				<div class="post">
					<figure>
					<a href="game/trending/apex.html">
					<img src="game/image/apex/apex.jpg" alt="apex legend" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/apex.html"> Apex Legends</a></h4>
					<br>
					<div class="span">Publisher : Electronic Arts</div>
					<div class="span">Genre     : <a href="">Action </a>|<a href="">Adventure </a>|<a href="">Free to Play</a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> 5 Nov, 2020</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/overwatch.html">
					<img src="game/image/over/overwatch.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/overwatch.html"> Overwatch</a></h4>
					<br>
					<div class="span">Publisher : Blizzard Arts</div>
					<div class="span">Genre     : <a href="GenreRpg.html">FPS </a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> May 24, 2016</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/fortnite.html">
					<img src="game/image/fortnite/fortnite.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/Fortnite.html"> Fortnite</a></h4>
					<br>
					<div class="span">Publisher : Epic Games</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Survival </a>|<a href="Genreanm.html">Battle Royale</a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Des 17, 2020</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/pubg.html">
					<img src="game/image/pubg/pubg.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/pubg.html">PUBG</a></h4>
					<br>
					<div class="span">Publisher : KRAFTON, Inc</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a>|<a href="Genreanm.html">Adventure</a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Dec 21, 2017</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/rk.html">
					<img src="game/image/rk/rk.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/rk.html"> Rocket League</a></h4>
					<br>
					<div class="span">Publisher :  Psyonix LLC</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a>|<a href="Genreanm.html">Racing </a>|<a href="Genreanm.html">Sports</a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Jul 7, 2015</i> 
				  </div>
				</div>
				 
				<div class="post">
					<figure>
					<a href="game/trending/dota2.html">
					<img src="game/image/dota2/dota2.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/dota2.html">DOTA 2</a></h4>
					<br>
					<div class="span">Publisher : Valve</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a>|<a href="Genreanm.html">Strategy</a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Jul 10, 2013</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/csgo.html">
					<img src="game/image/csgo/csgo.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/csgo.html">Counter-Strike: Global Offensivegit </a></h4>
					<br>
					<div class="span">Publisher : Valve</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Aug 22, 2012</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/bt5.html">
					<img src="game/image/bt5/bt5.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/bt5.html">Battlefield V</a></h4>
					<br>
					<div class="span">Publisher : Electronic Arts</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a></div>
					&nbsp;
					<i class="far fa-calendar-alt">Nov 9, 2018</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/gta5.html">
					<img src="game/image/gta5/gta5.jpg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/gta5.html"> Grand Theft Auto V</a></h4>
					<br>
					<div class="span">Publisher : Rockstar Games</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a>|<a href="Genreanm.html">Adventure></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Apr 14, 2015</i> 
				  </div>
				</div>

				<div class="post">
					<figure>
					<a href="game/trending/mhw.html">
					<img src="game/image/mhw/mhw.jpeg" alt="" class="slider-image">
					</a>
					</figure>
				   <div class="post-info">
					<br>
					<h4><a href="game/trending/mhw.html">Monster Hunter World</a></h4>
					<br>
					<div class="span">Publisher : CAPCOM Co., Ltd.</div>
					<div class="span">Genre     : <a href="GenreRpg.html">Action </a></div>
					&nbsp;
					<i class="far fa-calendar-alt"> Aug 9, 2018</i> 
				  </div>
				</div>
		</div>
	</div>
		<!--//post-slider-->

		<!--content-->
		<div class="content clearfix">
			
			<div class="main-content">
				<h2 class="content-post-title">Released 2021<a class="title-btn" href="">
				<span>Load More</span></a></h2>
				<div class="post">
					<div class="image">
					<figure>
					<img class="image-img" src="image/offline/resident8.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Resident Evil 8</a></div>
					<p class="text-deskripsi"><span>Genre : Action</span>
					</p>
					</div>
					<figcaption><a href="">Resident Evil Village</a></figcaption>
					</figure>
					</div>
					
					<div class="image">
					<figure>
					<img class="image-img" src="image/rilis21/medium.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">The Medium</a></div>
					<p class="text-deskripsi"><span>Genre : Adventure</span> 
					</p>
					</div>
					<figcaption><a href="">The Medium</a></figcaption>
					</figure>
					</div>
					
					<div class="image">
					<figure>
					<img class="image-img" src="image/rilis21/dloop.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Deathloop</a></div>
					<p class="text-deskripsi"><span>Genre : Action </span> 
					</p>
					</div>
					<figcaption><a href="">Deathloop</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/rilis21/outriders.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">OUTRIDERS</a></div>
					<p class="text-deskripsi"><span href="genre.html">Genre : Adventure | Action | RPG</span> 
					</p>
					</div>
					<figcaption><a href="">Outriders</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/rilis21/nier.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">NieR Replicant</a></div>
					<p class="text-deskripsi"><span href="genre.html">Genre : Acion | Adventure | RPG</span> 
					</p>
					</div>
					<figcaption><a href="">NieR Replicant</a></figcaption>
					</figure>
					</div>
					</div>
				
					<h2 class="content-post-title">Older Games<a class="title-btn" href="">
				<span>Load More</span></a></h2>
					<div class="post">
					<div class="image">
					<figure>
					<img class="image-img" src="image/jadul/aoe2.png" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Age of Empires II</a></div>
					<p class="text-deskripsi"><span href="genre.html">Genre : Strategy</span> 
					</p>
					</div>
					<figcaption><a href="">Age of Empires II</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/jadul/diablo.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Diablo</a></div>
					<p class="text-deskripsi"><span href="genre.html">Genre : Strategy</span> 
					</p>
					</div>
					<figcaption><a href="">Diablo</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/jadul/ds2.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Deadly Sins 2</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : Casual | RPG</a> 
					</p>
					</div>
					<figcaption><a href="">Deadly Sins 2</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/jadul/ff2.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Final Fantasy II</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : JRPG</a> 
					</p>
					</div>
					<figcaption><a href="">Final Fantasy II</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/jadul/cs.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Counter Strike</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : Action | FPS</a> 
					</p>
					</div>
					<figcaption><a href="">Counter Strike</a></figcaption>
					</figure>
					</div>
				</div>
				<h2 class="content-post-title">Games Offline<a class="title-btn" href="">
				<span>Load More</span></a></h2>
				<div class="post">
					<div class="image">
					<figure>
					<img class="image-img" src="image/offline/sims4.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">The Sims 4</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : </a> 
					<a href="GenreRpg.html">Casual</a> | <a href="Genreanm.html">Simulation</a>
					</p>
					</div>
					<figcaption><a href="">The Sims 4</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/offline/cod4.png" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Call of Duty 4</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : </a> 
					<a href="GenreRpg.html">Action</a> 
					</p>
					</div>
					<figcaption><a href="">Call of Duty 4 </a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/offline/osu.png" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Osu!</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : </a> 
					<a href="GenreRpg.html">Music</a>
					</p>
					</div>
					<figcaption><a href="">Osu!</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/offline/gta5.png" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">GTA V</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : </a> 
					<a href="GenreRpg.html">Action</a> | <a href="Genreanm.html">Adventure</a>
					</p>
					</div>
					<figcaption><a href="">GTA V</a></figcaption>
					</figure>
					</div>

					<div class="image">
					<figure>
					<img class="image-img" src="image/offline/dq11.jpg" alt="apex">
					<a class="image-linked"href="index.html">
					<div class="image-overlay"></a>
					<div class="image-tittle"><a href="">Dragon Quest XI</a></div>
					<p class="text-deskripsi"><a href="genre.html">Genre : </a> 
					<a href="GenreRpg.html">Rpg</a> | <a href="Genreanm.html">Adventure</a>
					</p>
					</div>
					<figcaption><a href="">Dragon Quest XI</a></figcaption>
					</figure>
					</div>
				</div>
			</div>

			<!--sidebar content-->
			<div class="sidebar">
				<article class="widget">
					<div class="sidebar-content">
						<div class="sidebar-header side-header-margin">
							<h2 class="h2_sidebar">Recommended Game</h2>
						</div>
						<ul>
							<li class="content-unit">
								<span class="recom">1</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/gensokyo.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Gensokyo Night Festival</a>
									</h3>
									<span class="info pt8"> Genre : Action | Casual | Indie </span>
									<br>
									<span class="players pb8">14 Oct, 2019</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">2</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/disgaea.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Disgaea 5 Complete</a>
									</h3>
									<span class="info pt8">Genre : RPG | Strategy </span>
									<br>
									<span class="players pb8">23 Oct, 2018</span>
								</div> 
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">3</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/cyberpunk.jpeg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Cyberpunk 2077</a>
									</h3>
									<br>
									<span class="info pt8">Genre : Rpg</span>
									<br>
									<span class="players pb8">10 Dec, 2020</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">4</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/codwarzone.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Call of Duty-Warzone</a>
									</h3>
									<span class="info pt8">Genre : FPS | Battle royale </span>
									<br>
									<span class="players pb8">10 March, 2020</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">5</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/phasmophobia.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Phasmophobia</a>
									</h3>
									<br/>
									<span class="info pt8">Genre : Action | Horror </span>
									<br>
									<span class="players pb8">19 Sep, 2020</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">6</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/persona5.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Persona® 5 Strikers</a>
									</h3>
									<span class="info pt8">Genre : Action | Adventure </span>
									<br>
									<span class="players pb8">23 Feb, 2021</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">7</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/FFXV.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">FINAL FANTASY XV </a>
									</h3>
									<span class="info pt8">Genre : Action | Anime </span>
									<br>
									<span class="players pb8">7 Mar, 2018</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">8</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/ragnarokfl.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Ragnarok Forever Love</a>
									</h3>
									<span class="info pt8">Genre : MMORPG | Adventure  </span>
									<br>
									<span class="players pb8">7 Sep, 2019</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">9</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/invaxion.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">音灵 INVAXION</a>
									</h3>
									<span class="info pt8">Genre : Casual | Rhythm </span>
									<br>
									<span class="players pb8">20 Dec, 2018</span>
								</div>
							</li>
						</ul>
						<ul>
							<li class="content-unit">
								<span class="recom">10</span>
								<p class="data-image">
									<a class="image-side" href="">
									<img src="image/rekom/neptunia.jpg" width="50" height="70" alt="">
									</a>
								</p>
								<div class="data">
									<h3 class="h3_side">
										<a class="title-data" href="">Neptunia Virtual Stars</a>
									</h3>
									<span class="info pt8">Genre : Action | Adventure | RPG </span>
									<br>
									<span class="players pb8">30 Mar, 2021</span>
								</div>
							</li>
						</ul>
					</div>
				</article>
			</div>

		</div>
		<!--//content-->

		<!--//footter-->
		<footer>
			<div class="footer-content">
				<div class="left box">
					<h2> About This Page </h2>
					<div class="footer-deskripsi">
						<p>Web Masih Dalam Tahap Pengembangan</p>
						<div class="social">
							<a href="https://m.facebook.com/profile.php?id=799980220766846" ><span class="fab fa-facebook-f"></span></a>
							<a href="https://www.youtube.com/channel/UCou1EeQYHt9by8LDqvQxrSw"><span class="fab fa-youtube"></span></a>
							<a href="https://github.com/JunedSetiawan"><span class="fab fa-github"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
			<center>
				<span class="credit">Designed By <a href="https://junedsetiawan.github.io">Juned Setiawan</a> | </span>	
				<span class="far fa-copyright"></span><span> 2021 All rights reserved</span>
			</center> 
			</div>
		</footer>

		<!--//footer-->

    <!--javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="script/script.js"></script>
	<script src="https://kit.fontawesome.com/6238fbe12e.js"></script>
</body>
</html>
