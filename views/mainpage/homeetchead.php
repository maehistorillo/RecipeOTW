<!-- ETC -->
<html>
<head>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<div>
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
              <?php 
			
			
			if(!isset($username)){
				echo '
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="'.base_url('Mainpage/Home/').'">Home</a></li>
        <li><a href="#recipe">Featured Recipes</a></li>
		<li><a href="#service">Cuisines</a></li>
		<li><a href="#aboutus">About Us</a></li>
		<li><a href="#contact">Reviews</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="'.base_url('Mainpage/Login').'">Log In</a></li>
            <li><a href="'.base_url('Mainpage/Signup').'">Sign Up</a></li>
          </ul>
        </li>
      </ul>
            </div> 
			';
			}
			else{
				echo '<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="'.base_url('Mainpage/Home/').'">Home</a></li>
        <li><a href="#recipe">Featured Recipes</a></li>
		<li><a href="#service">Cuisines</a></li>
		<li><a href="#aboutus">About Us</a></li>
		<li><a href="#contact">Reviews</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <b class="caret"></b></a>
          <ul class="dropdown-menu">';
		  if($usercred == 1){
			  echo'
            <li><a href="'.base_url('/Mainpage/Admin').'">'.$username.'</a></li>
			';
		  }
		  else{
			  echo'
			<li><a href="'.base_url('/Mainpage/User').'">'.$username.'</a></li>
			';
		  }
		  echo'
            <li><a href="'.base_url('/Mainpage/logout').'">Logout</a></li>
          </ul>
        </li>
      </ul>
            </div>';
			}
			?>
        <!-- /.container -->
    </nav>

<section id="recipe" class="home-section text-left">
<div class="container">
<div class="row" id="pad">
<div class="col-md-12">


<button class="tablink" onclick="openCat('Dishes')" id="defaultOpen">Dishes</button>
<button class="tablink" onclick="openCat('Side Dish')">Side Dish</button>
<button class="tablink" onclick="openCat('Desserts')">Desserts</button>
<button class="tablink" onclick="openCat('Smoothies')">Smoothies</button>

</div>

<div class="row" id="pad">
<div id="Dishes" class="tabcontent">
	<div class="col-md-12">
  <h3>Dishes</h3>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/courgettebacon.jpg'); ?>" alt="Creamy Courgette & Bacon Pasta" style="width:100%">
			<h5><br />Creamy Courgette & Bacon Pasta</h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target="A1"><button >See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/marmitespag.jpg'); ?>" alt="Marmite & Pancetta Spaghetti" style="width:100%">

			<h5><br />Marmite & Pancetta Spaghetti</h5>
			<p><span style="font-size:30px; cursor:pointer"><button class="open" data-target="A2">See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg'); ?>" alt="Lamb Curry" style="width:100%">
			<h5><br />Home-Style Lamb Curry<br /><br /></h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='A3'><button>See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Lasagne.jpg'); ?>" alt="John" style="width:100%">
			<h5><br />Spinach & Courgette Lasagna</h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='A4'><button>See More...</button></span></p>
		</div>
		
	</div>

	
	<div class="container2 A1">
		<p>
		<a class="close">Close</a>	
		</p>
		<p class="changeText">
		<div class="row">
				<div class="col-md-4">
				<h3>Creamy Courgette & Bacon Pasta</h3>
				<img src="<?php echo base_url('bootstrap/img/cat/courgettebacon.jpg'); ?>" />
				</div>
				<div class="col-md-4">
				<h3>Ingredients</h3>
				<p> 1 tsp olive oil
				<br /> 150g diced pancetta or smoked bacon lardons
					4 courgettes, coarsely grated
				<br /> 1 garlic clove, crushed handful freshly grated parmesan
				<br />1 small tub (200g) low-fat crème fraîche 300g tagliatelle</p>
				<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
				</div>
				<div class="col-md-4">
				<h3>Procedure</h3>
				<p>
					1.	Heat the olive oil in a large frying pan and sizzle the pancetta or bacon for about 5 mins until starting to crisp. Turn up the heat and add the grated courgette to the pan. Cook for 5 mins or until soft and starting to brown then add the garlic and cook for a minute longer. Season and set aside.
					<br /><br />
					2.	Cook the tagliatelle according to the pack instructions and scoop out a cupful of cooking water. Drain the tagliatelle and tip into the frying pan with the bacon and courgette. Over a low heat toss everything together with the crème fraiche and half the Parmesan adding a splash of pasta water too if you need to loosen the sauce. Season to taste and serve twirled into bowls with the remaining Parmesan scattered over.
				</p>

				
				<!-- <form> -->
				<!-- <input type=button value="Print Me!" onClick="javascript:window.print()" class="btn-cart btn btn-danger btn-xs align-center"></input> -->
				<!-- </form> -->
				</div>
				
			</div>
		</p>
	</div>
		
	
	<div class="container2 A2">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Marmite & Pancetta Spaghetti</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/courgettebacon.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>
			500g pack of spaghetti
			<br /> 1 tbsp olive oil
			<br />2 tsp Marmite
			<br /> 200g pancetta, diced
			<br /> 80g butter, softened
			<br /> 50g cheddar, grated
			<br /> 50g cheddar, grated parmesan, to serve
			</p>
						<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>
