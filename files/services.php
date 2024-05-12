
<div class="service-main-div" id="services">
            <div class="services_design_div">

            </div>


            <div class="service-sub-div" >

                <fieldset class="service-fieldset" >
            
                <legend class="service-legend col-6 col-sm-4 col-md-3" >SERVICES</legend>
                <br>
                <br>
                    <div class="service-p-div">
                    <p class="service-p">OUR ACTIVELY SEEKING SERVICES</p>
                    </div>
                    
                
                    <br>
                    <br>
                    <div class="container service-multi-div">

                        <div class=" container service-fieldset-sub-div col-11 col-sm-11 col-md-5">
                            <fieldset class="service-sub-fieldset ">
                                    <legend class="service-sub-legend">
                                        <div style=" display:flex; justify-content:center; align-items:center; height:6rem; width:6rem"> <img src="../images/trim.png" alt="" style="width:3rem ;height: auto"></div>
                                    </legend>
                                    <div class=" container service_sub_details">
                                        <div class="  service_sub_details_title">
                                            <h6 class="service_text_anime" data-id=1 data-delay="150">CONTENT CREATION</h6>
                                        </div>
                                        <div class="  service_sub_details_desc">
                                            <ul>
                                            <li class="service_text_anime" data-id=2 data-delay="250">Initial Consultation
                                                <br>
                                                <p class="service_text_anime" data-id=3 data-delay="300"> (Understanding your vision)</p>
                                            </li>
                                            <li class="service_text_anime" data-id=4 data-delay="350">Editing and Enhancement 
                                            <br>
                                                <p class="service_text_anime" data-id=5 data-delay="400"> (Transforming your footage)</p>
                                            </li>
                                            <li class="service_text_anime" data-id=6 data-delay="500">Client Review and Revisions 
                                            <br>
                                                <p class="service_text_anime" data-id=7 data-delay="600"> (Refining the story)</p>
                                            </li>
                                            <li class="service_text_anime" data-id=8 data-delay="800">Final Delivery
                                            <br>
                                                <p class="service_text_anime" data-id=9 data-delay="1000"> (Ready to upload)</p>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="  service_sub_details_p ">
                                            <p>We value your input and make revisions based on your suggestions to ensure 
                                                the final product aligns with your expectations. Our work is ready for you 
                                                to share with your audience.</p>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>
                        

                        <div class="container service-fieldset-sub-div col-11 col-sm-11 col-md-5">
                            <fieldset class="service-sub-fieldset">
                                    <legend class="service-sub-legend">
                                            <div style="display:flex; justify-content:center; align-items:center; height:6rem; width:6rem"> <img class="serv_image" src="../images/briefcase.png" alt="" style="width:3rem ;height: auto"></div>
                                    </legend>
                                    <div class=" container service_sub_details">
                                        <div class="  service_sub_details_title">
                                            <h6 class="service_text_anime" data-id=10 data-delay="150">SOCIAL MEDIA MARKETING</h6>
                                        </div>
                                        <div class="  service_sub_details_desc">
                                            <ul>
                                            <li class="service_text_anime" data-id=11 data-delay="250">Create
                                                <br>
                                                <p class="service_text_anime" data-id=12 data-delay="300"> (Unique identity online)</p>
                                            </li>
                                            <li class="service_text_anime" data-id=13 data-delay="350">Focus
                                            <br>
                                                <p class="service_text_anime" data-id=14 data-delay="400"> (Increase website and lead volume)</p>
                                            </li>
                                            <li class="service_text_anime" data-id=15 data-delay="500">Rank 
                                            <br>
                                                <p class="service_text_anime" data-id=16 data-delay="600"> (Rank higher on search engine results pages)</p>
                                            </li>
                                            <li class="service_text_anime" data-id=17 data-delay="800">Reach
                                            <br>
                                                <p class="service_text_anime" data-id=18 data-delay="1000"> (Use of tactics including digital marketing, email and social media)</p>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="  service_sub_details_p">
                                            <p></p>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>

                    </div>
                
                
                    <br>
                    <br>
                    <br>
                    
</fieldset>
    
        

            </div>
            
            
</div>
<script>
    var textanimationPlayed = {}; // Use an object to store animation state for each icon

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
        var texts = document.querySelectorAll('.service_text_anime');
        texts.forEach(function(text) {
            if (isInViewport(text)) {
                if (!textanimationPlayed[text.dataset.id]) { // Check animation state based on data-id
                    textanimationPlayed[text.dataset.id] = true;
                    animatetext(text);
                }
            } else {
                textanimationPlayed[text.dataset.id] = false;
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    function animatetext(text) {
        text.style.opacity = 0;

        var delay = parseInt(text.dataset.delay) || 0;

        anime({
            targets: text,
            translateY: [text.offsetHeight, 0],
            opacity: 1,
            duration: 1000,
            easing: 'easeInOutQuad',
            delay: delay,
            complete: function() {
                text.style.opacity = 1; 
            }
        });
    }
</script>