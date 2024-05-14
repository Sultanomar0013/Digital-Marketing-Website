
<div class="about-main-div" id="about">
            <div class="about-sub-div " >

            <fieldset class="about-fieldset " >
        
            <legend  class="about-legend col-6 col-sm-5 col-md-3">ABOUT US</legend>
            <br>
            <br>
                <div class="about_p_div col-8">
                <p class="about-p">WE ARE A SOCIAL MEDIA MARKETING AGENCY HELPING BUSINESSES 
                    AND CREATIVES REACH THEIR GOAL</p>
                </div>
                
            
                <br>
                <br>
                <div class="about_video_div">
                <video class="embed-responsive-item about-video"   controls>
                    <source src="example.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </div>
            
               
                <br>
                <br>
                <br>


                <div class="about_details  container col-11 ">
                    <div class="about_f  col-10 " >
                        <div class="about_founder col-5 col-sm-5 col-md-4">
                            <h4>Founder</h4>
                            <div class="founder_image">

                            </div>
                            <p>MD Mushfiqur Rahman</p>

                        </div>
                        <div class="f_text about_text col-12 col-sm-12 col-md-6"  data-delay=200 >
                            <p>Hey I'm <strong style="font-weight:600"> MD Mushfiqur Rahman </strong>, your video editing ace dedicated to helping businesses and creators reach their goals.<br><br>

                                With a knack for storytelling and a passion for visual excellence, I specialize in crafting compelling videos that grab attention and drive results.<br><br>

                                Whether you need polished promotional content or engaging social media videos, I'm here to elevate your brand's message and make it stand out.
                                <br>Let's collaborate and bring your vision to life! 
                            </p>
                        </div>
                    </div>
                </div>


                <div class="about_details container col-11 ">
                    <div class="about_co_f col-10 ">
                        <div class="about_co_founder col-5 col-sm-5 col-md-4">
                            <h4>Co-Founder</h4>
                            <div class="founder_image">

                            </div>
                            <p>Sandid Hasan</p>

                        </div>
                        <div class="co_f_text about_text1 col-12 col-sm-12 col-md-6"  data-delay="250">
                            <p>Hi there! I'm <strong style="font-weight:600">Sandid Hasan </strong>, your go-to social media expert at <strong style="font-weight:600">FeroxStudios</strong>. I specialize in helping businesses skyrocket their leads and followers through targeted social media marketing.
                                <br><br>
                                With tailored strategies and data-driven insights, I specialize in maximizing your online presence for tangible results. Let's boost your brand together!
                            </p>
                        </div>
                    </div>


                </div>
                
            </fieldset>
    
        

            </div>
  
            
</div>
<script>
    var panimationPlayed = false; 
    var panimationPlayedOne = false; // Separate flag for the second element

    function isInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        var para = document.querySelector('.about_text');
        
        if (isInViewport(para) && !panimationPlayed) {
            animatep(para);
            panimationPlayed = true;
        } 

        if(isInViewport(para)){
            para.style.opacity = 1;
        } else {
            para.style.opacity = 0;
        }
    }

    window.addEventListener('scroll', handleScroll);

    function animatep(para) {
        para.style.opacity = 0;

        var delay = parseInt(para.delay) || 0; // Use para.dataset.delay instead of parseInt(para)

        anime({
            targets: para,
            translateX: [para.offsetWidth, 0],
            opacity: 1,
            duration: 1000,
            easing: 'easeInOutQuad',
            delay: delay,
            complete: function() {
                para.style.opacity = 1; 
            }
        });
    }

    function handleScrolls() {
        var para_one = document.querySelector('.about_text1');
    
        if (isInViewport(para_one) && !panimationPlayedOne) {
            animatepOne(para_one);
            panimationPlayedOne = true;
        } 

        if(isInViewport(para_one)){
            para_one.style.opacity = 1;
        } else {
            para_one.style.opacity = 0;
        }
    }

    window.addEventListener('scroll', handleScrolls);

    function animatepOne(para_one) {
        para_one.style.opacity = 0;

        var delay = parseInt(para_one.delay) || 0; // Use para_one.dataset.delay instead of parseInt(para_one)

        anime({
            targets: para_one,
            translateX: [-para_one.offsetWidth, 0],
            opacity: 1,
            duration: 1000,
            easing: 'easeInOutQuad',
            delay: delay,
            complete: function() {
                para_one.style.opacity = 1; 
            }
        });
    }
</script>
