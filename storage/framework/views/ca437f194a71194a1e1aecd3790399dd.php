<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CERTIFICAT</title>
    <style>@page { margin-top:0.2in; margin-bottom: 1in;margin-right:0.2in;margin-left: 0.2in;  size: A5 }</style>
</head>
<body>
    <div class="py-8">
        <div class="m-8">
            <div class="text-center">
                <div class="font-bold uppercase text-red-500" style="font-size: 1.8em;">
					CERTIFICAT D'APTITUDE PHYSIQUE
                </div>
            </div>
        </div>
        <div class="m-8 h-screen py-4">
            <div class="container mx-auto m-8" >
				<p style="font-size: 1.8em;" class="m-4 justify">
					Je soussigné , <b> <?php echo e($docteur->name, false); ?></b> , docteur en médecine , certifie avoir éxaminé ce jour , <?php if($patient->sex=='M'): ?>le <?php else: ?> la <?php endif; ?> dénommé<?php if($patient->sex!='M'): ?>e <?php endif; ?> <b> <?php echo e($patient->surname, false); ?> <?php echo e($patient->name, false); ?>  </b>
				</p>
				<p style="font-size: 1.8em;" class="m-4 justify">
					Et déclare d’après son examen clinique et des examens complémentaires qu’<?php if($patient->sex=='M'): ?>il <?php else: ?> elle <?php endif; ?> est <b> physiquement apte </b> pour l’emploi considéré.
				</p>
				<p style="font-size: 1.8em;" class="m-4 justify">
					En foi de quoi le présent certificat est délivré à l’intéressé<?php if($patient->sex!='M'): ?>e <?php endif; ?> pour servir et valoir ce que de droit.
				</p>
				<br>				<br>				<br>				<br>
				<p style="font-size: 1.5em;" class="m-4 text-right">
					Fait à <?php echo e($entite->city, false); ?> , le : <?php echo e(date('d/m/Y'), false); ?><br> Signé : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH /var/www/vhosts/clickdoc.ma/clickdoc-final/backend-final/resources/views/certificat-aptitude.blade.php ENDPATH**/ ?>