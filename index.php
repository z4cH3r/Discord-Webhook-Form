<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $browers_title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">
</head>
        <?php
        echo '<style>
        html, body {
            height: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
        }
        input[type="text"], input[type="email"], textarea {
            background-color : '.$form_input_color.' !important; 
        }
        ::placeholder { 
            color: '.$font_color.' !important; 
        } 
        </style>
        <body>
        <div class="contact-clean" style="background-color:'.$background_color.';height:100%;min-height:100%;">';

        echo '<form method="post" action="discord-post.php" style="background-color:'.$form_background_color.';">
        <h2 class="text-center" style="color: '.$font_color.' !important;">'.$form_title.'</h2>
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
        <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="form rating" value="Loves it" id="radio-button1" checked="" class="custom-control-input" required><label for="radio-button1" class="custom-control-label" style="color: '.$font_color.' !important;">Love This Form</label></div>
            <div class="custom-control custom-radio custom-control-inline"><input type="radio" name="form rating" value="Hates it" id="radio-button2" checked="" class="custom-control-input" required><label for="radio-button2" class="custom-control-label" style="color: '.$font_color.' !important;">Hate This Form</label></div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox custom-control-inline"><input type="checkbox" name="checkbox" value="Yes" id="checkbox-button"  checked="" class="custom-control-input"><label for="checkbox-button" class="custom-control-label" style="color: '.$font_color.' !important;">I&apos;d like a free checkbox.</label></div>
        </div>
        <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message" required></textarea></div>
        <div class="form-group"><button class="btn '.$buttom_type.'" type="submit">send</button></div>
    </form>';
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
