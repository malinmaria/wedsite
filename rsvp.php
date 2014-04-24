<?php include('includes/header.php')?>

<?php include('includes/navbar.php')?>

<p><span>August 15, 2014. Be there or be square!</span></p>

<article id="rsvp">
  <form action=" ">
    <input type="radio" name="rsvp" value="there" />Hooray, I'm there!<br><br>
    <input type="radio" name="rsvp" value="square" />Sadly, I'm square. <br><br>
    <input type="radio" name="rsvp" value="maybe" />I'm undecided at this time.<br><br>
    <label>Name: </label><input name="rsvpName" required /><br><br>
    <label>How many guests are in your party?</label><input name="rsvpParty" />
    <br>
    <br>
    <input id="submit" type="submit" name="submit" value="Submit" />
   </form>
</article>  

<p><span>Formal invitations are soon to follow.</span></p>

<?php include('includes/footer.php')?>
