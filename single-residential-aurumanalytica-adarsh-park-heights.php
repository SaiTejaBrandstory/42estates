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
      <div class="ps-description-title"><span>Adarsh Luxury Apartments</span></div>
      <div class="ps-description">
        <h1 class="prj-name">Adarsh Park Heights Apartments</h1>
        <div class="psd-address">Gunjur, East Bengaluru. </div>
        <p>Adarsh Park Heights offers the perfect blend of nature and urban living, nestled in lush greenery and conveniently close to Bengaluru’s major IT hubs. Situated just off Varthur Road, this property provides seamless access to the city’s renowned Silicon Triangle — <a href="https://www.adarshdevelopers.com/" class="inter-lnks text-decoration-none">Whitefield</a>, Outer Ring Road (East), and Electronic City—the top three IT zones in Bengaluru.
        </p>

        <div class="collapse" id="txtExpand"><!--collapse start-->
          <p>This premium high-rise features spacious 2 and 3-bedroom apartments, complemented by a luxurious 52,000 sq. ft. clubhouse. <a href="https://www.adarshdevelopers.com/project/residential/" class="inter-lnks text-decoration-none">The property</a> is also located near top schools, hospitals, and shopping centers, making it a prime example of well-connected urban living at its best.
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
      <iframe width="100%" src="https://www.youtube.com/embed/GJGQmjsTdNo" title="Adarsh Park Heights Apartments" frameborder="0" allowfullscreen></iframe>
    </div> <!-- maxwidth End -->
  </div><!--Container End-->
</section>

<section class="ps-project-details-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="row gx-md-5"><!--row start-->
      <div class="col-lg-7"> <!--col start-->
        <div class="ps-project-details">
          <div class="ps-sec-title">
            <h3>Project Details</h3>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row" class="ps-0">Type - 3A BHK</th>
                  <td><strong>Super Built-up Area</strong> <br> 1860 Sq. Ft.</td>
                  <td style="vertical-align: middle;">
                    <a href="#" class="text-blue" rel="noopener" data-bs-toggle="modal" data-bs-target="#FloorPlanModal" data-floorplan="1"><strong>View Floor Plan</strong></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="ps-0 text-nowrap">Master Plan</th>
                  <td colspan="3"><a href="#" class="text-blue" rel="noopener" data-bs-toggle="modal" data-bs-target="#MasterPlanModal"><strong>View Master Plan</strong></a></td>
                </tr>
                <tr>
                  <th scope="row" class="ps-0">RERA No.</th>
                  <td colspan="2"><strong>Phase I:</strong> PRM/KA/RERA/1251/446/PR/210525/004163<br> 
                  <strong>Phase II:</strong> PRM/KA/RERA/1251/446/PR/200923/006275</td>
                </tr>
              </tbody>
            </table>
          </div><!--table end-->
        </div><!--ps project details end-->
      </div><!--col end-->
      <div class="col-lg-5 mt-3 mt-lg-0"> <!--col start-->
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
    <div class="d-flex justify-content-xl-between flex-wrap amenities-row">
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/restaurant-icon.svg" alt="Restaurant" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Restaurant</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/gym-icon.svg" alt="Gym" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Gym</p>
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/mini-golf-icon.svg" alt="Mini Golf" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Mini Golf</p>
        </div>
      </div>

      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/kids-pool-icon.svg" alt="Kid’s Pool" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Kid’s Pool</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/banquet-halls-icon.svg" alt="Banquet Hall" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Banquet Hall</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/kids-play-on-lawn-icon.svg" alt="Childrens’ Play Area" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Childrens’ Play Area</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/volleyball-court-icon.svg" alt="Volleyball Court" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Volleyball Court</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/tennis-court-icon.png" alt="Tennis Courts" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Tennis Courts</p>
        </div>
      </div>

      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/indoor-games-icon.svg" alt="Indoor Games" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Indoor Games</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/cricket-practice-net-icon.svg" alt="Cricket Practice Pitch" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Cricket Practice Pitch</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/multi-purpose-lawn-icon.svg" alt="Multi-purpose Lawn" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Multi-purpose Lawn</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/basket-ball-court-icon.png" alt="Basketball Court" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Basketball Court</p>
        </div>
      </div>
      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/badminton-courts-icon.png" alt="Badminton Courts" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Badminton Courts</p>
        </div>
      </div>

      <div class="cols">
        <div class="amenities-icon-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/amenities/cricket-cum-football-field-icon.svg" alt="Cricket cum Football Field" class="img-fluid mb-3">
          <p class="mb-0 fw-normal">Cricket cum Football Field</p>
        </div>
      </div>

    </div>
    <p class="mb-0 text-end fw-bold txt-16">...and 45+ more</p>
  </div><!--Container End-->
