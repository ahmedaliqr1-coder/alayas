<!DOCTYPE html>
<html lang="ar" dir="rtl" id="policyHtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سياسة الخصوصية - Privacy Policy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #007a53;
            --secondary-green: #00593c;
            --dark-slate: #1f2937;
            --light-bg: #f4f6f8;
            --border-color: #e5e7eb;
            --card-white: #ffffff;
            
            /* ألوان متباينة ومختلفة لكل قسم */
            --color-sec-1: #007a53;
            --color-bg-1: #ffffff;
            --color-sec-2: #2563eb;
            --color-bg-2: #f8fafc;
            --color-sec-3: #db2777;
            --color-bg-3: #ffffff;
            --color-sec-4: #ca8a04;
            --color-bg-4: #fefce8;
            --color-sec-5: #7c3aed;
            --color-bg-5: #ffffff;
            --color-sec-6: #0d9488;
            --color-bg-6: #f0fdfa;
            --color-sec-7: #ea580c;
            --color-bg-7: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-bg);
            color: var(--dark-slate);
            line-height: 1.8;
        }

        /* الهيدر الاحترافي مع أزرار التبديل */
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

        /* حاوية المحتوى */
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

        /* البلوكات والأقسام الملونة والمختلفة */
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

        /* ربط الألوان المتباينة بالأقسام السبعة */
        .group-1 { border-top: 6px solid var(--color-sec-1); background-color: var(--color-bg-1); }
        .group-2 { border-top: 6px solid var(--color-sec-2); background-color: var(--color-bg-2); }
        .group-3 { border-top: 6px solid var(--color-sec-3); background-color: var(--color-bg-3); }
        .group-4 { border-top: 6px solid var(--color-sec-4); background-color: var(--color-bg-4); }
        .group-5 { border-top: 6px solid var(--color-sec-5); background-color: var(--color-bg-5); }
        .group-6 { border-top: 6px solid var(--color-sec-6); background-color: var(--color-bg-6); }
        .group-7 { border-top: 6px solid var(--color-sec-7); background-color: var(--color-bg-7); }

        .section-block h3 {
            margin-top: 0;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .group-1 h3 { color: var(--color-sec-1); }
        .group-2 h3 { color: var(--color-sec-2); }
        .group-3 h3 { color: var(--color-sec-3); }
        .group-4 h3 { color: var(--color-sec-4); }
        .group-5 h3 { color: var(--color-sec-5); }
        .group-6 h3 { color: var(--color-sec-6); }
        .group-7 h3 { color: var(--color-sec-7); }

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

        /* أزرار العودة للموقع */
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

        /* الفوتر الأسود الاحترافي الموحد للهوية */
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

        /* كلاسات التحكم في الإخفاء والإظهار الفوري عبر الجافاسكريبت */
        .lang-content { display: none; }
        .lang-content.visible-content { display: block; }
    </style>
</head>
<body>

<header>
    <div id="header-ar" class="lang-content visible-content">
        <h1 class="header-title">سياسة الخصوصية وحماية سرية البيانات الرقمية</h1>
        <div class="header-subtitle">وثيقة الامتثال الأمني لمعالجة المعلومات - مركز اليلايس</div>
    </div>
    <div id="header-en" class="lang-content">
        <h1 class="header-title" style="font-family: 'Arial', sans-serif;">Privacy Policy & Data Protection Agreement</h1>
        <div class="header-subtitle" style="font-family: 'Arial', sans-serif;">Information Security Compliance Document - Al Elais Center</div>
    </div>
    
    <div class="lang-switcher">
        <button id="btn-ar" class="lang-toggle-btn active-lang" onclick="switchLanguage('ar')">العربية</button>
        <button id="btn-en" class="lang-toggle-btn" onclick="switchLanguage('en')">English</button>
    </div>
</header>

<div class="policy-container">

    <div id="content-ar" class="lang-content visible-content">
        
        <div class="intro-card">
            <h2>مقدمة عامة ونطاق الامتثال القانوني</h2>
            <p>مرحباً بكم في البوابة الإلكترونية المستقلة التابعة لـ <strong>مركز اليلايس لفحص وتسجيل المركبات ش.م.م</strong>. إننا نضع سرية معلوماتكم وحماية خصوصيتكم الرقمية في صدارة أولوياتنا التشغيلية والمهنية. توضح هذه الوثيقة القانونية المتكاملة والموسعة بشكل تفصيلي لا لبس فيه طبيعة البيانات الشخصية، الفنية، والمالية التي نجمعها، وكيفية معالجتها وحمايتها بكل أمان وصرامة التزاماً بالمرسوم بقانون اتحادي بشأن حماية البيانات الشخصية في دولة الإمارات العربية المتحدة.</p>
        </div>

        <div class="section-block group-1">
            <h3><i class="fas fa-id-card-alt"></i> 1. البيانات والمعلومات التي نجمعها</h3>
            <p>من أجل تنفيذ عمليات الاستعلام الفوري وتسهيل سداد المعاملات والمخالفات المرورية لحساب المستفيدين بصفتنا منصة وسيطة، نقوم بجمع واستقبال البيانات التالية التي تقدمها لنا بمحض إرادتك الحرة:</p>
            <ul class="policy-list">
                <li><strong>بيانات الهوية المرورية للمركبة:</strong> وتشمل رقم لوحة المركبة، فئة اللوحة، مصدر اللوحة (دبي، أبوظبي، إلخ)، الرمز المروري، رقم الملف المروري، ورقم رخصة القيادة.</li>
                <li><strong>بيانات الاتصال والتواصل الفوري:</strong> وتشمل الاسم الكامل، رقم الهاتف المتحرك الصالح للاستخدام، وعنوان البريد الإلكتروني النشط لضمان وصول التنبيهات والفواتير الرقمية بنجاح.</li>
                <li><strong>بيانات السجلات الفنية التلقائية:</strong> معلومات الخادم القياسية مثل عنوان الـ IP الخاص بك، ونوع المتصفح المتصل، وتوقيت الزيارة لغايات الحماية التشغيلية.</li>
            </ul>
        </div>

        <div class="section-block group-2">
            <h3><i class="fas fa-lock"></i> 2. حماية وتأمين تفاصيل المعاملات المالية</h3>
            <p>نود إعلان التزامنا المطلق بأننا **لا نقوم إطلاقاً بتخزين أو استضافة أو الاحتفاظ بأي تفاصيل تابعة لبطاقات الدفع الائتمانية** أو الأرقام السرية الخاصة بحساباتكم على خوادم الموقع. كافة المعاملات والمدفوعات يتم توجيهها بالكامل ومعالجتها عبر بوابات دفع إلكترونية وسيطة ومستقلة، مشفرة بالكامل ومعتمدة بموجب المعايير العالمية لأمن صناعة بطاقات الدفع (PCI-DSS)، لضمان سلامة أموالك وسرية بياناتك الحساسة ضد أي اختراق.</p>
        </div>

        <div class="section-block group-3">
            <h3><i class="fas fa-chart-line"></i> 3. الغرض من معالجة واستخدام البيانات</h3>
            <p>ينحصر استخدام البيانات التي يتم جمعها في أغراض شرعية ومحددة تهدف لخدمة المعاملة الخاصة بك وتطوير المنصة، وتتلخص في النقاط القانونية التالية:</p>
            <p>أولاً، مطابقة بيانات المركبة بشكل صحيح مع سجلات المخالفات لتسهيل الدفع والتخليص المباشر. ثانياً، توثيق الفواتير الرقمية وإرسال الإشعارات والتحقق من هوية صاحب الطلب. ثالثاً، تدقيق العمليات والوقاية من عمليات الاحتيال الإلكتروني أو الدخول غير المصرح به. رابعاً، العمل على رفع كفاءة الاستجابة التقنية وحل مشكلات الخوادم عبر تحليل البيانات العامة غير الشخصية.</p>
        </div>

        <div class="section-block group-4">
            <h3><i class="fas fa-handshake"></i> 4. مشاركة البيانات مع الأطراف الخارجية</h3>
            <p>نحن نلتزم التزاماً أخلاقياً وقانونياً صارماً بمنع بيع، تداول، أو تأجير معلوماتك الشخصية لأي جهات تجارية أو شبكات إعلانية خارجية. لا يتم مشاركة البيانات إلا في أضيق الحدود والمسارات الفنية اللازمة، وهي: مع مزودي الحلول التقنية الموثوقين وبوابات السداد لغرض إتمام المعاملة المالية فقط، أو مع الهيئات القضائية والأمنية الرسمية في حال وجود إلزام قانوني قاطع بموجب تشريعات الدولة لحماية الأرواح والأموال العامة ومكافحة الجرائم الإلكترونية.</p>
        </div>

        <div class="section-block group-5">
            <h3><i class="fas fa-cookie"></i> 5. ملفات تعريف الارتباط والتقنيات الذكية</h3>
            <p>تستخدم منصتنا ملفات تعريف الارتباط (Cookies) وحزم برمجية صغيرة ومؤمنة يتم تخزينها على متصفحك. تساعدنا هذه الملفات في توفير تجربة تصفح تفاعلية بالغة السرعة، وتذكر لغتك المفضلة وإعداداتك، وقياس نسب الزيارات العامة بشكل مجهول لتطوير واجهات المستخدم. يمكنك تعطيل هذه الملفات بالكامل عبر إعدادات متصفحك، ولكن قد يتسبب ذلك في توقف بعض المؤثرات البصرية أو بطء استجابة النماذج الإلكترونية.</p>
        </div>

        <div class="section-block group-6">
            <h3><i class="fas fa-user-shield"></i> 6. الحقوق القانونية للمستخدم والتحكم</h3>
            <p>لكل زائر ومستخدم لمنصتنا الحق الكامل في التحكم بمعلوماته المودعة لدينا، ويشمل ذلك: حق الوصول والاطلاع على البيانات والتحقق منها، حق طلب تعديل أو تصحيح أي بيانات خاطئة فوراً، وحق طلب مسح وإزالة بيانات الاتصال الخاصة بك من سجلات النظام المؤقتة بمجرد انتهاء فترات المراجعة الفنية، وبما لا يتعارض مع القوانين والأنظمة المالية المنظمة للسجلات التجارية التي تفرض الاحتفاظ بالفواتير لمدد معينة لغايات التدقيق الضريبي.</p>
        </div>

        <div class="section-block group-7">
            <h3><i class="fas fa-history"></i> 7. التعديلات الجوهرية على وثيقة الخصوصية</h3>
            <p>يمتلك <strong>مركز اليلايس لفحص وتسجيل المركبات</strong> الأهلية الكاملة والحق المطلق في تعديل أو تحديث أو استبدال هذه الوثيقة في أي وقت تقتضيه دواعي التطوير الفني أو التغييرات التشريعية. عند إجراء أي تعديل، سنقوم فوراً بنشر النسخة المحدثة وتعديل تاريخ النشر في الأسفل، ويعد استمرارك في استخدام المنصة بعد التحديث إقراراً صريحاً وموافقة كاملة منك على البنود المعدلة، لذا نوصي بمراجعتها بانتظام.</p>
        </div>

        <div class="bottom-navigation">
            <a href="index_ar.php" class="nav-btn"><i class="fas fa-arrow-right"></i> العودة للموقع العربي الرئيسي</a>
        </div>

    </div>

    <div id="content-en" class="lang-content" style="direction: ltr; text-align: left;">
        
        <div class="intro-card">
            <h2>General Introduction & Scope of Legal Compliance</h2>
            <p>Welcome to the independent digital portal operated by <strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong>. Protecting your personal data and digital privacy is the absolute cornerstone of our professional standards. This comprehensive document outlines in explicit detail the types of personal, technical, and financial information we gather, and the processing methods we employ to protect it, fully aligning with the Federal Decree-Law on Personal Data Protection in the UAE.</p>
        </div>

        <div class="section-block group-1">
            <h3><i class="fas fa-id-card-alt"></i> 1. Information and Data We Collect</h3>
            <p>To deliver immediate inquiry functions and expedite the processing of traffic fine clearing services on behalf of users as an intermediary handler, we collect and process the following information provided willingly by you:</p>
            <ul class="policy-list">
                <li><strong>Vehicle & Traffic Identification Data:</strong> Including vehicle plate number, plate code, plate source (Dubai, Abu Dhabi, etc.), traffic code, traffic file number, and driving license details.</li>
                <li><strong>Immediate Contact Details:</strong> Including full name, active mobile number, and valid email address to ensure accurate transmission of confirmation receipts and digital invoices.</li>
                <li><strong>Automated Technical Logging:</strong> Standard server parameters such as your IP address, connected browser type, and time stamps recorded strictly for operational defense.</li>
            </ul>
        </div>

        <div class="section-block group-2">
            <h3><i class="fas fa-lock"></i> 2. Protection of Financial Transaction Details</h3>
            <p>We declare with utmost emphasis that **we never store, host, or retain any credit card credentials**, CVV numbers, or banking details on our website servers. All online payment operations are managed directly through independent secure third-party payment gateways certified under the Payment Card Industry Data Security Standard (PCI-DSS), protecting your capital and sensitive transactions from any vulnerabilities.</p>
        </div>

        <div class="section-block group-3">
            <h3><i class="fas fa-chart-line"></i> 3. Purposes of Data Processing & Usage</h3>
            <p>The usage of collected information is strictly confined to legal and specific functions aimed at facilitating your requests and maintaining core systems, wrapped into the following statutory nodes:</p>
            <p>First, cross-referencing vehicle information accurately to ease quick settlement and processing operations. Second, structuring official digital invoices, dispatching transactional receipts, and validating identification. Third, auditing payments to prevent malicious cyber fraud or unauthorized entries. Fourth, optimization of technical response performance and fixing system crashes by examining generic non-personal log datasets.</p>
        </div>

        <div class="section-block group-4">
            <h3><i class="fas fa-handshake"></i> 4. Data Sharing with External Entities</h3>
            <p>We enforce a strict ethical and statutory ban on the sale, exchange, or renting of your personal details to advertising networks or marketing merchants. Information is shared only through required technical channels: with certified technology partners and clearance networks solely to authorize financial settlement, or with administrative judicial or enforcement bodies if compelled by clear statutory mandates in accordance with UAE state law to secure public assets and stop financial cyber-crimes.</p>
        </div>

        <div class="section-block group-5">
            <h3><i class="fas fa-cookie"></i> 5. Cookies & Advanced Trackers</h3>
            <p>Our website utilizes cookies and secure micro-tracking data packages stored right on your local browser. These allow us to provide an accelerated interactive interface, retain language choices, recall structural fields, and safely analyze aggregate visitor flow patterns. You are entitled to block cookies through browser preferences, though doing so might disable certain responsive graphical displays or lag specific terminal scripts.</p>
        </div>

        <div class="section-block group-6">
            <h3><i class="fas fa-user-shield"></i> 6. Legal User Rights & Personal Control</h3>
            <p>Every visitor utilizing our platform holds complete entitlement to control their submitted records, including: the right to view and verify gathered variables, the right to request adjustments or corrections to erroneous entries, and the right to request deletion of contact parameters from our system once technical audits clear, provided it does not conflict with state fiscal laws dictating receipt archiving durations for commercial audit tracks.</p>
        </div>

        <div class="section-block group-7">
            <h3><i class="fas fa-history"></i> 7. Amendments to the Privacy Instrument</h3>
            <p><strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong> reserves full authority to modify, upgrade, or alter this operational document at any interval required by structural shifts or regulatory mandates. Updated formats will be posted with revised effective dates below. Your continued usage of this layout after post dates indicates full binding acceptance of adjusted terms. Reviewing this script periodically is advised.</p>
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
    // جافا سكريبت ذكي للتبديل الفوري والسلس بين اللغات في نفس الصفحة
    function switchLanguage(lang) {
        // عناصر المحتوى الرئيسي
        const contentAr = document.getElementById('content-ar');
        const contentEn = document.getElementById('content-en');
        
        // عناصر الهيدر
        const headerAr = document.getElementById('header-ar');
        const headerEn = document.getElementById('header-en');
        
        // عناصر حقوق الفوتر
        const footerAr = document.getElementById('footer-rights-ar');
        const footerEn = document.getElementById('footer-rights-en');
        
        // أزرار التحكم
        const btnAr = document.getElementById('btn-ar');
        const btnEn = document.getElementById('btn-en');
        
        // عنصر الـ HTML للتحكم في اتجاه الصفحة RTL / LTR
        const htmlTag = document.getElementById('policyHtml');

        if (lang === 'ar') {
            // إظهار العربي وإخفاء الإنجليزي
            contentAr.classList.add('visible-content');
            contentEn.classList.remove('visible-content');
            headerAr.classList.add('visible-content');
            headerEn.classList.remove('visible-content');
            footerAr.style.display = 'block';
            footerEn.style.display = 'none';
            
            // تغيير حالة الأزرار
            btnAr.classList.add('active-lang');
            btnEn.classList.remove('active-lang');
            
            // تحويل اتجاه الصفحة لليمين
            htmlTag.setAttribute('dir', 'rtl');
            htmlTag.setAttribute('lang', 'ar');
        } else {
            // إظهار الإنجليزي وإخفاء العربي
            contentEn.classList.add('visible-content');
            contentAr.classList.remove('visible-content');
            headerEn.classList.add('visible-content');
            headerAr.classList.remove('visible-content');
            footerEn.style.display = 'block';
            footerAr.style.display = 'none';
            
            // تغيير حالة الأزرار
            btnEn.classList.add('active-lang');
            btnAr.classList.remove('active-lang');
            
            // تحويل اتجاه الصفحة لليسار
            htmlTag.setAttribute('dir', 'ltr');
            htmlTag.setAttribute('lang', 'en');
        }
        
        // تمرير الشاشة لأعلى الصفحة بسلاسة عند التحويل
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

</body>
</html>
