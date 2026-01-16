    </main>
</div>

<script>
    const buttons = document.querySelectorAll(".dropdown-btn");
    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            btn.classList.toggle("active");
            const dropdown = btn.nextElementSibling;
            if (dropdown && dropdown.classList.contains("dropdown")) {
                dropdown.style.display =
                    dropdown.style.display === "block" ? "none" : "block";
            }
        });
    });
</script>

</body>
</html>
