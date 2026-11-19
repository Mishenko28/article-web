{{-- GLOBAL SCRIPT --}}

{{-- bootsrap cdn --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"></script>
{{-- sweetalert cdn --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


{{-- sidebar toggle --}}
<script>
    const sidebar = document.querySelector(".sidebar");
    const sidebarToggleBtns = document.querySelectorAll(".sidebar-toggle");

    sidebarToggleBtns.forEach((element) => {
        element.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed-sidebar");
        });
    });
</script>
