<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1>Create posts</h1>

    <form method="POST">
        <label>Title:
            <input name="adrians"/>
        </label>
        <button>save</button>
        <label>Category ID:
            <input name="category-id"/>
        </label>
        <button>submit</button>
    </form>

    <ul>
        <li>1. sport</li>
        <li>2. music</li>
        <li>3. food</li>
    </ul>
<?php
require "components/footer.php";  
?>