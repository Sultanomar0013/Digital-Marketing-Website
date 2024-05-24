
<div class="process-main-div" id="process">
            <div class="process_design_div">

            </div>


            <div class="process-sub-div" >

                <fieldset class="process-fieldset" >
            
                <legend class="process-legend " >OUR PROCESS</legend>
                <br>
                <br>
                    <div class="process-p-div">
                    <p class="process-p">OUR PROCESS TO GUARENTEE YOU SUCESSS</p>
                    </div>
                    
                
                    <br>
                    <br>
                    <div class="process-multi-div">


                            <div class="process_icon_div">
                                <div class="process_icon_one">
								
                                    <div class="process_title_img "style=""> <img src="../images/trim.png" alt="" style=""></div>
                                </div>
                                
                            </div>
                                    <div class="container process_middle_div col-11 col-sm-10">
                                        <div class=" process_p_div col-10 ">

                                            <div class="process_sec_sub">
                                            <div class=" process_middle_p col-1 col-sm-2">
                                                        <img class="pro_icon" src="../images/script.png" alt="" style="" data-id="1" data-delay="300">
                                                        <p>Stratagize and
                                                            Script Your Content</p>
                                                    </div>
                                                    <div class=" process_middle_p col-1 col-sm-2">
                                                        <img class="pro_icon" src="../images/videowhite.png" alt="" style="" data-id="2"data-delay="400">
                                                        <p>Record And Edit
                                                            Your Content</p>
                                                        </div>


                                            </div>
                                                <div class="process_sec_sub">
                                                    <div class="  process_middle_p col-1 col-sm-2" >
                                                            <img  class="pro_icon" src="../images/web-management.png" alt="" style="" data-id="3" data-delay="500">
                                                            <p>Optimize Your
                                                                Content</p>
                                                        </div>
                                                        <div class=" process_middle_p col-1 col-sm-2">
                                                            <img class="pro_icon" src="../images/upload.png" alt="" style="" data-id="4" data-delay="300">
                                                            <p>Upload And Let The Views Rack Up</p>
                                                        </div>

                                                </div>

                                                

                                                    
                                        </div> 
                                    </div>
                    

                    </div>
                    <div style="height:5rem; width:100%;">

                    </div>

                    <div class="process-multi-div">


                            <div class="process_icon_div">
                                <div class="process_icon_one">
								
                                    <div class="process_title_img "style=""> <img src="../images/briefcase.png" alt="" style=""></div>
                                </div>
                                
                            </div>
                                    <div class="container process_middle_div col-11 col-sm-10 pro_box_anime" data-id="1" data-delay="300">
                                        <div class=" process_p_div col-10 ">

                                            <div class="process_sec_sub">
                                            <div class=" process_middle_p col-1 col-sm-2">
                                                        <img class="pro_icon" src="../images/script.png" alt="" style="" data-id="5" data-delay="300">
                                                        <p>Stratagize and
                                                            Script Your Content</p>
                                                    </div>
                                                    <div class=" process_middle_p col-1 col-sm-2">
                                                        <img class="pro_icon" src="../images/decision.png" alt="" style="" data-id="6" data-delay="400">
                                                        <p>Record And Edit
                                                            Your Content</p>
                                                        </div>


                                            </div>
                                                <div class="process_sec_sub">
                                                    <div class="  process_middle_p col-1 col-sm-2" >
                                                            <img class="pro_icon" src="../images/web-management.png" alt="" style="" data-id="7" data-delay="500">
                                                            <p>Optimize Your
                                                                Content</p>
                                                        </div>
                                                        <div class=" process_middle_p col-1 col-sm-2">
                                                            <img class="pro_icon" src="../images/graph.png" alt="" style="" data-id="8" data-delay="300">
                                                            <p>Upload And Let The Views Rack Up</p>
                                                        </div>

                                                </div>

                                                

                                                    
                                        </div> 
                                    </div>
                    

                    </div>
                
                    <br>
                    <br>
                    <br>
                    
                </fieldset>
    
        

            </div>
            
            
</div>
<!-- <script>
    var animationPlayed = {}; 


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
    var icons = document.querySelectorAll('.pro_icon');
    icons.forEach(function(icon){
            if (isInViewport(icon)) {
                if (!animationPlayed[icon.dataset.id]) {
                    animationPlayed[icon.dataset.id] = true; 
                    animateIcon(icon);
                
                }
            } else {
                animationPlayed = false; 
            }
        });
}


window.addEventListener('scroll', handleScroll);

function animateIcon() {
    var icon = document.querySelector('.pro_icon');
    icon.style.opacity = 0; 


    anime({
        targets: icon,
        translateY: [icon.offsetHeight, 0], 
        opacity: 1,
        duration: 1000,
        easing: 'easeOutElastic',
        complete: function() {
            icon.style.opacity = 1; 
        }
    });
}

</script> -->
<script>
    var animationPlayed = {}; // Use an object to store animation state for each icon

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
        var icons = document.querySelectorAll('.pro_icon');
        icons.forEach(function(icon) {
            if (isInViewport(icon)) {
                 icon.style.opacity = 1;
                if (!animationPlayed[icon.dataset.id]) { // Check animation state based on data-id
                    animationPlayed[icon.dataset.id] = true;
                    animateIcon(icon);
                }
            } else {
               
                  icon.style.opacity = 0;
            }


        });
    }

    window.addEventListener('scroll', handleScroll);

    function animateIcon(icon) {
        icon.style.opacity = 0;

        var delay = parseInt(icon.dataset.delay) || 0;

        anime({
            targets: icon,
            translateY: [icon.offsetHeight, 0],
            opacity: 1,
            duration: 3000,
            easing: 'easeOutElastic',
            delay: delay,
            complete: function() {
                icon.style.opacity = 1; // Show the icon after animation
            }
        });
    }

//     var expandanimation={}


// function handleScroll2() {
//     var boxs = document.querySelectorAll('.pro_box_anime');
//     boxs.forEach(function(box) {
//         if (isInViewport(box)) {
//             if (!animationPlayed[box.dataset.id]) { // Check animation state based on data-id
//                 animationPlayed[box.dataset.id] = true;
//                 animateBox(box);
//             }
//         } else {
//             animationPlayed[box.dataset.id] = false;
//         }
//     });
// }

// window.addEventListener('scroll', handleScroll2);

// function animateBox(box) {
//     box.style.opacity = 0;

//     var delay = parseInt(box.dataset.delay) || 0;

//     anime({
//         targets: box,
//     scaleY: [0, 1], 
//     opacity: 1,
//     duration: 1000,
//     easing: 'easeInOutQuad',
//     delay: delay,
//     complete: function() {
//         box.style.opacity = 1;  
//         }
//     });
// }
</script>
