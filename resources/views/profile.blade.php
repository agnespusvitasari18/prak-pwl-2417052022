<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                radial-gradient(circle at top left, #6366f1, transparent 35%),
                radial-gradient(circle at bottom right, #06b6d4, transparent 35%),
                #0f172a;
        }

        .card {
            width: 390px;
            padding: 35px;

            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;

            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.35);

            color: white;
            text-align: center;
        }

        .avatar {
            width: 110px;
            height: 110px;

            margin: 0 auto 20px;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 50px;

            background: linear-gradient(135deg, #6366f1, #06b6d4);

            border: 5px solid rgba(255, 255, 255, 0.8);

            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .welcome {
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;

            color: #cbd5e1;

            margin-bottom: 8px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .major {
            display: inline-block;

            padding: 7px 15px;

            border-radius: 20px;

            background: rgba(255, 255, 255, 0.15);

            font-size: 13px;

            margin-bottom: 30px;
        }

        .info-container {
            text-align: left;
        }

        .info {
            display: flex;
            align-items: center;

            padding: 15px;

            margin-bottom: 12px;

            border-radius: 15px;

            background: rgba(255, 255, 255, 0.1);

            border: 1px solid rgba(255, 255, 255, 0.1);

            transition: 0.3s;
        }

        .info:hover {
            transform: translateY(-3px);

            background: rgba(255, 255, 255, 0.18);
        }

        .icon {
            width: 42px;
            height: 42px;

            display: flex;
            justify-content: center;
            align-items: center;

            border-radius: 12px;

            background: rgba(255, 255, 255, 0.15);

            font-size: 20px;

            margin-right: 14px;
        }

        .label {
            font-size: 12px;
            color: #cbd5e1;

            margin-bottom: 3px;
        }

        .value {
            font-size: 15px;
            font-weight: 600;

            word-break: break-word;
        }

        .footer {
            margin-top: 25px;

            font-size: 12px;

            color: #94a3b8;
        }
    </style>
</head>

<body>

    <div class="card">

        <!-- Avatar -->
        <div class="avatar">
            👨‍💻
        </div>

        <div class="welcome">
            Welcome to my profile
        </div>

        <h1>{{ $nama }}</h1>


        <div class="info-container">

            <!-- Nama -->
            <div class="info">
                <div class="icon">
                    👤
                </div>

                <div>
                    <div class="label">
                        NAMA
                    </div>

                    <div class="value">
                        {{ $nama }}
                    </div>
                </div>
            </div>

            <!-- Kelas -->
            <div class="info">
                <div class="icon">
                    📚
                </div>

                <div>
                    <div class="label">
                        KELAS
                    </div>

                    <div class="value">
                        {{ $kelas }}
                    </div>
                </div>
            </div>

            <!-- NPM -->
            <div class="info">
                <div class="icon">
                    🆔
                </div>

                <div>
                    <div class="label">
                        NPM
                    </div>

                    <div class="value">
                        {{ $npm }}
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            Pemrograman Web Lanjut
        </div>

    </div>

</body>
</html>