<div class="search-box">
    <input type="search" onkeyup="searchs()" class="search-input" placeholder="search user">
</div>

<ul class="users-ul-list all-users-box display-none">
    <?php
        include "../php/show-users.php";
    ?>
</ul>

<script src="../js/search.js"></script>