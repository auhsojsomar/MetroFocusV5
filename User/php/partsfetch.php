<?php
	include '../includes/db.php';
	$sql = mysqli_query($con,"SELECT * FROM parts WHERE status = 'Active' AND deleted = 0 ORDER BY id DESC");
	$output = '';
	while($row = mysqli_fetch_array($sql)){
		$id = $row['id'];
		if(isset($_COOKIE['email'])){
			$sql3 = mysqli_query($con,"SELECT * FROM cart WHERE user = '$user' AND item_id = $id AND type = 'Parts'");
			$row3 = mysqli_fetch_array($sql3);
			$quantity = $row['quantity']-$row3['quantity'];
		}
		else{
			$quantity = $row['quantity'];
		}
		$avail = '';
		$class = '';
		if($quantity < 1){
			$avail = 'Out of stock';
			$class = 'has-text-danger';
		}
		else{
			$avail = 'Available';
			$class = 'has-text-success';
		}
		$output .= ' <div class="column is-3 is-narrow">
                        <div class="card" style="min-width: 232px;min-height: 236px;margin-top:20px;">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="../../Admin/php/parts/upload/'.$row['image'].'">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p style="
                                        overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        height: 50px;
                                        max-width: 200px;
                                        margin-top: -15px;
                                        " class="title is-4">'.$row['name'].'</p>
                                        <p style="padding-top: 5;
                                        overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        height: 50px;
                                        max-width: 200px;" class="subtitle is-6">'.$row['brand'].'</p>
                                        <p class="'.$class.'" style="margin-top: -40;
                                        overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        max-width: 200px;" id="'.$row['id'].'" name="availabilty">'.$avail.'</p>
                                        <p class="subtitle has-text-danger" style="margin-top: -10px;
                                        overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        max-width: 200px;">&#8369;'.number_format($row['price'], 2, '.', ',').'</p>
                                        <input type="hidden" name="id" value="'.$row['id'].'">
                                        <a class="button button is-warning" href="partsitempage.php?item='.$row['id'].'">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>';
	}
	$final = array(
		"parts" => $output
	);
	echo json_encode($final);
?>