<?php
include("header.php");
?>
<div>

		<div class="container">
            <div class="payment_form" style="background-color:#fff; width:400px; height:420px; padding:12px; border-radius:6px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); margin: 30px auto;">
                <h3>Select Payment Options</h3>
                <form action="customer/order.php">
                    <div class="checkbox">
                    	<b>Pay with </b>
					    <br>    
					    <img src="images/payment.jpg" alt=""><br><br>
                      <label><input type="radio" name="" value="" disabled> Debit Card/Credit Card (Currently Unavailable)</label>
                    </div><br>
                    <div class="checkbox">
                      <label><input type="radio" name="" value="" checked> Cash On Delivery</label>
                    </div>
                    <button type="submit" name="submit"value="login" class="btn btn-info">Submit</button><br>
                </form>
            </div>
        </div>

</div>