<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Portfolio</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
 <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>
    <script src="components/components.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VQSFXRTNCS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VQSFXRTNCS');
</script>
</head>


<body class="catan">
<div id="floating-nav-placeholder"></div>

<div id="navbar-placeholder" data-navbar-type="white"></div>
<div id="wrapper">

    <header class="intro">
        <h1>Catan</h1>
        <h2>Browser Game Analysis</h2>
        <img src="Images/catan.png" alt="Catan Image" class="project-image">
    </header>

    <section class="case-study">
        <div class="sommaire">
            <div class="column">
            <h3>Context</h3>
                <p>Provide a brief overview of the project, 
                including the context and objectives.
                </p>
            </div>
            <div class="column">
            <h3>What I did</h3>
                <p>Describe the problem you aimed to solve with this project.
                </p>
            </div>
            <div class="column">
             <h3>Tools</h3>
                 <p>Outline the research methods used 
                    (e.g., user interviews, surveys) and summarize key findings.
                 </p>
            </div>
        </div>
        
        <div class="paragraph">
            <h3>What is Catan?</h3>
            <p>Catan Universe is a board game adapted online 
                on web, steam and mobile platforms. I started 
                playing again during covid on the web browser 
                version. They launched a UI update 2.0 DURING 
                COVID lockdown.
            </p>
        </div>

        <div class="paragraph">
            <h4>UX ISSUE</h4>
                <h3>1. Invasive Welcome Screen</h3>
                <p>It’s been quite some time since I wanted to get back to Catan and play a few games. 
                    I’m welcomed on the landing page with an “Important Message” pop-up about Catan tournaments.
                    <br>
                    <br>Here are the issues I found on this pop-up screen:
                <li> <b>Relevance.</b> I did not log-in for a long time, hence there’s a little chance I’ll be interested in tournaments</li>
                <li><b>White space.</b> I understand the intent for elegance and maintaining focus on the text and call-to-actions but, the message itself and the t-copy is poorly done</li>
                <li><b>Text copy & design.</b> Same style and color for every word, nothing stands out. If this is important information why not put it on this screen instead of redirecting users on the external Discord server.</li>
                </p>
           
            <div class="image-item">
                <img src="Images/Catan1.gif" alt="Description of image 1" class="site-image">
                <p> <i>This is the first screen I see when landing on Catan Universe Browser Game.</i>
                </p>
            </div>

            <h4>SOLUTION</h4>
            <p>
                <li>Add the Discord link + external link icon for better visibility</li>
                <li>Change CTA copy to be more clear</li>
                <li>Change title and text in bold for visibility and readability</li>
                <li>Add a close button (in coherence with the other screens interfaces)</li>
            </p>
            <div class="image-item">
                <img src="Images/catan2.png" alt="Description of image 2" class="site-image">
            </div>
        </div>

        <div class="paragraph">
            <h4>UX ISSUE</h4>
                <h3>2. Log-in and Password Reset</h3>
                <p>Stepping-in the bigger issues here, it took me around 4 minutes 
                    to reset my password and log-in (no, this is not normal).
                </p>
                    <div class="image-item">
                        <img src="Images/catan3.gif" alt="Description of image 3" class="site-image">
                    </div>
                <p>
                    <li> <b>No error prevention.</b> There’s no error prompt when mistyping an email address. I didn’t understand why I could not click on the new password button until I saw a missing character in my email.</li>
                    <li><b>Legal freaks.</b> This is the second time I’m asked to confirm if I’ve read the Terms of use and Privacy policy, which is blocking me from getting my new password.</li>
                    <li><b>Wrong Error prompts.</b>  I can see there are two error prompts here but I am not sure what’s really wrong: the code and the password fields are both highlighted in bright red but there’s only 1 error prompt saying “wrong code”. Is it my password ? or my code ?</li>
                    <li><b>Legal freaks #2.</b> I managed to update my log in credentials, but… I’m asked to accept T&Cs again before I can log-in (for the third time).</li>
                </p>
            </div>

        <div class="paragraph">
            <h4>UX ISSUE</h4>
                <h3>3. Unintuitive Game Creation</h3>
                <p>Some critical information to understand how to create 
                    a game and play are missing and/or are badly delivered.
                </p>
                    <div class="image-item">
                    <img src="Images/catan4.gif" alt="Description of image 4" class="site-image">
                    </div>
                <p>
                    <li> <b>Issue of information structure.</b> “The Game” is the first option I’m given, what are the others? 
                        not games? this interface needs better explanations on game options I have.</li>
                    <li>Both singleplayer and multiplayer “The Game” options have the same description when the content 
                        cannot be adapted for both, creating a confusion for players.</li>
                    <li><b>Confusing text copy.</b> The “Scenario” and “Activate per buying gold” are out of context. 
                        Are scenarios games? Do I need to purchase something to activate the game?</li>
                </p>
            <h4>SOLUTION</h4>
            <p>
                <li>Adapt the content to the context and chose careful vocabulary that matches
                     the real world for better understanding (Jakob Usability Heuristics).</li>
                <li>Add an option to buy expansions if they are presented on the side of the screen.</li>
            </p>
            <div class="image-item">
                <img src="Images/catan5.png" alt="Description of image 5" class="site-image">
            </div>
        </div>

    <div class="paragraph">
        <div class="usability-flex">
            <div class="columns">
                <div class="column">
                    <h4>USABILITY ISSUE</h4>
                    <div>
                        <ul>
                            <li>                 
                            <b>Use of radio buttons instead of checkboxes.</b>
                            when there are in fact a list of options where I can select any number
                             of choices (Consistency & Standards).</li>
                            <li>The “Start game” button has a <b>sun icon associated to it </b> underlying
                                 I can’t play without those. This should be explained somwhere
                                  before so there’s no bad surprises.
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="image-item-catan">
                        <img src="Images/catan6.gif" alt="Description of image 6" class="site-image">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="paragraph">
            <h4>UI ISSUE</h4>
                <h3>4. A very crowded HUD</h3>
            <p>The overall game interface just feels very busy. 
            For a strategic game like Catan, I really just need 
            the relevant information so I can focus on my next
            move (Aesthetics & Minimalist).
            </p>
                <div class="image-item">
                    <img src="Images/catan7.png" alt="Description of image 7" class="site-image">
                </div>
                <div class="ui-flex">
                    <div class="columns">
                        <div class="column">
                            <div>
                                <ul>
                                    <li>                 
                                        <span><b>Unnecessary UI elements.</b></span> 
                                        <br>I’m not sure this huge vertical menu on the bottom left is
                                         for. Here are 8 small icons that are not necessary 
                                         (maybe keep the main settings and the chat?)
                                         <br> 
                                         <br> All the other elements can be hidden into the settings 
                                         icon and shown when clicked if necessary.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="image-item">
                                <img src="Images/catan8.png" alt="Description of image 8" class="site-image">
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="ui-flex">
            <ul>
                <li>
                   <b>Missing what’s happening during another player’s turn.</b> 
                    The visual hints to understand what is currently happening
                     are too small and going too fast (the bottom left white text, 
                     cards animations, yellow highlight on player’s picture) 
                     (Visibility of System Status)
                </li>
            </ul>
                </div>
            <div class="image-item">
                <img src="Images/catan9.gif" alt="Description of image 9" class="site-image">
                <p> <i>An example of how quickly a turn goes.</i></p>
            </div>
            <ul>
                <li>
                   <b>It’s hard to see who is winning. </b> 
                   I can’t easily distinguish key information from each player:
                    number of points, development cards, biggest army, and longest road.
                     This is an issue since it’s critical information for this type of
                      strategic game.
                </li>
                <li>
                    <b>I don’t know which and how many cards I have in my hand.</b>  
                    This is a key information that I need to have in mind at all times 
                    (when it’s my turn or when exchanging with other players). 
                    Considering the size of the board, the number of other visual 
                    information and the pace of the game, it’s hardly impossible 
                    to quickly scan what types of cards I have in hand.
                 </li>
            </ul>
        </div>

        <div>
            <h4>SOLUTION</h4>
            <p>
                <ul>
                    <li>
                        Going back to the previous design would be a good start:
                         full cards easily recognizable.
                    </li>
                </ul>
            </p>
                <div class="image-item">
                    <img src="Images/cards stack.png" alt="card stacks" class="site-image">
                </div>

            <p>
                <ul>
                    <li>
                        <b>Dice button in the wrong place.</b> The most frustrating miss-click 
                        in my life… the dice roll and skip your turn buttons are at
                         the exact same position and if you’re acting too 
                         fast and misscliked, you lose your turn.
                    </li>
                </ul>
            </p>

            <div class="columns">
            <div class="column">
                <p>
                    <ul>
                        <li>
                            <span><b>Emojis to replace human interactions.</b></span> 
                             The only exchange I can have with my fellow AI co-players are 
                             emojis displaying expressions that range from happy, confused, 
                             angry, cocky, or sarcastic (from what I interpreted). The worst
                              is “impatient” emojis from other players when It’s my turn and
                               I usually need to think in calm on what will be mly next moves.
                        </li>
                    </ul>
                </p>
            </div>
            <div class="column">
                <div class="image-item">
                    <img src="Images/catan10.png" alt="Description of image 10" class="site-image">
                    <img src="Images/catan11.png" alt="Description of image 11" class="site-image">
                </div>
            </div>
            </div>
        </div>

        <div class="paragraph">
            <h3>
                Final thoughts
            </h3>
            <p>
                Even though I am not a fan of the new design, 
                I still play a lot online with friends because 
                I love this game - it might not be the same experience 
                for new players who are discovering it now.
            </p>
            <div class="image-item">
                <img src="Images/catan12.png" alt="Description of image 12" class="site-image">
            </div>
        </div>
        
        <!-- Button to read the next case study -->
    <div class="button-container">
        <a href="spotify.php"
        class="next-case-study-button-black">Lire le prochain case study</a>
    </div>


    <div id="footer-placeholder" data-footer-type="white"></div>
    <button
        type="button"
        class="btn-back-to-top"
        id="btn-back-to-top"
        > 
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>
    <script src="scripts/script.js"></script>

    

</body>
</div>

</html>
