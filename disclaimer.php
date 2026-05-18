
<!DOCTYPE html>
<html lang="ar" dir="rtl" id="disclaimerHtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إخلاء المسؤولية القانونية - Legal Disclaimer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #007a53;
            --secondary-green: #00593c;
            --dark-slate: #1f2937;
            --light-bg: #f4f6f8;
            --border-color: #e5e7eb;
            --card-white: #ffffff;
            
            /* تدرج الألوان المتباينة للأقسام السبعة لصفحة إخلاء المسؤولية */
            --color-disc-1: #dc2626; /* أحمر تحذيري */
            --color-dbg-1: #ffffff;
            --color-disc-2: #ea580c; /* برتقالي غامق */
            --color-dbg-2: #fff7ed;
            --color-disc-3: #2563eb; /* أزرق */
            --color-dbg-3: #ffffff;
            --color-disc-4: #0d9488; /* تركواز */
            --color-dbg-4: #f0fdfa;
            --color-disc-5: #ca8a04; /* أصفر داكن */
            --color-dbg-5: #ffffff;
            --color-disc-6: #7c3aed; /* بنفسجي */
            --color-dbg-6: #f5f3ff;
            --color-disc-7: #4b5563; /* رمادي صلب */
            --color-dbg-7: #ffffff;
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
        .disc-group-1 { border-top: 6px solid var(--color-disc-1); background-color: var(--color-dbg-1); }
        .disc-group-2 { border-top: 6px solid var(--color-disc-2); background-color: var(--color-dbg-2); }
        .disc-group-3 { border-top: 6px solid var(--color-disc-3); background-color: var(--color-dbg-3); }
        .disc-group-4 { border-top: 6px solid var(--color-disc-4); background-color: var(--color-dbg-4); }
        .disc-group-5 { border-top: 6px solid var(--color-disc-5); background-color: var(--color-dbg-5); }
        .disc-group-6 { border-top: 6px solid var(--color-disc-6); background-color: var(--color-dbg-6); }
        .disc-group-7 { border-top: 6px solid var(--color-disc-7); background-color: var(--color-dbg-7); }

        .section-block h3 {
            margin-top: 0;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .disc-group-1 h3 { color: var(--color-disc-1); }
        .disc-group-2 h3 { color: var(--color-disc-2); }
        .disc-group-3 h3 { color: var(--color-disc-3); }
        .disc-group-4 h3 { color: var(--color-disc-4); }
        .disc-group-5 h3 { color: var(--color-disc-5); }
        .disc-group-6 h3 { color: var(--color-disc-6); }
        .disc-group-7 h3 { color: var(--color-disc-7); }

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
        <h1 class="header-title">وثيقة براءة وإخلاء المسؤولية القانونية</h1>
        <div class="header-subtitle">بيان حدود المسؤولية والصفة الاعتبارية للموقع - مركز اليلايس</div>
    </div>
    <div id="header-en" class="lang-content">
        <h1 class="header-title" style="font-family: 'Arial', sans-serif;">General Legal Disclaimer Instrument</h1>
        <div class="header-subtitle" style="font-family: 'Arial', sans-serif;">Limitation of Liability & Corporate Status Declaration - Al Elais Center</div>
    </div>
    
    <div class="lang-switcher">
        <button id="btn-ar" class="lang-toggle-btn active-lang" onclick="switchLanguage('ar')">العربية</button>
        <button id="btn-en" class="lang-toggle-btn" onclick="switchLanguage('en')">English</button>
    </div>
</header>

<div class="policy-container">

    <div id="content-ar" class="lang-content visible-content">
        
        <div class="intro-card">
            <h2>مقدمة عامة وتوضيحية هامّة</h2>
            <p>تم إعداد صياغة بنود هذه الوثيقة القانونية (إخلاء المسؤولية) لتوضيح النطاق المهني والتقني الذي تعمل من خلاله المنصة الإلكترونية التابعة لـ <strong>مركز اليلايس لفحص وتسجيل المركبات ش.م.م</strong>. نرجو من جميع الزوار والمتعاملين قراءة هذه البنود بتمعن تام، حيث إن تصفحك واستخدامك للموقع واستعلامك عن أي بيانات أو إتمامك لعمليات السداد يُعد بمثابة إقرار واعٍ وموافقة قانونية قاطعة على إعفاء المنصة من أي مسؤولية خارج نطاقها التشغيلي المقر.</p>
        </div>

        <div class="section-block disc-group-1">
            <h3><i class="fas fa-exclamation-circle"></i> 1. نفي التبعية الرسمية للجهات الحكومية</h3>
            <p>تعلن المنصة وإدارتها بشكل واضح، جازم وصارم، ونفياً لأي جهالة أو التباس، أنها **ليست جهة حكومية**، ولا تمثل شرطة المرور، وليست ذراعاً تابعاً لوزارة الداخلية أو هيئات الطرق والمواصلات الرسمية في الدولة. المنصة هي واجهة تقنية وسيطة مستقلة تماماً ومملوكة بالكامل لشركة قطاع خاص وهي **مركز اليلايس لفحص وتسجيل المركبات ش.م.م**، تُقدم خدمات تسهيل الفحص والاستعلام ودفع المخالفات رقمياً من خلال رخصتها التجارية والحلول الإلكترونية المتاحة.</p>
        </div>

        <div class="section-block disc-group-2">
            <h3><i class="fas fa-database"></i> 2. دقة البيانات والمعلومات المعروضة</h3>
            <p>إن كافة البيانات الخاصة بالمخالفات، تفاصيل اللوحات، المبالغ المستحقة، والغرامات التي تظهر للمستخدم عند إدخال الرمز المروري أو رقم اللوحة، يتم جلبها وعرضها بناءً على تحديثات الأنظمة الوسيطة وبوابات السداد المستقلة المتصلة بها. بناءً على ذلك، لا تقدم المنصة أي ضمانات مطلقة حول دقة هذه البيانات بنسبة مائة بالمائة في نفس اللحظة نظراً للاحتمالية التقنية لتأخر تحديث البيانات من المصادر الحكومية الأصلية، وتُخلي المنصة مسؤوليتها الكاملة عن أي تباين في الأرقام.</p>
        </div>

        <div class="section-block disc-group-3">
            <h3><i class="fas fa-credit-card"></i> 3. مسؤولية عمليات السداد والتحصيل المالي</h3>
            <p>تنحصر مسؤولية المنصة التقنية والمالية في تأمين وصول الأموال المودعة والمدفوعة من قِبل العميل عبر البوابة المشفرة إلى حساب الجهة الوسيطة المعتمدة لتصفية وتسوية المخالفة المعنية. لا تتحمل المنصة أي مسؤولية قانونية عن عمليات الدفع التي تتم باستخدام بطاقات ائتمانية مسروقة، أو معاملات مالية غير مصرح بها من قِبل أصحاب الحسابات البنكية الأصليين، ويقع عبء المراقبة والتحقق بالكامل على بوابات الدفع الإلكترونية والمستخدم.</p>
        </div>

        <div class="section-block disc-group-4">
            <h3><i class="fas fa-bolt"></i> 4. الأعطال الفنية وانقطاع الخدمة الطارئ</h3>
            <p>نحن نعمل بجهود حثيثة لضمان استقرار الخوادم وعمل المنصة على مدار الساعة دون انقطاع. ومع ذلك، فإن المنصة لا تضمن عدم حدوث بطء تقني، أو انقطاع مفاجئ في الخدمة، أو توقف مؤقت لبعض الأزرار نتيجة أعمال الصيانة الدورية، أو الأعطال البرمجية الطارئة، أو انقطاع الربط مع الأنظمة الخارجية. ولا تكون المنصة أو إدارتها مسؤولة عن أي خسائر معنوية أو مادية تلحق بالعميل نتيجة عدم تمكنه من دخول الموقع أو تأخر إتمام الطلب.</p>
        </div>

        <div class="section-block disc-group-5">
            <h3><i class="fas fa-shield-alt"></i> 5. الروابط الخارجية والمواقع التابعة لأطراف ثالثة</h3>
            <p>قد تحتوي منصتنا على روابط إلكترونية، أو بوابات دفع، أو فروع ومواقع تابعة لأطراف ثالثة مستقلة لتسهيل إتمام العمليات التشغيلية (مثل بوابات التحصيل الإلكتروني). نود التنويه بشكل قاطع أننا لا نملك أي سلطة رقابية أو إدارية على محتوى تلك المواقع الخارجية، أو سياسات الخصوصية والأمان المتبعة لديهم، وبالتالي فإن دخولك واستخدامك لتلك الروابط يقع تحت مسؤوليتك الشخصية الكاملة والمباشرة دون أدنى مسؤولية علينا.</p>
        </div>

        <div class="section-block disc-group-6">
            <h3><i class="fas fa-user-times"></i> 6. أخطاء المدخلات والإهمال البشري</h3>
            <p>يتحمل العميل والمستخدم وحده دون غيره التبعات القانونية والمالية الكاملة الناتجة عن الإهمال أو الخطأ في إدخال تفاصيل المركبة، مثل كتابة رقم لوحة خاطئ، أو اختيار رمز مروري غير صحيح، أو سداد مخالفات تخص مركبة أخرى بالخطأ. المنصة تقوم بمعالجة البيانات المكتوبة في الحقول آلياً فوراً وبشكل مؤتمت، ولا تملك القدرة على مراجعة النوايا أو التحقق من ملكية اللوحة المدخلة بشرياً، ولا يترتب عليها أي التزام بالتعويض.</p>
        </div>

        <div class="section-block disc-group-7">
            <h3><i class="fas fa-gavel"></i> 7. التغييرات القانونية وتحديث صياغة البنود</h3>
            <p>يحتفظ <strong>مركز اليلايس لفحص وتسجيل المركبات</strong> بكامل أهليته القانونية لتحديث أو تعديل أو تغيير أو إزالة أي أجزاء من هذه الوثيقة في أي وقت ودون سابق إنذار، تماشياً مع المتطلبات التنظيمية والتعديلات التشريعية المحلية. تُصبح البنود المعدلة سارية المفعول قانوناً فور رفعها على هذه الصفحة، ويعد استمرار العميل في تصفح الموقع إقراراً حاسماً بالموافقة عليها، وندعو الجميع للاطلاع الدوري المستمر.</p>
        </div>

        <div class="bottom-navigation">
            <a href="index_ar.php" class="nav-btn"><i class="fas fa-arrow-right"></i> العودة للموقع العربي الرئيسي</a>
        </div>

    </div>

    <div id="content-en" class="lang-content" style="direction: ltr; text-align: left;">
        
        <div class="intro-card">
            <h2>General Explanatory & Critical Introduction</h2>
            <p>The core terms within this framework are structured explicitly to outline the technical, commercial, and legal boundaries of the web platform operated by <strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong>. Visitors are strictly urged to read these stipulations thoroughly. Accessing this site, executing verification inquiries, or utilizing payment facilities acts as a definitive acknowledgment and binding consensus to release the platform from any liability beyond its active statutory role.</p>
        </div>

        <div class="section-block disc-group-1">
            <h3><i class="fas fa-exclamation-circle"></i> 1. Non-Affiliation with Government Bodies Clause</h3>
            <p>The website management explicitly and firmly declares, avoiding any form of ambiguity or misdirection, that **it is not a government entity**. We do not represent the traffic authorities, nor are we associated with the Ministry of Interior or local Roads and Transport Authorities. This platform is an independent, private e-service intermediary operated by <strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong> under valid trade credentials to simplify fine processing solutions.</p>
        </div>

        <div class="section-block disc-group-2">
            <h3><i class="fas fa-database"></i> 2. Accuracy & Integration of Displayed Parameters</h3>
            <p>All structural variables concerning traffic fine metrics, plate information, historical balances, and aggregate tariffs presented upon entering traffic codes are compiled directly from third-party networks and clearing interfaces. Consequently, the platform provides no dynamic guarantees regarding total data accuracy in real-time. Delays caused by third-party data pipelines are entirely outside our operational domain, and the platform disclaims all subsequent variance liability.</p>
        </div>

        <div class="section-block disc-group-3">
            <h3><i class="fas fa-credit-card"></i> 3. Responsibility for Online Payment Aggregations</h3>
            <p>The platform’s processing liabilities are strictly confined to securing the transport of data variables and processed balances from the encrypted gateway to the accredited clearing houses assigned to reconcile the targeted traffic ledger. We bear no accountability for fraudulent actions carried out with stolen card provisions or unauthorized corporate parameters. Financial authentication remains the core task of the payment provider and the local consumer.</p>
        </div>

        <div class="section-block disc-group-4">
            <h3><i class="fas fa-bolt"></i> 4. Technical Downtime & Server Disruptions Disclaimer</h3>
            <p>While maximum infrastructural actions are taken to maintain optimal server stability 24/7, the platform cannot guarantee completely error-free operations or continuous uptime. Unexpected latency, temporal script freezes, or interface maintenance intervals may occur. The company and its developers disclaim any liability for potential material or moral injuries suffered due to portal downtime, delayed balance updates, or transmission lag.</p>
        </div>

        <div class="section-block disc-group-5">
            <h3><i class="fas fa-shield-alt"></i> 5. Hyperlinks & Third-Party Network Frameworks</h3>
            <p>This layout might embed external redirects or portal access channels belonging to independent external entities (such as merchant payment engines). We state clearly that we maintain no administrative leverage or editorial control over the content, tracking architectures, or security standards deployed by those third parties. Accessing external platforms via our system is done solely at your own risk, with no shared liability whatsoever.</p>
        </div>

        <div class="section-block disc-group-6">
            <h3><i class="fas fa-user-times"></i> 6. User Typing Faults & Clerical Error Responsibilities</h3>
            <p>The user maintains total, standalone liability for all legal and fiscal consequences resulting from inaccurate field inputs, including entering incorrect plate metrics, choosing unassigned codes, or mistakenly paying balances linked to alternate vehicles. System responses process matching data fields instantly and automatically; we cannot review personal intent or physically verify vehicle ownership profiles, ruling out any compensation rights.</p>
        </div>

        <div class="section-block disc-group-7">
            <h3><i class="fas fa-gavel"></i> 7. Statutory Modifications & Terms Updates Rights</h3>
            <p><strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong> retains full sovereign rights to alter, append, reduce, or substitute sections of this disclaimer instrument at any chosen interval without advance proclamation, keeping pace with municipal regulatory changes. Modified drafts are instantly binding upon web deployment. Continued interaction with this platform demonstrates continuous compliance, and manual reviews are advised.</p>
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
    // جافا سكريبت التبديل اللغوي الفوري والمباشر في نفس الصفحة دون تحميل
    function switchLanguage(lang) {
        const contentAr = document.getElementById('content-ar');
        const contentEn = document.getElementById('content-en');
        const headerAr = document.getElementById('header-ar');
        const headerEn = document.getElementById('header-en');
        const footerAr = document.getElementById('footer-rights-ar');
        const footerEn = document.getElementById('footer-rights-en');
        const btnAr = document.getElementById('btn-ar');
        const btnEn = document.getElementById('btn-en');
        const htmlTag = document.getElementById('disclaimerHtml');

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
