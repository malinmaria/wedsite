<?php include('includes/header.php')?>

<?php include('includes/navbar.php')?>

<p><span>August 15, 2014. Be there or be square!</span></p>

<article id="rsvp">
  <form name="rsvpForm">
    <input type="radio" name="rsvpResponse" value="there" />Hooray, I'm there!<br><br>
    <input type="radio" name="rsvpResponse" value="square" />Sadly, I'm square. <br><br>
    <input type="radio" name="rsvpResponse" value="maybe" />I'm undecided at this time.<br><br>
    <label>Name: </label><input id="rsvpName" name="rsvpName" required /><br><br>
    <label>How many guests are in your party? Include yourself. </label><input id="rsvpParty" name="rsvpParty" /><br><br>
    <label>Enter the secret code here: </label> <input id="rsvpPassword" name ="rsvpPassword" /> 
    <br>
    <br>
    <input id="submit" type="submit" name="submit" value="Submit" />
   </form>
</article>

<div id="rsvpMessage" style="display:none">
   <p><span id="returnMessage"></span></p>
</div>

<script type="text/javascript">
    $('form').submit(function(event) {
        var rsvpResponse = $('input:radio[name=rsvpResponse]:checked').val();
        var rsvpName = $('#rsvpName').val();
        var rsvpParty = $('#rsvpParty').val();
        var rsvpPassword = $('#rsvpPassword').val();
    
        $.ajax({
            type: 'POST',
            url: 'scripts/updateGuestList.php',
            data: {
                rsvp: rsvpResponse,
                name: rsvpName,
                party: rsvpParty,
                password: rsvpPassword
            },
            success: function(data) {
                $('#returnMessage').text(data);
                $('#rsvpMessage').show();
            }
        });
        event.preventDefault();
    });
</script>

<p><span>Formal invitations are soon to follow.</span></p>

<?php include('includes/footer.php')?>
