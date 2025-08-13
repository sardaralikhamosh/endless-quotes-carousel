
# 🔄 Endless Quotes Carousel  

**[★ Star this repo]** · 
**[View Live Demo](#live-demo)** · 
**[How to Use](#usage)**  

A **pure CSS**, lightweight, and customizable infinite horizontal carousel for testimonials, quotes, or announcements. Perfect for developers who want a **smooth, zero-JavaScript solution** with seamless looping.  

*(Demo Preview: [Brighton Murder Mystery](https://www.brightonmurdermystery.co.uk))*

## Why Choose This Carousel?  
✅ **No JavaScript** – Runs on CSS animations only  
✅ **Seamless infinite loop** – No awkward gaps between cycles  
✅ **Fully customizable** – Adjust speed, colors, and spacing easily  
✅ **Accessibility-friendly** – Hidden duplicate content for screen readers  
✅ **Under 2KB** – Ultra-lightweight with no dependencies  

## Installation  
### Method 1: Direct Copy-Paste  
1. Add this HTML to your project:  
```html
<div class="infinite-marquee">
    <div class="marquee-content">
        〰️ "Best escape room ever!" – Sarah, Google 〰️ "So much fun!" – Mike, TripAdvisor
    </div>
    <div class="marquee-content" aria-hidden="true">
        〰️ "Best escape room ever!" – Sarah, Google 〰️ "So much fun!" – Mike, TripAdvisor
    </div>
</div>
```

## Add the CSS:
```html
css
.infinite-marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    white-space: nowrap;
}

.marquee-content {
    display: inline-block;
    animation: marquee 30s linear infinite;
    padding-right: 10px;
}

@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
```
Method 2: NPM (Optional)
bash
```html
npm install endless-quotes-carousel
```
Coming soon! [ Star this repo] to get notified when published.

## Customization
Use these CSS variables in your stylesheet for easy theming:

css
:root {
    --marquee-speed: 30s;
    --marquee-spacing: 50px;
    --marquee-text-color: #ffffff;
    --marquee-bg-color: transparent;
}

.infinite-marquee {
    background: var(--marquee-bg-color);
}

.marquee-content {
    animation-duration: var(--marquee-speed);
}

.marquee-content label {
    color: var(--marquee-text-color);
    padding-right: var(--marquee-spacing);
}
##Live Demo
View on CodePen · See it in action on Brighton Murder Mystery

##Contributing
Found a bug or have an idea? Open an issue or submit a PR!

##License
MIT © sardar ali khamosh – Free for personal and commercial use.

<p align="center"> <i>Like this project? Give it a ⭐ and follow me for more frontend gems!</i> </p> ```
