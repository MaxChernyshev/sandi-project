{{-- TODO JS script to hide errors or messages div --}}

<script>
    function hideMessage() {
        let x = document.getElementById("successOrError");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    };
</script>
</body>
</html>
