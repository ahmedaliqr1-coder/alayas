<!DOCTYPE html>
<html lang="ar" dir="rtl" id="refundHtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سياسة إلغاء المعاملات والاسترداد المالي - Refund & Cancellation Policy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #007a53;
            --secondary-green: #00593c;
            --dark-slate: #1f2937;
            --light-bg: #f4f6f8;
            --border-color: #e5e7eb;
            --card-white: #ffffff;
            
            /* تدرج الألوان المتباينة للأقسام السبعة لسياسة الاسترداد والإلغاء */
            --color-ref-1: #0d9488; /* تركواز */
            --color-rbg-1: #ffffff;
            --color-ref-2: #2563eb; /* أزرق ناصع */
            --color-rbg-2: #f8fafc;
            --color-ref-3: #b45309; /* برتقالي ذهبي */
            --color-rbg-3: #ffffff;
            --color-ref-4: #db2777; /* وردي غامق */
            --color-rbg-4: #fdf2f8;
            --color-ref-5: #7c3aed; /* بنفسجي ملكي */
            --color-rbg-5: #ffffff;
            --color-ref-6: #059669; /* أخضر زمردي */
            --color-rbg-6: #f0fdf4;
            --color-ref-7: #4b5563; /* رمادي داكن */
            --color-rbg-7: #ffffff;
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
        .ref-group-1 { border-top: 6px solid var(--color-ref-1); background-color: var(--color-rbg-1); }
        .ref-group-2 { border-top: 6px solid var(--color-ref-2); background-color: var(--color-rbg-2); }
        .ref-group-3 { border-top: 6px solid var(--color-ref-3); background-color: var(--color-rbg-3); }
        .ref-group-4 { border-top: 6px solid var(--color-ref-4); background-color: var(--color-rbg-4); }
        .ref-group-5 { border-top: 6px solid var(--color-ref-5); background-color: var(--color-rbg-5); }
        .ref-group-6 { border-top: 6px solid var(--color-ref-6); background-color: var(--color-rbg-6); }
        .ref-group-7 { border-top: 6px solid var(--color-ref-7); background-color: var(--color-rbg-7); }

        .section-block h3 {
            margin-top: 0;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .ref-group-1 h3 { color: var(--color-ref-1); }
        .ref-group-2 h3 { color: var(--color-ref-2); }
        .ref-group-3 h3 { color: var(--color-ref-3); }
        .ref-group-4 h3 { color: var(--color-ref-4); }
        .ref-group-5 h3 { color: var(--color-ref-5); }
        .ref-group-6 h3 { color: var(--color-ref-6); }
        .ref-group-7 h3 { color: var(--color-ref-7); }

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
        <h1 class="header-title">سياسة إلغاء المعاملات واسترداد الرسوم</h1>
        <div class="header-subtitle">القواعد المالية المنظمة للتسويات والطلبات - مركز اليلايس</div>
    </div>
    <div id="header-en" class="lang-content">
        <h1 class="header-title" style="font-family: 'Arial', sans-serif;">Cancellation & Refund Policy</h1>
        <div class="header-subtitle" style="font-family: 'Arial', sans-serif;">Financial Terms for Ledger Settlements - Al Elais Center</div>
    </div>
    
    <div class="lang-switcher">
        <button id="btn-ar" class="lang-toggle-btn active-lang" onclick="switchLanguage('ar')">العربية</button>
        <button id="btn-en" class="lang-toggle-btn" onclick="switchLanguage('en')">English</button>
    </div>
</header>

<div class="policy-container">

    <div id="content-ar" class="lang-content visible-content">
        
        <div class="intro-card">
            <h2>مقدمة وضوابط مالية عامّة</h2>
            <p>توضح هذه الوثيقة المالية الرسمية كافة الشروط والآليات المتعلقة بعمليات إلغاء طلبات دفع المخالفات المرورية واسترداد المبالغ المالية المجمعة عبر البوابة الرقمية التابعة لـ <strong>مركز اليلايس لفحص وتسجيل المركبات ش.م.م</strong>. تهدف هذه السياسة إلى ضمان الشفافية المطلقة وحفظ حقوق المتعاملين بما يتوافق مع القواعد التنظيمية والمالية للتجارة الإلكترونية والتحصيل الرقمي المعمول بها.</p>
        </div>

        <div class="section-block ref-group-1">
            <h3><i class="fas fa-hand-holding-usd"></i> 1. الطبيعة الفورية والنهائية لعمليات السداد</h3>
            <p>يجب على المستخدم أن يعلم ويقر بأن كافة المعاملات المالية الموجهة لسداد المخالفات المرورية والغرامات هي **معاملات فورية ونهائية** بمجرد اعتمادها من بوابة الدفع. نظراً لأن المنصة تعمل كوسيط تقني يقوم بتحويل المبالغ مباشرة ومزامنتها آلياً لتصفية القيود المرورية لحساب العميل، فإنه لا يمكن إلغاء المعاملة أو إيقافها بمجرد صدور رقم الموافقة البنكية، وتعتبر المخالفة مدفوعة بالكامل وغير قابلة للتراجع.</p>
        </div>

        <div class="section-block ref-group-2">
            <h3><i class="fas fa-times-circle"></i> 2. الحالات الاستثنائية المؤهلة لطلب الاسترداد</h3>
            <p>يتم النظر في طلبات الاسترداد المالي وقبولها حصرياً في حالات الخلل التقني المؤثقة، وهي كالتعالي:</p>
            <ul class="policy-list">
                <li><strong>الخصم المزدوج:</strong> في حال تم خصم قيمة المخالفة من بطاقتك الائتمانية مرتين لنفس المعاملة بسبب خطأ أو بطء استجابة الخادم.</li>
                <li><strong>فشل المزامنة التقنية:</strong> إذا تم خصم المبلغ بنجاح من حسابك البنكي ولكن النظام فشل في معالجة المعاملة ولم يتم تصفية المخالفة المرورية أو تحديثها بعد مرور 48 ساعة عمل.</li>
            </ul>
        </div>

        <div class="section-block ref-group-3">
            <h3><i class="fas fa-percentage"></i> 3. الرسوم الإدارية وأجور بوابات الدفع</h3>
            <p>في الحالات الاستثنائية التي يتم فيها الموافقة على إعادة الأموال إلى العميل (مثل الخصم المزدوج)، نود التنويه بأن **رسوم الخدمة الإدارية الخاصة بالمنصة وأجور بوابات الدفع الإلكترونية والبطاقات الائتمانية قد تكون غير قابلة للاسترداد**، حيث يتم اقتطاعها مباشرة من قبل الشركات المزودة لحلول السداد والشبكات البنكية لقاء تشغيل المعاملة، ويتم إعادة أصل المبلغ المتبقي إلى حساب المتعامل.</p>
        </div>

        <div class="section-block ref-group-4">
            <h3><i class="fas fa-hourglass-half"></i> 4. المدة الزمنية وآلية إرجاع الأموال</h3>
            <p>عند مراجعة طلب الاسترداد وقبوله رسمياً من قبل الإدارة المالية لمركز اليلايس، يتم إرسال أمر الاسترداد إلى البنك الوسيط فوراً. تستغرق عملية ظهور الأموال في حسابك البنكي أو بطاقتك الائتمانية مدة زمنية تتراوح بين 7 إلى 14 يوم عمل، وذلك بناءً على السياسات الداخلية والإجراءات المتبعة لدى البنك المصدر لبطاقتك، ولا تملك المنصة أي سلطة لتسريع هذه المدة البنكية.</p>
        </div>

        <div class="section-block ref-group-5">
            <h3><i class="fas fa-user-edit"></i> 5. مسؤولية الأخطاء الشخصية في المدخلات</h3>
            <p>تُخلي المنصة مسؤوليتها المالية والتشغيلية تماماً في حال قام العميل بسداد مخالفة مرورية تخص مركبة أخرى بالخطأ نتيجة كتابته لرقم لوحة أو رمز مروري خاطئ في حقول الإدخال. بمجرد إتمام الدفع، يتم تصفية الغرامة لصالح المركبة المسجلة في الطلب آلياً ولا يمكن للمنصة استرجاع تلك المبالغ من الأنظمة المرورية، ويقع عبء المراجعة والتدقيق قبل الدفع على العميل وحده.</p>
        </div>

        <div class="section-block ref-group-6">
            <h3><i class="fas fa-shipping-fast"></i> 6. طبيعة الخدمة الرقمية وبند انتفاء الشحن الفيزيائي</h3>
            <p>يقر المستخدم بأن الخدمات المقدمة عبر هذه المنصة هي **خدمات رقمية وإلكترونية بحتة** (Inquiry & Digital Clearing Services) تتمثل في الاستعلام الفوري وسداد الغرامات وتوثيق المعاملات عبر الإنترنت. بناءً على ذلك، لا توجد أي عمليات شحن فيزيائي، أو توصيل لبضائع ملموسة، أو طرود بريدية تتطلب بوالص شحن أو تتبع، وتنتهي الخدمة فور صدور الفاتورة الرقمية وإشعار السداد بنجاح.</p>
        </div>

        <div class="section-block ref-group-7">
            <h3><i class="fas fa-file-invoice-dollar"></i> 7. قنوات تقديم طلبات الدعم المالي</h3>
            <p>لتقديم طلب استرداد مالي في حال حدوث خصم مزدوج، يجب على المتعامل التواصل مع قسم الدعم المالي للمنصة في غضون 48 ساعة من تاريخ المعاملة. يتطلب تقديم الطلب إرسال بريد إلكتروني يحتوي على الاسم الكامل، رقم الهاتف، صورة واضحة من كشف الحساب البنكي يوضح عملية الخصم، ورقم المعاملة المعروض. سيقوم الفريق الفني بالتدقيق في السجلات والرد عليك خلال 3 أيام عمل.</p>
        </div>

        <div class="bottom-navigation">
            <a href="index_ar.php" class="nav-btn"><i class="fas fa-arrow-right"></i> العودة للموقع العربي الرئيسي</a>
        </div>

    </div>

    <div id="content-en" class="lang-content" style="direction: ltr; text-align: left;">
        
        <div class="intro-card">
            <h2>Introduction & General Financial Provisions</h2>
            <p>This official fiscal instrument outlines all guidelines and structures regarding order cancellations and refund workflows for traffic fine clearings processed via the digital layout of <strong>AL ELAIS VEHICLE TESTING & REGISTRATION CENTRE L.L.C</strong>. This policy ensures full transparency and guards user statutory privileges aligned with national electronic commerce and digital collection standards.</p>
        </div>

        <div class="section-block ref-group-1">
            <h3><i class="fas fa-hand-holding-usd"></i> 1. Instant & Final Status of Fine Settlements</h3>
            <p>The user acknowledges and accepts that all online transfers executed to settle traffic fine balances or statutory penalties are **instant and definitive** once validated by the payment terminal. Because our interface works as an automated technical handler moving funds immediately to clear active traffic records, cancellations or payment freezes are impossible once authorization clears.</p>
        </div>

        <div class="section-block ref-group-2">
            <h3><i class="fas fa-times-circle"></i> 2. Exceptional Use Cases Eligible for Refunds</h3>
            <p>Refund submissions are processed and evaluated exclusively under documented technical discrepancies, confined to the following events:</p>
            <ul class="policy-list">
                <li><strong>Double Deduction:</strong> If the exact balance of a single transaction is deducted twice from your credit credential due to a momentary script lag or server communication crash.</li>
                <li><strong>Synchronization Failure:</strong> If funds are successfully drawn from your banking source, but our internal system logs an execution crash, failing to update your traffic balance after 48 business hours.</li>
            </ul>
        </div>

        <div class="section-block ref-group-3">
            <h3><i class="fas fa-percentage"></i> 3. Administrative Handling Fees & Processing Cuts</h3>
            <p>In exceptional scenarios where a reversal order is officially granted (such as verified double deductions), please note that **the gateway processing commissions and platform administrative service tariffs may be non-refundable**. These margins are absorbed by clearing providers and merchant card networks during execution, and the remaining net balance will be reversed.</p>
        </div>

        <div class="section-block ref-group-4">
            <h3><i class="fas fa-hourglass-half"></i> 4. Processing Windows & Fund Reversal Windows</h3>
            <p>Once a reimbursement ticket is approved by the finance board of Al Elais Center, a reversal mandate is forwarded to our merchant processor. Reflecting these funds back to your original bank ledger or credit card account typically takes 7 to 14 business days. This timeframe relies on the transactional policies of your local banking institution, and the platform cannot expedite this window.</p>
        </div>

        <div class="section-block ref-group-5">
            <h3><i class="fas fa-user-edit"></i> 5. User Typo Liabilities & Incorrect Field Inputs</h3>
            <p>The platform disclaims all financial and operational liability if a user processes a settlement against an unassigned vehicle due to typing erroneous plate codes or invalid traffic file metrics. Once payments clear, fines are reconciled immediately in favour of the entered vehicle profile, making reversals impossible. Manual data verification remains the sole task of the consumer.</p>
        </div>

        <div class="section-block ref-group-6">
            <h3><i class="fas fa-shipping-fast"></i> 6. Pure Digital Service Nature & Non-Shipping Clause</h3>
            <p>The user acknowledges that all options provided here constitute **purely virtual digital services** consisting of immediate lookup lookups and automated fine reconciliations. Consequently, there are no physical fulfillment processes, physical delivery handlings, or parcel packaging elements requiring logistics or tracking markers. Service execution wraps up once your digital receipt generates.</p>
        </div>

        <div class="section-block ref-group-7">
            <h3><i class="fas fa-file-invoice-dollar"></i> 7. Verification Inquiries & Financial Support Channels</h3>
            <p>To file a financial review ticket regarding duplicate charges, users must contact our billing desk within 48 hours of execution. Claims must be submitted via email containing your full legal name, telephone contact, a clear extract of your banking ledger verifying the double charges, and the transaction hash. Our auditing unit will check logs and respond within 3 business days.</p>
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
        const htmlTag = document.getElementById('refundHtml');

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
