<!-- resources/views/emails/admin_contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f7;
            color: #333333;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .header {
            border-bottom: 1px solid #dddddd;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #777777;
            text-align: center;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Message</h2>
        </div>

        <div class="content">
            <div class="value">
                <p> {!!html_entity_decode($content)!!}</p>
            </div>
        </div>

        <div class="footer">
            <p>This message was sent from your website contact form.</p>
        </div>
    </div>
</body>
</html>
