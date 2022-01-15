<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="utf-8" />
    <!--
              _                      
             | |  All stuff free to steal. Check https://github.com/ozh/ozh.org if interested
      ___ ___| |__    ___  _ __ __ _ 
     / _ \_  / '_ \  / _ \| '__/ _` |
    | (_) / /| | | || (_) | | | (_| |
     \___/___|_| |_(_)___/|_|  \__, |
                                __/ |
                               |___/ 
    -->
    <title>Ozh RICHARD &laquo; ozh.org</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <!--[if lte IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <style>
    div.slidebox div.content{
        width:250px;
        height:300px;
    }
    </style>
    <![endif]-->
</head>
<body>

<div id="container">

    <div id="about" class="slidebox">
            <h1 class="slide"><span>Ozh's Portfolio of Personal Projects and Online Presences</span></h1>
            <h2 class="content"><span>Here is what I'm about during my hobby time.<br/>Mostly geek stuff, I'm afraid <span id="smiley" title=":-)">&#12484;</span></span></h2>
    </div>

    <?php
    $boxes = array(
        'scrim' => array(
            'title'=> 'scr.im',
            'img'  => 'scrim.jpg',
            'url'  => 'https://scr.im/',
            'desc' => 'A nice little site that transform your long ugly email address into a <span class="highlight">cute short URL</span> that is <span class="highlight">safe</span> and spambot-proof to share on Twitter, Facebook and other sites. Sold in 2010.',
            'type' => 'project',
        ),
        /**
        'twtbg' => array(
            'title'=> 'Twt BG',
            'img'  => 'twtbgme.jpg',
            'url'  => 'http://twtbg.me/',
            'desc' => 'Does your <span class="highlight">Twitter profile</span> look like poo on bigger or smaller resolutions? Cropped background, lots of white space? Check now.',
            'type' => 'project',
        ),
        /**/
        'ozh1' => array(
            'title'=> 'Contact',
            'img'  => 'ozh6.jpg',
            'url'  => '',
            'desc' => 'If it\'s not a support question of any kind, be my guest and <span class="highlight">contact me</span>. Send an email to <span class="highlight">ozh</span> at this domain.</p><p>(for support, please refer to where you got the product)',
            'type' => 'bio',
        ),
        'ozh7' => array(
            'title'=> 'Talks',
            'img'  => 'ozh7.jpg',
            'url'  => '',
            'desc' => 'I love to meet small or big <span class="highlight">audiences</span> and talk about subjects I deal with in life.</p><p><span class="highlight">My favorite topics</span>: team management; unit testing :)',
            'type' => 'bio',
        ),
        /**
        'ozh2' => array(
            'title'=> 'Geek Skills',
            'img'  => 'ozh2.jpg',
            'url'  => '',
            'desc' => 'I speak <span class="highlight">PHP</span> and <span class="highlight">jQuery</span>. I make <span class="highlight">WordPress</span> and <span class="highlight">YOURLS</span> my bitches.</p><p>If not napping in the grass I may be available for freelancing. If the project sounds fun :)',
            'type' => 'bio',
        ),
        /**/
        'ozh3' => array(
            'title'=> 'Life, AFK',
            'img'  => 'ozh5.jpg',
            'url'  => '',
            'desc' => 'When not coding and playing <span class="highlight">Quake</span>, I try to spend time far away from computers. One of the thing I love the most is... <span class="highlight">wine</span>. Oh my god so many celestial flavors to taste and discover!',
            'type' => 'bio',
        ),
        'ozh4' => array(
            'title'=> 'Underwater bubbles',
            'img'  => 'ozh4.jpg',
            'url'  => '',
            'desc' => 'In the summer I usually say Good Bye to my computer and go for a <span class="highlight">zen dive</span>, deep down the big blue.</p><p>Best places I\'ve been to: the Red Sea and New Caledonia.',
            'type' => 'bio',
        ),
        'yourls' => array(
            'title'=> 'YOURLS',
            'img'  => 'yourls.jpg',
            'url'  => 'https://yourls.org/',
            'desc' => 'I make YOURLS (<span class="highlight">Your Own URL Shortener</span>), the 𝑑𝑒 𝑓𝑎𝑐𝑡𝑜 standard solution in PHP to shorten links. 80+ contributors, 220K+ users, open source.',
            'type' => 'project',
        ),
        'blog' => array(
            'title'=> 'planetOzh',
            'img'  => 'blog.jpg',
            'url'  => 'https://planetozh.com/blog/',
            'desc' => 'My <span class="highlight">blog</span>. A bit about my life and a lot of code projects. I have been somehow well known in the WordPress community and have released a number of plugins and tutorials.',
            'type' => 'project',
        ),
        'fff' => array(
            'title'=> 'French Frag Factory',
            'img'  => 'fff.jpg',
            'url'  => 'https://frenchfragfactory.net/',
            'desc' => 'I have founded and managed the biggest French speaking community site about <span class="highlight">Quake</span>.</p><p><em>Est. 1999</em>. Not for the noobz.',
            'type' => 'project',
        ),
        'lastfm' => array(
            'title'=> 'last.fm',
            'img'  => 'lastfm.jpg',
            'url'  => 'https://last.fm/user/-ozh-',
            'desc' => 'My profile on <span class="highlight">Last.fm</span>, for those who dig music and stats.</p><p>Favorite bands of all time: <span class="highlight">Suicidal Tendencies</span>, <span class="highlight">Be\'lakor</span>.',
            'type' => 'presence',
        ),
        /**/
        'github' => array(
            'title'=> 'Github',
            'img'  => 'github.png',
            'url'  => 'https://github.com/ozh',
            'desc' => 'A lot of my code is on <span class="highlight">Github</span>, especially everything about <span class="highlight">YOURLS</span>. Follow me!',
            'type' => 'presence',
        ),
        'plugindevbook' => array(
            'title'=> '<a href="https://amzn.to/plugindevbook"><img id="plugindevbook-cover" src="img/plugindevbook-cover.jpg" alt="WordPress Plugin Development"></a>',
            'img'  => 'plugindevbook-logo.jpg',
            'url'  => '',
            'desc' => 'I wrote a book! Hobbyist, amateurs, web agencies, freelancers: all about <strong><a href="https://amzn.to/plugindevbook">WordPress Plugin Development</a></strong>',
            'type' => 'project',
        ),
        'twitter' => array(
            'title'=> '@ozh',
            'img'  => 't.jpg',
            'url'  => 'https://twitter.com/ozh',
            'desc' => 'My <span class="highlight">Twitter account</span>. Mostly about WordPress and YOURLS, and the everyday geekitude.',
            'type' => 'presence',
        ),
        /**
        'facebook' => array(
            'title'=> 'Facebook',
            'img'  => 'facebook.png',
            'url'  => 'https://www.facebook.com/ozh.richard',
            'desc' => 'Yeah, of course, I\'m on Facebook. I\'m not very active there and that is mostly for people que je connais pour de vrai but feel free to say "hi!"',
            'type' => 'presence',
        ),
        /**/
        'plugins' => array(
            'title'=> 'WordPress Plugins',
            'img'  => 'plugins.png',
            'url'  => 'https://profiles.wordpress.org/ozh',
            'desc' => 'I released a lot of <span class="highlight">free plugins</span> to make your everyday life with WordPress easier. More than <span class="highlight">one million downloads</span>!',
            'type' => 'project',
        ),
        'tshirt' => array(
            'title'=> 'T-Shirts',
            'img'  => 'tshirts.png',
            'url'  => 'https://www.redbubble.com/people/ozhy',
            'desc' => 'For fun I create <span class="highlight">t-shirts</span>. It started as a few geek stuff made for myself and the love of Git. Quality products from RedBubble.',
            'type' => 'project',
        ),
        
    );
    
    shuffle( $boxes );
    
    foreach( $boxes as $id => $box ) {
        extract( $box );

        if( $desc )
            $desc = nl2br( $desc );
        ?>
        <div class="slidebox <?php echo $type;?>" id="<?php echo $id; ?>">
            <img class="hideme" src="img/<?php echo $img; ?>" alt="<?php echo strip_tags($title); ?>" />
            <div style="background:url(img/<?php echo $img; ?>)" class="slide"></div>

            <div class="content">
                <h3><?php if ($url) echo "<a href='$url'>"; ?><?php echo $title; ?><?php if ($url) echo "</a>"; ?></h3>
                <?php if ($desc) echo "<p>$desc</p>"; ?>
                <?php if ($url) echo "<p class='visit'>Visit <a href='$url'>$title</a></p>"; ?>
            </div>
        </div><!--end slideBox-->
        
        
    <?php } ?>

</div>

<div id="footer">

    <div id="display_controls" class="more">
        <p>Too much stuff? Display type: 
        <span class="shown">project</span>
        <span class="shown">bio</span>
        <span class="shown">presence</span>
        </p>
    </div>
    
</div>


<script>
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
try {
var pageTracker = _gat._getTracker("UA-55088-10");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
</html>
