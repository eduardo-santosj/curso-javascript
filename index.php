<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>JavaScript 30 Dias</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> 
</head>
<body>
  <div class="container">
    <div class="card">
      <?php
        $files = scandir('./');

        $count = 0;
        foreach ($files as $file) :
          $count++;

          if ( $count <= 2 || $file == 'index.php' ) {
            continue;
          }
      ?>
        <div class="items">
          <div class="item-content">
            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20"><path d="M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48zm-6 272H54c-3.314 0-6-2.678-6-5.992V117.992A5.993 5.993 0 0 1 54 112h134.118l64 64H458a6 6 0 0 1 6 6v212a6 6 0 0 1-6 6z"/></svg><span><?php echo $file; ?></span></p>
          </div>
          <div class="item-link">
            <a href="<?php echo $file ?>" class="button">Ver Conteúdo</a>
          </div>

          <div class="clearfix"></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- Style -->
  <style>
    body, html {
      overflow: hidden;
    }

    body {
      background-image: linear-gradient(to bottom, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 15%, rgba(28,28,28,1) 78%, rgba(19,19,19,1) 100%);
      width: 100%;
      height: 100vh;
    }
    
    body * {
      box-sizing: border-box;
      font-family: 'Roboto';
      text-decoration: none;
    }

    .clearfix {
      clear: both;
    }

    .container {
      width: 1024px;
      height: auto;
      display: block;
      margin: 0 auto;
    }
      .container .card {
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 3px 3px 0 rgba(0,0,0,0.1);
        width: 680px;
        padding: 15px 30px;
        position: fixed;
        top: 50%;
        left: 50%;
        opacity: 0;
        max-height: 400px;
        overflow-y: auto;
        transform: translate(-50%, 0%);
        transition: all 1s ease;
      }
        .container .card.active {
          opacity: 1;
          transform: translate(-50%, -50%);
        }
        .container .card .items {
          position: relative;
          width: 100%;
          height: auto;
        }
          .container .card .items .item-content {
            float: left;
          }
            .container .card .items .item-content svg {
              margin-right: 15px;
              position: relative;
              top: 3px;
            }
            .container .card .items .item-content span {
              text-transform: capitalize;
            }
          .container .card .items .item-link {
            float: right;
          }

    .button {
      font-size: 12px;
      text-transform: uppercase;
      border-radius: 5px;
      background: linear-gradient(to bottom, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 15%, rgba(28,28,28,1) 78%, rgba(19,19,19,1) 100%);
      color: #FFF;
      padding: 7px 20px;
      position: absolute;
      right: 0;
      top: 50%;
      font-weight: 500;
      box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
      transform: translateY(-50%);
      transition: all 150ms ease;
    }
      .button:hover {
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
        transform: translateY(calc(-50% - 2px));
      }

    .remove-click {
      pointer-events: none;
    }

    @media (max-width: 768px) {
      .container {
        width: 100%;
      }
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>

    window.onload = function() {
      document.querySelector('.card').classList.add('active');
    }
  </script>

</body>
</html>