<?php
    function get_method($method){//収入と支出を判定するjudgemethod関数
        if($method == 1) {
            print '支出';//1であれば支出
        } else {//1でない場合
            print '収入';//収入
        }
    } 

    function get_category($category){//カテゴリを判定する為のjudgecategory関数（仮）
    //$categoryに割り当てられた数字からカテゴリを判断し、表示する
        switch($category){
            case 0:
                return '食費';
                break;
            case 1:
                return '交際費';
                break;
            case 2:
                return 'ゲーム';
                break;
            case 3;
                return '収入';
                break;
        }
    }

    function set_html_tag(str $title) {
        echo '<!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <title>'.$title.'</title>
        </head>
        <body>';
    }