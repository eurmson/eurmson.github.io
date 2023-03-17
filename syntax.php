<?php $customCSS = '<link rel="stylesheet" href="css\codeBlocks.css">'?>
<?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <header>
                <h1>CSS</h1>
                <h2>Making Html Look Nice</h2>
            </header>
            <?php include("inc/nav.php")?>
            <article>
                <h2 id="Syntax">Syntax</h2>
                <p>
                    CSS has a simple syntax and uses a number of English keywords to specify the names of various style properties.
                    A style sheet consists of a list of rules. Each rule or rule-set consists of one or more selectors, and a declaration block.
                </p>
                
    
                <h3 id="Declaration">Declaration Block</h3>
                <p>
                    A declaration block consists of a list of declarations in braces. Each declaration itself consists of a property, a colon (:), and a value. If there are multiple declarations in a block, a semi-colon (;) must be inserted to separate each declaration. An optional semi-colon after the last (or single) declaration may be used.
                    Properties are specified in the CSS standard. Each property has a set of possible values. Some properties can affect any type of element, and others apply only to particular groups of elements.              
                    Values may be keywords, such as "center" or "inherit", or numerical values, such as 200px (200 pixels), 50vw (50 percent of the viewport width) or 80% (80 percent of the parent element's width). Color values can be specified with keywords (e.g. "red"), hexadecimal values (e.g. #FF0000, also abbreviated as #F00), RGB values on a 0 to 255 scale (e.g. rgb(255, 0, 0)), RGBA values that specify both color and alpha transparency (e.g. rgba(255, 0, 0, 0.8)), or HSL or HSLA values (e.g. hsl(000, 100%, 50%), hsla(000, 100%, 50%, 80%)).
                    Length units
                    Non-zero numeric values representing linear measures must include a length unit, which is either an alphabetic code or abbreviation, as in 200px or 50vw; or a percentage sign, as in 80%. Some units - cm (centimetre); in (inch); mm (millimetre); pc (pica); and pt (point) - are absolute, which means that the rendered dimension does not depend upon the structure of the page; others - em (em); ex (ex) and px (pixel)[clarification needed] - are relative, which means that factors such as the font size of a parent element can affect the rendered measurement. These eight units were a feature of CSS 1 and retained in all subsequent revisions. The proposed CSS Values and Units Module Level 3 will, if adopted as a W3C Recommendation, provide seven further length units: ch; Q; rem; vh; vmax; vmin; and vw.
                </p>
    
                <h3 id="Use">Use</h3>
                <p>
                    Before CSS, nearly all presentational attributes of HTML documents were contained within the HTML markup. All font colors, background styles, element alignments, borders and sizes had to be explicitly described, often repeatedly, within the HTML. CSS lets authors move much of that information to another file, the style sheet, resulting in considerably simpler HTML.
                    For example, headings (h1 elements), sub-headings (h2), sub-sub-headings (h3), etc., are defined structurally using HTML. In print and on the screen, choice of font, size, color and emphasis for these elements is presentational.
                    Before CSS, document authors who wanted to assign such typographic characteristics to, say, all h2 headings had to repeat HTML presentational markup for each occurrence of that heading type. This made documents more complex, larger, and more error-prone and difficult to maintain. CSS allows the separation of presentation from structure. CSS can define color, font, text alignment, size, borders, spacing, layout and many other typographic characteristics, and can do so independently for on-screen and printed views. CSS also defines non-visual styles, such as reading speed and emphasis for aural text readers. The W3C has now deprecated the use of all presentational HTML markup.
                    For example, under pre-CSS HTML, a heading element defined with red text would be written as:
                </p>
                <!-- Becasue my article is on CSS, it has some code snipits as exsamples on how to use it-->
                <figure class="codeblock">
                    <span class="html-tag">&lt;h1&gt;&lt;font <span class="attribute">color=</span><span class="quotes">"red"</span>&gt;</span>Chapter 1.<span class="html-tag">&lt;/font&gt;&lt;/h1&gt;</span>
                </figure>
                <p>Using CSS, the same element can be coded using style properties instead of HTML presentational attributes:</p>
                <figure class="codeblock">
                    <span class="html-tag">&lt;h1 <span class="attribute">style=</span><span class="quotes">"color: red;"</span>&gt;</span>Chapter 1.<span class="html-tag">&lt;/h1&gt;</span>
                </figure>
                <p>The advantages of this may not be immediately clear but the power of CSS becomes more apparent when the style properties are placed in an internal style element or, even better, an external CSS file. For example, suppose the document contains the style element:</p>
                <figure class="codeblock">
                    <span class="html-tag ownline">&lt;style&gt;</span>
                        <span class="highlight">h1 {</span>
                            <span class="attribute">color:</span><span class="quotes">red</span>; 
                        <span class="highlight">}</span>
                    <span class="html-tag ownline">&lt;/style&gt;</span>
                </figure>
                <p>All h1 elements in the document will then automatically become red without requiring any explicit code. If the author later wanted to make h1 elements blue instead, this could be done by changing the style element to:</p>
                <figure class="codeblock">
                    <span class="html-tag ownline">&lt;style&gt;</span>
                        <span class="highlight">h1 {</span>
                            <span class="attribute">color:</span><span class="quotes">blue</span>; 
                        <span class="highlight">}</span>
                    <span class="html-tag ownline">&lt;/style&gt;</span>
                </figure>
                <p>
                    rather than by laboriously going through the document and changing the color for each individual h1 element.
                    The styles can also be placed in an external CSS file, as described below, and loaded using syntax similar to:
                </p>    
                <figure class="codeblock">
                    <span class="html-tag">&lt;link <span class="attribute">href=<span class="quotes">"path/to/file.css"</span> rel=<span class="quotes">"stylesheet"</span> type=<span class="quotes">"text/css"</span></span>&gt;</span>
                </figure>
                <p>This further decouples the styling from the HTML document and makes it possible to restyle multiple documents by simply editing a shared external CSS file.</p>
                
                <h3 id="Sources">Sources</h3>
                <p>
                    CSS information can be provided from various sources. These sources can be the web browser, the user, and the author. The information from the author can be further classified into inline, media type, importance, selector specificity, rule order, inheritance, and property definition. CSS style information can be in a separate document, or it can be embedded into an HTML document. Multiple style sheets can be imported. Different styles can be applied depending on the output device being used; for example, the screen version can be quite different from the printed version, so that authors can tailor the presentation appropriately for each medium.
                    The style sheet with the highest priority controls the content display. Declarations not set in the highest priority source are passed on to a source of lower priority, such as the user agent style. The process is called cascading.
                    One of the goals of CSS is to allow users greater control over presentation. Someone who finds red italic headings difficult to read may apply a different style sheet. Depending on the browser and the web site, a user may choose from various style sheets provided by the designers, or may remove all added styles and view the site using the browser's default styling, or may override just the red italic heading style without altering other attributes.
                </p>
            </article>
            <aside>
                <h3 id="Selectors">Selectors</h3>
                <p>
                    In CSS, <em>selectors</em> declare which part of the markup a style applies to by matching tags and attributes in the markup itself. Selectors may apply to the following:
                    all elements of a specific type, e.g. the second-level headers h2
                    elements specified by attribute, in particular:
                    id: an identifier unique within the document, identified with a hash prefix e.g. #id
                    class: an identifier that can annotate multiple elements in a document, identified with a period prefix e.g. .classname (the phrase "CSS class", although sometimes used, is a misnomer, as element classes—specified with the HTML class attribute—is a feature of HTML that is distinct from the work on browsers' presentational styling subsystem and the related W3C/WHATWG standards work on document styles; see RDF and microformats for the origins of the "class" system of the Web content model)
                    elements depending on how they are placed relative to others in the document tree.
                    Classes and IDs are case-sensitive, start with letters, and can include alphanumeric characters, hyphens, and underscores. A class may apply to any number of instances of any elements. An ID may only be applied to a single element.
                    Pseudo-classes are used in CSS selectors to permit formatting based on information that is not contained in the document tree. One example of a widely used pseudo-class is :hover, which identifies content only when the user "points to" the visible element, usually by holding the mouse cursor over it. It is appended to a selector as in a:hover or #elementid:hover. A pseudo-class classifies document elements, such as :link or :visited, whereas a pseudo-element makes a selection that may consist of partial elements, such as ::first-line or ::first-letter. Note the double-colon notation for pseudo-elements versus single-colon notation for pseudo-class.
                    Selectors may be combined in many ways to achieve great specificity and flexibility. Multiple selectors may be joined in a spaced list to specify elements by location, element type, id, class, or any combination thereof. The order of the selectors is important. For example, div .myClass {color: red;} applies to all elements of class myClass that are inside div elements, whereas .myClass div {color: red;} applies to all div elements that are inside elements of class myClass. This is not to be confused with concatenated identifiers such as div.myClass {color: red;} which applies to div elements of class myClass.
                    The following table provides a summary of selector syntax indicating usage and the version of CSS that introduced it.
                </p>
                <h3 id="Specificity">Specificity</h3>
                <p>Specificity refers to the relative weights of various rules. It determines which styles apply to an element when more than one rule could apply. Based on specification, a simple selector (e.g. H1) has a specificity of 1, class selectors have a specificity of 1,0, and ID selectors a specificity of 1,0,0. Because the specificity values do not carry over as in the decimal system, commas are used to separate the "digits" (a CSS rule having 11 elements and 11 classes would have a specificity of 11,11, not 121).</p>
            </aside>
        </div>
        <?php include("inc/scripts.php")?>
    </body>
</html>     