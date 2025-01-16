<?php require 'view/partials/header.php';?>

<style>
    .contact-page .page-header {
    background: url(assests/images/contact-bg.jpg) no-repeat center;
}

a {
    color: #262626;
    text-decoration: none !important;
}
</style>

<body class="single-page contact-page">

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-12">
<h1>Contact</h1>
</div>
</div>
</div>
</div>
<div class="contact-page-wrap">
<div class="container">
<div class="row">
<div class="col-12 col-lg-5">
<div class="entry-content">
<h2>Get In touch with us</h2>
<p>Get in touch with Egoigwe Nwanyi Foundation by sending us a message. Know more about us.</p>
<!-- <ul class="contact-social d-flex flex-wrap align-items-center">
<li><a href="#"><i class="fa-solid fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-behance"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul> -->
<ul class="contact-info p-0">
<li><i class="fa fa-phone"></i><span>+34638305208</span></li>
<li><i class="fa fa-envelope"></i><span><a href="" class="__cf_email__" data-cfemail="fc939a9a959f99bc8899918c909d8899d29f9391">mcebenyi2003@yahoo.ca</a></span></li>
<li><i class="fa fa-map-marker"></i><span>3 College Road, Ojome, <br> Umuaram Ikem</span></li>
</ul>
</div>
</div>
<div class="col-12 col-lg-7">
<form class="contact-form" method="post" action="contact">

<?php if (isset($_GET['error'])): ?>
      
      <div style=""
          class="alert alert-<?=$_GET['type']?> alert-dismissible fade show"
          role="alert">
          <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"></button>
          <strong><?=$_GET['error']?></strong> 
      </div>

      <?php endif; ?>
      
<input type="hidden" name="contact">
<input type="text" name="name" placeholder="Name" >

<input type="email" placeholder="Email" name="email" >

<textarea rows="15" cols="6" placeholder="Messages" name="message"></textarea >
<span>
<input class="btn gradient-bg" type="submit" >
</span>
</form>
</div>
<div class="col-12">
<div class="contact-gmap">
<!-- <iframe width="600" height="450" frameborder="0" style="border:0" src="assests/images/googlemap.jpg" allowfullscreen></iframe> -->
</div>
</div>
</div>
</div>
</div>


<?php require 'view/partials/footer.php' ?>