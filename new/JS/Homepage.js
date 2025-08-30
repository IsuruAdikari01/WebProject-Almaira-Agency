let currentSlide = 0;
const slides = document.querySelectorAll('.slider-images img');
const titles = [
    "Digital Marketing Campaigns",    // Title for Slide 1
    "Content Creation and Branding",  // Title for Slide 2
    "SEO and Search Engine Marketing (SEM)",    // Title for Slide 3
    "Pay-Per-Click (PPC) Advertising",     // Title for Slide 4
    "Influencer Marketing" // Title for Slide 5
];
const descriptions = [
    "We design targeted digital marketing strategies to boost your brand's online presence.",
    "From captivating graphics to compelling copy, we build content that tells your brand’s story. Our creative team ensures your brand’s identity shines across all platforms, building recognition and trust.",
    "Our SEO and SEM services ensure your brand ranks higher in search results, driving organic traffic and visibility. We optimize your content and ads for maximum reach and relevance.",
    "We deliver results-driven PPC campaigns that get your ads in front of the right audience. Whether it's Google Ads or social media platforms, we ensure your budget is well-spent on leads that convert.",
    "We connect your brand with the right influencers to amplify your message. Our network of influencers will endorse your product or service authentically, reaching a wider audience with credibility."
];

// Function to show a specific slide
function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => {
        slide.classList.remove('active');
        slide.style.display = 'none'; // Ensure all slides are hidden
    });

    // Show the selected slide
    slides[index].classList.add('active');
    slides[index].style.display = 'block'; // Display the selected slide

    // Update the text content
    document.getElementById('slider-title').textContent = titles[index];
    document.getElementById('slider-description').textContent = descriptions[index];
}

// Function for the next slide
function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length; // Loop to the first slide after the last one
    showSlide(currentSlide);
}

// Function for the previous slide
function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length; // Loop to the last slide when going backwards
    showSlide(currentSlide);
}

// Initialize the first slide
showSlide(currentSlide);

// Auto-slide every 3 seconds
setInterval(() => {
    nextSlide(); // Move to the next slide automatically
}, 3000); // 3000ms = 3 seconds

//get in touch
document.getElementById("get_In_touch").addEventListener("click",function()
{
    window.location.href = "IWT-project\form-page.php";
});