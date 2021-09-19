<?php

if(isset($_POST['video']))
{
    $url = $_POST['video'];
    $url_id = explode("v=", $url);

    if(count($url_id) == 2)
    {
        $id=$url_id[1];
    }else{
        $url_id = explode(".be/", $url);
        $id=$url_id[1];
    }

    $thumb = "https://img.youtube.com/vi/{$id}/sddefault.jpg";

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>



    <div class="box">
        <h2>Thumbnail Downloader</h2>

        <p>Url Here</p>
        <div class="form-area">
            <form action="" method="POST">

                
                <div class="input-field">
                    <input type="text" name="video" id="video" placeholder="https://www.youtube.com/watch?v=MCYm453CE6Y&t=6s">
                </div>

                <div class="image-box">
                    <img src="<?php echo $thumb; ?>" alt="" srcset="">
                </div>


                <input type="submit" value="Upload Thumb">
            </form>
        </div>

    </div>

</body>

</html>
