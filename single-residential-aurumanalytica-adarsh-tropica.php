<?php

/**
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      28/08/2018
 *
 * @package Neve
 */

$container_class = apply_filters('neve_container_class_filter', 'container', 'single-post');

get_header();
?>

<?php
$image_url = do_shortcode('[acf field="property_banner"]');
?>
<?php get_template_part('template-parts/project-single-sticky-sidebar'); ?>
<?php get_template_part('template-parts/project-single-sticky-sidebar-mobile'); ?>

<section style="background-image: url('<?php echo $image_url; ?>');" class="ps--banner page-banner pt-100 pt-md-130 spb-50">
  <div class="container"><!--Container Start-->
  </div><!--Container End-->
</section>

<section class="ps-description-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="ps-description-inner">
      <div class="ps-description-title"><span>Adarsh Premium Apartments</span></div>
      <div class="ps-description">
      <h1 class="prj-name">Adarsh Tropica </h1>
        <div class="psd-address">Off Sarjapur Road</div>
        <p>Adarsh Tropica Phase II gracefully transcends the charm of its predecessor, elevating every aspect of your living experience to extraordinary heights. With homes meticulously crafted to perfection, coupled with upgraded specifications and enhanced amenities, we have curated an environment where comfort, convenience and joy seamlessly intertwine.
        </p>
        <div class="collapse" id="txtExpand"><!--collapse start-->
          <p>Indulge in the opulence of our expansive 2.5 & 3 BHK premium homes located off Sarjapur road, designed with an eye for refinement. Savor the luxury of vast, verdant green spaces that promise serenity, and revel in world-class facilities that cater to your every need.
          </p>
          <p>Embrace a lifestyle that's in perfect harmony with nature, but with all the modern luxuries you deserve. Each home now comes with state-of-the-art features that elevate your day-to-day living, all while being surrounded by lush landscapes, dedicated play zones, and vibrant community spaces.
          </p>
        </div>
        <button class="rm--btn mt-1" type="button" data-bs-toggle="collapse" data-bs-target="#txtExpand" aria-expanded="false" aria-controls="txtExpand" id="readMoreBtn">Read More</button>
        <!--collapse end-->
      </div>
    </div> <!-- maxwidth End -->
  </div><!--Container End-->
</section>

<section class="ps-video-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="max-1080">
      <iframe width="100%" src="https://www.youtube.com/embed/ozOg2LaxSXg" title="Adarsh Parkland Walkthrough" frameborder="0" allowfullscreen></iframe>
    </div> <!-- maxwidth End -->
  </div><!--Container End-->
</section>

<section class="ps-project-details-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="row gx-md-5"><!--row start-->
      <div class="col-lg-6"> <!--col start-->
        <div class="ps-project-details">
          <div class="ps-sec-title">
            <h3>Project Details</h3>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                
                <tr>
                  <th scope="row" class="ps-0">2.5 BHK</th>
                  <td><strong>Super Built-up Area</strong> <br>1385 – 1395 Sq.Ft.</td>
                <td style="vertical-align: middle;">
                    <a href="#" class="text-blue" rel="noopener" data-bs-toggle="modal" data-bs-target="#FloorPlanModal" data-floorplan="1"><strong>View Floor Plan</strong></a>
                  </td>

                </tr>
                <tr>
                  <th scope="row" class="ps-0">3 BHK</th>
                  <td><strong>Super Built-up Area</strong> <br>1600 – 1610 Sq.Ft.</td>
               <td style="vertical-align: middle;">
                    <a href="#" class="text-blue" rel="noopener" data-bs-toggle="modal" data-bs-target="#FloorPlanModal" data-floorplan="2"><strong>View Floor Plan</strong></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="ps-0 text-nowrap">Master Plan</th>
                  <td colspan="3"><a href="#" class="text-blue" rel="noopener" data-bs-toggle="modal" data-bs-target="#MasterPlanModal"><strong>View Master Plan</strong></a></td>
                </tr>
                <tr>
                  <th scope="row" class="ps-0">RERA No.</th>
                  <td colspan="2"><strong>Phase I:</strong>
