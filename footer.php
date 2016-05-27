</div><!-- container -->
      
<?php if($settings['enableModals'] == true) {require('modals.php');} ?> 



<!-- Scripts incoming -->

<!-- clipboard.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>


<script>

        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    var ctx = document.getElementById("chartForUgen");
    var chartForUgen = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Hans", "Kathrine", "Lasse", "Marcus", "Thomas"],
            datasets: [{
                label: 'Reps for ugen',
                data: [12, 19, 3, 5, 6],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",
                    "#c07dd9",
                    "#36A2EB"
                ]
            }]
        },
        options: ''
    });
</script>
     
<script>

    new Clipboard('.clickToCopy');
    
</script>


<script>
    var ctx = document.getElementById("chartForAaret");
    var chartForAaret = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Januar", "Februar", "Marts", "April", "Maj", "Juni","Juli","August","September","Oktober","November",
                    "December"],
            datasets: [{
            label: "Reparationer per måned",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
                data: [124, 19, 344, 132, 364,45,345,654,234,234,212,1243]
                
            }]
        },
        options: ''
    });
</script>

</body>
</html>