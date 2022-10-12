<?php if($paginator->hasPages()): ?>
<div class="pagination py-50">
    <div class="pagination-wrapper">
        <?php if(!$paginator->onFirstPage()): ?>
        <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="pagination-wrapper--prev">
            <ion-icon name="arrow-back-circle"></ion-icon>Sebelumnya
        </a>
        <?php endif; ?>
        <?php if($paginator->hasMorePages()): ?>
        <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="pagination-wrapper--next">Selanjutnya<ion-icon name="arrow-forward-circle">
            </ion-icon>
        </a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/company-profil/resources/views////vendor/pagination/simple-pgri.blade.php ENDPATH**/ ?>