PRM/KA/RERA/1251/446/PR/111022/005309<br><strong>Phase II:</strong>
PRM/KA/RERA/1251/446/PR/010325/007535</td>
                </tr>
              </tbody>
            </table>
          </div><!--table end-->
        </div><!--ps project details end-->
      </div><!--col end-->
      <div class="col-lg-6 mt-3 mt-lg-0"> <!--col start-->
        <div class="ps-enquire-form site--form">
          <small class="text-uppercase">Enquire</small>
          <p class="txt-20 mt-2">Fill up the form below and we will get in touch with you</p>
          	<form action="<?php echo get_stylesheet_directory_uri(); ?>/form/projectenquirysubmit.php" method="POST" class="single-prj-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="f_name" name="f_name" class="form-control" placeholder="First Name*" required>
							</div>

							<div class="col-md-6">
								<input type="text" id="l_name" name="l_name" class="form-control" placeholder="Last Name*" required>
							</div>

							<div class="col-md-6">
								<input type="email" id="email" name="email" class="form-control" placeholder="Email Address*" required>
							</div>

							<div class="col-md-6">
							<input type="text" id="project" name="project" class="form-control s-prj" readonly required>
							</div>

							<div class="col-md-12">
								<input type="tel" id="phonefax" name="phonefax" class="form-control" placeholder="Phone Number*" required>
							</div>

							<div class="col-md-12 mb-3">
								<textarea id="notes" name="notes" class="form-control" placeholder="Type your message here" rows="6"></textarea>
							</div>

							<div class="col-md-12">
								<button type="submit" class="btn bg-black text-white text-uppercase">Submit enquiry</button>
							</div>
						</div>
					</form>
        </div>
      </div><!--col end-->
    </div><!--row end-->
  </div><!--Container End-->
</section>

<section class="ps-amenities-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="ps-sec-title max-50">
      <h3>Amenities</h3>
    </div>
    <div class="d-flex flex-wrap amenities-row">
       <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/tennis-court-icon.png" alt="Tennis Court" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Tennis Court</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/badminton-courts-icon.png" alt="Badminton Courts" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">3 Badminton Courts</p>
        </div>
      </div>
       <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/yoga-aerobics-room-icon.svg" alt="Meditation Pods" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Meditation Pods</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/yoga-lawn-icon.svg" alt="Wellness / Yoga Lawn" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Yoga Lawn</p>
        </div>
      </div>
       <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/jogging-track-icon.svg" alt="Jogging Track" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Jogging Track</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/party-halls-icon.png" alt="Party Halls" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">2 Party Halls</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/amphitheatre-icon.svg" alt="Amphitheatre" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Amphitheatre</p>
        </div>
      </div>
      
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/health-club-with-jacuzzi-icon.svg" alt="Health Club" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Health Club</p>
        </div>
      </div>
          <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/cricket-cum-football-field-icon.svg" alt="Multiplay Court" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Multiplay Court</p>
        </div>
      </div>   
       <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/grocery-store-icon.svg" alt="Grocery Store" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Grocery Store</p>
        </div>
      </div>
    <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/kids-play-on-lawn-icon.svg" alt="Kid's Play Area" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Kid's Play Area</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/play-lawn-icon.png" alt="Play Lawn" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Play Lawn</p>
        </div>
      </div>
     
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/swimming-pool-icon.svg" alt="Swimming Pool" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Swimming Pool</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/aerobics-icon.svg" alt="aerobics" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Aerobics</p>
        </div>
      </div>
       <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/alcove-seating-icon.svg" alt="Seating Alcove" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Seating Alcove</p>
        </div>
      </div>
    </div>
    <p class="mb-0 text-end fw-bold txt-16">...and 30+ more</p>
  </div><!--Container End-->
