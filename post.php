<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>

    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
</head>
<body>
    
    <form action="./write.php" method="post">
        
        <p>
            名前：
            <input type="text" name="name" size="20"> 
        </p>

        <p>
            メールアドレス：
            <input type="text" name="email" size="20"> 
        </p>

        <p>
            年齢：
            <select name="age" id="age"></select> 
        </p>

        <p>
            コメント：
            <input type="text" name="comment" size="200"> 
        </p>

        <p>
            <input type="submit" value="send"> 
        </p>


    </form>

    <script>
        let html = "";
        for(let i = 1; i < 130; i++){
            html += `<option value=${i}>${i}</option>`; 
        };
        $("#age").html(html);
    </script>

</body>
</html>