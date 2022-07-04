<?php
    $connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');
    $query = "
    SELECT * FROM tbl_comment 
    WHERE parent_comment_id = '0' 
    ORDER BY comment_id DESC
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output = '';
    foreach($result as $row)
    {
    $output .= '
    <div class="card card-default mb-4">
    <br>
    <div class="card-header"> Pesan dari <b>'.$row["comment_sender_name"].'</b>, <i>'.$row["date"].'</i> </div>
    <div class="card-body">Isi Pesan : '.$row["comment"].'</div>
    <div class="card-footer" align="left"><button type="button" class="btn btn-primary reply" id="'.$row["comment_id"].'">Balas</button></div>
    </div>
    ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
    }
    echo $output;
    function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
    {
    $query = "
    SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
    ";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if($parent_id == 0)
    {
    $marginleft = 0;
    }
    else
    {
    $marginleft = $marginleft + 48;
    }
    if($count > 0)
    {
    foreach($result as $row)
    {
    $output .= '
    <div class="card card-default mb-4" style="margin-left:'.$marginleft.'px">
        <br>
        <div class="card-header">Balasan Dari <b>'.$row["comment_sender_name"].'</b>, <i>'.$row["date"].'</i></div>
        <div class="card-body">Isi Pesan : '.$row["comment"].'</div>
        <div class="card-footer" align="left"><button type="button" class="btn btn-primary reply" id="'.$row["comment_id"].'">Balas</button></div>
    </div>
    ';
    $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
    }
    }
    return $output;
    }
?>