<?php
    include("../db/db-conn.php");
    $result=mysqli_query($conn, "select * from user_account");

    echo "<table align=center style=font-size:22px border=1px>
    <th>
    <td> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Username
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    <td>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Email
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Full Name
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </th>";

    while($data = mysqli_fetch_row($result))
    {   
        echo "<tr>";
        echo "<td>$data[0]</td>";
        echo "<td>$data[1]</td>";
        echo "<td>$data[2]</td>";
        echo "<td>$data[4]</td>";
        echo "</tr>";
    }
echo "</table>";
    ?>