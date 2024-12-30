<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificat d'Aptitude Physique</title>
    <style>
        @page { 
            size: A4;
            margin: 0.3in;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.6;
            font-size: 12pt;
            margin: 0;
            padding: 0;
            -webkit-print-color-adjust: exact;
        }
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            margin-bottom: 20px;
        }
        .header-section .info {
            text-align: left;
            font-size: 0.9rem;
            line-height: 1.4;
        }
        .header-section .info span {
            display: block;
        }
        .header-section img {
            max-width: 80px;
            height: auto;
        }
        hr {
            margin: 10px 0;
            border: none;
            border-top: 2px solid #ddd;
            margin-bottom: 100px;

        }
        .title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-decoration: underline;
        }
        .content {
            margin: 0 10px 30px;
            font-size: 1rem;
            line-height: 1.6;
            text-align: justify;
        }
        .content p {
            margin-bottom: 15px;
        }
        .signature {
            text-align: right;
            margin-top: 550px;
            font-size: 1rem;
        }
    </style>
</head>
<body onload="window.print()">
    <div>
        <!-- Header Section -->
        <div class="header-section">
            <div class="info">
                <span><strong><?php echo e($docteur->name, false); ?></strong></span>
                <span>Docteur en Médecine</span>
                <span><?php echo e($docteur->mobile_number, false); ?></span>
                <span><?php echo e($docteur->email, false); ?></span>
            </div>
            <div class="logo">
                <img src="/cdn/logo.png" alt="Logo">
            </div>
            <div class="info" style="text-align: right;">
                <span><strong><?php echo e($entite->name, false); ?></strong></span>
                <span><?php echo e($entite->adress, false); ?>, <?php echo e($entite->city, false); ?></span>
                <span>0676616626</span>
            </div>
        </div>

        <hr>

        <!-- Title -->
        <div class="title">
            CERTIFICAT D'APTITUDE PHYSIQUE
        </div>

        <!-- Content Section -->
        <div class="content">
            <p>
                Je soussigné, <b><?php echo e($docteur->name, false); ?></b>, docteur en médecine, certifie avoir examiné ce jour,
                <?php if($patient->sex=='M'): ?> le <?php else: ?> la <?php endif; ?> dénommé<?php if($patient->sex!='M'): ?>e <?php endif; ?> 
                <b><?php echo e($patient->surname, false); ?> <?php echo e($patient->name, false); ?></b>.
            </p>
            <p>
                Et déclare, d’après son examen clinique et des examens complémentaires, qu’<?php if($patient->sex=='M'): ?>il <?php else: ?> elle <?php endif; ?> est <b>physiquement apte</b> pour l’emploi considéré.
            </p>
            <p>
                En foi de quoi, le présent certificat est délivré à l’intéressé<?php if($patient->sex!='M'): ?>e <?php endif; ?> pour servir et valoir ce que de droit.
            </p>
        </div>

        <!-- Signature Section -->
        <div class="signature">
            <p>
                Fait à <?php echo e($entite->city, false); ?>, le : <?php echo e(date('d/m/Y'), false); ?>

            </p>
            <p>
                Signature : _______________________
            </p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\user\Documents\CLICK DOC WEB APP\backend-code\backend-final\resources\views/certificat-aptitude.blade.php ENDPATH**/ ?>