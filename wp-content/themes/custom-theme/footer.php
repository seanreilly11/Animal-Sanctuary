<footer class="p-5 bg-dark text-light">
    <div class="d-flex justify-content-around align-items-center">
        <p class="mb-0">&copy; 2020 Sean Reilly</p>
        <div class="footer-menu">
            <?php if(is_active_sidebar('footer-sidebar')) :
                dynamic_sidebar('footer-sidebar');
            endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>