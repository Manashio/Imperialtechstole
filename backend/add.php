<?php
     require_once('core/session.php');
     include_once('functions/function.inc.php');
     include_once('controller/date_time.php');
     include_once('views/head.php');
     include_once('views/sidenav.php');
     require_once('controller/add_controller.php');    
?>

<div class="content">
     <div class="container">


         <div class="jumbotron">
         <h1 class="text-center">Customer Complain</h1>
         </div>
        <div class="row">
            <div class="col-8 offset-2">         
            <form action="" method="POST">
              <?php echo $error_box;?>
              <label for="name">Name Of The Complainer
                <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" id="name" name="name" placeholder="Name of the Complainer" />
              </label>
              <label for="phone">Contact Number Of The Complainer
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" placeholder="Contact number of the Complainer" id="phone" name="phone"/>
              </label>
              <label for="address">Address Of The Complainer
                <input type="text" placeholder="Address Of The Complainer" id="address" name="address"/>
              </label>
              <label for="date">Date Of The Complain
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="date" placeholder="dd - mm - yy" id="date" name="date_e"/>
              </label>
              <label for="vehicle">Vehicle Number
                <input type="text" placeholder="AS 20 0000" id="vehicle" name="vehicle"/>
              </label>
              <label for="complain">Complain
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" placeholder="What was the incident " id="complain" name="complain"/>
              </label>
              <label>Categorization Of The Complain
              <span class="span">
                  <?php echo $message;?>
                </span>
                <Select name="category">
                  <option> </option>
                  <option value="Booking Issue">Booking Issue</option>
                  <option value="Bus Cancellation">Bus Cancellation</option>
                  <option value="Passenger Safty">Passenger Safty</option>
                  <option value="Refund">Refund</option>
                  <option value="Ticketing issue">Ticketing issue</option>
                  <option value="Others">Others</option>
                </Select>
              </label>
              <label for="forward">Forwarded To
              <span class="span">
                  <?php echo $message;?>
                </span>
                <input type="text" placeholder="S.S. / D.S / D.G.M " id="forward" name="forward"/>
              </label>
              <label for="taken">Complain Taken By
              <span class="span">
                  <?php echo $message;?>
                </span>
                <Select id= "taken" name="taken">
                  <option> </option>
                  <option value="Gitayan Deka">Gitayan Deka</option>
                  <option value="Govinda Das">Govinda Das</option>
                  <option value="Mahesh Sewa">Mahesh Sewa</option>
                  <option value="Manash Bharali">Manash Bharali</option>
                  <option value="Haniph Ali">Haniph Ali</option>
                  <option value="Aashish Neog">Aashish Neog</option>
                </Select>
              </label>
              <label for="via">Complain Via
              <span class="span">
                  <?php echo $message;?>
                </span>
                <Select name="cmp_through" id="via">
                  <option> </option>
                  <option value="Email">Email</option>
                  <option value="Telephone">Telephone</option>
                  <option value="WhatsApp">WhatsApp</option>
                </Select>
              </label>
		    <br><br>
		    <div class="text-center">
	              <button type="submit" class="custom-btn submit">Save</button>		    
		    </div>
        </form>
        </div>
        </div>

     </div>
</div>

<?php
     include_once('views/footer.php');
?>