<!DOCTYPE HTML>
<html>

		
</body>
</html>

  <title>BlueSky - Home</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script src="index.js"></script>
  
</head>

<body>

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<div class="header">
	                                 <span><h2>BLUESKY USER</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">LOGOUT</a> </p>
    <?php endif ?>
</div>
          <h1><a href="index.html">BlueSky<span class="logo_colour">Airlines</span></a></h1>

        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">HOME</a></li>
          <li><a href="news.php">NEWS</a></li>
          <li><a href="status.php">STATUS</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="aboutus.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
           <li><a href="login.php">LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Reviews</h1>
        <h4>Meagan Smith</h4>
        <h5>March, 2018</h5>
        <p>The A380 is without doubt a large aircraft. As a result it does take longer than usual to board and disembark the aircraft. We had hoped that ours would have the configuration with the twin seats upstairs but unfortunately that wasn't the case. However the seats we chose, beforehand, were comfortable. The facilities are good with a large screen seatback TV with literally hundreds of different things to choose from. However we couldn't help thinking of the old saying about American TV - hundreds of channels and nothing on. We had no trouble finding overhead locker space. The food was very good and there was a good range on complimentary drinks. The staff on-board were efficient and friendly. This was a good flight and we can see why BlueSky have consistently been voted the No.1 Airline.<br /><a href="blog.html">Read more</a></p>
        <h1>BlueSky Social Media</h1>
        <ul>
          <li><a href="http://www.twitter.com">Twitter</a></li>
          <li><a href="http://www.instagram.com">Instagram</a></li>
          <li><a href="http://www.facebook.com">Facebook</a></li>
          <li><a href="http://www.youtube.com">YouTube</a></li>
        </ul>
        
        <h2>News</h2>
        <h3><b>Experts find faults on two more Lion Air Boeing 737 MAX 8</b></h3>
         <br /><a href="news.html">Read more</a></p></p1>
        <h3><b>Passenger Grabs Controls After Pilot Collapses</b></h3>
        <br /><a href="news.html">Read more</a></p></p1>
        <h3><b>First flying prototype of Boeing 777-9x gets its wing</b></h3>
        <br /><a href="news.html">Read more</a></p></p1>
        <h3><b>Southeast Asia's Richest Woman Signs $6.5 Billion Deal For 50 Airbus Jets</b></h3>
        <br /><a href="news.html">Read more</a></p></p1>
        
      </div>
      <div id="content">
        <h1>Make your next adventure more rewarding with BlueSky Airlines.</h1>
        <p>Our family-friendly collection offers the space that you need to get away with your nearest and dearest. Whether you're looking for a design-led city break or a laid-back beach villa, we've hand-picked hotel that offer the space that you need for the perfect family holiday.</p>

<img src="BlueSky-Deals.jpg"width="630" height="310">

        <p>This makes planning travel with the kids easier from the very start.</p>
        <h2>Summer Deals!</h2>
        <img src="BlueSky-Deals2.jpg" class="center">
        <br>
        <p>The Taste of Asia in Mount Maunganui, conveniently located right on the main street, with wide doors opening onto the street for alfresco dining. It is the warm and relaxing place where friends get together, where family members come to have a great meal, and where the business community comes to wine and dine. We have four, long-serving, hand chosen authentic Thai chefs, one with 26 years experience, and a further two chefs (two brothers) each with 16 years experience in creating genuine Thai dishes, and they have helped to create our diverse and flavourful menu to suit every customer, from the extra hot dish to the mild vegetarian. Thai food is internationally famous for being healthy. The herbs used in our dishes not only provide unique flavour, but they also have varying degrees of medicinal and therapeutic benefits. Low in calories but rich in taste.</p>
       
       <img src="BlueSky-Deals3.jpg" class="center">
       <br>
       <p>I started the AFF course last weekend, and it's no exaggeration to say that every single person there helped to make my first jump a success. At some point during the day, pretty much everyone offered encouragement and support; instruction, tips and pointers; and stories of their own successes and failures. And those very few people that didn't communicate with me directly were busy making it happen in other ways: packing, manifest, editing video, piloting the planes, and more. I never felt alone. I never felt like I didn't belong. I never felt as if I was "less than" because I was a beginner. People talked to me at their level and fully expected me to meet them there, which is a form of acceptance and respect that is hard to find. I'm looking forward to continuing this journey and this challenge. And I can't think of any other place I would rather do it. If you've done a tandem and have thought about jumping on your own someday, this is the place to learn how to make that dream come true.</p>
       
       <img src="BlueSky-Deals4.jpg" class="center">
       <br>
       <p>While many of our planet's natural pits and crevices are dank and inhospitable, some contain inviting pools of crystal-clear water, are surrounded by spectacular scenery, and might even have a waterfall for showering off afterwards. Whether you fancy a dip in a sinkhole, a cave or a cliff-side cranny</p>
       
       <img src="BlueSky-Deals5.jpg" class="center">
       <br>
       <p>Possibly the most memorable experience in San Francisco is riding a bike across the Golden Gate Bridge</p>
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; BlueSky Airlines</p>
    </div>
  </div>
</body>
</html>
