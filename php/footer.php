</div>
   
    <!-- 
    
        jQuery & Bootstrap
                 
    -->
    
	<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
    
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- 
    
        Insert > Script
            Choose the js/main.js file
                Click Open
                 
    -->
    <script type="text/javascript" src="js/main.js"></script>
     <script>
        $('#nav--main > ul > li a[href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>"]').parent().addClass('active');
    </script>
</body>
</html>