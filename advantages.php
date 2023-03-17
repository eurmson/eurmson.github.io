<?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <header>
                <h1>CSS</h1>
                <h2>Making Html Look Nice</h2>
            </header>
            <?php include("inc/nav.php")?>
            <article>
                <h2 id="Advantages">Advantages</h2>
                <p>
                    Separation of content from presentation
                    Main article: Separation of presentation and content
                    CSS facilitates publication of content in multiple presentation formats based on nominal parameters. Nominal parameters include explicit user preferences, different web browsers, the type of device being used to view the content (a desktop computer or mobile device), the geographic location of the user and many other variables.
                </p>
                <p>When CSS is used effectively, in terms of inheritance and "cascading", a global style sheet can be used to affect and style elements site-wide. If the situation arises that the styling of the elements should be changed or adjusted, these changes can be made by editing rules in the global style sheet. Before CSS, this sort of maintenance was more difficult, expensive and time-consuming.</p>
                <p>A stylesheet, internal or external, specifies the style once for a range of HTML elements selected by class, type or relationship to others. This is much more efficient than repeating style information inline for each occurrence of the element. An external stylesheet is usually stored in the browser cache, and can therefore be used on multiple pages without being reloaded, further reducing data transfer over a network.</p>
                
            </article>
            <aside>
                <h3 id="interchagablilty">Interchagablilty</h3>
                <p>With a simple change of one line, a different style sheet can be used for the same page. This has advantages for accessibility, as well as providing the ability to tailor a page or site to different target devices. Furthermore, devices not able to understand the styling still display the content.</p>
                <p>Without CSS, web designers must typically lay out their pages with techniques such as HTML tables that hinder accessibility for vision-impaired users (see Tableless web design#Accessibility).</p>
            </aside>
        </div>
    <?php include("inc/scripts.php") ?>
</body>
</html>