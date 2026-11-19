{{-- GLOBAL CSS --}}

{{-- google fonts --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
</style>


<style>
    * {
        font-family: Inter;
    }

    body {
        background-color: var(--bs-light-bg-subtle);
    }

    .nav-item .active {
        color: var(--bs-primary) !important;
    }

    .font-title {
        font-family: Fraunces;
    }

    .hover-zoom:hover {
        transform: scale(1.04);
        transition: transform 0.2s ease;
    }

    .article-card .category-label,
    .featured-article .category-label {
        letter-spacing: 0.16em;
    }

    .article-card .avatar,
    .featured-article .avatar {
        width: 35px;
        height: 35px;
        flex-shrink: 0;
    }

    .intro-section .intro-title {
        letter-spacing: 0.16em;
    }

    .intro-section .subtitle {
        max-width: 800px;
    }

    .intro-section .subtitle-2 {
        max-width: 620px;
    }
</style>
