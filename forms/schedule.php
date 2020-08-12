 <!-- Request an Appointment -->
 <section class="requestappointment">
    <div class="container">
        <div class="col-12">
            <!-- content -->
            <div class="content">
                <h2 class="sec-title">Request an Appointment</h2>
                <p>To schedule a visit with us at our Los Angeles center, please select your desired service below or call us at <a href="">(213) 388-2229</a>.</p>
             
                <div class="schedule">
                    <section class="consuletation-form" id="consuletationform">
                                    <form id="schedule" name="scheduleform" class="img-shadow appointment-wrapper">
                                        <div class="formpwrap">

                                            <!-- Name -->
                                            <div class="input">
                                                <input type="text" name="name" placeholder="Name" class="form-control" required />
                                            </div>

                                            <!-- Email -->
                                            <div class="input">
                                                <input type="text" type="email" name="email" placeholder="Email" class="form-control" required />
                                            </div>
                                            
                                            <!-- Phone -->
                                            <div class="input">
                                                <input type="text" placeholder="Phone" name="phone" class="form-control" />
                                            </div>

                                            <!-- Preferred Time -->
                                            <div class="input">
                                                <select name="preferred_time" class="form-control" required>
                                                    <option value="" disabled selected>Preferred Time</option>
                                                    <option value="Early Morning">Early Morning</option>
                                                    <option value="Late Morning">Late Morning</option>
                                                    <option value="Early Afternoon">Early Afternoon</option>
                                                    <option value="Late Afternoon">Late Afternoon</option>
                                                </select>
                                            </div>

                                            <!-- Preferred Day -->
                                            <div class="input">
                                                <select name="preferred_day" class="form-control" required>
                                                    <!-- <input type="date" class="form-control" id="start" name="preferred_day" pattern="\d{1,2}/\d{1,2}/\d{4}" required> -->
                                                    <option value="" disabled selected>Preferred Day</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <!-- <option value="Saturday">Saturday</option> -->
                                                </select>   
                                            </div>

                                            <div class="input">
                                                <span class="treatments-type" data-type="gynwomenshealth" style="display: none;">
                                                    <select name="treatment" class="form-control">
                                                        <option value="" disabled="" selected="">Service (Optional)</option>
                                                        <!-- <option data-slecttype="body-aestheticsdiagnosticsear-nose-throathearing-center" value="Sleep Apnea">Sleep Apnea</option> -->
                                                        <?php
                                                            $loop = new WP_Query( 
                                                                array( 
                                                                    'post_type' => 'treatments', 
                                                                    'posts_per_page'=> -1, 
                                                                    'orderby'=> 'name',
                                                                    'order'=>'ASC',
                                                                    'treatments_category' => 'womens-health',

                                                                )
                                                            );
                                                            if ( $loop->have_posts() ) :
                                                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                                
                                                                            
                                                                            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                                                <?php endwhile;
                                                                if (  $loop->max_num_pages > 1 ) : ?>
                                                                
                                                                <?php endif;
                                                            endif;
                                                            wp_reset_postdata();
                                                        ?>
                                                    </select>
                                                </span>
                                                <span class="treatments-type" data-type="skincareaesthetics" style="display: none;">
                                                    <select name="treatment" class="form-control">
                                                        <option value="" disabled="" selected="">Service (Optional)</option>
                                                        <?php
                                                            $loop = new WP_Query( 
                                                                array( 
                                                                    'post_type' => 'treatments', 
                                                                    'posts_per_page'=> -1, 
                                                                    'orderby'=> 'name',
                                                                    'order'=>'ASC',
                                                                    'treatments_category' => 'hormone-issues',

                                                                )
                                                            );
                                                            if ( $loop->have_posts() ) :
                                                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                                
                                                                            
                                                                            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                                                <?php endwhile;
                                                                if (  $loop->max_num_pages > 1 ) : ?>
                                                                
                                                                <?php endif;
                                                            endif;
                                                            wp_reset_postdata();
                                                        ?>
                                                    </select>
                                                </span>
                                                <span class="treatments-type" data-type="bodysculpSure" style="display: none;">
                                                    <select name="treatment" class="form-control">
                                                        <option value="" disabled="" selected="">Service (Optional)</option>
                                                        <?php
                                                            $loop = new WP_Query( 
                                                                array( 
                                                                    'post_type' => 'treatments', 
                                                                    'posts_per_page'=> -1, 
                                                                    'orderby'=> 'name',
                                                                    'order'=>'ASC',
                                                                    'treatments_category' => array('body-face','weight-loss')

                                                                )
                                                            );
                                                            if ( $loop->have_posts() ) :
                                                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                                
                                                                            
                                                                            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                                                <?php endwhile;
                                                                if (  $loop->max_num_pages > 1 ) : ?>
                                                                
                                                                <?php endif;
                                                            endif;
                                                            wp_reset_postdata();
                                                        ?>
                                                    </select>
                                                </span>
                                                <span class="treatments-type" data-type="emsella" style="display: none;">
                                                    <select name="treatment" class="form-control">
                                                        <option value="" disabled="" selected="">Service (Optional)</option>
                                                        <?php
                                                            $loop = new WP_Query( 
                                                                array( 
                                                                    'post_type' => 'treatments', 
                                                                    'posts_per_page'=> -1, 
                                                                    'orderby'=> 'name',
                                                                    'order'=>'ASC',
                                                                    'treatments_category' => array('incontinence'),

                                                                )
                                                            );
                                                            if ( $loop->have_posts() ) :
                                                                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                                                
                                                                            
                                                                            <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                                                <?php endwhile;
                                                                if (  $loop->max_num_pages > 1 ) : ?>
                                                                
                                                                <?php endif;
                                                            endif;
                                                            wp_reset_postdata();
                                                        ?>
                                                    </select>
                                                </span>
                                                
                                            </div>
                                            <!-- Submit Button -->
                                            <div class="f-submit" style="text-align: center;">
                                                <button type="submit" class="ui-btn ui-submit">
                                                    Submit Request
                                                </button>
                                                
                                            </div>
                                            
                                        </div>
                                    </form>
                                    <div id="form-results"></div>
                    </section>

                </div>
              </div>
            <!-- content -->
        </div>          
    </div>
</section>