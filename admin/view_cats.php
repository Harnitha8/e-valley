<link rel="stylesheet" href="view_cats.css">
<body>
<table align="center" bgcolor="yellow" class="table">

        <tr align="center" width=90%>
            <td colspan="6"><h2>View All Cats Here</h2></td>
        </tr>

        <tr align="center" class="kk">
             <th>Cat ID</th>
            <th>Cat Title</th>
    </tr>

    <?php
    include("includes/db.php");
    $get_cat = "select * from categories";
    $run_cat = mysqli_query($con, $get_cat);

    $i=0;
    while($row_cat = mysqli_fetch_array($run_cat)) {
       
        $cid=$row_cat['cat_id'];
        $ctitle = $row_cat['cat_name'];
        $i++;
    ?>

    <tr align="center">
                <td><?php echo $i;?></td>
                <td><?php echo $ctitle;?></td>
                

                </tr>

            <?php } ?>
    </table>
</body>