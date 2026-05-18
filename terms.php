<!DOCTYPE html>
<html lang="ar" dir="rtl" id="termsHtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الشروط والأحكام - Terms & Conditions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #007a53;
            --secondary-green: #00593c;
            --dark-slate: #1f2937;
            --light-bg: #f4f6f8;
            --border-color: #e5e7eb;
            --card-white: #ffffff;
            
            /* تدرج الألوان المتباينة للأقسام السبعة لجعل المظهر احترافي ومميز */
            --color-term-1: #0284c7; /* أزرق */
            --color-tbg-1: #ffffff;
            --color-term-2: #b45309; /* برتقالي داكن */
            --color-tbg-2: #fefce8;
            --color-term-3: #4f46e5; /* نيلي */
            --color-tbg-3: #ffffff;
            --color-term-4: #059669; /* أخضر زمردي */
            --color-tbg-4: #f0fdf4;
            --color-term-5: #dc2626; /* أحمر */
            --color-tbg-5: #ffffff;
            --color-term-6: #7c3aed; /* بنفسجي */
            --color-tbg-6: #f5f3ff;
            --color-term-7: #4b5563; /* رمادي غامق */
            --color-tbg-7: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-bg);
            color: var(--dark-slate);
            line-height: 1.8;
        }

        /* هيدر تفاعلي احترافي */
        header {
            background-color: var(--primary-green);
            color: #ffffff;
            padding: 25px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
            position: relative;
        }

        .header-title { font-size: 1.6rem; font-weight: 800; margin: 0; }
        .header-subtitle { font-size: 0.95rem; margin: 5px 0 15px 0; opacity: 0.9; }
        
        .lang-switcher {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .lang-toggle-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.4);
            color: #fff;
            padding: 8px 22px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .lang-toggle-btn.active-lang {
            background: #ffffff;
            color: var(--primary-green);
            border-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        .lang-toggle-btn:hover:not(.active-lang) {
            background: rgba(255, 255, 255, 0.35);
        }

        /* حاوية العرض */
        .policy-container {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* كارت المقدمة */
        .intro-card {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: #ffffff;
            padding: 35px;
            border-radius: 20px;
            margin-bottom: 35px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        }
        .intro-card h2 { margin-top: 0; font-size: 1.4rem; border-bottom: 2px solid rgba(255,255,255,0.15); padding-bottom: 10px; }

        /* تنسيق الأقسام الملونة البارزة */
        .section-block {
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }
        .section-block:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
        }

        /* ربط كلاسات التصميم المتباين بالأقسام السبعة */
        .term-group-1 { border-top: 6px solid var(--color-term-1); background-color: var(--color-tbg-1); }
        .term-group-2 { border-top: 6px solid var(--color-term-2); background-color: var(--color-tbg-2); }
        .term-group-3 { border-top: 6px solid var(--color-term-3); background-color: var(--color-tbg-3); }
        .term-group-4 { border-top: 6px solid var(--color-term-4); background-color: var(--color-tbg-4); }
        .term-group-5 { border-top: 6px solid var(--color-term-5); background-color: var(--color-tbg-5); }
        .term-group-6 { border-top: 6px solid var(--color-term-6); background-color: var(--color-tbg-6); }
        .term-group-7 { border-top: 6px solid var(--color-term-7); background-color: var(--color-tbg-7); }

        .section-block h3 {
            margin-top: 0;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .term-group-1 h3 { color: var(--color-term-1); }
        .term-group-2 h3 { color: var(--color-term-2); }
        .term-group-3 h3 { color: var(--color-term-3); }
        .term-group-4 h3 { color: var(--color-term-4); }
        .term-group-5 h3 { color: var(--color-term-5); }
        .term-group-6 h3 { color: var(--color-term-6); }
        .term-group-7 h3 { color: var(--color-term-7); }

        .section-block p {
            font-size: 0.98rem;
            color: #374151;
            text-align: justify;
        }

        .policy-list {
            margin: 15px 0;
            padding-right: 25px;
            padding-left: 25px;
        }
        .policy-list li { margin-bottom: 10px; font-size: 0.98rem; color: #4b5563; }

        /* أزرار التنقل والعودة */
        .bottom-navigation {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }
        .nav-btn {
            background-color: var(--primary-green);
            color: #ffffff;
            text-decoration: none;
            padding: 14px 40px;
            border-radius: 35px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            font-size: 1rem;
        }
        .nav-btn:hover {
            background-color: var(--secondary-green);
            transform: translateY(-3px);
        }

        /* فوتر الهوية الأسود الموحد */
        footer {
            background-color: #000000;
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
            font-size: 0.85rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        footer .comp-name { display: block; font-weight: bold; font-size: 1.05rem; margin-bottom: 10px; }
        footer .rights-text { color: #aaa; margin-top: 10px; display: block; }

        /* كلاسات التحكم السريع في اللغات */
        .lang-content { display: none; }
        .lang-content.visible-content { display: block; }
    </style>
</head>
<body>

<header>
    <div id="header-ar" class="lang-content visible-content">
        <h1 class="header-title">اتفاقية الشروط والأحكام للاستخدام الرقمي</h1>
        <div class="header-subtitle">القواعد والضوابط القانونية المنظمة للمعاملات - مركز اليلايس</div>
    </div>
    <div id="header-en" class="lang-content">
        <h1 class="header-title" style="font-family: 'Arial', sans-serif;">Terms and Conditions Agreement</h1>
        <div class="header-subtitle" style="font-family: 'Arial', sans-serif;">Legal Regulatory Framework & Guidelines - Al Elais Center</div>
    </div>
    
    <div class="lang-switcher">
        <button id="btn-ar" class="lang-toggle-btn active-lang" onclick="switchLanguage('ar')">العربية</button>
        <button id="btn-en" class="lang-toggle-btn" onclick="switchLanguage('en')">English</button>
    </div>
</header>

<div class="policy-container">

    <div id="content-ar" class="lang-content visible-content">
        
        <div class="intro-card">
            <h2>مقدمة قانونية وتعريفات أساسية</h2>
            <p>يسر <strong>مركز اليلايس لفحص وتسجيل المركبات ش.م.م</strong> أن يرحب بجميع الزوار. تُعد هذه الوثيقة الرقمية بمثابة اتفاقية قانونية ملزمة وشاملة تحكم وتضبط شروط استخدام المنصة الإلكترونية والاستفادة من خدمات الاستعلام ودفع المخالفات المرورية. بدخولك وتصفحك للموقع أو إتمام أي معاملة مالية من خلاله، فإنك تقر صراحةً وبكامل أهليتك القانونية بموافقتك الكاملة وغير المشروطة على جميع البنود والضوابط الواردة في هذه الوثيقة.</p>
        </div>

        <div class="section-block term-group-1">
            <h3><i class="fas fa-gavel"></i> 1. الطبيعة القانونية للمنصة وبند الصفة الوسيطة</h3>
            <p>يجب على المستخدم أن يعلم ويقر بشكل جازم وقاطع بأن هذا الموقع عبارة عن منصة إلكترونية مستقلة تابعة لشركة قطاع خاص، وهي **مركز اليلايس لفحص وتسجيل المركبات ش.م.م**، وتعمل بموجب ترخيصها التجاري كجهة وسيطة لتسهيل وتخليص المعاملات والتحصيل الإلكتروني وسداد الفواتير والمخالفات المرورية لحساب المستفيدين. نحن لا نمثل شرطة المرور، ولا ندعي التبعية لوزارة الداخلية أو أي هيئة نقل حكومية رسمية، والخدمة تُقدم بشكل تجاري تقني ومستقل تماماً.</p>
        </div>

        <div class="section-block term-group-2">
            <h3><i class="fas fa-user-check"></i> 2. شروط ومسؤولية الاستخدام الفردي</h3>
            <p>عند استخدامك لمنصتنا ونماذج الاستعلام المتوفرة، يتوجب عليك الالتزام التام بالقواعد التشغيلية التالية لضمان سلامة التعاملات:</p>
            <ul class="policy-list">
                <li>الالتزام بإدخال بيانات صحيحة، دقيقة، ومحدثة بالكامل تخص مركبتك أو ملفك المروري، وتتحمل وحدك المسؤولية القانونية الكاملة عن أي خطأ في إدخال الأرقام.</li>
                <li>يُحظر تماماً محاولة استخدام المنصة للاستعلام التعسفي أو غير المصرح به عن مركبات لا تملكها أو لا تملك تفويضاً قانونياً صريحاً من أصحابها للاستعلام عنها وسداد رسومها.</li>
                <li>يتعهد المستخدم بعدم استخدام أي برمجيات خبيثة، أو أدوات فحص آلية، أو محاولات إغراق برمجية (DDOS) لتعطيل عمل الخوادم أو اختراق قواعد البيانات المؤقتة.</li>
            </ul>
        </div>

        <div class="section-block term-group-3">
            <h3><i class="fas fa-credit-card"></i> 3. ضوابط الدفع الإلكتروني والرسوم الإدارية</h3>
            <p>تخضع كافة المدفوعات والرسوم المجمعة عبر المنصة للسياسات المالية المقررة. إن القيمة الإجمالية المعروضة عند الدفع تشتمل على قيمة المخالفة أو الرسم الحكومي الأصلي، مضافاً إليها رسوم خدمة تشغيلية وإدارية بسيطة خاصة بالمنصة لقاء تقديم حلول السداد السريع والتخليص الإلكتروني الفوري ومزامنة الأنظمة. بموافقتك على الانتقال لبوابة الدفع المشفرة، فإنك تعلن موافقتك الصريحة على قيمة الرسوم الإدارية المفروضة ولا يحق لك الاعتراض عليها لاحقاً.</p>
        </div>

        <div class="section-block term-group-4">
            <h3><i class="fas fa-sync-alt"></i> 4. آلية مزامنة الأنظمة وإتمام المعاملات</h3>
            <p>نحن نعمل بأقصى طاقاتنا التقنية لضمان معالجة المدفوعات وتحديث السجلات المرورية بشكل فوري. ومع ذلك، يجب على المستخدم أن يدرك أن تحديث المخالفات وإزالتها من الأنظمة الحكومية الرسمية يعتمد على فترات المزامنة الإلكترونية وجداول معالجة البيانات بين بوابات الدفع المستقلة وبين جهات الترخيص الرسمية. يستغرق التحديث عادةً فترات وجيزة تتراوح بين بضع دقائق إلى 24 ساعة عمل، ولا تتحمل المنصة مسؤولية أي تأخير ناتج عن صيانة في الأنظمة الخارجية.</p>
        </div>

        <div class="section-block term-group-5">
            <h3><i class="fas fa-exclamation-triangle"></i> 5. تحديد المسؤولية القانونية وحدود الضمان</h3>
            <p>لا يقدم <strong>مركز اليلايس لفحص وتسجيل المركبات</strong> أي ضمانات صريحة أو ضمنية بشأن خلو المنصة تماماً من الأخطاء التقنية الطارئة الخارجة عن إرادتنا. نحن غير مسؤولين قانونياً عن أي أضرار مباشرة أو غير مباشرة، أو خسائر مادية تنتج عن سوء استخدام الموقع، أو عدم القدرة على الوصول إليه، أو الاعتماد على بيانات تظهر بشكل خاطئ نتيجة عدم تحديث البيانات من المصادر الأصلية. إن حدود مسؤوليتنا الإجمالية لا تتخطى بأي حال من الأحوال قيمة الرسوم الإدارية التي تقاضتها المنصة عن المعاملة المعنية.</p>
        </div>

        <div class="section-block term-group-6">
            <h3><i class="fas fa-copyright"></i> 6. حقوق الملكية الفكرية والعلامات التجارية</h3>
            <p>إن كافة المحتويات البرمجية، الأكواد، التصاميم، الأزرار، الواجهات الرسومية، الأيقونات، النصوص، والشعارات المتوفرة داخل هذه المنصة هي ملكية فكرية مطلقة ومحمية بموجب القوانين الاتحادية للملكية الفكرية في دولة الإمارات لـ <strong>مركز اليلايس لفحص وتسجيل المركبات ش.م.م</strong>. يُمنع منعاً باتاً نسخ، أو مقتبس، أو تكرار، أو إعادة هندسة كود الصفحة، أو استخدام اسم المركز أو رخصته التجارية في أي أعمال مضللة أو منصات مشابهة دون إذن كتابي مسبق.</p>
        </div>

        <div class="section-block term-group-7">
            <h3><i class="fas fa-balance-scale"></i> 7. القانون الواجب التطبيق والاختصاص القضائي</h3>
            <p>تخضع هذه الاتفاقية والشروط والأحكام وفسيرها وكافة النزاعات الناشئة عنها أو المرتبطة باستخدام المنصة الإلكترونية للقوانين والأنظمة والتشريعات المعمول بها والمطبقة في دولة الإمارات العربية المتحدة. وفي حال نشوء أي نزاع قانوني مستعصٍ -لا قدر الله- بين المستخدم والمنصة، يتم حله ودياً أولاً، وفي حال تعذر ذلك، ينعقد الاختصاص القضائي الحصري والبات للمحاكم المختصة في إمارة دبي للنظر والفصل في النزاع.</p>
        </div>

        <div class="bottom-navigation">
            <a href="index_ar.php" class="nav-btn"><i class="fas fa-arrow-right"></i> العودة للموقع العربي الرئيسي</a>
        </div>

    </div>

    <div id="content-en" class="lang-content" style="direction: ltr; text-align: left;">
        
        <div class="intro-card">
            <h2>Legal Introduction & Essential Definitions</h2>
            <p><strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong> is pleased to welcome all users. This digital document constitutes a binding, comprehensive legal agreement governing the usage of our online layout and the processing of fine settlement parameters. By entering, browsing, or executing any transactional payment via this platform, you explicitly acknowledge your complete, unqualified consent to follow and be bound by all structural mandates written herein.</p>
        </div>

        <div class="section-block term-group-1">
            <h3><i class="fas fa-gavel"></i> 1. Legal Status & Intermediary Role Clause</h3>
            <p>The user must understand and accept with definitive certainty that this website is an independent electronic platform owned by a private corporation, namely <strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong>. It operates under its commercial license as an intermediary facilitator for payment processing and automated transaction clearing. We do not represent the traffic police, nor do we claim affiliation with the Ministry of Interior or any government transit entity.</p>
        </div>

        <div class="section-block term-group-2">
            <h3><i class="fas fa-user-check"></i> 2. Terms of Individual Use & Liability</h3>
            <p>When accessing our platform and utilizing the verification inquiries, you are legally bound to enforce the following operational rules to maintain system integrity:</p>
            <ul class="policy-list">
                <li>You must provide perfectly accurate, complete, and updated parameter fields concerning your vehicle plate or traffic profile, bearing sole liability for clerical errors.</li>
                <li>It is strictly prohibited to utilize this interface for arbitrary or unauthorized tracking of vehicles you do not own or lack written explicit delegation to process fine clearings for.</li>
                <li>The user pledges never to introduce malicious scripts, automated testing tools, scraping components, or denial-of-service (DDOS) actions intended to crash servers or compromise storage blocks.</li>
            </ul>
        </div>

        <div class="section-block term-group-3">
            <h3><i class="fas fa-credit-card"></i> 3. Payment Processing Regulations & Service Fees</h3>
            <p>All fiscal settlements aggregated through the platform are managed by specific commercial criteria. The gross balance shown at checkout includes the net cost of the official government fine or statutory tariff, supplemented by a modest administrative service fee assigned by this platform. This fee pays for the rapid settlement solutions, digital synchronization, and immediate ledger processing. By proceeding to the encrypted gateway, you explicitly consent to these terms.</p>
        </div>

        <div class="section-block term-group-4">
            <h3><i class="fas fa-sync-alt"></i> 4. System Synchronization & Transaction Clearings</h3>
            <p>We apply our maximum technical resources to ensure payments are settled and vehicle ledgers are updated rapidly. However, the user must understand that removing fines from official state databases relies on synchronization schedules and data pipelines between independent clearance portals and sovereign traffic systems. Clearing cycles typically take from a few minutes up to 24 business hours, and our platform is not liable for structural delays in third-party databases.</p>
        </div>

        <div class="section-block term-group-5">
            <h3><i class="fas fa-exclamation-triangle"></i> 5. Limitation of Legal Liability & Warranties</h3>
            <p><strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong> offers no express or implied guarantees that this platform will be completely free from unexpected technical interruptions beyond our control. We are not legally liable for any direct, indirect, or incidental financial losses arising from improper use of this layout, site downtime, or reliance on fields displaying out-of-sync parameters. Our aggregate liability is strictly capped at the administrative service fee collected for the transaction.</p>
        </div>

        <div class="section-block term-group-6">
            <h3><i class="fas fa-copyright"></i> 6. Intellectual Property & Copyright Protection</h3>
            <p>All source scripts, compilation codes, architectural designs, structural buttons, graphical frameworks, layout textures, icons, written files, and trade titles housed inside this platform are the exclusive intellectual property of <strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong>. Any duplication, scraping, cloning, or reverse-engineering of this layout, or deceptive usage of our corporate title or license number, is strictly barred without prior written permission.</p>
        </div>

        <div class="section-block term-group-7">
            <h3><i class="fas fa-balance-scale"></i> 7. Governing Law & Judicial Jurisdiction</h3>
            <p>This statutory agreement, along with the terms of use, their interpretation, and any subsequent disputes arising from your interaction with this digital interface, shall be governed by and constructed under the active laws and regulations of the United Arab Emirates. In the event of an unresolved legal deadlock, both parties agree to look first to amicable solutions, failing which, exclusive jurisdiction is handed to the competent courts of Dubai.</p>
        </div>

        <div class="bottom-navigation">
            <a href="index.php" class="nav-btn">Return to English Main Site <i class="fas fa-arrow-left"></i></a>
        </div>

    </div>

</div>

<footer>
    <span class="comp-name">AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
    <span>Unified License Number: 889991 | رقم الرخصة الموحد: 889991</span>
    <span class="rights-text" id="footer-rights-ar">جميع الحقوق محفوظة © 2026 مركز اليلايس لفحص وتسجيل المركبات ش.م.م</span>
    <span class="rights-text" id="footer-rights-en" style="display:none;">All Rights Reserved © 2026 AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</span>
</footer>

<script>
    // جافا سكريبت التبديل اللغوي الفوري بدون إعادة تحميل
    function switchLanguage(lang) {
        const contentAr = document.getElementById('content-ar');
        const contentEn = document.getElementById('content-en');
        const headerAr = document.getElementById('header-ar');
        const headerEn = document.getElementById('header-en');
        const footerAr = document.getElementById('footer-rights-ar');
        const footerEn = document.getElementById('footer-rights-en');
        const btnAr = document.getElementById('btn-ar');
        const btnEn = document.getElementById('btn-en');
        const htmlTag = document.getElementById('termsHtml');

        if (lang === 'ar') {
            contentAr.classList.add('visible-content');
            contentEn.classList.remove('visible-content');
            headerAr.classList.add('visible-content');
            headerEn.classList.remove('visible-content');
            footerAr.style.display = 'block';
            footerEn.style.display = 'none';
            btnAr.classList.add('active-lang');
            btnEn.classList.remove('active-lang');
            htmlTag.setAttribute('dir', 'rtl');
            htmlTag.setAttribute('lang', 'ar');
        } else {
            contentEn.classList.add('visible-content');
            contentAr.classList.remove('visible-content');
            headerEn.classList.add('visible-content');
            headerAr.classList.remove('visible-content');
            footerEn.style.display = 'block';
            footerAr.style.display = 'none';
            btnEn.classList.add('active-lang');
            btnAr.classList.remove('active-lang');
            htmlTag.setAttribute('dir', 'ltr');
            htmlTag.setAttribute('lang', 'en');
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

</body>
</html>
