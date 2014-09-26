 <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <!-- Top Logo Section Start -->
    <section id="logo">
        <div class="row" id="logo">
            <div class="col-md-6 col-md-offset-3">
                <a href="index.php"><img src="images/logo.png" id="logo" class="img-responsive center-block" alt="Welcome To Urban Calm Logo" title="Urban Calm Yin Yoga Studio Dunedin"></a>
            </div>
        </div>
    </section>
    <!-- Top Logo Section End -->
    <!-- Mobile Menu Begins -->
    <div class="mobmenu visible-xs">
    <button type="button" class="btn btn-primary btn-lg btn-block">Home</button>
    <button type="button" class="btn btn-default btn-lg btn-block">Bookings</button>
    <button type="button" class="btn btn-primary btn-lg btn-block">About</button>
    <button type="button" class="btn btn-default btn-lg btn-block">Contact</button>
    </div>
    <!-- Mobile Menu Ends -->
    <!-- Top Menu Section Start -->
    <section id="navigation" class="voffset hidden-xs">
    <div class="container">
        <div class="row nav-height">
            <div class="col-md-10 col-md-offset-1 nav-height nopad">
                <div id="navee" class="nav-height center-block">
                        <ul id="nav-list" class="nav-height navb">
                            <li class="cent-fix nav-height"><a href="about.php" id="pleft" <?php if($currentPage == 'about.php'){echo 'class="active navcss"';} else {echo 'class="navcss"';}?>>ABOUT</a></li>
                            <li class="cent-fix nav-height"><a href="bookings.php" <?php if($currentPage == 'bookings.php'){echo 'class="active navcss"';} else {echo 'class="navcss"';}?>>BOOKINGS</a></li>
                            <li class="cent-fix nav-height"><a href="health-benefits.php" <?php if($currentPage == 'health-benefits.php'){echo 'class="active navcss"';} else {echo 'class="navcss"';}?>>HEALTH BENEFITS</a></li>
                            <li class="cent-fix nav-height"><a href="events.php" <?php if($currentPage == 'events.php'){echo 'class="active navcss"';} else {echo 'class="navcss"';}?>>EVENTS</a></li>
                            <li class="cent-fix nav-height"><a href="teachers.php" <?php if($currentPage == 'teachers.php'){echo 'class="active navcss"';} else {echo 'class="navcss"';}?>>TEACHERS</a></li>
                            <li class="cent-fix nav-height" id="noborder"><a href="contact.php" id="pright" <?php if($currentPage == 'contact.php'){echo 'class="active navcss"';} else {echo 'class="navcss"';}?>>CONTACT</a></li>
                        </ul>
                    </div>​
                </div>
            </div>
        </div>
    </section>