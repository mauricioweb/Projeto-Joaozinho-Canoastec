<?php
use \RicardoKovalski\classes\status\factory\FactoryStatus;
?>
<div class="container">
    <div class="page-header">    
		<?php
		if(isset($_POST['pesquisar'])){

			$status = $_POST['status'];	

			$factoryStatus = FactoryStatus::create($status);
		}
		?>
		<form method="post">
		    <label for="exampleInputPassword1">Categoria do Status</label>
		    <select name='status' class="form-control">
		        <option value="">Selecione um status</option>
		        <option value="A" <?php if(!isset($_POST['pesquisar'])){ echo 'A'; }else if(isset($_POST['pesquisar']) && $_POST['status'] == 'A' || $factoryStatus == 'A') { echo 'selected'; }?>>A</option>
		        <option value="B" <?php if(!isset($_POST['pesquisar'])){ echo 'B'; }else if(isset($_POST['pesquisar']) && $_POST['status'] == 'B' || $factoryStatus == 'B') { echo 'selected'; }?>>B</option>
		        <option value="C" <?php if(!isset($_POST['pesquisar'])){ echo 'C'; }else if(isset($_POST['pesquisar']) && $_POST['status'] == 'C' || $factoryStatus == 'C') { echo 'selected'; }?>>C</option>
		        <option value="D" <?php if(!isset($_POST['pesquisar'])){ echo 'D'; }else if(isset($_POST['pesquisar']) && $_POST['status'] == 'D' || $factoryStatus == 'D') { echo 'selected'; }?>>D</option>
		        <option value="E" <?php if(!isset($_POST['pesquisar'])){ echo 'E'; }else if(isset($_POST['pesquisar']) && $_POST['status'] == 'E' || $factoryStatus == 'E') { echo 'selected'; }?>>E</option>
		        <option value="F" <?php if(!isset($_POST['pesquisar'])){ echo 'F'; }else if(isset($_POST['pesquisar']) && $_POST['status'] == 'F' || $factoryStatus == 'F') { echo 'selected'; }?>>F</option>
	        </select>
	        <br>
	        <p class="text-right">
	        	<button class="btn btn-info" type="submit" name="pesquisar">Pesquisar</button>
	    	</p>
		</form>

		<?php if(isset($_POST['pesquisar'])){ ?>
		<div class="alert alert-success" role="alert">
			<?php
			echo $factoryStatus->getStatus();
			?>
		</div>
		<?php } ?>		   	
	</div>
</div>