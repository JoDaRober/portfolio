<div class="text-body">
    
    <p>I am a Technical Artist & Programmer, which by nature means I do many things.</p>
    
    <p>Currently, I am working with multiple studios, including <a href="https://www.heartmachine.com">Heart Machine</a> (Hyper Light Drifter, Solar Ash) and <a href="https://www.giantsquidstudios.com">Giant Squid</a> (Abzu, The Pathless), to support their character pipelines with maya tools and rigs. As of right now, these projects have not been announced, but expect more info here in the future once I can talk about them.
    </p>
    
    <p>My most recently released project was
        <a href="https://www.thepathless.com">The Pathless</a> by 
        <a href="https://www.giantsquidstudios.com">Giant Squid</a>, 
        released on PC, Apple Arcade, PS4, and as a launch title for PS5.</p>

    <img class="pathless-logo" src="/images/PathlessCoverArt.png"/>
    
    <p>At Giant Squid I operated as the lead Character TD, the lead Art Tools / Pipeline Programmer, and headed the design and implementation of puzzle-related gameplay elements and levels.</p>
        
    <p>Continue on for examples of my work.</p>
    
    <!-- CHARACTER RIGS -->
    
    <h2 class="section-header">Character Rigs</h2>
    <div class="info-block">
        <p>For The Pathless I built more than 15 character rigs, added major features to 5 and maintained a cast of over 20 characters, ensuring that all characters supported use with a common toolset, which included animation mirroring tools, baked out curves for use in UE4, FK / IK matching, and space switching.</p>

        <p>On this project I was fortunate to work with some fantastic character designs and an excellent team of artists in a studio that really emphasizes creature anatomy and realistic movement. I've rigged everything from bipedal humanoids to bird wings, dinosaurs, 10-armed monstrosities, a hydra with a variable number of destructible / re-growable heads, flying snakes, and more.</p>

        <p>Here are some of the highlights:</p>
    </div>
    
    <div class="embedded-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xspsQUE7gUo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <h2 class="section-header">Tools</h2>
    <div class="info-block">
        <p>At Giant Squid I was responsible for maintaining all pipeline tools and systems. Here are a few examples of tools I made. Some are explained below, with images, whereas others are easier to understand in video form. Footage of the latter is in the following reel. </p>
    </div>
    
    <div class="embedded-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_SVW9QBN1Dw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="info-block">
        
        <h3>File Batch Utility</h3>
        
        <p class="sub-info-block">This is a file batch processor I wrote for Maya. This tool allows animators and tech artists to batch process files by opening them in a background instance of Maya, so they can continue to work while they're waiting on a batch job to finish. The tool was built quickly, but with multithreading in mind. Each time the tool is run, it launches a new background process, but a small change would allow for the batch tool to launch a configurable number of background threads at once to multiply the efficiency of the batch job.</p>
        
        <img class="batch-image" src="/images/BatchUtility1.png"/>
        
        <p class="sub-info-block">If operating in 'Export' mode, you can check any combination of characters from the list. For all the files processed, the utility will export all animations for any character that has been checked, and skip the others. This is useful, for example, to re-export all of the main character's cinematic animations due to a rig update, without processing every other character in the scene as well.</p>
        
        <img class="batch-image" src="/images/BatchUtility2.png"/>
        
        <p class="sub-info-block">Selecting the 'Run Script' tab will run the batch process in script mode. From here you can choose either a python script or a mel script, and it will run against every file in the list.</p>
        
        <img class="batch-image" src="/images/BatchUtility3.png"/>
        
        <p class="sub-info-block">You even have the option to type plain text directly into the utility</p>
        
        <img class="batch-image" src="/images/BatchOutput.png"/>
        
        <p class="sub-info-block">Once you click 'Run Batch', the batch utility closes and opens a new output window. Here you can read the command line output of the background Maya process in realtime, or cancel it if multiple files are reporting failures.</p>
        
        <h3>Space Switch Setup Tool</h3>
        
        <p class="sub-info-block">This is a tool for automating the set up of multiple space switches per character, reducing a process that used to take over an hour down to one that takes 15 minutes.</p>
        
        <img class="batch-image" src="/images/SpaceSetupTool1.png"/>
        
        <p class="sub-info-block">Simply flip into the 'Add / Edit Parent Spaces' tab, create named parent spaces, and assign them a control. The name used here will be the name that the animator interacts with when switching spaces.</p>
        
        <img class="batch-image" src="/images/SpaceSetupTool2.png"/>
        
        <p class="sub-info-block">Back in the 'Setup' tab, all that's left to do is create a space switch node and give it a name, then from the right hand panel you can assign a child control, space switch behavior, and assign parent spaces that were defined in the previous step, all from one location. When this is complete, clicking 'Apply Changes' will create a space switch rig setup and automatically hook up the connections. Not pictured: the tool will also detect whether any space switchers are broken and highlight its name in red in the left-hand panel.</p>
        
        <h3>Tools Distribution</h3>
        
        <p class="sub-info-block">To ensure Giant Squid's tools were friendly for PCs outside the office, I created a batch script that generates a custom Maya launcher which initializes all tools + pipeline systems and ensures settings are correct.</p>
        
        <p class="sub-info-block">At any point, if the user wants to launch vanilla Maya, they can simply run the program as they normally would. Uninstalling the tools is as simple as deleting the shortcut, and no system environments are modified.</p>
        
        <img class="batch-image" src="/images/CustomLauncher.gif"/>
        
    </div>
    
    <h2 class="section-header">Design</h2>
    <div class="info-block">
        <p>I did a lot of puzzle design and implementation on The Pathless! Right now I'm working on getting some footage and screenshots together of the most interesting bits. Expect more here soon!</p>
    </div>
</div>