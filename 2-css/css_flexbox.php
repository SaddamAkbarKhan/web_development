<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            /* Boxes snap horizontally instead of stacking vertically */
            /* flex-direction: column; */
            /* justify-content: center;
            align-items: center; */
            gap: 10px;
            /* flex-wrap: wrap-reverse; */

            
            
        }

        .box {
            background-color: red;
            height: 200px; 
            width: 200px;
            border: 1px solid black;
            /* flex-grow: 2;
            flex-shrink: 1;
            flex-basis: 100px; */
            /* align-self: flex-end; */
           

        }
        .box1 {
            background-color: red;
            height: 200px; 
            width: 200px;
            border: 1px solid black;
            
            align-self: flex-end;
           

        }

        .navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background-color: #1e293b;
  color: #fff;
}

.nav-links {
  display: flex;
  list-style: none;
  gap: 1.5rem;
  margin: 0;
  padding: 0;
  text-decoration: none;
  color: white;
}

.cta-btn {
  padding: 0.5rem 1.25rem;
  background: #3b82f6;
  color: white;
  border: none;
  border-radius: 4px;
}


.cards-container {
  display: flex;
  flex-wrap: wrap; /* Screen choti hone par auto wrap */
  gap: 20px;
  padding: 20px;
  justify-content: center;
}

.card {
  flex: 1 1 250px; /* Minimum 250px, desktop par barabar divide */
  max-width: 350px;
  display: flex;
  flex-direction: column;
  background: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.card button {
  margin-top: auto; /* Buttons aligned at bottom */
  padding: 10px;
  background: #2563eb;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}



.card1 {
  display: flex;
  flex-direction: column; /* Vertical flow */
  border: 1px solid #ccc;
  padding: 15px;
}

.card1 button {
  margin-top: auto; /* Chahe content kitna bhi ho, button hamesha bottom par locked rahega */
}



    </style>
</head>

<body>







<nav class="navbar">
  <div class="logo">BrandName</div>
  <ul class="nav-links">
    <li><a href="#">Home</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
  <button class="cta-btn">Sign In</button>
</nav>


    <div class="container">
        <div class="box">1</div>
        <div class="box">2</div>
        <div class="box1">3</div>
    </div>




    <div class="cards-container">
  <div class="card">
    <h3>Basic Plan</h3>
    <p>Chota description yahan aayega.</p>
    <button>Subscribe</button>
  </div>
  <div class="card">
    <h3>Pro Plan</h3>
    <p>Is card ka text thora lamba hai taake height ka farq nazar aaye students ko.</p>
    <button>Subscribe</button>
  </div>
  <div class="card">
    <h3>Enterprise Plan</h3>
    <p>Standard features list.</p>
    <button>Subscribe</button>
  </div>
</div>

</body>

</html>