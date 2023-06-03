<?php 
 include_once("templates/header.php");
 
 if (isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post ){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
 }
?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="./img/<?=$currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quibusdam sed dolorum natus, voluptatem libero earum perspiciatis praesentium impedit repudiandae magni aliquam aperiam illum repellat, suscipit quidem, aliquid dolore laboriosam?
            Dolor dolorum sequi enim! Suscipit, hic maiores consequuntur doloribus quibusdam quasi ipsum deleniti eaque magnam adipisci magni, nemo dignissimos temporibus saepe consectetur architecto alias iusto quidem quae! Perferendis, harum dolorum.
            Reiciendis aliquam libero inventore sed quae. Mollitia libero neque quidem saepe quos iste, praesentium natus tenetur, eius cumque atque laborum ad odit sunt pariatur? A voluptates ducimus sed suscipit. Quos.
            Commodi ad perspiciatis consequatur voluptatem corporis eum non reiciendis nobis eius vitae, iusto blanditiis, mollitia optio? Officia quod rerum eaque hic dolor obcaecati quisquam ex facere cum, necessitatibus labore impedit?
            Earum pariatur qui labore modi voluptates nihil id esse ipsam officiis iste aliquid voluptatibus cumque adipisci, sapiente voluptate fugit quaerat laudantium unde necessitatibus magnam? Quisquam fugiat vel quos deserunt ipsam.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quibusdam sed dolorum natus, voluptatem libero earum perspiciatis praesentium impedit repudiandae magni aliquam aperiam illum repellat, suscipit quidem, aliquid dolore laboriosam?
            Dolor dolorum sequi enim! Suscipit, hic maiores consequuntur doloribus quibusdam quasi ipsum deleniti eaque magnam adipisci magni, nemo dignissimos temporibus saepe consectetur architecto alias iusto quidem quae! Perferendis, harum dolorum.
            Reiciendis aliquam libero inventore sed quae. Mollitia libero neque quidem saepe quos iste, praesentium natus tenetur, eius cumque atque laborum ad odit sunt pariatur? A voluptates ducimus sed suscipit. Quos.
            Commodi ad perspiciatis consequatur voluptatem corporis eum non reiciendis nobis eius vitae, iusto blanditiis, mollitia optio? Officia quod rerum eaque hic dolor obcaecati quisquam ex facere cum, necessitatibus labore impedit?
            Earum pariatur qui labore modi voluptates nihil id esse ipsam officiis iste aliquid voluptatibus cumque adipisci, sapiente voluptate fugit quaerat laudantium unde necessitatibus magnam? Quisquam fugiat vel quos deserunt ipsam.
        </p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
        <?php foreach($currentPost['tags'] as $tag):?>
            <li><a href="#"><?= $tag ?> </a></li>
        <?php endforeach;?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category):?>
            <li><a href="#"><?= $category ?> </a></li>
        <?php endforeach;?>
    </ul>
</aside>

</main>

<?php 
include_once("templates/footer.php")
?>

