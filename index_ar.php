<!DOCTYPE html>
<html lang="ar" dir="rtl">
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
    <title>مركز اليلايس - خدمات المرور</title>

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

        .header-right { display: flex; align-items: center; gap: 15px; }
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

        .container { padding: 20px 20px; max-width: 500px; margin: 0 auto; }

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
            box-shadow: 0 4px 12 rgba(0, 0, 0, 0.02);
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

        .card-content { flex: 1; margin: 0 15px; text-align: right; }
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
        .faq-title { font-size: 1.4rem; font-weight: 700; color: #1a202c; margin-bottom: 25px; text-align: right; }
        
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
        .faq-answer p { padding: 18px 20px; margin: 0; font-size: 0.95rem; color: #4a5568; line-height: 1.6; text-align: right; }

        .legal-stack {
            margin: 40px 0;
            text-align: right;
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

        .banner-disclaimer-ar {
            font-size: 0.95rem;
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
            direction: rtl;
            font-weight: 400;
            border-top: 1px dashed var(--border-color);
            padding-top: 20px;
        }

        .banner-disclaimer-en {
            font-size: 0.9rem;
            color: #718096;
            line-height: 1.6;
            margin-bottom: 30px;
            text-align: justify;
            direction: ltr;
            font-weight: 400;
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
        <div class="banner-header">استعلم وادفع مخالفات المرور بواسطة مركز لتسجيل وفحص المركبات</div>
        
        <div class="banner-disclaimer-ar">
            تنبيه قانوني وإخلاء مسؤولية: نحن منصة إلكترونية مستقلة تقدم خدمات تسهيل المعاملات وسداد الرسوم والمخالفات المرورية كمتعامل وسيط لحساب المستفيدين، ونود التأكيد بشكل صريح وبات بأننا لا نمثل أي جهة حكومية رسمية، ولا نتبع لشرطة المرور أو هيئات الطرق والمواصفات الرسمية في الدولة، وإنما نقوم بتقديم هذه الخدمات كجهة مستقلة تماماً وفق ضوابط ترخيصنا التجاري.
        </div>
        
        <div class="banner-disclaimer-en">
            Legal Disclaimer: We are an independent electronic platform providing transaction facilitation and traffic fine payment services as an intermediary handler. We explicitly declare that we do not represent any government entity, traffic police, or official transport authorities. All services are rendered independently.
        </div>
        
        <button class="banner-btn" onclick="startService()">ابدأ الخدمة</button>
    </div>
</div>

<header>
    <div class="header-right">
        <div class="menu-icon">☰</div>
        <div class="company-name">مركز اليلايس لفحص وتسجيل المركبات ش.م.م</div>
    </div>
    <a href="index.php" class="lang-btn">English</a>
</header>

<div class="container">
    
    <h1 class="main-title">خدمات الاستعلام عن المخالفات المرورية ودفعها في الإمارات</h1>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-car-side"></i></div>
        <div class="card-content">
            <span class="card-title">استعلام بواسطة رقم اللوحة</span>
            <p class="card-desc">فحص سريع باستخدام بيانات المركبة</p>
        </div>
        <div class="query-btn">استعلام</div>
    </a>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-folder-open"></i></div>
        <div class="card-content">
            <span class="card-title">استعلام بواسطة الملف المروري</span>
            <p class="card-desc">عرض جميع المخالفات على ملفك الشخصي</p>
        </div>
        <div class="query-btn">استعلام</div>
    </a>

    <a href="https://vasrsaea.online" class="service-card">
        <div class="service-icon"><i class="fas fa-id-card"></i></div>
        <div class="card-content">
            <span class="card-title">استعلام بواسطة الرخصة</span>
            <p class="card-desc">البحث عن المخالفات المسجلة على رخصتك</p>
        </div>
        <div class="query-btn">استعلام</div>
    </a>

    <div class="faq-section">
        <div class="faq-title">الأسئلة الشائعة</div>

        <div class="faq-item">
            <div class="faq-question">كيف يمكنني الاستعلام عن المخالفات المرورية؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>يمكنك الاستعلام بسهولة عن طريق اختيار الخدمة المناسبة (لوحة، رخصة، أو ملف مروري) وإدخال التفاصيل المطلوبة.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">هل بوابة الدفع آمنة ومحمية؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>نعم، نستخدم تشفير SSL عالي المستوى وبوابات دفع معتمدة لضمان حماية بياناتك المالية بالكامل.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">متى يتم تحديث المخالفة بعد الدفع؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>يتم تحديث المخالفات عادةً في النظام الرسمي خلال دقائق قليلة وحتى 24 ساعة عمل بعد إتمام المعاملة بنجاح.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">هل يمكنني دفع مخالفات جميع إمارات الدولة؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>نعم، تدعم منصتنا خدمات الاستعلام والدفع للمخالفات المرورية المسجلة في جميع إمارات دولة الإمارات العربية المتحدة.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">ماذا أفعل إذا استمرت المخالفة في الظهور بعد الدفع؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>يرجى الانتظار لمزامنة النظام. إذا استمرت بعد 24 ساعة، تواصل مع الدعم الفني لدينا مع إرفاق إيصال المعاملة.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">هل توجد أي رسوم خدمة إضافية؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>قد يتم تطبيق رسوم إدارية بسيطة مقابل تقديم خدمات التحصيل الإلكتروني السريع والتسهيلات التقنية.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">كيف أحصل على إيصال الدفع الخاص بي؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>سيتم إرسال إيصال رقمي تلقائيًا إلى بريدك الإلكتروني المسجل فور تأكيد عملية الدفع.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">هل يمكنني الاعتراض على مخالفة عبر هذا موقع؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>لا، هذه المنصة للاستعلام والدفع فقط. يجب تقديم الاعتراضات عبر القنوات الرسمية لهيئات المرور المختصة.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">ما هي طرق الدفع المقبولة؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>نقبل جميع البطاقات الائتمانية وبطاقات الخصم الرئيسية، بما في ذلك فيزا وماستركارد والبطاقات المحلية المعتمدة في الدولة.</p></div>
        </div>

        <div class="faq-item">
            <div class="faq-question">هل الخدمة متوفرة خلال العطلات الرسمية؟ <span class="plus">+</span></div>
            <div class="faq-answer"><p>نعم، المنصة تعمل على مدار الساعة 24/7، مما يتيح لك الاستعلام ودفع المخالفات في أي وقت بما في ذلك عطلات نهاية الأسبوع والأعياد.</p></div>
        </div>
    </div>

    <div class="legal-stack">
        <a href="privacy.php">سياسة الخصوصية</a>
        <a href="terms.php">الشروط والأحكام</a>
        <a href="disclaimer.php">إخلاء المسؤولية</a>
        <a href="refund.php">سياسة الاسترداد</a>
    </div>
</div>

<footer>
    <div class="f-disclaimer">
        إخلاء مسؤولية: هذا الموقع مستقل تماماً ويتم تشغيله كمنصة إلكترونية وسيطة لتسهيل وتخليص خدمات دفع المعاملات والمخالفات المرورية، وهو تابع لـ مركز اليلايس لفحص وتسجيل المركبات ش.م.م، ولا يمثل أي جهة حكومية رسمية ولا يتبع لشرطة دبي.
    </div>
    
    <div class="f-info">
        <span class="comp-name">AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
        <span class="detail">رقم الرخصة الموحد: 889991</span>
        <span class="detail">الموقع القانوني: محل 1، مجمع دبي للاستثمار الثاني، إمارة دبي، الإمارات العربية المتحدة</span>
        <span class="detail">الرخصة صادرة عن دائرة الاقتصاد والسياحة في دبي وصالحة حتى: 07-06-2026</span>
        <span class="operator-text">يتم تشغيل هذا الموقع بواسطة مركز اليلايس لفحص وتسجيل المركبات ش.م.م</span>
    </div>
</footer>

<script>
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
