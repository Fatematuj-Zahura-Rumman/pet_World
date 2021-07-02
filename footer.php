<!-- <!DOCTYPE html>
<html>
<body> -->

	  <br>

	  <footer>
	  	<p style="font-weight: 900;">© 2020 Pet Paradise  |  <span style="font-weight: 100;"> Designed, Developed & Maintained by <a href="" target="_blank">Z.I.R.S</a></span></p>
	  </footer>

	  	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	  	<script>
  			AOS.init();
		</script>

		<script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>


	    <script type='text/javascript'>
	      $(document).ready(function(){
	      $(document).on('click', '.add_to_cart', function(){
	        var id2 = $(this).attr("id");
	        var name = $('#hidden_name'+id2+'').val();
	        var img = $('#hidden_img'+id2+'').val();
	        var price = $('#hidden_price'+id2+'').val();
	        var stock = $('#hidden_stk'+id2+'').val();
	        var quantity = $('#quantity'+id2+'').val();
	        // Returns successful data submission message when the entered information is stored in database.
	        // var dataString = 'name1=' + name + '&img1=' + img + '&price1=' + price + '&id1=' + id + '&quantity1=' + quantity;


	        // AJAX code to submit form.
	        $.ajax({
	          type: "POST",
	          url: "addcart.php",
	          data: {id1: id2, name1: name, img1: img, price1: price, quantity1: quantity, stock1: stock},
	          cache: false,
	          success: function(data) {
	            $('#result'+id2+'').html(data);
	          }
	        });

	        if(id2>-1){
		        $.ajax({
		          type: "POST",
		          url: "cartCount.php",
		          success: function(data) {
		            $('#count').html(data);
		          }
		        });
	    	}
	        
	      });
	      });
	    </script>


	  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>