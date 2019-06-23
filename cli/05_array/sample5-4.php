<?php


$maker = ['ランサーズ', 'AWS', 'クラウドワークス'];
$type = ['writer', 'engineer'];

$pc[] = $maker;
$pc[] = $type;

// array in array (２次元配列)
//var_dump($pc);
//print_r($pc);

// array in array in array(3次元配列)


// JSONの場合 https://jsonformatter.curiousconcept.com/
/**

[  
   [  
      "ランサーズ",
      "AWS",
      "クラウドワークス"
   ],
   [  
      "Writer",
      "engineer"
   ]
]

*/

$work = [];
$work['title'] = 'しごとタイトル';
$work['categoryIds'] = [1,23,54];
$work['client'] = [
    'name' => 'Sony'
];
$work['description'] = 'はじめて依頼します。"新製品"についての依頼です';
print_r($work);

print("========");

$json = json_encode($work, JSON_UNESCAPED_UNICODE);
print_r($json);


// $works = [
//     {  
//         "title":"しごとタイトル",
//         "categoryIds":[1,23,54],
//         "client":{
//             "name":"Sony"
//         },
//         "desctiption": "はじめて依頼します。\"新製品\"についての依頼です"    
//     },
//     {  
//         "title":"しごとタイトル2",
//         "categoryIds":[1,23,54],
//         "client":{
//             "name":"Sony"
//         },
//         "desctiption": "はじめて依頼します。\"新製品\"についての依頼です"    
//     }
// ]

// $works = 
// {
//     "/work_1": {  
//         "title":"しごとタイトル",
//         "categoryIds":[1,23,54],
//         "client":{
//             "name":"Sony"
//         },
//         "desctiption": "はじめて依頼します。\"新製品\"についての依頼です"    
//     },
// }

// $work =     
// {  
//     "title":"しごとタイトル",
//     "categoryIds":[1,23,54],
//     "client":{
//         "name":"Sony"
//     },
//     "desctiption": "はじめて依頼します。\"新製品\"についての依頼です"    
// }


?>