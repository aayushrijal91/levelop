<footer class="bg-primary w-full h-fit font-urbane">
    <div class="container flex flex-col w-full h-fit py-10 gap-16 px-4 2xl:px-0">
        <!-- logo -->
        <div class="flex justify-start lg:justify-center">
            <?php echo renderImage('icon.png', 'levelop logo', 'hidden lg:block'); ?>
            <?php echo renderImage('icon-mobile.png', 'levelop logo', 'block lg:hidden'); ?>
        </div>
        <!-- company info -->
        <div class="w-full h-[350px] lg:h-[100px] flex flex-col lg:flex-row justify-between gap-10 lg:gap-0">
            <!-- slogan -->
            <div class="flex items-center">
                <p class="text-[#E0E0E1] text-[20px] md:text-[25px] font-light leading-[1.1] tracking-[-0.375px] w-full lg:max-w-[343px]">
                    Elevating living spaces & reimagining luxury.
                </p>
            </div>
            <!-- info 1 -->
            <div class="flex flex-col items-center h-full">
                <!-- above -->
                <div class="flex flex-row w-full justify-start h-1/3">
                    <div class="flex pr-4 border-b-[1px] border-[#728291] h-full">
                        <p class="text-text-white text-base">
                            Email us today!
                        </p>
                    </div>
                    <!-- angle -->
                    <div class="flex h-full items-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <!-- the rest line -->
                    <div class="flex h-full flex-1 border-b-[1px] border-[#728291]"></div>
                </div>
                <!-- below -->
                <div class="flex w-full justify-start items-end h-2/3">
                    <p class="text-text-white text-[29px] md:text-[40px] xl:text-[45px] font-medium leading-[1.1] tracking-[0.675px]">
                        info@levelop.com.au
                    </p>
                </div>
            </div>
            <!-- info 2 -->
            <div class="flex flex-col items-center h-full">
                <!-- above -->
                <div class="flex flex-row w-full justify-start h-1/3">
                    <div class="flex pr-4 border-b-[1px] border-[#728291] h-full">
                        <p class="text-text-white text-base">
                            Talk to us!
                        </p>
                    </div>
                    <!-- angle -->
                    <div class="flex h-full items-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <!-- the rest line -->
                    <div class="flex h-full flex-1 border-b-[1px] border-[#728291]"></div>
                </div>
                <!-- below -->
                <div class="flex w-full justify-start items-end h-2/3">
                    <p class="text-text-white text-[29px] md:text-[40px] xl:text-[45px] font-medium leading-[1.1] tracking-[0.675px]">
                        <?php echo $phone_number ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- bottom  info -->
        <div class="flex flex-col lg:flex-row w-full h-fit justify-between items-center rounded-[46px] border-[1.5px] border-[#434554] px-6">
            <!-- social media links -->
            <div class="flex flex-row py-4 gap-2 w-full lg:w-1/3 h-full items-center">
                <a href="<?php echo $facebook; ?>" target="_bank">
                    <?php echo renderImage('fb-icon.png', 'facebook icon'); ?>
                </a>
                <a href="<?php echo $instagram; ?>" target="_bank">
                    <?php echo renderImage('ins-icon.png', 'ins icon'); ?>
                </a>
                <!-- <a href="<?php echo $linkedin; ?>" target="_bank">
                    <?php echo renderImage('linkedin-icon.png', 'linkedin icon'); ?>
                </a>
                <a href="<?php echo $youtube; ?>" target="_bank">
                    <?php echo renderImage('yt-icon.png', 'youtube icon'); ?>
                </a>        -->
            </div>
            <!-- info and aiims logo -->
            <div class="flex flex-row w-full lg:w-2/3 h-full items-center justify-between">
                <!-- info -->
                <div class="hidden md:flex flex-row gap-4 text-text-white h-full items-center italic text-[12px] leading-none tracking-[-0.12px] font-light">
                    <p>Copyright 2023</p>
                    <p>|</p>
                    <p>Levelop Construction Group</p>
                    <p>|</p>
                    <p>All Rights Reserved</p>
                </div>
                <div class="flex flex-col md:hidden gap-4 text-text-white italic text-[12px] leading-none tracking-[-0.12px] font-light py-6">
                    <p class="mb-2">Levelop Construction Group</p>
                    <p>Copyright 2023</p>
                    <p>All Rights Reserved</p>
                </div>
                <!-- aiims logo -->
                <a href="https://aiims.com.au/like-our-work" target="_bank">
                    <img src="./dist/assets/images/aiims-logo.png" alt="aiims logo">
                </a>
            </div>
        </div>
    </div>
    
    
</footer>
</body>
</html>
