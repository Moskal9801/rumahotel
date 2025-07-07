</main>

<?php $currentPath = $_SERVER['REQUEST_URI']; ?>

<?php if (!is_front_page() && !in_array('post-type-archive-rooms', get_body_class())) { ?>
    <footer class="main-footer" >
        <div class="header-container">
            <a href="/" class="main-footer__logo view-cursor">
                <svg width="90" height="200" viewBox="0 0 90 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.125 198.767V186.951H6.19415V191.868H11.8001V186.951H13.8632V198.767H11.8001V193.783H6.19415V198.767H4.125Z" fill="white"/>
                    <path d="M26.7632 195.837C27.521 196.653 28.4714 197.063 29.6263 197.063C30.7812 197.063 31.7315 196.659 32.4774 195.849C33.2232 195.04 33.5962 194.043 33.5962 192.859C33.5962 191.687 33.2172 190.697 32.4593 189.881C31.7075 189.066 30.7511 188.655 29.5962 188.655C28.4413 188.655 27.491 189.066 26.7511 189.869C26.0053 190.678 25.6323 191.675 25.6323 192.859C25.6323 194.025 26.0053 195.022 26.7632 195.837ZM34.0172 197.178C32.8503 198.368 31.3827 198.966 29.5962 198.966C27.8158 198.966 26.3481 198.374 25.1933 197.196C24.0444 196.012 23.4609 194.569 23.4609 192.859C23.4609 191.174 24.0444 189.73 25.2113 188.54C26.3782 187.344 27.8458 186.752 29.6263 186.752C31.4067 186.752 32.8804 187.344 34.0353 188.522C35.1841 189.706 35.7616 191.15 35.7616 192.859C35.7616 194.544 35.1781 195.988 34.0172 197.178Z" fill="white"/>
                    <path d="M48.2509 198.767V188.878H44.5156V186.951H54.0614V188.878H50.3261V198.767H48.2509Z" fill="white"/>
                    <path d="M63.3359 198.767V186.951H72.0516V188.812H65.4051V191.88H71.2998V193.735H65.4051V196.906H72.1358V198.767H63.3359Z" fill="white"/>
                    <path d="M81.6875 198.767V186.951H83.7567V196.876H89.934V198.767H81.6875Z" fill="white"/>
                    <path d="M63.8761 60.29H63.1182C56.4537 60.6706 50.968 63.0204 46.6733 67.3335C45.8793 68.1248 45.1696 68.9342 44.538 69.7618C43.9064 68.9403 43.1906 68.1308 42.4087 67.3335C38.108 63.0144 32.6284 60.6706 25.9638 60.29H25.2059C18.5353 60.6706 13.0557 63.0204 8.76096 67.3335C4.21365 71.9002 1.9039 77.4214 1.84375 83.897V94.0212V102.267V107.885H11.5098V102.363V94.0212V83.9936C11.5098 83.7037 11.4918 83.4198 11.4617 83.1359C11.6482 79.6444 13.0075 76.6482 15.5398 74.1413C18.2947 71.3807 21.6089 69.9974 25.4946 69.9974H25.6811C29.5667 69.9974 32.881 71.3747 35.6358 74.1413C38.1621 76.6482 39.5215 79.6444 39.714 83.1359C39.6779 83.4258 39.6659 83.7097 39.6659 83.9936V102.363C39.6659 102.484 39.708 102.563 39.714 102.677V107.885H44.5019H44.5921H49.38V102.677C49.3861 102.563 49.4282 102.484 49.4282 102.363V83.9936C49.4282 83.7037 49.4101 83.4198 49.374 83.1359C49.5665 79.6444 50.9259 76.6482 53.4522 74.1413C56.201 71.3807 59.5213 69.9974 63.407 69.9974H63.5934C67.4791 69.9974 70.7994 71.3747 73.5482 74.1413C76.0745 76.6482 77.4339 79.6444 77.6263 83.1359C77.6023 83.3413 77.5903 90.1249 77.5782 94.0212H77.5722V98.1772C77.5722 103.541 81.903 107.885 87.2383 107.885V102.267V94.0212V83.897C87.1781 77.4214 84.8744 71.9002 80.321 67.3335C76.0264 63.0144 70.5467 60.6706 63.8761 60.29Z" fill="white"/>
                    <path d="M24.2814 0.819881C24.2453 0.819881 24.2152 0.801758 24.1852 0.801758C17.3582 1.12191 11.7703 3.4657 7.4094 7.84518C2.85607 12.4119 0.552337 17.9331 0.492188 24.4087V28.166V42.7844V48.3962C5.83348 48.3962 10.1643 44.053 10.1643 38.6889V28.166H10.1522C10.1462 26.082 10.1342 23.8046 10.1161 23.6476C10.3026 20.1561 11.668 17.1599 14.1943 14.653C16.9431 11.8924 20.2634 10.5152 24.1491 10.5152H24.1972C24.2333 10.5152 24.2573 10.497 24.2934 10.497V10.5152H29.0272V0.801758H24.2934V0.819881H24.2814Z" fill="white"/>
                    <path d="M25.4928 157.865C17.7155 157.865 11.3877 151.51 11.3877 143.7C11.3877 135.889 17.7155 129.534 25.4928 129.534C33.2702 129.534 39.5979 135.889 39.5979 143.7C39.5979 143.784 39.5739 143.875 39.5739 143.96H39.5257V144.449C39.1287 151.903 33.0175 157.865 25.4988 157.865H25.4928ZM49.1256 143.96C49.1256 143.875 49.1497 143.784 49.1497 143.7C49.1497 130.598 38.5333 119.942 25.4928 119.942C12.4463 119.942 1.83594 130.604 1.83594 143.7C1.83594 156.802 12.4524 167.458 25.4928 167.458C31.213 167.458 36.3979 165.325 40.4941 161.912C42.052 165.174 45.3422 167.446 49.1858 167.446V143.954H49.1196L49.1256 143.96Z" fill="white"/>
                    <path d="M85.6444 16.7432C80.5738 16.7432 76.4656 20.6697 76.0566 25.6593C76.0566 25.6653 76.0265 25.6895 76.0265 25.6955C75.834 29.187 74.4807 32.1832 71.9484 34.6901C69.1995 37.4507 65.8792 38.8279 61.9936 38.8279H61.8071C57.9214 38.8279 54.6072 37.4446 51.8584 34.6901C49.3261 32.1832 47.9727 29.187 47.7742 25.6955C47.8103 25.4116 47.8283 25.1277 47.8283 24.8377V9.91122V8.77557V0.813965H38.1562V8.68497V9.91726V24.9404C38.2164 31.416 40.5261 36.9372 45.0735 41.504C49.3682 45.817 54.8478 48.1668 61.5184 48.5534H62.2763C68.9409 48.1729 74.4205 45.823 78.7212 41.504C83.2745 36.9372 85.5783 31.416 85.6444 24.9404V18.1688V18.1265V16.7613V16.7432Z" fill="white"/>
                    <path d="M85.6355 0.801758H75.8672V10.6179H85.6355V0.801758Z" fill="white"/>
                </svg>
            </a>
            <div class="main-footer__menu">
                <a href="/about/" class="menu__item menu-line view-cursor <?php if (strpos($currentPath, '/about/') !== false) { echo 'active'; } ?>">ОБ ОТЕЛЕ</a>
                <a href="/rooms/" class="menu__item menu-line view-cursor <?php if (strpos($currentPath, '/rooms/') !== false) { echo 'active'; } ?>">НОМЕРА</a>
                <a href="/booking/" class="menu__item menu-line view-cursor" data-tl-booking-open='true'>ЗАБРОНИРОВАТЬ</a>
                <a href="/specials/" class="menu__item menu-line view-cursor <?php if (strpos($currentPath, '/specials/') !== false) { echo 'active'; } ?>">СПЕЦПРЕДЛОЖЕНИЯ</a>
                <a href="/restaurant/" class="menu__item menu-line view-cursor <?php if (strpos($currentPath, '/restaurant/') !== false) { echo 'active'; } ?>">РЕСТОРАН RUMA</a>
                <a href="/conference/" class="menu__item menu-line view-cursor <?php if (strpos($currentPath, '/conference/') !== false) { echo 'active'; } ?>">КОНФЕРЕНЦ-ЗАЛЫ</a>
                <a href="/contacts/" class="menu__item menu-line view-cursor <?php if (strpos($currentPath, '/contacts/') !== false) { echo 'active'; } ?>">КОНТАКТЫ</a>
            </div>
            <div class="main-footer__contacts">
                <p class="contacts__item"><?php the_field( 'address', 'option' ); ?></p>
                <a class="contacts__item border-cursor" href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>"><?php the_field( 'phone', 'option' ); ?></a>
                <a class="contacts__item border-cursor" href="mailto:<?php the_field( 'mail', 'option' ); ?>"><?php the_field( 'mail', 'option' ); ?></a>
                <div class="contacts__socials mobile">
                    <a href="<?php the_field( 'tg', 'option' ); ?>" class="socials__item" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#B08A62"/>
                            <path d="M16.2486 20.6469L24.6768 28.0625C24.7742 28.1488 24.8923 28.2082 25.0196 28.2349C25.1469 28.2617 25.279 28.2549 25.4029 28.2152C25.5268 28.1754 25.6382 28.1042 25.7262 28.0084C25.8142 27.9126 25.8758 27.7956 25.9049 27.6688L29.4299 12.275C29.4594 12.1425 29.4524 12.0043 29.4096 11.8754C29.3668 11.7465 29.2898 11.6317 29.1868 11.5431C29.0838 11.4546 28.9587 11.3956 28.8249 11.3726C28.691 11.3496 28.5534 11.3634 28.4268 11.4125L11.1205 18.2094C10.4268 18.4813 10.5205 19.4938 11.2518 19.6438L16.2486 20.6469Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.25 20.6468L29.0094 11.4312" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.4594 24.3501L17.5344 27.2751C17.43 27.3811 17.2965 27.4536 17.1508 27.4835C17.0052 27.5134 16.8539 27.4994 16.7162 27.4431C16.5786 27.3868 16.4607 27.2909 16.3777 27.1675C16.2947 27.0441 16.2502 26.8988 16.25 26.7501V20.647" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="<?php the_field( 'wa', 'option' ); ?>" class="socials__item" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#B08A62"/>
                            <path d="M12.2565 24.5938C11.1398 22.7098 10.7492 20.483 11.158 18.3315C11.5668 16.1799 12.7469 14.2515 14.4768 12.9084C16.2066 11.5652 18.3672 10.8997 20.553 11.0367C22.7388 11.1736 24.7994 12.1037 26.348 13.6523C27.8966 15.201 28.8267 17.2616 28.9637 19.4473C29.1007 21.6331 28.4351 23.7937 27.0919 25.5236C25.7488 27.2534 23.8204 28.4335 21.6689 28.8423C19.5173 29.2511 17.2905 28.8605 15.4065 27.7438V27.7438L12.294 28.6251C12.1665 28.6624 12.0313 28.6647 11.9026 28.6317C11.7738 28.5988 11.6563 28.5319 11.5624 28.4379C11.4684 28.344 11.4015 28.2265 11.3686 28.0978C11.3357 27.969 11.338 27.8338 11.3753 27.7063L12.2565 24.5938Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.2594 25.25C21.2726 25.2525 20.295 25.0599 19.3828 24.6834C18.4706 24.3069 17.6418 23.7539 16.944 23.0561C16.2462 22.3583 15.6931 21.5295 15.3166 20.6173C14.9401 19.7051 14.7476 18.7275 14.75 17.7406C14.7525 17.0461 15.0302 16.3808 15.5222 15.8905C16.0142 15.4003 16.6805 15.125 17.375 15.125V15.125C17.4896 15.1241 17.6023 15.1541 17.7013 15.2118C17.8003 15.2696 17.8819 15.3529 17.9375 15.4531L19.0344 17.3656C19.0996 17.4819 19.1331 17.6133 19.1315 17.7466C19.1298 17.8799 19.0931 18.0104 19.025 18.125L18.1438 19.5969C18.5952 20.601 19.399 21.4049 20.4031 21.8563L21.875 20.975C21.9896 20.9069 22.1202 20.8702 22.2535 20.8686C22.3868 20.8669 22.5181 20.9004 22.6344 20.9656L24.5469 22.0625C24.6471 22.1181 24.7305 22.1997 24.7882 22.2987C24.8459 22.3977 24.8759 22.5104 24.875 22.625C24.8726 23.3188 24.5965 23.9837 24.1068 24.4752C23.6171 24.9666 22.9532 25.2451 22.2594 25.25V25.25Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>" class="socials__item" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#B08A62"/>
                            <path d="M16.6719 19.7C17.4436 21.2938 18.7324 22.5792 20.3281 23.3469C20.4458 23.4026 20.576 23.4268 20.7059 23.4169C20.8358 23.407 20.9608 23.3635 21.0687 23.2907L23.4125 21.725C23.516 21.6548 23.6357 21.6119 23.7603 21.6005C23.8849 21.589 24.0104 21.6093 24.125 21.6594L28.5125 23.5438C28.6625 23.6062 28.7877 23.7162 28.869 23.8568C28.9504 23.9974 28.9832 24.1608 28.9625 24.3219C28.8234 25.4073 28.2937 26.4048 27.4723 27.1278C26.6509 27.8508 25.5943 28.2498 24.5 28.25C21.1185 28.25 17.8755 26.9067 15.4844 24.5156C13.0933 22.1246 11.75 18.8815 11.75 15.5C11.7502 14.4058 12.1492 13.3491 12.8722 12.5277C13.5952 11.7064 14.5927 11.1766 15.6781 11.0375C15.8392 11.0168 16.0027 11.0497 16.1433 11.131C16.2839 11.2123 16.3938 11.3376 16.4562 11.4875L18.3406 15.8844C18.3896 15.9972 18.4101 16.1204 18.4003 16.243C18.3905 16.3656 18.3507 16.4839 18.2844 16.5875L16.7187 18.9688C16.649 19.0765 16.6081 19.2003 16.5999 19.3283C16.5917 19.4563 16.6165 19.5843 16.6719 19.7V19.7Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="main-footer__appeals">
                <a href="#" class="appeals__request default-button light-hover view-cursor call-feedback">ОБРАТНАЯ СВЯЗЬ</a>
                <div class="appeals__socials">
                    <a href="<?php the_field( 'tg', 'option' ); ?>" class="socials__item border-cursor" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#B08A62"/>
                            <path d="M16.2486 20.6469L24.6768 28.0625C24.7742 28.1488 24.8923 28.2082 25.0196 28.2349C25.1469 28.2617 25.279 28.2549 25.4029 28.2152C25.5268 28.1754 25.6382 28.1042 25.7262 28.0084C25.8142 27.9126 25.8758 27.7956 25.9049 27.6688L29.4299 12.275C29.4594 12.1425 29.4524 12.0043 29.4096 11.8754C29.3668 11.7465 29.2898 11.6317 29.1868 11.5431C29.0838 11.4546 28.9587 11.3956 28.8249 11.3726C28.691 11.3496 28.5534 11.3634 28.4268 11.4125L11.1205 18.2094C10.4268 18.4813 10.5205 19.4938 11.2518 19.6438L16.2486 20.6469Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.25 20.6468L29.0094 11.4312" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.4594 24.3501L17.5344 27.2751C17.43 27.3811 17.2965 27.4536 17.1508 27.4835C17.0052 27.5134 16.8539 27.4994 16.7162 27.4431C16.5786 27.3868 16.4607 27.2909 16.3777 27.1675C16.2947 27.0441 16.2502 26.8988 16.25 26.7501V20.647" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="<?php the_field( 'wa', 'option' ); ?>" class="socials__item border-cursor" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#B08A62"/>
                            <path d="M12.2565 24.5938C11.1398 22.7098 10.7492 20.483 11.158 18.3315C11.5668 16.1799 12.7469 14.2515 14.4768 12.9084C16.2066 11.5652 18.3672 10.8997 20.553 11.0367C22.7388 11.1736 24.7994 12.1037 26.348 13.6523C27.8966 15.201 28.8267 17.2616 28.9637 19.4473C29.1007 21.6331 28.4351 23.7937 27.0919 25.5236C25.7488 27.2534 23.8204 28.4335 21.6689 28.8423C19.5173 29.2511 17.2905 28.8605 15.4065 27.7438V27.7438L12.294 28.6251C12.1665 28.6624 12.0313 28.6647 11.9026 28.6317C11.7738 28.5988 11.6563 28.5319 11.5624 28.4379C11.4684 28.344 11.4015 28.2265 11.3686 28.0978C11.3357 27.969 11.338 27.8338 11.3753 27.7063L12.2565 24.5938Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.2594 25.25C21.2726 25.2525 20.295 25.0599 19.3828 24.6834C18.4706 24.3069 17.6418 23.7539 16.944 23.0561C16.2462 22.3583 15.6931 21.5295 15.3166 20.6173C14.9401 19.7051 14.7476 18.7275 14.75 17.7406C14.7525 17.0461 15.0302 16.3808 15.5222 15.8905C16.0142 15.4003 16.6805 15.125 17.375 15.125V15.125C17.4896 15.1241 17.6023 15.1541 17.7013 15.2118C17.8003 15.2696 17.8819 15.3529 17.9375 15.4531L19.0344 17.3656C19.0996 17.4819 19.1331 17.6133 19.1315 17.7466C19.1298 17.8799 19.0931 18.0104 19.025 18.125L18.1438 19.5969C18.5952 20.601 19.399 21.4049 20.4031 21.8563L21.875 20.975C21.9896 20.9069 22.1202 20.8702 22.2535 20.8686C22.3868 20.8669 22.5181 20.9004 22.6344 20.9656L24.5469 22.0625C24.6471 22.1181 24.7305 22.1997 24.7882 22.2987C24.8459 22.3977 24.8759 22.5104 24.875 22.625C24.8726 23.3188 24.5965 23.9837 24.1068 24.4752C23.6171 24.9666 22.9532 25.2451 22.2594 25.25V25.25Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>" class="socials__item border-cursor" target="_blank">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="19.5" stroke="#B08A62"/>
                            <path d="M16.6719 19.7C17.4436 21.2938 18.7324 22.5792 20.3281 23.3469C20.4458 23.4026 20.576 23.4268 20.7059 23.4169C20.8358 23.407 20.9608 23.3635 21.0687 23.2907L23.4125 21.725C23.516 21.6548 23.6357 21.6119 23.7603 21.6005C23.8849 21.589 24.0104 21.6093 24.125 21.6594L28.5125 23.5438C28.6625 23.6062 28.7877 23.7162 28.869 23.8568C28.9504 23.9974 28.9832 24.1608 28.9625 24.3219C28.8234 25.4073 28.2937 26.4048 27.4723 27.1278C26.6509 27.8508 25.5943 28.2498 24.5 28.25C21.1185 28.25 17.8755 26.9067 15.4844 24.5156C13.0933 22.1246 11.75 18.8815 11.75 15.5C11.7502 14.4058 12.1492 13.3491 12.8722 12.5277C13.5952 11.7064 14.5927 11.1766 15.6781 11.0375C15.8392 11.0168 16.0027 11.0497 16.1433 11.131C16.2839 11.2123 16.3938 11.3376 16.4562 11.4875L18.3406 15.8844C18.3896 15.9972 18.4101 16.1204 18.4003 16.243C18.3905 16.3656 18.3507 16.4839 18.2844 16.5875L16.7187 18.9688C16.649 19.0765 16.6081 19.2003 16.5999 19.3283C16.5917 19.4563 16.6165 19.5843 16.6719 19.7V19.7Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="more-footer__documents">
                <a target="_blank" href="/wp-content/uploads/2025/04/Politika-v-otnoshenii-obrabotki-personalnyh-dannyh-1.pdf" class="documents__item border-cursor">Политика обработки персональных данных</a>
                <a href="/document/" class="documents__item border-cursor">Правовая информация</a>
                <!--<a href="/club/" class="documents__item border-cursor">Клуб привилегий</a>-->
                <div class="documents__paykeeper">
                    <img src="/wp-content/themes/ruma_theme/assets/images/paykeeper-horizontal-white.png">
                </div>
            </div>

            <div class="more-footer__copyright">
                <div id='tl-reputation-widget'></div>

                <p class="copyright__item">©ООО «Броско», <?php echo date("Y") ?>. Все права защищены</p>
                <p class="copyright__item studio">
                    <span>Разработано: </span>
                    <a class="border-cursor" href="https://01cat.ru">Двоичный кот</a>

                </p>
            </div>
        </div>
    </footer>
<?php } ?>

