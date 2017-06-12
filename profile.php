<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
	<script src="bower_components/webcomponents/webcomponents.js"></script>
	<link rel="import" href="elements.html" />

	<link rel="stylesheet" href="misc/css/app.css" />
</head>

<body fullbleed layout vertical>

	<core-drawer-panel id="drawerPanel">
		<core-header-panel drawer>
			<core-toolbar>
				<div style="width: 100%;">
				<center>
					<img class="logo" src="misc/img/leggo.png" />
				</center>
				</div>
			</core-toolbar>
			<center>
				<div>
					<img class="user_icon" src="misc/img/doge.jpg" />
				</div>
				<div class="user_name">
					Jay Mark Mateo Balmes
				</div>
			</center>
				
			<core-menu style="margin: 0px;">
				<core-item <?php echo (basename($_SERVER['PHP_SELF']) == "profile.php") ? "active" : ''; ?>>
					<paper-button style="width: 100%; padding-top: 4px; padding-bottom: 4px;">PROFILE<span flex></span></paper-button>
				</core-item>
				<a href="discover.php"><core-item <?php echo (basename($_SERVER['PHP_SELF']) == "discover.php") ? "active" : ''; ?>>
					<paper-button style="width: 100%; padding-top: 4px; padding-bottom: 4px;">DISCOVER<span flex></span></paper-button>
				</core-item></a>
				<br />
				<div>
					<paper-button style="width: 100%; padding-top: 4px; padding-bottom: 4px; background-color: #f0f0f0;" disabled>FILTERS<span flex></span></paper-button>
				</div>
				<div style="padding-left: 20px; padding-right: 20px;">
					<center>
						<paper-icon-button style="color: #666;" icon="maps:local-hotel" title="Accomodations"></paper-icon-button>
						<paper-icon-button style="color: #666;" icon="maps:restaurant-menu" title="Foods"></paper-icon-button>
						<paper-icon-button style="color: #666;" icon="maps:local-bar" title="Bars"></paper-icon-button>
						<br />
						<paper-icon-button style="color: #666;" icon="add-shopping-cart" title="Shops"></paper-icon-button>
						<paper-icon-button style="color: #666;" icon="av:games" title="Games"></paper-icon-button>
						<paper-icon-button style="color: #666;" icon="theaters" title="Theaters"></paper-icon-button>
					</center>
				</div>
				<div class="footloose">
					<br />
					&copy; TEAM G, 2015
					<br />
					Powered by Polymer
				</div>
			</core-menu>
		</core-header-panel>
		<core-header-panel main>
			<core-toolbar>
				<core-icon-button id="navicon" icon="menu">
				</core-icon-button>
				<div style="color: #eee;">PROFILE</div>
				<span flex></span>
			</core-toolbar>

			<div class="prof">
				<center>
					
					<img class="profile_icon" src="misc/img/doge.jpg" />

					<br />

					<div style="background-color: rgba(20, 20, 20, 0.6); padding-top: 2px; padding-bottom: 2px;">
						<h1 style="color: #fff;">Jay Mark Mateo Balmes</h1>
						<p style="color: #bbb; font-size: 1.4em;">Entertain me like one of your french boys! I don't make lavvv, I *dance* hard!</p>
					</div>
					
					<p>
						<paper-button style="background-color: #999; color: #fff;" disabled raised>Hey! This is you!</paper-button>
					</p>

					<br />

				</center>
			</div>
			
			<div class="content">

				<h1>Recent Activity</h1>

				<br />

				<center>
				
				<paper-shadow class="card" z="2" style="background: url('misc/img/01.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: center;" flex>
						<paper-button style="background-color: green;" raised>DONE</paper-button>
						<paper-button style="background-color: red;" raised>CANCEL</paper-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow class="card" z="2" style="background: url('misc/img/16.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: center;" flex>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #ccc;" icon="star"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow class="card" z="2" style="background: url('misc/img/18.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: center;" flex>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #ccc;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #ccc;" icon="star"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow class="card" z="2" style="background: url('misc/img/21.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: center;" flex>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
						<paper-icon-button style="color: #fa0;" icon="star"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				</center>

				<br />
				<br />

				<p style="text-align: right;">
					<paper-button style="background-color: #0D4B83; color: #fff;" raised>MORE</paper-button>
				</p>


			</div>

		</core-header-panel>
	</core-drawer-panel>

	<script src="misc/js/app.js"></script>

</body>

</html>