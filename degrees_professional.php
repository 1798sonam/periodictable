<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Professional / Diploma / Certificate Degrees</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" />

</head>

<body>
<?php include 'header.php'; ?>

<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Professional / Diploma / Certificate Degrees</h2>

    <div class="row g-3">
        <?php
        // Professional / Diploma / Certificate degrees array
        $professionalDegrees = [
            "CA - Chartered Accountant",
    "CS - Company Secretary",
    "CMA - Cost & Management Accountant",
    "CFA - Chartered Financial Analyst (Professional Cert.)",
    "CISA - Certified Information Systems Auditor (Cert.)",
    "PMP - Project Management Professional (Cert.)",
    "Cisco CCNA - Cisco Certified Network Associate (Cert.)",
    "RHCE - Red Hat Certified Engineer (Cert.)",

    // Diploma and PG Diploma
    "Diploma - Basic Diploma (Various fields)",
    "DCA - Diploma in Computer Applications",
    "PG Diploma in Management (PGDM)",
    "PG Diploma in Business Analytics (PGDBA)",
    "PG Diploma in Marketing Management",
    "PG Diploma in Digital Marketing",
    "PG Diploma in Human Resource Management",

    // Associate Degrees
    "AA - Associate in Arts",
    "AS - Associate in Science",
    "AAS - Associate in Applied Science",

    // Vocational & Short-term Certificates
    "Certificate in Digital Marketing",
    "Certificate in Photography",
    "Certificate in General Duty Assistant",
    "Certificate in Food Safety",
    "Certificate in Communication Skills",
    "Certificate in Professional Counseling",

    // Pharmacy / Allied Professional
    "Pharm.D - Doctor of Pharmacy",

    // Integrated and Combined Degrees (often dual degrees) :contentReference[oaicite:1]{index=1}
    "B.A. + LLB - Integrated BA + Bachelor of Laws",
    "B.Sc. + MBA - Integrated Bachelor and Master",
    "B.Tech + M.Tech - Integrated Technology Degrees",
    "BBA + LLB - Integrated Business and Law",

    // Research / Advanced Professional Doctorates
    "DSc - Doctor of Science",
    " DLitt - Doctor of Literature",
    " DEng - Doctor of Engineering", 
    " D.Mus - Doctor of Musical Arts",
    " DHA - Doctor of Health Administration",
    " AuD - Doctor of Audiology"

        ];

        

        // Loop through array to generate buttons
        foreach($professionalDegrees as $degree) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6">';
            echo '<a href="#" class="branch-btn">'.$degree.'</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>

</body>
</html>
