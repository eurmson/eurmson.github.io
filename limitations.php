<?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <header>
                <h1>CSS</h1>
                <h2>Making Html Look Nice</h2>
            </header>
            <?php include("inc/nav.php")?>
            
            
            <article>
                <h2 id="Limitations">Limitations</h2>
                <p>Some noted limitations of the current capabilities of CSS include:</p>
                <ul>
                    <li>Selectors are unable to ascend</li>
                    <li>CSS currently offers no way to select a parent or ancestor of an element that satisfies certain criteria. CSS Selectors Level 4, which is still in Working Draft status, proposes such a selector, but only as part of the complete "snapshot" selector profile, not the fast "live" profile used in dynamic CSS styling. A more advanced selector scheme (such as XPath) would enable more sophisticated style sheets. The major reasons for the CSS Working Group previously rejecting proposals for parent selectors are related to browser performance and incremental rendering issues.</li>
                    <li>Cannot explicitly declare new scope independently of position</li>
                    <li>Scoping rules for properties such as z-index look for the closest parent element with a position:absolute or position:relative attribute. This odd coupling has undesired effects. For example, it is impossible to avoid declaring a new scope when one is forced to adjust an element's position, preventing one from using the desired scope of a parent element.</li>
                    <li>Pseudo-class dynamic behavior not controllable</li>
                    <li>CSS implements pseudo-classes that allow a degree of user feedback by conditional application of alternate styles. One CSS pseudo-class, ":hover", is dynamic (equivalent of JavaScript "onmouseover") and has potential for misuse (e.g., implementing cursor-proximity popups), but CSS has no ability for a client to disable it (no "disable"-like property) or limit its effects (no "nochange"-like values for each property).</li>
                    <li>Cannot name rules</li>
                    <li>There is no way to name a CSS rule, which would allow (for example) client-side scripts to refer to the rule even if its selector changes.</li>
                    <li>Cannot include styles from a rule into another rule</li>
                    <li>CSS styles often must be duplicated in several rules to achieve a desired effect, causing additional maintenance and requiring more thorough testing. Some new CSS features were proposed to solve this, but were abandoned afterwards. Instead, authors may gain this ability by using more sophisticated stylesheet languages which compile to CSS, such as Sass, Less, or Stylus.</li>
                    <li>Cannot target specific text without altering markup</li>
                    <li>Besides the :first-letter pseudo-element, one cannot target specific ranges of text without needing to utilize place-holder elements.</li>
                </ul>
                
                
            </article>
            <aside>
                <h3 id="FormerIssues">Former Issues</h3>
                <ul>
                    <li>Vertical control limitations</li>
                    <li>Absence of expressions</li>
                    <li>There was no standard ability to specify property values as simple expressions (such as margin-left: 10% - 3em + 4px;). This would be useful in a variety of cases, such as calculating the size of columns subject to a constraint on the sum of all columns. Internet Explorer versions 5 to 7 support a proprietary expression() statement, with similar functionality. This proprietary expression() statement is no longer supported from Internet Explorer 8 onwards, except in compatibility modes. This decision was taken for "standards compliance, browser performance, and security reasons". However, a candidate recommendation with a calc() value to address this limitation has been published by the CSS WG and has since been supported in all of the modern browsers.</li>
                    <li>Lack of column declaration</li>
                    <li>Although possible in current CSS 3 (using the column-count module), layouts with multiple columns can be complex to implement in CSS 2.1. With CSS 2.1, the process is often done using floating elements, which are often rendered differently by different browsers, different computer screen shapes, and different screen ratios set on standard monitors. All of the modern browsers support this CSS 3 feature in one form or another.
                </ul>
            </aside>
        </div>
    <?php include("inc/scripts.php") ?>
</body>
</html>