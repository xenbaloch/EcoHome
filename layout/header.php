<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("style/Home-Automation.jpg");
            font-family:'Open Sans','Arial',sans-serif;
        }
        form {
            Position: absolute;
            width: 600px;
            height: 580px;
            padding: 20px;
            background-color: steelblue;
        }

        input {
            width:100%;
            background-color: White;
            border:none;
            padding:1em;
            color: Black;
        }
        h2 {
            background-color: #fff;
            text-align:center;
            font-weight:600;
            text-transform:uppercase;
            padding:1em;
            letter-spacing:1px;
        }
        label {
            font-size:.8em;
            font-weight:600;
            margin-bottom:1em;
            display:block;
            color: Black;
            text-transform:uppercase;
        }
        input[type="submit"] {
            background-color:#333;
            margin:5%;
            width:90%;
            text-transform:uppercase;
            font-weight:600;
        }{{  }}


        &:after {
             content:'';
             position:absolute;
             left:46%;
             bottom:-20px;
             border-style: solid;
             border-width: 20px 10px 0 10px;
             border-color: #f51b55 transparent transparent transparent;
         }
        span {
            margin-left: -.7em;

        }
        input[type="submit"]:hover {
            cursor:pointer;
        }

        h4{
            margin: auto;
            text-transform:uppercase;
            font-size:15px;
            color: #fafafa;

        }

        a {
            margin: auto;
            font-size: 20px;
            font-style: italic;
            color: aliceblue;
        }
        .container{
            margin: auto;
            text-align: center;
        }

        .button {
            color: #fff;
            font-size:16px;
            border: 1px solid #a6a6a6;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            margin-top: auto;
            margin-left: 12%;
            outline: none;
            background: rgb(144,238,144); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(144,238,144) 0%, rgb(0,128,0) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(144,238,144)), color-stop(100%,rgb(0,128,0))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }


        .button:hover{
            background: rgb(255,0,0); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(255,0,0) 0%, rgb(201,52,52) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(255,0,0)), color-stop(100%,rgb(201,52,52))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(255,0,0) 0%,rgb(201,52,52) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(255,0,0) 0%,rgb(201,52,52) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(255,0,0) 0%,rgb(201,52,52) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(255,0,0) 0%,rgb(201,52,52) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(255,0,0)', endColorstr='rgb(201,52,52)',GradientType=0 ); /* IE6-9 */
        }

        .button1 {
            color:#fff;
            font-size:15px;
            border: 1px solid #a6a6a6;
            width: 110px;
            height: 30px;
            border-radius: 5px;
            margin-top: 15px;
            margin-right: 6px;
            outline: none;
            background: rgb(144,238,144); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(144,238,144) 0%, rgb(0,128,0) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(144,238,144)), color-stop(100%,rgb(0,128,0))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(144,238,144) 0%,rgb(0,128,0) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }


        .button1:hover{
            background: rgb(55,167,251); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(173,216,230) 0%, rgb(55,167,251) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(173,216,230)), color-stop(100%,rgb(55,167,251))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }

        .button2 {
            color:#fff;
            font-size:10px;
            border: 1px solid #a6a6a6;
            width: 100px;
            height: 30px;
            border-radius: 5px;
            margin-top: 5px;
            margin-right: 16px;
            outline: none;
            background: rgb(192,192,192); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(192,192,192) 0%, rgb(192,192,192) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(192,192,192)), color-stop(100%,rgb(192,192,192))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(192,192,192) 0%,rgb(192,192,192) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(192,192,192) 0%,rgb(192,192,192) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(192,192,192) 0%,rgb(192,192,192) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(192,192,192) 0%,rgb(192,192,192) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }


        .button2:hover{
            background: rgb(255,0,0); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(255,0,0) 0%, rgb(255,0,0) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(255,0,0)), color-stop(100%,rgb(255,0,0))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(255,0,0) 0%,rgb(255,0,0) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(255,0,0) 0%,rgb(255,0,0) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(255,0,0) 0%,rgb(255,0,0) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(255,0,0) 0%,rgb(255,0,0) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }

        .button3 {
            color:#fff;
            font-size:15px;
            border: 1px solid #0078ea;
            width: 100%;
            height: 30px;
            border-radius: 5px;
            margin-top: 15px;
            margin-right: 6px;
            outline: none;
            background: rgb(74, 150, 238); /* Old browsers */
            background: -moz-linear-gradient(top, rgb(74, 150, 238) 0%, rgb(61, 122, 197) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgb(74, 150, 238)), color-stop(100%, rgb(61, 122, 197))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgb(74, 150, 238) 0%, rgb(61, 122, 197) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgb(74, 150, 238) 0%, rgb(61, 122, 197) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgb(74, 150, 238) 0%, rgb(61, 122, 197) 100%); /* IE10+ */
            background: linear-gradient(to bottom, rgb(74, 150, 238) 0%, rgb(61, 122, 197) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }


        .button3:hover{
            background: rgb(55,167,251); /* Old browsers */
            background: -moz-linear-gradient(top,  rgb(173,216,230) 0%, rgb(55,167,251) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(173,216,230)), color-stop(100%,rgb(55,167,251))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* IE10+ */
            background: linear-gradient(to bottom,  rgb(173,216,230) 0%,rgb(55,167,251) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgb(55,167,251)', endColorstr='rgb(173,216,230)',GradientType=0 ); /* IE6-9 */
        }

        label {
            position: relative;
            top: 5px;
            margin-right: 115px;
        }
        label span {
            margin-left: 5px;
            font-size:14px;
        }
    </style>
</head>
<body>