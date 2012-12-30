<div id="slideshow">
   	<div>
     	<img src="assets/img/bild1.jpg">
   	</div>
   	<div>
     	<img src="assets/img/bild1.jpg">
   	</div>
</div>
<script type="text/javascript">
	$("#slideshow > div:gt(0)").hide();
	setInterval(function() { 
	  $('#slideshow > div:first')
	    .fadeOut(1000)
	    .next()
	    .fadeIn(1000)
	    .end()
	    .appendTo('#slideshow');
	},  5000);
</script>
<div class="box">
	<div class="box3">
		<h3 class="menu">Vad blir din lön?</h3>
		<p>Bacon ipsum dolor sit amet sausage brisket boudin, short ribs prosciutto shankle corned beef tenderloin flank bresaola jerky. Turkey pastrami biltong ham doner, turducken pancetta pork belly ribeye kielbasa brisket. Beef corned beef bresaola, ribeye turducken kielbasa filet mignon tenderloin brisket flank strip steak bacon. Tri-tip turducken fatback, capicola spare ribs corned beef leberkas pork loin. Tri-tip pork loin corned beef sirloin salami brisket frankfurter chuck leberkas hamburger meatball.</p>
	</div>
	<div class="box3">
		<h3 class="menu">Är du ett företag?</h3>
		<p>Bacon ipsum dolor sit amet sausage brisket boudin, short ribs prosciutto shankle corned beef tenderloin flank bresaola jerky. Turkey pastrami biltong ham doner, turducken pancetta pork belly ribeye kielbasa brisket. Beef corned beef bresaola, ribeye turducken kielbasa filet mignon tenderloin brisket flank strip steak bacon. Tri-tip turducken fatback, capicola spare ribs corned beef leberkas pork loin. Tri-tip pork loin corned beef sirloin salami brisket frankfurter chuck leberkas hamburger meatball.</p>
	</div>
	<div class="box3">
		<h3 class="menu">Hur går till?</h3>
		<p>Bacon ipsum dolor sit amet sausage brisket boudin, short ribs prosciutto shankle corned beef tenderloin flank bresaola jerky. Turkey pastrami biltong ham doner, turducken pancetta pork belly ribeye kielbasa brisket. Beef corned beef bresaola, ribeye turducken kielbasa filet mignon tenderloin brisket flank strip steak bacon. Tri-tip turducken fatback, capicola spare ribs corned beef leberkas pork loin. Tri-tip pork loin corned beef sirloin salami brisket frankfurter chuck leberkas hamburger meatball.</p>
	</div>
</div>