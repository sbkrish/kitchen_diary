<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Daily Purchase Entry</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
    </head>
    <body>

<select id="graph_select">
<option id="pilot_form">Pilot Hours</option>
<option id="client_form">Client Hours</option>
</select>

<div id="pilot_graph_form" align="center" style="margin:0 auto; display:none;">
        <form action="?page=reporter" method="POST" name="graph_form">
            <p>From:</p>
            <select name="start_date">
                <cfloop query="date_worked_menu">
                    <option>#date_worked_menu.date_worked#</option>
                </cfloop>
            </select>
            <br />
            <br />
            <p>To:</p>
            <select name="end_date">
                <cfloop query="date_worked_menu">
                    <option>#date_worked_menu.date_worked#</option>
                </cfloop>   
            </select>
            <br />
            <input class="btn btn-success" type="Submit" name="submit_to_graph" value="Submit" id="submit_to_graph">
        </form>
    </div>
    <div id="client_graph_form" align="center" style="margin:0 auto; display:none;">
        <form action="?page=reporter" method="POST" name="graph_form_clients">
            <p>From:</p>
            <select name="client">
                <cfloop query="client_menu">
                    <option value="#client_menu.id#">#client_menu.name#</option>
                </cfloop>
            </select>
            <input class="btn btn-success" type="Submit" name="submit_to_graph" value="Submit" id="submit_to_graph">
        </form>
    </div>



    <script type="text/javascript">
$(function() {
  $("#graph_select").change(function() {
    if ($("#pilot_form").is(":selected")) {
      $("#pilot_graph_form").show();
      $("#client_graph_form").hide();
    } else {
      $("#pilot_graph_form").hide();
      $("#client_graph_form").show();
    }
  }).trigger('change');
});
</script>

</body>
</html>