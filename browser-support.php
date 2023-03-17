    <?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <header>
                <h1>CSS</h1>
                <h2>Making Html Look Nice</h2>
            </header>
            <?php include("inc/nav.php")?>
            <article>
                <h2 id="Browser">Browser support</h2>
                <p>Each web browser uses a layout engine to render web pages, and support for CSS functionality is not consistent between them. Because browsers do not parse CSS perfectly, multiple coding techniques have been developed to target specific browsers with workarounds (commonly known as CSS hacks or CSS filters). Adoption of new functionality in CSS can be hindered by lack of support in major browsers. For example, Internet Explorer was slow to add support for many CSS 3 features, which slowed adoption of those features and damaged the browser's reputation among developers. Additionally, a proprietary syntax for the non-vendor-prefixed filter property was used in some versions. In order to ensure a consistent experience for their users, web developers often test their sites across multiple operating systems, browsers, and browser versions, increasing development time and complexity. Tools such as BrowserStack have been built to reduce the complexity of maintaining these environments.</p>
                
                <p>As websites adopt newer code standards that are incompatible with older browsers, these browsers can be cut off from accessing many of the resources on the web (sometimes intentionally). Many of the most popular sites on the internet are not just visually degraded on older browsers due to poor CSS support, but do not work at all, in large part due to the evolution of JavaScript and other web technologies.</p>
                
            </article>
            <aside>
                <h3 id="Testing-tools">Testing tools</h3>
                <p>In addition to these testing tools, many sites maintain lists of browser support for specific CSS properties, including CanIUse and the MDN Web Docs. Additionally, the CSS 3 defines feature queries, which provide an @supports directive that will allow developers to target browsers with support for certain functionality directly within their CSS. CSS that is not supported by older browsers can also sometimes be patched in using JavaScript polyfills, which are pieces of JavaScript code designed to make browsers behave consistently. These workarounds—and the need to support fallback functionality—can add complexity to development projects, and consequently, companies frequently define a list of browser versions that they will and will not support.</p>
            </aside>
            
        </div>
        <?php include("inc/scripts.php")?>
    </body>
</html>