<div class="cursor">
    <svg class="view" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.8">
            <circle cx="60" cy="60" r="60" fill="#B08A62"/>
        </g>
    </svg>
    <svg class="border" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.8">
            <rect x="1" y="1" width="98" height="98" rx="49" stroke="#B08A62" stroke-width="2"/>
        </g>
    </svg>
    <svg class="scroll" width="00" height="100" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.8">
            <circle cx="60" cy="60" r="60" fill="#B08A62"/>
            <path d="M69 60H91" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M82 51L91 60L82 69" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M51 60H29" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M38 51L29 60L38 69" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
    </svg>
</div>

<div class="popup popup-form form-conference mfp-hide mfp-with-anim">
    <svg class="popup__close mfp-close" width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="mfp-close" d="M2 2L33 34M2 34L33 2" stroke="#1B1918" stroke-width="4"/>
    </svg>
    <div class="popup__forms">
        <p class="forms__title">Забронировать<br>конференц-зал</p>
        <p class="forms__description">Заполните форму ниже, а наш менеджер свяжется с вами в ближайшее время для уточнения подробностей.</p>
        <?php echo do_shortcode('[contact-form-7 id="9b743a9" title="Бронь конференц-зала"]')?>
    </div>
</div>

<div class="popup popup-form form-feedback mfp-hide mfp-with-anim">
    <svg class="popup__close mfp-close" width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="mfp-close" d="M2 2L33 34M2 34L33 2" stroke="#1B1918" stroke-width="4"/>
    </svg>
    <div class="popup__forms">
        <p class="forms__title">Обратная связь</p>
        <p class="forms__description">Заполните форму ниже, а наш менеджер свяжется с вами в ближайшее время для уточнения подробностей.</p>
        <?php echo do_shortcode('[contact-form-7 id="0b29926" title="Обратная связь"]')?>
    </div>
