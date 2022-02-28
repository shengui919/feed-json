<?php
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'status' => 'success',
    'feeds' => [
        [
            'id' => 1,
            'link' => 'https://google.com',
            'image' => 'https://raw.githubusercontent.com/shengui919/feed-json/master/item.png',
            'date' => 'February 28, 2022',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
tempore explicabo perspiciatis aspernatur quae quia mollitia quasi?
Accusamus, tempore? Sit nihil ab nostrum dicta dolorum, aliquid est?
Praesentium, modi quod. Dicta vel exercitationem accusamus, illo
cupiditate, explicabo ea deserunt repellat doloremque praesentium eos
perferendis aliquid corrupti, voluptates tempora amet magnam odit
ipsam dignissimos sequi unde totam laboriosam. Magnam, hic temporibus.
Optio ab assumenda, odit incidunt impedit sint excepturi ratione
laborum. Quod animi consequatur officiis adipisci amet laudantium
voluptas vitae nulla ratione itaque, ex eos voluptatem tempora modi
distinctio voluptatum suscipit?',
            'tags' => [
                ['title' => 'Event', 'link' => 'https://google.com'],
                ['title' => 'Event1', 'link' => 'https://google.com']
            ],
            'commentCount' => 23,
            'commentLink' => 'https://google.com',
            'pinned' => false
        ],
        [
            'id' => 2,
            'link' => 'https://google.com',
            'image' => 'https://raw.githubusercontent.com/shengui919/feed-json/master/item.png',
            'date' => 'February 27, 2022',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
tempore explicabo perspiciatis aspernatur quae quia mollitia quasi?
Accusamus, tempore? Sit nihil ab nostrum dicta dolorum, aliquid est?
Praesentium, modi quod. Dicta vel exercitationem accusamus, illo
cupiditate, explicabo ea deserunt repellat doloremque praesentium eos
perferendis aliquid corrupti, voluptates tempora amet magnam odit
ipsam dignissimos sequi unde totam laboriosam. Magnam, hic temporibus.
Optio ab assumenda, odit incidunt impedit sint excepturi ratione
laborum. Quod animi consequatur officiis adipisci amet laudantium
voluptas vitae nulla ratione itaque, ex eos voluptatem tempora modi
distinctio voluptatum suscipit?',
            'tags' => [
                ['title' => 'Event', 'link' => 'https://google.com']
            ],
            'commentCount' => 21,
            'commentLink' => 'https://google.com',
            'pinned' => true
        ]
    ]
]);
