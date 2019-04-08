<?php get_header(); ?>
<body>
      <header>
         <nav class="navbar navbar-expand-lg" id="menu">
            <div class="container">
							 <div class="logotype">
								<?php the_custom_logo( $blog_id ); ?>
							 </div>
							 <?php wp_nav_menu()?>
            </div>
         </nav>
         <div class="container">
            <div class="row">
               <div class="col-md-12 timer">
                  <div class="time">
                     <p class="days">20</p>
                     <span>days</span>
                  </div>
                  <div class="time">
                     <p class="hours">03</p>
                     <span>hours</span>
                  </div>
                  <div class="time">
                     <p class="minutes">06</p>
                     <span>minutes</span>
                  </div>
                  <div class="time">
                     <p class="seconds">52</p>
                     <span>seconds</span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="icons">
                     <img src="img/hero_icon.png" alt="hero icons">
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="welcome" id="welcome">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h2>Welcome!</h2>
                  <p>The biggest envato community meetup in Bangladesh is happening right now! And you can be a part
                     of it too...
                  </p>
                  <p>Get together with members of the Envato community to talk shop, trade war stories, make new 
                     friends and see the faces behind the avatars. Whether you’re an author on Envato Market, a client
                     on Envato Studio, or a learner on Tuts+, you are invited!
                  </p>
                  <p>It doesn’t matter as long as you have the motivation and interest to work at the envato and
                     bring cookies to our event. Just kidding, but we don’t mind having more cookies! ;) Head over 
                     and fill up the sign up form here so that we can keep track of our guests. Don’t forget to 
                     register on our <b>nvite</b> page here too!
                  </p>
               </div>
               <div class="col-md-5">
                  <form action="/">
                     <h2>Sign up for our event</h2>
                     <input class="form-input" type="text" name="name" placeholder="Enter your name" required />
                     <input class="form-input" type="text" name="email" placeholder="Enter your email" required />
                     <input class="form-input" type="text" name="number" placeholder="Phone number" required />
                     <input class="form-input" type="text" name="username" placeholder="Envato Username" required />
                     <div class="button-wrap">
                        <button class="btn btn-submit">Let me in!</button>
                     </div>
                     <p>Hurry up, Limited seats availble</p>
                     <p>*we will never spam your email</p>
                  </form>
               </div>
               <div class="col-md-4 pluses">
                  <img src="img/community_icon.png" alt="Community">
                  <h2>Community</h2>
                  <p>Meet the Community you’ve always talked with, in real life! This meetup will
                     be all about authors engaging each other with interesting coversation and topics. We will have loads of fun.
                  </p>
               </div>
               <div class="col-md-4 pluses talk">
                  <img src="img/talk_icon.png" alt="Talk shop">
                  <h2>Talk Shop</h2>
                  <p>In this meetup you will get to know the marketplaces better, because that’s why were all here for right? Learn a few tips 
                     and tricks from experienced authors from all over the country.
                  </p>
               </div>
               <div class="col-md-4 pluses stories">
                  <img src="img/war_icon.png" alt="War stories">
                  <h2>War Stories</h2>
                  <p>Gather round fellow authors! Hear the stories of success from your favorite authors and learn how they we 
                     able to tackle their problems and become successful.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="table-info" id="timing">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <table>
                     <tbody>
                        <tr>
                           <th>Time</th>
                           <th>Stuff that will happen</th>
                        </tr>
                        <tr>
                           <td class="text-center">10am - 12pm</td>
                           <td>Introduction and presentations about Envato</td>
                        </tr>
                        <tr>
                           <td class="text-center">12pm - 02 pm</td>
                           <td>Sessions by honorable guests and Speakers</td>
                        </tr>
                        <tr>
                           <td class="text-center">02pm - 03pm</td>
                           <td>Break and Mingle time with the authors</td>
                        </tr>
                        <tr>
                           <td class="text-center">03pm - 05pm</td>
                           <td>Portfolio Review, Rewards and Ending Presentation</td>
                        </tr>
                     </tbody>
                  </table>
                  <p>Please keep in mind that the timings may differ according to the flow of the event. The even is actually day long and we do plan to finish<br>
                     it within our set time but it doesn’t have to be, if we all agree to hangour for some time more, what harm could it do? :)
                  </p>
               </div>
            </div>
         </div>
			</div>
			
			<?php get_footer(); ?>     