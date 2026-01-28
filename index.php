<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社Jecコンサルティング | 未来をデザインする、確かな戦略</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root { --primary-color: #002347; --accent-color: #c5a059; --text-dark: #333333; --bg-light: #f8f9fa; }
        body { font-family: 'Noto Sans JP', sans-serif; color: var(--text-dark); overflow-x: hidden; }
        h1, h2, h3, .navbar-brand { font-family: 'Montserrat', 'Noto Sans JP', sans-serif; font-weight: 700; }
        .navbar { background-color: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); transition: all 0.3s; border-bottom: 2px solid var(--accent-color); }
        .hero { background: linear-gradient(135deg, rgba(0,35,71,0.9) 0%, rgba(0,35,71,0.7) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2070') center/cover; height: 100vh; display: flex; align-items: center; color: white; text-align: center; }
        .hero h1 { font-size: 3.5rem; letter-spacing: 0.1em; margin-bottom: 1.5rem; animation: fadeInUp 1s ease-out; }
        .service-card { border: none; border-radius: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease; background: white; padding: 30px; height: 100%; }
        .service-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .icon-box { width: 60px; height: 60px; background-color: var(--primary-color); color: var(--accent-color); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 20px; }
        #contact { background-color: var(--bg-light); padding: 100px 0; }
        .btn-custom { background-color: var(--primary-color); color: white; padding: 12px 40px; border-radius: 50px; font-weight: 700; transition: all 0.3s; border: 2px solid var(--primary-color); }
        .btn-custom:hover { background-color: transparent; color: var(--primary-color); }
        footer { background-color: var(--primary-color); color: white; padding: 40px 0; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span style="color: var(--primary-color);">JEC</span><span style="color: var(--accent-color);"> CONSULTING</span></a>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="container text-center">
            <h1>未来を経営の視点から再定義する</h1>
            <a href="#contact" class="btn btn-custom mt-3">無料相談を予約する</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg p-5">
                        <h2 class="text-center mb-4">CONTACT</h2>
                        
                        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                            <div class="alert alert-success">お問い合わせを受け付けました。</div>
                        <?php endif; ?>

                        <form action="submit.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">お名前</label>
                                    <input type="text" name="user_name" class="form-control" placeholder="例：日本 太郎" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">メールアドレス</label>
                                    <input type="email" name="user_email" class="form-control" placeholder="example@jec.co.jp" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">お問い合わせ内容</label>
                                    <select name="subject" class="form-select mb-3">
                                        <option value="経営相談">経営相談について</option>
                                        <option value="DX導入">DX導入について</option>
                                        <option value="採用・研修">採用・研修について</option>
                                        <option value="その他">その他</option>
                                    </select>
                                    <textarea name="message" class="form-control" rows="5" placeholder="ご相談内容の詳細をご記入ください" required></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-custom w-100">送信する</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p class="mb-2">株式会社Jecコンサルティング</p>
            <p class="small opacity-50">&copy; 2026 Jec Consulting Inc.</p>
        </div>
    </footer>
</body>
</html>