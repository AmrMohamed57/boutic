<form action="fun/product/insert.php" method="POST" enctype="multipart/form-data">


    <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="number" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="count" style="font-weight: bold;">count :</label>
        <input type="number" class="form-control" name="count">
    </div>
    <div class="form-group">
        <label for="image" style="font-weight: bold;">image :</label>
        <input type="file" name="image[]" multiple>
    </div>


    <div class="form-group">
        <label for="categroy" style="font-weight: bold;">categroy :</label>
        <select name="categroy" id="" class="form-control" >
            <?php
                include('fun/conn.php');
                $select_cat="SELECT * FROM category";
                $reslut_cat = $conn -> query($select_cat);

                while( $cat = $reslut_cat -> fetch_assoc()){
            ?>

            <option value="<?= $cat['id'] ?>"> <?= $cat['name'] ?> </option>
            <?php
                };
            ?>

        </select>
    </div>




    
    <div class="form-group">
        <label for="brand" style="font-weight: bold;"> brand :</label>
        <select name="brand" id="" class="form-control" >
            <?php
                $select_brand="SELECT * FROM brand";
                $reslut_brand = $conn -> query($select_brand);
                while( $brand = $reslut_brand -> fetch_assoc()){
              
            ?>

            <option value="<?= $brand['id']?>"><?= $brand['name']?></option>
            <?php
                };
            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="des" style="font-weight: bold;">description :</label>
        <textarea name="des" style="height: 100px;" class="form-control"></textarea>
    
    </div>
    <button type="submit" class="btn btn-success form-control">Add Product</button>
    
    
</form>