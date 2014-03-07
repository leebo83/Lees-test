<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

  
<div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 1');
			$a->display($c);
			?>
    
    </div>
    
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 2');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 3');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 4');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 5');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 6');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 7');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 8');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 9');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 10');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 11');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 12');
			$a->display($c);
			?>
    
    </div>
    <div class="row galleryrow">
	
    
        	<div class="grid-12 columns">
    <?php  
			$a = new Area('Gallery 13');
			$a->display($c);
			?>
    
    </div>
    
    
	<div class="grid-8 columns">
    <?php  
			$a = new Area('Main');
			$a->display($c);
			?>
    
    </div>
<div class="grid-4 columns">
<?php  
			$a = new Area('sidebar');
			$a->display($c);
			?>
   
    
    
    
    
    
    </div>
    
    	<div class="grid-12 columns">
    <?php  
			$a = new Area('Mainfull');
			$a->display($c);
			?>
    
    </div>

	</div>

    
</div>
	
<?php  $this->inc('elements/footer.php'); ?>
