<?php include("header.php");?>


    <div class="color-box" style="background-color:#ED4437;">
        <div class="main-topimages">
            <img src="images/wt-pics/redback.png" style="float:left;" class="main-img-web">
                <img src="images/wt-pics/redback11.png" class="main-top-img">
            <img src="images/wt-pics/redback2.jpg" style="float:right;" class="main-img-web-last">
        </div>
    </div>

<div class="page-wrapper">
    <div class="main-introT">
        <span class="main-title">Interactive Speed Shirt</span>
    </div>


            <p class="main-subtitle">Challenge</p>

    <div class="main-text"><p>Many athletes work out in the early mornings and nights when it is too dark for them to be seen by other drivers or people. It is important that the athletes can be seen by others to ensure their safety.</p><br><br></div>

            <p class="main-subtitle"> Solution</p>

    <div class="main-text"><p> I created a shirt that lights up depending on the athletes movement, to serve as a source of light and amusement to athletes. The shirt has neopixel leds that run along the arm and 3D printed cuffs conceal the electronics, which include the arduino lilypad and accelerometer. The neopixels along the arms turn green when the user is moving at a faster speed, yellow-orange when the user is moving at a medium speed, and red when the user isn't moving.</p>
    </div><br>

        <div class="main-img-group">
            <img src="images/wt-pics/sketch-person.jpg" class="main-img">
            <img src="images/wt-pics/sketches.png" class="main-img">
            <img src="images/wt-pics/sketch.jpg" class="main-img">
        </div><br>

            <div class="main-subtitle">Sketching</div>
        <div class="main-text">
            <p> The first thing I did was I started sketching ideas. I decided that I wanted to have the light radiate from the user's arms. Whether the user was running or paddling in the ocean, the forward motion of their arms could provide light in front of the users. I decided that I would have two neopixels along the arm and connect them around the collar. I was going to have the accelerometer and lilypad on the wrist because I thought that would be where the most movement would come from, and it could be hidden by 3D printed cuffs.</p>
        </div>


        <div class="main-img-group">
            <img src="images/wt-pics/set-up.png" class="main-img" >
            <img src="images/wt-pics/electronics.png" class="main-img">
        </div>

            <p class="main-subtitle">Electronics</p>
        <div class="main-text">
            <p> I connected the led strips and accelerometer to the lilypad to verify that it was working before attaching them to the shirt. I soldered wires to the accelerometer and lilypad. I soldered the wires to the led strip, and then glued and sewed the led strip and the electronics to the arm. I ended up soldering a much longer wire which would be attached along a user's back to avoid the strain and tension caused by the user's shoulder.</p>
        </div>

        <div class="main-text">
            <p>I integrated the wires into the design by sewing a piece of fabric around them like a tube, and then sewing it to the back of the shirt. I covered the lilypad and accelerometer with 3D printed cuffs designed with SketchUp. I had multiple iterations of the 3D printed cuffs so that I would get the correct dimensions and style.</p> <br>

            <p> I left coding for the end. I started by coding the lights to change colors at one position while I moved my arms. Then I tried to code for speed based off of the time it took to move an arm back and forth.</p>
        </div>

        <div class="main-img-group">
            <img src="images/wt-pics/poster.png" class="main-img">
        </div>

        <div class="main-text">
            <p> I completed my project and presented it at a fashion show for my wearable technology class.</p>
        </div>

</div>

</div>
    <?php include("work.php");?>
</body>
</html>