</section>
<section class="ps-project-gallery-sec spb-50 lbox-sec">
  <div class="container"><!--Container Start-->
    <div class="ps-sec-title max-50">
      <h3>Project Gallery</h3>
    </div>
    <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item mx-2" role="presentation">
    <button class="nav-link active gallery-tab-btn" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Exterior</button>
  </li>
  <li class="nav-item mx-2" role="presentation">
    <button class="nav-link gallery-tab-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Interior</button>
  </li>
 
</ul>
<div class="tab-content pt-md-3" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">    <div class="row gx-1 gx-md-3 ps-project-gallery-row"><!--row start-->
      <div class="col-4 ps-pg-col2"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-11.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img1.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Elevation</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->      
      </div><!--col end-->
      <div class="col-4 ps-pg-col1"> <!--col start-->
      <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-12.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img2.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Club House</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-16.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img7.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Landscape</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      <div class="col-4 ps-pg-col3"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-14.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img4.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Multiplay Court</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      
<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-15.jpg" data-fancybox="gallery">
          </a>
     

         
    </div><!--row end--></div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">    <div class="row gx-1 gx-md-3 ps-project-gallery-row"><!--row start-->
      <div class="col-4 ps-pg-col2"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-17.jpg" data-fancybox="gallery1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img5.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Dining Room</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->      
      </div><!--col end-->
      <div class="col-4 ps-pg-col1"> <!--col start-->
      <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-19.jpg" data-fancybox="gallery1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img6.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Kids Room</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-13.jpg" data-fancybox="gallery1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img3.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Living Room</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      <div class="col-4 ps-pg-col3"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-18.jpg" data-fancybox="gallery1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-tropica/atp-gallery-img8.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Master Bedroom</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      

           <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-tropica/large/atp-gallery-img-20.jpg" data-fancybox="gallery1">
          </a>
    </div><!--row end--></div>
 
</div>

  </div><!--Container End-->