</section>

<section class="ps-project-gallery-sec spb-50 lbox-sec">
  <div class="container"><!--Container Start-->
    <div class="ps-sec-title max-50">
      <h3>Project Gallery</h3>
    </div>
    <div class="row gx-1 gx-md-3 ps-project-gallery-row"><!--row start-->
      <div class="col-4 ps-pg-col1"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/Interior/large/03-adarsh-park-heights.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-park-heights/aph-gallery-img1.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Kitchen</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/Interior/large/01-adarsh-park-heights.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-park-heights/aph-gallery-img2.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Living Room</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      <div class="col-4 ps-pg-col2"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/large/02-adarsh-park-heights.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-park-heights/aph-gallery-img3.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Children’s Play Area</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      <div class="col-4 ps-pg-col3"> <!--col start-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/Interior/large/02-adarsh-park-heights.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-park-heights/aph-gallery-img4.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Dining Room</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
        <div class="ps-pg-item"><!--item start-->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/Interior/large/06-adarsh-park-heights.jpg" data-fancybox="gallery">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/adarsh-park-heights/aph-gallery-img5.jpg" class="img-fluid" alt="img">
            <div class="ps-pg-item-text">Master Bedroom</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div><!--item end-->
      </div><!--col end-->
      <div class="ps-pg-item hidden-gallery-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/Interior/large/04-adarsh-park-heights.jpg" data-fancybox="gallery"></a>
      </div>
      <div class="ps-pg-item hidden-gallery-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/Interior/large/05-adarsh-park-heights.jpg" data-fancybox="gallery"></a>
      </div>

      <div class="ps-pg-item hidden-gallery-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/large/03-adarsh-park-heights.jpg" data-fancybox="gallery"></a>
      </div>
      <div class="ps-pg-item hidden-gallery-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/large/04-adarsh-park-heights.jpg" data-fancybox="gallery"></a>
      </div>
      <div class="ps-pg-item hidden-gallery-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/large/05-adarsh-park-heights.jpg" data-fancybox="gallery"></a>
      </div>

      <div class="ps-pg-item hidden-gallery-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/gallery/residential/adarsh-park-heights/large/06-adarsh-park-heights.jpg" data-fancybox="gallery"></a>
      </div>
    </div><!--row end-->
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
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block A.jpg" data-fancybox="construction-gallery" data-caption="Block A">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block A.jpg" class="img-fluid" alt="Block A">
          </div>            
            <div class="ps-pg-item-text">Block A</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block B.jpg" data-fancybox="construction-gallery" data-caption="Block B">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block B.jpg" class="img-fluid" alt="Block B">
          </div>            
            <div class="ps-pg-item-text">Block B</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      
        <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block D.jpg" data-fancybox="construction-gallery" data-caption="Block D">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block D.jpg" class="img-fluid" alt="Block D">
          </div>            
            <div class="ps-pg-item-text">Block D</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
        <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block E.jpg" data-fancybox="construction-gallery" data-caption="Block E">
        </a>
      </div>
               
              <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Block F.jpg" data-fancybox="construction-gallery" data-caption="Block F">
        </a>
      </div>
             <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Central pdium works.jpg" data-fancybox="construction-gallery" data-caption="Central Podium Works">
        </a>
      </div> 
    
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/DOORS & WINDOWS.png" data-fancybox="construction-gallery" data-caption="Doors & Windows">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/LOUVERS.jpg" data-fancybox="construction-gallery" data-caption="Louvers">
        </a>
      </div>
      
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/MCB.png" data-fancybox="construction-gallery" data-caption="MCB">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Podium area 1.jpg" data-fancybox="construction-gallery" data-caption="Podium Area 1">
        </a>
      </div>
            <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/Podium area 2.jpg" data-fancybox="construction-gallery" data-caption="Podium Area 2">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/TEXTURE.jpg" data-fancybox="construction-gallery" data-caption="Texture">
        </a>
      </div>
         <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/T1 TEXTURE.jpg" data-fancybox="construction-gallery" data-caption="Tower 1 Texture">
        </a>
      </div>
       <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/T2.jpg" data-fancybox="construction-gallery" data-caption="Tower 02">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/TOWER 1.jpg" data-fancybox="construction-gallery" data-caption="Tower 01">
        </a>
      </div>
       <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/TOWER 2.jpg" data-fancybox="construction-gallery" data-caption="Tower 02">
        </a>
      </div>
      <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/WATER PROOFING.jpg" data-fancybox="construction-gallery" data-caption="Water Proofing">
        </a>
      </div>
       <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase1/WOODEN FLOORING.png" data-fancybox="construction-gallery" data-caption="Wooden Flooring">
        </a>
      </div>
    </div><!--row end-->
    <h4 class="mb-4">Phase 2</h4>
     <div class="row gx-1 gx-md-3"><!--row start-->
      
      <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block G.jpeg" data-fancybox="construction-gallery2" data-caption="Block G">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block G.jpeg" class="img-fluid" alt="Block G">
          </div>            
            <div class="ps-pg-item-text">Block G</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
        <div class="col-md-4"><!--col start-->
      <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block H.jpeg" data-fancybox="construction-gallery2" data-caption="Block H">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block H.jpeg" class="img-fluid" alt="Block H">
          </div>            
            <div class="ps-pg-item-text">Block H</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
      <div class="col-md-4"><!--col start-->
       <div class="construction-item">
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block J.jpeg" data-fancybox="construction-gallery2" data-caption="Block J">
          <div class="image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block J.jpeg" class="img-fluid" alt="Block J">
          </div>            
            <div class="ps-pg-item-text">Block J</div>
            <div class="overlay">
              <span class="plus-symbol">+</span>
            </div>
          </a>
        </div>
      </div><!--col end-->
    
             <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block K.jpeg" data-fancybox="construction-gallery2" data-caption="Block K">
        </a>
      </div>
             <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block L.jpeg" data-fancybox="construction-gallery2" data-caption="Block L">
        </a>
      </div>
              <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/Block M.jpeg" data-fancybox="construction-gallery2" data-caption="Block M">
        </a>
      </div>
       <div class="construction-item">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/construction/residential/adarsh-park-heights/august/phase2/PODIUM 2.jpeg" data-fancybox="construction-gallery2" data-caption="Podium 2">
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
                  <li>Seismic zone II compliant RCC structure.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc2" aria-expanded="true"> PLASTERING </button>
            </h2>
            <div id="spc2" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>All internal walls smoothly finished and painted.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc3" aria-expanded="true"> FLOORING </button>
            </h2>
            <div id="spc3" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Good quality vitrified tile flooring in living, dining & kitchen.</li>
                  <li>Laminated wooden flooring in master bedroom and vitrified tile flooring in other bedrooms.</li>
                  <li>Ceramic tiles for toilets, balconies and utility area.</li>
                  <li>Granite flooring in ground floor lift lobby and vitrified tiles in lift lobbies of all the floors.</li>
                  <li>Vitrified tiles in the kitchen of all flats.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc4" aria-expanded="true"> TOILETS </button>
            </h2>
            <div id="spc4" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Ceramic tile dado in all toilets.</li>
                  <li>EWC and health faucet for all the toilets.</li>
                  <li>Washbasin with granite countertop in all toilets except in common toilet.</li>
                  <li>Toughened glass shower partition in master bedroom toilet only.</li>
                  <li>Single lever shower mixer in all showers and single lever mixer for all washbasins.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc5" aria-expanded="true"> DOORS </button>
            </h2>
            <div id="spc5" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>All doors with engineered door frame and flush door shutter with lamination.All doors with engineered door frame & molded skin panel shutters.</li>
                  <li>UPVC sliding doors with mosquito mesh for living to balcony and bedroom to balcony.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc6" aria-expanded="true"> WINDOWS </button>
            </h2>
            <div id="spc6" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>UPVC sliding windows with mosquito mesh.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc7" aria-expanded="true"> KITCHEN </button>
            </h2>
            <div id="spc7" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Granite platform with stainless steel sink & drain board.</li>
                  <li>2 feet (0.6 m) dado above platform area with ceramic glazed tiles.</li>
                  <li>Provision for water purifier point in kitchen.</li>
                  <li>Provision for washing machine in utility area.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
        </div><!--col end-->
        <div class="col-md-6"> <!--col start-->
        
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc8" aria-expanded="true"> PAINTING / POLISHING </button>
            </h2>
            <div id="spc8" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Interior: Plastic emulsion paint.</li>
                  <li>Exterior: Acrylic emulsion paint.</li>
                  <li>Enamel painting for MS grill / railings.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc9" aria-expanded="true"> PLUMBING </button>
            </h2>
            <div id="spc9" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Good quality CP fittings.</li>
                  <li>Green rated; lead free PVC drainage & storm water pipes.</li>
                  <li>Dual piping system - Freshwater in shower/washbasin/toilet/faucet/kitchen and recycled treated water for toilet flushes.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc10" aria-expanded="true"> ELECTRICAL </button>
            </h2>
            <div id="spc10" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>TV, telephone, networking, and electrical AC points in all bedrooms & living area.</li>
                  <li>Good quality electrical wires and switches.</li>
                  <li>Provision for ceiling fan points in living/dining and all bedrooms.</li>
                  <li>Connected power load 2 BHK & 2.5 BHK — 5 KW, and 3 BHK — 6 KW.</li>
                  <li>100% power backup of allocated power with DG capacity arrived at a diversity factor of 2.0.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph11">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc11" aria-expanded="true"> LIFT </button>
            </h2>
            <div id="spc11" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>2+1 - Passenger and Service lift in the building.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph12">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc12" aria-expanded="true"> TELEPHONE AND NETWORK </button>
            </h2>
            <div id="spc12" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>FTTH - fibre to the home - data & voice connection.</li>
                  <li>Internal telephone cabling/wiring in all apartments.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph13">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc13" aria-expanded="true"> SAFETY AND SECURITY </button>
            </h2>
            <div id="spc13" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>CCTV surveillance at access controlled entry, exit, lift lobbies, lifts and common areas.</li>
                  <li>Project is designed to detect and fight for fire incidents as per National Building Code 2016.</li>
                </ul>
              </div>
            </div>
          </div><!--Accordion item end-->
          <div class="accordion-item"><!--Accordion item start-->
            <h2 class="accordion-header" id="sph14">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#spc14" aria-expanded="true"> OTHERS </button>
            </h2>
            <div id="spc14" class="accordion-collapse collapse" data-bs-parent="#accordionSpec">
              <div class="accordion-body">
                <ul>
                  <li>Rainwater harvesting system as per municipal guidelines.</li>
                  <li>Sewage treatment plant is provided and treated water is connected to all flushing cisterns.</li>
                  <li>Piped gas provision up to utility for all flats.</li>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3888.6574822160287!2d77.7295556!3d12.929722199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDU1JzQ3LjAiTiA3N8KwNDMnNDYuNCJF!5e0!3m2!1sen!2sin!4v1717578846127!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!--col end-->
    </div><!--row end-->
  </div><!--Container End-->
