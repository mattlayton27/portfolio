<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="screen.less" type="text/css" rel="stylesheet/less" media="screen">
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matt Layton's Portfolio</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="myscript.js"></script>
</head>
<body>
  <nav>
    <div id="header">
      <h1 id="scrollHome">Portfolio | Matt Layton</h1>
    </div>
    <div id="console_navigation">
      <ul>
        <li id="worknav">Work</li>
        <li id="aboutnav">About Me</li>
        <li id="gitnav">GitHub</li>
        <li id="contactnav">Contact</li>
      </ul>
    </div>
    <img src="media/hamburger_menu.png" alt="Hamburger Menu" title="Menu" id="hamburger_menu">
    <div id="mobile_navigation">
      <ul>
        <li id="mobileworknav"><div class="space">Work</div></li>
        <li id="mobileaboutnav"><div class="space">About Me</div></li>
        <li id="mobilegitnav"><div class="space">GitHub</div></li>
        <li id="mobilecontactnav"><div class="space">Contact</div></li>
      </ul>
    </div>
  </nav>
  <main>
    <div id="work">
      <h2 class="work_divider" id="moviereviews">Latest Movie Reviews</h2>
      <img id="moviepic" class="sitepics" src="media/movies.png" alt="Image: Latest Movie Reviews Website" title="Movie Reviews Website">
      <p><b>Description: </b>I built this website using Java (JSP, Java Servlets, JDBC, JPA) and experimented using
        RESTful API's. I decided to build a movie review site because not only am I passionate for Web Development,
        I am passionate for movies too! Building this website also gave me the chance to work as a team and use
        the full potential of GitHub. This website will give you the options of viewing reviews, registering as a reviewer,
        and logging on to add or delete a review. I have got to say that this has been my favorite project so far.
        Hope you enjoy it!</p>
      <img id="htmlpic" src="media/HTML5.png" alt="Image: HTML5" title="HTML5">
      <img id="csspic" src="media/CSS3.png" alt="Image: CSS3" title="CSS3">
      <img id="javascriptpic" src="media/javascript.png" alt="Image: JavaScript" title="JavaScript">
      <img id="javapic" src="media/java.png" alt="Image: Java" title="Java">
      <img id="mysqlpic" src="media/mysql.png" alt="Image: MySQL" title="MySQL">
      <p id="url"><b>URL: </b><a target="_blank" href="http://java-mlayton.rhcloud.com/GroupMovieReviewWebsite/index.jsp">Latest Movie Reviews</a></p>

      <h2>The Edge Landscaping</h2>
      <img id="edgepic" class="sitepics" src="media/edge.png" alt="Image: Edge Website" title="The Edge Landscaping">
      <p><b>Description: </b>I have been working for The Edge Landscaping for almost ten years now. I love the work, it has taught
      amazing life lessons throughout the years, and it gets me out of the house. Every day we are assigned whose lawns to take
      care of, along with special instructions such as trimming flowers or watch to avoid a specific sprinkler while mowing the
      lawn. I thought that instead of having to write down those instructions daily on a piece of paper, I could create a website
      that allows you to view, create, delete or edit customers, the address in case we get lost, the day we do it, and special weekly
      instructions. Now the website I am showing you is only the prototype and does not have real information of our customers so I
      will give you the username and password so that you can see how the employees work with the database. The purpose of this
      website is also for future customers, showing testimonials, how to contact us, and the areas we work. I have also made the website
      responsive so that it looks great on all browsers. Enjoy! <i>Username:
      mattlayton Password: password</i></p>
      <img id="htmlpic" src="media/HTML5.png" alt="Image: HTML5" title="HTML5">
      <img id="csspic" src="media/CSS3.png" alt="Image: CSS3" title="CSS3">
      <img id="jquerypic" src="media/jquery.png" alt="Image: jQuery" title="jQuery">
      <img id="phppic" src="media/php.png" alt="Image: PHP" title="PHP">
      <img id="mysqlpic" src="media/mysql.png" alt="Image: MySQL" title="MySQL">
      <p id="url"><b>URL: </b><a target="_blank" href="http://php-mlayton.rhcloud.com/assignments/edge/index.php">The Edge Landscaping</a></p>

      <h2 class="work_divider" id="idamft">Idaho Association for Marriage and Family Therapists</h2>
      <img id="idamftpic" class="sitepics" src="media/idamft.png" alt="Image: IDAMFT" title="Idaho Association for Marriage and Family Therapists (IDAMFT)">
      <p><b>Description: </b>During my second to last semester of college, a professor asked me and a fellow classmate of mine if
      we would like to volunteer our time to create a website for the Idaho Association for Marriage and Family Therapists (IDAMFT).
      The goal of the website was to create a portal for not only therapists to communicate and create blogs, but for those searching
      for help to locate a therapist and know what MFT's are all about. So, we decided to combine Wordpress (which is easy for those
      unfamiliar with creating websites to post blogs) and HTML, CSS, JavaScript (hard for those unfamiliar with creating websties for
      the therapist locater). This taught us not only how to combine these different technologies, but how to gather requirements from
      stakeholders and create a new website. We have also made the website responsive so that it looks great on all browsers.</p>
      <img id="wordpresspic" src="media/wordpress.png" alt="Image: Wordpress" title="Wordpress">
      <img id="htmlpic" src="media/HTML5.png" alt="Image: HTML5" title="HTML5">
      <img id="csspic" src="media/CSS3.png" alt="Image: CSS3" title="CSS3">
      <img id="javascriptpic" src="media/javascript.png" alt="Image: JavaScript" title="JavaScript">
      <p id="url"><b>URL: </b><a target="_blank" href="http://www.idamft.com/">http://www.idamft.com/</a></p>

      <h2 class="work_divider" id="rainier">Rainier Adventures</h2>
      <img id="rainierpic" class="sitepics" src="media/rainier.png" alt="Image: Rainier Website" title="Rainier Adventures">
      <p><b>Description: </b>In my Web Back End Development class, we were tasked to create a website in two weeks that not only
      looked good, but that could handle CRUD database functions. I decided to create a website that allows you to see rental
      equipment available for an adventure on Mount Rainier. This would allow you to not only view the equipment, but check the price
      and availability. On the admin page, it allows you to add, edit or delete the equipment. This website was also created to be
      responsive to all mobile devices.</p>
      <img id="htmlpic" src="media/HTML5.png" alt="Image: HTML5" title="HTML5">
      <img id="csspic" src="media/CSS3.png" alt="Image: CSS3" title="CSS3">
      <img id="phppic" src="media/php.png" alt="Image: PHP" title="PHP">
      <img id="mysqlpic" src="media/mysql.png" alt="Image: MySQL" title="MySQL">
      <p id="url"><b>URL: </b><a target="_blank" href="rainier/index.php">Rainier Adventures</a></p>

      <h2 class="work_divider" id="snowboard">Snowboard Instruction Helper</h2>
      <img id="snowboardpic" src="media/snowboard.png" alt="Image: Snowboard Instructor Helper Website" title="Snowboard Instructor Helper">
      <p><b>Description: </b>In my Mobile Applications class we focused on using strict JavaScript. No frameworks at all. For
      our final project we were tasked to create an application that will help out in either our jobs or in our daily life. I
      work as a Snowboard Instructor at Snowbasin Ski Resort and have been there for 4 seasons. I decided to create an app
      that will help new instructors remember the steps we teach our students. I made it so that it would also keep track of the
      students name, and use AJAX to display the current weather. We designed the app to be only for mobile, so when the app
      is pulled up, you will need to right click, then click inspect. This will display a side view, and once there click on the
      mobile phone and tablet icon. Once you clicked that you will have the option above the content to view which mobile device
      width to view. Click on IPhone 6. Hope you enjoy the app!</p>
      <img id="htmlpic" src="media/HTML5.png" alt="Image: HTML5" title="HTML5">
      <img id="csspic" src="media/CSS3.png" alt="Image: CSS3" title="CSS3">
      <img id="javascriptpic" src="media/javascript.png" alt="Image: JavaScript" title="JavaScript"><br>
      <p id="url"><b>URL: </b><a target="_blank" href="snowboard/index.html">Snowboard Instruction Helper</a></p>

      <h2 class="work_divider" id="hazelnutty">Hazelnutty</h2>
      <img id="hazelnuttypic" class="sitepics" src="media/hazelnutty.png" alt="Image: Hazelnutty Website" title="Hazelnutty">
      <p><b>Description: </b>This is the very first website that I have ever built. I created it because I love nutella with a passion
      and wanted a place for fellow nutella lovers to learn more about it, and learn about different recipes that would include
      nutella. This website is also mobile responsive and also includes a site plan in the footer. If you are a nutella lover,
      I guarantee you will find this pretty funny!</p>
      <img id="htmlpic" src="media/HTML5.png" alt="Image: HTML5" title="HTML5">
      <img id="csspic" src="media/CSS3.png" alt="Image: CSS3" title="CSS3">
      <p id="url"><b>URL: </b><a target="_blank" href="hazelnutty/index.php">www.hazelnutty.com</a></p>
    </div>
    <div id="about_me">
      <h2>About Me</h2>
      <img src="media/italy.jpg" alt="Image: Matt and Tarran" title="Tarran and I in Rome"></img>
      <p>Hello my name is Matt Layton and I am a Web Development student at Brigham Young University-Idaho. I have been a
      Web Developer for two years now and have loved every minute of it. I love that this field not only brings satisfaction from
      creating a website that people will love and use, but it brings a challenge. And there is nothing I like more than a
      challenge. I started off learning JavaScript in my Introduction to Programming class. Only then did I find my passion for
      programming and realized that this is what I want to be doing for the rest of my life. Over the next 2 years I have been
      taking classes in Object Oriented Programming, Web Front End / Back End Development, Database Design and Development,
      and much more. These classes have taught me how to use different tools to create websites such as HTML5, CSS3, LESS, JavaScript,
      jQuery, JSON, AJAX, PHP, MySQL, Java, JSP's, Java Servlets, JDBC, RESTful API's, JPA and the list keeps growing. Other tools that I am familiar with are
      Google Adwords, Google Analytics, and Adobe Photoshop/Illustrator/InDesign. With the rise of mobile devices, making each
      website fully responsive also has been my top priority. I created this website to show people the work that I have done in Web
      Development using the tools I listed, and hope to add more as the years go by.</p>
    </div>
    <div id="github">
      <h2>GitHub</h2>
      <img src="media/github.png" alt="Image: GitHub Logo" title="GitHub">
      <p><b>What is GitHub? </b>GitHub can be thought of as a serious social networking site for software developers. Members can
      follow each other, rate each other's work, receive updates for specific projects and communicate publicly or privately.
      GitHub uploads and can share code that was used to create a website or application. Here you can view mine:</p>
      <p><a target="_blank" href="https://github.com/mattlayton27/portfolio">Portfolio</a></p>
      <p><a target="_blank" href="https://github.com/mattlayton27/cs313-java/tree/master/java%20code%20%28click%20to%20view%20assignments%29/GroupMovieReviewWebsite">Latest Movie Reviews</a></p>
      <p><a target="_blank" href="https://github.com/mattlayton27/cs313-php/tree/master/assignments/edge">The Edge Landscaping</a></p>
      <p><a target="_blank" href="https://github.com/mattlayton27/portfolio/tree/master/rainier">Rainier Adventures</a></p>
      <p><a target="_blank" href="https://github.com/mattlayton27/portfolio/tree/master/snowboard">Snowboard Instruction Helper</a></p>
      <p><a target="_blank" href="https://github.com/mattlayton27/portfolio/tree/master/hazelnutty">Hazelnutty</a></p>
    </div>
    <div id="contact">
      <h2>Contact Me</h2><br>
      <p><i>For more information, contact me at...</i></p>
      <p><b>Email: </b>mattlayton27@gmail.com</p><br>
      <p><i>Or add me on...</i></p>
      <p><b>LinkedIn: </b><a target="_blank" href="https://www.linkedin.com/in/matt-layton-4087bb120?trk=nav_responsive_tab_profile">www.linkedin.com/in/matt-layton</a></p><br>
    </div>
  </main>
</body>
</html>
