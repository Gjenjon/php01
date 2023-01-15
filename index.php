<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIL4 PHP01</title>

    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link rel="stylesheet" href="./scss/style.css">
    
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>

</head>
<body>

<?php
                function h($value){
                    return htmlspecialchars($value, ENT_QUOTES);
                };

                $filename = 'data/data.txt';

                $fp = fopen($filename, 'r');

                $arr = array();
                while (!feof($fp)){
                    $txt = fgets($fp);
                    
                    // echo h($txt)."<br>";

                    $txtSplit = explode(",", h($txt));
                    // $obj = ['date' => $txtSplit[0], 'time' => $txtSplit[1], 'name' => $txtSplit[2], 'email' => $txtSplit[3], 'age' => $txtSplit[4]];
                    // $obj = json_encode($obj);
                    $arr[] = $txtSplit;

                };

                // print_r($arr[0]);

                fclose($fp);
            ?>

    <header id="header">
        <div class="header-container">
            <div class="header-title">
                <h1> MIL </h1>
            </div>    
                
            <nav class="nav">
                <div>
                    <a href="">About</a>
                    <a href="">Posts</a>
                    <a href="">Form</a>    
                </div>
            
            </nav>
        </div>

        <div class="header-message" id="header-message">
            php学習用掲示板
        </div>


    </header>


    <section>
        <div class="post-container" id="post-container">
        </div>


    </section>

    <!-- データ投稿 -->
    <div class="post">
        <a href="./post.php"> POST </a>
    </div>

    

    <script>
        const headerMessage = 'php学習用掲示板';
        

        $('header').mouseover(() =>{
            // メッセージのリセット
            // $('#header-message').html("");

            // メッセージのタイピング
            // let msg = headerMessage.split('');
            // let tmpMsg = "";
            // for(let i of msg){
            //     tmpMsg = i;
            //     setTimeout($('#header-message').append(tmpMsg), 5000);
            //     console.log(tmpMsg)
            // }
            
            $('header').css('background-color', 'white');
            console.log("on")
            let data = <?php echo json_encode($arr); ?>;

            console.log(data[0]);

        });

        $('header').mouseout(() =>{
            // $('#header-message').html(headerMessage);
            // $('#header-message').hide().fadeIn(100);
        });

                
        // $("#post-container").append('');

        document.addEventListener("DOMContentLoaded", () => {
            
            
            let data = <?php echo json_encode($arr); ?>;

            
            console.log('<?php echo $data; ?>');
            console.log("done")

        })

        let data = <?php echo json_encode($arr); ?>;
        let content;

        for(let i = 0; i < data.length; i++){
            content = `
                <div class="card">
                    <div class="name-age-time">
                        <div class="name-age">
                            ${data[i][2]}（${data[i][4]}）
                        </div>

                        <div class="time">
                            ${data[i][0]}

                        </div>

                    </div>

                    <div class="comment">
                        ${data[i][5]}
                    </div>

                </div>`
            
            
            $('#post-container').append(content);
        }


        

        

    </script>

    


</body>
</html>