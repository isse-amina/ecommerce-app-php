<?php
    session_start();
?>
<?php
    include_once 'includes/dbh.inc.php'; 
    $substring = $_POST['searchedSubstring'];
    $include_header = true; 
    if ($substring != "") {
        $sql = "SELECT * FROM Products WHERE title LIKE '%$substring%' OR category LIKE '%$substring%';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        if ($include_header) {
?>
<h4>Search Results</h4>
<style>
    .search__results {
        border: 1px solid #C0C0C0; 
        border-top: 0; 
    }
</style>
<?php
            $include_header = false; 
        }
        if ($resultCheck == 0) {
?>
<p class="no__results">No results.<p>
<?php
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $link = 'product-page.php?title='.urlencode($row['title']);
?>
<div>
    <a href="<?php echo $link?>">
        <img src="<?php echo $row['image1']?>">
        <span>
            <p class="search__product"><?php echo $row['title']?></p>
            <p class="search__brand">Brand: <?php echo $row['category']?></p>
        </span>
    </a>
</div>
<?php
        }
    }
?>

<style>
    .search__results h4 {
        text-align: center; 
    }

    .search__results div a {
        display: flex; 
    }

    .search__results img {
        width: 75px;
        height: 125px;
        object-fit: cover; 
        border: 1px solid #E0E0E0; 
        border-radius: 5px; 
        background-color: white; 
        margin: 10px; 
    }

    .search__results div a:hover {
        background-color: #E0E0E0; 
    }

    .no__results {
        margin: 10px; 
        font-weight: 700; 
    }

    .search__product {
        margin-bottom: 5px; 
    }

    .search__brand {
        font-size: 12px;
        color: #58595b; 
        margin: 0; 
    }
</style>