1.	Bring a large pan of water to the boil and add the spaghetti. Meanwhile, heat the oil in a frying pan and cook the pancetta for 8-10 mins until crispy.
<br /><br />
2.	Once the pasta is cooked, drain, reserving a little pasta water. Tip the spaghetti back into the pan with the pasta water and add the pancetta with the fat from the pan, the butter, Marmite and cheeses. Use tongs to coat the spaghetti in the sauce and season with a little pepper. Taste and add a little more Marmite , if you like. Serve in bowls with extra Parmesan sprinkled over.
			</p>


			</div>
		</div>
		</p>
		</div>

			<div class="container2 A3">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Home-Style Lamb Curry</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/lambcurry.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>
			thumb-sized piece ginger, ½ cut into matchsticks, the rest left whole
			<br />2 onions, quartered
			<br />4 garlic cloves
			<br />2 tbsp rapeseed oil
			<br />1 cinnamon stick
			<br />1 tbsp ground coriander
			<br />1 tsp ground cumin
			<br />1 tsp ground turmeric
			<br />½ tsp fennel seeds
			<br />750g leg of lamb, diced
			<br />400g can chopped tomatoes
			<br />1 red chilli or green chilli, deseeded and sliced
			<br />small bunch coriander, stalks finely chopped, leaves roughly chopped
			<br />basmati rice and mango chutney or raita, to serve
			</p>
			<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>

1.	Put the whole piece of ginger, the onions and garlic in a food processor with 300ml water. Blitz to a smooth purée. Scrape down the sides with a spoon and blitz again to make it as smooth as you can. Tip into a deep sauté pan, cover with a lid and simmer for 15 mins. Remove the lid and cook for 5 mins more, stirring occasionally. By now the liquid should be all gone. If not, cook a little longer.<br />
2.	Add the oil to the pan with the rest of the ginger. Turn up the heat and fry, stirring, for 3-5 mins until it starts to colour.<br />
3.	Stir in the spices and add the lamb. Stir-fry until the lamb changes colour. Tip in the tomatoes with a can of water and the chilli, season well, cover and leave to simmer for 1 hr.<br />
4.	Stir in the coriander stalks, re-cover and cook for a final 30 mins until the lamb is tender. Add a splash of water if necessary to loosen the consistency as it cooks. Stir in the coriander leaves and serve with basmati rice and mango chutney or raita.

</p>

			
			</div>
		</div>
		</p>
		</div>
	
	<div class="container2 A4">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Spinach & courgette lasagna</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Lasagne.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>400g spinach
			<br />1 tbsp olive oil
			<br />2 garlic cloves, crushed
			<br />250g mascarpone
			<br />1 tsp ground nutmeg
			<br />100g parmesan(or vegetarian alternative), grated
			<br />9 lasagne sheets
			<br />100ml double cream
			<br />3 large courgettes, sliced lengthways
			</p>
			<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>


