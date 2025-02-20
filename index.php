<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin CSS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
                            <img src="https://unsplash.it/640" alt="">
                        </div>
                        <div class="text-container">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ex quisquam earum voluptate molestias
                                repellendus rem!</p>
                            <div class="button-container">
                                <a class="button" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
</body>

</html>