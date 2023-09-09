<?php
            $sql='SELECT * FROM `models`';
            $res=mysqli_query($conn,$sql);
            while($model=$res->fetch_assoc()){
            $model_name=$model['brand'];
            echo"<a class='dropdown-item' href='#'>$model_name</a>";
               } 
           ?>

<div class="form-group">
					    <label>Release_date</label>
					    <input type="number" class="form-control" placeholder="Age Here" id="release_date">
					 </div>         

           <select id="country" class="form-control">
                        <option value="">country</option>
                        <?php
                            foreach($countries as $country){
                                echo '<option value="'.$country['id'].'">'.$country['brand'].'</option>';
                            }
                        ?>
                    </select>


                <!-- <?php
       $sql='SELECT * FROM `models`';
       $res=mysqli_query($conn,$sql);
       $relative="assets/bikes/";
       while($model=$res->fetch_assoc()){
       $model_name=$model['brand'];
       $img=$model['image'];
       echo"<div>
       <img src='$relative$img' alt=''/>
            <h4>$model_name</h4>
          </div>";
          } 
      ?> -->