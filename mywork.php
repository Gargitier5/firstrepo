<html>
<head>
<title>
My First page in TIER5

</title>
</head>
<body>
<from>
Student Data
<div style ="width: 100%;">

<div id="div1" style="float:Left ; width:30%">

<button onclick="studentinfo()">Student Info</button>


<script>
function studentinfo() {
    document.getElementById("div1").innerHTML = "Enter the Student Id:<br><input type="text" >";
}
</script>




</div>




<div id="div2" style="float:Left;">

<button type="button">Update Student Database</button>

</div>


</div>






</from>
</body>
</html>
