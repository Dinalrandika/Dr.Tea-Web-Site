
<?php
                                     include 'connection.php';
                                     $sql ="SELECT * FROM messages";
                                     $result =mysqli_query($con,$sql);
                                     $num = mysqli_num_rows($result);
                                    echo "<table border=1 style='width:100%'>";
                                    echo "<tr>";
                                    echo "<th>Item_No </th>";
                                    echo "<th>name </th>";
                                    echo "<th>Email</th>";
                                    echo "<th>Message</th>";
                                    while($row=mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td> $row[0]</td>";
                                    echo "<td> $row[1]</td>";
                                    echo "<td> $row[2]</td>";
                                    echo "</tr>";
                                    } 
                                    ?>