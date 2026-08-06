import React from 'react';

/**
 * FaqCard
 * Reusable card for a single FAQ item.
 */
export const FaqCard = ({ question, answer }) => {
  return (
    <div className="flex flex-col items-start gap-4 p-6 bg-surface-container-low border border-outline-variant/30 rounded-xl shadow-lg w-96 flex-shrink-0 faq-card">
      <h3 className="text-headline-md text-primary faq-title">{question}</h3>
      <p className="text-body-md text-on-surface-variant faq-answer">{answer}</p>
    </div>
  );
};

/**
 * HorizontalScroller
 * Wraps children and creates a seamless horizontal looping animation.
 */
export const HorizontalScroller = ({ children, speed = '40s', direction = 'left' }) => {
  const animationClass =
    direction === 'right' ? 'animate-scroll-horizontal-reverse' : 'animate-scroll-horizontal';

  // Inline style to set the CSS custom property for scroll duration.
  const style = { '--scroll-duration': speed };

  return (
    <div className="w-full overflow-hidden group relative scroller-mask">
      <div className={`flex ${animationClass}`} style={style}>
        <div className="flex items-stretch justify-center flex-shrink-0 gap-8 px-4">
          {children}
        </div>
        {/* duplicate for seamless loop */}
        <div className="flex items-stretch justify-center flex-shrink-0 gap-8 px-4" aria-hidden="true">
          {children}
        </div>
      </div>
    </div>
  );
};

/**
 * FaqSection
 * Assembles title, subtitle, and multiple horizontal rows.
 */
const FaqSection = ({ data }) => {
  return (
    <div className="relative flex flex-col items-center gap-12 p-10 w-full max-w-6xl mx-auto">
      <div className="flex flex-col items-center gap-6 text-center z-10 max-w-2xl">
        <h2
          className="text-headline-lg font-bold text-primary neon-text-primary uppercase leading-tight"
          style={{ opacity: 0, animation: 'fadeInUp 0.7s ease-out 0.2s forwards' }}
        >
          {data.mainTitle}
        </h2>
        <p
          className="text-body-lg text-on-surface-variant"
          style={{ opacity: 0, animation: 'fadeInUp 0.7s ease-out 0.4s forwards' }}
        >
          {data.mainSubtitle}
        </p>
      </div>

      <div className="flex flex-col gap-8 z-10 w-full">
        {data.rows.map((row) => (
          <HorizontalScroller key={row.id} speed={row.speed} direction={row.direction}>
            {row.faqItems.map((item) => (
              <FaqCard key={item.id} question={item.question} answer={item.answer} />
            ))}
          </HorizontalScroller>
        ))}
      </div>
    </div>
  );
};

export default FaqSection;
