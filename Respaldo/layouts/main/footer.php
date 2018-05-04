</main>
<footer class="footer">
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
	<?php foreach ($core->external_scripts as $file) {  ?>
    <script src="<?php echo $file; ?>"></script>	
	<?php  } ?>
	<?php foreach ($core->scripts as $file) {  ?>
    <script src="/js/<?php echo $file; ?>.js"></script>	
	<?php  } ?>
  </body>
</html>