1.	Pour boiling water over the spinach in a sieve or colander to wilt it. Leave until cool enough to handle, then squeeze out any excess liquid. Heat the oil in a non-stick frying pan over a medium heat, add the garlic and soften for 1 min. Tip in the nutmeg and cook for 1 min more, then add the mascarpone, spinach, half the cream and half the parmesan. Season generously, stir well and set aside. <br />
2.	Heat oven to 180C/160C fan/gas 4. Spread a third of the filling over the base of a 20 x 30cm baking dish, cover with 3 lasagne sheets, then add a layer of courgettes. Repeat twice more. Pour the remaining cream over the final layer and sprinkle over the remaining parmesan. Bake for 40-45 mins or until the sauce is bubbling and the pasta has no resistance when you push a skewer through. Rest for 5 mins, then serve.

</p>

			</div>
		</div>
		</p>
		</div>
	
<div class="overlay2"></div>
</div>
	

<div id="Side Dish" class="tabcontent">
<div class="col-md-12">
  <h3>Side Dish</h3>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/parmesanpotatosalad.jpg'); ?>" alt="Lemon-Caper Parmesan Potato Salad Bites" style="width:100%">
			<h5><br />Lemon-Caper Parmesan Potato Salad Bites</h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target="B1"><button >See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/bacontomatobites.jpg'); ?>" alt="Bacon Endive Tomato Bites" style="width:100%">

			<h5><br />Bacon Endive Tomato Bites</h5>
			<p><span style="font-size:30px; cursor:pointer"><button class="open" data-target="B2">See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Mini Corn Dogs with Cranberry Mustard.jpg'); ?>" alt="Mini Corn Dogs with Cranberry Mustard" style="width:100%">
			<h5><br />Mini Corn Dogs with Cranberry Mustard<br /></h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='B3'><button>See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Strawberry Bruschetta.jpg'); ?>" alt="Strawberry Bruschetta" style="width:100%">
			<h5><br />Strawberry Bruschetta</h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='B4'><button>See More...</button></span></p>
		</div>
		
	</div>

	
	<div class="container2 B1">
		<p>
		<a class="close">Close</a>	
		</p>
		<p class="changeText">
		<div class="row">
				<div class="col-md-4">
				<h3>Lemon-Caper Parmesan Potato Salad Bites</h3>
				<img src="<?php echo base_url('bootstrap/img/cat/parmesanpotatosalad.jpg'); ?>" />
				</div>
				<div class="col-md-4">
				<h3>Ingredients</h3>
				<p> 12 small red potatoes, halved (about 1 1/4 pounds)
<br />2 teaspoons olive oil
<br />1/2 cup light sour cream
<br />2 tablespoons minced fresh chives, divided
<br />2 tablespoons butter, melted
<br />2 tablespoons finely chopped drained capers
<br />1 1/2 teaspoons lemon juice
<br />1/2 teaspoon kosher salt
<br />1/2 teaspoon freshly ground black pepper
<br />2 tablespoons grated Parmesan cheese
</p>
<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
				</div>
				<div class="col-md-4">
				<h3>Procedure</h3>
				<p>
				1. Preheat oven to 450°.<br />
				2. Combine potatoes and oil; toss to coat. Arrange potatoes, cut sides down, in a single layer on a parchment paper–lined baking sheet. Bake at 450° for 20 minutes. Turn potatoes; bake 10 minutes. Remove and cool 20 minutes.<br />
				3. Preheat broiler to high.<br />
				4. Using a paring knife, carefully cut a circle in the cut side of potatoes. Using a melon baller or small spoon, remove pulp from potato, leaving a thin shell. Combine pulp, sour cream, 1 tablespoon chives, and next 5 ingredients (through pepper). Evenly fill potato shells with filling; sprinkle with cheese and remaining 1 tablespoon chives.<br />
				5. Broil potatoes for 2 minutes or until cheese is lightly browned.

				</p>

				</div>
				
			</div>
		</p>
	</div>
		
	
	<div class="container2 B2">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Bacon Endive Tomato Bites</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/bacontomatobites.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>
			1 cup sliced multicolored grape tomatoes
			<br />1 teaspoon fresh thyme leaves
			<br />1 teaspoon chopped fresh chives
			<br />2 teaspoons champagne vinegar
			<br />1 teaspoon olive oil
			<br />1/4 teaspoon freshly ground black pepper
			<br />1/8 teaspoon salt
			<br />16 Belgian endive leaves (about 2 heads)
			<br />2 center-cut bacon slices, cooked and crumbled
			</p>
			<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>
