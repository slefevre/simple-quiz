<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$i = 0;
        DB::table('questions')->insert(
            [
                'wording' => "What is the average air speed velocity of a laden swallow?",
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "What do you get when you multiply six by nine?",
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "What is your father's middle name?",
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "How many licks does it take to get to the tootsie roll center of a tootsie pop?",
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
            [
                'wording' => "What would you do for a Klondike bar?",
                'created_at' => Carbon::now(),
                'sort' => ++$i,
            ],
        );
    }
}
