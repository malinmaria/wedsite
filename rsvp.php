<?php include('includes/header.php')?>

<?php include('includes/navbar.php')?>

<p>August 15, 2014. Be there or be square!</p>

<article>
  <form action=" ">
    <input type="radio" name="rsvp" value="there" />Hooray, I'm there!<br><br>
    <input type="radio" name="rsvp" value="square" />Sadly, I'm square. <br><br>
    <label>Name: </label><input name="rsvpName" required />
    <br>
    <br>
    <input id="submit" type="submit" name="submit" value="Submit" />
   </form>
</article>  

<p>Formal invites are soon to follow.</p>

<?php include('includes/footer.php')?>