1.	Combine first 7 ingredients in a medium bowl. Spoon 1 tablespoon tomato mixture in center of each endive leaf; sprinkle evenly with bacon.
			</p>

			</div>
		</div>
		</p>
		</div>

			<div class="container2 B3">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Mini Corn Dogs with Cranberry Mustard</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Mini Corn Dogs with Cranberry Mustard.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>
			<br />1 cup flour
			<br />3/4 cup yellow cornmeal
			<br />3 tablespoons sugar
			<br />2 teaspoons kosher salt
			<br />3/4 teaspoon baking powder
			<br />1/4 teaspoon baking soda
			<br />1 1/2 cups buttermilk
			<br />3 tablespoons butter, melted
			<br />1 large egg
			<br />Vegetable oil
			<br />12 ounces thin hot dogs, each cut into 1 1/2-in. lengths
			<br />Cornstarch
			<br />Cocktail picks or toothpicks
			<br />Cranberry Mustard (recipe follows) 

			</p>
			<button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>

1. Mix flour, cornmeal, sugar, salt, baking powder, and baking soda. Add buttermilk, melted butter, and egg and stir just until incorporated. <br />
2. Pour 1 1/2 in. oil into a frying pan and heat to about 350° on a deep-fry thermometer. Dust hot dog pieces all over with cornstarch. Using a fork, dip each piece into batter to coat and drop into oil. Fry in batches, turning as needed, until golden brown all over, 3 to 5 minutes per batch. With a slotted spoon, transfer to a paper towel-lined pan and keep warm in a 200° oven until all are done.<br />
3. Push a cocktail pick into an end of each mini corn dog and serve warm with Cranberry Mustard.<br />
4. Cranberry Mustard Boil 1 cup unsweetened cranberry juice in a small saucepan until reduced to 1/4 cup. Mix with 3/4 cup Dijon mustard and 6 tbsp. packed light brown sugar. Makes 1 cup.<br />
5. Note: Nutritional analysis is per piece without mustard. 

</p>

			</div>
		</div>
		</p>
		</div>
	
	<div class="container2 B4">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Strawberry Bruschetta</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Strawberry Bruschetta.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>1 1/2 cups sliced fresh strawberries
			<br />1 nectarine, diced
			<br />1 cup quartered grape tomatoes
			<br />3 tablespoons thinly sliced fresh basil
			<br />1 shallot, minced
			<br />2 tablespoons olive oil
			<br />1 tablespoon balsamic vinegar<br />
			1 teaspoon sugar
			<br />1 teaspoon freshly ground pepper<br />
			1/4 teaspoon salt
			<br />1 (12-oz.) French bread baguette
			<br />1 (10.5-oz.) goat cheese log, softened
</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>


1. Preheat oven to 375°. Stir together strawberries, nectarine, grape tomatoes, basil, minced shallot, olive oil, balsamic vinegar, sugar, freshly ground pepper, and salt.<br />
2. Split baguette in half; cut each half crosswise into 4 equal pieces. Spread cut sides of bread with goat cheese. Place bread pieces on a baking sheet, and bake 13 to 15 minutes or until thoroughly heated. Remove from oven, and top with strawberry mixture. Cut into 2-inch slices.


</p>

			</div>
		</div>
		</p>
		</div>
	
<div class="overlay2"></div>
</div>

