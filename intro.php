<?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <header>
                <h1>CSS</h1>
                <h2>Making Html Look Nice</h2>
            </header>
            <?php include("inc/nav.php")?>
            
            <article>
                <h2 id="intro">Intro</h2>
                <figure>
                    <img src = "images/css_image3.png" alt="CSS 3 logo">
                    <figcaption>The official logo of the latest version, CSS 3</figcaption>
                </figure>
                <p>
                    <strong>Cascading Style Sheets</strong> (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML (including XML dialects such as SVG, MathML or XHTML). CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
                    CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.
                    Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices.
                    
                </p>
            </article>
            <aside>
                <h3 id="other-markup">Other Markup Languages</h3>
                <p>
                    In addition to HTML, other markup languages support the use of CSS including XHTML, plain XML, SVG, and XUL.
                    CSS also has rules for alternate formatting if the content is accessed on a mobile device.
                    The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.
                    The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS validation service for CSS documents.
                </p>

            </aside>
            
        </div>
        <?php include("inc/scripts.php")?>
</body>
</html>