</section>
<section class="ps-construction-gallery-sec spb-50 lbox-sec">
  <div class="container"><!--Container Start-->
    <div class="d-md-flex justify-content-md-between align-items-md-center hdng-sec">
    <div class="ps-sec-title max-50 mb-0">
      <h3 class="mb-0">Construction Gallery</h3>
    </div>
    <p class="fw-bold my-md-0 mt-2">Gallery Updated On August 2025</p>
    </div> 
    <h4 class="mb-4">Phase 1</h4>
    <div class="row gx-1 gx-md-3 mb-5"><!--row start-->

       <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 South Elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 1 South Elevation">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 South Elevation.jpeg" class="img-fluid" alt="Block 1 South Elevation">
          </div>            
            <div class="ps-pg-item-text">Block 1 South Elevation</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      
      <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 South & West elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 1 South & West Elevation">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 South & West elevation.jpeg" class="img-fluid" alt="Block 1 South & West Elevation">
          </div>            
            <div class="ps-pg-item-text">Block 1 South & West Elevation</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      
           <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 East elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 1 East Elevation">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 East elevation.jpeg" class="img-fluid" alt="Block 1 East Elevation">
          </div>            
            <div class="ps-pg-item-text">Block 1 East Elevation</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
        <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 West elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 1 West Elevation">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 painting work (2).jpeg" data-fancybox="construction-gallery" data-caption="Block 1 Painting Work">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 1 wing B painting work  (1).jpeg" data-fancybox="construction-gallery" data-caption="Block 1 Wing B Painting Work">
        </a>
      </div>
             <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 2 East elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 2 East Elevation">
        </a>
      </div>
         <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 2 South elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 2 South Elevation">
        </a>
      </div>
      
         <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 2 East & South elevation.jpeg" data-fancybox="construction-gallery" data-caption="Block 2 East & South Elevation">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block 2 external paint work.jpeg" data-fancybox="construction-gallery" data-caption="Block 2 External Paint Work">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Phase -1 block -2 north side Driveway wet Mix laying and compaction work.jpeg" data-fancybox="construction-gallery" data-caption="Phase 1 Block 2 North Side Driveway Wet Mix Laying and Compaction Work">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Phase -1 block -2 west side Driveway wet Mix laying and compaction work.jpeg" data-fancybox="construction-gallery" data-caption="Phase 1 Block 2 West Side Driveway Wet Mix Laying and Compaction Work">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase1/Block - 2 north side Driveway wet Mix first layer work.jpeg" data-fancybox="construction-gallery" data-caption="Block 2 North Side Driveway Wet Mix Layer Work">
        </a>
      </div>
    </div><!--row end-->
    <h4 class="mb-4">Phase 2</h4>
    <div class="row gx-1 gx-md-3"><!--row start-->
    <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block -3 A & B Wing Raft Concrete Completed.jpeg" data-fancybox="construction-gallery2" data-caption="Block 3 A & B Wing Raft Concrete Completed">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block -3 A & B Wing Raft Concrete Completed.jpeg" class="img-fluid" alt="Block 3 A & B Wing Raft Concrete Completed">
          </div>            
            <div class="ps-pg-item-text">Block 3 A & B Wing Raft Concrete Completed</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block 3 A&B Wing basement to ground floor sharewall reinforcement work (1).jpeg" data-fancybox="construction-gallery2" data-caption="Block 3 A&B Wing Basement To Ground Floor Shearwall Reinforcement Work">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block 3 A&B Wing basement to ground floor sharewall reinforcement work (1).jpeg" class="img-fluid" alt="Block 3 A&B Wing Basement To Ground Floor Shearwall Reinforcement Work">
          </div>            
            <div class="ps-pg-item-text"> Block 3 A & B Wing Basement To Ground Floor Shearwall Reinforcement Work</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      
         <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block -4 basement floor shear wall concrete work.jpeg" data-fancybox="construction-gallery2" data-caption="Block 4 Basement Floor Shear Wall Concrete Work">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block -4 basement floor shear wall concrete work.jpeg" class="img-fluid" alt="Block 4 Basement Floor Shear Wall Concrete Work">
          </div>            
            <div class="ps-pg-item-text"> Block 4 Basement Floor Shear Wall Concrete Work</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
        <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block 3 A&B Wing basement to ground floor sharewall reinforcement work (2).jpeg" data-fancybox="construction-gallery2" data-caption="Block 3 A&B Wing Basement To Ground Floor Shearwall Reinforcement Work">
          </a>
        </div>
         <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block -4 North side Exit ramp slab concrete work.jpeg" data-fancybox="construction-gallery2" data-caption="Block 4 North Side Exit Ramp Slab Concrete">
          </a>
        </div>
         <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block 4 northside RW back side , soil backfilling.jpeg" data-fancybox="construction-gallery2" data-caption="Block 4 North Side RW Back Side , Soil Backfilling">
          </a>
        </div>
         <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block-4 Ground floor slab steel work.jpeg" data-fancybox="construction-gallery2" data-caption="Block 4 A&B Wing Ground Floor Shearwall Slab Steel Work">
          </a>
        </div>
         <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Block 5 raft excavation work.jpeg" data-fancybox="construction-gallery2" data-caption="Block 5 Raft Excavation Work">
          </a>
        </div>
        <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Clubhouse 1st floor pour 1 shuttering work.jpeg" data-fancybox="construction-gallery2" data-caption="Club House 1st Floor Pour 1 Shuttering Work">
          </a>
        </div>
        <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-tropica/august/phase2/Club house pour 2 slab shuttering Work.jpeg" data-fancybox="construction-gallery2" data-caption="Club house Pour 2 Slab Shuttering Work">
          </a>
        </div>
    </div><!--row end-->
  </div><!--Container End-->