</section>
<section class="ps-compare-sec spb-50">
  <div class="container"><!--Container Start-->
    <div class="table-responsive"><!--table start-->
      <table class="table">
        <tbody>
          <tr>
            <td width="25%" class="cmp-hdng">
              <h3 class="mb-3">Compare Similar Properties</h3>
            </td>
            <td width="25%"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/compare/adarsh-welkin-park-sky-residence.jpg" class="img-fluid" alt="img">
              <p class="mt-2 mb-1"><strong>ADARSH WELKIN PARK APARTMENTS </strong></p>
            </td>
            <td width="25%" class="border-0"></td>
            <td width="25%" class="border-0"></td>
          </tr>
          <tr>
            <td>Location</td>
            <td>Off Sarjapur Road</td>

          </tr>
          <tr>
            <td>Project Status</td>
            <td><span class="text-orange">On-going</span></td>


          </tr>
          <!--<tr>-->
          <!--  <td>Price Range</td>-->
          <!--  <td>1 BHK: Rs. 65.06 to 71.80 Lakhs <br> 2 BHK: Rs. 98.90 Lakhs to 1.07 Crore</td>-->
          <!--  <td>&nbsp;</td>-->
          <!--  <td>&nbsp;</td>-->
          <!--</tr>-->
          <tr>
            <td>&nbsp;</td>
            <td><a href="<?php echo site_url(); ?>/projects/residential/adarsh-welkin-park-apartments/" class="text-blue text-decoration-none"><strong>View Project</strong></a></td>

          </tr>
        </tbody>
      </table>

    </div><!--table End-->
  </div><!--Container End-->
   <div class="badge-banks d-flex align-items-center">
     <!--<p class="mb-0 fw-bold">Phase - 1</p>-->
	<img src="<?php echo site_url(); ?>/wp-content/uploads/2025/08/RBL-logo.png" class="img-fluid">
</div>
</section>


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
              fppdfUrl = '<?php echo site_url(); ?>/pdf/projects/adarsh-park-heights/type_3a_3bhk.pdf';
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


<!-- View floor plan -->

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
<input type="hidden" name="pdf_url" id="pdfUrl" value="https://www.adarshdevelopers.com/pdf/masterplans/masterplan_park-heights.pdf">
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
<?php
get_footer();