<div id="Desserts" class="tabcontent">
  
  <div class="col-md-12">
 <h3>Desserts</h3>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/caramelpears.jpg'); ?>" alt="Cardamom Salted Caramel Pears" style="width:100%">
			<h5><br />Cardamom Salted Caramel Pears</h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target="C1"><button >See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/yogurtpistacio.jpg'); ?>" alt="Easy Yogurt, Honey and Pistachio Popsicles" style="width:100%">

			<h5><br />Easy Yogurt, Honey and Pistachio Popsicles</h5>
			<p><span style="font-size:30px; cursor:pointer"><button class="open" data-target="C2">See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Lgeimat.jpg'); ?>" alt="Lgeimat (Saffron and Cardamom Fritters)" style="width:100%">
			<h5><br />Lgeimat (Saffron and Cardamom Fritters)<br /></h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='C3'><button>See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Mexican Chocolate Ice Cream.jpg'); ?>" alt="Mexican Chocolate Ice Cream"  style="width:100%">
			<h5><br />Mexican Chocolate Ice Cream </h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='C4'><button>See More...</button></span></p>
		</div>
		
	</div>

	
	<div class="container2 C1">
		<p>
		<a class="close">Close</a>	
		</p>
		<p class="changeText">
		<div class="row">
				<div class="col-md-4">
				<h3>Cardamom Salted Caramel Pears</h3>
				<img src="<?php echo base_url('bootstrap/img/cat/caramelpears.jpg'); ?>" />
				</div>
				<div class="col-md-4">
				<h3>Ingredients</h3>
				<p> 1 cup sugar
<br />1 1/4 cups heavy cream, at room temperature or slightly warmed up
<br />1 tablespoon unsalted butter
<br />1/2 teaspoon ground cardamom
<br />Sea salt to taste
<br />4 pears, washed and cored

</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
				</div>
				<div class="col-md-4">
				<h3>Procedure</h3>
				<p>
				1.	Add the cup of sugar to a heavy bottom pot and heat on low until it melts and starts to lightly brown. Try to resist stirring it, as this will make it more likely to form lumps. Do not leave it unattended because it can burn quickly.<br />
				2.	Once the sugar is bubbling and a very light golden brown, pour in the heavy cream. Note that the mixture will bubble up. Begin stirring it until the cream is fully incorporated and then stir in the butter. You may find that the mixture has hard lumps. Just continue stirring, on very low heat, until they melt and you have a smooth sauce.<br />
				3.	Stir in the cardamom and season with sea salt to taste.<br />
				4.	Wash and dry the pears. Use a corer to remove the seeds from the bottom of the pear. Using the stem, dip the pear into the warm caramel sauce until fully coated. Place on a rack to catch the drips and allow to harden. If you have any leftover caramel sauce, store it in a lidded jar in the refrigerator for up to a week.


				</p>

				</div>
				
			</div>
		</p>
	</div>
		
	
	<div class="container2 C2">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Easy Yogurt, Honey and Pistachio Popsicles</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/yogurtpistacio.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>2 Cups plain, full fat, Greek style yogurt
<br />1/4 Cup honey
<br />1/4 Cup shelled pistachios
<br />1/4 Teaspoon salt

			</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>
1.	Add to shelled pistachios to a food processor and pulse until the nuts are in tiny pieces, almost dust, but not pureed.<br />
2.	Combine the Greek style yogurt with the honey and salt and mix thoroughly. Fold in the ground up pistachios.<br />
3.	Pour the mixture into a silicone popsicle mold (recipe will fill a 10 pop mold) and place in the freezer for about one hour. Remove from the freezer, insert popsicle sticks into the center of each mold and return to the freezer for at least another 7 hours or overnight.<br />
4.	To remove the popsicles from the mold, dip the mold into hot water until the pops loosen. You can also run hot water over the sides of the mold but be careful not to get any water over the top.
			</p>

			</div>
		</div>
		</p>
		</div>

			<div class="container2 C3">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Lgeimat (Saffron and Cardamom Fritters)</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Lgeimat.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>
			For the Fritters:
