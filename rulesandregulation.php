<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Dream Place Hotel</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<?php require_once('Include/links.php'); ?>
	</head>
<body class bg-light>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Dream Place Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active fs-5" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="rooms.php">Rooms</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="dineandlounge.php">Dine and Lounge</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="Facilities.php">Facilities</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More details...
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ContactUs.php">Contact Us</a></li>
                        <li><a class="dropdown-item" href="About.php">About us</a></li>
                        <li><a class="dropdown-item" href="rulesandregulation.php">Rules and Regulation</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Login/Logout button -->
            <div class="d-flex">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="navbar-text me-3">Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>!</span>
                    <a href="User_logout.php" class="btn btn-danger shadow-none">Logout</a>
                <?php else: ?>
                    <a href="User_type.php" class="btn btn-primary shadow-none me-2">Login</a>
                    <a href="User_Registration.php" class="btn btn-primary shadow-none">Sign up</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->
 
	
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>RULES AND REGULATION</h3></strong>
				<br />
				<strong><h4 style = "color:#ff0000;">1. Tariff</h4></strong>
				<p>The tariff is for the room only and is exclusive of any government taxes applicable Meals and other services are available at extra cost . To know your room tariff, please contact the Duty Manager, guest registration forms must be signed on arrivals. </p>
				<br />
				<strong><h4 style = "color:#ff0000;">2. Settlement of Bills</h4></strong>
				<p>Bills must be settled on presentation, personal cheques are not accepted.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">3. Company's Lien on Guest's Luggage and Belongings</h4></strong>
				<p>In the case of default in payment of dues by a guest, the management shall have the linen on their luggage and belongings, and be entitled to detain the same and to sell or auction such property at any time without reference to the guest. The net sale proceeds will be appropriate towards the amount due by the guest without prejudice to the management's rights to adopt such further recovery proceedings as my be required.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">4. Check-in</h4></strong>
				<p>Please present your ID card, Passport or Temporary Residence Card upon Check-in. By Law visitors must present personal documents for hotel records. These documents will be returned upon departure.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">5. Departure</h4></strong>
				<p>Check out time is ( mention your checkout time here ) please inform the reception if you wish to retain your room beyond this time. Extension will be given depending on the availability . If the room is available, normal tariff will be charged. On failure of the guest to vacate the room on expiry or period the management shall have the right to remove the guest and his/her belongings from the room occupied by the Guest.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">6. Luggage Storage</h4></strong>
				<p>Subject to availability of the storage space, the guest can store luggage in the luggage room, at the guest's sole risk as to loss or damage from any cause, Luggage may not be stored for period of over 30 days.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">7. Pets</h4></strong>
				<p>Mention your policy for Pets ( allowed or not- allowed ) (Allow us to make separate arrangements. )</p>
				<br />
				<strong><h4 style = "color:#ff0000;">8. Hazardous Goods</h4></strong>
				<p>Bringing goods and / or storing of raw or exposed cinema films, or any other article of a combustible or hazardous nature and / or prohibited goods and / or goods of objectionable nature is prohibited.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">9. Damage to Property</h4></strong>
				<p>The guest will be held responsible for any loss or damage to the hotel property caused by themselves, their guests or any person for whom they are responsible.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">10. Management's Rights</h4></strong>
				<p>It is agreed that the guest will conduct him/ herself in a respectable manner and will not cause any nuisance or annoyance within the hotel premise.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">11. Relation between Management and Guest</h4></strong>
				<p>Nothing herein above shall continue or be deemed to constitute, or create any tenancy or sub-tenancy , or any other right to interact in the hotel premises or any part of portion thereof, in favour of any Guest or resident or visitor, and the Management shall always be deemed to be in full and absolute possession of the whole of the hotel premises.</p>
				<br />
				<strong><h4 style = "color:#ff0000;">12. Government rules and regulations and application of laws</h4></strong>
				<p>Guest are requested to observe , abide by confirm to and be bound by all applicable acts and laws and Government rules and regulations in force from time to time.</p>
				<br />
			</div>
		</div>
	</div>
	<br />
	<br />
	<!-- Footer start -->
	<?php require('Include/Footer.php'); ?>
	<!-- Footer end -->
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>