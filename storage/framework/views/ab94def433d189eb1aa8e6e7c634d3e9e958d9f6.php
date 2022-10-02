<?php $__env->startSection('content'); ?>
    <div class="contact">
        <div class="contact-wrapper">
            <div class="contact__address">
                <div class="contact__address--title">
                    <p>Alamat Kami</p>
                    <p>Pgri Kabupaten Pasuruan</p>
                </div>

                <div class="contact__address--box">
                    <div class="address-box">
                        <div class="address-box-title">
                            <ion-icon name="mail-outline"></ion-icon>Email
                        </div>
                        <p> <?php print_r($configs[5]['data']); ?> </p>
                    </div>
                    <div class="address-box">
                        <div class="address-box-title">
                            <ion-icon name="call-outline"></ion-icon>Telepon
                        </div>
                        <p> <?php print_r($configs[4]['data']); ?> </p>

                    </div>
                    <div class="address-box">
                        <div class="address-box-title">
                            <ion-icon name="location-outline"></ion-icon>Alamat
                        </div>
                        <p> <?php print_r($configs[3]['data']); ?> </p>
                    </div>
                </div>

                <div class="address-box-medsos">
                    <div class="address-box-medsos--item">
                        <ion-icon onclick="window.open('<?php echo e($configs[1]['data']); ?>')" name="logo-instagram">
                        </ion-icon>
                    </div>

                    <div class="address-box-medsos--item">
                        <ion-icon onclick="window.open('<?php echo e($configs[0]['data']); ?>')" name="logo-facebook">
                        </ion-icon>
                    </div>

                    <div class="address-box-medsos--item">
                        <ion-icon onclick="window.open('<?php echo e($configs[2]['data']); ?>')" name="logo-whatsapp"></ion-icon>
                    </div>
                </div>


            </div>

            <div class="contact__map">
                <div class="contact__map--info">
                    <p>PGRI Kab Pasuruan</p>
                    <p>
                        <ion-icon name="locate-outline"></ion-icon><?php print_r($configs[3]['data']); ?>
                    </p>
                    <p>
                        <ion-icon name="mail-outline"></ion-icon><?php print_r($configs[5]['data']); ?>
                    </p>
                    <p>
                        <ion-icon name="location-outline"></ion-icon><a href="">Lihat Di Google map</a>
                    </p>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/frontend/contact.blade.php ENDPATH**/ ?>