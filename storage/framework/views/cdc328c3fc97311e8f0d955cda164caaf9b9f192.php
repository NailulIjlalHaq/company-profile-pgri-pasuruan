<footer class="footer">
    <div class="footer-container">
        <div class="footer__wrapper">
            <div class="footer__wrapper--top">
                <div class="footer-logo-container">
                    <div onclick="window.location.href('<?php echo e(route('feHome')); ?>')" class="footer-logo-container__logo">
                        <img src=<?php echo e(asset('./frontend/assets/img/logo.png')); ?> alt="" />
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

                <div class="footer-address">
                    <div class="footer-address__phone">
                        <p>
                            <ion-icon name="call"></ion-icon>
                        </p>
                        <p>
                            <?php
                            //print_r($configs);
                            ?></p>
                    </div>
                    <div class="footer-address__alamat">
                        <p>
                            <ion-icon name="location"></ion-icon>
                        </p>
                        <p>
                            <?php
                            //print_r($configs[3]['data']);
                            ?>
                        </p>
                    </div>
                    <div class="footer-address__email">
                        <p>
                            <ion-icon name="mail"></ion-icon>
                        </p>
                        <p> <?php
                          	
                            //print_r($configs[5]['data']);
                            ?></p>
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

            <div class="footer-cr">Copyright SMKN 1 Purwosari 2022 ?? All rights reserved.</div>
        </div>
    </div>

    </div>
</footer><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/components/frontend/footer.blade.php ENDPATH**/ ?>