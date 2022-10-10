<?php

namespace App\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    function showArticleRow () : response {
        $articles = [
            [
                'name' => 'Project number 1',
                'perex' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed.',
                'thumbnail' => 'build/images/project-image.png'
            ],
            [
                'name' => 'Project number 2',
                'perex' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed.',
                'thumbnail' => 'build/images/project-image.png'
            ],
            [
                'name' => 'Project number 3',
                'perex' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed.',
                'thumbnail' => 'build/images/project-image.png'
            ],
            [
                'name' => 'Project number 4',
                'perex' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed.',
                'thumbnail' => 'build/images/project-image.png'
            ],
            [
                'name' => 'Project number 5',
                'perex' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed.',
                'thumbnail' => 'build/images/project-image.png'
            ],
            [
                'name' => 'Project number 6',
                'perex' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed.',
                'thumbnail' => 'build/images/project-image.png'
            ],
        ];

        return $this->render('Content/Block/Article/row.html.twig', [ 'articles' => $articles]);
    }
}