</section>
<section class="ps-specifications-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="ps-sec-title max-50">
      <h3>Specifications</h3>
    </div>

    <div class="accordion site-accord" id="accordionSpec"><!--Accordion Start-->
      <div class="row gx-lg-5"><!--row start-->
        <div class="col-md-6"> <!--col start-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc1" aria-expanded="true"> STRUCTURE </button>
            </h2>
            <div id="spc1" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Seismic zone II compliant RCC structure</li>
                  <li>Masonry walls with 8” /6”/4” cement concrete blocks.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc2" aria-expanded="true"> PLASTERING</button>
            </h2>
            <div id="spc2" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>All internal walls plastered smoothly.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc3" aria-expanded="true"> FLOORING</button>
            </h2>
            <div id="spc3" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Laminated wooden flooring in master bedroom only</li>
                  <li>Good quality vitrified tiles for living, dining, kitchen & other bedrooms</li>
                  <li>Good quality ceramic tiles for balconies, utility area & toilets</li>
                  <li>Good quality vitrified tiles for lift lobbies & corridors</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph13">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc13" aria-expanded="true"> TOILETS</button>
            </h2>
            <div id="spc13" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Good quality vitrified tile dado in all toilets</li>
                  <li>White color wall mounted EWC with health faucet in all toilets</li>
                  <li>Washbasin with granite countertop and single lever mixer</li>
                  <li>Geyser point provision in all toilets</li>
                  <li>False ceiling in all toilets</li>
                  <li>Toughened glass shower partition in master bedroom toilet only</li>
                  <li>Single lever shower mixer in all showers</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc4" aria-expanded="true"> DOORS</button>
            </h2>
            <div id="spc4" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Main door with engineered door frame & shutter with veneer finish</li>
                  <li>Bedroom & toilet doors with engineered door frame & shutter with laminate finish</li>
                  <li>UPVC sliding doors with mosquito mesh for living / bedroom to balcony</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc5" aria-expanded="true"> WINDOWS</button>
            </h2>
            <div id="spc5" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>UPVC sliding windows with mosquito mesh</li>
                  <li>UPVC ventilators with fixed louvers in toilets</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc6" aria-expanded="true">  KITCHEN & UTILITY</button>
            </h2>
            <div id="spc6" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>2 feet dado with ceramic glazed tiles in kitchen</li>
                  <li>Provision for water purifier point in kitchen</li>
                  <li>Provision for washing machine & geyser in utility area</li>
                  <li>Granite counter with stainless steel sink (unfixed)</li>
                  <li>4 feet dado in utility</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->


        </div><!--col end-->
        <div class="col-md-6"> <!--col start-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc7" aria-expanded="true"> PAINTING / POLISHING</button>
            </h2>
            <div id="spc7" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Interior: Plastic emulsion paint</li>
                  <li>Exterior: Texture paint</li>
                  <li>Enamel painting for MS railings</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc8" aria-expanded="true"> PLUMBING</button>
            </h2>
            <div id="spc8" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Good quality CP fittings of reputed make</li>
                  <li>Good quality PVC drainage & storm water pipes</li>
                  <li>Dual piping for fresh water in shower / washbasin / toilet faucet / kitchen and recycled treated water for toilet flushes</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc9" aria-expanded="true"> ELECTRICAL</button>
            </h2>
            <div id="spc9" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>TV, telephone, networking in all bedrooms & living area</li>
                  <li>Electrical AC points in all bedrooms & living area</li>
                  <li>Exhaust fan in all toilets</li>
                  <li>Two Earth Leakage Circuit Breaker (ELCB) for each Flat  (one for AC & heating and the other for lighting)</li>
                  <li>Individual metering for both BESCOM & DG power backup</li>
                  <li>Good quality electrical wires and switches</li>
                  <li>Provision for ceiling fan in living and all bedrooms</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc10" aria-expanded="true"> LIFT</button>
            </h2>
            <div id="spc10" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Passenger & service lift for each block</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph11">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc11" aria-expanded="true"> OTHERS</button>
            </h2>
            <div id="spc11" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Fiber to the home (Data & Voice).</li>
                  <li>Internal telephone cabling/wiring for all apartments.</li>
                  <li>CCTV surveillance for basement & ground floor lift entry in every block.</li>
                  <li>100% power back up for lifts, pumps and lighting in common areas.</li>
                  <li>Power backup for apartments at diversity factor of 0.4.</li>
                  <li>Organic waste converters.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->

          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph12">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc12" aria-expanded="true"> RAIN WATER HARVESTING</button>
            </h2>
            <div id="spc12" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Common rain water harvesting system as per municipal guidelines.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->


        </div><!--col end-->
      </div><!--row end-->
    </div><!--Accordion End-->

  </div><!--Container End-->
