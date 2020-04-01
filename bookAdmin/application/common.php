<?php
function node_merge($data,$pid=0){
    $arr=[];
    foreach($data as $item){
        if($item['pid']==$pid){
            $item['child']=node_merge($data,$item['id']);
            $arr[]=$item;
        }
    }
    return $arr;
}
