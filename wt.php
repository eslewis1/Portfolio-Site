<?php include("header.php");?>


        <div class="main-topimages">
            <img src="images/wt-pics/redback.png" style="float:left;"">
                <img src="images/wt-pics/redback11.png">
            <img src="images/wt-pics/redback2.jpg" style="float:right;">
        </div>


    <div class="main-introT">
        <span class="main-title">INTERACTIVE SPEED SHIRT</span>
    </div>
        <div class="main-text">


            <p class="main-subtitle">Challenge</p><p>Many athletes work out in the early mornings and nights when it is too dark for them to be seen by other drivers or people. It is important that the athletes can be seen by others to ensure their safety.</p><br><br>

            <p class="main-subtitle"> Solution</p><p> I created a shirt that lights up depending on the athletes movement, to serve as a source of light and amusement to athletes. The shirt has neopixel leds that run along the arm and 3D printed cuffs conceal the electronics, which include the arduino lilypad and accelerometer. The neopixels along the arms turn green when the user is moving at a faster speed, yellow-orange when the user is moving at a medium speed, and red when the user isn't moving.</p>
        </div><br>

        <div class="main-img-group">
            <img src="images/wt-pics/sketch-person.jpg" class="main-img">
            <img src="images/wt-pics/sketches.png" class="main-img">
            <img src="images/wt-pics/sketch.jpg" class="main-img">
        </div><br>

        <pre>
            <code>
                My code here....
            </code>
        </pre>




        <div class="main-text">
            <p class="main-subtitle">Research </p><p> For this project I was inspired by the ocean and bioluminescence. I was intrigued by videos that used electroluminescent wire on their wetsuits and surfboards to provide light for night surfing. I explored other wearable technologies that helped provide light for athletes. I took note of the position of the lights, the brightness different light sources provided, and tried to understand the athletes' perspecitives.I spoke to 5 athletes to get a feel for where they would like lights and whether this would be beneficial for them. I also looked into other ways that they were able to exercise at night and be noticed. I found that many athletes had interest in light up clothing and thought it would be beneficial.</p><br>

            <p class="main-subtitle"> Sketch </p><p> The first thing I did was I started sketching ideas. I decided that I wanted to have the light radiate from the user's arms. Whether the user was running or paddling in the ocean, the forward motion of their arms could provide light in front of the users. I decided that I would have two neopixels along the arm and connect them around the collar. I was going to have the accelerometer and lilypad on the wrist because I thought that would be where the most movement would come from, and it could be hidden by 3D printed cuffs.</p>
        </div>

        <img src="images/wt-pics/electronics.png" class="main-img">

        <img src="images/wt-pics/code.png" class="main-img" style="border: .00005px solid lightgray;align-content:center;text-align:center;">
        <img src="images/wt-pics/set-up.png">


        <img src="images/wt-pics/poster.png" style="height:38em;width:32em;float:left;padding-right:1.6em;padding-bottom:.5em;">

        <h1> <span class="text">Process</span></h1><br>

        <div class="main-text">

        <br><p><i>Trial and Error</i> : I connected the led strips and accelerometer to the lilypad to verify that it was working before attaching them to the shirt. I soldered wires to the accelerometer and lilypad.

        I soldered the wires to the first led strip, and then glued and sewed the led strip and the electronics to the arm. I connected the second led strip with a wire along the collar but found that the connection was weak with the wire going along the shoulder. Sometimes only one of the led strips would light up. This caused me to alter my design. I ended up soldering a much longer wire which would be attached along a user's back to avoid the strain and tension caused by the user's shoulder.</p><br>

        <p>I integrated the wires into the design by sewing a piece of fabric around them like a tube, and then sewing it to the back of the shirt. I covered the lilypad and accelerometer with 3D printed cuffs designed with SketchUp. I had multiple iterations of the 3D printed cuffs so that I would get the correct dimensions and style.</p> <br>

        <p> I left coding for the end. I started by coding the lights to change colors at one position while I moved my arms. Then I tried to code for speed based off of the time it took to move an arm back and forth.</p>

        <p>While I managed to get my shirt to work, I ran into some problems. It was difficult integrating the electronics into the shirt, especially along the arms. The strain and bending along the elbow weakened the connection in the led strips. Even though the 3D printed cuffs hid the electronics, the positioning of them made it difficult to charge the battery. I learned a lot from this project and how difficult it can be to integrate electronics seamlessly and comfortably in clothing.</p>






    </div>













<?php include("footer.php");?>