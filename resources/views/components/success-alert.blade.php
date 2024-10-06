@if (session('success'))
    <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
@endif


<style>
    #success-alert {
        transition: opacity 0.5s ease; /* Smooth transition */
        cursor: pointer; /* Change cursor to pointer */
    }
</style>

<script>
    // Hide the alert after 10 seconds
    setTimeout(() => {
        const alert = document.getElementById('success-alert');
        alert.style.opacity = '0'; // Fade out effect
        setTimeout(() => {
            alert.style.display = 'none'; // Hide after fade out
        }, 500); // Match with the duration of the opacity transition
    }, 10000); // 10 seconds in milliseconds
</script>