</div>

<div class="popup popup-sent sent-newsletter mfp-hide mfp-with-anim">
    <svg class="popup__close mfp-close border-cursor" width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="mfp-close" d="M2 2L33 34M2 34L33 2" stroke="#1B1918" stroke-width="4"/>
    </svg>
    <div class="popup__answer">
        <p class="answer__title">Подписка на рассылку оформлена</p>
        <p class="answer__description">Благодарим за подписку, мы будем сообщать вам об акциях,<br>спецпредложениях и событиях отеля RUMA.</p>
    </div>
</div>

<div class="popup popup-sent sent-main mfp-hide mfp-with-anim">
    <svg class="popup__close mfp-close border-cursor" width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="mfp-close" d="M2 2L33 34M2 34L33 2" stroke="#1B1918" stroke-width="4"/>
    </svg>
    <div class="popup__answer">
        <p class="answer__title">Данные успешно отправлены</p>
        <p class="answer__description">Благодарим за заявку, мы свяжемся с Вами в ближайшее время.</p>
    </div>
</div>

<div class="popup popup-failed mfp-hide mfp-with-anim">
    <svg class="popup__close mfp-close border-cursor" width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="mfp-close" d="M2 2L33 34M2 34L33 2" stroke="#1B1918" stroke-width="4"/>
    </svg>
    <div class="popup__answer">
        <p class="answer__title">Ошибка отправки формы</p>
        <p class="answer__description">К сожалению произошла ошибка отправки формы, попробуйте отправить её снова, или свяжитесь с нами любым удобным способом.</p>
        <div class="answer__contacts">
            <a href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>" class="default-button light-hover view-cursor"><?php the_field( 'phone', 'option' ); ?></a>
            <a href="mailto:<?php the_field( 'mail', 'option' ); ?>" class="border-button view-cursor"><?php the_field( 'mail', 'option' ); ?></a>
        </div>
    </div>
