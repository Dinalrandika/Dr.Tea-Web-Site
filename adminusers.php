<?php
                                     include 'connection.php';
                                     $sql ="SELECT * FROM admins";
                                     $result =mysqli_query($con,$sql);
                                     $num = mysqli_num_rows($result);
                                    echo "<table border=1 style='width:100%'>";
                                    echo "<tr>";
                                    echo "<th>Username </th>";
                                    echo "<th>Password</th>";
                                    echo "<th>Email</th>";
                                    while($row=mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td> $row[0]</td>";
                                    echo "<td> $row[1]</td>";
                                    echo "<td> $row[2]</td>";
                                    echo "</tr>";
                                    } 
                                    ?>



