<?php
use Illuminate\Database\Seeder;
class SystemSeeder extends Seeder{

    public function run(){
        $config = [
            [
                'cate'=>1,
                'system_key'=>'title',
                'system_value'=>'网站标题'
            ],
            [
                'cate'=>1,
                'system_key'=>'subheading',
                'system_value'=>'副标题'
            ],
            [
                'cate'=>1,
                'system_key'=>'put_on_record',
                'system_value'=>'国安 00009'
            ],
            [
                'cate'=>1,
                'system_key'=>'all_ow_access',
                'system_value'=>1
            ],
            [
                'cate'=>1,
                'system_key'=>'allow_comments',
                'system_value'=>1
            ],
            [
                'cate'=>1,
                'system_key'=>'seo_key',
                'system_value'=>'seo 关键字'
            ],
            [
                'cate'=>1,
                'system_key'=>'seo_desc',
                'system_value'=>'seo 描述'
            ],
            [
                'cate'=>1,
                'system_key'=>'copyright',
                'system_value'=>'版权申明'
            ],
            [
                'cate'=>1,
                'system_key'=>'home_title',
                'system_value'=>'首页标题'
            ],
            [
                'cate'=>1,
                'system_key'=>'home_subtitle',
                'system_value'=>'首页副标题'
            ]
        ];
        DB::table('systems')->insert($config);
    }

}