</div>

<?php if ( get_field( 'special-image_копия', 'option' ) == 1 && is_front_page() ) : ?>
    <div class="special mfp-hide mfp-with-anim">
        <svg class="popup__close mfp-close border-cursor <?php if (get_field( 'special-image', 'option' )) { echo 'light'; }?>" width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="mfp-close" d="M2 2L33 34M2 34L33 2" stroke="#1B1918" stroke-width="4"/>
        </svg>
        <div class="special__content">
            <?php if (get_field( 'special-image', 'option' )) { ?>
                <div class="content__image">
                    <img src="<?php the_field( 'special-image', 'option' ); ?>" />
                </div>
            <?php } ?>
            <div class="content__info">
                <?php if (get_field( 'special-date', 'option' )) { ?>
                    <p class="info__date"><?php the_field( 'special-date', 'option' ); ?></p>
                <?php } ?>
                <?php if (get_field( 'special-name', 'option' )) { ?>
                    <p class="info__name"><?php the_field( 'special-name', 'option' ); ?></p>
                <?php } ?>
                <?php if (get_field( 'special-description', 'option' )) { ?>
                    <p class="info__description"><?php the_field( 'special-description', 'option' ); ?></p>
                <?php } ?>
                <div class="popup__info-block">
					<?php if ( have_rows( 'special-button', 'option' ) ) : ?>
						<?php while ( have_rows( 'special-button', 'option' ) ) : the_row(); ?>
							<?php if (get_sub_field( 'button-name' )) { ?>
                                <a href="<?php the_sub_field( 'button-links' ); ?>" class="default-button dark-hover view-cursor info__button"><?php the_sub_field( 'button-name' ); ?></a>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if ( have_rows( 'special-button_book', 'option' ) ) : ?>
						<?php while ( have_rows( 'special-button_book', 'option' ) ) : the_row(); ?>
							<?php if (get_sub_field( 'button-name' )) { ?>
                                <a href="<?php the_sub_field( 'button-links' ); ?>" class=" view-cursor popup__button control__second border-button "><?php the_sub_field( 'button-name' ); ?></a>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>

            </div>
        </div>
    </div>

<?php endif; ?>

<div class="cookie bvi-no-styles">
    <p class="cookie-title">Мы используем файлы cookie</p>
    <p class="cookie-description">Для улучшения работы сервиса и персонализации информации мы используем файлы cookie. Нажимая кнопку ПРИНЯТЬ, вы соглашаетесь с <a class="border-cursor" href="/wp-content/uploads/2024/06/Politika-v-otnoshenii-obrabotki-personalnyh-dannyh.pdf" target="_blank">Политикой обработки персональных данных</a></p>
    <a class="cookie-button default-button dark-hover view-cursor" href="#">ПРИНЯТЬ</a>
</div>

<!-- start TL head script -->
<script type='text/javascript'>
    (function(w) {
        var q = [
            ["setContext", "TL-INT-ruma-hotel_2024-07-11", "ru"],
            ["embed", "booking-form", {
                container: "tl-booking-form"
            }],
            ["embed", "search-form", {
                container: "tl-search-form"
            }]
        ];
        var h = ["ru-ibe.tlintegration.ru", "ibe.tlintegration.ru", "ibe.tlintegration.com"];
        var t = w.travelline = (w.travelline || {}),
            ti = t.integration = (t.integration || {});
        ti.__cq = ti.__cq? ti.__cq.concat(q) : q;
        if (!ti.__loader) {
            ti.__loader = true;
            var d=w.document,c=d.getElementsByTagName("head")[0]||d.getElementsByTagName("body")[0];
            function e(s,f) {return function() {w.TL||(c.removeChild(s),f())}}
            (function l(h) {
                if (0===h.length) return; var s=d.createElement("script");
                s.type="text/javascript";s.async=!0;s.src="https://"+h[0]+"/integration/loader.js";
                s.onerror=s.onload=e(s,function(){l(h.slice(1,h.length))});c.appendChild(s)
            })(h);
        }
    })(window);
</script>

<!-- end TL head script -->
</body>
<?php wp_footer(); ?>
</html>