<!-- </main> -->
<?php session_start(); ?>
<footer class="main_footer">
    <section class="footer__section">

    <?php if(isset($_SESSION['u_name'])){
        echo '<p id="footer_logo">',strtoupper($_SESSION['u_name']),'</p>';
    }else{ ?>
    <p id="footer_logo">CUSTOMATE</p>
<?php } ?>
    </section>
</footer>
<script src="JS/horizontal-scroll.js"></script>
</body>
</html>
