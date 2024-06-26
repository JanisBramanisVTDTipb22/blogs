<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Edit a Post </h1>
    <form method="POST">
        <input name="id" value="<?= $post["id"] ?>" type="hidden"/>
        <label>Title:
            <input name="title" value="<?= $post["title"] ?? "" ?>"/>
            <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"> <?= $errors["title"] ?> </p>
            <?php } ?>
        </label>
        <label>Category_ID
            <select name="category_id">
                <option value="1" <?= ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : "" ?>>sport</option>
                <option value="2" <?= ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : "" ?>>music</option>
                <option value="3" <?= ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : "" ?>>food</option>
            </select> 
    <?php if (isset($errors["category-id"])) { ?>
        <p class="invalid-data"> <?= $errors["category-id"] ?> </p>
    <?php } ?>
        </label>
        <button>Edit</button>
    </form>
<?php
require "views/components/footer.php";  
?>