<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin CSS</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/catppuccin.min.css">
    <script src="js/app.js" defer></script>
    <script src="js/theme.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <!-- and it's easy to individually load additional languages -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/html.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/scss.min.js"></script>

    <script>hljs.highlightAll();</script>
</head>

<body>
    <header class="bg-alt">
        <div class="wrapper">
            <div class="logo-container">
                <a href="#">Kevin css</a>
            </div>
            <div class="filler"></div>
            <nav>
                <ul>
                    <li>
                        <a href="#">Item</a>
                    </li>
                    <li>
                        <a href="#">Item</a>
                    </li>
                    <li>
                        <a href="#">Item</a>
                    </li>
                    <li>
                        <a href="#">Item</a>
                    </li>
                </ul>
            </nav>
            <label id="theme-switch" class="theme-switch" for="checkbox_theme">
                <input type="checkbox" id="checkbox_theme">
                <span class="light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                </span>
                <span class="dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                </span>
            </label>
            <div class="button-container">
                <a class="button" href="#">Contact</a>
            </div>
            <button type="menu" class="button">menu</button>
        </div>
    </header>
    <section>
        <div class="wrapper">
            <div class="text-container">
                <h2>Headers</h2>
                <p>A header is an HTML element that represents introductory content, typically containing navigational links or introductory information about the section it precedes. It is defined using the <kbd>header</kbd> tag in HTML.</p>
                <pre><code class="language-css">.bg-primary {
  --bg: var(--color-primary);
  --fg: var(--color-primary-text);
  background-color: var(--bg);
  color: var(--fg);
}
                </code></pre>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="text-container">
                <h1>H1: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</h1>
        
                <h2>H2: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</h2>
        
                <h3>H3: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</h3>
        
                <h4>H4: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</h4>
        
                <h5>H5: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</h5>
        
                <h6>H6: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</h6>
        
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</p>
        
                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo!</a>

                <div class="button-container">
                    <a class="button" href="#">Single button</a>
                </div>
                <div class="button-container">
                    <a class="button" href="#">Button one</a>
                    <a class="button" href="#">Button two</a>
                    <a class="button" href="#">Button three</a>
                </div>
        
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="text-container">
                <h2>Card container</h2>
            </div>
            <div class="card-container">
                <?php for ($i=0; $i < 12; $i++) { ?>
                    <div href="#" class="card bg-alt shape">
                        <div class="image-container">
                            <img loading="lazy" src="https://unsplash.it/seed/<?= $i+1; ?>/1920/1440" alt="">
                        </div>
                        <div class="text-container">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ex quisquam earum voluptate molestias
                                repellendus rem!</p>
                            <div class="button-container stretch">
                                <a class="button" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <footer class="bg-alt">
        <div class="wrapper">
            <div class="logo-container">
                <a href="#">Goodbeye</a>
            </div>
            <div class="filler"></div>
            <nav>
                <ul>
                    <li>
                        <a href="#">Item</a>
                    </li>
                    <li>
                        <a href="#">Item</a>
                    </li>
                    <li>
                        <a href="#">Item</a>
                    </li>
                    <li>
                        <a href="#">Item</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    
</body>

</html>