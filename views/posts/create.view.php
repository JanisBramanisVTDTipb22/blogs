<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Create a Post </h1>
    <form method="POST">
        <label>Title
            <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
            <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"> <?= $errors["title"] ?> </p>
            <?php } ?>
        </label>
        <label>Category_ID
            <select name="cat_id">
                <option value="1">sport</option>
                <option value="2">music</option>
                <option value="3">food</option>
            </select> 
    <?php if (isset($errors["category-id"])) { ?>
        <p class="invalid-data"> <?= $errors["category-id"] ?> </p>
    <?php } ?>
        </label>
        <button>Submit</button>
    </form>
<?php
require "views/components/footer.php";  
?>