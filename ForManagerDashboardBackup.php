<?php
    $sql = "SELECT * FROM staff_record WHERE staffID = $_SESSION[userID]";
    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($result))
    {
    ?>
        <body>
            
            <h2>Welcome Back, Manager <?php print '<td>'.$row['staffFullName'].'</td>'; ?></h2>

            <div class="tCard">
                <tDay id="today">
                    <script>
                        const today = new Date();
                        document.getElementById("today").innerHTML = today.getDate();
                    </script>
                </tDay>

                <tm id="tMonth">
                    <script>
                        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                        const m = new Date();
                        let month = months[m.getMonth()];
                        document.getElementById("tMonth").innerHTML = month;
                    </script>
                </tm>

                <ty id="tYear">
                    <script>
                        const y = new Date();
                        document.getElementById("tYear").innerHTML = y.getFullYear();
                    </script>
                </ty>
            </div> <!-- Add the closing tag for the div element -->
        </body>
    <?php
    }
    ?>