<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Analyses</title>
    <style>@page { margin-top:0.2in; margin-bottom: 1in;margin-right:0.2in;margin-left: 0.2in;  size: A5 }</style>
</head>
<body onload="window.print()">
    <div>
        <div class="grid grid-cols-3">
            <div class="text-center  text-xl">
                <span class="font-bold">  <?php echo e($docteur->name, false); ?> </span> <br>
                Médecin Dermatologue <br>
                <?php echo e($docteur->mobile_number, false); ?> <br>
                <?php echo e($docteur->email, false); ?>

            </div>
            <div class="text-center">
                <img src="/cdn/logo.png" alt="" srcset="" class="mx-auto">
            </div>
            <div class="text-center  text-xl">
                <span class="font-bold">  <?php echo e($entite->name, false); ?> </span> <br>
                <?php echo e($entite->adress, false); ?> , <?php echo e($entite->city, false); ?> <br>
                0676616626 
            </div>
        </div>
        <hr class="m-4 border-2">
        <div class="m-8">
            <div class="text-center">
                <div class="font-bold" style="font-size: 2em;">
                    Analyses
                </div>
                <div class="mt-4 text-xl font-bold" style="font-size: 1.5em;">
                    Patient : <?php echo e($patient->surname, false); ?> <?php echo e($patient->name, false); ?> 
                </div>
            </div>
        </div>
        <div class="m-8 h-screen">
            <hr class="border border-3">
            <div class="container mx-auto text-center" style="font-size: 1.5em;" >
                <?php $__currentLoopData = $analyses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php echo e($item->libelle, false); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH /Users/amine/Desktop/clickdoc/backend/resources/views/analyses.blade.php ENDPATH**/ ?>