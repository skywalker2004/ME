import AOS from 'aos';
import 'aos/dist/aos.css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

AOS.init({
    duration: 1000,
    once: true,
    disable: 'prefers-reduced-motion',
});

document.addEventListener('DOMContentLoaded', () => {
    // Parallax for hero section
    gsap.to('.hero-bg', {
        scrollTrigger: {
            trigger: '.hero-bg',
            scrub: true,
            start: 'top top',
            end: 'bottom top',
        },
        yPercent: 30,
        ease: 'none',
    });

    // Micro-interactions for buttons
    document.querySelectorAll('.cta-button').forEach(button => {
        button.addEventListener('mouseenter', () => gsap.to(button, { scale: 1.05, duration: 0.3, ease: 'power2.out', brightness: 1.1 }));
        button.addEventListener('mouseleave', () => gsap.to(button, { scale: 1, duration: 0.3, ease: 'power2.out', brightness: 1 }));
        button.addEventListener('click', () => gsap.to(button, { scale: 0.95, duration: 0.2, ease: 'power2.inOut', brightness: 0.9 }));
    });

    // Card hover effects
    document.querySelectorAll('.project-card, .testimonial-card').forEach(card => {
        card.addEventListener('mouseenter', () => gsap.to(card, { scale: 1.02, boxShadow: '0 10px 20px rgba(0,0,0,0.2)', duration: 0.3, ease: 'power2.out' }));
        card.addEventListener('mouseleave', () => gsap.to(card, { scale: 1, boxShadow: '0 4px 6px rgba(0,0,0,0.1)', duration: 0.3, ease: 'power2.out' }));
    });

    // Skill icon hover animation
    document.querySelectorAll('.skill-icon').forEach(icon => {
        icon.addEventListener('mouseenter', () => gsap.to(icon, { scale: 1.1, rotation: 10, duration: 0.3, ease: 'power2.out' }));
        icon.addEventListener('mouseleave', () => gsap.to(icon, { scale: 1, rotation: 0, duration: 0.3, ease: 'power2.out' }));
    });

    // Theme toggle animation
    const toggle = document.getElementById('theme-toggle');
    if (toggle) {
        toggle.addEventListener('click', () => {
            gsap.to(document.documentElement, { duration: 0.5, opacity: 0.8, ease: 'power2.inOut', onComplete: () => {
                document.documentElement.classList.toggle('dark');
                localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
                gsap.to(document.documentElement, { duration: 0.5, opacity: 1 });
            }});
        });
        if (localStorage.getItem('theme') === 'dark') document.documentElement.classList.add('dark');
    }

    // Scroll to top button animation
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener('click', () => {
            gsap.to(window, { duration: 1, scrollTo: 0, ease: 'power2.out' });
        });
        window.addEventListener('scroll', () => {
            gsap.to(scrollToTopBtn, { duration: 0.3, opacity: window.scrollY > 400 ? 1 : 0, display: window.scrollY > 400 ? 'block' : 'none' });
        });
    }

    // Animate nav links on hover
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('mouseenter', () => gsap.to(link, { y: -2, duration: 0.3, ease: 'power2.out' }));
        link.addEventListener('mouseleave', () => gsap.to(link, { y: 0, duration: 0.3, ease: 'power2.out' }));
    });
});
