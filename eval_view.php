<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Product Evaluation Form</h1>
        <form action="" href="">
            <div class="alignment">
                <label class="block">1. What's your name?</label>
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
            </div>
            <div class="alignment">
                <label class="block">2. Your age?</label>
                <input type="age" name="age" required>
            </div>
            <div class="alignment">
                <label class="block">3. What was your first impression of the product?</label>
                <input type="text" name="impression" required>
            </div>
            
            <div class="alignment">
            <label class="block">4. How would you rate the price relative to the quality?</label>
                <div class="stars">
                    <label for="star1">&#9733;</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    
                    <label for="star2">&#9733;</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    
                    <label for="star3">&#9733;</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    
                    <label for="star4">&#9733;</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    
                    <label for="star5">&#9733;</label>
                    <input type="radio" id="star5" name="rating" value="5" />
                    
                </div>
            </div>
            
            <div class="alignment">
                <label class="block">5. What would make this product better?</label>
                <input type="text" name="improvement" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>