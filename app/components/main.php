<header class="z-[10000] fixed w-full top-0 left-1/2 -translate-x-1/2 py-3 md:py-10 shadow-lg">
    <div class="container flex flex-row  justify-between items-center px-4 2xl:px-0">
        <img loading="lazy" src="./dist/assets/images/icon.png" class="aspect-[4.54] object-contain object-center w-[140px] md:w-[254px] overflow-hidden shrink-0 max-w-full mt-1.5" />
        <div class="flex flex-col md:flex-row items-end justify-between gap-2 md:gap-5 h-[80px] md:h-[50px]">
            <button class="h-full items-center text-white border-b-[1px] md:border-[1px] border-[#FAFAFA] rounded-none md:rounded-[5px] 
                       md:hover:bg-button-bg md:hover:border-[#5C95CA] px-0 md:px-12">
                <a href="#contact-form" class="font-urbane text-lg font-medium leading-none tracking-[-0.24px]">
                    Enquire now
                </a>
            </button>
            <button class="group h-full items-center justify-end text-white border-b-[1px] md:border-[1px] border-[#FAFAFA] rounded-none md:rounded-[5px] 
                     md:hover:bg-button-bg md:hover:border-[#5C95CA] px-0 md:px-12">
                <a href="tel:+<?php echo $phone_number; ?>" class="flex flex-row gap-1 md:gap-2 font-urbane text-lg font-medium leading-none tracking-[-0.24px]">
                    <img loading="lazy" src="./dist/assets/images/tel-icon.png" class="aspect-[1.07] object-contain object-center w-4 ">
                    <p>
                        <?php echo $phone_number; ?>
                    </p>
                </a>
            </button>
        </div>
    </div>
</header>

<!-- top banner and fixed header -->
<section id="banner" class="w-full h-[733px] md:h-[877px] relative">
    <!-- Banner background image starts here -->
    <img loading="lazy" src="./dist/assets/images/banner-bg.png" class="absolute h-full w-full object-cover inset-0 -z-10" style="object-position: 81% center;">
    <!-- Banner background image ends here -->
    <div class="container w-full h-full">
        <!-- fixed header starts here -->
        <!-- fixed header ends here -->
        <!-- banner content here -->
        <div class="absolute h-3/4 w-full bottom-0 left-0">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300" class="container h-full w-full flex flex-col gap-8 items-start justify-between md:justify-center pb-14 md:pb-0 px-4 2xl:px-0 font-urbane text-[#FAFAFA]">
                <!-- title -->
                <div class="flex flex-col w-[60%] md:w-1/2 gap-8">
                    <h1 class="font-medium text-[38px] lg:text-[65px] leading-[1.1] tracking-[-0.57px] md:tracking-[-0.975px]">
                        Transforming dreams into
                        <span class="font-light italic">luxury living.</span>
                    </h1>
                    <p class="font-light leading-[1.1] tracking-[-0.3px] text-3xl">
                        Home renovations in Sydney
                    </p>
                </div>
                <!-- info -->
                <div class="flex flex-col md:flex-row w-[80%] md:w-[60%] gap-8">
                    <p class="w-full md:w-1/2 font-medium leading-[1.6] tracking-[-0.24px] text-xl">
                        Perfection, artistry & sophisticatication.
                    </p>
                    <p class="w-full md:w-1/2 font-light leading-[1.6] tracking-[-0.14px] text-[#E0E0E1]">
                        Our team of skilled builders & designers work tirelessly to bring your vision to life,
                        ensuring every detail is done with precision to combine aesthetic & function.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards after the banner -->
<section class="w-full bg-primary h-fit">
    <div class="container flex flex-col lg:flex-row justify-between px-4 2xl:px-0 py-16 lg:py-10 gap-12">
        <!-- award 1 -->
        <div class="w-full lg:w-1/3 h-[120px] md:h-[152px] my-0 lg:my-10 flex flex-row gap-6 lg:gap-0 items-center justify-center lg:justify-between">
            <?php echo renderImage('awards/award-1.png', 'Award winning design & construction', 'object-cover h-full w-auto'); ?>
            <p class="font-urbane w-1/2 flex justify-end items-center text-[#FAFAFA] text-base leaidng-[1.6] font-medium tracking-[-0.24px] pr-12">
                Award winning design & construction
            </p>
        </div>
        <!-- award 2 -->
        <div class="w-full lg:w-1/3 h-[157px] my-0 lg:my-10
                  border-[#728291] border-t-[2px] border-b-[2px] border-l-[0] border-r-[0] lg:border-t-[0] lg:border-b-[0] lg:border-l-[2px] lg:border-r-[2px]
                  flex flex-row items-center justify-center lg:px-12">
            <?php echo renderImage('awards/award-2.png', 'Google logo', 'h-[50.7px] w-auto pr-[25px]'); ?>
            <p class="font-urbane font-medium text-[47px] leading-[1.6] tracking-[-0.706px] text-text-white pr-3 translate-y-1">
                5.0
            </p>
            <div class="flex flex-col">
                <?php echo renderImage('awards/5-star.png', '5 stars review', '-translate-x-1'); ?>
                <p class="font-urbane text-text-white text-base font-medium leading-[1.6] tracking-[-0.24px]">
                    Customer reviews
                </p>
            </div>
        </div>
        <!-- award 3 -->
        <div class="w-full lg:w-1/3 h-[120px] md:h-[152px] my-0 lg:my-10 flex flex-row gap-6 lg:gap-0 items-center justify-center lg:justify-between">
            <?php echo renderImage('awards/award-3.png', 'Award winning design & construction', 'object-cover h-full w-auto'); ?>
            <p class="font-urbane w-1/2 flex justify-end items-center text-[#FAFAFA] text-base leaidng-[1.6] font-medium tracking-[-0.24px]">
                Quality & Craftsmanship Guarantee
            </p>
        </div>
    </div>
</section>

<!-- renovations grids -->
<section class="w-full bg-primary h-fit">
    <div class="px-4 grid grid-cols-1 lg:grid-cols-2 gap-6 font-urbane max-w-[1920px] mx-auto">
        <!-- grid 1 Bathroom renovations -->
        <div class="renovation-container">
            <!-- background image -->
            <img src="./dist/assets/images/renovations/bathroom-bg.png" alt="bathroom renovation background" class="background-image">
            <!-- gradient overlay -->
            <div class="gradient-overlay"></div>

            <!-- grid content -->
            <div class="z-20 relative pr-[5%] pl-[9%] py-[30px] h-full w-full flex flex-col justify-between gap-[50px] md:gap-[190px]">
                <!-- top -->
                <div class="flex flex-col gap-[40px] md:gap-[50px]">
                    <!-- title -->
                    <div class="text-text-white flex flex-row items-center w-full h-[35px]
                                italic text-[15px]  font-medium leading-[1.1] tracking-[-0.24px]">
                        <!-- Our services and angle -->
                        <div class="flex flex-row items-center">
                            <!-- Our services -->
                            <div class="flex items-center border-b-[1px] border-[#FAFAFA] pr-2 pb-3">
                                <p>Our services</p>
                            </div>
                            <!-- angle -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#FAFAFA" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>
                        <!-- Renovation & Construction -->
                        <div class="flex flex-grow justify-end items-center border-b-[1px] border-[#FAFAFA] pb-3">
                            <p>Renovation & Construction</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="services-grids hidden w-[90%] md:flex flex-wrap justify-between gap-3 font-urbane text-[15px] font-medium leading-[1.03] tracking-[-0.21px]">
                        <div class="flex flex-wrap justify-start items-center gap-2 lg:gap-4">
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Plumbing</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Wall & Floor Tiling</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Demolition</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Electrical Work</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Waterproofing</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Design & Planning</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Cabinet & Storage</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Lighting</div>
                            </div>
                            <div class="px-3.5 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Insulation</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom -->
                <div class="w-full h-full flex flex-col justify-end items-start md:pb-[30px]">
                    <h2 class="flex w-2/3 text-[38px] md:text-[65px] font-medium text-text-white leading-[1.1] tracking-[-0.975px] mb-[30px]">
                        Bathroom renovations
                    </h2>
                    <p class="service-content hidden md:flex w-full md:w-3/4 text-base font-light text-text-white leading-[1.6] tracking-[-0.16px] mb-[50px] md:mb-[66px]">
                        We create luxury bespoke bathroom renovations in Sydney, NSW. Offering high quality end-to-end services from tiles, plumbing and more with style and attention to detail.
                    </p>
                    <button onclick="document.getElementById('contact-form').scrollIntoView();" class="enquire-button hidden md:flex items-center text-[18px] font-medium leading-none tracking-[-0.27px] justify-center w-full sm:w-[210px] h-fit bg-button-bg py-5 px-8 rounded-[5px] hover:bg-opacity-60">
                        Enquire now
                    </button>
                </div>
            </div>
        </div>
        <!-- grid 2 Kitchen renovations -->
        <div class="renovation-container">
            <!-- background image -->
            <img src="./dist/assets/images/renovations/kitchen-bg.png" alt="bathroom renovation background" class="background-image">
            <!-- gradient overlay -->
            <div class="gradient-overlay"></div>

            <!-- grid content -->
            <div class="z-20 relative pr-[5%] pl-[9%] py-[30px] h-full w-full flex flex-col justify-between gap-[50px] md:gap-[190px]">
                <!-- top -->
                <div class="flex flex-col gap-[40px] md:gap-[50px]">
                    <!-- title -->
                    <div class="text-text-white flex flex-row items-center w-full h-[35px]
                                italic text-[15px]  font-medium leading-[1.1] tracking-[-0.24px]">
                        <!-- Our services and angle -->
                        <div class="flex flex-row items-center">
                            <!-- Our services -->
                            <div class="flex items-center border-b-[1px] border-[#FAFAFA] pr-2 pb-3">
                                <p>Our services</p>
                            </div>
                            <!-- angle -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#FAFAFA" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>
                        <!-- Renovation & Construction -->
                        <div class="flex flex-grow justify-end items-center border-b-[1px] border-[#FAFAFA] pb-3">
                            <p>Renovation & Construction</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="services-grids hidden w-[90%] md:flex flex-wrap justify-between gap-3 font-urbane text-[15px] font-medium leading-[1.03] tracking-[-0.21px]">
                        <div class="flex flex-wrap justify-start items-center gap-2 lg:gap-4">
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Plumbing</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Wall & Floor Tiling</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Demolition</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Electrical Work</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Backsplash</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Flooring</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Design & Planning</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Cabinet & Storage</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Countertops</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Ventilation</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom -->
                <div class="w-full h-full flex flex-col justify-end items-start md:pb-[30px]">
                    <h2 class="flex w-2/3 text-[38px] md:text-[65px] font-medium text-text-white leading-[1.1] tracking-[-0.975px] mb-[30px]">
                        Kitchen renovations
                    </h2>
                    <p class="service-content hidden md:flex w-full md:w-3/4 text-base font-light text-text-white leading-[1.6] tracking-[-0.16px] mb-[50px] md:mb-[66px]">
                        At Levelop Construction Group we provide modern, elegant and highly functional kitchen designs in Sydney and near by areas within your budget and turnaround time.
                    </p>
                    <button onclick="document.getElementById('contact-form').scrollIntoView();" class="enquire-button hidden md:flex items-center text-[18px] font-medium leading-none tracking-[-0.27px] justify-center w-full sm:w-[210px] h-fit bg-button-bg py-5 px-8 rounded-[5px] hover:bg-opacity-60">
                        Enquire now
                    </button>
                </div>
            </div>
        </div>
        <!-- grid 3 House renovations -->
        <div class="renovation-container">
            <!-- background image -->
            <img src="./dist/assets/images/renovations/house-bg.png" alt="bathroom renovation background" class="background-image">
            <!-- gradient overlay -->
            <div class="gradient-overlay"></div>

            <!-- grid content -->
            <div class="z-20 relative pr-[5%] pl-[9%] py-[30px] h-full w-full flex flex-col justify-between gap-[50px] md:gap-[190px]">
                <!-- top -->
                <div class="flex flex-col gap-[40px] md:gap-[50px]">
                    <!-- title -->
                    <div class="text-text-white flex flex-row items-center w-full h-[35px]
                                italic text-[15px]  font-medium leading-[1.1] tracking-[-0.24px]">
                        <!-- Our services and angle -->
                        <div class="flex flex-row items-center">
                            <!-- Our services -->
                            <div class="flex items-center border-b-[1px] border-[#FAFAFA] pr-2 pb-3">
                                <p>Our services</p>
                            </div>
                            <!-- angle -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#FAFAFA" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>
                        <!-- Renovation & Construction -->
                        <div class="flex flex-grow justify-end items-center border-b-[1px] border-[#FAFAFA] pb-3">
                            <p>Renovation & Construction</p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="services-grids hidden w-[90%] md:flex flex-wrap justify-between gap-3 font-urbane text-[15px] font-medium leading-[1.03] tracking-[-0.21px]">
                        <div class="flex flex-wrap justify-start items-center gap-2 lg:gap-4">
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Painting</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Home Extensions</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Demolition</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Electrical Work</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Windows & Doors</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Storage Spaces</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Living Spaces</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Flooring</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Roofing</div>
                            </div>
                            <div class="px-4 py-3 rounded-3xl border border-neutral-50 justify-center items-center gap-2.5 flex">
                                <div class="text-center text-neutral-50">Structural Reinforcement</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bottom -->
                <div class="w-full h-full flex flex-col justify-end items-start md:pb-[30px]">
                    <h2 class="flex w-[63%] text-[38px] md:text-[65px] font-medium text-text-white leading-[1.1] tracking-[-0.975px] mb-[30px]">
                        House renovations
                    </h2>
                    <p class="service-content hidden md:flex w-full md:w-3/4 text-base font-light text-text-white leading-[1.6] tracking-[-0.16px]  mb-[50px] md:mb-[66px]">
                        When you work with us every stage of your home renovation is taken care of from your first consultation, to design and construction. Re-imagine your property with Levelop.
                    </p>
                    <button onclick="document.getElementById('contact-form').scrollIntoView();" class="enquire-button hidden md:flex items-center text-[18px] font-medium leading-none tracking-[-0.27px] justify-center w-full sm:w-[210px] h-fit bg-button-bg py-5 px-8 rounded-[5px] hover:bg-opacity-60">
                        Enquire now
                    </button>
                </div>
            </div>
        </div>
        <!-- grid 4 Advantages -->
        <div class="bg-transparent rounded-[50px] border-[1px] border-[#FAFAFA] h-full w-full">

            <!-- grid content -->
            <div class="w-full h-full flex flex-col justify-between text-text-white px-[5%] py-[70px] gap-[50px] md:gap-[220px] lg:gap-[390px] xl:gap-[260px] font-urbane">
                <!-- title -->
                <div class="flex">
                    <h2 class="italic font-light leading-[1.1] tracking-[-0.375px] text-[20px] md:text-[25px] text-text-white">
                        What does it look like to work with us?
                    </h2>
                </div>
                <!-- bottom advantages -->
                <div class="h-full w-full flex flex-col flex-1 gap-10 md:gap-20 font-urbane">
                    <!-- advatage 1 -->
                    <!-- show width more than md -->
                    <div class="hidden md:flex flex-row w-full h-[30px] items-center">
                        <!-- number and angle -->
                        <div class="flex flex-row items-center">
                            <!-- number -->
                            <div class="flex items-center border-b-[1px] border-[#728291]">
                                <p class="font-black tracking-[-0.975px] leading-[1.1]">
                                    <svg width="100" height="80" xmlns="http://www.w3.org/2000/svg">
                                        <text x="0" y="60" font-family="Arial" font-size="65" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                            01
                                        </text>
                                    </svg>
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex h-[80px] items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>

                        <!-- pattern and info -->
                        <div class="flex flex-row gap-10 lg:gap-4 xl:gap-10 flex-grow justify-start items-center border-b-[1px] border-[#728291] pl-6 lg:pl-4 xl:pl-6 pb-6">
                            <!-- pattern -->
                            <div class="flex w-[70px] h-auto items-center justify-center">
                                <?php echo renderImage('renovations/advantage1.png', 'Understanding your needs'); ?>
                            </div>
                            <!-- info -->
                            <div class="flex flex-col text-base lg:text-[13px] 2xl:text-base leading-[1.6] tracking-[-0.16px]">
                                <p class="text-[#FAFAFA] font-medium">
                                    Understanding your needs
                                </p>
                                <p class="text-[#E0E0E1] font-light">
                                    We’ll establish your goals and visions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- show width less then md -->
                    <div class="flex md:hidden flex-col w-full h-[150px] items-center">
                        <!-- above -->
                        <div class="flex flex-row h-[50px] w-full items-center justify-center">
                            <!-- number and angle -->
                            <div class="flex flex-row items-center">
                                <!-- number -->
                                <div class="flex items-center border-b-[1px] border-[#728291]">
                                    <p class="font-black tracking-[-0.57px] leading-[1.1]">
                                        <svg width="54" height="50" xmlns="http://www.w3.org/2000/svg">
                                            <text x="0" y="38" font-family="Arial" font-size="38" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                                01
                                            </text>
                                        </svg>
                                    </p>
                                </div>
                                <!-- angle -->
                                <div class="flex h-[50px] items-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                    </svg>
                                </div>
                            </div>
                            <!-- above title -->
                            <div class="flex flex-grow h-full items-center pl-4 border-b-[1px] border-[#728291]">
                                <p class="text-text-white text-base font-medium leading-[1.1] tracking-[-0.24px]">
                                    Understanding your needs
                                </p>
                            </div>
                        </div>
                        <!-- bottom -->
                        <div class="flex flex-row h-[100px] w-full items-center justify-center">
                            <!-- pattern -->
                            <div class="flex h-[50px] w-[84px] flex-shrink-0 justify-start">
                                <?php echo renderImage('renovations/advantage1.png', 'Understanding your needs'); ?>
                            </div>
                            <!-- bottom info -->
                            <div class="flex flex-grow h-full pl-4 items-center justify-start">
                                <p class="text-[#E0E0E1] text-base leading-[1.6] tracking-[-0.16px] font-light">
                                    We’ll establish your goals and visions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- advatage 2 -->
                    <!-- show width more than md -->
                    <div class="hidden md:flex flex-row w-full h-[30px] items-center">
                        <!-- number and angle -->
                        <div class="flex flex-row items-center items-center justify-center">
                            <!-- number -->
                            <div class="flex items-center border-b-[1px] border-[#728291]">
                                <p class="font-black tracking-[-0.975px] leading-[1.1]">
                                    <svg width="100" height="80" xmlns="http://www.w3.org/2000/svg">
                                        <text x="0" y="60" font-family="Arial" font-size="65" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                            02
                                        </text>
                                    </svg>
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex h-[80px] items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>

                        <!-- pattern and info -->
                        <div class="flex flex-row gap-10 lg:gap-4 xl:gap-10 flex-grow justify-start items-center border-b-[1px] border-[#728291] pl-6 lg:pl-4 xl:pl-6 pb-[22px]">
                            <!-- pattern -->
                            <div class="flex w-[70px] h-auto items-center justify-center">
                                <?php echo renderImage('renovations/advantage2.png', 'Crafting concepts & detailed planning'); ?>
                            </div>
                            <!-- info -->
                            <div class="flex flex-col text-base md:text-[12px] lg:text-[11px] 2xl:text-base leading-[1.6] tracking-[-0.16px]">
                                <p class="text-[#FAFAFA] font-medium">
                                    Crafting concepts & detailed planning
                                </p>
                                <p class="text-[#E0E0E1] font-light">
                                    Our masterminds will design a plan and timeline that suits you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- show width less then md -->
                    <div class="flex md:hidden flex-col w-full h-[150px] items-center">
                        <!-- above -->
                        <div class="flex flex-row h-[50px] w-full items-center justify-center">
                            <!-- number and angle -->
                            <div class="flex flex-row items-center">
                                <!-- number -->
                                <div class="flex items-center border-b-[1px] border-[#728291]">
                                    <p class="font-black tracking-[-0.57px] leading-[1.1]">
                                        <svg width="54" height="50" xmlns="http://www.w3.org/2000/svg">
                                            <text x="0" y="38" font-family="Arial" font-size="38" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                                02
                                            </text>
                                        </svg>
                                    </p>
                                </div>
                                <!-- angle -->
                                <div class="flex h-[50px] items-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                    </svg>
                                </div>
                            </div>
                            <!-- above title -->
                            <div class="flex flex-grow h-full items-center pl-4 border-b-[1px] border-[#728291]">
                                <p class="text-text-white text-base font-medium leading-[1.1] tracking-[-0.24px]">
                                    Crafting concepts & detailed planning
                                </p>
                            </div>
                        </div>
                        <!-- bottom -->
                        <div class="flex flex-row h-[100px] w-full items-center justify-between">
                            <!-- pattern -->
                            <div class="flex h-[50px] w-[84px] flex-shrink-0 justify-start">
                                <?php echo renderImage('renovations/advantage2.png', 'Understanding your needs'); ?>
                            </div>
                            <!-- bottom info -->
                            <div class="flex flex-grow h-full pl-4 items-center justify-start">
                                <p class="text-[#E0E0E1] text-base leading-[1.6] tracking-[-0.16px] font-light">
                                    Our masterminds will design a plan and timeline that suits you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- advantage 3 -->
                    <!-- show width more than md -->
                    <div class="hidden md:flex flex-row w-full h-[30px] items-center">
                        <!-- number and angle -->
                        <div class="flex flex-row items-center">
                            <!-- number -->
                            <div class="flex items-center border-b-[1px] border-[#728291]">
                                <p class="font-black tracking-[-0.975px] leading-[1.1]">
                                    <svg width="100" height="80" xmlns="http://www.w3.org/2000/svg">
                                        <text x="0" y="60" font-family="Arial" font-size="65" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                            03
                                        </text>
                                    </svg>
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex h-[80px] items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>

                        <!-- pattern and info -->
                        <div class="flex flex-row gap-10 lg:gap-4 xl:gap-10 flex-grow justify-start items-center border-b-[1px] border-[#728291] pl-6 lg:pl-4 xl:pl-6 pb-8">
                            <!-- pattern -->
                            <div class="flex w-[70px] h-auto items-center justify-center">
                                <?php echo renderImage('renovations/advantage3.png', 'Coordination & careful execution'); ?>
                            </div>
                            <!-- info -->
                            <div class="flex flex-col text-base md:text-[15px] lg:text-[10px] 2xl:text-base leading-[1.6] tracking-[-0.16px]">
                                <p class="text-[#FAFAFA] font-medium">
                                    Coordination & careful execution
                                </p>
                                <p class="text-[#E0E0E1] font-light">
                                    Our expert builders will oversee all construction.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- show width less then md -->
                    <div class="flex md:hidden flex-col w-full h-[150px] items-center">
                        <!-- above -->
                        <div class="flex flex-row h-[50px] w-full items-center justify-center">
                            <!-- number and angle -->
                            <div class="flex flex-row items-center">
                                <!-- number -->
                                <div class="flex items-center border-b-[1px] border-[#728291]">
                                    <p class="font-black tracking-[-0.57px] leading-[1.1]">
                                        <svg width="54" height="50" xmlns="http://www.w3.org/2000/svg">
                                            <text x="0" y="38" font-family="Arial" font-size="38" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                                03
                                            </text>
                                        </svg>
                                    </p>
                                </div>
                                <!-- angle -->
                                <div class="flex h-[50px] items-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                    </svg>
                                </div>
                            </div>
                            <!-- above title -->
                            <div class="flex flex-grow h-full items-center pl-4 border-b-[1px] border-[#728291]">
                                <p class="text-text-white text-base font-medium leading-[1.1] tracking-[-0.24px]">
                                    Coordination & careful execution
                                </p>
                            </div>
                        </div>
                        <!-- bottom -->
                        <div class="flex flex-row h-[100px] w-full items-center justify-center">
                            <!-- pattern -->
                            <div class="flex h-[50px] w-[84px] flex-shrink-0 justify-start">
                                <?php echo renderImage('renovations/advantage3.png', 'Coordination & careful execution'); ?>
                            </div>
                            <!-- bottom info -->
                            <div class="flex flex-grow h-full pl-4 items-center justify-start">
                                <p class="text-[#E0E0E1] text-base leading-[1.6] tracking-[-0.16px] font-light">
                                    Our expert builders will oversee all construction.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- advantage 4 -->
                    <!-- show width more than md -->
                    <div class="hidden md:flex flex-row w-full h-[30px] items-center">
                        <!-- number and angle -->
                        <div class="flex flex-row items-center">
                            <!-- number -->
                            <div class="flex items-center border-b-[1px] border-[#728291]">
                                <p class="font-black tracking-[-0.975px] leading-[1.1]">
                                    <svg width="100" height="80" xmlns="http://www.w3.org/2000/svg">
                                        <text x="0" y="60" font-family="Arial" font-size="65" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                            04
                                        </text>
                                    </svg>
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex h-[80px] items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                </svg>
                            </div>
                        </div>

                        <!-- pattern and info -->
                        <div class="flex flex-row gap-10 lg:gap-4 xl:gap-10 flex-grow justify-start items-center border-b-[1px] border-[#728291] pl-6 lg:pl-4 xl:pl-6 pb-[22px]">
                            <!-- pattern -->
                            <div class="flex w-[70px] h-auto items-center justify-center">
                                <?php echo renderImage('renovations/advantage4.png', 'Quality assurance'); ?>
                            </div>
                            <!-- info -->
                            <div class="flex flex-col text-base md:text-[14px] lg:text-[10px] 2xl:text-base leading-[1.6] tracking-[-0.16px]">
                                <p class="text-[#FAFAFA] font-medium">
                                    Quality assurance
                                </p>
                                <p class="text-[#E0E0E1] font-light">
                                    We’ll always thoroughly inspect our work and make refinements.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- show width less then md -->
                    <div class="flex md:hidden flex-col w-full h-[150px] items-center">
                        <!-- above -->
                        <div class="flex flex-row h-[50px] w-full items-center justify-center">
                            <!-- number and angle -->
                            <div class="flex flex-row items-center">
                                <!-- number -->
                                <div class="flex items-center border-b-[1px] border-[#728291]">
                                    <p class="font-black tracking-[-0.57px] leading-[1.1]">
                                        <svg width="54" height="50" xmlns="http://www.w3.org/2000/svg">
                                            <text x="0" y="38" font-family="Arial" font-size="38" font-weight="medium" fill="none" stroke="#728291" stroke-width="1">
                                                04
                                            </text>
                                        </svg>
                                    </p>
                                </div>
                                <!-- angle -->
                                <div class="flex h-[50px] items-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M 0,30 L 15,0 L 30,30" stroke="#728291" stroke-width="1.5" fill="none" />
                                    </svg>
                                </div>
                            </div>
                            <!-- above title -->
                            <div class="flex flex-grow h-full items-center pl-4 border-b-[1px] border-[#728291]">
                                <p class="text-text-white text-base font-medium leading-[1.1] tracking-[-0.24px]">
                                    Quality assurance
                                </p>
                            </div>
                        </div>
                        <!-- bottom -->
                        <div class="flex flex-row h-[100px] w-full items-center justify-center">
                            <!-- pattern -->
                            <div class="flex h-[50px] w-[84px] flex-shrink-0 justify-start pl-2">
                                <?php echo renderImage('renovations/advantage4.png', 'Quality assurance'); ?>
                            </div>
                            <!-- bottom info -->
                            <div class="flex flex-grow h-full pl-4 items-center justify-start">
                                <p class="text-[#E0E0E1] text-base leading-[1.6] tracking-[-0.16px] font-light">
                                    We’ll always thoroughly inspect our work and make refinements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- about us -->
<section id="about-us" class="max-w-[1920px] w-full bg-primary h-fit font-urbane overflow-hidden relative mx-auto">
    <!-- draw line animation -->
    <!-- <div class="hidden lg:block">
        <div class="animated-line horizontal-line"></div>
        <div class="animated-line vertical-line"></div>
        <div class="absolute left-[45%] arc-container" style="top: calc(50% + 198px);">
            <svg class="arc" height="206" width="206">
                <path d="M 0,100 A 100,100 0 0,0 200,100" stroke="#E0E0E1" stroke-width="2" fill="none" />
            </svg>
        </div>
        <div class="animated-line vertical-line2"></div>
        <div class="animated-line horizontal-line-2"></div>
    </div> -->
    <video class="w-full absolute xl:top-20 2xl:top-0 mix-blend-lighten hidden xl:block" autoplay loop muted>
        <source src="./dist/assets/images/line-2.mp4" type="video/mp4">
    </video>
    <div class="container flex flex-col lg:flex-row w-full h-fit py-10 lg:pt-24 relative">
        <!-- animation on mobile -->
        <div class="lg:hidden flex gap-4 w-full h-[420px] justify-end items-end px-4
                bg-[url('../assets/images/about-us-line-bg-mobile.png')] bg-no-repeat bg-auto" style="background-position: 80% center;">
            <?php echo renderImage('about-us-1-mobile.png', 'our work 1', 'h-[350px] w-auto'); ?>
            <div class="translate-y-10">
                <?php echo renderImage('about-us-2-mobile.png', 'our work 2', 'h-[350px] w-auto'); ?>
            </div>
        </div>
        <!-- about us info -->
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pl-4 2xl:pl-0 py-16 lg:py-52 gap-12 text-text-white">
            <h2 class="text-[38px] md:text-[65px] leading-[1.1] tracking-[-0.975px] font-medium mb-0 lg:mb-20 w-3/4 lg:w-full">
                Industry <i class="font-light">leading</i> renovation builders.
            </h2>
            <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px] lg:max-w-[500px]">
                Levelop Construction Group is a Sydney based company providing complete renovation solutions for home,
                alterations and additions, new kitchens and bathrooms or a brand-new build.
                We offer design and construction services and can also work from your existing plans.
            </p>
            <button onclick="document.getElementById('contact-form').scrollIntoView();" class="flex items-center text-[18px] font-medium leading-none tracking-[-0.27px] justify-center w-full lg:w-[210px] h-fit bg-button-bg py-5 px-8 rounded-[5px] hover:bg-opacity-60">
                Enquire now
            </button>
        </div>
        <!-- animation on computer -->
        <div class="hidden lg:flex mb-20 xl:mb-0 items-end justify-end gap-8 w-1/2 pr-4 2xl:pr-0">
            <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                <div class="-translate-y-16">
                    <?php echo renderImage('about-us-1.png', 'our work 1'); ?>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="850" data-aos-delay="300">
                <?php echo renderImage('about-us-2.png', 'our work 2'); ?>
            </div>
        </div>
    </div>
</section>

<!-- wide slider -->
<section class="max-w-[1920px] mx-auto font-urbane">
    <div class="flex flex-col w-full h-fit pt-8 md:pt-20">
        <!-- info only on mobile -->
        <div class="flex flex-col lg:hidden w-full h-full gap-8 px-4">
            <h2 class="text-text-white text-[38px] font-medium leading-[1.1] tracking-[-0.57px] w-3/4">
                Explore our projects
            </h2>
            <p class="text-[#E0E0E1] font-light leading-[1.6] tracking-[-0.16px]">
                At Levelop Construction Group we take pride in our craftsmanship and attention to detail,
                and we believe that the best way to showcase our expertise is through our past projects.
                Browse our gallery to see a selection of our completed residential and commercial construction projects,
                from custom homes to remodels and additions.
            </p>
            <div class="flex flex-col gap-3 w-full">
                <p class="text-[#E0E0E1] text-[20px] font-light leading-[1.6] tracking-[-0.2px] italic">
                    Swipe to explore
                </p>
                <?php echo renderImage('slider-images/arrow.png', 'arrow image', 'w-[60px] h-auto'); ?>
            </div>
        </div>
        <!-- slider -->
        <div class="items text-text-white">
            <div class="item grid grid-cols-1">
                <div class="w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-1.png', 'gallery image 1', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-2.png', 'gallery image 2', 'w-full h-full rounded-[5px]'); ?>
                </div>
            </div>
            <div class="item grid grid-cols-1 mb-16 lg:mb-32">
                <div class="w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-3.png', 'gallery image 3', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-4.png', 'gallery image 4', 'w-full h-full rounded-[5px]'); ?>
                </div>
            </div>
            <div class="item grid grid-cols-1">
                <div class="hidden lg:block w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/info.png', 'info'); ?>
                </div>
                <div class="hidden lg:block w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-5.png', 'gallery image 5', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="block lg:hidden w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-5.png', 'gallery image 5', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="block lg:hidden w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-6.png', 'gallery image 6', 'w-full h-full rounded-[5px]'); ?>
                </div>
            </div>
            <div class="item grid grid-cols-1 mb-16 lg:mb-32">
                <div class="hidden lg:block w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-6.png', 'gallery image 6', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="hidden lg:block w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-7.png', 'gallery image 7', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="block lg:hidden w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-7.png', 'gallery image 5', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="block lg:hidden w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-8.png', 'gallery image 6', 'w-full h-full rounded-[5px]'); ?>
                </div>
            </div>
            <div class="item grid grid-cols-1">
                <div class="hidden lg:block w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-8.png', 'gallery image 8', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="hidden lg:block w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-9.png', 'gallery image 9', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="block lg:hidden w-full h-[435px] lg:h-[557px] mb-6">
                    <?php echo renderImage('slider-images/image-9.png', 'gallery image 5', 'w-full h-full rounded-[5px]'); ?>
                </div>
                <div class="block lg:hidden w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-10.png', 'gallery image 6', 'w-full h-full rounded-[5px]'); ?>
                </div>
            </div>
            <div class="item item-6 grid grid-cols-1 mb-16 lg:mb-32">
                <div class="w-full h-[435px] lg:h-[557px]">
                    <?php echo renderImage('slider-images/image-10.png', 'gallery image 10', 'w-full h-full rounded-[5px]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why us -->
<section class="max-w-[1920px] mx-auto w-full h-fit font-urbane relative">
    <div class="container flex flex-col w-full items-center justify-center py-20 gap-6 px-4 2xl:px-0">
        <h2 class="text-text-white text-[20px] md:text-[25px] font-light leading-[1.1] tracking-[-0.375px]">
            Why choose Levelop?
        </h2>
        <h1 class="text-text-white text-[38px] md:text-[50px] xl:text-[65px] leading-[1.1] tracking-[-0.975px] px-[8%] md:px-[15%] text-center font-medium">
            Combined <i class="font-light">24+ years</i> of renovation <i class="font-light">mastery</i>.
        </h1>
        <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px] text-center w-4/5 md:w-1/2">
            With over 25 combined years of experience in renovating from Bathroom,
            Kitchen and House Renovations we’ve mastered the art of property renovations.
            We deliver a wide variety of construction services
            and home improvement for our property owners addressing our clients needs with high return on investment.
        </p>
        <!-- logos -->
        <video class="w-full hidden xl:block absolute top-40 2xl:top-12  left-12 mix-blend-lighten xl:scale-140 2xl:scale-110" autoplay loop muted>
            <source src="./dist/assets/images/line-1.mp4" type="video/mp4">
        </video>
        <div class="mt-10 w-full mx-auto overflow-hidden">
            <div class="why-us-slider flex flex-row w-full justify-between">
                <!-- logo 1 -->
                <div class="mx-4">
                    <div data-aos="fade-down" class="flex flex-col gap-5 justify-center items-center h-[320px] md:h-[362px] w-[244px]">
                        <div class="flex">
                            <?php echo renderImage('why-us/logo-1.png', 'Bespoke Design'); ?>
                        </div>
                        <div class="flex">
                            <h2 class="text-text-white text-[20px] md:text-[25px] font-medium text-center">
                                Bespoke Design
                            </h2>
                        </div>
                        <div class="flex">
                            <p class="text-center font-light leading-[1.6] tracking-[-0.16px] text-[#E0E0E1] px-[5%]">
                                We tailor our design & building concepts to your unique style and preferences.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- logo 2 -->
                <div class="mx-4">
                    <div data-aos="fade-up" class="flex flex-col gap-5 justify-center items-center h-[320px] md:h-[362px] w-[244px]">
                        <div class="flex">
                            <?php echo renderImage('why-us/logo-2.png', 'Bespoke Design'); ?>
                        </div>
                        <div class="flex">
                            <h2 class="text-text-white text-[20px] md:text-[25px] font-medium text-center">
                                Unparalleled craftsmanship
                            </h2>
                        </div>
                        <div class="flex">
                            <p class="text-center font-light leading-[1.6] tracking-[-0.16px] text-[#E0E0E1] px-[5%]">
                                We’re dedicated to delivering the highest level of quality and attention to detail.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- logo 3 -->
                <div class="mx-4">
                    <div data-aos="fade-down" class="flex flex-col gap-5 justify-end items-center h-[320px] md:h-[362px] w-[244px]">
                        <div class="flex">
                            <?php echo renderImage('why-us/logo-3.png', 'Quality material & finishes'); ?>
                        </div>
                        <div class="flex">
                            <h2 class="text-text-white text-[20px] md:text-[25px] font-medium text-center">
                                Quality material & finishes
                            </h2>
                        </div>
                        <div class="flex">
                            <p class="text-center font-light leading-[1.6] tracking-[-0.16px] text-[#E0E0E1] px-[7%]">
                                We source only the finest materials and finishes available.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- logo 4 -->
                <div class="mx-4">
                    <div data-aos="fade-up" class="flex flex-col gap-5 justify-start items-center h-[320px] md:h-[362px] w-[244px]">
                        <div class="flex">
                            <?php echo renderImage('why-us/logo-4.png', 'Complete project management'); ?>
                        </div>
                        <div class="flex">
                            <h2 class="text-text-white text-[20px] md:text-[25px] font-medium text-center">
                                Complete project management
                            </h2>
                        </div>
                        <div class="flex">
                            <p class="text-center font-light leading-[1.6] tracking-[-0.16px] text-[#E0E0E1] px-[5%]">
                                From concept to completion, we handle all aspects of your renovation project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Review -->
<section class="w-full h-fit font-urbane">
    <div class="container flex flex-col justify-start md:justify-center h-fit px-4 2xl:px-0 pb-10">
        <!-- title -->
        <div class="flex w-3/4 h-fit py-10">
            <h1 class="text-text-white text-[38px] md:text-[50px] xl:text-[65px] leading-[1.1] tracking-[-0.57px] font-medium">
                Don’t take it from us...
            </h1>
        </div>
        <!-- review carousel -->
        <div class="reviews flex flex-row justify-between w-full h-full">
            <div class="mx-2">
                <div class="w-[312px] h-[535px] md:h-[570px] bg-review-bg bg-opacity-20 px-6 py-10 flex flex-col justify-start rounded-[5px]">
                    <!-- name and content -->
                    <div class="flex flex-col h-2/3 items-start gap-4">
                        <h2 class="text-text-white text-[20px] md:text-[25px] leading-[1.1] tracking-[-0.375px] font-medium">
                            Billy Boots
                        </h2>
                        <div class="hidden md:block">
                            <?php echo renderImage('5-star.png', '5 stars review'); ?>
                        </div>
                        <div class="block md:hidden">
                            <?php echo renderImage('5-star-mobile.png', '5 stars review'); ?>
                        </div>
                        <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px]">
                            Amazing customer service! They met every need and was very patient me when I changed my design a few times,
                            would defiantly recommend!!!!
                        </p>
                    </div>
                    <!-- bottom -->
                    <div class="flex flex-col h-1/3">
                        <!-- title -->
                        <div class="flex flex-row h-1/5 w-full justify-between items-center">
                            <div class="flex w-fit border-b-[1px] border-[#728291] h-full items-center pr-4">
                                <p class="text-[#E0E0E1] text-[12px] leading-[1.6] tracking-[-0.12px] font-medium">
                                    Services done
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex w-fit h-full items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M 0,20 L 10,0 L 20,20" stroke="#728291" stroke-width="1" fill="none" />
                                </svg>
                            </div>
                            <!-- rest border -->
                            <div class="flex flex-1 border-b-[1px] border-[#728291] h-full"></div>
                        </div>
                        <!-- bottom buttons -->
                        <div class="flex flex-col gap-[15px] w-full h-4/5 justify-end">
                            <!-- bottom 1 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Tile work installation
                                </p>
                            </div>
                            <!-- bottom 2 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Exterior painting
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2">
                <div class="w-[312px] h-[535px] md:h-[570px] bg-review-bg bg-opacity-20 px-6 py-10 flex flex-col justify-start rounded-[5px]">
                    <!-- name and content -->
                    <div class="flex flex-col h-2/3 items-start gap-4">
                        <h2 class="text-text-white text-[20px] md:text-[25px] leading-[1.1] tracking-[-0.375px] font-medium">
                            Ahmed Bahri
                        </h2>
                        <div class="hidden md:block">
                            <?php echo renderImage('5-star.png', '5 stars review'); ?>
                        </div>
                        <div class="block md:hidden">
                            <?php echo renderImage('5-star-mobile.png', '5 stars review'); ?>
                        </div>
                        <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px]">
                            We received fabulous service at levelop construction Group.
                            The team were happy to assist with our special order and nothing was a problem.

                            We’ll certainly be going back and would highly recommend the helpful team.
                        </p>
                    </div>
                    <!-- bottom -->
                    <div class="flex flex-col h-1/3">
                        <!-- title -->
                        <div class="flex flex-row h-1/5 w-full justify-between items-center">
                            <div class="flex w-fit border-b-[1px] border-[#728291] h-full items-center pr-4">
                                <p class="text-[#E0E0E1] text-[12px] leading-[1.6] tracking-[-0.12px] font-medium">
                                    Services done
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex w-fit h-full items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M 0,20 L 10,0 L 20,20" stroke="#728291" stroke-width="1" fill="none" />
                                </svg>
                            </div>
                            <!-- rest border -->
                            <div class="flex flex-1 border-b-[1px] border-[#728291] h-full"></div>
                        </div>
                        <!-- bottom buttons -->
                        <div class="flex flex-col gap-[15px] w-full h-4/5 justify-end">
                            <!-- bottom 1 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Remodeling
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2">
                <div class="w-[312px] h-[535px] md:h-[570px] bg-review-bg bg-opacity-20 px-6 py-10 flex flex-col justify-start rounded-[5px]">
                    <!-- name and content -->
                    <div class="flex flex-col h-2/3 items-start gap-4">
                        <h2 class="text-text-white text-[20px] md:text-[25px] leading-[1.1] tracking-[-0.375px] font-medium">
                            Allae Bahri
                        </h2>
                        <div class="hidden md:block">
                            <?php echo renderImage('5-star.png', '5 stars review'); ?>
                        </div>
                        <div class="block md:hidden">
                            <?php echo renderImage('5-star-mobile.png', '5 stars review'); ?>
                        </div>
                        <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px]">
                            Great quality and costumer service! Highly recommend! Got the job done asap!!
                        </p>
                    </div>
                    <!-- bottom -->
                    <div class="flex flex-col h-1/3">
                        <!-- title -->
                        <div class="flex flex-row h-1/5 w-full justify-between items-center">
                            <div class="flex w-fit border-b-[1px] border-[#728291] h-full items-center pr-4">
                                <p class="text-[#E0E0E1] text-[12px] leading-[1.6] tracking-[-0.12px] font-medium">
                                    Services done
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex w-fit h-full items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M 0,20 L 10,0 L 20,20" stroke="#728291" stroke-width="1" fill="none" />
                                </svg>
                            </div>
                            <!-- rest border -->
                            <div class="flex flex-1 border-b-[1px] border-[#728291] h-full"></div>
                        </div>
                        <!-- bottom buttons -->
                        <div class="flex flex-col gap-[15px] w-full h-4/5 justify-end">
                            <!-- bottom 1 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Home Renovations
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2">
                <div class="w-[312px] h-[535px] md:h-[570px] bg-review-bg bg-opacity-20 px-6 py-10 flex flex-col justify-start rounded-[5px]">
                    <!-- name and content -->
                    <div class="flex flex-col h-2/4 items-start gap-4">
                        <h2 class="text-text-white text-[20px] md:text-[25px] leading-[1.1] tracking-[-0.375px] font-medium">
                            Jamal El Bahri
                        </h2>
                        <div class="hidden md:block">
                            <?php echo renderImage('5-star.png', '5 stars review'); ?>
                        </div>
                        <div class="block md:hidden">
                            <?php echo renderImage('5-star-mobile.png', '5 stars review'); ?>
                        </div>
                        <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px]">
                            Amazing work very nice character recommended for the services acquired
                        </p>
                    </div>
                    <!-- bottom -->
                    <div class="flex flex-col h-3/4">
                        <!-- title -->
                        <div class="flex flex-row h-1/5 w-full justify-between items-center">
                            <div class="flex w-fit border-b-[1px] border-[#728291] h-full items-center pr-4">
                                <p class="text-[#E0E0E1] text-[12px] leading-[1.6] tracking-[-0.12px] font-medium">
                                    Services done
                                </p>
                            </div>
                            <!-- angle -->
                            <div class="flex w-fit h-full items-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M 0,20 L 10,0 L 20,20" stroke="#728291" stroke-width="1" fill="none" />
                                </svg>
                            </div>
                            <!-- rest border -->
                            <div class="flex flex-1 border-b-[1px] border-[#728291] h-full"></div>
                        </div>
                        <!-- bottom buttons -->
                        <div class="flex flex-col gap-[15px] w-full h-4/5 justify-end">
                            <!-- bottom 1 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Tile Reglazing
                                </p>
                            </div>
                            <!-- bottom 2 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Countertop resurfacing
                                </p>
                            </div>
                            <!-- bottom 3 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Bathtub Replacement
                                </p>
                            </div>
                            <!-- bottom 4 -->
                            <div class="flex w-2/3 py-[10px] px-[15px] rounded-[57px] border-[1.5px] border-[#FAFAFA]">
                                <p class="text-text-white text-[14px] leading-none tracking-[-0.2px] mx-auto">
                                    Remodeling
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bottom contact form -->
<section class="w-full h-fit font-urbane">
    <div class="container flex flex-col lg:flex-row w-full h-full px-4 2xl:px-0 py-10 gap-4">
        <!-- info and image -->
        <div class="flex flex-col w-full lg:w-1/2 h-full">
            <!-- info -->
            <div class="flex flex-col w-full justify-start items-start gap-10 h-fit pb-6">
                <h2 class="text-[38px] md:text-[50px] xl:text-[65px] w-2/3
                     text-text-white font-medium leading-[1.1] tracking-[-0.57px] lg:text-[-0.975px]">
                    Ready to start building your <span class="italic font-light">dream</span> with Levelop?
                </h2>
                <p class="text-[#E0E0E1] text-[20px] md:text-[25px] font-light leading-[1.6] tracking-[-0.25px]">
                    Get in touch today to speak to the experts!
                </p>
            </div>
            <!-- image -->
            <div class="flex w-full h-fit items-center justify-center lg:justify-end overflow-hidden lg:overflow-visible">
                <img src="./dist/assets/images/footer-image.png" alt="bath image" class="hidden md:block w-auto h-auto max-w-none max-h-none rounded-[5px] object-cover lg:object-none object-right">
                <img src="./dist/assets/images/footer-image-mobile.png" alt="bath image" class="block md:hidden w-full h-auto max-w-none max-h-none rounded-[5px] object-cover lg:object-none object-right">
            </div>
        </div>
        <!-- contact form -->
        <div id="contact-form" class="flex flex-col w-full lg:w-1/2 h-full">
            <form class="flex flex-col w-full h-full gap-[55px] text-text-white" action="./components/form.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                <!-- title -->
                <div class="flex w-full justify-start">
                    <p class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px]">
                        Simply fill in your details and your enquiry and we’ll get back to you ASAP!
                    </p>
                </div>
                <!-- form content -->
                <div class="flex flex-col w-full h-full gap-6">
                    <!-- Name and Contact Number -->
                    <div class="flex flex-col lg:flex-row gap-5">
                        <!-- Name Field -->
                        <div class="flex flex-col gap-2 w-full lg:w-1/2">
                            <input type="text" id="name" name="name" placeholder="Your name*" required class="rounded-sm px-4 py-[15px] placeholder:text-[#E0E0E1] placeholder:font-light bg-form-bg">
                        </div>

                        <!-- Contact Number Field -->
                        <div class="flex flex-col gap-2 w-full lg:w-1/2">
                            <input type="tel" id="contact-number" name="contact-number" placeholder="Your contact no.*" required class="rounded-sm px-4 py-[15px] placeholder:text-[#E0E0E1] placeholder:font-light bg-form-bg">
                        </div>
                    </div>
                    <!-- email -->
                    <div class="flex w-full">
                        <input type="text" id="email" name="email" placeholder="Your email*" required class="rounded-sm px-4 py-[15px] placeholder:text-[#E0E0E1] placeholder:font-light bg-form-bg w-full">
                    </div>
                    <!-- Address and Postcode -->
                    <div class="flex flex-col lg:flex-row gap-5">
                        <!-- Address Field -->
                        <div class="flex flex-col gap-2 w-full lg:w-2/3">
                            <input type="text" id="street-address" name="street-address" placeholder="Street address*" required class="rounded-sm px-4 py-[15px] placeholder:text-[#E0E0E1] placeholder:font-light bg-form-bg">
                        </div>

                        <!-- Postcode Field -->
                        <div class="flex flex-col gap-2 w-full lg:w-1/3">
                            <input type="text" id="postcode" name="postcode" placeholder="Postcode*" required class="rounded-sm px-4 py-[15px] placeholder:text-[#E0E0E1] placeholder:font-light bg-form-bg">
                        </div>
                    </div>
                    <!-- room type -->
                    <div class="flex flex-col gap-5 w-full">
                        <h3 class="text-[#E0E0E1] text-base font-light leading-[1.6] tracking-[-0.16px]">
                            What type of renovations are you interested in?
                        </h3>
                        <div class="flex justify-between font-medium leading-[1.6] tracking-[-0.16px]">
                            <!-- Bathroom Option -->
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="room-type" value="Bathroom" required>
                                <span>Bathroom</span>
                            </label>

                            <!-- Kitchen Option -->
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="room-type" value="Kitchen" required>
                                <span>Kitchen</span>
                            </label>

                            <!-- House Option -->
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="room-type" value="House" required>
                                <span>House</span>
                            </label>

                            <!-- Laundry Option -->
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="room_type" value="Laundry" required>
                                <span>Laundry</span>
                            </label>
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="flex w-full">
                        <textarea id="message" name="message" rows="5" placeholder="Type your message here..." class="w-full rounded-sm px-4 py-3 placeholder:text-[#E0E0E1] placeholder:font-light bg-form-bg"></textarea>
                    </div>
                </div>
                <!-- submit button -->
                <div class="flex w-full items-center justify-center">
                    <button type="submit" class="max-w-[420px] w-full  bg-button-bg hover:bg-opacity-60 rounded-[5px] py-[15px] px-[30px]">
                        Submit now
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>

<script src="./dist/scripts/jquery.min.js"></script>
<script src="./dist/scripts/slick.min.js"></script>
<script src="./dist/scripts/app.js"></script>
<!-- AOS library -->
<script>
    AOS.init();
</script>