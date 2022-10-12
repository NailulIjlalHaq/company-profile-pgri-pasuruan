<footer class="footer">
    <div class="footer-container">
        <div class="footer__wrapper">
            <div class="footer__wrapper--top">
                <div class="footer-logo-container">
                    <div href="<?php echo e(route('feHome')); ?>" class="footer-logo-container__logo">
                        <img src="<?php echo e(asset('./frontend/assets/img/logo.png')); ?>" alt="" />
                        <p>
                            PGRI <br />
                            KAB PASURUAN
                        </p>
                    </div>
                    <!-- <div class="footer-logo-container__desc">
                        Transform the way companies manage <br />
                        payments electronically without the high <br />
                        payment fees.
                    </div> -->
                </div>
                <?php
                $setting = settings();
                ?>
                <div class="footer-address">
                    <div class="footer-address__phone">
                        <p>
                            <ion-icon name="call"></ion-icon>
                        </p>
                        <p><?php echo e($setting[4]['data']); ?></p>
                    </div>
                    <div class="footer-address__alamat">
                        <p>
                            <ion-icon name="location"></ion-icon>
                        </p>
                        <p>
                            <?php echo e($setting[3]['data']); ?>

                        </p>
                    </div>
                    <div class="footer-address__email">
                        <p>
                            <ion-icon name="mail"></ion-icon>
                        </p>
                        <p> <?php echo e($setting[5]['data']); ?></p>
                    </div>
                </div>
                

        </div>
        <hr />
        <div class="footer__wrapper--bot">
            <div class="footer-medsos">
                <div class="footer-medsos--box">
                    <ion-icon onclick="window.open('')" name="logo-instagram"></ion-icon>
                </div>

                <div class="footer-medsos--box">
                    <ion-icon onclick="window.open('')" name="logo-facebook"></ion-icon>
                </div>

                <div class="footer-medsos--box">
                    <ion-icon onclick="window.open('')" name="logo-whatsapp"></ion-icon>
                </div>
            </div>

            <div class="footer-cr">Copyright PGRI Kabupaten Pasuruan 2022 © All rights reserved.</div>
        </div>
    </div>

    </div>
</footer><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/components/frontend/footer.blade.php ENDPATH**/ ?>