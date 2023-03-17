<?php $customCSS = '<link rel="stylesheet" href="sss/sss.css">'?>
<?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <header>
                <h1>CSS</h1>
                <h2>Making Html Look Nice</h2>
            </header>
            <?php include("inc/nav.php")?>
            <section class="lead">
                <h2 class="full-width">See the transformative impact of CSS</h2>
                <link rel="stylesheet" href="css/home.css">
                <section class="inner-container">
                    <div class="slider">
                        <img src="images/before-css.jpg" alt="Hex color tool site without css">
                        <img src='images/after-css.jpg' alt="Hex color tool site with css">
                    </div>
                    <div id="accordion" >
                        <h3>Indroduction</h3>
                        <p>
                            Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML (including XML dialects such as SVG, MathML or XHTML). CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.
                        </p>
        
        
                        <h3>Other Info</h3>
                        <p>
                        In addition to HTML, other markup languages support the use of CSS including XHTML, plain XML, SVG, and XUL. CSS also has rules for alternate formatting if the content is accessed on a mobile device. The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable. The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS validation service for CSS documents.
                        </p>
                    </div>
                </section>
                      
            </section>
            <footer>
                <h2>Citations</h2>
                <ul class="flowing-boxes">
                    <li><a href="https://www.worldcat.org/title/javascript-the-definitive-guide/oclc/686709345?referer=br&ht=edition">World Cat: Javascript the Definitive Guide</a></li>
                    <li><a href="https://www.phpgoodies.com/beyond/article.php/3893911/Web-based-Mobile-Apps-of-the-Future-Using-HTML-5-CSS-and-JavaScript.htm">HTML Goodies: New Mobile Apps Using HTML5, CSS & JS</a></li>
                    <li><a href="https://jigsaw.w3.org/css-validator/">W3: CSS Validator</a></li>
                    <li><a href="https://www.w3.org/TR/CSS21/selector.php">W3: Selectors</a></li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS">Modzilla CSS Guide</a></li>
                    <li><a href="https://www.w3.org/standards/webdesign/htmlcss#whatcss">W3C: What is CSS</a></li>
                </ul>
                <div class="credits">   
                    <p>Source: Content from wikipedia, <a href = "https://en.wikipedia.org/wiki/CSS"> CSS</a></p>
                    <p>Webpage by Ethan</p>      
                </div>  
            </footer>
        </div>
        <?php include("inc/scripts.php")?>
    </body>
</html>