</section>


<section class="ps-neighbourhood-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="ps-sec-title max-50">
      <h3>Location</h3>
    </div>
    <div class="row"><!--row start-->   
      <div class="col-12 ps-nh-map-col"> <!--col start-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15557.372613968255!2d77.6962484!3d12.8856424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae13ccc17c0da3%3A0x50b54e4f0c6e939!2sAdarsh%20Tropica!5e0!3m2!1sen!2sin!4v1718695183748!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!--col end-->
    </div><!--row end-->
  </div><!--Container End-->
</section>


<!-- Master plan modal -->
<div class="modal fade master-modal" id="MasterPlanModal" tabindex="-1" aria-labelledby="MasterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <small class="modal-title popup-ttl" id="modalTitle">Download Master Plan</small>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="site--form p-0">
          <p class="txt-20 mt-2">Fill up the form below to proceed</p>
          <!--<?php echo do_shortcode('[contact-form-7 id="46520d7" title="Enquire Form For Master Plan"]'); ?>-->
          	<form action="<?php echo get_stylesheet_directory_uri(); ?>/form/masterplanenquiry.php" method="POST" class="master-prj-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="f_name" name="f_name" class="form-control" placeholder="First Name*" required>
							</div>

							<div class="col-md-6">
								<input type="text" id="l_name" name="l_name" class="form-control" placeholder="Last Name*" required>
							</div>

							<div class="col-md-6">
								<input type="email" id="email" name="email" class="form-control" placeholder="Email Address*" required>
							</div>

							<div class="col-md-6">
							<input type="text" id="project" name="project" class="form-control mp-prj" readonly required>
							</div>

							<div class="col-md-12">
								<input type="tel" id="phonefax" name="phonefax" class="form-control" placeholder="Phone Number*" required>
							</div>

							<div class="col-md-12 mb-3">
								<textarea id="notes" name="notes" class="form-control" placeholder="Type your message here" rows="6"></textarea>
							</div>
<input type="hidden" name="pdf_url" id="pdfUrl" value="https://www.adarshdevelopers.com/pdf/masterplans/master-plan_tropica.pdf">
							<div class="col-md-12">
								<button type="submit" class="btn bg-black text-white text-uppercase">Submit & Download</button>
							</div>
						</div>
					</form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function autofillInterestedProperty() {
    var pageHeading = document.querySelector('h1.prj-name').textContent.trim();
    var interestedField = document.querySelector('.single-prj-form .s-prj[name="project"]');
    
    if (interestedField) {
      interestedField.value = pageHeading;
    }
  }

  // Run instantly when DOM is ready
  document.addEventListener('DOMContentLoaded', autofillInterestedProperty);
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  let selectedFloorPlan = null;
let modalElement = null;
  function handleFloorPlanModal() {
    document.querySelectorAll('[data-floorplan]').forEach(function(el) {
      el.addEventListener('click', function(event) {    
        selectedFloorPlan = event.currentTarget.getAttribute('data-floorplan');   
        const form = document.querySelector('#floorplan-form');
        const pdfUrlInput = document.getElementById('fpdfUrl'); 
        // if (form) {
        //   form.reset();  // Reset form fields
        // }
        let fppdfUrl = '';
        switch (selectedFloorPlan) {
             case '1':
             fppdfUrl = '<?php echo site_url(); ?>/pdf/projects/adarsh-tropica/2.5 BHK.pdf';
              break;
            case '2':
            fppdfUrl = '<?php echo site_url(); ?>/pdf/projects/adarsh-tropica/3 BHK.pdf';
              break;
              
          default:
            fppdfUrl = ''; // If no valid floor plan is selected
        }
        // Set the hidden field's value
        if (pdfUrlInput) {
          pdfUrlInput.value = fppdfUrl;
        }
      });
    });
  }

  handleFloorPlanModal();
});

</script>
<?php
get_footer();
