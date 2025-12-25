<script>
document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".mega-btn").forEach(btn => {
        btn.addEventListener("click", e => {
            e.stopPropagation();

            const parent = btn.closest(".has-mega");

            // Close others
            document.querySelectorAll(".has-mega.open").forEach(item => {
                if (item !== parent) item.classList.remove("open");
            });

            parent.classList.toggle("open");
        });
    });

    // Close on outside click
    document.addEventListener("click", () => {
        document.querySelectorAll(".has-mega.open")
            .forEach(item => item.classList.remove("open"));
    });

});
</script>
