<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .container {
            max-width: 960px;
            margin: 50px auto;
        }
        .modal-wrapper {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(34,234,56, 0.5);
            visibility: hidden;
            opacity: 0;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
        }

        .modal-wrapper.open {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            width: 600px;
            height: 400px;
            display: block;
            margin: 50% 0 0 -300px;
            position: relative;
            top: 50%;
            left: 50%;
            background: #fff;
            opacity: 0;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }


        .modal-wrapper.open .modal {
            margin-top: -200px;
            opacity: 1;
        }

        .modal-wrapper.open .modal img {
            max-width: 100%;
        }

        .gallery-modal {
            display: flex;
        }

        .gallery-modal a {
            display: inline-block;
        }

        .btn-close {
            padding: 10px;
            background-color: tomato;
            color: #fff;
            width: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        
        echo '<h3>' . 'Задание 1' . '</h3>';
        
        $gallery = [
            'strawberry' => 'img/main-slide01.png',
            'choco' => 'img/main-slide02.png',
            'vanilla' => 'img/main-slide03.png',
        ];
        
        echo '<div class="gallery">';
        foreach ($gallery as $image => $fullSize) {
            echo '<a href="' . $fullSize . '" target="_blank">' . '<img src="' . $fullSize . '" alt="image" width="200" height="150">' . '</a>';
        }
        echo '</div>';
        echo '<hr>';
        
        echo '<h3>' . 'Задание 2' . '</h3>';

        $dir = 'img/';
        $images = scandir($dir);

        echo '<div class="gallery">';
        for ($i = 2; $i < count($images); $i++) {
            echo '<a href="' . $dir . $images[$i] . '" target="_blank">' . '<img src="' . $dir . $images[$i] . '" alt="image" width="200" height="150">' . '</a>';
        }
        echo '</div>';
        echo '<hr>';
//
        echo '<h3>' . 'Задание 3' . '</h3>';
        $dir = 'img/';
        $images = scandir($dir);
        echo '<div class="gallery-modal">';
        for ($i = 2; $i < count($images); $i++) {
            echo '<a href="' . $dir . $images[$i] . '" class="trigger" data-id="' . ($i - 1) . ' ">' . '<img src="' . $dir . $images[$i] . '" alt="image" width="200" height="150">' . '</a>';
        }
        echo '</div>';
        echo '<hr>';
        ?>
    </div>
    <!-- Modal -->
    <div class="modal-wrapper">
        <div class="modal">
            <div class="head">
                <button class="btn-close" type="button">
                    Close
                </button>
            </div>
            <div class="content">

            </div>
        </div>
    </div>
    <script>
        const links = document.querySelectorAll('.trigger');
        const close = document.querySelector('.btn-close');
        const content = document.querySelector('.content');
        const modal = document.querySelector('.modal-wrapper');

        links.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.add('open');
                let src = e.target.parentNode.href;
                const $img = document.createElement('img');
                $img.src = src;
                content.appendChild($img);
            });
        });

        close.addEventListener('click', () => {
            content.innerHTML = '';
            modal.classList.remove('open');
        });


    </script>
</body>
</html>
