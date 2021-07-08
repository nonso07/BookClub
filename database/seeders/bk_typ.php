<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookType;

class bk_typ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $avaliableCourse =[
            [
              'id'=>1,
              'Book_catigory'=>'web design materials',
               'enabled'=> true,
            ],
            [
                'id'=>2,
                'Book_catigory'=>'Cyber Security',
                 'enabled'=> true,
            ],
            [
                'id'=>3,
                'Book_catigory'=>'Networking materials',
                 'enabled'=> true,
              ],
              [
                'id'=>4,
                'Book_catigory'=>'Technology Trends',
                 'enabled'=> true,
              ],
              [
                'id'=>5,
                'Book_catigory'=>'Graphics',
                 'enabled'=> true,
              ],
              [
                'id'=>6,
                'Book_catigory'=>'Database',
                 'enabled'=> true,
              ],
              [
                'id'=>7,
                'Book_catigory'=>'Informatin management',
                 'enabled'=> true,
              ],
              [
                'id'=>8,
                'Book_catigory'=>'System(IMS)',
                 'enabled'=> true,
              ],
              [
                'id'=>9,
                'Book_catigory'=>'Software Design and Analysis',
                 'enabled'=> true,
              ],
              [
                'id'=>10,
                'Book_catigory'=>'Data Analysis',
                 'enabled'=> true,
              ],
              [
                'id'=>11,
                'Book_catigory'=>'System maintenance',
                 'enabled'=> true,
              ],
        ];
        BookType::insert($avaliableCourse);


    }
}
