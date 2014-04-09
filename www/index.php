<head>


<style>
table{

width: 80%;
border: 3px solid black;
        background-color: #F2E3D6;
        border-collapse:collapse

}
th{
        font-family: Arial,Helvetica,sans-serif;
        text-align:center;
        font-size:30px;
        background-color:#EB8D49;
border:3px solid black;
       border-collapse:collapse;
height:50px;

}
td{
border:3px solid black;
       font-family:inherit;
       font-size:14px;
       text-align:center;


}
.dark{background-color:#EB8D49}
.med{background-color:#F4A65F}
.light{background-color:#F2E3D6}
.invisible{background-color:#ffffff; border-left:3px solid white; border-top:3px solid white;}
</style>

</head>
<body>
<table>
<tr>
<th>Status</th>
</tr>
<tr>
<td>
<a href="./status.php">Status page</a>
</td>
</tr>
</table>



</br>
</br>


<table>
<tr>
<th>Log Files</th>
</tr>
<tr>
<td>
<a href="./log.php">Log page</a>
</td>
</tr>
</table>


</br>
</br>


<table>
<tr><th colspan="2">Upload Code</th></tr>
<tr>
<td class="dark">Autonomous</td>
<td class="dark">Teleoperated</td>
</tr>
<tr>
<td><a href="./autocode.php">Upload Autonomous Code</a></td>
<td><a href="./telecode.php">Upload Teleoperated Code</a></td>
</tr>
<tr>
<td class="med"><a href="./code/auto">Download Autonomous Code</a></td>
<td class="med"><a href="./code/tele">Download Teleoperated Code</a></td>
</tr>
</table>

</body>
