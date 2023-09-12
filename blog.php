<?php
                                     include 'connection.php';
                                     $sql ="SELECT * FROM blog";
                                     $result =mysqli_query($con,$sql);
                                     $num = mysqli_num_rows($result);
                                    echo "<table border=1 style='width:100%'>";
                                    echo "<tr>";
                                    echo "<th>Article </th>";
                                    echo "<th>Writer</th>";
                                    echo "<th>Date</th>";
                                    echo "<th>Content 1</th>";
                                    echo "<th>Content 2</th>";
                                    while($row=mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td> $row[0]</td>";
                                    echo "<td> $row[1]</td>";
                                    echo "<td> $row[2]</td>";
                                    echo "<td> $row[3]</td>";
                                    echo "<td> $row[4]</td>";
                                    echo "</tr>";
                                    } 
                                    ?>