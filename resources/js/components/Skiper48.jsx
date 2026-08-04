import React from 'react';
import { motion } from 'framer-motion';
import { ChevronLeftIcon, ChevronRightIcon } from 'lucide-react';
import { Autoplay, EffectCards, Navigation, Pagination } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css/effect-cards';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import 'swiper/css';

const slideImages = [
    { src: '/images/slide1.jpg', alt: 'Neon stage crowd and DJ booth' },
    { src: '/images/slide2.jpg', alt: 'Festival lights and dancing crowd' },
    { src: '/images/slide3.jpg', alt: 'Beachside night performance with lights' },
    { src: '/images/slide4.jpg', alt: 'Artist with illuminated background' },
    { src: '/images/slide5.jpg', alt: 'Live set with glowing blue lights' },
    { src: '/images/slide6.jpg', alt: 'Outdoor DJ booth on the beach' },
    { src: '/images/slide7.jpg', alt: 'Cinematic abstract festival scene' },
    { src: '/images/slide8.jpg', alt: 'Energy-filled crowd with neon accents' },
    { src: '/images/slide9.jpg', alt: 'Dark stage with bright light beams' },
    { src: '/images/slide10.jpg', alt: 'Music performance with animated crowd' },
    { src: '/images/slide11.jpg', alt: 'Festival art and light installation' },
    { src: '/images/slide12.jpg', alt: 'Beach festival skyline at night' },
];

const Skiper48 = () => {
    return (
        <div className="flex w-full items-center justify-center overflow-hidden">
            <Carousel_002 images={slideImages} loop autoplay showPagination={false} showNavigation={true} />
        </div>
    );
};

const Carousel_002 = ({
    images,
    className = '',
    showPagination = false,
    showNavigation = false,
    loop = true,
    autoplay = false,
    spaceBetween = 40,
}) => {
    return (
        <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.3, delay: 0.2 }}
            className={`relative w-full max-w-full sm:max-w-3xl ${className}`}
        >
            <Swiper
                spaceBetween={spaceBetween}
                autoplay={autoplay ? { delay: 1200, disableOnInteraction: false } : false}
                effect="cards"
                grabCursor
                loop={loop}
                pagination={showPagination ? { clickable: true } : false}
                navigation={showNavigation ? { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' } : false}
                className="Carousal_002 h-[320px] sm:h-[380px] w-[240px] sm:w-[260px]"
                modules={[EffectCards, Autoplay, Pagination, Navigation]}
            >
                {images.map((image, index) => (
                    <SwiperSlide key={index} className="rounded-3xl overflow-hidden">
                        <img className="h-full w-full object-cover" src={image.src} alt={image.alt} />
                    </SwiperSlide>
                ))}
                {showNavigation && (
                    <div>
                        <div className="swiper-button-next after:hidden">
                            <ChevronRightIcon className="h-6 w-6 text-white" />
                        </div>
                        <div className="swiper-button-prev after:hidden">
                            <ChevronLeftIcon className="h-6 w-6 text-white" />
                        </div>
                    </div>
                )}
            </Swiper>
        </motion.div>
    );
};

export { Skiper48, Carousel_002 };