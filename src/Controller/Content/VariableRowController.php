<?php

namespace App\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class VariableRowController extends AbstractController
{
    function show() : response {
        $columns = [
            [
                'width' => '2-3',
                'content' => [
                    [
                        'type' => 'h1',
                        'text' => 'David Klička',
                        'href' => '',
                    ],
                    [
                        'type' => 'paragraph',
                        'text' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.',
                        'href' => '',
                    ],
                    [
                        'type' => 'button',
                        'text' => 'Learn More',
                        'href' => '#My_work',
                    ],
                ]
            ],
            [
                'width' => '1-3',
                'content' => [
                    [
                        'type' => 'image',
                        'text' => 'image of the author',
                        'href' => 'build/images/author.png',
                    ]
                ]
            ]
        ];

        return $this->render('Content/Block/VariableRow/row.html.twig', ['columns' => $columns]);
    }
}