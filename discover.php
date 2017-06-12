<!DOCTYPE html>
<html>
<head>
	<title>EXPLORE</title>
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
				<a href="profile.php"><core-item <?php echo (basename($_SERVER['PHP_SELF']) == "profile.php") ? "active" : ''; ?>>
					<paper-button style="width: 100%; padding-top: 4px; padding-bottom: 4px;">PROFILE<span flex></span></paper-button>
				</core-item></a>
				<core-item <?php echo (basename($_SERVER['PHP_SELF']) == "discover.php") ? "active" : ''; ?>>
					<paper-button style="width: 100%; padding-top: 4px; padding-bottom: 4px;">EXPLORE<span flex></span></paper-button>
				</core-item>
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
				<div style="color: #eee;">EXPLORE</div>
				<span flex></span>
			</core-toolbar>
			
			<div class="content">

			<center>
				
				<paper-shadow id = "1" class="card" z="2" style="background: url('misc/img/01.jpg');">
					<div class="card-caption">
						<a href="https://goo.gl/maps/FjMqT" target="_blank" style="color: #fff; decoration: none;">Try new Jager-soaked patty at Zark's. Average Php 250 per person.</a>
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick="disappear1();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick="disappear1();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick="disappear1();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "2" class="card" z="2" style="background: url('misc/img/02.jpg');">
					<div class="card-caption">
						<a href="https://goo.gl/maps/FjMqT" target="_blank" style="color: #fff; decoration: none;">Taste the new Margarita Fries at Army Navy. Average Php 250 per person.</a>
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear2();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear2();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear2();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "3" class="card" z="2" style="background: url('misc/img/03.jpg');">
					<div class="card-caption">
						<a href="https://goo.gl/maps/FjMqT" target="_blank" style="color: #fff; decoration: none;">Ariel foam party for 7.50. <br /> 2 PM, The usual laba time. 7.50 nalang. It's actually free!</a>
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear3();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear3();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear3();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "4" class="card" z="2" style="background: url('misc/img/04.jpg');">
					<div class="card-caption">
						Sasha Osama Binbama the incredible hunk. Average price P250.00. 20% Discount Limited Offer.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear4();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear4();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear4();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow></a>

				<paper-shadow id = "5" class="card" z="2" style="background: url('misc/img/05.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear5();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear5();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear5();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "6" class="card" z="2" style="background: url('misc/img/19.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear6();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear6();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear6();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "7" class="card" z="2" style="background: url('misc/img/07.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear7();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear7();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear7();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "8" class="card" z="2" style="background: url('misc/img/08.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear8();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear8();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear8();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "9" class="card" z="2" style="background: url('misc/img/09.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear9();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear9();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear9();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "10" class="card" z="2" style="background: url('misc/img/10.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear10();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear10();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear10();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "11" class="card" z="2" style="background: url('misc/img/11.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear11();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear11();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear11();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

				<paper-shadow id = "12" class="card" z="2" style="background: url('misc/img/12.jpg');">
					<div class="card-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					<div class="interact" style="text-align: right;" flex>
					<paper-icon-button style="color: #fa0;" icon="star" onclick= "disappear12();"></paper-icon-button>
						<paper-icon-button style="color: #f22;" icon="clear" onclick= "disappear12();"></paper-icon-button>
						<paper-icon-button style="color: #1d2;" icon="done" onclick= "disappear12();"></paper-icon-button>
					</div>
					</div>
				</paper-shadow>

			</center>

			</div>

		</core-header-panel>
	</core-drawer-panel>

	<script src="misc/js/app.js"></script>

</body>

</html>