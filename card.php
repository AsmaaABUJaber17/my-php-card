<?php
// مصفوفة تحتوي على بيانات الطلاب
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'moham@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '45001',
        'stdName' => 'Fatima Ahmed',
        'stdEmail' => 'fatima@gmail.com',
        'stdGAP' => 91.2
    ]
];

// حساب إجمالي عدد الطلاب
$totalStudents = count($students);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الطلاب</title>
    <style>
        /* CSS وتنسيقات الصفحة كَود  */
        body {
            font-family: 'Comic Sans MS, Tahoma, Geneva, Verdana, sans-serif';
            background: #f0f4f8; /* لون خلفية أفتح */
            direction: rtl; /* اتجاه الكتابة من اليمين لليسار */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            background-color: #38a169; /* لون أخضر عصري */
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .student-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            justify-content: center;
        }
        .student-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: right;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-right: 5px solid #38a169; /* خط جانبي بلون مميز */
        }
        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .student-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #2d3748;
            font-size: 1.5em;
        }
        .student-card p {
            margin: 8px 0;
            color: #4a5568;
            font-size: 1em;
            display: flex;
            align-items: center;
        }
        .student-card p b {
            margin-left: 5px;
            color: #1a202c;
            min-width: 100px; /* لضمان محاذاة البيانات */
            text-align: left;
        }
        .student-card a {
            color: #38a169;
            text-decoration: none;
            font-weight: bold;
        }
        .total-count {
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 40px;
            color: #2d3748;
        }
        /* أيقونات بسيطة */
        .icon {
            margin-left: 8px;
            color: #38a169;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>قائمة الطلاب</h2>
    
    <div class="student-grid">
        <!--- // حلقة foreach تمر على كل طالب في المصفوفة-->
        <?php foreach ($students as $student): ?>
        <div class="student-card">
                    <!---عرض اسم الطالب-->
            <h3><?= htmlspecialchars($student['stdName']) ?></h3>
                      <!--- // عرض رقم الطالب-->
            <p><span class="icon">👤</span><b>الرقم:</b> <?= htmlspecialchars($student['stdNo']) ?></p>
                        <!--- // عرض إيميل الطالب كرابط -->

            <p><span class="icon">📧</span><b>الإيميل:</b> <a href="mailto:<?= htmlspecialchars($student['stdEmail']) ?>"><?= htmlspecialchars($student['stdEmail']) ?></a></p>
                        <!--// عرض معدل الطالب  -->

            <p><span class="icon">🎓</span><b>المعدل:</b> <?= htmlspecialchars($student['stdGAP']) ?></p>
        </div>
        <?php endforeach;// نهاية الحلقة  ?>
    </div>
        <!-- عرض العدد الكلي للطلاب -->
    <div class="total-count">
        إجمالي عدد الطلاب: <?= $totalStudents ?>
    </div>
</div>

</body>
</html>
