<!DOCTYPE html>
<html>
 <head>
    <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        } 
    }
    </script>
</head>
<body>
    <div id="reserve_form">

    <div id="pickup_date"><p><label class="form">Pickup Date:</label><input type="date" class="textbox" id="pick_date" name="pickup_date" onchange="cal()"></p></div>

    <div id="dropoff_date"><p><label class="form">Dropoff Date:</label><input type="date" class="textbox" id="drop_date" name="dropoff_date" onchange="cal()"/></p></div>

    <div id="numdays"><label class="form">Number of days:</label><input type="text" class="textbox" id="numdays2" name="numdays"/></div>

    </div>
</body>
</html>