<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email collector</title>
    <?php include('form_process.php'); ?>
    <style>
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }

      .flex{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .row{
        flex-direction: row;
      }
      .column{
        flex-direction: column;
      }
      .background{
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: url('https://images.pexels.com/photos/207253/pexels-photo-207253.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb');
        background-size: cover;
        background-repeat: no-repeat;
      }
      .form{
        max-width: 700px;
        width: 100%;
      }
      .header{
        width: 100%;
        font-size: 2.5em;
      }
      .header p{
        background: rgba(255,255,255,.6);
        padding: 10px;
        border-radius: 5px;
      }
      .box{
        position: relative;
        border: none;
        border-radius: 10px;
        background: rgba(0,0,0,.8);
      }
      .box div{
        padding: 10px 0;
      }
      .inputFrame{
        width: 100%;
        position: relative;
      }
      .inputBox{
        position: relative;
        width: 90%;
        max-width: 500px;
      }
      .inputBox input{
        width: 100%;
        padding: 10px 0;
        font-size: 18px;
        color: #fff;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        text-align: center;
      }
      .error{
        font-size: 18px;
      }
      .message{
        font-size: 18px; color: #03a9f4;
      }
      #email-submit{
        background: #03a9f4;
        border: none;
        outline: none;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="background flex column">
      <form class="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="header flex">
          <p>Subscripe to our newsletter</p>
        </div>
        <fieldset class="box">
          <div class="inputFrame flex">
            <div class="inputBox flex">
              <input class="input" type="text" name="email" placeholder="Your email address">
            </div>
          </div>
          <div class="flex" style="height: 20px;">
            <span class="error" style="color: #cc0000;"><?= $email_error ?></span>
            <span class="error" style="color: #ffcc00;"><?= $duplicate_error ?></span>
            <span class="message"><?= $success_message ?></span>
          </div>
          <div class="flex">
            <button name="submit" type="submit" id="email-submit" data-submit="...Sending">Submit</button>
          </div>
        </fieldset>
      </form>
    </div>
  </body>
</html>