<br />2 cups all purpose flour
<br />1 tablespoon baking powder
<br />1 teaspoon baking soda
<br />1 teaspoon salt
<br />1 tablespoon sugar
<br />1 cup full-fat yogurt (Greek-style)
<br />1 egg
<br />4 cups canola oil for frying (or enough to measure a depth of 2 inches)
<br />Strips of lemon rind for garnish
<br />For the Syrup:
<br />1 cup sugar
<br />1/2 cup water
<br />1 tablespoon lemon juice
<br />1/2 teaspoon cardamom
<br />1/2 teaspoon cinnamon
<br />1 teaspoon saffron
<br />Pinch of salt


			</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>

1. To make the syrup, add the sugar, water, lemon juice, cardamom, cinnamon, saffron and pinch of salt to a large pot. Bring to a simmer and stir until the sugar dissolves. Allow to sit while you make the fritters.<br />
2. In a large bowl, sift together the all-purpose flour, baking soda, baking powder, salt, and sugar. In a separate bowl, whisk together the egg and Greek yogurt. Pour the wet ingredients into the dry and mix until dough forms.<br />
3. Allow to rest for about 10 minutes.<br />
4. In a large pot, heat the oil to 350 degrees. Using a tablespoon or cookie scoop (anywhere from 1/2 oz. to 1 oz. depending on what you have), scoop the dough into the hot oil. Work in batches so as not to overcrowd the pot. Stir the fritters around so that they get browned on all sides. Total frying time for each batch should be about 2 to 3 minutes. When they're browned, drain them on a paper towel.<br />
5. Once all are fried, move them to a bowl, pour the syrup over them and top with the strips (or zest) of the lemon rind. Serve immediately.
 

</p>

			</div>
		</div>
		</p>
		</div>
	
	<div class="container2 C4">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Mexican Chocolate Ice Cream</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Mexican Chocolate Ice Cream.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>1/2 vanilla bean
<br />2 cups heavy cream
<br />2 cups whole milk
<br />9 ounces Mexican chocolate (such as Ibarra; see Notes), coarsely chopped
<br />2 ounces unsweetened chocolate, coarsely chopped
<br />2 cinnamon sticks
<br />5 egg yolks
<br />1/2 cup sugar
<br />1/4 teaspoon salt

</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>

1. Split vanilla bean lengthwise and scrape out seeds. In a 4-qt. saucepan over medium heat, bring cream, milk, Mexican chocolate, unsweetened chocolate, cinnamon sticks, and vanilla seeds and pod to a simmer.<br />
2. Remove cream mixture from heat and let steep 20 minutes. Meanwhile, put egg yolks, sugar, and salt in the bowl of a standing mixer and whisk at medium-high speed until egg mixture is thick and pale yellow, 2 to 3 minutes.<br />
3. Return cream mixture to medium heat and bring just to a simmer. Remove from heat and pour through a strainer into a clean bowl; discard cinnamon sticks and vanilla pod. With mixer running on medium speed, pour 1/2 cup cream mixture into egg mixture. Slowly drizzle in remaining cream mixture, continuing to mix as you go.<br />
4. Pour this custard into saucepan. Return to stove and cook over low to medium-low heat, stirring with a wooden spoon, until custard thickens a bit and reaches 170° on a thermometer.


</p>

			</div>
		</div>
		</p>
		</div>
	
<div class="overlay2"></div>
</div>
  


