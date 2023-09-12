
<?php
                                     include 'connection.php';
                                     $sql ="SELECT * FROM images";
                                     $result =mysqli_query($con,$sql);
                                     $num = mysqli_num_rows($result);
                                    echo "<table border=1 style='width:100%'>";
                                    echo "<tr>";
                                    echo "<th>Item_No </th>";
                                    echo "<th>name </th>";
                                    echo "<th>Price</th>";
                                    echo "<th>Image</th>";
                                    while($row=mysqli_fetch_array($result))
                                    {
                                    echo "<tr>";
                                    echo "<td> $row[0]</td>";
                                    echo "<td> $row[1]</td>";
                                    echo "<td> $row[2]</td>";
                                    echo "<td  ><img src='uploads/$row[3]' width='200' height='200'></td>";
                                    echo "</tr>";
                                    } 
                                    ?>

