<?php
/*
Template Name: Homepage Custom
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">
				      <div class="topContainer twelvecol first clearfix">
				      <div class="slideshowContainer eightcol first clearfix">
				        <?php 
                    if( function_exists('rslider') ) { 
                        rslider(1);
                    } 
                ?>
              </div>
              <div class="messageBox fourcol last clearfix">
                <h1>Our Mission</h1>
                <p>We seek to ease the shared emotional, psychological, and financial duress common during times of loss and crisis for job seekers, couples experiencing loss and or obstacles to building their families, and their friends and family members.</p>
                <p>We aim to eliminate their feelings of hopelessness, isolation, and shame, and replace them with renewed hope, opportunity, and a sense of empowerment to control the outcome of their own destinies.</p>
              </div>
              </div><!-- topContianer -->
              <span class="banner-message">Providing Hope - Creating Opportunity</span>
              <div class="twelvecol clearfix visionBox">
                <div class="threecol first">
                  <h2>Our Vision</h2>
                  <p>Hiring for Hope (HFH) aims to forge a mutually beneficial financial relationship between employers and three distinct demographic groups whose disillusionment at their circumstances has resulted in a shared loss of hope: job seekers, couples experiencing a loss and/or obstacles to building their families, and their friends and family members.</p>
                </div><!-- Our Vision -->
                <div class="ninecol last howitworks">
                  <h2>How This Works</h2>
                  <ol>
                    <li class="fourcol first">We utilize the contacts in our national database and Voices Of Hope job seeker social network to match the hiring needs of employers with the skill sets of our job seekers. Then we connect and introduce the two parties.</li>
                    <li class="fourcol">When a hiring placement is made, we receive a fee from the employer for making the introduction and helping them fill their open position.</li>
                    <li class="fourcol last">The fees collected from these job placements, along with the funding realized from our Business Partnership Program and national fundraising efforts,  make it possible for us to provide all of our free services and fund our Brave Little Soul Grant Program.</li>
                  </ol>
                </div><!-- How This Works -->
              </div><!-- visionBox -->
              <hr />
              <div class="whoweserve twelvecol clearfix">
                <h1>Who We Serve</h1>
                <div class="threecol first">
                  <h2>Couples</h2>
                  <p>Anyone who has experienced the loss of a child and/or is experiencing an obstacle to building their family.</p>
                  <a href="#">Learn More</a>
                </div>
                <div class="threecol">
                  <h2>Job Seekers</h2>
                  <p>Anyone needing assistance with the career management process.</p>
                  <a href="#">Learn More</a>
                </div>
                <div class="threecol">
                  <h2>Friends/Family</h2>
                    <p>Anyone supporting a loved one who has lost a child; is experiencing an obstacle to building their family and/or is in career transition.</p>
                    <a href="#">Learn More</a>
                </div>
                <div class="threecol last">
                  <h2>Employers/Partners</h2>
                    <p>Any organization who has a workforce challenge and/or would like to become a business partner</p>
                    <a href="#">Learn More</a>
                </div>
              </div><!-- WhoWeServe -->
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
						      
						    </header> <!-- end article header -->
					
						    <section class="entry-content">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
			
							    <p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
					
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>