<html>

<head>
    <link rel="stylesheet" href="style1.css" />
    <?php
    include("header.php");
    ?>
</head>

<body style="height:1100px">


    <form action="check.php" method="post">
        <style>
            .book_container-top {
                background-color: #939393;
                margin: 0px 500px 0px 500px;
                padding: 15px;
                border-radius: 20px;
                font-weight: bold;
            }

            .book_container-top {
                background-color: #939393;
                margin: 109px 440px 10px 440px;
                padding: 15px;
                border-radius: 20px;
                font-weight: bold;
            }

            .input-top {
                background-color: #D3D3D3;
                width: 350px;
                padding: 12px 0px 12px 10px;
                margin: 400px 700px 0px 220px;
                font-size: 20px;
                font-weight: bold;
            }

            .input-left {
                background-color: #D3D3D3;
                width: 350px;
                padding: 12px 0px 12px 10px;
                margin: 10px 700px 0px 220px;
                font-size: 20px;
                font-weight: bold;
            }

            .input-right {
                background-color: #D3D3D3;
                width: 350px;
                padding: 12px 0 12px 10px;
                margin: 109px 220px 0px 700px;
                font-size: 20px;
                font-weight: bold;
            }

            .form-group {
                margin-bottom: 10px;
                display: flex;
                align-items: center;
            }

            .form-group label {
                flex-basis: 70px;
                font-weight: bold;
                padding-right: 10px;
                text-align: right;
            }

            .form-group input[type="text"],
            .form-group input[type="number"],
            .form-group input[type="email"],
            .form-group input[type="password"],
            .form-group input[type="radio"],
            .form-group select {
                flex-grow: 1;
                padding: 5px;
                border-radius: 20px;
                border: 1px solid #ccc;
            }

            .form-group select .form-group select {
                height: 30px;
                margin-top: 109px;
            }


            .test input[type="radio"] {
                display: none;
            }

            .test input:checked+.button {
                background: #5e7380;
                color: #fff;
                cursor: default;
            }

            .test .button {
                display: inline-block;
                margin: 0 5px 10px 0;
                padding: 5px 10px;
                background: #f7f7f7;
                color: #333;
                cursor: pointer;
            }

            .test .button:hover {
                background: #bbb;
                color: #fff;
            }

            .test .round {
                border-radius: 0px;
            }


            .submit-btn {
                margin-top: 20px;
                text-align: right;
            }

            .submit-btn input[type="submit"] {
                MARGIN-RIGHT: 500PX;
                padding: 10px 20px;
                border: none;
                border-radius: 20px;
                background-color: white;
                color: black;
                font-weight: bold;
                cursor: pointer;
            }

            .submit-btn input[type="submit"]:hover {
                background: #bbb;
                color: #fff;
            }

            .btn1-group {
                display: inline-block;
                padding: 11px 20px;
                border-radius: 20px;
                background-color: white;
                color: black;
                font-weight: bold;
                cursor: pointer;
                TEXT-ALIGN: center;
                border: none;
                MARGIN-LEFT: 530px;
                MARGIN-RIGHT: 520PX;
                MARGIN-TOP: -44PX;
                width: 75px;
                height: 44px;

            }

            .btn1-group:hover {
                background: #bbb;
                color: #fff;
            }
        </style>
        <div>
            <form action="check.php" method="POST">
                <div class="book_container-top">
                    <div class="form-group">
                        <label for="name">*帳號:</label>
                        <input type="text" name="C_mail"><br>
                    </div>
                    <div class="form-group">
                        <label for="name">*密碼:</label>
                        <input type="password" name="C_password"><br>
                    </div>
                </div>
                <div class="submit-btn">
                    <input type="submit" value="提交">
                    <BR />
                </div>
                <div>
                    <a href="enroll.php" class="btn1-group">註冊</a>
                </div>
        </div>
    </form>
    </div>
</body>

</html>