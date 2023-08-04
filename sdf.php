<h3>Welcome!</h3>
<p>This is profile page</p>
<p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>
<a href="logout.php" class="logout">logout</a>




<table border="1" cellspacing="100" cellpadding="100">
    <tr>
        <th>ID</th>
        <th>Room No</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td><?php echo $data['id']; ?> </td>
                <td><?php echo $data['room_no']; ?> </td>
            </tr>
        <?php
        }
    } else { ?>
        <tr>
            <td colspan="2">No data found</td>
        </tr>
    <?php } ?>
</table>
margin-top: 1.5rem;padding:2.5rem 2rem;
<form>
         <label for="accountNumber">Account Number:</label>
         <input class='text' type="text" id="accountNumber" name="accountNumber" required>
  
         <label for="transactionID">Transaction ID:</label>
         <input class='text' type="text" id="transactionID" name="transactionID" required>
  
         <button class='submit' name='submitt' type="submit">Submit</button>
         
      </form>
if(isset($_POST['submitt'])){
   $accountno=mysqli_real_escape_string($conn, $_POST['accountNumber']);
   $transaction=mysqli_real_escape_string($conn, $_POST['transactionID']);
   $qury="SELECT * FROM `transaction`";
   $result=mysqli_query($conn,$qury);
   if (mysqli_num_rows($result) > 0) {
      header('location:header.php');
   }
}