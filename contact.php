<?php include("inc/html-top.php")?>
    <body>
        <div class="container">
            <?php include("inc/nav.php")?>
            <main>
                <h1>Html Forms, Part 1</h1>
                <form method="post" action="form-processor.php" class="full-width">
                    <fieldset>
                        <legend>Your Contact</legend>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required><br>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required><br>
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" required><br>
                    </fieldset>
                    <fieldset>
                        <legend>What is your favorite CSS tool for layout</legend>
                        <input type="radio" name="layouts" id="flex" value ="flex">
                        <label for="flex">Flex</label><br>
                        <input type="radio" name="layouts" id="block" value="block">
                        <label for="block">Block</label><br>
                        <input type="radio" name="layouts" id="grid" value="grid">
                        <label for="grid">Grid</label><br>
                        <input type="radio" name="layouts" id="inline" value="inline">
                        <label for="inline">Inline Block</label><br>
                    </fieldset>
                    <fieldset>
                        <legend>Which parts of CSS would you like to learn more about?</legend>
                        <input type="checkbox" name="pseudoselectors" id="pseudoselectors" value="Pseudo Selectors" >
                        <label for="pseudoselectors">Pseudo Selectors</label><br>
                        <input type="checkbox" name="classes" id="classes" value="classes">
                        <label for="classes">Classes</label><br>
                        <input type="checkbox" name="specificity" id="specificity" value="specificity">
                        <label for="specificity">Selector Specificity</label><br>
                        <input type="checkbox" name="elementattributes" id="elementattributes" value="element attributes">
                        <label for="elementattributes">Element Attributes</label><br>
                    </fieldset>
                    
                    <label for="rating">How much do you like CSS? (1-10)</label><br>
                    <input name="rating" id="rating" type="range" min="1" max="10"><br>
                    
                    <label for="questions">Any Other Questions?</label><br>
                    <textarea name="questions" id="questions"></textarea><br>    
                    <input type="submit" value="Submit ">        
                </form>
            </main>
        </div>
        <?php include("inc/scripts.php")?>
</body>
</html>