<div id="Smoothies" class="tabcontent">
 
  <div class="col-md-12">
 <h3>Smoothies</h3>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Avocado, Blueberry, Banana....jpg'); ?>" alt="Avocado, Blueberry, Banana, and Chia Smoothie" style="width:100%">
			<h5><br />Avocado, Blueberry, Banana, and Chia Smoothie</h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target="D1"><button >See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>" alt="Heavenly Blueberry Smoothie" style="width:100%">
			<h5><br />Heavenly Blueberry Smoothie<br /><br /></h5>
			<p><span style="font-size:30px; cursor:pointer"><button class="open" data-target="D2">See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Easy Mango Banana Smoothie.jpg'); ?>" alt="Easy Mango Banana Smoothie" style="width:100%">
			<h5><br />Easy Mango Banana Smoothie<br /><br /></h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='D3'><button>See More...</button></span></p>
		</div>
	</div>
	
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo base_url('bootstrap/img/cat/Mongolian Strawberry-Orange Juice Smoothie.jpg'); ?>" alt="Mongolian Strawberry-Orange Juice Smoothie"  style="width:100%">
			<h5><br />Mongolian Strawberry-Orange Juice Smoothie<br /> </h5>
			<p><span style="font-size:30px; cursor:pointer" class="open" data-target='D4'><button>See More...</button></span></p>
		</div>
		
	</div>

	
	<div class="container2 D1">
		<p>
		<a class="close">Close</a>	
		</p>
		<p class="changeText">
		<div class="row">
				<div class="col-md-4">
				<h3>Avocado, Blueberry, Banana, and Chia Smoothie</h3>
				<img src="<?php echo base_url('bootstrap/img/cat/Avocado, Blueberry, Banana....jpg'); ?>" />
				</div>
				<div class="col-md-4">
				<h3>Ingredients</h3>
				<p> 1 cup vanilla-flavored almond milk
<br />1 avocado - peeled, pitted, and halved
<br />1 cup fresh blueberries
<br />1 banana
<br />1 cup ice
<br />1 tablespoon chia seeds


</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
				</div>
				<div class="col-md-4">
				<h3>Procedure</h3>
				<p>
				1.	1.	Combine almond milk, avocado, blueberries, banana, ice, and chia seeds in a blender; blend until smooth.

				</p>

				</div>
				
			</div>
		</p>
	</div>
		
	
	<div class="container2 D2">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Heavenly Blueberry Smoothie</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Heavenly Blueberry Smoothie.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>1 frozen banana, thawed for 10 to 15 minutes
<br />1/2 cup vanilla soy milk
<br />1 cup vanilla fat-free yogurt
<br />1 1/2 teaspoons flax seed meal
<br />1 1/2 teaspoons honey
<br />2/3 cup frozen blueberries


			</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>
1.	Cut banana into small pieces and place into the bowl of a blender. Add the soy milk, yogurt, flax seed meal, and honey. Blend on lowest speed until smooth, about 5 seconds. Gradually add the blueberries while continuing to blend on low. Once the blueberries have been incorporated, increase speed, and blend to desired consistency.
			</p>

			</div>
		</div>
		</p>
		</div>

			<div class="container2 D3">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Easy Mango Banana Smoothie</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Easy Mango Banana Smoothie.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>2 mangos - peeled, seeded, and sliced
<br />2 bananas
<br />2 cups vanilla yogurt
<br />2 cups milk



			</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>

1. 	Blend mangos, banana, vanilla yogurt, and milk in a blender until smooth.
</p>

			</div>
		</div>
		</p>
		</div>
	
	<div class="container2 D4">
	<p>
	<a class="close">close</a>	
	</p>
	<p class="changeText">
	<div class="row">
			<div class="col-md-4">
			<h3>Mexican Chocolate Ice Cream</h3>
			<img src="<?php echo base_url('bootstrap/img/cat/Mexican Chocolate Ice Cream.jpg'); ?>" />
			</div>
			<div class="col-md-4">
			<h3>Ingredients</h3>
			<p>1 cup chopped fresh strawberries
<br />1 cup orange juice
<br />10 cubes ice
<br />1 tablespoon sugar


</p><button class="btn-cart btn btn-danger btn-xs align-center" >Add to Cart</button>
			</div>
			<div class="col-md-4">
			<h3>Procedure</h3>
			<p>

1.	In a blender, combine strawberries, orange juice, ice cubes and sugar. Blend until smooth. Pour into glasses and serve.


</p>

			</div>
		</div>
		</p>
		</div>
	
<div class="overlay2"></div>
</div>
</div>
</div>
	</div>


</section>		
	
</body>
</html>