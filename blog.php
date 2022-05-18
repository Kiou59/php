<?php

Use App\Blog\Article;
Use App\Blog\Category;

require __DIR__.'/vendor/autoload.php';

$categories = [
new Category(1, 'foo', null),
new Category(2, 'bar', null),
new Category(3, 'baz', null)];
dump($categories);

$articles = [
    new Article(1,'lorem','ipsum',$categories[0]),
    new Article(2,'ipsum','lorem', $categories[1]),
    new Article(3, 'pekat','lorem ipsum', $categories[1])
];
dump($articles);

foreach($articles as $article){
    echo $article ->getTitle();
    echo '<br>';
    echo $article->getCategory()->getName();
    echo '<br>';

    foreach($category->getArticles()as $article){
        echo "same category title :{$article->getTitle()}";
    }
}

