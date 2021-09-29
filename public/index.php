<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use \Hillel\Models\Category;
use \Hillel\Models\Post;
use \Hillel\Models\Tag;

$data = [
    'title' => 'HTML1',
    'slug' => 'HTML-html'
];

$categoryHtml = Category::create($data);

$categoryPhp = new Category();
$categoryPhp->title = 'PHP';
$categoryPhp->slug = 'PHP-php';
$categoryPhp->save();

$categoryJs = new Category();
$categoryJs->title = 'JS';
$categoryJs->slug = 'JavaScript-Javascript';
$categoryJs->save();

$categoryMysql = new Category();
$categoryMysql->title = 'MySQL';
$categoryMysql->slug = 'MySQL-Mysql';
$categoryMysql->save();

$categoryMongodb = new Category();
$categoryMongodb->title = 'MongoDB';
$categoryMongodb->slug = 'MongoDB-Mongodb';
$categoryMongodb->save();

$category = Category::find(5);

if ($category) {
    $category->title = 'PostgreSQL';
    $category->slug = 'PostgreSql';
    $category->save();
}

$category = Category::find(5);

if ($category) {
    $category->delete();
}

$postLorem = new Post();
$postLorem->title = 'Lorem';
$postLorem->slug = 'Lorem-lorem';
$postLorem->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postLorem->category_id = 1;
$postLorem->save();

$postIpsum = new Post();
$postIpsum->title = 'Ipsum';
$postIpsum->slug = 'Ipsum-ipsum';
$postIpsum->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postIpsum->category_id = 2;
$postIpsum->save();

$postDolor = new Post();
$postDolor->title = 'Dolor';
$postDolor->slug = 'Dolor-dolor';
$postDolor->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postDolor->category_id = 2;
$postDolor->save();

$postSit = new Post();
$postSit->title = 'Sit';
$postSit->slug = 'Sit-sit';
$postSit->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postSit->category_id = 1;
$postSit->save();

$postAmet = new Post();
$postAmet->title = 'Amet';
$postAmet->slug = 'Amet-amet';
$postAmet->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postAmet->category_id = 3;
$postAmet->save();

$postConsectetur = new Post();
$postConsectetur->title = 'Consectetur';
$postConsectetur->slug = 'Consectetur-consectetur';
$postConsectetur->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postConsectetur->category_id = 4;
$postConsectetur->save();

$postAdipiscing = new Post();
$postAdipiscing->title = 'Adipiscing';
$postAdipiscing->slug = 'Adipiscing-adipiscing';
$postAdipiscing->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postAdipiscing->category_id = 4;
$postAdipiscing->save();

$postElit = new Post();
$postElit->title = 'Elit';
$postElit->slug = 'Elit-elit';
$postElit->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postElit->category_id = 4;
$postElit->save();

$postSed = new Post();
$postSed->title = 'Sed';
$postSed->slug = 'Sed-sed';
$postSed->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postSed->category_id = 3;
$postSed->save();

$postDo = new Post();
$postDo->title = 'Do';
$postDo->slug = 'Do-do';
$postDo->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.';
$postDo->category_id = 2;
$postDo->save();

$postDo = Post::find(9);

if ($postDo) {
    $postDo->title = 'Done';
    $postDo->slug = 'Done-done';
    $postDo->body = 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.';
    $postDo->category_id = 3;
    $postDo->save();
}

$postDo = Post::find(9);

if ($postDo) {
    $postDo->delete();
}

$tagEiusmod = new Tag();
$tagEiusmod->title = 'Eiusmod';
$tagEiusmod->slug = 'Eiusmod-eiusmod';
$tagEiusmod->save();

$tagTempor = new Tag();
$tagTempor->title = 'Tempor';
$tagTempor->slug = 'Tempor-tempor';
$tagTempor->save();

$tagIncididunt = new Tag();
$tagIncididunt->title = 'Incididunt';
$tagIncididunt->slug = 'Incididunt-incididunt';
$tagIncididunt->save();

$tagUt = new Tag();
$tagUt->title = 'Ut';
$tagUt->slug = 'Ut-ut';
$tagUt->save();

$tagLabore = new Tag();
$tagLabore->title = 'Labore';
$tagLabore->slug = 'Labore-labore';
$tagLabore->save();

$tagEt = new Tag();
$tagEt->title = 'Et';
$tagEt->slug = 'Et-et';
$tagEt->save();

$tagDolore = new Tag();
$tagDolore->title = 'Dolore';
$tagDolore->slug = 'Dolore-dolore';
$tagDolore->save();

$tagMagna = new Tag();
$tagMagna->title = 'Magna';
$tagMagna->slug = 'Magna-magna';
$tagMagna->save();

$tagAliqua = new Tag();
$tagAliqua->title = 'Aliqua';
$tagAliqua->slug = 'Aliqua-aliqua';
$tagAliqua->save();

$tagUt = new Tag();
$tagUt->title = 'Ut';
$tagUt->slug = 'Ut-ut';
$tagUt->save();

$postsAll = Post::all();
foreach ($postsAll as $post) {
    $postsRnd = Post::inRandomOrder()->limit(3)->get();
    $postsID = $postsRnd->pluck('id')->toArray();
    $post->tags()->attach($postsID);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home work 10</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <?php $posts = Post::all(); ?>
            <?php foreach ($posts as $post): ?>
                <div class="card mt-2" style="width: 60rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post->title ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $post->slug ?></h6>
                        <p class="card-text"><?= $post->body ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created at <?= $post->created_at ?></small>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</body>
</head>
</html>
