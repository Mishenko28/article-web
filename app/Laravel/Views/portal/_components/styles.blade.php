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

    .font-title {
        font-family: Fraunces;
    }

    .main {
        height: 100svh;
    }

    .sidebar .active {
        background-color: var(--bs-primary);
        color: var(--bs-light) !important;
    }

    .sidebar {
        max-width: 260px;
        transition: all 0.3s ease-in-out;
        overflow: hidden;
        z-index: 1021;
    }

    .collapsed-sidebar {
        width: 0% !important;
        padding-inline: 0 !important;
    }

    .sidebar-toggle {
        width: 36px;
        height: 36px;
    }

    header .avatar {
        width: 40px;
        height: 40px;
        flex-shrink: 0;
    }

    .avatar-image-sm {
        aspect-ratio: 1;
        max-width: 100px;
    }

    .avatar-image-lg {
        aspect-ratio: 1;
        max-width: 200px;
    }

    @media (max-width: 768px) {
        .sidebar {
            position: fixed;
        }
    }
</style>
